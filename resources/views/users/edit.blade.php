@extends('layouts.app', $options)

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="section-image">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="row  justify-content-center">

                    <div class="card col-md-8 ">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h3 class="mb-0">Editar Usuario</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('users.store') }}" autocomplete="off"
                                  enctype="multipart/form-data">
                                @csrf
                                @method('post')

                                <h6 class="heading-small text-muted mb-4">Datos del Usuario</h6>

                                @include('alerts.success')
                                @include('alerts.error_self_update', ['key' => 'not_allow_profile'])

                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">
                                            <i class="fa fa-user"></i>
                                            Nombre
                                        </label>
                                        <input type="text" name="name" id="input-name"
                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               placeholder="Nombre" value="{{ old('name', '') }}" required
                                               autofocus>

                                        @include('alerts.feedback', ['field' => 'name'])
                                    </div>
                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">
                                            <i class="fas fa-envelope"></i>
                                            Correo Electrónico
                                        </label>
                                        <input type="email" name="email" id="input-email"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               placeholder="Correo Electrónico" value="{{ old('email', '') }}" required>

                                        @include('alerts.feedback', ['field' => 'email'])
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">
                                            <i class="fas fa-lock"></i>
                                            Contraseña
                                        </label>
                                        <input type="password" name="password" id="input-password"
                                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                               placeholder="Contraseña" value="" required>

                                        @include('alerts.feedback', ['field' => 'password'])
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">
                                            <i class="fas fa-lock"></i>
                                            Confirmar Contraseña
                                        </label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation"
                                               class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                               placeholder="Confirmar Contraseña" value="" required>

                                        @include('alerts.feedback', ['field' => 'password_confirmation'])
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-default mt-4">Guardar</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
