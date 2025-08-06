<?php

// config for Bamit/LaravelUploadCopy
return [
    'disk' => env('UPLOAD_COPY_DISK', config('filesystems.default')), // use app disk if not overridden
    'folder' => 'uploads',
];
