<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\signlist as signlist;
class actsign extends Model
{
    //
    protected $table = 'actsign';
    protected $fillable = [
        'act_text','act_url'
    ];
    public function signlist(){
        return $this->belongsTo(signlist::class);
    }
}
