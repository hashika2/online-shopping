<?php
session_start();
$connection = mysqli_connect('localhost','root','','testing');
if(isset($_POST["add_to_cart"])){
    if(isset($_SESSION["shopping_cart"])){
        $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
        if(!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["shopping_cart"]);
           $item_array = array(
            'item_id'        => $_GET["id"],
            'item_name'      => $_POST["hidden_name"],
            'item_price'     => $_POST["hidden_price"],
            'item_quantity'  => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo'<script>alert("Item Already Added")</script>';
            echo '<script>window.location="Cart2.php"</script>';


        }

    }
    else{
        $item_array = array(
            'item_id'        => $_GET["id"],
            'item_name'      => $_POST["hidden_name"],
            'item_price'     => $_POST["hidden_price"],
            'item_quantity'  => $_POST["quantity"]
            );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if(isset($_GET["action"])){
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="Cart2.php"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
            <title>shirts design</title>
            <link href="webcss.css" type="text/css" rel="stylesheet">
            <style>
              .prod-box{
                margin-left: 80px;
              }
            </style>
    </head>
    
    <body>
            <ul style="background: brown">
                    <img src="Ca.PNG " height="60px" width="150px">
                    <img src="Capture.PNG " height="60px" width="250px">
                    
                        <li class="active"><a href="#home">logout</a></li>
                        <li class><a href="service.html">service</a></li>
                        <li class><a href="#">partner</a></li>
                       
                      
                      <input class="input" type="text"placeholder ="search.."style="  border-radius:10px;" ><button type="submit"style="  border-radius:10px;">search</button>
                    </ul>
                <!--products-->
                    <div class="prod-container">
                                <!--first product-->
                            <div class="prod-box" >
                                    <img src="shirts/sh1.jpg" height="300px" alt="man suit">
                                    <div class="prod-trans">
                                    <div class="prod-feature">
                                        <p>man special</p>
                                        <p style="color:white ;font-weight:bold">price :100$</p>     
                                        <input type="button"value="add to cart">  
                                </div>                   
                                    </div>
                            </div>
                             <!--first product-->
                            <div class="prod-box">
                                        <img src="shirts/sh2.jpg" height="300px" alt="man suit">
                                        <div class="prod-trans">
                                         <div class="prod-feature">
                                          <p>man special</p>
                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                          <input type="button"value="add to cart">    
                                        </div>       
                                        </div>
                                </div>
                                 <!--first product-->
                             <div class="prod-box">
                                        <img src="shirts/sh3.jpg" height="300px" alt="man suit">
                                        <div class="prod-trans">
                                         <div class="prod-feature">
                                          <p>man special</p>
                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                          <input type="button"value="add to cart">    
                                        </div>       
                                        </div>
                                </div>
                                 <!--first product-->
                             <div class="prod-box">
                                                <img src="shirts/sh4.jpg" height="300px" alt="man suit">
                                                <div class="prod-trans">
                                                 <div class="prod-feature">
                                                  <p>man special</p>
                                                  <p style="color:white ;font-weight:bold">price :100$</p>      
                                                  <input type="button"value="add to cart">    
                                                </div>       
                                                </div>
                                        </div>
                                         <!--first product-->
                             <div class="prod-box">
                                                        <img src="shirts/sh5.jpg" height="300px" alt="man suit">
                                                        <div class="prod-trans">
                                                         <div class="prod-feature">
                                                          <p>man special</p>
                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                          <input type="button"value="add to cart">    
                                                        </div>       
                                                        </div>
                                                </div>
                           <div class="prod-box">
                                                                <img src="shirts/sh6.jpg" height="300px" alt="man suit">
                                                                <div class="prod-trans">
                                                                 <div class="prod-feature">
                                                                  <p>man special</p>
                                                                  <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                  <input type="button"value="add to cart">    
                                                                </div>       
                                                                </div>
                                                        </div>
                           <div class="prod-box">
                                                                        <img src="shirts/sh7.jpg" height="300px" alt="man suit">
                                                                        <div class="prod-trans">
                                                                         <div class="prod-feature">
                                                                          <p>man special</p>
                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                          <input type="button"value="add to cart">    
                                                                        </div>       
                                                                        </div>
                                                                </div>
                          <div class="prod-box">
                                                                                <img src="shirts/sh8.jpg" height="300px" alt="man suit">
                                                                                <div class="prod-trans">
                                                                                 <div class="prod-feature">
                                                                                  <p>man special</p>
                                                                                  <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                  <input type="button"value="add to cart">    
                                                                                </div>       
                                                                                </div>
                                                                        </div>
                           <div class="prod-box">
                                                                                        <img src="shirts/sh9.jpg" height="300px" alt="man suit">
                                                                                        <div class="prod-trans">
                                                                                         <div class="prod-feature">
                                                                                          <p>man special</p>
                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                          <input type="button"value="add to cart">    
                                                                                        </div>       
                                                                                        </div>
                                                                                </div>  
                                                                                <div class="prod-box">
                                                                                                <img src="shirts/sh19.jpg" height="300px" alt="man suit">
                                                                                                <div class="prod-trans">
                                                                                                 <div class="prod-feature">
                                                                                                  <p>man special</p>
                                                                                                  <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                  <input type="button"value="add to cart">    
                                                                                                </div>       
                                                                                                </div>
                                                                                        </div>
                                                                                        <div class="prod-box">
                                                                                                        <img src="shirts/sh10.jpg" height="300px" alt="man suit">
                                                                                                        <div class="prod-trans">
                                                                                                         <div class="prod-feature">
                                                                                                          <p>man special</p>
                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                          <input type="button"value="add to cart">    
                                                                                                        </div>       
                                                                                                        </div>
                                                                                                </div>
                                                                                                <div class="prod-box">
                                                                                                                <img src="shirts/sh11.jpg" height="300px" alt="man suit">
                                                                                                                <div class="prod-trans">
                                                                                                                 <div class="prod-feature">
                                                                                                                  <p>man special</p>
                                                                                                                  <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                  <input type="button"value="add to cart">    
                                                                                                                </div>       
                                                                                                                </div>
                                                                                                        </div>
                                                                                                        <div class="prod-box">
                                                                                                                        <img src="shirts/sh12.jpg" height="300px" alt="man suit">
                                                                                                                        <div class="prod-trans">
                                                                                                                         <div class="prod-feature">
                                                                                                                          <p>man special</p>
                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                        </div>       
                                                                                                                        </div>
                                                                                                                </div><div class="prod-box">
                                                                                                                                <img src="shirts/sh13.jpg" height="300px" alt="man suit">
                                                                                                                                <div class="prod-trans">
                                                                                                                                 <div class="prod-feature">
                                                                                                                                  <p>man special</p>
                                                                                                                                  <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                  <input type="button"value="add to cart">    
                                                                                                                                </div>       
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                        <div class="prod-box">
                                                                                                                                        <img src="shirts/sh14.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>  
                                                                                                                                <div class="prod-box">
                                                                                                                                        <img src="shirts/sh15.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>                           
                                                                                                                                <div class="prod-box">
                                                                                                                                        <img src="shirts/sh16.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>                           
                                                                                                                                <div class="prod-box">
                                                                                                                                        <img src="shirts/sh17.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>                           
                                                                                                                                <div class="prod-box">
                                                                                                                                        <img src="shirts/sh18.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>                           
                                                                                                                                <div class="prod-box">
                                                                                                                                        <img src="shirts/sh19.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>                           
                                                                                                                                <div class="prod-box">
                                                                                                                                        <img src="shirts/sh20.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>                           
                                                                                                                                <div class="prod-box">
                                                                                                                                        <img src="shirts/sh21.jpg" height="300px" alt="man suit">
                                                                                                                                        <div class="prod-trans">
                                                                                                                                         <div class="prod-feature">
                                                                                                                                          <p>man special</p>
                                                                                                                                          <p style="color:white ;font-weight:bold">price :100$</p>      
                                                                                                                                          <input type="button"value="add to cart">    
                                                                                                                                        </div>       
                                                                                                                                        </div>
                                                                                                                                </div>    
                                                                                                                                <div id="footer">
                                                                                                                                        <div class="container">
                                                                                                                                          <div class="footer_sub_1">
                                                                                                                                            <center>
                                                                                                                                            <h2>projects</h2>
                                                                                                                                          </center>
                                                                                                                                            <p class="p">this is my fist e commerce project.jhgdfdfjhbncvbcjhvbjvbjbv kjbvf kjvbv kjddyfhb jcbdbd hgdjhds jsbdsjf jhbdf jhbsd jbd jdbf bdd bd 
                                                                                                                                              c dd dkjf jddvb kjcxv <span><a href="#">read more..</a></span> </p>
                                                                                                                                          
                                                                                                                                            </div>
                                                                                                                                          <div class="footer_sub_2">
                                                                                                                                            <center>
                                                                                                                                              <h2>Important Links</h2>
                                                                                                                                              <ul>
                                                                                                                                                <li><a href="#">Home</a></li>
                                                                                                                                                <li><a href="#">Deals</a></li>
                                                                                                                                                <li><a href="#">products</a></li>
                                                                                                                                                <li><a href="#">Order</a></li>
                                                                                                                                              </ul>
                                                                                                                                            </center>
                                                                                                                                          </div>
                                                                                                                                          <div class="footer_sub_3">
                                                                                                                                              <center>
                                                                                                                                                  <h2>Social Links</h2>
                                                                                                                                                  <ul>
                                                                                                                                                    <li><a href="#">Facebook</a></li>
                                                                                                                                                    <li><a href="#">Google</a></li>
                                                                                                                                                    <li><a href="#">Youtube</a></li>
                                                                                                                                                    <li><a href="#">Twitter</a></li>
                                                                                                                                                    <li><a href="#">Linkedin</a></li>
                                                                                                                                                    <li><a href="#">Blogger</a></li>
                                                                                                                                                  </ul>
                                                                                                                                                </center>
                                                                                                                                          </div>
                                                                                                                                          <div class="footer_sub_4">
                                                                                                                                            <center>
                                                                                                                                            <h2>Subcribe Us</h2>
                                                                                                                                            <input type="text" name="subs" placeholder="Write your email" class="subs">
                                                                                                                                            <input type="submit" name="subs"class="sub-btn">
                                                                                                                                             <p class="p">Enter your email for get notification by us</p>
                                                                                                                                          </center>
                                                                                                                                          </div>
                                                                                                                                        </div>
                                                                                                                                      </div>                                                           
                    </div>
    </body>
</html>