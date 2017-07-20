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
<title>Environmental</title>
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
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>120108002</strong></td>
	<td><strong>Environmental Science</strong></td>
	<td><strong>Aquatic Biodiversity and Environmental Pollution</strong></td>
	<td><strong>Dr. D.S. Durgappa</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="120108002/module1/lecture1.pdf">Introduction to freshwater ecology</option>
      
      <option  value="120108002/module2/lecture2.pdf">Human impacts on fisheries</option>
      
      <option  value="120108002/module3/lecture3.pdf">Fish diversity and status</option>
      
      <option  value="120108002/module3/lecture4.pdf">Fish sampling methods in rivers, lakes, Reservoirs etc.</option>
      
      <option  value="120108002/module3/lecture5.pdf">Over fishing and mitigation</option>
      
      <option  value="120108002/module4/lecture6.pdf">Management and conservation of Aquatic biodiversity</option>
      
      <option  value="120108002/module4/lecture7.pdf">Human impacts on biodiversity of Aquatic ecosystem</option>
      
      <option  value="120108002/module4/lecture8.pdf">Capture of fisheries</option>
      
      <option  value="120108002/module5/lecture9.pdf">Processing and fish preservation</option>
      
      <option  value="120108002/module5/lecture10.pdf">Electro fishing</option>
      
      <option  value="120108002/module5/lecture11.pdf">Fish sampling techniques</option>
      
      <option  value="120108002/module5/lecture12.pdf">Fishing net and fishing gears</option>
      
      <option  value="120108002/module6/lecture13.pdf">Socioeconomic status of fisheries</option>
      
      <option  value="120108002/module6/lecture14.pdf">Introduced and invasive fish species</option>
      
      <option  value="120108002/module6/lecture15.pdf">Fisheries and economic development</option>
      
      <option  value="120108002/module6/lecture16.pdf">Aquaculture</option>
      
      <option  value="120108002/module6/lecture17.pdf">Sampling techniques in freshwater fish catch</option>
      
      <option  value="120108002/module6/lecture18.pdf">Fish stock assessment</option>
      
      <option  value="120108002/module7/lecture19.pdf">Ecology of plankton</option>
      
      <option  value="120108002/module7/lecture20.pdf">Freshwater biotic components</option>
      
      <option  value="120108002/module8/lecture21.pdf">Environmental toxicology</option>
      
      <option  value="120108002/module8/lecture22.pdf">Assessment of freshwater pollution</option>
      
      <option  value="120108002/module9/lecture23.pdf">Coral taxonomy, Coral bleaching, Scuba diving and intertidal and Underwater coral transplantation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>120108004</strong></td>
	<td><strong>Environmental Science</strong></td>
	<td><strong>Environment Management</strong></td>
	<td><strong>Prof. T.V. Ramachandra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="120108004/module1/lecture1.pdf">Principles of Environment Management</option>
      
      <option  value="120108004/module0/cover.pdf">Cover Page</option>
      
      <option  value="120108004/module0/credits_contents.pdf">Credits and Contents</option>
      
      <option  value="120108004/module2/lecture2.pdf">Policy and Legal Aspects of EM</option>
      
      <option  value="120108004/module3/lecture3.pdf">Environmental Impact Assessment (EIA)</option>
      
      <option  value="120108004/module4/lecture4.pdf">EIA Documentation and Processes</option>
      
      <option  value="120108004/module5/lecture5.pdf">Environmental Auditing</option>
      
      <option  value="120108004/module6/lecture6.pdf">Life Cycle Assessment (LCA)</option>
      
      <option  value="120108004/module6/lecture7.pdf">Applications of  LCA</option>
      
      <option  value="120108004/module7/lecture8.pdf">Environmental Management System Standards</option>
      
      <option  value="120108004/module7/lecture9.pdf">EMS specification standards</option>
      
      <option  value="120108004/module8/lecture10.pdf">Environmental Management Techniques</option>
      
      <option  value="120108004/module9/lecture11.pdf">Environmental Design</option>
      
      <option  value="120108004/module9/lecture12.pdf">Environmental Design Part 2</option>
      
      <option  value="120108004/module10/lecture13.pdf">Environmental Economics</option>
      
      <option  value="120108004/module10/lecture14.pdf">Economics of  Natural Resources</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>120108005</strong></td>
	<td><strong>Environmental Science</strong></td>
	<td><strong>Municipal Solid Waste Management</strong></td>
	<td><strong>Prof. T.V. Ramachandra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="120108005/module0/mswm_cover_page.pdf">Cover Page</option>
      
      <option  value="120108005/module0/credits_contents.pdf">Credits and Contents</option>
      
      <option  value="120108005/module1/lecture1.pdf">Introducing Municipal Solid Waste Management</option>
      
      <option  value="120108005/module2/lecture2.pdf">Waste Generation Aspects</option>
      
      <option  value="120108005/module3/lecture3.pdf">Waste Collection, Storage and Transport </option>
      
      <option  value="120108005/module4/lecture4.pdf">Waste Disposal</option>
      
      <option  value="120108005/module5/lecture5.pdf">Waste Processing Techniques </option>
      
      <option  value="120108005/module6/lecture6.pdf">Source Reduction, Product Recovery and Recycling</option>
      
      <option  value="120108005/module7/lecture7.pdf">Recovery of Biological Conversion Products:   Compost and Biogas </option>
      
      <option  value="120108005/module8/lecture8.pdf">Incineration and Energy Recovery </option>
      
      <option  value="120108005/module9/lecture9.pdf">Hazardour Waste: Management and Treatment</option>
      
      <option  value="120108005/module10/lecture10.pdf">Integrated Waste Management ( IWM)</option>
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
