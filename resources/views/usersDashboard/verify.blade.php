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
                        <tr>
                            <td>Voorronde</td>
                            <td>1</td>
                            <td>120</td>
                            <form action="{{ route('verify_score') }}" method="post">
                                <td>
                                    <button><input type="submit" value="True"></button>
                                </td>
                            </form>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

