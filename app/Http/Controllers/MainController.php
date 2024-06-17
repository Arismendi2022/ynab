<?php
	
	namespace App\Http\Controllers;
	
	use Illuminate\Http\Request;
	
	class MainController extends Controller
	{
		public function budget(Request $request){
			$data = [
				'pageTitle' => 'Budget | Arismendi Budget'
			];
			return view('frontend.pages.admin.budget',$data);
		}//End Method
		
		// Muestra la página de ajustes
		public function budgetSettings(Request $request){
			$data = [
				'pageTitle' => 'Budget Settings'
			];
			return view('frontend.pages.settings.modal-budget-settings');
		}//End method
	}



