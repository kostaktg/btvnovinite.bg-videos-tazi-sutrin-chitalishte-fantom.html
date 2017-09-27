 

@extends('layouts.master', ['title' => '3'])



@section('title')

Кръжок

@endsection





@section('content')  


@include('includes.pagetitle')
<div class="section">
	<div class="container">
		<div class="row">
			<!-- Product Image & Available Colors -->
			<div class="col-sm-6">
				<div class="product-image-large">
					<img src="{{URL('/img/portfolio/big' . $blog->image )}}" alt="Картина {{$blog->name}}">
				</div>
				<div class="colors">
					<span class="color-white"></span>
					<span class="color-black"></span>
					<span class="color-blue"></span>
					<span class="color-orange"></span>
					<span class="color-green"></span>
				</div>
			</div>
			<!-- End Product Image & Available Colors -->
			<!-- Product Summary & Optionsportfolioitem -->
			<div class="col-sm-6 product-details">
				<h2>{{$blog->name}}</h2>
				<h3>Кръжоци</h3>
				<p>
					{{$blog->text}}
				</p>

				<h3>Детайли</h3>
				<p><strong>Тип: </strong> занятия</p>
				<p><strong>Дата: </strong>{{$blog->created_at->toFormattedDateString()}}</p>
				<p><strong>Тагове: </strong>Кръжок, Занятия, Модерни</p>

			</div>
			<!-- End Product Summary & Options -->

		</div>
		
	<div class="row">
		<div class="col-sm-6">
			@include('structures.commentshow')
		</div>


		<div class="container">
	
				
				<div class="col-sm-6">
 @if (Auth::user())
					@include('structures.commentpost',[$id='commentWork'])
@endif					
				</div>	</div>
	
</div></div></div>




				<hr>

				<div class="section">
					<div class="container">
						<div class="row">

							<div class="section-title">
								<h1>Similar Works</h1>
							</div>				

							<ul class="grid cs-style-2">




								@foreach($blogs as  $blog)


								@include('structures.portfoliothumbsmall')


								@endforeach




							</ul>


						</div>
					</div>
				</div>		






				@endsection('content') 