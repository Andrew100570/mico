<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Message;

class Meta extends Message
{
    use HasFactory;

    /**
     * @var string
     */
    public $tag;

    protected $table = 'meta';

    protected $fillable = [
        'id',
        'statusMessage',
        'tag',
        'updated_at'
    ];

    /**
     * @return string
     */
    public function tag() {
        return $this->tag;
    }
}
