<?php


namespace App;


use Illuminate\Support\Facades\Storage;

class Image
{
    public static function upload($destination, $image_name, $image){
        Storage::disk('public')->put($destination.$image_name, $image);
    }
    public static function delete($path){
        Storage::disk('public')->delete($path);
    }
}
