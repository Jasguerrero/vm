<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'idPost';

    protected $fillable = array('body', 'user_id');

    protected $hidden = ['created_at', 'updated_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
