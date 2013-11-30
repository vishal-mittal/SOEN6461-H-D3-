<!DOCTYPE HTML>
<html>

<head>
<title> simplestyle_1 </title>
<body bgcolor="LightGray">
<center> <b> <u> <i> <h2> Survey Template 1 </h2> </i> </u> </b> </center>  

  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>         

        <form name="form1" method="get" action="template1.php">
          <p>
		<h4> Which platform do you prefer? </h4>
                <input type="radio" name="platform" value="windows">Windows</br>
		<input type="radio" name="platform" value="Mac">Mac</br>
          </p>
 	  <p>
		<h4> Which language do you prefer? </h4>
                <input type="radio" name="language" value="java">Java</br>
		<input type="radio" name="language" value="c#">C#
          </p>
<p>
		<h4> In what percent of the projects do you plan to Deploy Open Source technology? </h4>
		<input type="text" name="percentage" size="12" maxlength="12">
</p>
<p>
<h4> If you planning to Deploy an project in  open source  technology what drove your decision? </h4>
<input type="textarea" rows="5" cols = "20" name="quote"> </textarea>
</p>

<p>
<h4> In what way has the Deployment in open source benefited to Software Developing organization? </h4>
<input type="textarea" rows="5" cols = "20" name="benefits"> </textarea>
</p>		
<p>
<h4> Which  Development Phase for the  open source is easiest for you? </h4>
<input type="text" name="phase" size="12" maxlength="12">
</p>      

<p>
<h4>From your point of view in which field most of the development occur using open source technology?</h4>
<input type="text" name="field" size="12" maxlength="12">
</p> 
<center> <input type="Submit" value="Submit" name="Submit"><br /> </center>  
 </form>
      
</body>
</html>
