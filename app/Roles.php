<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
  protected $fillable = ['rolename', 'description'];

  public function scopeSearch($query, $s) {
  	return $query->where('rolename', 'like', '%' .$s. '%')
  			->orWhere('description', 'like', '%' .$s. '%' );

  }
}
