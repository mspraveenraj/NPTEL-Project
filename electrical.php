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
<title>Electrical</title>
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
	<td><strong>108101004</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power System Dynamics and Control</strong></td>
	<td><strong>Dr. A.M. Kulkarni</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108101004/mod01lec01.mp4">Lecture 1 - Introduction</option>
      
      <option  value="108101004/mod01lec02.mp4">Lecture 2 - Introduction</option>
      
      <option  value="108101004/mod01lec03.mp4">Lecture 3 - Analysis of Dynamical Systems</option>
      
      <option  value="108101004/mod01lec04.mp4">Lecture 4 - Analysis of Dynamical Systems (Contd.)</option>
      
      <option  value="108101004/mod01lec05.mp4">Lecture 5 - Analysis of LINEAR Time Invariant Dynamical Systems</option>
      
      <option  value="108101004/mod01lec06.mp4">Lecture 6 - Analysis of LINEAR Time Invariant Dynamical Systems (Contd.)</option>
      
      <option  value="108101004/mod01lec07.mp4">Lecture 7 - Stiff Systems, Multi Time Scale Modeling</option>
      
      <option  value="108101004/mod01lec08.mp4">Lecture 8 - Numerical Integration</option>
      
      <option  value="108101004/mod01lec09.mp4">Lecture 9 - Numerical Integration (Contd.)</option>
      
      <option  value="108101004/mod01lec10.mp4">Lecture -10 Numerical Integration (Contd.)</option>
      
      <option  value="108101004/mod01lec11.mp4">Lecture 11 - Modeling of Synchronous Machines</option>
      
      <option  value="108101004/mod01lec12.mp4">Lecture 12 - Modeling of Synchronous Machines (Contd.)</option>
      
      <option  value="108101004/mod01lec13.mp4">Lecture 13 - Modeling of Synchronous Machines (Contd.)</option>
      
      <option  value="108101004/mod01lec14.mp4">Lecture 14 - Modeling of Synchronous Machines. dq0 transformation (Contd.)</option>
      
      <option  value="108101004/mod01lec15.mp4">Lecture 15 - Modeling of Synchronous Machines. Standard Parameters</option>
      
      <option  value="108101004/mod01lec16.mp4">Lecture 16 - Modeling of Synchronous Machines. Standard Parameters</option>
      
      <option  value="108101004/mod01lec17.mp4">Lecture 17 - Synchronous Generator Models using Standard Parameters</option>
      
      <option  value="108101004/mod01lec18.mp4">Lecture 18 - Synchronous Generator Models using Standard Parameters. PER UNIT REPRESENTATION</option>
      
      <option  value="108101004/mod01lec19.mp4">Lecture 19 - Open Circuit Response of a Synchronous Generator</option>
      
      <option  value="108101004/mod01lec20.mp4">Lecture 20 - Synchronous Machine Modeling. Short Circuit Analysis (Contd.)</option>
      
      <option  value="108101004/mod01lec21.mp4">Lecture 21 - Synchronous Machine Modeling. Short Circuit Analysis (Contd.). Synchronization of a Synchronous Machine</option>
      
      <option  value="108101004/mod01lec22.mp4">Lecture 22 - Synchronization of a Synchronous Machine (Contd.)</option>
      
      <option  value="108101004/mod01lec23.mp4">Lecture 23 - Simplified Synchronous Machine Models</option>
      
      <option  value="108101004/mod01lec24.mp4">Lecture 24 - Excitation Systems</option>
      
      <option  value="108101004/mod01lec25.mp4">Lecture 25 - Excitation System Modeling</option>
      
      <option  value="108101004/mod01lec26.mp4">Lecture 26 - Excitation System Modeling. Automatic Voltage Regulator</option>
      
      <option  value="108101004/mod01lec27.mp4">Lecture 27 - Excitation System Modeling. Automatic Voltage Regulator (Contd.)</option>
      
      <option  value="108101004/mod01lec28.mp4">Lecture 28 - Excitation System Modeling. Automatic Voltage Regulator (Simulation)</option>
      
      <option  value="108101004/mod01lec29.mp4">Lecture 29 - Excitation System Modeling. Automatic Voltage Regulator (Simulation) � Contd.</option>
      
      <option  value="108101004/mod01lec30.mp4">Lecture 30 - Excitation System Modeling. Automatic Voltage Regulator. Linearized Analysis</option>
      
      <option  value="108101004/mod01lec31.mp4">Lecture 31 - Load Modeling</option>
      
      <option  value="108101004/mod01lec32.mp4">Lecture 32 - Induction Machines, Transmission Lines</option>
      
      <option  value="108101004/mod01lec33.mp4">Lecture 33 - Transmission Lines. Prime Mover Systems</option>
      
      <option  value="108101004/mod01lec34.mp4">Lecture 34 - Transmission Lines (Contd.). Prime Mover Systems</option>
      
      <option  value="108101004/mod01lec35.mp4">Lecture 35 - Prime Mover Systems. Stability in Integrated Power System</option>
      
      <option  value="108101004/mod01lec36.mp4">Lecture 36 - Stability in Integrated Power System: Two Machine Example</option>
      
      <option  value="108101004/mod01lec37.mp4">Lecture 37 - Two Machine System (Contd.)</option>
      
      <option  value="108101004/mod01lec38.mp4">Lecture 38 - Stability in Integrated Power System: Large Systems</option>
      
      <option  value="108101004/mod01lec39.mp4">Lecture 39 - Frequency/Angular Stability Programs. Stability Phenomena: Voltage Stability Example</option>
      
      <option  value="108101004/mod01lec40.mp4">Lecture 40 - Voltage Stability Example (Contd.). Fast Transients: Tools and Phenomena</option>
      
      <option  value="108101004/mod01lec41.mp4">Lecture 41 - Torsional Transients: Phenomena of Sub-Synchronous Resonance</option>
      
      <option  value="108101004/mod01lec42.mp4">Lecture 42 - Sub-Synchronous Resonance. Stability Improvement</option>
      
      <option  value="108101004/mod01lec43.mp4">Lecture 43 - Stability Improvement</option>
      
      <option  value="108101004/mod01lec44.mp4">Lecture 44 - Stability Improvement. Power System Stabilizers</option>
      
      <option  value="108101004/mod01lec45.mp4">Lecture 45 - Stability Improvement (Large Disturbance Stability)</option>
          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108101002</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Nonlinear Dynamical Systems</strong></td>
	<td><strong>Prof. Harish K. Pillai, Prof. Madhu N.Belur</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option value="108101002/mod01lec01.mp4">L1-Introduction</option>
<option value="108101002/mod01lec02.mp4">L2-First Order systems</option>
<option value="108101002/mod01lec03.mp4">L3-Classification of Equilibrium points</option>
<option value="108101002/mod01lec04.mp4">L4-Lipschitz Functions</option>
<option value="108101002/mod01lec05.mp4">L5-Existence/uniqueness theorems</option>
<option value="108101002/mod01lec06.mp4">L6-Existence/uniqueness of solutions to differential equations</option>
<option value="108101002/mod01lec07.mp4">L7-Lyapunov theorem on stability</option>
<option value="108101002/mod01lec08.mp4">L8-Extension of Lyapunov's Theorem in different contexts</option>
<option value="108101002/mod01lec09.mp4">L9-LaSalle's Invariance principle, Barbashin and Krasovski theorems, periodic orbits</option>
<option value="108101002/mod01lec10.mp4">L10-Bendixson criterion and Poincare-Bendixson criterion. Example: Lotka Volterra predator prey model</option>
<option value="108101002/mod01lec11.mp4">L11-Bendixson and Poincare-Bendixson criteria van-der-Pol Oscillator</option>
<option value="108101002/mod01lec12.mp4">L12-Scilab simulation of Lotka Volterra predator prey model, van-der-Pol Oscillator Review of linearization, operating point/ operating trajectory</option>
<option value="108101002/mod01lec13.mp4">L13-Signals, operators</option>
<option value="108101002/mod01lec14.mp4">L14-Norms of signals, systems (operators), Finite gain L2 stable</option>
<option value="108101002/mod01lec15.mp4">L15-Nyquist plots and Nyquist criterion for stability</option>
<option value="108101002/mod01lec16.mp4">L16-Interconnection between linear system & non-linearity, passive filters</option>
<option value="108101002/mod01lec17.mp4">L17-Passive filters, Dissipation equality, positive real lemma</option>
<option value="108101002/mod01lec18.mp4">L18-Positive real lemma proof</option>
<option value="108101002/mod01lec19.mp4">L19- Definition for positive realness and Kalman Yakubovich-Popov Theorem</option>
<option value="108101002/mod01lec20.mp4">L20-Kalman-Yakubovich-Popov Lemma/theorem and memoryless nonlinearities</option>
<option value="108101002/mod01lec21.mp4">L21-Loop tranformations and circle criterion</option>
<option value="108101002/mod01lec22.mp4">L22-Nonlinearities based on circle criterion</option>
<option value="108101002/mod01lec23.mp4">L23-Limit cycles</option>
<option value="108101002/mod01lec24.mp4">L24-Popov criterion continuous, frequency-domain theorem</option>
<option value="108101002/mod01lec25.mp4">L25-Popov criterion continuous, frequency-domain theorem</option>
<option value="108101002/mod01lec26.mp4">L26-Describing function method</option>
<option value="108101002/mod01lec27.mp4">L27-Describing Function :2</option>
<option value="108101002/mod01lec28.mp4">L28-Describing : optimal gain</option>
<option value="108101002/mod01lec29.mp4">L29-Describing : optimal gain</option>
<option value="108101002/mod01lec30.mp4">L30-Describing function : Jump Hysteresis</option>
<option value="108101002/mod01lec31.mp4">L31-Describing functions : sufficient conditions for existence of periodic orbits non existence of periodic orbits</option>
<option value="108101002/mod01lec32.mp4">L32-Describing functions for nonlinearities</option>
<option value="108101002/mod01lec33.mp4">L33-Ideal relay with Hysteresis and dead zone</option>
<option value="108101002/mod01lec34.mp4">L34-Dynamical systems on manifolds-1</option>
<option value="108101002/mod01lec35.mp4">L35-Dynamical systems on manifolds-2</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108104011</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Advanced Electric Drives</strong></td>
	<td><strong>Dr. S.P. Das</strong</td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option value="108104011/mod01lec01.mp4">Lecture-01</option>
<option value="108104011/mod01lec02.mp4">Lecture-02</option>
<option value="108104011/mod01lec03.mp4">Lecture-03</option>
<option value="108104011/mod01lec04.mp4">Lecture-04</option>
<option value="108104011/mod01lec05.mp4">Lecture-05</option>
<option value="108104011/mod01lec06.mp4">Lecture-06</option>
<option value="108104011/mod01lec07.mp4">Lecture-07</option>
<option value="108104011/mod01lec08.mp4">Lecture-08</option>
<option value="108104011/mod01lec09.mp4">Lecture-09</option>
<option value="108104011/mod01lec10.mp4">Lecture-10</option>
<option value="108104011/mod01lec11.mp4">Lecture-11</option>
<option value="108104011/mod01lec12.mp4">Lecture-12</option>
<option value="108104011/mod01lec13.mp4">Lecture-13</option>
<option value="108104011/mod01lec14.mp4">Lecture-14</option>
<option value="108104011/mod01lec15.mp4">Lecture-15</option>
<option value="108104011/mod01lec16.mp4">Lecture-16</option>
<option value="108104011/mod01lec17.mp4">Lecture-17</option>
<option value="108104011/mod01lec18.mp4">Lecture-18</option>
<option value="108104011/mod01lec19.mp4">Lecture-19</option>
<option value="108104011/mod01lec20.mp4">Lecture-20</option>
<option value="108104011/mod01lec21.mp4">Lecture-21</option>
<option value="108104011/mod01lec22.mp4">Lecture-22</option>
<option value="108104011/mod01lec23.mp4">Lecture-23</option>
<option value="108104011/mod01lec24.mp4">Lecture-24</option>
<option value="108104011/mod01lec25.mp4">Lecture-25</option>
<option value="108104011/mod01lec26.mp4">Lecture-26</option>
<option value="108104011/mod01lec27.mp4">Lecture-27</option>
<option value="108104011/mod01lec28.mp4">Lecture-28</option>
<option value="108104011/mod01lec29.mp4">Lecture-29</option>
<option value="108104011/mod01lec30.mp4">Lecture-30</option>
<option value="108104011/mod01lec31.mp4">Lecture-31</option>
<option value="108104011/mod01lec32.mp4">Lecture-32</option>
<option value="108104011/mod01lec33.mp4">Lecture-33</option>
<option value="108104011/mod01lec34.mp4">Lecture-34</option>
<option value="108104011/mod01lec35.mp4">Lecture-35</option>
<option value="108104011/mod01lec36.mp4">Lecture-36</option>
<option value="108104011/mod01lec37.mp4">Lecture-37</option>
<option value="108104011/mod01lec38.mp4">Lecture-38</option>
<option value="108104011/mod01lec39.mp4">Lecture-39</option>
<option value="108104011/mod01lec40.mp4">Lecture-40</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105017</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Electrical Machines -I </strong></td>
	<td><strong>Dr. D.Kastha</td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option value="108105017/mod01lec01.mp4">Introduction</option>
<option value="108105017/mod01lec02.mp4">Operating Principles and Construction of Single Phase Transformers</option>
<option value="108105017/mod01lec03.mp4">Modeling of Single Phase Transformers</option>
<option value="108105017/mod01lec04.mp4">Equivalent Circuits of Single Phase Transformers</option>
<option value="108105017/mod01lec05.mp4">Testing of Single Phase Transformers</option>
<option value="108105017/mod01lec06.mp4">Efficiency of Single Phase Transformers</option>
<option value="108105017/mod01lec07.mp4">Voltage Regulation of Single Phase Transformers</option>
<option value="108105017/mod01lec08.mp4">Parallel Operation of Single Phase Transformers</option>
<option value="108105017/mod01lec09.mp4">Harmonics and Switching Transients in Single Phase Transformers</option>
<option value="108105017/mod01lec10.mp4">Introduction to Three Phase Transformer</option>
<option value="108105017/mod01lec11.mp4">Construction of Three Phase Transformers</option>
<option value="108105017/mod01lec12.mp4">Three Phase Transformer Connections</option>
<option value="108105017/mod01lec13.mp4">Three Phase Transformer Phase Groups Part - I</option>
<option value="108105017/mod01lec14.mp4">Three Phase Transformer Phase Groups Part - II</option>
<option value="108105017/mod01lec15.mp4">Analysis and Testing of Three Phase Transformers</option>
<option value="108105017/mod01lec16.mp4">Operation of Three Phase Transformers</option>
<option value="108105017/mod01lec17.mp4">Auto Transformers</option>
<option value="108105017/mod01lec18.mp4">Three Winding Transformers</option>
<option value="108105017/mod01lec19.mp4">Scott Connected Transformers</option>
<option value="108105017/mod01lec20.mp4">Potential and Current Transformers</option>
<option value="108105017/mod01lec21.mp4">Operating Principles of DC Machines</option>
<option value="108105017/mod01lec22.mp4">Constructional Features of DC Machines</option>
<option value="108105017/mod01lec23.mp4">Generated EMF and Torque in DC Machines</option>
<option value="108105017/mod01lec24.mp4">Armature Reaction</option>
<option value="108105017/mod01lec25.mp4">Commutation in DC Machines</option>
<option value="108105017/mod01lec26.mp4">Separately Excited DC Generators</option>
<option value="108105017/mod01lec27.mp4">DC Shunt Generators</option>
<option value="108105017/mod01lec28.mp4">Compound DC Generators</option>
<option value="108105017/mod01lec29.mp4">Interconnected DC Generators</option>
<option value="108105017/mod01lec30.mp4">Characteristics of DC Shunt Motors</option>
<option value="108105017/mod01lec31.mp4">Starting of DC Shunt Motors</option>
<option value="108105017/mod01lec32.mp4">Speed Control of DC Shunt Motors</option>
<option value="108105017/mod01lec33.mp4">Braking of DC Shunt Motors</option>
<option value="108105017/mod01lec34.mp4">Electronic Control of DC Shunt Motors</option>
<option value="108105017/mod01lec35.mp4">Testing of DC Shunt Motors</option>
<option value="108105017/mod01lec36.mp4">Characteristics of DC Series Motors</option>
<option value="108105017/mod01lec37.mp4">Starting and Braking of DC Series Motors</option>
<option value="108105017/mod01lec38.mp4">Speed Control and of DC Series Motors</option>
<option value="108105017/mod01lec39.mp4">Testing of DC Series Motors</option>
<option value="108105017/mod01lec40.mp4">Characteristics of Compound DC Series Motors</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105019</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong> Optimal Control</strong></td>
	<td><strong>Prof. G.D. Ray</td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option value="108105019/mod01lec01.mp4">Introduction to Optimization</option>
<option value="108105019/mod01lec02.mp4">Introduction to Optimization (Contd.)</option>
<option value="108105019/mod01lec03.mp4">Optimality Conditions for function of several variables</option>
<option value="108105019/mod01lec04.mp4">Optimality Conditions for function of several variables (Contd.)</option>
<option value="108105019/mod01lec05.mp4">Unconstrained optimization problem (Numerical Techniques)</option>
<option value="108105019/mod01lec06.mp4">Solution of unconstarined optimization problem using conjugate gradient method and Newton's Method</option>
<option value="108105019/mod01lec07.mp4">Solution of unconstarined optimization problem using conjugate gradient method and Newton's Method (Contd.)</option>
<option value="108105019/mod01lec08.mp4">Solution of contraint optimization problems - karush - kuhn Tucker (KKT) conditions</option>
<option value="108105019/mod01lec09.mp4">Solution of contraint optimization problems - karush - kuhn Tucker (KKT) conditions (Contd.)</option>
<option value="108105019/mod01lec10.mp4">Problem Solution Session</option>
<option value="108105019/mod01lec11.mp4">Post optimality analysis, convex function and its properties</option>
<option value="108105019/mod01lec12.mp4">Post optimality analysis, convex function and its properties (Contd.)</option>
<option value="108105019/mod01lec13.mp4">Quadratic optimization problem using Linear Programming</option>
<option value="108105019/mod01lec14.mp4">Matrix form of the Simplex Method</option>
<option value="108105019/mod01lec15.mp4">Matrix form of the Simplex Method (Contd.)</option>
<option value="108105019/mod01lec16.mp4">Solution of Linear Programming using Simplex Method - Algebraic Approach</option>
<option value="108105019/mod01lec17.mp4">Solution of Linear Programming using Simplex Method - Algebraic Approach (Contd.)</option>
<option value="108105019/mod01lec18.mp4">Solution of LP problems with Two - Phase Method</option>
<option value="108105019/mod01lec19.mp4">Solution of LP problems with Two - Phase Method (Contd.)</option>
<option value="108105019/mod01lec20.mp4">Standard Primal and Dual problems</option>
<option value="108105019/mod01lec21.mp4">Relationship between Primal and Dual Variables</option>
<option value="108105019/mod01lec22.mp4">Solution of Quadratic Programming problem using Simplex Method</option>
<option value="108105019/mod01lec23.mp4">Interior point method for solving optimization problems</option>
<option value="108105019/mod01lec24.mp4">Interior point method for solving optimization problems (Contd.)</option>
<option value="108105019/mod01lec25.mp4">Solution Non linear Programming Problem using Exterior Penalty Function Method</option>
<option value="108105019/mod01lec26.mp4">Solution Non linear Programming Problem using Exterior Penalty Function Method (Contd.)</option>
<option value="108105019/mod01lec27.mp4">Solution of Non - linear Programming Problems using interior penalty function method</option>
<option value="108105019/mod01lec28.mp4">Solution of Non - linear Programming Problems using interior penalty function method (Contd.)</option>
<option value="108105019/mod01lec29.mp4">Multi - variable optimization problem</option>
<option value="108105019/mod01lec30.mp4">Dynamic Optimization Problem : Basic Concepts & Necessary and Sufficient Conditions</option>
<option value="108105019/mod01lec31.mp4">Dynamic Optimization Problem : Basic Concepts & Necessary and Sufficient Conditions (Contd.)</option>
<option value="108105019/mod01lec32.mp4">Dynamic Optimization Problem : Basic Concepts & Necessary and Sufficient Conditions   (Contd.)</option>
<option value="108105019/mod01lec33.mp4">Numerical Example and Solution of Optimal Control problem using Calculus of variation principle</option>
<option value="108105019/mod01lec34.mp4">Numerical Example and Solution of Optimal Control problem using Calculus of variation principle (Contd.)</option>
<option value="108105019/mod01lec35.mp4">Hamiltonian Formulation for Solution of optimal control problem and numerical example</option>
<option value="108105019/mod01lec36.mp4">Hamiltonian Formulation for Solution of optimal control problem and numerical example (Contd.)</option>
<option value="108105019/mod01lec37.mp4">Performance Indices and Linear Quadratic Regulator Problem</option>
<option value="108105019/mod01lec38.mp4">Performance Indices and Linear Quadratic Regulator Problem (Contd.)</option>
<option value="108105019/mod01lec39.mp4">Solution and stability analysis of finite - time LQR problem : Numerical Example</option>
<option value="108105019/mod01lec40.mp4">Solution of Infinite - time LQR problem and stability analysis</option>
<option value="108105019/mod01lec41.mp4">Numerical Example and Methods for Solution of A.R.E</option>
<option value="108105019/mod01lec42.mp4">Numerical Example and Methods for Solution of A.R.E (Contd.)</option>
<option value="108105019/mod01lec43.mp4">Frequency Domain Interpretation of LQR Controlled System</option>
<option value="108105019/mod01lec44.mp4">Gain and Phase Margin of LQR Controlled System</option>
<option value="108105019/mod01lec45.mp4">The Linear Quadratic Gaussian Problem</option>
<option value="108105019/mod01lec46.mp4">Loop Transfer Recovery</option>
<option value="108105019/mod01lec47.mp4">Dynamic Programming for Discrete Time System</option>
<option value="108105019/mod01lec48.mp4">Minimum - Time Control of a Linear Time Invariant System</option>
<option value="108105019/mod01lec49.mp4">Solution of Minimum - Time Control Problem with an Example</option>
<option value="108105019/mod01lec50.mp4">Constraint in Control Inputs and State Variables</option>
<option value="108105019/mod01lec51.mp4">Constraint in Control Inputs and State Variables (Contd.)</option>
<option value="108105019/mod01lec52.mp4">Norms for Vectors, Matrices, Signals and Linear Systems</option>
<option value="108105019/mod01lec53.mp4">Signal and System Norms</option>
<option value="108105019/mod01lec54.mp4">Internal Stability, Sensitivity and Complementary Sensitivity Functions</option>
<option value="108105019/mod01lec55.mp4">Internal Stability, Sensitivity and Complementary Sensitivity Functions (Contd.)</option>
<option value="108105019/mod01lec56.mp4">Plant Uncertainty and Standard form for Robust Stability Analysis</option>
<option value="108105019/mod01lec57.mp4">Plant Uncertainty and Standard form for Robust Stability Analysis (Contd.)</option>
<option value="108105019/mod01lec58.mp4">Frequency Response of Linear System and Singular Value Decomposition of System</option>
<option value="108105019/mod01lec59.mp4">Control Problem Statement in H- alpha Framework</option>
<option value="108105019/mod01lec60.mp4">Control Problem Statement in H - alpha Framework (Contd.)</option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108106023</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Modelling and Analysis of Electric Machines</strong></td>
	<td><strong>Dr. Krishna Vasudevan</td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>

<option value="108106023/mod01lec01.mp4">Introduction</option>
<option value="108106023/mod01lec02.mp4">Magnetic Fields</option>
<option value="108106023/mod01lec03.mp4">Magnetic Circuit</option>
<option value="108106023/mod01lec04.mp4">Singly Excited Linear Motion System</option>
<option value="108106023/mod01lec05.mp4">Linear and Cylindrical Motion Systems</option>
<option value="108106023/mod01lec06.mp4">Systems with Multiple Excitations</option>
<option value="108106023/mod01lec07.mp4">Non-linear Magnetic Systems</option>
<option value="108106023/mod01lec08.mp4">Inductances in Constant Air gap Machines</option>
<option value="108106023/mod01lec09.mp4">Inductance in Salient Pole Machine - I</option>
<option value="108106023/mod01lec10.mp4">Inductance in Salient Pole Machine - II</option>
<option value="108106023/mod01lec11.mp4">Inductance in Salient Pole Machine - III</option>
<option value="108106023/mod01lec12.mp4">Inductance in Salient Pole Machine - IV</option>
<option value="108106023/mod01lec13.mp4">Inductance in Salient Pole Machine - V</option>
<option value="108106023/mod01lec14.mp4">Inductances of Distributed Winding - I</option>
<option value="108106023/mod01lec15.mp4">Inductances of Distributed Winding - II</option>
<option value="108106023/mod01lec16.mp4">Inductances of Distributed Winding  III</option>
<option value="108106023/mod01lec17.mp4">Dynamic Equations of Induction Machines</option>
<option value="108106023/mod01lec18.mp4">Dynamic Equations of Salient Pole Synchronous Machine</option>
<option value="108106023/mod01lec19.mp4">Three-to-Two Phase Transformation</option>
<option value="108106023/mod01lec20.mp4">Induction Machine in Two-Phase Reference Frame</option>
<option value="108106023/mod01lec21.mp4">The Pseudo-Stationary Reference Frame</option>
<option value="108106023/mod01lec22.mp4">Induction Machine in Pseudo-Stationary Reference Frame</option>
<option value="108106023/mod01lec23.mp4">The Primitive Machine Equations</option>
<option value="108106023/mod01lec24.mp4">Dynamic Equations of DC Machines</option>
<option value="108106023/mod01lec25.mp4">Small Signal Model of DC Machine</option>
<option value="108106023/mod01lec26.mp4">Small Signal Behaviour of DC Machine</option>
<option value="108106023/mod01lec27.mp4">The Arbitrary Reference Frame</option>
<option value="108106023/mod01lec28.mp4">Induction Machine Equations in Arbitrary, Synchronous Reference Frames and Small Signal Modelling</option>
<option value="108106023/mod01lec29.mp4">Introduction to Field Oriented Control of Induction Machines</option>
<option value="108106023/mod01lec30.mp4">Space Vector Formulation of Induction Machine Equations</option>
<option value="108106023/mod01lec31.mp4">Modelling of Salient Pole Synchronous Machines  I</option>
<option value="108106023/mod01lec32.mp4">Modelling of Salient Pole Synchronous Machines  II</option>
<option value="108106023/mod01lec33.mp4">Modelling of Salient Pole Synchronous Machines  III</option>
<option value="108106023/mod01lec34.mp4">Steady State Models  Induction Machine</option>
<option value="108106023/mod01lec35.mp4">Steady State Models  Salient Pole Synchronous Machine</option>
<option value="108106023/mod01lec36.mp4">Solution of Dynamic Equations of Induction Machine  I</option>
<option value="108106023/mod01lec37.mp4">Solution of Dynamic Equations of Induction Machine  II</option>
<option value="108106023/mod01lec38.mp4">Reactances of Salient Pole Synchronous Machines - I</option>
<option value="108106023/mod01lec39.mp4">Reactances of Salient Pole Synchronous Machines  II</option>
<option value="108106023/mod01lec40.mp4">Reactances of Salient Pole Synchronous Machines  III</option>
<option value="108106023/mod01lec41.mp4">Suddent Short Circuit of Three Phase Alternator  Analytical Solution</option>
<option value="108106023/mod01lec42.mp4">Suddent Short Circuit of Three Phase Alternator  Numerical Simulation</option>
<option value="108106023/mod01lec43.mp4">Course Recapitulation and Assignments</option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108106083</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong> Probability Foundation for Electrical Engineers </strong></td>
	<td><strong>Dr. Krishna Jagannathann</td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>

<option value="108106083/mod01lec01.mp4">INTRODUCTION</option>
<option value="108106083/mod01lec02.mp4">CARDINALITY AND COUNTABILITY-1</option>
<option value="108106083/mod01lec03.mp4">CARDINALITY AND COUNTABILITY-2</option>
<option value="108106083/mod01lec04.mp4">PROBABILITY SPACES-1</option>
<option value="108106083/mod01lec05.mp4">PROBABILITY SPACES-2</option>
<option value="108106083/mod01lec06.mp4">PROPERTIES OF PROBABILITY MEASURES</option>
<option value="108106083/mod01lec07.mp4">DISCRETE PROBABILITY SPACES</option>
<option value="108106083/mod01lec08.mp4">GENERATED &sigma;-ALGEBRA, BOREL SETS</option>
<option value="108106083/mod01lec09.mp4">BOREL SETS AND LEBESGUE MEASURE-1</option>
<option value="108106083/mod01lec10.mp4">BOREL SETS AND LEBESGUE MEASURE-2</option>
<option value="108106083/mod01lec11.mp4">THE INFINITE COIN TOSS MODEL</option>
<option value="108106083/mod01lec12.mp4">CONDITIONAL PROBABILITY AND INDEPENDENCE</option>
<option value="108106083/mod01lec13.mp4">INDEPENDENCE CONTD.</option>
<option value="108106083/mod01lec14.mp4">THE BOREL-CANTELLI LEMMAS</option>
<option value="108106083/mod01lec15.mp4">RANDOM VARIABLES</option>
<option value="108106083/mod01lec16.mp4">CUMULATIVE DISTRIBUTION FUNCTION</option>
<option value="108106083/mod01lec17.mp4">TYPES OF RANDOM VARIABLES</option>
<option value="108106083/mod01lec18.mp4">CONTINUOUS RANDOM VARIABLES</option>
<option value="108106083/mod01lec19.mp4">CONTINUOUS RANDOM VARIABLES (CONTD.) AND SINGULAR RANDOM VARIABLES</option>
<option value="108106083/mod01lec20.mp4">SEVERAL RANDOM VARIABLES</option>
<option value="108106083/mod01lec21.mp4">INDEPENDENT RANDOM VARIABLES-1</option>
<option value="108106083/mod01lec22.mp4">INDEPENDENT RANDOM VARIABES-2</option>
<option value="108106083/mod01lec23.mp4">JOINTLY CONTINUOUS RANDOM VARIABLES</option>
<option value="108106083/mod01lec24.mp4">TRANSFORMATION OF RANDOM VARIABLES-1</option>
<option value="108106083/mod01lec25.mp4">TRANSFORMATION OF RANDOM VARIABLES-2</option>
<option value="108106083/mod01lec26.mp4">TRANSFORMATION OF RANDOM VARIABLES-3</option>
<option value="108106083/mod01lec27.mp4">TRANSFORMATION OF RANDOM VARIABLES-4</option>
<option value="108106083/mod01lec28.mp4">INTEGRATION AND EXPECTATION-1</option>
<option value="108106083/mod01lec29.mp4">INTEGRATION AND EXPECTATION-2</option>
<option value="108106083/mod01lec30.mp4">PROPERTIES OF INTEGRALS</option>
<option value="108106083/mod01lec31.mp4">MONOTONE CONVERGENCE THEOREM</option>
<option value="108106083/mod01lec32.mp4">EXPECTATION OF DICRETE RANDOM VARIABLES, EXPECTATION OVER DIFFERENT SPACES</option>
<option value="108106083/mod01lec33.mp4">EXPECTATION OF DICRETE RANDOM VARIABLES</option>
<option value="108106083/mod01lec34.mp4">FATOU'S LEMMA & DOMINATED CONVERGENCE THEOREM</option>
<option value="108106083/mod01lec35.mp4">VARIANCE AND COVARIANCE</option>
<option value="108106083/mod01lec36.mp4">COVARIANCE, CORRELATION COEFFICIENT</option>
<option value="108106083/mod01lec37.mp4">CONDITIONAL EXPECTATION</option>
<option value="108106083/mod01lec38.mp4">MMSE ESTIMATOR, TRANSFORMS</option>
<option value="108106083/mod01lec39.mp4">MOMENT GENERATING FUNCTION</option>
<option value="108106083/mod01lec40.mp4">CHARACTERISTIC FUNCTION  1</option>
<option value="108106083/mod01lec41.mp4">CHARACTERISTIC FUNCTION  2</option>
<option value="108106083/mod01lec42.mp4">CONCENTRATION INEQUALITIES</option>
<option value="108106083/mod01lec43.mp4">CONVERGENCE OF RANDOM VARIABLES  1</option>
<option value="108106083/mod01lec44.mp4">CONVERGENCE OF RANDOM VARIABLES  2</option>
<option value="108106083/mod01lec45.mp4">CONVERGENCE OF RANDOM VARIABLES  3</option>
<option value="108106083/mod01lec46.mp4">CONVERGENCE OF CHARCTERISTIC FUNCTIONS, LIMIT THEOREMS</option>
<option value="108106083/mod01lec47.mp4">THE LAWS OF LARGE NUMBERS</option>
<option value="108106083/mod01lec48.mp4">THE CENTRAL LIMIT THEOREM</option>
<option value="108106083/mod01lec49.mp4">A BRIEF OVERVIEW OF MULTIVARIATE GAUSSIANS</option>
</select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108108034</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong> Power Electronics and Distributed Generation</strong></td>
	<td><strong>Dr. Vinod John</td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option value="108108034/mod01lec01.mp4">Course introduction and overview</option>
<option value="108108034/mod01lec02.mp4">Distributed generation technologies</option>
<option value="108108034/mod01lec03.mp4">Distributed storage technologies</option>
<option value="108108034/mod01lec04.mp4">Distribution system protection</option>
<option value="108108034/mod01lec05.mp4">Circuit breaker coordination</option>
<option value="108108034/mod01lec06.mp4">Symmetrical component analysis and sequence excitation</option>
<option value="108108034/mod01lec07.mp4">Modeling of distribution system components</option>
<option value="108108034/mod01lec08.mp4">Protection components</option>
<option value="108108034/mod01lec09.mp4">Impact of distributed generation of distribution protection</option>
<option value="108108034/mod01lec10.mp4">Consumption and distribution grounding</option>
<option value="108108034/mod01lec11.mp4">Islanding of distribution systems</option>
<option value="108108034/mod01lec12.mp4">Modeling of islanded distribution systems</option>
<option value="108108034/mod01lec13.mp4">Distribution system problems and examples</option>
<option value="108108034/mod01lec14.mp4">Distribution system problems and examples continued</option>
<option value="108108034/mod01lec15.mp4">Anti-islanding methods</option>
<option value="108108034/mod01lec16.mp4">Solid state circuit switching</option>
<option value="108108034/mod01lec17.mp4">Relaying for distributed generation</option>
<option value="108108034/mod01lec18.mp4">Feeder voltage regulation</option>
<option value="108108034/mod01lec19.mp4">Grounding, distribution protection coordination problems and examples</option>
<option value="108108034/mod01lec20.mp4">Ring and network distribution</option>
<option value="108108034/mod02lec21.mp4">Economic evaluation of DG systems</option>
<option value="108108034/mod02lec22.mp4">Design for effective initial cost</option>
<option value="108108034/mod03lec23.mp4">Single phase inverters</option>
<option value="108108034/mod03lec24.mp4">DC bus design in voltage source inverter</option>
<option value="108108034/mod03lec25.mp4">Electrolytic capacitor reliability and lifetime</option>
<option value="108108034/mod03lec26.mp4">Inverter switching and average model</option>
<option value="108108034/mod03lec27.mp4">Common mode and differential mode model of inverters</option>
<option value="108108034/mod03lec28.mp4">Two leg single phase inverter</option>
<option value="108108034/mod03lec29.mp4">Distribution system problems, and examples</option>
<option value="108108034/mod03lec30.mp4">DG evaluation problems and examples</option>
<option value="108108034/mod03lec31.mp4">Switch selection in two level voltage source inverters and loss evaluation</option>
<option value="108108034/mod03lec32.mp4">Thermal model, management and cycling failure of IGBT modules</option>
<option value="108108034/mod03lec33.mp4">Semiconductor switch design reliability considerations</option>
<option value="108108034/mod03lec34.mp4">AC filters for grid connected inverters</option>
<option value="108108034/mod03lec35.mp4">AC inductor design and need for LCL filter</option>
<option value="108108034/mod03lec36.mp4">LCL filter design</option>
<option value="108108034/mod03lec37.mp4">Examples in power electronic design for DG systems</option>
<option value="108108034/mod03lec38.mp4">Examples in power electronic design for DG systems continued</option>
<option value="108108034/mod03lec39.mp4">Higher order passive damping design for LCL filters</option>
<option value="108108034/mod03lec40.mp4">Balance of hardware component for inverters in DG systems</option>
</select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108108035</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Pulse width Modulation for Power Electronic Converters</strong></td>
	<td><strong>Dr. G. Narayanan</td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option value="108108035/mod01lec01.mp4">Electronic switches</option>
<option value="108108035/mod01lec02.mp4">DC  DC converters</option>
<option value="108108035/mod01lec03.mp4">DC  AC converters</option>
<option value="108108035/mod01lec04.mp4">Multilevel converters - I</option>
<option value="108108035/mod01lec05.mp4">Multilevel converters - II</option>
<option value="108108035/mod02lec06.mp4">Applications of voltage source converter  I</option>
<option value="108108035/mod02lec07.mp4">Applications of voltage source converter  II</option>
<option value="108108035/mod02lec08.mp4">Applications of voltage source converter  III</option>
<option value="108108035/mod03lec09.mp4">Purpose of PWM-I</option>
<option value="108108035/mod03lec10.mp4">Purpose of PWM-II</option>
<option value="108108035/mod04lec11.mp4">Low switching frequency PWM - I</option>
<option value="108108035/mod04lec12.mp4">Low switching frequency PWM  II</option>
<option value="108108035/mod04lec13.mp4">Selective harmonic elimination</option>
<option value="108108035/mod04lec14.mp4">Off-line optimized pulsewidth modulation</option>
<option value="108108035/mod05lec15.mp4">Sine-triangle pulsewidth modulation</option>
<option value="108108035/mod05lec16.mp4">Harmonic injection pulsewidth modulation</option>
<option value="108108035/mod05lec17.mp4">Bus-clamping pulsewidth modulation</option>
<option value="108108035/mod05lec18.mp4">Triangle-comparison based PWM for three-phase inverter</option>
<option value="108108035/mod06lec19.mp4">Concept of space vector</option>
<option value="108108035/mod06lec20.mp4">Conventional space vector PWM</option>
<option value="108108035/mod06lec21.mp4">Space vector based bus-clamping PWM</option>
<option value="108108035/mod06lec22.mp4">Space vector based advanced bus-clamping PWM</option>
<option value="108108035/mod07lec23.mp4">Harmonic analysis of PWM techniques</option>
<option value="108108035/mod07lec24.mp4">Analysis of RMS line current ripple using the notion of stator flux ripple</option>
<option value="108108035/mod07lec25.mp4">Evaluation of RMS line current ripple using the notion of stator flux ripple</option>
<option value="108108035/mod07lec26.mp4">Analysis and design of PWM techniques from line current ripple perspective</option>
<option value="108108035/mod08lec27.mp4">Instantaneous and average dc link current in a voltage source inverter</option>
<option value="108108035/mod08lec28.mp4">DC link current and DC capacitor current in a voltage source inverter</option>
<option value="108108035/mod09lec29.mp4">Analysis of torque ripple in induction motor drives - I</option>
<option value="108108035/mod09lec30.mp4">Analysis of torque ripple in induction motor drives - II</option>
<option value="108108035/mod10lec31.mp4">Evaluation of conduction loss in three-phase inverter</option>
<option value="108108035/mod10lec32.mp4">Evaluation of switching loss in three-phase inverter</option>
<option value="108108035/mod10lec33.mp4">Design of PWM for reduced switching loss in three-phase inverter</option>
<option value="108108035/mod11lec34.mp4">Effect of dead-time on inverter output voltage for continuous PWM schemes</option>
<option value="108108035/mod11lec35.mp4">Effect of dead-time on inverter output voltage for bus-clamping PWM schemes</option>
<option value="108108035/mod12lec36.mp4">Analysis of overmodulation in sine-triangle PWM from space vector perspectiv</option>
<option value="108108035/mod12lec37.mp4">Overmodulation in space vector modulated inverter</option>
<option value="108108035/mod13lec38.mp4">PWM for three-level neutral-point-clamped inverter  I</option>
<option value="108108035/mod13lec39.mp4">PWM for three-level neutral-point-clamped inverter - II</option>
<option value="108108035/mod13lec40.mp4">PWM for three-level neutral-point-clamped inverter - III</option>
</select></td>
	
	</tr>
	</form
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108101037</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Control Engineering</strong></td>
	<td><strong>Prof. S.D. Agashe</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108101037/lec01.mp4">The Control Problem</option>
      
      <option  value="108101037/lec02.mp4">Some More Examples</option>
      
      <option  value="108101037/lec03.mp4">Different Kinds of Control Systems</option>
      
      <option  value="108101037/lec04.mp4">History of Feedback</option>
      
      <option  value="108101037/lec05.mp4">Modern Control Problems</option>
      
      <option  value="108101037/lec06.mp4">DC Motor Speed Control</option>
      
      <option  value="108101037/lec07.mp4">System Modelling, Analogy</option>
      
      <option  value="108101037/lec08.mp4">Causes of System Error</option>
      
      <option  value="108101037/lec09.mp4">Calculation of Error</option>
      
      <option  value="108101037/lec10.mp4">Control System Sensitivity</option>
      
      <option  value="108101037/lec11.mp4">Automatic Control of DC Motor</option>
      
      <option  value="108101037/lec12.mp4">Proportional Control</option>
      
      <option  value="108101037/lec13.mp4">Non-Unity Feedback</option>
      
      <option  value="108101037/lec14.mp4">Signal-Flow Graph</option>
      
      <option  value="108101037/lec15.mp4">Mason's Gain Formula</option>
      
      <option  value="108101037/lec16.mp4">Signal-Flow Graph for DC Motor Control</option>
      
      <option  value="108101037/lec17.mp4">Steady-State Calculations</option>
      
      <option  value="108101037/lec18.mp4">Differential Equation Model and Laplace Transformation Model</option>
      
      <option  value="108101037/lec19.mp4">D-Operator Method</option>
      
      <option  value="108101037/lec20.mp4">Second-Order System Response</option>
      
      <option  value="108101037/lec21.mp4">Frequency Response</option>
      
      <option  value="108101037/lec22.mp4">Laplace Transformation Theorems</option>
      
      <option  value="108101037/lec23.mp4">Final Value Theorem</option>
      
      <option  value="108101037/lec24.mp4">Transfer Function and Pole-Zero Diagram</option>
      
      <option  value="108101037/lec25.mp4">'Good' Poles and 'Bad' Poles</option>
      
      <option  value="108101037/lec26.mp4">Signal Flow Graph with Transfer Functions</option>
      
      <option  value="108101037/lec27.mp4">s-Domain and t-Domain</option>
      
      <option  value="108101037/lec28.mp4">Second-Order System Response in s-Domain</option>
      
      <option  value="108101037/lec29.mp4">Integral Feedback</option>
      
      <option  value="108101037/lec30.mp4">Root-Locus Method</option>
      
      <option  value="108101037/lec31.mp4">Root-Locus Rules</option>
      
      <option  value="108101037/lec32.mp4">Asymptotes of Root Locus</option>
      
      <option  value="108101037/lec33.mp4">Routh Array</option>
      
      <option  value="108101037/lec34.mp4">Singular Cases</option>
      
      <option  value="108101037/lec35.mp4">Closed Loop Poles</option>
      
      <option  value="108101037/lec36.mp4">Controller in the Forwarded Path</option>
      
      <option  value="108101037/lec37.mp4">Mapping of Control in the Complex-Plane</option>
      
      <option  value="108101037/lec38.mp4">Encirclement by a Curve</option>
      
      <option  value="108101037/lec39.mp4">Nyquist Criterion</option>
      
      <option  value="108101037/lec40.mp4">Application of the Nyquist Criterion</option>
      
      <option  value="108101037/lec41.mp4">Polar Plot and Bode Plots</option>
      
      <option  value="108101037/lec42.mp4">Logarithmic Scale for Frequency</option>
      
      <option  value="108101037/lec43.mp4">'Asymptotic' DB Gain</option>
      
      <option  value="108101037/lec44.mp4">Compensating Network</option>
      
      <option  value="108101037/lec45.mp4">Nichols' Chart</option>
      
      <option  value="108101037/lec46.mp4">Time Domain Methods of Analysis and Design</option>
      
      <option  value="108101037/lec47.mp4">State-Variable Equations</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108101038</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power Electronics</strong></td>
	<td><strong>Prof. B.G. Fernandes,Prof. Kishore Chatterjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108101038/lec01.mp4">Power Electronics</option>
      
      <option  value="108101038/lec02.mp4">Power Electronics</option>
      
      <option  value="108101038/lec03.mp4">Power Electronics</option>
      
      <option  value="108101038/lec04.mp4">Power Electronics</option>
      
      <option  value="108101038/lec05.mp4">Power Electronics</option>
      
      <option  value="108101038/lec06.mp4">Power Electronics</option>
      
      <option  value="108101038/lec07.mp4">Power Electronics</option>
      
      <option  value="108101038/lec08.mp4">Power Electronics</option>
      
      <option  value="108101038/lec09.mp4">Power Electronics</option>
      
      <option  value="108101038/lec10.mp4">Power Electronics</option>
      
      <option  value="108101038/lec11.mp4">Power Electronics</option>
      
      <option  value="108101038/lec12.mp4">Power Electronics</option>
      
      <option  value="108101038/lec13.mp4">Power Electronics</option>
      
      <option  value="108101038/lec14.mp4">Power Electronics</option>
      
      <option  value="108101038/lec15.mp4">Power Electronics</option>
      
      <option  value="108101038/lec16.mp4">Power Electronics</option>
      
      <option  value="108101038/lec17.mp4">Power Electronics</option>
      
      <option  value="108101038/lec18.mp4">Power Electronics</option>
      
      <option  value="108101038/lec19.mp4">Power Electronics</option>
      
      <option  value="108101038/lec20.mp4">Power Electronics</option>
      
      <option  value="108101038/lec21.mp4">Power Electronics</option>
      
      <option  value="108101038/lec22.mp4">Power Electronics</option>
      
      <option  value="108101038/lec23.mp4">Power Electronics</option>
      
      <option  value="108101038/lec24.mp4">Power Electronics</option>
      
      <option  value="108101038/lec25.mp4">Power Electronics</option>
      
      <option  value="108101038/lec26.mp4">Power Electronics</option>
      
      <option  value="108101038/lec27.mp4">Power Electronics</option>
      
      <option  value="108101038/lec28.mp4">Power Electronics</option>
      
      <option  value="108101038/lec29.mp4">Power Electronics</option>
      
      <option  value="108101038/lec30.mp4">Power Electronics</option>
      
      <option  value="108101038/lec31.mp4">Power Electronics</option>
      
      <option  value="108101038/lec32.mp4">Power Electronics</option>
      
      <option  value="108101038/lec33.mp4">Power Electronics</option>
      
      <option  value="108101038/lec34.mp4">Power Electronics</option>
      
      <option  value="108101038/lec35.mp4">Power Electronics</option>
      
      <option  value="108101038/lec36.mp4">Power Electronics</option>
      
      <option  value="108101038/lec37.mp4">Power Electronics</option>
      
      <option  value="108101038/lec38.mp4">Power Electronics</option>
      
      <option  value="108101038/lec39.mp4">Power Electronics</option>
      
      <option  value="108101038/lec40.mp4">Power Electronics</option>
      
      <option  value="108101038/lec41.mp4">Power Electronics</option>
      
      <option  value="108101038/lec42.mp4">Power Electronics</option>
      
      <option  value="108101038/lec43.mp4">Power Electronics</option>
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108101039</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power System Protection</strong></td>
	<td><strong>Prof. S.A. Soman</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select1" id="select1" onchange="goToPage('select1');"><option  value="#">Select </option>
      
      <option  value="108101039/Power%20System%20Protection/Course Objective.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>

 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108101040</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power Systems Operation and Control</strong></td>
	<td><strong>Dr. A.M. Kulkarni</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select2" id="select2" onchange="goToPage('select2');"><option  value="#">Select </option>
      
      <option  value="108101040/Power Systems Operation and Control/Course%20Objective.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108102042</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Circuit Theory</strong></td>
	<td><strong>Prof. S.C. Dutta Roy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108102042/lec01.mp4">Review of Signals and Systems</option>
      
      <option  value="108102042/lec02.mp4">Review of Signals and Systems</option>
      
      <option  value="108102042/lec03.mp4">Network Equations; Initial and Final Conditions</option>
      
      <option  value="108102042/lec04.mp4">Problem Session1</option>
      
      <option  value="108102042/lec05.mp4">Step, Impulse and Complete Responses</option>
      
      <option  value="108102042/lec06.mp4">2nd Order Circuits:Magnetically Coupled Circuits</option>
      
      <option  value="108102042/lec07.mp4">Transformer Transform Domain Analysis</option>
      
      <option  value="108102042/lec08.mp4">Problem Session 2 : Step,Impulse</option>
      
      <option  value="108102042/lec09.mp4">Network Theorems and Network Functions</option>
      
      <option  value="108102042/lec10.mp4">Network Functions(Contd.)</option>
      
      <option  value="108102042/lec11.mp4">Amplitude and Phase of Network Functions</option>
      
      <option  value="108102042/lec12.mp4">Problem Session 3 : Network Theorems Transform</option>
      
      <option  value="108102042/lec13.mp4">Poles, Zeros and Network Response</option>
      
      <option  value="108102042/lec14.mp4">Single Tuned Circuits</option>
      
      <option  value="108102042/lec15.mp4">Single Tuned Circuits (Contd.)</option>
      
      <option  value="108102042/lec16.mp4">Double Tuned Circuits</option>
      
      <option  value="108102042/lec17.mp4">Double Tuned Circuits (Contd.)</option>
      
      <option  value="108102042/lec18.mp4">Problem Session 4 : Network Functions, Analysis</option>
      
      <option  value="108102042/lec19.mp4">Double Tuned Circuits (Contd.)</option>
      
      <option  value="108102042/lec20.mp4">Concept of Delay and Introduction</option>
      
      <option  value="108102042/lec21.mp4">Two-port Networks (Contd.)</option>
      
      <option  value="108102042/lec22.mp4">Problem Session 5</option>
      
      <option  value="108102042/lec23.mp4">Minor - 1</option>
      
      <option  value="108102042/lec24.mp4">The Hybrid & Transmission Parameters of 2 ports</option>
      
      <option  value="108102042/lec25.mp4">Problem Session 6: Two - port networks</option>
      
      <option  value="108102042/lec26.mp4">Two - port Network parameters</option>
      
      <option  value="108102042/lec27.mp4">Two-port Interconnections</option>
      
      <option  value="108102042/lec28.mp4">Interconnection of Two-port Networks(Contd.)</option>
      
      <option  value="108102042/lec29.mp4">Problem Session 7 : Two-port Networks(Contd.)</option>
      
      <option  value="108102042/lec30.mp4">Scattering Matrix</option>
      
      <option  value="108102042/lec31.mp4">Scattering Parameters of a Two-port</option>
      
      <option  value="108102042/lec32.mp4">Problem Session 8 : Two- port Parameters</option>
      
      <option  value="108102042/lec33.mp4">Solutions of Minor - 2 Problems</option>
      
      <option  value="108102042/lec34.mp4">Insertion Loss</option>
      
      <option  value="108102042/lec35.mp4">Example of Insertion Loss and Elements</option>
      
      <option  value="108102042/lec36.mp4">Elements of Realizability Theory (Contd.)</option>
      
      <option  value="108102042/lec37.mp4">Positive Real Functions</option>
      
      <option  value="108102042/lec38.mp4">Testing of Positive Real Functions</option>
      
      <option  value="108102042/lec39.mp4">Problem Session 9</option>
      
      <option  value="108102042/lec40.mp4">More on PRF's and their Synthesis</option>
      
      <option  value="108102042/lec41.mp4">LC Driving Point Functions</option>
      
      <option  value="108102042/lec42.mp4">LC Driving Point Synthesis (Contd.)</option>
      
      <option  value="108102042/lec43.mp4">RC and RL Driving Point Synthesis</option>
      
      <option  value="108102042/lec44.mp4">Problem Session 10 : LC Driving Point Synthesis</option>
      
      <option  value="108102042/lec45.mp4">RC & RL One-port Synthesis (Contd.)</option>
      
      <option  value="108102042/lec46.mp4">Elementary RLC One-port Synthesis</option>
      
      <option  value="108102042/lec47.mp4">Properties and Synthesis of Transfer Parameters</option>
      
      <option  value="108102042/lec48.mp4">Resistance Terminated L C Ladder</option>
      
      <option  value="108102042/lec49.mp4">Resistance Terminated LC Ladder ( Contd.)</option>
      
      <option  value="108102042/lec50.mp4">Problem session 11: Two-port Synthesis</option>
      
      <option  value="108102042/lec51.mp4">Network Transmission Criteria</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108102043</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Control Engineering</strong></td>
	<td><strong>Prof. M. Gopal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108102043/lec01.mp4">Introduction to control problem</option>
      
      <option  value="108102043/lec02.mp4">Basic Feedback Structure</option>
      
      <option  value="108102043/lec03.mp4">Introduction to Control Problem (Contd.)</option>
      
      <option  value="108102043/lec04.mp4">Dynamic Systems and Dynamic Response</option>
      
      <option  value="108102043/lec05.mp4">Dynamic Systems and Dynamic Response (Contd.)</option>
      
      <option  value="108102043/lec06.mp4">Dynamic Systems and Dynamic Response (Contd.)</option>
      
      <option  value="108102043/lec07.mp4">Dynamic Systems and Dynamic Response (Contd.)</option>
      
      <option  value="108102043/lec08.mp4">Dynamic Systems and Dynamic Response (Contd.)</option>
      
      <option  value="108102043/lec09.mp4">Dynamic Systems and Dynamic Response (Contd.)</option>
      
      <option  value="108102043/lec10.mp4">Models of Industrial Control Devices and Systems</option>
      
      <option  value="108102043/lec11.mp4">Models of Industrial Control Devices and Systems (Contd.)</option>
      
      <option  value="108102043/lec12.mp4">Models of Industrial Control Devices and Systems( Contd.)</option>
      
      <option  value="108102043/lec13.mp4">Models of Industrial Control Devices and Systems( Contd.)</option>
      
      <option  value="108102043/lec14.mp4">Models of Industrial Control Devices and Systems( Contd.)</option>
      
      <option  value="108102043/lec15.mp4">Models of Industrial Control Devices and Systems( Contd.)</option>
      
      <option  value="108102043/lec16.mp4">Models of Industrial Control Devices and Systems (Contd.)</option>
      
      <option  value="108102043/lec17.mp4">Models of Industrial Control Devices and Systems (Contd.)</option>
      
      <option  value="108102043/lec18.mp4">Models of Industrial Control Devices and Systems (Contd.)</option>
      
      <option  value="108102043/lec19.mp4">Basic Principles of Feedback Control</option>
      
      <option  value="108102043/lec20.mp4">Basic Principles of Feedback Control (Contd.)</option>
      
      <option  value="108102043/lec21.mp4">Basic Principles of Feedback Control (Contd.)</option>
      
      <option  value="108102043/lec22.mp4">Basic Principles of Feedback Control (Contd.)</option>
      
      <option  value="108102043/lec23.mp4">Concepts of stability and Routh Stability Criterion</option>
      
      <option  value="108102043/lec24.mp4">Concepts of stability and Routh Stability Criterion (Contd.)</option>
      
      <option  value="108102043/lec25.mp4">Concepts of stability and Routh Stability Criterion (Contd.)</option>
      
      <option  value="108102043/lec26.mp4">The Performance of Feedback Systems</option>
      
      <option  value="108102043/lec27.mp4">The Performance of Feedback Systems (Contd.)</option>
      
      <option  value="108102043/lec28.mp4">The Performance of Feedback Systems (Contd.)</option>
      
      <option  value="108102043/lec29.mp4">The Performance of Feedback Systems (Contd.)</option>
      
      <option  value="108102043/lec30.mp4">Compensator Design Using Root Locus Plots</option>
      
      <option  value="108102043/lec31.mp4">Compensator Design Using Root Locus Plots (Contd.)</option>
      
      <option  value="108102043/lec32.mp4">Compensator Design Using Root Locus Plots (Contd.)</option>
      
      <option  value="108102043/lec33.mp4">Compensator Design Using Root Locus Plots (Contd.)</option>
      
      <option  value="108102043/lec34.mp4">Compensator Design Using Root Locus Plots (Contd.)</option>
      
      <option  value="108102043/lec35.mp4">The Nyquist Stability Criterion and Stability Margins</option>
      
      <option  value="108102043/lec36.mp4">The Nyquist Stability Criterion and Stability Margins (Contd.)</option>
      
      <option  value="108102043/lec37.mp4">The Nyquist Stability Criterion and Stability Margins (Contd.)</option>
      
      <option  value="108102043/lec38.mp4">The Nyquist Stability Criterion and Stability Margins (Contd.)</option>
      
      <option  value="108102043/lec39.mp4">Feedback System Performance Based on the Frequency Response</option>
      
      <option  value="108102043/lec40.mp4">Feedback System Performance Based on the Frequency Response (Contd.)</option>
      
      <option  value="108102043/lec41.mp4">Compensator Design Using Frequency Response Plots</option>
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108102044</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Control Engineering</strong></td>
	<td><strong>Prof. M. Gopal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108102044/Control system design n principles/index.htm">contents</option></select></td></tr></form>
      
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108102046</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Industrial Drives</strong></td>
	<td><strong>Dr.K .R. Rajagopal </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108102046/Industrial Drives/index.htm">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108104051</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power Systems Analysis</strong></td>
	<td><strong>Prof. Arindam Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108104051/power-system/ui/About-Faculty.html">contents</option></select></td></tr></form>
      
      
        <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108105053</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Basic Electrical Technology</strong></td>
	<td><strong>Prof. T.K. Bhattacharya,Prof. N.K. De,Prof. G.D. Roy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105053/Basic Electrical Technology/New_index1.html">contents</option></select></td></tr></form>
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108105057</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Embedded Systems</strong></td>
	<td><strong>Prof. Amit Patra,Prof. Rajib Mall,Prof. A. Routray</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105057/Embedded systems/New_index1.html">contents</option></select></td></tr></form>
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108105061</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Illumination Engineering</strong></td>
	<td><strong>Prof. N.K. Kishore</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105061/Illumination Engg/New_index1.html">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108105063</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Industrial Automation and Control</strong></td>
	<td><strong>Prof. S. Mukhopadhyay,Prof. S. Sen</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105063/Industrial Automation control/New_index1.html">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108105066</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power Electronics</strong></td>
	<td><strong>Dr. D.Kastha,Prof. D.Prasad,Prof. N.K. De,Prof. Sabyasachi Sengupta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105066/Power Electronics/New_index1.html">contents</option></select></td></tr></form>
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108108078</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Non-Conventional Energy Systems</strong></td>
	<td><strong>Prof. L. Umanand</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc-BANGLORE</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108108078/Non-Conventional Energy Systems/New_index1.html">contents</option></select></td></tr></form>
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108108079</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Numerical Analysis</strong></td>
	<td><strong>Prof. Vittal Rao</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc-BANGLORE</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108108079/Numerical Analysis/New_index1.html">contents</option></select></td></tr></form>
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108104048</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>High Voltage Engineering</strong></td>
	<td><strong>Prof. Ravindra Arora</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108104048/HighVoltageEngg/ui/About-Faculty.html">contents</option></select></td></tr></form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108102045</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Embedded Systems</strong></td>
	<td><strong>Prof. Santanu Chaudhary</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108102045/lec01.mp4">Embedded Systems: Introduction</option>
      
      <option  value="108102045/lec02.mp4">Embedded Hardware</option>
      
      <option  value="108102045/lec03.mp4">PIC: Instruction Set</option>
      
      <option  value="108102045/lec04.mp4">PIC Peripherals On Chip</option>
      
      <option  value="108102045/lec05.mp4">ARM Processor</option>
      
      <option  value="108102045/lec06.mp4">More ARM Instructions</option>
      
      <option  value="108102045/lec07.mp4">ARM: Interrupt Processing</option>
      
      <option  value="108102045/lec08.mp4">Digital Signal Processors</option>
      
      <option  value="108102045/lec09.mp4">More on DSP Processors</option>
      
      <option  value="108102045/lec10.mp4">System On Chip (SOC)</option>
      
      <option  value="108102045/lec11.mp4">Memory</option>
      
      <option  value="108102045/lec12.mp4">Memory Organization</option>
      
      <option  value="108102045/lec13.mp4">Virtual Memory and Memory Management Unit</option>
      
      <option  value="108102045/lec14.mp4">Bus Structure</option>
      
      <option  value="108102045/lec15.mp4">Bus Structure 2</option>
      
      <option  value="108102045/lec16.mp4">Bus Structure - 3 Serial Interfaces</option>
      
      <option  value="108102045/lec17.mp4">Serial Interfaces</option>
      
      <option  value="108102045/lec18.mp4">Power Aware Architecture</option>
      
      <option  value="108102045/lec19.mp4">Software for Embedded Systems</option>
      
      <option  value="108102045/lec20.mp4">Fundamentals of Embedded Operating Systems</option>
      
      <option  value="108102045/lec21.mp4">Scheduling Policies</option>
      
      <option  value="108102045/lec22.mp4">Resource Management</option>
      
      <option  value="108102045/lec23.mp4">Embedded - OS</option>
      
      <option  value="108102045/lec24.mp4">Networked Embedded System</option>
      
      <option  value="108102045/lec25.mp4">Networked Embedded Systems - II</option>
      
      <option  value="108102045/lec26.mp4">Networked Embedded Systems - III</option>
      
      <option  value="108102045/lec27.mp4">Networked Embedded Systems - IV</option>
      
      <option  value="108102045/lec28.mp4">Designing Embedded Systems</option>
      
      <option  value="108102045/lec29.mp4">Designing Embedded Systems - II</option>
      
      <option  value="108102045/lec30.mp4">Designing Embedded Systems- III</option>
      
      <option  value="108102045/lec31.mp4">Embedded System Design - IV</option>
      
      <option  value="108102045/lec32.mp4">Designing Embedded Systems - V</option>
      
      <option  value="108102045/lec33.mp4">Platform Based Design</option>
      
      <option  value="108102045/lec34.mp4">Compilers for Embedded Systems</option>
      
      <option  value="108102045/lec35.mp4">Developing Embedded Systems</option>
      
      <option  value="108102045/lec36.mp4">Building Dependable Embedded Systems</option>
      
      <option  value="108102045/lec37.mp4">Pervasive & Ubiquitous Computing</option>
          </select></td>
	

	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108102047</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power System Generation, Transmission and Distribution (Encapsulated from earlier Video)</strong></td>
	<td><strong>Prof. D.P. Kothari</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108102047/lec01.mp4">Electric Energy Systems A Perspective</option>
      
      <option  value="108102047/lec02.mp4">Structure of Power Systems</option>
      
      <option  value="108102047/lec03.mp4">Conventional Sources of Electric Energy</option>
      
      <option  value="108102047/lec04.mp4">Hydroelectric Power Generation</option>
      
      <option  value="108102047/lec05.mp4">Non Conventional Energy Sources</option>
      
      <option  value="108102047/lec06.mp4">Renewable Energy (Contd.)</option>
      
      <option  value="108102047/lec07.mp4">Energy Storage</option>
      
      <option  value="108102047/lec08.mp4">Deregulation</option>
      
      <option  value="108102047/lec09.mp4">Air Pollutants</option>
      
      <option  value="108102047/lec10.mp4">Transmission Line Parameters</option>
      
      <option  value="108102047/lec11.mp4">Capacitance of Transmission Lines</option>
      
      <option  value="108102047/lec12.mp4">Characteristics and Performance of Transmission Lines</option>
      
      <option  value="108102047/lec13.mp4">Voltage Regulation (VR)</option>
      
      <option  value="108102047/lec14.mp4">Power Flow through a Line</option>
      
      <option  value="108102047/lec15.mp4">Methods of Voltage Control</option>
      
      <option  value="108102047/lec16.mp4">Compensation of Transmission Lines</option>
      
      <option  value="108102047/lec17.mp4">Compensation of Transmission Lines (Contd.)</option>
      
      <option  value="108102047/lec18.mp4">Underground Cables</option>
      
      <option  value="108102047/lec19.mp4">Cables (Contd.)</option>
      
      <option  value="108102047/lec20.mp4">Insulators for Overhead Lines</option>
      
      <option  value="108102047/lec21.mp4">HVDC</option>
      
      <option  value="108102047/lec22.mp4">HVDC (Contd.)</option>
      
      <option  value="108102047/lec23.mp4">Distribution Systems</option>
      
      <option  value="108102047/lec24.mp4">Automatic Generation Control</option>
      
      <option  value="108102047/lec25.mp4">Automatic Generation Control (Contd.)</option>
      
      <option  value="108102047/lec26.mp4">Load Flow Studies</option>
      
      <option  value="108102047/lec27.mp4">Load Flow Problem</option>
      
      <option  value="108102047/lec28.mp4">Load Flow Analysis (Contd.), Gauss Siedel Method</option>
      
      <option  value="108102047/lec29.mp4">Newton Raphson (NR), Load Flow Method</option>
      
      <option  value="108102047/lec30.mp4">Fast Decoupled Load Flow</option>
      
      <option  value="108102047/lec31.mp4">Control of Voltage Profile</option>
      
      <option  value="108102047/lec32.mp4">Optimal System Operation (Economic Operation)</option>
      
      <option  value="108102047/lec33.mp4">Optimal Unit Commitment</option>
      
      <option  value="108102047/lec34.mp4">Optimal Generation Scheduling</option>
      
      <option  value="108102047/lec35.mp4">Optimal Load Flow (Contd.) and Hydro Thermal Scheduling</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108102080</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power System Dynamics</strong></td>
	<td><strong>Dr. M.L. Kothari</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108102080/lec01.mp4">Introduction to Power System Stability Problem - Part-1</option>
      
      <option  value="108102080/lec02.mp4">Introduction to Power System Stability Problem - Part-2</option>
      
      <option  value="108102080/lec03.mp4">Introduction to Power System Stability Problem - Part-3</option>
      
      <option  value="108102080/lec04.mp4">Solution of Switching Equation</option>
      
      <option  value="108102080/lec05.mp4">The Equal Area Criterion for Stability - Part-1</option>
      
      <option  value="108102080/lec06.mp4">The Equal Area Criterion for Stability - Part-2</option>
      
      <option  value="108102080/lec07.mp4">Transient Stability Analysis of a Multi Machine System</option>
      
      <option  value="108102080/lec08.mp4">Modeling of Synchronous Machine - Part-1</option>
      
      <option  value="108102080/lec09.mp4">Modeling of Synchronous Machine - Part-2</option>
      
      <option  value="108102080/lec10.mp4">Modeling of Synchronous Machine - Part-3</option>
      
      <option  value="108102080/lec11.mp4">Modeling of Synchronous Machine - Part-4</option>
      
      <option  value="108102080/lec12.mp4">Synchronous Machine Representation for Stability Studies - Part-1</option>
      
      <option  value="108102080/lec13.mp4">Synchronous Machine Representation for Stability Studies - Part-2</option>
      
      <option  value="108102080/lec14.mp4">Excitation Systems - Part-1</option>
      
      <option  value="108102080/lec15.mp4">Excitation Systems - Part-2</option>
      
      <option  value="108102080/lec16.mp4">Modeling of Excitation Systems - Part-1</option>
      
      <option  value="108102080/lec17.mp4">Modeling of Excitation Systems - Part-2</option>
      
      <option  value="108102080/lec18.mp4">Small Signal Stability of a Single Machine Infinite Bus System - Part-1</option>
      
      <option  value="108102080/lec19.mp4">Small Signal Stability of a Single Machine Infinite Bus System - Part-2</option>
      
      <option  value="108102080/lec20.mp4">Small Signal Stability of a Single Machine Infinite Bus System - Part-3</option>
      
      <option  value="108102080/lec21.mp4">Small Signal Stability of a Single Machine Infinite Bus System - Part-4</option>
      
      <option  value="108102080/lec22.mp4">Small Signal Stability of a Single Machine Infinite Bus System - Part-5</option>
      
      <option  value="108102080/lec23.mp4">Dynamic Modeling of Steam turbines and Governors</option>
      
      <option  value="108102080/lec24.mp4">Dynamic modeling of Hydro Turbines and Governors</option>
      
      <option  value="108102080/lec25.mp4">Load modeling for Stability Studies</option>
      
      <option  value="108102080/lec26.mp4">Numerical Integration Methods for Solving a Set of Ordinary Nonlinear Differential Equation</option>
      
      <option  value="108102080/lec27.mp4">Simulation of Power System Dynamic Response</option>
      
      <option  value="108102080/lec28.mp4">Dynamic Equivalents for Large Scale Systems - Part-1</option>
      
      <option  value="108102080/lec29.mp4">Dynamic Equivalents for Large Scale Systems - Part-2</option>
      
      <option  value="108102080/lec30.mp4">Dynamic Equivalents for Large Scale Systems - Part-3</option>
      
      <option  value="108102080/lec31.mp4">Direct Method of Transient Stability Analysis - Part-1</option>
      
      <option  value="108102080/lec32.mp4">Direct Method of Transient Stability Analysis - Part-2</option>
      
      <option  value="108102080/lec33.mp4">Sub Synchronous Oscillations - Part-1</option>
      
      <option  value="108102080/lec34.mp4">Sub Synchronous Oscillations - Part-2</option>
      
      <option  value="108102080/lec35.mp4">Voltage Stability - Part-1</option>
      
      <option  value="108102080/lec36.mp4">Voltage Stability - Part-2</option>
      
      <option  value="108102080/lec37.mp4">Voltage Stability - Part-3</option>
      
      <option  value="108102080/lec38.mp4">Voltage Stability - Part-4</option>
      
      <option  value="108102080/lec39.mp4">Methods of Improving Stability - Part-1</option>
      
      <option  value="108102080/lec40.mp4">Methods of Improving Stability - Part-2</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108103007</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Advanced Control Systems</strong></td>
	<td><strong>Prof. S. Majhi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108103007/mod01lec01.mp4">Introduction</option>
      
      <option  value="108103007/mod01lec02.mp4">Control structures and performance measures</option>
      
      <option  value="108103007/mod01lec03.mp4">Time and frequency domain performance measures</option>
      
      <option  value="108103007/mod01lec04.mp4">Design of controller</option>
      
      <option  value="108103007/mod01lec05.mp4">Design of controller for SISO system</option>
      
      <option  value="108103007/mod01lec06.mp4">Controller design for TITO processes</option>
      
      <option  value="108103007/mod01lec07.mp4">Limitations of PID controllers </option>
      
      <option  value="108103007/mod01lec08.mp4">PI-PD controller for SISO system </option>
      
      <option  value="108103007/mod01lec09.mp4">PID-P controller for Two Input Two Output system</option>
      
      <option  value="108103007/mod01lec10.mp4">Effects of measurement noise and load</option>
      
      <option  value="108103007/mod02lec01.mp4">Identification of dynamic models of plants</option>
      
      <option  value="108103007/mod02lec02.mp4">Relay control system for identification</option>
      
      <option  value="108103007/mod02lec03.mp4">Off-line identification of process dynamics</option>
      
      <option  value="108103007/mod02lec04.mp4">On-line identification of plant dynamics</option>
      
      <option  value="108103007/mod03lec01.mp4">State space based identification</option>
      
      <option  value="108103007/mod03lec02.mp4">State space analysis of systems</option>
      
      <option  value="108103007/mod03lec03.mp4">State space based identification of systems -1</option>
      
      <option  value="108103007/mod03lec04.mp4">State space based identification of systems -2</option>
      
      <option  value="108103007/mod03lec05.mp4">Identification of simple systems</option>
      
      <option  value="108103007/mod03lec06.mp4">Identification of FOPDT model</option>
      
      <option  value="108103007/mod03lec07.mp4">Identification of second order plus dead time model</option>
      
      <option  value="108103007/mod03lec08.mp4">Identification of SOPDT model</option>
      
      <option  value="108103007/mod03lec09.mp4">Steady state gain from asymmetrical relay test</option>
      
      <option  value="108103007/mod03lec10.mp4">Identification of SOPDT model with pole multiplicity</option>
      
      <option  value="108103007/mod03lec11.mp4">Existence of limit cycle for unstable system</option>
      
      <option  value="108103007/mod03lec12.mp4">Identification procedures</option>
      
      <option  value="108103007/mod03lec13.mp4">Identification of underdamped systems</option>
      
      <option  value="108103007/mod03lec14.mp4">Off-line identification of TITO systems</option>
      
      <option  value="108103007/mod03lec15.mp4">On-line identification of TITO systems</option>
      
      <option  value="108103007/mod03lec16.mp4">Review of time domain based identification</option>
      
      <option  value="108103007/mod03lec17.mp4">DF based analytical expressions for on-line identification</option>
      
      <option  value="108103007/mod03lec18.mp4">Model parameter accuracy and sensitivity</option>
      
      <option  value="108103007/mod03lec19.mp4">Improved identification using Fourier series and wavelet transform</option>
      
      <option  value="108103007/mod03lec20.mp4">Reviews of DF based identification</option>
      
      <option  value="108103007/mod04lec01.mp4">Advanced Smith predictor controller</option>
      
      <option  value="108103007/mod04lec02.mp4">Design of controllers for the advanced Smith predictor</option>
      
      <option  value="108103007/mod04lec03.mp4">Model-free controller design</option>
      
      <option  value="108103007/mod04lec04.mp4">Model Based PID controller Design I</option>
      
      <option  value="108103007/mod04lec05.mp4">Model Based PI-PD controller Design II</option>
      
      <option  value="108103007/mod04lec06.mp4">Tuning of reconfigurable PID controllers</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108103008</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Digital Control System</strong></td>
	<td><strong>Dr. Indrani Kar,Prof. S. Majhi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108103008/module1/index.html">Introduction</option>
      
      <option  value="108103008/module1/lec2/1.html">Discrete time system representation</option>
      
      <option  value="108103008/module1/lec3/1.html">Mathematical Modelling of Sampling Process</option>
      
      <option  value="108103008/module1/lec4/1.html">Data reconstruction</option>
      
      <option  value="108103008/module2/lec1/1.html">Revisiting Z-transform</option>
      
      <option  value="108103008/module2/lec2/1.html">Mapping of s-plane to z-plane</option>
      
      <option  value="108103008/module2/lec3/1.html">Pulse transfer function</option>
      
      <option  value="108103008/module2/lec4/1.html">Pulse transfer function of closed loop system</option>
      
      <option  value="108103008/module2/lec5/1.html">Sampled signal flow graph</option>
      
      <option  value="108103008/module3/lec1/1.html">Jury stability test</option>
      
      <option  value="108103008/module3/lec2/1.html">Stability analysis using bi-linear tranformation</option>
      
      <option  value="108103008/module4/lec1/1.html">Transient and steady state responses</option>
      
      <option  value="108103008/module4/lec2/1.html">Time response parameters of a prototype second order system</option>
      
      <option  value="108103008/module5/lec1/1.html">Root locus method</option>
      
      <option  value="108103008/module5/lec2/1.html">Controller design using root locus</option>
      
      <option  value="108103008/module5/lec3/1.html">Root locus based controller design using MATLAB</option>
      
      <option  value="108103008/module5/lec4/1.html">Nyquist stability criteria</option>
      
      <option  value="108103008/module5/lec5/1.html">Bode plot</option>
      
      <option  value="108103008/module5/lec6/1.html">Lead compensator design using Bode plot</option>
      
      <option  value="108103008/module5/lec7/1.html">Lag compensator design using Bode plot</option>
      
      <option  value="108103008/module5/lec8/1.html">Lag-lead compensator design in frequency domain</option>
      
      <option  value="108103008/module6/lec1/1.html">Design of digital control systems with deadbeat response</option>
      
      <option  value="108103008/module6/lec2/1.html">Practical issues with deadbeat response design</option>
      
      <option  value="108103008/module6/lec3/1.html">Sampled data control systems with deadbeat response</option>
      
      <option  value="108103008/module7/lec1/1.html">Introduction to state variable model</option>
      
      <option  value="108103008/module7/lec2/1.html">Various canonical forms</option>
      
      <option  value="108103008/module7/lec3/1.html">Characteristic equation, state transition matrix</option>
      
      <option  value="108103008/module7/lec4/1.html">Solution to discrete state equation</option>
      
      <option  value="108103008/module8/lec1/1.html">Controllability and observability</option>
      
      <option  value="108103008/module8/lec2/1.html">Stability</option>
      
      <option  value="108103008/module8/lec3/1.html">Lyapunov stability theorem</option>
      
      <option  value="108103008/module9/lec1/1.html">Pole placement by state feedback</option>
      
      <option  value="108103008/module9/lec2/1.html">Set Point Tracking Controller</option>
      
      <option  value="108103008/module9/lec3/1.html">Full order observer</option>
      
      <option  value="108103008/module9/lec4/1.html">Reduced order observer</option>
      
      <option  value="108103008/module10/lec1/1.html">Output feedback design: Theory</option>
      
      <option  value="108103008/module10/lec2/1.html">Output feedback design: Examples</option>
      
      <option  value="108103008/module11/lec1/1.html">Basics of optimal control</option>
      
      <option  value="108103008/module11/lec2/1.html">Performance indices</option>
      
      <option  value="108103008/module11/lec3/1.html">Linear Quadratic Regulator (LQR) design</option>
      
      <option  value="108103008/appendix/module1/1.html">Appendix-1</option>
      
      <option  value="108103008/appendix/module2/1.html">Appendix-2</option>
      
      <option  value="108103008/appendix/module3/1.html">Appendix-3</option>
      
      <option  value="108103008/appendix/module4/1.html">Appendix-4</option>
      
      <option  value="108103008/appendix/module5/1.html">Appendix-5</option>
      
      <option  value="108103008/appendix/module6/1.html">Appendix-6</option>
      
      <option  value="108103008/appendix/module7/1.html">Appendix-7</option>
      
      <option  value="108103008/appendix/module8/1.html">Appendix-8</option>
      
      <option  value="108103008/appendix/module9/1.html">Appendix-9</option>
      
      <option  value="108103008/appendix/module10/1.html">Appendix-10</option>
      
      <option  value="108103008/appendix/module11/1.html">Appendix-11</option>
      
      <option  value="108103008/appendix_extra/appendix_a/1.html">Appendix A</option>
      
      <option  value="108103008/appendix_extra/append_b/1.html">Appendix B</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108103009</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Introduction to Hybrid and Electric Vehicles</strong></td>
	<td><strong>Prof. S. Majhi,Dr. Praveen Kumar </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108103009/module1/lec1/1.html">Historical Journey of Hybrids and Electric Vehicle </option>
      
      <option  value="108103009/module1/lec2/1.html">Economic and Environmental Impact of Electric Hybrid Vehicle</option>
      
      <option  value="108103009/module2/lec3/1.html">Motion and Dynamic equations for vehicles</option>
      
      <option  value="108103009/module2/lec4/1.html">Vehicle Power Plant and Transmission Characteristics</option>
      
      <option  value="108103009/module3/lec5/1.html">Basic Architecture of Hybrid Drive Trains and Analysis of Series Drive Train</option>
      
      <option  value="108103009/module3/lec6/1.html">Power Flow in HEVs </option>
      
      <option  value="108103009/module3/lec7/1.html">Torque Coupling and Analysis of Parallel Drive Train </option>
      
      <option  value="108103009/module3/lec8/1.html"> Basic Architecture of Electric Drive Trains </option>
      
      <option  value="108103009/module4/lec9/1.html">DC-DC Converters for EV and HEV Applications I</option>
      
      <option  value="108103009/module4/lec10/1.html">Boost and Buck-Boost Converters</option>
      
      <option  value="108103009/module4/lec11/1.html">Multi Quadrant DC-DC Converters I </option>
      
      <option  value="108103009/module4/lec12/1.html">Multi Quadrant DC-DC Converters II </option>
      
      <option  value="108103009/module4/lec13/1.html">DC-DC Converters for EV and HEV Applications II</option>
      
      <option  value="108103009/module4/questions/1.html">Questions Module 4</option>
      
      <option  value="108103009/module5/lec14/1.html">DC-AC Inverter for EV and HEV Applications </option>
      
      <option  value="108103009/module5/lec15/1.html">Three Phase DC-AC Inverters</option>
      
      <option  value="108103009/module5/lec16/1.html">Voltage Control of DC-AC Inverters Using PWM </option>
      
      <option  value="108103009/module6/lec17/1.html">Induction Motors, their configurations and optimization for HEV/EVs</option>
      
      <option  value="108103009/module6/lec18/1.html">Induction Motor drives, their control and applications in EV/HEVs</option>
      
      <option  value="108103009/module6/lec19/1.html"> Permanent magnet motors, their configurations and optimization</option>
      
      <option  value="108103009/module6/lec20/1.html">Permanent Magnet Motor drives, their control and applications in EV/HEVs</option>
      
      <option  value="108103009/module6/lec21/1.html">Switch reluctance motors, their configurations and optimization</option>
      
      <option  value="108103009/module7/lec22/1.html"> Permanent Magnet Motors</option>
      
      <option  value="108103009/module7/lec23/1.html">Steady State Characteristics of Permanent Magnet Motors</option>
      
      <option  value="108103009/module7/lec24/1.html">Dynamic Model of PM Machines</option>
      
      <option  value="108103009/module7/lec25/1.html">Control of PM machines</option>
      
      <option  value="108103009/module7/lec26/1.html">Flux Weakening Control of PM machines</option>
      
      <option  value="108103009/module8/lec27/1.html">Design Principles of HEVs I</option>
      
      <option  value="108103009/module8/lec28/1.html">Design Principles of HEVs II</option>
      
      <option  value="108103009/module8/lec29/1.html">Drive cycle and its detailed analysis</option>
      
      <option  value="108103009/module8/lec30/1.html"> Sizing of Electric Machine for EVs and HEVs</option>
      
      <option  value="108103009/module9/lec31/1.html">Batteries</option>
      
      <option  value="108103009/module9/lec32/1.html"> Mathematical Modeling for Lead acid battery</option>
      
      <option  value="108103009/module9/lec33/1.html">Alternative and Novel Energy Sources</option>
      
      <option  value="108103009/module9/lec34/1.html">Fuel Cell</option>
      
      <option  value="108103009/module10/lec35/1.html">Energy management strategies and its general architecture</option>
      
      <option  value="108103009/module10/lec36/1.html">Rule and optimization based energy management strategies (EMS)</option>
      
      <option  value="108103009/module10/lec37/1.html"> EMS Based on deterministic rules</option>
      
      <option  value="108103009/module11/lec38/1.html">EMS Based on Fuzzy rule base</option>
      
      <option  value="108103009/module11/lec39/1.html">EMS Based on Global Optimization</option>
      
      <option  value="108103009/module12/lec40/1.html">EMS Based on Real Time Optimization</option>
      
      <option  value="108103009/module12/lec41/1.html">Case Study of Design of a BEV I</option>
      
      <option  value="108103009/module12/lec42/1.html">Case Study of Design of a BEV II</option>
      
      <option  value="108103009/module12/lec43/1.html">Design of Series-Parallel HEV Drivetrain</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108104013</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>High Voltage DC Transmission</strong></td>
	<td><strong>Dr. S.N. Singh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
   <option value="108104013/mod01lec01.mp4">Lecture-01</option>
<option value="108104013/mod01lec02.mp4">Lecture-02</option>
<option value="108104013/mod01lec03.mp4">Lecture-03</option>
<option value="108104013/mod01lec04.mp4">Lecture-04</option>
<option value="108104013/mod01lec05.mp4">Lecture-05</option>
<option value="108104013/mod01lec06.mp4">Lecture-06</option>
<option value="108104013/mod01lec07.mp4">Lecture-07</option>
<option value="108104013/mod01lec08.mp4">Lecture-08</option>
<option value="108104013/mod01lec09.mp4">Lecture-09</option>
<option value="108104013/mod01lec10.mp4">Lecture-10</option>
<option value="108104013/mod01lec11.mp4">Lecture-11</option>
<option value="108104013/mod01lec12.mp4">Lecture-12</option>
<option value="108104013/mod01lec13.mp4">Lecture-13</option>
<option value="108104013/mod01lec14.mp4">Lecture-14</option>
<option value="108104013/mod01lec15.mp4">Lecture-15</option>
<option value="108104013/mod01lec16.mp4">Lecture-16</option>
<option value="108104013/mod01lec17.mp4">Lecture-17</option>
<option value="108104013/mod01lec18.mp4">Lecture-18</option>
<option value="108104013/mod01lec19.mp4">Lecture-19</option>
<option value="108104013/mod01lec20.mp4">Lecture-20</option>
<option value="108104013/mod01lec21.mp4">Lecture-21</option>
<option value="108104013/mod01lec22.mp4">Lecture-22</option>
<option value="108104013/mod01lec23.mp4">Lecture-23</option>
<option value="108104013/mod01lec24.mp4">Lecture-24</option>
<option value="108104013/mod01lec25.mp4">Lecture-25</option>
<option value="108104013/mod01lec26.mp4">Lecture-26</option>
<option value="108104013/mod01lec27.mp4">Lecture-27</option>
<option value="108104013/mod01lec28.mp4">Lecture-28</option>
<option value="108104013/mod01lec29.mp4">Lecture-29</option>
<option value="108104013/mod01lec30.mp4">Lecture-30</option>
<option value="108104013/mod01lec31.mp4">Lecture-31</option>
<option value="108104013/mod01lec32.mp4">Lecture-32</option>
<option value="108104013/mod01lec33.mp4">Lecture-33</option>
<option value="108104013/mod01lec34.mp4">Lecture-34</option>
<option value="108104013/mod01lec35.mp4">Lecture-35</option>
<option value="108104013/mod01lec36.mp4">Lecture-36</option>
<option value="108104013/mod01lec37.mp4">Lecture-37</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108104049</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Intelligent Systems and Control</strong></td>
	<td><strong>Prof. Laxmidhar Behera</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108104049/lec00.mp4">Introduction to Intelligent Systems and Control</option>
      
      <option  value="108104049/lec01.mp4">Linear Neural networks</option>
      
      <option  value="108104049/lec02.mp4">Multi layered Neural Networks</option>
      
      <option  value="108104049/lec03.mp4">Back Propagation Algorithm revisited</option>
      
      <option  value="108104049/lec04.mp4">Non Linear System Analysis Part I</option>
      
      <option  value="108104049/lec05.mp4">Non Linear System Analysis Part II</option>
      
      <option  value="108104049/lec06.mp4">Radial Basis Function Networks</option>
      
      <option  value="108104049/lec07.mp4">Adaptive Learning rate</option>
      
      <option  value="108104049/lec08.mp4">Weight update rules</option>
      
      <option  value="108104049/lec09.mp4">Recurrent networks Back propagation through time</option>
      
      <option  value="108104049/lec10.mp4">Recurrent networks Real time recurrent learning</option>
      
      <option  value="108104049/lec11.mp4">Self organizing Map - Multidimensional networks</option>
      
      <option  value="108104049/lec12.mp4">Fuzzy sets - A Primer</option>
      
      <option  value="108104049/lec13.mp4">Fuzzy Relations</option>
      
      <option  value="108104049/lec14.mp4">Fuzzy Rule base and Approximate Reasoning</option>
      
      <option  value="108104049/lec15.mp4">Introduction to Fuzzy Logic Control</option>
      
      <option  value="108104049/lec16.mp4">Neural Control A review</option>
      
      <option  value="108104049/lec17.mp4">Network inversion and Control</option>
      
      <option  value="108104049/lec18.mp4">Neural Model of a Robot manipulator</option>
      
      <option  value="108104049/lec19.mp4">Indirect Adaptive Control of a Robot manipulator</option>
      
      <option  value="108104049/lec20.mp4">Adaptive neural control for Affine Systems SISO</option>
      
      <option  value="108104049/lec21.mp4">Adaptive neural control for Affine systems MIMO</option>
      
      <option  value="108104049/lec22.mp4">Visual Motor Coordination with KSOM</option>
      
      <option  value="108104049/lec23.mp4">Visual Motor coordination - quantum clustering</option>
      
      <option  value="108104049/lec24.mp4">Direct Adaptive control of Manipulators - Intro</option>
      
      <option  value="108104049/lec25.mp4">NN based back stepping control</option>
      
      <option  value="108104049/lec26.mp4">Fuzzy Control - a Review</option>
      
      <option  value="108104049/lec27.mp4">Mamdani type flc and parameter optimization</option>
      
      <option  value="108104049/lec28.mp4">Fuzzy Control of a pH reactor</option>
      
      <option  value="108104049/lec29.mp4">Fuzzy Lyapunov controller - Computing with words</option>
      
      <option  value="108104049/lec30.mp4">Controller Design for a T-S Fuzzy model</option>
      
      <option  value="108104049/lec31.mp4">Linear controllers using T-S fuzzy model</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108104052</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power Systems Operation and Control</strong></td>
	<td><strong>Dr. S.N. Singh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108104052/lec01.mp4">Module 1 - Lecture 1</option>
      
      <option  value="108104052/lec02.mp4">Module 1 - Lecture 2</option>
      
      <option  value="108104052/lec03.mp4">Module 1 - Lecture 3</option>
      
      <option  value="108104052/lec04.mp4">Module 2 - Lecture 1</option>
      
      <option  value="108104052/lec05.mp4">Module 2 - Lecture 2</option>
      
      <option  value="108104052/lec06.mp4">Module 2 - Lecture 3</option>
      
      <option  value="108104052/lec07.mp4">Module 2 - Lecture 4</option>
      
      <option  value="108104052/lec08.mp4">Module 2 - Lecture 5</option>
      
      <option  value="108104052/lec09.mp4">Module 2 - Lecture 6</option>
      
      <option  value="108104052/lec10.mp4">Module 2 - Lecture 7</option>
      
      <option  value="108104052/lec11.mp4">Module 2 - Lecture 8</option>
      
      <option  value="108104052/lec12.mp4">Module 2 - Lecture 9</option>
      
      <option  value="108104052/lec13.mp4">Module 2 - Lecture 10</option>
      
      <option  value="108104052/lec14.mp4">Module 2 - Lecture 11</option>
      
      <option  value="108104052/lec15.mp4">Module 2 - Lecture 12</option>
      
      <option  value="108104052/lec16.mp4">Module 2 - Lecture 13</option>
      
      <option  value="108104052/lec17.mp4">Module 2 - Lecture 14</option>
      
      <option  value="108104052/lec18.mp4">Module 3 - Lecture 1</option>
      
      <option  value="108104052/lec19.mp4">Module 3 - Lecture 2</option>
      
      <option  value="108104052/lec20.mp4">Module 3 - Lecture 3</option>
      
      <option  value="108104052/lec21.mp4">Module 3 - Lecture 4</option>
      
      <option  value="108104052/lec22.mp4">Module 3 - Lecture 5</option>
      
      <option  value="108104052/lec23.mp4">Module 3 - Lecture 6</option>
      
      <option  value="108104052/lec24.mp4">Module 3 - Lecture 7</option>
      
      <option  value="108104052/lec25.mp4">Module 3 - Lecture 8</option>
      
      <option  value="108104052/lec26.mp4">Module 3 - Lecture 9</option>
      
      <option  value="108104052/lec27.mp4">Module 3 - Lecture 10</option>
      
      <option  value="108104052/lec28.mp4">Module 4 - Lecture 1</option>
      
      <option  value="108104052/lec29.mp4">Module 4 - Lecture 2</option>
      
      <option  value="108104052/lec30.mp4">Module 4 - Lecture 3</option>
      
      <option  value="108104052/lec31.mp4">Module 4 - Lecture 4</option>
      
      <option  value="108104052/lec32.mp4">Module 5 - Lecture 1</option>
      
      <option  value="108104052/lec33.mp4">Module 5 - Lecture 2</option>
      
      <option  value="108104052/lec34.mp4">Module 6 - Lecture 1</option>
      
      <option  value="108104052/lec35.mp4">Module 6 - Lecture 2</option>
          </select>
  </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105054</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Chaos, Fractals & Dynamic Systems</strong></td>
	<td><strong>Prof. S. Banerjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105054/lec01.mp4">Representations of Dynamical Systems</option>
      
      <option  value="108105054/lec02.mp4">Vector Fields of Nonlinear Systems</option>
      
      <option  value="108105054/lec03.mp4">Limit Cycles</option>
      
      <option  value="108105054/lec04.mp4">The Lorenz Equation - I</option>
      
      <option  value="108105054/lec05.mp4">The Lorenz Equation - II</option>
      
      <option  value="108105054/lec06.mp4">The Rossler Equation and Forced Pendulum</option>
      
      <option  value="108105054/lec07.mp4">The Chua's Circuit</option>
      
      <option  value="108105054/lec08.mp4">Discrete Time Dynamical Systems</option>
      
      <option  value="108105054/lec09.mp4">The Logistic Map and Period doubling</option>
      
      <option  value="108105054/lec10.mp4">Flip and Tangent Bifurcations</option>
      
      <option  value="108105054/lec11.mp4">Intermittency Transcritical and pitchfork</option>
      
      <option  value="108105054/lec12.mp4">Two Dimensional Maps</option>
      
      <option  value="108105054/lec13.mp4">Bifurcations in Two Dimensional Maps</option>
      
      <option  value="108105054/lec14.mp4">Introduction to Fractals</option>
      
      <option  value="108105054/lec15.mp4">Mandelbrot Sets and Julia Sets</option>
      
      <option  value="108105054/lec16.mp4">The Space Where Fractals Live</option>
      
      <option  value="108105054/lec17.mp4">Interactive Function Systems</option>
      
      <option  value="108105054/lec18.mp4">IFS Algorithms</option>
      
      <option  value="108105054/lec19.mp4">Fractal Image Compression</option>
      
      <option  value="108105054/lec20.mp4">Stable and Unstable Manifolds</option>
      
      <option  value="108105054/lec21.mp4">Boundary Crisis and Interior Crisis</option>
      
      <option  value="108105054/lec22.mp4">Statistics of Chaotic Attractors</option>
      
      <option  value="108105054/lec23.mp4">Matrix Times Circle : Ellipse</option>
      
      <option  value="108105054/lec24.mp4">Lyapunov Exponent</option>
      
      <option  value="108105054/lec25.mp4">Frequency Spectra of Orbits</option>
      
      <option  value="108105054/lec26.mp4">Dynamics on a Torus</option>
      
      <option  value="108105054/lec27.mp4">Dynamics on a Torus</option>
      
      <option  value="108105054/lec28.mp4">Analysis of Chaotic Time Series</option>
      
      <option  value="108105054/lec29.mp4">Analysis of Chaotic Time Series</option>
      
      <option  value="108105054/lec30.mp4">Lyapunou Function and Centre Manifold Theory</option>
      
      <option  value="108105054/lec31.mp4">Non-Smooth Bifurcations</option>
      
      <option  value="108105054/lec32.mp4">Non-Smooth Bifurcations</option>
      
      <option  value="108105054/lec33.mp4">Normal from for Piecewise Smooth 2D Maps</option>
      
      <option  value="108105054/lec34.mp4">Bifurcations in Piecewise Linear 2D Maps</option>
      
      <option  value="108105054/lec35.mp4">Bifurcations in Piecewise Linear 2D Maps</option>
      
      <option  value="108105054/lec36.mp4">Multiple Attractor Bifurcation and Dangerous</option>
      
      <option  value="108105054/lec37.mp4">Dynamics of Discontinuous Maps</option>
      
      <option  value="108105054/lec38.mp4">Introduction to Floquet Theory</option>
      
      <option  value="108105054/lec39.mp4">The Monodromy Matrix and the Saltation Matrix</option>
      
      <option  value="108105054/lec40.mp4">Control of Chaos</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105055</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Digital Signal Processing</strong></td>
	<td><strong>Prof. T.K. Basu</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105055/lec01.mp4">Discrete Time Signal and System</option>
      
      <option  value="108105055/lec02.mp4">Discrete Time Signal and System (Contd...)</option>
      
      <option  value="108105055/lec03.mp4">Discrete Time Signal and System (Contd...)</option>
      
      <option  value="108105055/lec04.mp4">Frequency Domain Representation of Discrete Signals</option>
      
      <option  value="108105055/lec05.mp4">Z-Transform</option>
      
      <option  value="108105055/lec06.mp4">Z-Transform (Contd...)</option>
      
      <option  value="108105055/lec07.mp4">Solution of Difference Equation</option>
      
      <option  value="108105055/lec08.mp4">Tutorial on Discrete Time Signals&Their Transforms</option>
      
      <option  value="108105055/lec09.mp4">Relation Between Discrete Time and Continuous Signals</option>
      
      <option  value="108105055/lec10.mp4">Discrete Fourier Transform (DFT)</option>
      
      <option  value="108105055/lec11.mp4">Discrete Fourier Transform (DFT) Contd...</option>
      
      <option  value="108105055/lec12.mp4">Discrete Fourier Transform (DFT) Contd...</option>
      
      <option  value="108105055/lec13.mp4">State Space Representation</option>
      
      <option  value="108105055/lec14.mp4">Filters Introduction</option>
      
      <option  value="108105055/lec15.mp4">FIR Filters</option>
      
      <option  value="108105055/lec16.mp4">FIR Filters (Contd.) Introduction to IIR Filters</option>
      
      <option  value="108105055/lec17.mp4">IIR Filters (Contd...)</option>
      
      <option  value="108105055/lec18.mp4">IIR Filters (Contd...)</option>
      
      <option  value="108105055/lec19.mp4">IIR Filters (Contd...)</option>
      
      <option  value="108105055/lec20.mp4">Tutorial & Introduction to Computer Aided Design of Filters</option>
      
      <option  value="108105055/lec21.mp4">Computer Aided Design of Filters</option>
      
      <option  value="108105055/lec22.mp4">FFT and Computer Aided Design of Filters</option>
      
      <option  value="108105055/lec23.mp4">Introduction to Lattice Filter</option>
      
      <option  value="108105055/lec24.mp4">Lattice Filter (Contd...)</option>
      
      <option  value="108105055/lec25.mp4">Effects of Quantization</option>
      
      <option  value="108105055/lec26.mp4">Effects of Quantization (Contd...)</option>
      
      <option  value="108105055/lec27.mp4">Effects of Quantization (Contd...)</option>
      
      <option  value="108105055/lec28.mp4">Effects of Quantization (Contd...)</option>
      
      <option  value="108105055/lec29.mp4">Random Signals</option>
      
      <option  value="108105055/lec30.mp4">Relationship Between Real and Imaginary Parts of DTFT</option>
      
      <option  value="108105055/lec31.mp4">Relationship Between Real and Imaginary Parts of DTFT</option>
      
      <option  value="108105055/lec32.mp4">Relationship Between Real and Imaginary Parts of DTFT</option>
      
      <option  value="108105055/lec33.mp4">Multi rate Signal Processing</option>
      
      <option  value="108105055/lec34.mp4">Multi rate Signal Processing (Contd...)</option>
      
      <option  value="108105055/lec35.mp4">Polyphase Decomposition</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105056</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Dynamics of Physical Systems</strong></td>
	<td><strong>Prof. S. Banerjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105056/lec01.mp4">Introduction to System Elements</option>
      
      <option  value="108105056/lec02.mp4">Newton's Method and Constraints</option>
      
      <option  value="108105056/lec03.mp4">Derivation of the Lagrangian Equation</option>
      
      <option  value="108105056/lec04.mp4">Using the lagrangian Equation to Obtain Differential Equations (Part-I)</option>
      
      <option  value="108105056/lec05.mp4">Using the lagrangian Equation to Obtain Differential Equations (Part-II)</option>
      
      <option  value="108105056/lec06.mp4">Using the lagrangian Equation to Obtain Differential Equations (Part-III)</option>
      
      <option  value="108105056/lec07.mp4">Using the lagrangian Equation to Obtain Differential Equations (Part-IV)</option>
      
      <option  value="108105056/lec08.mp4">Obtaining First Order Equations</option>
      
      <option  value="108105056/lec09.mp4">Application of the Hamiltonian Method</option>
      
      <option  value="108105056/lec10.mp4">Obtaining Differential Equations Using Kirchoff's Laws</option>
      
      <option  value="108105056/lec11.mp4">The Graph Theory Approach for Electrical Circuits (Part-I)</option>
      
      <option  value="108105056/lec12.mp4">The Graph Theory Approach for Electrical Circuits (Part-II)</option>
      
      <option  value="108105056/lec13.mp4">The Bond Graph Approach-I</option>
      
      <option  value="108105056/lec14.mp4">The Bond Graph Approach-II</option>
      
      <option  value="108105056/lec15.mp4">The Bond Graph Approach-III</option>
      
      <option  value="108105056/lec16.mp4">The Bond Graph Approach-IV</option>
      
      <option  value="108105056/lec17.mp4">The Bond Graph Approach-V</option>
      
      <option  value="108105056/lec18.mp4">The Bond Graph Approach-VI</option>
      
      <option  value="108105056/lec19.mp4">The Bond Graph Approach-VII</option>
      
      <option  value="108105056/lec20.mp4">Numerical Solution of Differential Equations</option>
      
      <option  value="108105056/lec21.mp4">Dynamics in the State Space</option>
      
      <option  value="108105056/lec22.mp4">Vector Field Around Equilibrium Points-I</option>
      
      <option  value="108105056/lec23.mp4">Vector Field Around Equilibrium Points-II</option>
      
      <option  value="108105056/lec24.mp4">Vector Field Around Equilibrium Points-III</option>
      
      <option  value="108105056/lec25.mp4">Vector Field Around Equilibrium Points-IV</option>
      
      <option  value="108105056/lec26.mp4">High Dimensional Linear Systems</option>
      
      <option  value="108105056/lec27.mp4">Linear Systems with External Input-I</option>
      
      <option  value="108105056/lec28.mp4">Linear Systems with External Input-II</option>
      
      <option  value="108105056/lec29.mp4">Linear Systems with External Input-III</option>
      
      <option  value="108105056/lec30.mp4">Dynamics of Nonlinear Systems-I</option>
      
      <option  value="108105056/lec31.mp4">Dynamics of Nonlinear Systems-II</option>
      
      <option  value="108105056/lec32.mp4">Dynamics of Nonlinear Systems-III</option>
      
      <option  value="108105056/lec33.mp4">Discrete-Time Dynamical Systems-I</option>
      
      <option  value="108105056/lec34.mp4">Discrete-Time Dynamical Systems-II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105058</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Energy Resources & Technology</strong></td>
	<td><strong>Prof. S. Banerjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105058/lec01.mp4">Thermodynamics: Fundamentals Of Energy - Energy Resources & Technology</option>
      
      <option  value="108105058/lec02.mp4">Quality of Energy</option>
      
      <option  value="108105058/lec03.mp4">Complete Cycle Analysis of Fossil Fuels</option>
      
      <option  value="108105058/lec04.mp4">Energy in Transportation</option>
      
      <option  value="108105058/lec05.mp4">Other Fossil Fuels</option>
      
      <option  value="108105058/lec06.mp4">Energy Economics : Input-Output Analysis</option>
      
      <option  value="108105058/lec07.mp4">Energy Economics : Input-Output Analysis</option>
      
      <option  value="108105058/lec08.mp4">Thermal Power Plants</option>
      
      <option  value="108105058/lec09.mp4">Thermal Power Plants</option>
      
      <option  value="108105058/lec10.mp4">Hydroelectric Power</option>
      
      <option  value="108105058/lec11.mp4">Hydroelectric Power</option>
      
      <option  value="108105058/lec12.mp4">Nuclear Power Generation</option>
      
      <option  value="108105058/lec13.mp4">Nuclear Fusion Reactors</option>
      
      <option  value="108105058/lec14.mp4">Environmental Effects of Conventional Power</option>
      
      <option  value="108105058/lec15.mp4">Solar Thermal Energy Conversion</option>
      
      <option  value="108105058/lec16.mp4">Solar Concentrating Collectors</option>
      
      <option  value="108105058/lec17.mp4">Photovoltaic Power Generation</option>
      
      <option  value="108105058/lec18.mp4">Photovoltaic Power Generation Contd.</option>
      
      <option  value="108105058/lec19.mp4">Photovoltaic Power Generation Contd.</option>
      
      <option  value="108105058/lec20.mp4">Photovoltaic Power Generation Contd.</option>
      
      <option  value="108105058/lec21.mp4">Wind Energy I</option>
      
      <option  value="108105058/lec22.mp4">Wind Energy II</option>
      
      <option  value="108105058/lec23.mp4">Wind Energy - III</option>
      
      <option  value="108105058/lec24.mp4">Wind Energy - IV</option>
      
      <option  value="108105058/lec25.mp4">Wind Energy - V</option>
      
      <option  value="108105058/lec26.mp4">Wind Energy - VI</option>
      
      <option  value="108105058/lec27.mp4">Wind Electrical Conversion - I</option>
      
      <option  value="108105058/lec28.mp4">Wind Electrical Conversion - II</option>
      
      <option  value="108105058/lec29.mp4">Wind Electrical Conversion - III</option>
      
      <option  value="108105058/lec30.mp4">Tidal Energy</option>
      
      <option  value="108105058/lec31.mp4">Tidal Energy</option>
      
      <option  value="108105058/lec32.mp4">Tidal Energy</option>
      
      <option  value="108105058/lec33.mp4">Ocean Thermal Energy Conversion</option>
      
      <option  value="108105058/lec34.mp4">Solar Pond and Wave Power</option>
      
      <option  value="108105058/lec35.mp4">Geothermal Energy</option>
      
      <option  value="108105058/lec36.mp4">Solar Distillation and Biomass Energy</option>
      
      <option  value="108105058/lec37.mp4">Energy Storage</option>
      
      <option  value="108105058/lec38.mp4">Magneto hydrodynamic Power Generation</option>
      
      <option  value="108105058/lec39.mp4">Magneto hydrodynamic Power Generation</option>
      
      <option  value="108105058/lec40.mp4">Hydrogen Economy</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105059</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Estimation of Signals and Systems</strong></td>
	<td><strong>Prof. S. Mukhopadhyay</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105059/lec01.mp4">Introduction</option>
      
      <option  value="108105059/lec02.mp4">Probability Theory</option>
      
      <option  value="108105059/lec03.mp4">Random Variables</option>
      
      <option  value="108105059/lec04.mp4">Function of Random Variable Joint Density</option>
      
      <option  value="108105059/lec05.mp4">Mean and Variance</option>
      
      <option  value="108105059/lec06.mp4">Random Vectors Random Processes</option>
      
      <option  value="108105059/lec07.mp4">Random Processes and Linear Systems</option>
      
      <option  value="108105059/lec08.mp4">Some Numerical Problems</option>
      
      <option  value="108105059/lec09.mp4">Miscellaneous Topics on Random Process</option>
      
      <option  value="108105059/lec10.mp4">Linear Signal Models</option>
      
      <option  value="108105059/lec11.mp4">Linear Mean Sq.Error Estimation</option>
      
      <option  value="108105059/lec12.mp4">Auto Correlation and Power Spectrum Estimation</option>
      
      <option  value="108105059/lec13.mp4">Z-Transform Revisited Eigen Vectors/Values</option>
      
      <option  value="108105059/lec14.mp4">The Concept of Innovation</option>
      
      <option  value="108105059/lec15.mp4">Last Squares Estimation Optimal IIR Filters</option>
      
      <option  value="108105059/lec16.mp4">Introduction to Adaptive Filters</option>
      
      <option  value="108105059/lec17.mp4">State Estimation</option>
      
      <option  value="108105059/lec18.mp4">Kalman Filter-Model and Derivation</option>
      
      <option  value="108105059/lec19.mp4">Kalman Filter-Derivation (Contd...)</option>
      
      <option  value="108105059/lec20.mp4">Estimator Properties</option>
      
      <option  value="108105059/lec21.mp4">The Time-Invariant Kalman Filter</option>
      
      <option  value="108105059/lec22.mp4">Kalman Filter-Case Study</option>
      
      <option  value="108105059/lec23.mp4">System identification Introductory Concepts</option>
      
      <option  value="108105059/lec24.mp4">Linear Regression-Recursive Least Squares</option>
      
      <option  value="108105059/lec25.mp4">Variants of LSE</option>
      
      <option  value="108105059/lec26.mp4">Least Square Estimation</option>
      
      <option  value="108105059/lec27.mp4">Model Order Selection Residual Tests</option>
      
      <option  value="108105059/lec28.mp4">Practical Issues in Identification</option>
      
      <option  value="108105059/lec29.mp4">Estimation Problems in Instrumentation and Control</option>
      
      <option  value="108105059/lec30.mp4">Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105060</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Illumination Engineering</strong></td>
	<td><strong>Prof. N.K. Kishore</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105060/lec01.mp4">Introduction to Illumination Engineering</option>
      
      <option  value="108105060/lec02.mp4">Instructional Objectives</option>
      
      <option  value="108105060/lec03.mp4">Eye and Vision I</option>
      
      <option  value="108105060/lec04.mp4">Eye and Vision II</option>
      
      <option  value="108105060/lec05.mp4">Laws of Illumination</option>
      
      <option  value="108105060/lec06.mp4">Photometry</option>
      
      <option  value="108105060/lec07.mp4">Incandescent Lamps</option>
      
      <option  value="108105060/lec08.mp4">Discharge Lamps I</option>
      
      <option  value="108105060/lec09.mp4">Discharge Lamps II</option>
      
      <option  value="108105060/lec10.mp4">Discharge Lamps III</option>
      
      <option  value="108105060/lec11.mp4">Illumination Systems I</option>
      
      <option  value="108105060/lec12.mp4">Illumination Systems II</option>
      
      <option  value="108105060/lec13.mp4">Glare</option>
      
      <option  value="108105060/lec14.mp4">Color</option>
      
      <option  value="108105060/lec15.mp4">Interior Lighting</option>
      
      <option  value="108105060/lec16.mp4">Sports Lighting</option>
      
      <option  value="108105060/lec17.mp4">Road Lighting</option>
      
      <option  value="108105060/lec18.mp4">Lighting Calculations</option>
      
      <option  value="108105060/lec19.mp4">Lighting Applications</option>
      
      <option  value="108105060/lec20.mp4">Conclusions on Illumination Engineering</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105062</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Industrial Automation and Control</strong></td>
	<td><strong>Prof. S. Mukhopadhyay,Prof. S. Sen</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105062/lec01.mp4">Introduction</option>
      
      <option  value="108105062/lec02.mp4">Architecture of Industrial Automation Systems</option>
      
      <option  value="108105062/lec03.mp4">Measurement Systems Characteristics</option>
      
      <option  value="108105062/lec04.mp4">Temperature Measurement</option>
      
      <option  value="108105062/lec05.mp4">Pressure, Force and Torque Sensors</option>
      
      <option  value="108105062/lec06.mp4">Motion Sensing</option>
      
      <option  value="108105062/lec07.mp4">Flow Measurement</option>
      
      <option  value="108105062/lec08.mp4">Signal Conditioning</option>
      
      <option  value="108105062/lec09.mp4">Signal Conditioning (Contd.)</option>
      
      <option  value="108105062/lec10.mp4">Data Acquisition Systems</option>
      
      <option  value="108105062/lec11.mp4">Introduction to Automatic Control</option>
      
      <option  value="108105062/lec12.mp4">P-I-D Control</option>
      
      <option  value="108105062/lec13.mp4">PID Control Tuning</option>
      
      <option  value="108105062/lec14.mp4">Feedforward Control Ratio Control</option>
      
      <option  value="108105062/lec15.mp4">Time Delay Systems and Inverse Response Systems</option>
      
      <option  value="108105062/lec16.mp4">Special Control Structures</option>
      
      <option  value="108105062/lec17.mp4">Concluding Lesson on Process Control</option>
      
      <option  value="108105062/lec18.mp4">Introduction to Sequence Control, PLC , RLL</option>
      
      <option  value="108105062/lec19.mp4">Sequence Control. Scan Cycle,Simple RLL Programs</option>
      
      <option  value="108105062/lec20.mp4">Sequence Control. More RLL Elements, RLL Syntax</option>
      
      <option  value="108105062/lec21.mp4">A Structured Design Approach to Sequence</option>
      
      <option  value="108105062/lec22.mp4">PLC Hardware Environment</option>
      
      <option  value="108105062/lec23.mp4">Introduction To CNC Machines</option>
      
      <option  value="108105062/lec24.mp4">Contour generation and Motion Control</option>
      
      <option  value="108105062/lec25.mp4">Flow Control Valves</option>
      
      <option  value="108105062/lec26.mp4">Hydraulic Control Systems - I</option>
      
      <option  value="108105062/lec27.mp4">Hydraulic Control Systems - II</option>
      
      <option  value="108105062/lec28.mp4">Industrial Hydraulic Circuit</option>
      
      <option  value="108105062/lec29.mp4">Pneumatic Control Systems - I</option>
      
      <option  value="108105062/lec30.mp4">Pneumatic Systems - II</option>
      
      <option  value="108105062/lec31.mp4">Energy Savings with Variable Speed Drives</option>
      
      <option  value="108105062/lec32.mp4">DC Motor Drives</option>
      
      <option  value="108105062/lec33.mp4">DC and BLDC Servo Drives</option>
      
      <option  value="108105062/lec34.mp4">Induction Motor Drives</option>
      
      <option  value="108105062/lec35.mp4">Step Motor Drives BLDC Drives</option>
      
      <option  value="108105062/lec36.mp4">Embedded Systems</option>
      
      <option  value="108105062/lec37.mp4">The Fieldbus Network - I</option>
      
      <option  value="108105062/lec38.mp4">The Fieldbus Network - II</option>
      
      <option  value="108105062/lec39.mp4">Higher Level Automation Systems</option>
      
      <option  value="108105062/lec40.mp4">Course Review and Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105064</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Industrial Instrumentation</strong></td>
	<td><strong>Prof. Alok Barua</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105064/lec01.mp4">Introduction to Industrial Instrumentation</option>
      
      <option  value="108105064/lec02.mp4">Dynamic Characteristics</option>
      
      <option  value="108105064/lec03.mp4">Dynamic Characteristics (Continued)</option>
      
      <option  value="108105064/lec04.mp4">Strain gauge</option>
      
      <option  value="108105064/lec05.mp4">Load cell</option>
      
      <option  value="108105064/lec06.mp4">Torque Measurement</option>
      
      <option  value="108105064/lec07.mp4">Thermistor</option>
      
      <option  value="108105064/lec08.mp4">Thermocouples</option>
      
      <option  value="108105064/lec09.mp4">Resistance Temperature Detector</option>
      
      <option  value="108105064/lec10.mp4">LVDT</option>
      
      <option  value="108105064/lec11.mp4">Capacitance Transducers</option>
      
      <option  value="108105064/lec12.mp4">Flowmeter - I</option>
      
      <option  value="108105064/lec13.mp4">Flow meter -II</option>
      
      <option  value="108105064/lec14.mp4">Flowmeter -III</option>
      
      <option  value="108105064/lec15.mp4">Flowmeter -IV</option>
      
      <option  value="108105064/lec16.mp4">Flowmeter -V</option>
      
      <option  value="108105064/lec17.mp4">Problems on Temperature Sensors</option>
      
      <option  value="108105064/lec18.mp4">Pressure Sensors</option>
      
      <option  value="108105064/lec19.mp4">Low Pressure Measurement</option>
      
      <option  value="108105064/lec20.mp4">pH and Viscosity Measurement</option>
      
      <option  value="108105064/lec21.mp4">Problem and Solutions On Industrial Instrumentation</option>
      
      <option  value="108105064/lec22.mp4">Signal Conditioning Circuits - I</option>
      
      <option  value="108105064/lec23.mp4">Signal Conditioning Circuits -II</option>
      
      <option  value="108105064/lec24.mp4">Piezoelectric Sensors</option>
      
      <option  value="108105064/lec25.mp4">Ultrasonic Sensors</option>
      
      <option  value="108105064/lec26.mp4">Nucleonic Instrumentation</option>
      
      <option  value="108105064/lec27.mp4">Measurement Of Magnetic Field</option>
      
      <option  value="108105064/lec28.mp4">Optoelectronic Sensor - I</option>
      
      <option  value="108105064/lec29.mp4">Optoelectronic Sensor - II</option>
      
      <option  value="108105064/lec30.mp4">Synchro</option>
      
      <option  value="108105064/lec31.mp4">Dissolved Oxygen Sensors - I</option>
      
      <option  value="108105064/lec32.mp4">Dissolved Oxygen Sensors - II</option>
      
      <option  value="108105064/lec33.mp4">Flapper - Nozzle</option>
      
      <option  value="108105064/lec34.mp4">Smart Sensors</option>
      
      <option  value="108105064/lec35.mp4">Chromatography - I</option>
      
      <option  value="108105064/lec36.mp4">Chromatography - II</option>
      
      <option  value="108105064/lec37.mp4">Pollution Measurement</option>
      
      <option  value="108105064/lec38.mp4">Control Valve - I</option>
      
      <option  value="108105064/lec39.mp4">Control Valve - II</option>
      
      <option  value="108105064/lec40.mp4">Signal Conditioning Integrated Circuits</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105065</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Networks Signals and Systems</strong></td>
	<td><strong>Prof. T.K. Basu</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105065/lec01.mp4">Introduction to Network Elements and Sources</option>
      
      <option  value="108105065/lec02.mp4">Introduction to Linearity and Nonlinearity</option>
      
      <option  value="108105065/lec03.mp4">Distributed & Lumped Parameters 2-port Networks</option>
      
      <option  value="108105065/lec04.mp4">Two-port Parameters Short Circuit,Open Circuit</option>
      
      <option  value="108105065/lec05.mp4">Tutorial</option>
      
      <option  value="108105065/lec06.mp4">LocusDiagram - Introduction to Signals</option>
      
      <option  value="108105065/lec07.mp4">Signals (contd.) Laplace Transforms</option>
      
      <option  value="108105065/lec08.mp4">Laplace Transform (contd.)</option>
      
      <option  value="108105065/lec09.mp4">Tutorial on Laplace Transform</option>
      
      <option  value="108105065/lec10.mp4">Frequency Response Bode Plot</option>
      
      <option  value="108105065/lec11.mp4">Bode Plot ( contd.)</option>
      
      <option  value="108105065/lec12.mp4">Bode Plot ( contd.) - Poles & Zeros</option>
      
      <option  value="108105065/lec13.mp4">Driving Point Immittance Functions - Realisability Conditions</option>
      
      <option  value="108105065/lec14.mp4">Two - Element Synthesis</option>
      
      <option  value="108105065/lec15.mp4">Two - Element Synthesis (contd.)</option>
      
      <option  value="108105065/lec16.mp4">Tutorial</option>
      
      <option  value="108105065/lec17.mp4">Tutorial</option>
      
      <option  value="108105065/lec18.mp4">Graph Theory</option>
      
      <option  value="108105065/lec19.mp4">Graph Theory (Contd. )</option>
      
      <option  value="108105065/lec20.mp4">Graph Theory (Contd.)</option>
      
      <option  value="108105065/lec21.mp4">Graph Theory (Contd.)</option>
      
      <option  value="108105065/lec22.mp4">Image Impedance, Iterative Impedance</option>
      
      <option  value="108105065/lec23.mp4">Image Impedance, Iterative Impedance</option>
      
      <option  value="108105065/lec24.mp4">Characteristic Impedance and Design of Filters</option>
      
      <option  value="108105065/lec25.mp4">Analysis of Resistive Networks Computer Aided</option>
      
      <option  value="108105065/lec26.mp4">R-L-C Two-Terminal Network</option>
      
      <option  value="108105065/lec27.mp4">Parts of Network Functions</option>
      
      <option  value="108105065/lec28.mp4">Parts of Network Functions (Contd.)</option>
      
      <option  value="108105065/lec29.mp4">Tutorial</option>
      
      <option  value="108105065/lec30.mp4">Tutorial (Contd.)</option>
      
      <option  value="108105065/lec31.mp4">Tutorial</option>
      
      <option  value="108105065/lec32.mp4">Synthesis of 2-port Network</option>
      
      <option  value="108105065/lec33.mp4">Synthesis of 2 - port Network (Contd.)</option>
      
      <option  value="108105065/lec34.mp4">Synthesis of 2 - port Network (Contd.)</option>
      
      <option  value="108105065/lec35.mp4">Fourier Series</option>
      
      <option  value="108105065/lec36.mp4">Fourier Series (Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108105067</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power System Analysis</strong></td>
	<td><strong>Prof. A.K. Sinha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108105067/lec01.mp4">Introduction to Power system analysis</option>
      
      <option  value="108105067/lec02.mp4">Introduction to Single Line Diagram</option>
      
      <option  value="108105067/lec03.mp4">Transmission Line Parameters</option>
      
      <option  value="108105067/lec04.mp4">Inductance Calculation (Three Phase)</option>
      
      <option  value="108105067/lec05.mp4">Transmission Line Capacitance</option>
      
      <option  value="108105067/lec06.mp4">Transmission Line Capacitance (Contd..)</option>
      
      <option  value="108105067/lec07.mp4">Transmission Line Modeling</option>
      
      <option  value="108105067/lec08.mp4">Transmission Line Modeling Long Line</option>
      
      <option  value="108105067/lec09.mp4">Transmission Line Steady State Operation</option>
      
      <option  value="108105067/lec10.mp4">Transmission Line Steady State Control Voltage</option>
      
      <option  value="108105067/lec11.mp4">Transmission System A Review</option>
      
      <option  value="108105067/lec12.mp4">Transformer Model</option>
      
      <option  value="108105067/lec13.mp4">Synchronous Machine Model</option>
      
      <option  value="108105067/lec14.mp4">Synchronous Machine Model</option>
      
      <option  value="108105067/lec15.mp4">Load Model</option>
      
      <option  value="108105067/lec16.mp4">Power Flow - I</option>
      
      <option  value="108105067/lec17.mp4">Power Flow - II</option>
      
      <option  value="108105067/lec18.mp4">Power Flow - III</option>
      
      <option  value="108105067/lec19.mp4">Power Flow - IV</option>
      
      <option  value="108105067/lec20.mp4">Power Flow-V</option>
      
      <option  value="108105067/lec21.mp4">Power Flow VI</option>
      
      <option  value="108105067/lec22.mp4">Power Flow - VII</option>
      
      <option  value="108105067/lec23.mp4">Review of Power System Component Models</option>
      
      <option  value="108105067/lec24.mp4">Review of Power Flow Study</option>
      
      <option  value="108105067/lec25.mp4">Short Circuit Analysis</option>
      
      <option  value="108105067/lec26.mp4">Symmetrical Component Analysis</option>
      
      <option  value="108105067/lec27.mp4">Sequence Networks</option>
      
      <option  value="108105067/lec28.mp4">Unbalanced Fault Analysis</option>
      
      <option  value="108105067/lec29.mp4">Unbalanced Fault Analysis</option>
      
      <option  value="108105067/lec30.mp4">Fault Analysis for Large power Systems</option>
      
      <option  value="108105067/lec31.mp4">Bus Impedance Matrix</option>
      
      <option  value="108105067/lec32.mp4">Asymmetrical Fault Analysis Using Z - Bus</option>
      
      <option  value="108105067/lec33.mp4">Power System Stability - I</option>
      
      <option  value="108105067/lec34.mp4">Power System Stability - II</option>
      
      <option  value="108105067/lec35.mp4">Power System Stability - III</option>
      
      <option  value="108105067/lec36.mp4">Power System Stability - IV</option>
      
      <option  value="108105067/lec37.mp4">Power System Stability - V</option>
      
      <option  value="108105067/lec38.mp4">Power System Stability - VI</option>
      
      <option  value="108105067/lec39.mp4">Power System Stability - VII</option>
      
      <option  value="108105067/lec40.mp4">Power System Stability - VIII</option>
          </select>
  </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108106024</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Nonlinear Control System</strong></td>
	<td><strong>Dr. Arun D. Mahindrakar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106024/Introduction.pdf">Introduction</option>
      
      <option  value="108106024/Module1.pdf">Mathematical Preliminaries</option>
      
      <option  value="108106024/Module2.pdf">Well-posedness of ordinary differential quations</option>
      
      <option  value="108106024/Module3.pdf">Modeling and state-space formulation of nonlinear systems</option>
      
      <option  value="108106024/Module4.pdf">Second-order systems</option>
      
      <option  value="108106024/Module5.pdf">Periodic Solutions</option>
      
      <option  value="108106024/Module6.pdf">Stability Analysis</option>
      
      <option  value="108106024/Module7.pdf">Nonlinear control design</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108106026</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Power System Stability and Control</strong></td>
	<td><strong>Dr. B. Kalyan Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106026/chapter1.pdf">Introduction to Power System Stability</option>
      
      <option  value="108106026/chapter2.pdf">Analysis of Power System Stability by Classical Methods</option>
      
      <option  value="108106026/chapter3.pdf">Modelling of a Synchronous Machine</option>
      
      <option  value="108106026/chapter4.pdf">Modelling of Exciter, Turbine and System Load</option>
      
      <option  value="108106026/chapter5.pdf">Representation of Synchronous Machine for Stability Studies</option>
      
      <option  value="108106026/chapter6.pdf">Small-Signal Stability Analysis</option>
      
      <option  value="108106026/chapter7.pdf">Transient Stability Analysis</option>
      
      <option  value="108106026/chapter8.pdf">Voltage Stability</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108106068</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Analog ICs</strong></td>
	<td><strong>Prof. K. Radhakrishna Rao</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106068/lec01.mp4">Basic Building Blocks In Analog ICs</option>
      
      <option  value="108106068/lec02.mp4">Current Mirrors</option>
      
      <option  value="108106068/lec03.mp4">Translinear Networks</option>
      
      <option  value="108106068/lec04.mp4">Differential Amplifier</option>
      
      <option  value="108106068/lec05.mp4">Differential Amplifier Characteristics</option>
      
      <option  value="108106068/lec06.mp4">Video Amplifier and RF/IF Amplifiers</option>
      
      <option  value="108106068/lec07.mp4">Cascade Amplifier</option>
      
      <option  value="108106068/lec08.mp4">IC Negative Feedback Wide Band Amplifiers</option>
      
      <option  value="108106068/lec09.mp4">IC Negative Feedback Amplifiers</option>
      
      <option  value="108106068/lec10.mp4">Voltage Sources And References</option>
      
      <option  value="108106068/lec11.mp4">IC Voltage Regulator</option>
      
      <option  value="108106068/lec12.mp4">Characteristics and Parameters Of Voltage</option>
      
      <option  value="108106068/lec13.mp4">Protection Circuitry For Voltage Regulator</option>
      
      <option  value="108106068/lec14.mp4">Switched Mode Regulator And Operational</option>
      
      <option  value="108106068/lec15.mp4">IC Operational Voltage Amplifier</option>
      
      <option  value="108106068/lec16.mp4">General Purpose Operational Amplifier-747</option>
      
      <option  value="108106068/lec17.mp4">Transconductance Operational Amplifier</option>
      
      <option  value="108106068/lec18.mp4">Audio Power Amplifier and Norton's Amplifier</option>
      
      <option  value="108106068/lec19.mp4">Analog Multipliers</option>
      
      <option  value="108106068/lec20.mp4">Analog Multipliers</option>
      
      <option  value="108106068/lec21.mp4">Voltage Controlled Oscillator</option>
      
      <option  value="108106068/lec22.mp4">Voltage Controlled Oscillator</option>
      
      <option  value="108106068/lec23.mp4">Self Tuned Filter</option>
      
      <option  value="108106068/lec24.mp4">Phase Locked Loop24 Phase Locked Loop</option>
      
      <option  value="108106068/lec25.mp4">Phase Locked Loop</option>
      
      <option  value="108106068/lec26.mp4">Phase Locked Loop</option>
      
      <option  value="108106068/lec27.mp4">Phase Locked Loop</option>
      
      <option  value="108106068/lec28.mp4">Current Mode ICs</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108106069</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Digital Integrated Circuits</strong></td>
	<td><strong>Prof. Amitava Dasgupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106069/lec01.mp4">Semiconductors</option>
      
      <option  value="108106069/lec02.mp4">Modelling of PN Junction Diodes</option>
      
      <option  value="108106069/lec03.mp4">Modelling of BJTs</option>
      
      <option  value="108106069/lec04.mp4">Diode and BJT Model Parameter Extraction</option>
      
      <option  value="108106069/lec05.mp4">BJT Inverters DC and Switching Characteristics</option>
      
      <option  value="108106069/lec06.mp4">Schottky Transistor</option>
      
      <option  value="108106069/lec07.mp4">Specifications of Logic Circuits</option>
      
      <option  value="108106069/lec08.mp4">Qualitative discussion on TTL Circuits</option>
      
      <option  value="108106069/lec09.mp4">Standard TTL Circuits</option>
      
      <option  value="108106069/lec10.mp4">Schottky (74s..) and Low power Schottky (74ls</option>
      
      <option  value="108106069/lec11.mp4">Advanced TTL Circuits</option>
      
      <option  value="108106069/lec12.mp4">I<sup>2</sup> L Technology</option>
      
      <option  value="108106069/lec13.mp4">Edge triggered D-F/F</option>
      
      <option  value="108106069/lec14.mp4">I<sup>2</sup> L - Condition for Proper Operation</option>
      
      <option  value="108106069/lec15.mp4">I<sup>2</sup> L - Propagation delay Self aligned</option>
      
      <option  value="108106069/lec16.mp4">Schottky Transistor Logic</option>
      
      <option  value="108106069/lec17.mp4">Stacked I<sup>2</sup> L</option>
      
      <option  value="108106069/lec18.mp4">ECL Basic Operation</option>
      
      <option  value="108106069/lec19.mp4">Quantitative analysis of ECL 10k Series gates</option>
      
      <option  value="108106069/lec20.mp4">ECL 100k series; Stacked ECL gates; D-F/F</option>
      
      <option  value="108106069/lec21.mp4">Emitter Function Logic;Low Power ECL</option>
      
      <option  value="108106069/lec22.mp4">Polyemitter Bipolar Transistor In ECL;Propagation</option>
      
      <option  value="108106069/lec23.mp4">Heterojunction Bipolar Transistor Based ECL;ECL</option>
      
      <option  value="108106069/lec24.mp4">nMOS Logic Circuits</option>
      
      <option  value="108106069/lec25.mp4">nMOS Logic Circuits(contd); CMOS :Introduction</option>
      
      <option  value="108106069/lec26.mp4">CMOS Inverter</option>
      
      <option  value="108106069/lec27.mp4">CMOS NAND,NOR and Other Gates: Clocked CMOS</option>
      
      <option  value="108106069/lec28.mp4">Dynamic CMOS ;Transmission Gates;Realization Of MUX,decoder, D-F/F</option>
      
      <option  value="108106069/lec29.mp4">BiCMOS Gates</option>
      
      <option  value="108106069/lec30.mp4">BiCMOS Driver;BiCMOS 32-bit Adder</option>
      
      <option  value="108106069/lec31.mp4">Digital Integrated Circuits</option>
      
      <option  value="108106069/lec32.mp4">Digital Integrated Circuits</option>
      
      <option  value="108106069/lec33.mp4">CMOS SRAM</option>
      
      <option  value="108106069/lec34.mp4">BiCMOS SRAM</option>
      
      <option  value="108106069/lec35.mp4">DRAM-CMOS and BiCMOS</option>
      
      <option  value="108106069/lec36.mp4">ROM-EPROM,EEPROM and Flash EPROM</option>
      
      <option  value="108106069/lec37.mp4">GaAs MESFET Characteristics and Equivalent Circuits</option>
      
      <option  value="108106069/lec38.mp4">Direct Coupled FET Logic; Superbuffer FET Logic</option>
      
      <option  value="108106069/lec39.mp4">Buffered FET Logic; Schottky Diode FET Logic</option>
      
      <option  value="108106069/lec40.mp4">Transmission Line Effects</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108106071</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Electrical Machines I</strong></td>
	<td><strong>Dr. Krishna Vasudevan,Prof. G. Sridhara Rao,Prof. P. Sasidhara Rao</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106071/Electrical_Machines_I/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108106072</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Electrical Machines II</strong></td>
	<td><strong>Dr. Krishna Vasudevan,Prof. G. Sridhara Rao,Prof. P. Sasidhara Rao</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106072/Electrical_Machines_II/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108106073</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Electromagnetic Fields</strong></td>
	<td><strong>Prof. Harishankar Ramachandran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106073/lec01.mp4">Introduction To Vector</option>
      
      <option  value="108106073/lec02.mp4">Introduction To Vector ( Continued)</option>
      
      <option  value="108106073/lec03.mp4">Coulomb's Law</option>
      
      <option  value="108106073/lec04.mp4">Electric Field</option>
      
      <option  value="108106073/lec05.mp4">Electro Static Potential</option>
      
      <option  value="108106073/lec06.mp4">The Gradient</option>
      
      <option  value="108106073/lec07.mp4">Gauss's Law</option>
      
      <option  value="108106073/lec08.mp4">Poisson's Equation</option>
      
      <option  value="108106073/lec09.mp4">Energy In The Field</option>
      
      <option  value="108106073/lec10.mp4">Sample Problems In Electrostatics</option>
      
      <option  value="108106073/lec11.mp4">Fields In Materials</option>
      
      <option  value="108106073/lec12.mp4">Fields In Material Bodies</option>
      
      <option  value="108106073/lec13.mp4">Displacement Vectors</option>
      
      <option  value="108106073/lec14.mp4">Capacitors</option>
      
      <option  value="108106073/lec15.mp4">Method Of Images</option>
      
      <option  value="108106073/lec16.mp4">Poisson's Equation 2 Dimensions</option>
      
      <option  value="108106073/lec17.mp4">Field Near Sharp Edges And Points</option>
      
      <option  value="108106073/lec18.mp4">Magnetic Field 1</option>
      
      <option  value="108106073/lec19.mp4">Magnetic Field 2</option>
      
      <option  value="108106073/lec20.mp4">Stokes Theorems</option>
      
      <option  value="108106073/lec21.mp4">The curl</option>
      
      <option  value="108106073/lec22.mp4">Field due to current loop</option>
      
      <option  value="108106073/lec23.mp4">Ampere's law</option>
      
      <option  value="108106073/lec24.mp4">Examples of Ampere's law</option>
      
      <option  value="108106073/lec25.mp4">Inductance</option>
      
      <option  value="108106073/lec26.mp4">Mutual Inductance</option>
      
      <option  value="108106073/lec27.mp4">Faraday's law</option>
      
      <option  value="108106073/lec28.mp4">Magnetic Energy</option>
      
      <option  value="108106073/lec29.mp4">Magnetic Energy (contd)</option>
      
      <option  value="108106073/lec30.mp4">Magnetic Energy (contd)</option>
      
      <option  value="108106073/lec31.mp4">Generalised Ampere's Law</option>
      
      <option  value="108106073/lec32.mp4">The Wave Equation</option>
      
      <option  value="108106073/lec33.mp4">The Wave Equation</option>
      
      <option  value="108106073/lec34.mp4">Poynting Theorem</option>
      
      <option  value="108106073/lec35.mp4">Skin Effect</option>
      
      <option  value="108106073/lec36.mp4">Skin Effect (Continued)</option>
      
      <option  value="108106073/lec37.mp4">Radiation And Circuits</option>
      
      <option  value="108106073/lec38.mp4">Phasor Form Of Poynting Theorem</option>
      
      <option  value="108106073/lec39.mp4">Reflection At Dielectric Boundaries</option>
      
      <option  value="108106073/lec40.mp4">Reflection At Dielectric Boundaries - Continued</option>
      
      <option  value="108106073/lec41.mp4">Transmission Lines</option>
      
      <option  value="108106073/lec42.mp4">Transmission Lines(contd) & Conclusion</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108106074</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Industrial Instrumentation</strong></td>
	<td><strong>Prof. V. Jayashankar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106074/Industrial_Instrumentation/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108106075</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Networks and Systems</strong></td>
	<td><strong>Prof. V.G.K. Murti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108106075/lec01.mp4">Introductory Concepts (1)</option>
      
      <option  value="108106075/lec02.mp4">Introductory Concepts (2)</option>
      
      <option  value="108106075/lec03.mp4">Introductory Concepts (3)</option>
      
      <option  value="108106075/lec04.mp4">Introductory Concepts (4)</option>
      
      <option  value="108106075/lec05.mp4">Introductory Concepts (5)</option>
      
      <option  value="108106075/lec06.mp4">Introductory Concepts (6)</option>
      
      <option  value="108106075/lec07.mp4">Fourier Series (1)</option>
      
      <option  value="108106075/lec08.mp4">Fourier Series (2)</option>
      
      <option  value="108106075/lec09.mp4">Fourier Series (3)</option>
      
      <option  value="108106075/lec10.mp4">Fourier Series (4)</option>
      
      <option  value="108106075/lec11.mp4">Fourier Series (5)</option>
      
      <option  value="108106075/lec12.mp4">Fourier Series (6)</option>
      
      <option  value="108106075/lec13.mp4">Fourier Transforms (1)</option>
      
      <option  value="108106075/lec14.mp4">Fourier Transforms (2)</option>
      
      <option  value="108106075/lec15.mp4">Fourier Transforms (3)</option>
      
      <option  value="108106075/lec16.mp4">Fourier Transforms (4)</option>
      
      <option  value="108106075/lec17.mp4">Fourier Transforms (5)</option>
      
      <option  value="108106075/lec18.mp4">Fourier Transforms (6)</option>
      
      <option  value="108106075/lec19.mp4">Fourier Transforms (7)</option>
      
      <option  value="108106075/lec20.mp4">Laplace Transforms (1)</option>
      
      <option  value="108106075/lec21.mp4">Laplace Transforms (2)</option>
      
      <option  value="108106075/lec22.mp4">Laplace Transforms (3)</option>
      
      <option  value="108106075/lec23.mp4">Laplace Transforms (4)</option>
      
      <option  value="108106075/lec24.mp4">Laplace Transforms (5)</option>
      
      <option  value="108106075/lec25.mp4">Laplace Transforms (6)</option>
      
      <option  value="108106075/lec26.mp4">Application of Laplace Transforms (1)</option>
      
      <option  value="108106075/lec27.mp4">Application of Laplace Transforms (2)</option>
      
      <option  value="108106075/lec28.mp4">Application of Laplace Transforms (3)</option>
      
      <option  value="108106075/lec29.mp4">Application of Laplace Transforms (4)</option>
      
      <option  value="108106075/lec30.mp4">Network Functions (1)</option>
      
      <option  value="108106075/lec31.mp4">Network Functions (2)</option>
      
      <option  value="108106075/lec32.mp4">Network Functions (3)</option>
      
      <option  value="108106075/lec33.mp4">Network Functions (4)</option>
      
      <option  value="108106075/lec34.mp4">Network Theorems(1)</option>
      
      <option  value="108106075/lec35.mp4">Network Theorems(2)</option>
      
      <option  value="108106075/lec36.mp4">Network Theorems (3)</option>
      
      <option  value="108106075/lec37.mp4">Network Theorems (4)</option>
      
      <option  value="108106075/lec38.mp4">Discrete - Time Systems (1)</option>
      
      <option  value="108106075/lec39.mp4">Discrete - Time Systems (2)</option>
      
      <option  value="108106075/lec40.mp4">Discrete - Time Systems (3)</option>
      
      <option  value="108106075/lec41.mp4">Discrete - Time Systems (4)</option>
      
      <option  value="108106075/lec42.mp4">Discrete - Time Systems (5)</option>
      
      <option  value="108106075/lec43.mp4">Discrete - Time Systems (6)</option>
      
      <option  value="108106075/lec44.mp4">Discrete - Time Systems (7)</option>
      
      <option  value="108106075/lec45.mp4">State-Variable Methods (1)</option>
      
      <option  value="108106075/lec46.mp4">State-Variable Methods (2)</option>
      
      <option  value="108106075/lec47.mp4">State Variable Methods (3)</option>
      
      <option  value="108106075/lec48.mp4">State Variable Methods (4)</option>
      
      <option  value="108106075/lec49.mp4">State Variable Methods (5)</option>
      
      <option  value="108106075/lec50.mp4">State Variable Methods (6)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108107028</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Computer Aided Power System Analysis</strong></td>
	<td><strong>Dr. B. Das,Dr. Vinay Pant</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108107028/module1/lecture1/lecture1.pdf">Modern power system operation and control, different types of power system analysis</option>
      
      <option  value="108107028/module2/lecture1/lecture1.pdf">Introduction, modeling of power system components and formation of YBUS matrix</option>
      
      <option  value="108107028/module2/lecture2/lecture2.pdf">Formation of YBUS matrix in the presence of mutually coupled elements</option>
      
      <option  value="108107028/module2/lecture3/lecture3.pdf">Basic power flow equations and Gauss-Seidel load flow technique</option>
      
      <option  value="108107028/module2/lecture4/lecture4.pdf">Example of Gauss-Seidel load flow technique</option>
      
      <option  value="108107028/module2/lecture5/lecture5.pdf">Newton-Raphson (polar) load flow technique</option>
      
      <option  value="108107028/module2/lecture6/lecture6.pdf">Example of Newton-Raphson (polar) load flow technique</option>
      
      <option  value="108107028/module2/lecture7/lecture7.pdf">Newton-Raphson (rectangular) load flow technique</option>
      
      <option  value="108107028/module2/lecture8/lecture8.pdf">Example of Newton-Raphson ( rectangular ) load flow technique</option>
      
      <option  value="108107028/module2/lecture9/lecture9.pdf">Fast decoupled load flow technique</option>
      
      <option  value="108107028/module2/lecture10/lecture10.pdf">Example of Fast decoupled load flow technique</option>
      
      <option  value="108107028/module2/lecture11/lecture11.pdf">A.C.-D.C. load flow technique</option>
      
      <option  value="108107028/module2/lecture12/lecture12.pdf">Example of A.C.-D.C. load flow technique</option>
      
      <option  value="108107028/module3/lecture1/lecture1.pdf">Introduction to Sparsity and Gaussian elimination technique</option>
      
      <option  value="108107028/module3/lecture2/lecture2.pdf">Example of Gaussian elimination technique, Optimal ordering and LU factorization</option>
      
      <option  value="108107028/module3/lecture3/lecture3.pdf">Algorithm & example of LU factorization, storage scheme for sparse matrices</option>
      
      <option  value="108107028/module4/lecture1/lecture1.pdf">ZBUS matrix formulation without mutual impedance</option>
      
      <option  value="108107028/module4/lecture2/lecture2.pdf">ZBUS matrix formulation without mutual impedance (continued)</option>
      
      <option  value="108107028/module4/lecture3/lecture3.pdf">Example of ZBUS matrix formulation</option>
      
      <option  value="108107028/module4/lecture4/lecture4.pdf">ZBUS matrix formulation considering mutual coupling between elements</option>
      
      <option  value="108107028/module4/lecture5/lecture5.pdf">Example of ZBUS matrix formulation in the presence of mutual coupling</option>
      
      <option  value="108107028/module4/lecture6/lecture6.pdf">Symmetrical Fault analysis & introduction to symmetrical components</option>
      
      <option  value="108107028/module4/lecture7/lecture7.pdf">Sequence networks of power system components</option>
      
      <option  value="108107028/module4/lecture8/lecture8.pdf">LG, LL,LLG fault analysis using sequence networks</option>
      
      <option  value="108107028/module4/lecture9/lecture9.pdf">Unbalance fault analysis using of ZBUS matrix</option>
      
      <option  value="108107028/module4/lecture10/lecture10.pdf">Example of fault calculations for three-phase and LG faults</option>
      
      <option  value="108107028/module4/lecture11/lecture11.pdf">Example of fault calculations for LL and LLG faults</option>
      
      <option  value="108107028/module4/lecture12/lecture12.pdf">Open conductor fault analysis</option>
      
      <option  value="108107028/module4/lecture13/lecture13.pdf">Example of Open conductor fault analysis</option>
      
      <option  value="108107028/module5/lecture1/lecture1.pdf">Introduction, concept of GOSF, LOSF and D.C. load flow</option>
      
      <option  value="108107028/module5/lecture2/lecture2.pdf">Calculation of GOSF and determination of Thevenin�s equivalent impedance</option>
      
      <option  value="108107028/module5/lecture3/lecture3.pdf">Calculation of LOSF with an example</option>
      
      <option  value="108107028/module5/lecture4/lecture4.pdf">Analysis of multiple contingencies</option>
      
      <option  value="108107028/module5/lecture5/lecture5.pdf">Analysis of multiple contingencies (continued)</option>
      
      <option  value="108107028/module5/lecture6/lecture6.pdf">Example of multiple contingency analysis and contingency ranking methods</option>
      
      <option  value="108107028/module6/lecture1/lecture1.pdf">Classification of power system stability, equation of motion of a synchronous generator</option>
      
      <option  value="108107028/module6/lecture2/lecture2.pdf">Basics of transient stability analysis with Partitioned Explicit technique</option>
      
      <option  value="108107028/module6/lecture3/lecture3.pdf">Techniques for numerical integration with modified Euler�s method and Runge-Kutta 4th order method</option>
      
      <option  value="108107028/module6/lecture4/lecture4.pdf">Example of transient stability analysis using modified Euler�s method</option>
      
      <option  value="108107028/module6/lecture5/lecture5.pdf">Example of transient stability analysis using Runge-Kutta 4th order method</option>
      
      <option  value="108107028/module6/lecture6/lecture6.pdf">Basics of Small signal analysis and linearization of network equations at generator buses</option>
      
      <option  value="108107028/module6/lecture7/lecture7.pdf">linearization of network equations at load buses</option>
      
      <option  value="108107028/module6/lecture8/lecture8.pdf">Formation of system state matrix and example of small signal stability analysis</option>
      
      <option  value="108107028/module6/lecture9/lecture9.pdf">Introduction to voltage stability</option>
      
      <option  value="108107028/module6/lecture10/lecture10.pdf">Relation between PL, QL and V</option>
      
      <option  value="108107028/module6/lecture11/lecture11.pdf">Criteria for assessing voltage stability</option>
      
      <option  value="108107028/module6/lecture12/lecture12.pdf">Appendix-A System Data</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>108107029</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Microprocessor</strong></td>
	<td><strong>Dr. Pramod Agarwal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108107029/module1/lecture1/lecture1.pdf">Introduction of Microcomputer, Microcontrollers, Evolution of Microprocessors</option>
      
      <option  value="108107029/module1/lecture2/lecture2.pdf">Microcomputer Organization, CPU, Memory, I/O Ports, Clock Generator</option>
      
      <option  value="108107029/module1/lecture3/lecture3.pdf">Bussed Architecture, Address Bus, Data Bus, Control Bus, Computer Language, Applications</option>
      
      <option  value="108107029/module2/lecture1/lecture1.pdf">Development of Memory, D-flipflop, m-bit register</option>
      
      <option  value="108107029/module2/lecture2/lecture2.pdf">Development of Memory Chips, Memory read/write operations</option>
      
      <option  value="108107029/module2/lecture3/lecture3.pdf">Characteristics of memory, Access time, Classification ROM, PROM, EPROM, SRAM</option>
      
      <option  value="108107029/module2/lecture4/lecture4.pdf">Intel 2716 EPROM, Intel 6116 RAM</option>
      
      <option  value="108107029/module2/lecture5/lecture5.pdf">Dynamic RAM, 4116 DRAM</option>
      
      <option  value="108107029/module3/lecture1/lecture1.pdf">States of 8085 ?P, Pin Configuration</option>
      
      <option  value="108107029/module3/lecture2/lecture2.pdf">Pin Configuration contd</option>
      
      <option  value="108107029/module3/lecture3/lecture3.pdf">Pin Configuration contd-2</option>
      
      <option  value="108107029/module4/lecture1/lecture1.pdf">Arithmetic and Logic Section, Flag register, Register section</option>
      
      <option  value="108107029/module4/lecture2/lecture2.pdf">Program Counter, Stack Pointer</option>
      
      <option  value="108107029/module4/lecture3/lecture3.pdf">Interrupt control section, Serial I/O, Machine Cycles</option>
      
      <option  value="108107029/module4/lecture4/lecture4.pdf">OFMC, MRMC, MWRMC, IORMC, IOWRMC</option>
      
      <option  value="108107029/module4/lecture5/lecture5.pdf">HALT state, HOLD state, State Transition Diagram</option>
      
      <option  value="108107029/module5/lecture1/lecture1.pdf">Instruction Format, Addressing Modes</option>
      
      <option  value="108107029/module5/lecture2/lecture2.pdf">Instruction Set, Classification, Data Transfer Group</option>
      
      <option  value="108107029/module5/lecture3/lecture3.pdf">Data Transfer Group contd</option>
      
      <option  value="108107029/module5/lecture4/lecture4.pdf">Data Transfer Group contd-2</option>
      
      <option  value="108107029/module5/lecture5/lecture5.pdf">Arithmetic Group</option>
      
      <option  value="108107029/module5/lecture6/lecture6.pdf">Arithmetic Group contd</option>
      
      <option  value="108107029/module5/lecture7/lecture7.pdf">Logical Group</option>
      
      <option  value="108107029/module5/lecture8/lecture8.pdf">Logical Group contd., Branch Group</option>
      
      <option  value="108107029/module5/lecture9/lecture9.pdf">Branch Group contd</option>
      
      <option  value="108107029/module5/lecture10/lecture10.pdf">Branch Group contd., Stack Group</option>
      
      <option  value="108107029/module5/lecture11/lecture11.pdf">Machine Control Group</option>
      
      <option  value="108107029/module5/lecture12/lecture12.pdf">Unspecified Instruction Set</option>
      
      <option  value="108107029/module6/lecture1/lecture1.pdf">Fundamentals of Programming</option>
      
      <option  value="108107029/module6/lecture2/lecture2.pdf">Assembler, Assembler Directives, Macros</option>
      
      <option  value="108107029/module6/lecture3/lecture3.pdf">Programming Examples</option>
      
      <option  value="108107029/module6/lecture4/lecture4.pdf">Programming Examples contd</option>
      
      <option  value="108107029/module7/lecture1/lecture1.pdf">Classification of I/O Techniques</option>
      
      <option  value="108107029/module7/lecture2/lecture2.pdf">Interfacing I/O Devices, Isolated I/O</option>
      
      <option  value="108107029/module7/lecture3/lecture3.pdf">Examples of Isolated I/O</option>
      
      <option  value="108107029/module7/lecture4/lecture4.pdf">Memory Mapped I/O, Example</option>
      
      <option  value="108107029/module7/lecture5/lecture5.pdf">Unconditional Data Transfer, Example of Dynamic Display</option>
      
      <option  value="108107029/module7/lecture6/lecture6.pdf">Conditional Data Transfer, Example of ADC0809 Interface</option>
      
      <option  value="108107029/module8/lecture1/lecture1.pdf">Interrupt I/O, Maskable and Non- Maskable Interrupt</option>
      
      <option  value="108107029/module8/lecture2/lecture2.pdf">Intel 8085 Interrupt Structure</option>
      
      <option  value="108107029/module8/lecture3/lecture3.pdf">Handling of Interrupts by ?P, Example of ADC interface through Interrupt</option>
      
      <option  value="108107029/module9/lecture1/lecture1.pdf">Pin Configuration, Operating Modes</option>
      
      <option  value="108107029/module9/lecture2/lecture2.pdf">Mode 0, Mode 1 (Strobed Input Mode)</option>
      
      <option  value="108107029/module9/lecture3/lecture3.pdf">Mode 1 (Strobed Output Mode)</option>
      
      <option  value="108107029/module9/lecture4/lecture4.pdf">Mode 2, Special Modes, Status Register</option>
      
      <option  value="108107029/module10/lecture1/lecture1.pdf">Pin Configuration, Timer or Counter, Internal Structure</option>
      
      <option  value="108107029/module10/lecture2/lecture2.pdf">Interfacing with system, Mode 0</option>
      
      <option  value="108107029/module10/lecture3/lecture3.pdf">Mode1, Mode 2, Mode 3, Mode 4, Mode 5</option>
      
      <option  value="108107029/module10/lecture4/lecture4.pdf">Reading Timer, Read Back Command Feature</option>
      
      <option  value="108107029/module11/lecture1/lecture1.pdf">Priority Interrupt Structure</option>
      
      <option  value="108107029/module11/lecture2/lecture2.pdf">Intel 8259, Pin Configuration, Functional Block Diagram</option>
      
      <option  value="108107029/module11/lecture3/lecture3.pdf">Interrupt Sequence, Initialization Control Words ICW1, ICW2</option>
      
      <option  value="108107029/module11/lecture4/lecture4.pdf">Initialization Control Words ICW3, ICW4, Operation Control Words OCWs</option>
      
      <option  value="108107029/module11/lecture5/lecture5.pdf">Fully Nested Mode, EOI modes</option>
      
      <option  value="108107029/module11/lecture6/lecture6.pdf">Poll command, Reading Status Registers, Special Fully Nest Mode, Cascade Mode</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108108031</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>An Introduction to Electronics Systems Packaging</strong></td>
	<td><strong>Prof. G.V. Mahesh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108108031/mod01lec01.mp4">Introduction and Objectives of the course</option>
      
      <option  value="108108031/mod01lec02.mp4">Definition of a system and history of semiconductors</option>
      
      <option  value="108108031/mod01lec03.mp4">Products and levels of packaging</option>
      
      <option  value="108108031/mod01lec04.mp4">Packaging aspects of handheld products; Case studies in applications</option>
      
      <option  value="108108031/mod01lec05.mp4">Case Study (continued); Definition of PWB, summary and Questions for review</option>
      
      <option  value="108108031/mod02lec06.mp4">Basics of Semiconductor and Process flowchart; Video on �Sand-to-Silicon�</option>
      
      <option  value="108108031/mod02lec07.mp4">Wafer fabrication, inspection and testing</option>
      
      <option  value="108108031/mod02lec08.mp4">Wafer packaging; Packaging evolution; Chip connection choices</option>
      
      <option  value="108108031/mod02lec09.mp4">Wire bonding, TAB and flipchip-1</option>
      
      <option  value="108108031/mod02lec10.mp4">Wire bonding, TAB and flipchip-2; Tutorials</option>
      
      <option  value="108108031/mod03lec11.mp4">Why packaging? & Single chip packages or modules (SCM)</option>
      
      <option  value="108108031/mod03lec12.mp4">Commonly used packages and advanced packages; Materials in packages</option>
      
      <option  value="108108031/mod03lec13.mp4">Advances packages (continued); Thermal mismatch in packages; Current trends in packaging</option>
      
      <option  value="108108031/mod03lec14.mp4">Multichip modules (MCM)-types; System-in-package (SIP); Packaging roadmaps; Hybrid circuits; Quiz on packages</option>
      
      <option  value="108108031/mod04lec15.mp4">Electrical Issues � I; Resistive Parasitic</option>
      
      <option  value="108108031/mod04lec16.mp4">Electrical Issues � II; Capacitive and Inductive Parasitic</option>
      
      <option  value="108108031/mod04lec17.mp4">Electrical Issues � III; Layout guidelines and the Reflection problem</option>
      
      <option  value="108108031/mod04lec18.mp4">Electrical Issues � IV; Interconnection</option>
      
      <option  value="108108031/mod05lec19.mp4">Quick Tutorial on packages; Benefits from CAD; Introduction to DFM, DFR & DFT</option>
      
      <option  value="108108031/mod05lec20.mp4">Components of a CAD package and its highlights</option>
      
      <option  value="108108031/mod05lec21.mp4">Design Flow considerations; Beginning a circuit design with schematic work and component layout</option>
      
      <option  value="108108031/mod05lec22.mp4">Demo and examples of layout and routing; Technology file generation from CAD; DFM check list and design rules; Design for Reliability</option>
      
      <option  value="108108031/mod06lec23.mp4">Review of CAD output files for PCB fabrication; Photo plotting and mask generation</option>
      
      <option  value="108108031/mod06lec24.mp4">Process flow-chart; Vias; PWB substrates</option>
      
      <option  value="108108031/mod06lec25.mp4">Substrates continued; Video highlights; Surface preparation</option>
      
      <option  value="108108031/mod06lec26.mp4">Photoresist and application methods; UV exposure and developing; Printing technologies for PWBs</option>
      
      <option  value="108108031/mod06lec27.mp4">PWB etching; Resist stripping; Screen-printing technology</option>
      
      <option  value="108108031/mod06lec28.mp4">Through-hole manufacture process steps; Panel and pattern plating methods</option>
      
      <option  value="108108031/mod06lec29.mp4">Video highlights on manufacturing; Solder mask for PWBs; Multilayer PWBs; Introduction to microvias</option>
      
      <option  value="108108031/mod06lec30.mp4">Microvia technology and Sequential build-up technology process flow for high-density interconnects</option>
      
      <option  value="108108031/mod06lec31.mp4">Conventional Vs HDI technologies; Flexible circuits; Tutorial session</option>
      
      <option  value="108108031/mod07lec32.mp4">SMD benefits; Design issues; Introduction to soldering</option>
      
      <option  value="108108031/mod07lec33.mp4">Reflow and Wave Soldering methods to attach SMDs</option>
      
      <option  value="108108031/mod07lec34.mp4">Solders; Wetting of solders; Flux and its properties; Defects in wave soldering</option>
      
      <option  value="108108031/mod07lec35.mp4">Vapour phase soldering, BGA soldering and Desoldering/Repair; SMT failures</option>
      
      <option  value="108108031/mod07lec36.mp4">SMT failure library and Tin Whiskers</option>
      
      <option  value="108108031/mod07lec37.mp4">Tin-lead and lead-free solders; Phase diagrams; Thermal profiles for reflow soldering; Lead-free alloys</option>
      
      <option  value="108108031/mod07lec38.mp4">Lead-free solder considerations; Green electronics; RoHS compliance and e-waste recycling issues</option>
      
      <option  value="108108031/mod08lec39.mp4">Thermal Design considerations in systems packaging</option>
      
      <option  value="108108031/mod09lec40.mp4">Introduction to embedded passives; Need for embedded passives; Design Library; Embedded resistor processes</option>
      
      <option  value="108108031/mod09lec41.mp4">Embedded capacitors; Processes for embedding capacitors; Case study examples; Summary of materials in packaging</option>
      
      <option  value="108108031/mod10lec42.mp4">Chapter-wise summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108108036</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Switched Mode Power Conversion</strong></td>
	<td><strong>Prof. V. Ramanarayanan,Prof. L. Umanand</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108108036/mod01lec01.mp4">Introduction to DC-DC converter </option>
      
      <option  value="108108036/mod02lec02.mp4">Diode</option>
      
      <option  value="108108036/mod02lec03.mp4">Controlled Switches</option>
      
      <option  value="108108036/mod03lec04.mp4">Prior Art</option>
      
      <option  value="108108036/mod04lec05.mp4">Inductor</option>
      
      <option  value="108108036/mod04lec06.mp4">Transformer</option>
      
      <option  value="108108036/mod04lec07.mp4">Capacitor</option>
      
      <option  value="108108036/mod04lec08.mp4">Issues related to switches</option>
      
      <option  value="108108036/mod04lec09.mp4">Energy storage - Capacitor</option>
      
      <option  value="108108036/mod04lec10.mp4">Energy storage � Inductor</option>
      
      <option  value="108108036/mod05lec11.mp4">Primitive Converter</option>
      
      <option  value="108108036/mod05lec12.mp4">Non-Isolated converter - I</option>
      
      <option  value="108108036/mod05lec13.mp4">Non-Isolated converter � II</option>
      
      <option  value="108108036/mod06lec14.mp4">Isolated Converters - I</option>
      
      <option  value="108108036/mod06lec15.mp4">Isolated Converters � II</option>
      
      <option  value="108108036/mod07lec16.mp4">Conduction Mode</option>
      
      <option  value="108108036/mod07lec17.mp4">Problem set - I</option>
      
      <option  value="108108036/mod07lec18.mp4">Problem set � II</option>
      
      <option  value="108108036/mod08lec19.mp4">Modeling DC-DC converters</option>
      
      <option  value="108108036/mod08lec20.mp4">State space representation - I</option>
      
      <option  value="108108036/mod08lec21.mp4">State Space representation - II</option>
      
      <option  value="108108036/mod08lec22.mp4">Circuit Averaging - I</option>
      
      <option  value="108108036/mod08lec23.mp4">Circuit Averaging - II</option>
      
      <option  value="108108036/mod08lec24.mp4">State Space Model of Boost Converter</option>
      
      <option  value="108108036/mod09lec25.mp4">DC-DC converter controller</option>
      
      <option  value="108108036/mod09lec26.mp4">Controller Structure</option>
      
      <option  value="108108036/mod09lec27.mp4">PID Controller - I</option>
      
      <option  value="108108036/mod09lec28.mp4">PID Controller - II</option>
      
      <option  value="108108036/mod09lec29.mp4">PID Controller - III</option>
      
      <option  value="108108036/mod09lec30.mp4">Implementation of PID controller</option>
      
      <option  value="108108036/mod10lec31.mp4">Pulse Width Modulator</option>
      
      <option  value="108108036/mod11lec32.mp4">Controller Design - I</option>
      
      <option  value="108108036/mod11lec33.mp4">Controller Design � II</option>
      
      <option  value="108108036/mod12lec34.mp4">Controllers and Sensing Circuit</option>
      
      <option  value="108108036/mod12lec35.mp4">Regulation of Multiple outputs - I</option>
      
      <option  value="108108036/mod12lec36.mp4">Regulation of Multiple outputs - II</option>
      
      <option  value="108108036/mod12lec37.mp4">Current Control</option>
      
      <option  value="108108036/mod12lec38.mp4">Unity Power Factor Converter</option>
      
      <option  value="108108036/mod13lec39.mp4">Magnetic Design</option>
      
      <option  value="108108036/mod14lec40.mp4">DC-DC Converter Design</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108108076</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Basic Electrical Technology</strong></td>
	<td><strong>Prof. L. Umanand</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108108076/lec01_02.mp4">Basic Electrical Technology</option>
      
      <option  value="108108076/lec03.mp4">Passive Components</option>
      
      <option  value="108108076/lec04.mp4">Sources</option>
      
      <option  value="108108076/lec05.mp4">Kirchoff's Law</option>
      
      <option  value="108108076/lec06.mp4">Modelling of Circuit</option>
      
      <option  value="108108076/lec07.mp4">Modeling of Circuit Part 2</option>
      
      <option  value="108108076/lec08.mp4">Analysis Using MatLab</option>
      
      <option  value="108108076/lec09.mp4">Sinusoidal steady state</option>
      
      <option  value="108108076/lec10.mp4">Transfer Function and Pole Zero domain</option>
      
      <option  value="108108076/lec11.mp4">Transfer function & pole zero</option>
      
      <option  value="108108076/lec12.mp4">The Sinusoid</option>
      
      <option  value="108108076/lec13.mp4">Phasor Analysis Part 1</option>
      
      <option  value="108108076/lec14.mp4">Phasor Analysis Part 2</option>
      
      <option  value="108108076/lec15.mp4">Power Factor</option>
      
      <option  value="108108076/lec16.mp4">Power ports</option>
      
      <option  value="108108076/lec17.mp4">Transformer Basics Part 1</option>
      
      <option  value="108108076/lec18.mp4">Transformer Basic Part 2</option>
      
      <option  value="108108076/lec19.mp4">Transformer Basics Part 3</option>
      
      <option  value="108108076/lec20.mp4">The Practical Transformer Part 1</option>
      
      <option  value="108108076/lec21.mp4">Transformer Part 2</option>
      
      <option  value="108108076/lec22.mp4">The Practical Transformer Part 3</option>
      
      <option  value="108108076/lec23.mp4">DC Machines Part 1</option>
      
      <option  value="108108076/lec24.mp4">DC Machines Part 2</option>
      
      <option  value="108108076/lec25.mp4">DC Generators Part 1</option>
      
      <option  value="108108076/lec26.mp4">DC Generators Part 2</option>
      
      <option  value="108108076/lec27.mp4">DC Motors Part 1</option>
      
      <option  value="108108076/lec28.mp4">DC Motors Part 2</option>
      
      <option  value="108108076/lec29.mp4">DC Motor Part 3</option>
      
      <option  value="108108076/lec30.mp4">Three Phase System Part 1</option>
      
      <option  value="108108076/lec31.mp4">Three Phase System Part 2</option>
      
      <option  value="108108076/lec32.mp4">Three Phase System Part 3</option>
      
      <option  value="108108076/lec33.mp4">Three Phase System Part 4</option>
      
      <option  value="108108076/lec34.mp4">Three Phase Transformer Part 1</option>
      
      <option  value="108108076/lec35.mp4">Three Phase Transformer Part 2</option>
      
      <option  value="108108076/lec36.mp4">Induction Motor Part 1</option>
      
      <option  value="108108076/lec37.mp4">Induction Motor Part 2</option>
      
      <option  value="108108076/lec38.mp4">Induction Motor Part 3</option>
      
      <option  value="108108076/lec39.mp4">Induction Motor Part 4</option>
      
      <option  value="108108076/lec40.mp4">Synchronous Machine</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>108108077</strong></td>
	<td><strong>Electrical Engineering</strong></td>
	<td><strong>Industrial Drives - Power Electronics</strong></td>
	<td><strong>Prof. K. Gopakumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="108108077/lec01.mp4">Electric Drive</option>
      
      <option  value="108108077/lec02.mp4">Controlled Rectifier Part 1</option>
      
      <option  value="108108077/lec03.mp4">Controlled Rectifier Part - II (Three phase)</option>
      
      <option  value="108108077/lec04.mp4">Controlled Rectifier Part - III (Three phase)</option>
      
      <option  value="108108077/lec05.mp4">Controlled Rectifier Part-4(Three Phase)</option>
      
      <option  value="108108077/lec06.mp4">Controlled Rectifier Part-5 (Three Phase)</option>
      
      <option  value="108108077/lec07.mp4">Power Electronics Improvements</option>
      
      <option  value="108108077/lec08.mp4">Four Quadrant Dc to Dc Converter</option>
      
      <option  value="108108077/lec09.mp4">Sine Triangle PWM Control of Converter</option>
      
      <option  value="108108077/lec10.mp4">Front-end Ac-Dc Converter with harmonic control</option>
      
      <option  value="108108077/lec11.mp4">Ac to Dc Converter Close Loop Control Schematic</option>
      
      <option  value="108108077/lec12.mp4">Ac-Dc Converter Close loop Control Block Diagram</option>
      
      <option  value="108108077/lec13.mp4">Design of the Converter Controller & AC to DC</option>
      
      <option  value="108108077/lec14.mp4">Front-End Ac to Dc Converter-Design</option>
      
      <option  value="108108077/lec15.mp4">Front-End Ac to Dc Converter - Simulation study</option>
      
      <option  value="108108077/lec16.mp4">Dc Motor Speed Control - Introduction</option>
      
      <option  value="108108077/lec17.mp4">Dc Motor Speed Control - Block Diagram</option>
      
      <option  value="108108077/lec18.mp4">Dc Motor Speed Control Current Control & S C L</option>
      
      <option  value="108108077/lec19.mp4">Dc-Motor Speed Control Controller Design Part 1</option>
      
      <option  value="108108077/lec20.mp4">Dc Motor Speed Control Controller Design Part 2</option>
      
      <option  value="108108077/lec21.mp4">Dc Motor Speed Control Controller Design Part 3</option>
      
      <option  value="108108077/lec22.mp4">Basics of DC to AC Converter Part 1</option>
      
      <option  value="108108077/lec23.mp4">Basics of DC to AC Converter 2</option>
      
      <option  value="108108077/lec24.mp4">Inverter Sine Triangle PWM</option>
      
      <option  value="108108077/lec25.mp4">Inverter - Current Hysteresis Controlled PWM</option>
      
      <option  value="108108077/lec26.mp4">C H controlled & Basics of space vector PWM</option>
      
      <option  value="108108077/lec27.mp4">Space Vector PWM</option>
      
      <option  value="108108077/lec28.mp4">Space Vector PWM Part - 3</option>
      
      <option  value="108108077/lec29.mp4">Space Vector PWM Signal Generation</option>
      
      <option  value="108108077/lec30.mp4">Speed Control of Induction Motor Part 1</option>
      
      <option  value="108108077/lec31.mp4">Speed Control of Induction Motor Part-2</option>
      
      <option  value="108108077/lec32.mp4">High dynamic performance of I M Drive</option>
      
      <option  value="108108077/lec33.mp4">Dynamic Model of Induction Motor Part 1</option>
      
      <option  value="108108077/lec34.mp4">Dynamic Model of Induction Motor Part 2</option>
      
      <option  value="108108077/lec35.mp4">Vector Control of Induction Motor</option>
      
      <option  value="108108077/lec36.mp4">Effect of Switching Time lag in Inverter</option>
      
      <option  value="108108077/lec37.mp4">Power Switch Protection - Snubbers</option>
          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>108106084</strong></td>
      <td><strong>Electrical Engineering</strong></td>
      <td><strong>NOC:Analog Circuits</strong></td>
      <td><strong>Dr. Nagendra Krishnapura</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          	<option  value="#">Select</option>
			<option  value="108106084/mod01lec01.mp4">Introduction to the course</option>
			<option  value="108106084/mod01lec02.mp4">Obtaining power gain</option>
			<option  value="108106084/mod01lec03.mp4">Obtaining power gain using a linear two port?</option>
			<option  value="108106084/mod01lec04.mp4">One port(two terminal) nonlinear element</option>
			<option  value="108106084/mod01lec05.mp4">Nonlinear circuit analysis</option>
			<option  value="108106084/mod01lec06.mp4">Small signal incremental analysis-graphical view</option>
			<option  value="108106084/mod01lec07.mp4">Small signal incremental analysis</option>
			<option  value="108106084/mod01lec08.mp4">Incremental equivalent circuit</option>
			<option  value="108106084/mod01lec09.mp4">Large signal characteristics of a diode</option>
			<option  value="108106084/mod01lec10.mp4">Analysis of diode circuits</option>
			<option  value="108106084/mod01lec11.mp4">Small signal model of a diode</option>
			<option  value="108106084/mod01lec12.mp4">Two port nonlinearity</option>
			<option  value="108106084/mod01lec13.mp4">Small signal equivalent of a two port network</option>
			<option  value="108106084/mod01lec14.mp4">Small signal equivalent circuit of a two port network</option>
			<option  value="108106084/mod02lec15.mp4">Gain of a two port network</option>
			<option  value="108106084/mod02lec16.mp4">Constraints on small signal parameters to maximize the gain</option>
			<option  value="108106084/mod02lec17.mp4">Constraints on large signal characteristics to maximize the gain</option>
			<option  value="108106084/mod02lec18.mp4">Implications of constraints in terms of the circuit equivalent</option>
			<option  value="108106084/mod02lec19.mp4">MOS transistor-description</option>
			<option  value="108106084/mod02lec20.mp4">MOS transistor large signal characteristics</option>
			<option  value="108106084/mod02lec21.mp4">MOS transistor large signal characteristics-graphical view</option>
			<option  value="108106084/mod02lec22.mp4">MOS transistor small signal characteristics</option>
			<option  value="108106084/mod02lec23.mp4">Linear (Triode) region of the MOS transistor</option>
			<option  value="108106084/mod02lec24.mp4">Small signal amplifier using the MOS transistor</option>
			<option  value="108106084/mod02lec25.mp4">Basic amplifier structure</option>
			<option  value="108106084/mod02lec26.mp4">Problems with the basic structure</option>
			<option  value="108106084/mod02lec27.mp4">Adding bias and signal-ac coupling</option>
			<option  value="108106084/mod02lec28.mp4">Common source amplifier with biasing</option>
			<option  value="108106084/mod02lec29.mp4">Common source amplifier: Small signal equivalent circuit</option>
			<option  value="108106084/mod02lec30.mp4">Common source amplifier analysis: Effect of biasing components</option>
			<option  value="108106084/mod02lec31.mp4">Constraint on the input coupling capacitor</option>
			<option  value="108106084/mod02lec32.mp4">Constraint on the output coupling capacitor</option>
			<option  value="108106084/mod03lec33.mp4">Dependence of Id on Vds</option>
			<option  value="108106084/mod03lec34.mp4">Small signal output conductance of a MOS TRANSISTOR</option>
			<option  value="108106084/mod03lec35.mp4">Effect of gds on a common source amplifier, Inherent gain limit of a Transistor</option>
			<option  value="108106084/mod03lec36.mp4">Variation of gm with transistors parameters</option>
			<option  value="108106084/mod03lec37.mp4">Variation of gm with constant Vgs and constant drain current bias</option>
			<option  value="108106084/mod03lec38.mp4">Negative feedback control for constant drain current bias</option>
			<option  value="108106084/mod03lec39.mp4">Types of feedback for constant drain current bias</option>
			<option  value="108106084/mod03lec40.mp4">Sense at the drain and feedback to the gate-Drain feedback</option>
			<option  value="108106084/mod03lec41.mp4">Intuitive explanation of low sensitivity with drain feedback</option>
			<option  value="108106084/mod03lec42.mp4">Common source amplifier with drain feedback bias</option>
			<option  value="108106084/mod03lec43.mp4">Constraint on the gate bias resistor</option>
			<option  value="108106084/mod03lec44.mp4">Constraint on the input coupling capacitor.</option>
			<option  value="108106084/mod03lec45.mp4">Constraint on the output coupling capacitor.</option>
			<option  value="108106084/mod03lec46.mp4">Input and output resistances of the common source amplifier with constant VGS bias</option>
			<option  value="108106084/mod04lec47.mp4">Current mirror</option>
			<option  value="108106084/mod04lec48.mp4">Common souce amplifier with current mirror bias</option>
			<option  value="108106084/mod04lec49.mp4">Constraint on coupling capacitors and bias resistance</option>
			<option  value="108106084/mod04lec50.mp4">Diode connected transistor</option>
			<option  value="108106084/mod04lec51.mp4">Source feedback biasing</option>
			<option  value="108106084/mod04lec52.mp4">Common source amplifier with source feedback bias</option>
			<option  value="108106084/mod04lec53.mp4">Constraints on capacitor values</option>
			<option  value="108106084/mod04lec54.mp4">Sensing at the drain and feeding back to the source</option>
			<option  value="108106084/mod04lec55.mp4">Sensing at the source and feeding back to the gate</option>
			<option  value="108106084/mod04lec56.mp4">Ensuring that transistor is in saturation</option>
			<option  value="108106084/mod04lec57.mp4">Using a resistor instead of current source for biasing</option>
			<option  value="108106084/mod04lec58.mp4">Quick tour of amplifying devices</option>
			<option  value="108106084/mod05lec59.mp4">Controlled sources using a MOS transistor-Introduction</option>
			<option  value="108106084/mod05lec60.mp4">Voltage controlled voltage source</option>
			<option  value="108106084/mod06lec61.mp4">VCVS using a MOS transistor</option>
			<option  value="108106084/mod06lec62.mp4">VCVS using a MOS transistor-Small signal picture</option>
			<option  value="108106084/mod06lec63.mp4">VCVS using a MOS transistor-Complete circuit</option>
			<option  value="108106084/mod06lec64.mp4">Source follower: Effect of output conductance; Constraints on coupling capacitors</option>
			<option  value="108106084/mod06lec65.mp4">VCCS using a MOS transistor</option>
			<option  value="108106084/mod06lec66.mp4">VCCS using a MOS transistor: Small signal picture</option>
			<option  value="108106084/mod06lec67.mp4">VCCS using a MOS transistor: Complete circuit</option>
			<option  value="108106084/mod06lec68.mp4">VCCS using a MOS transistor: AC coupling the output</option>
			<option  value="108106084/mod06lec69.mp4">Source degenrated CS amplifier</option>
			<option  value="108106084/mod06lec70.mp4">CCCS using a MOS transistor</option>
			<option  value="108106084/mod06lec71.mp4">CCCS using a MOS transistor: Small signal picture</option>
			<option  value="108106084/mod05lec72.mp4">CCCS using a MOS transistor: Complete circuit</option>
			<option  value="108106084/mod06lec73.mp4">CCVS using a MOS transistor</option>
			<option  value="108106084/mod06lec74.mp4">CCVS using a MOS transistor: Gain</option>
			<option  value="108106084/mod06lec75.mp4">CCVS using a MOS transistor: Input and output resistances</option>
			<option  value="108106084/mod06lec76.mp4">CCVS using a MOS transistor: Complete circuit</option>
			<option  value="108106084/mod06lec77.mp4">VCVS using an opamp</option>
			<option  value="108106084/mod06lec78.mp4">CCVS using an opamp</option>
			<option  value="108106084/mod06lec79.mp4">Negative feedback and virtual short in an opamp</option>
			<option  value="108106084/mod06lec80.mp4">Negative feedback and virtual short in a transistor</option>
			<option  value="108106084/mod06lec81.mp4">Constraints on controlled sources using opamps and transistors</option>
			<option  value="108106084/mod06lec82.mp4">Summary of basic amplifiers</option>
			<option  value="108106084/mod06lec83.mp4">Signal swing limits in amplifiers</option>
			<option  value="108106084/mod06lec84.mp4">Swing limit due to transistor entering triode region</option>
			<option  value="108106084/mod06lec85.mp4">Swing limit due to transistor entering cutoff region</option>
			<option  value="108106084/mod06lec86.mp4">Swing limit calculation example</option>
			<option  value="108106084/mod06lec87.mp4">Swing limits - more calculations</option>
			<option  value="108106084/mod07lec88.mp4">pMOS transistor</option>
			<option  value="108106084/mod007lec89.mp4">Small signal model of the pMOS transistor</option>
			<option  value="108106084/mod07lec90.mp4">Common source amplifier using the pMOS transistor</option>
			<option  value="108106084/mod07lec91.mp4">Swing limits of the pMOS common source amplifier</option>
			<option  value="108106084/mod07lec92.mp4">Biasing a pMOS transistor at a constant current; pMOS current mirror</option>
			<option  value="108106084/mod07lec93.mp4">Converting nMOS transistor circuits to pMOS</option>
			<option  value="108106084/mod07lec94.mp4">Bias current generation</option>
			<option  value="108106084/mod07lec95.mp4">Examples of more than one transistor in feedback</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>108106085</strong></td>
      <td><strong>Electrical Engineering</strong></td>
      <td><strong>NOC:Introduction to Non Linear Dynamics</strong></td>
      <td><strong>Prof. Gaurav Raina</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          	<option  value="#">Select</option>
			<option  value="	108106085/	mod01lec01.mp4	">	A brief introduction to modelling	</option>
			<option  value="	108106085/	mod01lec02.mp4	">	Dynamics and Nonlinear systems: getting started	</option>
			<option  value="	108106085/	mod02lec03.mp4	">	1-Dimensional Flows, Flows on the Line, Lecture 1	</option>
			<option  value="	108106085/	mod02lec04.mp4	">	1-Dimensional Flows, Flows on the Line, Lecture 2	</option>
			<option  value="	108106085/	mod02lec05.mp4	">	1-Dimensional Flows, Flows on the Line, Lecture 3	</option>
			<option  value="	108106085/	mod03lec06.mp4	">	1-Dimensional Flows, Flows on the Line, Lecture 4	</option>
			<option  value="	108106085/	mod03lec07.mp4	">	1-Dimensional Flows, Flows on the Line, Lecture 5	</option>
			<option  value="	108106085/	mod03lec08.mp4	">	1-Dimensional Flows, Flows on the Line, Lecture 6	</option>
			<option  value="	108106085/	mod04lec09.mp4	">	1-Dimensional Flows, Bifurcations, Lecture 1	</option>
			<option  value="	108106085/	mod04lec10.mp4	">	1-Dimensional Flows, Bifurcations, Lecture 2	</option>
			<option  value="	108106085/	mod04lec11.mp4	">	1-Dimensional Flows, Bifurcations, Lecture 3	</option>
			<option  value="	108106085/	mod04lec12.mp4	">	1-Dimensional Flows, Bifurcations, Lecture 4	</option>
			<option  value="	108106085/	mod04lec13.mp4	">	1-Dimensional Flows, Bifurcations, Lecture 5	</option>
			<option  value="	108106085/	mod04lec14.mp4	">	1-Dimensional Flows, Bifurcations, Lecture 6	</option>
			<option  value="	108106085/	mod05lec15.mp4	">	1-Dimensional Flows, Flows on the Circle, Lecture 1	</option>
			<option  value="	108106085/	mod05lec16.mp4	">	1-Dimensional Flows, Flows on the Circle, Lecture 2	</option>
			<option  value="	108106085/	mod06lec17.mp4	">	2-Dimensional Flows, Linear Systems, Lecture 1	</option>
			<option  value="	108106085/	mod06lec18.mp4	">	2-Dimensional Flows, Linear Systems, Lecture 2	</option>
			<option  value="	108106085/	mod06lec19.mp4	">	2-Dimensional Flows, Linear Systems, Lecture 3	</option>
			<option  value="	108106085/	mod09lec20.mp4	">	2-Dimensional Flows, Linear Systems, Lecture 4	</option>
			<option  value="	108106085/	mod09lec21.mp4	">	2-Dimensional Flows, Phase Plane, Lecture 1	</option>
			<option  value="	108106085/	mod09lec22.mp4	">	2-Dimensional Flows, Phase Plane, Lecture 2	</option>
			<option  value="	108106085/	mod09lec23.mp4	">	2-Dimensional Flows, Phase Plane, Lecture 3	</option>
			<option  value="	108106085/	mod09lec24.mp4	">	2-Dimensional Flows, Limit Cycles, Lecture 1	</option>
			<option  value="	108106085/	mod09lec25.mp4	">	2-Dimensional Flows, Limit Cycles, Lecture 2	</option>
			<option  value="	112104189/	mod09lec26.mp4	">	2-Dimensional Flows, Limit Cycles, Lecture 3	</option>
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
