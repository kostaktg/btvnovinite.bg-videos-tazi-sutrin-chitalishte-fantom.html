
@extends('layouts.master', ['title' => '4'])




@section('title')

За нас

@endsection




 @section('content')

@include('includes.pagetitle')
        
        <div class="section">
	    	<div class="container">
				<div class="row">
				<div class="col-sm-4">
				<img class="img-responsive" src="img/about-us.jpg" alt="Снимка Български народен празник КУКЕРИ">
				</div>
				<div class="col-sm-8">
						<h2>Народно читалище “Виртуален свят”</h2>
						<h3>Закона за народните читалища</h3>
						<p>
							Народно читалище “Виртуален свят” гр. <strong>Благоевград</strong> е юридическо лице с нестопанска дейност,отделно от членовете си, учредено съгласно разпоредбите на Закона за народните читалища, Закона за юридическите лица с нестопанска цел,Устава и Решението на учредителното събрание.
						</p>
						<p>
							През 2005 година “Виртуален свят” гр. <strong>Благоевград</strong> участва в разработването на няколко международни проекта, вкючени в програмата на Европейския съюз Култура 2000, която насърчава интеркултурния диалог и взаимен обмен между европейски и други култури чрез окуражаване на сътрудничество по предмети от общ интерес и познаването на историята на европейските народи.
						</p>						
						<h3>Целта на читалище “Виртуален свят” гр. <strong>Благоевград</strong></h3>
						<p>
							Целта на читалище “Виртуален свят” гр. <strong>Благоевград</strong> е чрез използване на новите компютърни и аудио- визуални технологии, навлезли широко в бита на населението на гр.Благоевград да развива и утвърждава духовните ценности и да насочва българските културни традиции към европейска интеграция. Чрез разработване, координиране, управление на проекти и програми включени в Европейски грантови схеми, читалището допринася за културното израстване на населението в региона и създаване на нови традиции, приобщаващи ни към голямото европейско семейство.
						</p>
						
						
						
					
					</div>
				</div>
			</div>
		</div>

<hr>		

        <div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Team Member -->
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<!-- Team Member Photo -->
							<div class="team-member-image"><img src="img/team/1.jpg" alt="Паметник Македоно-одринско-опълчение "></div>
							<div class="team-member-info">
								<ul>
									<!-- Team Member Info & Social Links -->
									<li class="team-member-name">
									Македоно-одринско-опълчение
										<!-- Team Member Social Links -->
	
									</li>
									<li>Благоевград</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Team Member -->
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="team-member-image"><img src="img/team/2.jpg" alt="Монумент Илио воевода "></div>
							<div class="team-member-info">
								<ul>
									<li class="team-member-name">
										Илио-воевода-монумент

									</li>
									<li>Кюстендил</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-member">
							<div class="team-member-image"><img src="img/team/3.jpg" alt="Паметник Гоце Делчев"></div>
							<div class="team-member-info">
								<ul>
									<li class="team-member-name">
										Гоце Делчев
<!-- 										<span class="team-member-social">
											<a href="#"><i class="icon-facebook"></i></a>
											<a href="#"><i class="icon-dribbble"></i></a>
											<a href="#"><i class="icon-tumblr"></i></a>
										</span> -->
									</li>
									<li>Благоевград</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<hr>

        <div class="section">
	        <div class="container">
	        	<div class="row">
	        		<!-- Featured News -->
<div class="col-sm-6 featured-news">
<h2>Последно качени Проекти</h2>
	        		@foreach($blogs as $blog)

	        			        			
	        			<div class="row">
	        				<div class="col-xs-4"><a href="{{ URL(route('blogitem',$blog->id)) }}"><img src="img/blog/{{ $blog->image }}" alt="Снимка {{$blog->name}}"></a></div>
	        				<div class="col-xs-8">
	        					<div class="caption"><a href="blog-post.html">{{$blog->name}}</a></div>
	        					<div class="date">{{$blog->created_at->toFormattedDateString()}}</div>
	        					<div class="intro" style="    overflow: hidden;
    height: 80px;">{{$blog->text}} </div>
	        				</div>
	        			</div>

	        		@endforeach
</div>

	        		
	        		<!-- End Featured News -->
	        		<!-- Latest News -->
	        		<div class="col-sm-6 latest-news">
	        			<h2>Най-нови Кръжоци</h2>
	        		        		@foreach($workshops as $workshop)

	        			        			
	        			<div class="row">
	        				<div class="col-xs-4"><a href="{{ URL(route('portfolioitem',$workshop->id)) }}"><img src="img/portfolio/{{ $workshop->image }}" alt="Картина {{$workshop->name}}"></a></div>
	        				<div class="col-xs-8">
	        					<div class="caption"><a href="blog-post.html">{{$workshop->name}}</a></div>
	        					<div class="date">{{$workshop->created_at->toFormattedDateString()}}</div>
	        					<div class="intro" style="    overflow: hidden;
    height: 80px;">{{$workshop->text}}</a></div>
	        				</div>
	        			</div>

	        		@endforeach
	        		<!-- End Featured News -->
	        	</div>
	        </div>
	    </div>


	    @endsection('content')