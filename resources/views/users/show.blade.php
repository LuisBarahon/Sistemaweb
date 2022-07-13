@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Detalles del usuario'])
@section('content')
    <div class="content">
        <div class="container fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <div class="card-title">Usuarios</div>
                            <p class="card-category">Detalles del usuario {{ $user->name }}</p>
                        </div>
                        {{-- body --}}
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="success">
                                    {{ session('success') }}
                                </div>
                                @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card card-user">
                                        <div class="card-body">
                                            <p class="card-text">
                                                <div class="author">
                                                    <a href="#" class="d-flex" id="">
                                                        <img src="{{ asset('/img/default-avatar.png') }}" alt="" class="avatar">
                                                        <h5 class="title mx-3">Detalles</h5>
                                                    </a>
                                                    <p class="description">
                                                        {{ $user->username }} <br>
                                                        {{ $user->email }} <br>
                                                        {{ $user->created_at }} <br>
                                                    </p>
                                                </div>
                                            </p>
                                            <div class="card-description">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere tempore sapiente, dicta dolorem laborum laudantium sed quam eius blanditiis voluptatum rem ipsa possimus laboriosam. Nobis iste perspiciatis debitis nemo voluptatibus!
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="button-container">
                                                <a href="{{ route('users.index', $user->id) }}" class="btn btn-sm btn-danger mr-3"> Volver </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--fin del container 1-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection