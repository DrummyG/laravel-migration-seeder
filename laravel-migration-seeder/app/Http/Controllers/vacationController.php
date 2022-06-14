<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacation;

class vacationController extends Controller
{
    public function Vacations(){
        $vacations = Vacation::all();

        return view('welcome', compact('vacations'));
    }
}
