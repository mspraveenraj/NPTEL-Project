<?php

session_start();


if(!isset($_SESSION['loggedin']) || (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true))
	{
		header("location:index.php");
	} 
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>General</title>
<script>
function goToPage( id ) {

  var node = document.getElementById( id );
  
  // Check to see if valid node and if node is a SELECT form control
  
  if( node &&
    node.tagName == "SELECT" ) {

    // Go to web page defined by the VALUE attribute of the OPTION element

    window.location.href = node.options[node.selectedIndex].value;
    
  } // endif
  
  
}
</script>
<style>
#select1
{
	
	
	color:rgb(0,0,0);
	font-family:"Times New Roman", Times, serif;
	width:100px;
	
	cursor:pointer;
	font-weight:bold;
	
	

}
#select2
{
	
	
	color:rgb(0,0,0);
	font-family:"Times New Roman", Times, serif;
	width:100px;
	
	cursor:pointer;
	font-weight:bold;
	
	

}
#select3
{
	
	
	color:rgb(0,0,0);
	font-family:"Times New Roman", Times, serif;
	width:100px;
	
	cursor:pointer;
	font-weight:bold;
	
}
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}



#type1
{
	
	
	color:rgb(0,0,0);
	font-family:"Times New Roman", Times, serif;
	width:100px;
	
	cursor:pointer;
	font-weight:bold;
	
	
	
	

}

#type1:hover
{
	color:#036;

}

#courselink
{
	text-decoration:none;
	margin-right:15px;
	font-size:18px;
	color:#03C;
	font-weight:bold;
	float:right;
}
#courselink:hover
{
	color:#F00;
}


#top
{
	height:60px;
	background-color:#FFF;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>

</head>

<body>

<div> 
  <div id="left" style="float: left">
<img src="images/new.png"></div>
  <div id="right" style="float: right">
  
<a href="logout.php" class="button">Logout</a>
</div>
<br></br>

</div><br></br><br></br>

<table width="100%">
	<tr style="text-align:center;">
		<th>subjectId</th>
		<th>Discipline Name</th>
		<th>Subject Name</th>
<th>Coordinators</th>
<th>Type</th>
<th>Institute</th>
<th>Content</th>
	</tr>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>121106003</strong></td>
	<td><strong>General</strong></td>
	<td><strong>Ayurvedic Inheritance of India</strong></td>
	<td><strong>Dr M. S. Valiathan</strong></td>

	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    
    <option  value="#">Select </option>
      
      <option  value="121106003/mod01lec01.mp4">Roots of Ayurveda</option>
      
      <option  value="121106003/mod01lec02.mp4">Traditional Medicine in Buddhist India</option>
      
      <option  value="121106003/mod01lec03.mp4">Period of Systematization</option>
      
      <option  value="121106003/mod01lec04.mp4">Philosophical ideas in Ayurveda</option>
      
      <option  value="121106003/mod01lec05.mp4">Human Body in Health</option>

      
      <option  value="121106003/mod01lec06.mp4">Human Body in Disease</option>
      
      <option  value="121106003/mod01lec07.mp4">Food and Drinks</option>
      
      <option  value="121106003/mod01lec08.mp4">Code for Healthy Living</option>
      
      <option  value="121106003/mod01lec09.mp4">Diseases</option>
      
      <option  value="121106003/mod01lec10.mp4">Diagnosis and Prognosis</option>
      
      <option  value="121106003/mod01lec11.mp4">Medical Treatment of Diseases</option>

      
      <option  value="121106003/mod01lec12.mp4">Materia Medica</option>
      
      <option  value="121106003/mod01lec13.mp4">Surgical Treatment of Diseases</option>
      
      <option  value="121106003/mod01lec14.mp4">Surgical Instruments</option>
      
      <option  value="121106003/mod01lec15.mp4">Treatment of fractures; some surgical procedures</option>
      
      <option  value="121106003/mod01lec16.mp4">Principles and methods of rejuvenation: enhancement of sexual potency and fertility</option>
      
      <option  value="121106003/mod01lec17.mp4">Selection of Students: Oath at initiation: Process of Training</option>

      
      <option  value="121106003/mod01lec18.mp4">A Science Initiative in Ayurveda (ASIIA) </option>
      
      <option  value="121106003/mod01lec19.mp4">Ayurvedic Biology: Illustrative Studies</option>
      
      <option  value="121106003/mod01lec20.mp4">Conclusion: An Ayurvedic View of Life</option>
          </select></td>
	
	</tr>
	</form>
</table>
   
    </div>
	
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    
$(window).unload(function()){
    $.ajax({
        type: 'POST',
        url: 'logout.php',
        async:false,
        data: {key_leave:"289583002"}
    });
});	
</script>

</body>
</html>
