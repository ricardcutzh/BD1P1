@extends('Layouts.layout')

@section('title')
  ICE | Departamentos
@endsection

@section('pag_title')
  Editar Departamento
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Departamentos</a></li>
  <li class="active">Editar Departamento</li>
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
              <h3 class="text-center">Editar Departamento</h3>
          </div>
          <hr>
          <!-- FORMULARIO DE USUARIO -->
          <form action="{{ route('edit_departamento',['departamento'=> $departamento->ID_DEPARTAMENTO]) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="text-muted ti ti-world fa-2x"></i></li>
                </ul>
            </div>
            <!-- COMBO DE PAISES DISPONIBLES -->
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Region Asociada</label>
                <!--<input required  name="Pais" value=""  type="text" class="form-control" aria-required="true">-->
                <select name="Region" class="form-control">
                  <option value="{{$asociado->ID_REGION}}">{{$asociado->NOMBRE}}</option>
                  @foreach ($regiones as $region)
                    <option value="{{$region->ID_REGION}}">{{$region->NOMBRE}}</option>
                  @endforeach
                </select>
            </div>
            <!-- COMBO DE PAISES DISPONIBLES -->
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Nombre Departamento</label>
                <input required  name="Departamento" value="{{ $departamento->NOMBRE }}"  type="text" class="form-control" aria-required="true">
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
                <a href="{{ route('show_especific_Departamentos',['region'=>$asociado->ID_REGION]) }}" id="payment-button" class="btn btn-lg btn-secondary btn-block">
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
