<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class SchoolController extends Controller
{
    public function index(){
      
        return view('index');
    }

    public function create()
    {
        
    }
     
    public function store(Request $request)
    {
        $request->validate([
            'studentschool' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'website' => 'required',
            'linkedin' => 'required'
        ]);

        Student::create($request->all());
 
      
        return redirect()->route('index')
                        ->with('success','Student has been created successfully.');
    }

    public function show(Company $company)
    {
        return view('companies.show',compact('company'));
    } 
      
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit',compact('company'));
    }
     
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
         
        $company = Company::find($id);
 
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
 
        $company->save();
     
        return redirect()->route('students.index')
                        ->with('success','Company Has Been updated successfully');
    }
     
    
    public function destroy(Student $student)
    {
        $student->delete();
     
        return redirect()->route('students.index')
                        ->with('success','Company has been deleted successfully');
    }
}
