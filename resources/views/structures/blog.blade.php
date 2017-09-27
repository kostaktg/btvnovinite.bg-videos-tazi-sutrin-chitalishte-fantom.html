<!-- Blog -->
					<div class="col-sm-6">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h3>{{$blog->name}}</h3>
							</div>

							<div class="single-post-image">
								<img src="img/blog/{{$blog->image}}" alt="Снимка {{$blog->name}}">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>{{$blog->created_at->toFormattedDateString()}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>{{count($blog->comment)}}</a>
							</div>
							
							<div class="single-post-content">
								<p style="    display: block; overflow: hidden;height: 120px;">
							{{$blog->text}}</p><p>....</p>
							<a href="{{URL::route('blogitem' ,$blog->id)}}" class="btn">Прочети още</a>
							</div>
						</div>
					</div>
					<!-- End Blog  -->