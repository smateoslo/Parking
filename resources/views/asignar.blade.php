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

@section('asignar')
<div style="margin-left: 38%; margin-top: 5%; width: 400px;">
            <form style="text-align:center;" method="POST" action="{{ url('/asignar') }}">
                {{ csrf_field() }}
                <label for= "coches">Coche:</label>
                <select name="coches">
                    @foreach ($coches as $coche)
                        <option value="{{$coche->id}}">{{ $coche->matricula }}</option>
                    @endforeach
                </select>
                <label for= "users">Usuario:</label>
                <select name="users">
                    @foreach ($usuarios as $usuario)
                        <option value="{{$usuario->id}}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
                <br>
                <button type="submit" style="margin-top: 20px;">Asignar</button>
            </form>
        </div>

        <div style="margin-left: 43%; margin-top: 5%; width: 300px;">
            <table border="2">
                <thead>
                    <td>Usuario</td>
                    <td>Matricula</td>
                    <td>Marca</td>
                    <td>Modelo</td>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            @foreach ($coches as $coche)
                                @if($coche->user_id == $usuario->id)
                                    <td>{{$coche->matricula}}</td>
                                    <td>{{$coche->marca}}</td>
                                    <td>{{$coche->modelo}}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
@endsection