<!DOCTYPE>
<html>
 <head>
   <title>Simple Login with CodeIgniter</title>
 </head>
 <body>
 
 <?php
if (isset($_REQUEST['Login'])) {
    Login();
} ?>
   <h1>Simple Login with CodeIgniter</h1>
   <?php echo validation_errors(); ?>
<form method="get">
     <label for="username">Username:</label>
     <input type="text" size="20" id="username" name="username" required/>
     <br/>
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" name="password" required/>
     <br/>
     <input type="submit"  name="Login" value="Login"/>
   </form>
   <?php
   function Login(){
   if($_GET["username"] == 'admin' && ($_GET["password"] == 'admin')){
      redirect('book/show');
      print_r("yes");
   }
   else{
      echo('Wrong');
   }
   } ?>
 </body>
</html>
