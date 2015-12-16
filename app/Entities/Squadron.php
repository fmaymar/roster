<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Squadron extends Model {

    protected $fillable = ['squadron', 'country', 'logo','web','description','internal_description','obs'];
    public function profile(){

        return $this->hasMany('App\Entities\Profile');

    }

}
