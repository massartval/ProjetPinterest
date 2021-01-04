@extends('layout.app')

@section('title', 'welcome')

@section('h1Title', 'Gestionnaire clients - factures')
@section('content')
    <div class="row">
        <div class="column">
            <h3>Clients</h3>
            <img src="{{asset('assets/images/clients.jpg')}}" alt="clients">
            <a href="/clients">Afficher  tous les clients</a>
            <a href="/client/create">Créer un client</a>
        </div>
        <div class="column">
        <h3>Factures</h3>
            <img src="{{asset('assets/images/factures.jpg')}}" alt="factures">
            <a href="/factures">Afficher  toutes les factures</a>
            <a href="/facture/create">Créer un facture</a>
        </div>
    </div>
@endsection
