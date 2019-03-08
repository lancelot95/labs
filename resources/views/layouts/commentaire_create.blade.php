<form action="{{route('commentaire.store')}}" method="POST"        enctype="multipart/form-data">
    <div class="row">
    @csrf
            <div class="col-md-9 comment-from">
                <h2>Leave a comment</h2>
                <form class="form-class">
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
</form>
