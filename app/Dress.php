<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    //se vogliamo collegare una table particolare
    //protected $table='nomedellatabelladeldb"


    protected $fillable =['type','name', 'size','price','token'];
    // perchè mi ha fatto aggiungere token?
}
