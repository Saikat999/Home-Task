<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        return view('buyer.homepage');
    }


}
