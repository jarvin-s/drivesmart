<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonBlock extends Model
{
    use HasFactory;

    protected $table = 'lesblok';

    protected $fillable = [
        'verslag'
    ];

    public function instructor()
    {
        // Declare relationship between instructor and lessonblocks
        return $this->belongsTo(Instructor::class, 'instructeur_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'leerling_id');
    }

    public function car()
    {
        return $this->belongsTo(Car::class, 'auto_id');
    }
}
