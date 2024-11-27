<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Member;
use App\Models\Trainer;
use Illuminate\Http\Request;

class adminController extends Controller
{
    // Member Management
    public function membercreate()
    {
        $courses = Course::all();
        return view('membership', compact('courses'));
    }

    public function memberinsert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'courses' => 'required|array',
            'courses.*' => 'exists:courses,id',
        ]);

        $member = new Member();
        $member->fill($request->all());
        $member->save();

        if ($request->has('courses')) {
            $member->courses()->sync($request->courses);
        }

        return redirect()->back()->with('success', 'Member registered successfully.');
    }

    // Trainer Management
    public function trainercreate()
    {
        return view('gymtrainer');
    }

    public function trainerinsert(Request $request)
    {
        $trainer = new Trainer();
        $trainer->fill($request->all());
        $trainer->save();

        // Attach selected courses
        if ($request->has('courses')) {
            $trainer->courses()->sync($request->courses);
        }

        return redirect()->back()->with('success', 'Trainer added successfully.');
    }

    // Course Management
    public function coursecreate()
    {
        return view('class');
    }

    public function courseinsert(Request $request)
    {
        $course = new Course();
        $course->fill($request->all());
        $course->save();

        return redirect()->back()->with('success', 'Course added successfully.');
    }


    public function getTrainers()
    {
        $trainers = Trainer::all(['id', 'name']); // Fetch only the required fields
        return response()->json($trainers);
    }
    }
