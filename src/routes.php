<?php

Route::get('my-package', function () {
    return 'Hello from the myPackage package';
});
Route::get('add/{a}/{b}',[ Hello\MyPackage\MyPackageController::class,'add']);
Route::get('subtract/{a}/{b}',[ Hello\MyPackage\MyPackageController::class ,'subtract']);
