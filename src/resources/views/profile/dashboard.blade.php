@extends('layout.app')

@section('title', 'dashboard')

@section('h1Title', 'Dashboard')
@section('content')

@foreach($infos as $info)
<div class="user d-flex align-items-end">
    <img class="profile_picture" src="{{$info->profile_picture_path}}" alt="picture">
    <h2>{{$info->pseudo}}</h2>
</div>
<div>

</div>

@endforeach

@endsection