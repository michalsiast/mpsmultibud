<div class="blogs-wrapper-box">
    <div class="blogs-wrapper">
        @foreach($items as $item)
            <a href="{{route('offer.show.'.$item->id)}}">
                <article class="blog wow fadeInUp" data-wow-delay=".3s">
                    <div class="thumb">
                        <img src="assets/imgs/blog/blog-1.webp" alt="blog image">
                    </div>
                    <div class="content-wrapper">
                        <div class="content">
                            <h2 class="title">{{$item->title}}</h2>
                            {!! str_replace('<p>', '<p class="text">', $item->text) !!}
                            <a href="{{route('offer.show.'.$item->id)}}" class="t-btn t-btn-primary btn-text-flip"> <span data-text="Zobacz więcej">Zobacz więcej</span><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            </a>
        @endforeach
    </div>
</div>


