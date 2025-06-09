<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'description', 'image_path'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'subject_user')->withPivot('role_id')->withTimestamps();
    }
}
