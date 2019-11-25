@extends('layouts.app')

@section('content')
    <div class="bg-header-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <h1 class="text-primary font-weight-bold">Neem deel aan het avontuur!</h1>
                    <p>Interesse in deelnemen aan het NK Carcassonne, met de meest ervaren spelers van Nederland?</p>
                    <a href="/administer" class="btn btn-primary">Schrijf je in!</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('storage/img/carcassonne-ridder-gespiegeld.png') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-around">
            <div class="col-sm-3 mx-3 bg-perkament">
                <div class="my-5 mx-3 ">
                    <h1 class="font-weight-bold text-center">Plattegrond</h1>
                    <a href="#"><h5 class="text-center">Klik hier!</h5></a>
                </div>
                <img src="{{ asset('storage/img/perkament-pattern-bottom222.png') }}">
            </div>
            <div class="col-sm-3 bg-perkament mx-3 d-block">
                <div class="my-5">
                    <h1 class="font-weight-bold text-center">Ronde tijd</h1>
                    <h5 class="text-center">45:00</h5>
                </div>
            </div>
            <div class="col-sm-3 bg-perkament mx-3 d-block">
                <div class="my-5">
                    <h1 class="font-weight-bold text-center">Sterspeler</h1>
                    <h5 class="text-center">Bertie</h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-lg-5 bg-rules-1 my-4 shadow-lg">
                <a href="#" class="text-decoration-none"><h1 class="">Bekijk de
                        toernooiregels</h1></a>
            </div>
            <div class="col-lg-5 bg-rules-2 my-4 shadow-lg">
                <a href="#" class="text-decoration-none"><h1 class="text-center font-weight-bold m-5">Bekijk de
                        spelregels</h1></a>
            </div>
        </div>
        <div class="row text-center mb-5">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="my-3">Wil jij jezelf ook bewijzen op het NK?</h1>
                    <button class="btn btn-lg btn-primary my-3"><a href="/administer" class="text-white">Schrijf je
                            in!</a>
                    </button>
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
                            <button class="btn btn-lg btn-primary m-3"><a href="/administer" class="text-white">Tafelprestaties</a>
                            </button>
                            <button class="btn btn-lg btn-primary m-3"><a href="/administer" class="text-white">Leaderboard</a>
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
                                <th scope="row">Bertie</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Bertie</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Bertie</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Bertie</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Bertie</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Bertie</th>
                                <td>50 Punten</td>
                                <td>4 Rondes</td>
                            </tr>
                            <tr>
                                <th scope="row">Bertie</th>
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
