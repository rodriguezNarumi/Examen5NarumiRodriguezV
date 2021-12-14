@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
   <section class="content-header">

   <h1>Gestor De Ventas Finalizadas</h1>
   </section>

   <section class="content">
       <div class="box">
           <div class="box-body">
               
           <table class="table table-hover table-striped table-bordered DT1">

           <thead>
               <tr>
                   <th>ID</th>
                   <th>Cliente</th>
                   <th>Vendedor</th>
                   <th>Fecha</th>
                   <th>Total</th>
                   <th></th>
               </tr>
           </thead>

           <tbody>

               @foreach($ventas as $venta)

               <tr>
                   <td>{{ $venta->id}}</td>
                   <td>{{ $venta->CLIENTE->nombre}}</td>
                   <td>{{ $venta->VENDEDOR->name}}</td>
                   <td>{{ $venta->fecha}}</td>
                   <td>${{ $venta->total}}</td>
                   <td>

                   <a href="{{ url('Ver-Venta/'.$venta->id) }}">
                       <button class="btn btn-warning">Ver Ventas</button>
                   </a>
                   </td>
               </tr>

               @endforeach
           </tbody>
           </table>
           </div>

       </div>
   </section>

   </div>
@endsection