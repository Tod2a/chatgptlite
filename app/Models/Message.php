<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public const USER = 'utilisateur';
    public const HELPER = 'helper';

    public static function roles(): array
    {
        return [
            self::USER,
            self::HELPER,
        ];
    }

    public function Conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
}
