

        @extends('layouts.master')
        <head>
            
        <link rel="stylesheet" href="{{asset('register.css')}}">
          
        </head>
        
        @section('content')
        
        <br>
        <h1>Update Your Account</h1>
        <br>
        <hr style="width:1000px">
        
        <div class="container">
            
            {{-- <form method="post" action="{{action('updatescontroller@update')}}"> --}}
                <form method="POST"
                action="{{ route('profile.update', ['profile'=> $profile->id]) }}">
                   @csrf
                   @method('PUT')

                <div class="row">
              <div class="col-25">
                <label for="fname">First Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="fname" name="firstname" placeholder="Your name.." value="{{ old( 'Name' , $profile->first_name) }}">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="lname">Last Name</label>
              </div>
              <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." value="{{ old( 'Name' , $profile->last_name) }}">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="address">Address</label>
              </div>
              <div class="col-75">
                <input type="text" id="address" name="adress" placeholder="Your New address.." value="{{ old( 'Name' , $profile->address) }}">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="mail">E-mail</label>
              </div>
              <div class="col-75">
                <input type="text" id="email" name="email" placeholder="Your email.." value="{{ old( 'Name' , $profile->e_mail) }}">
              </div>
            </div>
            <div class="row">
                <div class="col-25">
                  <label for="username">User Name</label>
                </div>
                <div class="col-75">
                  <input type="text" id="username" name="username" placeholder="Your username.." value="{{ old( 'Name' , $profile->user_name) }}">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="password">Password</label>
                </div>
                <div class="col-75">
                  <input type="password" id="password" name="password" placeholder="Your password.." value="{{ old( 'Name' , $profile->password) }}">
                </div>
              </div>
        
        @csrf
        
            <br>
            <div class="row">
              <input type="submit" value="updated">
            </div>
           
            </form>
            
          </div>
          
        @endsection
        
        