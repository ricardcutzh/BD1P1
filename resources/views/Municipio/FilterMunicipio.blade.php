@extends('Layouts.layout')

@section('title')
  ICE | Municipios de {{$departamento->NOMBRE}}
@endsection

@section('pag_title')
  Ver Municipios de {{$departamento->NOMBRE}}
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Municipios</a></li>
  <li class="active">Municipios de {{$departamento->NOMBRE}}</li>
@endsection

@section('contenido')
<div class="animated">
  <div class="animated">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Municipio</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Municipio</th>
              <th>Departamento Asociada</th>
              <th>Ver Detalle de Votos</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($municipios as $municipio)
                <tr>
                  <td>{{$municipio->NOMBRE}}</td>
                  <td>{{$departamento->NOMBRE}}</TD>
                  <td><a href="{{route('see_esp_det',['municipio'=>$municipio->ID_MUNICIPIO])}}" class="btn btn-secondary mb-1" value=""><li class="fa fa-eye"></li> Ver Desgloce de Votos</a></td>
                  <td><a href="{{ route('editar_municipio',['municipio'=>$municipio->ID_MUNICIPIO])}}" class="btn btn-warning mb-1" value=""><li class="fa fa-magic"></li> Editar</a></td>
                  <form action="{{ route('delete_municipio',['municipio'=>$municipio->ID_MUNICIPIO])}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <td><button class="btn btn-danger mb-1" ><li class="fa fa-times"></li> Eliminar</button></td>
                  </form>
                </tr>
              @endforeach
              {{$municipios->render()}}
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
