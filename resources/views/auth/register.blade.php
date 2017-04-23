@extends('layouts.app')

@section('content')
<script>
    var a=0;
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    {!! Form::open(['id'=>'logueo', 'route' => 'admin.usuario.store' ]) !!}
                    @include('form.usuario')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection