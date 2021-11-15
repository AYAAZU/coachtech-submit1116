<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inq;

class InqController extends Controller
{
    public function index(){return view('index');}
    public function thanks(){return view('thanks');}
}
