@extends('layouts.app')
@section('title','Subcatogary')
@section('content')
<style>
	@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);
	body{
	    /* background-image: radial-gradient(to right, black,blue,black, blue, black); */
	    /* background-image: radial-gradient(white, black, white); */
		font-family: sans-serif;
		

	}
	.form-group{
		border: #454545;
	}
	.form-control{
	    background: transparent;
	}
	form {
	    width: 320px;
	    margin: 20px;
	}
	form > div {
	    position: relative;
	    overflow: hidden;
	}
	form input, form textarea {
	    width: 100%;
	    border: 5px #454545;
	    background: none;
	    position: relative;
	    top: 0;
	    left: 0;
	    z-index: 1;
	    padding: 8px 12px;
	    outline: 0;
	}
	form input:valid, form textarea:valid {
	    background: white;
	}
	form input:focus, form textarea:focus {
	    border-color: #454545;
	}
	form input:focus + label, form textarea:focus + label {
	    background: #454545;
	    color: white;
	    font-size: 15px;
	    padding: 1px 6px;
	    z-index: 2;
	    text-transform: uppercase;
		font-family: "Nunito", sans-serif;
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
	form.go-bottom input, form.go-bottom textarea {
	    padding: 12px 12px 12px 12px;
	}
	form.go-bottom label {
	    top: 0;
	    bottom: 0;
	    left: 0;
	    width: 100%;
	}
	form.go-bottom input:focus, form.go-bottom textarea:focus {
	    padding: 4px 6px 20px 6px;
	}
	form.go-bottom input:focus + label, form.go-bottom textarea:focus + label {
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
	form.go-right input:focus + label, form.go-right textarea:focus + label {
	    right: 0;
	    margin-right: 0;
	    width: 40%;
	    padding-top: 5px;
	}
	h2{
		font-family: cursive;
	}
</style>
<div class="container">
    <div class="row">
        <form method="POST" action="{{ route('testimonials') }}" role="form" class="col-md-9 go-right">
        	@csrf
            <h2>FeedBack</h2>
            <p>To see how it works, you clink in a input field.</p>

            <div style="text-align:left;">
				<p for="name">Your Name</p>
			</div>
            <div class="form-group">
				<input id="name" name="name" type="text" class="form-control input-sm chat-input @error('name') is-invalid @enderror" placeholder="Your Name">
            <label for="name">Your Name</label>
			@error('name')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
        </div>
		<div style="text-align:left;">
				<p for="name">Primary Phone</p>
			</div>
        <div class="form-group">
            <input id="mobile" name="mobile" type="tel" class="form-control input-sm chat-input @error('mobile') is-invalid @enderror" placeholder="Mobile Number">
            <label for="phone">Primary Phone</label>
			@error('mobile')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
        </div>
		<div style="text-align:left;">
				<p for="name">Message</p>
			</div>
        <div class="form-group">
            <textarea id="message" name="message" class="form-control input-sm chat-input @error('message') is-invalid @enderror" placeholder="Message"></textarea>
            <label for="message">Message</label>
            @error('message')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
        </div>
		<div style="text-align:left;">
				<p for="name">Image</p>
			</div>
		<div class="form-group">
            <input id="image" name="image" type="file" class="form-control input-sm chat-input @error('image') is-invalid @enderror" placeholder="image Number">
            <label for="image">Image</label>
			@error('image')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
        </div>
        <div>
        	<button type="submit" class="btn btn-info">Submit</button>
        </div>
        </form>
    </div>
</div>
@endsection