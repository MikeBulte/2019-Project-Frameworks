@extends('layouts.panel')

@section('content')
    <div class="dashboard-inner priviliges-dashboard">
        <div class="height-inner">
            <div class="row d-flex align-items-center">
                <div class="col d-flex align-items-center">
                    <h1>Privileges</h1>
                </div>
                <!-- Button trigger User modal -->
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn scnd-btn" data-toggle="modal" data-target="#AddAccountssModal">
                        Account toevoegen
                    </button>
                </div>

                <!-- Deelnemers Modal -->
                <div class="modal" id="AddAccountsModal" tabindex="-1" role="dialog" aria-labelledby="AddAccountsModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddAccountsModalLabel">Account toevoegen</h5>
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
                                    <select name="Role">
                                        <option value="Admin">Admin</option>
                                        <option value="Jurylid">Jurylid</option>
                                        <option value="Deelnemer">Deelnemer</option>
                                    </select>

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
                <table id="table-pagination" class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Voornaam</th>
                        <th scope="col">Achternaam</th>
                        <th scope="col">Email</th>
                        <th scope="col">Privileges</th>
                        <th scope="col">Wijzigen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($privileges as $privilege)
                        <form>
                            <tr>
                                <td scope="row">{{ $privilege->id }}</td>
                                <td>{{ $privilege->first_name }}</td>
                                <td>{{ $privilege->last_name }}</td>
                                <td>{{ $privilege->email }}</td>
                                <td>
                                    <select name="Role">
                                        <option value="Admin">Admin</option>
                                        <option value="Jurylid">Jurylid</option>
                                        <option value="Deelnemer">Deelnemer</option>
                                    </select>
                                <td><button type="submit" name="Submit" value="Change Privileges" class="btn prim-btn">Wijzigen</button></td>
                            </tr>
                        </form>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
