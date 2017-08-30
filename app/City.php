<?php

namespace App;
 

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =  [
        'name', 'display_name'
    ];

      public function documents()
   {
   	return $this->hasMany('App\Document');
   }


  public function regions()
  {
  	return $this->belongsToMany('App\Region', 'region_city', 'city_id', 'region_id');
  }

}
