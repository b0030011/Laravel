<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Task extends Model
{
    protected $fillable=['title','slug','description','created_by','modified_by'];

    //slug
    public function setSlugAttribute($value){
    	$this->attributes['slug']=Str::slug( mb_substr($this->title, 0, 40)."-".\Carbon\Carbon::now()->format('dmyHi'), '-');
    }
}
