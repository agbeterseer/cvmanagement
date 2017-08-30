<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
 
class Region extends Model
{
 protected $fillable=['name','display_name'];

 public function cities()
 {
 	return $this->belongsToMany('App\City', 'region_city', 'region_id', 'city_id');
 }

}
