 @extends('layouts.master', ['title' => '2'])

	
@section('title')

Колектив

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
								<h2>{{$blog->name}}</h2>
							</div>

							<div class="single-post-image">
								<img src="{{URL('img/blog/big'.$blog->image)}}" alt="Снимка {{$blog->name}}">
							</div>
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>{{$blog->created_at->toFormattedDateString()}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>{{count($blog->comment)}}</a>
							</div>							
							<div class="single-post-content">
								<h3>{{$blog->name}}</h3>
								<p>
								{{$blog->text}}
								</p>

							</div>
@include('structures.commentshow')

						</div>
					</div>
					<!-- End Blog Post -->
					
@include('structures.blogpost')

				</div>
			</div>
	    </div>



	
@endsection('content') 