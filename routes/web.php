<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//__________AJAX ROUTES___________//
Route::get('get-client/message','Backend\userContactController@getClientMessage')->name('get.client.message');


//__________FrontEnd Route___________//
Route::get('/','FrontEnd\homeController@homemethod')->name('/');
Route::get('about-page','FrontEnd\AboutController@about_page')->name('about_page');
Route::get('history','FrontEnd\HistoryController@history')->name('history');
Route::get('vision','FrontEnd\VisionController@vision')->name('vision');
Route::get('mission','FrontEnd\MissionController@mission')->name('mission');

Route::get('generalAdmistration','FrontEnd\GeneralController@generalAdmistration')->name('general');
Route::get('finance','FrontEnd\FinanceController@finance')->name('finance');
Route::get('hr','FrontEnd\HRController@hr')->name('hr');


Route::get('contact','FrontEnd\contactController@contact')->name('contact');
Route::get('team','FrontEnd\temController@team')->name('team');
Route::get('director','FrontEnd\directorController@director')->name('director');
Route::get('service/{id}','FrontEnd\serviceController@service')->name('service');
Route::get('authority','FrontEnd\authorityController@authority')->name('authority');
Route::get('memorandum','FrontEnd\memorandumController@memorandum')->name('memorandum');
Route::get('statutes','FrontEnd\statutesController@statutes')->name('statutes');
Route::get('why_choose','FrontEnd\ChoseController@why_choosePage')->name('why_choose');


//_______client massage___________//
Route::post('contact/store','FrontEnd\contactController@store')->name('contact.store');


Route::group(['middleware' => 'auth'],function(){


//__________User____________//
Route::prefix('user')->group(function()
{
	Route::get('/view','Backend\UserController@view')->name('user.view');
	Route::get('/add','Backend\UserController@add')->name('user.add');
	Route::post('/store','Backend\UserController@store')->name('user.store');
	Route::get('/edit/{id}','Backend\UserController@edit')->name('user.edit');
	Route::post('/update/{id}','Backend\UserController@update')->name('user.update');
	Route::get('/delete/{id}','Backend\UserController@delete')->name('user.delete');
	Route::get('/active/{id}','Backend\UserController@active')->name('user.active');
	Route::get('/inactive/{id}','Backend\UserController@inactive')->name('user.inactive');
});



//________Profiles________//
Route::prefix('profiles')->group(function()
{
	Route::get('/view','Backend\ProfileController@view')->name('profiles.view');
	Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
	Route::post('/update','Backend\ProfileController@update')->name('profiles.update');
	Route::get('/password/view','Backend\ProfileController@passwordview')->name('profiles.password.view');
	Route::post('/profiles/password/update','Backend\ProfileController@passwordupdate')->name('profiles.password.update');
});


//________ Slider __________//
Route::prefix('slider')->group(function()
{
	Route::get('/slider/view','Backend\SliderController@view')->name('slider.view');
	Route::get('/slider/add','Backend\SliderController@add')->name('slider.add');
	Route::post('/slider/store','Backend\SliderController@store')->name('slider.store');
	Route::get('/slider/edit/{id}','Backend\SliderController@edit')->name('slider.edit');
	Route::post('/slider/update/{id}','Backend\SliderController@update')->name('slider.update');
	Route::get('/slider/delete/{id}','Backend\SliderController@delete')->name('slider.delete');
	Route::get('/slider/inacative/{id}','Backend\SliderController@inacative')->name('slider.inacative');
	Route::get('/slider/active/{id}','Backend\SliderController@active')->name('slider.active');
});



//________ Slider __________//
Route::prefix('package')->group(function()
{
	Route::get('category/view','Backend\ServiceCategoryController@view')->name('category.view');
	Route::get('category/add','Backend\ServiceCategoryController@add')->name('category.add');
	Route::post('category/store','Backend\ServiceCategoryController@store')->name('category.store');
	Route::get('category/edit/{id}','Backend\ServiceCategoryController@edit')->name('category.edit');
	Route::post('category/update/{id}','Backend\ServiceCategoryController@update')->name('category.update');
	Route::get('category/delete/{id}','Backend\ServiceCategoryController@delete')->name('category.delete');
	Route::get('category/inacative/{id}','Backend\ServiceCategoryController@inacative')->name('category.inacative');
	Route::get('category/active/{id}','Backend\ServiceCategoryController@active')->name('category.active');


    Route::get('services/view','Backend\ServicesController@view')->name('services.view');
	Route::get('services/add','Backend\ServicesController@add')->name('services.add');
	Route::post('services/store','Backend\ServicesController@store')->name('services.store');
	Route::get('services/edit/{id}','Backend\ServicesController@edit')->name('services.edit');
	Route::post('services/update/{id}','Backend\ServicesController@update')->name('services.update');
	Route::get('services/delete/{id}','Backend\ServicesController@delete')->name('services.delete');
	Route::get('services/inacative/{id}','Backend\ServicesController@inacative')->name('services.inacative');
	Route::get('services/active/{id}','Backend\ServicesController@active')->name('services.active');



	Route::get('FAQ/view','Backend\FAQController@view')->name('FAQ.view');
	Route::get('FAQ/add','Backend\FAQController@add')->name('FAQ.add');
	Route::post('FAQ/store','Backend\FAQController@store')->name('FAQ.store');
	Route::get('FAQ/edit/{id}','Backend\FAQController@edit')->name('FAQ.edit');
	Route::post('FAQ/update/{id}','Backend\FAQController@update')->name('FAQ.update');
	Route::get('FAQ/delete/{id}','Backend\FAQController@delete')->name('FAQ.delete');
	Route::get('FAQ/inacative/{id}','Backend\FAQController@inacative')->name('FAQ.inacative');
	Route::get('FAQ/active/{id}','Backend\FAQController@active')->name('FAQ.active');






});



//________ team __________//
Route::prefix('team')->group(function()
{
	Route::get('/employer/view','Backend\TeamController@view')->name('employer.view');
	Route::get('/employer/add','Backend\TeamController@add')->name('employer.add');
	Route::post('/employer/store','Backend\TeamController@store')->name('employer.store');
	Route::get('/employer/edit/{id}','Backend\TeamController@edit')->name('employer.edit');
	Route::post('/employer/update/{id}','Backend\TeamController@update')->name('employer.update');
	Route::get('/employer/delete/{id}','Backend\TeamController@delete')->name('employer.delete');
	Route::get('/employer/inacative/{id}','Backend\TeamController@inacative')->name('employer.inacative');
	Route::get('/employer/active/{id}','Backend\TeamController@active')->name('employer.active');


	Route::get('/director/view','Backend\DirectorController@view')->name('director.view');
	Route::get('/director/add','Backend\DirectorController@add')->name('director.add');
	Route::post('/director/store','Backend\DirectorController@store')->name('director.store');
	Route::get('/director/edit/{id}','Backend\DirectorController@edit')->name('director.edit');
	Route::post('/director/update/{id}','Backend\DirectorController@update')->name('director.update');
	Route::get('/director/delete/{id}','Backend\DirectorController@delete')->name('director.delete');
	Route::get('/director/inacative/{id}','Backend\DirectorController@inacative')->name('director.inacative');
	Route::get('/director/active/{id}','Backend\DirectorController@active')->name('director.active');

});


//________ Governance __________//
Route::prefix('governance')->group(function()
{
	
	//_________ Authority ____________//
	Route::get('/authority/add','Backend\AuthorityController@add')->name('authority.add');
	Route::post('/authority/update/{id}','Backend\AuthorityController@update')->name('authority.update');

	//_________ Memorandum ____________//
	Route::get('memorandum/add','Backend\MemorandumController@add')->name('memorandum.add');
	Route::post('/memorandum/update/{id}','Backend\MemorandumController@update')->name('memorandum.update');

	//_________ Statutes ____________//
	Route::get('statutes/add','Backend\StatutesController@add')->name('statutes.add');
	Route::post('/statutes/update/{id}','Backend\StatutesController@update')->name('statutes.update');


});


//________ adminstration __________//
Route::prefix('adminstration')->group(function()
{
	
	//_________ Authority ____________//
	Route::get('/generaladmistration/add','Backend\GenaralAdmistrationController@add')->name('generaladmistration.add');
	Route::post('/generaladmistration/update/{id}','Backend\GenaralAdmistrationController@update')->name('generaladmistration.update');

	//_________ Finance ____________//
	Route::get('/finance/add','Backend\FinanceAdmistrationController@add')->name('finance.add');
	Route::post('/finance/update/{id}','Backend\FinanceAdmistrationController@update')->name('finance.update');

//_________ HR ____________//
	Route::get('/hr/add','Backend\HRAdmistrationController@add')->name('hr.add');
	Route::post('/hr/update/{id}','Backend\HRAdmistrationController@update')->name('hr.update');

});


//____________compamy_info_____________//
Route::prefix('compamy_info')->group(function()
{

	//_________ About ____________//
	Route::get('/about/add','Backend\AboutController@add')->name('about.add');
	Route::post('/about/update/{id}','Backend\AboutController@update')->name('about.update');

	//_________ Vision ____________//
	Route::get('/vision/add','Backend\VisionController@add')->name('vision.add');
	Route::post('/vision/update/{id}','Backend\VisionController@update')->name('vision.update');


	//_________ Mision ____________//
	Route::get('/mision/add','Backend\MisionController@add')->name('mision.add');
	Route::post('/mision/update/{id}','Backend\MisionController@update')->name('mision.update');


	//_________ Mision ____________//
	Route::get('/history/add','Backend\HistoryController@add')->name('history.add');
	Route::post('/history/update/{id}','Backend\HistoryController@update')->name('history.update');


	//_________ Mision ____________//
	Route::get('/history/add','Backend\HistoryController@add')->name('history.add');
	Route::post('/history/update/{id}','Backend\HistoryController@update')->name('history.update');


	//_________ Mision ____________//
	Route::get('/history/add','Backend\HistoryController@add')->name('history.add');
	Route::post('/history/update/{id}','Backend\HistoryController@update')->name('history.update');


	//_________ branch ____________//
	Route::get('/branch/view','Backend\BranchController@view')->name('branch.view');
	Route::get('/branch/add','Backend\BranchController@add')->name('branch.add');
	Route::post('/branch/store','Backend\BranchController@store')->name('branch.store');
	Route::get('/branch/edit/{id}','Backend\BranchController@edit')->name('branch.edit');
	Route::post('/branch/update/{id}','Backend\BranchController@update')->name('branch.update');
	Route::get('/branch/delete/{id}','Backend\BranchController@delete')->name('branch.delete');
	Route::get('/branch/inacative/{id}','Backend\BranchController@inacative')->name('branch.inacative');
	Route::get('/branch/active/{id}','Backend\BranchController@active')->name('branch.active');

});



//======== Setting ===========//
Route::prefix('web_setting')->group(function()
{
//_________ web_setting ____________//
Route::get('/genarelsetting/add','Backend\GenarelsettingController@add')->name('genarelsetting.add');
Route::post('/genarelsetting/update/{id}','Backend\GenarelsettingController@update')->name('genarelsetting.update');

});



//======= Contact =========//
Route::prefix('contact')->group(function()
{


 //_______ Contact User ________//
 Route::get('user/contact/view','Backend\userContactController@view')->name('user.contact.view');
 Route::get('user/contact/delete/{id}','Backend\userContactController@delete')->name('user.contact.delete');

});




});





