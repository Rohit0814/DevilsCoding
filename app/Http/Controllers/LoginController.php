<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Registration;

class LoginController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'userEmail' => 'required|email',
            'userPassword' => 'required',
            'ConfirmPassword' => 'required|same:userPassword'
        ]);

        $registration = new Registration;
        $registration -> email = $request['userEmail'];
        $registration -> password = md5($request['userPassword']);
        $registration ->save();

        return redirect()->back();
        
    }
}
