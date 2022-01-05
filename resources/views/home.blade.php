@extends('layouts.defaultLayout')
@section('content')
<!-- Page Header-->
 @include('components.banner.allPagebanner', [
            'title'         => 'article blog',
            'background'    => 'url(/assets/images/home-bg.jpg)',
        ])
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4">
                <div class="section-head mb-5">
                    <div class="site-heading">
                        <h1>There Is No Limit</h1>
                        <span class="subheading">A Blog Theme For Animal And Pet Lovers</span>
                    </div>                    
                </div>
                <!--section-title-->
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row no-gutters">
                    <b>   A collection of bird and Pet related stories, updates, and alerts to keep you in the loop with Madison Audubon, the birding community, and how you can get involved. 
                        
                        Whether you’re feeling cooped up from being “Safer at Home” and want to take a virtual walk down a stream, need a project and want to do some advocacy work, or are looking for inspiration to get more into birding, we have a story for you! 
                        
                        Stay tuned and stop back frequently for updates.
                    </b>
                </div>
                <!--row-->
            </div>
            <!--column-->
        </div>
        <!--row-->
    </div>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        @include('components.carousal.article')
                    </div>
                    <!--column-->
                </div>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
           
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="{{route('allArticles')}}">All Posts →</a></div>
        </div>
    </div>
</div>
@endsection