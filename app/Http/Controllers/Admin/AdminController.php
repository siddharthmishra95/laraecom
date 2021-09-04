<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;


class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    }
    public function settings(){
        return view('admin.admin_settings');
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessages = [
                'email.required' => 'Email Address is required',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
            ];

            $this->validate($request, $rules, $customMessages);
           
           if( Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']])) {
            return redirect('admin/dashboard');
           }else{
               Session::flash('error_message','Invalid Email or Password');
               return redirect()->back();
           }
        }
        return view ('admin.admin_login');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}