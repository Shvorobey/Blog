<?php


namespace App;


class Categories_for_sidebar
{
    public function show_categories()
    {

        foreach (Categories::distinct()->get(['categories', 'key']) as $category) {


            echo '<a href=" '. route('posts_by_category' , $category->key) . '">' . $category->categories . '</a> <br>';
        }


    }
}
