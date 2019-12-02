@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner">
            <h1>Deelnemers</h1>
            <div class="container">
                @foreach ($users as $user)
                    {{ $user->first_name }}
                @endforeach
            </div>

            {{ $users->links() }}
        </div>
    </div>



@endsection
