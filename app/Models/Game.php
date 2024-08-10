<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'platforms',
        'developer_id',
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
