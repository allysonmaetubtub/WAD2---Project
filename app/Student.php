<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name',
        'student_id',
        'section_name',
        'grade_level',
        'english',
        'math',
        'filipino',
        'science',
        'mapeh',
        'epp',
        'cl',
        'teacher_id'
    ];

    public function section(){
        return $this->belongsTo('App\Section', 'section_id');
    }
}
