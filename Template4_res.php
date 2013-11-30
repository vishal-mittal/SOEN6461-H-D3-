<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="iq_system"; // Database name 
$tbl_name1="templates5"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$memorize=$_GET['memorize']; 
$assist=$_GET['assist']; 
$learnability=$_GET['learnability'];
$effectiveness=$_GET['effectiveness'];
$efficients=$_GET['efficients']; 


$memorize = stripslashes($memorize);
$assist = stripslashes($assist);
$learnability = stripslashes($learnability);
$effectiveness = stripslashes($effectiveness);
$efficients = stripslashes($efficients);


$memorize = mysql_real_escape_string($memorize);
$assist = mysql_real_escape_string($assist);
$learnability = mysql_real_escape_string($learnability);
$effectiveness = mysql_real_escape_string($effectiveness);
$efficients = mysql_real_escape_string($efficients);


$last_id = mysql_insert_id();
$sql="Insert into $tbl_name1(memorize,assist,learnability,effectiveness,efficients) Values('$memorize','$assist','$learnability','$effectiveness','$efficients')";
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