<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Services\ApiCrud\CrudService;
use App\Services\ApiCrud\UserCrud;
class UserController extends Controller
{
    public function index(){
         // calling crud service
         $user =(new CrudService())->index(new UserCrud($id=Null,$request=Null));
         // Condition for data found or not
         if(count($user)>0){
                return response()->json([
                    'status'=>200,
                    'user' =>$user,
                ]);

            }else{
                return [
                    'status' =>404,
                    'message'=>'No data found'
                ];
            }
        
    }

    public function store(Request $request){
            // validate rulse
            $validator= Validator::make($request->all(),[
                'user_name' =>'required|unique:users|max:191',
                'first_name' =>'required|max:191',
                'last_name' =>'required|max:191',
                'email' =>'required|email|unique:users|max:191',
                'password' =>'required|string|max:191',

            ]);
            // If Condition start here....
            if($validator->fails()){
                return response()->json([
                    'status'=>422,
                    'message'=> $validator->messages(),
                ]);
            }else{
                // calling crud service
                $user =  (new CrudService())->store(new UserCrud(Null,$request));
                return response()->json([
                    'status'=>200,
                    'message'=>'User Created Succesfully'
                ]);
            }
            //If condition end here....
    }
    public function show($id){
        // calling crud service
        $user= (new CrudService())->show(new UserCrud($id,Null));
        // If Condition start here....
        if($user){
                return response()->json([
                    'status'=>200,
                    'user' =>$user,
                ]);
        }else{
                return [
                    'status' =>404,
                    'message'=>'No data found'
                ];
        }
        //If condition end here...
        
    }

    public function edit($id){
         // calling crud service
        $user= (new CrudService())->show(new UserCrud($id,Null));

            return response()->json([
                'status'=>200,
                'user' =>$user,
            ]);
        
    }

    public function update(Request $request, $id){
            // validate rulse
            $validator= Validator::make($request->all(),[
                'first_name' =>'required|max:191',
                'last_name' =>'required|max:191',
                'email' =>'required|max:191',
                'password' =>'required|string|max:191',

            ]);
            // If Condition start here....
            if($validator->fails()){
                return response()->json([
                    'status'=>422,
                    'message'=> $validator->messages(),
                ]);
            }else{
                // calling crud service
                $user =  (new CrudService())->update(new UserCrud($id,$request));
                return response()->json([
                    'status'=>200,
                    'message'=>'User Update Succesfully'
                ]);
            }
            //If condition end here...

    }

    public function delete($id){
            // calling crud service
            (new CrudService())->delete(new UserCrud($id,Null));
                return response()->json([
                'status'=>200,
                'message'=>'User Delete Succesfully'
                ]);
    }
}
