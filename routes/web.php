<?php
use App\Controllers\Admin\ProductController;
use App\Controllers\Admin\MainController;
use App\Controllers\Admin\Users\LoginController;
use App\Controllers\Admin\MenuController;
use App\Controllers\Admin\UploadController;
use App\Controllers\Admin\SliderController;
use App\Controllers\Admin\AdvertisesController;
use App\Controllers\FaqController;

$_Routes['admin/users/login']=[LoginController::class,'login'];
$_Routes['admin/users/login/store']=[LoginController::class,'store'];
$_Routes['admin/main']=[MainController::class,'index'];
//admin

$_Routes['admin/menus/add'] = [MenuController::class, 'create'];
$_Routes['admin/menus/store'] = [MenuController::class, 'store'];
$_Routes['admin/menus/lists'] = [MenuController::class, 'index'];
$_Routes['admin/menus/edit/{id}'] = [MenuController::class, 'edit'];
$_Routes['admin/menus/update/{id}'] = [MenuController::class, 'update'];
$_Routes['admin/menus/delete'] = [MenuController::class, 'remove'];

$_Routes['admin/upload'] = [UploadController::class, 'upload'];



#Product
$_Routes['admin/products/add'] = [ProductController::class, 'create'];
$_Routes['admin/products/store'] = [ProductController::class, 'store'];
$_Routes['admin/products/lists'] = [ProductController::class, 'index'];
$_Routes['admin/products/edit/{id}'] = [ProductController::class, 'edit'];
$_Routes['admin/products/update/{id}'] = [ProductController::class, 'update'];
$_Routes['admin/products/delete'] = [ProductController::class, 'remove'];



#silder

$_Routes['admin/sliders/add'] = [SliderController::class, 'create'];
$_Routes['admin/sliders/store'] = [SliderController::class, 'store'];
$_Routes['admin/sliders/lists'] = [SliderController::class, 'index'];
$_Routes['admin/sliders/edit/{id}'] = [SliderController::class, 'edit'];
$_Routes['admin/sliders/update/{id}'] = [SliderController::class, 'update'];
$_Routes['admin/sliders/delete'] = [SliderController::class, 'remove'];


$_Routes['admin/advertiser/add'] = [AdvertisesController::class, 'create'];
$_Routes['admin/advertiser/store'] = [AdvertisesController::class, 'store'];
$_Routes['admin/advertiser/lists'] = [AdvertisesController::class, 'index'];
$_Routes['admin/advertiser/delete'] = [AdvertisesController::class, 'remove'];


$_Routes['faq.html'] = [FaqController::class, 'index'];



$_Routes['danh-muc/{slug}-id{id}.html'] = [App\Controllers\MenuController::class, 'index'];

