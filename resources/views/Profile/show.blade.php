

        @extends('layouts.master')
<head>
    
<link rel="stylesheet" href="{{asset('register.css')}}">
  
</head>

@section('content')

<br>
<h1>Show Your Account</h1>
<br>
<hr style="width:1000px">

<div class="container">
    
    {{-- <form method="post" action="{{action('updatescontroller@update')}}"> --}}
      {{-- <form method="post" > --}}
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name.." disabled value="{{ old( 'Name' , $profile->customer_name) }}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."  disabled value="{{ old( 'Name' , $profile->customer_lastname) }}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="adress" placeholder="Your New address.." disabled value="{{ old( 'Name' , $profile->customer_adress) }}">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mail">E-mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="email" placeholder="Your email.." disabled value="{{ old( 'Name' , $profile->customer_email) }}">
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="username">User Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="username" name="username" placeholder="Your username.." disabled value="{{ old( 'Name' , $profile->customer_username) }}">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Your password.." disabled value="{{ old( 'Name' , $profile->customer_password) }}">
        </div>
      </div>

@csrf

    <br>
    {{-- <div class="row">
      <input type="submit" value="updated">
    </div> --}}
   
    {{-- </form> --}}
    
  </div>
  
@endsection

