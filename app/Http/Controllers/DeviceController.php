<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    //retrieve a single row by its id column value using find method of query builder.
    public function list ($id=null) {
    	return $id ? Device::find($id) : Device::all();
    }

    public function test($name=null) {
    	//get devices where in column name is equal to $name
  		// $products = Device::where('name', $name)->get();
  		// $products = Device::where('name', 'One')->get();
  		// $products = Device::pluck('name','member_id');
    	$products = Device::where('name', $name)->get();
  		 if ($name) {
  			return $products; 	
  		 } else {
  		 	return Device::all();
		}
    }
}
