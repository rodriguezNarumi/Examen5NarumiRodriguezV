@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
   <section class="content-header">

   <h1>Crear Nueva Venta</h1>
   </section>

   <section class="content">
       <div class="box">

       <div class="box-header">

 <div class="col-md-4">

          <h2>Seleccione el Cliente:</h2>

          <form method="post">

          @csrf

                   <select class="form-control input-lg" id="select2" name="id_cliente" require="">


                       <option value="">Seleccione...</option>

                       @foreach($clientes as $cliente)

                       <option value="{{ $cliente->id}}">{{ $cliente->nombre}} - {{ $cliente->documento}}</option>

                       @endforeach

                   </select>
               
                      <?php
                          date_default_timezone_set('America/Argentina/Buenos_Aires');

                          $time = time();
                          $hoy = date("d/m/y");
                          $hora = date("H:i", $time);

                          echo '<input type="hidden" name="fecha" value="'.$hoy.' - '.$hora.'">';
                      ?>
                 
                 
                   <br>
                   <br>

                 <button type="submit" class="btn btn-warning">Crear</button>
                  

             
            </form>
          </div>

       </div>

 <div class="col-md-4">

       <button class="btn btn-success" data-toggle="modal" data-target="#CrearCliente">Crear Nuevo Cliente</button>
       </div>
      
           <div class="box-body">
               
           <table class="table table-bordered table-hover table-striped DT1">

                     <thead>

                     <tr>

                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Vendedor</th>
                        <th>Fecha</th>
                        <th></th>

                     </tr>

                     </thead>

                     <tbody>

                     @foreach($ventas as $venta)


                     <tr>

                     <td>{{ $venta->id }}</td>
                     <td>{{ $venta->CLIENTE->nombre }}</td>
                     <td>{{ $venta->VENDEDOR->name }}</td>
                     <td>{{ $venta->fecha }}</td>
                     
                     <td>

                     <a href="{{ url('Venta/'.$venta->id) }}">
                         <button class="btn btn-success">Gestionar Ventas</button>
                     </a>
                     </td>
                     </tr>


                     @endforeach
                     </tbody>

           </table>

       </div>
   </section>

   </div>

   <div class="modal fade" id="CrearCliente">

<div class="modal-dialog">
    <div class="modal-content">
        <form method="post" action="">
            @csrf
            
            <div class="modal-body">

            <div class="box-body">
                <div class="form-group">
                    <h2>Nombre:</h2>
                    <input type="text" class="form-control input-lg" name="nombre" require="">
                </div>

                <div class="form-group">
                    <h2>Documento:</h2>
                    <input type="text" class="form-control input-lg" name="documento" require="">
                </div>

                <div class="form-group">
                    <h2>Fecha de Nacimiento:</h2>
                    <input type="text" class="form-control input-lg" data-inputmask="'alias': 'dd/mm/yyyy' " 
                    data-mask="" name="fechaNac" require="">
                </div>

                <div class="form-group">
                    <h2>Direccion:</h2>
                    <input type="text" class="form-control input-lg" name="direccion" require="">
                </div>

                <div class="form-group">
                    <h2>Telefono:</h2>
                    <input type="text" class="form-control input-lg" data-inputmask=" 'mask': '+(99) 999-9999999'" 
                    data-mask="" name="telefono" require="">
                </div>

            </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Crear Cliente</button>
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </form>
    </div>
</div>
</div>
   
@endsection