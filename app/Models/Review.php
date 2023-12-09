<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

public function book (){
    //define one to many realtionship each review belongs to one book
    return $this->belongsTo(Review::class);
}
}
