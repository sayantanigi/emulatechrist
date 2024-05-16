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
class PodcastController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    public function podcast_list()
    {
        $data = array(
            'title' => 'Podcast',
            'heading' => 'List of Podcast',
            'page' => 'podcastmgmt',
            'subpage' => 'podcast',
        );
        $data["list_data"] = DB::table('podcast')->orderBy('position', 'ASC')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.podcast.list", compact('data'));
    }
    public function addpodcast()
    {
        $data = array(
            'title' => 'Add Podcast',
            'heading' => 'Add Podcast',
            'page' => 'podcastmgmt',
            'subpage' => 'podcast',
        );
        $data['template'] = 'admin.sidebar';
        return view("admin.podcast.add", compact('data'));
    }
    public function podcast_save(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'podcast_url' => 'required',
        ]);
        $file = $request->file('image');
        if(!empty($file)) {
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/podcast'), $fileName);
        } else {
            $fileName = "";
        }
        $data = array(
            'title' => $request->title,
            'image' => $fileName,
            'description' => html_entity_decode($request['description']),
            'podcast_url' => $request->podcast_url,
            'slug_url' => \Str::slug($request->title),
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('podcast')->insert($data);
        $subscribe = DB::table('newsletters')->get();
        if (!$subscribe->isEmpty()) {
            $emails = [];
            foreach ($subscribe as $key) {
                $emails[] = $key->email;
            }
            $emailString = implode(',', $emails);
            $mailData = [
                "msg" => 'New Podcast Posted. Please visit www.EmulateChrist.com to view it.',
            ];
            Mail::to(explode(',', $emailString))->send(new SubscribeMail($mailData));
        }
        $type = "msg";
        $msg = '["Added Podcast Successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/podcast');
    }
    public function editpodcast($podcastId)
    {
        $data = array(
            'title' => 'Edit Podcast',
            'heading' => 'Edit Podcast',
            'page' => 'podcastmgmt',
            'subpage' => 'podcast',
        );
        $data['getdata'] = DB::table('podcast')->where('podcastId', $podcastId)->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.podcast.edit", compact('data'));
    }
    public function podcast_update(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'podcast_url' => 'required'
        ]);
        $file = $request->file('image');
        if(!empty($file)) {
            $path = $request->file('image')->store('temp');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads/podcast'), $fileName);
        } else {
            $fileName = $request['oldimage'];;
        }
        $Data = array(
            'image' => $fileName,
            'title' => $request['title'],
            'description' => html_entity_decode($request['description']),
            'podcast_url' => $request['podcast_url'],
            'slug_url' => \Str::slug($request->title),
        );
        DB::table('podcast')->where('podcastId', $request['podcastId'])->update($Data);
        $type = "msg";
        $msg = '["Updated podcast successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/podcast');
    }
    public function viewpodcast($podcastId)
    {
        $data = array(
            'title' => 'View Podcast',
            'heading' => 'View Podcast',
            'page' => 'podcastmgmt',
            'subpage' => 'podcast',
        );
        $data['getdata'] = DB::table('podcast')->where('podcastId', $podcastId)->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.podcast.view", compact('data'));
    }
    function podcast_delete($podcastId)
    {
        $getdata = DB::table('podcast')->where('podcastId', $podcastId)->first();
        // if(!empty($getdata->image) && file_exists(public_path('uploads/podcast/'.$getdata->image)))
        // {
        //     @unlink(public_path('uploads/podcast/'.$getdata->image));
        // }
        $delete = DB::table('podcast')->where('podcastId', $podcastId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/podcast');
    }
    function podcastposition(Request $request)
    {
        $position = $request['position'];
        $i = 1;
        foreach ($position as $k => $v) {
            $data = array(
                'position' => $i,
            );
            DB::table('podcast')->where('podcastId', $v)->update($data);
            $i++;
        }
        echo "1";
    }
    /*-----------  start Episode --------------*/
    public function episode_list()
    {
        $data = array(
            'title' => 'Episode',
            'heading' => 'List of Episode',
            'page' => 'podcastmgmt',
            'subpage' => 'episode',
        );
        $data["list_data"] = DB::table('episode')->orderBy('position', 'ASC')->get();
        $data["podcast"] = DB::table('podcast')->orderBy('position', 'ASC')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.episode.list", compact('data'));
    }
    public function addepisode()
    {
        $data = array(
            'title' => 'Add episode',
            'heading' => 'Add episode',
            'page' => 'podcastmgmt',
            'subpage' => 'episode',
        );
        $data['podcast'] = DB::table('podcast')->orderBy('position', 'ASC')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.episode.add", compact('data'));
    }
    public function episode_save(Request $request)
    {
        set_time_limit(6000);
        // FOR IMAGE
        if ($request->image != NULL) {
            //  $src = $_FILES['image']['tmp_name'];
            //   $filEnc = time();
            //   $avatar= rand(0000,9999)."-".$_FILES['image']['name'];
            //   $avatar1 = str_replace(array( '(', ')',' '), '', $avatar);
            //   $dest =public_path().'/uploads/episode/'.$avatar1;
            // if(move_uploaded_file($src,$dest))
            // {
            //         $image  = $avatar1;
            // }
            $image = $request->image->store("episode", "s3");
        } else {
            $image = "";
        }
        if ($request->attachment != NULL) {
            //  $src = $_FILES['attachment']['tmp_name'];
            //   $filEnc = time();
            //   $avatar= rand(0000,9999)."-".$_FILES['attachment']['name'];
            //   $avatar1 = str_replace(array( '(', ')',' '), '', $avatar);
            //   $dest =public_path().'/uploads/episode/'.$avatar1;
            // if(move_uploaded_file($src,$dest))
            // {
            //         $attachment  = $avatar1;
            // }
            $attachment = $request->attachment->store("episode", "s3");
        } else {
            $attachment = "";
        }
        $data = array(
            'podcastId' => $request->podcastId,
            'title' => $request->title,
            'image' => $image,
            'attachment' => $attachment,
            'description' => html_entity_decode($request['description']),
            'slug_url' => \Str::slug($request->title),
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('episode')->insert($data);
        $subscribe = DB::table('newsletters')->get();
        if (!$subscribe->isEmpty()) {
            $emails = [];
            foreach ($subscribe as $key) {
                $emails[] = $key->email;
            }
            $emailString = implode(',', $emails);
            $mailData = [
                "msg" => 'New Episode Posted. Please visit www.EmulateChrist.com to view it.',
            ];
            Mail::to(explode(',', $emailString))->send(new SubscribeMail($mailData));
        }
        $type = "msg";
        $msg = '["Added episode successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/episode');
    }
    public function editepisode($episodeId)
    {
        $data = array(
            'title' => 'Edit episode',
            'heading' => 'Edit episode',
            'page' => 'podcastmgmt',
            'subpage' => 'episode',
        );
        $data['getdata'] = DB::table('episode')->where('episodeId', $episodeId)->first();
        $data['podcast'] = DB::table('podcast')->orderBy('position', 'ASC')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.episode.edit", compact('data'));
    }
    public function episode_update(Request $request)
    {
        set_time_limit(6000);
        if ($request->image != NULL) {
            $image = $request->image->store("episode", "s3");
        } else {
            $image = $request['oldimage'];
        }
        if ($request->attachment != NULL) {
            $attachment = $request->attachment->store("episode", "s3");
        } else {
            $attachment = $request['oldattachment'];
        }
        $Data = array(
            'image' => $image,
            'attachment' => $attachment,
            'podcastId' => $request['podcastId'],
            'title' => $request['title'],
            'description' => html_entity_decode($request['description']),
            'slug_url' => \Str::slug($request->title),
        );
        DB::table('episode')->where('episodeId', $request['episodeId'])->update($Data);
        $type = "msg";
        $msg = '["Updated episode successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/episode');
    }
    public function viewepisode($episodeId)
    {
        $data = array(
            'title' => 'View episode',
            'heading' => 'View episode',
            'page' => 'podcastmgmt',
            'subpage' => 'episode',
        );
        $data['getdata'] = DB::table('episode')
            ->join('podcast', 'episode.podcastId', '=', 'podcast.podcastId')
            ->select('episode.*', 'podcast.title as podcastname')
            ->where('episode.episodeId', $episodeId)
            ->first();
        $data['template'] = 'admin.sidebar';
        return view("admin.episode.view", compact('data'));
    }
    function episode_delete($episodeId)
    {
        $getdata = DB::table('episode')->where('episodeId', $episodeId)->first();
        // if(!empty($getdata->image) && file_exists(public_path('uploads/episode/'.$getdata->image)))
        // {
        //     @unlink(public_path('uploads/episode/'.$getdata->image));
        // }
        //  if(!empty($getdata->attachment) && file_exists(public_path('uploads/episode/'.$getdata->attachment)))
        // {
        //     @unlink(public_path('uploads/episode/'.$getdata->attachment));
        // }
        $delete = DB::table('episode')->where('episodeId', $episodeId)->delete();
        $type = "msg";
        $msg = '["Deleted successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return redirect('admin/episode');
    }
    function getpodcast(Request $request)
    {
        $getepisode = DB::table('episode')->where('podcastId', $request['podcastId'])->get();
        $html = '';
        if (!$getepisode->isEmpty()) {
            $sr = 1;
            foreach ($getepisode as $key) {
                $podcast = DB::table('podcast')->where('podcastId', $key->podcastId)->first();
                if (!empty($key->image)) {
                    $img = '<img src="' . s3_asset($key->image) . '" class="img-thumbnail rounded-circle avatar-xl">';
                } else {
                    $img = '<img src="' . asset('uploads/no_image.png') . '" class="img-thumbnail rounded-circle avatar-xl">';
                }
                if (!empty($key->attachment)) {
                    $video = ' <video src="' . s3_asset($key->attachment) . '" controls width="200" height="100" style="background:#000;"></video>';
                } else {
                    $video = '<img src="' . asset('uploads/no_image.png') . '" class="img-thumbnail rounded-circle avatar-xl">';
                }
                $html .= ' <tr id="' . $key->episodeId . '">
                                                        <td>' . $sr . '</td>
                                                        <td>' . @$podcast->title . '</td>
                                                        <td>' . $img . '</td>
                                                        <td>' . $video . '</td>
                                                        <td>' . $key->title . '</td>
                                                            <td id="tooltip-container' . $key->episodeId . '">
                                                          <a href="' . url('admin/viewepisode/' . $key->episodeId) . '" class="me-3 text-warning"data-bs-toggle="tooltip"  data-bs-placement="top" title="View"><i class="mdi mdi-eye font-size-18"></i></a>
                                                            <a href="' . url('admin/editepisode/' . $key->episodeId) . '" class="me-3 text-primary"data-bs-toggle="tooltip"  data-bs-placement="top" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                            <a href="javascript:void(0);" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deleteepisode(' . $key->episodeId . ')"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                                             <a href="' . s3_asset($key->attachment) . '" class="me-3 text-danger"data-bs-toggle="tooltip"  data-bs-placement="top" title="Download" download><i class="fa fa-download font-size-18"></i></a>
                                                        </td>
                                                    </tr>';
                $sr++;
            }
        } else {
            $html .= '<tr><td colspan="5" class="text-center">No Data Found</td></tr>';
        }
        echo $html;
    }
    function updateposition(Request $request)
    {
        $position = $request['position'];
        $i = 1;
        foreach ($position as $k => $v) {
            $data = array(
                'position' => $i,
            );
            DB::table('episode')->where('episodeId', $v)->update($data);
            $i++;
        }
        echo "1";
    }
    /*-----------  End Episode --------------*/
}