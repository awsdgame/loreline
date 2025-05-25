<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Story extends Model
{
    protected $table = 'stories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'author_id',
    ];
    // A story can have many chapters
    public function story(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }

    // A story belongs to an author

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /** @use HasFactory<\Database\Factories\StoryFactory> */
    use HasFactory;
}
