@extends('layouts.app', $options)

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card data-tables">

                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Usuarios</h3>
                                    <p class="text-sm mb-0">
                                        Listado de Usuarios registrados en el sistema
                                    </p>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-fill">
                                        <i class="fas fa-plus"></i> Nuevo</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                        </div>

                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Correo Electrónico</th>
                                    <th>Fecha de Creación</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Correo Electrónico</th>
                                    <th>Fecha de Creación</th>
                                    <th>Acciones</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td class="col-auto">{{ $loop->iteration }}</td>
                                        <td role="col">{{ $user->name }}</td>
                                        <td role="col">{{ $user->email }}</td>
                                        <td role="col">{{ $user->created_at->format('d/m/Y') }}</td>
                                        <td class="col-auto">
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-fill btn-info dropdown-toggle" data-toggle="dropdown">

                                                    <i class="fas fa-cog"></i>
                                                    <b class="caret"></b>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="fas fa-edit"></i>
                                                        Modificar
                                                    </button>
                                                    <li class="divider"></li>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="fas fa-trash"></i>
                                                        Eliminar
                                                    </button>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No hay Registros</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center">

                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
