<div class="navs__item navs__item--categories my-0 ">
    <a href="/category/{{ strtolower(str_replace('_', '-', $link_text)) }}" class="navs__link navs__link--categories t-bb">
        <span class="navs__link-text">
            {{ str_replace('_', ' ', $link_text) }}
        </span>
        <span class="navs__link-text">
            {{ $count }}
        </span>
    </a>
</div>