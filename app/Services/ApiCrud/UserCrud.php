<?php
namespace App\Services\ApiCrud;
use App\Models\User;

class UserCrud implements CrudInterface
{
		public $user_id;
		
		public function __construct($user_id){
			$this->user_id =$user_id;
		}
		public function index(){

			$user = User::where('id',$this->user_id)->first();

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
		}
		public function store(){

		}
		public function update(){

		}
		public function delete(){

		}


}