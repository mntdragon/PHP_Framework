<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Book Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Poppins" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/myStyle.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/styleadmin.css">
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
            <li class="active"><a href="<?php echo base_url('index.php');?>">Show Books</a></li>
            <li><a href="<?php echo site_url('book/addBook');?>">Add Books</a></li>
            <li><a href="<?php echo site_url('book/deleteBook');?>">Delete Books</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <h1 id="welcome">SHOW PRODUCT</h1>
    <TABLE BORDER ="1">
    <TR>
        <TH>id</TH>
        <TH>Name</TH>
        <TH>Price</TH>
        <TH>Description</TH>
        <TH>Image</TH>
    </TR>
    <?php 
    foreach($book as $row){
        echo '<tr><td>' .$row['id'] .'</td>';
        echo '<td>' .$row['bname'] .'</td>';
        echo '<td>' .$row['price'] .'</td>';
        echo '<td>' .$row['description'] .'</td>';
        echo '<td>' .$row['image'] .'</td></tr>';
    }
    ?>
</TABLE>
<?php
//print_r($customers);
?>