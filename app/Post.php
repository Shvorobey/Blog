<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function autors ()
   {
       return $this->belongsTo(Autors::class);
   }

   public function categories ()
   {
       return $this->belongsToMany(Categories::class);
   }
}
