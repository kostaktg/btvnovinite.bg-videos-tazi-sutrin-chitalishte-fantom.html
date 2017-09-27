						<h5 class="outlink">Сайтове за УЧЕНЕ</h5>
						<ul>
							<li><a class="newhref" OnClick="openinnewTab( 'http://ucha.se//' );"
							 >Уча се
</a></li>
							<li><a  class="newhref" OnClick="openinnewTab( 'http://www.kadedaucha.com/' );"
							 >Къде да уча</a></li>
							<li><a class="newhref"  OnClick="openinnewTab( 'http://referati.com/' );" 
							 >Реферати</a></li>
							<li><a  class="newhref" OnClick="openinnewTab( 'http://wishbox.org/' );"
							 >WishBOX</a></li>
							<li><a   class="newhref" OnClick="openinnewTab( 'http://www.nakov.com/' );"
							>Светлин Наков</a></li>

							<li><a   class="newhref" OnClick="openinnewTab( 'http://uchenik.bg/' );"
							>Ученик</a></li>

							<li><a   class="newhref" OnClick="openinnewTab( 'http://www.pomagalo.com/' );"
							>Pomagalo</a></li>

							<li><a   class="newhref" OnClick="openinnewTab( 'http://www.bg-pravo.com/' );"
							>Лекции по Право</a></li>
						</ul>

<h4>Напиши коментар</h4>
						<form method="POST" action="{{URL($id.'/'.$blog->id)}}">
						{{ csrf_field() }}
						<textarea class="commentText" name="text">{{old('text')}}</textarea>
						<hr>
						<div class="form-group">
						<input type="submit" name="post" placeholder="коментирай" value="коментирай"></form></div>
@include('includes.errors')
