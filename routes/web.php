<?php


Route::group(['middleware' => 'isAuth'], function () {

    Route::group(['middleware' => 'isAdmin'], function () {

// Client
        Route::get('/Admin/addClient', 'AdminController@addClient');
        Route::get('/Admin/editClient', 'AdminController@editClient');
        Route::get('/Admin/deleteClient', 'AdminController@deleteClient');

// SubClient
        Route::get('/Admin/addSubClient', 'AdminController@addSubClient');
        Route::get('/Admin/editSubClient', 'AdminController@editSubClient');
        Route::get('/Admin/deleteSubClient', 'AdminController@deleteSubClient');
// SessionClient
        Route::get('/Admin/addSessionClient', 'AdminController@addSessionClient');
        Route::get('/Admin/editSessionClient', 'AdminController@editSessionClient');
        Route::get('/Admin/deleteSessionClient', 'AdminController@deleteSessionClient');
// Session
        Route::get('/Admin/addSession', 'AdminController@addSession');
        Route::get('/Admin/editSession', 'AdminController@editSession');
        Route::get('/Admin/deleteSession', 'AdminController@deleteSession');
// Employee
        Route::get('/Admin/addEmployee', 'AdminController@addEmployee');
        Route::get('/Admin/editEmployee', 'AdminController@editEmployee');
        Route::get('/Admin/deleteEmployee', 'AdminController@deleteEmployee');
// Monitor
        Route::get('/Admin/addMonitor', 'AdminController@addMonitor');
        Route::get('/Admin/editMonitor', 'AdminController@editMonitor');
        Route::get('/Admin/deleteMonitor', 'AdminController@deleteMonitor');
// Admin
        Route::get('/Admin/addAdmin', 'AdminController@addAdmin');
        Route::get('/Admin/editAdmin', 'AdminController@editAdmin');
        Route::get('/Admin/deleteAdmin', 'AdminController@deleteAdmin');
// Task
        Route::get('/Admin/addTask', 'AdminController@addTask');
        Route::get('/Admin/editTask', 'AdminController@editTask');
        Route::get('/Admin/deleteTask', 'AdminController@deleteTask');
// EmployeeTask
        Route::get('/Admin/addEmployeeTask', 'AdminController@addEmployeeTask');
        Route::get('/Admin/editEmployeeTask', 'AdminController@editEmployeeTask');
        Route::get('/Admin/deleteEmployeeTask', 'AdminController@deleteEmployeeTask');
    });
    Route::group(['middleware' => 'isEmployee'], function () {

    });
    Route::group(['middleware' => 'isMonitor'], function () {

// SessionClient
        Route::get('/Monitor/addSessionClient', 'MonitorController@addSessionClient');
        Route::get('/Monitor/editSessionClient', 'MonitorController@editSessionClient');
        Route::get('/Monitor/deleteSessionClient', 'MonitorController@deleteSessionClient');
    });
    Route::group(['middleware' => 'isClient'], function () {

// SubClient
        Route::get('/Client/addSubClient', 'ClientController@addSubClient');
        Route::get('/Client/editSubClient', 'ClientController@editSubClient');
        Route::get('/Client/deleteSubClient', 'ClientController@deleteSubClient');
// SessionClient
        Route::get('/Client/addSessionClient', 'ClientController@addSessionClient');
        Route::get('/Client/editSessionClient', 'ClientController@editSessionClient');
        Route::get('/Client/deleteSessionClient', 'ClientController@deleteSessionClient');
    });
});

Route::get('/login', "GuestController@login");
Route::get('/register', "GuestController@register");
// http://horse-riding.sabitus.com/register?Name_User=&Name_User=&Email_User=&password=&Type_User=
Route::get('/User/editUser', "UserController@editUser");
// http://horse-riding.sabitus.com/User/editUser?id=2&Name_User=Yassine2&Email_User=yassine.razaq@gmail.com
Route::get('/User/editPass', "UserController@editPass");
    // http://horse-riding.sabitus.com/User/editPass?id=1&Current=&New=


// Subscription
Route::get('/Admin/listAllSubscriptions', 'AdminController@listAllSubscriptions');
// http://horse-riding.sabitus.com/Admin/listAllSubscriptions
Route::get('/Admin/addSubscription', 'AdminController@addSubscription');
// http://horse-riding.sabitus.com/Admin/addSubscription?Name=&Price=
Route::get('/Admin/editSubscription', 'AdminController@editSubscription');
// http://horse-riding.sabitus.com/Admin/editSubscription?Name=&Price=
Route::get('/Admin/deleteSubscription', 'AdminController@deleteSubscription');
// http://horse-riding.sabitus.com/Admin/deleteSubscription?id=


Route::get('/', function () {
    return view("welcome");
});
Route::get('/test', function () {
    return response()->json([
        'Success' => "24",
    ]);
});
