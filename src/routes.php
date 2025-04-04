<?php

Route::get('my-package', function () {
    return 'Hello from the myPackage package';
});
Route::get('add/{a}/{b}',[ Vendor\MyPackage\MyPackageController::class,'add']);
Route::get('subtract/{a}/{b}',[ Vendor\MyPackage\MyPackageController::class ,'subtract']);
