@extends('Layouts.layout')

@section('title')
  ICE | Usuarios
@endsection

@section('pag_title')
  Ver Usuarios
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
  <li><a href="#">Usuarios</a></li>
  <li class="active">Ver Usuarios</li>
@endsection

@section('contenido')
<div class="animated">
  <div class="animated">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <strong class="card-title">Usuarios</strong>
        </div>
        <div class="card-body">
          <table class="table table-striped table-bordered">
            <thead>
              <th>Nombre de Usuario</th>
              <th>Password</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <td>{{$user->NOMBRE}}</td>
                  <td>{{$user->PASSW}}</td>
                  <td><a href="{{ route('editar_us',['usuario'=>$user->ID_USUARIO])}}" class="btn btn-warning mb-1" value="{{$user->ID_USUARIO}}"><li class="fa fa-magic"></li> Editar</a></td>
                  <form action="{{ route('delete_us',['usuario'=>$user->ID_USUARIO])}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <td><button class="btn btn-danger mb-1" ><li class="fa fa-times"></li> Eliminar</button></td>
                  </form>
                </tr>
              @endforeach
              {{$users->render()}}
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
