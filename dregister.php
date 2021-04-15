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
  
  }
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
      
<form method="POST" action="dreg_test.php">
<h3 class="center-align">Doctor Registration</h3><br><br>
<div class="row">     
<div class="input-field col s6">
<i class="material-icons prefix">account_circle</i>
<label>
<b class="black-text">Dr. Name</b> <input type="text" name="dname"  required validate/><br></label>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">card_travel</i>
<label>
<b class="black-text">Specialisation:</b> <input type="text" name="specialisation"  required validate/><br></label>
</div>
</div>
<br><br><br><br>
<div class="row">     
<div class="input-field col s6">
<i class="material-icons prefix">local_hospital</i>
<label>
<b class="black-text">Hospital</b> <input type="text" name="hospital" required validate/><br></label>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">place</i>
<label>
<b class="black-text">Place:</b> <input type="text" name="place" required validate/><br></label>
</div>
</div>
<br><br><br><br>
<div class="row">     
<div class="input-field col s6">

<i class="material-icons prefix">timer</i>    <label>
<b class="black-text">Time Slot1:</b> <input type="time" name="ts1" required validate/><br></label>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">timer</i>
<label>
<b class="black-text">Time Slot2:</b> <input type="time" name="ts2"required validate/><br></label>
</div>
</div>
<br><br><br><br>
<div class="row">     
<div class="input-field col s6">
<i class="material-icons prefix">timer</i>
<label>
<b class="black-text">Time Slot3:</b> <input type="time" name="ts3"  required validate/><br></label>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">timer</i>
<label>
<b class="black-text">Time Slot4:</b> <input type="time" name="ts4"  required validate/><br>
</div></label>
</div>
<br><br><br><br>
<div class="row">
<div class="input-field col s6">
<i class="material-icons prefix">email</i>
<label>
<b class="black-text">Email:<input type="email" name="demail"  required validate/><br></label>
</div>
<div class="input-field col s6">
<i class="material-icons prefix">lock</i>
<label>
<b class="black-text">Password:<input type="password" name="dpassword"  required validate /><br></label>
</div>
</div>
<br><br><br><br><br><br>
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
   
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  </body>
  </html>