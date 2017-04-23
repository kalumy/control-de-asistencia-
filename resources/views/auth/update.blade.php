@extends('layouts.app')
@section('content')
<script>
    $(document).ready(function() {        
        $("#field_password").remove();
        $("#field_confirmar_password").remove();
        $("#nombre").val("{{ $usuario->nombre }}");
        $("#email").val("{{ $usuario->email }}");
        $("#escuela").val("{{ $usuario->escuela }}");
    });
    var a={{ $usuario->id }};
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar</div>
                <div class="panel-body">
                    {!! Form::open(['id'=>'logueo', 'route' => ['admin.usuario.update', $usuario->id],'method' => 'PUT']) !!}
                    @include('form.usuario')
                    {!! Form::close() !!}                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection