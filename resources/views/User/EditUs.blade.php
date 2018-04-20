@extends('Layouts.layout')

@section('title')
  ICE | Usuarios
@endsection

@section('pag_title')
  Editar Usuario
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Usuarios</a></li>
  <li class="active">Editar Usuario</li>
@endsection

@section('contenido')
  <div class="animated fadeIn">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
          <div class="card-title">
              <h3 class="text-center">Editar Usuario</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="{{ route('edit_us',['usuario'=> $usuario->ID_USUARIO]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="text-muted fa fa-user-md fa-2x"></i></li>
                </ul>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Usuario del Sistema</label>
                <input required  name="Usuario" value="{{ $usuario->NOMBRE }} "  type="text" class="form-control" aria-required="true">
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Password del Usuario</label>
                <input required value="{{ $usuario->PASSW }}"  name="Password" type="password" class="form-control" aria-required="true">
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                    <i class="fa fa-check fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Editar Informacion</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </div>
            <br>
            <div>
                <a href="{{ route('see_user') }}" id="payment-button" class="btn btn-lg btn-secondary btn-block">
                    <i class="fa  fa-share fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Volver</span>
                </a>
            </div>
          </form>
          <!-- FORMULARIO DE USUARIO -->
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
