<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\LessonBlock;

class LessonBlockController extends Controller
{
    public function index()
    {
        $fiveDaysAway = Carbon::now()->addDays(5);
        $timeNow = Carbon::now();
        $lessonblocks = LessonBlock::with('instructor')->whereDate('datum', '>=', $timeNow)->whereDate('datum', '<', $fiveDaysAway)->get();
        return view('instructors.index', compact('lessonblocks'));
    }
}
