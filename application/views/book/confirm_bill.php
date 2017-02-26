<html>
    <head>
        <title>Confirm Bill</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Poppins" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/myStyle.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/confirm.css">
  <script>$(document).ready(function () {
      // Handler for .ready() called.
      window.setTimeout(function () {
          location.href = "showBook";
      }, 10000);
  });
  </script>
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
            <li class="active"><a href="#">Shopping</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="<?php echo site_url('Book/showFeedback'); ?>">Feedback</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--End NavBar-->
    <div class="container-fluid text-center">    
    <!--Side Nav-->
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#" class="side_img"><img src="../../img/sale.jpg" width="250" height="280"></a></p>
      <p><a href="#" class="side_img"><img src="../../img/bookadv.jpg" width="250" height="280"></a></p>
      <p><a href="#" class="side_img"><img src="../../img/bookadv_1.jpg" width="250" height="280"></a></p>
    </div>
    <div class="col-sm-10">
    <!--End Side Nav-->
       <div id='result_div'>
        <img id="img_thank" src="../../img/giphy.gif" alt="thank you"/>
            <?php
            // this will show you thank you message.
            echo "<h1>Thank You! your order has been placed!</h1>";
            echo "<br>";
             function generateRandomString($length = 5) {
              $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
              $charactersLength = strlen($characters);
              $randomString = '';
              for ($i = 0; $i < $length; $i++) {
                  $randomString .= $characters[rand(0, $charactersLength - 1)];
              }
              return $randomString;
          }
            echo "<h4>Your ordercode: '" .generateRandomString() ."'</h4><br>";
            echo "<span id='go_back'><a class='fg-button teal' href=" . base_url() . "index.php/Book/showBook>Go back</a></span>";
            ?>
            <br><br><br>
            <p><i>Coming back to Shopping page in 10s</i></p>
            </div>
        </div>
    </body>
</html>
