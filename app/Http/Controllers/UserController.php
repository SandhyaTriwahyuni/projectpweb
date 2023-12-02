<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function GetData() {
        $data = Http::get('https://dummyjson.com/users')->json();
        return view('test', ['data' => $data]);
    }
}