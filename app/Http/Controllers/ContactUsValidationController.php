<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class ContactUsValidationController extends Controller {

    public function displayContactForm() {
        return view('/contact-us')->with('submitResults', '');
    }

    public function validateform(Request $request) {
        print_r($request->all());
        $this->validate($request, [
            'userName' => 'required|min:1',
            'userEmail' => 'required|email',
            'userComments' => 'required|min:1'
        ]);

        $SendEmailTo = "logan.testa@outlook.com";

        $UserName = htmlspecialchars(strip_tags(trim($_POST['userName'])));
        $UserEmail = htmlspecialchars(strip_tags(trim($_POST['userEmail'])));
        $UserSubject = htmlspecialchars(strip_tags(trim($_POST['userSubject'])));
        $UserComments = htmlspecialchars(strip_tags(trim($_POST['userComments'])));

        /*Set the headers*/
        $Headers = "";
        $Headers .= "From: <$UserEmail>\r\n";
        $Headers .= "MIME-Version: 1.0\r\n";
        $Headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        /* Create the e-mail body. */
        $Body = "";
        $Body .= "<strong>User Name:</strong> " . $UserName . "<br />";
        $Body .= "<strong>User Email:</strong> " . $UserEmail . "<br />";
        $Body .= "<strong>Subject:</strong> " . $UserSubject . "<br />";
        $Body .= "<strong>User Comments:</strong> " . $UserComments . "<br />";

        /* Send the e-mail. */
        $SuccessfulSubmission = mail($SendEmailTo, "Yamhill Fields Nursery: " . $UserSubject, $Body, $Headers);
        if ($SuccessfulSubmission) {
            return redirect()->back()->with('submitResults', 'Thank you ' . $_POST['userName'] . ' for contacting us!');
        } else if ($SuccessfulSubmission === false) {
            return redirect()->back()->with('submitResults', 'Submission failed, please try again.');
        }
    }
}

?>
