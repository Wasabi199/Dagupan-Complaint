<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use App\Http\Requests\Complaints as request;
use App\Http\Requests\RateRequest as rateRequest;
use App\Models\{Complaints, Rates};
use App\Services\Barangays;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as QueryRequest;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{
    //
    public function complaint(QueryRequest $query){
        $filters = $query::only(['address']);
        // dd($filters);
        isset($filters['address']) && $filters['address'] != null? $filters['address'] = $filters['address']: $filters['address'] = null;
        $barangays = Barangays::barangay();
        $complaint = Complaints::
        // where('address','=','Salisay')->get()
        filter($filters)
        ->limit(3)
        ->paginate(3)
        // ->get()
  
        
        ;
        // dd($complaint);
        // $filters = $query::only(['address']);
        return Inertia::render('User/UserComplaint',[
            'Barangays'=>$barangays,
            'Complaints'=>$complaint,
            'filters'=>$filters,
        ]);
    }

    public function submitComplaint(request $request){
        $validated_data = $request->validated();
        // dd($validated_data);
        $complaint = Complaints::create([
            'name'=>$validated_data['name'],
            'address'=>$validated_data['address'],
            'complainant_address'=>$validated_data['complainant_address'],
            'age'=>$validated_data['age'],
            'email'=>$validated_data['email'],
            'value'=>$validated_data['value'],
            'onRead'=>false,
        ]);
        if($request->has('files')){
            foreach($request->file() as $file){
                foreach($file as $image){
                    $path = $image->storePublicly('ComplaintImages',  ['disk'=>'public']);
                    $complaint->image()->create([
                        'images'=>$path
                    ]);
                }
            }
        }
        return Redirect::back();
    }
    
    public function submitRequest(rateRequest $request){
        $validated_data = $request->validated();
        Rates::create([
            'rates'=>$validated_data['rate'],
        ]);
        Redirect::back();
    }
}
