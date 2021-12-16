<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
    		'food',
    		'caption',
    		'location',
    		'price',
    		'cover',
    		'stock',
    		'user_id',


    ];

public function images(){
	return $this->hasMany(Image::class);
}



}
