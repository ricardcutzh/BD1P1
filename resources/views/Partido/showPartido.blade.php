@extends('Layouts.layout')

@section('title')
  ICE | Partido
@endsection

@section('pag_title')
  Ver Partidos
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Partidos</a></li>
  <li class="active">Ver Partidos</li>
@endsection

@section('contenido')
<div class="animated">
  <div class="animated">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Partidos</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Partido</th>
              <th>Iniciales</th>
              <th>Pais Asociado</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($partidos as $partido)
                <tr>
                  <td>{{$partido->NOMBRE}}</td>
                  <td>{{$partido->INICIALES}}</td>
                  <td>{{$partido->COUNTRY}}</td>
                  <td><a href="{{ route('editar_partido',['partido'=>$partido->ID_PARTIDO])}}" class="btn btn-warning mb-1" value=""><li class="fa fa-magic"></li> Editar</a></td>
                  <form action="{{ route('delete_partido',['partido'=>$partido->ID_PARTIDO])}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <td><button class="btn btn-danger mb-1" ><li class="fa fa-times"></li> Eliminar</button></td>
                  </form>
                </tr>
              @endforeach
              {{$partidos->render()}}
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
