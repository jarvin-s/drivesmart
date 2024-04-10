<?php

namespace App\Http\Controllers;

use App\Models\StripCard;
use App\Models\Student;
use Illuminate\Http\Request;

class StripCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all stripcards with student data (relation)
        $stripcards = StripCard::with('student')->get();
        // Show index view
        return view('instructors.stripcards.index', compact('stripcards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all student data
        $students = Student::all();
        // Show create view with student as parameter data
        return view('instructors.stripcards.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'student_id',
            'aantal_lessen',
            'resterende_lessen'
        ]);

        // Insert validated data
        StripCard::create($request->all());

        // Redirect user to instructors index
        return redirect()->route('stripcards.index');
    }
}
