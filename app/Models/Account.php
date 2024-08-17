<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

	protected $fillable = [
		'nickname',
		'account_type',
		'account_category',
		'balance',
		'interest',
		'payment',
    'payoff_date',
		'month',
		'year',
	];

}


