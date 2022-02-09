@extends('layouts/frontend')

@section('content')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
<h1>My Account</h1>
<form method="POST" action="/registeraction" >
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">First Name</label>
      <input type="text" class="form-control" id="adminname" name="fname" placeholder="First Name" value="{{ old('fname') }}" >
      <span class="text-danger">@error('fname')
        {{ $message }}
      @enderror</span>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="adminname" name="lname" placeholder="Last Name" value="{{ old('lname') }}" >
      <span class="text-danger">@error('lname')
        {{ $message }}
      @enderror</span>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email Address</label>
        <input type="text" class="form-control" id="email_address" name="email_address" placeholder="Email Address" value="{{ old('email_address') }}">
        <span class="text-danger">@error('email_address')
          {{ $message }}
        @enderror</span>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password</label>
        <input type="password" class="form-control" id="admin_password" name="password" placeholder="Password" > 
        <span class="text-danger">@error('password')
          {{ $message }}
        @enderror</span>       
      </div>  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<div class="col-md-4"></div>
</div>
@endsection