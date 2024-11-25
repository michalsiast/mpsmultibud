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
        $(document).ready(function () {
            $('#rotator{{$rotator->id}}').owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: {{$rotator->time ?? 3000}},
                autoplaySpeed: {{$rotator->speed ?? 500}},
                nav: {{$rotator->arrows ? 'true' : 'false'}},
                navText: ['❰', '❱'],
                dots: {{$rotator->pager ? 'true' : 'false'}},
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                smartSpeed: 450
            });
        });
    </script>
@endpush
