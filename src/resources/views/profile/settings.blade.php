@extends('layout.app')

@section('title', 'dashboard')

@section('h1Title', 'Dashboard')
@section('content')

<h2>Settings</h2>

<form class="d-flex flex-column" method="POST" action="/profile/{{$user->id}}/settings">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    
    <label for="profile_picture_path">Profile picture</label>
    <input id="profile_picture_path" type="file" name="profile_picture_path" value="{{$user->profile_picture_path}}"/>

    <label for="first_name">First name</label>
    <input id="first_name" type="text" name="first_name" value="{{$user->first_name}}" required />

    <label for="last_name">Last name</label>
    <input id="last_name" type="text" name="last_name" value="{{$user->last_name}}" required />

    <label for="pseudo">Pseudo</label>
    <input id="pseudo" type="text" name="pseudo" value="{{$user->pseudo}}" required />

    <label for="email">Email</label>
    <input id="email" type="email" name="email" value="{{$user->email}}" required />

    <!-- <label for="password">Password</label>
    <input id="password" type="password" name="password" required autocomplete="new-password" />

    <label for="password_confirmation">Confirm password</label>
    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
 -->
    <input class="submit" type="submit" value="Submit"></input>
</form>

@endsection