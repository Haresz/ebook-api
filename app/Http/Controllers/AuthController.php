<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            "Nis" => 1234567,
            "Name" => "Muhammad Haris Al Fikri",
            "Phone" => "0822253456",
            "Class" => "XII RPL 5"
        ];
    }
}
