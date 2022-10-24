<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	' category_name'

    ];
    protected $primaryKey = 'cateogry_id';
 	protected $table = 'tbl_category_product';
}
