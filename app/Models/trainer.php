<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'specialization', 'phone', 'course_name',
        'experience', 'fees', 'salary', 'availability'
    ];

    // public function courses()
    // {
    //     return $this->belongsToMany(Course::class, 'course_trainer');
    // }

    public function course()
{
    return $this->belongsTo(Course::class);
}
}

