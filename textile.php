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
<title>Textile</title>
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
	<td><strong>116102006</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>High Performance and Specialty Fibres</strong></td>
	<td><strong>Dr. Manjeet Jassal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102006/module1/introduction.htm">Introduction Classification and Developments</option>
      
      <option  value="116102006/module2/chapter 2.1.htm"> Aramids</option>
      
      <option  value="116102006/module2/chapter 2.2.htm">Other rigid rod polymers such as PBZT, PBO, PBI.</option>
      
      <option  value="116102006/module2/chapter 2.3.htm">Melt spun wholly aromatic polyester</option>
      
      <option  value="116102006/module2/chapter 2.4.htm"> Manufacturing of carbon fibres</option>
      
      <option  value="116102006/module2/chapter 2.5.htm">Gel Spun pe fibres</option>
      
      <option  value="116102006/module3/chapter3.1.htm">Thermally resistant fibres</option>
      
      <option  value="116102006/module3/chapter3.2.htm">Chemically resistant fibres</option>
      
      <option  value="116102006/module4/chapter 4.1.htm">Glass fibre</option>
      
      <option  value="116102006/module4/chapter 4.2.htm">Ceramic fibre</option>
      
      <option  value="116102006/module5/chapter 5.1.htm">Elastomeric fibre</option>
      
      <option  value="116102006/module5/chapter 5.2.htm">Lyocell fibres</option>
      
      <option  value="116102006/module7/chapter 7.1.html">Stimuli responsive and Smart textiles</option>
      
      <option  value="116102006/module6/chapter 6.1.html">Biodegradable fibres based on PLLA </option>
      
      <option  value="116102006/module6/chapter 6.2.html">Absorbent Fibres</option>
      
      <option  value="116102006/module7/chapter 7.2.html">Non circular/ hollow fibres</option>
      
      <option  value="116102006/module7/chapter 7.3.html">Bicomponent  and other specialty fibres</option>
      
      <option  value="116102006/module7/chapter 7.4.html">Electrospun Nanofibres</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102008</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Knitting Technology</strong></td>
	<td><strong>Prof. P.K. Banerjee</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102008/introduction%20and%20basic%20concepts/basic%20concepts.html">1.1 Basic concepts</option>
      
      <option  value="116102008/introduction%20and%20basic%20concepts/the%20process%20of%20loop%20formation.html">1.2 The process of loop formation</option>
      
      <option  value="116102008/basic weft knitted constructions/plain or single jersey.html">2.1 Plain or single jersey</option>
      
      <option  value="116102008/basic weft knitted constructions/the rib construction.html">2.2 The Rib construction</option>
      
      <option  value="116102008/basic weft knitted constructions/the purl construction.html">2.3 The Purl construction</option>
      
      <option  value="116102008/basic weft knitted constructions/the interlock construction.html">2.4 The Interlock Construction</option>
      
      <option  value="116102008/basic weft knitted constructions/conventions for representation of constructions.html">2.5 Conventions for representation of constructions</option>
      
      <option  value="116102008/system of the basic weft knittingn machines/the primary knitting elements.html">3.1 The Primary Knitting Elements</option>
      
      <option  value="116102008/system of the basic weft knittingn machines/sequence of loop formation.html">3.2 Sequence of loop formation</option>
      
      <option  value="116102008/guidelines on control of weft knitting process/relation between machine gauge and yarn count.html">4.1 Relation between Machine Gauge and Yarn Count</option>
      
      <option  value="116102008/guidelines on control of weft knitting process/control of loop length.html">4.2 Control of loop length</option>
      
      <option  value="116102008/guidelines on control of weft knitting process/productivity of knitting machine.html">4.3 Productivity of knitting machine</option>
      
      <option  value="116102008/guidelines on control of weft knitting process/quality of knitting yarn.html">4.4 Quality of knitting yarn</option>
      
      <option  value="116102008/guidelines on control of weft knitting process/common fabric defects.html">4.5 Common fabric defects</option>
      
      <option  value="116102008/relation between geometry and proiperties of a loop/geometry of a loop.html">5.1 Geometry of a loop</option>
      
      <option  value="116102008/relation between geometry and proiperties of a loop/some useful relations.html">5.2 Some useful relations</option>
      
      <option  value="116102008/appendix/appendix.html">Appendix</option>
      
      <option  value="116102008/the basic warp knitting machines/broad classification.html">6.1 Broad classification</option>
      
      <option  value="116102008/the basic warp knitting machines/the tricot machine.html">6.2 The tricot machine</option>
      
      <option  value="116102008/the basic warp knitting machines/the raschel machine.html">6.3 The Raschel machine</option>
      
      <option  value="116102008/basic warp knit constructions/convention for representation of constructions.html">7.1 Convention for representation of constructions</option>
      
      <option  value="116102008/basic warp knit constructions/single bar constructions.html">7.2 Single bar warp knit constructions</option>
      
      <option  value="116102008/basic warp knit constructions/multibar warp knit constructions.html">7.3 Multibar warp knit constructions</option>
      
      <option  value="116102008/sequence of loop formation/compound needle on tricot machine.html">8.1 Compound needle on tricot machine</option>
      
      <option  value="116102008/sequence of loop formation/latch needle on single bed raschel.html">8.2 Latch needle on single bed Raschel</option>
      
      <option  value="116102008/sequence of loop formation/latch needle on double bed raschel.html">8.3 Latch needle on double bed Raschel</option>
      
      <option  value="116102008/the shogging motion of guide bars/pattern wheel.html">9.1 Pattern disc</option>
      
      <option  value="116102008/the shogging motion of guide bars/pattern chain.html">9.2 Pattern chain</option>
      
      <option  value="116102008/the shogging motion of guide bars/electronic shogging.html">9.3 Electronic shogging</option>
      
      <option  value="116102008/some important warp knitted structures/single bed structure.html">10.1 Single bed structure</option>
      
      <option  value="116102008/some important warp knitted structures/double bed structure.html">10.2 Double bed structures</option>
      
      <option  value="116102008/multiaxial warp knitting/multiaxial warp knitting.html">11.0 Multiaxial warp knitting	</option>
      
      <option  value="116102008/advantages of warp knitting process vis-a-vis other fabric manufacturing processes/advantages of warp knitting process.html">12.0 Advantages of warp knitting process vis-a-vis other fabric manufacturing processes</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102012</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Mechanics of Textile Machinery</strong></td>
	<td><strong>Dr. R.S. Rengasamy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102012/machine elements and drives/introduction to drives .htm">1.1 INTRODUCTION TO DRIVES</option>
      
      <option  value="116102012/machine elements and drives/primary machine elements.htm">1.2 PRIMARY MACHINE ELEMENTS </option>
      
      <option  value="116102012/machine elements and drives/special purpose drives.htm">1.3 SPECIAL PURPOSE DRIVES </option>
      
      <option  value="116102012/machine elements and drives/devices.htm">1.4 DEVICES </option>
      
      <option  value="116102012/belt drives/introduction.html">2.1 INTRODUCTION</option>
      
      <option  value="116102012/belt drives/flat belt drive.html">2.2 FLAT BELT DRIVE</option>
      
      <option  value="116102012/belt drives/analysis of flat belt tensions.htm">2.3 ANALYSIS OF FLAT BELT TENSIONS </option>
      
      <option  value="116102012/belt drives/positions of slack and slides of belt.htm">2.4 POSITIONS OF SLACK AND TIGHT SIDES OF BELT </option>
      
      <option  value="116102012/belt drives/maxmizing the power transmission.htm">2.5 MAXIMIZING THE POWER TRANSMISSION </option>
      
      <option  value="116102012/belt drives/geometrical relationships in belt drives.htm">2.6 GEOMETRICAL RELATIOSHIPS IN BELT DRIVES</option>
      
      <option  value="116102012/belt drives/selection of belt and pulley diameter.htm">2.7 SELECTION OF BELT AND PULLEY DIAMETER </option>
      
      <option  value="116102012/belt drives/reversing drives with flat belts.htm">2.8 REVERSING DRIVES WITH FLAT BELTS </option>
      
      <option  value="116102012/belt drives/flat belt with out of plane pulleys.htm">2.9 FLAT BELT WITH OUT OF PLANE PULLEYS </option>
      
      <option  value="116102012/belt drives/clutching action with flat belt.htm">2.10 CLUTCHING ACTION WITH FLAT BELT </option>
      
      <option  value="116102012/belt drives/application of flat belts.htm">2.11 APPLICATIONS OF FLAT BELTS </option>
      
      <option  value="116102012/belt drives/v belt drivers.htm">2.12 V BELT DRIVES</option>
      
      <option  value="116102012/belt drives/construction of v belt.htm">2.13 CONSTRUCTION OF V BELT </option>
      
      <option  value="116102012/belt drives/force analysis in v belt.htm">2.14 FORCE ANALYSIS IN V BELT</option>
      
      <option  value="116102012/belt drives/application of v belts.htm">2.15 APPLICATIONS OF V BELTS </option>
      
      <option  value="116102012/belt drives/round belts.htm">2.16 ROUND BELTS </option>
      
      <option  value="116102012/belt drives/toothed belt drives.htm">2.17 TOOTHED BELT DRIVES</option>
      
      <option  value="116102012/belt drives/tapes.htm">2.18 TAPES</option>
      
      <option  value="116102012/belt drives/variable speed drives.htm">2.19 VARIABLE SPEED DRIVES	</option>
      
      <option  value="116102012/belt drives/adjustment of belt tensions.htm">2.20 ADJUSTMENT OF BELT TENSIONS</option>
      
      <option  value="116102012/belt drives/comparison of flat and v belts.htm">2.21 COMPARISON OF BELT DRIVES</option>
      
      <option  value="116102012/chain drives/introduction.html">3.1 INTRODUCTION</option>
      
      <option  value="116102012/chain drives/construction of roller chain.htm">3.2 CONSTRUCTION OF ROLLER CHAIN</option>
      
      <option  value="116102012/chain drives/classification of chains.htm">3.3 CLASSIFICATION OF CHAINS</option>
      
      <option  value="116102012/chain drives/lubrication of roller chains.htm">3.4 LUBRICATION OF ROLLER CHAINS</option>
      
      <option  value="116102012/chain drives/chain tension and bending force on shaft.htm">3.5 CHAIN TENSION AND BENDING FORCE ON SHAFT</option>
      
      <option  value="116102012/chain drives/geometrical relationships in chain drive.htm">3.6 GEOMETRICAL RELATIONSHIPS IN CHAIN DRIVE</option>
      
      <option  value="116102012/chain drives/polygonal effect in chain drives.htm">3.7 POLYGONAL EFFECT IN CHAIN DRIVES </option>
      
      <option  value="116102012/chain drives/characterstics of chain drives.htm">3.8 CHARACTERISTICS OF CHAIN DRIVES</option>
      
      <option  value="116102012/chain drives/applications of roler chains.htm">3.9 APPLICATIONS OF ROLLER CHAINS </option>
      
      <option  value="116102012/spur gears/introduction.html">4.1 INTRODUCTION</option>
      
      <option  value="116102012/spur gears/design aspects of spur gear.html">4.2 DESIGN ASPECTS OF SPUR GEAR</option>
      
      <option  value="116102012/spur gears/conjugate action.html">4.3 CONJUGATE ACTION</option>
      
      <option  value="116102012/spur gears/generation of involuteon a cylinder.html">4.4 GENERATION OF INVOLUTE ON A CYLINDER </option>
      
      <option  value="116102012/spur gears/involute profile of gear teath.htm">4.5 INVOLUTE PROFILE OF GEAR TEETH</option>
      
      <option  value="116102012/spur gears/construction of involute gear tooth.html">4.6 CONSTRUCTION OF INVOLUTE GEAR TOOTH </option>
      
      <option  value="116102012/spur gears/contact ratio.html">4.7 CONTACT RATIO</option>
      
      <option  value="116102012/spur gears/pressure angle.html">4.8 PRESSURE ANGLE</option>
      
      <option  value="116102012/spur gears/interference.html">4.9 INTERFERENCE IN GEARS</option>
      
      <option  value="116102012/spur gears/elimination of interference.htm">4.10 ELIMINATION OF INTERFERENCE </option>
      
      <option  value="116102012/spur gears/effect of interference on periodic faults in fibre.htm">4.11 EFFECT OF INTERFERENCE ON PERIODIC FAULTS IN FIBRE ASSEMBLIES</option>
      
      <option  value="116102012/spur gears/back lash in gears.html">4.12 BACK LASH IN GEARS</option>
      
      <option  value="116102012/spur gears/internal gears.html">4.13 INTERNAL GEARS</option>
      
      <option  value="116102012/spur gears/rack and pinion.html">4.14 RACK AND PINION</option>
      
      <option  value="116102012/spur gears/force analysis in spur gear.html">4.15 FORCE ANALYSIS IN SPUR GEAR</option>
      
      <option  value="116102012/spur gears/face width of gear.html">4.16 FACE WIDTH OF GEAR</option>
      
      <option  value="116102012/spur gears/librication of gears.html">4.17 LUBRICATION OF GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/helical gears.html">5.1 HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/parallel helical gears.htm">5.2 PARALLEL HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/geometry of helical gears.htm">5.3 GEOMETRY OF HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/force analysis in helical.htm">5.4 FORCE ANALYSIS IN HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/thrust loads in parallel helical.htm">5.5 THRUST LOADS IN PARALLEL HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/crossed helical gears.htm">5.6 CROSSED HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/herringbone gears.htm">5.7 HERRINGBONE GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/applications of parallel helical gears.htm">5.8 APPLICATIONS OF PARALLEL HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/crossed helical gears on card.htm">5.9 APLICATIONS OF CROSSED HELICAL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/bevel gears.htm">5.10 BEVEL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/straight bevel gears.htm">5.11 STRAIGHT BEVEL GEARS </option>
      
      <option  value="116102012/helical bevel and worm gears/spiral bevel gears.htm">5.12 SPIRAL BEVEL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/hypoid bevel gears.htm">5.13 HYPOID BEVEL GEARS </option>
      
      <option  value="116102012/helical bevel and worm gears/miter and angular bevel gears.htm">5.14 MITER AND ANGULAR BEVEL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/applications of bevel gears.htm">5.15 APPLICATIONS OF BEVEL GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/worm gears.html">5.16 WORM GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/terminology of worm gears.htm">5.17 TERMINOLOGY OF WORM GEARS </option>
      
      <option  value="116102012/helical bevel and worm gears/classification of worm gears.htm">5.18 CLASSIFICATION OF WORM GEARS</option>
      
      <option  value="116102012/helical bevel and worm gears/applications of worm gears.htm">5.19 APPLICATIONS OF WORM GEARS</option>
      
      <option  value="116102012/gear trains/gear train.html">6.1 GEAR TRAIN</option>
      
      <option  value="116102012/gear trains/classification of gear trains.htm">6.2 CLASSIFICATION OF GEAR TRAINS</option>
      
      <option  value="116102012/gear trains/simple gear train.htm">6.3 SIMPLE GEAR TRAIN</option>
      
      <option  value="116102012/gear trains/compound gear train.htm">6.4 COMPOUND GEAR TRAIN</option>
      
      <option  value="116102012/gear trains/reverted gear train.htm">6.5 REVERTED GEAR TRAIN</option>
      
      <option  value="116102012/gear trains/epicyclic planetary gear train.htm">6.6 EPICYCLIC/ PLANETARY GEAR TRAIN</option>
      
      <option  value="116102012/gear trains/velocity ratio of epicyclic gear train.htm">6.7 VELOCITY RATIO OF EPICYCLIC GEAR TRAIN</option>
      
      <option  value="116102012/gear trains/epicylclic gear train with two degrees of freedom.htm">6.8 EPICYCLIC GEAR TRAIN WITH TWO DEGREES OF FREEDOM</option>
      
      <option  value="116102012/gear trains/epicyclic gear trains on roving machine.htm">6.9 EPICYCLIC GEAR TRAINS ON ROVING MACHINE</option>
      
      <option  value="116102012/gear trains/epicyclic gear train on combing machine.htm">6.10	 EPICYCLIC GEAR TRAIN ON COMBING MACHINE</option>
      
      <option  value="116102012/cone pulleys/cone pulleys on roving machine.html">7.1 CONE PULLEYS ON ROVING MACHINE</option>
      
      <option  value="116102012/cone pulleys/design aspects of cone pulleys.html">7.2 DESIGN ASPECTS OF CONE PULLEYS </option>
      
      <option  value="116102012/cone pulleys/steps to design cone pulleys.html">7.3 STEPS TO DESIGN CONE PULLEYS </option>
      
      <option  value="116102012/cone pulleys/hyperbolic cone pulleys.html">7.4 HYPERBOLIC CONE PULLEYS </option>
      
      <option  value="116102012/cone pulleys/straight cone pulleys.html">7.5 STRAIGHT CONE PULLEYS </option>
      
      <option  value="116102012/cone pulleys/cone pulleys for piano feed regulation.html">7.6 CONE PULLEYS FOR PIANO-FEED REGULATION </option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/introduction.html">8.1 INTRODUCTION</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/material properties.html">8.2 MATERIAL PROPERTIES</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/factor of safety and allowable stress.html">8.3 FACTOR OF SAFETY AND ALLOWABLE STRESS </option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/stress strain relationships of materials.html">8.4. STRESS-STRAIN RELATIONSHIPS OF MATERIALS</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of transmission shaft.html">8.5 DESIGN OF TRANSMISSION SHAFT </option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of shaft against static load.html">8.6 DESIGN OF SHAFT AGAINST STATIC LOAD</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/maximum shear stress theory of failure in design of shaft.html">8.7 MAXIMUM SHEAR STRESS THEORY OF FAILURE IN DESIGN OF SHAFTS</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of shaft using asme codet.html">8.8 DESIGN OF SHAFT USING A.S.M.E CODE</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of shaft for torsional rigidity.html">8.9 DESIGN OF SHAFT FOR TORSIONAL RIGIDITY</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of shaft for lateral rigidity.html">8.10 DESIGN OF SHAFTS FOR LATERAL RIGIDITY</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of bottom drafting rollers.html">8.11 DESIGN OF BOTTOM-DRAFTING ROLLERS</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of bottom drafting roller against torsional rigidity.html">8.12 DESIGN OF BOTTOM-DRAFTING ROLLER AGAINST TORSIONAL RIGIDITY</option>
      
      <option  value="116102012/design of tranmission shafts and drafting rollers/design of bottom drafting roller against lateral rigidity.html">8.13 DESIGN OF BOTTOM-DRAFTING ROLLER AGAINST LATERAL RIGIDITY</option>
      
      <option  value="116102012/clutches/introduction.html">9.1	INTRODUCTION</option>
      
      <option  value="116102012/clutches/clutches.html">9.2 CLUTCHES</option>
      
      <option  value="116102012/clutches/mechanical lockup clutches.html">9.3 MECHANICAL LOCKUP CLUTCHES</option>
      
      <option  value="116102012/clutches/application of mechanical clutches.html">9.4 APPLICATIONS OF MECHANICAL CLUTCHES</option>
      
      <option  value="116102012/clutches/friction clutches.html">9.5 FRICTION CLUTCHES</option>
      
      <option  value="116102012/clutches/single friction disk clutch.html">9.6 SINGLE FRICTION DISK CLUTCH</option>
      
      <option  value="116102012/clutches/multi disk friction clutches.html">9.7 MULTI DISK FRICTION CLUTCH</option>
      
      <option  value="116102012/clutches/cone clutches.html">9.8 CONE CLUTCHES   </option>
      
      <option  value="116102012/clutches/centrifugal clutches.html">9.9 CENTRIFUGAL CLUTCHES</option>
      
      <option  value="116102012/clutches/materials for friction lining.html">9.10 MATERIALS FOR FRICTION LINING </option>
      
      <option  value="116102012/brakes/introduction.html">10.1 INTRODUCTION</option>
      
      <option  value="116102012/brakes/mechanical or friction brake.html">10.2 MECHANICAL OR FRICTION BRAKES</option>
      
      <option  value="116102012/brakes/brake with short shoe.html">10.3 BLOCK BRAKE WITH SHORT SHOE</option>
      
      <option  value="116102012/brakes/pivoted block brakes with long shoe.html">10.4 PIVOTED BLOCK BRAKES WITH LONG SHOE</option>
      
      <option  value="116102012/brakes/internal expanding brake.html">10.5 INTERNAL EXPANDING BRAKE</option>
      
      <option  value="116102012/brakes/band brakes.html">10.6 BAND BRAKES</option>
      
      <option  value="116102012/brakes/disk brakes.html">10.7 DISK BRAKES</option>
      
      <option  value="116102012/brakes/non friction type clutches and brakes.html">10.8 NON-FRICTION TYPE CLUTCHES AND BRAKES</option>
      
      <option  value="116102012/brakes/disk clutch and dics brake combination.html">10.9 DISC CLUTCH AND DICS BRAKE COMBINATION</option>

      
      <option  value="116102012/bearings/introduction.html">11.1 INTRODUCTION</option>
      
      <option  value="116102012/bearings/sliding contact or bush bearings.html">11.2 SLIDING CONTACT OR BUSH BEARINGS</option>
      
      <option  value="116102012/bearings/lubrication in bush bearings.html">11.3 LUBRICATION IN BUSH BEARINGS</option>
      
      <option  value="116102012/bearings/power loss in bush bearings.html">11.4 POWER LOSS IN BUSH BEARING</option>
      
      <option  value="116102012/bearings/coefficent of friction in bush bearings.html">11.5 COEFFICIENT OF FRICTION IN BUSH BEARINGS</option>
      
      <option  value="116102012/bearings/oil grooves in bush bearings.html">11.6 OIL-GROOVES IN BUSH BEARINGS</option>
      
      <option  value="116102012/bearings/rolling contact bearings.html">11.7 ROLLING CONTACT BEARINGS </option>
      
      <option  value="116102012/bearings/ball bearings.html">11.8 BALL BEARINGS</option>
      
      <option  value="116102012/bearings/types of ball bearings.html">11.9 TYPES OF BALL BEARINGS</option>
      
      <option  value="116102012/bearings/ball bearing in textile machines.html">11.10 BALL BEARINGS IN TEXTILE MACHINES </option>
      
      <option  value="116102012/bearings/roller bearings.html">11.11 ROLLER BEARINGS</option>
      
      <option  value="116102012/bearings/materials of bearings.html">11.12 MATERIALS OF BEARING </option>
      
      <option  value="116102012/bearings/static load capacity of ball bearing.html">11.13 STATIC LOAD CAPACITY OF BALL BEARING</option>
      
      <option  value="116102012/bearings/dynamic load carrying capacity.html">11.14 DYNAMIC LOAD CARRYING CAPACITY</option>
      
      <option  value="116102012/bearings/equivalent bearing.html">11.15 EQUIVALENT BEARING LOAD</option>
      
      <option  value="116102012/bearings/bearing load and life.html">11.16 BEARING LOAD AND LIFE </option>
      
      <option  value="116102012/bearings/comparison of beaing.html">11.17 COMPARISON OF BEARINGS</option>
      
      <option  value="116102012/cams/introduction.html">12.1 INTRODUCTION</option>
      
      <option  value="116102012/cams/classifications of cam mechanism.html">12.2 CLASSIFICATIONS OF CAM MECHANISMS</option>
      
      <option  value="116102012/cams/cam device for cop building ring spinning machine.html">12.3 CAM DEVICE FOR COP BUILDING IN RING SPINNING MACHINE</option>
      
      <option  value="116102012/cams/cam device for shifting of belt on straight cone pulleys in roving machine.html">12.4 CAM DEVICE FOR SHIFTING OF BELT ON STRAIGHT CONE PULLEYS IN ROVING MACHINE</option>
      
      <option  value="116102012/balancing of machines/unbalance.html">13.1 UNBALANCE</option>
      
      <option  value="116102012/balancing of machines/causes of unbalance.html">13.2 CAUSES OF UNBALANCE</option>
      
      <option  value="116102012/balancing of machines/production and field balancing.html">13.3 PRODUCTION AND FIELD BALANCING</option>
      
      <option  value="116102012/balancing of machines/measures of unbalance.html">13.4 MEASURES OF UNBALANCE</option>
      
      <option  value="116102012/balancing of machines/static balancing.html">13.5 STATIC BALANCING</option>
      
      <option  value="116102012/balancing of machines/static unbalance.html">13.6 STATIC UNBALANCE</option>
      
      <option  value="116102012/balancing of machines/quasi static unbalance.html">13.7 QUASI-STATIC UNBALANCE</option>
      
      <option  value="116102012/balancing of machines/couple unbalance.html">13.8 COUPLE UNBALANCE </option>
      
      <option  value="116102012/balancing of machines/couple unbalance in card cylinder.html">13.9 COUPLE UNBALANCE IN CARD CYLINDER</option>
      
      <option  value="116102012/balancing of machines/dynamic unbalance.html">13.10 DYNAMIC UNBALANCE</option>
      
      <option  value="116102012/balancing of machines/dynamic unbalance in an opening roller.html">13.11 DYNAMIC UNBALANCE IN AN OPENING ROLLER</option>
      
      <option  value="116102012/balancing of machines/dynamic unbalance in a grooved winding drum.html">13.12 DYNAMIC UNBALANCE IN A GROOVED WINDING DRUM</option>
      
      <option  value="116102012/balancing of machines/plane transposition.html">13.13 PLANE TRANSPOSITION</option>
      
      <option  value="116102012/balancing of machines/balancing of cylinder.html">13.14 BALANCING OF A CYLINDER</option>
      
      <option  value="116102012/balancing of machines/trial weights.html">13.15 TRIAL WEIGHTS </option>
      
      <option  value="116102012/balancing of machines/run out.html">13.16 RUN OUT </option>
      
      <option  value="116102012/balancing of machines/unbalance due to eccentricity in mounting the shaft.html">13.17 UNBALANCE DUE TO ECCENTRICITY IN MOUNTING THE SHAFT</option>
      
      <option  value="116102012/balancing of machines/unbalance due to nonuniform mass distribution.html">13.18 UNBALANCE DUE TO NONUNIFORM MASS DISTRIBUTION</option>
      
      <option  value="116102012/balancing of machines/dynamic balancing of single plane rotor.html">13.19 DYNAMIC BALANCING OF SINGLE PLANE ROTOR </option>
      
      <option  value="116102012/balancing of machines/dynamic balancing of multi plane rotor.html">13.20 DYNAMIC BALANCING OF MULTI-PLANE ROTOR</option>
      
      <option  value="116102012/balancing of machines/dynamic and static balancing.html">13.21 DYNAMIC AND STATIC BALANCING</option>
      
      <option  value="116102012/balancing of machines/practical aspects of balancing.html">13.22 PRACTICAL ASPECTS OF BALANCING</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102014</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Nonwoven Technology</strong></td>
	<td><strong>Dr. Dipayan Das </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102014/overview of nonwovens/nonwovens what are they.html">1.1	Nonwovens: What are they?</option>
      
      <option  value="116102014/overview of nonwovens/how do they look like.htm">1.2	Nonwovens: How do they look like?</option>
      
      <option  value="116102014/overview of nonwovens/how are they created.htm">1.3	Nonwovens: How are they created?</option>
      
      <option  value="116102014/staple fibre based processes/fibre preparation processes.htm">2.1	Fibre preparation processes</option>
      
      <option  value="116102014/staple fibre based processes/staple fibre web formation processes.htm">2.2	Staple fibre web formation processes</option>
      
      <option  value="116102014/web bonding process/mechanical bonding processes.htm">3.1	Mechanical Bonding Processes</option>
      
      <option  value="116102014/web bonding process/thermal bonding processes.htm">3.2	Thermal Bonding Processes</option>
      
      <option  value="116102014/web bonding process/chemical bonding processes.htm">3.3	Chemical Bonding Processes</option>
      
      <option  value="116102014/polymer extrusion based technologies/spunbond technology.htm">4.1	Spunbond technology</option>
      
      <option  value="116102014/polymer extrusion based technologies/meltblown technology.htm">4.2	Meltblown technology</option>
      
      <option  value="116102014/finishing process/introduction.htm">5.1	Introduction</option>
      
      <option  value="116102014/finishing process/mechanical finishing.htm">5.2	Mechanical finishing</option>
      
      <option  value="116102014/finishing process/chemical finishing.htm">5.3	Chemical finishing</option>
      
      <option  value="116102014/overview of nonwovens/references.htm">1.4 References and Sources of further information </option>
      
      <option  value="116102014/staple fibre based processes/references.htm">2.3 References and Sources of further information</option>
      
      <option  value="116102014/web bonding process/references.htm">3.4 References and Sources of further information</option>
      
      <option  value="116102014/polymer extrusion based technologies/references.htm">4.3 References and Sources of further information</option>
      
      <option  value="116102014/finishing process/references.htm">5.4 References and Sources of further information</option>
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102010</strong></td>
	<td><strong>Textile Engineering </strong></td>
	<td><strong>Manufactured Fibre Technology</strong></td>
	<td><strong>Prof. Ashwini Kumar Agrawal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="116102010/polymerisation/polymers and polymerization.html">Polymers and Polymerization</option>
 <option  value="116102010/polymerisation/what are polyamides.html">what are Polyamides?</option>
 <option  value="116102010/polymerisation/polymerization of nylon-6.html">Polymerization of Nylon-6</option>
 <option  value="116102010/polymerisation/conditions of polymerization of nylon-6.html">Conditions of polymerization of nylon-6</option>
 <option  value="116102010/polymerisation/polymerization of nylon6,6.html">Polymerization of Nylon6,6</option>
 <option  value="116102010/melt spinning/introduction.htm">Introduction and melt spinning line</option>
 <option  value="116102010/melt spinning/melt rheology.htm">Melt Rheology: Shear Flow</option>
 <option  value="116102010/melt spinning/melt rheology- elongational flow.html">Melt Rheology- Elongational fluid flow</option>
 <option  value="116102010/melt spinning/spinnability.html">Spinnability</option>
 <option  value="116102010/melt spinning/melt spinning concepts-thermodynamics.html">Melt spinning concepts- Thermodynamics</option>
 <option  value="116102010/melt spinning/melt spinning concepts- fluid dynamics.html">Melt spinning concepts: Fluid dynamics</option>
 <option  value="116102010/melt spinning/melt spinning concepts- rate of momentum balance.html">Melt spinning concepts: Rate of momentum balance</option>
 <option  value="116102010/melt spinning/melt spinning concepts-heat balance.html">Melt spinning concepts: Heat balance</option>
 <option  value="116102010/melt spinning/spinning at low speeds.html">Spinning at low speeds</option>
 <option  value="116102010/melt spinning/spinning at high speeds.htm">Spinning at high speeds</option>
 <option  value="116102010/melt spinning/spinning poy and fdy.html">Spinning POY and FDY</option>
 <option  value="116102010/melt spinning/spinning behaviour of pet, nylon-6 and pp.html">Spinning behaviour of PET, Nylon-6 and PP</option>
 <option  value="116102010/solution spinning/introduction to solution spinning.htm">Introduction to solution spinning</option>
 <option  value="116102010/solution spinning/solution spinning rheology.htm">Solution spinning: Rheology</option>
 <option  value="116102010/solution spinning/spinnability in solution spinning.htm">Spinnability in solution spinning</option>
 <option  value="116102010/solution spinning/mechanics of spinning and its limiting effects.htm">Mechanics of Spinning and its limiting effects</option>
 <option  value="116102010/solution spinning/kinetics of solution spinning.htm">Kinetics of solution spinning</option>
 <option  value="116102010/solution spinning/thermodynamics of solution spinning.htm">Thermodynamics of solution spinning</option>
 <option  value="116102010/solution spinning/mechanism of fiber coagulation and morphology of protofibers.htm">Mechanism for development of morphology of protofiber</option>
 <option  value="116102010/solution spinning/construction of phase diagrams.htm">Construction of phase diagrams</option>
 <option  value="116102010/solution spinning/effect of polymer modification on morphology of protofibers.htm">Effect of polymer modification on morphology of protofibers</option>
 <option  value="116102010/solution spinning/dry-jet wet spinning.htm">Dry-Jet wet spinning</option>
 <option  value="116102010/post-spinning operations/introduction to drawing.htm">Introduction to drawing</option>
 <option  value="116102010/post-spinning operations/drawing machines.htm">Drawing Machines</option>
 <option  value="116102010/post-spinning operations/neck drawing.htm">Neck drawing</option>
 <option  value="116102010/post-spinning operations/effect of drawing parameters.htm">Effect of drawing parameters</option>
 <option  value="116102010/post-spinning operations/structure development during drawing.htm">Structure development during drawing</option>
 <option  value="116102010/post-spinning operations/drawing of nylon-6.htm">Drawing of nylon-6</option>
 <option  value="116102010/post-spinning operations/drawing of pet.htm">Drawing of PET</option>
 <option  value="116102010/post-spinning operations/instabilities in drawing.htm">Instabilities in drawing</option>
 <option  value="116102010/post-spinning operations/heatsetting.htm">Heatsetting</option>
 <option  value="116102010/polymerisation/synthesis of modified polyamides (nylon 6).html">Synthesis of Modified Polyamides (nylon 6)</option>
 <option  value="116102010/polymerisation/polyesters.html">Polyesters</option>
 <option  value="116102010/polymerisation/side reactions in melt pet polymerization.html">Side Reactions in melt PET polymerization</option>
 <option  value="116102010/polymerisation/solid state polymerization.html">Solid state polymerization</option>










          </select></td>
	
	</tr>
	</form>
    
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102017</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Shuttleless Weaving</strong></td>
	<td><strong>Prof. P.K. Banerjee</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102017/module1/drawbacks of a conventional shuttle loom.htm">Drawbacks of a conventional shuttle loom</option>
      
      <option  value="116102017/module2/Basic principle of the unconventional shuttleless system.htm">Basic principle of the unconventional shuttleless system</option>
      
      <option  value="116102017/module3/partially guided solid carrier.htm">3.1 : Partially guided solid carrier</option>
      
      <option  value="116102017/module3/fully guided solid carrier.htm">3.2 :	Fully guided solid carrier</option>
      
      <option  value="116102017/module3/basic concepts of fluid carrier.htm">3.3 : Basic concepts of fluid carrier</option>
      
      <option  value="116102017/module4/machine drive and power consumption.htm">Machine drive and power consumption</option>
      
      <option  value="116102017/module5/drive to sley.htm">Drive to sley</option>
      
      <option  value="116102017/module6/fabric selvedge.htm">Fabric selvedge</option>
      
      <option  value="116102017/module7/productivity and fabric quality.htm">Productivity and fabric quality</option>
      
      <option  value="116102017/module8/application of electronics.htm">Application of Electronics</option>
      
      <option  value="116102017/module9/application of composite materials.htm">Application of Composite Materials</option>
      
      <option  value="116102017/module10/qsc and automation in drawing-in.htm">QSC and Automation in Drawing-in</option>
      
      <option  value="116102017/module11/the modern cone winder.htm">11.1 : The Modern Cone Winder</option>
      
      <option  value="116102017/module11/the modern warper.htm">11.2 : The modern warper</option>
      
      <option  value="116102017/module12/noise generation.htm">Noise generation</option>
      
      <option  value="116102017/module13/techno-economics.htm">Techno-Economics </option>
      
      <option  value="116102017/appendix/appendix1.htm">Appendix-I</option>
      
      <option  value="116102017/appendix/appendix2.htm">Appendix-II</option>
      
      <option  value="116102017/appendix/appendix3.htm">Appendix-III</option>
      
      <option  value="116102017/module11/modernization in sizing.htm">11.3 : Modernization in Sizing</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102019</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Quality Control in Textile Industry</strong></td>
	<td><strong>Dr. Dipayan Das </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102019/introduction to quality and quality control/introduction to quality.html">Introduction to Quality</option>
      
      <option  value="116102019/introduction to quality and quality control/introduction to quality control.html">Introduction to Quality Control</option>
      
      <option  value="116102019/statistical description of quality/random variable.html">Random Variable</option>
      
      <option  value="116102019/statistical description of quality/continuous random variable.html">Continuous Random Variable</option>
      
      <option  value="116102019/statistical description of quality/normal distribution.html">Normal Distribution</option>
      
      <option  value="116102019/statistical description of quality/practical example.html">Practical Example</option>
      
      <option  value="116102019/statistical description of quality/discrete random variable.html">Discrete Random Variable</option>
      
      <option  value="116102019/statistical description of quality/binomial distribution.html">Binomial Distribution</option>
      
      <option  value="116102019/statistical description of quality/poission distribution.html">Poission Distribution</option>
      
      <option  value="116102019/statistical inferences on quality/sampling technique.html">Sampling Technique</option>
      
      <option  value="116102019/statistical inferences on quality/point estimation of population parameters.html">Point Estimation of Population Parameters</option>
      
      <option  value="116102019/statistical inferences on quality/interval estimation of population parameters.html">Interval Estimation of Population Parameters</option>
      
      <option  value="116102019/statistical inferences on quality/testing of hypothesis.html">Testing of Hypothesis</option>
      
      <option  value="116102019/shewhart control charts/introduction.html">Introduction</option>
      
      <option  value="116102019/shewhart control charts/basics of shewhart control charts.html">Basics of Shewhart Control Charts</option>
      
      <option  value="116102019/shewhart control charts/shewhart control charts for variables.html">Shewhart Control Charts for Variables</option>
      
      <option  value="116102019/shewhart control charts/shewhart control charts for attributes.html">Shewhart Control Charts for Attributes</option>
      
      <option  value="116102019/process capability analysis/introduction.html">Process Capability Analysis : Introduction</option>
      
      <option  value="116102019/process capability analysis/techniques for process capability analysis.html">Techniques for Process Capability Analysis</option>
      
      <option  value="116102019/process capability analysis/measures of process capability analysis.html">Measures of Process Capability Analysis</option>
      
      <option  value="116102019/process capability analysis/inferential properties of process capability ratios.html">Inferential Properties of Process Capability Ratios</option>
      
      <option  value="116102019/non shewhart control charts/introduction.html">Introduction : Non-Shewhart Control Charts</option>
      
      <option  value="116102019/non shewhart control charts/cusum control chart.html">Cusum Control Chart</option>
      
      <option  value="116102019/non shewhart control charts/ma control chart.html">MA Control Chart</option>
      
      <option  value="116102019/non shewhart control charts/ewma control chart.html">EWMA Control Chart</option>
      
      <option  value="116102019/acceptance sampling techniques/introduction.html">Introduction : Acceptance Sampling Techniques</option>
      
      <option  value="116102019/acceptance sampling techniques/acceptance sampling of attributes.html">Acceptance Sampling of Attributes</option>
      
      <option  value="116102019/acceptance sampling techniques/acceptance sampling of variables.html">Acceptance Sampling of Variables</option>
      
      <option  value="116102019/six sigma and its application to textiles/what is six sigma.html">What is Six Sigma?</option>
      
      <option  value="116102019/six sigma and its application to textiles/six sigma quality.html">Six Sigma Quality</option>
      
      <option  value="116102019/six sigma and its application to textiles/themes of six sigma.html">Themes of Six Sigma</option>
      
      <option  value="116102019/six sigma and its application to textiles/implementation of six sigma.html">Implementation of Six Sigma</option>
      
      <option  value="116102019/six sigma and its application to textiles/process of problem solving using six sigma.html">Process of Problem Solving Using Six Sigma</option>
      
      <option  value="116102019/six sigma and its application to textiles/case studies.html">Case Studies</option>
      
      <option  value="116102019/statistical inferences on quality/terminologies and definitions.html">Terminologies and Definitions</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102029</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Textile Testing</strong></td>
	<td><strong>Dr. Apurba Das</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102029/objective of testing/reasons for textile testing.html">Reasons for Textile Testing</option>
      
      <option  value="116102029/objective of testing/standardization of testing.html">Standardization of Testing</option>
      
      <option  value="116102029/sampling/terms used in sampling.html">Terms used in sampling</option>
      
      <option  value="116102029/sampling/reasons for sampling.html">Reasons for sampling</option>
      
      <option  value="116102029/sampling/aim of sampling.html">Aim of sampling</option>
      
      <option  value="116102029/sampling/types of samphtm.html">Types of samphtm</option>
      
      <option  value="116102029/sampling/fibre sampling from bulk.html">Fibre sampling from bulk</option>
      
      <option  value="116102029/sampling/fiber sampling from combed slive roving yarns.html">Fiber Sampling from Combed Slivers/Rovings/Yarns</option>
      
      <option  value="116102029/sampling/random  tuft samphtm.html">Random / tuft samphtm</option>
      
      <option  value="116102029/sampling/yarn and fabric sampling.html">Yarn and fabric Sampling</option>
      
      <option  value="116102029/fibre length/why fibre length.html">Why fibre length?</option>
      
      <option  value="116102029/fibre length/measurement of individual fibre length cotton fibre length.html">Measurement of Individual Fibre Length:Cotton fibre length</option>
      
      <option  value="116102029/fibre length/wool fibre ength capacitive method.html">WOOL FIBRE LENGTH - Capacitive Method</option>
      
      <option  value="116102029/fibre fineness/importance of fiber fineness.html">Importance of Fiber Fineness</option>
      
      <option  value="116102029/fibre fineness/influence of fibre fineness and maturity on spinning process.html">Influence of Fibre Fineness and Maturity on Spinning Process</option>
      
      <option  value="116102029/fibre fineness/methods of measurement.html">Methods of Measurement</option>
      
      <option  value="116102029/advanced fibre information system/introduction of afis system.html">Introduction of AFIS system</option>
      
      <option  value="116102029/advanced fibre information system/construction and operation of instrument.html">Construction and operation of instrument</option>
      
      <option  value="116102029/advanced fibre information system/data analysis.html">Data Analysis</option>
      
      <option  value="116102029/advanced fibre information system/afis applications.html">AFIS Applications</option>
      
      <option  value="116102029/high volume instrument testing/the basics and background.html">The basics and background</option>
      
      <option  value="116102029/high volume instrument testing/advantages.html">Advantages</option>
      
      <option  value="116102029/moisture and textiles/atmospheric conditions and relative humidity.html">Atmospheric Conditions and Relative Humidity</option>
      
      <option  value="116102029/moisture and textiles/measurement of moisture.html">Measurement of Moisture</option>
      
      <option  value="116102029/yarn hairiness/importance of hairiness.html">Importance of Hairiness</option>
      
      <option  value="116102029/yarn hairiness/causes of hairiness.html">Causes of Hairiness</option>
      
      <option  value="116102029/yarn hairiness/significance adverse of hairiness.html">Significance & Adverse of Hairiness</option>
      
      <option  value="116102029/yarn hairiness/measurement of hairiness.html">Measurement of Hairiness</option>
      
      <option  value="116102029/yarn bulk/yarn bulk.html">Yarn Bulk</option>
      
      <option  value="116102029/evenness/introduction.html">Introduction</option>
      
      <option  value="116102029/evenness/types of irregularity.html">Types of Irregularity</option>
      
      <option  value="116102029/evenness/causes of irregularity.html">Causes of irregularity</option>
      
      <option  value="116102029/evenness/expression of unevenness or irregularity.html">Expression of Unevenness Or Irregularity</option>
      
      <option  value="116102029/evenness/classification of variation.html">Classification of Variation</option>
      
      <option  value="116102029/evenness/importance of yarn evenness.html">Importance of yarn evenness</option>
      
      <option  value="116102029/evenness/effects of irregularity.html">Effects of irregularity</option>
      
      <option  value="116102029/evenness/methods of measuring yarn evenness.html">Methods of Measuring Yarn Evenness</option>
      
      <option  value="116102029/tensile testing/importance of testing.html">Importance of Testing</option>
      
      <option  value="116102029/tensile testing/terminology and definitions.html">Terminology and Definitions</option>
      
      <option  value="116102029/tensile testing/stress strain curve.html">Stress-Strain Curve</option>
      
      <option  value="116102029/tensile testing/factors affecting tensile results.html">Factors affecting tensile results</option>
      
      <option  value="116102029/tensile testing/principles of tensile testing.html">Principles of Tensile Testing</option>
      
      <option  value="116102029/tearing strength/Introduction of tearing strength.html">Introduction of tearing strength</option>
      
      <option  value="116102029/tearing strength/factors affecting tear strength.html">Factors affecting tear strength</option>
      
      <option  value="116102029/tearing strength/measurement of fabric tearing strength.html">Measurement of fabric tearing strength</option>
      
      <option  value="116102029/bursting strength/fabric bursting strength.html">Fabric Bursting Strength</option>
      
      <option  value="116102029/bursting strength/measurement of fabric bursting strength.html">Measurement of Fabric Bursting Strength</option>
      
      <option  value="116102029/abrasion and pilling test of fabrics/pilling testing.html">Pilling Testing</option>
      
      <option  value="116102029/abrasion and pilling test of fabrics/measurement of fabric pilling.html">Measurement of fabric pilling</option>
      
      <option  value="116102029/abrasion and pilling test of fabrics/pilling test by martindale abrasion tester.html">Pilling test by Martindale Abrasion Tester</option>
      
      <option  value="116102029/fabric handle and related properties/bending.html">Bending</option>
      
      <option  value="116102029/fabric handle and related properties/shearing.html">Shearing</option>
      
      <option  value="116102029/fabric handle and related properties/drape.html">Drape</option>
      
      <option  value="116102029/fabric handle and related properties/compression.html">Compression</option>
      
      <option  value="116102029/fabric handle and related properties/kawabata evaluation system of fabric.html">KAWABATA EVALUATION SYSTEM OF FABRIC KESF</option>
      
      <option  value="116102029/fabric handle and related properties/fast system fabric assurance by simple testing.html">FAST SYSTEM FABRIC ASSURANCE BY SIMPLE TESTING</option>
      
      <option  value="116102029/fabric comfort/what is comfort.html">What is comfort ?</option>
      
      <option  value="116102029/fabric comfort/important fabric properties for maintaining thermal comfort.html">Important fabric properties for maintaining thermal comfort</option>
      
      <option  value="116102029/fabric comfort/measurement.html">Measurement</option>
      
      <option  value="116102029/fabric comfort/miscellaneous fabric porsity.html">MISCELLANEOUS </option>
      
      <option  value="116102029/special testing for nonwoven and technical textiles/special testing.html">Special Testing</option>
      
      <option  value="116102029/fabric handle and related properties/crease recovery.html">Crease Recovery</option>
      
      <option  value="116102029/yarn twist/introduction of yarn twist.html">Introduction to Yarn twist</option>
      
      <option  value="116102029/yarn twist/twist effects on yarn and fabric properties.html">Twist effects on yarn and fabric properties</option>
      
      <option  value="116102029/yarn twist/measuring twist.html">Measuring Yarn twist</option>
      
      <option  value="116102029/yarn count/linear density.html">Linear Density</option>
      
      <option  value="116102029/yarn count/measurement of yarn count.html">Measurement of yarn number or count</option>
      
      <option  value="116102029/yarn count/folded yarns.html">Folded yarns </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="samphtm.html" method="get" target="_blank">
	<tr>
	<td><strong>116102034</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Theory of Yarn Structures</strong></td>
	<td><strong>Prof. Bohuslav Neckar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102034/mod01lec01.mp4">Fibers and Yarns : Terms Definitions and Relations</option>
      
      <option  value="116102034/mod01lec02.mp4">Fibers and Yarns : Terms, Definitions and Relations </option>
      
      <option  value="116102034/mod01lec03.mp4">Compression of Fibrous Assemblies</option>
      
      <option  value="116102034/mod01lec04.mp4">Compression of Fibrous Assemblies contd.</option>
      
      <option  value="116102034/mod01lec05.mp4">Pores Among Fibers</option>
      
      <option  value="116102034/mod01lec06.mp4">Pores Among Fibers Contd...</option>
      
      <option  value="116102034/mod01lec07.mp4">Orientation of Fibers</option>
      
      <option  value="116102034/mod01lec08.mp4">Orientation of Fibers Contd.</option>
      
      <option  value="116102034/mod01lec09.mp4">Mechanics of Parallel Fiber Bundles</option>
      
      <option  value="116102034/mod01lec10.mp4">Mechanics of Parallel Fiber Bundles Contd.</option>
      
      <option  value="116102034/mod01lec11.mp4">Modelling of Internal Yarn Geometry</option>
      
      <option  value="116102034/mod01lec12.mp4">Modeling of Internal Yarn Geometry</option>
      
      <option  value="116102034/mod01lec13.mp4">Relations Among Yarn Count T, Twist Z, Packing Density, And Diameter D</option>
      
      <option  value="116102034/mod01lec14.mp4">Relations Among Yarn Count T, Twist Z, Packing Density, And Diameter D Contd..</option>
      
      <option  value="116102034/mod01lec15.mp4">Relations Among Yarn Count T, Twist Z, Packing Density, And Diameter D Contd...</option>
      
      <option  value="116102034/mod01lec16.mp4">Relations Among Yarn Count T, Twist Z, Packing Density, And Diameter D Contd....</option>
      
      <option  value="116102034/mod01lec17.mp4">Bundle Theory of Yarn Unevenness</option>
      
      <option  value="116102034/mod01lec18.mp4">Bundle Theory of Yarn Unevenness Contd.</option>
      
      <option  value="116102034/mod01lec19.mp4">Yarn Strength as a Stochastic Process</option>
      
      <option  value="116102034/mod01lec20.mp4">Yarn Strength as a Stochastic Process Contd..</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116102038</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Yarn Manufacture - II</strong></td>
	<td><strong>Prof. R. Alagirusamy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116102038/combing/introduction to combing.html">Introduction to Combing</option>
      
      <option  value="116102038/combing/factors affecting combing.html">Factors affecting combing</option>
      
      <option  value="116102038/combing/preparation of combing.html">Preparation for combing</option>
      
      <option  value="116102038/combing/combing operation.html">Combing Operation</option>
      
      <option  value="116102038/combing/sliver formation.html">Sliver formation</option>
      
      <option  value="116102038/combing/automation in combing.htm">Automation in Combing</option>
      
      <option  value="116102038/combing/noil extraction theory.html">Theory of Noil Extraction</option>
      
      <option  value="116102038/roving/introduction to roving operation.html">Introduction to Roving Operation</option>
      
      <option  value="116102038/roving/operating regions of roving frame.html">Operating regions of roving frame</option>
      
      <option  value="116102038/roving/builder mechanism-part1.html">Builder Mechanism-Part I</option>
      
      <option  value="116102038/roving/builder mechanism-part2.html">Builder Mechanism-PartII</option>
      
      <option  value="116102038/roving/quality aspects in roving operation.html"> Quality Aspects in Roving Operation</option>
      
      <option  value="116102038/roving/developments in roving frames.html"> Developments in Roving frames</option>
      
      <option  value="116102038/combing/process control in combing.html">Process Control in Combing </option>
      
      <option  value="116102038/ring spinning/introduction to ring spinning frame.htm">Introduction to Ring Spinning Frame</option>
      
      <option  value="116102038/ring spinning/ring frame machine parts-I.htm">Ring frame machine parts-I</option>
      
      <option  value="116102038/ring spinning/ring frame machine parts-II.htm">Ring frame machine parts-II</option>
      
      <option  value="116102038/ring spinning/drive system.htm">Drive system</option>
      
      <option  value="116102038/ring spinning/ring and traveller.htm">Ring and Traveller</option>
      
      <option  value="116102038/ring spinning/accessories.htm">Accessories</option>
      
      <option  value="116102038/ring spinning/automation.htm">Automation</option>
      
      <option  value="116102038/ring spinning/latest development in ring frame.htm">Latest Development in Ring Frame</option>
      
      <option  value="116102038/ring spinning/yarn tension in ring spinning.htm">Yarn Tension in Ring Spinning</option>
      
      <option  value="116102038/ring spinning/spinning balloons.htm">Spinning Balloons</option>
      
      <option  value="116102038/spun yarns/structure of ring frame yarn packages.htm">Structure of Ring Frame Yarn Packages</option>
      
      <option  value="116102038/spun yarns/yarn twist.htm">Yarn Twist</option>
      
      <option  value="116102038/ring spinning/compact spinning.htm">Compact spinning</option>
      
      <option  value="116102038/spun yarns/yarn structure.htm">Yarn Structure</option>
      
      <option  value="116102038/spun yarns/process control aspects.htm">Process Control in Ring Spinning</option>
      
      <option  value="116102038/new spinning systems/open-end spinning.htm">Open-End Spinning</option>
      
      <option  value="116102038/new spinning systems/rotor spinning-1.htm">Rotor Spinning-I</option>
      
      <option  value="116102038/new spinning systems/rotor spinning-2.htm">Rotor Spinning-II</option>
      
      <option  value="116102038/new spinning systems/friction spinning.htm">Friction Spinning </option>
      
      <option  value="116102038/new spinning systems/air jet spinning.htm">Air Jet Spinning</option>
      
      <option  value="116102038/yarn doubling/yarn doubling.htm">Yarn Doubling </option>
      
      <option  value="116102038/yarn doubling/two for one twisters.htm">Two-For-One Twisters </option>
      
      <option  value="116102038/yarn doubling/plied yarn characteristics.htm">Plied Yarn Characteristics </option>
      
      <option  value="116102038/yarn doubling/fancy yarns.htm">Fancy Yarns</option>
      
      <option  value="116102038/ring spinning/forces acting on the traveller.htm">Forces acting on the traveller</option>
      
      <option  value="116102038/new spinning systems/vortex spinning.htm">Vortex Spinning</option>
      
      <option  value="116102038/new spinning systems/introduction to new spinning system.htm">Introduction to New Spinning Technologies</option>
      
      <option  value="116102038/new spinning systems/other spinning systems.htm">Other Spinning Systems</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="samphtm.html" method="get" target="_blank">
	<tr>
	<td><strong>116104044</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Natural Dyes</strong></td>
	<td><strong>Dr. Padma S Vankar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116104044/mod01lec01.mp4">Lecture-01 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec02.mp4">Lecture-02 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec03.mp4">Lecture-03 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec04.mp4">Lecture-04	Natural Dyes</option>
      
      <option  value="116104044/mod01lec05.mp4">Lecture-05 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec06.mp4">Lecture-06	Natural Dyes</option>
      
      <option  value="116104044/mod01lec07.mp4">Lecture-07	Natural Dyes</option>
      
      <option  value="116104044/mod01lec08.mp4">Lecture-08 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec09.mp4">Lecture-09	Natural Dyes</option>
      
      <option  value="116104044/mod01lec10.mp4">Lecture-10 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec11.mp4">Lecture-11 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec12.mp4">Lecture-12 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec13.mp4">Lecture-13 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec14.mp4">Lecture-14	Natural Dyes</option>
      
      <option  value="116104044/mod01lec15.mp4">Lecture-15	Natural Dyes</option>
      
      <option  value="116104044/mod01lec16.mp4">Lecture-16	Natural Dyes</option>
      
      <option  value="116104044/mod01lec17.mp4">Lecture-17	Natural Dyes</option>
      
      <option  value="116104044/mod01lec18.mp4">Lecture-18	Natural Dyes</option>
      
      <option  value="116104044/mod01lec19.mp4">Lecture-19	Natural Dyes</option>
      
      <option  value="116104044/mod01lec20.mp4">Lecture-20	Natural Dyes</option>
      
      <option  value="116104044/mod01lec21.mp4">Lecture-21 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec22.mp4">Lecture-22 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec23.mp4">Lecture-23	Natural Dyes</option>
      
      <option  value="116104044/mod01lec24.mp4">Lecture-24	Natural Dyes</option>
      
      <option  value="116104044/mod01lec25.mp4">Lecture-25	Natural Dyes</option>
      
      <option  value="116104044/mod01lec26.mp4">Lecture-26	Natural Dyes</option>
      
      <option  value="116104044/mod01lec27.mp4">Lecture-27	Natural Dyes</option>
      
      <option  value="116104044/mod01lec28.mp4">Lecture-28 Natural Dyes</option>
      
      <option  value="116104044/mod01lec29.mp4">Lecture-29	Natural Dyes</option>
      
      <option  value="116104044/mod01lec30.mp4">Lecture-30	Natural Dyes</option>
      
      <option  value="116104044/mod01lec31.mp4">Lecture-31	Natural Dyes</option>
      
      <option  value="116104044/mod01lec32.mp4">Lecture-32	Natural Dyes</option>
      
      <option  value="116104044/mod01lec33.mp4">Lecture-33 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec34.mp4">Lecture-34	Natural Dyes</option>
      
      <option  value="116104044/mod01lec35.mp4">Lecture-35	Natural Dyes</option>
      
      <option  value="116104044/mod01lec36.mp4">Lecture-36 	Natural Dyes</option>
      
      <option  value="116104044/mod01lec37.mp4">Lecture-37	Natural Dyes</option>
      
      <option  value="116104044/mod01lec38.mp4">Lecture-38	Natural Dyes</option>
      
      <option  value="116104044/mod01lec39.mp4">Lecture-39	Natural Dyes</option>
      
      <option  value="116104044/mod01lec40.mp4">Lecture-40	Natural Dyes</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116104045</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Textile Effluent and its Management</strong></td>
	<td><strong>Dr. Padma S Vankar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116104045/lecture1.pdf">Textile Effluent �An Introduction</option>
      
      <option  value="116104045/lecture2.pdf">Textile Processing Chemistry</option>
      
      <option  value="116104045/lecture3.pdf">Pollution Control at Mill Stage</option>
      
      <option  value="116104045/lecture4.pdf">Standards for textile effluent</option>
      
      <option  value="116104045/lecture5.pdf">Techniques for effluent treatment</option>
      
      <option  value="116104045/lecture6.pdf">Membrane Technology</option>
      
      <option  value="116104045/lecture7.pdf">Biomass Based Technologies</option>
      
      <option  value="116104045/lecture8.pdf">EFFLUENT TESTING</option>
      
      <option  value="116104045/lecture9.pdf">EFFLUENT QUALITY ASSURANCE PROGRAMME</option>
      
      <option  value="116104045/lecture10.pdf">Data Collection and Audit Preparation</option>
      
      <option  value="116104045/lecture11.pdf">Sizing and DesizingTechnology</option>
      
      <option  value="116104045/lecture12.pdf">DesizingEffluent TreatmentRecycle of Textile DesizingEffluents</option>
      
      <option  value="116104045/lecture13.pdf">Biological Treatment of DesizingEffluents</option>
      
      <option  value="116104045/lecture14.pdf">Microfitration</option>
      
      <option  value="116104045/lecture15.pdf">Ultrafiltration</option>
      
      <option  value="116104045/lecture16.pdf">Nanofiltration</option>
      
      <option  value="116104045/lecture17.pdf">Reverse Osmosis</option>
      
      <option  value="116104045/lecture18.pdf">Electro coagulation</option>
      
      <option  value="116104045/lecture19.pdf">Enzymatic decolourization</option>
      
      <option  value="116104045/lecture20.pdf">Color removal technologies</option>
      
      <option  value="116104045/lecture21.pdf">Effluent Treatment?A Case Study</option>
      
      <option  value="116104045/lecture22.pdf">Process house effluent treatment</option>
      
      <option  value="116104045/lecture23.pdf">Details of Dye Houses</option>
      
      <option  value="116104045/lecture24.pdf">Ultrafiltrationof DesizingEffluents</option>
      
      <option  value="116104045/lecture25.pdf">Solid waste managementfrom textile mills</option>
      
      <option  value="116104045/lecture26.pdf">Activated Carbon treatment for Textile Effluents</option>
      
      <option  value="116104045/lecture27.pdf">Chemical precipitation of textile effluents</option>
      
      <option  value="116104045/lecture28.pdf">Anaerobic digestion of textile effluents</option>
      
      <option  value="116104045/lecture29.pdf">Chemically Enhanced Primary Treatment of Textile Effluents</option>
      
      <option  value="116104045/lecture30.pdf">Secondary Treatment of textile effluents</option>
      
      <option  value="116104045/lecture31.pdf">Tertiary treatment of textile wastewater</option>
      
      <option  value="116104045/lecture32.pdf">Ecofriendly Processing to minimize textile effluent</option>
      
      <option  value="116104045/lecture33.pdf">Textile effluent treatment with roots of Weeds</option>
      
      <option  value="116104045/lecture34.pdf">Sludge Treatment process from textile effluents</option>
      
      <option  value="116104045/lecture35.pdf">Textile Sludge Incineration</option>
      
      <option  value="116104045/lecture36.pdf">Dye binding properties from Textile effluents</option>
      
      <option  value="116104045/lecture37.pdf">New Methods of Textile waste water treatment</option>
      
      <option  value="116104045/lecture38.pdf">Photo electrocatalyticdecolorizationof textile effluentusing ZnOthin films</option>
      
      <option  value="116104045/lecture39.pdf">Phyto-remediation of mixture of dyes in textile effluents</option>
      
      <option  value="116104045/lecture40.pdf">Government Regulations forEffluents</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>116104046</strong></td>
	<td><strong>Textile Engineering</strong></td>
	<td><strong>Natural Dyes</strong></td>
	<td><strong>Dr. Padma S Vankar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="116104046/1.pdf">History of natural dyes</option>
      
      <option  value="116104046/2.pdf">Light color and different dyestuff</option>
      
      <option  value="116104046/3.pdf">Classification of Natural dyes</option>
      
      <option  value="116104046/4.pdf">Relation between Color and Constitution</option>
      
      <option  value="116104046/5.pdf">Toxicity of Natural dyes</option>
      
      <option  value="116104046/6.pdf">Synthetic dyestuff  vs  Natural dyestuff</option>
      
      <option  value="116104046/7.pdf">Oxidation of Colors</option>
      
      <option  value="116104046/12.pdf">Medicinal Properties of Natural dyes</option>
      
      <option  value="116104046/8.pdf">Fundamentals of evaluation of dyestuff</option>
      
      <option  value="116104046/10.pdf">Selection of Plant sources for dye extraction</option>
      
      <option  value="116104046/9.pdf">Methods of Extraction of dyes</option>
      
      <option  value="116104046/11.pdf">Standardization of Vegetable dyes</option>
      
      <option  value="116104046/16.pdf">Ecofriendiness testing of Natural dyes</option>
      
      <option  value="116104046/23.pdf">Green Chemistry</option>
      
      <option  value="116104046/25.pdf">Pretreatments</option>
      
      <option  value="116104046/14.pdf">Mordanting in Natural dyeing</option>
      
      <option  value="116104046/21.pdf">Preparation of cloths for Dyeing</option>
      
      <option  value="116104046/13.pdf">Basics of Natural Dyeing</option>
      
      <option  value="116104046/17.pdf">Natural dyeing</option>
      
      <option  value="116104046/15.pdf">Natural dyeing of Cotton and Silk</option>
      
      <option  value="116104046/30.pdf">Wool dyeing</option>
      
      <option  value="116104046/20.pdf">Fastness properties Assessment</option>
      
      <option  value="116104046/22.pdf">Dissemination of natural dyeing</option>
      
      <option  value="116104046/19.pdf">Dyeing Machines</option>
      
      <option  value="116104046/18.pdf">Vat Dyes</option>
      
      <option  value="116104046/34.pdf">Anthraquinoid- Maddar</option>
      
      <option  value="116104046/26.pdf">Anthocyanin dyeing �Hibiscus</option>
      
      <option  value="116104046/27.pdf">Anthocyanin dyeing  </option>
      
      <option  value="116104046/33.pdf">Carotenoids- Delonix</option>
      
      <option  value="116104046/37.pdf">Flavonoid-Eclipta</option>
      
      <option  value="116104046/35.pdf">Metal complex Dyes</option>
      
      <option  value="116104046/24.pdf">Dyeing of polyester and its blends</option>
      
      <option  value="116104046/28.pdf">Dyeing of Polyamide fibres</option>
      
      <option  value="116104046/29.pdf">Dyeing of Acrylic fibers</option>
      
      <option  value="116104046/40.pdf">Dyeing with Azoic dyes</option>
      
      <option  value="116104046/31.pdf">Dyeing application of reactive dyes</option>
      
      <option  value="116104046/32.pdf">Dyeing application of Sulphur dyes</option>
      
      <option  value="116104046/36.pdf">Acid �Base Indicator-Rose</option>
      
      <option  value="116104046/38.pdf">Dye sensitive solar cells</option>
      
      <option  value="116104046/39.pdf">Fluorescent Brightening agents</option>
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
