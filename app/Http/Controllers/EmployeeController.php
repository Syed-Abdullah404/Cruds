<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companyModel;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
    public function employee()
    {
        $showEmployee = EmployeeModel::paginate(3);

        return view('employee', ['showEmployee' => $showEmployee]);
    }
    public function addEmployee()
    {
        $show = companyModel::all();

        return view('addEmployee', ['showCompany' => $show]);
    }
    public function addEmployeeData(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'company' => 'required'
        ]);
        $companyInsert = new EmployeeModel();
        $companyInsert->firstname = $request->first_name;
        $companyInsert->lastname = $request->last_name;
        $companyInsert->email = $request->email;
        $companyInsert->phone = $request->phone;
        $companyInsert->company = $request->company;
        $companyInsert->save();
        return redirect('employee');
    }
    public function deleteEmployee($id)
    {
        $data = EmployeeModel::find($id);
        $data->delete();
        return response()->json(['status'=>'delete successfully']);
    }
    public function editEmployee($id)
    {
        $companies = companyModel::get();
        $editEmployee = EmployeeModel::find($id);
        return view('editEmployee', ['editEmployee' => $editEmployee],['company' => $companies]);
    }
    public function updateEmployee(Request $request)
    {
        // return $request->input();
        $EmployeeUpdate = EmployeeModel::find($request->id);
        $EmployeeUpdate->firstname = $request->firstname;
        $EmployeeUpdate->lastname = $request->lastname;
        $EmployeeUpdate->email = $request->email;
        $EmployeeUpdate->phone = $request->phone;
        $EmployeeUpdate->company = $request->company;
        $EmployeeUpdate->save();
        return redirect('employee');
    //   echo "<script>console.log($EmployeeUpdate)</script>"; 
        
    }
}
