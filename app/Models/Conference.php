<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = [
        'meeting_type',
        'room',
        // 'participant',
    ];

    public function meeting_type()
    {
        return $this->belongsTo(MeetingType::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
