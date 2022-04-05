@extends('admin.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Size Name</th>
            <th scope="col">Size Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($sizes) >0 )
            @foreach($sizes as $size)
                <tr>
                    <th scope="row">{{$size->id}}</th>
                    <td>{{$size->size_name}}</td>
                    <td>{{$size->size_description}}</td>
                    <td>
                        <div class="row">
                            <div class="col-sm-2"><a href="{{url('/sizes-edit',$size->id)}}" class="btn btn-primary">Edit</a></div>

                        </div>
                        <div class="row">
                            <form action="{{url('/sizes-delete',$size->id)}}" method="POST" >

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

