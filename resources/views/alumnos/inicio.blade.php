<div class="row">
    {!! Form::open(['id'=>'logueo', 'onSubmit'=>'return Validar()','route'=>'asistencia.reporte','files'=>true]) !!}
    {!! Field::file('reporte')!!}
    {!! Field::hidden('id',Auth::user()->id)!!}
    {!! Form::button('Enviar',['class' => 'btn btn-primary','type'=>'submit']) !!}
    {!! Form::close() !!}
</div>
<br>
<table id="TablaAsistencias" class="display" width="90%">
    <thead>
        <tr>
            <th data-priority="1">Fecha</th>
            <th>Entrada</th>
            <th>Salida</th>
            <th>Horas</th>
        </tr>
    </thead>
    <tbody>
    
    </tbody>
</table>