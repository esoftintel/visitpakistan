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
                $success['token'] =  $user->createToken('MyApp')-> accessToken; 
                return response()->json(['success' => $success], $this-> successStatus); 
            } 
            else{ 
                return response()->json(['error'=>'Unauthorised'], 401); 
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
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
        return response()->json(['success'=>$success], $this-> successStatus); 
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
            return response()->json(['success' => $users], $this-> successStatus); 

        }

        public function getAllCategories()
        {
            $categories=category::where('ct_status','active')->get();
            if($categories)
            {
                return response()->json(['success' => $categories], $this-> successStatus); 
            }
            else
            {
                return response()->json(['Unsuccess' => 'No Category exits in database']); 
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
