<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //  
     public function addItem(Request $request){
             $product = new Item();
             $input = $request->all();
             if($image = $request->file('image')){
                $destination_path = 'images/';
                $image_name = date('YmdHis') . '.' . $image->getClientOriginalExtension();
                $image->move($destination_path,$image_name);
                $input['image'] = "$image_name";
             }
             $product->fill($input);
             $product->save();
             return redirect()->route('dashboard');  
      }


    public function DisplayItems(){

         $products=Item::all();

        if(Auth::user()->role == true){
        return view('dashboard',compact('products'));
        }else{
        return view('User',compact('products'));

        }
      
    }


    public function edit($id)
    {
        $item=Item::find($id);
        return view('UpdateItem',['item'=>$item]);
    }



    public function destroy(Item $Item, $id)
    {
        Item::destroy($id);
        return redirect()->route('dashboard');
    }
    
    public function update(Request $request,$id)
    {
       $item=Item::find($id);


       
       $item->name= $request->input('name');
       $item->price= $request->input('price');
       $item->description= $request->input('description');
     



       if($image = $request->file('image')){
        $destination_path = 'images/';
        $image_name = date('YmdHis') . '.' . $image->getClientOriginalExtension();
        $image->move($destination_path,$image_name);
        $item['image'] = "$image_name";
       }
    //  }else{
    //     unset( $item['image'] );
    //  }
      

    //  $item->image= $request->input('image');

       $item->save();
        return redirect()->route('dashboard');
    }


}
