<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Student;
use App\Models\Category;
use App\Models\Course;
use App\Models\Technology;

class AdminDashbardController extends Controller
{
    // Instructor Start
    public function instructors_view()
    {
        $instructors = Instructor::get();
        // $employees = Employee::with('passport')get();
        return view('dashboard-ins-view', compact('instructors'));
       
    }
    public function instructor_view()
    {
        return view('dashboard-ins-add');
    }
    public function instructor_add(Request $request)
    {
        $url = null;
        $image = null;
        If($request->hasFile('image')){
            $url = $request->image->store('images', 'public');
            $image = 'storage/'.$url;
        }
        $validation = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'qualification' => 'required',
            'designation' => 'required',
            'experience' => 'required',
            'description' => 'required',
        ]);
        $instructor = new Instructor;
        $instructor->name = $request->name;
        $instructor->image = $image;
        $instructor->gender = $request->gender;
        $instructor->email = $request->email;
        $instructor->qualification = $request->qualification;
        $instructor->designation = $request->designation;
        $instructor->experience = $request->experience;
        $instructor->description = $request->description;
        $instructor->save();
        return redirect()->back();
       
    }
    // Instructor End 

    // Student Start
    public function students_view()
    {
        $students = Student::get();
        return view('dashboard-stu-view', compact('students'));
    }
    public function student_view()
    {
        $courses = Course::get();
        return view('dashboard-stu-add', compact('courses'));
    }
    public function student_add(Request $request)
    {
        $validation = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'qualification' => 'required',
            'designation' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'course' => 'required',
            'payment' => 'required',
        ]);
        return $request;
        dd('saved');
    }
    // Student End


    // Category Start
    public function categories_view()
    {
        $categories = Category::get();
        return view('dashboard-cat-view', compact('categories'));
    }
    public function category_view()
    {
        return view('dashboard-cat-add');
    }
    public function category_add(Request $request)
    {
        $url = null;
        $image = null;
        If($request->hasFile('image')){
            $url = $request->image->store('images', 'public');
            $image = 'storage/'.$url;
        }
        $validation = $request->validate([
            'name' => 'required',
        ]);
        $slug = strtolower(trim(preg_replace('/[\s-]+/', '-', preg_replace('/[^A-Za-z0-9-]+/', '-', preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $request->name))))), '-'));
        $category = new Category;
        $category->slug = $slug;
        $category->image = $image;
        $category->category_name = $request->name;
        $category->save();
        return redirect()->back();
    }
    // Category End


    // Course Start
    public function courses_view()
    {
        $courses = Course::get();
        return view('dashboard-cou-view', compact('courses'));
    }
    public function course_view()
    {
        $categories = Category::get();
        $instructors = Instructor::get();
        return view('dashboard-cou-add', compact('categories', 'instructors'));
    }
    public function course_add(Request $request)
    {
        $url = null;
        $image = null;
        If($request->hasFile('image')){
            $url = $request->image->store('images', 'public');
            $image = 'storage/'.$url;
        }
        $validation = $request->validate([
            'name' => 'required',
            'catogory' => 'required',
            'instructor' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $course = new Course;
        $course->title = $request->name;
        $course->image = $image;
        $course->category_id = $request->catogory;
        $course->instructor_id = $request->instructor;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->save();
        return redirect()->back();
    }
    // Course End


    // Technology Start
    public function technologies_view()
    {
        $technologies = Technology::get();
        return view('dashboard-tec-view', compact('technologies'));
    }
    public function technology_view()
    {
        $categories = Category::get();
        return view('dashboard-tec-add', compact('categories'));
    }
    public function technology_add(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'catogory' => 'required',
        ]);
        $technology = new Technology;
        $technology->technology_name = $request->name;
        $technology->category_id = $request->catogory;
        $technology->save();
        return redirect()->back();
    }
    // Technology End


    public function settings()
    {
       //
    }


    // Fronend Start
    public function home()
    {
        $categories = Category::get();
        $courses = Course::with('category', 'instructor')->get();
        return view('home', compact('categories', 'courses'));
    }

    public function join()
    {
        return view('join');
    }

    public function course($id)
    {
        $course = Course::with('category', 'instructor')->find($id);
        return view('course', compact('course'));
    }
    // Fronend End
}
