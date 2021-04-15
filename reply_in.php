
</html>
<?php
 $hid= $_GET['h_id'];?>
 <?php 
include("doc_sess.php");
include("dbconnection.php");
?>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Doctor reply</title>
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
    <li><a href="#"><i class="fas fa-sign-out-alt my-icon"></i>LogOut</a></li>
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
      <p class="no-margin"><span class="white-text name">Doctor Name: <?php echo  $rsedit1[name];?></span></p>
      <p class="no-margin"><span class="white-text email"><?php echo  $rsedit1[Specialisation]; ?></span></p>
      <!-- <p class="no-margin"><span class="white-text email">Patient Type: <?php echo  $rsedit[p_type]; ?> patient</span></p> -->
    </div></li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header head">
            <p style="margin:0px;padding-left:16px;"><i class="fas fa-id-card my-icon"></i>Appointment<i class="fa fa-angle-right changed"></i></p>
          </div>
          <div class="collapsible-body drop-body">
            <ul class="drop-body">
              <li><a class="waves-effect" href="#">Book</a></li>
              <li><a class="waves-effect" href="#">Cancel</a></li>
              <li><a class="waves-effect" href="#">View</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header head">
            <p style="margin:0px;padding-left:16px;"><i class="fa fa-thermometer-full my-icon"></i>Patient details<i class="fa fa-angle-right changed"></i></p>
          </div>
          <div class="collapsible-body">
            <ul>
              <li>
    <li class="dropchange">
      <ul class="collapsible data-collapsible="accordion">
        <li>
          <div class="collapsible-header head">
            <p style="margin:0px;padding-left:16px;color:black;">In patient <i class="fa fa-angle-right red "></i></p>
          </div>
          <div class="collapsible-body">
            <ul>
              <li><a class="waves-effect" href="doc_inpat.php">Total in patients</a></li>
              <li><a class="waves-effect" href="view_healthstatin.php">View health status</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    </li>
    
              <li><a class="waves-effect" href="view_healthstatout.php"> Out patients</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
</ul>
<div id="page-container">
    <div class="content">
      <div id="content-wrap">
<form method="post" action="" >
<div class="row">
          <div class="col s12">
          <h5 class="red-text"> Reply here:</h5>
            <div class="input-field inline">
          <input name="reply" type="text" data-length="500">
          </div>
        </div>

<br><br>
        <section>
             <center>
                <button class="  waves-effect waves-light btn submitbtn red" type="submit"  name="save" >Submit</button></center>
        </section>
        </form> 
</div>
</div>
</div>
<?php
        extract($_POST);
        if(isset($save)) {
        
            $sql="update health_status_in set doc_comments='$reply' where h_id='$hid' ";
            if(!mysqli_query($con,$sql))
		{
			echo "Error in mysqli query";
		}
		else
		{
           
			 echo '<script>window.alert("Reply sent successfully!");</script>';
            echo '<script>location.href="view_healthstatusin.php"</script>';
        }
    } 

?>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
  </script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

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