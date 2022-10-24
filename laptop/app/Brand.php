<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'brand_name'
    ];
    protected $primaryKey = 'brand_id';
 	protected $table = 'tbl_brand_product';

}
