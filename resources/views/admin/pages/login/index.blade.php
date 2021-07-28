@extends('admin.layouts.login.index')

@section('content')

    <div class="auth-form-wrapper px-4 py-5">
        <a href="javascript: void(0);" class="noble-ui-logo d-block mb-2">
            <img src="{{asset('public/web/images/logo-huertas.png')}}" width="150px">
        </a>
        <h5 class="text-muted font-weight-normal mb-4">¡Bienvenido de nuevo! Ingrese a su cuenta</h5>
        <form class="forms-sample">
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" id="user" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="clave">Contraseña</label>
                <input type="password" class="form-control" id="clave" autocomplete="current-password" placeholder="Contraseña">
            </div>
            <!--<div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Remember me
                </label>
            </div>-->
            <div class="mt-3">
                <a href="{{route("admin.inicio")}}" class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Iniciar Sesión</a>
            </div>
        </form>
    </div>

@endsection
