<?php

namespace App\Http\Controllers;

use App\Models\Student; 
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view ('students.index')->with('students', $students);
    }
 
    
    public function create()
    {
        return view('students.create');
    }
 
   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'mobile' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            'marks' => 'required|integer',
        ]);
    
        $image = $request->file('image');
      
        $imageName = time() . '.' . $image->getClientOriginalExtension();
    
        // Save image to the public/uploads directory
        $image->move(public_path('uploads/students'), $imageName);
    
        // Store other form data in the database
        $student = new Student();
        $student->name = $request->input('name');
        $student->address = $request->input('address');
        $student->mobile = $request->input('mobile');
        $student->image = $imageName; // Store the image filename
        $student->marks = $request->input('marks');
        $student->save();
    
        return redirect()->back()->with('success', 'Student data uploaded successfully.');
    
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show')->with('students', $student);
    }
 
    
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('students', $student);
    }
 
  
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('flash_message', 'student Updated!');  
    }
 
   
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Student deleted!');  
    }
}