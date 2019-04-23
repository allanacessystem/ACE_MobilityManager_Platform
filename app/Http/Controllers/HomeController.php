<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;

use App\Models\AuthorizationTables;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $record = AuthorizationTables::where([
            ['permission', 'Read'],
            ['tableName' , 'home_tbl']])->first();

        if (strpos($record->Users_JSON, Auth::user()->emailAddress) !== false) {
            return view('home');
        }else{
            return view('welcome');
        }
    }
}
