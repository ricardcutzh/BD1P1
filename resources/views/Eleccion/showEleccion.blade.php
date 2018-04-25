@extends('Layouts.layout')

@section('title')
  ICE | Eleccion
@endsection

@section('pag_title')
  Ver Elecciones
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Elecciones</a></li>
  <li class="active">Ver Elecciones</li>
@endsection

@section('contenido')
<div class="animated">
  <div class="animated">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Elecciones</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Eleccion</th>
              <th>Fecha</th>
              <th>Pais Asociado</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($elecciones as $eleccion)
                <tr>
                  <td>{{$eleccion->NOMBRE}}</td>
                  <td>{{$eleccion->ANIO}}</td>
                  <td>{{$eleccion->COUNTRY}}</td>
                  <td><a href="{{ route('editar_eleccion',['elecccion'=>$eleccion->ID_ELECCION])}}" class="btn btn-warning mb-1" value=""><li class="fa fa-magic"></li> Editar</a></td>
                  <form action="{{ route('delete_eleccion',['elecccion'=>$eleccion->ID_ELECCION])}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <td><button class="btn btn-danger mb-1" ><li class="fa fa-times"></li> Eliminar</button></td>
                  </form>
                </tr>
              @endforeach
              {{$elecciones->render()}}
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
