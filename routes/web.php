<?php

use Illuminate\Support\Facades\Route;

// login&registrasi
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\LoginController;

// admin
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDataController;
use App\Http\Controllers\AdminPaymentController;
use App\Http\Controllers\AdminDataCustomerController;
use App\Http\Controllers\AdminOrderDataController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminCarouselsController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminClientController;
use App\Http\Controllers\AdminTeamController;
use App\Http\Controllers\AdminTamplateController;
use App\Http\Controllers\AdminBonusController;

// customers
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\CustomerDataDiriController;
use App\Http\Controllers\CustomerPaymentController;
use App\Http\Controllers\CustomerOrderDataController;
use App\Http\Controllers\CustomerReportController;
use App\Http\Controllers\CustomerROrderController;

// landing page
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LpContactController;


// =========================================================Login======================================================



Route::get('/login', function () {
	return view('login');
});
Route::post('/registrasi_proses', [RegistrasiController::class,'registrasi']);
Route::get('/registrasi', [RegistrasiController::class,'index']);
Route::post('/login_proses', [LoginController::class,'loginCheck']);
Route::get('/logout', [LoginController::class, 'logout']);


// =========================================================Admin======================================================

Route::get('/', function () {
	return view('admins.pages.content');
})->middleware('SessionAdmin');

Route::get('/riportpesanbln', function () {
	return view('admins.pages.riportPbulanan');
});

Route::get('/dashboard_adm', [AdminDashboardController::class, 'index'])->middleware('SessionAdmin');

Route::get('/data_admin', [AdminDataController::class, 'index']);
Route::post('/data_admin/tambah', [AdminDataController::class, 'store']);
Route::get('/data_admin/hapus/{id}', [AdminDataController::class, 'destroy']);

Route::get('/pesan_masuk', [AdminContactController::class, 'index'])->middleware('SessionAdmin');
Route::get('/payment_method', [AdminPaymentController::class, 'index'])->middleware('SessionAdmin');

Route::post('/payment_method/tambah', [AdminPaymentController::class, 'store'])->middleware('SessionAdmin');
Route::get('/payment_method/hapus/{id}', [AdminPaymentController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/payment_method/ubah/{id}', [AdminPaymentController::class, 'update'])->middleware('SessionAdmin');

Route::get('/data_customers', [AdminDataCustomerController::class, 'index'])->middleware('SessionAdmin');
Route::post('/data_customers/tambah', [AdminDataCustomerController::class, 'store'])->middleware('SessionAdmin');
Route::post('/data_customers/ubah_{id}', [AdminDataCustomerController::class, 'update'])->middleware('SessionAdmin');

Route::get('/admin_order_data', [AdminOrderDataController::class, 'index'])->middleware('SessionAdmin');
Route::post('/admin_order_data/tambah', [AdminOrderDataController::class, 'store'])->middleware('SessionAdmin');
Route::get('/admin_order_data/hapus/{id}', [AdminOrderDataController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/admin_order_data/ubah/{id}', [AdminOrderDataController::class, 'update'])->middleware('SessionAdmin');
Route::post('/admin_order_data/bayar/{id}', [AdminOrderDataController::class, 'bayar'])->middleware('SessionAdmin');
Route::post('/admin_order_data_cari', [AdminOrderDataController::class, 'filter'])->middleware('SessionAdmin');

Route::get('/lp_home', [AdminHomeController::class, 'index'])->middleware('SessionAdmin');
Route::post('/lp_home/tambah', [AdminHomeController::class, 'store'])->middleware('SessionAdmin');
Route::get('/lp_home/hapus/{id}', [AdminHomeController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/lp_home/ubah/{id}', [AdminHomeController::class, 'update'])->middleware('SessionAdmin');

Route::get('/lp_carousels', [AdminCarouselsController::class, 'index'])->middleware('SessionAdmin');
Route::post('/lp_carousels/tambah', [AdminCarouselsController::class, 'store'])->middleware('SessionAdmin');
Route::get('/lp_carousels/hapus/{id}', [AdminCarouselsController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/lp_carousels/ubah/{id}', [AdminCarouselsController::class, 'update'])->middleware('SessionAdmin');

Route::get('/lp_produk', [AdminProdukController::class, 'index'])->middleware('SessionAdmin');
Route::post('/lp_produk/tambah', [AdminProdukController::class, 'store'])->middleware('SessionAdmin');
Route::get('/lp_produk/hapus/{id}', [AdminProdukController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/lp_produk/ubah/{id}', [AdminProdukController::class, 'update'])->middleware('SessionAdmin');

Route::get('/lp_client', [AdminClientController::class, 'index'])->middleware('SessionAdmin');
Route::post('/lp_client/tambah', [AdminClientController::class, 'store'])->middleware('SessionAdmin');
Route::get('/lp_client/hapus/{id}', [AdminClientController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/lp_client/ubah/{id}', [AdminClientController::class, 'update'])->middleware('SessionAdmin');

Route::get('/lp_team', [AdminTeamController::class, 'index'])->middleware('SessionAdmin');
Route::post('/lp_team/tambah', [AdminTeamController::class, 'store']);
Route::get('/lp_team/hapus/{id}', [AdminTeamController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/lp_team/ubah/{id}', [AdminTeamController::class, 'update'])->middleware('SessionAdmin');

Route::get('/lp_tamplate', [AdminTamplateController::class, 'index'])->middleware('SessionAdmin');
Route::post('/lp_tamplate/tambah', [AdminTamplateController::class, 'store'])->middleware('SessionAdmin');
Route::get('/lp_tamplate/hapus/{id}', [AdminTamplateController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/lp_tamplate/ubah/{id}', [AdminTamplateController::class, 'update'])->middleware('SessionAdmin');

Route::get('/lp_bonus', [AdminBonusController::class, 'index'])->middleware('SessionAdmin');
Route::post('/lp_bonus/tambah', [AdminBonusController::class, 'store'])->middleware('SessionAdmin');
Route::get('/lp_bonus/hapus/{id}', [AdminBonusController::class, 'destroy'])->middleware('SessionAdmin');
Route::post('/lp_bonus/ubah/{id}', [AdminBonusController::class, 'update'])->middleware('SessionAdmin');




// =======================================================Customers====================================================
Route::get('/testt', function () {
	return view('customers.pages.content');
});

Route::get('/dashboard_cus', [CustomerDashboardController::class, 'index'])->middleware('SessionCustomer');

Route::get('/data_diri_cus', [CustomerDataDiriController::class, 'index'])->middleware('SessionCustomer');
Route::post('/data_diri_cus/ubah/{id}', [CustomerDataDiriController::class, 'update'])->middleware('SessionCustomer');

Route::get('/tampilan_rekening_cus{id}', [CustomerPaymentController::class, 'index'])->middleware('SessionCustomer');
Route::post('/tampilan_rekening_cus_bayar', [CustomerPaymentController::class, 'bank'])->middleware('SessionCustomer');

Route::get('/data_pesanan_cus', [CustomerOrderDataController::class, 'index'])->middleware('SessionCustomer');
Route::post('/data_pesanan_cus/ubah/{id}', [CustomerOrderDataController::class, 'update'])->middleware('SessionCustomer');
Route::get('/pelunasan_cus', [CustomerOrderDataController::class, 'show'])->middleware('SessionCustomer');

Route::get('/report_pemesanan_cus', [CustomerReportController::class, 'index'])->middleware('SessionCustomer');

Route::get('/report_pemesanan_cus{id}', [CustomerReportController::class, 'show'])->middleware('SessionCustomer');








// =====================================================landing page==================================================

Route::get('/landing_page', [LandingPageController::class, 'index']);

Route::post('/landing_page/contact', [LpContactController::class, 'store']);








