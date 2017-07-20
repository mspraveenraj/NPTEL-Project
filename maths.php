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
<title>Mathamatics</title>
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
	<td><strong>111101001</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Algebra II</strong></td>
	<td><strong>Prof. Jugal K. Verma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111101001/modules/lec1/objectives_L1.html">Lecture 1 : Introduction and Overview</option>
      
      <option  value="111101001/modules/lec2/objectives_L2.html">Lecture 2 : Algebraic extensions I</option>
      
      <option  value="111101001/modules/lec3/objectives_L3.html">Lecture 3 : Algebraic Extensions II</option>
      
      <option  value="111101001/modules/problem1/Problemset1.html">Problem Set 1 : Algebraic Extensions</option>
      
      <option  value="111101001/modules/lec4/objectives_L4.html">Lecture 4 : Ruler and Compass Constructions I </option>
      
      <option  value="111101001/modules/lec5/objectives_L5.html">Lecture 5 : Ruler and Compass Constructions II</option>
      
      <option  value="111101001/modules/problem2/Problemset2.html">Problem Set 2 : Ruler and Compass Constructions</option>
      
      <option  value="111101001/modules/Tutorial1/Tutorial1.1.html">Tutorial 1 :  Algebraic Extensions and Ruler and Compass Constructions</option>
      
      <option  value="111101001/modules/lec6/objectives_L6.html">Lecture 6 : Symmetric Polynomials I</option>
      
      <option  value="111101001/modules/lec7/objectives_L7.html">Lecture 7 : Symmetric Polynomials II</option>
      
      <option  value="111101001/modules/problem3/Problemset3.html">Problem set 3 : Symmetric Polynomials </option>
      
      <option  value="111101001/modules/lec8/objectives_L8.html">Lecture 8 : Algebraic Closure of a Field</option>
      
      <option  value="111101001/modules/problem4/Problemset4.html">Problem set 4 : Splitting Fields</option>
      
      <option  value="111101001/modules/Tutorial2/Tutorial2.1.html">Tutorial 2 : Symmetric Polynomials and Splitting Fields </option>
      
      <option  value="111101001/modules/lec9/objectives_L9.html">Lecture 9 : Separable Extensions I</option>
      
      <option  value="111101001/modules/lec10/objectives_L10.html">Lecture 10 : Separable Extensions II</option>
      
      <option  value="111101001/modules/problem5/Problemset5.html">Problem set 5 : Separable Extensions </option>
      
      <option  value="111101001/modules/lec11/objectives_L11.html">Lecture 11 : Finite Fields I</option>
      
      <option  value="111101001/modules/Tutorial3/Tutorial3.1.html">Tutorial 3 : Separable Extensions and Finite Fields</option>
      
      <option  value="111101001/modules/problem6/Problemset6.html">Problem set 6 : Finite Fields </option>
      
      <option  value="111101001/modules/lec12/objectives_L12.html">Lecture 12 : The Primitive Element Theorem </option>
      
      <option  value="111101001/modules/problem7/Problemset7.html">Problem set 7 : Primitive elements</option>
      
      <option  value="111101001/modules/Tutorial4/Tutorial4.1.html">Tutorial 4 : Finite Fields and Primitive Elements</option>
      
      <option  value="111101001/modules/lec13/objectives_L13.html">Lecture 13 : Normal Extensions</option>
      
      <option  value="111101001/modules/lec14/objectives_L14.html">Lecture 14 : Galois group of a Galois Extension I </option>
      
      <option  value="111101001/modules/lec15/objectives_L15.html">Lecture 15 : Galois group of a Galois Extension II </option>
      
      <option  value="111101001/modules/problem8/Problemset8.html">Problem set 8 : Fundamental Theorem of Galois Theory </option>
      
      <option  value="111101001/modules/Tutorial5/Tutorial5.1.html">Tutorial 5 : Fundamental Theorem of Galois Theory</option>
      
      <option  value="111101001/modules/lec16/objectives_L16.html">Lecture 16 : Applications and Illustrations of the FTGT</option>
      
      <option  value="111101001/modules/lec17/objectives_L17.html">Lecture 17 : Cyclotomic Extensions I </option>
      
      <option  value="111101001/modules/lec18/objectives_L18.html">Lecture 18 : Cyclotomic Extensions II </option>
      
      <option  value="111101001/modules/problem9/Problemset9.html">Problem Set 9 : Cyclotomic Extensions</option>
      
      <option  value="111101001/modules/lec19/objectives_L19.html">Lecture 19 : Abelian and Cyclic Extensions </option>
      
      <option  value="111101001/modules/lec20/objectives_L20.html">Lecture 20 : Cyclic Extensions and Solvable Groups</option>
      
      <option  value="111101001/modules/Tutorial6/Tutorial6.1.html">Tutorial 6 : Cyclotomic Extensions</option>
      
      <option  value="111101001/modules/lec21/objectives_L21.html">Lecture 21 : Galois Groups of Composite Extensions </option>
      
      <option  value="111101001/modules/lec22/objectives_L22.html">Lecture 22 : Solvability by Radicals</option>
      
      <option  value="111101001/modules/problem10/Problemset10.html">Problem Set 10 : Solvability by Radicals</option>
      
      <option  value="111101001/modules/lec23/objectives_L23.html">Lecture 23 : Solutions of Cubic and Quartic Equations </option>
      
      <option  value="111101001/modules/lec24/objectives_L24.html">Lecture 24 : Galois Groups of Quartic Polynomials</option>
      
      <option  value="111101001/modules/problem11/Problemset11.html">Problem Set 11 : Galois groups of Quartic Polynomials. </option>
      
      <option  value="111101001/modules/Tutorial7/Tutorial7.1.html">Tutorial 7 : Galois Groups of Quartics and Solvability by Radicals</option>
      
      <option  value="111101001/modules/lec25/objectives_L25.html">Lecture 25 : Norm, Trace and Hilbert's Theorem 90</option>
      
      <option  value="111101001/modules/problem12/Problemset12.html">Problem Set 12 : Cyclic Extensions</option>
      
      <option  value="111101001/modules/lec26/objectives_L26.html">Lecture 26 : Polynomials with Galois Group Sn:</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111101002</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Algebraic Topology</strong></td>
	<td><strong>Prof. G.K. Srinivasan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111101002/objectives_L1.html">Lecture 1: Introduction</option>
      
      <option  value="111101002/objectives_L2.html">Lecture 2 : Preliminaries from general topology</option>
      
      <option  value="111101002/objectives_L3.html">Lecture 3 : More Preliminaries from general topology</option>
      
      <option  value="111101002/objectives_L4.html">Lecture 4 : Further preliminaries from general topology</option>
      
      <option  value="111101002/objectives_L5.html">Lecture 5 : Topological groups</option>
      
      <option  value="111101002/objectives_L6.html">Lecture 6 : Test - 1</option>
      
      <option  value="111101002/objectives_L7.html">Lecture 7 : Paths, homotopies and the fundamental group</option>
      
      <option  value="111101002/objectives_L8.html">Lecture 8 : Categories and Functors</option>
      
      <option  value="111101002/objectives_L9.html">Lecture 9 : Functorial properties of the fundamental group</option>
      
      <option  value="111101002/objectives_L10.html">Lecture 10 : Brouwers theorem and its applications</option>
      
      <option  value="111101002/objectives_L11.html">Lecture 11 : Homotopies of maps. Deformation retracts</option>
      
      <option  value="111101002/objectives_L12&13.html">Lecture 12 & 13 : The fundamental group of the circle.</option>
      
      <option  value="111101002/objectives_L14.html">Lecture 14 : Test - II</option>
      
      <option  value="111101002/objectives_L15.html">Lecture 15 : Covering Projections</option>
      
      <option  value="111101002/objectives_L16.html">Lecture 16 : Lifting of paths and homotopies</option>
      
      <option  value="111101002/objectives_L17.html">Lecture 17 : Action of the fundamental group on the fibers</option>
      
      <option  value="111101002/objectives_L18.html">Lecture 18 : The lifting criterion</option>
      
      <option  value="111101002/objectives_L19.html">Lecture 19 : Deck transformations</option>
      
      <option  value="111101002/objectives_L20.html">Lecture 20 : Orbit Spaces</option>
      
      <option  value="111101002/objectives_L21.html">Lecture 21 : Test - III</option>
      
      <option  value="111101002/objectives_L22.html">Lecture 22 : Fundamental groups of certain orthogonal groups</option>
      
      <option  value="111101002/objectives_L23&24.html">Lecture 23 & 24 : Coproducts and push-outs</option>
      
      <option  value="111101002/objectives_L25.html">Lecture 25 : Adjunction Spaces</option>
      
      <option  value="111101002/objectives_L26.html">Lecture 26 : Seifert Van Kampen theorem</option>
      
      <option  value="111101002/objectives_L27.html">Lecture 27 : Test - IV</option>
      
      <option  value="111101002/objectives_L28.html">Lecture 28 : Introductory remarks on homology theory</option>
      
      <option  value="111101002/objectives_L29&30.html">Lecture 29 & 30 : The Singular chain complex and homology groups</option>
      
      <option  value="111101002/objectives_L31.html">Lecture 31 : The homology groups and their functoriality</option>
      
      <option  value="111101002/objectives_L32.html">Lecture 32 : The abelianization of the fundamental group</option>
      
      <option  value="111101002/objectives_L33.html">Lecture 33 : Homotopy invariance of homology</option>
      
      <option  value="111101002/objectives_L34.html">Lecture 34 : Small Simplicies</option>
      
      <option  value="111101002/objectives_L35.html">Lecture 35 : The Mayer Vietoris sequence and its applications</option>
      
      <option  value="111101002/objectives_L36.html">Lecture 36 : Maps of Spheres</option>
      
      <option  value="111101002/objectives_L37.html">Lecture 37 : Test - V</option>
      
      <option  value="111101002/objectives_L38.html">Lecture 38 : Relative homology</option>
      
      <option  value="111101002/objectives_L39.html">Lecture 39 : Excisim Theorem</option>
      
      <option  value="111101002/objectives_L40.html">Lecture 40 : Inductive limits</option>
      
      <option  value="111101002/objectives_L41.html">Lecture 41 : The Jordan-Brouwer separation theorem</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111101003</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Elementary Numerical Analysis</strong></td>
	<td><strong>Prof. Rekha P. Kulkarni</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111101003/mod01lec01.mp4">L1- Introduction</option>
      
      <option  value="111101003/mod01lec02.mp4">L2-Polynomial Approximation</option>
      
      <option  value="111101003/mod01lec03.mp4">L3-Interpolating Polynomials</option>
      
      <option  value="111101003/mod01lec04.mp4">L4-Properties of Divided Difference</option>
      
      <option  value="111101003/mod01lec05.mp4">L5-Error in the Interpolating polynomial</option>
      
      <option  value="111101003/mod01lec06.mp4">L6-Cubic Hermite Interpolation</option>
      
      <option  value="111101003/mod01lec07.mp4">L7-Piecewise Polynomial Approximation</option>
      
      <option  value="111101003/mod01lec08.mp4">L8-Cubic Spline Interpolation</option>
      
      <option  value="111101003/mod01lec09.mp4">L9-Tutorial 1</option>
      
      <option  value="111101003/mod01lec10.mp4">L10-Numerical Integration: Basic Rules</option>
      
      <option  value="111101003/mod01lec11.mp4">L11-Composite Numerical Integration</option>
      
      <option  value="111101003/mod01lec12.mp4">L12-Gauss 2-point Rule: Construction</option>
      
      <option  value="111101003/mod01lec13.mp4">L13-Gauss 2-point Rule: Error</option>
      
      <option  value="111101003/mod01lec14.mp4">L14-Convergence of Gaussian Integration</option>
      
      <option  value="111101003/mod01lec15.mp4">L15-Tutorial 2</option>
      
      <option  value="111101003/mod01lec16.mp4">L16-Numerical Differentiation</option>
      
      <option  value="111101003/mod01lec17.mp4">L17-Gauss Elimination</option>
      
      <option  value="111101003/mod01lec18.mp4">L18-L U  decomposition</option>
      
      <option  value="111101003/mod01lec19.mp4">L19-Cholesky decomposition</option>
      
      <option  value="111101003/mod01lec20.mp4">L20-Gauss Elimination with partial pivoting</option>
      
      <option  value="111101003/mod01lec21.mp4">L21-Vector and Matrix Norms</option>
      
      <option  value="111101003/mod01lec22.mp4">L22-Perturbed Linear Systems</option>
      
      <option  value="111101003/mod01lec23.mp4">L23-Ill-conditioned Linear System</option>
      
      <option  value="111101003/mod01lec24.mp4">L24-Tutorial 3 </option>
      
      <option  value="111101003/mod01lec25.mp4">L25-Effect of Small Pivots</option>
      
      <option  value="111101003/mod01lec26.mp4">L26-Solution of Non-linear Equations</option>
      
      <option  value="111101003/mod01lec27.mp4">L27-Quadratic Convergence of Newton's Method</option>
      
      <option  value="111101003/mod01lec28.mp4">L28-Jacobi Method</option>
      
      <option  value="111101003/mod01lec29.mp4">L29-Gauss-Seidel Method</option>
      
      <option  value="111101003/mod01lec30.mp4">L30-Tutorial 4</option>
      
      <option  value="111101003/mod01lec31.mp4">L31-Initial Value Problem</option>
      
      <option  value="111101003/mod01lec32.mp4">L32-Multi-step Methods</option>
      
      <option  value="111101003/mod01lec33.mp4">L33-Predictor-Corrector Formulae</option>
      
      <option  value="111101003/mod01lec34.mp4">L34-Boundary Value Problems</option>
      
      <option  value="111101003/mod01lec35.mp4">L35-Eigenvalues and Eigenvectors</option>
      
      <option  value="111101003/mod01lec36.mp4">L36-Spectral Theorem</option>
      
      <option  value="111101003/mod01lec37.mp4">L37-Power Method</option>
      
      <option  value="111101003/mod01lec38.mp4">L38-Inverse Power Method</option>
      
      <option  value="111101003/mod01lec39.mp4">L39-Q R Decomposition</option>
      
      <option  value="111101003/mod01lec40.mp4">L40-Q R Method</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111101004</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Introduction to Probability Theory</strong></td>
	<td><strong>Dr. K. Suresh Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111101004/modules/lec1/1.1.html">Chapter 1 :  Introduction</option>
      
      <option  value="111101004/modules/lec2/2.1.html">Chapter 2 :  Random Variables</option>
      
      <option  value="111101004/modules/lec3/3.1.html">Chapter 3 :  Conditional Probability and Independence</option>
      
      <option  value="111101004/modules/lec4/4.1.html">Chapter 4 :  Distributions</option>
      
      <option  value="111101004/modules/lec5/5.1.html">Chapter 5 :  Random Vectors , Joined Distributions</option>
      
      <option  value="111101004/modules/lec6/6.1.html">Chapter 6 :  Expectation and Conditional Expectation</option>
      
      <option  value="111101004/modules/lec7/7.1.html">Chapter 7 :  Characteristic Functions</option>
      
      <option  value="111101004/modules/lec8/8.1.html">Chapter 8 :  Limit Theorems</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111101005</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Measure and Integration</strong></td>
	<td><strong>Prof. Inder K Rana</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111101005/mod01lec01.mp4">L1- Introduction ,Extended Real numbers</option>
      
      <option  value="111101005/mod01lec02.mp4">L2-Algebra and Sigma Algebra of a subset of a set</option>
      
      <option  value="111101005/mod01lec03.mp4">L3-Sigma Algebra generated by a class</option>
      
      <option  value="111101005/mod01lec04.mp4">L4-Monotone Class</option>
      
      <option  value="111101005/mod02lec05.mp4">L5-Set function</option>
      
      <option  value="111101005/mod02lec06.mp4">L6-The Length function and its properties</option>
      
      <option  value="111101005/mod02lec07.mp4">L7-Countably additive set functions on intervals</option>
      
      <option  value="111101005/mod02lec08.mp4">L8-Uniqueness Problem for Measure</option>
      
      <option  value="111101005/mod03lec09.mp4">L9-Extension of measure</option>
      
      <option  value="111101005/mod03lec10.mp4">L10-Outer measure and its properties</option>
      
      <option  value="111101005/mod03lec11.mp4">L11-Measurable sets</option>
      
      <option  value="111101005/mod04lec12.mp4">L12-Lebesgue measure and its properties</option>
      
      <option  value="111101005/mod04lec13.mp4">L13-Characterization of Lebesque measurable sets</option>
      
      <option  value="111101005/mod05lec14.mp4">L14-Measurable functions</option>
      
      <option  value="111101005/mod05lec15.mp4">L15-Properties of measurable functions</option>
      
      <option  value="111101005/mod05lec16.mp4">L16-Measurable functions on measure spaces</option>
      
      <option  value="111101005/mod06lec17.mp4">L17-Integral of non negative simple measurable functions</option>
      
      <option  value="111101005/mod06lec18.mp4">L18-Properties of non negative simple measurable functions</option>
      
      <option  value="111101005/mod06lec19.mp4">L19-Monotone convergence theorem & Fatou's Lemma</option>
      
      <option  value="111101005/mod06lec20.mp4">L20-Properties of Integral functions & Dominated Convergence Theorem</option>
      
      <option  value="111101005/mod06lec21.mp4">L21-Dominated Convergence Theorem and applications</option>
      
      <option  value="111101005/mod06lec22.mp4">L22-Lebesgue Integral and its properties</option>
      
      <option  value="111101005/mod06lec23.mp4">L23-Denseness of continuous function </option>
      
      <option  value="111101005/mod07lec24.mp4">L24-Product measures, an Introduction</option>
      
      <option  value="111101005/mod07lec25.mp4">L25-Construction of Product Measure</option>
      
      <option  value="111101005/mod07lec26.mp4">L26-Computation of Product Measure-I</option>
      
      <option  value="111101005/mod07lec27.mp4">L27-Computation of Product Measure-II</option>
      
      <option  value="111101005/mod07lec28.mp4">L28-Integration on Product spaces</option>
      
      <option  value="111101005/mod07lec29.mp4">L29-Fubini's Theorems</option>
      
      <option  value="111101005/mod08lec30.mp4">L30-Lebesgue Measure and integral on R2</option>
      
      <option  value="111101005/mod08lec31.mp4">L31-Properties of Lebesgue Measure and integral on Rn</option>
      
      <option  value="111101005/mod08lec32.mp4">L32-Lebesgue integral on R2</option>
      
      <option  value="111101005/mod09lec33.mp4">L33-Integrating complex-valued functions</option>
      
      <option  value="111101005/mod09lec34.mp4">L34-Lp - spaces</option>
      
      <option  value="111101005/mod09lec35.mp4">L35-L2(X,S,mue)</option>
      
      <option  value="111101005/mod10lec36.mp4">L36-Fundamental Theorem of calculas for Lebesgue Integral-I</option>
      
      <option  value="111101005/mod10lec37.mp4">L37-Fundamental Theorem of calculus for Lebesgue Integral-II</option>
      
      <option  value="111101005/mod10lec38.mp4">L38-Absolutely continuous measures</option>
      
      <option  value="111101005/mod10lec39.mp4">L39-Modes of convergence</option>
      
      <option  value="111101005/mod10lec40.mp4">L40-Convergence in Measure</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111102011</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Linear Algebra</strong></td>
	<td><strong>Dr. R. K. Sharma,Dr. Wagish Shukla</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111102011/mod1/mod71.pdf">Vectors Spaces</option>
      
      <option  value="111102011/mod1/mod72.pdf">Polynomials in one Variable</option>
      
      <option  value="111102011/mod2/mod31.pdf">Matrices and linear transformations</option>
      
      <option  value="111102011/mod2/mod22.pdf">Classical and Quantum Computation of dual basis1</option>
      
      <option  value="111102011/mod3/mod21.pdf">More onVector Spaces and Linear transformations</option>
      
      <option  value="111102011/mod4/mod_41.pdf">Eigenvalues and Eigenvectors</option>
      
      <option  value="111102011/mod4/mod_42.pdf">Diagonalization</option>
      
      <option  value="111102011/mod5/mod51.pdf">Sesqui or Bi-Linear Forms</option>
      
      <option  value="111102011/mod5/mod52.pdf">More on sesqui or bi-linear forms</option>
      
      <option  value="111102011/mod6/mod53.pdf">Inner Product Space</option>
      
      <option  value="111102011/mod6/mod54.pdf">Orthogonal and Orthonormal Basis</option>
      
      <option  value="111102011/mod7/mod71.pdf">Generalized Inverse</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111101080</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Mathematics in India - From Vedic Period to Modern Times</strong></td>
	<td><strong>Prof. M.D.Srinivas , Prof.M.S.Sriram, Prof.K.Ramasubramanian</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111101080/mod01lec01.mp4">Indian Mathematics: An Overview                                            </option>
<option value="111101080/mod01lec02.mp4">Vedas and Sulbasutras - Part 1                                             </option>
<option value="111101080/mod01lec03.mp4">Vedas and Sulbasutras - Part 2                                             </option>
<option value="111101080/mod01lec04.mp4">Panini's Astadhyayi                                                        </option>
<option value="111101080/mod01lec05.mp4">Pingala's Chandahsastra                                                    </option>
<option value="111101080/mod01lec06.mp4">Decimal place value system                                                 </option>
<option value="111101080/mod01lec07.mp4">Aryabhatiya of Aryabhata - Part 1                                          </option>
<option value="111101080/mod01lec08.mp4">Aryabhatiya of Aryabhata - Part 2                                          </option>
<option value="111101080/mod01lec09.mp4">Aryabhatiya of Aryabhata - Part 3                                          </option>
<option value="111101080/mod01lec10.mp4">Aryabhatiya of Aryabhata - Part 4 and Introduction to Jaina Mathematics    </option>
<option value="111101080/mod01lec11.mp4">Brahmasphutasiddhanta of Brahmagupta - Part 1                              </option>
<option value="111101080/mod01lec12.mp4">Brahmasphutasiddhanta of Brahmagupta - Part 2                              </option>
<option value="111101080/mod01lec13.mp4">Brahmasphutasiddhanta of Brahmagupta - Part 3                              </option>
<option value="111101080/mod01lec14.mp4"> Brahmasphutasiddhanta of Brahmagupta - Part 4 and The BakhshaliManuscript </option>
<option value="111101080/mod01lec15.mp4">Mahaviras Ganitasarasangraha                                               </option>
<option value="111101080/mod01lec16.mp4">Mahaviras Ganitasarasangraha 2                                             </option>
<option value="111101080/mod01lec17.mp4">Mahaviras Ganitasarasangraha 3                                             </option>
<option value="111101080/mod01lec18.mp4">Development of Combinatorics 1                                             </option>
<option value="111101080/mod01lec19.mp4">Development of Combinatorics 2                                             </option>
<option value="111101080/mod01lec20.mp4">Lilavati of Bhaskaracarya 1                                                </option>
<option value="111101080/mod01lec21.mp4">Lilavati of Bhaskaracarya 2                                                </option>
<option value="111101080/mod01lec22.mp4">Lilavati of Bhaskaracarya 3                                                </option>
<option value="111101080/mod01lec23.mp4">Bijaganita of Bhaskaracarya 1                                              </option>
<option value="111101080/mod01lec24.mp4">Bijaganita of Bhaskaracarya 2                                              </option>
<option value="111101080/mod01lec25.mp4">Ganitakaumudi of Narayana Pandita 1                                        </option>
<option value="111101080/mod01lec26.mp4">Ganitakaumudi of Narayana Pandita 2                                        </option>
<option value="111101080/mod01lec27.mp4">Ganitakaumudi of Narayana Pandita 3                                        </option>
<option value="111101080/mod01lec28.mp4">Magic Squares - Part 1                                                     </option>
<option value="111101080/mod01lec29.mp4">Magic Squares - Part 2                                                     </option>
<option value="111101080/mod01lec30.mp4">Development of Calculus in India 1                                         </option>
<option value="111101080/mod01lec31.mp4">Development of Calculus in India 2                                         </option>
<option value="111101080/mod01lec32.mp4">Jyanayanam: Computation of Rsines                                          </option>
<option value="111101080/mod01lec33.mp4">Trigonometry and Spherical Trigonometry 1                                  </option>
<option value="111101080/mod01lec34.mp4">Trigonometry and Spherical Trigonometry 2                                  </option>
<option value="111101080/mod01lec35.mp4">Trigonometry and Spherical Trigonometry 3                                  </option>
<option value="111101080/mod01lec36.mp4">Proofs in Indian Mathematics 1                                             </option>
<option value="111101080/mod01lec37.mp4">Proofs in Indian Mathematics - Part 2                                      </option>
<option value="111101080/mod01lec38.mp4">Proofs in Indian Mathematics 3                                             </option>
<option value="111101080/mod01lec39.mp4">Mathematics in Modern India 1                                              </option>
<option value="111101080/mod01lec40.mp4">Mathematics in Modern India 2                                              </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111102012</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Linear Programming Problems</strong></td>
	<td><strong>Dr. Aparna Mehra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111102012/Module 1/lect1.pdf">Linear programming modeling, Optimal solutions and grap</option>
      
      <option  value="111102012/Module 1/lpp(mod1-lec2).pdf">Notion of convex set, convex function, their prope</option>
      
      <option  value="111102012/Module 1/lpp(mod1-lec3).pdf">Preliminary definitions (like convex combination,</option>
      
      <option  value="111102012/Module 1/lpp(mod1-lec4).pdf">Optimal hyper-plane and existence of optimal solut</option>
      
      <option  value="111102012/Module2/lec1.pdf">Basic feasible solutions: algebraic interpretation</option>
      
      <option  value="111102012/Module2/lec2.pdf">Relationship between extreme points and correspond</option>
      
      <option  value="111102012/Module2/lec3.pdf">Adjacent extreme points and corresponding BFS alo</option>
      
      <option  value="111102012/Module2/lec4.pdf">Fundamental theorem of LPP and its illustration th</option>
      
      <option  value="111102012/Module3/lec1.pdf">LPP in canonical form to get the initial BFS & meth</option>
      
      <option  value="111102012/Module3/lec2.pdf">Case of unbounded LPP, Simplex algorithm and illustrati</option>
      
      <option  value="111102012/Module3/lec3.pdf">Artificial variables and its interpretation in co</option>
      
      <option  value="111102012/Module4/lec1.pdf">Two phase method and illustration</option>
      
      <option  value="111102012/Module4/lec2.pdf">Degeneracy and its consequences including cases of cycl</option>
      
      <option  value="111102012/Module5/lec1.pdf">Introduction to duality & formulation of dual LPP for d</option>
      
      <option  value="111102012/Module5/lec2.pdf">Duality theorems and their interpretations</option>
      
      <option  value="111102012/Module5/lec3.pdf">Complementary slackness theorem, Farkas Lemma, Ex</option>
      
      <option  value="111102012/Module5/lec4.pdf">Economic interpretation & applications of duality</option>
      
      <option  value="111102012/Module5/lec5.pdf">Dual simplex method and its illustration</option>
      
      <option  value="111102012/Module6/lec1.pdf">Post optimality analysis: the cases of change in re</option>
      
      <option  value="111102012/Module6/lec2.pdf">Sensitivity analysis for addition and deletion of</option>
      
      <option  value="111102012/Module6/lec3.pdf">Lecture 3</option>
      
      <option  value="111102012/underconstruction.html">Karmarkar's interior point method</option>
      
      <option  value="111102012/underconstruction.html">How to model the given LPP in Karmarkar's framewo</option>
      
      <option  value="111102012/underconstruction.html">Complexity issue of Karmarkar's method</option>
      
      <option  value="111102012/Module8/lect 1.pdf">Integer programming: modeling & a look at its feasi</option>
      
      <option  value="111102012/Module8/lec2.pdf">Gomory cut algorithm and derivation of cut equatio</option>
      
      <option  value="111102012/Module8/lec3.pdf">Examples</option>
      
      <option  value="111102012/Module8/lec4.pdf">Branch and Bound algorithm</option>
      
      <option  value="111102012/module9/lect1.pdf">Special LPPs: Transportation programming problem, m</option>
      
      <option  value="111102012/module9/lect2.pdf">Initial BFS and optimal solution of balanced TP pr</option>
      
      <option  value="111102012/module9/lect3.pdf">Other forms of TP and requisite modifications</option>
      
      <option  value="111102012/module9/lect4.pdf">Assignment problems and permutation matrix</option>
      
      <option  value="111102012/module9/lect5.pdf">Hungarian Method</option>
      
      <option  value="111102012/module9/lect6.pdf">Duality in Assignment Problems</option>
      
      <option  value="111102012/module 10/lect 1.pdf">Network Problems and LPP Formulation</option>
      
      <option  value="111102012/module 10/lect 2.pdf">Network Simplex Method:</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111102014</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Stochastic Processes</strong></td>
	<td><strong>Dr. S. Dharmaraja</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111102014/mod01lec01.mp4">Introduction to Stochastic Processes</option>
      
      <option  value="111102014/mod01lec02.mp4">Introduction to Stochastic Processes (Contd.)</option>
      
      <option  value="111102014/mod01lec03.mp4">Problems in Random Variables and Distributions </option>
      
      <option  value="111102014/mod01lec04.mp4">Problems in Sequences of Random Variables </option>
      
      <option  value="111102014/mod02lec01.mp4">Definition, Classification and Examples </option>
      
      <option  value="111102014/mod02lec02.mp4">Simple Stochastic Processes </option>
      
      <option  value="111102014/mod03lec01.mp4">Stationary Processes  </option>
      
      <option  value="111102014/mod03lec02.mp4">Autoregressive Processes </option>
      
      <option  value="111102014/mod04lec01.mp4">Introduction, Definition and Transition Probability Matrix </option>
      
      <option  value="111102014/mod04lec02.mp4">Chapman-Kolmogrov Equations</option>
      
      <option  value="111102014/mod04lec03.mp4">Classification of States and Limiting Distributions</option>
      
      <option  value="111102014/mod04lec04.mp4">Limiting and Stationary Distributions</option>
      
      <option  value="111102014/mod04lec05.mp4">Limiting Distributions, Ergodicity and Stationary Distributions</option>
      
      <option  value="111102014/mod04lec06.mp4">Time Reversible Markov Chain, Application of Irreducible Markov Chain in Queueing Models</option>
      
      <option  value="111102014/mod04lec07.mp4">Reducible Markov Chains</option>
      
      <option  value="111102014/mod05lec01.mp4">Definition, Kolmogrov Differential Equations and Infinitesimal Generator Matrix</option>
      
      <option  value="111102014/mod05lec02.mp4">Limiting and Stationary Distributions, Birth Death Processes</option>
      
      <option  value="111102014/mod05lec03.mp4">Poisson Processes</option>
      
      <option  value="111102014/mod05lec04.mp4">M/M/1 Queueing Model</option>
      
      <option  value="111102014/mod05lec05.mp4">Simple Markovian Queueing Models</option>
      
      <option  value="111102014/mod05lec06.mp4">Queueing Networks</option>
      
      <option  value="111102014/mod05lec07.mp4">Communication Systems</option>
      
      <option  value="111102014/mod05lec08.mp4">Stochastic Petri Nets</option>
      
      <option  value="111102014/mod06lec01.mp4">Conditional Expectation and Filtration</option>
      
      <option  value="111102014/mod06lec02.mp4">Definition and Simple Examples</option>
      
      <option  value="111102014/mod07lec01.mp4">Definition and Properties</option>
      
      <option  value="111102014/mod07lec02.mp4">Processes Derived from Brownian Motion</option>
      
      <option  value="111102014/mod07lec03.mp4">Stochastic Differential Equations</option>
      
      <option  value="111102014/mod07lec04.mp4">Ito Integrals</option>
      
      <option  value="111102014/mod07lec05.mp4">Ito Formula and its Variants</option>
      
      <option  value="111102014/mod07lec06.mp4">Some Important SDE`s and Their Solutions</option>
      
      <option  value="111102014/mod08lec01.mp4">Renewal Function and Renewal Equation</option>
      
      <option  value="111102014/mod08lec02.mp4">Generalized Renewal Processes and Renewal Limit Theorems</option>
      
      <option  value="111102014/mod08lec03.mp4">Markov Renewal and Markov Regenerative Processes</option>
      
      <option  value="111102014/mod08lec04.mp4">Non Markovian Queues</option>
      
      <option  value="111102014/mod08lec05.mp4">Non Markovian Queues Cont,,</option>
      
      <option  value="111102014/mod08lec06.mp4">Application of Markov Regenerative Processes</option>
      
      <option  value="111102014/mod09lec01.mp4">Galton-Watson Process</option>
      
      <option  value="111102014/mod09lec02.mp4">Markovian Branching Process</option>
          </select>
  </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111103016</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Formal Languages and Automata Theory </strong></td>
	<td><strong>Dr. Diganta Goswami, Dr. K.V. Krishna</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111103016/mod01lec01.mp4">Introduction                     </option>
<option value="111103016/mod01lec02.mp4">Alphabet, Strings, Languages     </option>
<option value="111103016/mod01lec03.mp4">Finite Representation            </option>
<option value="111103016/mod02lec01.mp4">Grammars (CFG)                   </option>
<option value="111103016/mod02lec02.mp4">Derivation Trees                 </option>
<option value="111103016/mod02lec03.mp4">Regular Grammars                 </option>
<option value="111103016/mod03lec01.mp4">Finite Automata                  </option>
<option value="111103016/mod03lec02.mp4">Nondeterministic Finite Automata </option>
<option value="111103016/mod03lec03.mp4">NFA <=> DFA                      </option>
<option value="111103016/mod04lec01.mp4">Myhill-Nerode Theorem            </option>
<option value="111103016/mod04lec02.mp4">Minimization                     </option>
<option value="111103016/mod05lec01.mp4">RE => FA                         </option>
<option value="111103016/mod05lec02.mp4">FA => RE                         </option>
<option value="111103016/mod05lec03.mp4">FA <=> RG                        </option>
<option value="111103016/mod06lec01.mp4">Variants of FA                   </option>
<option value="111103016/mod07lec01.mp4">Closure Properties of RL         </option>
<option value="111103016/mod07lec02.mp4">Homomorphism                     </option>
<option value="111103016/mod07lec03.mp4">Pumping Lemma                    </option>
<option value="111103016/mod08lec01.mp4">Simplification of CFG            </option>
<option value="111103016/mod08lec02.mp4">Normal Forms of CFG              </option>
<option value="111103016/mod09lec01.mp4">Properties of CFLs               </option>
<option value="111103016/mod10lec01.mp4">Pushdown Automata                </option>
<option value="111103016/mod10lec02.mp4">PDA <=> CFG                      </option>
<option value="111103016/mod11lec01.mp4">Turing Machines                  </option>
<option value="111103016/mod11lec02.mp4">Turing Computable Functions      </option>
<option value="111103016/mod11lec03.mp4">Combining Turing Machines        </option>
<option value="111103016/mod11lec04.mp4">Multi Input                      </option>
<option value="111103016/mod11lec05.mp4">Turing Decidable Languages       </option>
<option value="111103016/mod11lec06.mp4">Varients of Turing Machines      </option>
<option value="111103016/mod12lec01.mp4">Structured Grammars              </option>
<option value="111103016/mod13lec01.mp4">Decidability                     </option>
<option value="111103016/mod13lec02.mp4">Undecidability1                  </option>
<option value="111103016/mod13lec03.mp4">Undecidability2                  </option>
<option value="111103016/mod13lec04.mp4">Undecidability3                  </option>
<option value="111103016/mod14lec01.mp4">Time Bounded Turing Machines     </option>
<option value="111103016/mod14lec02.mp4">P and NP                         </option>
<option value="111103016/mod14lec03.mp4">NP-Completeness                  </option>
<option value="111103016/mod14lec04.mp4">NP-Complete Problems1            </option>
<option value="111103016/mod14lec05.mp4">NP-Complete Problems2            </option>
<option value="111103016/mod14lec06.mp4">NP-Complete Problems3            </option>
<option value="111103016/mod15lec01.mp4">Chomsky Hierarchy                </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111103020</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Number Theory</strong></td>
	<td><strong>Dr. Anupam Saikia</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111103020/module1_lec1.pdf">Introduction</option>
      
      <option  value="111103020/module1_lec2.pdf">Decimal Expansion of a Positive Integer</option>
      
      <option  value="111103020/module1_lec3.pdf">Euclid's Algorithm</option>
      
      <option  value="111103020/module1_lec4.pdf">Coprime Integers</option>
      
      <option  value="111103020/module1_lec5.pdf">Prime Numbers</option>
      
      <option  value="111103020/module1_lec6.pdf">Prime Number Theorem</option>
      
      <option  value="111103020/module2_lec1.pdf">Congruence</option>
      
      <option  value="111103020/module2_lec2.pdf">Linear Congruence</option>
      
      <option  value="111103020/module2_lec3.pdf">Simultaneous Linear Congruences</option>
      
      <option  value="111103020/module2_lec4.pdf">System of Congruences with Non-coprime Moduli</option>
      
      <option  value="111103020/module2_lec5.pdf">Linear Congruences Modulo Prime Powers</option>
      
      <option  value="111103020/module2_lec6.pdf">Fermat's Little Theorem</option>
      
      <option  value="111103020/module2_lec7.pdf">Pseudo-primes</option>
      
      <option  value="111103020/module3_lec1.pdf">Greatest Integer Function</option>
      
      <option  value="111103020/module3_lec2.pdf">Euler's function</option>
      
      <option  value="111103020/module3_lec3.pdf">RSA Cryptosystem</option>
      
      <option  value="111103020/module3_lec4.pdf">Arithmetic Functions</option>
      
      <option  value="111103020/module3_lec5.pdf">Mobius Function</option>
      
      <option  value="111103020/module3_lec6.pdf">Dirichlet Product</option>
      
      <option  value="111103020/module4_lec1.pdf">Units Modulo an Integer</option>
      
      <option  value="111103020/module4_lec2.pdf">Existence of Primitive Roots for Primes</option>
      
      <option  value="111103020/module4_lec3.pdf">Primitive Roots for Powers of 2</option>
      
      <option  value="111103020/module5_lec1.pdf">Definition and Examples</option>
      
      <option  value="111103020/module5_lec2.pdf">Gauss Lemma</option>
      
      <option  value="111103020/module5_lec3.pdf">Quadratic Reciprocity</option>
      
      <option  value="111103020/module5_lec4.pdf">Quadratic Residues of Powers of an Odd Prime</option>
      
      <option  value="111103020/module5_lec5.pdf">The Jacobi Symbol</option>
      
      <option  value="111103020/module6_lec1.pdf">Definition and Examples .</option>
      
      <option  value="111103020/module6_lec2.pdf">Discriminant of a Quadratic Form</option>
      
      <option  value="111103020/module6_lec3.pdf">Proper Representation and Equivalent Forms</option>
      
      <option  value="111103020/module6_lec4.pdf">Uniqueness of Equivalent Reduced Form</option>
      
      <option  value="111103020/module6_lec5.pdf">Class Number</option>
      
      <option  value="111103020/module7_lec1.pdf">Fermat Primes</option>
      
      <option  value="111103020/module7_lec2.pdf">Primes Expressible as a Sum of Two Squares</option>
      
      <option  value="111103020/module7_lec3.pdf">Sum of Three Squares</option>
      
      <option  value="111103020/module8_lec1.pdf">Finite Continued Fractions</option>
      
      <option  value="111103020/module8_lec2.pdf">Euler's Rule</option>
      
      <option  value="111103020/module8_lec3.pdf">Infinite Continued Fractions</option>
      
      <option  value="111103020/module8_lec4.pdf">Periodic Continued Fractions</option>
      
      <option  value="111103020/module8_lec5.pdf">Conjugate of a Quadratic Irrational</option>
      
      <option  value="111103020/module8_lec6.pdf">Continued Fractions of Reduced Quadratic Irrationals</option>
      
      <option  value="111103020/module8_lec7.pdf">Best Rational Approximation to an Irrational</option>
      
      <option  value="111103020/module8_lec8.pdf">Pell's Equation</option>
      
      <option  value="111103020/module9_lec1.pdf">Riemann Zeta Function</option>
      
      <option  value="111103020/module9_lec2.pdf">Dirichlet Series</option>
      
      <option  value="111103020/module10_lec1.pdf">Lucas Test for Primality</option>
      
      <option  value="111103020/module10_lec2.pdf">Pollard's Method for Factorization</option>
      
      <option  value="111103020/module10_lec3.pdf">Fermat's Factorization</option>
      
      <option  value="111103020/module10_lec4.pdf">Fermat's Conjecture</option>
      
      <option  value="111103020/module1_exercises.pdf">Exercise-1</option>
      
      <option  value="111103020/module2_exercises.pdf">Exercise-2</option>
      
      <option  value="111103020/module3_exercises.pdf">Exercise-3</option>
      
      <option  value="111103020/module4_exercises.pdf">Exercise-4</option>
      
      <option  value="111103020/module5_exercises.pdf">Exercise-5</option>
      
      <option  value="111103020/module6_exercises.pdf">Exercise-6</option>
      
      <option  value="111103020/module7_exercises.pdf">Exercise-7</option>
      
      <option  value="111103020/module8_exercises.pdf">Exercise-8</option>
      
      <option  value="111103020/module9_exercises.pdf">Exercise -9</option>
      
      <option  value="111103020/bibliography.pdf">Bibliography</option>
      
      <option  value="111103020/index.pdf">Index</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111103021</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Partial Differential Equations</strong></td>
	<td><strong>Dr. Rajen Kumar Sinha</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111103021/1.pdf">A Review of Multivariable Calulus</option>
      
      <option  value="111103021/2.pdf">Essential Ordinary Differential Equations</option>
      
      <option  value="111103021/3.pdf">Surfaces and Integral Curves</option>
      
      <option  value="111103021/4.pdf">Solving Equations dx/P = dy/Q = dz/R</option>
      
      <option  value="111103021/5.pdf">First-Order Partial Differential Equations</option>
      
      <option  value="111103021/6.pdf">Linear First-Order PDEs</option>
      
      <option  value="111103021/7.pdf">Quasilinear First-Order PDEs</option>
      
      <option  value="111103021/8.pdf">Nonlinear First-Order PDEs</option>
      
      <option  value="111103021/9.pdf">Compatible Systems and Charpit�s Method</option>
      
      <option  value="111103021/10.pdf">Some Special Types of First-Order PDEs</option>
      
      <option  value="111103021/11.pdf">Jacobi Method for Nonlinear First-Order PDEs</option>
      
      <option  value="111103021/12.pdf">Classification of Second-Order PDEs</option>
      
      <option  value="111103021/13.pdf">Canonical Forms or Normal Forms</option>
      
      <option  value="111103021/14.pdf">Superposition Principle and Wellposedness</option>
      
      <option  value="111103021/15.pdf">Introduction to Fourier Series</option>
      
      <option  value="111103021/16.pdf">Convergence of Fourier Series</option>
      
      <option  value="111103021/17.pdf">Fourier Cosine and Sine Series</option>
      
      <option  value="111103021/18.pdf">Modeling the Heat Equation</option>
      
      <option  value="111103021/19.pdf">The Maximum and Minimum Principle</option>
      
      <option  value="111103021/20.pdf">Method of Separation of Variables</option>
      
      <option  value="111103021/21.pdf">Time-Independent Homogeneous BC</option>
      
      <option  value="111103021/22.pdf">Time-Dependent BC</option>
      
      <option  value="111103021/23.pdf">Mathematical Formulation and Uniqueness Result</option>
      
      <option  value="111103021/24.pdf">The Infinite String Problem</option>
      
      <option  value="111103021/25.pdf">The Semi-Infinite String Problem</option>
      
      <option  value="111103021/26.pdf">The Finite Vibrating String Problem</option>
      
      <option  value="111103021/27.pdf">The Inhomogeneous Wave Equation</option>
      
      <option  value="111103021/28.pdf">Basic Concepts and The Maximum/Minimum Principle</option>
      
      <option  value="111103021/29.pdf">Green�s Identity and Fundamental Solutions</option>
      
      <option  value="111103021/30.pdf">The Dirichlet BVP for a Rectangle</option>
      
      <option  value="111103021/31.pdf">The Mixed BVP for a Rectangle</option>
      
      <option  value="111103021/32.pdf">The Dirichlet Problems for Annuli</option>
      
      <option  value="111103021/33.pdf">The Dirichlet Problem for the Disk</option>
      
      <option  value="111103021/34.pdf">Fourier Transform</option>
      
      <option  value="111103021/35.pdf">Fourier Sine and Cosine Transformations</option>
      
      <option  value="111103021/36.pdf">Heat Flow Problems</option>
      
      <option  value="111103021/37.pdf">Vibration of an Infinite String</option>
      
      <option  value="111103021/38.pdf">Laplace�s Equation in a Half-Plane</option>
      
      <option  value="111103021/39.pdf">The Laplace Equation</option>
      
      <option  value="111103021/40.pdf">The Wave Equation</option>
      
      <option  value="111103021/41.pdf">The Heat Equation</option>
      
      <option  value="111103021/bibliography.pdf">Bibliography</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111103070</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Complex Analysis</strong></td>
	<td><strong>Prof. P. A. S. Sree Krishna</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option value="111103070/Introduction.mp4">Introduction</option>
<option value="111103070/mod01lec01.mp4">Introduction to Complex Numbers</option>
<option value="111103070/mod01lec02.mp4">de Moivre's Formula and Stereographic Projection</option>
<option value="111103070/mod01lec03.mp4">Topology of the Complex Plane Part-I</option>
<option value="111103070/mod01lec04.mp4">Topology of the Complex Plane Part-II</option>
<option value="111103070/mod01lec05.mp4">Topology of the Complex Plane Part-III</option>
<option value="111103070/mod02lec01.mp4">Introduction to Complex Functions</option>
<option value="111103070/mod02lec02.mp4">Limits and Continuity</option>
<option value="111103070/mod02lec03.mp4">Differentiation</option>
<option value="111103070/mod02lec04.mp4">Cauchy-Riemann Equations and Differentiability</option>
<option value="111103070/mod02lec05.mp4">Analytic functions; the exponential function</option>
<option value="111103070/mod02lec06.mp4">Sine, Cosine and Harmonic functions</option>
<option value="111103070/mod02lec07.mp4">Branches of Multifunctions; Hyperbolic Functions</option>
<option value="111103070/mod02lec08.mp4">Problem Solving Session I</option>
<option value="111103070/mod03lec01.mp4">Integration and Contours</option>
<option value="111103070/mod03lec02.mp4">Contour Integration</option>
<option value="111103070/mod03lec03.mp4">Introduction to Cauchy's Theorem</option>
<option value="111103070/mod03lec04.mp4">Cauchy's Theorem for a Rectangle</option>
<option value="111103070/mod03lec05.mp4">Cauchy's theorem Part - II</option>
<option value="111103070/mod03lec06.mp4">Cauchy's Theorem Part - III</option>
<option value="111103070/mod03lec07.mp4">Cauchy's Integral Formula and its Consequences</option>
<option value="111103070/mod03lec08.mp4">The First and Second Derivatives of Analytic Functions</option>
<option value="111103070/mod03lec09.mp4">Morera's Theorem and Higher Order Derivatives of Analytic Functions</option>
<option value="111103070/mod03lec10.mp4">Problem Solving Session II</option>
<option value="111103070/mod04lec01.mp4">Introduction to Complex Power Series</option>
<option value="111103070/mod04lec02.mp4">Analyticity of Power Series</option>
<option value="111103070/mod04lec03.mp4">Taylor's Theorem</option>
<option value="111103070/mod04lec04.mp4">Zeroes of Analytic Functions</option>
<option value="111103070/mod04lec05.mp4">Counting the Zeroes of Analytic Functions</option>
<option value="111103070/mod04lec06.mp4">Open mapping theorem – Part I</option>
<option value="111103070/mod04lec07.mp4">Open mapping theorem – Part II</option>
<option value="111103070/mod05lec01.mp4">Properties of Mobius Transformations Part I</option>
<option value="111103070/mod05lec02.mp4">Properties of Mobius Transformations Part II</option>
<option value="111103070/mod05lec03.mp4">Problem Solving Session III</option>
<option value="111103070/mod06lec01.mp4">Removable Singularities</option>
<option value="111103070/mod06lec02.mp4">Poles Classification of Isolated Singularities</option>
<option value="111103070/mod06lec03.mp4">Essential Singularity & Introduction to Laurent Series</option>
<option value="111103070/mod06lec04.mp4">Laurent's Theorem</option>
<option value="111103070/mod06lec05.mp4">Residue Theorem and Applications</option>
<option value="111103070/mod06lec06.mp4">Problem Solving Session IV</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111104024</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Applied Multivariate Analysis</strong></td>
	<td><strong>Dr. Amit Mitra,Dr. Sharmishtha Mitra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104024/Prologue.mp4"> Prologue</option>
      
      <option  value="111104024/mod01lec01.mp4">Lecture-01 Basic concepts on multivariate distribution.</option>
      
      <option  value="111104024/mod01lec02.mp4">Lecture - 02  Basic concepts on multivariate distribution. </option>
      
      <option  value="111104024/mod01lec03.mp4">Lecture - 03  Multivariate normal distribution. � I</option>
      
      <option  value="111104024/mod01lec04.mp4">Lecture - 04  Multivariate normal distribution. � II</option>
      
      <option  value="111104024/mod01lec05.mp4">Lecture - 05  Multivariate normal distribution. � III</option>
      
      <option  value="111104024/mod01lec06.mp4">Lecture - 06  Some problems on multivariate distributions. � I</option>
      
      <option  value="111104024/mod01lec07.mp4"> Lecture - 07  Some problems on multivariate distributions. � II	</option>
      
      <option  value="111104024/mod01lec08.mp4">Lecture - 08  Random sampling from multivariate normal distribution and Wishart distribution. � I</option>
      
      <option  value="111104024/mod01lec09.mp4">Lecture - 09  Random sampling from multivariate normal distribution and Wishart distribution. � II</option>
      
      <option  value="111104024/mod01lec10.mp4">Lecture - 10  Random sampling from multivariate normal distribution and Wishart distribution. � III</option>
      
      <option  value="111104024/mod01lec11.mp4">Lecture - 11  Wishart distribution and it�s properties. �I</option>
      
      <option  value="111104024/mod01lec12.mp4">Lecture - 12  Wishart distribution and it�s properties.- II</option>
      
      <option  value="111104024/mod01lec13.mp4">Lecture -13  Hotelling�s T2 distribution and it�s applications.</option>
      
      <option  value="111104024/mod01lec14.mp4">Lecture - 14  Hotelling�s T2 distribution and various confidence intervals and regions.</option>
      
      <option  value="111104024/mod01lec15.mp4">Lecture- 15  Hotelling�s T2 distribution and Profile analysis.</option>
      
      <option  value="111104024/mod01lec16.mp4">Lecture - 16  Profile analysis.-I</option>
      
      <option  value="111104024/mod01lec17.mp4">Lecture - 17  Profile analysis. �II</option>
      
      <option  value="111104024/mod01lec18.mp4">Lecture - 18  MANOVA.-I</option>
      
      <option  value="111104024/mod01lec19.mp4">Lecture - 19  MANOVA.- II</option>
      
      <option  value="111104024/mod01lec20.mp4">Lecture - 20  MANOVA .- III</option>
      
      <option  value="111104024/mod01lec21.mp4">Lecture -21  MANOVA & Multiple Correlation Coefficient</option>
      
      <option  value="111104024/mod01lec22.mp4">Lecture -22  Multiple Correlation Coefficient</option>
      
      <option  value="111104024/mod01lec23.mp4">Lecture  23  Principal Component Analysis</option>
      
      <option  value="111104024/mod01lec24.mp4">Lecture -24  Principal Component Analysis</option>
      
      <option  value="111104024/mod01lec25.mp4">Lecture -25  Principal Component Analysis</option>
      
      <option  value="111104024/mod01lec26.mp4">Lecture -26  Cluster Analysis</option>
      
      <option  value="111104024/mod01lec27.mp4">Lecture -27  Cluster Analysis</option>
      
      <option  value="111104024/mod01lec28.mp4">Lecture -28  Cluster Analysis</option>
      
      <option  value="111104024/mod01lec29.mp4">Lecture -29  Cluster Analysis</option>
      
      <option  value="111104024/mod01lec30.mp4">Lecture -30  Discriminant Analysis and Classification</option>
      
      <option  value="111104024/mod01lec31.mp4">Lecture -31  Discriminant Analysis and Classification</option>
      
      <option  value="111104024/mod01lec32.mp4">Lecture -32  Discriminant Analysis and Classification</option>
      
      <option  value="111104024/mod01lec33.mp4">Lecture -33  Discriminant Analysis and Classification</option>
      
      <option  value="111104024/mod01lec34.mp4">Lecture -34  Discriminant Analysis and Classification</option>
      
      <option  value="111104024/mod01lec35.mp4">Lecture -35  Discriminant Analysis and Classification</option>
      
      <option  value="111104024/mod01lec36.mp4">Lecture -36  Discriminant Analysis and Classification</option>
      
      <option  value="111104024/mod01lec37.mp4">Lecture -37  Factor_Analysis</option>
      
      <option  value="111104024/mod01lec38.mp4">Lecture  38  Factor_Analysis</option>
      
      <option  value="111104024/mod01lec39.mp4">Lecture -39  Factor_Analysis</option>
      
      <option  value="111104024/mod01lec40.mp4">Lecture -40  Cannonical Correlation Analysis</option>
      
      <option  value="111104024/mod01lec41.mp4">Lecture -41  Cannonical Correlation Analysis</option>
      
      <option  value="111104024/mod01lec42.mp4">Lecture -42  Cannonical Correlation Analysis</option>
      
      <option  value="111104024/mod01lec43.mp4">Lecture -43  Cannonical Correlation Analysis</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111104025</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Calculus of Variations and Integral Equations</strong></td>
	<td><strong>Prof. D. Bahuguna,Dr. Malay Banerjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104025/mod01lec01.mp4">Lecture-01-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec02.mp4">Lecture-02-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec03.mp4">Lecture-03-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec04.mp4">Lecture-04-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec05.mp4">Lecture-05-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec06.mp4">Lecture-06-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec07.mp4">Lecture-07-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec08.mp4">Lecture-08-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec09.mp4">Lecture-09-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec10.mp4">Lecture-10-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec11.mp4">Lecture-11-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec12.mp4">Lecture-12-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec13.mp4">Lecture-13-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec14.mp4">Lecture-14-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec15.mp4">Lecture-15-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec16.mp4">Lecture-16-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec17.mp4">Lecture-17-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec18.mp4">Lecture-18-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec19.mp4">Lecture-19-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec20.mp4">Lecture-20-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec21.mp4">Lecture-21-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec22.mp4">Lecture-22-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec23.mp4">Lecture-23-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec24.mp4">Lecture-24-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec25.mp4">Lecture-25-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec26.mp4">Lecture-26-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec27.mp4">Lecture-27-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec28.mp4">Lecture-28-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec29.mp4">Lecture-29-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec30.mp4">Lecture-30-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec31.mp4">Lecture-31-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec32.mp4">Lecture-32-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec33.mp4">Lecture-33-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec34.mp4">Lecture-34-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec35.mp4">Lecture-35-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec36.mp4">Lecture-36-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec37.mp4">Lecture-37-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec38.mp4">Lecture-38-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec39.mp4">Lecture-39-Calculus of Variations and Integral Equations</option>
      
      <option  value="111104025/mod01lec40.mp4">Lecture-40-Calculus of Variations and Integral Equations</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104026</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Discrete Mathematics</strong></td>
	<td><strong>Prof. A.K. Lal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104026/contents.pdf">Contents</option>
      
      <option  value="111104026/lecture1.pdf">Basic Set Theory</option>
      
      <option  value="111104026/lecture2.pdf">Well Ordering Principle and the Principle of Mathematical Induction</option>
      
      <option  value="111104026/lecture3.pdf">Strong Form of the Principle of Mathematical Induction</option>
      
      <option  value="111104026/lecture4.pdf">Division Algorithm and the Fundamental Theorem of Arithmetic</option>
      
      <option  value="111104026/lecture5.pdf">Relations, Partitions and Equivalence Relation</option>
      
      <option  value="111104026/lecture6.pdf">Functions</option>
      
      <option  value="111104026/lecture7.pdf">Distinguishable Balls</option>
      
      <option  value="111104026/lecture8.pdf">Binomial Theorem</option>
      
      <option  value="111104026/lecture9.pdf">Onto Functions and the Stirling Numbers of Second Kind</option>
      
      <option  value="111104026/lecture10.pdf">Indistinguishable Balls and Distinguishable Boxes</option>
      
      <option  value="111104026/lecture11.pdf">Indistinguishable Balls in Indistinguishable Boxes</option>
      
      <option  value="111104026/lecture12.pdf">Lattice Paths and Catalan Numbers</option>
      
      <option  value="111104026/lecture13.pdf">Catalan Numbers Continued</option>
      
      <option  value="111104026/lecture14.pdf">Generalizations</option>
      
      <option  value="111104026/lecture15.pdf">Pigeonhole Principle</option>
      
      <option  value="111104026/lecture16.pdf">Pigeonhole Principle Continued</option>
      
      <option  value="111104026/lecture17.pdf">Principle of Inclusion and Exclusion</option>
      
      <option  value="111104026/lecture18.pdf">Formal Power Series</option>
      
      <option  value="111104026/lecture19.pdf">Formal Power Series Continued</option>
      
      <option  value="111104026/lecture20.pdf">Application to Recurrence Relation</option>
      
      <option  value="111104026/lecture21.pdf">Application to Recurrence Relation Continued</option>
      
      <option  value="111104026/lecture22.pdf">   Application to Recurrence Relation Continued</option>
      
      <option  value="111104026/lecture23.pdf">Applications to Generating Functions Continued</option>
      
      <option  value="111104026/lecture24.pdf">Groups</option>
      
      <option  value="111104026/lecture25.pdf">Example of Groups</option>
      
      <option  value="111104026/lecture26.pdf">SubGroups</option>
      
      <option  value="111104026/lecture27.pdf">Lagrange�s Theorem</option>
      
      <option  value="111104026/lecture28.pdf">Applications of Lagrange�s Theorem</option>
      
      <option  value="111104026/lecture29.pdf">Group Action</option>
      
      <option  value="111104026/lecture30.pdf">Group Action Continued</option>
      
      <option  value="111104026/lecture31.pdf">The Cycle Index Polynomial</option>
      
      <option  value="111104026/lecture32.pdf">Polya Inventory Theorem</option>
      
      <option  value="111104026/lecture33.pdf">Basic Graph Theory</option>
      
      <option  value="111104026/lecture34.pdf">Graph Operations</option>
      
      <option  value="111104026/lecture35.pdf">Matrices related with Graphs</option>
      
      <option  value="111104026/lecture36.pdf">Matrix Tree Theorem</option>
      
      <option  value="111104026/lecture37.pdf">Eulerian graphs</option>
      
      <option  value="111104026/lecture38.pdf">Planar Graphs</option>
      
      <option  value="111104026/lecture39.pdf">Euler�s Theorem for Planar Graphs</option>
      
      <option  value="111104026/lecture40.pdf">Stereographic Projection</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111104027</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Linear programming and Extensions</strong></td>
	<td><strong>Prof. Prabha Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104027/mod01lec01.mp4">Lecture_01_Introduction to Linear Programming Problems.</option>
      
      <option  value="111104027/mod01lec02.mp4">Lecture_02_ Vector space, Linear independence and dependence, basis.</option>
      
      <option  value="111104027/mod01lec03.mp4">Lec_03_Moving from one basic feasible solution to another, optimality criteria.</option>
      
      <option  value="111104027/mod01lec04.mp4">Lecture_04_Basic feasible solutions, existence & derivation.</option>
      
      <option  value="111104027/mod01lec05.mp4">Lecture_5_Convex sets, dimension of a polyhedron, Faces, Example of a polytope.</option>
      
      <option  value="111104027/mod01lec06.mp4">Lecture_6_Direction of a polyhedron, correspondence between bfs and extreme points.</option>
      
      <option  value="111104027/mod01lec07.mp4">Lecture_7_Representation theorem, LPP solution is a bfs,  Assignment 1.</option>
      
      <option  value="111104027/mod01lec08.mp4">Lecture_08_Development of the Simplex Algorithm, Unboundedness, Simplex Tableau.</option>
      
      <option  value="111104027/mod01lec09.mp4">Lecture_9_ Simplex Tableau & algorithm ,Cycling, Bland�s anti-cycling rules, Phase I & Phase II.</option>
      
      <option  value="111104027/mod01lec10.mp4">Lecture_10_ Big-M method,Graphical solutions, adjacent extreme pts and adjacent bfs.</option>
      
      <option  value="111104027/mod01lec11.mp4">Lecture_11_Assignment 2, progress of Simplex algorithm on a polytope, bounded variable LPP.</option>
      
      <option  value="111104027/mod01lec12.mp4">Lecture_12_LPP Bounded variable, Revised Simplex algorithm, Duality theory, weak duality theorem.</option>
      
      <option  value="111104027/mod01lec13.mp4">Lecture_13_Weak duality theorem, economic interpretation of dual variables, Fundamental theorem of duality.</option>
      
      <option  value="111104027/mod01lec14.mp4">Lecture_14_Examples of writing the dual, complementary slackness theorem.</option>
      
      <option  value="111104027/mod01lec15.mp4">Lecture_15_Complementary slackness conditions, Dual Simplex algorithm, Assignment 3.</option>
      
      <option  value="111104027/mod01lec16.mp4">Lecture_16_Primal-dual algorithm.</option>
      
      <option  value="111104027/mod01lec17.mp4">Lecture_17_Problem in lecture 16, starting dual feasible solution, Shortest Path Problem.</option>
      
      <option  value="111104027/mod01lec18.mp4">Lecture_18_Shortest Path Problem, Primal-dual method, example.</option>
      
      <option  value="111104027/mod01lec19.mp4">Lecture_19_Shortest Path Problem-complexity, interpretation of dual variables, post-optimality analysis-changes in the cost vector.</option>
      
      <option  value="111104027/mod01lec20.mp4">Lecture_20_ Assignment 4, postoptimality  analysis, changes in b, adding a new constraint, changes in {aij}  , Parametric analysis.</option>
      
      <option  value="111104027/mod01lec21.mp4">Lecture_21_Parametric LPP-Right hand side vector.</option>
      
      <option  value="111104027/mod01lec22.mp4">Lecture_22_Parametric cost vector LPP.</option>
      
      <option  value="111104027/mod01lec23.mp4">Lecture_23_Parametric cost vector LPP,  Introduction to Min-cost flow problem.</option>
      
      <option  value="111104027/mod01lec24.mp4">Lecture_24_Mini-cost flow problem-Transportation problem.</option>
      
      <option  value="111104027/mod01lec25.mp4">Lecture_25_Transportation problem  degeneracy, cycling</option>
      
      <option  value="111104027/mod01lec26.mp4">Lecture_26_ Sensitivity  analysis.</option>
      
      <option  value="111104027/mod01lec27.mp4">Lecture_27_ Sensitivity  analysis.</option>
      
      <option  value="111104027/mod01lec28.mp4">Lecture_28_Bounded variable transportation problem, min-cost flow problem.</option>
      
      <option  value="111104027/mod01lec29.mp4">Lecture_29_Min-cost flow problem</option>
      
      <option  value="111104027/mod01lec30.mp4">Lecture_30_Starting feasible solution, Lexicographic method for preventing cycling ,strongly feasible solution</option>
      
      <option  value="111104027/mod01lec31.mp4">Lecture_31_Assignment 6, Shortest path problem, Shortest Path between any two nodes,Detection of negative cycles.</option>
      
      <option  value="111104027/mod01lec32.mp4">Lecture_32_ Min-cost-flow Sensitivity analysis Shortest path problem sensitivity analysis.</option>
      
      <option  value="111104027/mod01lec33.mp4">Lecture_33_Min-cost flow changes in arc capacities , Max-flow problem, assignment 7</option>
      
      <option  value="111104027/mod01lec34.mp4">Lecture_34_Problem 3 (assignment 7), Min-cut Max-flow theorem, Labelling algorithm.</option>
      
      <option  value="111104027/mod01lec35.mp4">Lecture_35_Max-flow - Critical capacity of an arc, starting solution for min-cost flow problem.</option>
      
      <option  value="111104027/mod01lec36.mp4">Lecture_36_Improved Max-flow algorithm.</option>
      
      <option  value="111104027/mod01lec37.mp4">Lecture_37_Critical Path Method (CPM).</option>
      
      <option  value="111104027/mod01lec38.mp4">Lecture_38_Programme Evaluation and Review Technique (PERT).</option>
      
      <option  value="111104027/mod01lec39.mp4">Lecture_39_ Simplex Algorithm is not polynomial time- An example.</option>
      
      <option  value="111104027/mod01lec40.mp4">Lecture_40_Interior Point Methods .</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104030</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Numerical Solution of ODEs</strong></td>
	<td><strong>Prof. M.K. Kadalbajoo</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104030/lecture1/main.html">Preliminaries</option>
      
      <option  value="111104030/lecture2/2_1.htm">Existence, Uniqueness, and Wellposedness</option>
      
      <option  value="111104030/lecture3/3_1.htm">Stability and Asymptotic Stability</option>
      
      <option  value="111104030/lecture4/4_1.htm">The Euler Method</option>
      
      <option  value="111104030/lecture5/5_1.htm">Convergence of Euler�s Method</option>
      
      <option  value="111104030/lecture6/6_1.htm">Improvement of the error bound</option>
      
      <option  value="111104030/lecture7/7_1.htm">Stability</option>
      
      <option  value="111104030/lecture8/8_1.htm">Higher Order Methods</option>
      
      <option  value="111104030/lecture9/9_1.htm">Runge-Kutta Methods</option>
      
      <option  value="111104030/lecture10/10_1.htm">Error bounds for Runge-Kutta methods</option>
      
      <option  value="111104030/lecture11/11_1.htm">Absolute Stability for Runge-Kutta Methods</option>
      
      <option  value="111104030/lecture12/12_1.htm">Systems of Equations</option>
      
      <option  value="111104030/lecture13/13_1.htm">Direct Methods For Higher Order Equations</option>
      
      <option  value="111104030/lecture14/14_1.htm">General Single Step Methods</option>
      
      <option  value="111104030/lecture15/15_1.htm">Convergence of General One-Step Methods</option>
      
      <option  value="111104030/lecture16/16_1.htm">Derivation of Implicit Runge-Kutta methods</option>
      
      <option  value="111104030/lecture17/17_1.htm">Derivation of Implicit Runge-Kutta Methods(Contd.)</option>
      
      <option  value="111104030/lecture18/18_1.htm">Multistep Methods</option>
      
      <option  value="111104030/lecture19/19_1.htm">Multistep Methods(Contd.)</option>
      
      <option  value="111104030/lecture20/20_1.htm">Multistep Methods(Contd..)</option>
      
      <option  value="111104030/lecture21/21_1.htm">The local error of the formulas based on integration</option>
      
      <option  value="111104030/lecture22/22_1.htm">Local Error of Nystrom & Milne-Simpson Methods</option>
      
      <option  value="111104030/lecture23/23_1.htm">Multistep Methods for Special Equations of the Second Order</option>
      
      <option  value="111104030/lecture24/24_1.htm">Special 2nd order equations(Contd.)</option>
      
      <option  value="111104030/lecture25/25_1.htm">Linear Multistep Methods</option>
      
      <option  value="111104030/lecture26/26_1.htm">Linear Multistep Methods(Contd)</option>
      
      <option  value="111104030/lecture27/27_1.htm">Consistency and Zero-Stability of Linear Multistep Methods</option>
      
      <option  value="111104030/lecture28/28_1.htm">Convergence of Linear Multistep Methods</option>
      
      <option  value="111104030/lecture29/29_1.htm">Necessary & Sufficient Conditions for Convergence</option>
      
      <option  value="111104030/lecture30/30_1.htm">Absolute Stability and Relative Stability</option>
      
      <option  value="111104030/lecture31/31_1.htm">General methods for finding intervals of absolute and relative stability</option>
      
      <option  value="111104030/lecture32/32_1.htm">Some more methods for Absolute & Relative Stability</option>
      
      <option  value="111104030/lecture33/33_1.htm">First order linear systems with constant coefficient</option>
      
      <option  value="111104030/lecture34/34_1.htm">Stiffness and Problem of Stiffness</option>
      
      <option  value="111104030/lecture35/35_1.htm">The problem of implicitness for  Stiff systems</option>
      
      <option  value="111104030/lecture36/36_1.htm">Linear multistep methods for Stiff systems</option>
      
      <option  value="111104030/lecture37/37_1.htm">Finite Difference Methods</option>
      
      <option  value="111104030/lecture38/38_1.htm">Analysis of Difference System</option>
      
      <option  value="111104030/lecture39/39_1.htm">Analytic Expression of the Error</option>
      
      <option  value="111104030/lecture40/40_1.htm">Nonlinear second order equations</option>
      
      <option  value="111104030/lecture41/41_1.htm">Special Boundary Value Problems</option>
      
      <option  value="111104030/lecture42/42_1.htm">Special Boundary Value Problems(Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104031</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Ordinary Differential Equations</strong></td>
	<td><strong>Prof. V. Raghavendra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104031/lectures.pdf">Preliminaries</option>
      
      <option  value="111104031/lectures.pdf#page=13">Picard's Successive Approximations</option>
      
      <option  value="111104031/lectures.pdf#page=16">Picard's Theorem</option>
      
      <option  value="111104031/lectures.pdf#page=22">Continuation and Dependence on Initial conditions</option>
      
      <option  value="111104031/lectures.pdf#page=26">Existence of Solutions in the Large</option>
      
      <option  value="111104031/lectures.pdf#page=30">Existence and Uniqueness of Solutions of Systems</option>
      
      <option  value="111104031/lectures.pdf#page=33">Cauchy-Peano theorem</option>
      
      <option  value="111104031/lectures.pdf#page=36">Introduction</option>
      
      <option  value="111104031/lectures.pdf#page=36">Linear Dependence and Wronskian</option>
      
      <option  value="111104031/lectures.pdf#page=41">Basic Theory for Linear Equations</option>
      
      <option  value="111104031/lectures.pdf#page=47">Method of Variation of Parameters</option>
      
      <option  value="111104031/lectures.pdf#page=52">Homogeneous Linear Equations with Constant Coefficients</option>
      
      <option  value="111104031/lectures.pdf#page=58">Introduction- module 3</option>
      
      <option  value="111104031/lectures.pdf#page=58">Systems of First Order Equations</option>
      
      <option  value="111104031/lectures.pdf#page=65">Fundamental Matrix</option>
      
      <option  value="111104031/lectures.pdf#page=69">Non-homogeneous linear Systems</option>
      
      <option  value="111104031/lectures.pdf#page=72">Linear Systems with Constant Coefficients</option>
      
      <option  value="111104031/lectures.pdf#page=79">Phase Portraits-Introduction</option>
      
      <option  value="111104031/lectures.pdf#page=83">Phase Portraits  (continued)</option>
      
      <option  value="111104031/lectures.pdf#page=90">Introduction - module 4</option>
      
      <option  value="111104031/lectures.pdf#page=94">Sturm's Comparison Theorem</option>
      
      <option  value="111104031/lectures.pdf#page=98">Elementary Linear Oscillations</option>
      
      <option  value="111104031/lectures.pdf#page=101">Boundary Value Problems</option>
      
      <option  value="111104031/lectures.pdf#page=105">Sturm-Liouville Problem</option>
      
      <option  value="111104031/lectures.pdf#page=111">Green's Functions</option>
      
      <option  value="111104031/lectures.pdf#page=116">Introduction -Module 5</option>
      
      <option  value="111104031/lectures.pdf#page=116">Linear Systems with Constant Coefficient (module5)</option>
      
      <option  value="111104031/lectures.pdf#page=121">Linear Systems with Variable Coefficients</option>
      
      <option  value="111104031/lectures.pdf#page=127">Second Order Linear Differential Equations</option>
      
      <option  value="111104031/lectures.pdf#page=134">Stability of Quasi-linear Systems</option>
      
      <option  value="111104031/lectures.pdf#page=141">Stability of Autonomous Systems</option>
      
      <option  value="111104031/lectures.pdf#page=147">Stability of Non-Autonomous Systems</option>
      
      <option  value="111104031/lectures.pdf#page=151">A Particular Lyapunov Function</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111104068</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Convex Optimization</strong></td>
	<td><strong>Dr. Joydeep Dutta </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104068/mod01lec01.mp4">Lecture-01 Convex Optimization</option>
      
      <option  value="111104068/mod01lec02.mp4">Lecture-02 Convex Optimization</option>
      
      <option  value="111104068/mod01lec03.mp4">Lecture-03 Convex Optimization</option>
      
      <option  value="111104068/mod01lec04.mp4">Lecture-04 Convex Optimization</option>
      
      <option  value="111104068/mod01lec05.mp4">Lecture-05 Convex Optimization</option>
      
      <option  value="111104068/mod01lec06.mp4">Lecture-06 Convex Optimization</option>
      
      <option  value="111104068/mod01lec07.mp4">Lecture-07 Convex Optimization</option>
      
      <option  value="111104068/mod01lec08.mp4">Lecture-08 Convex Optimization</option>
      
      <option  value="111104068/mod01lec09.mp4">Lecture-09 Convex Optimization</option>
      
      <option  value="111104068/mod01lec10.mp4">Lecture-10 Convex Optimization</option>
      
      <option  value="111104068/mod01lec11.mp4">Lecture-11 Convex Optimization</option>
      
      <option  value="111104068/mod01lec12.mp4">Lecture-12 Convex Optimization</option>
      
      <option  value="111104068/mod01lec13.mp4">Lecture-13 Convex Optimization</option>
      
      <option  value="111104068/mod01lec14.mp4">Lecture-14 Convex Optimization</option>
      
      <option  value="111104068/mod01lec15.mp4">Lecture-15 Convex Optimization</option>
      
      <option  value="111104068/mod01lec16.mp4">Lecture-16 Convex Optimization</option>
      
      <option  value="111104068/mod01lec17.mp4">Lecture-17 Convex Optimization</option>
      
      <option  value="111104068/mod01lec18.mp4">Lecture-18 Convex Optimization</option>
      
      <option  value="111104068/mod01lec19.mp4">Lecture-19 Convex Optimization</option>
      
      <option  value="111104068/mod01lec20.mp4">Lecture-20 Convex Optimization</option>
      
      <option  value="111104068/mod01lec21.mp4">Lecture-21 Convex Optimization</option>
      
      <option  value="111104068/mod01lec22.mp4">Lecture-22 Convex Optimization</option>
      
      <option  value="111104068/mod01lec23.mp4">Lecture-23 Convex Optimization</option>
      
      <option  value="111104068/mod01lec24.mp4">Lecture-24 Convex Optimization</option>
      
      <option  value="111104068/mod01lec25.mp4">Lecture-25 Convex Optimization</option>
      
      <option  value="111104068/mod01lec26.mp4">Lecture-26 Convex Optimization</option>
      
      <option  value="111104068/mod01lec27.mp4">Lecture-27 Convex Optimization</option>
      
      <option  value="111104068/mod01lec28.mp4">Lecture-28 Convex Optimization</option>
      
      <option  value="111104068/mod01lec29.mp4">Lecture-29 Convex Optimization</option>
      
      <option  value="111104068/mod01lec30.mp4">Lecture-30 Convex Optimization</option>
      
      <option  value="111104068/mod01lec31.mp4">Lecture-31 Convex Optimization</option>
      
      <option  value="111104068/mod01lec32.mp4">Lecture-32 Convex Optimization</option>
      
      <option  value="111104068/mod01lec33.mp4">Lecture-33 Convex Optimization</option>
      
      <option  value="111104068/mod01lec34.mp4">Lecture-34 Convex Optimization</option>
      
      <option  value="111104068/mod01lec35.mp4">Lecture-35 Convex Optimization</option>
      
      <option  value="111104068/mod01lec36.mp4">Lecture-36 Convex Optimization</option>
      
      <option  value="111104068/mod01lec37.mp4">Lecture-37 Convex Optimization</option>
      
      <option  value="111104068/mod01lec38.mp4">Lecture-38 Convex Optimization</option>
      
      <option  value="111104068/mod01lec39.mp4">Lecture-39 Convex Optimization</option>
      
      <option  value="111104068/mod01lec40.mp4">Lecture-40 Convex Optimization</option>
      
      <option  value="111104068/mod01lec41.mp4">Lecture-41 Convex Optimization</option>
      
      <option  value="111104068/mod01lec42.mp4">Lecture-42 Convex Optimization</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104072</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Econometric Theory</strong></td>
	<td><strong>Prof. Shalabh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104072/lecture1/main.html">main</option>
      
      <option  value="111104072/modules/Module1/Lecture1-Module1-Econometrics.pdf">Lecture1</option>
      
      <option  value="111104072/modules/Module1/Lecture2-Module1-Econometrics.pdf">Lecture2</option>
      
      <option  value="111104072/modules/Module2/Lecture3-Module2-Econometrics.pdf">Lecture3</option>
      
      <option  value="111104072/modules/Module2/Lecture4-Module2-Econometrics.pdf">Lecture4</option>
      
      <option  value="111104072/modules/Module2/Lecture5-Module2-Econometrics.pdf">Lecture5</option>
      
      <option  value="111104072/modules/Module2/Lecture6-Module2-Econometrics.pdf">Lecture6</option>
      
      <option  value="111104072/modules/Module2/Lecture7-Module2-Econometrics.pdf">Lecture7</option>
      
      <option  value="111104072/modules/Module2/Lecture8-Module2-Econometrics.pdf">Lecture8</option>
      
      <option  value="111104072/modules/Module3/Lecture9-Module3-Econometrics.pdf">Lecture9</option>
      
      <option  value="111104072/modules/Module3/Lecture10-Module3-Econometrics.pdf">Lecture10</option>
      
      <option  value="111104072/modules/Module3/Lecture11-Module3-Econometrics.pdf">Lecture11</option>
      
      <option  value="111104072/modules/Module3/Lecture12-Module3-Econometrics.pdf">Lecture12</option>
      
      <option  value="111104072/modules/Module3/Lecture13-Module3-Econometrics.pdf">Lecture13</option>
      
      <option  value="111104072/modules/Module3/Lecture14-Module3-Econometrics.pdf">Lecture14</option>
      
      <option  value="111104072/modules/Module3/Lecture15-Module3-Econometrics.pdf">Lecture15</option>
      
      <option  value="111104072/modules/Module4/Lecture16-Module4-Econometrics.pdf">Lecture16</option>
      
      <option  value="111104072/modules/Module4/Lecture17-Module4-Econometrics.pdf">Lecture17</option>
      
      <option  value="111104072/modules/Module5/Lecture18-Module5-Econometrics.pdf">Lecture18</option>
      
      <option  value="111104072/modules/Module6/Lecture19-Module6-Econometrics.pdf">Lecture19</option>
      
      <option  value="111104072/modules/Module6/Lecture20-Module6-Econometrics.pdf">Lecture20</option>
      
      <option  value="111104072/modules/Module7/Lecture21-Module7-Econometrics.pdf">Lecture21</option>
      
      <option  value="111104072/modules/Module7/Lecture22-Module7-Econometrics.pdf">Lecture22</option>
      
      <option  value="111104072/modules/Module7/Lecture23-Module7-Econometrics.pdf">Lecture23</option>
      
      <option  value="111104072/modules/Module7/Lecture24-Module7-Econometrics.pdf">Lecture24</option>
      
      <option  value="111104072/modules/Module8/Lecture25-Module8-Econometrics.pdf">Lecture25</option>
      
      <option  value="111104072/modules/Module8/Lecture26-Module8-Econometrics.pdf">Lecture26</option>
      
      <option  value="111104072/modules/Module9/Lecture27-Module9-Econometrics.pdf">Lecture27</option>
      
      <option  value="111104072/modules/Module9/Lecture28-Module9-Econometrics.pdf">Lecture28</option>
      
      <option  value="111104072/modules/Module9/Lecture29-Module9-Econometrics.pdf">Lecture29</option>
      
      <option  value="111104072/modules/Module10/Lecture30-Module10-Econometrics.pdf">Lecture30</option>
      
      <option  value="111104072/modules/Module11/Lecture31-Module11-Econometrics.pdf">Lecture31</option>
      
      <option  value="111104072/modules/Module12/Lecture32-Module12-Econometrics.pdf">Lecture32</option>
      
      <option  value="111104072/modules/Module13/Lecture33-Module13-Econometrics.pdf">Lecture33</option>
      
      <option  value="111104072/modules/Module13/Lecture34-Module13-Econometrics.pdf">Lecture34</option>
      
      <option  value="111104072/modules/Module14/Lecture35-Module14-Econometrics.pdf">Lecture35</option>
      
      <option  value="111104072/modules/Module15/Lecture36-Module15-Econometrics.pdf">Lecture36</option>
      
      <option  value="111104072/modules/Module16/Lecture37-Module16-Econometrics.pdf">Lecture37</option>
      
      <option  value="111104072/modules/Module16/Lecture38-Module16-Econometrics.pdf">Lecture38</option>
      
      <option  value="111104072/modules/Module16/Lecture39-Module16-Econometrics.pdf">Lecture39</option>
      
      <option  value="111104072/modules/Module17/Lecture40-Module17-Econometrics.pdf">Lecture40</option>
      
      <option  value="111104072/modules/Module17/Lecture41-Module17-Econometrics.pdf">Lecture41</option>
      
      <option  value="111104072/modules/Module17/Lecture42-Module17-Econometrics.pdf">Lecture42</option>
      
      <option  value="111104072/modules/Module17/Lecture43-Module17-Econometrics.pdf">Lecture43</option>
      
      <option  value="111104072/modules/Module18/Lecture44-Module18-Econometrics.pdf">Lecture44</option>
      
      <option  value="111104072/modules/Module19/Lecture45-Module19-Econometrics.pdf">Lecture45</option>
      
      <option  value="111104072/modules/Bibliography-Econometrics.pdf">Bibliography</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104073</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Sampling Theory</strong></td>
	<td><strong>Prof. Shalabh</strong></td>
	<td><strong>Web</strong></td>

	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104073/Module1/Lecture1.pdf">Lecture1</option>
      
      <option  value="111104073/Module1/Lecture2.pdf">Lecture2</option>
      
      <option  value="111104073/Module2/Lecture3.pdf">Lecture3</option>
      
      <option  value="111104073/Module2/Lecture4.pdf">Lecture4</option>
      
      <option  value="111104073/Module2/Lecture5.pdf">Lecture5</option>
      
      <option  value="111104073/Module2/Lecture6.pdf">Lecture6</option>
      
      <option  value="111104073/Module3/Lecture7.pdf">Lecture7</option>
      
      <option  value="111104073/Module3/Lecture8.pdf">Lecture8</option>
      
      <option  value="111104073/Module4/Lecture9.pdf">Lecture9</option>
      
      <option  value="111104073/Module4/Lecture10.pdf">Lecture10</option>
      
      <option  value="111104073/Module4/Lecture11.pdf">Lecture11</option>
      
      <option  value="111104073/Module4/Lecture12.pdf">Lecture12</option>
      
      <option  value="111104073/Module4/Lecture13.pdf">Lecture13</option>
      
      <option  value="111104073/Module5/Lecture14.pdf">Lecture14</option>
      
      <option  value="111104073/Module5/Lecture15.pdf">Lecture15</option>
      
      <option  value="111104073/Module5/Lecture16.pdf">Lecture16</option>
      
      <option  value="111104073/Module5/Lecture17.pdf">Lecture17</option>
      
      <option  value="111104073/Module5/Lecture18.pdf">Lecture18</option>
      
      <option  value="111104073/Module5/Lecture19.pdf">Lecture19</option>
      
      <option  value="111104073/Module6/Lecture20.pdf">Lecture20</option>
      
      <option  value="111104073/Module6/Lecture21.pdf">Lecture21</option>
      
      <option  value="111104073/Module6/Lecture22.pdf">Lecture22</option>
      
      <option  value="111104073/Module7/Lecture23.pdf">Lecture23</option>
      
      <option  value="111104073/Module7/Lecture24.pdf">Lecture24</option>
      
      <option  value="111104073/Module7/Lecture25.pdf">Lecture25</option>
      
      <option  value="111104073/Module7/Lecture26.pdf">Lecture26</option>
      
      <option  value="111104073/Module7/Lecture27.pdf">Lecture27</option>
      
      <option  value="111104073/Module8/Lecture28.pdf">Lecture28</option>
      
      <option  value="111104073/Module8/Lecture29.pdf">Lecture29</option>
      
      <option  value="111104073/Module9/Lecture30.pdf">Lecture30</option>
      
      <option  value="111104073/Module9/Lecture31.pdf">Lecture31</option>
      
      <option  value="111104073/Module9/Lecture32.pdf">Lecture32</option>
      
      <option  value="111104073/Module10/Lecture33.pdf">Lecture33</option>
      
      <option  value="111104073/Module10/Lecture34.pdf">Lecture34</option>
      
      <option  value="111104073/Module10/Lecture35.pdf">Lecture35</option>
      
      <option  value="111104073/Module11/Lecture36.pdf">Lecture36</option>
      
      <option  value="111104073/Module11/Lecture37.pdf">Lecture37</option>
      
      <option  value="111104073/Module11/Lecture38.pdf">Lecture38</option>
      
      <option  value="111104073/Module12/Lecture39.pdf">Lecture39</option>
      
      <option  value="111104073/Module12/Lecture40.pdf">Lecture40</option>
      
      <option  value="111104073/Module13/Lecture41.pdf">Lecture41</option>
      
      <option  value="111104073/Module14/Lecture42.pdf">Exercises </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104074</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Linear Regression Analysis</strong></td>
	<td><strong>Prof. Shalabh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104074/ui/home.pdf">main</option>
      
      <option  value="111104074/Module1/Lecture1.pdf">Lecture1</option>
      
      <option  value="111104074/Module2/Lecture2.pdf">Lecture2</option>
      
      <option  value="111104074/Module2/Lecture3.pdf">Lecture3</option>
      
      <option  value="111104074/Module2/Lecture4.pdf">Lecture4</option>
      
      <option  value="111104074/Module2/Lecture5.pdf">Lecture5</option>
      
      <option  value="111104074/Module2/Lecture6.pdf">Lecture6</option>
      
      <option  value="111104074/Module2/Lecture7.pdf">Lecture7</option>
      
      <option  value="111104074/Module3/Lecture8.pdf">Lecture8</option>
      
      <option  value="111104074/Module3/Lecture9.pdf">Lecture9</option>
      
      <option  value="111104074/Module3/Lecture10.pdf">Lecture10</option>
      
      <option  value="111104074/Module3/Lecture11.pdf">Lecture11</option>
      
      <option  value="111104074/Module3/Lecture12.pdf">Lecture12</option>
      
      <option  value="111104074/Module3/Lecture13.pdf">Lecture13</option>
      
      <option  value="111104074/Module3/Lecture14.pdf">Lecture14</option>
      
      <option  value="111104074/Module4/Lecture15.pdf">Lecture15</option>
      
      <option  value="111104074/Module4/Lecture16.pdf">Lecture16</option>
      
      <option  value="111104074/Module4/Lecture17.pdf">Lecture17</option>
      
      <option  value="111104074/Module4/Lecture18.pdf">Lecture18</option>
      
      <option  value="111104074/Module4/Lecture19.pdf">Lecture19</option>
      
      <option  value="111104074/Module5/Lecture20.pdf">Lecture20</option>
      
      <option  value="111104074/Module5/Lecture21.pdf">Lecture21</option>
      
      <option  value="111104074/Module5/Lecture22.pdf">Lecture22</option>
      
      <option  value="111104074/Module6/Lecture23.pdf">Lecture23</option>
      
      <option  value="111104074/Module6/Lecture24.pdf">Lecture24</option>
      
      <option  value="111104074/Module7/Lecture25.pdf">Lecture25</option>
      
      <option  value="111104074/Module8/Lecture26.pdf">Lecture26</option>
      
      <option  value="111104074/Module8/Lecture27.pdf">Lecture27</option>
      
      <option  value="111104074/Module9/Lecture28.pdf">Lecture28</option>
      
      <option  value="111104074/Module9/Lecture29.pdf">Lecture29</option>
      
      <option  value="111104074/Module9/Lecture30.pdf">Lecture30</option>
      
      <option  value="111104074/Module9/Lecture31.pdf">Lecture31</option>
      
      <option  value="111104074/Module10/Lecture32.pdf">Lecture32</option>
      
      <option  value="111104074/Module11/Lecture33.pdf">Lecture33</option>
      
      <option  value="111104074/Module11/Lecture34.pdf">Lecture34</option>
      
      <option  value="111104074/Module12/Lecture35.pdf">Lecture35</option>
      
      <option  value="111104074/Module12/Lecture36.pdf">Lecture36</option>
      
      <option  value="111104074/Module13/Lecture37.pdf">Lecture37</option>
      
      <option  value="111104074/Module13/Lecture38.pdf">Lecture38</option>
      
      <option  value="111104074/Module13/Lecture39.pdf">Lecture39</option>
      
      <option  value="111104074/Module14/Lecture40.pdf">Lecture40</option>
      
      <option  value="111104074/Module14/Lecture41.pdf">Lecture41</option>
      
      <option  value="111104074/Module15/Lecture42.pdf">Lecture42</option>
      
      <option  value="111104074/Module15/Lecture43.pdf">Lecture43</option>
      
      <option  value="111104074/Module16-Exercises/Lecture44.pdf">Lecture44</option>
      
      <option  value="111104074/Module17-Bibliography/Bibliography-RegressionAnalysis.pdf">Bibliography-RegressionAnalysis</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104075</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Analysis of variance and design of experiment-I</strong></td>
	<td><strong>Prof. Shalabh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104075/lecture1/main.html">main</option>
      
      <option  value="111104075/pdf/Module1/Lecture1-Module1-Anova-1.pdf">Lecture1</option>
      
      <option  value="111104075/pdf/Module1/Lecture2-Module1-Anova-1.pdf">Lecture2</option>
      
      <option  value="111104075/pdf/Module1/Lecture3-Module1-Anova-1.pdf">Lecture3</option>
      
      <option  value="111104075/pdf/Module2/Lecture4-Module2-Anova-1.pdf">Lecture4</option>
      
      <option  value="111104075/pdf/Module2/Lecture5-Module2-Anova-1.pdf">Lecture5</option>
      
      <option  value="111104075/pdf/Module2/Lecture6-Module2-Anova-1.pdf">Lecture6</option>
      
      <option  value="111104075/pdf/Module2/Lecture7-Module2-Anova-1.pdf">Lecture7</option>
      
      <option  value="111104075/pdf/Module2/Lecture8-Module2-Anova-1.pdf">Lecture8</option>
      
      <option  value="111104075/pdf/Module2/Lecture9-Module2-Anova-1.pdf">Lecture9</option>
      
      <option  value="111104075/pdf/Module2/Lecture10-Module2-Anova-1.pdf">Lecture10</option>
      
      <option  value="111104075/pdf/Module2/Lecture11-Module2-Anova-1.pdf">Lecture11</option>
      
      <option  value="111104075/pdf/Module3/Lecture12-Module3-Anova-1.pdf">Lecture12</option>
      
      <option  value="111104075/pdf/Module3/Lecture13-Module3-Anova-1.pdf">Lecture13</option>
      
      <option  value="111104075/pdf/Module3/Lecture14-Module3-Anova-1.pdf">Lecture14</option>
      
      <option  value="111104075/pdf/Module3/Lecture15-Module3-Anova-1.pdf">Lecture15</option>
      
      <option  value="111104075/pdf/Module3/Lecture16-Module3-Anova-1.pdf">Lecture16</option>
      
      <option  value="111104075/pdf/Module3/Lecture17-Module3-Anova-1.pdf">Lecture17</option>
      
      <option  value="111104075/pdf/Module3/Lecture18-Module3-Anova-1.pdf">Lecture18</option>
      
      <option  value="111104075/pdf/Module4/Lecture19-Module4-Anova-1.pdf">Lecture19</option>
      
      <option  value="111104075/pdf/Module4/Lecture20-Module4-Anova-1.pdf">Lecture20</option>
      
      <option  value="111104075/pdf/Module4/Lecture21-Module4-Anova-1.pdf">Lecture21</option>
      
      <option  value="111104075/pdf/Module4/Lecture22-Module4-Anova-1.pdf">Lecture22</option>
      
      <option  value="111104075/pdf/Module4/Lecture23-Module4-Anova-1.pdf">Lecture23</option>
      
      <option  value="111104075/pdf/Module4/Lecture24-Module4-Anova-1.pdf">Lecture24</option>
      
      <option  value="111104075/pdf/Module5/Lecture25-Module5-Anova-1.pdf">Lecture25</option>
      
      <option  value="111104075/pdf/Module5/Lecture26-Module5-Anova-1.pdf">Lecture26</option>
      
      <option  value="111104075/pdf/Module5/Lecture27-Module5-Anova-1.pdf">Lecture27</option>
      
      <option  value="111104075/pdf/Module5/Lecture28-Module5-Anova-1.pdf">Lecture28</option>
      
      <option  value="111104075/pdf/Module5/Lecture29-Module5-Anova-1.pdf">Lecture29</option>
      
      <option  value="111104075/pdf/Module6/Lecture30-Module6-Anova-1.pdf">Lecture30</option>
      
      <option  value="111104075/pdf/Module6/Lecture31-Module6-Anova-1.pdf">Lecture31</option>
      
      <option  value="111104075/pdf/Module7/Lecture32-Module7-Anova-1.pdf">Lecture32</option>
      
      <option  value="111104075/pdf/Module7/Lecture33-Module7-Anova-1.pdf">Lecture33</option>
      
      <option  value="111104075/pdf/Module8/Lecture34-Module8-Anova-1.pdf">Lecture34</option>
      
      <option  value="111104075/pdf/Module8/Lecture35.pdf">Lecture35</option>
      
      <option  value="111104075/pdf/Module9/Lecture36-Module9-Anova-1.pdf">Lecture36</option>
      
      <option  value="111104075/pdf/Module9/Lecture37-Module9-Anova-1.pdf">Lecture37</option>
      
      <option  value="111104075/pdf/Module10-Anova-1-Exercise/Lecture38-Module9-Anova-1-Exercises.pdf">Exercises</option>
      
      <option  value="111104075/pdf/Module10-Anova-1-Exercise/References-Anova-1.pdf">References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104078</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Analysis of variance and design of experiment-II</strong></td>
	<td><strong>Prof. Shalabh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111104078/lecture1/main.html">main</option>
      
      <option  value="111104078/pdf/Module1/Lecture1.pdf">Lecture1</option>
      
      <option  value="111104078/pdf/Module1/Lecture2.pdf">Lecture2</option>
      
      <option  value="111104078/pdf/Module1/Lecture3.pdf">Lecture3</option>
      
      <option  value="111104078/pdf/Module1/Lecture4.pdf">Lecture4</option>
      
      <option  value="111104078/pdf/Module1/Lecture5.pdf">Lecture5</option>
      
      <option  value="111104078/pdf/Module1/Lecture6.pdf">Lecture6</option>
      
      <option  value="111104078/pdf/Module1/Lecture7.pdf">Lecture7</option>
      
      <option  value="111104078/pdf/Module1/Lecture8.pdf">Lecture8</option>
      
      <option  value="111104078/pdf/Module2/Lecture-9.pdf">Lecture9</option>
      
      <option  value="111104078/pdf/Module2/Lecture-10.pdf">Lecture10</option>
      
      <option  value="111104078/pdf/Module2/Lecture-11.pdf">Lecture11</option>
      
      <option  value="111104078/pdf/Module2/Lecture-12.pdf">Lecture12</option>
      
      <option  value="111104078/pdf/Module2/Lecture-13.pdf">Lecture13</option>
      
      <option  value="111104078/pdf/Module2/Lecture-14.pdf">Lecture14</option>
      
      <option  value="111104078/pdf/Module3/Lecture15.pdf">Lecture15</option>
      
      <option  value="111104078/pdf/Module3/Lecture16.pdf">Lecture16</option>
      
      <option  value="111104078/pdf/Module3/Lecture17.pdf">Lecture17</option>
      
      <option  value="111104078/pdf/Module3/Lecture18.pdf">Lecture18</option>
      
      <option  value="111104078/pdf/Module4/Lecture19.pdf">Lecture19</option>
      
      <option  value="111104078/pdf/Module4/Lecture20.pdf">Lecture20</option>
      
      <option  value="111104078/pdf/Module4/Lecture21.pdf">Lecture21</option>
      
      <option  value="111104078/pdf/Module5/Lecture22.pdf">Lecture22</option>
      
      <option  value="111104078/pdf/Module5/Lecture23.pdf">Lecture23</option>
      
      <option  value="111104078/pdf/Module6/Lecture24.pdf">Lecture24</option>
      
      <option  value="111104078/pdf/Module6/Lecture25.pdf">Lecture25</option>
      
      <option  value="111104078/pdf/Module6/Lecture26.pdf">Lecture26</option>
      
      <option  value="111104078/pdf/Module6/Lecture27.pdf">Lecture27</option>
      
      <option  value="111104078/pdf/Module6/Lecture28.pdf">Lecture28</option>
      
      <option  value="111104078/pdf/Module7/Lecture29.pdf">Lecture29</option>
      
      <option  value="111104078/pdf/Module7/Lecture30.pdf">Lecture30</option>
      
      <option  value="111104078/pdf/Module7/Lecture31.pdf">Lecture31</option>
      
      <option  value="111104078/pdf/Module7/Lecture32.pdf">Lecture32</option>
      
      <option  value="111104078/pdf/Module8/Lecture33.pdf">Lecture33</option>
      
      <option  value="111104078/pdf/Module8/Lecture34.pdf">Lecture34</option>
      
      <option  value="111104078/pdf/Module8/Lecture35.pdf">Lecture35</option>
      
      <option  value="111104078/pdf/Module8/Lecture36.pdf">Lecture36</option>
      
      <option  value="111104078/pdf/Module9/Lecture37.pdf">Lecture37</option>
      
      <option  value="111104078/pdf/Module9/Lecture38.pdf">Lecture38</option>
      
      <option  value="111104078/pdf/Module10/Lecture39.pdf">Exercise</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104079</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong> Probability Theory and Applications </strong></td>
	<td><strong>Prof. Prabha Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111104079/Lecture-01.mp4">Lecture-01-Basic principles of counting                                                    </option>
<option value="111104079/Lecture-02.mp4">Lecture-02-Sample space , events, axioms of probability                                    </option>
<option value="111104079/Lecture-03.mp4">Lecture-03-Conditional probability, Independence of events.                                </option>
<option value="111104079/Lecture-04.mp4">Lecture-04-Random variables, cumulative density function, expected value                   </option>
<option value="111104079/Lecture-05.mp4">Lecture-05-Discrete random variables and their distributions                               </option>
<option value="111104079/Lecture-06.mp4">Lecture-06-Discrete random variables and their distributions                               </option>
<option value="111104079/Lecture-07.mp4">Lecture-07-Discrete random variables and their distributions                               </option>
<option value="111104079/Lecture-08.mp4">Lecture-08-Continuous random variables and their distributions.                            </option>
<option value="111104079/Lecture-09.mp4">Lecture-09-Continuous random variables and their distributions.                            </option>
<option value="111104079/Lecture-10.mp4">Lecture-10-Continuous random variables and their distributions.                            </option>
<option value="111104079/Lecture-11.mp4">Lecture-11-Function of random variables, Momement generating function                      </option>
<option value="111104079/Lecture-12.mp4">Lecture-12-Jointly distributed random variables, Independent  r. v. and their sums         </option>
<option value="111104079/Lecture-13.mp4">Lecture-13-Independent  r. v. and their sums.                                              </option>
<option value="111104079/Lecture-14.mp4">Lecture-14-Chi � square  r. v., sums of independent normal r. v., Conditional distr.       </option>
<option value="111104079/Lecture-15.mp4">Lecture-15 Conditional disti,  Joint distr. of functions of r. v., Order statistics        </option>
<option value="111104079/Lecture-16.mp4">Lecture-16-Order statistics, Covariance and correlation.                                   </option>
<option value="111104079/Lecture-17.mp4">Lecture-17-Covariance, Correlation, Cauchy- Schwarz inequalities, Conditional expectation. </option>
<option value="111104079/Lecture-18.mp4">Lecture-18-Conditional expectation, Best linear predictor                                  </option>
<option value="111104079/Lecture-19.mp4">Lecture-19-Inequalities and bounds.                                                        </option>
<option value="111104079/Lecture-20.mp4">Lecture-20-Convergence and limit theorems                                                  </option>
<option value="111104079/Lecture-21.mp4">Lecture-21-Central limit theorem                                                           </option>
<option value="111104079/Lecture-22.mp4">Lecture-22-Applications of central limit theorem                                           </option>
<option value="111104079/Lecture-23.mp4">Lecture-23-Strong law of large numbers, Joint mgf.                                         </option>
<option value="111104079/Lecture-24.mp4">Lecture-24-Convolutions                                                                    </option>
<option value="111104079/Lecture-25.mp4">Lecture-25-Stochastic processes: Markov process.                                           </option>
<option value="111104079/Lecture-26.mp4">Lecture-26-Transition and state probabilities.                                             </option>
<option value="111104079/Lecture-27.mp4">Lecture-27-State prob., First passage and First return prob                                </option>
<option value="111104079/Lecture-28.mp4">Lecture-28-First passage and First return prob. Classification of states.                  </option>
<option value="111104079/Lecture-29.mp4">Lecture-29-Random walk, periodic and null states.                                          </option>
<option value="111104079/Lecture-30.mp4">Lecture-30-Reducible Markov chains                                                         </option>
<option value="111104079/Lecture-31.mp4">Lecture-31-Time reversible Markov chains                                                   </option>
<option value="111104079/Lecture-32.mp4">Lecture-32-Poisson Processes                                                               </option>
<option value="111104079/Lecture-33.mp4">Lecture-33-Inter-arrival times, Properties of Poisson processes                            </option>
<option value="111104079/Lecture-34.mp4">Lecture-34-Queuing Models: M/M/I, Birth and death process, Little�s  formulae              </option>
<option value="111104079/Lecture-35.mp4">Lecture-35-Analysis of  L,  Lq ,W and  Wq , M/M/S model                                    </option>
<option value="111104079/Lecture-36.mp4">Lecture-36-M/M/S , M/M/I/K models                                                          </option>
<option value="111104079/Lecture-37.mp4">Lecture-37-M/M/I/K and M/M/S/K models                                                      </option>
<option value="111104079/Lecture-38.mp4">Lecture-38-Application to reliability theory failure law                                   </option>
<option value="111104079/Lecture-39.mp4">Lecture-39-Exponential failure law, Weibull law                                            </option>
<option value="111104079/Lecture-40.mp4">Lecture-40-Reliability of systems                                                          </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111105035</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Advanced Engineering Mathematics</strong></td>
	<td><strong>Prof. Somesh Kumar,Prof. P.D. Srivastava,Prof. J. Kumar,Dr. P. Panigrahi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111105035/mod01lec01.mp4">Review Groups, Fields and Matrices</option>
      
      <option  value="111105035/mod01lec02.mp4">Vector Spaces, Subspaces, Linearly Dependent/Independent of Vectors</option>
      
      <option  value="111105035/mod01lec03.mp4">Basis, Dimension, Rank and Matrix Inverse</option>
      
      <option  value="111105035/mod01lec04.mp4">Linear Transformation, Isomorphism and Matrix Representation</option>
      
      <option  value="111105035/mod01lec05.mp4">System of Linear Equations, Eigenvalues and Eigenvectors</option>
      
      <option  value="111105035/mod01lec06.mp4">Method to Find Eigenvalues and Eigenvectors, Diagonalization of Matrices</option>
      
      <option  value="111105035/mod01lec07.mp4">Jordan Canonical Form, Cayley Hamilton Theorem</option>
      
      <option  value="111105035/mod01lec08.mp4">Inner Product Spaces, Cauchy-Schwarz Inequality </option>
      
      <option  value="111105035/mod01lec09.mp4">Orthogonality, Gram-Schmidt Orthogonalization Process</option>
      
      <option  value="111105035/mod01lec10.mp4">Spectrum of special matrices,positive/negative definite matrices</option>
      
      <option  value="111105035/mod01lec11.mp4">Concept of Domain, Limit, Continuity and Differentiability</option>
      
      <option  value="111105035/mod01lec12.mp4">Analytic Functions, C-R Equations</option>
      
      <option  value="111105035/mod01lec13.mp4">Harmonic Functions</option>
      
      <option  value="111105035/mod01lec14.mp4">Line Integral in the Complex</option>
      
      <option  value="111105035/mod01lec15.mp4">Cauchy Integral Theorem</option>
      
      <option  value="111105035/mod01lec16.mp4">Cauchy Integral Theorem (Contd.)</option>
      
      <option  value="111105035/mod01lec17.mp4">Cauchy Integral Formula</option>
      
      <option  value="111105035/mod01lec18.mp4">Power and Taylor's Series of Complex Numbers</option>
      
      <option  value="111105035/mod01lec19.mp4">Power and Taylor's Series of Complex Numbers (Contd.)</option>
      
      <option  value="111105035/mod01lec20.mp4">Taylor's, Laurent Series of f(z) and Singularities </option>
      
      <option  value="111105035/mod01lec21.mp4">Classification of Singularities, Residue and Residue Theorem</option>
      
      <option  value="111105035/mod01lec22.mp4">Laplace Transform and its Existence</option>
      
      <option  value="111105035/mod01lec23.mp4">Properties of Laplace Transform</option>
      
      <option  value="111105035/mod01lec24.mp4">Evaluation of Laplace and Inverse Laplace Transform</option>
      
      <option  value="111105035/mod01lec25.mp4">Applications of Laplace Transform to Integral Equations and ODEs</option>
      
      <option  value="111105035/mod01lec26.mp4">Applications of Laplace Transform to PDEs</option>
      
      <option  value="111105035/mod01lec27.mp4">Fourier Series</option>
      
      <option  value="111105035/mod01lec28.mp4">Fourier Series (Contd.)</option>
      
      <option  value="111105035/mod01lec29.mp4">Fourier Integral Representation of a Function</option>
      
      <option  value="111105035/mod01lec30.mp4">Introduction to Fourier Transform</option>
      
      <option  value="111105035/mod01lec31.mp4">Applications of Fourier Transform to PDEs</option>
      
      <option  value="111105035/mod01lec32.mp4">Laws of Probability - I</option>
      
      <option  value="111105035/mod01lec33.mp4">Laws of Probability - II</option>
      
      <option  value="111105035/mod01lec34.mp4">Problems in Probability</option>
      
      <option  value="111105035/mod01lec35.mp4">Random Variables</option>
      
      <option  value="111105035/mod01lec36.mp4">Special Discrete Distributions</option>
      
      <option  value="111105035/mod01lec37.mp4">Special Continuous Distributions</option>
      
      <option  value="111105035/mod01lec38.mp4">Joint Distributions and Sampling Distributions</option>
      
      <option  value="111105035/mod01lec39.mp4">Point Estimation</option>
      
      <option  value="111105035/mod01lec40.mp4">Interval Estimation</option>
      
      <option  value="111105035/mod01lec41.mp4">Basic Concepts of Testing of Hypothesis</option>
      
      <option  value="111105035/mod01lec42.mp4">Tests for Normal Populations</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111105037</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Functional Analysis</strong></td>
	<td><strong>Prof. P.D. Srivastava</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111105037/mod01lec01.mp4">Metric Spaces with Examples</option>
      
      <option  value="111105037/mod01lec02.mp4">Holder Inequality and Minkowski Inequality</option>
      
      <option  value="111105037/mod01lec03.mp4">Various Concepts in a Metric Space</option>
      
      <option  value="111105037/mod01lec04.mp4">Separable Metrics Spaces with Examples</option>
      
      <option  value="111105037/mod01lec05.mp4">Convergence, Cauchy Sequence, Completeness</option>
      
      <option  value="111105037/mod01lec06.mp4">Examples of Complete and Incomplete Metric Spaces</option>
      
      <option  value="111105037/mod01lec07.mp4">Completion of Metric Spaces + Tutorial</option>
      
      <option  value="111105037/mod01lec08.mp4">Vector Spaces with Examples</option>
      
      <option  value="111105037/mod01lec09.mp4">Normed Spaces with Examples</option>
      
      <option  value="111105037/mod01lec10.mp4">Banach Spaces and Schauder Basic</option>
      
      <option  value="111105037/mod01lec11.mp4">Finite Dimensional Normed Spaces and Subspaces</option>
      
      <option  value="111105037/mod01lec12.mp4">Compactness of Metric/Normed Spaces</option>
      
      <option  value="111105037/mod01lec13.mp4">Linear Operators-definition and Examples</option>
      
      <option  value="111105037/mod01lec14.mp4">Bounded Linear Operators in a Normed Space</option>
      
      <option  value="111105037/mod01lec15.mp4">Bounded Linear Functionals in a Normed Space</option>
      
      <option  value="111105037/mod01lec16.mp4">Concept of Algebraic Dual and Reflexive Space</option>
      
      <option  value="111105037/mod01lec17.mp4">Dual Basis & Algebraic Reflexive Space</option>
      
      <option  value="111105037/mod01lec18.mp4">Dual Spaces with Examples</option>
      
      <option  value="111105037/mod01lec19.mp4">Tutorial - I</option>
      
      <option  value="111105037/mod01lec20.mp4">Tutorial - II</option>
      
      <option  value="111105037/mod01lec21.mp4">Inner Product & Hilbert Space</option>
      
      <option  value="111105037/mod01lec22.mp4">Further Properties of Inner Product Spaces</option>
      
      <option  value="111105037/mod01lec23.mp4">Projection Theorem, Orthonormal Sets and Sequences</option>
      
      <option  value="111105037/mod01lec24.mp4">Representation of Functionals on a Hilbert Spaces</option>
      
      <option  value="111105037/mod01lec25.mp4">Hilbert Adjoint Operator</option>
      
      <option  value="111105037/mod01lec26.mp4">Self Adjoint, Unitary & Normal Operators</option>
      
      <option  value="111105037/mod01lec27.mp4">Tutorial - III</option>
      
      <option  value="111105037/mod01lec28.mp4">Annihilator in an IPS</option>
      
      <option  value="111105037/mod01lec29.mp4">Total Orthonormal Sets And Sequences</option>
      
      <option  value="111105037/mod01lec30.mp4">Partially Ordered Set and Zorns Lemma</option>
      
      <option  value="111105037/mod01lec31.mp4">Hahn Banach Theorem for Real Vector Spaces</option>
      
      <option  value="111105037/mod01lec32.mp4">Hahn Banach Theorem for Complex V.S. & Normed Spaces</option>
      
      <option  value="111105037/mod01lec33.mp4">Baires Category & Uniform Boundedness Theorems</option>
      
      <option  value="111105037/mod01lec34.mp4">Open Mapping Theorem</option>
      
      <option  value="111105037/mod01lec35.mp4">Closed Graph Theorem</option>
      
      <option  value="111105037/mod01lec36.mp4">Adjoint Operator</option>
      
      <option  value="111105037/mod01lec37.mp4">Strong and Weak Convergence</option>
      
      <option  value="111105037/mod01lec38.mp4">Convergence of Sequence of Operators and Functionals</option>
      
      <option  value="111105037/mod01lec39.mp4">LP - Space</option>
      
      <option  value="111105037/mod01lec40.mp4"> LP - Space (Contd.)</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111105038</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong> Numerical methods of Ordinary and Partial Differential Equations  </strong></td>
	<td><strong>Dr. G.P. Raja Sekhar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111105038/mod01lec01.mp4">Motivation with few Examples                                  </option>
<option value="111105038/mod01lec02.mp4">Single - Step Methods for IVPs                                </option>
<option value="111105038/mod01lec03.mp4">Analysis of Single Step Methods                               </option>
<option value="111105038/mod01lec04.mp4">Runge - Kutta Methods for IVPs                                </option>
<option value="111105038/mod01lec05.mp4">Higher Order Methods/Equations                                </option>
<option value="111105038/mod01lec06.mp4">Error - Stability - Convergence of Single Step Methods        </option>
<option value="111105038/mod01lec07.mp4">Tutorial - I                                                  </option>
<option value="111105038/mod01lec08.mp4">Tutorial - II                                                 </option>
<option value="111105038/mod01lec09.mp4">Multi-Step Methods (Explicit)                                 </option>
<option value="111105038/mod01lec10.mp4">Multi-Step Methods (Implicit)                                 </option>
<option value="111105038/mod01lec11.mp4">Convergence and Stability of multi step methods               </option>
<option value="111105038/mod01lec12.mp4">General methods for absolute stability                        </option>
<option value="111105038/mod01lec13.mp4">Stability Analysis of Multi Step Methods                      </option>
<option value="111105038/mod01lec14.mp4">Predictor - Corrector Methods                                 </option>
<option value="111105038/mod01lec15.mp4">Some Comments on Multi - Step Methods                         </option>
<option value="111105038/mod01lec16.mp4">Finite Difference Methods - Linear BVPs                       </option>
<option value="111105038/mod01lec17.mp4">Linear/Non - Linear Second Order BVPs                         </option>
<option value="111105038/mod01lec18.mp4">BVPS - Derivative Boundary Conditions                         </option>
<option value="111105038/mod01lec19.mp4">Higher Order BVPs                                             </option>
<option value="111105038/mod01lec20.mp4">Shooting Method BVPs                                          </option>
<option value="111105038/mod01lec21.mp4">Tutorial - III                                                </option>
<option value="111105038/mod01lec22.mp4">Introduction to First Order PDE                               </option>
<option value="111105038/mod01lec23.mp4">Introduction to Second Order PDE                              </option>
<option value="111105038/mod01lec24.mp4">Finite Difference Approximations to Parabolic PDEs            </option>
<option value="111105038/mod01lec25.mp4">Implicit Methods for Parabolic PDEs                           </option>
<option value="111105038/mod01lec26.mp4">Consistency, Stability and Convergence                        </option>
<option value="111105038/mod01lec27.mp4">Other Numerical Methods for Parabolic PDEs                    </option>
<option value="111105038/mod01lec28.mp4">Tutorial - IV                                                 </option>
<option value="111105038/mod01lec29.mp4">Matrix Stability Analysis of Finite Difference Scheme         </option>
<option value="111105038/mod01lec30.mp4">Fourier Series Stability Analysis of Finite Difference Scheme </option>
<option value="111105038/mod01lec31.mp4">Finite Difference Approximations to Elliptic PDEs- I          </option>
<option value="111105038/mod01lec32.mp4">Finite Difference Approximations to Elliptic PDEs - II        </option>
<option value="111105038/mod01lec33.mp4">Finite Difference Approximations to Elliptic PDEs - III       </option>
<option value="111105038/mod01lec34.mp4">Finite Difference Approximations to Elliptic PDEs - IV        </option>
<option value="111105038/mod01lec35.mp4">Finite Difference Approximations to Hyperbolic PDEs - I       </option>
<option value="111105038/mod01lec36.mp4">Finite Difference Approximations to Hyperbolic PDEs - II      </option>
<option value="111105038/mod01lec37.mp4">Method of characteristics for Hyperbolic PDEs - I             </option>
<option value="111105038/mod01lec38.mp4">Method of characterisitcs of Hyperbolic PDEs - II             </option>
<option value="111105038/mod01lec39.mp4">Finite Difference Approximations to 1st order Hyperbolic PDEs </option>
<option value="111105038/mod01lec40.mp4">Summary, Appendices, Remarks                                  </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111105041</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Probability and Statistics</strong></td>
	<td><strong>Prof. Somesh Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111105041/mod01lec01.mp4">Algebra of Sets - I</option>
      
      <option  value="111105041/mod01lec02.mp4">Algebra of Sets - II</option>
      
      <option  value="111105041/mod01lec03.mp4">Introduction to Probability</option>
      
      <option  value="111105041/mod01lec04.mp4">Laws of Probability - I</option>
      
      <option  value="111105041/mod01lec05.mp4">Law of Probability - II</option>
      
      <option  value="111105041/mod01lec06.mp4">Problems in Probability</option>
      
      <option  value="111105041/mod01lec07.mp4">Random Variables</option>
      
      <option  value="111105041/mod01lec08.mp4">Probability Distributions</option>
      
      <option  value="111105041/mod01lec09.mp4">Characteristics of Distribution</option>
      
      <option  value="111105041/mod01lec10.mp4">Special Distributions - I</option>
      
      <option  value="111105041/mod01lec11.mp4">Special Distributions - II</option>
      
      <option  value="111105041/mod01lec12.mp4">Special Distributions - III</option>
      
      <option  value="111105041/mod01lec13.mp4">Special Distributions - IV</option>
      
      <option  value="111105041/mod01lec14.mp4">Special Distributions - V</option>
      
      <option  value="111105041/mod01lec15.mp4">Special Distributions - VI</option>
      
      <option  value="111105041/mod01lec16.mp4">Special Distributions - VII</option>
      
      <option  value="111105041/mod01lec17.mp4">Functions of a Random Variable</option>
      
      <option  value="111105041/mod01lec18.mp4">Joint Distributions - I</option>
      
      <option  value="111105041/mod01lec19.mp4">Joint Distributions - II</option>
      
      <option  value="111105041/mod01lec20.mp4">Joint Distributions - III</option>
      
      <option  value="111105041/mod01lec21.mp4">Joint Distributions - IV</option>
      
      <option  value="111105041/mod01lec22.mp4">Transformations of Random Vectors</option>
      
      <option  value="111105041/mod01lec23.mp4">Sampling Distributions - I</option>
      
      <option  value="111105041/mod01lec24.mp4">Sampling Distributions - II</option>
      
      <option  value="111105041/mod01lec25.mp4">Descriptive Statistics - I</option>
      
      <option  value="111105041/mod01lec26.mp4">Descriptive Statistics - II</option>
      
      <option  value="111105041/mod01lec27.mp4">Estimation - I</option>
      
      <option  value="111105041/mod01lec28.mp4">Estimation - II</option>
      
      <option  value="111105041/mod01lec29.mp4">Estimation - III</option>
      
      <option  value="111105041/mod01lec30.mp4">Estimation - IV</option>
      
      <option  value="111105041/mod01lec31.mp4">Estimation - V</option>
      
      <option  value="111105041/mod01lec32.mp4">Estimation - VI</option>
      
      <option  value="111105041/mod01lec33.mp4">Testing of Hypothesis - I</option>
      
      <option  value="111105041/mod01lec34.mp4">Testing of Hypothesis - II</option>
      
      <option  value="111105041/mod01lec35.mp4">Testing of Hypothesis - III</option>
      
      <option  value="111105041/mod01lec36.mp4">Testing of Hypothesis - IV</option>
      
      <option  value="111105041/mod01lec37.mp4">Testing of Hypothesis - V</option>
      
      <option  value="111105041/mod01lec38.mp4">Testing of Hypothesis - VI</option>
      
      <option  value="111105041/mod01lec39.mp4">Testing of Hypothesis - VII</option>
      
      <option  value="111105041/mod01lec40.mp4">Testing of Hypothesis - VIII</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111105042</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Regression Analysis </strong></td>
	<td><strong>Dr. Soumen Maity</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111105042/mod01lec01.mp4">Simple Linear Regression                                             </option>
<option value="111105042/mod01lec02.mp4">Simple Linear Regression (Contd.)                                    </option>
<option value="111105042/mod01lec03.mp4">Simple Linear Regression (Contd. )                                   </option>
<option value="111105042/mod01lec04.mp4">Simple Linear Regression ( Contd.)                                   </option>
<option value="111105042/mod01lec05.mp4">Simple Linear Regression ( Contd. )                                  </option>
<option value="111105042/mod01lec06.mp4">Multiple Linear Regression                                           </option>
<option value="111105042/mod01lec07.mp4">Multiple Linear Regression (Contd.)                                  </option>
<option value="111105042/mod01lec08.mp4">Multiple Linear Regression (Contd. )                                 </option>
<option value="111105042/mod01lec09.mp4">Multiple Linear Regression ( Contd.)                                 </option>
<option value="111105042/mod01lec10.mp4">Selecting the BEST Regression Model                                  </option>
<option value="111105042/mod01lec11.mp4">Selecting the BEST Regression Model (Contd.)                         </option>
<option value="111105042/mod01lec12.mp4">Selecting the BEST Regression Model (Contd. )                        </option>
<option value="111105042/mod01lec13.mp4">Selecting the BEST Regression Model ( Contd.)                        </option>
<option value="111105042/mod01lec14.mp4">Multicollinearity                                                    </option>
<option value="111105042/mod01lec15.mp4">Multicollinearity (Contd.)                                           </option>
<option value="111105042/mod01lec16.mp4">Multicollinearity ( Contd.)                                          </option>
<option value="111105042/mod01lec17.mp4">Model Adequacy Checking                                              </option>
<option value="111105042/mod01lec18.mp4">Model Adequacy Checking (Contd.)                                     </option>
<option value="111105042/mod01lec19.mp4">Model Adequacy Checking ( Contd.)                                    </option>
<option value="111105042/mod01lec20.mp4">Test for Influential Observations                                    </option>
<option value="111105042/mod01lec21.mp4">Transformation and Weighting to correct model inadequacies           </option>
<option value="111105042/mod01lec22.mp4">Transformation and Weighting to correct model inadequacies (Contd.)  </option>
<option value="111105042/mod01lec23.mp4">Transformation and Weighting to correct model inadequacies ( Contd.) </option>
<option value="111105042/mod01lec24.mp4">Dummy Variables                                                      </option>
<option value="111105042/mod01lec25.mp4">Dummy Variables (Contd.)                                             </option>
<option value="111105042/mod01lec26.mp4">Dummy Variables (Contd. )                                            </option>
<option value="111105042/mod01lec27.mp4">Polynomial Regression Models                                         </option>
<option value="111105042/mod01lec28.mp4">Polynomial Regression Models (Contd.)                                </option>
<option value="111105042/mod01lec29.mp4">Polynomial Regression Models (Contd. )                               </option>
<option value="111105042/mod01lec30.mp4">Generalized Linear Models                                            </option>
<option value="111105042/mod01lec31.mp4">Generalized Linear Models (Contd.)                                   </option>
<option value="111105042/mod01lec32.mp4">Non-Linear Estimation                                                </option>
<option value="111105042/mod01lec33.mp4">Regression Models with Autocorrelated Errors                         </option>
<option value="111105042/mod01lec34.mp4">Regression Models with Autocorrelated Errors (Contd.)                </option>
<option value="111105042/mod01lec35.mp4">Measurement Errors and Calibration Problem                           </option>
<option value="111105042/mod01lec36.mp4">Tutorial - I                                                         </option>
<option value="111105042/mod01lec37.mp4">Tutorial - II                                                        </option>
<option value="111105042/mod01lec38.mp4">Tutorial - III                                                       </option>
<option value="111105042/mod01lec39.mp4">Tutorial - IV                                                        </option>
<option value="111105042/mod01lec40.mp4">Tutorial - V                                                         </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111105043</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Statistical Inference</strong></td>
	<td><strong>Prof. Somesh Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111105043/mod01lec01.mp4">Introduction and Motivation </option>
      
      <option  value="111105043/mod01lec02.mp4">Basic Concepts of Point Estimations - I</option>
      
      <option  value="111105043/mod01lec03.mp4">Basic Concepts of Point Estimations - II</option>
      
      <option  value="111105043/mod01lec04.mp4">Finding Estimators - I</option>
      
      <option  value="111105043/mod01lec05.mp4">Finding Estimators - II</option>
      
      <option  value="111105043/mod01lec06.mp4">Finding Estimators - III</option>
      
      <option  value="111105043/mod01lec07.mp4">Properties of MLEs</option>
      
      <option  value="111105043/mod01lec08.mp4">Lower Bounds for Variance - I</option>
      
      <option  value="111105043/mod01lec09.mp4">Lower Bounds for Variance - II</option>
      
      <option  value="111105043/mod01lec10.mp4">Lower Bounds for Variance - III</option>
      
      <option  value="111105043/mod01lec11.mp4">Lower Bounds for Variance - IV</option>
      
      <option  value="111105043/mod01lec12.mp4">Sufficiency</option>
      
      <option  value="111105043/mod01lec13.mp4">Sufficiency and Information</option>
      
      <option  value="111105043/mod01lec14.mp4">Minimal Sufficiency, Completeness</option>
      
      <option  value="111105043/mod01lec15.mp4">UMVU Estimation, Ancillarity</option>
      
      <option  value="111105043/mod01lec16.mp4">Invariance - I</option>
      
      <option  value="111105043/mod01lec17.mp4">Invariance - II</option>
      
      <option  value="111105043/mod01lec18.mp4">Bayes and Minimax Estimation - I</option>
      
      <option  value="111105043/mod01lec19.mp4">Bayes and Minimax Estimation - II</option>
      
      <option  value="111105043/mod01lec20.mp4">Bayes and Minimax Estimation - III</option>
      
      <option  value="111105043/mod01lec21.mp4">Testing of Hypotheses : Basic Concepts </option>
      
      <option  value="111105043/mod01lec22.mp4">Neyman Pearson Fundamental Lemma</option>
      
      <option  value="111105043/mod01lec23.mp4">Applications of NP lemma</option>
      
      <option  value="111105043/mod01lec24.mp4">UMP Tests</option>
      
      <option  value="111105043/mod01lec25.mp4">UMP Tests (Contd.)</option>
      
      <option  value="111105043/mod01lec26.mp4">UMP Unbiased Tests</option>
      
      <option  value="111105043/mod01lec27.mp4">UMP Unbiased Tests (Contd.)</option>
      
      <option  value="111105043/mod01lec28.mp4">UMP Unbiased Tests : Applications </option>
      
      <option  value="111105043/mod01lec29.mp4">Unbiased Tests for Normal Populations </option>
      
      <option  value="111105043/mod01lec30.mp4">Unbiased Tests for Normal Populations (Contd.)</option>
      
      <option  value="111105043/mod01lec31.mp4">Likelihood Ratio Tests - I</option>
      
      <option  value="111105043/mod01lec32.mp4">Likelihood Ratio Tests - II</option>
      
      <option  value="111105043/mod01lec33.mp4">Likelihood Ratio Tests - III</option>
      
      <option  value="111105043/mod01lec34.mp4">Likelihood Ratio Tests - IV</option>
      
      <option  value="111105043/mod01lec35.mp4">Invariant Tests </option>
      
      <option  value="111105043/mod01lec36.mp4">Test for Goodness of Fit</option>
      
      <option  value="111105043/mod01lec37.mp4">Sequential Procedure </option>
      
      <option  value="111105043/mod01lec38.mp4">Sequential Procedure (Contd.)</option>
      
      <option  value="111105043/mod01lec39.mp4">Confidence  Intervals</option>
      
      <option  value="111105043/mod01lec40.mp4">Confidence  Intervals (Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111105069</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>A Basic Course in Real Analysis</strong></td>
	<td><strong>Prof. P.D. Srivastava</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111105069/mod01lec01.mp4">Rational Numbers and Rational Cuts</option>
      
      <option  value="111105069/mod01lec02.mp4">Irrational numbers, Dedekind's Theorem</option>
      
      <option  value="111105069/mod01lec03.mp4">Continuum and Exercises</option>
      
      <option  value="111105069/mod01lec04.mp4">Continuum and Exercises (Contd.)</option>
      
      <option  value="111105069/mod01lec05.mp4">Cantor's Theory of Irrational Numbers</option>
      
      <option  value="111105069/mod01lec06.mp4">Cantor's Theory of Irrational Numbers (Contd.)</option>
      
      <option  value="111105069/mod01lec07.mp4">Equivalence of Dedekind and Cantor's Theory</option>
      
      <option  value="111105069/mod01lec08.mp4">Finite, Infinite, Countable and Uncountable Sets of Real Numbers</option>
      
      <option  value="111105069/mod01lec09.mp4">Types of Sets with Examples, Metric Space</option>
      
      <option  value="111105069/mod01lec10.mp4">Various properties of open set, closure of a set</option>
      
      <option  value="111105069/mod01lec11.mp4">Ordered set, Least upper bound, greatest lower bound of a set</option>
      
      <option  value="111105069/mod01lec12.mp4">Compact Sets and its properties</option>
      
      <option  value="111105069/mod01lec13.mp4">Weiersstrass Theorem, Heine Borel Theorem, Connected set</option>
      
      <option  value="111105069/mod01lec14.mp4">Tutorial - II</option>
      
      <option  value="111105069/mod01lec15.mp4">Concept of limit of a sequence</option>
      
      <option  value="111105069/mod01lec16.mp4">Some Important limits, Ratio tests for sequences of Real Numbers</option>
      
      <option  value="111105069/mod01lec17.mp4">Cauchy theorems on limit of sequences with examples</option>
      
      <option  value="111105069/mod01lec18.mp4">Fundamental theorems on limits, Bolzano-Weiersstrass Theorem</option>
      
      <option  value="111105069/mod01lec19.mp4">Theorems on Convergent and divergent sequences</option>
      
      <option  value="111105069/mod01lec20.mp4">Cauchy sequence and its properties</option>
      
      <option  value="111105069/mod01lec21.mp4">Infinite series of real numbers</option>
      
      <option  value="111105069/mod01lec22.mp4">Comparison tests for series, Absolutely convergent and Conditional convergent series</option>
      
      <option  value="111105069/mod01lec23.mp4">Tests for absolutely convergent series</option>
      
      <option  value="111105069/mod01lec24.mp4">Raabe's test, limit of functions, Cluster point</option>
      
      <option  value="111105069/mod01lec25.mp4">Some results on limit of functions</option>
      
      <option  value="111105069/mod01lec26.mp4">Limit Theorems for functions</option>
      
      <option  value="111105069/mod01lec27.mp4">Extension of limit concept (one sided limits)</option>
      
      <option  value="111105069/mod01lec28.mp4">Continuity of Functions</option>
      
      <option  value="111105069/mod01lec29.mp4">Properties of Continuous Functions</option>
      
      <option  value="111105069/mod01lec30.mp4">Boundedness Theorem, Max-Min Theorem and Bolzano's theorem</option>
      
      <option  value="111105069/mod01lec31.mp4">Uniform Continuity and Absolute Continuity</option>
      
      <option  value="111105069/mod01lec32.mp4">Types of Discontinuities, Continuity and Compactness</option>
      
      <option  value="111105069/mod01lec33.mp4">Continuity and Compactness (Contd.), Connectedness</option>
      
      <option  value="111105069/mod01lec34.mp4">Differentiability of real valued function, Mean Value Theorem</option>
      
      <option  value="111105069/mod01lec35.mp4">Mean Value Theorem (Contd.)</option>
      
      <option  value="111105069/mod01lec36.mp4">Application of MVT , Darboux Theorem, L Hospital Rule</option>
      
      <option  value="111105069/mod01lec37.mp4">L'Hospital Rule and Taylor's Theorem</option>
      
      <option  value="111105069/mod01lec38.mp4">Tutorial - III</option>
      
      <option  value="111105069/mod01lec39.mp4">Riemann/Riemann Stieltjes Integral </option>
      
      <option  value="111105069/mod01lec40.mp4">Existence of Reimann Stieltjes Integral </option>
      
      <option  value="111105069/mod01lec41.mp4">Properties of Reimann Stieltjes Integral</option>
      
      <option  value="111105069/mod01lec42.mp4">Properties of Reimann Stieltjes Integral (Contd.)</option>
      
      <option  value="111105069/mod01lec43.mp4">Definite and Indefinite Integral</option>
      
      <option  value="111105069/mod01lec44.mp4">Fundamental Theorems of Integral Calculus</option>
      
      <option  value="111105069/mod01lec45.mp4">Improper Integrals </option>
      
      <option  value="111105069/mod01lec46.mp4">Convergence Test for Improper Integrals</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111106044</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>An Introduction to Riemann Surfaces and Algebraic Curves: Complex 1-Tori and Elliptic Curves </strong></td>
	<td><strong>DDr. T.E. Venkata Balaji</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111106044/mod01lec01.mp4">The Idea of a Riemann Surface                                                                                                         </option>
<option value="111106044/mod01lec02.mp4">Simple Examples of Riemann Surfaces                                                                                                   </option>
<option value="111106044/mod01lec03.mp4">Maximal Atlases and Holomorphic Maps of Riemann Surfaces                                                                              </option>
<option value="111106044/mod01lec04.mp4">A Riemann Surface Structure on a Cylinder                                                                                             </option>
<option value="111106044/mod01lec05.mp4">A Riemann Surface Structure on a Torus                                                                                                </option>
<option value="111106044/mod01lec06.mp4">Riemann Surface Structures on Cylinders and Tori via Covering Spaces                                                                  </option>
<option value="111106044/mod01lec07.mp4">Moebius Transformations Make up Fundamental Groups of Riemann Surfaces                                                                </option>
<option value="111106044/mod01lec08.mp4">Homotopy and the First Fundamental Group                                                                                              </option>
<option value="111106044/mod01lec09.mp4">A First Classification of Riemann Surfaces                                                                                            </option>
<option value="111106044/mod01lec10.mp4">The Importance of the Path-lifting Property                                                                                           </option>
<option value="111106044/mod01lec11.mp4">Fundamental groups as Fibres of the Universal covering Space                                                                          </option>
<option value="111106044/mod01lec12.mp4">The Monodromy Action                                                                                                                  </option>
<option value="111106044/mod01lec13.mp4">The Universal covering as a Hausdorff Topological Space                                                                               </option>
<option value="111106044/mod01lec14.mp4">The Construction of the Universal Covering Map                                                                                        </option>
<option value="111106044/mod01lec15A.mp4">  Completion of the Construction of the Universal Covering: Universality of the Universal Covering                                    </option>
<option value="111106044/mod01lec15B.mp4">  Completion of the Construction of the Universal Covering: The Fundamental Group of the base as the Deck Transformation Group        </option>
<option value="111106044/mod01lec16.mp4">The Riemann Surface Structure on the Topological Covering of a Riemann Surface                                                        </option>
<option value="111106044/mod01lec17.mp4">Riemann Surfaces with Universal Covering the Plane or the Sphere                                                                      </option>
<option value="111106044/mod01lec18.mp4">Classifying Complex Cylinders: Riemann Surfaces with Universal Covering the Complex Plane                                             </option>
<option value="111106044/mod01lec19.mp4">Characterizing Moebius Transformations with a Single Fixed Point                                                                      </option>
<option value="111106044/mod01lec20.mp4">Characterizing Moebius Transformations with Two Fixed Points                                                                          </option>
<option value="111106044/mod01lec21.mp4">Torsion-freeness of the Fundamental Group of a Riemann Surface                                                                        </option>
<option value="111106044/mod01lec22.mp4">Characterizing Riemann Surface Structures on Quotients of the Upper Half-Plane with Abelian Fundamental Groups                        </option>
<option value="111106044/mod01lec23.mp4">Classifying Annuli up to Holomorphic Isomorphism                                                                                      </option>
<option value="111106044/mod01lec24.mp4">Orbits of the Integral Unimodular Group in the Upper Half-Plane                                                                       </option>
<option value="111106044/mod01lec25.mp4">Galois Coverings are precisely Quotients by Properly Discontinuous Free Actions                                                       </option>
<option value="111106044/mod01lec26.mp4">Local Actions at the Region of Discontinuity of a Kleinian Subgroup of Moebius Transformations                                        </option>
<option value="111106044/mod01lec27.mp4">Quotients by Kleinian Subgroups give rise to Riemann Surfaces                                                                         </option>
<option value="111106044/mod01lec28.mp4">The Unimodular Group is Kleinian                                                                                                      </option>
<option value="111106044/mod01lec29.mp4">The Necessity of Elliptic Functions for the Classification of Complex Tori                                                            </option>
<option value="111106044/mod01lec30.mp4">The Uniqueness Property of the Weierstrass Phe-function associated to a Lattice in the Plane                                          </option>
<option value="111106044/mod01lec31.mp4">The First Order Degree Two Cubic Ordinary Differential Equation satisfied by the Weierstrass Phe-function                             </option>
<option value="111106044/mod01lec32.mp4">The Values of the Weierstrass Phe-function at the Zeros of its Derivative are nonvanishing Analytic Functions on the Upper Half-Plane </option>
<option value="111106044/mod01lec33.mp4">The Construction of a Modular Form of Weight Two on the Upper Half-Plane                                                              </option>
<option value="111106044/mod01lec34.mp4">The Fundamental Functional Equations satisfied by the Modular Form of Weight Two on the Upper Half-Plane                              </option>
<option value="111106044/mod01lec35.mp4">The Weight Two Modular Form assumes Real Values on the Imaginary Axis in the Upper Half-plane                                         </option>
<option value="111106044/mod01lec36.mp4">The Weight Two Modular Form Vanishes at Infinity                                                                                      </option>
<option value="111106044/mod01lec37A.mp4">The Weight Two Modular Form Decays Exponentially in a Neighbourhood of Infinity                                                       </option>
<option value="111106044/mod01lec37B.mp4">A Suitable Restriction of the Weight Two Modular Form is a Holomorphic Conformal Isomorphism onto the Upper Half-Plane                </option>
<option value="111106044/mod01lec38.mp4">The J-Invariant of a Complex Torus (or) of an Algebraic Elliptic Curve                                                                </option>
<option value="111106044/mod01lec39.mp4">A Fundamental Region in the Upper Half-Plane for the Elliptic Modular J-Invariant                                                     </option>
<option value="111106044/mod01lec40.mp4">The Fundamental Region in the Upper Half-Plane for the Unimodular Group                                                               </option>
<option value="111106044/mod01lec41.mp4">A Region in the Upper Half-Plane Meeting Each Unimodular Orbit Exactly Once                                                           </option>
<option value="111106044/mod01lec42.mp4">Moduli of Elliptic Curves                                                                                                             </option>
<option value="111106044/mod01lec43.mp4">Punctured Complex Tori are Elliptic Algebraic Affine Plane Cubic Curves in Complex 2-Space                                            </option>
<option value="111106044/mod01lec44.mp4">The Natural Riemann Surface Structure on an Algebraic Affine Nonsingular Plane Curve                                                  </option>
<option value="111106044/mod01lec45A.mp4">Complex Projective 2-Space as a Compact Complex Manifold of Dimension Two                                                             </option>
<option value="111106044/mod01lec45B.mp4">Complex Tori are the same as Elliptic Algebraic Projective Curves                                                                     </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111106046</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Fourier Analysis</strong></td>
	<td><strong>Dr. R. Radha,Dr. S. Thangavelu</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111106046/course_title.pdf">Course Title</option>
      
      <option  value="111106046/contents.pdf">Contents</option>
      
      <option  value="111106046/chapter1.pdf">Chapter 1</option>
      
      <option  value="111106046/chapter2.pdf">Chapter 2</option>
      
      <option  value="111106046/chapter3.pdf">Chapter 3</option>
      
      <option  value="111106046/chapter4.pdf">Chapter 4</option>
      
      <option  value="111106046/chapter5.pdf">Chapter 5</option>
      
      <option  value="111106046/chapter6.pdf">Chapter 6</option>
      
      <option  value="111106046/chapter7.pdf">Chapter 7</option>
      
      <option  value="111106046/appendix.pdf">Appendix</option>
      
      <option  value="111106046/Biblography.pdf">Biblography</option>
      
      <option  value="111106046/Mathematicians at a glance.pdf">Mathematicians at a glance</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111106047</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Functional Analysis</strong></td>
	<td><strong>Prof. M.T. Nair</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111106047/Coursetitle.pdf">Course title</option>
      
      <option  value="111106047/contents.pdf">Contents</option>
      
      <option  value="111106047/Preface.pdf">Preface</option>
      
      <option  value="111106047/chapter1.pdf">Chapter 1</option>
      
      <option  value="111106047/chapter2.pdf">Chapter 2</option>
      
      <option  value="111106047/chapter3.pdf">Chapter 3</option>
      
      <option  value="111106047/chapter4.pdf">Chapter 4</option>
      
      <option  value="111106047/Reference.pdf">References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111106050</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Graph Theory</strong></td>
	<td><strong>Prof. S.A. Choudum</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111106050/Contents.pdf">Course Contents</option>
      
      <option  value="111106050/Module1.pdf">Preliminaries</option>
      
      <option  value="111106050/Module2.pdf">Connected graphs and shortest paths</option>
      
      <option  value="111106050/Module3.pdf">Trees</option>
      
      <option  value="111106050/Module4.pdf">Special classes of graphs</option>
      
      <option  value="111106050/Module5.pdf">Eulerian Graphs</option>
      
      <option  value="111106050/Module6.pdf">Hamilton Graphs</option>
      
      <option  value="111106050/Module7.pdf">Independent sets, coverings and matchings</option>
      
      <option  value="111106050/Module8.pdf">Vertex-colorings</option>
      
      <option  value="111106050/Module9.pdf">Edge colorings</option>
      
      <option  value="111106050/Module10.pdf">Planar Graphs</option>
      
      <option  value="111106050/Module11.pdf">Directed Graphs</option>
      
      <option  value="111106050/List-of-Books.pdf">List of Books</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111106051</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong> Linear Algebra  </strong></td>
	<td><strong>Dr. K.C. Sivakumar </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111106051/mod01lec01.mp4">1. Introduction to the Course Contents.                                                                      </option>
<option value="111106051/mod01lec02.mp4">2. Linear Equations                                                                                          </option>
<option value="111106051/mod01lec03.mp4">3a. Equivalent Systems of Linear Equations I: Inverses of Elementary Row-operations, Row-equivalent matrices </option>
<option value="111106051/mod01lec04.mp4">3b. Equivalent Systems of Linear Equations II: Homogeneous Equations, Examples                               </option>
<option value="111106051/mod01lec05.mp4">4. Row-reduced Echelon Matrices                                                                              </option>
<option value="111106051/mod01lec06.mp4">5. Row-reduced Echelon Matrices and Non-homogeneous Equations                                                </option>
<option value="111106051/mod01lec07.mp4">6. Elementary Matrices, Homogeneous Equations and Non-homogeneous Equations                                  </option>
<option value="111106051/mod01lec08.mp4">7. Invertible matrices, Homogeneous Equations Non-homogeneous Equations                                      </option>
<option value="111106051/mod02lec09.mp4">8. Vector spaces                                                                                             </option>
<option value="111106051/mod02lec10.mp4">9. Elementary Properties in Vector Spaces. Subspaces                                                         </option>
<option value="111106051/mod02lec11.mp4">10. Subspaces (continued), Spanning Sets, Linear Independence, Dependence                                    </option>
<option value="111106051/mod03lec12.mp4">11. Basis for a vector space                                                                                 </option>
<option value="111106051/mod03lec13.mp4">12. Dimension of a vector space                                                                              </option>
<option value="111106051/mod03lec14.mp4">13. Dimensions of Sums of Subspaces                                                                          </option>
<option value="111106051/mod04lec15.mp4">14. Linear Transformations                                                                                   </option>
<option value="111106051/mod04lec16.mp4">15. The Null Space and the Range Space of a Linear Transformation                                            </option>
<option value="111106051/mod04lec17.mp4">16. The Rank-Nullity-Dimension Theorem. Isomorphisms Between Vector Spaces                                   </option>
<option value="111106051/mod04lec18.mp4">17. Isomorphic Vector Spaces, Equality of the Row-rank and the Column-rank I                                 </option>
<option value="111106051/mod04lec19.mp4">18. Equality of the Row-rank and the Column-rank II                                                          </option>
<option value="111106051/mod05lec20.mp4">19. The Matrix of a Linear Transformation                                                                    </option>
<option value="111106051/mod05lec21.mp4">20. Matrix for the Composition and the Inverse. Similarity Transformation                                    </option>
<option value="111106051/mod06lec22.mp4">21. Linear Functionals. The Dual Space. Dual Basis I                                                         </option>
<option value="111106051/mod06lec23.mp4">22. Dual Basis II. Subspace Annihilators I                                                                   </option>
<option value="111106051/mod06lec24.mp4">23. Subspace Annihilators II                                                                                 </option>
<option value="111106051/mod06lec25.mp4">24. The Double Dual. The Double Annihilator                                                                  </option>
<option value="111106051/mod06lec26.mp4">25. The Transpose of a Linear Transformation. Matrices of a Linear Transformation and its       Transpose    </option>
<option value="111106051/mod07lec27.mp4">26. Eigenvalues and Eigenvectors of Linear Operators                                                         </option>
<option value="111106051/mod07lec28.mp4">27. Diagonalization of Linear Operators. A Characterization                                                  </option>
<option value="111106051/mod07lec29.mp4">28.  The Minimal Polynomial                                                                                  </option>
<option value="111106051/mod07lec30.mp4">29. The Cayley-Hamilton Theorem                                                                              </option>
<option value="111106051/mod08lec31.mp4">30. Invariant Subspaces                                                                                      </option>
<option value="111106051/mod08lec32.mp4">31. Triangulability, Diagonalization in Terms of the Minimal Polynomial                                      </option>
<option value="111106051/mod08lec33.mp4">32. Independent Subspaces and Projection Operators                                                           </option>
<option value="111106051/mod09lec34.mp4">33. Direct Sum Decompositions and Projection Operators I                                                     </option>
<option value="111106051/mod09lec35.mp4">34. Direct Sum Decomposition and Projection Operators II                                                     </option>
<option value="111106051/mod10lec36.mp4">35. The Primary Decomposition Theorem and Jordan Decomposition                                               </option>
<option value="111106051/mod10lec37.mp4">36. Cyclic Subspaces and Annihilators                                                                        </option>
<option value="111106051/mod10lec38.mp4">37. The Cyclic Decomposition Theorem I                                                                       </option>
<option value="111106051/mod10lec39.mp4">38. The Cyclic Decomposition Theorem II. The Rational Form                                                   </option>
<option value="111106051/mod11lec40.mp4">39. Inner Product Spaces                                                                                     </option>
<option value="111106051/mod11lec41.mp4">40. Norms on Vector spaces. The Gram-Schmidt Procedure I                                                     </option>
<option value="111106051/mod11lec42.mp4">41. The Gram-Schmidt Procedure II. The QR Decomposition.                                                     </option>
<option value="111106051/mod11lec43.mp4">42. Bessel's Inequality, Parseval's Indentity, Best Approximation                                            </option>
<option value="111106051/mod12lec44.mp4">43. Best Approximation: Least Squares Solutions                                                              </option>
<option value="111106051/mod12lec45.mp4">44. Orthogonal Complementary Subspaces, Orthogonal Projections                                               </option>
<option value="111106051/mod12lec46.mp4">45. Projection Theorem. Linear Functionals                                                                   </option>
<option value="111106051/mod13lec47.mp4">46. The Adjoint Operator                                                                                     </option>
<option value="111106051/mod13lec48.mp4">47. Properties of the Adjoint Operation. Inner Product Space Isomorphism                                     </option>
<option value="111106051/mod14lec49.mp4">48. Unitary Operators                                                                                        </option>
<option value="111106051/mod14lec50.mp4">49. Unitary operators II. Self-Adjoint Operators I.                                                          </option>
<option value="111106051/mod14lec51.mp4">50. Self-Adjoint Operators II - Spectral Theorem                                                             </option>
<option value="111106051/mod14lec52.mp4">51. Normal Operators - Spectral Theorem                                                                      </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111106052</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Mathematical Logic</strong></td>
	<td><strong>Prof. Arindama Singh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111106052/mod01lec01.mp4">Sets and Strings                            </option>
<option value="111106052/mod01lec02.mp4">Syntax of Propositional Logic               </option>
<option value="111106052/mod01lec03.mp4">Unique Parsing                              </option>
<option value="111106052/mod01lec04.mp4">Semantics of PL                             </option>
<option value="111106052/mod01lec05.mp4">Consequences and Equivalences               </option>
<option value="111106052/mod01lec06.mp4">Five results about PL                       </option>
<option value="111106052/mod01lec07.mp4">Calculations and Informal Proofs            </option>
<option value="111106052/mod01lec08.mp4">More Informal Proofs                        </option>
<option value="111106052/mod01lec09.mp4">Normal forms                                </option>
<option value="111106052/mod01lec10.mp4">SAT and 3SAT                                </option>
<option value="111106052/mod01lec11.mp4">Horn-SAT and Resolution                     </option>
<option value="111106052/mod01lec12.mp4">Resolution                                  </option>
<option value="111106052/mod01lec13.mp4">Adequacy of Resolution                      </option>
<option value="111106052/mod01lec14.mp4">Adequacy and Resolution Strategies          </option>
<option value="111106052/mod01lec15.mp4">Propositional Calculus (PC)                 </option>
<option value="111106052/mod01lec16.mp4">Some Results about PC                       </option>
<option value="111106052/mod01lec17.mp4">Arguing with Proofs                         </option>
<option value="111106052/mod01lec18.mp4">Adequacy of PC                              </option>
<option value="111106052/mod01lec19.mp4">Compactness & Analytic Tableau              </option>
<option value="111106052/mod01lec20.mp4">Examples of Tableau Proofs                  </option>
<option value="111106052/mod01lec21.mp4">Adequacy of Tableaux                        </option>
<option value="111106052/mod01lec22.mp4">Syntax of First order Logic (FL)            </option>
<option value="111106052/mod01lec23.mp4">Symbolization & Scope of Quantifiers        </option>
<option value="111106052/mod01lec24.mp4">Hurdles in giving Meaning                   </option>
<option value="111106052/mod01lec25.mp4">Semantics of FL                             </option>
<option value="111106052/mod01lec26.mp4">Relevance Lemma                             </option>
<option value="111106052/mod01lec27.mp4">Validity, Satisfiability & Equivalence      </option>
<option value="111106052/mod01lec28.mp4">Six Results about FL                        </option>
<option value="111106052/mod01lec29.mp4">Laws in FL                                  </option>
<option value="111106052/mod01lec30.mp4">Quantifier Laws and Consequences            </option>
<option value="111106052/mod01lec31.mp4">Examples of Informal Proofs and Calculation </option>
<option value="111106052/mod01lec32.mp4">Prenex Form Conversion                      </option>
<option value="111106052/mod01lec33.mp4">Skolem Form                                 </option>
<option value="111106052/mod01lec34.mp4">Syntatic Interpretation                     </option>
<option value="111106052/mod01lec35.mp4">Herbrand's Theorem                          </option>
<option value="111106052/mod01lec36.mp4">Most General Unifiers                       </option>
<option value="111106052/mod01lec37.mp4">Resolution Rules                            </option>
<option value="111106052/mod01lec38.mp4">Resolution Examples                         </option>
<option value="111106052/mod01lec39.mp4">Axiomatic System FC                         </option>
<option value="111106052/mod01lec40.mp4">FC, Semidecidability of FL, and Tableau     </option>
<option value="111106052/mod01lec41.mp4">Analytic Tableau for FL                     </option>
<option value="111106052/mod01lec42.mp4">Goedel's Incompleteness Theorems            </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111106053</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Real Analysis </strong></td>
	<td><strong>Prof. S.H. Kulkarni</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111106053/mod01lec01.mp4">Introduction                                                               </option>
<option value="111106053/mod01lec02.mp4">Functions and Relations                                                    </option>
<option value="111106053/mod01lec03.mp4">Finite and Infinite Sets                                                   </option>
<option value="111106053/mod01lec04.mp4">Countable Sets                                                             </option>
<option value="111106053/mod01lec05.mp4">Uncountable Sets, Cardinal Numbers                                         </option>
<option value="111106053/mod02lec01.mp4">Real Number System                                                         </option>
<option value="111106053/mod02lec02.mp4">LUB Axiom                                                                  </option>
<option value="111106053/mod02lec03.mp4">Sequences of Real Numbers                                                  </option>
<option value="111106053/mod02lec04.mp4">Sequences of Real Numbers - continued                                      </option>
<option value="111106053/mod02lec05.mp4">Sequences of Real Numbers - continued...                                   </option>
<option value="111106053/mod02lec06.mp4">Infinite Series of Real Numbers                                            </option>
<option value="111106053/mod02lec07.mp4">Series of nonnegative Real Numbers                                         </option>
<option value="111106053/mod02lec08.mp4">Conditional Convergence                                                    </option>
<option value="111106053/mod03lec01.mp4">Metric Spaces: Definition and Examples                                     </option>
<option value="111106053/mod03lec02.mp4">Metric Spaces: Examples and Elementary Concepts                            </option>
<option value="111106053/mod03lec03.mp4">Balls and Spheres                                                          </option>
<option value="111106053/mod03lec04.mp4">Open Sets                                                                  </option>
<option value="111106053/mod03lec05.mp4">Closure Points, Limit Points and isolated Points                           </option>
<option value="111106053/mod03lec06.mp4">Closed sets                                                                </option>
<option value="111106053/mod04lec01.mp4">Sequences in Metric Spaces                                                 </option>
<option value="111106053/mod04lec02.mp4">Completeness                                                               </option>
<option value="111106053/mod04lec03.mp4">Baire Category Theorem                                                     </option>
<option value="111106053/mod05lec01.mp4">Limit and Continuity of a Function defined on a Metric space               </option>
<option value="111106053/mod05lec02.mp4">Continuous Functions on a Metric Space                                     </option>
<option value="111106053/mod05lec03.mp4">Uniform Continuity                                                         </option>
<option value="111106053/mod06lec01.mp4">Connectedness                                                              </option>
<option value="111106053/mod06lec02.mp4">Connected Sets                                                             </option>
<option value="111106053/mod06lec03.mp4">Compactness                                                                </option>
<option value="111106053/mod06lec04.mp4">Compactness - Continued                                                    </option>
<option value="111106053/mod06lec05.mp4">Characterizations of Compact Sets                                          </option>
<option value="111106053/mod06lec06.mp4">Continuous Functions on Compact Sets                                       </option>
<option value="111106053/mod06lec07.mp4">Types of Discontinuity                                                     </option>
<option value="111106053/mod07lec01.mp4">Differentiation                                                            </option>
<option value="111106053/mod07lec02.mp4">Mean Value Theorems                                                        </option>
<option value="111106053/mod07lec03.mp4">Mean Value Theorems - Continued                                            </option>
<option value="111106053/mod07lec04.mp4">Taylor's Theorem                                                           </option>
<option value="111106053/mod07lec05.mp4">Differentiation of Vector Valued Functions                                 </option>
<option value="111106053/mod08lec01.mp4">Integration                                                                </option>
<option value="111106053/mod08lec02.mp4">Integrability                                                              </option>
<option value="111106053/mod08lec03.mp4">Integrable Functions                                                       </option>
<option value="111106053/mod08lec04.mp4">Integrable Functions - Continued                                           </option>
<option value="111106053/mod08lec05.mp4">Integration as a Limit of Sum                                              </option>
<option value="111106053/mod08lec06.mp4">Integration and Differentiation                                            </option>
<option value="111106053/mod08lec07.mp4">Integration of Vector Valued Functions                                     </option>
<option value="111106053/mod08lec08.mp4">More Theorems on Integrals                                                 </option>
<option value="111106053/mod09lec01.mp4">Sequences and Series of Functions                                          </option>
<option value="111106053/mod09lec02.mp4">Uniform Convergence                                                        </option>
<option value="111106053/mod09lec03.mp4">Uniform Convergence and Integration                                        </option>
<option value="111106053/mod09lec04.mp4">Uniform Convergence and Differentiation                                    </option>
<option value="111106053/mod09lec05.mp4">Construction of Everywhere Continuous Nowhere Differentiable Function      </option>
<option value="111106053/mod09lec06.mp4">Approximation of a Continuous Function by Polynomials: Weierstrass Theorem </option>
<option value="111106053/mod09lec07.mp4">Equicontinuous family of Functions: Arzela - Ascoli Theorem                </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111107063</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Numerical Solution of Ordinary and Partial Differential Equations</strong></td>
	<td><strong>Dr. Rama Bhargava,Dr. Sunita Gakkhar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="111107063/module1/lecture1/lecture1.pdf">Numerical solution of first order ordinary differential equations</option>
      
      <option  value="111107063/module1/lecture2/lecture2.pdf">Numerical Methods: Euler method</option>
      
      <option  value="111107063/module1/lecture3/lecture3.pdf">Modified Euler Method</option>
      
      <option  value="111107063/module1/lecture4/lecture4.pdf">Runge Kutta Method</option>
      
      <option  value="111107063/module1/lecture5/lecture5.pdf">Fourth Order Runge Kutta Methods</option>
      
      <option  value="111107063/module1/lecture6/lecture6.pdf">Higher order Runge Kutta Methods</option>
      
      <option  value="111107063/module2/lecture1/lecture1.pdf"> Multi Step Methods Predictor corrector Methods </option>
      
      <option  value="111107063/module2/lecture2/lecture2.pdf">Multi Step Methods Predictor corrector Methods Contd�</option>
      
      <option  value="111107063/module2/lecture3/lecture3.pdf">Multi Step Methods Adams Bashforth method</option>
      
      <option  value="111107063/module2/lecture4/lecture4.pdf">Multi Step Methods Adams Moulton method</option>
      
      <option  value="111107063/module3/lecture1/lecture1.pdf">Systems of Differential Equations </option>
      
      <option  value="111107063/module3/lecture2/lecture2.pdf">Higher Order Equations</option>
      
      <option  value="111107063/module3/lecture3/lecture3.pdf">Stiff Differential equations</option>
      
      <option  value="111107063/module4/lecture1/lecture1.pdf">Finite Difference  Methods: Dirichlet type boundary condition</option>
      
      <option  value="111107063/module4/lecture2/lecture2.pdf">Finite Difference Methods: Mixed boundary condition</option>
      
      <option  value="111107063/module4/lecture3/lecture3.pdf">Shooting Method</option>
      
      <option  value="111107063/module4/lecture4/lecture4.pdf">Shooting Method contd�</option>
      
      <option  value="111107063/module5/lecture1/lecture1.pdf">Solution by Finite Difference Methods</option>
      
      <option  value="111107063/module5/lecture2/lecture2.pdf">Shooting Methods</option>
      
      <option  value="111107063/module5/lecture3/lecture3.pdf">Shooting Methods Contd�</option>
      
      <option  value="111107063/module6/lecture1/lecture1.pdf">Introduction of PDE, Classification and Various type of conditions</option>
      
      <option  value="111107063/module6/lecture2/lecture2.pdf">Finite Difference representation of various Derivatives</option>
      
      <option  value="111107063/module7/lecture1/lecture1.pdf">Parabolic Partial Differential Equations : One dimensional equation : Explicit  method. </option>
      
      <option  value="111107063/module7/lecture2/lecture2.pdf">Crank Nicolson method and Fully Implicit method</option>
      
      <option  value="111107063/module7/lecture3/lecture3.pdf">Three Time Level Schemes</option>
      
      <option  value="111107063/module7/lecture4/lecture4.pdf">Extension to 2d Parabolic Partial Differential Equations</option>
      
      <option  value="111107063/module8/lecture1/lecture1.pdf">Compatibility and Stability of 1d Parabolic PDE</option>
      
      <option  value="111107063/module8/lecture2/lecture2.pdf">Stability of one-dimensional Parabolic PDE</option>
      
      <option  value="111107063/module8/lecture3/lecture3.pdf">Convergence of one?dimensional Parabolic PDE</option>
      
      <option  value="111107063/module9/lecture1/lecture1.pdf">Elliptic Partial Differential Equations : Solution in Cartesian coordinate system</option>
      
      <option  value="111107063/module9/lecture2/lecture2.pdf">Successive Over Relaxation Method</option>
      
      <option  value="111107063/module9/lecture3/lecture3.pdf">Elliptic Partial Differential Equation in Polar System</option>
      
      <option  value="111107063/module9/lecture4/lecture4.pdf">Alternating Direction Implicit Method</option>
      
      <option  value="111107063/module9/lecture5/lecture5.pdf">Treatment of Irregular Boundaries</option>
      
      <option  value="111107063/module9/lecture6/lecture6.pdf">Methods for Solving tridiagonal System</option>
      
      <option  value="111107063/module10/lecture1/lecture1.pdf">Explicit Method for Solving Hyperbolic PDE</option>
      
      <option  value="111107063/module10/lecture2/lecture2.pdf">Implicit Method to Hyperbolic PDE</option>
      
      <option  value="111107063/module10/lecture3/lecture3.pdf">Convergence & Stability</option>
      
      <option  value="111107063/module10/lecture4/lecture4.pdf">Method of Characteristics</option>
      
      <option  value="111107063/module10/lecture5/lecture5.pdf">Examples and conclusions</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111108066</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Advanced Matrix Theory and Linear Algebra for Engineers</strong></td>
	<td><strong>Prof. Vittal Rao</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option value="111108066/mod01lec01.mp4">Prologue Part 1</option>
<option value="111108066/mod01lec02.mp4">Prologue Part 2</option>
<option value="111108066/mod01lec03.mp4">Prologue Part 3</option>
<option value="111108066/mod02lec04.mp4">Linear Systems Part 1</option>
<option value="111108066/mod02lec05.mp4">Linear Systems Part 2</option>
<option value="111108066/mod02lec06.mp4">Linear Systems Part 3</option>
<option value="111108066/mod02lec07.mp4">Linear Systems Part 4</option>
<option value="111108066/mod03lec08.mp4">Vector Spaces Part 1 </option>
<option value="111108066/mod03lec09.mp4">Vector Spaces Part 2</option>
<option value="111108066/mod04lec10.mp4">Linear Independence and Subspaces Part 1</option>
<option value="111108066/mod04lec11.mp4">Linear Independence and Subspaces Part 2</option>
<option value="111108066/mod04lec12.mp4">Linear Independence and Subspaces Part 3</option>
<option value="111108066/mod04lec13.mp4">Linear Independence and Subspaces Part 4</option>
<option value="111108066/mod05lec14.mp4">Basis Part 1</option>
<option value="111108066/mod05lec15.mp4">Basis Part 2</option>
<option value="111108066/mod05lec16.mp4">Basis Part 3</option>
<option value="111108066/mod06lec17.mp4">Linear Transformations Part 1</option>
<option value="111108066/mod06lec18.mp4">Linear Transformations Part 2</option>
<option value="111108066/mod06lec19.mp4">Linear Transformations Part 3</option>
<option value="111108066/mod06lec20.mp4">Linear Transformations Part 4</option>
<option value="111108066/mod06lec21.mp4">Linear Transformations Part 5</option>
<option value="111108066/mod07lec22.mp4">Inner Product and Orthogonality  Part 1</option>
<option value="111108066/mod07lec23.mp4">Inner Product and Orthogonality Part 2</option>
<option value="111108066/mod07lec24.mp4">Inner Product and Orthogonality Part 3</option>
<option value="111108066/mod07lec25.mp4">Inner Product and Orthogonality Part 4</option>
<option value="111108066/mod07lec26.mp4">Inner Product and Orthogonality Part 5</option>
<option value="111108066/mod07lec27.mp4">Inner Product and Orthogonality Part 6</option>
<option value="111108066/mod08lec28.mp4">Diagonalization Part 1</option>
<option value="111108066/mod08lec29.mp4">Diagonalization Part 2</option>
<option value="111108066/mod08lec30.mp4">Diagonalization Part 3</option>
<option value="111108066/mod08lec31.mp4">Diagonalization Part 4</option>
<option value="111108066/mod09lec32.mp4">Hermitian and Symmetric matrices Part 1</option>
<option value="111108066/mod09lec33.mp4">Hermitian and Symmetric matrices Part 2</option>
<option value="111108066/mod09lec34.mp4">Hermitian and Symmetric matrices Part 3</option>
<option value="111108066/mod09lec35.mp4">Hermitian and Symmetric matrices Part 4</option>
<option value="111108066/mod10lec36.mp4">Singular Value Decomposition (SVD) Part 1</option>
<option value="111108066/mod10lec37.mp4">Singular Value Decomposition (SVD) Part 2</option>
<option value="111108066/mod11lec38.mp4">Back To Linear Systems Part 1</option>
<option value="111108066/mod11lec39.mp4">Back To Linear Systems Part 2</option>
<option value="111108066/mod12lec40.mp4">Epilogue</option>
          </select></td>
	
	</tr>
	</form>
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111108081</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Ordinary Differential Equations and Applications  </strong></td>
	<td><strong>A. K. Nandakumaran, P. S. Datti, Raju K. George</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="111108081/mod1lec01.mp4">General Introduction                                   </option>
<option value="111108081/mod1lec02.mp4">Examples                                               </option>
<option value="111108081/mod1lec03.mp4">Examples Continued I                                   </option>
<option value="111108081/mod1lec04.mp4">Examples Continued II                                  </option>
<option value="111108081/mod2lec05.mp4">Linear Algebra                                         </option>
<option value="111108081/mod2lec06.mp4">Linear Algebra Continued I                             </option>
<option value="111108081/mod2lec07.mp4">Linear Algebra Continued II                            </option>
<option value="111108081/mod2lec08.mp4">Analysis                                               </option>
<option value="111108081/mod2lec09.mp4">Analysis Continued                                     </option>
<option value="111108081/mod3lec10.mp4">First Order Linear Equations                           </option>
<option value="111108081/mod3lec11.mp4">Exact Equations                                        </option>
<option value="111108081/mod3lec12.mp4">Second Order Linear Equations                          </option>
<option value="111108081/mod3lec13.mp4">Second Order Linear Equations Continued I              </option>
<option value="111108081/mod3lec14.mp4">Second Order Linear Equations Continued II             </option>
<option value="111108081/mod4lec15.mp4">Well-posedness and Examples of IVP                     </option>
<option value="111108081/mod4lec16.mp4">Gronwall's Lemma                                       </option>
<option value="111108081/mod4lec17.mp4">Basic Lemma and Uniqueness Theorem                     </option>
<option value="111108081/mod4lec18.mp4">Picard's Existence and Uniqueness Theorem              </option>
<option value="111108081/mod4lec19.mp4">Picard's Existence and Uniqueness Continued            </option>
<option value="111108081/mod4lec20.mp4">Cauchy Peano Existence Theorem                         </option>
<option value="111108081/mod4lec21.mp4">Existence using Fixed Point Theorem                    </option>
<option value="111108081/mod4lec22.mp4">Continuation of Solutions                              </option>
<option value="111108081/mod4lec23.mp4">Series Solution                                        </option>
<option value="111108081/mod5lec24.mp4">General System and Diagonalizability                   </option>
<option value="111108081/mod5lec25.mp4">2 by 2 systems and Phase Plane Analysis                </option>
<option value="111108081/mod5lec26.mp4">2 by 2 systems and Phase Plane Analysis Continued      </option>
<option value="111108081/mod5lec27.mp4">General Systems                                        </option>
<option value="111108081/mod5lec28.mp4">General Systems Continued and Non-homogeneous Systems  </option>
<option value="111108081/mod6lec29.mp4">Basic Definitions and Examples                         </option>
<option value="111108081/mod6lec30.mp4">Stability Equilibrium Points                           </option>
<option value="111108081/mod6lec31.mp4">Stability Equilibrium Points  Continued I              </option>
<option value="111108081/mod6lec32.mp4">Stability Equilibrium Points  Continued II             </option>
<option value="111108081/mod6lec33.mp4">Second Order Linear Equations Continued III            </option>
<option value="111108081/mod6lec34.mp4">Lyapunov Function                                      </option>
<option value="111108081/mod6lec35.mp4">Lyapunov Function Continued                            </option>
<option value="111108081/mod6lec36.mp4">Periodic Orbits and Poincare Bendixon Theory           </option>
<option value="111108081/mod6lec37.mp4">Periodic Orbits and Poincare Bendixon Theory Continued </option>
<option value="111108081/mod7lec38.mp4">Linear Second Order Equations                          </option>
<option value="111108081/mod7lec39.mp4">General Second Order Equations                         </option>
<option value="111108081/mod7lec40.mp4">General Second Order Equations Continued               </option>
</select></td>
	
	</tr>
	</form>
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>111104032</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Probability and Distributions </strong></td>
	<td><strong>Prof. Neeraj Misra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="111104032/module1/lecture1.pdf">Lec1</option>
 <option  value="111104032/module1/lecture2.pdf">Lec2</option>
 <option  value="111104032/module1/lecture3.pdf">Lec3</option>
 <option  value="111104032/module1/lecture4.pdf">Lec4</option>
 <option  value="111104032/module1/lecture5.pdf">Lec5</option>
 <option  value="111104032/module1/lecture6.pdf">Lec6</option>
 <option  value="111104032/module1/Problem1.pdf">Problem1</option>
 <option  value="111104032/module2/lecture7.pdf">Lec7</option>
 <option  value="111104032/module2/lecture8.pdf">Lec8</option>
 <option  value="111104032/module2/lecture9.pdf">Lec9</option>
 <option  value="111104032/module2/lecture10.pdf">Lec10</option>
 <option  value="111104032/module2/lecture11.pdf">Lec11</option>
 <option  value="111104032/module2/Problem2.pdf">Problem2</option>
 <option  value="111104032/module3/lecture12.pdf">Lec12</option>
 <option  value="111104032/module3/lecture13.pdf">Lec13</option>
 <option  value="111104032/module3/lecture14.pdf">Lec14</option>
 <option  value="111104032/module3/lecture15.pdf">Lec15</option>
 <option  value="111104032/module3/lecture16.pdf">Lec16</option>
 <option  value="111104032/module3/Problem3.pdf">Problem3</option>
 <option  value="111104032/module4/lecture17.pdf">Lec17</option>
 <option  value="111104032/module4/lecture18.pdf">Lec18</option>
 <option  value="111104032/module4/lecture19.pdf">Lec19</option>
 <option  value="111104032/module4/Problem4.pdf">Problem4</option>
 <option  value="111104032/module5/lecture20.pdf">Lec20</option>
 <option  value="111104032/module5/lecture21.pdf">Lec21</option>
 <option  value="111104032/module5/lecture22.pdf">Lec22</option>
 <option  value="111104032/module5/lecture23.pdf">Lec23</option>
 <option  value="111104032/module5/lecture24.pdf">Lec24</option>
 <option  value="111104032/module5/Problem5.pdf">Problem5</option>
 <option  value="111104032/module6/lecture25.pdf">Lec25</option>
 <option  value="111104032/module6/lecture26.pdf">Lec26</option>
 <option  value="111104032/module6/lecture27.pdf">Lec27</option>
 <option  value="111104032/module6/lecture28.pdf">Lec28</option>
 <option  value="111104032/module6/lecture29.pdf">Lec29</option>
 <option  value="111104032/module6/lecture30.pdf">Lec30</option>
 <option  value="111104032/module6/lecture31.pdf">Lec31</option>
 <option  value="111104032/module6/lecture32.pdf">Lec32</option>
 <option  value="111104032/module6/lecture33.pdf">Lec33</option>
 <option  value="111104032/module6/lecture34.pdf">Lec34</option>
 <option  value="111104032/module6/lecture35.pdf">Lec35</option>
 <option  value="111104032/module6/lecture36.pdf">Lec36</option>
 <option  value="111104032/module6/Problem6.pdf">Problem6</option>
 <option  value="111104032/module7/lecture37.pdf">Lec37</option>
 <option  value="111104032/module7/lecture38.pdf">Lec38</option>
 <option  value="111104032/module7/lecture39.pdf">Lec39</option>
 <option  value="111104032/module7/lecture40.pdf">Lec40</option>
 <option  value="111104032/module7/lecture41.pdf">Lec41</option>
 <option  value="111104032/module7/lecture42.pdf">Lec42</option>
 <option  value="111104032/module7/Problem7.pdf">Problem7</option>




          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111104071</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Foundations of Optimization</strong></td>
	<td><strong>Dr. Joydeep Dutta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="111104071/mod01lec01.mp4">Lecture-01  </option>
 <option  value="111104071/mod01lec02.mp4">Lecture-02  </option>
 <option  value="111104071/mod01lec03.mp4">Lecture-03 </option>
 <option  value="111104071/mod01lec04.mp4">Lecture-04  </option>
 <option  value="111104071/mod01lec05.mp4">Lecture-05 </option>
 <option  value="111104071/mod01lec06.mp4">Lecture-06 </option>
 <option  value="111104071/mod01lec07.mp4">Lecture-07  </option>
 <option  value="111104071/mod01lec08.mp4">Lecture-08  </option>
 <option  value="111104071/mod01lec09.mp4">Lecture-09  </option>
 <option  value="111104071/mod01lec10.mp4">Lecture-10 </option>
 <option  value="111104071/mod01lec11.mp4">Lecture-11  </option>
 <option  value="111104071/mod01lec12.mp4">Lecture-12 </option>
 <option  value="111104071/mod01lec13.mp4">Lecture-13  </option>
 <option  value="111104071/mod01lec14.mp4">Lecture-14  </option>
 <option  value="111104071/mod01lec15.mp4">Lecture-15 </option>
 <option  value="111104071/mod01lec16.mp4">Lecture-16  </option>
 <option  value="111104071/mod01lec17.mp4">Lecture-17</option>
 <option  value="111104071/mod01lec18.mp4">Lecture-18  </option>
 <option  value="111104071/mod01lec19.mp4">Lecture-19  </option>
 <option  value="111104071/mod01lec20.mp4">Lecture-20 </option>
 <option  value="111104071/mod01lec21.mp4">Lecture-21  </option>
 <option  value="111104071/mod01lec22.mp4">Lecture-22 </option>
 <option  value="111104071/mod01lec23.mp4">Lecture-23 </option>
 <option  value="111104071/mod01lec24.mp4">Lecture-24  </option>
 <option  value="111104071/mod01lec25.mp4">Lecture-25 </option>
 <option  value="111104071/mod01lec26.mp4">Lecture-26</option>
 <option  value="111104071/mod01lec27.mp4">Lecture-27 </option>
 <option  value="111104071/mod01lec28.mp4">Lecture-28 </option>
 <option  value="111104071/mod01lec29.mp4">Lecture-29 </option>
 <option  value="111104071/mod01lec30.mp4">Lecture-30  </option>
 <option  value="111104071/mod01lec31.mp4">Lecture-31  </option>
 <option  value="111104071/mod01lec32.mp4">Lecture-32  </option>
 <option  value="111104071/mod01lec33.mp4">Lecture-33  </option>
 <option  value="111104071/mod01lec34.mp4">Lecture-34  </option>
 <option  value="111104071/mod01lec35.mp4">Lecture-35  </option>
 <option  value="111104071/mod01lec36.mp4">Lecture-36 </option>
 <option  value="111104071/mod01lec37.mp4">Lecture-37  </option>
 <option  value="111104071/mod01lec38.mp4">Lecture-38 </option>






          </select></td>
	
	</tr>
	</form>
    
    
 <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111105039</strong></td>
	<td><strong>Mathematics</strong></td>
	<td><strong>Optimization</strong></td>
	<td><strong>Prof. A. Goswami Dr. Debjani Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option value="111105039/Lecture-01.mp4"> Lecture-01</option>
<option value="111105039/Lecture-02.mp4"> Lecture-02</option>
<option value="111105039/Lecture-03.mp4"> Lecture-03</option>
<option value="111105039/Lecture-04.mp4"> Lecture-04</option>
<option value="111105039/Lecture-05.mp4"> Lecture-05</option>
<option value="111105039/Lecture-06.mp4"> Lecture-06</option>
<option value="111105039/Lecture-07.mp4"> Lecture-07</option>
<option value="111105039/Lecture-08.mp4"> Lecture-08</option>
<option value="111105039/Lecture-09.mp4"> Lecture-09</option>
<option value="111105039/Lecture-10.mp4"> Lecture-10</option>
<option value="111105039/Lecture-11.mp4"> Lecture-11</option>
<option value="111105039/Lecture-12.mp4"> Lecture-12</option>
<option value="111105039/Lecture-13.mp4"> Lecture-13</option>
<option value="111105039/Lecture-14.mp4"> Lecture-14</option>
<option value="111105039/Lecture-15.mp4"> Lecture-15</option>
<option value="111105039/Lecture-16.mp4"> Lecture-16</option>
<option value="111105039/Lecture-17.mp4"> Lecture-17</option>
<option value="111105039/Lecture-18.mp4"> Lecture-18</option>
<option value="111105039/Lecture-19.mp4"> Lecture-19</option>
<option value="111105039/Lecture-20.mp4"> Lecture-20</option>
<option value="111105039/Lecture-21.mp4"> Lecture-21</option>
<option value="111105039/Lecture-22.mp4"> Lecture-22</option>
<option value="111105039/Lecture-23.mp4"> Lecture-23</option>
<option value="111105039/Lecture-24.mp4"> Lecture-24</option>
<option value="111105039/Lecture-25.mp4"> Lecture-25</option>
<option value="111105039/Lecture-26.mp4"> Lecture-26</option>
<option value="111105039/Lecture-27.mp4"> Lecture-27</option>
<option value="111105039/Lecture-28.mp4"> Lecture-28</option>
<option value="111105039/Lecture-29.mp4"> Lecture-29</option>
<option value="111105039/Lecture-30.mp4"> Lecture-30</option>
<option value="111105039/Lecture-31.mp4"> Lecture-31</option>
<option value="111105039/Lecture-32.mp4"> Lecture-32</option>
<option value="111105039/Lecture-33.mp4"> Lecture-33</option>
<option value="111105039/Lecture-34.mp4"> Lecture-34</option>
<option value="111105039/Lecture-35.mp4"> Lecture-35</option>
<option value="111105039/Lecture-36.mp4"> Lecture-36</option>
<option value="111105039/Lecture-37.mp4"> Lecture-37</option>
<option value="111105039/Lecture-38.mp4"> Lecture-38</option>
<option value="111105039/Lecture-39.mp4"> Lecture-39</option>
<option value="111105039/Lecture-40.mp4"> Lecture-40</option>

          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>111107058</strong></td>
	<td><strong> Mathematics </strong></td>
	<td><strong> Discrete Mathematics </strong></td>
	<td><strong> Dr. Aditi Gangopadhyay, Dr. Sugata Gangopadhyay </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Roorkee </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="111107058/mod01lec01.mp4"> Introduction to the theory of sets </option>
      
      <option  value="111107058/mod01lec02.mp4"> Set operation and laws of set operation  </option>
      
      <option  value="111107058/mod01lec03.mp4"> The principle of inclusion and exclusion </option>
      
      <option  value="111107058/mod01lec04.mp4"> Application of the principle of inclusion and exclusion </option>
      
      <option  value="111107058/mod02lec01.mp4"> Fundamentals of logic </option>
      
      <option  value="111107058/mod02lec02.mp4"> Logical Inferences </option>
      
      <option  value="111107058/mod02lec03.mp4"> Methods of proof of an implication </option>
      
      <option  value="111107058/mod02lec04.mp4"> First order logic(1) </option>
      
      <option  value="111107058/mod02lec05.mp4"> First order logic(2) </option>
      
      <option  value="111107058/mod02lec06.mp4"> Rules of influence for quantified propositions </option>
      
      <option  value="111107058/mod03lec01.mp4"> Mathematical Induction(1) </option>
      
      <option  value="111107058/mod03lec02.mp4"> Mathematical Induction(2) </option>
      
        <option  value="111107058/mod04lec01.mp4"> Sample space, events </option>
      
      <option  value="111107058/mod04lec02.mp4"> Probability, conditional probability </option>
      
      <option  value="111107058/mod04lec03.mp4"> Independent events, Bayes theorem </option>
      
      <option  value="111107058/mod04lec04.mp4"> Information and mutual information </option>
      
      <option  value="111107058/mod05lec01.mp4"> Basic definition </option>
      
      <option  value="111107058/mod05lec02.mp4"> Isomorphism and sub graphs </option>
      
      <option  value="111107058/mod05lec03.mp4"> Walks, paths and circuits operations on graphs </option>
      
      <option  value="111107058/mod05lec04.mp4"> Euler graphs, Hamiltonian circuits </option>
      
      <option  value="111107058/mod05lec05.mp4"> Shortest path problem </option>
      
      <option  value="111107058/mod05lec06.mp4"> Planar graphs </option>
      
      <option  value="111107058/mod06lec01.mp4"> Basic definition. </option>
      
      <option  value="111107058/mod06lec02.mp4"> Properties of relations </option>
      
      <option  value="111107058/mod06lec03.mp4"> Graph of relations </option>
      
      <option  value="111107058/mod06lec04.mp4"> Matrix of relation </option>
      
      <option  value="111107058/mod06lec05.mp4"> Closure of relaton(1) </option>
      
      <option  value="111107058/mod06lec06.mp4"> Closure of relaton(2) </option>
      
      <option  value="111107058/mod06lec07.mp4"> Warshall's algorithm </option>
      
      <option  value="111107058/mod07lec01.mp4"> Partially ordered relation </option>
      
      <option  value="111107058/mod07lec02.mp4"> Partially ordered sets </option>
      
      <option  value="111107058/mod07lec03.mp4"> Lattices </option>
      
      <option  value="111107058/mod08lec01.mp4"> Boolean algebra </option>
      
      <option  value="111107058/mod08lec02.mp4"> Boolean function(1) </option>
      
      <option  value="111107058/mod08lec03.mp4"> Boolean function(2) </option>
      
      <option  value="111107058/mod09lec01.mp4"> Discrete numeric function </option>
      
      <option  value="111107058/mod09lec02.mp4"> Generating function </option>
      
      <option  value="111107058/mod10lec01.mp4"> Introduction to recurrence relations </option>

<option  value="111107058/mod10lec02.mp4"> Second order recurrence relation with constant coefficients(1) </option>
      
    <option  value="111107058/mod10lec03.mp4"> Second order recurrence relation with constant coefficients(2) </option>

<option  value="111107058/mod10lec04.mp4"> Application of recurrence relation </option>

          </select>
</td>
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>111106083</strong></td>
      <td><strong>Mathematics</strong></td>
      <td><strong>NOC:An invitation to mathematics</strong></td>
      <td><strong>Prof. Sankaran Vishwanath</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="111106083/mod01lec01.mp4">Introduction</option>
          <option  value="111106083/mod01lec02.mp4">Long division</option>
          <option  value="111106083/mod01lec03.mp4">Applications of Long division</option>
          <option  value="111106083/mod01lec04.mp4">Lagrange interpolation</option>
          <option  value="111106083/mod01lec05.mp4">The 0-1 idea in other contexts - dot and cross product</option>
          <option  value="111106083/mod01lec06.mp4">Taylors formula</option>
          <option  value="111106083/mod01lec07.mp4">The Chebyshev polynomials</option>
          <option  value="111106083/mod01lec08.mp4">Counting number of monomials - several variables</option>
          <option  value="111106083/mod02lec09.mp4">Permutations, combinations and the binomial theorem.</option>
          <option  value="111106083/mod02lec10.mp4">Combinations with repetition, and counting monomials.</option>
          <option  value="111106083/mod02lec11.mp4">Combinations with restrictions, recurrence relations</option>
          <option  value="111106083/mod02lec12.mp4">Fibonacci numbers; an identity and a bijective proof.</option>
          <option  value="111106083/mod02lec13.mp4">Permutations and cycle type</option>
          <option  value="111106083/mod02lec14.mp4">The sign of a permutation, composition of permutations</option>
          <option  value="111106083/mod02lec15.mp4">Rules for drawing tangle diagrams</option>
          <option  value="111106083/mod02lec16.mp4">Signs and cycle decompositions</option>
          <option  value="111106083/mod02lec17.mp4">Sorting lists of numbers, and crossings in tangle diagrams</option>
          <option  value="111106083/mod03lec18.mp4">Real and integer valued polynomials</option>
          <option  value="111106083/mod03lec19.mp4">Integer valued polynomials revisited.</option>
          <option  value="111106083/mod04lec20.mp4">Functions on the real line, continuity</option>
          <option  value="111106083/mod04lec21.mp4">The intermediate value property.</option>
          <option  value="111106083/mod04lec22.mp4">Visualizing functions.</option>
          <option  value="111106083/mod04lec23.mp4">Functions on the plane, Rigid motions.</option>
          <option  value="111106083/mod04lec24.mp4">More examples of functions on the plane, dilations.</option>
          <option  value="111106083/mod04lec25.mp4">Composition of functions</option>
          <option  value="111106083/mod04lec26.mp4">Affine and Linear transformations</option>
          <option  value="111106083/mod04lec27.mp4">Length and Area dilation, the derivative</option>
          <option  value="111106083/mod05lec28.mp4">Examples-I</option>
          <option  value="111106083/mod05lec29.mp4">Examples-II</option>
          <option  value="111106083/mod06lec30.mp4">Linear equations, Lagrange interpolation revisited</option>
          <option  value="111106083/mod06lec31.mp4"> Completed Matrices in combinatorics</option>
          <option  value="111106083/mod06lec32.mp4">Polynomials acting on matrices</option>
          <option  value="111106083/mod07lec33.mp4">Divisibility, prime numbers</option>
          <option  value="111106083/mod07lec34.mp4">Congruences, Modular arithmetic</option>
          <option  value="111106083/mod07lec35.mp4"> The Chinese remainder theorem</option>
          <option  value="111106083/mod07lec36.mp4">The Euclidean algorithm, the 0-1 idea and the Chinese remainder theorem</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>111106084</strong></td>
      <td><strong>Mathematics</strong></td>
      <td><strong>Advanced Complex Analysis - Part 1:Zeros of Analytic Functions,Analytic continuation, Monodromy, Hyperbolic Geometry and the Reimann Mapping Theorem</strong></td>
      <td><strong>Dr. T.E. Venkata Balaji</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="111106084/mod01lec01.mp4">Fundamental Theorems Connected with Zeros of Analytic Functions</option>
          <option  value="111106084/mod01lec02.mp4">The Argument (Counting) Principle, Rouche's Theorem and The Fundamental Theorem of Algebra</option>
          <option  value="111106084/mod01lec03.mp4">Morera's Theorem and Normal Limits of Analytic Functions</option>
          <option  value="111106084/mod01lec04.mp4">Hurwitz's Theorem and Normal Limits of Univalent Functions</option>
          <option  value="111106084/mod02lec05.mp4">Local Constancy of Multiplicities of Assumed Values</option>
          <option  value="111106084/mod02lec06.mp4">The Open Mapping Theorem</option>
          <option  value="111106084/mod03lec07.mp4">Introduction to the Inverse Function Theorem</option>
          <option  value="111106084/mod03lec08.mp4">Completion of the Proof of the Inverse Function Theorem: The Integral Inversion Formula for the Inverse Function</option>
          <option  value="111106084/mod03lec09.mp4">Univalent Analytic Functions have never-zero Derivatives and are Analytic Isomorphisms</option>
          <option  value="111106084/mod04lec10.mp4">Introduction to the Implicit Function Theorem</option>
          <option  value="111106084/mod04lec11.mp4">Proof of the Implicit Function Theorem: Topological Preliminaries</option>
          <option  value="111106084/mod04lec12.mp4">Proof of the Implicit Function Theorem: The Integral Formula for & Analyticity of the Explicit Function</option>
          <option  value="111106084/mod05lec13.mp4">Doing Complex Analysis on a Real Surface: The Idea of a Riemann Surface</option>
          <option  value="111106084/mod05lec14.mp4"> F(z,w)=0 is naturally a Riemann Surface</option>
          <option  value="111106084/mod05lec15.mp4">Constructing the Riemann Surface for the Complex Logarithm</option>
          <option  value="111106084/mod05lec16.mp4">Constructing the Riemann Surface for the m-th root function</option>
          <option  value="111106084/mod05lec17.mp4">The Riemann Surface for the functional inverse of an analytic mapping at a critical point</option>
          <option  value="111106084/mod05lec18.mp4">The Algebraic nature of the functional inverses of an analytic mapping at a critical point</option>
          <option  value="111106084/mod06lec19.mp4">The Idea of a Direct Analytic Continuation or an Analytic Extension</option>
          <option  value="111106084/mod06lec20.mp4">General or Indirect Analytic Continuation and the Lipschitz Nature of the Radius of Convergence</option>
          <option  value="111106084/mod06lec21A.mp4">Analytic Continuation Along Paths via Power Series Part A</option>
          <option  value="111106084/mod06lec21B.mp4">Analytic Continuation Along Paths via Power Series Part B</option>
          <option  value="111106084/mod06lec22.mp4">Continuity of Coefficients occurring in Families of Power Series defining Analytic Continuations along Paths</option>
          <option  value="111106084/mod07lec23.mp4"> Analytic Continuability along Paths: Dependence on the Initial Function and on the Path - First Version of the Monodromy Theorem</option>
          <option  value="111106084/mod07lec24.mp4">Maximal Domains of Direct and Indirect Analytic Continuation: SecondVersion of the Monodromy Theorem</option>
          <option  value="111106084/mod07lec26.mp4">Deducing the Second (Simply Connected) Version of the Monodromy Theorem from the First (Homotopy) Version</option>
          <option  value="111106084/mod07lec27.mp4">Existence and Uniqueness of Analytic Continuations on Nearby Paths</option>
          <option  value="111106084/mod07lec28.mp4">Proof of the First (Homotopy) Version of the Monodromy Theorem</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>112104189</strong></td>
      <td><strong>Mathematics</strong></td>
      <td><strong>NOC:Basic Calculus for Engineers, Scientists and Economists</strong></td>
      <td><strong>Dr. Joydeep Dutta</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  111104085/  mod01lec01.mp4  ">  Numbers </option>
          <option  value="  111104085/  mod01lec02.mp4  ">  Functions-1 </option>
          <option  value="  111104085/  mod01lec03.mp4  ">  Sequence-1  </option>
          <option  value="  111104085/  mod01lec04.mp4  ">  Sequence-2  </option>
          <option  value="  111104085/  mod01lec05.mp4  ">  Limits and Continuity-1 </option>
          <option  value="  111104085/  mod01lec06.mp4  ">  Limits and Continuity-2 </option>
          <option  value="  111104085/  mod02lec07.mp4  ">  Limits And Continuity- 3  </option>
          <option  value="  111104085/  mod02lec08.mp4  ">  Derivative- 1 </option>
          <option  value="  111104085/  mod02lec09.mp4  ">  Derivative- 2 </option>
          <option  value="  111104085/  mod02lec10.mp4  ">  Maxima And Minima </option>
          <option  value="  111104085/  mod02lec11.mp4  ">  Mean-Value Theorem And Taylors Expansion-1  </option>
          <option  value="  111104085/  mod02lec12.mp4  ">  Mean-Value Theorem And Taylors Expansion-2  </option>
          <option  value="  111104085/  mod03lec13.mp4  ">  Integration -1  </option>
          <option  value="  111104085/  mod03lec14.mp4  ">  Integration - 2 </option>
          <option  value="  111104085/  mod03lec15.mp4  ">  Integration By Parts  </option>
          <option  value="  111104085/  mod03lec16.mp4  ">  Definite Integral </option>
          <option  value="  111104085/  mod03lec17.mp4  ">  Riemann Integration -1  </option>
          <option  value="  111104085/  mod03lec18.mp4  ">  Riemann Integration - 2 </option>
          <option  value="  111104085/  mod04lec19.mp4  ">  Functions Of Two Or More Variables  </option>
          <option  value="  111104085/  mod04lec20.mp4  ">  Limits And Continuity Of Functions Of Two Variable  </option>
          <option  value="  111104085/  mod04lec21.mp4  ">  Differentiation Of Functions Of Two Variables - 1 </option>
          <option  value="  111104085/  mod04lec22.mp4  ">  Differentiation Of Functions Of Two Variables - 2 </option>
          <option  value="  111104085/  mod04lec23.mp4  ">  Unconstrained Minimization Of Funtions Of Two Variables </option>
          <option  value="  111104085/  mod04lec24.mp4  ">  Constrained Minimization And Lagrange Multiplier Rules  </option>
          <option  value="  111104085/  mod05lec25.mp4  ">  Infinite Series - 1 </option>
          <option  value="  111104085/  mod05lec26.mp4  ">  Infinite Series - 2 </option>
          <option  value="  111104085/  mod05lec27.mp4  ">  Infinite Series - 3 </option>
          <option  value="  111104085/  mod05lec28.mp4  ">  Multiple Integrals - 1  </option>
          <option  value="  111104085/  mod05lec29.mp4  ">  Multiple Integrals - 2  </option>
          <option  value="  111104085/  mod05lec30.mp4  ">  Muliple Integrals - 3 </option>
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
