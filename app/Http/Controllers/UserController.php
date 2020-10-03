<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::where('is_admin', '!=', '1')->orderBy('name')->get();
        return view('admin.user.index', compact('users'));
    }
}
