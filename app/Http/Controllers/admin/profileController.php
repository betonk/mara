<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index', ['title'=> 'halaman profile']);
    }
    public function edit()
    {
        # code...
    }
    public function update()
    {
        # code...
    }
    public function changePass()
    {
        # code...
    }
}
