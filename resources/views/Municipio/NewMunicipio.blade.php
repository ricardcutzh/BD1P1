@extends('Layouts.layout')

@section('title')
  ICE | Municipio
@endsection

@section('pag_title')
  Ver Municipios
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Municipio</a></li>
  <li class="active">Agregar Nuevo Municipio</li>
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
              <h3 class="text-center">Registrar Nuevo Municipio</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="{{route('insert_municipio')}}" method="post">
            {{ csrf_field() }}

            <div class="form-group text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="text-muted ti ti-world fa-2x"></i></li>
                </ul>
            </div>
            <!-- COMBO DE PAISES DISPONIBLES -->
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Departamento Asociado</label>
                <!--<input required  name="Pais" value=""  type="text" class="form-control" aria-required="true">-->
                <select name="Departamento" class="form-control">
                  @foreach ($departamentos as $departamento)
                    <option value="{{$departamento->ID_DEPARTAMENTO}}">{{$departamento->NOMBRE}}</option>
                  @endforeach
                </select>
            </div>
            <!-- COMBO DE PAISES DISPONIBLES -->
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Nuevo Municipio</label>
                <input required  name="Municipio" value=""  type="text" class="form-control" aria-required="true">
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-check fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Registrar Municipio</span>
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
