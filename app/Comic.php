<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
     //Indichiamo in quali colonne del file 'comics' c'è la corrispondenza

    protected $fillable = ['title', 'description', "thumb", "price", "series", "sale_date", "type", "artists"];
}
