<!-- Club -->
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
								<p style="    display: block; overflow: hidden;height: 110px;">
							{{$club->text}}</p>
							<div class="form-group">
							<a onclick="return confirm('Сигурни ли сте ,че искате да изтриете Клуба?')" class="btn btn-primary" href="{{ URL(route('deleteclub', $club->id)) }}">Изтрй</a>/<a class="btn btn-primary" href="{{ URL(route('editclub', $club->id)) }}">Промени</a></div>
							</div>
						</div>
					</div>
					<!-- End Blog  -->