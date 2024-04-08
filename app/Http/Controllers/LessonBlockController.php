<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LessonBlock;

class LessonBlockController extends Controller
{
    public function index() 
    {
        $lessonblocks = LessonBlock::with('instructor')->get();
        return view('instructors.index', compact('lessonblocks'));
    }
}
