<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Social_network extends Model
{
    public function show_social_network ()
    {
        try {
            foreach (Social_network::distinct()->get(['url', 'name']) as $network) {


                echo '<a href="' . $network->url . '">' . $network->name . '</a> <br>';
            }
        }catch (Exception $e) {
            Debugbar::addException($e);
        }


    }
}
