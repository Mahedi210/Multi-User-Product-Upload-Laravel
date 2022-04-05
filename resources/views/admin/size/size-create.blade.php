@extends('admin.master')

@section('content')
    <form action="{{route('admin.size.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="size"><h4>Size Name</h4></label>
                    <input type="text" class="form-control" id="size_name" name="size_name" >
                </div>

                <div class="mb-5">
                    <label for="size_description"><h4>size description</h4></label>
                    <input type="text" class="form-control" id="size_description" name="size_description">
                </div>


            </div>


        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection

