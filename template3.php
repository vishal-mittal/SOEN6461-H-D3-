<!DOCTYPE HTML>
<html>

<head>
<title> simplestyle_1 </title>
<body bgcolor="LightGray">
<center> <b> <u> <i> <h2> Survey Template 3 </h2> </i> </u> </b> </center>  

<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>         

        <form name="form3" method="get" action="Template3_res.php">

          <p>
		<h4> What is your current job title? </h4>
                <input type="text" name="job_title" size="12" maxlength="12"></br>
		
          </p>
 	  <p>
		<h4> How long have you worked in development? </h4>
                <input type="text" name="job_period" size="12" maxlength="12"></br>
          	</p>
		<p>
		<h4> In which areas would you like some training? </h4>
		<input type="text" name="job_area" size="12" maxlength="12"></br>
		</p>
		<p>
		<h4> Based on your experience, how does iQ survey system compare with other survey systems?</h4>
		<input type="radio" name="compare" value="better">iQ is better</br>
		<input type="radio" name="compare" value="same">Both are same</br>
		<input type="radio" name="compare" value="worse">iQ is worse</br>
		<input type="radio" name="compare" value="unsure">Not sure</br
		</p>

		<p>
		<h4> How often do you typically use iQ survey system? </h4>
		<input type="radio" name="usages" value="daily">Daily</br>
		<input type="radio" name="usages" value="weekly">Weekly</br>
		<input type="radio" name="usages" value="less">Less than monthly</br>
		<input type="radio" name="usages" value="no_use">Do not use</br>
		<input type="radio" name="usages" value="unsure">Not sure</br>
		</p>
	
<p>
		<h4> Where do you primarily use iQ survey system? </h4>
		<input type="Checkbox" name="location" value="home">At home</br>
		<input type="Checkbox" name="location" value="office">At the office</br>
		<input type="Checkbox" name="location" value="another_location">Another location</br>
		<input type="Checkbox" name="location" value="no_use">Do not use</br>
		</p>
<center> <input type="Submit" value="Submit" name="Submit"><br /> </center>  
 </form>
      
</body>
</html>
