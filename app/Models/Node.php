<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Node extends Model
{
    protected $table = 'nodes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'chapter_id',
        'content',
        'type',
    ];
    
    public function chapter(): BelongsTo
    {
        return $this->belongsTo(Chapter::class);
    }

    // The choices that lead to this node.
    public function choices(): BelongsTo
    {
        return $this->belongsTo(Choice::class, 'from_node_id');
    }

    // The choices that lead to this node.

    public function incomingChoices(): BelongsTo
    {
        return $this->belongsTo(Choice::class, 'to_node_id');
    }
}
