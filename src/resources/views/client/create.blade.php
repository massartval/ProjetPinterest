@extends('layout.app')

@section('title', 'create')
@section('h1Title', 'Gestionnaire clients - factures')


@section('content')
    <h2>Créer un client</h2>
    <form class="column" method="POST" action="/client/create">
    {{ csrf_field() }}
    <label for="company">Nome de l'entreprise</label>
    <input type="text" name="company" id="company">
    <label for="phone">Téléphone</label>
    <input type="text" name="phone" id="phone">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="address">Adresse</label>
    <input type="text" name="address" id="address">
    <label for="tva">TVA</label>
    <input type="text" name="tva" id="tva">
    <label for="facture">Facture</label>
    <input type="text" name="facture" id="facture">
    <input class="submit" type="submit" value="Submit"></input> 
</form>
@endsection
