@extends('layouts.app')

@section('content')
    <div class="bg-footer">
        <img  class="header-img" src="{{ asset('storage/img/Carcassonne_spel-1024x576.jpg') }}">
        <div class="container">
            <div class="body-newsfeed">
                <div class="news-title">
                    <h1 class="font-weight-bold">Nieuws berichten</h1>
                </div>
                <div class="content">
                @foreach($newsfeeds as $newsfeed)
                    <p class="font-weight-bold">{{$newsfeed->created_at->format('d-m-y')}}</p>
                    <h3 class="font-weight-bold">{{$newsfeed->title}}</h3>
                    <p>{{$newsfeed->content}}</p>
                    <br>
                @endforeach
                </div>
            </div>
            @include('includes.c2a')
        </div>
    </div>
@endsection
