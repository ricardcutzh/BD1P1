@extends('Layouts.layout')

@section('title')
  ICE | Departamentos de {{$region->NOMBRE}}
@endsection

@section('pag_title')
  Ver Departamentos de {{$region->NOMBRE}}
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Departamentos</a></li>
  <li class="active">Departamentos de {{$region->NOMBRE}}</li>
@endsection

@section('contenido')
<div class="animated">
  <div class="animated">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Departamentos</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Departamento</th>
              <th>Region Asociada</th>
              <th>Ver Municipios</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($departamentos as $departamento)
                <tr>
                  <td>{{$departamento->NOMBRE}}</td>
                  <td>{{$region->NOMBRE}}</TD>
                  <td><a href="{{route('show_especific_municipios',['departamento'=>$departamento->ID_DEPARTAMENTO])}}" class="btn btn-secondary mb-1" value=""><li class="fa fa-eye"></li> Ver Municipios Asociados </a></td>
                  <td><a href="{{ route('editar_departamento',['departamento'=>$departamento->ID_DEPARTAMENTO])}}" class="btn btn-warning mb-1" value=""><li class="fa fa-magic"></li> Editar</a></td>
                  <form action="{{ route('delete_departamento',['departamento'=>$departamento->ID_DEPARTAMENTO])}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <td><button class="btn btn-danger mb-1" ><li class="fa fa-times"></li> Eliminar</button></td>
                  </form>
                </tr>
              @endforeach
              {{$departamentos->render()}}
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
