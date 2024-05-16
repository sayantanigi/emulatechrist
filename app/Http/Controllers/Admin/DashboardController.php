<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use DB;
use Session;
class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    public function admin_dashboard(Request $request)
    {
        $episode = DB::table('episode')->get();
        $category = DB::table('category')->get();
        $podcast = DB::table('podcast')->get();
        $newsletters = DB::table('newsletters')->get();
        $data = array(
            'title' => 'Dashboard',
            'page' => 'dashboard',
            'subpage' => 'dashboard',
            'episode' => $episode,
            'category' => $category,
            'podcast' => $podcast,
            'newsletters' => $newsletters,
        );
        $data['template'] = 'admin.sidebar';
        return view("admin.dashboard", compact('data'));
    }
    public function admin_profile()
    {
        $data = array(
            'heading' => 'Update Profile',
            'title' => 'Profile',
            'page' => 'dashboard',
            'subpage' => ''
        );
        $adminId = Session::get('adminId');
        $data['adminData'] = DB::table('admins')->where('adminId', $adminId)->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.profile", compact('data'));
    }
    public function admin_update_profile(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|min:4|max:100',
            'email' => 'required|email',
        ]);
        /*if ($request->profile != NULL) {
            $profile = $request->profile->store("user", "s3");
        } else {
            $profile = $request['oldprofile'];
        }*/
        $file = $request->file('profile');
        //print_r($file); die();
        if(!empty($file)){
            $path = $request->file('profile')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/profile'), $fileName);
        }else{
            $fileName = $request['oldprofile'];
        }
        $adminData = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'profile' => $fileName,
        );
        Admin::where('adminId', Session::get('adminId'))->update($adminData);
        $type = "msg";
        $msg = '["Admin profile updated successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/profile');
    }
    public function changePassword()
    {
        $data = array(
            'title' => 'Change Password',
            'page' => 'dashboard',
            'subpage' => ''
        );
        $data['template'] = 'admin.sidebar';
        return view("admin.changepassword", compact('data'));
    }
    public function admin_update_password(Request $request)
    {
        $this->validate(request(), [
            'currentpassword' => 'required',
            'newpassword' => 'min:6',
            'newpassword' => 'min:6|required_with:confirmpassword|same:confirmpassword',
            'confirmpassword' => 'min:6',
        ]);
        $adminId = Session::get('adminId');
        $data = DB::table('admins')->where('adminId', $adminId)->first();
        if (!Hash::check($request['currentpassword'], $data->password)) {
            $type = "msg";
            $msg = '["Curreent password does not match", "success", "#A5DC86"]';
            Session::flash($type, $msg);
            return redirect('admin/changePassword');
        }
        $password = Hash::make($request['newpassword']);
        $adminData = array(
            'password' => $password,
        );
        Admin::where('adminId', $adminId)->update($adminData);
        $type = "msg";
        $msg = '[" Password updated successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/changePassword');
    }
}
