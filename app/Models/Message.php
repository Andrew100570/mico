<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    /**
     * @var string
     */
    public $text;

    protected $fillable = [
        'id',
        'text',
        'created_at',
        'updated_at'
    ];

    public function serialize($object) {
        return json_encode($object,TRUE);
    }

    public static function deserialize($json) {
        return json_decode($json,false,512,JSON_FORCE_OBJECT);
    }
}
