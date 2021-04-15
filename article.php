<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload blog</title>
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
      <p class="no-margin"><span class="white-text name">ADMIN </span></p>
    </div></li>
    <li class="dropchange">
      <ul class="collapsible" data-collapsible="accordion">
        
      <li class="white"><a href="admin.php" class="waves-effect waves-blue"><i class="material-icons  left style="margin-right:0;">home</i> Home</a></li>
<li class="white"><a href="article.php" class="waves-effect waves-blue"><i class="material-icons  left style="margin-right:0;">add_to_photos</i> Upload blogs</a></li>
<li class="white"><a href="updatecases.php" class="waves-effect waves-blue"><i class="material-icons  left style="margin-right:0;">show_chart</i> Update case number</a></li>
  </ul>
    </li>

      </ul>
    </li>
  </ul>
  <div id="page-container">
    <div class="content">
      <div id="content-wrap">
			<section>
				<header>
                <h5 class="center"><b>Upload blogs</b></h5>
				</header>
                <form method="post" action="insert.php">
                	<table border="2">
						<tbody>
							 <tr>
							    <th height="32" scope="row" align="right">Enter suitable title <font color="#FF0000">*</font>    </th>
							    <td><input type="text" name="title" required></td>
						    </tr>
							<tr>
							    <th  scope="row" style="vertical-align:top;" align="right">Enter credible covid-19 experience</th>
							    <td><textarea name="description" rows="15" cols="48" required></textarea></td>
						    </tr>
							<tr>
							    <th height="36"  scope="row" align="right">Upload picture  <font color="#FF0000">* </font></th>
							    <td><input type="file" name="img1" class='col s12 btn btn-large red' required></td>
							</tr>
						   	<tr>
							    <th height="56"  scope="row" align="right"><p>&nbsp;</p></th>
						        <td> <div class="input-field submitbutton">
       
              <button class="btn waves-effect waves-light black" type="submit" name="submit" value="submit">Upload blog<i class="material-icons right">send</i></button>
         
            </td>
						    </tr>
						</tbody>                                     
					</table>
                </form>
			</section>
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