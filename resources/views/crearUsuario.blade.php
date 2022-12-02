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
                </div>
                <div class="form-outline">
                <label class="form-label" >Apellido:</label>
                  <input type="text" id="apellido" name="apellido" class="form-control" />
                </div>
                <div class="form-outline">
                <label class="form-label" >Correo:</label>
                  <input type="email" id="email" name="email" class="form-control" />
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