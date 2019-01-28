<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\signlist as signlist;
class memberinfo extends Model
{
    //
    protected $table = 'memberinfo';
    protected $fillable = ['mem_id', 'mem_name', 'mem_class', 
    'mem_acc', 'mem_password', 'mem_email', 'mem_phone'];
    public function signlist(){
        return $this->belongTo(signlist::class);
    }

}
