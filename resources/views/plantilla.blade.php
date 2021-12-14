<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Libreria</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public//dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">


  <link rel="stylesheet" href="http://localhost/Backend/unidad5/Librerial8/public/bower_components/select2/dist/css/select2.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-danger sidebar-mini login-page">

@if(Auth::user())

<div class="wrapper">

@include('modulos.cabecera')

@if(auth()->user()->rol == "Vendedor")
@include('modulos.menuV')

@else

@include('modulos.menu')
@endif

@yield('contenido')

</div>

@else

   @yield('content')

@endif
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/raphael/raphael.min.js"></script>
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->

<!-- jQuery Knob Chart -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/moment/min/moment.min.js"></script>
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="http://localhost/Backend/unidad5/Librerial8/public/dist/js/demo.js"></script>



<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>

<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>


<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/input-mask/jquery.inputmask.js"></script>
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/input-mask/jquery.inputmask.extensions.js"></script>

<script src="http://localhost/Backend/unidad5/Librerial8/public/bower_components/select2/dist/js/select2.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script type="text/javascript">

  

$('.sidebar-menu').tree();

$("#select2").select2();


$(".DT1").DataTable({

"language": {

  "sSearch": "Buscar:",
  "sEmptyTable": "No hay datos en la Tabla",
  "sZeroRecords": "No se encontraron resultados",
  "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
  "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
  "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
  "oPaginate": {

    "sFirst": "Primero",
    "sLast": "Último",
    "sNext": "Siguiente",
    "sPrevious": "Anterior"

  },

  "sLoadingRecords": "Cargando...",
  "sLengthMenu": "Mostrar _MENU_ registros"


}

});

$(".DT2").DataTable({

  "pageLength": 1,

"language": {

  "sSearch": "Buscar:",
  "sEmptyTable": "No hay datos en la Tabla",
  "sZeroRecords": "No se encontraron resultados",
  "sInfo": "Mostrando registros del _START_ al _END_ de un total _TOTAL_",
  "SInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0",
  "sInfoFiltered": "(filtrando de un total de _MAX_ registros)",
  "oPaginate": {

    "sFirst": "Primero",
    "sLast": "Último",
    "sNext": "Siguiente",
    "sPrevious": "Anterior"

  },

  "sLoadingRecords": "Cargando...",
  "sLengthMenu": "Mostrar _MENU_ registros"


}

});


$('.table').on('click', '.EliminarUsuario', function(){

  var Uid = $(this).attr('Uid');
  
  var Usuario = $(this).attr('Usuario');

  Swal.fire({
    title: '¿Seguro que deseas eliminar el Usuario: '+Usuario+'?',
    icon: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Cancelar',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Eliminar',
    confirmButtonColor: '#3085d6'

  }).then((result) => {

    if(result.isConfirmed){
      window.location = "Eliminar-Usuario/"+Uid;
    }
  })

});


$('.table').on('click', '.EliminarCliente', function(){

var Cid = $(this).attr('Cid');

var Cliente = $(this).attr('Cliente');

Swal.fire({
  title: '¿Seguro que deseas eliminar el Cliente: '+Cliente+'?',
  icon: 'warning',
  showCancelButton: true,
  cancelButtonText: 'Cancelar',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  confirmButtonColor: '#3085d6'

}).then((result) => {

  if(result.isConfirmed){
    window.location = "Eliminar-Cliente/"+Cid;
  }
})

});

$('.table').on('click', '.QuitarLibro', function(){

var Lid = $(this).attr('Lid');


Swal.fire({
  title: '¿Seguro que deseas quitar este libro?',
  icon: 'warning',
  showCancelButton: true,
  cancelButtonText: 'Cancelar',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Eliminar',
  confirmButtonColor: '#3085d6'

}).then((result) => {

  if(result.isConfirmed){
    window.location = "Libro-Q/"+Lid;
  }
})

});


$('[data-mask]').inputmask();


</script>

@if(session('UsuarioCreado') == 'OK')

<script type="text/javascript">

  Swal.fire(

    'El usuario ha sido Creado',
    '',
    'success'
  )


  </script>

@elseif(session('ClienteCreado') == 'OK')

<script type="text/javascript">

  Swal.fire(

    'El Cliente ha sido Creado',
    '',
    'success'
  )


  </script>

@elseif(session('ClienteActualizado') == 'OK')

<script type="text/javascript">

  Swal.fire(

    'El Cliente ha sido Actualizado',
    '',
    'success'
  )


  </script>

@elseif(session('AutorCreado') == 'OK')

<script type="text/javascript">

  Swal.fire(

    'El Autor ha sido Registrado',
    '',
    'success'
  )


  </script>

@elseif(session('LibroCreado') == 'OK')

<script type="text/javascript">

  Swal.fire(

    'El Libro ha sido Agregado Correctamente',
    '',
    'success'
  )


  </script>


@endif

<?php

$exp = explode('/', $_SERVER["REQUEST_URI"]);
?>

@if($exp[5] == 'Editar-Usuario')

<script type="text/javascript">

             $(document).ready(function(){

                $('#EditarUsuario').modal('toggle');
               
             })

    </script>

    @elseif($exp[5] == 'Editar-Cliente')

<script type="text/javascript">

             $(document).ready(function(){

                $('#EditarCliente').modal('toggle');
               
             })

    </script>

@elseif($exp[5] == 'Libro-S')

<script type="text/javascript">

             $(document).ready(function(){

                $('#Sinopsis').modal('toggle');
               
             })

    </script>

@elseif($exp[5] == 'Libro-E')

<script type="text/javascript">

             $(document).ready(function(){

                $('#EditarLibro').modal('toggle');
               
             })

    </script>

    
@endif
</body>
</html>
