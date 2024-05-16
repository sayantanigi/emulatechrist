<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Useraddresses;
use DB;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    function banner()
    {
        $data = array(
            'title' => 'Banner',
            'heading' => 'Banner',
            'page' => '',
            'subpage' => '',
        );
        $data["editData"] = DB::table('banners')->where('bannerId', '1')->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.cms.banner", compact('data'));
    }
    function updatebanner(Request $request)
    {
        $file = $request->file('image');
        if(!empty($file)) {
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/banner'), $fileName);
        } else {
            $fileName = $request['oldimage'];
        }
        $Data = array(
            'heading1' => $request['heading1'],
            'heading2' => $request['heading2'],
            'heading3' => $request['heading3'],
            'heading4' => $request['heading4'],
            'type' => $request['type'],
            'heading5' => $request['heading5'],
            'image' => $fileName,
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('banners')->where('bannerId', $request['id'])->update($Data);
        $type = "msg";
        $msg = '["Updated banner successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/banner');
    }
    /*-------- start news letters --------------*/
    public function newsletter_list()
    {
        $data = array(
            'title' => 'NewsLetter',
            'heading' => 'NewsLetters',
            'page' => '',
            'subpage' => '',
        );
        $data["list_data"] = DB::table('newsletters')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.newsletters_list", compact('data'));
    }
    function deleteemail($id)
    {
        $delete = DB::table('newsletters')->where('id', $id)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/newsletters');
    }
    /*-------- end news letters --------------*/
    /*-------- start contact list --------------*/
    public function contactList()
    {
        $data = array(
            'title' => 'Contact',
            'heading' => 'Contact',
            'page' => '',
            'subpage' => '',
        );
        $data["list_data"] = DB::table('contact')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.contactlist", compact('data'));
    }
    public function viewcontact($contactId)
    {
        $data = array(
            'title' => 'View Contact',
            'heading' => 'View Contact',
            'page' => '',
            'subpage' => '',
        );
        $data['getdata'] = DB::table('contact')->where('contactId', $contactId)->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.viewcontact", compact('data'));
    }
    function deletecontact($contactId)
    {
        $delete = DB::table('contact')->where('contactId', $contactId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/contactList');
    }
    /*-------- end contact list --------------*/
    /*-------- start get in touch --------------*/
    public function getintouchlist()
    {
        $data = array(
            'title' => 'Get In Touch',
            'heading' => 'Get In Touch',
            'page' => '',
            'subpage' => '',
        );
        $data["list_data"] = DB::table('getintouch')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.getintouch", compact('data'));
    }
    public function viewgetintouch($id)
    {
        $data = array(
            'title' => 'View Get In Touch',
            'heading' => 'View Get In Touch',
            'page' => '',
            'subpage' => '',
        );
        $data['getdata'] = DB::table('getintouch')->where('id', $id)->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.viewgetintouch", compact('data'));
    }
    function deletegetintouch($id)
    {
        $delete = DB::table('getintouch')->where('id', $id)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/getintouchlist');
    }
    /*-------- end get in touch --------------*/
    function ebook()
    {
        $data = array(
            'title' => 'Ebook Management',
            'heading' => 'Ebook Management',
            'page' => 'ebook',
            'subpage' => 'editebook',
        );
        $data['getdata'] = DB::table('settings')->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.ebook.edit", compact('data'));
    }
    function updateebook(Request $request)
    {
        $image = $request->file('ebook');
        if (!empty($image)) {
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/ebook');
            $image->move($destinationPath, $fileName);
            $ebook = @$fileName;
        } else {
            $ebook = $request['oldebook'];
        }
        // if($request->ebook!=NULL) {
        // $ebook = $request->ebook->store("ebook", "s3");
        // } else {
        // $ebook  =$request['oldebook'];
        // }
        $Data = array(
            'ebook' => $ebook,
        );
        DB::table('settings')->where('settingId', $request['id'])->update($Data);
        $type = "msg";
        $msg = '["Updated ebook successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/ebook');
    }
    function downloadslist()
    {
        $data = array(
            'title' => 'List of Downloads',
            'heading' => 'List of Downloads',
            'page' => 'ebook',
            'subpage' => 'downloads',
        );
        $data['list_data'] = DB::table('ebook')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.ebook.list", compact('data'));
    }
    function deletedownload($ebookId)
    {
        $delete = DB::table('ebook')->where('ebookId', $ebookId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/downloadslist');
    }
}
