<?php
use App\Http\Controllers\back\adminController;
use App\Http\Controllers\back\landingpageController;
use App\Http\Controllers\back\loginController;
use App\Http\Controllers\back\usersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::get('/login', [loginController::class, 'index'])->name('login');
    Route::post('/login', [loginController::class, 'login'])->name('login.index'); // Anda mungkin ingin mengubah nama rute ini menjadi 'login.post' atau sesuai dengan kebutuhan.
});




Route::middleware(['auth'])->group(function(){
    
   Route::get('/admin',[adminController::class,'index'])->name('admin')->middleware('userAkses:admin');
   Route::get('/manager',[adminController::class,'index'])->middleware('userAkses:manager');
   Route::get('/supervisor',[adminController::class,'index'])->middleware('userAkses:supervisor');
   Route::get('/petugas',[adminController::class,'index'])->middleware('userAkses:petugas');
   Route::get('logout', [loginController::class, 'logout'])->name('logout');



});

Route::get('/', [landingpageController::class, 'index']);
Route::get('/pegawai',[usersController::class,'index'])->name('pegawai.index');
Route::get('/pegawai/create',[usersController::class,'create'])->name('tambah');
Route::get('/pegawai/edit/{id}',[usersController::class,'edit'])->name('edit.pegawai');
Route::post('/pegawai/store',[usersController::class,'store'])->name('store.pegawai');
Route::post('/pegawai/update/{id}',[usersController::class,'update'])->name('update.pegawai');
Route::post('/pegawai/delete/{id}',[usersController::class,'delete'])->name('delete.pegawai');


Route::get('/login', function () {
    return view('/login.index');
});

Route::get('/dashboard', function () {
    $user = auth()->user();
    if ($user->role == 'admin') {
        return Redirect::route('admin');
    } elseif ($user->role == 'manager') {
        return Redirect::route('manager');
    } elseif ($user->role == 'supervisor') {
        return Redirect::route('supervisor');
    } elseif ($user->role == 'petugas') {
        return Redirect::route('petugas');
    }
     else {
        return Redirect::redirect('login');
    }
})->name('dashboard');;


