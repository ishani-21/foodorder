@component('mail::message')
# Food Order

Register Your Account alert otp ...

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->
{{$user->email}}<br>
<b>Your OTP to login to access is {{$otp}}.</b>
Thanks !<br>
<!-- {{ config('app.name') }} -->
@endcomponent

