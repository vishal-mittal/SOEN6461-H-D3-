<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="iq_system"; // Database name 
$tbl_name1="templates3"; // Table name 

// Connect to server and select databse.
$conn=mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$job_title=$_GET['job_title']; 
$job_period=$_GET['job_period']; 
$job_area=$_GET['job_area'];
$compare=$_GET['compare'];
$usages=$_GET['usages']; 
$location=$_GET['location'];


$job_title = stripslashes($job_title);
$job_period = stripslashes($job_period);
$job_area = stripslashes($job_area);
$compare = stripslashes($compare);
$usages = stripslashes($usages);
$location = stripslashes($location);

$job_title = mysql_real_escape_string($job_title);
$job_period = mysql_real_escape_string($job_period);
$job_area = mysql_real_escape_string($job_area);
$compare = mysql_real_escape_string($compare);
$usages = mysql_real_escape_string($usages);
$location = mysql_real_escape_string($location);

$last_id = mysql_insert_id();
$sql="Insert into $tbl_name1(job_title,job_period,job_area,compare,usages,location) Values('$job_title','$job_period','$job_area','$compare','$usages','$location')";
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