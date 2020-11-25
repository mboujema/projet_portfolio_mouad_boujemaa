<?php

namespace App\Http\Controllers;

use App\Models\Facts;
use App\Models\Skils;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $facts = Facts::all();
        $skils = Skils::all();
        return view("admins.admin", compact("users", "facts", "skils"));
    }
}
