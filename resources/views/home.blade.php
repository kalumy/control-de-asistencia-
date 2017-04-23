@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" >
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    @if(Auth::guest())

                    @else
                        @if(Auth::user()->tipo_id==1)                            
                            @include('admin.inicio')
                        @else
                            @if(session('v'))
                                    @if(session('v')=='verificado')
                                        <div align="rigth"><a aling href="{{ route('asistencia.fin', [date("Y-m-d"),Auth::user()->id] )}}">{!! Form::button('Terminar dia',['class' => 'btn btn-info','type'=>'button']) !!}</a></div><br>
                                    @endif                                
                                @include('alumnos.inicio')
                            @else
                                {!! redirect('admin/asistencia/verificar/'.Auth::user()->id) !!}
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
