<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $fillable = ['title', 'content', 'user_id', 'postdate'];

    protected $routeName = 'blog.show';

    public function link()
    {
        return route($this->routeName, $this);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
