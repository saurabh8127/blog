<div class="widget widget-archives">
    <h5 class="widget-title">Articles Archive</h5>
    <table class="table table-striped table-success">
                @php foreach($categories_n_articles as $category => $articles): @endphp
                <tr>
                <td>
                    @include('components/widgets/archive/singleArchiveLink', [
                        'link_text' => $category,
                        'count'     => count($articles),
                    ]) 
                  </td>
                </tr>
                @php endforeach; @endphp
    </table>  
    
</div>