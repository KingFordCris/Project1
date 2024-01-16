<?php
Auth::routes();
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
// REGISTRATION AND LOGIN ROUTES
Route::auth();

Route::get('auth/password/reset', 'Auth\PasswordController@getResetAuthenticatedView');
Route::post('auth/password/reset', 'Auth\PasswordController@resetAuthenticated');

Route::get('/register', 'AuthController@register');
Route::post('/register', 'AuthController@store');
Route::get('/terms/conditions', 'AuthController@termsAndCondition');
Route::get('/logout', 'AuthController@logout');
Route::get('/', function () 
{
    return view('welcome');
});
Route::post('/login/custom', [
    'uses' => 'AuthController@login',
    'as' => 'login.custom'
]);
//ROUTE TO CHECK IF USER IS LOGIN
Route::group(['middleware' => 'auth'], function () {
    //ROUTE TO FORBID NOT ADMIN ACCESS
    Route::group(['middleware' => ['auth', 'admin']], function() {
        //ADMIN PAGES
        Route::get('/admin/index', 'PostsController@index2');
        //POSTS
        Route::get('/posts/index', 'PostsController@index');
        Route::post('/posts', 'PostsController@store');
        Route::get('/posts/manage', 'PostsController@manage');
        Route::get('/posts/create', 'PostsController@create');
        Route::get('/posts/{post}', 'PostsController@show');
        Route::resource('OSMS_post','PostsController');
        //Scholars
        Route::get('/user/request', 'ScholarsController@index');
        Route::get('/user/profile/{pending}', 'ScholarsController@profile');
        Route::get('/add/new/scholar', 'ScholarsController@new');
        Route::post('/add/new/scholar', 'ScholarsController@insertNew');
        Route::get('/user/profile/{scholar}', 'ScholarsController@profile');
        Route::get('/add/{pending}', 'ScholarsController@add');
        Route::post('/add', 'ScholarsController@insert');
        Route::get('/all/scholars', 'ScholarsController@allScholars');
        Route::get('/edit/{pending}', 'ScholarsController@edit');
        

        //SEARCH
        Route::get('/scholars/search','SearchController@search');
        Route::get('/result','SearchController@result');

        //EXTRAS
        Route::get('/admin/backups', 'BackupController@backup');
        Route::get('backup/create', 'BackupController@create');
        Route::get('backup/download/{file_name}', 'BackupController@download');
        Route::get('backup/delete/{file_name}', 'BackupController@delete');

        //USERS
        Route::get('/users/request', 'UserController@request');
        Route::get('/users/all', 'UserController@all');
        Route::get('/user/activate/{id}', 'UserController@update2active');
        Route::get('/user/deactivate/{id}', 'UserController@update2deactive');
        Route::get('/user/close/{id}', 'UserController@deactivate');
        Route::get('/user/edit/{id}', 'UserController@edit');
        Route::resource('users','ScholarsController');
        //TUTORIALS
        Route::get('/tutorials/index','TutorialController@index');
        //SCHOLARSHIPS
        Route::get('/scholarship/add', 'ScholarshipsController@add');
        Route::get('/scholarship/manage', 'ScholarshipsController@manage');
        Route::post('/scholarship', 'ScholarshipsController@store');
        Route::get('/scholarship/show', 'ScholarshipsController@show');
        Route::get('/scholarship/{scholarship}/view', 'ScholarshipsController@view');
        Route::get('/scholarship/{scholarship}/generate', 'ScholarshipsController@generate');
        Route::get('/scholarship/{scholarship}/apply', 'ScholarshipsController@apply');
        Route::resource('OSMS_scho','ScholarshipsController');
        Route::get('api/dropdown', function(){$input = Input::get('option');$scholars = Scholars::find($input);$scholarships = $scholars->scholarships();
               return Response::eloquent($scholarships->get(['id','name']));
            });
        Route::get('/extras/editor', function () 
            {
                return view('adminPages.extras.editor');
            });
    });//END OF ADMIN PAGES
    // add comment
    Route::resource('OSMS_scholars','ScholarsController');
    Route::post('/posts/{post}/comments', 'CommentsController@store');
    Route::resource('OSMS','CommentsController');
    //USER PAGES
    Route::get('/user/index', 'UserPagesController@index')->name('home');
    Route::get('/user/tutorials', 'UserPagesController@help');
    Route::get('/user/index/{post}', 'UserPagesController@show');
    Route::get('/user/addprofile/add', 'UserPagesController@addProfile');
    Route::get('/user/{scholarship}/apply', 'UserPagesController@apply');
    Route::post('/user/profile/save', 'UserPagesController@insert');
    Route::post('/user/updateUsername', 'UserPagesController@myProfile');
    Route::post('/user/profile/update', 'UserPagesController@updateProfile');
    Route::get('/profile/edit/{user}', 'UserPagesController@editProfile')->middleware(['auth']);//this is the none used
    Route::resource('USER','UserPagesController');
    Route::get('/user/me/{user}', 'AccountsController@edit');
    Route::resource('Accounts','AccountsController');
    // Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'AccountsController@update']);
});//END OF OSMS ROUTES