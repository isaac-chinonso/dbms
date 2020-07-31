<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Lecturer;
use App\Department;
use App\Course;
use App\Financial_report;
use App\Libary;
use App\User;
use App\Report;
use App\Event;
use App\Student;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $data['department'] = Department::where('status', '=', 1)->count();
        $data['lecturer'] = Lecturer::where('status', '=', 1)->count();
        $data['course'] = Course::where('status', '=', 1)->count();
        $data['libary'] = Libary::where('status', '=', 1)->count();
        $data['user'] = User::where('status', '=', 1)->where('role_id', '=', 1)->count();
        $data['event'] = Event::where('status', '=', 1)->count();
        $data['student'] = Student::where('status', '=', 1)->count();
        return view('admin.dashboard',$data);
    }


    // Users Functions
    public function user()
    {
        $user = Auth::user();
        $data['user'] = User::where('status', '=', 1)->where('role_id', '=', 1)->get();
        return view('admin.user',$data);
    }

    public function archiveuser()
    {
        $data['use'] = User::where('status',0)->get();
        return view('admin.archive_user',$data);
    }

    public function activateuser($id)
    {
            $user = Auth::user();

            User::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }


    public function deactivateuser($id)
    {
            $user = Auth::user();

            User::where(['id'=>$id])
                ->update(array('status' => 0));

        \Session::flash('Success_message','Deactivation Successfully');

         return back();
    }


    // lecturer functions
    public function addlecturer()
    {
        return view('admin.add_lecturer');
    }

    public function lecturer()
    {
        $data['lecturer'] = Lecturer::where('status',1)->get();
        return view('admin.lecturer',$data);
    }

    public function lecturerprofile($id)
    {
        $data['lecturer'] = Lecturer::where('status',1)->where('id',$id)->first();
        return view('admin.view_lecturer',$data);
    }

    public function editlecturer($id)
    {
        $data['lectur'] = Lecturer::where('id',$id)->first();
        return view('admin.edit_lecturer',$data);
    }

    public function archivelecturer()
    {
        $data['lecture'] = Lecturer::where('status',0)->get();
        return view('admin.archive_lecturer',$data);
    }

    public function activatelecturer($id)
    {
            $user = Auth::user();

            Lecturer::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }


    public function deactivatelecturer($id)
    {
            $user = Auth::user();

            Lecturer::where(['id'=>$id])
                ->update(array('status' => 0));

        \Session::flash('Success_message','Deactivation Successfully');

         return back();
    }


    // course function
    public function addcourse()
    {
        $data['lecturer'] = Lecturer::all();
        $data['department'] = Department::all();
        return view('admin.add_course',$data);
    }

    public function course()
    {
        $data['course'] = Course::where('status',1)->get();
        return view('admin.course',$data);
    }

    public function editcourse($id)
    {
        $data['lecturer'] = Lecturer::all();
        $data['department'] = Department::all();
        $data['editcourse'] = Course::where('id',$id)->first();
        return view('admin.edit_course',$data);
    }

    public function archivecourse()
    {
        $data['archivecourse'] = Course::where('status',0)->get();
        return view('admin.archive_course',$data);
    }

    public function activatecourse($id)
    {
            $user = Auth::user();

            Course::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }

    public function deactivatecourse($id)
    {
            $user = Auth::user();

            Course::where(['id'=>$id])
                ->update(array('status' => 0));

        \Session::flash('Success_message','Deactivation Successfully');

         return back();
    }


    // libary Functions
    public function addlibary()
    {
        $data['department'] = Department::all();
        return view('admin.add_libary',$data);
    }

    public function libary()
    {
        $data['libary'] = Libary::where('status',1)->get();
        return view('admin.libary',$data);
    }

    public function editlibary($id)
    {
        $data['department'] = Department::all();
        $data['editlibary'] = Libary::where('id',$id)->first();
        return view('admin.edit_libary',$data);
    }

    public function archivelibary()
    {
        $data['archivelibary'] = Libary::where('status',0)->get();
        return view('admin.archive_libary',$data);
    }

    public function activatelibary($id)
    {
            $user = Auth::user();

            Libary::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }

    public function deactivatelibary($id)
    {
            $user = Auth::user();

            Libary::where(['id'=>$id])
                ->update(array('status' => 0));

        \Session::flash('Success_message','Deactivation Successfully');

         return back();
    }


    // department functions
    public function adddepartment()
    {
        $data['lecturer'] = Lecturer::all();
        return view('admin.add_department',$data);
    }

    public function department()
    {
        $data['dept'] = Department::where('status',1)->get();
        return view('admin.department',$data);
    }

    public function editdepartment($id)
    {
        $data['lecturer'] = Lecturer::all();
        $data['editdepartment'] = Department::where('id',$id)->first();
        return view('admin.edit_department',$data);
    }

    public function archivedepartment()
    {
        $data['archivedept'] = Department::where('status',0)->get();
        return view('admin.archive_department',$data);
    }

    public function activatedepartment($id)
    {
            $user = Auth::user();

            Department::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }

    public function deactivatedepartment($id)
    {
            $user = Auth::user();

            Department::where(['id'=>$id])
                ->update(array('status' => 0));

        \Session::flash('Success_message','Deactivation Successfully');

         return back();
    }


    //Reports Function
    public function generalreport()
    {
        $data['report'] = Report::where('status',1)->get();
        return view('admin.general_report',$data);
    }

    public function addgeneralreport()
    {
        return view('admin.add_general');
    }

    public function generalreportdetail($id)
    {
        $data['reportdetail'] = Report::where('status',1)->where('id',$id)->first();
        return view('admin.view_general',$data);
    }

    public function editgeneralreport($id)
    {
        $data['editreport'] = Report::where('status',1)->where('id',$id)->first();
        return view('admin.edit_general',$data);
    }

    public function deletegeneralreport($id)
    {
        // Delete Genral Report
        $report = Report::where('id',$id)->first();
        $report->delete();
        
        \Session::flash('success_message','You Have Successfully Deleted this report');

        return redirect()->route('generalreport');
    }


    // Financial Reports Functions
    public function financialreport()
    {
        $data['financialreport'] = Financial_report::where('status',1)->get();
        return view('admin.financial_report',$data);
    }

    public function addfinancialreport()
    {
        return view('admin.add_financial');
    }

    public function financialreportdetail($id)
    {
        $data['financialdetail'] = Financial_report::where('status',1)->where('id',$id)->first();
        return view('admin.view_financial',$data);
    }

    public function editfinancialreport($id)
    {
        $data['editfinancial'] = Financial_report::where('status',1)->where('id',$id)->first();
        return view('admin.edit_financial',$data);
    }

    public function deletefinancialreport($id)
    {
        // Delete Genral Report
        $financial_report = Financial_report::where('id',$id)->first();
        $financial_report->delete();
        
        \Session::flash('success_message','You Have Successfully Deleted this report');

        return redirect()->route('financialreport');
    }


    //events functions
    public function event()
    {
        $data['event'] = Event::where('status',1)->get();
        return view('admin.event',$data);
    }

    public function addevent()
    {
        return view('admin.add_event');
    }

    public function archiveevent()
    {
        $data['archiveevent'] = Event::where('status',0)->get();
        return view('admin.archive_event',$data);
    }

    public function activateevent($id)
    {
            $user = Auth::user();

            Event::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }

    public function deactivateevent($id)
    {
            $user = Auth::user();

            Event::where(['id'=>$id])
                ->update(array('status' => 0));

        \Session::flash('Success_message','Deactivation Successfully');

         return back();
    }
    

    //student function
    public function student()
    {
        $data['student'] = Student::where('status',1)->get();
        return view('admin.student',$data);
    }

    public function archivestudent()
    {
        $data['archivestudent'] = Student::where('status',0)->get();
        return view('admin.archive_student',$data);
    }

    public function activatestudent($id)
    {
            $user = Auth::user();

            Student::where(['id'=>$id])
                ->update(array('status' => 1 ));

            \Session::flash('Success_message','Activation Successfully');

         return back();
    }

    public function deactivatestudent($id)
    {
            $user = Auth::user();

            Student::where(['id'=>$id])
                ->update(array('status' => 0));

        \Session::flash('Success_message','Deactivation Successfully');

         return back();
    }
}


