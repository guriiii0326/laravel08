<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function add(){
        return view('adimin.profile.create');
    }
    
    public function create(){
        return redirect('adimin/profile/create');
    }
    
    public function edit(){
        return view('adimin.profile.edit');
    }
    
    public function update(){
        return redirect('adimin/profile/edit');
    }
}
