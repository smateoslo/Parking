@extends('coche')

@section('nav')
<nav>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="{{url('/')}}">Nuevo coche</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/usuario')}}">Crear usuario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/inicioAsignar')}}">Asignar usuario</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/inicioBusqueda')}}">Busqueda Abanzada</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{url('/inicioMatricula')}}">Busqueda Matricula</a>
  </li>
  <li>
</li>
</ul>
</nav>
@endsection

@section('crearUsuario')

<section style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Crear usuario</h4>

            <form action="{{ url('/crearUsuario') }}" method="post" class="row justify-content-center align-items-center mb-4 pb-2">
                @csrf
              <div class="col-12">
                <div class="form-outline">
                <label class="form-label">Nombre:</label>
                  <input type="text" id="name" name="name" class="form-control" />
                  @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-outline">
                <label class="form-label" >Apellido:</label>
                  <input type="text" id="apellido" name="apellido" class="form-control" />
                  @error('apellido')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-outline">
                <label class="form-label" >Correo:</label>
                  <input type="email" id="email" name="email" class="form-control" />
                  @error('email')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-12">
                <input type="submit" class="btn btn-primary"></input>
              </div>
            </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  </section>
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