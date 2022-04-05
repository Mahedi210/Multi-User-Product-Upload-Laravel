@extends('admin.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Description</th>
            <th scope="col">Color</th>
            <th scope="col">size</th>
            <th scope="col">gender</th>
            <th scope="col">perice</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($products) >0 )
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_description}}</td>
                    <td>{{$product->product_color}}</td>
                    <td>{{$product->product_size}}</td>
                    <td>{{$product->gender}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <div class="row">
                            <div class="col-sm-2"><a href="{{url('/products-edit',$product->id)}}" class="btn btn-primary">Edit</a></div>

                        </div>
                        <div class="row">
                            <form action="{{url('/products-delete',$product->id)}}" method="POST" >

                                @csrf
                                @method('DELETE')
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">

                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection

