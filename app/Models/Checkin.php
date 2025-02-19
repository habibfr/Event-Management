<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id', 'checkin_time',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

}
