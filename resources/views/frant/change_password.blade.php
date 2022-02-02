@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-5 text-center">
			<form method="POST" action="{{route('editpassword-user')}}" id="changepassword">
		        @csrf
		        <div class="form-group">
		            <input id="current_password" type="password" class="form-control input-sm chat-input @error('current_password') is-invalid @enderror" name="current_password" value="{{ old('current_password') }}" placeholder="Current Password" autocomplete="current_password" autofocus>
		            @if ($message = Session::get('error'))
                                <strong style="color: red;">{{ $message }}</strong>
                            @endif
		            @error('current_password')
		                <span class="invalid-feedback" role="alert">
		                    <strong>{{ $message }}</strong>
		                </span>
		            @enderror
		        </div>

				<div class="form-group">
					<input id="password" type="password" class="form-control input-sm chat-input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="password" autofocus>

					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="form-group">
					<input id="password_confirmation" type="password" class="form-control input-sm chat-input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Cofirmation Password" autocomplete="password_confirmation" autofocus>
					<!-- <input id="password-confirm" type="password" class="form-control input-sm chat-input" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password"> -->

					@error('password_confirmation')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
		        
		        <div class="form-group row mb-0">
		            <div class="col-md-5 offset-md-4">
		                <button type="submit" class="btn btn-primary">
		                    {{ __('Update Password') }}
		                </button>
		            </div>
		        </div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('js')
<script>
   $(document).ready(function() {
      $('#changepassword').validate({
         rules: {
            current_password: {
               required: true,
               minlength: 8
            },
            password: {
               required: true,
               minlength: 8
            },
            password_confirmation: {
               required: true,
               equalTo: "#password"
            },
         },
         errorElement: 'span',
         messages: {
            current_password: {
				required : 'Please Enter Your Current Password.',
				minlength : 'Please Enter at least 8 characters.'
			},
            password: {
               required : 'Please Enter Your Password.',
               minlength : 'Please Enter at least 8 characters.'
            },
            password_confirmation: {
               required : 'Please Enter Confirmation.',
               equalTo : 'Please Enter Confirm Password Same as a Password.'
            }
         },
         highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
            $(element).parents("div.form-control").addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
            $(element).parents(".error").removeClass(errorClass).addClass(validClass);
        },
      });
   });
</script>
@endpush