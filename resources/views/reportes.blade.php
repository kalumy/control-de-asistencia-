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
                            @include('admin.reportes')
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
