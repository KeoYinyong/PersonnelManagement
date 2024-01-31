<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //
    public function index()
    {
        $departments = Department::all();
        return view('departments.view', compact('departments'));
    }

    public function create()
    {
        return view('departments.add');

    }

    public function store(Request $request)
    {
        // Validate and store department data
        $this->validate($request, [
            "name" => "required",
        ]);
        Department::create($request->all());
        return redirect()->route("departments.index");
    }

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.show', compact('department'));
    }

    public function edit($id)
    {
        $department = Department::find($id);
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update department data
        $this->validate($request, [
            "name" => "required",
        ]);
        Department::find($id)->update($request->all());
        return redirect()->route("departments.index");
    }

    public function destroy($id)
    {
        // Delete department
        Department::find($id)->delete();
        return redirect()->route("departments.index");
    }
}
