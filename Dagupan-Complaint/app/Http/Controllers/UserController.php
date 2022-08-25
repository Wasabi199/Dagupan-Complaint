<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\Barangays;
class UserController extends Controller
{
    //
    public function complaint(){
        $barangays = Barangays::$barangay;
        return Inertia::render('User/UserComplaint',[
            'Barangays'=>$barangays
        ]);
    }
}
