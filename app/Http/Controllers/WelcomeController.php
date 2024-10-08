<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $user=User::query()->create([
        //     'name'=>'Felipe',
        //     'email'=>'felipe@gmail.com',
        //     'password'=>'Jeremias',
        // ]);

        
        //
        return view('welcome');

    }
}
