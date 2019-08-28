<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function categories(){


    	return $this->belongsTo(Category::class,'category_id');
   }
	
public function subcategories()
		{
		return $this->belongsTo(Subcategory::class,'subcategory_id');
		}
}
