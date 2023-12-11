<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    public function reviews(){
        return $this->hasMany(Review::class);
    }


    //A alternative for  \App\Models\Book::where('title','LIKE','%qui%')->get(); by seraching by title

    public function scopeTitle(Builder $query, string $title) : Builder
    {
        dd($query);
return $query->where('title','LIKE','%'. $title .'%');
    }
}
