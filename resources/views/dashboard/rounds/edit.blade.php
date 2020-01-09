@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner">
            <div class="row d-flex align-items-center title-margin">
                <div class="col d-flex align-items-center">
                    <h1>U bent {{ $round->name }} aan het bewerken</h1>
                </div>
            </div>
            @include('includes._error')
            <div class="row players-inner w-50">
                <form method="POST" action="{{ route('rounds.update', ['round' => $round]) }}">
                    @csrf
                    @method('PUT')

                    <input class="w-100 mb-4" type="text" name="name" placeholder="Ronde naam" minlength="5" maxlength="45" value="{{ $round->name }}" required>
                    <input class="w-100 mb-4" type="checkbox" id="bracket_round" name="bracket_round" value="1" {{ ($round->bracket_round ? 'checked' : '') }}><label for="bracket_round">Bracket ronde</label>
                    <input class="w-100 mb-4" type="checkbox" id="in_progress" name="in_progress" value="1" {{ ($round->in_progress ? 'checked' : '') }}><label for="in_progress">Huidig bezig</label>
                    <input class="w-100 mb-4" type="checkbox" id="finished" name="finished" value="1" {{ ($round->finished ? 'checked' : '') }}><label for="finished">Afgelopen</label>

                    <div class="modal-footer">
                        <button class="btn scnd-btn">
                            <a href="{{ route('rounds.index') }}">Ga terug</a>
                        </button>
                        <button type="submit" name="Submit" value="Edit round" class="btn prim-btn">Sla veranderingen op</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
