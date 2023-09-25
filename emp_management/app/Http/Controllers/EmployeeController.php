<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Employee $employee)
    {
        $employees = $employee->all();
        // dd($employees);
        return view("admin/viewallemployee", compact("employees"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.addemployee");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Employee $employee)
    {
        // dd("call");
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
            'password'         => 'required',
            'profile_pic' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        );
        $validator = Validator::make($request->all(), $rules);
        // dd($validator);
        if ($validator->fails()) {
            return Redirect('admin/addemp')
                ->withErrors($validator)
                ->withInput();
        } else {
            // dd($request->profile_pic);

            $imageName = time() . '.' . $request->profile_pic->getClientOriginalExtension();
            $request->profile_pic->move(public_path('/Uploads'), $imageName);


            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->password = bcrypt($request->password);
            $employee->profile_pic = $imageName;
            $employee->save();
            return redirect("admin/viewallemployee");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($eid, Employee $employee, Request $request)
    {

        $editemployee = $employee::find($eid);
        return view('admin/editemployee', compact("editemployee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($eid, Request $request, Employee $employee)
    {

        $Updateemployee = $employee::find($eid);

        $Updateemployee->name = $request->name;
        $Updateemployee->email = $request->email;
        if ($request->profile_pic == null) {
            $imageName = $request->old_profile_pic;
        } else {
            $imageName = time() . '.' . $request->profile_pic->getClientOriginalExtension();
            $request->profile_pic->move(public_path('/Uploads'), $imageName);
        }
        $Updateemployee->profile_pic = $imageName;
        $Updateemployee->save();
        return redirect("admin/viewallemployee");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($eid,Employee $employee)
    {
        $Deleteemployee = $employee::find($eid);
        // dd($Deleteemployee);
        $Deleteemployee->delete();
        return redirect("admin/viewallemployee");
        
    }
}
