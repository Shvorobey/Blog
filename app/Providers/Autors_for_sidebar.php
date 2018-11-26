<?php


namespace App;


class Autors_for_sidebar
{
    public function show_autors()
    {

        foreach (Autors::distinct()->get(['name', 'key']) as $autors) {


            echo '<a href=" '. route('posts_by_autor' , $autors->key) . '">' . $autors->name . '</a> <br>';
        }


    }
}