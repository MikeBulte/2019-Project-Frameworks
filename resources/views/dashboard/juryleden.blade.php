@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner deelnemers-dashboard">
        <div class="height-inner">
            <div class="row d-flex align-items-center">
                <div class="col d-flex align-items-center">
                    <h1>Juryleden</h1>
                </div>
                <!-- Button trigger modal -->
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn scnd-btn" data-toggle="modal" data-target="#AddJurlyledenModal">
                        Jurylid toevoegen
                    </button>
                </div>

                <!-- Modal -->
                <div class="modal" id="AddJurlyledenModal" tabindex="-1" role="dialog" aria-labelledby="AddJurlyledenModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddJurlyledenModalLabel">Jurylid toevoegen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="first_name" type="text"
                                                   class="form-control @error('first_name') is-invalid @enderror text-center"
                                                   name="first_name"
                                                   value="{{ old('first_name') }}" required autocomplete="first_name"
                                                   autofocus
                                                   placeholder="Voornaam">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="last_name" type="text"
                                                   class="form-control @error('last_name') is-invalid @enderror text-center"
                                                   name="last_name"
                                                   value="{{ old('last_name') }}" required autocomplete="last_name"
                                                   autofocus
                                                   placeholder="Achternaam">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="email" type="email"
                                                   class="form-control @error('email') is-invalid @enderror text-center"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email"
                                                   placeholder="Emailadres">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror text-center"
                                                   name="password" required autocomplete="new-password"
                                                   placeholder="Wachtwoord">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control text-center"
                                                   name="password_confirmation" required autocomplete="new-password"
                                                   placeholder="Wachtwoord herhalen">
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn scnd-btn" data-dismiss="modal">Close</button>
                                <button type="button" class="btn prim-btn">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row juryleden-inner">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>Verwijderen</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>



@endsection
