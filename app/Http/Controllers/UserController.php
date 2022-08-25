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
        $this->can('user-create');

        $roles = \Spatie\Permission\Models\Role::all();

        return view('users.form', compact('roles'));
    }
    
    public function store(Request $request) {
        $this->can('user-create');

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
        $this->can('user-show');

        $user = User::find($id);

        return view('users.show', compact('user'));
    }

    public function edit($id) {
        $this->can('user-edit');

        $user = User::find($id);
        $roles = \Spatie\Permission\Models\Role::all();

        return view('users.form', compact('roles', 'user'));
    }

    public function update(Request $request, $id) {
        $this->can('user-edit');

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
        $this->can('user-delete');

        $user = User::find($id);

        $user->delete();

        return redirect('/users')->with('success', 'User deleted');
    }
}
