<?php

namespace App;
//use Illuminate\Database\Eloquent\Model;


class Autors_for_sidebar
    //extends Model
{

    public function show_autors()
    {

        foreach (Autors::distinct()->get(['name', 'key']) as $autors) {


            echo '<a href=" '. route('posts_by_autor' , $autors->key) . '">' . $autors->name . '</a> <br>';
        }


    }

}