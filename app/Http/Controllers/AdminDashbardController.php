<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\Enquiry;
use App\Models\Category;
use App\Models\Course;
use App\Models\Technology;
use App\Models\College;
use App\Models\Degree;
use App\Models\Specialization;
use App\Models\Payment;

class AdminDashbardController extends Controller
{
    // Dashboard start
    public function dashboard() {
        $enquiries = Enquiry::count();
        $students = Payment::count();
        $instructors = Instructor::count();
        $courses = Course::count();
        return view('dashboard', compact('enquiries', 'instructors', 'courses', 'students'));
    }
    // Dashboard end


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

    
    // Enquiry Start
    public function enquiries_view()
    {
        $enquiries = Enquiry::with('course', 'degree', 'college', 'specialization')->get();
        return view('dashboard-enq-view', compact('enquiries'));
    }
    public function enquiry_view()
    {
        $courses = Course::get();
        $colleges = College::get();
        $degrees = Degree::get();
        $specializations = Specialization::get();
        return view('dashboard-enq-add', compact('courses', 'colleges', 'degrees', 'specializations'));
    }
    public function enquiry_add(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'passedout' => 'required',
            'qualification' => 'required',
            'specialization' => 'required',
            'college' => 'required',
            'course' => 'required',
            'payment' => 'required',
            'address' => 'required',
        ]);

        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->dob = $request->dob;
        $enquiry->gender = $request->gender;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->passed_out = $request->passedout;
        $enquiry->degree_id = $request->qualification;
        $enquiry->specialization_id = $request->specialization;
        $enquiry->college_id = $request->college;
        $enquiry->address = $request->address;
        $enquiry->course_id = $request->course;
        $enquiry->payment_type = $request->payment;
        $enquiry->status = 0;
        $enquiry->save();
        return redirect()->back();
    }
    public function guest_enquiry_add(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'passedout' => 'required',
            'qualification' => 'required',
            'specialization' => 'required',
            'college' => 'required',
            'course' => 'required',
            'payment' => 'required',
            'address' => 'required',
        ]);
        
        $enquiry = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->dob = $request->dob;
        $enquiry->gender = $request->gender;
        $enquiry->email = $request->email;
        $enquiry->phone = $request->phone;
        $enquiry->passed_out = $request->passedout;
        $enquiry->degree_id = $request->qualification;
        $enquiry->specialization_id = $request->specialization;
        $enquiry->college_id = $request->college;
        $enquiry->address = $request->address;
        $enquiry->course_id = $request->course;
        $enquiry->payment_type = $request->payment;
        $enquiry->status = 0;
        $enquiry->save();
        return redirect()->back();
    }
    // Enquiry End


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
            'description' => 'required',
        ]);
        $slug = strtolower(trim(preg_replace('/[\s-]+/', '-', preg_replace('/[^A-Za-z0-9-]+/', '-', preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $request->name))))), '-'));
        $category = new Category;
        $category->slug = $slug;
        $category->image = $image;
        $category->category_name = $request->name;
        $category->description = $request->description;
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
        $technologies = Technology::get();
        return view('dashboard-cou-add', compact('categories', 'instructors', 'technologies'));
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
            'technologies' => 'required',
            'locale' => 'required',
            'instructor' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $course = new Course;
        $course->title = $request->name;
        $course->image = $image;
        $course->category_id = $request->catogory;
        $course->technologies = json_encode($request->technologies); //convert array to string
        $course->locale = json_encode($request->locale); //convert array to string
        $course->instructor_id = $request->instructor;
        $course->duration = $request->duration;
        $course->price = $request->price;
        $course->description = $request->description;
        $course->save();

        // $course_id = $course->id;
        // $arr = explode(",", $request->topic);

        // $topic = new Topic;
        // for ($i = 0; $i < count($arr); $i++) {
        //     $topic->course_id = $course_id;
        //     $topic->topic_name = $arr[$i];
        //     $topic->save();
        // }

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
        ]);
        $technology = new Technology;
        $technology->technology_name = $request->name;
        $technology->save();
        return redirect()->back();
    }
    // Technology End


    // Payment Start
     public function payments_view()
     {
        $payments = Payment::get();
        return view('dashboard-pay-view', compact('payments'));
     }
     public function payment_view()
     {
        $enquiries = Enquiry::get();
        return view('dashboard-pay-add', compact('enquiries'));
     }
     public function payment_add(Request $request)
     {
         $validation = $request->validate([
             'enquiry_no' => 'required',
             'course_no' => 'required',
             'course_fee' => 'required',
             'payment_type' => 'required',
             'invoice_no' => 'required',
             'reference_no' => 'required',
             'paid' => 'required',
             'payment_method' => 'required',
         ]);
         $fee = preg_replace('/[^0-9.]/','',$request->course_fee);
         $paid = preg_replace('/[^0-9.]/','',$request->paid);
         $balance = $fee - $paid;

         if($request->payment_type == 'full'){
            if($balance == 0){
                $payment = new Payment;
                $payment->enquiry_id = $request->enquiry_no;
                $payment->course_id = $request->course_no;
                $payment->full_invoice_no = $request->invoice_no;
                $payment->full_reference_no = $request->reference_no;
                $payment->payment_type = $request->payment_type;
                $payment->full_payment = $request->paid;
                $payment->full_method = $request->payment_method;
                $payment->balance = $balance;
                $payment->status = 1;
                $payment->save();
                $payment_id = $payment->id;

                $enquiry = Enquiry::find($request->enquiry_no);
                if($enquiry) {
                    $enquiry->payment_id = $payment_id;
                    $enquiry->status = 1;
                    $enquiry->save();
                }
                return redirect()->back();
            } else {
                dd('Please enter full course amount!');
            }
         } else {
            if($request->payment_no == null){
                $payment = new Payment;
                $payment->enquiry_id = $request->enquiry_no;
                $payment->course_id = $request->course_no;
                $payment->emi_first_invoice_no = $request->invoice_no;
                $payment->emi_first_reference_no = $request->reference_no;
                $payment->payment_type = $request->payment_type;
                $payment->emi_first_payment = $request->paid;
                $payment->emi_first_method = $request->payment_method;
                $payment->balance = $balance;
                $payment->status = 0;
                $payment->save();
                $payment_id = $payment->id;

                $enquiry = Enquiry::find($request->enquiry_no);
                if($enquiry) {
                    $enquiry->payment_id = $payment_id;
                    $enquiry->status = 0;
                    $enquiry->save();
                }
                return redirect()->back();
            } else {
                $payment = Payment::find($request->payment_no);
                $fee = preg_replace('/[^0-9.]/','',$request->course_fee_balance);
                $balance = $fee - $paid;
                if($payment) {
                    $payment->emi_second_invoice_no = $request->invoice_no;
                    $payment->emi_second_reference_no = $request->reference_no;
                    $payment->emi_second_payment = $request->paid;
                    $payment->emi_second_method = $request->payment_method;
                    $payment->balance = $balance;
                    $payment->status = 1;
                    $payment->save();
                }

                $enquiry = Enquiry::find($request->enquiry_no);
                if($enquiry) {
                    $enquiry->status = 1;
                    $enquiry->save();
                }
                return redirect()->back();
            }
         }
     }
     public function payment_enquiry(Request $request)
     {
        $validation = $request->validate([
            'id' => 'required',
        ]);
        $enquiry = Enquiry::with('course','payment')->find($request->id);
        return $enquiry;
    }
     // Payment End


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
        $courses = Course::get();
        $colleges = College::get();
        $degrees = Degree::get();
        $specializations = Specialization::get();
        return view('course', compact('course', 'courses', 'colleges', 'degrees', 'specializations'));
        // Fronend End
    }
    // Fronend End
}
