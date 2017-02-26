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

  <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Are you sure want to clear all bookings?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>index.php/Book/remove/all";
                } else {
                    return false; // cancel button
                }
            }
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
    <!--Content-->
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
    <!--Cart-->
          <div id="shopping-cart">
          <div id = "heading">
                <h2 align="center">Products on Your Shopping Cart</h2>
          </div>
                <!--Shopping cart content--> 
                <div id="text"> 
                      <?php  $cart_check = $this->cart->contents();
                      //print_r($cart_check);
                          if(empty($cart_check)) {
             echo "<h5> ----------  Nothing in cart now ---------- </h5>"; 
             }  ?> </div>
                     
                    <table align="center" id="table_shopping" border="1">
                     <?php  if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading">
                        <td>Serial</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Qty</td>
                        <td>Amount</td>
                        <td>Cancel Product</td>
                    </tr>
                      <?php echo form_open('Book/update_cart');
                      $total_price = 0;
                      $i = 1;

                      foreach($cart as $item):

                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <tr>
                            <td>
                       <?php echo $i++; ?>
                            </td>
                            <td>
                      <?php echo $item['name']; ?>
                            </td>
                            <td>
                                $ <?php echo number_format($item['price'], 2); ?>
                            </td>
                            <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                            </td>
                        <?php $total_price = $total_price + $item['subtotal']; ?>
                            <td>
                                $ <?php echo number_format($item['subtotal'], 2) ?>
                            </td>
                            <td>
                            <?php 
                            // cancle image.
                            $path = "<p>X</p>";
                            echo anchor('Book/remove/' . $item['rowid'], $path); ?>
                            
                            </td>
                     <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><b>Order Total: $<?php 
                        
                        //Grand Total.
                        echo number_format($total_price, 2); ?></b></td>
                        
                        <?php // "clear cart" button call javascript confirmation message ?>
                        <td colspan="5" align="right"><input type="button" class ='fg-button teal' value="Clear Cart" onclick="clear_cart()">
                            
                            <?php //submit button. ?>
                            <input type="submit" class ='fg-button teal' value="Update Cart">
                            <?php echo form_close(); ?>
                            
                            <!-- "Place order button" on click send "billing" controller  -->
                            <input type="button" class ='fg-button teal' value="Place Order" onclick="window.location = 'show_bill'"></td>
                    </tr>
                            <?php endif; ?>
                    </tr>

                    </table>
                    
              </div>

    <!--End Cart-->
      <div id="latest_product">
      <h2>LATEST PRODUCTS</h2>
      <h5><span class="glyphicon glyphicon-time"></span> January 27, 2017.</h5>
      <h5><span class="label label-danger">30 return days</span> <span class="label label-primary">100% origin</span></h5><br>
      <!-- The product display -->
      </div>
      <?php
      if (is_array($book) || is_object($book))
{
      foreach($book as $row){
        $id = $row['id'];
        $name = $row['bname'];
        $description = $row['description'];
        $price = $row['price'];

      ?>
      <div id='product_div'>  
          <div id='image_div'>
          <img src="<?php echo base_url() .$row['image'] ?>"/>
         </div> 
            <div id="info_product">
                <div id='name_product'><?php echo $name; ?></div>
                <div id='des_product'>  <?php echo $description; ?></div>
                <div id='price_product'><b>Price</b>:<big style="color:green">
                $<?php echo $price; ?></big>
                </div>
                
                <?php

                //Creates an opening form tag, form_hidden(): Lets you generate hidden input fields. You can either submit a name/value string to create one field
                //Then, send data values to Book/add function
                echo form_open('Book/add'); 
                echo form_hidden('productid', $id);
                echo form_hidden('bname', $name);
                echo form_hidden('price', $price);

                ?> </div> 
                
                <div id="add_button">
                  <?php
                  
                  //pass an array of attributes to the function
                    $btn = array(
                            'class' => 'fg-button teal',
                            'value' => 'Add to Cart',
                            'name' => 'action'
                    );
                    //form_submit(): generate a standard submit button
                    //form_close(): permits you to pass data to it which will be added below the tag
                    echo form_submit($btn);
                    echo form_close();
                    ?>
                </div>
            
            </div> 

              <?php } } ?>
    </div>
     
       <!--END OF SHOW PRODUCT-->   
 </div> 
</div>
</div></div>
<br>