<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\Categorycontroller;
use App\Http\Controllers\Backend\HomeBannerController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\Backend\NotificationController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\RoleInPermissionController;
use App\Http\Controllers\Backend\SettingController;

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::controller(BackendController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
        Route::get('/profile', 'editprofile')->name('edit.profile');
        Route::put('/profile/update', 'updateprofile')->name('update.profile');
        Route::put('/password/update', 'updatepassword')->name('update.password');
    });
    // language all routes
    Route::resource('/language', LanguageController::class);
    // category all routes
    Route::resource('/category', Categorycontroller::class);
    // tag all routes
    Route::resource('/tag', TagController::class);
    // tag all routes
    Route::controller(PostController::class)->group(function () {
        Route::post('/change/status', 'changestatus')->name('change.status');
    });
    Route::resource('/post', PostController::class);

    // about all routes
    Route::controller(AboutController::class)->group(function () {
        Route::get('/about', 'about')->name('manage.about');
        Route::put('/about/update', 'aboutupdate')->name('update.about');
    });


    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'setting')->name('setting');
        Route::get('/site/setting', 'sitesetting')->name('site.setting');
        Route::put('/site/setting/update', 'sitesettingupdate')->name('site.setting.update');

        Route::get('/seo/setting', 'seosetting')->name('seo.setting');
        Route::put('/seo/setting/update', 'seosettingupdate')->name('seo.setting.update');
    });

    // all notification routes
    Route::controller(NotificationController::class)->group(function () {
        Route::get('/all/subscriber/list', 'allsubscriberlist')->name('all.subscriber.list');
        Route::post('/send/newslettermessage', 'sendnewsletter')->name('send.newsletter.message');
        Route::get('/all/contact/message', 'allmessagelist')->name('all.contact.list');
        Route::delete('/delete/contact/message/{id}', 'deletemessagelist')->name('delete.contact.list');
    });

    // permission all routes
    Route::resource('/permission', PermissionController::class);
    
    // role all routes
    Route::resource('/role', RoleController::class);

    
    // admincontroller
    Route::resource('/account', AdminController::class);
});
