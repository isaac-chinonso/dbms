<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Event;
use App\Student;
use Image;
use Storage;

class PostController extends Controller
{
     //Save student Function
     public function saveprofile(Request $request)
     {
       $user = Auth::user();
       // Validation
       $this->validate($request, [
          'matric' => 'required',
          'fullname' => 'required',
          'phone' => 'required',
          'dob' => 'required',
          'gender' => 'required',
          'department_id' => 'required',
          'nationality' => 'required',
          'state' => 'required',
          'religion' => 'required',
          'marital_status' => 'required',
          'program' => 'required',
          'year_admitted' => 'required',
          'duration' => 'required',
          'address' => 'required',
          'pics' => 'sometimes|image',
       ]);
 
       // Save Record into student DB
       $student = new Student();
       $student->user_id = $user->id;
       $student->matric = $request->input('matric');
       $student->fullname = $request->input('fullname');
       $student->phone = $request->input('phone');
       $student->dob = $request->input('dob');
       $student->gender = $request->input('gender');
       $student->department_id = $request->input('department_id');
       $student->nationality = $request->input('nationality');
       $student->state = $request->input('state');
       $student->religion = $request->input('religion');
       $student->marital_status = $request->input('marital_status');
       $student->program = $request->input('program');
       $student->year_admitted = $request->input('year_admitted');
       $student->duration = $request->input('duration');
       $student->address = $request->input('address');
       // save image 
          if($request->hasFile('pics')) 
          {
             $pics = $request->file('pics');
             $filename = time() . '.' . $pics->getClientOriginalExtension(); 
             $destination = public_path('images/' . $filename);
             Image::make($pics)->resize(600, 500)->save($destination);
 
             $student->pics = $filename;
          }
          $student->status = 1;
       // check if record already exist
          if (Student::where('matric', '=' ,$student->matric)->where('status', '=' ,'1')->exists()) 
          {
              return redirect()->back()->with('warning_message', 'Staff already exist and cant be added');
          }
          else
          {
            $student->save();
 
             \Session::flash('Success_message','✔ Profile Added Successful.');
     
             return redirect()->route('addprofile');
          }
            
     } 

     // Update student function
    public function updateprofile(Request $request, $id)
    {
            $student = Student::find($id);
            // Validation
               $this->validate($request, array(
                'matric' => 'required',
                'fullname' => 'required',
                'phone' => 'required',
                'dob' => 'required',
                'gender' => 'required',
                'department_id' => 'required',
                'nationality' => 'required',
                'state' => 'required',
                'religion' => 'required',
                'marital_status' => 'required',
                'program' => 'required',
                'year_admitted' => 'required',
                'duration' => 'required',
                'address' => 'required',
               )); 

            $student = Student::find($id);  
            $user = Auth::user();

            $student->user_id = $user->id;
            $student->matric = $request->input('matric');
            $student->fullname = $request->input('fullname');
            $student->phone = $request->input('phone');
            $student->dob = $request->input('dob');
            $student->gender = $request->input('gender');
            $student->department_id = $request->input('department_id');
            $student->nationality = $request->input('nationality');
            $student->state = $request->input('state');
            $student->religion = $request->input('religion');
            $student->marital_status = $request->input('marital_status');
            $student->program = $request->input('program');
            $student->year_admitted = $request->input('year_admitted');
            $student->duration = $request->input('duration');
            $student->address = $request->input('address');

            if ($request->hasFile('pics')){
               // add new photo
               $pics = $request->file('pics');
               $filename = time() . '.' . $pics->getClientOriginalExtension(); 
               $destination = public_path('images/' . $filename);
               Image::make($pics)->resize(600, 500)->save($destination);
               $oldFilename = $student->pics;
               // update database
               $student->pics = $filename;
               // delete old photo
               Storage::delete($oldFilename);
            }

            $student->save();
                
        \Session::flash('Success_message','✔ Record Updated Succeffully');

        return redirect()->route('studentprofile');
    }
}
