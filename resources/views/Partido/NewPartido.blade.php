@extends('Layouts.layout')

@section('title')
  ICE | Partidos
@endsection

@section('pag_title')
  Ver Partidos
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Partido</a></li>
  <li class="active">Agregar Nuevo Partido</li>
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
              <h3 class="text-center">Registrar Nuevo Partido</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="{{route('insert_partido')}}" method="post">
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
                <label for="cc-payment" class="control-label mb-1">Nuevo Partido</label>
                <input required  name="Partido" value=""  type="text" class="form-control" aria-required="true">
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Iniciales de Partido</label>
                <input required  name="Iniciales" value=""  type="text" class="form-control" aria-required="true">
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-check fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Registrar Partidos</span>
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
