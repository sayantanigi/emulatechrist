<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Useraddresses;
use DB;
class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    public function company()
    {
        $data = array(
            'title' => 'Company',
            'heading' => 'Company',
            'page' => '',
            'subpage' => '',
        );
        $data["list_data"] = DB::table('company')->orderBy('companyId', 'DESC')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.master.companylogo", compact('data'));
    }
    public function company_save(Request $request)
    {
        $file = $request->file('image');
        //print_r($file); die();
        if(!empty($file)) {
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/company'), $fileName);
        } else {
            $fileName = "";
        }
        $data = array(
            'company_name' => $request['company_name'],
            'link' => $request['link'],
            'logo' => $fileName,
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('company')->insert($data);
        $type = "msg";
        $msg = '["Added company logo successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/company');
    }
    public function company_getvalue(Request $request)
    {
        $getdata = DB::table('company')->where('companyId', $request['companyId'])->first();
        if (!empty($getdata->logo)) {
            $img = '<img src="'.asset('uploads/company/'.$getdata->logo).'" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">';
        } else {
            $img = '<img src="' . asset('uploads/no_image.png') . '" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">';
        }
        return response()->json([
            "id" => $getdata->companyId,
            "company_name" => $getdata->company_name,
            "link" => $getdata->link,
            "oldimage" => $getdata->logo,
            "img" => $img,
        ]);
    }
    public function company_update(Request $request)
    {
        $file = $request->file('image');
        if(!empty($file)) {
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/company'), $fileName);
        } else {
            $fileName = $request['oldimage'];;
        }
        $Data = array(
            'company_name' => $request['company_name'],
            'link' => $request['link'],
            'logo' => $fileName,
        );
        DB::table('company')->where('companyId', $request['companyId'])->update($Data);
        $type = "msg";
        $msg = '["Updated company logo successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/company');
    }
    function company_delete($companyId)
    {
        $getdata = DB::table('company')->where('companyId', $companyId)->first();
        // if(!empty($getdata->logo) && file_exists(public_path('uploads/company/'.$getdata->logo)))
        // {
        //    @unlink(public_path('uploads/company/'.$getdata->logo));
        // }
        $delete = DB::table('company')->where('companyId', $companyId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/company');
    }
}
