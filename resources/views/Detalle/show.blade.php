@extends('Layouts.layout')

@section('title')
  ICE | Votos
@endsection

@section('pag_title')
  Ver Votos
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Votos</a></li>
  <li class="active">Ver Votos</li>
@endsection

@section('contenido')
<div class="animated">
  <div class="animated">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Votos</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Eleccion</th>
              <th>Municipio</th>
              <th>Sexo</th>
              <th>Etnia</th>
              <th>Votantes en Nivel Primario</th>
              <th>Votantes en Nivel Medio</th>
              <th>Votantes Universitarios</th>
              <th>Votantes Analfabetos</th>
            </thead>
            <tbody>
              @foreach ($detalles as $detalle)
                <tr>
                  <td>{{$detalle->ELEC}}</td>
                  <td>{{$detalle->MUNI}}</td>
                  <td>{{$detalle->SEXO}}</td>
                  <td>{{$detalle->ETNIA}}</td>
                  <td>{{$detalle->TP}}</td>
                  <td>{{$detalle->TM}}</td>
                  <td>{{$detalle->TU}}</td>
                  <td>{{$detalle->TN}}</td>
                </tr>
              @endforeach
              {{$detalles->render()}}
            </tbody
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
@endsection
