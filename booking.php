<?php
 $doc_id= $_GET['doc_id'];?>
 	<?php 
					include('dbconnection.php');
					

							$sql="SELECT * FROM doc_reg WHERE doc_id = $doc_id ";

							$result = $con->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $dname 	= $row["name"];
							        $specialisation = $row["Specialisation"];
							        $dusername 	= $row["username"];
							        $dplace = $row["place"];
									$hospital = $row["hospital"];
                                    $t1= $row["time_slot1"];
                                    $t2= $row["time_slot2"];
                                    $t3= $row["time_slot3"];
                                    $t4= $row["time_slot4"];
							    }
							}
                     
							$con->close();

					?>


<?php 
include("patient_sess.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Booking</title>
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
              <li><a class="waves-effect" href="view_healthstatout.php">View Doctor comments</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>
  <div id="page-container">
    <div class="content">
      <div id="content-wrap">
      <h3 class="center-align">Book Appointment</h3><br><br>
<form action="" method="post">
<label>
<b class="black-text">Dr. Name: <input type="text" name="dname" value="<?php echo $dname; ?>" ></b>
</label><br><br>

<label>
<b class="black-text">Contact: <input type="text" name="dcontact" value="<?php echo $dusername; ?>" /></b>
</label><br><br>

<label>
<b class="black-text">Specialisation: <input type="text" name="expertise" value="<?php echo $specialisation; ?>" ></b>
</label><br><br>

<label>
<b class="black-text">	Hospital: <input type="text" name="hospital" value="<?php echo $hospital; ?>" ></b>
</label><br><br>
<label>
<b class="black-text">	Your Name: <input type="text" name="pname" value=" <?php echo  $rsedit[name];?>"></b>
</label><br><br>

<label>
<b class="black-text"> Contact: <input type="text" name="pcontact" value=" <?php echo  $rsedit[mobile_no];?>"/></b>
</label><br><br>
<label>
<b class="black-text"> E-mail: <input type="email" name="pemail" value=" <?php echo  $rsedit[username];?>"/></b>
</label><br><br>

<label>
<b class="black-text"> Address: <input type="text" name="paddress" value=" <?php echo  $rsedit[address];?>"></b>
</label><br><br>
<label>
<b class="black-text"> Date: <input type="date" name="dates" value=""></b>
</label><br><br>
<label>
<b class="black-text"> Time: <select name="tyme" required>
<option value="">-select-</option>
<option value="<?php echo $t1; ?>"><?php echo $t1; ?></option>
<option value="<?php echo $t2; ?>"><?php echo $t2; ?></option>
        <option value="<?php echo $t3; ?>"><?php echo $t3; ?></option>
        <option value="<?php echo $t4; ?>"><?php echo $t4; ?></option>
</select></b>
</label><br><br>
<br><br>
<!-- <label>
<input type="hidden" name="userid" value="<?php echo $userid; ?>">
</label><br><br> -->
<div class="row">
<div class="input-field submitbutton">
<center>
<button class="btn waves-effect waves-light black" type="submit" name="submit" value="submit">Confirm<i class="material-icons right">send</i></button>
<br><br>
</center>
</div>
</div>

</form> <br><br>  
</div>
</div>
</div>
<?php
include('dbconnection.php');
extract($_POST);
if(isset($_POST['submit'])){

$sql = " INSERT INTO doc_details (doc_id,d_name,d_email,specialisation,hospital,pat_id,p_name,p_mobile,p_email,p_address,date,time)
VALUES ('" . $doc_id . "','" . $_POST["dname"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "','" . $_POST["hospital"] . "', '" . $rsedit["pat_id"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["pemail"] . "','". $_POST["paddress"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "' )";

if (!mysqli_query($con,$sql)) {
echo "<script>alert('There was an Error')<script>";
} else {
echo "<script>alert('Your booking has been accepted!');</script>";
}

$con->close();
}
?> 


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
 
  <script>  $(document).ready(function(){
       $('select').material_select();
    
    M.textareaAutoResize($('#text'));
          
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