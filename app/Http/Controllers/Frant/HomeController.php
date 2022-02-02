<?php

namespace App\Http\Controllers\Frant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Setting;
use App\Models\Feedback;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Mail\ForgotPassMail;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Contracts\ChangePasswordContract;
use App\Repositories\ChangePasswordRepositories;

require base_path('vendor/autoload.php');

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ChangePasswordContract $ChangePassword)
    {
        $this->middleware('auth');
        $this->ChangePassword = $ChangePassword;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $user = auth()->user();
        $rest_desc = Setting::all();
        $data = Restaurant::paginate(3);
        if($request->ajax()){  
            return view('frant.rest', compact('data'))->render();
        }
        return view('home', compact('data','rest_desc'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'mobile'    => 'required|max:10|min:10|unique:users,mobile,'.$request -> id,
            'name'      => 'required',
            'email'     => 'required|unique:users,email,'.$request -> id,
            'address'   => 'required'
        ]);
       
        $data = User::find($request->id);
        $data->mobile=$request->mobile;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();
        return redirect()->route('home');
    }

    public function changepassword(Request $request)
    {
        $validated = $request->validate([
            'current_password'    => 'required|min:8',
            'password'      => 'required|min:8|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'password_confirmation' => 'same:password',
        ]);
        $ChangePassword = $this->ChangePassword->changepassword($request->all());
        return redirect()->route('home');
    }

    public function readMore(Request $request)
    {
        $restro = Restaurant::where('status',1)->orderBy('id','asc')->get();
        foreach ($restro as $restro) 
        {
            $restros = Restaurant::where('status',1)->orderBy('id','asc')->take(3)->get();
            foreach ($restros as $restros) 
            {
                $id = $restros->id;
            }
        }
        // $datas = Restaurant::where('id', '>', $id)->orderBy('id','asc')->skip($request->last_id)->take(3)->get();
        $datas = Restaurant::skip($request->last_id)->paginate(3);
        $data['datas'] = $datas;
        $data['nextPage'] = $datas->nextPageUrl();
        return compact('data');
    }

    public function testimonial(Request $request)
    {
        $validated = $request->validate([
            'name'      => 'required',
            'mobile'    => 'required|max:10|min:10|unique:feedbacks,mobile,'.$request -> id,
            'message'     => 'required'
        ]);
        $data = new Feedback;
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->message = $request->message;
        $data->image = "ydsadhsa.jpg";
        $data->status = "1";
        $data->save();
        return redirect()->route('home');
    }
}

