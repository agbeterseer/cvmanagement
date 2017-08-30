<?php

namespace App;


use Illuminate\Database\Eloquent\Relations\Pivot;

class DocumentProfession extends Pivot
{
    protected $fillable=['document_id','profession_id'];
}
