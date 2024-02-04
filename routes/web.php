<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\indentifant; // Assurez-vous que le nom du contrôleur est correct
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\PointageController;
use App\Http\Controllers\PDFController; 
use App\Http\Controllers\SpacyController; 




require __DIR__.'/auth.php';

Route::get('/', [UserController::class, 'index']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/services', [UserController::class, 'services']);
Route::get('/tst2', [UserController::class, 'tst2']);
Route::get('/tst', [PDFController::class, 'extract']);
Route::get('/python', [ SpacyController::class, 'runSpacyScript']);
Route::get('/postercv', [UserController::class, 'posterCV'])->name('poste');
route::post('postercv',[usercontroller::class,'sendcv'])->name('diposer');
// Route::get('/tst', [UserController::class, 'sendcv'])->name('tst');

// Route::get('/dashboard', [indentifant::class, 'index'])->name('dashboard');// Utilisez 'Route::get' pour définir la route

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// Route::middleware(['auth'])->group(function () {
//     Route::post('/', [PointageController::class, 'pointage']);
// });

Auth::routes([
    'verify'=>true,
]);


