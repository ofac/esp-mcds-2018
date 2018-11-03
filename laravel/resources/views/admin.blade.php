@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1>Administrador</h1>
            <hr>
            <br>
            <h5> <i class="fa fa-users"></i> Lista de Usuarios</h5>
            <br>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Usuario</th>
                        <th>Correo Electrónico</th>
                        <th>Foto</th>
                        <th>Rol</th>
                        <th>Editar</th>
                    </tr>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->fullname }}</td>
                                <td><a class="btn-link-instalara" href="{{ url('profile/'.$user->nickname) }}" target="_blank">{{ $user->nickname }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td><img src="{{ asset($user->photo) }}" width="40px"></td>
                                <td>
                                    @if($user->role == "admin")
                                        <button class="btn btn-dark"> A </button>
                                    @else
                                        <button class="btn btn-light"> U </button>
                                    @endif
                                </td>
                                <td><a href="" class="btn btn-instalara"> <i class="fa fa-pen"></i> </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection
