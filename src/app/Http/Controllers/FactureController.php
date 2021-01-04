<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factures = Facture::get();
        return view('facture/index', compact('factures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facture/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'ref' => 'required|min:2|max:50',
            'title' => 'required|min:2|max:20',
            'price' => 'required|min:1|max:50',
            'tva' => 'required|min:2|max:100',
            'total' => 'required|min:2|max:50',
            'client' => 'required|min:2|max:50'
        ]);

        Facture::create([
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
     * Display the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function show(Facture $facture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facture  $facture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facture = Facture::findOrFail($id);
        
        return view('facture/edit',compact('facture'));
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
