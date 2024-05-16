<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Auth;
use DB;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin-access');
    }
    public function userList()
    {
        $data = array(
            'title' => 'User',
            'heading' => 'List of Users',
            'page' => '',
            'subpage' => '',
        );
        $data["list_data"] = DB::table('users')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.user.list", compact('data'));
    }
    public function user_add()
    {
        $data = array(
            'title' => 'User Add',
            'page' => 'user_manage',
            'subpage' => 'userAdd'
        );
        $data['template'] = 'admin.sidebar';
        $data["get_role"] = DB::table('roles')->where('status', '1')->get();
        $data["userlist"] = User::get();
        $data['get_country'] = DB::table('countries')->where('status', '1')->get();
        return view("admin.user-add", compact('data'));
    }
    public function user_save(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:6',
            'password' => 'min:6|required_with:verify_password|same:verify_password',
            'phoneNumber' => 'required|min:10|max:10',
            'communication' => 'required',
        ]);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        // FOR IMAGE
        if ($request->hasFile('image')) {
            $files1 = $request->file('image');
            $filename1 = md5($files1->getClientOriginalName() . rand() . time()) . '.' . $files1->extension();
            $destinationPath = public_path('/uploads/user');
            $thumb_img = Image::make($files1->getRealPath())->resize(150, 100, function ($constraint) {
                $constraint->aspectRatio();
            });
            $thumb_img->save($destinationPath . '/' . $filename1, 80);
        } else {
            $filename1 = '';
        }
        if ($request['onoffswitch4'] != '1') {
            $status = '0';
        } else {
            $status = '1';
        }
        $UserData = new User();
        $UserData->name = $request['name'];
        $UserData->last_name = $request['last_name'];
        $UserData->email = $request['email'];
        $UserData->phone_code = $request['phone_code'];
        $UserData->phone = $request['phoneNumber'];
        $UserData->bank_detail = $request['bank_detail'];
        $UserData->communication = $request['communication'];
        $UserData->status = $status;
        $UserData->dob = date('Y-m-d', strtotime($request['dob']));
        $UserData->marriage_date = date('Y-m-d', strtotime($request['marriage_date']));
        $UserData->associate_code = $request['associate_code'];
        $UserData->latitude = $request['latitude'];
        $UserData->longitude = $request['longitude'];
        $UserData->country_id = $request['country_id'];
        $UserData->state_id = $request['state_id'];
        $UserData->password = Hash::make($request['password']);
        $UserData->created_at = date('y-m-d h:i:s A');
        $UserData->userprofileimage = $filename1;
        $UserData->save();
        $lastId = $UserData->id;
        if (!empty($request['role_id'])) {
            foreach ($request['role_id'] as $key => $value) {
                $data = array(
                    'user_id' => $lastId,
                    'role_id' => $value,
                    'partner_id' => $request['partner_id'],
                    'created_at' => date('Y-m-d h:i:s'),
                );
                Userrole::insert($data);
            }
        }
        $type = "success";
        $msg = 'New user created successfully. ';
        Session::flash($type, $msg);
        return redirect('users-master');
    }
    public function user_edit(Request $request, $userId)
    {
        $data = array(
            'title' => 'User Edit',
            'page' => 'user_manage',
            'subpage' => 'userEdit'
        );
        $data["userData"] = User::find($userId);
        $data["get_userrole"] = DB::table('userroles')->where('user_id', $userId)->get();
        $data["get_role"] = DB::table('roles')->where('status', '1')->get();
        $data['get_country'] = DB::table('countries')->where('status', '1')->get();
        $data['get_state'] = DB::table('states')->where('status', '1')->get();
        $data['template'] = 'admin.sidebar';
        return view("admin.user-edit", compact('data'));
    }
    public function user_update(Request $request, $userId)
    {
        $this->validate(request(), [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
            'phoneNumber' => 'required|min:10|max:10',
            'password' => 'required_with:verify_password|same:verify_password',
        ]);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '-1');
        // FOR IMAGE
        if ($request->hasFile('image')) {
            //UNLINK
            $path = public_path() . "/uploads/user/" . $request['oldProfileImage'];
            @unlink($path);
            $files1 = $request->file('image');
            $filename1 = md5($files1->getClientOriginalName() . rand() . time()) . '.' . $files1->extension();
            $destinationPath = public_path('/uploads/user');
            $thumb_img = Image::make($files1->getRealPath())->resize(150, 100, function ($constraint) {
                $constraint->aspectRatio();
            });
            $thumb_img->save($destinationPath . '/' . $filename1, 80);
        } else {
            $filename1 = $request['oldProfileImage'];
        }
        if (!empty($request['password'])) {
            $password = Hash::make($request['password']);
        } else {
            $password = $request['show_password'];
        }
        if ($request['onoffswitch4'] != '1') {
            $status = '0';
        } else {
            $status = '1';
        }
        $UserData = array(
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone_code' => $request['phone_code'],
            'phone' => $request['phoneNumber'],
            'password' => $password,
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'country_id' => $request['country_id'],
            'state_id' => $request['state_id'],
            'communication' => $request['communication'],
            'status' => $status,
            'updated_at' => date('Y-m-d H:i:s'),
            'userprofileimage' => $filename1,
        );
        User::where('id', $userId)->update($UserData);
        DB::table('userroles')->where('user_id', $userId)->delete();
        foreach ($request['role_id'] as $key => $value) {
            $data = array(
                'user_id' => $userId,
                'role_id' => $value,
                'created_at' => date('Y-m-d H:i:s'),
            );
            Userrole::insert($data);
        }
        $type = "success";
        $msg = 'User details updated successfully. ';
        Session::flash($type, $msg);
        return redirect('users-master');
    }
    public function userchangeStatus()
    {
        $userid = $_POST['userId'];
        $status = $_POST['status'];
        if ($status == 1) {
            $msg = ' Activated Successfully! ';
        } elseif ($status == 0) {
            $msg = ' Deactivated Successfully! ';
        }
        $update = DB::table('users')->where('id', $userid)->update(['status' => $status]);
        if ($update) {
            echo '["' . $msg . '", "success", "#A5DC86"]';
        } else {
            echo '["Some error occured, Please try again!", "error", "#DD6B55"]';
        }
    }
    public function deleteuser(Request $request, $userId)
    {
        $data = DB::table('users')->where('userId', $userId)->first();
        if (!empty($data)) {
            if (!empty($data->profile_image)) {
                $path2 = public_path() . "/uploads/user/" . $data->profile_image;
                @unlink($path2);
            }
            $delete = DB::table('users')->where('userId', $userId)->delete();
            if (!$delete) {
                $type = "error";
                $msg = ' User has been not deleted ';
            } else {
                $type = "success";
                $msg = ' User deleted successfully. ';
            }
        }
        return redirect('admin/users')->with($type, $msg);
    }
}
