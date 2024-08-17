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
        'nickname' => 'unique:accounts,nickname',
        'balance'  => ['required',new ValidateNumber],
      ],[
        'nickname.unique'  => 'This account name already exists.',
        'balance.required' => 'The balance must be a valid number.',

      ]);

      //Save Account
      $empData = [
        'nickname'         => $request->nickname,
        'account_type'     => $request->accountType,
        'account_category' => $request->accountCategory,
        'balance'          => $request->balance,
      ];

      $account = Account::create($empData);

      return response()->json([
        'success' => true,
        'account' => $account,
      ],201);

    } //End Method


  }
