
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader">
                <img src="img/logo.png" alt="">
                <h2>Loading.....</h2>
            </div>
        </div>
    
        <!-- Intro Section -->
        <div class="hero-section">
            <div class="hero-content">
                <div class="hero-center">
                <img src="{{$acceuils->biglogo}}"  alt="">   

                        <p>{{$acceuils->titrecarousel}}</p>
                </div>
            </div>
            <!-- slider -->
            <div id="hero-slider" class="owl-carousel">
                @foreach ($carou as $item)
                <div class="item  hero-item" data-bg="{{$item->image_url}}"></div>
                @endforeach
            </div>
        </div>
        <!-- Intro Section -->
    
    
        <!-- About section -->
        <div class="about-section">
            <div class="overlay"></div>
            <!-- card section -->
            <div class="card-section">
                <div class="container">
                    <div class="row">
                        <!-- single card -->

                        @foreach ($services_r as $service)
                            
                            <div class="col-md-4 col-sm-6">
                                <div class="lab-card">
                                    <div class="icon">
                                    <i class="{{$service->logo}}"></i>
                                    </div>
                                <h2>{{$service->titre}}</h2>
                                <p>{{$service->texte}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- card section end-->
    
    
            <!-- About contant -->
            <div class="about-contant">
                <div class="container">
                    <div class="section-title">

                    <h2>{{$acceuils->titrelabsworld}}

                    <span>{{$acceuils->titrevertworld}}</span>

                    {{$acceuils->titreword}}</h2>

                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <p>{{$acceuils->textelabsworld}}</p>
                        </div>
                        <div class="col-md-6">
                        <p>{{$acceuils->textelabsworld}}</p>
                        </div>
                    </div>
                    <div class="text-center mt60">
                    <a href="{{asset('blog')}}" class="site-btn">Browse</a>
                    </div>
                    <!-- popup video -->
                    <div class="intro-video">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <img src="img/video.jpg" alt="">
                                <a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About section end -->
    
    
        <!-- Testimonial section -->
        <div class="testimonial-section pb100">
            <div class="test-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <div class="section-title left">
                            <h2>{{$acceuils->titrelabsworld}}
                            <span>{{$acceuils->titrevertworld}}</span>
                            {{$acceuils->titreclient}}</h2>
                        </div>
                        <div class="owl-carousel" id="testimonial-slide">
                            <!-- single testimonial -->
                            @foreach ($testimonials as $testimonial) 
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                            <p>{{$testimonial->texte}}</p>
                                <div class="client-info">
                                    <div class="avatar">
                                    <img src="{{$testimonial->photo}}" alt="">
                                    </div>
                                    <div class="client-name">
                                    <h2>{{$testimonial->nom}}</h2>
                                    <p>{{$testimonial->fonction}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- <!-- single testimonial -->
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src="img/avatar/02.jpg" alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>Michael Smith</h2>
                                        <p>CEO Company</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial -->
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src="img/avatar/01.jpg" alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>Michael Smith</h2>
                                        <p>CEO Company</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial -->
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src="img/avatar/02.jpg" alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>Michael Smith</h2>
                                        <p>CEO Company</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial -->
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src="img/avatar/01.jpg" alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>Michael Smith</h2>
                                        <p>CEO Company</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial -->
                            <div class="testimonial">
                                <span>‘​‌‘​‌</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.</p>
                                <div class="client-info">
                                    <div class="avatar">
                                        <img src="img/avatar/02.jpg" alt="">
                                    </div>
                                    <div class="client-name">
                                        <h2>Michael Smith</h2>
                                        <p>CEO Company</p>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial section end-->

        {{-- Services section --}}
        @include('layouts.services')
        
        <!-- Team Section -->
        <div class="team-section spad">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h2>{{$acceuils->titrelabsworld}}
                    <span>{{$acceuils->titrevertworld}}</span>
                    {{$acceuils->titreteam}}</h2>
                   
                </div>
                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-sm-4">
                            <div class="member">
                                <img src="{{$team->image}}" alt="">
                                <h2>{{$team->name}}</h2>
                                <h3>{{$team->post}}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team Section end-->
    
    
        <!-- Promotion section -->
        <div class="promotion-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                    <h2>{{$acceuils->titrestandout}}</h2>
                        <p>{{$acceuils->textestandout}}</p>
                        <a class="btn btn bg-blue text-danger" href="">Editer titre & description</a>
                    </div>
                    <div class="col-md-3">
                        <div class="promo-btn-area">
                            <a href="" class="site-btn btn-2">Browse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Promotion section end-->
        @include('layouts.contacts')
    
       
       
    