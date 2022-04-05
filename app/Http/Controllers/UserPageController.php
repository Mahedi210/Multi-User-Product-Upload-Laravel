<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
class UserPageController extends Controller
{
    public function index(){

        $roles  = Role::all();
        return view('admin.user.user-create', compact('roles'));
    }

    public function store(Request $request){
        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'birth_date' => 'required',
            'city' => 'required|max:50',
            'country' => 'required|max:50',
            'phone' => 'required|max:50',
        ]);

        // Create New User
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->birth_date = $request->birth_date;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        return redirect('/users-list')->with('success','update info update successfully');
    }


   public function list(){
       $users=User::all();
       return view('admin.user.user-list', compact('users'));
   }

   public function edit($id){

       $user = User::find($id);
       $roles  =Role::all();
       return view('admin.user.user-edit', compact('user', 'roles'));
   }

  public function update(Request $request,$id){
      // Create New User
      $user = User::find($id);

      // Validation Data
      $request->validate([
          'name' => 'required|max:50',
          'email' => 'required|max:100|email|unique:users,email,' . $id,
          'password' => 'nullable|min:6|confirmed',
      ]);


      $user->name = $request->name;
      $user->email = $request->email;
      if ($request->password) {
          $user->password = Hash::make($request->password);
      }
      $user->birth_date = $request->birth_date;
      $user->city = $request->city;
      $user->country = $request->country;
      $user->phone = $request->phone;
      $user->save();

      $user->roles()->detach();
      if ($request->roles) {
          $user->assignRole($request->roles);
      }

      return back();
  }

 public function delete($id){

     $user = User::find($id);
     if (!is_null($user)) {
         $user->delete();
     }
     return redirect('/users-list');
 }
}
