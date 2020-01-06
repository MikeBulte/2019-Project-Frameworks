@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner">
            <h1>Tafelindelingen</h1>
            @foreach($rounds as $key => $round)
                @dd($round)
            <div id="accordion" role="tablist">
                <div class="card voorronde">
                    <div class="card-header" role="tab" id="heading{{ $key }}">
                        <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse{{ $key }}" aria-expanded="true" aria-controls="collapse{{ $key }}">
                                {{ $round->name }}
                            </a>
                        </h5>
                    </div>
                    <div id="collapse{{ $key }}" class="collapse" role="tabpanel" aria-labelledby="heading{{ $key }}">
                        <div class="card-body">
                            <div class="row leaderboard-inner">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Tafelnummmer</th>
                                        <th scope="col">Speler 1</th>
                                        <th scope="col">Speler 2</th>
                                        <th scope="col">Speler 3</th>
                                        <th scope="col">Speler 4</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                        <td>Berry Rotunda</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



@endsection
