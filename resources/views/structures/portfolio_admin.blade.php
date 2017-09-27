

<!-- Workshop -->
					<div class="col-sm-6">
						<div class="blog-post blog-single-post">
							<div class="single-post-title">
								<h3>{{$blog->name}}</h3>
							</div>

							<div class="single-post-image">
								<img src="img/portfolio/{{$blog->image}}" alt="{{$blog->name}}">
							</div>
							
							<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>{{$blog->created_at->toFormattedDateString()}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>{{count($blog->comment)}}</a>
							</div>
							
							<div class="single-post-content">
								<p style="    display: block; overflow: hidden;height: 120px;">
							{{$blog->text}}</p>
<div class="form-group">
<a onclick="return confirm('Сигурни ли сте ,че искате да изтриете Кръжока')" class="btn btn-primary" href="{{ URL(route('deleteworkshop', $blog->id)) }}">Изтрй</a>/<a class="btn btn-primary" href="{{ URL(route('editworkshop', $blog->id)) }}">Промени</a>
</div>

<form enctype="multipart/form-data" action="{{URL(route('updateresizeworkshop' , $blog->id))}}" method="POST">


 {{ csrf_field() }}
  
  <div class="form-group">
    <label for="imageid">Качване на снимка и ИЗРЯЗВАНЕ</label>
    <input type="file" id="imageid" name="image">
    <p class="help-block">Качената снимка от тук ще бъде изрязана</p>
  </div>
  <div class="checkbox">

  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary" name="submit">Изрежи</button><div class="rightfloat"></div></div>


</form>

@include('includes.errors')
							</div>
						</div>
					</div>
					<!-- End Workshop  -->


