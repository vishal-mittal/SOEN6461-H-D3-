<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mysql"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$mypassword2=$_POST['mypassword2']; 
$EmailId=$_POST['EmailId']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$EmailId = stripslashes($EmailId);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$EmailId = mysql_real_escape_string($EmailId);
 $last_id = mysql_insert_id();
 if($mypassword== $mypassword2){
 $sql = "SELECT * FROM $tbl_name where UserName ='$myusername'";
$res = mysql_query($sql);
if($res && mysql_num_rows($res)>0){
 echo "<script type='text/javascript'>
alert('Username already exist');
</script>";
} else {
  $sql="Insert into $tbl_name(UserName,Password,Emailid,id) Values('$myusername','$mypassword','$EmailId','$last_id ')";
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
alert('SIGNUP Successfully');
</script>";

}
}

}
else
{
echo "<script type='text/javascript'>
alert('password does not match');
</script>";



}

?>