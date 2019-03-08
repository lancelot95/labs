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
					<li ><a href="{{asset('service')}}">Service</a></li>
					<li class="active"><a href="{{asset('blog')}}">Blog</a></li>
					<li><a href="{{asset('contact')}}">Contact</a></li>
				</ul>
			</nav>
	</header>

    <!-- page section -->
  



<div  class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                        <div class="post-thumbnail">
                            {{-- <img src="{{asset($article->img)}}" alt=""> --}}
                            <img src="{{Storage::disk('image')->url($article->img)}}"height="270" width="755">
                            <div class="post-date">
                                    <p>{{$article->created_at->format('d - M - Y')}}</p>
                            </div>
                        </div>
                            <div class="post-content">
                                 
                            <h2 class="post-title">{{$article->titre}}</h2>

                                {{-- <div class="post-meta">
                                        @foreach ($article->tag as $tag)
                            
                                        <a href="">{{$tag->hashtags}}</a>&nbsp;
                                        
                                        @endforeach
                                
                                
                                        <a href="">{{$article->categorie->theme}}</a>&nbsp;  
                                </div> --}}
                                <div class="post-meta">
                                        @foreach ($article->tags as $tag)
                                            <a href="">{{$tag->hashtags}}</a>&nbsp;
                                        @endforeach
                                        
                                        -&nbsp;
                                        <a href="">{{$categorie->theme}}</a>&nbsp;-&nbsp;
                                        <a>Comments {{sizeof($commentaires)}}</a>
                                </div>
                                <p>{{$article->texte}}</p>
                            </div>
                    <!-- Post Author -->

                     <div class="author">
                        <div class="avatar">
                            {{-- <img src="img/avatar/03.jpg" alt=""> --}}
                            <img src="{{Storage::disk('image')->url($article->users->image)}}" height="100">
                           
                        </div>
                        <div class="author-info">
                            <h2>{{$article->users->name}} <span>Author</span></h2>
                        <p>{{$article->users->description}}</p>
                        </div>
                       
                    </div> 
                    <!-- Post Comments -->
                    <div class="comments">
                    <h2>Comments {{sizeof($commentaires)}}</h2>
                        <ul class="comment-list">
                            @foreach ($commentaires as $commentaire) 
                                
                                    <li>
                                        {{-- <div class="avatar">
                                                <img src="{{Storage::disk('image')->url($article->item->img)}}" height="270" width="755" alt="">
                                                <img src="{{$item->img}}" alt="">
                                        </div> --}}
                                        <div class="comment-text">
                                        <h3>{{$commentaire->name}}</h3>    
                                        <p>{{$commentaire->message}}</p>
                                        </div>
                                    </li>
                                  

                               
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                                <form action="{{route('blog.store')}}"   class="form-class"    method="POST"        enctype="multipart/form-data">
                                @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                                @if($errors->has('name'))
                                                @foreach ($errors->get('name') as $error)
                                                      <div class="text-danger">
                                                            {{$errors->first('name')}}
                                                      </div>
                                                @endforeach
                                            @endif
                                            <input type="text" name="name" placeholder="Your name">
                                        </div>
                                        <div class="col-sm-6">
                                                @if($errors->has('email'))
                                                @foreach ($errors->get('email') as $error)
                                                      <div class="text-danger">
                                                            {{$errors->first('email')}}
                                                      </div>
                                                @endforeach
                                            @endif
                                            <input type="text" name="email" placeholder="Your email">
                                        </div>
                                        <div class="col-sm-12">
                                            @if($errors->has('subject'))
                                                @foreach ($errors->get('subject') as $error)
                                                      <div class="text-danger">
                                                            {{$errors->first('subject')}}
                                                      </div>
                                                @endforeach
                                            @endif
                                            <input type="text" name="subject" placeholder="Subject">
                                            @if($errors->has('message'))
                                                @foreach ($errors->get('message') as $error)
                                                <div class="text-danger">
                                                        {{$errors->first('message')}}
                                                </div>
                                                @endforeach
                                            @endif
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="site-btn">send</button>
                                        </div>
                                    </div>
                                            
                                </form>
                        </div>
                    </div>
                     <!-- Commert Form -->
                </div>
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

{{-- newsletter --}}
@include('layouts.newsletter')