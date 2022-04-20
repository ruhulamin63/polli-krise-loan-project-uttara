<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use PDF;

class LoginController extends Controller
{
    public function login_index() {

        return view('authenticate.login-from');
    }
    public function postLogin() {
        
        return view('authenticate.login-from');
    }


    public function registration(){

        return view('authenticate.register-from');
    }

    public function postRegistration(Request $request){

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'address' => 'required',
            'day_of_birth' => 'requried',
            'month_of_birth' => 'requried',
            'year_of_birth' => 'requried',
            'nid' => 'required',
            'image' => 'required',
            'nid_front_side_image' => 'required',
            'nid_back_side_image' => 'required',
            'contact_number' => 'required',
            'password' => 'required',
        ]);

        //dd("test");

        $data=array();
        $data['name'] = $request->name;
        $data['father_name'] = $request->father_name;
        $data['mother_name'] = $request->mother_name;
        $data['address'] = $request->address;
        $data['dob_day'] = $request->dob_day;
        $data['dob_month'] = $request->dob_month;
        $data['dob_year'] = $request->dob_year;
        $data['nid'] = $request->nid;

        $data['contact_number'] = $request->contact_number;
        $data['password'] = Hash::make($request->password);

        if($request->image !=""){
            $image = $request->file('image');
            $image_name=$image->getClientOriginalName();
            $image_ext=$image->getClientOriginalExtension();
            $image_new_name =$request->username.date("YmdHis");
            $image_full_name=$image_new_name.'.'.$image_ext;
            $upload_path='images/nid-image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $imageData='/images/nid-image/'.$image_full_name;

            $data['image']=$imageData;
        }

        if($request->nid_front_side_image !=""){
            $image = $request->file('nid_front_side_image');
            $image_name=$image->getClientOriginalName();
            $image_ext=$image->getClientOriginalExtension();
            $image_new_name =$request->username.date("YmdHis");
            $image_full_name=$image_new_name.'.'.$image_ext;
            $upload_path='images/nid-front-part/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $imageData='/images/nid-front-part/'.$image_full_name;

            $data['nid_front_side_image']=$imageData;
        }

        if($request->nid_back_side_image !=""){
            $image = $request->file('nid_back_side_image');
            $image_name=$image->getClientOriginalName();
            $image_ext=$image->getClientOriginalExtension();
            $image_new_name =$request->username.date("YmdHis");
            $image_full_name=$image_new_name.'.'.$image_ext;
            $upload_path='images/nid-back-part/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $imageData='/images/nid-back-part/'.$image_full_name;

            $data['nid_back_side_image']=$imageData;
        }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $thumbnail = time() . '.' . $image->getClientOriginalExtension();
        //     Image::make($image)->resize(400, 400)->save('images/register-image/'. $thumbnail);
        // }else {
        //     $thumbnail = null;
        // }


        $query = DB::table('users')->insert($data);

        //$token = $user->createToken('loanApiProjectToken')->plainTextToken;

        
        // $response = [
        //     'user' => $user,
        //     'token' => $token,
        // ];


            $url = "https://sms.solutionsclan.com/api/sms/send";
            $sms = [
                "apiKey"=> "A00027601a70cca-cb11-4b43-9f4e-efd223fa024c",
                "contactNumbers"=> $request->contact_number,
                "senderId"=> "8809612440635",
                "textBody"=> "আপনার আবাদেনটি সফলভাবে গ্রহণ করা হয়েছে । আবেদনটি অনুমোদনের জন্য অনুগ্রহ করে অপেক্ষা করুন ।"
            ];
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($sms));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            $response = curl_exec($ch);
            echo "$response";
            curl_close($ch);
    
       

        if($query){
            return redirect()
                ->back()
                ->with([
                    'error' => false,
                    'message' => 'আপনার আবাদেনটি সফলভাবে গ্রহণ করা হয়েছে । আবেদনটি অনুমোদনের জন্য অনুগ্রহ করে অপেক্ষা করুন'
                ]);
        }else{
            return redirect()
            ->route('register')
            ->with([
                'error' => true,
                'message' => 'আপনার আবাদেনটি গ্রহণ করা সম্ভব হচ্ছে না ।'
            ]);
        }
    }
}
