@extends('layouts.app')

@section('content')
    <div class="bg-header-home">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 my-auto">
                    <h1 class="text-primary font-weight-bold">Neem deel aan het avontuur!</h1>
                    <p>Interesse in deelnemen aan het NK Carcassonne, met de meest ervaren spelers van Nederland?</p>
                    <button class="prim-btn"><a href="/administer">Schrijf je in!</a></button>
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
    <div class="container my-3">
        <div class="row my-4 d-inline justify-content-between main_feed align-content-lg-center">
            <div class="col-7 bg-rules-1 my-4 d-inline-block " style="height: 300px">
                <div class="news-title">
                    <h3 class="font-weight-bold">2-12-2019</h3>
                    <a href="/newsfeed" class="text-decoration-none"><h3 class="font-weight-bold">Interesse in deelnemen aan het NK Carcassonne, met de meest ervaren spelers van Nederland?</h3></a>
                </div>
            </div>
            <div class="col-5 my-4 d-inline-block">
                <div class="bg-rules-2 my-2 d-inline-block" style="width: 470px; height: 100px" >
                <a href="#" class="text-decoration-none"><h4 class="text-center font-weight-bold">news feed 2</h4></a>
                </div>
                <div class="bg-rules-2 my-2 d-inline-block" style="width: 300px; height: 100px">
                <a href="#" class="text-decoration-none"><h4 class="text-center font-weight-bold">Bnews feed 3</h4></a>
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
                            <button class="btn prim-btn m-3"><a href="/administer" class="text-white">Ranglijst</a>
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
