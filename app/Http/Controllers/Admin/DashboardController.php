<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\AdminServices;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{       
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    //
    public function index(AdminServices $admin){
        $data=$admin->getDashboardData();

        // print_r($data); die();
        return view('admin.dashboard', compact('data'));
    }
}
