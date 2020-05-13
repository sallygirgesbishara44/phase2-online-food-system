@extends('layouts.admin')
<head>
  

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('css/maiin.css')}}">
</head>
@section('content')
<br><br><br><br>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="contain">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="/addDB/added">
                        <h2 class="form-title">Add Staff (delivery)</h2>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="UserName"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="workshift" id="workshift" placeholder="Work Shift"/>
                        </div>
                        @csrf
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Add"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    @endsection