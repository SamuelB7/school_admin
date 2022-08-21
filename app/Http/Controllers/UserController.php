<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $this->can('user-show');

        $users = User::paginate(30);

        return view('users.index', compact('users'));
    }

    public function create() {
        $roles = \Spatie\Permission\Models\Role::all();

        return view('users.form', compact('roles'));
    }
    
    public function store(Request $request) {
        $validate = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role' => 'required'
            ], 
            [
                'required' => 'This field is required'
            ]
        );

        $data = $request->toArray();

        $user = User::create($data);

        $user->assignRole($request['role']);

        return redirect('/users')->with('success', 'New user added');
    }

    public function show($id) {
        $user = User::find($id);

        return view('users.show', compact('user'));
    }

    public function edit($id) {
        $user = User::find($id);
        $roles = \Spatie\Permission\Models\Role::all();

        return view('users.form', compact('roles', 'user'));
    }

    public function update(Request $request, $id) {
        $validate = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role' => 'required'
            ], 
            [
                'required' => 'This field is required'
            ]
        );

        $data = $request->toArray();

        $user = User::find($id);

        $user->update($data);

        $user->roles()->detach();

        $user->assignRole($request['role']);

        return redirect('/users')->with('success', 'User data updated');
    }

    public function destroy($id) {
        $user = User::find($id);

        $user->delete();

        return redirect('/users')->with('success', 'User deleted');
    }
}
