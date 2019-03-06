<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;

class Article extends Model
{
    protected $table = 'articles';
    public function comment()
{
return $this->hasMany('App\Comment','article_id','id');
}
public function categorie()
{
return $this->belongsTo('App\Categorie','categorie_id','id');
}
public function user()
{
return $this->belongsTo('App\User','user_id','id');
}
public function tags()
{
    return $this->belongsToMany('App\Tag','pivots');
}
}
