<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inq;

class InqController extends Controller
{
    public function index(){return view('index');}
    public function thanks(Request $request){
        $inq = Inq::create(['name' => $request->name,'email' => $request->email]);
        return view('thanks');
    }
}
