﻿<?php

session_start();


if(!isset($_SESSION['loggedin']) || (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true))
	{
		header("location:index.php");
	} 
	
?>


<!--
//if(!isset($_SESSION['loggedin'])){
    //if the value was not set, you redirect the user to your login page
  //  header('Location: index.php');
   // exit;

//else
//{
   //if the user did login, then you load the page normally
//}

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aerospace</title>
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
	<td><strong>101101001</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Introduction to Aerospace Propulsion</strong></td>
	<td><strong>Prof. A M Pradeep ,Prof. Bhaskar Roy</strong></td>
	<td><strong>Video</strong></td>      
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="101101001/mod01lec01.mp4">L1-Course Intro & Historical development of flights </option>
      
      <option  value="101101001/mod01lec02.mp4">L2-Early development of aircraft propulsive devices</option>
      
      <option  value="101101001/mod01lec03.mp4">L3-Development of Jet propulsion for aircraft</option>
      
      <option  value="101101001/mod01lec04.mp4">L4- Introduction to thermodynamics, Scope and method, Basic concepts: system, surroundings, property, intensive and extensive, state, equilibrium and state postulate, process, path and cycle </option>
      
      <option  value="101101001/mod01lec05.mp4">L5- Quasi-static processes, zeroth law of thermodynamics and temperature, concept of energy and its various forms, internal energy, enthalpy</option>
      
      <option  value="101101001/mod01lec06.mp4">L6- Specific heats at constant pressure and volume Work and heat transfers</option>
      
      <option  value="101101001/mod01lec07.mp4">L7- Tutorial</option>
      
      <option  value="101101001/mod01lec08.mp4">L8- First law of thermodynamics for closed systems</option>
      
      <option  value="101101001/mod01lec09.mp4">L9- First law of thermodynamics for open systems/flow processes</option>
      
      <option  value="101101001/mod01lec10.mp4">L10-Second law of thermodynamics, heat engines, refrigerators and heat pumps, Kelvin-Planck and Clausius statement of second law of thermodynamics</option>
      
      <option  value="101101001/mod01lec11.mp4">L11- Reversible and irreversible processes, concept of entropy</option>
      
      <option  value="101101001/mod01lec12.mp4">L12- Increase of entropy principle, third law of thermodynamics, absolute entropy, perpetual motion machines</option>
      
      <option  value="101101001/mod01lec13.mp4">L13- Tutorial</option>
      
      <option  value="101101001/mod01lec14.mp4">L14- Carnot cycle, Carnot principle, thermodynamic temperature scale</option>
      
      <option  value="101101001/mod01lec15.mp4">L15- Exergy, availability and second law efficiency</option>
      
      <option  value="101101001/mod01lec16.mp4">L16- Tutorial</option>
      
      <option  value="101101001/mod01lec17.mp4">L17- Gas and vapour power cycles, Otto cycle, Diesel cycle, Dual cycle</option>
      
      <option  value="101101001/mod01lec18.mp4">L18- Rankine cycle, Brayton cycle, Stirling and Ericsson cycles</option>
      
      <option  value="101101001/mod01lec19.mp4">L19- Thermodynamic property relations, Jacobean and Legendre transformations, Maxwell�s equations</option>
      
      <option  value="101101001/mod01lec20.mp4">L20- Tutorial</option>
      
      <option  value="101101001/mod01lec21.mp4">L21- Properties of gas and vapour mixtures</option>
      
      <option  value="101101001/mod01lec22(A).mp4">L22 (A)- One-dimensional compressible flows, isentropic flows</option>
      
      <option  value="101101001/mod01lec22(B).mp4">L22 (B)- Flows with friction and heat transfer, normal and oblique shocks</option>
      
      <option  value="101101001/mod01lec23.mp4">L23- Piston-prop engines: Otto cycles; Ideal and Real cycles</option>
      
      <option  value="101101001/mod01lec24.mp4">L24- IC Engines for aircraft application</option>
      
      <option  value="101101001/mod01lec25.mp4">L25- Performance parameters of IC engines</option>
      
      <option  value="101101001/mod01lec26.mp4">L26- Supercharging of aircraft IC engines</option>
      
      <option  value="101101001/mod01lec27.mp4">L27- Tutorial: IC Engines</option>
      
      <option  value="101101001/mod01lec28.mp4">L28- Propeller fundamentals</option>
      
      <option  value="101101001/mod01lec29.mp4">L29- Propeller aerodynamic theories �I</option>
      
      <option  value="101101001/mod01lec30.mp4">L30- Propeller aerodynamic theories �II</option>
      
      <option  value="101101001/mod01lec31.mp4">L31- Tutorial: Propellers</option>
      
      <option  value="101101001/mod01lec32.mp4">L32- Ideal cycles for Jet engines</option>
      
      <option  value="101101001/mod01lec33.mp4">L33- Ideal cycles for variants of jet engines</option>
      
      <option  value="101101001/mod01lec34.mp4">L34- Tutorial</option>
      
      <option  value="101101001/mod01lec35.mp4">L35- Fundamentals of Ramjets and Pulsejets</option>
      
      <option  value="101101001/mod01lec36.mp4">L36- Fundamentals of Rocket engines</option>
      
      <option  value="101101001/mod01lec37.mp4">L37- Fundamentals of Missile engines</option>
      
      <option  value="101101001/mod01lec38.mp4">L38- Various space vehicles and their engines</option>
      
      <option  value="101101001/mod01lec39.mp4">L39- Closure of the lecture series : recap</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101101002</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Jet Aircraft Propulsion</strong></td>
	<td><strong>Prof. Bhaskar Roy,Prof. A M Pradeep </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="101101002/mod01lec01.mp4">L1-Introduction & Development of Jet Aircraft Propulsion</option>
      
      <option  value="101101002/mod01lec02.mp4">L2-How the Aircraft Jet Engines make Thrust </option>
      
      <option  value="101101002/mod01lec03.mp4">L3-Jet Engine Basic Performance Parameters   </option>
      
      <option  value="101101002/mod01lec04.mp4">L4-Turbojet, Reheat Turbojet and Multi-spool Engines </option>
      
      <option  value="101101002/mod01lec05.mp4">L5-Turbofan, Turbo-prop and Turboshaft engines </option>
      
      <option  value="101101002/mod01lec06.mp4">L6-Ideal and Real Brayton cycles </option>
      
      <option  value="101101002/mod01lec07.mp4">L7-Jet  Engine Cycles for Aircraft propulsion</option>
      
      <option  value="101101002/mod01lec08.mp4">L8-Cycle components and component performances</option>
      
      <option  value="101101002/mod01lec09.mp4">L9-Tute-1</option>
      
      <option  value="101101002/mod01lec10.mp4">L10-Analysis of engine real cycles</option>
      
      <option  value="101101002/mod01lec11.mp4">L11-Tute-2</option>
      
      <option  value="101101002/mod01lec12.mp4">L12-Thermodynamics of  Compressors</option>
      
      <option  value="101101002/mod01lec13.mp4">L13-Thermodynamics of  Turbines</option>
      
      <option  value="101101002/mod01lec14.mp4">L14-Axial Compressors : two dimensional analytical model</option>
      
      <option  value="101101002/mod01lec15.mp4">L15-Cascade  analysis; Loss and Blade performance estimation</option>
      
      <option  value="101101002/mod01lec16.mp4">L16-Free Vortex theory; Single-Multi-stage characteristics</option>
      
      <option  value="101101002/mod01lec17.mp4">L17-Tutes � 3 </option>
      
      <option  value="101101002/mod01lec18.mp4">L18-Elements of centrifugal compressor</option>
      
      <option  value="101101002/mod01lec19.mp4">L19-Centrifugal Compressor characteristics: Surging, Choking</option>
      
      <option  value="101101002/mod01lec20.mp4">L20-Axial flow turbines;   Turbine Blade 2-D (cascade) analysis</option>
      
      <option  value="101101002/mod01lec21.mp4">L21-Multi-staging: Axial Turbine; Turbine Cooling Technology</option>
      
      <option  value="101101002/mod01lec22.mp4">L22-Radial Turbine Aerodynamics & Thermodynamics; Losses</option>
      
      <option  value="101101002/mod01lec23.mp4">L23-Tutes � 4</option>
      
      <option  value="101101002/mod01lec24.mp4">L24-Types of combustion chambers: mechanism & parameters</option>
      
      <option  value="101101002/mod01lec25.mp4">L25-Pr. Loss,  Combustion efficiency; Combustion intensity</option>
      
      <option  value="101101002/mod01lec26.mp4">L26-Practical combustion system ; Stability, Fuel injection</option>
      
      <option  value="101101002/mod01lec27.mp4">L27-Intakes for Powerplant: Transport / Military Aircraft</option>
      
      <option  value="101101002/mod01lec28.mp4">L28-Subsonic, Transonic, Supersonic Intake Designs</option>
      
      <option  value="101101002/mod01lec29.mp4">L29-Nozzle : fixed and variable geometry nozzles</option>
      
      <option  value="101101002/mod01lec30.mp4">L30-C-D nozzle and their uses</option>
      
      <option  value="101101002/mod01lec31.mp4">L31-Tute-5</option>
      
      <option  value="101101002/mod01lec32.mp4">L32-Engine Off  Design Operations</option>
      
      <option  value="101101002/mod01lec33.mp4">L33-Aircraft Engine component matching: Dimensional analysis</option>
      
      <option  value="101101002/mod01lec34.mp4">L34-Engine component matching and Sizing</option>
      
      <option  value="101101002/mod01lec35.mp4">L35-Installed Performance of Engine</option>
      
      <option  value="101101002/mod01lec36.mp4">L36-Tute-6</option>
      
      <option  value="101101002/mod01lec37.mp4">L37-Use of Ramjets and Pulsejets in Aircraft propulsion</option>
      
      <option  value="101101002/mod01lec38.mp4">L38-Thermodynamic Cycle & Performance Parameters</option>
      
      <option  value="101101002/mod01lec39.mp4">L39-Flow in Diffusers, Combustors and Nozzles</option>
      
      <option  value="101101002/mod01lec40.mp4">L40-Performanace and Design of Ramjet & Scramjet Engines</option>
      
      <option  value="101101002/mod01lec41.mp4">L41-Tute � 7</option>
      
      <option  value="101101002/mod01lec42.mp4">L42-Future of Aircraft Propulsion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101101058</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Turbomachinery Aerodynamics</strong></td>
	<td><strong>Prof. A M Pradeep ,Prof. Bhaskar Roy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="101101058/mod01lec01.mp4">L1-Introduction to Turbo machines Syllabus, References and Schedules</option>
      
      <option  value="101101058/mod01lec02.mp4">L2-Axial Flow Compressors and Fans : Introduction to Compressor Aerothermodynamics</option>
      
      <option  value="101101058/mod01lec03.mp4">L3-A two dimensional analytical model :Cascade</option>
      
      <option  value="101101058/mod01lec04.mp4">L4-2D losses in Axial flow Compressor Stage : Primary losses</option>
      
      <option  value="101101058/mod01lec05.mp4">L5-Tutorial 1 : Two Dimensional Axial Flow Compressors</option>
      
      <option  value="101101058/mod01lec06.mp4">L6-3D Flows in Blade Passages, Secondary Flows, Tip leakage Flow, Scrubbling</option>
      
      <option  value="101101058/mod01lec07.mp4">L7-Three Dimensional Flow Analysis : Radial Equilibrium Concept</option>
      
      <option  value="101101058/mod01lec08.mp4">L8-Classical Blade Design Laws : Free Vortex and other Laws</option>
      
      <option  value="101101058/mod01lec09.mp4">L9-Three Dimensional Flow Analysis in Axial Flow Compressor</option>
      
      <option  value="101101058/mod01lec10.mp4">L10-Tutorial 2:  Three Dimensional Axial Flow Compressors</option>
      
      <option  value="101101058/mod01lec11.mp4">L11-Axial Compressor Characteristics: Single stage, Multi stage and Multi spool Characteristics </option>
      
      <option  value="101101058/mod01lec12.mp4">L12-Instability in Axial Compressors</option>
      
      <option  value="101101058/mod01lec13.mp4">L13-Inlet Distortion and Rotating Stall, Control of Instability</option>
      
      <option  value="101101058/mod01lec14.mp4">L14-Transonic Compressors and Shock Structure Models, Transonic Compressor Characteristics</option>
      
      <option  value="101101058/mod01lec15.mp4">L15-Axial Flow Compressor Design, Inter Spool Duct</option>
      
      <option  value="101101058/mod01lec16.mp4">L16-Design of Compressor Blades, Aerofoil Design (Subsonic, Transonic, Supersonic Profiles )</option>
      
      <option  value="101101058/mod01lec17.mp4">L17-Design of Compressor Blade: 3D Blade Shapes of Rotors and Stators</option>
      
      <option  value="101101058/mod01lec18.mp4">L18-Noise Problem in Axial Compressors and Fans</option>
      
      <option  value="101101058/mod01lec19.mp4">L19-Axial Flow Turbines: Introduction to Turbines Aerothermodynamics </option>
      
      <option  value="101101058/mod01lec20.mp4">L20-Axial Flow Turbines: Turbine Blade 2D (Cascade) Analysis</option>
      
      <option  value="101101058/mod01lec21.mp4">L21-Axial Flow Turbines: Work done, Degree of Reaction, Losses and Efficiency</option>
      
      <option  value="101101058/mod01lec22.mp4">L22-Axial Flow Turbines: Blade and Axial Flow Passages, Exit Flow Matching with Nozzle</option>
      
      <option  value="101101058/mod01lec23.mp4">L23-Tutorial 3 : Axial Flow Turbines</option>
      
      <option  value="101101058/mod01lec24.mp4">L24-Multi staging and Multi spooling of Turbine</option>
      
      <option  value="101101058/mod01lec25.mp4">L25-3D Flow in Turbine: 3D Flow Theories, Free Vortex Theories etc. </option>
      
      <option  value="101101058/mod01lec26.mp4">L26-Tutorial 4 : 3D Flows in Axial Flow Turbines </option>
      
      <option  value="101101058/mod01lec27.mp4">L27-Turbine Blade Cooling � Fundamentals of Heat Transfer, Blade Cooling Requirements </option>
      
      <option  value="101101058/mod01lec28.mp4">L28-Turbine Blade Cooling Technologies</option>
      
      <option  value="101101058/mod01lec29.mp4">L29-Turbine Blade Design: Turbine Profiles, Aerofoil Data and Profile Construction</option>
      
      <option  value="101101058/mod01lec30.mp4">L30-Turbine Blade Design: 3D Blade Shapes</option>
      
      <option  value="101101058/mod01lec31.mp4">L31-Centrifugal Compressors: Thermodynamics and Aerodynamics</option>
      
      <option  value="101101058/mod01lec32.mp4">L32-Centrifugal Compressors : Characteristics, Stall, Surge Problems</option>
      
      <option  value="101101058/mod01lec33.mp4">L33-Tutorial 5 : Centrifugal Compressors</option>
      
      <option  value="101101058/mod01lec34.mp4">L34-Design of Centrifugal Compressors: Impellers, Vane/Vane less Diffusers, Volutes</option>
      
      <option  value="101101058/mod01lec35.mp4">L35-Radial Turbines: Thermodynamics and Aerodynamics</option>
      
      <option  value="101101058/mod01lec36.mp4">L36-Tutorial 6 : Radial Turbines</option>
      
      <option  value="101101058/mod01lec37.mp4">L37-Radial Turbine Characteristics and Design of Radial Turbines</option>
      
      <option  value="101101058/mod01lec38.mp4">L38-CFD for Turbomachinery: Grid Generation, Boundary Conditions for Flow Analysis</option>
      
      <option  value="101101058/mod01lec39.mp4">L39-CFD for Turbomachinery: Flow Track and Inter-spool Duct Design using CFD</option>
      
      <option  value="101101058/mod01lec40.mp4">L40-CFD for Turbomachinery: 2D and 3D Blade Generation and Analysis Using CFD</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101104005</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Aero elasticity </strong></td>
	<td><strong>Prof. C. Venkatesan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec01.mp4">Lecture-01-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec02.mp4">Lecture-02-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec03.mp4">Lecture-03-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec04.mp4">Lecture-04-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec05.mp4">Lecture-05-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec06.mp4">Lecture-06-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec07.mp4">Lecture-07-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec08.mp4">Lecture-08-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec09.mp4">Lecture-09-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec10.mp4">Lecture-10-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec11.mp4">Lecture-11-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec12.mp4">Lecture-12-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec13.mp4">Lecture-13-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec14.mp4">Lecture-14-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec15.mp4">Lecture-15-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec16.mp4">Lecture-16-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec17.mp4">Lecture-17-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec18.mp4">Lecture-18-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec19.mp4">Lecture-19-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec20.mp4">Lecture-20-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec21.mp4">Lecture-21-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec22.mp4">Lecture-22-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec23.mp4">Lecture-23-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec24.mp4">Lecture-24-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec25.mp4">Lecture-25-Aero elasticity</option>
<option  value="short/NPTEL/NPTEL Index/101104005/mod01lec26.mp4">Lecture-26-Aero elasticity</option>

  </select></td>
		
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101103003</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Hypersonic Aerodynamics</strong></td>
	<td><strong>Dr. N. Sahoo , Dr. Vinayak Kulkarni</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
	
	<option  value="short/NPTEL/web courses/101103003/module1/index.html">Characteristics of Hypersonic Atmosphere</option>
      
      <option  value="short/NPTEL/web courses/101103003/module2/lec2/1.html">Mass Conservation Equation</option>
      
      <option  value="short/NPTEL/web courses/101103003/module2/lec3/1.html">Linear Momentum Conservation Equation I</option>
      
      <option  value="short/NPTEL/web courses/101103003/module2/lec4/1.html">Linear Momentum Conservation Equation II</option>
      
      <option  value="short/NPTEL/web courses/101103003/module2/lec5/1.html">Energy Conservation Equation</option>
      
      <option  value="short/NPTEL/web courses/101103003/module2/lec6/1.html">Species Conservation Equation</option>
      
      <option  value="short/NPTEL/web courses/101103003/module3/lec7/1.html">Hypersonic flow relations I</option>
      
      <option  value="short/NPTEL/web courses/101103003/module3/lec8/1.html">Hypersonic flow relations II</option>
      
      <option  value="short/NPTEL/web courses/101103003/module3/lec9/1.html">Local Surface Inclination technique (Newtonian Technique)</option>
      
      <option  value="short/NPTEL/web courses/101103003/module3/lec10/1.html">Local Surface Inclination techniques (Modified Newtonian Technique)</option>
      
      <option  value="short/NPTEL/web courses/101103003/module3/lec11/1.html">Tangent wedge and tangent cone methods</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec12/1.html">Hypersonic Mach number independence principle I</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec13/1.html">Hypersonic Mach number independence principle II</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec14/1.html">The Hypersonic Small Disturbance Theory I</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec15/1.html">The Hypersonic Small Disturbance Theory II</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec16/1.html">The Hypersonic Equivalence Principles</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec17/1.html">Blast Wave Theory I</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec18/1.html">Blast Wave Theory II</option>
      
      <option  value="short/NPTEL/web courses/101103003/module4/lec19/1.html">Thin Shock Layer Theory</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec20/1.html">Hypersonic boundary equation</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec21/1.html">Non-dimensionalisation of governing equations</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec22/1.html">Order of magnitude estimate</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec23/1.html">Boundary layer equations</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec24/1.html">Similarity solution for boundary layer equation I</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec25/1.html">Similarity solution for boundary layer equation II</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec26/1.html">Similarity solution of boundary layer equation</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec27/1.html">Hypersonic flow over flat plate</option>
      
      <option  value="short/NPTEL/web courses/101103003/module5/lec28/1.html">Stagnation point flow field</option>
      
      <option  value="short/NPTEL/web courses/101103003/module6/lec29/1.html">Hypersonic Viscous Interaction I</option>
      
      <option  value="short/NPTEL/web courses/101103003/module6/lec30/1.html">Hypersonic Viscous Interaction II</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec31/1.html">Hypersonic wind tunnel</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec32/1.html">Hypersonic wind tunnel and its calibration</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec33/1.html">Hypersonic impulse facilities</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec34/1.html">Shock Tunnel and its variants</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec35/1.html">Piston based shock Tunnels</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec36/1.html">Other hypersonic test facilities</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec37/1.html">Heat transfer rate measurement</option>
      
      <option  value="short/NPTEL/web courses/101103003/module7/lec38/1.html">Force measurement</option>
      
      <option  value="short/NPTEL/web courses/101103003/module8/lec39/1.html">Hypersonic vehicle cooling strategies</option>
      
      <option  value="short/NPTEL/web courses/101103003/module8/lec40/1.html">Drag reduction methods</option>
      
      <option  value="short/NPTEL/web courses/101103003/module8/lec41/1.html">Hypersonic flight parameters and stability</option>
      
      <option  value="short/NPTEL/web courses/101103003/module9/lec42/1.html">Equilibrium flows</option>
      
      <option  value="short/NPTEL/web courses/101103003/module9/lec43/1.html">Special topics in hypersonics</option>
      
      <option  value="short/NPTEL/web courses/101103003/references/1.html">References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101103004</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Proteomics and Genomics	</strong></td>
	<td><strong>Dr. Vikash Kr. Dubey</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/101103004/module1/index.html">Basic Concepts</option>
      
      <option  value="short/NPTEL/web courses/101103004/module1/lec2/1.html">Review of Fluid Statics</option>
      
      <option  value="short/NPTEL/web courses/101103004/module2/lec1/1.html">Fundamental Aspects I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module2/lec2/1.html">Integral Form-Part I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module2/lec3/1.html">Integral Form-Part I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module2/lec4/1.html">Integral Form-Part I(ii)</option>

      
      <option  value="short/NPTEL/web courses/101103004/module2/lec5/1.html">Differential Form-Part I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module2/lec6/1.html">Differential Form-Part I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module2/lec7/1.html">Differential Form-Part I(ii)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec1/1.html">Fundamental Aspects II</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec2/1.html">Kinematic Description Of Fluid Flow</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec3/1.html">Stream Function And Velocity Potential</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec4/1.html">Basic Potential Flows � I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec5/1.html">Basic Potential Flows � I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec6/1.html">Superposition Of Potential Flows � I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec7/1.html">Superposition Of Potential Flows � I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/lec8/1.html">Superposition Of Potential Flows � Iii</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec1/1.html">Fundamental Aspects: Part � I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec2/1.html">Fundamental Aspects: Part � I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec3/1.html">Isentropic And Characteristics States</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec4/1.html">One-Dimensional Analysis</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec5/1.html">Two-Dimensional Analysis</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec6/1.html">Hypersonic Flow: Part � I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec7/1.html">Hypersonic Flow: Part � I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/lec8/1.html">Hypersonic Flow: Part � I(ii)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec1/1.html">Fundamental Aspects</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec2/1.html">Internal Flow � Part I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec3/1.html">Internal Flow � Part I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec4/1.html">Internal Flow � Part I(ii)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec5/1.html">Internal Flow � Part I(v)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec6/1.html">Internal Flow � Part V</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec7/1.html">External Flow � Part I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec8/1.html">External Flow � Part I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec9/1.html">External Flow � Part I(ii)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec10/1.html">External Flow � Part I(v)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/lec11/1.html">External Flow � Part V</option>
      
      <option  value="short/NPTEL/web courses/101103004/module6/lec1/1.html">Dimensionsl Analysis�I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module6/lec2/1.html">Dimensionsl Analysis-Ii</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/lec1/1.html">Incompressible Flow � Part I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/lec2/1.html">Incompressible Flow � Part I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/lec3/1.html">Incompressible Flow � Part Iii</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/lec4/1.html">Incompressible Flow � Part Iv</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/lec5/1.html">Compressible Flow � Part I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/lec6/1.html">Compressible Flow � Part I(i)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/lec7/1.html">Compressible Flow � Part I(ii)</option>
      
      <option  value="short/NPTEL/web courses/101103004/module8/lec1/1.html">Aerodynamics Test Facilities - Part I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module8/lec2/1.html">Aerodynamics Test Facilities - Part Ii</option>
      
      <option  value="short/NPTEL/web courses/101103004/module1/problems/1.html">Problem I</option>
      
      <option  value="short/NPTEL/web courses/101103004/module2/problems/1.html">Problem II</option>
      
      <option  value="short/NPTEL/web courses/101103004/module3/problems/1.html">Problem III</option>
      
      <option  value="short/NPTEL/web courses/101103004/module4/problems/1.html">Problem IV</option>
      
      <option  value="short/NPTEL/web courses/101103004/module5/problems/1.html">Problem V</option>
      
      <option  value="short/NPTEL/web courses/101103004/module6/problems/1.html">Problem VI</option>
      
      <option  value="short/NPTEL/web courses/101103004/module7/problems/1.html">Problem VII</option>
      
      <option  value="short/NPTEL/web courses/101103004/module8/problems/1.html">Problem VIII</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101104010</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Composite Materials and Structure	</strong></td>
	<td><strong>Dr. P.M. Mohite</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/web courses/101104010/lecture1/main.html"> Definition and Introduction                                                          </option>
<option  value="short/NPTEL/web courses/101104010/lecture2/2_1.htm"> Reinforcement: Materials and Forms                                                   </option>
<option  value="short/NPTEL/web courses/101104010/lecture3/3_1.htm"> Reinforcement: Materials                                                             </option>
<option  value="short/NPTEL/web courses/101104010/lecture4/4_1.htm"> Matrix Materials                                                                     </option>
<option  value="short/NPTEL/web courses/101104010/lecture5/5_1.htm"> Terminologies                                                                        </option>
<option  value="short/NPTEL/web courses/101104010/lecture6/6_1.htm"> Applications                                                                         </option>
<option  value="short/NPTEL/web courses/101104010/lecture7/7_1.htm"> Fabrication Processes                                                                </option>
<option  value="short/NPTEL/web courses/101104010/lecture8/8_1.htm">  Fabrication Processes                                                               </option>
<option  value="short/NPTEL/web courses/101104010/lecture9/9_1.htm"> Basic Concepts                                                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture10/10_1.htm"> Constitutive Relations: Generally Anisotropy to Orthotropy                           </option>
<option  value="short/NPTEL/web courses/101104010/lecture11/11_1.htm"> Constitutive Relations: Transverse Isotropy and Isotropy                             </option>
<option  value="short/NPTEL/web courses/101104010/lecture12/12_1.htm"> Constitutive Relations for Orthotropic Materials and Stress-Strain Transformations   </option>
<option  value="short/NPTEL/web courses/101104010/lecture13/13_1.htm"> Stiffness, Compliance Transformation and Hygro-thermo-elastic Constitutive Relation  </option>
<option  value="short/NPTEL/web courses/101104010/lecture14/14_1.htm"> 2-Dimensional Lamina Analysis                                                        </option>
<option  value="short/NPTEL/web courses/101104010/lecture15/15_1.htm"> Lamina Engineering Constants                                                         </option>
<option  value="short/NPTEL/web courses/101104010/lecture16/16_1.htm"> Introduction to Classical Plate Theory                                               </option>
<option  value="short/NPTEL/web courses/101104010/lecture17/17_1.htm"> Laminate Constitutive Relations                                                      </option>
<option  value="short/NPTEL/web courses/101104010/lecture18/18_1.htm"> Laminate Engineering Constants                                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture19/19_1.htm"> Hygro -thermal Laminate Theory                                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture20/20_1.htm"> Damage Mechanisms in Unidirectional Composites                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture21/21_1.htm"> Macroscopic Failure Theories                                                         </option>
<option  value="short/NPTEL/web courses/101104010/lecture22/22_1.htm">  Macroscopic Failure Theories                                                        </option>
<option  value="short/NPTEL/web courses/101104010/lecture23/23_1.htm">   Macroscopic Failure Theories                                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture24/24_1.htm"> Tensile Fibre Mode Compressive Fibre Mode                                            </option>
<option  value="short/NPTEL/web courses/101104010/lecture25/25_1.htm"> Strength of Materials Approach                                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture26/26_1.htm"> Concepts of Equivalent Homogeneity, Volumetric Averaging and Standard Mechanics      </option>
<option  value="short/NPTEL/web courses/101104010/lecture27/27_1.htm"> Hill's Concentration Factors Approach                                                </option>
<option  value="short/NPTEL/web courses/101104010/lecture28/28_1.htm"> Homogenization                                                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture29/29_1.htm"> Background of Concentric Cylinder Assemblage Model                                   </option>
<option  value="short/NPTEL/web courses/101104010/lecture30/30_1.htm"> CCA Model: Effective Axial Modulus and Poisson's Ratio                                   </option>
<option  value="short/NPTEL/web courses/101104010/lecture31/31_1.htm"> CCA Model: Effective Plane Strain Bulk Modulus                                       </option>
<option  value="short/NPTEL/web courses/101104010/lecture32/32_1.htm"> CCA Model: Effective Axial Shear Modulus                                             </option>
<option  value="short/NPTEL/web courses/101104010/lecture33/33_1.htm"> Three Phase CCA Model: Effective Transverse Shear Modulus                            </option>
<option  value="short/NPTEL/web courses/101104010/lecture34/34_1.htm"> Self Consistent, Mori -Tanaka and Halpin -Tsai Models                                </option>
<option  value="short/NPTEL/web courses/101104010/lecture35/35_1.htm"> Background to Mechanical Testing                                                     </option>
<option  value="short/NPTEL/web courses/101104010/lecture36/36_1.htm"> Quality Assessment and Physical Properties                                           </option>
<option  value="short/NPTEL/web courses/101104010/lecture37/37_1.htm"> Tensile and Compressive Testing                                                      </option>
<option  value="short/NPTEL/web courses/101104010/lecture38/38_1.htm"> Shear Testing                                                                        </option>
<option  value="short/NPTEL/web courses/101104010/lecture39/39_1.htm"> Shear and Flexural Testing           </option>
<option  value="short/NPTEL/web courses/101104010/lecture40/40_1.htm">Design Considerations in Composites </option>

</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101104013</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Foundation of Scientific Computing</strong></td>
	<td><strong>Prof. Tapan K. Sengupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option value="101104013/mod01lec01.mp4">Lecture-01</option>
<option value="101104013/mod01lec02.mp4">Lecture-02</option>
<option value="101104013/mod01lec03.mp4">Lecture-03</option>
<option value="101104013/mod01lec04.mp4">Lecture-04</option>
<option value="101104013/mod01lec05.mp4">Lecture-05</option>
<option value="101104013/mod01lec06.mp4">Lecture-06</option>
<option value="101104013/mod01lec07.mp4">Lecture-07</option>
<option value="101104013/mod01lec08.mp4">Lecture-08</option>
<option value="101104013/mod01lec09.mp4">Lecture-09</option>
<option value="101104013/mod01lec10.mp4">Lecture-10</option>
<option value="101104013/mod01lec11.mp4">Lecture-11</option>
<option value="101104013/mod01lec12.mp4">Lecture-12</option>
<option value="101104013/mod01lec13.mp4">Lecture-13</option>
<option value="101104013/mod01lec14.mp4">Lecture-14</option>
<option value="101104013/mod01lec15.mp4">Lecture-15</option>
<option value="101104013/mod01lec16.mp4">Lecture-16</option>
<option value="101104013/mod01lec17.mp4">Lecture-17</option>
<option value="101104013/mod01lec18.mp4">Lecture-18</option>
<option value="101104013/mod01lec19.mp4">Lecture-19</option>
<option value="101104013/mod01lec20.mp4">Lecture-20</option>
<option value="101104013/mod01lec21.mp4">Lecture-21</option>
<option value="101104013/mod01lec22.mp4">Lecture-22</option>
<option value="101104013/mod01lec23.mp4">Lecture-23</option>
<option value="101104013/mod01lec24.mp4">Lecture-24</option>
<option value="101104013/mod01lec25.mp4">Lecture-25</option>
<option value="101104013/mod01lec26.mp4">Lecture-26</option>
<option value="101104013/mod01lec27.mp4">Lecture-27</option>
<option value="101104013/mod01lec28.mp4">Lecture-28</option>
<option value="101104013/mod01lec29.mp4">Lecture-29</option>
<option value="101104013/mod01lec30.mp4">Lecture-30</option>
<option value="101104013/mod01lec31.mp4">Lecture-31</option>
<option value="101104013/mod01lec32.mp4">Lecture-32</option>
<option value="101104013/mod01lec33.mp4">Lecture-33</option>
<option value="101104013/mod01lec34.mp4">Lecture-34</option>
<option value="101104013/mod01lec35.mp4">Lecture-35</option>
<option value="101104013/mod01lec36.mp4">Lecture-36</option>
<option value="101104013/mod01lec37.mp4">Lecture-37</option>
<option value="101104013/mod01lec38.mp4">Lecture-38</option>
<option value="101104013/mod01lec39.mp4">Lecture-39</option>
<option value="101104013/mod01lec40.mp4">Lecture-40</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101104014</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Fundamentals of Combustion</strong></td>
	<td><strong>Dr. D.P. Mishra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture1/main.htm">Introduction</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture2/2_1.htm">What is Fuel and Oxidizer?</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture3/3_1.htm">Fuels</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture4/4_1.htm">Characterization of Solid Fuels</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture5/5_1.htm">Scope of Combustion</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture7/7_1.htm">Thermodynamic Laws</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture8/8_1.htm">Stoichiometry</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture9/9_1.htm">Heat of Combustion</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture10/10_1.htm">Adiabatic Flame Temperature</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture11/11_1.htm">Chemical Equilibrium</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture13/13_1.htm">Transport properties for gas mixture</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture14/14_1.htm">Momentum conservation equation</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture15/15_1.htm">Energy transport equation</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture16/16_1.htm">Boundary layer solutions</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture17/17_1.htm">Transport in Turbulent Flow</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture19/19_1.htm">Law of Mass Action</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture20/20_1.htm">Order reaction</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture21/21_1.htm">Chain Branching Explosion</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture23/23_1.htm">Structure of 1D Premixed Flame</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture24/24_1.htm">Tube Method</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture25/25_1.htm">Effect of Oxygen Concentration on SL</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture26/26_1.htm">Flammability Limits </option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture27/27_1.htm">Flame Stabilization </option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture29/29_1.htm">Theoretical Analysis</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture30/30_1.htm">Mechanism of Soot Formation </option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture31/31_1.htm">Overall mass conservation</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture32/32_1.htm">The Temperature Profile</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture33/33_1.htm">Spray Combustion Model</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture34/34_1.htm">Solid Fuel Combustion</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture36/36_1.htm">Atmosphere </option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture37/37_1.htm">Major Sources of CO Emission </option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture38/38_1.htm">Species Emission and Its Corrected Value</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture39/39_1.htm">Emission and Its Control</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture40/40_1.htm">Combustion Modification Methods</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture6/6_a1.htm">Introduction Thermodynamics Combustion</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture12/12_1a.htm">Introduction to Physics Combustion</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture18/18_1a.htm">Introduction to Chemistry Combustion</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture22/22_1a.htm">Introduction to Premixed Flame</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture28/28_1a.htm"> Introduction to Diffusion Flame</option>
      
      <option  value="short/NPTEL/web courses/101104014/lecture35/35_1a.htm">Introduction  to Combustion and Environment</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101104015</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Instability and Transition of Fluid Flows</strong></td>
	<td><strong>Prof. Tapan K. Sengupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
<option value="101104015/mod01lec01.mp4">Lecture-01</option>
<option value="101104015/mod01lec02.mp4">Lecture-02</option>
<option value="101104015/mod01lec03.mp4">Lecture-03</option>
<option value="101104015/mod01lec04.mp4">Lecture-04</option>
<option value="101104015/mod01lec05.mp4">Lecture-05</option>
<option value="101104015/mod01lec06.mp4">Lecture-06</option>
<option value="101104015/mod01lec07.mp4">Lecture-07</option>
<option value="101104015/mod01lec08.mp4">Lecture-08</option>
<option value="101104015/mod01lec09.mp4">Lecture-09</option>
<option value="101104015/mod01lec10.mp4">Lecture-10</option>
<option value="101104015/mod01lec11.mp4">Lecture-11</option>
<option value="101104015/mod01lec12.mp4">Lecture-12</option>
<option value="101104015/mod01lec13.mp4">Lecture-13</option>
<option value="101104015/mod01lec14.mp4">Lecture-14</option>
<option value="101104015/mod01lec15.mp4">Lecture-15</option>
<option value="101104015/mod01lec16.mp4">Lecture-16</option>
<option value="101104015/mod01lec17.mp4">Lecture-17</option>
<option value="101104015/mod01lec18.mp4">Lecture-18</option>
<option value="101104015/mod01lec19.mp4">Lecture-19</option>
<option value="101104015/mod01lec20.mp4">Lecture-20</option>
<option value="101104015/mod01lec21.mp4">Lecture-21</option>
<option value="101104015/mod01lec22.mp4">Lecture-22</option>
<option value="101104015/mod01lec23.mp4">Lecture-23</option>
<option value="101104015/mod01lec24.mp4">Lecture-24</option>
<option value="101104015/mod01lec25.mp4">Lecture-25</option>
<option value="101104015/mod01lec26.mp4">Lecture-26</option>
<option value="101104015/mod01lec27.mp4">Lecture-27</option>
<option value="101104015/mod01lec28.mp4">Lecture-28</option>
<option value="101104015/mod01lec29.mp4">Lecture-29</option>
<option value="101104015/mod01lec30.mp4">Lecture-30</option>
<option value="101104015/mod01lec31.mp4">Lecture-31</option>
<option value="101104015/mod01lec32.mp4">Lecture-32</option>
<option value="101104015/mod01lec33.mp4">Lecture-33</option>
<option value="101104015/mod01lec34.mp4">Lecture-34</option>
<option value="101104015/mod01lec35.mp4">Lecture-35</option>
<option value="101104015/mod01lec36.mp4">Lecture-36</option>
<option value="101104015/mod01lec37.mp4">Lecture-37</option>
<option value="101104015/mod01lec38.mp4">Lecture-38</option>
<option value="101104015/mod01lec39.mp4">Lecture-39</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101104017</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Introduction to Helicopter Aerodynamics and Dynamics</strong></td>
	<td><strong>Prof. A.R. Manjunath,Prof. C. Venkatesan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
    <option value="101104017/mod01lec01.mp4">Lecture-01</option>
<option value="101104017/mod01lec02.mp4">Lecture-02</option>
<option value="101104017/mod01lec03.mp4">Lecture-03</option>
<option value="101104017/mod01lec04.mp4">Lecture-04</option>
<option value="101104017/mod01lec05.mp4">Lecture-05</option>
<option value="101104017/mod01lec06.mp4">Lecture-06</option>
<option value="101104017/mod01lec07.mp4">Lecture-07</option>
<option value="101104017/mod01lec08.mp4">Lecture-08</option>
<option value="101104017/mod01lec09.mp4">Lecture-09</option>
<option value="101104017/mod01lec10.mp4">Lecture-10</option>
<option value="101104017/mod01lec11.mp4">Lecture-11</option>
<option value="101104017/mod01lec12.mp4">Lecture-12</option>
<option value="101104017/mod01lec13.mp4">Lecture-13</option>
<option value="101104017/mod01lec14.mp4">Lecture-14</option>
<option value="101104017/mod01lec15.mp4">Lecture-15</option>
<option value="101104017/mod01lec16.mp4">Lecture-16</option>
<option value="101104017/mod01lec17.mp4">Lecture-17</option>
<option value="101104017/mod01lec18.mp4">Lecture-18</option>
<option value="101104017/mod01lec19.mp4">Lecture-19</option>
<option value="101104017/mod01lec20.mp4">Lecture-20</option>
<option value="101104017/mod01lec21.mp4">Lecture-21</option>
<option value="101104017/mod01lec22.mp4">Lecture-22</option>
<option value="101104017/mod01lec23.mp4">Lecture-23</option>
<option value="101104017/mod01lec24.mp4">Lecture-24</option>
<option value="101104017/mod01lec25.mp4">Lecture-25</option>
<option value="101104017/mod01lec26.mp4">Lecture-26</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101105023</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>High Speed Aero Dynamics</strong></td>
	<td><strong>Dr. K.P. Sinhamahapatra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod1L1.pdf">Compressible Aerodynamics</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod1L2.pdf">Compressible Aerodynamics (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L3.pdf">One-dimensional gas dynamics</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L4.pdf"> One-dimensional gas dynamics (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L5.pdf"> One-dimensional gas dynamics  (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L6.pdf">One-dimensional gas dynamics    (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L7.pdf">One-dimensional gas dynamics      (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L8.pdf"> One-dimensional gas dynamics (Contd. )</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L9.pdf">One-dimensional gas  dynamics (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod2L10.pdf">One - dimensional gas dynamics (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod3L11.pdf">Waves in supersonic flow </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod3L12.pdf">Waves in supersonic  flow (Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod3L13.pdf">Waves in supersonic  flow  (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod3L14.pdf">Waves  in supersonic  flow  (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod3L15.pdf">Waves in supersonic flow  ( Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod3L16.pdf">Waves in supersonic flow ( Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod3L17.pdf">Waves in supersonic flow  (Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod4L18.pdf">Flow in ducts, (Nozzles and diffusers) and wind tunnels </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod4L19.pdf">Flow in ducts, (Nozzles and diffusers) and wind tunnels (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod4L20.pdf">Flow in ducts, (Nozzles and diffusers) and wind tunnels  (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod4L21.pdf">Flow in ducts, (Nozzles and diffusers) and wind tunnels   (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod4L22.pdf">Flow in ducts, (Nozzles and diffusers) and wind tunnels ( Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod5L23.pdf">Multi-dimensional problems</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod5L24.pdf"> Multi-dimensional problems (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod5L25.pdf">Multi-dimensional problems  (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod6L26.pdf">Bodies of Revolution � Slender Body Theory </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod6L27.pdf">Bodies of Revolution � Slender Body Theory (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod6L28.pdf">Bodies of Revolution � Slender Body Theory  (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod6L29.pdf">Bodies of Revolution � Slender Body  Theory (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod6L30.pdf">Bodies of Revolution � Slender Body Theory   (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod6L31.pdf">Bodies of Revolution �  Slender Body Theory  (Contd.)</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod7L32.pdf">Similarity Rules</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod7L33.pdf"> Similarity Rules (Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod7L34.pdf">Similarity Rules  (Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod8L35.pdf"> Transonic Flow</option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod8L36.pdf">Transonic Flow (Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod9L37.pdf">Method of characteristics </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod9L38.pdf">Method of characteristics (Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod9L39.pdf">Method of characteristics   (Contd.) </option>
      
      <option  value="short/NPTEL/web courses/101105023/Mod9L40.pdf">Method of characteristics ( Contd.) </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101105024</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>High Speed Aero Dynamics</strong></td>
	<td><strong>Dr. K.P. Sinhamahapatra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
     <option value="101105024/mod01lec01.mp4">Lecture-01</option>
<option value="101105024/mod01lec02.mp4">Lecture-02</option>
<option value="101105024/mod01lec03.mp4">Lecture-03</option>
<option value="101105024/mod01lec04.mp4">Lecture-04</option>
<option value="101105024/mod01lec05.mp4">Lecture-05</option>
<option value="101105024/mod01lec06.mp4">Lecture-06</option>
<option value="101105024/mod01lec07.mp4">Lecture-07</option>
<option value="101105024/mod01lec08.mp4">Lecture-08</option>
<option value="101105024/mod01lec09.mp4">Lecture-09</option>
<option value="101105024/mod01lec10.mp4">Lecture-10</option>
<option value="101105024/mod01lec11.mp4">Lecture-11</option>
<option value="101105024/mod01lec12.mp4">Lecture-12</option>
<option value="101105024/mod01lec13.mp4">Lecture-13</option>
<option value="101105024/mod01lec14.mp4">Lecture-14</option>
<option value="101105024/mod01lec15.mp4">Lecture-15</option>
<option value="101105024/mod01lec16.mp4">Lecture-16</option>
<option value="101105024/mod01lec17.mp4">Lecture-17</option>
<option value="101105024/mod01lec18.mp4">Lecture-18</option>
<option value="101105024/mod01lec19.mp4">Lecture-19</option>
<option value="101105024/mod01lec20.mp4">Lecture-20</option>
<option value="101105024/mod01lec21.mp4">Lecture-21</option>
<option value="101105024/mod01lec22.mp4">Lecture-22</option>
<option value="101105024/mod01lec23.mp4">Lecture-23</option>
<option value="101105024/mod01lec24.mp4">Lecture-24</option>
<option value="101105024/mod01lec25.mp4">Lecture-25</option>
<option value="101105024/mod01lec26.mp4">Lecture-26</option>
<option value="101105024/mod01lec27.mp4">Lecture-27</option>
<option value="101105024/mod01lec28.mp4">Lecture-28</option>
<option value="101105024/mod01lec29.mp4">Lecture-29</option>
<option value="101105024/mod01lec30.mp4">Lecture-30</option>
<option value="101105024/mod01lec31.mp4">Lecture-31</option>
<option value="101105024/mod01lec32.mp4">Lecture-32</option>
<option value="101105024/mod01lec33.mp4">Lecture-33</option>
<option value="101105024/mod01lec34.mp4">Lecture-34</option>
<option value="101105024/mod01lec35.mp4">Lecture-35</option>
<option value="101105024/mod01lec36.mp4">Lecture-36</option>
<option value="101105024/mod01lec37.mp4">Lecture-37</option>
<option value="101105024/mod01lec38.mp4">Lecture-38</option>
<option value="101105024/mod01lec39.mp4">Lecture-39</option>
<option value="101105024/mod01lec40.mp4">Lecture-40</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101105030</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Space Flight Mechanics</strong></td>
	<td><strong>Dr. Manoranjan Sinha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option value="101105030/mod01lec01.mp4">Lecture-01</option>
<option value="101105030/mod01lec02.mp4">Lecture-02</option>
<option value="101105030/mod01lec03.mp4">Lecture-03</option>
<option value="101105030/mod01lec04.mp4">Lecture-04</option>
<option value="101105030/mod01lec05.mp4">Lecture-05</option>
<option value="101105030/mod01lec06.mp4">Lecture-06</option>
<option value="101105030/mod01lec07.mp4">Lecture-07</option>
<option value="101105030/mod01lec08.mp4">Lecture-08</option>
<option value="101105030/mod01lec09.mp4">Lecture-09</option>
<option value="101105030/mod01lec10.mp4">Lecture-10</option>
<option value="101105030/mod01lec11.mp4">Lecture-11</option>
<option value="101105030/mod01lec12.mp4">Lecture-12</option>
<option value="101105030/mod01lec13.mp4">Lecture-13</option>
<option value="101105030/mod01lec14.mp4">Lecture-14</option>
<option value="101105030/mod01lec15.mp4">Lecture-15</option>
<option value="101105030/mod01lec16.mp4">Lecture-16</option>
<option value="101105030/mod01lec17.mp4">Lecture-17</option>
<option value="101105030/mod01lec18.mp4">Lecture-18</option>
<option value="101105030/mod01lec19.mp4">Lecture-19</option>
<option value="101105030/mod01lec20.mp4">Lecture-20</option>
<option value="101105030/mod01lec21.mp4">Lecture-21</option>
<option value="101105030/mod01lec22.mp4">Lecture-22</option>
<option value="101105030/mod01lec23.mp4">Lecture-23</option>
<option value="101105030/mod01lec24.mp4">Lecture-24</option>
<option value="101105030/mod01lec25.mp4">Lecture-25</option>
<option value="101105030/mod01lec26.mp4">Lecture-26</option>
<option value="101105030/mod01lec27.mp4">Lecture-27</option>
<option value="101105030/mod01lec28.mp4">Lecture-28</option>
<option value="101105030/mod01lec29.mp4">Lecture-29</option>
<option value="101105030/mod01lec30.mp4">Lecture-30</option>
<option value="101105030/mod01lec31.mp4">Lecture-31</option>
<option value="101105030/mod01lec32.mp4">Lecture-32</option>
<option value="101105030/mod01lec33.mp4">Lecture-33</option>
<option value="101105030/mod01lec34.mp4">Lecture-34</option>
<option value="101105030/mod01lec35.mp4">Lecture-35</option>
<option value="101105030/mod01lec36.mp4">Lecture-36</option>
<option value="101105030/mod01lec37.mp4">Lecture-37</option>
<option value="101105030/mod01lec38.mp4">Lecture-38</option>
<option value="101105030/mod01lec39.mp4">Lecture-39</option>
<option value="101105030/mod01lec40.mp4">Lecture-40</option>
<option value="101105030/mod01lec41.mp4">Lecture-41</option>
<option value="101105030/mod01lec42.mp4">Lecture-42</option>
<option value="101105030/mod01lec43.mp4">Lecture-43</option>
<option value="101105030/mod01lec44.mp4">Lecture-44</option>
<option value="101105030/mod01lec45.mp4">Lecture-45</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101105059</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Introduction to Aerodynamics</strong></td>
	<td><strong>Dr. K.P. Sinhamahapatra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
    <option value="101105059/mod01lec01.mp4">Aircraft and Aerodynamic Forces and Moments</option>
<option value="101105059/mod01lec02.mp4">Aircraft and Aerodynamic Forces and Moments (Contd.)</option>
<option value="101105059/mod01lec03.mp4">Fluids and Forces in Fluids </option>
<option value="101105059/mod01lec04.mp4">Fluids and Forces in Fluids (Contd.)</option>
<option value="101105059/mod01lec05.mp4">Forces in Fluids </option>
<option value="101105059/mod01lec06.mp4">Forces in Fluids (Contd.)</option>
<option value="101105059/mod01lec07.mp4">Kinematics of fluid motion</option>
<option value="101105059/mod01lec08.mp4">Kinematics of fluid motion (Contd.)</option>
<option value="101105059/mod01lec09.mp4">Kinematics of fluid motion (Contd. )</option>
<option value="101105059/mod01lec10.mp4">Kinematics of fluid motion ( Contd.)</option>
<option value="101105059/mod01lec11.mp4">Kinematics of fluid motion - Velocity with specified extension and vorticity</option>
<option value="101105059/mod01lec12.mp4">Kinematics of fluid motion - Velocity with specified extension and vorticity (Contd.)</option>
<option value="101105059/mod01lec13.mp4">Kinematics of fluid motion - Vorticity Distribution</option>
<option value="101105059/mod01lec14.mp4">Kinematics of fluid motion - Velocity without expansion and vorticity</option>
<option value="101105059/mod01lec15.mp4">Irrotational Solenoidal Flow in Multiply Connected region</option>
<option value="101105059/mod01lec16.mp4">Irrotational Solenoidal Flow in Multiply Connected region (Contd.)</option>
<option value="101105059/mod01lec17.mp4">Equations of Fluid Motion - Navier - Stokes Equation</option>
<option value="101105059/mod01lec18.mp4">Equations of Fluid Motion - Navier - Stokes Equation (Contd.)</option>
<option value="101105059/mod01lec19.mp4">Equations of Fluid Motion - Navier - Stokes Equation (Contd. )</option>
<option value="101105059/mod01lec20.mp4">Conservation of Energy and Energy Equation</option>
<option value="101105059/mod01lec21.mp4">Equations of Motions</option>
<option value="101105059/mod01lec22.mp4">Equations of Motion (Contd.)</option>
<option value="101105059/mod01lec23.mp4">Exact Solution for Simple Problems</option>
<option value="101105059/mod01lec24.mp4">Exact Solution for Simple Problems (Contd.)</option>
<option value="101105059/mod01lec25.mp4">Non-dimensional Form of the Equations and Possible Simplifications</option>
<option value="101105059/mod01lec26.mp4">High Reynolds Number Approximation</option>
<option value="101105059/mod01lec27.mp4">Conditions fior Incompressibility</option>
<option value="101105059/mod01lec28.mp4">Potential Flow</option>
<option value="101105059/mod01lec29.mp4">Potential Flow - Combination of Basic Solutions</option>
<option value="101105059/mod01lec30.mp4">Potential Flow - Combination of Basic Solutions (Contd.)</option>
<option value="101105059/mod01lec31.mp4">Potential Flow - Combination of Basic Solutions (Contd. )</option>
<option value="101105059/mod01lec32.mp4">Potential Flow - Combination of Basic Solutions (Contd. ) - Lifting Cylinder</option>
<option value="101105059/mod01lec33.mp4">Conformal Transformation</option>
<option value="101105059/mod01lec34.mp4">Conformal Transformation (Contd.)</option>
<option value="101105059/mod01lec35.mp4">Zhukovsky Transformation</option>
<option value="101105059/mod01lec36.mp4">Zhukovsky Transformation (Contd.)</option>
<option value="101105059/mod01lec37.mp4">Zhukovsky Transformation - Applications</option>
<option value="101105059/mod01lec38.mp4">Zhukovsky Transformation - Applications (Contd.)</option>
<option value="101105059/mod01lec39.mp4">Zhukovsky Transformation - Applications (Contd. )</option>
<option value="101105059/mod01lec40.mp4">Transformation</option>
<option value="101105059/mod01lec41.mp4">Transformation (Contd.)</option>
<option value="101105059/mod01lec42.mp4">Boundary - Layer Theory</option>
<option value="101105059/mod01lec43.mp4">Boundary - Layer Theory (Contd.)</option>
<option value="101105059/mod01lec44.mp4">Boundary - Layer Theory (Contd. )</option>
<option value="101105059/mod01lec45.mp4">Boundary - Layer Theory ( Contd)</option>
<option value="101105059/mod01lec46.mp4">Boundary - Layer Theory ( Contd. )</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
  <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101106031</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Acoustic Instabilities in Aerospace Propulsion</strong></td>
	<td><strong>Prof. R.I. Sujith</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec01.mp4"> Lecture 1 : Introduction to Thermoacoustic Instabilities                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec02.mp4"> Lecture 2 :  Part I : Introduction to Acoustics Part II : Conservation Equations         </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec03.mp4"> Lecture 3 : Wave Equation and its Solution in Time Domain                                </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec04.mp4"> Lecture 4 : Part I : Harmonic Waves Part II : Acoustic Energy Corollory                  </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec05.mp4"> Lecture 5 : Standing Waves                                                               </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec06.mp4"> Lecture 6 : Standing Waves - 2                                                           </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec07.mp4"> Lecture 7 : Power Flow and Acoustic Admittance                                           </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec08.mp4"> Lecture 8 : Impedance Tube Technique                                                     </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec09.mp4"> Lecture 9 : Admittance and Standing Waves                                                </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec10.mp4"> Lecture 10 : Admittance,Stability and Attenuation                                        </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec11.mp4"> Lecture 11 : Attenuation : Continued  Sound Propagation Through Inhomogeneous Media - 1  </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec12.mp4"> Lecture 12 : Sound Propagation Through Inhomogeneous Media - 2                           </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec13.mp4"> Lecture 13 : Sound Propagation Through Inhomogeneous Media - 3                           </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec14.mp4"> Lecture 14 : Multidimensional Acoustic Fields - 1                                        </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec15.mp4"> Lecture 15 : Multidimensional Acoustic Fields - 2                                        </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec16.mp4"> Lecture 16 : Interaction between Sound and Combustion                                    </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec17.mp4"> Lecture 17 : Reference Books     Derivation of Rayleigh Criteria                         </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec18.mp4"> Lecture 18 : Effect of Heat release on the Acoustic Field                                </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec19.mp4"> Lecture 19 : Modal Analysis of Thermoacoustic Instability - 1                            </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec20.mp4"> Lecture 20 : Modal Analysis of Thermoacoustic Instability - 2                            </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec21.mp4"> Lecture 21 : Active Control of Thermoacoustic Instability                                </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec22.mp4"> Lecture 22 : Toy model for a Rijke tube in Time Domain                                   </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec23.mp4"> Lecture 23 : Galerkin Technique for Thermoacoustics                                      </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec24.mp4"> Lecture 24 : Evolution Equation for Thermoacoustics                                      </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec25.mp4"> Lecture 25 : Non linear analysis of Thermoacoustic Instability </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec26.mp4"> Lecture 26 : Non-normality, Transient Growth and Triggering Instability – 1</option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec27.mp4"> Lecture 27 : Non-normality, Transient Growth and Triggering Instability - 2              </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec28.mp4"> Lecture 28 : Non-normality, Transient Growth and Triggering Instability - 3              </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec29.mp4"> Lecture 29 : Bifurcations                                                                </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec30.mp4"> Lecture 30 : Premixed Flame Acoustic Interaction - 1                                     </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec31.mp4"> Lecture 31 : Premixed Flame Acoustic Interaction - 2                                     </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec32.mp4"> Lecture 32 : Combustion instability due to Equivalence Ratio Fluctuation                 </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec33.mp4"> Lecture 33 : Role of Hydrodynamic Instabilities - 1                                      </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec34.mp4"> Lecture 34 : Role of Hydrodynamic Instabilities - 2                                      </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec35.mp4"> Lecture 35 : Role of Hydrodynamic Instabilities - 3                                      </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec36.mp4"> Lecture 36 : Active Control of Thermoacoustic Instability Revisited                      </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec37.mp4"> Lecture 37 : Solid Propellant Combustion Instability - 1                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec38.mp4"> Lecture 38 : Solid Propellant Combustion Instability - 2                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec39.mp4"> Lecture 39 : Response of a Diffusion Flame to Acoustic Oscillations -1                   </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec40.mp4"> Lecture 40 : Response of a Diffusion Flame to Acoustic Oscillations - 2                  </option>
<option  value="short/NPTEL/NPTEL Index/101106031/mod01lec41.mp4"> Lecture 41 : Response of a Diffusion Flame to Acoustic Oscillations – 3</option>

  </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101106033</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Aerospace Propulsion</strong></td>
	<td><strong>Dr. P.A. Ramakrishna</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec01.mp4"> Introduction                                  </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec02.mp4"> Air breathing Engines � Turbojet I            </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec03.mp4"> Air breathing Engines � Turbojet II           </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec04.mp4"> Air breathing Engines � Turboprop & Turbofan  </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec05.mp4"> Air breathing Engines � Ramjet & Scramjet     </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec06.mp4"> Non-air breathing Engines I                   </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec07.mp4"> Non-air breathing Engines II                  </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec08.mp4"> General Performance Parameters I              </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec09.mp4"> General Performance Parameters II             </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec10.mp4"> Cycle Analysis � Ramjet                       </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec11.mp4"> Cycle Analysis � Turbojet I                   </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec12.mp4"> Cycle Analysis � Turbojet II                  </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec13.mp4"> Cycle Analysis � Turbojet III                 </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec14.mp4"> Cycle Analysis � Turbojet IV                  </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec15.mp4"> Cycle Analysis � Turbojet V                   </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec16.mp4"> Cycle Analysis � Turbojet VI                  </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec17.mp4"> Cycle Analysis � Turbofan                     </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec18.mp4"> Rocket Nozzles � 1D Analysis I                </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec19.mp4"> Rocket Nozzles � 1D Analysis II               </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec20.mp4"> Rocket Nozzles � 1D Analysis III              </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec21.mp4"> Rocket Nozzles � Real Effects I               </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec22.mp4"> Rocket Nozzles � Real Effects II              </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec23.mp4"> Rocket Nozzles � Thrust Vectoring             </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec24.mp4"> Solid Rockets � Propellants                   </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec25.mp4"> Solid Rockets � Burn rate                     </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec26.mp4"> Solid Rockets � Performance                   </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec27.mp4"> Solid Rockets � Grain                         </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec28.mp4"> Solid Rockets � Ignition, Quenching           </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec29.mp4"> Solid Rockets � Igniter, Depressurization     </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec30.mp4"> Propellant Combustion � Combustion Modelling  </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec31.mp4"> Liquid Rocket � Propellants                   </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec32.mp4"> Liquid Rocket � Nozzle Cooling I              </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec33.mp4"> Liquid Rocket � Nozzle Cooling II             </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec34.mp4"> Liquid Rocket � Nozzle Cooling III            </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec35.mp4"> Liquid Rocket � Pressure fed system           </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec36.mp4"> Liquid Rocket � Pump fed system               </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec37.mp4"> Liquid Rocket � Pumps                         </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec38.mp4"> Liquid Rocket � Fuel Injection                </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec39.mp4"> Hybrid Rocket � Basics                        </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec40.mp4"> Hybrid Rocket Performance                     </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec41.mp4"> Hybrid Rocket Combustion                      </option>
<option  value="short/NPTEL/NPTEL Index/101106033/mod01lec42.mp4"> Chemical Equilibrium Analyser � SP 273   </option>


  </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101106035</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Airplane design (Aerodynamic) </strong></td>
	<td><strong>Prof. E.G. Tulapurkara</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/web courses/101106035/001_Chapter 1_L1_(01-10-2013).pdf         ">Introduction 1 - Lecture 1                                       </option>
<option  value="short/NPTEL/web courses/101106035/002_Chapter 1_L2_(01-10-2013).pdf         ">Introduction - 2 Lecture 2                                       </option>
<option  value="short/NPTEL/web courses/101106035/003_Chapter 1_L3_(04-10-2013).pdf         ">Introduction - 3 Lecture 3                                       </option>
<option  value="short/NPTEL/web courses/101106035/004_Chapter 1_References_(01-10-2013).pdf ">Chapter 1 - References                                           </option>
<option  value="short/NPTEL/web courses/101106035/005_Chapter 1_Exercises_(01-10-2013).pdf  ">Chapter 1 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/006_Chapter 2_L4_(1-10-2013).pdf          ">Data collection and preliminary three-view drawing - 1 Lecture 4 </option>
<option  value="short/NPTEL/web courses/101106035/007_Chapter 2_L5_(01-10-2013).pdf         ">Data collection and preliminary three-view drawing - 2 Lecture 5 </option>
<option  value="short/NPTEL/web courses/101106035/008_Chapter 2_Exercises_(01-10-2013).pdf  ">Chapter 2 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/009_Chapter 3_L6_(02-10-2013).pdf         ">Weight estimation - 1 Lecture 6                                  </option>
<option  value="short/NPTEL/web courses/101106035/010_Chapter 3_L7_(02-10-2013).pdf         ">Weight estimation - 2 Lecture 7                                  </option>
<option  value="short/NPTEL/web courses/101106035/011_Chapter 3_L8_(02-10-2013).pdf         ">Weight estimation - 3 Lecture 8                                  </option>
<option  value="short/NPTEL/web courses/101106035/012_Chapter 3_References_(02-10-2013).pdf ">Chapter 3 - References                                           </option>
<option  value="short/NPTEL/web courses/101106035/013_Chapter 3_Exercises_(02-10-2013).pdf  ">Chapter 3 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/014_Chapter 4_L9_(02-10-2013).pdf         ">Estimation of wing loading and thrust loading - 1 Lecture 9      </option>
<option  value="short/NPTEL/web courses/101106035/015_Chapter 4 _L10_(03-10-2013).pdf       ">Estimation of wing loading and thrust loading - 2 Lecture 10     </option>
<option  value="short/NPTEL/web courses/101106035/016_Chapter 4 _L11_(02-10-2013).pdf       ">Estimation of wing loading and thrust loading - 3 Lecture 11     </option>
<option  value="short/NPTEL/web courses/101106035/017_Chapter 4 _L12_(02-10-2013).pdf       ">Estimation of wing loading and thrust loading - 4 Lecture 12     </option>
<option  value="short/NPTEL/web courses/101106035/018_Chapter 4_L13_(2-10-2013).pdf         ">Estimation of wing loading and thrust loading - 5 Lecture 13     </option>
<option  value="short/NPTEL/web courses/101106035/019_Chapter 4_L14_(2-10-2013).pdf         ">Estimation of wing loading and thrust loading - 6 Lecture 14     </option>
<option  value="short/NPTEL/web courses/101106035/020_Chapter 4_L15_(2-10-2013).pdf         ">Estimation of wing loading and thrust loading - 7 Lecture 15     </option>
<option  value="short/NPTEL/web courses/101106035/021_Chapter 4_L16_(02-10-2013).pdf        ">Estimation of wing loading and thrust loading - 8 Lecture 16     </option>
<option  value="short/NPTEL/web courses/101106035/022_Chapter 4_L17_(02-10-2013).pdf        ">Estimation of wing loading and thrust loading - 9 Lecture 17     </option>
<option  value="short/NPTEL/web courses/101106035/023_Chapter 4_L18_(02-10-2013).pdf        ">Estimation of wing loading and thrust loading -10 Lecture 18     </option>
<option  value="short/NPTEL/web courses/101106035/024_Chapter 4_References_(02-10-2013).pdf ">Chapter 4 - References                                           </option>
<option  value="short/NPTEL/web courses/101106035/025_Chapter 4_Exercises_(02-10-2013).pdf  ">Chapter 4 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/026_Chapter 5 _L19_(03-10-2013).pdf       ">Wing design - selection of wing parameters - 1 Lecture 19        </option>
<option  value="short/NPTEL/web courses/101106035/027_Chapter 5_L20(03-10-2013).pdf         ">Wing design - selection of wing parameters - 2 Lecture 20        </option>
<option  value="short/NPTEL/web courses/101106035/028_Chapter 5_L21 _(04-10-2013).pdf       ">Wing design - selection of wing parameters - 3 Lecture 21        </option>
<option  value="short/NPTEL/web courses/101106035/029_Chapter 5_L22_(04-10-2013).pdf        ">Wing design - selection of wing parameters - 4 Lecture 22        </option>
<option  value="short/NPTEL/web courses/101106035/030_Chapter 5_References(03-10-2013).pdf  ">Chapter 5 - References                                           </option>
<option  value="short/NPTEL/web courses/101106035/031_Chapter 5_Exercises_(03-10-2013).pdf  ">Chapter 5 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/032_Chapter 6_L23_(07-10-2013).pdf        ">Fuselage and tail sizing - 1 Lecture 23                          </option>
<option  value="short/NPTEL/web courses/101106035/033_Chapter 6_L24_(03-10-2013).pdf        ">Fuselage and tail sizing - 2 Lecture 24                          </option>
<option  value="short/NPTEL/web courses/101106035/034_Chapter 6_L25_(03-10-2013).pdf        ">Fuselage and tail sizing - 3 Lecture 25                          </option>
<option  value="short/NPTEL/web courses/101106035/035_Chapter 6_L26_(04-10-2013).pdf        ">Fuselage and tail sizing - 4 Lecture 26                          </option>
<option  value="short/NPTEL/web courses/101106035/036_Chapter 6_L27_(07-10-2013).pdf        ">Fuselage and tail sizing - 5 Lecture 27                          </option>
<option  value="short/NPTEL/web courses/101106035/037_Chapter 6_L28_(04-10-2013).pdf        ">Fuselage and tail sizing - 6 Lecture 28                          </option>
<option  value="short/NPTEL/web courses/101106035/038_Chapter 6_L29_(04-10-2013).pdf        ">Fuselage and tail sizing - 7 Lecture 29                          </option>
<option  value="short/NPTEL/web courses/101106035/039_Chapter 6_L30 _(04-10-2013).pdf       ">Fuselage and tail sizing - 8  Lecture 30                         </option>
<option  value="short/NPTEL/web courses/101106035/040_Chapter 6_Exercises(04-10-2013).pdf   ">Chapter 6 Exercises                                              </option>
<option  value="short/NPTEL/web courses/101106035/041_Chapter 7_L31_(04-10-2013).pdf        ">Special considerations in configuration layout Lecture 31        </option>
<option  value="short/NPTEL/web courses/101106035/042_Chapter 7_References_(04-10-2013).pdf ">Chapter 7 References                                             </option>
<option  value="short/NPTEL/web courses/101106035/043_Chapter 7_Exercises_( 04-10-2013).pdf ">Chapter 7 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/044_Chapter 8_L32_(04-10-2013).pdf        ">Weights and centre of gravity - 1 Lecture 32                     </option>
<option  value="short/NPTEL/web courses/101106035/045_Chapter 8_L33_(05-10-2013).pdf        ">Weights and centre of gravity - 2 Lecture 33                     </option>
<option  value="short/NPTEL/web courses/101106035/046_Chapter 8_Exercises(04-10-2013).pdf   ">Chapter 8 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/047_Chapter 9_L34_(04-10-2013).pdf        ">Cross-checks on design of tail surfaces - 1 Lecture 34           </option>
<option  value="short/NPTEL/web courses/101106035/048_Chapter 9_L35_(04-10-13).pdf          ">Cross-checks on design of tail surfaces -2 Lecture 35            </option>
<option  value="short/NPTEL/web courses/101106035/049_Chapter 9_L36_(05-10-2013).pdf        ">Cross-checks on design of tail surfaces - 3 Lecture 36           </option>
<option  value="short/NPTEL/web courses/101106035/050_Chapter 9_L37_(05-10-2013).pdf        ">Cross-checks on design of tail surfaces - 4 Lecture 37           </option>
<option  value="short/NPTEL/web courses/101106035/051_Chapter 9_References_(05-10-2013).pdf ">Chapter 9 - References                                           </option>
<option  value="short/NPTEL/web courses/101106035/052_Chapter 9_Exercise_(05-10-2013).pdf   ">Chapter 9 - Exercises                                            </option>
<option  value="short/NPTEL/web courses/101106035/053_Chapter 10_L38_(05-10-2013).pdf       ">Miscellaneous topics - 1 Lecture 38                              </option>
<option  value="short/NPTEL/web courses/101106035/054_Chapter 10_L39_(07-10-2013).pdf       ">Miscellaneous topics -2 Lecture 39                               </option>
<option  value="short/NPTEL/web courses/101106035/055_Chapter 10_L40_(05-10-2013).pdf       ">Miscellaneous topics - 3 Lecture 40                              </option>
<option  value="short/NPTEL/web courses/101106035/056_Chapter 10_Exercises_(05-10-2013).pdf ">Chapter 10 - Exercises                                           </option>
<option  value="short/NPTEL/web courses/101106035/057_Appendix 10.2_(05-10-2013).pdf        ">Appendix 10.2 - Self study                                       </option>

</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101106038</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Composite Materials </strong></td>
	<td><strong>Prof. R. Velmurugan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/web courses/101106038/mod01lec01.pdf ">Introduction                           </option>
<option  value="short/NPTEL/web courses/101106038/mod01lec02.pdf ">Applications                           </option>
<option  value="short/NPTEL/web courses/101106038/mod01lec03.pdf ">Classifications                        </option>
<option  value="short/NPTEL/web courses/101106038/mod02lec01.pdf ">Manufacturing techniques               </option>
<option  value="short/NPTEL/web courses/101106038/mod03lec01.pdf ">Micro mechanics of Lamina              </option>
<option  value="short/NPTEL/web courses/101106038/mod03lec02.pdf ">Macro mechanics of Lamina and problems </option>
<option  value="short/NPTEL/web courses/101106038/mod04lec01.pdf ">Macro mechanics of laminate            </option>
<option  value="short/NPTEL/web courses/101106038/mod04lec02.pdf ">Classical lamination theory            </option>
<option  value="short/NPTEL/web courses/101106038/mod04lec03.pdf ">Inter laminar stresses                 </option>
<option  value="short/NPTEL/web courses/101106038/mod04lec04.pdf ">Failure theories and problems         </option>

</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101106040</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Experimental Gas/Aerodynamics </strong></td>
	<td><strong>Prof. Job Kurian</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/web courses/101106040/chapter 1.pdf ">Wind tunnels               </option>
<option  value="short/NPTEL/web courses/101106040/chapter 2.pdf ">High Speed Wind Tunnels    </option>
<option  value="short/NPTEL/web courses/101106040/chapter 3.pdf ">Shock Tube                 </option>
<option  value="short/NPTEL/web courses/101106040/chapter 4.pdf ">Hypersonic Facilities      </option>
<option  value="short/NPTEL/web courses/101106040/chapter 5.pdf ">Measurement of Pressure    </option>
<option  value="short/NPTEL/web courses/101106040/chapter 6.pdf ">Measurement of temperature </option>
<option  value="short/NPTEL/web courses/101106040/chapter 7.pdf ">Velocity measurements      </option>
<option  value="short/NPTEL/web courses/101106040/chapter 8.pdf ">Flow Visualisation         </option>

</tr>
	</form>
	<tr>
	<td><strong>101106041</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Flight dynamics I - Airplane performance</strong></td>
	<td><strong>Prof. E.G. Tulapurkara</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 1- Lecture 1 - 20-12-2011.pdf">Introduction - 1  Lecture 1</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 1- Lecture 2- 20-12-2011.pdf">Introduction - 2 Lecture 2</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 1- Lecture 3 - 20-12-2011.pdf">introduction - 3  Lecture 3</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 2 - Lecture 4- 20-12-2011.pdf">Earth's Atmosphere -1 Lecture 4</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 2 -Lecture 5 20-12-2011.pdf">Earth's Atmosphere - 2 Lecture 5</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 1- References - 20-12-2011.pdf">Chapter 1 - References</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 1- Exercises - 20-12-2011.pdf">Chapter 1 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Lecture 6 20-12-2011.pdf"> Drag polar - 1 Lecture 6</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 2 - References - 20-12-2011.pdf">Chapter 2 - References</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 2 - Exercises - 20-12-2011.pdf">Chapter 2 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 2 - Tables 20-12-2011.pdf">Chapter 2 - Table 2.1</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Lecture 7 20-12-2011.pdf">Drag polar - 2 Lecture 7</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Lecture 8 20-12-2011.pdf">Drag polar - 3 Lecture 8</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Lecture 9 20-12-2011.pdf">Drag polar - 4 Lecture 9</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Lecture 10 20-12-2011.pdf">Drag polar - 5 Lecture 10</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Lecture 11 20-12-2011.pdf">Drag polar - 6 Lecture 11</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Lecture 12 20-12-2011.pdf">Drag polar - 7 Lecture 12</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 References 20-12-2011.pdf">Chapter 3 - References</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 3 Exercises 20-12-2011.pdf">Chapter 3 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/chapter 4 Lecture 13 20-12-2011.pdf">Engine characteristics - 1 Lecture 13</option>
      
      <option  value="short/NPTEL/web courses/101106041/chapter 4 Lecture 14 20-12-2011.pdf">Engine characteristics - 2 Lecture 14</option>
      
      <option  value="short/NPTEL/web courses/101106041/chapter 4 Lecture 15 20-12-2011.pdf">Engine characteristics - 3 Lecture 15</option>
      
      <option  value="short/NPTEL/web courses/101106041/chapter 4 Lecture 16 20-12-2011.pdf">Engine characteristics - 4 Lecture 16</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 4 References 20-12-2011.pdf">Chapter 4 - References</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 4 Exercises 20-12-2011.pdf">Chapter 4 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/chapter 5 Lecture 17 21-12-2011.pdf">Steady level flight - 1 Lecture 17</option>
      
      <option  value="short/NPTEL/web courses/101106041/chapter 5 Lecture 18 21-12-2011.pdf">Steady level flight - 2 Lecture 18</option>
      
      <option  value="short/NPTEL/web courses/101106041/chapter 5 Lecture  19 21-12-2011.pdf">Steady level flight - 3 Lecture 19</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 5 Lecture 20 21-12-2011.pdf">Steady level flight - 4 Lecture 20</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 5 References 21-12-2011.pdf">Chapter 5 - References</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 5 Exercises 21-12-2011.pdf">Chapter 5 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 6 - Lecture 21 21-12-2011.pdf">Steady climb, descent and glide - 1 Lecture 21</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 6 - Lecture 22 -21-12-2011.pdf">Steady climb, descent and glide - 2 Lecture 22</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 6 Lecture 23 - 21-12-2011.pdf">Steady climb, descent and glide - 3 Lecture 23</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 6 Exercises- 21-12-11.pdf">Chapter 6 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 7 -Lecture 24  21-12-2011.pdf">Range and endurance - 1 Lecture 24</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 7 - Lecture 25 21-12-2011.pdf">Range and endurance - 2 Lecture 25</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 7 - Lecture 26 21-12-2011.pdf">Range and endurance - 3 Lecture 26</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 7 - References 21-12-2011.pdf">Chapter 7 - Reference</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 7 - Exercises 21-12-2011.pdf">Chapter 7 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 8 Lecture 27 21-12-2011.pdf">Accelerated level flight and climb Lecture 27</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 8 Exercises 21-12-2011.pdf">Chapter 8 - Exercise</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 9 Lecture 28 22-12-2011.pdf">Manoeuvres - 1 Lecture 28</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 9 Lecture 29 22-12-2011.pdf">Manoeuvres - 2 Lecture 29</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 9 - Lecture 30 22-12-2011.pdf">Manoeuvres - 3 Lecture 30</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 9 Lecture 31 22-12-2011.pdf">Manoeuvres - 4 Lecture 31</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 9  Exercises 22-12-2011.pdf">Chapter 9 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 10 Lecture 32 22-12-2011.pdf">Take-off and landing - 1 Lecture 32</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 10 Lecture 33 22-12-2011.pdf">Take-off and landing - 2 Lecture 33</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 10 Lecture 34 22-12-2011.pdf">Take-off and landing - 3 Lecture 34</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 10 References 22-12-2011.pdf">Chapter 10 - References</option>
      
      <option  value="short/NPTEL/web courses/101106041/Chapter 10 Exercises 22-12-2011.pdf">Chapter 10 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix -A  Lecture 35 22-12-2011.pdf">Appendix - A - 1 Lecture 35</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix -A Lecture 36 22-12-2011.pdf">Appendix - A - 2 Lecture 36</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix -A Lecture 37 22-12-2011.pdf">Appendix - A - 3 Lecture 37</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix -A Reference 22-12-2011.pdf">Appendix - A - References</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix-B Lecture 38 22-12-2011.pdf">Appendix - B - 1 Lecture 38</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix-B Lecture 39 22-12-2011.pdf">Appendix - B - 2  Lecture 39</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix-B Lecture 40 22-12-2011.pdf">Appendix - B - 3 Lecture 40</option>
      
      <option  value="short/NPTEL/web courses/101106041/Appendix-B References 22-12-2011.pdf">Appendix - B - References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101106042</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Flight Dynamics II (Stability)</strong></td>
	<td><strong>Dr. Nandan Kumar Sinha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="101106042/mod01lec01.mp4">Lecture 1 : Earth Atmosphere, Aircraft components, Aircraft nomenclature</option>
      
      <option  value="101106042/mod01lec02.mp4">Lecture 2 : Basic aerodynamics</option>
      
      <option  value="101106042/mod02lec03.mp4">Lecture 3 : Equilibrium and stability</option>
      
      <option  value="101106042/mod02lec04.mp4">Lecture 4 : Static vs dynamic stability</option>
      
      <option  value="101106042/mod03lec05.mp4">Lecture 5 : Criterion for stability, Wing contribution</option>
      
      <option  value="101106042/mod03lec06.mp4">Lecture 6 : Horizontal tail contribution</option>
      
      <option  value="101106042/mod03lec07.mp4">Lecture 7 : Wing plus tail contribution</option>
      
      <option  value="101106042/mod04lec08.mp4">Lecture 8 : Static margin and CG limits</option>
      
      <option  value="101106042/mod04lec09.mp4">Lecture 9 : Fuselage contribution</option>
      
      <option  value="101106042/mod04lec10.mp4">Lecture 10 : Powerplant contribution</option>
      
      <option  value="101106042/mod04lec11.mp4">Lecture 11 : Power effects on neutral point</option>
      
      <option  value="101106042/mod05lec12.mp4">Lecture 12 : Elevator</option>
      
      <option  value="101106042/mod05lec13.mp4">Lecture 13 : Stick free stability, Most fwd CG location</option>
      
      <option  value="101106042/mod05lec14.mp4">Lecture 14 : Longitudinal stick force per 'g', Ground effect</option>
      
      <option  value="101106042/mod06lec15.mp4">Lecture 15 : Control requirement, Pull-up maneuver,Maneuver point </option>
      
      <option  value="101106042/mod06lec16.mp4">Lecture 16 : Elevator per 'g' , Maneuver point</option>
      
      <option  value="101106042/mod06lec17.mp4">Lecture 17 : Example problems</option>
      
      <option  value="101106042/mod07lec18.mp4">Lecture 18 : Lateral-Directional Stability Derivatives, Fuselage/Vertical fin contribution</option>
      
      <option  value="101106042/mod07lec19.mp4">Lecture 19 : Roll stability, Wing sweep effect, Rudder</option>
      
      <option  value="101106042/mod07lec20.mp4">Lecture 20 : Dihedral effect, Various contributions</option>
      
      <option  value="101106042/mod07lec21.mp4">Lecture 21 : Power effects, Roll control, Aileron</option>
      
      <option  value="101106042/mod07lec22.mp4">Lecture 22 : Example problems</option>
      
      <option  value="101106042/mod08lec23.mp4">Lecture 23 : Derivation of Translational Motion Equations</option>
      
      <option  value="101106042/mod08lec24.mp4">Lecture 24 : Derivation of Angular Motion Equations</option>
      
      <option  value="101106042/mod08lec25.mp4">Lecture 25 : Description of various forces and moments</option>
      
      <option  value="101106042/mod08lec26.mp4">Lecture 26 : Nonlinearities and Associated Aircraft Behavior</option>
      
      <option  value="101106042/mod09lec27.mp4">Lecture 27 : Small perturbation method, Linearization of equations </option>
      
      <option  value="101106042/mod09lec28.mp4">Lecture 28 : Aerodynamic force and Moment Derivatives</option>
      
      <option  value="101106042/mod09lec29.mp4">Lecture 29 : Contribution of Aircraft components to Aerodynamic Derivatives</option>
      
      <option  value="101106042/mod09lec30.mp4">Lecture 30 : Linear Model and Aircraft Dynamics Modes</option>
      
      <option  value="101106042/mod10lec31.mp4">Lecture 31 : Short Period, Phugoid(Lanchester's formulation)</option>
      
      <option  value="101106042/mod10lec32.mp4">Lecture 32 : Short period mode approximation </option>
      
      <option  value="101106042/mod10lec33.mp4">Lecture 33 : Flying and Handling Qualities, Cooper Harper Scale</option>
      
      <option  value="101106042/mod11lec34.mp4">Lecture 34 : Pure rolling motion, Pure yawing motion,Spiral approximation</option>
      
      <option  value="101106042/mod11lec35.mp4">Lecture 35 : Spiral, Roll, Dutch roll Mode approximations</option>
      
      <option  value="101106042/mod11lec36.mp4">Lecture 36 : Lateral directional Flying Qualities, Routh's Stability criterion</option>
      
      <option  value="101106042/mod11lec37.mp4">Lecture 37 : Stability in Steady Roll Maneuver</option>
      
      <option  value="101106042/mod12lec38.mp4">Lecture 38 : Wind Effect on Aircraft Pure Plunging Motion</option>
      
      <option  value="101106042/mod12lec39.mp4">Lecture 39 : Wind Profiles, Longitudinal Mode Response to Wind Shear</option>
      
      <option  value="101106042/mod13lec40.mp4">Lecture 40 : Stability control/Augmentation</option>
      
      <option  value="101106042/mod13lec41.mp4">Lecture 41 : Autopilots, Automatic Landing System </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101106043</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Flight dynamics II - Airplane stability and control</strong></td>
	<td><strong>Prof. E.G. Tulapurkara</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/101106043/001_Chapter 1_L1.pdf">Introduction-1 Lecture 1</option>
      
      <option  value="short/NPTEL/web courses/101106043/002_Chapter 1_L2.pdf">Introduction-2 Lecture 2</option>
      
      <option  value="short/NPTEL/web courses/101106043/003_Chapter 1_L3.pdf">Introduction-3 Lecture 3</option>
      
      <option  value="short/NPTEL/web courses/101106043/004_Chapter 1_References.pdf">Chapter 1 - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/005_Chapter 1_Exercises.pdf">Chapter 1 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/006_Chapter_ L4.pdf">Longitudinal stick-fixed static stability and control - 1 Lecture 4</option>
      
      <option  value="short/NPTEL/web courses/101106043/007_Chapter 2_L5.pdf">Longitudinal stick-fixed static stability and control-2 Lecture 5</option>
      
      <option  value="short/NPTEL/web courses/101106043/008_Chapter 2_L6.pdf">Longitudinal stick-fixed static stability and control-3 Lecture 6</option>
      
      <option  value="short/NPTEL/web courses/101106043/009_Chapter 2 _L7.pdf">Longitudinal stick-fixed static stability and control-3 Lecture 7</option>
      
      <option  value="short/NPTEL/web courses/101106043/010_Chapter 2_L8.pdf">Longitudinal stick-fixed static stability and control-5 Lecture 8</option>
      
      <option  value="short/NPTEL/web courses/101106043/011_Chapter 2_L9.pdf">Longitudinal stick-fixed static stability and control-6 Lecture 9</option>
      
      <option  value="short/NPTEL/web courses/101106043/012_Chapter 2_L10.pdf">Longitudinal stick-fixed static stability and control-7 Lecture 10</option>
      
      <option  value="short/NPTEL/web courses/101106043/013_Chapter 2_L11.pdf">Longitudinal stick-fixed static stability and control-8 Lecture 11</option>
      
      <option  value="short/NPTEL/web courses/101106043/014_Chapter 2_References.pdf">Chapter 2 - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/015_Chapter 2_Exercises.pdf">Chapter 2 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/016_Chapter 3_L12.pdf">Longitudinal stick-free static stability and control-1 Lecture 12</option>
      
      <option  value="short/NPTEL/web courses/101106043/017_Chapter 3_L13.pdf">Longitudinal stick-free static stability and control-2 Lecture 13</option>
      
      <option  value="short/NPTEL/web courses/101106043/018_Chapter 3_L14.pdf">Longitudinal stick-free static stability and control-3 Lecture 14</option>
      
      <option  value="short/NPTEL/web courses/101106043/019_Chapter 3_References.pdf">Chapter 3 - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/020_Chapter 3_Exercises.pdf">Chapter 3 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/021_Chapter 4_L15.pdf">Longitudinal static stability and control-effect of acceleration - 1 Lecture 15</option>
      
      <option  value="short/NPTEL/web courses/101106043/022_Chapter 4_Exercises.pdf">Chapter 4 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/023_Chapter 5_L16.pdf">Directional static stability and control-1 Lecture 16</option>
      
      <option  value="short/NPTEL/web courses/101106043/024_Chapter 5_L17.pdf">Directional static stability and control-2 Lecture 17</option>
      
      <option  value="short/NPTEL/web courses/101106043/025_Chapter 5_L18.pdf">Directional static stability and control-3 Lecture 18</option>
      
      <option  value="short/NPTEL/web courses/101106043/026_Chapter 5_ Exercises.pdf">Chapter 5 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/027_Chapter 6_L19.pdf">Lateral static stability and control - 1 Lecture 19</option>
      
      <option  value="short/NPTEL/web courses/101106043/028_Chapter 6_L20.pdf">Lateral static stability and control - 2 Lecture 20</option>
      
      <option  value="short/NPTEL/web courses/101106043/029_Chapter 6_L21.pdf">Lateral static stability and control - 3 Lecture 21</option>
      
      <option  value="short/NPTEL/web courses/101106043/030_Chapter 6_References.pdf">Chapter 6 - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/031_Chapter 6_ Exercises.pdf">Chapter 6 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/032_Chapter 7_L22.pdf">Dynamic stability analysis -I-Equations of motion and estimation of stability derivatives -1 Lecture 22</option>
      
      <option  value="short/NPTEL/web courses/101106043/033_Chapter 7_L23.pdf">Dynamic stability analysis-I-Equations of motion and estimation of stability derivatives-2 Lecture 23</option>
      
      <option  value="short/NPTEL/web courses/101106043/034_Chapter 7_L24.pdf">Dynamic stability analysis-I-Equations of motion and estimation of stability derivatives-3 Lecture 24</option>
      
      <option  value="short/NPTEL/web courses/101106043/035_Chapter 7_L25.pdf">Dynamic stability analysis-I-Equations of motion and estimation of stability derivatives-4 Lecture 25</option>
      
      <option  value="short/NPTEL/web courses/101106043/036_Chapter 7_L26.pdf">Dynamic stability analysis-I-Equations of motion and estimation of stability derivatives-5 Lecture 26</option>
      
      <option  value="short/NPTEL/web courses/101106043/037_Chapter 7_L27.pdf">Dynamic stability analysis-I-Equations of motion and estimation of stability derivatives-6 Lecture 27
</option>
      
      <option  value="short/NPTEL/web courses/101106043/038_Chapter 7_References.pdf">Chapter 7 - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/039_Chapter 7_Exercises.pdf">Chapter 7 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/040_Chapter 8 _L28.pdf">Dynamic stability analysis - II - Longitudinal motion - 1 Lecture 28</option>
      
      <option  value="short/NPTEL/web courses/101106043/041_Chapter 8_L29.pdf">Dynamic stability analysis-II-Longitudinal motion - 2 Lecture 29</option>
      
      <option  value="short/NPTEL/web courses/101106043/042_Chapter 8_L30.pdf">Dynamic stability analysis-II-Longitudinal motion - 3 Lecture 30</option>
      
      <option  value="short/NPTEL/web courses/101106043/043_Chapter 8_L31.pdf">Dynamic stability analysis-II-Longitudinal motion - 4 Lecture 31</option>
      
      <option  value="short/NPTEL/web courses/101106043/044_Chapter 8_L32.pdf">Dynamic stability analysis-II-Longitudinal motion - 5 Lecture 32</option>
      
      <option  value="short/NPTEL/web courses/101106043/045_Chapter 8_References.pdf">Chapter 8 - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/046_Chapter 8_Exercises.pdf">Chapter 8 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/047_Chapter 9_L33.pdf">Dynamic stability analysis-III-lateral motion-1 Lecture 33</option>
      
      <option  value="short/NPTEL/web courses/101106043/048_Chapter 9_L34.pdf">Dynamic stability analysis-III-lateral motion - 2 Lecture 34</option>
      
      <option  value="short/NPTEL/web courses/101106043/049_Chapter 9_References.pdf">Chapter 9 - Reference</option>
      
      <option  value="short/NPTEL/web courses/101106043/050_Chapter 9_Exercises.pdf">Chapter 9 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/051_Chapter 10_L35.pdf">Miscellaneous topics - 1 Lecture 35</option>
      
      <option  value="short/NPTEL/web courses/101106043/052_Chapter 10_L36.pdf">Miscellaneous topics - 2 Lecture 36</option>
      
      <option  value="short/NPTEL/web courses/101106043/053_Chapter 10_References.pdf">Chapter 10 - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/054_Chapter 10_Exercises.pdf">Chapter 10 - Exercises</option>
      
      <option  value="short/NPTEL/web courses/101106043/055_Appendix-C_ L37.pdf">Appendix - C - 1 Lecture 37</option>
      
      <option  value="short/NPTEL/web courses/101106043/056_Appendix-C_L38.pdf">Appendix - C - 2 Lecture 38</option>
      
      <option  value="short/NPTEL/web courses/101106043/057_Appendix-C_ L39.pdf">Appendix - C - 3 Lecture 39</option>
      
      <option  value="short/NPTEL/web courses/101106043/058_Appendix-C_ L40.pdf">Appendix - C - 4 Lecture 40</option>
      
      <option  value="short/NPTEL/web courses/101106043/059_Appendix-C_  References.pdf">Appendix - C - References</option>
      
      <option  value="short/NPTEL/web courses/101106043/060_samphtm Question paper and hints for solution.pdf">samphtm question paper and hints for solution </option>
      
      <option  value="short/NPTEL/web courses/101106043/061_samphtm question paperand model answers.pdf">samphtm question paper - model answers</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101106044</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Gas Dynamics</strong></td>
	<td><strong>Dr. T.M. Muruganandam</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec01.mp4 ">Lecture 01  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec02.mp4 ">Lecture 02  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec03.mp4 ">Lecture 03  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec04.mp4 ">Lecture 04  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec05.mp4 ">Lecture 05  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec06.mp4 ">Lecture 06  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec07.mp4 ">Lecture 07  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec08.mp4 ">Lecture 08  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec09.mp4 ">Lecture 09  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec10.mp4 ">Lecture 10  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec11.mp4 ">Lecture 11  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec12.mp4 ">Lecture 12  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec13.mp4 ">Lecture 13  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec14.mp4 ">Lecture 14  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec15.mp4 ">Lecture 15  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec16.mp4 ">Lecture 16  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec17.mp4 ">Lecture 17  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec18.mp4 ">Lecture 18  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec19.mp4 ">Lecture 19  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec20.mp4 ">Lecture 20  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec21.mp4 ">Lecture 21  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec22.mp4 ">Lecture 22  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec23.mp4 ">Lecture 23  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec24.mp4 ">Lecture 24  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec25.mp4 ">Lecture 25  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec26.mp4 ">Lecture 26  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec27.mp4 ">Lecture 27  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec28.mp4 ">Lecture 28  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec29.mp4 ">Lecture 29  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec30.mp4 ">Lecture 30  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec31.mp4 ">Lecture 31  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec32.mp4 ">Lecture 32  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec33.mp4 ">Lecture 33  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec34.mp4 ">Lecture 34  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec35.mp4 ">Lecture 35  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec36.mp4 ">Lecture 36  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec37.mp4 ">Lecture 37  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec38.mp4 ">Lecture 38  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec39.mp4 ">Lecture 39  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec40.mp4 ">Lecture 40  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec41.mp4 ">Lecture 41  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec42.mp4 ">Lecture 42  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec43.mp4 ">Lecture 43  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec44.mp4 ">Lecture 44  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec45.mp4 ">Lecture 45  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec46.mp4 ">Lecture 46  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec47.mp4 ">Lecture 47  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec48.mp4 ">Lecture 48  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec49.mp4 ">Lecture 49  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec50.mp4 ">Lecture 50  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec51.mp4 ">Lecture 51  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec52.mp4 ">Lecture 52  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec53.mp4 ">Lecture 53  </option>
<option  value="short/NPTEL/NPTEL Index/101106044/mod01lec54.mp4 ">Lecture 54  </option>

</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101106045</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Introduction to CFD	</strong></td>
	<td><strong>Prof. M. Ramakrishna</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec01.mp4 "> Introduction, Why and how we need computers                                  </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec02.mp4 "> Representing  Arrays  and  functions on computers                            </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec03.mp4 "> Representing functions - Box functions 	                                      </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec04.mp4 "> Representing functions - Polynomials & Hat functions                         </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec05.mp4 "> Hat functions, Quadratic & Cubic representations                             </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec06.mp4 "> Demo - Hat functions, Aliasing                                               </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec07.mp4 "> Representing Derivatives - finite differences                                </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec08.mp4 "> Finite differences, Laplace equation                                         </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec09.mp4 "> Laplace equation - Jacobi iterations                                         </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec10.mp4 "> Laplace equation - Iteration matrices                                        </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec11.mp4 "> Laplace equation - convergence rate                                          </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec12.mp4 "> Laplace equation - convergence rate Continued                                </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec13.mp4 "> Demo  -  representation  error,  Laplace equation                            </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec14.mp4 "> Demo - Laplace equation, SOR                                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec15.mp4 "> Laplace equation - final,  Linear Wave equation                              </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec16.mp4 "> Linear wave equation - Closed form & numerical solution, stability analysis  </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec17.mp4 "> Generating a stable scheme & Boundary conditions                             </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec18.mp4 "> Modified equation                                                            </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec19.mp4 "> Effect of higher derivative terms on Wave equation                           </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec20.mp4 "> Artificial dissipation, upwinding, generating schemes                        </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec21.mp4 "> Demo - Modified equation, Wave equation                                      </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec22.mp4 "> Demo - Wave equation / Heat Equation                                         </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec23.mp4 "> Quasi-linear One-Dimensional. wave equation                                  </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec24.mp4 "> Shock speed,  stability analysis,  Derive Governing equations                </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec25.mp4 "> One-Dimensional Euler equations - Attempts to decouple                       </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec26.mp4 "> Derive Eigenvectors, Writing Programs                                        </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec27.mp4 "> Applying Boundary conditions                                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec28.mp4 "> Implicit Boundary conditions                                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec29.mp4 "> Flux Vector Splitting, setup froms averaging                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec30.mp4 "> Roes averaging                                                               </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec31.mp4 "> Demo - One Dimensional flow                                                  </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec32.mp4 "> Accelerating convergence - Preconditioning, dual time stepping               </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec33.mp4 "> Accelerating convergence, Intro to Multigrid method                          </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec34.mp4 "> Multigrid method                                                             </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec35.mp4 "> Multigrid method - final, Parallel Computing                                 </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec36.mp4 "> Calculus of Variations - Three Lemmas and a Theorem                          </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec37.mp4 "> Calculus of Variations - Application to Laplace Equation                     </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec38.mp4 "> Calculus of Variations -final & Random Walk                                  </option>
<option  value="short/NPTEL/NPTEL Index/101106045/mod01lec39.mp4 "> Overview and Recap of the course                                             </option>

</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101106046</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Space Technology</strong></td>
	<td><strong>Dr. Nandan Kumar Sinha, Dr. Amit Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/web courses/101106046/Lecture1.pdf  ">Review of fluid mechanics                                                             </option>
<option  value="short/NPTEL/web courses/101106046/Lecture2.pdf  ">Thrust from stationary rocket engine/motor, specific impulse                          </option>
<option  value="short/NPTEL/web courses/101106046/Lecture3.pdf  ">Rocket vehicle acceleration, the rocket equation in free space                        </option>
<option  value="short/NPTEL/web courses/101106046/Lecture4.pdf  ">Effect of gravity and atmospheric drag                                                </option>
<option  value="short/NPTEL/web courses/101106046/Lecture5.pdf  ">Ascent phase and trajectories                                                         </option>
<option  value="short/NPTEL/web courses/101106046/Lecture6.pdf  ">Chemical rockets and multi-staging                                                    </option>
<option  value="short/NPTEL/web courses/101106046/Lecture7.pdf  ">Limit of multi-staging, optimal staging with identical stages                         </option>
<option  value="short/NPTEL/web courses/101106046/Lecture8.pdf  ">Optimal staging with non-identical stages                                             </option>
<option  value="short/NPTEL/web courses/101106046/Lecture9.pdf  ">Parallel staging                                                                      </option>
<option  value="short/NPTEL/web courses/101106046/Lecture10.pdf ">Electrical propulsion                                                                 </option>
<option  value="short/NPTEL/web courses/101106046/Lecture11.pdf ">Optimal payload in an electrical rocket                                               </option>
<option  value="short/NPTEL/web courses/101106046/Lecture12.pdf ">Fundamentals of orbital mechanics                                                     </option>
<option  value="short/NPTEL/web courses/101106046/Lecture13.pdf ">Equation of motion for the two body problem                                           </option>
<option  value="short/NPTEL/web courses/101106046/Lecture14.pdf ">Elliptic trajectories                                                                 </option>
<option  value="short/NPTEL/web courses/101106046/Lecture15.pdf ">Parabolic and hyperbolic trajectories                                                 </option>
<option  value="short/NPTEL/web courses/101106046/Lecture16.pdf ">Orbital maneuvers in Earth-satellite system                                           </option>
<option  value="short/NPTEL/web courses/101106046/Lecture17.pdf ">Orbital maneuvers in deep space missions                                              </option>
<option  value="short/NPTEL/web courses/101106046/Lecture18.pdf ">Low thrust missions                                                                   </option>
<option  value="short/NPTEL/web courses/101106046/Lecture19.pdf ">Atmosphere, radiation and magnetic fields, space mission types                        </option>
<option  value="short/NPTEL/web courses/101106046/Lecture20.pdf ">Introduction, re-entry types                                                          </option>
<option  value="short/NPTEL/web courses/101106046/Lecture21.pdf ">Re-entry dynamics for ballistic re-entry                                              </option>
<option  value="short/NPTEL/web courses/101106046/Lecture22.pdf ">Re-entry heating                                                                      </option>
<option  value="short/NPTEL/web courses/101106046/Lecture23.pdf ">Introduction to Spacecraft Attitude Dynamics; Space Environment, Satellite subsystems </option>
<option  value="short/NPTEL/web courses/101106046/Lecture24.pdf ">Spherical Geometry, Various Axes Systems                                              </option>
<option  value="short/NPTEL/web courses/101106046/Lecture25.pdf ">Attitude Dynamics                                                                     </option>
<option  value="short/NPTEL/web courses/101106046/Lecture26.pdf ">Attitude Determination Techniques                                                     </option>
<option  value="short/NPTEL/web courses/101106046/Lecture27.pdf ">Attitude Stabilization and Control                                                    </option>


</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101108047</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Advanced Control System Design for Aerospace Vehicles</strong></td>
	<td><strong>Dr. Radhakant Padhi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="101108047/mod01lec01.mp4">Introduction and Motivation for Advanced Control Design</option>
      
      <option  value="101108047/mod02lec02.mp4">Classical Control Overview - I</option>
      
      <option  value="101108047/mod02lec03.mp4">Classical Control Overview - II</option>
      
      <option  value="101108047/mod02lec04.mp4">Classical Control Overview - III</option>
      
      <option  value="101108047/module2/lecture5/mod02lec05.mp4">Classical Control Overview � IV</option>
      
      <option  value="101108047/mod03lec06.mp4">Basic Principles of Atmospheric Flight Mechanics</option>
      
      <option  value="101108047/mod03lec07.mp4">Overview of Flight Dynamics - I</option>
      
      <option  value="101108047/mod03lec08.mp4">Overview of Flight Dynamics � II</option>
      
      <option  value="101108047/mod04lec09.mp4">Representation of Dynamical Systems � I</option>
      
      <option  value="101108047/mod04lec10.mp4">Representation of Dynamical Systems � II</option>
      
      <option  value="101108047/mod04lec11.mp4">Representation of Dynamical Systems � III</option>
      
      <option  value="101108047/mod05lec12.mp4">Review of Matrix Theory  - I</option>
      
      <option  value="101108047/mod05lec13.mp4">Review of Matrix Theory  - II</option>
      
      <option  value="101108047/mod05lec14.mp4">Review of Matrix Theory  - III</option>
      
      <option  value="101108047/mod06lec15.mp4">Review of Numerical Methods</option>
      
      <option  value="101108047/mod07lec16.mp4">Linearization of Nonlinear Systems</option>
      
      <option  value="101108047/mod08lec17.mp4">First and Second Order Linear Differential Equations</option>
      
      <option  value="101108047/mod08lec18.mp4">Time Response of Linear Dynamical Systems</option>
      
      <option  value="101108047/mod08lec19.mp4">Stability of Linear Time Invariant Systems</option>
      
      <option  value="101108047/mod08lec20.mp4">Controllability and Observability of linear Time Invariant Systems</option>
      
      <option  value="101108047/mod09lec21.mp4">Pole Placement Control Design</option>
      
      <option  value="101108047/mod09lec22.mp4">Pole Placement Observer Design</option>
      
      <option  value="101108047/mod10lec23.mp4">Static Optimization: An Overview</option>
      
      <option  value="101108047/mod11lec24.mp4">Calculus of Variations: An Overview</option>
      
      <option  value="101108047/mod11lec25.mp4">Optimal Control Formulation using Calculus of Variations</option>
      
      <option  value="101108047/mod11lec26.mp4">Classical Numerical Methods for Optimal Control</option>
      
      <option  value="101108047/mod11lec27.mp4">Linear Quadratic Regulator (LQR) Design - 1</option>
      
      <option  value="101108047/mod11lec28.mp4">Linear Quadratic Regulator (LQR) Design - 2</option>
      
      <option  value="101108047/mod12lec29.mp4">Linear Control Design Techniques in Aircraft Control � I</option>
      
      <option  value="101108047/mod12lec30.mp4">Linear Control Design Techniques in Aircraft Control � II</option>
      
      <option  value="101108047/mod13lec31.mp4">Lyapunov Theory � I</option>
      
      <option  value="101108047/mod13lec32.mp4">Lyapunov Theory � II</option>
      
      <option  value="101108047/mod13lec33.mp4">Constructions of Lyapunov Functions</option>
      
      <option  value="101108047/mod14lec34.mp4">Dynamic Inversion � I</option>
      
      <option  value="101108047/mod14lec35.mp4">Dynamic Inversion � II</option>
      
      <option  value="101108047/mod14lec36.mp4">Neuro-Adaptive Design � I</option>
      
      <option  value="101108047/mod14lec37.mp4">Neuro-Adaptive Design � II</option>
      
      <option  value="101108047/mod14lec38.mp4">Neuro-Adaptive Design for Flight Control</option>
      
      <option  value="101108047/mod15lec39.mp4">Integrator Back-Stepping; Linear Quadratic (lQ) Observer</option>
      
      <option  value="101108047/mod15lec40.mp4">An Overview of Kalman Filter Theory</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101108054</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Guidance of Missiles</strong></td>
	<td><strong>Prof. Debasish Ghose</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/101108054/module1/foreword.pdf">Foreword</option>
      
      <option  value="short/NPTEL/web courses/101108054/module1/lecture1.pdf">What is Guidance?</option>
      
      <option  value="short/NPTEL/web courses/101108054/module1/lecture2.pdf">History of Guided Missiles</option>
      
      <option  value="short/NPTEL/web courses/101108054/module2/lecture3.pdf">Airframe</option>
      
      <option  value="short/NPTEL/web courses/101108054/module2/lecture4.pdf">Flight Control System</option>
      
      <option  value="short/NPTEL/web courses/101108054/module2/lecture5.pdf">Guidance Subsystem</option>
      
      <option  value="short/NPTEL/web courses/101108054/module2/lecture6.pdf">Proximity Fuze; Propulsion System; Warhead</option>
      
      <option  value="short/NPTEL/web courses/101108054/module3/lecture7.pdf">Guidance Phases During Missile Flight; Categories of Homing Guidance</option>
      
      <option  value="short/NPTEL/web courses/101108054/module3/lecture8.pdf">Standard Terminologies in Missile Guidance</option>
      
      <option  value="short/NPTEL/web courses/101108054/module4/lecture9.pdf">Engagement between Two Point Objects</option>
      
      <option  value="short/NPTEL/web courses/101108054/module4/lecture10.pdf">Collision Condition and Collision Triangle</option>
      
      <option  value="short/NPTEL/web courses/101108054/module5/lecture11.pdf">An Overview of Guidance Laws</option>
      
      <option  value="short/NPTEL/web courses/101108054/module5/lecture12.pdf">Conceptual Classical Guidance Laws</option>
      
      <option  value="short/NPTEL/web courses/101108054/module5/lecture13.pdf">Implementable Classical Guidance Laws</option>
      
      <option  value="short/NPTEL/web courses/101108054/module5/lecture14.pdf">Modern Guidance Laws</option>
      
      <option  value="short/NPTEL/web courses/101108054/module6/lecture15.pdf">Pure Pursuit Guidance Law</option>
      
      <option  value="short/NPTEL/web courses/101108054/module6/lecture16.pdf">Time of Interception; Miss-Distance</option>
      
      <option  value="short/NPTEL/web courses/101108054/module6/lecture17.pdf">Deviated Pursuit Guidance Law</option>
      
      <option  value="short/NPTEL/web courses/101108054/module6/lecture18.pdf">The Capture Region; Implementation</option>
      
      <option  value="short/NPTEL/web courses/101108054/module7/lecture19.pdf">Introduction; LOS Guidance</option>
      
      <option  value="short/NPTEL/web courses/101108054/module7/lecture20.pdf">Implementation of LOS Guidance; CLOS; BR</option>
      
      <option  value="short/NPTEL/web courses/101108054/module7/lecture21.pdf">Some Additional Analysis</option>
      
      <option  value="short/NPTEL/web courses/101108054/module8/lecture22.pdf">PPN; TPN; GTPN; IPN</option>
      
      <option  value="short/NPTEL/web courses/101108054/module9/lecture23.pdf">Original TPN with Non-maneuvering Target</option>
      
      <option  value="short/NPTEL/web courses/101108054/module9/lecture24.pdf">Realistic True Proportional Navigation</option>
      
      <option  value="short/NPTEL/web courses/101108054/module9/lecture25.pdf">Comparison of TPN Guidance Laws</option>
      
      <option  value="short/NPTEL/web courses/101108054/module9/lecture26.pdf">Miss-distance Analysis for RTPN</option>
      
      <option  value="short/NPTEL/web courses/101108054/module10/lecture27.pdf">Introduction; Non-maneuvering Target</option>
      
      <option  value="short/NPTEL/web courses/101108054/module10/lecture28.pdf">Non-Maneuvering Target (Contd..)</option>
      
      <option  value="short/NPTEL/web courses/101108054/module10/lecture29.pdf">An Illustrative Example</option>
      
      <option  value="short/NPTEL/web courses/101108054/module10/lecture30.pdf">Maneuvering Target</option>
      
      <option  value="short/NPTEL/web courses/101108054/module10/lecture31.pdf">Maneuvering Target (Contd..)</option>
      
      <option  value="short/NPTEL/web courses/101108054/module10/lecture32.pdf">Missile Latax</option>
      
      <option  value="short/NPTEL/web courses/101108054/module10/lecture33.pdf">Representation of PPN capturability in the relative velocity space</option>
      
      <option  value="short/NPTEL/web courses/101108054/module11/lecture34.pdf">PN Based Impact Angle Constrained Guidance</option>
      
      <option  value="short/NPTEL/web courses/101108054/module11/lecture35.pdf">Composite Guidance Law</option>
      
      <option  value="short/NPTEL/web courses/101108054/module11/lecture36.pdf">Impact Angles Against a Moving Target with Proportional Navigation</option>
      
      <option  value="short/NPTEL/web courses/101108054/module11/lecture37.pdf">The Proposed Guidance Law</option>
      
      <option  value="short/NPTEL/web courses/101108054/module12/lecture38.pdf">Linearized Proportional Navigation</option>
      
      <option  value="short/NPTEL/web courses/101108054/module12/lecture39.pdf">Comparison between PN and APN</option>
      
      <option  value="short/NPTEL/web courses/101108054/module12/lecture40.pdf">Optimal Control Guidance Laws</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>101108056</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Navigation, Guidance, And Control</strong></td>
	<td><strong>Prof. Debasish Ghose</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/101108056/module1/foreword.pdf">Foreword</option>
      
      <option  value="short/NPTEL/web courses/101108056/module1/lecture1.pdf">Introduction</option>
      
      <option  value="short/NPTEL/web courses/101108056/module1/lecture2.pdf">Principles of Radars</option>
      
      <option  value="short/NPTEL/web courses/101108056/module1/lecture3.pdf">Radar Block Diagram and Operation</option>
      
      <option  value="short/NPTEL/web courses/101108056/module2/lecture4.pdf">Doppler Effect; CW Radars</option>
      
      <option  value="short/NPTEL/web courses/101108056/module2/lecture5.pdf">Applications; FM-CW Radars</option>
      
      <option  value="short/NPTEL/web courses/101108056/module3/lecture6.pdf">MTI and Pulse Doppler Radars</option>
      
      <option  value="short/NPTEL/web courses/101108056/module4/lecture7.pdf">Introduction; Classification; Description</option>
      
      <option  value="short/NPTEL/web courses/101108056/module4/lecture8.pdf">Guidance Phases; Categories; Useful Concepts</option>
      
      <option  value="short/NPTEL/web courses/101108056/module5/lecture9.pdf">Classification; Classical Guidance Laws</option>
      
      <option  value="short/NPTEL/web courses/101108056/module5/lecture10.pdf">Modern Guidance Laws</option>
      
      <option  value="short/NPTEL/web courses/101108056/module6/lecture11.pdf">Introduction; Types of Navigation; LORAN System</option>
      
      <option  value="short/NPTEL/web courses/101108056/module6/lecture12.pdf">DECCA; OMEGA; VOR; INS; Integrated Systems</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture13.pdf">Basic Definitions; Open Loop and Closed Loop Systems</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture14.pdf">Linearity; Causality</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture15.pdf">Laplace Transforms</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture16.pdf">Input-Output Description;  Performance Criteria</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture17.pdf">Transfer Function; Initial and Final Value Theorem; Partial Fraction Expansion</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture18.pdf">Time Response; First Order Systems</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture19.pdf">Second Order Systems</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture20.pdf">Performance of Second Order Systems</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture21.pdf">Higher Order Systems; Block Diagram Algebra</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture22.pdf">Stability; Hurwitz Determinants; Routh-Hurwitz Criterion</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture23.pdf">Special Cases and Applications of Routh-Hurwitz Criterion</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture24.pdf">Feedback Control; P-Control</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture25.pdf">Steady State Error; Disturbance Signals</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture26.pdf">Root Locus; Evan�s Form</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture27.pdf">Complex Variables; Angle Criterion</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture28.pdf">Steps to Obtain Root Locus</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture29.pdf">Root Locus Example</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture30.pdf">Controller Design using Root Locus; PD-Control;  Lead Control</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture31.pdf">PI-Control; Lag Control; Aircraft Example</option>
      
      <option  value="short/NPTEL/web courses/101108056/module7/lecture32.pdf">Compensator Design using Root Locus</option>
      
      <option  value="short/NPTEL/web courses/101108056/module8/lecture33.pdf">Response to Sinusoidal Input; Frequency Response Plots</option>
      
      <option  value="short/NPTEL/web courses/101108056/module8/lecture34.pdf">Bode Plots of Simple Functions</option>
      
      <option  value="short/NPTEL/web courses/101108056/module8/lecture35.pdf">Bode Plots of Complex Functions</option>
      
      <option  value="short/NPTEL/web courses/101108056/module8/lecture36.pdf">Nyquist Plots</option>
      
      <option  value="short/NPTEL/web courses/101108056/module8/lecture37.pdf">Applications of Nyquist Plots</option>
      
      <option  value="short/NPTEL/web courses/101108056/module8/lecture38.pdf">Gain and Phase Margins</option>
      
      <option  value="short/NPTEL/web courses/101108056/module9/lecture39.pdf">State Equations; State Transition Matrix and Equations</option>
      
      <option  value="short/NPTEL/web courses/101108056/module9/lecture40.pdf">Relation with Transfer Functions; Controllability and Observability</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>101108057</strong></td>
	<td><strong>Aerospace Engineering</strong></td>
	<td><strong>Optimal Control, Guidance and Estimation.</strong></td>
	<td><strong>Dr. Radhakant Padhi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="101108057/mod01lec01.mp4">Introduction, Motivation and Overview</option>
      
      <option  value="101108057/mod01lec02.mp4">Overview of SS Approach and Matrix Theory</option>
      
      <option  value="101108057/mod01lec03.mp4">Review of Numerical Methods</option>
      
      <option  value="101108057/mod02lec04.mp4">An Overview of Static Optimization � I</option>
      
      <option  value="101108057/mod02lec05.mp4">An Overview of Static Optimization � II</option>
      
      <option  value="101108057/mod03lec06.mp4">Review of Calculus of Variations � I</option>
      
      <option  value="101108057/mod03lec07.mp4">Review of Calculus of Variations � II</option>
      
      <option  value="101108057/mod03lec08.mp4">Optimal Control Formulation Using Calculus of Variations</option>
      
      <option  value="101108057/mod04lec09.mp4">Classical Numerical Methods to Solve Optimal Control Problems</option>
      
      <option  value="101108057/mod05lec10.mp4">Linear Quadratic Regulator (LQR) � I</option>
      
      <option  value="101108057/mod05lec11.mp4">Linear Quadratic Regulator (LQR) � II</option>
      
      <option  value="101108057/mod05lec12.mp4">Linear Quadratic Regulator (LQR) � III</option>
      
      <option  value="101108057/mod05lec13.mp4">Linear Quadratic Regulator (LQR) �  III</option>
      
      <option  value="101108057/mod06lec14.mp4">Discrete-time Optimal Control</option>
      
      <option  value="101108057/mod07lec15.mp4">Overview of Flight Dynamics � I</option>
      
      <option  value="101108057/mod07lec16.mp4">Overview of Flight Dynamics � II</option>
      
      <option  value="101108057/mod07lec17.mp4">Overview of Flight Dynamics � III</option>
      
      <option  value="101108057/mod08lec18.mp4">Linear Optimal Missile Guidance using LQR</option>
      
      <option  value="101108057/mod09lec19.mp4">SDRE and &theta; - D Designs</option>
      
      <option  value="101108057/mod10lec20.mp4">Dynamic Programming</option>
      
      <option  value="101108057/mod10lec21.mp4">Approximate Dynamic Programming (ADP), Adaptive Critic (AC) and Single Network Adaptive Critic (SNAC) Design</option>
      
      <option  value="101108057/mod11lec22.mp4">Transcription Method to Solve Optimal Control Problems</option>
      
      <option  value="101108057/mod11lec23.mp4">Model Predictive Static Programming (MPSP) and Optimal Guidance of Aerospace Vehicles</option>
      
      <option  value="101108057/mod11lec24.mp4">MPSP for Optimal Missile Guidance</option>
      
      <option  value="101108057/mod11lec25.mp4">Model Predictive Spread Control (MPSC) and Generalized MPSP (G-MPSP) Designs</option>
      
      <option  value="101108057/mod12lec26.mp4">Linear Quadratic Observer & An Overview of State Estimation</option>
      
      <option  value="101108057/mod12lec27.mp4">Review of Probability Theory and Random Variables</option>
      
      <option  value="101108057/mod12lec28.mp4">Kalman Filter Design � I</option>
      
      <option  value="101108057/mod12lec29.mp4">Kalman Filter Design � II</option>
      
      <option  value="101108057/mod12lec30.mp4">Kalman Filter Design � III</option>
      
      <option  value="101108057/mod13lec31.mp4">Integrated Estimation, Guidance & Control � I</option>
      
      <option  value="101108057/mod13lec32.mp4">Integrated Estimation, Guidance & Control � II</option>
      
      <option  value="101108057/mod14lec33.mp4">LQG Design; Neighboring Optimal Control & Sufficiency Condition</option>
      
      <option  value="101108057/mod15lec34.mp4">Constrained Optimal Control � I</option>
      
      <option  value="101108057/mod15lec35.mp4">Constrained Optimal Control � II</option>
      
      <option  value="101108057/mod15lec36.mp4">Constrained Optimal Control � III</option>
      
      <option  value="101108057/mod16lec37.mp4">Optimal Control of Distributed Parameter Systems � I</option>
      
      <option  value="101108057/mod16lec38.mp4">Optimal Control of Distributed Parameter Systems � II</option>
      
      <option  value="101108057/mod17lec39.mp4">Take Home Material: Summary � I</option>
      
      <option  value="101108057/mod17lec40.mp4">Take Home Material: Summary � II</option>
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
		
<td><strong>101104018</strong></td>
	<td><strong> Aerospace Engineering </strong></td>
	<td><strong> Introduction to Propulsion </strong></td>
	<td><strong> Dr. D.P. Mishra </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Kanpur </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>

      
      <option value="short/NPTEL/NPTEL Index/101104018/Lecture-01.mp4"> Lecture-01</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-02.mp4"> Lecture-02</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-03.mp4"> Lecture-03</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-04.mp4"> Lecture-04</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-05.mp4"> Lecture-05</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-06.mp4"> Lecture-06</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-07.mp4"> Lecture-07</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-08.mp4"> Lecture-08</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-09.mp4"> Lecture-09</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-10.mp4"> Lecture-10</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-11.mp4"> Lecture-11</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-12.mp4"> Lecture-12</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-13.mp4"> Lecture-13</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-14.mp4"> Lecture-14</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-15.mp4"> Lecture-15</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-16.mp4"> Lecture-16</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-17.mp4"> Lecture-17</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-18.mp4"> Lecture-18</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-19.mp4"> Lecture-19</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-20.mp4"> Lecture-20</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-21.mp4"> Lecture-21</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-22.mp4"> Lecture-22</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-23.mp4"> Lecture-23</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-24.mp4"> Lecture-24</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-25.mp4"> Lecture-25</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-26.mp4"> Lecture-26</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-27.mp4"> Lecture-27</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-28.mp4"> Lecture-28</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-29.mp4"> Lecture-29</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-30.mp4"> Lecture-30</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-31.mp4"> Lecture-31</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-32.mp4"> Lecture-32</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-33.mp4"> Lecture-33</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-34.mp4"> Lecture-34</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-35.mp4"> Lecture-35</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-36.mp4"> Lecture-36</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-37.mp4"> Lecture-37</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-38.mp4"> Lecture-38</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-39.mp4"> Lecture-39</option>
<option value="short/NPTEL/NPTEL Index/101104018/Lecture-40.mp4"> Lecture-40</option>

          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>119106008</strong></td>
      <td><strong>Aerospace Engineering</strong></td>
      <td><strong>Introduction to Atmospheric Science</strong></td>
      <td><strong>Prof. C. Balaji</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="119106008/mod01lec01.mp4">Introduction</option>
          <option  value="119106008/mod01lec02.mp4">Atmosphere-A brief survey (Pressure, Temperature and Chemical composition)</option>
          <option  value="119106008/mod01lec03.mp4">Atmosphere-A brief survey contd … (Vertical structure of the atmosphere)</option>
          <option  value="119106008/mod01lec04.mp4">Vertical structure of atmosphere contd ... and The Earth system - Oceans</option>
          <option  value="119106008/mod01lec05.mp4">The  Earth system – Oceans Contd... and Marine biosphere</option>
          <option  value="119106008/mod01lec06.mp4">The Earth system – Hydrological cycle</option>
          <option  value="119106008/mod01lec07.mp4">The Earth system – Hydrological cycle contd ... and Carbon cycle</option>
          <option  value="119106008/mod01lec08.mp4">The Earth system – Carbon cycle contd..., and Carbon in the oceans Earth's crust</option>
          <option  value="119106008/mod01lec09.mp4">The Earth system -- Carbon in the oceans Earth's crust</option>
          <option  value="119106008/mod01lec10.mp4">Atmospheric Thermodynamics- Introduction</option>
          <option  value="119106008/mod01lec11.mp4">The hydrostatic equation </option>
          <option  value="119106008/mod01lec12.mp4">Hypsometric equation and pressure at sea level</option>
          <option  value="119106008/mod01lec13.mp4">Basic Thermodynamics</option>
          <option  value="119106008/mod01lec14.mp4">Concept of air parcel and dry adiabatic lapse rate</option>
          <option  value="119106008/mod01lec15.mp4">Potential temperature</option>
          <option  value="119106008/mod01lec16.mp4">Skew-T ln-P chart</option>
          <option  value="119106008/mod01lec17.mp4">Problems using Skew-T ln-P chart</option>
          <option  value="119106008/mod01lec18.mp4">Problems using Skew-T ln-P chart.</option>
          <option  value="119106008/mod01lec19.mp4">Problems using Skew-T ln-P chart..</option>
          <option  value="119106008/mod01lec20.mp4">Lifting Condensation Level (LCL)</option>
          <option  value="119106008/mod01lec21.mp4">Lifting condensation level Contd...</option>
          <option  value="119106008/mod01lec22.mp4">Saturated Adiabatic and Psuedo-adiabatic processes</option>
          <option  value="119106008/mod01lec23.mp4">Equivalent potential temperature and wet bulb potential temperature</option>
          <option  value="119106008/mod01lec24.mp4">Normand's rule - Chinook winds</option>
          <option  value="119106008/mod01lec25.mp4">Problems on Chinook wind and static stability</option>
          <option  value="119106008/mod01lec26.mp4">Static stability-Brunt-Visala frequency</option>
          <option  value="119106008/mod01lec27.mp4">Conditional and convective instability</option>
          <option  value="119106008/mod01lec28.mp4">Static stability - Problems using radiosonde data and skew T ln P chart</option>
          <option  value="119106008/mod01lec29.mp4">The second law of thermodynamics – Clausius Clapeyron relation</option>
          <option  value="119106008/mod01lec30.mp4">Clausius Clapeyron relation contd.. </option>
          <option  value="119106008/mod01lec31.mp4">Atmospheric radiation – Radiation laws</option>
          <option  value="119106008/mod01lec32.mp4">Planck's distribution and Inverse square law</option>
          <option  value="119106008/mod01lec33.mp4">Physics of scattering, emmision and absorption</option>
          <option  value="119106008/mod01lec34.mp4">Physics of scattering, emmision and absorption contd...</option>
          <option  value="119106008/mod01lec35.mp4">Radiative Transfer Equation – Derivation</option>
          <option  value="119106008/mod01lec36.mp4">Radiative Transfer Equation  contd..</option>
          <option  value="119106008/mod01lec37.mp4">Radiative heating profiles of the atmosphere</option>
          <option  value="119106008/mod01lec38.mp4">Climate Dynamics – Introduction</option>
          <option  value="119106008/mod01lec39.mp4">Climate sensitivity and feedback</option>
          <option  value="119106008/mod01lec40.mp4">Climate change</option>
          <option  value="119106008/mod01lec41.mp4">Atmospheric dynamics</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>101104061</strong></td>
      <td><strong>Aerospace Engineering</strong></td>
      <td><strong>NOC:Introduction to airplane performance</strong></td>
      <td><strong>Dr. A.K. Ghosh</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="101104061/mod01lec01.mp4">General Introduction: Airplane Performance Characteristics</option>
          <option  value="101104061/mod01lec02.mp4">George Cayley: Concept of Lift and Drag</option>
          <option  value="101104061/mod01lec03.mp4">Introduction to airplane and its components</option>
          <option  value="101104061/mod01lec04.mp4">Hansa 3 Aircraft and its Primary Systems</option>
          <option  value="101104061/mod01lec05.mp4">Concept of Lift Aerofoil: Wing : Complete Aircraft</option>
          <option  value="101104061/mod01lec06.mp4">Drag Polar</option>
          <option  value="101104061/mod02lec07.mp4">Revision</option>
          <option  value="101104061/mod02lec08.mp4">Standard Atmosphere: Description and Modeling</option>
          <option  value="101104061/mod02lec09.mp4">Measuring Instruments: Altimeter, Airspeed Indicator</option>
          <option  value="101104061/mod02lec10.mp4">Equations of Motion: Static Performance</option>
          <option  value="101104061/mod02lec11.mp4">Thrust Required, Power Required: Cruise</option>
          <option  value="101104061/mod02lec12.mp4">Excess Thrust and Power: Climb Angle and Rate of Climb</option>
          <option  value="101104061/mod03lec13.mp4">Review</option>
          <option  value="101104061/mod03lec14.mp4">Thrust Required: A Closer Look</option>
          <option  value="101104061/mod03lec15.mp4">Modeling of CL: Dimensional Analysis</option>
          <option  value="101104061/mod03lec16.mp4">A Closer Look: Point Mass Model, Dimensional Analysis</option>
          <option  value="101104061/mod03lec17.mp4">Estimation of Drag Polar Through Flight Test</option>
          <option  value="101104061/mod03lec18.mp4">Estimation of Rate of Climb</option>
          <option  value="101104061/mod04lec19.mp4">Revision.</option>
          <option  value="101104061/mod04lec20.mp4">Range and Endurance</option>
          <option  value="101104061/mod04lec21.mp4">Range and Endurance: Continued...</option>
          <option  value="101104061/mod04lec22.mp4">Gliding Flight</option>
          <option  value="101104061/mod04lec23.mp4">Accelerated Flight</option>
          <option  value="101104061/mod04lec24.mp4">V-n Diagram</option>
          <option  value="101104061/mod05lec25.mp4">Revision..</option>
          <option  value="101104061/mod05lec26.mp4">V stall: Cruise and Manoeuvre</option>
          <option  value="101104061/mod05lec27.mp4">Flaps:High Lift Devices to Reduce Take off / Landing Distance</option>
          <option  value="101104061/mod05lec28.mp4">Take off: Warm-up Lecture</option>
          <option  value="101104061/mod05lec29.mp4">Take off Performance</option>
          <option  value="101104061/mod05lec30.mp4">Take off Performance:Continued...</option>
          <option  value="101104061/mod06lec31.mp4">Revision...</option>
          <option  value="101104061/mod06lec32.mp4">Landing Performance</option>
          <option  value="101104061/mod06lec33.mp4">Landing Performance: Continued...</option>
          <option  value="101104061/mod06lec34.mp4">Challanges in Takeoff and Landing: Single and Twin Engines</option>
          <option  value="101104061/mod06lec35.mp4">Introduction to Static Stability</option>
          <option  value="101104061/mod06lec36.mp4">Positioning of Center of Pressure for Static Stability</option>
          <option  value="101104061/mod07lec37.mp4">Revision.....</option>
          <option  value="101104061/mod07lec38.mp4">Stability and Control: Designers Perspective</option>
          <option  value="101104061/mod07lec39.mp4">Stability and Control: Designers Perspective Continued...</option>
          <option  value="101104061/mod07lec40.mp4">Longitudinal Control: Elevator</option>
          <option  value="101104061/mod07lec41.mp4">Contribution of Wing and Tail: Stability</option>
          <option  value="101104061/mod07lec42.mp4">Stability: Wing and Tail Contribution</option>
          <option  value="101104061/mod08lec43.mp4">Control: Elevator</option>
          <option  value="101104061/mod08lec44.mp4">Control: Delta-e Required</option>
          <option  value="101104061/mod08lec45.mp4">Control: Delta-e Required continued...</option>
          <option  value="101104061/mod08lec46.mp4">Design Basics: Wing Loading & Thrust Loading</option>
          <option  value="101104061/mod08lec47.mp4">Design Basics: Sweep & Dihedral</option>
          <option  value="101104061/mod08lec48.mp4">Revision .</option>
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
