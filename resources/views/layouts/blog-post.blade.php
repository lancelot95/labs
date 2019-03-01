<div  class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                        <div class="post-thumbnail">
                                <img src="{{$article->img}}" alt="">
                                <div class="post-date">
                                    <h2>03</h2>
                                    <h3>Nov 2017</h3>
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
                                        <a href="">2 Comments</a>
                                </div>
                                <p>{{$article->texte}}</p>
                            </div>
                    <!-- Post Author -->
                    {{-- <div class="author">
                        <div class="avatar">
                            <img src="img/avatar/03.jpg" alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{$item->nom}} <span>Author</span></h2>
                        <p>{{$item->description}}</p>
                        </div>
                       
                    </div> --}}
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments (2)</h2>
                        <ul class="comment-list">
                            <li>
                                <div class="avatar">
                                    <img src="img/avatar/01.jpg" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                            <li>
                                <div class="avatar">
                                    <img src="img/avatar/02.jpg" alt="">
                                </div>
                                <div class="commetn-text">
                                    <h3>Michael Smith | 03 nov, 2017 | Reply</h3>
                                    <p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            <form class="form-class">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input type="text" name="subject" placeholder="Subject">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button class="site-btn">send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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