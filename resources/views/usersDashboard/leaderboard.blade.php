@extends('layouts.app')

@include('includes._error')

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="text-primary">Ranglijst</h1>
            <p></p>
        </div>
    </div>
    <div id="scoresContainer" class="container">
        <div class="row">
            <div style="padding: 50px; width: 100%;">
                <table class="table table-hover" id="table-pagination">
                    <thead>
                    <tr>
                        <th scope="col">Positie</th>
                        <th scope="col">Spelernaam</th>
                        <th scope="col">Aantal Punten</th>
                        <th scope="col">Aantal Gespeelde Rondes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1 ?>
                    @foreach($scores as $score)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $score->user->first_name }} {{ $score->user->prefix }} {{ $score->user->last_name }}</td>
                            <td>{{ $score->amount }} Punten</td>
                            <td>Foo</td>
                            <?php $i++ ?>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
