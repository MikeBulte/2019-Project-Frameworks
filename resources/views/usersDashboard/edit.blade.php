@extends('layouts.app')

@include('includes._error')

@section('content')
    <div class="container userdashboard">
        <div class="userdashboard-inner">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('msg'))
                        <h6 class="alert alert-success text-center"> {{ session('msg') }}</h6>
                    @elseif(session()->has('alert'))
                        <h6 class="alert alert-danger text-center"> {{ session('alert') }}</h6>
                    @endif
                    <h1>Profielinstellingen</h1>
                    <form action="{{ route('usersdashboard.update', ['usersdashboard' => $user]) }}"
                          method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <label for="first_name">
                                    <h2>Wijzig voornaam</h2>
                                </label>
                            </div>
                            <div class="col-6">
                                <label for="last_name">
                                    <h2>Wijzig achternaam</h2>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input class="col-12" type="text" id="first_name" name="first_name"
                                       value="{{ $user->first_name }}">
                            </div>
                            <div class="col-6">
                                <input class="col-12" type="text" id="last_name" name="last_name"
                                       value="{{ $user->last_name }}">
                            </div>
                            <input type="hidden" name="email" value="{{ $user->email }}">
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="password">
                                    <h2>Wijzig wachtwoord</h2>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input class="col-12" id="password" type="password" name="password"
                                       placeholder="Nieuw wachtwoord">
                            </div>
                            <div class="col-6">
                                <input class="col-12" type="password" name="password_confirmation"
                                       placeholder="Herhaal nieuw wachtwoord">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button><input type="submit" value="Wijzigingen opslaan"></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1>Uitschrijven</h1>
                    <h2>Ik wil mij graag uitschrijven van het NK Carcassonne</h2>
                    <form action="{{ route('usersdashboard.destroy', ['usersdashboard' => $user]) }}"
                          method="post">
                        @csrf
                        @method('DELETE')
                        <button class="scnd-btn"><input class="" type="submit" value="Uitschrijven"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
