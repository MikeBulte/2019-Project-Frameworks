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
                        <p class="overview-number">200</p>
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
            <div class="d-flex row">
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
                            <th scope="col">Id</th>
                            <th scope="col">Spelernaam</th>
                            <th scope="col">Aantal Punten</th>
                            <th scope="col">Aantal Gespeelde Rondes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Berry Rotunda</td>
                            <td>50 Punten</td>
                            <td>4 Rondes</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Berry Rotunda</td>
                            <td>50 Punten</td>
                            <td>4 Rondes</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Berry Rotunda</td>
                            <td>50 Punten</td>
                            <td>4 Rondes</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Berry Rotunda</td>
                            <td>50 Punten</td>
                            <td>4 Rondes</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Berry Rotunda</td>
                            <td>50 Punten</td>
                            <td>4 Rondes</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Berry Rotunda</td>
                            <td>50 Punten</td>
                            <td>4 Rondes</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Berry Rotunda</td>
                            <td>50 Punten</td>
                            <td>4 Rondes</td>
                        </tr>
                    </tbody>
                </table>
                <a class="viewleaderboard-dashboard" href="">Bekijk de gehele ranglijst ></a>
            </div>
        </div>
    </div>
@endsection
