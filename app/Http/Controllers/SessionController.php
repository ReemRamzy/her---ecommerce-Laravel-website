<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function store() {
        if(! auth()->attempt(request(['email' , 'password'])))
        {
            return back()->withErrors(
                ['message'=>'E-mail or password is incorrect',]
            );
        }
        return redirect('account');
    }

    public function destroy() {

        auth()->logout();

        return redirect('page');
    }
}
