<?php
	
	namespace App\Http\Controllers;
	
	use App\Models\User;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Hash;
	
	class UserController extends Controller
	{
		public function loginHandler(Request $request){
			
			$request->validate([
				'email'    => 'required|email|exists:users',
				'password' => 'required|min:5|max:30'
			],[
				'email.required'    => 'Se requiere correo electrónico.',
				'email.email'       => 'Dirección de correo electrónico no válida.',
				'email.exists'      => 'El correo electrónico no existe en el sistema.',
				'password.required' => 'Se requiere contraseña.',
				'min'               => 'La contraseña debe tener al menos 5 caracteres.',
				'max'               => 'La contraseña no debe exceder más de 30 caracteres.'
			]);
			
			$creds = [
				'email'    => $request->email,
				'password' => $request->password
			];
			
			if(Auth::guard('users')->attempt($creds)){
				return redirect()->route('users.budget');
			}else{
				return redirect()->back()
					->withErrors(['password' => 'Contraseña incorrecta.'])
					->withInput($request->only('email'));
			}
			
		}//End Method
		
		public function logoutHandler(Request $request){
			Auth::guard('users')->logout();
			return redirect()->route('users.sign_in');
			
		}  //End Method
		
		public function budget(Request $request){
			$data = [
				'pageTitle' => 'Budget'
			];
			return view('backend.pages.budget',$data);
		}//End Method
		
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
				return redirect()->route('users.sign_up')->validate('fail','Algo salió mal.');
			}
		}//End Method
		
	}
 