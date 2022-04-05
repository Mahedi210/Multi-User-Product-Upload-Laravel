
@extends('admin.master')

@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Roles</th>
            <th scope="col">BD</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">phone</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($users) >0 )
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            <span class="badge badge-info mr-1">
                                                {{ $role->name }}
                                            </span>
                        @endforeach
                    </td>
                    <td>{{$user->birth_date}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->country}}</td>
                    <td>{{$user->phone}}</td>

                    <td>
                        <a class="btn btn-success text-white" href="{{ route('admin.user.edit', $user->id) }}">Edit</a>

                        <a class="btn btn-danger text-white" href="{{ route('admin.user.destroy', $user->id) }}"
                           onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                            Delete
                        </a>

                        <form id="delete-form-{{ $user->id }}" action="{{ route('admin.user.destroy', $user->id) }}" method="POST" style="display: none;">
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
    </table>

@endsection
