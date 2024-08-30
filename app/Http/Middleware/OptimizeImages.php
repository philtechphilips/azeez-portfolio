<?php

use Illuminate\Support\Facades\File;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

$images = File::allFiles(public_path('images'));

foreach ($images as $image) {
Log::info("Optimizing: " . $image->getFilename());
    // Skip already optimized images
    // if (strpos($image->getFilename(), '-optimized') !== false) {
    //     continue;
    // }

    // Optimize the image
    ImageOptimizer::optimize($image->getPathname());

    // Construct the optimized file path correctly
    $pathInfo = pathinfo($image->getPathname());
    $optimizedPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . '-optimized.' . $pathInfo['extension'];
    $beforeSize = filesize($image->getPathname());
    // Rename the file to mark it as optimized
    File::move($image->getPathname(), $optimizedPath);
    $afterSize = filesize($optimizedPath);
    Log::info("Before: $beforeSize bytes, After: $afterSize bytes");
}
