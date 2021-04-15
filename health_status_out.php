<?php 
include("patient_sess.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Patient profile</title>
  <link rel="stylesheet" href="sidenav1.css" >
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<style>
  #page-container {
    position: relative;
    min-height: 120vh;
  }
  #content-wrap {
    padding-bottom: 1rem;    /* Footer height */
  }
  div.content {
    margin-left: 250px;
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
  div.submitbutton{
    margin-top:160px;
  }

#slide-out{
  margin-top:64px;
}

#dropdown1, #dropdown2{
  margin-top:64px;
}

.dropdown-content li > a{
  color:	#DC143C !important;
}

.side-nav li.active{
  background-color:	#DC143C!important;
}

.side-nav li.user-li.active{
  background-color:	#DC143C!important;
}

 .side-nav li.active.lone a,.side-nav li.active ul li:first-child, .side-nav li.active.lone a svg, .side-nav li.active ul li div.collapsible-header p svg{
  color:#FFFFFF !important;
}

.my-icon{
  font-size:1.5em;
  margin-right:14px;
  color:	#DC143C;
}

.changed{
  margin-left:5px;
  color:#666666;
}

.no-margin{
  margin:0px;
}

.user-li{
  background-color:#DC143C!important;
}

@media screen and (max-width: 981px) {
  
    div.content {margin-left: 0;}
  }
    
</style>

<body>
  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="logout.php"><i class="fas fa-sign-out-alt my-icon"></i>LogOut</a></li>
  </ul>
  <nav>
    <div class="nav-wrapper red ">
      <a href="#" class="brand-logo">Covid-19 Management System</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons dropdown-button" data-activates="dropdown1">account_circle</i></a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <ul id="slide-out" class="side-nav fixed main-side">
    <li class="user-li"><div class="user-view">
      <div class="background">
      </div>
      <p class="no-margin"><span class="white-text name">Patient Name: <?php echo  $rsedit[name];?></span></p>
      <p class="no-margin"><span class="white-text email">Patient Id: <?php echo  $rsedit[pat_id]; ?></span></p>
      <p class="no-margin"><span class="white-text email">Patient Type: <?php echo  $rsedit[p_type]; ?> patient</span></p>
    </div></li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header head">
            <p style="margin:0px;padding-left:16px;"><i class="fas fa-id-card my-icon"></i>Appointment<i class="fa fa-angle-right changed"></i></p>
          </div>
          <div class="collapsible-body drop-body">
            <ul class="drop-body">
            <li><a class="waves-effect" href="book_appointment.php">Book</a></li>
              <li><a class="waves-effect" href="view_appointment.php">View</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header head">
            <p style="margin:0px;padding-left:16px;"><i class="fa fa-thermometer-full my-icon"></i>Health status<i class="fa fa-angle-right changed"></i></p>
          </div>
          <div class="collapsible-body">
            <ul>
              <li><a class="waves-effect" href="health_status_out.php">Enter status</a></li>
              <li><a class="waves-effect" href="view_docreply.php">View Doctor comments</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>
  <div id="page-container">
    <div class="content">
      <div id="content-wrap">
      <form method="post" action="status_entry_out.php" >
       <h5 class="center"><b>ENTER DETAILS OF HEALTH STATUS</b></h5>
       <br><br>
         <table >
			<tbody>
				<tr>	      
				    <th class="red-text" >Date :</th>
					<th><input type="date" id="date" name="date" required> </th>
 
                </tr>
        </table>
<table class="responsive-table centered">
            <thead>
              <tr>	      
                  <th class="red-text" style=" border: 1px solid black; border-collapse: collapse;" >Health status<br/><br/>&nbsp;</th>
                  
                  <th style=" border: 1px solid black; border-collapse: collapse;">Body temperature<br/>&nbsp;</th>
                  <th style=" border: 1px solid black; border-collapse: collapse;">O2 saturation<br/><br/>&nbsp;</th> 
                  <th style=" border: 1px solid black; border-collapse: collapse;">Pulse rate<br/>&nbsp;</th>
                  <th style=" border: 1px solid black; border-collapse: collapse;">Body pain<br/><br/>&nbsp;</th>
                  <th style=" border: 1px solid black; border-collapse: collapse;">Cough/cold<br/>&nbsp;</th> 
                  <th style=" border: 1px solid black; border-collapse: collapse;">Loss of smell/taste<br/>&nbsp;</th>
                  <th style=" border: 1px solid black; border-collapse: collapse;">Difficulty in breathing<br/><br/>&nbsp;</th>
                  <th style=" border: 1px solid black; border-collapse: collapse;">Other comorbities<br/><br/>&nbsp;</th>
              </tr>
          </thead>
                    <tbody>
              <tr >
                  <th class="red-text center " style=" border: 1px solid black; border-collapse: collapse;">Your entry: <br/><br/>&nbsp;</th>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="body_temp" required ></td>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="o2" required  ></td>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="pulse_rate" required   ></td>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="body_pain" required ></td>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="cough_cold" required  ></td>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="smell_taste" required  ></td>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="breath" required ></td>
                  <td style=" border: 1px solid black; border-collapse: collapse;"><input type="text" name="comorbities" required ></td>
              </tr>
              </tbody>
              </table> 
            <br><br>
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
          <input id="input_text" name="ques" type="text" data-length="500">
            <label for="input_text"><h6 class="red-text">Doubts/clarifications:</h6></label>
          </div>
        </div>
      
    </div>
          
       
              <br><br><br>
          <div class="row">
            <div class="input-field submitbutton">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
 
  <script>  $(document).ready(function(){
       $('select').material_select();
    
    });</script>
  <script>
  
   $(document).ready(function() {
    
    $('.dropdown-button').dropdown({
       inDuration: 300,
       outDuration: 225,
       constrainWidth: false, // Does not change width of dropdown to that of the activator
       hover: true, // Activate on hover
       gutter: 0, // Spacing from edge
       belowOrigin: false, // Displays dropdown below the button
       alignment: 'left', // Displays dropdown with edge aligned to the left of button
       stopPropagation: false // Stops event propagation
     }
   );
    
    $('.collapsible').collapsible({
     accordion: true, // A setting that changes the collapsible behavior to expandable instead of the default accordion style
     onOpen: function(el) {  }, // Callback for Collapsible open
     onClose: function(el) {  } // Callback for Collapsible close
   });
    
    $('.button-collapse').sideNav({
       menuWidth: 250, // Default is 300
       edge: 'left', // Choose the horizontal origin
       closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
       draggable: true, // Choose whether you can drag to open on touch screens,
       onOpen: function(el) {}, /* Do Stuff* / }, // A function to be called when sideNav is opened*/
       onClose: function(el) { }/* Do Stuff* / }, // A function to be called when sideNav is closed*/
     });
  
     $('.side-nav li').click(function(){
       $('.side-nav li.active').removeClass('active');
       $(this).closest('li').addClass('active');
     });
    
     $('.dropchange .head').on('click', function () {
       $(this)
         .find('.changed')
         .toggleClass('fa-angle-down')
         .toggleClass('fa-angle-right');
     });
    
  });
 
  
  </script>

</body>
</html>

