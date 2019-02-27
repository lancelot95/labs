<div class="widget-item">
        <h2 class="widget-title">{{$titres[2]->titre}}</h2>
        <ul class="tag">
            @foreach ($tags as $item)
                
            <li><a href="">{{$item->hashtags}}</a></li>
            @endforeach
            
        </ul>
    </div>