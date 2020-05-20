<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
    	$students = Student::all();
    	return view('index')->with('students',$students);
    }
    public function create()
    {
    	return view('create');
    }
    public function edit($id)
    {
    	$student = Student::find($id);
    	return view('edit')->with('student',$student);
    }
    public function store(Request $request)
    {
    	//check validation
    	$this->validate($request,[
    		'name'				=>'required',
    		'regestration_id'	=>'required|integer|max:20',
    		'department_name'	=>'required|string',
    		'info'				=>'nullable'
    	]);

    	//insert data intu student table
    	$student = new Student;
    	$student->name = $request->name;
    	$student->department_name = $request->department_name;
    	$student->regestration_id = $request->regestration_id;
    	$student->info = $request->info;
    	$student->save();
    	return redirect()->route('index');
    }
    public function update(Request $request, $id)
    {
    	$student = Student::find($id);
    	$student->name = $request->name;
    	$student->regestration_id = $request->regestration_id;
    	$student->department_name = $request->department_name;
    	$student->info = $request->info;
    	$student->save();
    	return redirect()->route('index');
    }
    public function delete($id){
    	$student = Student::find($id);
    	$student->delete();
    	return redirect()->route('index');
    }
}

