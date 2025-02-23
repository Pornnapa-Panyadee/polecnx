<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\adminHomeController;

class AdminController extends Controller
{
    //
    public function adminHome(){
    //  dd('adminHome');
     return view('admin.table');         
    }
}
