
<?php include_once("database.php");  
$user= $_SESSION["Customer_Email"];
if(isset($_POST["no"])){
echo "<script>alert('Your Account is still valid!')</script>";
echo "<script> window.open('customer_account.php','_self')</script>";
}

if(isset($_POST["yes"])){

    $delete_account="DELETE FROM customers WHERE Customer_Email='$user' ";
    $run_delete=mysqli_query($conn,$delete_account);

    if($run_delete){
        session_destroy();
        echo "<script>alert('We are really sorry,Your Account has been deleted succesfully!')</script>";
        echo "<script> window.open('index.php','_self')</script>";

    }

}

?>
<h2 style="text-align:center; margin-top:30px; color:blue;">Do You Want To Delete Your Account?</h2>

 <div style="text-align:center; margin-top:30px;" >

<form action="" method="post">

<input type="submit" name="yes" value="Yes I want to delete"></input>

<input type="submit" name="no" value="No I dont want to"></input>

</form>

 </div>