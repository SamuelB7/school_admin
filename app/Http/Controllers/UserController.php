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
}
