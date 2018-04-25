@extends('Layouts.layout')

@section('title')
  ICE | Elecciones
@endsection

@section('pag_title')
  Ver Elecciones
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Eleccion</a></li>
  <li class="active">Agregar Nueva Eleccion</li>
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
              <h3 class="text-center">Registrar Nueva Eleccion</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="{{route('insert_eleccion')}}" method="post">
            {{ csrf_field() }}

            <div class="form-group text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="text-muted ti ti-world fa-2x"></i></li>
                </ul>
            </div>
            <!-- COMBO DE PAISES DISPONIBLES -->
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Pais Asociado</label>
                <!--<input required  name="Pais" value=""  type="text" class="form-control" aria-required="true">-->
                <select name="Pais" name="Pais" class="form-control">
                  @foreach ($paises as $pais)
                    <option value="{{$pais->ID_PAIS}}">{{$pais->NOMBRE}}</option>
                  @endforeach
                </select>
            </div>
            <!-- COMBO DE PAISES DISPONIBLES -->
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Nueva Eleccion</label>
                <input required  name="Eleccion" value=""  type="text" class="form-control" aria-required="true">
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Anio</label>
                <input required type="number" maxlength="4"  name="Anio" value="2000"  type="text" class="form-control" aria-required="true">
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-check fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Registrar Eleccion</span>
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
