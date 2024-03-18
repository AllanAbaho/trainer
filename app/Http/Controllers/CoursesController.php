<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::all();
        return view('courses.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('attachment')) {
            $attachmentName = $request->file('attachment')->getClientOriginalName();
            $request->file('attachment')->store('public');
        }
        $fields = [
            'title' => $request->title,
            'category' => $request->category,
            'instructor' => $request->instructor,
            'description' => $request->description,
            'level' => $request->level,
            'video_url' => $request->video_url,
            'attachment' => $attachmentName,
        ];
        Courses::create($fields);
        return redirect('courses');
    }

    /**
     * Display the specified resource.
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $course = Courses::where('id', $id)->first();
        return view('courses.edit', ['course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('attachment')) {
            $attachmentName = $request->file('attachment')->getClientOriginalName();
            $request->file('attachment')->storeAs('public', $attachmentName);
        }
        $fields = [
            'title' => $request->title,
            'category' => $request->category,
            'instructor' => $request->instructor,
            'description' => $request->description,
            'level' => $request->level,
            'video_url' => $request->video_url,
            'attachment' => $attachmentName ?? '',
        ];
        Courses::where('id', $id)->update($fields);
        return redirect('courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
