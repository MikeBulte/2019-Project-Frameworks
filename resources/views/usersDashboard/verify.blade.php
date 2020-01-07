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
                        <th scope="col">Rondetype</th>
                        <th scope="col">Rondenummer</th>
                        <th scope="col">Score</th>
                        <th scope="col">Validatie</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($scores as $score)
                        <tr>
                            <td>Voorronde</td>
                            <td>1</td>
                            <td>{{ $score->amount }}</td>
                            <td>
                                <form action="{{ route('verify_score') }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" value="{{ $score->id }}" name="score_id">
                                    <input type="hidden" value="1" name="validation">
                                    <input class="btn @php echo( $score->validated ? 'btn-success' : 'btn-danger' ) @endphp"
                                        type="submit" value="Validate">
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

