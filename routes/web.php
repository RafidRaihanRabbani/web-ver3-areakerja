<?php

use App\Http\Controllers\Admin\LowonganMitraController as AdminLowonganMitraController;
use App\Http\Controllers\Admin\LowongannController as AdminLowongannController;
use App\Http\Controllers\Admin\MitraController as AdminMitraController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\TopupController;
use App\Models\cabang;
use App\Models\Location;
use App\Models\province;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/home', '/mitra');
Route::redirect('/awal', '/kandidat');
Route::redirect('/awal2', '/admin');

Route::get('/Frequently_Asked_Questions' , function (){
    $title = 'FAQ';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('faq.questions', compact(['title','cabang','cabanghr','province']));
})->name('FAQ');

Route::get('/Recruitment' , function (){
    $title = 'Recruitment';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('recruitment.recruit', compact(['title','cabang','cabanghr','province']));
})->name('recruitment');

Route::get('/Load more' , function (){
    $title = 'Recruitment';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('recruitment.loadmore', compact(['title','cabang','cabanghr','province']));
})->name('recruitment');

Route::get('/draftregister' , function (){
    return view('auth.draft');
})->name('register');

Route::get('/draftprice' , function (){
    return view('price.draft');
})->name('price');

Route::get('/draftprice2' , function (){
    return view('price.draft2');
})->name('price2');

Route::get('/draftprice3' , function (){
    return view('price.draft3');
})->name('price3');

Route::get('/draftkatasandi' , function (){
    return view('draft.draft');
})->name('notiflogin');

Route::get('/draftadminpanel' , function (){
    return view('draft.draftadmin');
})->name('notiflogin');

Route::get('/loginfinance' , function (){
    return view('finance.login');
})->name('loginfinance');

Route::get('/landing_melamar_kerja' , function (){
    return view('landing.landing1');
})->name('landing1');

Route::get('/landing_pasang_lowongan' , function (){
    return view('landing.landing2');
})->name('landing2');

Route::get('/landing_talent_hunter' , function (){
    return view('landing.landing3');
})->name('landing3');

Route::get('/landing_rekrut_karyawan_profesional' , function (){
    return view('landing.landing4');
})->name('landing4');

Route::get('/landing_scroll' , function (){
    return view('landing.landingscroll');
})->name('combined');

Route::get('/Top up' , function (){
    return view('coin.topup');
})->name('topup');

Route::get('/navbarversuperadmin' , function (){
    return view('navbar.navbarver2');
})->name('navver3');

Route::get('/navbarverfinance' , function (){
    return view('navbar.navbarver3');
})->name('navver2');

Route::get('/navbarveradmin' , function (){
    return view('navbar.navbarver');
})->name('navver');

Route::get('/navbarper' , function (){
    return view('navbar.navbar2');
})->name('nav2');

Route::get('/navbar' , function (){
    return view('navbar.navbar');
})->name('nav');

Route::get('/profil' , function (){
    return view('profil.editprofil');
})->name('profil');

Route::get('/berhasil' , function (){
    return view('profil.Berhasil');
})->name('Berhasil');

Route::get('/adminlupa' , function (){
    return view('admin.lupa');
})->name('adminlupa');

Route::get('/adminlogin' , function (){
    return view('admin.login');
})->name('adminlogin');

Route::get('/adminreset' , function (){
    return view('admin.reset');
})->name('adminreset');

Route::get('/adminveri' , function (){
    return view('admin.verifikasi');
})->name('adminveri');

Route::get('/superadminlogin' , function (){
    return view('superadmin.login');
})->name('superlogin');

Route::get('/superadminreset' , function (){
    return view('superadmin.reset');
})->name('superreset');

Route::get('/superadminlupa' , function (){
    return view('superadmin.lupa');
})->name('superlupa');

Route::get('/superadminveri' , function (){
    return view('superadmin.verifikasi');
})->name('superverifikasi');

Route::get('/kandidat' , function (){
    return view('pasang.kandidat');
})->name('daftar');

Route::get('/isidata' , function (){
    return view('popup.isidata');
})->name('isi');

Route::get('/notfoundauth' , function (){
    return view('auth.notfound');
})->name('notfound');

Route::get('/loginmitra' , function (){
    return view('mitra.auth.login');
})->name('LoginPer');

Route::get('/resetauth' , function (){
    return view('auth.reset');
})->name('resetpass');

Route::get('/resetper' , function (){
    return view('mitra.auth.reset');
})->name('resetper');

Route::get('/dashboard' , function (){
    return view('dashboard.pengaturan');
})->name('pengaturan');

Route::get('/pengaturandraft' , function (){
    $title = 'DRAFT';

    return view('pengaturan.draft', compact(['title',]));
})->name('draftpengaturan');

Route::get('/pengaturandraf2' , function (){
    return view('pengaturan.draft2');
})->name('draftpengaturan2');

Route::get('/pengaturan' , function (){
    return view('pengaturan.pengaturan');
})->name('setting');

Route::get('/editlowongan' , function (){
    return view('perusahaan.editlowongan');
})->name('editlowongan');

Route::get('/calender' , function (){
    return view('calender.bataslamaran');
})->name('calender');


Route:: get('/lupaauth' , function () {
    return view('auth.lupa');
})->name('Lupapasspela');

Route:: get('/lupaauthper' , function () {
    return view('mitra.auth.lupa');
})->name('Lupapassper');

Route::get('/registermitra' , function (){
    return view('mitra.auth.register2');
})->name('registerperu');

Route::get('/verifikasiauth' , function (){
    return view('auth.verifikasi');
})->name('verifikasi');

Route::get('/verifikasimitra' , function (){
    return view('mitra.auth.verifikasi2');
})->name('verifikasi2');

Route::get('/carilowongan' , function (){
    return view('lowongan.cari');
})->name('cari');

Route::get('/isi' , function (){
    $title = 'isi';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('isidata.isi', compact(['title','cabang','cabanghr','province']));
})->name('isi');

Route::get('/pelamar' , function (){
    $title = 'Pelamar';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('pelamar.index', compact(['title','cabang','cabanghr','province']));
})->name('pelamar');

Route::get('/Konfirmasi' , function (){
    $title = 'Pelamar';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('pelamar.Konfirmasi', compact(['title','cabang','cabanghr','province']));
})->name('Konfirmasi');

Route::get('/Interview' , function (){
    $title = 'Pelamar';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('pelamar.Konfirmasi2', compact(['title','cabang','cabanghr','province']));
})->name('Keterima');


Route::get('/kandidat_AK' , function (){
    $title = 'Kandidat Area Kerja';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('kandidat.AK', compact(['title','cabang','cabanghr','province']));
})->name('AK');

Route::get('/kandidatdaftar' , function (){
    $title = 'Kandidat Daftar';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('kandidat.daftar', compact(['title','cabang','cabanghr','province']));
})->name('daftar');

Route::get('/talent' , function (){
    $title = 'Talent';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('talent.hunter', compact(['title','cabang','cabanghr','province']));
})->name('talent');

Route::get('/syarat_dan_ketentuan' , function (){
    $title = 'syarat';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('syarat.syarat', compact(['title','cabang','cabanghr','province']));
})->name('syarat');



Route::get('/hunter' , function (){
    $title = 'Hunter';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('talent.talent', compact(['title','cabang','cabanghr','province']));
})->name('hunter');

Route::get('/berandaauthpe' , function (){
    $title = 'Beranda Pelamar';
        $cabang = cabang::get();
        $cabanghr = cabang::get()->last();
        $province = province::all();

        return view('beranda.berandape', compact(['title','cabang','cabanghr','province']));
})->name('berandape');

Route::get('/berandaauthper' , function (){
    $title = 'Beranda Perusahaan';
    $cabang = cabang::get();
    $cabanghr = cabang::get()->last();
    $province = province::all();

    return view('beranda.berandaper', compact(['title','cabang','cabanghr','province']));
})->name('berandaper');

Route::get('/profile' , function (){
    $title = 'Profile Perusahaan';
    $cabang = cabang::get();
    $cabanghr = cabang::get()->last();
    $province = province::all();

    return view('pengaturan.profile', compact(['title','cabang','cabanghr','province',]));
})->name('profile');

Route::get('/profile2' , function (){
    $title = 'Profile Perusahaan';
    $cabang = cabang::get();
    $cabanghr = cabang::get()->last();
    $province = province::all();

    return view('pengaturan.profile2', compact(['title','cabang','cabanghr','province',]));
})->name('profile2');

Route::get('/alamatedit' , function (){
    $title = 'alamat edit';
    $cabang = cabang::get();
    $cabanghr = cabang::get()->last();
    $province = province::all();

    return view('pengaturan.alamat', compact(['title','cabang','cabanghr','province',]));
})->name('profile2');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/pasang/{nama}', 'JobController@pasang')->name('pasang');
Route::get('/daftarmitra', 'JobController@daftarmitra')->name('daftarmitra');
Route::get('/daftarkandidat', 'JobController@daftarkandidat')->name('daftarkandidat');
Route::get('/daftarmitra', 'MitraController@daftarmitra')->name('daftarmitra');
Route::get('/pilihpaket', 'JobController@pilihpaket')->name('pilihpaket');
Route::get('/pasang2', 'JobController@pasang2')->name('pasang2');
Route::get('/rekomendasi', 'JobController@rekomendasi')->name('rekomendasi');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');
// Route::get('/cache', 'CacheController@index')->name('cache');
Route::get('/getuser', 'UserSystemInfoController@getusersysteminfo')->name('getuser');
Route::post('/kontakform', 'HomeController@kirimmail')->name('kontakform');
// Route::get('/cache/{id}', 'CacheController@index')->name('cache');
Route::get('/cache/{id}', 'CacheController@get_client_ip')->name('cache');
Route::get('/riwayat/{slug}', 'CacheController@riwayat')->name('riwayat');
Route::get('/company/{slug}', 'CompaniesController@index')->name('compan');
// Route::resource('artikel', 'ArtikelController')->only(['artikel', 'show']);
Route::get('/artikel', 'ArtikelController@artikel')->name('artikel');
Route::get('/artikel/{slug}', 'ArtikelController@show')->name('artikel.show');



Route::get('/province/{id}', 'HomeController@province');
// Route::get('lamarmail/{parameter}', [
//     'as'=> 'lamarmail',
//     'uses'=>'HomeController@lamarmail'
// ]);
Route::get('/lamarmail/{name}/{umur}', 'HomeController@lamarmail')->name('lamarmail');
// Route::post('/formpasang', 'LowonganController@formpasang')->name('formpasang');
Route::post('/formpasang', 'HomeController@formpasang')->name('formpasang');
Route::post('/pembayaran/{id}', 'LowonganController@pembayaran')->name('pembayaran');
// Route::get('/backkontak', 'HomeController@backkontak')->name('backkontak');

Route::post('payments/notification', 'PaymentController@notification');
Route::get('payments/completed', 'PaymentController@completed');
Route::get('payments/failed', 'PaymentController@failed');
Route::get('payments/unfinish', 'PaymentController@unfinish');

Route::post('topup/notification', [TopupController::class, 'notification'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::get('topup/completed', [TopupController::class, 'completed']);
Route::get('topup/failed', [TopupController::class, 'failed']);
Route::get('topup/unfinish', [TopupController::class, 'unfinish']);

// Route::get('/mitra/dashboard', 'AdminCompanyController@index')->name('mitra.dashboard');
Route::get('/mitra/login', 'AdminCompanyController@login')->name('mitra.login');

Route::post('/formMitra', 'MitraController@index')->name('formMitra');

Route::get('search', 'HomeController@search')->name('search');
Route::resource('jobs', 'JobController')->only(['index']);
Route::get('jobs/{slug}', 'JobController@show')->name('jobs.show');
Route::delete('delete/{id}', 'JobController@delete')->name('jobs.delete');
Route::get('category/{slug}', 'CategoryController@show')->name('categories.show');
Route::get('location/{slug}', 'LocationController@show')->name('locations.show');
Route::get('/getid', 'HomeController@addcart')->name('addcart');

Route::get('/get_client_ip', 'CacheController@get_client_ip')->name('get_client_ip');

Route::post('/formkandidat', [KandidatController::class, 'formkandidat'])->name('formkandidat');
Route::post('/formmitra', 'MitraController@index')->name('formmitra');

Route::group(['prefix' => 'mitra', 'as' => 'mitra.', 'namespace' => 'Mitra', 'middleware' => ['CekRole:mitra']], static function () {
    Route::get('/', 'AdminCompanyController@index')->name('home');

    Route::get('/out', 'AdminCompanyController@out')->name('out');

    // ============== Profil ======================
    Route::resource('profil', 'ProfilController');

    // ============== Lowongan ======================
    Route::resource('lowongan', 'DaftarLowonganController');

    // ============== Topup ======================
    Route::get('/topup/{id}/{harga}/{jumlah}', 'TopupController@topup')->name('mitra.topup');
    Route::resource('topup', 'TopupController');

    // ============== Kandidat ======================
    // Route::resource('kandidat', 'KandidatController');
    Route::get('/kandidat', 'KandidatController@index')->name('kandidat.index');
    Route::post('/kandidat/buka', 'KandidatController@open')->name('kandidat.buka');
    Route::get('/kandidat/show/{slug}', 'KandidatController@show')->name('kandidat.show');
    Route::get('/kandidat/hire/{id}', 'KandidatController@hire')->name('kandidat.hire');

    // ============== Hire ======================
    Route::resource('hire', 'HireController');

    // ============== User ======================
    Route::resource('user', 'UserController');

    // ============== Chat ======================
    Route::post('/chat/send', 'ChatController@send')->name('chat.send');
    Route::get('/chat/seger/{id}', 'ChatController@seger')->name('chat.seger');
    Route::resource('chat', 'ChatController');

    // Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    // Route::resource('categories', 'CategoriesController');
    // // Permissions
    // Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    // Route::resource('permissions', 'PermissionsController');

    // // Roles
    // Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    // Route::resource('roles', 'RolesController');

    // // Users
    // Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    // Route::resource('users', 'UsersController');

    // // Categories
    // Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    // Route::resource('categories', 'CategoriesController');
    // // Jobs
    // Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    // Route::resource('jobs', 'JobsController');

    // //Location
    // Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    // Route::resource('locations', 'LocationsController');

    // // Companies
    // Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    // Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    // Route::resource('companies', 'CompaniesController');

    // Route::delete('lowongan/destroy', 'LowongannController@massDestroy')->name('lowongan.massDestroy');
    // // Route::get('/pembayaran/{id}', 'LowongannController@pembayaran')->name('pembayaran');
    // Route::resource('lowongan', 'LowongannController');

    // //Price
    // Route::delete('price/destroy', 'PriceController@massDestroy')->name('price.massDestroy');
    // Route::resource('price', 'PriceController');

    // Route::delete('article/destroy', 'ArticleController@massDestroy')->name('article.massDestroy');
    // Route::resource('article', 'ArticleController');
});

Route::group(['prefix' => 'kandidat', 'as' => 'kandidat.', 'namespace' => 'Kandidat', 'middleware' => ['CekRole:kandidat']], static function () {
    Route::get('/', 'KandidatKController@index')->name('awal');

    // ============== Perusahaan ======================
    Route::get('/lowongan', 'KandidatKController@lowongan')->name('kandidat.lowongan');

    // ============== Kandidat ======================
    Route::resource('kandidat', 'KandidatKController');

    // ============== Chat ======================
    Route::post('/chat/send', 'ChatController@send')->name('chat.send');
    Route::get('/chat/seger/{id}', 'ChatController@seger')->name('chat.seger');
    Route::resource('chat', 'ChatController');

    Route::get('/out', 'KandidatKController@out')->name('out');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['CekRole:admin']], static function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Categories
    Route::delete('categories/destroy', 'CategoriesController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoriesController');
    // Jobs
    Route::delete('jobs/destroy', 'JobsController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobsController');

    // Location
    Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationsController');

    // Companies
    Route::delete('companies/destroy', 'CompaniesController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompaniesController@storeMedia')->name('companies.storeMedia');
    Route::resource('companies', 'CompaniesController');

    // Mitra
    Route::delete('mitra/destroy', 'MitraController@massDestroy')->name('mitra.massDestroy');
    Route::get('mitra/acc={id}', 'MitraController@acc')->name('mitra.acc');
    Route::resource('mitra', 'MitraController');
    Route::get('/addmitra/{id}', [AdminMitraController::class, 'addmitra'])->name('addmitra');
    Route::post('/addmitra/acc/{id}', [AdminMitraController::class, 'acc'])->name('accmitra');

    // Lowongan
    Route::delete('lowongan/destroy', 'LowongannController@massDestroy')->name('lowongan.massDestroy');
    // Route::get('/pembayaran/{id}', 'LowongannController@pembayaran')->name('pembayaran');
    // Route::get('/addjob/{id}', 'LowongannController@addjob')->name('addjob');
    Route::get('/addjob/lowongan/{id}', [AdminLowongannController::class, 'addjob'])->name('addjoblowongan');
    Route::resource('lowongan', 'LowongannController');

    // Calon Kandidat
    Route::resource('calonkandidat', 'CalonController');
    Route::post('/kandidat/acc/{id}', 'KandidatController@acc')->name('kandidat.acc');

    // Kandidat
    Route::resource('kandidat', 'KandidatController');

    // Price
    Route::delete('price/destroy', 'PriceController@massDestroy')->name('price.massDestroy');
    Route::resource('price', 'PriceController');

    Route::delete('article/destroy', 'ArticleController@massDestroy')->name('article.massDestroy');
    Route::resource('article', 'ArticleController');

    Route::resource('lowonganmitra', 'LowonganMitraController');
    Route::get('/addjob/mitra/{id}', [AdminLowonganMitraController::class, 'addjob'])->name('addjobmitra');
    Route::post('/addjob', [AdminLowonganMitraController::class, 'storejob'])->name('lowonganmitra.storejob');


    //cabang
    Route::get('/cabang', 'CabangController@index');
    Route::get('/cabang/create', 'CabangController@create');
    Route::post('/cabang/store', 'CabangController@store');
    Route::get('/cabang/edit/{id}', 'CabangController@edit');
    Route::post('/cabang/update/{id}', 'CabangController@update');
    Route::get('/cabang/destroy/{id}', 'CabangController@destroy');

    //contact
    Route::get('/contact', 'contactController@index');
    Route::get('/contact/create', 'contactController@create');
    Route::post('/contact/store', 'contactController@store');
    Route::get('/contact/edit/{id}', 'contactController@edit');
    Route::post('/contact/update/{id}', 'contactController@update');
    Route::get('/contact/destroy/{id}', 'contactController@destroy');

    //province
    Route::get('/provinces', 'ProvincesController@index');
    Route::get('/provinces/create', 'ProvincesController@create');
    Route::post('/provinces/store', 'ProvincesController@store');
    Route::get('/provinces/edit/{id}', 'ProvincesController@edit');
    Route::post('/provinces/update/{id}', 'ProvincesController@update');
    Route::get('/provinces/destroy/{id}', 'ProvincesController@destroy');

    //City
    Route::get('/cities', 'CitiesController@index');
    Route::get('/cities/create', 'CitiesController@create');
    Route::post('/cities/store', 'CitiesController@store');
    Route::get('/cities/edit/{id}', 'CitiesController@edit');
    Route::post('/cities/update/{id}', 'CitiesController@update');
    Route::get('/cities/destroy/{id}', 'CitiesController@destroy');
    Route::post('api/fetch-cities', 'CitiesController@dropdown');

    Route::post('/province', 'HomeController@titid');

    
});