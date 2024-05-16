<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Useraddresses;
use DB;
use Illuminate\Support\Str;
class CmsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    function cms()
    {
        $data = array(
            'title' => 'CMS',
            'heading' => 'List of Pages',
            'page' => 'cms',
            'subpage' => 'cmslist',
        );
        $data["list_data"] = DB::table('cms')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.cms.cms_list", compact('data'));
    }
    function editCms($cmsId)
    {
        $data = array(
            'title' => 'Update Page',
            'heading' => 'Update Page',
            'page' => 'cms',
            'subpage' => 'cmslist',
        );
        $data["cmsData"] = DB::table('cms')->where('cmsId', $cmsId)->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.cms.edit", compact('data'));
    }
    function updateCms(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
        ]);
        $Data = array(
            'title' => $request['title'],
            'description' => $request['description'],
        );
        DB::table('cms')->where('cmsId', $request['cmsId'])->update($Data);
        $type = "success";
        $msg = 'CMS updated successfully. ';
        Session::flash($type, $msg);
        return redirect('admin/cms');
    }
    function aboutlist()
    {
        $data = array(
            'title' => 'About',
            'heading' => 'About',
            'page' => 'cms',
            'subpage' => 'about',
        );
        $data["editData"] = DB::table('about')->where('id', '1')->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.cms.about", compact('data'));
    }
    function updateabout(Request $request)
    {
        $this->validate(request(), [
            'description1' => 'required',
            'description2' => 'required',
            'description3' => 'required',
            'description4' => 'required',
        ]);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        /*if ($request->image1 != NULL) {
            $image1 = $request->image1->store("about", "s3");
        } else {
            $image1 = $request['oldimage1'];
        }
        if ($request->image2 != NULL) {
            $image2 = $request->image2->store("about", "s3");
        } else {
            $image2 = $request['oldimage2'];
        }
        if ($request->image3 != NULL) {
            $image3 = $request->image3->store("about", "s3");
        } else {
            $image3 = $request['oldimage3'];
        }
        if ($request->image4 != NULL) {
            $image4 = $request->image4->store("about", "s3");
        } else {
            $image4 = $request['oldimage4'];
        }*/

        $file1 = $request->file('image1');
        if(!empty($file1)){
            $path1 = $request->file('image1')->store('temp');
            $fileName1 = $file1->getClientOriginalName();
            $file1->move(public_path('uploads/about'), $fileName1);
        } else {
            $fileName1 = $request['oldimage1'];
        }

        $file2 = $request->file('image2');
        if(!empty($file2)){
            $path2 = $request->file('image2')->store('temp');
            $fileName2 = $file2->getClientOriginalName();
            $file2->move(public_path('uploads/about'), $fileName2);
        } else {
            $fileName2 = $request['oldimage2'];
        }

        $file3 = $request->file('image3');
        if(!empty($file3)){
            $path3 = $request->file('image3')->store('temp');
            $fileName3 = $file3->getClientOriginalName();
            $file3->move(public_path('uploads/about'), $fileName3);
        } else {
            $fileName3 = $request['oldimage3'];
        }

        $file4 = $request->file('image4');
        if(!empty($file4)){
            $path4 = $request->file('image4')->store('temp');
            $fileName4 = $file4->getClientOriginalName();
            $file4->move(public_path('uploads/about'), $fileName4);
        } else {
            $fileName4 = $request['oldimage4'];
        }

        $Data = array(
            'heading1' => $request['heading1'],
            'description1' => $request['description1'],
            'heading2' => $request['heading2'],
            'description2' => $request['description2'],
            'heading3' => $request['heading3'],
            'description3' => $request['description3'],
            'description4' => $request['description4'],
            'image1' => $fileName1,
            'image2' => $fileName2,
            'image3' => $fileName3,
            'image4' => $fileName4,
        );
        //print_r($Data); die();
        DB::table('about')->where('id', $request['id'])->update($Data);
        $type = "msg";
        $msg = '["Updated about successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/aboutlist');
    }
    function homelist()
    {
        $data = array(
            'title' => 'Home',
            'heading' => 'Home',
            'page' => 'cms',
            'subpage' => 'home',
        );
        $data["editData"] = DB::table('home')->where('id', '1')->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.cms.home", compact('data'));
    }
    function updatehome(Request $request)
    {
        $this->validate(request(), [
            'description1' => 'required',
            'description2' => 'required',
        ]);
        /*if ($request->image2 != NULL) {
            $image2 = $request->image2->store("home", "s3");
        } else {
            $image2 = $request['oldimage2'];
        }*/
        $file = $request->file('image2');
        if(!empty($file)){
            $path = $request->file('image2')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/home'), $fileName);
        } else {
            $fileName = $request['oldimage2'];
        }
        if ($request['type'] == 1) {
            $myurl = $request['url'];
            $url = $this->getYoutubeEmbedUrl($myurl);
        }
        if ($request['type'] == 2) {
            // if ($request->video != NULL) {
            //     $url = $request->video->store("home", "s3");
            // } else {
            //     $url = $request['oldvideo'];
            // }
            if($_FILES['video']['name']!='') {
                $src = $_FILES['video']['tmp_name'];
                $filEnc = time();
                $avatar= rand(0000,9999)."-".$_FILES['video']['name'];
                $avatar1 = str_replace(array( '(', ')',' '), '', $avatar);
                $dest = public_path().'/uploads/home/'.$avatar1;
                if(move_uploaded_file($src,$dest)) {
                    $url  = $avatar1;
                    @unlink(public_path('uploads/home/'.$request['oldvideo']));
                }
            } else {
                $url  =$request['oldvideo'];
            }
        }
        $Data = array(
            'heading1' => $request['heading1'],
            'description1' => $request['description1'],
            'heading2' => $request['heading2'],
            'description2' => $request['description2'],
            'image2' => $fileName,
            'type' => $request['type'],
            'url' => $url,
        );
        //print_r($Data); die();
        DB::table('home')->where('id', $request['id'])->update($Data);
        $type = "msg";
        $msg = '["Updated home successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/homelist');
    }
    function getYouTubeThumb($pageVideUrl)
    {
        $link = $pageVideUrl;
        $video_id = explode("?v=", $link);
        if (!isset($video_id[1])) {
            $video_id = explode("youtu.be/", $link);
        }
        $youtubeID = $video_id[1];
        if (empty($video_id[1]))
            $video_id = explode("/v/", $link);
        $video_id = explode("&", $video_id[1]);
        $youtubeVideoID = $video_id[0];
        if ($youtubeVideoID) {
            return $youtubeVideoID;
        } else {
            return false;
        }
    }
    function getYoutubeEmbedUrl($url)
    {
        $shortUrlRegex = '/youtu.be\/([a-zA-Z0-9_-]+)\??/i';
        $longUrlRegex = '/youtube.com\/((?:embed)|(?:watch))((?:\?v\=)|(?:\/))([a-zA-Z0-9_-]+)/i';
        $youtube_id = null;
        if (preg_match($longUrlRegex, $url, $matches)) {
            $youtube_id = Str::afterLast($url, '/');
        }
        if (preg_match($shortUrlRegex, $url, $matches)) {
            $youtube_id = Str::afterLast($url, '/');
        }
        return 'https://www.youtube.com/embed/' . $youtube_id;
    }
}
