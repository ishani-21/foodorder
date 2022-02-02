<?php

namespace App\Http\Controllers\Frant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Mail\ForgotPassMail;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\OtpRequest;
use App\Http\Requests\ChangePasswordRequest;

use App\Contracts\ForgotPasswordContract;
use App\Repositories\ForgotPasswordRepository;

class ForgotPasswordController extends Controller
{
    public function __construct(ForgotPasswordContract $ForgotPassword)
    {
        $this->ForgotPassword = $ForgotPassword;
    }

    // ----------------------------------Forgot Password-----------------------------
	public function sendOtpMail(Request $request)
	{
		$validated = $request->validate([
			'email'	=>	'required',
		]);
        $data = $this->ForgotPassword->sendOtpMail($request->all());
        if(isset($data['datas'])){
	       return redirect()->route('otp-page');
        } else {
            return redirect()->back()->with('error', 'Email is not exists !!');
        }
	}

    public function showForgetPassword(Request $request)
    {      
        return view('frant.forget_password');
    }

    // ----------------------------Forgot OTP--------------------------------
    public function verifyOtp(OtpRequest $request)
    {  
        $data = $this->ForgotPassword->verifyOtp($request->all());
        if(isset($data['dat'])){
            return redirect()->route('changepassword'); 
        } else {
            return redirect()->back()->with('error', 'OTP is incorrect !!');     
        }
    }
    // ----------------------------------Forgot Change Password----------------------------------
    public function changePassword(ChangePasswordRequest $request)
    {
        
        $data = $this->ForgotPassword->changePassword($request->all());
        
        return redirect()->route('login');
    }
}