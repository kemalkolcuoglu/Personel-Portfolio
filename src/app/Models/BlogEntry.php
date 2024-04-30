<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogEntry extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'seo_description',
        'content',
        'is_active'
    ];
}
