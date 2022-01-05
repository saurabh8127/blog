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

    <section class="qry-about ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-8">
                    <div class="qry-service__head-alt m-0">
                        <p class="qry-service__head-para mb-0">The team at Taxvax is of expert individuals in various field of matters relating to taxation and finance who have come together for helping each individual of the country get the best services at the lowest of cost. Every matter in handled by the expert with equal care and attention be a salary drawing individual or a large taxpayer. We provide the right solution.</p>
                    </div>
                    <!--service-head-->
                </div>
                <!--column-->
            </div>
        </div>
        <!--container-->
    </section>
    <!--service-->

    <section class="project-counter">
        <div class="container mb-5">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="q-card">
                                <div class="q-card__icon q-card__icon--one"></div>
                                <h3 class="q-card__title">Our Vision</h3>
                                <p class="q-card__text">We at Taxvax believe in the dream of 5 trillion dollars economy and to help others in contributing to this dream. We thrive to make AtmaNirbhar Bharat. We will do our part and help everyone to do theirs.</p>
                            </div>
                            <!--q-card-->
                        </div>
                        <!--column-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="q-card">
                                <div class="q-card__icon q-card__icon--one"></div>
                                <h3 class="q-card__title">Our Mission</h3>
                                <p class="q-card__text">We at Taxvax believe in transparency in all financial transactions and we will help every individual to have better transparency in all their financial matters especially matters concerning taxation.</p>
                            </div>
                            <!--q-card-->
                        </div>
                        <!--column-->
                        <div class="col-md-6 col-lg-4 mt-md-4 mt-lg-0 mb-5">
                            <div class="q-card">
                                <div class="q-card__icon q-card__icon--one"></div>
                                <h3 class="q-card__title">Our Proccess</h3>
                                <p class="q-card__text">We at Taxvax follow proper procedures and seamless communication with our clients to maintain the quality of our services. Our experts have years of experience in providing tax and financial services.</p>
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
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="project-counter__head">
                        <h2 class="project-counter__head-title">
                            We completed +120 Project Yearly
                        </h2>
                        <p class="project-counter__head-text">We at TaxVax registered several companies and provided taxation and financial services to thousands of clients.</p>
                    </div>
                    <!--counter-head-->
                </div>
                <!--column-->
            </div>
            <!--row-->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="project-counter__boxes">
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-sm-6 mb-sm-4 mb-md-0">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <span class="project-counter__is">500</span>
                                        <span class="project-counter__text">Companies Registered</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-sm-4 mb-md-0">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <span class="project-counter__is">1000</span>
                                        <span class="project-counter__text">PAN and TAN Issued</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 mb-sm-4 mb-md-0">
                                <div class="project-counter__box">
                                    <div class="project-counter__box-content">
                                        <span class="project-counter__is">500</span>
                                        <span class="project-counter__text">GST Registration</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </section>
    <!--project-counter-->

    <section class="cta cta--service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-7 col-sm-10">
                    <div class="cta__content">
                        <h2 class="cta__title">Looking For Services?</h2>
                        <p class="cta__para">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy eirmod tempor invidunt ut labore et dolore magna.
                        </p>
                        <a href="{{ route('contact') }}" class="qry-btn qry-btn--sm qry-btn--fill-primary">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</div>
@endsection