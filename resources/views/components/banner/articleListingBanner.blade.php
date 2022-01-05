<div class="page-banner--alt page-banner--blog" style="background-image: {{ $background }}">
    <div class="page-banner__content page-banner__content--blog">
        <h1 class="page-banner__title page-banner__title--blog">{{ $title }} Articles</h1>

        <span class="page-banner__breadcrumb page-banner__breadcrumb--blog">
            <a href="{{ route('home') }}" class="text-primary">Home</a> / <a href="{{ route('allArticles') }}" class="text-primary">All Articles</a> / <span class="text-dark">{{ $title }} Category</span>
        </span>

    </div>
</div>