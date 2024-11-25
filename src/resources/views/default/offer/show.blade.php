@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $item->title])
    <section class="service-details-area">
        <div class="container">
            <div class="service-details-area-inner section-spacing wow fadeInUp" data-wow-delay=".3s">
                <div class="details-content-wrapper">
                    <div class="thumb">
                        <img style="width: 100%; height: 512px; object-fit: cover" src="{{ renderImage($item->galleryCover(), 850, 512, 'cover') }}" alt="image">
                    </div>
                    <h2 class="heading mt-5">{{$item->title}}</h2>
                    <div class="text-wrapper">
                        {!! str_replace('<p>', '<p class="text">', $item->text) !!}
                    </div>
                    <div class="gallery mt-5 mb-5">
                        <div class="container">
                            <div class="row">
                                @foreach($item->gallery->items as $item)
                                    @if($item->type !== 'cover')
                                        <div class="col-lg-6 mt-2">
                                            <a href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                                                <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @include('default.offer.home3')
            </div>
        </div>
    </section>
    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
