<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Useraddresses;
use DB;
use App\Mail\SubscribeMail;
use Illuminate\Support\Facades\Mail;
class BlogController extends Controller
{
    public function __construct() {
        $this->middleware('admin-access');
    }
    public function blog_list() {
        $data = array(
            'title' => 'Blog',
            'heading' => 'List of Blogs',
            'page' => 'blogs',
            'subpage' => 'blog',
        );
        $data["list_data"] = DB::table('blog')->orderBy('blogId', 'DESC')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.blog.list", compact('data'));
    }
    public function addblog() {
        $data = array(
            'title' => 'Add Blog',
            'heading' => 'Add Blog',
            'page' => 'blogs',
            'subpage' => 'blog',
        );
        $data['category'] = DB::table('category')->where('status', '1')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.blog.add", compact('data'));
    }
    public function blog_save(Request $request) {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
        ]);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        // FOR IMAGE
        // if ($request->image != NULL) {
        //     $image = $request->image->store("blog", "s3");
        // } else {
        //     $image = "";
        // }
        $file = $request->file('image');
        if(!empty($file)) {
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $fileName);
        } else {
            $fileName = "";
        }
        $data = array(
            'categoryId' => $request->categoryId,
            'title' => $request->title,
            'image' => $fileName,
            'description' => $request->description,
            'slug_url' => \Str::slug($request->title),
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('blog')->insert($data);
        $subscribe = DB::table('newsletters')->get();
        if (!$subscribe->isEmpty()) {
            $emails = [];
            foreach ($subscribe as $key) {
                $emails[] = $key->email;
            }
            $emailString = implode(',', $emails);
            $mailData = [
                "msg" => 'New Blog Posted. Please visit www.EmulateChrist.com to view it.',
            ];
            Mail::to(explode(',', $emailString))->send(new SubscribeMail($mailData));
        }
        $type = "msg";
        $msg = '["Added blog successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/bloglist');
    }
    public function editblog($blogId) {
        $data = array(
            'title' => 'Edit blog',
            'heading' => 'Edit blog',
            'page' => 'blogs',
            'subpage' => 'blog',
        );
        $data['getdata'] = DB::table('blog')->where('blogId', $blogId)->first();
        $data['category'] = DB::table('category')->where('status', '1')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.blog.edit", compact('data'));
    }
    public function blog_update(Request $request) {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
        ]);
        $file = $request->file('image');
        if(!empty($file)) {
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/blog'), $fileName);
        } else {
            $fileName = $request['oldimage'];
        }
        $Data = array(
            'image' => $fileName,
            'categoryId' => $request['categoryId'],
            'title' => $request['title'],
            'description' => $request['description'],
            'slug_url' => \Str::slug($request->title),
        );
        DB::table('blog')->where('blogId', $request['blogId'])->update($Data);
        $type = "msg";
        $msg = '["updated blog successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/bloglist');
    }
    public function viewblog($blogId)
    {
        $data = array(
            'title' => 'View Blog',
            'heading' => 'View Blog',
            'page' => 'blogs',
            'subpage' => 'blog',
        );
        $data['getdata'] = DB::table('blog')
            ->join('category', 'blog.categoryId', '=', 'category.categoryId')
            ->select('blog.*', 'category.name')
            ->where('blog.blogId', $blogId)
            ->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.blog.view", compact('data'));
    }
    function blog_delete($blogId) {
        $getdata = DB::table('blog')->where('blogId', $blogId)->first();
        // if(!empty($getdata->image) && file_exists(public_path('uploads/blog/'.$getdata->image)))
        // {
        //     @unlink(public_path('uploads/blog/'.$getdata->image));
        // }
        $delete = DB::table('blog')->where('blogId', $blogId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/bloglist');
    }
}