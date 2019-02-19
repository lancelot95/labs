
      
<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                <h2>{{$acceuils->contactus}}</h2>
                    
                </div>
            <p>{{$acceuils->texte}}</p>
            <h3 class="mt60">{{$acceuils->mainoffice}}</h3>
                <p class="con-item">{{$acceuils->addresse}} </p>
            <p class="con-item">{{$acceuils->phone}}</p>
            <p class="con-item">{{$acceuils->email}}</p>
            </div>
            <!-- contact form -->
            
            <div class="col-md-6 col-pull">
                <form action="{{route('form')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                    <div class="row form-class" id="con_form">
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