<?php

namespace App\Http\Controllers;

use App\Models\Complaints;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request as QueryRequest;

class AdminController extends Controller
{
    //
    public function dagupanComplaint(QueryRequest $request){
        // dd($request);
        $complaints = Complaints::orderBy('created_at')
        ->limit(4)
        ->paginate(4);
        // $filter = Complaints::filter($request::only('id'))
        // // ->appends($request::only('id'))
        // ;
        // dd($filter);
        return Inertia::render('Admin/AdminView',[
            'Complaints'=>$complaints,
            // 'filter'=>$filter
        ]);
    }
}
