<?php

/*
|--------------------------------------------------------------------------
| Module Web Routes
|--------------------------------------------------------------------------
*/

Route::post('/backend/blog/upload-image', 'backend\BlogController@upload_image')->name('ckeditor.upload_image');
