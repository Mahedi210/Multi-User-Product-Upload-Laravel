@extends('admin.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Color Name</th>
            <th scope="col">Color Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($colors) >0 )
            @foreach($colors as $color)
                <tr>
                    <th scope="row">{{$color->id}}</th>
                    <td>{{$color->color_name}}</td>
                    <td>{{$color->color_description}}</td>
                    <td>
                        <div class="row">
                            <div class="col-sm-2"><a href="{{url('/colors-edit',$color->id)}}" class="btn btn-primary">Edit</a></div>

                        </div>
                        <div class="row">
                            <form action="{{url('/colors-delete',$color->id)}}" method="POST" >

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
