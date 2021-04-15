
<html>
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
         <link rel="stylesheet" href="ani.css">

        <title>Login</title>
 </head>

  <style>
    
  body {
  background: #222;
  background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('bg1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  background-fill-mode: rgba(0,0,0,0.5);
  display: flex;
  flex-direction: column;
  min-height: 120vh;
}
  main {
    flex: 1 0 auto;
  }
   
    header{
    min-height: 50px;
    }
  @media screen and (max-width: 500px){
      header{
        min-height: 50px;
      }
    }
    h5{
      text-indent:2.5em;
    }


    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
    .footer-bottom
    {
      margin-bottom:0px;
    }
  
  </style>


  <body>
    <header>
      <div class="nav-extended">
        <nav style="min-height: 100px ">
          <nav class="nav-wrapper red ">
              <a href="#" class="brand-logo"><h4><span class="white-text">  Covid-19 Management System</span></h4></a> 
              <a href="#" class="sidenav-trigger" data-target="mobile-links">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <li><a href="main.php"><i class="material-icons white-text right">home</i><span class="white-text">Home </span> </a></li>
                <li><a href="roletype_login.php"><i class="material-icons white-text right">nature_people</i><span class="white-text">Account </span> </a></li>
                <li><a href="blogs.php"><i class="material-icons white-text right">forum</i><span class="white-text">Blogs</span></a></li>
              </ul>
            </nav>
          </nav>
      </div>

        <ul class="sidenav" id="mobile-links">
          <li><a href="main.php">Home</a></li>
          <li><a href="roletype_login.php">Account</a></li>
          <li><a href="blogs.php">Blogs</a></li>>
        </ul>
    </header> 
<main>
      <div id="page-container">
        <div id="content-wrap">
          <!-- all other page content -->

          <center>
            
            <div class="section ">
              <body1>
                <div1><span class="white-text"><b>LOGIN</b></span></div1>
              </body1>
            </div>  
            
              
              
            <div class="section"></div>
              <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
<form class="col s12" method="post"  action="login_test.php">

<div class='row'>

<div class='input-field col s12'>
<input type="email" name="email" placeholder="Email" required/><br>
<label for='email'>Enter your email</label>
</div>
</div>

<div class='row'>
<div class='input-field col s12'>
<input type="password" name="password" placeholder="Password" required />
<label for='password'>Enter your password</label>
</div>
</div>
<br>
<center>
<div class='row'>
<button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect waves-light red darken-3 white-text'><b>Login</b></button>
</div>
</center>
</form>
                </div>
              </div>
              <a href="register.html"><b>Register Here</b></a>
          </center>
       
  </main>
        <footer class="page-footer red">
         
          <div class="footer-copyright center-align" style="min-height=50px;">
            <div class="container">
            Copyright © 2021 Developed by Gayathri
            </div>
          </div>
        </footer>
            
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <script>
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
      </script>
  </body>
</html>			