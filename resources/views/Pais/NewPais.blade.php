@extends('Layouts.layout')

@section('title')
  ICE | Paises
@endsection

@section('pag_title')
  Ver Paises
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Pais</a></li>
  <li class="active">Agregar Nuevo Pais</li>
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
              <h3 class="text-center">Registrar Nuevo Pais</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="" method="post">
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
                    <li class="list-inline-item"><i class="text-muted ti ti-world fa-2x"></i></li>
                </ul>
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Nuevo Pais</label>
                <input required  name="Nombre" value=""  type="text" class="form-control" aria-required="true">
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-check fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Registrar Pais</span>
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
