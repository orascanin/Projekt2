<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', function(){
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum','verified'])->get('/',function(){
    $location='Cazin';
    $apiKey='c974f956dd45e95a43429cafbd1ecd10';
    $response=Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
   // $rasponseFuture=Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&cnt=5&appid={$apiKey}&units=metric");
  // dd($rasponseFuture->json());
 //  dump($response->json());

    return view('dashboard',[
        'currentWeather' => $response->json(),
    ]);
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('donors', [DonorController::class, 'index'])->name('donors');
Route::middleware(['auth:sanctum', 'verified'])->get('add_donor', [DonorController::class, 'create'])->name('add_donor');
Route::middleware(['auth:sanctum', 'verified'])->post('store_donor', [DonorController::class, 'store'])->name('store_donor');


Route::middleware(['auth:sanctum', 'verified'])->post('delete_donor', [DonorController::class, 'delete'])->name('delete_donor');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_donor', [DonorController::class, 'edit'])->name('edit_donor');
Route::middleware(['auth:sanctum', 'verified'])->post('update_donor', [DonorController::class, 'update'])->name('update_donor');
Route::middleware(['auth:sanctum', 'verified'])->post('file_add', [DonorController::class, 'file_add'])->name('file_add');
Route::middleware(['auth:sanctum', 'verified'])->post('process', [DonorController::class, 'process'])->name('process');

Route::middleware(['auth:sanctum', 'verified'])->get('children', [ChildController::class, 'index'])->name('children');
Route::middleware(['auth:sanctum', 'verified'])->get('add_children', [ChildController::class, 'create'])->name('add_children');
Route::middleware(['auth:sanctum', 'verified'])->post('store_children', [ChildController::class, 'store'])->name('store_children');


Route::middleware(['auth:sanctum', 'verified'])->post('delete_children', [ChildController::class, 'delete'])->name('delete_children');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_children', [ChildController::class, 'edit'])->name('edit_children');
Route::middleware(['auth:sanctum', 'verified'])->post('update_children', [ChildController::class, 'update'])->name('update_children');

Route::middleware(['auth:sanctum', 'verified'])->get('campaigns', [CampaignController::class, 'index'])->name('campaigns');
Route::middleware(['auth:sanctum', 'verified'])->get('add_campaign', [CampaignController::class, 'create'])->name('add_campaign');
Route::middleware(['auth:sanctum', 'verified'])->post('store_campaign', [CampaignController::class, 'store'])->name('store_campaign');


Route::middleware(['auth:sanctum', 'verified'])->post('delete_campaign', [CampaignController::class, 'delete'])->name('delete_campaign');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_campaign', [CampaignController::class, 'edit'])->name('edit_campaign');
Route::middleware(['auth:sanctum', 'verified'])->post('update_campaign', [CampaignController::class, 'update'])->name('update_campaign');

Route::middleware(['auth:sanctum', 'verified'])->get('donations',[DonationController::class,'index'])->name('donations') ;
Route::middleware(['auth:sanctum', 'verified'])->get('donation_donor',[DonationController::class,'create'])->name('donation_donor') ;
Route::middleware(['auth:sanctum', 'verified'])->post('store_donation',[DonationController::class,'store'])->name('store_donation') ;
/*
Route::middleware(['auth:sanctum', 'verified'])->get('campaigns', [CampaignController::class, 'index'])->name('campaigns');
Route::middleware(['auth:sanctum', 'verified'])->get('add_campaign', [CampaignController::class, 'create'])->name('add_campaign');
Route::middleware(['auth:sanctum', 'verified'])->post('store_campaign', [CampaignController::class, 'store'])->name('store_campaign');*/
