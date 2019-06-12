<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    public function isAdmin(){
        return Auth::user()->role->name == 'Admin';
    }
}
