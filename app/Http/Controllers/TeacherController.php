<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function store(Request $request)
    {
        $teacher = new Teacher();

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->contact = $request->contact;
        $teacher->subject = $request->subject;

        $teacher->save();

        return redirect('/')->with('success', 'Teacher data saved successfully!');
    }

    public function edit($id)
    {
        $teacher = Teacher::get($id);

        return view('teacher_edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::get($id);

        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->contact = $request->contact;
        $teacher->subject = $request->subject;

        $teacher->save();

        return redirect('/')->with('success', 'Teacher data updated successfully!');
    }

    public function delete($id)
    {
        $teacher = Teacher::find($id);

        $teacher->delete();

        return back();
    }
}