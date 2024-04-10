<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StripCard extends Model
{
    use HasFactory;

    protected $table = 'strippenkaart';

    protected $fillable = [
        'student_id',
        'aantal_lessen',
        'resterende_lessen'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}
