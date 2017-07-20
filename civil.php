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
<title>Civil</title>
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

	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101005</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Soil Dynamics</strong></td>
	<td><strong>Dr. Deepankar Choudhury</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105101005/mod01lec01.mp4">L1-Introduction</option>
      
      <option  value="105101005/mod02lec02.mp4">L2-Degrees of Freedom, SDOF System, Types of Vibrations</option>
      
      <option  value="105101005/mod02lec03.mp4">L3-SDOF System, Types of Vibrations, Free Vibration</option>
      
      <option  value="105101005/mod02lec04.mp4">L4-Problems on Tortional Motion</option>
      
      <option  value="105101005/mod02lec05.mp4">L5-Damped Free Vibrations</option>
      
      <option  value="105101005/mod02lec06.mp4">L6-Damped Free Vibrations, Definition of Critical Damping and problems</option>
      
      <option  value="105101005/mod02lec07.mp4">L7-Decay of Motion</option>
      
      <option  value="105101005/mod02lec08.mp4">L8-Forced Vibrations, Dynamic Magnification Factor</option>
      
      <option  value="105101005/mod02lec09.mp4">L9-Maxwells Diagram of DMF, Discussion on Phase</option>
      
      <option  value="105101005/mod02lec10.mp4">L10-Transmissibility Ratio, Response to Arbitrary, Step and Pulse Excitations</option>
      
      <option  value="105101005/mod02lec11.mp4">L11-Response to Arbitrary, Step and Pulse Excitations, Response to Impact Load</option>
      
      <option  value="105101005/mod02lec12.mp4">L12-Vibration Isolation, Vibrations Measuring Instruments</option>
      
      <option  value="105101005/mod02lec13.mp4">L13-Solutions of Quiz Questions, Multi-Degree of Freedom (MDOF) Systems</option>
      
      <option  value="105101005/mod02lec14.mp4">L14-(MDOF) System : Equation of Motion, Longitudinal Waves in an Infinitely long rod</option>
      
      <option  value="105101005/mod03lec15.mp4">L15-3 Dimensional Wave Propagation, Waves in semi-infinite media, Rayleigh Wave</option>
      
      <option  value="105101005/mod03lec16.mp4">L16-Love Wave, Waves in layered medium, 3D case-Inclined wave, Earthquake Waves</option>
      
      <option  value="105101005/mod03lec17.mp4">L17-Earthquake Waves; P-waves, S-waves, 3 circle method, Estimation of Earthquake Epicentre</option>
      
      <option  value="105101005/mod04lec18.mp4">L18-Stresses in Soil Element, Field Tests, Seismic Reflection Test</option>
      
      <option  value="105101005/mod04lec19.mp4">L19-Seismic Refraction Test, SASW Test, Laboratory & Model Tests</option>
      
      <option  value="105101005/mod04lec20.mp4">L20-Centrifuge Tests Stress Strain Behavior of Cyclically Loaded Soils</option>
      
      <option  value="105101005/mod04lec21.mp4">L21-Estimation of Gmax, Modulus Reduction Curves, Variation of Damping Ratio, Cyclic Plate load Test</option>
      
      <option  value="105101005/mod04lec22.mp4">L22-Liquefaction, Preliminary sceening, Simplified Procedure for Liquefaction</option>
      
      <option  value="105101005/mod04lec23.mp4">L23-Cyclic Stress Ratio, Evaluation of CRR, Correction Factors, Corrections for SPT</option>
      
      <option  value="105101005/mod04lec24.mp4">L24-Becker Penetrometer Test (BPT), Cone Penetrometer Test (CPT), SPT v BPT, SASW Test</option>
      
      <option  value="105101005/mod05lec25.mp4">L25-Types of Machine Foundations, Methods of Analysis, Design of Machine Foundations as per IS:2974 (Part-1)-1969</option>
      
      <option  value="105101005/mod05lec26.mp4">L26-Tschebotarioff's </option>
      
      <option  value="105101005/mod05lec27.mp4">L27-Problem on Tschebotarioff's method contd., Mass-Spring-Dashpot (MSD) Model</option>
      
      <option  value="105101005/mod05lec28.mp4">L28-MSD Model- Yawing mode of Vibration, Use of MSD model for analysis</option>
      
      <option  value="105101005/mod05lec29.mp4">L29-Problems on Use of MSD Model for Analysis, Rocking mode of Vibrations</option>
      
      <option  value="105101005/mod05lec30.mp4">L30-Torsional Mode/Yawing Mode, Constant Force type excitation, EHS Theory</option>
      
      <option  value="105101005/mod05lec31.mp4">L31-EHS Theory, Vibrational Control</option>
      
      <option  value="105101005/mod05lec32.mp4">L32-Use of EHS Theory for analysis</option>
      
      <option  value="105101005/mod05lec33.mp4">L33-Use of EHS Theory for analysis II</option>
      
      <option  value="105101005/mod06lec34.mp4">L34-Liquefaction mitigation methods,Vibro Compaction,Densification Techniques</option>
      
      <option  value="105101005/mod06lec35.mp4">L35-Soil Improvement methods,Dynamic Compaction,Reinforcement Techniques</option>
      
      <option  value="105101005/mod07lec36.mp4">L36-Force-based Analysis,Dynamic analysis using MSD model</option>
      
      <option  value="105101005/mod07lec37.mp4">L37-Behaviour of Subgrade Soil below Rail Track</option>
      
      <option  value="105101005/mod07lec38.mp4">L38-Quiz</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101006</strong></td>
	<td><strong>Civil Engineering </strong></td>
	<td><strong>Structural Dynamics</strong></td>
	<td><strong>Dr. P. Banerji</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="105101006/mod01lec01.mp4">L1-Introduction                                                                                   </option>
<option  value="105101006/mod01lec02.mp4">L2-Inverse Power Method                                                                           </option>
<option  value="105101006/mod01lec03.mp4">L3-Dynamics of SDOF Structure                                                                     </option>
<option  value="105101006/mod01lec04.mp4">L4-SDOF Response to Harmonic Loads                                                                </option>
<option  value="105101006/mod01lec05.mp4">L5-Response of SDOF Structure to Harmonic Loading                                                 </option>
<option  value="105101006/mod01lec06.mp4">L6-Response to Harmonic Loading                                                                   </option>
<option  value="105101006/mod01lec07.mp4">L7-Response to Harmonic Loading(continue..)                                                       </option>
<option  value="105101006/mod01lec08.mp4">L8-Transmissibility & Base Isolation                                                              </option>
<option  value="105101006/mod01lec09.mp4">L9-Dynamic Characteristics & Periodic Loading                                                     </option>
<option  value="105101006/mod01lec10.mp4">L10-Pulse Loading                                                                                 </option>
<option  value="105101006/mod01lec11.mp4">L11-Pulse Load Response Characteristics & Impulse Loading                                         </option>
<option  value="105101006/mod01lec12.mp4">L12-Frequency Domain Response Analysis                                                            </option>
<option  value="105101006/mod01lec13.mp4">L13-Methods of Analysis for General Loading                                                       </option>
<option  value="105101006/mod01lec14.mp4">L14-Numerical Analysis of Response of Single Degree of Freedom Structure & Time Domain Approaches </option>
<option  value="105101006/mod01lec15.mp4">L15-Response Analysis of Single Degree of Freedom System for Earthquake Loads                     </option>
<option  value="105101006/mod01lec16.mp4">L16-Earthquake Response Analysis for Single Degree of Freedom Structures                          </option>
<option  value="105101006/mod01lec17.mp4">L17-Generalized Single Degree of Freedom Systems Equations of Motions                             </option>
<option  value="105101006/mod01lec18.mp4">L18-Generalized Single Degree of Freedom Systems Equations of Motions                             </option>
<option  value="105101006/mod01lec19.mp4">L19-Generalized Single Degree of Freedom Systems Equations of Motions                             </option>
<option  value="105101006/mod01lec20.mp4">L20-Generalized Single Degree of Freedom Systems Equations of Motion & Free Vibrations            </option>
<option  value="105101006/mod01lec21.mp4">L21-Equations of Motion for Multi Degree of Freedom Structures                                    </option>
<option  value="105101006/mod01lec22.mp4">L22-Equations of Motion for Multi Degree of Freedom Systems                                       </option>
<option  value="105101006/mod01lec23.mp4">L23-Multi Degree of Freedom Structure Equations of Motions                                        </option>
<option  value="105101006/mod01lec24.mp4">L24-Multi Degree of Freedom Structure Equations of Motions & Free Vibration                       </option>
<option  value="105101006/mod01lec25.mp4">L25-Free Vibration for Multi Degree of Freedom Structures                                         </option>
<option  value="105101006/mod01lec26.mp4">L26-Free Vibration for Multi Degree of Freedom Structures                                         </option>
<option  value="105101006/mod01lec27.mp4">L27-Practical Free Vibration Analysis                                                             </option>
<option  value="105101006/mod01lec28.mp4">L28-Dynamic Response of Multi Degree of Freedom Systems                                           </option>
<option  value="105101006/mod01lec29.mp4">L29-Dynamic Response of Multi Degree of Freedom Structures                                        </option>
<option  value="105101006/mod01lec30.mp4">L30-Damping for Multi Degree of Freedom Structures                                                </option>
<option  value="105101006/mod01lec31.mp4">L31-Earthquake Response of Multi Degree of Freedom Structures                                     </option>
<option  value="105101006/mod01lec32.mp4">L32-Earthquake Response of Multi Degree of Freedom Structures                                     </option>
<option  value="105101006/mod01lec33.mp4">L33-Dynamic Analysis of Buildings                                                                 </option>
<option  value="105101006/mod01lec34.mp4">L34-Introduction to Dynamics of Continuous Systems                                                </option>
<option  value="105101006/mod01lec35.mp4">L35-Free Vibration Response of Continuous Systems                                                 </option>
<option  value="105101006/mod01lec36.mp4">L36-Free Vibration & Dynamic Response of Continuous Systems                                       </option>
<option  value="105101006/mod01lec37.mp4">L37-Dynamic Response of Continuous Systems                                                        </option>
<option  value="105101006/mod01lec38.mp4">L38-Examples for Dynamic Response of Continuous Systems                                           </option>


	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105101008</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Traffic Engineering & Management</strong></td>
	<td><strong>Dr. Tom V Mathew</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105101008/511_FundParams/point1/point.html">Lecture 01 : Fundamental parameters of traffic flow</option>
      
      <option  value="105101008/512_FundRel/point1/point.html">Lecture 02 : Fundamental relations of traffic flow</option>
      
      <option  value="105101008/513_TrStream/point1/point.html">Lecture 03 : Traffic Stream Models</option>
      
      <option  value="105101008/514_MovObs/point1/point.html">Lecture 04 : Moving observer method</option>
      
      <option  value="105101008/521_TrVolume/point1/point.html">Lecture 05 : Measurement at a point</option>
      
      <option  value="105101008/522_TrSpeed/point1/point.html">Lecture 06 : Measurement over a Short Section </option>
      
      <option  value="105101008/523_TrDensity/point1/point.html">Lecture 07 : Measurement Along a Length of Road </option>
      
      <option  value="105101008/524_AutoMer/point1/point.html">Lecture 08 : Automated Traffic Measurement </option>
      
      <option  value="105101008/525_AutoLoop/point1/point.html">Lecture 09 : Intrusive Technologies </option>
      
      <option  value="105101008/526_AutoVideo/point1/point.html">Lecture 10 : Non-Intrusive Technologies </option>
      
      <option  value="105101008/527_AutoGPS/point1/point.html">Lecture 11 : Travel Time Data Collection </option>
      
      <option  value="105101008/531_HwayModel/point1/point.html">Lecture 12 : Vehicle Arrival Models: Headway </option>
      
      <option  value="105101008/532_ArrModel/point1/point.html">Lecture 13 : Vehicle Arrival Models: Count </option>
      
      <option  value="105101008/533_CarFol/point1/point.html">Lecture 14 : Car Following Models </option>
      
      <option  value="105101008/534_LaneChange/point1/point.html">Lecture 15 : Lane Changing Models </option>
      
      <option  value="105101008/535_TrSim/point1/point.html">Lecture 16 : Microscopic Traffic Simulation </option>
      
      <option  value="105101008/541_Macro/point1/point.html">Lecture 17 : Traffic Flow Modeling Analogies </option>
      
      <option  value="105101008/542_CellTrans/point1/point.html">Lecture 18 : Cell Transmission Models </option>
      
      <option  value="105101008/543_TrProg/point1/point.html">Lecture 19 : Traffic Progression Models </option>
      
      <option  value="105101008/544_TrCA/point1/point.html">Lecture 20 : Discrete Simulation Models </option>
      
      <option  value="105101008/551_CapLOS/point1/point.html">Lecture 21 : Capacity and Level of Service LOS </option>
      
      <option  value="105101008/552_UrStreet/point1/point.html">Lecture 22 : Urban Streets </option>
      
      <option  value="105101008/553_MlHway/point1/point.html">Lecture 23 : Multilane Highways </option>
      
      <option  value="105101008/554_Freeway/point1/point.html">Lecture 24 : Freeway Operations </option>
      
      <option  value="105101008/555_Ramp/point1/point.html">Lecture 25 : Ramp Metering </option>
      
      <option  value="105101008/556_Corridor/point1/point.html">Lecture 26 : Corridor Analysis </option>
      
      <option  value="105101008/561_TrCtrl/point1/point.html">Lecture 27 : Principles of Traffic Control </option>
      
      <option  value="105101008/562_TrSigns/point1/point.html">Lecture 28 : Traffic Signs </option>
      
      <option  value="105101008/563_RdMark/point1/point.html">Lecture 29 : Road Markings </option>
      
      <option  value="105101008/564_UnCotrl/point1/point.html">Lecture 30 : Uncontrolled Intersection </option>
      
      <option  value="105101008/565_Channel/point1/point.html">Lecture 31 : Channelization </option>
      
      <option  value="105101008/566_Rotary/point1/point.html">Lecture 32 : Traffic Rotary </option>
      
      <option  value="105101008/567_Grade/point1/point.html">Lecture 33 : Grade Separated Intersection </option>
      
      <option  value="105101008/571_TrSignal/point1/point.html">Lecture 34 : Design Principles of Traffic Signal </option>
      
      <option  value="105101008/572_Delay_A/point1/point.html">Lecture 35 : Evaluation of a Traffic Signal: Delay Models</option>
      
      <option  value="105101008/573_SignalDes/point1/point.html">Lecture 36 : Design Principles of a Traffic Signal </option>
      
      <option  value="105101008/574_SignalLos/point1/point.html">Lecture 37 : Capacity and Los Analysis of a Signalized I/S </option>
      
      <option  value="105101008/575_CoordSignalA/point1/point.html">Lecture 38 : Coordinated Traffic Signal </option>
      
      <option  value="105101008/576_VAS/point1/point.html">Lecture 39 : Vehicle Actuated Signals </option>
      
      <option  value="105101008/577_ATC_A/point1/point.html">Lecture 40 : Area Traffic Control </option>
      
      <option  value="105101008/581_Parking/point1/point.html">Lecture 41 : Parking Studies </option>
      
      <option  value="105101008/582_Accident/point1/index.html">Lecture 42 : Accident Studies </option>
      
      <option  value="105101008/583_FuelEmi/point1/point.html">Lecture 43 : Fuel Consumption and Emission Studies </option>
      
      <option  value="105101008/584_Congestion/point1/point.html">Lecture 44 : Congestion Studies </option>
      
      <option  value="105101008/585_Queuing/point1/point.html">Lecture 45 : Queuing Analysis </option>
      
      <option  value="105101008/586_Tolling/point1/point.html">Lecture 46 : Toll Operation </option>
      
      <option  value="105101008/587_Pedestrian/point1/point.html">Lecture 47 : Pedestrian Studies </option>
      
      <option  value="105101008/591_ITS_1/point1/point.html">Lecture 48 : Intelligent Transportation System - I </option>
      
      <option  value="105101008/592_ITS_2/point1/point.html">Lecture 49 : Intelligent Transportation System - II </option>
      
      <option  value="105101008/593_ITS_3/point1/point.html">Lecture 50 : Advanced ITS </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101010</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Watershed Management</strong></td>
	<td><strong>Dr. T.I. Eldho</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105101010/mod01lec01.mp4">L1-Introduction to Watershed Management</option>
      
      <option  value="105101010/mod01lec02.mp4">L2-Watershed Management & Stakeholder Analysis</option>
      
      <option  value="105101010/mod01lec03.mp4">L3-Watershed Management Policies</option>
      
      <option  value="105101010/mod02lec04.mp4">L4-Sustainable Watershed Management</option>
      
      <option  value="105101010/mod02lec05.mp4">L5-Agricultural Practices & Watershed Management</option>
      
      <option  value="105101010/mod02lec06.mp4">L6-Soil Erosion & Conservation</option>
      
      <option  value="105101010/mod02lec07.mp4">L7-Watershed Management in Arid Regions & Strategic Planning</option>
      
      <option  value="105101010/mod03lec08.mp4">L8-Integrated Water Resources Management</option>
      
      <option  value="105101010/mod03lec09.mp4">L9-Conjuctive Use of Water Resources</option>
      
      <option  value="105101010/mod03lec10.mp4">L10-Rainwater Harvesting System</option>
      
      <option  value="105101010/mod03lec11.mp4">L11-Rainwater Harvesting & Roof Catchment System</option>
      
      <option  value="105101010/mod04lec12.mp4">L12-Watershed Characteristics</option>
      
      <option  value="105101010/mod04lec13.mp4">L13-Watershed Delineation & Modeling</option>
      
      <option  value="105101010/mod04lec14.mp4">L14-Hydrologic Processes</option>
      
      <option  value="105101010/mod04lec15.mp4">L15-Watershed Modeling</option>
      
      <option  value="105101010/mod04lec16.mp4">L16-Hydrologic Modeling</option>
      
      <option  value="105101010/mod04lec17.mp4">L17-Numerical Watershed Modeling</option>
      
      <option  value="105101010/mod04lec18.mp4">L18-Subsurface & Groundwater Flows</option>
      
      <option  value="105101010/mod05lec19.mp4">L19-Social & Community Aspects of Watershed Management</option>
      
      <option  value="105101010/mod05lec20.mp4">L20-Socio-economy, Private Sector Participation & Gender Issues</option>
      
      <option  value="105101010/mod05lec21.mp4">L21-Integrated Development, Water Legislation & Implementation Issues</option>
      
      <option  value="105101010/mod06lec22.mp4">L22-GIS & Applications in Watershed Management</option>
      
      <option  value="105101010/mod06lec23.mp4">L23-Remote Sensing & Applications in Watershed Management</option>
      
      <option  value="105101010/mod06lec24.mp4">L24-Decision Support Systems & Applications in Watershed Management</option>
      
      <option  value="105101010/mod06lec25.mp4">L25-Integrated Watershed Modeling Using Numerical Methods, GIS & Remote Sensing</option>
      
      <option  value="105101010/mod06lec26.mp4">L26-Applications of Knowledge Based Models in Watershed Management</option>
      
      <option  value="105101010/mod07lec27.mp4">L27-Surface Water Quality & Pollution Issues</option>
      
      <option  value="105101010/mod07lec28.mp4">L28-Groundwater Pollution Problems & Transport Processes</option>
      
      <option  value="105101010/mod07lec29.mp4">L29-Water Quality Modeling</option>
      
      <option  value="105101010/mod07lec30.mp4">L30-Environmental Guidelines for Water Quality Management</option>
      
      <option  value="105101010/mod08lec31.mp4">L31-Storm Water Management</option>
      
      <option  value="105101010/mod08lec32.mp4">L32-Urban Drainage System</option>
      
      <option  value="105101010/mod08lec33.mp4">L33-Flood Routing</option>
      
      <option  value="105101010/mod08lec34.mp4">L34-Flood Control & Management</option>
      
      <option  value="105101010/mod09lec35.mp4">L35-Drought Assessment</option>
      
      <option  value="105101010/mod09lec36.mp4">L36-Drought Analysis</option>
      
      <option  value="105101010/mod09lec37.mp4">L37-Drought Mitigation</option>
      
      <option  value="105101010/mod10lec38.mp4">L38-Water Conservation</option>
      
      <option  value="105101010/mod10lec39.mp4">L39-Water Recycling</option>
      
      <option  value="105101010/mod10lec40.mp4">L40-Water Reclaimation & Reuse</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101082</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Fluid Mechanics</strong></td>
	<td><strong>Dr. T.I. Eldho</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105101082/lec01.mp4">Fluid Mechanics</option>
      
      <option  value="105101082/lec02.mp4">Fundamental Concepts of Fluid Flow & Fluid Statics</option>
      
      <option  value="105101082/lec03.mp4">Fluid Statics</option>
      
      <option  value="105101082/lec04.mp4">Fluid Statics</option>
      
      <option  value="105101082/lec05.mp4">Fluid Statics</option>
      
      <option  value="105101082/lec06.mp4">Kinematics of Fluid Flow</option>
      
      <option  value="105101082/lec07.mp4">Kinematics of Fluid Flow</option>
      
      <option  value="105101082/lec08.mp4">Kinematics of Fluid Flow</option>
      
      <option  value="105101082/lec09.mp4">Kinematics of Fluid Flow</option>
      
      <option  value="105101082/lec10.mp4">Kinematics of Fluid Flow</option>
      
      <option  value="105101082/lec11.mp4">Kinematics & Dynamics of Fluid Flow</option>
      
      <option  value="105101082/lec12.mp4">Dynamics of Fluid Flow</option>
      
      <option  value="105101082/lec13.mp4">Dynamics of Fluid Flow</option>
      
      <option  value="105101082/lec14.mp4">Dynamics of Fluid Flow</option>
      
      <option  value="105101082/lec15.mp4">Dynamics of Fluid Flow</option>
      
      <option  value="105101082/lec16.mp4">Dynamics of Fluid Flow</option>
      
      <option  value="105101082/lec17.mp4">Laminar and Turbulent Flows</option>
      
      <option  value="105101082/lec18.mp4">Laminar and Turbulent Flows</option>
      
      <option  value="105101082/lec19.mp4">Laminar and Turbulent Flows</option>
      
      <option  value="105101082/lec20.mp4">Laminar and Turbulent Flows</option>
      
      <option  value="105101082/lec21.mp4">Laminar and Turbulent Flows</option>
      
      <option  value="105101082/lec22.mp4">Laminar and Turbulent Flows</option>
      
      <option  value="105101082/lec23.mp4">Dimensional Analysis</option>
      
      <option  value="105101082/lec24.mp4">Dimensional Analysis</option>
      
      <option  value="105101082/lec25.mp4">Dimensional Analysis</option>
      
      <option  value="105101082/lec26.mp4">Navier-Stocks Equations and Applications</option>
      
      <option  value="105101082/lec27.mp4">Navier-Stocks Equations and Applications</option>
      
      <option  value="105101082/lec28.mp4">Navier-Stocks Equations and Applications</option>
      
      <option  value="105101082/lec29.mp4">Navier-Stocks Equations and Applications</option>
      
      <option  value="105101082/lec30.mp4">Boundary Layer Theory and Applications</option>
      
      <option  value="105101082/lec31.mp4">Boundary Layer Theory and Applications</option>
      
      <option  value="105101082/lec32.mp4">Boundary Layer Theory and Applications</option>
      
      <option  value="105101082/lec33.mp4">Boundary Layer Theory and Applications</option>
      
      <option  value="105101082/lec34.mp4">Boundary Layer Theory and Applications</option>
      
      <option  value="105101082/lec35.mp4">Boundary Layer Theory and Applications</option>
      
      <option  value="105101082/lec36.mp4">Pipe Flow Systems</option>
      
      <option  value="105101082/lec37.mp4">Pipe Flow Systems</option>
      
      <option  value="105101082/lec38.mp4">Pipe Flow Systems</option>
      
      <option  value="105101082/lec39.mp4">Pipe Flow Systems</option>
      
      <option  value="105101082/lec40.mp4">Pipe Flow Systems</option>
      
      <option  value="105101082/lec41.mp4">Pipe Flow Systems</option>
      
      <option  value="105101082/lec42.mp4">Pipe Flow Systems</option>
          </select></td>
        
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101143</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Geosynthetics Engineering: In Theory and Practice</strong></td>
	<td><strong>Prof. J. N. Mandal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
     <option  value="105101143/mod01lec01.mp4">Lecture 1 : Introduction</option>
 <option  value="105101143/mod01lec02.mp4">Lecture 2 : Introduction to Reinforced Earth</option>
 <option  value="105101143/mod01lec03.mp4">Lecture 3 : Introduction to Reinforced Earth </option>
 <option  value="105101143/mod01lec04.mp4">Lecture 4 : Introduction to Reinforced Earth </option>
 <option  value="105101143/mod01lec05.mp4">Lecture 5 : Introduction to Reinforced Earth.</option>
 <option  value="105101143/mod01lec06.mp4">Lecture 6 : An Overview of Gosynthetics</option>
 <option  value="105101143/mod01lec07.mp4">Lecture 7 : An Overview Geosynthetics Part II</option>
 <option  value="105101143/mod01lec08.mp4">Lecture 8 : An Overview of Geosynthetics Part III</option>
 <option  value="105101143/mod01lec09.mp4">Lecture 9 : An Overview of Gosynthetics</option>
 <option  value="105101143/mod01lec10.mp4">Lecture 10 : Geosynthetic Properties and Test Methods </option>
 <option  value="105101143/mod01lec11.mp4">Lecture 11 : Geosynthetic Properties and Test Methods</option>
 <option  value="105101143/mod01lec12.mp4">Lecture 12 : Geosynthetic Properties and Test Methods</option>
 <option  value="105101143/mod01lec13.mp4">Lecture 13 : Geosynthetic Properties and Test Methods</option>
 <option  value="105101143/mod01lec14.mp4">Lecture 14 : Geosynthetic Properties and Test Methods</option>
 <option  value="105101143/mod01lec15.mp4">Lecture 15 : Geosynthetic in Filtration,  Drainage and Erosion Control</option>
 <option  value="105101143/mod01lec16.mp4">Lecture 16 : Geosynthetic in Filtration,  Drainage and Erosion Control </option>
 <option  value="105101143/mod01lec17.mp4">Lecture 17 : Geosynthetic in Filtration,  Drainage and Erosion Control </option>
 <option  value="105101143/mod01lec18.mp4">Lecture 18 : Geosynthetic in Filtration,  Drainage and Erosion Control </option>
 <option  value="105101143/mod01lec19.mp4">Lecture 19 : Geosynthetic in Filtration,  Drainage and Erosion Control </option>
 <option  value="105101143/mod01lec20.mp4">Lecture 20 : Geosynthetic in pavements</option>
 <option  value="105101143/mod01lec21.mp4">Lecture 21 : Geosynthetic in pavements </option>
 <option  value="105101143/mod01lec22.mp4">Lecture 22 : Geosynthetic in pavements </option>
 <option  value="105101143/mod01lec23.mp4">Lecture 23 : Geosynthetic in pavements </option>
 <option  value="105101143/mod01lec24.mp4">Lecture 24 : Geosynthetic in pavements </option>
 <option  value="105101143/mod01lec25.mp4">Lecture 25 : Geosynthetic in pavements </option>
 <option  value="105101143/mod01lec26.mp4">Lecture 26 : Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec27.mp4">Lecture 27 : Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec28.mp4">Lecture 28 : Geosynthetics for Reinfroced Soil Retaining Walls</option>
 <option  value="105101143/mod01lec29.mp4">Lecture 29 : Geosynthetics for Reinforced Soil Retaining Walls</option>
 <option  value="105101143/mod01lec30.mp4">Lecture 30: Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec31.mp4">Lecture 31: Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec32.mp4">Lecture 32: Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec33.mp4">Lecture 33: Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec34.mp4">Lecture 34: Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec35.mp4">Lecture 35: Geosynthetics for Reinforced Soil Retaining Walls </option>
 <option  value="105101143/mod01lec36.mp4">Lecture 36 : Geosynthetic for Steep Slopes</option>
 <option  value="105101143/mod01lec37.mp4">Lecture 37 : Geosynthetic for Steep Slopes </option>
 <option  value="105101143/mod01lec38.mp4">Lecture 38 : Geosynthetic for Steep Slopes </option>
 <option  value="105101143/mod01lec39.mp4">Lecture 39 : Geosynthetic for Steep Slopes </option>
 <option  value="105101143/mod01lec40.mp4">Lecture 40 : Geosynthetic for Embankments on Soft Foundations</option>
 <option  value="105101143/mod01lec41.mp4">Lecture 41 : Geosynthetic for Embankments on Soft Foundations</option>
 <option  value="105101143/mod01lec42.mp4">Lecture 42 : Geosynthetic for Embankments on Soft Foundations</option>
 <option  value="105101143/mod01lec43.mp4">Lecture 43 : Geosynthetic for Ground Improvement </option>
 <option  value="105101143/mod01lec44.mp4">Lecture 44 : Geosynthetic for Ground Improvement</option>
 <option  value="105101143/mod01lec45.mp4">Lecture 45 : Geosynthetic for Ground Improvement</option>
 <option  value="105101143/mod01lec46.mp4">Lecture 46 : Geosynthetic for Ground Improvement</option>
 <option  value="105101143/mod01lec47.mp4">Lecture 47 : Geosynthetic for Ground Improvement</option>
 <option  value="105101143/mod01lec48.mp4">Lecture 48 : Geosynthetic for Ground Improvement</option>
 <option  value="105101143/mod01lec49.mp4">Lecture 49 : Geosynthetic for Ground Improvement</option>
 <option  value="105101143/mod01lec50.mp4">Lecture 50 : Geosynthetic for Improvement in Bearing Capacity </option>
 <option  value="105101143/mod01lec51.mp4">Lecture 51 : Designing with Geotextile Tube </option>
 <option  value="105101143/mod01lec52.mp4">Lecture 52 : Designing with Geotextile Tube</option>
 <option  value="105101143/mod01lec53.mp4">Lecture 53 : Design of Geosynthetic for Landfills</option>
 <option  value="105101143/mod01lec54.mp4">Lecture 54 : Design of Geosynthetic for Landfills</option>
 <option  value="105101143/mod01lec55.mp4">Lecture 55 : Design of Geosynthetic for  Landfill</option>
 <option  value="105101143/mod01lec56.mp4">Lecture 56 : Design of Geosynthetic for  Landfill</option>
 <option  value="105101143/mod01lec57.mp4">Lecture 57 : Design of Geosynthetic for  Landfill</option>
 <option  value="105101143/mod01lec58.mp4">Lecture 58 : Designing With Geofoam</option>
 <option  value="105101143/mod01lec59.mp4">Lecture 59 : Designing With Geofoam</option>
 <option  value="105101143/mod01lec60.mp4">Lecture 60 : Designing With Geofoam</option>
 <option  value="105101143/mod01lec61.mp4">Lecture 61 : Designing With Geofoam</option>
 <option  value="105101143/mod01lec62.mp4">Lecture 62 : Designing With Geofoam</option>
 <option  value="105101143/mod01lec63.mp4">Lecture 63 : Designing With Geofoam</option>


          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105102012</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Concrete Technology</strong></td>
	<td><strong>Dr. B. Bhattacharjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="105102012/mod01lec01.mp4">Production and Composition</option>
 <option  value="105102012/mod01lec02.mp4">Structure and Hydration</option>
 <option  value="105102012/mod01lec03.mp4">Structure and Hydration.</option>
 <option  value="105102012/mod01lec04.mp4">Properties and Tests</option>
 <option  value="105102012/mod01lec05.mp4">Types and Use</option>
 <option  value="105102012/mod02lec06.mp4">Aggregates (Size , Shape)</option>
 <option  value="105102012/mod02lec07.mp4">Packing, FM,SM</option>
 <option  value="105102012/mod02lec08.mp4">Properties</option>
 <option  value="105102012/mod03lec09.mp4">Chemical Admixtures</option>
 <option  value="105102012/mod03lec10.mp4">Chemical Admixtures.</option>
 <option  value="105102012/mod03lec11.mp4">Mineral Admixtures</option>
 <option  value="105102012/mod03lec12.mp4">Mineral Admixtures.</option>
 <option  value="105102012/mod03lec13.mp4">Mineral Admixtures..</option>
 <option  value="105102012/mod04lec14.mp4">Mix Proportioning of Concrete: General Principles</option>
 <option  value="105102012/mod04lec15.mp4">Mix design of Concrete: General and IS Method</option>
 <option  value="105102012/mod04lec16.mp4">Mix Design of Concrete:Is Example and British (DOE) Method</option>
 <option  value="105102012/mod04lec17.mp4">Mix Design of concrete: ACI 211 Method</option>
 <option  value="105102012/mod04lec18.mp4">Mix Design of concrete:Packing Density, Rheology</option>
 <option  value="105102012/mod05lec19.mp4">Batching and Mixing of concrete: General Principles</option>
 <option  value="105102012/mod05lec20.mp4">RMC and Transporting Concrete</option>
 <option  value="105102012/mod05lec21.mp4">Workability and Pumping of Concrete</option>
 <option  value="105102012/mod05lec22.mp4">Compaction and Curing Concrete</option>
 <option  value="105102012/mod06lec23.mp4">Strength of Concrete: Factors Affecting</option>
 <option  value="105102012/mod06lec24.mp4">Strength of Concrete: Aggregate Contribution</option>
 <option  value="105102012/mod06lec25.mp4">Strength of Concrete: Factors Affecting Test Results</option>
 <option  value="105102012/mod06lec26.mp4">Mechanical Properties of Concrete:Elastic Moduls, Poision'Ratio,Fatigue, Impact</option>
 <option  value="105102012/mod07lec27.mp4">Creep of Concrete</option>
 <option  value="105102012/mod07lec28.mp4">Creep and Shrinkage of Concrete</option>
 <option  value="105102012/mod07lec29.mp4">Shrinkage of Concrete</option>
 <option  value="105102012/mod07lec30.mp4">Shrinkage of Concrete.</option>
 <option  value="105102012/mod08lec31.mp4">Fundamental Concepts, Degradation Process, Attacks</option>
 <option  value="105102012/mod08lec32.mp4">Frost Action and Rebar Corrosion</option>
 <option  value="105102012/mod08lec33.mp4">Carbonation and Chloride Affect</option>
 <option  value="105102012/mod08lec34.mp4">Rebar Corrosion</option>
 <option  value="105102012/mod08lec35.mp4">Rebar Corrosion and General Strateggy</option>
 <option  value="105102012/mod09lec36.mp4">High Strength Concrete</option>
 <option  value="105102012/mod09lec37.mp4">High Strength Matrics and SCC</option>
 <option  value="105102012/mod09lec38.mp4">Self Compacting Concrete</option>
 <option  value="105102012/mod09lec39.mp4">Fiber Concrete</option>
 <option  value="105102012/mod09lec40.mp4">Fiber and Roller Compacted Concrete</option>
 <option  value="105102012/mod09lec41.mp4">Special  Concrete and Sustainability</option>

          </select></td>
	
	</tr>
	</form>
</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105102015</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>G.I.S in Civil Engineering</strong></td>
	<td><strong>Dr. A.K. Gosain</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>

<option value="105102015/module 1/introduction.pdf">Introduction to GIS                              </option>
<option value="105102015/module 1/history of gis.htm                                 ">History of GIS                                   </option>
<option value="105102015/module 1/early development in gis.htm                       ">Early development in GIS                         </option>
<option value="105102015/module 1/application of gis.htm                             ">Applications of GIS                              </option>
<option value="105102015/module 10/introduction.htm                                  ">Introduction                                     </option>
<option value="105102015/module 10/web gis.htm                                       ">Web GIS                                          </option>
<option value="105102015/module 10/ogc and web services.htm                          ">OGC and Web Services                             </option>
<option value="105102015/module 9/local methods of interpolation.htm                 ">Local Methods of Interpolation                   </option>
<option value="105102015/module 9/global methods of interpolation.htm                ">Global Methods of Interpolation                  </option>
<option value="105102015/module 9/introduction.htm                                   ">Interpolation                                    </option>
<option value="105102015/module 8/distribution map.htm                               ">Distribution Map                                 </option>
<option value="105102015/module 8/toposheet indexing.htm                             ">Toposheet Indexing                               </option>
<option value="105102015/module 8/datapresentation.htm                               ">Data Presentation                                </option>
<option value="105102015/module 8/mapelements.htm                                    ">Map Desigining                                   </option>
<option value="105102015/module 8/maplayout.htm                                      ">Map Layout                                       </option>
<option value="105102015/module 8/introduction.htm                                   ">introduction:Cartographic Principles             </option>
<option value="105102015/module 7/Raster data spatial analysis.htm                   ">Raster data spatial analysis                     </option>
<option value="105102015/module 7/Network Analysis.htm                               ">Network Analysis                                 </option>
<option value="105102015/module 7/Vector Operations and Analysis- Multiple Theme.htm ">Vector Operations and Analysis- Multiple Theme   </option>
<option value="105102015/module 7/Vector Operations and Analysis- Single Theme.htm   ">Vector Operations and Analysis- Single Theme     </option>
<option value="105102015/module 7/introduction.htm                                   ">introduction: Spatial analysis                   </option>
<option value="105102015/module 6/data editing.htm                                   ">Data Editing                                     </option>
<option value="105102015/module 6/secondary data.htm                                 ">Secondary Data                                   </option>
<option value="105102015/module 6/primary data.htm                                   ">Primary Data                                     </option>
<option value="105102015/module 5/geodatabase.htm                                    ">Geodatabase and Metadata                         </option>
<option value="105102015/module 5/raster data struture.htm                           ">Raster Data Structure                            </option>
<option value="105102015/module 5/Vector data structure.htm                          ">Vector Data Structure                            </option>
<option value="105102015/module 5/GIS data Model.htm                                 ">GIS Data Model                                   </option>
<option value="105102015/module 5/introduction.htm                                   ">introduction: Data Models and Data Structures    </option>
<option value="105102015/module 4/Normalization.htm                                  ">Normalization                                    </option>
<option value="105102015/module 4/datastructure and model.htm                        ">Database Structure Models                        </option>
<option value="105102015/module 4/entitydiagram.htm                                  ">Entity Relationship Model                        </option>
<option value="105102015/module 4/data base management structure.htm                 ">Database Management System                       </option>
<option value="105102015/module 4/data storage.htm                                   ">Data Storage                                     </option>
<option value="105102015/module 4/introduction.htm                                   ">introduction: Spatial DBMS                       </option>
<option value="105102015/module 3/geo referencing.htm                                ">Georeferencing                                   </option>
<option value="105102015/module 3/transformation.htm                                 ">Transformation                                   </option>
<option value="105102015/module 3/map projection.htm                                 ">Map Projection                                   </option>
<option value="105102015/module 3/cordinatsystem.htm                                 ">Coordinate System                                </option>
<option value="105102015/module 3/under standing earth.htm                           ">Understanding Earth                              </option>
<option value="105102015/module 2/Map and Globe.htm                                  ">Map and Globe                                    </option>
<option value="105102015/module 2/types of map.htm                                   ">Type of Maps                                     </option>
<option value="105102015/module 2/map scale.htm                                      ">Map Scale                                        </option>
<option value="105102015/module 2/history of maps.htm                                ">History of Maps                                  </option>
<option value="105102015/module 2/introduction.htm                                   ">intorduction :Map and Map Scale                  </option>
<option value="105102015/gis done/chapter 1/lab exe_1.htm                            ">Lab Exercise: introduction of GIS                </option>
<option value="105102015/gis done/chapter 3/lab exe_3.htm                            ">Lab Exercise : Georeferencing and Projection     </option>
<option value="105102015/gis done/chapter 4/lab exe_4.htm                            ">Lab Exercise: Spatial DBMS                       </option>
<option value="105102015/gis done/chapter 5/lab exe_5.htm                            ">Lab Exercise: Data models and Data structures    </option>
<option value="105102015/gis done/chapter 6/lab exe_6.htm                            ">Lab Exercise: Spatial data input and editing     </option>
<option value="105102015/gis done/chapter 7/lab exe_7.htm                            ">Lab Exercise: Spatial analysis                   </option>
<option value="105102015/gis done/chapter 8/lab exe_8.htm                            ">Lab Exercise: Cartographic principles and design </option>
<option value="105102015/gis done/chapter 9/lab exe_9.htm                            ">Lab Exercise: Interpolation                      </option>

</select></td>
	
	</tr>
	</form>

    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105102016</strong></td>
	<td><strong>Civil Engineering </strong></td>
	<td><strong>Seismic Analysis of Structures </strong></td>
	<td><strong>Dr. Ashok Gupta, Dr. T.K. Datta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="105102016/mod01lec01.mp4">Seismology                                                </option>
<option  value="105102016/mod01lec02.mp4">Seismology Contd.                                         </option>
<option  value="105102016/mod01lec03.mp4">Seismology Contd..                                        </option>
<option  value="105102016/mod01lec04.mp4">Seismology Contd...                                       </option>
<option  value="105102016/mod02lec05.mp4">Seismic Inputs                                            </option>
<option  value="105102016/mod02lec06.mp4">Seismic Inputs Contd.                                     </option>
<option  value="105102016/mod02lec07.mp4">Seismic Inputs Contd..                                    </option>
<option  value="105102016/mod02lec08.mp4">Seismic Inputs Contd....                                  </option>
<option  value="105102016/mod03lec09.mp4">Response Analysis for Specified Ground Motion             </option>
<option  value="105102016/mod03lec10.mp4">Response Analysis for Specified Ground Motion Contd.      </option>
<option  value="105102016/mod03lec11.mp4">Response Analysis for Specified Ground Motion Contd..     </option>
<option  value="105102016/mod03lec12.mp4">Response Analysis for Specified Ground Motion Contd....   </option>
<option  value="105102016/mod03lec13.mp4">Response Analysis for Specified Ground Motion Contd.....  </option>
<option  value="105102016/mod03lec14.mp4">Response Analysis for Specified Ground Motion Contd...... </option>
<option  value="105102016/mod04lec15.mp4">Frequency Domain Spectral Analysis                        </option>
<option  value="105102016/mod04lec16.mp4">Frequency Domain Spectral Analysis.                       </option>
<option  value="105102016/mod04lec17.mp4">Frequency Domain Spectral Analysis Contd...               </option>
<option  value="105102016/mod04lec18.mp4">Frequency Domain Spectral Analysis contd....              </option>
<option  value="105102016/mod04lec19.mp4">Frequency Domain Spectral Analysis contd.....             </option>
<option  value="105102016/mod05lec20.mp4">Response Spectrum Method of Analysis                      </option>
<option  value="105102016/mod05lec21.mp4">Response Spectrum Method of Analysis.                     </option>
<option  value="105102016/mod05lec22.mp4">Response Spectrum Method of Analysis Contd.               </option>
<option  value="105102016/mod05lec23.mp4">Response Spectrum Method of Analysis Contd...             </option>
<option  value="105102016/mod05lec24.mp4">Response Spectrum Method of Analysis Contd....            </option>
<option  value="105102016/mod06lec25.mp4">Inelastic Seismic Response of Structures                  </option>
<option  value="105102016/mod06lec26.mp4">Inelastic Seismic Response of Structures Contd.           </option>
<option  value="105102016/mod06lec27.mp4">Inelastic Seismic Response of Structures Contd...         </option>
<option  value="105102016/mod06lec28.mp4">Inelastic Seismic Response of Structures Contd.....       </option>
<option  value="105102016/mod06lec29.mp4">Inelastic Seismic Response of Structures Contd......      </option>
<option  value="105102016/mod06lec30.mp4">Inelastic Seismic Response of Structures Contd.......     </option>
	</tr>
	</form>
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103026</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Ground Water Hydrology</strong></td>
	<td><strong>Dr. Rajib K. Bhattacharjya</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="105103026/module1/index.html">Introduction to groundwater hydrology 1</option>
 <option  value="105103026/module1/lec2/1.html">Introduction to groundwater hydrology 2</option>
 <option  value="105103026/module2/lec3/1.html">Darcy’s law</option>
 <option  value="105103026/module2/lec4/1.html">Extension of Darcy’s Law</option>
 <option  value="105103026/module2/lec5/1.html">Equivalent Hydraulic Conductivity</option>
 <option  value="105103026/module2/lec6/1.html">Aquifer Transmissivity</option>
 <option  value="105103026/module2/lec7/1.html">Storage coefficients</option>
 <option  value="105103026/module2/lec8/1.html">Dupuit Approximation for Phreatic Aquifer </option>
 <option  value="105103026/module2/lec9/1.html">Flow through unconfined horizontal stratified aquifer</option>
 <option  value="105103026/module2/lec10/1.html">Governing equation for flow through porous medium </option>
 <option  value="105103026/module2/lec11/1.html">Governing equation for leaky aquifer</option>
 <option  value="105103026/module2/lec12/1.html">Governing equation for three-dimensional flow in porous medium</option>
 <option  value="105103026/module2/lec13/1.html">Solution of the flow equation</option>
 <option  value="105103026/module2/lec14/1.html">Solution of 2D steady flow problem in a confined aquifer</option>
 <option  value="105103026/module3/lec15/1.html">Governing equation for radial flow in an aquifer</option>
 <option  value="105103026/module3/lec16/1.html">Solution of steady flow problem of confined and unconfined aquifer </option>
 <option  value="105103026/module3/lec17/1.html">Solution unsteady flow problem of confined aquifer</option>
 <option  value="105103026/module3/lec18/1.html">Time drawdown relations for constant, discrete and variable pumping scenarios </option>
 <option  value="105103026/module3/lec19/1.html">Solution unsteady flow problem of unconfined aquifer and leaky confined aquifer</option>
 <option  value="105103026/module3/lec20/1.html">Partially penetrated well and change in hydraulic properties near a well</option>
 <option  value="105103026/module3/lec21/1.html">Multiple well system and well near aquifer boundary </option>
 <option  value="105103026/module3/lec22/1.html">Estimation of aquifer parameters</option>
 <option  value="105103026/module4/lec23/1.html">Introduction to Groundwater management models</option>
 <option  value="105103026/module4/lec24/1.html">Solution of groundwater management model (part I)</option>
 <option  value="105103026/module4/lec25/1.html">Management of potential aquifers (part II)</option>
 <option  value="105103026/module4/lec26/1.html">Solution of groundwater management problem using excel solver</option>
 <option  value="105103026/module4/lec27/1.html">Groundwater inverse modeling using excel</option>
 <option  value="105103026/module4/lec28/1.html">Safe yield and stream-aquifer interaction</option>
 <option  value="105103026/module4/lec29/1.html">Artificial recharge</option>
 <option  value="105103026/module4/lec30/1.html">Estimation of groundwater recharge</option>
 <option  value="105103026/module5/lec31/1.html">Introduction</option>
 <option  value="105103026/module5/lec32/1.html">Advection-dispersion equation for solute transport in porous media</option>
 <option  value="105103026/module5/lec33/1.html">Analytical solution of diffusion equation   </option>
 <option  value="105103026/module5/lec34/1.html">Analytical solution of diffusion equation for 2D and 3D system   </option>
 <option  value="105103026/module5/lec35/1.html">Solution of diffusion equation for distributed and continuous source   </option>
 <option  value="105103026/module5/lec36/1.html">Analytical solution of one dimensional advection diffusion equation   </option>
 <option  value="105103026/module5/lec37/1.html">Solution of Advection-Diffusion equation using Matlab     </option>
 <option  value="105103026/module5/lec38/1.html">Retardation of solutes 1</option>
 <option  value="105103026/module5/lec39/1.html">Retardation of solutes 2</option>
 <option  value="105103026/module5/lec40/1.html">Solution of Diffusion equation using finite difference </option>
 <option  value="105103026/module1/Reference/1.html">Reference 1</option>
 <option  value="105103026/module2/Reference/1.html">Reference 2</option>
 <option  value="105103026/module3/Reference/1.html">Reference 3</option>
 <option  value="105103026/module4/Reference/1.html">Reference 4</option>

          </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105104030</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Concrete Engineering and Technology</strong></td>
	<td><strong>Dr. Sudhir Misra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
     <option value="105104030/mod01lec01.mp4">Lecture-01</option>
<option value="105104030/mod01lec02.mp4">Lecture-02</option>
<option value="105104030/mod01lec03.mp4">Lecture-03</option>
<option value="105104030/mod01lec04.mp4">Lecture-04</option>
<option value="105104030/mod01lec05.mp4">Lecture-05</option>
<option value="105104030/mod01lec06.mp4">Lecture-06</option>
<option value="105104030/mod01lec07.mp4">Lecture-07</option>
<option value="105104030/mod01lec08.mp4">Lecture-08</option>
<option value="105104030/mod01lec09.mp4">Lecture-09</option>
<option value="105104030/mod01lec10.mp4">Lecture-10</option>
<option value="105104030/mod01lec11.mp4">Lecture-11</option>
<option value="105104030/mod01lec12.mp4">Lecture-12</option>
<option value="105104030/mod01lec13.mp4">Lecture-13</option>
<option value="105104030/mod01lec14.mp4">Lecture-14</option>
<option value="105104030/mod01lec15.mp4">Lecture-15</option>
<option value="105104030/mod01lec16.mp4">Lecture-16</option>
<option value="105104030/mod01lec17.mp4">Lecture-17</option>
<option value="105104030/mod01lec18.mp4">Lecture-18</option>
<option value="105104030/mod01lec19.mp4">Lecture-19</option>
<option value="105104030/mod01lec20.mp4">Lecture-20</option>
<option value="105104030/mod01lec21.mp4">Lecture-21</option>
<option value="105104030/mod01lec22.mp4">Lecture-22</option>
<option value="105104030/mod01lec23.mp4">Lecture-23</option>
<option value="105104030/mod01lec24.mp4">Lecture-24</option>
<option value="105104030/mod01lec25.mp4">Lecture-25</option>
<option value="105104030/mod01lec26.mp4">Lecture-26</option>
<option value="105104030/mod01lec27.mp4">Lecture-27</option>
<option value="105104030/mod01lec28.mp4">Lecture-28</option>
<option value="105104030/mod01lec29.mp4">Lecture-29</option>
<option value="105104030/mod01lec30.mp4">Lecture-30</option>
<option value="105104030/mod01lec31.mp4">Lecture-31</option>
<option value="105104030/mod01lec32.mp4">Lecture-32</option>
<option value="105104030/mod01lec33.mp4">Lecture-33</option>
<option value="105104030/mod01lec34.mp4">Lecture-34</option>
<option value="105104030/mod01lec35.mp4">Lecture-35</option>
<option value="105104030/mod01lec36.mp4">Lecture-36</option>
<option value="105104030/mod01lec37.mp4">Lecture-37</option>
<option value="105104030/mod01lec38.mp4">Lecture-38</option>
<option value="105104030/mod01lec39.mp4">Lecture-39</option>
<option value="105104030/mod01lec40.mp4">Lecture-40</option>


          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105104098</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Advanced Transportation Engineering</strong></td>
	<td><strong>Prof. A. Das, Prof. Partha Chakraborty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
       <option  value="105104098/TransportationII/objective/6-objective.htm">Basic concept of pavement analysis and design</option>
 <option  value="105104098/TransportationII/objective/1-objective-a.htm">Pavement Materials</option>
 <option  value="105104098/TransportationII/objective/mod2-lec-5-objective.htm">Analysis of Concrete Pavement</option>
 <option  value="105104098/TransportationII/mod-2-lec3/slide1.htm">Various design approaches</option>
 <option  value="105104098/TransportationII/mod-2-lec-4/slide1.htm">Design of dowel bars</option>
 <option  value="105104098/TransportationII/mod-2-lec-5-new/slide1.htm">Design of tie bars</option>
 <option  value="105104098/TransportationII/mod-3-lec-1/slide1.htm">Design of runway, taxiway and apron</option>
 <option  value="105104098/TransportationII/objective/mod-3-lec2-objective.htm">Reinforced Concrete Pavement</option>
 <option  value="105104098/TransportationII/objective/mod-3-lec3-objective.htm">Concrete pavement shoulder</option>
 <option  value="105104098/TransportationII/mod-3-lec4/slide1.htm">Composite Pavements</option>
 <option  value="105104098/TransportationII/objective/mod-3-lec5-objective.htm">Comparative studies of concrete versus bituminous pavement</option>
 <option  value="105104098/TransportationII/objective/mod4-lec-1-objective.htm">Construction of Concrete Pavements</option>
 <option  value="105104098/TransportationII/objective/mod4-lec-2-objective.htm">Construction of joints</option>
 <option  value="105104098/TransportationII/mod-4-lec-3/slide1.htm">Quality control issues</option>
 <option  value="105104098/TransportationII/objective/mod4-lec-4-objective.htm">Maintenance of concrete pavements</option>
 <option  value="105104098/TransportationII/lecture4/4-2-intro.htm">Basics of Traffic Engineering - A Recapitulation</option>
 <option  value="105104098/TransportationII/lecture4/4-3-speed.htm">Speed and Density</option>
 <option  value="105104098/TransportationII/lecture4/4-6-flow.htm">Flow</option>
 <option  value="105104098/TransportationII/lecture5/5-3-fundamental.htm">Introduction & Fundamental Relation</option>
 <option  value="105104098/TransportationII/lecture5/5-4-macroscopic.htm">An Introduction to Macroscopic Models</option>
 <option  value="105104098/TransportationII/lecture5/5-5-linearModel.htm">Macroscopic Models- Linear Model/ Generalized Polynomial Model of u - k relation</option>
 <option  value="105104098/TransportationII/lecture5/5-7-logarithmic.htm">Macroscopic Models - Logarithmic Model of u-k relation/Exponential Model of u-k Relation</option>
 <option  value="105104098/TransportationII/mod6-lec5/mod6-lec5-slide1.htm">Lecture 5</option>
 <option  value="105104098/TransportationII/lecture8/text/2slide.htm">Introduction to Interruptions</option>
 <option  value="105104098/TransportationII/lecture8/text/5slide.htm">Traffic Flow at Signalized Intersections</option>
 <option  value="105104098/TransportationII/lecture8/text/12slide.htm">Traffic Flow at Unsignalized Intersections</option>
 <option  value="105104098/TransportationII/mod-8-lec-1/mod8-lec1-slide1.htm">Introduction and capacity of facilities with uninterrupted flow</option>
 <option  value="105104098/TransportationII/mod-8-lec-2/mod8-lec2-slide1.htm">Capacity at signalized and unsignalized intersections and LOS</option>
 <option  value="105104098/TransportationII/mod-9/lec1/mod9-lec1-slide1.htm">Introduction, transport supply and demand</option>
 <option  value="105104098/TransportationII/mod-9/lec2/mod9-lec2-slide1.htm">Overview of the planning process, role of government</option>
 <option  value="105104098/TransportationII/mod-9/lec3/mod9-lec3-slide1.htm">Demand analysis, supply analysis and evaluation</option>
 <option  value="105104098/TransportationII/mod12/2slide.htm">Introduction</option>
 <option  value="105104098/TransportationII/mod12/4slide.htm">Trip-generation Models</option>
 <option  value="105104098/TransportationII/mod12/5slide.htm">Trip Distribution Models</option>
 <option  value="105104098/TransportationII/mod12/7slide.htm">Destination Choice Models</option>
 <option  value="105104098/TransportationII/mod12/9slide.htm">Modal Split Model</option>
 <option  value="105104098/TransportationII/mod13/10slide.htm">Traffic Assignment Models</option>
 <option  value="105104098/TransportationII/mod13/12slide.htm">Incremental-assignment model</option>
 <option  value="105104098/TransportationII/mod13/13slide.htm">User-equilibrium model</option>
 <option  value="105104098/TransportationII/mod13/15slide.htm">Shortest path finding algorithms (Dijkstra's algorithm)</option>
 <option  value="105104098/TransportationII/mod13/16slide.htm">Shortest path finding algorithms (Floyd's algorithm)</option>
 <option  value="105104098/TransportationII/objective/mod14-lec-1-objective.htm">Definition of parameters</option>
 <option  value="105104098/TransportationII/mod14/5slide.htm">Cost Components in Transportation System</option>
 <option  value="105104098/TransportationII/mod14/6slide.htm">Benefit Component in Transportation System</option>
 <option  value="105104098/TransportationII/mod14/6-bslide.htm">Economic Evaluation of Highway Projects</option>
 <option  value="105104098/TransportationII/mod14/7slide.htm">Transportation Financing</option>
 <option  value="105104098/TransportationII/ui/framset-m13.htm">Exercise-Demand Analysis</option>

          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105104135</strong></td>
	<td><strong>Civil Engineering </strong></td>
	<td><strong>Application of Soil Mechanics </strong></td>
	<td><strong>Dr. Nihar Ranjan Patra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="105104135/mod01lec01.mp4">Lecture-01-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec02.mp4">Lecture-02-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec03.mp4">Lecture-03-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec04.mp4">Lecture-04-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec05.mp4">Lecture-05-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec06.mp4">Lecture-06-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec07.mp4">Lecture-07-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec08.mp4">Lecture-08-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec09.mp4">Lecture-09-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec10.mp4">Lecture-10-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec11.mp4">Lecture-11-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec12.mp4">Lecture-12-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec13.mp4">Lecture-13-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec14.mp4">Lecture-14-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec15.mp4">Lecture-15-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec16.mp4">Lecture-16-Application of Soil chanics   </option>
<option  value="105104135/mod01lec17.mp4">Lecture-17-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec18.mp4">Lecture-18-Application of Soil Mechani   </option>
<option  value="105104135/mod01lec19.mp4">Lecture-19-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec20.mp4">Lecture-20-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec21.mp4">Lecture-21-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec22.mp4">Lecture-22-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec23.mp4">Lecture-23-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec24.mp4">Lecture-24-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec25.mp4">Lecture-25-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec26.mp4">Lecture-26-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec27.mp4">Lecture-27-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec28.mp4">Lecture-28-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec29.mp4">Lecture-29-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec30.mp4">Lecture-30-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec31.mp4">Lecture-31-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec32.mp4">Lecture-32-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec33.mp4">Lecture-33-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec34.mp4">Lecture-34-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec35.mp4">Lecture-35-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec36.mp4">Lecture-36-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec37.mp4">Lecture-37-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec38.mp4">Lecture-38-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec39.mp4">Lecture-39-Application of Soil Mechanics </option>
<option  value="105104135/mod01lec40.mp4">Lecture-40-Application of Soil Mechanics </option>

	</tr>
	</form>
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105104136</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Geotechnical Earthquake Engineering</strong></td>
	<td><strong>Dr. Nihar Ranjan Patra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
       <option  value="105104136/Module 1/Lecture 1.pdf">Lec1</option>
 <option  value="105104136/Module 1/Lecture 2.pdf">Lec2</option>
 <option  value="105104136/Module 1/Lecture 3.pdf">Lec3</option>
 <option  value="105104136/Module 1/Lecture 4.pdf">Lec4</option>
 <option  value="105104136/Module 1/Lecture 5.pdf">Lec5</option>
 <option  value="105104136/Module 1/Lecture 6.pdf">Lec6</option>
 <option  value="105104136/Module 1/Problems.pdf">Problem1</option>
 <option  value="105104136/Module 2/Lecture 7.pdf">Lec7</option>
 <option  value="105104136/Module 2/Lecture 8.pdf">Lec8</option>
 <option  value="105104136/Module 2/Lecture 9.pdf">Lec9</option>
 <option  value="105104136/Module 2/Problems.pdf">Problem2</option>
 <option  value="105104136/Module 3/Lecture 10.pdf">Lec10</option>
 <option  value="105104136/Module 3/Lecture 11.pdf">Lec11</option>
 <option  value="105104136/Module 3/Lecture 12.pdf">Lec12</option>
 <option  value="105104136/Module 3/Lecture 13.pdf">Lec13</option>
 <option  value="105104136/Module 3/Lecture 14.pdf">Lec14</option>
 <option  value="105104136/Module 3/Lecture 15.pdf">Lec15</option>
 <option  value="105104136/Module 3/Lecture 16.pdf">Lec16</option>
 <option  value="105104136/Module 4/Lecture 17.pdf">Lec17</option>
 <option  value="105104136/Module 4/Lecture 18.pdf">Lec18</option>
 <option  value="105104136/Module 4/Lecture 19.pdf">Lec19</option>
 <option  value="105104136/Module 4/Lecture 20.pdf">Lec20</option>
 <option  value="105104136/Module 4/Lecture 21.pdf">Lec21</option>
 <option  value="105104136/Module 4/Lecture 22.pdf">Lec22</option>
 <option  value="105104136/Module 5/Lecture 23.pdf">Lec23</option>
 <option  value="105104136/Module 5/Lecture 24.pdf">Lec24</option>
 <option  value="105104136/Module 5/Lecture 25.pdf">Lec25</option>
 <option  value="105104136/Module 5/Lecture 26.pdf">Lec26</option>
 <option  value="105104136/Module 6/Lecture 27.pdf">Lec27</option>
 <option  value="105104136/Module 6/Lecture 28.pdf">Lec28</option>
 <option  value="105104136/Module 6/Lecture 29.pdf">Lec29</option>
 <option  value="105104136/Module 6/Lecture 30.pdf">Lec30</option>
 <option  value="105104136/Module 6/Lecture 31.pdf">Lec31</option>
 <option  value="105104136/Module 6/Lecture 32.pdf">Lec32</option>
 <option  value="105104136/Module 7/Lecture 33.pdf">Lec33</option>
 <option  value="105104136/Module 7/Lecture 34.pdf">Lec34</option>
 <option  value="105104136/Module 7/Lecture 35.pdf">Lec35</option>
 <option  value="105104136/Module 7/Lecture 36.pdf">Lec36</option>
 <option  value="105104136/Module 8/Lecture 37.pdf">Lec37</option>
 <option  value="105104136/Module 8/Lecture 38.pdf">Lec38</option>
 <option  value="105104136/Module 8/Lecture 39.pdf">Lec39</option>
 <option  value="105104136/Module 8/Lecture 40.pdf">Lec40</option>
 <option  value="105104136/Module 3/Problems.pdf">Problem3</option>
 <option  value="105104136/Module 4/Problems.pdf">Problem4</option>
 <option  value="105104136/Module 5/Problems.pdf">Problem5</option>
 <option  value="105104136/Module 6/Problems.pdf">Problem6</option>
 <option  value="105104136/Module 7/Problems.pdf">Problem7</option>
 <option  value="105104136/Module 8/Problems.pdf">Problem8</option>


          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106053</strong></td>
	<td><strong>Civil Engineering </strong></td>
	<td><strong>Modern Construction Materials</strong></td>
	<td><strong>Dr. Ravindra Gettul</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="105106052/mod01lec01.mp4">Lecture 1   </option>
<option  value="105106052/mod01lec02.mp4">Lecture 2   </option>
<option  value="105106052/mod01lec03.mp4">Lecture 3   </option>
<option  value="105106052/mod01lec04.mp4">Lecture 4   </option>
<option  value="105106052/mod01lec05.mp4">Lecture 5   </option>
<option  value="105106052/mod01lec06.mp4">Lecture 6   </option>
<option  value="105106052/mod01lec07.mp4">Lecture 7   </option>
<option  value="105106052/mod01lec08.mp4">Lecture 8   </option>
<option  value="105106052/mod01lec09.mp4">Lecture 9   </option>
<option  value="105106052/mod01lec10.mp4">Lecture 10  </option>
<option  value="105106052/mod01lec11.mp4">Lecture 11  </option>
<option  value="105106052/mod01lec12.mp4">Lecture 12  </option>
<option  value="105106052/mod01lec13.mp4">Lecture 13  </option>
<option  value="105106052/mod01lec14.mp4">Lecture 14  </option>
<option  value="105106052/mod01lec15.mp4">Lecture 15  </option>
<option  value="105106052/mod01lec16.mp4">Lecture 16  </option>
<option  value="105106052/mod01lec17.mp4">Lecture 17  </option>
<option  value="105106052/mod01lec18.mp4">Lecture 18  </option>
<option  value="105106052/mod01lec19.mp4">Lecture 19  </option>
<option  value="105106052/mod01lec20.mp4">Lecture 20  </option>
<option  value="105106052/mod01lec21.mp4">Lecture 21  </option>
<option  value="105106052/mod01lec22.mp4">Lecture 22  </option>
<option  value="105106052/mod01lec23.mp4">Lecture 23  </option>
<option  value="105106052/mod01lec24.mp4">Lecture 24  </option>
<option  value="105106052/mod01lec25.mp4">Lecture 25  </option>
<option  value="105106052/mod01lec26.mp4">Lecture 26  </option>
<option  value="105106052/mod01lec27.mp4">Lecture 27  </option>
<option  value="105106052/mod01lec28.mp4">Lecture 28  </option>
<option  value="105106052/mod01lec29.mp4">Lecture 29  </option>
<option  value="105106052/mod01lec30.mp4">Lecture 30  </option>
<option  value="105106052/mod01lec31.mp4">Lecture 31  </option>
<option  value="105106052/mod01lec32.mp4">Lecture 32  </option>
<option  value="105106052/mod01lec33.mp4">Lecture 33  </option>
<option  value="105106052/mod01lec34.mp4">Lecture 34  </option>
<option  value="105106052/mod01lec35.mp4">Lecture 35  </option>
<option  value="105106052/mod01lec36.mp4">Lecture 36  </option>
<option  value="105106052/mod01lec37.mp4">Lecture 37  </option>
<option  value="105106052/mod01lec38.mp4">Lecture 38  </option>
<option  value="105106052/mod01lec39.mp4">Lecture 39  </option>
<option  value="105106052/mod01lec40.mp4">Lecture 40  </option>

	</tr>
	</form>
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106052</strong></td>
	<td><strong>Civil Engineering </strong></td>
	<td><strong>Geosynthetics and Reinforced Soil Structures </strong></td>
	<td><strong>Dr. K. Rajagopal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="105106052/mod01lec01.mp4">Introduction & Need for Geosynthetics                                                                   </option>
<option  value="105106052/mod01lec02.mp4">Types and Functions of Geosynthetics                                                                    </option>
<option  value="105106052/mod01lec03.mp4">Polymers in Geosynthetics and Manufacturing Techniques                                                  </option>
<option  value="105106052/mod01lec04.mp4">Strength Analysis of Reinforced Soils  - I                                                              </option>
<option  value="105106052/mod01lec05.mp4">Strength Analysis of Reinforced Soils � II                                                              </option>
<option  value="105106052/mod01lec06.mp4">Testing of Geosynthetics-I                                                                              </option>
<option  value="105106052/mod01lec07.mp4">Testing of Geosynthetics-II                                                                             </option>
<option  value="105106052/mod01lec08.mp4">Testing of Geosynthetics-III                                                                            </option>
<option  value="105106052/mod01lec09.mp4">Different Types of Soil Retaining Structures                                                            </option>
<option  value="105106052/mod01lec10.mp4">Construction Aspects of Geosynthetic Reinforced Soil Retaining Walls                                    </option>
<option  value="105106052/mod01lec11.mp4">Design Codes for Reinforced Soil Retaining Walls                                                        </option>
<option  value="105106052/mod01lec12.mp4">External Stability Analysis of Reinforced Soil Retaining Walls                                          </option>
<option  value="105106052/mod01lec13.mp4">Seismic Loads and Internal Stability Analysis of Reinforced Soil Walls                                  </option>
<option  value="105106052/mod01lec14.mp4">Testing Requirements for Reinforced Soil Retaining Walls                                                </option>
<option  value="105106052/mod01lec15.mp4">Design Example of Reinforced Soil Retaining Walls-I                                                     </option>
<option  value="105106052/mod01lec16.mp4">Design Example of Reinforced Soil Retaining Walls-II                                                    </option>
<option  value="105106052/mod01lec17.mp4">Design Example of Reinforced Soil Retaining Walls-III                                                   </option>
<option  value="105106052/mod01lec18.mp4">Design Example of Reinforced Soil Retaining Walls-IV                                                    </option>
<option  value="105106052/mod01lec19.mp4">Case Study of Construction of Very High Tiered Reinforced Soil Walls                                    </option>
<option  value="105106052/mod01lec20.mp4">Controlled Yielding to Reduce Lateral Earth Pressures on Rigid Walls                                    </option>
<option  value="105106052/mod01lec21.mp4">Geosynthetic Reinforced Soil Embankments-I                                                              </option>
<option  value="105106052/mod01lec22.mp4">Geosynthetic Reinforced Soil Embankments-II                                                             </option>
<option  value="105106052/mod01lec23.mp4">Two-Part Wedge Analysis of Reinforced Soil Embankments                                                  </option>
<option  value="105106052/mod01lec24.mp4">Soil Embankments Supported on Geocell Mattresses                                                        </option>
<option  value="105106052/mod01lec25.mp4">Accelerated Pre-Consolidation of Soft Clay Soils Using Geosynthetics                                    </option>
<option  value="105106052/mod01lec26.mp4">Geosynthetic Reinforced Pile Systems for High Embankments                                               `
<option  value="105106052/mod01lec27.mp4">Geosynthetic Encasement for Stronger and Stiffer Stone Columns                                          </option>
<option  value="105106052/mod01lec28.mp4">Response of Footings Resting on Reinforced Foundation Soils                                             </option>
<option  value="105106052/mod01lec29.mp4">Bearing Capacity Analysis of Footings Resting on Reinforced Foundation Soils                            </option>
<option  value="105106052/mod01lec30.mp4">Design and Construction of Container Yards Using Geosynthetics                                          </option>
<option  value="105106052/mod01lec31.mp4">Geosynthetics in Flexible Pavements � I                                                                 </option>
<option  value="105106052/mod01lec32.mp4">Geosynthetics in Flexible Pavements � II                                                                </option>
<option  value="105106052/mod01lec33.mp4">Geosynthetics in Flexible Pavements and Carbon Foot Print Analysis                                      </option>
<option  value="105106052/mod01lec34.mp4">Filtration of Soils Using Geosynthetics                                                                 </option>
<option  value="105106052/mod01lec35.mp4">Drainage Applications of Geosynthetics                                                                  </option>
<option  value="105106052/mod01lec36.mp4">Erosion Control of Soils Using Geosynthetics                                                            </option>
<option  value="105106052/mod01lec37.mp4">Sustainable Infrastructure  Development & Natural Geosynthetics                                         </option>
<option  value="105106052/mod01lec38.mp4">Introduction to Geosynthetics in Landfills                                                              </option>
<option  value="105106052/mod01lec39.mp4">Case Study of the Construction of Airport Runway at Pakyong, Sikkim Using Geosynthetics (Guest Lecture) </option>
<option  value="105106052/mod01lec40.mp4">Landfill Engineering Systems (Guest Lecture)                                                            </option>

	</tr>
	</form>
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108077</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Remote Sensing</strong></td>
	<td><strong>Dr. D. Nagesh Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="105108077/module1/lecture1.pdf">Introduction, Basic concepts of remote sensing, Airborne and space-borne sensors, Passive and active remote sensing</option>
 <option  value="105108077/module1/lecture2.pdf">EMR Spectrum, Energy sources and radiation principles</option>
 <option  value="105108077/module1/lecture3.pdf">Energy interactions in the atmosphere</option>
 <option  value="105108077/module1/lecture4.pdf">Energy interactions with earth surface features, Spectral reflectance curves I</option>
 <option  value="105108077/module2/lecture6.pdf">Satellites and orbits, Geo-synchronous, sun synchronous and polar orbiting satellites</option>
 <option  value="105108077/module1/lecture5.pdf">Energy interactions with earth surface features, Spectral reflectance curves II</option>
 <option  value="105108077/module2/lecture7.pdf">Spatial, spectral and radiometric resolutions, Temporal resolution I</option>
 <option  value="105108077/module2/lecture8.pdf">Spatial, spectral and radiometric resolutions, Temporal resolution II</option>
 <option  value="105108077/module2/lecture9.pdf">Multispectral, thermal and hyperspectral remote sensing.</option>
 <option  value="105108077/module2/lecture10.pdf">Remote sensing satellites and their features</option>
 <option  value="105108077/module3/lecture11.pdf">Geometric Corrections</option>
 <option  value="105108077/module3/lecture12.pdf">Ground Control Points (GCP), Co-registration of data</option>
 <option  value="105108077/module3/lecture13.pdf">Atmospheric corrections, Solar illumination corrections</option>
 <option  value="105108077/module4/lecture14.pdf">Concept of colour, RGB and IHS colour schemes, Colour composites</option>
 <option  value="105108077/module4/lecture15.pdf">Contrast stretching – linear and non-linear stretching</option>
 <option  value="105108077/module4/lecture16.pdf">Filtering techniques, Edge enhancement </option>
 <option  value="105108077/module4/lecture17.pdf">Density slicing, Thresholding, Intensity-Hue-Saturation (IHS) images, Time composite images, Synergetic images</option>
 <option  value="105108077/module5/lecture18.pdf">Supervised and unsupervised classification I</option>
 <option  value="105108077/module5/lecture19.pdf">Supervised and unsupervised classification II</option>
 <option  value="105108077/module5/lecture20.pdf">Fuzzy classification</option>
 <option  value="105108077/module5/lecture21.pdf">Image transformations, Ratio images, Vegetation indices</option>
 <option  value="105108077/module5/lecture22.pdf">Principal component analysis</option>
 <option  value="105108077/module6/lecture23.pdf">Image processing software</option>
 <option  value="105108077/module6/lecture24.pdf">Image processing using MATLAB</option>
 <option  value="105108077/module7/lecture25.pdf">Introduction, Sources of digital elevation data, Types of DEM</option>
 <option  value="105108077/module7/lecture26.pdf">Radar interferometry, Shuttle Radar Topographic Mission (SRTM) data I</option>
 <option  value="105108077/module7/lecture27.pdf">Radar interferometry, Shuttle Radar Topographic Mission (SRTM) data II</option>
 <option  value="105108077/module7/lecture28.pdf">DEM for Slope, Aspect, Flow direction, Flow pathways, Flow accumulation, Streams, Catchment area delineation I</option>
 <option  value="105108077/module7/lecture29.pdf">DEM for Slope, Aspect, Flow direction, Flow pathways, Flow accumulation, Streams, Catchment area delineation II</option>
 <option  value="105108077/module8/lecture30.pdf">Watershed management</option>
 <option  value="105108077/module8/lecture31.pdf">Rainfall-runoff modeling</option>
 <option  value="105108077/module8/lecture32.pdf">Irrigation management</option>
 <option  value="105108077/module8/lecture33.pdf">Flood mapping</option>
 <option  value="105108077/module8/lecture34.pdf">Drought assessment</option>
 <option  value="105108077/module8/lecture35.pdf">Environmental monitoring </option>
 <option  value="105108077/module8/lecture36.pdf">Other applications</option>
 <option  value="105108077/module9/lecture37.pdf">Passive and active microwave remote sensing, Sources of microwave data I</option>
 <option  value="105108077/module9/lecture38.pdf">Passive and active microwave remote sensing, Sources of microwave data II</option>
 <option  value="105108077/module9/lecture39.pdf">Global positioning System (GPS)</option>
 <option  value="105108077/module9/lecture40.pdf">Hyperspectral remote sensing</option>


          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108078</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Site Characterisation & Instrumentation</strong></td>
	<td><strong>Dr. P. Anbazhagan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="105108078/mod1/lec1.pdf">Introduction to site characterization</option>
 <option  value="105108078/mod2/lec2.pdf">Concept of Site characterization</option>
 <option  value="105108078/mod3/lec3.pdf">Methodology </option>
 <option  value="105108078/mod4/lec4.pdf">Site Investigation using Non-Destructive Tests </option>
 <option  value="105108078/mod5/lec5.pdf">Site investigation using in situ testing</option>
 <option  value="105108078/mod6/lec6.pdf">Sampling</option>
 <option  value="105108078/mod7/lec8.pdf">Laboratory tests for site characterization</option>
 <option  value="105108078/mod8/lec9.pdf">Numerical Methods</option>
 <option  value="105108078/mod9/lec10.pdf">Geo-Technical and Geo-Environmental Case Studies</option>
 <option  value="105108078/mod10/lec11.pdf">Seismic site characterization</option>
 <option  value="105108078/mod11/lec12.pdf">Instrumentation</option>



          </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105102090</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Mechanics of Solids</strong></td>
	<td><strong>Prof. Y. Nath</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105102090/Mechanics Of Solids/index.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
          <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103093</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Construction Planning and Management</strong></td>
	<td><strong>Prof. Arbind Kumar Singh</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103093/cpm/index.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>     
    
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103095</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Fluid Mechanics</strong></td>
	<td><strong>Dr. N. Sahoo,Dr. Subhashisa Dutta</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103095/fluid_mechanics/index.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form> 
    
           <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103097</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Soil Mechanics</strong></td>
	<td><strong>Prof. Baleshwar Singh</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103097/soil_mech/index.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>       
    
           <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105104100</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Modern Surveying Techniques</strong></td>
	<td><strong>Dr. Onkar Dikshit</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103097/ModernSurveyingTech/ui/About-Faculty.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>        
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105104102</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Water and Waste Water Engineering</strong></td>
	<td><strong>Dr. P. Bose</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104102/wasteWater/index.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>   
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105105104</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Design of	 Concrete Structures</strong></td>
	<td><strong>Prof. J.N. Bandopadhyay</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105104/Design of Con Struc/New_index1.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>   
        
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105105109</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Structural Analysis II</strong></td>
	<td><strong>Prof. Sudhir Kumar Barai,Prof. L.S. Ramachandra</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105109/Structural Analysis/New_index1.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>      
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105105110</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Water Resources Engineering</strong></td>
	<td><strong>Dr. Dhrubajyoti Sen</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105110/Water Resource Engg/New_index1.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>     
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105107122</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Surveying</strong></td>
	<td><strong>Prof. J.K. Ghosh</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107122/SURVEYING/home.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>     
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108124</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Composite Materials</strong></td>
	<td><strong>Dr. P.C. Pandey</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108124/Composite Materials/New_index1.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>                             
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108125</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Computational Hydraulics</strong></td>
	<td><strong>Prof. M.S. Mohan Kumar</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108125/Comp_Hydr/computational-hydraulics.pdf">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>  
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108127</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Optimization Methods</strong></td>
	<td><strong>Dr. D. Nagesh Kumar</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108127/OPTIMIZATION METHODS/New_index1.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>  
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108128</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Reliability Engineering</strong></td>
	<td><strong>Dr. G.L. Sivakumar Babu</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108128/Reliability Engg/New_index1.html">contents</option>
           
          </select></td>
	
	</tr>
	</form>       
    
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105102089</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Environmental Air Pollution</strong></td>
	<td><strong>Prof. Mukesh Khare</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105102089/Environmental Air Pollution/index.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>  
    
    
    
    
   <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105101083</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Foundation Engineering</strong></td>
	<td><strong>Dr. Deepankar Choudhury</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select3" id="select3" onchange="goToPage('select3');"><option  value="#">Select </option>
      
      <option  value="105101083/Foundation_Engineering/Course Objective.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>



 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105101085</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Structural Analysis I</strong></td>
	<td><strong>Dr. R.S. Jangid,Dr. Siddhartha Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select1" id="select1" onchange="goToPage('select1');"><option  value="#">Select </option>
      
      <option  value="105101085/Structural Analysis I/Course Objective.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>

 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105101087</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Transportation Engineering I</strong></td>
	<td><strong>Dr. Tom V Mathew</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select2" id="select2" onchange="goToPage('select2');"><option  value="#">Select </option>
      
      <option  value="105101087/Transportation Engg 1/CourseObjective.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>

    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101084</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Soil Mechanics</strong></td>
	<td><strong>Dr. B.V.S. Viswanadham</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105101084/lec01.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec02.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec03.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec04.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec05.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec06.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec07.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec08.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec09.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec10.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec11.mp4">Compaction of Soils - I</option>
      
      <option  value="105101084/lec12.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec13.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec14.mp4">Compaction of Soils - IV</option>
      
      <option  value="105101084/lec15.mp4">Compaction of Soils - V</option>
      
      <option  value="105101084/lec16.mp4">Compaction of Soils - VI</option>
      
      <option  value="105101084/lec17.mp4">Effective Stress - I</option>
      
      <option  value="105101084/lec18.mp4">Effective Stress - II</option>
      
      <option  value="105101084/lec19.mp4">Effective Stress - III</option>
      
      <option  value="105101084/lec20.mp4">Flow of water through soils - I</option>
      
      <option  value="105101084/lec21.mp4">Flow of water through soils - II</option>
      
      <option  value="105101084/lec22.mp4">Flow of water through soils - III</option>
      
      <option  value="105101084/lec23.mp4">Flow of water through soils - IV</option>
      
      <option  value="105101084/lec24.mp4">Flow of water through soils - V</option>
      
      <option  value="105101084/lec25.mp4">Flow of water through soils - VI</option>
      
      <option  value="105101084/lec26.mp4">Flow of water through soils - VII</option>
      
      <option  value="105101084/lec27.mp4">Flow of water through soils - VIII</option>
      
      <option  value="105101084/lec28.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec29.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec30.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec31.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec32.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec33.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec34.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec35.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec36.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec37.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec38.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec39.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec40.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec41.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec42.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec43.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec44.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec45.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec46.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec47.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec48.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec49.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec50.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec51.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec52.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec53.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec54.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec55.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec56.mp4">Soil Mechanics</option>
      
      <option  value="105101084/lec57.mp4">Soil Mechanics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101086</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Structural Analysis II</strong></td>
	<td><strong>Dr. P. Banerji</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105101086/lec01.mp4">Lecture 1</option>
      
      <option  value="105101086/lec02.mp4">Lecture 2</option>
      
      <option  value="105101086/lec03.mp4">Lecture 3</option>
      
      <option  value="105101086/lec04.mp4">Lecture 4</option>

      
      <option  value="105101086/lec05.mp4">Lecture 5</option>
      
      <option  value="105101086/lec06.mp4">Lecture 6</option>
      
      <option  value="105101086/lec07.mp4">Lecture 7</option>
      
      <option  value="105101086/lec08.mp4">Lecture 8</option>
      
      <option  value="105101086/lec09.mp4">Lecture 9</option>
      
      <option  value="105101086/lec10.mp4">Lecture 10</option>
      
      <option  value="105101086/lec11.mp4">Lecture 11</option>
      
      <option  value="105101086/lec12.mp4">Lecture 12</option>
      
      <option  value="105101086/lec13.mp4">Lecture 13</option>
      
      <option  value="105101086/lec14.mp4">Lecture 14</option>
      
      <option  value="105101086/lec15.mp4">Lecture 15</option>
      
      <option  value="105101086/lec16.mp4">Lecture 16</option>
      
      <option  value="105101086/lec17.mp4">Lecture 17</option>
      
      <option  value="105101086/lec18.mp4">Lecture 18</option>
      
      <option  value="105101086/lec19.mp4">Lecture 19</option>
      
      <option  value="105101086/lec20.mp4">Lecture 20</option>
      
      <option  value="105101086/lec21.mp4">Lecture 21</option>
      
      <option  value="105101086/lec22.mp4">Lecture 22</option>
      
      <option  value="105101086/lec23.mp4">Lecture 23</option>
      
      <option  value="105101086/lec24.mp4">Lecture 24</option>
      
      <option  value="105101086/lec25.mp4">Lecture 25</option>
      
      <option  value="105101086/lec26.mp4">Lecture 26</option>
      
      <option  value="105101086/lec27.mp4">Lecture 27</option>
      
      <option  value="105101086/lec28.mp4">Lecture 28</option>
      
      <option  value="105101086/lec29.mp4">Lecture 29</option>
      
      <option  value="105101086/lec30.mp4">Lecture 30</option>
      
      <option  value="105101086/lec31.mp4">Lecture 31</option>
      
      <option  value="105101086/lec32.mp4">Lecture 32</option>
      
      <option  value="105101086/lec33.mp4">Lecture 33</option>
      
      <option  value="105101086/lec34.mp4">Lecture 34</option>
      
      <option  value="105101086/lec35.mp4">Lecture 35</option>
      
      <option  value="105101086/lec36.mp4">Lecture 36</option>
      
      <option  value="105101086/lec37.mp4">Lecture 37</option>
      
      <option  value="105101086/lec38.mp4">Lecture 38</option>
      
      <option  value="105101086/lec39.mp4">Lecture 39</option>
      
      <option  value="105101086/lec40.mp4">Lecture 40</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105101134</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Geotechnical Earthquake Engineering</strong></td>
	<td><strong>Dr. Deepankar Choudhury</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105101134/mod01lec01.mp4">L1-Introduction to Geotechnical Earthquake Engineering</option>
      
      <option  value="105101134/mod01lec02.mp4">L2-Introduction to Geotechnical Earthquake Engineering (continued)</option>
      
      <option  value="105101134/mod02lec03.mp4">L3-Basics of Vibration Theory</option>
      
      <option  value="105101134/mod03lec04.mp4">L4-Engineering Seismology  part -I</option>
      
      <option  value="105101134/mod03lec05.mp4">L5-Engineering Seismology (continued) part -II</option>
      
      <option  value="105101134/mod03lec06.mp4">L6-Engineering Seismology (continued) part -III</option>
      
      <option  value="105101134/mod03lec07.mp4">L7-Engineering Seismology (continued) part -IV</option>
      
      <option  value="105101134/mod03lec08.mp4">L8-Engineering Seismology (continued) part -V</option>
      
      <option  value="105101134/mod03lec09.mp4">L9-Engineering Seismology (continued) part �VI</option>
      
      <option  value="105101134/mod04lec10.mp4">L10-Strong Ground Motion</option>
      
      <option  value="105101134/mod04lec11.mp4">L11-Strong Ground Motion (continued) part �II</option>
      
      <option  value="105101134/mod04lec12.mp4">L12-Strong Ground Motion (continued) part �III</option>
      
      <option  value="105101134/mod04lec13.mp4">L13-Strong Ground Motion (continued) part �IV</option>
      
      <option  value="105101134/mod04lec14.mp4">L14-Strong Ground Motion (continued) part �V</option>
      
      <option  value="105101134/mod04lec15.mp4">L15-Strong Ground Motion (continued) part �VI</option>
      
      <option  value="105101134/mod04lec16.mp4">L16-Strong Ground Motion (continued) part �VII</option>
      
      <option  value="105101134/mod05lec17.mp4">L17-Wave Propagation</option>
      
      <option  value="105101134/mod05lec18.mp4">L18-Wave Propagation (continued) part �II</option>
      
      <option  value="105101134/mod05lec19.mp4">L19-Wave Propagation (continued) part �III</option>
      
      <option  value="105101134/mod05lec20.mp4">L20-Wave Propagation (continued) part �IV</option>
      
      <option  value="105101134/mod06lec21.mp4">L21-Dynamic Soil Properties</option>
      
      <option  value="105101134/mod06lec22.mp4">L22-Dynamic Soil Properties (continued) Part -II</option>
      
      <option  value="105101134/mod07lec23.mp4">L23-Seismic Hazard Analysis</option>
      
      <option  value="105101134/mod07lec24.mp4">L24-Seismic Hazard Analysis (continued) Part -II</option>
      
      <option  value="105101134/mod07lec25.mp4">L25-Seismic Hazard Analysis (continued) part �III</option>
      
      <option  value="105101134/mod07lec26.mp4">L26-Seismic Hazard Analysis (continued) part �IV</option>
      
      <option  value="105101134/mod07lec27.mp4">L27-Seismic Hazard Analysis (continued) part �V</option>
      
      <option  value="105101134/mod07lec28.mp4">L28-Seismic Hazard Analysis (continued) part �VI</option>
      
      <option  value="105101134/mod07lec29.mp4">L29-Seismic Hazard Analysis (continued) part �VII</option>
      
      <option  value="105101134/mod07lec30.mp4">L30-Seismic Hazard Analysis (continued) part �VIII</option>
      
      <option  value="105101134/mod08lec31.mp4">L31-Site Response Analysis</option>
      
      <option  value="105101134/mod08lec32.mp4">L32-Site Response Analysis (continued) part �II</option>
      
      <option  value="105101134/mod08lec33.mp4">L33-Site Response Analysis (continued) part �III</option>
      
      <option  value="105101134/mod09lec34.mp4">L34-Seismic Analysis and Design of Various Geotechnical Structures</option>
      
      <option  value="105101134/mod09lec35.mp4">L35-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �II</option>
      
      <option  value="105101134/mod09lec36.mp4">L36-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �III</option>
      
      <option  value="105101134/mod09lec37.mp4">L37-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �IV</option>
      
      <option  value="105101134/mod09lec38.mp4">L38-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �V</option>
      
      <option  value="105101134/mod09lec39.mp4">L39-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �VI</option>
      
      <option  value="105101134/mod09lec40.mp4">L40-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �VII</option>
      
      <option  value="105101134/mod09lec41.mp4">L41-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �VIII</option>
      
      <option  value="105101134/mod09lec42.mp4">L42-Quiz</option>
      
      <option  value="105101134/mod09lec43.mp4">L43-Seismic Analysis and Design of Various Geotechnical Structures (continued) part �IX</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105102088</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Civil Engineering - Building materials and Construction</strong></td>
	<td><strong>Dr. B. Bhattacharjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105102088/lec01.mp4">Functions Of Buildings</option>
      
      <option  value="105102088/lec02.mp4">Role Of Material In Construction</option>
      
      <option  value="105102088/lec03.mp4">Concrete:Material</option>
      
      <option  value="105102088/lec04.mp4">Concrete Production Contd..</option>
      
      <option  value="105102088/lec05.mp4">Concrete Production Contd.</option>
      
      <option  value="105102088/lec06.mp4">Concrete:Production Pumping, Placing</option>
      
      <option  value="105102088/lec07.mp4">Concrete:Production Curing</option>
      
      <option  value="105102088/lec08.mp4">Cement: Hydration</option>
      
      <option  value="105102088/lec09.mp4">Cement and Cementitious Material</option>
      
      <option  value="105102088/lec10.mp4">Fresh Concrete</option>
      
      <option  value="105102088/lec11.mp4">Fresh Concrete: Role of Mix Parameters</option>
      
      <option  value="105102088/lec12.mp4">Fresh Concrete : Role of Admixtures</option>
      
      <option  value="105102088/lec13.mp4">Fresh Concrete : Segregation  Bleeding</option>
      
      <option  value="105102088/lec14.mp4">Strength of Concrete I</option>
      
      <option  value="105102088/lec15.mp4">Strength of Concrete II</option>
      
      <option  value="105102088/lec16.mp4">Strength of Concrete III</option>
      
      <option  value="105102088/lec17.mp4">Mechanical Properties of Concrete I</option>
      
      <option  value="105102088/lec18.mp4">Mechanical Properties of Concrete II</option>
      
      <option  value="105102088/lec19.mp4">Strength of Concrete : Non Destructive</option>
      
      <option  value="105102088/lec20.mp4">Durability of Concrete I</option>
      
      <option  value="105102088/lec21.mp4">Durability of Concrete II</option>
      
      <option  value="105102088/lec22.mp4">Durability of Concrete III</option>
      
      <option  value="105102088/lec23.mp4">Cement Aggregate and Water Selection</option>
      
      <option  value="105102088/lec24.mp4">Mix Design of Concrete</option>
      
      <option  value="105102088/lec25.mp4">Mix Design Of concrete IS Method</option>
      
      <option  value="105102088/lec26.mp4">Mix Design Of Concrete: British</option>
      
      <option  value="105102088/lec27.mp4">Masonry : Materials</option>
      
      <option  value="105102088/lec28.mp4">Masonry : Walls</option>
      
      <option  value="105102088/lec29.mp4">Masonry : Walls; Resistance I</option>
      
      <option  value="105102088/lec30.mp4">Masonry : Walls; Resistance</option>
      
      <option  value="105102088/lec31.mp4">Walls : Functional Performances</option>
      
      <option  value="105102088/lec32.mp4">Walls : Defects and Durability</option>
      
      <option  value="105102088/lec33.mp4">Metals Fundamentals</option>
      
      <option  value="105102088/lec34.mp4">Metals and Iron Systems</option>
      
      <option  value="105102088/lec35.mp4">Steel: Uses in Construction</option>
      
      <option  value="105102088/lec36.mp4">Steel : Uses in Rebar</option>
      
      <option  value="105102088/lec37.mp4">Polymer in Construction</option>
      
      <option  value="105102088/lec38.mp4">Polymer in Construction : Uses</option>
      
      <option  value="105102088/lec39.mp4">Glass and Timber : Glass</option>
      
      <option  value="105102088/lec40.mp4">Glass and Timber: Timber</option>
      
      <option  value="105102088/lec41.mp4">Roof and Floor Construction</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105103021</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Advanced Hydraulics</strong></td>
	<td><strong>Dr. Suresh A Kartha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103021/mod01lec01.mp4">Introduction - advanced hydraulics & course structure</option>
      
      <option  value="105103021/mod01lec02.mp4">Various classifications of open channel flows</option>
      
      <option  value="105103021/mod01lec03.mp4">Flow classifications & velocity distribution</option>
      
      <option  value="105103021/mod01lec04.mp4">Pressure distribution</option>
      
      <option  value="105103021/mod01lec05.mp4">Equation of continuity & energy </option>
      
      <option  value="105103021/mod01lec06.mp4">Specific energy & critical flow</option>
      
      <option  value="105103021/mod01lec07.mp4">Energy, momentum & specific force</option>
      
      <option  value="105103021/mod01lec08.mp4">Computation of critical flow part -1</option>
      
      <option  value="105103021/mod01lec09.mp4">Critical flow computations</option>
      
      <option  value="105103021/mod02lec10.mp4">Introduction to uniform flow</option>
      
      <option  value="105103021/mod02lec11.mp4">Manning's equation and normal depth</option>
      
      <option  value="105103021/mod02lec12.mp4">Uniform Flow Computations - part 1</option>
      
      <option  value="105103021/mod02lec13.mp4">Uniform flow in compound sections, concept of normal slope</option>
      
      <option  value="105103021/mod02lec14.mp4">Uniform flow approximation for flood discharge</option>
      
      <option  value="105103021/mod02lec15.mp4">Design of channels for uniform flow</option>
      
      <option  value="105103021/mod02lec16.mp4">Design of channels using uniform flow</option>
      
      <option  value="105103021/mod02lec17.mp4">Design of erodible channels </option>
      
      <option  value="105103021/mod03lec18.mp4">Introduction to gradually varied flows</option>
      
      <option  value="105103021/mod03lec19.mp4">Gradually varied flow equations</option>
      
      <option  value="105103021/mod03lec20.mp4">Classification of gradually varied flow - part 1</option>
      
      <option  value="105103021/mod03lec21.mp4">Classification of gradually varied flow - part 2</option>
      
      <option  value="105103021/mod03lec22.mp4">Gradually varied flow profiles with change in bed slopes</option>
      
      <option  value="105103021/mod03lec23.mp4">GVF profile properties and transitional depths</option>
      
      <option  value="105103021/mod03lec24.mp4">Gradually varied flow computations - part 1</option>
      
      <option  value="105103021/mod03lec25.mp4">Gradually varied flow computations RK method - part 2</option>
      
      <option  value="105103021/mod03lec26.mp4">Standard step method for gradually varied flow computations</option>
      
      <option  value="105103021/mod03lec27.mp4">Spatially varied flow </option>
      
      <option  value="105103021/mod03lec28.mp4">Features on spatially varied flow</option>
      
      <option  value="105103021/mod04lec29.mp4">Rapidly varied flow - introduction</option>
      
      <option  value="105103021/mod04lec30.mp4">Theoretical aspects of hydraulic jump</option>
      
      <option  value="105103021/mod04lec31.mp4">Characteristics of jumps in rectangular channel</option>
      
      <option  value="105103021/mod04lec32.mp4">Features of hydraulic jumps</option>
      
      <option  value="105103021/mod04lec33.mp4">Jumps as energy dissipators</option>
      
      <option  value="105103021/mod04lec34.mp4">Jump controls</option>
      
      <option  value="105103021/mod04lec35.mp4">Surges (1)</option>
      
      <option  value="105103021/mod04lec36.mp4">Surges (2)</option>
      
      <option  value="105103021/mod05lec37.mp4">Channel transitions</option>
      
      <option  value="105103021/mod05lec38.mp4">Channel transitions - part 2</option>
      
      <option  value="105103021/mod05lec39.mp4">Channel transition - part 3</option>
      
      <option  value="105103021/mod06lec40.mp4">Application of momentum principles</option>
      
      <option  value="105103021/mod06lec41.mp4">Pumps - 1</option>
      
      <option  value="105103021/mod06lec42.mp4">Turbines - part 3 (pumps, turbines)</option>
      
      <option  value="105103021/mod06lec43.mp4">Turbines, cavitation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103023</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Construction Economics & Finance</strong></td>
	<td><strong>Dr. Bulu Pradhan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103023/module1/index.html">Basic principles</option>
      
      <option  value="105103023/module1/lec2/1.html">Equivalence</option>
      
      <option  value="105103023/module1/lec3/1.html">Cash flow diagram</option>
      
      <option  value="105103023/module1/lec4/1.html">Single payment present worth factor (SPPWF)</option>
      
      <option  value="105103023/module1/lec5/1.html">Uniform series compound amount factor</option>
      
      <option  value="105103023/module1/lec6/1.html">Cash flow involving arithmetic gradient payments or receipts</option>
      
      <option  value="105103023/module1/lec7/1.html">Arithmetic gradient</option>
      
      <option  value="105103023/module1/lec8/1.html">Cash flow involving geometric gradient series</option>
      
      <option  value="105103023/module2/lec1/1.html">Comparison of alternatives</option>
      
      <option  value="105103023/module2/lec2/1.html">Comparison by present worth method-I</option>
      
      <option  value="105103023/module2/lec3/1.html">Comparison by present worth method-II</option>
      
      <option  value="105103023/module2/lec4/1.html">Comparison of alternatives by future worth method</option>
      
      <option  value="105103023/module2/lec5/1.html">Comparison by future worth method</option>
      
      <option  value="105103023/module2/lec6/1.html">Comparison of alternatives by annual worth method</option>
      
      <option  value="105103023/module2/lec7/1.html">Comparison by annual worth method</option>
      
      <option  value="105103023/module2/lec8/1.html">Rate of return</option>
      
      <option  value="105103023/module2/lec9/1.html">Incremental Rate of return-I</option>
      
      <option  value="105103023/module2/lec10/1.html">Incremental Rate of return-II</option>
      
      <option  value="105103023/module2/lec11/1.html">Capitalized cost analysis-I</option>
      
      <option  value="105103023/module2/lec12/1.html">Capitalized cost analysis-II</option>
      
      <option  value="105103023/module2/lec13/1.html">Benefit-cost analysis</option>
      
      <option  value="105103023/module2/lec14/1.html">Incremental benefit-cost ratio analysis</option>
      
      <option  value="105103023/module2/lec15/1.html">Breakeven analysis</option>
      
      <option  value="105103023/module2/lec16/1.html">Breakeven analysis for two and more than two alternatives</option>
      
      <option  value="105103023/module3/lec1/1.html">Depreciation-I</option>
      
      <option  value="105103023/module3/lec2/1.html">Depreciation -II</option>
      
      <option  value="105103023/module3/lec3/1.html">Switching between different depreciation methods</option>
      
      <option  value="105103023/module3/lec4/1.html">Inflation</option>
      
      <option  value="105103023/module3/lec5/1.html">Equivalent worth calculation including the effect of inflation</option>
      
      <option  value="105103023/module4/lec1/1.html">Equipment costs</option>
      
      <option  value="105103023/module4/lec2/1.html">Operating cost</option>
      
      <option  value="105103023/module4/lec3/1.html">Buy, Rent and Lease Options</option>
      
      <option  value="105103023/module4/lec4/1.html">Replacement Analysis -I</option>
      
      <option  value="105103023/module4/lec5/1.html">Replacement Analysis � II</option>
      
      <option  value="105103023/module5/lec1/1.html">Cost Estimating</option>
      
      <option  value="105103023/module5/lec2/1.html">Types of Estimates</option>
      
      <option  value="105103023/module5/lec3/1.html">Approximate estimates</option>
      
      <option  value="105103023/module5/lec4/1.html">Parametric estimate</option>
      
      <option  value="105103023/module6/lec1/1.html">Financial management</option>
      
      <option  value="105103023/module6/lec2/1.html">Chart of accounts</option>
      
      <option  value="105103023/module6/lec3/1.html">Balance sheet</option>
      
      <option  value="105103023/module6/lec4/1.html">Financial ratios</option>
      
      <option  value="105103023/module6/lec5/1.html">Working capital management</option>
      
      <option  value="105103023/assignment/1/1.html">Assignment</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103025</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Geo-environmental Engineering</strong></td>
	<td><strong>Dr. S. Sreedeep</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103025/module1/index.html">Scope of geoenvironmental engineering</option>
      
      <option  value="105103025/module1/lec2/1.html">Multidisciplinary aspects of geoenvironmental engineering</option>
      
      <option  value="105103025/module1/lec3/1.html">Case histories </option>
      
      <option  value="105103025/module2/lec4/1.html">Soil mineralogy and its significance</option>
      
      <option  value="105103025/module2/lec6/1.html">Soil-water interaction </option>
      
      <option  value="105103025/module2/lec7/1.html">Diffused double layer</option>
      
      <option  value="105103025/module2/lec9/1.html">Cation exchange capacity</option>
      
      <option  value="105103025/module2/lec10/1.html">Quantification of soil water</option>
      
      <option  value="105103025/module2/lec11/1.html">Hydrologic horizons </option>
      
      <option  value="105103025/module2/lec12/1.html">Basic concepts of unsaturated soil</option>
      
      <option  value="105103025/module2/lec17/1.html">Soil-water-contaminant interactions and its implications</option>
      
      <option  value="105103025/module3/lec20/1.html">Evolution of waste containment facilities and disposal practices </option>
      
      <option  value="105103025/module3/lec21/1.html">Landfills</option>
      
      <option  value="105103025/module3/lec22/1.html">Methods for landfill site selection</option>
      
      <option  value="105103025/module3/lec24/1.html">Design of landfills</option>
      
      <option  value="105103025/module3/lec25/1.html">Engineered containment landfills</option>
      
      <option  value="105103025/module3/lec26/1.html">Design philosophy of compacted liner</option>
      
      <option  value="105103025/module3/lec30/1.html">Determination of diffusion coefficient</option>
      
      <option  value="105103025/module4/lec31/1.html">Contaminated site characterization and risk assessment </option>
      
      <option  value="105103025/module4/lec32/1.html">Physico-chemical methods of remediation</option>
      
      <option  value="105103025/module4/lec35/1.html">Other methods of remediation</option>
      
      <option  value="105103025/module4/lec36/1.html">Examples of in-situ remediation </option>
      
      <option  value="105103025/module5/lec37/1.html">Soil contaminant analysis and Electrical property of soil</option>
      
      <option  value="105103025/module5/lec38/1.html">Measurement of electrical property</option>
      
      <option  value="105103025/module5/lec39/1.html">Thermal property of soil</option>
      
      <option  value="105103025/module5/lec41/1.html">Water content and permeability measurements</option>
      
      <option  value="105103025/module5/lec43/1.html">Ground Penetrating Radar for site evaluation </option>
      
      <option  value="105103025/module5/lec44/1.html">Introduction to geotechnical centrifuge modelling  </option>
      
      <option  value="105103025/module1/problems/1.html">Problems: Module 1</option>
      
      <option  value="105103025/module2/problems/1.html">Problems: Module 2</option>
      
      <option  value="105103025/module3/problems/1.html">Problems: Module 3</option>
      
      <option  value="105103025/module4/problems/1.html">Problems: Module 4</option>
      
      <option  value="105103025/module5/problems/1.html">Problems: Module 5</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103027</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Probability Methods in Civil Engineering</strong></td>
	<td><strong>Dr. C. Mallikarjuna</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103027/module1/index.html">Variability in the data</option>
      
      <option  value="105103027/module1/lec2/1.html">Applications in Civil Engineering</option>
      
      <option  value="105103027/module2/lec3/1.html">Random Events and Graphical description of the data</option>
      
      <option  value="105103027/module2/lec4/1.html">Numerical description of the data</option>
      
      <option  value="105103027/module2/lec5/1.html">Numerical description of the grouped data </option>
      
      <option  value="105103027/module2/lec6/1.html">Introduction to probability: Sample space, event space and events</option>
      
      <option  value="105103027/module2/lec7/1.html">Theory of sets</option>
      
      <option  value="105103027/module2/lec8/1.html">Various approaches to probability</option>
      
      <option  value="105103027/module2/lec9/1.html">Conditional probability, total probability and Baye�s theorem</option>
      
      <option  value="105103027/module3/lec10/1.html">Definition, Types of random variables; Discrete random variables</option>
      
      <option  value="105103027/module3/lec11/1.html">Continuous random variables: pdf and cdf</option>
      
      <option  value="105103027/module3/lec12/1.html">Characteristics of random variables</option>
      
      <option  value="105103027/module3/lec13/1.html">Moment generating function; Multiple random variables and Joint distribution of two random variables</option>
      
      <option  value="105103027/module3/lec14/1.html">Conditional probability functions</option>
      
      <option  value="105103027/module4/lec15/1.html">Bernoulli and Binomial distributions</option>
      
      <option  value="105103027/module4/lec16/1.html">Geometric distributions</option>
      
      <option  value="105103027/module4/lec17/1.html">Poisson and negative binomial distributions</option>
      
      <option  value="105103027/module4/lec18/1.html">Applications of Poisson and Pascal distributions</option>
      
      <option  value="105103027/module5/lec19/1.html">Continuous distributions; Uniform distribution.</option>
      
      <option  value="105103027/module5/lec20/1.html">Applications of negative exponential distribution</option>
      
      <option  value="105103027/module5/lec21/1.html">Normal distribution, Central limit theorem</option>
      
      <option  value="105103027/module5/lec22/1.html">Normal distribution and its applications</option>
      
      <option  value="105103027/module5/lec23/1.html">Lognormal and Gamma distributions</option>
      
      <option  value="105103027/module5/lec24/1.html">Gamma distribution and its applications</option>
      
      <option  value="105103027/module5/lec25/1.html">Erlang and Pearson Type III distributions</option>
      
      <option  value="105103027/module5/lec26/1.html">Extreme Value distributions</option>
      
      <option  value="105103027/module6/lec27/1.html">Random samples, statistics, and sampling distributions</option>
      
      <option  value="105103027/module6/lec28/1.html">z and t- distributions</option>
      
      <option  value="105103027/module6/lec29/1.html">Chi-square and F-distributions</option>
      
      <option  value="105103027/module7/lec30/1.html">Parameter estimation</option>
      
      <option  value="105103027/module7/lec31/1.html">Confidence interval for the population parameters-I</option>
      
      <option  value="105103027/module7/lec32/1.html">Confidence interval for the population parameters-II</option>
      
      <option  value="105103027/module8/lec33/1.html">Hypotheses and Types of errors</option>
      
      <option  value="105103027/module8/lec34/1.html">Hypotheses formulation and testing</option>
      
      <option  value="105103027/module8/lec35/1.html">Hypotheses testing on population mean</option>
      
      <option  value="105103027/module8/lec36/1.html">Hypotheses testing on two population means</option>
      
      <option  value="105103027/module8/lec37/1.html">Goodness of fit testing</option>
      
      <option  value="105103027/module8/lec38/1.html">Regression analysis-I</option>
      
      <option  value="105103027/module8/lec39/1.html">Regression analysis-II</option>
      
      <option  value="105103027/module8/lec40/1.html">Regression analysis III</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105103094</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Design of Steel Structures</strong></td>
	<td><strong>Prof. Damodar Maity</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103094/mod01lec01.mp4">Introduction to Design of Steel Structures</option>
      
      <option  value="105103094/mod02lec01.mp4">Connections</option>
      
      <option  value="105103094/mod02lec02.mp4">Riveted Connections</option>
      
      <option  value="105103094/mod02lec03.mp4">Design of Rivet Joint</option>
      
      <option  value="105103094/mod02lec04.mp4">Welding</option>
      
      <option  value="105103094/mod02lec05.mp4">Design of Fillet and Butt Welds</option>
      
      <option  value="105103094/mod02lec06.mp4">Bolted Connection</option>
      
      <option  value="105103094/mod03lec01.mp4">Eccentric Connections: Rivet Joints</option>
      
      <option  value="105103094/mod03lec02.mp4">Design of Eccentric Connection With Load Lying in Plane of Joint Rivet Bolt</option>
      
      <option  value="105103094/mod03lec03.mp4">Eccentric Connection With Load Perpendicular to Plane of Riveted Joint</option>
      
      <option  value="105103094/mod03lec04.mp4">Analysis and Design of Join with Seat Connection</option>
      
      <option  value="105103094/mod03lec05.mp4">Eccentric Connection</option>
      
      <option  value="105103094/mod03lec06.mp4">Load Lying Perpendicular to the Plane of Weld Joint</option>
      
      <option  value="105103094/mod04lec01.mp4">Tension Member</option>
      
      <option  value="105103094/mod04lec02.mp4">Design of Tension Member</option>
      
      <option  value="105103094/mod04lec03.mp4">Design of Tension Member: Gusset Plates. Lug Angles and Tension Splices</option>
      
      <option  value="105103094/mod04lec04.mp4">Design of Tension Member: Subjected to Axial and Bending</option>
      
      <option  value="105103094/mod05lec01.mp4">Compression Member</option>
      
      <option  value="105103094/mod05lec02.mp4">Design of Compression Member</option>
      
      <option  value="105103094/mod05lec03.mp4">Design of Eccentrically Loaded tension Member</option>
      
      <option  value="105103094/mod05lec04.mp4">Built up Compression Member</option>
      
      <option  value="105103094/mod05lec05.mp4">Design of Built up Compression Member</option>
      
      <option  value="105103094/mod05lec06.mp4">Lacing for Built Up Compression Member</option>
      
      <option  value="105103094/mod05lec07.mp4">Design of Lacing System</option>
      
      <option  value="105103094/mod05lec08.mp4">Design of Batten Plates</option>
      
      <option  value="105103094/mod06lec01.mp4">Introduction to Flexural Members: Beams</option>
      
      <option  value="105103094/mod06lec02.mp4">Design Procedure of Beam Members</option>
      
      <option  value="105103094/mod06lec03.mp4">Design of Laterally Supported Beams</option>
      
      <option  value="105103094/mod06lec04.mp4">Design of Laterally Unsupported Beams</option>
      
      <option  value="105103094/mod06lec05.mp4">Built-Up Beams</option>
      
      <option  value="105103094/mod06lec06.mp4">Built-Up Beams: Curtailment of the Flange Plates and Shear Connections</option>
      
      <option  value="105103094/mod06lec07.mp4">Design of a Built-Up Beams</option>
      
      <option  value="105103094/mod06lec08.mp4">Design of Shear Connections and Purlins</option>
      
      <option  value="105103094/mod07lec01.mp4">Gantry Girders</option>
      
      <option  value="105103094/mod07lec02.mp4">Design of Gantry Girders</option>
      
      <option  value="105103094/mod07lec03.mp4">Introduction to Plate Girders - Part 1</option>
      
      <option  value="105103094/mod07lec04.mp4">Introduction to Plate Girders - Part 2</option>
      
      <option  value="105103094/mod07lec05.mp4">Design of a Plate Girder</option>
      
      <option  value="105103094/mod08lec01.mp4">Column Base Part - 1</option>
      
      <option  value="105103094/mod08lec02.mp4">Column Base Part - 2</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105103096</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Hydraulics</strong></td>
	<td><strong>Prof. Arup Kumar Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103096/mod01lec01.mp4">Introduction to Hydraulics </option>
      
      <option  value="105103096/mod01lec02.mp4">Open Channel Hydraulic Part - 1</option>
      
      <option  value="105103096/mod01lec03.mp4">Open Channel Hydraulics Part - 2 </option>
      
      <option  value="105103096/mod01lec04.mp4">Velocity and Pressure Distribution </option>
      
      <option  value="105103096/mod01lec05.mp4">Practical use of velocity co-efficient in channel flow </option>
      
      <option  value="105103096/mod01lec06.mp4">Conservation Principles & ioioGoverning Equations</option>
      
      <option  value="105103096/mod02lec01.mp4">Uniform Flow </option>
      
      <option  value="105103096/mod02lec02.mp4">Uniform Flow Formula </option>
      
      <option  value="105103096/mod02lec03.mp4">Computation of Uniform Flow Part - 1</option>
      
      <option  value="105103096/mod02lec04.mp4">Computation of Uniform Flow Part - 2</option>
      
      <option  value="105103096/mod02lec05.mp4">Uniform Flow in Mobile Boundary Channel </option>
      
      <option  value="105103096/mod02lec06.mp4">Incipient Motion Condition and Regime of Flow </option>
      
      <option  value="105103096/mod03lec01.mp4">Concept of Specific Energy </option>
      
      <option  value="105103096/mod03lec02.mp4">Computation of Critical Depth </option>
      
      <option  value="105103096/mod03lec03.mp4">Specific Force, Critical Depth & Sequent Depth </option>
      
      <option  value="105103096/mod03lec04.mp4">Non-uniform Flow: Gradually Varied Flow </option>
      
      <option  value="105103096/mod04lec01.mp4">Classification of Gradually Varied Flow </option>
      
      <option  value="105103096/mod04lec02.mp4">Characteristic of Gradually Varied Flow </option>
      
      <option  value="105103096/mod04lec03.mp4">Characteristic of Gradually Varied Flow & its Computation</option>
      
      <option  value="105103096/mod04lec04.mp4">Gradually Varied Flow & its Computation </option>
      
      <option  value="105103096/mod04lec05.mp4">Computation of Gradually Varied Flow</option>
      
      <option  value="105103096/mod04lec06.mp4">Gradually Varied Flow: Numerical Methods and Problem Solving </option>
      
      <option  value="105103096/mod04lec07.mp4">Rapidly Varied Flow: Hydraulic Jump </option>
      
      <option  value="105103096/mod05lec01.mp4">Hydraulic Jump </option>
      
      <option  value="105103096/mod05lec02.mp4">Flow Over Hump and Channel Contraction </option>
      
      <option  value="105103096/mod05lec03.mp4">Canal Design - 1</option>
      
      <option  value="105103096/mod06lec01.mp4">Canal Design - 2 </option>
      
      <option  value="105103096/mod06lec02.mp4">Design of Alluvial Channel </option>
      
      <option  value="105103096/mod06lec03.mp4">Design of Alluvial Channel - 2 </option>
      
      <option  value="105103096/mod06lec04.mp4">Design of Alluvial Channel - 3 </option>
      
      <option  value="105103096/mod06lec05.mp4">Unsteady Flow: Waves and its Classification</option>
      
      <option  value="105103096/mod07lec01.mp4">Unsteady Flow Part - 2 </option>
      
      <option  value="105103096/mod07lec02.mp4">Unsteady Flow Part - 3 </option>
      
      <option  value="105103096/mod08lec01.mp4">Pipe Flow: Friction Loss </option>
      
      <option  value="105103096/mod08lec02.mp4">Pipe Flow: Losses in Pipes </option>
      
      <option  value="105103096/mod08lec03.mp4">Pipe in Series & Parallel </option>
      
      <option  value="105103096/mod08lec04.mp4">Pipe Network Analysis </option>
      
      <option  value="105103096/mod08lec05.mp4">Water Hammer & Surge Tank </option>
      
      <option  value="105103096/mod09lec01.mp4">Pipe Flow Friction Loss</option>
      
      <option  value="105103096/mod09lec02.mp4">Pipe Flow: Losses in Pipe </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105103140</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Structural Reliability</strong></td>
	<td><strong>Dr. Arunasis Chakraborty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105103140/module1/1.pdf">Introduction Structural Reliability</option>
      
      <option  value="105103140/module2/1.pdf">Basic Statistics</option>
      
      <option  value="105103140/module2/2.pdf">Theory of Probability</option>
      
      <option  value="105103140/module2/3.pdf">Theory of Probability(Contd.)</option>
      
      <option  value="105103140/module2/4.pdf">Algebra of Variance</option>
      
      <option  value="105103140/module2/5.pdf">Prob. Distributions</option>
      
      <option  value="105103140/module2/6.pdf">Hypothesis Testing</option>
      
      <option  value="105103140/module3/1.pdf">Concept of Limit State & Reliability</option>
      
      <option  value="105103140/module3/2.pdf">FORM</option>
      
      <option  value="105103140/module3/3.pdf">FORM (Contd.1)</option>
      
      <option  value="105103140/module3/4.pdf">FORM (Contd.2)</option>
      
      <option  value="105103140/module3/5.pdf">FORM (Contd.3)</option>
      
      <option  value="105103140/module3/6.pdf">Mod. Rack. Algo & Nataf Model</option>
      
      <option  value="105103140/module3/7.pdf">SORM</option>
      
      <option  value="105103140/module4/1.pdf">Monte-Carlo Methods</option>
      
      <option  value="105103140/module4/2.pdf">Monte-Carlo Methods (Contd.)</option>
      
      <option  value="105103140/module4/3.pdf">Latin Hypercube Sampling</option>
      
      <option  value="105103140/module4/4.pdf">Variance Reduction Technique & Importance Sampling</option>
      
      <option  value="105103140/module4/5.pdf">Adaptive Sampling</option>
      
      <option  value="105103140/module4/6.pdf">Subset Simulation</option>
      
      <option  value="105103140/module4/7.pdf">Subset Simulation (Contd.)</option>
      
      <option  value="105103140/module5/1.pdf">RSM</option>
      
      <option  value="105103140/module5/2.pdf">RSM (Contd.)</option>
      
      <option  value="105103140/module5/3.pdf">ARSM</option>
      
      <option  value="105103140/module5/4.pdf">SRSM</option>
      
      <option  value="105103140/module5/5.pdf">SRSM  (Contd.1)</option>
      
      <option  value="105103140/module5/6.pdf">SRSM  (Contd.2)</option>
      
      <option  value="105103140/module5/7.pdf">SRSM  (Contd.3)</option>
      
      <option  value="105103140/module6/1.pdf">Stochastic Models of Loads</option>
      
      <option  value="105103140/module6/2.pdf">Partial Safety Factors</option>
      
      <option  value="105103140/module6/3.pdf">Safety Checking Format</option>
      
      <option  value="105103140/module6/4.pdf">System Reliability</option>
      
      <option  value="105103140/module6/5.pdf">System Reliability  (Contd.)</option>
      
      <option  value="105103140/module7/1.pdf">Fatigue Reliability</option>
      
      <option  value="105103140/module7/2.pdf">Time Dependent Reliability</option>
      
      <option  value="105103140/module8/1.pdf">RBDO</option>
      
      <option  value="105103140/module8/2.pdf">RBDO  (Contd.1)</option>
      
      <option  value="105103140/module8/3.pdf">RBDO  (Contd.2)</option>
      
      <option  value="105103140/module8/4.pdf">SFEM</option>
      
      <option  value="105103140/module9/1.pdf">Matlab-ANSYS Batch Analysis</option>
      
      <option  value="105103140/module9/2.pdf">Matlab-ANSYS Batch Analysis (Contd.1)</option>
      
      <option  value="105103140/module9/3.pdf">Matlab-ANSYS Batch Analysis  (Contd.2)</option>
      
      <option  value="105103140/appendix/1.pdf">Appendix</option>
      
      <option  value="105103140/appendix/2.pdf">Appendix  (Contd.1)</option>
      
      <option  value="105103140/appendix/3.pdf">Appendix  (Contd.2)</option>
      
      <option  value="105103140/bibliography/1.pdf">Bibliography</option>
      
      <option  value="105103140/assignments/1.pdf">Assignments</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105104029</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Advanced Hydrology</strong></td>
	<td><strong>Dr. Ashu Jain</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104029/mod01lec01.mp4">lecture-01</option>
      
      <option  value="105104029/mod01lec02.mp4">lecture-02</option>
      
      <option  value="105104029/mod01lec03.mp4">lecture-03</option>
      
      <option  value="105104029/mod01lec04.mp4">lecture-04</option>
      
      <option  value="105104029/mod01lec05.mp4">lecture-05</option>
      
      <option  value="105104029/mod01lec06.mp4">lecture-06</option>
      
      <option  value="105104029/mod01lec07.mp4">lecture-07</option>
      
      <option  value="105104029/mod01lec08.mp4">lecture-08</option>
      
      <option  value="105104029/mod01lec09.mp4">lecture-09</option>
      
      <option  value="105104029/mod01lec10.mp4">lecture-10</option>
      
      <option  value="105104029/mod01lec11.mp4">lecture-11</option>
      
      <option  value="105104029/mod01lec12.mp4">lecture-12</option>
      
      <option  value="105104029/mod01lec13.mp4">lecture-13</option>
      
      <option  value="105104029/mod01lec14.mp4">lecture-14</option>
      
      <option  value="105104029/mod01lec15.mp4">lecture-15</option>
      
      <option  value="105104029/mod01lec16.mp4">lecture-16</option>
      
      <option  value="105104029/mod01lec17.mp4">lecture-17</option>
      
      <option  value="105104029/mod01lec18.mp4">lecture-18</option>
      
      <option  value="105104029/mod01lec19.mp4">lecture-19</option>
      
      <option  value="105104029/mod01lec20.mp4">lecture-20</option>
      
      <option  value="105104029/mod01lec21.mp4">lecture-21</option>
      
      <option  value="105104029/mod01lec22.mp4">lecture-22</option>
      
      <option  value="105104029/mod01lec23.mp4">lecture-23</option>
      
      <option  value="105104029/mod01lec24.mp4">lecture-24</option>
      
      <option  value="105104029/mod01lec25.mp4">lecture-25</option>
      
      <option  value="105104029/mod01lec26.mp4">lecture-26</option>
      
      <option  value="105104029/mod01lec27.mp4">lecture-27</option>
      
      <option  value="105104029/mod01lec28.mp4">lecture-28</option>
      
      <option  value="105104029/mod01lec29.mp4">lecture-29</option>
      
      <option  value="105104029/mod01lec30.mp4">lecture-30</option>
      
      <option  value="105104029/mod01lec31.mp4">lecture-31</option>
      
      <option  value="105104029/mod01lec32.mp4">lecture-32</option>
      
      <option  value="105104029/mod01lec33.mp4">lecture-33</option>
      
      <option  value="105104029/mod01lec34.mp4">lecture-34</option>
      
      <option  value="105104029/mod01lec35.mp4">lecture-35</option>
      
      <option  value="105104029/mod01lec36.mp4">lecture-36</option>
      
      <option  value="105104029/mod01lec37.mp4">lecture-37</option>
      
      <option  value="105104029/mod01lec38.mp4">lecture-38</option>
      
      <option  value="105104029/mod01lec39.mp4">lecture-39</option>
      
      <option  value="105104029/mod01lec40.mp4">lecture-40</option>
      
      <option  value="105104029/mod01lec41.mp4">lecture-41</option>
      
      <option  value="105104029/mod01lec42.mp4">lecture-42</option>
      
      <option  value="105104029/mod01lec43.mp4">lecture-43</option>
      
      <option  value="105104029/mod01lec44.mp4">lecture-44</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105104034</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Ground Improvement Techniques</strong></td>
	<td><strong>Dr. Nihar Ranjan Patra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104034/lecture1/main.html">Classification of Ground modification Techniques</option>
      
      <option  value="105104034/lecture2/2_1.htm">Introduction to Mechanical Modifications</option>
      
      <option  value="105104034/lecture3/3_1.htm">Mechanical Modifications </option>
      
      <option  value="105104034/lecture4/4_1.htm">Special Techniques</option>
      
      <option  value="105104034/lecture5/5_1.htm">Stone columns</option>
      
      <option  value="105104034/lecture6/6_1.htm">Design problem of Stone column (part I) </option>
      
      <option  value="105104034/lecture7/7_1.htm">Design problem of Stone column (part II)</option>
      
      <option  value="105104034/lecture8/8_1.htm">Failure Mechanism and group of stone columns</option>
      
      <option  value="105104034/lecture9/9_1.htm">Methods of construction of Granular Piles</option>
      
      <option  value="105104034/lecture10/10_1.htm">Introduction to preloading and vertical drains</option>
      
      <option  value="105104034/lecture11/11_1.htm">Combined radial and vertical consolidation and smear effect </option>
      
      <option  value="105104034/lecture12/12_1.htm">Preloading without vertical drains</option>
      
      <option  value="105104034/lecture13/13_1.htm">Introduction to reinforced earth</option>
      
      <option  value="105104034/lecture14/14_1.htm">Material and failure modes</option>
      
      <option  value="105104034/lecture15/15_1.htm">Design Procedures</option>
      
      <option  value="105104034/lecture16/16_1.htm">Mess, Bar, strips and design consideration</option>
      
      <option  value="105104034/lecture17/17_1.htm">Solved Example of Reinforce Earth</option>
      
      <option  value="105104034/lecture18/18_1.htm">Introduction to Geotextiles and Geomembranes </option>
      
      <option  value="105104034/lecture19/19_1.htm">Basic functions of Geotextiles and Geomembranes</option>
      
      <option  value="105104034/lecture20/20_1.htm">GeneralApplications of Geotextiles and Geomembranes</option>
      
      <option  value="105104034/lecture21/21_1.htm">General Applications of Geotextiles and Geomembranes2</option>
      
      <option  value="105104034/lecture22/22_1.htm">Resistance of Geotextiles</option>
      
      <option  value="105104034/lecture23/23_1.htm">Design of geotextile walls</option>
      
      <option  value="105104034/lecture24/24_1.htm">Geotextile stabilized embankment</option>
      
      <option  value="105104034/lecture25/25_1.htm">Embankment design methods</option>
      
      <option  value="105104034/lecture26/26_1.htm">Geotextiles as filters</option>
      
      <option  value="105104034/lecture27/27_1.htm">Geogrid properties</option>
      
      <option  value="105104034/lecture28/28_1.htm">Geogrid as reinforcement</option>
      
      <option  value="105104034/lecture29/29_1.htm">Geonet properties and test methods</option>
      
      <option  value="105104034/lecture30/30_1.htm">Properties of Geomembrane </option>
      
      <option  value="105104034/lecture31/31_1.htm">Design with Geomembranes </option>
      
      <option  value="105104034/lecture32/32_1.htm">Run out and Anchor Trench Design of Geomembrane</option>
      
      <option  value="105104034/lecture33/33_1.htm">Grouting and Grout Material </option>
      
      <option  value="105104034/lecture34/34_1.htm">Grouting flow and grouting techniques</option>
      
      <option  value="105104034/lecture35/35_1.htm">Ground Anchor and Rock bolt</option>
      
      <option  value="105104034/lecture36/36_1.htm">Soil Nailing</option>
      
      <option  value="105104034/lecture37/37_1.htm">Optimum Design of Nailed slopes</option>
      
      <option  value="105104034/lecture38/38_1.htm">Definition and mechanism of Liquefaction</option>
      
      <option  value="105104034/lecture39/39_1.htm">Standard curves and correlation for liquefaction</option>
      
      <option  value="105104034/lecture40/40_1.htm">Evaluation of zone of liquefaction in field</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105104099</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Environmental Air Pollution</strong></td>
	<td><strong>Prof. Mukesh Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104099/lec01.mp4">Introduction to Atmosphere</option>
      
      <option  value="105104099/lec02.mp4">Air Pollution Systems</option>
      
      <option  value="105104099/lec03.mp4">Air Quality Standards</option>
      
      <option  value="105104099/lec04.mp4">Types and Forms of Air Pollutants</option>
      
      <option  value="105104099/lec05.mp4">Measurement Units and Particulate classification</option>
      
      <option  value="105104099/lec06.mp4">Interpretation and Particle size Distribution</option>
      
      <option  value="105104099/lec07.mp4">Atmospheric formation of Air Pollutants I</option>
      
      <option  value="105104099/lec08.mp4">Atmospheric formation of Air Pollutants II</option>
      
      <option  value="105104099/lec09.mp4">Atmospheric formation of Air Pollutants III</option>
      
      <option  value="105104099/lec10.mp4">Kinetics of Air pollution and combustion processes</option>
      
      <option  value="105104099/lec11.mp4">Internal Combustion Engine and Air Pollution I</option>
      
      <option  value="105104099/lec12.mp4">Internal Combustion Engine and Air Pollution II</option>
      
      <option  value="105104099/lec13.mp4">Air Pollution and Health I</option>
      
      <option  value="105104099/lec14.mp4">Air Pollution and Health II</option>
      
      <option  value="105104099/lec15.mp4">Emission Inventory</option>
      
      <option  value="105104099/lec16.mp4">Sources of Air Pollution</option>
      
      <option  value="105104099/lec17.mp4">Emission from Fugitive Sources and Sulfuric Acid Production</option>
      
      <option  value="105104099/lec18.mp4">Aluminium Production and Air Pollution I</option>
      
      <option  value="105104099/lec19.mp4">Aluminium Production and Air Pollution II</option>
      
      <option  value="105104099/lec20.mp4">Coke Production and Air Pollution</option>
      
      <option  value="105104099/lec21.mp4">Examples for Practice</option>
      
      <option  value="105104099/lec22.mp4">Meteorological Measurements and their interpretation</option>
      
      <option  value="105104099/lec23.mp4">Examples for Practice - Dispersion Modeling</option>
      
      <option  value="105104099/lec24.mp4">Vertical Temperature Profile of Atmosphere</option>
      
      <option  value="105104099/lec25.mp4">Stability, Mixing Height and Plume Behavior I</option>
      
      <option  value="105104099/lec26.mp4">Stability, Mixing Height and Plume Behavior II</option>
      
      <option  value="105104099/lec27.mp4">Examples - Solar Radiation Based Stability Calculation</option>
      
      <option  value="105104099/lec28.mp4">Air Quality Modeling I</option>
      
      <option  value="105104099/lec29.mp4">Air Quality Modeling II</option>
      
      <option  value="105104099/lec30.mp4">Derivation of Gaussian Model</option>
      
      <option  value="105104099/lec31.mp4">Gaussian Model - Useful Formulation</option>
      
      <option  value="105104099/lec32.mp4">Plume rise, Area and Line Source Model</option>
      
      <option  value="105104099/lec33.mp4">Air Quality Modeling - Maximum Ground Level concentration</option>
      
      <option  value="105104099/lec34.mp4">Examples of Air Quality Modeling</option>
      
      <option  value="105104099/lec35.mp4">Air Pollution Control Devices I</option>
      
      <option  value="105104099/lec36.mp4">Air Pollution Control Devices I</option>
      
      <option  value="105104099/lec37.mp4">Source Emission Monitoring</option>
      
      <option  value="105104099/lec38.mp4">Receptor Source Modeling</option>
      
      <option  value="105104099/lec39.mp4">Environmental laws</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105104101</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Surveying</strong></td>
	<td><strong>Dr. Bharat Lohani</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104101/lec01.mp4">Module 1 Lecture 1</option>
      
      <option  value="105104101/lec02.mp4">Module 2 lecture 1</option>
      
      <option  value="105104101/lec03.mp4">Module 2 Lecture 2</option>
      
      <option  value="105104101/lec04.mp4">Module 2 Lecture 3</option>
      
      <option  value="105104101/lec05.mp4">Module 2 Lecture 4</option>
      
      <option  value="105104101/lec06.mp4">Module 2 Lecture 5</option>
      
      <option  value="105104101/lec07.mp4">Module 3 Lecture 1</option>
      
      <option  value="105104101/lec08.mp4">Module 3 Lecture 2</option>
      
      <option  value="105104101/lec09.mp4">Module 3 Lecture 3</option>
      
      <option  value="105104101/lec10.mp4">Module 3 Lecture 4</option>
      
      <option  value="105104101/lec11.mp4">Module 4 Lecture 1</option>
      
      <option  value="105104101/lec12.mp4">Module 4 Lecture 2</option>
      
      <option  value="105104101/lec13.mp4">Module 5 Lecture 1</option>
      
      <option  value="105104101/lec14.mp4">Module 5 Lecture 2</option>
      
      <option  value="105104101/lec15.mp4">Module 5 Lecture 3</option>
      
      <option  value="105104101/lec16.mp4">Module 5 Lecture 4</option>
      
      <option  value="105104101/lec17.mp4">Module 5 Lecture 5</option>
      
      <option  value="105104101/lec18.mp4">Module 5 Lecture 6</option>
      
      <option  value="105104101/lec19.mp4">Module 6 Lecture 1</option>
      
      <option  value="105104101/lec20.mp4">Module 6 Lecture 2</option>
      
      <option  value="105104101/lec21.mp4">Module 6 Lecture 3</option>
      
      <option  value="105104101/lec22.mp4">Module 7 Lecture 1</option>
      
      <option  value="105104101/lec23.mp4">Module 7 Lecture 2</option>
      
      <option  value="105104101/lec24.mp4">Module 7 Lecture 3</option>
      
      <option  value="105104101/lec25.mp4">Module 7 Lecture 4</option>
      
      <option  value="105104101/lec26.mp4">Module 7 Lecture 5</option>
      
      <option  value="105104101/lec27.mp4">Module 8 Lecture 1</option>
      
      <option  value="105104101/lec28.mp4">Module 8 Lecture 2</option>
      
      <option  value="105104101/lec29.mp4">Module 9 Lecture 1</option>
      
      <option  value="105104101/lec30.mp4">Module 9 Lecture 2</option>
      
      <option  value="105104101/lec31.mp4">Module 9 Lecture 3</option>
      
      <option  value="105104101/lec32.mp4">Module 9 Lecture 4</option>
      
      <option  value="105104101/lec33.mp4">Module 9 Lecture 5</option>
      
      <option  value="105104101/lec34.mp4">Module 10 Lecture 1</option>
      
      <option  value="105104101/lec35.mp4">Module 11 Lecture 1</option>
      
      <option  value="105104101/lec36.mp4">Module 11 Lecture 2</option>
      
      <option  value="105104101/lec37.mp4">Module 11 Lecture 3</option>
      
      <option  value="105104101/lec38.mp4">Module 12 Lecture 1</option>
      
      <option  value="105104101/lec39.mp4">Module 12 Lecture 2</option>
      
      <option  value="105104101/lec40.mp4">Module 12 Lecture 3</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105104103</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Water Resources Engineering</strong></td>
	<td><strong>Prof. Rajesh Srivastava,Dr. Pranab K Mohapatra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104103/lec01.mp4">Lecture 1</option>
      
      <option  value="105104103/lec02.mp4">Lecture 2</option>
      
      <option  value="105104103/lec03.mp4">Lecture 3</option>
      
      <option  value="105104103/lec04.mp4">Lecture 4</option>
      
      <option  value="105104103/lec05.mp4">Lecture 5</option>
      
      <option  value="105104103/lec06.mp4">Lecture 6</option>
      
      <option  value="105104103/lec07.mp4">Lecture 7</option>
      
      <option  value="105104103/lec08.mp4">Lecture 8</option>
      
      <option  value="105104103/lec09.mp4">Lecture 9</option>
      
      <option  value="105104103/lec10.mp4">Lecture 10</option>
      
      <option  value="105104103/lec11.mp4">Lecture 11</option>
      
      <option  value="105104103/lec12.mp4">Lecture 12</option>
      
      <option  value="105104103/lec13.mp4">Lecture 13</option>
      
      <option  value="105104103/lec14.mp4">Lecture 14</option>
      
      <option  value="105104103/lec15.mp4">Lecture 15</option>
      
      <option  value="105104103/lec16.mp4">Lecture 16</option>
      
      <option  value="105104103/lec17.mp4">Lecture 17</option>
      
      <option  value="105104103/lec18.mp4">Lecture 18</option>
      
      <option  value="105104103/lec19.mp4">Lecture 19</option>
      
      <option  value="105104103/lec20.mp4">Lecture 20</option>
      
      <option  value="105104103/lec21.mp4">Lecture 21</option>
      
      <option  value="105104103/lec22.mp4">Lecture 22</option>
      
      <option  value="105104103/lec23.mp4">Lecture 23</option>
      
      <option  value="105104103/lec24.mp4">Lecture 24</option>
      
      <option  value="105104103/lec26.mp4">Lecture 26</option>
      
      <option  value="105104103/lec27.mp4">Lecture 27</option>
      
      <option  value="105104103/lec28.mp4">Lecture 28</option>
      
      <option  value="105104103/lec29.mp4">Lecture 29</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105104131</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Geotechnical Measuements & Explorations</strong></td>
	<td><strong>Dr. Nihar Ranjan Patra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
    <option value="105104131/mod01lec01.mp4">Lecture-01</option>
<option value="105104131/mod01lec02.mp4">Lecture-02</option>
<option value="105104131/mod01lec03.mp4">Lecture-03</option>
<option value="105104131/mod01lec04.mp4">Lecture-04</option>
<option value="105104131/mod01lec05.mp4">Lecture-05</option>
<option value="105104131/mod01lec06.mp4">Lecture-06</option>
<option value="105104131/mod01lec07.mp4">Lecture-07</option>
<option value="105104131/mod01lec08.mp4">Lecture-08</option>
<option value="105104131/mod01lec09.mp4">Lecture-09</option>
<option value="105104131/mod01lec10.mp4">Lecture-10</option>
<option value="105104131/mod01lec11.mp4">Lecture-11</option>
<option value="105104131/mod01lec12.mp4">Lecture-12</option>
<option value="105104131/mod01lec13.mp4">Lecture-13</option>
<option value="105104131/mod01lec14.mp4">Lecture-14</option>
<option value="105104131/mod01lec15.mp4">Lecture-15</option>
<option value="105104131/mod01lec16.mp4">Lecture-16</option>
<option value="105104131/mod01lec17.mp4">Lecture-17</option>
<option value="105104131/mod01lec18.mp4">Lecture-18</option>
<option value="105104131/mod01lec19.mp4">Lecture-19</option>
<option value="105104131/mod01lec20.mp4">Lecture-20</option>
<option value="105104131/mod01lec21.mp4">Lecture-21</option>
<option value="105104131/mod01lec22.mp4">Lecture-22</option>
<option value="105104131/mod01lec23.mp4">Lecture-23</option>
<option value="105104131/mod01lec24.mp4">Lecture-24</option>
<option value="105104131/mod01lec25.mp4">Lecture-25</option>
<option value="105104131/mod01lec26.mp4">Lecture-26</option>
<option value="105104131/mod01lec27.mp4">Lecture-27</option>
<option value="105104131/mod01lec28.mp4">Lecture-28</option>
<option value="105104131/mod01lec29.mp4">Lecture-29</option>
<option value="105104131/mod01lec30.mp4">Lecture-30</option>
<option value="105104131/mod01lec31.mp4">Lecture-31</option>
<option value="105104131/mod01lec32.mp4">Lecture-32</option>
<option value="105104131/mod01lec33.mp4">Lecture-33</option>
<option value="105104131/mod01lec34.mp4">Lecture-34</option>
<option value="105104131/mod01lec35.mp4">Lecture-35</option>
<option value="105104131/mod01lec36.mp4">Lecture-36</option>
<option value="105104131/mod01lec37.mp4">Lecture-37</option>
<option value="105104131/mod01lec38.mp4">Lecture-38</option>
<option value="105104131/mod01lec39.mp4">Lecture-39</option>
<option value="105104131/mod01lec40.mp4">Lecture-40</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105104132</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Advance Geotechnological Engineering</strong></td>
	<td><strong>Dr. Nihar Ranjan Patra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104132/Module1/Lecture1.pdf">Lecture 1</option>
      
      <option  value="105104132/Module1/Lecture2.pdf">Lecture 2</option>
      
      <option  value="105104132/Module1/Lecture3.pdf">Lecture 3</option>
      
      <option  value="105104132/Module1/Lecture4.pdf">Lecture 4</option>
      
      <option  value="105104132/Module1/References.pdf">Module1-References</option>
      
      <option  value="105104132/Module1/Problems.pdf">Module1- Problems</option>
      
      <option  value="105104132/Module2/lecture5.pdf">Lecture 5</option>
      
      <option  value="105104132/Module2/lecture6.pdf">Lecture 6</option>
      
      <option  value="105104132/Module2/lecture7.pdf">Lecture 7</option>
      
      <option  value="105104132/Module2/lecture8.pdf">Lecture 8</option>
      
      <option  value="105104132/Module2/lecture9.pdf">Lecture 9</option>
      
      <option  value="105104132/Module2/lecture10.pdf">Lecture 10</option>
      
      <option  value="105104132/Module2/Problems.pdf">Module 2 - Problems</option>
      
      <option  value="105104132/Module3/lecture11.pdf">Lecture 11</option>
      
      <option  value="105104132/Module3/lecture12.pdf">Lecture 12</option>
      
      <option  value="105104132/Module3/lecture13.pdf">Lecture 13</option>
      
      <option  value="105104132/Module3/lecture14.pdf">Lecture 14</option>
      
      <option  value="105104132/Module3/lecture15.pdf">Lecture 15</option>
      
      <option  value="105104132/Module3/lecture16.pdf">Lecture 16</option>
      
      <option  value="105104132/Module3/Problems.pdf">Module 3 - Problems</option>
      
      <option  value="105104132/Module4/lecture17.pdf">Lecture 17</option>
      
      <option  value="105104132/Module4/lecture18.pdf">Lecture 18</option>
      
      <option  value="105104132/Module4/lecture19.pdf">Lecture 19</option>
      
      <option  value="105104132/Module4/lecture20.pdf">Lecture 20</option>
      
      <option  value="105104132/Module4/lecture21.pdf">Lecture 21</option>
      
      <option  value="105104132/Module4/lecture22.pdf">Lecture 22</option>
      
      <option  value="105104132/Module4/lecture23.pdf">Lecture 23</option>
      
      <option  value="105104132/Module4/lecture24.pdf">Lecture 24</option>
      
      <option  value="105104132/Module4/lecture25.pdf">Lecture 25</option>
      
      <option  value="105104132/Module4/lecture26.pdf">Lecture 26</option>
      
      <option  value="105104132/Module4/Refrences.pdf">Module 4 - References</option>
      
      <option  value="105104132/Module4/Problems.pdf">Module 4 - Problems</option>
      
      <option  value="105104132/Module5/lecture27.pdf">Lecture 27</option>
      
      <option  value="105104132/Module5/lecture28.pdf">Lecture 28</option>
      
      <option  value="105104132/Module5/lecture29.pdf">Lecture 29</option>
      
      <option  value="105104132/Module5/lecture30.pdf">Lecture 30</option>
      
      <option  value="105104132/Module5/lecture31.pdf">Lecture 31</option>
      
      <option  value="105104132/Module5/lecture32.pdf">Lecture 32</option>
      
      <option  value="105104132/Module5/lecture33.pdf">Lecture 33</option>
      
      <option  value="105104132/Module5/lecture34.pdf">Lecture 34</option>
      
      <option  value="105104132/Module5/problem.pdf">Module 5 - Problems</option>
      
      <option  value="105104132/Module6/lecture35.pdf">Lecture 35</option>
      
      <option  value="105104132/Module6/lecture36.pdf">Lecture36</option>
      
      <option  value="105104132/Module6/lecture37.pdf">Lecture 37</option>
      
      <option  value="105104132/Module6/lecture38.pdf">Lecture 38</option>
      
      <option  value="105104132/Module6/lecture39.pdf">Lecture 39</option>
      
      <option  value="105104132/Module6/lecture40.pdf">Lecture 40</option>
      
      <option  value="105104132/Module6/refrences.pdf">Module 6 - References</option>
      
      <option  value="105104132/Module6/problems.pdf">Module 6 - Problems</option>
      
      <option  value="105104132/Module2/References.pdf">Module 2 - References</option>
      
      <option  value="105104132/Module3/References.pdf">Module 3 - References</option>
      
      <option  value="105104132/Module5/References.pdf">Module 5 - References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105104137</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Foundation Analysis and Design</strong></td>
	<td><strong>Dr. Nihar Ranjan Patra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105104137/ui/Mainpage.pdf">main</option>
      
      <option  value="105104137/module1/lecture1.pdf">INTRODUCTION</option>
      
      <option  value="105104137/module1/lecture2.pdf">SOIL CLASSIFICATION SYSTEMS</option>
      
      <option  value="105104137/module1/lecture3.pdf">CAPILLARY RISE IN SOIL</option>
      
      <option  value="105104137/module1/lecture4.pdf">SHEAR STRENGTH</option>
      
      <option  value="105104137/module1/PROBLEMS.pdf">PROBLEMS</option>
      
      <option  value="105104137/module1/REFERENCES.pdf">REFERENCES</option>
      
      <option  value="105104137/module2/lecture5.pdf">NATURAL SOIL DEPOSITS</option>
      
      <option  value="105104137/module2/lecture6.pdf">PROCEDURES FOR SAMPLING SOIL</option>
      
      <option  value="105104137/module2/Lecture7.pdf">CONE PENETRATION TEST</option>
      
      <option  value="105104137/module2/lecture8.pdf">GEOPHYSICAL EXPLORATION</option>
      
      <option  value="105104137/module2/PROBLEMS.pdf">  PROBLEMS</option>
      
      <option  value="105104137/module2/REFERENCES.pdf">  REFERENCES</option>
      
      <option  value="105104137/module3/lecture9.pdf">GENERAL CONCEPT</option>
      
      <option  value="105104137/module3/lecture10.pdf">THE GENERAL BEARING CAPACITY EQUATION</option>
      
      <option  value="105104137/module3/lecture11.pdf">BEARING CAPACITY OF LAYERED SOILS-STRONGER SOIL UNDERLAIN BY WEAKER SOIL</option>
      
      <option  value="105104137/module3/lecture12.pdf">RECENT ADVANCES IN BEARING CAPACITY OF FOUNDATIONS ON REINFORCED SOIL</option>
      
      <option  value="105104137/module3/PROBLEMS.pdf">    PROBLEMS</option>
      
      <option  value="105104137/module3/REFERENCES.pdf">    REFERENCES</option>
      
      <option  value="105104137/module4/lecture13.pdf">VERTICAL STRESS INCREASE IN A SOIL MASS CAUSED BY FOUNDATION LOAD</option>
      
      <option  value="105104137/module4/lecture14.pdf">SETTLEMENT CALCULATION</option>
      
      <option  value="105104137/module4/lecture15.pdf">ALLOWABLE BEARING CAPACITY</option>
      
      <option  value="105104137/module4/lecture16.pdf">STRIP FOUNDATION ON GRANULAR SOIL REINFORCED BY METALLIC STRIPS</option>
      
      <option  value="105104137/module4/PROBLEMS.pdf">      PROBLEMS</option>
      
      <option  value="105104137/module4/REFERENCES.pdf">       REFERENCES</option>
      
      <option  value="105104137/module5/lecture17.pdf">COMMON TYPES OF MAT FOUNDATIONS</option>
      
      <option  value="105104137/module5/lecture18.pdf">FIELD SETTLEMENT OBSERVATIONS FOR MAT FOUNDATIONS</option>
      
      <option  value="105104137/module5/lecture19.pdf">STRUCTURAL DESIGN OF MAT FOUNDATIONS</option>
      
      <option  value="105104137/module5/PROBLEMS.pdf">       PROBLEMS</option>
      
      <option  value="105104137/module5/REFERENCES.pdf">        REFERENCES</option>
      
      <option  value="105104137/module6/lecture20.pdf">LATERAL EARTH PRESSURE AT REST</option>
      
      <option  value="105104137/module6/lecture21.pdf">COULOMB�S ACTIVE EARTH PRESSURE</option>
      
      <option  value="105104137/module6/lecture22.pdf">LATERAL EARTH PRESSURE DUE TO SURCHARGE</option>
      
      <option  value="105104137/module6/lecture23.pdf">PASSIVE PRESSURE</option>
      
      <option  value="105104137/module6/PROBLEMS.pdf">           PROBLEMS</option>
      
      <option  value="105104137/module6/REFERENCES.pdf">         REFERENCES</option>
      
      <option  value="105104137/module7/lecture24.pdf">GRAVITY AND CANTILEVER WALLS</option>
      
      <option  value="105104137/module7/lecture25.pdf">Check for Bearing Capacity Failure</option>
      
      <option  value="105104137/module7/lecture26.pdf">COMMENTS RELATING TO STABILITY</option>
      
      <option  value="105104137/module7/lecture27.pdf">RETAINING WALLS WITH METALLIC STRIP REINFORCEMENT</option>
      
      <option  value="105104137/module7/lecture28.pdf">  RETAINING WALLS WITH METALLIC STRIP REINFORCEMENT</option>
      
      <option  value="105104137/module7/PROBLEMS.pdf">                 PROBLEMS</option>
      
      <option  value="105104137/module7/REFERENCES.pdf">                REFERENCES</option>
      
      <option  value="105104137/module8/lecture29.pdf">TYPES OF PILES AND THEIR STRUCTURAL CHARACTERISTICS</option>
      
      <option  value="105104137/module8/lecture30.pdf">LOAD TRANSFER MECHANISM</option>
      
      <option  value="105104137/module8/lecture31.pdf">FRICTIONAL (SKIN) RESISTANCE IN CLAY</option>
      
      <option  value="105104137/module8/lecture32.pdf">COMPARISON OF THEORY WITH FIELD LOAD TEST RESULTS</option>
      
      <option  value="105104137/module8/lecture33.pdf">PILE-DRIVING FORMULAS</option>
      
      <option  value="105104137/module8/lecture34.pdf">ULTIMATE CAPACITY OF GROUP</option>
      
      <option  value="105104137/module8/PROBLEMS.pdf">PROBLEMS</option>
      
      <option  value="105104137/module8/REFERENCES.pdf">REFERENCES</option>
      
      <option  value="105104137/module9/lecture35.pdf">DRILLED SHAFTS</option>
      
      <option  value="105104137/module9/Lecture36.pdf">DRILLED SHAFTS IN SAND-LOAD-BEARING CAPACITY</option>
      
      <option  value="105104137/module9/lecture37.pdf">DRILLED SHAFTS IN CLAY-LOAD-BEARING CAPACITY</option>
      
      <option  value="105104137/module9/lecture38.pdf">UPLIFT CAPACITY OF DRILLED SHAFTS</option>
      
      <option  value="105104137/module9/lecture39.pdf">LATERAL LOAD-CARRYING CAPACITY</option>
      
      <option  value="105104137/module9/lecture40.pdf">CAISSONS</option>
      
      <option  value="105104137/module9/PROBLEMS.pdf">PROBLEMS</option>
      
      <option  value="105104137/module9/REFERENCES.pdf">REFERENCES</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105105039</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Advanced Foundation Engineering</strong></td>
	<td><strong>Dr. Kousik Deb</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105039/mod01lec01.mp4">Introduction</option>
      
      <option  value="105105039/mod01lec02.mp4">Soil Exploration</option>
      
      <option  value="105105039/mod01lec03.mp4">Soil Exploration - Penetration</option>
      
      <option  value="105105039/mod01lec04.mp4">Soil Exploration - Geophysical Exploration</option>
      
      <option  value="105105039/mod01lec05.mp4">Shallow Foundation : Introduction</option>
      
      <option  value="105105039/mod01lec06.mp4">Shallow Foundation : Bearing Capacity - I</option>
      
      <option  value="105105039/mod01lec07.mp4">Shallow Foundation : Bearing Capacity - II</option>
      
      <option  value="105105039/mod01lec08.mp4">Shallow Foundation : Bearing Capacity - III</option>
      
      <option  value="105105039/mod01lec09.mp4">Shallow Foundation : Bearing Capacity - IV</option>
      
      <option  value="105105039/mod01lec10.mp4">Shallow Foundation : Bearing Capacity - V</option>
      
      <option  value="105105039/mod01lec11.mp4">Shallow Foundation : Settlement Calculation - I</option>
      
      <option  value="105105039/mod01lec12.mp4">Shallow Foundation : Settlement Calculation - II</option>
      
      <option  value="105105039/mod01lec13.mp4">Shallow Foundation : Settlement Calculation - III</option>
      
      <option  value="105105039/mod01lec14.mp4">Design of Shallow Foundation</option>
      
      <option  value="105105039/mod01lec15.mp4">Design of Raft Foundation</option>
      
      <option  value="105105039/mod01lec16.mp4">Deep Foundation - Introduction</option>
      
      <option  value="105105039/mod01lec17.mp4">Pile Foundation - Load Carrying Capacity - I</option>
      
      <option  value="105105039/mod01lec18.mp4">Pile Foundation - Load Carrying Capacity - II</option>
      
      <option  value="105105039/mod01lec19.mp4">Pile Foundation - Load Carrying Capacity - III and Settlement Calculation</option>
      
      <option  value="105105039/mod01lec20.mp4">Design of Retaining Wall</option>
      
      <option  value="105105039/mod01lec21.mp4">Design of Retaining Wall - II</option>
      
      <option  value="105105039/mod01lec22.mp4">Design of Sheet Piles</option>
      
      <option  value="105105039/mod01lec23.mp4">Design of Sheet Piles (Contd.)</option>
      
      <option  value="105105039/mod01lec24.mp4">Design of Sheet Piles (Contd. )</option>
      
      <option  value="105105039/mod01lec25.mp4">Design of Sheet Piles   (Contd.)</option>
      
      <option  value="105105039/mod01lec26.mp4">Reinforced Earth</option>
      
      <option  value="105105039/mod01lec27.mp4">Reinforced Retaining Wall</option>
      
      <option  value="105105039/mod01lec28.mp4">Seismic Design of Retaining Wall</option>
      
      <option  value="105105039/mod01lec29.mp4">Seismic Design of Retaining Wall (Contd.)</option>
      
      <option  value="105105039/mod01lec30.mp4">Soil - Foundation Interaction</option>
      
      <option  value="105105039/mod01lec31.mp4">Soil - Foundation Interaction (Contd.)</option>
      
      <option  value="105105039/mod01lec32.mp4">Soil - Foundation Interaction   (Contd.)</option>
      
      <option  value="105105039/mod01lec33.mp4">Soil - Foundation Interaction     (Contd.)</option>
      
      <option  value="105105039/mod01lec34.mp4">Soil - Foundation Interaction (  Contd.)</option>
      
      <option  value="105105039/mod01lec35.mp4"> Soil - Foundation Interaction     (Contd.)</option>
      
      <option  value="105105039/mod01lec36.mp4">Soil - Foundation  Interaction     (Contd.)</option>
      
      <option  value="105105039/mod01lec37.mp4">  Soil - Foundation Interaction     (Contd.)</option>
      
      <option  value="105105039/mod01lec38.mp4">Tension and Lateral Loaded Piles</option>
      
      <option  value="105105039/mod01lec39.mp4">Well Foundation</option>
      
      <option  value="105105039/mod01lec40.mp4">Well Foundation (Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105105043</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Numerical Methods in Civil Engineering</strong></td>
	<td><strong>Dr. A. Deb</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
<option value="105105043/mod01lec01.mp4">Lecture-01</option>
<option value="105105043/mod01lec02.mp4">Lecture-02</option>
<option value="105105043/mod01lec03.mp4">Lecture-03</option>
<option value="105105043/mod01lec04.mp4">Lecture-04</option>
<option value="105105043/mod01lec05.mp4">Lecture-05</option>
<option value="105105043/mod01lec06.mp4">Lecture-06</option>
<option value="105105043/mod01lec07.mp4">Lecture-07</option>
<option value="105105043/mod01lec08.mp4">Lecture-08</option>
<option value="105105043/mod01lec09.mp4">Lecture-09</option>
<option value="105105043/mod01lec10.mp4">Lecture-10</option>
<option value="105105043/mod01lec11.mp4">Lecture-11</option>
<option value="105105043/mod01lec12.mp4">Lecture-12</option>
<option value="105105043/mod01lec13.mp4">Lecture-13</option>
<option value="105105043/mod01lec14.mp4">Lecture-14</option>
<option value="105105043/mod01lec15.mp4">Lecture-15</option>
<option value="105105043/mod01lec16.mp4">Lecture-16</option>
<option value="105105043/mod01lec17.mp4">Lecture-17</option>
<option value="105105043/mod01lec18.mp4">Lecture-18</option>
<option value="105105043/mod01lec19.mp4">Lecture-19</option>
<option value="105105043/mod01lec20.mp4">Lecture-20</option>
<option value="105105043/mod01lec21.mp4">Lecture-21</option>
<option value="105105043/mod01lec22.mp4">Lecture-22</option>
<option value="105105043/mod01lec23.mp4">Lecture-23</option>
<option value="105105043/mod01lec24.mp4">Lecture-24</option>
<option value="105105043/mod01lec25.mp4">Lecture-25</option>
<option value="105105043/mod01lec26.mp4">Lecture-26</option>
<option value="105105043/mod01lec27.mp4">Lecture-27</option>
<option value="105105043/mod01lec28.mp4">Lecture-28</option>
<option value="105105043/mod01lec29.mp4">Lecture-29</option>
<option value="105105043/mod01lec30.mp4">Lecture-30</option>
<option value="105105043/mod01lec31.mp4">Lecture-31</option>
<option value="105105043/mod01lec32.mp4">Lecture-32</option>
<option value="105105043/mod01lec33.mp4">Lecture-33</option>
<option value="105105043/mod01lec34.mp4">Lecture-34</option>
<option value="105105043/mod01lec35.mp4">Lecture-35</option>
<option value="105105043/mod01lec36.mp4">Lecture-36</option>
<option value="105105043/mod01lec37.mp4">Lecture-37</option>
<option value="105105043/mod01lec38.mp4">Lecture-38</option>
<option value="105105043/mod01lec39.mp4">Lecture-39</option>
<option value="105105043/mod01lec40.mp4">Lecture-40</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105105045</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Probability Methods in Civil Engineering</strong></td>
	<td><strong>Dr. Rajib Maity</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
 <option value="105105045/mod01lec01.mp4">Lecture-01</option>
<option value="105105045/mod01lec02.mp4">Lecture-02</option>
<option value="105105045/mod01lec03.mp4">Lecture-03</option>
<option value="105105045/mod01lec04.mp4">Lecture-04</option>
<option value="105105045/mod01lec05.mp4">Lecture-05</option>
<option value="105105045/mod01lec06.mp4">Lecture-06</option>
<option value="105105045/mod01lec07.mp4">Lecture-07</option>
<option value="105105045/mod01lec08.mp4">Lecture-08</option>
<option value="105105045/mod01lec09.mp4">Lecture-09</option>
<option value="105105045/mod01lec10.mp4">Lecture-10</option>
<option value="105105045/mod01lec11.mp4">Lecture-11</option>
<option value="105105045/mod01lec12.mp4">Lecture-12</option>
<option value="105105045/mod01lec13.mp4">Lecture-13</option>
<option value="105105045/mod01lec14.mp4">Lecture-14</option>
<option value="105105045/mod01lec15.mp4">Lecture-15</option>
<option value="105105045/mod01lec16.mp4">Lecture-16</option>
<option value="105105045/mod01lec17.mp4">Lecture-17</option>
<option value="105105045/mod01lec18.mp4">Lecture-18</option>
<option value="105105045/mod01lec19.mp4">Lecture-19</option>
<option value="105105045/mod01lec20.mp4">Lecture-20</option>
<option value="105105045/mod01lec21.mp4">Lecture-21</option>
<option value="105105045/mod01lec22.mp4">Lecture-22</option>
<option value="105105045/mod01lec23.mp4">Lecture-23</option>
<option value="105105045/mod01lec24.mp4">Lecture-24</option>
<option value="105105045/mod01lec25.mp4">Lecture-25</option>
<option value="105105045/mod01lec26.mp4">Lecture-26</option>
<option value="105105045/mod01lec27.mp4">Lecture-27</option>
<option value="105105045/mod01lec28.mp4">Lecture-28</option>
<option value="105105045/mod01lec29.mp4">Lecture-29</option>
<option value="105105045/mod01lec30.mp4">Lecture-30</option>
<option value="105105045/mod01lec31.mp4">Lecture-31</option>
<option value="105105045/mod01lec32.mp4">Lecture-32</option>
<option value="105105045/mod01lec33.mp4">Lecture-33</option>
<option value="105105045/mod01lec34.mp4">Lecture-34</option>
<option value="105105045/mod01lec35.mp4">Lecture-35</option>
<option value="105105045/mod01lec36.mp4">Lecture-36</option>
<option value="105105045/mod01lec37.mp4">Lecture-37</option>
<option value="105105045/mod01lec38.mp4">Lecture-38</option>
<option value="105105045/mod01lec39.mp4">Lecture-39</option>
<option value="105105045/mod01lec40.mp4">Lecture-40</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105105048</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Wastewater management</strong></td>
	<td><strong>Dr. M.M. Ghangrekar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105048/M1L1.pdf">Introduction</option>
      
      <option  value="105105048/M2L2.pdf">System of Sanitation</option>
      
      <option  value="105105048/M3L3.pdf">Sewer Material</option>
      
      <option  value="105105048/M4L4.pdf">Quantity Estimation of Sewage</option>
      
      <option  value="105105048/M5L5.pdf">Population Forecasting</option>
      
      <option  value="105105048/M6L6.pdf">Quantity Estimation of Storm Water</option>
      
      <option  value="105105048/M7L7.pdf">Hydraulic Design of Sewers and Storm Water Drains</option>
      
      <option  value="105105048/M7L8.pdf">Hydraulic Design of Sewers and Storm Water Drains (Contd.)</option>
      
      <option  value="105105048/M7L9.pdf">Hydraulic Design Of Sewers And Storm Water Drains  (Contd.)</option>
      
      <option  value="105105048/M8L10.pdf">Sewer Appurtenances</option>
      
      <option  value="105105048/M9L11.pdf">Sewage And Storm water Pumping Stations</option>
      
      <option  value="105105048/M10L12.pdf">Classification Of Water Pollutants And Effects On Environment</option>
      
      <option  value="105105048/M11L13.pdf">Water Quality And Estimation Of Organic Content</option>
      
      <option  value="105105048/M11L14.pdf">Water Quality And Estimation Of Organic Content (Contd.)</option>
      
      <option  value="105105048/M12L15.pdf">Self Purification Of Natural Streams</option>
      
      <option  value="105105048/M13L16.pdf">Characteristics Of Sewage And Overview of Treatment Methods</option>
      
      <option  value="105105048/M13L17.pdf">Characteristics Of Sewage And Overview Of Treatment Methods (Contd.)</option>
      
      <option  value="105105048/M14L18.pdf">Screens</option>
      
      <option  value="105105048/M15L19.pdf">Grit Chamber</option>
      
      <option  value="105105048/M15L20.pdf">Grit Chamber (Contd.)</option>
      
      <option  value="105105048/M16L21.pdf">Primary Sedimentation Tank</option>
      
      <option  value="105105048/M17L22.pdf">Other Primary Treatment Systems</option>
      
      <option  value="105105048/M18L23.pdf">Secondary Treatment</option>
      
      <option  value="105105048/M19L24.pdf">Aerobic Secondary Treatment Of Wastewater</option>
      
      <option  value="105105048/M19L25.pdf">Aerobic Secondary Treatment Of Wastewater (Contd.)</option>
      
      <option  value="105105048/M19L26.pdf">Aerobic Secondary Treatment Of Wastewater  (Contd.)</option>
      
      <option  value="105105048/M19L27.pdf">Aerobic Secondary Treatment Of Wastewater   (Contd.)</option>
      
      <option  value="105105048/M19L28.pdf">Aerobic Secondary Treatment Of Wastewater    (Contd.)</option>
      
      <option  value="105105048/M19L29.pdf">Aerobic Secondary Treatment Of  Wastewater (Contd.)</option>
      
      <option  value="105105048/M19L30.pdf">Aerobic Secondary  Treatment Of Wastewater (Contd.)</option>
      
      <option  value="105105048/M19L31.pdf">Aerobic Secondary  Treatment Of Wastewater</option>
      
      <option  value="105105048/M20L32.pdf">Secondary Sedimentation</option>
      
      <option  value="105105048/M21L33.pdf">Anaerobic Wastewater Treatment Processes</option>
      
      <option  value="105105048/M21L34.pdf">Anaerobic Wastewater Treatment Processes (Contd.)</option>
      
      <option  value="105105048/M21L35.pdf">Anaerobic Wastewater Treatment  Processes (Contd.)</option>
      
      <option  value="105105048/M22L36.pdf">Sludge Management</option>
      
      <option  value="105105048/M22L37.pdf">Sludge Management (Contd.)</option>
      
      <option  value="105105048/M23L38.pdf">Tertiary Wastewater Treatment</option>
      
      <option  value="105105048/M23L39.pdf">Tertiary Wastewater Treatment (Contd.)</option>
      
      <option  value="105105048/M24L40.pdf">Onsite Sanitation</option>
      
      <option  value="105105048/M24L41.pdf">Onsite Sanitation (Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105105105</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Design of Reinforced Concrete Structures</strong></td>
	<td><strong>Prof. N. Dhang</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105105/lec01.mp4">Introduction - I</option>
      
      <option  value="105105105/lec02.mp4">Materials</option>
      
      <option  value="105105105/lec03.mp4">Different Methods of Design of Reinforced Concrete Structures</option>
      
      <option  value="105105105/lec04.mp4">Working Stress Method</option>
      
      <option  value="105105105/lec05.mp4">Working Stress Method (Contd...)</option>
      
      <option  value="105105105/lec06.mp4">Limit State of Collapse Flexure</option>
      
      <option  value="105105105/lec07.mp4">Limit State of Collapse Flexure - II</option>
      
      <option  value="105105105/lec08.mp4">Design of Doubly Reinforced Beam Flexure - I</option>
      
      <option  value="105105105/lec09.mp4">Design of Doubly Reinforced Beam Flexure - II</option>
      
      <option  value="105105105/lec10.mp4">Design of Doubly Reinforced Beam Flexure</option>
      
      <option  value="105105105/lec11.mp4">Limit State of Collapse Shear</option>
      
      <option  value="105105105/lec12.mp4">Design for Shear</option>
      
      <option  value="105105105/lec13.mp4">Design for Shear (Contd....)</option>
      
      <option  value="105105105/lec14.mp4">Design of Slabs Part - 1</option>
      
      <option  value="105105105/lec15.mp4">Design of Slabs Part - II</option>
      
      <option  value="105105105/lec16.mp4">Design of Slabs Part - III</option>
      
      <option  value="105105105/lec17.mp4">Design of Slabs Part - IV</option>
      
      <option  value="105105105/lec18.mp4">Design of Slabs Part - V</option>
      
      <option  value="105105105/lec19.mp4">Design of Columns Part - I</option>
      
      <option  value="105105105/lec20.mp4">Design of Columns Part - II</option>
      
      <option  value="105105105/lec21.mp4">Design of Columns Part - III</option>
      
      <option  value="105105105/lec22.mp4">Design of Columns Part - IV</option>
      
      <option  value="105105105/lec23.mp4">Design of Columns Part - V</option>
      
      <option  value="105105105/lec24.mp4">Design of Footings Part - I</option>
      
      <option  value="105105105/lec25.mp4">Design of Footings Part - II</option>
      
      <option  value="105105105/lec26.mp4">Design of Staircases</option>
      
      <option  value="105105105/lec27.mp4">Design for Torsion</option>
      
      <option  value="105105105/lec28.mp4">Design for Torsion Part - II</option>
      
      <option  value="105105105/lec29.mp4">Design of RC Slender Columns</option>
      
      <option  value="105105105/lec30.mp4">Deflection of RC Beams</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105105106</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Engineering Geology</strong></td>
	<td><strong>Dr. Debasis Roy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105106/lec01.mp4">Introduction to Engineering Geology</option>
      
      <option  value="105105106/lec02.mp4">Geologic Structures</option>
      
      <option  value="105105106/lec03.mp4">Geologic Maps and Stratigraphic Sections</option>
      
      <option  value="105105106/lec04.mp4">Remote Sensing in Engineering Geology</option>
      
      <option  value="105105106/lec05.mp4">Physical Properties of Minerals</option>
      
      <option  value="105105106/lec06.mp4">Crystallography and Optical Properties</option>
      
      <option  value="105105106/lec07.mp4">Chemical Characteristics of Minerals</option>
      
      <option  value="105105106/lec08.mp4">Origin And Types of Rocks</option>
      
      <option  value="105105106/lec09.mp4">Origin And Types of Soils</option>
      
      <option  value="105105106/lec10.mp4">Igneous Rocks</option>
      
      <option  value="105105106/lec11.mp4">Sedimentary Rocks</option>
      
      <option  value="105105106/lec12.mp4">Metamorphic Rocks</option>
      
      <option  value="105105106/lec13.mp4">Weathering</option>
      
      <option  value="105105106/lec14.mp4">Sediment Transport and Deposition</option>
      
      <option  value="105105106/lec15.mp4">Introduction to Subsurface Exploration</option>
      
      <option  value="105105106/lec16.mp4">Introduction to Subsurface Exploration</option>
      
      <option  value="105105106/lec17.mp4">Sampling and Non - Intrusive Methods</option>
      
      <option  value="105105106/lec18.mp4">Index Properties and Classification of Soils</option>
      
      <option  value="105105106/lec19.mp4">Index Properties of Rock and Rock Mass</option>
      
      <option  value="105105106/lec20.mp4">Stress-Strain Behavior of Soil and Rock</option>
      
      <option  value="105105106/lec21.mp4">Stress-Strain Behavior of Soil and Rock - II</option>
      
      <option  value="105105106/lec22.mp4">In-situ State of Stress</option>
      
      <option  value="105105106/lec23.mp4">Geologic Considerations in Tunneling</option>
      
      <option  value="105105106/lec24.mp4">Geologic Considerations in Dam Construction</option>
      
      <option  value="105105106/lec25.mp4">Groundwater - Preliminaries</option>
      
      <option  value="105105106/lec26.mp4">Groundwater Flow</option>
      
      <option  value="105105106/lec27.mp4">Groundwater Flow - II</option>
      
      <option  value="105105106/lec28.mp4">Groundwater Related Engineering Issues</option>
      
      <option  value="105105106/lec29.mp4">Groundwater Over Utilization</option>
      
      <option  value="105105106/lec30.mp4">Plate Tectonics</option>
      
      <option  value="105105106/lec31.mp4">Plate Tectonics - 2 and Earthquake</option>
      
      <option  value="105105106/lec32.mp4">Earthquake Hazard Assessment</option>
      
      <option  value="105105106/lec33.mp4">Geologic Hazards - Seismicity and Volcanism</option>
      
      <option  value="105105106/lec34.mp4">Geologic Hazards - Shoreline Processes</option>
      
      <option  value="105105106/lec35.mp4">Geologic Hazards - Shoreline Processes</option>
      
      <option  value="105105106/lec36.mp4">Geologic Hazards - Landslide Hazards - Zoning</option>
      
      <option  value="105105106/lec37.mp4">Geologic Hazards Subsidence , Collapsible Soils</option>
      
      <option  value="105105106/lec38.mp4">Preparation of Geologic Sections</option>
      
      <option  value="105105106/lec39.mp4">Index testing of soil & rocks</option>
      
      <option  value="105105106/lec40.mp4">Identification of minerals and rock samples</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105105107</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Introduction to Transportation Engineering</strong></td>
	<td><strong>Dr. Bhargab Maitra,Dr. K.S. Reddy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105107/lec01.mp4">Transportation Engineering</option>
      
      <option  value="105105107/lec02.mp4">Elements of Concern and Components</option>
      
      <option  value="105105107/lec03.mp4">Traffic Stream Characteristics</option>
      
      <option  value="105105107/lec04.mp4">Traffic Studies : Part - I</option>
      
      <option  value="105105107/lec05.mp4">Traffic Studies : Part - II</option>
      
      <option  value="105105107/lec06.mp4">Highway Capacity and Level of Service</option>
      
      <option  value="105105107/lec07.mp4">Intersection Control and Signalization</option>
      
      <option  value="105105107/lec08.mp4">Functional Classification, Design Elements</option>
      
      <option  value="105105107/lec09.mp4">Cross Section Elements</option>
      
      <option  value="105105107/lec10.mp4">Stopping Sight Distance And Decision Sight</option>
      
      <option  value="105105107/lec11.mp4">Overtaking, Intermediate and Headlight Sight</option>
      
      <option  value="105105107/lec12.mp4">Intersection Sight Distance - I</option>
      
      <option  value="105105107/lec13.mp4">Intersection Sight Distance - II</option>
      
      <option  value="105105107/lec14.mp4">Horizontal Alignment - I</option>
      
      <option  value="105105107/lec15.mp4">Horizontal Alignment - II</option>
      
      <option  value="105105107/lec16.mp4">Horizontal Alignment - III</option>
      
      <option  value="105105107/lec17.mp4">Horizontal Alignment - IV</option>
      
      <option  value="105105107/lec18.mp4">Horizontal Alignment - V</option>
      
      <option  value="105105107/lec19.mp4">Horizontal Alignment - VI</option>
      
      <option  value="105105107/lec20.mp4">Vertical Alignment - I</option>
      
      <option  value="105105107/lec21.mp4">Vertical Alignment - II</option>
      
      <option  value="105105107/lec22.mp4">Vertical Alignment - III</option>
      
      <option  value="105105107/lec23.mp4">Highway Alignment</option>
      
      <option  value="105105107/lec24.mp4">Principles of Pavement Design</option>
      
      <option  value="105105107/lec25.mp4">Traffic Loading - I</option>
      
      <option  value="105105107/lec26.mp4">Traffic Loading - II</option>
      
      <option  value="105105107/lec27.mp4">Pavement Materials - I</option>
      
      <option  value="105105107/lec28.mp4">Pavement Materials - II</option>
      
      <option  value="105105107/lec29.mp4">Pavement Materials - III</option>
      
      <option  value="105105107/lec30.mp4">Pavement Materials - IV</option>
      
      <option  value="105105107/lec31.mp4">Pavement Materials - V</option>
      
      <option  value="105105107/lec32.mp4">Design of Bituminous Mixes - I</option>
      
      <option  value="105105107/lec33.mp4">Design of Bituminous Mixes - II</option>
      
      <option  value="105105107/lec34.mp4">Analysis of Flexible Pavements</option>
      
      <option  value="105105107/lec35.mp4">Analysis of Concrete Pavements</option>
      
      <option  value="105105107/lec36.mp4">Flexible Pavement Design Indian Roads Congress</option>
      
      <option  value="105105107/lec37.mp4">Flexible Pavement Design AASHTO Method - 1993</option>
      
      <option  value="105105107/lec38.mp4">Concrete Pavement Design Indian Congress Method</option>
      
      <option  value="105105107/lec39.mp4">Concrete Pavement Design PCA and AASHTO Methods</option>
      
      <option  value="105105107/lec40.mp4">Pavement Evaluation and Rehabilitation</option>
      
      <option  value="105105107/lec41.mp4">Overlay Design - IRC Method</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105105108</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Strength of Materials</strong></td>
	<td><strong>Prof. S.K. Bhattacharyya</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105105108/lec01.mp4">Introduction - Strength of Materials</option>
      
      <option  value="105105108/lec02.mp4">Analysis of Stress - 1</option>
      
      <option  value="105105108/lec03.mp4">Analysis of Stress - II</option>
      
      <option  value="105105108/lec04.mp4">Analysis of Stress - III</option>
      
      <option  value="105105108/lec05.mp4">Analysis of Stress - IV</option>
      
      <option  value="105105108/lec06.mp4">Analysis of Stress - V</option>
      
      <option  value="105105108/lec07.mp4">Analysis of Strain - I</option>
      
      <option  value="105105108/lec08.mp4">Analysis of Strain - II</option>
      
      <option  value="105105108/lec09.mp4">Analysis of Strain III</option>
      
      <option  value="105105108/lec10.mp4">Analysis of Strain IV</option>
      
      <option  value="105105108/lec11.mp4">Analysis of Strain V</option>
      
      <option  value="105105108/lec12.mp4">Analysis of Strain VI</option>
      
      <option  value="105105108/lec13.mp4">Analysis of Strain VII</option>
      
      <option  value="105105108/lec14.mp4">Analysis of Strain - VIII</option>
      
      <option  value="105105108/lec15.mp4">Application of Stress/Strain</option>
      
      <option  value="105105108/lec16.mp4">Application of Stress / Strain</option>
      
      <option  value="105105108/lec17.mp4">Application of Stress / Strain</option>
      
      <option  value="105105108/lec18.mp4">Torsion - I</option>
      
      <option  value="105105108/lec19.mp4">Torsion - II</option>
      
      <option  value="105105108/lec20.mp4">Torsion - III</option>
      
      <option  value="105105108/lec21.mp4">Torsion - IV</option>
      
      <option  value="105105108/lec22.mp4">Bending of Beams - I</option>
      
      <option  value="105105108/lec23.mp4">Bending of Beams - II</option>
      
      <option  value="105105108/lec24.mp4">Bending of Beams - III</option>
      
      <option  value="105105108/lec25.mp4">Bending of Beam - IV</option>
      
      <option  value="105105108/lec26.mp4">Stresses in Beams - I</option>
      
      <option  value="105105108/lec27.mp4">Stresses in Beams - II</option>
      
      <option  value="105105108/lec28.mp4">Stresses in Beams - III</option>
      
      <option  value="105105108/lec29.mp4">Stresses in Beams - IV</option>
      
      <option  value="105105108/lec30.mp4">Deflection of Beams - I</option>
      
      <option  value="105105108/lec31.mp4">Deflection of Beams - II</option>
      
      <option  value="105105108/lec32.mp4">Deflection of Beams - III</option>
      
      <option  value="105105108/lec33.mp4">Deflection of Beams - IV</option>
      
      <option  value="105105108/lec34.mp4">Combined Stresses - I</option>
      
      <option  value="105105108/lec35.mp4">Combined Stresses - II</option>
      
      <option  value="105105108/lec36.mp4">Combined Stresses - III</option>
      
      <option  value="105105108/lec37.mp4">Stability of Columns - I</option>
      
      <option  value="105105108/lec38.mp4">Stability of Columns - II</option>
      
      <option  value="105105108/lec39.mp4">Springs - I</option>
      
      <option  value="105105108/lec40.mp4">Springs - II</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105106112</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Design of Steel Structures I</strong></td>
	<td><strong>Prof. A.R. Shantha Kumar,Prof. S.R. Satishkumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106112/Design_Steel_Structures_I/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105106113</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Design of Steel Structures II</strong></td>
	<td><strong>Prof. A.R. Shantha Kumar,Prof. S.R. Satishkumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106113/Design_Steel_Structures_II/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105106114</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Hydraulics</strong></td>
	<td><strong>Dr. B.S. Thandaveswara,Prof. B.S. Murty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106114/Hydraulics/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105106115</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Infrastructure Planning and Management</strong></td>
	<td><strong>Prof. Hema A Murthy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106115/Infrastructure_Planning_Management/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105106117</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Pre-stressed Concrete Structures</strong></td>
	<td><strong>Dr. Amlan Kumar Sengupta,Prof. Devdas Menon</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106117/PreStressed_Concrete_Structures/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106050</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Advanced Structural Analysis</strong></td>
	<td><strong>Prof. Devdas Menon</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106050/mod01lec01.mp4">Lecture - 1 Review of Basic Structural Analysis I</option>
      
      <option  value="105106050/mod01lec02.mp4">Lecture - 2 Review of Basic Structural Analysis I</option>
      
      <option  value="105106050/mod01lec03.mp4">Leture - 3 Review of Basic Structural Analysis I</option>
      
      <option  value="105106050/mod01lec04.mp4">Leture - 4 Review of Basic Structural Analysis I</option>
      
      <option  value="105106050/mod01lec05.mp4">Leture - 5 Review of Basic Structural Analysis I</option>
      
      <option  value="105106050/mod01lec06.mp4">Leture - 6 Review of Basic Structural Analysis I</option>
      
      <option  value="105106050/mod02lec07.mp4">Lecture - 7 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec08.mp4">Lecture - 8 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec09.mp4">Lecture - 9 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec10.mp4">Lecture - 10 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec11.mp4">Lecture - 11 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec12.mp4">Lecture - 12 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec13.mp4">Lecture - 13 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec14.mp4">Lecture - 14 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec15.mp4">Lecture - 15 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod02lec16.mp4">Lecture - 16 Review of Basic Structural Analysis II</option>
      
      <option  value="105106050/mod03lec17.mp4">Lecture - 17 Basic Matrix Concepts</option>
      
      <option  value="105106050/mod03lec18.mp4">Lecture - 18 Basic Matrix Concepts</option>
      
      <option  value="105106050/mod03lec19.mp4">Lecture - 19 Basic Matrix Concepts</option>
      
      <option  value="105106050/mod03lec20.mp4">Lecture - 20 Basic Matrix Concepts</option>
      
      <option  value="105106050/mod03lec21.mp4">Lecture - 21 Basic Matrix Concepts</option>
      
      <option  value="105106050/mod04lec22.mp4">Lecture - 22 Matrix Analysis of Structures with Axial Elements</option>
      
      <option  value="105106050/mod04lec23.mp4">Lecture - 23 Matrix Analysis of Structures with Axial Elements</option>
      
      <option  value="105106050/mod04lec24.mp4">Lecture - 24 Matrix Analysis of Structures with Axial Elements</option>
      
      <option  value="105106050/mod04lec25.mp4">Lecture - 25 Matrix Analysis of Structures with Axial Elements</option>
      
      <option  value="105106050/mod04lec26.mp4">Lecture - 26 Matrix Analysis of Structures with Axial Elements</option>
      
      <option  value="105106050/mod05lec27.mp4">Lecture - 27 Matrix Analysis of Beams and Grids</option>
      
      <option  value="105106050/mod05lec28.mp4">Lecture - 28 Matrix Analysis of Beams and Grids</option>
      
      <option  value="105106050/mod05lec29.mp4">Lecture - 29 Matrix Analysis of Beams and Grids</option>
      
      <option  value="105106050/mod05lec30.mp4">Lecture - 30 Matrix Analysis of Beams and Grids</option>
      
      <option  value="105106050/mod05lec31.mp4">Lecture - 31 Matrix Analysis of Beams and Grids</option>
      
      <option  value="105106050/mod05lec32.mp4">Lecture - 32 Matrix Analysis of Beams and Grids</option>
      
      <option  value="105106050/mod06lec33.mp4">Lecture - 33 Matrix Analysis of Plane and Space Frames</option>
      
      <option  value="105106050/mod06lec34.mp4">Lecture - 34 Matrix Analysis of Plane and Space Frames</option>
      
      <option  value="105106050/mod06lec35.mp4">Lecture - 35 Matrix Analysis of Plane and Space Frames</option>
      
      <option  value="105106050/mod06lec36.mp4">Lecture - 36 Matrix Analysis of Plane and Space Frames</option>
      
      <option  value="105106050/mod06lec37.mp4">Lecture - 37 Matrix Analysis of Plane and Space Frames</option>
      
      <option  value="105106050/mod07lec38.mp4">Lecture - 38 Analysis of elastic instability and second-order effects</option>
      
      <option  value="105106050/mod07lec39.mp4">Lecture - 39 Analysis of elastic instability and second-order effects</option>
      
      <option  value="105106050/mod07lec40.mp4">Lecture - 40 Analysis of elastic instability and second-order effects</option>
      
      <option  value="105106050/mod08lec41.mp4">Lecture - 41 Life beyond Structures & Analysis</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106051</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Finite Element Analysis</strong></td>
	<td><strong>Dr. B.N. Rao</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106051/Lec1.mp4">Lecture 1 </option>
      
      <option  value="105106051/Lec2.mp4">Lecture 2</option>
      
      <option  value="105106051/Lec3.mp4">Lecture 3</option>
      
      <option  value="105106051/Lec4.mp4">Lecture 4</option>
      
      <option  value="105106051/Lec5.mp4">Lecture 5</option>
      
      <option  value="105106051/Lec6.mp4">Lecture 6</option>
      
      <option  value="105106051/Lec7.mp4">Lecture 7</option>
      
      <option  value="105106051/Lec8.mp4">Lecture 8</option>
      
      <option  value="105106051/Lec9.mp4">Lecture 9</option>
      
      <option  value="105106051/Lec10.mp4">Lecture 10</option>
      
      <option  value="105106051/Lec11.mp4">Lecture 11</option>
      
      <option  value="105106051/Lec12.mp4">Lecture 12</option>
      
      <option  value="105106051/Lec13.mp4">Lecture 13</option>
      
      <option  value="105106051/Lec14.mp4">Lecture 14</option>
      
      <option  value="105106051/Lec15.mp4">Lecture 15</option>
      
      <option  value="105106051/Lec16.mp4">Lecture 16</option>
      
      <option  value="105106051/Lec17.mp4">Lecture 17</option>
      
      <option  value="105106051/Lec18.mp4">Lecture 18</option>
      
      <option  value="105106051/Lec19.mp4">Lecture 19</option>
      
      <option  value="105106051/Lec20.mp4">Lecture 20</option>
      
      <option  value="105106051/Lec21.mp4">Lecture 21</option>
      
      <option  value="105106051/Lec22.mp4">Lecture 22</option>
      
      <option  value="105106051/Lec23.mp4">Lecture 23</option>
      
      <option  value="105106051/Lec24.mp4">Lecture 24</option>
      
      <option  value="105106051/Lec25.mp4">Lecture 25</option>
      
      <option  value="105106051/Lec26.mp4">Lecture 26 </option>
      
      <option  value="105106051/Lec27.mp4">Lecture 27</option>
      
      <option  value="105106051/Lec28.mp4">Lecture 28</option>
      
      <option  value="105106051/Lec29.mp4">Lecture 29</option>
      
      <option  value="105106051/Lec30.mp4">Lecture 30</option>
      
      <option  value="105106051/Lec31.mp4">Lecture 31</option>
      
      <option  value="105106051/Lec32.mp4">Lecture 32</option>
      
      <option  value="105106051/Lec33.mp4">Lecture 33</option>
      
      <option  value="105106051/Lec34.mp4">Lecture 34</option>
      
      <option  value="105106051/Lec35.mp4">Lecture 35</option>
      
      <option  value="105106051/Lec36.mp4">Lecture 36</option>
      
      <option  value="105106051/Lec37.mp4">Lecture 37</option>
      
      <option  value="105106051/Lec38.mp4">Lecture 38</option>
      
      <option  value="105106051/Lec39.mp4">Lecture 39</option>
      
      <option  value="105106051/Lec40.mp4">Lecture 40</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106058</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Urban transportation planning</strong></td>
	<td><strong>Dr. V. Thamizh Arasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106058/mod01lec01.mp4">Lecture - 01 Introduction</option>
      
      <option  value="105106058/mod01lec02.mp4">Lecture - 02 Introduction Contd.</option>
      
      <option  value="105106058/mod01lec03.mp4">Lecture - 03 Introduction Contd.</option>
      
      <option  value="105106058/mod01lec04.mp4">Lecture - 04 Course Outline</option>
      
      <option  value="105106058/mod02lec05.mp4">Lecture - 05 Conceptual Aspects</option>
      
      <option  value="105106058/mod02lec06.mp4">Lecture - 06 Conceptual Aspects Contd.</option>
      
      <option  value="105106058/mod02lec07.mp4">Lecture - 07 Conceptual Aspects Contd.</option>
      
      <option  value="105106058/mod02lec08.mp4">Lecture - 08 Conceptual Aspects Contd.</option>
      
      <option  value="105106058/mod03lec09.mp4">Lecture - 09 Trip Generation Analysis</option>
      
      <option  value="105106058/mod03lec10.mp4">Lecture - 10 Trip Generation Analysis Contd.</option>
      
      <option  value="105106058/mod03lec11.mp4">Lecture - 11 Trip Generation Analysis Contd.</option>
      
      <option  value="105106058/mod03lec12.mp4">Lecture - 12 Trip Generation Analysis Contd.</option>
      
      <option  value="105106058/mod04lec13.mp4">Lecture - 13 Modal Split Analysis</option>
      
      <option  value="105106058/mod04lec14.mp4">Lecture - 14 Modal Split Analysis Contd.</option>
      
      <option  value="105106058/mod04lec15.mp4">Lecture - 15 Modal Split Analysis Contd.</option>
      
      <option  value="105106058/mod04lec16.mp4">Lecture - 16 Modal Split Analysis Contd.</option>
      
      <option  value="105106058/mod04lec17.mp4">Lecture - 17 Modal Split Analysis Contd.</option>
      
      <option  value="105106058/mod04lec18.mp4">Lecture - 18 Modal Split Analysis Contd.</option>
      
      <option  value="105106058/mod04lec19.mp4">Lecture - 19 Modal Split Analysis Contd.</option>
      
      <option  value="105106058/mod05lec20.mp4">Lecture - 20 Trip Distribution Analysis</option>
      
      <option  value="105106058/mod05lec21.mp4">Lecture - 21 Trip Distribution Analysis Contd.</option>
      
      <option  value="105106058/mod05lec22.mp4">Lecture - 22 Trip Distribution Analysis Contd.</option>
      
      <option  value="105106058/mod05lec23.mp4">Lecture - 23 Trip Distribution Analysis Contd.</option>
      
      <option  value="105106058/mod05lec24.mp4">Lecture - 24 Trip Distribution Analysis Contd.</option>
      
      <option  value="105106058/mod05lec25.mp4">Lecture - 25 Trip Distribution Analysis Contd.</option>
      
      <option  value="105106058/mod05lec26.mp4">Lecture - 26 Trip Distribution Analysis Contd.</option>
      
      <option  value="105106058/mod06lec27.mp4">Lecture - 27 Route Assignment</option>
      
      <option  value="105106058/mod06lec28.mp4">Lecture - 28 Route Assignment Contd.</option>
      
      <option  value="105106058/mod06lec29.mp4">Lecture - 29 Route Assignment Contd.</option>
      
      <option  value="105106058/mod06lec30.mp4">Lecture - 30 Route Assignment Contd.</option>
      
      <option  value="105106058/mod07lec31.mp4">Lecture - 31 Transportation Surveys</option>
      
      <option  value="105106058/mod07lec32.mp4">Lecture - 32 Transportation Surveys Contd.</option>
      
      <option  value="105106058/mod07lec33.mp4">Lecture - 33 Transportation Surveys Contd.</option>
      
      <option  value="105106058/mod08lec34.mp4">Lecture - 34 Transport Related Land-Use Models</option>
      
      <option  value="105106058/mod08lec35.mp4">Lecture - 35 Transport Related Land-Use Models Contd.</option>
      
      <option  value="105106058/mod08lec36.mp4">Lecture - 36 Transport Related Land-Use Models Contd.</option>
      
      <option  value="105106058/mod09lec37.mp4">Lecture - 37 Urban Structure</option>
      
      <option  value="105106058/mod09lec38.mp4">Lecture - 38 Urban Structure Contd.</option>
      
      <option  value="105106058/mod10lec39.mp4">Lecture - 39 Urban Goods Movement</option>
      
      <option  value="105106058/mod10lec40.mp4">Lecture - 40 Urban Goods Movement Contd.</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106116</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Mechanics of solids</strong></td>
	<td><strong>Prof. M.S. Sivakumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106116/lec01.mp4">Planar Rigid Body</option>
      
      <option  value="105106116/lec02.mp4">Degrees of freedom</option>
      
      <option  value="105106116/lec03.mp4">Equations of Equilibrium</option>
      
      <option  value="105106116/lec04.mp4">Planar rigid body Statics Example 1</option>
      
      <option  value="105106116/lec05.mp4">Rigid Body Statics Example 2</option>
      
      <option  value="105106116/lec08.mp4">Structural Systems with rigid bodies</option>
      
      <option  value="105106116/lec09.mp4">Types of 1-D Structural Elements</option>
      
      <option  value="105106116/lec10.mp4">Trusses - Axial members</option>
      
      <option  value="105106116/lec11.mp4">Analysis of Truss Systems</option>
      
      <option  value="105106116/lec12.mp4">Stability of Structural systems</option>
      
      <option  value="105106116/lec13.mp4">Trusses - additional discussions</option>
      
      <option  value="105106116/lec14.mp4">Trusses - Method of Sections</option>
      
      <option  value="105106116/lec15.mp4">Beams - example 1</option>
      
      <option  value="105106116/lec16.mp4">Beams - BMD & SFD</option>
      
      <option  value="105106116/lec17.mp4">Beams - loading, shear and BM relationships</option>
      
      <option  value="105106116/lec18.mp4">Virtual work method</option>
      
      <option  value="105106116/lec19.mp4">Virtual displacements</option>
      
      <option  value="105106116/lec20.mp4">Finding virtual displacements</option>
      
      <option  value="105106116/lec21.mp4">Virtual Work Method - Example 1</option>
      
      <option  value="105106116/lec22.mp4">Virtual Work Method - Example 2</option>
      
      <option  value="105106116/lec23.mp4">Static Friction - an understanding</option>
      
      <option  value="105106116/lec24.mp4">Belt Friction</option>
      
      <option  value="105106116/lec25.mp4">Friction : Solving Problems</option>
      
      <option  value="105106116/lec26.mp4">General concepts - rigid bodies</option>
      
      <option  value="105106116/lec27.mp4">Motion of a rigid body = a translation + a rotation</option>
      
      <option  value="105106116/lec28.mp4">Motion of a point of the rigid body</option>
      
      <option  value="105106116/lec29.mp4">Motion of one point on a rigid body relative to another</option>
      
      <option  value="105106116/lec30.mp4">Understanding rotational motion r_dot = w x r</option>
      
      <option  value="105106116/lec31.mp4">Kinematics velocity and acceleration</option>
      
      <option  value="105106116/lec32.mp4">Understanding Coriolis Acceleration</option>
      
      <option  value="105106116/lec33.mp4">Kinematics - Solving problems</option>
      
      <option  value="105106116/lec34.mp4">Equations of motion of a rigid body</option>
      
      <option  value="105106116/lec35.mp4">Tips and Techniques 1/2</option>
      
      <option  value="105106116/lec36.mp4">Tips and Techniques 2/2</option>
      
      <option  value="105106116/lec37.mp4">Solving Problems 1/4</option>
      
      <option  value="105106116/lec38.mp4">Solving Problems 2/4</option>
      
      <option  value="105106116/lec39.mp4">Solving Problems 3/4</option>
      
      <option  value="105106116/lec40.mp4">Solving Problems 4/4</option>
      
      <option  value="105106116/lec41.mp4">Engineering Statics - Solving problems</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106118</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Pre-stressed Concrete Structures</strong></td>
	<td><strong>Dr. Amlan Kumar Sengupta,Prof. Devdas Menon</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106118/lec01.mp4">Prestressing System</option>
      
      <option  value="105106118/lec02.mp4">Types of Prestressing</option>
      
      <option  value="105106118/lec03.mp4">Prestressing System and Devices(Pre-Tensioning)</option>
      
      <option  value="105106118/lec04.mp4">Prestressing System and Devices(Post-Tensioning)</option>
      
      <option  value="105106118/lec05.mp4">Concrete(Part-1)</option>
      
      <option  value="105106118/lec06.mp4">Concrete,Grout(Part-2)</option>
      
      <option  value="105106118/lec07.mp4">Prestressing Steel</option>
      
      <option  value="105106118/lec08.mp4">Losses in Prestress</option>
      
      <option  value="105106118/lec09.mp4">Friction&Anchorage Slip</option>
      
      <option  value="105106118/lec10.mp4">Creep,Shrinkage & Relaxation Losses</option>
      
      <option  value="105106118/lec11.mp4">Analysis of Members</option>
      
      <option  value="105106118/lec12.mp4">Analysis of Members Under Flexure</option>
      
      <option  value="105106118/lec13.mp4">Cracking Moment,Kern Point and Pressure Line</option>
      
      <option  value="105106118/lec14.mp4">Analysis of Rectangular sections</option>
      
      <option  value="105106118/lec15.mp4">Analysis of Flanged Sections</option>
      
      <option  value="105106118/lec16.mp4">Analysis of Partially Prestressed Section</option>
      
      <option  value="105106118/lec17.mp4">Design of Members</option>
      
      <option  value="105106118/lec18.mp4">Design of Members for Flexure (Type1 Members)</option>
      
      <option  value="105106118/lec19.mp4">Design of Members for Flexure (Type1&Type3)</option>
      
      <option  value="105106118/lec20.mp4">Choice of Sections and Determination of Limiting</option>
      
      <option  value="105106118/lec21.mp4">Magnel`s Graphical Method</option>
      
      <option  value="105106118/lec22.mp4">Detailing Requirements</option>
      
      <option  value="105106118/lec23.mp4">Analysis and Design for Shear and Torsion</option>
      
      <option  value="105106118/lec24.mp4">Design for Shear (Part 1)</option>
      
      <option  value="105106118/lec25.mp4">Design for Shear (Part 2)</option>
      
      <option  value="105106118/lec26.mp4">Analysis of Torsion</option>
      
      <option  value="105106118/lec27.mp4">Analysis of Torsion(Part -1)</option>
      
      <option  value="105106118/lec28.mp4">Analysis of Torsion(Part -2)</option>
      
      <option  value="105106118/lec29.mp4">Calculations of Deflection and Crack Width</option>
      
      <option  value="105106118/lec30.mp4">Transmission of Prestress</option>
      
      <option  value="105106118/lec31.mp4">Post-tensioned Members</option>
      
      <option  value="105106118/lec32.mp4">Cantilever Beams</option>
      
      <option  value="105106118/lec33.mp4">Continuous Beams(Part 1)</option>
      
      <option  value="105106118/lec34.mp4">Continuous Beams(Part 2)</option>
      
      <option  value="105106118/lec35.mp4">Composite Sections</option>
      
      <option  value="105106118/lec36.mp4">One-Way Slabs</option>
      
      <option  value="105106118/lec37.mp4">Two-Way Slabs(Part-1)</option>
      
      <option  value="105106118/lec38.mp4">Two-Way Slabs(Part-2)</option>
      
      <option  value="105106118/lec39.mp4">compression Members</option>
      
      <option  value="105106118/lec40.mp4">Circular Prestressing,Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106119</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Water and Waste Water Engineering</strong></td>
	<td><strong>Prof. Ligy Philip,Prof. C. Venkobachar,Prof. B.S. Murty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105106119/lec01.mp4">Introduction To Water & Waste Water Engineering</option>
      
      <option  value="105106119/lec02.mp4">Water & Waste Water Quality Enhancement</option>
      
      <option  value="105106119/lec03.mp4">Water & Waste Water Quantity Estimation</option>
      
      <option  value="105106119/lec04.mp4">Water & Waste Water Quantity Estimation (Contd)</option>
      
      <option  value="105106119/lec05.mp4">Water & Waste Water Characteristics</option>
      
      <option  value="105106119/lec06.mp4">Water & Waste Water Characteristics (Contd)</option>
      
      <option  value="105106119/lec07.mp4">Water Treatment System Unit Operations</option>
      
      <option  value="105106119/lec08.mp4">Sedimentation</option>
      
      <option  value="105106119/lec09.mp4">Sedimentation - Continued</option>
      
      <option  value="105106119/lec10.mp4">Coagulation & Flocculation</option>
      
      <option  value="105106119/lec11.mp4">Coagulation & Flocculation (Contd)</option>
      
      <option  value="105106119/lec12.mp4">Softening</option>
      
      <option  value="105106119/lec13.mp4">Filtration</option>
      
      <option  value="105106119/lec14.mp4">Filtration (Contd)</option>
      
      <option  value="105106119/lec15.mp4">Disinfection</option>
      
      <option  value="105106119/lec16.mp4">Introduction To Domestic Waste Water Treatment</option>
      
      <option  value="105106119/lec17.mp4">Physical Unit Processes For Waste Water Treatment</option>
      
      <option  value="105106119/lec18.mp4">Introduction To Microbiology</option>
      
      <option  value="105106119/lec19.mp4">Microbiology- Continued</option>
      
      <option  value="105106119/lec20.mp4">Waste Water Treatment Reactor Analysis</option>
      
      <option  value="105106119/lec21.mp4">Biological Unit Processes - Activated Sludge Process</option>
      
      <option  value="105106119/lec22.mp4">Activated Sludge Process -Modification</option>
      
      <option  value="105106119/lec23.mp4">Activated Sludge Process (Contd)</option>
      
      <option  value="105106119/lec24.mp4">Aeration,Nitrification And Denitrification</option>
      
      <option  value="105106119/lec25.mp4">Natural Waste Water Treatment Systems: Ponds & Lagoons</option>
      
      <option  value="105106119/lec26.mp4">Attached Growth Aerobic Process: Trickling Filters And Rotating Biological Contractors</option>
      
      <option  value="105106119/lec27.mp4">Anaerobic Treatment</option>
      
      <option  value="105106119/lec28.mp4">Anaerobic Process-UASB Reactor (Contd)</option>
      
      <option  value="105106119/lec29.mp4">UASB- Continued & Sludge Treatment</option>
      
      <option  value="105106119/lec30.mp4">Sludge Treatment (Contd)</option>
      
      <option  value="105106119/lec31.mp4">Sludge Treatment Continued & Waste Water Disposal</option>
      
      <option  value="105106119/lec32.mp4">Waste Water Disposal And Reuse</option>
      
      <option  value="105106119/lec33.mp4">Advanced Waste Water Treatment</option>
      
      <option  value="105106119/lec34.mp4">Adsorption</option>
      
      <option  value="105106119/lec35.mp4">Ion Exchange, Advanced Oxidation Process</option>
      
      <option  value="105106119/lec36.mp4">Industrial Waste Water Treatment</option>
      
      <option  value="105106119/lec37.mp4">Water Distribution Networks</option>
      
      <option  value="105106119/lec38.mp4">Sanitary sewerage systems</option>
      
      <option  value="105106119/lec39.mp4">Storm water sewerage systems</option>
      
      <option  value="105106119/lec40.mp4">Intake Structures And Pumping Installations</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105107059</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Advanced Hydraulics</strong></td>
	<td><strong>Dr. C. S. P. Ojha</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107059/module1/lecture1/lecture1.pdf">Classification, types and regimes in Open channel flow</option>
      
      <option  value="105107059/module1/lecture2/lecture2.pdf">Channel geometry</option>
      
      <option  value="105107059/module1/lecture3/lecture3.pdf">Velocity distribution in open channel, Wide-open channel</option>
      
      <option  value="105107059/module1/lecture4/lecture4.pdf">Specific energy and Critical flow</option>
      
      <option  value="105107059/module1/lecture5/lecture5.pdf">Computation of critical flow</option>
      
      <option  value="105107059/module1/lecture6/lecture6.pdf">Momentum in open channel flow, Specific force</option>
      
      <option  value="105107059/module2/lecture1/lecture1.pdf">Qualification of Uniform flow, Velocity measurement, Chezy\\\'s and Manning\\\'s Equation</option>
      
      <option  value="105107059/module2/lecture2/lecture2.pdf">Determination of Roughness Coefficient, Normal Depth and Velocity</option>
      
      <option  value="105107059/module2/lecture3/lecture3.pdf">Economical Section, Non Erodible Channels</option>
      
      <option  value="105107059/module2/lecture4/lecture4.pdf">Flow in channel with equivalent roughness, Horton\\\'s method of  Equivalent roughness estimation. Flow in close conduits with open channel flow </option>
      
      <option  value="105107059/module3/lecture1/lecture1.pdf">Dynamic equations of gradually varied flow and assumptions</option>
      
      <option  value="105107059/module3/lecture2/lecture2.pdf">Draw down and Back water curves, Profile Determination, Graphical integration </option>
      
      <option  value="105107059/module3/lecture3/lecture3.pdf">Classification of surface profile</option>
      
      <option  value="105107059/module3/lecture4/lecture4.pdf">Graphical integration, Direct and Standard step method, Numerical methods</option>
      
      <option  value="105107059/module3/lecture5/lecture5.pdf">Flow through channel transitions</option>
      
      <option  value="105107059/module3/lecture6/lecture6.pdf">Dynamic equation of spatially varied flow, Spatially varied flow profile, Computation of spatially varied flow</option>
      
      <option  value="105107059/module4/lecture1/lecture1.pdf">Hydraulic jump</option>
      
      <option  value="105107059/module4/lecture2/lecture2.pdf">Types and analysis of hydraulic jump</option>
      
      <option  value="105107059/module4/lecture3/lecture3.pdf">Basic characteristic of jump</option>
      
      <option  value="105107059/module4/lecture4/lecture4.pdf">Length, Profile jump, Jump on sloping floor</option>
      
      <option  value="105107059/module4/lecture5/lecture5.pdf">Location of jump</option>
      
      <option  value="105107059/module4/lecture6/lecture6.pdf">Jump as energy dissipation, Control of jump</option>
      
      <option  value="105107059/module4/lecture7/lecture7.pdf">Surges in open channel</option>
      
      <option  value="105107059/module5/lecture1/lecture1.pdf">Sudden transition, Sub-critical flow through sudden transition</option>
      
      <option  value="105107059/module5/lecture2/lecture2.pdf">Flow through culverts</option>
      
      <option  value="105107059/module5/lecture3/lecture3.pdf">Flow through bridge piers and obstruction</option>
      
      <option  value="105107059/module5/lecture4/lecture4.pdf">High flow through bridge pier and obstruction</option>
      
      <option  value="105107059/module5/lecture5/lecture5.pdf">Channel junction</option>
      
      <option  value="105107059/module6/lecture1/lecture1.pdf">Application of momentum principle</option>
      
      <option  value="105107059/module6/lecture2/lecture2.pdf">Impact of jets on plane plates</option>
      
      <option  value="105107059/module6/lecture3/lecture3.pdf">Impact of jets on curved plates</option>
      
      <option  value="105107059/module6/lecture4/lecture4.pdf">Turbines, classification, Radial flow turbines, Axial flow turbines</option>
      
      <option  value="105107059/module6/lecture5/lecture5.pdf">Draft tube and cavitations</option>
      
      <option  value="105107059/module6/lecture6/lecture6.pdf">Performance of turbines, Similarity laws</option>
      
      <option  value="105107059/module6/lecture7/lecture7.pdf">Centrifugal pump</option>
      
      <option  value="105107059/module6/lecture8/lecture8.pdf">Minimum speed to start the pump, Multistage pumps</option>
      
      <option  value="105107059/module6/lecture9/lecture9.pdf">Positive displacement pumps, Reciprocating pump</option>
      
      <option  value="105107059/module6/lecture10/lecture10.pdf">Negative slip, Flow separation conditions, Air vessels</option>
      
      <option  value="105107059/module6/lecture11/lecture11.pdf">Indicator diagram and its variation</option>
      
      <option  value="105107059/module6/lecture12/lecture12.pdf">Savings in work done</option>
      
      <option  value="105107059/module6/lecture13/lecture13.pdf">Jet, Submersible and Rotary pumps</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105107066</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Soil Dynamics</strong></td>
	<td><strong>Dr. S. Mittal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107066/module1/lecture1/lecture1.pdf">General</option>
      
      <option  value="105107066/module1/lecture2/lecture2.pdf">Equivalent dynamic load to an actual earthquake load</option>
      
      <option  value="105107066/module1/lecture3/lecture3.pdf">Cause of earthquakes</option>
      
      <option  value="105107066/module2/lecture1/lecture1.pdf">General-1</option>
      
      <option  value="105107066/module2/lecture2/lecture2.pdf">Definitions & Harmonic motion</option>
      
      <option  value="105107066/module2/lecture3/lecture3.pdf">Wave propagation</option>
      
      <option  value="105107066/module2/lecture4/lecture4.pdf">Case study</option>
      
      <option  value="105107066/module3/lecture1/lecture1.pdf">General � Utilities</option>
      
      <option  value="105107066/module3/lecture2/lecture2.pdf">Lab Techniques</option>
      
      <option  value="105107066/module3/lecture3/lecture3.pdf">Factors Affecting : Shear modulus, Elastic modulus and elastic constants</option>
      
      <option  value="105107066/module4/lecture1/lecture1.pdf">General-2</option>
      
      <option  value="105107066/module4/lecture2/lecture2.pdf">Pseudo-Static method</option>
      
      <option  value="105107066/module4/lecture3/lecture3.pdf">Pseudo-Static analysis</option>
      
      <option  value="105107066/module4/lecture4/lecture4.pdf">Displacement Analysis</option>
      
      <option  value="105107066/module5/lecture1/lecture1.pdf">Bearing Capacity of Footings</option>
      
      <option  value="105107066/module5/lecture2/lecture2.pdf">Settlement, Tilt, Displacement</option>
      
      <option  value="105107066/module5/lecture3/lecture3.pdf">Pseudo-Static analysis-1</option>
      
      <option  value="105107066/module5/lecture4/lecture4.pdf">Dynamic Analysis</option>
      
      <option  value="105107066/module5/lecture5/lecture5.pdf">Dynamic Analysis-2</option>
      
      <option  value="105107066/module6/lecture1/lecture1.pdf">Introduction</option>
      
      <option  value="105107066/module6/lecture2/lecture2.pdf">Pseudo-Static analysis-2</option>
      
      <option  value="105107066/module6/lecture3/lecture3.pdf">Pile foundations</option>
      
      <option  value="105107066/module6/lecture4/lecture4.pdf">Pile foundations-1</option>
      
      <option  value="105107066/module6/lecture5/lecture5.pdf">Piles under vertical vibrations</option>
      
      <option  value="105107066/module7/lecture1/lecture1.pdf">Introduction-1</option>
      
      <option  value="105107066/module7/lecture2/lecture2.pdf">Seismic stability analysis types</option>
      
      <option  value="105107066/module7/lecture3/lecture3.pdf">Inertial slop stability analysis</option>
      
      <option  value="105107066/module7/lecture4/lecture4.pdf">Weakening slope stability analysis</option>
      
      <option  value="105107066/module8/lecture1/lecture1.pdf">Introduction Liquefaction</option>
      
      <option  value="105107066/module8/lecture2/lecture2.pdf">Mechanics of liquefaction</option>
      
      <option  value="105107066/module8/lecture3/lecture3.pdf">Laboratory studies</option>
      
      <option  value="105107066/module8/lecture4/lecture4.pdf">Different laboratories test</option>
      
      <option  value="105107066/module9/lecture1/lecture1.pdf">Introduction Machine Foundations</option>
      
      <option  value="105107066/module9/lecture2/lecture2.pdf">Types of Machine Foundations</option>
      
      <option  value="105107066/module9/lecture3/lecture3.pdf">Safety criterion</option>
      
      <option  value="105107066/module9/lecture4/lecture4.pdf">Method of Analysis</option>
      
      <option  value="105107066/module9/lecture5/lecture5.pdf">Design of machine foundation</option>
      
      <option  value="105107066/module10/lecture1/lecture1.pdf">Introduction Vibration Isolation</option>
      
      <option  value="105107066/module10/lecture2/lecture2.pdf">Preventing Vibrations</option>
      
      <option  value="105107066/module10/lecture3/lecture3.pdf">Basic concept of vibration isolation</option>
      
      <option  value="105107066/module10/lecture4/lecture4.pdf">Types (Passive and Active)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105107067</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Urban transportation planning</strong></td>
	<td><strong>Dr. M. Parida</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107067/module1/lecture1/lecture1.pdf">General</option>
      
      <option  value="105107067/module1/lecture2/lecture2.pdf">Transportation in the Cities	</option>
      
      <option  value="105107067/module1/lecture3/lecture3.pdf">Future developments</option>
      
      <option  value="105107067/module2/lecture1/lecture1.pdf">Urban Activity Systems</option>
      
      <option  value="105107067/module2/lecture2/lecture2.pdf">Classification of roads		</option>
      
      <option  value="105107067/module2/lecture3/lecture3.pdf">Types of Urban or Road System</option>
      
      <option  value="105107067/module3/lecture1/lecture1.pdf">Classification of Urban Goods movements-1</option>
      
      <option  value="105107067/module3/lecture2/lecture2.pdf">Methodology of approach to analysis of goods movement-1</option>
      
      <option  value="105107067/module3/lecture3/lecture3.pdf">Modelling demand for Urban Goods transport-1</option>
      
      <option  value="105107067/module4/lecture1/lecture1.pdf">Transport Planning Process-1</option>
      
      <option  value="105107067/module4/lecture2/lecture2.pdf">Evaluation & Choice-1</option>
      
      <option  value="105107067/module4/lecture3/lecture3.pdf">Sequence of Activities Involved in transport analysis-1</option>
      
      <option  value="105107067/module5/lecture1/lecture1.pdf">Introduction--1</option>
      
      <option  value="105107067/module5/lecture2/lecture2.pdf">Details of Trip Generation-1</option>
      
      <option  value="105107067/module5/lecture3/lecture3.pdf">Trip Production Statistical Analysis-1</option>
      
      <option  value="105107067/module5/lecture4/lecture4.pdf">Trip Production Statistical Analysis-2</option>
      
      <option  value="105107067/module5/lecture5/lecture5.pdf">Category Analysis OR Cross Classification-1</option>
      
      <option  value="105107067/module6/lecture1/lecture1.pdf">Influencing Factor</option>
      
      <option  value="105107067/module6/lecture2/lecture2.pdf">Earlier Model Split Models-1</option>
      
      <option  value="105107067/module6/lecture3/lecture3.pdf">Disaggregate Mode- Choice Model</option>
      
      <option  value="105107067/module6/lecture4/lecture4.pdf">Binary Choice logit model Situations</option>
      
      <option  value="105107067/module6/lecture5/lecture5.pdf">Logit Model</option>
      
      <option  value="105107067/module6/lecture6/lecture6.pdf">Case Studies</option>
      
      <option  value="105107067/module7/lecture1/lecture1.pdf">Basis of Trip- distribution</option>
      
      <option  value="105107067/module7/lecture2/lecture2.pdf">Gravity Model of trip distribution	</option>
      
      <option  value="105107067/module7/lecture3/lecture3.pdf">Case Studies of Gravity Models</option>
      
      <option  value="105107067/module7/lecture4/lecture4.pdf">Growth Factor Methods of Trip distribution-1</option>
      
      <option  value="105107067/module8/lecture1/lecture1.pdf">Description of transport Network-1</option>
      
      <option  value="105107067/module8/lecture2/lecture2.pdf">Route Choice Behavior	</option>
      
      <option  value="105107067/module8/lecture3/lecture3.pdf">The Minimum Path</option>
      
      <option  value="105107067/module8/lecture4/lecture4.pdf">Route Assignment Techniques-1</option>
      
      <option  value="105107067/module8/lecture5/lecture5.pdf">Example	</option>
      
      <option  value="105107067/module9/lecture1/lecture1.pdf">Introduction---1</option>
      
      <option  value="105107067/module9/lecture2/lecture2.pdf">Types of movement</option>
      
      <option  value="105107067/module9/lecture3/lecture3.pdf">Types of Survey-1</option>
      
      <option  value="105107067/module9/lecture4/lecture4.pdf">Cordon line Survey</option>
      
      <option  value="105107067/module10/lecture1/lecture1.pdf">Introduction-----1</option>
      
      <option  value="105107067/module10/lecture2/lecture2.pdf">Types of models</option>
      
      <option  value="105107067/module10/lecture3/lecture3.pdf">Components of Transportation</option>
      
      <option  value="105107067/module2/lecture4/lecture4.pdf">Types of Urban or Road System-1</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105107120</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Foundation Engineering</strong></td>
	<td><strong>Prof. Mahendra Singh,Prof. N.K. Samadhiya,Prof. Priti Maheswari</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107120/mod01lec01.mp4">Shallow Foundation 1</option>
      
      <option  value="105107120/mod01lec02.mp4">Shallow Foundation 2</option>
      
      <option  value="105107120/mod01lec03.mp4">Shallow Foundation 3</option>
      
      <option  value="105107120/mod01lec04.mp4">Shallow Foundation 4</option>
      
      <option  value="105107120/mod01lec05.mp4">Shallow Foundation 5</option>
      
      <option  value="105107120/mod01lec06.mp4">Shallow Foundation 6</option>
      
      <option  value="105107120/mod01lec07.mp4">Shallow Foundation 7</option>
      
      <option  value="105107120/mod02lec01.mp4">Lateral Earth pressure Theories  Retaining Walls - 1</option>
      
      <option  value="105107120/mod02lec02.mp4">Lateral Earth pressure Theories  Retaining Walls - 2</option>
      
      <option  value="105107120/mod02lec03.mp4">Lateral Earth pressure Theories  Retaining Walls - 3</option>
      
      <option  value="105107120/mod02lec04.mp4">Lateral Earth Pressure Theories  Retaining Walls - 4</option>
      
      <option  value="105107120/mod02lec05.mp4">Lateral Earth Pressure Theories  Retaining Walls-5</option>
      
      <option  value="105107120/mod02lec06.mp4">Pile Foundation-1</option>
      
      <option  value="105107120/mod02lec07.mp4">Pile Foundation-2</option>
      
      <option  value="105107120/mod02lec08.mp4">Pile Foundations-3</option>
      
      <option  value="105107120/mod02lec09.mp4">Pile Foundations-4</option>
      
      <option  value="105107120/mod02lec10.mp4">Pile Foundations-5</option>
      
      <option  value="105107120/mod02lec11.mp4">Pile Foundations-6</option>
      
      <option  value="105107120/mod02lec12.mp4">Pile Foundations-7</option>
      
      <option  value="105107120/mod02lec13.mp4">Machine Foundations-1</option>
      
      <option  value="105107120/mod02lec14.mp4">Machine Foundations-2</option>
      
      <option  value="105107120/mod02lec15.mp4">Machine Foundations-3</option>
      
      <option  value="105107120/mod02lec16.mp4">Machine Foundations-4</option>
      
      <option  value="105107120/mod02lec17.mp4">Well Foundations - 1</option>
      
      <option  value="105107120/mod02lec18.mp4">Well Foundations-2</option>
      
      <option  value="105107120/mod02lec19.mp4">Well Foundations-3</option>
      
      <option  value="105107120/mod03lec01.mp4">Foundation Engineering</option>
      
      <option  value="105107120/mod03lec02.mp4">Foundation Engineering 2</option>
      
      <option  value="105107120/mod03lec03.mp4">Foundation Engineering 3</option>
      
      <option  value="105107120/mod03lec04.mp4">Foundation Engineering 4</option>
      
      <option  value="105107120/mod03lec05.mp4">Foundation Engineering 5</option>
      
      <option  value="105107120/mod03lec06.mp4">Foundation Engineering 6</option>
      
      <option  value="105107120/mod03lec07.mp4">Foundation Engineering 7</option>
      
      <option  value="105107120/mod03lec08.mp4">Foundation Engineering 8</option>
      
      <option  value="105107120/mod03lec09.mp4">Foundation Engineering 9</option>
      
      <option  value="105107120/mod03lec10.mp4">Foundation Engineering 10</option>
      
      <option  value="105107120/mod03lec11.mp4">Foundation Engineering 11</option>
      
      <option  value="105107120/mod03lec12.mp4">Foundation Engineering 12</option>
      
      <option  value="105107120/mod03lec13.mp4">Foundation Engineering 13</option>
      
      <option  value="105107120/mod03lec14.mp4">Foundation Engineering 14</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105107121</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Modern Surveying Techniques</strong></td>
	<td><strong>Prof. S.K. Ghosh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107121/lec01.mp4">Geographic Information System An Introduction</option>
      
      <option  value="105107121/lec02.mp4">Introduction to Global Positioning System</option>
      
      <option  value="105107121/lec03.mp4">GPS Positioning Methods</option>
      
      <option  value="105107121/lec04.mp4">GPS Solutions and Errors</option>
      
      <option  value="105107121/lec05.mp4">GPS Application</option>
      
      <option  value="105107121/lec06.mp4">Remote Sensing Introduction</option>
      
      <option  value="105107121/lec07.mp4">Electromagnetic Spectrum</option>
      
      <option  value="105107121/lec08.mp4">Sensors and Platform</option>
      
      <option  value="105107121/lec09.mp4">Sensors and Platform</option>
      
      <option  value="105107121/lec10.mp4">Image Interpretation</option>
      
      <option  value="105107121/lec11.mp4">Statistical Evaluation of RS Data</option>
      
      <option  value="105107121/lec12.mp4">Rectification and Restoration</option>
      
      <option  value="105107121/lec13.mp4">Image Enhancement </option>
      
      <option  value="105107121/lec14(A).mp4">Image Transformation </option>
      
      <option  value="105107121/lec14(B).mp4">Orthogonal Transformation</option>
      
      <option  value="105107121/lec15.mp4">Image Classification(Supervised Classification)</option>
      
      <option  value="105107121/lec16.mp4">Image Classification(Unsupervised Classification)</option>
      
      <option  value="105107121/lec17.mp4">Spatial Filtering-Noise Removal </option>
      
      <option  value="105107121/lec18.mp4">Spatial Filtering-Edge Removal </option>
      
      <option  value="105107121/lec19.mp4">Photogramatic-Basic concepts of a single photography </option>
      
      <option  value="105107121/lec20.mp4">Stereoscopy-Basic concepts </option>
      
      <option  value="105107121/lec21.mp4">Stereoscopy-Geometry of overlaping photograph </option>
      
      <option  value="105107121/lec22.mp4">Terrestrial Photogrammetry </option>
      
      <option  value="105107121/lec23.mp4">Digital Elevation Model-Basic Concepts </option>
      
      <option  value="105107121/lec24.mp4">Digital Elevation Model-Data Input and Stamping </option>
      
      <option  value="105107121/lec25.mp4">Digital Elevation Model-Surface representation and analysis</option>
      
      <option  value="105107121/lec26.mp4">GIS-Introductory Concepts </option>
      
      <option  value="105107121/lec27.mp4">GIS-Data Input</option>
      
      <option  value="105107121/lec28.mp4">Data Verification and Editing </option>
      
      <option  value="105107121/lec29.mp4">GIS Data Model </option>
      
      <option  value="105107121/lec30.mp4">GIS Data Base </option>
      
      <option  value="105107121/lec31.mp4">Spatial Analysis </option>
      
      <option  value="105107121/lec32.mp4">Map Overlay and Spatial Correlation </option>
      
      <option  value="105107121/lec33.mp4">Application to Drought Management </option>
      
      <option  value="105107121/lec34.mp4">GIS base planning model for educational facilities in rural areas  </option>
      
      <option  value="105107121/lec35.mp4">Application extraction of building attributes </option>
      
      <option  value="105107121/lec36.mp4">Zonal based tourism planning </option>
      
      <option  value="105107121/lec37.mp4">Zonal Planning using remote sensing </option>
      
      <option  value="105107121/lec38.mp4">Municipal GIS for assassment of property tax</option>
      
      <option  value="105107121/lec40.mp4">Application of remote sensing </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105107123</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Transportation Engineering II</strong></td>
	<td><strong>Prof. Rajat Rastogi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107123/lec01.mp4">Introduction to Railway Engineering</option>
      
      <option  value="105107123/lec02.mp4">Gauges and Permanent Way</option>
      
      <option  value="105107123/lec03.mp4">Wheel and Axles, Coning of Wheels</option>
      
      <option  value="105107123/lec04.mp4">Track Resistances, Hauling Capacity</option>
      
      <option  value="105107123/lec05.mp4">Track Modulus, Stresses in Track</option>
      
      <option  value="105107123/lec06.mp4">Stresses in Components of Track</option>
      
      <option  value="105107123/lec07.mp4">Rails</option>
      
      <option  value="105107123/lec08.mp4">Creep in Rails</option>
      
      <option  value="105107123/lec09.mp4">Wears & Failures in Rails</option>
      
      <option  value="105107123/lec10.mp4">Jointed or Welded rails</option>
      
      <option  value="105107123/lec11.mp4">Sleepers</option>
      
      <option  value="105107123/lec12.mp4">Ballast</option>
      
      <option  value="105107123/lec13.mp4">Fastenings</option>
      
      <option  value="105107123/lec14.mp4">Geometric Design - Alignment of Track</option>
      
      <option  value="105107123/lec15.mp4">Horizontal Curve and Super elevation</option>
      
      <option  value="105107123/lec16.mp4">Speeds on Track</option>
      
      <option  value="105107123/lec17.mp4">Transition Curve & Widening of Track</option>
      
      <option  value="105107123/lec18.mp4">Vertical Curve & Gradients</option>
      
      <option  value="105107123/lec19.mp4">Turnouts - Components</option>
      
      <option  value="105107123/lec20.mp4">Crossing and Design of Turnout</option>
      
      <option  value="105107123/lec21.mp4">Track Junctions and Designs</option>
      
      <option  value="105107123/lec22.mp4">Signals Part-1</option>
      
      <option  value="105107123/lec23.mp4">Signals Part-2</option>
      
      <option  value="105107123/lec24.mp4">Train Control Systems</option>
      
      <option  value="105107123/lec25.mp4">Interlocking of Track</option>
      
      <option  value="105107123/lec26.mp4">High Speed Tracks</option>
      
      <option  value="105107123/lec27.mp4">Introduction of Air Transport</option>
      
      <option  value="105107123/lec28.mp4">Aircraft Characteristics</option>
      
      <option  value="105107123/lec29.mp4">Aircraft Controls, Airport Site&Size Selection</option>
      
      <option  value="105107123/lec30.mp4">Airport Obstructions</option>
      
      <option  value="105107123/lec31.mp4">Runway Orientation</option>
      
      <option  value="105107123/lec32.mp4">Runway Length</option>
      
      <option  value="105107123/lec33.mp4">Runway Geometric</option>
      
      <option  value="105107123/lec34.mp4">Taxiway</option>
      
      <option  value="105107123/lec35.mp4">Exit Taxiway</option>
      
      <option  value="105107123/lec36.mp4">Aprons and Aircraft Parking</option>
      
      <option  value="105107123/lec37.mp4">Terminal Area and Building</option>
      
      <option  value="105107123/lec38.mp4">Terminal Planning and Hangers</option>
      
      <option  value="105107123/lec39.mp4">Visual Aids-Markings</option>
      
      <option  value="105107123/lec40.mp4">Visual Aids-Lighting and Signage</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105107129</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Hydrological Measurements and Analysis of Data</strong></td>
	<td><strong>Dr. Sharad Kumar Jain</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105107129/module1/lecture1/lecture1.pdf">Hydrologic Cycle - 1</option>
      
      <option  value="105107129/module1/lecture2/lecture2.pdf">Hydrologic Cycle - 2</option>
      
      <option  value="105107129/module1/lecture3/lecture3.pdf">Hydrologic Cycle - 3</option>
      
      <option  value="105107129/module2/lecture1/lecture1.pdf">Classification of Hydrologic Data </option>
      
      <option  value="105107129/module2/lecture2/lecture2.pdf">Design of Hydrometeorological Networks</option>
      
      <option  value="105107129/module2/lecture3/lecture3.pdf">Validation of Hydrologic Data</option>
      
      <option  value="105107129/module3/lecture1/lecture1.pdf">Rainfall Gauges </option>
      
      <option  value="105107129/module3/lecture2/lecture2.pdf">Spatial Interpolation of Rainfall Data</option>
      
      <option  value="105107129/module3/lecture3/lecture3.pdf">Disaggregation of Rainfall Data</option>
      
      <option  value="105107129/module3/lecture4/lecture4.pdf">Analysis of Rainfall Data </option>
      
      <option  value="105107129/module4/lecture1/lecture1.pdf">Selection of Gauging Sites </option>
      
      <option  value="105107129/module4/lecture2/lecture2.pdf">Measurement of Discharge </option>
      
      <option  value="105107129/module4/lecture3/lecture3.pdf">Processing of Streamflow Data </option>
      
      <option  value="105107129/module4/lecture4/lecture4.pdf">Processing of Streamflow Data-1</option>
      
      <option  value="105107129/module4/lecture5/lecture5.pdf">Processing of Streamflow Data-2</option>
      
      <option  value="105107129/module5/lecture1/lecture1.pdf">Pan Evaporation Data </option>
      
      <option  value="105107129/module5/lecture2/lecture2.pdf">Sunshine Data </option>
      
      <option  value="105107129/module6/lecture1/lecture1.pdf">Physical Indicators</option>
      
      <option  value="105107129/module6/lecture2/lecture2.pdf">Biological Indicators</option>
      
      <option  value="105107129/module6/lecture3/lecture3.pdf">Sediment Data </option>
      
      <option  value="105107129/module6/lecture4/lecture4.pdf">Processing of Water Quality Data </option>
      
      <option  value="105107129/module7/lecture1/lecture1.pdf">Ground Water Data</option>
      
      <option  value="105107129/module7/lecture2/lecture2.pdf">Topographic, Land Use, Land Cover Data</option>
      
      <option  value="105107129/module7/lecture3/lecture3.pdf">Water Use and Demand Data </option>
      
      <option  value="105107129/module8/lecture1/lecture1.pdf">Acquisition and Management of Spatial Data-1</option>
      
      <option  value="105107129/module8/lecture2/lecture2.pdf">Acquisition and Management of Spatial Data-2</option>
      
      <option  value="105107129/module8/lecture3/lecture3.pdf">Acquisition and Management of Spatial Data-3</option>
      
      <option  value="105107129/module8/lecture4/lecture4.pdf">Acquisition and Management of Spatial Data-4</option>
      
      <option  value="105107129/module9/lecture1/lecture1.pdf">Hydrological databases and Dissemination of Data-1</option>
      
      <option  value="105107129/module9/lecture2/lecture2.pdf">Hydrological databases and Dissemination of Data-2</option>
      
      <option  value="105107129/module10/lecture1/lecture1.pdf">Basic Concepts</option>
      
      <option  value="105107129/module10/lecture2/lecture2.pdf">Probability Distributions</option>
      
      <option  value="105107129/module10/lecture3/lecture3.pdf">Methods of Parameter Estimation</option>
      
      <option  value="105107129/module10/lecture4/lecture4.pdf">Problems in Parameter Estimation</option>
      
      <option  value="105107129/module10/lecture5/lecture5.pdf">Hypothesis Testing</option>
      
      <option  value="105107129/module11/lecture1/lecture1.pdf">Correlation Analysis </option>
      
      <option  value="105107129/module11/lecture2/lecture2.pdf">Regression Analysis and Linear Regression </option>
      
      <option  value="105107129/module11/lecture3/lecture3.pdf">Linear Regression </option>
      
      <option  value="105107129/module11/lecture4/lecture4.pdf">Multiple Linear Regression</option>
      
      <option  value="105107129/module11/lecture5/lecture5.pdf">Multiple Linear Regression and other topics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108070</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Applied Elasticity for Engineers</strong></td>
	<td><strong>Dr. T.G. Sitharam,Dr. L. Govindaraju</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108070/module1/lecture1.pdf">Introduction</option>
      
      <option  value="105108070/module2/lecture2.pdf">Introduction Analysis of Stress</option>
      
      <option  value="105108070/module2/lecture3.pdf">Analysis of Stress 1</option>
      
      <option  value="105108070/module2/lecture4.pdf">Analysis of Stress 2</option>
      
      <option  value="105108070/module3/lecture5.pdf">Introduction Analysis of Strain</option>
      
      <option  value="105108070/module3/lecture6.pdf">Analysis of Strain</option>
      
      <option  value="105108070/module4/lecture7.pdf">Introduction Stress-Strain Relations</option>
      
      <option  value="105108070/module4/lecture8.pdf">Stress-Strain Relations</option>
      
      <option  value="105108070/module5/lecture9.pdf">Introduction Two Dimensional Problems in Cartesian Coordinate System</option>
      
      <option  value="105108070/module5/lecture10.pdf">Two Dimensional Problems in Cartesian Coordinate System 1</option>
      
      <option  value="105108070/module5/lecture11.pdf">Two Dimensional Problems in Cartesian Coordinate System 2</option>
      
      <option  value="105108070/module6/lecture12.pdf">Introduction toTwo Dimensional Problems in Polar Coordinate System</option>
      
      <option  value="105108070/module6/lecture13.pdf">Two Dimensional Problems in Polar Coordinate System 1</option>
      
      <option  value="105108070/module6/lecture14.pdf">Two Dimensional Problems in Polar Coordinate System 2</option>
      
      <option  value="105108070/module7/lecture15.pdf">Introduction to Torsion of Prismatic Bars</option>
      
      <option  value="105108070/module7/lecture16.pdf">Torsion of Prismatic Bars</option>
      
      <option  value="105108070/module8/lecture17.pdf">Introduction to Elastic Solutions and Applications in Geomechanics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108073</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Geo-informatics in Transportation Engineering</strong></td>
	<td><strong>Dr. Ashish Verma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108073/module1/lecture1.pdf">Concept of Geo-informatics</option>
      
      <option  value="105108073/module1/lecture2.pdf">Land Use and Transportation Data for GIS</option>
      
      <option  value="105108073/module1/lecture3.pdf">Data Base Development</option>
      
      <option  value="105108073/module2/lecture4.pdf">Map Generation and Analysis</option>
      
      <option  value="105108073/module2/lecture5.pdf">Transportation Network Development and Algorithm</option>
      
      <option  value="105108073/module3/lecture6.pdf">Transportation Models and their Applications Using GIS</option>
      
      <option  value="105108073/module3/lecture7.pdf">GIS-T Applications</option>
      
      <option  value="105108073/module3/lecture8.pdf">Intelligent Transport Systems</option>
      
      <option  value="105108073/module3/lecture9.pdf">Case Studies</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105108074</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Geotechnical Earthquake Engineering</strong></td>
	<td><strong>Dr. Gali Madhavi Latha</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108074/module1/lecture1/index.html">Introduction to Seismology</option>
      
      <option  value="105108074/module1/lecture2/index.html">Plate Tectonics � Part I </option>
      
      <option  value="105108074/module1/lecture3/index.html">Plate Tectonics � Part II</option>
      
      <option  value="105108074/module1/lecture4/index.html">Seismic waves � Part I</option>
      
      <option  value="105108074/module1/lecture5/index.html">Seismic waves � Part II</option>
      
      <option  value="105108074/module1/lecture6/index.html">Locating Epicenter</option>
      
      <option  value="105108074/module1/lecture7/index.html">Seismicity of India</option>
      
      <option  value="105108074/module2/lecture8/index.html">Forecasting Earthquakes</option>
      
      <option  value="105108074/module2/lecture9/index.html">Earthquake Hazards</option>
      
      <option  value="105108074/module2/lecture10/index.html">Tsunamis</option>
      
      <option  value="105108074/module2/lecture11/index.html">Earthquake Intensity and Magnitude</option>
      
      <option  value="105108074/module2/lecture12/index.html">Ground Motion</option>
      
      <option  value="105108074/module2/lecture13/index.html">Ground Motion Parameters � part I</option>
      
      <option  value="105108074/module2/lecture14/index.html">Ground Motion Parameters � part II</option>
      
      <option  value="105108074/module2/lecture15/index.html">Deterministic Seismic Hazard Analysis</option>
      
      <option  value="105108074/module2/lecture16/index.html">Probabilistic Seismic Hazard Analysis � part-I</option>
      
      <option  value="105108074/module2/lecture17/index.html">Probabilistic Seismic Hazard Analysis � part-II</option>
      
      <option  value="105108074/module2/lecture18/index.html">Exercise Problems in PSHA </option>
      
      <option  value="105108074/module3/lecture19/index.html">Wave Propagation Theories </option>
      
      <option  value="105108074/module3/lecture20/index.html">Seismic Wave Propagation</option>
      
      <option  value="105108074/module3/lecture21/index.html">Dynamic Soil Properties � Part I</option>
      
      <option  value="105108074/module3/lecture22/index.html">Dynamic Soil Properties � Part II</option>
      
      <option  value="105108074/module3/lecture23/index.html">Dynamic Soil Properties � Part III</option>
      
      <option  value="105108074/module3/lecture24/index.html">Dynamic Soil Properties � Part IV</option>
      
      <option  value="105108074/module3/lecture25/index.html">Ground Response Analysis � Part I</option>
      
      <option  value="105108074/module3/lecture26/index.html">Ground Response Analysis � Part II</option>
      
      <option  value="105108074/module3/lecture27/index.html">27.	Local Soil Effects</option>
      
      <option  value="105108074/module4/lecture28/index.html">Introduction to Liquefaction</option>
      
      <option  value="105108074/module4/lecture29/index.html">Concepts of Liquefaction</option>
      
      <option  value="105108074/module4/lecture30/index.html">Initiation of Liquefaction</option>
      
      <option  value="105108074/module4/lecture31/index.html">Evaluation of Liquefaction</option>
      
      <option  value="105108074/module4/lecture32/index.html">Liquefaction Hazards</option>
      
      <option  value="105108074/module4/lecture33/lecture34.pdf">Exercise Problems in Liquefaction</option>
      
      <option  value="105108074/module5/lecture34/index.html">Seismic slope stability analysis part-I</option>
      
      <option  value="105108074/module5/lecture35/index.html">Seismic slope stability analysis part-II</option>
      
      <option  value="105108074/module5/lecture36/index.html">Seismic response of retaining walls part-I</option>
      
      <option  value="105108074/module5/lecture37/index.html">37.	Seismic response of retaining walls part-II</option>
      
      <option  value="105108074/module5/lecture38/index.html">Seismic design of shallow foundations</option>
      
      <option  value="105108074/module5/lecture39/index.html">39.	Seismic response of pile foundations</option>
      
      <option  value="105108074/module5/lecture40/index.html">40.	Mitigation of earthquake hazards and ground improvement</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105108075</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Ground Improvement Techniques</strong></td>
	<td><strong>Dr. G.L. Sivakumar Babu</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108075/mod01lec01.mp4">Need for Ground Improvement</option>
      
      <option  value="105108075/mod01lec02.mp4">Classification of ground modification techniques</option>
      
      <option  value="105108075/mod01lec03.mp4">Emerging trends in ground improvement</option>
      
      <option  value="105108075/mod02lec04.mp4">Mechanical modification</option>
      
      <option  value="105108075/mod02lec05.mp4">Compaction Control</option>
      
      <option  value="105108075/mod02lec06.mp4">Deep compaction</option>
      
      <option  value="105108075/mod02lec07.mp4">Dynamic compaction</option>
      
      <option  value="105108075/mod03lec08.mp4">Vibro-compaction methods</option>
      
      <option  value="105108075/mod03lec09.mp4">Case studies in stone columns</option>
      
      <option  value="105108075/mod04lec10.mp4">Prefabricated Vertical Drains (PVDS) � I</option>
      
      <option  value="105108075/mod04lec11.mp4">Prefabricated drains (PVDS) � II</option>
      
      <option  value="105108075/mod05lec12.mp4">Dewatering - I</option>
      
      <option  value="105108075/mod05lec13.mp4">Dewatering - II</option>
      
      <option  value="105108075/mod05lec14.mp4">Electro-kinetic stabilization</option>
      
      <option  value="105108075/mod06lec15.mp4">Heating and freezing methods, Blasting methods-I</option>
      
      <option  value="105108075/mod06lec16.mp4">Heating and freezing methods, Blasting methods-II</option>
      
      <option  value="105108075/mod06lec17.mp4">Ground Treatment with lime � I</option>
      
      <option  value="105108075/mod06lec18.mp4">Ground Treatment with lime � II</option>
      
      <option  value="105108075/mod06lec19.mp4">Ground treatment with cement</option>
      
      <option  value="105108075/mod06lec20.mp4">Grouting procedures</option>
      
      <option  value="105108075/mod07lec21.mp4">Grouting</option>
      
      <option  value="105108075/mod07lec22.mp4">Micropiles</option>
      
      <option  value="105108075/mod08lec23.mp4">Introduction to Geosynthetics -I</option>
      
      <option  value="105108075/mod08lec24.mp4">Introduction to Geosynthetics -II</option>
      
      <option  value="105108075/mod08lec25.mp4">Reinforced soil principles and mechanisms</option>
      
      <option  value="105108075/mod08lec26.mp4">Material properties</option>
      
      <option  value="105108075/mod08lec27.mp4">Factors affecting reinforced soil</option>
      
      <option  value="105108075/mod08lec28.mp4">Bearing capacity improvement � I</option>
      
      <option  value="105108075/mod08lec29.mp4">Bearing capacity improvement � II</option>
      
      <option  value="105108075/mod08lec30.mp4">Reinforced soil slopes</option>
      
      <option  value="105108075/mod08lec31.mp4">Reinforced Soil Walls</option>
      
      <option  value="105108075/mod08lec32.mp4">Reinforced Soil Walls I</option>
      
      <option  value="105108075/mod08lec33.mp4">Soil Nailing</option>
      
      <option  value="105108075/mod08lec34.mp4">Design of embankments on soft soil using geosynthetics</option>
      
      <option  value="105108075/mod08lec35.mp4">Design of embankments on soft soil using geocells, Use of geosyntheticsfor filtration and drainage</option>
      
      <option  value="105108075/mod08lec36.mp4">Applications in filtration and drainage & erosion control</option>
      
      <option  value="105108075/mod08lec37.mp4">Geosynthetics in pavements</option>
      
      <option  value="105108075/mod09lec38.mp4">Sustainable development and energy geotechnology</option>
      
      <option  value="105108075/mod09lec39.mp4">Microbial geotechnology and Ground Improvement</option>
      
      <option  value="105108075/mod09lec40.mp4">Nano-technologies in ground improvement and site remediation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108076</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Introduction to Engineering Seismology</strong></td>
	<td><strong>Dr. P. Anbazhagan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108076/module1/lecture1.pdf">Earthquake hazards</option>
      
      <option  value="105108076/module1/lecture2.pdf">Engineering seismology</option>
      
      <option  value="105108076/module1/lecture3.pdf">Terminologies and definitions in engineering seismology</option>
      
      <option  value="105108076/module2/lecture4.pdf">Plate Tectonics: Sources and Faults </option>
      
      <option  value="105108076/module2/lecture5.pdf">Earthquake Measurements </option>
      
      <option  value="105108076/module2/lecture6.pdf">Earthquake Waves </option>
      
      <option  value="105108076/module3/lecture7.pdf">Earthquake instrumentations and recording</option>
      
      <option  value="105108076/module3/lecture8.pdf">Seismic Records and interpretations</option>
      
      <option  value="105108076/module3/lecture9.pdf">Earthquakes- Great events and Prediction  </option>
      
      <option  value="105108076/module4/lecture10.pdf">Seismic Zonation </option>
      
      <option  value="105108076/module4/lecture11.pdf">Seismic microzonation  </option>
      
      <option  value="105108076/module4/lecture12.pdf">Seismic Hazard Assessments </option>
      
      <option  value="105108076/module5/lecture13.pdf">Seismic site Characterization </option>
      
      <option  value="105108076/module5/lecture14.pdf">Site Response Analysis    </option>
      
      <option  value="105108076/module5/lecture15.pdf">Liquefaction Assessment </option>
      
      <option  value="105108076/module6/lecture16.pdf">Landslide and Tsunami </option>
      
      <option  value="105108076/module6/lecture17.pdf">Risk and Vulnerability  </option>
      
      <option  value="105108076/module6/lecture18.pdf">Integration of Hazard parameters </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105108079</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Stochastic Hydrology</strong></td>
	<td><strong>Prof. P.P. Mujumdar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108079/mod01lec01.mp4">Introduction</option>
      
      <option  value="105108079/mod01lec02.mp4">Bivariate Distributions</option>
      
      <option  value="105108079/mod01lec03.mp4">Independence ; Functions of Random Variables</option>
      
      <option  value="105108079/mod01lec04.mp4">Moments of a Distribution</option>
      
      <option  value="105108079/mod02lec05.mp4">Normal Distribution</option>
      
      <option  value="105108079/mod02lec06.mp4">Other Continuous Distributions</option>
      
      <option  value="105108079/mod03lec07.mp4">Parameter Estimation</option>
      
      <option  value="105108079/mod03lec08.mp4">Covariance and Correlation</option>
      
      <option  value="105108079/mod03lec09.mp4">Data Generation</option>
      
      <option  value="105108079/mod04lec10.mp4">Time Series Analysis(1)</option>
      
      <option  value="105108079/mod04lec11.mp4">Time Series Analysis(2)</option>
      
      <option  value="105108079/mod04lec12.mp4">Time Series Analysis(3)</option>
      
      <option  value="105108079/mod04lec13.mp4">Frequency Domain Analysis(1)</option>
      
      <option  value="105108079/mod04lec14.mp4">Frequency Domain Analysis(2) and ARIMA Models(1)</option>
      
      <option  value="105108079/mod04lec15.mp4">ARIMA Models(2)</option>
      
      <option  value="105108079/mod04lec16.mp4">ARIMA Models(3)</option>
      
      <option  value="105108079/mod04lec17.mp4">ARIMA Models(4)</option>
      
      <option  value="105108079/mod04lec18.mp4">Case Studies(1)</option>
      
      <option  value="105108079/mod04lec19.mp4">Case Studies(2)</option>
      
      <option  value="105108079/mod04lec20.mp4">Case Studies(3)</option>
      
      <option  value="105108079/mod04lec21.mp4">Case Studies(4)</option>
      
      <option  value="105108079/mod05lec22.mp4">Markov Chains(1)</option>
      
      <option  value="105108079/mod05lec23.mp4">Markov Chains(2)</option>
      
      <option  value="105108079/mod06lec24.mp4">Frequency Analysis(1)</option>
      
      <option  value="105108079/mod06lec25.mp4">Frequency Analysis(2)</option>
      
      <option  value="105108079/mod06lec26.mp4">Frequency Analysis(3) and Probability Plotting(1)</option>
      
      <option  value="105108079/mod06lec27.mp4">Probability Plotting(2)</option>
      
      <option  value="105108079/mod06lec28.mp4">Goodness of Fit</option>
      
      <option  value="105108079/mod06lec29.mp4">IDF Relationships</option>
      
      <option  value="105108079/mod07lec30.mp4">Multiple Linear Regression</option>
      
      <option  value="105108079/mod07lec31.mp4">Principal Component Analysis</option>
      
      <option  value="105108079/mod07lec32.mp4">Regression on Principal Components</option>
      
      <option  value="105108079/mod07lec33.mp4">Multivariate Stochastic Models(1)</option>
      
      <option  value="105108079/mod07lec34.mp4">Multivariate Stochastic Models(2)</option>
      
      <option  value="105108079/mod07lec35.mp4">Multivariate Stochastic Models(3)</option>
      
      <option  value="105108079/mod08lec36.mp4">Data Consistency Checks(1)</option>
      
      <option  value="105108079/mod08lec37.mp4">Data Consistency Checks(2)</option>
      
      <option  value="105108079/mod08lec38.mp4">Data Consistency Checks(3)</option>
      
      <option  value="105108079/mod09lec39.mp4">Recent Applications: Climate Change Impact Assessment</option>
      
      <option  value="105108079/mod09lec40.mp4">Summary of the Course</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105108080</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Stochastic Structural Dynamics</strong></td>
	<td><strong>Prof. C.S. Manohar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108080/mod01lec01.mp4">Definition of probability measure and conditional probability</option>
      
      <option  value="105108080/mod01lec02.mp4">Scalar random variables-1</option>
      
      <option  value="105108080/mod01lec03.mp4">Scalar random variables-2</option>
      
      <option  value="105108080/mod01lec04.mp4">Multi-dimensional random variables-1</option>
      
      <option  value="105108080/mod01lec05.mp4">Multi-dimensional random variables-2</option>
      
      <option  value="105108080/mod02lec06.mp4">Random processes-1</option>
      
      <option  value="105108080/mod02lec07.mp4">Random processes-2</option>
      
      <option  value="105108080/mod02lec08.mp4">Random processes-3</option>
      
      <option  value="105108080/mod02lec09.mp4">Random processes-4, Random vibrations of sdof systems-1</option>
      
      <option  value="105108080/mod03lec09.mp4">Random processes-4 Random vibrations of sdof systems-1</option>
      
      <option  value="105108080/mod03lec10.mp4">Random vibrations of sdof systems -2</option>
      
      <option  value="105108080/mod03lec11.mp4">Random vibrations of sdof systems-3</option>
      
      <option  value="105108080/mod03lec12.mp4">Random vibrations of sdof systems-4</option>
      
      <option  value="105108080/mod04lec13.mp4">Random vibrations of mdof systems-1</option>
      
      <option  value="105108080/mod04lec14.mp4">Random vibrations of mdof systems-2</option>
      
      <option  value="105108080/mod04lec15.mp4">Random vibrations of mdof systems-3</option>
      
      <option  value="105108080/mod04lec16.mp4">Random vibrations of mdof systems-4</option>
      
      <option  value="105108080/mod05lec17.mp4">Failure of randomly vibrating systems-1</option>
      
      <option  value="105108080/mod05lec18.mp4">Failure of randomly vibrating systems-2</option>
      
      <option  value="105108080/mod05lec19.mp4">Failure of randomly vibrating systems-3</option>
      
      <option  value="105108080/mod05lec20.mp4">Failure of randomly vibrating systems-4</option>
      
      <option  value="105108080/mod06lec21.mp4">Markov vector approach-1</option>
      
      <option  value="105108080/mod06lec22.mp4">Markov vector approach-2</option>
      
      <option  value="105108080/mod06lec23.mp4">Markov vector approach-3</option>
      
      <option  value="105108080/mod06lec24.mp4">Markov vector approach-4</option>
      
      <option  value="105108080/mod06lec25.mp4">Markov vector approach-5, Monte Carlo simulation approach-1</option>
      
      <option  value="105108080/mod07lec25.mp4">Markov vector approach-5 & Monte Carlo simulation approach-1</option>
      
      <option  value="105108080/mod07lec26.mp4">Monte Carlo simulation approach-2</option>
      
      <option  value="105108080/mod07lec27.mp4">Monte Carlo simulation approach-3</option>
      
      <option  value="105108080/mod07lec28.mp4">Monte Carlo simulation approach-4</option>
      
      <option  value="105108080/mod07lec29.mp4">Monte Carlo simulation approach-5</option>
      
      <option  value="105108080/mod07lec30.mp4">Monte Carlo simulation approach-6</option>
      
      <option  value="105108080/mod07lec31.mp4">Monte Carlo simulation approach-7</option>
      
      <option  value="105108080/mod08lec32.mp4">Probabilistic methods in earthquake engineering-1</option>
      
      <option  value="105108080/mod08lec33.mp4">Probabilistic methods in earthquake engineering-2</option>
      
      <option  value="105108080/mod08lec34.mp4">Probabilistic methods in earthquake engineering-3</option>
      
      <option  value="105108080/mod08lec35.mp4">Probabilistic methods in earthquake engineering-4</option>
      
      <option  value="105108080/mod09lec36.mp4">Fatigue failure & Vibration energy flow models</option>
      
      <option  value="105108080/mod10lec37.mp4">Problem solving session-1</option>
      
      <option  value="105108080/mod10lec38.mp4">Problem solving session-2</option>
      
      <option  value="105108080/mod10lec39.mp4">Problem solving session-3</option>
      
      <option  value="105108080/mod10lec40.mp4">Problem solving session-4</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>105108081</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Water Resources Systems Planning and Management</strong></td>
	<td><strong>Dr. D. Nagesh Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108081/module1/lecture1/lecture.pdf">System Components,Planning & Management</option>
      
      <option  value="105108081/module1/lecture2/lecture.pdf">Modeling of Water Resources System</option>
      
      <option  value="105108081/module1/lecture3/lecture.pdf">Optimization & Simulation </option>
      
      <option  value="105108081/module2/lecture4/lecture.pdf">Objective Function, Maxima, Minima & Saddle Points, Convexity & Concavity</option>
      
      <option  value="105108081/module2/lecture5/lecture.pdf">Constrained & Unconstrained Optimization</option>
      
      <option  value="105108081/module2/lecture6/lecture.pdf">Lagrange Multipliers & Kuhn – Tucker Condition</option>
      
      <option  value="105108081/module3/lecture7/lecture.pdf">Preliminaries</option>
      
      <option  value="105108081/module3/lecture8/lecture.pdf">Graphical Method</option>
      
      <option  value="105108081/module3/lecture9/lecture.pdf">Simplex Method - I</option>
      
      <option  value="105108081/module3/lecture10/lecture.pdf">Simplex Method - II</option>
      
      <option  value="105108081/module3/lecture11/lecture.pdf">Linear Programming Application</option>
      
      <option  value="105108081/module3/lecture12/lecture.pdf">Reservoir operation and reservoir sizing using LP</option>
      
      <option  value="105108081/module4/lecture13/lecture.pdf">Introduction and preliminaries </option>
      
      <option  value="105108081/module4/lecture14/lecture.pdf">Water Allocation - I</option>
      
      <option  value="105108081/module4/lecture15/lecture.pdf">Water Allocation - II</option>
      
      <option  value="105108081/module4/lecture16/lecture.pdf">Capacity Expansion </option>
      
      <option  value="105108081/module4/lecture17/lecture.pdf">Reservoir operation </option>
      
      <option  value="105108081/module5/lecture18/lecture.pdf">Introduction</option>
      
      <option  value="105108081/module5/lecture19/lecture.pdf">Multipurpose Reservoir Operation</option>
      
      <option  value="105108081/module5/lecture20/lecture.pdf">Weighting function and constraint method </option>
      
      <option  value="105108081/module6/lecture21/lecture.pdf">Review of probability theory</option>
      
      <option  value="105108081/module6/lecture22/lecture.pdf">Uncertainty and reliability analysis </option>
      
      <option  value="105108081/module6/lecture23/lecture.pdf">Chance constrained LP - I</option>
      
      <option  value="105108081/module6/lecture24/lecture.pdf">Chance constrained LP - II</option>
      
      <option  value="105108081/module6/lecture25/lecture.pdf">Stochastic Processes and Transition Probabilities</option>
      
      <option  value="105108081/module6/lecture26/lecture.pdf">Stochastic DP</option>
      
      <option  value="105108081/module7/lecture27/lecture.pdf">Introduction and river basin simulation</option>
      
      <option  value="105108081/module7/lecture28/lecture.pdf">Reservoir operation simulation</option>
      
      <option  value="105108081/module7/lecture29/lecture.pdf">Performance Measures</option>
      
      <option  value="105108081/module8/lecture30/lecture.pdf">River basin planning and management  </option>
      
      <option  value="105108081/module8/lecture31/lecture.pdf">Water distribution system</option>
      
      <option  value="105108081/module8/lecture32/lecture.pdf">Ground water system </option>
      
      <option  value="105108081/module8/lecture33/lecture.pdf">Water quality modeling</option>
      
      <option  value="105108081/module8/lecture34/lecture.pdf">Floodplain management</option>
      
      <option  value="105108081/module8/lecture35/lecture.pdf">Urban storm water management</option>
      
      <option  value="105108081/module9/lecture36/lecture.pdf">Fuzzy optimization</option>
      
      <option  value="105108081/module9/lecture37/lecture.pdf">Genetic algorithms</option>
      
      <option  value="105108081/module9/lecture38/lecture.pdf">Multi – Criteria decision making</option>
      
      <option  value="105108081/module9/lecture39/lecture.pdf">Decision Support Systems</option>
      
      <option  value="105108081/module9/lecture40/lecture.pdf">Expert systems</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105108130</strong></td>
	<td><strong>Civil Engineering</strong></td>
	<td><strong>Water Resources Systems : Modeling Techniques and Analysis</strong></td>
	<td><strong>Prof. P.P. Mujumdar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="105108130/mod01lec01.mp4">Introduction</option>
      
      <option  value="105108130/mod01lec02.mp4">Definitions and types of systems</option>
      
      <option  value="105108130/mod01lec03.mp4">Optimization: Functions of a single variable</option>
      
      <option  value="105108130/mod01lec04.mp4">Optimization: Functions of multiple variables</option>
      
      <option  value="105108130/mod01lec05.mp4">Constrained optimization (1)</option>
      
      <option  value="105108130/mod01lec06.mp4">Constrained optimization (2)</option>
      
      <option  value="105108130/mod01lec07.mp4">Kuhn-Tucker conditions and Introduction to Linear Programming</option>
      
      <option  value="105108130/mod02lec08.mp4">Linear Programming: Graphical method</option>
      
      <option  value="105108130/mod02lec09.mp4">Linear Programming: Simplex method (1)</option>
      
      <option  value="105108130/mod02lec10.mp4">Linear Programming: Simplex method (2)</option>
      
      <option  value="105108130/mod02lec11.mp4">Linear Programming: Multiple solutions</option>
      
      <option  value="105108130/mod02lec12.mp4">Linear Programming: Unbounded and infeasible problems</option>
      
      <option  value="105108130/mod02lec13.mp4">Linear Programming: Dual problem</option>
      
      <option  value="105108130/mod03lec14.mp4">Introduction to Dynamic Programming</option>
      
      <option  value="105108130/mod03lec15.mp4">Dynamic Programming: Water allocation problem</option>
      
      <option  value="105108130/mod03lec16.mp4">Dynamic Programming: Reservoir operation problem</option>
      
      <option  value="105108130/mod03lec17.mp4">Dynamic Programming: Capacity expansion and shortest route problems</option>
      
      <option  value="105108130/mod04lec18.mp4">Simulation: Introduction to Multi-objective planning</option>
      
      <option  value="105108130/mod04lec19.mp4">Multi-objective planning</option>
      
      <option  value="105108130/mod05lec20.mp4">Reservoir sizing</option>
      
      <option  value="105108130/mod05lec21.mp4">Reservoir capacity using Linear Programming (1)</option>
      
      <option  value="105108130/mod05lec22.mp4">Reservoir capacity using Linear Programming (2)</option>
      
      <option  value="105108130/mod05lec23.mp4">Reservoir operation</option>
      
      <option  value="105108130/mod05lec24.mp4">Multi-reservoir systems</option>
      
      <option  value="105108130/mod05lec25.mp4">Stationary policy using Dynamic Programming</option>
      
      <option  value="105108130/mod05lec26.mp4">Hydropower generation</option>
      
      <option  value="105108130/mod06lec27.mp4">Basic probability theory (1)</option>
      
      <option  value="105108130/mod06lec28.mp4">Basic probability theory (2)</option>
      
      <option  value="105108130/mod06lec29.mp4">Chance constrained Linear Programming for reservoir operation and design (1)</option>
      
      <option  value="105108130/mod06lec30.mp4">Chance constrained Linear Programming for reservoir operation and design (2)</option>
      
      <option  value="105108130/mod06lec31.mp4">Stochastic Dynamic Programming for reservoir operation (1)</option>
      
      <option  value="105108130/mod06lec32.mp4">Stochastic Dynamic Programming for reservoir operation (2)</option>
      
      <option  value="105108130/mod06lec33.mp4">Stochastic Dynamic Programming for reservoir operation (3)</option>
      
      <option  value="105108130/mod07lec34.mp4">Fuzzy optimization (1)</option>
      
      <option  value="105108130/mod07lec35.mp4">Fuzzy optimization (2)</option>
      
      <option  value="105108130/mod07lec36.mp4">Fuzzy optimization for water quality control and reservoir operation</option>
      
      <option  value="105108130/mod08lec37.mp4">Conjunctive use of ground and surface water</option>
      
      <option  value="105108130/mod08lec38.mp4">Hydropower optimization</option>
      
      <option  value="105108130/mod08lec39.mp4">Crop yield optimization</option>
      
      <option  value="105108130/mod08lec40.mp4">Multi-basin and multi-reservoir systems</option>
          </select></td>
	
	</tr>
	</form>




<form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>105106145</strong></td>
	<td><strong> Civil Engineering </strong></td>
	<td><strong> NOC:Sustainable River Basin Management </strong></td>
	<td><strong>Dr. Franziska Steinbruch</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IGCS</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="105106145/mod01lec01.mp4"> Lecture 01</option>
      
      <option  value="105106145/mod01lec02.mp4"> Lecture 02</option>
      
      <option  value="105106145/mod01lec03.mp4"> Lecture 03</option>
      
      <option  value="105106145/mod01lec04.mp4"> Lecture 04</option>
      
      <option  value="105106145/mod01lec05.mp4"> Lecture 05</option>
      
      <option  value="105106145/mod02lec06.mp4"> Lecture 06</option>
      
      <option  value="105106145/mod02lec07.mp4"> Lecture 07</option>
      
      <option  value="105106145/mod02lec08.mp4"> Lecture 08</option>
      
      <option  value="105106145/mod02lec09.mp4"> Lecture 09</option>
      
      <option  value="105106145/mod02lec10.mp4"> Lecture 10</option>
      
      <option  value="105106145/mod03lec11.mp4"> Lecture 11</option>
      
      <option  value="105106145/mod03lec12.mp4"> Lecture 12</option>
      
        
      <option  value="105106145/mod03lec13.mp4"> Lecture 13</option>
      
      <option  value="105106145/mod03lec14.mp4"> Lecture 14</option>
      
      <option  value="105106145/mod03lec15.mp4"> Lecture 15</option>
      
      <option  value="105106145/mod04lec16.mp4"> Lecture 16</option>
      
      <option  value="105106145/mod04lec17.mp4"> Lecture 17</option>
      
      <option  value="105106145/mod04lec18.mp4"> Lecture 18</option>
      
      <option  value="105106145/mod04lec19.mp4"> Lecture 19</option>
      
      <option  value="105106145/mod04lec20.mp4"> Lecture 20</option>
      
      <option  value="105106145/mod05lec21.mp4"> Lecture 21 </option>
      
      <option  value="105106145/mod05lec22.mp4"> Lecture 22 </option>
      
      <option  value="105106145/mod05lec23.mp4"> Lecture 23 </option>
      
      <option  value="105106145/mod05lec24.mp4"> Lecture 24 </option>
      
      <option  value="105106145/mod05lec25.mp4"> Lecture 25 </option>
      
      <option  value="105106145/mod06lec26.mp4"> Lecture 26 </option>
      
      <option  value="105106145/mod06lec27.mp4"> Lecture 27 </option>
      
      <option  value="105106145/mod06lec28.mp4"> Lecture 28 </option>
      
      <option  value="105106145/mod06lec29.mp4"> Lecture 29 </option>
      
      <option  value="105106145/mod06lec30.mp4"> Lecture 30 </option>
      
      <option  value="105106145/mod07lec31.mp4"> Lecture 31 </option>
      
      <option  value="105106145/mod07lec32.mp4"> Lecture 32 </option>
      
      <option  value="105106145/mod07lec33.mp4"> Lecture 33 </option>
      
      <option  value="105106145/mod07lec34.mp4"> Lecture 34 </option>
      
      <option  value="105106145/mod07lec35.mp4"> Lecture 35 </option>
      
      <option  value="105106145/mod08lec36.mp4"> Lecture 36 </option>
      
      <option  value="105106145/mod08lec37.mp4"> Lecture 37 </option>
      
      <option  value="105106145/mod08lec38.mp4"> Lecture 38 </option>
      
      <option  value="105106145/mod08lec39.mp4"> Lecture 39 </option>
      
      <option  value="105106145/mod08lec40.mp4"> Lecture 40 </option>
      
                                  
          </select>
</td>
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>105105042</strong></td>
      <td><strong>Civil Engineering</strong></td>
      <td><strong>Ground Water Hydrology</strong></td>
      <td><strong>Dr. Anirban Dhar, Dr. V.R. Desa</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kharagpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
			<option  value="105105042/Lec-01.mp4">
				Introduction : Ground Water (GW) Utilization and Historical Background, GW in hydrologic Cycle
			</option>
			<option  value="105105042/Lec-02.mp4">
				Ground Water in Hydrologic Cycle (Contd.), Ground Water Budget, Ground Water Level Fluctuations and Environmental Influence
			</option>
			<option  value="105105042/Lec-03.mp4">
				Ground water Level Fluctuations and Environmental Influence (Contd.) Literature/Data/Internet Resources
			</option>
			<option  value="105105042/Lec-04.mp4">Ground Water :Literature/Data/Internet Sources</option>
			<option  value="105105042/Lec-05.mp4">
				Occurrence and Movement of Ground Water : Origin and Age of Ground Water, Rock Properties Affecting Ground Water, Ground Water Column
			</option>
			<option  value="105105042/Lec-06.mp4">Zones of Aeration and Saturation; Aquifers and their characteristics/classification</option>
			<option  value="105105042/Lec-07.mp4">Aquifer Classification (Contd.), Ground water Basins and Springs; Dorcy's Law; Permeability</option>
			<option  value="105105042/Lec-08.mp4">Determination pf Permeability :Heterogeneity and Anisotropy</option>
			<option  value="105105042/Lec-09.mp4">Ground Water (GW) flowrates and flow directions; general flow equations through porous media</option>
			<option  value="105105042/Lec-10.mp4">General Flow Equations Through Porous Media (Contd.), Dupuit's Assumptions</option>
			<option  value="105105042/Lec-11.mp4">1-D Unconfined Ground water Flows; Steady Flow into Wells</option>
			<option  value="105105042/Lec-12.mp4">Steady Flow into Wells (Contd.); Unsteady Flow into Wells</option>
			<option  value="105105042/Lec-13.mp4">Unsteady Flow into Wells (Contd.)</option>
			<option  value="105105042/Lec-14.mp4">Unsteady Radial Flow in Confined and Unconfined Aquifers</option>
			<option  value="105105042/Lec-15.mp4">Unsteady Radial Flow in Leaky Aquifers (Contd.); Well Flow Near Aquifer Boundaries</option>
			<option  value="105105042/Lec-16.mp4">
				Well Flow for Special Conditions; Partially Penetrating Wells; Horizontal Wells and Collector Wells;Multiple Well Systems
			</option>
			<option  value="105105042/Lec-17.mp4">
				Well Completion;Well Development; Well Protection; Well Rehabilitation; Well testing for Yields
			</option>
			<option  value="105105042/Lec-18.mp4">
				Well Protection/Rehabilitation/Testing for yield (Contd.); Artificial Ground Water Recharge : Concept and Methods
			</option>
			<option  value="105105042/Lec-19.mp4">
				Concept and methods of Artificial Ground Water Recharge (Contd.); Recharge Mounds and Induced Recharge
			</option>
			<option  value="105105042/Lec-20.mp4">Induced Recharge (Contd.); Wastewater recharge for reuse; Water spreading</option>
			<option  value="105105042/Lec-21.mp4">
				Pollution and Quality Analysis of Ground Water : Sources of Pollution of GW-Municipal, Industrial,Agricultural and Miscellaneous
			</option>
			<option  value="105105042/Lec-22.mp4">Ground Water Pollution from Industrial, Agricultural and Miscellaneous Sources (Contd.)</option>
			<option  value="105105042/Lec-23.mp4">
				Ground Water Pollution from Miscellaneous Sources (Contd.), Attenuation and Underground Distribution of Pollutants
			</option>
			<option  value="105105042/Lec-24.mp4">
				Potential Evaluation of Ground water Pollution; Physical/Chemical/Biological analysis of Ground Water quality; Criteria and measures of Ground water quality
			</option>
			<option  value="105105042/Lec-25.mp4">Ground water salinity and samples ;Graphical representations of ground water quality</option>
			<option  value="105105042/Lec-26.mp4">
				Graphical representations of ground water quality (Contd.), SURFACE/SUB-SURFACE INVESTIGATION OF GROUND WATER:Geological/geophysical exploration;Remote sensing/electrical resistivity methods
			</option>
			<option  value="105105042/Lec-27.mp4">
				Surface Investigation of ground water (Contd.):Electrical resistivity seismic refraction/gravity/magnetic methods
			</option>
			<option  value="105105042/Lec-28.mp4">
				Seismic refraction/gravity/magnetic methods (Contd.);Sub-surface investigation of ground water: Geographical/resistivity methods
			</option>
			<option  value="105105042/Lec-29.mp4">
				Sub-surface investigation of ground water (Contd.): Geographical/resistivity/spontaneous potential/radiation of methods of logging
			</option>
			<option  value="105105042/Lec-30.mp4">
				Radiation method of logging (Contd.); Temperature/caliper/fluid conductivity/fluid velocity/miscellaneous logging methods
			</option>
			<option  value="105105042/Lec-31.mp4">
				Saline Water Intrusion in Aquifers:Occurence, Features affecting aquifers,Bodon - Ghyben - Hergberg Principle
			</option>
			<option  value="105105042/Lec-32.mp4">
				Saline Water Intrusion in Aquifers : Bodon - Ghyben - Hergberg principle (Contd.), Analytical Solution of Saline Water Intrusion in Coastal Aquifer
			</option>
			<option  value="105105042/Lec-33.mp4">
				Saline Water Intrusion in Aquifers : Analytical Solution of Saline Water Intrusion in Coastal Aquifer (Contd.), Density dependent salt water intrusion model
			</option>
			<option  value="105105042/Lec-34.mp4">
				Saline Water Intrusion in Aquifers : Geochemical Investigations, Control of salt water intrusion, Practical Modeling of salt water intrusion
			</option>
			<option  value="105105042/Lec-35.mp4">
				Modeling and Management of Ground Water - Ground Water Simulation Models, Ground Water Management Model : Confined Aquifer
			</option>
			<option  value="105105042/Lec-36.mp4">
				Modeling and Management of Ground Water : Ground Water Management Model : Confined and Unconfined Aquifer, Linked Simulation - Optimization, Meta Model Based Approach
			</option>
			<option  value="105105042/Lec-37.mp4">
				Modeling and Management of Ground Water : Contaminant Source Identification , Monitoring Network Design
			</option>
			<option  value="105105042/Lec-38.mp4">
				Modeling and Management of Ground Water : Aquifer Yield and Ground Water Availability, Effects of Ground Water Development, Regional Scale Development of Ground Water
			</option>
			<option  value="105105042/Lec-39.mp4">
				Modeling and Management of Ground Water : Conjunctive Surface - Subsurface Modeling of Overland Flow including flow through Vadose zone
			</option>
			<option  value="105105042/Lec-40.mp4">
				Modeling and Management of Ground Water : Ground Water  - Surface Water Interaction 
			</option>
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
