
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
        <!-- services section -->
        <div class="services-section spad">
            <div class="container">
                <div class="section-title dark">
                        <h2>{{$acceuils->titrelabsworld}}
                                <span>{{$acceuils->titrevertworld}}</span>
                                {{$acceuils->titreservice}}</h2>
                </div>
                <div class="row">
                    <!-- single service -->
                    @foreach ($services as $service)
                        
                    <!-- single service -->
                    <div class="col-md-4 col-sm-6">
                        <div class="service">
                            <div class="icon">
                            <i class="{{$service->logo}}"></i>
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
                    <h2>{{$acceuils->titrelabsworld}}
                    <span>{{$acceuils->titrevertworld}}</span>
                    {{$acceuils->titreword}}</h2>
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
                                <i class="{{$world->logo}}"></i>
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
                        @foreach ($worldrights as $worldright)
                            <div class="icon-box light">
                                <div class="icon">
                                <i class="{{$worldright->logo}}"></i>
                                </div>
                                <div class="service-text">
                                    <h2>{{$worldright->titre}}</h2>
                                <p>{{$worldright->texte}}</p>
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
                    <!-- Single Card -->
                    @foreach ($projects as $project)
                        
                        <div class="col-md-4 col-sm-6">
                            <div class="sv-card">
                                <div class="card-img">
                                <img src="{{$project->image}}" alt="">
                                </div>
                                <div class="card-text">
                                <h2>{{$project->titre}}</h2>
                                    <p>{{$project->texte}}</p>
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