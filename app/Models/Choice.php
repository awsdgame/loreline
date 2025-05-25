<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'choices';
    protected $primaryKey = 'id';
    protected $fillable = [
        'from_node_id',
        'to_node_id',
        'label',
    ];

    public function fromNode() {
    return $this->belongsTo(Node::class, 'from_node_id');
    }

    public function toNode() {
    return $this->belongsTo(Node::class, 'to_node_id');
    }

}
