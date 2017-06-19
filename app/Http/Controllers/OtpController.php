<?php

namespace App\Http\Controllers;

/**
* Vinay Kumar Reddy
OtpController is used to organize Otp sender
*/

use Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Utils\CommonTrait;

class OtpController extends Controller
{
	use CommonTrait;

	public function otpHandler(Request $request) {
		Log::info(json_encode($request->all()));
		if (empty($request->get('senderType')) === false) {
			switch ($request->get('senderType')) {
				case 'way2Sms':
					$obj = $this->getWay2Sms($request->all());
					break;
				
				default:
					# code...
					break;
			}
		}
		
		return [
			'status' => true,
			'data' => 'otpSenderType is required'
		];
	}


	public function getWay2Sms($data) {
		$obj = $this->genereateObj('Library', 'Way2Sms', 'SmsSender');

		if (empty($obj) === false) {

		}
	}	
}