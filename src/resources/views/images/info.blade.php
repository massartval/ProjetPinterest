@extends('layout.app')

@section('title', 'clients')

@section('h1Title', 'Gestionnaire clients - factures')
@section('content')

<h4>{{$image->title}}</h4>
<p>{{$image->description}}</p>
<a href="{{asset("storage/$image->path")}}" target="_blank"><img src="{{asset("storage/$image->path")}}" alt="wtf"></a>
<a href="../profile/{{$image->user}}">Made by {{$image->user}}</a>
@endsection