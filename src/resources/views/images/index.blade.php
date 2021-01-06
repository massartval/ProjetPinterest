@extends('layout.app')

@section('title', 'home')

@section('h1Title', 'All images')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <form action="{{route('search')}}" method="POST">
            {{ csrf_field() }}
            <input type="text" name="search" placeholder="search...">
            <input type="submit" name="submit">
            </form>
            <a href="/">remove filter</a>
        </div>
    </div>
    <div class="row gallery">
        @foreach($images as $image)
                <div class="item">
                    <h4>{{$image->title}}</h4>
                    <a href="/image/{{$image->id}}"><img class="images" src="{{asset("storage/$image->path")}}" alt="wtf"></a> 
                </div>
        @endforeach
    </div>

@endsection
