<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'base_category',
        'is_active'
    ];

    public function relatedEntries(): HasMany
    {
        return $this->hasMany(BlogEntry::class);
    }
}
