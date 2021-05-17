<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function create()
    {
        return view("images.create");
    }

    public function store(Request $request)
    {
        $path = $request->file("image")->store("images", "s3");
        $image = Image::create([
            "filename" => basename($path),
            "url" => Storage::disk("s3")->url($path) # s3 url
        ]);
        return $image;
    }

    public function show(Image $image)
    {
        # this is for private images, it will display them directly in the browser
        // return response(Storage::disk('s3')->get("images/" . $image->filename))->header('Content-Type', 'image/jpeg');

        # works with private files as well
        // return Storage::disk("s3")->response("images/" . $image->filename); 

        # for publicly accessible files
        return view("images.show", ["url" => $image->url]); 
    }
}
