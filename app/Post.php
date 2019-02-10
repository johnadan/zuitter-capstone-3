<?php
use App\Comment;
use App\User;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    //public function comments(){
    	//$this.hasMany->
    //}

    public function comments(){
    	return $this->hasMany('\App\Comment');
    }

    public function user(){
    	//return $this->belongsTo('\App\User');
        //return $this->belongsTo('\App\User', 'post_user')->withPivot('user_id')->withTimestamps();
        //return $this->belongsTo('\App\User', 'post_user')->withTimestamps();
        return $this->belongsToMany('\App\User', 'post_user')->withTimestamps();
    }
}
