<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // Show all users
    public function index()
    {
        $models = User::get();

        return view('show', compact('models'));
    }

    // Store new user
    public function store(Request $req)
    {
        $model = new User();

        $model->name = $req->name;
        $model->email = $req->email;
        $model->password = $req->password;

        $model->save();

        return redirect('/get/users');
    }

    // Show edit form
    public function edit($id)
    {
        $models = User::find($id);

        return view('edit', compact('models'));
    }

    // Update user
    public function update(Request $req, $id)
    {
        $model = User::find($id);

        $model->name = $req->name;
        $model->email = $req->email;
        $model->password = $req->password;

        $model->save();

        return redirect('/get/users');
    }

    // Show single user
    public function show($id)
    {
        $models = User::find($id);

        return view('show', compact('models'));
    }

    // Delete user
    public function delete($id)
    {
        $models = User::find($id);

        $models->delete();

        return back();
    }
}