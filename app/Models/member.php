<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'age', 'phone', 'gender', 'course_name',
        'membership_type', 'membership_status', 'fitness_goal',
        'pregnancy_status', 'fees', 'payment', 'payment_method',
        'personal_trainer', 'due_date', 'start_date', 'end_date'
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'member_course');
    }
}
