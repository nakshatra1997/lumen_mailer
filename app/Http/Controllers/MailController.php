<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
class MailController extends Controller {
    private $emailaddress = 'nakshatrapradhan2013@gmail.com';
    /**
     * send email
     * @param
     * @return
     */
    public function send() {
        //$this->emailaddress = $request->emailaddress;
//        $notification = array('name' => 'You got a new mentor', 'emailbody' => 'Hey my name is ...');
        Mail::send( ['html'=>'mail'], [], function($msg) { //in this array pass the variables which we want to use in mail.blade.php
            $msg->to([$this->emailaddress]);
            $msg->from(['Akgec-scrolls@silive.in']);
        });
        return response(array('message' => 'Sent Successfully'), 200)->header('Content-Type', 'Application/json');
    }
    //
}
