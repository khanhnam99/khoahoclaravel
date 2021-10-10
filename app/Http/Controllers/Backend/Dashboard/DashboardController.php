<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\BackendController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {

        return 10;
    }
}
