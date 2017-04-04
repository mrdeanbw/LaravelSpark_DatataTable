<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\EmergencyPlanTemplate;

use Validator;

class WelcomeController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */
    public function show()
    {
        return view('welcome');
    }

}
