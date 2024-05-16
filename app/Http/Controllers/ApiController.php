<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Rules\ReCaptcha;

class ApiController extends Controller
{

    public function episode_save(Request $request)
    {

        $this->validate(request(), [
            'title'  => 'required',
            'image'  => 'required|max:1000000000000000|image|mimes:jpeg,png,jpg,gif',
        ]);
        ini_set('max_execution_time', 0);

        ini_set('memory_limit', '-1');

        // FOR IMAGE
        if ($_FILES['image']['name'] != '') {
            $src = $_FILES['image']['tmp_name'];
            $filEnc = time();
            $avatar = rand(0000, 9999) . "-" . $_FILES['image']['name'];
            $avatar1 = str_replace(array('(', ')', ' '), '', $avatar);

            $dest = public_path() . '/uploads/episode/' . $avatar1;

            if (move_uploaded_file($src, $dest)) {
                $image  = $avatar1;
            }
        } else {
            $image  = "";
        }

        if ($_FILES['attachment']['name'] != '') {
            $src = $_FILES['attachment']['tmp_name'];
            $filEnc = time();
            $avatar = rand(0000, 9999) . "-" . $_FILES['attachment']['name'];
            $avatar1 = str_replace(array('(', ')', ' '), '', $avatar);

            $dest = public_path() . '/uploads/episode/' . $avatar1;

            if (move_uploaded_file($src, $dest)) {
                $attachment  = $avatar1;
            }
        } else {
            $attachment  = "";
        }

        $data = array(
            'podcastId' => $request->podcastId,
            'title' => $request->title,
            'image' => $image,
            'attachment' => $attachment,
            'description' => $request->description,
            'slug_url' => \Str::slug($request->title),
            'created_at' => date('Y-m-d H:i:s'),
        );
        DB::table('episode')->insert($data);
        $type = "msg";
        $msg = '["Add episode successfully", "success", "#A5DC86"]';
        Session::flash($type, $msg);
        return ["status" => true];
    }
}
