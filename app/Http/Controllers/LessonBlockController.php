<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Student;
use App\Models\Car;
use Carbon\Carbon;
use App\Models\LessonBlock;
use Illuminate\Http\Request;

class LessonBlockController extends Controller
{
    public function index()
    {
        $fiveDaysAway = Carbon::now()->addDays(5);
        $timeNow = Carbon::now();
        $lessonblocks = LessonBlock::with('instructor')->whereDate('datum', '>=', $timeNow)->whereDate('datum', '<', $fiveDaysAway)->get();
        return view('instructors.index', compact('lessonblocks'));
    }

    public function edit($id)
    {
        $lessonblock = LessonBlock::find($id);
        $instructor = Instructor::all();
        $student = Student::all();
        $car = Car::all();
        return view('instructors.edit', compact('lessonblock', 'instructor', 'student', 'car'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming data
        $request->validate([
            'verslag'
        ]);

        // Find lessonblock with selected ID
        $lessonblock = LessonBlock::find($id);
        // Update all rows of selected lessonblock
        $lessonblock->update($request->all());
        // Redirect user to instructors index view
        return redirect()->route('instructors.index');
    }
}
