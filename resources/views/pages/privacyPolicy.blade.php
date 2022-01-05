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

    <section class="terms t-pt-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="terms__head">
                        <h2 class="terms__title section-head__head mt-0">{{ $page_title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center t-mmt">
                <div class="col-xl-8">
                    <div class="terms__body">

                        <div class="terms__item t-mmt">
                            <p class="terms__item-text mb-0">At taxvax.in, accessible from taxvan.in, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by taxvax.in and how we use it.</p>
                            <p class="terms__item-text mb-0">If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
                            <p class="terms__item-text mb-0">This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in taxvax.in. This policy is not applicable to any information collected offline or via channels other than this website.</p>
                        </div>
                        
                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Consent</h3>
                            <p class="terms__item-text mb-0">By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>
                        </div>
                        
                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Information we collect</h3>
                            <p class="terms__item-text mb-0">The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                            <p class="terms__item-text mb-0">If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                            <p class="terms__item-text mb-0">When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>
                        </div>
                        
                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">How we use your information</h3>
                            <p class="terms__item-text mb-0">We use the information we collect in various ways, including to:
                                <ol>
                                    <li>Provide, operate, and maintain our website.</li>
                                    <li>Improve, personalize, and expand our website.</li>
                                    <li>Understand and analyze how you use our website.</li>
                                    <li>Develop new products, services, features, and functionality.</li>
                                    <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes.</li>
                                    <li>Send you emails.</li>
                                    <li>Find and prevent fraud.</li>
                                </ol>
                            </p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Log Files</h3>
                            <p class="terms__item-text mb-0">taxvax.in follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Cookies and Web Beacons</h3>
                            <p class="terms__item-text mb-0">Like any other website, taxvax.in uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Advertising Partners Privacy Policies</h3>
                            <p class="terms__item-text mb-0">You may consult this list to find the Privacy Policy for each of the advertising partners of taxvax.in.</p>
                            <p class="terms__item-text mb-0">Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on taxvax.in, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
                            <p class="terms__item-text mb-0">Note that taxvax.in has no access to or control over these cookies that are used by third-party advertisers.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Third Party Privacy Policies</h3>
                            <p class="terms__item-text mb-0">taxvax.in's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>
                            <p class="terms__item-text mb-0">You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
                        </div>

                        <div class="terms__item mb-0">
                            <h3 class="service-card__text-head mt-0">Children's Information</h3>
                            <p class="terms__item-text mb-0">Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>
                            <p class="terms__item-text mb-0">taxvax.in does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</div>
@endsection