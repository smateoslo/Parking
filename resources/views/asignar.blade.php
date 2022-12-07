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

@section('asignar')

<section style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pb-3">Asignar Coche a Usuario</h4>

            <form action="{{ url('/asignar') }}"method="post" class="row justify-content-center align-items-center mb-4 pb-2">
                @csrf
              <div class="col-12">
                <div class="form-outline">
                <label class="form-label">Coche:</label>
                  <select class="form-select"  name="coches">
                    @foreach ($coches as $coche)
                        <option value="{{$coche->id}}">{{ $coche->matricula }}</option>
                    @endforeach
                </select>
                </div>
                <br>
                <div class="form-outline">
                <label class="form-label" >Usuario:</label>
                <select class="form-select"  name="users">
                    @foreach ($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
                <br>
                </div>
              </div>
              <div class="col-12">
                <input type="submit" value="Asignar" class="btn btn-primary"></input>
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
              <tbody>
              @foreach($usuarios as $usuario)
                <tr>
                  <th scope="row">{{$usuario->name}}</th>
                  @foreach ($coches as $coche)
                    @if($coche->user_id == $usuario->id)
                    <tr>
                        <td>{{$coche->matricula}}</td>
                        <td>{{$coche->marca}}</td>
                        <td>{{$coche->modelo}}</td>
                    </tr>
                    @endif
                   @endforeach
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



