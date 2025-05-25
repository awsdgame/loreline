<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Progress extends Model
{
    protected $table = 'user_progress';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'story_id',
        'current_node_id',
        'last_choice_id', // optional tracking of last choice made
        'progress_data'
    ];
    public function user() {
    return $this->belongsTo(User::class);
}

public function story() {
    return $this->belongsTo(Story::class);
}

public function currentNode() {
    return $this->belongsTo(Node::class, 'current_node_id');
}

public function selectedChoice() {
    return $this->belongsTo(Choice::class, 'last_choice_id'); // optional tracking
}

}
