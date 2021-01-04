@extends('layout.app')

@section('title', 'clients')

@section('h1Title', 'Gestionnaire clients - factures')
@section('content')
        @foreach($images as $image)
            <a href="/image/{{$image->id}}" target="_blank"><img src="{{asset("storage/$image->path")}}" alt="wtf"></a>
            
        @endforeach
@endsection
