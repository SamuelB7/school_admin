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
                                <h1>Details</h1>
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
