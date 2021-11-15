<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

// Allow access to Employee Model
use App\Models\Employee;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees', 'employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'first_name' => 'required',
            'company_id' => 'alpha-num',
            'email' => 'email',
            'phone' => 'alpha-num'
        ]);
        $input = $request->all();
        Employee::create($input);
        return redirect()->route('employees.index');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee', 'employee'));
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit',compact('employee', 'employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $this->validate($request, [
            'first_name' => 'required',
            'first_name' => 'required',
            'company_id' => 'alpha-num',
            'email' => 'email',
            'phone' => 'alpha-num'
        ]);
        $input = $request->all();
        $employee->fill($input)->save();
        return redirect()->route('employees.index');        
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect()->route('employees.index');        
    }
}
