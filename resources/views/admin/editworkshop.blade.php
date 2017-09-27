     @extends('layouts.app')

     @section('title')
Кръжокци
     @endsection

@section('content') 


@if($value[0])
<div class="container">
<div class="row"><h2>{{ $value[0] }}</h2></div></div>
@endif




<div class="container">
<div class="row">
<div class="col-md-6 outline ">


<form enctype="multipart/form-data" action="{{URL(route('updateworkshop' , $blog->id))}}" method="POST">


 {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Заглавие</label>
    <input type="text" class="form-control" id="title" name='name' value="{{ $blog->name }}">
  </div>
  <div class="form-group">
    <label for="text">Текст</label>
    <textarea class="form-control" rows="3" id="text" name="text">

    {{ $blog->text }}

    </textarea>
  </div>
  <div class="form-group">
    <label for="imageid">Качване на снимка</label>
    <input type="file" id="imageid" name="image">
    <p class="help-block">Избери снимка от компютъра</p>
  </div>
  <div class="checkbox">

  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" name="submit">Промени</button><div class="rightfloat"><a href="{{ route('create') }}"><span class="sametext1"><strong> Върни се </strong></span></a></div></div>


</form>

@include('includes.errors')

</div></div></div>




@endsection
