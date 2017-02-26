<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Book Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Poppins" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/myStyle.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/addstyleadmin.css">
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
    width:30%;
    border: 1px solid black;
    margin-left: 2em;
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
            <li><a href="<?php echo site_url('book/show');?>">Show Books</a></li>
            <li class="active"><a href="<?php echo site_url('book/addBook');?>">Add Books</a></li>
            <li><a href="<?php echo site_url('book/deleteBook');?>">Delete Books</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<h1 id="welcome"> Add new book</h1>
<div class="addbook">
<FORM action="<?php echo site_url('Book/addBook'); ?>" method ="POST">
<TABLE>
<TR>
    <TD>ID</TD>
    <TD><input type="text" name ="id" placeholder ="Write your id" required =""/></TD>
</TR>
<TR>
    <TD>Book name</TD>
    <TD><input type="text" name ="bname" placeholder ="Write your book name" required =""/></TD>
</TR>
<TR>
    <TD>Price</TD>
    <TD><input type="text" name ="price" placeholder ="Write your book price" required =""/></TD>
</TR>
<TR>
    <TD>Description</TD>
    <TD><input type="text" name ="description" placeholder ="Write your book description" required =""/></TD>
</TR>
<TR>
    <TD>Image</TD>
    <TD><input type="text" name ="image" placeholder ="link img/nameOfimage.jpg" required =""/></TD>
</TR>
<TR>
    <TD></TD>
    <TD><input type="submit" name ="btnSave" value="Save" class="fg-button teal"/></TD>
</TR>
</TABLE>
</FORM>
</div>
<?php 
if(isset($test)){  //Announcement of the insert progress
    if($test)
    echo 'Data Inserted';
    else
    echo 'Somehing went wrong';
}

?>