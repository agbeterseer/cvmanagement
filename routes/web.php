<?php
use Illuminate\Support\Facades\Input as Input;
use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
// Auth::logout()

// custome routes ['middleware' => 'auth'],

Route::post('/login',[

	'uses'=> 'LoginController@login',
	'as'=> 'login'
	]);

Route::group(array('before' => 'auth', 'after' => 'no-cache'),  function (){

	Route::get('/home','HomeController@index')->name('home');
	Route::get('/board', 'DashboardController@index')->name('board');
 	
 	Route::get('/user/profile', 'UserController@profile')->name('profile');
	Route::post('/user/profile', 'UserController@update_avatar');
	// Route::post('/user/profileupdate', 'UserController@updateProfile');

	Route::post('/user/password', [
	'uses' => 'UserController@changePassword',
	'as' => 'user.changePassword'
		]);

	Route::get('/admin',[
		'as' => 'admin.index',
		'middleware' => 'role:admin',
		'uses' =>function(){
		return view('admin.index');
		}
	]);


	// Route::get('/admin',[

	// 	'as' => 'admin.index',
	// 	'middleware' => 'role:superuser',
	// 	// 'middleware'=>(['role:admin','role:superuser','role:general-user']),
	// 	'uses' =>function(){

	// 	return view('admin.index');

	// }

	// 	]);


	Route::get('/user',[

		'as' => 'user.index',
		  'middleware' => 'role:admin',
		// 'middleware'=>(['role:admin','role:superuser','role:general-user']),
		'uses' =>function(){

		return view('user.index');
	}
	]);
		Route::get('/role',[

		'as' => 'role.index',
		 'middleware' => 'role:admin',
		// 'middleware'=>(['role:admin','role:superuser','role:general-user']),
		'uses' =>function(){

		return view('role.index');
	}
	]);

		Route::get('/region',[

		'as' => 'region.index',
		 'middleware' => 'role:admin',
		// 'middleware'=>(['role:admin','role:superuser','role:general-user']),
		'uses' =>function(){

		return view('region.index');
	}
	]);

	Route::get('/document/search', [
		'uses' => 'DocumentController@show_search',
		'as' => 'document.search_category'
		]);
	Route::post('/document/search', [
		'uses' => 'DocumentController@post_search',
		'as' => 'document.search_category'
		]);

	Route::get('/document/uploadcv', 'DocumentController@show_upload');

	Route::post('/document/uploadcv',[
		'uses'=>'DocumentController@handleUploadcv',
	 	'as'=> 'document.uploadcv'
	 ]);
	// show search

	Route::get('/document/search', 'DocumentController@show_search');
	Route::post('/document/search',[
		'uses'=>'DocumentController@document_search',
		'as'=> 'document.search_category'
		]);


	// filter by city routes
	 
	Route::post('document/city', [
		'uses'=>'DocumentController@searchCandidatesByCity',
		'as'=> 'document.filter_by_city'
		]);
	Route::get('document/city', [
		'uses'=>'DocumentController@view_filter_by_city',
		'as'=> 'document.view_filter_by_city'
		]);

	// filter by Years Of Experience
 	Route::post('document/years', [
		'uses'=>'DocumentController@searchCandidatesByYearsOfExperience',
		'as'=> 'document.filter_by_yoe'
		]);
	Route::get('document/years', [
		'uses'=>'DocumentController@view_filter_by_years',
		'as'=> 'document.view_filter_by_yoe'
		]);

		// filter by Region 

	Route::post('/region/city', [
		'uses'=>'RegionController@getRegion',
		'as'=> 'region.filter_by_region'
		]);
	Route::get('/region/city',  [
			'uses'=>'RegionController@getRegion',
			'as' => 'region.getRegion'
			]);

	//filter by Professions

	Route::get('/document/professions',  [
			'uses'=>'DocumentController@view_filter_by_professions',
			'as' => 'document.view_filter_by_professions'

			]);
	Route::post('/document/professions', [
		'uses'=>'DocumentController@searchCandidatesByProfession',
		'as'=> 'document.filter_by_professions'
		]);

	Route::get('/document/cv', [
		'uses' => 'DocumentController@getFile',
		'as' => 'document.getFile'
		]);
	Route::post('/document/cv', [
		'uses' => 'DocumentController@getFile',
		'as' => 'document.index'
		]);

	Route::get('/document/upload', [
		'uses' => 'DocumentController@showFormCSV',
		'as' => 'document.uploadfromcsv'
		]);

	Route::post('/document/upload', [
		'uses' => 'DocumentController@importFromCSV',
		'as' => 'document.importFromCSV'
		]);

	Route::get('user/', [
		'uses' => 'UserController@ShowRegisterForm'
		 
		]);
	Route::get('importExport', [
		'uses' => 'BackupController@importExport',
		'as' => 'backupsys.importExport'
		]);
	Route::get('downloadExcel/{type}', 'BackupController@downloadExcel');
	Route::get('backUpDocumentProfession/{type}', 'BackupController@backUpDocumentProfession');
	
	// Route::post('importExcel', 'BackupController@importExcel');
		// Route::post('register', [
		// 'uses' => 'RegisterController@ShowRegisterForm',
		// 'as' => 'auth.register'
		// ]);

	    Route::get('backup', [
	    	'uses' =>  'BackupController@index',
	    	'as' =>'backupsys.backups'

	    	]);
        Route::get('backup/create', 'BackupController@create');
        Route::get('backup/download/{file_name}', 'BackupController@download');
        Route::get('backup/delete/{file_name}', 'BackupController@delete');

	Route::resource('user', 'UserController');
	Route::resource('role', 'RoleController');
	Route::resource('document', 'DocumentController');
	Route::resource('region', 'RegionController');
	Route::resource('backupsys', 'BackupController');


});
 	Route::resource('candidate', 'IndexController');

	Route::get('/candidate', [
	'uses' => 'IndexController@readItems',
	'as' => 'candidate.index'
	]);

	Route::post('/candidate',[
	'uses' => 'IndexController@addCandidate',
	'as' => 'candidate.addCandidate'
	]);

	Route::get('/usermanual', 'IndexController@readManual');
 
	Route::get('/home', 'HomeController@index')->name('home');



 
