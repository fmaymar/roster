<?php namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class UserState extends Model {

	public function profile(){
        return $this->hasMany('App\Entities\Profile');
    }

}
