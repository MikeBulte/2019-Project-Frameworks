@extends('layouts.app')

@section('content')
    <div class="bg-header-home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 my-auto">
                    <h1 class="text-primary font-weight-bold">Neem deel aan het avontuur!</h1>
                    <p>Interesse in deelnemen aan het NK Carcassonne, met de meest ervaren spelers van Nederland?</p>
                    <button class="prim-btn"><a href="{{ route('register') }}">Schrijf je in!</a></button>
                </div>
                <div class="col-lg-6 h-100">
                    <img class="h-100" src="{{ asset('storage/img/carcassonne-ridder-gespiegeld.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-between paper-home">
            <div class="col-sm paper">
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-top222.png') }}">
                <div class="bg-paper d-flex justify-content-center align-items-center">
                    <div class="paper-content">
                        <img src="{{ asset('storage/img/map-icon.png') }}">
                        <h1 class="font-weight-bold text-center">Plattegrond</h1>
                        <a href="#"><h5 class="text-center m-0">Klik hier!</h5></a>
                    </div>
                </div>
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-bottom222.png') }}">
            </div>
            <div class="col-sm paper">
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-top222.png') }}">
                <div class="bg-paper d-flex justify-content-center align-items-center">
                    <div class="paper-content">
                        <img src="{{ asset('storage/img/timer-icon.png') }}">
                        <h1 class="font-weight-bold text-center">Ronde tijd</h1>
                        <h5 class="text-center m-0">45:00</h5>
                    </div>
                </div>
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-bottom222.png') }}">
            </div>
            <div class="col-sm paper">
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-top222.png') }}">
                <div class="bg-paper d-flex justify-content-center align-items-center">
                    <div class="paper-content">
                        <img src="{{ asset('storage/img/star-icon.png') }}">
                        <h1 class="font-weight-bold text-center">Sterspeler</h1>
                        <h5 class="text-center m-0">Bertie</h5>
                    </div>
                </div>
                <img class="w-100" src="{{ asset('storage/img/perkament-pattern-bottom222.png') }}">
            </div>
        </div>
        <div class="row justify-content-between home-rules">
            <div class="col-lg bg-rules-1 my-4 rules-block">
                <a href="#" class="text-decoration-none"><h4 class="text-center font-weight-bold">Bekijk de toernooiregels</h4></a>
            </div>
            <div class="col-lg bg-rules-2 my-4 rules-block">
                <a href="#" class="text-decoration-none"><h4 class="text-center font-weight-bold">Bekijk de spelregels</h4></a>
            </div>
        </div>
    </div>
    @include('includes.c2a')
    <div class="container">
        <div class="row d-flex justify-content-between news-feed align-content-lg-center">
                <div class="col-8 d-inline-block main_feed">
                   <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/Carcassonne_spel-1024x576.jpg')}}"> </a>
                <div class="news-title-main">
                    <p class="font-weight-bold">{{$first->created_at->format('d-m-y')}}</p>
                    <a class="text-decoration-none" href="{{(route('newsfeed'))}}"><h3 class="font-weight-bold">{{$first->title}} </h3></a>
                </div>
            </div>
            <div class="col-4 d-inline-block">
                <div class=" d-inline-block side_feed ">
                    <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/DSCF20072.jpg')}}"> </a>
                    <div class="news-title-side-up">
                        <p class="font-weight-bold">{{$second->created_at->format('d-m-y')}}</p>
                        <a href="{{(route('newsfeed'))}}" class="text-decoration-none"><h3 class="font-weight-bold">{{$second->title}}</h3></a>
                    </div>
                </div>
                <div class=" d-inline-block side_feed my-top-3">
                    <a href="{{(route('newsfeed'))}}"> <img src="{{asset('storage/img/images-4.jpeg')}}"> </a>
                    <div class="news-title-side-down">
                        <p class="font-weight-bold">{{$third->created_at->format('d-m-y')}}</p>
                        <a href="{{(route('newsfeed'))}}" class="text-decoration-none"><h3 class="font-weight-bold">{{$third->title}}</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-rules-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 bg-white my-5">
                    <div class="col-12 mt-5">
                        <div class="text-center">
                            <button class="btn prim-btn m-3"><a href="/administer" class="text-white">Plattegrond</a>
                            </button>
                            <button class="btn btn-lg btn-primary m-3"><a href="{{ route('leaderboard') }}" class="text-white">Leaderboard</a>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-10 text-center my-5">
                        <table class="table table-hover mx-5">
                            <thead>
                            <tr>
                                <th scope="col">Spelernaam</th>
                                <th scope="col">Aantal Punten</th>
                                <th scope="col">Aantal Gespeelde Rondes</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Berry Rotunda</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Berry Rotunda</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Berry Rotunda</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Berry Rotunda</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Berry Rotunda</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Berry Rotunda</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Berry Rotunda</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
