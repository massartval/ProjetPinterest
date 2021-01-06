@extends('layout.app')

@section('title', 'dashboard')

@section('h1Title', 'Dashboard')
@section('content')

@foreach($infos as $info)
<div class="user d-flex align-items-end justify-content-between">
    <div class="d-flex align-items-end">
        <img class="profile_picture" src="{{asset("storage/$info->profile_picture_path")}}" alt="picture">
        <div>
            <h2 class="m-0">{{$info->pseudo}}</h2>
            <p class="mb-1">test</p>
        </div>
    </div>
    @if(Auth::user()["id"]==$info->id)
    <a href="/profile/{{Auth::user()["id"]}}/settings">settings</a>
    @else
    <!-- Form pour le follow ici -->
    <p>nothello</p>
    @endif
</div>
<div class="row gallery mt-4">
@foreach($images as $image)
    <div class="item">
        <p>{{$image->title}}</p>
        <a href="/image/{{$image->id}}" target="_blank"><img class="images" src="{{asset("storage/$image->path")}}" alt="wtf"></a> 
    </div>
@endforeach
</div>


<div class="rowmt-4">
<h3>Shared images</h3>
    <div class="gallery">

    @foreach($shares as $share)
        <div class="item">
            <p>Image by {{$share->author}}</p>
            <a href="/image/{{$share->image_id}}"><img class="images" src="{{asset("storage/$share->path")}}" alt="wtf"></a> 
        </div>
    @endforeach
    </div>
</div>
@endforeach

@endsection