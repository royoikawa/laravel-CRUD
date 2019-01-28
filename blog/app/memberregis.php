<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memberregis extends Model
{
    //
    protected $table = 'memberregis';
    protected $fillable = ['regis_id', 'regis_name', 'regis_class', 
    'regis_acc', 'regis_password', 'regis_email', 'regis_phone'];
}
