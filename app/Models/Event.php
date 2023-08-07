<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Message;

class Event extends Message
{
    use HasFactory;

    /**
     * @var string
     */
    public $status;

    protected $table = 'events';

    protected $fillable = [
        'id',
        'statusMessage',
        'created_at',
        'updated_at'
    ];

    /**
     * @return string
     */
    public function statusMessage() {
        return $this->status;
    }
}
