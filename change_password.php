 <?php include_once("settings.php");?>
 
 <h2 style="text-align:center; margin-top:30px; color:blue;">Change Your Password</h2>

 <div style="font-size:15px; margin-top:20px;">
 <h5 style="color:red; text-align:center;"><?php  change_password()  ?></h5>
 <form action="" method="post">
   <table align="center" width="540" >
   <tr>
   <td align="right"><b>Enter Current Password:</b></td>
   <td><input type="password" name="current_pass" required></input></td>
   </tr>
   <tr>
   <td align="right"><b>Enter New Password:</b></td>
   <td><input type="password" name="new_pass" required></input></td>
   </tr>
   
   <tr>
    <td align="right"><b>Enter New Password Again:</b></td>
    <td><input type="password" name="Again_pass" required></input></td>
   </tr>
   <tr align="center">
  <td colspan="9"> <input type="submit" name="change_pass" value="Change Password"required></td>
   <tr>
   </table>
   </form>
   </div>