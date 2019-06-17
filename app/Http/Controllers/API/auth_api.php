<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use App\category; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class auth_api extends Controller
{
    //

    public $successStatus = 200;
    /** 
         * login api 
         * 
         * @return \Illuminate\Http\Response 
         */ 

        public function login(){ 

            if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
                $user = Auth::user();
                $success['status']=1;
                $success['user']=$user;
                $success['token'] =  $user->createToken('MyApp')-> accessToken; 
                return response()->json(['result' => $success]); 
            } 
            else{ 
                $unsuccess['status']=0;
                $unsuccess['msg']='Username or Password is incorrect';
                return response()->json(['result' => $unsuccess]); 
            } 
        }
    /** 
         * Register api 
         * 
         * @return \Illuminate\Http\Response 
         */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
    if ($validator->fails()) { 
           
            return response()->json(['status'=>0,'error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
       // $input['password'] = bcrypt($input['password']);
        $user = User::where('email', $input['email'])->first();
        
        if(!$user)
        {
         $user = User::Create($input);
         $success['status'] = 1;
         $success['user'] =  $user;
         $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        
        return response()->json(['success'=>$success], $this-> successStatus);  
        }
        else
        {
            $response['status'] = 0;
            $response['msg']='User with this Email already exits so it cannot register again!';
           return response()->json(['error'=>$response]);
        }
        
    }
    /** 
         * details api 
         * 
         * @return \Illuminate\Http\Response 
         */ 
        public function details() 
        { 
            $user = Auth::user(); 
            return response()->json(['success' => $user], $this-> successStatus); 
        } 

        public function getAllUsers()
        {
            $users=User::all();
            return response()->json(['status'=>1,'success' => $users], $this-> successStatus); 

        }

        public function getAllCategories()
        {
           $categories=category::where('ct_status','active')->get();
           if($categories)
            {
                foreach($categories as $category)
                {
                  $category->image_path= asset('images').'/'.$category->ct_icone; 
                  $category->bannar_path= asset('images').'/'.$category->ct_image; 
                 
                }
                return response()->json(['status'=>1,'result' => $categories], $this-> successStatus); 
            }
            else
            {
                return response()->json(['status'=>0,'msg' => 'No Category exits in database']); 
            }
            

        }

        public function category_add(Request $request)
        {
            $validator = Validator::make($request->all(), [ 
                'name' => 'required', 
                'userfile' => 'required|image',  
            ]);
            // $this->validate($request, [
            //     'userfile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
        
            if (!$validator->fails()) {
               $image = $request->file('userfile');
                $ctname = $request->input('name');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $data =array(
                         'ct_name' => $ctname,                   
                         'ct_icone' => $name                   
                       );
                       
                  $data=category::create($data);
                  $id=$data->ct_id ;
                  if($id)
                  {
                    $category=category::where('ct_id',$id)->first();
                    return response()->json(['success' => $category], $this-> successStatus);
                  }
                  else
                  {
                    return response()->json(['unsuccess' => 'There is some error to add category please try again!']);
                  }
            }
            else
            {
                return response()->json(['unsuccess' => 'Plese Select the Icon image also!']);
            }

        }
}
