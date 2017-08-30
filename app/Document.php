<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
 
class Document extends Model
{
   protected $fillable=['candidates_name','years_of_experience'];

   public function professions()
   {
   	return $this->belongsToMany('App\Profession','document_profession', 'document_id', 'profession_id');
   }

     public function city()
   {
   	return $this->belongsTo('App\City');
   }
     public function region()
   {
      return $this->belongsTo('App\Region');
   }

   public function scopeSearch($query, $s)
   {
   	return $query->where('years_of_experience', 'like', '%' .$s. '%')
   		->orWhere('candidates_name', 'like', '%' .$s. '%');
   }

   
}