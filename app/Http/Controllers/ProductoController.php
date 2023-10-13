<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ProductoController extends Controller
{
    function index(){
        $data = User::get();
        return view('producto', compact('data'));
    }
}

