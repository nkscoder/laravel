<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * Date: 18/5/17
 * Time: 3:01 PM
 */

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');



Route::get('/', function () {
    return view('welcome');
});