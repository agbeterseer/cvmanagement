<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = ['name','description','display_name'];

    public function documents()
    {
    	return $this->belongsToMany('App\Document')->using('App\DocumentProfession');
    }

 
   
}
