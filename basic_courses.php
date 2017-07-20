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
<title>Basic Courses</title>
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

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122101001</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Chemistry I</strong></td>
	<td><strong>Prof. K. Mangala Sunder,Prof. B.L. Tembe</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122101001/Engineering%20Chemistry%20I/Course%20Objectives.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>

 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122101002</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Physics II</strong></td>
	<td><strong>Prof. D.K. Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select3" id="select3" onchange="goToPage('select3');"><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122101002/Engineering%20Physics%20II/Course%20Objectives.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>



 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122101003</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Mathematics I</strong></td>
	<td><strong>Prof. Inder K Rana</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select2" id="select2" onchange="goToPage('select2');"><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122101003/Mathematics%20I/Course%20Objectives.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>


<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122102004</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Applied mechanics</strong></td>
	<td><strong>Prof. R.K. Mittal,Prof. Sanjeev Sanghi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122102004/lec01.mp4">Preliminary Concepts</option>
      
      <option  value="122102004/lec02.mp4">Vector Analysis</option>
      
      <option  value="122102004/lec03.mp4">Analysis of Forces</option>
      
      <option  value="122102004/lec04.mp4">Analysis of Equilibrium</option>
      
      <option  value="122102004/lec05.mp4">Structural Mechanics - Part-1</option>
      
      <option  value="122102004/lec06.mp4">Structural Mechanics - Part-2</option>
      
      <option  value="122102004/lec07.mp4">Friction and its Applications - Part-1</option>
      
      <option  value="122102004/lec08.mp4">Friction and its Applications - Part-2</option>
      
      <option  value="122102004/lec09.mp4">Friction and its Applications - Part-3</option>
      
      <option  value="122102004/lec10.mp4">Properties of Surfaces - Part-1</option>
      
      <option  value="122102004/lec11.mp4">Properties of Surfaces - Part-2</option>
      
      <option  value="122102004/lec12.mp4">Properties of Surfaces - Part-3</option>
      
      <option  value="122102004/lec13.mp4">Moments and Products of Inertia</option>
      
      <option  value="122102004/lec14.mp4">Methods of Virtual Work and Potential Energy - Part-1</option>
      
      <option  value="122102004/lec15.mp4">Methods of Virtual Work and Potential Energy - Part-2</option>
      
      <option  value="122102004/lec16.mp4">Stability of Equilibrium</option>
          </select></td>
	
	</tr>
	</form>
    
        
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122102006</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Environment and Ecology</strong></td>
	<td><strong>Prof. V.B. Upadhyay,Prof. Anuradha Sharma</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT-Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122102006/Environment and Ecology/index.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122102007</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Management Science I</strong></td>
	<td><strong>Prof. Anuradha Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122102007/lec01.mp4">Introduction</option>
      
      <option  value="122102007/lec02.mp4">Motivation</option>
      
      <option  value="122102007/lec03.mp4">Management</option>
      
      <option  value="122102007/lec04.mp4">Work Ethics</option>
      
      <option  value="122102007/lec05.mp4">Comparison Between Theories</option>
      
      <option  value="122102007/lec06.mp4">Job Enrichment</option>
      
      <option  value="122102007/lec07.mp4">Team Building and Participation</option>
      
      <option  value="122102007/lec08.mp4">Other Leadership Styles</option>
      
      <option  value="122102007/lec09.mp4">Empowerment</option>
      
      <option  value="122102007/lec10.mp4">Barriers to Communication</option>
      
      <option  value="122102007/lec11.mp4">Issues in Leadership</option>
      
      <option  value="122102007/lec12.mp4">Participation Management and Team Working Part - 1</option>
      
      <option  value="122102007/lec13.mp4">Participation Management and Team Working Part - 2</option>
      
      <option  value="122102007/lec14.mp4">Participation Management and Team Working Part - 3</option>
      
      <option  value="122102007/lec16.mp4">Participative management and Team Working Part - 5</option>
      
      <option  value="122102007/lec17.mp4">Organizations</option>
      
      <option  value="122102007/lec18.mp4">Some Management Concepts - Part - 1</option>
      
      <option  value="122102007/lec19.mp4">Some Management Concepts - Part - 2</option>
      
      <option  value="122102007/lec20.mp4">Some Management Concepts - Part - 3</option>
      
      <option  value="122102007/lec21.mp4">Diversity at Work Place and Management Issues</option>
      
      <option  value="122102007/lec22.mp4">Industrial Relations and Conflict Management - Part - 1</option>
      
      <option  value="122102007/lec23.mp4">Industrial Relations and Conflict Management - Part - 2</option>
      
      <option  value="122102007/lec24.mp4">Selection and Training of Employees</option>
      
      <option  value="122102007/lec25.mp4">Performance Management - Part - 1</option>
      
      <option  value="122102007/lec26.mp4">Performance Management - Part - 2</option>
      
      <option  value="122102007/lec27.mp4">Performance Management - Part - 3</option>
      
      <option  value="122102007/lec29.mp4">Management Research: Some Methodological Issues-Part-2</option>
      
      <option  value="122102007/lec30.mp4">Corporate Social Responsibilities</option>
      
      <option  value="122102007/lec31.mp4">Women, Work and Organizations: Management Perspective - Part - 1</option>
      
      <option  value="122102007/lec32.mp4">Women, Work and Organizations: Management Perspective - Part - 2</option>
      
      <option  value="122102007/lec33.mp4">Selection, Recruitment and Training</option>
      
      <option  value="122102007/lec34.mp4">Management of Change in Organization</option>
      
      <option  value="122102007/lec35.mp4">Organizational development</option>
      
      <option  value="122102007/lec36.mp4">Values, Ethics and Corporate Social Responsibilities - Part - 1</option>
      
      <option  value="122102007/lec37.mp4">Values, Ethics and Corporate Social Responsibilities - Part - 2</option>
      
      <option  value="122102007/lec38.mp4">Management: Now and Beyond - Part - 1</option>
      
      <option  value="122102007/lec39.mp4">Management: Now and Beyond - Part - 2</option>
      
      <option  value="122102007/lec40.mp4">Management: Now and Beyond - Part - 3</option>
      
      <option  value="122102007/lec42.mp4">Conclusions</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122102008</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Materials Science</strong></td>
	<td><strong>Prof. S.K. Gupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122102008/lec01.mp4">Introduction</option>
      
      <option  value="122102008/lec02.mp4">Internal Energy Enthalpy</option>
      
      <option  value="122102008/lec03.mp4">Crystal Geometry</option>
      
      <option  value="122102008/lec04.mp4">Crystal Geometry</option>
      
      <option  value="122102008/lec05.mp4">Crystal Geometry</option>
      
      <option  value="122102008/lec06.mp4">Crystal Structure</option>
      
      <option  value="122102008/lec08.mp4">Close Packing of Spheres of Equal Size</option>
      
      <option  value="122102008/lec09.mp4">Structure of Solid Materials</option>
      
      <option  value="122102008/lec10.mp4">Non Crystalline Solids</option>
      
      <option  value="122102008/lec11.mp4">Polymers (Contd.)</option>
      
      <option  value="122102008/lec12.mp4">Crystal Imperfections</option>
      
      <option  value="122102008/lec13.mp4">Crystal Imperfections</option>
      
      <option  value="122102008/lec14.mp4">Crystal Imperfections</option>
      
      <option  value="122102008/lec15.mp4">Crystal Imperfections</option>
      
      <option  value="122102008/lec16.mp4">Crystal Imperfections</option>
      
      <option  value="122102008/lec17.mp4">Phase Diagrams</option>
      
      <option  value="122102008/lec18.mp4">Phase Diagrams</option>
      
      <option  value="122102008/lec19.mp4">Phase Diagrams</option>
      
      <option  value="122102008/lec20.mp4">Diffusion in Solids</option>
      
      <option  value="122102008/lec21.mp4">Diffusion in Solids</option>
      
      <option  value="122102008/lec22.mp4">Phase Transformations</option>
      
      <option  value="122102008/lec23.mp4">Phase Transformations</option>
      
      <option  value="122102008/lec24.mp4">Phase Transformations</option>
      
      <option  value="122102008/lec25.mp4">Transformations in Steels: Eutectoid Steel</option>
      
      <option  value="122102008/lec26.mp4">Phase Transformations; Precipitation Hardening</option>
      
      <option  value="122102008/lec27.mp4">Mechanical Behaviour of Materials</option>
      
      <option  value="122102008/lec28.mp4">Plastic Deformation</option>
      
      <option  value="122102008/lec29.mp4">Plastic Deformation</option>
      
      <option  value="122102008/lec30.mp4">Plastic Deformation</option>
      
      <option  value="122102008/lec31.mp4">Strengthening Mechanisms Creep</option>
      
      <option  value="122102008/lec32.mp4">Fracture</option>
      
      <option  value="122102008/lec34.mp4">Conductors and Resistors</option>
      
      <option  value="122102008/lec35.mp4">Conductors and Resistors</option>
      
      <option  value="122102008/lec36.mp4">Superconductors</option>
      
      <option  value="122102008/lec37.mp4">Superconductors</option>
      
      <option  value="122102008/lec38.mp4">Semiconductors</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122102009</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Numerical Methods and Computation</strong></td>
	<td><strong>Prof. S. R. K. Iyengar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122102009/lec01.mp4">Errors in Computation and Numerical Instability</option>
      
      <option  value="122102009/lec02.mp4">Solution of Nonlinear Algebraic Equations - Part-1</option>
      
      <option  value="122102009/lec03.mp4">Solution of Nonlinear Algebraic Equations - Part-2</option>
      
      <option  value="122102009/lec04.mp4">Solution of Nonlinear Algebraic Equations - Part-3</option>
      
      <option  value="122102009/lec05.mp4">Solution of Nonlinear Algebraic Equations - Part-4</option>
      
      <option  value="122102009/lec06.mp4">Solution of Nonlinear Algebraic Equations - Part-5</option>
      
      <option  value="122102009/lec07.mp4">Solution of Nonlinear Algebraic Equations - Part-6</option>
      
      <option  value="122102009/lec08.mp4">Solution of Nonlinear Algebraic Equations - Part-7</option>
      
      <option  value="122102009/lec09.mp4">Solution of Nonlinear Algebraic Equations - Part-8</option>
      
      <option  value="122102009/lec10.mp4">Solution of Nonlinear Algebraic Equations - Part-9</option>
      
      <option  value="122102009/lec11.mp4">Solution of a System of Linear Algebraic Equations</option>
      
      <option  value="122102009/lec12.mp4">Solution of a System of Linear Algebraic Equations - Part-2</option>
      
      <option  value="122102009/lec13.mp4">Solution of a System of Linear Algebraic Equations - Part-3</option>
      
      <option  value="122102009/lec14.mp4">Solution of a System of Linear Algebraic Equations - Part-4</option>
      
      <option  value="122102009/lec15.mp4">Solution of a System of Linear Algebraic Equations - Part-5</option>
      
      <option  value="122102009/lec16.mp4">Solution of a System of Linear Algebraic Equations - Part-6</option>
      
      <option  value="122102009/lec17.mp4">Solution of a System of Linear Algebraic Equations - Part-7</option>
      
      <option  value="122102009/lec18.mp4">Solution of a System of Linear Algebraic Equations - Part-8</option>
      
      <option  value="122102009/lec19.mp4">Solution of a System of Linear Algebraic Equations - Part-9</option>
      
      <option  value="122102009/lec20.mp4">Solution of a System of Linear Algebraic Equations - Part-10</option>
      
      <option  value="122102009/lec21.mp4">Solution of a System of Linear Algebraic Equations - Part-11</option>
      
      <option  value="122102009/lec22.mp4">Solution of a System of Linear Algebraic Equations - Part-12</option>
      
      <option  value="122102009/lec23.mp4">Solution of a System of Linear Algebraic Equations - Part-13</option>
      
      <option  value="122102009/lec24.mp4">Solution of a System of Linear Algebraic Equations - Part-14</option>
      
      <option  value="122102009/lec25.mp4">Interpolation and Approximation - Part-1</option>
      
      <option  value="122102009/lec26.mp4">Interpolation and Approximation - Part-2</option>
      
      <option  value="122102009/lec27.mp4">Interpolation and Approximation - Part-3</option>
      
      <option  value="122102009/lec28.mp4">Interpolation and Approximation - Part-4</option>
      
      <option  value="122102009/lec29.mp4">Interpolation and Approximation - Part-5</option>
      
      <option  value="122102009/lec30.mp4">Interpolation and Approximation - Part-6</option>
      
      <option  value="122102009/lec31.mp4">Interpolation and Approximation - Part-7</option>
      
      <option  value="122102009/lec32.mp4">Interpolation and Approximation - Part-8</option>
      
      <option  value="122102009/lec33.mp4">Interpolation and Approximation - Part-9</option>
      
      <option  value="122102009/lec34.mp4">Numerical Differentiation and Integration - Part-1</option>
      
      <option  value="122102009/lec35.mp4">Numerical Differentiation and Integration - Part-2</option>
      
      <option  value="122102009/lec36.mp4">Numerical Differentiation and Integration - Part-3</option>
      
      <option  value="122102009/lec37.mp4">Numerical Differentiation and Integration - Part-4</option>
      
      <option  value="122102009/lec38.mp4">Numerical Differentiation and Integration - Part-5</option>
      
      <option  value="122102009/lec39.mp4">Numerical Differentiation and Integration - Part-6</option>
      
      <option  value="122102009/lec40.mp4">Numerical Differentiation and Integration - Part-7</option>
      
      <option  value="122102009/lec41.mp4">Numerical Differentiation and Integration - Part-8</option>
          </select></td>
	
	</tr>
	</form>
    
 
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122103010</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Physics I (Experiment)</strong></td>
	<td><strong>Prof. S. Ravi,Prof. Pratima Agarwal,Prof. Alika Khare </strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122103010/engg_phy2/index_exp.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122103011</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Physics I (Theory)</strong></td>
	<td><strong>Prof. S. Ravi,Prof. Pratima Agarwal,Prof. Alika Khare </strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122103011/engg_physics/index_cont.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122103012</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Mathematics III</strong></td>
	<td><strong>Prof. Durga C Dalal,Dr. M. Guru Prem Prasad</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122103012/maths3/index.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
     
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122104013</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Basic Electronics</strong></td>
	<td><strong>Prof. Joseph John,Prof. Yatindra N Singh</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122104013/esc102/index.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122104014</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Mechanics</strong></td>
	<td><strong>Prof. Manoj K Harbola</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122104014/engg_mechanics/ui/About-Faculty.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122104018</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Mathematics II</strong></td>
	<td><strong>Prof. G. Santhanam,Prof. V. Raghavendra,Prof. A.K. Lal,Prof. P. Chandra
</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122104014/mathematics-2/index.html">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
    
      
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122104019</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Numerical Analysis in Computer Programming</strong></td>
	<td><strong>Prof. P.B. Sunil Kumar,Prof. M.K. Kadalbajoo,Prof. V. Raghavendra,Prof. Rathish Kumar</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122104019/Numerical Analysis/front.htm">contents</option>
      
      
          </select></td>
	
	</tr>
	</form>
    
    
     
    
        
      
    
       
       
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122104015</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Mechanics</strong></td>
	<td><strong>Prof. Manoj K Harbola</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122104015/lec01.mp4">Engineering Mechanics</option>
      
      <option  value="122104015/lec02.mp4">Equilibrium - I</option>
      
      <option  value="122104015/lec03.mp4">Equilibrium - II</option>
      
      <option  value="122104015/lec04.mp4">Equilibrium - III</option>
      
      <option  value="122104015/lec05.mp4">Plan Trusses - I</option>
      
      <option  value="122104015/lec06.mp4">Plan Trusses - II</option>
      
      <option  value="122104015/lec07.mp4">Friction</option>
      
      <option  value="122104015/lec08.mp4">Properties of Surfaces - I</option>
      
      <option  value="122104015/lec09.mp4">Properties of Surfaces - II</option>
      
      <option  value="122104015/lec10.mp4">Properties of Surfaces - III</option>
      
      <option  value="122104015/lec11.mp4">Method of Virtual Work</option>
      
      <option  value="122104015/lec12.mp4">Motion of Particles Planar Polar Coordinates</option>
      
      <option  value="122104015/lec13.mp4">Motion With Constraints</option>
      
      <option  value="122104015/lec14.mp4">Motion of Particle With Friction</option>
      
      <option  value="122104015/lec15.mp4">Motion of Particles With Drag</option>
      
      <option  value="122104015/lec16.mp4">Momentum</option>
      
      <option  value="122104015/lec17.mp4">Work and Energy - I</option>
      
      <option  value="122104015/lec18.mp4">Work and Energy - II</option>
      
      <option  value="122104015/lec19.mp4">Work and Energy - III</option>
      
      <option  value="122104015/lec20.mp4">Work and Energy - IV</option>
      
      <option  value="122104015/lec21.mp4">Rotational Motion - I</option>
      
      <option  value="122104015/lec22.mp4">Rotational Motion - II</option>
      
      <option  value="122104015/lec23.mp4">Rotational Motion - III</option>
      
      <option  value="122104015/lec24.mp4">Rotational Motion - IV</option>
      
      <option  value="122104015/lec25.mp4">Rotational Motion - V</option>
      
      <option  value="122104015/lec26.mp4">Rotational Motion - VI</option>
      
      <option  value="122104015/lec27.mp4">Simple Harmonic Motion - I</option>
      
      <option  value="122104015/lec28.mp4">Simple Harmonic Motion - II</option>
      
      <option  value="122104015/lec29.mp4">Simple Harmonic Motion - III</option>
      
      <option  value="122104015/lec30.mp4">Motion in Uniformly Accelerating Frames</option>
      
      <option  value="122104015/lec31.mp4">Motion In Rotating Frame</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122104016</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Physics II</strong></td>
	<td><strong>Prof. S. Raychaudhuri,Prof. V. Ravishankar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122104016/lec01.mp4">Module - 1 lecture - 1</option>
      
      <option  value="122104016/lec02.mp4">Module - 1 lecture - 2</option>
      
      <option  value="122104016/lec03.mp4">Module - 1 lecture - 3</option>
      
      <option  value="122104016/lec04.mp4">Module - 1 lecture - 4</option>
      
      <option  value="122104016/lec05.mp4">Module - 2 lecture - 1</option>
      
      <option  value="122104016/lec06.mp4">Module - 2 lecture - 2</option>
      
      <option  value="122104016/lec07.mp4">Module - 2 lecture - 3</option>
      
      <option  value="122104016/lec08.mp4">Module - 2 lecture - 4</option>
      
      <option  value="122104016/lec09.mp4">Module - 2 lecture - 5</option>
      
      <option  value="122104016/mod3Lect01.mp4">Module-3 lecture - 1</option>
      
      <option  value="122104016/mod3Lect02.mp4">Module-3 lecture - 2</option>
      
      <option  value="122104016/mod3Lect03.mp4">Module-3 lecture - 3</option>
      
      <option  value="122104016/mod3Lect04.mp4">Module-3 lecture - 4</option>
      
      <option  value="122104016/mod3Lect06.mp4">Module-3 lecture - 6</option>
      
      <option  value="122104016/mod3Lect07.mp4">Module-3 lecture - 7</option>
      
      <option  value="122104016/mod3Lect08.mp4">Module-3 lecture - 8</option>
      
      <option  value="122104016/mod4Lect01.mp4">Module-4 lecture - 1</option>
      
      <option  value="122104016/mod4Lect02.mp4">Module-4 lecture - 2</option>
      
      <option  value="122104016/mod4Lect03.mp4">Module-4 lecture - 3</option>
      
      <option  value="122104016/mod4Lect04.mp4">Module-4 lecture - 4</option>
      
      <option  value="122104016/mod4Lect05.mp4">Module-4 lecture - 5</option>
      
      <option  value="122104016/mod4Lect06.mp4">Module-4 lecture - 6</option>
      
      <option  value="122104016/mod4Lect07.mp4">Module-4 lecture - 7</option>
      
      <option  value="122104016/mod4Lect08.mp4">Module-4 lecture - 8</option>
      
      <option  value="122104016/mod4Lect09.mp4">Module-4 lecture - 9</option>
      
      <option  value="122104016/mod4Lect10.mp4">Module-4 lecture - 10</option>
      
      <option  value="122104016/mod4Lect11.mp4">Module-4 lecture - 11</option>
      
      <option  value="122104016/mod4Lect12.mp4">Module-4 lecture - 12</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122104017</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Mathematics I</strong></td>
	<td><strong>Dr. P. Shunmugaraj,Prof. Shobha Madan,Prof. Swagato K. Ray</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122104017/lec01.mp4">Real Number</option>
      
      <option  value="122104017/lec02.mp4">Sequences I</option>
      
      <option  value="122104017/lec03.mp4">Sequences II</option>
      
      <option  value="122104017/lec04.mp4">Sequences III</option>
      
      <option  value="122104017/lec05.mp4">Continuous Function</option>
      
      <option  value="122104017/lec06.mp4">Properties of Continuous Function</option>
      
      <option  value="122104017/lec07.mp4">Uniform Continuity</option>
      
      <option  value="122104017/lec08.mp4">Differentiable Functions</option>
      
      <option  value="122104017/lec09.mp4">Mean Value Theorem</option>
      
      <option  value="122104017/lec10.mp4">Maxima - Minima</option>
      
      <option  value="122104017/lec11.mp4">Taylor's Theorem</option>
      
      <option  value="122104017/lec12.mp4">Curve Sketching</option>
      
      <option  value="122104017/lec13.mp4">Infinite Series I</option>
      
      <option  value="122104017/lec14.mp4">Infinite Series II</option>
      
      <option  value="122104017/lec15.mp4">Tests of Convergence</option>
      
      <option  value="122104017/lec16.mp4">Power Series</option>
      
      <option  value="122104017/lec17.mp4">Riemann Integral</option>
      
      <option  value="122104017/lec18.mp4">Riemann Integrable Functions</option>
      
      <option  value="122104017/lec19.mp4">Applications of Riemann Integral</option>
      
      <option  value="122104017/lec20.mp4">Length of a curve</option>
      
      <option  value="122104017/lec21.mp4">Line Integrals</option>
      
      <option  value="122104017/lec22.mp4">Functions of Several Variables</option>
      
      <option  value="122104017/lec23.mp4">Differentiation</option>
      
      <option  value="122104017/lec24.mp4">Derivatives</option>
      
      <option  value="122104017/lec25.mp4">Mean Value Theorem</option>
      
      <option  value="122104017/lec26.mp4">Maxima Minima</option>
      
      <option  value="122104017/lec27.mp4">Method of Lagrange Multipliers</option>
      
      <option  value="122104017/lec28.mp4">Multiple Integrals</option>
      
      <option  value="122104017/lec29.mp4">Surface Integrals</option>
      
      <option  value="122104017/lec30.mp4">Green's Theorem</option>
      
      <option  value="122104017/lec31.mp4">Stokes Theorem</option>
      
      <option  value="122104017/lec32.mp4">Gauss Divergence Theorem</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122105020</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Human Resource Management-I</strong></td>
	<td><strong>Prof. Kalyan Chakravarti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122105020/lec01.mp4">Nature and Scope of HRM</option>
      
      <option  value="122105020/lec02.mp4">Analysing and Designing Job: I</option>
      
      <option  value="122105020/lec03.mp4">Analysing and Designing Job - II</option>
      
      <option  value="122105020/lec04.mp4">Human Resource Planning - I</option>
      
      <option  value="122105020/lec05.mp4">Human Resource Planning - II</option>
      
      <option  value="122105020/lec06.mp4">Recruitment and Selection</option>
      
      <option  value="122105020/lec07.mp4">Performance Evaluation and Appraisal - I</option>
      
      <option  value="122105020/lec08.mp4">Performance Evaluation and Appraisal (Contd...)</option>
      
      <option  value="122105020/lec09.mp4">Training and Development</option>
      
      <option  value="122105020/lec10.mp4">Employee Welfare</option>
      
      <option  value="122105020/lec11.mp4">Safety, Health, Environment</option>
      
      <option  value="122105020/lec12.mp4">Industrial Relations</option>
      
      <option  value="122105020/lec13.mp4">Total Quality Management</option>
      
      <option  value="122105020/lec14.mp4">Organization Culture</option>
      

      <option  value="122105020/lec15.mp4">Change Management - I</option>
      
      <option  value="122105020/lec16.mp4">Change Management Part - II</option>
      
      <option  value="122105020/lec17.mp4">Wage and Salary Administration</option>
      
      <option  value="122105020/lec18.mp4">Career Planning Part - I</option>
      
      <option  value="122105020/lec19.mp4">Career Planning Part - II</option>
      
      <option  value="122105020/lec20.mp4">Contemporary Issues in HRM - I</option>
      
      <option  value="122105020/lec21.mp4">Contemporary Issues in HRM - II</option>
      
      <option  value="122105020/lec22.mp4">Contemporary Issues in HRM - III</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122105021</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Leadership</strong></td>
	<td><strong>Prof. Kalyan Chakravarti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122105021/lec01.mp4">Introduction to Leadership: Functions</option>
      
      <option  value="122105021/lec02.mp4">Leadership Roles: Leaders Vs Managers: Theories</option>
      
      <option  value="122105021/lec03.mp4">Leadership Styles: Effective Vs Successful Managers</option>
      
      <option  value="122105021/lec04.mp4">Leadership Behaviour: Emergence: Leadership and Trust</option>
      
      <option  value="122105021/lec05.mp4">Leadership Styles: Adaptation-Studies/Case: From Sindhi to Siddhi (Part-I)</option>
      
      <option  value="122105021/lec06.mp4">Case: From Sindhi to Siddhi (Part-II) Transformation Leadership</option>
      
      <option  value="122105021/lec07.mp4">Leadership Skills: Leadership and Management</option>
      
      <option  value="122105021/lec08.mp4">Competencies and Skills of Leaders: Issues in Organizational Leadership</option>
      
      <option  value="122105021/lec09.mp4">Case: The DVC Story-A First Person Account - Leadership in Action (Part-I)</option>
      
      <option  value="122105021/lec10.mp4">Case: The DVC Story-A First Person Account- Leadership in Action (Part-II)</option>
      
      <option  value="122105021/lec11.mp4">Case: Rai Bahadur Mohan Singh Oberoi (Part-I) Issues in Institution Building</option>
      
      <option  value="122105021/lec12.mp4">Case:Rai Bahadur Mohan Singh Oberoi (Part-II)</option>
      
      <option  value="122105021/lec13.mp4">Case: Self Regulation-The Key to Institution Building - Framework of Institution Building</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122105022</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Management Information System</strong></td>
	<td><strong>Prof. Biswajit Mahanty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122105022/lec01.mp4">Introduction - I </option>
      
      <option  value="122105022/lec02.mp4">Introduction - II </option>
      
      <option  value="122105022/lec03.mp4">Introduction - III </option>
      
      <option  value="122105022/lec04.mp4">Concept of Information - I </option>
      
      <option  value="122105022/lec05.mp4">Concept of Information - II </option>
      
      <option  value="122105022/lec06.mp4">Decision Making Process </option>
      
      <option  value="122105022/lec07.mp4">Impact of IS on Management - I </option>
      
      <option  value="122105022/lec08.mp4">Impact of IS on Management - II </option>
      
      <option  value="122105022/lec09.mp4">Hardware Software Overview - I </option>
      
      <option  value="122105022/lec10.mp4">Hardware Software Overview - II</option>
      
      <option  value="122105022/lec11.mp4">Knowledge Management </option>
      
      <option  value="122105022/lec12.mp4">Learning Organization </option>
      
      <option  value="122105022/lec13.mp4">Decision Analysis - I </option>
      
      <option  value="122105022/lec14.mp4">Decision Analysis - II </option>
      
      <option  value="122105022/lec15.mp4">Decision Analysis - III </option>
      
      <option  value="122105022/lec16.mp4">Data Flow Diagrams - I </option>
      
      <option  value="122105022/lec17.mp4">Data Flow Diagrams - II </option>
      
      <option  value="122105022/lec18.mp4">Data Flow Diagrams - III </option>
      
      <option  value="122105022/lec19.mp4">Data Flow Diagrams - IV</option>
      
      <option  value="122105022/lec20.mp4">System Design - I </option>
      
      <option  value="122105022/lec21.mp4">System Design - II </option>
      
      <option  value="122105022/lec22.mp4">DBMS - I </option>
      
      <option  value="122105022/lec23.mp4">DBMS - II</option>
      
      <option  value="122105022/lec24.mp4">DBMS - III </option>
      
      <option  value="122105022/lec25.mp4">DBMS - IV </option>
      
      <option  value="122105022/lec26.mp4">DBMS - V </option>
      
      <option  value="122105022/lec27.mp4">OOAD - I </option>
      
      <option  value="122105022/lec28.mp4">OOAD - II </option>
      
      <option  value="122105022/lec29.mp4">OOAD - III </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122105023</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Physics I - Oscillations & Waves</strong></td>
	<td><strong>Prof. S. Bharadwaj</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122105023/lec01.mp4">Simple Harmonic Oscillators</option>
      
      <option  value="122105023/lec02.mp4">Damped Oscillator - I</option>
      
      <option  value="122105023/lec03.mp4">Damped Oscillator - II</option>
      
      <option  value="122105023/lec04.mp4">Oscillator With External Forcing - I</option>
      
      <option  value="122105023/lec05.mp4">Oscillator With External Forcing</option>
      
      <option  value="122105023/lec06.mp4">Resonance</option>
      
      <option  value="122105023/lec07.mp4">Coupled Oscillations</option>
      
      <option  value="122105023/lec08.mp4">Sinusoidal Plane Waves - I</option>
      
      <option  value="122105023/lec09.mp4">Electromagnetic waves - I</option>
      
      <option  value="122105023/lec10.mp4">Electromagnetic Waves - II</option>
      
      <option  value="122105023/lec11.mp4">The Vector Nature of Electromagnetic Waves</option>
      
      <option  value="122105023/lec12.mp4">The Electromagnetic Spectrum</option>
      
      <option  value="122105023/lec13.mp4">The Electromagnetic Spectrum - II</option>
      
      <option  value="122105023/lec14.mp4">Interference - I</option>
      
      <option  value="122105023/lec15.mp4">Interference - II</option>
      
      <option  value="122105023/lec16.mp4">Interference - III</option>
      
      <option  value="122105023/lec17.mp4">Interference - IV</option>
      
      <option  value="122105023/lec18.mp4">Coherence</option>
      
      <option  value="122105023/lec19.mp4">Coherence</option>
      
      <option  value="122105023/lec20.mp4">Diffraction - I</option>
      
      <option  value="122105023/lec21.mp4">Diffraction - II</option>
      
      <option  value="122105023/lec22.mp4">Diffraction - III</option>
      
      <option  value="122105023/lec23.mp4">Diffraction - IV</option>
      
      <option  value="122105023/lec24.mp4">X-Ray Diffraction</option>
      
      <option  value="122105023/lec25.mp4">Beats</option>
      
      <option  value="122105023/lec26.mp4">The Wave Equation</option>
      
      <option  value="122105023/lec27.mp4">Solving the Wave Equation</option>
      
      <option  value="122105023/lec28.mp4">Waves</option>
      
      <option  value="122105023/lec29.mp4">Standing Waves</option>
      
      <option  value="122105023/lec30.mp4">Standing Waves</option>
      
      <option  value="122105023/lec31.mp4">Polarization</option>
      
      <option  value="122105023/lec32.mp4">Compton Effect</option>
      
      <option  value="122105023/lec33.mp4">Wave - Particle Duality</option>
      
      <option  value="122105023/lec34.mp4">Wave - Particle Duality</option>
      
      <option  value="122105023/lec35.mp4">Probability Amplitude</option>
      
      <option  value="122105023/lec36.mp4">Probability</option>
      
      <option  value="122105023/lec37.mp4">Schrodinger Wave Equation</option>
      
      <option  value="122105023/lec38.mp4">Measurements</option>
      
      <option  value="122105023/lec39.mp4">Particle in a Potential</option>
      
      <option  value="122105023/lec40.mp4">Potential Well</option>
      
      <option  value="122105023/lec41.mp4">Potential Well</option>
      
      <option  value="122105023/lec42.mp4">Potential Well</option>
      
      <option  value="122105023/lec43.mp4">Quantum Tunneling</option>
      
      <option  value="122105023/lec44.mp4">Quantum Tunneling</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122105024</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Strategic Management</strong></td>
	<td><strong>Prof. Kalyan Chakravarti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122105024/lec01.mp4">Strategy: Philosophy;Competition;Competitive Advantage - Part - I</option>
      
      <option  value="122105024/lec02.mp4">Strategy: Philosophy;Competition;Competitive Advantage - Part - II</option>
      
      <option  value="122105024/lec03.mp4">Case Study - Group Presentation on Case - I (Baddi`s Solvent)</option>
      
      <option  value="122105024/lec04.mp4">Case Study - Group Presentation on Case - II</option>
      
      <option  value="122105024/lec05.mp4">Case Study - Group Presentation on Case - III</option>
      
      <option  value="122105024/lec06.mp4">Case Study - Group Presentation on Case - IV Form</option>
      
      <option  value="122105024/lec07.mp4">Strategy: Implementation in Organizations</option>
      
      <option  value="122105024/lec08.mp4">Strategy: Design: Process: Managing Strategic Change</option>
      
      <option  value="122105024/lec09.mp4">Case Study: The House of Tata</option>
      
      <option  value="122105024/lec10.mp4">Case Study: The House of Tata</option>
      
      <option  value="122105024/lec11.mp4">Group Presentation - II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122106025</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Basic Electronics and Lab</strong></td>
	<td><strong>Prof. T.S. Natarajan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122106025/lec01.mp4">Introduction to Basic Electronics</option>
      
      <option  value="122106025/lec02.mp4">Electronic Devices 1</option>
      
      <option  value="122106025/lec03.mp4">Electronics Devices II Resistor in series and parallel</option>
      
      <option  value="122106025/lec04.mp4">Some Useful Laws in Basic Electronics</option>
      
      <option  value="122106025/lec05.mp4">Some Useful Theorems in Basic Electronics</option>
      
      <option  value="122106025/lec06.mp4">Semi Conductor Diodes</option>
      
      <option  value="122106025/lec07.mp4">Applications of Diodes</option>
      
      <option  value="122106025/lec08.mp4">Wave Shaping using Diodes</option>
      
      <option  value="122106025/lec09.mp4">Zener Diode Characteristics</option>
      
      <option  value="122106025/lec10.mp4">Transistors</option>
      
      <option  value="122106025/lec11.mp4">Transistor Biasing - Common Emitter Circuits, Fixed Bias, Collector to base Bias</option>
      
      <option  value="122106025/lec12.mp4">Transistor Biasing - Emitter Current Bias, Thermal Stability (RC Coupled Amplifier)</option>
      
      <option  value="122106025/lec13.mp4">Basic Characteristic of an Amplifier - Simple Transistor model, Common emitter Amplifier</option>
      
      <option  value="122106025/lec14.mp4">Hybrid Equivalent Circuit, H-Parameters</option>
      
      <option  value="122106025/lec15.mp4">Circuit Analysis using H-Parameters</option>
      
      <option  value="122106025/lec16.mp4">Frequency Response of Amplifiers</option>
      
      <option  value="122106025/lec17.mp4">Frequency Analysis</option>
      
      <option  value="122106025/lec18.mp4">Power Amplifiers</option>
      
      <option  value="122106025/lec19.mp4">Differential Amplifiers Circuit</option>
      
      <option  value="122106025/lec20.mp4">Integrated Chip</option>
      
      <option  value="122106025/lec21.mp4">Typical Characteristic of Operation Amplifier</option>
      
      <option  value="122106025/lec22.mp4">Four Types of Feed Back</option>
      
      <option  value="122106025/lec23.mp4">Four Types of Feed Back</option>
      
      <option  value="122106025/lec24.mp4">Mathematical Operations</option>
      
      <option  value="122106025/lec25.mp4">Mathematical Operations</option>
      
      <option  value="122106025/lec26.mp4">Mathematical Operations</option>
      
      <option  value="122106025/lec27.mp4">Characteristics of Operation Amplifier</option>
      
      <option  value="122106025/lec28.mp4">Characteristics of Operation Amplifier</option>
      
      <option  value="122106025/lec29.mp4">Characteristics of Operation Amplifier</option>
      
      <option  value="122106025/lec30.mp4">Inverter/Non-Inverter Circuits</option>
      
      <option  value="122106025/lec31.mp4">Applications of Op Amps</option>
      
      <option  value="122106025/lec32.mp4">Non-Linear Op Amp circuits</option>
      
      <option  value="122106025/lec33.mp4">Applications of Op Amps</option>
      
      <option  value="122106025/lec34.mp4">Active Diode Circuits</option>
      
      <option  value="122106025/lec35.mp4">Oscillators</option>
      
      <option  value="122106025/lec36.mp4">Logarithmic and Anti-Logarithmic Amplifier</option>
      
      <option  value="122106025/lec37.mp4">Filters</option>
      
      <option  value="122106025/lec38.mp4">Unit Junction Transistor</option>
      
      <option  value="122106025/lec39.mp4">Silicon Controlled Rectifier</option>
      
      <option  value="122106025/lec40.mp4">Field Effect Transistor</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122106026</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Basic Electronics and Lab</strong></td>
	<td><strong>Prof. T.S. Natarajan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122106026/Basic_Electronics_Lab/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
        
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122106027</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Classical Physics</strong></td>
	<td><strong>Prof. V. Balakrishnan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122106027/lec01.mp4">Introduction</option>
      
      <option  value="122106027/lec02.mp4">Newtonian mechanics</option>
      
      <option  value="122106027/lec03.mp4">Dynamics in phase space</option>
      
      <option  value="122106027/lec04.mp4">Linear dynamical systems</option>
      
      <option  value="122106027/lec05.mp4">Autonomous dynamical systems (Part 1)</option>
      
      <option  value="122106027/lec06.mp4">Autonomous dynamical systems (Part 2)</option>
      
      <option  value="122106027/lec07.mp4">Lagrangian formalism</option>
      
      <option  value="122106027/lec08.mp4">Summary of classical electromagnetism</option>
      
      <option  value="122106027/lec09.mp4">Charged particle in an electromagnetic field</option>
      
      <option  value="122106027/lec10.mp4">Hamiltonian dynamics (Part 1)</option>
      
      <option  value="122106027/lec11.mp4">Hamiltonian dynamics (Part 2)</option>
      
      <option  value="122106027/lec12.mp4">Hamiltonian dynamics (Part 3)</option>
      
      <option  value="122106027/lec13.mp4">Dynamical symmetry (Part 1)</option>
      
      <option  value="122106027/lec14.mp4">Dynamical symmetry (Part 2)</option>
      
      <option  value="122106027/lec15.mp4">Randomness in phase space; chaos</option>
      
      <option  value="122106027/lec16.mp4">Discrete-time dynamics: maps (Part 1)</option>
      
      <option  value="122106027/lec17.mp4">Discrete-time dynamics: maps (Part 2)</option>
      
      <option  value="122106027/lec18.mp4">Problems and solutions (Part 1)</option>
      
      <option  value="122106027/lec19.mp4">Problems and solutions (Part 2)</option>
      
      <option  value="122106027/lec20.mp4">Classical statistical mechanics: Introduction</option>
      
      <option  value="122106027/lec21.mp4">Some probability distributions; isolated system</option>
      
      <option  value="122106027/lec22.mp4">The microcanonical emsemble</option>
      
      <option  value="122106027/lec23.mp4">Thermodynamics</option>
      
      <option  value="122106027/lec24.mp4">The canonical ensemble</option>
      
      <option  value="122106027/lec25.mp4">Connection between statistical mechanics and ther-modynamics</option>
      
      <option  value="122106027/lec26.mp4">Probability distributions</option>
      
      <option  value="122106027/lec27.mp4">Probability distributions (concld.). Phase transitions (Part 1) </option>
      
      <option  value="122106027/lec28.mp4">Phase transitions (Part 2)</option>
      
      <option  value="122106027/lec29.mp4">Phase transitions (Part 3)</option>
      
      <option  value="122106027/lec30.mp4">Phase transitions (Part 4); misc. topics</option>
      
      <option  value="122106027/lec31.mp4">Problems and solutions (Part 3)</option>
      
      <option  value="122106027/lec32.mp4">Continuous groups in physics (Part 1)</option>
      
      <option  value="122106027/lec33.mp4">Continuous groups in physics (Part 2)</option>
      
      <option  value="122106027/lec34.mp4">Continuous groups in physics (Part 3)</option>
      
      <option  value="122106027/lec35.mp4">Noether's Theorem. Special Relativity (Part 1)</option>
      
      <option  value="122106027/lec36.mp4">Special Relativity (Part 2)</option>
      
      <option  value="122106027/lec37.mp4">Special Relativity (Part 3)</option>
      
      <option  value="122106027/lec38.mp4">Special Relativity (Part 4)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122106028</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Chemistry I</strong></td>
	<td><strong>Prof. K. Mangala Sunder</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122106028/lec01.mp4">Introduction to Chemistry & Quantum Chemical Mechanics</option>
      
      <option  value="122106028/lec02.mp4">Particle in a box (one and two dimensions)</option>
      
      <option  value="122106028/lec03.mp4">Particle in a box (One and Two Dimensions) contd</option>
      
      <option  value="122106028/lec04.mp4">Harmonic Oscillator and Molecular Vibration</option>
      
      <option  value="122106028/lec05.mp4">Harmonic Oscillator (Continued)</option>
      
      <option  value="122106028/lec06.mp4">Hydrogen Atom - Radial Solution</option>
      
      <option  value="122106028/lec07.mp4">Hydrogen Atom Part III Angular Solutions</option>
      
      <option  value="122106028/lec08.mp4">Hydrogen Atom - Angular Solutions (Continued)</option>
      
      <option  value="122106028/lec09.mp4">Hydrogen Atom - Angular Solutions (Continued)</option>
      
      <option  value="122106028/lec10.mp4">Oppenheimer Approximation and Superposition</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122106029</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Engineering Chemistry III</strong></td>
	<td><strong>Prof. S. Sankararaman,Prof. K.M. Muraleedharan,Prof. Santosh J Gharpure,Prof. N. Narasimha Murthy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122106029/Engineering_Chemistry_III/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122106030</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Environmental Chemistry and Analysis</strong></td>
	<td><strong>Prof. M.S. Subramanian</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122106030/Enivironmental_Chemistry_Analysis/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122106031</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Management Science I</strong></td>
	<td><strong>Prof. M. Thenmozhi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122106031/Management_Science_I/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>122106032</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Management Science II</strong></td>
	<td><strong>Prof. R. Madhumathi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/122106032/Management_Science_II/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
        
         
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122106033</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Numerical methods and programing</strong></td>
	<td><strong>Prof. P.B. Sunil Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122106033/lec01.mp4">Programing Basics</option>
      
      <option  value="122106033/lec02.mp4">Introduction to Pointers</option>
      
      <option  value="122106033/lec03.mp4">Pointers And Arrays</option>
      
      <option  value="122106033/lec04.mp4">External Functions and Argument Passing</option>
      
      <option  value="122106033/lec05.mp4">Representation of Numbers</option>
      
      <option  value="122106033/lec06.mp4">Numerical Error</option>
      
      <option  value="122106033/lec07.mp4">Error Propagation and Stability</option>
      
      <option  value="122106033/lec08.mp4">Polynomial Interpolation-1</option>
      
      <option  value="122106033/lec09.mp4">Polynomial Interpolation-2</option>
      
      <option  value="122106033/lec10.mp4">Error In Interpolation Polynomial</option>
      
      <option  value="122106033/lec11.mp4">Polynomial Interpolation</option>
      
      <option  value="122106033/lec12.mp4">Cubic Spline Interpolation</option>
      
      <option  value="122106033/lec13.mp4">Data Fitting : Linear Fit</option>
      
      <option  value="122106033/lec14.mp4">Data Fitting : Linear Fit</option>
      
      <option  value="122106033/lec15.mp4">Data Fitting : Non Linear Fit</option>
      
      <option  value="122106033/lec16.mp4">Matrix Elimination and Solution</option>
      
      <option  value="122106033/lec17.mp4">Solution To Linear Equations</option>
      
      <option  value="122106033/lec18.mp4">Matrix Elimination</option>
      
      <option  value="122106033/lec19.mp4">Eigen Values of A Matrix</option>
      
      <option  value="122106033/lec20.mp4">Eigen Values And Eigen Vectors</option>
      
      <option  value="122106033/lec21.mp4">Solving NonLinear Equations</option>
      
      <option  value="122106033/lec22.mp4">Solving NonLinear Equations Newton Raphson Method</option>
      
      <option  value="122106033/lec23.mp4">Methods For Solving NonLinear Equations</option>
      
      <option  value="122106033/lec24.mp4">System of NonLinear Equations</option>
      
      <option  value="122106033/lec25.mp4">Numerical Derivations</option>
      
      <option  value="122106033/lec26.mp4">High order Derivatives From Difference Formula</option>
      
      <option  value="122106033/lec27.mp4">Numerical Integration - Basic Rules</option>
      
      <option  value="122106033/lec28.mp4">Comparison of Different Basic Rules</option>
      
      <option  value="122106033/lec29.mp4">Gaussian Rules</option>
      
      <option  value="122106033/lec30.mp4">Comparison of Gaussian Rules</option>
      
      <option  value="122106033/lec31.mp4">Solving Ordinary Differential Equations</option>
      
      <option  value="122106033/lec32.mp4">Solving ordinary differential equations</option>
      
      <option  value="122106033/lec33.mp4">Adaptive step size Runge Kutta scheme</option>
      
      <option  value="122106033/lec34.mp4">Partial Differential Equations</option>
      
      <option  value="122106033/lec35.mp4">Explicit and Implicit Methods</option>
      
      <option  value="122106033/lec36.mp4">The Crank - Nicholson Scheme For Two Spatial</option>
      
      <option  value="122106033/lec37.mp4">Fourier Transforms</option>
      
      <option  value="122106033/lec38.mp4">Fast Fourier Transforms</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122106034</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Quantum Physics</strong></td>
	<td><strong>Prof. V. Balakrishnan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122106034/lec01.mp4">Introduction to Quantum Physics;Heisenberg's uncertainty principle</option>
      
      <option  value="122106034/lec02.mp4">Introduction to linear vector spaces</option>
      
      <option  value="122106034/lec03.mp4">Characteristics of linear vector spaces</option>
      
      <option  value="122106034/lec04.mp4">Functions in a linear vector space</option>
      
      <option  value="122106034/lec05.mp4">Linear operations in a linear vector space and their eigenvalues</option>
      
      <option  value="122106034/lec06.mp4">Classical Vs Quantum Mechanics</option>
      
      <option  value="122106034/lec07.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec08.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec09.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec10.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec11.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec12.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec13.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec14.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec15.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec16.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec17.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec18.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec19.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec20.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec21.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec22.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec23.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec24.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec25.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec26.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec27.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec28.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec29.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec30.mp4">Quantum Physics</option>
      
      <option  value="122106034/lec31.mp4">Quantum Physics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122107036</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Mathematics II</strong></td>
	<td><strong>Dr. Tanuja Srivastava,Prof. H.G. Sharma,Dr. Sunita Gakkhar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122107036/mod01lec01.mp4">Complex Integration</option>
      
      <option  value="122107036/mod01lec02.mp4">Contour Integration</option>
      
      <option  value="122107036/mod01lec03.mp4">Cauchy's Integral Theorem</option>
      
      <option  value="122107036/mod01lec04.mp4">Cauchy's Integral Formula</option>
      
      <option  value="122107036/mod01lec05.mp4">Application of Cauchy Integral Formula</option>
      
      <option  value="122107036/mod01lec06.mp4">Zeros, Singularities and Poles</option>
      
      <option  value="122107036/mod01lec07.mp4">Residue Integration Method</option>
      
      <option  value="122107036/mod01lec08.mp4">Residue Theorem</option>
      
      <option  value="122107036/mod01lec09.mp4">Evaluation of Real Integrals</option>
      
      <option  value="122107036/mod01lec10.mp4">Evaluation of Real Improper Integrals-1</option>
      
      <option  value="122107036/mod01lec11.mp4">Evaluation of Real Improper Integrals-2</option>
      
      <option  value="122107036/mod01lec12.mp4">Evaluation of Real Improper Integrals-3</option>
      
      <option  value="122107036/mod01lec13.mp4">Evaluation of Real Improper Integrals-4</option>
      
      <option  value="122107036/mod01lec14.mp4">Evaluation of Real Integrals-Revision</option>
      
      <option  value="122107036/mod02lec01.mp4">Matrix Algebra Part - 1</option>
      
      <option  value="122107036/mod02lec02.mp4">Matrix Algebra Part - 2</option>
      
      <option  value="122107036/mod02lec03.mp4">Determinants Part - 1</option>
      
      <option  value="122107036/mod02lec04.mp4">Determinants Part - 2</option>
      
      <option  value="122107036/mod02lec05.mp4">Solution of System Equation</option>
      
      <option  value="122107036/mod02lec06.mp4">Linear Algebra Part-1</option>
      
      <option  value="122107036/mod02lec07.mp4">Linear Algebra part - 2</option>
      
      <option  value="122107036/mod02lec08.mp4">Linear Algebra Part - 3</option>
      
      <option  value="122107036/mod02lec09.mp4">Linear Algebra Part - 4</option>
      
      <option  value="122107036/mod02lec10.mp4">Inner Product</option>
      
      <option  value="122107036/mod02lec11.mp4">Linear Transformation Part - 1</option>
      
      <option  value="122107036/mod02lec12.mp4">Linear Transformation Part - 2</option>
      
      <option  value="122107036/mod02lec13.mp4">Eigenvalues  Eigenvectors Part - 1</option>
      
      <option  value="122107036/mod02lec14.mp4">Eigenvalues  Eigenvectors Part - 2</option>
      
      <option  value="122107036/mod02lec15.mp4">Quadratic Forms</option>
      
      <option  value="122107036/mod02lec16.mp4">Diagonalization Part - 1</option>
      
      <option  value="122107036/mod02lec17.mp4">Diagonalization Part - 2</option>
      
      <option  value="122107036/mod02lec18.mp4">Solution of System of Linear Equation</option>
      
      <option  value="122107036/mod02lec19.mp4">Functions of Complex Variables Part - 1</option>
      
      <option  value="122107036/mod02lec20.mp4">Functions of Complex Variables Part - 2</option>
      
      <option  value="122107036/mod02lec21.mp4">Taylor Series</option>
      
      <option  value="122107036/mod02lec22.mp4">Laurent Series</option>
      
      <option  value="122107036/mod02lec23.mp4">Rank of a Matrix</option>
      
      <option  value="122107036/mod03lec01.mp4">Complex Numbers  Their Geometrical Representation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122107037</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Mathematics III</strong></td>
	<td><strong>Dr. Tanuja Srivastava,Prof. P.N. Agrawal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122107037/mod01lec01.mp4">Solution of ODE of First Order and First Degree</option>
      
      <option  value="122107037/mod01lec02.mp4">Linear Differential Equations of the First Order</option>
      
      <option  value="122107037/mod01lec03.mp4">Approximate Solution of An Initial Value</option>
      
      <option  value="122107037/mod01lec04.mp4">Series Solution of Homogeneous Linear I</option>
      
      <option  value="122107037/mod01lec05.mp4">Series Solution of Homogeneous Linear II</option>
      
      <option  value="122107037/mod01lec06.mp4">Bessel Functions and Their Properties</option>
      
      <option  value="122107037/mod01lec07.mp4">Bessel Functions And Their Properties Contd..</option>
      
      <option  value="122107037/mod01lec08.mp4">Laplace Transformation</option>
      
      <option  value="122107037/mod01lec09.mp4">Laplace Transformation contd..</option>
      
      <option  value="122107037/mod01lec10.mp4">Applications Of Laplace Transformation</option>
      
      <option  value="122107037/mod01lec11.mp4">Applications Of Laplace Transformation Contd.</option>
      
      <option  value="122107037/mod01lec12.mp4">One Dimensional Wave Equation</option>
      
      <option  value="122107037/mod01lec13.mp4">One Dimensional Heat Equation</option>
      
      <option  value="122107037/mod02lec01.mp4">Introduction to Differential Equation</option>
      
      <option  value="122107037/mod02lec02.mp4">First Order Differential Equations and Their Geometric Interpretation</option>
      
      <option  value="122107037/mod02lec03.mp4">Differential Equations of First Order  Higher Degree</option>
      
      <option  value="122107037/mod02lec04.mp4">Linear Differential Equation of Second Order-Part - 1</option>
      
      <option  value="122107037/mod02lec05.mp4">Linear Differential equation of Second Order-Part - 2</option>
      
      <option  value="122107037/mod02lec06.mp4">Euler-Cauchy Theorem</option>
      
      <option  value="122107037/mod02lec07.mp4">Higher Order Linear Differential Equations</option>
      
      <option  value="122107037/mod02lec08.mp4">Higher Order Non homogeneous Linear Equations</option>
      
      <option  value="122107037/mod02lec09.mp4">Boundary Value Problems</option>
      
      <option  value="122107037/mod02lec10.mp4">Strum Liouville boundary Value Problem</option>
      
      <option  value="122107037/mod02lec11.mp4">Fourier Series-Part - 1</option>
      
      <option  value="122107037/mod02lec12.mp4">Fourier Series-Part - 2</option>
      
      <option  value="122107037/mod02lec13.mp4">Convergence of the Fourier Series</option>
      
      <option  value="122107037/mod02lec14.mp4">Fourier Integrals</option>
      
      <option  value="122107037/mod02lec15.mp4">Fourier Transforms</option>
      
      <option  value="122107037/mod02lec16.mp4">Partial Differential Equation</option>
      
      <option  value="122107037/mod02lec17.mp4">First Order Partial Differential Equation</option>
      
      <option  value="122107037/mod02lec18.mp4">Second Order Partial Differential Equations - I</option>
      
      <option  value="122107037/mod02lec19.mp4">Second Order Partial Differential Equations - II</option>
      
      <option  value="122107037/mod02lec20.mp4">Solution of One Dimensional Wave Equation</option>
      
      <option  value="122107037/mod02lec21.mp4">Solution of HomogeneousNon Homogeneous Equations</option>
      
      <option  value="122107037/mod02lec22.mp4">Fourier IntegralTransform Method for Heat Equation</option>
      
      <option  value="122107037/mod02lec23.mp4">Three Dimensional Laplace Equation</option>
      
      <option  value="122107037/mod02lec24.mp4">Solution of Drichlet Problem</option>
      
      <option  value="122107037/mod02lec25.mp4">Numerical Method for Laplace Poisson equation</option>
      
      <option  value="122107037/mod02lec26.mp4">ADI Method for Laplace and Poisson Equation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>122108038</strong></td>
	<td><strong>Basic courses(Sem 1 and 2)</strong></td>
	<td><strong>Concept of Management and Evolution of Management thought</strong></td>
	<td><strong>Prof. K.B. Akhilesh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="122108038/lec01.mp4">Introduction - Concept of Management</option>
      
      <option  value="122108038/lec02.mp4">Lecture 2</option>
      
      <option  value="122108038/lec03.mp4">Management By Objectives</option>
      
      <option  value="122108038/lec04.mp4">Organizing & Organization</option>
      
      <option  value="122108038/lec05.mp4">Organizing - II</option>
      
      <option  value="122108038/lec06.mp4">Coordinating</option>
      
      <option  value="122108038/lec07.mp4">Communication - I</option>
      
      <option  value="122108038/lec08.mp4">Communication - II</option>
      
      <option  value="122108038/lec09.mp4">Leadership</option>
      
      <option  value="122108038/lec10.mp4">Controlling</option>
      
      <option  value="122108038/lec11.mp4">Motivation and Organization Culture</option>
      
      <option  value="122108038/lec12.mp4">Japanese Management</option>
      
      <option  value="122108038/lec13.mp4">Comparison of Japanese and American Management</option>
      
      <option  value="122108038/lec14.mp4">Managerial Functions in International Business</option>
      
      <option  value="122108038/lec15.mp4">Marketing Functions: Channels of Distribution</option>
      
      <option  value="122108038/lec16.mp4">Management and Society</option>
      
      <option  value="122108038/lec17.mp4">Social Responsibility and Ethics - II</option>
      
      <option  value="122108038/lec18.mp4">Functions of Personnel Management</option>
      
      <option  value="122108038/lec19.mp4">Manpower Planning</option>
      
      <option  value="122108038/lec20.mp4">Selection - I</option>
      
      <option  value="122108038/lec21.mp4">Selection - II</option>
      
      <option  value="122108038/lec22.mp4">Performance Appraisal 1</option>
      
      <option  value="122108038/lec23.mp4">Performance Appraisal - II</option>
      
      <option  value="122108038/lec24.mp4">Training and Development - I</option>
      
      <option  value="122108038/lec25.mp4">Training and Development - II</option>
      
      <option  value="122108038/lec26.mp4">Job Design and Payment Systems - I</option>
      
      <option  value="122108038/lec27.mp4">Job Design and Compensation Systems</option>
      
      <option  value="122108038/lec28.mp4">Organizational Development - I</option>
      
      <option  value="122108038/lec29.mp4">Organizational Development - II</option>
      
      <option  value="122108038/lec30.mp4">Organization Theory - I</option>
      
      <option  value="122108038/lec31.mp4">Organization Theory - II</option>
      
      <option  value="122108038/lec32.mp4">Group Dynamics - I</option>
      
      <option  value="122108038/lec33.mp4">Group Dynamics - II</option>
      
      <option  value="122108038/lec34.mp4">Group Dynamics - III</option>
      
      <option  value="122108038/lec35.mp4">Conflict Management - 1</option>
      
      <option  value="122108038/lec36.mp4">Conflict Management - II</option>
      
      <option  value="122108038/lec37.mp4">Managing Creativity and Innovation</option>
      
      <option  value="122108038/lec38.mp4">Creativity and Managing Innovation Process - II</option>
      
      <option  value="122108038/lec39.mp4">Stress Management - I</option>
      
      <option  value="122108038/lec40.mp4">Stress Management - II</option>
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
