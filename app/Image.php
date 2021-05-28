<?php


namespace App;


use Illuminate\Support\Facades\Storage;

class Image
{
    public static function upload($destination, $image_name, $image){
        Storage::disk('local')->put("public/".$destination.$image_name, $image);
    }
}
