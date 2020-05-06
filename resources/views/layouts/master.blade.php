
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<<<<<<< HEAD
    <title>BURGERBAR</title>
    <style>
        body{

            background-color: cadetblue

=======
   
    <title>BURGERBAR</title>
    <style>
        body{
            
            background-image: url("https://www.cairowestmag.com/wp-content/uploads/2018/11/Burger-Factory3.jpeg");
            -webkit-background-size: cover;
            background-position: center center;
            height: 100%;
            background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
            backdrop-filter: blur(3px);
>>>>>>> experimental-branch
        }
        </style>
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" >

        <a class="navbar-brand" href="#"><strong>food ordering system</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/menu">Menu <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacts">Contact Us</a>
            </li>

          </ul>
          <span class="navbar-text" style="font-size:23px">
            <i><strong>BURGERBAR</strong></i>
          </span>
        </div>
      </nav>
      <div class="mb-3"></div>
      <div style="width:1300px;margin-left:100px">
      @include ('includes.messages')
      </div>
      @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
