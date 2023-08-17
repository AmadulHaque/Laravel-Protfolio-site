<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// front
use App\Http\Controllers\Front\HomeController;





Route::get('/register', function () {
     return redirect('/login');
});

Route::middleware('auth')->group(function(){
  Route::controller(AdminController::class)->group(function () {
    Route::get('/dashboard','adminDashboard')->name('dashboard');
    Route::get('/admin/logout', 'adminLogout')->name('admin.logout');
    Route::get('/admin/profile', 'adminProfile')->name('admin.profile');
    Route::post('/admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
    //
    Route::get('/admin/change/password', 'AdminChangePassword')->name('admin.change.password');
    Route::post('/admin/update/password', 'AdminUpdatePassword')->name('update.password');
  });


  // service
  Route::get('/service', [ServiceController::class, 'serviceHome'])->name('serviceHome');
  Route::get('/service/add', [ServiceController::class, 'serviceAdd'])->name('serviceAdd');
  Route::get('/service/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('serviceEdit');
  Route::get('/service/delete/{id}', [ServiceController::class, 'serviceDelete'])->name('serviceDelete');
  Route::post('/service/add', [ServiceController::class, 'servicePost'])->name('servicePost');
  Route::post('/service/update', [ServiceController::class, 'serviceUpdate'])->name('serviceUpdate');


  // about 
  Route::get('/about', [AboutController::class, 'aboutHome'])->name('aboutHome');
  Route::post('/about/update', [AboutController::class, 'aboutUpdate'])->name('aboutUpdate');

  // skill
  Route::get('/skill', [SkillController::class, 'Skill'])->name('Skill');
  Route::get('/skill/add', [SkillController::class, 'SkillAdd'])->name('SkillAdd');
  Route::get('/skill/edit/{id}', [SkillController::class, 'SkillEdit'])->name('SkillEdit');
  Route::get('/skill/delete/{id}', [SkillController::class, 'SkillDelete'])->name('SkillDelete');
  Route::post('/skill/add', [SkillController::class, 'SkillPost'])->name('SkillPost');
  Route::post('/skill/update', [SkillController::class, 'SkillUpdate'])->name('SkillUpdate');



  // Portfolio 
  Route::get('/portfolio-type', [PortfolioController::class, 'PortfolioType'])->name('PortfolioType');
  Route::get('/portfolio-type/add', [PortfolioController::class, 'PortfolioTypeAdd'])->name('PortfolioTypeAdd');
  Route::get('/portfolio-type/edit/{id}', [PortfolioController::class, 'PortfolioTypeEdit'])->name('PortfolioTypeEdit');
  Route::get('/portfolio-type/delete/{id}', [PortfolioController::class, 'PortfolioTypeDelete'])->name('PortfolioTypeDelete');
  Route::post('/portfolio-type/add', [PortfolioController::class, 'PortfolioTypePost'])->name('PortfolioTypePost');
  Route::post('/portfolio-type/update', [PortfolioController::class, 'PortfolioTypeUpdate'])->name('PortfolioTypeUpdate');

  // Portfolio 
  Route::get('/portfolio', [PortfolioController::class, 'Portfolio'])->name('Portfolio');
  Route::get('/portfolio/add', [PortfolioController::class, 'PortfolioAdd'])->name('PortfolioAdd');
  Route::get('/portfolio/edit/{id}', [PortfolioController::class, 'PortfolioEdit'])->name('PortfolioEdit');
  Route::get('/portfolio/details/{id}', [PortfolioController::class, 'PortfolioDetails'])->name('PortfolioDetails');
  Route::get('/portfolio/delete/{id}', [PortfolioController::class, 'PortfolioDelete'])->name('PortfolioDelete');
  Route::post('/portfolio/add', [PortfolioController::class, 'PortfolioPost'])->name('PortfolioPost');
  Route::post('/portfolio/update', [PortfolioController::class, 'PortfolioUpdate'])->name('PortfolioUpdate');

  // skill
  Route::get('/contact', [ContactController::class, 'Contact'])->name('Contact');
  Route::get('/contact/delete/{id}', [ContactController::class, 'ContactDelete'])->name('ContactDelete');
  Route::get('/contact/approve/{id}', [ContactController::class, 'ContactApprove'])->name('ContactApprove');
  Route::get('/contact/reject/{id}', [ContactController::class, 'ContactReject'])->name('ContactReject');


  // settings All Route
Route::controller(HeroController::class)->group(function () {
    Route::get('/hero/section', 'HeroHome')->name('HeroHome');
    Route::post('/hero/section/update', 'updateHeroSec')->name('updateHeroSec');
});


  // settings All Route
  Route::controller(SettingController::class)->group(function () {
      Route::get('/settings', 'GetSetting')->name('GetSetting');
      Route::post('/setting/update', 'updateSetting')->name('updateSetting');
      //////////
      Route::get('/setting/header_bg', 'SettingHeader')->name('SettingHeader');
      Route::get('/setting/sideber_bg', 'SettingSideber')->name('SettingSideber');
  });
}); // End Group Middleware


// Default All Route
Route::controller(DefaultController::class)->group(function () {

});




Route::post('/contact/add', [ContactController::class, 'ContactPost'])->name('ContactPost');
// front controller
Route::controller(HomeController::class)->group(function () {
  Route::get('/', 'Home')->name('Home');
});




require __DIR__.'/auth.php';
