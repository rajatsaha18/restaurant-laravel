<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\website\BookingController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\TableReserveController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\BrandLogoController;
use App\Http\Controllers\Admin\MenuListController;
use App\Http\Controllers\website\DownloadPdfController;

/*==============Website============*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/food-menu/{id}', [HomeController::class, 'foodMenu'])->name('foodmenu');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-create', [HomeController::class, 'contactNew'])->name('contact.create');
Route::get('/book-table', [BookingController::class, 'bookTable'])->name('book.table');
Route::post('/new-book-table', [BookingController::class, 'createTable'])->name('new.tablebook');
Route::get('/product-details/{id}', [HomeController::class, 'productDetail'])->name('product.details');
Route::get('/product-gallery', [HomeController::class, 'gallery'])->name('product.gallery');
Route::get('/team', [HomeController::class, 'teamMember'])->name('team');
Route::get('/blog/{id}', [HomeController::class, 'blogDetail'])->name('blog.detail');
Route::post('/subscribe', [HomeController::class, 'subscribe'])->name('subscribe');
Route::get('/menulist', [HomeController::class, 'menuList'])->name('menulist');
Route::get('/download-pdf', [DownloadPdfController::class, 'index'])->name('download.pdf');
Route::get('/menus', [HomeController::class, 'menuItemList'])->name('menu.itemlist');

// Route::get('/blog-details/{id}', [HomeController::class, 'blogDetails'])->name('blog.details');



/*===============Admin===================*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/new-profile', [ProfileController::class, 'create'])->name('profile.new');

    //about
    Route::get('/about-us', [AboutController::class, 'index'])->name('admin.about');
    Route::post('/create-about-us', [AboutController::class, 'create'])->name('admin.about.new');


    //blog
    Route::get('/blog-add', [BlogController::class, 'add'])->name('blog.add');
    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::post('/new-blog', [BlogController::class, 'create'])->name('blog.new');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/update-blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');

    //gallery
    Route::get('/gallery-add', [GalleryController::class, 'add'])->name('gallery.add');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('admin.gallery');
    Route::post('/new-gallery', [GalleryController::class, 'create'])->name('gallery.new');
    Route::get('/edit-gallery/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::post('/update-gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::get('/update-gallery/{id}', [GalleryController::class, 'delete'])->name('gallery.delete');

    //team-member
    Route::get('/team-member-add', [TeamMemberController::class, 'add'])->name('team.member.add');
    Route::get('/team-member', [TeamMemberController::class, 'index'])->name('admin.team.member');
    Route::post('/new-team-member', [TeamMemberController::class, 'create'])->name('team.member.new');
    Route::get('/edit-team-member/{id}', [TeamMemberController::class, 'edit'])->name('team.member.edit');
    Route::post('/update-team-member/{id}', [TeamMemberController::class, 'update'])->name('team.member.update');
    Route::get('/update-team-member/{id}', [TeamMemberController::class, 'delete'])->name('team.member.delete');


    //slider
    Route::get('/manage-slider', [SliderController::class, 'index'])->name('slider.manage');
    Route::get('/create-slider', [SliderController::class, 'create'])->name('slider.add');
    Route::post('/new-slider', [SliderController::class, 'createSlider'])->name('slider.new');
    Route::get('/edit-slider/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/update-slider/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('/delete-slider/{id}', [SliderController::class, 'delete'])->name('slider.delete');

    //banner
    Route::get('/home-banner', [BannerController::class, 'homeBanner'])->name('banner.home');
    Route::post('/create-home-banner', [BannerController::class, 'createHomeBanner'])->name('homebanner.new');
    Route::post('/create-delicious-banner', [BannerController::class, 'createDeliousBanner'])->name('deliciousbanner.new');
    Route::post('/create-discount-banner', [BannerController::class, 'createDiscountBanner'])->name('discountbanner.new');
    Route::post('/create-food-delivery-banner', [BannerController::class, 'createFoodDeliveryBanner'])->name('foodDelivery.new');
    Route::post('/create-food-menu-banner', [BannerController::class, 'createFoodMenu'])->name('foodmenu.new');



    //Category
    Route::get('/add-category', [CategoryController::class, 'index'])->name('category.add');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('category.manage');
    Route::post('/new-category', [CategoryController::class, 'create'])->name('category.new');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');


    //subcategory
    Route::get('/add-subcategory', [SubCategoryController::class, 'index'])->name('subCategory.add');
    Route::get('/manage-subcategory', [SubCategoryController::class, 'manage'])->name('subCategory.manage');
    Route::post('/create-subcategory', [SubCategoryController::class, 'create'])->name('subCategory.new');
    Route::get('/edit-subcategory/{id}', [SubCategoryController::class, 'edit'])->name('subCategory.edit');
    Route::post('/update-subcategory/{id}', [SubCategoryController::class, 'update'])->name('subCategory.update');
    Route::get('/delete-subcategory/{id}', [SubCategoryController::class, 'delete'])->name('subCategory.delete');

    //product
    Route::get('/add-product', [ProductController::class, 'index'])->name('product.add');
    Route::get('/get-sub-category', [ProductController::class, 'getSubCategory'])->name('product.get-sub-category');
    Route::get('/manage-product', [ProductController::class, 'manage'])->name('product.manage');
    Route::post('/new-product', [ProductController::class, 'create'])->name('product.new');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('product.delete');


    //Table Book
    Route::get('/table-book-info', [TableReserveController::class, 'index'])->name('admin.book.table');
    Route::get('/delete-table/{id}', [TableReserveController::class, 'delete'])->name('table.delete');


    //general settings
    Route::get('/general-settings', [GeneralSettingsController::class, 'index'])->name('general.settings');
    Route::post('/general-contact', [GeneralSettingsController::class, 'generalContact'])->name('general.contact');
    Route::post('/general-website', [GeneralSettingsController::class, 'generalWebsite'])->name('general.website');

    //subscribe
    Route::get('/subscribe', [SubscribeController::class, 'index'])->name('subscribe.admin');
    Route::get('/delete/{id}', [SubscribeController::class, 'delete'])->name('subscribe.delete');


    //brand logo
    Route::get('/brand-logo', [BrandLogoController::class, 'index'])->name('brand.logo');
    Route::get('/brand-add', [BrandLogoController::class, 'add'])->name('brand.add');
    Route::post('/new-brand', [BrandLogoController::class, 'create'])->name('brand.new');
    Route::get('/edit-brand/{id}', [BrandLogoController::class, 'edit'])->name('brand.edit');
    Route::post('/update-brand/{id}', [BrandLogoController::class, 'update'])->name('brand.update');
    Route::get('/delete-brand/{id}', [BrandLogoController::class, 'delete'])->name('brand.delete');

    //menulist
    Route::get('/menulist-manage', [MenuListController::class, 'manage'])->name('menulist.manage');
    Route::get('/menulist-add', [MenuListController::class, 'index'])->name('menulist.add');
    Route::post('/new-menulist', [MenuListController::class, 'create'])->name('menulist.new');
    Route::get('/edit-menulist/{id}', [MenuListController::class, 'edit'])->name('menulist.edit');
    Route::post('/update-menulist/{id}', [MenuListController::class, 'update'])->name('menulist.update');
    Route::get('/delete-menulist/{id}', [MenuListController::class, 'delete'])->name('menulist.delete');






});
