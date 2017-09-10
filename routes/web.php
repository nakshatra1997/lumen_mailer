<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;

$app->get('/', function () use ($app) {
    return $app->version();
});
$app->post('/send','MailController@send');

//$app->get('/send2', function () {
////    return $app->welcome();
//  $data="sending mail";
//    Mail::send(['html'=>'mail'],[] ,function($msg) {
//
//        $msg->to(['email id']); $msg->from(['your_email@email.com']); });
//    return 'lortyrtytyo...';
//});
