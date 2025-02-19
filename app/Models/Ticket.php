<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'participant_id', 'event_id', 'payment_method', 'payment_status', 'paid_at', 'receipt_of_payment',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function checkins()
    {
        return $this->hasMany(Checkin::class);
    }
}
