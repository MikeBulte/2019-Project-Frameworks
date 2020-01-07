@extends('layouts.app')

@include('includes._error')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Valideren</h2>
        </div>
        <div id="" class="container">
            <div class="row text-center">
                <table class="table table-hover">
                    <thead>

                    <tr>
                        <th scope="col">Ronde</th>
                        <th scope="col">Score</th>
                        <th scope="col">Validatie</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($scores as $score)
                        <tr>
                            <td>{{ $score->round->name }}</td>
                            <td>{{ $score->amount }}</td>
                            <td>
                                <form action="{{ route('verify_score') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="{{ $score->id }}" name="score_id">
                                    <input type="hidden" value="1" name="validation">
                                    @if($score->validated)
                                        <input title="Score is gevalideerd" class="btn btn-success" type="submit"
                                               value="Valideer" disabled>
                                    @else
                                        <input type="submit" class="btn btn-danger" value="Valideer">
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

