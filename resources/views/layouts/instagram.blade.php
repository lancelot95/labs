<div class="widget-item">
    <h2 class="widget-title">{{$titres[1]->titre}}</h2>
    @foreach ($instagrams as $item)
        <ul class="instagram">
        <li><img src="{{$item->image}}" alt=""></li>
        </ul>
    @endforeach
</div>