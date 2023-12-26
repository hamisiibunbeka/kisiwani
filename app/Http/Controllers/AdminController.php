<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function logoutPage(){
        return view('master.logout_page');
    }

    public function editProfile(){
        $id = Auth::user()->id;
        $profileData = User::findorfail($id);
        return view('profile.create', compact('profileData'));
    }

    public function profileDataStore(Request $request){
        $id = Auth::user()->id;
        $data = User::findorfail($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->username = $request->username;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('uploads/user_img'.$data->photo));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/user_img'), $fileName);
            $data['photo'] = $fileName;
        }
        $data -> save();
        return redirect()->back();
    }
}
