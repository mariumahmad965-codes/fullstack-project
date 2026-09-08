<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;

use App\Models\School;
use App\Models\ParentModel;
use App\Models\Teacher;



Route::get('/', function () {

    $schools = School::get();
    $parents = ParentModel::get();
    $teachers = Teacher::get();

    return view('buttons', compact(
        'schools',
        'parents',
        'teachers'
    ));
});

Route::get('/about',function()
{
    return view('frontend.about');
});

Route::get('/index',function()
{
    return view('frontend.index');
});



Route::get('/authors',function()
{
    return view('frontend.authors');
});

Route::get('/blogs',function()
{
    return view('frontend.blogs');
});

Route::get('/contact',function()
{
    return view('frontend.contact');
});
Route::get('/forget-password',function()
{
    return view('frontend.forget.password');
});
Route::get('/register',function()
{
    return view('frontend.register');
});

Route::get('/404',function()
{
    return view('frontend.404');
});
Route::get('/authors-profile',function()
{
    return view('frontend.Authors-profile');
});
Route::get('/blog-details',function()
{
    return view('frontend.blog-details');
});
Route::get('/terms',function()
{
    return view('frontend.terms');
});
Route::get('/privacy',function()
{
    return view('frontend.privacy');
});

Route::get('/login',function()
{
    return view('frontend.login');
});
Route::get('/categories',function()
{
    return view('frontend.categories');
});



 //SCHOOL 

Route::post('/school/store', [SchoolController::class, 'store'])
    ->name('school.store');

Route::get('/school/edit/{id}', [SchoolController::class, 'edit'])
    ->name('school.edit');

Route::post('/school/update/{id}', [SchoolController::class, 'update'])
    ->name('school.update');

Route::get('/school/delete/{id}', [SchoolController::class, 'delete'])
    ->name('school.delete');


//  PARENT 
Route::post('/parent/store', [ParentController::class, 'store'])
    ->name('parent.store');

Route::get('/parent/edit/{id}', [ParentController::class, 'edit'])
    ->name('parent.edit');

Route::post('/parent/update/{id}', [ParentController::class, 'update'])
    ->name('parent.update');

Route::get('/parent/delete/{id}', [ParentController::class, 'delete'])
    ->name('parent.delete');


//  TEACHER 

Route::post('/teacher/store', [TeacherController::class, 'store'])
    ->name('teacher.store');

Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])
    ->name('teacher.edit');

Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])
    ->name('teacher.update');

Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])
    ->name('teacher.delete');

    