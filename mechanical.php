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
<title>Mechanical</title>
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
	<td><strong>112101001</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Second Level Course in Heat Transfer</strong></td>
	<td><strong>Prof. R.P. Vedula</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112101001/modules/Module-1/lec1/objectives_L1.html">Lecture 1 : Introduction and Heat Diffusion Equation</option>
      
      <option  value="112101001/modules/Module-1/lec2/objectives_L2.html">Lecture 2 : Solution of Heat Diffusion Equation</option>
      
      <option  value="112101001/modules/Module-1/lec3/objectives_L3.html">Lecture 3 : Conduction with heat generation(contd.). Fins and Fin optimization</option>
      
      <option  value="112101001/modules/Module-1/lec4/objectives_L4.html">Lecture 4 : Fin Optimization(contd.). Underground Electric cable problem</option>
      
      <option  value="112101001/modules/Module-1/lec5/objectives_L5.html">Lecture 5 : 1D conduction example problems. 2D conduction</option>
      
      <option  value="112101001/modules/Module-1/lec6/objectives_L6.html">Lecture 6 : 2D conduction(contd.). 1D unsteady conduction</option>
      
      <option  value="112101001/modules/Module-1/lec7/objectives_L7.html">Lecture 7 : 1D unsteady conduction(contd.)</option>
      
      <option  value="112101001/modules/Module-1/lec8/objectives_L8.html">Lecture 8 : Superposition in Conduction</option>
      
      <option  value="112101001/modules/Module-1/lec9/objectives_L9.html">Lecture 9 : Duhamel�s theorem(contd.) Solids in motion</option>
      
      <option  value="112101001/modules/Module-2/lec10/objectives_L10.html">Lecture 10 : Derivation of conservation of mass and momentum equations</option>
      
      <option  value="112101001/modules/Module-2/lec11/objectives_L11.html">Lecture 11 : Derivation of conservation of momentum(contd.)</option>
      
      <option  value="112101001/modules/Module-2/lec12/objectives_L12.html">Lecture 12 : Derivation of conservation of energy</option>
      
      <option  value="112101001/modules/Module-2/lec13/objectives_L13.html">Lecture 13 : Derivation of conservation of energy(contd.)</option>
      
      <option  value="112101001/modules/Module-2/lec14/objectives_L14.html">Lecture 14 : Use of conservation equations</option>
      
      <option  value="112101001/modules/Module-2/lec14a/objectives_L14a.html">Lecture 14a : Illustrative examples</option>
      
      <option  value="112101001/modules/Module-2/lec15/objectives_L15.html">Lecture 15 : Pipe flow- Simplification of energy equation</option>
      
      <option  value="112101001/modules/Module-2/lec16/objectives_L16.html">Lecture 16 : Fully Developed Pipe flow with Constant Wall temperature and Heat Flux</option>
      
      <option  value="112101001/modules/Module-2/lec17/objectives_L17.html">Lecture 17 : Developed velocity and Developing temperature in Pipe flow with Constant Wall temperature and Heat Flux</option>
      
      <option  value="112101001/modules/Module-2/lec18/objectives_L18.html">Lecture 18 : Developed velocity and Developing temperature in Pipe flow with Constant Wall temperature</option>
      
      <option  value="112101001/modules/Module-2/lec19/objectives_L19.html">Lecture 19 : Heat Transfer Enhancement Evaluation in Roughened Tubes</option>
      
      <option  value="112101001/modules/Module-2/lec20/objectives_L20.html">Lecture 20: Heat Transfer Enhancement Evaluation in Roughened Heat Exchanger Tubes</option>
      
      <option  value="112101001/modules/Module-2/lec20a/objectives_L20a.html">Lecture 20a : Illustrative examples</option>
      
      <option  value="112101001/modules/Module-2/lec21/objectives_L21.html">Lecture 21 : Introductory Turbulent Flows</option>
      
      <option  value="112101001/modules/Module-2/lec22/objectives_L22.html">Lecture 22 : Rough Surface Turbulent Flows</option>
      
      <option  value="112101001/modules/Module-2/lec23/objectives_L23.html">Lecture 23 : Momentum Boundary Layer Equations</option>
      
      <option  value="112101001/modules/Module-2/lec24/objectives_L24.html">Lecture 24 : Thermal  Boundary Layer Equations</option>
      
      <option  value="112101001/modules/Module-2/lec25/objectives_L25.html">Lecture 25 : Integral  Boundary Layer Equations</option>
      
      <option  value="112101001/modules/Module-3/lec26/objectives_L26.html">Lecture 26 : Introduction to Radiation</option>
      
      <option  value="112101001/modules/Module-3/lec27/objectives_L27.html">Lecture 27 : One Dimensional Radiation Calculations</option>
      
      <option  value="112101001/modules/Module-3/lec28/objectives_L28.html">Lecture 28 : Radiative Transport Equation</option>
      
      <option  value="112101001/modules/Module-3/lec29/objectives_L29.html">Lecture 29 : Discrete Ordinates Methodology</option>
      
      <option  value="112101001/modules/Module-3/lec30/objectives_L30.html">Lecture 30 : Discrete Ordinates Methodology(Contd.)</option>
      
      <option  value="112101001/modules/Module-3/lec31/objectives_L31.html">Lecture 31 : Example Problems in Radiation</option>
      
      <option  value="112101001/modules/Module-2/lec25a/objectives_L25a.html">Lecture 25a : Illustrative examples</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112101002</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Convective Heat and Mass Transfer</strong></td>
	<td><strong>Prof. A.W. Date</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112101002/mod01lec01.mp4">L1-Introduction</option>
      
      <option  value="112101002/mod01lec02.mp4">L2-Flow Classifications</option>
      
      <option  value="112101002/mod01lec03.mp4">L3-Laws of Convection</option>
      
      <option  value="112101002/mod01lec04.mp4">L4-Scalar Transport Equations</option>
      
      <option  value="112101002/mod01lec05.mp4">L5-Laminar Boundary Layers</option>
      
      <option  value="112101002/mod01lec06.mp4">L6-Similarity Method</option>
      
      <option  value="112101002/mod01lec07.mp4">L7-Similaity Solns Velocity BL</option>
      
      <option  value="112101002/mod01lec08.mp4">L8-Similaity Solns Temperature BL-I</option>
      
      <option  value="112101002/mod01lec09.mp4">L9-Similaity Solns Temperature BL-II</option>
      
      <option  value="112101002/mod01lec10.mp4">L10-Integral BL Equations</option>
      
      <option  value="112101002/mod01lec11.mp4">L11-Integral Solns Laminar Velocity BL</option>
      
      <option  value="112101002/mod01lec12.mp4">L12-Integral Solns Laminar Temperature BL</option>
      
      <option  value="112101002/mod01lec13.mp4">L13-Superposition Theory</option>
      
      <option  value="112101002/mod01lec14.mp4">L14-Laminar Internal Flows</option>
      
      <option  value="112101002/mod01lec15.mp4">L15-Fully-Developed Laminar Flows- 1</option>
      
      <option  value="112101002/mod01lec16.mp4">L16-Fully-Developed Laminar Flows- 2</option>
      
      <option  value="112101002/mod01lec17.mp4">L17-Fully-Developed Laminar Flows Heat Transfer - 1</option>
      
      <option  value="112101002/mod01lec18.mp4">L18-Fully-Developed Laminar Flows Heat Transfer - 2</option>
      
      <option  value="112101002/mod01lec19.mp4">L19-Laminar Internal Developing Flows Heat Transfer</option>
      
      <option  value="112101002/mod01lec20.mp4">L20-Superposition Technique</option>
      
      <option  value="112101002/mod01lec21.mp4">L21-Nature of Turbulent Flows</option>
      
      <option  value="112101002/mod01lec22A.mp4">L22A-Sustaining Mechanism of Turbulence- 1</option>
      
      <option  value="112101002/mod01lec22B.mp4">L22B-Sustaining Mechanism of Turbulence- 1</option>
      
      <option  value="112101002/mod01lec23.mp4">L23-Sustaining Mechanism of Turbulence- 2</option>
      
      <option  value="112101002/mod01lec24.mp4">L24-Near-Wall Turbulent Flows - 1</option>
      
      <option  value="112101002/mod01lec25.mp4">L25-Near-Wall Turbulent Flows - 2</option>
      
      <option  value="112101002/mod01lec26.mp4">L26-Turbulence Models - 1</option>
      
      <option  value="112101002/mod01lec27.mp4">L27-Turbulence Models - 2</option>
      
      <option  value="112101002/mod01lec28.mp4">L28-Turbulence Models - 3</option>
      
      <option  value="112101002/mod01lec29.mp4">L29-Prediction of Turbulent Flows</option>
      
      <option  value="112101002/mod01lec30.mp4">L30-Prediction of Turbulent Heat Transfer</option>
      
      <option  value="112101002/mod01lec31.mp4">L31-Convective Mass Transfer</option>
      
      <option  value="112101002/mod01lec32.mp4">L32-Stefan Flow Model</option>
      
      <option  value="112101002/mod01lec33.mp4">L33-Couette Flow Model</option>
      
      <option  value="112101002/mod01lec34.mp4">L34-Reynolds Flow Model</option>
      
      <option  value="112101002/mod01lec35.mp4">L35-Boundary Layer Flow Model</option>
      
      <option  value="112101002/mod01lec36.mp4">L36-Evaluation of g and Nw</option>
      
      <option  value="112101002/mod01lec37.mp4">L37-Diffusion Mass Transfer Problems</option>
      
      <option  value="112101002/mod01lec38.mp4">L38-Convective MT Couette Flow</option>
      
      <option  value="112101002/mod01lec39.mp4">L39-Convective MT Reynolds Flow Model - 1</option>
      
      <option  value="112101002/mod01lec40.mp4">L40-Convective MT Reynolds Flow Model - 2</option>
      
      <option  value="112101002/mod01lec41.mp4">L41-Natural Convection</option>
      
      <option  value="112101002/mod01lec42.mp4">L42-Diusion Jet Flames</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112101004</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Cryogenic Engineering</strong></td>
	<td><strong>Prof. M.D. Atrey</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112101004/mod01lec01.mp4">L1-Introduction to Cryogenic Engineering</option>
      
      <option  value="112101004/mod01lec02.mp4">L2-Properties of Cryogenic Fluids</option>
      
      <option  value="112101004/mod01lec03.mp4">L3-Properties of Cryogenic Fluids II</option>
      
      <option  value="112101004/mod01lec04.mp4">L4-Properties of Cryogenic </option>
      
      <option  value="112101004/mod01lec05.mp4">L5-Material Properties at Low Temperature</option>
      
      <option  value="112101004/mod01lec06.mp4">L6-Material Properties at Low Temperature II</option>
      
      <option  value="112101004/mod01lec07.mp4">L7-Material Properties at Low Temperature III</option>
      
      <option  value="112101004/mod01lec08.mp4">L8-Gas Liquefaction and Refrigeration Systems</option>
      
      <option  value="112101004/mod01lec09.mp4">L9-Gas Liquefaction and Refrigeration Systems II</option>
      
      <option  value="112101004/mod01lec10.mp4">L10-Gas Liquefaction and Refrigeration Systems III</option>
      
      <option  value="112101004/mod01lec11.mp4">L11-Gas Liquefaction and Refrigeration Systems IV</option>
      
      <option  value="112101004/mod01lec12.mp4">L12-Gas Liquefaction and Refrigeration Systems V</option>
      
      <option  value="112101004/mod01lec13.mp4">L13-Gas Liquefaction and Refrigeration Systems VI</option>
      
      <option  value="112101004/mod01lec14.mp4">L14-Gas Liquefaction and Refrigeration Systems VII</option>
      
      <option  value="112101004/mod01lec15.mp4">L15-Gas Liquefaction and Refrigeration Systems VIII</option>
      
      <option  value="112101004/mod01lec16.mp4">L16-Gas Liquefaction and Refrigeration Systems IX</option>
      
      <option  value="112101004/mod01lec17.mp4">L17-Gas Liquefaction and Refrigeration Systems X</option>
      
      <option  value="112101004/mod01lec18.mp4">L18-Gas Separation</option>
      
      <option  value="112101004/mod01lec19.mp4">L19-Gas Separation II</option>
      
      <option  value="112101004/mod01lec20.mp4">L20-Gas Separation III</option>
      
      <option  value="112101004/mod01lec21.mp4">L21-Gas Separation IV</option>
      
      <option  value="112101004/mod01lec22.mp4">L22-Gas Separation V</option>
      
      <option  value="112101004/mod01lec23.mp4">L23-Gas Separation VI</option>
      
      <option  value="112101004/mod01lec24.mp4">L24-Gas Separation VII</option>
      
      <option  value="112101004/mod01lec25.mp4">L25-Gas Separation VIII</option>
      
      <option  value="112101004/mod01lec26.mp4">L26-Cryocoolers</option>
      
      <option  value="112101004/mod01lec27.mp4">L27-Cryocoolers Ideal Stirling Cycle</option>
      
      <option  value="112101004/mod01lec28.mp4">L28-Cryocoolers Ideal Stirling Cycle II</option>
      
      <option  value="112101004/mod01lec29.mp4">L29-Cryocoolers Ideal Stirling Cycle III</option>
      
      <option  value="112101004/mod01lec30.mp4">L30-Cryocoolers Ideal Stirling Cycle IV</option>
      
      <option  value="112101004/mod01lec31.mp4">L31-Cryocoolers Ideal Stirling Cycle V</option>
      
      <option  value="112101004/mod01lec32.mp4">L32-Cryocoolers</option>
      
      <option  value="112101004/mod01lec33.mp4">L33-Cryogenic Insulation</option>
      
      <option  value="112101004/mod01lec34.mp4">L34-Cryogenic Insulation II</option>
      
      <option  value="112101004/mod01lec35.mp4">L35-Cryogenic Insulation III</option>
      
      <option  value="112101004/mod01lec36.mp4">L36-Vacuum Technology</option>
      
      <option  value="112101004/mod01lec37.mp4">L37-Vacuum Technology II</option>
      
      <option  value="112101004/mod01lec38.mp4">L38-Vaccum Technology</option>
      
      <option  value="112101004/mod01lec39.mp4">L39-Instrumentation in Cryogenics</option>
      
      <option  value="112101004/mod01lec40.mp4">L40-Instrumentation in Cryogenics II</option>
      
      <option  value="112101004/mod01lec41.mp4">L41-Instrumentation in Cryogenics III</option>
      
      <option  value="112101004/mod01lec42.mp4">L42-Safety in Cryogenics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112101005</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Design For Manufacturing</strong></td>
	<td><strong>Prof. A. De</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112101005/modules/lec1-1/1.1.html">Lecture 1 : Need Identification and Problem Definition</option>
      
      <option  value="112101005/modules/lec1-2/1.2.html">Lecture 2 : Concept Generation and Evaluation</option>
      
      <option  value="112101005/modules/lec1-3/1.2.html">Lecture 3 : Embodiment Design</option>
      
      <option  value="112101005/modules/lec2-1/1.2.html">	Lecture 1 : Physical and Mechanical Properties of Engineering Materials</option>
      
      <option  value="112101005/modules/lec2-2/1.2.html">Lecture 2 : Selection of Materials - I</option>
      
      <option  value="112101005/modules/lec2-3/1.2.html">Lecture 3 : Selection of Materials - II</option>
      
      <option  value="112101005/modules/lec2-4/1.2.html">Lecture 4 : Case Studies - I</option>
      
      <option  value="112101005/modules/lec2-5/1.2.html">Lecture 5 : Selection of Shapes</option>
      
      <option  value="112101005/modules/lec2-6/1.2.html">Lecture 6 : Co-Selection of Materials and Shapess</option>
      
      <option  value="112101005/modules/lec2-7/1.2.html">Lecture 7 : Case-Studies-II</option>
      
      <option  value="112101005/modules/lec3-1/1.2.html">Lecture 1 : Review of Manufacturing Processes</option>
      
      <option  value="112101005/modules/lec3-2/1.2.html">Lecture 2 : Design for Casting</option>
      
      <option  value="112101005/modules/lec3-3/1.2.html">Lecture 3 : Design for Bulk Deformation Processes</option>
      
      <option  value="112101005/modules/lec3-4/1.2.html">Lecture 4 : Design for Sheet Metal Forming Processes </option>
      
      <option  value="112101005/modules/lec3-5/1.2.html">Lecture 5 : Design for Machining</option>
      
      <option  value="112101005/modules/lec3-6/1.2.html">Lecture 6 : Design for Powder Metallurgy</option>
      
      <option  value="112101005/modules/lec3-7/1.2.html">Lecture 7 : Design for Polymer Processing</option>
      
      <option  value="112101005/modules/lec3-8/1.2.html">Lecture 8 : Co-selection of Materials and Processes</option>
      
      <option  value="112101005/modules/lec3-9/1.2.html">Lecture 9 : Case Studies - III</option>
      
      <option  value="112101005/modules/lec4-1/1.2.html">Lecture 1 : Review of Assembly Processes</option>
      
      <option  value="112101005/modules/lec4-2/1.2.html">Lecture 2 : Design for Welding-I </option>
      
      <option  value="112101005/modules/lec4-3/1.2.html">Lecture 3 : Design for Welding-II </option>
      
      <option  value="112101005/modules/lec4-4/1.2.html">Lecture 4 : Design for Brazing and Soldering</option>
      
      <option  value="112101005/modules/lec4-5/1.2.html">Lecture 5 : Design for Adhesive bonding</option>
      
      <option  value="112101005/modules/lec4-6/1.2.html">Lecture 6 : Design for Joining of Polymers</option>
      
      <option  value="112101005/modules/lec4-7/1.2.html">Lecture 7 : Design for Heat Treatment</option>
      
      <option  value="112101005/modules/lec4-8/1.2.html">Lecture 8 : Case Studies - IV</option>
      
      <option  value="112101005/modules/lec5-1/1.2.html">Lecture 1 : Failure Mode and Effect Analysis</option>
      
      <option  value="112101005/modules/lec5-2/1.2.html">Lecture 2 : Design for Quality</option>
      
      <option  value="112101005/modules/lec5-3/1.2.html">Lecture 3 : Design for Reliability</option>
      
      <option  value="112101005/modules/lec5-4/1.2.html">Lecture 4 : Approach to Robust Design</option>
      
      <option  value="112101005/modules/lec5-5/1.2.html">Lecture 5 : Design for Optimization</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112101095</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Advanced Strength of Materials</strong></td>
	<td><strong>Prof. S.K. Maiti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112101095/lec01.mp4">Stress and Strain Tensor</option>
      
      <option  value="112101095/lec02.mp4">Stress and Strain Tensor (Continued) and Cauchy Formula for Traction</option>
      
      <option  value="112101095/lec03.mp4">Examples on Calculation of Strains and Tractions, Principal Stresses and Directions</option>
      
      <option  value="112101095/lec04.mp4">Example on Calculation of Principal Stresses and Directions, Orthogonality of Principal Directions, Principal Stresses are all Real</option>
      
      <option  value="112101095/lec05.mp4">Maximum Shear Stress and Octahedral Shear Stress, Deviatoric and Hydrostatic Stresses</option>
      
      <option  value="112101095/lec06.mp4">Transformation of Stresses and Mohr Circle in 3-D</option>
      
      <option  value="112101095/lec07.mp4">Mohr Circle (Continued)</option>
      
      <option  value="112101095/lec08.mp4">Deformation, Rotation and Strain Tensors, Principal Strains,Deviatoric and Hydrostatic Strains</option>
      
      <option  value="112101095/lec09.mp4">Strain Transformations, Strains in Polar Coordinates, Equilibrium Equations in 2-D</option>
      
      <option  value="112101095/lec10.mp4">Equilibrium Equations in 2-D Polar Coordinates Plane Stress and Plane Strain Conditions</option>
      
      <option  value="112101095/lec11.mp4">Stress-Strain Relations for Isotropic, Orthotropic and Anisotropic Materials Stress-Strain-Temperature Relations.</option>
      
      <option  value="112101095/lec12.mp4">Relation between Elastic Constants and Strain Energy Densities Recap of Lectures 1 to 11.</option>
      
      <option  value="112101095/lec13.mp4">Stress Distribution in Thick Cylinder</option>
      
      <option  value="112101095/lec14.mp4">Stresses due to Shrink Fitting</option>
      
      <option  value="112101095/lec15.mp4">Stresses in Rotating Disc</option>
      
      <option  value="112101095/lec16.mp4">Examples on Shrink Fitting and Rotating Disc</option>
      
      <option  value="112101095/lec17.mp4">Torsion of Non-Circular Shaft</option>
      
      <option  value="112101095/lec18.mp4">Torsion of Non-Circular Shaft (Continued)</option>
      
      <option  value="112101095/lec19.mp4">Membrane Analogy for Torsion</option>
      
      <option  value="112101095/lec20.mp4">Torsion of Thin Box Sections</option>
      
      <option  value="112101095/lec21.mp4">Torsion of Box and Open Sections</option>
      
      <option  value="112101095/lec22.mp4">Bending of Curved Bars</option>
      
      <option  value="112101095/lec23.mp4">Bending of Curved Bars (Continued)</option>
      
      <option  value="112101095/lec24.mp4">Theories of Failure</option>
      
      <option  value="112101095/lec25.mp4">Theories of Failure (Continued)</option>
      
      <option  value="112101095/lec26.mp4">Theories of Failure (Continued) and Their Applications, Griffith Theory of Brittle Fracture</option>
      
      <option  value="112101095/lec27.mp4">Application of Griffith Theory, Irwin-Orowan Modification of Griffith Theory, Assessment of Effect of Dynamic Loading</option>
      
      <option  value="112101095/lec28.mp4">Theorems of Elasticity</option>
      
      <option  value="112101095/lec29.mp4">Theorems of Elasticity (Continued)</option>
      
      <option  value="112101095/lec30.mp4">Thermal Stress Distribution in Rectangular Sheet due to Symmetric and Asymmetric Temperature Fields</option>
      
      <option  value="112101095/lec31.mp4">Thermal Stress Distribution in Cylinders</option>
      
      <option  value="112101095/lec32.mp4">Unsymmetrical Bending.</option>
      
      <option  value="112101095/lec33.mp4">Shear Centre</option>
      
      <option  value="112101095/lec34.mp4">Plate Bending</option>
      
      <option  value="112101095/lec35.mp4">Plate Bending (Continued)</option>
      
      <option  value="112101095/lec36.mp4">Examples on Plate Bending</option>
      
      <option  value="112101095/lec37.mp4">Approximate Solutions for Bending of Rectangular and Circular Plates</option>
      
      <option  value="112101095/lec38.mp4">Thin Shells of Revolution</option>
      
      <option  value="112101095/lec39.mp4">Beam on Elastic Foundation</option>
      
      <option  value="112101095/lec40.mp4">Application of Beam on Elastic Foundation Analysis to Pressure Vessels for Calculation of Discontinuity Stresses</option>
          </select></td>
	
	</tr>
	</form>
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112101096</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Dynamics of Machines</strong></td>
	<td><strong>Prof. P. Seshu,Prof. K. Kurien Issac,Prof. C. Amarnath</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select1" id="select1" onchange="goToPage('select1');"><option  value="#">Select </option>
      
      <option  value="112101096/Dynamics%20of%20Machines/Course%20Objective.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112101098</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Robotics</strong></td>
	<td><strong>Prof. C. Amarnath,Prof. B. Seth,Prof. K. Kurien Issac,Prof. P.S. Gandhi,Prof. P. Seshu
</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select2" id="select2" onchange="goToPage('select2');"><option  value="#">Select </option>
      
      <option  value="112101098/Robotics/Course%20Objective.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112101097</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Heat and Mass Transfer</strong></td>
	<td><strong>Prof. U.N. Gaitonde,Prof. S.P. Sukhatme</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112101097/lec01.mp4">Introduction to Heat and Mass Transfer</option>
      
      <option  value="112101097/lec02.mp4">Introduction</option>
      
      <option  value="112101097/lec03.mp4">Introduction</option>
      
      <option  value="112101097/lec04.mp4">Heat Conduction - 1</option>
      
      <option  value="112101097/lec05.mp4">Heat Conduction - 2</option>
      
      <option  value="112101097/lec06.mp4">Heat Conduction - 3</option>
      
      <option  value="112101097/lec07.mp4">Heat Conduction - 4</option>
      
      <option  value="112101097/lec08.mp4">Heat Conduction - 5</option>
      
      <option  value="112101097/lec09.mp4">Heat Conduction - 6</option>
      
      <option  value="112101097/lec10.mp4">Thermal Radiation - 1</option>
      
      <option  value="112101097/lec11.mp4">Thermal Radiation - 2</option>
      
      <option  value="112101097/lec12.mp4">Thermal Radiation - 3</option>
      
      <option  value="112101097/lec13.mp4">Thermal Radiation - 4</option>
      
      <option  value="112101097/lec14.mp4">Thermal Radiation - 5</option>
      
      <option  value="112101097/lec15.mp4">Thermal Radiation - 6</option>
      
      <option  value="112101097/lec16.mp4">Review Of Fluid Mechanics - 1</option>
      
      <option  value="112101097/lec17.mp4">Review Of Fluid Mechanics - 2</option>
      
      <option  value="112101097/lec18.mp4">Forced Convection - 1</option>
      
      <option  value="112101097/lec19.mp4">Forced Convection - 2</option>
      
      <option  value="112101097/lec20.mp4">Forced Convection - 3</option>
      
      <option  value="112101097/lec21.mp4">Forced Convection - 4</option>
      
      <option  value="112101097/lec22.mp4">Natural Convection - 1</option>
      
      <option  value="112101097/lec23.mp4">Natural Convection - 2</option>
      
      <option  value="112101097/lec24.mp4">Natural Convection - 3</option>
      
      <option  value="112101097/lec25.mp4">Heat Exchangers - 1</option>
      
      <option  value="112101097/lec26.mp4">Heat Exchangers - 2</option>
      
      <option  value="112101097/lec27.mp4">Heat Exchangers - 3</option>
      
      <option  value="112101097/lec28.mp4">Heat Exchangers - 4</option>
      
      <option  value="112101097/lec29.mp4">Boiling and Condensation - 1</option>
      
      <option  value="112101097/lec30.mp4">Boiling and Condensation - 2</option>
      
      <option  value="112101097/lec31.mp4">Boiling and Condensation - 3</option>
      
      <option  value="112101097/lec32.mp4">Boiling and Condensation - 4</option>
      
      <option  value="112101097/lec33.mp4">Introduction to Mass Transfer - 1</option>
      
      <option  value="112101097/lec34.mp4">Introduction to Mass Transfer - 2</option>
      
      <option  value="112101097/lec35.mp4">Introduction to Mass Transfer - 3</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112101099</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Robotics</strong></td>
	<td><strong>Prof. C. Amarnath,Prof. B. Seth,Prof. K. Kurien Issac,Prof. P.S. Gandhi,Prof. P. Seshu</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112101099/lec01.mp4">Introduction to Robotics</option>
      
      <option  value="112101099/lec02.mp4">Technologies in Robots</option>
      
      <option  value="112101099/lec03.mp4">Industrial Robots</option>
      
      <option  value="112101099/lec04.mp4">Industrial Manipulators and its Kinematics</option>
      
      <option  value="112101099/lec05.mp4">Parallel Manipulators</option>
      
      <option  value="112101099/lec06.mp4">Grippers manipulators</option>
      
      <option  value="112101099/lec07.mp4">Electric Actuators</option>
      
      <option  value="112101099/lec08.mp4">Actuators - Electric, Hydraulic, Pneumatic</option>
      
      <option  value="112101099/lec09.mp4">Internal State Sensors</option>
      
      <option  value="112101099/lec10.mp4">Internal State Sensors</option>
      
      <option  value="112101099/lec11.mp4">External State Sensors</option>
      
      <option  value="112101099/lec12.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec13.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec14.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec15.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec16.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec17.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec18.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec19.mp4">Trajectory planning</option>
      
      <option  value="112101099/lec20.mp4">Forward Position Control</option>
      
      <option  value="112101099/lec21.mp4">Inverse Problem</option>
      
      <option  value="112101099/lec22.mp4">Velocity Analysis</option>
      
      <option  value="112101099/lec23.mp4">Velocity Analysis</option>
      
      <option  value="112101099/lec24.mp4">Dynamic Analysis</option>
      
      <option  value="112101099/lec25.mp4">Image Processing</option>
      
      <option  value="112101099/lec26.mp4">Image Processing</option>
      
      <option  value="112101099/lec27.mp4">Image Processing</option>
      
      <option  value="112101099/lec28.mp4">Image Processing</option>
      
      <option  value="112101099/lec29.mp4">Image Processing</option>
      
      <option  value="112101099/lec30.mp4">Image Processing</option>
      
      <option  value="112101099/lec31.mp4">Robot Dynamics and Control</option>
      
      <option  value="112101099/lec32.mp4">Robot Dynamics and Control</option>
      
      <option  value="112101099/lec33.mp4">Robot Dynamics and Control</option>
      
      <option  value="112101099/lec34.mp4">Robot Dynamics and Control</option>
      
      <option  value="112101099/lec35.mp4">Robot Dynamics and Control</option>
      
      <option  value="112101099/lec36.mp4">Robot Dynamics and Control</option>
      
      <option  value="112101099/lec37.mp4">Futuristic Topics in Robotics</option>
      
      <option  value="112101099/lec38.mp4">Robot Dynamic and Control-Case Studies</option>
      
      <option  value="112101099/lec39.mp4">Robot Dynamic and Control-Case Studie</option>
      
      <option  value="112101099/lec40.mp4">Futuristic Topics in Robotics</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112102102</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computer Aided Design and Manufacturing I</strong></td>
	<td><strong>Prof. Anoop Chawla</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102102/Computer%20Aided%20Design%20&%20Manufacturing%20I/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
        <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112102103</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computer Aided Design and Manufacturing II</strong></td>
	<td><strong>Prof. P.V. Madhusudan Rao</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102103/Computer%20Aided%20Design%20&%20ManufacturingII/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112102105</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Kinematics</strong></td>
	<td><strong>Prof. Sudipto Mukherjee,Prof. Ashok K Mallik</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102105/Kinematics%20of%20Machine/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
          <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112102107</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Project and Production Management</strong></td>
	<td><strong>Prof. Arun Kanda,Prof. S.G. Deshmukh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102107/project%20and%20production%20management/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
        
          <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112103109</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Engineering Mechanics</strong></td>
	<td><strong>Prof. U.S. Dixit</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112103109/engg_mechanics/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112102014</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Tribology</strong></td>
	<td><strong>Dr. Harish Hirani </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102014/mod01lec01.mp4">Introduction </option>
      
      <option  value="112102014/mod01lec02.mp4">Interdisciplinary Approach and Economic Benefits</option>
      
      <option  value="112102014/mod02lec03.mp4">Friction</option>
      
      <option  value="112102014/mod02lec04.mp4">Friction Estimation</option>
      
      <option  value="112102014/mod02lec05.mp4">Friction Instability</option>
      
      <option  value="112102014/mod03lec06.mp4">Wear</option>
      
      <option  value="112102014/mod03lec07.mp4">Adhesive Wear</option>
      
      <option  value="112102014/mod03lec08.mp4">Wear Mechanisms</option>
      
      <option  value="112102014/mod03lec09.mp4">Wear Mechanisms � 2</option>
      
      <option  value="112102014/mod03lec10.mp4">Wear Analysis</option>
      
      <option  value="112102014/mod04lec11.mp4">Lubrication and Lubricants</option>
      
      <option  value="112102014/mod04lec12.mp4">Boundary Lubrication</option>
      
      <option  value="112102014/mod04lec13.mp4">Lubrication Mechanisms</option>
      
      <option  value="112102014/mod04lec14.mp4">Hydrodynamic Lubrication</option>
      
      <option  value="112102014/mod04lec15.mp4">Lubricant Classifications</option>
      
      <option  value="112102014/mod04lec16.mp4">Solid and Semi Solid Lubricants</option>
      
      <option  value="112102014/mod04lec17.mp4">Liquid Lubricants</option>
      
      <option  value="112102014/mod04lec18.mp4">Lubricant Additives</option>
      
      <option  value="112102014/mod05lec19.mp4">Fluid Film Lubrication</option>
      
      <option  value="112102014/mod05lec20.mp4">Reynolds Equation</option>
      
      <option  value="112102014/mod05lec21.mp4">Solution of Reynolds Equation</option>
      
      <option  value="112102014/mod05lec22.mp4">Hybrid Solution Approach(to solve Reynolds Equation)</option>
      
      <option  value="112102014/mod05lec23.mp4">Finite Difference Method to Solve Reynolds Equation</option>
      
      <option  value="112102014/mod05lec24.mp4">Viscosity Variation</option>
      
      <option  value="112102014/mod05lec25.mp4">Estimating Elastic Deformation</option>
      
      <option  value="112102014/mod05lec26.mp4">Thermo Hydrodynamic Lubrication</option>
      
      <option  value="112102014/mod06lec27.mp4">Application of Tribology</option>
      
      <option  value="112102014/mod06lec28.mp4">Rolling Element Bearings</option>
      
      <option  value="112102014/mod06lec29.mp4">Rolling Element Bearings(contd)</option>
      
      <option  value="112102014/mod06lec30.mp4">Rolling Element Bearings(contd)...</option>
      
      <option  value="112102014/mod06lec31.mp4">Selection of Rolling Element Bearings</option>
      
      <option  value="112102014/mod06lec32.mp4">Friction of Rolling Element Bearing </option>
      
      <option  value="112102014/mod06lec33.mp4">Bearing Clearance </option>
      
      <option  value="112102014/mod06lec34.mp4">Bearing Lubrication</option>
      
      <option  value="112102014/mod06lec35.mp4">Tribology of Gears</option>
      
      <option  value="112102014/mod06lec36.mp4">Friction and Lubrication of Gears</option>
      
      <option  value="112102014/mod06lec37.mp4">Friction and Lubrication of Gears(contd)</option>
      
      <option  value="112102014/mod06lec38.mp4">Surface Fatigue of Spur Gears</option>
      
      <option  value="112102014/mod06lec39.mp4">Journal Bearings</option>
      
      <option  value="112102014/mod06lec40.mp4">Hydrostatic Bearings</option>
      
      <option  value="112102014/mod06lec41.mp4">Hydrodynamic Journal Bearings</option>
      
      <option  value="112102014/mod06lec42.mp4">Design of Hydrodynamic Journal Bearings</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112102015</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Tribology</strong></td>
	<td><strong>Dr. Harish Hirani </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102015/introduction/introduction to tribology.html">Introduction to tribology</option>
      
      <option  value="112102015/introduction/history of tribology.html">History of tribology</option>
      
      <option  value="112102015/introduction/interdiscplinary approach.html">Interdisciplinary approach</option>
      
      <option  value="112102015/introduction/economic benefits.html">Economic benefits</option>
      
      <option  value="112102015/friction/causes of friction.html">Causes of friction</option>
      
      <option  value="112102015/friction/adhesion theory.html">Adhesion theory</option>
      
      <option  value="112102015/friction/junction growth theory.html">Junction growth theory</option>
      
      <option  value="112102015/friction/laws of rolling friction.html">Laws of rolling friction</option>
      
      <option  value="112102015/friction/friction instabilty.html">Friction instability</option>
      
      <option  value="112102015/wear/introduction of wear.html">Introduction to Wear</option>
      
      <option  value="112102015/wear/adhesive wear.html">Adhesive wear</option>
      
      <option  value="112102015/wear/abrasive wear.html">Abrasive wear</option>
      
      <option  value="112102015/wear/corrosive wear.html">Corrosive wear</option>
      
      <option  value="112102015/wear/fretting wear.html">Fretting wear</option>
      
      <option  value="112102015/wear/wear analysis.html">Wear analysis</option>
      
      <option  value="112102015/lubrication & lubrication/importance of lubrication.html">Importance of lubrication</option>
      
      <option  value="112102015/lubrication & lubrication/boundary lubrication.html">Boundary lubrication</option>
      
      <option  value="112102015/lubrication & lubrication/mixed lubrication.html">Mixed lubrication</option>
      
      <option  value="112102015/lubrication & lubrication/full fluid film lubrication hydrodynamic.html">Full fluid film lubrication hydrodynamic</option>
      
      <option  value="112102015/lubrication & lubrication/elastohydrodynamic lubrication.html">Elastohydrodynamic lubrication</option>
      
      <option  value="112102015/lubrication & lubrication/types & properties of lubricants.html">Types & properties of lubricants</option>
      
      <option  value="112102015/lubrication & lubrication/lubricants additives.html">Lubricants additives</option>
      
      <option  value="112102015/fluid film lubrication/fluid mechanics concepts.html">Fluid mechanics concepts</option>
      
      <option  value="112102015/fluid film lubrication/equation of continuity & motion.html">Equation of continuity & motion</option>
      
      <option  value="112102015/fluid film lubrication/generalised reynolds equation with compressible & incompressible lubricants.html">Generalised reynolds equation with compressible & incompressible lubricants</option>
      
      <option  value="112102015/application of tribology/introduction.html">Introduction</option>
      
      <option  value="112102015/application of tribology/rolling contact bearings.html">Rolling Contact Bearings</option>
      
      <option  value="112102015/application of tribology/gears.html">Gears</option>
      
      <option  value="112102015/application of tribology/journal bearings - finite bearings.html">Journal bearings </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112102101</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computer Aided Design and Manufacturing</strong></td>
	<td><strong>Prof. Anoop Chawla,Prof. P.V. Madhusudan Rao</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102101/lec01.mp4">An Introduction to CAD</option>
      
      <option  value="112102101/lec02.mp4">Input Output Devices, Raster Graphics</option>
      
      <option  value="112102101/lec03.mp4">Raster Graphics - I</option>
      
      <option  value="112102101/lec04.mp4">Raster Graphics - II</option>
      
      <option  value="112102101/lec05.mp4">Polygon Filling</option>
      
      <option  value="112102101/lec06.mp4">Windowing and Clipping</option>
      
      <option  value="112102101/lec07.mp4">Clipping of Polygons</option>
      
      <option  value="112102101/lec08.mp4">2D Transformations</option>
      
      <option  value="112102101/lec09.mp4">3D Transformations and Projection</option>
      
      <option  value="112102101/lec10.mp4">Perspective Projections</option>
      
      <option  value="112102101/lec11.mp4">Projections and Hidden Surface Removal</option>
      
      <option  value="112102101/lec12.mp4">Hidden Surface Removal</option>
      
      <option  value="112102101/lec13.mp4">Hidden Surface Removal</option>
      
      <option  value="112102101/lec14.mp4">Hidden Surface Removal</option>
      
      <option  value="112102101/lec15.mp4">Finite Element Method : An Introduction</option>
      
      <option  value="112102101/lec16.mp4">Galerkin's Approach</option>
      
      <option  value="112102101/lec17.mp4">Galerkin's Method : 1D Finite Element Method</option>
      
      <option  value="112102101/lec18.mp4">1D Finite Element Problems</option>
      
      <option  value="112102101/lec19.mp4">1D Finite Element Problems</option>
      
      <option  value="112102101/lec20.mp4">FE Problems : Solving for Q</option>
      
      <option  value="112102101/lec21.mp4">1D - FE Problems : Galerkin's Approach</option>
      
      <option  value="112102101/lec22.mp4">Penalty Approach and Multi Point Boundary</option>
      
      <option  value="112102101/lec23.mp4">Quadratic Shape Functions</option>
      
      <option  value="112102101/lec24.mp4">2D - FE Problems</option>
      
      <option  value="112102101/lec26.mp4">2D - FE Problems (Contd.)</option>
      
      <option  value="112102101/lec27.mp4">3D - FE Problems</option>
      
      <option  value="112102101/lec28.mp4">3D - Tetrahedral and 2D - Quadrilateral Element</option>
      
      <option  value="112102101/lec29.mp4">Mesh Preparation</option>
      
      <option  value="112102101/lec30.mp4">Modeling of Curves</option>
      
      <option  value="112102101/lec31.mp4">Modeling of Curves</option>
      
      <option  value="112102101/lec32.mp4">Modeling of Curves</option>
      
      <option  value="112102101/lec33.mp4">Modeling of B-Spline Curves</option>
      
      <option  value="112102101/lec34.mp4">Modeling of B-spline Curves</option>
      
      <option  value="112102101/lec35.mp4">Surface Modeling</option>
      
      <option  value="112102101/lec36.mp4">Surface Modeling</option>
      
      <option  value="112102101/lec37.mp4">Display of Curves and Surfaces</option>
      
      <option  value="112102101/lec38.mp4">Solid Modeling</option>
      
      <option  value="112102101/lec39.mp4">Solid Modeling</option>
      
      <option  value="112102101/lec40.mp4">Solid Modeling Using Octrees</option>
      
      <option  value="112102101/lec41.mp4">Computer Aided Design</option>
      
      <option  value="112102101/lec42.mp4">Computer Aided Manufacturing</option>
      
      <option  value="112102101/lec43.mp4">What is CAD/CAM</option>
      
      <option  value="112102101/lec44.mp4">An Overview of Geometric Modeling</option>
      
      <option  value="112102101/lec45.mp4">Parametric Cubic Curve</option>
      
      <option  value="112102101/lec46.mp4">Parametric Bezier Curve</option>
      
      <option  value="112102101/lec47.mp4">B-Spline Curve</option>
      
      <option  value="112102101/lec48.mp4">Parametric Surfaces - Part-1</option>
      
      <option  value="112102101/lec49.mp4">Parametric Surfaces - Part-2</option>
      
      <option  value="112102101/lec50.mp4">Solid Modeling</option>
      
      <option  value="112102101/lec51.mp4">Geometric & Product Data Exchange</option>
      
      <option  value="112102101/lec52.mp4">Reverse Engineering</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112102106</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Project and Production Management</strong></td>
	<td><strong>Prof. Arun Kanda</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112102106/lec01.mp4">Project and Production Management - An Overview</option>
      
      <option  value="112102106/lec02.mp4">Project Management: An Overview</option>
      
      <option  value="112102106/lec03.mp4">Project Identification and Screening</option>
      
      <option  value="112102106/lec04.mp4">Project Appraisal: Part 1</option>
      
      <option  value="112102106/lec05.mp4">Project Appraisal:Part II</option>
      
      <option  value="112102106/lec06.mp4">Project Selection</option>
      
      <option  value="112102106/lec07.mp4">Project Representation</option>
      
      <option  value="112102106/lec08.mp4">Consistency and Redundancy in Project Networks</option>
      
      <option  value="112102106/lec09.mp4">Basic scheduling with A-O-A Networks</option>
      
      <option  value="112102106/lec10.mp4">Basic Scheduling with A-O-N Networks</option>
      
      <option  value="112102106/lec11.mp4">Project Scheduling with Probabilistic Activity</option>
      
      <option  value="112102106/lec12.mp4">Linear Time-Cost Tradeoffs in Projects</option>
      
      <option  value="112102106/lec13.mp4">Project Crashing with Multiple Objectives</option>
      
      <option  value="112102106/lec14.mp4">Resource Profiles and Leveling</option>
      
      <option  value="112102106/lec15.mp4">Limited Resource Allocation</option>
      
      <option  value="112102106/lec16.mp4">Project Monitoring and Control with PERT/Cost</option>
      
      <option  value="112102106/lec17.mp4">Team Building and Leadership in Projects</option>
      
      <option  value="112102106/lec18.mp4">Organizational and Behavioral Issues</option>
      
      <option  value="112102106/lec19.mp4">Computers in Project Management</option>
      
      <option  value="112102106/lec20.mp4">Project Completion and Review</option>
      
      <option  value="112102106/lec21.mp4">Life Cycle of a Production System</option>
      
      <option  value="112102106/lec22.mp4">Role of Models in Production Management</option>
      
      <option  value="112102106/lec23.mp4">Financial Evaluation of capital Decisions</option>
      
      <option  value="112102106/lec24.mp4">Decision Trees and Risk Evaluation</option>
      
      <option  value="112102106/lec25.mp4">Introducing New Products & Services</option>
      
      <option  value="112102106/lec26.mp4">Economic Evaluation of New Products & Services</option>
      
      <option  value="112102106/lec27.mp4">Product Mix Decisions</option>
      
      <option  value="112102106/lec28.mp4">Product & Process Design</option>
      
      <option  value="112102106/lec29.mp4">Issues in Location of Facilities</option>
      
      <option  value="112102106/lec30.mp4">Mathematical Models for Facility Location</option>
      
      <option  value="112102106/lec31.mp4">Layout planning</option>
      
      <option  value="112102106/lec32.mp4">Computerised Layout Planning</option>
      
      <option  value="112102106/lec33.mp4">Product Layouts and Assembly Line Balancing</option>
      
      <option  value="112102106/lec34.mp4">Forecasting</option>
      
      <option  value="112102106/lec35.mp4">The Analysis of Time Series</option>
      
      <option  value="112102106/lec36.mp4">Aggregate Production Planning: Basic Concepts</option>
      
      <option  value="112102106/lec37.mp4">Modelling Approaches</option>
      
      <option  value="112102106/lec38.mp4">Basic Inventory Principles</option>
      
      <option  value="112102106/lec39.mp4">Inventory Modelling</option>
      
      <option  value="112102106/lec40.mp4">Material Requirements Planning</option>
      
      <option  value="112102106/lec41.mp4">Scheduling of Job Shops</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
        <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112103111</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Mechanical Vibrations</strong></td>
	<td><strong>Prof. Rajiv Tiwari,Prof. S.K. Dwivedy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112103111/ve/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
            <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104113</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Basic Thermodynamics</strong></td>
	<td><strong>Prof. Y.V.C. Rao,Prof. Gautam Biswas</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104113/Basic_Thermodynamics/ui/About-Faculty.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104116</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Finite Element Method</strong></td>
	<td><strong>Prof. P.M. Dixit</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104116/FiniteElementMethod/ui/About-Faculty.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104117</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Fluid Machinery</strong></td>
	<td><strong>Prof. Gautam Biswas,Prof. S. Sarkar,Prof. S.K. Som</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104117/machine/ui/About-Faculty.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104118</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Fluid Mechanics</strong></td>
	<td><strong>Prof. Gautam Biswas,Prof. S.K. Som</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104118/FLUID-MECHANICS/ui/About-Faculty.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104120</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Introduction to Turbulence</strong></td>
	<td><strong>Prof. Gautam Biswas</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104120/Introduction_to_Turbulence/ui/About-Faculty.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104122</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Materials Selection and Design</strong></td>
	<td><strong>Prof. Bishakh Bhattacharya</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104122/material_selection/ui/Course_Objective.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112103016</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Advanced Engineering Thermodynamics</strong></td>
	<td><strong>Prof. P. Mahanta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112103016/module1/index.html">Review of Thermodynamics  </option>
      
      <option  value="112103016/module1/lec2/1.html">Review of Thermodynamics I</option>
      
      <option  value="112103016/module1/lec3/1.html">Review of Thermodynamics II</option>
      
      <option  value="112103016/module1/lec4/1.html">Entropy</option>
      
      <option  value="112103016/module1/lec5/1.html">Thermodynamic Relations � I </option>
      
      <option  value="112103016/module1/lec6/1.html">Thermodynamic Relations - II </option>
      
      <option  value="112103016/module1/lec7/1.html">Application of First Law of Thermodynamics to Open System </option>
      
      <option  value="112103016/module1/lec8/1.html">Exergy Analysis </option>
      
      <option  value="112103016/module1/lec9/1.html">Examples of Quality Degradation </option>
      
      <option  value="112103016/module1/lec10/1.html">Exergy Balance Equations and Tools </option>
      
      <option  value="112103016/module1/lec11/1.html">Pinch Point Technology </option>
      
      <option  value="112103016/module1/lec12/1.html">Third Law of Thermodynamics </option>
      
      <option  value="112103016/module2/lec1/1.html">Introduction</option>
      
      <option  value="112103016/module2/lec2/1.html">First order phase transition </option>
      
      <option  value="112103016/module2/lec3/1.html">Second Order Phase Transition </option>
      
      <option  value="112103016/module2/lec4/1.html">Mixture of variable composition </option>
      
      <option  value="112103016/module2/lec5/1.html">Conditions of equilibrium of a heterogeneous system </option>
      
      <option  value="112103016/module2/lec6/1.html">Stable Equilibrium </option>
      
      <option  value="112103016/module2/lec7/1.html">Equations of State </option>
      
      <option  value="112103016/module2/lec8/1.html">Gibbs Phase Rule </option>
      
      <option  value="112103016/module3/lec1/1.html">Chemical Reaction </option>
      
      <option  value="112103016/module3/lec2/1.html">Reaction Kinetics - I </option>
      
      <option  value="112103016/module3/lec3/1.html">Reaction Kinetics - II </option>
      
      <option  value="112103016/module3/lec4/1.html">Gibbs Function Change </option>
      
      <option  value="112103016/module3/lec5/1.html">Fugacity, Activity and Enthalpy of Formation</option>
      
      <option  value="112103016/module3/lec6/1.html">Thermodynamic Analysis </option>
      
      <option  value="112103016/module3/lec7/1.html">Advance Thermodynamic Analysis </option>
      
      <option  value="112103016/module3/lec8/1.html">Reactive systems </option>
      
      <option  value="112103016/module4/lec1/1.html">Introduction to Kinetic Theory of Gases</option>
      
      <option  value="112103016/module4/lec2/1.html">Molecular Collisions with a Stationary Wall </option>
      
      <option  value="112103016/module4/lec3/1.html">Absolute Temperature Of A Gas </option>
      
      <option  value="112103016/module4/lec4/1.html">Derivation from Ideal Gas Behavior </option>
      
      <option  value="112103016/module4/lec5/1.html">Maxwell-Boltzmann Velocity Distribution </option>
      
      <option  value="112103016/module4/lec6/1.html">Applications of Maxwell-Boltzmann Distribution </option>
      
      <option  value="112103016/module4/lec7/1.html">Evaluation of Elementary Properties of a Gas Based on Kinetic Theory </option>
      
      <option  value="112103016/module4/lec8/1.html">Principle Of Equipartition Of Energy </option>
      
      <option  value="112103016/module5/lec1/1.html">Fundamentals</option>
      
      <option  value="112103016/module5/lec2/1.html">Wave Mechanics </option>
      
      <option  value="112103016/module5/lec3/1.html">Schrodinger Wave Equation </option>
      
      <option  value="112103016/module5/lec4/1.html">Models in Statistical Thermodynamics </option>
      
      <option  value="112103016/module5/lec5/1.html">Fermi-Dirac statistics </option>
      
      <option  value="112103016/module5/lec6/1.html">Partition Function and Application to Monoatomic Gas </option>
      
      <option  value="112103016/module5/lec7/1.html">Principle of Equipartition of Energy and Statistics of a Photon Gas </option>
      
      <option  value="112103016/module5/lec8/1.html">Application of Partition Function and Relation Between Entropy and Probability</option>
      
      <option  value="112103016/ref/1.html">References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112103021</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Gas Dynamics</strong></td>
	<td><strong>Dr. Vinayak Kulkarni</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112103021/module1/index.html">Introduction</option>
      
      <option  value="112103021/module1/lec2/1.html">Governing Equations- Mass conservation Equation</option>
      
      <option  value="112103021/module1/lec3/1.html">Governing Equations- Momentum conservation Equation</option>
      
      <option  value="112103021/module1/lec4/1.html">Governing Equations- Energy conservation Equation</option>
      
      <option  value="112103021/module2/lec5/1.html">Speed of Sound and Mach number</option>
      
      <option  value="112103021/module2/lec6/1.html">Normal Shock I</option>
      
      <option  value="112103021/module2/lec7/1.html">Normal Shock  II</option>
      
      <option  value="112103021/module2/lec8/1.html">Hugoniot equation</option>
      
      <option  value="112103021/module2/lec9/1.html">Hugoniot Curve</option>
      
      <option  value="112103021/module2/lec10/1.html">Normal Shock analysis using Hugoniot Curve</option>
      
      <option  value="112103021/module2/lec11/1.html">Flow With Heat Addition: Rayleigh flow</option>
      
      <option  value="112103021/module2/lec12/1.html">Flow With Heat Addition: Rayleigh Curve I</option>
      
      <option  value="112103021/module2/lec13/1.html">Flow With Heat Addition: Rayleigh Curve II</option>
      
      <option  value="112103021/module2/lec14/1.html">Rayleigh Flow Equations (Differential Form)</option>
      
      <option  value="112103021/module2/lec15/1.html">1D flow with Friction: Fanno flow</option>
      
      <option  value="112103021/module2/lec16/1.html">Differential Relation for Fanno flow</option>
      
      <option  value="112103021/module2/lec17/1.html">Analysis of Fanno flow and Fanno Curve</option>
      
      <option  value="112103021/module3/lec18/1.html">Oblique Shock I</option>
      
      <option  value="112103021/module3/lec19/1.html">Oblique Shock II</option>
      
      <option  value="112103021/module3/lec20/1.html">Oblique shock: Shock Plolar</option>
      
      <option  value="112103021/module3/lec21/1.html">P-  diagram</option>
      
      <option  value="112103021/module3/lec22/1.html">Shock-Shock Interaction: Different Family Shocks</option>
      
      <option  value="112103021/module3/lec23/1.html">Shock-Shock Interaction: Same Family Shocks</option>
      
      <option  value="112103021/module3/lec24/1.html">Shock Reflection</option>
      
      <option  value="112103021/module3/lec25/1.html">Supersonic Expansion</option>
      
      <option  value="112103021/module4/lec26/1.html">Basics of Quasi-One Dimensional Flows</option>
      
      <option  value="112103021/module4/lec27/1.html">Flow through Nozzle</option>
      
      <option  value="112103021/module5/lec28/1.html">Velocity Potential Equation</option>
      
      <option  value="112103021/module5/lec29/1.html">Small Perturbation Theory</option>
      
      <option  value="112103021/module5/lec30/1.html">Supersonic flow over a cone I</option>
      
      <option  value="112103021/module5/lec31/1.html">Supersonic flow over a cone II</option>
      
      <option  value="112103021/module5/lec32/1.html">Introduction to Method of Characteristics</option>
      
      <option  value="112103021/module5/lec33/1.html">Equation of Method of Characteristics</option>
      
      <option  value="112103021/module5/lec34/1.html">Application of Method of Characteristics</option>
      
      <option  value="112103021/module6/lec35/1.html">Fundamentals of Shock Tube</option>
      
      <option  value="112103021/module6/lec36/1.html">Shock Tube Relations</option>
      
      <option  value="112103021/module7/lec37/1.html">High Speed Testing Facilities I</option>
      
      <option  value="112103021/module7/lec38/1.html">High Speed Testing Facilities II</option>
      
      <option  value="112103021/module7/lec39/1.html">Compressible flow visualization</option>
      
      <option  value="112103021/module7/lec40/1.html">Diagnostics and measurement techniques</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112103108</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Engineering Mechanics</strong></td>
	<td><strong>Dr. G. Saravana Kumar,Prof. U.S. Dixit</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112103108/mod01lec01.mp4">Fundamentals Of Engineering Mechanics</option>
      
      <option  value="112103108/mod01lec02.mp4">Equations of Equilibrium</option>
      
      <option  value="112103108/mod02lec02.mp4">Truss Analysis Part - 2</option>
      
      <option  value="112103108/mod02lec04.mp4">Truss Analysis Part - 2</option>
      
      <option  value="112103108/mod02lec05.mp4">Analysis of Frames Machines</option>
      
      <option  value="112103108/mod03lec06.mp4">Internal Forces</option>
      
      <option  value="112103108/mod03lec07.mp4">Internal Forces in Beams</option>
      
      <option  value="112103108/mod03lec08.mp4">Cables</option>
      
      <option  value="112103108/mod04lec09.mp4">Friction</option>
      
      <option  value="112103108/mod04lec10.mp4">Application of Friction Part - 1</option>
      
      <option  value="112103108/mod04lec11.mp4">Application of Friction Part - 2</option>
      
      <option  value="112103108/mod05lec12.mp4">Application of Friction Part - 3</option>
      
      <option  value="112103108/mod06lec13.mp4">Centroids Center of Mass</option>
      
      <option  value="112103108/mod06lec14.mp4">Centroids Area of Moments</option>
      
      <option  value="112103108/mod06lec15.mp4">Product of Inertia, Rotation of Axis and Principle Moments of Inertia</option>
      
      <option  value="112103108/mod07lec02.mp4">Principle Mass Moments of Inertia</option>
      
      <option  value="112103108/mod07lec16.mp4">Second Moment of Mass</option>
      
      <option  value="112103108/mod08lec02.mp4">Virtual Work of Ideal System</option>
      
      <option  value="112103108/mod08lec18.mp4">Principle of Virtual Work</option>
      
      <option  value="112103108/mod08lec20.mp4">Systems with Friction</option>
      
      <option  value="112103108/mod09lec21.mp4">Potential Energy</option>
      
      <option  value="112103108/mod09lec22.mp4">Stability of Equilibrium</option>
      
      <option  value="112103108/mod10lec23.mp4">Kinematics of a Particles</option>
      
      <option  value="112103108/mod10lec24.mp4">Kinematics of a Particle Moving on a Curve</option>
      
      <option  value="112103108/mod10lec25.mp4">Relative Motion</option>
      
      <option  value="112103108/mod10lec26.mp4">Plane Kinematics of Rigid Bodies</option>
      
      <option  value="112103108/mod11lec27.mp4">Kinematics of a Particle</option>
      
      <option  value="112103108/mod11lec28.mp4">Work and Enjoy</option>
      
      <option  value="112103108/mod11lec29.mp4">Impulse and Momentum</option>
      
      <option  value="112103108/mod11lec30.mp4">Direct and Oblique Impulse</option>
      
      <option  value="112103108/mod11lec31.mp4">Plane Kinetics of Rigid Bodies</option>
      
      <option  value="112103108/mod12lec32.mp4">Kinetics of a Body</option>
      
      <option  value="112103108/mod12lec33.mp4">Method of Momentum and Analysis of Robot Manipulator</option>
      
      <option  value="112103108/mod13lec34.mp4">Kinematics in 3D</option>
      
      <option  value="112103108/mod14lec35.mp4">Kinetics in 3D</option>
      
      <option  value="112103108/mod15lec36.mp4">Free Vibration</option>
      
      <option  value="112103108/mod15lec37.mp4">Forced Vibration Damped Undamped</option>
      
      <option  value="112103108/mod15lec38.mp4">Vibration of Rigid Bodies Part - 1</option>
      
      <option  value="112103108/mod15lec39.mp4">Vibration of Rigid Bodies Part - 2</option>
      
      <option  value="112103108/mod15lec40.mp4">Some Problems of Vibration</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112103112</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Mechanical Vibrations</strong></td>
	<td><strong>Prof. Rajiv Tiwari,Prof. S.K. Dwivedy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112103112/mod01lec01.mp4">Overview of the Course, Practical and Research Trends</option>
      
      <option  value="112103112/mod01lec02.mp4">Harmonic and Periodic Motions, Vibration Terminology</option>
      
      <option  value="112103112/mod02lec01.mp4">Vibration Model, Equation of Motion-Natural Frequency</option>
      
      <option  value="112103112/mod02lec02.mp4">Energy Method, Principle of Virtual Work</option>
      
      <option  value="112103112/mod03lec01.mp4">Viscously Damped Free Vibration Special Cases: Oscillatory</option>
      
      <option  value="112103112/mod03lec02.mp4">Logarithmic Decrement Experimental Determination of Damping Coefficient Hystersis Loop</option>
      
      <option  value="112103112/mod03lec03.mp4">Coulomb Damping other Damping Models</option>
      
      <option  value="112103112/mod04lec01.mp4">Forced Harmonic Vibration, Magnification Factor</option>
      
      <option  value="112103112/mod04lec02.mp4">Laplace Transform, Superposition Theorem</option>
      
      <option  value="112103112/mod04lec03.mp4">Rotor Unbalance and Whirling of Shaft, Transmissibility</option>
      
      <option  value="112103112/mod04lec04.mp4">Support Motion, Vibration Isolation</option>
      
      <option  value="112103112/mod04lec05.mp4">Sharpness of Resonance, Vibration Measuring Instruments</option>
      
      <option  value="112103112/mod05lec01.mp4">Generalized and Principle Coordinates, Derivation of Equation of Motion</option>
      
      <option  value="112103112/mod05lec02.mp4">Lagranges's Equation</option>
      
      <option  value="112103112/mod05lec03.mp4">Coordinate Coupling</option>
      
      <option  value="112103112/mod05lec04.mp4">Forced Harmonic Vibration</option>
      
      <option  value="112103112/mod06lec01.mp4">Tuned Absorber, Determination of Mass Ratio</option>
      
      <option  value="112103112/mod06lec02.mp4">Tuned and Damped Absorber, Untuned Viscous Damper</option>
      
      <option  value="112103112/mod07lec01.mp4">Derivation of Equations of Motion, Influence Coefficient Method</option>
      
      <option  value="112103112/mod07lec02.mp4">Properties of Vibrating Systems: Flexibility & Stiffness Matrices, Reciprocity Theorem</option>
      
      <option  value="112103112/mod07lec03.mp4">Modal Analysis: Undamped</option>
      
      <option  value="112103112/mod07lec04.mp4">Modal Analysis: Damped</option>
      
      <option  value="112103112/mod08lec01.mp4">Simple Systems With One Two or Three Discs Geared System</option>
      
      <option  value="112103112/mod08lec02.mp4">Multi-Degree of Freedom Systems-Transfer Matrix Method Branched System</option>
      
      <option  value="112103112/mod09lec01.mp4">Derivation of Equations of Motion Part 1 - Newton</option>
      
      <option  value="112103112/mod09lec02.mp4">Derivation of Equations of Motion Part 2 - Newton</option>
      
      <option  value="112103112/mod09lec03.mp4">Vibration of Strings</option>
      
      <option  value="112103112/mod09lec04.mp4">Longitudinal and Torsional Vibration of Rods</option>
      
      <option  value="112103112/mod09lec05.mp4">Transverse Vibration of Beams, Equations of Motion and Boundary Conditions</option>
      
      <option  value="112103112/mod09lec06.mp4">Transverse Vibration of Beams: Natural Frequencies and Mode Shapes</option>
      
      <option  value="112103112/mod10lec01.mp4">Rayleigh's Energy Method</option>
      
      <option  value="112103112/mod10lec02.mp4">Matrix Iteration Method</option>
      
      <option  value="112103112/mod10lec03.mp4">Durkerley, Rayleigh-Ritz and Galerkin Method</option>
      
      <option  value="112103112/mod11lec01.mp4">Finite Element Formulation for Rods, Gear Train and Branched System</option>
      
      <option  value="112103112/mod11lec02.mp4">Finite Element Formulation for Beams: Galerkin</option>
      
      <option  value="112103112/mod11lec03.mp4">Global Finite Element Assembly and Imposition of Boundary Conditions</option>
      
      <option  value="112103112/mod12lec01.mp4">Vibration Testing Equipments: Signal Measurements</option>
      
      <option  value="112103112/mod12lec02.mp4">Vibration Testing Equipments: Signal Analysis</option>
      
      <option  value="112103112/mod12lec03.mp4">Field Balancing of Rotors</option>
      
      <option  value="112103112/mod12lec04.mp4">Condition Monitoring</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112103174</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Mechatronics and Manufacturing Automation</strong></td>
	<td><strong>Dr. Shrikrishna N. Joshi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112103174/module1/index.html">Introduction </option>
      
      <option  value="112103174/module1/lec2/1.html">Mechatronics: products and systems in manufacturing</option>
      
      <option  value="112103174/module2/lec1/1.html">Sensors and transducers</option>
      
      <option  value="112103174/module2/lec2/1.html">Displacement and position sensors </option>
      
      <option  value="112103174/module2/lec3/1.html">Displacement, position and proximity sensors</option>
      
      <option  value="112103174/module2/lec4/1.html">Velocity, motion, force and pressure sensors </option>
      
      <option  value="112103174/module2/lec5/1.html">Temperature and light sensors</option>
      
      <option  value="112103174/module2/lec6/1.html">Signal Conditioning Devices</option>
      
      <option  value="112103174/module2/lec7/1.html">Protection, conversion and pulse width modulation</option>
      
      <option  value="112103174/module2/lec8/1.html">Data conversion devices</option>
      
      <option  value="112103174/module3/lec1/1.html">Introduction to Micro-processors and Micro-controllers</option>
      
      <option  value="112103174/module3/lec2/1.html">Introduction to microprocessor programming</option>
      
      <option  value="112103174/module3/lec3/1.html">Programmable Logic Controllers </option>
      
      <option  value="112103174/module3/lec4/1.html">PID controllers </option>
      
      <option  value="112103174/module4/lec1/1.html">Elements of CNC machine tools: electric motors</option>
      
      <option  value="112103174/module4/lec2/1.html">Stepper motors and Servo motors</option>
      
      <option  value="112103174/module4/lec3/1.html">Cams</option>
      
      <option  value="112103174/module4/lec4/1.html">Linear motion drives</option>
      
      <option  value="112103174/module4/lec5/1.html">Indexing Mechanisms</option>
      
      <option  value="112103174/module4/lec6/1.html">Tool magazines and transfer systems</option>
      
      <option  value="112103174/module5/lec1/1.html">Introduction of  Hydraulic Systems</option>
      
      <option  value="112103174/module5/lec2/1.html">Hydraulic Pumps-1</option>
      
      <option  value="112103174/module5/lec3/1.html">Hydraulic Pumps -2</option>
      
      <option  value="112103174/module5/lec4/1.html">Control Valves -1</option>
      
      <option  value="112103174/module5/lec5/1.html">Control valves -2</option>
      
      <option  value="112103174/module5/lec6/1.html">Pressure relief valves</option>
      
      <option  value="112103174/module5/lec7/1.html">Graphical representation of hydraulic and pneumatic elements</option>
      
      <option  value="112103174/module5/lec8/1.html">Design of Hydraulic Circuit </option>
      
      <option  value="112103174/module6/lec1/1.html">Introduction to Pneumatic System</option>
      
      <option  value="112103174/module6/lec2/1.html">Compressors</option>
      
      <option  value="112103174/module6/lec3/1.html">Air Treatment and Pressure Regulation</option>
      
      <option  value="112103174/module6/lec4/1.html">Actuators</option>
      
      <option  value="112103174/module6/lec5/1.html">Pneumatic Controllers</option>
      
      <option  value="112103174/module6/lec6/1.html">Applications of Pneumatic Systems</option>
      
      <option  value="112103174/module7/lec1/1.html">CNC programming: fundamentals</option>
      
      <option  value="112103174/module7/lec2/1.html">CNC programming: Drilling operations</option>
      
      <option  value="112103174/module7/lec3/1.html">CNC programming: Milling operations</option>
      
      <option  value="112103174/module7/lec4/1.html">CNC programming: Turning operations </option>
      
      <option  value="112103174/module7/lec5/1.html">Industrial robotics-1</option>
      
      <option  value="112103174/module7/lec6/1.html">Industrial robotics-2</option>
      
      <option  value="112103174/assignments/1/1.html">Assignments</option>
      
      <option  value="112103174/references/1/1.html">References</option>
      
      <option  value="112103174/mid sem exam/1/1.html">Mid-Sem Exam</option>
      
      <option  value="112103174/end sem exam/1/1.html">End-Sem Exam</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104026</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Acoustics </strong></td>
	<td><strong>Prof. Nachiketa Tiwari</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112104026/mod01lec01.mp4">Intro, sound wave versus vibration, different types of waves, octave, music scales, sense of SPL</option>
<option value="112104026/mod01lec02.mp4">Review: Linearity, complex numbers, and spring mass system</option>
<option value="112104026/mod01lec03.mp4">Review: Poles and zeroes,  phase and magnitude plots, transfer functions, Bode plots</option>
<option value="112104026/mod01lec04.mp4">Review: Transfer functions, and Bode plots</option>
<option value="112104026/mod02lec01.mp4">1-D wave equation, and its solution</option>
<option value="112104026/mod02lec02.mp4">Solution for 1-D wave equation</option>
<option value="112104026/mod02lec03.mp4">Waveguides, transmission line equations, and standing waves</option>
<option value="112104026/mod02lec04.mp4">Waveguides,transmission line equations, and standing waves</option>
<option value="112104026/mod02lec05.mp4">Examples of 1-D waves in tubes, short tubes, Kundt's tube</option>
<option value="112104026/mod02lec06.mp4">Thermodynamic processes during sound transmission</option>
<option value="112104026/mod02lec07.mp4">Numerical examples</option>
<option value="112104026/mod03lec01.mp4">Sound transmission through walls</option>
<option value="112104026/mod03lec02.mp4">Sound  transmission through walls</option>
<option value="112104026/mod03lec03.mp4">Leakage in walls, STC Ratings, Octave bands</option>
<option value="112104026/mod04lec01.mp4">Instantaneous power flow</option>
<option value="112104026/mod04lec02.mp4">Radial propagation of sound, monopoles, and dipoles</option>
<option value="112104026/mod04lec03.mp4">Radial  propagation of sound, monopoles, and dipoles</option>
<option value="112104026/mod04lec04.mp4">Radial propagation of  sound, monopoles, and dipoles</option>
<option value="112104026/mod04lec05.mp4">Numerical  examples</option>
<option value="112104026/mod04lec06.mp4">Numerical examples</option>
<option value="112104026/mod05lec01.mp4">Directivity</option>
<option value="112104026/mod05lec02.mp4">Directivity</option>
<option value="112104026/mod05lec03.mp4">Directivity</option>
<option value="112104026/mod05lec04.mp4">Directivity</option>
<option value="112104026/mod06lec01.mp4">Generalized elements</option>
<option value="112104026/mod06lec02.mp4">Examples of electromechanical systems</option>
<option value="112104026/mod06lec03.mp4">Transformers, radiation impedance,  and Helmholtz resonator</option>
<option value="112104026/mod06lec04.mp4">Radiation impedance</option>
<option value="112104026/mod06lec05.mp4">Radiation  impedance</option>
<option value="112104026/mod06lec06.mp4">Models of electro-mechanical-acoustic systems</option>
<option value="112104026/mod06lec07.mp4">Solution for a loudspeaker model</option>
<option value="112104026/mod06lec08.mp4">Microphones</option>
<option value="112104026/mod06lec09.mp4">Vibro-meter, seismometer, accelerometer, shaker table</option>
<option value="112104026/mod07lec01.mp4">Sound propagation in rooms, 1-D rooms, 2D rooms</option>
<option value="112104026/mod07lec02.mp4">Sound in 3-D rooms</option>
<option value="112104026/mod07lec03.mp4">Absorption coefficient, and irregular rooms</option>
<option value="112104026/mod07lec04.mp4">Room constant, and Sabine's coefficient</option>
<option value="112104026/mod07lec05.mp4">Design of a muffler</option>
<option value="112104026/mod07lec06.mp4">Noise in machines, basics of noise management</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104028</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong> Advanced Machining Processes</strong></td>
	<td><strong>Prof. Vijay K. Jain</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112104028/mod01lec01.mp4">Lecture-01.Advanced Machining Processes</option>
<option value="112104028/mod01lec02.mp4">Lecture-02.Advanced Machining Processes</option>
<option value="112104028/mod01lec03.mp4">Lecture-03.Advanced Machining Processes</option>
<option value="112104028/mod01lec04.mp4">Lecture-04.Advanced Machining Processes</option>
<option value="112104028/mod01lec05.mp4">Lecture-05.Advanced Machining Processes</option>
<option value="112104028/mod01lec06.mp4">Lecture-06.Advanced Machining Processes</option>
<option value="112104028/mod01lec07.mp4">Lecture-07.Advanced Machining Processes</option>
<option value="112104028/mod01lec08.mp4">Lecture-08.Advanced Machining Processes</option>
<option value="112104028/mod01lec09.mp4">Lecture-09.Advanced Machining Processes</option>
<option value="112104028/mod01lec10.mp4">Lecture-10.Advanced Machining Processes</option>
<option value="112104028/mod01lec11.mp4">Lecture-11.Advanced Machining Processes</option>
<option value="112104028/mod01lec12.mp4">Lecture-12.Advanced Machining Processes</option>
<option value="112104028/mod01lec13.mp4">Lecture-13.Advanced Machining Processes</option>
<option value="112104028/mod01lec14.mp4">Lecture-14.Advanced Machining Processes</option>
<option value="112104028/mod01lec15.mp4">Lecture-15.Advanced Machining Processes</option>
<option value="112104028/mod01lec16.mp4">Lecture-16.Advanced Machining Processes</option>
<option value="112104028/mod01lec17.mp4">Lecture-17.Advanced Machining Processes</option>
<option value="112104028/mod01lec18.mp4">Lecture-18.Advanced Machining Processes</option>
<option value="112104028/mod01lec19.mp4">Lecture-19.Advanced Machining Processes</option>
<option value="112104028/mod01lec20.mp4">Lecture-20.Advanced Machining Processes</option>
<option value="112104028/mod01lec21.mp4">Lecture-21.Advanced Machining Processes</option>
<option value="112104028/mod01lec22.mp4">Lecture-22.Advanced Machining Processes</option>
<option value="112104028/mod01lec23.mp4">Lecture-23.Advanced Machining Processes</option>
<option value="112104028/mod01lec24.mp4">Lecture-24.Advanced Machining Processes</option>
<option value="112104028/mod01lec25.mp4">Lecture-25.Advanced Machining Processes</option>
<option value="112104028/mod01lec26.mp4">Lecture-26.Advanced Machining Processes</option>
<option value="112104028/mod01lec27.mp4">Lecture-27.Advanced Machining Processes</option>
<option value="112104028/mod01lec28.mp4">Lecture-28.Advanced Machining Processes</option>
<option value="112104028/mod01lec29.mp4">Lecture-29.Advanced Machining Processes</option>
<option value="112104028/mod01lec30.mp4">Lecture-30.Advanced Machining Processes</option>
<option value="112104028/mod01lec31.mp4">Lecture-31.Advanced Machining Processes</option>
<option value="112104028/mod01lec32.mp4">Lecture-32.Advanced Machining Processes</option>
<option value="112104028/mod01lec33.mp4">Lecture-33.Advanced Machining Processes</option>
<option value="112104028/mod01lec34.mp4">Lecture-34.Advanced Machining Processes</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104035</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong> Mathematical Methods in Engineering and Science </strong></td>
	<td><strong>Dr. Bhaskar Dasgupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112104035/mod01lec01.mp4">Introduction</option>
<option value="112104035/mod01lec02.mp4">Basic Ideas of Applied Linear Algebra</option>
<option value="112104035/mod01lec03.mp4">Systems of Linear Equations</option>
<option value="112104035/mod01lec04.mp4">Square Non-Singular Systems</option>
<option value="112104035/mod01lec05.mp4">Ill-Conditioned and Ill-Posed Systems</option>
<option value="112104035/mod01lec06.mp4">The Algebraic Eigenvalue Problem</option>
<option value="112104035/mod01lec07.mp4">Canonical Forms, Symmetric Matrices</option>
<option value="112104035/mod01lec08.mp4">Methods of Plane Rotations</option>
<option value="112104035/mod01lec09.mp4">Householder Method, Tridiagonal Matrices</option>
<option value="112104035/mod01lec10.mp4">QR Decomposition, General Matrices</option>
<option value="112104035/mod01lec11.mp4">Singular Value Decomposition</option>
<option value="112104035/mod01lec12.mp4">Vector Space: Concepts</option>
<option value="112104035/mod01lec13.mp4">Multivariate Calculus</option>
<option value="112104035/mod01lec14.mp4">Vector Calculus in Geometry</option>
<option value="112104035/mod01lec15.mp4">Vector Calculus in Physics</option>
<option value="112104035/mod01lec16.mp4">Solution of Equations</option>
<option value="112104035/mod01lec17.mp4">Introdcution to Optimization</option>
<option value="112104035/mod01lec18.mp4">Multivariate Optimization</option>
<option value="112104035/mod01lec19.mp4">Constrained Optimization: Optimality Criteria</option>
<option value="112104035/mod01lec20.mp4">Constrained Optimization: Further Issues</option>
<option value="112104035/mod01lec21.mp4">Interpolation</option>
<option value="112104035/mod01lec22.mp4">Numerical Integration</option>
<option value="112104035/mod01lec23.mp4">Numerical Solution of ODE's as IVP</option>
<option value="112104035/mod01lec24.mp4">Boundary Value Problems, Question of Stability in IVP Solution</option>
<option value="112104035/mod01lec25.mp4">Stiff Differential Equations, Existence and Uniqueness Theory</option>
<option value="112104035/mod01lec26.mp4">Theory of First Order ODE's</option>
<option value="112104035/mod01lec27.mp4">Linear Second Order ODE's</option>
<option value="112104035/mod01lec28.mp4">Methods of Linear ODE's</option>
<option value="112104035/mod01lec29.mp4">ODE Systems</option>
<option value="112104035/mod01lec30.mp4">Stability of Dynamic Systems</option>
<option value="112104035/mod01lec31.mp4">Series Solutions and Special Functions</option>
<option value="112104035/mod01lec32.mp4">Sturm-Liouville Theory</option>
<option value="112104035/mod01lec33.mp4">Approximation Theory and Fourier Series</option>
<option value="112104035/mod01lec34.mp4">Fourier Integral to Fourier Transform, Minimax Approximation</option>
<option value="112104035/mod01lec35.mp4">Separation of Variables in PDE's, Hyperbolic Equations</option>
<option value="112104035/mod01lec36.mp4">Parabolic and Elliptic Equations, Membrane Equation</option>
<option value="112104035/mod01lec37.mp4">Analytic Functions</option>
<option value="112104035/mod01lec38.mp4">Integration of Complex Functions</option>
<option value="112104035/mod01lec39.mp4">Singularities and Residues</option>
<option value="112104035/mod01lec40.mp4">Calculus of Variations</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104162</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong> Advanced manufacturing process for micro system fabrication</strong></td>
	<td><strong>Dr. Shantanu Bhattacharya</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112104162/mod01lec01.mp4">Lecture-01</option>
<option value="112104162/mod01lec02.mp4">Lecture-02</option>
<option value="112104162/mod01lec03.mp4">Lecture-03</option>
<option value="112104162/mod01lec04.mp4">Lecture-04</option>
<option value="112104162/mod01lec05.mp4">Lecture-05</option>
<option value="112104162/mod01lec06.mp4">Lecture-06</option>
<option value="112104162/mod01lec07.mp4">Lecture-07</option>
<option value="112104162/mod01lec08.mp4">Lecture-08</option>
<option value="112104162/mod01lec09.mp4">Lecture-09</option>
<option value="112104162/mod01lec10.mp4">Lecture-10</option>
<option value="112104162/mod01lec11.mp4">Lecture-11</option>
<option value="112104162/mod01lec12.mp4">Lecture-12</option>
<option value="112104162/mod01lec13.mp4">Lecture-13</option>
<option value="112104162/mod01lec14.mp4">Lecture-14</option>
<option value="112104162/mod01lec15.mp4">Lecture-15</option>
<option value="112104162/mod01lec16.mp4">Lecture-16</option>
<option value="112104162/mod01lec17.mp4">Lecture-17</option>
<option value="112104162/mod01lec18.mp4">Lecture-18</option>
<option value="112104162/mod01lec19.mp4">Lecture-19</option>
<option value="112104162/mod01lec20.mp4">Lecture-20</option>
<option value="112104162/mod01lec21.mp4">Lecture-21</option>
<option value="112104162/mod01lec22.mp4">Lecture-22</option>
<option value="112104162/mod01lec23.mp4">Lecture-23</option>
<option value="112104162/mod01lec24.mp4">Lecture-24</option>
<option value="112104162/mod01lec25.mp4">Lecture-25</option>
<option value="112104162/mod01lec26.mp4">Lecture-26</option>
<option value="112104162/mod01lec27.mp4">Lecture-27</option>
<option value="112104162/mod01lec28.mp4">Lecture-28</option>
<option value="112104162/Lab-01.mp4">Lab session-01 Advanced manufacturing process for micro sytem fabrication</option>
<option value="112104162/Lab-02.mp4">Lab session-2 EDM micro machening</option>
<option value="112104162/Lab-03.mp4">Lab session-3 EDM microDrilling</option>
<option value="112104162/Lab-04.mp4">Lab session-4 Laser machening process</option>
<option value="112104162/Lab-05.mp4">Lab session-5 Vaccume Assisted Forming</option>
<option value="112104162/Lab-06.mp4">Lab session-6 Vaccume Forming</option>
<option value="112104162/Lab-07.mp4">Lab session-7 Photolithiography</option>
<option value="112104162/Lab-08.mp4">Lab session-8 replication part 1</option>
<option value="112104162/Lab-09.mp4">Lab session-9 replication part 2</option>
<option value="112104162/Lab-10.mp4">Lab session-10 PCB Making</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104172</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Engineering Drawing </strong></td>
	<td><strong>Dr. Anupam Saxena</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112104172/mod01lec01.mp4">Lecture-01 Technical Arts 101</option>
<option value="112104172/mod01lec02.mp4">Lecture-02 Technical Arts 101</option>
<option value="112104172/mod01lec03.mp4">Lecture-03 Technical Arts 101</option>
<option value="112104172/mod01lec04.mp4">Lecture-04 Technical Arts 101</option>
<option value="112104172/mod01lec05.mp4">Lecture-05 Technical Arts 101</option>
<option value="112104172/mod01lec06.mp4">Lecture-06 Technical Arts 101</option>
<option value="112104172/mod01lec07.mp4">Lecture-07  Technical Arts 101</option>
<option value="112104172/mod01lec08.mp4">Lecture-08 Technical Arts 101</option>
<option value="112104172/mod01lec09.mp4">Lecture-09 Technical Arts 101</option>
<option value="112104172/mod01lec10.mp4">Lecture-10 Technical Arts 101</option>
<option value="112104172/mod01lec11.mp4">Lecture-11 Technical Arts 101</option>
<option value="112104172/mod01lec12.mp4">Lecture-12 Technical Arts 101</option>
<option value="112104172/mod01lec13.mp4">Lecture-13 Technical Arts 101</option>
<option value="112104172/mod01lec14.mp4">Lecture-14 Technical Arts 101</option>
<option value="112104172/mod01lec15.mp4">Lecture-15 Technical Arts 101</option>
<option value="112104172/mod01lec16.mp4">Lecture-16 Technical Arts 101</option>
<option value="112104172/mod01lec17.mp4">Lecture-17 Technical Arts 101</option>
<option value="112104172/mod01lec18.mp4">Lecture-18  Technical Arts 101</option>
<option value="112104172/mod01lec19.mp4">Lecture-19 Technical Arts 101</option>
<option value="112104172/mod01lec20.mp4">Lecture-20 Technical Arts 101</option>
<option value="112104172/mod01lec21.mp4">Lecture-21 Technical Arts 101</option>
<option value="112104172/mod01lec22.mp4">Lecture-22 Technical Arts 101</option>
<option value="112104172/mod01lec23.mp4">Lecture-23 Technical Arts 101</option>
<option value="112104172/mod01lec24.mp4">Lecture-24 Technical Arts 101</option>
<option value="112104172/mod01lec25.mp4">Lecture-25 Technical Arts 101</option>
<option value="112104172/mod01lec26.mp4">Lecture-26 Technical Arts 101</option>
<option value="112104172/mod01lec27.mp4">Lecture-27 Technical Arts 101</option>
<option value="112104172/mod01lec28.mp4">Lecture-28 Technical Arts 101</option>
<option value="112104172/mod01lec29.mp4">Lab Session-01</option>
<option value="112104172/mod01lec30.mp4">Lab Session-02</option>
<option value="112104172/mod01lec31.mp4">Lab Session-03</option>
<option value="112104172/mod01lec32.mp4">Lab Session-04</option>
<option value="112104172/mod01lec33.mp4">Lab Session-05</option>
<option value="112104172/mod01lec34.mp4">Lab Session-06</option>
<option value="112104172/mod01lec35.mp4">Lab Session-07</option>
<option value="112104172/mod01lec36.mp4">Lab Session-08</option>
<option value="112104172/mod01lec37.mp4">Lab Session-09</option>
<option value="112104172/mod01lec38.mp4">Lab Session-10</option>
<option value="112104172/mod01lec39.mp4">Lab Session-11</option>
<option value="112104172/mod01lec40.mp4">Lab Session-12</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104181</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>NOC:BioMEMS and Microsystems </strong></td>
	<td><strong>Dr. Shantanu Bhattacharya</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112104181/mod01lec01.mp4">Lecture-01</option>
<option value="112104181/mod01lec02.mp4">Lecture-02</option>
<option value="112104181/mod01lec03.mp4">Lecture-03</option>
<option value="112104181/mod01lec04.mp4">Review Lecture123</option>
<option value="112104181/mod01lec05.mp4">Lecture-04</option>
<option value="112104181/mod01lec06.mp4">Lecture-05</option>
<option value="112104181/mod01lec07.mp4">Lecture-06</option>
<option value="112104181/mod01lec08.mp4">Review Lecture456</option>
<option value="112104181/mod01lec09.mp4">Lecture-07</option>
<option value="112104181/mod01lec10.mp4">Lecture-08</option>
<option value="112104181/mod01lec11.mp4">Lecture-09-10</option>
<option value="112104181/mod01lec12.mp4">Lecture-11</option>
<option value="112104181/mod01lec13.mp4">Lecture-12</option>
<option value="112104181/mod01lec14.mp4">Lecture-13</option>
<option value="112104181/mod01lec15.mp4">Lecture-14</option>
<option value="112104181/mod01lec16.mp4">Lecture-15</option>
<option value="112104181/mod01lec17.mp4">Lecture-16</option>
<option value="112104181/mod01lec18.mp4">Lecture-17</option>
<option value="112104181/mod01lec19.mp4">Lecture-18</option>
<option value="112104181/mod01lec20.mp4">Lecture-19</option>
<option value="112104181/mod01lec21.mp4">Review Lecture-7 to 10</option>
<option value="112104181/mod01lec22.mp4">Review Lecture11to 13</option>
<option value="112104181/mod01lec23.mp4">Review Lecture14to 16</option>
<option value="112104181/mod01lec24.mp4">Lecture-20</option>
<option value="112104181/mod01lec25.mp4">Lecture-21</option>
<option value="112104181/mod01lec26.mp4">Lecture-22</option>
<option value="112104181/mod01lec27.mp4">Lecture-23</option>
<option value="112104181/mod01lec28.mp4">Lecture-24</option>
<option value="112104181/mod01lec29.mp4">Lecture-25</option>
<option value="112104181/mod01lec30.mp4">Review Lecture 17,18,19</option>
<option value="112104181/mod01lec31.mp4">Review Lecture 20,21,22</option>
<option value="112104181/mod01lec32.mp4">Lecture-26</option>
<option value="112104181/mod01lec33.mp4">Lecture-27</option>
<option value="112104181/mod01lec34.mp4">Lecture-28</option>
<option value="112104181/mod01lec35.mp4">Lecture-29</option>
<option value="112104181/mod01lec36.mp4">Lecture-30</option>
<option value="112104181/mod01lec37.mp4">Lecture-31</option>
<option value="112104181/mod01lec38.mp4">Lecture-32</option>
<option value="112104181/mod01lec39.mp4">Lecture-33</option>
<option value="112104181/mod01lec40.mp4">Review lecture 23 24,25</option>
<option value="112104181/mod01lec41.mp4">Review lecture 26 27 28</option>
<option value="112104181/mod01lec42.mp4">Review lecture 29 to 33</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105048</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Machinery fault diagnosis and signal processing </strong></td>
	<td><strong>Prof. A.R. Mohanty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112105048/mod01lec01.mp4">Introduction</option>
<option value="112105048/mod01lec02.mp4">Principles of Maintenance</option>
<option value="112105048/mod01lec03.mp4">Failure Modes Effects and Criticality Analysis</option>
<option value="112105048/mod01lec04.mp4">Fault Diagnostics and Prognostics</option>
<option value="112105048/mod01lec05.mp4">Basics of Machinery Vibration</option>
<option value="112105048/mod01lec06.mp4">Engineering Applications of Vibration</option>
<option value="112105048/mod01lec07.mp4">Rotordynamics</option>
<option value="112105048/mod01lec08.mp4">Time Domain Signal Analysis</option>
<option value="112105048/mod01lec09.mp4">Frequency Domain Signal Analysis</option>
<option value="112105048/mod01lec10.mp4">Computer Aided Data Acquisition</option>
<option value="112105048/mod01lec11.mp4">FFT Analysis</option>
<option value="112105048/mod01lec12.mp4">Modulation and Sidebands</option>
<option value="112105048/mod01lec13.mp4">Envelope Analysis</option>
<option value="112105048/mod01lec14.mp4">Cepstrum Analysis</option>
<option value="112105048/mod01lec15.mp4">Order Analysis</option>
<option value="112105048/mod01lec16.mp4">Basics of Instrumentation</option>
<option value="112105048/mod01lec17.mp4">Sensors and Transducers</option>
<option value="112105048/mod01lec18.mp4">Data Recording and Transmission</option>
<option value="112105048/mod01lec19.mp4">Vibration Transducers</option>
<option value="112105048/mod01lec20.mp4">Vibration Monitoring</option>
<option value="112105048/mod01lec21.mp4">Basics of Noise and Noise Monitoring</option>
<option value="112105048/mod01lec22.mp4">Numericals in Noise Vibration and Data Acquisition</option>
<option value="112105048/mod01lec23.mp4">Unbalance Detection</option>
<option value="112105048/mod01lec24.mp4">Field Balancing</option>
<option value="112105048/mod01lec25.mp4">Misalignment Detection</option>
<option value="112105048/mod01lec26.mp4">Cracked Shaft Detection</option>
<option value="112105048/mod01lec27.mp4">Looseness and Rub Detection</option>
<option value="112105048/mod01lec28.mp4">Ball and Journal Bearings</option>
<option value="112105048/mod01lec29.mp4">Gear Fault Detection</option>
<option value="112105048/mod01lec30.mp4">Fans, Blowers and Compressors</option>
<option value="112105048/mod01lec31.mp4">Pumps and Turbines</option>
<option value="112105048/mod01lec32.mp4">Contaminant Analysis</option>
<option value="112105048/mod01lec33.mp4">Oil Analysis</option>
<option value="112105048/mod01lec34.mp4">Fault Detection in Motors and Transformers</option>
<option value="112105048/mod01lec35.mp4">Motor Current Signature Analysis</option>
<option value="112105048/mod01lec36.mp4">Thermography</option>
<option value="112105048/mod01lec37.mp4">Ultrasonics</option>
<option value="112105048/mod01lec38.mp4">Acoustic Emission and Eddy Current Testing</option>
<option value="112105048/mod01lec39.mp4">Radiography,Dye Penetrant Test and Visual Inspection</option>
<option value="112105048/mod01lec40.mp4">Case Studies</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105053</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Technology of Surface Coating</strong></td>
	<td><strong>Prof. A.K. Chattopadhyay</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112105053/mod01lec01.mp4">Introduction</option>
<option value="112105053/mod01lec02.mp4">CVD Reaction</option>
<option value="112105053/mod01lec03.mp4">Adhesion of Surface Coating</option>
<option value="112105053/mod01lec04.mp4">CVD System</option>
<option value="112105053/mod01lec05.mp4">CDV of Tic</option>
<option value="112105053/mod01lec06.mp4">Chemical Vapour Deposition of Nitride Coating</option>
<option value="112105053/mod01lec07.mp4">Chemical Vapour Deposition of Carbo-Nitride Coating</option>
<option value="112105053/mod01lec08.mp4">Chemical Vapour Deposition of Cromium</option>
<option value="112105053/mod01lec09.mp4">Chemical Vapour Deposition of Aluminium Oxide</option>
<option value="112105053/mod01lec10.mp4">Chemical Vapour Deposition of Diamond</option>
<option value="112105053/mod01lec11.mp4">Vacuum Evaporation Deposition</option>
<option value="112105053/mod01lec12.mp4">Reactive Evaporation Deposition</option>
<option value="112105053/mod01lec13.mp4">Cathodic Arc Evaporation Deposition</option>
<option value="112105053/mod01lec14.mp4">Sputtering</option>
<option value="112105053/mod01lec15.mp4">Magnetron Sputtering</option>
<option value="112105053/mod01lec16.mp4">Unbalanced Magnetron Sputtering</option>
<option value="112105053/mod01lec17.mp4">Radio frequency and pulsed DC sputtering</option>
<option value="112105053/mod01lec18.mp4">Sputter Deposition of Nitride Coating</option>
<option value="112105053/mod01lec19.mp4">Sputter Deposition of Molybdenum Di Sulphide Coating</option>
<option value="112105053/mod01lec20.mp4">Influence of Architecture of Sputter Deposited Molybdenum Di Sulphide Coating</option>
<option value="112105053/mod01lec21.mp4">Electro Plating, Anodizing and Electro-Less Plating</option>
<option value="112105053/mod01lec22.mp4">Coating of Monolayer Abrasive Grain by Electro Plating</option>
<option value="112105053/mod01lec23.mp4">Mechanism of Wetting</option>
<option value="112105053/mod01lec24.mp4">Coating on Ceramics by Wetting</option>
<option value="112105053/mod01lec25.mp4">Coating of Monolayer Abrasive Grain by Wetting</option>
<option value="112105053/mod01lec26.mp4">Coating on Abrasive Grain</option>
<option value="112105053/mod01lec27.mp4">Combustion Spray Process</option>
<option value="112105053/mod01lec28.mp4">Plasma Spray Process</option>
<option value="112105053/mod01lec29.mp4">Mechanical, Chemical and Ion-Assisted Method</option>
<option value="112105053/mod01lec30.mp4">Combustion  Spray Process</option>
<option value="112105053/mod01lec31.mp4">Production of Low Vacuum</option>
<option value="112105053/mod01lec32.mp4">Production of High Vacuum</option>
<option value="112105053/mod01lec33.mp4">Measurement of Low Pressure and Gas Flow in Coating Deposition System</option>
<option value="112105053/mod01lec34.mp4">Physical Characterization</option>
<option value="112105053/mod01lec35.mp4">Assessment of Coating Hardness</option>
<option value="112105053/mod01lec36.mp4">Assessment of Friction and Wear of Coating</option>
<option value="112105053/mod01lec37.mp4">Assessment of Surface Roughness and Thickness of Coating</option>
<option value="112105053/mod01lec38.mp4">Assessment of Adhesion of Coating</option>
<option value="112105053/mod01lec39.mp4">Performance Evaluation of TiN Coated Tool</option>
<option value="112105053/mod01lec40.mp4">Performance Evaluation of HFCVD Diamond Coated Tool</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105182</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Introduction to Fluid Machines and Compressible Flow</strong></td>
	<td><strong>Prof. S.K. Som</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112105182/mod01lec01.mp4">Introduction to Fluid Machines        1</option>
<option value="112105182/mod01lec02.mp4">Energy Transfer in Fluid Machines Part - I</option>
<option value="112105182/mod01lec03.mp4">Energy Transfer in Fluid Machines Part - II</option>
<option value="112105182/mod01lec04.mp4">Energy Transfer  - impulse and Reaction Machines, efficiencies of Fluid Machines</option>
<option value="112105182/mod01lec05.mp4">Principles of Similarity in Fluid Machines</option>
<option value="112105182/mod01lec06.mp4">Concept of specific speed and introduction to Impulse Hydraulic Turbine</option>
<option value="112105182/mod01lec07.mp4">Analysis of force on the Bucket of Pelton wheel and Power Generation</option>
<option value="112105182/mod01lec08.mp4">Specific speed, Governing and Limitation of a Pelton Turbine</option>
<option value="112105182/mod01lec09.mp4">Introduction to reaction Type of Hydraulic Turbine - A Francis Turbine</option>
<option value="112105182/mod01lec10.mp4">Analysis of Force on Francis Runner and Power Generation</option>
<option value="112105182/mod01lec11.mp4">Axial Flow Machine and Draft Tube</option>
<option value="112105182/mod01lec12.mp4">Governing of Reaction Turbine</option>
<option value="112105182/mod01lec13.mp4">Introduction to Rotodynamic Pumps</option>
<option value="112105182/mod01lec14.mp4">Flow and Energy Transfer in a Centrifugal Pump</option>
<option value="112105182/mod01lec15.mp4">Characteristics of a Centrifugal Pump</option>
<option value="112105182/mod01lec16.mp4">Matching of Pump and System Characteristics</option>
<option value="112105182/mod01lec17.mp4">Diffuser and Cavitation</option>
<option value="112105182/mod01lec18.mp4">Axial Flow Pump</option>
<option value="112105182/mod01lec19.mp4">Reciprocating Pump</option>
<option value="112105182/mod01lec20.mp4">Reciprocating Pump Part II</option>
<option value="112105182/mod01lec21.mp4">Centrifugal Compressor Part I</option>
<option value="112105182/mod01lec22.mp4">Centrifugal Compressor Part II</option>
<option value="112105182/mod01lec23.mp4">Centrifugal Compressor Part III</option>
<option value="112105182/mod01lec24.mp4">Axial Flow Compressor Part I</option>
<option value="112105182/mod01lec25.mp4">Axial Flow Compressor Part II</option>
<option value="112105182/mod01lec26.mp4">Introduction to Compressible Flow</option>
<option value="112105182/mod01lec27.mp4">Introduction to Compressible Flow Part II</option>
<option value="112105182/mod01lec28.mp4">Thermodynamic Relations and Speed of Sound</option>
<option value="112105182/mod01lec29.mp4">Disturbance propagation, Stagnation and Sonic Properties</option>
<option value="112105182/mod01lec30.mp4">Effects of Area Variation on Properties in an Isentropic Flow</option>
<option value="112105182/mod01lec31.mp4">Choking in a Converging Nozzle</option>
<option value="112105182/mod01lec32.mp4">Isentropic Flow through Convergent - Divergent Duct</option>
<option value="112105182/mod01lec33.mp4">Normal Shock</option>
<option value="112105182/mod01lec34.mp4">Normal Shock Part II</option>
<option value="112105182/mod01lec35.mp4">Normal Shock Part III</option>
<option value="112105182/mod01lec36.mp4">Normal Shock Part IV</option>
<option value="112105182/mod01lec37.mp4">Normal Shock Part V</option>
<option value="112105182/mod01lec38.mp4">Oblique Shock Part I</option>
<option value="112105182/mod01lec39.mp4">Oblique Shock Part II</option>
<option value="112105182/mod01lec40.mp4">Introduction to Expansion Wave and Prandtl Meyer Flow</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105183</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Introduction to Fluid Mechanics and Fluid Engineering</strong></td>
	<td><strong>Prof. S. Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112105183/mod01lec01.mp4">Introductory Concepts</option>
<option value="112105183/mod01lec02.mp4">Introductory Concepts (Contd.)</option>
<option value="112105183/mod01lec03.mp4">Introductory Concepts (Contd. )</option>
<option value="112105183/mod01lec04.mp4">Viscosity</option>
<option value="112105183/mod01lec05.mp4">Viscosity (Contd.)</option>
<option value="112105183/mod01lec06.mp4">Viscosity (Contd.) and Surface Tension</option>
<option value="112105183/mod01lec07.mp4">Surface Tension (Contd.) and Fluid Statics</option>
<option value="112105183/mod01lec08.mp4">Fluid Statics (Contd.)</option>
<option value="112105183/mod01lec09.mp4">Fluid Statics ( Contd.)</option>
<option value="112105183/mod01lec10.mp4">Fluid Statics (Contd.) and Fluid Under Rigid Body Motion</option>
<option value="112105183/mod01lec11.mp4">Fluid Kinematics</option>
<option value="112105183/mod01lec12.mp4">Fluid Kinematics (Contd.)</option>
<option value="112105183/mod01lec13.mp4">Fluid Kinematics  (Contd.)</option>
<option value="112105183/mod01lec14.mp4">Fluid Kinematics   (Contd.)</option>
<option value="112105183/mod01lec15.mp4">Fluid Kinematics   ( Contd.)</option>
<option value="112105183/mod01lec16.mp4">Dynamics of Inviscid Flows</option>
<option value="112105183/mod01lec17.mp4">Dynamics of Inviscid Flows (Contd.)</option>
<option value="112105183/mod01lec18.mp4">Dynamics of Inviscid Flows  (Contd.)</option>
<option value="112105183/mod01lec19.mp4">Dynamics of Inviscid Flows (Contd. )</option>
<option value="112105183/mod01lec20.mp4">Dynamics of Inviscid Flows ( Contd.)</option>
<option value="112105183/mod01lec21.mp4">Integral Forms of Control Volume Conservation Equations (Reynolds Transport Theorem)</option>
<option value="112105183/mod01lec22.mp4">Integral Forms of Control Volume Conservation Equations (Reynolds Transport Theorem) (Contd.)</option>
<option value="112105183/mod01lec23.mp4">Integral Forms of Control Volume Conservation Equations (Reynolds Transport Theorem) (  Contd.)</option>
<option value="112105183/mod01lec24.mp4">Integral Forms of Control Volume Conservation Equations (Reynolds Transport Theorem) ( Contd .)</option>
<option value="112105183/mod01lec25.mp4">Integral Forms of Control Volume Conservation Equations (Reynolds Transport Theorem) (   Contd .)</option>
<option value="112105183/mod01lec26.mp4">Integral Forms of Control Volume Conservation   Equations (Reynolds Transport Theorem) ( Contd .)</option>
<option value="112105183/mod01lec27.mp4">Integral Forms of Control Volume Conservation Equations (Reynolds Transport Theorem)     ( Contd .)</option>
<option value="112105183/mod01lec28.mp4">Dynamics of Viscous Flows : Navier Stokes Equation</option>
<option value="112105183/mod01lec29.mp4">Dynamics of Viscous Flows : Navier Stokes Equation (Contd.)</option>
<option value="112105183/mod01lec30.mp4">Some Exact Solutions of Navier Stokes Equation</option>
<option value="112105183/mod01lec31.mp4">Some Exact Solutions of Navier Stokes Equation (Contd.)</option>
<option value="112105183/mod01lec32.mp4">Some Exact Solutions of Navier Stokes Equation ( Contd.)</option>
<option value="112105183/mod01lec33.mp4">Introduction to Turbulence</option>
<option value="112105183/mod01lec34.mp4">Introduction to Turbulence (Contd.)</option>
<option value="112105183/mod01lec35.mp4">Introduction to Turbulence (  Contd.)</option>
<option value="112105183/mod01lec36.mp4">Introduction to  Turbulence (  Contd.)</option>
<option value="112105183/mod01lec37.mp4">Boundary Layer Theory</option>
<option value="112105183/mod01lec38.mp4">Boundary Layer Theory (Contd)</option>
<option value="112105183/mod01lec39.mp4">Boundary Layer Theory  (Contd.)</option>
<option value="112105183/mod01lec40.mp4">Boundary Layer Theory (Contd.) and Flow Past Immersed Bodies</option>
<option value="112105183/mod01lec41.mp4">Flow past Immersed Bodies (Contd.)</option>
<option value="112105183/mod01lec42.mp4">Potential Flow Past Immersed Bodies</option>
<option value="112105183/mod01lec43.mp4">Potential Flow (Contd.) and Flow Past Immersed Bodies of Special Shapes</option>
<option value="112105183/mod01lec44.mp4">Flow Past Immersed Bodies (Contd.) and Sports Ball Aerodynamics</option>
<option value="112105183/mod01lec45.mp4">Pipe Flow</option>
<option value="112105183/mod01lec46.mp4">Pipe Flow (Contd.)</option>
<option value="112105183/mod01lec47.mp4">Pipe Flow   (Contd.)</option>
<option value="112105183/mod01lec48.mp4">Principles of Similarity and Dimensional Analysis</option>
<option value="112105183/mod01lec49.mp4">Introduction to Fluid Machines</option>
<option value="112105183/mod01lec50.mp4">Introduction to Fluid Machines (Contd.)</option>
<option value="112105183/mod01lec51.mp4">Introduction to Fluid Machines    (Contd.)</option>
<option value="112105183/mod01lec52.mp4">Introduction to  Fluid Machines    (Contd.)</option>
<option value="112105183/mod01lec53.mp4">Introduction to Fluid Machines  (  Contd. )</option>
<option value="112105183/mod01lec54.mp4">Compressible Flows</option>
<option value="112105183/mod01lec55.mp4">Compressible Flows (Contd.)</option>
<option value="112105183/mod01lec56.mp4">Compressible Flows   (Contd..)</option>
<option value="112105183/mod01lec57.mp4">Compressible Flows   (  Contd..)</option>
<option value="112105183/mod01lec58.mp4">Compressible Flows    (Contd...)</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106056</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Advanced Gas Dynamics </strong></td>
	<td><strong>Dr. Rinku Mukherjee </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112106056/mod01lec01.mp4">Introduction to Gas Dynamics & Review of Basic Thermodynamics</option>
<option value="112106056/mod01lec02.mp4">Review of Basic Thermodynamics Continued</option>
<option value="112106056/mod01lec03.mp4">An introduction to Normal Shocks</option>
<option value="112106056/mod01lec04.mp4">The Mach Number and Compressible Flow</option>
<option value="112106056/mod01lec05.mp4">The relation of physical properties across a normal shock</option>
<option value="112106056/mod01lec06.mp4">Normal Shock in a duct: Throat and Reservoir conditions</option>
<option value="112106056/mod01lec07.mp4">Example Problems in Normal Shocks</option>
<option value="112106056/mod01lec08.mp4">An introduction to Oblique Shocks</option>
<option value="112106056/mod01lec09.mp4">The relation of physical properties across an oblique shock</option>
<option value="112106056/mod01lec10.mp4">Example Problems in Oblique Shocks</option>
<option value="112106056/mod01lec11.mp4">Pressure - Deflection relationship of Shocks</option>
<option value="112106056/mod01lec12.mp4">An introduction to Expansion waves</option>
<option value="112106056/mod01lec13.mp4">Area - Mach Relationship</option>
<option value="112106056/mod01lec14.mp4">Unsteady Shock Waves: The Shock Tube</option>
<option value="112106056/mod01lec15.mp4">The Shock Tube: Propagating Normal Shock and its reflection from end wall</option>
<option value="112106056/mod01lec16.mp4">A review of wave propagation</option>
<option value="112106056/mod01lec17.mp4">Wave propagation: Small Perturbation Theory</option>
<option value="112106056/mod01lec18.mp4">Finite Wave Theory: An introduction to the Method of Characteristics</option>
<option value="112106056/mod01lec19.mp4">The Shock Tube: Propagating Expansion Fan</option>
<option value="112106056/mod01lec20.mp4">The Method of Characteristics</option>
<option value="112106056/mod01lec21.mp4">Application of The Method of Characteristics: Design of a minimum length nozzle</option>
<option value="112106056/mod01lec22.mp4">Application of The Method of Characteristics: Flow through a diverging channel</option>
<option value="112106056/mod01lec23.mp4">Flow over a Wavy wall: Formulation using Perturbation Theory</option>
<option value="112106056/mod01lec24.mp4">Subsonic Flow over a Wavy wall</option>
<option value="112106056/mod01lec25.mp4">Supersonic Flow over a Wavy wall</option>
<option value="112106056/mod01lec26.mp4">Supersonic Flow past a 3D Cone: Axisymmetric/Quasi 2D Flow</option>
<option value="112106056/mod01lec27.mp4">Quasi 2D Flow - I</option>
<option value="112106056/mod01lec28.mp4">Quasi 2D Flow - II</option>
<option value="112106056/mod01lec29.mp4">Similarity Rules and Transformed Coordinate System</option>
<option value="112106056/mod01lec30.mp4">Critical Mach Number and Thin Airfoil Theory</option>
<option value="112106056/mod01lec31.mp4">Example Problem using Thin Airfoil Theory</option>
<option value="112106056/mod01lec32.mp4">Example Problems - 1</option>
<option value="112106056/mod01lec33.mp4">Example Problems - 2</option>
<option value="112106056/mod01lec34.mp4">Example Problems - 3</option>
<option value="112106056/mod01lec35.mp4">Supersonic Flow past a 3D Cone at an angle of attack</option>
<option value="112106056/mod01lec36.mp4">Supersonic Flow past a 3D Cone at an angle of attack: Flow Visualization - I</option>
<option value="112106056/mod01lec37.mp4">Supersonic Flow past a 3D Cone at an angle of attack: Flow Visualization - II</option>
<option value="112106056/mod01lec38.mp4">Supersonic Flow past a 3D Cone at an angle of attack: Governing Equations</option>
<option value="112106056/mod01lec39.mp4">Supersonic Flow past a 3D Cone at an angle of attack: Numerical Procedure</option>
<option value="112106056/mod01lec40.mp4">Supersonic Flow past a 3D Bluff Body at an angle of attack</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106154</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Spray Theory and Applications</strong></td>
	<td><strong>Prof. Mahesh Panchagnula, Dr. Paul E. Sojka  </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112106154/mod01lec01.mp4">Introduction to sprays and their applications</option>
<option value="112106154/mod01lec02.mp4">Spatial versus Temporal Sampling</option>
<option value="112106154/mod01lec03.mp4">Spatial Vs Temporal Sampling example problem</option>
<option value="112106154/mod01lec04.mp4">Steady vs unsteady spray</option>
<option value="112106154/mod01lec05.mp4">Statistical measures on spray</option>
<option value="112106154/mod01lec06.mp4">Discussion on pdf and moments</option>
<option value="112106154/mod01lec07.mp4">Size velocity correlation</option>
<option value="112106154/mod01lec08.mp4">Discussion on Interfacial tension</option>
<option value="112106154/mod01lec09.mp4">Introduction to Atomizers and their design-1</option>
<option value="112106154/mod01lec10.mp4">Introduction to Atomizers and their design-2</option>
<option value="112106154/mod01lec11.mp4">Simple measurement techniques</option>
<option value="112106154/mod01lec12.mp4">Selection of atomizers</option>
<option value="112106154/mod01lec13.mp4">Spray measurement characteristics</option>
<option value="112106154/mod01lec14.mp4">Spray measurements techniques</option>
<option value="112106154/mod01lec15.mp4">Non-intrusive spray measurements techniques</option>
<option value="112106154/mod01lec16.mp4">Non-intrusive spray measurements techniques.</option>
<option value="112106154/mod01lec17.mp4">Linear stability analysis  Introduction</option>
<option value="112106154/mod01lec18.mp4">Linear stability analysis-  Kelvin-Helmhotz instability -1</option>
<option value="112106154/mod01lec19.mp4">Linear stability analysis-  Kelvin-Helmhotz instability -2</option>
<option value="112106154/mod01lec20.mp4">Linear stability analysis-  Kelvin-Helmhotz instability -3</option>
<option value="112106154/mod01lec21.mp4">Linear stability analysis procedure</option>
<option value="112106154/mod01lec22.mp4">Linear stability analysis - Cylindrial jet instability-1</option>
<option value="112106154/mod01lec23.mp4">Linear stability analysis - Cylindrial jet instability-2</option>
<option value="112106154/mod01lec24.mp4">Linear stability analysis - Planar Liquid Sheet instability -1</option>
<option value="112106154/mod01lec25.mp4">Linear stability analysis - Planar Liquid Sheet instability -2</option>
<option value="112106154/mod01lec26.mp4">Design of pressure swirl atomizer-1</option>
<option value="112106154/mod01lec27.mp4">Design of pressure swirl atomizer-2</option>
<option value="112106154/mod01lec28.mp4">Design of pressure swirl atomizer-3</option>
<option value="112106154/mod01lec29.mp4">Design of pressure swirl atomizer-4</option>
<option value="112106154/mod01lec30.mp4">Secondary atomization-Dimensionless parameters</option>
<option value="112106154/mod01lec31.mp4">Secondary atomization-Modes of breakup-1</option>
<option value="112106154/mod01lec32.mp4">Secondary atomization-Modes of breakup-2</option>
<option value="112106154/mod01lec33.mp4">Multiphase modelling</option>
<option value="112106154/mod01lec34.mp4">Multiphase modelling.</option>
<option value="112106154/mod01lec35.mp4">Multiphase flow modelling basics</option>
<option value="112106154/mod01lec36.mp4">Multiphase modelling  Selection of model-1</option>
<option value="112106154/mod01lec37.mp4">Multiphase modelling  Selection of model-2</option>
<option value="112106154/mod01lec38.mp4">Multiphase modelling - Governing equations</option>
<option value="112106154/mod01lec39.mp4">Droplet evaporation</option>
<option value="112106154/mod01lec40.mp4">Droplet combustion</option>
<option value="112106154/mod01lec41.mp4">Spray combustion</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106166</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Gas Dynamics and Propulsion</strong></td>
	<td><strong>Prof. V. Babu </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112106166/mod01lec01.mp4">Introduction</option>
<option value="112106166/mod01lec02.mp4">Introduction / Fundamental Ideas</option>
<option value="112106166/mod01lec03.mp4">Fundamental Ideas</option>
<option value="112106166/mod01lec04.mp4">Fundamental Ideas</option>
<option value="112106166/mod01lec05.mp4">Fundamental Ideas / Normal Shock Waves</option>
<option value="112106166/mod01lec06.mp4">Normal Shock Waves</option>
<option value="112106166/mod01lec07.mp4">Normal Shock Waves / Rayleigh Flow</option>
<option value="112106166/mod01lec08.mp4">Rayleigh Flow</option>
<option value="112106166/mod01lec09.mp4">Rayleigh Flow</option>
<option value="112106166/mod01lec10.mp4">Rayleigh Flow / Fanno Flow</option>
<option value="112106166/mod01lec11.mp4">Fanno Flow</option>
<option value="112106166/mod01lec12.mp4">Fanno Flow</option>
<option value="112106166/mod01lec13.mp4">Fanno Flow / Quasi One Dimensional Flows</option>
<option value="112106166/mod01lec14.mp4">Quasi One Dimensional Flows</option>
<option value="112106166/mod01lec15.mp4">Quasi One Dimensional Flows</option>
<option value="112106166/mod01lec16.mp4">Quasi One Dimensional Flows</option>
<option value="112106166/mod01lec17.mp4">Quasi One Dimensional Flows</option>
<option value="112106166/mod01lec18.mp4">Quasi One Dimensional Flows</option>
<option value="112106166/mod01lec19.mp4">Quasi One Dimensional Flows</option>
<option value="112106166/mod01lec20.mp4">Oblique Shock Waves</option>
<option value="112106166/mod01lec21.mp4">Oblique Shock Waves</option>
<option value="112106166/mod01lec22.mp4">Oblique Shock Waves</option>
<option value="112106166/mod01lec23.mp4">Oblique Shock Waves / Prandtl Meyer Waves</option>
<option value="112106166/mod01lec24.mp4">Prandtl Meyer Waves</option>
<option value="112106166/mod01lec25.mp4">Prandtl Meyer Waves</option>
<option value="112106166/mod01lec26.mp4">Propulsion - an Introduction</option>
<option value="112106166/mod01lec27.mp4">Components of the Gas Turbine Engine</option>
<option value="112106166/mod01lec28.mp4">Components of the Gas Turbine Engine</option>
<option value="112106166/mod01lec29.mp4">Components of the Gas Turbine Engine</option>
<option value="112106166/mod01lec30.mp4">Components of the Gas Turbine Engine</option>
<option value="112106166/mod01lec31.mp4">Components of the Gas Turbine Engine / Thermodynamic Analysis of the Engine</option>
<option value="112106166/mod01lec32.mp4">Thermodynamic Analysis of the Engine</option>
<option value="112106166/mod01lec33.mp4">Thermodynamic Analysis of the Engine</option>
<option value="112106166/mod01lec34.mp4">Calculations for Thrust and Fuel Consumption</option>
<option value="112106166/mod01lec35.mp4">Calculations for Thrust and Fuel Consumption</option>
<option value="112106166/mod01lec36.mp4">Calculations for Thrust and Fuel Consumption /  Emerging Trends</option>
<option value="112106166/mod01lec37.mp4">Emerging Trends / Ramjets</option>
<option value="112106166/mod01lec38.mp4">Ramjets</option>
<option value="112106166/mod01lec39.mp4">Ramjets / Scramjets</option>
<option value="112106166/mod01lec40.mp4">Scramjets</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106169</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Microfluidics </strong></td>
	<td><strong>Dr. Ashis Kumar Sen </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112106169/mod01lec01.mp4"> Introduction and Scaling</option>
<option value="112106169/mod01lec02.mp4"> Scaling</option>
<option value="112106169/mod01lec03.mp4"> Micro-scale fluid mechanics</option>
<option value="112106169/mod01lec04.mp4"> Micro-scale fluid mechanics (continued)</option>
<option value="112106169/mod01lec05.mp4"> Micro-scale fluid mechanics (continued.)</option>
<option value="112106169/mod01lec06.mp4"> Micro-scale fluid mechanics (continued..)</option>
<option value="112106169/mod01lec07.mp4"> Micro-scale fluid mechanics (continued...)</option>
<option value="112106169/mod01lec08.mp4"> Micro-scale fluid mechanics (continued.)</option>
<option value="112106169/mod01lec09.mp4"> Micro-scale fluid mechanics (continued..)</option>
<option value="112106169/mod01lec10.mp4"> Micro-scale fluid mechanics (continued..)</option>
<option value="112106169/mod01lec11.mp4"> Micro-scale fluid mechanics (continued\85)</option>
<option value="112106169/mod01lec12.mp4"> Capillary Flows</option>
<option value="112106169/mod01lec13.mp4"> Capillary Flows (continued)</option>
<option value="112106169/mod01lec14.mp4"> Capillary Flows and Electrokinetics</option>
<option value="112106169/mod01lec15.mp4"> Electrokinetics</option>
<option value="112106169/mod01lec16.mp4"> Electrokinetics (continued)</option>
<option value="112106169/mod01lec17.mp4"> Electrokinetics (continued.)</option>
<option value="112106169/mod01lec18.mp4"> Electrokinetics (continued...)</option>
<option value="112106169/mod01lec19.mp4"> Electrokinetics (continued.)</option>
<option value="112106169/mod01lec20.mp4"> Electrokinetics (continued...)</option>
<option value="112106169/mod01lec21.mp4"> Electrokinetics (continued.)</option>
<option value="112106169/mod01lec22.mp4"> Microfabrication Techniques (continued)</option>
<option value="112106169/mod01lec23.mp4"> Microfabrication Techniques (continued.)</option>
<option value="112106169/mod01lec24.mp4"> Microfabrication Techniques (continued..)</option>
<option value="112106169/mod01lec25.mp4"> Microfabrication Techniques (continued)</option>
<option value="112106169/mod01lec26.mp4"> Microfabrication Techniques (continued.)</option>
<option value="112106169/mod01lec27.mp4"> Microfabrication Techniques (continued..)</option>
<option value="112106169/mod01lec28.mp4"> Microfabrication Techniques (continued\85)</option>
<option value="112106169/mod01lec29.mp4"> Micropump</option>
<option value="112106169/mod01lec30.mp4"> Micropump (continued)</option>
<option value="112106169/mod01lec31.mp4"> Microvalve</option>
<option value="112106169/mod01lec32.mp4"> Microvalve (continued)</option>
<option value="112106169/mod01lec33.mp4"> Microvalve (continued.)</option>
<option value="112106169/mod01lec34.mp4"> Micro Flow Sensor and Micro mixers</option>
<option value="112106169/mod01lec35.mp4"> Micro mixers</option>
<option value="112106169/mod01lec36.mp4"> Micro mixers (continued)</option>
<option value="112106169/mod01lec37.mp4"> Micro droplets</option>
<option value="112106169/mod01lec38.mp4"> Micro reactors (continued)</option>
<option value="112106169/mod01lec39.mp4"> Micro needles and Microparticle separation</option>
<option value="112106169/mod01lec40.mp4"> Few applications of microfluidics</option>
<option value="112106169/mod01lec41.mp4"> Lab Demo</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106170</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong> Convective Heat Transfer</strong></td>
	<td><strong>Dr. Arvind Pattamatta, Prof. Ajit K. Kolar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112106170/mod01lec01.mp4">Introduction to convective heat transfer - Part 1</option>
<option value="112106170/mod01lec02.mp4">Introduction to convective heat transfer - Part 2</option>
<option value="112106170/mod01lec03.mp4">Continuity Equation</option>
<option value="112106170/mod01lec04.mp4">Momentum and Energy Equations</option>
<option value="112106170/mod01lec05.mp4">Energy Equation</option>
<option value="112106170/mod01lec06.mp4">Reynolds Transport Theorem</option>
<option value="112106170/mod01lec07.mp4">Entrophy Generation and streamfunction-vorticity formulation</option>
<option value="112106170/mod01lec08.mp4">Couette flow - Part 1</option>
<option value="112106170/mod01lec09.mp4">Couette flow - Part 2</option>
<option value="112106170/mod01lec10.mp4">Couette flow - Part 2</option>
<option value="112106170/mod01lec11.mp4">Couette flow - Part 3</option>
<option value="112106170/mod01lec12.mp4">Boundary layer approximation</option>
<option value="112106170/mod01lec13.mp4">Laminar External flow past flat plate (Blasius Similarity Solution)</option>
<option value="112106170/mod01lec14.mp4">Numerical solution to the Blasius equation and similarity solution to heat transfer</option>
<option value="112106170/mod01lec15.mp4">Pohlhausen similarity solution and flows including pressure gradient (Falkner-Skan)</option>
<option value="112106170/mod01lec16.mp4">Falkner skan solutions for heat transfer</option>
<option value="112106170/mod01lec17.mp4">Similarity solution for flow and heat transfer with transpiration at walls</option>
<option value="112106170/mod01lec18.mp4">Thermal boundary layer in high speed flows</option>
<option value="112106170/mod01lec19.mp4">Similarity solution for flow and heat transfer with transpiration at walls</option>
<option value="112106170/mod01lec20.mp4">Thermal boundary layer in high speed flows</option>
<option value="112106170/mod01lec21.mp4">Approximate(Integral) methods for laminar external flow and heat transfer</option>
<option value="112106170/mod01lec22.mp4">Heat transfer across a circular cylinder: Walz approximation</option>
<option value="112106170/mod01lec23.mp4">Duhamel's method for varying surface temperature</option>
<option value="112106170/mod01lec24.mp4">Laminar External heat transfer with non uniform surface temperature</option>
<option value="112106170/mod01lec25.mp4">Laminar internal forced convection - fundamentals</option>
<option value="112106170/mod01lec26.mp4">Hydrodynamically and thermally fully developed internal laminar flows</option>
<option value="112106170/mod01lec27.mp4">Fully developed laminar internal flow and heat transfer</option>
<option value="112106170/mod01lec28.mp4">Shooting method for fully developed heat transfer and thermal entry length problem</option>
<option value="112106170/mod01lec29.mp4">Thermal entry length problem with plug velocity profile: Graetz problem</option>
<option value="112106170/mod01lec30.mp4">Extended Graetz problem for parabolic velocity profile</option>
<option value="112106170/mod01lec31.mp4">Extended Graetz problem</option>
<option value="112106170/mod01lec32.mp4">Extended Graetz problem with wall flux boundary condition</option>
<option value="112106170/mod01lec33.mp4">Approximate method for laminar internal flows</option>
<option value="112106170/mod01lec34.mp4">Integral method for thermal entry length problem</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106177</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Introduction to Explosions and Explosion Safety</strong></td>
	<td><strong>Prof. K. Ramamurthi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112106177/mod01lec01.mp4">Loud Bang and Disruption</option>
<option value="112106177/mod01lec02.mp4">Blast Wave in an Explosion: Predictions from Dimensional Considerations</option>
<option value="112106177/mod01lec03.mp4">Typical Examples of Explosions and Classification</option>
<option value="112106177/mod01lec04.mp4">Shock Hugoniot and Rayleigh Line</option>
<option value="112106177/mod01lec05.mp4">Properties behind a Constant Velocity Shock</option>
<option value="112106177/mod01lec06.mp4">Blast waves:Concentration of Mass at the Front,Snow Plow Approximation,Energy conservation ina Blast wave</option>
<option value="112106177/mod01lec07.mp4">Blast waves: Decay of a strong Blast wave,Explosion Length, Sach's Scaling,Over pressure,Cranz Hopkinson Scaling law of Overpressure</option>
<option value="112106177/mod01lec08.mp4">Blast Waves: Overpressure and Impulse in the Near and Far Field, Examples,Introduction to Impulse</option>
<option value="112106177/mod01lec09.mp4">Blast Waves: Non-dimensional Impulse, Cranz -Hopkinson Scaling, Missiles, Fragments and Shrapnel, Craters, Examples</option>
<option value="112106177/mod01lec10.mp4">Blast Waves: Non-dimensional Impulse, Cranz -Hopkinson Scaling, Missiles, Fragments and Shrapnel, Craters, Examples</option>
<option value="112106177/mod01lec11.mp4">Blast Waves: Interaction with Objects, Reflection and Transmission of Blast Waves, Impedance</option>
<option value="112106177/mod01lec12.mp4">Blast Waves: Amplification of Reflected Blast Waves; Role of Impedance, Spalling, Damage to Organs containing Air, Mushroom Cloud in an Explosion, Examples</option>
<option value="112106177/mod01lec13.mp4">Blast Waves: Damage from Blast Waves, Examples, Multiple Spikes in an Impulse, Iso-damage Curve on an Overpressure- Impulse Diagram, Complex Structures</option>
<option value="112106177/mod01lec14.mp4">Energy Release in a Chemical Reaction:  Moles, Internal Chemical Energy, Standard Heats of Formation</option>
<option value="112106177/mod01lec15.mp4">Energy Release: Stoichiometry, Equivalence Ratio and Heat Release in Fuel Rich and Oxidizer Rich Compounds</option>
<option value="112106177/mod01lec16.mp4">Energy Release: Examples of Energy Release Calculations, Higher and Lower Calorific Values, Internal Energy of Formation</option>
<option value="112106177/mod01lec17.mp4">Rate of Energy Release: Concentration, Activation Energy, Energy Release Profile</option>
<option value="112106177/mod01lec18.mp4">Thermal Theory of Explosion</option>
<option value="112106177/mod01lec19.mp4">Rate of Energy Release: Concentration, Activation Energy, Energy Release Profile</option>
<option value="112106177/mod01lec20.mp4">Thermal Theory of Explosion</option>
<option value="112106177/mod01lec21.mp4">Thermal Theory</option>
<option value="112106177/mod01lec22.mp4">Case Histories of Explosions involving Volatile Liquids</option>
<option value="112106177/mod01lec23.mp4">Detonation</option>
<option value="112106177/mod01lec24.mp4">Structure of Detonations</option>
<option value="112106177/mod01lec25.mp4">Realizable States in a Detonation:</option>
<option value="112106177/mod01lec26.mp4">One Dimensional Model of Detonation</option>
<option value="112106177/mod01lec27.mp4">Case Histories of Explosions involving Detonation or Quasi-Detonation</option>
<option value="112106177/mod01lec28.mp4">Explosions in Confined and Unconfined Geometries</option>
<option value="112106177/mod01lec29.mp4">Dust Explosions: I</option>
<option value="112106177/mod01lec30.mp4">Dust Explosions: II</option>
<option value="112106177/mod01lec31.mp4">Physical Explosions</option>
<option value="112106177/mod01lec32.mp4">Rupture of Cryogenic Storage Vessels and Pressure Vessels</option>
<option value="112106177/mod01lec33.mp4">Condensed Phased Explosives Based on Hydrocarbons</option>
<option value="112106177/mod01lec34.mp4">Condensed Phase Explosives and their Properties</option>
<option value="112106177/mod01lec35.mp4">TNT Equivalence and Yield of an Explosion</option>
<option value="112106177/mod01lec36.mp4">Atmospheric Dispersion</option>
<option value="112106177/mod01lec37.mp4">Modeling Atmospheric Dispersion</option>
<option value="112106177/mod01lec38.mp4">Explosions Involving Atmospheric Dispersion</option>
<option value="112106177/mod01lec39.mp4">Quantification of Damages in an Explosion</option>
<option value="112106177/mod01lec40.mp4">Risk Analysis for an Explosion</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106180</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>NOC:Engineering Mechanics Statics and Dynamics </strong></td>
	<td><strong>Prof. Mahesh Panchagnula</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112106180/mod01lec01.mp4">Introduction to the course</option>
<option value="112106180/mod01lec02.mp4">Newton's laws</option>
<option value="112106180/mod01lec03.mp4">Equilibrium</option>
<option value="112106180/mod01lec04.mp4">Example 1 - Statics</option>
<option value="112106180/mod01lec05.mp4">Example 2 - Rigid Body Systems</option>
<option value="112106180/mod01lec06.mp4">Example 3 - Rigid Body Systems</option>
<option value="112106180/mod02lec07.mp4">Structural Systems with rigid bodies</option>
<option value="112106180/mod02lec08.mp4">Types of 1-D Structural Elements</option>
<option value="112106180/mod02lec09.mp4">Axial members</option>
<option value="112106180/mod02lec10.mp4">Axial members</option>
<option value="112106180/mod02lec11.mp4">Analysis of the truss system</option>
<option value="112106180/mod03lec12.mp4">Stability of Structural systems</option>
<option value="112106180/mod03lec13.mp4">Beams - Example 1</option>
<option value="112106180/mod03lec14.mp4">Beams - BMD and SFD</option>
<option value="112106180/mod04lec15.mp4">Beams - Loading, Shear and Bending Moment Relations</option>
<option value="112106180/mod04lec16.mp4">Static Friction</option>
<option value="112106180/mod05lec17.mp4">Friction - Solving Problems</option>
<option value="112106180/mod05lec18.mp4">Particle Kinematics - 1</option>
<option value="112106180/mod05lec19.mp4">Friction - Solving Problems</option>
<option value="112106180/mod05lec20.mp4">Particle Kinematics - 1</option>
<option value="112106180/mod05lec21.mp4">Particle Kinematics - 2 (Example)</option>
<option value="112106180/mod05lec22.mp4">Rotational Motion (Example 2)</option>
<option value="112106180/mod06lec23.mp4">Dynamics (Introduction)</option>
<option value="112106180/mod06lec24.mp4">Dynamics -Example 1</option>
<option value="112106180/mod06lec25.mp4">Dynamics -Example 2</option>
<option value="112106180/mod06lec26.mp4">Dynamics -Example 3</option>
<option value="112106180/mod06lec27.mp4">Dynamics -Example 4</option>
<option value="112106180/mod07lec28.mp4">Center of Percussion - Example</option>
<option value="112106180/mod07lec29.mp4">Impulse/Momentum - Example 1</option>
<option value="112106180/mod07lec30.mp4">Impulse/Momentum - Example 2</option>
<option value="112106180/mod07lec31.mp4">Impulse/Momentum - Example 3</option>
<option value="112106180/mod07lec32.mp4">Impulse/Momentum - Example 4</option>
<option value="112106180/mod08lec33.mp4">Work Energy Methods - Example 1</option>
<option value="112106180/mod08lec34.mp4">Work Energy Methods - Example 2</option>
<option value="112106180/mod08lec35.mp4">Work Energy Methods - Example 3</option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107079</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computational Fluid Dynamics</strong></td>
	<td><strong>Dr. K. M. Singh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112107079/mod01lec01.mp4">General Introduction: Historical Background and Spectrum of Applications</option>
<option value="112107079/mod01lec02.mp4">CFD: Simulation Process and Course Outline</option>
<option value="112107079/mod02lec01.mp4">Conservation Laws and Mathematical Preliminaries</option>
<option value="112107079/mod02lec02.mp4">Mass Conservation: Continuity Equation</option>
<option value="112107079/mod02lec03.mp4">Momentum Equation: Newtons 2nd Law</option>
<option value="112107079/mod02lec04.mp4">Momentum Equation: Navier-Stokes Equations</option>
<option value="112107079/mod02lec05.mp4">Navier-Stokes Equation and its Simplified Forms</option>
<option value="112107079/mod02lec06.mp4">Energy and Scalar Transport Equations</option>
<option value="112107079/mod02lec07.mp4">Scalar Transport,  Mathematical Classification and Boundary Conditions</option>
<option value="112107079/mod03lec01.mp4">Scalar Transport,  Mathematical Classification and Boundary Conditions</option>
<option value="112107079/mod03lec02.mp4">Finite Difference Method: Methodology and Grid Notation</option>
<option value="112107079/mod03lec03.mp4">Finite Difference Approximation of First Order Derivatives</option>
<option value="112107079/mod03lec04.mp4">Finite Difference Approximation of Second Order Derivatives</option>
<option value="112107079/mod03lec05.mp4">Finite Difference Approximation of Second Order Derivatives-2</option>
<option value="112107079/mod03lec06.mp4">Approximation of  Mixed Derivatives and Multi-Dimensional F.D. Formulae</option>
<option value="112107079/mod03lec07.mp4">Implementation of  Boundary Conditions and Finite Difference Algebraic System</option>
<option value="112107079/mod03lec08.mp4">Applications of FDM to Scalar Transport Problems-1</option>
<option value="112107079/mod03lec09.mp4">Applications of FDM to Scalar Transport Problems-2</option>
<option value="112107079/mod03lec10.mp4">Applications of FDM to Scalar Transport Problems-1</option>
<option value="112107079/mod03lec11.mp4">Applications of FDM to Scalar Transport Problems-2</option>
<option value="112107079/mod03lec12.mp4">Application of FDM to Advection-Diffusion and Computer Implementation Aspects</option>
<option value="112107079/mod04lec01.mp4">Solution of Discrete Algebraic Systems</option>
<option value="112107079/mod04lec02.mp4">Direct and Basic Iterative Methods for Linear Systems</option>
<option value="112107079/mod04lec03.mp4">Accelerated Iterative Methods for Linear Systems</option>
<option value="112107079/mod05lec01.mp4">Two Level and Multi-Level Methods for First Order IVPs</option>
<option value="112107079/mod05lec02.mp4">Two Level and Multi-Level Methods for First Order IVPs-2</option>
<option value="112107079/mod05lec03.mp4">Application to Unsteady Transport Problems</option>
<option value="112107079/mod06lec01.mp4">Introduction to Finite Volume Method</option>
<option value="112107079/mod06lec02.mp4">Finite Volume Interpolation Schemes</option>
<option value="112107079/mod06lec03.mp4">Application of FVM to Scalar Transport</option>
<option value="112107079/mod07lec01.mp4">Introduction to Finite Element Method</option>
<option value="112107079/mod07lec02.mp4">Finite Element Shape Functions and Numerical Integration</option>
<option value="112107079/mod07lec03.mp4">Finite Element Shape Functions and Numerical Integration-2</option>
<option value="112107079/mod07lec04.mp4">Application of FEM to Scalar Transport</option>
<option value="112107079/mod08lec01.mp4">Special Features of Navier-Stokes Equations</option>
<option value="112107079/mod08lec02.mp4">Time Integration Techniques for Navier-Stokes Equations</option>
<option value="112107079/mod08lec03.mp4">Implicit Pressure Correction Methods</option>
<option value="112107079/mod08lec04.mp4">SIMPLEC, SIMPLER  and Fractional Step Methods</option>
<option value="112107079/mod09lec01.mp4">Turbulent Flows: Features and Simulation Strategies</option>
<option value="112107079/mod09lec02.mp4">Reynolds Averaging and RANS Simulation Models</option>
<option value="112107079/mod09lec03.mp4">RANS Turbulence Models and Large Eddy Simulation</option>
<option value="112107079/mod10lec01.mp4">Finite Element Shape Functions and Numerical Integration-2</option>
<option value="112107079/mod10lec02.mp4">Application of FEM to Scalar Transport</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107087</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Vibration control</strong></td>
	<td><strong>Dr. S. P. Harsha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112107087/mod01lec01.mp4">Basics of Vibrations for Simple Mechanical Systems</option>
<option value="112107087/mod01lec02.mp4">Introduction to Damping in Free and Force Vibrations</option>
<option value="112107087/mod01lec03.mp4">Free and Forced Vibrations of Two Degree of Systems</option>
<option value="112107087/mod01lec04.mp4">Multi Degree of Freedom Systems</option>
<option value="112107087/mod02lec01.mp4">Reduction at source-1</option>
<option value="112107087/mod02lec02.mp4">Reduction at source-2</option>
<option value="112107087/mod02lec03.mp4">Reduction at source-3</option>
<option value="112107087/mod02lec04.mp4">Feedback Control System-1</option>
<option value="112107087/mod02lec05.mp4">Shunt Damping</option>
<option value="112107087/mod03lec01.mp4">Shunt Damping</option>
<option value="112107087/mod03lec02.mp4">Vibration Isolation-1</option>
<option value="112107087/mod03lec03.mp4">Vibration Isolation-2</option>
<option value="112107087/mod04lec01.mp4">Vibration Isolation-3</option>
<option value="112107087/mod04lec02.mp4">Source Classification</option>
<option value="112107087/mod04lec03.mp4">Self Excitation Vibration</option>
<option value="112107087/mod04lec04.mp4">Flow Induction Vibration</option>
<option value="112107087/mod04lec05.mp4">Field Balancing of Rigid / Flexible Rotors</option>
<option value="112107087/mod04lec06.mp4">Damping: Models and Measures  I</option>
<option value="112107087/mod04lec07.mp4">Field Balancing of Rigid / Flexible Rotors</option>
<option value="112107087/mod05lec01.mp4">Damping: Models and Measures  I</option>
<option value="112107087/mod05lec02.mp4">Damping: Models and Measures  II</option>
<option value="112107087/mod05lec03.mp4">Design for Enhanced Material Damping</option>
<option value="112107087/mod06lec01.mp4">Basics of Passive Vibration Control</option>
<option value="112107087/mod06lec02.mp4">Design of Absorber</option>
<option value="112107087/mod06lec03.mp4">Shock Absorber</option>
<option value="112107087/mod06lec04.mp4">Isolators with Stiffness and Damping</option>
<option value="112107087/mod07lec01.mp4">Basics of Active Vibration Control</option>
<option value="112107087/mod07lec02.mp4">Piezoelectric Material  I</option>
<option value="112107087/mod07lec03.mp4">Piezoelectric Material  II: Applications</option>
<option value="112107087/mod07lec04.mp4">Piezoelectric Accelerometers</option>
<option value="112107087/mod07lec05.mp4">Electro-rheological (ER) Fluids</option>
<option value="112107087/mod07lec06.mp4">Magneto-rheological (MR) Fluids</option>
<option value="112107087/mod07lec07.mp4">Magneto and Electrostrictive Materials</option>
<option value="112107087/mod07lec08.mp4">Shape Memory Alloy</option>
<option value="112107087/mod07lec09.mp4">Electro-Magnetics</option>
<option value="112107087/mod07lec10.mp4">Numerical Problems.</option>
<option value="112107087/mod08lec01.mp4">Basics of Vibration Measurement System</option>
<option value="112107087/mod08lec02.mp4">Data Acquisition</option>
<option value="112107087/mod08lec03.mp4">Fourier Transformation</option>
<option value="112107087/mod08lec04.mp4">Filters</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112108092</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Micro and Smart Systems </strong></td>
	<td><strong>Prof. K.N. Bhat, Prof. G.K. Anathasuresh, Prof. S. Gopalakrishnan, Dr. K.J. Vinoy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="112108092/mod01lec01.mp4">Glimpses of Microsystems: Scaling Effects</option>
<option value="112108092/mod01lec02.mp4">Smart Materials and Systems</option>
<option value="112108092/mod01lec03.mp4">Microsensors</option>
<option value="112108092/mod01lec04.mp4">Microactuators</option>
<option value="112108092/mod01lec05.mp4">Microsystems: some Examples</option>
<option value="112108092/mod01lec06.mp4">Smart systems Application and Structural Health Monitoring</option>
<option value="112108092/mod02lec07.mp4">Microfabrication Technologies</option>
<option value="112108092/mod02lec08.mp4">Thin-film Materials and their Deposition</option>
<option value="112108092/mod02lec09.mp4">Approaches for Pattern Transfer</option>
<option value="112108092/mod02lec10.mp4">Approaches for Pattern Transfer</option>
<option value="112108092/mod02lec11.mp4">Surface Micromachining of Microstructures</option>
<option value="112108092/mod02lec12.mp4">Bulk Micromachining of Microsystems</option>
<option value="112108092/mod02lec13.mp4">Extended Approaches for Working Microsystems</option>
<option value="112108092/mod02lec14.mp4">Non-conventional Approaches for Microsystems</option>
<option value="112108092/mod03lec15.mp4">Packaging of Microsystems</option>
<option value="112108092/mod03lec16.mp4">Deformation Strains and Stresses</option>
<option value="112108092/mod03lec17.mp4">Microdevice Suspensions: Lumped Modeling</option>
<option value="112108092/mod03lec18.mp4">Residual Stress and Stress Gradients</option>
<option value="112108092/mod03lec19.mp4">Microdevice Suspensions: Lumped Modeling</option>
<option value="112108092/mod03lec20.mp4">Residual Stress and Stress Gradients</option>
<option value="112108092/mod03lec21.mp4">Torsion and Twist</option>
<option value="112108092/mod03lec22.mp4">Modelling of Coupled Electrostatic Microsystems: Part -2</option>
<option value="112108092/mod03lec23.mp4">Coupled Electrothermal-elastic Modelling</option>
<option value="112108092/mod03lec24.mp4">Modelling of Microsystems: Scaling Effects</option>
<option value="112108092/mod04lec25.mp4">Finite Element Method and Microsystems</option>
<option value="112108092/mod04lec26.mp4">Theoretical Basis for the Finite Element Method</option>
<option value="112108092/mod04lec27.mp4">Energy Theorems and Weak Form of the Governing Equation</option>
<option value="112108092/mod04lec28.mp4">Finite Element Equation Development and Shape Functions</option>
<option value="112108092/mod04lec29.mp4">Isoparametric FE Formulation and some Examples</option>
<option value="112108092/mod04lec30.mp4">Finite Element for Structures with Piezoelectric Material</option>
<option value="112108092/mod05lec31.mp4">Semiconductor Device Physics</option>
<option value="112108092/mod05lec32.mp4">BJT and MOSFET Characteristics and Op-Amps</option>
<option value="112108092/mod05lec33.mp4">Op-Amp Circuits and Signal conditioning for Microsystems Devices</option>
<option value="112108092/mod05lec34.mp4">Control and Microsystems</option>
<option value="112108092/mod05lec35.mp4">Vibration Control of a Beam</option>
<option value="112108092/mod05lec36.mp4">Signal Conditioning Circuits and Integration of Microsystems and Microelectronics</option>
<option value="112108092/mod05lec37.mp4">Pressure Sensor Design Concepts, Processing, and Packaging: Part -1</option>
<option value="112108092/mod05lec38.mp4">Pressure Sensor Design Concepts, Processing, and Packaging: Part -2</option>
<option value="112108092/mod05lec39.mp4">Pressure Sensor Design Concepts, Processing, and Packaging: Part -3 Capacitive Micro-accelerometer: Part -1</option>
<option value="112108092/mod05lec40.mp4">Capacitive Micro-accelerometer: Part -2</option>
</select></td>
	
	</tr>
	</form>






<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112104029</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Biomicroelectromechanical systems</strong></td>
	<td><strong>Dr. Shantanu Bhattacharya</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104029/mod01lec01.mp4">Lecture_01</option>
      
      <option  value="112104029/mod01lec02.mp4">Lecture-02</option>
      
      <option  value="112104029/mod01lec03.mp4">Lecture-03</option>
      
      <option  value="112104029/mod01lec04.mp4">Lecture-04</option>
      
      <option  value="112104029/mod01lec05.mp4">Lecture-05</option>
      
      <option  value="112104029/mod01lec06.mp4">Lecture-06</option>
      
      <option  value="112104029/mod01lec07.mp4">Lecture-07</option>
      
      <option  value="112104029/mod01lec08.mp4">Lecture-08</option>
      
      <option  value="112104029/Lec-09-10.mp4">Lecture-09-10</option>
      
      <option  value="112104029/mod01lec11.mp4">Lecture-11</option>
      
      <option  value="112104029/mod01lec13.mp4">Lecture-13</option>
      
      <option  value="112104029/mod01lec14.mp4">Lecture-14</option>
      
      <option  value="112104029/mod01lec15.mp4">Lecture-15</option>
      
      <option  value="112104029/mod01lec16.mp4">Lecture-16</option>
      
      <option  value="112104029/mod01lec17.mp4">Lecture-17</option>
      
      <option  value="112104029/mod01lec18.mp4">Lecture-18</option>
      
      <option  value="112104029/mod01lec19.mp4">Lecture-19</option>
      
      <option  value="112104029/mod01lec20.mp4">Lecture-20</option>
      
      <option  value="112104029/mod01lec21.mp4">Lecture-21</option>
      
      <option  value="112104029/mod01lec22.mp4">Lecture-22</option>
      
      <option  value="112104029/mod01lec23.mp4">Lecture-23</option>
      
      <option  value="112104029/mod01lec24.mp4">Lecture-24</option>
      
      <option  value="112104029/mod01lec25.mp4">Lecture-25</option>
      
      <option  value="112104029/mod01lec26.mp4">Lecture-26</option>
      
      <option  value="112104029/mod01lec27.mp4">Lecture-27</option>
      
      <option  value="112104029/mod01lec28.mp4">Lecture-28</option>
      
      <option  value="112104029/mod01lec29.mp4">Lecture-29</option>
      
      <option  value="112104029/mod01lec30.mp4">Lecture-30</option>
      
      <option  value="112104029/mod01lec31.mp4">Lecture-31</option>
      
      <option  value="112104029/mod01lec32.mp4">Lecture-32</option>
      
      <option  value="112104029/mod01lec33.mp4">Lecture-33</option>
      
      <option  value="112104029/mod01lec34.mp4">Lecture-34</option>
      
      <option  value="112104029/mod01lec35.mp4">Lecture-35</option>
      
      <option  value="112104029/mod01lec36.mp4">Lecture-36</option>
      
      <option  value="112104029/mod01lec37.mp4">Lecture-37</option>
      
      <option  value="112104029/mod01lec38.mp4">Lecture-38</option>
      
      <option  value="112104029/mod01lec39.mp4">Lecture-39</option>
      
      <option  value="112104029/mod01lec40.mp4">Lecture-40</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104030</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computational Fluid Dynamics and Heat Transfer</strong></td>
	<td><strong>Prof. Gautam Biswas</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104030/lecture1/1_1.htm">Finite Difference Method </option>
      
      <option  value="112104030/lecture2/2_1.htm">Elementary Finite Difference Quotients</option>
      
      <option  value="112104030/lecture3/3_1.htm">Basic Aspects of Finite -Difference Equations </option>
      
      <option  value="112104030/lecture4/4_1.htm">Consistency</option>
      
      <option  value="112104030/lecture5/5_1.htm">Explicit and Implicit Methods </option>
      
      <option  value="112104030/lecture6/6_1.htm">ADI Method</option>
      
      <option  value="112104030/lecture7/7_1.htm">Errors and Stability Analysis</option>
      
      <option  value="112104030/lecture8/8_1.htm">Stability of Hyperbolic and Elliptic Equations</option>
      
      <option  value="112104030/lecture9/9_1.htm">Stability and Fluid Flow Modeling</option>
      
      <option  value="112104030/lecture10/10_1.htm">Conservative Property </option>
      
      <option  value="112104030/lecture11/11_1.htm">The upwind scheme</option>
      
      <option  value="112104030/lecture12/12_1.htm">Second Upwind Differencing or Hybrid Scheme </option>
      
      <option  value="112104030/lecture13/13_1.htm">Improvement of Discretization Schemes</option>
      
      <option  value="112104030/lecture14/14_1.htm">The Basic Technique </option>
      
      <option  value="112104030/lecture15/15_1.htm">A Generalized Approach for Finite Volume Methods </option>
      
      <option  value="112104030/lecture16/16_1.htm">Finite Volume Discretization of Equations with Second Derivatives </option>
      
      <option  value="112104030/lecture17/17_1.htm">Finite Volume Discretization of Equations with Second Derivatives(contd...)</option>
      
      <option  value="112104030/lecture18/18_1.htm">Introduction and Formulation</option>
      
      <option  value="112104030/lecture19/19_1.htm">Formulation of Weighted Residual Method </option>
      
      <option  value="112104030/lecture20/20_1.htm">Shape Functions and their Evaluation </option>
      
      <option  value="112104030/lecture21/21_1.htm">More about Shape functions and their evaluation </option>
      
      <option  value="112104030/lecture22/22_1.htm">Boundary Conditions and Other Important Issues </option>
      
      <option  value="112104030/lecture23/23_1.htm">The unsteady problem</option>
      
      <option  value="112104030/lecture24/24_1.htm">Vorticity-stream function approach for solving Navier-Stokes Equations </option>
      
      <option  value="112104030/lecture25/25_1.htm">Boundary condition</option>
      
      <option  value="112104030/lecture26/26_1.htm">Application to Curvilinear Geometries </option>
      
      <option  value="112104030/lecture27/27_1.htm">Semi Implicit Method for Pressure Linked Equations (SIMPLE)</option>
      
      <option  value="112104030/lecture28/28_1.htm">Semi Implicit Method for Pressure Linked Equations (SIMPLE) (contd...)</option>
      
      <option  value="112104030/lecture29/29_1.htm">Solution Procedure </option>
      
      <option  value="112104030/lecture30/30_1.htm">Two-dimensional system of equations and line-by-line TDMA </option>
      
      <option  value="112104030/lecture31/31_1.htm">Solution of the unsteady Navier-Stokes Equations</option>
      
      <option  value="112104030/lecture32/32_1.htm">MAC formulation</option>
      
      <option  value="112104030/lecture33/33_1.htm">MAC formulation (contd...)</option>
      
      <option  value="112104030/lecture34/34_1.htm">Boundary condition (contd...)</option>
      
      <option  value="112104030/lecture35/35_1.htm">Numerical stability consideration</option>
      
      <option  value="112104030/lecture36/36_1.htm">Solutions of Energy Equation </option>
      
      <option  value="112104030/lecture37/37_1.htm">Overall Strategy for solving Flow Equations</option>
      
      <option  value="112104030/lecture38/38_1.htm">Solution Procedure in curvilinear Coordinates</option>
      
      <option  value="112104030/lecture39/39_1.htm">Scalar Transport</option>
      
      <option  value="112104030/lecture40/40_1.htm">Interpolation Practices (Differencing Schemes) </option>
      
      <option  value="112104030/lecture41/41_1.htm">Calculation of Pressure </option>
      
      <option  value="112104030/pdf/assignment1.pdf">assignment1</option>
      
      <option  value="112104030/pdf/assignment2.pdf">assignment 2</option>
      
      <option  value="112104030/pdf/assignment3.pdf">assignment 3</option>
      
      <option  value="112104030/pdf/assignment4.pdf">assignment4.pdf</option>
      
      <option  value="112104030/pdf/assignment5.pdf">assignment 5</option>
      
      <option  value="112104030/pdf/assignment6.pdf">assignment 6</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112104031</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computer Aided Engineering Design</strong></td>
	<td><strong>Dr. Anupam Saxena</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104031/mod01lec01.mp4">Lecture-01</option>
      
      <option  value="112104031/mod01lec02.mp4">Lecture-02</option>
      
      <option  value="112104031/mod01lec03.mp4">Lecture-03</option>
      
      <option  value="112104031/mod01lec04.mp4">Lecture-04</option>
      
      <option  value="112104031/mod01lec05.mp4">Lecture-05</option>
      
      <option  value="112104031/mod01lec06.mp4">Lecture-06</option>
      
      <option  value="112104031/mod01lec07.mp4">Lecture-07</option>
      
      <option  value="112104031/mod01lec08.mp4">Lecture-08</option>
      
      <option  value="112104031/mod01lec09.mp4">Lecture-09</option>
      
      <option  value="112104031/mod01lec10.mp4">Lecture-10</option>
      
      <option  value="112104031/mod01lec11.mp4">Lecture-11</option>
      
      <option  value="112104031/mod01lec12.mp4">Lecture-12</option>
      
      <option  value="112104031/mod01lec13.mp4">Lecture-13</option>
      
      <option  value="112104031/mod01lec14.mp4">Lecture-14</option>
      
      <option  value="112104031/mod01lec15.mp4">Lecture-15</option>
      
      <option  value="112104031/mod01lec16.mp4">Lecture-16</option>
      
      <option  value="112104031/mod01lec17.mp4">Lecture-17</option>
      
      <option  value="112104031/mod01lec18.mp4">Lecture-18</option>
      
      <option  value="112104031/mod01lec19.mp4">Lecture-19</option>
      
      <option  value="112104031/mod01lec20.mp4">Lecture-20</option>
      
      <option  value="112104031/mod01lec21.mp4">Lecture-21</option>
      
      <option  value="112104031/mod01lec22.mp4">Lecture-22</option>
      
      <option  value="112104031/mod01lec23.mp4">Lecture-23</option>
      
      <option  value="112104031/mod01lec24.mp4">Lecture-24</option>
      
      <option  value="112104031/mod01lec25.mp4">Lecture-25</option>
      
      <option  value="112104031/mod01lec26.mp4">Lecture-26</option>
      
      <option  value="112104031/mod01lec27.mp4">Lecture-27</option>
      
      <option  value="112104031/mod01lec28.mp4">Lecture-28</option>
      
      <option  value="112104031/mod01lec29.mp4">Lecture-29</option>
      
      <option  value="112104031/mod01lec30.mp4">Lecture-30</option>
      
      <option  value="112104031/mod01lec31.mp4">Lecture-31</option>
      
      <option  value="112104031/mod01lec32.mp4">Lecture-32</option>
      
      <option  value="112104031/mod01lec33.mp4">Lecture-33</option>
      
      <option  value="112104031/mod01lec34.mp4">Lecture-34</option>
      
      <option  value="112104031/mod01lec35.mp4">Lecture-35</option>
      
      <option  value="112104031/mod01lec36.mp4">Lecture-36</option>
      
      <option  value="112104031/mod01lec37.mp4">Lecture-37</option>
      
      <option  value="112104031/mod01lec38.mp4">Lecture-38</option>
      
      <option  value="112104031/mod01lec39.mp4">Lecture-39</option>
      
      <option  value="112104031/mod01lec40.mp4">Lecture-40</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104033</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Engine Combustion</strong></td>
	<td><strong>Prof. B.P. Pundir</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104033/lecture1/main.html">Introduction to IC Engines and Air Pollution</option>
      
      <option  value="112104033/lecture2/2_1.htm">Engine Emissions and Air Pollution</option>
      
      <option  value="112104033/lecture3/3_1.htm">Introduction to Pollutant Formation</option>
      
      <option  value="112104033/lecture4/4_1.htm">Mechanisms of Nitrogen Oxides Formation</option>
      
      <option  value="112104033/lecture5/5_1.htm">Formation of NOx in SI Engines</option>
      
      <option  value="112104033/lecture6/6_1.htm">Formation of NOx in CI Engines and NO2 Emissions</option>
      
      <option  value="112104033/lecture7/7_1.htm">Mechanisms of CO and HC Formation  in SI Engines</option>
      
      <option  value="112104033/lecture8/8_1.htm">Mechanisms of HC Formation in SI Engines</option>
      
      <option  value="112104033/lecture9/9_1.htm">Mechanisms of HC Formation in SI Engines.... contd.</option>
      
      <option  value="112104033/lecture10/10_1.htm">Post-flame Oxidation of HC and Transport to Exhaust</option>
      
      <option  value="112104033/lecture11/11_1.htm">Formation of HC  Emissions in CI Engines</option>
      
      <option  value="112104033/lecture12/12_1.htm">Mechanisms of Formation of Soot and PM</option>
      
      <option  value="112104033/lecture13/13_1.htm">Soot Formation Processes</option>
      
      <option  value="112104033/lecture14/14_1.htm">Effect of SI Engine Design and Operating Variables on Emissions</option>
      
      <option  value="112104033/lecture15/15_1.htm">Effect of CI Engine Design and Operating Variables on Emissions</option>
      
      <option  value="112104033/lecture16/16_1.htm">Emission Test Procedures </option>
      
      <option  value="112104033/lecture17/17_1.htm">Emission Standards </option>
      
      <option  value="112104033/lecture18/18_1.htm">Emission Measurement </option>
      
      <option  value="112104033/lecture19/19_1.htm">Emission Control by Engine Design Variables </option>
      
      <option  value="112104033/lecture20/20_1.htm">ADD-ON SYSTEMS FOR CONTROL OF ENGINE-OUT EMISSIONS</option>
      
      <option  value="112104033/lecture21/21_1.htm">Engine Exhaust Aftertreatment</option>
      
      <option  value="112104033/lecture22/22_1.htm">Oxidation and Three Way Catalytic Converters</option>
      
      <option  value="112104033/lecture23/23_1.htm">Advanced Catalysts for HC Control </option>
      
      <option  value="112104033/lecture24/24_1.htm">Lean de-NOx Catalysts and Catalyst Poisoning </option>
      
      <option  value="112104033/lecture25/25_1.htm">Thermal Catalytic Deactivation, Summary of SI Emission Control </option>
      
      <option  value="112104033/lecture26/26_1.htm">An Overview of CI Engine Emission Control </option>
      
      <option  value="112104033/lecture27/27_1.htm">EMISSION CONTROL BY ENGINE VARIABLES AND EGR</option>
      
      <option  value="112104033/lecture28/28_1.htm">Emission Control by Design Variables and EGR ( Contd.) </option>
      
      <option  value="112104033/lecture29/29_1.htm">Diesel Exhaust Gas Aftertreatment </option>
      
      <option  value="112104033/lecture30/30_1.htm">Diesel Particulate Filters </option>
      
      <option  value="112104033/lecture31/31_1.htm">Diesel Particulate Filters (contd.) </option>
      
      <option  value="112104033/lecture32/32_1.htm">Stratified Charge Engines </option>
      
      <option  value="112104033/lecture33/33_1.htm">HCCI and CAI Engines </option>
      
      <option  value="112104033/lecture34/34_1.htm">HCCI Diesel Engines </option>
      
      <option  value="112104033/lecture35/35_1.htm">Alternative Powerplants </option>
      
      <option  value="112104033/lecture36/36_1.htm">Hydrocarbon Fuels and Quality Requirements </option>
      
      <option  value="112104033/lecture37/37_1.htm">Motor Gasoline</option>
      
      <option  value="112104033/lecture38/38_1.htm">Diesel Fuels</option>
      
      <option  value="112104033/lecture39/39_1.htm">Alternative Fuels </option>
      
      <option  value="112104033/lecture40/40_1.htm">Alternative Fuels (contd.) </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104039</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Optical Measurement Techniques in Thermal Sciences</strong></td>
	<td><strong>Prof. K. Muralidhar,Prof. P.K. Panigrahi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104039/lecture1/main.htm">Role of experiments in engineering</option>
      
      <option  value="112104039/lecture2/2_1.htm">Sources of error</option>
      
      <option  value="112104039/lecture3/3_1.htm">Data analysis</option>
      
      <option  value="112104039/lecture4/4_1.htm">Similarity principles</option>
      
      <option  value="112104039/lecture5/5_1.htm">Design of experiments</option>
      
      <option  value="112104039/lecture6/6_1.htm">Uncertainty analysis</option>
      
      <option  value="112104039/ref_mod1/ref_1.htm">	References</option>
      
      <option  value="112104039/prob_mod1/prob_1.htm">	Problems</option>
      
      <option  value="112104039/lecture7/7_1.htm">Pressure measurement </option>
      
      <option  value="112104039/lecture8/8_1.htm">Hot-wire anemometry</option>
      
      <option  value="112104039/lecture9/9_1.htm">Temperature measurement</option>
      
      <option  value="112104039/lecture10/10_1.htm">Temporal and frequency response </option>
      
      <option  value="112104039/ref_mod2/ref_1.htm">References</option>
      
      <option  value="112104039/prob_mod2/prob_1.htm">Problems</option>
      
      <option  value="112104039/lecture11/11_1.htm">Light sources and LDV</option>
      
      <option  value="112104039/lecture12/12_1.htm">Introduction to PIV</option>
      
      <option  value="112104039/lecture13/13_1.htm">Two wire hotwire measurement</option>
      
      <option  value="112104039/lecture14/14_1.htm">Analysis of PIV data</option>
      
      <option  value="112104039/lecture15/15_1.htm">Processing velocity vectors</option>
      
      <option  value="112104039/lecture16/16_1.htm">Validation of PIV with HWA</option>
      
      <option  value="112104039/gen_ref3/ref_1.htm">References for Velocity Measurement</option>
      
      <option  value="112104039/ref_mod3/ref_1.htm">Additional References</option>
      
      <option  value="112104039/prob_mod3/prob_1.htm">Problem for module Velocity Measurement</option>
      
      <option  value="112104039/sup_3/sup_1.htm">Supplementary Reading</option>
      
      <option  value="112104039/lecture17/17_1.htm">Wave optics and interference phenomenon</option>
      
      <option  value="112104039/lecture18/18_1.htm">Applications, literature review, interferometry</option>
      
      <option  value="112104039/lecture19/19_1.htm">Fringe analysis and image processing</option>
      
      <option  value="112104039/lecture20/20_1.htm">Extraction of temperature data</option>
      
      <option  value="112104039/lecture21/21_1.htm">Applications - buoyant convection</option>
      
      <option  value="112104039/lecture22/22_1.htm">Three dimensional convection phenomenon</option>
      
      <option  value="112104039/lecture23/23_1.htm">Introduction to tomography, CBP</option>
      
      <option  value="112104039/lecture24/24_1.htm">Iterative algorithms</option>
      
      <option  value="112104039/lecture25/25_1.htm">Analysis of wedge fringes and Michelson interferograms</option>
      
      <option  value="112104039/closing/close1.htm">Closing Remarks</option>
      
      <option  value="112104039/interfer/inter_1.htm">Interferogram</option>
      
      <option  value="112104039/gen_ref/ref_1.htm">References for Interferometry</option>
      
      <option  value="112104039/ref_mod4/ref_1.htm">General References</option>
      
      <option  value="112104039/prob_mod4/prob_1.htm">Problem for Interferometry</option>
      
      <option  value="112104039/sup_4/sup_1.htm">Supplementary Reading for Interferometry</option>
      
      <option  value="112104039/lecture26/26_1.htm">Introduction to schlieren and shadowgraph</option>
      
      <option  value="112104039/lecture27/27_1.htm">Schlieren imaging of crystal growth</option>
      
      <option  value="112104039/lecture28/28_1.htm">Crystal growth apparatus</option>
      
      <option  value="112104039/lecture29/29_1.htm">Review of optical techniques for imaging crystal growth </option>
      
      <option  value="112104039/lecture30/30_1.htm">Three dimensional reconstruction of schlieren data</option>
      
      <option  value="112104039/lecture31/31_1.htm">Results and discussion related to crystal growth (part 1)</option>
      
      <option  value="112104039/lecture32/32_1.htm">Results and discussion related to crystal growth (part 2)</option>
      
      <option  value="112104039/lecture33/33_1.htm">Closure</option>
      
      <option  value="112104039/lecture34/34_1.htm">Color schlieren technique</option>
      
      <option  value="112104039/video5/video_1.htm">Videos </option>
      
      <option  value="112104039/ref_mod5/ref_1.htm">References for Schlieren and Shadowgraph</option>
      
      <option  value="112104039/prob_mod5/prob_1.htm">Problem for Schlieren and Shadowgraph</option>
      
      <option  value="112104039/sup_5/sup_1.htm">Supplementary Reading for Schlieren and Shadowgraph</option>
      
      <option  value="112104039/lecture35/35_1.htm">Introduction to liquid crystal thermography</option>
      
      <option  value="112104039/lecture36/36_1.htm">HSI model</option>
      
      <option  value="112104039/lecture37/37_1.htm">Calibration of LCT</option>
      
      <option  value="112104039/lecture38/38_1.htm">Measurement of heat transfer coefficient</option>
      
      <option  value="112104039/lecture39/39_1.htm">Validation of LCT measurements</option>
      
      <option  value="112104039/video6/video_1.htm">Videos for liquid crystal thermography</option>
      
      <option  value="112104039/ref_mod6/ref_1.htm">References for liquid crystal thermography</option>
      
      <option  value="112104039/prob_mod6/prob_1.htm">Problems for Liquid Crystal Thermography</option>
      
      <option  value="112104039/lecture40/40_1.htm">Introduction, absorbtion techniques</option>
      
      <option  value="112104039/lecture41/41_1.htm">Mie, Rayleigh, quantum scattering</option>
      
      <option  value="112104039/lecture42/42_1.htm">Raman spectroscopy, fluorescence</option>
      
      <option  value="112104039/ref_mod7/ref_1.htm">References for Scattering Techniques</option>
      
      <option  value="112104039/prob_mod7/prob_1.htm">Problems for Scattering Techniques</option>
      
      <option  value="112104039/presentation/sum_1.htm">Summary Presentation</option>
      
      <option  value="112104039/thesis1/the_1.htm">Experimental Study of Rayleigh-Benard Convection Using Interferometric Tomography </option>
      
      <option  value="112104039/thesis2/the_1.htm">Experimental Study of Convection in Differentially Heated Fluid Layers Using Laser Interferometry </option>
      
      <option  value="112104039/thesis3/the_1.htm">Optical Imaging And Conrol of Convection Around a KDP Crystal Growing From its Aqueous Solution</option>
      
      <option  value="112104039/thesis4/the_1.htm"> Sensitivity Of A Square Cylinder Wake To Orientation Oscillation In The Intermediate Reynolds Number Regime</option>
      
      <option  value="112104039/thesis5/the_1.htm">Convection, Concentration and Surface Feature Analysis During Crystal Growth From Solution Using Shadowgraphy, Interferometry and Tomography</option>
      
      <option  value="112104039/thesis6/the_1.htm">Schlieren-Interferometric Study of Circular And Square Cylinder Wakes: Effect of Buoyancy And Oscillation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104040</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Principles of Vibration Control</strong></td>
	<td><strong>Prof. Bishakh Bhattacharya</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104040/lecture1/main.html">Introduction to Vibration Control</option>
      
      <option  value="112104040/lecture2/2_1.htm">Strategies of Vibration Control </option>
      
      <option  value="112104040/lecture3/3_1.htm">Active Vibration Control </option>
      
      <option  value="112104040/lecture4/2_1_1.htm">Control of Vibration due to forced excitation and other causes</option>
      
      <option  value="112104040/lecture5/2_2_1.htm">Balancing of Rigid Rotors </option>
      
      <option  value="112104040/lecture6/2_3_1.htm">Field Balancing </option>
      
      <option  value="112104040/lecture7/2_4_1.htm">Detuning and Decoupling </option>
      
      <option  value="112104040/lecture8/2_5_1.htm">Damping Models and Measures </option>
      
      <option  value="112104040/lecture9/9_1.htm">Energy Dissipation in Structural Materials </option>
      
      <option  value="112104040/lecture10/10_1.htm">Selection Criteria for Linear Hysteretic Materials</option>
      
      <option  value="112104040/lecture11/11_1.htm">Design for Enhanced Material Damping </option>
      
      <option  value="112104040/lecture12/12_1.htm">Linear Viscoelastic Model</option>
      
      <option  value="112104040/lecture13/13_1.htm">Advanced Models of Viscoelastic Materials </option>
      
      <option  value="112104040/lecture14/14_1.htm">Frequency and Temperature Dependence of Complex Elastic Modulus </option>
      
      <option  value="112104040/lecture15/15_1.htm">Application of Visco elastic Materials (VEM)</option>
      
      <option  value="112104040/lecture16/16_1.htm">Simple Vibration Neutraliser</option>
      
      <option  value="112104040/lecture17/17_1.htm">Application of Dynamic Vibration Absorption</option>
      
      <option  value="112104040/lecture18/18_1.htm">Design of Damped DVA</option>
      
      <option  value="112104040/lecture19/19_1.htm">Active DVA</option>
      
      <option  value="112104040/lecture20/20_1.htm">Elements of Vibration Isolation</option>
      
      <option  value="112104040/lecture21/21_1.htm">Vibration Isolation of SDOF System</option>
      
      <option  value="112104040/lecture22/22_1.htm">Introduction to Active Vibration Control: Organization</option>
      
      <option  value="112104040/lecture23/23_1.htm">Feedback and Feed-forward AVC for SISO Systems</option>
      
      <option  value="112104040/lecture24/24_1.htm">State Space Representation of MIMO System </option>
      
      <option  value="112104040/lecture25/25_1.htm">Full State Feed-Back Control of Vibration </option>
      
      <option  value="112104040/lecture26/26_1.htm">Design of observer for a Vibrating System </option>
      
      <option  value="112104040/lecture27/27_1.htm">Distributed Vibration Control of Smart Composite Beams</option>
      
      <option  value="112104040/lecture28/28_1.htm">Modelling of Active Distributed Vibration Control System for Composite Beam Structure</option>
      
      <option  value="112104040/lecture29/29_1.htm">Example of Distributed Control</option>
      
      <option  value="112104040/lecture30/30_1.htm">Introduction to Smart Materials</option>
      
      <option  value="112104040/lecture31/31_1.htm">Quantitative Description of Piezoelectric Sensing and Actuation</option>
      
      <option  value="112104040/lecture32/32_1.htm">Magnetostrictive Material</option>
      
      <option  value="112104040/lecture33/33_1.htm">Piezoelectric & Magnetostrictive Sensors and Actuators</option>
      
      <option  value="112104040/lecture34/34_1.htm">Shape Memory Alloy based Actuators </option>
      
      <option  value="112104040/lecture35/35_1.htm">Active Fibre Composites</option>
      
      <option  value="112104040/lecture36/36_1.htm">Electro-rheological and Magnetorheological Fluid based Dampers</option>
      
      <option  value="112104040/lecture37/37_1.htm">Active Constrained Layer Damping</option>
      
      <option  value="112104040/lecture38/38_1.htm">Modal Model of ACLD</option>
      
      <option  value="112104040/lecture39/39_1.htm">Numerical Analysis of ACLD</option>
      
      <option  value="112104040/lecture40/40_1.htm">Finite Element Analysis of Smart Beam</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112104114</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Dynamics of Machines</strong></td>
	<td><strong>Prof. Amitabha Ghosh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104114/lec01.mp4">Rigid Body Motion  - Part 1</option>
      
      <option  value="112104114/lec02.mp4">Rigid Body Motion  - Part 2</option>
      
      <option  value="112104114/lec03.mp4">Dynamic Force Analysis of Mechanisms</option>
      
      <option  value="112104114/lec04.mp4">Space Motion of Rigid Bodies</option>
      
      <option  value="112104114/lec05.mp4">Inertia Tensor  Angular Momentum</option>
      
      <option  value="112104114/lec06.mp4">Euler's Equation of Motion</option>
      
      <option  value="112104114/lec07.mp4">Gyroscopic Action in Machines</option>
      
      <option  value="112104114/lec08.mp4">Unbalance in Machines</option>
      
      <option  value="112104114/lec09.mp4">Rotary Balancing</option>
      
      <option  value="112104114/lec10.mp4">Balancing Machines</option>
      
      <option  value="112104114/lec11.mp4">Field Balancing of Rotors</option>
      
      <option  value="112104114/lec12.mp4">Single-Cylinder Engine Balancing</option>
      
      <option  value="112104114/lec13.mp4">Balancing of Single Slider Machines</option>
      
      <option  value="112104114/lec14.mp4">In-Line Engine Balancing</option>
      
      <option  value="112104114/lec15.mp4">V and Radial Engine Balancing</option>
      
      <option  value="112104114/lec16.mp4">Turning Moment Diagram</option>
      
      <option  value="112104114/lec17.mp4">Flywheel Analysis</option>
      
      <option  value="112104114/lec18.mp4">Module 7 - Lecture 1 - Dynamics of Machines</option>
      
      <option  value="112104114/lec19.mp4">Module 7 - Lecture 2 - Dynamics of Machines</option>
      
      <option  value="112104114/lec20.mp4">Module 7 - Lecture 3 - Dynamics of Machines</option>
      
      <option  value="112104114/lec21.mp4">Module 8 - Lecture 1 - Dynamics of Machines</option>
      
      <option  value="112104114/lec22.mp4">Module 8 - Lecture 2 - Dynamics of Machines</option>
      
      <option  value="112104114/lec23.mp4">Module 8 - Lecture 3 - Dynamics of Machines</option>
      
      <option  value="112104114/lec24.mp4">Module 9 - Lecture 1 - Dynamics of Machines</option>
      
      <option  value="112104114/lec25.mp4">Module 9 - Lecture 2 - Dynamics of Machines</option>
      
      <option  value="112104114/lec26.mp4">Module 10 - Lecture 1 - Dynamics of Machines</option>
      
      <option  value="112104114/lec27.mp4">Module 10 - Lecture 2- Dynamics of Machines</option>
      
      <option  value="112104114/lec28.mp4">Module 11 - Lecture 1 - Dynamics of Machines</option>
      
      <option  value="112104114/lec29.mp4">Rotating Vector Approach</option>
      
      <option  value="112104114/lec30.mp4">Equivalent viscous damping</option>
      
      <option  value="112104114/lec31.mp4">Module 11 - Lecture 4 - Dynamics of Machines</option>
      
      <option  value="112104114/mod12Lect01.mp4">Systems with two degree of freedom</option>
      
      <option  value="112104114/lec33.mp4">Tuned Vibration Absorber</option>
      
      <option  value="112104114/lec34.mp4">Design of Vibration Absorbers</option>
      
      <option  value="112104114/lec35.mp4">Flexibility Matrix  Influence Coeff</option>
      
      <option  value="112104114/lec36.mp4">Forced Vibration of multiple</option>
      
      <option  value="112104114/lec37.mp4">Forced Vibration of Multiple degrees</option>
      
      <option  value="112104114/lec38.mp4">Module 13 - Lecture 1 - Vibration of Continuous Systems</option>
      
      <option  value="112104114/lec39.mp4">Module 13 - Lecture 2 - Vibration of Continuous Systems</option>
      
      <option  value="112104114/lec40.mp4">Vibration of Beams</option>
      
      <option  value="112104114/lec41.mp4">Rayleigh's method</option>
      
      <option  value="112104114/lec42.mp4">Rayleigh-Ritz Method</option>
      
      <option  value="112104114/lec43.mp4">Vibration Measurement</option>
      
      <option  value="112104114/lec44.mp4">Vibration Measurement Types of Pickups</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112104115</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Finite Element Method</strong></td>
	<td><strong>Prof. C.S. Upadhyay</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104115/lec01.mp4">Module 1 - Lecture 1</option>
      
      <option  value="112104115/lec02.mp4">Module 1 - Lecture 2</option>
      
      <option  value="112104115/lec03.mp4">Module 1 - Lecture 3</option>
      
      <option  value="112104115/lec04.mp4">Module 2 - Lecture 1</option>
      
      <option  value="112104115/lec05.mp4">Module 2 - Lecture 2</option>
      
      <option  value="112104115/lec06.mp4">Module 2 - Lecture 3</option>
      
      <option  value="112104115/lec07.mp4">Module 2 - Lecture 4</option>
      
      <option  value="112104115/lec08.mp4">Module 3 - Lecture 1</option>
      
      <option  value="112104115/lec09.mp4">Module 3 - Lecture 2</option>
      
      <option  value="112104115/lec10.mp4">Module 3 - Lecture 3</option>
      
      <option  value="112104115/lec11.mp4">Module 4 - Lecture 1</option>
      
      <option  value="112104115/lec12.mp4">Module 4 - Lecture 2</option>
      
      <option  value="112104115/lec13.mp4">Module 4 - Lecture 3</option>
      
      <option  value="112104115/lec14.mp4">Module 5 - Lecture 1</option>
      
      <option  value="112104115/lec15.mp4">Module 5 - Lecture 2</option>
      
      <option  value="112104115/lec16.mp4">Module 5 - Lecture 3</option>
      
      <option  value="112104115/lec17.mp4">Module 6 - Lecture 1</option>
      
      <option  value="112104115/lec18.mp4">Module 6 - Lecture 2</option>
      
      <option  value="112104115/lec19.mp4">Module 6 - Lecture 3</option>
      
      <option  value="112104115/lec20.mp4">Module 7 - Lecture 1</option>
      
      <option  value="112104115/lec21.mp4">Module 7 - Lecture 2</option>
      
      <option  value="112104115/lec22.mp4">Module 7 - Lecture 3</option>
      
      <option  value="112104115/lec23.mp4">Module 7 - Lecture 4</option>
      
      <option  value="112104115/lec24.mp4">Module 8 - Lecture 1</option>
      
      <option  value="112104115/lec25.mp4">Module 8 - Lecture 2</option>
      
      <option  value="112104115/lec26.mp4">Module 8 - Lecture 3</option>
      
      <option  value="112104115/lec27.mp4">Module 9 - Lecture 1</option>
      
      <option  value="112104115/lec28.mp4">Module 9 - Lecture 2</option>
      
      <option  value="112104115/lec29.mp4">Module 9 - Lecture 3</option>
      
      <option  value="112104115/lec30.mp4">Module 10 - Lecture 1</option>
      
      <option  value="112104115/lec31.mp4">Module 10 - Lecture 2</option>
      
      <option  value="112104115/lec32.mp4">Module 11 - Lecture 1</option>
      
      <option  value="112104115/lec33.mp4">Module 11 - Lecture 2</option>
      
      <option  value="112104115/lec34.mp4">Module 12 - Lecture 1</option>
      
      <option  value="112104115/lec35.mp4">Module 13 - Lecture 1</option>
      
      <option  value="112104115/lec36.mp4">Module 13 - Lecture 2</option>
      
      <option  value="112104115/lec37.mp4">Module 14 - Lecture 1</option>
      
      <option  value="112104115/lec38.mp4">Module 14 - Lecture 2</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112104121</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Kinematics of Machines</strong></td>
	<td><strong>Prof. Ashok K Mallik</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104121/lec01.mp4">Module 1 - Lecture 1</option>
      
      <option  value="112104121/lec02.mp4">Module 1 - Lecture 2</option>
      
      <option  value="112104121/lec03.mp4">Module 1 - Lecture 3</option>
      
      <option  value="112104121/lec04.mp4">Module 2 - Lecture 1</option>
      
      <option  value="112104121/lec05.mp4">Module 2 - Lecture 2</option>
      
      <option  value="112104121/lec06.mp4">Module 2 - Lecture 3</option>
      
      <option  value="112104121/lec07.mp4">Module 3 - Lecture 1</option>
      
      <option  value="112104121/lec08.mp4">Module 3 - Lecture 2</option>
      
      <option  value="112104121/lec09.mp4">Module 3 - Lecture 3</option>
      
      <option  value="112104121/lec10.mp4">Module 3 - Lecture 4</option>
      
      <option  value="112104121/lec11.mp4">Module 4 - Lecture 1</option>
      
      <option  value="112104121/lec12.mp4">Module 4 - Lecture 2</option>
      
      <option  value="112104121/lec13.mp4">Module 5 - Lecture 1</option>
      
      <option  value="112104121/lec14.mp4">Module 5 - Lecture 2</option>
      
      <option  value="112104121/lec15.mp4">Module 5 - Lecture 3</option>
      
      <option  value="112104121/lec16.mp4">Module 6 - Lecture 1</option>
      
      <option  value="112104121/lec17.mp4">Module 6 - Lecture 2</option>
      
      <option  value="112104121/lec18.mp4">Module 6 - Lecture 3</option>
      
      <option  value="112104121/lec19.mp4">Module 7 - Lecture 1</option>
      
      <option  value="112104121/lec20.mp4">Module 7 - Lecture 2</option>
      
      <option  value="112104121/lec21.mp4">Module 7 - Lecture 3</option>
      
      <option  value="112104121/lec22.mp4">Module 8 - Lecture 1</option>
      
      <option  value="112104121/lec23.mp4">Module 8 - Lecture 2</option>
      
      <option  value="112104121/lec24.mp4">Module 9 - Lecture 1</option>
      
      <option  value="112104121/lec25.mp4">Module 9 - Lecture 2</option>
      
      <option  value="112104121/lec26.mp4">Module 9 - Lecture 3</option>
      
      <option  value="112104121/lec27.mp4">Module 9 - Lecture 4</option>
      
      <option  value="112104121/lec28.mp4">Module 10 - Lecture 1</option>
      
      <option  value="112104121/lec29.mp4">Module 10 - Lecture 2</option>
      
      <option  value="112104121/lec30.mp4">Module 10 - Lecture 3</option>
      
      <option  value="112104121/lec31.mp4">Module 11 - Lecture 1</option>
      
      <option  value="112104121/lec32.mp4">Module 11 - Lecture 2</option>
      
      <option  value="112104121/lec33.mp4">Module 11 - Lecture 3</option>
      
      <option  value="112104121/lec34.mp4">Module 12 - Lecture 1</option>
      
      <option  value="112104121/lec35.mp4">Module 12 - Lecture 2</option>
      
      <option  value="112104121/lec36.mp4">Module 12 - Lecture 3</option>
      
      <option  value="112104121/lec37.mp4">Module 13 - Lecture 1</option>
      
      <option  value="112104121/lec38.mp4">Module 13 - Lecture 2</option>
      
      <option  value="112104121/lec39.mp4">Module 13 - Lecture 3</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104158</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Modelling and control of Dynamic Electro-Mechanical System</strong></td>
	<td><strong>Prof. Bishakh Bhattacharya</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104158/lecture1.pdf">Introduction to Dynamic System Modelling</option>
      
      <option  value="112104158/lecture2.pdf">Information Organization through Block Diagram</option>
      
      <option  value="112104158/lecture3.pdf">Information Organization through Signal Flow Graph</option>
      
      <option  value="112104158/lecture4.pdf">State Space Approach in Modelling</option>
      
      <option  value="112104158/lecture5.pdf">Dynamic Modelling of Mechanical Systems</option>
      
      <option  value="112104158/lecture6.pdf">Dynamic Modelling: Energy Approach</option>
      
      <option  value="112104158/lecture7.pdf">Modeling of Electrical Elements</option>
      
      <option  value="112104158/lecture8.pdf">A Brief Review of Laplace Transforms</option>
      
      <option  value="112104158/lecture9.pdf">Dynamic Response of First Order Systems</option>
      
      <option  value="112104158/lecture10.pdf">Dynamic Response of Second Order Systems</option>
      
      <option  value="112104158/lecture11.pdf">Steady State error of a System</option>
      
      <option  value="112104158/lecture12.pdf">Stability of a Dynamic System</option>
      
      <option  value="112104158/lecture13.pdf">Stability of a Time-Variant Dynamic System</option>
      
      <option  value="112104158/lecture14.pdf">Nyquist Stability Criteria</option>
      
      <option  value="112104158/lecture15.pdf">Frequency Response study using Nyquist Criteria</option>
      
      <option  value="112104158/lecture16.pdf">Root Locus Method � Part 1</option>
      
      <option  value="112104158/lecture17.pdf">Root Locus Method Part 2</option>
      
      <option  value="112104158/lecture18.pdf">Effect of Different Parameters on Root Locus</option>
      
      <option  value="112104158/lecture19.pdf">Design of Controller using Root Locus Method</option>
      
      <option  value="112104158/lecture20.pdf">Design of a Lead Compensator</option>
      
      <option  value="112104158/lecture21.pdf">Lead-Lag Compensator and Notch Filter</option>
      
      <option  value="112104158/lecture22.pdf">Time Delay and Use of MATLAB in Controller Design</option>
      
      <option  value="112104158/lecture23.pdf">PID Controller Design</option>
      
      <option  value="112104158/lecture24.pdf">PID Controller Design � Part B</option>
      
      <option  value="112104158/lecture25.pdf">Introduction to Bode Plot</option>
      
      <option  value="112104158/lecture26.pdf">Bode Plot for Controller Design</option>
      
      <option  value="112104158/lecture27.pdf">State Space Design</option>
      
      <option  value="112104158/lecture28.pdf">Controllability & Observability of Dynamic Systems</option>
      
      <option  value="112104158/lecture29.pdf">Full State Feedback Control</option>
      
      <option  value="112104158/lecture30.pdf">Full State Feedback Control (non-canonical)</option>
      
      <option  value="112104158/lecture31.pdf">Observer Design</option>
      
      <option  value="112104158/lecture32.pdf">Reduced Order Observer Design</option>
      
      <option  value="112104158/lecture33.pdf">Optimal Controller Design Using Linear Quadratic Regulator</option>
      
      <option  value="112104158/lecture34.pdf">Direct Output Feedback Control</option>
      
      <option  value="112104158/lecture35.pdf">Independent Modal Space Control for Flexible Dynamic Systems</option>
      
      <option  value="112104158/lecture36.pdf">Introduction to Actuators</option>
      
      <option  value="112104158/lecture37.pdf">High Precision and Advanced Actuators</option>
      
      <option  value="112104158/lecture38.pdf">Actuator Governing Equation</option>
      
      <option  value="112104158/lecture39.pdf">Introduction to Photo Sensors</option>
      
      <option  value="112104158/lecture40.pdf">Introduction to Position Sensing</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104160</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Structural Health Monitoring of Composites</strong></td>
	<td><strong>Prof. Anand Kumar ,Prof. Bishakh Bhattacharya</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104160/symbols/main.html">symbols</option>
      
      <option  value="112104160/lecture1/1_1.htm">Introduction</option>
      
      <option  value="112104160/lecture2/2_1.html">Introduction to Structural Health Monitoring using Smart Materials </option>
      
      <option  value="112104160/lecture3/3_1.html">Structural Health Monitoring versus Non Destructive Evaluation</option>
      
      <option  value="112104160/lecture4/4_1.html">Overview of Smart Materials </option>
      
      <option  value="112104160/lecture5/5_1.htm">Emerging SHM Technologies</option>
      
      <option  value="112104160/lecture6/6_1.html">Magnetostrictive sensors</option>
      
      <option  value="112104160/lecture7/7_1.html">SHM using Optical Fibre</option>
      
      <option  value="112104160/lecture8/8_1.html">Overview of Application Potential of SHM</option>
      
      <option  value="112104160/lecture9/9_1.html"> Notable Industrial Applications of SHM</option>
      
      <option  value="112104160/lecture10/10_1.html">Underground and Other Structures</option>
      
      <option  value="112104160/lecture11/11_1.html">Smart Sensor and Actuator Technologies for SHM</option>
      
      <option  value="112104160/lecture12/12_1.html"> Understanding Magnetostrictive materials</option>
      
      <option  value="112104160/lecture13/13_1.html">Optical Fibres and Lamb Wave Method</option>
      
      <option  value="112104160/lecture14/14_1.html"> Solution Domain for SHM</option>
      
      <option  value="112104160/lecture15/15_1.html">Vibration based damage detection </option>
      
      <option  value="112104160/lecture16/16_1.html">Vibration Control of Smart Composite Plate</option>
      
      <option  value="112104160/lecture17/17_1.html">Constitutive Relationship</option>
      
      <option  value="112104160/lecture18/18_1.html"> Element Matrices</option>
      
      <option  value="112104160/lecture19/19_1.html">Element Mass Matrix </option>
      
      <option  value="112104160/lecture20/20_1.html"> Developing actuator and sensor influence matrix.</option>
      
      <option  value="112104160/lecture21/21_1.html">Sensor Voltage </option>
      
      <option  value="112104160/lecture22/22_1.html">Active Control of Damping </option>
      
      <option  value="112104160/lecture23/23_1.html"> A Case Study Performance of different patch configurations </option>
      
      <option  value="112104160/lecture24/24_1.html">Structural health monitoring of composite laminate using piezoelectric sensory layer </option>
      
      <option  value="112104160/lecture25/25_1.html">Delamination sensing with piezoelectric sensory layer </option>
      
      <option  value="112104160/lecture26/26_1.html">Voltage response in piezoelectric patch for Configuration 2 </option>
      
      <option  value="112104160/lecture27/27_1.htm">Electrical-Mechanical Impedance (EMI) Method </option>
      
      <option  value="112104160/lecture28/28_1.htm">A case study: results and discussions</option>
      
      <option  value="112104160/lecture29/29_1.html"> Structural health monitoring using magnetostrictive sensory layer </option>
      
      <option  value="112104160/lecture30/30_1.html">Delamination  </option>
      
      <option  value="112104160/lecture31/31_1.html">Constitutive relations for composite laminate </option>
      
      <option  value="112104160/lecture32/32_1.htm"> Laminated beam subjected to mechanical input </option>
      
      <option  value="112104160/lecture33/33_1.html">Asymmetric laminate with MS layer away from the mid plane </option>
      
      <option  value="112104160/lecture34/34_1.htm">Convergence analysis for stress and strain using present model </option>
      
      <option  value="112104160/lecture35/35_1.html">Experimental modal analysis for damage detection in composite plates using laser  doppler vibrometer </option>
      
      <option  value="112104160/lecture36/36_1.html">Laser doppler vibrometry </option>
      
      <option  value="112104160/lecture37/37_1.html"> Velocity and displacement measurement </option>
      
      <option  value="112104160/lecture38/38_1.html">Composite plates with 0o plies </option>
      
      <option  value="112104160/lecture39/39_1.html">Composite plates with 90o plies </option>
      
      <option  value="112104160/lecture40/40_1.html">Cross-ply composite plates</option>
      
      <option  value="112104160/Reference/ref_1.html">References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104161</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Mechanics of Laminated composite structure</strong></td>
	<td><strong>Prof. Nachiketa Tiwari</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104161/L01.pdf">Introduction</option>
      
      <option  value="112104161/L02.pdf">Introduction (contd...)</option>
      
      <option  value="112104161/L03.pdf">Introduction 2</option>
      
      <option  value="112104161/L04.pdf">Introduction3</option>
      
      <option  value="112104161/L05.pdf">Behavior of Unidirectional Composites</option>
      
      <option  value="112104161/L06.pdf">Behavior of Unidirectional Composites (contd...)</option>
      
      <option  value="112104161/L07.pdf">Behavior of Unidirectional Composites 2</option>
      
      <option  value="112104161/L08.pdf">Analysis of an Orthotropic Ply</option>
      
      <option  value="112104161/L09.pdf">Analysis of an Orthotropic Ply (contd...)</option>
      
      <option  value="112104161/L10.pdf">Analysis of an Orthotropic Ply 2</option>
      
      <option  value="112104161/L11.pdf">Analysis of a Laminated Composite</option>
      
      <option  value="112104161/L12.pdf">Analysis of a Laminated Composite (contd...)</option>
      
      <option  value="112104161/L13.pdf">Analysis of a Laminated Composite 2</option>
      
      <option  value="112104161/L14.pdf">Equilibrium Equations for Plates</option>
      
      <option  value="112104161/L15.pdf">Boundary Conditions for</option>
      
      <option  value="112104161/L16.pdf">Semi?Infinite Plates</option>
      
      <option  value="112104161/L17.pdf">Semi?Infinite Plates (contd...)</option>
      
      <option  value="112104161/L18.pdf">Semi?Infinite Plates 2</option>
      
      <option  value="112104161/L19.pdf">Thermal Stresses in Plates</option>
      
      <option  value="112104161/L20.pdf">Thermal Stresses in Plates 2</option>
      
      <option  value="112104161/L21.pdf">Finite Rectangular Plates</option>
      
      <option  value="112104161/L22.pdf">Simply Supported Plates with Normal Load</option>
      
      <option  value="112104161/L23.pdf">Rectangular Plates with SS on Two Sides</option>
      
      <option  value="112104161/L24.pdf">Rectangular Plates with SS on Two Sides (contd...)</option>
      
      <option  value="112104161/L25.pdf">Virtual Work Approaches</option>
      
      <option  value="112104161/L26.pdf">Application of Galerkin Method</option>
      
      <option  value="112104161/L27.pdf">The Galerkin Method (contd...)</option>
      
      <option  value="112104161/L28.pdf">The Role of D16 in a Simply?</option>
      
      <option  value="112104161/L29.pdf">Energy Methods</option>
      
      <option  value="112104161/L30.pdf">Energy Methods (contd...)</option>
      
      <option  value="112104161/L31.pdf">Energy Methods 2</option>
      
      <option  value="112104161/L32.pdf">Energy Methods 2 (contd...)</option>
      
      <option  value="112104161/L33.pdf">Stability of Conservative Systems</option>
      
      <option  value="112104161/L34.pdf">Geometric Nonlinearity in Composite Plates</option>
      
      <option  value="112104161/L35.pdf">Buckling and Geometric Nonlinearity</option>
      
      <option  value="112104161/L36.pdf">Buckling of Plates</option>
      
      <option  value="112104161/L37.pdf">Buckling of Plates (contd...)</option>
      
      <option  value="112104161/L38.pdf">Behavior of Short?Fiber Composites</option>
      
      <option  value="112104161/L39.pdf">Behavior of Short?Fiber Composites (contd...)</option>
      
      <option  value="112104161/L40.pdf">Closure</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104168</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Introduction to Composites</strong></td>
	<td><strong>Prof. Nachiketa Tiwari</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104168/L01.pdf">Introduction to composites</option>
      
      <option  value="112104168/L02.pdf"> Introduction to composites </option>
      
      <option  value="112104168/L03.pdf">  Introduction to composites</option>
      
      <option  value="112104168/L04.pdf">Glass Fibers</option>
      
      <option  value="112104168/L05.pdf">Graphite Fibers</option>
      
      <option  value="112104168/L06.pdf">Aramid, Metallic and Other Fibers</option>
      
      <option  value="112104168/L07.pdf">Matrix materials and Polymers</option>
      
      <option  value="112104168/L08.pdf">Polymer Matrix Materials</option>
      
      <option  value="112104168/L09.pdf">Metals and Fillers</option>
      
      <option  value="112104168/L10.pdf">Manufacturing of thermoset composites</option>
      
      <option  value="112104168/L11.pdf"> Manufacturing of thermoset composites</option>
      
      <option  value="112104168/L12.pdf">  Manufacturing of thermoset composites</option>
      
      <option  value="112104168/L13.pdf">Other Composite Fabrication Methods</option>
      
      <option  value="112104168/L14.pdf">Important Terminologies</option>
      
      <option  value="112104168/L15.pdf">Behavior of unidirectional composites</option>
      
      <option  value="112104168/L16.pdf"> Behavior of unidirectional composites</option>
      
      <option  value="112104168/L17.pdf">  Behavior of unidirectional composites</option>
      
      <option  value="112104168/L18.pdf">Short-fiber composites</option>
      
      <option  value="112104168/L19.pdf"> Short-fiber composites</option>
      
      <option  value="112104168/L20.pdf">  Short-fiber composites</option>
      
      <option  value="112104168/L21.pdf">   Short-fiber composites</option>
      
      <option  value="112104168/L22.pdf">Orthotropic laminate</option>
      
      <option  value="112104168/L23.pdf">  Orthotropic laminate</option>
      
      <option  value="112104168/L24.pdf">   Orthotropic laminate</option>
      
      <option  value="112104168/L25.pdf">Laminated Composites</option>
      
      <option  value="112104168/L26.pdf"> Laminated Composites</option>
      
      <option  value="112104168/L27.pdf">  Laminated Composites</option>
      
      <option  value="112104168/L28.pdf">Failure of Composites</option>
      
      <option  value="112104168/L29.pdf">  Failure of Composites</option>
      
      <option  value="112104168/L30.pdf"> Failure of Composites</option>
      
      <option  value="112104168/L31.pdf">   Failure of Composites</option>
      
      <option  value="112104168/L32.pdf">    Failure of Composites</option>
      
      <option  value="112104168/L33.pdf">Hygrothermal Effects</option>
      
      <option  value="112104168/L34.pdf"> Hygrothermal Effects</option>
      
      <option  value="112104168/L35.pdf">  Hygrothermal Effects</option>
      
      <option  value="112104168/L36.pdf">   Hygrothermal Effects</option>
      
      <option  value="112104168/L37.pdf">    Hygrothermal Effects</option>
      
      <option  value="112104168/L38.pdf">Thermal stresses in beams</option>
      
      <option  value="112104168/L39.pdf">Residual Thermal Stress</option>
      
      <option  value="112104168/L40.pdf">Closure</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104173</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Smart Material, Adaptive Structures and Intelligent Mechanical Systems - IITK</strong></td>
	<td><strong>Prof. Bishakh Bhattacharya,Prof. Nachiketa Tiwari</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112104173/Mod_1_smart_mat_lec_1.pdf">Introduction to Smart Material</option>
      
      <option  value="112104173/Mod_1_smart_mat_lec_2.pdf">Introduction to Piezoelectric Materials</option>
      
      <option  value="112104173/Mod_1_smart_mat_lec_3.pdf">Magnetostrictive Smart Materials (Part -1)</option>
      
      <option  value="112104173/Mod_1_smart_mat_lec_4.pdf">Magnetostrictive Smart Materials (Part -2)</option>
      
      <option  value="112104173/Mod_1_smart_mat_lec_5.pdf">Active Smart Polymers (Part 1)</option>
      
      <option  value="112104173/Mod_1_smart_mat_lec_6.pdf">Active Smart Polymers (Part 2)</option>
      
      <option  value="112104173/Mod_1_smart_mat_lec_7.pdf">Smart Muscles based on Shape Memory Alloys and Electroactive Polymer</option>
      
      <option  value="112104173/Mod_2_smart_mat_lec_8.pdf">Modelling of Piezoelectric Material (Part 1)</option>
      
      <option  value="112104173/Mod_2_smart_mat_lec_9.pdf">Modelling of Piezoelectric Material (Part 2)</option>
      
      <option  value="112104173/Mod_2_smart_mat_lec_10.pdf">Modelling of Induced Strain Actuation (Part 1)</option>
      
      <option  value="112104173/Mod_2_smart_mat_lec_11.pdf">Modelling of Induced Strain Actuation (Part 2)</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_12.pdf">Lecture12</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_13.pdf">Introduction to Composites</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_14.pdf">Behavior of Unidirectional Composites</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_15.pdf">   Behavior of Unidirectional Composites</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_16.pdf">     Behavior of Unidirectional Composites</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_17.pdf">Analysis of an Orthotropic Ply</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_18.pdf">   Analysis of an Orthotropic Ply</option>
      
      <option  value="112104173/Mod_3_smart_mat_lec_19.pdf">     Analysis of an Orthotropic Ply</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_20.pdf">Analysis of a Laminated Composite</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_21.pdf">   Analysis of a Laminated Composite</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_22.pdf">     Analysis of a Laminated Composite</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_23.pdf">Equilibrium Equations for Plates</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_24.pdf">Semi?Infinite Plates</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_25.pdf">    Semi?Infinite Plates</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_26.pdf">Finite Rectangular Plates</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_27.pdf">Simply Supported Plates with Normal Load</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_28.pdf">Virtual Work Approaches</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_29.pdf">Application of Galerkin Method</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_30.pdf">The Galerkin Method</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_31.pdf">The Role of D16 in a Simply? Supported Rectangular Plate</option>
      
      <option  value="112104173/Mod_4_smart_mat_lec_32.pdf">Energy Methods</option>
      
      <option  value="112104173/Mod_5_smart_mat_lec_33.pdf">Modelling of Smart Composite Beam (Part 1)</option>
      
      <option  value="112104173/Mod_5_smart_mat_lec_34.pdf">Modelling of Smart Composite Beam (Part 2)</option>
      
      <option  value="112104173/Mod_5_smart_mat_lec_35.pdf">Delamination Sensing and Vibration Control using Magnetostrictive Materials (Part 1)</option>
      
      <option  value="112104173/Mod_5_smart_mat_lec_36.pdf">Delamination Sensing and Vibration Control using Magnetostrictive Materials (Part 2)</option>
      
      <option  value="112104173/Mod_5_smart_mat_lec_37.pdf">Actuators & Sensors based on HBLS Smart Materials � Device Design</option>
      
      <option  value="112104173/Mod_6_smart_mat_lec_38.pdf">Intelligent Devices (Part 1)</option>
      
      <option  value="112104173/Mod_6_smart_mat_lec_39.pdf">Intelligent Devices (Part 2)</option>
      
      <option  value="112104173/Mod_6_smart_mat_lec_40.pdf">MEMS based Actuators</option>
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105125</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Design of Machine Elements I</strong></td>
	<td><strong>Prof. S.K. Roychowdhury,Prof. B. Maiti,Prof. G. Chakraborty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105125/Machine%20design1/New_index1.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105127</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Manufacturing Processes II</strong></td>
	<td><strong>Prof. A.K. Chattopadhyay,Prof. A.B. Chattopadhyay,Prof. S. Paul</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105127/Manuf%20Proc%20II/New_index1.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105129</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Refrigeration and Air Conditioning</strong></td>
	<td><strong>Prof. M. Ramgopal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105129/Ref%20and%20Air%20Cond/New_index1.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105045</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computational Fluid Dynamics</strong></td>
	<td><strong>Prof. S. Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105045/mod01lec01.mp4">Introduction to Computational Fluid Dynamics and Principles of Conservation</option>
      
      <option  value="112105045/mod01lec02.mp4">Conservation of Mass and Momentum: Continuity and Navier Stokes Equation</option>
      
      <option  value="112105045/mod01lec03.mp4">Navier Stokes Equation (Contd.)</option>
      
      <option  value="112105045/mod01lec04.mp4">Energy Equation and General Structure of Conservation Equations</option>
      
      <option  value="112105045/mod01lec05.mp4">Classification of Partial Differential Equations and Physical Behaviour</option>
      
      <option  value="112105045/mod01lec06.mp4">Classification of Partial Differential Equations and Physical Behaviour (Contd.)</option>
      
      <option  value="112105045/mod01lec07.mp4">Approximate Solutions of Differential Equations: Error Minimization Principles</option>
      
      <option  value="112105045/mod01lec08.mp4">Approximate Solutions of Differential Equations: Variational Principles and Weighted Residual Approach</option>
      
      <option  value="112105045/mod01lec09.mp4">Weighted Residual Approach and Introduction to Discretization</option>
      
      <option  value="112105045/mod01lec10.mp4">Fundamentals of Discretization: Finite Element Method</option>
      
      <option  value="112105045/mod01lec11.mp4">Fundamentals of Discretization: Finite Difference and Finite Volume Method</option>
      
      <option  value="112105045/mod01lec12.mp4">Fundamentals of Discretization: Finite Volume Method (Contd.)</option>
      
      <option  value="112105045/mod01lec13.mp4">Finite Volume Method: Some Conceptual Basics and Illustrations through 1-D Steady State Diffusion Problems</option>
      
      <option  value="112105045/mod01lec14.mp4">Finite Volume Method: Boundary Condition Implementation and Discretization of Unsteady State Problems</option>
      
      <option  value="112105045/mod01lec15.mp4">Finite Volume Method: Discretization of Unsteady State Problems</option>
      
      <option  value="112105045/mod01lec16.mp4">Important Consequences of Discretization of Unsteady State Problems</option>
      
      <option  value="112105045/mod01lec17.mp4">Important Consequences of Discretization of Time Dependent Diffusion Type Problems (Contd.) and Stability Analysis</option>
      
      <option  value="112105045/mod01lec18.mp4">Discretization of Hyperbolic Equations: Stability Analysis</option>
      
      <option  value="112105045/mod01lec19.mp4">PART 1 : Stability of Second Order Hyperbolic Equations PART 2 : Mid-Semester Assessment Review (Questions and Answers)</option>
      
      <option  value="112105045/mod01lec20.mp4">PART 1: Mid-Semester Assessment Review (Questions and Answers) (Contd.) PART 2: Finite Volume Discretization of 2-D Unsteady State Diffusion Type </option>
      
      <option  value="112105045/mod01lec21.mp4">Solution of Systems of Linear Algebraic Equations</option>
      
      <option  value="112105045/mod01lec22.mp4">Solution of Systems of Linear Algebraic Equations: Elimination Methods</option>
      
      <option  value="112105045/mod01lec23.mp4">Solution of Systems of Linear Algebraic Equations: Elimination Methods (Contd.)</option>
      
      <option  value="112105045/mod01lec24.mp4">Elimination Methods: Error Analysis</option>
      
      <option  value="112105045/mod01lec25.mp4">Iterative Methods for Numerical Solution of Systems of Linear Algebraic Equations</option>
      
      <option  value="112105045/mod01lec26.mp4">Iterative Methods for Numerical Solution of Systems of Linear Algebraic Equations (Contd.)</option>
      
      <option  value="112105045/mod01lec27.mp4">Iterative Methods: Further Examples</option>
      
      <option  value="112105045/mod01lec28.mp4">PART 1: Combination of Iteration & Elimination Techniques PART 2: Introduction to Gradient Search Methods</option>
      
      <option  value="112105045/mod01lec29.mp4">Gradient Search Methods (Contd.)</option>
      
      <option  value="112105045/mod01lec30.mp4">Discretization of Convection-Diffusion Equations: A Finite Volume Approach</option>
      
      <option  value="112105045/mod01lec31.mp4">Discretization of Convection-Diffusion Equations: A Finite Volume Approach (Contd.)</option>
      
      <option  value="112105045/mod01lec32.mp4">Discretization of Convection- Diffusion Equations: A Finite Volume Approach (Contd.)</option>
      
      <option  value="112105045/mod01lec33.mp4">Discretization of Convection -Diffusion Equations: A Finite Volume Approach (Contd.)</option>
      
      <option  value="112105045/mod01lec34.mp4">Discretization of Convection-Diffusion Equations: A Finite Volume Approach ( Contd.)</option>
      
      <option  value="112105045/mod01lec35.mp4">Discretization of Navier Stokes Equations</option>
      
      <option  value="112105045/mod01lec36.mp4">Discretization of Navier Stokes Equations ( Contd.)</option>
      
      <option  value="112105045/mod01lec37.mp4">Discretization of Navier Stokes Equations ( Contd. ) </option>
      
      <option  value="112105045/mod01lec38.mp4">PART 1 : Discretization of Navier Stokes Equations (Contd.) PART 2 : Fundamentals of Unstructured Grid Formulation</option>
      
      <option  value="112105045/mod01lec39.mp4">Unstructured Grid Formulation (Contd.)</option>
      
      <option  value="112105045/mod01lec40.mp4">What is there in implementing a CFD Code</option>
      
      <option  value="112105045/mod01lec41.mp4">Introduction to Turbulence Modeling</option>
      
      <option  value="112105045/mod01lec42.mp4">Introduction to Turbulence Modeling (Contd.)</option>
      
      <option  value="112105045/mod01lec43.mp4">End Semester Questions Review</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105051</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Solar Energy Technology</strong></td>
	<td><strong>Prof. V.V. Satyamurty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105051/mod01lec01.mp4">Energy and Dependence on External Sources and Sun, Physical Descriptions and Reactions</option>
      
      <option  value="112105051/mod01lec02.mp4">Sun - Earth Geometry</option>
      
      <option  value="112105051/mod01lec03.mp4">Terminology Extra - Terrestrial Radiation Terrestria Radiation</option>
      
      <option  value="112105051/mod01lec04.mp4">Measuring Instruments</option>
      
      <option  value="112105051/mod01lec05.mp4">Estimation of Solar Radiation or Details</option>
      
      <option  value="112105051/mod01lec06.mp4">Radiation Processing - Long Term</option>
      
      <option  value="112105051/mod01lec07.mp4">Evaluation of the Apparent Sunrise and Sunset Angles</option>
      
      <option  value="112105051/mod01lec8.mp4">Estimation of Daily/Monthly Average daily Tilt Factor Under Terrestrial Conditions</option>
      
      <option  value="112105051/mod01lec09.mp4">Solar Colector Basics</option>
      
      <option  value="112105051/mod01lec10.mp4">Transmission - Absorptance Product</option>
      
      <option  value="112105051/mod01lec11.mp4">Daily (Or Monthly Average Daily) Transmittance - Absorptance Product Analytical Evaluation</option>
      
      <option  value="112105051/mod01lec12.mp4">Theory of Flat Plate Collectors - Liquid Based (A)</option>
      
      <option  value="112105051/mod01lec13.mp4">Theory of Flat Plate Collectors - Liquid Based (B)</option>
      
      <option  value="112105051/mod01lec14.mp4">Theory of Flat Plate Collectors - Liquid Based (C)</option>
      
      <option  value="112105051/mod01lec15.mp4">Mean temperature and Heat Capacity Effects</option>
      
      <option  value="112105051/mod01lec16.mp4">Theory of Air Based Solar Flat Plate Collectors</option>
      
      <option  value="112105051/mod01lec17.mp4">Theory of Air Based Solar Flat Plate Collectors (Contd.)</option>
      
      <option  value="112105051/mod01lec18.mp4">Other Collector Geometries</option>
      
      <option  value="112105051/mod01lec19.mp4">Concentrating Collectors</option>
      
      <option  value="112105051/mod01lec20.mp4">Concentrating Collectors (Contd.)</option>
      
      <option  value="112105051/mod01lec21.mp4">Concentrating Collectors (Contd. )</option>
      
      <option  value="112105051/mod01lec22.mp4">Compound Parabolic Collectors</option>
      
      <option  value="112105051/mod01lec23.mp4">Exercise - I</option>
      
      <option  value="112105051/mod01lec24.mp4">Exercise - I (Contd.)</option>
      
      <option  value="112105051/mod01lec25.mp4">Device and System Performance</option>
      
      <option  value="112105051/mod01lec26.mp4">Long Term Solar Energy System Performance</option>
      
      <option  value="112105051/mod01lec27.mp4">Exercise - I (Contd. )</option>
      
      <option  value="112105051/mod01lec28.mp4">Long Term Solar Energy System Performance Simplified Design Methods</option>
      
      <option  value="112105051/mod01lec29.mp4">Long Term Solar Energy System Performance Simplified Design Methods (Contd.)</option>
      
      <option  value="112105051/mod01lec30.mp4">Monthly Average Daily Utilizability</option>
      
      <option  value="112105051/mod01lec31.mp4">The phi(bar) - f chart method (Contd.)</option>
      
      <option  value="112105051/mod01lec32.mp4">The phi(bar) - f chart method Tank Losses and Finite Heat Exchanger</option>
      
      <option  value="112105051/mod01lec33.mp4">Exercise - 2</option>
      
      <option  value="112105051/mod01lec34.mp4">Exercise - 2 (Contd.)</option>
      
      <option  value="112105051/mod01lec35.mp4">Exercise - 2  (Contd.)</option>
      
      <option  value="112105051/mod01lec36.mp4">Economic Analysis</option>
      
      <option  value="112105051/mod01lec37.mp4">Life Cycle Savings : The P1 and P2 Method</option>
      
      <option  value="112105051/mod01lec38.mp4">Passive Devices </option>
      
      <option  value="112105051/mod01lec39.mp4">Passive Architecture, Overhangs and Wing Walls</option>
      
      <option  value="112105051/mod01lec40.mp4">Passive Architecture, Overhangs and Wing Walls (Contd.)</option>
      
      <option  value="112105051/mod01lec41.mp4">Summary</option>
      
      <option  value="112105051/mod01lec42.mp4">Summary (Contd.)</option>
      
      <option  value="112105051/mod01lec43.mp4">Summary (Contd. )</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112105054</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Vibration of Structures</strong></td>
	<td><strong>Prof. A. Dasgupta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105054/mod1lect1.html">Transverse Vibrations of Strings </option>
      
      <option  value="112105054/mod1lect2.html">Axial and Torsional Vibrations of Bars </option>
      
      <option  value="112105054/mod1lec3.html">The Variational Formulation - I </option>
      
      <option  value="112105054/mod1lec4.html">The Variational Formulation - II </option>
      
      <option  value="112105054/mod1lec5.html">Modal Analysis - I </option>
      
      <option  value="112105054/mod1lec6.html">Modal Analysis - II </option>
      
      <option  value="112105054/mod1lec7.html">Properties of the Eigenvalue Problem </option>
      
      <option  value="112105054/mod1lec8.html">Modal Analysis: Approximate Methods - I </option>
      
      <option  value="112105054/mod1lec9.html">Modal Analysis: Approximate Methods - II </option>
      
      <option  value="112105054/mod1lec10.html">The Initial Value Problem</option>
      
      <option  value="112105054/mod1lec11.html">Forced Vibration Analysis</option>
      
      <option  value="112105054/mod1lec12.html">Damping in Continuous Systems </option>
      
      <option  value="112105054/mod1lec13.html">Axially Translating Strings </option>
      
      <option  value="112105054/mod2lec14.html">d\'Alembert\'s Solution</option>
      
      <option  value="112105054/mod2lec15.html">Harmonic Waves and Energetics of Wave  Motion </option>
      
      <option  value="112105054/mod2lec16.html">Scattering of Waves </option>
      
      <option  value="112105054/mod2lec17.html">Applications of the Wave Solution - I </option>
      
      <option  value="112105054/mod2lec18.html">Applications of the Wave Solution - II </option>
      
      <option  value="112105054/mod3lec19.html">Beam Models - I </option>
      
      <option  value="112105054/mod3lec20.html">Beam Models - II </option>
      
      <option  value="112105054/mod3lec21.html">Modal Analysis</option>
      
      <option  value="112105054/mod3lec22.html">Approximate Methods</option>
      
      <option  value="112105054/mod3lec23.html">Applications of Modal Solution</option>
      
      <option  value="112105054/mod3lec24.html">Flexural Waves in Beams</option>
      
      <option  value="112105054/mod3lec25.html">Special Topics in Beam Vibrations - I</option>
      
      <option  value="112105054/mod3lec26.html">Special Topics in Beam Vibrations - II</option>
      
      <option  value="112105054/mod3lec27.html">Special Topics in Beam Vibrations - III</option>
      
      <option  value="112105054/mod3lec28.html">Special Topics in Beam Vibrations - IV</option>
      
      <option  value="112105054/mod3lec29.html">Dynamics of Curved Beams</option>
      
      <option  value="112105054/m3l30_vibrations_of_rings_and_arches.html">Vibrations of Rings and Arches: </option>
      
      <option  value="112105054/m4l31_dynamics_of_membranes.html">Dynamics of Membranes: </option>
      
      <option  value="112105054/m4l32_the_rectangular_membrane.html">The Rectangular Membrane: </option>
      
      <option  value="112105054/m4l33_the_circular_membrane.html">The Circular Membrane: </option>
      
      <option  value="112105054/m4l34_applications.html">Applications: </option>
      
      <option  value="112105054/m4l35_approximate_analysis_of_membranes.html">Approximate Analysis of Membranes: </option>
      
      <option  value="112105054/m5l36_dynamics_of_plates_2.html">Dynamics of Plates:  Newtonian Formulation: </option>
      
      <option  value="112105054/m5l37_dynamics_of_plates.html">Dynamics of Plates:   Variational Formulation: </option>
      
      <option  value="112105054/m5l38_the_rectangular_plate.html">The Rectangular Plate: </option>
      
      <option  value="112105054/m5l39_the_circular_plate.html">The Circular Plate: </option>
      
      <option  value="112105054/m5l40_approximate_analysis_of_plates.html">Approximate Analysis of Plates: </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105055</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Vibration of Structures</strong></td>
	<td><strong>Prof. A. Dasgupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105055/mod01lec01.mp4">Transverse Vibrations of Strings - I</option>
      
      <option  value="112105055/mod01lec02.mp4">Transverse Vibrations of Strings - II</option>
      
      <option  value="112105055/mod01lec03.mp4">Axial and Torsional Vibrations of Bars</option>
      
      <option  value="112105055/mod01lec04.mp4">Variational Formulation - I</option>
      
      <option  value="112105055/mod01lec05.mp4">Variational Formulation - II</option>
      
      <option  value="112105055/mod01lec06.mp4">Modal Analysis - I</option>
      
      <option  value="112105055/mod01lec07.mp4">Modal Analysis - II</option>
      
      <option  value="112105055/mod01lec08.mp4">Properties of the Eigenvalue Problem</option>
      
      <option  value="112105055/mod01lec09.mp4">Modal Analysis: Approximate Methods - I</option>
      
      <option  value="112105055/mod01lec10.mp4">Modal Analysis: Approximate Methods - II</option>
      
      <option  value="112105055/mod01lec11.mp4">The Initial Value Problem</option>
      
      <option  value="112105055/mod01lec12.mp4">Forced Vibration Analysis - I</option>
      
      <option  value="112105055/mod01lec13.mp4">Forced Vibration Analysis - II</option>
      
      <option  value="112105055/mod01lec14.mp4">Forced Vibration Analysis - III</option>
      
      <option  value="112105055/mod01lec15.mp4">Damping in Structures</option>
      
      <option  value="112105055/mod01lec16.mp4">Axially Translating Strings</option>
      
      <option  value="112105055/mod01lec17.mp4">d' Alembert's Solution - I</option>
      
      <option  value="112105055/mod01lec18.mp4">d' Alembert's Solution - II</option>
      
      <option  value="112105055/mod01lec19.mp4">Harmonic Waves and Energetics of Wave  Motion</option>
      
      <option  value="112105055/mod01lec20.mp4">Scattering of Waves</option>
      
      <option  value="112105055/mod01lec21.mp4">Applications of  Wave Solution - I</option>
      
      <option  value="112105055/mod01lec22.mp4">Applications of Wave Solution - II</option>
      
      <option  value="112105055/mod01lec23.mp4">Beam Models - I</option>
      
      <option  value="112105055/mod01lec24.mp4">Beam Models - II</option>
      
      <option  value="112105055/mod01lec25.mp4">Modal Analysis of Beams </option>
      
      <option  value="112105055/mod01lec26.mp4">Applications of Modal Solution</option>
      
      <option  value="112105055/mod01lec27.mp4">Approximate Methods </option>
      
      <option  value="112105055/mod01lec28.mp4">Topic in Beam Vibration - I</option>
      
      <option  value="112105055/mod01lec29.mp4">Topic in Beam Vibration - II</option>
      
      <option  value="112105055/mod01lec30.mp4">Wave Propagation in Beams </option>
      
      <option  value="112105055/mod01lec31.mp4">Dynamics of Curved Beams</option>
      
      <option  value="112105055/mod01lec32.mp4">Vibrations of Rings and Arches</option>
      
      <option  value="112105055/mod01lec33.mp4">Dynamics of Membranes</option>
      
      <option  value="112105055/mod01lec34.mp4">Vibrations of Rectangular Membrane</option>
      
      <option  value="112105055/mod01lec35.mp4">Vibrations of Circular Membrane</option>
      
      <option  value="112105055/mod01lec36.mp4">Special Problems in Membrane Vibrations</option>
      
      <option  value="112105055/mod01lec37.mp4">Dynamics of Plates</option>
      
      <option  value="112105055/mod01lec38.mp4">Vibrations of Rectangular Plates</option>
      
      <option  value="112105055/mod01lec39.mp4">Vibrations of Circular Plates </option>
      
      <option  value="112105055/mod01lec40.mp4">Special Problems in Plate Vibrations </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105123</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Basic Thermodynamics</strong></td>
	<td><strong>Prof. S.K. Som</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105123/lec01.mp4">Introduction and Fundamental Concepts</option>
      
      <option  value="112105123/lec02.mp4">Zeroth Law and Fundamental Concepts</option>
      
      <option  value="112105123/lec03.mp4">Different Kind of Energy and First Low-I</option>
      
      <option  value="112105123/lec04.mp4">First Low - II</option>
      
      <option  value="112105123/lec05.mp4">First Low - III</option>
      
      <option  value="112105123/lec06.mp4">Second Law and Its Corollaries - I</option>
      
      <option  value="112105123/lec07.mp4">Second Law and Its Corollaries - II</option>
      
      <option  value="112105123/lec08.mp4">Second Law and Its Corollaries - III</option>
      
      <option  value="112105123/lec09.mp4">Second Law and Its Corollaries - IV</option>
      
      <option  value="112105123/lec10.mp4">Second Law and Available Energy - I</option>
      
      <option  value="112105123/lec11.mp4">Second Law and Available Energy - II</option>
      
      <option  value="112105123/lec12.mp4">Second Law and Available Energy - III</option>
      
      <option  value="112105123/lec13.mp4">Thermodynamic Property Relations - I</option>
      
      <option  value="112105123/lec14.mp4">Thermodynamic Property Relations - II</option>
      
      <option  value="112105123/lec15.mp4">Joule-Kelvin Expansion: Properties of Pure Substances</option>
      
      <option  value="112105123/lec16.mp4">Properties of Pure Substances - I</option>
      
      <option  value="112105123/lec17.mp4">Properties of Pure Substances - II</option>
      
      <option  value="112105123/lec18.mp4">Properties of Pure Substances: Ideal Gases</option>
      
      <option  value="112105123/lec19.mp4">Properties of Ideal Gases</option>
      
      <option  value="112105123/lec20.mp4">Vapors Power Cycle - I</option>
      
      <option  value="112105123/lec21.mp4">Vapor Power Cycle - II</option>
      
      <option  value="112105123/lec22.mp4">Vapor Power Cycle - III</option>
      
      <option  value="112105123/lec23.mp4">Vapor Power Cycle - IV</option>
      
      <option  value="112105123/lec24.mp4">Gas Power Cycle - I</option>
      
      <option  value="112105123/lec25.mp4">Gas Power Cycle - II</option>
      
      <option  value="112105123/lec26.mp4">Gas Power Cycle - III</option>
      
      <option  value="112105123/lec27.mp4">Thermodynamics of Reacting System - I</option>
      
      <option  value="112105123/lec28.mp4">Thermodynamics of Reacting System-II</option>
      
      <option  value="112105123/lec29.mp4">Thermodynamics of Reacting System-III</option>
      
      <option  value="112105123/lec30.mp4">Thermodynamics of Multi Component System-I</option>
      
      <option  value="112105123/lec31.mp4">Thermodynamics of Multi Component System-II</option>
      
      <option  value="112105123/lec32.mp4">Thermodynamics of Multi Component System-III</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105124</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Design of Machine Elements I</strong></td>
	<td><strong>Prof. S.K. Roychowdhury,Prof. B. Maiti,Prof. G. Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105124/lec01.mp4">Design Philosophy</option>
      
      <option  value="112105124/lec02.mp4">Design And Manufacturing</option>
      
      <option  value="112105124/lec03.mp4">Engineering Materials</option>
      
      <option  value="112105124/lec04.mp4">Engineering Materials</option>
      
      <option  value="112105124/lec05.mp4">Simple Stresses In Machine Elements</option>
      
      <option  value="112105124/lec06.mp4">Simple Stresses In Machine Elements</option>
      
      <option  value="112105124/lec07.mp4">Compound Stresses In Machine Elements</option>
      
      <option  value="112105124/lec08.mp4">Design For Strength</option>
      
      <option  value="112105124/lec09.mp4">Design for Strength</option>
      
      <option  value="112105124/lec10.mp4">Design For Strength</option>
      
      <option  value="112105124/lec11.mp4">Design for Strength</option>
      
      <option  value="112105124/lec12.mp4">Design for Strength</option>
      
      <option  value="112105124/lec13.mp4">Design of Fasteners - I</option>
      
      <option  value="112105124/lec14.mp4">Design of Fasteners - II</option>
      
      <option  value="112105124/lec15.mp4">Design Of Keys and Splines</option>
      
      <option  value="112105124/lec16.mp4">Threaded Fasteners</option>
      
      <option  value="112105124/lec17.mp4">Design Of Threaded Fasteners</option>
      
      <option  value="112105124/lec18.mp4">Power Screws</option>
      
      <option  value="112105124/lec19.mp4">Design Of Power Screws</option>
      
      <option  value="112105124/lec20.mp4">Shaft Coupling - I</option>
      
      <option  value="112105124/lec21.mp4">Shaft Coupling - II</option>
      
      <option  value="112105124/lec22.mp4">Rivet Joints</option>
      
      <option  value="112105124/lec23.mp4">Design of Welded Joints - I</option>
      
      <option  value="112105124/lec24.mp4">Design of Welded Joints - II</option>
      
      <option  value="112105124/lec25.mp4">Design of Joints With Eccentric Loading</option>
      
      <option  value="112105124/lec26.mp4">Design of Joints With Variable Loading</option>
      
      <option  value="112105124/lec27.mp4">Design of Springs</option>
      
      <option  value="112105124/lec28.mp4">Design Of Springs</option>
      
      <option  value="112105124/lec29.mp4">Design Of Springs</option>
      
      <option  value="112105124/lec30.mp4">Belt Drives</option>
      
      <option  value="112105124/lec31.mp4">Belt Drives</option>
      
      <option  value="112105124/lec32.mp4">Belt Drives</option>
      
      <option  value="112105124/lec33.mp4">Design for Strength</option>
      
      <option  value="112105124/lec34.mp4">Design of Shafts</option>
      
      <option  value="112105124/lec35.mp4">Design of Machine Elements - I (V & W)</option>
      
      <option  value="112105124/lec36.mp4">Design of Machine Elements ( V & W )</option>
      
      <option  value="112105124/lec37.mp4">Design of Cylinders & Pressure Vessels - II</option>
      
      <option  value="112105124/lec38.mp4">Design of Cylinders & Pressure Vessels - III</option>
      
      <option  value="112105124/lec39.mp4">Design of Brakes - I</option>
      
      <option  value="112105124/lec40.mp4">Design of Brakes - II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105126</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Manufacturing Processes II</strong></td>
	<td><strong>Prof. A.K. Chattopadhyay,Prof. A.B. Chattopadhyay,Prof. S. Paul</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105126/lec01.mp4">Instructional Objectives - I - Manufacturing Process II</option>
      
      <option  value="112105126/lec02.mp4">Instructional Objectives - II</option>
      
      <option  value="112105126/lec03.mp4">On Tool Geometry</option>
      
      <option  value="112105126/lec04.mp4">Interrelations Among The Tool Angles</option>
      
      <option  value="112105126/lec05.mp4">Mechanism of Chip Formation</option>
      
      <option  value="112105126/lec06.mp4">Orthogonal and Oblique Cutting</option>
      
      <option  value="112105126/lec07.mp4">Use of Chip Breaker in Machining</option>
      
      <option  value="112105126/lec08.mp4">Machining Forces</option>
      
      <option  value="112105126/lec09.mp4">Analytical and Experimental</option>
      
      <option  value="112105126/lec10.mp4">Dynamometers for Measuring Cutting Forces</option>
      
      <option  value="112105126/lec11.mp4">CTCEAC</option>
      
      <option  value="112105126/lec12.mp4">CCTCFA</option>
      
      <option  value="112105126/lec13.mp4">Concept of Machinability and its Improvement</option>
      
      <option  value="112105126/lec14.mp4">Tool Life</option>
      
      <option  value="112105126/lec15.mp4">Conventional Cutting Tool Maths</option>
      
      <option  value="112105126/lec16.mp4">Advanced Tool Materials</option>
      
      <option  value="112105126/lec17.mp4">Kinematics System of Centre Lathe</option>
      
      <option  value="112105126/lec18.mp4">General Purpose Machine Tool Drills</option>
      
      <option  value="112105126/lec19.mp4">Kinematic Systems and Operations</option>
      
      <option  value="112105126/lec20.mp4">Configuration and Kinematic System</option>
      
      <option  value="112105126/lec21.mp4">Mounting of jobs and Cutting Tools in Machine</option>
      
      <option  value="112105126/lec22.mp4">Mounting of jobs and Cutting Tools in Machine</option>
      
      <option  value="112105126/lec23a.mp4">Construction, Operation and Tool Layout</option>
      
      <option  value="112105126/lec23b.mp4">Use of Attachments In Machine Tools</option>
      
      <option  value="112105126/lec24.mp4">Forces Developing and Acting In Machine Tools</option>
      
      <option  value="112105126/lec25.mp4">Estimation of Machining Time</option>
      
      <option  value="112105126/lec26.mp4">Broaching - Principle Systems and Applications</option>
      
      <option  value="112105126/lec27.mp4">Grinding Principle and Application</option>
      
      <option  value="112105126/lec28.mp4">Abrasive Processes</option>
      
      <option  value="112105126/lec29.mp4">Abrasive Processes (Grinding)</option>
      
      <option  value="112105126/lec30.mp4">Super finishing Processes</option>
      
      <option  value="112105126/lec31.mp4">Production of Screw Threads</option>
      
      <option  value="112105126/lec32.mp4">Gear Manufacturing</option>
      
      <option  value="112105126/lec33.mp4">Jigs and Fixtures For Machine Shops</option>
      
      <option  value="112105126/lec34.mp4">Design and Applications of Jigs and Fixtures</option>
      
      <option  value="112105126/lec35.mp4">Non Traditional Manufacturing</option>
      
      <option  value="112105126/lec36.mp4">Ultrasonic Machining</option>
      
      <option  value="112105126/lec37.mp4">Water Jet Machining and Abrasive Water Jet</option>
      
      <option  value="112105126/lec38.mp4">Electro - Chemical Machining</option>
      
      <option  value="112105126/lec39.mp4">Electro - Discharge Machining</option>
      
      <option  value="112105126/lec40.mp4">EBM and LBM</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105128</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Refrigeration and Air Conditioning</strong></td>
	<td><strong>Prof. M. Ramgopal,Prof. R.C. Arora</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105128/lec01.mp4">History of Refrigeration</option>
      
      <option  value="112105128/lec02.mp4">Refrigerant Compressors & Development</option>
      
      <option  value="112105128/lec03.mp4">Applications of RTAC</option>
      
      <option  value="112105128/lec04.mp4">Review of Fundamentals Thermodynamics - I</option>
      
      <option  value="112105128/lec05.mp4">Review of Fundamentals</option>
      
      <option  value="112105128/lec06.mp4">Fundamentals of Fluid Flow</option>
      
      <option  value="112105128/lec07.mp4">Fundamentals of Heat Transfer</option>
      
      <option  value="112105128/lec08.mp4">Methods of Producing low Temperatures</option>
      
      <option  value="112105128/lec09.mp4">Air Cycle Refrigeration Systems</option>
      
      <option  value="112105128/lec10.mp4">Vapour Compression Refrigeration Systems</option>
      
      <option  value="112105128/lec11.mp4">Vapour Compression Refrigeration Systems (Contd.)</option>
      
      <option  value="112105128/lec12.mp4">Vapour Compression Refrigeration Systems (Contd.)</option>
      
      <option  value="112105128/lec13.mp4">Vapour Compression Refrigeration Systems (Contd.)</option>
      
      <option  value="112105128/lec14.mp4">Vapour Absorption Refrigeration Systems</option>
      
      <option  value="112105128/lec15.mp4">Vapour Absorption Refrigeration System</option>
      
      <option  value="112105128/lec16.mp4">Vapour Absorption Refrigeration Systems (Contd.)</option>
      
      <option  value="112105128/lec17.mp4">Vapour Absorption Refrigeration Systems (Contd.)</option>
      
      <option  value="112105128/lec18.mp4">Worked Out Examples - I</option>
      
      <option  value="112105128/lec19.mp4">Worked Out Examples - II</option>
      
      <option  value="112105128/lec20.mp4">Refrigeration System Components : Compressor</option>
      
      <option  value="112105128/lec21.mp4">Refrigeration System Components : Compressor (Contd.)</option>
      
      <option  value="112105128/lec22.mp4">Refrigeration System Components : Compressor (Contd.)</option>
      
      <option  value="112105128/lec23.mp4">Refrigeration System Components : Compressor (Contd.)</option>
      
      <option  value="112105128/lec24.mp4">Refrigeration System Components : Compressor (Contd.)</option>
      
      <option  value="112105128/lec25.mp4">Refrigeration System Components : Compressor (Contd.)</option>
      
      <option  value="112105128/lec26.mp4">Refrigeration System Components : Condensers</option>
      
      <option  value="112105128/lec27.mp4">Refrigeration System Components : Condensers (Contd.)</option>
      
      <option  value="112105128/lec28.mp4">Refrigeration System Components : Evaporators</option>
      
      <option  value="112105128/lec29.mp4">Refrigeration System Components : Evaporators</option>
      
      <option  value="112105128/lec30.mp4">Refrigeration System Components : Expansion Devices</option>
      
      <option  value="112105128/lec31.mp4">Refrigeration System Components : Expansion Devices</option>
      
      <option  value="112105128/lec32.mp4">Analysis of Complete Vapour Compression System</option>
      
      <option  value="112105128/lec33.mp4">Refrigerants</option>
      
      <option  value="112105128/lec34.mp4">Psychrometry</option>
      
      <option  value="112105128/lec35.mp4">Psychrometric Processes</option>
      
      <option  value="112105128/lec36.mp4">Inside Design Condition Thermal Comfort</option>
      
      <option  value="112105128/lec37.mp4">Psychrometry of Air Conditioning Systems</option>
      
      <option  value="112105128/lec38.mp4">Air Conditioning Systems</option>
      
      <option  value="112105128/lec39.mp4">Cooling and Heating Load Calculation : Solar Radiation</option>
      
      <option  value="112105128/lec40.mp4">Cooling and Heating Load Calculations</option>
      
      <option  value="112105128/lec41.mp4">Cooling and Heating Load Calculations (Contd.)</option>
      
      <option  value="112105128/lec42.mp4">Cooling and Heating Load Calculations (Contd.)</option>
      
      <option  value="112105128/lec43.mp4">Selection of Air Conditioning Systems</option>
      
      <option  value="112105128/lec44.mp4">Transmission and Distribution of Air</option>
      
      <option  value="112105128/lec45.mp4">Transmission and Distribution of Air (Contd)</option>
      
      <option  value="112105128/lec46.mp4">Space Air Distribution</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112105171</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Fluid Mechanics</strong></td>
	<td><strong>Prof. S.K. Som</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112105171/mod01lec01.mp4">Introduction and Fundamental Concepts - I</option>
      
      <option  value="112105171/mod01lec02.mp4">Introduction and Fundamental Concepts - II</option>
      
      <option  value="112105171/mod01lec03.mp4">Introduction and Fundamental Concepts - III</option>
      
      <option  value="112105171/mod01lec04.mp4">Fluid Statics Part - I</option>
      
      <option  value="112105171/mod01lec05.mp4">Fluid Statics Part - II</option>
      
      <option  value="112105171/mod01lec06.mp4">Fluid Statics Part - III</option>
      
      <option  value="112105171/mod01lec07.mp4">Fluid Statics Part - IV</option>
      
      <option  value="112105171/mod01lec08.mp4">Fluid Statics Part - V</option>
      
      <option  value="112105171/mod01lec09.mp4">Fluid Statics Part - VI</option>
      
      <option  value="112105171/mod01lec10.mp4">Kinematics of Fluid Part - I</option>
      
      <option  value="112105171/mod01lec11.mp4">Kinematics of Fluid Part - II</option>
      
      <option  value="112105171/mod01lec12.mp4">Kinematics of Fluid Part - III</option>
      
      <option  value="112105171/mod01lec13.mp4">Conservation Equations in Fluid Flow Part - I</option>
      
      <option  value="112105171/mod01lec14.mp4">Conservation Equations in Fluid Flow Part - II</option>
      
      <option  value="112105171/mod01lec15.mp4">Conservation Equations in Fluid Flow Part - III</option>
      
      <option  value="112105171/mod01lec16.mp4">Conservation Equations in Fluid Flow Part - IV</option>
      
      <option  value="112105171/mod01lec17.mp4">Conservation Equations in Fluid Flow Part - V</option>
      
      <option  value="112105171/mod01lec18.mp4">Conservation Equations in Fluid Flow Part - VI</option>
      
      <option  value="112105171/mod01lec19.mp4">Conservation Equations in Fluid Flow Part - VII</option>
      
      <option  value="112105171/mod01lec20.mp4">Conservation Equations in Fluid Flow Part - VIII</option>
      
      <option  value="112105171/mod01lec21.mp4">Conservation Equations in Fluid Flow Part - IX</option>
      
      <option  value="112105171/mod01lec22.mp4">Fluid Flow Applications Part - I</option>
      
      <option  value="112105171/mod01lec23.mp4">Fluid Flow Applications Part - II</option>
      
      <option  value="112105171/mod01lec24.mp4">Fluid Flow Applications Part - III</option>
      
      <option  value="112105171/mod01lec25.mp4">Fluid Flow Applications Part - IV</option>
      
      <option  value="112105171/mod01lec26.mp4">Fluid Flow Applications Part - V</option>
      
      <option  value="112105171/mod01lec27.mp4">Fluid Flow Applications Part - VI</option>
      
      <option  value="112105171/mod01lec28.mp4">Fluid Flow Applications Part - VII</option>
      
      <option  value="112105171/mod01lec29.mp4">Incompressible Viscous Flows Part I</option>
      
      <option  value="112105171/mod01lec30.mp4">Incompressible Viscous Flows Part II</option>
      
      <option  value="112105171/mod01lec31.mp4">Incompressible Viscous Flows Part III</option>
      
      <option  value="112105171/mod01lec32.mp4">Incompressible Viscous Flows Part IV</option>
      
      <option  value="112105171/mod01lec33.mp4">Application of ViscousFlow Through Pipes Part I</option>
      
      <option  value="112105171/mod01lec34.mp4">Application of ViscousFlow Through Pipes Part II</option>
      
      <option  value="112105171/mod01lec35.mp4">Application of ViscousFlow Through Pipes Part III</option>
      
      <option  value="112105171/mod01lec36.mp4">Principles of Similarity Part I</option>
      
      <option  value="112105171/mod01lec37.mp4">Principles of Similarity Part II</option>
      
      <option  value="112105171/mod01lec38.mp4">Principles of Similarity Part III</option>
      
      <option  value="112105171/mod01lec39.mp4">Flow of Ideal Fluids Part I</option>
      
      <option  value="112105171/mod01lec40.mp4">Flow of Ideal Fluids Part II</option>
      
      <option  value="112105171/mod01lec41.mp4">Flows with a Free Surface Part I</option>
      
      <option  value="112105171/mod01lec42.mp4">Flows with a Free Surface Part II</option>
      
      <option  value="112105171/mod01lec43.mp4">Flows with a Free Surface Part III</option>
      
      <option  value="112105171/mod01lec44.mp4">A Few Unsteady Flow Phenomena in Practice Part I</option>
      
      <option  value="112105171/mod01lec45.mp4">A Few Unsteady Flow Phenomena in Practice Part II</option>
      
      <option  value="112105171/mod01lec46.mp4">Introduction to Laminar Boundary Layer Part I</option>
      
      <option  value="112105171/mod01lec47.mp4">Introduction to Laminar Boundary Layer Part II</option>
      
      <option  value="112105171/mod01lec48.mp4">Introduction to Turbulent Flow Part I</option>
      
      <option  value="112105171/mod01lec49.mp4">Introduction to Turbulent Flow Part II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106064</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Design and Optimization of Energy systems</strong></td>
	<td><strong>Prof. C. Balaji</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106064/mod01lec01.mp4">Introduction to Optimization</option>
      
      <option  value="112106064/mod01lec02.mp4">System Design and Analysis</option>
      
      <option  value="112106064/mod01lec03.mp4">Workable system </option>
      
      <option  value="112106064/mod01lec04.mp4">System simulation</option>
      
      <option  value="112106064/mod01lec05.mp4">Information flow diagrams</option>
      
      <option  value="112106064/mod01lec06.mp4">Successive substitution method</option>
      
      <option  value="112106064/mod01lec07.mp4">Successive substitution method contd</option>
      
      <option  value="112106064/mod01lec08.mp4">Successive substitution method and Newton-Raphson method</option>
      
      <option  value="112106064/mod01lec09.mp4">Newton-Raphson method contd</option>
      
      <option  value="112106064/mod01lec10.mp4">Convergence characteristics of Newton-Raphson method</option>
      
      <option  value="112106064/mod01lec11.mp4">Newton-Raphson method for multiple variables</option>
      
      <option  value="112106064/mod01lec12.mp4">Solution of system of linear equations</option>
      
      <option  value="112106064/mod01lec13.mp4">Introduction to Curve fitting</option>
      
      <option  value="112106064/mod01lec14.mp4">Example for Lagrange interpolation</option>
      
      <option  value="112106064/mod01lec15.mp4">Lagrange interpolation contd</option>
      
      <option  value="112106064/mod01lec16.mp4">Best fit</option>
      
      <option  value="112106064/mod01lec17.mp4">Least Square Regression</option>
      
      <option  value="112106064/mod01lec18.mp4">Least Square Regression contd</option>
      
      <option  value="112106064/mod01lec19.mp4">Least Square Regression contd</option>
      
      <option  value="112106064/mod01lec20.mp4">Non-linear Regression  (Gauss - Newton Algorithm)</option>
      
      <option  value="112106064/mod01lec21.mp4">Optimization- Basic ideas</option>
      
      <option  value="112106064/mod01lec22.mp4">Properties of objective function and cardinal ideas in optimization</option>
      
      <option  value="112106064/mod01lec23.mp4">Unconstrained optimization</option>
      
      <option  value="112106064/mod01lec24.mp4">Constrained optimization problems</option>
      
      <option  value="112106064/mod01lec25.mp4">Mathematical proof of the Lagrange multiplier method</option>
      
      <option  value="112106064/mod01lec26.mp4">Test for Maxima/ Minima</option>
      
      <option  value="112106064/mod01lec27.mp4">Handling in-equality constraints</option>
      
      <option  value="112106064/mod01lec28.mp4">Kuhn-Tucker conditions contd</option>
      
      <option  value="112106064/mod01lec29.mp4">Uni-modal function and search methods</option>
      
      <option  value="112106064/mod01lec30.mp4">Dichotomous search</option>
      
      <option  value="112106064/mod01lec31.mp4">Fibonacci search method</option>
      
      <option  value="112106064/mod01lec32.mp4">Reduction ratio of Fibonacci search method</option>
      
      <option  value="112106064/mod01lec33.mp4">Introduction to multi-variable optimization</option>
      
      <option  value="112106064/mod01lec34.mp4">The Conjugate gradient method</option>
      
      <option  value="112106064/mod01lec35.mp4">The Conjugate gradient method contd</option>
      
      <option  value="112106064/mod01lec36.mp4">Linear programming</option>
      
      <option  value="112106064/mod01lec37.mp4">Dynamic programming</option>
      
      <option  value="112106064/mod01lec38.mp4">Genetic Algorithms</option>
      
      <option  value="112106064/mod01lec39.mp4">Genetic Algorithms contd</option>
      
      <option  value="112106064/mod01lec40.mp4">Simulated Annealing and Summary </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106065</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Engineering Fracture Mechanics</strong></td>
	<td><strong>Prof. K. Ramesh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106065/mod01lec01.mp4">EFM Course Outline</option>
      
      <option  value="112106065/mod01lec02.mp4">Spectacular Failures</option>
      
      <option  value="112106065/mod01lec03.mp4">Lessons from Spectacular Failures</option>
      
      <option  value="112106065/mod01lec04.mp4">LEFM and EPFM</option>
      
      <option  value="112106065/mod01lec05.mp4">Fracture Mechanics is Holistic</option>
      
      <option  value="112106065/mod01lec06.mp4">Fatigue Crack Growth Model</option>
      
      <option  value="112106065/mod01lec07.mp4">Crack Growth and Fracture Mechanisms</option>
      
      <option  value="112106065/mod02lec08.mp4">Elastic Strain Energy</option>
      
      <option  value="112106065/mod02lec09.mp4">Fracture Strength by Griffith</option>
      
      <option  value="112106065/mod02lec10.mp4">Energy Release Rate</option>
      
      <option  value="112106065/mod02lec11.mp4">Utility of Energy Release Rate</option>
      
      <option  value="112106065/mod02lec12.mp4">Pop-in Phenomenon</option>
      
      <option  value="112106065/mod03lec13.mp4">Displacement and Stress Formulations</option>
      
      <option  value="112106065/mod03lec14.mp4">Forms of Stress Functions</option>
      
      <option  value="112106065/mod04lec15.mp4">Airy�s Stress Function for Mode-I</option>
      
      <option  value="112106065/mod04lec16.mp4">Westergaard Solution of Stress Field for Mode-I</option>
      
      <option  value="112106065/mod04lec17.mp4">Displacement Field for Mode-I</option>
      
      <option  value="112106065/mod04lec18.mp4">Relation between K<sub>I</sub> and G<sub>I</sub></option>
      
      <option  value="112106065/mod04lec19.mp4">Stress Field in Mode-II</option>
      
      <option  value="112106065/mod04lec20.mp4">Generalised Westergaard Approach</option>
      
      <option  value="112106065/mod04lec21.mp4">William�s Eigen Function Approach</option>
      
      <option  value="112106065/mod04lec22.mp4">Multi-parameter Stress Field Equations</option>
      
      <option  value="112106065/mod04lec23.mp4">Validation of Multi-parameter Field Equations</option>
      
      <option  value="112106065/mod05lec24.mp4">Discussion Session-I</option>
      
      <option  value="112106065/mod06lec25.mp4">Evaluation of SIF for Various Geometries</option>
      
      <option  value="112106065/mod06lec26.mp4">SIF for Embedded Cracks</option>
      
      <option  value="112106065/mod06lec27.mp4">SIF for Surface Cracks</option>
      
      <option  value="112106065/mod06lec28.mp4">Modeling of Plastic Deformation</option>
      
      <option  value="112106065/mod06lec29.mp4">Irwin�s Model</option>
      
      <option  value="112106065/mod06lec30.mp4">Dugdale Model</option>
      
      <option  value="112106065/mod06lec31.mp4">Fracture Toughness Testing</option>
      
      <option  value="112106065/mod06lec32.mp4">Plane Strain Fracture Toughness Testing</option>
      
      <option  value="112106065/mod06lec33.mp4">Plane Stress Fracture Toughness Testing</option>
      
      <option  value="112106065/mod07lec34.mp4">Paris Law and Sigmoidal Curve</option>
      
      <option  value="112106065/mod07lec35.mp4">Crack Closure</option>
      
      <option  value="112106065/mod07lec36.mp4">Crack Growth Models</option>
      
      <option  value="112106065/mod08lec37.mp4">J-Integral</option>
      
      <option  value="112106065/mod08lec38.mp4">HRR Field and CTOD</option>
      
      <option  value="112106065/mod08lec39.mp4">FAD and Mixed Mode Fracture</option>
      
      <option  value="112106065/mod08lec40.mp4">Crack Arrest and Repair Methodologies</option>
      
      <option  value="112106065/mod09lec41.mp4">Discussion Session - II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106068</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Experimental Stress Analysis</strong></td>
	<td><strong>Prof. K. Ramesh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106068/mod01lec01.mp4">Overview of Experimental Stress Analysis</option>
      
      <option  value="112106068/mod01lec02.mp4">Optical Methods Work as Optical Computers</option>
      
      <option  value="112106068/mod01lec03.mp4">Stress, Strain and Displacement Fields</option>
      
      <option  value="112106068/mod01lec04.mp4">Physical Principle of Strain Gauges, Photoelasticity and Moir�</option>
      
      <option  value="112106068/mod01lec05.mp4">Introduction to Moir�, Brittle Coatings and Holography</option>
      
      <option  value="112106068/mod01lec06.mp4">Hologram Interferometry, Speckle Methods</option>
      
      <option  value="112106068/mod01lec07.mp4">Introduction to Shearography, TSA, DIC and Caustics</option>
      
      <option  value="112106068/mod01lec08.mp4">Fringe Patterns � Richness of Qualitative Information</option>
      
      <option  value="112106068/mod01lec09.mp4">Multi-Scale Analysis in Experimental Mechanics</option>
      
      <option  value="112106068/mod01lec10.mp4">Selection of an Experimental Technique</option>
      
      <option  value="112106068/mod02lec11.mp4">Introduction to Transmission Photoelasticity</option>
      
      <option  value="112106068/mod02lec12.mp4">Ordinary and Extraordinary Rays</option>
      
      <option  value="112106068/mod02lec13.mp4">Light Ellipse, Passage of Light Through a Crystal Plate</option>
      
      <option  value="112106068/mod02lec14.mp4">Retardation Plates, Stress-optic Law</option>
      
      <option  value="112106068/mod02lec15mp4">Plane Polariscope</option>
      
      <option  value="112106068/mod02lec16mp4">Jones Calculus</option>
      
      <option  value="112106068/mod02lec17mp4">Circular Polariscope</option>
      
      <option  value="112106068/mod02lec18mp4">Determination of Photoelastic Parameters at an Arbitrary Point</option>
      
      <option  value="112106068/mod02lec19mp4">Tardy�s Method of Compensation</option>
      
      <option  value="112106068/mod02lec20.mp4">Calibration of Photo elastic Materials</option>
      
      <option  value="112106068/mod02lec21.mp4">Fringe Thinning Methodologies</option>
      
      <option  value="112106068/mod02lec22.mp4">Fringe Ordering in Photoelasticity</option>
      
      <option  value="112106068/mod02lec23.mp4">Miscellaneous Topics in Transmission Photoelasticity</option>
      
      <option  value="112106068/mod03lec24.mp4">Three Dimensional Photoelasticity</option>
      
      <option  value="112106068/mod03lec25.mp4">Overview of Digital Photoelasticity</option>
      
      <option  value="112106068/mod04lec26.mp4">Introduction to Photoelastic Coatings</option>
      
      <option  value="112106068/mod04lec27.mp4">Correction Factors for Photoelastic Coatings</option>
      
      <option  value="112106068/mod04lec28.mp4">Coating Materials, Selection of Coating Thickness, Industrial Application of Photoelastic Coatings</option>
      
      <option  value="112106068/mod04lec29.mp4">Calibration of Photoelastic Coatings, Introduction to Brittle Coatings</option>
      
      <option  value="112106068/mod04lec30.mp4">Analysis of Brittle Coatings</option>
      
      <option  value="112106068/mod05lec31.mp4">Introduction to Strain Gauges</option>
      
      <option  value="112106068/mod05lec32.mp4">Strain Sensitivity of a Strain Gauge, Bridge Sensitivity, Rosettes</option>
      
      <option  value="112106068/mod05lec33.mp4">Strain Gauge Alloys, Carriers and Adhesives</option>
      
      <option  value="112106068/mod05lec34.mp4">Performance of Strain Gauge System</option>
      
      <option  value="112106068/mod05lec35.mp4">Temperature Compensation, Two-wire and Three-wire Circuits</option>
      
      <option  value="112106068/mod05lec36.mp4">Strain Gauge Selection</option>
      
      <option  value="112106068/mod05lec37.mp4">Bonding of a Strain Gauge</option>
      
      <option  value="112106068/mod05lec38.mp4">Soldering, Accounting for Transverse Sensitivity Effects</option>
      
      <option  value="112106068/mod05lec39.mp4">Correction Factors for Special Applications </option>
      
      <option  value="112106068/mod05lec40.mp4">Special Gauges</option>
      
      <option  value="112106068/mod06lec41.mp4">Questions and Answers</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106073</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Rocket Propulsion</strong></td>
	<td><strong>Prof. K. Ramamurthi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106073/mod01lec01.mp4">Introduction</option>
      
      <option  value="112106073/mod01lec02.mp4">Motion in Space</option>
      
      <option  value="112106073/mod01lec03.mp4">Rotational Frame of Reference and Orbital Velocities</option>
      
      <option  value="112106073/mod01lec04.mp4">Velocity Requirements</option>
      
      <option  value="112106073/mod01lec05.mp4">Theory of Rocket Propulsion</option>
      
      <option  value="112106073/mod01lec06.mp4">Rocket Equation and Staging of Rockets</option>
      
      <option  value="112106073/mod01lec07.mp4">Review of Rocket Principles; Propulsion Efficiency</option>
      
      <option  value="112106073/mod01lec08.mp4">Examples Illustrating Theory of Rocket Propulsion and Introduction to   Nozzles</option>
      
      <option  value="112106073/mod01lec09.mp4">Theory of Nozzles</option>
      
      <option  value="112106073/mod01lec10.mp4">Nozzle Shape</option>
      
      <option  value="112106073/mod01lec11.mp4">Area Ratio of Nozzles; Under-expansion and Over-expansion</option>
      
      <option  value="112106073/mod01lec12.mp4">Characteristic Velocity and Thrust Coefficient</option>
      
      <option  value="112106073/mod01lec13.mp4">Divergence Loss in Conical Nozzles and the Bell Nozzle</option>
      
      <option  value="112106073/mod01lec14.mp4">Unconventional Nozzles and Problems in Nozzles</option>
      
      <option  value="112106073/mod01lec15.mp4">Criterion for Choice of Chemical Propellants</option>
      
      <option  value="112106073/mod01lec16.mp4">Choice of Fuel-Rich Propellants</option>
      
      <option  value="112106073/mod01lec17.mp4">Performance Prediction Analysis</option>
      
      <option  value="112106073/mod01lec18.mp4">Dissociation of Products of Combustion</option>
      
      <option  value="112106073/mod01lec19.mp4">Shifting Equilibrium and Frozen Flow in Nozzles</option>
      
      <option  value="112106073/mod01lec20.mp4">Factors Influencing Choice of Chemical Propellants</option>
      
      <option  value="112106073/mod01lec21.mp4">Low Energy Liquid Propellants and Hybrid Propellants</option>
      
      <option  value="112106073/mod01lec22.mp4">Introduction to Solid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec23.mp4">Burn Rate of Solid Propellants and Equilibrium Pressure in Solid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec24.mp4">Design Aspects of Solid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec25.mp4">Burning Surface Area of Solid Propellant Grains</option>
      
      <option  value="112106073/mod01lec26.mp4">Ignition of Solid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec27.mp4">Review of Solid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec28.mp4">Feed Systems for Liquid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec29.mp4">Feed System Cycles for Pump Fed Liquid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec30.mp4">Analysis of Gas Generator and Staged Combustion Cycles and Introduction to Injectors</option>
      
      <option  value="112106073/mod01lec31.mp4">Injectors, Cooling of Chamber and Mixture Ratio Distribution</option>
      
      <option  value="112106073/mod01lec32.mp4">Efficiencies due to Mixture Ratio Distribution and Incomplete Vaporization</option>
      
      <option  value="112106073/mod01lec33.mp4">Pumps and Turbines; Propellant Feed System at Zero �g� Conditions</option>
      
      <option  value="112106073/mod01lec34.mp4">Review of Liquid Bi-propellant Rockets and Introduction to Mono-propellant Rockets</option>
      
      <option  value="112106073/mod01lec35.mp4">Introduction to Hybrid Rockets and a Simple Illustration of Combustion Instability in Liquid Propellant Rockets</option>
      
      <option  value="112106073/mod01lec36.mp4">Combustion Instability in Solid Propellant and Liquid Propellant Rockets � Bulk and Wave Modes</option>
      
      <option  value="112106073/mod01lec37.mp4">Wave modes of Oscillation</option>
      
      <option  value="112106073/mod01lec38.mp4">Mechanisms Causing Instabilities and Strategies for Avoiding Combustion Instability</option>
      
      <option  value="112106073/mod01lec39.mp4">Electric and Magnetic Fields and the Electrostatic Thruster</option>
      
      <option  value="112106073/mod01lec40.mp4">Electrical Thrusters</option>
      
      <option  value="112106073/mod01lec41.mp4">Advances in Rocket Propulsion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106130</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Advanced Finite Elements Analysis</strong></td>
	<td><strong>Dr. R. Krishnakumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option><option  value="112106130/lec01.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec02.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec03.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec04.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec05.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec06.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec07.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec08.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec09.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec10.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec11.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec12.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec13.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec14.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec15.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec16.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec17.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec18.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec19.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec20.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec21.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec22.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec23.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec24.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec25.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec26.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec27.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec28.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec29.mp4">Advanced Finite Elements Analysis</option>
      
      <option  value="112106130/lec30.mp4">Advanced Finite Elements Analysis</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106131</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Advanced Operations Research</strong></td>
	<td><strong>Prof. G. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106131/lec01.mp4">Introduction and Linear Programming</option>
      
      <option  value="112106131/lec02.mp4">Revised Simplex Algorithm</option>
      
      <option  value="112106131/lec03.mp4">Simplex Method for Bounded Variables</option>
      
      <option  value="112106131/lec04.mp4">One Dimensional Cutting Stock Problem</option>
      
      <option  value="112106131/lec05.mp4">One Dimensional Cutting Stock Problem (Contd)</option>
      
      <option  value="112106131/lec06.mp4">Dantzig-Wolfe Decomposition Algorithm</option>
      
      <option  value="112106131/lec07.mp4">Dantzig-Wolfe Decomposition Algorithm Primal-Dual Algorithm</option>
      
      <option  value="112106131/lec08.mp4">Primal-Dual Algorithm</option>
      
      <option  value="112106131/lec09.mp4">Goal Programming-Formulations</option>
      
      <option  value="112106131/lec10.mp4">Goal Programming Solutions Complexity of Simplex Algorithm</option>
      
      <option  value="112106131/lec11.mp4">Complexity of Simplex Algorithm (Contd) Integer Programming</option>
      
      <option  value="112106131/lec12.mp4">Integer Programming-Formulations</option>
      
      <option  value="112106131/lec13.mp4">Solving Zero-One Problems</option>
      
      <option  value="112106131/lec14.mp4">Solving Zero-One Problems (Contd)</option>
      
      <option  value="112106131/lec15.mp4">Branch And Bond Algorithm For Integer Programming</option>
      
      <option  value="112106131/lec16.mp4">Cutting Plane Algorithm</option>
      
      <option  value="112106131/lec17.mp4">All Integer Primal Algorithm</option>
      
      <option  value="112106131/lec18.mp4">All Integer Dual Algorithm</option>
      
      <option  value="112106131/lec19.mp4">Network Models</option>
      
      <option  value="112106131/lec20.mp4">Shortest Path Problem</option>
      
      <option  value="112106131/lec21.mp4">Successive Shortest Path Problem</option>
      
      <option  value="112106131/lec22.mp4">Maximum Flow Problem</option>
      
      <option  value="112106131/lec23.mp4">Minimum Cost Flow Problem</option>
      
      <option  value="112106131/lec24.mp4">Traveling Salesman Problem (TSP)</option>
      
      <option  value="112106131/lec25.mp4">Branch and Bound Algorithms for TSP</option>
      
      <option  value="112106131/lec26.mp4">Heuristics for TSP</option>
      
      <option  value="112106131/lec27.mp4">Heuristics for TSP (Contd)</option>
      
      <option  value="112106131/lec28.mp4">Chinese Postman Problem</option>
      
      <option  value="112106131/lec29.mp4">Vehicle Routeing Problem</option>
      
      <option  value="112106131/lec30.mp4">Queueing Models</option>
      
      <option  value="112106131/lec31.mp4">Single Server Queueing Models</option>
      
      <option  value="112106131/lec32.mp4">Multiple Server Queueing Models</option>
      
      <option  value="112106131/lec33.mp4">Game Theory</option>
      
      <option  value="112106131/lec34.mp4">Critical Path Method</option>
      
      <option  value="112106131/lec35.mp4">Quadratic Programming</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106133</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Applied Thermodynamics</strong></td>
	<td><strong>Prof. T. Sundararajan,Prof. U.S. Premananda Shet,Prof. J.M. Mallikarjuna</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106133/Applied_Thermodynamics/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106134</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Fundamentals of Operations Research</strong></td>
	<td><strong>Prof. G. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106134/lec01.mp4">Introduction to Linear Programming Formulations</option>
      
      <option  value="112106134/lec02.mp4">Linear Programming Formulations (Contd...)</option>
      
      <option  value="112106134/lec03.mp4">Linear Programming Solutions- Graphical Methods</option>
      
      <option  value="112106134/lec04.mp4">Linear Programming Solutions - Simplex Algorithm</option>
      
      <option  value="112106134/lec05.mp4">Simplex Algorithm-Minimization Problems</option>
      
      <option  value="112106134/lec06.mp4">Simplex Algorithm - Initialization and Iteration</option>
      
      <option  value="112106134/lec07.mp4">Simplex Algorithm - Termination</option>
      
      <option  value="112106134/lec08.mp4">Introduction to Duality</option>
      
      <option  value="112106134/lec09.mp4">Primal Dual Relationships, Duality Theorems</option>
      
      <option  value="112106134/lec10.mp4">Dual Variables and the Simplex Tables</option>
      
      <option  value="112106134/lec11.mp4">Simplex Algorithm in Matrix Form Introduction to Sensitivity Analysis</option>
      
      <option  value="112106134/lec12.mp4">Sensitivity Analysis Transportation Problem (Introduction)</option>
      
      <option  value="112106134/lec13.mp4">Transportation Problem, Methods for Initial Basic Feasible Solutions</option>
      
      <option  value="112106134/lec14.mp4">Transportation Problem-Optimal Solutions</option>
      
      <option  value="112106134/lec15.mp4">Transportation Problem - Other Issues</option>
      
      <option  value="112106134/lec16.mp4">Assignment Problem - Hungarian Algorithm</option>
      
      <option  value="112106134/lec17.mp4">Assignment Problem - Other Issues Introduction to Dynamic Programming</option>
      
      <option  value="112106134/lec18.mp4">Dynamic Programming - Examples Involving Discrete Variables</option>
      
      <option  value="112106134/lec19.mp4">Dynamic Programming - Continuous Variables</option>
      
      <option  value="112106134/lec20.mp4">Dynamic Programming - Examples to Solve Linear & Integer Programming Problems</option>
      
      <option  value="112106134/lec21.mp4">Inventory Models - Deterministic Models</option>
      
      <option  value="112106134/lec22.mp4">Inventory Models - Discount Models, Constrained Inventory Problems, Lagrangean Multipliers, Conclusions</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106135</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Introduction to Finite Element Method</strong></td>
	<td><strong>Dr. R. Krishnakumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106135/lec01.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec02.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec03.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec04.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec05.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec06.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec07.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec08.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec09.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec10.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec11.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec12.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec13.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec14.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec15.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec16.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec17.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec18.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec19.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec20.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec21.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec22.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec23.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec24.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec25.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec26.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec27.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec28.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec29.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec30.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec31.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec32.mp4">Introduction to Finite Element Method</option>
      
      <option  value="112106135/lec33.mp4">Introduction to Finite Element Method</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106137</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Machine Design II</strong></td>
	<td><strong>Prof. K. Gopinath,Prof. M.M. Mayuram</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106137/Machine_Design_II/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106138</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Mechanical Measurements and Metrology</strong></td>
	<td><strong>Prof. S.P. Venkateshan,Prof. Shunmugam M. S</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106138/lec01.mp4">Introduction to the Study of Mechanical Measurement</option>
      
      <option  value="112106138/lec02.mp4">Errors in Measurement</option>
      
      <option  value="112106138/lec03.mp4">Errors in Measurement(Contd..)</option>
      
      <option  value="112106138/lec04.mp4">Propagation of Errors</option>
      
      <option  value="112106138/lec05.mp4">Regression Analysis</option>
      
      <option  value="112106138/lec06.mp4">Regression Analysis (Contd)</option>
      
      <option  value="112106138/lec07.mp4">Design of Experiments</option>
      
      <option  value="112106138/lec08.mp4">Design of Experiments(Contd)</option>
      
      <option  value="112106138/lec09.mp4">Temperature Measurement</option>
      
      <option  value="112106138/lec10.mp4">Overview of Thermometry</option>
      
      <option  value="112106138/lec11.mp4">Thermoelectric Thermometry</option>
      
      <option  value="112106138/lec12.mp4">Thermoelectric Thermometry(Contd)</option>
      
      <option  value="112106138/lec13.mp4">Measurement of Temperature Under Various Conditions</option>
      
      <option  value="112106138/lec14.mp4">Errors in Temperature Measurement</option>
      
      <option  value="112106138/lec15.mp4">Measurement of Transient Temperature and Resistance Thermometry</option>
      
      <option  value="112106138/lec16.mp4">Resistance Thermometry(Contd)</option>
      
      <option  value="112106138/lec17.mp4">Resistance Thermometry(Contd)and pyrometry</option>
      
      <option  value="112106138/lec18.mp4">pyrometry(Contd)</option>
      
      <option  value="112106138/lec19.mp4">pyrometry(Contd)</option>
      
      <option  value="112106138/lec20.mp4">Pressure Measurement(Contd)</option>
      
      <option  value="112106138/lec21.mp4">Pressure Measurement(Contd)</option>
      
      <option  value="112106138/lec22.mp4">Pressure Measurement(Contd)</option>
      
      <option  value="112106138/lec23.mp4">Pressure Measurement(Contd)</option>
      
      <option  value="112106138/lec24.mp4">Transient Response of Pressure Transducers</option>
      
      <option  value="112106138/lec25.mp4">Transient Response of Pressure Transducers</option>
      
      <option  value="112106138/lec26.mp4">Measurement of High Vacuum</option>
      
      <option  value="112106138/lec27.mp4">Measurement of Fluid Velocity</option>
      
      <option  value="112106138/lec28.mp4">Hot Wire Anemometry and Laser Doppler Velocimetry</option>
      
      <option  value="112106138/lec29.mp4">Laser Doppler Velocimetry and Ultrasonic Methods</option>
      
      <option  value="112106138/lec30.mp4">Measurement of Heat Flux</option>
      
      <option  value="112106138/lec31.mp4">Measurement of Heat Flux(Contd)</option>
      
      <option  value="112106138/lec32.mp4">Transient Method of Heat Flux Measurement</option>
      
      <option  value="112106138/lec33.mp4">Measurement of Volume and Mass Flow Rate of Fluid</option>
      
      <option  value="112106138/lec34.mp4">Flow Measuring Devices</option>
      
      <option  value="112106138/lec35.mp4">Measurement of Stagnation and Bulk Mean Temperature</option>
      
      <option  value="112106138/lec36.mp4">Measurement of Thermo-Physical Properties</option>
      
      <option  value="112106138/lec37.mp4">Measurement of Thermal Conductivity</option>
      
      <option  value="112106138/lec38.mp4">Measurement of Heat Capacity and Heating Value</option>
      
      <option  value="112106138/lec39.mp4">Measurement of Viscosity</option>
      
      <option  value="112106138/lec40.mp4">Measurement of Viscosity(Contd)</option>
      
      <option  value="112106138/lec41.mp4">Integrating Sphere and Measurement of Emissivity</option>
      
      <option  value="112106138/lec42.mp4">Measurements of Gas Composition</option>
      
      <option  value="112106138/lec43.mp4">Measurements of Gas Composition(Contd)</option>
      
      <option  value="112106138/lec44.mp4">Measurements of Gas Composition and Smoke</option>
      
      <option  value="112106138/lec45.mp4">Measurement of Force</option>
      
      <option  value="112106138/lec46.mp4">Force Measurement</option>
      
      <option  value="112106138/lec47.mp4">Vibration and Acceleration Measurement</option>
      
      <option  value="112106138/lec48.mp4">Laser Doppler Accelerometer,Speed,Torque</option>
      
      <option  value="112106138/lec49.mp4">General Issues in Mechanical Measurement</option>
      
      <option  value="112106138/lec50.mp4">Case Studies</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106139</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Mechanical Measurements and Metrology</strong></td>
	<td><strong>Prof. S.P. Venkateshan,Prof. Shunmugam M. S</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106139/Mechanical_Measurements_Metrology/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106140</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Principles of Mechanical Measurements</strong></td>
	<td><strong>Prof. R. Raman</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106140/lec01.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec02.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec03.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec04.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec05.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec06.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec07.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec08.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec09.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec10.mp4">Principles of Mechanical Measurements</option>
      
      <option  value="112106140/lec11.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec12.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec13.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec14.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec15.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec16.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec17.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec18.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec19.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec20.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec21.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec22.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec23.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec24.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec25.mp4">Principles Of Mechanical Measurements</option>
      
      <option  value="112106140/lec26.mp4">Principles Of Mechanical Measurements</option>
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106141</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Strength of Materials</strong></td>
	<td><strong>Prof. M.S. Sivakumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106141/Strength_of_Materials/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106155</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Conduction And Radiation</strong></td>
	<td><strong>Prof. C. Balaji</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106155/mod01lec01.mp4">Importance of Thermal Radiation</option>
      
      <option  value="112106155/mod01lec02.mp4">Blackbody definition</option>
      
      <option  value="112106155/mod01lec03.mp4">Solid angle, spectral radiation intensity</option>
      
      <option  value="112106155/mod01lec04.mp4">Radiation pressure and radiation energy density</option>
      
      <option  value="112106155/mod01lec05.mp4">Relationship between �I� and �T� and Candidate blackbody distribution functions</option>
      
      <option  value="112106155/mod01lec06.mp4">Candidate blackbody distribution functions contd...</option>
      
      <option  value="112106155/mod01lec07.mp4">Planck's blackbody radiation distribution function</option>
      
      <option  value="112106155/mod01lec08.mp4">Planck's distribution and Wien's displacement law</option>
      
      <option  value="112106155/mod01lec09.mp4">Universal blackbody function</option>
      
      <option  value="112106155/mod01lec10.mp4">Emissivity</option>
      
      <option  value="112106155/mod01lec11.mp4">Emissivity contd...</option>
      
      <option  value="112106155/mod01lec12.mp4">Emissivity contd....</option>
      
      <option  value="112106155/mod01lec13.mp4">Kirchoff law, Absorptivity</option>
      
      <option  value="112106155/mod01lec14.mp4">Kirchoff law, Absorptivity contd...</option>
      
      <option  value="112106155/mod01lec15.mp4">Problems on emissivity, absorptivity</option>
      
      <option  value="112106155/mod01lec16.mp4">Reflectivity</option>
      
      <option  value="112106155/mod01lec17.mp4">Transmissivity</option>
      
      <option  value="112106155/mod01lec18.mp4">Problems on reflectivity and transmissivity</option>
      
      <option  value="112106155/mod01lec19.mp4">Radiation heat transfer between surfaces</option>
      
      <option  value="112106155/mod01lec20.mp4">View factor</option>
      
      <option  value="112106155/mod01lec21.mp4">View factor contd...</option>
      
      <option  value="112106155/mod01lec22.mp4">View factor contd....</option>
      
      <option  value="112106155/mod01lec23.mp4">Enclosure analysis</option>
      
      <option  value="112106155/mod01lec24.mp4">Enclosure analysis contd...</option>
      
      <option  value="112106155/mod01lec25.mp4">Enclosure analysis- Gray surface</option>
      
      <option  value="112106155/mod01lec26.mp4">Enclosure analysis- Non gray surfaces</option>
      
      <option  value="112106155/mod01lec27.mp4">Radiation in participating media</option>
      
      <option  value="112106155/mod01lec28.mp4">Solution to the RTE</option>
      
      <option  value="112106155/mod01lec29.mp4">Concept of mean beam length</option>
      
      <option  value="112106155/mod01lec30.mp4">Enclosure analysis in the presence of absorbing/ emitting gas</option>
      
      <option  value="112106155/mod01lec31.mp4">Emissivities and absorptivities of Gas mixtures</option>
      
      <option  value="112106155/mod01lec32.mp4">Conduction- Introduction</option>
      
      <option  value="112106155/mod01lec33.mp4">Conduction- Energy equation</option>
      
      <option  value="112106155/mod01lec34.mp4">Conduction- 1D, steady state</option>
      
      <option  value="112106155/mod01lec35.mp4">Conduction- 1D, heat generation</option>
      
      <option  value="112106155/mod01lec36.mp4">Fin heat transfer- I</option>
      
      <option  value="112106155/mod01lec37.mp4">Fin heat transfer- II</option>
      
      <option  value="112106155/mod01lec38.mp4">Conduction- Cylindrical and Spherical geometries</option>
      
      <option  value="112106155/mod01lec39.mp4">Transient conduction</option>
      
      <option  value="112106155/mod01lec40.mp4">Transient conduction contd...</option>
      
      <option  value="112106155/mod01lec41.mp4">Two dimensional steady state conduction</option>
      
      <option  value="112106155/mod01lec42.mp4">Analytical solution for Laplace equation</option>
      
      <option  value="112106155/mod01lec43.mp4">Numerical methods in conduction</option>
      
      <option  value="112106155/mod01lec44.mp4">Numerical methods in conduction contd...</option>
      
      <option  value="112106155/mod01lec45.mp4">Conduction with change of phase</option>
      
      <option  value="112106155/mod01lec46.mp4">Conduction with change of phase contd...</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112106175</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Fluid 

Power Control</strong></td>
	<td><strong>Jagadeesha T</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112106175/Module 1/Lecture 1.pdf">Lecture 1</option>
      
      <option  value="112106175/Module 1/Lecture 2.pdf">Lecture 2</option>
      
      <option  value="112106175/Module 1/Lecture 3.pdf">Lecture 3</option>
      
      <option  value="112106175/Module 1/Lecture 4.pdf">Lecture 4</option>
      
      <option  value="112106175/Module 1/Lecture 5.pdf">Lecture 5</option>
      
      <option  value="112106175/Module 1/Lecture 6.pdf">Lecture 6</option>
      
      <option  value="112106175/Module 1/Lecture 7.pdf">Lecture 7</option>
      
      <option  value="112106175/Module 1/Lecture 8.pdf">Lecture 8</option>
      
      <option  value="112106175/Module 1/Lecture 9.pdf">Lecture 9</option>
      
      <option  value="112106175/Module 1/Lecture 10.pdf">Lecture 10</option>
      
      <option  value="112106175/Module 1/Lecture 11.pdf">Lecture 11</option>
      
      <option  value="112106175/Module 1/Appendix A.pdf">Appendix A</option>
      
      <option  value="112106175/Module 1/Appendix B.pdf">Appendix B</option>
      
      <option  value="112106175/Module 2/Lecture 12.pdf">Lecture 12</option>
      
      <option  value="112106175/Module 2/Lecture 13.pdf">Lecture 13</option>
      
      <option  value="112106175/Module 2/Lecture 14.pdf">Lecture 14</option>
      
      <option  value="112106175/Module 2/Lecture 15.pdf">Lecture 15</option>
      
      <option  value="112106175/Module 2/Lecture 16.pdf">Lecture 16</option>
      
      <option  value="112106175/Module 2/Lecture 17.pdf">Lecture 17</option>
      
      <option  value="112106175/Module 2/Lecture 18.pdf">Lecture 18</option>
      
      <option  value="112106175/Module 2/Lecture 19.pdf">Lecture 19</option>
      
      <option  value="112106175/Module 2/Lecture 20.pdf">Lecture 20</option>
      
      <option  value="112106175/Module 2/Lecture 21.pdf">Lecture 21</option>
      
      <option  value="112106175/Module 3/Lecture 22.pdf">Lecture 22</option>
      
      <option  value="112106175/Module 3/Lecture 23.pdf">Lecture 23</option>
      
      <option  value="112106175/Module 3/Lecture 24.pdf">Lecture 24</option>
      
      <option  value="112106175/Module 3/Lecture 25.pdf">Lecture 25</option>
      
      <option  value="112106175/Module 3/Lecture 26.pdf">Lecture 26</option>
      
      <option  value="112106175/Module 3/Lecture 27.pdf">Lecture 27</option>
      
      <option  value="112106175/Module 3/Lecture 28.pdf">Lecture 28</option>
      
      <option  value="112106175/Module 3/Lecture 29.pdf">Lecture 29</option>
      
      <option  value="112106175/Module 3/Lecture 30.pdf">Lecture 30</option>
      
      <option  value="112106175/Module 3/Lecture 31.pdf">Lecture 31</option>
      
      <option  value="112106175/Module 3/Lecture 32.pdf">Lecture 32</option>
      
      <option  value="112106175/Module 4/Lecture 33.pdf">Lecture 33</option>
      
      <option  value="112106175/Module 4/Lecture 34.pdf">Lecture 34</option>
      
      <option  value="112106175/Module 4/Lecture 35.pdf">Lecture 35</option>
      
      <option  value="112106175/Module 4/Lecture 36.pdf">Lecture 36</option>
      
      <option  value="112106175/Module 4/Lecture 37.pdf">Lecture 37</option>
      
      <option  value="112106175/Module 4/Lecture 38.pdf">Lecture 38</option>
      
      <option  value="112106175/Module 4/Lecture 39.pdf">Lecture 39</option>
      
      <option  value="112106175/Module 4/Lecture 40.pdf">Lecture 40</option>
      
      <option  value="112106175/Module 4/Lecture 41.pdf">Lecture 41</option>
      
      <option  value="112106175/Module 4/Lecture 42.pdf">Lecture 42</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
         <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107142</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Industrial Engineering</strong></td>
	<td><strong>Prof. Pradeep Kumar,Prof. H.S. Shan,Prof. P.K. Jain</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-ROORKEE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107142/INDUSTRIAL-ENGINERRING/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107144</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Manufacturing Processes I</strong></td>
	<td><strong>Prof. H.S. Shan,Prof. S.R. Gupta,Prof. Pradeep Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-ROORKEE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107144/MANUFACTURING-PROCESSES/index.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107146</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Strength of Materials</strong></td>
	<td><strong>Dr. Satish C Sharma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-ROORKEE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107146/strength%20of%20materials/homepage.htm">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
    
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112108148</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Basic Thermodynamics</strong></td>
	<td><strong>Prof. K. Srinivasan,Prof. Pradip Dutta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc-BANGLORE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112108148/Basic%20Thermodynamics/New_index1.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112108149</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Heat and Mass Transfer</strong></td>
	<td><strong>Prof. Pradip Dutta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc-BANGLORE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112108149/Heat%20and%20Mass%20Transfer/New_index1.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112108150</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Materials Science</strong></td>
	<td><strong>Prof. Satish V Kailas</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc-BANGLORE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112108150/Material%20Science/New_index1.html">Contents</option>
    
     </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107077</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Advanced Manufacturing Processes</strong></td>
	<td><strong>Dr. A. K. Sharma,Dr. Pradeep Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107077/module1/lecture1/lecture1.pdf">Manufacturing and Manufacturing Systems</option>
      
      <option  value="112107077/module1/lecture2/lecture2.pdf">Facts Trends and Challenges in Manufacturing</option>
      
      <option  value="112107077/module1/lecture3/lecture3.pdf">Manufacturing Aspects, Selection and Classification</option>
      
      <option  value="112107077/module1/lecture4/lecture4.pdf">Description and Taxonomy of the Manufacturing Processes</option>
      
      <option  value="112107077/module2/lecture1/lecture1.pdf">Evaporative Pattern Casting Process</option>
      
      <option  value="112107077/module2/lecture2/lecture2.pdf">Process Description of Evaporative Pattern Casting</option>
      
      <option  value="112107077/module2/lecture3/lecture3.pdf">Hybrid Evaporative Pattern Casting Process</option>
      
      <option  value="112107077/module2/lecture4/lecture4.pdf">Vacuum Sealed Molding Process</option>
      
      <option  value="112107077/module2/lecture5/lecture5.pdf">Vacuum Sealed Molding Process Set Up</option>
      
      <option  value="112107077/module2/lecture6/lecture6.pdf">Investment Casting Process</option>
      
      <option  value="112107077/module2/lecture7/lecture7.pdf">Ceramic Shell Investment Casting Process (CSIC)</option>
      
      <option  value="112107077/module2/lecture8/lecture8.pdf">Wax Preparation, Blending and Process Parameters in CSIC</option>
      
      <option  value="112107077/module2/lecture9/lecture9.pdf">Shell Moulding</option>
      
      <option  value="112107077/module2/lecture10/lecture10.pdf">Processing Steps and Parameters in Shell Molding</option>
      
      <option  value="112107077/module3/lecture1/lecture1.pdf">Need For Advanced Material Removal Processes and Abrasive Flow Machining</option>
      
      <option  value="112107077/module3/lecture2/lecture2.pdf">Mechanism and Process Parameters in AFM</option>
      
      <option  value="112107077/module3/lecture3/lecture3.pdf">Abrasive Jet Machining (AJM)</option>
      
      <option  value="112107077/module3/lecture4/lecture4.pdf">Components and Process Parameters in Abrasive Jet Machining</option>
      
      <option  value="112107077/module3/lecture5/lecture5.pdf">Water Jet and Abrasive Water Jet Machining (WJM and AWJM)</option>
      
      <option  value="112107077/module3/lecture6/lecture6.pdf">Theory, Advantages and Applications of Water Jet and Abrasive Jet Machining</option>
      
      <option  value="112107077/module3/lecture7/lecture7.pdf">Ultrasonic Machining Process (USM)</option>
      
      <option  value="112107077/module3/lecture8/lecture8.pdf">Ultrasonic Machine and its Process Parameters</option>
      
      <option  value="112107077/module3/lecture9/lecture9.pdf">Electrical Discharge Machining (EDM)</option>
      
      <option  value="112107077/module3/lecture10/lecture10.pdf">Die-Sinker EDM and its Systems</option>
      
      <option  value="112107077/module3/lecture11/lecture11.pdf">Wire Cut Electric Discharge Machining (WEDM)</option>
      
      <option  value="112107077/module3/lecture12/lecture12.pdf">Laser Beam Machining (LBM)</option>
      
      <option  value="112107077/module3/lecture13/lecture13.pdf">Equipment of Laser Beam Machining, Process Parameters and Safety Issues</option>
      
      <option  value="112107077/module3/lecture14/lecture14.pdf">Electrochemical Machining (ECM)</option>
      
      <option  value="112107077/module3/lecture15/lecture15.pdf">The Subsystems of Electro-Chemical Machining</option>
      
      <option  value="112107077/module3/lecture16/lecture16.pdf">Electro-Chemical Grinding</option>
      
      <option  value="112107077/module4/lecture1/lecture1.pdf">Introduction and Submerged Arc Welding Process</option>
      
      <option  value="112107077/module4/lecture2/lecture2.pdf">Resistance Welding Process</option>
      
      <option  value="112107077/module4/lecture3/lecture3.pdf">Solid State Welding Process</option>
      
      <option  value="112107077/module4/lecture4/lecture4.pdf">Friction Welding Process</option>
      
      <option  value="112107077/module4/lecture5/lecture5.pdf">Electron Beam and Plasma Arc Welding Process</option>
      
      <option  value="112107077/module4/lecture6/lecture6.pdf">Laser Beam Welding Process</option>
      
      <option  value="112107077/module5/lecture1/lecture1.pdf">High Energy Rate Forming Processes</option>
      
      <option  value="112107077/module5/lecture2/lecture2.pdf">Rapid Prototyping Technology (RPT)</option>
      
      <option  value="112107077/module5/lecture3/lecture3.pdf">Microwave Processing of Materials</option>
      
      <option  value="112107077/module5/lecture4/lecture4.pdf">Microwave Appications and New Trends</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112107078</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Advanced Manufacturing Processes</strong></td>
	<td><strong>Dr. A. K. Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107078/mod01lec01.mp4">Manufacturing and Manufacturing Systems</option>
      
      <option  value="112107078/mod01lec02.mp4">Manufacturing Trends and Challenges </option>
      
      <option  value="112107078/mod01lec03.mp4">Manufacturing Aspects, Selection and Classification</option>
      
      <option  value="112107078/mod01lec04.mp4">Description and Taxonomy of the Mfg. Processes</option>
      
      <option  value="112107078/mod02lec01.mp4">Metal Casting basics, Gating and Risering design</option>
      
      <option  value="112107078/mod02lec02.mp4">Evaporative Pattern Casting Process (EPC)</option>
      
      <option  value="112107078/mod02lec03.mp4">Continuous, Permanent mold, Centrifugal and Pressure Die Casting</option>
      
      <option  value="112107078/mod02lec04.mp4">Hybrid EPC Processes  and Vacuum EPC Process</option>
      
      <option  value="112107078/mod02lec05.mp4">Set-up of VEPC and Investment Casting Processes </option>
      
      <option  value="112107078/mod02lec06.mp4">Ceramic Shell Investment Casting Process</option>
      
      <option  value="112107078/mod02lec07.mp4">Shell Molding Process</option>
      
      <option  value="112107078/mod03lec01.mp4">Abrasive Flow Machining</option>
      
      <option  value="112107078/mod03lec02.mp4">Mechanism of Material Removal in AFM and Variant processes in AFM</option>
      
      <option  value="112107078/mod03lec03.mp4">Abrasive Jet Machining (AJM) </option>
      
      <option  value="112107078/mod03lec04.mp4">Water Jet and Abrasive Water Jet Machining</option>
      
      <option  value="112107078/mod03lec05.mp4">Ultrasonic Machining Process (USM)</option>
      
      <option  value="112107078/mod03lec06.mp4">Mechanism, Processes Variants and applications of USM</option>
      
      <option  value="112107078/mod03lec07.mp4">Micro USM and advances in USM </option>
      
      <option  value="112107078/mod03lec08.mp4">Electric Discharge Machining (EDM) Process</option>
      
      <option  value="112107078/mod03lec09.mp4">Die-Sinker EDM and Wire Cut Electric Discharge Machining (WEDM)</option>
      
      <option  value="112107078/mod03lec10.mp4">Variant Processes in EDM  </option>
      
      <option  value="112107078/mod03lec11.mp4">Electro Chemical Discharge Machining (ECDM)</option>
      
      <option  value="112107078/mod03lec12.mp4">Laser Beam Machining (LBM)</option>
      
      <option  value="112107078/mod03lec13.mp4">Equipment and Process Parameters in LBM  </option>
      
      <option  value="112107078/mod03lec14.mp4">Electrochemical Machining (ECM)</option>
      
      <option  value="112107078/mod03lec15.mp4">ECM Kinematics and Tool Design</option>
      
      <option  value="112107078/mod03lec16.mp4">The Subsystems in ECM, advantages and applications</option>
      
      <option  value="112107078/mod03lec17.mp4">Variant Processes in ECM: ECG, ECH, ECDe and STEM</option>
      
      <option  value="112107078/mod03lec18.mp4">Electron Beam, Plasma Beam and Ion Beam Machining </option>
      
      <option  value="112107078/mod04lec01.mp4">Submerged Arc Welding (SAW)</option>
      
      <option  value="112107078/mod04lec02.mp4">Resistance Welding Process</option>
      
      <option  value="112107078/mod04lec03.mp4"> Solid State Welding processes</option>
      
      <option  value="112107078/mod04lec04.mp4"> Friction Welding process</option>
      
      <option  value="112107078/mod04lec05.mp4"> Electron Beam and Plasma Welding Processes</option>
      
      <option  value="112107078/mod04lec06.mp4">Laser Beam welding and Diffusion welding process</option>
      
      <option  value="112107078/mod05lec01.mp4">High Energy Rate Forming Processes</option>
      
      <option  value="112107078/mod05lec02.mp4">Rapid Prototyping Technology (RPT)</option>
      
      <option  value="112107078/mod05lec03.mp4">Rapid Manufacturing, applications and advancements</option>
      
      <option  value="112107078/mod05lec04.mp4">Microwave Processing of Materials</option>
      
      <option  value="112107078/mod05lec05.mp4">Applications and new trends in Microwave Material Processing</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107080</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computational Fluid Dynamics</strong></td>
	<td><strong>Dr. K. M. Singh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107080/module1/lecture1/lecture1.pdf">General Introduction: Historical Background and Spectrum of Applications</option>
      
      <option  value="112107080/module1/lecture2/lecture2.pdf">Numerical Simulation Process</option>
      
      <option  value="112107080/module1/lecture3/lecture3.pdf">Approximate Solution Techniques</option>
      
      <option  value="112107080/module2/lecture1/lecture1.pdf">Conservation Laws and Mathematical Preliminaries</option>
      
      <option  value="112107080/module2/lecture2/lecture2.pdf">Mass Conservation (Continuity Equation)</option>
      
      <option  value="112107080/module2/lecture3/lecture3.pdf">Conservation of Momentum (Newton�s Law and Cauchy Equation)</option>
      
      <option  value="112107080/module2/lecture4/lecture4.pdf">Navier-Stokes and Euler Equation</option>
      
      <option  value="112107080/module2/lecture5/lecture5.pdf">Energy Equation and Generalized Scalar Transport Equation</option>
      
      <option  value="112107080/module2/lecture6/lecture6.pdf">Mathematical Classification of PDEs</option>
      
      <option  value="112107080/module2/lecture7/lecture7.pdf">Boundary Conditions for Flow Problems</option>
      
      <option  value="112107080/module3/lecture1/lecture1.pdf">Finite Difference Methodology, Grid Notation and Terminology</option>
      
      <option  value="112107080/module3/lecture2/lecture2.pdf">Finite Difference Approximation of First Order Derivatives</option>
      
      <option  value="112107080/module3/lecture3/lecture3.pdf">Finite Difference Approximation of Second Order Derivatives</option>
      
      <option  value="112107080/module3/lecture4/lecture4.pdf">Multi-dimensional and Mixed Derivatives; Boundary Conditions</option>
      
      <option  value="112107080/module3/lecture5/lecture5.pdf">Applications of FDM to Scalar Transport Problems</option>
      
      <option  value="112107080/module4/lecture1/lecture1.pdf">Finite Volume Solution Process and FV Grids</option>
      
      <option  value="112107080/module4/lecture2/lecture2.pdf">Approximation of Surface and Volume Integrals</option>
      
      <option  value="112107080/module4/lecture3/lecture3.pdf">Interpolation Schemes</option>
      
      <option  value="112107080/module4/lecture4/lecture4.pdf">Application of FVM to Scalar Transport Problems</option>
      
      <option  value="112107080/module5/lecture1/lecture1.pdf">Finite Element Approximation and Weighted-residual Method</option>
      
      <option  value="112107080/module5/lecture2/lecture2.pdf">Variational Formulations</option>
      
      <option  value="112107080/module5/lecture3/lecture3.pdf">Shape Functions and Numerical Integration</option>
      
      <option  value="112107080/module5/lecture4/lecture4.pdf">Finite Element Analysis of Heat Conduction</option>
      
      <option  value="112107080/module6/lecture1/lecture1.pdf">Solution of Discrete Algebraic Systems</option>
      
      <option  value="112107080/module6/lecture2/lecture2.pdf">Direct and Basic Iterative Methods for Linear Systems</option>
      
      <option  value="112107080/module6/lecture3/lecture3.pdf">Accelerated Iterative Methods for Linear Systems</option>
      
      <option  value="112107080/module7/lecture1/lecture1.pdf">Two Level and Multi-Level Methods for First Order IVPs</option>
      
      <option  value="112107080/module7/lecture2/lecture2.pdf">Predictor-Corrector and Runge-Kutta Methods</option>
      
      <option  value="112107080/module7/lecture3/lecture3.pdf">Application to Unsteady Transport Problems</option>
      
      <option  value="112107080/module8/lecture1/lecture1.pdf">Classification of Grids and Grid Generation Process</option>
      
      <option  value="112107080/module8/lecture2/lecture2.pdf">Grid Generation Techniques</option>
      
      <option  value="112107080/module9/lecture1/lecture1.pdf">Special Features of Navier-Stokes Equations</option>
      
      <option  value="112107080/module9/lecture2/lecture2.pdf">Explicit and Implicit Time Integration Techniques</option>
      
      <option  value="112107080/module9/lecture3/lecture3.pdf">Implicit Pressure Correction Methods (SIMPLE, SIMPLER, �)</option>
      
      <option  value="112107080/module9/lecture4/lecture4.pdf">Fractional Step Methods</option>
      
      <option  value="112107080/module10/lecture1/lecture1.pdf">Features and Simulation Strategies</option>
      
      <option  value="112107080/module10/lecture2/lecture2.pdf">Reynolds Averaged Navier-Stokes Equations</option>
      
      <option  value="112107080/module10/lecture3/lecture3.pdf">RANS Turbulence Models</option>
      
      <option  value="112107080/module10/lecture4/lecture4.pdf">Large Eddy Simulation</option>
      
      <option  value="112107080/module11/lecture1/lecture1.pdf">Some Aspects of Real Life CFD Analysis </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107085</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Processing of non metals</strong></td>
	<td><strong>Dr. Inderdeep Singh </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107085/module1/lecture1/lecture1.pdf">Engineering Materials and Processing Techniques: Introduction</option>
      
      <option  value="112107085/module1/lecture2/lecture2.pdf">Properties of Non-Metals</option>
      
      <option  value="112107085/module2/lecture1/lecture1.pdf">Glass Structure and Properties</option>
      
      <option  value="112107085/module2/lecture2/lecture2.pdf">Glass Processing - I</option>
      
      <option  value="112107085/module2/lecture3/lecture3.pdf">Glass Processing - II</option>
      
      <option  value="112107085/module3/lecture1/lecture1.pdf">Ceramics: I</option>
      
      <option  value="112107085/module3/lecture2/lecture2.pdf">Ceramics: II</option>
      
      <option  value="112107085/module3/lecture3/lecture3.pdf">Ceramic Powder Preparation</option>
      
      <option  value="112107085/module3/lecture4/lecture4.pdf">Ceramic Powder Preparation � I</option>
      
      <option  value="112107085/module3/lecture5/lecture5.pdf">Processing of Ceramic Parts - Pressing</option>
      
      <option  value="112107085/module3/lecture6/lecture6.pdf">Processing of Ceramic Parts � II</option>
      
      <option  value="112107085/module3/lecture7/lecture7.pdf">Ceramics: Secondary Processing</option>
      
      <option  value="112107085/module4/lecture1/lecture1.pdf">Thermoplastics and Thermosets  </option>
      
      <option  value="112107085/module4/lecture2/lecture2.pdf">Processing of Plastics</option>
      
      <option  value="112107085/module4/lecture3/lecture3.pdf">Extrusion of Plastics  </option>
      
      <option  value="112107085/module4/lecture4/lecture4.pdf">Transfer Molding and Compression Molding  </option>
      
      <option  value="112107085/module4/lecture5/lecture5.pdf">Injection Molding  </option>
      
      <option  value="112107085/module4/lecture6/lecture6.pdf">Thermoforming</option>
      
      <option  value="112107085/module4/lecture7/lecture7.pdf">Rotational Molding and Blow Molding</option>
      
      <option  value="112107085/module5/lecture1/lecture1.pdf">Composite Materials</option>
      
      <option  value="112107085/module5/lecture2/lecture2.pdf">Composite Materials:Classification and Applications</option>
      
      <option  value="112107085/module5/lecture3/lecture3.pdf">Processing of Polymer Matrix Composites</option>
      
      <option  value="112107085/module5/lecture4/lecture4.pdf">Hand Lay-up and Spray Lay-up</option>
      
      <option  value="112107085/module5/lecture5/lecture5.pdf">Pultrusion</option>
      
      <option  value="112107085/module5/lecture6/lecture6.pdf">Compression Molding</option>
      
      <option  value="112107085/module5/lecture7/lecture7.pdf">Filament Winding</option>
      
      <option  value="112107085/module5/lecture8/lecture8.pdf">Injection Molding-1</option>
      
      <option  value="112107085/module5/lecture9/lecture9.pdf">Pre-pregging and Sheet Molding Compounds</option>
      
      <option  value="112107085/module5/lecture10/lecture10.pdf">Resin Transfer Molding and Autoclave Molding  </option>
      
      <option  value="112107085/module6/lecture1/lecture1.pdf">Ceramic Matrix Composites</option>
      
      <option  value="112107085/module6/lecture2/lecture2.pdf">Ceramic Matrix Composites: Fundamentals and Properties</option>
      
      <option  value="112107085/module6/lecture3/lecture3.pdf">Powder Processing: Ceramic Matrix Composites</option>
      
      <option  value="112107085/module6/lecture4/lecture4.pdf">Chemical Vapour Infiltration</option>
      
      <option  value="112107085/module6/lecture5/lecture5.pdf">Ceramic Matrix Composites: Processing</option>
      
      <option  value="112107085/module6/lecture6/lecture6.pdf">Ceramic Matrix Composites: Post Processing</option>
      
      <option  value="112107085/module7/lecture1/lecture1.pdf">Drilling of Polymer Matrix Composites</option>
      
      <option  value="112107085/module7/lecture2/lecture2.pdf">Hole Making Techniques for Polymer Matrix Composites</option>
      
      <option  value="112107085/module7/lecture3/lecture3.pdf">Joining of Polymer Matrix Composites</option>
      
      <option  value="112107085/module7/lecture4/lecture4.pdf">Microwave Joining of Polymer Matrix Composites</option>
      
      <option  value="112107085/module7/lecture5/lecture5.pdf">Research Tools for Secondary Processing</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112107086</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Processing of non metals</strong></td>
	<td><strong>Dr. Inderdeep Singh </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107086/mod01lec01.mp4">Engineering Materials and Processing Techniques: Introduction</option>
      
      <option  value="112107086/mod01lec02.mp4">Properties of Non-Metals</option>
      
      <option  value="112107086/mod02lec01.mp4">Glass Structure and Properties</option>
      
      <option  value="112107086/mod02lec02.mp4">Glass Processing - I </option>
      
      <option  value="112107086/mod02lec03.mp4">Glass Processing - II</option>
      
      <option  value="112107086/mod03lec01.mp4">Ceramics: I</option>
      
      <option  value="112107086/mod03lec02.mp4">Ceramics: II</option>
      
      <option  value="112107086/mod03lec03.mp4">Ceramic Powder Preparation</option>
      
      <option  value="112107086/mod03lec04.mp4">Ceramic Powder Preparation � I</option>
      
      <option  value="112107086/mod03lec05.mp4">Processing of Ceramic Parts ? Pressing</option>
      
      <option  value="112107086/mod03lec06.mp4">Processing of Ceramic Parts � II</option>
      
      <option  value="112107086/mod03lec07.mp4">Ceramics: Secondary Processing</option>
      
      <option  value="112107086/mod04lec01.mp4">Thermoplastics and Thermosets</option>
      
      <option  value="112107086/mod04lec02.mp4">Processing of Plastics</option>
      
      <option  value="112107086/mod04lec03.mp4">Extrusion of Plastics</option>
      
      <option  value="112107086/mod04lec04.mp4">Transfer Molding and Compression Molding</option>
      
      <option  value="112107086/mod04lec05.mp4">Injection Molding</option>
      
      <option  value="112107086/mod04lec06.mp4">Thermoforming</option>
      
      <option  value="112107086/mod04lec07.mp4">Rotational Molding and Blow Molding</option>
      
      <option  value="112107086/mod05lec01.mp4">Composite Materials</option>
      
      <option  value="112107086/mod05lec02.mp4">Composite Materials: Classification and Applications</option>
      
      <option  value="112107086/mod05lec03.mp4">Processing of Polymer Matrix Composites</option>
      
      <option  value="112107086/mod05lec04.mp4">Hand Lay-up and Spray Lay-up</option>
      
      <option  value="112107086/mod05lec05.mp4">Pultrusion</option>
      
      <option  value="112107086/mod05lec06.mp4">Compression Molding</option>
      
      <option  value="112107086/mod05lec07.mp4">Filament Winding</option>
      
      <option  value="112107086/mod05lec08.mp4">Injection Molding-1</option>
      
      <option  value="112107086/mod05lec09.mp4">Pre-pregging and Sheet Molding Compounds</option>
      
      <option  value="1121070860/mod05lec10.mp4">Resin Transfer Molding and Autoclave Molding  </option>
      
      <option  value="112107086/mod06lec01.mp4">Ceramic Matrix Composites</option>
      
      <option  value="112107086/mod06lec02.mp4">Ceramic Matrix Composites: Fundamentals and Properties</option>
      
      <option  value="112107086/mod06lec03.mp4">Powder Processing: Ceramic Matrix Composites</option>
      
      <option  value="112107086/mod06lec04.mp4">Chemical Vapour Infiltration</option>
      
      <option  value="112107086/mod06lec05.mp4">Ceramic Matrix Composites: Processing-1</option>
      
      <option  value="112107086/mod06lec06.mp4">Ceramic Matrix Composites: Post Processing</option>
      
      <option  value="112107086/mod07lec01.mp4">Drilling of Polymer Matrix Composites</option>
      
      <option  value="112107086/mod07lec02.mp4">Hole Making Techniques for Polymer Matrix Composites</option>
      
      <option  value="112107086/mod07lec03.mp4">Joining of Polymer Matrix Composites</option>
      
      <option  value="112107086/mod07lec04.mp4">Microwave Joining of Polymer Matrix Composites</option>
      
      <option  value="112107086/mod07lec05.mp4">Research Tools for Secondary Processing</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107088</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Vibration control</strong></td>
	<td><strong>Dr. S. P. Harsha</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107088/module1/lecture1/lecture1.pdf">Introduction</option>
      
      <option  value="112107088/module1/lecture2/lecture2.pdf">Introduction to Damping in Free and Forced Vibrations</option>
      
      <option  value="112107088/module1/lecture3/lecture3.pdf">Free and Forced Vibrations of Two Degree of Systems</option>
      
      <option  value="112107088/module1/lecture4/lecture4.pdf">Multi Degree of Freedom Systems</option>
      
      <option  value="112107088/module1/lecture5/lecture5.pdf">Basic Vibration Control: Reduction at source (Part � I)</option>
      
      <option  value="112107088/module1/lecture6/lecture6.pdf">Basic Vibration Control: Reduction at source (Part � II)  </option>
      
      <option  value="112107088/module1/lecture7/lecture7.pdf">Basic Vibration Control: Reduction at source (Part � III)</option>
      
      <option  value="112107088/module1/lecture8/lecture8.pdf">Active Feedback Control</option>
      
      <option  value="112107088/module1/lecture9/lecture9.pdf">Active Feedback Control and Shunt Damping </option>
      
      <option  value="112107088/module1/lecture10/lecture10.pdf">Vibration Isolation of the Source </option>
      
      <option  value="112107088/module1/lecture11/lecture11.pdf">Vibration Isolation of the Source [Part � I]</option>
      
      <option  value="112107088/module1/lecture12/lecture12.pdf">Vibration Isolation of the Source {Part � II] </option>
      
      <option  value="112107088/module1/lecture13/lecture13.pdf">Vibration Generations Mechanisms: Source Classification</option>
      
      <option  value="112107088/module1/lecture14/lecture14.pdf">Vibration Generations Mechanisms: Self Excited Vibration</option>
      
      <option  value="112107088/module1/lecture15/lecture15.pdf">Vibration Generations Mechanisms: Flow Induced </option>
      
      <option  value="112107088/module1/lecture16/lecture16.pdf">Vibration Generations Mechanisms: Field Balancing of Rigid/Flexible Rotors </option>
      
      <option  value="112107088/module1/lecture17/lecture17.pdf">Vibration Generations Mechanisms: Damping- Models and Measures</option>
      
      <option  value="112107088/module1/lecture18/lecture18.pdf">Design Consideration in Material Selection: Damping based</option>
      
      <option  value="112107088/module1/lecture19/lecture19.pdf">Design Consideration in Material Selection: Design Sensitivity</option>
      
      <option  value="112107088/module1/lecture20/lecture20.pdf">Design Consideration in Material Selection: Design Specifications</option>
      
      <option  value="112107088/module1/lecture21/lecture21.pdf">Design Consideration in Material Selection: Design for enhanced material damping</option>
      
      <option  value="112107088/module1/lecture22/lecture22.pdf">Principles of Passive Vibration Control: Basics</option>
      
      <option  value="112107088/module1/lecture23/lecture23.pdf">Principles of Passive Vibration Control: Design of absorber</option>
      
      <option  value="112107088/module1/lecture24/lecture24.pdf">Principles of Passive Vibration Control: Absorber with ideal spring</option>
      
      <option  value="112107088/module1/lecture25/lecture25.pdf">Principles of Passive Vibration Control: Shock Absorber </option>
      
      <option  value="112107088/module1/lecture26/lecture26.pdf">Principles of Passive Vibration Control: Isolators with stiffness and damping</option>
      
      <option  value="112107088/module1/lecture27/lecture27.pdf">Principles of Active Vibration Control: Basics of active vibration control methods</option>
      
      <option  value="112107088/module1/lecture28/lecture28.pdf">Principles of Active Vibration Control: Piezoelectric materials</option>
      
      <option  value="112107088/module1/lecture29/lecture29.pdf">Principles of Active Vibration Control: Piezoelectric Materials-1</option>
      
      <option  value="112107088/module1/lecture30/lecture30.pdf">Principles of Active Vibration Control: Piezoelectric Accelerometers </option>
      
      <option  value="112107088/module1/lecture31/lecture31.pdf">Principles of Active Vibration Control: Electrorheological fluids</option>
      
      <option  value="112107088/module1/lecture32/lecture32.pdf">Principles of Active Vibration Control: Magneto-rheological fluids</option>
      
      <option  value="112107088/module1/lecture33/lecture33.pdf">Principles of Active Vibration Control: Magneto- and Electrostrictive Materials in Vibration Control </option>
      
      <option  value="112107088/module1/lecture34/lecture34.pdf">Principles of Active Vibration Control: Shape Memory Alloy</option>
      
      <option  value="112107088/module1/lecture35/lecture35.pdf">Principles of Active Vibration Control: Shape Memory Alloy-1</option>
      
      <option  value="112107088/module1/lecture36/lecture36.pdf">Principles of Active Vibration Control: Electro-magnetic</option>
      
      <option  value="112107088/module1/lecture37/lecture37.pdf">Vibration Measurement Techniques: Basics</option>
      
      <option  value="112107088/module1/lecture38/lecture38.pdf">Vibration Measurement Techniques: Data Acquisition </option>
      
      <option  value="112107088/module1/lecture39/lecture39.pdf">Vibration Measurement Techniques: Fourier Transform </option>
      
      <option  value="112107088/module1/lecture40/lecture40.pdf">Vibration Measurement Techniques: Filters </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112107089</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Welding Engineering</strong></td>
	<td><strong>Dr. D. K. Dwivedi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107089/mod01lec01.mp4">Introduction to Welding Engineering</option>
      
      <option  value="112107089/mod01lec02.mp4">Classification of Welding Processes- I</option>
      
      <option  value="112107089/mod01lec03.mp4">Classification of Welding Processes- II</option>
      
      <option  value="112107089/mod01lec04.mp4">Sources of Heat and Protection of Weld pool</option>
      
      <option  value="112107089/mod01lec05.mp4">Protection of Weld Pool</option>
      
      <option  value="112107089/mod02lec01.mp4">Introduction.</option>
      
      <option  value="112107089/mod02lec02.mp4">Fundamentals of Arc Initiation </option>
      
      <option  value="112107089/mod02lec03.mp4">Arc Maintenance & Arc Characteristics</option>
      
      <option  value="112107089/mod02lec04.mp4">Arc Forces</option>
      
      <option  value="112107089/mod02lec05.mp4">Arc Efficiency</option>
      
      <option  value="112107089/mod02lec06.mp4">Melting Rate in Different Welding Processes</option>
      
      <option  value="112107089/mod03lec01.mp4">Types of power sources and their characteristics- I</option>
      
      <option  value="112107089/mod03lec02.mp4">Types of power sources and their characteristics- II</option>
      
      <option  value="112107089/mod04lec01.mp4">SMAW- I</option>
      
      <option  value="112107089/mod04lec02.mp4">SMAW- II</option>
      
      <option  value="112107089/mod04lec03.mp4">GTAW- I</option>
      
      <option  value="112107089/mod04lec04.mp4">GTAW- II</option>
      
      <option  value="112107089/mod04lec05.mp4">PAW & SAW</option>
      
      <option  value="112107089/mod04lec06.mp4">SAW</option>
      
      <option  value="112107089/mod04lec07.mp4">GMAW</option>
      
      <option  value="112107089/mod04lec08.mp4">Brazing, Soldering & Braze Welding</option>
      
      <option  value="112107089/mod04lec09.mp4">Braze welding and Electroslag welding</option>
      
      <option  value="112107089/mod05lec01.mp4">Weld Thermal Cycle</option>
      
      <option  value="112107089/mod05lec02.mp4">Effect of WTC and Cooling rate in welding</option>
      
      <option  value="112107089/mod05lec03.mp4">Cooling rate</option>
      
      <option  value="112107089/mod05lec04.mp4">Peak temperature & Solidification rate</option>
      
      <option  value="112107089/mod05lec05.mp4">Residual stress- I</option>
      
      <option  value="112107089/mod05lec06.mp4">Residual stress- II</option>
      
      <option  value="112107089/mod06lec01.mp4">Introduction</option>
      
      <option  value="112107089/mod06lec02.mp4">Type of joints and welds</option>
      
      <option  value="112107089/mod06lec03.mp4">Edge preparation</option>
      
      <option  value="112107089/mod06lec04.mp4">Design for static and fatigue loading</option>
      
      <option  value="112107089/mod06lec05.mp4">Fatigue fracture of weld joints- I</option>
      
      <option  value="112107089/mod06lec06.mp4">Fatigue fracture of weld joints- II</option>
      
      <option  value="112107089/mod07lec01.mp4">Introduction-</option>
      
      <option  value="112107089/mod07lec02.mp4">DT & NDT</option>
      
      <option  value="112107089/mod08lec01.mp4">Understanding Weldability</option>
      
      <option  value="112107089/mod08lec02.mp4">Reactions in weldment</option>
      
      <option  value="112107089/mod08lec03.mp4">Weldability of Al alloys</option>
      
      <option  value="112107089/mod08lec04.mp4">Failure analysis and prevention</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112107090</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Welding Engineering</strong></td>
	<td><strong>Dr. D. K. Dwivedi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107090/module1/lecture1/lecture1.pdf">Introduction: Joining</option>
      
      <option  value="112107090/module1/lecture2/lecture2.pdf">Classification of Welding Processes I</option>
      
      <option  value="112107090/module1/lecture3/lecture3.pdf">Classification of Welding Processes II</option>
      
      <option  value="112107090/module1/lecture4/lecture4.pdf">Power density and welding process</option>
      
      <option  value="112107090/module2/lecture1/lecture1.pdf">Physics of Welding Arc I</option>
      
      <option  value="112107090/module2/lecture2/lecture2.pdf">Physics of Welding Arc II</option>
      
      <option  value="112107090/module2/lecture3/lecture3.pdf">Physics of Welding Arc III</option>
      
      <option  value="112107090/module2/lecture4/lecture4.pdf">Physics of Welding Arc IV</option>
      
      <option  value="112107090/module3/lecture1/lecture1.pdf">Arc Welding Power Source I</option>
      
      <option  value="112107090/module3/lecture2/lecture2.pdf">Arc Welding Power Source II</option>
      
      <option  value="112107090/module4/lecture1/lecture1.pdf">Arc welding processes (SMAW)</option>
      
      <option  value="112107090/module4/lecture2/lecture2.pdf">Shielded Metal Arc welding II</option>
      
      <option  value="112107090/module4/lecture3/lecture3.pdf">Submerged Arc Welding</option>
      
      <option  value="112107090/module4/lecture4/lecture4.pdf">Gas Tungsten Arc welding I</option>
      
      <option  value="112107090/module4/lecture5/lecture5.pdf">Gas Tungsten Arc welding II</option>
      
      <option  value="112107090/module4/lecture6/lecture6.pdf">Gas Tungsten Arc welding II & Plasma Arc Welding</option>
      
      <option  value="112107090/module4/lecture7/lecture7.pdf">Metal Inert Gas Welding</option>
      
      <option  value="112107090/module4/lecture8/lecture8.pdf">Brazing and soldering</option>
      
      <option  value="112107090/module5/lecture1/lecture1.pdf">Heat Flow in Welding I</option>
      
      <option  value="112107090/module5/lecture2/lecture2.pdf">Heat flow in welding II</option>
      
      <option  value="112107090/module5/lecture3/lecture3.pdf">Residual stresses in weld joints</option>
      
      <option  value="112107090/module6/lecture1/lecture1.pdf">DESIGN OF WELDED JOINTS I</option>
      
      <option  value="112107090/module6/lecture2/lecture2.pdf">DESIGN OF WELDED JOINTS II</option>
      
      <option  value="112107090/module6/lecture3/lecture3.pdf">DESIGN OF WELDED JOINTS III</option>
      
      <option  value="112107090/module6/lecture4/lecture4.pdf">DESIGN OF WELDED JOINTS IV</option>
      
      <option  value="112107090/module6/lecture5/lecture5.pdf">DESIGN OF WELDED JOINTS V</option>
      
      <option  value="112107090/module6/lecture6/lecture6.pdf">DESIGN OF WELDED JOINTS VI</option>
      
      <option  value="112107090/module6/lecture7/lecture7.pdf">DESIGN OF WELDED JOINTS-VI</option>
      
      <option  value="112107090/module6/lecture8/lecture8.pdf">DESIGN OF WELDED JOINTS VII</option>
      
      <option  value="112107090/module6/lecture9/lecture9.pdf">DESIGN OF WELDED JOINTS VIII</option>
      
      <option  value="112107090/module7/lecture1/lecture1.pdf">INSPECTION AND TESTING OF WELD JOINT I</option>
      
      <option  value="112107090/module7/lecture2/lecture2.pdf">INSPECTION AND TESTING OF WELD JOINT II</option>
      
      <option  value="112107090/module8/lecture1/lecture1.pdf">Solidification of Weld Metal</option>
      
      <option  value="112107090/module8/lecture2/lecture2.pdf">Solidification of Weld Metal-1</option>
      
      <option  value="112107090/module8/lecture3/lecture3.pdf">CHEMICAL REACTION IN WELDS</option>
      
      <option  value="112107090/module8/lecture4/lecture4.pdf">CHEMICAL REACTION IN WELDS-1</option>
      
      <option  value="112107090/module8/lecture5/lecture5.pdf">Weldability of Metals I</option>
      
      <option  value="112107090/module8/lecture6/lecture6.pdf">Weldability of Metals II</option>
      
      <option  value="112107090/module8/lecture7/lecture7.pdf">Failure Analysis and Prevention: Fundamental causes of failure</option>
      
      <option  value="112107090/module8/lecture8/lecture8.pdf">General Procedure of Failure Analysis</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112107143</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Industrial Engineering</strong></td>
	<td><strong>Dr. D. K. Dwivedi,Dr. Inderdeep Singh ,Dr. Pradeep Kumar,Prof. P.K. Jain</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107143/mod01lec01.mp4">Production Planning and Control</option>
      
      <option  value="112107143/mod01lec02.mp4">Product Design and Development</option>
      
      <option  value="112107143/mod02lec01.mp4">Statistical Process Control Part - 1</option>
      
      <option  value="112107143/mod02lec02.mp4">Statistical Process Control Part - 2</option>
      
      <option  value="112107143/mod02lec03.mp4">Statistical Process Control Part - 3</option>
      
      <option  value="112107143/mod03lec01.mp4">Productivity</option>
      
      <option  value="112107143/mod03lec02.mp4">Factors Affecting the Productivity</option>
      
      <option  value="112107143/mod03lec03.mp4">Improving the Productivity  Introduction to Work Study</option>
      
      <option  value="112107143/mod03lec04.mp4">Work Study Human Component and Method Study</option>
      
      <option  value="112107143/mod03lec05.mp4">Recording Techniques for Method Study Part - 1</option>
      
      <option  value="112107143/mod03lec06.mp4">Recording Techniques for Method Study Part - 2</option>
      
      <option  value="112107143/mod03lec07.mp4">Recording Techniques  Critical Examination</option>
      
      <option  value="112107143/mod03lec08.mp4">Principles of Motion Economy</option>
      
      <option  value="112107143/mod03lec09.mp4">Work Measurement Time Study - I</option>
      
      <option  value="112107143/mod03lec10.mp4">Work Measurement Time Study - II</option>
      
      <option  value="112107143/mod03lec11.mp4">Performance Rating  Allowances</option>
      
      <option  value="112107143/mod03lec12.mp4">Work Measurement: Work Sampling</option>
      
      <option  value="112107143/mod03lec13.mp4">PMT System  Standard Data Method</option>
      
      <option  value="112107143/mod03lec14.mp4">Ergonomics</option>
      
      <option  value="112107143/mod03lec15.mp4">Metabolism and Organization at Work</option>
      
      <option  value="112107143/mod03lec16.mp4">Working Conditions Lights  Vibrations</option>
      
      <option  value="112107143/mod04lec01.mp4">Materials Management - I</option>
      
      <option  value="112107143/mod04lec02.mp4">Materials Management - II</option>
      
      <option  value="112107143/mod04lec03.mp4">Materials Requirement Planning</option>
      
      <option  value="112107143/mod04lec04.mp4">Sales Forecasting - I</option>
      
      <option  value="112107143/mod04lec05.mp4">Sales Forecasting - II</option>
      
      <option  value="112107143/mod04lec06.mp4">Capacity Planning - I</option>
      
      <option  value="112107143/mod04lec07.mp4">Capacity Planning - II</option>
      
      <option  value="112107143/mod04lec08.mp4">Network Analysis - I</option>
      
      <option  value="112107143/mod04lec09.mp4">Network Analysis - II</option>
      
      <option  value="112107143/mod04lec10.mp4">Facility Design Part - I</option>
      
      <option  value="112107143/mod04lec11.mp4">Facility Design Part - II</option>
      
      <option  value="112107143/mod04lec12.mp4">Facility Design Part - III</option>
      
      <option  value="112107143/mod04lec13.mp4">Facility Design Part - IV</option>
      
      <option  value="112107143/mod04lec14.mp4">Product Design Development</option>
      
      <option  value="112107143/mod04lec15.mp4">Materials Handling</option>
      
      <option  value="112107143/mod04lec16.mp4">Quality Concepts</option>
      
      <option  value="112107143/mod04lec17.mp4">Value Engineering</option>
      
      <option  value="112107143/mod04lec18.mp4">Reliability</option>
      
      <option  value="112107143/mod04lec19.mp4">Industrial Safety</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112107145</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Manufacturing Processes I</strong></td>
	<td><strong>Dr. D. K. Dwivedi,Dr. Inderdeep Singh ,Dr. D. B. Karunakar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107145/mod01lec01.mp4">Powder Metallurgy - 1</option>
      
      <option  value="112107145/mod01lec02.mp4">Powder Metallurgy - 2</option>
      
      <option  value="112107145/mod01lec03.mp4">Powder Metallurgy - 3</option>
      
      <option  value="112107145/mod01lec04.mp4">Metal Forming - Fundamentals</option>
      
      <option  value="112107145/mod01lec05.mp4">Forging</option>
      
      <option  value="112107145/mod01lec06.mp4">Swaging  and Wire Drawing</option>
      
      <option  value="112107145/mod01lec07.mp4">Sheet Metal Operations</option>
      
      <option  value="112107145/mod01lec08.mp4">Sheet Metal Operations - 2</option>
      
      <option  value="112107145/mod01lec09.mp4">Sheet Metal Operations - 3</option>
      
      <option  value="112107145/mod01lec10.mp4">Sheet Metal Working - Presses</option>
      
      <option  value="112107145/mod01lec11.mp4">Sheet Metal Working - Equipment</option>
      
      <option  value="112107145/mod01lec12.mp4">High Energy Rate Forming Processes</option>
      
      <option  value="112107145/mod01lec13.mp4">Machining Fundamentals</option>
      
      <option  value="112107145/mod01lec14.mp4">Machining - I</option>
      
      <option  value="112107145/mod01lec15.mp4">Machining - II</option>
      
      <option  value="112107145/mod01lec16.mp4">Machining - III</option>
      
      <option  value="112107145/mod02lec01.mp4">Metal casting I</option>
      
      <option  value="112107145/mod02lec02.mp4">Metal casting II</option>
      
      <option  value="112107145/mod02lec03.mp4">Metal Casting III</option>
      
      <option  value="112107145/mod02lec04.mp4">Metal Casting IV</option>
      
      <option  value="112107145/mod02lec05.mp4">Metal Casting V</option>
      
      <option  value="112107145/mod02lec06.mp4">Metal Casting VI</option>
      
      <option  value="112107145/mod02lec07.mp4">Metal Casting VII</option>
      
      <option  value="112107145/mod02lec08.mp4">Metal Casting VIII</option>
      
      <option  value="112107145/mod02lec09.mp4">Metal Casting IX</option>
      
      <option  value="112107145/mod02lec10.mp4">Metal Casting X</option>
      
      <option  value="112107145/mod03lec01.mp4">Introduction</option>
      
      <option  value="112107145/mod03lec02.mp4">Welding Process Classification</option>
      
      <option  value="112107145/mod03lec03.mp4">Brazing Soldering  Braze Welding</option>
      
      <option  value="112107145/mod03lec04.mp4">Arc Welding Power Source Part - 1</option>
      
      <option  value="112107145/mod03lec05.mp4">Arc Welding Power Source Part - 2</option>
      
      <option  value="112107145/mod03lec06.mp4">Shielded Metal Arc Welding Part - 1</option>
      
      <option  value="112107145/mod03lec07.mp4">Shielded Metal Arc Welding Part - 2</option>
      
      <option  value="112107145/mod03lec08.mp4">Submerged Arc Welding</option>
      
      <option  value="112107145/mod03lec09.mp4">Gas Metal Arc Welding I</option>
      
      <option  value="112107145/mod03lec10.mp4">Gas Metal Arc Welding II</option>
      
      <option  value="112107145/mod03lec11.mp4">Tungsten Inert Gas Welding Part - 1</option>
      
      <option  value="112107145/mod03lec12.mp4">Tungsten Inert Gas Welding Part - 2</option>
      
      <option  value="112107145/mod03lec13.mp4">Resistance Welding Process</option>
      
      <option  value="112107145/mod03lec14.mp4">Reaction in Weld Region  Welding Defects</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112107147</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Strength of Materials</strong></td>
	<td><strong>Dr. S. P. Harsha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112107147/lec01.mp4">Solid Mechanics</option>
      
      <option  value="112107147/lec02.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec03.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec04.mp4">Solid Mechanics</option>
      
      <option  value="112107147/lec05.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec06.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec07.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec08.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec09.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec10.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec11.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec12.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec13.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec14.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec15.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec16.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec17.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec18.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec19.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec20.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec21.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec22.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec23.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec24.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec25.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec26.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec27.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec28.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec29.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec30.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec31.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec32.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec33.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec34.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec35.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec36.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec37.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec38.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec39.mp4">Strength of Materials</option>
      
      <option  value="112107147/lec40.mp4">Strength of Materials</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112108091</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Computational Heat Transfer and Fluid Flow</strong></td>
	<td><strong>Prof. Pradip Dutta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112108091/module1/lecture1.pdf">Introduction</option>
      
      <option  value="112108091/module2/lecture2.pdf">Discretization techniques</option>
      
      <option  value="112108091/module3/lecture3.pdf">Modelling of diffusion problems using finite volume method</option>
      
      <option  value="112108091/module4/lecture4.pdf">Modelling of Convection- Diffusion Problems</option>
      
      <option  value="112108091/module5/lecture5.pdf">Flow modelling</option>
      
      <option  value="112108091/module6/lecture6.pdf">Unstructured grids</option>
      
      <option  value="112108091/module7/lecture7.pdf">Multiphase problems</option>
      
      <option  value="112108091/module8/lecture8.pdf">Introduction to turbulence modeling</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112108093</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Robotics: Advanced Concepts and Analysis</strong></td>
	<td><strong>Prof. Ashitava Ghosal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="112108093/module0/module0.pdf">Preface, Information for Students and Teachers, Acknowledgement</option>
      
      <option  value="112108093/module1/lecture.pdf">Introduction</option>
      
      <option  value="112108093/module2/lecture.pdf">Elements of Robots, Joints, Links, Actuators & Sensors</option>
      
      <option  value="112108093/module3/lecture.pdf">Kinematics of serial robots</option>
      
      <option  value="112108093/module4/lecture.pdf">Kinematics of parallel robots</option>
      
      <option  value="112108093/module5/lecture.pdf">Velocity and statics of robot manipulators</option>
      
      <option  value="112108093/module6/lecture.pdf">Dynamics of serial and parallel robots</option>
      
      <option  value="112108093/module7/lecture.pdf">Motion planning and control</option>
      
      <option  value="112108093/module8/lecture.pdf">Modeling and control of flexible robots</option>
      
      <option  value="112108093/module9/lecture.pdf">Modeling and analysis of wheeled mobile robots</option>
      
      <option  value="112108093/module10/lecture.pdf">Advanced topics in robotics</option>
          </select></td>
	
	</tr>
	</form>
    
    
   
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112103022</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Nonlinear Vibration</strong></td>
	<td><strong>Prof. S.K. Dwivedy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="112103022/module1/index.html">Introduction to nonlinear mechanical systems</option>
 <option  value="112103022/module1/lec2/1.html">Review on Linear Vibrating Systems</option>
 <option  value="112103022/module1/lec3/1.html">Qualitative analysis of nonlinear conservative system</option>
 <option  value="112103022/module2/lec1/1.html">Development of Equation of Motion for Nonlinear vibrating systems</option>
 <option  value="112103022/module2/lec2/1.html">Derivation of Equation of motion for Multi-degree of freedom systems</option>
 <option  value="112103022/module2/lec3/1.html">Derivation of the equation of motion of continuous system using d’Alembert’s principle</option>
 <option  value="112103022/module2/lec4/1.html">Derivation of equation of motion using Extended Hamilton’s Principle</option>
 <option  value="112103022/module2/lec5/1.html">Derivation of Equation of motion using Lagrange Principle</option>
 <option  value="112103022/module2/lec6/1.html">Development of temporal equation of motion using Galerkin’s method for continuous system</option>
 <option  value="112103022/module2/lec7/1.html">Ordering and scaling technique in nonlinear equations </option>
 <option  value="112103022/module3/lec1/1.html">The straight forward expansion</option>
 <option  value="112103022/module3/lec2/1.html">The lindstedtpoincare' method</option>
 <option  value="112103022/module3/lec3/1.html">Modified lindstedtpoincare’ technique</option>
 <option  value="112103022/module3/lec4/1.html">The method of multiple scales</option>
 <option  value="112103022/module3/lec5/1.html">Method of multiple scales applied to forced vibration</option>
 <option  value="112103022/module3/lec6/1.html">The method of harmonic balance</option>
 <option  value="112103022/module3/lec7/1.html">Method of averaging</option>
 <option  value="112103022/module3/lec8/1.html">Generalized method of averaging</option>
 <option  value="112103022/module3/lec9/1.html">Method of normal form</option>
 <option  value="112103022/module3/lec10/1.html">Incremental harmonic balance method</option>
 <option  value="112103022/module3/lec11/1.html">Intrinsic multiple scale harmonic balance method</option>
 <option  value="112103022/module3/lec12/1.html">Higher order method of multiple scales</option>
 <option  value="112103022/module4/lec1/1.html">Stability analysis of fixed point response</option>
 <option  value="112103022/module4/lec2/1.html">Bifurcation analysis of fixed point response</option>
 <option  value="112103022/module4/lec3/1.html">Stability analysis of Periodic response</option>
 <option  value="112103022/module4/lec4/1.html">Limit cycles and Bifurcation of Periodic Response</option>
 <option  value="112103022/module4/lec5/1.html">Quasi-periodic and Chaotic response</option>
 <option  value="112103022/module5/lec1/1.html">Review of numerical methods: Root finding and Solution of Deferential Equations</option>
 <option  value="112103022/module5/lec2/1.html">Methods of model reduction and continuation techniques</option>
 <option  value="112103022/module5/lec3/1.html">Poincare section, basin of attraction and Liapunov exponent</option>
 <option  value="112103022/module6/lec1/1.html">Free Vibration of Nonlinear Conservative system</option>
 <option  value="112103022/module6/lec2/1.html">Free vibration of nonlinear single degree of freedom conservative systems with quadratic and cubic nonlinearities</option>
 <option  value="112103022/module6/lec3/1.html">Free vibration of nonlinear single degree of freedom nonconservative systems</option>
 <option  value="112103022/module6/lec4/1.html">Free vibration of systems with negative damping</option>
 <option  value="112103022/module6/lec5/1.html">Forced Vibration of single degree of freedom system with cubic nonlinearities</option>
 <option  value="112103022/module6/lec6/1.html">System with non resonant hard excitations</option>
 <option  value="112103022/module6/lec7/1.html">Forced vibration Single-Degree of freedom system</option>
 <option  value="112103022/module6/lec8/1.html">Free and Forced vibration Multi-Degree of freedom system</option>
 <option  value="112103022/module6/lec9/1.html">Parametrically excited system</option>
 <option  value="112103022/module6/lec10/1.html">Multi-degree-of freedom parametrically excited system</option>
 <option  value="112103022/module6/lec11/1.html">Parametrically excited continuous system</option>
 <option  value="112103022/module6/lec12/1.html">Parametrically excited system with internal Resonance</option>








          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112103025</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Theory & Practice of Rotor Dynamics</strong></td>
	<td><strong>Prof. Rajiv Tiwari</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 
 <option  value="112103025/mod01lec01.mp4">Introduction</option>
 <option  value="112103025/mod01lec02.mp4">A Brief History of Rotor Dynamics</option>
 <option  value="112103025/mod01lec03.mp4">The State of the Art of Rotor Dynamics</option>
 <option  value="112103025/mod02lec01.mp4">Simple Rotor Models with Rigid Bearings</option>
 <option  value="112103025/mod02lec02.mp4">Jeffcott Rotor Model</option>
 <option  value="112103025/mod02lec03.mp4">Variant of Jeffcott Rotor Model</option>
 <option  value="112103025/mod03lec01.mp4">Rigid Rotor Mounted on Simple Anistropic Springs as Bearings</option>
 <option  value="112103025/mod03lec02.mp4">Rigid Rotor Mounted on Complex Anisotropic  Bearings</option>
 <option  value="112103025/mod03lec03.mp4">Flexible Shaft with a Rigid Disc Mounted on Anistropic Supports</option>
 <option  value="112103025/mod04lec01.mp4">Gyroscopic Effects : Synchronous whirl of a Rotor Systems with a thin Disc</option>
 <option  value="112103025/mod04lec02.mp4">Gyroscopic Effects : Synchronous and Asynchronous pure wobbling motions</option>
 <option  value="112103025/mod04lec03.mp4">Gyroscopic Effects : Asynchronous whirl of a Rotor system with a thin Disc</option>
 <option  value="112103025/mod04lec04.mp4">Gyroscopic Effects : Asynchronous whirl analysis with Dynamic Approach</option>
 <option  value="112103025/mod05lec01.mp4">Torsional Vibrations: Simple Rotor Systems</option>
 <option  value="112103025/mod05lec02.mp4">Three Disc Rotor System</option>
 <option  value="112103025/mod05lec03.mp4">Transfer Matrix Approach I</option>
 <option  value="112103025/mod05lec04.mp4">Transfer Matrix Approach II</option>
 <option  value="112103025/mod05lec05.mp4">Transfer Matrix Approach III</option>
 <option  value="112103025/mod05lec06.mp4">Geared and Branched Systems</option>
 <option  value="112103025/mod05lec07.mp4">Continuous System and Finite Element Method</option>
 <option  value="112103025/mod05lec08.mp4">Finite Element Method</option>
 <option  value="112103025/mod05lec09.mp4">Finite Element Analysis</option>
 <option  value="112103025/mod05lec10.mp4">Finite Element Analysis III</option>
 <option  value="112103025/mod06lec01.mp4">Influence Coefficient Method</option>
 <option  value="112103025/mod06lec02.mp4">Transfer Matrix Method I</option>
 <option  value="112103025/mod06lec03.mp4">Transfer Matrix Method II</option>
 <option  value="112103025/mod06lec04.mp4">Transfer Matrix Method III</option>
 <option  value="112103025/mod06lec05.mp4">Continuous System Approach</option>
 <option  value="112103025/mod06lec06.mp4">Finite Element Method I</option>
 <option  value="112103025/mod06lec07.mp4">Finite Element Method II</option>
 <option  value="112103025/mod06lec08.mp4">Finite Element Method III</option>
 <option  value="112103025/mod07lec01.mp4">Instability in Rotor Systems: Bearings</option>
 <option  value="112103025/mod07lec02.mp4">Fluid-Film Bearings</option>
 <option  value="112103025/mod07lec03.mp4">Internal Damping & Asymmetrical Shaft</option>
 <option  value="112103025/mod07lec04.mp4">Steam Whirl and Seals</option>
 <option  value="112103025/mod07lec05.mp4">Subcritical Speed Whirl</option>
 <option  value="112103025/mod08lec01.mp4">Introduction to Rigid Rotor Balancing</option>
 <option  value="112103025/mod08lec02.mp4">Dynamic Balancing of Rotors: Rigid Rotor Balancing</option>
 <option  value="112103025/mod08lec03.mp4">Dynamic Balancing of Rotors:Flexible Rotor Model Balancing</option>
 <option  value="112103025/mod08lec04.mp4">Dynamic Balancing of Rotors:Influence Coefficient Method for Flexible Rotor</option>
 <option  value="112103025/mod09lec01.mp4">Common Faults & Vibration signatures</option>
 <option  value="112103025/mod09lec02.mp4">Condition Based Monitiring</option>



          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112104176</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong> Sound Propagation Through Media</strong></td>
	<td><strong>Prof. Nachiketa Tiwari</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 
 <option  value="112104176/pdf/01.pdf">Lec1</option>
 <option  value="112104176/pdf/02.pdf">Lec2</option>
 <option  value="112104176/pdf/03.pdf">Lec3</option>
 <option  value="112104176/pdf/04.pdf">Lec4</option>
 <option  value="112104176/pdf/05.pdf">Lec5</option>
 <option  value="112104176/pdf/06.pdf">Lec6</option>
 <option  value="112104176/pdf/07.pdf">Lec7</option>
 <option  value="112104176/pdf/08.pdf">Lec8</option>
 <option  value="112104176/pdf/09.pdf">Lec9</option>
 <option  value="112104176/pdf/10.pdf">Lec10</option>
 <option  value="112104176/pdf/11.pdf">Lec11</option>
 <option  value="112104176/pdf/12.pdf">Lec12</option>
 <option  value="112104176/pdf/13.pdf">Lec13</option>
 <option  value="112104176/pdf/14.pdf">Lec14</option>
 <option  value="112104176/pdf/15.pdf">Lec15</option>
 <option  value="112104176/pdf/16.pdf">Lec16</option>
 <option  value="112104176/pdf/17.pdf">Lec17</option>
 <option  value="112104176/pdf/18.pdf">Lec18</option>
 <option  value="112104176/pdf/19.pdf">Lec19</option>
 <option  value="112104176/pdf/20.pdf">Lec20</option>
 <option  value="112104176/pdf/21.pdf">Lec21</option>
 <option  value="112104176/pdf/22.pdf">Lec22</option>
 <option  value="112104176/pdf/23.pdf">Lec23</option>
 <option  value="112104176/pdf/24.pdf">Lec24</option>
 <option  value="112104176/pdf/25.pdf">Lec25</option>
 <option  value="112104176/pdf/26.pdf">Lec26</option>
 <option  value="112104176/pdf/27.pdf">Lec27</option>
 <option  value="112104176/pdf/28.pdf">Lec28</option>
 <option  value="112104176/pdf/29.pdf">Lec29</option>
 <option  value="112104176/pdf/30.pdf">Lec30</option>
 <option  value="112104176/pdf/31.pdf">Lec31</option>
 <option  value="112104176/pdf/32.pdf">Lec32</option>
 <option  value="112104176/pdf/33.pdf">Lec33</option>
 <option  value="112104176/pdf/34.pdf">Lec34</option>
 <option  value="112104176/pdf/35.pdf">Lec35</option>
 <option  value="112104176/pdf/36.pdf">Lec36</option>
 <option  value="112104176/pdf/37.pdf">Lec37</option>
 <option  value="112104176/pdf/38.pdf">Lec38</option>
 <option  value="112104176/pdf/39.pdf">Lec39</option>
 <option  value="112104176/pdf/40.pdf">Lec40</option>



          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112103023</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Nonlinear Vibration</strong></td>
	<td><strong>Prof. S.K. Dwivedy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 

 <option  value="112103023/mod01lec01.mp4">Introduction of Nonlinear systems</option>
 <option  value="112103023/mod01lec02.mp4">Review of Linear vibrating systems</option>
 <option  value="112103023/mod01lec03.mp4">Phenomena associated with  Nonlinear systems</option>
 <option  value="112103023/mod01lec04.mp4">Commonly observed Phenomena in Nonlinear systems</option>
 <option  value="112103023/mod02lec01.mp4">Force and Moment based Approach</option>
 <option  value="112103023/mod02lec02.mp4">Energy based approach Extended Hamilton’s principle and Lagrange Priciple</option>
 <option  value="112103023/mod02lec03.mp4">Derivation of Equation of motion of nonlinear discrete system (More examples)</option>
 <option  value="112103023/mod02lec04.mp4">Derivation of Equation of motion of nonlinear continuous  system 1</option>
 <option  value="112103023/mod02lec05.mp4">Derivation of Equation of motion of nonlinear continuous  system 2</option>
 <option  value="112103023/mod02lec06.mp4">Ordering of  nonlinear Equation of motion</option>
 <option  value="112103023/mod03lec01.mp4">Qualitative Analysis Straight forward expansion</option>
 <option  value="112103023/mod03lec02.mp4">Numerical method  Straight forward expansion</option>
 <option  value="112103023/mod03lec03.mp4">Lindstedt Poincare’ technique</option>
 <option  value="112103023/mod03lec04.mp4">Method of multiple scales</option>
 <option  value="112103023/mod03lec05.mp4">Method of Harmonic balance</option>
 <option  value="112103023/mod03lec06.mp4">Method of averaging</option>
 <option  value="112103023/mod03lec07.mp4">Generalized Method of averaging</option>
 <option  value="112103023/mod03lec08.mp4">Krylov-Bogoliubov-Mitropolski technique</option>
 <option  value="112103023/mod03lec09.mp4">Incremental harmonic balance method and Intrinsic multiple scale harmonic balance method</option>
 <option  value="112103023/mod03lec10.mp4">Modified Lindstedt Poincare’ technique</option>
 <option  value="112103023/mod04lec01.mp4">Stability and Bifurcation of Fixed-point response 1</option>
 <option  value="112103023/mod04lec02.mp4">Stability and Bifurcation of Fixed-point response 2</option>
 <option  value="112103023/mod04lec03.mp4">Stability and Bifurcation of Fixed-point response 3</option>
 <option  value="112103023/mod04lec04.mp4">Stability and Bifurcation of Fixed-point response 4</option>
 <option  value="112103023/mod04lec05.mp4">Stability Analysis of Periodic response</option>
 <option  value="112103023/mod04lec06.mp4">Bifurcation of Periodic response  And Introduction to quasi-periodic and Chaotic response</option>
 <option  value="112103023/mod04lec07.mp4">Quasi-Periodic and Chaotic response</option>
 <option  value="112103023/mod05lec01.mp4">Numerical methods to obtain roots of characteristic equation and  time response</option>
 <option  value="112103023/mod05lec02.mp4">Numerical methods to obtain time response</option>
 <option  value="112103023/mod05lec03.mp4">Numerical methods to obtain frequency response</option>
 <option  value="112103023/mod06lec01.mp4">Free Vibration of Single degree of freedom Nonlinear systems with Cubic and quadratic nonlinearities </option>
 <option  value="112103023/mod06lec02.mp4">Free Vibration of Single degree of freedom Nonlinear systems with Cubic and quadratic nonlinearities: effect of damping </option>
 <option  value="112103023/mod06lec03.mp4">Free Vibration of multi- degree of freedom Nonlinear systems  with Cubic and quadratic nonlinearities</option>
 <option  value="112103023/mod06lec04.mp4">Forced nonlinear Vibration Single degree of freedom Nonlinear systems with Cubic nonlinearities:  </option>
 <option  value="112103023/mod06lec05.mp4">Forced nonlinear Vibration Single and multi- degree of freedom Nonlinear systems</option>
 <option  value="112103023/mod06lec06.mp4">Nonlinear Forced-Vibration of  Single and Multi Degree-of-Freedom System</option>
 <option  value="112103023/mod06lec07.mp4">Analysis of Multi- degree of freedom system</option>
 <option  value="112103023/mod06lec08.mp4">Nonlinear Vibration  of Parametrically excited system: Axially loaded sandwich beam</option>
 <option  value="112103023/mod06lec09.mp4">Nonlinear Vibration  of Parametrically excited system: Elastic and Magneto-elastic beam</option>
 <option  value="112103023/mod06lec10.mp4">Nonlinear Vibration  of Parametrically excited system  with internal resonance</option>




          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>112103024</strong></td>
	<td><strong>Mechanical Engineering</strong></td>
	<td><strong>Theory & Practice of Rotor Dynamics</strong></td>
	<td><strong>Prof. Rajiv Tiwari</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 

  <option  value="112103024/module1/index.html">A Brief History of Rotor dynamics</option>
 <option  value="112103024/module1/lec2/1.html">Overview of Various Rotor Dynamics Phenomena & Recent Trends</option>
 <option  value="112103024/module2/lec1/1.html">Single-DOF Damped Rotor Model</option>
 <option  value="112103024/module2/lec2/1.html">Jeffcott Rotor Model</option>
 <option  value="112103024/module2/lec3/1.html">Jeffcott Rotor Model with an Offset Disc</option>
 <option  value="112103024/module3/lec1/1.html">Rolling Element Bearings</option>
 <option  value="112103024/module3/lec2/1.html">Hydrodynamic Oil-Lubricated Journal Bearings</option>
 <option  value="112103024/module4/lec1/1.html">Symmetrical Long Rigid Shaft in Flexible Anisotropic Bearings</option>
 <option  value="112103024/module4/lec2/1.html">Symmetrical Long Rigid Shaft on Anisotropic Bearings</option>
 <option  value="112103024/module4/lec3/1.html">Symmetrical Flexible Shaft on Anisotropic Bearings</option>
 <option  value="112103024/module5/lec1/1.html">Synchronous Motion</option>
 <option  value="112103024/module5/lec2/1.html">Asynchronous Rotational Motion</option>
 <option  value="112103024/module5/lec3/1.html">Asynchronous General Motion</option>
 <option  value="112103024/module5/lec4/1.html">Gyroscopic Effects by the Dynamics Approach</option>
 <option  value="112103024/module6/lec1/1.html">One- and Two-Disc Torsional Rotor System</option>
 <option  value="112103024/module6/lec2/1.html">Three-Disc Rotor System</option>
 <option  value="112103024/module6/lec3/1.html">Transfer Matrix Methods for Tortional Vibration</option>
 <option  value="112103024/module6/lec4/1.html">TMM for Branched Systems </option>
 <option  value="112103024/module6/lec5/1.html">TMM for Damped and Branched Systems</option>
 <option  value="112103024/module6/lec6/1.html">Modelling of Reciprocating Machine Systems</option>
 <option  value="112103024/module7/lec1/1.html">Continuous Shaft Systems</option>
 <option  value="112103024/module7/lec2/1.html">Continuous Shaft Systems and Finite Element Methods</option>
 <option  value="112103024/module7/lec3/1.html">Applications of Finite Element Methods</option>
 <option  value="112103024/module7/lec4/1.html">Geared Element for Branched Systems</option>
 <option  value="112103024/module8/lec1/1.html">Influence Coefficient Method</option>
 <option  value="112103024/module8/lec2/1.html">Transfer Matrix Methods for Transverse Vibration</option>
 <option  value="112103024/module8/lec3/1.html">Applications of Transfer Matrix Methods</option>
 <option  value="112103024/module8/lec4/1.html">Transfer Matrix Methods with Gyroscopic effects and Dunkerley’s Formula</option>
 <option  value="112103024/module9/lec1/1.html">Governing Equations and Free Vibration in Continuous Systems</option>
 <option  value="112103024/module9/lec2/1.html">Finite Element Formulation</option>
 <option  value="112103024/module9/lec3/1.html">Free and Forced Vibrations by Finite Element Method</option>
 <option  value="112103024/module9/lec4/1.html">Proportional Damping Static and Dynamic Condensations</option>
 <option  value="112103024/module10/lec1/1.html">Timoshenko Beam Theory</option>
 <option  value="112103024/module10/lec2/1.html">Whirling of Timoshenko Shafts</option>
 <option  value="112103024/module11/lec1/1.html">Oil Whip and Oil Whirl</option>
 <option  value="112103024/module11/lec2/1.html">Stability Analysis using Linearized Stiffness and Damping Coefficients</option>
 <option  value="112103024/module11/lec3/1.html">Internal Friction and Effect of Rotor Polar Asymmetry</option>
 <option  value="112103024/module11/lec4/1.html">Subcritical whirl due to Gravity</option>
 <option  value="112103024/module11/lec5/1.html">Instability due to Stream Whirl and Seals</option>
 <option  value="112103024/module12/lec1/1.html">Finite Element Instability Analysis of Multi-DOF Rotors Mounted on Flexible Bearings; </option>
 <option  value="112103024/module13/lec1/1.html">Basics Theory of Balancing of Rotors</option>
 <option  value="112103024/module13/lec2/1.html">Balancing of Practical Rigid Rotor</option>
 <option  value="112103024/module13/lec3/1.html">Modal Balancing for Flexible Rotors</option>
 <option  value="112103024/module13/lec4/1.html">Influence Coefficient Methods for Flexible Rotors</option>
 <option  value="112103024/module14/lec1/1.html">Display of Vibration Measurements</option>
 <option  value="112103024/module14/lec2/1.html">Accuracy of Vibration Measurements</option>
 <option  value="112103024/module15/lec1/1.html">Signature Analysis of Common Rotor Faults</option>
 <option  value="112103024/module15/lec2/1.html">Signature Analysis of Rolling Bearings and Gears</option>


          </select></td>
	
	</tr>
	</form>



<form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>112106186</strong></td>
	<td><strong> Mechanical Engineering </strong></td>
	<td><strong> NOC:Foundation of Computational Fluid Dynamics </strong></td>
	<td><strong> Dr.S.Vengadesan </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Madras </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="112106186/mod01lec01.mp4">Lecture 01</option>
      
      <option  value="112106186/mod01lec02.mp4"> Lecture 02</option>
      
      <option  value="112106186/mod01lec03.mp4"> Lecture 03</option>
      
      <option  value="112106186/mod01lec04.mp4"> Lecture 04</option>
      
      <option  value="112106186/mod01lec05.mp4"> Lecture 05</option>
      
      <option  value="112106186/mod02lec06.mp4"> Lecture 06</option>
      
      <option  value="112106186/mod02lec07.mp4"> Lecture 07</option>
      
      <option  value="112106186/mod02lec08.mp4"> Lecture 08</option>
      
      <option  value="112106186/mod02lec09.mp4"> Lecture 09</option>
      
      <option  value="112106186/mod02lec10.mp4"> Lecture 10</option>
      
      <option  value="112106186/mod03lec11.mp4"> Lecture 11</option>
      
      <option  value="112106186/mod03lec12.mp4"> Lecture 12</option>
      
        
      <option  value="112106186/mod03lec13.mp4"> Lecture 13</option>
      
      <option  value="112106186/mod03lec14.mp4"> Lecture 14</option>
      
      <option  value="112106186/mod03lec15.mp4"> Lecture 15</option>
      
      <option  value="112106186/mod04lec16.mp4"> Lecture 16</option>
      
      <option  value="112106186/mod04lec17.mp4"> Lecture 17</option>
      
      <option  value="112106186/mod04lec18.mp4"> Lecture 18</option>
      
      <option  value="112106186/mod04lec19.mp4"> Lecture 19</option>
      
      <option  value="112106186/mod04lec20.mp4"> Lecture 20</option>
      
      <option  value="112106186/mod05lec21.mp4"> Lecture 21 </option>
      
      <option  value="112106186/mod05lec22.mp4"> Lecture 22 </option>
      
      <option  value="112106186/mod05lec23.mp4"> Lecture 23 </option>
      
      <option  value="112106186/mod05lec24.mp4"> Lecture 24 </option>
      
      <option  value="112106186/mod05lec25.mp4"> Lecture 25 </option>
      
      <option  value="112106186/mod05lec26.mp4"> Lecture 26 </option>
      
      <option  value="112106186/mod06lec27.mp4"> Lecture 27 </option>
      
      <option  value="112106186/mod06lec28.mp4"> Lecture 28 </option>
      
      <option  value="112106186/mod06lec29.mp4"> Lecture 29 </option>
      
      <option  value="112106186/mod06lec30.mp4"> Lecture 30 </option>
      
      <option  value="112106186/mod06lec31.mp4"> Lecture 31 </option>
      
      <option  value="112106186/mod06lec32.mp4"> Lecture 32 </option>
      
      <option  value="112106186/mod07lec33.mp4"> Lecture 33 </option>
      
      <option  value="112106186/mod07lec34.mp4"> Lecture 34 </option>
      
      <option  value="112106186/mod07lec35.mp4"> Lecture 35 </option>
      
      <option  value="112106186/mod07lec36.mp4"> Lecture 36 </option>
      
      <option  value="112106186/mod07lec37.mp4"> Lecture 37 </option>
      
      <option  value="112106186/mod08lec38.mp4"> Lecture 38 </option>
      
      <option  value="112106186/mod08lec39.mp4"> Lecture 39 </option>
      
      <option  value="112106186/mod08lec40.mp4"> Lecture 40 </option>
       
<option  value="112106186/mod08lec41.mp4"> Lecture 41 </option>
      <option  value="112106186/mod08lec42.mp4"> Lecture 42 </option>
      <option  value="112106186/mod09lec43.mp4"> Lecture 43 </option>
      <option  value="112106186/mod08lec44.mp4"> Lecture 44 </option>


                                  
          </select>
</td>
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>112105187</strong></td>
      <td><strong>Mechanical Engineering</strong></td>
      <td><strong>Micro fluidics</strong></td>
      <td><strong>Prof. S. Chakraborty</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kharagpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="112105187/Lec-01.mp4">Introduction to Microfluidics</option>
          <option  value="112105187/Lec-02.mp4">Microfluidics: Some Application Examples</option>
          <option  value="112105187/Lec-03.mp4">Microfluidics: Some More Application Examples</option>
          <option  value="112105187/Lec-04.mp4">Equations of Conservation</option>
          <option  value="112105187/Lec-05.mp4">Navier Stokes Equation</option>
          <option  value="112105187/Lec-06.mp4">Navier Stokes Equation (Contd.)</option>
          <option  value="112105187/Lec-07.mp4">Energy Equation</option>
          <option  value="112105187/Lec-08.mp4">Energy Equation (Contd.) and Species Conservation Equation</option>
          <option  value="112105187/Lec-09.mp4">Pressure –driven Microflows</option>
          <option  value="112105187/Lec-10.mp4">Pressure-driven Microflows (Contd.)</option>
          <option  value="112105187/Lec-11.mp4">Pressure-driven  Microflows (Contd.)</option>
          <option  value="112105187/Lec-12.mp4">Pressure-driven Microflows  (Contd.)</option>
          <option  value="112105187/Lec-13.mp4">Pressure-driven Microflows   (Contd.)</option>
          <option  value="112105187/Lec-14.mp4">Some Examples of Unsteady Flows</option>
          <option  value="112105187/Lec-15.mp4">Some Examples of Unsteady Flows (Contd.)</option>
          <option  value="112105187/Lec-16.mp4">Some Examples of  Unsteady Flows (Contd.)</option>
          <option  value="112105187/Lec-17.mp4">Stokes Drag on a Sphere</option>
          <option  value="112105187/Lec-18.mp4">Stokes Drag on a Sphere (Contd.) and Introduction to Lubrication Theory</option>
          <option  value="112105187/Lec-19.mp4">Lubircation Theory (Contd.)</option>
          <option  value="112105187/Lec-20.mp4">Lubrication Theory (Contd.)</option>
          <option  value="112105187/Lec-21.mp4">Boundary Condition in Fluid Mechanics : Slip or No-slip?</option>
          <option  value="112105187/Lec-22.mp4">Boundary Condition in Fluid Mechanics: Slip or No-slip? (Contd.)</option>
          <option  value="112105187/Lec-23.mp4">Surface Tension Driven Flows</option>
          <option  value="112105187/Lec-24.mp4">Surface Tension Driven Flows (Contd.)</option>
          <option  value="112105187/Lec-25.mp4">Surface  Tension Driven Flows (Contd.)</option>
          <option  value="112105187/Lec-26.mp4">Surface Tension  Driven Flows (Contd.)</option>
          <option  value="112105187/Lec-27.mp4">Surface Tension Driven  Flows (Contd.) and Modulating Surface Tension</option>
          <option  value="112105187/Lec-28.mp4">Modulating Surface Tension (Contd.)</option>
          <option  value="112105187/Lec-29.mp4">Thin Film Dynamics</option>
          <option  value="112105187/Lec-30.mp4">Thin Film Dynamics (Contd.)</option>
          <option  value="112105187/Lec-31.mp4">Thin Film Dynamics  (Contd.)</option>
          <option  value="112105187/Lec-32.mp4">Thin Film Dynamics   (Contd.)</option>
          <option  value="112105187/Lec-33.mp4">Lab on a CD</option>
          <option  value="112105187/Lec-34.mp4">Lab on a CD (Contd.)</option>
          <option  value="112105187/Lec-35.mp4">Introduction to Microfabrication</option>
          <option  value="112105187/Lec-36.mp4">Electrokinetics</option>
          <option  value="112105187/Lec-37.mp4">Electrokinetics (Contd.)</option>
          <option  value="112105187/Lec-38.mp4">Electrokinetics   (Contd.)</option>
          <option  value="112105187/Lec-39.mp4">Electrokinetics    (Contd.)</option>
          <option  value="112105187/Lec-40.mp4">Electrokinetics (Contd. )</option>
          <option  value="112105187/Lec-41.mp4">Electrokinetics ( Contd. )</option>
          <option  value="112105187/Lec-42.mp4">Dispersion</option>
          <option  value="112105187/Lec-43.mp4">Introduction to Nanofluidics</option>
          <option  value="112105187/Lec-44.mp4">Introduction to Nanofluidics (Contd.) and Molecular Dynamics Simulations</option>
          <option  value="112105187/Lec-45.mp4">Introduction to Molecular Dynamics Simulations (Contd.)</option>
          <option  value="112105187/Lec-46.mp4">Biomicrofluidics</option>
          <option  value="112105187/Lec-47.mp4">Biomicrofluidics (Contd.)</option>
          <option  value="112105187/Lec-48.mp4">Nanofluidic Energy Conversion</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>112104188</strong></td>
      <td><strong>Mechanical Engineering</strong></td>
      <td><strong>NOC:Manufacturing Systems Technology</strong></td>
      <td><strong>Dr. Shantanu Bhattacharya</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="112104188/mod01lec01.mp4">Module 01</option>
          <option  value="112104188/mod01lec02.mp4">Module 02</option>
          <option  value="112104188/mod01lec03.mp4">Module 03</option>
          <option  value="112104188/mod01lec04.mp4">Module 04</option>
          <option  value="112104188/mod01lec05.mp4">Module 05</option>
          <option  value="112104188/mod01lec06.mp4">Module 06</option>
          <option  value="112104188/mod02lec07.mp4">Module 07</option>
          <option  value="112104188/mod02lec08.mp4">Module 08</option>
          <option  value="112104188/mod02lec09.mp4">Module 09</option>
          <option  value="112104188/mod02lec10.mp4">Module 10</option>
          <option  value="112104188/mod02lec11.mp4">Module 11</option>
          <option  value="112104188/md02lec12.mp4">Module 12</option>
          <option  value="112104188/mod03lec13.mp4">Module 13</option>
          <option  value="112104188/mod03lec14.mp4">Module 14</option>
          <option  value="112104188/mod03lec15.mp4">Module 15</option>
          <option  value="112104188/mod03lec16.mp4">Module 16</option>
          <option  value="112104188/mod03lec17.mp4">Module 17</option>
          <option  value="112104188/mod03lec18.mp4">Module 18</option>
          <option  value="112104188/mod04lec19.mp4">Module 19</option>
          <option  value="112104188/mod04lec20.mp4">Module 20</option>
          <option  value="112104188/mod04lec21.mp4">Module 21</option>
          <option  value="112104188/mod04lec22.mp4">Module 22</option>
          <option  value="112104188/mod04lec23.mp4">Module 23</option>
          <option  value="112104188/mod04lec24.mp4">Module 24</option>
          <option  value="112104188/mod05lec25.mp4">Module 25</option>
          <option  value="112104188/mod05lec26.mp4">Module 26</option>
          <option  value="112104188/mod05lec27.mp4">Module 27</option>
          <option  value="112104188/mod05lec28.mp4">Module 28</option>
          <option  value="112104188/mod05lec29.mp4">Module 29</option>
          <option  value="112104188/mod05lec30.mp4">Module 30</option>
          <option  value="112104188/mod06lec31.mp4">Module 31</option>
          <option  value="112104188/mod06lec32.mp4">Module 32</option>
          <option  value="112104188/mod06lec33.mp4">Module 33</option>
          <option  value="112104188/mod06lec34.mp4">Module 34</option>
          <option  value="112104188/mod06lec35.mp4">Module 35</option>
          <option  value="112104188/mod06lec36.mp4">Module 36</option>
          <option  value="112104188/mod07lec37.mp4">Module 37</option>
          <option  value="112104188/mod07lec38.mp4">Module 38</option>
          <option  value="112104188/mod07lec39.mp4">Module 39</option>
          <option  value="112104188/mod07lec40.mp4">Module 40</option>
          <option  value="112104188/mod07lec41.mp4">Module 41</option>
          <option  value="112104188/mod07lec42.mp4">Module 42</option>
          <option  value="112104188/mod08lec43.mp4">Module 43</option>
          <option  value="112104188/mod08lec44.mp4">Module 44</option>
          <option  value="112104188/mod08lec45.mp4">Module 45</option>
          <option  value="112104188/mod08lec46.mp4">Module 46</option>
          <option  value="112104188/mod08lec47.mp4">Module 47</option>
          <option  value="112104188/mod08lec48.mp4">Module 48</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>112104189</strong></td>
      <td><strong>Mechanical Engineering</strong></td>
      <td><strong>NOC:Manufacturing systems technology part II</strong></td>
      <td><strong>Dr. Shantanu Bhattacharya</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  112104189/  mod01lec01.mp4  ">  Module 1  </option>
          <option  value="  112104189/  mod01lec02.mp4  ">  Module 2  </option>
          <option  value="  112104189/  mod01lec03.mp4  ">  Module 3  </option>
          <option  value="  112104189/  mod01lec04.mp4  ">  Module 4  </option>
          <option  value="  112104189/  mod01lec05.mp4  ">  Module 5  </option>
          <option  value="  112104189/  mod01lec06.mp4  ">  Module 6  </option>
          <option  value="  112104189/  mod02lec07.mp4  ">  Module 7  </option>
          <option  value="  112104189/  mod02lec08.mp4  ">  Module 8  </option>
          <option  value="  112104189/  mod02lec09.mp4  ">  Module 9  </option>
          <option  value="  112104189/  mod02lec10.mp4  ">  Module 10 </option>
          <option  value="  112104189/  mod02lec11.mp4  ">  Module 11 </option>
          <option  value="  112104189/  mod02lec12.mp4  ">  Module 12 </option>
          <option  value="  112104189/  mod03lec13.mp4  ">  Module 13 </option>
          <option  value="  112104189/  mod03lec14.mp4  ">  Module 14 </option>
          <option  value="  112104189/  mod03lec15.mp4  ">  Module 15 </option>
          <option  value="  112104189/  mod03lec16.mp4  ">  Module 16 </option>
          <option  value="  112104189/  mod03lec17.mp4  ">  Module 17 </option>
          <option  value="  112104189/  mod03lec18.mp4  ">  Module 18 </option>
          <option  value="  112104189/  mod04lec19.mp4  ">  Module 19 </option>
          <option  value="  112104189/  mod04lec20.mp4  ">  Module 20 </option>
          <option  value="  112104189/  mod04lec21.mp4  ">  Module 21 </option>
          <option  value="  112104189/  mod04lec22.mp4  ">  Module 22 </option>
          <option  value="  112104189/  mod04lec23.mp4  ">  Module 23 </option>
          <option  value="  112104189/  mod04lec24.mp4  ">  Module 24 </option>
          <option  value="  112104189/  mod05lec25.mp4  ">  Module 25 & 26  </option>
          <option  value="  112104189/  mod05lec26.mp4  ">  Module 27 </option>
          <option  value="  112104189/  mod05lec27.mp4  ">  Module 28 </option>
          <option  value="  112104189/  mod05lec28.mp4  ">  Module 29 </option>
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
