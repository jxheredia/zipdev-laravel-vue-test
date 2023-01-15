<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentsPerCourse extends Model
{
    use HasFactory;
    protected $table = "course_students";
    protected $guarded = [];
    protected $fillable = [];

    public function student(){
        return $this->hasOne(Student::class, 'id', 'student_id');
    }
}
