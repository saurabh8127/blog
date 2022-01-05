<?php

namespace App\Http\Controllers\Functions;

use League\CommonMark\MarkdownConverter;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\Table\TableExtension;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;



class ArticleReader
{    
    public static function scanDirForArticles($dir_path){
        /** Get files and folders */
        $categories_folders = scandir($dir_path);

        // Loop on category folder
        foreach($categories_folders as $category){
            if(!in_array($category, array(".",".."))){
                if(is_dir($dir_path.'/'.$category)){

                    /** Get files and folders */
                    $dates_folders = scandir($dir_path.'/'.$category);

                    // Loop on dates folder
                    foreach($dates_folders as $date){
                        if(!in_array($date, array(".",".."))){
                            if(is_dir($dir_path.'/'.$category.'/'.$date)){

                                /** Get files and folders */
                                $articles_files = scandir($dir_path.'/'.$category.'/'.$date);
            
                                // Loop on article files
                                foreach($articles_files as $article){
                                    if(!in_array($date, array(".",".."))){
                                        if(is_file($dir_path.'/'.$category.'/'.$date.'/'.$article)){
                                            // Store Article
                                            $articles[] = [
                                                'article_file'      => $article,
                                                'article_path'      => $dir_path.'/'.$category.'/'.$date.'/'.$article,
                                                'category'          => $category,
                                                'date_published'    => $date
                                            ];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
            

        // Return Article
        return $articles;
    }

    public static function articleDateCompare($element1, $element2) {
        $datetime1 = strtotime($element1['published_date']);
        $datetime2 = strtotime($element2['published_date']);
        return ($datetime1 - $datetime2) * -1;
    } 
    
    public static function getArticleContentFromMD($article){
        $file = fopen($article['article_path'], 'r');
        $line = fgets($file);
        fclose($file);
    
        // Create Array of First Line Data
        $first_line_array = explode(' | ', str_replace('# ', '', $line));
        
        // Article Data
        $article_title      = trim($first_line_array[0]);
        $article_category   = $article['category'];
        $published_date     = $article['date_published'];
        $publisher          = trim($first_line_array[1]);
        $last_updated       = trim($first_line_array[2]);

        $slug = str_replace('.md', '', $article['article_file']);

        $featured_image = '/assets/images/articles/'.$slug.'.jpg';
        $thumbnail = $featured_image;
        if(!file_exists(public_path().$featured_image)){
            $featured_image = '/assets/images/articles/'.$slug.'.jpeg';
            $thumbnail = $featured_image;
        }
        if(!file_exists(public_path().$featured_image)){
            $featured_image = '/assets/images/articles/'.$slug.'.png';
            $thumbnail = $featured_image;
        }
        if(!file_exists(public_path().$featured_image)){
            $featured_image = '/assets/images/articles/no-image.jpg';
            $thumbnail = '/assets/images/articles/no-image-thumbnail.png';
        }

        $md_content = file_get_contents($article['article_path']);
        $md_content = str_replace($line, '', $md_content);

        // Creating Markdown
        $environment = new Environment([]);
        // Adding extensions for markdown
        $environment->addExtension(new CommonMarkCoreExtension());
        $environment->addExtension(new TableExtension());
        // Convert Markdown to HTML
        $converter = new MarkdownConverter($environment);
        $content = $converter->convertToHtml($md_content);

        return [
            'page_title'        => $article_title,
            'slug'              => $slug,
            'article_category'  => $article_category,
            'published_date'    => $published_date,
            'last_updated'      => $last_updated,
            'publisher'         => $publisher,
            'featured_image'    => $featured_image,
            'thumbnail'         => $thumbnail,
            'content'           => $content
        ];
    }

    public static function getArticlesAndCategoryList(){
        $articles   = scanArticles();
        dd($articles);

        $article_list = [];

        // Loop though articles
        foreach($articles as $article){
            $article_path = $path.$article;
            
            $file = fopen($article_path, 'r');
            $line = fgets($file);
            fclose($file);
            $first_line_text = str_replace('# ', '', $line);
            $first_line_array = explode(' | ', $first_line_text);
            $article_title = trim($first_line_array[0]);
            $article_category = trim($first_line_array[1]);
            $published_date = trim($first_line_array[2]);

            $slug = str_replace('.md', '', $article);

            $article_list[$article_category][] = [
                'article_title'     => $article_title,
                'article_category'  => $article_category,
                'published_date'    => $published_date
            ];
        }

        return $article_list;
    }
}