<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User; 
 
use Illuminate\Support\Facades\Auth; 
use Validator;

class profile_api extends Controller
{
    //
    public function name_edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $userId=Auth::user()->id;
        $data1 = $request->input();
        $data= array(
                    'name'=>$data1['name']
        );
        $flg=User::where('id',$userId)->update($data);
        $user=User::find($userId);
        $user->image_path= asset('images').'/'.$user->u_image;
        if($flg)
        {

            $result['status']=1;
            $result['result']=$user;
            return response()->json([$result]); 
        }
        else{
            $result['status']=0;
            $result['result']=$user;
            return response()->json($result);
        }
    }

    public function phone_edit(Request $request)
    {
        $request->validate([
            'phone' => 'required',
        ]);
        $userId=Auth::user()->id;
        $data1 = $request->input();
        $data= array(
                    'u_phone'=>$data1['phone']
        );
        $flg=User::where('id',$userId)->update($data);
        $user=User::find($userId);
        $user->image_path= asset('images').'/'.$user->u_image;
        if($flg)
        {

            $result['status']=1;
            $result['result']=$user;
            return response()->json([$result]); 
        }
        else{
            $result['status']=0;
            $result['result']=$user;
            return response()->json($result);
        }
    }

    public function password_edit(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
    if ($validator->fails()) { 

            $result['status']=0;
            $result['result']=$validator->errors();
            return response()->json($result);            
        }
        $userId=Auth::user()->id;
        $data1 = $request->input();
        $data1['password'] = bcrypt($data1['password']);
        $data= array(
                    'password'=>$data1['password']
        );
        $flg=User::where('id',$userId)->update($data);
        $user=User::find($userId);
        $user->image_path= asset('images').'/'.$user->u_image;
        if($flg)
        {

            $result['status']=1;
            $result['result']=$user;
            return response()->json([$result]); 
        }
        else{
            $result['status']=0;
            $result['result']=$user;
            return response()->json($result);
        }
    }

    public function address_edit(Request $request)
    {
        $request->validate([
            'address' => 'required',
        ]);
        $userId=Auth::user()->id;
        $data1 = $request->input();
        $data= array(
                    'u_address'=>$data1['address']
        );
        $flg=User::where('id',$userId)->update($data);
        $user=User::find($userId);
        $user->image_path= asset('images').'/'.$user->u_image;
        if($flg)
        {

            $result['status']=1;
            $result['result']=$user;
            return response()->json([$result]); 
        }
        else{
            $result['status']=0;
            $result['result']=$user;
            return response()->json($result);
        }
    }

    public function about_edit(Request $request)
    {
        $request->validate([
            'about' => 'required',
        ]);
        $userId=Auth::user()->id;
        $data1 = $request->input();
        $data= array(
                    'u_about'=>$data1['about']
        );
        $flg=User::where('id',$userId)->update($data);
        $user=User::find($userId);
        $user->image_path= asset('images').'/'.$user->u_image;
        if($flg)
        {

            $result['status']=1;
            $result['result']=$user;
            return response()->json($result); 
        }
        else{
            $result['status']=0;
            $result['result']=$user;
            return response()->json($result);
        }
    }

    public function picture_edit(Request $request)
    {
        $request->validate([
            'userfile' => 'required|image',
        ]);
        $userId=Auth::user()->id;
        $image= $request->file('userfile');

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $imagename);

        $data= array(
                    'u_image'=>$imagename
        );
        $flg=User::where('id',$userId)->update($data);
        $user=User::find($userId);
        $user->image_path= asset('images').'/'.$user->u_image;
        if($flg)
        {

            $result['status']=1;
            $result['result']=$user;
            return response()->json($result); 
        }
        else{
            $result['status']=0;
            $result['result']=$user;
            return response()->json($result);
        }
    }
    
}
