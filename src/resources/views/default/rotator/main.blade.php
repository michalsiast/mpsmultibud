<section class="hero-area testimonial-area-inner">
    <div class="container testimonial-area-inner">
        <div class="testimonial-wrapper-box">
            <div class="testimonial-wrapper">
                <div class="swiper hero-slider">
                    <div class="swiper-wrapper">
                        @foreach($rotator->gallery->items as $item)
                            <div class="hero-area-inner swiper-slide">
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
                                        <a href="{{route('gallery.show')}}" class="t-btn t-btn-primary btn-text-flip">
                                            <span data-text="Galeria">Galeria</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                        <a href="{{route('contact.show')}}" class="t-btn t-btn-primary btn-text-flip bg-active">
                                            <span data-text="Kontakt">Kontakt</span>
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="hero-thumb wow fadeInUp" data-wow-delay=".1s">
                                    <img style="width: 650px; height: 845px; object-fit: cover" src="{{ renderImage($item->url, 650, 845, `fit`) }}" alt="image">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @if($rotator->arrows)
                    <div class="nav-wrapper">
                        <div class="testimonial-button-prev">
                            <i class="fa-solid fa-arrow-left"></i>
                        </div>
                        <div class="testimonial-button-next">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@push('scripts.body.bottom')
    <script>
        if (('.hero-slider').length) {
            var testimonial_slider = new Swiper(".hero-slider", {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 100,
                speed: {{$rotator->speed ?? 500}},
                watchSlidesProgress: true,
                navigation: {
                    prevEl: ".testimonial-button-prev",
                    nextEl: ".testimonial-button-next",
                },
                autoplay: {
                    delay: {{$rotator->time ?? 3000}},
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.testimonial-pagination',
                    type: 'bullets',
                    clickable: true
                },
                breakpoints: {
                    576: {
                        slidesPerView:1,
                    },
                    768: {
                        slidesPerView: 1,
                    },
                    992: {
                        slidesPerView: 1,
                    },
                    1201: {
                        slidesPerView: 1,
                    },
                    1367: {
                        slidesPerView: 1,
                    },
                }
            });
        }
    </script>
@endpush
