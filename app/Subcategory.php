<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    // public function subcategory(){


    //	return $this->belongsTo('App\Category','category_id');
   // }
public function categories()
{
return $this->belongsTo(Category::class);
}

/*public function category()
{
return $this->belongsTo(Category::class,'category_id');
}*/
public function products()
{
return $this->hasMany('App\Product','category_id');
}

   
}
