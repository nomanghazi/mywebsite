<?php

namespace App\Http\Controllers;
use App\Models\add_user;
use Illuminate\Http\Request;

class mycontrol extends Controller
{
    public function index()
    {
        $data=add_user::all();
        return view('user.index',compact('data'));
    }
}
