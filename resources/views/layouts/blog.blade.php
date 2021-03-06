<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>
	<header class="header-section">
			<div class="logo">
				@foreach ($acceuils as $acceuil)
					
				<!-- Logo -->    
				<img src="{{Storage::disk('image')->url($acceuil->logonavbar)}}">           
				@endforeach
			</div>
			<!-- Navigation -->
			<div class="responsive"><i class="fa fa-bars"></i></div>
			<nav>
				<ul class="menu-list">
					<li><a href="{{asset('acceuil')}}">Home</a></li>
					<li ><a href="{{asset('service')}}">Service</a></li>
					<li class="active"><a href="{{asset('blog')}}">Blog</a></li>
					<li><a href="{{asset('contact')}}">Contact</a></li>
				</ul>
			</nav>
		</header>
		<div class="page-top-section">
				<div class="overlay"></div>
				<div class="container text-right">
					<div class="page-info">
						<h2>Blog</h2>
						<div class="page-links">
							<a href="#">Home</a>
							<span>Blog</span>
						</div>
					</div>
				</div>
			</div>
	<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				
				<div class="col-md-8 col-sm-7 blog-posts">
					@foreach ($articles as $item)
					<!-- Post item -->
					<div class="post-item">
						<div class="post-thumbnail">
								<img src="{{Storage::disk('image')->url($item->img)}}" height="270" width="755">
								{{-- <img src="{{asset($item->img)}}" alt=""> --}}
							<div class="post-date">
								<p>{{$item->created_at->format('d - M - Y')}}</p>
							</div>
						</div>
						<div class="post-content">
							
							<h2 class="post-title">{{$item->titre}}</h2>
							<div class="post-meta">
									@foreach ($item->tags as $tag)
                            
									<a href="">{{$tag->hashtags}}</a>&nbsp;
									
									@endforeach
							
							
								<a href="">{{$item->categories->theme}}</a>&nbsp;
								
							</div>
								{{-- <div class="post-meta">
									
									<a href="">2 Comments</a>
								</div> --}}
                            <p>{{str_limit($item->texte, 300)}}</p>
							
						
							<a class="read-more" href="{{route('blog.show',['id'=>$item->id])}}">Read more</a> 
						</div>
					</div>
					
					<!-- Pagination -->
				
					@endforeach
					
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					{{-- intégration filtre --}}
					@include('layouts.filtre')
					{{-- fin intégration filtre --}}

					{{-- intégration categorie --}}
					@include('layouts.categorie')
					{{-- fin intégration categorie --}}

					{{-- intégration instagram --}}
					@include('layouts.instagram')
					{{-- fin intégration instagram --}}

					{{-- intégration tags --}}
					@include('layouts.tags')
					{{-- fin intégration tags --}}

					{{-- intégration quote --}}
					@include('layouts.quote')
					{{-- fin intégration quote --}}
					
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->


	<!-- newsletter section -->
	@include('layouts.newsletter')
