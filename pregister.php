<html>
    <header>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  </header>
  <style>
    
    #page-container {
    position: relative;
    min-height: 120vh;
  }
  #content-wrap {
    padding-bottom: 1rem;    /* Footer height */
  }
  div.content {
    padding: 1px 16px;
    height: 100px;
    background: #222;
    background: linear-gradient(rgba(255,255,255,0.9), rgba(255,255,255,0.9)), url('bg1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    background-fill-mode: rgba(0,0,0,0.5);
    display: flex;
    flex-direction: column;
    min-height: 120vh;
  main {
    flex: 1 0 auto;
  }
   
    header{
    min-height: 50px;
    }
  </style>
    <body>
    <header>
      <div class="nav-extended">
        <nav style="min-height: 100px ">
          <nav class="nav-wrapper red ">
              <a href="#" class="brand-logo"><h4><span class="white-text left-align">  Covid-19 Management System</span></h4></a> 
              <a href="#" class="sidenav-trigger" data-target="mobile-links">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <li><a href="main.php"><i class="material-icons white-text right">home</i><span class="white-text">Home </span> </a></li>
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
    <div id="page-container">
    <div class="content">
      <div id="content-wrap">
<form method="POST" action="preg_test.php">
<h3 class="center-align">Patient Registration</h3><br><br>
<div class="row">     
<div class="input-field col s6">
<i class="material-icons prefix">account_circle</i>
<input type="text" name="pname" placeholder="Name" required/><br>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">wc</i>
<select id="gender" name="pgender" required>
<option value="0" disabled selected>Choose gender</option>
<option value="female">Female</option>
<option value="male">Male</option>
</select>
</div>
</div><br>
<div class="row">
<div class="input-field col s6">
<i class="material-icons prefix">perm_identity</i>
<input type="number" name="page" placeholder="Age" required/><br>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">phone</i>
<input type="tel" name="pmobile" placeholder="Mobile no" required><br>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<i class="material-icons prefix">place</i>
<textarea id="text" name="paddress" class="materialize-textarea" placeholder="Address"></textarea>
</div><br>
<div class="input-field col s6">
<i class="material-icons prefix">location_city</i>
<input type="text" name="pcity" placeholder="City" required><br>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<i class="material-icons prefix">email</i>
<input type="email" name="pemail" placeholder="Email" required/><br>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">lock</i>
<input type="password" name="password" placeholder="Password" required /><br>
</div>
</div>
<br>
<div class="row">
<div class="input-field col s12">
<center>
<button class="btn waves-effect waves-light black" type="submit" name="submit" value="submit">Submit<i class="material-icons right">send</i></button>
</center>
</div>
</div>

</form>
      </div>
  </div>
  </div>
    </body>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>  $(document).ready(function(){
      $('select').formSelect();
    
    M.textareaAutoResize($('#text'));
          
    });</script>
</html>