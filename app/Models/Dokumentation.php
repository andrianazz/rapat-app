<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentation extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['conference'];

    public function conference()
    {
        return $this->belongsTo(Conference::class);
    }
}
