<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'category_description', 'publication_status'];

    protected $table = 'categories';

    public function subCategory()
    {
    	return $this->hasMany('App\SubCategory');
    }
}
