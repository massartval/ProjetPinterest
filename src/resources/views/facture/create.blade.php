@extends('layout.app')

@section('title', 'create')
@section('h1Title', 'Gestionnaire clients - factures')


@section('content')
    <h2>Créer une facture</h2>
    <form class="column" method="POST" action="/facture/create">
    {{ csrf_field() }}
    <label for="ref">Référence</label>
    <input type="text" name="ref" id="ref">
    <label for="title">Titre</label>
    <input type="text" name="title" id="title">
    <label for="price">Prix</label>
    <input type="text" name="price" id="price">
    <label for="tva">TVA</label>
    <input type="text" name="tva" id="tva">
    <label for="total">TOTAL</label>
    <input type="text" name="total" id="total">
    <label for="client">Client</label>
    <input type="text" name="client" id="client">
    <input class="submit" type="submit" value="Submit"></input> 
</form>
@endsection
