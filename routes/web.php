<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController\HomeController;
use App\Http\Controllers\FrontendController\PageController;
use App\Http\Controllers\FrontendController\HostingPageController;
use App\Http\Controllers\FrontendController\DomainPageController;

//******************//
/**
 *    Frontend
 */
//******************// 
// All Index Pages Routing
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'indexOne')->name('home');
    Route::get('index-two', 'indexTwo')->name('indexTwo');
    Route::get('index-three', 'indexThree')->name('indexThree');
    Route::get('index-four', 'indexFour')->name('indexFour');
    Route::get('index-five', 'indexFive')->name('indexFive');
    Route::get('index-six', 'indexSix')->name('indexSix');
    Route::get('index-seven', 'indexSeven')->name('indexSeven');
    Route::get('index-eight', 'indexEight')->name('indexEight');
    Route::get('index-nine', 'indexNine')->name('indexNine');
    Route::get('index-ten', 'indexTen')->name('indexTen');
    Route::get('index-eleven', 'indexEleven')->name('indexEleven');
});

// Hosting Pages Routing
Route::controller(HostingPageController::class)->group(function () {
    Route::get('shared-hosting', 'sharedHosting')->name('sharedHosting');
    Route::get('wprdpress-hosting', 'WordPressHosting')->name('WordPressHosting');
    Route::get('vps-hosting', 'vpsHosting')->name('vpsHosting');
    Route::get('reseller-hosting', 'resellerHosting')->name('resellerHosting');
    Route::get('dedicated-hosting', 'dedicatedHosting')->name('dedicatedHosting');
    Route::get('cloud-hosting', 'cloudHosting')->name('cloudHosting');
});

// Domain Pages Routing
Route::controller(DomainPageController::class)->group(function () {
    Route::get('domain-checker', 'domainChecker')->name('domainChecker');
    Route::get('domain-transfer', 'domainTransfer')->name('domainTransfer');
    Route::get('domain-register', 'domainRegister')->name('domainRegister');
    Route::get('whois', 'whois')->name('whois');
});

// Other Pages Routing
Route::controller(PageController::class)->group(function () {
    Route::get('sing-in', 'signIn')->name('signIn');
    Route::get('sing-up', 'signUp')->name('signUp');
    Route::get('about', 'about')->name('about');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('pricing-package', 'pricingPackage')->name('pricingPackage');
    Route::get('pricing-comparision', 'pricingComparision')->name('pricingComparision');
    Route::get('payment-method', 'paymentMethod')->name('paymentMethod');
    Route::get('affiliate', 'affiliate')->name('affiliate');
    Route::get('business-mail', 'businessMail')->name('businessMail');
    Route::get('ssl-certificate', 'sslCertificate')->name('sslCertificate');
    Route::get('partner', 'partner')->name('partner');
    Route::get('maintenance', 'maintenance')->name('maintenance');
    Route::get('black-friday', 'blackFriday')->name('blackFriday');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-grid', 'blogGrid')->name('blogGrid');
    Route::get('blog-list', 'blogList')->name('blogList');
    Route::get('blog-details', 'blogDetails')->name('blogDetails');
    Route::get('game-details', 'gameDetails')->name('gameDetails');
    Route::get('technology', 'technology')->name('technology');
    Route::get('data-center', 'dataCenter')->name('dataCenter');
    Route::get('faq', 'faq')->name('faq');
    Route::get('support', 'support')->name('support');
    Route::get('contact', 'contact')->name('contact');
    Route::get('knowledgebase', 'knowledgebase')->name('knowledgebase');
    Route::get('hosting-offer', 'hostingOffer')->name('hostingOffer');
    Route::get('error', 'errorPage')->name('errorPage');
});


