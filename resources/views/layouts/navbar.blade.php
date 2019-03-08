	<!-- Header section -->
	<header class="header-section">
            <div class="logo">
                @foreach ($acceuils as $acceuil)
                    
                <img src="{{$acceuil->logonavbar}}" alt=""><!-- Logo -->               
                @endforeach
            </div>
            <!-- Navigation -->
            <div class="responsive"><i class="fa fa-bars"></i></div>
            <nav>
                <ul class="menu-list">
                    <li class="active"><a href="{{asset('acceuil')}}">Home</a></li>
                    <li><a href="{{asset('service')}}">Service</a></li>
                    <li><a href="{{asset('blog')}}">Blog</a></li>
                    <li><a href="{{asset('contact')}}">Contact</a></li>
                </ul>
            </nav>
        </header>
        <!-- Header section end -->