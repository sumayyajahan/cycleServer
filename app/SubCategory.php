<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['category_id', 'subcategory_name', 'subcategory_description', 'publication_status'];

    protected $table = 'sub_categories';

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
