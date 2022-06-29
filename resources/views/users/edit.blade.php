@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Editar usuarios'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.update', $user->id) }}" method="post" class="forrm-horizontal">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Usuarios</h4>
                            <p class="card-category">Editar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-3 col-form-label">Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-3 col-form-label">Usuario</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" value="{{ $user->username}}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-3 col-form-label">Correo electronico</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-3 col-form-label">Contraseña</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña nueva..." autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-danger">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection