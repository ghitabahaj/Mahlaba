<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;



class ItemController extends Controller
{
    public function addItem(Request $request){
      dd($request);
      die();
           $product= new Item();
           $product->fill($request->all());
           $product->save();
           return view('home');  
    }
}
