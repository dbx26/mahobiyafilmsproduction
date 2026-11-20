<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicPageController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Public Website Routes (Mahobiya Films Production)
|--------------------------------------------------------------------------
*/
Route::get('/', [PublicPageController::class, 'home'])->name('home');
Route::get('/about', [PublicPageController::class, 'about'])->name('about');
Route::get('/films', [PublicPageController::class, 'films'])->name('films');
Route::get('/films/{slug}', [PublicPageController::class, 'filmDetail'])->name('film.detail');
Route::get('/team', [PublicPageController::class, 'team'])->name('team');
Route::get('/gallery', [PublicPageController::class, 'gallery'])->name('gallery');
Route::get('/videos', [PublicPageController::class, 'videos'])->name('videos');
Route::get('/news', [PublicPageController::class, 'news'])->name('news');
Route::get('/contact', [PublicPageController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [PublicPageController::class, 'contactSubmit'])->name('contact.submit');

/*
|--------------------------------------------------------------------------
| Cache and Utility Routes
|--------------------------------------------------------------------------
*/
Route::get('/cache-clear', [Controller::class, 'getArtisanCommandClear']);
Route::get('/cache-clear-build', [Controller::class, 'getArtisanCommand']);

/*
|--------------------------------------------------------------------------
| Storage & Image Resizing Engine
|--------------------------------------------------------------------------
*/
Route::get('/custom_file/{path}', function ($path) {
    if (!Storage::disk('custom_private')->exists($path)) {
        abort(404);
    }

    $fullPath = Storage::disk('custom_private')->path($path);
    $mime = mime_content_type($fullPath) ?: 'application/octet-stream';
    $file = Storage::disk('custom_private')->get($path);

    $requestedWidth = max(0, (int) request()->query('w', 0));
    $requestedHeight = max(0, (int) request()->query('h', 0));
    $canResize = $requestedWidth > 0
        && $requestedHeight > 0
        && str_starts_with($mime, 'image/')
        && function_exists('imagecreatefromstring')
        && function_exists('imagecreatetruecolor')
        && function_exists('imagecopyresampled');

    if ($canResize) {
        $sourceImage = @imagecreatefromstring($file);

        if ($sourceImage !== false) {
            $sourceWidth = imagesx($sourceImage);
            $sourceHeight = imagesy($sourceImage);

            if ($sourceWidth > 0 && $sourceHeight > 0) {
                $targetImage = imagecreatetruecolor($requestedWidth, $requestedHeight);

                if ($targetImage !== false) {
                    $supportsAlpha = in_array($mime, ['image/png', 'image/webp', 'image/gif'], true);

                    if ($supportsAlpha) {
                        imagealphablending($targetImage, false);
                        imagesavealpha($targetImage, true);
                        $transparent = imagecolorallocatealpha($targetImage, 0, 0, 0, 127);
                        imagefilledrectangle($targetImage, 0, 0, $requestedWidth, $requestedHeight, $transparent);
                    } else {
                        $background = imagecolorallocate($targetImage, 255, 255, 255);
                        imagefilledrectangle($targetImage, 0, 0, $requestedWidth, $requestedHeight, $background);
                    }

                    $sourceRatio = $sourceWidth / $sourceHeight;
                    $targetRatio = $requestedWidth / $requestedHeight;

                    if ($sourceRatio > $targetRatio) {
                        $cropHeight = $sourceHeight;
                        $cropWidth = (int) round($sourceHeight * $targetRatio);
                        $sourceX = (int) max(0, floor(($sourceWidth - $cropWidth) / 2));
                        $sourceY = 0;
                    } else {
                        $cropWidth = $sourceWidth;
                        $cropHeight = (int) round($sourceWidth / $targetRatio);
                        $sourceX = 0;
                        $sourceY = (int) max(0, floor(($sourceHeight - $cropHeight) / 2));
                    }

                    imagecopyresampled(
                        $targetImage,
                        $sourceImage,
                        0,
                        0,
                        $sourceX,
                        $sourceY,
                        $requestedWidth,
                        $requestedHeight,
                        $cropWidth,
                        $cropHeight
                    );

                    ob_start();
                    $resizedMime = $mime;

                    if ($mime === 'image/png') {
                        imagepng($targetImage);
                    } elseif ($mime === 'image/gif') {
                        imagegif($targetImage);
                    } elseif ($mime === 'image/webp' && function_exists('imagewebp')) {
                        imagewebp($targetImage, null, 82);
                    } else {
                        $resizedMime = 'image/jpeg';
                        imagejpeg($targetImage, null, 82);
                    }

                    $resizedImage = ob_get_clean();

                    imagedestroy($targetImage);
                    imagedestroy($sourceImage);

                    if ($resizedImage !== false && $resizedImage !== '') {
                        return Response::make($resizedImage, 200, [
                            'Content-Type' => $resizedMime,
                            'Cache-Control' => 'public, max-age=86400',
                        ]);
                    }
                }
            }

            imagedestroy($sourceImage);
        }
    }

    return Response::make($file, 200, [
        'Content-Type' => $mime,
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->where('path', '.*');
