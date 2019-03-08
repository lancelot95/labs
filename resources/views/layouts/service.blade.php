
      <!-- Page header -->
      
	<div class="page-top-section">
            <div class="overlay"></div>
            <div class="container text-right">
                <div class="page-info">
                    <h2>Services</h2>
                    <div class="page-links">
                        <a href="#">Home</a>
                        <span>Services</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page header end-->
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
                        <li class="active"><a href="{{asset('service')}}">Service</a></li>
                        <li><a href="{{asset('blog')}}">Blog</a></li>
                        <li><a href="{{asset('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </header>
        <!-- services section -->
        <div class="services-section spad">
            <div class="container">
                <div class="section-title dark">
                    @foreach ($acceuils as $item)
                        
                            <h2>{{$item->titrelabsworld}}
                            <span>{{$item->titrevertworld}}</span>
                            {{$item->titreservice}}</h2>
                    @endforeach
                </div>
                <div class="row">
                    <!-- single service -->
                    @foreach ($services as $service)
                        
                    <!-- single service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="icon">
                            <i class="{{$service->icons->code}}"></i>
                            </div>
                            <div class="service-text">
                            <h2>{{$service->titre}}</h2>
                            <p>{{$service->texte}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
                {{ $services->links() }}
                <div class="text-center">
                <a href="#ici" class="site-btn">Browse</a>
                </div>
            </div>
        </div>
        <!-- services section end -->
    
    
        <!-- features section -->
        <div class="team-section spad">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    @foreach ($acceuils as $item)
                        
                            <h2>{{$item->titrelabsworld}}
                            <span>{{$item->titrevertworld}}</span>
                            {{$item->titreword}}</h2>
                    @endforeach
                </div>
                <div class="row">
                    <!-- feature item -->
                    <div class="col-md-4 col-sm-4 features">
                        @foreach ($worlds as $world) 
                            <div class="icon-box light left">
                                <div class="service-text">
                                <h2>{{$world->titre}}</h2>
                                <p>{{$world->texte}}</p>
                                </div>
                                <div class="icon">
                                <i class="{{$world->icons->code}}"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>  
                    <!-- Devices -->
                    <div class="col-md-4 col-sm-4 devices">
                        <div class="text-center">
                            <img src="img/device.png" alt="">
                        </div>
                    </div>
                    <!-- feature item -->
                    <div class="col-md-4 col-sm-4 features">
                        @foreach ($test as $world)
                            <div class="icon-box light">
                                <div class="icon">
                                <i class="{{$world->icons->code}}"></i>
                                </div>
                                <div class="service-text">
                                    <h2>{{$world->titre}}</h2>
                                <p>{{$world->texte}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div> 
                  
                </div>
                <div class="text-center mt100">
                <a href="#image" class="site-btn">Browse</a>
                </div>
            </div>
        </div>
        <!-- features section end-->
    
    
        <!-- services card section-->
        <div id="image" class="services-card-section spad">
            <div class="container">
                <div class="row">
                    <!-- les trois derniers projets -->
                    @foreach ($worlds as $word)
                        
                        <div class="col-md-4 col-sm-6">
                            <div class="sv-card">
                                <div class="card-img">
                                <img src="{{Storage::disk('image')->url($word->image)}}"alt="">
                                </div>
                                <div class="card-text">
                                <h2>{{$word->titre}}</h2>
                                    <p>{{$word->texte}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        <!-- services card section end-->

         <!-- newsletter -->
         @include('layouts.newsletter')
          <!-- contacts -->
          @include('layouts.contacts')