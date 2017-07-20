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
<title>Metallurgy</title>
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
	<td><strong>113101002</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Computational Approach to Materials Science and Engineering</strong></td>
	<td><strong>Dr. M.P. Gururajan,Dr. Prita Pant</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113101002/parts/partI/module1/1.1.html">Module 1: Introduction</option>
      
      <option  value="113101002/parts/partII/module1/1.2.html">Module 1: The C programming language</option>
      
      <option  value="113101002/parts/partII/module2/1.2.html">Module 2: gnuplot � the plotting freeware</option>
      
      <option  value="113101002/parts/partII/module3/1.2.html">Module 3: GNU Octave for computations and plotting</option>
      
      <option  value="113101002/parts/partII/module4/1.2.html">Module 4: Scilab: the scientific computation package</option>
      
      <option  value="113101002/parts/partII/module5/1.2.html">Module 5: Some miscallaneous freeware</option>
      
      <option  value="113101002/parts/partIII/module1/1.2.html">Module 1: Plotting</option>
      
      <option  value="113101002/parts/partIII/module2/1.2.html">Module 2: Fitting</option>
      
      <option  value="113101002/parts/partIII/module3/1.2.html">Module 3: Interpolation</option>
      
      <option  value="113101002/parts/partIII/module4/1.2.html">Module 4: Numerical integration</option>
      
      <option  value="113101002/parts/partIII/module5/1.2.html">Module 5: Numerical differentiation</option>
      
      <option  value="113101002/parts/partIV/module1/1.2.html">Module 1: Structure and defects</option>
      
      <option  value="113101002/parts/partIV/module2/1.2.html">Module 2: Regular solution model</option>
      
      <option  value="113101002/parts/partIV/module3/1.2.html">Module 3 : Diffusion and precipitate growth ki- netics</option>
      
      <option  value="113101002/parts/partIV/module4/1.2.html">Module 4: Spinodal decomposition</option>
      
      <option  value="113101002/parts/partIV/module5/1.2.html">Module 5 : Ordering</option>
      
      <option  value="113101002/parts/partIV/module6/1.2.html">Module 6 : Molecular Dynamics</option>
      
      <option  value="113101002/parts/partIV/module7/1.2.html">Module 7 : Monte Carlo simulations</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113101003</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Phase Transformations and Heat Treatment</strong></td>
	<td><strong>Dr. M.P. Gururajan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113101003/parts/partI/module1/1.1.html">Module 1: Gibbs free energy and equilibria</option>
      
      <option  value="113101003/parts/partI/module2/1.2.html">Module 2: Gibbs free energy of a binary alloy</option>
      
      <option  value="113101003/parts/partI/module3/1.2.html">Module 3: G versus xB curves and phase diagrams</option>
      
      <option  value="113101003/parts/partI/module4/1.2.html">Module 4: Driving force for diffusion</option>
      
      <option  value="113101003/parts/partI/module5/1.2.html">Module 5: Fick's laws of diusion and their solution</option>
      
      <option  value="113101003/parts/partI/module6/1.2.html">Module 6: Diffusivity</option>
      
      <option  value="113101003/parts/partII/module1/1.2.html">Module 1: Structure of interfaces</option>
      
      <option  value="113101003/parts/partII/module2/1.2.html">Module 2 : Interfacial free energy</option>
      
      <option  value="113101003/parts/partII/module3/1.2.html">Module 3: A bond-breaking model</option>
      
      <option  value="113101003/parts/partII/module4/1.2.html">Module 4: Equilibrium shapes of crystals</option>
      
      <option  value="113101003/parts/partIII/module1/1.2.html">Module 1 : Effect of interfaces</option>
      
      <option  value="113101003/parts/partIII/module2/1.2.html">Module 2 : Nucleation of solids from their melt</option>
      
      <option  value="113101003/parts/partIII/module3/1.2.html">Module 3 : Nucleation of precipitates from a supersaturated matrix</option>
      
      <option  value="113101003/parts/partIII/module4/1.2.html">Module 4 : Growth of precipitates and kinetics of nucleation and growth</option>
      
      <option  value="113101003/parts/partIV/module1/1.2.html">Module 1 : Precipitation</option>
      
      <option  value="113101003/parts/partIV/module2/1.2.html">Module 2 : Cellular precipitation</option>
      
      <option  value="113101003/parts/partIV/module3/1.2.html">Module 3 : Eutectoid transformations</option>
      
      <option  value="113101003/parts/partIV/module4/1.2.html">Module 4 : Massive transformations</option>
      
      <option  value="113101003/parts/partIV/module5/1.2.html">Module 5 : Martensitic transformations</option>
      
      <option  value="113101003/parts/partV/module1/1.2.html">Module 1 : Spinodal decomposition</option>
      
      <option  value="113101003/parts/partV/module2/1.2.html">Module 2 : Order-disorder transformation</option>
      
      <option  value="113101003/parts/partVI/module1/1.2.html">Module 1 : Hardness and hardenability: an aside</option>
      
      <option  value="113101003/parts/partVI/module2/1.2.html">Module 2 : Formation and evolution of microstructures</option>
      
      <option  value="113101003/parts/partVI/module3/1.2.html">Module 3 : Practical aspects of heat treatment</option>
      
      <option  value="113101003/parts/partVI/module4/1.2.html">Module 4 : Quenching</option>
      
      <option  value="113101003/parts/partVI/module5/1.2.html">Module 5 : Some standard heat treatments</option>
      
      <option  value="113101003/parts/partVII/module1/1.2.html">Module 1 : Recovery and recrystallisation</option>
      
      <option  value="113101003/parts/partVII/module2/1.2.html">Module 2 : Grain growth</option>
      
      <option  value="113101003/parts/partVII/module3/1.2.html">Module 3 : Coarsening</option>
      
      <option  value="113101003/parts/partVIII/module1/1.2.html">Module 1 : Types of transformations</option>
      
      <option  value="113101003/parts/partIX/1.2.html">Module 1 : Supplementary information</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113104005</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Electroceramics</strong></td>
	<td><strong>Dr. Ashish Garg</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104005/lecture1/1_1a.htm">Overview</option>
      
      <option  value="113104005/lecture1/1_1.htm">Brief Review of Structure in Materials</option>
      
      <option  value="113104005/lecture2/2_1a.htm">A Brief Review of Bonding in Materials</option>
      
      <option  value="113104005/lecture2/2_5.htm">Packing of Atoms in Metals</option>
      
      <option  value="113104005/lecture2/2_6.htm">Interstices in Structures</option>
      
      <option  value="113104005/lecture2/2_7.htm">Structure of Covalent Ceramics</option>
      
      <option  value="113104005/lecture3/3_2.htm">Ionically Bonded Ceramic Structures</option>
      
      <option  value="113104005/lecture3/3_5.htm">Compounds based on FCC Packing of Ions</option>
      
      <option  value="113104005/lecture4/4_2.htm">Other Cubic Structures</option>
      
      <option  value="113104005/lecture4/4_5.htm">Orthogonal Structures</option>
      
      <option  value="113104005/lecture5/5_2.htm">Structures based on HCP Packing of Ions</option>
      
      <option  value="113104005/lecture5/5_8.htm">Summary</option>
      
      <option  value="113104005/lecture6/6_1.htm">Introduction</option>
      
      <option  value="113104005/lecture6/6_2.htm">Point Defects</option>
      
      <option  value="113104005/lecture6/6_3.htm">Kroger�Vink notation in a metal oxide, (MO)</option>
      
      <option  value="113104005/lecture6/6_4.htm">Defect Reactions  </option>
      
      <option  value="113104005/lecture6/6_5.htm">Defect Structures in Stoichiometric Oxides</option>
      
      <option  value="113104005/lecture6/6_6.htm">Defect Structures in Non - Stoichiometric Oxides</option>
      
      <option  value="113104005/lecture7/7_2.html">Dissolution of Foreign Cations in an Oxide</option>
      
      <option  value="113104005/lecture7/7_4.html">Concentration of Intrinsic Defects</option>
      
      <option  value="113104005/lecture7/7_6.htm">Intrinsic and Extrinsic Defects</option>
      
      <option  value="113104005/lecture7/7_7.htm">Units for Defect Concentration</option>
      
      <option  value="113104005/lecture8/8_2.html">Defect Equilibria</option>
      
      <option  value="113104005/lecture8/8_3.htm">Defect Equilibria in Stoichiometric Oxides</option>
      
      <option  value="113104005/lecture9/9_2.htm">Defect Equilibria in Non-Stoichiometric Oxides</option>
      
      <option  value="113104005/lecture10/10_2.htm">Defect Structures involving Oxygen Vacancies and Interstitials</option>
      
      <option  value="113104005/lecture11/11_2.htm">Defect Equilibrium Diagram</option>
      
      <option  value="113104005/lecture11/11_3.htm">A Simple General Procedure for Constructing a Brouwer\'s Diagram</option>
      
      <option  value="113104005/lecture11/11_4.htm">Extent of Non-Stoichiometry</option>
      
      <option  value="113104005/lecture11/11_5.htm">Example: Comparative Behavior of Titanium Dioxide and Magnesium Oxide vis-�-vis Oxygen Pressure</option>
      
      <option  value="113104005/lecture12/12_2.htm">Electronic Disorder</option>
      
      <option  value="113104005/lecture12/12_4.htm">Examples</option>
      
      <option  value="113104005/lecture12/12_8.htm">Summary of Defect Chemistry and Defect Equilibria</option>
      
      <option  value="113104005/lecture13/13_1.htm">	Introduction</option>
      
      <option  value="113104005/lecture13/13_2.htm">Diffusion</option>
      
      <option  value="113104005/lecture13/13_3.htm">Diffusion Kinetics</option>
      
      <option  value="113104005/lecture14/14_2.html">Examples of Diffusion in Ceramics</option>
      
      <option  value="113104005/lecture14/14_3.htm">Mobility and Diffusivity</option>
      
      <option  value="113104005/lecture15/15_2.html">Analogue to the Electrical Properties </option>
      
      <option  value="113104005/lecture15/15_3.html">Conduction in Ceramics vis-�-vis metallic conductors: General Information</option>
      
      <option  value="113104005/lecture15/15_4.htm">Ionic Conduction: Basic Facts</option>
      
      <option  value="113104005/lecture15/15_5.html">Ionic and Electronic Conductivity</option>
      
      <option  value="113104005/lecture16/16_2.htm">Characteristics of Ionic Conduction</option>
      
      <option  value="113104005/lecture16/16_3.html">Theory of Ionic Conduction</option>
      
      <option  value="113104005/lecture17/17_2.htm">Conduction in Glasses</option>
      
      <option  value="113104005/lecture17/17_3.html">Fast Ion Conductors</option>
      
      <option  value="113104005/lecture17/17_4.html">Examples of Ionic Conduction</option>
      
      <option  value="113104005/lecture18/18_2.htm">Electrochemical Potential</option>
      
      <option  value="113104005/lecture18/18_3.html">Nernst Equation and Application of Ionic Conductors</option>
      
      <option  value="113104005/lecture19/19_2.html">Examples of Ionic Conductors in Engineering Applications</option>
      
      <option  value="113104005/lecture19/19_6.htm">Summary of Defects, Diffusion and Conduction in Ceramics </option>
      
      <option  value="113104005/lecture17a/17_1.htm">  	Introduction</option>
      
      <option  value="113104005/lecture17a/17_2.html">Basic Properties: Dielectrics in DC Electric Field</option>
      
      <option  value="113104005/lecture18a/18_2.htm">Mechanisms of Polarization</option>
      
      <option  value="113104005/lecture18a/18_3.htm">Microscopic Approach</option>
      
      <option  value="113104005/lecture18a/18_4.htm">Determination of Local Field</option>
      
      <option  value="113104005/lecture19a/19_2.htm">Analytical Treatment of Polarizability</option>
      
      <option  value="113104005/lecture21/21_2.htm">Effect of Alternating Field on the Behavior of a Dielectric Material</option>
      
      <option  value="113104005/lecture22/22_2.htm">Frequency Dependence of Dielectric Properties: Resonance</option>
      
      <option  value="113104005/lecture23/23_2.htm">Dipolar Relaxation i.e. Debye Relaxation in Polar Solids </option>
      
      <option  value="113104005/lecture24/24_2.htm">Circuit Representation of a Dielectric and Impedance Analysis</option>
      
      <option  value="113104005/lecture24/24_3.htm">Impedance Spectroscopy</option>
      
      <option  value="113104005/lecture24/24_4.htm">Dielectric Breakdown</option>
      
      <option  value="113104005/lecture24/24_5.htm">Basic mechanisms of breakdown </option>
      
      <option  value="113104005/lecture24/24_6.htm">Summary of Dielectric Ceramics: Basic Principles </option>
      
      <option  value="113104005/lecture25/25_1.htm">  Introduction</option>
      
      <option  value="113104005/lecture25/25_2.htm">Classification based on Crystal Classes</option>
      
      <option  value="113104005/lecture25/25_3.htm">Ferroelectric Ceramics</option>
      
      <option  value="113104005/lecture29/29_2.htm">Piezoelectric Ceramics</option>
      
      <option  value="113104005/lecture30/30_2.htm">Pyroelectric Ceramics</option>
      
      <option  value="113104005/lecture30/30_9.htm">Summary of Nonlinear Dielectrics</option>
      
      <option  value="113104005/lecture29a/29_1.htm">   Introduction</option>
      
      <option  value="113104005/lecture29a/29_2.htm">Magnetic Moments</option>
      
      <option  value="113104005/lecture29a/29_3.htm">Macroscopic view of Magnetization</option>
      
      <option  value="113104005/lecture29a/29_4.htm">Classification of Magnetism</option>
      
      <option  value="113104005/lecture30a/30_2.htm">Diamagnetism</option>
      
      <option  value="113104005/lecture30a/30_3.htm">Paramagnetism </option>
      
      <option  value="113104005/lecture30a/30_4.htm">Ferromagnetism</option>
      
      <option  value="113104005/lecture31/31_2.htm">Antiferromagnetic Materials</option>
      
      <option  value="113104005/lecture31/31_3.htm">Ferrimagnetic Materials</option>
      
      <option  value="113104005/lecture31/31_4.htm">A Comparison</option>
      
      <option  value="113104005/lecture31/31_5.htm">Magnetic Losses and Frequency Dependence</option>
      
      <option  value="113104005/lecture32/32_2.htm">Magnetic Ferrites</option>
      
      <option  value="113104005/lecture32/32_10.htm">Summary of Magnetic Ceramics</option>
      
      <option  value="113104005/lecture33/33_1.htm">    Introduction</option>
      
      <option  value="113104005/lecture33/33_2.htm">Background</option>
      
      <option  value="113104005/lecture33/33_3.htm">Meissner Effect</option>
      
      <option  value="113104005/lecture33/33_4.html">The Critical Field, Hc</option>
      
      <option  value="113104005/lecture33/33_5.htm">Theory of Superconductivity</option>
      
      <option  value="113104005/lecture33/33_6.htm">Discovery of High Temperature Superconductivity</option>
      
      <option  value="113104005/lecture33/33_7.htm">Mechanism of High Temperature Superconductivity</option>
      
      <option  value="113104005/lecture33/33_8.htm">Applications</option>
      
      <option  value="113104005/lecture33/33_9.htm">Summary of High temperature Superconductors</option>
      
      <option  value="113104005/lecture34/34_1.htm">     Introduction</option>
      
      <option  value="113104005/lecture34/34_2.htm">Ferroic Material</option>
      
      <option  value="113104005/lecture34/34_3.htm">Historical Perspective</option>
      
      <option  value="113104005/lecture34/34_5.htm">Requirements of a Magnetoelectric and Multiferroic Material</option>
      
      <option  value="113104005/lecture34/34_6.htm">Magnetoelectric Coupling</option>
      
      <option  value="113104005/lecture34/34_7.htm">Type I Multiferroics</option>
      
      <option  value="113104005/lecture34/34_11.htm">Type II Multiferroics</option>
      
      <option  value="113104005/lecture34/34_12.htm">Two Phase Materials</option>
      
      <option  value="113104005/lecture34/34_13.htm">Summary of Multiferroic and Magnetoelectric Ceramics</option>
      
      <option  value="113104005/lecture35/35_1.htm">       Introduction</option>
      
      <option  value="113104005/lecture35/35_2.htm">Bulk Preparation Methods</option>
      
      <option  value="113104005/lecture35/35_4.html">Thin Film Preparation Methods</option>
      
      <option  value="113104005/lecture35/35_11.htm">Thin film deposition: Issues</option>
      
      <option  value="113104005/lecture35/35_12.htm">Summary of Synthesis Methods</option>
      
      <option  value="113104005/lecture1/1_1b.htm">Table of Contents</option>
      
      <option  value="113104005/lecture1/1_1c.htm">General Bibliography</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104006</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Electroceramics</strong></td>
	<td><strong>Dr. Ashish Garg</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104006/mod01lec01.mp4">Lecture-01</option>
      
      <option  value="113104006/mod01lec02.mp4">Lecture-02</option>
      
      <option  value="113104006/mod01lec03.mp4">Lecture-03</option>
      
      <option  value="113104006/mod01lec04.mp4">Lecture-04</option>
      
      <option  value="113104006/mod01lec05.mp4">Lecture-05</option>
      
      <option  value="113104006/mod01lec06.mp4">Lecture-06</option>
      
      <option  value="113104006/mod01lec07.mp4">Lecture-07</option>
      
      <option  value="113104006/mod01lec08.mp4">Lecture-08</option>
      
      <option  value="113104006/mod01lec09.mp4">Lecture-09</option>
      
      <option  value="113104006/mod01lec10.mp4">Lecture-10</option>
      
      <option  value="113104006/mod01lec11.mp4">Lecture-11</option>
      
      <option  value="113104006/mod01lec12.mp4">Lecture-12</option>
      
      <option  value="113104006/mod01lec13.mp4">Lecture-13</option>
      
      <option  value="113104006/mod01lec14.mp4">Lecture-14</option>
      
      <option  value="113104006/mod01lec15.mp4">Lecture-15</option>
      
      <option  value="113104006/mod01lec16.mp4">Lecture-16</option>
      
      <option  value="113104006/mod01lec17.mp4">Lecture-17</option>
      
      <option  value="113104006/mod01lec18.mp4">Lecture-18</option>
      
      <option  value="113104006/mod01lec19.mp4">Lecture-19</option>
      
      <option  value="113104006/mod01lec20.mp4">Lecture-20</option>
      
      <option  value="113104006/mod01lec21.mp4">Lecture-21</option>
      
      <option  value="113104006/mod01lec22.mp4">Lecture-22</option>
      
      <option  value="113104006/mod01lec23.mp4">Lecture-23</option>
      
      <option  value="113104006/mod01lec24.mp4">Lecture-24</option>
      
      <option  value="113104006/mod01lec25.mp4">Lecture-25</option>
      
      <option  value="113104006/mod01lec26.mp4">Lecture-26</option>
      
      <option  value="113104006/mod01lec27.mp4">Lecture-27</option>
      
      <option  value="113104006/mod01lec28">Lecture-28</option>
      
      <option  value="113104006/mod01lec29.mp4">Lecture-29</option>
      
      <option  value="113104006/mod01lec30.mp4">Lecture-30</option>
      
      <option  value="113104006/mod01lec31.mp4">Lecture-31</option>
      
      <option  value="113104006/mod01lec32.mp4">Lecture-32</option>
      
      <option  value="113104006/mod01lec33.mp4">Lecture-33</option>
      
      <option  value="113104006/mod01lec34.mp4">Lecture-34</option>
      
      <option  value="113104006/mod01lec35.mp4">Lecture-35</option>
      
      <option  value="113104006/mod01lec36.mp4">Lecture-36</option>
      
      <option  value="113104006/mod01lec37.mp4">Lecture-37</option>
      
      <option  value="113104006/mod01lec38.mp4">Lecture-38</option>
      
      <option  value="113104006/mod01lec39.mp4">Lecture-39</option>
      
      <option  value="113104006/mod01lec40.mp4">Lecture-40</option>
      
      <option  value="113104006/mod01lec41.mp4">Lecture-41</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104008</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Fuels Refractory and Furnaces</strong></td>
	<td><strong>Prof. Satish Ch. Koria </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104008/mod01lec01.mp4">Lecture-1_Energy Resources and Environment</option>
      
      <option  value="113104008/mod01lec02.mp4">Lecture-2_Characterization of Fuels: Concepts </option>
      
      <option  value="113104008/mod01lec03.mp4">Lecture-3_Characterization of Fuels: Concepts </option>
      
      <option  value="113104008/mod01lec04.mp4">Lecture-4_Production of Secondary Fuels : Carbonization</option>
      
      <option  value="113104008/mod01lec05.mp4">Lecture-5_Materials Balance in Coke-making</option>
      
      <option  value="113104008/mod01lec06.mp4">Lecture-6_Heat Balance and Clean Development Mechanism</option>
      
      <option  value="113104008/mod01lec07.mp4">Lecture-7_Production of Secondary Fuels: Gasification </option>
      
      <option  value="113104008/mod01lec08.mp4">Lecture-8_Materials and Heat Balance in Gasification</option>
      
      <option  value="113104008/mod01lec09.mp4">Lecture-9	Principles of combustion: Concepts and illustrations</option>
      
      <option  value="113104008/mod01lec10.mp4">Lecture-10_Principles of combustion: Concepts and illustrations</option>
      
      <option  value="113104008/mod01lec11.mp4">Lecture-11_Materials balance in combustion</option>
      
      <option  value="113104008/mod01lec12.mp4">Lecture-12 _Principles of Combustion: Flame Temperature </option>
      
      <option  value="113104008/mod01lec13.mp4">Lecture-13_Flame Temperature Calculations</option>
      
      <option  value="113104008/mod01lec14.mp4">Lecture-14_Refractory in Furnaces</option>
      
      <option  value="113104008/mod01lec15.mp4">Lecture-15_Refractory in Furnaces</option>
      
      <option  value="113104008/mod01lec16.mp4">Lecture-16_Furnace: Types and Classification</option>
      
      <option  value="113104008/mod01lec17.mp4">Lecture-17_Heat Utilization in furnaces, energy flow diagrams</option>
      
      <option  value="113104008/mod01lec18.mp4">Lecture-18	_Heat Utilization in furnaces, energy flow diagrams</option>
      
      <option  value="113104008/mod01lec19.mp4">Lecture-19_Heat Utilization in Furnaces: Heat Recovery Concepts and Illustrations</option>
      
      <option  value="113104008/mod01lec20.mp4">Lecture-20_Heat Utilization in Furnaces: Heat Recovery Concepts and Illustrations</option>
      
      <option  value="113104008/mod01lec21.mp4">Lecture-21_Transport Phenomena in Furnaces: Fluid Flow</option>
      
      <option  value="113104008/mod01lec22.mp4">Lecture-22_Macroscopic Energy Balance: Concepts </option>
      
      <option  value="113104008/mod01lec23.mp4">Lecture-23_Macroscopic Energy Balance: Applications to Design Head Meters, Stack and Blowers, Types of Flames</option>
      
      <option  value="113104008/mod01lec24.mp4">Lecture-24_Macroscopic Energy Balance: Applications to Design Head Meters, Stack and Blowers, Types of Flames</option>
      
      <option  value="113104008/mod01lec25.mp4">Lecture-25_Macroscopic Energy Balance: Applications to Design Head Meters, Stack and Blowers, Types of Flames</option>
      
      <option  value="113104008/mod01lec26.mp4">Lecture-26_Macroscopic Energy Balance: Applications to Design Head Meters, Stack and Blowers, Types of Flames</option>
      
      <option  value="113104008/mod01lec27.mp4">Lecture-27_Principles of Burner Design</option>
      
      <option  value="113104008/mod01lec28.mp4">Lecture-28_Transport Phenomena in Furnaces: Heat Transfer and Refractory Design </option>
      
      <option  value="113104008/mod01lec29.mp4">Lecture-29_Transport Phenomena in Furnaces: Heat Transfer and Refractory Design </option>
      
      <option  value="113104008/mod01lec30.mp4">Lecture-30_Transport Phenomena in Furnaces: Convection and Radiation Heat Transfer, Role of Refractory</option>
      
      <option  value="113104008/mod01lec31.mp4">Lecture-31_Transport Phenomena in Furnaces: Convection and Radiation Heat Transfer, Role of Refractory</option>
      
      <option  value="113104008/mod01lec32.mp4">Lecture-32_Steady Heat flows in Furnace and Heat Exchanger</option>
      
      <option  value="113104008/mod01lec33.mp4">Lecture-33_Exercises on Heat Flow in Furnaces and Heat Exchangers </option>
      
      <option  value="113104008/mod01lec34.mp4">Lecture-34_Exercises on Heat Flow in Furnaces and Heat Exchangers </option>
      
      <option  value="113104008/mod01lec35.mp4">Lecture-35_Miscellaneous Topics: Atmosphere in Furnaces</option>
      
      <option  value="113104008/mod01lec36.mp4">Lecture-36_Miscellaneous Topics: Pyrometry</option>
      
      <option  value="113104008/mod01lec37.mp4">Lecture-37_Miscellaneous Topics: Pyrometry</option>
      
      <option  value="113104008/mod01lec38.mp4">Lecture-38_Miscellaneous topics: Electric Resistance Heating </option>
      
      <option  value="113104008/mod01lec39.mp4">Lecture-39_Furnace efficiency, Fuel Saving, Carbon Offset: Concepts and Exercises</option>
      
      <option  value="113104008/mod01lec40.mp4">Lecture-40_Furnace efficiency, Fuel Saving, Carbon Offset: Concepts and Exercises</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104009</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Introduction to Biomaterials</strong></td>
	<td><strong>Dr. Birkamjit Basu,Dr. Kantesh Balani</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104009/mod01lec01.mp4">Lecture-01-Introduction to basic concepts of Biomaterials Science; Salient properties of important material classes; overview of body environment, </option>
      
      <option  value="113104009/mod01lec02.mp4">Lecture-02-Manufacturing and properties of metals, ceramics, polymers and composites</option>
      
      <option  value="113104009/mod01lec03.mp4">Lecture-03-Concept of biocompatibility, host response, structure-property of biological cell</option>
      
      <option  value="113104009/mod01lec04.mp4">Lecture-04-Structure and properties of cells, protein and cellular adaptation process</option>
      
      <option  value="113104009/mod01lec05.mp4">Lecture-05-Cell  I</option>
      
      <option  value="113104009/mod01lec06.mp4">Lecture-06-Cell  II</option>
      
      <option  value="113104009/mod01lec07.mp4">Lecture-07-Cell Migration and Cell Division and cell death</option>
      
      <option  value="113104009/mod01lec08.mp4">Lecture-08-Cell Differentiation and Cell Death</option>
      
      <option  value="113104009/mod01lec09.mp4">Lecture-09-Cell Apoptosis- I</option>
      
      <option  value="113104009/mod01lec10.mp4">Lecture-10-Cell Apoptosis- II</option>
      
      <option  value="113104009/mod01lec11.mp4">Lecture-11-Structure and properties of Protein; cell - material interaction</option>
      
      <option  value="113104009/mod01lec12.mp4">Lecture-12-Assessment of biocompatibility of biomaterials</option>
      
      <option  value="113104009/mod01lec13.mp4">Lecture-13-Biological testing (hemocompatibility, tribological testing)</option>
      
      <option  value="113104009/mod01lec14.mp4">Lecture-14-Structure and properties of bone as well as in vivo testing and histocompatibility assessment.  </option>
      
      <option  value="113104009/mod01lec15.mp4">Lecture-15-Important biometallic alloys</option>
      
      <option  value="113104009/mod01lec16.mp4">Lecture-16-Ti Alloy</option>
      
      <option  value="113104009/mod01lec17.mp4">Lecture-17-Co-Cr-Mo alloys</option>
      
      <option  value="113104009/mod01lec18.mp4">Lecture-18-Bioceramics</option>
      
      <option  value="113104009/mod01lec19.mp4">Lecture-19-Processing of Bioceramics</option>
      
      <option  value="113104009/mod01lec20.mp4">Lecture-20-Ceramics, Bioceramics and Glasses</option>
      
      <option  value="113104009/mod01lec21.mp4">Lecture-21-Sintering and mechanical properties of ceramics.</option>
      
      <option  value="113104009/mod01lec22.mp4">Lecture-22-Fracture and toughening of ceramic composites</option>
      
      <option  value="113104009/mod01lec23.mp4">Lecture-23-Development of based bioceramic composites for hard tissue replacement </option>
      
      <option  value="113104009/mod01lec24.mp4">Lecture-24-Alternative phosphate materials, based composites with bactericidal property and glass ceramics for dental restoration </option>
      
      <option  value="113104009/mod01lec25.mp4">Lecture-25-Electrostatic Spraying of UHMWPE-HA-CNT composites</option>
      
      <option  value="113104009/mod01lec26.mp4">Lecture-26-Thin Films and Coatings</option>
      
      <option  value="113104009/mod01lec27.mp4">Lecture-27-hermal Spray Coatings</option>
      
      <option  value="113104009/mod01lec28.mp4">Lecture-28-Biocompatibility of plasma sprayed CNT reinforced Hydroxyapatite biocomposite coatings</option>
      
      <option  value="113104009/mod01lec29.mp4">Lecture-29-Biocompatibility of Alumina and CNT reinforced Hydroxyapatite</option>
      
      <option  value="113104009/mod01lec30.mp4">Lecture-30-Glass-ceramics for dental restoration applications</option>
      
      <option  value="113104009/mod01lec31.mp4">Lecture-31-Structure and properties of polymers</option>
      
      <option  value="113104009/mod01lec32.mp4">Lecture-32-Biodegradable polymers (Importance)</option>
      
      <option  value="113104009/mod01lec33.mp4">Lecture-33-Biodegradable polymers (Types)</option>
      
      <option  value="113104009/mod01lec34.mp4">Lecture-34-Mechanisms of Bioerosion</option>
      
      <option  value="113104009/mod01lec35.mp4">Lecture-35-External field and  material interaction </option>
      
      <option  value="113104009/mod01lec36.mp4">Lecture-36-Tissue Engineering and wound healing</option>
      
      <option  value="113104009/mod01lec37.mp4">Lecture-37-Understanding Design Concepts of Bio-implants</option>
      
      <option  value="113104009/mod01lec38.mp4">Lecture-38-Understanding Design Concepts of Dental-implants</option>
      
      <option  value="113104009/mod01lec39.mp4">Lecture-39-Understanding Design Concepts of Orthopedic-implant</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104010</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Materials and Energy balance in Metallurgical Processes</strong></td>
	<td><strong>Prof. Satish Ch. Koria </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104010/mod01lec01.mp4">Lecture-01_Introduction to Course</option>
      
      <option  value="113104010/mod01lec02.mp4">Lecture-02_Measurement of Quantities</option>
      
      <option  value="113104010/mod01lec03.mp4">Lecture-03_Exercises on Measurement of Quantities, Introduction to Stoichiometry</option>
      
      <option  value="113104010/mod01lec04.mp4">Lecture-04_Stoichiometry Concept and Exercise</option>
      
      <option  value="113104010/mod01lec05.mp4">Lecture-05_Exercise on Stoichiometry and Introduction to Thermochemistry</option>
      
      <option  value="113104010/mod01lec06.mp4">Lecture-06_Thermochemistry</option>
      
      <option  value="113104010/mod01lec07.mp4">Lecture-07_Exercise on Thermochemistry & Frequently Asked Questions</option>
      
      <option  value="113104010/mod01lec08.mp4">Lecture-08_ Errors in Measurements</option>
      
      <option  value="113104010/mod01lec09.mp4">Lecture-09_Basics of Materials & Energy Balance</option>
      
      <option  value="113104010/mod01lec10.mp4">Lecture-10_ Introduction to Mineral Beneficiation</option>
      
      <option  value="113104010/mod01lec11.mp4">Lecture-11_Materials Balance in Mineral Processing and Faq</option>
      
      <option  value="113104010/mod01lec12.mp4">Lecture-12_ Exercises in Mineral Processing</option>
      
      <option  value="113104010/mod01lec13.mp4">Lecture-13_Calcination Concepts & Exercises</option>
      
      <option  value="113104010/mod01lec14.mp4">Lecture-14_Pyromet ExtractionUnit Processes</option>
      
      <option  value="113104010/mod01lec15.mp4">Lecture-15_Predominance Area Diagram</option>
      
      <option  value="113104010/mod01lec16.mp4">Lecture-16_Material Balance in Roasting;illustration</option>
      
      <option  value="113104010/mod01lec17.mp4">Lecture-17_Heat Balance in Roasting illustration</option>
      
      <option  value="113104010/mod01lec18.mp4">Lecture-18_Exersises on Roasting</option>
      
      <option  value="113104010/mod01lec19.mp4">Lecture-19_Exercises on Roasting</option>
      
      <option  value="113104010/mod01lec20.mp4">Lecture-20_Smelting Matte Smelting</option>
      
      <option  value="113104010/mod01lec21.mp4">Lecture-21_Exercise-I Matte Smelting</option>
      
      <option  value="113104010/mod01lec22.mp4">Lecture-22_Exercise-II Matte Smelting</option>
      
      <option  value="113104010/mod01lec23.mp4">Lecture-23_Reduction Smelting</option>
      
      <option  value="113104010/mod01lec24.mp4"> Lecture-24_Lead Smelting Material Balance</option>
      
      <option  value="113104010/mod01lec25.mp4">Lecture-25_Imperial Smelting Process</option>
      
      <option  value="113104010/mod01lec26.mp4">Lecture-26_Introduction to Ironmaking</option>
      
      <option  value="113104010/mod01lec27.mp4">Lecture-27_Coke Making</option>
      
      <option  value="113104010/mod01lec28.mp4">Lecture-28_Ironmaking Fundamentals</option>
      
      <option  value="113104010/mod01lec29.mp4">Lecture-29_Material & Heat Balance in Ironmaking-I</option>
      
      <option  value="113104010/mod01lec30.mp4">Lecture-30_Material & Heat Balance in Ironmaking-II</option>
      
      <option  value="113104010/mod01lec31.mp4"> Lecture-31_RIST Diagram-I</option>
      
      <option  value="113104010/mod01lec32.mp4">Lecture-32_RIST Diagram-II</option>
      
      <option  value="113104010/mod01lec33.mp4">Lecture-33_Concepts in Converting</option>
      
      <option  value="113104010/mod01lec34.mp4">Lecture-34_Exercise in Converting</option>
      
      <option  value="113104010/mod01lec35.mp4">Lecture-35_Additional Topics-I Melting in Cupola</option>
      
      <option  value="113104010/mod01lec36.mp4">Lecture-36_Additional Topics-II Gasification</option>
      
      <option  value="113104010/mod01lec37.mp4">Lecture-37_Additional topic-III Material Balance in Gasification</option>
      
      <option  value="113104010/mod01lec38.mp4">Lecture-38_Additional Topics-IV Industrial Furnaces</option>
      
      <option  value="113104010/mod01lec39.mp4">Lecture-39_Energy Balance in Industrial Furnaces</option>
      
      <option  value="113104010/mod01lec40.mp4">Lecture-40_Thoughts on Application of Energy Balance</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104013</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Steel Making</strong></td>
	<td><strong>Prof. Dipak Mazumdar,Prof. Satish Ch. Koria </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104013/mod01lec01.mp4">Lecture-01</option>
      
      <option  value="113104013/mod01lec02.mp4">Lecture-02</option>
      
      <option  value="113104013/mod01lec03.mp4">Lecture-03</option>
      
      <option  value="113104013/mod01lec04.mp4">Lecture-04</option>
      
      <option  value="113104013/mod01lec05.mp4">Lecture-05</option>
      
      <option  value="113104013/mod01lec06.mp4">Lecture-06</option>
      
      <option  value="113104013/mod01lec07.mp4">Lecture-07</option>

      
      <option  value="113104013/mod01lec08.mp4">Lecture-08</option>
      
      <option  value="113104013/mod01lec09.mp4">Lecture-09</option>
      
      <option  value="113104013/mod01lec10.mp4">Lecture-10</option>
      
      <option  value="113104013/mod01lec11.mp4">Lecture-11</option>
      
      <option  value="113104013/mod01lec12.mp4">Lecture-12</option>
      
      <option  value="113104013/mod01lec13.mp4">Lecture-13</option>
      
      <option  value="113104013/mod01lec14.mp4">Lecture-14</option>
      
      <option  value="113104013/mod01lec15.mp4">Lecture-15</option>
      
      <option  value="113104013/mod01lec16.mp4">Lecture-16</option>
      
      <option  value="113104013/mod01lec17.mp4">Lecture-17</option>
      
      <option  value="113104013/mod01lec18.mp4">Lecture-18</option>
      
      <option  value="113104013/mod01lec19.mp4">Lecture-19</option>
      
      <option  value="113104013/mod01lec20.mp4">Lecture-20</option>
      
      <option  value="113104013/mod01lec21.mp4">Lecture-21</option>
      
      <option  value="113104013/mod01lec22.mp4">Lecture-22</option>
      
      <option  value="113104013/mod01lec23.mp4">Lecture-23</option>
      
      <option  value="113104013/mod01lec24.mp4">Lecture-24</option>
      
      <option  value="113104013/mod01lec25.mp4">Lecture-25</option>
      
      <option  value="113104013/mod01lec26.mp4">Lecture-26</option>
      
      <option  value="113104013/mod01lec27.mp4">Lecture-27</option>
      
      <option  value="113104013/mod01lec28.mp4">Lecture-28</option>
      
      <option  value="113104013/mod01lec29.mp4">Lecture-29</option>
      
      <option  value="113104013/mod01lec30.mp4">Lecture-30</option>
      
      <option  value="113104013/mod01lec31.mp4">Lecture-31</option>
      
      <option  value="113104013/mod01lec32.mp4">Lecture-32</option>
      
      <option  value="113104013/mod01lec33.mp4">Lecture-33</option>
      
      <option  value="113104013/mod01lec34.mp4">Lecture-34</option>
      
      <option  value="113104013/mod01lec35.mp4">Lecture-35</option>
      
      <option  value="113104013/mod01lec36.mp4">Lecture-36</option>
      
      <option  value="113104013/mod01lec37.mp4">Lecture-37</option>
      
      <option  value="113104013/mod01lec38.mp4">Lecture-38</option>
      
      <option  value="113104013/mod01lec39.mp4">Lecture-39</option>
      
      <option  value="113104013/mod01lec40.mp4">Lecture-40</option>
      
      <option  value="113104013/mod01lec41.mp4">Lecture-41</option>
      
      <option  value="113104013/mod01lec42.mp4">Lecture-42</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113104058</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Fuel,furnace and Refractory</strong></td>
	<td><strong>Prof. Satish Ch. Koria </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104058/lecture1/main.html">Energy and Environment</option>
      
      <option  value="113104058/lecture2/2_1.htm">Characterisation of Fuels</option>
      
      <option  value="113104058/lecture3/3_1.htm">Exercises of analysis and calorific value</option>
      
      <option  value="113104058/lecture4/4_1.htm">Production of secondary fuel</option>
      
      <option  value="113104058/lecture5/5_1.htm">Material balance in Coke making</option>
      
      <option  value="113104058/lecture6/6_1.htm">Heat balance in Coke oven and clean Development Mechanism</option>
      
      <option  value="113104058/lecture7/7_1.htm">Production of Gaseous Fuel</option>
      
      <option  value="113104058/lecture8/8_1.htm">Gasification: Material and Heat Balance</option>
      
      <option  value="113104058/lecture9/9_1.htm">Principles of combustion</option>
      
      <option  value="113104058/lecture10/10_1.htm">Material balance in combustion</option>
      
      <option  value="113104058/lecture11/11_1.html">Principles of Combustion-III</option>
      
      <option  value="113104058/lecture12/12_1.html">Flame Temperature</option>
      
      <option  value="113104058/lecture13/13_1.html">Flame Temperature 1</option>
      
      <option  value="113104058/lecture14/14_1.htm">Refractory Materials</option>
      
      <option  value="113104058/lecture15/15_1.htm">Application of Refractory Materials</option>
      
      <option  value="113104058/lecture16/16_1.htm">Furnace: Type and classification</option>
      
      <option  value="113104058/lecture17/17_1.htm">Heat Utilization in Furnaces</option>
      
      <option  value="113104058/lecture18/18_1.htm">Energy flow diagram and fuel consumption</option>
      
      <option  value="113104058/lecture19/19_1.htm">Heat recovery</option>
      
      <option  value="113104058/lecture20/20_1.htm">Exercises on heat recovery</option>
      
      <option  value="113104058/lecture21/21_1.htm">Transport Phenomena in Furnaces: Fluid Flow</option>
      
      <option  value="113104058/lecture22/22_1.htm">Mechanical Energy Balance</option>
      
      <option  value="113104058/lecture23/23_1.htm">Flow meter Design</option>
      
      <option  value="113104058/lecture24/24_1.htm">Design of flow meters</option>
      
      <option  value="113104058/lecture25/25_1.htm">Design of stack</option>
      
      <option  value="113104058/lecture26/26_1.htm">Exerises on Fluid Flow</option>
      
      <option  value="113104058/lecture27/27_1.htm">Principles of Burner Design</option>
      
      <option  value="113104058/lecture28/28_1.htm">Basics of Heat Transfer</option>
      
      <option  value="113104058/lecture29/29_1.htm">Refractory Design in furnaces</option>
      
      <option  value="113104058/lecture30/30_1.htm">Refractory design calculations</option>
      
      <option  value="113104058/lecture31/31_1.htm">Refractory and gas radiation</option>
      
      <option  value="113104058/lecture32/32_1.htm">Steady state heat flow in furnaces and heat exchangers</option>
      
      <option  value="113104058/lecture33/33_1.htm">Heat flow in furnaces</option>
      
      <option  value="113104058/lecture34/34_1.htm">Heat flow in furnaces and exchangers</option>
      
      <option  value="113104058/lecture35/35_1.htm">Atmosphere in Furnaces</option>
      
      <option  value="113104058/lecture36/36_1.htm">Temperatue Measurements</option>
      
      <option  value="113104058/lecture37/37_1.htm">Temperature Measurement: Radiation Pyrometry</option>
      
      <option  value="113104058/lecture38/38_1.htm">Electric Resistance Heating</option>
      
      <option  value="113104058/lecture39/39_1.htm">Furnace efficiency and carbon-credit</option>
      
      <option  value="113104058/lecture40/40_1.htm">Illustration on carbon credit and efficiency</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113104059</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Steel Making</strong></td>
	<td><strong>Prof. Satish Ch. Koria </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104059/lecture1/main.html">Types of steels, History of modern steelmaking and Indian scenario</option>
      
      <option  value="113104059/lecture2/2_1.htm">Modern steelmaking</option>
      
      <option  value="113104059/lecture3/3_1.htm">Science base of Steelmaking</option>
      
      <option  value="113104059/lecture4/4_1.htm">Slag in Steelmaking</option>
      
      <option  value="113104059/lecture5/5_1.htm">Physico-chemical properties of slag</option>
      
      <option  value="113104059/lecture6/6_1.htm">Steel Making Reactions: Oxidation of Iron and Silicon</option>
      
      <option  value="113104059/lecture7/7_1.htm">Oxidation of Manganese and Carbon</option>
      
      <option  value="113104059/lecture8/8_1.htm">Dephosphorization Reaction</option>
      
      <option  value="113104059/lecture9/9_1.htm">Refractory Materials</option>
      
      <option  value="113104059/lecture10/10_1.htm">Refractory in steelmaking</option>
      
      <option  value="113104059/lecture11/11_1.html">Converter steelmaking</option>
      
      <option  value="113104059/lecture12/12_1.html">Converter Steelmaking Practice & combined blowing</option>
      
      <option  value="113104059/lecture13/13_1.html">Fundamentals of Converter Steelmaking Technology</option>
      
      <option  value="113104059/lecture14/14_1.htm">Modern trends in BOF steelmaking</option>
      
      <option  value="113104059/lecture15/15_1.htm">Electric Furnace Steelmaking</option>
      
      <option  value="113104059/lecture16/16_1.htm">Development in EAF Steelmaking</option>
      
      <option  value="113104059/lecture17/17_1.htm">Alternative Charge Materials in EAF</option>
      
      <option  value="113104059/lecture18/18_1.htm">Stainless steel making</option>
      
      <option  value="113104059/lecture19/19_1.htm">Emerging Steelmaking Technologies</option>
      
      <option  value="113104059/lecture20/20_1.htm">Process Control BOF Steelmaking</option>
      
      <option  value="113104059/lecture21/21_1.htm">Evolution of ladle Treatment and Requirements </option>
      
      <option  value="113104059/lecture22/22_1.htm">Synthetic slag practice </option>
      
      <option  value="113104059/lecture23/23_1.htm">Injection ladle metallurgy </option>
      
      <option  value="113104059/lecture24/24_1.htm">Principles of Deoxidation </option>
      
      <option  value="113104059/lecture25/25_1.htm">Principles of degassing </option>
      
      <option  value="113104059/lecture26/26_1.htm">Degassing Practice</option>
      
      <option  value="113104059/lecture27/27_1.htm">Clean Steel</option>
      
      <option  value="113104059/lecture28/28_1.htm">inclusion sources and control</option>
      
      <option  value="113104059/lecture29/29_1.htm">inclusion Engineering</option>
      
      <option  value="113104059/lecture30/30_1.htm">Exercise in ladle metallurgy</option>
      
      <option  value="113104059/lecture31/31_1.htm">Principles of solidification of steel</option>
      
      <option  value="113104059/lecture32/32_1.htm">Ingot casting</option>
      
      <option  value="113104059/lecture33/33_1.htm">continuous casting of steel</option>
      
      <option  value="113104059/lecture34/34_1.htm">Advances in Continuous Casting of Steel</option>
      
      <option  value="113104059/lecture35/35_1.htm">Final Finishing Operations</option>
      
      <option  value="113104059/lecture36/36_1.htm">Heat treatment</option>
      
      <option  value="113104059/lecture37/37_1.htm">Deformation Processing</option>
      
      <option  value="113104059/lecture38/38_1.htm">Modeling of steelmaking processes </option>
      
      <option  value="113104059/lecture39/39_1.htm">illustration of physical modeling</option>
      
      <option  value="113104059/lecture40/40_1.htm">Exercises on steelmaking </option>
      
      <option  value="113104059/lecture41/41_1.htm">Status of Steelmaking in India</option>
      
      <option  value="113104059/lecture42/42_1.htm">Self Assessment questions</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113104060</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Materials and Heat Balance in Metallurgical Processes</strong></td>
	<td><strong>Prof. Satish Ch. Koria </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104060/lecture1/main.html">Introduction</option>
      
      <option  value="113104060/lecture2/2_1.htm">Measurement of quantities</option>
      
      <option  value="113104060/lecture3/3_1.htm">Exercises on measurement of quantities </option>
      
      <option  value="113104060/lecture4/4_1.htm">Stoichiometry, concept </option>
      
      <option  value="113104060/lecture5/5_1.htm">Eexercises on stoichiometry</option>
      
      <option  value="113104060/lecture6/6_1.htm">Thermochemistry</option>
      
      <option  value="113104060/lecture7/7_1.htm">Thermochemistry: Illustration</option>
      
      <option  value="113104060/lecture8/8_1.htm">Thermo chemistry applications in metal extraction</option>
      
      <option  value="113104060/lecture9/9_1.htm">Energy balance and metal extraction</option>
      
      <option  value="113104060/lecture10/10_1.htm">Mineral Beneficiation</option>
      
      <option  value="113104060/lecture11/11_1.html">Material balance in mineral processing</option>
      
      <option  value="113104060/lecture12/12_1.html">Exercises in mineral processing</option>
      
      <option  value="113104060/lecture13/13_1.html">Calcination</option>
      
      <option  value="113104060/lecture14/14_1.htm">Pyro metallurgical extraction (Roasting)</option>
      
      <option  value="113104060/lecture15/15_1.htm">Thermodynamics of roasting</option>
      
      <option  value="113104060/lecture16/16_1.htm">Material balance in roasting</option>
      
      <option  value="113104060/lecture17/17_1.htm">Basics of heat balance in roasting</option>
      
      <option  value="113104060/lecture18/18_1.htm">Material and heat balance in roasting of chalcopyrite ore </option>
      
      <option  value="113104060/lecture19/19_1.htm">Roasting of zinc and lead concentrate</option>
      
      <option  value="113104060/lecture20/20_1.htm">Smelting </option>
      
      <option  value="113104060/lecture21/21_1.htm">Matte smelting; material balance </option>
      
      <option  value="113104060/lecture22/22_1.htm">Heat balance in matte smelting</option>
      
      <option  value="113104060/lecture23/23_1.htm">Reduction smelting </option>
      
      <option  value="113104060/lecture24/24_1.htm">Exercises on lead smelting </option>
      
      <option  value="113104060/lecture25/25_1.htm">Matreial balance in imperial smelting process</option>
      
      <option  value="113104060/lecture26/26_1.htm">Iron making in blast furnace</option>
      
      <option  value="113104060/lecture27/27_1.htm">Basics of ironmaking</option>
      
      <option  value="113104060/lecture28/28_1.htm">Materials Balance in Iron making</option>
      
      <option  value="113104060/lecture29/29_1.htm">Exercises in material balance in Iron-making</option>
      
      <option  value="113104060/lecture30/30_1.htm">Heat balance in iron-making</option>
      
      <option  value="113104060/lecture31/31_1.htm">Blast furnace stoichiometry �I</option>
      
      <option  value="113104060/lecture32/32_1.htm">blast furnace stoichiomelry�II</option>
      
      <option  value="113104060/lecture33/33_1.htm">Converting</option>
      
      <option  value="113104060/lecture34/34_1.htm">Material and heat balance in converting</option>
      
      <option  value="113104060/lecture35/35_1.htm">Material balance in cupola</option>
      
      <option  value="113104060/lecture36/36_1.htm">Production of Gaseous fuel</option>
      
      <option  value="113104060/lecture37/37_1.htm">Gassification material and heat balance</option>
      
      <option  value="113104060/lecture38/38_1.htm">Industrial Furnaces</option>
      
      <option  value="113104060/lecture39/39_1.htm">Industrial furnaces1</option>
      
      <option  value="113104060/lecture40/40_1.htm">Thoughts on energy balance</option>
      
      <option  value="113104060/lecture41/41_1.htm">Self evaluation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104061</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Environmental Degradation of Materials</strong></td>
	<td><strong>Dr. Kallol Mondal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113104061/mod01lec01.mp4">Lecture-01 Introduction, Basic definition of corrosion </option>
      
      <option  value="113104061/mod01lec02.mp4">Lecture-02 Forms of Degradation, Thermodynamics of corrosion</option>
      
      <option  value="113104061/mod01lec03.mp4">Lecture-03 Thermodynamics of corrosion</option>
      
      <option  value="113104061/mod01lec04.mp4">Lecture-04 Thermodynamics of corrosion</option>
      
      <option  value="113104061/mod01lec05.mp4">Lecture-05 Thermodynamics of corrosion, Electrochemical series, Concentration cell</option>
      
      <option  value="113104061/mod01lec06.mp4">Lecture-06 Reduction Potential series, Pourbaix diagram</option>
      
      <option  value="113104061/mod01lec07.mp4">Lecture-07 Pourbaix diagram</option>
      
      <option  value="113104061/mod01lec08.mp4">Lecture-08 Pourbaix diagram</option>
      
      <option  value="113104061/mod01lec09.mp4">Lecture-09 Pourbaix diagram, Kinetics of corrosion</option>
      
      <option  value="113104061/mod01lec10.mp4">Lecture-10 Kinetics of corrosion, Rate expression, Solved problems</option>
      
      <option  value="113104061/mod01lec11.mp4">Lecture-11 Solved problems on the corrosion rate, Exchange current density</option>
      
      <option  value="113104061/mod01lec12.mp4">Lecture-12 Exchange current density, Polarization, Activation Polarization, Tafel Equation</option>
      
      <option  value="113104061/mod01lec13.mp4">Lecture-13 Activation Polarization, Concentration Polarization</option>
      
      <option  value="113104061/mod01lec14.mp4">Lecture-14 Concentration Polarization, Mixed Potential Theory</option>
      
      <option  value="113104061/mod01lec15.mp4">Lecture-15 Mixed Potential Theory, Explanation of corrosion events on the basis of Mixed potential theory, Galvanization</option>
      
      <option  value="113104061/mod01lec16.mp4">Lecture-16 Explanation of corrosion events on the basis of Mixed potential theory, Effect of impurity, Effect of area factor</option>
      
      <option  value="113104061/mod01lec17.mp4">Lecture-17 Explanation of corrosion events on the basis of Mixed potential theory, Effect of area factor, Concentration polarization, Passivation</option>
      
      <option  value="113104061/mod01lec18.mp4">Lecture-18 Passivation and Mixed potential theory</option>
      
      <option  value="113104061/mod01lec19.mp4">Lecture-19 Passivation and Mixed potential theory</option>
      
      <option  value="113104061/mod01lec20.mp4">Lecture-20 Different corrosion protection mechanisms, electrochemical ways of protection, cathodic protection</option>
      
      <option  value="113104061/mod01lec21.mp4">Lecture-21 Cathodic and anodic  protection</option>
      
      <option  value="113104061/mod01lec22.mp4">Lecture-22 Anodic  protection, Forms of corrosion, Factors of corrosion</option>
      
      <option  value="113104061/mod01lec23.mp4">Lecture-23 Forms of corrosion, Uniform Corrosion, Galvanic corrosion</option>
      
      <option  value="113104061/mod01lec24.mp4">Lecture-24 Galvanic corrosion</option>
      
      <option  value="113104061/mod01lec25.mp4">Lecture-25 Crevice corrosion</option>
      
      <option  value="113104061/mod01lec26.mp4">Lecture-26 Crevice corrosion, Pitting corrosion</option>
      
      <option  value="113104061/mod01lec27.mp4">Lecture-27 Pitting corrosion, Intergranular corrosion</option>
      
      <option  value="113104061/mod01lec28.mp4">Lecture-28 Intergranular corrosion, Dealloying</option>
      
      <option  value="113104061/mod01lec29.mp4">Lecture-29 Dealloying, Erosion corrosion</option>
      
      <option  value="113104061/mod01lec30.mp4">Lecture-30 Erosion corrosion, Cavitation</option>
      
      <option  value="113104061/mod01lec31.mp4">Lecture-31 Cavitation, Fretting corrosion, corrosion cracking</option>
      
      <option  value="113104061/mod01lec32.mp4">Lecture-32 Stress corrosion cracking: mechanisms(dissolution controlled)</option>
      
      <option  value="113104061/mod01lec33.mp4">Lecture-33 Stress corrosion cracking: mechanisms(cleavage controlled), factors affecting SCC, hydrogen embrittlement, corrosion fatigue</option>
      
      <option  value="113104061/mod01lec34.mp4">Lecture-34 Biologically influenced corrosion, liquid metal attack</option>
      
      <option  value="113104061/mod01lec35.mp4">Lecture-35 Corrosion protection, change of materials, effect of design of component</option>
      
      <option  value="113104061/mod01lec36.mp4">Lecture-36 Corrosion protection, change of environment, Inhibitors, coatings</option>
      
      <option  value="113104061/mod01lec37.mp4">Lecture-37 Oxidation and hot corrosion, pitting Bedworth ratio, thermodynamics of oxidation</option>
      
      <option  value="113104061/mod01lec38.mp4">Lecture-38 Thermodynamics of oxidation, Ellingham diagram, oxidation kinetics and laws</option>
      
      <option  value="113104061/mod01lec39.mp4">Lecture-39 Oxide structure and Oxidation </option>
      
      <option  value="113104061/mod01lec40.mp4">Lecture-40 Hot corrosion, corrosion testing and failure analysis, linear polarization</option>
      
      <option  value="113104061/mod01lec41.mp4">Lecture-41 Degradation of composites, polymers and ceramics, corrosion and society</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113105015</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Advanced ceramics for strategic applications</strong></td>
	<td><strong>Prof. H.S. Maiti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113105015/mod01lec01.mp4">Introduction</option>
      
      <option  value="113105015/mod01lec02.mp4">Introduction (Contd.)</option>
      
      <option  value="113105015/mod01lec03.mp4">Crystal Structure</option>
      
      <option  value="113105015/mod01lec04.mp4">Crystal Structure (Contd.)</option>
      
      <option  value="113105015/mod01lec05.mp4">Crystal Structure (Contd. )</option>
      
      <option  value="113105015/mod01lec06.mp4">Crystal Structure ( Contd.)</option>
      
      <option  value="113105015/mod01lec07.mp4">Defects in crystalline solids</option>
      
      <option  value="113105015/mod01lec08.mp4">Defects in crystalline solids (Contd.)</option>
      
      <option  value="113105015/mod01lec09.mp4">Dislocation</option>
      
      <option  value="113105015/mod01lec10.mp4">Two and Three Dimensional Defects</option>
      
      <option  value="113105015/mod01lec11.mp4">Electrical Conduction in ceramics</option>
      
      <option  value="113105015/mod01lec12.mp4">Electrical Conduction in Ceramics (Contd.)</option>
      
      <option  value="113105015/mod01lec13.mp4">Electrical Conduction in Ceramics (Contd. )</option>
      
      <option  value="113105015/mod01lec14.mp4">Electrical Conduction in Ceramics ( Contd.)</option>
      
      <option  value="113105015/mod01lec15.mp4">Electrical Conduction in Ceramics ( Contd .)</option>
      
      <option  value="113105015/mod01lec16.mp4">Electrical Conduction in Ceramics  ( Contd .)</option>
      
      <option  value="113105015/mod01lec17.mp4">Electrical Phenomenon in Insulators</option>
      
      <option  value="113105015/mod01lec18.mp4">Electrical Phenomenon in Insulators (Contd.)</option>
      
      <option  value="113105015/mod01lec19.mp4">Ferroelectric , Piezoelectric and Pyroelectric Ceramics</option>
      
      <option  value="113105015/mod01lec20.mp4">Ferroelectric , Piezoelectric and Pyroelectric Ceramics (Contd.)</option>
      
      <option  value="113105015/mod01lec21.mp4">Ferroelectric , Piezoelectric and Pyroelectric Ceramics ( Contd.)</option>
      
      <option  value="113105015/mod01lec22.mp4">Ferroelectric , Piezoelectric and Pyroelectric  Ceramics ( Contd.)</option>
      
      <option  value="113105015/mod01lec23.mp4">Relaxor Ferroelectric</option>
      
      <option  value="113105015/mod01lec24.mp4">Superconductivity</option>
      
      <option  value="113105015/mod01lec25.mp4">Superconductivity (Contd.)</option>
      
      <option  value="113105015/mod01lec26.mp4">Ceramic Gas Sensor</option>
      
      <option  value="113105015/mod01lec27.mp4">Ceramic Gas Sensor (Contd.)</option>
      
      <option  value="113105015/mod01lec28.mp4">Solid Oxide Fuel Cell</option>
      
      <option  value="113105015/mod01lec29.mp4">Solid Oxide Fuel Cell (Contd.)</option>
      
      <option  value="113105015/mod01lec30.mp4">Solid Oxide Fuel Cell (Contd. )</option>
      
      <option  value="113105015/mod01lec31.mp4">Hydrogen Generation through MIEC Reactor</option>
      
      <option  value="113105015/mod01lec32.mp4">Lithium Ion Battery</option>
      
      <option  value="113105015/mod01lec33.mp4">Lithium Ion Battery (Contd.)</option>
      
      <option  value="113105015/mod01lec34.mp4">Magnetic Ceramics</option>
      
      <option  value="113105015/mod01lec35.mp4">Magnetic Ceramics (Contd.)</option>
      
      <option  value="113105015/mod01lec36.mp4">Magnetic Ceramics (Contd. )</option>
      
      <option  value="113105015/mod01lec37.mp4">Magnetic Ceramics ( Contd. )</option>
      
      <option  value="113105015/mod01lec38.mp4">Sintering of Ceramics</option>
      
      <option  value="113105015/mod01lec39.mp4">Sintering of Ceramics (Contd.)</option>
      
      <option  value="113105015/mod01lec40.mp4">Sintering of Ceramics ( Contd.)</option>
      
      <option  value="113105015/mod01lec41.mp4">Sintering of Ceramics ( Contd .)</option>
      
      <option  value="113105015/mod01lec42.mp4">Mechanical Properties of Ceramic  Materials</option>
      
      <option  value="113105015/mod01lec43.mp4">Mechanical Properties of Ceramic  Materials (Contd.)</option>
      
      <option  value="113105015/mod01lec44.mp4">Mechanical Properties of Ceramic  Materials ( Contd.)</option>
      
      <option  value="113105015/mod01lec45.mp4">Mechanical Properties of Ceramic  Materials  ( Contd.)</option>
      
      <option  value="113105015/mod01lec46.mp4">Structural Ceramics Materials</option>
      
      <option  value="113105015/mod01lec47.mp4">Bioceramics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113105021</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Non-ferrous Extractive Metallurgy</strong></td>
	<td><strong>Prof. H.S. Ray,Mr. L Pugazhenthy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113105021/mod01lec01.mp4">Brief History of Non-ferrous Metal</option>
      
      <option  value="113105021/mod01lec02.mp4">Brief History of Non-ferrous Metal (Contd.)</option>
      
      <option  value="113105021/mod01lec03.mp4">Sources of Non-ferrous Metal</option>
      
      <option  value="113105021/mod01lec04.mp4">Mineral Benefication Techniques</option>
      
      <option  value="113105021/mod01lec05.mp4">General Methods of Metal Extraction</option>
      
      <option  value="113105021/mod01lec06.mp4">Principles of Carbon Reduction</option>
      
      <option  value="113105021/mod01lec07.mp4">Principles of Hydrometalling</option>
      
      <option  value="113105021/mod01lec08.mp4">Principles of Electrometallurgy</option>
      
      <option  value="113105021/mod01lec09.mp4">Electrometallurgy (Contd.) and Temkin Model for Fused Salts</option>
      
      <option  value="113105021/mod01lec10.mp4">Refining of Metals - Chemical Methods</option>
      
      <option  value="113105021/mod01lec11.mp4">Refining of Metals - Physical Methods</option>
      
      <option  value="113105021/mod01lec12.mp4">Concluding part of Module - 4</option>
      
      <option  value="113105021/mod01lec13.mp4">Concluding part of Module - 4 (Contd.)</option>
      
      <option  value="113105021/mod01lec14.mp4">Module - 5 Extraction of Metals from Oxides, Extraction of Magnesium</option>
      
      <option  value="113105021/mod01lec15.mp4">Extraction Aluminium</option>
      
      <option  value="113105021/mod01lec16.mp4">Extraction Aluminium (Contd...1)</option>
      
      <option  value="113105021/mod01lec17.mp4">Extraction Aluminium (Contd...2)</option>
      
      <option  value="113105021/mod01lec18.mp4">Extraction Aluminium (Contd...3)</option>
      
      <option  value="113105021/mod01lec19.mp4">Extraction of Tin</option>
      
      <option  value="113105021/mod01lec20.mp4">Extraction of Ferro Alloys</option>
      
      <option  value="113105021/mod01lec21.mp4">Module - 6 Extraction of Metals from Sulphides Extraction of Copper</option>
      
      <option  value="113105021/mod01lec22.mp4">Extraction of Copper (Contd.)</option>
      
      <option  value="113105021/mod01lec23.mp4">Hydrometallurgy of Copper</option>
      
      <option  value="113105021/mod01lec24.mp4">Extraction of Lead</option>
      
      <option  value="113105021/mod01lec25.mp4">Extraction of Zinc-Imperial Smelting Process</option>
      
      <option  value="113105021/mod01lec26.mp4">Module - 7 Extraction of metals from halides, Extraction of reactor metals</option>
      
      <option  value="113105021/mod01lec27.mp4">Extraction of reactor metals (Contd...1)</option>
      
      <option  value="113105021/mod01lec28.mp4">Extraction of reactor metals (Contd...2)</option>
      
      <option  value="113105021/mod01lec29.mp4">Extraction of Titanium</option>
      
      <option  value="113105021/mod01lec30.mp4">Extraction of Precious Metals</option>
      
      <option  value="113105021/mod01lec31.mp4">Production of Secondary Metals and Treatment of Wastes</option>
      
      <option  value="113105021/mod01lec32.mp4">Energy and Environment Related Issues in Nonferrous Metals Production</option>
      
      <option  value="113105021/mod01lec33.mp4">Energy and Environment Related Issues in Nonferrous Metals Production (Contd...1)</option>
      
      <option  value="113105021/mod01lec34.mp4">Energy and Environment Related Issues in Nonferrous Metals Production (Contd...2)</option>
      
      <option  value="113105021/mod01lec35.mp4">Energy and Environment Related Issues in Nonferrous Metals Production (Contd...3)</option>
      
      <option  value="113105021/mod01lec36.mp4">Energy and Environment Related Issues in Nonferrous Metals Production (Contd...4)</option>
      
      <option  value="113105021/mod01lec37.mp4">Energy and Environment Related Issues in Nonferrous Metals Production (Contd...5)</option>
      
      <option  value="113105021/mod01lec38.mp4">Energy and Environment Related Issues in Nonferrous Metals Production (Contd...6)</option>
      
      <option  value="113105021/mod01lec39.mp4">Nonferrous Metals in India - Unleashing its true potential</option>
      
      <option  value="113105021/mod01lec40.mp4">Nonferrous Metals in India - Unleashing its true potential (Contd.)</option>
      
      <option  value="113105021/mod01lec41.mp4">Review and Summary</option>
      
      <option  value="113105021/mod01lec42.mp4">Review and Summary (Contd...1)</option>
      
      <option  value="113105021/mod01lec43.mp4">Review and Summary (Contd...2)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113105024</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Principles of Physical Metallurgy</strong></td>
	<td><strong>Prof. R.N. Ghosh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113105024/mod01lec01.mp4">Introduction</option>
      
      <option  value="113105024/mod01lec02.mp4">Atomic Bond and Crystal Structure</option>
      
      <option  value="113105024/mod01lec03.mp4">Atomic Bond and Crystal Structure (Contd...1)</option>
      
      <option  value="113105024/mod01lec04.mp4">Atomic Bond and Crystal Structure (Contd...2)</option>
      
      <option  value="113105024/mod01lec05.mp4">Experimental Tools & Techniques</option>
      
      <option  value="113105024/mod01lec06.mp4">Experimental Tools & Techniques (Contd.)</option>
      
      <option  value="113105024/mod01lec07.mp4">Solidification of Pure Metal</option>
      
      <option  value="113105024/mod01lec08.mp4">Plastic Deformation of Pure Metal</option>
      
      <option  value="113105024/mod01lec09.mp4">Plastic Deformation of Pure Metal (Contd.)</option>
      
      <option  value="113105024/mod01lec10.mp4">Crystal Defects in Metals</option>
      
      <option  value="113105024/mod01lec11.mp4">Crystal Defects in Metals (Contd...1)</option>
      
      <option  value="113105024/mod01lec12.mp4">Crystal Defects in Metals (Contd...2)</option>
      
      <option  value="113105024/mod01lec13.mp4">Crystal Defects in Metals (Contd...3)</option>
      
      <option  value="113105024/mod01lec14.mp4">Crystal Defects in Metals (Contd...4)</option>
      
      <option  value="113105024/mod01lec15.mp4">Diffusion in Solids</option>
      
      <option  value="113105024/mod01lec16.mp4">Diffusion in Solids (Contd.)</option>
      
      <option  value="113105024/mod01lec17.mp4">Numerical Examples in Diffusion</option>
      
      <option  value="113105024/mod01lec18.mp4">Solidification of Binary Alloys</option>
      
      <option  value="113105024/mod01lec19.mp4">Solidification of Binary Alloys (Contd...1)</option>
      
      <option  value="113105024/mod01lec20.mp4">Solidification of Binary Alloys (Contd...2)</option>
      
      <option  value="113105024/mod01lec21.mp4">Solidification of Binary Alloys (Contd...3)</option>
      
      <option  value="113105024/mod01lec22.mp4">Solidification of Binary Alloys (Contd...4)</option>
      
      <option  value="113105024/mod01lec23.mp4">Iron-Carbon Phase Diagram</option>
      
      <option  value="113105024/mod01lec24.mp4">Iron-Carbon Phase Diagram (Contd.)</option>
      
      <option  value="113105024/mod01lec25.mp4">Ternary Phase Diagram</option>
      
      <option  value="113105024/mod01lec26.mp4">Common Binary Alloys</option>
      
      <option  value="113105024/mod01lec27.mp4">Metal Working : Deformation Processing</option>
      
      <option  value="113105024/mod01lec28.mp4">Metal Working : Deformation Processing (Contd.)</option>
      
      <option  value="113105024/mod01lec29.mp4">Precipitation for Solid Solution</option>
      
      <option  value="113105024/mod01lec30.mp4">Precipitation for Solid Solution (Contd.)</option>
      
      <option  value="113105024/mod01lec31.mp4">Heat Treatment of Steel</option>
      
      <option  value="113105024/mod01lec32.mp4">Heat Treatment of Steel (Contd...1)</option>
      
      <option  value="113105024/mod01lec33.mp4">Heat Treatment of Steel (Contd...2)</option>
      
      <option  value="113105024/mod01lec34.mp4">Heat Treatment of Steel (Contd...3)</option>
      
      <option  value="113105024/mod01lec35.mp4">Heat Treatment of Steel (Contd...4)</option>
      
      <option  value="113105024/mod01lec36.mp4">Heat Treatment of Steel (Contd...5)</option>
      
      <option  value="113105024/mod01lec37.mp4">Surface Hardening</option>
      
      <option  value="113105024/mod01lec38.mp4">Structural Steel</option>
      
      <option  value="113105024/mod01lec39.mp4">Structural Steel (Contd.)</option>
      
      <option  value="113105024/mod01lec40.mp4">Ultra High Strength Steel</option>
      
      <option  value="113105024/mod01lec41.mp4">Preferred Orientation: Application</option>
      
      <option  value="113105024/mod01lec42.mp4">Metal Joining</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113105028</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Science and Technology of Polymers</strong></td>
	<td><strong>Prof. B. Adhikari</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113105028/mod01lec01.mp4">Basic Concepts on Polymers</option>
      
      <option  value="113105028/mod01lec02.mp4">Basic Concepts on Polymers  (Contd.)</option>
      
      <option  value="113105028/mod01lec03.mp4">Basic Concepts on  Polymers  (Contd.)</option>
      
      <option  value="113105028/mod01lec04.mp4">Polymer Raw Materials</option>
      
      <option  value="113105028/mod01lec05.mp4">Principles of Polymer Synthesis</option>
      
      <option  value="113105028/mod01lec06.mp4">Principles of  Polymer Synthesis  (Contd.)</option>
      
      <option  value="113105028/mod01lec07.mp4">Principles of Polymer  Synthesis (Contd.)</option>
      
      <option  value="113105028/mod01lec08.mp4">Principles of Polymer Synthesis  (Contd.)</option>
      
      <option  value="113105028/mod01lec09.mp4">Principles of Polymer Synthesis (Contd. )</option>
      
      <option  value="113105028/mod01lec10.mp4">Principles of  Polymer  Synthesis  (Contd.)</option>
      
      <option  value="113105028/mod01lec11.mp4">Structure and Properties of Polymers  (Contd. )</option>
      
      <option  value="113105028/mod01lec12.mp4">Structure and Properties of Polymers  (Contd.)</option>
      
      <option  value="113105028/mod01lec13.mp4">Structure and Properties of Polymers (Contd. )</option>
      
      <option  value="113105028/mod01lec14.mp4">Structure and Properties of Polymers (Contd.)</option>
      
      <option  value="113105028/mod01lec15.mp4">Polymerization Techniques</option>
      
      <option  value="113105028/mod01lec16.mp4">Polymerization Techniques  (Contd.)</option>
      
      <option  value="113105028/mod01lec17.mp4">Polymerization Techniques  (Contd. )</option>
      
      <option  value="113105028/mod01lec18.mp4">Polymer Products</option>
      
      <option  value="113105028/mod01lec19.mp4">Polymer Products (Contd.)</option>
      
      <option  value="113105028/mod01lec20.mp4">Rubber Products</option>
      
      <option  value="113105028/mod01lec21.mp4">Rubber Products (Contd.)</option>
      
      <option  value="113105028/mod01lec22.mp4">Conducting Polymers</option>
      
      <option  value="113105028/mod01lec23.mp4">Conducting Polymers (Contd.)</option>
      
      <option  value="113105028/mod01lec24.mp4">Liquid Crystalline Polymers</option>
      
      <option  value="113105028/mod01lec25.mp4">Stimuli Responsive Polymer and its application</option>
      
      <option  value="113105028/mod01lec26.mp4">Stimuli Responsive Polymer and its application (Contd.)</option>
      
      <option  value="113105028/mod01lec27.mp4">Polymeric Nanomaterials and Devices  (Contd.)</option>
      
      <option  value="113105028/mod01lec28.mp4">Polymeric Nanomaterials and  Devices  (Contd.)</option>
      
      <option  value="113105028/mod01lec29.mp4">Polymeric  Nanomaterials and  Devices  (Contd.)</option>
      
      <option  value="113105028/mod01lec30.mp4">Environmental Degradation of Polymers</option>
      
      <option  value="113105028/mod01lec31.mp4">Environmental Degradation of Polymers (Contd.)</option>
      
      <option  value="113105028/mod01lec32.mp4">Polymer Composites</option>
      
      <option  value="113105028/mod01lec33.mp4">Polymer Composites (Contd. )</option>
      
      <option  value="113105028/mod01lec34.mp4">Polymer Composites (Contd.)</option>
      
      <option  value="113105028/mod01lec35.mp4">Multicomponent Polymeric Materials</option>
      
      <option  value="113105028/mod01lec36.mp4">Multicomponent  Polymeric  Materials (Contd.)</option>
      
      <option  value="113105028/mod01lec37.mp4">Multicomponent Polymeric  Materials (Contd.)</option>
      
      <option  value="113105028/mod01lec38.mp4">Viscoelasticity</option>
      
      <option  value="113105028/mod01lec39.mp4">Engineering and Speciality Polymers</option>
      
      <option  value="113105028/mod01lec40.mp4">Engineering and Speciality Polymers (Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113105057</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Advanced Materials and Processes</strong></td>
	<td><strong>Prof. B.S. Murty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113105057/lec01.mp4">Structure of Materials Part - I</option>
      
      <option  value="113105057/lec02.mp4">Structure of Materials Part - II</option>
      
      <option  value="113105057/lec03.mp4">Nano Crystalline Materials Part - I</option>
      
      <option  value="113105057/lec04.mp4">Nano Crystalline Materials Part - II</option>
      
      <option  value="113105057/lec05.mp4">Nano Crystalline Materials Part - III</option>
      
      <option  value="113105057/lec06.mp4">Nano Crystalline Materials Part - IV</option>
      
      <option  value="113105057/lec07.mp4">Amorphous Materials Part - I</option>
      
      <option  value="113105057/lec08.mp4">Amorphous Materials Part - II</option>
      
      <option  value="113105057/lec09.mp4">Amorphous Materials Part - III</option>
      
      <option  value="113105057/lec10.mp4">Amorphous Materials Part - IV</option>
      
      <option  value="113105057/lec11.mp4">Amorphous Materials Part - V</option>
      
      <option  value="113105057/lec12.mp4">Quasicrystals Part - I</option>
      
      <option  value="113105057/lec13.mp4">Quasicrystals Part - II</option>
      
      <option  value="113105057/lec14.mp4">Nano Quasicrystals Part - I</option>
      
      <option  value="113105057/lec15.mp4">Nano Quasicrystals Part - II</option>
      
      <option  value="113105057/lec16.mp4">Rapid Solidification Processing</option>
      
      <option  value="113105057/lec17.mp4">Mechanical Alloying</option>
      
      <option  value="113105057/lec18.mp4">Advanced AI Alloys Part - I</option>
      
      <option  value="113105057/lec19.mp4">Advanced AI Alloys Part - II</option>
      
      <option  value="113105057/lec20.mp4">Advanced AI Alloys Part - III</option>
      
      <option  value="113105057/lec21.mp4">Advanced AI Alloys Part - IV and Ti Alloys</option>
      
      <option  value="113105057/lec22.mp4">Shape Memory Alloys</option>
      
      <option  value="113105057/lec23.mp4">Strengthening Mechanisms Part - I</option>
      
      <option  value="113105057/lec24.mp4">Strengthening Mechanisms Part - I</option>
      
      <option  value="113105057/lec25.mp4">Superalloys</option>
      
      <option  value="113105057/lec26.mp4">In-Situ Composites Part - I</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113106031</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Advanced Metallurgical Thermodynamics</strong></td>
	<td><strong>Prof. B.S. Murty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113106031/mod01lec01.mp4">Basic definitions</option>
      
      <option  value="113106031/mod01lec02.mp4">Free energy, Stability, equilibrium in a unary system</option>
      
      <option  value="113106031/mod01lec03.mp4">Effect of Pressure on equilibrium transformations: Clausius Clapeyron equation, phase diagram for unary system</option>
      
      <option  value="113106031/mod01lec04.mp4">Free energy of solutions, free energy-composition diagrams </option>
      
      <option  value="113106031/mod01lec05.mp4">Solution models, chemical potential</option>
      
      <option  value="113106031/mod01lec06.mp4">Phase rule, free energy-composition diagrams and phase diagrams</option>
      
      <option  value="113106031/mod01lec07.mp4">Evolution of phase diagrams</option>
      
      <option  value="113106031/mod01lec08.mp4">Evolution of phase diagrams, miscibility gap</option>
      
      <option  value="113106031/mod01lec09.mp4">T<sub>o</sub> concept, partition less solidification</option>
      
      <option  value="113106031/mod01lec10.mp4">T<sub>o</sub> concept, partition less solidification (cond...)</option>
      
      <option  value="113106031/mod01lec11.mp4">Eutectic solidification, glass formation</option>
      
      <option  value="113106031/mod01lec12.mp4">Kauzmann paradox, order of a transformation, glass forming ability</option>
      
      <option  value="113106031/mod01lec13.mp4">Eutectic solidification, coupled growth, heterogeneous nucleation</option>
      
      <option  value="113106031/mod01lec14.mp4">Peritectic solidification, metastable phase diagrams</option>
      
      <option  value="113106031/mod01lec15.mp4">Errors in drawing phase diagrams, Fe-C vs. Fe-Fe<sub>3</sub>C phase diagram</option>
      
      <option  value="113106031/mod01lec16.mp4">Free energy of undercooled liquid, shape of nucleus</option>
      
      <option  value="113106031/mod01lec17.mp4">Solid state phase transformations - Precipitation</option>
      
      <option  value="113106031/mod01lec18.mp4">Precipitation</option>
      
      <option  value="113106031/mod01lec19.mp4">Precipitation � quasicrystals</option>
      
      <option  value="113106031/mod01lec20.mp4">Precipitate coarsening, stability of a phase, spinodal decomposition</option>
      
      <option  value="113106031/mod01lec21.mp4">Spinodal decomposition</option>
      
      <option  value="113106031/mod01lec22.mp4">Eutectioid reaction</option>
      
      <option  value="113106031/mod01lec23.mp4">Eutectioid reaction (cond...)</option>
      
      <option  value="113106031/mod01lec24.mp4">Bainitic transformation</option>
      
      <option  value="113106031/mod01lec25.mp4">Kinetics of eutectoid transformations</option>
      
      <option  value="113106031/mod01lec26.mp4">Martensitic Transformation</option>
      
      <option  value="113106031/mod01lec27.mp4">Martensitic transformation, order-disorder transformation</option>
      
      <option  value="113106031/mod01lec28.mp4">Miscibility gap in phase diagrams</option>
      
      <option  value="113106031/mod01lec29.mp4">Phase diagram calculations</option>
      
      <option  value="113106031/mod01lec30.mp4">Thermodynamics of heterogeneous systems</option>
      
      <option  value="113106031/mod01lec31.mp4">Thermodynamics of heterogeneous systems (cond...)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113106032</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Introduction to Materials Science and Engineering</strong></td>
	<td><strong>Dr. Ranjit Bauri</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113106032/1 - Intro & History.pdf">1 - Introduction & History</option>
      
      <option  value="113106032/2 - History.pdf">2 - History</option>
      
      <option  value="113106032/3 - Atomic structure.pdf">3 - Atomic structure</option>
      
      <option  value="113106032/4 - Crystal structure.pdf">4 - Crystal structure</option>
      
      <option  value="113106032/5 - Polycrystalline.pdf">5 - Polycrystalline</option>
      
      <option  value="113106032/6 - Lattice defects.pdf">6 - Lattice defects</option>
      
      <option  value="113106032/7 - Diffusion.pdf">7 - Diffusion</option>
      
      <option  value="113106032/8 - Solid Solutions.pdf">8 - Solid Solutions</option>
      
      <option  value="113106032/9 - Phase diagrams.pdf">9 - Phase diagrams</option>
      
      <option  value="113106032/10 - Phase Transformation.pdf">10 - Phase Transformation</option>
      
      <option  value="113106032/11 - Strengthening Mechanisms.pdf">11 - Strengthening Mechanisms</option>
      
      <option  value="113106032/12 - Mechanical Properties.pdf">12 - Mechanical Properties</option>
      
      <option  value="113106032/13 - Thermal Property.pdf">13 - Thermal Property</option>
      
      <option  value="113106032/14 - Electrical Properties.pdf">14 - Electrical Properties</option>
      
      <option  value="113106032/15 - Magnetic Properties.pdf">15 - Magnetic Properties</option>
      
      <option  value="113106032/16 - Properties and Applications of Materials.pdf">16 - Properties and Applications of Materials</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113106039</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Physics of Materials</strong></td>
	<td><strong>Dr. Prathap Haridoss</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113106039/mod01lec01.mp4">Introduction</option>
      
      <option  value="113106039/mod01lec02.mp4">Properties of Materials</option>
      
      <option  value="113106039/mod01lec03.mp4">Thermal Expansion</option>
      
      <option  value="113106039/mod01lec04.mp4">Measuring Electrical Conductivity: DC and AC</option>
      
      <option  value="113106039/mod01lec05.mp4">Free Electron Gas</option>
      
      <option  value="113106039/mod01lec06.mp4">The Ideal Gas</option>
      
      <option  value="113106039/mod01lec07.mp4">Drude Model: Electrical Conductivity</option>
      
      <option  value="113106039/mod01lec08.mp4">Drude Model: Thermal Conductivity</option>
      
      <option  value="113106039/mod01lec09.mp4">Drude Model: Successes and Limitations</option>
      
      <option  value="113106039/mod01lec10.mp4">Drude Model: Source of Shortcomings</option>
      
      <option  value="113106039/mod01lec11.mp4">Large Systems and Statistical Mechanics</option>
      
      <option  value="113106039/mod01lec12.mp4">Maxwell Boltzmann Statistics</option>
      
      <option  value="113106039/mod02lec13.mp4">Classical Particles and Quantum Particles</option>
      
      <option  value="113106039/mod02lec14.mp4">History of Quantum Mechanics � 1</option>
      
      <option  value="113106039/mod02lec15.mp4">History of Quantum Mechanics � 2</option>
      
      <option  value="113106039/mod02lec16.mp4">Introduction to Drude Sommerfeld model</option>
      
      <option  value="113106039/mod02lec17.mp4">Fermi-Dirac Statistics: Part 1</option>
      
      <option  value="113106039/mod02lec18.mp4">Fermi-Dirac Statistics: Part 2</option>
      
      <option  value="113106039/mod02lec19.mp4">Features of the Fermi Dirac Distribution Function</option>
      
      <option  value="113106039/mod02lec20.mp4">Maxwell-Boltzmann Distribution Vs Fermi-Dirac Distribution</option>
      
      <option  value="113106039/mod02lec21.mp4">Anisotropy and Periodic Potential in a Solid </option>
      
      <option  value="113106039/mod02lec22.mp4">Confinement and Quantization: Part 1</option>
      
      <option  value="113106039/mod02lec23.mp4">Confinement and Quantization: Part 2</option>
      
      <option  value="113106039/mod02lec24.mp4">Density of States</option>
      
      <option  value="113106039/mod02lec25.mp4">Fermi Energy, Fermi Surface, Fermi Temperature</option>
      
      <option  value="113106039/mod02lec26.mp4">Electronic Contribution to Specific Heat at Constant Volume</option>
      
      <option  value="113106039/mod03lec27.mp4">Reciprocal Space � 1: Introduction to Reciprocal Space </option>
      
      <option  value="113106039/mod03lec28.mp4">Reciprocal Space � 2: Condition for Diffraction</option>
      
      <option  value="113106039/mod03lec29.mp4">Reciprocal Space � 3: Ewald sphere, Simple Cubic, FCC and BCC in Reciprocal Space</option>
      
      <option  value="113106039/mod03lec30.mp4">Wigner Seitz Cell and Introduction to Brillouin Zones</option>
      
      <option  value="113106039/mod03lec31.mp4">Brillouin Zones, Diffraction, and Allowed Energy Levels</option>
      
      <option  value="113106039/mod03lec32.mp4">E Vs k, Brillouin Zones and the Origin of Bands</option>
      
      <option  value="113106039/mod03lec33.mp4">Calculating Allowed Energy Bands and Forbidden Band Gaps</option>
      
      <option  value="113106039/mod03lec34.mp4">Bands; Free Electron Approximation, Tight Binding Approximation</option>
      
      <option  value="113106039/mod04lec35.mp4">Semiconductors</option>
      
      <option  value="113106039/mod04lec36.mp4">Magnetic Properties</option>
      
      <option  value="113106039/mod04lec37.mp4">Electron Compounds; Phonons, Optoelectronic Materials</option>
      
      <option  value="113106039/mod04lec38.mp4">Superconductivity</option>
      
      <option  value="113106039/mod04lec39.mp4">Bose-Einstein Statistics</option>
      
      <option  value="113106039/mod04lec40.mp4">Physics of Nano Scale Materials; Course Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113106040</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Physics of Materials</strong></td>
	<td><strong>Dr. Prathap Haridoss</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113106040/Lecture1.pdf">1 - Introduction</option>
      
      <option  value="113106040/Lecture2.pdf">2 - Properties of Materials</option>
      
      <option  value="113106040/Lecture3.pdf">3 - Thermal Expansion</option>
      
      <option  value="113106040/Lecture4.pdf">4 - Measuring Electrical Conductivity: DC and AC</option>
      
      <option  value="113106040/Lecture5.pdf">5 - Free Electron Gas</option>
      
      <option  value="113106040/Lecture6.pdf">6 - The Ideal Gas</option>
      
      <option  value="113106040/Lecture7.pdf">7 - Drude Model: Electrical Conductivity</option>
      
      <option  value="113106040/Lecture8.pdf">8 - Drude Model: Thermal Conductivity</option>
      
      <option  value="113106040/Lecture9.pdf">9 - Drude Model: Successes and Limitations</option>
      
      <option  value="113106040/Lecture10.pdf">10 - Drude Model: Source of Shortcomings</option>
      
      <option  value="113106040/Lecture11.pdf">11 - Large Systems and Statistical Mechanics</option>
      
      <option  value="113106040/Lecture12.pdf">12 - Maxwell Boltzmann Statistics</option>
      
      <option  value="113106040/Lecture13.pdf">13 - Classical Particles and Quantum Particles</option>
      
      <option  value="113106040/Lecture14.pdf">14 - History of Quantum Mechanics � 1</option>
      
      <option  value="113106040/Lecture15.pdf">15 - History of Quantum Mechanics � 2</option>
      
      <option  value="113106040/Lecture16.pdf">16 - Introduction to Drude Sommerfeld model</option>
      
      <option  value="113106040/Lecture17.pdf">17 - Fermi-Dirac Statistics: Part 1</option>
      
      <option  value="113106040/Lecture18.pdf">18 - Fermi-Dirac Statistics: Part 2</option>
      
      <option  value="113106040/Lecture19.pdf">19 - Features of the Fermi Dirac Distribution Function</option>
      
      <option  value="113106040/Lecture20.pdf">20 - Maxwell-Boltzmann Distribution Vs Fermi-Dirac Distribution</option>
      
      <option  value="113106040/Lecture21.pdf">21 - Anisotropy and Periodic Potential in a Solid</option>
      
      <option  value="113106040/Lecture22.pdf">22 - Confinement and Quantization: Part 1</option>
      
      <option  value="113106040/Lecture23.pdf">23 - Confinement and Quantization: Part 2</option>
      
      <option  value="113106040/Lecture24.pdf">24 - Density of States</option>
      
      <option  value="113106040/Lecture25.pdf">25 - Fermi Energy, Fermi Surface, Fermi Temperature</option>
      
      <option  value="113106040/Lecture26.pdf">26 - Electronic Contribution to Specific Heat at Constant Volume</option>
      
      <option  value="113106040/Lecture27.pdf">27 - Reciprocal Space � 1: Introduction to Reciprocal Space </option>
      
      <option  value="113106040/Lecture28.pdf">28 - Reciprocal Space � 2: Condition for Diffraction</option>
      
      <option  value="113106040/Lecture29.pdf">29 - Reciprocal Space � 3: Ewald sphere, Simple Cubic, FCC and BCC in Reciprocal Space </option>
      
      <option  value="113106040/Lecture30.pdf">30 - Wigner Seitz Cell and Introduction to Brillouin Zones</option>
      
      <option  value="113106040/Lecture31.pdf">31 - Brillouin Zones, Diffraction, and Allowed Energy Levels</option>
      
      <option  value="113106040/Lecture32.pdf">32 - E Vs k, Brillouin Zones and the Origin of Bands</option>
      
      <option  value="113106040/Lecture33.pdf">33 - Calculating Allowed Energy Bands and Forbidden Band Gaps</option>
      
      <option  value="113106040/Lecture34.pdf">34 - Bands; Free Electron Approximation, Tight Binding Approximation</option>
      
      <option  value="113106040/Lecture35.pdf">35 - Semiconductors</option>
      
      <option  value="113106040/Lecture36.pdf">36 - Magnetic Properties</option>
      
      <option  value="113106040/Lecture37.pdf">37 - Electron Compounds; Phonons, Optoelectronic Materials</option>
      
      <option  value="113106040/Lecture38.pdf">38 - Superconductivity</option>
      
      <option  value="113106040/Lecture39.pdf">39 - Bose-Einstein Statistics</option>
      
      <option  value="113106040/Lecture40.pdf">40 - Physics of Nano Scale Materials; Course Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113108051</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Advances in Corrosion Engineering</strong></td>
	<td><strong>Prof. K.A. Natarajan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113108051/module1/lecture1.pdf">Corrosion � introduction, definitions and types</option>
      
      <option  value="113108051/module1/lecture2.pdf">Electrochemical cells-definitions and principles</option>
      
      <option  value="113108051/module1/lecture3.pdf">Potential measurements - galvanic cells, concentration cells.</option>
      
      <option  value="113108051/module1/lecture4.pdf">EMF and Galvanic series - bimetallic couples.</option>
      
      <option  value="113108051/module1/lecture5.pdf">Eh-pH diagrams � fundamental aspects.</option>
      
      <option  value="113108051/module1/lecture6.pdf">Construction of Eh � pH diagrams. Fe-H2O-O2 diagram.</option>
      
      <option  value="113108051/module1/lecture7.pdf">Copper, Aluminium and general corrosion diagrams.</option>
      
      <option  value="113108051/module2/lecture8.pdf">Electrode � solution interface � definition and types of polarization.</option>
      
      <option  value="113108051/module2/lecture9.pdf">Exchange current density � polarization relationships.</option>
      
      <option  value="113108051/module2/lecture10.pdf">Polarization techniques � corrosion rate determination.</option>
      
      <option  value="113108051/module2/lecture11.pdf">Mixed potentials � concepts and Basics</option>
      
      <option  value="113108051/module2/lecture12.pdf">Mixed potential theory � bimetallic couples</option>
      
      <option  value="113108051/module2/lecture13.pdf">Mixed potential theory � activation and diffusion controlled processes</option>
      
      <option  value="113108051/module3/lecture14.pdf">Prevention strategies � design and coatings.</option>
      
      <option  value="113108051/module3/lecture15.pdf">Prevention strategies � inhibitors and surface engineering.</option>
      
      <option  value="113108051/module3/lecture16.pdf">Cathodic protection � principles and classification</option>
      
      <option  value="113108051/module3/lecture17.pdf">: Cathodic protection � influencing factors and monitoring.</option>
      
      <option  value="113108051/module3/lecture18.pdf">Design aspects for cathodic protection.</option>
      
      <option  value="113108051/module3/lecture19.pdf">Stray current corrosion.</option>
      
      <option  value="113108051/module3/lecture20.pdf">Passivity � definitions and influencing parameters  </option>
      
      <option  value="113108051/module3/lecture21.pdf">Passivity � application of mixed potential theory</option>
      
      <option  value="113108051/module3/lecture22.pdf">Passivity � design of corrosion resistant alloys</option>
      
      <option  value="113108051/module3/lecture23.pdf">Anodic protection</option>
      
      <option  value="113108051/module4/lecture24.pdf">Microbially influenced corrosion (MIC) � definitions, environments and microbiology</option>
      
      <option  value="113108051/module4/lecture25.pdf">MIC - Electrochemical aspects and general mechanisms</option>
      
      <option  value="113108051/module4/lecture26.pdf">MIC � Bacterial transport, attachment and affected materials.</option>
      
      <option  value="113108051/module4/lecture27.pdf">MIC - Role of aerobic and anaerobic microorganisms</option>
      
      <option  value="113108051/module4/lecture28.pdf">Mechanisms and models for SRB corrosion</option>
      
      <option  value="113108051/module4/lecture29.pdf">MIC and Biofilms.</option>
      
      <option  value="113108051/module4/lecture30.pdf">MIC � case studies and mechanisms</option>
      
      <option  value="113108051/module4/lecture31.pdf">Biofouling of Titanium � biofilm studies</option>
      
      <option  value="113108051/module4/lecture32.pdf">Biofouling of Titanium- biomineralization and corrosion aspects</option>
      
      <option  value="113108051/module4/lecture33.pdf">MIC � Failure analysis.</option>
      
      <option  value="113108051/module4/lecture34.pdf">MIC � Prevention and control.</option>
      
      <option  value="113108051/module4/lecture35.pdf">Implant materials and corrosivity of human body</option>
      
      <option  value="113108051/module4/lecture36.pdf">Medical implants - status and developments</option>
      
      <option  value="113108051/module4/lecture37.pdf">Microbially induced concrete corrosion</option>
      
      <option  value="113108051/module5/lecture38.pdf">Metallurgical properties influencing corrosion</option>
      
      <option  value="113108051/module5/lecture39.pdf">Laboratory experiments in corrosion engineering � I</option>
      
      <option  value="113108051/module5/lecture40.pdf">Laboratory experiments in corrosion engineering � II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113108052</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>

	<td><strong>Diffusion in solids</strong></td>
	<td><strong>Dr. Aloke Paul</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113108052/module1/lecture1.pdf">Concept of free energy, enthalpy and entropy</option>
      
      <option  value="113108052/module1/lecture2.pdf">Gibb�s free energy change with temperature in a single component system</option>
      
      <option  value="113108052/module1/lecture3.pdf">Thermodynamic parameters in a binary system</option>
      
      <option  value="113108052/module1/lecture4.pdf">Thermodynamics and phase diagrams</option>
      
      <option  value="113108052/module1/lecture5.pdf">Concept of the chemical potential and the activity of elements</option>
      
      <option  value="113108052/module1/lecture6.pdf">Point defects: Equilibrium vacancy concentration in a pure element.</option>
      
      <option  value="113108052/module1/lecture7.pdf">Equilibrium concentration of interstitial atoms</option>
      
      <option  value="113108052/module1/lecture8.pdf">Defects in the ordered phases</option>
      
      <option  value="113108052/module1/lecture9.pdf">Calculation of thermodynamic parameters</option>
      
      <option  value="113108052/module2/lecture10.pdf">Fick�s laws of diffusion and thin film solution</option>
      
      <option  value="113108052/module2/lecture11.pdf">Solution in sem- infinite diffusion couples (error function analysis)</option>
      
      <option  value="113108052/module2/lecture12.pdf">Solution for homogeneization (separation of variables)</option>
      
      <option  value="113108052/module3/lecture13.pdf">Diffusion under the thermodynamic driving forces</option>
      
      <option  value="113108052/module3/lecture14.pdf">Driving force for diffusion and Fick�s laws of diffusion</option>
      
      <option  value="113108052/module3/lecture15.pdf">Product phase formations because of diffusion in real systems</option>
      
      <option  value="113108052/module3/lecture16.pdf">Diffusion process as a tool to make products</option>
      
      <option  value="113108052/module3/lecture17.pdf">Definition and description of different diffusion terms</option>
      
      <option  value="113108052/module4/lecture18.pdf">Interstitial diffusion</option>
      
      <option  value="113108052/module4/lecture19.pdf">Concept of random walk</option>
      
      <option  value="113108052/module4/lecture20.pdf">Substitutional diffusion</option>
      
      <option  value="113108052/module4/lecture21.pdf">Activation energy for diffusion</option>
      
      <option  value="113108052/module4/lecture22.pdf">Orientation dependence</option>
      
      <option  value="113108052/module4/lecture23.pdf">Diffusion in the ordered phases</option>
      
      <option  value="113108052/module5/lecture24.pdf">Matano-Boltzmann analysis</option>
      
      <option  value="113108052/module5/lecture25.pdf">Calculation of diffusion parameters using the Matano-Boltzmann analysis</option>
      
      <option  value="113108052/module5/lecture26.pdf">Den Broeder and Wagner�s approach</option>
      
      <option  value="113108052/module5/lecture27.pdf">Problem of finding the initial contact plane</option>
      
      <option  value="113108052/module5/lecture28.pdf">Effect of molar volume in a hypothetical diffusion couple</option>
      
      <option  value="113108052/module5/lecture29.pdf">The Kirkendall effect</option>
      
      <option  value="113108052/module5/lecture30.pdf">The intrinsic diffusion coefficients: Darken analysis and the van Loo relation</option>
      
      <option  value="113108052/module5/lecture31.pdf">Integrated diffusion coefficient</option>
      
      <option  value="113108052/module5/lecture32.pdf">Calculations of the integrated diffusion coefficients</option>
      
      <option  value="113108052/module5/lecture33.pdf">Tracer diffusion coefficient and the vacancy wind effect</option>
      
      <option  value="113108052/module5/lecture34.pdf">Recent developments on the Kirkendall effect</option>
      
      <option  value="113108052/module5/lecture35.pdf">Physico-chemical approach</option>
      
      <option  value="113108052/module5/lecture36.pdf">Grain boundary diffusion</option>
      
      <option  value="113108052/module6/lecture37.pdf">Ternary phase diagrams</option>
      
      <option  value="113108052/module6/lecture38.pdf">Ternary and multicomponent diffusion</option>
      
      <option  value="113108052/module6/lecture39.pdf">Intrinsic, integrated and the average diffusion coefficients</option>
      
      <option  value="113108052/module6/lecture40.pdf">Phase diagram determination by the diffusion couple technique</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113108054</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Introduction to Crystallographic texture and related phenomenon</strong></td>
	<td><strong>Dr. Satyam Suwas</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113108054/module1/lecture1.pdf">Introduction to texture</option>
      
      <option  value="113108054/module1/lecture2.pdf">Basic crystallography</option>
      
      <option  value="113108054/module1/lecture3.pdf">Basics of X-ray diffraction</option>
      
      <option  value="113108054/module1/lecture4.pdf">Introduction to pole figures</option>
      
      <option  value="113108054/module2/lecture5.pdf">Macro- and Micro- texture</option>
      
      <option  value="113108054/module2/lecture6.pdf">Measurement of macro-texture</option>
      
      <option  value="113108054/module2/lecture7.pdf">Texture measurement by X-rays</option>
      
      <option  value="113108054/module2/lecture8.pdf">Limitations of X-ray method of texture measurement</option>
      
      <option  value="113108054/module2/lecture9.pdf">Measurement of micro-texture</option>
      
      <option  value="113108054/module2/lecture10.pdf">Microtexture measurement in SEM-EBSD</option>
      
      <option  value="113108054/module2/lecture11.pdf">Applications of EBSD</option>
      
      <option  value="113108054/module3/lecture12.pdf">Three dimensional texture analysis Lecture 1</option>
      
      <option  value="113108054/module3/lecture13.pdf">Three dimensional texture analysis Lecture 2</option>
      
      <option  value="113108054/module3/lecture14.pdf">Three dimensional texture analysis Lecture 3</option>
      
      <option  value="113108054/module4/lecture15.pdf">Deformation Mechanism</option>
      
      <option  value="113108054/module4/lecture16.pdf">Basics of deformation</option>
      
      <option  value="113108054/module4/lecture17.pdf">Theory of polycrystal deformation</option>
      
      <option  value="113108054/module4/lecture18.pdf">Taylor's approach</option>
      
      <option  value="113108054/module4/lecture19.pdf">Modeling of deformation texture_Taylor type</option>
      
      <option  value="113108054/module4/lecture20.pdf">Modeling of deformation texture_Other approaches</option>
      
      <option  value="113108054/module4/lecture21.pdf">Texture development during processing</option>
      
      <option  value="113108054/module4/lecture22.pdf">Texture of BCC materials</option>
      
      <option  value="113108054/module4/lecture23.pdf">Texture of HCP materials</option>
      
      <option  value="113108054/module4/lecture24.pdf">Fundamentals of annealing texture and Texture of FCC  materials</option>
      
      <option  value="113108054/module4/lecture25.pdf">Theories of annealing texture</option>
      
      <option  value="113108054/module4/lecture26.pdf">Annealing texture of metals and alloys</option>
      
      <option  value="113108054/module5/lecture27.pdf">Texture in thin films</option>
      
      <option  value="113108054/module5/lecture28.pdf">Texture in ceramics</option>
      
      <option  value="113108054/module5/lecture29.pdf">Texture_Mechanical properties-I</option>
      
      <option  value="113108054/module5/lecture30.pdf">Texture_Mechanical properties-II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113108055</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Metals Biotechnology</strong></td>
	<td><strong>Prof. K.A. Natarajan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="113108055/module0/foreword.pdf">Foreword</option>
      
      <option  value="113108055/module1/lecture1.pdf">Biology � Materials Interface And Biomaterials Processing</option>
      
      <option  value="113108055/module1/lecture2.pdf">Biogenesis Of Metals And Minerals</option>
      
      <option  value="113108055/module1/lecture3.pdf">History And Methods In Biohydrometallurgy</option>
      
      <option  value="113108055/module1/lecture4.pdf">Microorganisms In Biohydrometallurgy</option>
      
      <option  value="113108055/module1/lecture5.pdf">Reactor Bioleaching And Developments In Bioleaching Of Concentrates</option>
      
      <option  value="113108055/module1/lecture6.pdf">Bioleaching Mechanisms</option>
      
      <option  value="113108055/module1/lecture7.pdf">Bacterial Attachment To Minerals</option>
      
      <option  value="113108055/module1/lecture8.pdf">Metal Toxicity In Leaching Bacteria</option>
      
      <option  value="113108055/module1/lecture9.pdf">Development Of Metal-tolerant Acidithiobacillus ferrooxidans</option>
      
      <option  value="113108055/module2/lecture10.pdf">Biohydrometallurgy Of Copper � General Principles, Mechanisms And Microorganisms</option>
      
      <option  value="113108055/module2/lecture11.pdf">Biohydrometallurgy Of Copper � Dump And Heap Leaching</option>
      
      <option  value="113108055/module2/lecture12.pdf">Biohydrometallurgy Of Copper � Modern Developments</option>
      
      <option  value="113108055/module2/lecture13.pdf">Bioleaching Of Nickel From Sulfides And Laterites</option>
      
      <option  value="113108055/module2/lecture14.pdf">Heap Bioleaching Technology For Nickel</option>
      
      <option  value="113108055/module2/lecture15.pdf">Bioleaching Of Zinc Sulfide Ores And Concentrates</option>
      
      <option  value="113108055/module3/lecture16.pdf">Biohydrometallurgy Of Uranium � Microorganisms And Mechanisms</option>
      
      <option  value="113108055/module3/lecture17.pdf">Biohydrometallurgy Of Uranium � Dump, Heap and In situ Leaching</option>
      
      <option  value="113108055/module3/lecture18.pdf">Biohydrometallurgy Of Uranium � Industrial Aspects And Remediation</option>
      
      <option  value="113108055/module3/lecture19.pdf">Biotechnology For Gold � Biogenesis, Microorganisms And Gold Nanobiotechnology</option>
      
      <option  value="113108055/module3/lecture20.pdf">Biotechnology For Gold � Biooxidation Of Refractory Sulfidic Concentrates</option>
      
      <option  value="113108055/module3/lecture21.pdf">Biotechnology For Gold � Recent Developments</option>
      
      <option  value="113108055/module4/lecture22.pdf">Biomineralization and Bioprocessing of Ocean ferromanganese nodules</option>
      
      <option  value="113108055/module4/lecture23.pdf">Bioprocessing Of Industrial Wastes</option>
      
      <option  value="113108055/module5/lecture24.pdf">Electrochemistry Of Sulfide Minerals With Respect To Bioleaching</option>
      
      <option  value="113108055/module5/lecture25.pdf">Galvanic And Electrobioleaching Of Sulfide Minerals</option>
      
      <option  value="113108055/module5/lecture26.pdf">Electrobioleaching For Mixed Sulfides And Ocean Nodules</option>
      
      <option  value="113108055/module6/lecture27.pdf">Principles Governing Microbe-Mineral Interfacial Phenomena</option>
      
      <option  value="113108055/module6/lecture28.pdf">Biobeneficiation Of Sulfide Minerals Using Acidithiobacillus Bacteria</option>
      
      <option  value="113108055/module6/lecture29.pdf">Biobeneficiation Of Sulfide Minerals Using Paenibacillus Polymyxa</option>
      
      <option  value="113108055/module6/lecture30.pdf">Biobeneficiation Of Iron Ores � Bacillus subtilis, SRB And Yeasts</option>
      
      <option  value="113108055/module6/lecture31.pdf">Biobeneficiation Of Iron Ores Using Paenibacillus Polymyxa</option>
      
      <option  value="113108055/module6/lecture32.pdf">Alumina Separation And Environmental Control In Iron Ore Beneficiation</option>
      
      <option  value="113108055/module6/lecture33.pdf">Biobeneficiation Of Industrial Minerals</option>
      
      <option  value="113108055/module7/lecture34.pdf">Microorganisms In Biofouling And Biocorrosion</option>
      
      <option  value="113108055/module7/lecture35.pdf">Biofilms And General Mechanisms In Biocorrosion</option>
      
      <option  value="113108055/module7/lecture36.pdf">Biocorrosion And Biofouling � Mechanisms, Failure Analysis And Control</option>
      
      <option  value="113108055/module7/lecture37.pdf">Biomaterials And Human Implants</option>
      
      <option  value="113108055/module8/lecture38.pdf">Acid Mine Drainage � Mechanisms And Control</option>
      
      <option  value="113108055/module8/lecture39.pdf">Bioremediation Technologies In Mining</option>
      
      <option  value="113108055/module8/lecture40.pdf">Industrial Aspects And In Situ Remediation</option>
      
      <option  value="113108055/module8/lecture41.pdf">Experimental Determination Of Acid Mine Drainage</option>
      
      <option  value="113108055/module8/lecture42.pdf">Bioremediation Using Sulfate Reducing Bacteria - Copper, Iron, Zinc And Arsenic</option>
      
      <option  value="113108055/module9/lecture43.pdf">LaborLaboratory Experiments In Metals Biotechnology - I</option>
      
      <option  value="113108055/module9/lecture44.pdf">Laboratory Experiments In Metals Biotechnology - II</option>
      
      <option  value="113108055/module9/lecture45.pdf">Laboratory Experiments In Metals Biotechnology - III</option>
      
      <option  value="113108055/module9/References.pdf">References</option>
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104012</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Optoelectronic Materials and Devices</strong></td>
	<td><strong>Prof. Deepak Gupta Prof. Monica Katiyar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
  <option  value="113104012/Lecture-01.mp4">Lecture 1: Conductivity of materials, Drude’s theory and its failures</option>
 <option  value="113104012/Lecture-02.mp4">Lecture 2 : Free electron theory</option>
 <option  value="113104012/Lecture-03.mp4">Lecture 3: Free electron theory</option>
 <option  value="113104012/Lecture-04.mp4">Lecture 4: Crystal structure, Reciprocal lattice I</option>
 <option  value="113104012/Lecture-05.mp4">Lecture 5: Reciprocal lattice II, Brillouin zone and Bragg’s diffraction condition</option>
 <option  value="113104012/Lecture-06.mp4">Lecture 6: Electrons in a crystal, Bloch’s electron</option>
 <option  value="113104012/Lecture-07.mp4">Lecture 7: Free electron band diagrams in an empty lattice</option>
 <option  value="113104012/Lecture-08.mp4">Lecture 8: Effect of periodic potential, Origin of band-gap through Kronig-Penny model</option>
 <option  value="113104012/Lecture-09.mp4">Lecture 9: Electron dynamics</option>
 <option  value="113104012/Lecture-10.mp4">Lecture 10: Conduction in relation to band diagrams</option>
 <option  value="113104012/Lecture-11.mp4">Lecture 11: Semiconductor E-k diagrams and their material properties</option>
 <option  value="113104012/Lecture-12.mp4">Lecture 12: Equilibrium carrier statistics in semiconductors: density of states, fermi function and population density in bands</option>
 <option  value="113104012/Lecture-13.mp4">Lecture 13: Equilibrium carrier statistics in semiconductors: qualitative examination of carrier densities in conduction and valence bands</option>
 <option  value="113104012/Lecture-14.mp4">Lecture 14: Equilibrium carrier statistics in semiconductors: quantitative examination of carrier densities in intrinsic semiconductor</option>
 <option  value="113104012/Lecture-15.mp4">Lecture 15: Doping in semiconductors</option>
 <option  value="113104012/Lecture-16.mp4">Lecture 16: Equilibrium carrier statistics in semiconductors: complete ionization of dopant levels</option>
 <option  value="113104012/Lecture-17.mp4">Lecture 17: Equilibrium carrier statistics in semiconductors: carrier freeze out</option>
 <option  value="113104012/Lecture-18.mp4">Lecture 18: Semiconductor junctions in band-diagrams</option>
 <option  value="113104012/Lecture-19.mp4">Lecture 19: Linear dielectric behavior</option>
 <option  value="113104012/Lecture-20.mp4">Lecture 20: Non-linear dielectric behavior</option>
 <option  value="113104012/Lecture-21.mp4">Lecture 21: Carrier recombination-generation-I: band-to-band transition</option>
 <option  value="113104012/Lecture-22.mp4">Lecture 22: Carrier recombination-generation –II: Other mechanisms</option>
 <option  value="113104012/Lecture-23.mp4">Lecture 23: R-G statistics via R-G centers</option>
 <option  value="113104012/Lecture-24.mp4">Lecture 24: Optoelectronic materials and bandgap engineering</option>
 <option  value="113104012/Lecture-25.mp4">Lecture 25: Optical properties of materials</option>
 <option  value="113104012/Lecture-26.mp4">Lecture 26: Optical properties of single interfaces: Fresnal reflection coefficients</option>
 <option  value="113104012/Lecture-27.mp4">Lecture 27: Optical Properties of two interfaces: thin film case</option>
 <option  value="113104012/Lecture-28.mp4">Lecture 28: Drift</option>
 <option  value="113104012/Lecture-29.mp4">Lecture 29: Diffusion</option>
 <option  value="113104012/Lecture-30.mp4">Lecture 30: Continuity Equation</option>
 <option  value="113104012/Lecture-31.mp4">Lecture 31: Resistor and diode (p-n junction)</option>
 <option  value="113104012/Lecture-32.mp4">Lecture 32: Fundamentals of p-n junction</option>
 <option  value="113104012/Lecture-33.mp4">Lecture 33: Fundamentals of p-n junction contd.</option>
 <option  value="113104012/Lecture-34.mp4">Lecture 34: Solar cells</option>
 <option  value="113104012/Lecture-35.mp4">Lecture 35: Microelectronics processing</option>
 <option  value="113104012/Lecture-36.mp4">Lecture 36: MOS capacitor</option>
 <option  value="113104012/Lecture-37.mp4">Lecture 37: Transistor </option>
 <option  value="113104012/Lecture-38.mp4">Lecture 38: Organic Electronics</option>
 <option  value="113104012/Lecture-39.mp4">Lecture 39: Organic Light Emitting Diodes</option>
 <option  value="113104012/Lecture-40.mp4">Lecture40: Organic Solar Cells and Organics Thin Film Transistors</option>


         </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113106062</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Electronic materials, devices, and fabrication  </strong></td>
	<td><strong>Prof. Parasuraman S</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="113106062/mod01lec01.mp4">Metals, semiconductors, and insulators            </option>
<option value="113106062/mod01lec02.mp4">Introduction to semiconductors                    </option>
<option value="113106062/mod01lec03.mp4">Density of states and Fermi-Dirac statistics      </option>
<option value="113106062/mod01lec04.mp4">Assignment 1 - Bonding, DOS, and Fermi statistics </option>
<option value="113106062/mod01lec05.mp4">Intrinsic semiconductors                          </option>
<option value="113106062/mod01lec06.mp4">Intrinsic semiconductors - conductivity           </option>
<option value="113106062/mod01lec07.mp4">Assignment 2 - Intrinsic semiconductors           </option>
<option value="113106062/mod01lec08.mp4">Extrinsic semiconductors                          </option>
<option value="113106062/mod01lec09.mp4">Extrinsic semiconductors - Fermi level            </option>
<option value="113106062/mod01lec10.mp4">Extrinsic semiconductors - conductivity           </option>
<option value="113106062/mod01lec11.mp4">Assignment 3 - Extrinsic semiconductors           </option>
<option value="113106062/mod01lec12.mp4">Metal-semiconductor junctions                     </option>
<option value="113106062/mod01lec13.mp4">Assigment 4 - Metal-semiconductor junctions       </option>
<option value="113106062/mod01lec14.mp4">pn junctions in equilibrium                       </option>
<option value="113106062/mod01lec15.mp4">pn junctions under bias                           </option>
<option value="113106062/mod01lec16.mp4">pn junction breakdown and heterojunctions         </option>
<option value="113106062/mod01lec17.mp4">Assignment 5 - pn junctions                       </option>
<option value="113106062/mod01lec18.mp4">Transistors                                       </option>
<option value="113106062/mod01lec19.mp4">MOSFETs                                           </option>
<option value="113106062/mod01lec20.mp4">Assignment 6 - transistors                        </option>
<option value="113106062/mod01lec21.mp4">Optoelectronic devices: Introduction              </option>
<option value="113106062/mod01lec22.mp4">Optoelectronic devices: LEDs                      </option>
<option value="113106062/mod01lec23.mp4">Optoelectronic devices: LASERs                    </option>
<option value="113106062/mod01lec24.mp4">Optoelectronic devices: photodetector             </option>
<option value="113106062/mod01lec25.mp4">Optoelectronic devices: solar cells               </option>
<option value="113106062/mod01lec26.mp4">Assignment 7 - optical properties                 </option>
<option value="113106062/mod01lec27.mp4">Assignment 8 - optoelectronic devices             </option>
<option value="113106062/mod01lec28.mp4">Semiconductor manufacturing: Introduction         </option>
<option value="113106062/mod01lec29.mp4">Si wafer manufacturing                            </option>
<option value="113106062/mod01lec30.mp4">IC device manufacturing: overview                 </option>
<option value="113106062/mod01lec31.mp4">Layering: thermal oxidation                       </option>
<option value="113106062/mod01lec32.mp4">Doping: thermal and ion implantation              </option>
<option value="113106062/mod01lec33.mp4">Lithography                                       </option>
<option value="113106062/mod01lec34.mp4">Etching and deposition (growth)                   </option>
<option value="113106062/mod01lec35.mp4">Metallization and polishing                       </option>
<option value="113106062/mod01lec36.mp4">Process and device evaluation                     </option>
<option value="113106062/mod01lec37.mp4">Productivity and process yield                    </option>
<option value="113106062/mod01lec38.mp4">Clean room design and contamination control       </option>
<option value="113106062/mod01lec39.mp4">Devices and IC formation                          </option>
<option value="113106062/mod01lec40.mp4">IC circuit logic and packaging                    </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>113105023</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong> Principles of Physical Metallurgy</strong></td>
	<td><strong>Prof. R.N. Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="113105023/lecture1.pdf">Principles of Physical Metallurgy: an introduction to the course content </option>
<option value="113105023/Lecture2.pdf">Atomic Bonds                                                             </option>
<option value="113105023/Lecture3.pdf">Crystal structure & atomic packing                                       </option>
<option value="113105023/lecture4.pdf">Stereographic projection: concept and application                        </option>
<option value="113105023/Lecture5.pdf">Experimental Tools & Techniques I                                        </option>
<option value="113105023/Lecture6.pdf">Experimental Tools & Techniques II                                       </option>
<option value="113105023/Lecture7.pdf">Solidification of pure metal                                             </option>
<option value="113105023/Lecture8.pdf">Deformation of pure metal                                                </option>
<option value="113105023/Lecture9.pdf">Deformation of Pure Metals II                                            </option>
<option value="113105023/Lecture10.pdf">Crystal Defects in Metals I                                              </option>
<option value="113105023/Lecture11.pdf">Crystal defects in metals II                                             </option>
<option value="113105023/Lecture12.pdf">Crystal defects in metals III                                            </option>
<option value="113105023/Lecture13.pdf">Crystal defects in metals IV                                             </option>
<option value="113105023/Lecture14.pdf">Crystal defects in metals V                                              </option>
<option value="113105023/Lecture15.pdf">Diffusion in solids I                                                    </option>
<option value="113105023/Lecture16.pdf">Diffusion in solids II                                                   </option>
<option value="113105023/Lecture17.pdf">Diffusion in solids III                                                  </option>
<option value="113105023/Lecture18.pdf">Solidification & Binary Phase Diagrams I                                 </option>
<option value="113105023/Lecture19.pdf">Solidification & Binary Phase Diagrams II                                </option>
<option value="113105023/Lecture20.pdf">Solidification & Binary Phase Diagrams III                               </option>
<option value="113105023/Lecture21.pdf">Solidification & Binary Phase Diagrams IV                                </option>
<option value="113105023/Lecture22.pdf">Solidification & Binary Phase Diagrams V                                 </option>
<option value="113105023/Lecture23.pdf">Iron Carbon System I                                                     </option>
<option value="113105023/Lecture24.pdf">Iron � carbon system II                                                  </option>
<option value="113105023/Lecture25.pdf">Ternary Phase Diagram                                                    </option>
<option value="113105023/Lecture26.pdf">Common Binary Alloys                                                     </option>
<option value="113105023/Lecture27.pdf">Metal working: deformation processing I                                  </option>
<option value="113105023/Lecture28.pdf">Metal working: Deformation processing II                                 </option>
<option value="113105023/Lecture29.pdf">Precipitation from solid solution I                                      </option>
<option value="113105023/Lecture30.pdf">Precipitation from solid solution II                                     </option>
<option value="113105023/Lecture31.pdf">Heat treatment of steel I                                                </option>
<option value="113105023/Lecture32.pdf">Heat treatment of steel II                                               </option>
<option value="113105023/Lecture33.pdf">Heat Treatment of Steel III                                              </option>
<option value="113105023/Lecture34.pdf">Heat Treatment of steel IV                                               </option>
<option value="113105023/Lecture35.pdf">Heat treatment of steel V                                                </option>
<option value="113105023/Lecture36.pdf">Heat treatment of steel VI                                               </option>
<option value="113105023/Lecture37.pdf">Surface hardening                                                        </option>
<option value="113105023/Lecture38.pdf">Structural steel I                                                       </option>
<option value="113105023/Lecture39.pdf">Structural steel II                                                      </option>
<option value="113105023/Lecture40.pdf">Ultra high strength steel                                                </option>
<option value="113105023/Lecture41.pdf">Preferred orientation                                                    </option>
<option value="113105023/Lecture42.pdf">Physical metallurgy of metal joining                                     </option>
</select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113104014</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Structure of Materials</strong></td>
	<td><strong>Dr. Anandh Subramaniam</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
  <option  value="113104014/mod01lec01.mp4">Lecture-01 Overview</option>
 <option  value="113104014/mod01lec02.mp4">Lecture-02 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec03.mp4">Lecture-03  Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec04.mp4">Lecture-04  Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec05.mp4">Lecture-05 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec06.mp4">Lecture-06 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec07.mp4">Lecture-07 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec08.mp4">Lecture-08 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec09.mp4">Lecture-09 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec10.mp4">Lecture-10 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec11.mp4">Lecture-11 Geometry of Crystals: Symmetry, Lattices </option>
 <option  value="113104014/mod01lec12.mp4">Lecture-12  Geometry of Crystals: Symmetry, Lattices (continued)  and Miller Indices</option>
 <option  value="113104014/mod01lec13.mp4">Lecture-13 Miller Indices</option>
 <option  value="113104014/mod01lec14.mp4">Lecture-14  Miller Indices (continued) and Crystal Structures</option>
 <option  value="113104014/mod01lec15.mp4">Lecture-15 Crystal Structures</option>
 <option  value="113104014/mod01lec16.mp4">Lecture-16 Crystal Structures</option>
 <option  value="113104014/mod01lec17.mp4">Lecture-17 Crystal Structures</option>
 <option  value="113104014/mod01lec18.mp4">Lecture-18 Crystal Structures</option>
 <option  value="113104014/mod01lec19.mp4">Lecture-19 Crystal Structures</option>
 <option  value="113104014/mod01lec20.mp4">Lecture-20 Crystal Structures</option>
 <option  value="113104014/mod01lec21.mp4">Lecture-21 Crystal Structures (continued) and Defects in Crystals</option>
 <option  value="113104014/mod01lec22.mp4">Lecture-22 Defects in Crystals</option>
 <option  value="113104014/mod01lec23.mp4">Lecture-23 Defects in Crystals</option>
 <option  value="113104014/mod01lec24.mp4">Lecture-24 Defects in Crystals</option>
 <option  value="113104014/mod01lec25.mp4">Lecture-25 Defects in Crystals</option>
 <option  value="113104014/mod01lec26.mp4">Lecture-26 Defects in Crystals</option>
 <option  value="113104014/mod01lec27.mp4">Lecture-27 Defects in Crystals</option>
 <option  value="113104014/mod01lec28.mp4">Lecture-28 Defects in Crystals</option>
 <option  value="113104014/mod01lec29.mp4">Lecture-29 Defects in Crystals</option>
 <option  value="113104014/mod01lec30.mp4">Lecture-30 Diffusion in Solids</option>
 <option  value="113104014/mod01lec31.mp4">Lecture-31 Diffusion in Solids</option>
 <option  value="113104014/mod01lec32.mp4">Lecture-32 Phase Diagrams</option>
 <option  value="113104014/mod01lec33.mp4">Lecture-33 Phase Diagrams</option>
 <option  value="113104014/mod01lec34.mp4">Lecture-34 Phase Diagrams</option>
 <option  value="113104014/mod01lec35.mp4">Lecture-35 Phase Diagrams</option>
 <option  value="113104014/mod01lec36.mp4">Lecture-36 Phase Diagrams</option>
 <option  value="113104014/mod01lec37.mp4">Lecture-37 Phase Transformations</option>
 <option  value="113104014/mod01lec38.mp4">Lecture-38 Phase Transformations</option>
 <option  value="113104014/mod01lec39.mp4">Lecture-39 Phase Transformations</option>
 <option  value="113104014/mod01lec40.mp4">Lecture-40 Phase Transformations</option>
 <option  value="113104014/mod01lec41.mp4">Lecture-41 Phase Transformations</option>
 <option  value="113104014/mod01lec42.mp4">Lecture-42 Phase Transformations</option>
 <option  value="113104014/mod01lec43.mp4">Lecture-43 Phase Transformations</option>
 <option  value="113104014/mod01lec44.mp4">Lecture-44 Phase Transformations</option>
 <option  value="113104014/mod01lec45.mp4">Lecture-45 Phase Transformations</option>







          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>113105025</strong></td>
	<td><strong>Metallurgy and Material Science</strong></td>
	<td><strong>Processing of Semiconducting Materials</strong></td>
	<td><strong>Dr. Pallab Banerji</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
   <option  value="113105025/mod01lec01.mp4">Introduction to Electronics Materials</option>
 <option  value="113105025/mod01lec02.mp4">Electrical Conductivity of Materials</option>
 <option  value="113105025/mod01lec03.mp4">Direct and Indirect Band Semiconductors</option>
 <option  value="113105025/mod01lec04.mp4">Doping in Semiconductors</option>
 <option  value="113105025/mod01lec05.mp4">Semiconductor Statistics</option>
 <option  value="113105025/mod01lec06.mp4">Importance of Doping</option>
 <option  value="113105025/mod01lec07.mp4">Diffusion and Ion Implantation - I</option>
 <option  value="113105025/mod01lec08.mp4">Diffusion and Ion Implantation - II</option>
 <option  value="113105025/mod01lec09.mp4">Diffusion and Ion Implantation - III</option>
 <option  value="113105025/mod01lec10.mp4">Elemental Semiconductors</option>
 <option  value="113105025/mod01lec11.mp4">Compound Semiconductors</option>
 <option  value="113105025/mod01lec12.mp4">Bulk Crystal Growth - I</option>
 <option  value="113105025/mod01lec13.mp4">Bulk Crystal Growth - II</option>
 <option  value="113105025/mod01lec14.mp4">Ga As Crystal Growth</option>
 <option  value="113105025/mod01lec15.mp4">Defects in Crystals-I</option>
 <option  value="113105025/mod01lec16.mp4">Defects in Crystals - II</option>
 <option  value="113105025/mod01lec17.mp4">Band Gap Engineering - I</option>
 <option  value="113105025/mod01lec18.mp4">Band Gap Engineering - II</option>
 <option  value="113105025/mod01lec19.mp4">Chemical Vapour Deposition - I</option>
 <option  value="113105025/mod01lec20.mp4">Chemical Vapour Deposition - II</option>
 <option  value="113105025/mod01lec21.mp4">MOCVD</option>
 <option  value="113105025/mod01lec22.mp4">Molecular Beam Epitaxy - I</option>
 <option  value="113105025/mod01lec23.mp4">Molecular Beam Epitaxy - II</option>
 <option  value="113105025/mod01lec24.mp4">p - n Junction</option>
 <option  value="113105025/mod01lec25.mp4">Carrier Transport in P - N Junction</option>
 <option  value="113105025/mod01lec26.mp4">Characterization - I</option>
 <option  value="113105025/mod01lec27.mp4">Characterization - II</option>
 <option  value="113105025/mod01lec28.mp4">Optical Characterization - I</option>
 <option  value="113105025/mod01lec29.mp4">Metal-Semiconductor Contact - I </option>
 <option  value="113105025/mod01lec30.mp4">Metal-Semiconductor Contact - II</option>
 <option  value="113105025/mod01lec31.mp4">Applications of Metal-Semiconductor Contact</option>
 <option  value="113105025/mod01lec32.mp4">Oxidation - I</option>
 <option  value="113105025/mod01lec33.mp4">Oxidation - II</option>
 <option  value="113105025/mod01lec34.mp4">Different Types of Semiconductor - I</option>
 <option  value="113105025/mod01lec35.mp4"> Oxidation - I</option>
 <option  value="113105025/mod01lec36.mp4"> Oxidation - II</option>
 <option  value="113105025/mod01lec37.mp4">Dielectric Films</option>
 <option  value="113105025/mod01lec38.mp4">Low - K and High - K materials</option>
 <option  value="113105025/mod01lec39.mp4">Metallization</option>
 <option  value="113105025/mod01lec40.mp4">Materials for Photovoltaics</option>
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
