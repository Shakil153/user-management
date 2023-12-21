<?php
namespace App\Services\ApiCrud;
use App\Models\User;
use Illuminate\Http\Request;

class UserCrud implements CrudInterface
{
		public $user_id;
		public $request;
		
		public function __construct($user_id,$request){
			$this->user_id =$user_id;
			$this->request =$request;
		}
		public function index(){

			return User::all();

		}
		public function store(){

			User::create($this->request->all());
				
		}
		public function show(){

			 return User::where('id',$this->user_id)->first();

		}
		public function update(){

			User::where('id',$this->user_id)->update($this->request->all());

		}
		public function delete(){
			User::where('id',$this->user_id)->delete();
		}


}