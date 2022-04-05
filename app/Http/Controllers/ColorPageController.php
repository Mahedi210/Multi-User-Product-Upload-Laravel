<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorPageController extends Controller
{
    public function index(){

        return view('admin.color.color-create');
    }

    public function store(Request $request){

        $this->validate($request,[

            'color_name'=>'required|string',
            'color_description'=>'required|string',

        ]);

        $color=new Color();
        $color->color_name=$request->color_name;
        $color->color_description=$request->color_description;
        $color->save();

        return redirect('/colors-list')->with('success','update info update successfully');

    }

    public function list(){
        $colors=Color::all();
        return view('admin.color.color-list',compact('colors'));
    }

    public function edit($id){
        $color=Color::find($id);
        return view('admin.color.color-edit',compact('color'));
    }

    public function update(Request $request,$id){


        $this->validate($request,[

            'color_name'=>'required|string',
            'color_description'=>'required|string',

        ]);

        $color=Color::find($id);
        $color->color_name=$request->color_name;
        $color->color_description=$request->color_description;
        $color->save();

        return redirect('/colors-list')->with('success','update info update successfully');


    }


    public function delete($id){
        $color=Color::find($id);
        $color->delete();
        return redirect('/colors-list')->with('success','update info update successfully');
    }
}
