<?php 
include("doc_sess.php");
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
    <li><a href="#"><i class="far fa-user-circle my-icon"></i>Profile</a></li>
    <li class="divider"></li>
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
    <li class="lone">
      <a href="doc_home.php"><i class="fas fa-home my-icon"></i>Home</a></li>
      <div class="divider"></div>
    </li>
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
              <li><a class="waves-effect" href="view_healthin.php">View health status</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    </li>
    
              <li><a class="waves-effect" href="doc_outpat.php"> Out patients</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
<div id="page-container">
    <div class="content">
      <div id="content-wrap">
      <form method="post" action="" >
      <table>
			<tbody>
				<tr>	      
				    <th>Select Date:</th>
					<th><input type="date" id="date" name="from" required> </th>
                </tr>
                <tr>	      
				    <th>Select to Date:</th>
					<th><input type="date" id="date" name="to" required> </th>
                </tr>
            </tbody>
        </table>
        <br><br>
        <section>
             <center>
                <button class="  waves-effect waves-light btn submitbtn red" type="submit"  name="save" >View</button></center>
        </section>
       </form>
      <br><br>
       
      <div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title red-text"><b>View health status</b></span>
      </div>
      <?php
        extract($_POST);
        if(isset($save)) 
        {
            $sql="select pat_id from doc_details where doc_id=$rsedit1[doc_id]";
            $qsql = mysqli_query($con,$sql); 
            $row_count=mysqli_num_rows($qsql);
            if ($qsql->num_rows > 0) {
                // // output data of each row
                while($row = $qsql->fetch_assoc()) {
            $sql1="select * from health_status_in where pat_id='".$row['pat_id']."'";
            $qsql1 = mysqli_query($con,$sql1);
            if ($qsql1->num_rows > 0) {
                while($row1 = $qsql1->fetch_assoc()) {
                    echo "<table id='datatable'><thead><tr><th><b>Patient Id</b></th><th><b>Date</b></th><th><b>Medi</b></th><th><b>Comor</b></th><th><b>Doubts</b></th></tr></thead>";
                  echo "<tbody><tr><td>" . $row1["pat_id"]. "</td><td>"  . $row["date"]. "</td><td>"  . $row["medi"]. "</td><td>". $row["comor"]. "</td><td> " . $row["doubts"].  "</td></tr></tbody>";
                //   echo $row1['pat_id'];
                //   echo $row1['date'];
                //   echo $row1['medi'];
                //   echo $row1 ['comor'];
                //   echo $row1['doubts'];
                //   echo "<br><br>";
                 }
                
                echo "</table>";
              } else 
              {
                
              }
            }}
            else 
              {
                echo "0 results";
                
              }
              echo "<br><br>";
              //echo "<center><h5><b class='red-text'> Total Patients : </b> <b class='black-text'>" .$row_count. "</b>";
              echo "<br> <br>";

        }
        $conn->close();

        ?>
    </div>
  </div>
</div>
   </div>     
        
       
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

