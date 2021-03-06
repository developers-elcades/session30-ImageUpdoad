<?php

namespace Market\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
   protected $table= 'products';
   protected $primarykey = 'id';
   public $timestamps = false;

   protected  $fillable= [
      'id','name', 'price', 'marks_id','image'
   ];


   public function mark()
   {
      // hasmany - tiene muchas
      return $this->hasmany(Mark::class);
   }


}
