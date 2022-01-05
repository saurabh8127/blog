<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Functions\ArticleReader;

class articleController extends Controller
{
    public function allArticles() {
        // Get 12 Articles at once
        $articles = array_slice(ArticleReader::scanDirForArticles(resource_path()."/articles"), 0, 12);

        // Get content array of 12 articles
        foreach($articles as $article) {
            $article_data = ArticleReader::getArticleContentFromMD($article);
            $articles_content[] = $article_data;
            $categories_n_articles[$article['category']][] = $article_data;
        }

        // Sort the array 
        usort($articles_content, array('App\Http\Controllers\Functions\ArticleReader', 'articleDateCompare'));

        $page_data = [
            'page_title'    => 'All Articles | TaxVax',
            'title'         => 'Article',
            'description'   => 'We at Taxvax believe in transparency in all financial transactions and we will help every individual to have better transparency in all their financial matters especially matters concerning taxation.',
            'url'           => route('allArticles'),
            'articles_content'      => $articles_content,
            'categories_n_articles' => $categories_n_articles
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);

        // Return view
        return view('pages.article.all', $page_data);
    }

    public function dynamicArticleView($slug){
        // Get 12 Articles at once
        $articles = ArticleReader::scanDirForArticles(resource_path()."/articles");

        foreach($articles as $article){
            $article_data = ArticleReader::getArticleContentFromMD($article);
            if("$slug.md" == $article["article_file"]){
                $articles_content = $article_data;
            }
            $categories_n_articles[$article['category']][] = $article_data;
        }

        $page_data = [
            'page_title'    => $articles_content['page_title'],
            'title'         => 'Article',
            'description'   => 'We at Taxvax believe in transparency in all financial transactions and we will help every individual to have better transparency in all their financial matters especially matters concerning taxation.',
            'url'           => route('dynamicArticleView', $slug),
            'articles_content'      => $articles_content,
            'categories_n_articles' => $categories_n_articles
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);

        // Return view
        return view('pages.article.single', $page_data);
    }

    public function dynamicCategoryView($slug){
        // Get 12 Articles at once
        $articles = ArticleReader::scanDirForArticles(resource_path()."/articles");

        foreach($articles as $article){
            $article_data = ArticleReader::getArticleContentFromMD($article);
            if($slug == strtolower(str_replace('_', '-', $article_data["article_category"]))){
                $articles_content[] = $article_data;
            }
            $categories_n_articles[$article['category']][] = $article_data;
        }

        // Sort the array 
        usort($articles_content, array('App\Http\Controllers\Functions\ArticleReader', 'articleDateCompare'));

        $page_data = [
            'page_title'    => "Article Category ".$article_data["article_category"]." | TaxVax",
            'title'         => 'Article Category',
            'description'   => 'We at Taxvax believe in transparency in all financial transactions and we will help every individual to have better transparency in all their financial matters especially matters concerning taxation.',
            'url'           => route('dynamicCategoryView', $slug),
            'category'              => str_replace('_', ' ', $articles_content[0]["article_category"]),
            'articles_content'      => $articles_content,
            'categories_n_articles' => $categories_n_articles
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);

        // Return view
        return view('pages.article.category', $page_data);
    }
}