<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show_product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Poppins" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/myStyle.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/feedback.css">
  <style>
  
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
img{
  width: 300px;
  height: auto;
  margin-bottom: 10px;
}

#heading{
    padding-bottom:10px
}
table{
    font-size:15px; 
    background-color:#E1E1E1;
    width:100%;
    border: 1px solid black;
}
tr{
    background-color:#FFFFFF;
}

div#text {
    color: purple;
    margin-left: 255px;
    margin-top: -19px;
    margin-bottom: 10;
}
#main_heading{
    font-weight:bold;
    background-color:#FFFFFF;
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
            <li><a href="<?php echo base_url('index.php'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('Book/showBook'); ?>">Shopping</a></li>
            <li><a href="#">About us</a></li>
            <li class="active"><a href="#">Feedback</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--Content-->
    <div class="container-fluid text-center">    
    <!--Side Nav-->
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">ADV Link 1</a></p>
      <p><a href="#">ADV Link 2</a></p>
      <p><a href="#">ADV Link 3</a></p>
    </div>
    <!--End Side Nav-->
    <div class="col-sm-10 text-center"> 
      <h1 id="welcome">GIVE US YOUR FEEDBACK</h1><hr>
      <h5 id="quote"><small><i>“Feedbacks, ideas, comments, thoughts, suggestions - We all need them, that's how we improve”</i></small></h5><hr>
    <!--Content-->
    <?php // Create form for enter user imformation and send values 'shopping/save_order' function?>
            <form name="feedback" method="post" action="add_feedback">
                <input type="hidden" name="command" />
                <div align="center">
                    <h1 align="center"></h1>
                    <table cellpadding="15px">
                        <tr><td>Your Email:</td><td><input type="email" name="customeremail" required/></td></tr>
                        <tr><td>Area: </td><td>
                        <input type="radio" name="category" <?php if (isset($category) && $category=="service") echo "checked";?> value="service">Service
                        <input type="radio" name="category" <?php if (isset($category) && $category=="product") echo "checked";?> value="product">Product
                        </td></tr>
                        <tr><td>Rate(1-5): </td><td><input type="number" name="rate" min="1" max="5"required/></td></tr>
                        <tr><td>Your Feedback</td><td><input type="text" name="fcontent" required/></td></tr>
                        <tr><td></td>
                        <td><br><input type="submit" name="btn" class ='fg-button teal' value="Leave Feedback" /></td></tr>

                    </table><br>
                </div>
            </form>
            </div></div>
                <div class="rows">
          <div class="col-sm-6">
          <h3>Product</h3>
          <div class="feedback">
                <?php
                foreach ($feedback as $f):?>
                <?php
                if($f['category'] == 'product'):?>
                <img id="profile" src="../../img/default.jpg">
                <?php
                echo '<h5>' .$f['customeremail']. ': </h5>';
                echo '<p id="rate"><i>Rate:' .$f['rate']. '/5 </i></h4>';
                echo '<p id="content">' .$f['fcontent'] .'</p>';
                ?>
                <?php endif;?>
               <?php endforeach; ?>
               </div>
          </div><!--End of col-sm-6-->
          <div class="col-sm-6">
          <h3>Service</h3>
          <div class="feedback_service">
                <?php
                foreach ($feedback as $fs):?>
                <?php
                if($fs['category'] == 'service'):?>
                <img id="profile" src="../../img/default.jpg">
                <?php
                echo '<h5>' .$fs['customeremail']. '; </h5>';
                echo '<p id="rate"><i>Rate:' .$fs['rate']. '/5 </i></p>';
                echo '<p id="content">' .$fs['fcontent'] .'</p>';
                ?>
                <?php endif;?>
               <?php endforeach; ?>
               </div>
                </div><!--End of col-sm-6-->
  </div><!--end row-->
    </div>