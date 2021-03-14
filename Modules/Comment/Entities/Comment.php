<?php

namespace Modules\Comment\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'url',
        'target',
        'detail'
    ];
}
