@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('users.store') }}" method="post" class="forrm-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-tittle">Usuarios</h4>
                            <p class="card-category">Ingresar datos</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label for="name" class="col-sm-3 col-form-label">Nombre</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese un nombre..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-3 col-form-label">Usuario</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="username" placeholder="Ingrese un nombre de usuario..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-3 col-form-label">Correo electronico</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese un correo electronico..." autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <label for="password" class="col-sm-3 col-form-label">Contraseña</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña..." autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-danger">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection