<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function conferences()
    {
        return $this->hasMany(Conference::class);
    }
}
