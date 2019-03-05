<!-- Page Preloder -->
<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>
	<header class="header-section">
			<div class="logo">
				@foreach ($acceuils as $item)
					
				<img src="{{$item->logonavbar}}" alt=""><!-- Logo -->               
				@endforeach
			</div>
			<!-- Navigation -->
			<div class="responsive"><i class="fa fa-bars"></i></div>
			<nav>
				<ul class="menu-list">
					<li><a href="{{asset('acceuil')}}">Home</a></li>
					<li><a href="{{asset('service')}}">Service</a></li>
					<li><a href="{{asset('blog')}}">Blog</a></li>
					<li class="active"><a href="{{asset('contact')}}">Contact</a></li>
				</ul>
			</nav>
		</header>
	<!-- Page header -->
	<div class="page-top-section">
			<div class="overlay"></div>
			<div class="container text-right">
				<div class="page-info">
					<h2>Contact</h2>
					<div class="page-links">
						<a href="#">Home</a>
						<span>Contact</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Page header end -->
		<!-- Google map -->
		<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=place%20de%20la%20minoterie%2010+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create route map</a></iframe></div><br />
	


	 <!-- Contact section -->
	 @include('layouts.contacts')
	