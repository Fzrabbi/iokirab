<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ServeDataController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth:api');
    }



    public function serveData(Request $request){
    	$page_size=(int)strval($request->page_size);
        $page_no=(int)strval($request->page);
        // var_dump($page_size);
        // var_dump($page_no);
        // exit;
        $AllUserData=DB::table('users')->paginate($page_size, ['*'], 'page', $page_no);

    	return response()->json($AllUserData);
    }
}
