<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    //
    public function news(){
        return $this->belongsTo('App\News');
    }

    public function getNewsImageAttribute(){
        if ($this->image != null) {
            if (substr($this->image, 0, 4) === "http") {
                return $this->image;
            } else {
                return '/images/news_images/' . $this->image;
            }
        }else{
            return '/images/news_images/default.jpg';
        }
    }
}
