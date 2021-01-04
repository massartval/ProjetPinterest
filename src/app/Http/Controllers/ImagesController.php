<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::get();
        return view('images/index', compact('images'));
    }

    public function info($id)
    {
        $image = Image::findOrFail($id);
        
        return view('images/info',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadFile(Request $request)
    {
        session_start();

        $this->validate(request(),[
            'title' => 'required|min:1|max:50',
            'description' => 'required|min:1|max:250',
        ]);

        $path = $request->file->store('images', 'public');

        Image::create([
            'user' => $_SESSION['user'],
            'title' => $request['title'],
            'description' => $request['description'],
            'path' => $path,
        ]);;
        return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $images = Image::where('title', 'LIKE', '%'.$request['search'].'%')->orWhere('description', 'LIKE', '%'.$request['search'].'%')->orWhere('user', 'LIKE', '%'.$request['search'].'%')->get();
        
        return view('images/index',compact('images'));
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
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facture $facture, $id)
    {
        $facture = Facture::findOrFail($id);
        $facture->delete();
        return $this->index();
    }
}
