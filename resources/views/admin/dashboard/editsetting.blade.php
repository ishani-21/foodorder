@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.settingStore')}}">
            @csrf

            <div class="form-group">
                <label>Logo</label><br>
                <img src="{{asset('assets/image/logo/'.$setting->logo)}}" width="250px" height="80px"></img>
                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" id="logo" placeholder="logo">
                @error('logo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="rdiscription">Restaurant Discription</label>
                <textarea rows="5" cols="50" type="text" class=" word-wrap form-control @error('rdiscription') is-invalid @enderror" name="rdiscription" id="rdiscription" placeholder="Restaurant Discription....">{{ old('rdiscription', isset($setting->restaurant_discription) ? $setting->restaurant_discription : '') }}</textarea>
                @error('rdiscription')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="mdiscription">Menu Discription</label>
                <textarea rows="5" cols="50" type="text" class=" word-wrap form-control @error('mdiscription') is-invalid @enderror" name="mdiscription" id="mdiscription" placeholder="Menu Discription....">{{ old('mdiscription', isset($setting->menu_discription) ? $setting->menu_discription : '') }}</textarea>
                @error('mdiscription')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="sdiscription">Sub Menu Discription</label>
                <textarea rows="5" cols="50" type="text" class=" word-wrap form-control @error('sdiscription') is-invalid @enderror" name="sdiscription" id="sdiscription" placeholder="Sub Menu Discription....">{{ old('sdiscription', isset($setting->submenu_discription) ? $setting->submenu_discription : '') }}</textarea>
                @error('sdiscription')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="follow_us">Follow Us Discription</label>
                <textarea rows="5" cols="50" type="text" class=" word-wrap form-control @error('follow_us') is-invalid @enderror" name="follow_us" id="follow_us" placeholder="Follow us....">{{ old('follow_us', isset($setting->follow_us) ? $setting->follow_us : '') }}</textarea>
                @error('follow_us')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            

            <button type="submit" class="btn btn-primary">
                {{ __('Update') }}
            </button>
        </form>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
</div>
@endsection