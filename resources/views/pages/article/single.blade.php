@extends('layouts.defaultLayout')

@section('content')
<div class="main">

        {{-- head & Banner --}}
        @include('components.banner.allPagebanner', [
            'title'         => $page_title,
            'background'    => 'url(/assets/images/theme/banners/article-bg.png)'
        ])
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
    
                                    <div class="blog-details mx-5">
                                        <h1 class="display-4">{{ $page_title }}</h1>
                                        <div class="mb-5">
                                            <h5 class="mb-1">Category: <a href="/category/{{ strtolower(str_replace('_', '-', $articles_content['article_category'])) }}">{{ str_replace('_', ' ', $articles_content['article_category']) }}</a></h5>
                                            <p class="m-0"><span>Publisher: <strong>{{ $articles_content['publisher'] }}</strong> <span class="mx-2">|</span> Last Updated: {{ $articles_content['last_updated'] }}</span></p>
                                        </div>

                                        <figure class="mx-5">
                                        
                                            <img 
                                                src="{{ $articles_content['featured_image'] }}"
                                                alt="Trulli"
                                                style=  "  width: 954px;
                                                height: 434px;"
                                                >
                                           
                                            <figcaption class="w-100 pt-2 pb-4">
                                                <span class="d-md-inline d-none">{{ $page_title }}</span>

                                                <span class="float-md-right">Published On: {{ $articles_content['published_date'] }}</span>
                                            </figcaption>
                                        </figure>
                                        
                                        {!! $articles_content['content'] !!}

                                    </div>

                                    <hr class="mt-5"/>

                                    <!--blog-details-->
                                    <div class="blog-details__footer">
                                        <div class="blog-details__footer-r">
                                            <ul class="social-list t-mb-14">
                                                <li class="social-list__item">
                                                    <h5 class="navs__item-tag">share</h5>
                                                </li>
                                                <li class="social-list__item">
                                                    <a href="#" class="social-list__link"
                                                        ><span class="fa fa-twitter"></span
                                                    ></a>
                                                </li>
                                                <li class="social-list__item">
                                                    <a href="#" class="social-list__link"
                                                        ><span class="fa fa-facebook"></span
                                                    ></a>
                                                </li>
                                                <li class="social-list__item">
                                                    <a href="#" class="social-list__link"
                                                        ><span class="fa fa-dribbble"></span
                                                    ></a>
                                                </li>
                                                <li class="social-list__item">
                                                    <a href="#" class="social-list__link"
                                                        ><span class="fa fa-linkedin"></span
                                                    ></a>
                                                </li>
                                            </ul>
                                        </div>
                                    
                                    </div> 
                </div> 
            </div>              
                <!-- Sidebar -->
            <div class="col-lg-2 mt-5">
                <aside class="qry-blog__aside theiaStickySidebar">
                    @include('components.widgets.archive')
                </aside>
            </div>
        </div>
     
    </div>
</div>
            
@endsection