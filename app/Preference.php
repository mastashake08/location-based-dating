<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    //
    public $guarded = [];
    public function user(){
      return $this->belongsTo('App\User');
    }
}
