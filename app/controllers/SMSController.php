<?php
class SMSController extends BaseController {

	public function __construct() {

	}

	public function index() {
		return View::make('index');
	}

	public function send() {
		if (Input::has("message")) {
			$sid = "Your Account SID";
			// Your Account SID from www.twilio.com/user/account
			$token = "Your Auth Token";
			// Your Auth Token from www.twilio.com/user/account

			$client = new Services_Twilio($sid, $token);
			$message = $client -> account -> messages -> sendMessage('valid Twilio number', // From a valid Twilio number
			'Text this number', // Text this number
			Input::get("message"));

			echo "Message Send Successfully Message SID :: " . $message -> sid;
		} else {
			echo "Error : No Message Entered <a href='/'>click here</a> to go back";
		}
	}

}
