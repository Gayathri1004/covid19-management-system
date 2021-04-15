<?php 
include("dbconnection.php");
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Detail article</title>

    <!-- CSS
      TODO: Uncomment these stylesheet link elements once you move this code off of Code Pen.
      These stylesheet link elements have been commented out for Code Pen, as we're including the first two stylesheets as "External CSS" using the Code Pen interface instead, and our equivalent of the "css/style.css" file will just be the CSS written in the CSS section of our Code Pen. -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <style>
<style>
#page-container {
  position: relative;
  min-height: 100vh;
}

#content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}

#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
        /* Footer height */
}

  </style>
  <body>
    <!-- Header -->
<nav class="red darken-4">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo">Covid-19 Management System</a>
      <ul class="right hide-on-med-and-down">
               
      <li ><a href="admin.php" class="waves-effect waves-blue"><i class="material-icons  left style="margin-right:0;">home</i> Home</a></li>

 </ul> 
      <!-- <ul class="right hide-on-med-and-down">
        <li class="hoverable"><a href="#">Navbar Link</a></li>
      </ul> -->
    </div>
  </nav>

	

		<div id="featured">
			<div class="container">
				<div class="row">
                              <?php
							  $sql = "SELECT * FROM covid19.article where a_id='$_GET[articleid]'";
							  $qsql = mysqli_query($con,$sql);
							  while($rs = mysqli_fetch_array($qsql))
							  {
								echo "<section><header ><h2><u>$rs[title]</u></h2>";
if($rs[img1] != "" && file_exists($rs[img1]))
{
echo "<img src='$rs[img1]' align='left' style='padding-right: 10px;width: 50%;'>";
}
								echo "<p>" . $rs[description] . "</p>";
if($rs[article_img2] != "" && file_exists($rs[img2]))
{
echo "<img src='$rs[img2]' align='left' style='padding-right: 10px;width: 50%;'>";
}
if($rs[img3] != "" && file_exists($rs[img3]))
{
echo "<img src='$rs[img3]' align='left' style='padding-right: 10px;width: 50%;'>";
}
if($rs[img4] != "" && file_exists($rs[img4]))
{
echo "<img src='$rs[img4]' align='left' style='padding-right: 10px;width: 50%;'>";
}

								echo "
								
								</header></section>";
							  }
							  ?>
								
						</div>
						
					
				</div>
			</div>
		</div>
        <footer class="page-footer red darken-4" id="footer">
 
 <div class="footer-copyright center-align" style="min-height=50px;">
   <div class="container">
   Copyright © 2021 Developed by Gayathri
   </div>
 </div>
</footer>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
</body>
</html>