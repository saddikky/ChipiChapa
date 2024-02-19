<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index(){
        $employees = Employees::all();
        return view('employee.index', ['employees' => $employees]);
    }

    public function add(){
        return view('employee.add');
    }

    public function home(){
        return view('employee.home');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => "required|string|min:5|max:20",
            'age' => "required|integer|min:21",
            'address' => "required|string|min:10|max:40",
            'phone' => 'required|string|size:12|starts_with:08'
        ]);

        // dd($data);
        $newEmployees = Employees::create($data);

        return redirect(route('employee.index'));

    }

    public function edit(Employees $employee){
        return view('employee.edit', ['employee' => $employee]);
    }

    public function update(Employees $employee, Request $request){
        $data = $request->validate([
            'name' => "required|string|min:5|max:20",
            'age' => "required|integer|min:21",
            'address' => "required|string|min:10|max:40",
            'phone' => 'required|string|size:12|starts_with:08'
        ]);

        $employee->update($data);

        return redirect(route('employee.index'))->with('success', 'Employee Data Updated Successfully');
    }

    public function destroy(Employees $employee){
        $employee->delete();
        return redirect(route('employee.index'))->with('success', 'Employee Data Deleted Successfully');
    }
}
