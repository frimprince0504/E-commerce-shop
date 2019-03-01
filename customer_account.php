<?php    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <?php 
   include "header.php";

     ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<?php
      include "nav.php";
	?>
	    <header>
    
		   <?php
		   include "headerMiddle.php";
		   include "headerBottom.php";

		   ?>

           </header>


                 
                 
                 <div class="container" style=' padding:20px; border:0.2px solid #696763; font-size:17px; color:orangered; background-color: #696763; margin-top:5px;'>
                 <div class="pull-right"  style=' margin-right:50px;'>
                 <?php
                 if(isset($_SESSION["Customer_Email"])){
                 echo "<span>welcome:</span>".$_SESSION['Customer_Email'] ;
              
                 }
                 ?>
                 </div>
                 </div>

             
            <div class="container" >
               <div class="row">
                  <div class="col-sm-3">
                    	
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                <div style='font-weight:bold; padding:20px; border:0.2px solid #696763; font-size:20px; color:orangered; background-color: #696763'>
                                <li ><span></span>MY ACCOUNT</a></li>
                                </div>
                                    <div  style=''>
                                <div style=' padding:15px;  border:0.2px solid #696763;  '>
                                <li class="Acc_tins"><a href='customer_account.php?my_oders'> <span ></span>My Orders</a></li>
                                </div>
                                <div style=' padding:15px;   border:0.2px solid #696763;  '>
                                <li class="Acc_tins"><a href='customer_account.php?edit_account'> <span ></span>Edit Account</a></li>
                                </div>
                                <div style=' padding:15px;  border:0.2px solid #696763; '>
                                <li class="Acc_tins"><a href='customer_account.php?change_pass'> <span ></span>Change Password</a></li>
                                </div>
                                <div style=' padding:15px;  border:0.2px solid #696763;  '>
                                <li class="Acc_tins"><a href='customer_account.php?delete_Account'> <span></span>Delete Accounts</a></li>
                                </div>
								</div>
								</ul>
							</div>
                  </div>

                  <div  class="col-sm-7">
                      <?php

                      
                         if(!isset($_GET["my_oders"])){
                            if(!isset($_GET["edit_account"])){
                                if(!isset($_GET["change_pass"])){
                                    if(!isset($_GET["delete_Account"])){
                                              cus_name();

                                       
                                    }
                                }
                            }
                        }

                        if(isset($_GET["my_oders"])){

                        }
                            if(isset($_GET["edit_account"])){
                                include_once("edit_account.php");

                            }
                                if(isset($_GET["change_pass"])){
                                    include_once("change_password.php");
                                }
                                    if(isset($_GET["delete_Account"])){
                                      include_once("account_delete.php");
                                    }
                                     
                      ?>
                  </div>
               </div>
            </div>
        
        
          
           <div class="down">
          <?php 
          include_once("footer.php");
         ?>
	     </div>
</body>
</html>