<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Share;
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

        $shares = Share::where('user_id', '=', $id)->get();
        
        return view('profile/dashboard',compact('infos', 'images', 'shares'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('profile/settings',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $path = $request->file('profile_picture_path')->store('profile', 'public');

        $this->validate(request(),[
            'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:20',
            'pseudo' => 'required|min:1|max:50',
            'email' => 'required|min:2|max:100',
        ]);

        User::where('id', $id)->update([
            'profile_picture_path'=> $path,
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'pseudo' => $request['pseudo'],
            'email' => $request['email']
        ]);
        return $this->profile($id);
    }

    public function share($id)
    {
        $image = Image::findOrFail($id);

        $shares = Share::where('image_id', '=', $id)->get();

        Share::create([
            'user_id' => Auth::user()["id"],
            'user_pseudo' => Auth::user()["pseudo"],
            'image_id' => $id,
            'path' => $image['path'],
            'author' => $image['user']
        ]);;
        return view('images/info',compact('image', 'shares'));
    }

    public function unshare($id)
    {
        
        $image = Image::findOrFail($id);
        
        Share::where('image_id', '=', $id)->delete();
        $shares = Share::where('image_id', '=', $id)->get();

        return view('images/info',compact('image', 'shares'));
    }
}