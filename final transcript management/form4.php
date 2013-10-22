<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NIT TRICHY</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/logo.png"/>
<script type="text/javascript">
function display()
{
	
	
	if(document.getElementById("fee").value == "Full Transcript (first copy)")
	{
		document.getElementById("fee1").value =100;
	}
	else if(document.getElementById("fee").value == "Full Transcript (additional)")
	{
		document.getElementById("fee1").value = 20;
	}
	else if(document.getElementById("fee").value == "Partial Transcript (first copy)")
	{
		document.getElementById("fee1").value = 80;
	}
	else if(document.getElementById("fee").value == "Partial Transcript (additional)") 
	{
		document.getElementById("fee1").value = 20;
	}
}

function display1()
{  var a=parseInt(document.getElementById("no").value);
   var b=parseInt(document.getElementById("fee1").value);
  var c=a*b;
  document.getElementById("tot1").value = c ;
	}
</script>
</head>

<body>

<div class="container">
  <div class="header"> <a href="www.nitt.edu"><img src="images/logo.png"  name="Insert_logo" width="150" height="90" id="Insert_logo" style="padding-top:20px; padding-left:15px; height:110px;" /></a> 
  <h2 style="text-align:center;margin-left:50px; margin-top:-70px;">National Institute of Technology, Tiruchirappalli</h2>
 
    <!-- end .header --></div>
  <div class="content">
    <!--<h1>Instructions</h1>-->
    <center>
	<h3>Application Form For Transcript</h3>
    <form action="register.php" method="post">
    <table>
    <tr>
    <td>Name</td>
    <td><input type="text" name="name" id="name" required/></td>
    </tr>
    <tr>
    <td>Programme</td>
    <td><select id="prog" name="prog"><option>Select</option><option>B.tech</option><option>B.Arch</option><option>M.tech</option><option>MCA</option><option>MBA</option></select></td>
    </tr>
    <tr>
    <td>Roll No</td>
    <td><input type="text" name="rollno" id="rollno" required /></td>
     </tr>
      <tr>
    <td>Department</td>
    <td><input type="text" name="dept" id="dept" required /></td>
     </tr>
     <tr>
      <td>Semester</td>
    <td><select id="sem" name="sem"><option>Select</option><option>1st</option><option>2nd</option><option>3rd</option><option>4th</option><option>5th</option><option>6th</option><option>7th</option><option>8th</option></select></td>
    </tr>
    <tr>
      <td>Year</td>
    <td><select id="year" name="year"><option>Select</option><option>2008</option><option>2009</option><option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option></select></td>
    </tr>
    <tr>
    <td>Specialization (for M.Tech.)</td>
    <td><input type="text" name="spec" id="spec" /></td>
     </tr>
    <tr>
    <tr>
    <td>Transcripts</td>
    <td><select onchange="display();" id="fee" name="fee">
    	<option>Select</option>
        	<option  value="Full Transcript (first copy)">Full Transcript (first copy)</option>
            <option value="Full Transcript (additional)">Full Transcript (additional)</option>
            <option  value="Partial Transcript (first copy)">Partial Transcript (first copy)</option>
            <option value="Partial Transcript (additional)">Partial Transcript (additional)</option>
        </select>
    </td>
    </tr>
    <tr>
    <td>Fee</td>
    <td><input id="fee1"  name="fee1"/></td>
    </tr>
    <td>No. of Transcripts required</td>
    <td><input type="text" name="no" id="no" onchange="display1();" /></td>
    
     </tr>
      <tr>
    <td>Postal Address</td>
    <td><input type="text" name="add" id="add" required/></td>
     </tr>
       <tr>
         <td>Total</td>
         <td><input  id="tot1"  name="tot1"/></td>
       </tr><br />
	   <tr>
	   <td></td>
	   <td></td>
	   </tr>
       <tr>
         <td align="center" colspan="2"><input type="submit" /></td>
       </tr>
   </table>
   </form>
   
   
    </center>
    <!-- end .content -->
   </div>
  <div class="footer">
    <center><p style="color:#000040;">Copyright © 2013 Webteam@ NIT Trichy</p></center>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
