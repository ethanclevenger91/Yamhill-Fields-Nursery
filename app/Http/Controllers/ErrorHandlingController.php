<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ErrorHandlingController extends Controller {
    public function errorCode404(){
	    return view('404');
	}
	public function errorCode405(){
	    return view('405');
	}
    public function errorCode500(){
	    return view('500');
	}
}

?>