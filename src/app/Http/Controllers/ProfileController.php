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
        var_dump($request['pseudo']);
        exit();

        /* 
        $path = $request->file->store('profile', 'public');
        $this->validate(request(),[
            'ref' => 'required|min:2|max:50',
            'title' => 'required|min:2|max:20',
            'price' => 'required|min:1|max:50',
            'tva' => 'required|min:2|max:100',
            'total' => 'required|min:2|max:50',
            'client' => 'required|min:2|max:50'
        ]);

        Facture::where('id', $id)->update([
            'ref' => $request['ref'],
            'title' => $request['title'],
            'price' => $request['price'],
            'tva' => $request['tva'],
            'total' => $request['total'],
            'client' => $request['client']
        ]);
        return $this->profile($id); */
    }
}