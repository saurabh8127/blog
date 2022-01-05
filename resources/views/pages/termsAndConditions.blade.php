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
            <div class="row justify-content-center t-mmt">
                <div class="col-xl-8">
                    <div class="terms__body">

                        <div class="terms__item t-mmt">
                            <p class="terms__item-text mb-0">Welcome to taxvax.in! These terms and conditions outline the rules and regulations for the use of Thoughty2 Consulting Solutions Private Limited's Website, located at taxvax.in.</p>
                            <p class="terms__item-text mb-0">By accessing this website we assume you accept these terms and conditions. Do not continue to use taxvax.in if you do not agree to take all of the terms and conditions stated on this page.</p>
                            <p class="terms__item-text mb-0">The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of India. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
                        </div>
                        
                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Cookies</h3>
                            <p class="terms__item-text mb-0">We employ the use of cookies. By accessing taxvax.in, you agreed to use cookies in agreement with the Thoughty2 Consulting Solutions Private Limited's Privacy Policy.</p>
                            <p class="terms__item-text mb-0">Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>
                        </div>
                        
                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">License</h3>
                            <p class="terms__item-text mb-0">Unless otherwise stated, Thoughty2 Consulting Solutions Private Limited and/or its licensors own the intellectual property rights for all material on taxvax.in. All intellectual property rights are reserved. You may access this from taxvax.in for your own personal use subjected to restrictions set in these terms and conditions.</p>
                            <p class="terms__item-text mb-0">You must not:
                                <ol>
                                    <li>Republish material from taxvax.in</li>
                                    <li>Sell, rent or sub-license material from taxvax.in</li>
                                    <li>Reproduce, duplicate or copy material from taxvax.in</li>
                                    <li>Redistribute content from taxvax.in</li>
                                </ol>
                            </p>
                            <p class="terms__item-text mb-0">This Agreement shall begin on the date hereof.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Hyperlinking to our Content</h3>
                            <p class="terms__item-text mb-0">The following organizations may link to our Website without prior written approval:
                                <ol>
                                    <li>Government agencies;</li>
                                    <li>Search engines;</li>
                                    <li>News organizations;</li>
                                    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                                </ol>
                            </p>
                            <p class="terms__item-text mb-0">These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>
                            <p class="terms__item-text mb-0">We may consider and approve other link requests from the following types of organizations:
                                <ol>
                                    <li>commonly-known consumer and/or business information sources;</li>
                                    <li>dot.com community sites;</li>
                                    <li>associations or other groups representing charities;</li>
                                    <li>online directory distributors;</li>
                                    <li>internet portals;</li>
                                    <li>accounting, law and consulting firms; and</li>
                                    <li>educational institutions and trade associations.</li>
                                </ol>
                            </p>
                            <p class="terms__item-text mb-0">We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavourably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Thoughty2 Consulting Solutions Private Limited; and (d) the link is in the context of general resource information.</p>
                            <p class="terms__item-text mb-0">These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>
                            <p class="terms__item-text mb-0">If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Thoughty2 Consulting Solutions Private Limited. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>
                            <p class="terms__item-text mb-0">Approved organizations may hyperlink to our Website as follows:
                                <ol>
                                    <li>By use of our corporate name; or</li>
                                    <li>By use of the uniform resource locator being linked to; or</li>
                                    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                                </ol>
                            </p>
                            <p class="terms__item-text mb-0">No use of Thoughty2 Consulting Solutions Private Limited's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">iFrames</h3>
                            <p class="terms__item-text mb-0">Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Content Liability</h3>
                            <p class="terms__item-text mb-0">We shall not be held responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Your Privacy</h3>
                            <p class="terms__item-text mb-0">Please read <a href="{{ route('privacyPolicy') }}">Privacy Policy</a></p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Reservation of Rights</h3>
                            <p class="terms__item-text mb-0">We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>
                            <p class="terms__item-text mb-0">You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
                        </div>

                        <div class="terms__item">
                            <h3 class="service-card__text-head mt-0">Removal of links from our website</h3>
                            <p class="terms__item-text mb-0">If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
                            <p class="terms__item-text mb-0">We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>
                        </div>

                        <div class="terms__item mb-0">
                            <h3 class="service-card__text-head mt-0">Disclaimer</h3>
                            <p class="terms__item-text mb-0">To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:
                                <ol>
                                    <li>limit or exclude our or your liability for death or personal injury;</li>
                                    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                                    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                                    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                                </ol>
                            </p>
                            <p class="terms__item-text mb-0">The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>
                            <p class="terms__item-text mb-0">As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</div>
@endsection