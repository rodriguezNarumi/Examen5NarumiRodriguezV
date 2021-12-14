@extends('plantilla')

@section('contenido')

<div class="content-wrapper">
   <section class="content-header">

   <h1>Libros Del Autor: <b> {{ $autor->nombre}} </b></h1>
   </section>

   <section class="content">
       <div class="box">

              <div class="box-header">

              <a href="{{ url('Autores')}}">

              <button class="btn btn-primary">Volver</button>
              </a>


              </div>
           <div class="box-body">

           <table class="table table-bordered table-hover table-striped DT1">

           <thead>

           <tr>

           <th>Titulo</th>
           <th>Genero</th>
          
           <th>Sinopsis</th>
           <th>Idioma</th>
           <th>Portada</th>
           <th>Fecha de Publicacion</th>
           <th>Stock</th>
           <th>Precio</th>
          

           </tr>
           </thead>

           <tbody>

           @foreach($libros as $libro)
               <tr>
                   <td>{{ $libro->titulo}}</td>

                   <td>{{ $libro->GENERO->nombre}}</td>
                   

                   <td>{{ Str::limit($libro->sinopsis, 60) }}<a href="{{ url('Libro-S/'.$libro->id) }}"><button class="btn btn-default btn-xs">Leer</button></a></td>

                   <td>{{ $libro->idioma}}</td>

                   <td><img src="{{ url('storage/'.$libro->portada) }}" width="50px"></td>

                   <td>{{ $libro->fecha}}</td>

                   @if($libro->stock < 10 && $libro->stock > 5)

                   <td><button class="btn btn-success">{{ $libro->stock }}</button> </td>

                   @elseif($libro->stock <= 5)

                    <td><button class="btn btn-danger">{{ $libro->stock }}</button> </td>

                    @else

                    <td><button class="btn btn-warning">{{ $libro->stock }}</button> </td>

                   @endif

                   

                   <td>$ {{ $libro->precio}}</td>

                 
              </tr>
           @endforeach
                    </tbody>   
                </table>           
             </div>
          </div>
      </section>
</div>

   
@endsection