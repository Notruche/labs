<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class Tag extends Model
{
    protected $table = 'tags';
    public function articles()
    {
        return $this->belongsToMany('App\Article','pivots');
    }
}
