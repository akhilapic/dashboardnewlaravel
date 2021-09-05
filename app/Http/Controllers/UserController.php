<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auser;
use Illuminate\Support\Facades\Hash;
use Validator;
use DB;
class UserController extends Controller
{
    public function newuser()
    {
        return view('admin/user/newuser');
    }
    
    public function userlist()
    {
        $userdata =Auser::all();
        return view('admin/user/userlist',compact('userdata'));
    }

    public function checkuseremail(Request $request)
    {
        $email = $request->input("email");
        $userData = Auser::where('email', $email)->first();
        
        if(is_null($userData))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function checkuserphone(Request $request)
    {
        $phone = $request->input("phone");
        $userData = Auser::where('phone', $phone)->first();
        
        if(is_null($userData))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public function saveuser(Request $request)
    {
        $user = new Auser;
        $validator = Validator::make($request->all(),[
			'first_name' =>'required',
            'last_name' =>'required',
            'phone' =>'required|unique:ausers',
			'email' =>'required|unique:ausers',
			'password' =>'required|min:6',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($validator->fails())
        {
            if($validator->fails()){
                $errors=$validator->errors()->all();
                $result=array('status'=>false,'errors'=>$errors);
            }
        }
    //     $email_status = Auser::find(['email',$request->email])->first();
    //    // dd($email_status);
        $email_status=DB::table('users')->where('email',$request->email)->first();
		if(!is_null($email_status)){
			$result=array('status'=>false,'message'=>'Email Already Exist');
		}
        else
        {
            // $name = $request->file('image')->getClientOriginalName();
            // $path = $request->file('image')->store('public/images');
            if(!empty($request->hasfile('image')))
            {
                $imageName = time().'.'.$request->image->extension();
     
                $request->image->move(public_path('images'), $imageName);

                $user->image = $imageName;
            }
            else{
                $user->image='';
            }
            $user->phone = $request->input('phone');
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->password = Hash::make($request->input('password'));
            $user->save();
            $result=array('status'=>true,'message'=> 'User Register Successfully');
        }
        echo json_encode($result);
    }

    public function getUserEditData($id)
    {
      
        if(isset($id))
        {
            $user = Auser::where('id',$id)->first();
            return view('admin/user/newuser',compact('user'));
        }
    }
    public function edituser(Request $request)
    {
        $user = new Auser;
        $validator = Validator::make($request->all(),[
			'first_name' =>'required',
            'last_name' =>'required',
            'phone' =>'required',
			'email' =>'required',
	        'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if($validator->fails())
        {
            if($validator->fails()){
                $errors=$validator->errors()->all();
                $result=array('status'=>false,'errors'=>$errors);
            }
        }
        else
        {
            $data=array();
            $oldimage = $request->old_iamge;
        //    dd($request->input());
            if(!empty($request->hasfile('image')))
            {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                //$user->image = $imageName;
                $data['image']=$imageName;
                
                if(!empty($oldimage) && file_exists('images/'.$oldimage))
                {
                    unlink('images/'.$oldimage);
                }
            }
            //    $user->phone = $request->phone;
                $data['phone']=$request->phone;
              //  $user->first_name = $request->first_name;
                $data['first_name']=$request->first_name;
                //$user->last_name = $request->last_name;
                $data['last_name']=$request->last_name;
            //    $user->email = $request->email;
                $data['email']=$request->email;
              //  $user->address = $request->address;
                $data['address']=$request->address;
            //    enablequerylog();
                $user->where("id",$request->id)->update($data);
              //  getquerylog();
                $result=array('status'=>true,'message'=> 'User Details Update Successfully');
        }
        echo json_encode($result);
    }
    public  function deleteuser(Request $request)
    {
        $user = new Auser;
    
        $id = $request->id;
        $image = $request->image;
        if(file_exists('images/'.$image))
        {
            unlink('images/'.$image);
        }
        $user->where("id",$id)->delete();
    //    dd($request->input());
        $result=array('status'=>true, 'id'=>$id,'message'=> 'Deleted successfully.');
        echo json_encode($result);
    }
    public function getViewUserData($id)
    {
        if(isset($id))
        {
            $user = Auser::where('id',$id)->first();
            return view('admin/user/viewuser',compact('user'));
        }
    }

    public function userestatus(Request $request)
    {
        $data['status'] = $request->status;
        
        $user =  Auser::where('id',$request->id)->update($data);
        $result=array('status'=>true, 'url'=>"/admin/User-list");
        echo json_encode($result);
    }
}