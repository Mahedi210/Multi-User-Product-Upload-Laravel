@extends('admin.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Gender Name</th>
            <th scope="col">Gender Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($genders) >0 )
            @foreach($genders as $gender)
                <tr>
                    <th scope="row">{{$gender->id}}</th>
                    <td>{{$gender->gender_name}}</td>
                    <td>{{$gender->gender_description}}</td>
                    <td>

                        <div class="row">
                            <form action="{{url('/genders-delete',$gender->id)}}" method="POST" >

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

