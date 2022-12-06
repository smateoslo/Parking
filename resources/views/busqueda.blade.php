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
  <li>
</li>
</ul>
</nav>
@endsection

@section('busqueda')
<section style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Busqueda Por Fecha</h4>

              <form action="/busqueda" method="get">
                    @csrf
                  <div class="input-group">
                      <input type="date" name="buscador" class="form-control rounded" aria-label="Search" aria-describedby="search-addon" value=""/>
                      <button type="submit" class="btn btn-outline-primary">Buscar</button>
                  </div>
              </form>

            </div>
        </div>
      </div>
    </div>
  </div>
</section>




<section style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Busqueda de Coches de Usuairo</h4>

            <form action="{{ url('/listaCocheUsuario') }}"method="get" class="row justify-content-center align-items-center mb-4 pb-2">
                @csrf
              <div class="col-12">
                <div class="form-outline">
                <label class="form-label" >Usuario:</label>
                <select class="form-select"  name="users">
                    @foreach ($usuarios as $usuario)
                        <option value="{{$usuario->id }}" > {{ $usuario->name }}</option>
                    @endforeach
                </select>
                <br>
                </div>
              </div>
              <div class="col-12">
                <input type="submit" value="Buscar" name='lista' class="btn btn-primary"></input>
              </div>
            </form>
            </div>
        </div>
      </div>
    </div>
  </div>
  </section>

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
                  <th scope="col">Matricula</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Modelo</th>
                </tr>
              </thead>
              <tbody>
              @foreach($coches as $coche)
                <tr>
                  <th scope="row">{{$coche->id}}</th>
                  <td>{{$coche->matricula}}</td>
                  <td>{{$coche->marca}}</td>
                  <td>{{$coche->modelo}}</td>
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