@extends('layouts.defaultLayout')


@section('content')
<div class="main">

    <section class="position-relative">
           {{-- head & Banner --}}
            @include('components.banner.allPagebanner',[
                'title'         => $category,
                'background'    => 'url(/assets/images/theme/banners/article-bg.png)',
                'categories'    => ['Individual', 'Business']
            ])
    </section>

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                    <div class="row">
                        @php foreach($articles_content as $article): @endphp
                        <div class="col-md-6">
                            <div class="card" style="margin-top: 20px;
                                width: 476px;">
                                        <img class="ar-placeholder" src="/assets/images/theme/image-placeholder/ar-16-9.png">
                    <div class="card-body">
                                                <img src="{{ $article['thumbnail'] }}" alt="Image"
                                                style="left: 4.1971px;
                                                top: 6px;
                                                width: 464.606px;
                                                height: 253px;
                                                position: absolute;">
                                           
                                        <div class="qry-blog-post__body--alt">
                                            <h2 class="qry-blog-post__title qry-blog-post__link--xl" >
                                                <a href="{{ '/article/'.$article['slug']; }}">{{ substr($article['page_title'], 0, 34).'...'; }}</a>
                                            </h2>
                                            <table class="w-100 mt-2 mb-3">
                                                <tr>
                                                    <td>{{ $article['publisher']; }}</td>
                                                    <td class="text-right">{{ $article['published_date']; }}</td>
                                                </tr>
                                            </table>
                                            <p class="text-justify">{!! substr(strip_tags($article['content']), 0, 120).'...'; !!}</p>
                                            <a href="{{ '/article/'.$article['slug']; }}" class="qry-blog-post__tranq">Read more</a>
                                        </div>
                    </div>
                            </div>
                        </div>
                        @php endforeach; @endphp
                    </div>
                
                        <!--blog-area-->
                        {{-- <ul class="navs navs__pagination">
                            <li class="navs__item navs__item--pagination">
                                <a href="#" class="navs__link navs__link-pagination">
                                    1
                                </a>
                            </li>
                            <li class="navs__item navs__item--pagination">
                                <a href="#" class="navs__link navs__link-pagination">
                                    <span class="ti-angle-right"></span>
                                </a>
                            </li> 
                        </ul> --}}
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