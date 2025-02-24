<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\TestimonialController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [GeneralController::class, 'index'])->name('main.index');
Route::get('/gallery', [GeneralController::class, 'gallery'])->name('main.gallery');
Route::get('/testimonials', [GeneralController::class, 'testimonials'])->name('main.testimonials');
Route::get('/projects', [GeneralController::class, 'projects'])->name('main.projects');
Route::get('/blogs', [GeneralController::class, 'blogs'])->name('main.blogs');
Route::get('/contact', [GeneralController::class, 'contact'])->name('main.contact');
Route::post('/volunteer', [GeneralController::class, 'volunteer'])->name('main.volunteer');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/signin', [AuthController::class, 'showLoginForm'])->name('showSignin');
        Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
        Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('showRegister');
        Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
        // Route::get('/forget-password', [UserController::class, 'showForgetPasswordForm'])->name('user.forgetPassword');
        // Route::post('/forget-password', [UserController::class, 'forgetPassword'])->name('user.forgetPassword');
        // Route::get('/reset-password', [UserController::class, 'showResetPasswordForm'])->name('user.resetPassword');
        // Route::post('/reset-password', [UserController::class, 'resetPassword'])->name('user.resetPassword');

    });

    Route::middleware(['auth:web'])->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        // business
        Route::group(['prefix' => 'business'], function () {
            Route::get('/add', [BusinessController::class, 'index'])->name('addBusiness');
            Route::post('/add', [BusinessController::class, 'addBusiness'])->name('business.add');
            Route::get('/profile', [BusinessController::class, 'profile'])->name('business.profile');
            Route::post('/edit/{business}', [BusinessController::class, 'editBusiness'])->name('business.edit');
            // Route::get('/analytics', [BusinessController::class, 'analytics'])->name('analytics');
        });
        // components
        Route::group(['prefix' => 'components'], function () {
            Route::get('/index', [BusinessController::class, 'components'])->name('components');
            Route::get('/impacts', [BusinessController::class, 'impacts'])->name('components.impacts');
            Route::post('/impacts/add', [BusinessController::class, 'impactsAdd'])->name('components.impacts.add');
            Route::post('/impacts/edit/{impact}', [BusinessController::class, 'impactsEdit'])->name('components.impacts.edit');
            Route::get('/category', [BusinessController::class, 'category'])->name('components.category');
            Route::post('/category/add', [BusinessController::class, 'addCategory'])->name('category.add');
            Route::get('/category/delete/{category}', [BusinessController::class, 'deleteCategory'])->name('category.delete');
            Route::get('/departments', [BusinessController::class, 'departments'])->name('components.departments');
            Route::post('/department/add', [BusinessController::class, 'addDepartment'])->name('department.add');
            Route::get('/department/delete/{department}', [BusinessController::class, 'deleteDepartment'])->name('department.delete');
            Route::get('/roles', [BusinessController::class, 'roles'])->name('components.roles');
            Route::post('/role/add', [BusinessController::class, 'addRole'])->name('role.add');
            Route::get('/role/delete/{role}', [BusinessController::class, 'deleteRole'])->name('role.delete');
        });
        // admins
        Route::group(['prefix' => 'admins'], function () {
            Route::get('/', [AdminController::class, 'index'])->name('admins');
            Route::get('/add', [AdminController::class, 'showAddAdmin'])->name('admin.showAdd');
            Route::get('/view/{user}', [AdminController::class, 'showAdmin'])->name('admin.showView');
            Route::get('/edit/{user}', [AdminController::class, 'showEditAdmin'])->name('admin.showEdit');
            Route::post('/add', [AdminController::class, 'addAdmin'])->name('admin.add');
            Route::post('/edit/{user}', [AdminController::class, 'editAdmin'])->name('admin.edit');
            Route::get('/delete/{user}', [AdminController::class, 'deleteAdmin'])->name('admin.delete');
            Route::get('/deactivate/{user}', [AdminController::class, 'deactivateAdmin'])->name('admin.deactivate');
            Route::get('/activate/{user}', [AdminController::class, 'activateAdmin'])->name('admin.activate');
        });
        // volunteers
        Route::group(['prefix' => 'volunteers'], function () {
            Route::get('/', [VolunteerController::class, 'index'])->name('volunteers');
            Route::get('/add', [VolunteerController::class, 'add'])->name('volunteer.add');
            Route::get('/view/{volunteer}', [VolunteerController::class, 'view'])->name('volunteer.view');
            Route::get('/edit/{volunteer}', [VolunteerController::class, 'edit'])->name('volunteer.edit');
            Route::post('/add', [VolunteerController::class, 'store'])->name('volunteer.store');
            Route::post('/edit/{volunteer}', [VolunteerController::class, 'update'])->name('volunteer.update');
            Route::get('/delete/{volunteer}', [VolunteerController::class, 'delete'])->name('volunteer.delete');
            Route::get('/print/all', [VolunteerController::class, 'printAll'])->name('volunteer.printAll');
        });
        // sponsors
        Route::group(['prefix' => 'sponsors'], function () {
            Route::get('/', [SponsorsController::class, 'index'])->name('sponsors');
            Route::get('/add', [SponsorsController::class, 'add'])->name('sponsor.add');
            Route::get('/view/{id}', [SponsorsController::class, 'view'])->name('sponsor.view');
            Route::get('/edit/{id}', [SponsorsController::class, 'edit'])->name('sponsor.edit');
            Route::post('/add', [SponsorsController::class, 'store'])->name('sponsor.store');
            Route::post('/edit/{sponsor}', [SponsorsController::class, 'update'])->name('sponsor.update');
            Route::get('/delete/{sponsor}', [SponsorsController::class, 'delete'])->name('sponsor.delete');
            Route::get('/print/all', [SponsorsController::class, 'printAll'])->name('sponsor.printAll');
        });
        // projects
        Route::prefix('projects')->group(function () {
            Route::get('/', [ProjectController::class, 'index'])->name('projects');
            Route::get('add', [ProjectController::class, 'add'])->name('projects.add');
            Route::post('/add', [ProjectController::class, 'store'])->name('projects.store');
            Route::get('/view/{project}', [ProjectController::class, 'view'])->name('projects.view');
            Route::get('/print/all', [ProjectController::class, 'pdfAll'])->name('projects.printAll');
            Route::get('/print/{project}', [ProjectController::class, 'pdf'])->name('projects.print');
            Route::get('/edit/{project}', [ProjectController::class, 'edit'])->name('projects.edit');
            Route::post('/edit/{project}', [ProjectController::class, 'update'])->name('projects.update');
            Route::get('/delete/{project}', [ProjectController::class, 'delete'])->name('projects.delete');
            Route::get('/activate/{project}', [ProjectController::class, 'activate'])->name('projects.activate');
            Route::get('/deactivate/{project}', [ProjectController::class, 'deactivate'])->name('projects.deactivate');
            Route::get('/complete/{project}', [ProjectController::class, 'complete'])->name('projects.complete');
            Route::get('/list', [ProjectController::class, 'searchProjects']);
        });
        // testimonials
        Route::group(['prefix' => 'testimonials'], function () {
            Route::get('/', [TestimonialController::class, 'index'])->name('testimonials');
            Route::get('/add', [TestimonialController::class, 'add'])->name('testimonial.add');
            Route::get('/view/{id}', [TestimonialController::class, 'view'])->name('testimonial.view');
            Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
            Route::post('/add', [TestimonialController::class, 'store'])->name('testimonial.store');
            Route::post('/edit/{testimonial}', [TestimonialController::class, 'update'])->name('testimonial.update');
            Route::get('/delete/{testimonial}', [TestimonialController::class, 'delete'])->name('testimonial.delete');
            Route::get('/print/all', [TestimonialController::class, 'printAll'])->name('testimonial.printAll');
        });
        // blogs
        Route::group(['prefix' => 'blogs'], function () {
            Route::get('/', [BlogController::class, 'index'])->name('blogs');
            Route::get('/add', [BlogController::class, 'add'])->name('blog.add');
            Route::get('/view/{id}', [BlogController::class, 'view'])->name('blog.view');
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
            Route::post('/add', [BlogController::class, 'store'])->name('blog.store');
            Route::post('/edit/{blog}', [BlogController::class, 'update'])->name('blog.update');
            Route::get('/delete/{blog}', [BlogController::class, 'delete'])->name('blog.delete');
            Route::get('/print/all', [BlogController::class, 'printAll'])->name('blog.printAll');
        });
        // gallery
        Route::prefix('gallery')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('gallery');
            Route::get('add', [GalleryController::class, 'add'])->name('gallery.add');
            Route::post('/add', [GalleryController::class, 'store'])->name('gallery.store');
            Route::get('/view/{gallery}', [GalleryController::class, 'view'])->name('gallery.view');
            Route::get('/edit/{gallery}', [GalleryController::class, 'edit'])->name('gallery.edit');
            Route::post('/edit/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
            Route::post('/delete/{gallery}', [GalleryController::class, 'delete'])->name('gallery.delete');
            Route::post('/cancel/{gallery}', [GalleryController::class, 'cancel'])->name('gallery.cancel');
        });

    });
});
