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
        $stripcards = StripCard::with('student')->get();
        return view('instructors.stripcards.index', compact('stripcards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = Student::all();
        return view('instructors.stripcards.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id',
            'aantal_lessen',
            'resterende_lessen'
        ]);

        StripCard::create($request->all());

        return redirect()->route('instructors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
