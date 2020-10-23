<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Post extends Model
{
    protected $fillable = ["title","content"];

    const UPDATED_AT = null;
    const CREATED_AT = null;
    use HasFactory;

    public function likes()
    {
        return $this->hasMany(Like::class, 'post_id');
    }
//postにLikeあるか判定
    public function is_liked_by_auth_user()
    {
        $id = Auth::id();

        $likers = array();
        foreach($this->likes as $like) {
            array_push($likers, $like->user_id);
        }

        if (in_array($id, $likers)) {
            return true;
        } else {
            return false;
        }
    }
}
