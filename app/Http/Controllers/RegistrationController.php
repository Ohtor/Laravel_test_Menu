<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Family;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function submit(Request $request)
    {
               
        $family = new Family();
        $family->email = $request->input('email');
        $family->password = $request->input('password');
        $family->save();
        return redirect(route(name:'main'));
                
    }
}        
        

        // if(Auth::check())
        // {
        //     return redirect(route(name:'main'));
        // }
        // $validateFields = $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required' 
        // ]);

        // $family = new Family();
        // $family->email = $request->input('email');
        // $family->password = $request->input('password');
        // return redirect(route(name:'main'));
        // $family = family::create($validateFields);
        // if($family)
        // {
        //     Auth::login($family);
        //     return redirect(route(name:'main'));
        // }
        // return redirect(route(name:'registration'))->withErrors([
        //     'formError' => 'Save error.'
        // ]);

