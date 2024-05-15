<?php

use App\Http\Controllers\backend\AuthController;
use App\Http\Controllers\backend\DepartmentController;
use App\Http\Controllers\backend\DoctorController;
use App\Http\Controllers\backend\ScheduleController;
use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\AccountSettingsAccount;
use App\Http\Controllers\pages\AccountSettingsNotifications;
use App\Http\Controllers\pages\AccountSettingsConnections;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HospitalController as BackendHospitalController;
use App\Http\Controllers\cards\CardBasic;
use App\Http\Controllers\user_interface\Accordion;
use App\Http\Controllers\user_interface\Alerts;
use App\Http\Controllers\user_interface\Badges;
use App\Http\Controllers\user_interface\Buttons;
use App\Http\Controllers\user_interface\Carousel;
use App\Http\Controllers\user_interface\Collapse;
use App\Http\Controllers\user_interface\Dropdowns;
use App\Http\Controllers\user_interface\Footer;
use App\Http\Controllers\user_interface\ListGroups;
use App\Http\Controllers\user_interface\Modals;
use App\Http\Controllers\user_interface\Navbar;
use App\Http\Controllers\user_interface\Offcanvas;
use App\Http\Controllers\user_interface\PaginationBreadcrumbs;
use App\Http\Controllers\user_interface\Progress;
use App\Http\Controllers\user_interface\Spinners;
use App\Http\Controllers\user_interface\TabsPills;
use App\Http\Controllers\user_interface\Toasts;
use App\Http\Controllers\user_interface\TooltipsPopovers;
use App\Http\Controllers\user_interface\Typography;
use App\Http\Controllers\form_elements\BasicInput;
use App\Http\Controllers\form_elements\InputGroups;
use App\Http\Controllers\form_layouts\VerticalForm;
use App\Http\Controllers\form_layouts\HorizontalForm;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\tables\Basic as TablesBasic;

// pages
Route::get('/pages/account-settings-account', [AccountSettingsAccount::class, 'index'])->name(
  'pages-account-settings-account'
);
Route::get('/pages/account-settings-notifications', [AccountSettingsNotifications::class, 'index'])->name(
  'pages-account-settings-notifications'
);
Route::get('/pages/account-settings-connections', [AccountSettingsConnections::class, 'index'])->name(
  'pages-account-settings-connections'
);

// authentication
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('login');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');

// cards
Route::get('/cards/basic', [CardBasic::class, 'index'])->name('cards-basic');

// User Interface
Route::get('/ui/accordion', [Accordion::class, 'index'])->name('ui-accordion');
Route::get('/ui/alerts', [Alerts::class, 'index'])->name('ui-alerts');
Route::get('/ui/badges', [Badges::class, 'index'])->name('ui-badges');
Route::get('/ui/buttons', [Buttons::class, 'index'])->name('ui-buttons');
Route::get('/ui/carousel', [Carousel::class, 'index'])->name('ui-carousel');
Route::get('/ui/collapse', [Collapse::class, 'index'])->name('ui-collapse');
Route::get('/ui/dropdowns', [Dropdowns::class, 'index'])->name('ui-dropdowns');
Route::get('/ui/footer', [Footer::class, 'index'])->name('ui-footer');
Route::get('/ui/list-groups', [ListGroups::class, 'index'])->name('ui-list-groups');
Route::get('/ui/modals', [Modals::class, 'index'])->name('ui-modals');
Route::get('/ui/navbar', [Navbar::class, 'index'])->name('ui-navbar');
Route::get('/ui/offcanvas', [Offcanvas::class, 'index'])->name('ui-offcanvas');
Route::get('/ui/pagination-breadcrumbs', [PaginationBreadcrumbs::class, 'index'])->name('ui-pagination-breadcrumbs');
Route::get('/ui/progress', [Progress::class, 'index'])->name('ui-progress');
Route::get('/ui/spinners', [Spinners::class, 'index'])->name('ui-spinners');
Route::get('/ui/tabs-pills', [TabsPills::class, 'index'])->name('ui-tabs-pills');
Route::get('/ui/toasts', [Toasts::class, 'index'])->name('ui-toasts');
Route::get('/ui/tooltips-popovers', [TooltipsPopovers::class, 'index'])->name('ui-tooltips-popovers');
Route::get('/ui/typography', [Typography::class, 'index'])->name('ui-typography');

// form elements
Route::get('/forms/basic-inputs', [BasicInput::class, 'index'])->name('forms-basic-inputs');
Route::get('/forms/input-groups', [InputGroups::class, 'index'])->name('forms-input-groups');

// form layouts
Route::get('/form/layouts-vertical', [VerticalForm::class, 'index'])->name('form-layouts-vertical');
Route::get('/form/layouts-horizontal', [HorizontalForm::class, 'index'])->name('form-layouts-horizontal');

// tables
Route::get('/tables/basic', [TablesBasic::class, 'index'])->name('tables-basic');

Route::post('auth/registration', [UserController::class, 'store'])->name('registration');

Route::get('auth/verify-mail', [UserController::class, 'verify']);

Route::get('auth/discard-mail', [UserController::class, 'discard']);

Route::post('auth/login', [AuthController::class, 'login'])->name('login-post');

Route::get('/dash', [Analytics::class, 'index'])->name('dashboard-analytics');

Route::middleware('auth')->group(function () {
  //   Route::resource('departments', DepartmentController::class);

  Route::get('hospitals/{id}/departments', [DepartmentController::class, 'index']);

  Route::get('hospitals/{id}/news', [NewsController::class, 'index']);

  Route::get('news/{id}', [NewsController::class, 'show']);

  Route::get('hospitals/{id}/personal', [DoctorController::class, 'personal']);

  Route::get('personal/{id}', [DoctorController::class, 'person']);

  Route::get('hospitals/{id}/services', [ServiceController::class, 'index']);

  Route::get('departments/{id}', [DepartmentController::class, 'show']);

  Route::resource('doctors', DoctorController::class);

  Route::get('services/{id}/{doctors}', [DoctorController::class, 'index']);

  Route::resource('hospitals', BackendHospitalController::class);

  Route::get('hospitals/{id}/info', [BackendHospitalController::class, 'info']);

  Route::get('doctors/{doctorId}/schedules/{day}', [ScheduleController::class, 'showByDate']);

  Route::get('/', [ScheduleController::class, 'index']);

  Route::post('schedules', [ScheduleController::class, 'store']);

  Route::post('user/update', [UserController::class, 'update'])->name('update-user');

  Route::get('auth/logout', [AuthController::class, 'logout'])->name('logout');

  Route::post('records/{id}', [AdminController::class, 'store']);

  Route::get('admin', [AdminController::class, 'show'])->name('admin');

  Route::get('records/{id}', [AdminController::class, 'index']);

  Route::get('patients', [UserController::class, 'index']);

  Route::get('patient-self', [UserController::class, 'me']);

  Route::get('patients/{id}', [UserController::class, 'show']);
});

Route::get('zozh', [BackendHospitalController::class, 'zozh']);
