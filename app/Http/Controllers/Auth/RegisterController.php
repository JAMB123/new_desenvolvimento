<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *="{{
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
            'name' => ['required', 'string', 'min:3'],
            'username' => ['required', 'string', 'min:5'],
            'sobrename' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefone' => ['required', 'string', 'min:17' ,'max:17'],
            'CPF' => ['required', 'string', 'min:14', 'max:14'],
            'endereco' => ['required', 'string', 'min:20'],
            'password' => ['required', 'string', 'min:4', 'same:password_confirmation']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $userData = [
            'name' => $data['name'],
            'username' => $data['username'],
            'sobrename' => $data['sobrename'],
            'email' => $data['email'],
            'telefone' => $data['telefone'],            
            'CPF' => $data['CPF'],
            'endereco' => $data['endereco'],
            'password' => Hash::make($data['password'])
        ];
       return User::create($userData);
    }
}
?>

