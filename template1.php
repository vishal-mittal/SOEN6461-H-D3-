<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mysql"; // Database name 
$tbl_name="templates"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$platform=$_GET['platform']; 
$language=$_GET['language']; 
$percentage=$_GET['percentage'];
$quote=$_GET['quote'];
$benefits=$_GET['benefits']; 
$phase=$_GET['phase'];
$field=$_GET['field'];


//$platform = stripslashes($platform);
//$language = stripslashes($language);
$percentage = stripslashes($percentage);
$quote = stripslashes($quote);
$benefits = stripslashes($benefits);
$phase = stripslashes($phase);
$field = stripslashes($field);

$platform = mysql_real_escape_string($platform);
$language = mysql_real_escape_string($language);
$percentage = mysql_real_escape_string($percentage);
$quote = mysql_real_escape_string($quote);
$benefits = mysql_real_escape_string($benefits);
$phase = mysql_real_escape_string($phase);
$field = mysql_real_escape_string($field);

$last_id = mysql_insert_id();
$sql="Insert into $tbl_name(platform,language,percentage,quote,benefits,phase,field) Values('$platform','$language','$percentage','$quote','$benefits','$phase','$field')";
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
alert('Inserted Successfully');
</script>";

}
?>