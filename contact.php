<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mysql"; // Database name 
$tbl_name="contactus"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['your_name']; 
$EmailId=$_POST['your_email']; 
$Enqury=$_POST['your_enquiry']; 
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$Enqury = stripslashes($Enqury);
$EmailId = stripslashes($EmailId);


$myusername = mysql_real_escape_string($myusername);
$Enqury = mysql_real_escape_string($Enqury);
$EmailId = mysql_real_escape_string($EmailId);

 $last_id = mysql_insert_id();
$sql="Insert into $tbl_name(myusername,EmailId,Enqury,id) Values('$myusername','$EmailId','$Enqury','$last_id')";
$result=mysql_query($sql,$conn);

// Mysql_num_row is counting table row


// If result matched $myusername and $mypassword, table row must be 1 row
if(!$result){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
//echo "right Username or Password";
die('cannot connect'.mysql_error());
}
else {


echo "<script type='text/javascript'>
alert('Thank you for contacting us we will contact you soon');
</script>";

}
?>