<?php

namespace App\Http\Controllers;

use App\Mail\Orders;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = company::paginate(5);
        return view('company/company',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company/partial/add');
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
            'name' => 'required',
            'email' => 'required'
        ]);
        $companyInsert = new company();
        $companyInsert->name = $request->name;
        $companyInsert->email = $request->email;
        $companyInsert->save();
        Mail::to(
            $request->email
        )->send(new Orders($request));
        return redirect('company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editCompany = company::find($id);
        
        return view('company/partial/edit',compact('editCompany'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         // return $request->input();
         $companyUpdate = company::find($request->id);
         $companyUpdate->name = $request->name;
         $companyUpdate->email = $request->email;
         $companyUpdate->save();
         return redirect('company');
     //   echo "<script>console.log($companyUpdate)</script>"; 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        
        $company->delete();
        return response()->json(['status'=>'delete successfully']);
    }
}
