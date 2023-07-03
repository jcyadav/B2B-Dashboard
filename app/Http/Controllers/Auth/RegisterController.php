<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use DB;
class RegisterController extends Controller
{

    private $setting;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->setting = Genral::first();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function register(Request $request)
    {
        
        //dd($request->all()); exit;
        
        
       if ($this->setting->captcha_enable == 1) {
            $request->validate([
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:8|confirmed',
                    
                    'mobile' => 'numeric|unique:users,mobile|min:10|max:10',
                    'verificationcode' => 'numeric|required',
                    'eula' => 'required',
                    'g-recaptcha-response' => ['required', new CaptchaRule],
            ], [
                    'g-recaptcha-response.required' => 'Please check the captcha !',
                    'mobile.unique' => 'Mobile no is already taken !',
                    
                    'mobile.numeric' => 'Mobile no should be numeric !',
                    'eula.required' => 'Please accept terms and condition !'
                ]
            );

        } else {
            //echo '<pre>';print_r($request->all());exit;
            $validatedData = $request->validate([
                'username' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);
            
        }
        
        $user = User::create([
            'username'      => $request['username'],
            'email'     => $request['email'],
            'password'  => Hash::make($request['password']),
            'str'       => $request['password'],
            'email_verified_at' => $this->setting->email_verify_enable == '1' ? NULL : Carbon::now(),
            'is_verified' => 1,
            
        ]);
        
            // $user = \App\User::where('id',Auth()->user()->id)->first();
            // if($user){
            // $whtspmsg = \DB::table('users')->where('mobile', $user->mobile);
            // if($whtspmsg){
            //         $url="https://titbusiness.in/registration.jpeg";
            //         $content =  "Hi ". 
            //         $request['name']." , 
                    
            //         Welcome to TIT BUSINESS
                    
            //         ENJOY TIT SERVICES AND 
            //         MAKE A LOT OF MONEY 
                    
            //         WITH REFAR AND EARN" ; 
            //         $result2 = \Myhelper::whatsappimg($content,$user->mobile,$url);
            //         // dd($result2); 
            //    }
            //  }
    

        Auth::login($user);
        
        
        Session::flash('regmessage', 'User created successfully with firstname='.$request['name'].' username = '.$request['mobile'].' and password = '.$request['password']);
        /*print_r(Session::get('regmessage'));
        exit;*/
        return redirect("/")->with('success','User created successfully with firstname='.$request['name'].' username = '.$request['mobile'].' and password = '.$request['password']);
        //return redirect('/');

    }
    
}
