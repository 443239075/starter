<?php




Route::get('/admin', function () {
    return 'hello admin';
});




//route name
Route ::namespace('Front') ->group(function(){

    //all route only access controller or methods in folder name front
    Route::get('users','UserController@showAdminName');
});

