<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Display all teachers
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    // Show form to create a new teacher
    public function create()
    {
        return view('teachers.create');
    }

    // Store new teacher
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'gender' => 'required',
            'degree' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    // Show a single teacher
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    // Show form to edit a teacher
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    // Update teacher
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'gender' => 'required',
            'degree' => 'required|string|max:255',
            'tel' => 'required|string|max:20',
        ]);

        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    // Delete teacher
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }
}
