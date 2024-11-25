<div class="swiper testimonial-slider">
    <div class="swiper-wrapper">
        @foreach($items as $item)
            <div class="swiper-slide">
                <a href="{{$item->title}}" target="_blank">
                    <div class="testimonial-content">
                        <div class="text-wrapper">
                            <img src="{{ renderImage($item->galleryCover(), 200, 80, 'cover') }}" />
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
