<?php
	
	namespace App\Http\Controllers;
	
	use App\Models\User;
	use Illuminate\Support\Facades\Auth;
	use Illuminate\Http\Request;
	
	class MainController extends Controller
	{
		public function budget(Request $request){
			$admin = null;
			if(Auth::guard('users')->check()){
				$admin = User::findOrFail(Auth()->id());
			};
			return view('frontend.pages.admin.budget',compact('admin'));
		}//End Method
		
		//Modal new budgte
		public function newBudget(Request $request){
			$data = [
				'pageTitle' => 'New Budget'
			];
			return view('frontend.pages.settings.modal-new-budget',$data);
		}//End method
		
		// Muestra la página de ajustes
		public function budgetSettings(Request $request){
			$data = [
				'pageTitle' => 'Budget Settings'
			];
			return view('frontend.pages.settings.modal-budget-settings', $data);
		}//End method
	}



