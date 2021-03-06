<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Validator;

class ProductController extends Controller
{
    //Get data from front end pass to db
    function add (Request $request) {
    	$product = new Product;

    	$product->name = $request->name;
    	$product->slug = $request->slug;
    	$product->description = $request->description;
    	
    	$result = $product->save();
    	
    	if ($result) {
    		return ["Result" => "Data has been saved!"];
    	} else {
    		return ["Result" => "Operation Failed!"];

    	}
    }
    function update (Request $request) {
    	$product = Product::find($request->id);
    	$product->name = $request->name;
    	$product->slug = $request->slug;
    	$product->description = $request->description;

    	$result = $product->save();

    	if ($result) {
    		return ["Result" => "Data is updated!"];
    	} else {
    		return ["Result" => "Operation Failed!"];

    	}
    }
    function search ($name) {
    	// $result = Product::where('name', $name)->get();
    	 $result = Product::where('name', "like", "%".$name."%")->get();

    	 if ($result->count() > 0) {
    	 	return $result;
    	 } else {
    	 	return ["Result" => "Search not found. Try other keywords."];
    	 }
    }
    function delete ($id) {
    	// $product = Product::where('id', $id);
    	$product = Product::find($id);
    	$result = $product->delete();

    	if ($result) {
    		return ["Result" => "Data successfully deleted!"];
    	} else {
    		return ["Result" => "Delete failed!"];
    	}
    }
    function testData (Request $request) {
  		//create rules
  		$rules = array(
  			"name" => "required|min:2|max:4",
  			"slug" => "required",
  			"description" => "required"
  		);
  		//validate the request data 
  		$validator = Validator::make($request->all(), $rules);
  		if ($validator->fails()) {
  			// return $validator->errors();
  			//dapat yung response status is 401 kapag may issue sa data like unauthorized
  			return response()->json($validator->errors(), 401);
  		} else {
  			$product = new Product;

  			$product->name = $request->name;
  			$product->slug = $request->slug;
  			$product->description = $request->description;
  			$result = $product->save();

  			if ($result) {
  				return ["Result" => "Data have been saved!"];
  			} else {
  				return ["Result" => "Operation Failed"];
  			}
  		}
    }
}
