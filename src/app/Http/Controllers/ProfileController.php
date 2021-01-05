<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $infos = User::where('id', '=', $id)->get();

        $images = Image::where('user_id', '=', $id)->get();
        
        return view('profile/dashboard',compact('infos', 'images'));
    }
}