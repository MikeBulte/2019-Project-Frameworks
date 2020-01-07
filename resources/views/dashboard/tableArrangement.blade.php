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
                            <h5 class="mb-0 d-inline">
                                <a data-toggle="collapse" href="#collapse{{ $key }}" aria-expanded="false"
                                   aria-controls="collapse{{ $key }}" class="collapsed text-decoration-none">
                                    <div class="col-11 d-inline-block">
                                        {{ $round->name }}
                                    </div>
                                    <div class="col-1 mb-0 d-inline justify-content-end arrow_down">
                                        <img class="arrow_select" src="{{ asset('storage/icons/arrow_down.svg') }}">
                                    </div>
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
                                            <th scope="col">Tafel</th>
                                            <th scope="col">Speler 1</th>
                                            <th scope="col">Speler 2</th>
                                            <th scope="col">Speler 3</th>
                                            <th scope="col">Speler 4</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @php($idArray = [])
                                            @foreach($round->game_tables as $table)
                                                <th scope="row">{{ $table->name }}</th>
                                                @if(!$table->id == in_array($table->id, $idArray))
                                                    {{--                                        @dd($score->user)--}}
                                                    {{--                                        @dd($tables[$score->game_table_id - 1])--}}
                                                    @foreach($table->users as $user)
                                                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                                    @endforeach
                                                    @php(array_push($idArray, $table->id))
                                                @endif
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                    <form action="{{ url('TableArrangementController@store') }}" method="post">
                                        <button class="prim-btn" type="submit">
                                            Deel de ronde in
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
