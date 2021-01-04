@extends('layout.app')

@section('title', 'create')
@section('h1Title', 'Add a new image')

<?php
session_start();
$_SESSION['user']="yaco";
?>
@section('content')
    <form method="POST" action="{{route('upload.uploadFile')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <label for="description">description</label>
    <input type="text" name="description" id="description">
    <label for="file">Choose file</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="submit"></input> 
</form>
@endsection
