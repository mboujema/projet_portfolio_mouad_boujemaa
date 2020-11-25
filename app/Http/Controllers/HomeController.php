<?php

namespace App\Http\Controllers;

use App\Models\Facts;
use App\Models\Skils;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $users = User::all();
        $facts = Facts::all();
        $skils = Skils::all();
        return view("welcome", compact("users", "facts", "skils"));
    }
}
