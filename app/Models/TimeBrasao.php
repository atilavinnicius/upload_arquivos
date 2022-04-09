<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeBrasao extends Model
{
    use HasFactory;
    protected $table = 'times_brasao';
    public $timestamps = false;

    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}
