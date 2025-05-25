<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapter extends Model
{
    protected $table = 'chapters';
    protected $primaryKey = 'id';
    protected $fillable = [
        'story_id',
        'title',
        'order',
    ];
    
    public function story(): BelongsTo
    {
        return $this->belongsTo(Story::class);
    }

    public function nodes(): HasMany
    {
        return $this->hasMany(Node::class);
    }
}
