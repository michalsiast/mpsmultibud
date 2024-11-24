<section class="hero-area mainRotator">
    <div class="container mainRotator__items">
        @if($rotator->arrows)
            <button class="prev"> ❰</button>
        @endif
        @foreach($rotator->gallery->items as $item)
            <div class="hero-area-inner mainRotator__item">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="subtitle-wrapper">
                      <span class="section-subtitle wow fadeInUp" data-wow-delay=".3s">MPS MULTIBUD</span>
                        </div>
                        <div class="title-wrapper">
                            <h1 class="section-title large wow fadeInUp" data-wow-delay=".5s">{{$item->name}}</h1>
                        </div>
                    </div>
                    <div class="text-wrapper">
                        {!! str_replace('<p>', '<p class="text wow fadeInUp" data-wow-delay=".7s">', $item->text) !!}
                    </div>
                    <div class="btn-wrapper wow fadeInUp" data-wow-delay=".9s">
                        <a href="about.html" class="t-btn t-btn-primary btn-text-flip"> <span data-text="Learn More">Learn
                        More</span><i class="fa-solid fa-arrow-right"></i></a>
                        <a href="contact.html" class="t-btn t-btn-primary btn-text-flip bg-active"> <span
                                data-text="Contact Now">Contact Now</span><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="hero-thumb wow fadeInUp" data-wow-delay=".1s">
                    <img style="width: 650px; height: 845px;object-fit: cover" src="{{renderImage($item->url, 650, 845, `fit`)}}" alt="image">
                </div>
            </div>
        @endforeach
        @if($rotator->arrows)
            <button class="next"> ❱</button>
        @endif
    </div>
</section>

@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
