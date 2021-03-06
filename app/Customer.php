<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
		protected $fillable[
			'firstname',
			'lastname',
			'username',
			'password',
			'email',
			'address',
			'contact_no'
		];
}
