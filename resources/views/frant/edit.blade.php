<form method="POST" action="{{route('edit-user')}}">
    @csrf
    <!-- <div class="form-login"> -->
    <div>
    	<input type="hidden" name="id" value="{{Auth::user()->id}}">
    </div>
    <div class="form-group">

        <input id="mobile" type="text" class="form-control input-sm chat-input @error('mobile') is-invalid @enderror" name="mobile" value="{{Auth::user()->mobile}}" style="color: #000000; font-size: 18px; font-family: cursive;" autocomplete="mobile" autofocus>

        @error('mobile')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <input id="name" type="text" class="form-control input-sm chat-input @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name}}" style="color: #000000; font-size: 18px; font-family: cursive;" autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="email" type="text" class="form-control input-sm chat-input @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" style="color: #000000; font-size: 18px; font-family: cursive;" autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <input id="address" type="text" class="form-control input-sm chat-input @error('address') is-invalid @enderror" name="address" value="{{ Auth::user()->address }}" style="color: #000000; font-size: 18px; font-family: cursive;" autocomplete="address" autofocus>

        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-5 offset-md-4">
            <button type="submit" class="btn btn-primary" style="font-size: 18px; font-family: cursive;">
                {{ __('Update') }}
            </button>
        </div>
    </div>
    <!-- </div> -->
</form>

