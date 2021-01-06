@extends('layout.app')

@section('title', 'info')

@section('h1Title', 'Image information')
@section('content')

<div class="rows info">
    <div class="col-md-8 offset-md-2 info_content">
        <h4>{{$image->title}}</h4>
        <a href="{{asset("storage/$image->path")}}" target="_blank"><img class="images" src="{{asset("storage/$image->path")}}" alt="wtf"></a>
        <p>{{$image->description}}</p>
        <a href="../profile/{{$image->user_id}}" target="_self">Made by {{$image->user}}</a>
    </div>
</div>

@if(Auth::check())
@if(Auth::user()["id"]!=$image->user_id)
<?php
$shared=false;
    foreach($shares as $share){
    if(Auth::user()["id"]==$share->user_id){
       $shared=true;
     }
    }
        
?>
@if($shared)
    <form action="/unshare/{{$image->id}}" method="post">
        @csrf
        <input type="submit" value="unshare">
    </form>
@else
    <form action="/share/{{$image->id}}" method="post">
        @csrf
        <input type="submit" value="share">
    </form>
@endif
@endif
@endif


@endsection