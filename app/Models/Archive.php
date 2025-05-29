<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'ethic_group',
        'image',
        'link',
        'created_at',
        'updated_at',

    ];
}
