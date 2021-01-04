@extends('layout.app')

@section('title', 'client')
@section('h1Title', 'Gestionnaire clients - factures')

@section('content')
    <h2>Modifier client: {{$client->company}}</h2>
    <form class="column" method="POST" action="/client/edit/{{$client->id}}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <!-- @if($errors->has('name'))
        <small class="error">{{$errors->first('name')}}</small>
    @endif -->
    <input type="text" name="company" id="company" placeholder="..." value="{{$client->company}}">
    <input type="text" name="phone" id="phone" placeholder="..." value="{{$client->phone}}">
    <input type="text" name="email" id="email" placeholder="..." value="{{$client->email}}">
    <input type="text" name="address" id="address" placeholder="..." value="{{$client->address}}">
    <input type="text" name="tva" id="tva" placeholder="..." value="{{$client->tva}}">
    <input type="text" name="facture" id="facture" placeholder="..." value="{{$client->facture}}">
    <input class="submit" type="submit" value="Submit"></input> 
</form>
@endsection