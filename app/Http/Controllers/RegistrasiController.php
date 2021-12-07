<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Mail\sendEmailCustomer;
use Alert;

class RegistrasiController extends Controller
{

    public function index()
    {
        return view('registrasi');
    }

    public function registrasi(Request $request)
    {
        Alert::success('Silahkan Cek Email Anda!');
        $file = $request->file('photos_ktp');
        $name = $request->file('photos_ktp')->getClientOriginalName();
        
         // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'lte/dist/img/landing_page/customer';
        $file->move($tujuan_upload,$name);

        $random=rand();
        $data_Customers= new Customer;
        $data_Customers->customers_name=$request->customers_name;
        $data_Customers->customers_email=$request->customers_email;
        $data_Customers->photos_ktp=$name;

        $data_Customers->customers_password=Hash::make("CUS".$random);
        $data_Customers->customers_username="CUS".$random;

        $emailDataLogin = [
            'title' => 'Halo '.$request->customers_name,
            'username' => "CUS".$random,
            'password' => "CUS".$random,
            'nama' => $request->customers_name
        ];

        \Mail::to($request->customers_email)->send(new sendEmailCustomer($emailDataLogin));

        $data_Customers->save();


        // Alert::toast('Customer Service '.$request->customers_name.' ditambahkan', 'success');
        return redirect('/login');
    }


}
