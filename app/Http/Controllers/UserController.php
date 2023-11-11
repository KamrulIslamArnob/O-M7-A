<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function A($name="Laravel"){
        echo "Hello,{$name}";
    }
}
