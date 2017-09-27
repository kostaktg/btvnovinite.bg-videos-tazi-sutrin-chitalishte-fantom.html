
@extends('layouts.master', ['title' => '1'])



@section('title')

Читалище

@endsection
	
	
@section('content')  
 
@include('includes.slider')


@include('includes.actionbar')

@include('includes.services')

@include('includes.portfolio')

@include('includes.others')






	
@endsection('content') 