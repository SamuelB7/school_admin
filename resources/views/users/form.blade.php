@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @if (isset($user->id))
        <div class="d-flex align-items-center">
            <a href="{{ Route('users.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left mr-2"></i>Return</a>
            
        </div>
    @else
    <div class="d-flex align-items-center">
        <a href="{{ Route('users.index') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left mr-2"></i>Return</a>
        
    </div>
        
    @endif
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <x-adminlte-card title="{{ isset($user->id) ? 'Edit User' : 'Create user' }}" theme="dark" icon="">
                    <form @if(isset($user)) action="{{ Route('users.update', $user->id) }}" @else action="{{ Route('users.store') }}" @endif method="post">
                        @csrf
                        @if (isset($user->id))
                            @method('PUT')
                            <input type="hidden" name='id' value="{{ $user->id }}" />
                        @endif

                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" type="text" name="name" id="" value="{{ isset($user->id) ? $user->name : '' }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Document ID</label>
                            <input class="form-control" type="text" name="document_id" id="" value="{{ isset($user->id) ? $user->document_id : '' }}">
                            @error('document_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Phone</label>
                            <input class="form-control" type="phone" name="phone" id="" value="{{ isset($user->id) ? $user->phone : '' }}">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="email" name="email" id="" value="{{ isset($user->id) ? $user->email : '' }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Address</label>
                            <input class="form-control" type="text" name="address" id="" value="{{ isset($user->id) ? $user->address : '' }}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Address complement</label>
                            <input class="form-control" type="text" name="address_complement" id="" value="{{ isset($user->id) ? $user->address_complement : '' }}">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input class="form-control" type="password" name="password" id="" value="">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Role</label>
                            <select class="form-control" name="role" id="">
                                <option value=""></option>
                                @foreach($roles as $role)
                                <option value="{{$role->name}}" @if(isset($user) && $user->getRoleNames()->first() == $role->name) selected @endif>{{$role->name}}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col text-right mt-3">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> Save
                            </button>
                        </div>
                    </form>


                </x-adminlte-card>
            </div>

        </div>
    </div>


@stop

@section('css')

@stop

@section('js')

@stop
