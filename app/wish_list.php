<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wish_list extends Model
{
    public function product()
    {
        $this->belongsTo('App\product');
    }
    public function consumer()
    {
        $this->belongsTo('App\Consumer');
    }
}
