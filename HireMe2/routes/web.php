<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpController;
use App\Http\Controllers\CompController;
use App\Http\Controllers\EducController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyFormController;

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

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'] )->middleware(['auth', 'verified'])
->name('dashboard');
Route::get('/registerCan', [UserFormController::class, 'create'])
->name('registerCan')->middleware(['auth', 'user']);
Route::post('/registerCan', [UserFormController::class, 'store'])->middleware(['auth', 'user']);
Route::get('/registerEntr', [CompanyFormController::class, 'create'])
->name('registerEntr')->middleware(['auth', 'company']);
Route::post('/registerEntr', [CompanyFormController::class, 'store'])
->name('registerEnt')->middleware(['auth', 'company']);
Route::get('/userDash', [UserController::class, 'index'])
->name('userDash')->middleware(['auth', 'user']);
Route::get('/adminDash', [AdminController::class, 'index'])
->name('adminDash')->middleware(['auth', 'admin']);
Route::get('/companyDash', [CompanyController::class, 'index'])
->name('companyDash')->middleware(['auth', 'company']);
Route::get('/exp', [ExpController::class, 'create'])
->name('exp');
Route::post('/exp', [ExpController::class, 'store']);
Route::delete('/exp/{experience}', [ExpController::class, 'destroy'])->name('deleteExp');
Route::get('/educ', [EducController::class, 'create'])
->name('educ');
Route::post('/educ', [EducController::class, 'store']);
Route::delete('/educ/{education}', [EducController::class, 'destroy'])->name('deleteEduc');
Route::get('/educ', [EducController::class, 'create'])
->name('educ');
Route::post('/lang', [LangController::class, 'store']);
Route::delete('/lang/{langue}', [LangController::class, 'destroy'])->name('deleteLang');
Route::get('/lang', [LangController::class, 'create'])
->name('lang');
Route::post('/comp', [CompController::class, 'store']);
Route::delete('/comp/{competence}', [CompController::class, 'destroy'])->name('deleteComp');
Route::get('/comp', [CompController::class, 'create'])
->name('comp');
Route::get('/invoice', [InvoiceController::class, 'generate'])->name('invoice');
Route::post('/ajoutOffre', [OffreController::class, 'store']);
Route::delete('/ajoutOffre/{offre}', [OffreController::class, 'destroy'])->name('deleteOffre');
Route::get('/ajoutOffre', [OffreController::class, 'create'])
->name('ajoutOffre');
Route::get('/editOffre/{offre}', [OffreController::class, 'edit'])
->name('editOffre');

    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
