<?php
use App\Post;
use App\Comment;
namespace App;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',  'lastname',  'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments(){
        //return $this->hasMany('\App\Comment', 'comment_user')->withPivot('comment_id')->withTimestamps();
        //return $this->hasMany('\App\Comment', 'comment_user')->withTimestamps();
        return $this->hasMany('\App\Comment');
    }

    public function posts(){
        //return $this->hasMany('\App\Post', 'post_user')->withPivot('post_id')->withTimestamps();
         //return $this->hasMany('\App\Post', 'post_user')->withTimestamps();
         //return $this->hasMany('\App\Post', 'post_user');
         return $this->hasMany('\App\Post');
    }

}
