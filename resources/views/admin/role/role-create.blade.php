@extends('admin.master')

@section('content')
    <h1>Create Role</h1>

    @include('layouts.messages')
    <form action="{{route('admin.role.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="icon"><h4>Roles Name</h4></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter a Role Name">
                </div>

                <div class="form-group">
                    <label for="name">Permissions</label>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                        <label class="form-check-label" for="checkPermissionAll">All</label>
                    </div>
                    <hr>
                    @php $i = 1; @endphp
                    @foreach ($permission_groups as $group)
                        <div class="row">
                            <div class="col-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                    <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                                </div>
                            </div>

                            <div class="col-9 role-{{ $i }}-management-checkbox">
                                @php
                                    $permissions = App\User::getpermissionsByGroupName($group->name);
                                    $j = 1;
                                @endphp
                                @foreach ($permissions as $permission)
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="permissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
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

<!--
                <div class="form-group">
                    <label for="name">Permissions</label>

                    @foreach ($permissions as $permission)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="permissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                            <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                        </div>
                    @endforeach
                </div>
-->

            </div>


        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection

@section('scripts')
    @include('admin.role.script.script');
@endsection
