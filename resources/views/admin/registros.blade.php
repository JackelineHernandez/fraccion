@extends('admin.home')

@section('content')
  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Fecha Nacimiento</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
<?php     $i=0;
          foreach ($personas as $persona) {                          ?>
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$persona->nombre}}</td>
              <td>{{$persona->apellido}}</td>
              <td>{{$persona->fecha_nacimiento}}</td>
              <td>{{$persona->telefono}}</td>
              <td>{{$persona->correo}}</td>
            </tr>
<?php       $i++;
          }                                                                 ?>

        </tbody>
      </table>
    </div>
  </div>
@endsection
