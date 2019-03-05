 <!-- newsletter section -->
 <div class="newsletter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @foreach ($acceuils as $item)
                    
                     <h2>{{$item->newsletter}}</h2>
                @endforeach
               
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                <form class="nl-form" action="{{route('forme')}}" method="POST" >
                    @csrf
                    <input type="text" placeholder="Your e-mail here" name="email">
                    <button class="site-btn btn-2">Newsletter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->
