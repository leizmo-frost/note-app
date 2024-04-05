
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



// routes/web.php

Route::get('/', function () {
    return view('welcome'); // Replace 'welcome' with your welcome blade template name
  });

Route::get('/welcome', function () {
  return view('welcome');
});

Route::view('dashboard', 'dashboard')
->middleware(['auth', 'verified', 'normal'])
->name('dashboard');

Route::view('admin', 'admin')
->middleware(['auth', 'verified', 'admin'])
->name('admin');
Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/note', [NoteController::class, 'index'])->name('note.index');
    // Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
    // Route::post('/note', [NoteController::class, 'store'])->name('note.store');
    // Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
    // Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
    // Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
    // Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

    Route::resource('note', NoteController::class);
});

Route::middleware('auth')
->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function (){
    Route::get('/admin',[AdminController::class, 'index'])->name('admin.index');
});

require __DIR__ . '/auth.php';


