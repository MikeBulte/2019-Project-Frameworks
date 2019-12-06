@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <h1>Beheerder Dashboard</h1>
        <div class="timer-dashboard">
            <h2>Timer speelrondes</h2>
            <div class="timer-inner row d-flex">
                <div class="col d-flex align-items-center">
                    <form>
                        <input type="number">
                    </form>
                    <p>minuten</p>
                    <button class="timer-button scnd-btn">Timer starten</button>
                </div>
                <div class="timer-current d-flex col align-items-center justify-content-end">
                    <p>Huidige timer:</p>
                    <p class="timer-currenttime">23:49</p>
                </div>
            </div>
        </div>
        <div class="accountoverview-dashboard">
            <h2>Overzicht accounts</h2>
            <div class="row">
                <a class="col d-inline-block block-overview" href="#"><div>
                    <div class="block-content">
                        <p class="overview-number">{{ count($users) }}</p>
                        <p class="overview-name">Deelnemers</p>
                    </div>
                </div></a>
                <a class="col d-inline-block block-overview" href="#"><div>
                    <div class="block-content">
                        <p class="overview-number">10</p>
                        <p class="overview-name">Juryleden</p>
                    </div>
                </div></a>
                <a class="col d-inline-block block-overview" href="#"><div>
                    <div class="block-content">
                        <p class="overview-number">2</p>
                        <p class="overview-name">Beheerders</p>
                    </div>
                </div></a>
            </div>
        </div>
        <div class="quickadd-dashboard">
            <div class="d-flex row align-items-center">
                <h2 class="quickadd-title col">Snel een deelnemer toevoegen</h2>
                <div class="col d-flex justify-content-end">
                    <button class="quickadd-button scnd-btn">Deelnemer toevoegen</button>
                </div>
            </div>
        </div>
        <div class="leaderboard-dashboard">
            <div class="row leaderboard-inner">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Positie</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Aantal punten</th>
                        <th scope="col">Aantal rondes</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">1</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>50 punten</td>
                            <td>4 rondes</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <a class="viewleaderboard-dashboard" href="">Bekijk de gehele ranglijst ></a>
            </div>
        </div>
    </div>
@endsection
