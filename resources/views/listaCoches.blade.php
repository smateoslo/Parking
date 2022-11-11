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
  <li>
    <form action="/listaCoches" method="get">
      @csrf
    <div class="input-group">
        <input type="search" name="buscador" class="form-control rounded" placeholder="Matricula" aria-label="Search" aria-describedby="search-addon" value=""/>
        <button type="submit" class="btn btn-outline-primary">Buscar</button>
    </div>
    </form>
</li>
</ul>
</nav>
@endsection


@section('listaCoches')

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
                  <td>
                    <form action="{{url('/coche/'.$coche->id)}}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Seguro que quieres eliminar el coche?')"  class="btn btn-danger" value="Eliminar"></input>
                    </form>
                </td>
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
