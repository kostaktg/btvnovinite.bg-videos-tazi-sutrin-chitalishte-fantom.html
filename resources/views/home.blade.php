@extends('layouts.app')

@section('title')
Всички
@endsection



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            
                <div class="panel-heading">Администраторски панел</div>

                <div class="panel-body">
                    Разпознат потребител:<span class="sametext"> {{ Auth::user()->name }}</span>. Регистриран на: <span class="sametext"> {{ Auth::user()->created_at }}</span><h3>Добре дошъл:<span class="sametext1"><strong> {{ Auth::user()->name }} </strong></span> </h3> последна промяна : <span class="sametext">{{ Auth::user()->updated_at }}</span><div class="rightfloat">Промяна на <a href="{{ route('profile') }}"><span class="sametext1"><strong>ПРОФИЛ</strong></span></a></div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
