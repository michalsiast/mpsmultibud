@extends('default.layout')
@section('content')
    @include('default.subheader', ['pageName' => $page->name])
    <section class="contact-area">
        <div class="container">
            <div class="contact-area-inner section-spacing-top">
                <div class="contact-box wow fadeInUp" data-wow-delay=".3s">
                    <div class="form-area">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title">Skontaktuj się z nami</h2>
                            </div>
                        </div>
                        <div class="contact-wrap">
                            @include('default.form.contact_form')
                        </div>
                    </div>
                </div>
                <div class="contact-meta-box">
                    <div class="contact-meta">
                        <div class="contact-item wow fadeInUp" data-wow-delay=".3s">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Numer telefonu</h3>
                                <p class="text"><a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a></p>
                            </div>
                        </div>
                        <div class="contact-item wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">E-mail</h3>
                                <p class="text"><a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a></p>
                            </div>
                        </div>
                        <div class="contact-item wow fadeInUp" data-wow-delay=".7s">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <h3 class="title">Adres</h3>
                                <p class="text"><a target="_blank" href="{{getConstField('google_map')}}">{{getConstField('company_address')}},<br> {{getConstField('company_post_code')}}, {{getConstField('company_city')}}</a></p>
                                <p>NIP: {{getConstField('company_nip')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
