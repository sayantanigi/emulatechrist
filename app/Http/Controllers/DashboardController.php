<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function __construct()
        {
           $this->middleware('user-access');
        }
	 public function index()
   {
      
      $data['title']='Dashboard';
      $data['page']='dashboard';
      $data['template'] = 'dashboard.sidebar';
      $data['userdata'] = DB::table('users')->where('userId',Session::get('userId'))->first();
       $data['address'] = DB::table('address')->where('userId',Session::get('userId'))->first();
      $data['orders'] = DB::table('orders')->where('userId',Session::get('userId'))->limit(3)->get();
       return view('dashboard.dashboard',compact('data'));
   }
    public function profile()
   {
      $data['title']='Profile';
      $data['page']='profile';
      $data['template'] = 'dashboard.sidebar';
      $data['userdata'] = DB::table('users')->where('userId',Session::get('userId'))->where('status','1')->first();
       return view('dashboard.profile',compact('data'));
   }

   function updateprofile(Request $request)
   {

      // FOR IMAGE
         if ($request->hasFile('image')) {

            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/user');
            $image->move($destinationPath, $fileName);
            $image  = @$fileName;
            @unlink(public_path('uploads/user/'.$request['oldimage']));
        }  
        else{
            $image=$request['oldimage'];
        }
    $data=array(
      'name'=>$request['name'],
      'email'=>$request['email'],
      'phone'=>$request['phone'],
      'profile_image'=>$image,
    );
    DB::table('users')->where('userId',Session::get('userId'))->update($data);
     $type = "msg";
      $msg = '["updated profile successfully", "success", "#A5DC86"]';
      Session::flash($type, $msg);
      return redirect('profile');
   }

   public function orders()
   {
      $data['title']='Orders';
       $data['page']='orders';
       $data['orders'] = DB::table('orders')->where('userId',Session::get('userId'))->get();
       $data['template'] = 'dashboard.sidebar';
      
       return view('dashboard.orders',compact('data'));
   }
    public function orderdetail($orderId)
   {
      $data['title']='Order detail';
       $data['page']='orders';
       $data['template'] = 'dashboard.sidebar';
        $data['setting']=DB::table('settings')->first();
    $data['orders'] = DB::table('orders')->where('userId',Session::get('userId'))->where('orderId',$orderId)->first();
      $data['orderdetail'] = DB::table('orderdetail')->where('orderId',@$orderId)->get();
       return view('dashboard.orderdetail',compact('data'));
   }

   
   function address()
   {
   	 $data['title']='Address';
   	 $data['page']='address';
      $data['template'] = 'dashboard.sidebar';
     $data['address'] = DB::table('address')->where('userId',Session::get('userId'))->first();
     return view('dashboard.address',compact('data'));
   }
    function editaddress()
   {
    $data['title']='Edit Address';
    $data['page']='editaddress';
     $data['template'] = 'dashboard.sidebar';
     $data['address'] = DB::table('address')->where('userId',Session::get('userId'))->first();
      $data['country']=DB::table('countries')->get();
     $data['userdata'] = DB::table('users')->where('userId',Session::get('userId'))->first();
     return view('dashboard.editaddress',compact('data'));
   }
   function updateaddress(Request $request)
   {
    $check=DB::table('address')->where('userId',Session::get('userId'))->first();
    $data=array(
        'userId'=>Session::get('userId'),
        'fname'=>$request['fname'],
        'lname'=>$request['lname'],
        'company_name'=>$request['company_name'],
        'country'=>$request['country'],
        'address'=>$request['address'],
        'apartment'=>$request['apartment'],
        'city'=>$request['city'],
        'state'=>$request['state'],
        'zip'=>$request['zip'],
        'email'=>$request['email'],
        'phone'=>$request['phone'],
        'created_at'=>date('Y-m-d H:i:s'),
    );
    if(!empty($check))
    {
    DB::table('address')->where('userId',Session::get('userId'))->update($data);
   }
   else{
     DB::table('address')->insert($data);
   }
           $type = "msg";
            $msg = '["Address successfully", "success", "#A5DC86"]';
         Session::flash($type, $msg); 
      return redirect('editaddress');
   
   }
   function password()
   {
   	$data['title']='Password';
     $data['page']='password';
      $data['template'] = 'dashboard.sidebar';
     return view('dashboard.password',compact('data'));
   }

   function resetpassword()
   {
     $getdata =DB::table('users')->where('userId',Session::get('userId'))->first();
      if(Hash::check($_POST['cpassword'],$getdata->password))
      {
    $data=array(
        'password'=>Hash::make($_POST['npassword']),
    );
    DB::table('users')->where('userId',Session::get('userId'))->update($data);
    echo "1";
    }
    else{
        echo "0";
    }

   }
   
   function cart()
   {
    $data['title']='Cart';
     $data['page']='cart';
     $data['setting']=DB::table('settings')->first();
     $data['cartlist']=DB::table('carts')->where('userId',Session::get('userId'))->get();
     return view('dashboard.cart',compact('data'));
   }

   function addtocart()
   {
       $checkcart=DB::table('carts')->where('userId',Session::get('userId'))->where('productId',$_POST['productId'])->first();
       if(empty($checkcart))
       {
      $data=array(
         'userId'=>Session::get('userId'),
         'productId'=>$_POST['productId'],
         'quantity'=>1,
         'created_at'=>date('Y-m-d H:i:s'),
      );
      DB::table('carts')->insert($data);
   }
    else
    {
       
        if(!empty($_POST['quantity']) && !empty($_POST['productId']))
        {
             $new_quantity=$_POST['quantity'];
              $data=array(
        'quantity'=>$new_quantity,
      );
      DB::table('carts')->where('cartId',$checkcart->cartId)->update($data);
         $setting=DB::table('settings')->first();
         if($_POST['val']==1)
         {
             $subtotal=$_POST['sub_total']+$_POST['price'];
         }
         elseif($_POST['val']==2){
             $subtotal=$_POST['sub_total']-$_POST['price'];
         }
          
      $totalamt=@$subtotal+@$setting->shipping+@$setting->tax;

      return response()->json([
         'subtotal'=>round($subtotal,2),
        'totalamt'=>round($totalamt,2),
        ]); 
      
        }
        else{
        $new_quantity=$checkcart->quantity+1;
         $data=array(
        'quantity'=>$new_quantity,
      );
      DB::table('carts')->where('cartId',$checkcart->cartId)->update($data);
             }
           
    }
      $totalcart=DB::table('carts')->where('userId',Session::get('userId'))->count();

      if($totalcart){
           $cart=$totalcart;
       }
       return response()->json([
        "cart" =>$cart, 
        ]);

   }

   function deletecart($cartId)
   {
      $delete = DB::table('carts')->where('cartId', $cartId)->delete();
           $type = "msg";
            $msg = '["Deleted successfully", "success", "#A5DC86"]';
         Session::flash($type, $msg); 
      return redirect('cart');
   }

   function checkout()
   {
      
      $data['title']='Checkout';
     $data['page']='checkout';
     $data['setting']=DB::table('settings')->first();
     $data['userdata']=DB::table('users')->where('userId',Session::get('userId'))->first();
     $data['address']=DB::table('address')->where('userId',Session::get('userId'))->first();
     $data['billing_address']=DB::table('billing_address')->where('userId',Session::get('userId'))->orderBy('id','DESC')->first();
     $data['cartlist']=DB::table('carts')->where('userId',Session::get('userId'))->get();
     $data['country']=DB::table('countries')->get();
     return view('checkout',compact('data')); 
   }

   function savebilling(Request $request)
   {
     $data=array(
            'userId'=>Session::get('userId'),
            'fname'=>$_POST['fname'],
            'lname'=>$_POST['lname'],
            'company_name'=>$_POST['company_name'],
            'country'=>$_POST['country'],
            'address'=>$_POST['address'],
            'apartment'=>$_POST['apartment'],
            'city'=>$_POST['city'],
            'state'=>$_POST['state'],
            'zip'=>$_POST['zip'],
            'email'=>$_POST['email'],
            'phone'=>$_POST['phone'],
            'notes'=>$_POST['notes'],
            'created_at'=>date('Y-m-d H:i:s'),
        );
        DB::table('billing_address')->insert($data);
         $billinglastId = DB::getPdo()->lastInsertId();

        $getOrder=DB::table('orders')->orderBy('orderId','DESC')->first();

            if(!empty($getOrder->order_no))
            {
                $ex=explode('-', $getOrder->order_no);
                $count=$ex[1]+1;
                $check=strlen($count);
            $final= ($check==1)?'0000'.$count:(($check==2)?'000'.$count:(($check==3)?'00'.$count:(($check==4)?'0'.$count:$count)));
            $orderno=$ex[0].'-'.$final;
                
            }
            else{
                $orderno='SKYWRAP-00001';
            }
            if($request['terms']!='1')
            {
                $terms=0;
            }
            else{
                $terms=1;
            }
        $insert_order=array(
            'userId'=>Session::get('userId'),
            'order_no'=>$orderno,
            'billingId'=>$billinglastId,
            'totalprice'=>$_POST['totalprice'],
            'couponcode'=>$_POST['couponcode'],
            'discount'=>$_POST['discount'],
            'terms'=>$terms,
        );
          DB::table('orders')->insert($insert_order);
         $orderlastId=DB::getPdo()->lastInsertId();;
         $cartlist=DB::table('carts')->where('userId',Session::get('userId'))->get();
                  foreach($cartlist as $key) {
            $price=DB::table('products')->where('productId',$key->productId)->first();

          $insert_orderdetail=array(
              'orderId'=>$orderlastId,
              'productId'=>$key->productId,
              'quantity'=>$key->quantity,
              'price'=>$price->price,
              'created_at'=>date('Y-m-d H:i:s'),
          );
           DB::table('orderdetail')->insert($insert_orderdetail);
      }
           $update_order=array(
             'payment_status'=>'2',
             'payment_method'=>$_POST['checkout_payment_method'],
             'payment_date'=>date('Y-m-d H:i:s'),
           );
           DB::table('orders')->where('orderId',$orderlastId)->update($update_order);
           DB::table('carts')->where('userId',Session::get('userId'))->delete();

          $mailData = [
        "fullname" =>@$_POST['fname'].' '.@$_POST['lname'],
                 ];

        Mail::to($_POST['email'])->send(new DemoMail($mailData));

             $type = "msg";
            $msg = '["Order successfully", "success", "#A5DC86"]';
             Session::flash($type, $msg); 
            return redirect('orders');
   }

   function applycoupon(Request $request)
   {

     $getdata=DB::table('coupon')->where('coupon_code',$request['coupon_code'])->where('status','1')->first();
     if(!empty($getdata))
     {
        $couponAmount=($request['totalamt']*@$getdata->discount/100);
        $totalamount=$request['totalamt']-@$couponAmount;
       $request->session()->put('amount', $totalamount);
       $request->session()->put('discount', @$getdata->discount);
       $request->session()->put('couponcode', @$request['coupon_code']);
       return response()->json([
        'totalamount'=>round($totalamount,2),
        'discount'=>@$getdata->discount,
        'status'=>1,
        ]);
     }
     else{

        $totalamount=$request['totalamt'];
         $request->session()->put('amount', $totalamount);
        return response()->json([
        'totalamount'=>$totalamount,
        'status'=>0,
        ]); 
     }
     
    
   }


}