<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function store(Request $request)
    {
        $school = new School();

        $school->name = $request->name;
        $school->email = $request->email;
        $school->contact = $request->contact;
        $school->address = $request->address;

        $school->save();

        return redirect('/')->with('success', 'School data saved successfully!');
    }

    public function edit($id)
    {
        $school = School::get($id);

        return view('school_edit', compact('school'));
    }

    public function update(Request $request, $id)
    {
        $school = School::get($id);

        $school->name = $request->name;
        $school->email = $request->email;
        $school->contact = $request->contact;
        $school->address = $request->address;

        $school->save();

        return redirect('/')->with('success', 'School data updated successfully!');
    }

    public function delete($id)
    {
        $school = School::get($id);

        $school->delete();

        return back();
    }
}