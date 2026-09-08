<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParentModel;

class ParentController extends Controller
{
    public function store(Request $request)
    {
        $parent = new ParentModel();

        $parent->name = $request->name;
        $parent->email = $request->email;
        $parent->contact = $request->contact;
        $parent->child_name = $request->child_name;

        $parent->save();

        return redirect('/')->with('success', 'Parent data saved successfully!');
    }

    public function edit($id)
    {
        $parent = ParentModel::get($id);

        return view('parent_edit', compact('parent'));
    }

    public function update(Request $request, $id)
    {
        $parent = ParentModel::get($id);

        $parent->name = $request->name;
        $parent->email = $request->email;
        $parent->contact = $request->contact;
        $parent->child_name = $request->child_name;

        $parent->save();

        return redirect('/')->with('success', 'Parent data updated successfully!');
    }

    public function delete($id)
    {
        $parent = ParentModel::get($id);

        $parent->delete();

        return back();
    }
}