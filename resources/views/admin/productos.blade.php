@extends('admin.home')

@section('content')
  <div class="row">
    <div class="col-2 offset-10">
      <a href="/admin/productos/create">
        <button type="submit" class="btn btn-primary">Nuevo</button>
      </a>
    </div>
    <div class="col-12">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Fecha Vencimiento</th>
            <th scope="col">Estado</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
<?php     $i=0;
          foreach ($productos as $producto) {                          ?>
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$producto->nombre}}</td>
              <td>{{$producto->fecha_inicio}}</td>
              <td>{{$producto->fecha_vencimiento}}</td>
              <td>{{$producto->estado->estado}}</td>
              <td>
                <a href="/admin/productos/{{$producto->id}}">Ver</a> |
                <form method="POST" id="delete{{$producto->id}}" action="/api/admin/productos/{{$producto->id}}">{{ csrf_field() }}{{ method_field('DELETE') }}<a href="#" onclick="eliminar({{$producto->id}})">Eliminar</a> </form> |
                <a href="/admin/productos/{{$producto->id}}/edit">Editar</a>
              </td>
            </tr>
<?php       $i++;
          }                                                                 ?>

        </tbody>
      </table>
    </div>
  </div>
@endsection
@section('javascript')
  <script type="text/javascript" src={{asset('js/admin/eliminar.js')}} charset="UTF-8"></script>
@endsection
