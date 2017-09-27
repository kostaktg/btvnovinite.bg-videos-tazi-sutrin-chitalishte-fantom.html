 @extends('layouts.master', ['title' => '3'])

	
@section('title')

Клубове

@endsection


	
@section('content')  






@include('includes.pagetitle')
 <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Blog Post -->
					<div class="col-sm-8">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h2>{{$club->name}}</h2>
							</div>

							<div class="single-post-image">
								<img src="{{URL('img/club/big'.$club->image)}}" alt="Снимка {{$club->name}}">
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>{{$club->created_at->toFormattedDateString()}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>{{count($club->comment)}}</a>
							</div>							
							<div class="single-post-content">
								<h3>{{$club->name}}</h3>
								<p>
								{{$club->text}}
								</p>

							</div>
@include('structures.commentshow')
						</div>
					</div>
					<!-- End Blog Post -->
@include('structures.clubpost')

				</div>
			</div>
	    </div>



	
@endsection('content') 