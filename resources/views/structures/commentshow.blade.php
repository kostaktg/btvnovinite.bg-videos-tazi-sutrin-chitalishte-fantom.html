	    		<h4>КОМЕНТАРИ</h4>
							
							<ol>
	@foreach($blog->comment as $comment)

	<div class="single-post-info">
								<i class="glyphicon glyphicon-time"></i>Коментара е написан: {{$comment->created_at->diffForHumans()}} <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"> User / Име:</i> {{$comment->user->name}} </a>
							</div>	
<div class="commentPost">
			<li>{{$comment->text}}</li>
</div><hr/>
	@endforeach
	</ol>