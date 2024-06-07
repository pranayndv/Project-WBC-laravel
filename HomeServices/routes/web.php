<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Sprovider\SproviderDashboardComponent;
use App\Http\Livewire\customer\CustomerDashboardComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home');

//customer
Route::middleware(['auth:sanctum','verified','authcustomer'])->group ( function(){
    Route::get('/customer/dashboard',CustomerDashboardComponent::class)->name('customer.dashboard');
});
//worker
Route::middleware(['auth:sanctum','verified','authsprovider'])->group ( function(){
    Route::get('/Sprovider/dashboard',SproviderDashboardComponent::class)->name('sprovider.dashboard');
});
//admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group ( function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});