<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class InfoController extends Controller
{
    public function info(User $user)
    {
        return view('profile.info',compact('user'));
    }
}
