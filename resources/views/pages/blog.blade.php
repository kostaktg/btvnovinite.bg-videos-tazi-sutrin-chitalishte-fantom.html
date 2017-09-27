
@extends('layouts.master', ['title' => '2'])

	
@section('title')

Дейности

@endsection



	
@section('content')  





 <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a class="whitehref" href="{{ route('blog', 'type=0') }}"> Постоянно действащи Колективи</a> // <a class="whitehref" href="{{ route('blog', 'type=1') }}">Временно действащи Колективи</a>
					</div>
				</div>
			</div>
		</div>

        
        <div class="section">
	    	<div class="container">
				<div class="row">



				@foreach($blogs as $blog)

				@include('structures.blog')

				@endforeach
					

								<!-- Pagination -->
								<div class="pagination-wrapper ">
									<div class="myboth">
									@if(isset($_GET['type']))
									{{ $blogs->appends(['type' => $_GET['type']])->links() }}
									@else
									{{ $blogs->links() }}
									@endif
								
								</div>		</div>	

				</div>
			</div>
	    </div>












@endsection('content')  