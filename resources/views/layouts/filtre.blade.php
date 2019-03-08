 <!-- Single widget -->
<div class="widget-item">
<form action="{{route('search')}}" method="POST" class="search-form" role="search">
    @csrf
            <input type="text" placeholder="Search" name="inputsearch">
            <button class="search-btn"><i class="flaticon-026-search"></i></button>
        </form>
    </div>
    <!-- Single widget -->