<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'name', 'password','mobile', 'email', 'ward_id', 'login_by', 'shipping_name', 'housenumber_street'
    ];
    protected $primaryKey = 'id';
 	protected $table = 'customer';
}
