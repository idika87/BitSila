<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Customer;
use Alert;
class LoginController extends Controller
{
	public function loginCheck(Request $request)
	{
		$Admin=Admin::where('admins_username', $request->username)->first();
		$Customer=Customer::where('customers_username', $request->username)->first();

		if ($Admin) {
			if ($Admin && Hash::check($request->password, $Admin->admins_password)) {
				Alert::success('Selamat Datang '.$Customer['Name']);
				session()->put('dataLoginAdmin', $Admin);
				return redirect('/dashboard_adm');
				
			}else{
				Alert::error('username atau password salah');
				return redirect('/login');

			}
		}elseif ($Customer) {
			if ($Customer && Hash::check($request->password, $Customer->customers_password)) {
				Alert::success('Selamat Datang '.$Customer['Name']);
				session()->put('dataLoginCustomer', $Customer);
				return redirect('/dashboard_cus');
			}else{
				Alert::error('username atau password salah');
				return redirect('/login');
			}
		}else{
			Alert::error('username atau password salah');
			return redirect('/login');

		}
		// end cus

	}


	public function logout()
	{
		Alert::success('Hati-Hati Dijalan');
		session()->forget('dataLoginAdmin');
		session()->forget('dataLoginCustomer');
		return redirect('/login');
	}

}


