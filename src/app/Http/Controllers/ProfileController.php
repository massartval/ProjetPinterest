<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Client;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();
        return view('client/index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate(request(),[
            'company' => 'required|min:2|max:50',
            'phone' => 'required|min:2|max:20',
            'email' => 'required|min:1|max:50',
            'address' => 'required|min:2|max:100',
            'tva' => 'required|min:2|max:50',
            'facture' => 'required|min:2|max:50'
        ]);

        Client::create([
            'company' => $request['company'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'tva' => $request['tva'],
            'facture' => $request['facture']
        ]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('restaurants/show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        
        return view('client/edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'company' => 'required|min:2|max:50',
            'phone' => 'required|min:2|max:20',
            'email' => 'required|min:1|max:50',
            'address' => 'required|min:2|max:100',
            'tva' => 'required|min:2|max:50',
            'facture' => 'required|min:2|max:50'
        ]);

        Client::where('id', $id)->update([
            'company' => $request['company'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'address' => $request['address'],
            'tva' => $request['tva'],
            'facture' => $request['facture']
        ]);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return $this->index();
    }
}
