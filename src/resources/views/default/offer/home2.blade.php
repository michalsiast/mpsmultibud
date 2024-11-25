@foreach($items as $item)
    <li><a href="{{route('offer.show.'.$item->id)}}"><i class="fa-solid fa-angle-right"></i> {{$item->title}}</a></li>
@endforeach


