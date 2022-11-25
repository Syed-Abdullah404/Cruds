<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\todoModel;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Console\View\Components\Alert;

class profileController extends Controller
{
    public function indexProfile()
    {
        $profile = User::all();

        return view('profile', ['profile' => $profile]);
    }

    function updateProfile(Request $request)
    {

        $profileUpdate = User::find($request->id);
        $profileUpdate->name = $request->name;
        $profileUpdate->email = $request->email;
        $profileUpdate->save();
        return redirect('profile');
    }


    public function password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',

            'new_password' => [
                'required',
                'min:8',
                // 'regex:/[a-z]/',      // must contain at least one lowercase letter
                // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
                // 'regex:/[0-9]/',      // must contain at least one digit
                // 'regex:/[@$!%*#?&]/', // must contain a special character

            ],
            'confirm_password' => 'required|same:new_password'

        ]);
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->with('error', 'Not match with the old password');
        }
        // dd($request->all());

        $update = User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        if ($update) {
            return redirect()->back()->with('success', 'Password update');
        }
        return redirect()->back()->with('error', 'Password change failed');
    }



    public function update(Request $request)
    {
        if ($request->ajax()) {
            $taskes = todoModel::find($request->pk);
            $taskes->task = $request->value;

            $taskes->save();
        }
    }
}
