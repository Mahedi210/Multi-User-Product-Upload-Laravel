@extends('admin.master')

@section('content')



    <form action="{{route('admin.color.update',$color->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PUT')

        <div class="row">
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="color"><h4>Color Name</h4></label>
                    <input type="text" class="form-control" id="color_name" name="color_name" value="{{$color->color_name}}">
                </div>

                <div class="mb-5">
                    <label for="title"><h4>color description</h4></label>
                    <input type="text" class="form-control" id="color_description" name="color_description" value="{{$color->color_description}}">
                </div>


            </div>


        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection

