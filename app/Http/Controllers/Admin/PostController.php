<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Lecturer;
use App\Department;
use App\Course;
use App\Libary;
use App\Report;
use App\Financial_report;
use App\Event;
use Image;
use Storage;

class PostController extends Controller
{
    //Save lecturer Function
    public function savelecturer(Request $request)
    {
      $user = Auth::user();
      // Validation
      $this->validate($request, [
         'fullname' => 'required',
         'email' => 'required',
         'phone' => 'required',
         'dob' => 'required',
         'gender' => 'required',
         'position' => 'required',
         'description' => 'required',
         'profile_pic' => 'sometimes|image',
      ]);

      // Save Record into lecturer DB
      $lecturer = new Lecturer();
      $lecturer->fullname = $request->input('fullname');
      $lecturer->email = $request->input('email');
      $lecturer->phone = $request->input('phone');
      $lecturer->dob = $request->input('dob');
      $lecturer->gender = $request->input('gender');
      $lecturer->position = $request->input('position');
      $lecturer->description = $request->input('description');
      // save image 
         if($request->hasFile('profile_pic')) 
         {
            $profile_pic = $request->file('profile_pic');
            $filename = time() . '.' . $profile_pic->getClientOriginalExtension(); 
            $destination = public_path('images/' . $filename);
            Image::make($profile_pic)->resize(890, 593)->save($destination);

      $lecturer->profile_pic = $filename;
         }
      $lecturer->status = 1;
      // check if record already exist
         if (Lecturer::where('email', '=' ,$lecturer->email)->where('status', '=' ,'1')->exists()) 
         {
             return redirect()->back()->with('warning_message', 'Staff already exist and cant be added');
         }
         else
         {
            $lecturer->save();

            \Session::flash('Success_message','✔ Staff Added Successful.');
    
            return redirect()->route('lecturer');
         }
           
    } 

    //Save department Function
    public function savedepartment(Request $request)
    {
        $user = Auth::user();
         // Validation
         $this->validate($request, [
            'title' => 'required',
            'lecturer_id' => 'required',
            'student' => 'required',
        ]);

        // Save Record into department DB
        $department = new Department();
        $department->title = $request->input('title');
        $department->lecturer_id = $request->input('lecturer_id');
        $department->student = $request->input('student');
        $department->status = 1;
        if (Department::where('title', '=' ,$department->title)->where('status', '=' ,'1')->exists()) 
         { 
            return redirect()->back()->with('warning_message', 'Department already exist and cant be added twice');
         }
         else 
         {
            $department->save();
        
            \Session::flash('Success_message','✔ Department Successfully Added.');

            return redirect()->route('adddepartment');
         }
    } 

    //Save course Function
    public function savecourse(Request $request)
    {
        $user = Auth::user();
         // Validation
         $this->validate($request, [
            'title' => 'required',
            'code' => 'required',
            'duration' => 'required',
            'lecturer_id' => 'required',
            'department_id' => 'required',
            'description' => 'required',
        ]);

        // Save Record into course DB
        $course = new Course();
        $course->title = $request->input('title');
        $course->code = $request->input('code');
        $course->duration = $request->input('duration');
        $course->lecturer_id = $request->input('lecturer_id');
        $course->department_id = $request->input('department_id');
        $course->description = $request->input('description');
        $course->status = 1;
        if (Course::where('title', '=' ,$course->title)->where('status', '=' ,'1')->exists()) 
         { 
            return redirect()->back()->with('warning_message', 'Course already exist and cant be added twice');
         }
         else 
         {
            $course->save();
        
            \Session::flash('Success_message','✔ Course Successfully Added.');

            return redirect()->route('addcourse');
         }
    } 

    //Save libary asset Function
    public function savelibary(Request $request)
    {
        $user = Auth::user();
         // Validation
         $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'author' => 'required',
            'department_id' => 'required',
            'type' => 'required',
            'description' => 'required',
        ]);

        // Save Record into Libary DB
        $libary = new Libary();
        $libary->name = $request->input('name');
        $libary->subject = $request->input('subject');
        $libary->author = $request->input('author');
        $libary->department_id = $request->input('department_id');
        $libary->type = $request->input('type');
        $libary->description = $request->input('description');
        $libary->status = 1;
        if (Libary::where('name', '=' ,$libary->name)->where('status', '=' ,'1')->exists()) 
         { 
            return redirect()->back()->with('warning_message', 'Libary Asset already exist and cant be added twice');
         }
         else 
         {
            $libary->save();
        
            \Session::flash('Success_message','✔ Libary Asset Successfully Uploaded.');

            return redirect()->route('addlibary');
         }
    } 

    //Save General Report Function
    public function savegeneral(Request $request)
    {
        $user = Auth::user();
         // Validation
         $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

        // Save Record into Report DB
        $report = new Report();
        $report->title = $request->input('title');
        $report->date = $request->input('date');
        $report->description = $request->input('description');
        $report->status = 1;
        if (Report::where('title', '=' ,$report->title)->where('status', '=' ,'1')->exists()) 
         { 
            return redirect()->back()->with('warning_message', 'Report already exist and cant be added twice');
         }
         else 
         {
            $report->save();
        
            \Session::flash('Success_message','✔ General Report Successfully Added.');

            return redirect()->route('addgeneralreport');
         }
    } 

    //Save General Report Function
    public function savefinancial(Request $request)
    {
        $user = Auth::user();
         // Validation
         $this->validate($request, [
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
        ]);

        // Save Record into Report DB
        $financial_report = new Financial_report();
        $financial_report->title = $request->input('title');
        $financial_report->date = $request->input('date');
        $financial_report->description = $request->input('description');
        $financial_report->status = 1;
        if (Financial_report::where('title', '=' ,$financial_report->title)->where('status', '=' ,'1')->exists()) 
         { 
            return redirect()->back()->with('warning_message', 'Financial Report already exist and cant be added twice');
         }
         else 
         {
            $financial_report->save();
        
            \Session::flash('Success_message','✔ Financial Report Successfully Added.');

            return redirect()->route('addfinancialreport');
         }
    } 

     //Save Event Function
     public function saveevent(Request $request)
     {
         $user = Auth::user();
          // Validation
          $this->validate($request, [
             'title' => 'required',
             'date' => 'required',
             'description' => 'required',
         ]);
 
         // Save Record into Event DB
         $event = new Event();
         $event->title = $request->input('title');
         $event->date = $request->input('date');
         $event->description = $request->input('description');
         $event->status = 1;
         if (Event::where('title', '=' ,$event->title)->where('status', '=' ,'1')->exists()) 
          { 
             return redirect()->back()->with('warning_message', 'Event already exist and cant be added twice');
          }
          else 
          {
             $event->save();
         
             \Session::flash('Success_message','✔ Event Successfully Added.');
 
             return redirect()->route('addevent');
          }
     } 

    // Update staff function
    public function updatelecturer(Request $request, $id)
    {
            $this->validate($request, [
               'fullname' => 'required',
               'email' => 'required',
               'phone' => 'required',
               'dob' => 'required',
               'gender' => 'required',
               'position' => 'required',
               'description' => 'required',
            ]);

            $fullname = $request['fullname'];
            $email = $request['email'];
            $phone = $request['phone'];
            $dob = $request['dob'];
            $gender = $request['gender'];
            $position = $request['position'];
            $description = $request['description'];

            $lecturer = lecturer::find($id);

            if  ($request->hasFile('image')) {
                // add the new photo 
                $profile_pic = $request['profile_pic'];     
                $filename = time() . '.' . $profile_pic->getClientOriginalExtension();       
                $destination = 'images/';      
                $profile_pic->move($destination, $filename);
                $oldfilename = $lecturer->profile_pic;
                // update the database
                $lecturer->source = $filename;
                // delete the old photo
                Storage::delete($oldfilename);

            }

            $lecturer->save();

            lecturer::where(['id'=>$id])
                ->update(array(
                    'fullname' => $fullname,
                    'email' => $email,
                    'phone' => $phone, 
                    'dob' => $dob, 
                    'gender' => $gender, 
                    'position' => $position, 
                    'description' => $description
                    ));

                 
       
        \Session::flash('Success_message','✔ You have Successfully updated Ad');

         return back();
    }
    // Update Course function
    public function updatecourse(Request $request, $id)
    {
            $course = Course::find($id);
            // Validation
               $this->validate($request, array(
                  'title' => 'required',
                  'code' => 'required',
                  'duration' => 'required',
                  'lecturer_id' => 'required',
                  'department_id' => 'required',
                  'description' => 'required',
               )); 

            $course = Course::find($id);  

            $course->title = $request->input('title');
            $course->code = $request->input('code');
            $course->duration = $request->input('duration');
            $course->lecturer_id = $request->input('lecturer_id');
            $course->department_id = $request->input('department_id');
            $course->description = $request->input('description');

            $course->save();
                
        \Session::flash('Success_message','✔ Record Updated Succeffully');

         return back();
    }

    // Update Libary function
    public function updatelibary(Request $request, $id)
    {
            $libary = Libary::find($id);
            // Validation
               $this->validate($request, array(
                  'name' => 'required',
                  'subject' => 'required',
                  'author' => 'required',
                  'department_id' => 'required',
                  'type' => 'required',
                  'description' => 'required',
               )); 

            $libary = Libary::find($id);  

            $libary->name = $request->input('name');
            $libary->subject = $request->input('subject');
            $libary->author = $request->input('author');
            $libary->department_id = $request->input('department_id');
            $libary->type = $request->input('type');
            $libary->description = $request->input('description');

            $libary->save();
                
        \Session::flash('Success_message','✔ Record Updated Succeffully');

         return back();
    }

    // Update Department function
    public function updatedepartment(Request $request, $id)
    {
            $department = Department::find($id);
            // Validation
               $this->validate($request, array(
                  'title' => 'required',
                  'lecturer_id' => 'required',
                  'student' => 'required',

               )); 

            $department = Department::find($id);  

            $department->title = $request->input('title');
            $department->lecturer_id = $request->input('lecturer_id');
            $department->student = $request->input('student');

            $department->save();
                
        \Session::flash('Success_message','✔ Record Updated Succeffully');

         return back();
    }

    // Update General Report function
    public function updategeneralreport(Request $request, $id)
    {
            $report = Report::find($id);
            // Validation
               $this->validate($request, array(
                  'title' => 'required',
                  'date' => 'required',
                  'description' => 'required',

               )); 

            $report = Report::find($id);  

            $report->title = $request->input('title');
            $report->date = $request->input('date');
            $report->description = $request->input('description');

            $report->save();
                
        \Session::flash('Success_message','✔ Report Updated Succeffully');

         return back();
    }

    // Update Financial Report function
    public function updatefinancialreport(Request $request, $id)
    {
            $financial_report = Financial_report::find($id);
            // Validation
               $this->validate($request, array(
                  'title' => 'required',
                  'date' => 'required',
                  'description' => 'required',

               )); 

            $financial_report = Financial_report::find($id);  

            $financial_report->title = $request->input('title');
            $financial_report->date = $request->input('date');
            $financial_report->description = $request->input('description');

            $financial_report->save();
                
        \Session::flash('Success_message','✔ Report Updated Succeffully');

         return back();
    }

}
