<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::middleware(['web'])->group(function () {
  

    Route::get('upload-copy-test', function () {
        return view('upload-and-copy::upload-form');
    });

    Route::post('upload-copy-test', function (Request $request) {
        $request->validate([
            'image' => 'required|image|max:5020',
        ]);

        $disk = config('upload-and-copy.disk') == 'local' ? 'public' : config('upload-and-copy.disk');
        $folder = config('upload-and-copy.folder');

        $path = $request->file('image')->store($folder, $disk);

        // Generate full URL based on disk
        if ($disk === 's3') {
            $url = Storage::disk('s3')->url($path);
        } else {
            $url = asset("storage/{$path}");
        }
        \Log::info("File uploaded to: {$url}");
        return back()->with('uploaded_url', $url);
    });
});

