<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('showUserName');
    }

    public function showUserName() {
        
        return "Mlouk Is the King";
    }
}
