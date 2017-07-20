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
<title>Atmospheric</title>
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
		<th><center>Subject Id</center></th>
		<th><center>Discipline Name</center></th>
		<th><center>Subject Name</center></th>
<th><center>Coordinators</center></th>
<th><center>Type</center></th>
<th><center>Institute</center></th>
<th><center>Content</center></th>
	</tr>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>119108004</strong></td>
	<td><strong>Atmospheric Science</strong></td>
	<td><strong>Radiation Heat Transfer</strong></td>
	<td><strong>Prof. J. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
    <option  value="#">Select </option>
      
      <option value="119108004/mod01lec01.mp4">Introduction</option>
      
      <option value="119108004/mod01lec02.mp4">Blackbody radiation</option>
      
      <option value="119108004/mod01lec03.mp4">Properties of real surfaces</option>
      
      <option value="119108004/mod01lec04.mp4">Spectral and directional variations</option>
      
      <option value="119108004/mod02lec05.mp4">Shape factor</option>
      
      <option value="119108004/mod02lec06.mp4">Triangular enclosure</option>
      
      <option value="119108004/mod02lec07.mp4">Evaluation of shape factors</option>
      
      <option value="119108004/mod02lec08.mp4">Radiation in enclosures</option>
      
      <option value="119108004/mod02lec09.mp4">Electrical analogy</option>
      
      <option value="119108004/mod02lec10.mp4">Applications</option>
      
      <option value="119108004/mod02lec11.mp4">Non-gray enclosures</option>
      
      <option value="119108004/mod02lec12.mp4">Enclosure with Specular surfaces</option>
      
      <option value="119108004/mod02lec13.mp4">Integral method for enclosures</option>
      
      <option value="119108004/mod03lec14.mp4">Introduction to gas radiation</option>
      
      <option value="119108004/mod03lec15.mp4">Plane parallel model</option>
      
      <option value="119108004/mod03lec16.mp4">Diffusion approximation</option>
      
      <option value="119108004/mod03lec17.mp4">Radiative equilibrium</option>
      
      <option value="119108004/mod03lec18.mp4">Optically thick limit</option>
      
      <option value="119108004/mod03lec19.mp4">Radiation spectroscopy</option>
      
      <option value="119108004/mod03lec20.mp4">Isothermal gas emissivity</option>
      
      <option value="119108004/mod03lec21.mp4">Band models</option>
      
      <option value="119108004/mod03lec22.mp4">Total Emissivity method</option>
      
      <option value="119108004/mod03lec23.mp4">Isothermal gas enclosures</option>
      
      <option value="119108004/mod03lec24.mp4">Well-stirred furnace model</option>
      
      <option value="119108004/mod03lec25.mp4">Gas radiation in complex enclosures</option>
      
      <option value="119108004/mod03lec26.mp4">Interaction between radiation and other modes of heat transfer</option>
      
      <option value="119108004/mod03lec27.mp4">Radiation heat transfer during flow over flat plate</option>
      
      <option value="119108004/mod04lec28.mp4">Radiation and   Climate</option>
      
      <option value="119108004/mod04lec29.mp4">Radiative-convective equilibrium</option>
      
      <option value="119108004/mod04lec30.mp4">Radiative equilibrium with scattering</option>
      
      <option value="119108004/mod04lec31.mp4">Radiation measurement</option>
      
      <option value="119108004/mod04lec32.mp4">Radiation with internal heat source</option>
      
      <option value="119108004/mod04lec33.mp4">Particle scattering</option>
      
      <option value="119108004/mod04lec34.mp4">Scattering in the atmosphere</option>
      
      <option value="119108004/mod04lec35.mp4">Non-isotropic scattering</option>
      
      <option value="119108004/mod04lec36.mp4">Approximate methods in scattering: 1</option>
      
      <option value="119108004/mod04lec37.mp4">Approximate methods in scattering: 2</option>
      
      <option value="119108004/mod04lec38.mp4">Monte Carlo method</option>
          </select>
    </td>
	
	</tr>
    
    
	</form>
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>119102007</strong></td>
	<td><strong>Atmospheric Science</strong></td>
	<td><strong>Physics of Atmosphere and Ocean</strong></td>
	<td><strong>Dr. Om P Sharma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
    <option  value="#">Select </option>
<option value="short/NPTEL/web courses/119102007/basic meteorology and oceanography/module1 the atmosphere and ocean.html">Module1 : Introduction to Meteorology and Oceanography</option>
<option value="short/NPTEL/web courses/119102007/basic meteorology and oceanography/module2 basic meteorology and oceanography.html">Module2: Basic Meteorology and Oceanography</option>
<option value="short/NPTEL/web courses/119102007/atmospheric thermodynamics/module3 thermodynamics of the dry atmosphere.html">Thermodynamics of the Dry Atmosphere</option>
<option value="short/NPTEL/web courses/119102007/atmospheric thermodynamics/module4 water vapour in the atmosphere.html">Water Vapour in the Atmosphere</option>
<option value="short/NPTEL/web courses/119102007/atmospheric thermodynamics/module5 energy diagrams.html">Energy Diagrams</option>
<option value="short/NPTEL/web courses/119102007/ocean physics/module6 thermodynamics of seawater.html">Thermodynamics of Seawater </option>
<option value="short/NPTEL/web courses/119102007/ocean physics/module7 adiabatic effects in the ocean.html">Adiabatic Effects in the Ocean</option>
<option value="short/NPTEL/web courses/119102007/ocean physics/module8 ocean circulation and currents.html">Ocean Circulation and Currents</option>
<option value="short/NPTEL/web courses/119102007/radiative transfer in atmosphere and ocean/module9 radiative transfer in the atmosphere.html">Radiative Transfer in the Atmosphere</option>
<option value="short/NPTEL/web courses/19102007/radiative transfer in atmosphere and ocean/module10 more complex radiative transfer in the atmosphere.html">More Complex Radiative Transfer in the Atmosphere</option>
<option value="short/NPTEL/web courses/119102007/radiative transfer in atmosphere and ocean/module11 radiative heating in the atmosphere.html">Radiative Heating in the Atmosphere</option>
<option value="short/NPTEL/web courses/119102007/heat induced tropical circulations/module12 heat induced tropical circulations in the atmosphere.html"> Tropical Circulations</option>

          </select>
    </td>
	
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
