<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [
        'id','name', 'categoryId', 'description', 'img', 'created_at', 'updated_at'
    ];

    public function category() {
    	$this->belongsTo('App\Models\Category', 'categoryId');
    }
}
