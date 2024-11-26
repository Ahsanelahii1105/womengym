<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = ['course_name', 'description', 'level', 'capacity', 'fees', 'duration'];

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    // public function trainers()
    // {
    //     return $this->belongsToMany(Trainer::class);
    // }

    public function trainers()
{
    return $this->hasMany(Trainer::class);
}
}
