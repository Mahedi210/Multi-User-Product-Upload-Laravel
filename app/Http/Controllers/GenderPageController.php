<?php

namespace App\Http\Controllers;

use App\Color;
use App\Gender;
use Illuminate\Http\Request;

class GenderPageController extends Controller
{
    public function index(){

        return view('admin.gender.gender-create');
    }

    public function store(Request $request){

        $this->validate($request,[

            'gender_name'=>'required|string',
            'gender_description'=>'required|string',

        ]);

        $gender=new Gender();
        $gender->gender_name=$request->gender_name;
        $gender->gender_description=$request->gender_description;
        $gender->save();

        return redirect('/genders-list')->with('success','update info update successfully');

    }

    public function list(){
        $genders=Gender::all();
        return view('admin.gender.gender-list',compact('genders'));
    }

    public function edit($id){
        $gender=Gender::find($id);
        return view('admin.gender.gender-edit',compact('gender'));
    }

    public function update(Request $request,$id){


        $this->validate($request,[

            'gender_name'=>'required|string',
            'gender_description'=>'required|string',

        ]);

        $gender=Gender::find($id);
        $gender->gender_name=$request->gender_name;
        $gender->gender_description=$request->gender_description;
        $gender->save();

        return redirect('/genders-list')->with('success','update info update successfully');



    }


    public function delete($id){
        $gender=Gender::find($id);
        $gender->delete();
        return redirect('/genders-list')->with('success','update info update successfully');
    }
}
