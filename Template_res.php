<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="mysql"; // Database name 
$tbl_name1="templates2"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$rating=$_GET['rating']; 
$satisfaction=$_GET['satisfaction']; 
$recommend=$_GET['recommend'];
$reason=$_GET['reason'];
$changes=$_GET['changes']; 
$comments=$_GET['comments'];


$rating = stripslashes($rating);
$satisfaction = stripslashes($satisfaction);
$recommend = stripslashes($recommend);
$reason = stripslashes($reason);
$changes = stripslashes($changes);
$comments = stripslashes($comments);

$rating = mysql_real_escape_string($rating);
$satisfaction = mysql_real_escape_string($satisfaction);
$recommend = mysql_real_escape_string($recommend);
$reason = mysql_real_escape_string($reason);
$changes = mysql_real_escape_string($changes);
$comments = mysql_real_escape_string($comments);

$last_id = mysql_insert_id();
$sql="Insert into $tbl_name1(rating,satisfaction,recommend,reason,changes,comments) Values('$rating','$satisfaction','$recommend','$reason','$changes','$comments')";
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