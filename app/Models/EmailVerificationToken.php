<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailVerificationToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'token',
        'created_at',
        'expires_at',
    ];

    public $timestamps = false;

    protected $table = 'email_verification_tokens';
}

