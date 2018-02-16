<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	use CrudTrait;

    protected $table = 'tags';
    protected $fillable = [
    	'name' , 'slug' ,
    ];
}
