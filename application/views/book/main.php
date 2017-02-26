<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Main</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Poppins" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/myStyle.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/mainslide.css">

  <style>
  body {
  min-height: 2000px;
  font-family: 'Poppins', sans-serif;
  background-color: #eee;
}
html, body {
    max-width: 100%;
    overflow-x: hidden;
}
.navbar-default {
  background-color: #9b59b6;
  border-color: #8e44ad;
}
.navbar-default .navbar-brand {
  color: #ecf0f1;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #ecdbff;
}
.navbar-default .navbar-text {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a {
  color: #ecf0f1;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #ecdbff;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #ecdbff;
  background-color: #8e44ad;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #ecdbff;
  background-color: #8e44ad;
}
.navbar-default .navbar-toggle {
  border-color: #8e44ad;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #8e44ad;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ecf0f1;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #ecf0f1;
}
.navbar-default .navbar-link {
  color: #ecf0f1;
}
.navbar-default .navbar-link:hover {
  color: #ecdbff;
}
.navbar-static-top {
  margin-bottom: 19px;
}
.brand{
    font-family: 'Pacifico', cursive!important;
}
#link{
  margin-top: 20%;
}
 @media screen and (max-width: 767px) { /*Small Screen*/
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
  </head>
<body>
<!--NavBar-->
         <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="brand"><a class="navbar-brand" href="#">BOOKBUY</a></div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url('index.php'); ?>">Home</a></li> <!--Base_url: will retuurn to index-->
            <li><a href="<?php echo site_url('Book/showBook'); ?>">Shopping</a></li><!--site_url: continue after index/-->
            <li><a href="#">About us</a></li>
            <li><a href="<?php echo site_url('Book/showFeedback'); ?>">Feedback</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url('book/login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--Content-->

    <!--animation slide-->
    <div id=canvasanimation><canvas id="canvas" height="300"></canvas>
      <div id="text">
        <h1>WELCOME TO BOOKBUY</h1>
      </div>
      </div>
        <script type="text/javascript" src="Js/example.js"></script>
    <!--End of slide-->
    <div class="container-fluid"> 
      <div class="row">
        <div class="col-md-12">
           <div class="well" id="link">
      <div class="media">
    <div class="media-left">
      <img src="img/avatar.png" class="media-object" style="width:60px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><b>Author</b></h4>
      <h5>Link to <a href="#">PHP Project documemt</a><h5>
    </div>
</div>
</div>
          
           </div><!--End of row-->
      </div><!--End of container-->
    </body>
    </html>
    