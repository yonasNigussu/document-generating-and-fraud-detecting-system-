<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\UserController;
use App\http\Controllers\RegistrarController;
use App\http\Controllers\SchoolController;
use App\http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'authenticated']);
Route::get('/home/actor',[HomeController::class,'redirect'])->name('/home/actor');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/authenticat',[HomeController::class,'auth']);

Route::get('/Account_list',[AdminController::class,'account']);

Route::get('/post',[AdminController::class,'post']);

Route::post('/update_post',[AdminController::class,'update_post']);

Route::post('/id_auth',[HomeController::class,'auth_id']);

Route::get('/service_list',[UserController::class,'service_list']);

Route::get('/apply_form/{id}',[UserController::class,'form']);

Route::get('/apply_for_letter',[UserController::class,'letter_form']);

Route::post('/apply_request',[UserController::class,'list']);

Route::post('/letter_apply_request',[UserController::class,'letter_list']);

Route::post('/feedback',[UserController::class,'feed_back']);

Route::get('/trauck_requiest/{id}',[UserController::class,'trauck_requiest']);

Route::get('/request_list',[RegistrarController::class,'request_list']);

Route::get('/try/{id}',[HomeController::class,'try']);

Route::get('/request_list_school',[SchoolController::class,'request_list_school']);

Route::get('/request_list_school_it',[SchoolController::class,'request_list_school_it']);

Route::get('/request_list_clerk',[SchoolController::class,'request_list_clerk']);

Route::get('/physical_form',[RegistrarController::class,'physical_list']);

Route::post('/photo',[RegistrarController::class,'upload_photo']);

Route::post('/apply_request_physical',[RegistrarController::class,'physical_list_form']);

Route::post('/simport',[RegistrarController::class,'simport']);

Route::POST('/grade',[RegistrarController::class,'addstudentgrade']);

Route::get('/add_student',[RegistrarController::class,'addStudent']);

Route::get('/add_photo',[RegistrarController::class,'addphoto']);

Route::get('/download',[RegistrarController::class,'downloads']);

Route::get('/detail/{id}', [RegistrarController::class, 'list_detail']);

Route::get('/clerk_detail/{id}', [RegistrarController::class, 'clerk_detail']);

Route::get('/detailcs/{id}', [SchoolController::class, 'list_detailcs']);

Route::get('/detailit/{id}', [SchoolController::class, 'list_detailit']);

Route::get('/generate/{id}', [RegistrarController::class, 'document']);

Route::get('/reject/{id}', [RegistrarController::class, 'reject']);

Route::get('/payment_approved/{id}', [SchoolController::class, 'payment_approved']);

Route::get('/payment_denied/{id}', [SchoolController::class, 'payment_denied']);


/*Route::post('/users.import',[RegistrarController::class,'import']);

Route::get('/users.export',[RegistrarController::class,'export']);
*/

//Route::get('/detail/{id}', 'RegistrarController@show')->name('table.show');

Route::controller(RegistrarController::class)->group(function(){
    Route::get('users', 'index');
    Route::get('users-export', 'export')->name('users.export');
    Route::post('users-import', 'import')->name('users.import');
});

/*Route::controller(RegistrarController::class)->group(function(){
    Route::get('csstdudent', 'indexa');
    Route::get('csstdudent-exporta', 'exporta')->name('csstdudent.exporta');
    Route::post('csstdudent-importa', 'importa')->name('csstdudent.importa');
});*/
Route::get('/password/change', [App\Http\Controllers\PasswordChangeController::class, 'show'])->name('password.change');
Route::post('/password/change', [App\Http\Controllers\PasswordChangeController::class, 'update'])->name('password.update');

Route::get('/account',[AdminController::class,'account']);
Route::post('/add-user',[AdminController::class,'store']);
Route::get('/delete-user{id}',[AdminController::class,'destroy']);
Route::get('/un_block{id}',[AdminController::class,'unblock']);
Route::get('/reset{id}',[AdminController::class,'reset']);
Route::post('/update{id}',[AdminController::class,'update']);
Route::get('/profile{id}',[AdminController::class,'profile']);
Route::post('/admin/update-password/{id}', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');


Route::get('/password/change', [App\Http\Controllers\PasswordChangeController::class, 'show'])->name('password.change');
Route::post('/password/change', [App\Http\Controllers\PasswordChangeController::class, 'updata'])->name('passwords.updated');