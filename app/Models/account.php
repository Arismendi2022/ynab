<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
	
	protected $fillable = [
		'name',
		'account_type',
		'data_category',
		'balance',
		'interest',
		'payment',
		'month',
		'year',
	];
	
}


