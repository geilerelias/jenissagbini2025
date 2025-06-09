<?php

// app/Models/Visit.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    public $timestamps = false; // usamos visited_at manualmente
    protected $fillable = ['url', 'ip_address', 'user_agent', 'visited_at'];
}
