<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {

    public function simple_email() {
        $data = array('name' => "Visitor");
        Mail::send(['text' => 'contact-us'], $data, function($message) {
            $message->to('logan.testa@outlook.com', "Scenic Nursery")->subject
                    ('Laravel Testing Basic Email');
            $message->from('somebody@somewhere.com', 'Someone');
        });
        echo "Simple Email sent.  Check your email's inbox.";
    }

}
