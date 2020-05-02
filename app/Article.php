<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','detail','active'];
    protected $table = 'articles';
    protected $primaryKey = 'article_id';
}
