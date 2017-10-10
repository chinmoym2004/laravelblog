<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Post extends Model
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
		'title',
		'body',
        'user_id',
        'slug',
		'publish',
		'show',
        'facebook_share_id',
        'twitter_share_id',
        'tags',
        'seo',
        'preview_content',
        'post_image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
