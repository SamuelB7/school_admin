@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>{{ $user->name }} details</h1>
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
