<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	use HasFactory;
	public function Customer()
	{
		return $this->belongsTo('App\Models\Customer', 'customer_id');
	}
}
