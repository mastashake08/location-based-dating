<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    public $guarded = [];
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function account(){
      return $this->belongsTo('App\User');
    }
}
