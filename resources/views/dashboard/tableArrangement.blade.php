@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner">
            <h1>Tafelindelingen</h1>
            @foreach($rounds as $key => $round)
                {{--                @dd($round->scores[0]->game_table)--}}
                <div id="accordion" role="tablist">
                    <div class="card voorronde">
                        <div class="card-header" role="tab" id="heading{{ $key }}">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse{{ $key }}" aria-expanded="true"
                                   aria-controls="collapse{{ $key }}">
                                    {{ $round->name }}
                                </a>
                            </h5>
                        </div>
                        <div id="collapse{{ $key }}" class="collapse" role="tabpanel"
                             aria-labelledby="heading{{ $key }}">
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
                                            <th scope="row"></th>
                                            @foreach($round->game_tables as $table)
                                                {{--                                        @dd($score->user)--}}
                                                {{--                                        @dd($tables[$score->game_table_id - 1])--}}

                                                    @dd($table->users)
{{--                                                <td>{{ $score->user->first_name }} {{ $score->user->last_name }}</td>--}}


                                            @endforeach
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
