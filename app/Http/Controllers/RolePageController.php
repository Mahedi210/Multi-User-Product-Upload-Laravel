<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RolePageController extends Controller

{

    public function index(){

        $all_permissions =Permission::all();
        $permission_groups=User::getpermissionGroups();
        return view('admin.role.role-create', compact('all_permissions','permission_groups'));
    }


    public function store(Request $request){

        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles'
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        // Process Data
        $role = Role::create(['name' => $request->name]);

        // $role = DB::table('roles')->where('name', $request->name)->first();
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        return redirect('/roles-list')->with('success','update info update successfully');
    }


    public function list(){

        $roles=Role::all();
        return view('admin.role.role-list',compact('roles'));
    }

    public function edit($id){

        $role = Role::findById($id);
        $all_permissions = Permission::all();
        $permission_groups = User::getpermissionGroups();
        return view('admin.role.role-edit', compact('role', 'all_permissions', 'permission_groups'));
    }

    public function update(Request $request,$id){
        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles,name,' . $id
        ], [
            'name.requried' => 'Please give a role name'
        ]);

        $role = Role::findById($id);
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {

            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }

        return redirect('/roles-list')->with('success','update info update successfully');
    }


   public function delete($id){

       $role = Role::findById($id);
       if (!is_null($role)) {
           $role->delete();
       }

       return back();
   }

}
