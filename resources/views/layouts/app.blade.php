<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/1.4.2/css/scroller.dataTables.min.css">
    <!-- Validation engine-->
    <link rel="stylesheet" href="{{asset('plugins/validation/css/validationEngine.jquery.css')}}">   
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header" >

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->nombre }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Salir</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @include('flash::message')
    
    @yield('content')

     <script src="{{asset('plugins/validation/js/languages/jquery.validationEngine-es.js')}}" charset="utf-8"></script>
     <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/validation/js/jquery.validationEngine.js')}}" charset="utf-8"></script>
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('vendor/datatables/buttons.server-side.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/scroller/1.4.2/js/dataTables.scroller.min.js"></script>
    <!-- alertify JavaScript -->
    <script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>
    <script>
        $(document).ready(function() {
           $("#logueo").validationEngine(); 
        });
    </script>
    @if (!Auth::guest())
    <script>
        function eliminarAlumno(id) {
            window.location.href="admin/usuario/"+id+"/delete";   
        }
        function actualizarAlumno(id) {
             window.location.href="admin/usuario/"+id+"/edit";
        }
        function Validar() {
            var archivo = $("#reporte").val();
            if (archivo == "") {
                alertify.alert('Error', 'Favor de cargar archivo');
                return false;
            } else {                
                var extensiones = archivo.substring(archivo.lastIndexOf("."));
                if(extensiones != ".pdf"){
                     alertify.alert('Error','El archivo de tipo ' + extensiones + 'no es válido');
                    return false;
                }else{
                    return true;
                }
            }
            
        }
        $(document).ready(function(){
            @if(isset($id_usuario))
            $('#TablaReportes').DataTable({
                responsive: true,
                "processing": true,
                "serverSide": true,
                "ajax": "/api/reportes/{{$id_usuario}}",
                scrollY:        300,
                "columns": [
                    {"data":"id", name: 'id'},
                    {"data":"dia",name:"dia"},
                    {                       
                        "defaultContent": "<a href=\"#\" border=\"1px\"><i class=\"fa fa-file-pdf-o\" style=\"font-size:50px;color:red\"></i></a>"
                    },
                ]                
            } );
            @endif
            $('#TablaAlumnos').DataTable({
                responsive: true,                 
                dom: 'C<"clear">lfrtip',                            
                "processing": true,
                "serverSide": true,
                "ajax": "/api/alumnos",
                scrollY:        300,
                "columns": [
                    {"data":"id", name: 'id'},
                    {"data":"nombre", name: 'nombre'},
                    {"data":"escuela",name: 'escuela'},
                    {"data":"email", name: 'email'},
                    {
                        "orderable":      false,
                        "data":           null,
                        "searchable": false,
                        "defaultContent": "<a href=\"#\" border=\"1px\"><i class=\"fa fa-file-pdf-o\" style=\"font-size:50px;color:red\"></i></a>"
                    },
                    {
                        "orderable":      false,
                        "data":           null,
                        "searchable": false,
                        "defaultContent": "<a href=\"#\"><img width=\"50px\" class=\"eliminar\" src=\"{{asset('img/eliminar.png')}}\"></a>"
                    },
                    {
                        "orderable":      false,
                        "data":           null,
                        "searchable": false,
                        "defaultContent": "<a href=\"#\" border=\"1px\"><img width=\"50px\" class=\"actualizar\" src=\"{{asset('img/actualizar.png')}}\"></a>"
                    }
                ]                
            } );


            $('#TablaAsistencias').DataTable({  
                responsive: true,
                dom : 'Bfrtip',                     
                "processing": true,
                "serverSide": true,
                "ajax": "/api/asistencia/{{Auth::user()->id}}",
                "columns": [
                    {"data":"dia", name: 'dia'},
                    {"data":"entrada", name: 'entrada'},
                    {"data":"salida", name: 'salida'},
                    {"data":"horas", name: 'horas'}                 
                ],
                buttons: [{
                    extend: 'pdfHtml5',
                    text : '<i class="fa fa-file-pdf-o" style="font-size:20px;color:red"></i>',
                    download: 'open',
                    exportOptions: {
                        columns: ':visible',
                    }
                },
                {
                    extend : 'excel',
                    text : '<i class="fa fa-file-excel-o" style="font-size:20px;color:green"></i>',
                    download: 'open',
                    exportOptions: {
                        columns: ':visible',
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print" style="font-size:20px;color:black"></i>',
                    exportOptions: {
                        columns: ':visible',
                    }
                },
                {
                    extend : 'colvis',
                    text: 'Sel. Columnas'
                }            
                ]               
            } );
            $('#TablaAlumnos tbody').on( 'click', 'img', function () {
                var accion = $(this).attr("class");
                var valores;
                valores=[]
                var i=0;
                $(this).parents("tr").find("td").each(function(){
                   valores[i]=$(this).html();
                   i++; 
                });
                alertify.confirm('<img width="50px" src="{{asset('img/eliminar.png')}}">', '<h3>Realmente desea '+accion+' a</h3><br> *'+valores[1], function(){
                    if (accion=="eliminar") {
                        eliminarAlumno(valores[0]);
                    } else if(accion=="actualizar") {
                        actualizarAlumno(valores[0]);
                    } 
                }, function(){});                
            } );
             $('#TablaAlumnos tbody').on( 'click', 'i', function () {
                var valores;
                valores=[]
                var i=0;
                $(this).parents("tr").find("td").each(function(){
                   valores[i]=$(this).html();
                   i++; 
                });
                window.location.href="admin/reportes/"+valores[0];
                               
            } );
             $('#TablaReportes tbody').on( 'click', 'i', function () {
                var valores;
                valores=[]
                var i=0;
                $(this).parents("tr").find("td").each(function(){
                   valores[i]=$(this).html();
                   i++; 
                });
                window.location.href="/admin/reporte/"+valores[0];
                               
            } );

            $('#flash-overlay-modal').modal();
        });
    </script>
    @endif
</body>
</html>
