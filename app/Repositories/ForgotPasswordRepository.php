<?php

namespace App\Repositories;

use App\Contracts\ForgotPasswordContract;
use Illuminate\Http\Request;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Mail\ForgotPassMail;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordRepository implements ForgotPasswordContract
{
	public function sendOtpMail(array $array)
	{
		$record = User::where('email', $array['email'])->first();
	        if($record)
            {
	            $record->otp = mt_rand(1000000, 9999999);
	            $record->save();
	            Mail::to($array['email'])->send(new ForgotPassMail($record));
	            $data['datas'] = $record;
	            $data['status'] = true;
	        } else {
	        	$data['status'] = false;
	        }
			return $data;
	}

	public function verifyOtp(array $array)
	{
		$record = User::find($array['id']);
        if($record->otp == $array['otp'])
        {
        	$data['dat'] = $record;
        	$data['status'] = true;
        } else {
        	$data['status'] = false;
        }
        return $data;
	}

	public function changePassword(array $array)
	{
		$data = User::find($array['id']);
	    $data->password = Hash::make($array['password']);
	    $data->save();
	    return $data;
	}
}

?>