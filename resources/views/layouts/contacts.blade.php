
      
<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    @foreach ($contacts as $item)
                        
                    <h2>{{$item->contactus}}</h2>
                    
                </div>
                <p>{{$item->texte}}</p>
                <h3 class="mt60">{{$item->mainoffice}}</h3>
                <p class="con-item">{{$item->addresse}} </p>
                <p class="con-item">{{$item->phone}}</p>
                <p class="con-item">{{$item->email}}</p>
                @endforeach
            </div>
            <!-- contact form -->
            
            <div class="col-md-6 col-pull">
                <form action="{{route('form')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                    <div class="row form-class" id="con_form">
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
    </div>
</div>