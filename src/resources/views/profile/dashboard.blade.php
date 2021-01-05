@extends('layout.app')

@section('title', 'dashboard')

@section('h1Title', 'Dashboard')
@section('content')

@foreach($infos as $info)
<div class="user d-flex align-items-end">
    <img class="profile_picture" src="{{$info->profile_picture_path}}" alt="picture">
    <h2>{{$info->pseudo}}</h2>
</div>
<div class="gallery">
@foreach($images as $image)
    <div class="item">
        <h4>{{$image->title}}</h4>
        <a href="/image/{{$image->id}}" target="_blank"><img class="images" src="{{asset("storage/$image->path")}}" alt="wtf"></a> 
    </div>
@endforeach
</div>

@endforeach

@endsection