<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner mt-5">
        
        @php foreach($articles as $article): @endphp
            <div class="carousel-item ">
                <div class="col-md-12">
                    <div class="card" style=" 
                     width: 573px;">
                        <img class="card-img-top" src="/assets/images/theme/image-placeholder/ar-16-9.png" >
                        <div class="card-body">
                            <img src="{{ $article['thumbnail'] }}" alt="Image" 
                            {{-- style="width: 404px;
                            height: 222px;
                            margin-top: -302px;" --}}
                            style="left: 4.1971px;
                            top: 6px;
                            width: 564.606px;
                            height: 353px;
                            position: absolute;">
                            <div class="">
                                <h2 class="card-text"   style="  line-height: 2.8;">
                                    <a href="{{ '/article/'.$article['slug']; }}">{{ substr($article['page_title'], 0, 30).'...'; }}</a>
                                </h2>
                                <table class="w-100 mt-2 mb-3">
                                    <tr>
                                        <td>{{ $article['publisher']; }}</td>
                                        <td class="text-right">{{ $article['published_date']; }}</td>
                                    </tr>
                                </table>
                                <p class=" card-text text-justify">{!! substr(strip_tags($article['content']), 0, 120).'...'; !!}</p>
                                <a href="{{ '/article/'.$article['slug']; }}" class="qry-blog-post__tranq">Read more</a>
                            </div>
                        </div>
                    </div>
                  </div>        
            </div>
         @php endforeach; @endphp
        
        <div class="carousel-item active ">
        <img class="d-block w-100" src="/assets/images/articles/Green-Wing-Macaw-Care-Guide.jpg" alt="Second slide">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>