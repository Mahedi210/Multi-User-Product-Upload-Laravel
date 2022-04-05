@extends('admin.master')

@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Role Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(count($roles) >0 )
            @foreach($roles as $role)
                <tr>
                    <th scope="row">{{$role->id}}</th>
                    <td>{{$role->name}}</td>
                    <td>
                        @foreach ($role->permissions as $perm)
                            <span class="badge badge-info mr-1">
                                                {{ $perm->name }}
                            </span>
                        @endforeach
                    </td>

                    <td>
                        <a class="btn btn-success text-white" href="{{ route('admin.role.edit', $role->id) }}">Edit</a>

                        <a class="btn btn-danger text-white" href="{{ route('admin.role.destroy', $role->id) }}"
                           onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">
                            Delete
                        </a>

                        <form id="delete-form-{{ $role->id }}" action="{{ route('admin.role.destroy', $role->id) }}" method="POST" style="display: none;">
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
