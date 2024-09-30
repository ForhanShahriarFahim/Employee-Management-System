<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees=Employee::paginate(15);
        return view('employees.index')->with('employees', $employees);
    }

    // Display the specified resource
    public function show(Employee $employee, $id)
    {
        $employee = Employee::find($id);
        return view('employees.show')->with('employees', $employee);
    }

    // Delete
    public function destroy(Employee $employee, $id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index');
    }

    // Edit
    public function edit(Employee $employee, $id)
    {
        $employee = Employee::find($id);
        return view('employees.edit')->with('employees', $employee);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'job_title' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'email' => 'required|email|unique:employees,email,' . $id,  // Corrected this line
            'mobile_no' => 'required|string|max:20',  // Fixed 'require' to 'required'
            'address' => 'required|string|max:255'  // Fixed 'require' to 'required'
        ]);

        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->mobile_no = $request->mobile_no;
        $employee->address = $request->address;
        $employee->joining_date = $request->joining_date;
        $employee->salary = $request->salary;
        $employee->job_title = $request->job_title;
        $employee->save();

        return redirect()->route('employees.index');
    }

}
