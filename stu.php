<?php
    include("connect.php");
		
	  if(isset($_REQUEST['b1'])
			
			)
		{
	mysql_query(" insert into student set
					name = '".$_REQUEST['q1']."',
                    rtuno = '".$_REQUEST['q2']."',
					enrollmentno = '".$_REQUEST['q3']."',
					classno = '".$_REQUEST['q4']."',
					branch = '".$_REQUEST['q5']."',
					mobileno = '".$_REQUEST['q6']."',
					emailid = '".$_REQUEST['q7']."',
					dob = '".$_REQUEST['q8']."',
					tenper = '".$_REQUEST['q9']."',
					tenboard = '".$_REQUEST['q10']."',
					tenyear = '".$_REQUEST['q11']."',
					twelper = '".$_REQUEST['q12']."',
					twelboard = '".$_REQUEST['q13']."',
					twelyear = '".$_REQUEST['q14']."',
					category = '".$_REQUEST['q15']."',
					city = '".$_REQUEST['q16']."',
					state = '".$_REQUEST['q17']."',
					caddress = '".$_REQUEST['q18']."',
					paddress = '".$_REQUEST['q19']."',
					fname = '".$_REQUEST['q20']."',
					fmobileno = '".$_REQUEST['q21']."',
					forganisation = '".$_REQUEST['q22']."',
					foccupation = '".$_REQUEST['q23']."',
					mname = '".$_REQUEST['q24']."',
					moccupation = '".$_REQUEST['q25']."',
					mmobilno = '".$_REQUEST['q26']."',
					btech1 = '".$_REQUEST['q27']."',
					btech2 = '".$_REQUEST['q28']."',
					btech3 = '".$_REQUEST['q29']."',
					btech4 = '".$_REQUEST['q30']."',
					btech5 = '".$_REQUEST['q31']."',
					btech6 = '".$_REQUEST['q32']."',
					btech7 = '".$_REQUEST['q33']."',
					btecheight = '".$_REQUEST['q34']."',
					attenfirst = '".$_REQUEST['q35']."',
					attensecond = '".$_REQUEST['q36']."',
					attenthird = '".$_REQUEST['q37']."',
					attenfourth = '".$_REQUEST['q38']."',
					attenfifth = '".$_REQUEST['q39']."',
					attensix = '".$_REQUEST['q40']."',
					attenseven = '".$_REQUEST['q41']."',
					atteneight = '".$_REQUEST['q42']."',
					semindustrialtrainig ='".$_REQUEST['q43']."',
					courseindustrialtraing ='".$_REQUEST['q44']."',
					attendenceindustrial ='".$_REQUEST['q45']."',
					secondstr ='".$_REQUEST['q46']."',
					secondctr ='".$_REQUEST['q47']."',
					secondatt ='".$_REQUEST['q48']."',
					thirdstr ='".$_REQUEST['q49']."',
					thirdctr ='".$_REQUEST['q50']."',
					thirdatt ='".$_REQUEST['q51']."',
					fourthstr ='".$_REQUEST['q52']."',
					fourthctr ='".$_REQUEST['q53']."',
					fourthatt ='".$_REQUEST['q54']."',
					fifthstr ='".$_REQUEST['q55']."',
					fifthctr ='".$_REQUEST['q56']."',
					fifthatt ='".$_REQUEST['q57']."', 
					sixstr ='".$_REQUEST['q58']."',
					sixctr ='".$_REQUEST['q59']."',
					sixatt ='".$_REQUEST['q60']."',
					firstdsem ='".$_REQUEST['q61']."', 
					firstdcourse ='".$_REQUEST['q62']."', 
					seconddsem ='".$_REQUEST['q63']."', 
					seconddcourse ='".$_REQUEST['q64']."', 
					thirddsem ='".$_REQUEST['q65']."', 
					thirddcourse ='".$_REQUEST['q66']."', 
					fourthdsem ='".$_REQUEST['q67']."', 
					fourthdcourse ='".$_REQUEST['q68']."', 
					fifthdsem ='".$_REQUEST['q69']."', 
					fifthdcourse ='".$_REQUEST['q70']."', 
					gatepar = '".$_REQUEST['q71']."',
					gateadmit = '".$_REQUEST['q72']."',
					gatescore = '".$_REQUEST['q73']."',
					placementcompany = '".$_REQUEST['q74']."',
					companypackage = '".$_REQUEST['q75']."'	,
					photo='".$_REQUEST['q76']."'				
					");	
	$id =  mysql_insert_id();   // Return ROW ID	
		if(isset($id)  && $id!=0)
			{
				echo "Your data has been saved";	
			}else{
			echo "Duplicate Record Found, TRY AGAIN";	
			}		
		}
?>
<!DOCTYPE html>

<html>
<head>
 <link rel="shortcut icon" href="images/images.jpg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/images.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
<title>Arya College of Engineering & I.T</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}


fieldset {
  background-color: #eeeeee;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
fieldset {
	border:1px solid #999;
	border-radius:8px;
	box-shadow:0 0 10px #999;
}
fieldset {
  font-size:12px;
  padding:10px;
  width:1000px;
  line-height:1.8;} 
  @media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
} 
</style>
</head>
<body>
<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">
					<img src="images/images.jpg" alt="" width="100" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="stu.php">Student Form</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="log.php">Login</a></li>

					</ul>				
				</div>
			</div>
		</nav>
	</header><br>

<form method="post" name="frm2" action="?">

<br><br><br><br><table align="center" border="1" bordercolordark="#CCCCCC" bgcolor="#CCCCCC">
<tbody><tr>
<th bgcolor="#0066FF" colspan="10" align="center">Student Detail</th> </tr>
<tr><td width="358">Name</td>
<td width="300"><label>
      <input type="text" name="q1">
      <span class="style15"></span></label></td></tr>
<tr>   <td width="358">RTU roll no.</td>
   <td width="382"><label>
      <input type="text" name="q2">
      <span class="style15"></span></label></td></tr>
 	<tr><td width="358">Enrollment No.</td>
	<td width="382"><label>
      <input type="text" name="q3">
      <span class="style15"></span></label></td></tr>
	<tr><td width="358">Class Roll No.</td>
	<td width="382"><label>
      <input type="text" name="q4">
      <span class="style15"></span></label></td></tr>
<tr>
<td width="358">Branch</td>
<td width="382">
<select id="Branch" name="q5">
  				  <option value="yes">Select</option>
				  <option value="CSE">CSE</option>
				  <option value="IT">IT</option>
				  <option value="ME">ME</option>
				  <option value="ECE">EE</option>
				  <option value="ECE">ECE</option>
				  <option value="ECE">CE</option>
				  <option value="ECE">CH</option>
	</select></td></tr>
<tr>	<td width="358">Mobile No.</td>
	<td width="382"><label>
      <input type="text" name="q6">
      <span class="style15"></span></label></td></tr>
	<tr><td width="358">Email id</td>
	<td width="382"><label>
      <input type="text" name="q7">
      <span class="style15"></span></label></td></tr>
<tr>	<td width="358">DOB</td>
	<td width="382"><label>  
  <input type="date" id="birthday" name="q8">
  </label></td>
	</tr>
	<tr>
	<th bgcolor="#0033FF" colspan="10" align="left">Education Detail</th> </tr>
<tr>
<td width="358">10%</td>
<td width="382"><label>
      <input type="text" name="q9">
      <span class="style15"></span></label></td></tr>
<tr>	<td width="358"> Board name</td>
	<td width="382">
	<select id="Branch" name="q10">
  				  <option value="yes">Select</option>
				  <option value="rbse">RBSE</option>
				  <option value="cbse">CBSE</option>
      </select></td></tr><br>
	<tr><td width="358">Passing Year</td>
	<td width="382">
				  	<select id="year" name="q11">
   				  <option value="yes">Select</option>
				    <option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="1996">2023</option>
					<option value="1997">2024</option>
					<option value="1998">2025</option>
					<option value="1999">2026</option>
					<option value="2000">2027</option>
					<option value="2001">2028</option>
					<option value="2002">2029</option>
					<option value="2003">2030</option>
					<option value="2004">2031</option>
					<option value="2005">2032</option>
					<option value="2006">2033</option>
					<option value="2007">2034</option>
					<option value="2008">2035</option>
					<option value="2009">2036</option>
					<option value="2010">2037</option>
					<option value="2011">2038</option>
					<option value="2012">2039</option>
					<option value="2013">2040</option>
      </select></td>
	</tr>
	<tr>
<td width="358"> 12%</td>
<td width="382"><label>
      <input type="text" name="q12">
      <span class="style15"></span></label></td></tr>
<tr><td width="358"> Board name</td>
<td width="382">
	<select id="Branch" name="q13">
	  				  <option value="yes">Select</option>
				  <option value="rbse">RBSE</option>
				  <option value="cbse">CBSE</option>
      </select></td></tr>
<tr><td width="358">Passing Year</td>
<td width="382">
				  	<select id="year" name="q14">
				    <option value="select">Select</option>
				    <option value="1996">1996</option>
					<option value="1997">1997</option>
					<option value="1998">1998</option>
					<option value="1999">1999</option>
					<option value="2000">2000</option>
					<option value="2001">2001</option>
					<option value="2002">2002</option>
					<option value="2003">2003</option>
					<option value="2004">2004</option>
					<option value="2005">2005</option>
					<option value="2006">2006</option>
					<option value="2007">2007</option>
					<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
					<option value="1996">2023</option>
					<option value="1997">2024</option>
					<option value="1998">2025</option>
					<option value="1999">2026</option>
					<option value="2000">2027</option>
					<option value="2001">2028</option>
					<option value="2002">2029</option>
					<option value="2003">2030</option>
					<option value="2004">2031</option>
					<option value="2005">2032</option>
					<option value="2006">2033</option>
					<option value="2007">2034</option>
					<option value="2008">2035</option>
					<option value="2009">2036</option>
					<option value="2010">2037</option>
					<option value="2011">2038</option>
					<option value="2012">2039</option>
					<option value="2013">2040</option>
      </select></td></tr>
<tr><td width="358">Category</td>
<td width="382"><label>
                  <select id="cat" name="q15">
				  <option value="gen">Select</option>
				  <option value="gen">GEN</option>
				  <option value="obc">OBC</option>
				  <option value="sc">SC</option>
				  <option value="st">ST</option>
	  <option value="gen">Others</option></select></label></td></tr>
<tr><td width="358"> City</td>
<td width="382"><label>
      <input type="text" name="q16">
      <span class="style15"></span></label></td></tr>
<tr><td width="358">State</td>
<td width="382">
                  <select id="State" name="q17">
				  <option value="gen">Select</option>
				  <option value="gen">Andman Nicobar</option>
				  <option value="obc">Andhra Pradesh</option>
				  <option value="sc">Arunachal Pradesh</option>
				  <option value="st">Assam</option>
				  <option value="gen">Bihar</option>
				  <option value="obc">Chandigarh</option>
				  <option value="sc">Chattisgarh</option>
				  <option value="st">Delhi</option>
				  <option value="st">Goa</option>
				  <option value="st">Gujarat</option>
				  <option value="st">Haryana</option>
				  <option value="st">Himachal Pradesh</option>
				  <option value="st">Jammu Kashmir</option>
				  <option value="st">Jharkand</option>
				  <option value="st">Karnataka</option>
				  <option value="st">Madhya Pradesh</option>
				  <option value="st">Maharastra</option>
				  <option value="st">Manipur</option>
				  <option value="st">Meghalaya</option>
				  <option value="st">Mizoram </option>
				  <option value="st">Nagaland</option>
				  <option value="st">Orissa</option>
				  <option value="st">Puducherry</option>
				  <option value="st">Punjab</option>
				  <option value="st">Rajasthan</option>
				  <option value="st">Sikkim</option>
				  <option value="st">Tamil Nadu</option>
				  <option value="st">Telangna</option>
				  <option value="st">Tripura</option>
				  <option value="st">Uttar Pradesh</option>
				  <option value="st">Utrakhand</option>
				  <option value="st">West bengal</option>
				  <option value="st">Others</option>
				  </select>	  
</td></tr>
<tr>
<td width="358">Correspondence Address</td>
<td width="382"><label>
      <input type="text" name="q18">
      <span class="style15"></span></label></td></tr>
<tr><td width="358">Permanent Address</td>
<td width="382"><label>
      <input type="text" name="q19">
      <span class="style15"></span></label></td></tr>
<tr>
<th bgcolor="#0033FF" colspan="10" align="left">Parent's Detail</th> </tr>
<tr>
<td width="358">Father's Name</td>
<td width="382"><label>
      <input type="text" name="q20">
      <span class="style15"></span></label></td></tr>
<tr><td width="358">Father's Occupation</td>
<td width="382"><label>
      <input type="text" name="q21">
      <span class="style15"></span></label></td></tr>
<tr><td width="358">Father's Organization</td>
<td width="382"><label>
      <input type="text" name="q22">
      <span class="style15"></span></label></td></tr>
<tr><td width="358">Father's Mobile no.</td>
<td width="382"><label>
      <input type="text" name="q23">
      <span class="style15"></span></label></td>
    </tr>
<tr>
<td width="358">Mother's Name</td>
<td width="382"><label>
      <input type="text" name="q24">
      <span class="style15"></span></label></td></tr>
<tr><td width="358"> Mother's Occupation</td>
<td width="382"><label>
      <input type="text" name="q25">
      <span class="style15"></span></label></td></tr>
<tr><td width="358">Mother's Mobile no.</td>
<td width="382"><label>
      <input type="text" name="q26">
      <span class="style15"></span></label></td>
</tr>
<tr>
<th bgcolor="#0033FF" colspan="10" align="left">B.Tech %</th> </tr>
<tr> <td>I Sem</td>
	<td width="382"><label>
      <input type="text" name="q27">
      <span class="style15"></span></label></td></tr>
<tr>    <td>II SEm</td>
	<td width="382"><label>
      <input type="text" name="q28">
      <span class="style15"></span></label></td></tr>
    <tr><td>III Sem</td>
	<td width="382"><label>
      <input type="text" name="q29">
      <span class="style15"></span></label></td></tr>
<tr>	<td>Iv Sem</td>
	<td width="382"><label>
      <input type="text" name="q30">
      <span class="style15"></span></label></td>
  </tr>
  <tr>
    <td>V Sem</td>
	<td width="382"><label>
      <input type="text" name="q31">
      <span class="style15"></span></label></td></tr>
<tr>    <td>VI Sem</td>
	<td width="382"><label>
      <input type="text" name="q32">
      <span class="style15"></span></label></td></tr>
<tr>    <td>VII Sem</td>
	<td width="382"><label>
      <input type="text" name="q33">
      <span class="style15"></span></label></td></tr>
<tr>	<td>VIII Sem</td>
	<td width="382"><label>
      <input type="text" name="q34">
      <span class="style15"></span></label></td></tr>
<tr>
<th bgcolor="#0033FF" colspan="10" align="left">Aggregate Attendance %</th> </tr>
<tr><td>I Sem</td>
	<td width="382"><label>
      <input type="text" name="q35">
      <span class="style15"></span></label></td></tr>
<tr>    <td>II SEm</td>
	<td width="382"><label>
      <input type="text" name="q36">
      <span class="style15"></span></label></td></tr>
<tr>    <td>III Sem</td>
	<td width="382"><label>
      <input type="text" name="q37">
      <span class="style15"></span></label></td></tr>
<tr>	<td>Iv Sem</td>
	<td width="382"><label>
      <input type="text" name="q38">
      <span class="style15"></span></label></td>
  </tr>
  <tr>
    <td>V Sem</td>
	<td width="382"><label>
      <input type="text" name="q39">
      <span class="style15"></span></label></td></tr>
<tr>    <td>VI Sem</td>
	<td width="382"><label>
      <input type="text" name="q40">
      <span class="style15"></span></label></td></tr>
    <tr><td>VII Sem</td>
	<td width="382"><label>
      <input type="text" name="q41">
      <span class="style15"></span></label></td></tr>
<tr>	<td>VIII Sem</td>
	<td width="382"><label>
      <input type="text" name="q42">
      <span class="style15"></span></label></td></tr>
	  <tr>
	<th bgcolor="#0033FF" colspan="10" align="left">Add on Courses &amp; Training</th> </tr>	 
<tr>
<td width="358">Semester</td>
<td width="382">
                  <select id="sem1" name="q43">
				  <option value="I">Select</option>
				  <option value="I"></option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	              <option value="VIII">VIII</option>
				  <option value="I">None</option>

	  </select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q44">
      <span class="style15"></span></label></td></tr>
<tr>
<td width="358">Attendance(%)</td>
	<td width="382"><label>
      <input type="text" name="q45">
      <span class="style15"></span></label></td></tr>
	  <tr>
<td width="358">Semester</td>
<td width="382">
                  <select id="sem2" name="q46">
				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q47">
      <span class="style15"></span></label></td></tr>
<tr>
<td width="358">Attendance(%)</td>
	<td width="382"><label>
      <input type="text" name="q48">
      <span class="style15"></span></label></td></tr>
	  <tr>
<td width="358">Semester</td>
<td width="382">
                  <select id="sem3" name="q49">
				   <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q50">
      <span class="style15"></span></label></td></tr>
<tr>
<td width="358">Attendance(%)</td>
	<td width="382"><label>
      <input type="text" name="q51">
      <span class="style15"></span></label></td></tr>
	<tr>
<td width="358">Semester</td>
<td width="382">
                  <select id="sem4" name="q52">
				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q53">
      <span class="style15"></span></label></td></tr>
<tr>
<td width="358">Attendance(%)</td>
	<td width="382"><label>
      <input type="text" name="q54">
      <span class="style15"></span></label></td></tr>
	  <tr>
<td width="358">Semester</td>
<td width="382">
                  <select id="sem"5 name="q55">
  				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q56">
      <span class="style15"></span></label></td></tr>
<tr>
<td width="358">Attendance(%)</td>
	<td width="382"><label>
      <input type="text" name="q57">
      <span class="style15"></span></label></td></tr>
	  <tr>
<td width="358">Semester</td>
<td width="382">
                  <select id="sem6" name="q58">
  				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q59">
      <span class="style15"></span></label></td></tr>
<tr>
<td width="358">Attendance(%)</td>
	<td width="382"><label>
      <input type="text" name="q60">
      <span class="style15"></span></label></td></tr>
	  <tr>
<th bgcolor="#0033FF" colspan="10" align="left">Extracurriculam Activities</th> </tr>	 
<tr>
<td width="358">Semester</div></td>
<td width="382">
                  <select id="se1" name="q61">
  				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q62">
      <span class="style15"></span></label></td>
    </tr>
	<tr>
<td width="358">Semester</div></td>
<td width="382">
                  <select id="se2" name="q63">
				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q64">
      <span class="style15"></span></label></td>
    </tr>
	<tr>
<td width="358">Semester</div></td>
<td width="382">
                  <select id="se3" name="q65">
  				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q66">
      <span class="style15"></span></label></td>
    </tr>
	<tr>
<td width="358">Semester</div></td>
<td width="382">
                  <select id="se4" name="q67">
  				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  <option value="VIII">VIII</option>
	  				  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q68">
      <span class="style15"></span></label></td>
    </tr>
	<tr>
<td width="358">Semester</div></td>
<td width="382">
                  <select id="se5" name="q69">
  				  <option value="I">Select</option>
				  <option value="I">I</option>
				  <option value="II">II</option>
				  <option value="III">III</option>
				  <option value="IV">IV</option>
				  <option value="V">V</option>
				  <option value="VI">VI</option>
				  <option value="VII">VII</option>
	  			  <option value="VIII">VIII</option>
	  			  <option value="I">None</option>
</select></td></tr>
<tr><td>Course Name</td>
	<td width="382"><label>
      <input type="text" name="q70">
      <span class="style15"></span></label></td>
    </tr>
<tr>
<th bgcolor="#0033FF" colspan="10" align="left">Gate Detail</th> </tr>	 
<tr>
<td width="358">Gate Participate</td>
<td width="382">
				  <select id="semester" name="q71">
  				  <option value="yes">Select</option>
				  <option value="yes">Yes</option>
	  <option value="no">No</option></select></td></tr>
<tr><td width="358">Gate Admit card</td>
<td width="382">
                <select id="semester" name="q72">
	  			<option value="yes">Select</option>
				<option value="yes">Yes</option>
      <option value="no">No</option></select></td></tr>
<tr><td width="358">Gate Score</td>
<td width="382"><label>
      <input type="text" name="q73"></label></td></tr>
<tr>
      <span class="style15"></span>
<th bgcolor="#0033FF" colspan="10" align="left">Placement Detail</th> </tr>	 
<tr><td width="358">Company Name</td>
<td width="382"><label>
      <input type="text" name="q74">
      <span class="style15"></span></label></td></tr>
<tr><td width="358">Package</td>
<td width="382"><label>
      <input type="text" name="q75">
      <span class="style15"></span></label></td></tr>
  <tr>
<th bgcolor="#0033FF" colspan="10" align="left">Upload Photo</th> </tr>	 
<tr><td><input type="file" id="myfile" name="q76"></td><td>
</td></tr>
<tr>
    <td height="50" colspan="2"><div align="center"><strong>
      <label>
      <input type="submit" id="button" name="b1" value="Submit" align="middle">
	 
      </label>
    </strong></div></td>
  </tr>
 </table>
</form>
<br>
 <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
							<p>Arya College of Engineering & I.T. (ACEIT), Kukas, Jaipur Established in Year 2000 is among the foremost of institutes of national significance in higher technical education and AICTE, New Delhi Approved and Affiliated with Rajasthan Technical University, Kota in Rajasthan. It is commonly Known as “ARYA 1st OLD CAMPUS” and “ARYA 1st”. The Institute ranks amongst the best technological institutions in the State and has contributed to all sectors of technical & professional development. It has also been considered a leading light in the area of education and research.</p>
                        </div>
                       
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>						
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="stu.php">Student Form</a></li>
						<li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="reg.php">Registration</a></li>
						<li class="nav-item"><a class="nav-link" href="logn.php">Login</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                            <li>+61 3 8376 6284</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">                   
                    <p class="footer-company-name">Copyright &copy; 2022 Arya College of Engineering & I.T. All rights reserved.</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
  <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/timeline.min.js"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>