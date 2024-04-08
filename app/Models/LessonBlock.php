<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonBlock extends Model
{
    use HasFactory;

    protected $table = 'lesblok';

    public function instructor()
    {
        // Declare relationship between instructor and lessonblocks
        return $this->belongsTo(Instructor::class, 'instructeur_id');
    }
}
