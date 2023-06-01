<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Category
{
    public static function find($slug){
        if(!file_exists($path = resource_path("categories/{$slug}.html"))){
            throw new ModelNotFoundException();
        }

        return cache()->remember("categories.{$slug}", 1200, fn() => file_get_contents($path));
    }
}