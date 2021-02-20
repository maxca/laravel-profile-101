<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = [
        'id',
        'student_id',
        'full_name',
        'nickname',
        'major',
        'faculty',
        'year',
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'student_id', 'student_id');
    }
}
