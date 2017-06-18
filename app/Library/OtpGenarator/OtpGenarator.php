<?php

namespace App\Library\OtpGenarator;

class OtpGenarator 
{
	public function otpGenaration() {
       $string = '0123456789';
       $string_shuffled = str_shuffle($string);
       $otp = substr($string_shuffled, 1, 5);
       
       return $otp;
	}
}