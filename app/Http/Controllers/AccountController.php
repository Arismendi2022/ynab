<?php

  namespace App\Http\Controllers;

  use App\Models\Account;
  use App\Rules\ValidateNumber;
  use Illuminate\Http\Request;

  class AccountController extends Controller
  {
    public function createAccount(Request $request){
      //Validate
      $request->validate([
        'nickname' => 'unique:accounts,name',
        'balance'  => ['required',new ValidateNumber],
      ],[
        'nickname.unique'  => 'This account name already exists.',
        'balance.required' => 'The balance must be a valid number.',

      ]);

      //Save Account
      $account                   = new Account();
      $account->name             = $request->nickname;
      $account->account_type     = $request->accountType;
      $account->account_category = $request->accountCategory;
      $account->balance          = $request->balance;
      $saved                     = $account->save();

      return response()->json([
        'success' => true,
        'account' => $account,
      ],201);


    } //End Method
  }
