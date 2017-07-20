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
<title>Biotechnology</title>
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
	<td><strong>102101003</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Biomathematics</strong></td>
	<td><strong>Dr. Ranjith Padinhateeri</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> 
    <select name="type1" id="type1" onchange='this.form.submit();'>
    
      <option  value="#">Select </option>
      
      <option  value="102101003/mod01lec01.mp4">L1-Introduction</option>
      
      <option  value="102101003/mod01lec02.mp4">L2-Graphs and functions - I</option>
      
      <option  value="102101003/mod01lec03.mp4">L3-Graphs and functions - II</option>
      
      <option  value="102101003/mod01lec04.mp4">L4-Functions and derivatives</option>
      
      <option  value="102101003/mod01lec05.mp4">L5-Calculation of derivatives</option>
      
      <option  value="102101003/mod01lec06.mp4">L6-Differentiation and its application in Biology - I</option>
      
      <option  value="102101003/mod01lec07.mp4">L7-Differentiation and its application in Biology - II</option>
      
      <option  value="102101003/mod01lec08.mp4">L8-Differentiation and its application in Biology - III</option>
      
      <option  value="102101003/mod01lec09.mp4">L9-Differentiation and its application in Biology - IV</option>
      
      <option  value="102101003/mod01lec10.mp4">L10-Integration - I</option>
      
      <option  value="102101003/mod01lec11.mp4">L11-Integration - II</option>
      
      <option  value="102101003/mod01lec12.mp4">L12-Differential equations-I</option>
      
      <option  value="102101003/mod01lec13.mp4">L13-Differential equations - II</option>
      
      <option  value="102101003/mod01lec14.mp4">L14-Vectors - I</option>
      
      <option  value="102101003/mod01lec15.mp4">L15-Vectors - II</option>
      
      <option  value="102101003/mod01lec16.mp4">L16-Vectors - III</option>
      
      <option  value="102101003/mod01lec17.mp4">L17-Nernst equation</option>
      
      <option  value="102101003/mod01lec18.mp4">L18-Diffusion-I : Diffusion equation</option>
      
      <option  value="102101003/mod01lec19.mp4">L19-Diffusion - II: Mean-square displacement</option>
      
      <option  value="102101003/mod01lec20.mp4">L20-Diffusion-III : Einstein�s relation</option>
      
      <option  value="102101003/mod01lec21.mp4">L21-Statistics : Mean and variance</option>
      
      <option  value="102101003/mod01lec22.mp4">L22-Statistics: Distribution function</option>
      
      <option  value="102101003/mod01lec23.mp4">L23-Understanding Normal distribution</option>
      
      <option  value="102101003/mod01lec24.mp4">L24-Fitting a function to experimental data</option>
      
      <option  value="102101003/mod01lec25.mp4">L25-Size of a flexible protein: Simplest model</option>
      
      <option  value="102101003/mod01lec26.mp4">L26-Uniform and Poisson distributions; Knudson�s analysis</option>
      
      <option  value="102101003/mod01lec27.mp4">L27-Fourier Series-I</option>
      
      <option  value="102101003/mod01lec28.mp4">L28-Fourier Series-II</option>
      
      <option  value="102101003/mod01lec29.mp4">L29-Fourier transform</option>
      
      <option  value="102101003/mod01lec30.mp4">L30-Master equation: Polymerization dynamics, Molecular motor motion</option>
      
      <option  value="102101003/mod01lec31.mp4">L31-Evolution: Simplest model</option>
      
      <option  value="102101003/mod01lec32.mp4">L32-Tutorial - I</option>
      
      <option  value="102101003/mod01lec33.mp4">L33-Tutorial-II</option>
      
      <option  value="102101003/mod01lec34.mp4">L34-Temperature, Energy and Entropy</option>
      
      <option  value="102101003/mod01lec35.mp4">L35-Partition function, Free energy</option>
      
      <option  value="102101003/mod01lec36.mp4">L36-Bending fluctuations of DNA and spring-like proteins</option>
      
      <option  value="102101003/mod01lec37.mp4">L37-Force-extension and looping of DNA</option>
      
      <option  value="102101003/mod01lec38.mp4">L38-Thermodynamics of protein organization along DNA</option>
      
      <option  value="102101003/mod01lec39.mp4">L39-Learning mathematics with the help of a computer</option>
          </select>
          
    </td>
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102101007</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Proteomics: Principles and Techniques</strong></td>
	<td><strong>Prof. Sanjeeva Srivastava</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
    
      <option  value="#">Select </option>
      <option  value="102101007/mod01lec01.mp4">VIDEO-L1</option>
      
      <option  value="102101007/downloads/PPT/LEC-01-PPT.pdf">PPT-L1</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-01-Handout.pdf">HANDOUT-L1</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz1.swf">QUIZ-L1</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-01.swf">ASSIGNMENTS-L1</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-01-TRANSCRIPT.pdf">TRANSCRIPT-L1</option>
      
      <option  value="102101007/mod02lec02.mp4">VIDEO-L2</option>
      
      <option  value="102101007/downloads/PPT/LEC-02-PPT.pdf">PPT-L2</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-02-Handout.pdf">HANDOUT-L2</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz2.swf">QUIZ-L2</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-02.swf">ASSIGNMENTS-L2</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-02-TRANSCRIPT.pdf">TRANSCRIPT-L2</option>
      
      <option  value="102101007/mod03lec03.mp4">VIDEO-L3</option>
      
      <option  value="102101007/downloads/PPT/LEC-03-PPT.pdf">PPT-L3</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-03-Handout.pdf">HANDOUT-L3</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz3.swf">QUIZ-L3</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-03.swf">ASSIGNMENTS-L3</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-03-TRANSCRIPT.pdf">TRANSCRIPT-L3</option>
      
      <option  value="102101007/mod04lec04.mp4">VIDEO-L4</option>
      
      <option  value="102101007/downloads/PPT/LEC-04-PPT.pdf">PPT-L4</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-04-Handout.pdf">HANDOUT-L4</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz4.swf">QUIZ-L4</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-04.swf">ASSIGNMENTS-L4</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-04-TRANSCRIPT.pdf">TRANSCRIPT-L4</option>
      
      <option  value="102101007/mod05lec05.mp4">VIDEO-L5</option>
      
      <option  value="102101007/downloads/PPT/LEC-05-PPT.pdf">PPT-L5</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-05-Handout.pdf">HANDOUT-L5</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz5.swf">QUIZ-L5</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-05.swf">ASSIGNMENTS-L5</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-05-TRANSCRIPT.pdf">TRANSCRIPT-L5</option>
      
      <option  value="102101007/mod06lec06.mp4">VIDEO-L6</option>
      
      <option  value="102101007/downloads/PPT/LEC-06-PPT.pdf">PPT-L6</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-06-Handout.pdf">HANDOUT-L6</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz6.swf">QUIZ-L6</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-06.swf">ASSIGNMENTS-L6</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-06-TRANSCRIPT.pdf">TRANSCRIPT-L6</option>
      
      <option  value="102101007/mod07lec07.mp4">VIDEO-L7</option>
      
      <option  value="102101007/downloads/PPT/LEC-07-PPT.pdf">PPT-L7</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-07-Handout.pdf">HANDOUT-L7</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz7.swf">QUIZ-L7</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-07.swf">ASSIGNMENTS-L7</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-07-TRANSCRIPT.pdf">TRANSCRIPT-L7</option>
      
      <option  value="102101007/mod08lec08.mp4">VIDEO-L8</option>
      
      <option  value="102101007/downloads/PPT/LEC-08-PPT.pdf">PPT-L8</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-08-Handout.pdf">HANDOUT-L8</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz8.swf">QUIZ-L8</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-08.swf">ASSIGNMENTS-L8</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-08-TRANSCRIPT.pdf">TRANSCRIPT-L8</option>
      
      <option  value="102101007/mod09lec09.mp4">VIDEO-L9</option>
      
      <option  value="102101007/downloads/PPT/LEC-09-PPT.pdf">PPT-L9</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-09-Handout.pdf">HANDOUT-L9</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz9.swf">QUIZ-L9</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-09.swf">ASSIGNMENTS-L9</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-09-TRANSCRIPT.pdf">TRANSCRIPT-L9</option>
      
      <option  value="102101007/mod10lec10.mp4">VIDEO-L10</option>
      
      <option  value="102101007/downloads/PPT/LEC-10-PPT.pdf">PPT-L10</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-10-Handout.pdf">HANDOUT-L10</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz10.swf">QUIZ-L10</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-10.swf">ASSIGNMENTS-L10</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-10-TRANSCRIPT.pdf">TRANSCRIPT-L10</option>
      
      <option  value="102101007/mod11lec11.mp4">VIDEO-L11</option>
      
      <option  value="102101007/downloads/PPT/LEC-11-PPT.pdf">PPT-L11</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-11-Handout.pdf">HANDOUT-L11</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz11.swf">QUIZ-L11</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-11.swf">ASSIGNMENTS-L11</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-11-TRANSCRIPT.pdf">TRANSCRIPT-L11</option>
      
      <option  value="102101007/mod12lec12.mp4">VIDEO-L12</option>
      
      <option  value="102101007/downloads/PPT/LEC-12-PPT.pdf">PPT-L12</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-12-Handout.pdf">HANDOUT-L12</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz12.swf">QUIZ-L12</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-12.swf">ASSIGNMENTS-L12</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-12-TRANSCRIPT.pdf">TRANSCRIPT-L12</option>
      
      <option  value="102101007/mod13lec13.mp4">VIDEO-L13</option>
      
      <option  value="102101007/downloads/PPT/LEC-13-PPT.pdf">PPT-L13</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-13-Handout.pdf">HANDOUT-L13</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz13.swf">QUIZ-L13</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-13.swf">ASSIGNMENTS-L13</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-13-TRANSCRIPT.pdf">TRANSCRIPT-L13</option>
      
      <option  value="102101007/mod14lec14.mp4">VIDEO-L14</option>
      
      <option  value="102101007/downloads/PPT/LEC-14-PPT.pdf">PPT-L14</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-14-Handout.pdf">HANDOUT-L14</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz14.swf">QUIZ-L14</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-14.swf">ASSIGNMENTS-L14</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-14-TRANSCRIPT.pdf">TRANSCRIPT-L14</option>
      
      <option  value="102101007/mod15lec15.mp4">VIDEO-L15</option>
      
      <option  value="102101007/downloads/PPT/LEC-15-PPT.pdf">PPT-L15</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-15-Handout.pdf">HANDOUT-L15</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz15.swf">QUIZ-L15</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-15.swf">ASSIGNMENTS-L15</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-15-TRANSCRIPT.pdf">TRANSCRIPT-L15</option>
      
      <option  value="102101007/mod16lec16.mp4">VIDEO-L16</option>
      
      <option  value="102101007/downloads/PPT/LEC-16-PPT.pdf">PPT-L16</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-16-Handout.pdf">HANDOUT-L16</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz16.swf">QUIZ-L16</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-16.swf">ASSIGNMENTS-L16</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-16-TRANSCRIPT.pdf">TRANSCRIPT-L16</option>
      
      <option  value="102101007/mod17lec17.mp4">VIDEO-L17</option>
      
      <option  value="102101007/downloads/PPT/LEC-17-PPT.pdf">PPT-L17</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-17-Handout.pdf">HANDOUT-L17</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz17.swf">QUIZ-L17</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-17.swf">ASSIGNMENTS-L17</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-17-TRANSCRIPT.pdf">TRANSCRIPT-L17</option>
      
      <option  value="102101007/mod18lec18.mp4">VIDEO-L18</option>
      
      <option  value="102101007/downloads/PPT/LEC-18-PPT.pdf">PPT-L18</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-18-Handout.pdf">HANDOUT-L18</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz18.swf">QUIZ-L18</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-18.swf">ASSIGNMENTS-L18</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-18-TRANSCRIPT.pdf">TRANSCRIPT-L18</option>
      
      <option  value="102101007/mod19lec19.mp4">VIDEO-L19</option>
      
      <option  value="102101007/downloads/PPT/LEC-19-PPT.pdf">PPT-L19</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-19-Handout.pdf">HANDOUT-L19</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz19.swf">QUIZ-L19</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-19.swf">ASSIGNMENTS-L19</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-19-TRANSCRIPT.pdf">TRANSCRIPT-L19</option>
      
      <option  value="102101007/mod20lec20.mp4">VIDEO-L20</option>
      
      <option  value="102101007/downloads/PPT/LEC-20-PPT.pdf">PPT-L20</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-20-Handout.pdf">HANDOUT-L20</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz20.swf">QUIZ-L20</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-20.swf">ASSIGNMENTS-L20</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-20-TRANSCRIPT.pdf">TRANSCRIPT-L20</option>
      
      <option  value="102101007/mod21lec21.mp4">VIDEO-L21</option>
      
      <option  value="102101007/downloads/PPT/LEC-21-PPT.pdf">PPT-L21</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-21-Handout.pdf">HANDOUT-L21</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz21.swf">QUIZ-L21</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-21.swf">ASSIGNMENTS-L21</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-21-TRANSCRIPT.pdf">TRANSCRIPT-L21</option>
      
      <option  value="102101007/mod22lec22.mp4">VIDEO-L22</option>
      
      <option  value="102101007/downloads/PPT/LEC-22-PPT.pdf">PPT-L22</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-22-Handout.pdf">HANDOUT-L22</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz22.swf">QUIZ-L22</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-22.swf">ASSIGNMENTS-L22</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-22-TRANSCRIPT.pdf">TRANSCRIPT-L22</option>
      
      <option  value="102101007/mod23lec23.mp4">VIDEO-L23</option>
      
      <option  value="102101007/downloads/PPT/LEC-23-PPT.pdf">PPT-L23</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-23-Handout.pdf">HANDOUT-L23</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz23.swf">QUIZ-L23</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-23.swf">ASSIGNMENTS-L23</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-23-TRANSCRIPT.pdf">TRANSCRIPT-L23</option>
      
      <option  value="102101007/mod24lec24.mp4">VIDEO-L24</option>
      
      <option  value="102101007/downloads/PPT/LEC-24-PPT.pdf">PPT-L24</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-24-Handout.pdf">HANDOUT-L24</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz24.swf">QUIZ-L24</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-24.swf">ASSIGNMENTS-L24</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-24-TRANSCRIPT.pdf">TRANSCRIPT-L24</option>
      
      <option  value="102101007/mod25lec25.mp4">VIDEO-L25</option>
      
      <option  value="102101007/downloads/PPT/LEC-25-PPT.pdf">PPT-L25</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-25-Handout.pdf">HANDOUT-L25</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz25.swf">QUIZ-L25</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-25.swf">ASSIGNMENTS-L25</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-25-TRANSCRIPT.pdf">TRANSCRIPT-L25</option>
      
      <option  value="102101007/mod26lec26.mp4">VIDEO-L26</option>
      
      <option  value="102101007/downloads/PPT/LEC-26-PPT.pdf">PPT-L26</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-26-Handout.pdf">HANDOUT-L26</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz26.swf">QUIZ-L26</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-26.swf">ASSIGNMENTS-L26</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-26-TRANSCRIPT.pdf">TRANSCRIPT-L26</option>
      
      <option  value="102101007/mod27lec27.mp4">VIDEO-L27</option>
      
      <option  value="102101007/downloads/PPT/LEC-27-PPT.pdf">PPT-L27</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-27-Handout.pdf">HANDOUT-L27</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz27.swf">QUIZ-L27</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-27.swf">ASSIGNMENTS-L27</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-27-TRANSCRIPT.pdf">TRANSCRIPT-L27</option>
      
      <option  value="102101007/mod28lec28mp4">VIDEO-L28</option>
      
      <option  value="102101007/downloads/PPT/LEC-28-PPT.pdf">PPT-L28</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-28-Handout.pdf">HANDOUT-L28</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz28.swf">QUIZ-L28</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-28.swf">ASSIGNMENTS-L28</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-28-TRANSCRIPT.pdf">TRANSCRIPT-L28</option>
      
      <option  value="102101007/mod29lec29.mp4">VIDEO-L29</option>
      
      <option  value="102101007/downloads/PPT/LEC-29-PPT.pdf">PPT-L29</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-29-Handout.pdf">HANDOUT-L29</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz29.swf">QUIZ-L29</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-29.swf">ASSIGNMENTS-L29</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-29-TRANSCRIPT.pdf">TRANSCRIPT-L29</option>
      
      <option  value="102101007/mod30lec30.mp4">VIDEO-L30</option>
      
      <option  value="102101007/downloads/PPT/LEC-30-PPT.pdf">PPT-L30</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-30-Handout.pdf">HANDOUT-L30</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz30.swf">QUIZ-L30</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-30.swf">ASSIGNMENTS-L30</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-30-TRANSCRIPT.pdf">TRANSCRIPT-L30</option>
      
      <option  value="102101007/mod31lec31.mp4">VIDEO-L31</option>
      
      <option  value="102101007/downloads/PPT/LEC-31-PPT.pdf">PPT-L31</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-31-Handout.pdf">HANDOUT-L31</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz31.swf">QUIZ-L31</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-31.swf">ASSIGNMENTS-L31</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-31-TRANSCRIPT.pdf">TRANSCRIPT-L31</option>
      
      <option  value="102101007/mod32lec32.mp4">VIDEO-L32</option>
      
      <option  value="102101007/downloads/PPT/LEC-32-PPT.pdf">PPT-L32</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-32-Handout.pdf">HANDOUT-L32</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz32.swf">QUIZ-L32</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-32.swf">ASSIGNMENTS-L32</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-32-TRANSCRIPT.pdf">TRANSCRIPT-L32</option>
      
      <option  value="102101007/mod33lec33.mp4">VIDEO-L33</option>
      
      <option  value="102101007/downloads/PPT/LEC-33-PPT.pdf">PPT-L33</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-33-Handout.pdf">HANDOUT-L33</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz33.swf">QUIZ-L33</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-33.swf">ASSIGNMENTS-L33</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-33-TRANSCRIPT.pdf">TRANSCRIPT-L33</option>
      
      <option  value="102101007/mod34lec34.mp4">VIDEO-L34</option>
      
      <option  value="102101007/downloads/PPT/LEC-34-PPT.pdf">PPT-L34</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-34-Handout.pdf">HANDOUT-L34</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz34.swf">QUIZ-L34</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-34.swf">ASSIGNMENTS-L34</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-34-TRANSCRIPT.pdf">TRANSCRIPT-L34</option>
      
      <option  value="102101007/mod35lec35.mp4">VIDEO-L35</option>
      
      <option  value="102101007/downloads/PPT/LEC-35-PPT.pdf">PPT-L35</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-35-Handout.pdf">HANDOUT-L35</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz35.swf">QUIZ-L35</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-35.swf">ASSIGNMENTS-L35</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-35-TRANSCRIPT.pdf">TRANSCRIPT-L35</option>
      
      <option  value="102101007/mod36lec36.mp4">VIDEO-L36</option>
      
      <option  value="102101007/downloads/PPT/LEC-36-PPT.pdf">PPT-L36</option>
      

      <option  value="102101007/downloads/HANDOUTS/LECTURE-36-Handout.pdf">HANDOUT-L36</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz36.swf">QUIZ-L36</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-36.swf">ASSIGNMENTS-L36</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-36-TRANSCRIPT.pdf">TRANSCRIPT-L36</option>
      
      <option  value="102101007/mod37lec37.mp4">VIDEO-L37</option>
      
      <option  value="102101007/downloads/PPT/LEC-37-PPT.pdf">PPT-L37</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-37-Handout.pdf">HANDOUT-L37</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz37.swf">QUIZ-L37</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-37.swf">ASSIGNMENTS-L37</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-37-TRANSCRIPT.pdf">TRANSCRIPT-L37</option>
      
      <option  value="102101007/mod38lec38.mp4">VIDEO-L38</option>
      
      <option  value="102101007/downloads/PPT/LEC-38-PPT.pdf">PPT-L38</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-38-Handout.pdf">HANDOUT-L38</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz38.swf">QUIZ-L38</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-38.swf">ASSIGNMENTS-L38</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-38-TRANSCRIPT.pdf">TRANSCRIPT-L38</option>
      
      <option  value="102101007/mod39lec39.mp4">VIDEO-L39</option>
      
      <option  value="102101007/downloads/PPT/LEC-39-PPT.pdf">PPT-L39</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-39-Handout.pdf">HANDOUT-L39</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz39.swf">QUIZ-L39</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-39.swf">ASSIGNMENTS-L39</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-39-TRANSCRIPT.pdf">TRANSCRIPT-L39</option>
      
      <option  value="102101007/mod40lec40.mp4">VIDEO-L40</option>
      
      <option  value="102101007/downloads/PPT/LEC-40-PPT.pdf">PPT-L40</option>
      
      <option  value="102101007/downloads/HANDOUTS/LECTURE-40-Handout.pdf">HANDOUT-L40</option>
      
      <option  value="102101007/downloads/QUIZ/Quiz40.swf">QUIZ-L40</option>
      
      <option  value="102101007/downloads/ASSIGNMENT/ASSIGNMENT-L-40.swf">ASSIGNMENTS-L40</option>
      
      <option  value="102101007/downloads/TRANSCRIPT/LEC-40-TRANSCRIPT.pdf">TRANSCRIPT-L40</option>
          </select>
    
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102101040</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Advanced Clinical Proteomics</strong></td>
	<td><strong>Prof. Sanjeeva Srivastava</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="102101040/modules/module1/lec1/1.1.html">LECTURE-L-1</option>
      
      <option  value="102101040/downloads/Quiz/quiz1.swf">QUIZ-L-1</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-1.swf">ASSIGNMENT-L-1</option>
      
      <option  value="102101040/downloads/Handouts/Lec-01.pdf">HANDOUT-L-1</option>
      
      <option  value="102101040/modules/module1/lec2/objectives_L2.html">LECTURE-L-2</option>
      
      <option  value="102101040/downloads/Quiz/quiz2.swf">QUIZ-L-2</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-2.swf">ASSIGNMENTS-L-2</option>
      
      <option  value="102101040/downloads/Handouts/Lec-02.pdf">HANDOUT-L-2</option>
      
      <option  value="102101040/modules/module1/lec3/objectives_L3.html">LECTURE-L-3</option>
      
      <option  value="102101040/downloads/Quiz/quiz3.swf">QUIZ-L-3</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-3.swf">ASSIGNMENTS-L-3</option>
      
      <option  value="102101040/downloads/Handouts/Lec-03.pdf">HANDOUT-L-3</option>
      
      <option  value="102101040/modules/module1/lec4/objectives_L4.html">LECTURE-L-4</option>
      
      <option  value="102101040/downloads/Quiz/quiz4.swf">QUIZ-L-4</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-4.swf">ASSIGNMENTS-L-4</option>
      
      <option  value="102101040/downloads/Handouts/Lec-04.pdf">HANDOUT-L-4</option>
      
      <option  value="102101040/modules/module2/lec5/objectives_L5.html">LECTURE-L-5</option>
      
      <option  value="102101040/downloads/Quiz/quiz5.swf">QUIZ-L-5</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-5.swf">ASSIGNMENTS-L-5</option>
      
      <option  value="102101040/downloads/Handouts/Lec-05.pdf">HANDOUT-L-5</option>
      
      <option  value="102101040/modules/module2/lec6/objectives_L6.html">LECTURE-L-6</option>
      
      <option  value="102101040/downloads/Quiz/quiz6.swf">QUIZ-L-6</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-6.swf">ASSIGNMENTS-L-6</option>
      
      <option  value="102101040/downloads/Handouts/Lec-06.pdf">HANDOUT-L-6</option>
      
      <option  value="102101040/modules/module2/lec7/objectives_L7.html">LECTURE-L-7</option>
      
      <option  value="102101040/downloads/Quiz/quiz7.swf">QUIZ-L-7</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-7.swf">ASSIGNMENTS-L-7</option>
      
      <option  value="102101040/downloads/Handouts/Lec-07.pdf">HANDOUT-L-7</option>
      
      <option  value="102101040/modules/module2/lec8/objectives_L8.html">LECTURE-L-8</option>
      
      <option  value="102101040/downloads/Quiz/quiz8.swf">QUIZ-L-8</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-8.swf">ASSIGNMENTS-L-8</option>
      
      <option  value="102101040/downloads/Handouts/Lec-08.pdf">HANDOUT-L-8</option>
      
      <option  value="102101040/modules/module2/lec9/objectives_L9.html">LECTURE-L--9</option>
      
      <option  value="102101040/downloads/Quiz/quiz9.swf">QUIZ-L-9</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-9.swf">ASSIGNMENTS-L-9</option>
      
      <option  value="102101040/downloads/Handouts/Lec-09.pdf">HANDOUT-L-9</option>
      
      <option  value="102101040/modules/module3/lec10/objectives_L10.html">LECTURE-L-10</option>
      
      <option  value="102101040/downloads/Quiz/quiz10.swf">QUIZ-L-10</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-10.swf">ASSIGNMENTS-L-10</option>
      
      <option  value="102101040/downloads/Handouts/Lec-10.pdf">HANDOUT-L10</option>
      
      <option  value="102101040/modules/module3/lec11/objectives_L11.html">LECTURE-L-11</option>
      
      <option  value="102101040/downloads/Quiz/quiz11.swf">QUIZ-L-11</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-11.swf">ASSIGNMENTS-L-11</option>
      
      <option  value="102101040/downloads/Handouts/Lec-11.pdf">HANDOUT-L-11</option>
      
      <option  value="102101040/modules/module3/lec12/objectives_L12.html">LECTURE-L-12</option>
      
      <option  value="102101040/downloads/Quiz/quiz12.swf">QUIZ-L-12</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-12.swf">ASSIGNMENTS-L-12</option>
      
      <option  value="102101040/downloads/Handouts/Lec-12.pdf">HANDOUT-L-12</option>
      
      <option  value="102101040/modules/module3/lec13/objectives_L13.html">LECTURE-L-13</option>
      
      <option  value="102101040/downloads/Quiz/quiz13.swf">QUIZ-L-13</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-13.swf">ASSIGNMENTS-L-13</option>
      
      <option  value="102101040/downloads/Handouts/Lec-13.pdf">HANDOUT-L-13</option>
      
      <option  value="102101040/modules/module3/lec14/objectives_L14.html">LECTURE-L-14</option>
      
      <option  value="102101040/downloads/Quiz/quiz14.swf">QUIZ-L-14</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-14.swf">ASSIGNMENT-L-14</option>
      
      <option  value="102101040/downloads/Handouts/Lec-14.pdf">HANDOUT-L-14</option>
      
      <option  value="102101040/modules/module3/lec15/objectives_L15.html">LECTURE-L-15</option>
      
      <option  value="102101040/downloads/Quiz/quiz15.swf">QUIZ-L-15</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-15.swf">ASSIGNMENTS-L-15</option>
      
      <option  value="102101040/downloads/Handouts/Lec-15.pdf">HANDOUT-L-15</option>
      
      <option  value="102101040/modules/module3/lec16/objectives_L16.html">LECTURE-L-16</option>
      
      <option  value="102101040/downloads/Quiz/quiz16.swf">QUIZ-L-16</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-16.swf">ASSIGNMENTS-L-16</option>
      
      <option  value="102101040/downloads/Handouts/Lec-16.pdf">HANDOUT-L-16</option>
      
      <option  value="102101040/modules/module3/lec17/objectives_L17.html">LECTURE-L-17</option>
      
      <option  value="102101040/downloads/Quiz/quiz17.swf">QUIZ-L-17</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-17.swf">ASSIGNMENTS-L-17</option>
      
      <option  value="102101040/downloads/Handouts/Lec-17.pdf">HANDOUT-L-17</option>
      
      <option  value="102101040/modules/module3/lec18/objectives_L18.html">LECTURE-L-18</option>
      
      <option  value="102101040/downloads/Quiz/quiz18.swf">QUIZ-L-18</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-18.swf">ASSIGNMENTS-L-18</option>
      
      <option  value="102101040/downloads/Handouts/Lec-18.pdf">HANDOUT-L-18</option>
      
      <option  value="102101040/modules/module3/lec19/objectives_L19.html">LECTURE-L-19</option>
      
      <option  value="102101040/downloads/Quiz/quiz19.swf">QUIZ-L-19</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-19.swf">ASSIGNMENTS-L-19</option>
      
      <option  value="102101040/downloads/Handouts/Lec-19.pdf">HANDOUT-L-19</option>
      
      <option  value="102101040/modules/module3/lec20/1.2.html">LECTURE-L-20</option>
      
      <option  value="102101040/downloads/Quiz/quiz20.swf">QUIZ-L-20</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-20.swf">ASSIGNMENTS-L-20</option>
      
      <option  value="102101040/downloads/Handouts/Lec-20.pdf">HANDOUT-L-20</option>
      
      <option  value="102101040/modules/module4/lec21/objectives_L21.html">LECTURE-L-21</option>
      
      <option  value="102101040/downloads/Quiz/quiz21.swf">QUIZ-L-21</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-21.swf">ASSIGNMENT-L-21</option>
      
      <option  value="102101040/downloads/Handouts/Lec-21.pdf">HANDOUT-L-21</option>
      
      <option  value="102101040/modules/module4/lec22/objectives_L22.html">LECTURE-L-22</option>
      
      <option  value="102101040/downloads/Quiz/quiz22.swf">QUIZ-L-22</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-22.swf">ASSIGNMENT-L-22</option>
      
      <option  value="102101040/downloads/Handouts/Lec-22.pdf">HANDOUT-L-22</option>
      
      <option  value="102101040/modules/module4/lec23/objectives_L23.html">LECTURE-L-23</option>
      
      <option  value="102101040/downloads/Quiz/quiz23.swf">QUIZ-L-23</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-23.swf">ASSIGNMENT-L-23</option>
      
      <option  value="102101040/downloads/Handouts/Lec-23.pdf">HANDOUT-L-23</option>
      
      <option  value="102101040/modules/module4/lec24/objectives_L24.html">LECTURE-L-24</option>
      
      <option  value="102101040/downloads/Quiz/quiz24.swf">QUIZ-L-24</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-24.swf">ASSIGNMENT-L-24</option>
      
      <option  value="102101040/downloads/Handouts/Lec-24.pdf">HANDOUT-L-24</option>
      
      <option  value="102101040/modules/module4/lec25/objectives_L25.html">LECTURE-L-25</option>
      
      <option  value="102101040/downloads/Quiz/quiz25.swf">QUIZ-L-25</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-25.swf">ASSIGNMENT-L-25</option>
      
      <option  value="102101040/downloads/Handouts/Lec-25.pdf">HANDOUT-L-25</option>
      
      <option  value="102101040/modules/module4/lec26/objectives_L26.html">LECTURE-L-26</option>
      
      <option  value="102101040/downloads/Quiz/quiz26.swf">QUIZ-L-26</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-26.swf">ASSIGNMENT-L-26</option>
      
      <option  value="102101040/downloads/Handouts/Lec-26.pdf">HANDOUT-L-26</option>
      
      <option  value="102101040/modules/module4/lec27/objectives_L27.html">LECTURE-L-27</option>
      
      <option  value="102101040/downloads/Quiz/quiz27.swf">QUIZ-L-27</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-27.swf">ASSIGNMENT-L-27</option>
      
      <option  value="102101040/downloads/Handouts/Lec-27.pdf">HANDOUT-L-27</option>
      
      <option  value="102101040/modules/module5/lec28/objectives_L28.html">LECTURE-L-28</option>
      
      <option  value="102101040/downloads/Quiz/quiz28.swf">QUIZ-L-28</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-28.swf">ASSIGNMENT-L-28</option>
      
      <option  value="102101040/downloads/Handouts/Lec-28.pdf">HANDOUT-L-28</option>
      
      <option  value="102101040/modules/module5/lec29/objectives_L29.html">LECTURE-L-29</option>
      
      <option  value="102101040/downloads/Quiz/quiz29.swf">QUIZ-L-29</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-29.swf">ASSIGNMENT-L-29</option>
      
      <option  value="102101040/downloads/Handouts/Lec-29.pdf">HANDOUT-L-29</option>
      
      <option  value="102101040/modules/module5/lec30/objectives_L30.html">LECTURE-L-30</option>
      
      <option  value="102101040/downloads/Quiz/quiz30.swf">QUIZ-L-30</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-30.swf">ASSIGNMENT-L-30</option>
      
      <option  value="102101040/downloads/Handouts/Lec-30.pdf">HANDOUT-L-30</option>
      
      <option  value="102101040/modules/module5/lec31/objectives_L31.html">LECTURE-L-31</option>
      
      <option  value="102101040/downloads/Quiz/quiz31.swf">QUIZ-L-31</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-31.swf">ASSIGNMENT-L-31</option>
      
      <option  value="102101040/downloads/Handouts/Lec-31.pdf">HANDOUT-L-31</option>
      
      <option  value="102101040/modules/module5/lec32/objectives_L32.html">LECTURE-L-32</option>
      
      <option  value="102101040/downloads/Quiz/quiz32.swf">QUIZ-L-32</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-32.swf">ASSIGNMENT-L-32</option>
      
      <option  value="102101040/downloads/Handouts/Lec-32.pdf">HANDOUT-L-32</option>
      
      <option  value="102101040/modules/module6/lec33/objectives_L33.html">LECTURE-L-33</option>
      
      <option  value="102101040/downloads/Quiz/quiz33.swf">QUIZ-L-33</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-33.swf">ASSIGNMENT-L-33</option>
      
      <option  value="102101040/downloads/Handouts/Lec-33.pdf">HANDOUT-L-33</option>
      
      <option  value="102101040/modules/module6/lec34/objectives_L34.html">LECTURE-L-34</option>
      
      <option  value="102101040/downloads/Quiz/quiz34.swf">QUIZ-L-34</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-34.swf">ASSIGNMENT-L-34</option>
      
      <option  value="102101040/downloads/Handouts/Lec-34.pdf">HANDOUT-L-34</option>
      
      <option  value="102101040/modules/module6/lec35/objectives_L35.html">LECTURE-L-35</option>
      
      <option  value="102101040/downloads/Quiz/quiz35.swf">QUIZ-L-35</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-35.swf">ASSIGNMENT-L-35</option>
      
      <option  value="102101040/downloads/Handouts/Lec-35.pdf">HANDOUT-L-35</option>
      
      <option  value="102101040/modules/module6/lec36/objectives_L36.html">LECTURE-L-36</option>
      
      <option  value="102101040/downloads/Quiz/quiz36.swf">QUIZ-L-36</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-36.swf">ASSIGNMENT-L-36</option>
      
      <option  value="102101040/downloads/Handouts/Lec-36.pdf">HANDOUT-L-36</option>
      
      <option  value="102101040/modules/module6/lec37/objectives_L37.html">LECTURE-L-37</option>
      
      <option  value="102101040/downloads/Quiz/quiz37.swf">QUIZ-L-37</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-37.swf">ASSIGNMENT-L-37</option>
      
      <option  value="102101040/downloads/Handouts/Lec-37.pdf">HANDOUT-L-37</option>
      
      <option  value="102101040/modules/module6/lec38/objectives_L38.html">LECTURE-L-38</option>
      
      <option  value="102101040/downloads/Quiz/quiz38.swf">QUIZ-L-38</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-38.swf">ASSIGNMENT-L-38</option>
      
      <option  value="102101040/downloads/Handouts/Lec-38.pdf">HANDOUT-L-38</option>
      
      <option  value="102101040/modules/module6/lec39/objectives_L39.html">LECTURE-L-39</option>
      
      <option  value="102101040/downloads/Quiz/quiz39.swf">QUIZ-L-39</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-39.swf">ASSIGNMENT-L-39</option>
      
      <option  value="102101040/downloads/Handouts/Lec-39.pdf">HANDOUT-L-39</option>
      
      <option  value="102101040/modules/module6/lec40/1.2.html">LECTURE-L-40</option>
      
      <option  value="102101040/downloads/Quiz/quiz40.swf">QUIZ-L-40</option>
      
      <option  value="102101040/downloads/Assignments/ASSIGNMENT-L-40.swf">ASSIGNMENT-L-40</option>
      
      <option  value="102101040/downloads/Handouts/Lec-40.pdf">HANDOUT-L-40</option>
          </select>
          </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>102102033</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Enzyme Science and Engineering</strong></td>
	<td><strong>Prof. Subhash Chand</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
    <option  value="#">Select </option>
      
      <option value="102102033/lec01.mp4">Introduction and Scope to Enzyme Science &amp; Engineering</option>
      
      <option value="102102033/lec02.mp4">Characteristic Features of Enzymes</option>
      
      <option value="102102033/lec03.mp4">Enzymes as Biocatalysts</option>
      
      <option value="102102033/lec04.mp4">Enzymatic Catalysis</option>
      
      <option value="102102033/lec05.mp4">Specificity of Enzyme Action</option>
      
      <option value="102102033/lec06.mp4">Kinetics of Enzyme Catalyzed Reactions</option>
      
      <option value="102102033/lec07.mp4">Kinetics of Enzyme Catalyzed Reactions</option>
      
      <option value="102102033/lec08.mp4">Deviation from Hyperbolic Enzyme Kinetics</option>
      
      <option value="102102033/lec09.mp4">Role of Effector Molecules in Enzyme Kinetics</option>
      
      <option value="102102033/lec10.mp4">Reversible Inhibition</option>
      
      <option value="102102033/lec11.mp4">Effect of PH and Temperature on Enzyme</option>
      
      <option value="102102033/lec12.mp4">Kinetics of Bi substrate Enzyme</option>
      
      <option value="102102033/lec13.mp4">Kinetics of Bi substrate Enzyme</option>
      
      <option value="102102033/lec14.mp4">Immobilized Enzymes - I</option>
      
      <option value="102102033/lec15.mp4">Immobilized Enzymes - II</option>
      
      <option value="102102033/lec16.mp4">Immobilized Enzymes - III</option>
      
      <option value="102102033/lec17.mp4">Immobilization of Enzymes by Entrapment</option>
      
      <option value="102102033/lec18.mp4">Effect of Immobilization</option>
      
      <option value="102102033/lec19.mp4">Reactors for Enzyme Catalyzed Reactions</option>
      
      <option value="102102033/lec20.mp4">Idealized Enzyme Reactor Performance</option>
      
      <option value="102102033/lec21.mp4">Idealized Enzyme Reactor Performance</option>
      
      <option value="102102033/lec22.mp4">Kinetic Parameters for IME Systems</option>
      
      <option value="102102033/lec23.mp4">Steady State Analysis of Mass Transfer</option>
      
      <option value="102102033/lec24.mp4">Steady State Analysis of Mass Transfer</option>
      
      <option value="102102033/lec25.mp4">Non Ideal Flow in Continuous Immobilized Enzyme</option>
      
      <option value="102102033/lec26.mp4">Applications of Immobilized Enzymes in Process</option>
      
      <option value="102102033/lec27.mp4">Analytical Applications</option>
      
      <option value="102102033/lec28.mp4">Enzyme Technology Challenges</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103012</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Cell Biology</strong></td>
	<td><strong>Dr. Sanjukta Patra  </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/index.html">Prokaryotic and Eukaryotic cells</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec2/1.html">Plant and animal cells</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec3/1.html">Principles of membrane organization, membrane proteins</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec4/1.html">Cytoskeletal elements and architecture</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec5/1.html">Structure and function of cytoplasm, nucleus and mitochondria</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec6/1.html">Ribosome, endoplasmic reticulum, golgi bodies and lysosomes</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec7/1.html">Peroxisomes, chloroplast and vacuoles</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec8/1.html">Extracellular matrix</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec9/1.html">Cell locomotion (amoeboid, flagella, cillar)</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec10/1.html">Types of cell division, Cell cycle and molecules that control cell cycle</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec11/1.html">Mitosis</option>
      
      <option  value="short/NPTEL/web courses/102103012/module1/lec12/1.html">Meiosis</option>
      
      <option  value="short/NPTEL/web courses/102103012/module2/lec1/1.html">Genetic material in a cell</option>
      
      <option  value="short/NPTEL/web courses/102103012/module2/lec2/1.html">Human Cromosome</option>
      
      <option  value="short/NPTEL/web courses/102103012/module2/lec3/1.html">Giant chromosomes</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec1/1.html">Transport across cell membrane</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec2/1.html">Lactose permease</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec3/1.html">Lysosomal membrane</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec4/1.html">ATP dependent proton pumps</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec5/1.html">Cotransport: Symport, Antiport</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec6/1.html">Transport in prokaryotic cells</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec7/1.html">Endocytosis and Exocytosis</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec8/1.html">Entry of virus in cells</option>
      
      <option  value="short/NPTEL/web courses/102103012/module3/lec9/1.html">Entry of toxins into the cells</option>
      
      <option  value="short/NPTEL/web courses/102103012/module4/lec1/1.html">Hormone</option>
      
      <option  value="short/NPTEL/web courses/102103012/module4/lec2/1.html">Plant growth factors</option>
      
      <option  value="short/NPTEL/web courses/102103012/module4/lec3/1.html">Plant hormones</option>
      
      <option  value="short/NPTEL/web courses/102103012/module5/lec1/1.html">Cell signaling</option>
      
      <option  value="short/NPTEL/web courses/102103012/module5/lec2/1.html">Receptor</option>
      
      <option  value="short/NPTEL/web courses/102103012/module5/lec3/1.html">Cyclic adenosine monophosphate ( cAMP)</option>
      
      <option  value="short/NPTEL/web courses/102103012/module5/lec4/1.html">Cyclic Guanosine monophosphate</option>
      
      <option  value="short/NPTEL/web courses/102103012/module5/lec5/1.html">Calcium ion flux and its role in cell signaling</option>
      
      <option  value="short/NPTEL/web courses/102103012/module5/lec6/1.html">G � Protein</option>
      
      <option  value="short/NPTEL/web courses/102103012/module6/lec1/1.html">Cell Culture</option>
      
      <option  value="short/NPTEL/web courses/102103012/module6/lec2/1.html">Characterization of Cells</option>
      
      <option  value="short/NPTEL/web courses/102103012/module6/lec3/1.html">Contamination</option>
      
      <option  value="short/NPTEL/web courses/102103012/module6/lec4/1.html">Differentiation</option>
      
      <option  value="short/NPTEL/web courses/102103012/module6/lec5/1.html">Three Dimentional Culture</option>
      
      <option  value="short/NPTEL/web courses/102103012/module6/lec6/1.html">Role of matrix in cell growth</option>
      
      <option  value="short/NPTEL/web courses/102103012/module7/lec1/1.html">Components of blood plasma cell</option>
      
      <option  value="short/NPTEL/web courses/102103012/module7/lec2/1.html">Haemopoiesis</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103015</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong> Microbiology </strong></td>
	<td><strong>Dr. Gurvinder Kaur Saini</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="short/NPTEL/web courses/102103015/module1/index.html ">History of Microbiology                                                               </option>
<option  value="short/NPTEL/web courses/102103015/module1/lec2/1.html">Members of the microbial world, scope, relevance and future of microbiology           </option>
<option  value="short/NPTEL/web courses/102103015/module2/lec1/1.html">The prokaryotic cell, size, shape and arrangement of bacterial cells                  </option>
<option  value="short/NPTEL/web courses/102103015/module2/lec2/1.html">Structures internal to the cell wall                                                  </option>
<option  value="short/NPTEL/web courses/102103015/module2/lec3/1.html">Structures external to the cell wall                                                  </option>
<option  value="short/NPTEL/web courses/102103015/module3/lec1/1.html">Microscopes I                                                                         </option>
<option  value="short/NPTEL/web courses/102103015/module3/lec2/1.html">Microscopes II                                                                        </option>
<option  value="short/NPTEL/web courses/102103015/module3/lec3/1.html">Preparation and staining of specimens, simple stains, differential and special stains </option>
<option  value="short/NPTEL/web courses/102103015/module4/lec1/1.html">Microbial nutrient requirements and nutritional types of microorganisms               </option>
<option  value="short/NPTEL/web courses/102103015/module4/lec2/1.html">Uptake of nutrients by the cell                                                       </option>
<option  value="short/NPTEL/web courses/102103015/module4/lec3/1.html">Culture media, Isolation and cultivation of pure cultures                             </option>
<option  value="short/NPTEL/web courses/102103015/module5/lec1/1.html">Growth of bacterial cultures, growth curve and measurement of microbial growth        </option>
<option  value="short/NPTEL/web courses/102103015/module5/lec2/1.html">Influence of Environmental factors on microbial growth                                </option>
<option  value="short/NPTEL/web courses/102103015/module5/lec3/1.html">The use of physical methods in Microbial control                                      </option>
<option  value="short/NPTEL/web courses/102103015/module5/lec4/1.html">The use of chemical methods in Microbial control                                      </option>
<option  value="short/NPTEL/web courses/102103015/module5/lec5/1.html">Antimicrobial Chemotherapy                                                            </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec1/1.html">Overview of microbial metabolism                                                      </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec2/1.html">Carbohydrate Catabolism                                                               </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec3/1.html">Anaerobic respiration and Fermentation                                                </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec4/1.html">Protein and Lipid Catabolism                                                          </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec5/1.html">Photosynthesis                                                                        </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec6/1.html">Biosynthesis of Amino acids and Lipids                                                </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec7/1.html">Biosynthesis of Pyramidines                                                           </option>
<option  value="short/NPTEL/web courses/102103015/module6/lec8/1.html">Biosynthesis of Purines and Peptidoglycan                                             </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec1/1.html">Structure and function of genetic material                                            </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec2/1.html">DNA replication                                                                       </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec3/1.html">The genetic code and the gene structure                                               </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec4/1.html">The expression of genes                                                               </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec5/1.html">Regulation of Genes                                                                   </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec6/1.html">DNA Repair and Microbial Recombination                                                </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec7/1.html">Bacterial Plasmids and Transposable elements                                          </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec8/1.html">Mutations and their chemical basis, detection and isolation of mutants                </option>
<option  value="short/NPTEL/web courses/102103015/module7/lec9/1.html">Bacterial Conjugation,Transduction and Transformation                                 </option>
<option  value="short/NPTEL/web courses/102103015/module8/lec1/1.html">Microbial Taxonomy and Phylogeny                                                      </option>
<option  value="short/NPTEL/web courses/102103015/module8/lec2/1.html">Archaea and Bacteria                                                                  </option>
<option  value="short/NPTEL/web courses/102103015/module8/lec3/1.html">Fungi, algae, protozoa and slime molds                                                </option>
<option  value="short/NPTEL/web courses/102103015/module9/lec1/1.html">Viruses- Introduction and General Characteristics                                     </option>
<option  value="short/NPTEL/web courses/102103015/module9/lec2/1.html">The Bacteriophages                                                                    </option>
<option  value="short/NPTEL/web courses/102103015/module9/lec3/1.html">The Viruses of Eukaryotes                                                             </option>
<option  value="short/NPTEL/web courses/102103015/module10/lec1/1.html         ">Microbial Pathogenicity and Diseases                                                  </option>
<option  value="short/NPTEL/web courses/102103015/module1/studyquestions/1.html">Study Questions 1                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module2/studyquestions/1.html">Study Questions 2                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module3/studyquestions/1.html">Study Questions 3                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module4/studyquestions/1.html">Study Questions 4                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module5/studyquestions/1.html">Study Questions 5                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module6/studyquestions/1.html">Study Questions 6                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module7/studyquestions/1.html">Study Questions 7                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module8/studyquestions/1.html">Study Questions 8                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module9/studyquestions/1.html">Study Questions 9                                                                     </option>
<option  value="short/NPTEL/web courses/102103015/module10/studyquestions/1.html">Study Questions 10                                                                    </option>




</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103016</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Plant Biotechnology</strong></td>
	<td><strong>Dr. Rakhi Chaturvedi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
    
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/102103016/module1/index.html">Introduction to plant tissue culture</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec2/1.html">Lab facilities and operations</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec3/1.html">Tissue Culture Media </option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec4/1.html">Plant Tissue culture techniques</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec5/1.html">Micropropagation by adventitious shoot proliferation</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec6/1.html">Micropropagation by Axillary shoot proliferation </option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec7/1.html">Meristem culture for virus elimination</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec8/1.html">Somatic Embryogenesis and Artificial seed production </option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec9/1.html">Doubled Haploid production </option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec10/1.html">Triploid production by Endosperm culture</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec11/1.html">Cell suspension cultures</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec12/1.html">Protoplast Isolation and Regeneration</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec13/1.html">Somatic Hybridization and Cybridization</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec14/1.html">Somaclonal, Protoclonal and Gametoclonal variation</option>
      
      <option  value="short/NPTEL/web courses/102103016/module1/lec15/1.html">Cryopreservation</option>
      
      <option  value="short/NPTEL/web courses/102103016/module2/lec16/1.html">Cytological and various staining procedures for Ploidy analysis</option>
      
      <option  value="short/NPTEL/web courses/102103016/module2/lec17/1.html">Microscopy </option>
      
      <option  value="short/NPTEL/web courses/102103016/module2/lec18/1.html">Electron Microscopy</option>
      
      <option  value="short/NPTEL/web courses/102103016/module2/lec19/1.html">Flow Cytometry and cell sorting</option>
      
      <option  value="short/NPTEL/web courses/102103016/module2/lec20/1.html">Plant Histological Techniques</option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec21/1.html">Genetic material of plant cells</option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec22/1.html">Restriction Enzymes</option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec23/1.html">Plant transformation and transformation vectors  </option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec24/1.html">Mode of Gene delivery in plant </option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec25/1.html">Agrobacterium mediated Gene transfer </option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec26/1.html">Ti and Ri Plasmids</option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec27/1.html">Selection and screening of transformations</option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec28/1.html">PCR and Hybridization technique </option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec29/1.html">Gene silencing</option>
      
      <option  value="short/NPTEL/web courses/102103016/module3/lec30/1.html">Applications of Genetic Engineering </option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec31/1.html">Advantages of Plant cell, Tissue and organ culture as source of secondary metabolites</option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec32/1.html">Hairy Root cultures</option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec33/1.html">Screening of High yielding cell lines and extraction of High value Industrial Products</option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec34/1.html">Fractionation and Bioassays of plant extract</option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec35/1.html">Growth and Production Kinetics of Cell cultures in Shake Flasks</option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec36/1.html">Bioreactors for Plant Engineering</option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec37/1.html">Manipulation in Production Profile by Abiotic and Biotic Elicitation</option>
      
      <option  value="short/NPTEL/web courses/102103016/module4/lec38/1.html">Biotransformation</option>
      
      <option  value="short/NPTEL/web courses/102103016/module5/lec39/1.html">Aims Scope and Bottlenecks of Molecular Farming</option>
      
      <option  value="short/NPTEL/web courses/102103016/module5/lec40/1.html">Production of Industrial Enzymes and Biodegradable Plastics</option>
      
      <option  value="short/NPTEL/web courses/102103016/module5/lec41/1.html">Production of Antibodies</option>
      
      <option  value="short/NPTEL/web courses/102103016/module5/lec42/1.html">Metabolic Engineering for Production of Fatty Acids, Industrial Oils, Terpenoids and Flavonoids</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103017</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Proteomics and Genomics</strong></td>
	<td><strong>Dr. Vikash Kumar Dubey</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
    
      <option  value="#">Select </option>
      <option  value="102103017/module1/index.html">Introduction and Scope of  Proteomics</option>
      
      <option  value="102103017/module2/lec2_slide1.htm">Protein Separation Techniques: General Concepts of Chromatography</option>
      
      <option  value="102103017/module3/lec3_slide1.htm">Ion Exchange Chromatography-I</option>
      
      <option  value="102103017/module4/lec4_slide1.htm">Ion Exchange Chromatography �II</option>
      
      <option  value="102103017/module5/lec5_slide1.htm">Size Exclusion (Gel Filtration) Chromatography</option>
      
      <option  value="102103017/module6/lec6_slide1.htm">Affinity Chromatography-I</option>
      
      <option  value="102103017/module7/lec7_slide1.htm">Affinity Chromatography-II</option>
      
      <option  value="102103017/module8/lec8_slide1.htm">Affinity Chromatography-III</option>
      
      <option  value="102103017/module9/lec9_slide1.htm">Polyacrylamide Gel Electrophoresis</option>
      
      <option  value="102103017/module10/lec10_slide1.htm">Polyacrylamide Gel Electrophoresis-II</option>
      
      <option  value="102103017/module11/lec11_slide1.htm">Isoelectric Focusing (IEF)</option>
      
      <option  value="102103017/module12/lec12_slide1.htm">Two Dimensional PAGE for Proteome Analysis</option>
      
      <option  value="102103017/module13/lec13_slide1.htm">Analysis of 2D Gels</option>
      
      <option  value="102103017/module14/lec14_slide1.htm">Suggested Reading and Home Assignment</option>
      
      <option  value="102103017/module15/lec15_slide1.htm">Introduction to Mass Spectrometry-I</option>
      
      <option  value="102103017/module16/lec16_slide1.htm">Introduction to Mass Spectrometry-II</option>
      
      <option  value="102103017/module17/lec17_slide1.htm">Strategies for Protein Identification</option>
      
      <option  value="102103017/module18/lec18_slide1.htm">Protein Sequencing</option>
      
      <option  value="102103017/module19/lec19_slide1.htm">Protein Modifications and Proteomics</option>
      
      <option  value="102103017/module20/lec20_slide1.htm">Protein-Protein Interaction</option>
      
      <option  value="102103017/module21/lec21_slide1.htm">Midterm Examination</option>
      
      <option  value="102103017/module22/lec22_slide1.htm">Protein Engineering</option>
      
      <option  value="102103017/module23/lec23_slide1.htm">Clinical and Biomedical Applications of Proteomics Proteomics Industry</option>
      
      <option  value="102103017/module24/lec24_slide1.htm">Protein Chip Technology</option>
      
      <option  value="102103017/module25/lec25_slide1.htm">Functional Proteomics and Proteome Database</option>
      
      <option  value="102103017/module26/lec26_slide1.htm">Overview of Deoxyribonucleic Acid (DNA) and Ribonucleic Acid (RNA) Structure</option>
      
      <option  value="102103017/module27/lec27_slide1.htm">Agarose Gel Electrophoresis for DNA Analysis</option>
      
      <option  value="102103017/module28/lec28_slide1.htm">Methods of Preparing Genomic DNA</option>
      
      <option  value="102103017/module29/lec29_slide1.htm">DNA Sequence Analysis Methods-I</option>
      
      <option  value="102103017/module30/lec30_slide1.htm">DNA Sequence Analysis Methods-II</option>
      
      <option  value="102103017/module31/lec31_slide1.htm">Home Assignment and Further Reading</option>
      
      <option  value="102103017/module32/lec32_slide1.htm">Gene Variations and Single Nucleotide Polymorphism</option>
      
      <option  value="102103017/module33/lec33_slide1.htm">Expressed Sequence Tags</option>
      
      <option  value="102103017/module34/lec34_slide1.htm">DNA & Disease Association</option>
      
      <option  value="102103017/module35/lec35_slide1.htm">Basics of DNA Cloning-I</option>
      
      <option  value="102103017/module36/lec36_slide1.htm">Basics of DNA Cloning-II</option>
      

      <option  value="102103017/module37/lec37_slide1.htm">Polymerase Chain Reaction</option>
      
      <option  value="102103017/module38/lec38_slide1.htm">DNA Fingerprinting</option>
      
      <option  value="102103017/module39/lec39_slide1.htm">Human Genome Project</option>
      
      <option  value="102103017/module40/lec40_slide1.htm">Final Examination</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103038</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Cellular and Molecular Immunology</strong></td>
	<td><strong>Dr. Sachin Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      
      <option  value="#">Select </option>
      <option  value="102103038/module1/index.html">Introduction</option>
      
      <option  value="102103038/module1/lec2/1.html">Properties of Immune system</option>
      
      <option  value="102103038/module1/lec3/1.html">Innate immune system (Part I)</option>
      
      <option  value="102103038/module1/lec4/1.html">Innate immune system (Part II).</option>
      
      <option  value="102103038/module1/lec5/1.html">Adaptive immune system (Part I)</option>
      
      <option  value="102103038/module1/questions/1.html">Questions: Introduction</option>
      
      <option  value="102103038/module2/lec7/1.html">Antibodies and Antigens (Part I)</option>
      
      <option  value="102103038/module2/lec8/1.html">Antibodies and Antigens (PartII)</option>
      
      <option  value="102103038/module2/lec9/1.html">Major histocompatability complex (Part I)</option>
      
      <option  value="102103038/module2/lec10/1.html">Major histocompatability complex (Part II)</option>
      
      <option  value="102103038/module2/lec11/1.html">Antigen processing and presentation to T lymphocyte (Part I)</option>
      
      <option  value="102103038/module2/lec12/1.html">Antigen processing and presentation to T lymphocyte (Part II)</option>
      
      <option  value="102103038/module2/lec13/1.html">Antigen receptors and accessory molecules of T lymphocytes. (Part I)</option>
      
      <option  value="102103038/module2/lec14/1.html">Antigen receptors and accessory molecules of T lymphocytes. (Part II)</option>
      
      <option  value="102103038/module3/lec15/1.html">Development of Lymphocytes (Part I)</option>
      
      <option  value="102103038/module3/lec16/1.html">Development of Lymphocytes (Part II)</option>
      
      <option  value="102103038/module3/lec17/1.html">Activation of Lymphocytes (Part I)</option>
      
      <option  value="102103038/module3/lec18/1.html">Activation of Lymphocytes (Part II)</option>
      
      <option  value="102103038/module3/lec19/1.html">B cell activation and antibody production (Part I)</option>
      
      <option  value="102103038/module3/lec20/1.html">B cell activation and antibody production (Part II)</option>
      
      <option  value="102103038/module3/lec21/1.html">Immune memory response (Part I).</option>
      
      <option  value="102103038/module3/lec22/1.html">Immune memory response (Part II).</option>
      
      <option  value="102103038/module4/lec23/1.html">Cytokines (Part I</option>
      
      <option  value="102103038/module4/lec24/1.html">Cytokines (Part II)</option>
      
      <option  value="102103038/module4/lec25/1.html">Mechanism of cell mediated immune response (Part I)</option>
      
      <option  value="102103038/module4/lec26/1.html">Mechanism of cell mediated immune response (Part II)</option>
      
      <option  value="102103038/module4/lec27/1.html">Mechanism of antibody medicated immune response (Part I)</option>
      
      <option  value="102103038/module4/lec28/1.html">Mechanism of antibody medicated immune response (Part II)</option>
      
      <option  value="102103038/module5/lec29/1.html">Immunity to microbes (Part I)</option>
      
      <option  value="102103038/module5/lec30/1.html">Immunity to microbes (Part II)</option>
      
      <option  value="102103038/module5/lec31/1.html">Transplant immunology (Part I)</option>
      
      <option  value="102103038/module5/lec32/1.html">Transplant immunology (Part II)</option>
      
      <option  value="102103038/module5/lec33/1.html">Tumor immunology (Part I)</option>
      
      <option  value="102103038/module5/lec34/1.html">Tumor immunology (Part II)</option>
      
      <option  value="102103038/module6/lec35/1.html">Hypersensitivity (Part I)</option>
      
      <option  value="102103038/module6/lec36/1.html">Hypersensitivity (Part II)</option>
      
      <option  value="102103038/module6/lec37/1.html">Congenital and acquired immunodeficiency (Part I)</option>
      
      <option  value="102103038/module6/lec38/1.html">Congenital and acquired immunodeficiency (Part II).</option>
      
      <option  value="102103038/module6/lec39/1.html">Laboratory techniques commonly used in immunology (Part I)</option>
      
      <option  value="102103038/module6/lec40/1.html">Laboratory techniques commonly used in immunology (Part II)</option>
      
      <option  value="102103038/module1/lec6/1.html">Adaptive immune system (Part II) </option>
      
      <option  value="102103038/module2/questions/1.html">Questions: Antibodies and Antigens</option>
      
      <option  value="102103038/module3/questions/1.html">Questions: Development of immune cells</option>
      
      <option  value="102103038/module4/questions/1.html">Questions: Mechanism of immune response</option>
      
      <option  value="102103038/module5/questions/1.html">Questions: Immunity to pathogens</option>
      
      <option  value="102103038/module6/questions/1.html">Questions: Hypersensitivity and immunodeficiency </option>
      
      <option  value="102103038/mid course exam/1.html">Mid Term Assignment</option>
      
      <option  value="102103038/final Exam/1.html">Final Assignment</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103039</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>General Virology</strong></td>
	<td><strong>Dr. Sachin Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      
      <option  value="#">Select </option>
      <option  value="102103039/module1/index.html">General Concepts: Virus history</option>
      
      <option  value="102103039/module1/lec2/1.html">General Concepts: Virus Diversity </option>
      
      <option  value="102103039/module1/lec3/1.html">General Concepts: Virus Shapes</option>
      
      <option  value="102103039/module1/lec4/1.html">General Concepts: Virus Sizes</option>
      
      <option  value="102103039/module1/lec5/1.html">General Concepts: Components of genomes.</option>
      
      <option  value="102103039/module1/lec6/1.html">Isolation and purification of viruses and components.</option>
      
      <option  value="102103039/module1/questions/1.html">Questions : General Concepts</option>
      
      <option  value="102103039/module2/lec7/1.html">Consequences of virus infection to animals and human (Part I). </option>
      
      <option  value="102103039/module2/lec8/1.html">Consequences of virus infection to animals and human (PartII).</option>
      
      <option  value="102103039/module2/lec9/1.html">Viral infection: affect on host macromolecules (Part I). </option>
      
      <option  value="102103039/module2/lec10/1.html">Viral infection: affect on host macromolecules (Part II).  </option>
      
      <option  value="102103039/module2/lec11/1.html">Viral infection: establishment of the antiviral state (Part I).</option>
      
      <option  value="102103039/module2/lec12/1.html">Viral infection: establishment of the antiviral state (Part II).</option>
      
      <option  value="102103039/module2/lec13/1.html">Viruses counter attack mechanisms (Part I).</option>
      
      <option  value="102103039/module2/lec14/1.html">Viruses counter attack mechanisms (Part II)</option>
      
      <option  value="102103039/module3/lec15/1.html">Classification of viruses and nomenclatures (Part I).</option>
      
      <option  value="102103039/module3/lec16/1.html">Classification of viruses and nomenclatures (Part II)</option>
      
      <option  value="102103039/module3/lec17/1.html">Positive strand RNA viruses</option>
      
      <option  value="102103039/module3/lec18/1.html">Picornaviruses. </option>
      
      <option  value="102103039/module3/lec19/1.html">Flaviviruses- West Nile virus</option>
      
      <option  value="102103039/module3/lec20/1.html">Flaviviruses- Dengue virus</option>
      
      <option  value="102103039/module3/lec21/1.html">Coronaviruses</option>
      
      <option  value="102103039/module3/lec22/1.html">SARS pathogenesis</option>
      
      <option  value="102103039/module4/lec23/1.html">Negative strand RNA viruses</option>
      
      <option  value="102103039/module4/lec24/1.html">Paramyxoviruses</option>
      
      <option  value="102103039/module4/lec25/1.html">Orthomyxoviruses</option>
      
      <option  value="102103039/module4/lec26/1.html">Influenza pathogenesis and Bird flu</option>
      
      <option  value="102103039/module4/lec27/1.html">Rhabdoviruses</option>
      
      <option  value="102103039/module4/lec28/1.html">Rabies pathogenesis</option>
      
      <option  value="102103039/module5/lec29/1.html">dsRNA viruses</option>
      
      <option  value="102103039/module5/lec30/1.html">Reoviruses</option>
      
      <option  value="102103039/module2/questions/1.html">Questions: Virus host interaction</option>
      
      <option  value="102103039/module3/questions/1.html">Questions: Positive strand RNA virus</option>
      
      <option  value="102103039/module4/questions/1.html">Questions: Negative strand RNA viruses</option>
      
      <option  value="102103039/module5/lec31/1.html">Retroviruses: structure, classification, life cycle</option>
      
      <option  value="102103039/module5/lec32/1.html">Reverse transcription</option>
      
      <option  value="102103039/module5/lec33/1.html">HIV- viral pathogenesis</option>
      
      <option  value="102103039/module5/lec34/1.html">AIDS</option>
      
      <option  value="102103039/module5/questions/1.html">Questions: Other RNA viruses</option>
      
      <option  value="102103039/module6/lec35/1.html">Small DNA viruses: parvo- and polyomaviruses</option>
      
      <option  value="102103039/module6/lec36/1.html">Large DNA viruses</option>
      
      <option  value="102103039/module6/lec37/1.html">Herpesviruses</option>
      
      <option  value="102103039/module6/lec38/1.html">Adenoviruses</option>
      
      <option  value="102103039/module6/lec39/1.html">Poxviruses</option>
      
      <option  value="102103039/module6/lec40/1.html">Miscellaneous viruses</option>
      
      <option  value="102103039/module6/questions/1.html">Questions: DNA viruses</option>
      
      <option  value="102103039/midcoursequestions/1/1.html">Mid Term Assignment</option>
      
      <option  value="102103039/finalquestions/1/1.html">Final Assignment</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103041</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Gene Therapy</strong></td>
	<td><strong>Dr. Sachin Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>
    <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="102103041/module1/index.html">Introduction (part I)</option>
      
      <option  value="102103041/module1/lec2/1.html">Introduction (part II)</option>
      
      <option  value="102103041/module1/lec3/1.html">Somatic and germ line gene therapy (part I)</option>
      
      <option  value="102103041/module1/lec4/1.html">Somatic and germ line gene therapy (part II)</option>
      
      <option  value="102103041/module1/lec5/1.html">Gene replacement and gene addition (part I)</option>
      
      <option  value="102103041/module1/lec6/1.html">Gene replacement and gene addition (part II)</option>
      
      <option  value="102103041/module2/lec7/1.html">In vivo, ex vivo and in vitro gene therapy (Part I)</option>
      
      <option  value="102103041/module2/lec8/1.html">In vivo, ex vivo and in vitro gene therapy (PartII)</option>
      
      <option  value="102103041/module2/lec9/1.html">Transgenic animal models (Part I)</option>
      
      <option  value="102103041/module2/lec10/1.html">Transgenic animal models (Part II).  </option>
      
      <option  value="102103041/module2/lec11/1.html">Vehicles for gene transfer-viral vectors: retrovirus (Part I).</option>
      
      <option  value="102103041/module2/lec12/1.html">Vehicles for gene transfer-viral vectors: retrovirus (Part II).</option>
      
      <option  value="102103041/module2/lec13/1.html">Adenovirus</option>
      
      <option  value="102103041/module2/lec14/1.html">Adeno-associated virus.</option>
      
      <option  value="102103041/module3/lec15/1.html">Lentivirus</option>
      
      <option  value="102103041/module3/lec16/1.html">Recombinant SV40 virus</option>
      
      <option  value="102103041/module3/lec17/1.html">Nonviral vectors</option>
      
      <option  value="102103041/module3/lec18/1.html">DNA vaccines</option>
      
      <option  value="102103041/module3/lec19/1.html">Liposomes and lipoplexes (Part I). </option>
      
      <option  value="102103041/module3/lec20/1.html">Liposomes and lipoplexes (Part II).</option>
      
      <option  value="102103041/module3/lec21/1.html">Naked DNA</option>
      
      <option  value="102103041/module3/lec22/1.html">Transposon</option>
      
      <option  value="102103041/module4/lec23/1.html">Cancer gene therapy (Part I).</option>
      
      <option  value="102103041/module4/lec24/1.html">Cancer gene therapy (Part II).</option>
      
      <option  value="102103041/module4/lec25/1.html">Cancer gene therapy (Part III).</option>
      
      <option  value="102103041/module4/lec26/1.html">RNA-DNA chimera</option>
      
      <option  value="102103041/module4/lec27/1.html">Gene therapies for Criglar-Najjar syndrome (Part I).</option>
      
      <option  value="102103041/module4/lec28/1.html">Gene therapies for Criglar-Najjar syndrome (Part II).</option>
      
      <option  value="102103041/module5/lec29/1.html">Cystic fibrosis (part I)</option>
      
      <option  value="102103041/module5/lec30/1.html">Cystic fibrosis (part II)</option>
      
      <option  value="102103041/module5/lec31/1.html">Duchnne muscular dystrophy</option>
      
      <option  value="102103041/module5/lec32/1.html">Bleeding disorders (part I)</option>
      
      <option  value="102103041/module5/lec33/1.html">Bleeding disorders (part II)</option>
      
      <option  value="102103041/module5/lec34/1.html">Tyrosinemia</option>
      
      <option  value="102103041/module6/lec35/1.html">Severe combined immunodeficiency syndrome (SCID) (part I)</option>
      
      <option  value="102103041/module6/lec36/1.html">Severe combined immunodeficiency syndrome (SCID) (part II)</option>
      
      <option  value="102103041/module6/lec37/1.html">Gene therapy of non-heritable disorders (part I)</option>
      
      <option  value="102103041/module6/lec38/1.html">Gene therapy of non-heritable disorders (part II)</option>
      
      <option  value="102103041/module6/lec39/1.html">Recent advancement in Gene Therapy (part I)</option>
      
      <option  value="102103041/module6/lec40/1.html">Recent advancement in Gene Therapy (part II)</option>
      
      <option  value="102103041/midsem/1/1.html">Mid Sem Exam</option>
      
      <option  value="102103041/finalsem/1/1.html">Final Sem Exam</option>
      
      <option  value="102103041/module1/questions/1.html">Question Set I</option>
      
      <option  value="102103041/module2/questions/1.html">Question Set II</option>
      
      <option  value="102103041/module3/questions/1.html">Question Set III</option>
      
      <option  value="102103041/module4/questions/1.html">Question Set IV</option>
      
      <option  value="102103041/module5/questions/1.html">Question Set V</option>
      
      <option  value="102103041/module6/questions/1.html">Question Set VI</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103044</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Bioanalytical Techniques and Bioinformatics</strong></td>
	<td><strong>Dr. Nitin Chaudhary,Dr. Vishal Trivedi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
       <option  value="#">Select </option>
      <option  value="102103041/module1/index.html">Introduction (part I)</option>
      
      <option  value="102103041/module1/lec2/1.html">Introduction (part II)</option>
      
      <option  value="102103041/module1/lec3/1.html">Somatic and germ line gene therapy (part I)</option>
      
      <option  value="102103041/module1/lec4/1.html">Somatic and germ line gene therapy (part II)</option>
      
      <option  value="102103041/module1/lec5/1.html">Gene replacement and gene addition (part I)</option>
      
      <option  value="102103041/module1/lec6/1.html">Gene replacement and gene addition (part II)</option>
      
      <option  value="102103041/module2/lec7/1.html">In vivo, ex vivo and in vitro gene therapy (Part I)</option>
      
      <option  value="102103041/module2/lec8/1.html">In vivo, ex vivo and in vitro gene therapy (PartII)</option>
      
      <option  value="102103041/module2/lec9/1.html">Transgenic animal models (Part I)</option>
      
      <option  value="102103041/module2/lec10/1.html">Transgenic animal models (Part II).  </option>
      
      <option  value="102103041/module2/lec11/1.html">Vehicles for gene transfer-viral vectors: retrovirus (Part I).</option>
      
      <option  value="102103041/module2/lec12/1.html">Vehicles for gene transfer-viral vectors: retrovirus (Part II).</option>
      
      <option  value="102103041/module2/lec13/1.html">Adenovirus</option>
      
      <option  value="102103041/module2/lec14/1.html">Adeno-associated virus.</option>
      
      <option  value="102103041/module3/lec15/1.html">Lentivirus</option>
      
      <option  value="102103041/module3/lec16/1.html">Recombinant SV40 virus</option>
      
      <option  value="102103041/module3/lec17/1.html">Nonviral vectors</option>
      
      <option  value="102103041/module3/lec18/1.html">DNA vaccines</option>
      
      <option  value="102103041/module3/lec19/1.html">Liposomes and lipoplexes (Part I). </option>
      
      <option  value="102103041/module3/lec20/1.html">Liposomes and lipoplexes (Part II).</option>
      
      <option  value="102103041/module3/lec21/1.html">Naked DNA</option>
      
      <option  value="102103041/module3/lec22/1.html">Transposon</option>
      
      <option  value="102103041/module4/lec23/1.html">Cancer gene therapy (Part I).</option>
      
      <option  value="102103041/module4/lec24/1.html">Cancer gene therapy (Part II).</option>
      
      <option  value="102103041/module4/lec25/1.html">Cancer gene therapy (Part III).</option>
      
      <option  value="102103041/module4/lec26/1.html">RNA-DNA chimera</option>
      
      <option  value="102103041/module4/lec27/1.html">Gene therapies for Criglar-Najjar syndrome (Part I).</option>
      
      <option  value="102103041/module4/lec28/1.html">Gene therapies for Criglar-Najjar syndrome (Part II).</option>
      
      <option  value="102103041/module5/lec29/1.html">Cystic fibrosis (part I)</option>
      
      <option  value="102103041/module5/lec30/1.html">Cystic fibrosis (part II)</option>
      
      <option  value="102103041/module5/lec31/1.html">Duchnne muscular dystrophy</option>
      
      <option  value="102103041/module5/lec32/1.html">Bleeding disorders (part I)</option>
      
      <option  value="102103041/module5/lec33/1.html">Bleeding disorders (part II)</option>
      
      <option  value="102103041/module5/lec34/1.html">Tyrosinemia</option>
      
      <option  value="102103041/module6/lec35/1.html">Severe combined immunodeficiency syndrome (SCID) (part I)</option>
      
      <option  value="102103041/module6/lec36/1.html">Severe combined immunodeficiency syndrome (SCID) (part II)</option>
      
      <option  value="102103041/module6/lec37/1.html">Gene therapy of non-heritable disorders (part I)</option>
      
      <option  value="102103041/module6/lec38/1.html">Gene therapy of non-heritable disorders (part II)</option>
      
      <option  value="102103041/module6/lec39/1.html">Recent advancement in Gene Therapy (part I)</option>
      
      <option  value="102103041/module6/lec40/1.html">Recent advancement in Gene Therapy (part II)</option>
      
      <option  value="102103041/midsem/1/1.html">Mid Sem Exam</option>
      
      <option  value="102103041/finalsem/1/1.html">Final Sem Exam</option>
      
      <option  value="102103041/module1/questions/1.html">Question Set I</option>
      
      <option  value="102103041/module2/questions/1.html">Question Set II</option>
      
      <option  value="102103041/module3/questions/1.html">Question Set III</option>
      
      <option  value="102103041/module4/questions/1.html">Question Set IV</option>
      
      <option  value="102103041/module5/questions/1.html">Question Set V</option>
      
      <option  value="102103041/module6/questions/1.html">Question Set VI</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103045</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Fundamentals of Biotechnology</strong></td>
	<td><strong>Dr. Vishal Trivedi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="102103045/module1/index.html">Introduction</option>
      
      <option  value="102103045/module1/lec2/1.html">Water properties and its role in controlling biochemical reactions</option>
      
      <option  value="102103045/module2/lec3/1.html">Cellular structure: prokaryotcic and eukaryotic cells (Part-I) </option>
      
      <option  value="102103045/module2/lec4/1.html">Cellular structure: prokaryotcic and eukaryotic cells(Part-II) </option>
      
      <option  value="102103045/module2/lec5/1.html">Metabolic reactions (Part-I) </option>
      
      <option  value="102103045/module2/lec6/1.html">Metabolic reactions (Part-II) </option>
      
      <option  value="102103045/module2/lec7/1.html">Metabolic reactions (Part-III)</option>
      
      <option  value="102103045/module2/lec8/1.html">Growth media for different expression system </option>
      
      <option  value="102103045/module2/lec9/1.html">Microbial growth kinetics</option>
      
      <option  value="102103045/module3/lec10/1.html">DNA Libaries (PART-I) </option>
      
      <option  value="102103045/module3/lec11/1.html">DNA Libaries (PART-II)</option>
      
      <option  value="102103045/module3/lec12/1.html">Identification and Isolation of a particular gene</option>
      
      <option  value="102103045/module3/lec13/1.html">Basics of Cloning (Part-I)  </option>
      
      <option  value="102103045/module3/lec14/1.html">Basics of Cloning (Part II)</option>
      
      <option  value="102103045/module3/lec15/1.html">Polymerase chain reaction (Part-I)</option>
      
      <option  value="102103045/module3/lec16/1.html">Polymerase chain reaction (Part-II)</option>
      
      <option  value="102103045/module3/lec17/1.html">Cloning Vector (Part-I) </option>
      
      <option  value="102103045/module3/lec18/1.html">Cloning Vector (Part-II) </option>
      
      <option  value="102103045/module3/lec19/1.html">Cloning Vector (Part-III) </option>
      
      <option  value="102103045/module4/lec20/1.html">DNA Delivery in Host Cell (Part-I) </option>
      
      <option  value="102103045/module4/lec21/1.html">DNA Delivery in Host Cell (Part-II) </option>
      
      <option  value="102103045/module4/lec22/1.html">Screening of recombinant clone (Part-I) </option>
      
      <option  value="102103045/module4/lec23/1.html">Screening of recombinant clone (Part II) </option>
      
      <option  value="102103045/module4/lec24/1.html">Protein Production strategies in Expression System (Part-I)</option>
      
      <option  value="102103045/module4/lec25/1.html">Protein Production strategies in Expression System (Part-II)</option>
      
      <option  value="102103045/module4/lec26/1.html">Protein Production strategies in Expression System (Part-III)</option>
      
      <option  value="102103045/module4/lec27/1.html">Protein Production strategies in Expression System (Part-VI)</option>
      
      <option  value="102103045/module5/lec28/1.html">Product Recovery from over-expressed cells</option>
      
      <option  value="102103045/module5/lec29/1.html">Basics of Chromatography</option>
      
      <option  value="102103045/module5/lec30/1.html">Ion-Exchange chromatography</option>
      
      <option  value="102103045/module5/lec31/1.html">Hydrophobic Interaction chromatography</option>
      
      <option  value="102103045/module5/lec32/1.html">Gel Filtration chromatography</option>
      
      <option  value="102103045/module5/lec33/1.html">Affinity Chromatography</option>
      
      <option  value="102103045/module5/lec34/1.html">Thin Layer Chromatography</option>
      
      <option  value="102103045/module5/lec35/1.html">Electrophoresis (Part-I) </option>
      
      <option  value="102103045/module5/lec36/1.html">Electrophoresis (Part-II)</option>
      
      <option  value="102103045/module5/lec37/1.html">DNA sequencing </option>
      
      <option  value="102103045/module5/lec38/1.html">Protein sequencing</option>
      
      <option  value="102103045/module6/lec39/1.html">Biotechnology Application-I</option>
      
      <option  value="102103045/module6/lec40/1.html">Biotechnology Application-II</option>
      
      <option  value="102103045/mid sem exam/1/1.html">Mid Sem Exam</option>
      
      <option  value="102103045/end sem exam/1/1.html">End Sem Exam</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103047</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong> Experimental Biotechnology </strong></td>
	<td><strong>Dr. Vishal Trivedi,  Dr. Nitin Chaudhary</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="102103047/module1/index.html  ">Introduction                                                               </option>
<option  value="102103047/module1/lec2/1.html ">Water and aqueous solutions                                                </option>
<option  value="102103047/module1/lec3/1.html ">Buffers                                                                    </option>
<option  value="102103047/module2/lec4/1.html ">Determination of protein concentration by ultraviolet spectroscopy         </option>
<option  value="102103047/module2/lec5/1.html ">Determination of protein concentration by Bradford method                  </option>
<option  value="102103047/module2/lec6/1.html ">Estimation of DNA using diphenylamine method                               </option>
<option  value="102103047/module2/lec7/1.html ">Melting temperature of DNA                                                 </option>
<option  value="102103047/module2/lec8/1.html ">Equilibrium unfolding of protein                                           </option>
<option  value="102103047/module2/lec9/1.html ">Circular dichroism of proteins � I                                         </option>
<option  value="102103047/module2/lec10/1.html">Circular dichroism of proteins � II                                        </option>
<option  value="102103047/module2/lec11/1.html">Fourier transform infrared spectroscopy of proteins                        </option>
<option  value="102103047/module2/lec12/1.html">Enzyme activity                                                            </option>
<option  value="102103047/module3/lec13/1.html">Electrophoresis (Part-I)                                                   </option>
<option  value="102103047/module3/lec14/1.html">Staining of PAGE Gels                                                      </option>
<option  value="102103047/module3/lec15/1.html">Western Blotting                                                           </option>
<option  value="102103047/module3/lec16/1.html">Electrophoresis (Part-II)                                                  </option>
<option  value="102103047/module3/lec17/1.html">Horizontal Gel Electrohpresis                                              </option>
<option  value="102103047/module3/lec18/1.html">RNA gel                                                                    </option>
<option  value="102103047/module3/lec19/1.html">Nucleic acid Detection                                                     </option>
<option  value="102103047/module4/lec20/1.html">Introduction to chromatography                                             </option>
<option  value="102103047/module4/lec21/1.html">Thin Layer Chromatography                                                  </option>
<option  value="102103047/module4/lec22/1.html">Packing a gel filtration column and determination of void volume           </option>
<option  value="102103047/module4/lec23/1.html">Protein molecular weight determination using gel filtration chromatography </option>
<option  value="102103047/module4/lec24/1.html">Protein purification using ion exchange chromatography                     </option>
<option  value="102103047/module4/lec25/1.html">Protein purification using metal chelate affinity (Ni-NTA) chromatography  </option>
<option  value="102103047/module4/lec26/1.html">HPLC of proteins and peptides                                              </option>
<option  value="102103047/module5/lec27/1.html">Antibody (Part-I)                                                          </option>
<option  value="102103047/module5/lec28/1.html">Antibody (Part-II)                                                         </option>
<option  value="102103047/module5/lec29/1.html">Purification of antibody                                                   </option>
<option  value="102103047/module5/lec30/1.html">ELISA                                                                      </option>
<option  value="102103047/module6/lec31/1.html">Light Microscopy                                                           </option>
<option  value="102103047/module6/lec32/1.html">Microscopy-II                                                              </option>
<option  value="102103047/module6/lec33/1.html">Microscopy (Part-III)                                                      </option>
<option  value="102103047/module6/lec34/1.html">Electron Microscopy-I                                                      </option>
<option  value="102103047/module6/lec35/1.html">Electron Microscopy-II                                                     </option>
<option  value="102103047/module6/lec36/1.html">Atomic Force Microscopy                                                    </option>
<option  value="102103047/module7/lec37/1.html">Preparation of Competent Cells                                             </option>
<option  value="102103047/module7/lec38/1.html">Transformation of Competent Cells                                          </option>
<option  value="102103047/module7/lec39/1.html">Isolation of Recombinant Clones                                            </option>
<option  value="102103047/module7/lec40/1.html">Analysis and Verification of Recombinant Plasmids                          </option>
<option  value="102103047/midsem/1/1.html">Mid Semester                                                               </option>
<option  value="102103047/endsem/1/1.html">End Semester                                                               |</option>


</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102104042</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Animal Physiology</strong></td>
	<td><strong>Prof. Mainak Das</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="102104042/mod01lec01.mp4 ">Lecture-01-Animal Physiology </option>
<option  value="102104042/mod01lec02.mp4 ">Lecture-02-Animal Physiology </option>
<option  value="102104042/mod01lec03.mp4 ">Lecture-03-Animal Physiology </option>
<option  value="102104042/mod01lec04.mp4 ">Lecture-04-Animal Physiology </option>
<option  value="102104042/mod01lec05.mp4 ">Lecture-05-Animal Physiology </option>
<option  value="102104042/mod01lec06.mp4 ">Lecture-06-Animal Physiology </option>
<option  value="102104042/mod01lec07.mp4 ">Lecture-07-Animal Physiology </option>
<option  value="102104042/mod01lec08.mp4 ">Lecture-08-Animal Physiology </option>
<option  value="102104042/mod01lec09.mp4 ">Lecture-09-Animal Physiology </option>
<option  value="102104042/mod01lec10.mp4 ">Lecture-10-Animal Physiology </option>
<option  value="102104042/mod01lec11.mp4 ">Lecture-11-Animal Physiology </option>
<option  value="102104042/mod01lec12.mp4 ">Lecture-12-Animal Physiology </option>
<option  value="102104042/mod01lec13.mp4 ">Lecture-13-Animal Physiology </option>
<option  value="102104042/mod01lec14.mp4 ">Lecture-14-Animal Physiology </option>
<option  value="102104042/mod01lec15.mp4 ">Lecture-15-Animal Physiology </option>
<option  value="102104042/mod01lec16.mp4 ">Lecture-16-Animal Physiology </option>
<option  value="102104042/mod01lec17.mp4 ">Lecture-17-Animal Physiology </option>
<option  value="102104042/mod01lec18.mp4 ">Lecture-18-Animal Physiology </option>
<option  value="102104042/mod01lec19.mp4 ">Lecture-19-Animal Physiology </option>
<option  value="102104042/mod01lec20.mp4 ">Lecture-20-Animal Physiology </option>
<option  value="102104042/mod01lec21.mp4 ">Lecture-21-Animal Physiology </option>
<option  value="102104042/mod01lec22.mp4 ">Lecture-22-Animal Physiology </option>
<option  value="102104042/mod01lec23.mp4 ">Lecture-23-Animal Physiology </option>
<option  value="102104042/mod01lec24.mp4 ">Lecture-24-Animal Physiology </option>
<option  value="102104042/mod01lec25.mp4 ">Lecture-25-Animal Physiology </option>
<option  value="102104042/mod01lec26.mp4 ">Lecture-26-Animal Physiology </option>
<option  value="102104042/mod01lec27.mp4 ">Lecture-27-Animal Physiology </option>
<option  value="102104042/mod01lec28.mp4 ">Lecture-28-Animal Physiology </option>
<option  value="102104042/mod01lec29.mp4 ">Lecture-29-Animal Physiology </option>
<option  value="102104042/mod01lec30.mp4 ">Lecture-30-Animal Physiology </option>
<option  value="102104042/mod01lec31.mp4 ">Lecture-31-Animal Physiology </option>
<option  value="102104042/mod01lec32.mp4 ">Lecture-32-Animal Physiology </option>
<option  value="102104042/mod01lec33.mp4 ">Lecture-33-Animal Physiology </option>
<option  value="102104042/mod01lec34.mp4 ">Lecture-34-Animal Physiology </option>
<option  value="102104042/mod01lec35.mp4 ">Lecture-35-Animal Physiology </option>
<option  value="102104042/mod01lec36.mp4 ">Lecture-36-Animal Physiology </option>
<option  value="102104042/mod01lec37.mp4 ">Lecture-37-Animal Physiology </option>
<option  value="102104042/mod01lec38.mp4 ">Lecture-38-Animal Physiology </option>
<option  value="102104042/mod01lec39.mp4 ">Lecture-39-Animal Physiology </option>
<option  value="102104042/mod01lec40.mp4 ">Lecture-40-Animal Physiology </option>



</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102106022</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong> Downstream Processing</strong></td>
	<td><strong>Prof. Mukesh Doble</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="102106022/mod01lec01.mp4">Introduction                                                          </option>
<option  value="102106022/mod01lec02.mp4 ">Mass Balance, Heat Balance, Flow sheet                                </option>
<option  value="102106022/mod01lec03.mp4 ">Costing                                                               </option>
<option  value="102106022/mod01lec04.mp4 ">Costing (continued) Physical and Chemical Principles in Down Stream   </option>
<option  value="102106022/mod01lec05.mp4 ">Problems in Mass Balance, Flow sheet                                  </option>
<option  value="102106022/mod01lec06.mp4 ">Cell Breakage                                                         </option>
<option  value="102106022/mod01lec07.mp4 ">Cell Breakage (Continued)                                             </option>
<option  value="102106022/mod01lec08.mp4 ">Solid Liquid Separation                                               </option>
<option  value="102106022/mod01lec09.mp4 ">Solid Liquid Separation (Continued)                                   </option>
<option  value="102106022/mod01lec10.mp4 ">Solid Liquid Separation - Problems                                    </option>
<option  value="102106022/mod01lec11.mp4 ">Pre-Treatment and Filters                                             </option>
<option  value="102106022/mod01lec12.mp4 ">Adsorption                                                            </option>
<option  value="102106022/mod01lec13.mp4 ">Adsorption (Continued)                                                </option>
<option  value="102106022/mod01lec14.mp4 ">Adsorption  (Continued)                                               </option>
<option  value="102106022/mod01lec15.mp4 ">Adsorption. (Continued)                                               </option>
<option  value="102106022/mod01lec16.mp4 ">Liquid Liquid Extraction                                              </option>
<option  value="102106022/mod01lec17.mp4 ">Liquid Liquid Extraction (Continued)                                  </option>
<option  value="102106022/mod01lec18.mp4 ">Liquid Liquid Extraction  (Continued)                                 </option>
<option  value="102106022/mod01lec19.mp4 ">Liquid Liquid Extraction(Continued)                                   </option>
<option  value="102106022/mod01lec20.mp4 ">Reversed Micellar and Aqueous Two Phase Extraction                    </option>
<option  value="102106022/mod01lec21.mp4 ">Membranes                                                             </option>
<option  value="102106022/mod01lec22.mp4 ">Membranes (Continued)                                                 </option>
<option  value="102106022/mod01lec23.mp4 ">Membranes  (Continued)                                                </option>
<option  value="102106022/mod01lec24.mp4 ">Membranes(Continued)                                                  </option>
<option  value="102106022/mod01lec25.mp4 ">Precipitation                                                         </option>
<option  value="102106022/mod01lec26.mp4 ">Chromatography                                                        </option>
<option  value="102106022/mod01lec27.mp4 ">Chromatography (Continued)                                            </option>
<option  value="102106022/mod01lec28.mp4 ">Chromatography  (Continued)                                           </option>
<option  value="102106022/mod01lec29.mp4 ">Chromatography   (Continued)                                          </option>
<option  value="102106022/mod01lec30.mp4 ">Chromatography(Continued)                                             </option>
<option  value="102106022/mod01lec31.mp4 ">Chromatography ( Continued)                                           </option>
<option  value="102106022/mod01lec32.mp4 ">Chromatography (Continued )                                           </option>
<option  value="102106022/mod01lec33.mp4 ">HPLC                                                                  </option>
<option  value="102106022/mod01lec34.mp4 ">HPLC.                                                                 </option>
<option  value="102106022/mod01lec35.mp4 ">Crystallisation                                                       </option>
<option  value="102106022/mod01lec36.mp4 ">Drying                                                                </option>
<option  value="102106022/mod01lec37.mp4 ">Drying and Distillation                                               </option>
<option  value="102106022/mod01lec38.mp4 ">Stabilisation, Utilities and Other Auxiliary Processes And Absorption </option>
<option  value="102106022/mod01lec39.mp4 ">Absorption, Electrophoresis/SDS PAGE                                  </option>
<option  value="102106022/mod01lec40.mp4 ">Future Trends, Summary of Course                                      </option>



</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102106023</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Introduction to Computational Neuroscience</strong></td>
	<td><strong>Dr. V Srinivasa Chakravarthy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'>
           <option  value="#">Select </option>
      <option  value="102106023/ch0_introv2.pdf">Introduction</option>
      
      <option  value="102106023/ch1_neuronv_biov2.pdf">Neuron: Structure and Function</option>
      
      <option  value="102106023/ch2_mathsv4.pdf">Mathematical Preliminaries</option>
      
      <option  value="102106023/ch3_hhmodelv1_6.pdf">Hodgkin-Huxley Model</option>
      
      <option  value="102106023/ch4_neuroncomponents_v1.pdf">Modeling the neuron components</option>
      
      <option  value="102106023/ch5_simpleNeuronModelsv5.pdf">Simplified Neuron Models</option>
      
      <option  value="102106023/ch6_perceptron_mlp.pdf">Neural Networks </option>
      
      <option  value="102106023/ch7_Hopfield Networkv5.pdf">Neural Networks- Hopfield network</option>
      
      <option  value="102106023/ch8_unspvisedlrn_hebbianlrning.pdf">Unsupervised Learning-Hebbian Learning</option>
      
      <option  value="102106023/ch9_Competitive Learning_3.pdf">Unsupervised Learning-Competitive Learning</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102106025</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong> Molecular Cell Biology</strong></td>
	<td><strong>Prof. Devarajan Karunagaran</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="102106025/Mod 1/Lec-1.pdf">Introduction to Molecular Cell Biology, Life and Evolution        </option>
<option  value="102106025/Mod 1/Lec-2.pdf">Eukaryotes                                                        </option>
<option  value="102106025/Mod 2/Lec-1.pdf">Nuclear Structure                                                 </option>
<option  value="102106025/Mod 2/Lec-2.pdf">Chromatin Packing                                                 </option>
<option  value="102106025/Mod 3/Lec-1.pdf">Microtubules                                                      </option>
<option  value="102106025/Mod 3/Lec-2.pdf">Micro and Intermediate Filaments                                  </option>
<option  value="102106025/Mod 4/Lec-1.pdf">Cell Membrane and Transport Mechanisms Across The Cell Membrane   </option>
<option  value="102106025/Mod 4/Lec-2.pdf">Microvilli, Gap Junctions and Inter Cellular Communication        </option>
<option  value="102106025/Mod 4/Lec-3.pdf">Endoplasmic Reticulum, Lysosomes, Golgi Apparatus and Endocytosis </option>
<option  value="102106025/Mod 5/Lec-1.pdf">Microscopy                                                        </option>
<option  value="102106025/Mod 5/Lec-2.pdf">Methods to Manipulate Cells and Proteins                          </option>
<option  value="102106025/Mod 6/Lec-1.pdf">Cell Division                                                     </option>
<option  value="102106025/Mod 6/Lec-2.pdf">Cell Cycle                                                        </option>
<option  value="102106025/Mod 6/Lec-3.pdf">Cell Growth and Differentiation                                   </option>
<option  value="102106025/Mod 6/Lec-4.pdf">mTOR Pathway                                                      </option>
<option  value="102106025/Mod 6/Lec-5.pdf">Apoptosis/Programmed Cell Death                                   </option>
<option  value="102106025/Mod 7/Lec-1.pdf">Introduction to Signals and Signal Transduction                   </option>
<option  value="102106025/Mod 7/Lec-2.pdf">GPCR Signaling                                                    </option>
<option  value="102106025/Mod 7/Lec-3.pdf">TGF-&beta; Signaling                                              </option>
<option  value="102106025/Mod 7/Lec-4.pdf">Wnt Signaling                                                     </option>
<option  value="102106025/Mod 7/Lec-5.pdf">NF-&kappa;B Signaling                                             </option>
<option  value="102106025/Mod 7/Lec-6.pdf">Notch Signaling                                                   </option>
<option  value="102106025/Mod 7/Lec-7.pdf">RTK Signaling                                                     </option>
<option  value="102106025/Mod 7/Lec-8.pdf">Ras-MAPK Signaling                                                </option>
<option  value="102106025/Mod 7/Lec-9.pdf">Akt/PKB Signaling                                                 </option>
<option  value="102106025/Mod 7/Lec-10.pdf">JAK-STAT Signaling                                                </option>
<option  value="102106025/Mod 7/Lec-11.pdf">Ion Channels                                                      </option>
<option  value="102106025/Mod 7/Lec-12.pdf">Hedgehog Signaling                                                </option>
<option  value="102106025/Mod 8/Lec-1.pdf">Cell-Cell Interaction                                             </option>
<option  value="102106025/Mod 9/Lec-1.pdf">Introduction to Cancer Biology                                    </option>
<option  value="102106025/Mod 9/Lec-2.pdf">Genes Associated with Cancer                                      </option>
<option  value="102106025/Mod 9/Lec-3.pdf">Deregulated Signaling Pathways in Cancer                          </option>
<option  value="102106025/Mod 9/Lec-4.pdf">Tumor Immunology                                                  </option>
<option  value="102106025/Mod 9/Lec-5.pdf">Molecularly Targeted Therapies for Cancer                         </option>
<option  value="102106025/Mod 9/Lec-6.pdf">Epigenetics and Cancer                                            </option>
<option  value="102106025/Mod 9/Lec-7.pdf">DNA Repair Mechanisms and Cancer                                  </option>
<option  value="102106025/Mod 10/Lec-1.pdf">An Introduction to Pathogens                                      </option>
<option  value="102106025/Mod 10/Lec-2.pdf">Bacterial Pathogenesis                                            </option>
<option  value="102106025/Mod 10/Lec-3.pdf">Viral Pathogenesis                                                </option>
<option  value="102106025/Mod 10/Lec-4.pdf">Protozoan Disease-Malaria                                         </option>



</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>102106026</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Thermodynamics</strong></td>
	<td><strong>Prof. G.K. Suraishkumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
           <option  value="#">Select </option>
      <option  value="102106026/mod01lec01.mp4">Introduction and Review</option>
      
      <option  value="102106026/mod02lec02.mp4">Need for Analysis Additional Thermodynamic Functions State and Path Variables</option>
      
      <option  value="102106026/mod02lec03.mp4">Equations for a Closed system Chemical Potential Concept Gibbs-Duhem Equation</option>
      
      <option  value="102106026/mod02lec04.mp4">Maxwell�s relations</option>
      
      <option  value="102106026/mod02lec05.mp4">Inter-Relationships between Thermodynamic Variables</option>
      
      <option  value="102106026/mod02lec06.mp4">Some Useful Mathematical Manipulations</option>
      
      <option  value="102106026/mod02lec07.mp4">Thermodynamic Relations for a Closed System with 1 mole of a pure Substances</option>
      
      <option  value="102106026/mod02lec08.mp4">Maximum Work,Lost Work Review of Closed Systems</option>
      
      <option  value="102106026/mod02lec09.mp4">Open Systems</option>
      
      <option  value="102106026/mod03lec10.mp4">Equations of State - Virial Equations</option>
      
      <option  value="102106026/mod03lec11.mp4">Equations of State - Cubic Equations</option>
      
      <option  value="102106026/mod03lec12.mp4">Volume Estimation</option>
      
      <option  value="102106026/mod03lec13.mp4">Volume Estimation (cont.,)Generalized correlations</option>
      
      <option  value="102106026/mod03lec14.mp4">Generalized correlations(cont)Residual Properties</option>
      
      <option  value="102106026/mod03lec15.mp4">Residual Properties(cont.,)</option>
      
      <option  value="102106026/mod03lec16.mp4">Generalized Correlations and Residual Properties</option>
      
      <option  value="102106026/mod03lec17.mp4">Fugacity Coefficient Estimation</option>
      
      <option  value="102106026/mod03lec18.mp4">Review of Module 3</option>
      
      <option  value="102106026/mod04lec19.mp4">Learning Aspects Chemical Potential Formulations</option>
      
      <option  value="102106026/mod04lec20.mp4">Lewis and Randall rule partial Molar Properties</option>
      
      <option  value="102106026/mod04lec21.mp4">Partial Molar Property Estimation from Mixing Experiments</option>
      
      <option  value="102106026/mod04lec22.mp4">Partial Molar Property Estimation (cont.,) Excess Property</option>
      
      <option  value="102106026/mod04lec23.mp4">Activity Coefficient from Excess Property</option>
      
      <option  value="102106026/mod04lec24.mp4">Activity Coefficient from Excess Property (cont.,)</option>
      
      <option  value="102106026/mod04lec25.mp4">Activity Coefficient from Excess Property(cont.,) Models for Activity Coefficient in Binary Systems</option>
      
      <option  value="102106026/mod04lec26.mp4">Models for Activity Coefficient in Binary Systems(cont.,)</option>
      
      <option  value="102106026/mod04lec27.mp4">Review of Module 4</option>
      
      <option  value="102106026/mod05lec28.mp4">Criteria for Phase Equilibrium Phase Rule for Non-reacting Biosystems</option>
      
      <option  value="102106026/mod05lec29.mp4">Clausius - Clayperon Equation</option>
      
      <option  value="102106026/mod05lec30.mp4">Clausius - Clayperon Equation(cont.,)vapour-Liquid Equilibrium</option>
      
      <option  value="102106026/mod05lec31.mp4">Vapour-Liquid Equilibrium(cont.,) Estimation of Fugacity coefficient from Equilibrium P-V-T Data</option>
      
      <option  value="102106026/mod05lec32.mp4">Liquid/Liquid and Solid/Liquid Equilibria</option>
      
      <option  value="102106026/mod05lec33.mp4">Review of Module 5</option>
      
      <option  value="102106026/mod06lec34.mp4">Criteria for Bio-reaction Equilibria</option>
      
      <option  value="102106026/mod06lec35.mp4">Phase rule for Reacting Biosystems Equilibrium constants</option>
      
      <option  value="102106026/mod06lec36.mp4">Effect of Temperature and Pressure on the Equilibrium constants</option>
      
      <option  value="102106026/mod06lec37.mp4">Reaction in Liquid or Solid Phases</option>
      
      <option  value="102106026/mod06lec38.mp4">Free energy Changes for some Bioreactions</option>
      
      <option  value="102106026/mod06lec39.mp4">Electrolytes</option>
      
      <option  value="102106026/mod06lec40.mp4">Course Review</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102106035</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Systems Biology</strong></td>
	<td><strong>Dr. M. Vijayalakshmi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="102106035/Module 1/Lecture 1/Lecture 1.pdf">Systems Biology � An Overview</option>
      
      <option  value="102106035/Module 1/Lecture 2/Lecture 2.pdf">Overview of Gene Control</option>
      
      <option  value="102106035/Module 1/Lecture 3/Lecture 3.pdf">Gene Control Mechanisms at Transcriptional and Translational Levels</option>
      
      <option  value="102106035/Module 1/Lecture 4/Lecture 4.pdf">Genetic Switches � I</option>
      
      <option  value="102106035/Module 1/Lecture 5/Lecture 5.pdf">Genetic Switches � II</option>
      
      <option  value="102106035/Module 1/Lecture 6/Lecture 6.pdf">Biochemical, Genetics and Systems Biology Paradigms</option>
      
      <option  value="102106035/Module 2/Lecture 1/Lecture 1.pdf">Quorum Sensing � The Language of Bacteria</option>
      
      <option  value="102106035/Module 2/Lecture 2/Lecture 2.pdf">Quorum Sensing in Gram Negative and Gram Positive Bacteria</option>
      
      <option  value="102106035/Module 2/Lecture 3/Lecture 3.pdf">Hybrid Quorum Sensing in Vibrio harveyi � Two Component         Signalling</option>
      
      <option  value="102106035/Module 2/Lecture 4/Lecture 4.pdf">Programmed Population Control by Cell �Cell Communication and          Regulated Killing � I</option>
      
      <option  value="102106035/Module 2/Lecture 5/Lecture 5.pdf">Programmed Population Control by Cell �Cell Communication and Regulated Killing � II</option>
      
      <option  value="102106035/Module 2/Lecture 6/Lecture 6.pdf">Drosophila melanogaster � Life Cycle</option>
      
      <option  value="102106035/Module 2/Lecture 7/Lecture 7.pdf">Drosophila melanogaster � Morphogen Gradient</option>
      
      <option  value="102106035/Module 2/Lecture 8/Lecture 8.pdf">Establishment of Developmental Precision and Proportions in the  Early Drosophila Embryo</option>
      
      <option  value="102106035/Module 3/Lecture 1/Lecture 1.pdf">Michaelis Menten Kinetics � Enzyme Binding and Cooperativity</option>
      
      <option  value="102106035/Module 3/Lecture 2/Lecture 2.pdf">Michaelis Menten Kinetics � I</option>
      
      <option  value="102106035/Module 3/Lecture 3/Lecture 3.pdf">Michaelis Menten Kinetics � Enzyme Inhibition</option>
      
      <option  value="102106035/Module 3/Lecture 4/Lecture 4.pdf">Michaelis Menten Kinetics � Identical Independent Binding Sites</option>
      
      <option  value="102106035/Module 3/Lecture 5/Lecture 5.pdf">Michaelis Menten Kinetics � Sequential Model of Cooperativity</option>
      
      <option  value="102106035/Module 3/Lecture 6/Lecture 6.pdf">Michaelis Menten Kinetics , Non Identical Interacting Binding Sites</option>
      
      <option  value="102106035/Module 3/Lecture 7/Lecture 7.pdf">Structure ad Genetic Map of Lambda Phage</option>
      
      <option  value="102106035/Module 3/Lecture 8/Lecture 8.pdf">The Classical Genetic Switch in Lambda Phage - Lytic and Lysogeny  Decisions</option>
      
      <option  value="102106035/Module 3/Lecture 9/Lecture 9.pdf">Noise in Gene Expression</option>
      
      <option  value="102106035/Module 3/Lecture 10/Lecture 10.pdf">Quantifying  Noise in Gene Expression</option>
      
      <option  value="102106035/Module 3/Lecture 11/Lecture 11.pdf">Noise in Gene Regulatory Networks</option>
      
      <option  value="102106035/Module 3/Lecture 12/Lecture 12.pdf">Noise based Switches and Amplifiers for Gene Expression </option>
      
      <option  value="102106035/Module 3/Lecture 13/Lecture 13.pdf">Bacterial Chemo taxis</option>
      
      <option  value="102106035/Module 3/Lecture 14/Lecture 14.pdf">The Signalling Pathway in Chemo taxis</option>
      
      <option  value="102106035/Module 4/Lecture 1/Lecture 1.pdf">Gene Expression Networks</option>
      
      <option  value="102106035/Module 4/Lecture 2/Lecture 2.pdf">Transcription Networks I</option>
      
      <option  value="102106035/Module 4/Lecture 3/Lecture 3.pdf">Transcription Networks II</option>
      
      <option  value="102106035/Module 4/Lecture 4/Lecture 4.pdf">Networks in Biology - Network Motifs</option>
      
      <option  value="102106035/Module 4/Lecture 5/Lecture 5.pdf">Feed Forward Loops in Biological Systems</option>
      
      <option  value="102106035/Module 4/Lecture 6/Lecture 6.pdf">Coherent Feed Forward Loops</option>
      
      <option  value="102106035/Module 4/Lecture 7/Lecture 7.pdf">Incoherent  Feed Forward Loops</option>
      
      <option  value="102106035/Module 4/Lecture 8/Lecture 8.pdf">Kinetics of Coherent FFLs-Sign sensitive delay circuits</option>
      
      <option  value="102106035/Module 4/Lecture 9/Lecture 9.pdf">Kinetics of Incoherent FFLs-Sign sensitive accelerator circuits</option>
      
      <option  value="102106035/Module 5/Lecture 1/Lecture 1.pdf">Pathway Mapping through KEGG</option>
      
      <option  value="102106035/Module 5/Lecture 2/Lecture 2.pdf">Cytoscape</option>
      
      <option  value="102106035/Module 5/Lecture 3/Lecture 3.pdf">Virtual Cell</option>
          </select></td>
	
	</tr>
	</form>
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102103013</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Genetic Engineering & Applications</strong></td>
	<td><strong>Dr. Utpal Bora</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
  <option  value="102103013/module1/index.html">Role of genes within cells, genetic code, genetic elements that control gene expression </option>
 <option  value="102103013/module1/lec2/1.html">Method of creating recombinant DNA molecules</option>
 <option  value="102103013/module1/lec3/1.html">Types, biology and salient features of vectors in recombinant DNA technology:  Plasmids</option>
 <option  value="102103013/module1/lec4/1.html">Types, biology and salient features of vectors in recombinant DNA technology</option>
 <option  value="102103013/module1/lec5/1.html">Safety guidelines for recombinant DNA research </option>
 <option  value="102103013/module1/lec6/1.html">Control of spills and mechanism of implementation of biosafety guidelines</option>
 <option  value="102103013/module2/lec1/1.html">Enzymes in genetic engineering: Restriction nucleases:  exo & endo nucleases</option>
 <option  value="102103013/module2/lec2/1.html">Enzymes in modification- Polynucleotide phosphorylase, DNase and their mechanism of action.</option>
 <option  value="102103013/module2/lec3/1.html">Enzymes in modification- Methylases and phosphatases and their mechanism of action.</option>
 <option  value="102103013/module2/lec4/1.html">Enzymes in modification- Polynucleotide kinase, Ligases, RNase and their mechanism of action.</option>
 <option  value="102103013/module3/lec1/1.html">Methods of nucleic acid detection.</option>
 <option  value="102103013/module3/lec2/1.html">Polymerase chain reaction (PCR) and its applications</option>
 <option  value="102103013/module3/lec3/1.html">Variations in PCR and their applications</option>
 <option  value="102103013/module3/lec4/1.html">Methods of nucleic acid hybridization</option>
 <option  value="102103013/module3/lec5/1.html">Probe and target sequences</option>
 <option  value="102103013/module3/lec6/1.html">Nucleic acid mutagenesis in vivo and in vitro </option>
 <option  value="102103013/module4/lec1/1.html">Isolation and purification of nucleic acid (genomic/plasmid DNA and RNA)</option>
 <option  value="102103013/module4/lec2/1.html">Quantification and storage of nucleic acids.</option>
 <option  value="102103013/module4/lec3/1.html">Construction of cDNA library</option>
 <option  value="102103013/module4/lec4/1.html">Construction of Genomic library</option>
 <option  value="102103013/module4/lec5/1.html">Screening and preservation of DNA libraries</option>
 <option  value="102103013/module5/lec1/1.html">Gene transfer techniques: biological methods</option>
 <option  value="102103013/module5/lec2/1.html">Gene transfer techniques: chemical methods</option>
 <option  value="102103013/module5/lec3/1.html">Gene transfer techniques: physical or mechanical methods</option>
 <option  value="102103013/module5/lec4/1.html">Agro- bacterium mediated gene transfer in plants</option>
 <option  value="102103013/module5/lec5/1.html">Chloroplast transformation</option>
 <option  value="102103013/module6/lec1/1.html">Transgenic science in plant improvement</option>
 <option  value="102103013/module6/lec2/1.html">Biopharming - plants as bioreactors</option>
 <option  value="102103013/module6/lec3/1.html">Transgenic science for animal improvement </option>
 <option  value="102103013/module6/lec4/1.html">Biopharming- Animals as bioreactor for recombinant protein</option>
 <option  value="102103013/module6/lec5/1.html">Gene mapping in plants and animals</option>
 <option  value="102103013/module6/lec6/1.html">Marker-assisted selection for plant breeding and livestock improvement</option>
 <option  value="102103013/module7/lec1/1.html">Microbial biotechnology: Genetic manipulation</option>
 <option  value="102103013/module7/lec2/1.html">Engineering microbes for the production of antibiotics and enzymes</option>
 <option  value="102103013/module7/lec3/1.html">Engineering microbes for the production of insulin, growth hormones, monoclonal antibodies</option>
 <option  value="102103013/module7/lec4/1.html">Engineering microbes for clearing oil spills</option>
 <option  value="102103013/module8/lec1/1.html">Gene therapy: Introduction and Methods</option>
 <option  value="102103013/module8/lec2/1.html">Gene targeting & silencing</option>
 <option  value="102103013/module8/lec3/1.html">Gene therapy in the treatment of diseases</option>
 <option  value="102103013/module8/lec4/1.html">Challenges & future of gene therapy</option>
 <option  value="102103013/module1/problems/1.html"> M1-Problems</option>
 <option  value="102103013/module2/problems/1.html"> M2-Problems </option>
 <option  value="102103013/module3/problems/1.html">M3-Problems</option>
 <option  value="102103013/module5/problems/1.html">M5-Problems</option>
 <option  value="102103013/module6/problems/1.html">M6-Problems</option>
 <option  value="102103013/module7/problems/1.html">M7-Problems</option>
 <option  value="102103013/module8/problems/1.html">M8-Problems</option>
 <option  value="102103013/module4/lec6/1.html">DNA Sequencing and Cloning Stategies</option>
 <option  value="102103013/module4/problems/1.html">M4-Problems</option>




          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102106036</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong>Tissue Engineering</strong></td>
	<td><strong>Dr. S. Swaminathan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>SASTRA University</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
  <option  value="102106036/Module 1/Lecture 1/Lecture 1.pdf">Introduction to Tissue Engineering</option>
 <option  value="102106036/Module 1/Lecture 2/Lecture 2.pdf">Cells as Therapeutic Agents</option>
 <option  value="102106036/Module 1/Lecture 3/Lecture 3.pdf">Cells as Therapeutic Agents.</option>
 <option  value="102106036/Module 2/Lecture 1/Lecture 1.pdf">Tissue Organization</option>
 <option  value="102106036/Module 2/Lecture 2/Lecture  2.pdf">Extracellular Matrix</option>
 <option  value="102106036/Module 2/Lecture 3/Lecture 3.pdf">Tissue Organization.</option>
 <option  value="102106036/Module 3/Lecture 1/Lecture 1.pdf">Cellular Fate Processes</option>
 <option  value="102106036/Module 3/Lecture 2/Lecture 2.pdf">Cellular Fate Processes.</option>
 <option  value="102106036/Module 4/Lecture 1/Lecture 1.pdf">Cell Division</option>
 <option  value="102106036/Module 4/Lecture 2/Lecture 2.pdf">Cell death – biological process of apoptosis</option>
 <option  value="102106036/Module 5/Lecture 1/Lecture 1.pdf">Coordination of cellular fate process</option>
 <option  value="102106036/Module 5/Lecture 2/Lecture 2.pdf">Coordination of cellular fate process.</option>
 <option  value="102106036/Module 5/Lecture 3/Lecture 3.pdf">Malfunctions in soluble signalling</option>
 <option  value="102106036/Module 6/Lecture 1/Lecture 1.pdf">How Cell-Extra cellular matrix interactions can co-ordinate cell fates?</option>
 <option  value="102106036/Module 6/Lecture 2/Lecture 2.pdf">Direct cell-cell contact</option>
 <option  value="102106036/Module 6/Lecture 3/Lecture 3.pdf">Bidirectional nature of cell-cell communication</option>
 <option  value="102106036/Module 7/Lecture 1/Module 7 - Lecture 1.pdf">Microscopic Characterization of Tissues and Biomaterials</option>
 <option  value="102106036/Module 7/Lecture 2/Lecture 2.pdf">Basic tools to detect cell fate and cell functions</option>
 <option  value="102106036/Module 8/Lecture 1/Lecture 1.pdf">Cell and Tissue Culture</option>
 <option  value="102106036/Module 8/Lecture 2/Lecture 2.pdf">Culture Environment and maintenance of cells in vitro</option>
 <option  value="102106036/Module 9/Lecture 1/Lecture 1.pdf">Cell separation</option>
 <option  value="102106036/Module 10/Lecture 1/Lecture 1.pdf">Biomaterials in tissue engineering</option>
 <option  value="102106036/Module 10/Lecture 2/Lecture 2.pdf">Scanning Electron Microscope</option>
 <option  value="102106036/Module 10/Lecture 3/Lecture 3.pdf">Biomaterials in tissue engineering.</option>
 <option  value="102106036/Module 10/Lecture 4/Lecture 4.pdf">Scaffold fabrication technologies and tailoring Biomaterials</option>
 <option  value="102106036/Module 11/Lecture 1/Lecture 1.pdf">Growth factor delivery</option>
 <option  value="102106036/Module 11/Lecture 2/Lecture 2.pdf">Stem cells</option>
 <option  value="102106036/Module 11/Lecture 3/Lecture 3.pdf">Stem cells and tissue engineering</option>
 <option  value="102106036/Module 12/Lecture 1/Lecture 1.pdf">Gene transfer</option>
 <option  value="102106036/Module 12/Lecture 2/Lecture 2.pdf">Gene transfer.</option>
 <option  value="102106036/Module 12/Lecture 3/Lecture 3.pdf">Gene transfer..</option>
 <option  value="102106036/Module 13/Lecture 1/Lecture 1.pdf">Bioreactors in tissue engineering</option>
 <option  value="102106036/Module 14/Lecture 1/Lecture 1.pdf">Artificial blood vessels</option>
 <option  value="102106036/Module 14/Lecture 2/Module 14 - Lecture 2.pdf">Artificial blood vessels.</option>
 <option  value="102106036/Module 15/Lecture 1/Lecture 1.pdf">Artificial pancreas</option>
 <option  value="102106036/Module 15/Lecture 2/Lecture 2.pdf">Artificial Pancreas.</option>
 <option  value="102106036/Module 15/Lecture 3/Lecture 3.pdf">Liver Tissue Engineering</option>




          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>102107028</strong></td>
	<td><strong>Biotechnology</strong></td>
	<td><strong> Analytical Technologies in Biotechnology </strong></td>
	<td><strong>Dr. Ashwani K. Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
<option  value="102107028/mod01lec01.mp4">Basic concepts in microscopy 1                                                              </option>
<option  value="102107028/mod01lec02.mp4">Basic concepts in microscopy 2                                                              </option>
<option  value="102107028/mod01lec03.mp4">Dark-field and phase contrast microscopy                                                    </option>
<option  value="102107028/mod01lec04.mp4">Differential interference contrast and polarization                                         </option>
<option  value="102107028/mod01lec05.mp4">Fluorescence and confocal microscopy                                                        </option>
<option  value="102107028/mod01lec06.mp4">Transmission electron microscopy                                                            </option>
<option  value="102107028/mod01lec07.mp4">Transmission electron microscopy cont. and scanning electron microscopy                     </option>
<option  value="102107028/mod02lec01.mp4">Basic concepts 1                                                                            </option>
<option  value="102107028/mod02lec02.mp4">Basic concepts 2                                                                            </option>
<option  value="102107028/mod02lec03.mp4">GM counting and Scintillation counting                                                      </option>
<option  value="102107028/mod02lec04.mp4">Scintillation counting continued                                                            </option>
<option  value="102107028/mod02lec05.mp4">Autoradiography and RIA                                                                     </option>
<option  value="102107028/mod02lec06.mp4">Safety aspects and applications                                                             </option>
<option  value="102107028/mod03lec01.mp4">Introduction and Basic concepts in chromatography 1                                         </option>
<option  value="102107028/mod03lec02.mp4">Basic concepts in chromatography 2                                                          </option>
<option  value="102107028/mod03lec03.mp4">Low-pressure liquid chromatography (LPLC) and high performance liquid chromatography (HPLC) </option>
<option  value="102107028/mod03lec04.mp4">Ion-exchange chromatography                                                                 </option>
<option  value="102107028/mod03lec05.mp4">Gel-filtration chromatography                                                               </option>
<option  value="102107028/mod03lec06.mp4">Affinity chromatography                                                                     </option>
<option  value="102107028/mod03lec07.mp4">Gas-liquid chromatography                                                                   </option>
<option  value="102107028/mod04lec01.mp4">Basic concepts in electrophoresis                                                           </option>
<option  value="102107028/mod04lec02.mp4">Horizontal and vertical gel electrophoresis                                                 </option>
<option  value="102107028/mod04lec03.mp4">Native gel electrophoresis and SDS-PAGE                                                     </option>
<option  value="102107028/mod04lec04.mp4">Isoelectric focusing (IEF), 2-D gel electrophoresis and protein detection methods           </option>
<option  value="102107028/mod04lec05.mp4">Electrophoresis of nucleic acids                                                            </option>
<option  value="102107028/mod04lec06.mp4">Immunoelectrophoresis and capillary electrophoresis                                         </option>
<option  value="102107028/mod05lec01.mp4">Introduction and basic concepts 1                                                           </option>
<option  value="102107028/mod05lec02.mp4">Basic concepts-2                                                                            </option>
<option  value="102107028/mod05lec03.mp4">Types of centrifuges and analytical ultracentrifugation method                              </option>
<option  value="102107028/mod05lec04.mp4">Separation methods in preparative ultracentrifuges                                          </option>
<option  value="102107028/mod05lec05.mp4">Types of rotors                                                                             </option>
<option  value="102107028/mod05lec06.mp4">Types of rotors cont. and care of rotors                                                    </option>
<option  value="102107028/mod06lec01.mp4">Introduction and basic concepts                                                             </option>
<option  value="102107028/mod06lec02.mp4">UV-Visible spectroscopy                                                                     </option>
<option  value="102107028/mod06lec03.mp4">Infrared and fluorescence spectroscopy                                                      </option>
<option  value="102107028/mod06lec04.mp4">Circular dichroism (CD) spectroscopy                                                        </option>
<option  value="102107028/mod06lec05.mp4">Nuclear magnetic resonance (NMR) spectroscopy and X-ray crystallography                     </option>
<option  value="102107028/mod06lec06.mp4">Atomic spectroscopy and mass spectrometry                                                   </option>
<option  value="102107028/mod07lec01.mp4">Polymerase chain reaction(PCR)                                                              </option>
<option  value="102107028/mod07lec02.mp4">DNA sequencing methods                                                                      </option>
<option  value="102107028/mod07lec03.mp4">Enzyme linked immunosorbent assay (ELISA)                                                   </option>
</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>102106048</strong></td>
      <td><strong>Biotechnology</strong></td>
      <td><strong>NOC:Principles of Downstream techniques in Bioprocess</strong></td>
      <td><strong>Prof. Mukesh Doble</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  102106048/  mod01lec01.mp4  ">  Introduction  </option>
          <option  value="  102106048/  mod01lec02.mp4  ">  Mass balance, Heat Balance, Flow sheet  </option>
          <option  value="  102106048/  mod01lec03.mp4  ">  Costing </option>
          <option  value="  102106048/  mod01lec04.mp4  ">  Cell Breakage </option>
          <option  value="  102106048/  mod02lec05.mp4  ">  Solid Liquid Separation </option>
          <option  value="  102106048/  mod02lec06.mp4  ">  Pre-treatment and Filters/centrifuge  </option>
          <option  value="  102106048/  mod02lec07.mp4  ">  Liquid-Liquid Extraction  </option>
          <option  value="  102106048/  mod02lec08.mp4  ">  Liquid-Liquid extraction (continued)  </option>
          <option  value="  102106048/  mod03lec09.mp4  ">  Adsorption  </option>
          <option  value="  102106048/  mod03lec10.mp4  ">  Reversed micellar and aqueous two phase extraction  </option>
          <option  value="  102106048/  mod03lec11.mp4  ">  Membranes </option>
          <option  value="  102106048/  mod03lec12.mp4  ">  Membranes (continued) </option>
          <option  value="  102106048/  mod04lec13.mp4  ">  Product stabilization, Drying, Lyophilisation </option>
          <option  value="  102106048/  mod04lec14.mp4  ">  Precipitation and crystallization </option>
          <option  value="  102106048/  mod04lec15.mp4  ">  Electrophoresis / SDS PAGE  </option>
          <option  value="  102106048/  mod04lec16.mp4  ">  Chromatography  </option>
          <option  value="  102106048/  mod05lec17.mp4  ">  Chromatography continued_1  </option>
          <option  value="  102106048/  mod05lec18.mp4  ">  Chromatography continued_2  </option>
          <option  value="  102106048/  mod05lec19.mp4  ">  Chromatography continued_3  </option>
          <option  value="  102106048/  mod05lec20.mp4  ">  Future trends, Other downstream operations/Summary of the course  </option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>102101049</strong></td>
      <td><strong>Biotechnology</strong></td>
      <td><strong>NOC:Proteins and Gel-Based Proteomics</strong></td>
      <td><strong>Prof. Sanjeeva Srivastava</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Bombay</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  102101049/  mod01lec01.mp4  ">  Proteins and Gel-Based Proteomics; Course Introduction  </option>
          <option  value="  102101049/  mod01lec02.mp4  ">  L1. Introduction to amino acids </option>
          <option  value="  102101049/  mod02lec03.mp4  ">  L2. Introduction to proteins  </option>
          <option  value="  102101049/  mod02lec04.mp4  ">  L3. Protein folding & misfolding  </option>
          <option  value="  102101049/  mod02lec05.mp4  ">  L4. Protein purification techniques </option>
          <option  value="  102101049/  mod02lec06.mp4  ">  L5. Introduction to proteomics  </option>
          <option  value="  102101049/  mod03lec07.mp4  ">  L6. Systems biology and proteomics  </option>
          <option  value="  102101049/  mod03lec08.mp4  ">  L7. Sample preparation and pre-analytical factors </option>
          <option  value="  102101049/  mod03lec09.mp4  ">  L8. Sample preparation: Pre-analytical factors (contd.) </option>
          <option  value="  102101049/  mod03lec10.mp4  ">  L9. Sample preparation: Protein extraction and quantification </option>
          <option  value="  102101049/  mod03lec11.mp4  ">  L10. One-dimensional electrophoresis  </option>
          <option  value="  102101049/  mod04lec12.mp4  ">  L11. 2-DE: Rehydration, IEF & Equilibration </option>
          <option  value="  102101049/  mod04lec13.mp4  ">  L12. 2-DE: Second dimension, staining & destaining  </option>
          <option  value="  102101049/  mod04lec14.mp4  ">  L13. 2-DE: Gel analysis </option>
          <option  value="  102101049/  mod04lec15.mp4  ">  L14. 2-DE: Applications </option>
          <option  value="  102101049/  mod04lec16.mp4  ">  L15. 2-DE: Applications (contd.) & Challenges </option>
          <option  value="  102101049/  mod05lec17.mp4  ">  L16. 2D-DIGE: Basics  </option>
          <option  value="  102101049/  mod05lec18.mp4  ">  L17. 2D-DIGE: Data analysis </option>
          <option  value="  102101049/  mod05lec19.mp4  ">  L18. 2D-DIGE: Applications  </option>
          <option  value="  102101049/  mod04lec20.mp4  ">  L19. Protein identification using MALDI-TOF/TOF </option>
          <option  value="  102101049/  mod04lec21.mp4  ">  L20. Proteomics experiment data analysis & challenges </option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>102101050</strong></td>
      <td><strong>Biotechnology</strong></td>
      <td><strong>NOC:Mass spectrometry based proteomics</strong></td>
      <td><strong>Prof. Sanjeeva Srivastava</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Bombay</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  102101050/  mod01lec01.mp4  ">  Introductory lecture  </option>
          <option  value="  102101050/  mod01lec02.mp4  ">  Lecture 1: Introduction to proteomics </option>
          <option  value="  102101050/  mod01lec03.mp4  ">  Lecture 2: Proteomics and sample preparation  </option>
          <option  value="  102101050/  mod01lec04.mp4  ">  Lecture 3: Bacterial protein extraction </option>
          <option  value="  102101050/  mod01lec05.mp4  ">  Lecture 4: In-gel digestion </option>
          <option  value="  102101050/  mod01lec06.mp4  ">  Lecture 5: Fundamentals of mass spectrometry  </option>
          <option  value="  102101050/  mod02lec07.mp4  ">  Lecture 6: Chromatography technologies  </option>
          <option  value="  102101050/  mod02lec08.mp4  ">  Lecture 7: Liquid chromatography  </option>
          <option  value="  102101050/  mod02lec09.mp4  ">  Lecture 8: Mass spectrometry: Ionization sources  </option>
          <option  value="  102101050/  mod02lec10.mp4  ">  Lecture 9: Mass spectrometry: Mass analyzers  </option>
          <option  value="  102101050/  mod02lec11.mp4  ">  Lecture 10: MALDI sample preparation and analysis </option>
          <option  value="  102101050/  mod03lec12.mp4  ">  Lecture 11: Introduction to quantitative proteomics </option>
          <option  value="  102101050/  mod03lec13.mp4  ">  Lecture 12: Hybrid mass spectrometry configurations </option>
          <option  value="  102101050/  mod03lec14.mp4  ">  Lecture 13: SILAC: In Vivo labeling </option>
          <option  value="  102101050/  mod03lec15.mp4  ">  Lecture 14: iTRAQ: In Vitro labeling  </option>
          <option  value="  102101050/  mod03lec16.mp4  ">  Lecture 15: TMT: In vitro labeling  </option>
          <option  value="  102101050/  mod04lec17.mp4  ">  Lec 16: Quantitative proteomics data analysis </option>
          <option  value="  102101050/  mod04lec18.mp4  ">  Lec 17: Proteomics and Systems biology I  </option>
          <option  value="  102101050/  mod04lec19.mp4  ">  Lec 18: Proteomics & Systems biology II </option>
          <option  value="  102101050/  mod04lec20.mp4  ">  Lec 19: Proteomics applications </option>
          <option  value="  102101050/  mod04lec21.mp4  ">  Lec 20: Advances and challenges in proteomics </option>
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