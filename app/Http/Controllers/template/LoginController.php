<?php

namespace App\Http\Controllers\template;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class LoginController extends Controller
{
    public function index()
    {
        return view('template.login');
    }

    public function login(Request $request)
    {
        $loginUserName = $request->Username;
        $loginPassword = $request->password;
      
      $logindata = DB::table('user_registations')->get();
      
        // echo "<pre>";
        // print_r($logindata);
        // die;
      foreach($logindata as $key=>$logindataData)
      {
       
         $User_name = $logindataData->email_id;
         $User_pass = $logindataData->password;

        // echo "<pre>";
        // print_r($logindataData);        

        if($User_name == $loginUserName && $User_pass == $loginPassword)
        {
            echo "hello";
            return redirect('/index');
        }
        else{
            echo "bye";
        }
      }
      die;
        return view();
    }
}
