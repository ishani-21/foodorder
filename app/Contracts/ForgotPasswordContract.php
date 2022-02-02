<?php

namespace App\Contracts;

interface ForgotPasswordContract
{
	public function sendOtpMail(array $array);
	public function verifyOtp(array $array);
	public function changePassword(array $array);
}

?>