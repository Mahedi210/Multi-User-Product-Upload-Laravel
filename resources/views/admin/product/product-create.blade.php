@extends('admin.master')

@section('content')
    <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-4 mt-3">
                <div class="mb-3">
                    <label for="color"><h4>Product Name</h4></label>
                    <input type="text" class="form-control" id="product_name" name="product_name" >
                </div>

                <div class="mb-5">
                    <label for="product_description"><h4>Product description</h4></label>
                    <input type="text" class="form-control" id="product_description" name="product_description">
                </div>


                <div class="mb-5">
                    <label for="exampleFormControlSelect1" >Product Color</label>
                    <select class="form-control" id="product_color" name="product_color">
                        @if(count($colors)>0)
                            @foreach($colors as $color)
                                <option value="{{ $color->color_name}}">{{$color->color_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="mb-5">
                    <label for="exampleFormControlSelect1" >Product Size</label>
                    <select class="form-control" id="product_size" name="product_size">
                        @if(count($sizes)>0)
                            @foreach($sizes as $size)
                                <option value="{{ $size->size_name}}">{{$size->size_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="mb-5">
                    <label for="exampleFormControlSelect1" >Select GEnder</label>
                    <select class="form-control" id="gender" name="gender">
                        @if(count($genders)>0)
                            @foreach($genders as $gender)
                                <option value="{{ $gender->gender_name}}">{{$gender->gender_name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>


                <div class="mb-5">
                    <label for="price"><h4>Product price</h4></label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
            </div>

        </div>
        <input type="submit" name="submit" class="btn btn-primary ">
    </form>
@endsection


