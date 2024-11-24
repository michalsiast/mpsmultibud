@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<section class="about-area-2">
    <div class="container">
        <div class="about-area-inner section-spacing-top">
            <div class="section-content">
                    <div class="thumb wow fadeInLeft" data-wow-delay=".3s">
                        <img src="{{ asset('images/about_us.jpg') }}" alt="gallery image">
                    </div>
                <div class="content-last wow fadeInRight" data-wow-delay=".3s">
                    <div class="section-title-wrapper">
                        @if(!empty($fields->subtitle_about_us))
                            <div class="subtitle-wrapper">
                                <span class="section-subtitle">{{$fields->subtitle_about_us}}</span>
                            </div>
                        @endif

                        @if(!empty($fields->header_about_us))
                            <div class="title-wrapper">
                                <h2 class="section-title">{{$fields->header_about_us}}</h2>
                            </div>
                        @endif
                    </div>
                    @if(!empty($fields->description_about_us))
                        <div class="text-wrapper">
                            {!! str_replace('<p>', '<p class="text">', $fields->description_about_us) !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service-area">
    <div class="container">
        <div class="service-area-inner section-spacing">
            <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                <div class="section-title-wrapper">
                    @if(!empty($fields->subtitle_why_us))
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">{{$fields->subtitle_why_us}}</span>
                        </div>
                    @endif

                    @if(!empty($fields->title_why_us))
                        <div class="title-wrapper">
                            <h2 class="section-title">{{$fields->title_why_us}}</h2>
                        </div>
                    @endif
                </div>
            </div>
            @include('default.article.home')
        </div>
    </div>
</section>

<section class="blog-area">
    <div class="container">
        <div class="blog-area-inner section-spacing">
            <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                <div class="section-title-wrapper">
                    @if(!empty($fields->subtitle_specializations))
                        <div class="subtitle-wrapper">
                            <span class="section-subtitle">{{$fields->subtitle_specializations}}</span>
                        </div>
                    @endif

                    @if(!empty($fields->header_specializations))
                        <div class="title-wrapper">
                            <h2 class="section-title">{{$fields->header_specializations}}</h2>
                        </div>
                    @endif
                </div>
            </div>
            @include('default.offer.home')
        </div>
    </div>
</section>
@endsection
