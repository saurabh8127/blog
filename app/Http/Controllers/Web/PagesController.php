<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Functions\ArticleReader;

class PagesController extends Controller
{
    public function home() {
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
            'page_title'    => 'TaxVax | Home Page',
            'title'         => 'Home blog',
            'description'   => 'We at Taxvax believe in transparency in all financial transactions and we will help every individual to have better transparency in all their financial matters especially matters concerning taxation.',
            'url'           => route('home'),
            'articles'      => $articles_content
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);

        // Return view
        return view('home', $page_data);
    }

    public function error404Page(){
        return view('404', [
            'page_title'    => '404 Page Not Found | TaxVax'
        ]);
    }

    public function about() {
        $page_data = [
            'page_title'    => 'About TaxVax',
            'title'         => 'About Us',
            'description'   => 'We at Taxvax believe in transparency in all financial transactions and we will help every individual to have better transparency in all their financial matters especially matters concerning taxation.',
            'url'           => route('about')
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);
    
        // Return view
        return view('pages.about', $page_data);
    }

    public function contact() {
        $page_data = [
            'page_title'    => 'Contact TaxVax',
            'title'         => 'Contact Us',
            'description'   => 'We at Taxvax believe in transparency in all financial transactions and we will help every individual to have better transparency in all their financial matters especially matters concerning taxation.',
            'url'           => route('contact')
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);
    
        // Return view
        return view('pages.contact', $page_data);
    }

    public function privacyPolicy() {
        $page_data = [
            'page_title'    => 'Privacy Policy - TaxVax | Thoughty2 Consulting Solutions Private Limited',
            'title'         => 'Privacy Policy',
            'description'   => '',
            'url'           => route('privacyPolicy')
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);
    
        // Return view
        return view('pages.privacyPolicy', $page_data);
    }
    
    public function termsAndCondition() {
        $page_data = [
            'page_title'    => 'Terms And Conditions - TaxVax | Thoughty2 Consulting Solutions Private Limited',
            'title'         => 'Terms And Conditions',
            'description'   => '',
            'url'           => route('termsAndCondition')
        ];

        // // SEO Meta Data
        // SeoMetaController::seoMetaTags($page_data);
    
        // Return view
        return view('pages.termsAndConditions', $page_data);
    }
}
