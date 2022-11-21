<?php

namespace App\Http\Controllers;

use App\Models\employees;
use App\Models\Company;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showEmployee = employees::paginate(3);

        return view('employee',compact('showEmployee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $show = company::all();

        return view('addEmployee', ['showCompany' => $show]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required'
        ]);
        $companyInsert = new Employees();
        $companyInsert->firstname = $request->first_name;
        $companyInsert->lastname = $request->last_name;
        $companyInsert->email = $request->email;
        $companyInsert->phone = $request->phone;
        $companyInsert->company = $request->company;
        $companyInsert->save();
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(employees $employees,$id)
    {
        $companies = company::get();
        $editEmployee = Employees::find($id);
        return view('editEmployee', ['editEmployee' => $editEmployee],['company' => $companies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employees $employees)
    {
        // return $request->input();
        $EmployeeUpdate = Employees::find($request->id);
        $EmployeeUpdate->firstname = $request->firstname;
        $EmployeeUpdate->lastname = $request->lastname;
        $EmployeeUpdate->email = $request->email;
        $EmployeeUpdate->phone = $request->phone;
        $EmployeeUpdate->company = $request->company;
        $EmployeeUpdate->save();
        return redirect('employee');
    //   echo "<script>console.log($EmployeeUpdate)</script>"; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(employees $employees)
    {
        //
    }
}
