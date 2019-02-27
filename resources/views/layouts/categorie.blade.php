<div class="widget-item">
        <h2 class="widget-title">{{$titres[0]->titre}}</h2>
        <ul>
            @foreach ($categories as $item)
                
            <li><a href="#">{{$item->theme}}</a></li>
            @endforeach
            
        </ul>
</div>







