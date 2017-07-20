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
<title>Mining</title>
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
	<td><strong>123105001</strong></td>
	<td><strong>Mining Engineering</strong></td>
	<td><strong>Fundamentals of Environmental Pollution and Control</strong></td>
	<td><strong>Prof. J. Bhattacharyya</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="123105001/lec01.mp4">State of the Environment</option>
      
      <option  value="123105001/lec02.mp4">Environmental Movement</option>
      
      <option  value="123105001/lec03.mp4">Definitions of Environmental Terms</option>
      
      <option  value="123105001/lec04.mp4">Water Pollutants</option>
      
      <option  value="123105001/lec05.mp4">Water Pollutants (Contd...)</option>
      
      <option  value="123105001/lec06.mp4">Water Pollution Modelling-Surface Water</option>
      
      <option  value="123105001/lec07.mp4">Water Pollution Modelling-Surface Water(Contd...)</option>
      
      <option  value="123105001/lec08.mp4">BOD Modelling Part-1</option>
      
      <option  value="123105001/lec09.mp4">BOD Modelling Part-2</option>
      
      <option  value="123105001/lec10.mp4">Oxygen Demanding Waste in Streams Part-1</option>
      
      <option  value="123105001/lec11.mp4">Oxygen Demanding Waste in Streams Part-2</option>
      
      <option  value="123105001/lec12.mp4">Ground Water and its Contamination</option>
      
      <option  value="123105001/lec13.mp4">Ground Water and its Contamination (Contd...)</option>
      
      <option  value="123105001/lec14.mp4">Ground Water and its Contamination (Contd...)</option>
      
      <option  value="123105001/lec15.mp4">Waste Water Treatment</option>
      
      <option  value="123105001/lec16.mp4">Wastewater Treatment (Contd...)</option>
      
      <option  value="123105001/lec17.mp4">Wastewater Treatment (Contd...)</option>
      
      <option  value="123105001/lec18.mp4">Chemical Treatment</option>
      
      <option  value="123105001/lec19.mp4">Wetland Treatment and Bio-Technology Applications</option>
      
      <option  value="123105001/lec20.mp4">Introduction to Soil</option>
      
      <option  value="123105001/lec21.mp4">Parameters to Soil for Vegetative Growth</option>
      
      <option  value="123105001/lec22.mp4">Parameters to Soil for Vegetative Growth (contd...)</option>
      
      <option  value="123105001/lec23.mp4">Soil Acidity</option>
      
      <option  value="123105001/lec24.mp4">Soil Erosion</option>
      
      <option  value="123105001/lec25.mp4">Mechanical Soil Erosion Control</option>
      
      <option  value="123105001/lec26.mp4">Soil Erosion Prediction</option>
      
      <option  value="123105001/lec27.mp4">Universal Soil Loss Equation</option>
      
      <option  value="123105001/lec28.mp4">Air Pollutants</option>
      
      <option  value="123105001/lec29.mp4">Health Effects of Air Pollutants Part - 1</option>
      
      <option  value="123105001/lec30.mp4">Health Effects of Air Pollutants Part - 2</option>
      
      <option  value="123105001/lec31.mp4">Air Pollutants and Meteorology Part - 1</option>
      
      <option  value="123105001/lec32.mp4">Air Pollutants and Meteorology Part - 2</option>
      
      <option  value="123105001/lec33.mp4">The Point-Source Gaussian Plume Model</option>
      
      <option  value="123105001/lec34.mp4">Ground Level Concentration</option>
      
      <option  value="123105001/lec35.mp4">Emission Control</option>
      
      <option  value="123105001/lec36.mp4">EIA, EMP & EA</option>
          </select></td>
	
	</tr>
	</form>

    </table>
    </div>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    
$(window).unload(function(){
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
