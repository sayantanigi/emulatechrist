<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Useraddresses;
use DB;
class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    public function settings(Request $request)
    {
        $data = array(
            'title' => 'Settings',
            'page' => '',
            'subpage' => ''
        );
        $data['setting'] = DB::table('settings')->where('settingId', 1)->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.setting", compact('data'));
    }
    public function settingsave(Request $request)
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'phone' => 'required',
            'youtube' => 'required',
            'instagram' => 'required',
        ]);
        $settingsData = array(
            'address' => $request['address'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'youtube' => $request['youtube'],
            'instagram' => $request['instagram'],
            'link' => $request['link'],
            'threads' => $request['threads'],
            'facebook' => $request['facebook'],
        );
        DB::table('settings')->where('settingId', 1)->update($settingsData);
        $type = "msg";
        $msg = '[" Site setting Updated successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/settings');
    }
    public function logosave(Request $request)
    {
        $this->validate(request(), [
            'website' => 'required|min:4|max:100',
        ]);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        // FOR IMAGE
        /*if ($request->logo != NULL) {
            $logo = $request->logo->store("logo", "s3");
        } else {
            $logo = $request['oldlogo'];
        }

        if ($request->footer_logo != NULL) {
            $footer_logo = $request->footer_logo->store("logo", "s3");
        } else {
            $footer_logo = $request['oldfooter_logo'];
        }

        if ($request->favicon != NULL) {
            $favicon = $request->favicon->store("logo", "s3");
        } else {
            $favicon = $request['oldfavicon'];
        }*/
        $logo = $request->file('logo');
        if(!empty($logo)) {
            $path = $request->file('logo')->store('temp');
            $logoName = $logo->getClientOriginalName();
            $logo->move(public_path('uploads/logo'), $logoName);
        } else {
            $logoName = $request['oldlogo'];
        }

        $footer_logo = $request->file('footer_logo');
        if(!empty($footer_logo)) {
            $path = $request->file('footer_logo')->store('temp');
            $footer_logoName = $footer_logo->getClientOriginalName();
            $footer_logo->move(public_path('uploads/logo'), $footer_logoName);
        } else {
            $footer_logoName = $request['oldfooter_logo'];
        }

        $favicon = $request->file('favicon');
        if(!empty($favicon)) {
            $path = $request->file('favicon')->store('temp');
            $faviconName = $favicon->getClientOriginalName();
            $favicon->move(public_path('uploads/logo'), $faviconName);
        } else {
            $faviconName = $request['oldfavicon'];
        }
        $settingsData = array(
            'website' => $request['website'],
            'logo' => $logoName,
            'footer_logo' => $footer_logoName,
            'favicon' => $faviconName,
        );
        //print_r($settingsData); die();
        DB::table('settings')->where('settingId', 1)->update($settingsData);
        $type = "msg";
        $msg = '[" Logo setting Updated successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/settings');
    }
}
