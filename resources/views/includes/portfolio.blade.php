<hr>

		<!-- Our Portfolio -->	

        <div class="section section-white">
	        <div class="container">
	        	<div class="row">
				<div class="section-title">
				<h1>Читалище - кръжоци-<strong>Благоевград</strong></h1>
				</div>
		
		
			<ul class="grid cs-style-3">




@foreach($blogs as  $blog)


@include('structures.portfoliothumb')


@endforeach




			</ul>


	        	</div>
					<ul class="pager">
		{{ $blogs->links() }}

				</ul>
	        </div>
	    </div>
		<!-- Our Portfolio -->
			
<hr>