<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{ 
    public function index()
   {
    return view('html.profile');
   }

    
   public function update()
   {
    
    return view('html.edit-profile');
   }
}
