@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner priviliges-dashboard">
        <div class="height-inner">
            <div class="row d-flex align-items-center title-margin">
                <div class="col d-flex align-items-center">
                    <h1>Privileges</h1>
                </div>
                <!-- Button trigger modal -->
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn scnd-btn" data-toggle="modal" data-target="#AddPlayersModal">
                        Deelnemer toevoegen
                    </button>
                </div>

                <!-- Modal -->
                @include('includes._error')
                <div class="modal" id="AddPlayersModal" tabindex="-1" role="dialog" aria-labelledby="AddPlayersModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddPlayersModalLabel">Deelnemer toevoegen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('privileges.store') }}">
                                    @csrf

                                    <input class="" type="text" name="first_name" placeholder="Voornaam" required>
                                    <input class="" type="text" name="last_name" placeholder="Achternaam" required>
                                    <input class="" type="email" name="email" placeholder="email" required>
                                    <input class="" type="password" name="password" placeholder="wachtwoord" required>

                                    <div class="modal-footer">
                                        <button type="button" class="btn scnd-btn" data-dismiss="modal">Close</button>
                                        <button type="submit" name="Submit" value="Add New Player" class="btn prim-btn">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row deelnemers-inner">
                @include('includes._error')
                <table id="table-users" class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Privileges</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($privileges as $privilege)

                            <tr>
                                <td scope="row">{{ $privilege->id }}</td>
                                <td>{{ $privilege->first_name }}</td>
                                <td>{{ $privilege->last_name }}</td>
                                <td>{{ $privilege->email }}</td>
                                <td>
                                    <form method="post" action="{{ route('privileges.update', $privilege) }}">
                                        @method('PATCH')
                                        @csrf
                                        <select name="role">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ ($privilege->roles->contains($role)) ? 'selected' : null }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" name="Submit" value="Change Privileges" class="btn prim-btn">Wijzigen</button>
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
