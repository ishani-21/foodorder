Ishani Ranpariya
Work Report 13/09/2021
- create restourant page add fild and insert data in database
- restourant register complete
- restourant view complete

Ishani Ranpariya
Work Report 13/09/2021
- create profile and view page
- customer view profile and edit data complete
- solve some error

Ishani Ranpariya
Work Report 16/09/2021
- user register/login on send mail complete
- change password done
- solve error

Ishani Ranpariya
Work Report 17/09/2021
- create forgot password page
- try to send mail on forgot password page
- solve some error

Ishani Ranpariya
Work Report 20/09/2021
- create otp page
- create change password page
- send mail and otp store in database
- forgot password in password update is remaining
- solve some error

Ishani Ranpariya
Work Report 21/09/2021
- forgot password done
- display Restaurant List done
- solve error

Ishani Ranpariya
Work Report 22/09/2021
- display restaurant using helper file
- try to set validation on forgot password in send email page
- run push and pull command and solve error
- solve some error

Ishani Ranpariya
Work Report 23/09/2021
- forgot password on set validation only existing email send mail
- Display Restaurant List using slug
- Display Category List done(Restaurant wise)
- Display Subcategory List done(Category wise)
- solve error

Ishani Ranpariya
Work Report 24/09/2021
- set validation on change password
- Display food list done(Subcategory wise)
- run push and pull command and solve error
- solve some error

Ishani Ranpariya
Work Report 25/09/2021
- create description page and display food details
- set css on description page
- display cart button and click cart button on open page
- cart page on display food details is remaining
- solve some error

Ishani Ranpariya
Work Report 27/09/2021
- create cart table in database
- click on Add to card button and food with(details,name,price) insert cart table
- display data on cart page and perform delete
- try to add quantity
- solve some error

Ishani Ranpariya
Work Report 28/09/2021
- display cart table in add quentity using ajax done
- display multipal image on food description page
- create order table and insert oreder(user_id, total_price, food_name)
- create order details table and set forign key on order_id
- solve some error

Ishani Ranpariya
Work Report 29/09/2021
- set modal on edit button
- set validation on edit form (client side)
- change some css in modal
- order table and order details table complete
- watch viedo how to make custom command and create custom command
- When the user orders, the cart is deleted from the cart table, but not from the order table
- order module complete
- self testing
- solve pull and push error
- solve some error

Ishani Ranpariya
Work Report 30/09/2021
- set css in edit validation
- formeted templete
- run command for Install Eloquent Slugable Package
- custom command in solve error
- solve push, pull error
- self testing and solve error

Ishani Ranpariya
Work Report 01/10/2021
- fetch record from about table and display title and description on about page
- display three image on about page and related error solved
- fetch record from service table
- display services on service page with(title, image, description)
- fetch record from news table
- display news with(title, image, description)
- admin update about,service and news pages
- reset welcome page formete
- set stroge password validation on register page
- self testing

Ishani Ranpariya
Work Report 04/10/2021
- click READ MORE button and show more image using ajax is completed
- solved testing error
- add to cart button on set sweet alert
- order now button on set sweet alert

Ishani Ranpariya
Work Report 05/10/2021
- solve error on SHOW MORE module
- SHOW MORE module complete
- display restaurant, category, subcategory(description)
- solve redirect login page error
- learn about Repository Structure
- implements in code (working)
- solve some error

Ishani Ranpariya
Work Report 06/10/2021
- Manage all Route
- set validation on send otp page
- set validation on change password page
- solve some error on forget password module
- change password done using repository

Ishani Ranpariya
Work Report 07/10/2021
- menu repository complete
- order repository complete
- cart repository complete
- Install Socialite command
- login with google using Socialite(Working)
- Try to solve error

Ishani Ranpariya
Work Report 08/10/2021
- login with google using Socialite done
- login with facebook using Socialite done
- watch video what is api and introduction
- solve some error

Ishani Ranpariya
Work Report 09/10/2021
- make seeder and insert data using seeder
- services seeder, news seeder
- watch api video and create one demo
- perform crud on Register model using api
- perform crud on Restaurant model using api
- run pull push command and solve error on social login
- solve some error

------------------------------------------------------------------------------
Ishani Ranpariya
MR :: 04/10/2021

Following Module today im working
1. self testing
- I will test my project by my self and try to solve the testing error
- I am replasing alert with sweet alerts
3. read more
- I will try to display on READ MORE click to show more image

Ishani Ranpariya
MR :: 05/10/2021

Today i am working following point
- I will fix the error of show more module
- add some css
- test my project

Ishani Ranpariya
MR : 6/10/2021

Today i am working below points
- Learning about Repository Structure

Ishani Ranpariya
MR :: 09/10/2021

Today i am learn below points
- Learning about API and perform

Ishani Ranpariya
MR :: 11/10/2021

Today i am working below point
- API through Login
- I will try to clear API consept
- working on testimonial model

Ishani Ranpariya
Work Report 03/12/2021
- add permission and set client side validation for uniqe modual name
- clone new project
- setup new project
- solve some error
---------------------------------------------------------------------------------
French Service

French Service is a very detailed and highly skilled type of service.
It is very elaborate and expensive type of service.

Silver Service

The service style is similar to the French Service and Guèridon Service.
The difference is an elaborate sterling silverware is used for the food and beverage service.

// $a = $desc->restaurant_discription;
// $otp = mt_rand(1000000, 9999999);
// Mail::to($user->email)->send(new ForgotPassMail($user,$otp));
// $request->session()->put('otp', $otp);

// Route::get('demo1', function () {
// return view('demo1');
// })->middleware('test');
----------------------------------------------------------------------------------
Good Morning sir,
- Display Welcome page without login
- Aboute Us
- Services
- News
- I am testing and solve incoming error
home - <img src="{{ asset('frant/assets/images/'.$iteam->image)}}" alt="" class="img-responsive">

Cart Table
-> image
-> name
-> price
-> quantity
->total ammount


php artisan make:mail ForgotPassMail
php artisan make:mail ForgotPassMail --markdown=emails.forgotpass
php artisan config:clear
php artisan config:cache
php artisan cache:clear
php artisan route:clear

php artisan make:request Admin/StoreRequest

<a href="login"> / Login</a>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




$mail = new PHPMailer(true);
//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = 'f2251dcc5f6599';
$mail->Password = 'ef41a7fa6e026b';
//SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->setFrom('$email', 'Ishani');
$mail->addAddress('ranpariyaishani21@gmail.com', 'Ishani'); //Add a recipient
// $mail->addAddress('ellen@example.com'); //Name is optional
// $mail->addReplyTo("ranpariyaishani21@gmail.com", "Ishani Reply");
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = 'Froget Password OTP';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';


foreach ($users as $key => $user) {
Mail::to($user->email)->send(new ForgotPassMail($user,$otp));
}


/*public function index()
{
$restaurants= Restaurant::all();
$user = User::all();
$email = User::pluck('email');
// -----------------------------------------mail send--------------------------
$mail = new PHPMailer(true);
//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = 'f2251dcc5f6599';
$mail->Password = 'ef41a7fa6e026b';
//SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->setFrom('$email', 'Ishani');
$mail->addAddress('ranpariyaishani21@gmail.com', 'Ishani'); //Add a recipient
// $mail->addAddress('ellen@example.com'); //Name is optional
// $mail->addReplyTo("ranpariyaishani21@gmail.com", "Ishani Reply");
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

//Content
$mail->isHTML(true); //Set email format to HTML
$mail->Subject = 'Froget Password OTP';
$mail->Body = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';

return view('home', compact('restaurants'));
}*/

var id = $(this).attr("data-id");
console.log(id);
$.ajax({
url: "edit.blade.php",
type: "POST",
data: {
'id': id,
'action': 'edit-user'
},
dataType: "json",
success: function(data){

}
});

@foreach($restaurants as $restro)
<div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
    <div class="col-md-4 menu-bottom1">
        <div class="btm-right">
            <a href="{{route('menu')}}">
                <img src="{{ $restro->image }} " alt="" class="img-responsive">
                <div class="captn">
                    <h4>{{ $restro->name }}</h4>
                </div>
            </a>
        </div>
    </div>
</div>
@endforeach


// $data = User::all();
// $email = User::pluck('email');
// if($email){
// $user = $request->email;
// }else{
// }

<!-- --------------------------------Edit Button----------------------------------------- -->
<button type="button" class="btn btn-info btn-lg js-edit" data-toggle="modal" data-target="#myModal1">
    <i class="fa fa-edit"></i>
</button>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <h1 class="modal-title" style="color: #2B1B17; font: bold; font-family: cursive;">-> Edit Profile</h1>
                    </center>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    @include('frant.edit')
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --------------------------------------------------------------------------------- -->
@push('js')
<script>
    $(document).ready(function() {
        $('.readmore').click(function() {
            alert(1);
            $.ajax({
                url: "{{route('readmore')}}",
                type: "post",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(data) {
                    $.each(data.data, function(index, value) {
                        console.log(value);
                        $('.append').append($('.clearfix').attr('src').html('assets/image/restaurant/', value.image));
                    });

                }
            });
        });
    });
</script>
@endpush



@foreach($news as $news)
<div class="news-bot">
    <div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
        <a href="single.html">
            <div class="content-item">
                <div class="overlay"></div>
                <div class=" news-bottom2">
                    <ul class="grid-news">
                        <li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
                        <li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
                        <li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
                    </ul>
                    <p>{{$news->title}}</p>
                </div>
            </div>
        </a>
    </div>
    <!-- <div class="col-md-6 news-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                                <a href="single.html">
                                    <div class="content-item content-item1">
                                        <div class="overlay"></div>
                                        <div class=" news-bottom2">
                                            <ul class="grid-news">
                                                <li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
                                                <li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
                                                <li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
                                            </ul>
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                        </div>
                                    </div>
                                </a>
                            </div> -->
    @endforeach
    <div class="clearfix"> </div>
</div>


<div class="card">
    @foreach($news as $news)
    <input type="checkbox" id="inputCheck" hidden />

    <label for="inputCheck" class="fab-btn">
        <span>+</span>
    </label>

    <div class="card-content">
        <h1>{{$news->title}}</h1>
        <p>{{$news->description}}
        </p>
    </div>
    @endforeach
</div>

// html = '';
// $.each(data.datas, function(index, value){

// html += `<div class="menu-bottom animated wow fadeInUp rest" data-wow-duration="1000ms" data-wow-delay="500ms">
    // <div class="col-md-4 menu-bottom1" rest_id="`+value.id+`">
        // <div class="btm-right">
            // <a href="menu/`+value.slug+`">
                // <img src="assets/image/restaurant/`+value.image+`" height="310px" class="clearfix">
                // <div class="captn">
                    // <h4>`+value.name+`</h4>
                    // </div>
                // </a>
            // </div>
        // </div>
    // </div>`;
// });

// $( "#js_readmore" ).attr('href',data.nextPage);

return redirect()->route('home');
} else {
return redirect()->back()->with('error', 'Currant Password is Wrong ! Please Enter Correct Password !');
}

$record = User::where('email', $request->email)->first();
if($record)
{
$record->otp = mt_rand(1000000, 9999999);
$record->save();
Mail::to($record->email)->send(new ForgotPassMail($record));
return redirect()->route('otp-page');
} else {
return redirect()->back()->with('error', 'Email is not exists !!');
}

$record = User::find($request->id);
if($record->otp == $request->otp)
{
return redirect()->route('changepassword');
} else {
return redirect()->back()->with('error', 'OTP is incorrect !!');
}


// dd($user->name);
//Find User
$authUser = User::where('email', $user->email)->first();
// dd($authUser);
if($authUser){
Auth::login($authUser);
return redirect()->route('home');
}else{
$newUser = new User();
$newUser->name = $user->name;
$newUser->email = $user->email;
$newUser->user_id = $user->id;
$newUser->password = uniqid(); // we dont need password for login
$newUser->save();

Auth::login($newUser);
return redirect()->route('home');
}


use App\Http\Controllers\Controller;
use App\Http\Controllers\Frant\HomeController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

ranpariyaishani21@gmail.com = ishani@2110
GOOGLE_CLIENT_ID=486291363039-1as5f6f4v3plu23k95v2dptlqgek1gd2.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=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

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Testimonial</title>
</head>
<style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);

    body {
        /*background-image: radial-gradient(to right, black,blue,black, blue, black);*/
        background-image: radial-gradient(black, #3498DB, black);

    }

    .form-control {
        background: transparent;
    }

    form {
        width: 320px;
        margin: 20px;
    }

    form>div {
        position: relative;
        overflow: hidden;
    }

    form input,
    form textarea {
        width: 100%;
        border: 5px solid black;
        background: none;
        position: relative;
        top: 0;
        left: 0;
        z-index: 1;
        padding: 8px 12px;
        outline: 0;
    }

    form input:valid,
    form textarea:valid {
        background: white;
    }

    form input:focus,
    form textarea:focus {
        border-color: #357EBD;
    }

    form input:focus+label,
    form textarea:focus+label {
        background: #357EBD;
        color: white;
        font-size: 70%;
        padding: 1px 6px;
        z-index: 2;
        text-transform: uppercase;
    }

    form label {
        -webkit-transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
        transition: background 0.2s, color 0.2s, top 0.2s, bottom 0.2s, right 0.2s, left 0.2s;
        position: absolute;
        color: #999;
        padding: 7px 6px;
        font-weight: normal;
    }

    form textarea {
        display: block;
        resize: vertical;
    }

    form.go-bottom input,
    form.go-bottom textarea {
        padding: 12px 12px 12px 12px;
    }

    form.go-bottom label {
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
    }

    form.go-bottom input:focus,
    form.go-bottom textarea:focus {
        padding: 4px 6px 20px 6px;
    }

    form.go-bottom input:focus+label,
    form.go-bottom textarea:focus+label {
        top: 100%;
        margin-top: -16px;
    }

    form.go-right label {
        border-radius: 0 5px 5px 0;
        height: 100%;
        top: 0;
        right: 100%;
        width: 100%;
        margin-right: -100%;
    }

    form.go-right input:focus+label,
    form.go-right textarea:focus+label {
        right: 0;
        margin-right: 0;
        width: 40%;
        padding-top: 5px;
    }
</style>

<body>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <div class="container">
        <div class="row">
            <form role="form" class="col-md-9 go-right">
                <h2>Form To Right</h2>
                <p>To see how it works, you clink in a input field.</p>
                <div class="form-group">
                    <input id="name" name="name" type="text" class="form-control" required>
                    <label for="name">Your Name</label>
                </div>
                <div class="form-group">
                    <input id="phone" name="phone" type="tel" class="form-control" required>
                    <label for="phone">Primary Phone</label>
                </div>
                <div class="form-group">
                    <textarea id="message" name="phone" class="form-control" required></textarea>
                    <label for="message">Message</label>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

Start Up schedule

CEO : Nensi Tala
HR : Diya Patel
PHP Developer Team
- Bhrati Kalsariya
- Urja Pandav
- Dixit Patidar
- Gaurav Shingala
Graphic Desighner
- Ishani Ranpariya
- Hinal Mevada
Android Team
- Ishani Ranpariya (coding)
- Bhrati Kalsariya (css)
IOS Team
- Nemanshu Bhalala
Marketing Team
- Manisha Rajput

Trainer guide
- PHP -> Bhrati Kalsariya
- GD -> Ishani Ranpariya
- BD -> Manisha Rajput
- ios -> Nemanshu Bhalala
- Learn English -> Manisha Rajput

Teams and Coundition

- Fully Background Music
- Sunday, Saturday Week Off
- Wednesday Full Day only fun
- Work time only 5 hours (depends on employee)
- College atmosphere
- HR Work Time (7:00 AM to 7:00 PM)
- CEO Work Time (7:00 AM to 7:00 PM)
- There is fecility of theater where employee enjoy series

Accept urja wish list
- morning -> kitkat 20 rupees and sprit
- afternoon -> pastry 200 gm with spoon
- evening -> ice creams (chocolate)
- week ma 3 divas avu nu and 3 divas raja (jo festival sunday ave to monday pn raja joiye)
- college atmosphere
- canteen most required

No One have option to give resign

@extends('layouts.app')
@section('title','Payment')
@push('css')
<style>
    body {
        background: #f5f5f5
    }

    .rounded {
        border-radius: 1rem
    }

    .nav-pills .nav-link {
        color: #555
    }

    .nav-pills .nav-link.active {
        color: white
    }

    input[type="radio"] {
        margin-right: 5px
    }

    .bold {
        font-weight: bold
    }
</style>
@endpush
@section('content')
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-6">Bootstrap Payment Forms</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">
                        <h6 class="pb-2">Select your paypal account type</h6>
                        <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                        <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                        <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>Bank 1</option>
                                <option>Bank 2</option>
                                <option>Bank 3</option>
                                <option>Bank 4</option>
                                <option>Bank 5</option>
                                <option>Bank 6</option>
                                <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option>
                            </select> </div>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('js')
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    @endpush

    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------- -->

    <!DOCTYPE html>
    <html>

    <head>
        <title>Payment Process</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script type="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
        <script type="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
        body {
            background: #f5f5f5
        }

        .rounded {
            border-radius: 1rem
        }

        .nav-pills .nav-link {
            color: #555
        }

        .nav-pills .nav-link.active {
            color: white
        }

        input[type="radio"] {
            margin-right: 5px
        }

        .bold {
            font-weight: bold
        }
    </style>

    <body>
        <div class="container py-5">
            <!-- For demo purpose -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-6">Bootstrap Payment Forms</h1>
                </div>
            </div> <!-- End -->
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Paypal </a> </li>
                                    <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div id="credit-card" class="tab-pane fade show active pt-3">
                                    <form role="form" onsubmit="event.preventDefault()">
                                        <div class="form-group"> <label for="username">
                                                <h6>Card Owner</h6>
                                            </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                        <div class="form-group"> <label for="cardNumber">
                                                <h6>Card number</h6>
                                            </label>
                                            <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> <label><span class="hidden-xs">
                                                            <h6>Expiration Date</h6>
                                                        </span></label>
                                                    <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> <input type="text" required class="form-control"> </div>
                                            </div>
                                        </div>
                                        <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                                    </form>
                                </div>
                            </div> <!-- End -->
                            <!-- Paypal info -->
                            <div id="paypal" class="tab-pane fade pt-3">
                                <h6 class="pb-2">Select your paypal account type</h6>
                                <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                                <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                                <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                            </div> <!-- End -->
                            <!-- bank transfer info -->
                            <div id="net-banking" class="tab-pane fade pt-3">
                                <div class="form-group "> <label for="Select Your Bank">
                                        <h6>Select your Bank</h6>
                                    </label> <select class="form-control" id="ccmonth">
                                        <option value="" selected disabled>--Please select your Bank--</option>
                                        <option>Bank 1</option>
                                        <option>Bank 2</option>
                                        <option>Bank 3</option>
                                        <option>Bank 4</option>
                                        <option>Bank 5</option>
                                        <option>Bank 6</option>
                                        <option>Bank 7</option>
                                        <option>Bank 8</option>
                                        <option>Bank 9</option>
                                        <option>Bank 10</option>
                                    </select> </div>
                                <div class="form-group">
                                    <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                                </div>
                                <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                            </div> <!-- End -->
                            <!-- End -->
                        </div>
                    </div>
                </div>
            </div>
    </body>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    </html>

    @extends('layouts.app')
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-5 text-center">
                <h1>Payment Process</h1>
                <h1>---------------------------------------</h1>
                <form method="POST" action="{{route('paymentpage')}}" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                    @csrf

                    @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="card_owner">Card Owner</label>
                        <input id="card_owner" type="text" class="form-control input-sm chat-input @error('card_owner') is-invalid @enderror" name="card_owner" value="{{ old('card_owner') }}" placeholder="Card Owner Name" autocomplete="card_owner" autofocus>
                        @if ($message = Session::get('error'))
                        <strong style="color: red;">{{ $message }}</strong>
                        @endif
                        @error('card_owner')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="card_number">Card number</label>
                        <input id="card_number" type="text" class="form-control input-sm chat-input @error('card_number') is-invalid @enderror card-number" name="card_number" value="{{ old('card_number') }}" placeholder="card_number" autocomplete="card_number" autofocus>

                        @error('card_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- ------------------------------------------------------------ -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Expiration Date</label>
                                <input type="number" placeholder="MM" name="month" class="form-control input-sm chat-input @error('month') is-invalid @enderror card-expiry-month">
                                @error('month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label></label>
                                <input type="number" placeholder="YY" name="year" class="form-control input-sm chat-input @error('year') is-invalid @enderror card-expiry-year">
                                @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>CVV<i class="fa fa-question-circle d-inline"></i></label>
                                <input type="number" placeholder="CVV" name="cvv" class="form-control input-sm chat-input @error('cvv') is-invalid @enderror card-cvc">
                                @error('cvv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- --------------------------------------------------------- -->
                    <div class="card-footer">
                        <button type="submit" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>

                        <!-- <div class="form-group row mb-0">
               <div class="col-md-5 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                     {{ __('Register') }}
                  </button>
               </div>
            </div> -->
                </form>
            </div>
        </div>
    </div>
    @endsection
    @push('js')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        $(function() {

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function(e) {
                var $form = $(".require-validation"),
                    inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputSelector),
                    $errorMessage = $form.find('div.error'),
                    valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
    @endpush

    // $list = $stripe->customers->all(['limit' => 3]);
    // // dd($list);
    // $id = $list->data;
    // $a=[];
    // foreach($id as $ids){
    // // dd($ids);
    // $a[] = $ids['id'];
    // }
    // $cart = $stripe->customers->createSource(
    // 10,
    // ['source' => 'tok_mastercard']
    // );
    // dd($cart);
    // dd($a);
    // $create = $stripe->customers->create([
    // 'name' => $request->card_name,
    // 'email' => $user,
    // ]);

    // dd($create);
    // foreach ($list as $lists) {
    // $a = $lists->id;
    // }
    // $update = $stripe->customers->update(
    // 'cus_KbvEPQ2ZrDCpRK',
    // ['metadata' => ['order_id' => '6735']]
    // );
    // dd($update);

    // $token = $stripe->tokens->create([
    // 'card' => [
    // 'number' => '4242424242424242',
    // 'exp_month' => 11,
    // 'exp_year' => 2022,
    // 'cvc' => '314',
    // ],
    // ]);
    // dd($token->id);
    // dd($token);

    // ----------------------- customer list-----------------------------
    $list = $stripe->customers->all();
    $data = $list->data;
    for ($i=0; $i<count($data); $i++){ $answer=$data[$i]['email']; $ss[]=[ 'get_email'=> $answer,
        ];
        }
        foreach($ss as $datas)
        {
        $item = $datas['get_email'];
        if($request->email == $item)
        {
        $list = $stripe->customers->all();
        return "match";
        }
        }
        // ----------------------- customer update-----------------------------
        // $update = $stripe->customers->update([
        // 'cus_Kcek1eY6kLKXIO',
        // 'name' => $request->card_name,
        // 'email' => $request->email,
        // // 'metadata' => ['order_id' => '6735']
        // ]);



        // ----------------------- update customer-----------------------------
        $email = $stripe->customers->all(['email' => $request['email']]);
        if ($request['email'] === $email->data[0]['email']) {
        dd("match");
        $stripe->customers->update(
        $email->data[0]['id'],
        [
        'name' => $request['name'],
        ]
        );
        $update_cus = PaymentCustomer::where('email', $request['email'])->get()->first();
        $updateRow = [
        'name' => $request['name'],
        ];
        $update_cus->update($updateRow);
        }


        public function store(array $array)
        {
        $foods = Food::where('name', $array['name'])->get()->first();
        $qty = 1;
        $datas = Cart::where('name', $foods->name)->get()->first();
        // $id = $datas->id;
        // if ($datas) {
        // dd("match");
        // $q = Cart::find($id);
        // $qty = $q->quantity + 1;
        // } else {
        // dd("no");
        $cart = new Cart;
        $cart->restaurants_id = $foods->restaurants_id;
        $cart->name = $foods->name;
        $cart->image = $foods->image;
        $cart->price = $foods->price;
        $cart->quantity = $qty;
        $cart->total = $foods->price;
        $cart->slug = $foods->slug;
        $cart->save();
        // }



        // foreach ($foods as $food) {
        // $restro = $food->restaurants_id;
        // $name = $food->name;
        // $image = $food->image;
        // $price = $food->price;

        // $user = auth()->user()->name;
        // $slug = $food->slug;

        // }


        foreach ($foods as $food) {
        $restro = $food->restaurants_id;
        $name = $food->name;
        $image = $food->image;
        $price = $food->price;

        $user = auth()->user()->name;
        $slug = $food->slug;
        }

        $history = new OrderHistory;
        $history->user_id = Auth::user()->id;
        $history->order_id = "null";
        $history->restaurants_id = $foods->restaurants_id;
        $history->name = $foods->name;
        $history->image = $foods->image;
        $history->price = $foods->price;
        $history->quantity = "1";
        $history->total = $foods->price;
        $history->slug = $foods->slug;
        $history->save();
        $count = Cart::where('slug', '=', $foods->slug)->count();
        return $count;
        }


        $user = Auth::user()->id;
        $order = Order::where('user_id', $user)->get()->first();
        $users = User::where('id', $order->user_id)->get()->first();
        $orderdetail = Orderdetail::where('order_id', $order->id)->get();
        return view('frant.orderhistorydetail', compact('order','users','orderdetail'));

        // dd($users);
        // dd($order);
        // $user = Auth::user()->id;
        // $all = DB::table('orders')->latest()->first();
        // $id = $all->id;
        // $data = OrderHistory::where('user_id', $user)->where('order_id',$id)->get();
        // $sum = $all->total;
        // return view('frant.orderhistory', compact('data','sum'));


        <!-- <html>
   <head>
      <title>dnbfjd</title>
   </head>
   <body>
      <table>
         <tr>
            <th>id</th>
            <th>order_id</th>
            <th>restaurants_id</th>
            <th>food_id</th>
            <th>quantity</th>
         </tr>
         <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->order_id}}</td>
            <td>{{$order->user_id}}</td>
            <td>{{$order->total}}</td>
         </tr>
         @foreach($orderdetail as $orderdetail)
         <tr>
            <td>{{$orderdetail->id}}</td>
            <td>{{$orderdetail->order_id}}</td>
            <td>{{$orderdetail->restaurants_id}}</td>
            <td>{{$orderdetail->food_id}}</td>
            <td>{{$orderdetail->quantity}}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html> -->



'password' => 'required|min:8|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/',
            'confirm_password' => 'required',

            
            'password.required' => 'Please Enter Your Password',
            'password.regex' => 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.',
            'confirm_password.required' => 'Please Enter Your Confirm Password',





* payment gateways
1. stripe 
2. paypal
3. Google Pay
4. Phone Pay
5. Braintree
6. Square
7. Cashfree
