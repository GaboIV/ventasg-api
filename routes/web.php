<?php

Route::any('images/{location}/{filename}', function ($location, $filename) {
    $file = storage_path("app/public/$location/$filename");
    $fileMime = mime_content_type($file);
    return (new \Illuminate\Http\Response(file_get_contents($file), 200))->header('Content-Type', $fileMime);
});