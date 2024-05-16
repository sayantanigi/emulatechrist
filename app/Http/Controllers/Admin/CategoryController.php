<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Useraddresses;
use DB;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    public function category_list()
    {
        $data = array(
            'title' => 'Category',
            'heading' => 'Category',
            'page' => 'blogs',
            'subpage' => 'category',
        );
        $data["list_data"] = DB::table('category')->orderBy('categoryId', 'DESC')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.master.category_list", compact('data'));
    }
    public function category_save(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $file = $request->file('image');
        if(!empty($file)){
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/category'), $fileName);
        } else {
            $fileName = "";
        }
        $data = array(
            'name' => $request->name,
            'image' => $fileName,
            'status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('category')->insert($data);
        $type = "success";
        $msg = 'Category created successfully.';
        Session::flash($type, $msg);
        return redirect('admin/category_list');
    }
    public function category_getvalue()
    {
        $getdata = DB::table('category')->where('categoryId', $_POST['categoryId'])->first();
        // print_r($getdata); exit;
        if (!empty($getdata->image)) {
            $img = '<img src="'.asset("uploads/category/".$getdata->image).'" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">';
        } else {
            $img = '<img src="'.asset('uploads/no_image.png') . '" class="img-thumbnail rounded-circle avatar-xl" id="output_image2">';
        }
        return response()->json([
            "id" => $getdata->categoryId,
            "name" => $getdata->name,
            "oldimage" => $getdata->image,
            "img" => $img,
            "status" => $getdata->status,
        ]);
    }
    public function category_update(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $file = $request->file('image');
        if(!empty($file)){
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/category'), $fileName);
        } else {
            $fileName = $request['oldimage'];
        }
        $Data = array(
            'name' => $request['name'],
            'image' => $fileName,
            'status' => $request['status'],
        );
        DB::table('category')->where('categoryId', $request['categoryId'])->update($Data);
        $type = "success";
        $msg = 'Category updated successfully. ';
        Session::flash($type, $msg);
        return redirect('admin/category_list');
    }
    function category_delete($categoryId)
    {
        $getdata = DB::table('category')->where('categoryId', $categoryId)->first();
        // if(!empty($getdata->image) && file_exists(public_path('uploads/category/'.$getdata->image)))
        // {
        //    @unlink(public_path('uploads/category/'.$getdata->image));
        // }
        $delete = DB::table('category')->where('categoryId', $categoryId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/category_list');
    }
    public function subcategory_list()
    {
        $data = array(
            'title' => 'Business subcategory',
            'heading' => 'List of Business Subcategories',
            'page' => '',
            'subpage' => '',
        );
        $data["list_category"] = DB::table('category')->where('status', '1')->get();
        $data["list_data"] = DB::table('subcategories')
            ->leftJoin('categories', 'categories.categoryId', '=', 'subcategories.categoryId')
            ->select('subcategories.*', 'categories.name')
            ->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.master.subcategory_list", compact('data'));
    }
    public function subcategory_save(Request $request)
    {
        $this->validate(request(), [
            'categoryId' => 'required',
            'subcategory_name' => 'required',
        ]);
        $data = array(
            'categoryId' => $request->categoryId,
            'subcategory_name' => $request->subcategory_name,
            'status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('subcategories')->insert($data);
        $type = "success";
        $msg = 'Business subcategory created successfully.';
        Session::flash($type, $msg);
        return redirect('admin/subcategory_list');
    }
    public function subcategory_getvalue()
    {
        $getdata = DB::table('subcategories')->where('subcategoryId', $_POST['subcategoryId'])->first();
        return response()->json([
            "id" => $getdata->subcategoryId,
            "categoryId" => $getdata->categoryId,
            "subcategory_name" => $getdata->subcategory_name,
            "status" => $getdata->status,
        ]);
    }
    public function subcategory_update(Request $request)
    {
        $this->validate(request(), [
            'categoryId' => 'required',
            'subcategory_name' => 'required',
        ]);
        $Data = array(
            'categoryId' => $request['categoryId'],
            'subcategory_name' => $request['subcategory_name'],
            'status' => $request['status'],
        );
        DB::table('subcategories')->where('subcategoryId', $request['subcategoryId'])->update($Data);
        $type = "success";
        $msg = 'Business subcategory updated successfully. ';
        Session::flash($type, $msg);
        return redirect('admin/subcategory_list');
    }
    function subcategory_delete($subcategoryId)
    {
        $delete = DB::table('subcategories')->where('subcategoryId', $subcategoryId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/subcategory_list');
    }
}
