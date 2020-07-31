<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Department;
use App\Student;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $data['event'] = Event::where('status', '=', 1)->count();
        return view('student.dashboard',$data);
    }

    public function event()
    {
        $data['event'] = Event::where('status', '=', 1)->get();
        return view('student.event',$data);
    }

    public function addprofile()
    {
        $data['department'] = Department::all();
        return view('student.add_profile',$data);
    }

    public function studentprofile()
    {
        $user = Auth::user();
        $data['studentprofile'] = Student::where('status', '=', 1)->where('user_id',$user->id)->get();
        return view('student.student_profile',$data);
    }

    public function editprofile($id)
    {
        $data['department'] = Department::all();
        $data['editstudent'] = Student::where('id',$id)->first();
        return view('student.edit_profile',$data);
    }
}
