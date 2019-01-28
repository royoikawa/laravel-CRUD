<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\actsign as actsign;
use App\memberinfo as memberinfo;
class signlist extends Model
{
    //
    protected $table = 'signlist';
    protected $fillable = ['act_id', 'mem_id'];
    public function actsign(){
        return $this->hasMany(actsign::class);
    }
    public function memberinfo(){
        return $this->hasMany(memberinfo::class);
    }

}
