<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<style>

.parallax-container {
height: 400px;
}
.col_fourth
{
position: relative;
display:inline;
display: inline-block;
float: left;
margin-right: 2%;
margin-bottom: 20px;
}
.end { margin-right: 0 !important; }
/* Column Grids End */
.material-icons {
display:inline-flex;
vertical-align:top;
}
.wrapper { width: 900px; margin: 30px auto; position: relative;margin-left:45%;}
</style>
<body>
<!-- Header -->
<nav class="red darken-4">
<div class="nav-wrapper container">
<a href="#" class="brand-logo">Covid-19 Management System</a>
<ul class="right hide-on-med-and-down">

<li class="hoverable"><a href="#features"><i class="material-icons black-text right">search</i><span>Features</span> </a></li>
<li><a href="#lr"><i class="material-icons black-text right">people</i><span>Login/Register</span></a></li>
<li><a href="#blogs"><i class="material-icons black-text right">forum</i><span>Blogs</span></a></li>

</ul> 
</div>
</nav>
<section>
<?php 
include('dbconnection.php');
$today = date("Y-m-d");
$sql = " SELECT nos FROM admin_update WHERE date='".$today."' ";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$nos=$row[nos];
?>
<div class="row">
<div class="wrapper">

<div class="counter col_fourth">
<i class="material-icons medium red-text" style="margin-left:25%;">swap_vert</i>
<span><h2 class="timer count-title count-number" data-to="<?php echo $nos;?>" data-speed="4000"></h2></span> 
<p class="count-text ">Current covid cases in India</p>
</div>
</div>
</div>
</section>

<!-- Content -->
<div class="parallax-container center valign-wrapper">
<div class="container">
<div class="row">
<div class="col s12 white-text">
</div>
</div>
</div>

<div class="parallax">
<img src="bg1.jpg">
</div>

</div>
<section class="section container scrollspy" id="features">
<br> <br>
<div class="row">
<h2 class="indigo-text text-darken-4 center-align">Features</h2>
</div>
<br><br>
<div class="row">

<div class="col s4">
<div class="card medium">
<div class="card-image">
<img src="remote.jpg">
</div>
<div class="card-content">
<span class="card-title">Remote patient monitoring </span>
<p>To effectively reduce Covid-19 infection rate, help the common people and empower medical professionals across the world to help more patients through telemedicine and virtual care.</p>
</div>

</div>
</div>

<div class="col s4">
<div class="card medium">
<div class="card-image">
<img src="telemedicine_0.jpg">
</div>
<div class="card-content">
<span class="card-title">User Experience Focused</span>
<p>Can be used by healthcare sector, patients and general public.</p>
</div>
</div>
</div>

<div class="col s4">
<div class="card medium">
<div class="card-image">
<img src="tele.png">
</div>
<div class="card-content">
<span class="card-title">Digitization</span>
<p>Tracking and treating Covid-19 patients and monitoring the spread of the virus to decrease virus load in the community.</p>
</div>
</div>
</div>
</div>
<br><br>
</section>

<div class="parallax-container center valign-wrapper">
<div class="parallax"><img src="bg3.jpg">
</div>
</div>

<br><br><br>
<section class="section container scrollspy" id="lr">
<div class="row">

<div class="col s4">

<div class="card medium red">

</div>

</div>

<div class="col s4">

<div class="card medium">
<div class="card-image">
<img src="lr1.jpg">
</div>
<div class="card-content">
<span class="card-title">A one stop solution for you </span>
<p>The all in one Covid-19 management system </p>
</div>
<div class="card-action">
<a  href="register.html">Register here</a>
<a href="roletype_login.php">Login here</a>

</div>
</div>

</div>

<div class="col s4">
<div class="card medium red">
</div>
</div>
</div>

</section>
<br><br><br>
<section class="section container scrollspy" id="blogs">
<div class="row">

<div class="col s4">

<div class="card medium red">
</div>

</div>

<div class="col s4">

<div class="card medium">
<div class="card-image">
<img src="blog.png">
</div>
<div class="card-content">
<span class="card-title">Check out blogs! </span>
<p>Get to know credible information about the experience of Covid-19 patients</p>
</div>
<div class="card-action">
<a href="#"><i class="material-icons green-text right">people</i><span><?php
if(basename($_SERVER['PHP_SELF']) == "display_articles.php")
{
if($_GET[articletype] == "Blog" )
          {
echo ' class="active"';
}
}
?><a href="display_articles.php?articletype=Blog">Click here</span></a> 
</div>
</div>

</div>

<div class="col s4">
<div class="card medium red">
</div>
</div>
</div>

</section>
<br><br><br>

<div class="parallax-container center valign-wrapper">
<div class="parallax"><img src="bg4.jpg">
</div>

<div class="container white-text">
<div class="row">
<div class="col s12">
</div>
</div>
</div>
</div>


<footer class="page-footer red darken-4">

<div class="footer-copyright center-align" style="min-height=50px;">
<div class="container">
Copyright © 2021 Developed by Gayathri
</div>
</div>
</footer>
<!--  Scripts
TODO: Uncomment these script elements once you move this code off of Code Pen.
These script elements have been commented out for Code Pen, as we're including the first two script elements as "External JavaScript" using the Code Pen interface instead, and our equivalent of the "js/init.js" file will just be the JavaScript written in the JS section of our Code Pen. -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js">
</script>
<script>$(document).ready(function(){
$('.parallax').parallax();
});</script>

<script>
(function ($) {
$.fn.countTo = function (options) {
options = options || {};

return $(this).each(function () {
// set options for current element
var settings = $.extend({}, $.fn.countTo.defaults, {
from:            $(this).data('from'),
to:              $(this).data('to'),
speed:           $(this).data('speed'),
refreshInterval: $(this).data('refresh-interval'),
decimals:        $(this).data('decimals')
}, options);

// how many times to update the value, and how much to increment the value on each update
var loops = Math.ceil(settings.speed / settings.refreshInterval),
increment = (settings.to - settings.from) / loops;

// references & variables that will change with each update
var self = this,
$self = $(this),
loopCount = 0,
value = settings.from,
data = $self.data('countTo') || {};

$self.data('countTo', data);

// if an existing interval can be found, clear it first
if (data.interval) {
clearInterval(data.interval);
}
data.interval = setInterval(updateTimer, settings.refreshInterval);

// initialize the element with the starting value
render(value);

function updateTimer() {
value += increment;
loopCount++;

render(value);

if (typeof(settings.onUpdate) == 'function') {
settings.onUpdate.call(self, value);
}

if (loopCount >= loops) {
// remove the interval
$self.removeData('countTo');
clearInterval(data.interval);
value = settings.to;

if (typeof(settings.onComplete) == 'function') {
settings.onComplete.call(self, value);
}
}
}

function render(value) {
var formattedValue = settings.formatter.call(self, value, settings);
$self.html(formattedValue);
}
});
};

$.fn.countTo.defaults = {
from: 0,               // the number the element should start at
to: 0,                 // the number the element should end at
speed: 1000,           // how long it should take to count between the target numbers
refreshInterval: 100,  // how often the element should be updated
decimals: 0,           // the number of decimal places to show
formatter: formatter,  // handler for formatting the value before rendering
onUpdate: null,        // callback method for every time the element is updated
onComplete: null       // callback method for when the element finishes updating
};

function formatter(value, settings) {
return value.toFixed(settings.decimals);
}
}(jQuery));

jQuery(function ($) {
// custom formatting example
$('.count-number').data('countToOptions', {
formatter: function (value, options) {
return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
}
});

// start all the timers
$('.timer').each(count);  

function count(options) {
var $this = $(this);
options = $.extend({}, options || {}, $this.data('countToOptions') || {});
$this.countTo(options);
}
});
</script>
</body>
</html>
