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

        Route::get('/Client/editSessionClient', 'ClientController@editSessionClient');

    });
});

// User
Route::get('/login', "GuestController@login");
Route::get('/register', "GuestController@register"); // register?Name_User=&Name_User=&Email_User=&password=&Type_User=
Route::get('/User/editUser', "UserController@editUser"); // User/editUser?id=2&Name_User=Yassine2&Email_User=yassine.razaq@gmail.com
Route::get('/User/editPass', "UserController@editPass"); // User/editPass?id=1&Current=&New=
Route::post('/User/editUserPic', "UserController@editUserPic"); // User/editUserPic
Route::get('/User/editUserPic', "UserController@editUserPic"); // User/editUserPic

// Subscription
Route::get('/Admin/listAllSubscriptions', 'AdminController@listAllSubscriptions'); // Admin/listAllSubscriptions
Route::get('/Admin/addSubscription', 'AdminController@addSubscription'); // Admin/addSubscription?Name=&Price=
Route::get('/Admin/editSubscription', 'AdminController@editSubscription'); // Admin/editSubscription?id=&Name=&Price=
Route::get('/Admin/deleteSubscription', 'AdminController@deleteSubscription'); // Admin/deleteSubscription?id=

// Session
Route::get('/Admin/listAllSessions', 'AdminController@listAllSessions'); // Admin/listAllSessions
Route::get('/Admin/addSession', 'AdminController@addSession'); // Admin/addSession?Id_Monitor=&Name_Session=&Price_Session=&Date_Session=
Route::get('/Admin/editSession', 'AdminController@editSession'); // Admin/editSession?id=&Id_Monitor=&Name_Session=&Price_Session=&Date_Session=
Route::get('/Admin/deleteSession', 'AdminController@deleteSession'); // Admin/deleteSession?id=

//CLient
Route::get('/Client/listAllSessions', "ClientController@listAllSessions");
Route::get('/User/getClient', "UserController@getClient");
Route::get('/Client/addSessionClient', 'ClientController@addSessionClient');
Route::get('/Client/deleteSessionClient', 'ClientController@deleteSessionClient');

Route::get('/', function () {
    return view("welcome");
});
Route::get('/test', function () {
    return response()->json([
        'Success' => "24",
    ]);
});
