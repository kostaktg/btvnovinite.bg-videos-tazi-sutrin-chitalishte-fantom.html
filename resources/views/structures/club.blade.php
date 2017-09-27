<!-- club -->
					<div class="col-sm-6">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h3>{{$club->name}}</h3>
							</div>

							<div class="single-post-image">
								<img src="img/club/{{$club->image}}" alt="Снимка {{$club->name}}">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>{{$club->created_at->toFormattedDateString()}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>{{count($club->comment)}}</a>
							</div>
							
							<div class="single-post-content">
								<p style="    display: block; overflow: hidden;height: 120px;">
							{{$club->text}}</p><p>....</p>
							<a href="{{URL::route('clubitem' ,$club->id)}}" class="btn">Прочети още</a>
							</div>
						</div>
					</div>
					<!-- End club  -->