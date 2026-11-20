<?php
namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

class ImageCompressor
{
    public static function compress(
        UploadedFile $file,
        array $jpegQualities = [80,75,70,65,60],
        int $pngCompression = 9,
        ?int $targetBytes = null,
        ?string $driver = 'imagick'
    ): UploadedFile {
        Image::configure(['driver' => $driver ?: 'imagick']);

        $srcPath  = $file->getRealPath();
        $origSize = (is_string($srcPath) && file_exists($srcPath)) ? (filesize($srcPath) ?: 0) : 0;
        $mime     = $file->getClientMimeType() ?: ($srcPath && file_exists($srcPath) ? @mime_content_type($srcPath) : null);

        try {
            $image = Image::make($srcPath)->orientate();
        } catch (\Throwable $e) {
            return $file;
        }

        $candidates = [];
        if (is_string($mime) && (stripos($mime, 'jpeg') !== false || stripos($mime, 'jpg') !== false)) {
            foreach ($jpegQualities as $q) {
                $clone = clone $image;
                $encoded = $clone->interlace(true)->encode('jpg', $q);
                $blob = (string) $encoded;
                $candidates[] = ['ext'=>'jpg','mime'=>'image/jpeg','bytes'=>strlen($blob),'blob'=>$blob];
            }
        } elseif (is_string($mime) && stripos($mime, 'png') !== false) {
            $blob = (string) $image->encode('png', $pngCompression);
            $candidates[] = ['ext'=>'png','mime'=>'image/png','bytes'=>strlen($blob),'blob'=>$blob];
        } else {
            return $file;
        }

        usort($candidates, fn($a,$b)=>$a['bytes']<=>$b['bytes']);
        $best = $targetBytes ? (collect($candidates)->first(fn($c)=>$c['bytes'] <= $targetBytes) ?? $candidates[0]) : $candidates[0];

        if (!$targetBytes && $best['bytes'] >= $origSize) return $file;

        $tmpBase = tempnam(sys_get_temp_dir(), 'img_'); $tmpPath = $tmpBase.'.'.$best['ext']; @unlink($tmpBase);
        file_put_contents($tmpPath, $best['blob']);

        $nameBase = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        return new UploadedFile($tmpPath, $nameBase.'.'.$best['ext'], $best['mime'], null, true);
    }
}