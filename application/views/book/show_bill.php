<?php
$total_price = 0;

//Cal total price of orders
if($cart = $this->cart->contents()):
    foreach ($cart as $order):
        $total_price = $total_price + $order['subtotal'];
    endforeach;
endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show_Bill</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Poppins" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>CSS/show_bill_style.css">
  <style>
/*CSS*/
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
      <p><a href="#">Link 1</a></p>
      <p><a href="#">Link 2</a></p>
      <p><a href="#">Link 3</a></p>
    </div>
    <!--End Side Nav-->
    <div class="col-sm-10 text-center"> 
      <h1 id="welcome">WELCOME TO BOOKBUY</h1><hr>
      <h5 id="quote"><small><i>“There is no friend as loyal as a book.”</i></small></h5><hr>

  <!--                      BILL CONTENT VIEW                -->
    <div id="bill_content">
            <!-- // Create form for fiil customer info, then send data 'Book/save_order' function? -->
           
            <form name="billing" method="post" action="<?php echo base_url() . 'index.php/Book/save_order' ?>" >
                <input type="hidden" name="command" />
                <div align="center">
                    <h3 id="bill_heading" align="center">Bill detail</h3>
                    <table border="0" cellpadding="2px">
                        <tr><td>Order Total:</td><td><strong>$<?php echo number_format($total_price, 2); ?></strong></td></tr>
                        <tr><td>Your Name:</td><td><input type="text" name="name" required/></td></tr>
                        <tr><td>Address:</td><td><input type="text" name="address" required /></td></tr>
                        <tr><td>Email:</td><td><input type="text" name="email"  required/></td></tr>
                        <tr><td>Phone:</td><td><input type="text" name="phone" placeholder="10 Digit Mobile No." required /></td></tr>
                        <tr><td><?php
                        // This button for redirect main page.
                        echo "<a class ='fg-button teal' id='back' href=" . base_url() . "index.php/Book/showBook>Back</a>";  ?>
                            </td><td><input type="submit" class ='fg-button teal' value="Place Order" /></td></tr> 
                    
                    </table>
                </div>
            </form>
        </div><!--End of bill_content id-->
    </div>  <!--End of col-sm-10-->
  </div>  <!--End of row content-->
</div><!--End of container div-->  
  