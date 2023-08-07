<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Message;

class Payload extends Message
{
    use HasFactory;

    /**
     * @var string
     */
    public $status;

    protected $table = 'events';

    protected $fillable = [
        'id',
        'statusPayload',
        'created_at',
        'updated_at'
    ];

    /**
     * @return string
     */
    public function statusPayload() {
        return $this->status;
    }
}
