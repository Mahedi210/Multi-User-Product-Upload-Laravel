@extends('admin.master')

@section('content')
    <h1>Edit Role</h1>

    @include('layouts.messages')
    <form action="{{route('admin.role.update',$role->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Role Name</label>
            <input type="text" class="form-control" id="name" value="{{ $role->name }}" name="name" placeholder="Enter a Role Name">
        </div>

        <div class="form-group">
            <label for="name">Permissions</label>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1" {{ App\User::roleHasPermissions($role, $all_permissions) ? 'checked' : '' }}>
                <label class="form-check-label" for="checkPermissionAll">All</label>
            </div>
            <hr>
            @php $i = 1; @endphp
            @foreach ($permission_groups as $group)
                <div class="row">
                    @php
                        $permissions = App\User::getpermissionsByGroupName($group->name);
                        $j = 1;
                    @endphp

                    <div class="col-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)" {{ App\User::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                            <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                        </div>
                    </div>

                    <div class="col-9 role-{{ $i }}-management-checkbox">

                        @foreach ($permissions as $permission)
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})" name="permissions[]" {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }} id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                            </div>
                            @php  $j++; @endphp
                        @endforeach
                        <br>
                    </div>

                </div>
                @php  $i++; @endphp
            @endforeach
        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection

@section('scripts')
    @include('admin.role.script.script');
@endsection
