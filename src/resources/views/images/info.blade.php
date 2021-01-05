@extends('layout.app')

@section('title', 'info')

@section('h1Title', 'Image information')
@section('content')

<div class="rows info">
    <div class="col-md-8 offset-md-2 info_content">
        <h4>{{$image->title}}</h4>
        <a href="{{asset("storage/$image->path")}}" target="_blank"><img class="images" src="{{asset("storage/$image->path")}}" alt="wtf"></a>
        <p>{{$image->description}}</p>
        <a href="../profile/{{$image->user_id}}">Made by {{$image->user}}</a>
    </div>
</div>


@endsection