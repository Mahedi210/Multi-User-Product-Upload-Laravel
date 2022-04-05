<?php

namespace App\Http\Controllers;

use App\Color;
use App\Gender;
use App\Product;
use App\Size;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{

    public function index(){
        $sizes=Size::all();
        $colors=Color::all();
        $genders=Gender::all();
        return view('admin.product.product-create',compact('sizes','colors','genders'));
    }

    public function store(Request $request){

        $this->validate($request,[

            'product_name'=>'required|string',
            'product_description'=>'required|string',
            'product_color'=>'required|string',
            'product_size'=>'required|string',
            'gender'=>'required|string',
            'price'=>'required|string',

        ]);

        $product=new Product();
        $product->product_name=$request->product_name;
        $product->product_description=$request->product_description;
        $product->product_color=$request->product_color;
        $product->product_size=$request->product_size;
        $product->gender=$request->gender;
        $product->price=$request->price;

        $product->save();

        return redirect('/products-list')->with('success','update info update successfully');

    }

    public function list(){
        $products=Product::all();
        return view('admin.product.product-list',compact('products'));
    }

    public function edit($id){
        $sizes=Size::all();
        $colors=Color::all();
        $genders=Gender::all();
        $product=Product::find($id);
        return view('admin.product.product-edit',compact('product','sizes','colors','genders'));
    }

    public function update(Request $request,$id){


        $this->validate($request,[

            'product_name'=>'required|string',
            'product_description'=>'required|string',
            'product_color'=>'required|string',
            'product_size'=>'required|string',
            'gender'=>'required|string',
            'price'=>'required|string',

        ]);

        $product=Product::find($id);
        $product->product_name=$request->product_name;
        $product->product_description=$request->product_description;
        $product->product_color=$request->product_color;
        $product->product_size=$request->product_size;
        $product->gender=$request->gender;
        $product->price=$request->price;

        $product->save();

        return redirect('/products-list')->with('success','update info update successfully');
    }


    public function delete($id){
        $product=Product::find($id);
        $product->delete();
        return redirect('/products-list')->with('success','update info update successfully');
    }
}
