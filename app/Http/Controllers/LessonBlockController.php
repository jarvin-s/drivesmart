<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\StripCard;
use App\Models\Student;
use App\Models\Car;
use Carbon\Carbon;
use App\Models\LessonBlock;
use Illuminate\Http\Request;

class LessonBlockController extends Controller
{
    public function index()
    {
        // Add five days to current date
        $fiveDaysAway = Carbon::now()->addDays(5);
        // Define current date
        $timeNow = Carbon::now();
        // Only show lessonblocks with dates that are between today and 5 days from now
        $lessonblocks = LessonBlock::with('instructor')->whereDate('datum', '>=', $timeNow)->whereDate('datum', '<', $fiveDaysAway)->get();
        return view('instructors.index', compact('lessonblocks'));
    }

    public function edit($id)
    {
        // Get lessonblock with ID that was clicked
        $lessonblock = LessonBlock::findOrFail($id);
        // Get all data from instructor
        $instructor = Instructor::all();
        // Get all data from student
        $student = Student::all();
        // Get all data from car
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

    public function endLesson(Request $request, $id)
    {
        // Get stripcard with ID that was clicked
        $stripcard = StripCard::findOrFail($id);

        // Subtract 1 from resterende_lessen
        $stripcard->resterende_lessen -= 1;

        // Save the updated record
        $stripcard->save();
        LessonBlock::where(['id' => $id])->update(['active' => 0]);
        return redirect()->route('instructors.index');
    }
}
