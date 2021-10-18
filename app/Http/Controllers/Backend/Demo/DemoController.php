<?php

namespace App\Http\Controllers\Backend\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //

    public function __construct()
    {
    }

    public function index(){
        $user = Auth()->guard('backend')->user()->toArray();
        print_r($user);
        exit();
    }
}
