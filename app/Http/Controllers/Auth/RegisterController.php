<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Role;
use auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Jrean\UserVerification\Traits\VerifiesUsers;
use Jrean\UserVerification\Facades\UserVerification;


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
    use VerifiesUsers;
    

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/app';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['getVerification', 'getVerificationError']]);
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
        $user
       ->roles()
       ->attach(Role::where('name', 'employee')->first());

       return $user;
    }

     /**
         * Handle a registration request for the application.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function register(Request $request)
        {
            $this->validator($request->all())->validate();

            $user = $this->create($request->all());


            event(new Registered($user));


            UserVerification::generate($user);

            UserVerification::send($user, 'My Custom E-mail Subject');

            toastr()->success('Thanks, Check your E-mail for activation link' );

            return redirect($this->redirectTo);
        }

        public function verifyUser($token, $currentUser= "")
        {
            $user = User::where('verification_token', $token)->first();
            if($user){
                
                if(!$user->verified) {
                    $user->verified = 1;
                    $user->save();
                    toastr()->success('The account has been activated successfully!');
                }else{
                    toastr()->info('This account is already activated.');

                }
            }else{
                toastr()->error('This account doesn\'t exist anymore!');
            }
            return redirect('/login');

        }

   
}
