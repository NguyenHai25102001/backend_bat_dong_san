<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        try {
            $name="Dashboard";
            $key_menu="Tổng quan";
            return view('admin/dashboard/index',compact('name','key_menu'));

        }catch (\Exception $e){
            return back()->with('error',$e->getMessage());
        }
    }
}
