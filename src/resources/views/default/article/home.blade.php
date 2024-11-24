<div class="services-wrapper-box">
    <div class="services-wrapper">
        @foreach($items as $item)
            <div class="service-box wow fadeInUp" data-wow-delay=".3s">
                <div class="icon">
                    <img style="width: 45px" src="{{ renderImage($item->galleryCover(), 45, 45, 'cover') }}" alt="service icon">
                </div>
                <div class="content">
                    <h3 class="title">{{$item->title}}</h3>
                    {!! str_replace('<p>', '<p class="text">', $item->text) !!}
                </div>
            </div>
        @endforeach
    </div>
</div>
