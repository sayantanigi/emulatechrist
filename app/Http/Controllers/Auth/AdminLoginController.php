<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;

class AdminLoginController extends Controller
{
  protected $table = 'admins';
    public function __construct()
    {
       // $this->middleware('guest:admin')->except('logout');
    }
      
    public function showAdminLoginForm()
    {
      
        return view('admin.signin',['url' => 'admin']);
    }	

    public function adminLogin(Request $request)
    {

        $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required'
        ]);

     if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
          
        $data =  DB::table('admins')->where('email',$request->email)->first();
        
        Session::put('email', $data->email);
        Session::put('adminId', $data->adminId);
         Session::put('admintype', 'admin');
        return redirect('admin/dashboard');
       
        }
       
        $errors = new MessageBag(['loginerror' => ['Username & password mismatch.']]);
        return Redirect::back()->withErrors($errors)->withInput($request->only('email'));
    }

    public function adminlogout(Request $request)

    { 

        Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect()->intended('/admin');

    }   

}