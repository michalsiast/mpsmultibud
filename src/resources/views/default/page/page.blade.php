@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
   @if(!empty($fields->text1))
       <section class="about-area-2">
           <div class="container">
               <div class="about-area-inner section-spacing-top">
                   {!! $fields->text1 !!}
               </div>
           </div>
       </section>
   @endif

    <div class="gallery mt-5 mb-5">
        <div class="container">
            <div class="row">
                @foreach($page->gallery->items as $item)
                    <div class="col-lg-4 mt-2">
                        <a href="{{renderImage($item->url, 1920, 1080, 'resize')}}">
                            <img style="width: 100%" src="{{renderImage($item->url, 600, 600, 'fit')}}" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts.body.bottom')
        <script>
            var lightbox = $('.gallery a').simpleLightbox({});
        </script>
    @endpush
@endsection
