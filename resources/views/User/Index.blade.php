@extends('Layouts.layout')

@section('title')
  ICE | Dashboard
@endsection

@section('pag_title')
  Informacion General de Base de Datos
@endsection

@section('path_pag')
  <li><a href="#">Dashboard</a></li>
@endsection

@section('contenido')
<div class="animated fadeIn">
  <div class="col-sm-12">
      <div class="alert  alert-success alert-dismissible fade show" role="alert">
        <span class="badge badge-pill badge-success">Bienvenido</span> Dashboard de Administracion del Sistema.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  </div>

  <div class="col-sm-6 col-lg-4">
       <div class="card text-white bg-flat-color-1">
           <div class="card-body pb-0">
               <div class="dropdown float-right">
                   <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                       <i class="fa fa-cog"></i>
                   </button>
               </div>
               <h4 class="mb-0">
                   <span class="count">{{$data['paises']}}</span>
               </h4>
               <p class="text-light">Paises Registrados</p>
           </div>
       </div>
   </div>

   <div class="col-sm-6 col-lg-4">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <div class="dropdown float-right">
                    <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fa fa-cog"></i>
                    </button>
                </div>
                <h4 class="mb-0">
                    <span class="count">{{$data['regiones']}}</span>
                </h4>
                <p class="text-light">Regiones Registrados</p>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-4">
         <div class="card text-white bg-flat-color-1">
             <div class="card-body pb-0">
                 <div class="dropdown float-right">
                     <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                         <i class="fa fa-cog"></i>
                     </button>
                 </div>
                 <h4 class="mb-0">
                     <span class="count">{{$data['departamentos']}}</span>
                 </h4>
                 <p class="text-light">Departamentos Registrados</p>
             </div>
         </div>
     </div>

     <div class="col-sm-6 col-lg-4">
          <div class="card text-white bg-flat-color-2">
              <div class="card-body pb-0">
                  <div class="dropdown float-right">
                      <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                          <i class="fa fa-cog"></i>
                      </button>
                  </div>
                  <h4 class="mb-0">
                      <span class="count">{{$data['municipios']}}</span>
                  </h4>
                  <p class="text-light">Municipios Registrados</p>
              </div>
          </div>
      </div>

      <div class="col-sm-6 col-lg-4">
           <div class="card text-white bg-flat-color-2">
               <div class="card-body pb-0">
                   <div class="dropdown float-right">
                       <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                           <i class="fa fa-cog"></i>
                       </button>
                   </div>
                   <h4 class="mb-0">
                       <span class="count">{{$data['partidos']}}</span>
                   </h4>
                   <p class="text-light">Partidos  Registrados</p>
               </div>
           </div>
       </div>

       <div class="col-sm-6 col-lg-4">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    <div class="dropdown float-right">
                        <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                    </div>
                    <h4 class="mb-0">
                        <span class="count">{{$data['elecciones']}}</span>
                    </h4>
                    <p class="text-light">Elecciones  Registrados</p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
             <div class="card text-white bg-flat-color-5">
                 <div class="card-body pb-0">
                     <div class="dropdown float-right">
                         <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                             <i class="fa fa-cog"></i>
                         </button>
                     </div>
                     <h4 class="mb-0">
                         <span class="count">{{$data['detalles']}}</span>
                     </h4>
                     <p class="text-light">Datos de Elecciones  Registradas</p>
                 </div>
             </div>
         </div>

         <div class="col-sm-6 col-lg-4">
              <div class="card text-white bg-flat-color-5">
                  <div class="card-body pb-0">
                      <div class="dropdown float-right">
                          <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                              <i class="fa fa-cog"></i>
                          </button>
                      </div>
                      <h4 class="mb-0">
                          <span class="count">{{$data['sexos']}}</span>
                      </h4>
                      <p class="text-light">Generos Registrados</p>
                  </div>
              </div>
          </div>

          <div class="col-sm-6 col-lg-4">
               <div class="card text-white bg-flat-color-5">
                   <div class="card-body pb-0">
                       <div class="dropdown float-right">
                           <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                               <i class="fa fa-cog"></i>
                           </button>
                       </div>
                       <h4 class="mb-0">
                           <span class="count">{{$data['etnias']}}</span>
                       </h4>
                       <p class="text-light">Etnias Registradass</p>
                   </div>
               </div>
           </div>

           <div class="col-sm-12">
               <div class="alert  alert-primary alert-dismissible fade show" role="alert">
                 <span class="badge badge-pill badge-primary">Usuarios Administradores</span> Informacion de Los Usuarios
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
           </div>

           <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                            <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </button>
                        </div>
                        <h4 class="mb-0">
                            <span class="count">{{$data['usuarios']}}</span>
                        </h4>
                        <p class="text-light">Usuarios En El Sistema</p>
                    </div>
                </div>
            </div>
</div>
@endsection
