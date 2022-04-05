<?php

namespace App\Http\Controllers;

use App\Color;
use App\Size;
use Illuminate\Http\Request;

class SizePageController extends Controller
{
    public function index(){

        return view('admin.size.size-create');
    }

    public function store(Request $request){

        $this->validate($request,[

            'size_name'=>'required|string',
            'size_description'=>'required|string',

        ]);

        $size=new Size();
        $size->size_name=$request->size_name;
        $size->size_description=$request->size_description;
        $size->save();

        return redirect('/sizes-list')->with('success','update info update successfully');

    }

    public function list(){
        $sizes=Size::all();
        return view('admin.size.size-list',compact('sizes'));
    }

    public function edit($id){
        $size=Size::find($id);
        return view('admin.size.size-edit',compact('size'));
    }

    public function update(Request $request,$id){


        $this->validate($request,[

            'size_name'=>'required|string',
            'size_description'=>'required|string',

        ]);

        $size=Size::find($id);
        $size->size_name=$request->size_name;
        $size->size_description=$request->size_description;
        $size->save();

        return redirect('/sizes-list')->with('success','update info update successfully');
    }


    public function delete($id){
        $size=Size::find($id);
        $size->delete();
        return redirect('/sizes-list')->with('success','update info update successfully');
    }
}
