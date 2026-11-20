<script>
    if (typeof window.optimizeProfileImage !== 'function') {
        window.optimizeProfileImage = async function(fileInput) {
            if (!fileInput || !fileInput.files || !fileInput.files.length) return true;

            const originalFile = fileInput.files[0];
            if (!originalFile.type || originalFile.type.indexOf('image/') !== 0) return true;

            const helpText = fileInput.closest('.col-md-4')?.querySelector('.profile-image-help-text');
            const setHelp = function(message, isError) {
                if (!helpText) return;
                helpText.textContent = message;
                helpText.classList.toggle('text-danger', !!isError);
                helpText.classList.toggle('text-muted', !isError);
            };

            const readAsDataUrl = function(file) {
                return new Promise(function(resolve, reject) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        resolve(e.target.result);
                    };
                    reader.onerror = reject;
                    reader.readAsDataURL(file);
                });
            };

            const loadImage = function(dataUrl) {
                return new Promise(function(resolve, reject) {
                    const img = new Image();
                    img.onload = function() {
                        resolve(img);
                    };
                    img.onerror = reject;
                    img.src = dataUrl;
                });
            };

            try {
                setHelp('Optimizing image, please wait...', false);
                const dataUrl = await readAsDataUrl(originalFile);
                const img = await loadImage(dataUrl);

                const MAX_DIMENSION = 1600;
                let targetWidth = img.width;
                let targetHeight = img.height;
                if (targetWidth > MAX_DIMENSION || targetHeight > MAX_DIMENSION) {
                    const scale = Math.min(MAX_DIMENSION / targetWidth, MAX_DIMENSION / targetHeight);
                    targetWidth = Math.max(1, Math.round(targetWidth * scale));
                    targetHeight = Math.max(1, Math.round(targetHeight * scale));
                }

                const canvas = document.createElement('canvas');
                canvas.width = targetWidth;
                canvas.height = targetHeight;
                const ctx = canvas.getContext('2d');
                ctx.imageSmoothingEnabled = true;
                ctx.imageSmoothingQuality = 'high';
                ctx.drawImage(img, 0, 0, targetWidth, targetHeight);

                const toBlob = function(quality) {
                    return new Promise(function(resolve) {
                        canvas.toBlob(function(blob) {
                            resolve(blob);
                        }, 'image/jpeg', quality);
                    });
                };

                let quality = 0.9;
                let blob = await toBlob(quality);
                const targetSize = 900 * 1024;
                while (blob && blob.size > targetSize && quality > 0.65) {
                    quality -= 0.05;
                    blob = await toBlob(quality);
                }

                if (!blob || blob.size >= originalFile.size) {
                    setHelp('Allowed: JPG, PNG | Max size: 1 MB', false);
                    return true;
                }

                const baseName = (originalFile.name || 'profile').replace(/\.[^/.]+$/, '');
                const optimizedFile = new File([blob], baseName + '.jpg', {
                    type: 'image/jpeg',
                    lastModified: Date.now()
                });

                const dt = new DataTransfer();
                dt.items.add(optimizedFile);
                fileInput.files = dt.files;

                setHelp('Allowed: JPG, PNG | Max size: 1 MB', false);
                return true;
            } catch (err) {
                setHelp('Could not optimize image. Original file will be uploaded.', false);
                return true;
            }
        };
    }
</script>
