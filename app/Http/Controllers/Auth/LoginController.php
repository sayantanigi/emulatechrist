<?php
  
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Redirect;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Rules\ReCaptcha;
class LoginController extends Controller
{
   
    use AuthenticatesUsers;
  
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function register()
    {
    $data['title']='Register';
    return view('auth.register',compact('data'));
    }

    function saveuser(Request $request)
    {
        $request->validate([
            'email'     => 'required|email|unique:users,email',
           // 'phone'     => 'required|phone|unique:users,phone',
            'password' => 'required|min:6|same:cpassword',
            'cpassword' => 'required',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ]); 

        $data=array(
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'password'=>Hash::make($request['password']),
            'created_at'=>date('Y-m-d H:i:s'),   
        );
        DB::table('users')->insert($data);    
        
          $type = "msg";
        $msg = '["Register Successfully", "success", "#A5DC86"]';
         Session::flash($type, $msg);  
         return redirect('userlogin');
         
    }

     function userlogin()
    {
    $data['title']='Login';
    return view('login',compact('data'));
    }
 
    public function actionlogin(Request $request)
    {   
         if(Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
             $user = Auth::user();
             Session::put('userId', $user->userId);
             Session::put('email', $user->email);
             Session::put('usertype', 'user');
             $type = "msg";
        $msg = '["Login Successfully", "success", "#A5DC86"]';
         Session::flash($type, $msg);
            return redirect('');
         }
         else{
            $type = "msg";
        $msg = '["Email & password mismatch", "error", "#DD6B55"]';
         Session::flash($type, $msg);
        return redirect('userlogin');
         }
    }

    function authentication()
    {
    $data['title']='Authentication';
    return view('authentication',compact('data'));
    }

    public function logout(Request $request)
    {
         Auth::guard('web')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->intended('/userlogin');
    }

    function savenewsletter(Request $request)
    {
       
        $checkEmail=DB::table('newsletters')->where('email',$request['email'])->first();
        if(empty($checkEmail))
        {
        $data=array(
            'name'=>$request['name'],
            'email'=>$request['email'],
            'created_at'=>date('Y-m-d H:i:s'),
        );
        DB::table('newsletters')->insert($data);
        echo "1";
    }
    else{
        echo "0";
    }

    }

    
}
