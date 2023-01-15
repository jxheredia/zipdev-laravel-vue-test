<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Course, Student, StudentsPerCourse};

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course)
    {
        // Return students associated to a specific course

        $courseData = Course::find($course);

        return response()->json([
            "success" => true,
            "courseData" => $courseData,
            "studentsData" => StudentsPerCourse::where('course_id', $course)->with('student')->get()
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Update if a student is present or absent

        $student = StudentsPerCourse::where([
            ['student_id', $id],
            ['course_id', $request->course_id]
        ])->first();

        $student->is_present = !$student->is_present;

        $student->update();

        return response()->json([
            "success" => true,
            "message" => "update complete."
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
