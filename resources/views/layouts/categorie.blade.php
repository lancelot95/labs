<div class="widget-item">
        <h2 class="widget-title">{{$titres[1]->titre}}</h2>
        <ul>
            @foreach ($categories as $item)
                
        <li><a href="{{route('tag.show',['id'=>$item->id])}}">{{$item->theme}}</a></li>
            @endforeach
            
        </ul>
</div>







