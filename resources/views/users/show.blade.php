@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <a href="{{ Route('users.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left mr-2"></i>Return</a>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                
            </div>
            <div class="col text-right">
                
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <x-adminlte-card title="{{ $user->name }}" theme="dark" icon="fas fa-fw  fa-user">
                    <div class="card-header">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#details">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#otherdetail">otherdetail</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#moredetails">moredetails</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="details">
                                <div class="row">
                                    <div class="col">
                                        <label class="mr-2">Name:</label>
                                        <p>{{$user->name}}</p>

                                        <label class="mr-2">Email:</label>
                                        <p>{{$user->email}}</p>

                                        <label class="mr-2">Phone:</label>
                                        <p>{{$user->phone}}</p>
                                    </div>
                                    <div class="col">
                                        <label class="mr-2">Address:</label>
                                        <p>{{$user->address}}</p>

                                        <label class="mr-2">Document ID:</label>
                                        <p>{{$user->document_id}}</p>

                                        <label class="mr-2">Role:</label>
                                        <p>{{$user->getRoleNames()->first()}}</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <a href="{{ Route('users.edit', $user->id) }}" class="btn btn-sm btn-warning mr-2">Edit</a>
                                    <form action="{{ Route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button onclick=" return confirm('Are you sure?')" type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="tab-pane" id="otherdetail">
                                <h1>otherdetails</h1>
                            </div>
                            <div class="tab-pane" id="moredetails">
                                <h1>moredetails</h1>
                            </div>
                        </div>
                    </div>
                </x-adminlte-card>
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
