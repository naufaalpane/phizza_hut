<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllUserController extends Controller
{
    public function index()
    {
        $users = User::paginate(6);

        return view('viewalluser')->with('users', $users);
    }
}
