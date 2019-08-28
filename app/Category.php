<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Category extends Model

{

 	//public function products(){

   //	return $this->hasMany('App\Product');
   // }



   // public function subcategories()
	//{
//	return $this->hasMany('App\Category');
//	}

	public function products()
		{
		return $this->hasMany('App\Product');
		}

	public function subcategories()
		{
		return $this->hasMany('App\Subcategory','category_id');
		}

protected $fillable = ['categories'];

}




