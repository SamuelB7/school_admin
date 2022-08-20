@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col text-right">
                <a href="" class='btn btn-primary'>
                    <i class='fas fa-plus'></i>
                    Add new user
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <x-adminlte-card title="Users table" theme="dark" icon="fas fa-fw  fa-user">


                    <table class='table table-striped'>
                        <thead classe='h5'>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </thead>
                        <tbody id="users">
                            @foreach ($users as $user)
                                <tr id="user-{{$user->id}}">
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->getRoleNames()->first() }}</td>
                                    <td>
                                        <a href="{{ Route('users.show', $user->id) }}" class="btn btn-primary btn-sm">
                                            Details
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </x-adminlte-card>
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>


@stop

@section('css')

@stop

@section('js')

    @if ($message = Session::get('success'))
        <script>
            toastr.success("{{ $message }}")
        </script>
    @endif

@stop
