
@extends('layouts.master', ['title' => '3'])

	


@section('title')

Кръжоци

@endsection

	
@section('content')  
 









@include('includes.pagetitle')
		
		
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-12">
						<h2><strong>Народно читалище</strong> - "<strong>Виртуален свят</strong> - 15.11.2004г."</h2>
						<h3 class="outcolor">КРЪЖОЦИ</h3>
						<p>
							Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. 
						</p>
					
					</div>
				</div>
			</div>
		</div>		
        
        <div class="section">
	    	<div class="container">
				<div class="row">
			
			<ul class="grid cs-style-2">

		<ul class="pager">
		{{ $blogs->links() }}

				</ul>

@foreach($blogs as  $blog)


@include('structures.portfoliothumb')


@endforeach
		
	        	
			</ul>

				
				</div>
				
	
				
			</div>
		</div>










@endsection('content')  