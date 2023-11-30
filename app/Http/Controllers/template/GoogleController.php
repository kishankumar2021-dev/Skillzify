<?php

namespace App\Http\Controllers\template;

use App\Mail\GoogleLoginEmail;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;



class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        // echo "comming here1";
        // die;

        return Socialite::driver('google')->redirect();
    }

    public function CallbackformGoogle()
    {
        // try {
        //     $user = Socialite::driver('google')->user();
        //     $token = $user->token; // Access token
        //     $refreshToken = $user->refreshToken;

        //     // Check Users Email If Already There
        //     $is_user = User::where('email', $user->getEmail())->first();
        //     if(!$is_user){

        //         $saveUser = User::updateOrCreate([
        //             'google_id' => $user->getId(),
        //         ],[
        //             'name' => $user->getName(),
        //             'email' => $user->getEmail(),
        //             'password' => Hash::make($user->getName().'@'.$user->getId())
        //         ]);
        //     }else{
        //         $saveUser = User::where('email',  $user->getEmail())->update([
        //             'google_id' => $user->getId(),
        //         ]);
        //         $saveUser = User::where('email', $user->getEmail())->first();

        //         Mail::to($user->email)->send(new GoogleLoginEmail($user));
        //         // echo "<pre>";
        //         // print_r($Mial);
        //         // die;
        //     }


        //     Auth::loginUsingId($saveUser->id);

        //     return redirect()->route('home');
            
        // } catch (\Throwable $th) {
        //     throw $th;
        // }
        try {
            $user = Socialite::driver('google')->user();
            $token = $user->token; // Access token
            $refreshToken = $user->refreshToken;
        
            // Check if the user already exists
            $existingUser = User::where('email', $user->getEmail())->first();
            //dd($existingUser);
        
            if (!$existingUser) {
                // Create a new user
                $saveUser = User::create([
                    'google_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId())
                ]);
            } else {                
                // Update the existing user's Google ID
                $existingUser->update(['google_id' => $user->getId()]);
                $saveUser = $existingUser;

                $data=['name'=>'kishan'];
                $existingUser['to'] = $existingUser->email;
                Mail::send('template.mail',$data, function($messages) use ($existingUser){
                    $messages->to($existingUser['to']);
                    $messages->subject('You are registerd!!');
                });
            }
        
            Auth::loginUsingId($saveUser->id);
            session()->put('id',$existingUser->id);
            session()->put('eamil',$existingUser->email);
            
            return view('template.index');
        
        } catch (\Throwable $th) {
            // Handle exceptions appropriately
            throw $th;
        }
    }


}