@extends('layouts.default')

@section('content')
<div class="main">

    <section class="position-relative">
        @include('components.nav', [
            'class'         => 'nav-wrapper--alt',
            'coloredLogo'   => 'yes'
        ])

        {{-- head & Banner --}}
        @include('components.banners.simpleBanner', [
            'title'         => $title,
            'background'    => 'url(/assets/images/theme/banners/simple-banner-bg.jpg) center center no-repeat'
        ])
    </section>

    <section class="help t-pt-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-7">
                    <div class="section-head--alt">
                        <h2 class="section-head__head mt-0">
                            We Are Here To Help Your Business
                        </h2>
                        <p class="section-head__text mb-0">
                            Focus on your business while we manage your accounting and taxation. We provide the full range of services to help you build a solid foundation for your business. These services include Company Registration, GST registration, Obtain PAN and TAN, Income Tax Filling, MAC Annual Report, Book Keeping and more.
                        </p>
                        <div class="py-5">
                            <a href="{{ route('about') }}" class="qry-btn qry-btn--sm qry-btn--fill-primary">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="help__img">
            <div class="help__mission">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="q-card">
                                        <div class="q-card__icon q-card__icon--four"></div>
                                        <h3 class="q-card__title">Contact</h3>
                                        <p class="q-card__text">
                                            +91 9742858586
                                        </p>
                                    </div>
                                    <!--q-card-->
                                </div>
                                <!--column-->
                                <div class="col-md-4">
                                    <div class="q-card">
                                        <div class="q-card__icon q-card__icon--five"></div>
                                        <h3 class="q-card__title">Location</h3>
                                        <p class="q-card__text">
                                            Thoughty2 Consulting <br />
                                            Solutions Private Limited
                                            <br />
                                            <br />
                                            B604, MBR Shanri-La Apts, <br />
                                            Mysore Road, Kengeri, <br />
                                            Bangalore – 560 060
                                        </p>
                                    </div>
                                    <!--q-card-->
                                </div>
                                <!--column-->
                                <div class="col-md-4 mt-sm-4 mt-md-0">
                                    <div class="q-card">
                                        <div class="q-card__icon q-card__icon--six"></div>
                                        <h3 class="q-card__title">Email</h3>
                                        <p class="q-card__text">
                                            contact@taxvax.in
                                        </p>
                                    </div>
                                    <!--q-card-->
                                </div>
                                <!--column-->
                            </div>
                            <!--row-->
                        </div>
                        <!--column-->
                    </div>
                    <!--row-->
                </div>
                <!--container-->
            </div>

            <img src="/assets/images/theme/contact-us.png" alt="image" />
        </div>
    </section>

    @include('components.footer')
</div>
@endsection