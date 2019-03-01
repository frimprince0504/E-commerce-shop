
<?php 
include_once("settings.php");
if(isset($_POST["update_account"])){
    $cus_id=$_GET["c_id"];

    $fname=$_POST["fname"];
    $lname=$_POST["surname"];
    $phone=$_POST["phone"];
    $cEmail=$_POST["email"];
    $city=$_POST["city"];
    $address=$_POST["address"];
    $pass=$_POST["pass"];


    $update_cus="UPDATE customers SET fname='$fname', lastName='$lname', Customer_Email='$cEmail', city=' $city', customer_address='$address', Phone_num='$phone',pass='$pass' WHERE customer_id=' $cus_id'  ";
    $run_update=mysqli_query($conn,$update_cus);
    if($run_update){
      echo "<script>alert('Your Account have been updated successfullly')</script>";
     
    }

    

  }

$query ="SELECT * FROM customers";
$stmt=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($stmt)){
    $customer_id=$row["customer_id"];
    $fistName=$row["fname"];
    $LastName=$row["lastName"];
    $Email=$row["Customer_Email"];
    $city=$row["city"];
    $Customer_address=$row["customer_address"];
    $contact=$row["Phone_num"];
    $pass=$row["pass"];
}
?>


<form  action="customer_account.php?c_id=<?php echo $customer_id;?>" method="post"   id="js-form">
   
   <h3 style="margin-top:-10px; color:blue;">Edit Your Account Details<span style="color:orangered; font-size:20px;" class="	glyphicon glyphicon-hand-down"></span></h3>
    
<div class="name">
<input type="text" name="fname" value="<?php echo $fistName;    ?>" placeholder="First Name*" required/>
<input type="text" name="surname" value="<?php echo $LastName;  ?>" placeholder="Last Name*" required/>
<input type="number" name="phone" value="<?php echo $contact;    ?>" placeholder="phone number*" required/>
<input type="mail" name="email" value="<?php echo $Email;    ?>" placeholder="Email*"/>
<input type="text" name="city" value="<?php echo $city;    ?>" placeholder="City*" required/>
<input type="textarea" name="address" value="<?php echo  $Customer_address;    ?>" placeholder="address*" required/>
<input type="password" name="pass"  value="<?php echo $pass;    ?>" placeholder="password*" required/>
</div>




<div class="submit">
<input type="submit" name="update_account" value="Update Account" />
</div>

</form>                          