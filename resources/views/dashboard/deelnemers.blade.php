@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner">
        <div class="height-inner">
            <h1>Deelnemers</h1>
            <div class="container">
                <table>
                    <tr>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                    <tr>
                        @foreach ($users as $user)
                        <td scope="row">{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        @endforeach
                    </tr>
                </table>
            </div>

            {{ $users->links() }}
        </div>
    </div>



@endsection
