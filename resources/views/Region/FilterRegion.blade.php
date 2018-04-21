@extends('Layouts.layout')

@section('title')
  ICE | Regiones de {{$pais->NOMBRE}}
@endsection

@section('pag_title')
  Ver Regiones de {{$pais->NOMBRE}}
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Paises</a></li>
  <li class="active">Regiones de {{$pais->NOMBRE}}</li>
@endsection

@section('contenido')
<div class="animated">
  <div class="animated">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Regiones</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Nombre de la Region</th>
              <th>Pais Asociado</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($regiones as $region)
                <tr>
                  <td>{{$region->NOMBRE}}</td>
                  <td>{{$pais->NOMBRE}}</TD>
                  <td><a href="{{ route('editar_pais',['pais'=>$pais->ID_PAIS])}}" class="btn btn-warning mb-1" value=""><li class="fa fa-magic"></li> Editar</a></td>
                  <form action="{{ route('delete_pais',['pais'=>$pais->ID_PAIS])}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <td><button class="btn btn-danger mb-1" ><li class="fa fa-times"></li> Eliminar</button></td>
                  </form>
                </tr>
              @endforeach
              {{$regiones->render()}}
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
