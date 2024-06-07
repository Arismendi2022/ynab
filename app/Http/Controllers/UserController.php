<?php
	
	namespace App\Http\Controllers;
	
	use App\Models\User;
	use App\Models\VerificationToken;
	use Illuminate\Http\Request;
	use illuminate\Support\Carbon;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Support\Facades\Hash;
	use Illuminate\Support\Str;
	
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
				if(!auth('users')->user()->verified){
					auth('users')->logout();
					return redirect()->back()
						->withErrors(['email' => 'Se requiere verificación. Si tiene una cuenta con nosotros, verifique su correo electrónico.'])
						->withInput($request->only('email'));
					
				}else{
					return redirect()->route('users.budget');
					
				}
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
				//Generate token
				$token = base64_encode(Str::random(64));
				
				VerificationToken::create([
					'user_type' => 'admin',
					'email'     => $request->email,
					'token'     => $token
				]);
				
				$actionLink          = route('users.verify',['token' => $token]);
				$data['action_link'] = $actionLink;
				$data['users_name']  = $request->name;
				$data['users_email'] = $request->email;
				
				//Send Activation link to this user email
				$mail_body = view('email-templates.user-verify-template',$data)->render();
				
				$mailConfig = array(
					'mail_from_email'      => env('EMAIL_FROM_ADDRESS'),
					'mail_from_name'       => env('EMAIL_FROM_NAME'),
					'mail_recipient_email' => $request->email,
					'mail_recipient_name'  => $request->name,
					'mail_subject'         => 'Verifica tu cuenta.',
					'mail_body'            => $mail_body
				);
				
				if(sendEmail($mailConfig)){
					return redirect()->back()
						->withErrors(['email' => 'Por favor revise su correo electrónico para verificar su cuenta antes de continuar.'])
						->withInput($request->only('email'));
				}else{
					return redirect()->back()
						->withErrors(['email' => 'Algo salió mal al enviar el enlace de verificación.'])
						->withInput($request->only('email'));
				}
			}else{
				return redirect()->back()
					->withErrors(['email' => 'Algo salió mal.'])
					->withInput($request->only('email'));
			}
		}//End Method
		
		public function verifyAccount(Request $request,$token){
			$verifyToken = verificationToken::where('token',$token)->first();
			
			if(!is_null($verifyToken)){
				$users = User::where('email',$verifyToken->email)->first();
				
				$email = $users->email;
				
				if(!$users->verified){
					$users->verified          = 1;
					$users->email_verified_at = Carbon::now();
					$users->save();
					
					return view('email-templates.user-confirmation')->with('email',$email);
					
					/*return redirect()->route('users.sign_in')
						->withErrors(['email' => 'Se ha verificado tu cuenta.
					 Inicie sesión con sus credenciales y complete la configuración de su cuenta de usuario.'])
						->withInput($request->only('email'));*/
				}else{
					return redirect()->route('users.sign_in')
						->withErrors(['email' => 'Se ha verificado tu cuenta. Ahora puedes iniciar sesión'])
						->withInput($request->only('email'));
				}
			}else{
				return redirect()->back()
					->withErrors(['email' => 'Algo salió mal.'])
					->withInput($request->only('email'));
			}
		} //End Method
		
		public function forgotPassword(Request $request){
			$data = [
				'pageTitle' => 'Forgot Password'
			];
			return view('backend.pages.admin.auth.forgot-password',$data);
			
		}// End method
		
		
	}
 