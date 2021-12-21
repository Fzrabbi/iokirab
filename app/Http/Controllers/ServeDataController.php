<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ServeDataController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth:api');
    }



    public function serveData(){
    	$AllUserData= User::all();
    	return response()->json($AllUserData);
    }
}
