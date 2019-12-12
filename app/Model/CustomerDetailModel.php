<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerDetailModel extends Model {

	protected $fillable = ['id', 'name', 'mobile', 'address1', 'address2', 'city', 'state', 'pincode', 'created_at', 'updated_at'];
	
    public $rules = [
	    	'name' => 'required',
	    	'mobile' => 'required',
	    	'address1' => 'required',
	    	'address2' => 'required',
	    	'city' => 'required',
	    	'state' => 'required',
	    	'pincode' => 'required'
	   	];
}