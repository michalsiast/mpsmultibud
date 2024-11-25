<div class="sidebar-wrapper">
    <div class="sidebar-box service">
        <div class="service-list">
            <ul>
                @foreach($items as $item)
                    <li><a href="{{route('offer.show.'.$item->id)}}" class="active">{{$item->title}}<i
                                class="fa-solid fa-angles-right"></i></a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
