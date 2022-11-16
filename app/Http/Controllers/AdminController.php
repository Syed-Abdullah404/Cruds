<?php

namespace App\Http\Controllers;

use App\Mail\Orders;
use App\Models\companyModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;


class AdminController extends Controller
{

    public function indexPage()
    {
        return view('index');
    }
    public function company(Request $request)
    {
        $show = companyModel::paginate(3);

        return view('company', ['showCompany' => $show]);
    }

    public function add()
    {
        // return new Orders();
        return view('add');
    }
    public function editCompany($id)
    {

        $editCompany = companyModel::find($id);
        return view('edit', ['editCompany' => $editCompany]);
    }
    public function updateCompany(Request $request)
    {
        // return $request->input();
        $companyUpdate = companyModel::find($request->id);
        $companyUpdate->name = $request->name;
        $companyUpdate->email = $request->email;
        $companyUpdate->save();
        return redirect('company');
    //   echo "<script>console.log($companyUpdate)</script>"; 
        
    }

    
    public function deleteCompany($id)
    {
        $data = companyModel::find($id);
        $data->delete();
        return response()->json(['status'=>'delete successfully']);
    }
    public function addCompany(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
        $companyInsert = new companyModel();
        $companyInsert->name = $request->name;
        $companyInsert->email = $request->email;
        $companyInsert->save();
        Mail::to(
            $request->email
        )->send(new Orders($request));
        return redirect('/company');
    }
}
