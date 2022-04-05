@extends('admin.master')

@section('content')
    <h1>Create Role</h1>

    @include('layouts.messages')
    <form action="{{ route('admin.user.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="name">User Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="email">User Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="birth_date">Birth Date</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Enter Date">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="password">Assign Roles</label>
                <select name="roles[]" id="roles" class="form-control select2" multiple>
                    @foreach ($roles as $role)
                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save User</button>
    </form>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2').select2();
        })
    </script>
@endsection

