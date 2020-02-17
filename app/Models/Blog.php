<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $fillable = ['title', 'content'];

    protected $routeName = 'blog.show';
    public function link(){
        return route($this->routeName, $this);
    }
}
