<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	public function user(){

        return $this->belongsTo('App\Entities\User');
    }

    public function squadron(){

        return $this->belongsTo('App\Entities\Squadron');
    }

    public function userState(){

        return $this->belongsTo('App\Entities\UserState');
    }

}
