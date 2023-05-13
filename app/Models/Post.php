<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'postid';
    protected $keyType = 'string';
    protected $title = 'title';
    protected $content = 'content';
    public function comment()
    {
        return $this->hasMany('App\Models\Comment', 'postid');
    }
}
