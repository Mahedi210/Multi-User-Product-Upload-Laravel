@extends('admin.master')

@section('content')



    <form action="{{route('admin.size.update',$size->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
         @method('PUT')

        <div class="row">
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="size"><h4>Size Name</h4></label>
                    <input type="text" class="form-control" id="size_name" name="size_name" value="{{$size->size_name}}">
                </div>

                <div class="mb-5">
                    <label for="size_description"><h4>Size description</h4></label>
                    <input type="text" class="form-control" id="size_description" name="size_description" value="{{$size->size_description}}">
                </div>


            </div>


        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection

