<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function sizes(){
        return $this->hasMany(ProductSize::class);
    }

    public function colors(){
        return $this->hasMany(ProductColor::class);
    }

    public function sliderImages(){
        return $this->hasMany(SliderImage::class);
    }

    public function tags(){
        return $this->hasMany(Tag::class);
    }
}
