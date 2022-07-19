<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {



      return view('welcome');

})->name('welcome');







Auth::routes();



Route::get('/user', [App\Http\Controllers\HomeController::class, 'user']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/tackit' , [App\Http\Controllers\TackitControoler::class, 'tackit'])->name('tackit');
Route::get('/tackit_up' , [App\Http\Controllers\TackitControoler::class, 'tackit_up'])->name('tackit_up');
Route::get('/whatsapp' , [App\Http\Controllers\TackitControoler::class, 'whatsapp'])->name('whatsapp');
Route::get('/tackit_view' , [App\Http\Controllers\TackitControoler::class, 'tackit_view'])->name('tackit_view');
Route::get('delete/{id}',[App\Http\Controllers\TackitControoler::class, 'delete'])->name('delete');



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

Route::get('/Marketer','LoginController@LoginPage')->name('Marketer');
Route::Post('/LoginEnter','LoginController@LoginEnter')->name('LoginEnter');
Route::get('/Signup','SignupController@SignupPage')->name('Signup');
Route::Post('/SignupSave','SignupController@SignupSave')->name('SignupSave');
Route::get('/Forget','ForgetController@ForgetPage')->name('Forget');
Route::get('/Home','HomeeController@HomePage')->name('Home');
Route::get('/Order','OrderController@OrderPage')->name('Order');
Route::get('/OrderMangement','OrderController@OrderMangementpage')->name('OrderMangement');
Route::get('/OrderSending','OrderController@OrderSendingPage')->name('OrderSending');
Route::get('/OrderWaiting','OrderController@OrderWaitingPage')->name('OrderWaiting');
Route::get('/OrderDone','OrderController@OrderDonePage')->name('OrderDone');
Route::get('/OrderProccess','OrderController@OrderProccessPage')->name('OrderProccess');
Route::Post('/OrderSave','OrderController@OrderSave')->name('OrderSave');
Route::get('/OrderEditPage/{id}','OrderController@OrderEditPage')->name('OrderEditPage');
Route::Post('/OrderEdit','OrderController@OrderEdit')->name('OrderEdit');
Route::Post('/OrderDelete','OrderController@OrderDelete')->name('OrderDelete');
Route::get('/Blance','BlanceController@BlancePage')->name('Blance');
Route::get('/Alert','AlertController@AlertPage')->name('Alert');
Route::Post('/OrderProccessNewSave2','OrderController@OrderProccessNewSave2')->name('OrderProccessNewSave2');

Route::Post('/DownloadPdf1','OrderController@DownloadPdf1')->name('DownloadPdf1');
Route::Post('/DownloadPdf2','OrderController@DownloadPdf2')->name('DownloadPdf2');


/*-------------------------- Control Panel Route ---------------------- */

Route::get('/loginControlPanel','ControlPanelController@loginControlPanel')->name('loginControlPanel');
Route::Post('/loginControlPanelEnter','ControlPanelController@loginControlPanelEnter')->name('loginControlPanelEnter');
Route::get('/ControlPanelHome','ControlPanelController@HomePage')->name('ControlPanelHome');
Route::get('/ControlOrderMangement','ControlPanelController@OrderMangement')->name('ControlOrderMangement');
Route::get('/ControlOrderNew','ControlPanelController@OrderNew')->name('ControlOrderNew');
Route::get('/ControlClients','ControlPanelController@ClientShow')->name('ControlClients');
Route::get('/OrderProccessNew/{id}','ControlPanelController@OrderProccessShow')->name('OrderProccessNew');
Route::get('/ControlBlanceShow','ControlPanelController@ControlBlanceShow')->name('ControlBlanceShow');
Route::get('/ControlAlertShow','ControlPanelController@ControlAlertShow')->name('ControlAlertShow');
Route::Post('/OrderProccessNewSave','ControlPanelController@OrderProccessNewSave')->name('OrderProccessNewSave');
Route::get('/ControlOrderWaiting','ControlPanelController@OrderًWite')->name('ControlOrderWaiting');
Route::get('/ControlOrderProccessShow','ControlPanelController@OrderًProccess')->name('ControlOrderProccessShow');
Route::Post('/OrderProccessWite','ControlPanelController@OrderProccessWite')->name('OrderProccessWite');
Route::Post('/OrderProccessWiteSave','ControlPanelController@OrderProccessWiteSave')->name('OrderProccessWiteSave');
Route::get('/ControlOrderDone','ControlPanelController@OrderDone')->name('ControlOrderDone');
Route::get('/ControlAlertShow','ControlPanelController@ControlAlertShow')->name('ControlAlertShow');
Route::get('/ControlAlertSend','ControlPanelController@ControlAlertSend')->name('ControlAlertSend');
Route::Post('/AlertSend','ControlPanelController@AlertSend')->name('AlertSend');
Route::Post('/AlertDelete','ControlPanelController@AlertDelete')->name('AlertDelete');

Route::get('/SignupEditPage/{id}','SignupController@SignupEditPage')->name('SignupEditPage');
Route::Post('/SignupEdit','SignupController@SignupEdit')->name('SignupEdit');
Route::Post('/SignupPasswordEdit','SignupController@SignupPasswordEdit')->name('SignupPasswordEdit');

