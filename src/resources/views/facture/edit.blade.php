@extends('layout.app')

@section('title', 'facture')
@section('h1Title', 'Gestionnaire clients - factures')

@section('content')
    <h2>Modifier facture: {{$facture->ref}}</h2>
    <form class="column" method="POST" action="/facture/edit/{{$facture->id}}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <!-- @if($errors->has('name'))
        <small class="error">{{$errors->first('name')}}</small>
    @endif -->
    <input type="text" name="ref" id="ref" placeholder="..." value="{{$facture->ref}}">
    <input type="text" name="title" id="title" placeholder="..." value="{{$facture->title}}">
    <input type="text" name="price" id="price" placeholder="..." value="{{$facture->price}}">
    <input type="text" name="tva" id="tva" placeholder="..." value="{{$facture->tva}}">
    <input type="text" name="total" id="total" placeholder="..." value="{{$facture->total}}">
    <input type="text" name="client" id="client" placeholder="..." value="{{$facture->client}}">
    <input class="submit" type="submit" value="Submit"></input> 
</form>
@endsection