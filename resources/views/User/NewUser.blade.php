@extends('Layouts.layout')

@section('title')
  ICE | Usuarios
@endsection

@section('pag_title')
  Ver Usuarios
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Usuarios</a></li>
  <li class="active">Agregar Nuevo Usuario</li>
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
              <h3 class="text-center">Nuevo Usuario</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="{{ route('registrar_us') }}" method="post">
            {{ csrf_field() }}
            @if(!empty($data))
              @if($data['resultado']==false)
                <div class="alert alert-danger">
                  {{$data['mensaje']}}
                </div>
              @endif
            @endif
            <div class="form-group text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="text-muted fa fa-user-md fa-2x"></i></li>
                </ul>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Usuario del Sistema</label>
                <input required  name="Usuario" value="{{old('Usuario')}}"  type="text" class="form-control" aria-required="true">
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Password del Usuario</label>
                <input required value="{{old('Password')}}"  name="Password" type="password" class="form-control" aria-required="true">
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-check fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Registrar Usuario</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </div>
          </form>
          <!-- FORMULARIO DE USUARIO -->
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
