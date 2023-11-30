<?php

namespace App\Http\Controllers\template;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistartionController extends Controller
{
    public function register(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'frist_name' => 'required',
            'mobile_numabr' => 'required',
            'email_id' => 'required|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'

        ]);

        // echo "<pre>";
        // print_r($request->all());
        // die;
        $frist_name = $request->frist_name;
        $last_name = $request->last_name;
        $mobile_numabr = $request->mobile_numabr;
        $email_id = $request->email_id;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;

        $data =[
            'frist_name' => $frist_name,
            'last_name' => $last_name,
            'mobile_numabr' => $mobile_numabr,
            'email_id' => $email_id,
            'password' => $password,
            'confirm_password' => $password_confirmation,
        ];

        // echo "<pre>";print_r($data);
        // die;

        DB::table('user_registations')->insert($data);

        $request->session()->flash('success', 'You are registerd successfully!');

        return view('template.index');    
    }

}
