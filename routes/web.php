<?php


Route::group( ['middleware' => 'isAuth'], function ()
{

Route::group( ['middleware' => 'isAdmin'], function ()
{

// Client
Route::post('/Admin/addClient', 'AdminController@addClient');
Route::post('/Admin/editClient', 'AdminController@editClient');
Route::post('/Admin/deleteClient', 'AdminController@deleteClient');
// Subscription
Route::post('/Admin/addSubscription', 'AdminController@addSubscription');
Route::post('/Admin/editSubscription', 'AdminController@editSubscription');
Route::post('/Admin/deleteSubscription', 'AdminController@deleteSubscription');
// SubClient
Route::post('/Admin/addSubClient', 'AdminController@addSubClient');
Route::post('/Admin/editSubClient', 'AdminController@editSubClient');
Route::post('/Admin/deleteSubClient', 'AdminController@deleteSubClient');
// SessionClient
Route::post('/Admin/addSessionClient', 'AdminController@addSessionClient');
Route::post('/Admin/editSessionClient', 'AdminController@editSessionClient');
Route::post('/Admin/deleteSessionClient', 'AdminController@deleteSessionClient');
// Session
Route::post('/Admin/addSession', 'AdminController@addSession');
Route::post('/Admin/editSession', 'AdminController@editSession');
Route::post('/Admin/deleteSession', 'AdminController@deleteSession');
// Employee
Route::post('/Admin/addEmployee', 'AdminController@addEmployee');
Route::post('/Admin/editEmployee', 'AdminController@editEmployee');
Route::post('/Admin/deleteEmployee', 'AdminController@deleteEmployee');
// Monitor
Route::post('/Admin/addMonitor', 'AdminController@addMonitor');
Route::post('/Admin/editMonitor', 'AdminController@editMonitor');
Route::post('/Admin/deleteMonitor', 'AdminController@deleteMonitor');
// Admin
Route::post('/Admin/addAdmin', 'AdminController@addAdmin');
Route::post('/Admin/editAdmin', 'AdminController@editAdmin');
Route::post('/Admin/deleteAdmin', 'AdminController@deleteAdmin');
// Task
Route::post('/Admin/addTask', 'AdminController@addTask');
Route::post('/Admin/editTask', 'AdminController@editTask');
Route::post('/Admin/deleteTask', 'AdminController@deleteTask');
// EmployeeTask
Route::post('/Admin/addEmployeeTask', 'AdminController@addEmployeeTask');
Route::post('/Admin/editEmployeeTask', 'AdminController@editEmployeeTask');
Route::post('/Admin/deleteEmployeeTask', 'AdminController@deleteEmployeeTask');
});
Route::group( ['middleware' => 'isEmployee'], function ()
{

});
Route::group( ['middleware' => 'isMonitor'], function ()
{

// SessionClient
Route::post('/Monitor/addSessionClient', 'MonitorController@addSessionClient');
Route::post('/Monitor/editSessionClient', 'MonitorController@editSessionClient');
Route::post('/Monitor/deleteSessionClient', 'MonitorController@deleteSessionClient');
});
Route::group( ['middleware' => 'isClient'], function ()
{

// SubClient
Route::post('/Client/addSubClient', 'ClientController@addSubClient');
Route::post('/Client/editSubClient', 'ClientController@editSubClient');
Route::post('/Client/deleteSubClient', 'ClientController@deleteSubClient');
// SessionClient
Route::post('/Client/addSessionClient', 'ClientController@addSessionClient');
Route::post('/Client/editSessionClient', 'ClientController@editSessionClient');
Route::post('/Client/deleteSessionClient', 'ClientController@deleteSessionClient');
});
});
Route::group( ['middleware' => 'notAuth'], function ()
{
    Route::post('/login', "GuestController@login");
    Route::post('/register', "GuestController@register");
});
Route::get('/', function (){
    return view("welcome");
});
