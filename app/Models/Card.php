<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    /** @use HasFactory<\Database\Factories\CardFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'post_date',
        'image',
        'user_id',
        'type'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
