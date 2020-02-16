<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;

class AdminPagesController extends Controller
{
    public function dashboard()
    {
        // $totalCompanies = \App\companies::count();
        // $totaljobs = \App\jobs::count();
        // $contactus = \App\contactus::latest()->get();
        // $subscription = \App\subscriptions::latest()->get();
        // return view('adminpanel.dashboard',compact('totalCompanies','totaljobs',"contactus",'subscription'));
        return view('adminpanel.dashboard');
    }

    public function manageJobs()
    {
        return view('adminpanel.jobs');
    }
    public function manageCompanies()
    {
        return view('adminpanel.companies');
    }
    public function manageblog()
    {
        return view('adminpanel.blogs');
    }
    public function addUser()
    {
        return view('adminpanel.adduser');
    }

    public function saveuser(Request $request){

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($request->password == $request->password_confirmation){
            $user = User::create(request(['name', 'email', 'password']));

             return Redirect::back()->with('success', 'User Added Successfully');

        }else{
            return Redirect::back()->with('error', 'Password Not Matched');
        }

    }

}
