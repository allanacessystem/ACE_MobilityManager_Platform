<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\AuthorizationTables;
use Illuminate\Support\Collection;

use App\Http\Resources\registerUserRes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'emailAddress' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'emailAddress' => $data['emailAddress'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function AddUser(Request $request){

        $data = $request->all();
        $json_Object = str_replace(',]', ']', $data['Roles_Permissions_JSON']);

        $json = json_decode($json_Object, true);

        User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'emailAddress' => $data['emailAddress'],
            'password' => $data['password'],
            'Roles_Permissions_JSON' => $json_Object,//$data['Roles_Permissions_JSON'],
        ]);        
        
        foreach($json as $key => $value){
            //dd($key,$value);
            foreach($value as $item){
                $record = AuthorizationTables::where([
                    ['permission', $item],
                    ['tableName' , $key]])->first();
        
                $record->Users_JSON = $record->Users_JSON.",{ ".$data['emailAddress']." }";
                $record->save();
            }
        }
    }

    public function index(){
        $tableList = AuthorizationTables::all()->unique('tableName');
        return registerUserRes::collection($tableList);
    }
}
