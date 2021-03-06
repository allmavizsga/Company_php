<?php

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

Route::get('/', 'PageController@getHome');

Route::get('/login', 'PageController@getLogin');

Route::get('/employelist', 'EmployeController@viewEmploye');

Route::get('/companylist', 'PageController@getCompanyList');

Route::get('/employecrud', 'PageController@getEmployeCRUD');

Route::get('/companycrud', 'PageController@getCompanyCRUD');

Route::get('/basic', 'PageController@getBasic');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/login/submit', 'LoginController@login');

Route::get('/login/successlogin','LoginController@successlogin');

Route::get('/logout','LoginController@logout');

Route::post('/employelist/addnew', 'EmployeController@newEmploye');

Route::get('/employelist/delete/{id}', array('as'=>'delete',function($id){
    return View::make('delete')->with('employe',App\Employe::find($id));
}));

Route::get('/employelist/delete/id/{id}','EmployeController@delete');

Route::get('/employelist/edit/{id}', array('as'=>'edit',function($id){
    return View::make('edit')->with('employe',App\Employe::find($id));
}));

Route::post('/employelist/edit/{id}', 'EmployeController@edit');