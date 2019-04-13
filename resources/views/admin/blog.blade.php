@extends('admin.home')

@section('content')
  <div class="row">
    <div class="col-2 offset-10">
      <a href="/admin/articulos/create">
        <button type="submit" class="btn btn-primary">Nuevo</button>
      </a>
    </div>
    <div class="col-12">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Fecha Creación</th>
            <th scope="col">Estado</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
<?php     $i=0;
          foreach ($articulos as $articulo) {                          ?>
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$articulo->titulo}}</td>
              <td>{{$articulo->fecha_creacion}}</td>
              <td>{{$articulo->estado}}</td>
              <td>
                <a href="/admin/articulos/{{$articulo->id}}">Ver</a> |
                <form method="POST" id="delete{{$articulo->id}}" action="/api/admin/articulos/{{$articulo->id}}">{{ csrf_field() }}{{ method_field('DELETE') }}<a href="#" onclick="eliminar({{$articulo->id}})">Eliminar</a> </form> |
                <a href="/admin/articulos/{{$articulo->id}}/edit">Editar</a>
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
