<?php

namespace App\Models;

/*
 * 回复模型
 * */
class Reply extends Model
{
    protected $fillable = ['content'];

    //与帖子关系
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    //与用户关系
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
