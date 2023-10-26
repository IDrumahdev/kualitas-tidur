<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SleepActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_name', 'activity_value'
    ];
}
