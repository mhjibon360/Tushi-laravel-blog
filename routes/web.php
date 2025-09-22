<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\Backend\BackendController;

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/store/contact/message', 'storecontact')->name('store.contact.message')->middleware(['auth', 'verified']);
    Route::post('/store/newsletter', 'storenewsletter')->name('store.newsletter')->middleware(['auth', 'verified']);
    Route::get('/details/{slug}', 'details')->name('post.details');
    Route::get('/category/{category_slug}', 'category')->name('post.category');
    Route::get('/author/{username}', 'author')->name('post.author');
    Route::get('/blogs', 'allblogs')->name('all.blogs');
    Route::get('/all/authors', 'allauthors')->name('all.authors');
    Route::get('/featured', 'allfeatured')->name('all.featured');
    Route::get('/tag/{tag_slug}', 'tag')->name('post.tag');
    Route::get('/search-blog', 'searchblog')->name('search.blog');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');

        Route::get('/edit/profile', 'editprofile')->name('edit.profile');
        Route::put('/update/profile', 'updateprofile')->name('update.profile');

        Route::get('/change/password', 'editpassword')->name('edit.password');
        Route::put('/update/password', 'updatepassword')->name('update.password');

        Route::get('/newsletter/', 'newsletter')->name('newsletter');

        Route::get('/contact/message', 'contactmessage')->name('contact.message');
    });
});


Route::controller(SocialAuthController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook');
    Route::get('/auth/facebook/callback', 'handleFacebookCallback');
});

// Route::middleware(['auth', 'verified'])->group(function () {
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
