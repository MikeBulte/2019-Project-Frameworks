@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-primary">Ranglijst</h1>
            <p></p>
        </div>
    </div>
    <div id="scoresContainer" class="container">
        <div class="row text-center">
            <table class="table table-hover" id="table-scores">
                <thead>
                <tr>
                    <th scope="col">Positie</th>
                    <th scope="col">Spelernaam</th>
                    <th scope="col">Aantal Punten</th>
                    <th scope="col">Aantal Gespeelde Rondes</th>
                </tr>
                </thead>
                <tbody>
    {{--            Replace with $s->where('user_id', 1)->sum('amount')    --}}
                    <?php $pos = 1 ?>
                    @foreach($combinedScores as $score)
    {{--                    @foreach($scores as $score)--}}
                        <tr>
    {{--                        <td>{{ $score->where('user_id', 1)->sum('amount') }}</td>--}}
                            <th scope="row">{{ $pos++ }}</th>
                            <th scope="row">{{ $score['first_name'] }} {{ $score['prefix'] }} {{ $score['last_name'] }}</th>
                            <td>{{ $score['amount'] }}</td>
                            <td>{{ $score['rounds'] }} Rondes</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
