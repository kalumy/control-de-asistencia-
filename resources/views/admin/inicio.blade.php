{!! Form::button('<img src="img/agregar.png" width="50px">agregar ',['class' => 'btn btn-info','type'=>'submit','data-toggle'=>'modal', 'data-target'=>'#myModal']) !!}
<script>
  var a = 0;
</script>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar</h4>
      </div>
      <div class="modal-body">
        {!! Form::open(['id'=>'logueo', 'route' => 'admin.usuario.store' ]) !!}
        @include('form.usuario')
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<table id="TablaAlumnos" class="display" width="90%">
    <thead>
        <tr>
            <th data-priority="1">ID</th>
            <th data-priority="1">Nombre</th>
            <th data-priority="1">Escuela</th>
            <th data-priority="1">Email</th>
            <th data-priority="1">Reportes</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>