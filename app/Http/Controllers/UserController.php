<?php
	
	namespace App\Http\Controllers;
	
	use App\Models\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Hash;
	
	class UserController extends Controller
	{
		public function logn_in(Request $request){
			$data = [
				'pageTitle' => 'User Sign_in'
			];
			return view('backend.pages.admin.auth.sign_in',$data);
		}  //End Method
		
		public function sign_up(Request $request){
			$data = [
				'pageTitle' => 'Create Account'
			];
			return view('backend.pages.admin.auth.sign_up',$data);
		}  //End Method
		
		public function home(Request $request){
			$data = [
				'pageTitle' => 'Budget'
			];
			return view('backend.pages.home',$data);
		}  //End Method
		
		public function createUser(Request $request){
			//Validate User Registration form
			$request->validate([
				'email'    => 'required|email|unique:users|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
				'password' => 'required|min:5',
			]);
			
			$users           = new User();
			$users->email    = $request->email;
			$users->password = Hash::make($request->password);
			$saved           = $users->save();
			
			if($saved){
				return redirect()->route('users.sign_in');
			}else{
				return redirect()->route('users.sign_up')->with('fail','Algo salió mal.');
			}
		}
		
	}
                                                                        git add clear
	