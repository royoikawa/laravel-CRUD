<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stunews extends Model
{
    //
    protected $table = 'stunews';
    protected $fillable = ['news_id', 'news_text', 'news_url'];
}
