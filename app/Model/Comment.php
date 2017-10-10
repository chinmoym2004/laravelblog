<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;
use App\Model\Post;

class Comment extends Model
{
    //
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    protected $dates = ['deleted_at'];

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $fillable = [
        'post_id',
        'ip',
        'user_id',
        'post_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
