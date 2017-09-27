<!-- Sidebar -->
					<div class="col-sm-4 blog-sidebar">
						<h4>Читалище Виртуален свят</h4>
						<h5 class="outlink">НОВИНИ</h5>
						<ul>
							<li><a class="newhref" OnClick="openinnewTab( 'https://www.24chasa.bg/' );"
							 >24 ЧАСА</a></li>
							<li><a  class="newhref" OnClick="openinnewTab( 'http://www.legalworld.bg/' );"
							 >Правен Свят</a></li>
							<li><a class="newhref"  OnClick="openinnewTab( 'http://www.blitz.bg/' );" 
							 >БЛИЦ</a></li>
							<li><a  class="newhref" OnClick="openinnewTab( 'http://www.dnes.bg/' );"
							 >Днес.бг</a></li>
							<li><a   class="newhref" OnClick="openinnewTab( 'http://paper.standartnews.com/bg/' );"
							>СТАНДАРТ</a></li>

							<li><a   class="newhref" OnClick="openinnewTab( 'http://www.monitor.bg/' );"
							>Монитор</a></li>

							<li><a   class="newhref" OnClick="openinnewTab( 'http://www.focus-news.net/' );"
							>Фокус</a></li>

							<li><a   class="newhref" OnClick="openinnewTab( 'https://bivol.bg/' );"
							>БИВОЛЪ</a></li>
						</ul>
						<h4>Последно качени дейности</h4>
						<ul class="recent-posts">
@foreach($lastclubs as $club)
					<li><a href="{{URL::route('clubitem',$club->id)}}">	{{$club->name}}</a></li>
@endforeach						
						
						</ul>
 @if (Auth::user())
			@include('structures.commentpost',[$id='commentClub'])	
@endif									

					</div>
					<!-- End Sidebar -->