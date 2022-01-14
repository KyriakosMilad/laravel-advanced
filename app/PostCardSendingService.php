<?php

namespace App;

use Illuminate\Support\Facades\Mail;

class PostCardSendingService
{

	private $country;
	private $width;
	private $height;

	public function __construct($country, $width, $height)
	{
		$this->country = $country;
		$this->width = $width;
		$this->height = $height;
	}

	public function hello($msg, $email)
	{
//		Mail::Raw($msg, function ($msg) use ($email) {
//			$msg->to($email);
//		});
//		return $msg;

		dump('postcard sent to: ' . $email . ' with message: ' . $msg);
	}

}
