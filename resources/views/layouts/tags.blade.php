<div class="widget-item">
        <h2 class="widget-title">{{$titres[2]->titre}}</h2>
        <ul class="tag">
            @foreach ($tags as $item)
                
            <li><a href="{{route('tag.show',['id'=>$item->id])}}">{{$item->hashtags}}</a></li>
            
            @endforeach
            
        </ul>
    </div>