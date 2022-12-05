@extends('coche')

@section('nav')
<nav>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="{{url('/listaCoches')}}">Lista de coches</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/')}}">Nuevo coche</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/usuario')}}">Crear usuario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/listaUsuarios')}}">Lista usuario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/inicioAsignar')}}">Asignar usuario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/inicioBusqueda')}}">Busqueda Abanzada</a>
  </li>
</ul>
</nav>
@endsection


@section('listaUsuarios')

<section  style="background-color: #eee;">
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">
            
            <table class="table mb-4">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Correo</th>
                </tr>
              </thead>
              <tbody>
              @foreach($usuarios as $usuario)
                <tr>
                  <th scope="row">{{$usuario->id}}</th>
                  <td>{{$usuario->name}}</td>
                  <td>{{$usuario->apellido}}</td>
                  <td>{{$usuario->email}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
