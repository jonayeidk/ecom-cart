<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        
        // $user = Auth::user();
        // if($user->status ==2){
        //     return redirect(route('user-profile'));
        // }

        return view('admin.dashboard.index');
    }
}
