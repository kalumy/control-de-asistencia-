@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar</div>
                <div class="panel-body">
                    {!! Form::open(['id'=>'logueo'])!!}
                    {!! Field::email('email',['ph'=>'Ingrese Correo Electronico']) !!}
                    {!! Field::password('password',['ph'=>'**********']) !!}
                    {!! Form::button('<span class="fa fa-btn fa-user"></span> Enviar',['class' => 'btn btn-primary','type'=>'submit']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
