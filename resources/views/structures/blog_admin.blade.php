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
							@if($blog->type==1)
							Временно действащ колектив <br/>
							@else
							Постоянно действащ колектив <br/>
@endif
								<i class="glyphicon glyphicon-time"></i>{{$blog->created_at->toFormattedDateString()}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>{{count($blog->comment)}}</a>
							</div>
							
							<div class="single-post-content">
								<p style="    display: block; overflow: hidden;height: 110px;">
							{{$blog->text}}</p>
							<div class="form-group">
							<a onclick="return confirm('Сигурни ли сте ,че искате да изтриете Колектива')" class="btn btn-primary" href="{{ URL(route('deleteblog', $blog->id)) }}">Изтрй</a>/<a class="btn btn-primary" href="{{ URL(route('editblog', $blog->id)) }}">Промени</a></div>
							</div>
						</div>
					</div>
					<!-- End Blog  -->