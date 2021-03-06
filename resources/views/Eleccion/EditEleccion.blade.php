@extends('Layouts.layout')

@section('title')
  ICE | Elecciones
@endsection

@section('pag_title')
  Editar Eleccion
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Elecciones</a></li>
  <li class="active">Editar Eleccion</li>
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
              <h3 class="text-center">Editar Elecciones</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="{{ route('edit_eleccion',['eleccion'=> $eleccion->ID_ELECCION]) }}" method="post">
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
                  <option value="{{$asociado->ID_PAIS}}">{{$asociado->NOMBRE}}</option>
                  @foreach ($paises as $pais)
                    <option value="{{$pais->ID_PAIS}}">{{$pais->NOMBRE}}</option>
                  @endforeach
                </select>
            </div>
            <!-- COMBO DE PAISES DISPONIBLES -->
            <!-- L99KmpyR04B -->
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Nombre Eleccion</label>
                <input required  name="Eleccion" value="{{ $eleccion->NOMBRE }}"  type="text" class="form-control" aria-required="true">
            </div>
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Fecha</label>
                <input required type="number" maxlength="4"  name="Anio" value="{{ $eleccion->ANIO }}"  type="text" class="form-control" aria-required="true">
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
                <a href="{{ route('see_elecciones') }}" id="payment-button" class="btn btn-lg btn-secondary btn-block">
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
