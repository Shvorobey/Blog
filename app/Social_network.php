<?php

namespace App;
use Illuminate\Database\Eloquent\Model;


class Social_network extends Model
{
    public function show_social_network ()
    {

        foreach (Social_network::distinct()->get(['url', 'name']) as $network)
        {


            echo '<a href="'.$network->url.'">'.$network->name.'</a> <br>';
        }

    }
}
