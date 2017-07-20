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
<title>Humanities</title>
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
	<td><strong>109101003</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Contemporary Issues in Philosophy of Mind & Cognition</strong></td>
	<td><strong>Dr. Ranjan K.Panda,Dr. Rajakishore Nath</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109101003/modules/lec1/objectives_L1.html">Lecture 1 : Introduction</option>
      
      <option  value="109101003/modules/lec2/objectives_L2.html">Lecture 2 : Transcendental Consciousness</option>
      
      <option  value="109101003/modules/lec3-4/objectives_L3-4.html">Lecture 3-4 : Plato�s Concept of Soul</option>
      
      <option  value="109101003/modules/lec5/objectives_L5.html">Lecture 5 : Aristotle�s Concept of Soul</option>
      
      <option  value="109101003/modules/lec6/objectives_L6.html">Lecture 6 : The Concept of Mind in Upanisads</option>
      
      <option  value="109101003/modules/lec7-8/objectives_L7-8.html">Lecture 7-8 : Descartes Philosophy of Mind</option>
      
      <option  value="109101003/modules/lec9/objectives_L9.html">Lecture 9 : Searle�s Cartesian Legacy: Dualism Persists</option>
      
      <option  value="109101003/modules/lec10/objectives_L10.html">Lecture 10 : Against Dualism</option>
      
      <option  value="109101003/modules/lec11/objectives_L11.html">Lecture 11 : Property Dualism</option>
      
      <option  value="109101003/modules/lec12-13/objectives_L12-13.html">Lecture 12-13 : Materialists' Conception of Mind and Mind-Body Identity</option>
      
      <option  value="109101003/modules/lec14/objectives_L14.html">Lecture 14 : Functionalism</option>
      
      <option  value="109101003/modules/lec15/objectives_L15.html">Lecture 15 : The Cognitive Mind</option>
      
      <option  value="109101003/modules/lec16/objectives_L16.html">Lecture 16 : Connectionism and Folk Psychology</option>
      
      <option  value="109101003/modules/lec17-18/objectives_L17-18.html">Lecture 17-18 : Representations</option>
      
      <option  value="109101003/modules/lec19-20-21/objectives_L19-20-21.html">Lecture 19-20-21 : Artificial Intelligence (AI) and Mind</option>
      
      <option  value="109101003/modules/lec22-23/objectives_L22-23.html">Lecture 22-23 : The Limits of Artificial Intelligence (AI)</option>
      
      <option  value="109101003/modules/lec24/objectives_L24.html">Lecture 24 : Biological Naturalism</option>
      
      <option  value="109101003/modules/lec25/objectives_L25.html">Lecture 25 : Intentionality</option>
      
      <option  value="109101003/modules/lec26-27/objectives_L26-27.html">Lecture 26-27 : The Structure of Consciousness </option>
      
      <option  value="109101003/modules/lec28-29/objectives_L28-29.html">Lecture 28-29 : Psychological Consciousness and Phenomenal Consciousness</option>
      
      <option  value="109101003/modules/lec30-31-32/objectives_L30-31-32.html">Lecture 30-31-32 : Mind, Meaning and Representation</option>
      
      <option  value="109101003/modules/lec33-34/objectives_L33-34.html">Lecture 33-34 : Intention Based Semantics</option>
      
      <option  value="109101003/modules/lec35/objectives_L35.html">Lecture 35 : Emergentism and Supervenience</option>
      
      <option  value="109101003/modules/lec36-37/objectives_L36-37.html">Lecture 36-37 : Reduction and Realization</option>
      
      <option  value="109101003/modules/lec38/objectives_L38.html">Lecture 38 : Cartesian Theory of Mind Revisited</option>
      
      <option  value="109101003/modules/lec39-40/objectives_L39-40.html">Lecture 39-40 : A Non-materialistic View of Person</option>
      
      <option  value="109101003/modules/lec41-42/objectives_L41-42.html">Lecture 41-42 : Consciousness and Creativity</option>
      
      <option  value="109101003/modules/lec43-44/objectives_L43-44.html">Lecture 43-44 : The Nonreductive Mind</option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109101004</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Contemporary Issues in Philosophy of Mind & Cognition</strong></td>
	<td><strong>Dr. Ranjan K.Panda,Dr. Rajakishore Nath</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109101004/mod01lec01.mp4">L1-Introduction</option>
      
      <option value="109101004/mod01lec02.mp4">L2-Transcendental Consciousness</option>
      
      <option value="109101004/mod01lec03.mp4">L3-Plato's Theory of Mind</option>
      
      <option value="109101004/mod01lec04.mp4">L4-Parable of Cave : Plato's</option>
      
      <option value="109101004/mod01lec05.mp4">L5-Aristotle's Concept Mind</option>
      
      <option value="109101004/mod01lec06.mp4">L6-The Concept of Mind in Upanishadas</option>
      
      <option value="109101004/mod01lec07.mp4">L7-Dualism - I</option>
      
      <option value="109101004/mod01lec08.mp4">L8-Dualism II</option>
      
      <option value="109101004/mod01lec09.mp4">L9-Dualism III</option>
      
      <option value="109101004/mod01lec10.mp4">L10-Against Dualism</option>
      
      <option value="109101004/mod01lec11.mp4">L11-Property Dualism</option>
      
      <option value="109101004/mod01lec12.mp4">L12-Varieties of Materialism</option>
      
      <option value="109101004/mod01lec13.mp4">L13-Mind-Body Identity Theory</option>
      

      <option value="109101004/mod01lec14.mp4">L14-Functionalism</option>
      
      <option value="109101004/mod01lec15.mp4">L15-Different Models of Cognitive Mind</option>
      
      <option value="109101004/mod01lec16.mp4">L16-Connectionism and Folk - Psychology</option>
      
      <option value="109101004/mod01lec17.mp4">L17-Representation I</option>
      
      <option value="109101004/mod01lec18.mp4">L18-Representation II</option>
      
      <option value="109101004/mod01lec19.mp4">L19-Artificial Intelligence I</option>
      
      <option value="109101004/mod01lec20.mp4">L20-Artificial Intelligence II</option>
      
      <option value="109101004/mod01lec21.mp4">L21-Artificial Intelligence III</option>
      
      <option value="109101004/mod01lec22.mp4">L22-The Limit of Artificial Intelligence I</option>
      
      <option value="109101004/mod01lec23.mp4">L23-The Limit of Artificial Intelligence II</option>
      
      <option value="109101004/mod01lec24.mp4">L24-Biological Naturalism</option>
      
      <option value="109101004/mod01lec25.mp4">L25-The Concept of Intentionality</option>
      
      <option value="109101004/mod01lec26.mp4">L26-The Structure of Consciousness I</option>
      
      <option value="109101004/mod01lec27.mp4">L27-The Structure of Consciousness II</option>
      
      <option value="109101004/mod01lec28.mp4">L28-Phenomenal Consciousness I</option>
      
      <option value="109101004/mod01lec29.mp4">L29-Phenomenal Consciousness II</option>
      
      <option value="109101004/mod01lec30.mp4">L30-Language, Representation &amp; Meaning I</option>
      
      <option value="109101004/mod01lec31.mp4">L31-Language &amp; Meaning II</option>
      
      <option value="109101004/mod01lec32.mp4">L32-Language &amp; Mind</option>
      
      <option value="109101004/mod01lec33.mp4">L33-Language &amp; World I</option>
      
      <option value="109101004/mod01lec34.mp4">L34-Language &amp; World II</option>
      
      <option value="109101004/mod01lec35.mp4">L35-Emergentism &amp; Supervenience</option>
      
      <option value="109101004/mod01lec36.mp4">L36-Reduction &amp; Realization I</option>
      
      <option value="109101004/mod01lec37.mp4">L37-Reduction &amp; Realization II</option>
      
      <option value="109101004/mod01lec38.mp4">L38-The Cartesian Mind Revisited</option>
      
      <option value="109101004/mod01lec39.mp4">L39-Personal Identity I</option>
      
      <option value="109101004/mod01lec40.mp4">L40-Personal Identity II</option>
      
      <option value="109101004/mod01lec41.mp4">L41-Creativity : Human Vs Machine I</option>
      
      <option value="109101004/mod01lec42.mp4">L42-Creativity : Human Vs Machine II</option>
          </select>
          </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109101007</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Health Psychology</strong></td>
	<td><strong>Prof. Mrinmoyi Kulkarni</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109101007/modules/Module 1/lec1/1.1.html">Lecture 1 : Introduction</option>
      
      <option  value="109101007/modules/Module 2/lec1/objectives_L2.html">Lecture 2 : Prevention</option>
      
      <option  value="109101007/modules/Module 3/lec1/objectives_L3.html">Lecture 3 : Socio-economic Status , Income Inequality and Health</option>
      
      <option  value="109101007/modules/Module 4/lec1/objectives_L4.html">Lecture 4 : Discrimination</option>
      
      <option  value="109101007/modules/Module 4/lec2/5.1.html">Lecture 5 : Reading</option>
      
      <option  value="109101007/modules/Module 5/lec1/objectives_L6.html">Lecture 6 : Neighborhood</option>
      
      <option  value="109101007/modules/Module 6/lec1/objectives_L7.html">Lecture 7 ; Gender Differences in Health</option>
      
      <option  value="109101007/modules/Module 7/lec1/objectives_L8.html">Lecture 8 : Women�s Health</option>
      
      <option  value="109101007/modules/Module 8/lec1/objectives_L9.html">Lecture 9 : Eating</option>
      
      <option  value="109101007/modules/Module 8/lec2/10.1.html">Lecture 10 : Reading</option>
      
      <option  value="109101007/modules/Module 9/lec1/objectives_L11.html">Lecture 11 : Exercise</option>
      
      <option  value="109101007/modules/Module 9/lec2/12.1.html">Lecture 12 : Reading</option>
      
      <option  value="109101007/modules/Module 10/lec1/objectives_L13.html">Lecture 13 : Alcohol</option>
      
      <option  value="109101007/modules/Module 10/lec2/14.1.html">Lecture 14 : Reading</option>
      
      <option  value="109101007/modules/Module 11/lec1/objectives_L15.html">Lecture 15 : Tobacco</option>
      
      <option  value="109101007/modules/Module 11/lec2/16.1.html">Lecture 16 : Reading</option>
      
      <option  value="109101007/modules/Module 12/lec1/objectives_L17.html">Lecture 17 : Stress</option>
      
      <option  value="109101007/modules/Module 12/lec2/18.1.html">Lecture 18 : Reading</option>
      
      <option  value="109101007/modules/Module 13/lec1/objectives_L19.html">Lecture 19 : Coping</option>
      
      <option  value="109101007/modules/Module 14/lec1/20.2.html">Lecture 20 : Psychoimmunology</option>
      
      <option  value="109101007/modules/Module 14/lec2/21.1.html">Lecture 21 : Reading</option>
      
      <option  value="109101007/modules/Module 15/lec1/objectives_L22.html">Lecture 22 : Emotion and Health</option>
      
      <option  value="109101007/modules/Module 15/lec2/23.1.html">Lecture 23 : Reading</option>
      
      <option  value="109101007/modules/Module 16/lec1/24.1.html">Lecture 24 : Mental Health</option>
      
      <option  value="109101007/modules/Module 16/lec2/25.1.html">Lecture 25 : Mental Health in India</option>
      
      <option  value="109101007/modules/Module 16/lec3/26.1.html">Lecture 26 : Reading </option>
      
      <option  value="109101007/modules/Module 17/lec1/27.2.html">Lecture 27 : HIV and AIDS</option>
      
      <option  value="109101007/modules/Module 17/lec2/28.1.html">Lecture 28 : Reading I</option>
      
      <option  value="109101007/modules/Module 17/lec3/29.1.html">Lecture 29 : Reading II</option>
      
      <option  value="109101007/modules/Module 18/lec1/30.2.html">Lecture 30 : Framing Health Messages</option>
      
      <option  value="109101007/modules/Module 19/lec1/31.2.html">Lecture 31 : Behaviour Change</option>
      
      <option  value="109101007/modules/Module 19/lec2/32.1.html">Lecture 32 : Reading</option>
      
      <option  value="109101007/modules/Module 20/lec1/objectives_L33.html">Lecture 33 : Occupational Health</option>
      
      <option  value="109101007/modules/Module 20/lec2/34.1.html">Lecture 34 : Reading I</option>
      
      <option  value="109101007/modules/Module 20/lec3/35.1.html">Lecture 35 : Reading II</option>
      
      <option  value="109101007/modules/Module 21/lec1/36.1.html">Lecture 36 : Health Care in India</option>
      
      <option  value="109101007/modules/Module 21/lec2/37.1.html">Lecture 37 : Reading I</option>
      
      <option  value="109101007/modules/Module 21/lec3/38.1.html">Lecture 38 : Reading II</option>
      
      <option  value="109101007/modules/Module 21/lec4/39.1.html">Lecture 39 : Reading III</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109101017</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Understanding Creativity and Creative Writing</strong></td>
	<td><strong>Prof. Neelima Talwar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109101017/mod01lec01.mp4">L1-Overview</option>
      
      <option  value="109101017/mod01lec02.mp4">L2-In Conversation with Richard Schechner</option>
      
      <option  value="109101017/mod01lec03.mp4">L3-Multilingual Plurality: Our Environment</option>
      
      <option  value="109101017/mod01lec04.mp4">L4-Multilingual Plurality: Our Environment -Part II</option>
      
      <option  value="109101017/mod01lec05.mp4">L5-Interplay of Languages and Forms of Writing</option>
      
      <option  value="109101017/mod01lec06.mp4">L6-Interplay of Languages and Forms of Writing -Part II</option>
      
      <option  value="109101017/mod01lec07.mp4">L7-Creativity and Cultures</option>
      
      <option  value="109101017/mod01lec08.mp4">L8-Notion of Play and The Three Domain Activities</option>
      
      <option  value="109101017/mod01lec09.mp4">L9-Theory of Enjoyment: Critical Assessment</option>
      
      <option  value="109101017/mod01lec10.mp4">L10-Divergences and Convergences</option>
      
      <option  value="109101017/mod01lec11.mp4">L11-Divergences and Convergences -Part II</option>
      
      <option  value="109101017/mod01lec12.mp4">L12-Creative and Cultural Spaces for Students</option>
      
      <option  value="109101017/mod01lec13.mp4">L13-Being and Doing: Writing as Performance</option>
      
      <option  value="109101017/mod02lec14.mp4">L14-Writers and Writing: The Dialogic Process</option>
      
      <option  value="109101017/mod02lec15.mp4">L15-Creativity, Writing, Creative Writing: Recent Viewpoints</option>
      
      <option  value="109101017/mod02lec16.mp4">L16-Issues Related to the Teaching of Creative Writing</option>
      
      <option  value="109101017/mod02lec17.mp4">L17-Writers on Writing: Albert Camus</option>
      
      <option  value="109101017/mod02lec18.mp4">L18-Critical Reading of Great Writers: Albert Camus</option>
      
      <option  value="109101017/mod02lec19.mp4">L19-Critical Reading of Important Writers: Margaret Atwood</option>
      
      <option  value="109101017/mod02lec20.mp4">L20-Reading and Writing</option>
      
      <option  value="109101017/mod02lec21.mp4">L21-Indian Writing: Writers/Narrators</option>
      
      <option  value="109101017/mod02lec22.mp4">L22-Contemporary Indian Writers: The Search for Creativity (I)</option>
      
      <option  value="109101017/mod02lec23.mp4">L23-Contemporary Indian Writers: The Search for Creativity (II)</option>
      
      <option  value="109101017/mod02lec24.mp4">L24-Mosaic Patterns: Module 2</option>
      
      <option  value="109101017/mod03lec25.mp4">L25-Introduction to Drama</option>
      
      <option  value="109101017/mod03lec26.mp4">L26-Performance and Script Writing: Mime</option>
      
      <option  value="109101017/mod03lec27.mp4">L27-Western Classical Theory</option>
      
      <option  value="109101017/mod03lec28.mp4">L28-Student Response (I)</option>
      
      <option  value="109101017/mod03lec29.mp4">L29-Indian Drama: Classical Theory and Practice</option>
      
      <option  value="109101017/mod03lec30.mp4">L30-Interacting Continuum: Classical, Folk and Modern Drama</option>
      
      <option  value="109101017/mod03lec31.mp4">L31-From The Perspective of Playwriting: Monologue </option>
      
      <option  value="109101017/mod03lec32.mp4">L32-From The Playwright's Perspective</option>
      
      <option  value="109101017/mod03lec33.mp4">L33-From The Playwright's Perspective -Part II</option>
      
      <option  value="109101017/mod03lec34.mp4">L34-From The Perspective of Playwriting: Anton Chekhov</option>
      
      <option  value="109101017/mod03lec35.mp4">L35-Drama in the Classroom: Experience and Writing</option>
      
      <option  value="109101017/mod03lec36.mp4">L36-Student Response (II)</option>
      
      <option  value="109101017/mod03lec37.mp4">L37-Performative Reading of the Cherry Orchard</option>
      
      <option  value="109101017/mod04lec38.mp4">L38-Short Story as a Genre</option>
      
      <option  value="109101017/mod04lec39.mp4">L39-Short Stories by Indian Women Writers</option>
      
      <option  value="109101017/mod04lec40.mp4">L40-Modern Western Short Story </option>
      
      <option  value="109101017/mod04lec41.mp4">L41-Varieties of Writing Processes</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109103018</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Cultural Studies</strong></td>
	<td><strong>Dr. Liza Das</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109103018/module1/index.html">Cultural Studies: An Introduction</option>
      
      <option  value="109103018/module1/lec2/1.html">Understanding Cultural Studies</option>
      
      <option  value="109103018/module1/lec3/1.html">Evolution and Culture</option>
      
      <option  value="109103018/module1/lec4/1.html">Evolutionary Psychology</option>
      
      <option  value="109103018/module1/lec5/1.html">The Modern Mind: Its Origins</option>
      
      <option  value="109103018/module1/lec6/1.html">Memetics</option>
      
      <option  value="109103018/module1/lec7/1.html">Structuralism </option>
      
      <option  value="109103018/module1/lec8/1.html">Marxism Part 1</option>
      
      <option  value="109103018/module1/lec9/1.html">Marxism Part 2</option>
      
      <option  value="109103018/module1/lec10/1.html"> Poststructuralism</option>
      
      <option  value="109103018/module2/lec1/1.html">Subjectivity</option>
      
      <option  value="109103018/module2/lec2/1.html">Identity</option>
      
      <option  value="109103018/module2/lec3/1.html">Ideology (Part 1)</option>
      
      <option  value="109103018/module2/lec4/1.html">Ideology Part 2</option>
      
      <option  value="109103018/module2/lec5/1.html">Representation (Part 1)</option>
      
      <option  value="109103018/module2/lec6/1.html">Representation (Part 2)</option>
      
      <option  value="109103018/module2/lec7/1.html">Power</option>
      
      <option  value="109103018/module2/lec8/1.html">Discourse</option>
      
      <option  value="109103018/module2/lec9/1.html">Gender (Part 1)</option>
      
      <option  value="109103018/module2/lec10/1.html">Gender (Part 2)</option>
      
      <option  value="109103018/module3/lec1/1.html">The Body</option>
      
      <option  value="109103018/module3/lec2/1.html">Space</option>
      
      <option  value="109103018/module3/lec3/1.html">Time</option>
      
      <option  value="109103018/module3/lec4/1.html">Development</option>
      
      <option  value="109103018/module3/lec5/1.html">Language</option>
      
      <option  value="109103018/module3/lec6/1.html">Ethnicity, Race and Nation</option>
      
      <option  value="109103018/module3/lec7/1.html">Globalization</option>
      
      <option  value="109103018/module3/lec8/1.html">Consumption (Part 1)</option>
      
      <option  value="109103018/module3/lec9/1.html">Consumption (Part 2)</option>
      
      <option  value="109103018/module3/lec10/1.html">Biology</option>
      
      <option  value="109103018/module4/lec1/1.html">The Culture Industry</option>
      
      <option  value="109103018/module4/lec2/1.html">The Commodity</option>
      
      <option  value="109103018/module4/lec3/1.html">Media </option>
      
      <option  value="109103018/module4/lec4/1.html">Television</option>
      
      <option  value="109103018/module4/lec5/1.html">New Media</option>
      
      <option  value="109103018/module4/lec6/1.html">Science, Technology and Cultural Studies </option>
      
      <option  value="109103018/module4/lec7/1.html">Cyberculture</option>
      
      <option  value="109103018/module4/lec8/1.html">Cultural Policy</option>
      
      <option  value="109103018/module4/lec9/1.html">Critiquing Cultural Studies</option>
      
      <option  value="109103018/module4/lec10/1.html">Summing up</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109103019</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Cultural Studies</strong></td>
	<td><strong>Dr. Liza Das</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109103019/mod01lec01.mp4">Understanding Cultural Studies Part 1</option>
      
      <option  value="109103019/mod01lec02.mp4">Understanding Cultural Studies Part 2</option>
      
      <option  value="109103019/mod01lec03.mp4">Evolution and Culture</option>
      
      <option  value="109103019/mod01lec04.mp4">Evolutionary Psychology</option>
      
      <option  value="109103019/mod01lec05.mp4">The Modern Mind: Its Origins</option>
      
      <option  value="109103019/mod01lec06.mp4">Memetics</option>
      
      <option  value="109103019/mod01lec07.mp4">Cultural Theory: Structuralism</option>
      
      <option  value="109103019/mod01lec08.mp4">Marxism Part 1</option>
      
      <option  value="109103019/mod01lec09.mp4">Marxism Part 2</option>
      
      <option  value="109103019/mod01lec10.mp4">Poststructuralism</option>
      
      <option  value="109103019/mod02lec11.mp4">Subjectivity</option>
      
      <option  value="109103019/mod02lec12.mp4">Identity</option>
      
      <option  value="109103019/mod02lec13.mp4">Ideology Part 1</option>
      
      <option  value="109103019/mod02lec14.mp4">Ideology Part 2</option>
      
      <option  value="109103019/mod02lec15.mp4">Representation Part 1</option>
      
      <option  value="109103019/mod02lec16.mp4">Representation Part 2</option>
      
      <option  value="109103019/mod02lec17.mp4">Power</option>
      
      <option  value="109103019/mod02lec18.mp4">Discourse</option>
      
      <option  value="109103019/mod02lec19.mp4">Gender Part 1</option>
      
      <option  value="109103019/mod02lec20.mp4">Gender Part 2</option>
      
      <option  value="109103019/mod03lec21.mp4">The Body</option>
      
      <option  value="109103019/mod03lec22.mp4">Space</option>
      
      <option  value="109103019/mod03lec23.mp4">Time</option>
      
      <option  value="109103019/mod03lec24.mp4">Development</option>
      
      <option  value="109103019/mod03lec25.mp4">Language</option>
      
      <option  value="109103019/mod03lec26.mp4">Ethnicity ,Race and Nation</option>
      
      <option  value="109103019/mod03lec27.mp4">Globalisation</option>
      
      <option  value="109103019/mod03lec28.mp4">Consumption Part 1</option>
      
      <option  value="109103019/mod03lec29.mp4">Consumption Part 2</option>
      
      <option  value="109103019/mod03lec30.mp4">Biology</option>
      
      <option  value="109103019/mod04lec31.mp4">Culture Industry</option>
      
      <option  value="109103019/mod04lec32.mp4">Commodity</option>
      
      <option  value="109103019/mod04lec33.mp4">Media</option>
      
      <option  value="109103019/mod04lec34.mp4">Television</option>
      
      <option  value="109103019/mod04lec35.mp4">New Media</option>
      
      <option  value="109103019/mod04lec36.mp4">Science, Technology and Culture</option>
      
      <option  value="109103019/mod04lec37.mp4">Cyberculture</option>
      
      <option  value="109103019/mod04lec38.mp4">Cultural Policy</option>
      
      <option  value="109103019/mod04lec39.mp4">Critiquing Cultural Studies</option>
      
      <option  value="109103019/mod04lec40.mp4">Conclusion</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109103020</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong> English Language and Literature </strong></td>
	<td><strong>Dr. Liza Das, Dr. Krishna Barua</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109103020/mod01lec01.mp4">Introduction                       </option>
<option value="109103020/mod01lec02.mp4">The Scope of English Studies       </option>
<option value="109103020/mod01lec03.mp4">The English Language               </option>
<option value="109103020/mod01lec04.mp4">International English              </option>
<option value="109103020/mod01lec05.mp4">The Globalization of English       </option>
<option value="109103020/mod01lec06.mp4">World Englishes                    </option>
<option value="109103020/mod01lec07.mp4">The Rise of Cultural Studies       </option>
<option value="109103020/mod02lec08.mp4">Old English                        </option>
<option value="109103020/mod02lec09.mp4">Middle English                     </option>
<option value="109103020/mod02lec10.mp4">Early Modern English               </option>
<option value="109103020/mod02lec11.mp4">Modern English-1                   </option>
<option value="109103020/mod02lec12.mp4">Modern English-2                   </option>
<option value="109103020/mod03lec13.mp4">The Age of Chaucer                 </option>
<option value="109103020/mod03lec14.mp4">The Age of Shakespeare             </option>
<option value="109103020/mod03lec15.mp4">Milton and his Times               </option>
<option value="109103020/mod03lec16.mp4">The Augustans                      </option>
<option value="109103020/mod03lec17.mp4">The Romantics                      </option>
<option value="109103020/mod03lec18.mp4">The Victorians                     </option>
<option value="109103020/mod03lec19.mp4">Modern Literature                  </option>
<option value="109103020/mod04lec20.mp4">The Novel                          </option>
<option value="109103020/mod04lec21.mp4">Poetry                             </option>
<option value="109103020/mod04lec22.mp4">Drama                              </option>
<option value="109103020/mod04lec23.mp4">Essay                              </option>
<option value="109103020/mod04lec24.mp4">Short story                        </option>
<option value="109103020/mod04lec25.mp4">Biography                          </option>
<option value="109103020/mod04lec26.mp4">Autobiography                      </option>
<option value="109103020/mod04lec27.mp4">History Of English Language        </option>
<option value="109103020/mod04lec28.mp4">Marxist Literary Criticism         </option>
<option value="109103020/mod04lec29.mp4">Feminist Criticism                 </option>
<option value="109103020/mod04lec30.mp4">Structuralist Criticism            </option>
<option value="109103020/mod04lec31.mp4">Poststructuralism                  </option>
<option value="109103020/mod04lec32.mp4">Postcolonialism                    </option>
<option value="109103020/mod04lec33.mp4">Cognitive Approaches To Literature </option>
<option value="109103020/mod05lec34.mp4">Classical Criticism                </option>
<option value="109103020/mod05lec35.mp4">Liberal Humanism                   </option>
<option value="109103020/mod05lec36.mp4">Reader-response Criticism          </option>
<option value="109103020/mod05lec37.mp4">New Historicism                    </option>
<option value="109103020/mod05lec38.mp4">Ecocriticism                       </option>


          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109103021</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Game Theory and Economics</strong></td>
	<td><strong>Dr. Debarshi Das</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109103021/mod01lec01.mp4">Definition of Game Theory and Rational Choice</option>
      
      <option  value="109103021/mod01lec02.mp4">Interacting Decision Makers </option>
      
      <option  value="109103021/mod02lec03.mp4">Strategic Games : Examples</option>
      
      <option  value="109103021/mod02lec04.mp4">Matching Pennies, Stag Hunt and Nash Equilibrium</option>
      
      <option  value="109103021/mod02lec05.mp4">Examples of Nash Equilibrium</option>
      
      <option  value="109103021/mod02lec06.mp4">Altruism and Prisoner�s Dilemma</option>
      
      <option  value="109103021/mod02lec07.mp4">Variants Stag Hunt Game, Hawk Dove and Coordination Game </option>
      
      <option  value="109103021/mod02lec08.mp4">Public Good Provision, Strict Nash Equilibrium</option>
      
      <option  value="109103021/mod02lec09.mp4">Best Response Functions</option>
      
      <option  value="109103021/mod02lec10.mp4">Strictly and Weakly Dominated Action</option>
      
      <option  value="109103021/mod02lec11.mp4">Application of Weak Domination: Voting</option>
      
      <option  value="109103021/mod02lec12.mp4">Symmetric Games and Symmetric Equilibrium</option>
      
      <option  value="109103021/mod03lec13.mp4">Cournot Model of Oligopoly</option>
      
      <option  value="109103021/mod03lec14.mp4">Different Aspects of Cournot Model</option>
      
      <option  value="109103021/mod03lec15.mp4">Further Aspects of Cournot Model</option>
      
      <option  value="109103021/mod03lec16.mp4">Cournot & Bertrand Models</option>
      
      <option  value="109103021/mod03lec17.mp4">Different Aspects of Bertrand Model</option>
      
      <option  value="109103021/mod03lec18.mp4">Electoral Competition 1</option>
      
      <option  value="109103021/mod03lec19.mp4">Different Aspects of Hotelling Model</option>
      
      <option  value="109103021/mod03lec20.mp4">Hotteling Model: Concluding Remarks</option>
      
      <option  value="109103021/mod03lec21.mp4">War of Attrition</option>
      
      <option  value="109103021/mod03lec22.mp4">Second Price Sealed Bid Auction</option>
      
      <option  value="109103021/mod03lec23.mp4">Further Aspects of Second Price Auction</option>
      
      <option  value="109103021/mod03lec24.mp4">First Price Auction</option>
      
      <option  value="109103021/mod03lec25.mp4">All Pay Auction, Multi Unit Auction</option>
      
      <option  value="109103021/mod03lec26.mp4">Accident Laws</option>
      
      <option  value="109103021/mod04lec27.mp4">Mixed Strategy Nash Equilibrium: Introduction</option>
      
      <option  value="109103021/mod04lec28.mp4">Mixed Strategy, Mixed Strategy Equilibrium</option>
      
      <option  value="109103021/mod04lec29.mp4">Mixed Strategy Equilibrium: Concept and Examples</option>
      
      <option  value="109103021/mod04lec30.mp4">Characterisation of Mixed Strategy Equilibrium</option>
      
      <option  value="109103021/mod04lec31.mp4">Dominated Actions and Iterated Elimination</option>
      
      <option  value="109103021/mod04lec32.mp4">Rationalisability and Beliefs</option>
      
      <option  value="109103021/mod05lec33.mp4">Extensive Games: Introduction</option>
      
      <option  value="109103021/mod05lec34.mp4">Strategy and Equilibrium</option>
      
      <option  value="109103021/mod05lec35.mp4">Nash Equilibrium and Its Problems</option>
      
      <option  value="109103021/mod05lec36.mp4">Subgame Perfect Nash Equilibrium</option>
      
      <option  value="109103021/mod05lec37.mp4">Backward Induction</option>
      
      <option  value="109103021/mod05lec38.mp4">Backward Induction: Exercises</option>
      
      <option  value="109103021/mod06lec39.mp4">Ultimatum Game</option>
      
      <option  value="109103021/mod06lec40.mp4">Stackelberg Duopoly Model </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109103022</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Indian Society - Issues and Problems</strong></td>
	<td><strong>Dr. Sambit Mallick,Dr. Liza Das</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109103022/module1/index.html">Socila Problems: Conceptual understanding</option>
      
      <option  value="109103022/module1/lec2/1.html">Social Problems: Characteristics, Types, Causes and Reactions</option>
      
      <option  value="109103022/module1/lec3/1.html">Approaches to the Study of Social Problems</option>
      
      <option  value="109103022/module1/lec4/1.html">Methods to the Study of Social Problems</option>
      
      <option  value="109103022/module1/lec5/1.html">Social Problems in Rural and Urban India</option>
      
      <option  value="109103022/module2/lec6/1.html">Magnitude and Causes of illiteracy</option>
      
      <option  value="109103022/module2/lec7/1.html">National Policy on 	Education</option>
      
      <option  value="109103022/module2/lec8/1.html">Poverty: Measurement and Causes</option>
      
      <option  value="109103022/module2/lec9/1.html">Myths about Hunger</option>
      
      <option  value="109103022/module2/lec10/1.html">Poverty Alleviation Programmes</option>
      
      <option  value="109103022/module2/lec11/1.html">Unemployment in India: Features, Types, Causes and Consequences</option>
      
      <option  value="109103022/module2/lec12/1.html">National Rural Employment Guarantee Act</option>
      
      <option  value="109103022/module2/lec13/1.html">Causes and Effects of Population Growth in India</option>
      
      <option  value="109103022/module2/lec14/1.html">Population Policy, Family Planning, Role of the Civil Society</option>
      
      <option  value="109103022/module3/lec15/1.html">Child Abuse: Concept and Types     </option>
      
      <option  value="109103022/module3/lec16/1.html">Child Abuse: Causes and Effects</option>
      
      <option  value="109103022/module3/lec17/1.html">Preventive Measures for Child Abuse, with specific reference to India</option>
      
      <option  value="109103022/module3/lec18/1.html">Child Labour: Concept and Causes     </option>
      
      <option  value="109103022/module3/lec19/1.html">Child Labour: Preventive Measures</option>
      
      <option  value="109103022/module3/lec20/1.html">Violence against Women</option>
      
      <option  value="109103022/module3/lec21/1.html">Victims and Perpetrators of Violence, Motivation in Violence, Self-image, Self-esteem and Adjustment of Victims</option>
      
      <option  value="109103022/module4/lec22/1.html">Casteism: Characteristics and Causes</option>
      
      <option  value="109103022/module4/lec23/1.html">Casteism: Consequences and Remedial Measures</option>
      

      <option  value="109103022/module4/lec24/1.html">Communalism: Concept and Characteristics, Causes and Remedial Measures</option>
      
      <option  value="109103022/module4/lec25/1.html">Regionalism: Characteristics and Types</option>
      
      <option  value="109103022/module4/lec26/1.html">Regionalism: Causes and Suggestive Measures</option>
      
      <option  value="109103022/module4/lec27/1.html">Language Conflicts: Causes, Consequences and Remedial Measures</option>
      
      <option  value="109103022/module5/lec28/1.html">Crime, Criminal, Criminology</option>
      
      <option  value="109103022/module5/lec29/1.html">Characteristics of Crime</option>
      
      <option  value="109103022/module5/lec30/1.html">Sociological Explanations of Crime</option>
      
      <option  value="109103022/module5/lec31/1.html">Juvenile Delinquency: Nature and Characteristics</option>
      
      <option  value="109103022/module5/lec32/1.html">Types of Juvenile Delinquency</option>
      
      <option  value="109103022/module5/lec33/1.html">Methods of Treating Delinquents</option>
      
      <option  value="109103022/module6/lec34/1.html">Concept and Extent of Alcoholism</option>
      
      <option  value="109103022/module6/lec35/1.html">Causes, Problems, Anti Liquor Movements and Control on alcoholism</option>
      
      <option  value="109103022/module6/lec36/1.html">Drug Abuse: Concept, Extent and Nature</option>
      
      <option  value="109103022/module6/lec37/1.html">Role of Family and Peer Group, and Measures to Combat Drug Trafficking</option>
      
      <option  value="109103022/module6/lec38/1.html">Corruption: Concept, Forms and Types </option>
      
      <option  value="109103022/module6/lec39/1.html">Corruption: Causes and Impact </option>
      
      <option  value="109103022/module6/lec40/1.html">Legislation and Combating Corruption</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109103023</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Introduction to Sociology</strong></td>
	<td><strong>Dr. Sambit Mallick</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109103023/module1/index.html">Origin of Sociology as a Discipline</option>
      
      <option  value="109103023/module1/lec2/1.html">Sociological Methods</option>
      
      <option  value="109103023/module1/lec3/1.html">The Individual and Society</option>
      
      <option  value="109103023/module1/lec4/1.html">Institution, Community and Association</option>
      
      <option  value="109103023/module1/lec5/1.html">Culture</option>
      
      <option  value="109103023/module1/lec6/1.html">The Sociology of Anomie: Conformity and Deviance</option>
      
      <option  value="109103023/module2/lec1/1.html">Education</option>
      
      <option  value="109103023/module2/lec2/1.html">Religion</option>
      
      <option  value="109103023/module2/lec3/1.html">Religion and Significant Social Factors</option>
      
      <option  value="109103023/module2/lec4/1.html">Family, Marriage and Kinship � Part I</option>
      
      <option  value="109103023/module2/lec5/1.html">Family, Marriage and Kinship � Part II</option>
      
      <option  value="109103023/module2/lec6/1.html">Family, Marriage and Kinship � Part III</option>
      
      <option  value="109103023/module3/lec1/1.html">Social Structure and Social Change: Basic Concepts</option>
      
      <option  value="109103023/module3/lec2/1.html">Social Differentiation and Social Stratification</option>
      
      <option  value="109103023/module3/lec3/1.html">Theoretical Perspectives on Social Stratification</option>
      
      <option  value="109103023/module3/lec4/1.html">Systems of Stratification</option>
      
      <option  value="109103023/module3/lec5/1.html">Factors of Social Change</option>
      
      <option  value="109103023/module3/lec6/1.html">Rural-Urban Continuum: Meaning and Context</option>
      
      <option  value="109103023/module4/lec1/1.html">Socialization: Part I</option>
      
      <option  value="109103023/module4/lec2/1.html">Socialization: Part II</option>
      
      <option  value="109103023/module4/lec3/1.html">Social Control</option>
      
      <option  value="109103023/module4/lec4/1.html">Social Roles and Identity</option>
      
      <option  value="109103023/module5/lec1/1.html">Caste System in India</option>
      
      <option  value="109103023/module5/lec2/1.html">Race and Ethnicity</option>
      
      <option  value="109103023/module5/lec3/1.html">Religion and Society</option>
      
      <option  value="109103023/module5/lec4/1.html">Education and Society</option>
      
      <option  value="109103023/module5/lec5/1.html">Gender</option>
      
      <option  value="109103023/module5/lec6/1.html">Social Class</option>
      
      <option  value="109103023/module6/lec1/1.html">Social Protests and Social Movements: An Overview</option>
      
      <option  value="109103023/module6/lec2/1.html">Social Movements: Causes and Stages</option>
      
      <option  value="109103023/module6/lec3/1.html">Theories of Social Movements</option>
      
      <option  value="109103023/module6/lec4/1.html">Social Movements in India � Part I</option>
      
      <option  value="109103023/module6/lec5/1.html">Social Movements in India � Part II</option>
      
      <option  value="109103023/module6/lec6/1.html">Identity Formation</option>
      
      <option  value="109103023/module7/lec1/1.html">Sociological Theories: An Overview</option>
      
      <option  value="109103023/module7/lec2/1.html">Auguste Comte and Herbert Spencer</option>
      
      <option  value="109103023/module7/lec3/1.html">Emile Durkheim and Max Weber</option>
      
      <option  value="109103023/module7/lec4/1.html">Karl Marx</option>
      
      <option  value="109103023/module7/lec5/1.html">Georg Simmel, Thorstein Veblen and Karl Mannheim</option>
      
      <option  value="109103023/module7/lec6/1.html">Feminism and Sociological Theory</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109103024</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Science, Technology and Society</strong></td>
	<td><strong>Dr. Sambit Mallick,Prof. Archana Barua</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109103024/module1/index.html">Methods of Science: Issues and Perspectives </option>
      
      <option  value="109103024/module1/lec2/1.html"> Views of Karl Popper </option>
      
      <option  value="109103024/module1/lec3/1.html">Kuhn�s Methodology </option>
      
      <option  value="109103024/module1/lec4/1.html">Views of Paul Feyerabend </option>
      
      <option  value="109103024/module1/lec5/1.html">Social Context of the Production of Scientific Knowledge </option>
      
      <option  value="109103024/module1/lec6/1.html">Demarcation, Autonomy and Cognitive Authority of Science</option>
      
      <option  value="109103024/module1/lec7/1.html">Science ,Technology and Society Challenges: Cognitive, Legal, Ethical, Feminist and Ideological </option>
      
      <option  value="109103024/module1/lec8/1.html">Science ,Technology and Gender</option>
      
      <option  value="109103024/module1/lec9/1.html">Challenges : feminist, ideological, cognitive, moral, legal, and others </option>
      
      <option  value="109103024/module1/lec10/1.html">Science as Social Institution and the Ethos of Science </option>
      
      <option  value="109103024/module2/lec11/1.html">The Ethos of Science </option>
      
      <option  value="109103024/module2/lec12/1.html">Inequalities in Science: Rewards and Recognitions </option>
      
      <option  value="109103024/module2/lec13/1.html">Critique of the Mertonian Paradigm </option>
      
      <option  value="109103024/module2/lec14/1.html">Counter Norms </option>
      
      <option  value="109103024/module3/lec15/1.html">Legitimation in Science </option>
      
      <option  value="109103024/module3/lec16/1.html"> Social Legitimation in Science </option>
      
      <option  value="109103024/module3/lec17/1.html">Science, Culture and Society: Meanings, Interests, Values and the Modern State </option>
      
      <option  value="109103024/module3/lec18/1.html">Science, Culture and Society: State-idea, State-system and State-country </option>
      
      <option  value="109103024/module4/lec1/1.html">Science and Technology, and their Human Roots: Philosophy of Science and Technology I</option>
      
      <option  value="109103024/module4/lec20/1.html">Science and Technology, and their Human Roots: Philosophy of Science and Technology II</option>
      
      <option  value="109103024/module4/lec21/1.html"> Social Shaping of Science and Technology</option>
      
      <option  value="109103024/module4/lec22/1.html">Technology shaping society</option>
      
      <option  value="109103024/module4/lec23/1.html">Phenomenology of science,technology and its human roots</option>
      
      <option  value="109103024/module4/lec24/1.html"> Phenomenology of science,technology and its human roots</option>
      
      <option  value="109103024/module5/lec25/1.html">Science in Colonial India: Overview</option>
      
      <option  value="109103024/module5/lec26/1.html">Building Scientific Institutions in Colonial India: Societies and Associations </option>
      
      <option  value="109103024/module5/lec27/1.html">Influence of Freedom Movements on Scientific Research in India </option>
      
      <option  value="109103024/module5/lec28/1.html">Science in the Inter-war Period </option>
      
      <option  value="109103024/module5/lec29/1.html">Organization of Scientific Research in Postcolonial India </option>
      
      <option  value="109103024/module6/lec30/1.html">Information and Communication Society </option>
      
      <option  value="109103024/module6/lec31/1.html"> Information and Communication Society </option>
      
      <option  value="109103024/module6/lec32/1.html">A philosophical assessment : Re-defining humans I</option>
      
      <option  value="109103024/module6/lec33/1.html">A philosophical assessment : Re-defining humans II</option>
      
      <option  value="109103024/module6/lec34/1.html"> Biotechnology � Implications for the Meanings of Life and Life Processes</option>
      
      <option  value="109103024/module6/lec35/1.html">iotechnology � Application in Agriculture, Healthcare and Environment </option>
      
      <option  value="109103024/module7/lec36/1.html">New Ethical Codes for New Technologies I</option>
      
      <option  value="109103024/module7/lec37/1.html">New Ethical Codes for New Technologies II</option>
      
      <option  value="109103024/module7/lec38/1.html">New Ethical Codes for New Technologies III</option>
      
      <option  value="109103024/module7/lec39/1.html">New Ethical Codes for New Technologies IV</option>
      
      <option  value="109103024/module8/lec40/1.html">Intellectual Property Rights: An Overview </option>
      
      <option  value="109103024/module8/lec41/1.html">Trade-Related Aspects of Intellectual Property Rights </option>
      
      <option  value="109103024/module8/lec42/1.html">Scientific Knowledge in India: From Public Resource to Intellectual Property </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104029</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Biological Bases of Behavior</strong></td>
	<td><strong>Braj Bhushan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104029/lecture1/main.html">Organization of Human Nervous System</option>
      
      <option  value="109104029/lecture2/2_1.htm">Hindbrain </option>
      
      <option  value="109104029/lecture3/3_1.htm">Midbrain</option>
      
      <option  value="109104029/lecture4/4_1.htm">Forebrain</option>
      
      <option  value="109104029/lecture5/5_1.htm">Spinal cord </option>
      
      <option  value="109104029/lecture6/6_1.htm">Broadmann classification</option>
      
      <option  value="109104029/lecture7/7_1.htm">Lobes</option>
      
      <option  value="109104029/lecture8/8_1.htm">Hemispheric dominance</option>
      
      <option  value="109104029/lecture9/9_1.htm">Neuroplasticity </option>
      
      <option  value="109104029/lecture10/10_1.htm">Invasive techniques & Non-invasive techniques</option>
      
      <option  value="109104029/lecture11/11_1.htm">Magnetic resonance imaging (MRI) </option>
      
      <option  value="109104029/lecture12/12_1.htm">Magnetoencephalography (MEG)</option>
      
      <option  value="109104029/lecture13/13_1.htm">Structure of the neuron</option>
      
      <option  value="109104029/lecture14/14_1.htm">Resting membrane potential, Action potential </option>
      
      <option  value="109104029/lecture15/15_1.htm">Synaptic transmission </option>
      
      <option  value="109104029/lecture16/16_1.htm">Neuromuscular transmission</option>
      
      <option  value="109104029/lecture17/17_1.htm">Endocrine glands and the nature of their secretions</option>
      
      <option  value="109104029/lecture18/18_1.htm">Hypothalamus</option>
      
      <option  value="109104029/lecture19/19_1.htm">Pituitary Gland</option>
      
      <option  value="109104029/lecture20/20_1.htm">Pineal gland</option>
      
      <option  value="109104029/lecture21/21_1.htm">Thyroid gland</option>
      
      <option  value="109104029/lecture22/22_1.htm">Parathyroid gland</option>
      
      <option  value="109104029/lecture23/23_1.htm">Pancreas</option>
      
      <option  value="109104029/lecture24/24_1.htm">Gonads</option>
      
      <option  value="109104029/lecture25/25_1.htm">Adrenal medulla & adrenal cortex</option>
      
      <option  value="109104029/lecture26/26_1.htm">Most sought after issues in psychology </option>
      
      <option  value="109104029/lecture27/27_1.htm">Dominance and subordination</option>
      
      <option  value="109104029/lecture28/28_1.htm">Psychobiology of learning </option>
      
      <option  value="109104029/lecture29/29_1.htm">Psychobiology of memory </option>
      
      <option  value="109104029/lecture30/30_1.htm">Psychobiology of emotion </option>
      
      <option  value="109104029/lecture31/31_1.htm">Psychobiology of personality </option>
      
      <option  value="109104029/lecture32/32_1.htm">Neuropsychological Evaluation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104031</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Communication Skills</strong></td>
	<td><strong>Dr. T. Ravichandran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104031/mod01Lec01.mp4">Introduction</option>
      
      <option  value="109104031/mod02Lec01.mp4">Barriers to Communication Lecture-01</option>
      
      <option  value="109104031/mod02Lec02.mp4">Barriers to Communication Lecture-02</option>
      
      <option  value="109104031/mod02Lec03.mp4">Barriers to Communication Lecture-03</option>
      
      <option  value="109104031/mod03Lec01.mp4">Non-Verbal Communication Lecture-01</option>
      
      <option  value="109104031/mod03Lec02.mp4">Non-Verbal Communication Lecture-02</option>
      
      <option  value="109104031/mod03Lec03.mp4">Non-Verbal Communication Lecture-03</option>
      
      <option  value="109104031/mod03Lec04.mp4">Non-Verbal Communication Lecture-04</option>
      
      <option  value="109104031/mod03Lec05.mp4">Non-Verbal Communication Lecture-05</option>
      
      <option  value="109104031/mod04Lec01.mp4">Listening Skills Lecture-01</option>
      
      <option  value="109104031/mod04Lec02.mp4">Listening Skills Lecture-02</option>
      
      <option  value="109104031/mod04Lec03.mp4">Listening Skills Lecture-03</option>
      
      <option  value="109104031/mod05Lec01.mp4">Business Letters Writing Lecture-01</option>
      
      <option  value="109104031/mod05Lec02.mp4">Business Letters Writing Lecture-02</option>
      
      <option  value="109104031/mod05Lec03.mp4">Business Letters Writing Lecture-03</option>
      
      <option  value="109104031/mod05Lec04.mp4">Business Letters Writing Lecture-04</option>
      
      <option  value="109104031/mod06Lec01.mp4">Report Writing Lecture-01</option>
      
      <option  value="109104031/mod06Lec02.mp4">Report Writing Lecture-02</option>
      
      <option  value="109104031/mod07Lec01.mp4">Group Discussion Lecture-01</option>
      
      <option  value="109104031/mod07Lec02.mp4">Group Discussion Lecture-02</option>
      
      <option  value="109104031/mod07Lec03.mp4">Group Discussion Lecture-03</option>
      
      <option  value="109104031/mod08Lec01.mp4">Interview Skills Lecture-01</option>
      
      <option  value="109104031/mod08Lec02.mp4">Interview Skills Lecture-02</option>
      
      <option  value="109104031/mod08Lec03.mp4">Interview Skills Lecture-03</option>
      
      <option  value="109104031/mod08Lec04.mp4">Interview Skills Lecture-04</option>
      
      <option  value="109104031/mod08Lec05.mp4">Interview Skills Lecture-05</option>
      
      <option  value="109104031/mod08Lec06.mp4">Interview Skills Lecture-06</option>
      
      <option  value="109104031/mod08Lec07.mp4">Interview Skills Lecture-07</option>
      
      <option  value="109104031/mod09Lec01.mp4">Netiquette Lecture-01</option>
      
      <option  value="109104031/mod09Lec02.mp4">Netiquette Lecture-02</option>
      
      <option  value="109104031/mod10Lec01.mp4">Oral Presentation Lecture-01</option>
      
      <option  value="109104031/mod10Lec02.mp4">Oral Presentation Lecture-02</option>
      
      <option  value="109104031/mod10Lec03.mp4">Oral Presentation Lecture-03</option>
      
      <option  value="109104031/mod11Lec01.mp4">Cross Cultural Communication Lecture-01</option>
      
      <option  value="109104031/mod11Lec02.mp4">Cross Cultural Communication Lecture-02</option>
      
      <option  value="109104031/mod11Lec03.mp4">Cross Cultural Communication Lecture-03</option>
      
      <option  value="109104031/mod11Lec04.mp4">Cross Cultural Communication Lecture-04</option>
      
      <option  value="109104031/mod12Lec01.mp4">Common Errors Lecture-01</option>
      
      <option  value="109104031/mod12Lec02.mp4">Common Errors Lecture-02</option>
      
      <option  value="109104031/mod12Lec03.mp4">Common Errors Lecture-03</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104035</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>International Economics</strong></td>
	<td><strong>Dr. Somesh K. Mathur</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104035/mod01lec01.mp4">Lecture-01International Economics</option>
      
      <option  value="109104035/mod01lec02.mp4">Lecture-02International Economics</option>
      
      <option  value="109104035/mod01lec03.mp4">Lecture-03International Economics</option>
      
      <option  value="109104035/mod01lec04.mp4">Lecture-04International Economics</option>
      
      <option  value="109104035/mod01lec05.mp4">Lecture-05International Economics</option>
      
      <option  value="109104035/mod01lec06.mp4">Lecture-06International Economics</option>
      
      <option  value="109104035/mod01lec07.mp4">Lecture-07International Economics</option>
      
      <option  value="109104035/mod01lec08.mp4">Lecture-08International Economics</option>
      
      <option  value="109104035/mod01lec09.mp4">Lecture-09International Economics</option>
      
      <option  value="109104035/mod01lec10.mp4">Lecture-10International Economics</option>
      
      <option  value="109104035/mod01lec11.mp4">Lecture-11International Economics</option>
      
      <option  value="109104035/mod01lec12.mp4">Lecture-12International Economics</option>
      
      <option  value="109104035/mod01lec13.mp4">Lecture-13International Economics</option>
      
      <option  value="109104035/mod01lec14.mp4">Lecture-14International Economics</option>
      
      <option  value="109104035/mod01lec15.mp4">Lecture-15International Economics</option>
      
      <option  value="109104035/mod01lec16.mp4">Lecture-16International Economics</option>
      
      <option  value="109104035/mod01lec17.mp4">Lecture-17International Economics</option>
      
      <option  value="109104035/mod01lec18.mp4">Lecture-18International Economics</option>
      
      <option  value="109104035/mod01lec19.mp4">Lecture-19International Economics</option>
      
      <option  value="109104035/mod01lec20.mp4">Lecture-20International Economics</option>
      
      <option  value="109104035/mod01lec21.mp4">Lecture-21International Economics</option>
      
      <option  value="109104035/mod01lec22.mp4">Lecture-22International Economics</option>
      
      <option  value="109104035/mod01lec23.mp4">Lecture-23International Economics</option>
      
      <option  value="109104035/mod01lec24.mp4">Lecture-24International Economics</option>
      
      <option  value="109104035/mod01lec25.mp4">Lecture-25International Economics</option>
      
      <option  value="109104035/mod01lec26.mp4">Lecture-26International Economics</option>
      
      <option  value="109104035/mod01lec27.mp4">Lecture-27International Economics</option>
      
      <option  value="109104035/mod01lec28.mp4">Lecture-28International Economics</option>
      
      <option  value="109104035/mod01lec29.mp4">Lecture-29International Economics</option>
      
      <option  value="109104035/mod01lec30.mp4">Lecture-30International Economics</option>
      
      <option  value="109104035/mod01lec31.mp4">Lecture-31International Economics</option>
      
      <option  value="109104035/mod01lec32.mp4">Lecture-32International Economics</option>
      
      <option  value="109104035/mod01lec33.mp4">Lecture-33International Economics</option>
      
      <option  value="109104035/mod01lec34.mp4">Lecture-34International Economics</option>
      
      <option  value="109104035/mod01lec35.mp4">Lecture-35International Economics</option>
      
      <option  value="109104035/mod01lec36.mp4">Lecture-36International Economics</option>
      
      <option  value="109104035/mod01lec37.mp4">Lecture-37International Economics</option>
      
      <option  value="109104035/mod01lec38.mp4">Lecture-38International Economics</option>
      
      <option  value="109104035/mod01lec39.mp4">Lecture-39International Economics</option>
      
      <option  value="109104035/mod01lec40.mp4">Lecture-40International Economics</option>
      
      <option  value="109104035/mod01lec41.mp4">Lecture-41International Economics</option>
      
      <option  value="109104035/mod01lec42.mp4">Lecture-42International Economics</option>
      
      <option  value="109104035/mod01lec43.mp4">Lecture-43International Economics</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104040</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong> Introduction to Logic </strong></td>
	<td><strong>Dr. A.V. Ravishankar Sarma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109103020/mod01lec01.mp4">Introduction                       </option>
<option value="109104040/mod01lec01.mp4">Lecture-01-Identification of Arguments                                                    </option>
<option value="109104040/mod01lec02.mp4">Lecture-02-Non- arguments                                                                 </option>
<option value="109104040/mod01lec03.mp4">Lecture-03-Types of Arguments: Deductive vs Inductive                                     </option>
<option value="109104040/mod01lec04.mp4">Lecture-04-Nature and Scope of Deductive and Inductive Arguments                          </option>
<option value="109104040/mod01lec05.mp4">Lecture-05-Truth, Validity and Soundness                                                  </option>
<option value="109104040/mod01lec06.mp4">Lecture-06-Strength of Inductive arguments, Counter example method                        </option>
<option value="109104040/mod01lec07.mp4">Lecture-07-Toulmin�s Model of Argumentation                                               </option>
<option value="109104040/mod01lec08.mp4">Lecture-08-Identification of Formal and Informal Fallacies                                </option>
<option value="109104040/mod01lec09.mp4">Lecture-09-Informal Fallacies: Fallacies of relevance                                     </option>
<option value="109104040/mod01lec10.mp4">Lecture-10-Fallacies of Weak Induction and Fallacies arising out of ambiguity in Language </option>
<option value="109104040/mod01lec11.mp4">Lecture-11-Introduction and motivation for Syllogistic Logic                              </option>
<option value="109104040/mod01lec12.mp4">Lecture-12-Aristotle theory of Syllogisms-1                                               </option>
<option value="109104040/mod01lec13.mp4">Lecture-13-Syllogistic Poem, Reduction of Syllogisms                                      </option>
<option value="109104040/mod01lec14.mp4">Lecture-14-Syllogistic Poem, Reduction of Syllogisms                                      </option>
<option value="109104040/mod01lec15.mp4">Lecture-15-Nature and Scope of Propositional Logic                                        </option>
<option value="109104040/mod01lec16.mp4">Lecture-16-Syntax of Propositional Logic                                                  </option>
<option value="109104040/mod01lec17.mp4">Lecture-17-Logical Connectives: Truth Tables                                              </option>
<option value="109104040/mod01lec18.mp4">Lecture-18-Truth Table Method: Validity, Consistency, Logical Equivalence                 </option>
<option value="109104040/mod01lec19.mp4">Lecture-19-Semantic Tableaux Method for Propositional Logic                               </option>
<option value="109104040/mod01lec20.mp4">Lecture-20-Knights and Knaves Puzzles                                                     </option>
<option value="109104040/mod01lec21.mp4">Lecture-21-Semantic Tableaux Method: Further Examples                                     </option>
<option value="109104040/mod01lec22.mp4">Lecture-22-Natural Deduction Method                                                       </option>
<option value="109104040/mod01lec23.mp4">Lecture-23-Natural Deduction: Examples                                                    </option>
<option value="109104040/mod01lec24.mp4">Lecture-24-Conjunctive and Disjunctive Normal Forms                                       </option>
<option value="109104040/mod01lec25.mp4">Lecture-25-CNF, DNF and satisfiability and Validity                                       </option>
<option value="109104040/mod01lec26.mp4">Lecture-26-Resolution and refutation method                                               </option>
<option value="109104040/mod01lec27.mp4">Lecture-27-Resolution and refutation method: Examples                                     </option>
<option value="109104040/mod01lec28.mp4">Lecture-28-Axiomatic Propositional Logic                                                  </option>
<option value="109104040/mod01lec29.mp4">Lecture-29-Hlbert Ackermann Axiomatic system                                              </option>
<option value="109104040/mod01lec30.mp4">Lecture-30-Proofs in the PM system                                                        </option>
<option value="109104040/mod01lec31.mp4">Lecture-31-Hilbert and Ackermann System                                                   </option>
<option value="109104040/mod01lec32.mp4">Lecture-32-Outlines of Predicate Logic                                                    </option>
<option value="109104040/mod01lec33.mp4">Lecture-33-Outlines of Predicate Logic                                                    </option>
<option value="109104040/mod01lec34.mp4">Lecture-34-Building blocks of Predicate Logic                                             </option>
<option value="109104040/mod01lec35.mp4">Lecture 35: Quantifiers, freedom, bondage                                                 </option>
<option value="109104040/mod01lec36.mp4">Lecture-36-Translation in to predicate Logic                                              </option>
<option value="109104040/mod01lec37.mp4">Lecture-37-Semantics of Predicate Logic                                                   </option>
<option value="109104040/mod01lec38.mp4">Lecture-38-Truth, satisfiability, validity in Predicate Logic                             </option>
<option value="109104040/mod01lec39.mp4">Lecture-39-Formation Trees for wff�s in predicate Logic                                   </option>
<option value="109104040/mod01lec40.mp4">Lecture-40-Semantic Tableaux Method for Predicate Logic                                   </option>
<option value="109104040/mod01lec41.mp4">Lecture-41-Semantic Tableaux method: Satisfiability, Validity                             </option>
<option value="109104040/mod01lec42.mp4">Lecture-42-Natural Deduction in Predicate Logic                                           </option>
<option value="109104040/mod01lec43.mp4">Lecture-43-Important theorems in First order Logic                                        </option>
<option value="109104040/mod01lec44.mp4">Lecture-44-Limitations of first order logic and Introduction to the course                </option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104044</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Population and Society</strong></td>
	<td><strong>Prof. A.K. Sharma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104044/lecture1/main.html">Introduction</option>
      
      <option  value="109104044/lecture2/2_1.htm">Basic Concepts and Measurements</option>
      
      <option  value="109104044/lecture3/3_1.htm">Perspectives and Linkages</option>
      
      <option  value="109104044/lecture4/4_1.htm">Society and Culture</option>
      
      <option  value="109104044/lecture5/5_1.htm">Sanskritization and Westernization.</option>
      
      <option  value="109104044/lecture6/6_1.htm">Society and Development: The Model Of Inclusive Growth</option>
      
      <option  value="109104044/lecture7/7_1.htm">Methodology and Methods</option>
      
      <option  value="109104044/lecture8/8_1.htm">Combining Methods and Data</option>
      
      <option  value="109104044/lecture9/9_1.htm">Interview, Observation and Focus Group Discussion Methods</option>
      
      <option  value="109104044/lecture10/10_1.htm">Introduction to Census, SRS,and Other National Sample Surveys</option>
      
      <option  value="109104044/lecture11/11_1.htm">Modelling Population Phenomena</option>
      
      <option  value="109104044/lecture12/12_1.htm">Issues in Modelling</option>
      
      <option  value="109104044/lecture13/13_1.htm">Contemporary Issues</option>
      
      <option  value="109104044/lecture14/14_1.htm">Stages and Limitations</option>
      
      <option  value="109104044/lecture15/15_1.htm">Population in Ancient Times and Middle Ages</option>
      
      <option  value="109104044/lecture16/16_1.htm">Demographic Transition in the Nineteenth and Twentieth Centuries</option>
      
      <option  value="109104044/lecture17/17_1.htm">Demographic Schism between Developed and Developing Countries and Future Prospects</option>
      
      <option  value="109104044/lecture18/18_1.htm">Population Growth in India</option>
      
      <option  value="109104044/lecture19/19_1.htm">Trends in Death and Birth Rates</option>
      
      <option  value="109104044/lecture20/20_1.htm">Future Prospects</option>

      
      <option  value="109104044/lecture21/21_1.htm">Urbanization in India</option>
      
      <option  value="109104044/lecture22/22_1.htm">Causes of Urbanization</option>
      
      <option  value="109104044/lecture23/23_1.htm">Theories of Urbanization and Development</option>
      
      <option  value="109104044/lecture24/24_1.htm">Theories in Historical Perspective</option>
      
      <option  value="109104044/lecture25/25_1.htm">Marxist Theory of Population</option>
      
      <option  value="109104044/lecture26/26_1.htm">Other Major Theorists of Population</option>
      
      <option  value="109104044/lecture27/27_1.htm">Daly's Synthesis and Optimum Population Theory</option>
      
      <option  value="109104044/lecture28/28_1.htm">Gandhian Theory</option>
      
      <option  value="109104044/lecture29/29_1.htm">Demographic Transition Theory</option>
      
      <option  value="109104044/lecture30/30_1.htm">Population Policy</option>
      
      <option  value="109104044/lecture31/31_1.htm">Effectiveness of Population Policies</option>
      
      <option  value="109104044/lecture32/32_1.htm">Family Planning Programme and Beyond Family Planning Measures to Control Fertility</option>
      
      <option  value="109104044/lecture33/33_1.htm">Family Planning Programme in India</option>
      
      <option  value="109104044/lecture34/34_1.htm">Population Policy Statement by Dr. Karan Singh</option>
      
      <option  value="109104044/lecture35/35_1.htm">Revision by Janata Party</option>
      
      <option  value="109104044/lecture36/36_1.htm">National Population Policy NPP 2000</option>
      
      <option  value="109104044/lecture37/37_1.htm">Population and Sustainable Development</option>
      
      <option  value="109104044/lecture38/38_1.htm">Role of Population in Models of Sustainable Development</option>
      
      <option  value="109104044/lecture39/39_1.htm">Environmental Beliefs</option>
      
      <option  value="109104044/lecture40/40_1.htm">Millennium Development Goals</option>
      
      <option  value="109104044/lecture41/41_1.htm">Population Issues in the Framework of MDGs</option>
      
      <option  value="109104044/lecture42/42_1.htm">New Issues before the Sociologists</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104045</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Population and Society</strong></td>
	<td><strong>Prof. A.K. Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104045/Lec_01.mp4">Lecture-01_Introduction</option>
      
      <option  value="109104045/Lec_02.mp4">Lecture-02_Basics Concepts</option>
      
      <option  value="109104045/Lec_03.mp4">Lecture-03_Perspectives On Population</option>
      
      <option  value="109104045/Lec_04.mp4">Lecture-04_Indian Society</option>
      
      <option  value="109104045/Lec_05.mp4">Lecture-05_Social Change in India</option>
      
      <option  value="109104045/Lec_06.mp4">Lecture-06_India: A Developing Economy</option>
      
      <option  value="109104045/Lec_07.mp4">Lecture-07_Methodology</option>
      
      <option  value="109104045/Lec_08.mp4">Lecture-08_Primary and Secondry Data and Related Issues</option>
      
      <option  value="109104045/Lec_09.mp4">Lecture-09_Sources of Population Data</option>
      
      <option  value="109104045/Lec_10.mp4">Lecture-10_Participatory Rural Appraisal</option>
      
      <option  value="109104045/Lec_11.mp4">Lecture-11_Demographic Models</option>
      
      <option  value="109104045/Lec_12.mp4">Lecture-12_Demographic models-II</option>
      
      <option  value="109104045/Lec_13.mp4">Lecture-13_Contemporary Issues In Modelling Population Processes</option>
      
      <option  value="109104045/Lec_14.mp4">Lecture-14_World Population Growth</option>
      
      <option  value="109104045/Lec_15.mp4">Lecture-15_Demographic Transition in the Nineteenth and Twentieth Centuries</option>
      
      <option  value="109104045/Lec_16.mp4">Lecture-16_Demographic schism between Developed and Developing Countries and Future Prospects</option>
      
      <option  value="109104045/Lec_17.mp4">Lecture-17_History Of Growth</option>
      
      <option  value="109104045/Lec_18.mp4">Lecture-18_Population of India-II</option>
      
      <option  value="109104045/Lec_19.mp4">Lecture-19_Trends In Death and Birth Rates</option>
      
      <option  value="109104045/Lec_20.mp4">Lecture-20_Population projections,Migration and Future Prospects</option>
      
      <option  value="109104045/Lec_21.mp4">Lecture-21_Urbanization and Development</option>
      
      <option  value="109104045/Lec_22.mp4">Lecture-22_Urbanization in India</option>
      
      <option  value="109104045/Lec_23.mp4">Lecture-23_Theories Of urbanization and Development</option>
      
      <option  value="109104045/Lec_24.mp4">Lecture-24_Future Of Urbanization In India</option>
      
      <option  value="109104045/Lec_25.mp4">Lecture-25_Population Theories</option>
      
      <option  value="109104045/Lec_26.mp4">Lecture-26_Marxist theory Of Population</option>
      
      <option  value="109104045/Lec_27.mp4">Lecture-27_Demographic Transition Theory and Related Issues</option>
      
      <option  value="109104045/Lec_28.mp4">Lecture-28_Gandhian Theory Of population</option>
      
      <option  value="109104045/Lec_29.mp4">Lecture-29_Population Policy</option>
      
      <option  value="109104045/Lec_30.mp4">Lecture-30_Effectiveness Of population Policies</option>
      
      <option  value="109104045/Lec_31.mp4">Lecture-31_Family Planning Programme and Beyond</option>
      
      <option  value="109104045/Lec_32.mp4">Lecture-32_National Population Policy</option>
      
      <option  value="109104045/Lec_33.mp4">Lecture-33_The First Policy Statement</option>
      
      <option  value="109104045/Lec_34.mp4">Lecture-34_Subsequent Developments Leading To National Population Policy 2000</option>
      
      <option  value="109104045/Lec_35.mp4">Lecture-35_Ecological Degradation and Environmental Protection</option>
      
      <option  value="109104045/Lec_36.mp4">Lecture-36_Diffrences In Perception Between Developed and Developing Countries</option>
      
      <option  value="109104045/Lec_37.mp4">Lecture-37_Total Environment Impact and Beliefs </option>
      
      <option  value="109104045/Lec_38.mp4">Lecture-38_Emerging Issues In sociology Of Population</option>
      
      <option  value="109104045/Lec_39.mp4">Lecture-39_Population Issues In The framework of MDGs</option>
      
      <option  value="109104045/Lec_40.mp4">Lecture-40_Population Issues (Cont.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104047</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Rural and Urban Sociology</strong></td>
	<td><strong>Dr. Anindita Chakrabarti</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104047/lecture1/main.html">What is 'urban'?</option>
      
      <option  value="109104047/lecture2/2_1.htm">How did the urban community emerge?</option>
      
      <option  value="109104047/lecture3/3_1.htm">How did the urban community emerge? (continued)</option>
      
      <option  value="109104047/lecture4/4_1.htm">Max Weber and Charles H. Cooley on the rise of the city</option>
      
      <option  value="109104047/lecture5/5_1.htm">History of Urbanization in India</option>
      
      <option  value="109104047/lecture6/6_1.html">History of Urbanization in India (continued)</option>
      
      <option  value="109104047/lecture7/7_1.htm">Urbanization in Medieval India</option>
      
      <option  value="109104047/lecture8/8_1.htm">The Industrial Revolution and the Rise of the Gesellschaft Part I</option>
      
      <option  value="109104047/lecture9/9_1.htm"> The Industrial Revolution and the Rise of the Gesellschaft Part II</option>
      
      <option  value="109104047/lecture10/10_1.htm">Friedrich Engels on the 'Hypocritical' Capitalist City</option>
      
      <option  value="109104047/lecture11/11_1.htm">Friedrich Engels on the 'Hypocritial' Capitalist City (continued)</option>
      
      <option  value="109104047/lecture12/12_1.htm">Freedom and Alienation in the City from Georg Simmel's "The Metropolis and Mental Life" (1903) </option>
      
      <option  value="109104047/lecture13/13_1.htm"> Freedom and Alienation in the City from Georg Simmel's "The Metropolis and Mental Life" (1903) (continued)</option>
      
      <option  value="109104047/lecture14/14_1.htm">The Chicago School or the Ecological Theory of the City</option>
      
      <option  value="109104047/lecture15/15_1.htm"> The Chicago School or the Ecological Theory of the City (continued)</option>
      
      <option  value="109104047/lecture16/16_1.htm">Ernest W. Burgess's Model of Urban Growth</option>
      
      <option  value="109104047/lecture17/17_1.htm">Louis Wirth: "Urbanism as a Way of Life"</option>
      
      <option  value="109104047/lecture18/18_1.htm">Louis Wirth: "Urbanism as a Way of Life" (continued)</option>
      
      <option  value="109104047/lecture19/19_1.htm"> Compositional and Cultural Theories </option>
      
      <option  value="109104047/lecture20/20_1.htm">Compositional and Cultural Theories 2</option>
      
      <option  value="109104047/lecture21/21_1.htm">Compositional and Cultural Theories 2 (continued)</option>
      
      <option  value="109104047/lecture22/22_1.htm">Socio-spatial Approach or the New Urban Sociology</option>
      
      <option  value="109104047/lecture23/23_1.htm">Technology </option>
      
      <option  value="109104047/lecture24/24_1.htm">Material Culture : The Chimmey, Street lighting and Urban Space</option>
      
      <option  value="109104047/lecture25/25_1.htm">Colonial Cities and Technology: the Case of Calcutta</option>
      
      <option  value="109104047/lecture26/26_1.htm">Technology and the Urban Community Part I</option>
      
      <option  value="109104047/lecture27/27_1.htm">Technology and the Urban Community Part II</option>
      
      <option  value="109104047/lecture28/28_1.htm">Technology and the Urban Community Part III</option>
      
      <option  value="109104047/lecture29/29_1.htm">The Gemeinschaft in the City: Urban Neighbourhoods</option>
      
      <option  value="109104047/lecture30/30_1.htm">   The Gemeinschaft in the City: Urban Neighbourhoods</option>
      
      <option  value="109104047/lecture31/31_1.htm">           The Gemeinschaft in the City: Urban Neighbourhoods</option>
      
      <option  value="109104047/lecture32/32_1.htm">Louis Wirth (1927): The Ghetto</option>
      
      <option  value="109104047/lecture33/33_1.htm">City Planning</option>
      
      <option  value="109104047/lecture34/34_1.htm">City Planning (continued)</option>
      

      <option  value="109104047/lecture35/35_1.htm">       City Planning (continued)</option>
      
      <option  value="109104047/lecture36/36_1.htm">The Planning of the Pre-Imperial Cities of India: the Port Cities</option>
      
      <option  value="109104047/lecture37/37_1.htm">The Imperial City: The Making of Colonial Lucknow</option>
      
      <option  value="109104047/lecture38/38_1.htm">The Imperial City: The Making of Colonial Lucknow (continued)</option>
      
      <option  value="109104047/lecture39/39_1.htm">    The Imperial City: The Making of Colonial Lucknow (continued)</option>
      
      <option  value="109104047/lecture40/40_1.htm">The Modern City in Post-Independent India: the case-study of Chandigarh</option>
      
      <option  value="109104047/lecture41/41_1.htm">The Modern City in Post-Independent India: the case-study of Chandigarh (continued)</option>
      
      <option  value="109104047/lecture42/42_1.htm">City Design and Contemporary Urban Changes</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104050</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Translation Studies and Theory</strong></td>
	<td><strong>Prof. Mini Chandran</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104050/lecture1/main.htm">History of Translation in the West</option>
      
      <option  value="109104050/lecture2/2_1.htm">History of Translation in India</option>
      
      <option  value="109104050/lecture3/3_1.htm">The Early Phase of Translation Studies: Issues and Strategies </option>
      
      <option  value="109104050/lecture4/4_1.htm">Basic Concepts and Terminology of Translation Studies   	</option>
      
      <option  value="109104050/lecture5/5_1.htm">Evolution of Translation Studies as a Discipline</option>
      
      <option  value="109104050/lecture6/6_1.htm">Functions of Translation</option>
      
      <option  value="109104050/lecture7/7_1.htm">Equivalence and Shifts</option>
      
      <option  value="109104050/lecture8/8_1.htm">Translatability of Languages </option>
      
      <option  value="109104050/lecture9/9_1.htm">Early Translation Theories </option>
      
      <option  value="109104050/lecture10/10_1.htm">Scientific Bent in translation </option>
      
      <option  value="109104050/lecture11/11_1.htm">Polysystem Theory and Translation </option>
      
      <option  value="109104050/lecture12/12_1.htm">Poststructuralist Theories and Translation</option>
      
      <option  value="109104050/lecture13/13_1.htm">Indian Aesthetic Theories and Translation</option>
      
      <option  value="109104050/lecture14/14_1.htm">Indian Translation Theory</option>
      
      <option  value="109104050/lecture15/15_1.htm">Post-colonial Translation</option>
      
      <option  value="109104050/lecture16/16_1.htm">Post-colonial Theory and Translation</option>
      
      <option  value="109104050/lecture17/17_1.htm">The Making of a Nation � A Case Study of Anandamath</option>
      
      <option  value="109104050/lecture18/18_1.htm">Sakuntala�s Colonial and Postcolonial Versions</option>
      
      <option  value="109104050/lecture19/19_1.htm">The Cultural Turn in Translation Studies</option>
      
      <option  value="109104050/lecture20/20_1.htm">Translating in a Globalized World</option>
      
      <option  value="109104050/lecture21/21_1.htm">Languages and the Politics of Translation in India</option>
      
      <option  value="109104050/lecture22/22_1.htm">Publication of Translations in India</option>
      
      <option  value="109104050/lecture23/23_1.htm">Migration, Language and Identity</option>
      
      <option  value="109104050/lecture24/24_1.htm">Issues of Gender</option>
      
      <option  value="109104050/lecture25/25_1.htm">The Invisible Translator</option>
      
      <option  value="109104050/lecture26/26_1.htm">Strategies of Translation and Cultural Contexts</option>
      
      <option  value="109104050/lecture27/27_1.htm">Translation as Resistance</option>
      
      <option  value="109104050/lecture28/28_1.htm">Translating within a Language System</option>
      
      <option  value="109104050/lecture29/29_1.htm">Rewriting, Remake and Transcreation </option>
      
      <option  value="109104050/lecture30/30_1.htm">Inter-semiotic Translation </option>
      
      <option  value="109104050/lecture31/31_1.htm">Translating Scripture </option>
      
      <option  value="109104050/lecture32/32_1.htm">The Bible in Different Languages</option>
      
      <option  value="109104050/lecture33/33_1.htm">Rewritings / Retellings of Indian Epics I: Mahabharata </option>
      
      <option  value="109104050/lecture34/34_1.htm">Rewritings / Retellings of Indian Epics II: Ramayana </option>
      
      <option  value="109104050/lecture35/35_1.htm">The Language of Commerce </option>
      
      <option  value="109104050/lecture36/36_1.htm">Mediating between Two Languages </option>
      
      <option  value="109104050/lecture37/37_1.htm">Dubbing and Subtitling in Films</option>
      
      <option  value="109104050/lecture38/38_1.htm">Machine Translation </option>
      
      <option  value="109104050/lecture39/39_1.htm">Translation in the Twenty first Century </option>
      
      <option  value="109104050/lecture40/40_1.htm">The Role of Translation in the Contemporary World</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104068</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Exploring Human Values: Visions of  Happiness and Perfect Society</strong></td>
	<td><strong>Prof. A.K. Sharma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104068/lecture1/main.html">Exploring Human Values: Visions of Happiness and Perfect Society   	</option>
      
      <option  value="109104068/lecture2/2_1.html">Role is value education </option>
      
      <option  value="109104068/lecture3/3_1.htm">Paradoxes of Happiness </option>
      
      <option  value="109104068/lecture4/4_1.htm">Quality of Life: Evidence from Surveys </option>
      
      <option  value="109104068/lecture5/5_1.html">Moral Approach to Social Transformation</option>
      
      <option  value="109104068/lecture6/6_1.htm">Institutional Approach to Social Transformation</option>
      
      <option  value="109104068/lecture7/7_1.html">Man and Society : The Nature of Crisis</option>
      
      <option  value="109104068/lecture8/8_1.html">Structure, Symbolic Interactionism and Structural Symbolic Interactionism</option>
      
      <option  value="109104068/lecture9/9_1.html">Vedic Philosophy -I (Hinduism) </option>
      
      <option  value="109104068/lecture10/10_1.html">Vedic Philosophy-II (Hindu Approaches to Welfare of Man and Society) </option>
      
      <option  value="109104068/lecture11/11_1.html">Jain and Buddhist Philosophies</option>
      
      <option  value="109104068/lecture12/12_1.html">Christianity, Islam and Sikhism </option>
      
      <option  value="109104068/lecture13/13_1.html">Religion and Society </option>
      
      <option  value="109104068/lecture14/14_1.html">Utilitarianism</option>
      
      <option  value="109104068/lecture15/15_1.html">Utility and Economic Theory</option>
      
      <option  value="109104068/lecture16/16_1.html">Capitalism, Socialism, and Mixed Economy</option>
      
      <option  value="109104068/lecture17/17_1.html">Value Economy</option>
      
      <option  value="109104068/lecture18/18_1.html">Economics in Our Times, Trends in Organization of Capital, and the Destiny</option>
      
      <option  value="109104068/lecture19/19_1.html">Political Contribution to Happiness and Justice</option>
      
      <option  value="109104068/lecture20/20_1.html">Current Political Approaches: AICC</option>
      
      <option  value="109104068/lecture21/21_1.html">Manifesto of BJP</option>
      
      <option  value="109104068/lecture22/22_1.html">The other Parties and their Contributions</option>
      
      <option  value="109104068/lecture23/23_1.html">Modernization and Development in Post-independence India: Nehruvian Model of Industrial Socialism</option>
      
      <option  value="109104068/lecture24/24_1.html">Inclusive Growth: Renewed Support to Model of Development</option>
      
      <option  value="109104068/lecture25/25_1.html">Modernization and Post-modernization</option>
      
      <option  value="109104068/lecture26/26_1.html">Emancipation: Modern and Postmodern</option>
      
      <option  value="109104068/lecture27/27_1.html">Dilemmas and Paradoxes</option>
      
      <option  value="109104068/lecture28/28_1.html">Sources of Hope or Hopelessness</option>
      
      <option  value="109104068/lecture29/29_1.html">Transforming Society and Self</option>
      
      <option  value="109104068/lecture30/30_1.html">Professional Ethics</option>
      
      <option  value="109104068/lecture31/31_1.html">Indian Social Thoughts</option>
      
      <option  value="109104068/lecture32/32_1.html">Issues in Modernization in India � I (From Skepticism to Conversion) </option>
      
      <option  value="109104068/lecture33/33_1.html">Issues in Modernization in India � II (Search for a Just, Human Order) </option>
      
      <option  value="109104068/lecture34/34_1.html">Practical problems of India-I</option>
      
      <option  value="109104068/lecture35/35_1.html">Practical Problems of India-II</option>
      
      <option  value="109104068/lecture36/36_1.html">Value Education-I</option>
      
      <option  value="109104068/lecture37/37_1.html">Value Education -II </option>
      
      <option  value="109104068/lecture38/38_1.html">Value Education-III (Professional Ethics) </option>
      
      <option  value="109104068/lecture39/39_1.html">Evaluation of Value Education</option>
      
      <option  value="109104068/lecture40/40_1.html">Conclusion</option>
      
      <option  value="109104068/lecture41/1_2.html">Lecture 1</option>
      
      <option  value="109104068/lecture41/2_1.html">Lecture 2</option>
      
      <option  value="109104068/lecture41/3_2.html">Lecture 3</option>
      
      <option  value="109104068/lecture41/4_2.html">Lecture 4</option>
      
      <option  value="109104068/lecture41/5_1.html">Lecture 5</option>
      
      <option  value="109104068/lecture41/6_2.html">Lecture 6</option>
      
      <option  value="109104068/lecture41/7_2.html">Lecture 7</option>
      
      <option  value="109104068/lecture41/8_2.html">Lecture 8</option>
      
      <option  value="109104068/lecture41/9_1.html">Lecture 9</option>
      
      <option  value="109104068/lecture41/10_2.html">Lecture 10</option>
      
      <option  value="109104068/lecture41/11_2.html">Lecture 11</option>
      
      <option  value="109104068/lecture41/12_2.html">Lecture 12</option>
      
      <option  value="109104068/lecture41/13_2.html">Lecture 13</option>
      
      <option  value="109104068/lecture41/14_1.html">Lecture 14</option>
      
      <option  value="109104068/lecture41/15_2.html">Lecture 15</option>
      
      <option  value="109104068/lecture41/16_1.html">Lecture 16</option>
      
      <option  value="109104068/lecture41/17_1.html">Lecture 17</option>
      
      <option  value="109104068/lecture41/18_1.html">Lecture 18</option>
      
      <option  value="109104068/lecture41/9_1.html">Lecture 19</option>
      
      <option  value="109104068/lecture41/20_1.html">Lecture 20</option>
      
      <option  value="109104068/lecture41/21_1.html">Lecture 21</option>
      
      <option  value="109104068/lecture41/22_1.html">Lecture 22</option>
      
      <option  value="109104068/lecture41/23_1.html">Lecture 23</option>
      
      <option  value="109104068/lecture41/24_1.html">Lecture 24</option>
      
      <option  value="109104068/lecture41/25_1.html">Lecture 25</option>
      
      <option  value="109104068/lecture41/26_1.html">Lecture 26</option>
      
      <option  value="109104068/lecture41/27_1.html">Lecture 27</option>
      
      <option  value="109104068/lecture41/28_1.html">Lecture 28</option>
      
      <option  value="109104068/lecture41/29_1.html">Lecture 29</option>
      
      <option  value="109104068/lecture41/30_1.html">Lecture 30</option>
      
      <option  value="109104068/lecture41/31_1.html">Lecture 31</option>
      
      <option  value="109104068/lecture41/32_1.html">Lecture 32</option>
      
      <option  value="109104068/lecture41/33_1.html">Lecture 33</option>
      
      <option  value="109104068/lecture41/34_1.html">Lecture34</option>
      
      <option  value="109104068/lecture41/35_1.html">Lecture 35</option>
      
      <option  value="109104068/lecture41/36_1.html">Lecture 36</option>
      
      <option  value="109104068/lecture41/37_1.html">Lecture 37</option>
      
      <option  value="109104068/lecture41/38_1.html">Lecture 38</option>
      
      <option  value="109104068/lecture41/39_1.html">Lecture 39</option>
      
      <option  value="109104068/lecture41/40_1.html">Lecture 40</option>
      
      <option  value="109104068/lecture41/41_1.html">Answers</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104070</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Psychology of adjustment</strong></td>
	<td><strong>Braj Bhushan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104070/Module-1.pdf">Human Adjustment Process</option>
      
      <option  value="109104070/Module-2.pdf">Dimensions of Subjective Adjustment</option>
      
      <option  value="109104070/Module-3.pdf">Adjustment-Range of Reactions</option>
      
      <option  value="109104070/Module-4.pdf">Human Adjustment Process: Maintenance Needs</option>
      
      <option  value="109104070/Module-5.pdf">General Adjustive Behaviour & Frame of Reference</option>
      
      <option  value="109104070/Module-6.pdf">Reality, Neurotic and Moral Anxiety</option>
      
      <option  value="109104070/Module-7.pdf">Neurotic nucleus, Neurotic paradox, Transient situational reactions and defences</option>
      
      <option  value="109104070/Module-8.pdf">Task oriented Reaction Pattern</option>
      
      <option  value="109104070/Module-9.pdf">Defense Mechanism</option>
      
      <option  value="109104070/Module-10.pdf">Dimensions of subjective adjustment- Avoidance, Withdrawal and Compromise</option>
      
      <option  value="109104070/Module-11.pdf">Dimensions of Subjective Adjustment Emotions and Adjustment</option>
      
      <option  value="109104070/Module-12.pdf">Stress</option>
      
      <option  value="109104070/Module-13.pdf">Aggression</option>
      
      <option  value="109104070/Module-14.pdf">Recognizing Self and Others</option>
      
      <option  value="109104070/Module-15.pdf">Psychological Disorders</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104071</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Public Economics</strong></td>
	<td><strong>Prof. Tanika Chakrabarty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104071/Module1/lecture1.pdf">Lecture 1</option>
      
      <option  value="109104071/Module1/lecture2.pdf">Lecture 2 </option>
      
      <option  value="109104071/Module2/lecture3.pdf">Lecture 3</option>
      
      <option  value="109104071/Module2/lecture4.pdf">Lecture 4</option>
      
      <option  value="109104071/Module2/lecture5.pdf">Lecture 5</option>
      
      <option  value="109104071/Module2/lecture6.pdf">Lecture 6</option>
      
      <option  value="109104071/Module2/lecture7.pdf">Lecture 7</option>
      
      <option  value="109104071/Module3/lecture8.pdf">Lecture 8</option>
      
      <option  value="109104071/Module3/lecture9.pdf">Lecture 9</option>
      
      <option  value="109104071/Module3/lecture10.pdf">Lecture 10</option>
      
      <option  value="109104071/Module3/lecture11.pdf">Lecture 11</option>
      
      <option  value="109104071/Module3/lecture12.pdf">Lecture 12</option>
      
      <option  value="109104071/Module3/lecture13.pdf">Lecture 13</option>
      
      <option  value="109104071/Module3/lecture14.pdf">Lecture 14</option>
      
      <option  value="109104071/Module4/lecture15.pdf">Lecture 15</option>
      
      <option  value="109104071/Module4/lecture16.pdf">Lecture 16</option>
      
      <option  value="109104071/Module4/lecture17.pdf">Lecture 17 </option>
      
      <option  value="109104071/Module4/lecture18.pdf">Lecture 18</option>
      
      <option  value="109104071/Module4/lecture19.pdf">Lecture 19</option>
      
      <option  value="109104071/Module4/lecture20.pdf">Lecture 20</option>
      
      <option  value="109104071/Module5/lecture21.pdf">Lecture 21</option>
      
      <option  value="109104071/Module5/lecture22.pdf">Lecture 22</option>
      
      <option  value="109104071/Module5/lecture23.pdf">Lecture 23</option>
      
      <option  value="109104071/Module6/lecture24.pdf">Lecture 24</option>
      
      <option  value="109104071/Module6/lecture25.pdf">Lecture 25</option>
      
      <option  value="109104071/Module6/lecture26.pdf">Lecture 26</option>
      
      <option  value="109104071/Module6/lecture27.pdf">Lecture 27</option>
      
      <option  value="109104071/Module7/lecture28.pdf">Lecture 28</option>
      
      <option  value="109104071/Module7/lecture29.pdf">Lecture 29</option>
      
      <option  value="109104071/Module7/lecture30.pdf">Lecture 30</option>
      
      <option  value="109104071/Module8/lecture31.pdf">Lecture 31</option>
      
      <option  value="109104071/Module8/lecture32.pdf">Lecture 32</option>
      
      <option  value="109104071/Module9/lecture33.pdf">Lecture 33</option>
      
      <option  value="109104071/Module10/lecture34.pdf">Lecture 34</option>
      
      <option  value="109104071/Module10/lecture35.pdf">Lecture 35</option>
      
      <option  value="109104071/Module10/lecture36.pdf">Lecture 36</option>
      
      <option  value="109104071/Module10/lecture37.pdf">Lecture 37</option>
      
      <option  value="109104071/Module11/lecture38.pdf">Lecture 38</option>
      
      <option  value="109104071/Module11/lecture39.pdf">Lecture 39</option>
      
      <option  value="109104071/Assignment/lecture40.pdf">Assignment</option>
      
      <option  value="109104071/References/References.pdf">References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104072</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>History of modern economic thought</strong></td>
	<td><strong>Dr.Anirban Mukherjee</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104072/Module1/lecture1.pdf">Lecture1</option>
      
      <option  value="109104072/Module1/lecture2.pdf">Lecture2</option>
      
      <option  value="109104072/Module1/lecture3.pdf">Lecture3</option>
      
      <option  value="109104072/Module2/lecture4.pdf">Lecture4</option>
      
      <option  value="109104072/Module2/lecture5.pdf">Lecture5</option>
      
      <option  value="109104072/Module2/lecture6.pdf">Lecture6</option>
      
      <option  value="109104072/Module2/lecture7.pdf">Lecture7</option>
      
      <option  value="109104072/Module2/lecture8.pdf">Lecture8</option>
      
      <option  value="109104072/Module2/lecture9.pdf">Lecture9</option>
      
      <option  value="109104072/Module2/lecture10.pdf">Lecture10</option>
      
      <option  value="109104072/Module2/lecture11.pdf">Lecture11</option>
      
      <option  value="109104072/Module2/lecture12.pdf">Lecture12</option>
      
      <option  value="109104072/Module2/lecture13.pdf">Lecture13</option>
      
      <option  value="109104072/Module2/lecture14.pdf">Lecture14</option>
      
      <option  value="109104072/Module2/lecture15.pdf">Lecture15</option>
      
      <option  value="109104072/Module3/lecture16.pdf">Lecture16</option>
      
      <option  value="109104072/Module3/lecture17.pdf">Lecture17</option>
      
      <option  value="109104072/Module3/lecture18.pdf">Lecture18</option>
      
      <option  value="109104072/Module3/lecture19.pdf">Lecture19</option>
      
      <option  value="109104072/Module3/lecture20.pdf">Lecture20</option>
      
      <option  value="109104072/Module3/lecture21.pdf">Lecture21</option>
      
      <option  value="109104072/Module3/lecture22.pdf">Lecture22</option>
      
      <option  value="109104072/Module3/lecture23.pdf">Lecture23</option>
      
      <option  value="109104072/Module3/lecture24.pdf">Lecture24</option>
      
      <option  value="109104072/Module3/lecture25.pdf">Lecture25</option>
      
      <option  value="109104072/Module3/lecture26.pdf">Lecture26</option>
      
      <option  value="109104072/Module4/lecture27.pdf">Lecture27</option>
      
      <option  value="109104072/Module4/lecture28.pdf">Lecture28</option>
      
      <option  value="109104072/Module4/lecture29.pdf">Lecture29</option>
      
      <option  value="109104072/Module4/lecture30.pdf">Lecture30</option>
      
      <option  value="109104072/Module4/lecture31.pdf">Lecture31</option>
      
      <option  value="109104072/Module4/lecture32.pdf">Lecture32</option>
      
      <option  value="109104072/Module5/lecture33.pdf">Lecture33</option>
      
      <option  value="109104072/Module5/lecture34.pdf">Lecture34</option>
      
      <option  value="109104072/Module5/lecture35.pdf">Lecture35</option>
      
      <option  value="109104072/Module5/lecture36.pdf">Lecture36</option>
      
      <option  value="109104072/Module6/lecture37.pdf">Lecture37</option>
      
      <option  value="109104072/Module6/lecture38.pdf">Lecture38</option>
      
      <option  value="109104072/Module6/lecture39.pdf">Lecture39</option>
      
      <option  value="109104072/Module6/lecture40.pdf">Lecture40</option>
      
      <option  value="109104072/Module7/lecture41.pdf">Lecture41</option>
      
      <option  value="109104072/Module7/lecture42.pdf">Lecture42</option>
      
      <option  value="109104072/Conclusion/lecture43.pdf">Lecture43</option>
      
      <option  value="109104072/References/References.pdf">References</option>
      
      <option  value="109104072/Question/Question.pdf">Question</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104074</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Introduction to Sociology</strong></td>
	<td><strong>Prof. A.K. Sharma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104074/mod01lec01.mp4">Lecture-01 What is sociology?</option>
      
      <option  value="109104074/mod01lec02.mp4">Lecture-02 Sociological approaches</option>
      
      <option  value="109104074/mod01lec03.mp4">Lecture-03Nature of society: Individuals and groups</option>
      
      <option  value="109104074/mod01lec04.mp4">Lecture-04 Cooperation and conflict</option>
      
      <option  value="109104074/mod01lec05.mp4">Lecture-05 Family-I: Definition and classification of family</option>
      
      <option  value="109104074/mod01lec06.mp4">Lecture-06 Family-II: Perspectives on family</option>
      
      <option  value="109104074/mod01lec07.mp4">Lecture-07 State-I: Definition of state</option>
      
      <option  value="109104074/mod01lec08.mp4">Lecture-08 State-II: State in India</option>
      
      <option  value="109104074/mod01lec09.mp4">Lecture-09 State-III: The concept of power</option>
      
      <option  value="109104074/mod01lec10.mp4">Lecture-10 State-IV: Functionalist and Marxist perspectives on power</option>
      
      <option  value="109104074/mod01lec11.mp4">Lecture-11 Sociology of work-I: Need for work </option>
      
      <option  value="109104074/mod01lec12.mp4">Lecture-12 Sociology of work-II: Social change and work </option>
      
      <option  value="109104074/mod01lec13.mp4">Lecture-13 Sociology of work-III:  Development and work</option>
      
      <option  value="109104074/mod01lec14.mp4">Lecture-14 Sociology of work-IV: Capitalism and motivation for work</option>
      
      <option  value="109104074/mod01lec15.mp4">Lecture-15 Religion-I: Social conditions and religious thought</option>
      
      <option  value="109104074/mod01lec16.mp4">Lecture-16 Religion-II: Bases of religion</option>
      
      <option  value="109104074/mod01lec17.mp4">Lecture-17 Religion-III: Forms of religious beliefs</option>
      
      <option  value="109104074/mod01lec18.mp4">Lecture-18What is sociology?</option>
      
      <option  value="109104074/mod01lec19.mp4">Lecture-19 Religion-V: Religion and society</option>
      
      <option  value="109104074/mod01lec20.mp4">Lecture-20 Religion-VI: Contributions of Marx and Weber</option>
      
      <option  value="109104074/mod01lec21.mp4">Lecture-21 Education-I: Concept of education?</option>
      
      <option  value="109104074/mod01lec22.mp4">Lecture-22 Education-II: Functions of education</option>
      
      <option  value="109104074/mod01lec23.mp4">Lecture-23 Social stratification-I: Social inequality and stratification</option>
      
      <option  value="109104074/mod01lec24.mp4">Lecture-24 Social stratification-II: Explanations of social stratification</option>
      
      <option  value="109104074/mod01lec25.mp4">Lecture-25 Social stratification-III: Theories and facts</option>
      
      <option  value="109104074/mod01lec26.mp4">Lecture-26 Social stratification-IV: Stratification in India</option>
      
      <option  value="109104074/mod01lec27.mp4">Lecture-27 Deviance-I: Concept of deviance</option>
      
      <option  value="109104074/mod01lec28.mp4">Lecture-28 Deviance-II: Perspectives on deviance</option>
      
      <option  value="109104074/mod01lec29.mp4">Lecture-29 Deviance-III: Theories of deviance</option>
      
      <option  value="109104074/mod01lec30.mp4">Lecture-30 Social change-I: Definition of social change</option>
      
      <option  value="109104074/mod01lec31.mp4">Lecture-31 Social change-II: Theories of social change</option>
      
      <option  value="109104074/mod01lec32.mp4">Lecture-32 Social change-III: Social change in industrial society </option>
      
      <option  value="109104074/mod01lec33.mp4">Lecture-33 Social change-IV: Urbanization and related issues in social change </option>
      
      <option  value="109104074/mod01lec34.mp4">Lecture-34 Population-I: Malthusian theory of population</option>
      
      <option  value="109104074/mod01lec35.mp4">Lecture-35 Population-II: Population and Society</option>
      
      <option  value="109104074/mod01lec36.mp4">Lecture-36 Perspectives in Sociology-I</option>
      
      <option  value="109104074/mod01lec37.mp4">Lecture-37 Perspectives in Sociology-II</option>
      
      <option  value="109104074/mod01lec38.mp4">Lecture-38 Social Problems and Theory</option>
      
      <option  value="109104074/mod01lec39.mp4">Lecture-39 Sociological methods-I</option>
      
      <option  value="109104074/mod01lec40.mp4">Lecture-40 Sociological methods-II: Ethnography</option>
      
      <option  value="109104074/mod01lec41.mp4">Lecture-41 Sociological methods-III: Ethnography in India</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104076</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Money & Banking</strong></td>
	<td><strong>Prof.Surajit Sinha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109104076/Lecture-01.mp4">Lecture-01</option>
      
      <option  value="109104076/Lecture-02.mp4">Lecture-02</option>
      
      <option  value="109104076/Lecture-03.mp4">Lecture-03</option>
      
      <option  value="109104076/Lecture-04.mp4">Lecture-04</option>
      
      <option  value="109104076/Lecture-05.mp4">Lecture-05</option>
      
      <option  value="109104076/Lecture-06.mp4">Lecture-06</option>
      
      <option  value="109104076/Lecture-07.mp4">Lecture-07</option>
      
      <option  value="109104076/Lecture-08.mp4">Lecture-08</option>
      
      <option  value="109104076/Lecture-09.mp4">Lecture-09</option>
      
      <option  value="109104076/Lecture-10.mp4">Lecture-10</option>
      
      <option  value="109104076/Lecture-11.mp4">Lecture-11</option>
      
      <option  value="109104076/Lecture-12.mp4">Lecture-12</option>
      
      <option  value="109104076/Lecture-13.mp4">Lecture-13</option>
      
      <option  value="109104076/Lecture-14.mp4">Lecture-14</option>
      
      <option  value="109104076/Lecture-15.mp4">Lecture-15</option>
      
      <option  value="109104076/Lecture-16.mp4">Lecture-16</option>
      
      <option  value="109104076/Lecture-17.mp4">Lecture-17</option>
      
      <option  value="109104076/Lecture-18.mp4">Lecture-18</option>
      
      <option  value="109104076/Lecture-19.mp4">Lecture-19</option>
      
      <option  value="109104076/Lecture-20.mp4">Lecture-20</option>
      
      <option  value="109104076/Lecture-21.mp4">Lecture-21</option>
      
      <option  value="109104076/Lecture-22.mp4">Lecture-22</option>
      
      <option  value="109104076/Lecture-23.mp4">Lecture-23</option>
      
      <option  value="109104076/Lecture-24.mp4">Lecture-24</option>
      
      <option  value="109104076/Lecture-25.mp4">Lecture-25</option>
      
      <option  value="109104076/Lecture-26.mp4">Lecture-26</option>
      
      <option  value="109104076/Lecture-27.mp4">Lecture-27</option>
      
      <option  value="109104076/Lecture-28.mp4">Lecture-28</option>
      
      <option  value="109104076/Lecture-29.mp4">Lecture-29</option>
      
      <option  value="109104076/Lecture-30.mp4">Lecture-30</option>
      
      <option  value="109104076/Lecture-31.mp4">Lecture-31</option>
      
      <option  value="109104076/Lecture-32.mp4">Lecture-32</option>
      
      <option  value="109104076/Lecture-33.mp4">Lecture-33</option>
      
      <option  value="109104076/Lecture-34.mp4">Lecture-34</option>
      
      <option  value="109104076/Lecture-35.mp4">Lecture-35</option>
      
      <option  value="109104076/Lecture-36.mp4">Lecture-36</option>
      
      <option  value="109104076/Lecture-37.mp4">Lecture-37</option>
      
      <option  value="109104076/Lecture-38.mp4">Lecture-38</option>
      
      <option  value="109104076/Lecture-39.mp4">Lecture-39</option>
      
      <option  value="109104076/Lecture-40.mp4">Lecture-40</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104081</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Human Adjustment Processes </strong></td>
	<td><strong>Braj Bhushan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109103020/mod01lec01.mp4">Introduction                       </option>
<option value="109104081/mod00lec01.mp4">Understanding Oneself                                                          </option>
<option value="109104081/mod01lec01.mp4">Module-01_Lecture-01 Understanding Adjustment                                  </option>
<option value="109104081/mod01lec02.mp4">Module-01_Lecture-02-Understanding Adjustment                                  </option>
<option value="109104081/mod01lec03.mp4">Module-01_Lecture-03-Understanding Adjustment                                  </option>
<option value="109104081/mod01lec04.mp4">Module-01_Lecture-04-Understanding Adjustment                                  </option>
<option value="109104081/mod02lec01.mp4">Module-02_Lecture-01-Dimensions of Adjustment                                  </option>
<option value="109104081/mod02lec02.mp4">Module-02_Lecture-02-Dimensions of Adjustment                                  </option>
<option value="109104081/mod02lec03.mp4">Module-02_Lecture-03-Dimensions of Adjustment                                  </option>
<option value="109104081/mod03lec01.mp4">Module-03_Lecture-01-Adjustment? Range of  Reactions                           </option>
<option value="109104081/mod04lec01.mp4">Module-04_Lecture-01-Human adjustment process?II                               </option>
<option value="109104081/mod04lec02.mp4">Module-04_Lecture-02-Human adjustment process?II                               </option>
<option value="109104081/mod04lec03.mp4">Module-04_Lecture-03-Human adjustment process?II                               </option>
<option value="109104081/mod04lec04.mp4">Module-04_Lecture-04-Human adjustment process?II                               </option>
<option value="109104081/mod04lec05.mp4">Module-04_Lecture-05-Human adjustment process?II                               </option>
<option value="109104081/mod04lec06.mp4">Module-04_Lecture-06-Human adjustment process?II                               </option>
<option value="109104081/mod04lec07.mp4">Module-04_Lecture-07-Human adjustment process?II                               </option>
<option value="109104081/mod04lec08.mp4">Module-04_Lecture-08-Human adjustment process?II                               </option>
<option value="109104081/mod04lec09.mp4">Module-04_Lecture-09-Human adjustment process?II                               </option>
<option value="109104081/mod05lec01.mp4">Module-05_Lecture-01-Facets of human adjustment                                </option>
<option value="109104081/mod05lec02.mp4">Module-05_Lecture-02-Facets of human adjustment                                </option>
<option value="109104081/mod05lec03.mp4">Module-05_Lecture-03-Facets of human adjustment                                </option>
<option value="109104081/mod06lec01.mp4">Module-06_Lecture-01 Emotions & Adjustment                                     </option>
<option value="109104081/mod06lec02.mp4">Module-06_Lecture-02-Emotions & Adjustment                                     </option>
<option value="109104081/mod06lec03.mp4">Module-06_Lecture-03-Emotions & Adjustmen                                      </option>
<option value="109104081/mod06lec04.mp4">Module-06_Lecture-04-Emotions & Adjustment                                     </option>
<option value="109104081/mod07lec01.mp4">Module-07_Lecture-01-Facets of human adjustment: Stress, Resilience and Coping </option>
<option value="109104081/mod07lec02.mp4">Module-07_Lecture-02-Facets of human adjustment: Stress, Resilience and Coping </option>
<option value="109104081/mod07lec03.mp4">Module-07_Lecture-03-Facets of human adjustment: Stress, Resilience and Coping </option>
<option value="109104081/mod07lec04.mp4">Module-07_Lecture-04-Facets of human adjustment: Stress, Resilience and Coping </option>
<option value="109104081/mod07lec05.mp4">Module-07_Lecture-05-Facets of human adjustment: Stress, Resilience and Coping </option>
<option value="109104081/mod08lec01.mp4">Module-08_Lecture-01-Aggression                                                </option>
<option value="109104081/mod08lec02.mp4">Module-08_Lecture-02-Aggression                                                </option>
<option value="109104081/mod08lec03.mp4">Module-08_Lecture-03-Aggression                                                </option>
<option value="109104081/mod08lec04.mp4">Module-08_Lecture-04-Aggression                                                </option>
<option value="109104081/mod09lec01.mp4">Module-09_Lecture-01-Psychological disorders                                   </option>
<option value="109104081/mod09lec02.mp4">Module-09_Lecture-02-Psychological disorders                                   </option>
<option value="109104081/mod09lec03.mp4">Module-09_Lecture-03-Psychological disorders                                   </option>
<option value="109104081/mod09lec04.mp4">Module-09_Lecture-04-Psychological disorders                                   </option>
<option value="109104081/mod09lec05.mp4">Module-09_Lecture-05-Psychological disorders                                   </option>
<option value="109104081/mod10lec01.mp4">Module-10_Lecture-01-Summing-up                                                </option>

          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104082</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Selected Topics in Psychology </strong></td>
	<td><strong>Braj Bhushanm, Ajit Dalal,</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109103020/mod01lec01.mp4">Introduction                       </option>
<option value="109104082/mod01lec01.mp4">Lecture-01 Introduction Selected Topics in Psychology                                           </option>
<option value="109104082/mod01lec02.mp4">Lecture-02 Psychology: Emerging of a discipline                                                 </option>
<option value="109104082/mod01lec03.mp4">Lecture-03 Psychology: Emerging of a discipline                                                 </option>
<option value="109104082/mod01lec04.mp4">Lecture-04 Beginning, growth and decline of Western psychology in India                         </option>
<option value="109104082/mod01lec05.mp4">Lecture-05 The core and context of Indian psychology                                            </option>
<option value="109104082/mod01lec06.mp4">Lecture-06 The indigenization of psychology in India                                            </option>
<option value="109104082/mod01lec07.mp4">Lecture-07 Weaving culture into psychology                                                      </option>
<option value="109104082/mod01lec08.mp4">Lecture-08 Culture and Self: Implications for Social Behaviour                                  </option>
<option value="109104082/mod01lec09.mp4">Lecture-09 Cultural and organizational behaviour                                                </option>
<option value="109104082/mod01lec10.mp4">Lecture-10 How do similar attitudes determine attraction?                                       </option>
<option value="109104082/mod01lec11.mp4">Lecture-11 Why do similar attitudes determine attraction?                                       </option>
<option value="109104082/mod01lec12.mp4">Lecture-12 A beautiful mind? Perspective on brain , mind and it's challenges                    </option>
<option value="109104082/mod01lec13.mp4">Lecture-13 Emotion and well?being                                                               </option>
<option value="109104082/mod01lec14.mp4">Lecture-14 Mental health and illness                                                            </option>
<option value="109104082/mod01lec15.mp4">Lecture-15 Mental health and illness part2                                                      </option>
<option value="109104082/mod01lec16.mp4">Lecture-16 Folk Healing Traditions in India                                                     </option>
<option value="109104082/mod01lec17.mp4">Lecture-17 To sleep or not                                                                      </option>
<option value="109104082/mod01lec18.mp4">Lecture-18 Issues and challenges in psychological assessment                                    </option>
<option value="109104082/mod01lec19.mp4">Lecture-19 Nontraditional research in behavioural sciences                                      </option>
<option value="109104082/mod01lec20.mp4">Lecture-20 What a surprise: My results are nonsignificant                                       </option>
<option value="109104082/mod01lec21.mp4">Lecture-21 Neuropsychology and cognitive neuroscience research                                  </option>
<option value="109104082/mod01lec22.mp4">Lecture-22 Functional MRI in psychology                                                         </option>
<option value="109104082/mod01lec23.mp4">Lecture-23 Functional MRI in psychology Part2                                                   </option>
<option value="109104082/mod01lec24.mp4">Lecture-24 Side bias in human behaviour                                                         </option>
<option value="109104082/mod01lec25.mp4">Lecture-25 Brain microstructural correlates of cognition in Cerebral Palsy                      </option>
<option value="109104082/mod01lec26.mp4">Lecture-26 Brain microstructural correlates of cognition in vitamin B12 deficiency              </option>
<option value="109104082/mod01lec27.mp4">Lecture-27 The neuroscience of addictive behaviour                                              </option>
<option value="109104082/mod01lec28.mp4">Lecture-28 Who is at risk and why? The neurogenetics of vulnerability to addiction              </option>
<option value="109104082/mod01lec29.mp4">Lecture-29 Who is at risk and why? The neurogenetics of vulnerability to addiction Part2        </option>
<option value="109104082/mod01lec30.mp4">Lecture-30 The gambler's lament: Behavioural addictions? gambling, internet and porn addictions </option>
<option value="109104082/mod01lec31.mp4">Lecture-31 Art and the brain                                                                    </option>
<option value="109104082/mod01lec32.mp4">Lecture-32 Art and the brain Part2                                                              </option>
<option value="109104082/mod01lec33.mp4">Lecture-33 Technological advances in other areas and their impact on psychology                 </option>
<option value="109104082/mod01lec34.mp4">Lecture-34 Positioning the state of psychology in India in the global scenario                  </option>
<option value="109104082/mod01lec35.mp4">Lecture-35 Introduction Selected Topics in Psychology                                           </option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106051</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Aspects of Western Philosophy</strong></td>
	<td><strong>Dr. Sreekumar Nellickappilly </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109106051/Module 1/Chapter 1.pdf">Greek Philosophy: An Introduction</option>
      
      <option  value="109106051/Module 1/Chapter 2.pdf">Sophists and Socrates: The Philosophy of Man, Relativism and the Idea of Good</option>
      
      <option  value="109106051/Module 1/Chapter 3.pdf">Plato�s Idealism</option>
      
      <option  value="109106051/Module 1/Chapter 4.pdf">Plato�s Theory of Knowledge</option>
      
      <option  value="109106051/Module 1/Chapter 5.pdf">Aristotle�s Criticism of Platonic Idealism and the Concepts of Form and Matter </option>
      
      <option  value="109106051/Module 1/Chapter 6.pdf">Aristotle�s Theory of Causation and the Ideas of Potentiality and Actuality</option>
      
      <option  value="109106051/Module 1/Chapter 7.pdf">Medieval Philosophy</option>

      
      <option  value="109106051/Module 2/Chapter 8.pdf">Modern Philosophy</option>
      
      <option  value="109106051/Module 2/Chapter 9.pdf">Descartes: Method of Philosophy and Theory of Knowledge</option>
      
      <option  value="109106051/Module 2/Chapter 10.pdf">Rene  Descartes: The Mind-body Dualism</option>
      
      <option  value="109106051/Module 2/Chapter 11.pdf">Spiniza</option>
      
      <option  value="109106051/Module 2/Chapter 12.pdf">Spinoza�s Pantheism: God and Nature Relationship</option>
      
      <option  value="109106051/Module 2/Chapter 13.pdf">The Philosophy of Gottfried Wilhelm von Leibniz</option>
      
      <option  value="109106051/Module 2/Chapter 14.pdf">Fundamentals of John Locke�s Empiricism</option>
      
      <option  value="109106051/Module 2/Chapter 15.pdf">John Locke: Theory of knowledge</option>
      
      <option  value="109106051/Module 2/Chapter 16.pdf">George Berkeley�s Immaterialism and Subjective Idealism</option>
      
      <option  value="109106051/Module 2/Chapter 17.pdf">Refutation of Abstract Ideas and Esse est Percipi </option>
      
      <option  value="109106051/Module 2/Chapter 18.pdf">David Hume: Theory of Knowledge</option>
      
      <option  value="109106051/Module 2/Chapter 19.pdf">David Hume: From Empiricism to Skepticism</option>
      
      <option  value="109106051/Module 3/Chapter 20.pdf">The Critical Philosophy Of Immanuel Kant</option>
      
      <option  value="109106051/Module 3/Chapter 21.pdf">Kant: Transcendental Aesthetic and Transcendental Analytic</option>
      
      <option  value="109106051/Module 3/Chapter 22.pdf">Immanuel Kant: The Ideas of Reason and the Rejection of Speculative Metaphysics</option>
      
      <option  value="109106051/Module 3/Chapter 23.pdf">Immanuel Kant�s Ethical Theory</option>
      
      <option  value="109106051/Module 3/Chapter 24.pdf">Georg Wilhelm Friedrich Hegel: The Concepts of Being, Non-being and Becoming</option>
      
      <option  value="109106051/Module 3/Chapter 25.pdf">Hegel�s Absolute Idealism and the Phenomenology of Spirit</option>
      
      <option  value="109106051/Module 3/Chapter 26.pdf">Karl Marx: Historical Materialism</option>
      
      <option  value="109106051/Module 3/Chapter 27.pdf">Nietzsche: Critique of Western Culture</option>
      
      <option  value="109106051/Module 4/Chapter 28.pdf">Linguistic Turn in British philosophy and Russell�s Logical Atomism</option>
      
      <option  value="109106051/Module 4/Chapter 29.pdf">Wittgenstein�s Early Philosophy</option>
      
      <option  value="109106051/Module 4/Chapter 30.pdf">Wittgenstein: Language-Games and Forms of Life</option>
      
      <option  value="109106051/Module 4/Chapter 31.pdf">Logical Positivism and the Scientific Conception of Philosophy</option>
      
      <option  value="109106051/Module 5/Chapter 32.pdf">Edmund Husserl�s Phenomenology:  The Principle of Intentionality and the Methods of Reduction</option>
      
      <option  value="109106051/Module 5/Chapter 33.pdf">Phenomenological Reduction and Transcendental Subjectivity</option>
      
      <option  value="109106051/Module 5/Chapter 34.pdf">Martin Heidegger: The Question of Being</option>
      
      <option  value="109106051/Module 5/Chapter 35.pdf">Martin Heidegger: The Ontology of Dasein and the Concept of Truth</option>
      
      <option  value="109106051/Module 5/Chapter 36.pdf">Existentialism</option>
      
      <option  value="109106051/Module 5/Chapter 37.pdf">Sartre�s Conception of Human Existence</option>
      
      <option  value="109106051/Module 5/Chapter 38.pdf">Jean Paul Sartre�s Concept of Human Existence </option>
      
      <option  value="109106051/Module 6/Chapter 39.pdf">Postmodernism</option>
      
      <option  value="109106051/Module 6/Chapter 40.pdf">Deconstruction, Feminism and Discourse Theory</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106053</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Contemporary Literature</strong></td>
	<td><strong>Dr. Aysha Iqbal Viswamohan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109106053/mod01lec01.mp4">Introduction to Drama</option>
      
      <option  value="109106053/mod01lec02.mp4">Harold Pinter</option>
      
      <option  value="109106053/mod01lec03.mp4">The Dumb Waiter</option>
      
      <option  value="109106053/mod01lec04.mp4">The Dumb Waiter cont</option>
      
      <option  value="109106053/mod01lec05.mp4">Six Degrees of Separation</option>
      
      <option  value="109106053/mod01lec06.mp4">Six Degrees of Separation</option>
      
      <option  value="109106053/mod01lec07.mp4">Six Degrees of Separation</option>
      
      <option  value="109106053/mod01lec08.mp4">Six Degrees of Separation</option>
      
      <option  value="109106053/mod01lec09.mp4">Six Degrees of Separation</option>
      
      <option  value="109106053/mod01lec10.mp4">Tom Stoppard - Dogg's Hamlet, Cahoot's Macbeth</option>
      
      <option  value="109106053/mod01lec11.mp4">Tom Stoppard - Dogg's Hamlet, Cahoot's Macbeth</option>
      
      <option  value="109106053/mod01lec12.mp4">Tom Stoppard - Dogg's Hamlet, Cahoot's Macbeth</option>
      
      <option  value="109106053/mod01lec13.mp4">Tom Stoppard - Dogg's Hamlet, Cahoot's Macbeth</option>
      
      <option  value="109106053/mod01lec14.mp4">Tom Stoppard - Dogg's Hamlet, Cahoot's Macbeth</option>
      
      <option  value="109106053/mod01lec15.mp4">Tom Stoppard - Dogg's Hamlet, Cahoot's Macbeth</option>
      
      <option  value="109106053/mod01lec16.mp4">Arthur Miller Clara</option>
      
      <option  value="109106053/mod01lec17.mp4">Arthur Miller Clara</option>
      
      <option  value="109106053/mod01lec18.mp4">Arthur Miller Clara</option>
      
      <option  value="109106053/mod01lec19.mp4">Albert Camus The Fall</option>
      
      <option  value="109106053/mod01lec20.mp4">Albert Camus The Fall</option>
      
      <option  value="109106053/mod01lec21.mp4">Albert Camus The Fall</option>
      
      <option  value="109106053/mod01lec22.mp4">Girish Karnad - Nagamandala</option>
      
      <option  value="109106053/mod01lec23.mp4">Girish Karnad - Nagamandala</option>
      
      <option  value="109106053/mod01lec24.mp4">Girish Karnad - Nagamandala</option>
      
      <option  value="109106053/mod01lec25.mp4">Short Story -Salman Rushdie's</option>
      
      <option  value="109106053/mod01lec26.mp4">Short Story2 -Hanif Kureishi's</option>
      
      <option  value="109106053/mod01lec27.mp4">Modernism Post</option>
      
      <option  value="109106053/mod01lec28.mp4">Kazuo Ishiguro -Remains of the Day</option>
      
      <option  value="109106053/mod01lec29.mp4">Kazuo Ishiguro -Remains of the Day</option>
      
      <option  value="109106053/mod01lec30.mp4">Kazuo Ishiguro -Remains of the Day</option>
      
      <option  value="109106053/mod01lec31.mp4">Kazuo Ishiguro -Remains of the Day</option>
      
      <option  value="109106053/mod01lec32.mp4">Michael Ondaatje -The English Patient</option>
      
      <option  value="109106053/mod01lec33.mp4">Michael Ondaatje -The English Patient</option>
      
      <option  value="109106053/mod01lec34.mp4">Michael Ondaatje -The English Patient</option>
      
      <option  value="109106053/mod01lec35.mp4">Asian-American Writing</option>
      
      <option  value="109106053/mod01lec36.mp4">Amy Tan's -The Joy Luck Club</option>
      
      <option  value="109106053/mod01lec37.mp4">Amy Tan's -The Joy Luck Club</option>
      
      <option  value="109106053/mod01lec38.mp4">Amy Tan's -The Joy Luck Club</option>
      
      <option  value="109106053/mod01lec39.mp4">Poetry</option>
      
      <option  value="109106053/mod01lec40.mp4">Poetry</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106054</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Contemporary Literature</strong></td>
	<td><strong>Dr. Aysha Iqbal Viswamohan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109106054/Chapter 1 &2 Introducion to drama.pdf">Introduction to Drama</option>
      
      <option  value="109106054/Chapter 3 Twentieth century Drama.pdf">Beginnings of the Twentieth Century Drama</option>
      
      <option  value="109106054/Chapter 4 2oth Century Drama.pdf">Twentieth Century Drama</option>
      
      <option  value="109106054/Chapter 5 theatre of the absurd.pdf">Theatre of the Absurd</option>
      
      <option  value="109106054/Chapter 6 METATHEATRE.pdf">Metatheatre and Metafiction</option>
      
      <option  value="109106054/Chapter 7 Asian Ame Theatre.pdf">Asian American Theatre</option>
      
      <option  value="109106054/Chapter 8 Experimental theatre-I.pdf">Experimental Theatre</option>
      
      <option  value="109106054/Chapter 9 The 90s and Experimental Theatre.pdf">The 90s and Experimental Theatre</option>
      
      <option  value="109106054/Chapter 10 modernist lit.pdf">Modernism and Literature</option>
      
      <option  value="109106054/Chapter 11 Modernism and Theatre.pdf">Modernism and Theatre</option>
      
      <option  value="109106054/Chapter 12 Modernism and Cinema.pdf">Modernism and Cinema</option>
      
      <option  value="109106054/Chapter 13 Defining Postmodernism.pdf">Postmodernism</option>
      
      <option  value="109106054/Chapter 14 Postmodernism & lit.pdf">Postmodernism and Literature</option>
      
      <option  value="109106054/Chapter 15 The Postmodern Film.pdf">The Postmodern Film</option>
      
      <option  value="109106054/Chapter 16 The Beats and Counterculture.pdf">The Counterculture Movement</option>
      
      <option  value="109106054/Chapter 17 Literary Devices and Ideas.pdf">Literary Devices, Ideas and Terms: Key Concepts-I</option>
      
      <option  value="109106054/Chapter 18 Literary Device -II.pdf">Literary Devices, Ideas and Terms: Key Concepts-II</option>
      
      <option  value="109106054/chapter 19 Narrative -1.pdf">Understanding Narrative-I</option>
      
      <option  value="109106054/Chapter 20 Understanding Narrative 2.pdf">Understanding Narrative-II</option>
      
      <option  value="109106054/Chapter 21 Marxist Theory & Criticism I.pdf">Marxist Theory and Criticism-I</option>
      
      <option  value="109106054/Chapter 22 Marxist Theory and Criticism II.pdf">Marxist Theory and Criticism-II</option>
      
      <option  value="109106054/Chapter 23 PSYCHOANALYTIC THEORY AND CRITICISM.pdf">Psychoanalytic Theory</option>
      
      <option  value="109106054/Chapter 24 AMERICAN THEORY AND CRITICISM-I.pdf">American Theory and Criticism-I</option>
      
      <option  value="109106054/Chapter 25 American Theory & Criticism-II.pdf">American Theory and Criticism- II</option>
      
      <option  value="109106054/Chapter 26 Film theory-I.pdf">Understanding Film Theory and Criticism-I</option>
      
      <option  value="109106054/Chapter 27 Film Theory -II.pdf">Understanding Film Theory-II</option>
      
      <option  value="109106054/Chapter 28 FILM THEORY III.pdf">Understanding Film Theory-III</option>
      
      <option  value="109106054/Chapter 29 Feminist Writings.pdf">Feminist Writings</option>
      
      <option  value="109106054/Chapter 30 Feminist Theories.pdf">Feminist Theory and Criticism</option>
      
      <option  value="109106054/Chapter 31 The English Patient  Michael Ondaatje.pdf">Michael Ondaatje's <i>The English Patient</i></option>
      
      <option  value="109106054/Chapter 32 English Patient.pdf"><i>The English Patient</i> by Michael Ondaatje </option>
      
      <option  value="109106054/Chapter 33 Cracking India.pdf">Bapsi Sidhwa's <i>Cracking India</i></option>
      
      <option  value="109106054/Chapter 34 Contemporary Asian American Writing.pdf">Asian American Writings in English: The Early Years</option>
      
      <option  value="109106054/Chapter 35 Asian American Writings.pdf">Asian-American Writings: An overview of literary works</option>
      
      <option  value="109106054/Chapter 36 Harold Pinter.pdf">Harold Pinter: The Dramatist and His World</option>
      
      <option  value="109106054/Chapter 37 Arthur Miller.pdf">Arthur Miller: The Playwright and his Moral Imperative</option>
      
      <option  value="109106054/Chapter 38 Short Story.pdf">Short Story</option>
      
      <option  value="109106054/Chapter 39 Science Fiction.pdf">Science Fiction</option>
      
      <option  value="109106054/Chapter 40 Pulp Fiction .pdf">Pulp Fiction</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106058</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>History of Economic Theory</strong></td>
	<td><strong>Prof. S.S.SivaKumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109106058/mod01lec01.mp4">The Socio-Economic Role of Scarcity and Uncertainty</option>
      
      <option  value="109106058/mod01lec02.mp4">The Process of Construction of Knowledge</option>
      
      <option  value="109106058/mod01lec03.mp4">The Roles of Faith and Experience</option>
      
      <option  value="109106058/mod01lec04.mp4">From Orphism to the Milesians in ancient Greece</option>
      
      <option  value="109106058/mod01lec05.mp4">Pythagoras and Heraclitus</option>
      
      <option  value="109106058/mod01lec06.mp4">From Parmenides to the atomists</option>
      
      <option  value="109106058/mod01lec07.mp4">From the ancient Greece to the emergence of Feudalism</option>
      
      <option  value="109106058/mod01lec08.mp4">Feudalism and the growth of the Church</option>
      
      <option  value="109106058/mod01lec09.mp4">The age of Faith: Europe until the crusades</option>
      
      <option  value="109106058/mod01lec10.mp4">The beginnings of modernity</option>
      
      <option  value="109106058/mod01lec11.mp4">Scholasticism and St.Thomas</option>
      
      <option  value="109106058/mod01lec12.mp4">Transformation of Europe towards modernity</option>
      
      <option  value="109106058/mod01lec13.mp4">Birth of political economy: mercantilism</option>
      
      <option  value="109106058/mod01lec14.mp4">The debate over mercantilism: Hume and Cantillon</option>
      
      <option  value="109106058/mod01lec15.mp4">A postscript to mercantilism: Hume and James Stewart</option>
      
      <option  value="109106058/mod01lec16.mp4">�Natural Order� and the market: Quesney and Galiani</option>
      
      <option  value="109106058/mod01lec17.mp4">Smith: the Invisible Hand</option>
      
      <option  value="109106058/mod01lec18.mp4">Smith: Growth theory, long run equilibrium and Institutions</option>
      
      <option  value="109106058/mod01lec19.mp4">Ricardo-Malthus debate</option>
      
      <option  value="109106058/mod01lec20.mp4">Ricardian economics and more</option>
      
      <option  value="109106058/mod01lec21.mp4">Equilibrium of the market: from Say to Walras</option>
      
      <option  value="109106058/mod01lec22.mp4">More on Equilibrium: Cournot, Dupuit, Gossen, von Thunen</option>
      
      <option  value="109106058/mod01lec23.mp4">Socialists and Marx</option>
      
      <option  value="109106058/mod01lec24.mp4">The economics of Marx</option>
      
      <option  value="109106058/mod01lec25.mp4">Marx as an ideologue of revolution</option>
      
      <option  value="109106058/mod01lec26.mp4">Arrival of modern universals in Economics: Neo classical school</option>
      
      <option  value="109106058/mod01lec27.mp4">Economic Theory at the time arrival of Keynes</option>
      
      <option  value="109106058/mod01lec28.mp4">The centrality of the idea of efficiency in the study of market</option>
      
      <option  value="109106058/mod01lec29.mp4">Keynesian Revolution: Macroeconomics</option>
      
      <option  value="109106058/mod01lec30.mp4">Keynesian economics</option>
      
      <option  value="109106058/mod01lec31.mp4">Economics of Institutions</option>
      
      <option  value="109106058/mod01lec32.mp4">Transaction cost and Economic Anthropology approaches </option>
      
      <option  value="109106058/mod01lec33.mp4">Evolutionary Economics: the idea of change as evolution</option>
      
      <option  value="109106058/mod01lec34.mp4">From Schumpeter to neo Schumpetarian evolutionism</option>
      
      <option  value="109106058/mod01lec35.mp4">The social construction of knowledge: Case of Economics</option>
      
      <option  value="109106058/mod01lec36.mp4">The social construction of knowledge: Adaptation and Revolution</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106059</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Indian Philosophy</strong></td>
	<td><strong>Dr. Satya Sundar Sethy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109106059/mod01lec01.mp4">Introduction to Indian Philosophy</option>
      
      <option  value="109106059/mod01lec02.mp4">A Brief Discussion on the Vedas & the Upanishads</option>
      
      <option  value="109106059/mod02lec03.mp4">The C&#257;rv&#257;ka School - I</option>
      
      <option  value="109106059/mod02lec04.mp4">The C&#257;rv&#257;ka School - II</option>
      
      <option  value="109106059/mod03lec05.mp4">The S&#257;&#7749;khya School - I</option>
      
      <option  value="109106059/mod03lec06.mp4">The S&#257;&#7749;khya School - II</option>
      
      <option  value="109106059/mod03lec07.mp4">The S&#257;&#7749;khya School - III</option>
      
      <option  value="109106059/mod03lec08.mp4">The S&#257;&#7749;khya School - IV</option>
      
      <option  value="109106059/mod03lec09.mp4">The S&#257;&#7749;khya School - V</option>
      
      <option  value="109106059/mod03lec10.mp4">The S&#257;&#7749;khya School - VI</option>
      
      <option  value="109106059/mod04lec11.mp4">The Yoga School - I</option>
      
      <option  value="109106059/mod04lec12.mp4">The Yoga School - II</option>
      
      <option  value="109106059/mod04lec13.mp4">The Yoga School - III</option>
      
      <option  value="109106059/mod04lec14.mp4">The Yoga School - IV</option>
      
      <option  value="109106059/mod05lec15.mp4">The Ny&#257;ya School - I</option>
      
      <option  value="109106059/mod05lec16.mp4">The Ny&#257;ya School - II</option>
      
      <option  value="109106059/mod05lec17.mp4">The Ny&#257;ya School - III</option>
      
      <option  value="109106059/mod05lec18.mp4">The Ny&#257;ya School - IV</option>
      
      <option  value="109106059/mod05lec19.mp4">The Ny&#257;ya School - V</option>
      
      <option  value="109106059/mod05lec20.mp4">The Ny&#257;ya School - VI</option>
      
      <option  value="109106059/mod05lec21.mp4">The Ny&#257;ya School - VII</option>
      
      <option  value="109106059/mod05lec22.mp4">The Ny&#257;ya School - VIII</option>
      
      <option  value="109106059/mod05lec23.mp4">The Ny&#257;ya School - IX</option>
      
      <option  value="109106059/mod06lec24.mp4">Buddhism - I</option>
      
      <option  value="109106059/mod06lec25.mp4">Buddhism - II</option>
      
      <option  value="109106059/mod06lec26.mp4">Buddhism - III</option>
      
      <option  value="109106059/mod06lec27.mp4">Buddhism - IV</option>
      
      <option  value="109106059/mod06lec28.mp4">Buddhism - V</option>
      
      <option  value="109106059/mod07lec29.mp4">Jainism - I</option>
      
      <option  value="109106059/mod07lec30.mp4">Jainism - II</option>
      
      <option  value="109106059/mod07lec31.mp4">Jainism - III</option>
      
      <option  value="109106059/mod08lec32.mp4">The Vai&#347;e&#7779;ika School - I</option>
      
      <option  value="109106059/mod08lec33.mp4">The Vai&#347;e&#7779;ika School - II</option>
      
      <option  value="109106059/mod08lec34.mp4">The Vai&#347;e&#7779;ika School - III</option>
      
      <option  value="109106059/mod08lec35.mp4">The Vai&#347;e&#7779;ika School - IV</option>
      
      <option  value="109106059/mod08lec36.mp4">The Vai&#347;e&#7779;ika School - V</option>
      
      <option  value="109106059/mod08lec37.mp4">The Vai&#347;e&#7779;ika School - VI</option>
      
      <option  value="109106059/mod09lec38.mp4">The Mim&#257;ns&#257; School - I</option>
      
      <option  value="109106059/mod09lec39.mp4">The Mim&#257;ns&#257; School - II</option>
      
      <option  value="109106059/mod09lec40.mp4">The Mim&#257;ns&#257; School - III</option>
      
      <option  value="109106059/mod09lec41.mp4">The Mim&#257;ns&#257; School - IV</option>
      
      <option  value="109106059/mod09lec42.mp4">The Mim&#257;ns&#257; School - V</option>
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106063</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Philosophy of Language</strong></td>
	<td><strong>Dr. Satya Sundar Sethy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109106063/module1/index.html">Presentation-01</option>
      
      <option  value="109106063/module1/Presentation2/1.html">Presentation-02</option>
      
      <option  value="109106063/module2/Presentation3/1.html">Presentation-03</option>
      
      <option  value="109106063/module3/Presentation4/1.html">Presentation-04</option>
      
      <option  value="109106063/module3/Presentation5/1.html">Presentation-05</option>
      
      <option  value="109106063/module3/Presentation6/1.html">Presentation-06</option>
      
      <option  value="109106063/module3/Presentation7/1.html">Presentation-07</option>
      
      <option  value="109106063/module4/Presentation8/1.html">Presentation-08</option>
      
      <option  value="109106063/module4/Presentation9/1.html">Presentation-09</option>
      
      <option  value="109106063/module4/Presentation10/1.html">Presentation-10</option>
      
      <option  value="109106063/module5/Presentation11/1.html">Presentation-11</option>
      
      <option  value="109106063/module5/Presentation12/1.html">Presentation-12</option>
      
      <option  value="109106063/module5/Presentation13/1.html">Presentation-13</option>
      
      <option  value="109106063/module5/Presentation14/1.html">Presentation-14</option>
      
      <option  value="109106063/module6/Presentation15/1.html">Presentation-15</option>
      
      <option  value="109106063/module6/Presentation16/1.html">Presentation-16</option>
      
      <option  value="109106063/module7/Presentation17/1.html">Presentation-17</option>
      
      <option  value="109106063/module7/Presentation18/1.html">Presentation-18</option>
      
      <option  value="109106063/module7/Presentation19/1.html">Presentation-19</option>
      
      <option  value="109106063/module8/Presentation20/1.html">Presentation-20</option>
      
      <option  value="109106063/module8/Presentation21/1.html">Presentation-21</option>
      
      <option  value="109106063/module8/Presentation22/1.html">Presentation-22</option>
      
      <option  value="109106063/module8/Presentation23/1.html">Presentation-23</option>
      
      <option  value="109106063/module9/Presentation-24_to_27/1.html">Presentation- 24 to 27</option>
      
      <option  value="109106063/module10/Presentation28/1.html">Presentation-28</option>
      
      <option  value="109106063/module10/Presentation29/1.html">Presentation-29</option>
      
      <option  value="109106063/module10/Presentation30/1.html">Presentation-30</option>
      
      <option  value="109106063/module10/Presentation31/1.html">Presentation-31</option>
      
      <option  value="109106063/module11/Presentation32/1.html">Presentation-32</option>
      
      <option  value="109106063/module11/Presentation33/1.html">Presentation-33</option>
      
      <option  value="109106063/module11/Presentation34/1.html">Presentation-34</option>
      
      <option  value="109106063/module11/Presentation35/1.html">Presentation-35</option>
      
      <option  value="109106063/module11/Presentation36/1.html">Presentation-36</option>
      
      <option  value="109106063/module12/Presentation-37_to_38/1.html">Presentation- 37 to 38</option>
      
      <option  value="109106063/module12/Presentation-39_to_41/1.html">Presentation- 39 to 41</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106067</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Better Spoken English  </strong></td>
	<td><strong>Prof. Shreesh Chaudhary</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109106067/mod01lec01.mp4">Introduction                        </option>
<option value="109106067/mod01lec02.mp4">Student Presentations I             </option>
<option value="109106067/mod01lec03.mp4">Feedback on Presentations I         </option>
<option value="109106067/mod01lec04.mp4">Stage Manners                       </option>
<option value="109106067/mod01lec05.mp4">Tempo of Speech                     </option>
<option value="109106067/mod01lec06.mp4">Some Reasons for Mishearing         </option>
<option value="109106067/mod01lec07.mp4">Topics for Presentations II         </option>
<option value="109106067/mod01lec08.mp4">Message                             </option>
<option value="109106067/mod01lec09.mp4">Tables, Charts, Graphs              </option>
<option value="109106067/mod01lec10.mp4">Power Point Slides                  </option>
<option value="109106067/mod01lec11.mp4">Criteria for Evaluation             </option>
<option value="109106067/mod01lec12.mp4">Student Presentations II            </option>
<option value="109106067/mod01lec13.mp4">Feedback on Presentation II         </option>
<option value="109106067/mod01lec14.mp4">Topics for Presentation III         </option>
<option value="109106067/mod01lec15.mp4">On �Saying �Please!� �              </option>
<option value="109106067/mod01lec16.mp4">English Rhythm I                    </option>
<option value="109106067/mod01lec17.mp4">English Rhythm II                   </option>
<option value="109106067/mod01lec18.mp4">Phrasal Pause in English I          </option>
<option value="109106067/mod01lec19.mp4">Phrasal Pause in English II         </option>
<option value="109106067/mod01lec20.mp4">Units of Time, Weight, Distance     </option>
<option value="109106067/mod01lec21.mp4">Stress in English I                 </option>
<option value="109106067/mod01lec22.mp4">Stress in English II                </option>
<option value="109106067/mod01lec23.mp4">Stress in English III               </option>
<option value="109106067/mod01lec24.mp4">Stress in English IV                </option>
<option value="109106067/mod01lec25.mp4">Stress in English V                 </option>
<option value="109106067/mod01lec26.mp4">Stress in English VI                </option>
<option value="109106067/mod01lec27.mp4">Student Presentations  III          </option>
<option value="109106067/mod01lec28.mp4">Student Presentations III           </option>
<option value="109106067/mod01lec29.mp4">Student Presentations III Continued </option>
<option value="109106067/mod01lec30.mp4">Feedback on Presentations III       </option>
<option value="109106067/mod01lec31.mp4">Some Non-standard Sounds            </option>
<option value="109106067/mod01lec32.mp4">Some �Difficult� Sounds in English  </option>
<option value="109106067/mod01lec33.mp4">Some �Vowel� Sounds in English      </option>
<option value="109106067/mod01lec34.mp4">Some �Consonants� in English        </option>
<option value="109106067/mod01lec35.mp4">Student Presentations IV            </option>
<option value="109106067/mod01lec36.mp4">Student Presentation IV             </option>
<option value="109106067/mod01lec37.mp4">Student Presentation IV Continued   </option>
<option value="109106067/mod01lec38.mp4">Final Tips                          </option>

          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106079</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Introduction to Film Studies</strong></td>
	<td><strong>Dr. Aysha Iqbal Viswamohan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="109106079/mod01lec01.mp4">Course Overview</option>
      
      <option  value="109106079/mod01lec02.mp4">Cinema & Semiotics</option>
      
      <option  value="109106079/mod01lec03.mp4">Cinema & Semiotics(contd)</option>
      
      <option  value="109106079/mod01lec04.mp4">Plot in Cinema</option>
      
      <option  value="109106079/mod01lec05.mp4">Plot in Cinema (contd�)</option>
      
      <option  value="109106079/mod01lec06.mp4">Character as a plot element</option>
      
      <option  value="109106079/mod01lec07.mp4">Editing in Cinema</option>
      
      <option  value="109106079/mod01lec08.mp4">Realism in Cinema</option>
      
      <option  value="109106079/mod01lec09.mp4">Colour : Theory & Practice</option>
      
      <option  value="109106079/mod01lec10.mp4">Intertextuality</option>
      
      <option  value="109106079/mod01lec11.mp4">Intertextuality (contd.)</option>
      
      <option  value="109106079/mod01lec12.mp4">Intertextuality (contd�)</option>
      
      <option  value="109106079/mod01lec13.mp4">Cinema & Modernism</option>
      
      <option  value="109106079/mod01lec14.mp4">Cinema and Modernism (contd�)</option>
      
      <option  value="109106079/mod01lec15.mp4">The French Masters</option>
      
      <option  value="109106079/mod01lec16.mp4">The French Masters  (contd..)</option>
      
      <option  value="109106079/mod01lec17.mp4">The French Masters (contd�)</option>
      
      <option  value="109106079/mod01lec18.mp4">Canonical Text</option>
      
      <option  value="109106079/mod01lec19.mp4">Canonical Text(contd..)</option>
      
      <option  value="109106079/mod01lec20.mp4">Canonical Text(contd...)</option>
      
      <option  value="109106079/mod01lec21.mp4">The Academy Awards</option>
      
      <option  value="109106079/mod01lec22.mp4">Classic Hollywood</option>
      
      <option  value="109106079/mod01lec23.mp4">Classic Hollywood(contd.)</option>
      
      <option  value="109106079/mod01lec24.mp4">Classic Hollywood (contd�)</option>
      
      <option  value="109106079/mod01lec25.mp4">Case study</option>
      
      <option  value="109106079/mod01lec26.mp4">Stars as Icons</option>
      
      <option  value="109106079/mod01lec27.mp4">Cinema and the Counterculture Movement</option>
      
      <option  value="109106079/mod01lec28.mp4">Italian cinema</option>
      
      <option  value="109106079/mod01lec29.mp4">Japanese Cinema</option>
      
      <option  value="109106079/mod01lec30.mp4">Auteur Theory in the USA</option>
      
      <option  value="109106079/mod01lec31.mp4">Auteur Theory in the USA (contd�)</option>
      
      <option  value="109106079/mod01lec32.mp4">New Hollywood</option>
      
      <option  value="109106079/mod01lec33.mp4">New Hollywood (contd�)</option>
      
      <option  value="109106079/mod01lec34.mp4">New Hollywood (contd....)</option>
      
      <option  value="109106079/mod01lec35.mp4">New Hollywood (contd�.)</option>
      
      <option  value="109106079/mod01lec36.mp4">Cinema and Genres</option>
      
      <option  value="109106079/mod01lec37.mp4">Cinema and Genres (contd�)</option>
      
      <option  value="109106079/mod01lec38.mp4">Postmodernism and Cinema</option>
      
      <option  value="109106079/mod01lec39.mp4">Postmodernism & Cinema (contd�)</option>
      
      <option  value="109106079/mod01lec40.mp4">The Western</option>
          </select></td>
	
	</tr>
	</form>
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106080</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Introduction to Modern Linguistics </strong></td>
	<td><strong>Prof. Shreesh Chaudhary, Prof. Rajesh Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109106067/mod01lec01.mp4">Introduction                        </option>
<option value="109106080/mod01lec01.mp4">Introduction                                               </option>
<option value="109106080/mod01lec02.mp4">Design  Features of Language                               </option>
<option value="109106080/mod01lec03.mp4">Design  Features of Language-2                             </option>
<option value="109106080/mod01lec04.mp4">Design  Features of Language-3                             </option>
<option value="109106080/mod01lec05.mp4">Design  Features of Language-4                             </option>
<option value="109106080/mod01lec06.mp4">Design  Features of Language-5                             </option>
<option value="109106080/mod01lec07.mp4">Production of Speech Sounds                                </option>
<option value="109106080/mod01lec08.mp4">Organs of Articulation                                     </option>
<option value="109106080/mod01lec09.mp4">Functions of Vocal Cords                                   </option>
<option value="109106080/mod01lec10.mp4">Production of Speech Sounds,  Cardinal Vowels              </option>
<option value="109106080/mod01lec11.mp4">English Vowels                                             </option>
<option value="109106080/mod01lec12.mp4">Diphthong                                                  </option>
<option value="109106080/mod01lec13.mp4">Production of Consonants                                   </option>
<option value="109106080/mod01lec14.mp4">Consonants                                                 </option>
<option value="109106080/mod01lec15.mp4">Consonants-2                                               </option>
<option value="109106080/mod01lec16.mp4">Review : Production of Speech Sounds                       </option>
<option value="109106080/mod01lec17.mp4">What is Phonology                                          </option>
<option value="109106080/mod01lec18.mp4">Phonemes & Allophones:                                     </option>
<option value="109106080/mod01lec19.mp4">Phonological Phenomena                                     </option>
<option value="109106080/mod01lec20.mp4">Syllable Template                                          </option>
<option value="109106080/mod01lec21.mp4">Syllable                                                   </option>
<option value="109106080/mod01lec22.mp4">Syllable � Based Generalization                            </option>
<option value="109106080/mod01lec23.mp4">Syllable � Based Generalization.                           </option>
<option value="109106080/mod01lec24.mp4">Morphology                                                 </option>
<option value="109106080/mod01lec25.mp4">Units of Word Formation                                    </option>
<option value="109106080/mod01lec26.mp4">Affixation                                                 </option>
<option value="109106080/mod01lec27.mp4">Syntax: An Introduction                                    </option>
<option value="109106080/mod01lec28.mp4">Syntax: An Introduction Cont�                              </option>
<option value="109106080/mod01lec29.mp4">Syntax: X-bar Theory                                       </option>
<option value="109106080/mod01lec30.mp4">Syntax: X-bar Theory Cont�                                 </option>
<option value="109106080/mod01lec31.mp4">Syntax: Phrase Structure  (Compliment and Adjuncts)        </option>
<option value="109106080/mod01lec32.mp4">Syntax: Argument Selection                                 </option>
<option value="109106080/mod01lec33.mp4">Syntax: Structure of an IP and  Thematic Relations         </option>
<option value="109106080/mod01lec34.mp4">Syntax: Structure of an IP and  Thematic Relations Cont..  </option>
<option value="109106080/mod01lec35.mp4">Syntax: Structure of an IP and  Thematic Relations Cont... </option>
<option value="109106080/mod01lec36.mp4">Syntax: Case Assignment                                    </option>
<option value="109106080/mod01lec37.mp4">Syntax: Exceptional Case Marking                           </option>
<option value="109106080/mod01lec38.mp4">Word Formation-3                                           </option>
<option value="109106080/mod01lec39.mp4">Discourse                                                  </option>
<option value="109106080/mod01lec40.mp4">Discourse..                                                </option>
<option value="109106080/mod01lec41.mp4">Concluding Remarks                                         </option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106083</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Principles and Parameters in Natural Language</strong></td>
	<td><strong>Prof. Rajesh Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109106067/mod01lec01.mp4">Introduction                        </option>
<option value="109106083/mod01lec01.mp4">IntroductionoftheCourse</option>
<option value="109106083/mod01lec02.mp4">Whatislinguistics?WhatisLanguage?</option>
<option value="109106083/mod01lec03.mp4">LanguageandArbitrariness,LanguageandDialect</option>
<option value="109106083/mod01lec04.mp4">EvsILanguage,Languageasarulegovernedsystem</option>
<option value="109106083/mod01lec05.mp4">LanguageFaculty,LanguageinHumanMind</option>
<option value="109106083/mod01lec06.mp4">Howdowelearnlanguage?</option>
<option value="109106083/mod01lec07.mp4">LanguageAcquisition</option>
<option value="109106083/mod01lec08.mp4">Innateness:SomeEssentialConcepts</option>
<option value="109106083/mod01lec09.mp4">StructureofLanguageattheLevelofSounds</option>
<option value="109106083/mod01lec10.mp4">Sounds(VocalApparatus)</option>
<option value="109106083/mod01lec11.mp4">PlacesandMannersofArticulation</option>
<option value="109106083/mod01lec12.mp4">WordFormation/PhonotacticRules</option>
<option value="109106083/mod01lec13.mp4">RulesofWordFormation(Singular-Plural)</option>
<option value="109106083/mod01lec14.mp4">Sentence:AnIntroduction</option>
<option value="109106083/mod01lec15.mp4">MakingofaSentence(Components)</option>
<option value="109106083/mod01lec16.mp4">GrammaticalityandAcceptability</option>
<option value="109106083/mod01lec17.mp4">SubjectandVerbinaSentence</option>
<option value="109106083/mod01lec18.mp4">Sentence:ObjectsandVerbs</option>
<option value="109106083/mod01lec19.mp4">PhraseStructure</option>
<option value="109106083/mod01lec20.mp4">X-BarTheory</option>
<option value="109106083/mod01lec21.mp4">SpecifierandComplement</option>
<option value="109106083/mod01lec22.mp4">ComplementsandAdjuncts</option>
<option value="109106083/mod01lec23.mp4">VPComponents</option>
<option value="109106083/mod01lec24.mp4">CategorialSelections,SelectionalRestrictionsonverbs</option>
<option value="109106083/mod01lec25.mp4">ThematicRelations</option>
<option value="109106083/mod01lec26.mp4">Case</option>
<option value="109106083/mod01lec27.mp4">MorphologicalandAbstractCase</option>
<option value="109106083/mod01lec28.mp4">StructuralCase</option>
<option value="109106083/mod01lec29.mp4">ExceptionalCaseMarking</option>
<option value="109106083/mod01lec30.mp4">Movement</option>
<option value="109106083/mod01lec31.mp4">MotivationsforMovement</option>
<option value="109106083/mod01lec32.mp4">QuestionsandMovement</option>
<option value="109106083/mod01lec33.mp4">GuestLecture:GenerativeGrammarbyProfessorB.N.Patnaik</option>
<option value="109106083/mod01lec34.mp4">PassivesandNPMovement</option>
<option value="109106083/mod01lec35.mp4">NPMovementandRaising</option>
<option value="109106083/mod01lec36.mp4">BindingTheoryandNPInterpretations</option>
<option value="109106083/mod01lec37.mp4">PrinciplesofBindingTheory</option>
<option value="109106083/mod01lec38.mp4">ConstraintsonMovements</option>
<option value="109106083/mod01lec39.mp4">StructureofLanguageandNegation</option>
<option value="109106083/mod01lec40.mp4">NegationandNegativePolarityItems</option>
<option value="109106083/mod01lec41.mp4">Structure,Language,CognitionandPragmatics</option>

          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106084</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong> NOC:Literary Criticism and Literary Theory </strong></td>
	<td><strong>Dr. Aysha Iqbal Viswamohan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109106067/mod01lec01.mp4">Introduction                        </option>
<option value="109106084/mod01lec01.mp4">Lecture 1 - Part A                                  </option>
<option value="109106084/mod01lec02.mp4">Lecture 1 - Part B                                  </option>
<option value="109106084/mod01lec03.mp4">Lecture 2                                           </option>
<option value="109106084/mod01lec04.mp4">Lecture 3                                           </option>
<option value="109106084/mod01lec05.mp4">Lecture 4                                           </option>
<option value="109106084/mod05lec06.mp4">Lecture Video 5 - Part C                            </option>
<option value="109106084/mod05lec07.mp4">Lecture Video 5 - Part A                            </option>
<option value="109106084/mod05lec08.mp4">Lecture Video 5 - Part B                            </option>
<option value="109106084/mod05lec09.mp4">Lecture Video 6 - Part A                            </option>
<option value="109106084/mod06lec10.mp4">Lecture 6 Part B                                    </option>
<option value="109106084/mod07lec11.mp4">Early Romanticism -Lecture 7 part a                 </option>
<option value="109106084/mod07lec12.mp4">Romanticism -Lecture 7 part c                       </option>
<option value="109106084/mod07lec13.mp4">Romanticism -Lecture 7 part d                       </option>
<option value="109106084/mod07lec14.mp4">Early Romanticism - Lecture 7 Part B                </option>
<option value="109106084/mod08lec15.mp4">Lecture 9 - Late 19th century                       </option>
<option value="109106084/mod09lec16.mp4">Lecture 10 A - Marxism                              </option>
<option value="109106084/mod09lec17.mp4">Lecture 10 B - Marxism                              </option>
<option value="109106084/mod10lec18.mp4">Lecture 11 A - Formalism                            </option>
<option value="109106084/mod10lec19.mp4">Lecture 11 B - New criticism                        </option>
<option value="109106084/mod11lec20.mp4">psychoanalysis and psychoanalytic criticism PART A  </option>
<option value="109106084/mod11lec21.mp4">psychoanalysis and psychoanalytic criticism PART B  </option>
<option value="109106084/mod11lec22.mp4">Psychoanalysis and Psychoanalytic criticism PART C  </option>
<option value="109106084/mod12lec23.mp4">Lecture 12 Part A structuralism                     </option>
<option value="109106084/mod12lec24.mp4">Lecture 12 Part B </option>
<option value="109106084/mod13lec25.mp4">structuralism</option>
<option value="109106084/mod14lec26.mp4">Archetypal Criticism</option>
<option value="109106084/mod14lec27.mp4">Structuralism - Part A</option>
<option value="109106084/mod15lec28.mp4">Structuralism - Part B</option>
<option value="109106084/mod16lec29.mp4">New Historicism and Cultural Materialism - Part A </option>
<option value="109106084/mod16lec30.mp4">New Historicism and Cultural Materialism - Part B</option>
<option value="109106084/mod17lec31.mp4">Reader Response criticism                           </option>
<option value="109106084/mod18lec32.mp4">Semiotics theory PART A                             </option>
<option value="109106084/mod18lec33.mp4">Semiotics theory PART B                             </option>
<option value="109106084/mod19lec34.mp4">Film studies part A                                 </option>
<option value="109106084/mod19lec35.mp4">Film studies Part B                                 </option>
<option value="109106084/mod20lec36.mp4">Postmodernism Part A                                </option>
<option value="109106084/mod20lec37.mp4">Postmodernism Part B                                </option>
<option value="109106084/mod21lec38.mp4">Ecocriticism Part A                                 </option>
<option value="109106084/mod21lec39.mp4">Ecocriticism Part B                                 </option>
<option value="109106084/mod22lec40.mp4">Post theory Part A                                  </option>
<option value="109106084/mod22lec41.mp4">Post theory Part B</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109106085</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong> NOC:Language and Mind</strong></td>
	<td><strong>DProf. Rajesh Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="109106067/mod01lec01.mp4">Introduction                        </option>
<option value="109106085/mod01lec01.mp4">What is language                                   </option>
<option value="109106085/mod01lec02.mp4">How do we learn language                           </option>
<option value="109106085/mod01lec03.mp4">Learning language                                  </option>
<option value="109106085/mod01lec04.mp4">Acquiring language                                 </option>
<option value="109106085/mod01lec05.mp4">Language evolution                                 </option>
<option value="109106085/mod01lec06.mp4">Language and language learning                     </option>
<option value="109106085/mod01lec07.mp4">Language in mind                                   </option>
<option value="109106085/mod02lec08.mp4">Grammar                                            </option>
<option value="109106085/mod02lec09.mp4">Language and human mind                            </option>
<option value="109106085/mod02lec10.mp4">Mechanism of sound production                      </option>
<option value="109106085/mod03lec11.mp4">Consonants                                         </option>
<option value="109106085/mod03lec12.mp4">Features of sounds                                 </option>
<option value="109106085/mod03lec13.mp4">Words                                              </option>
<option value="109106085/mod03lec14.mp4">Words-II                                           </option>
<option value="109106085/mod03lec15.mp4">Words III                                          </option>
<option value="109106085/mod04lec16.mp4">Words IV                                           </option>
<option value="109106085/mod04lec17.mp4">Words V                                            </option>
<option value="109106085/mod04lec18.mp4">Structure of a sentence                            </option>
<option value="109106085/mod04lec19.mp4">Nature of sentences and phrases                    </option>
<option value="109106085/mod04lec20.mp4">Syntax                                             </option>
<option value="109106085/mod05lec21.mp4">Structure of sentence (agreement)                  </option>
<option value="109106085/mod05lec22.mp4">Sentence (categories and phrase)                   </option>
<option value="109106085/mod05lec23.mp4">Sentence (phrase structure)                        </option>
<option value="109106085/mod05lec24.mp4">Sentence (X bar and IP)                            </option>
<option value="109106085/mod05lec25.mp4">Sentence (inflectional phrase)                     </option>
<option value="109106085/mod06lec26.mp4">Sentence (compliment and adjunct)                  </option>
<option value="109106085/mod06lec27.mp4">Sentence (restrictions)                            </option>
<option value="109106085/mod06lec28.mp4">Sentence (semantic relations)                      </option>
<option value="109106085/mod06lec29.mp4">Sentence (case)                                    </option>
<option value="109106085/mod06lec30.mp4">Sentence (movement)                                </option>
<option value="109106085/mod07lec31.mp4">CP and displacement                                </option>
<option value="109106085/mod07lec32.mp4">Sentence (CP in subject and object position)       </option>
<option value="109106085/mod07lec33.mp4">Sentence (passivization and NP movement)           </option>
<option value="109106085/mod07lec34.mp4">Sentence (referential </option>
<option value="109106085/mod07lec35.mp4">expressions</option>
<option value="109106085/mod08lec36.mp4">Sentence Dependencies: Compound verbs and negation </option>
<option value="109106085/mod08lec37.mp4">Language and cognition                             </option>
<option value="109106085/mod08lec38.mp4">Language, cognition and computers                  </option>
<option value="109106085/mod08lec39.mp4">Language and computers: resolving </option>
<option value="109106085/mod08lec40.mp4">Language and mind: a summary</option>

          </select>
    </td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104048</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Social Psychology</strong></td>
	<td><strong>Dr. Kumar Ravi Priya</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
     <option  value="109104048/module/lecture1.pdf">Lec1</option>
 <option  value="109104048/module/lecture2.pdf">Lec2</option>
 <option  value="109104048/module/lecture3.pdf">Lec3</option>
 <option  value="109104048/module/lecture4.pdf">Lec4</option>
 <option  value="109104048/module/lecture5.pdf">Lec5</option>
 <option  value="109104048/module/lecture6.pdf">Lec6</option>
 <option  value="109104048/module/lecture7.pdf">Lec7</option>
 <option  value="109104048/module/lecture8.pdf">Lec8</option>
 <option  value="109104048/module/lecture9.pdf">Lec9</option>
 <option  value="109104048/module/lecture10.pdf">Lec10</option>
 <option  value="109104048/module/lecture11.pdf">Lec11</option>
 <option  value="109104048/module/lecture12.pdf">Lec12</option>
 <option  value="109104048/module/lecture13.pdf">Lec13</option>
 <option  value="109104048/module/lecture14.pdf">Lec14</option>
 <option  value="109104048/module/lecture15.pdf">Lec15</option>
 <option  value="109104048/module/lecture16.pdf">Lec16</option>
 <option  value="109104048/module/lecture17.pdf">Lec17</option>
 <option  value="109104048/module/lecture18.pdf">Lec18</option>
 <option  value="109104048/module/lecture19.pdf">Lec19</option>
 <option  value="109104048/module/lecture20.pdf">Lec20</option>
 <option  value="109104048/module/lecture21.pdf">Lec21</option>
 <option  value="109104048/module/lecture22.pdf">Lec22</option>
 <option  value="109104048/module/lecture23.pdf">Lec23</option>
 <option  value="109104048/module/lecture24.pdf">Lec24</option>
 <option  value="109104048/module/lecture25.pdf">Lec25</option>
 <option  value="109104048/module/lecture26.pdf">Lec26</option>
 <option  value="109104048/module/lecture27.pdf">Lec27</option>
 <option  value="109104048/module/lecture28.pdf">Lec28</option>
 <option  value="109104048/module/lecture29.pdf">Lec29</option>
 <option  value="109104048/module/lecture30.pdf">Lec30</option>
 <option  value="109104048/module/lecture31.pdf">Lec31</option>
 <option  value="109104048/module/lecture32.pdf">Lec32</option>
 <option  value="109104048/module/lecture33.pdf">Lec33</option>
 <option  value="109104048/module/lecture34.pdf">Lec34</option>
 <option  value="109104048/module/lecture35.pdf">Lec35</option>
 <option  value="109104048/module/lecture36.pdf">Lec36</option>
 <option  value="109104048/module/lecture37.pdf">Lec37</option>
 <option  value="109104048/module/lecture38.pdf">Lec38</option>
 <option  value="109104048/module/lecture39.pdf">Lec39</option>
 <option  value="109104048/module/lecture40.pdf">Lec40</option>
 <option  value="109104048/module/lecture41.pdf">Lec41</option>
 <option  value="109104048/module/lecture42.pdf">Lec42</option>
 <option  value="109104048/module/lecture43.pdf">Lec43</option>
 <option  value="109104048/module/lecture44.pdf">Lec44</option>
 <option  value="109104048/module/lecture45.pdf">Lec45</option>

          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104073</strong></td>
	<td><strong>Humanities and Social Sciences</strong></td>
	<td><strong>Macro Economics</strong></td>
	<td><strong>Prof.Surajit Sinha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="109104073/mod01lec01.mp4">Lecture-01</option>
 <option  value="109104073/mod01lec02.mp4">Lecture-02</option>
 <option  value="109104073/mod01lec03.mp4">Lecture-03</option>
 <option  value="109104073/mod01lec04.mp4">Lecture-04</option>
 <option  value="109104073/mod01lec05.mp4">Lecture-05</option>
 <option  value="109104073/mod01lec06.mp4">Lecture-06</option>
 <option  value="109104073/mod01lec07.mp4">Lecture-07</option>
 <option  value="109104073/mod01lec08.mp4">Lecture-08</option>
 <option  value="109104073/mod01lec09.mp4">Lecture-09</option>
 <option  value="109104073/mod01lec10.mp4">Lecture-10</option>
 <option  value="109104073/mod01lec11.mp4">Lecture-11</option>
 <option  value="109104073/mod01lec12.mp4">Lecture-12</option>
 <option  value="109104073/mod01lec13.mp4">Lecture-13</option>
 <option  value="109104073/mod01lec14.mp4">Lecture-14</option>
 <option  value="109104073/mod01lec15.mp4">Lecture-15</option>
 <option  value="109104073/mod01lec16.mp4">Lecture-16</option>
 <option  value="109104073/mod01lec17.mp4">Lecture-17</option>
 <option  value="109104073/mod01lec18.mp4">Lecture-18</option>
 <option  value="109104073/mod01lec19.mp4">Lecture-19</option>
 <option  value="109104073/mod01lec20.mp4">Lecture-20</option>
 <option  value="109104073/mod01lec21.mp4">Lecture-21</option>
 <option  value="109104073/mod01lec22.mp4">Lecture-22</option>

          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
   <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106052</strong></td>
	<td><strong> Humanities and Social Sciences </strong></td>
	<td><strong> Aspects of Western Philosophy </strong></td>
	<td><strong> Dr. Sreekumar Nellickappilly </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Madras </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="109106052/mod01lec01.mp4">Greek Philosophy: Ionians, Pythagoras, Parmenides, Heraclitus and Democritus </option>
      
      <option  value="109106052/mod01lec02.mp4"> Sophists, Socrates; philosophy of man; relativism and subjectivism; the idea of good </option>
      
      <option  value="109106052/mod01lec03.mp4"> Platos idealism: theory of ideas </option>
      
      <option  value="109106052/mod01lec04.mp4"> Plato: theory of knowledge, method of dialectic; theory of soul </option>
      
      <option  value="109106052/mod01lec05.mp4"> Aristotles criticism of Platonic idealism and the concepts of Form and Matter </option>
      
      <option  value="109106052/mod01lec06.mp4"> Aristotles theory of causation; potentiality and actuality </option>
      
      <option  value="109106052/mod01lec07.mp4"> Medieval philosophy: St. Augustine and the Problem of evil; St. Thomas Aquinass concepts of faith and reason; proofs for the existence of God. </option>
      
      <option  value="109106052/mod01lec08.mp4"> Modern Philosophy: mail characteristic features; renaissance and scientific revolution; rationalism and empiricism: main features. </option>
      
      <option  value="109106052/mod01lec09.mp4"> Descartes: the method in philosophy; the concepts of doubt and indubitable knowledge. </option>
      
      <option  value="109106052/mod01lec10.mp4"> Descartes: the mind-body dualism; the concept of God and proofs for Gods existence </option>
      
      <option  value="109106052/mod01lec11.mp4"> Spinoza: the concepts of Substance, attributes and modes. </option>
      
      <option  value="109106052/mod01lec12.mp4"> Spinozas pantheism-God and nature </option>
      
        <option  value="109106052/mod01lec13.mp4"> Leibniz: Monadology; the mind-body problem revisited; concept of God; the concept of pre-established harmony </option>
      
      <option  value="109106052/mod01lec14.mp4"> The empiricism of John Locke: ideas and their classification; refutation of innate ideas </option>
      
      <option  value="109106052/mod01lec15.mp4"> John Locke: theory of knowledge; concept of substance; the primary and secondary qualities </option>
      
      <option  value="109106052/mod01lec16.mp4"> Berkeley: the refutation of the distinction between primary and secondary qualities, immaterialism </option>
      
      <option  value="109106052/mod01lec17.mp4"> Berkeleys critique of abstract ideas, esse est percipi, the problem of solipsism; God and self </option>
      
      <option  value="109106052/mod01lec18.mp4"> Hume : Impressions and ideas, knowledge concerning relations of ideas and knowledge concerning matters of fact, induction and causality. </option>
      
      <option  value="109106052/mod01lec19.mp4"> The external world and the self, personal identity, rejection of metaphysics, scepticism, reason and the passions. </option>
      
      <option  value="109106052/mod01lec20.mp4"> Critical Philosophy: characteristic features; kantd objectives: the classification of judgements, possibility of synthetic a priori judgements, the Copernican revolution </option>
      
      <option  value="109106052/mod01lec21.mp4"> Kant: forms of sensibility, categories of understanding; the process of knowledge acquisition; phenomenon and noumenon </option>
      
      <option  value="109106052/mod01lec22.mp4"> The Ideas of Reason-soul, God and world as a whole; antinomies; rejection of speculative metaphysics. </option>
      
      <option  value="109106052/mod01lec23.mp4"> Kants ethics; freedom and immortality, problems with Kant. </option>
      
      <option  value="109106052/mod01lec24.mp4"> Hegel : The conception of Geist (spirit), the dialectical method, concepts of being, non-being and becoming, </option>
      
      <option  value="109106052/mod01lec25.mp4"> Absolute idealism; consciousness, self- consciousness and reason. </option>
      
      <option  value="109106052/mod01lec26.mp4"> Karl Marx: historical materialism; the significance of the proletariat; the base structure-superstructure division. </option>
      
      <option  value="109106052/mod01lec27.mp4"> Nietzsche : Critique of western culture, religion and morality; will to power; the idea of superman. </option>
      
      <option  value="109106052/mod01lec28.mp4"> Linguistic turn in British philosophy: Russells logical atomism and the refutation of idealism. </option>
      
      <option  value="109106052/mod01lec29.mp4"> Wittgenstein : early Wittgensteins conception of language and reality; the picture theory of meaning </option>
      
      <option  value="109106052/mod01lec30.mp4"> Later Wittgensteins conception of language games and forms of life; meaning and use. </option>
      
      <option  value="109106052/mod01lec31.mp4"> Logical positivism; against metaphysics and a scientific conception of philosophy; the limitation of logical positivism </option>
      
      <option  value="109106052/mod01lec32.mp4"> Husserl : Phenomenology and the methods of reduction; the principle of intentionality. </option>
      
      <option  value="109106052/mod01lec33.mp4"> Phenomenological reduction, eidetic reduction and transcendental reduction; transcendental subjectivity; the pure subject. </option>
      
      <option  value="109106052/mod01lec34.mp4"> Heidegger : phenomenological hermeneutics; concept of Being; man as being-in-the-world; destruction of the western intellectual tradition. </option>
      
      <option  value="109106052/mod01lec35.mp4"> Authentic and inauthentic existence; Truth as disclosure </option>
      
      <option  value="109106052/mod01lec36.mp4"> Existentialism: main features; existence precedes essence; freedom and responsibility; finiteness and situatedness of human existence </option>
      
      <option  value="109106052/mod01lec37.mp4"> Sartres conception of human existence; man is condemned to be free; rejection of essentialism </option>
      
      <option  value="109106052/mod01lec38.mp4"> The concept of being-in-itself, being-for-itself and being-for-others </option>
      
      <option  value="109106052/mod01lec39.mp4"> Postmodernism: major trends and chief characteristic features; conceptions of human subject; different postmodern approaches </option>
      
      <option  value="109106052/mod01lec40.mp4"> Deconstruction, feminism, discourse theory etc. </option>
       
          </select>
</td>
	</tr>
	</form>
 
    
    
    
    
    
  <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106086</strong></td>
	<td><strong> Humanities and Social Sciences </strong></td>
	<td><strong> NOC: Film Appreciation </strong></td>
	<td><strong> Dr. Aysha Iqbal Viswamohan </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Madras </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="109106086/mod01lec01.mp4"> Lecture 1: Introduction </option>
      
      <option  value="109106086/mod02lec02.mp4"> Key Concepts: Part 1 </option>
      
      <option  value="109106086/mod02lec03.mp4"> Key Concepts: Part 2 </option>
      
      <option  value="109106086/mod03lec04.mp4"> Lecture: Film Theory </option>
      
      <option  value="109106086/mod04lec05.mp4"> Lecture: Genre Theory </option>
      
      <option  value="109106086/mod05lec06.mp4"> Lecture: German Expressionism </option>
      
      <option  value="109106086/mod05lec07.mp4"> Lecture: Italian Neo-Realism </option>
      
      <option  value="109106086/mod05lec08.mp4">Lecture: French New Wave </option>
      
      <option  value="109106086/mod05lec09.mp4"> Lecture: Spanish Cinema </option>
      
      <option  value="109106086/mod05lec10.mp4"> Lecture: British New Wave </option>
      
      <option  value="109106086/mod05lec11.mp4"> Lecture: Chinese Cinema </option>
      
      <option  value="109106086/mod06lec12.mp4"> Action Cinema </option>
      
        <option  value="109106086/mod06lec13.mp4"> Lecture: Deewar </option>
      
      <option  value="109106086/mod07lec14.mp4"> Melodrama </option>
      
      <option  value="109106086/mod07lec15.mp4"> Formalism in Cinema </option>
      
      <option  value="109106086/mod07lec16.mp4"> The Language of Cinema </option>
      
      <option  value="109106086/mod07lec17.mp4"> Devdas </option>
      
      <option  value="109106086/mod07lec18.mp4"> City Cinema </option>
      
      <option  value="109106086/mod08lec19.mp4"> The Semiotics of Cinema</option>
      
      <option  value="109106086/mod08lec20.mp4"> Raging Bull </option>
      
      <option  value="109106086/mod08lec21.mp4"> Robert Bresson </option>
      
      <option  value="109106086/mod09lec22.mp4"> Studio Cinema: Part -1 </option>
      
      <option  value="109106086/mod09lec23.mp4"> Studio Cinema: Part 2 </option>
      
      <option  value="109106086/mod10lec24.mp4"> New Hollywood Cinema: Part 1 </option>
      
      <option  value="109106086/mod10lec25.mp4"> New Hollywood Cinema: Part 2 </option>
      
      <option  value="109106086/mod11lec26.mp4"> History of Hindi Cinima Part 1 </option>
      
      <option  value="109106086/mod11lec27.mp4"> History of Hindi Cinima Part 2 </option>
      
      <option  value="109106086/mod11lec28.mp4"> History of Hindi Cinema: Part 3 </option>
      
      <option  value="109106086/mod12lec29.mp4"> Ideology in Cinema </option>
      
      <option  value="109106086/mod12lec30.mp4"> Character in Cinema </option>
      
      <option  value="109106086/mod13lec31.mp4"> Mythological Cinema in India </option>
      
      <option  value="109106086/mod13lec32.mp4"> The Cinema of Satyajit Ray </option>
      
      <option  value="109106086/mod13lec33.mp4"> Hindi Film Music </option>
      
      <option  value="109106086/mod13lec34.mp4"> The Hollywood musicals </option>
      
      <option  value="109106086/mod13lec35.mp4"> African cinema </option>
      
      <option  value="109106086/mod13lec36.mp4"> Iranian cinema </option>
      
      <option  value="109106086/mod13lec37.mp4"> Canadian Cinema </option>
      
      <option  value="109106086/mod13lec38.mp4"> Eastern European Cinema </option>
      
      <option  value="109106086/mod13lec39.mp4"> European Cinema Hungary, Sweden, Greece </option>
      
      <option  value="109106086/mod13lec40.mp4"> Postmodernism and cinema </option>
       
<option  value="109106086/mod13lec41.mp4"> Mall towns in cinema </option>
      <option  value="109106086/mod13lec42.mp4"> Film sequels, remakes and cult films </option>
      <option  value="109106086/mod13lec43.mp4"> Parallel Cinema From India </option>


          </select>
</td>
	</tr>
	</form>
  
    
    
    
    
    
    <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106087</strong></td>
	<td><strong> Humanities and Social Sciences </strong></td>
	<td><strong> NOC:Appreciating carnatic music </strong></td>
	<td><strong> Dr. Lakshmi Sreeram </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Madras </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="109106087/mod01lec01.mp4"> Lec 01 - The Body of Music </option>
      
      <option  value="109106087/mod01lec02.mp4"> Lec 02 - Music everywhere finding the classical </option>
      
      <option  value="109106087/mod01lec03.mp4"> Lec 03 - Classical Music Art Music </option>
      
      <option  value="109106087/mod01lec04.mp4"> Lec 04 - Music through Melody & Music through Harmony </option>
      
      <option  value="109106087/mod01lec05.mp4"> Lec 05 - Musical Material A Hard Look </option>
      
      <option  value="109106087/mod01lec06.mp4"> Lec 06 - Musical material Mo2 </option>
      
      <option  value="109106087/mod02lec07.mp4"> Lec 07 - Carnatic Music as Raga Music </option>
      
      <option  value="109106087/mod02lec08.mp4"> Lec 08 - Understanding Raga - Part I </option>
      
      <option  value="109106087/mod02lec09.mp4"> Lec 09 - Understanding Raga - Part II (Raga and Swara) </option>
      
      <option  value="109106087/mod02lec10.mp4"> Lec 10 - Understanding Raga - Part III A Glimpse into Gamaka (Ornamentation) and Phraseology </option>
      
      <option  value="109106087/mod02lec11.mp4"> Lec 11 - Swara in the Sanskrit Textual Tradition </option>
      
      <option  value="109106087/mod02lec12.mp4"> Lec 12 - Sruti in Sanskrit Textual tradition </option>
      
        <option  value="109106087/mod02lec13.mp4"> Lec 13 – Tambura </option>
      
      <option  value="109106087/mod03lec14.mp4"> Lec 14 - Gamaka I  </option>
      
      <option  value="109106087/mod03lec15.mp4"> Lec 15 - Gamaka II  </option>
      
      <option  value="109106087/mod03lec16.mp4"> Lec 16 - Gamaka III  </option>
      
      <option  value="109106087/mod03lec17.mp4"> Lec 17 - Gamakas IV  </option>
      
      <option  value="109106087/mod03lec18.mp4"> Lec 18 - Raga and Phraseology </option>
      
      <option  value="109106087/mod04lec19.mp4"> Lec 19 - Raga - some basic expectations </option>
      
      <option  value="109106087/mod04lec20.mp4"> Lec 20 - A string of Ragas and a teaser </option>
      
      <option  value="109106087/mod04lec21.mp4"> Lec 21 - Raga in the textual tradition </option>
      
      <option  value="109106087/mod04lec22.mp4"> Lec 22 - Classification of Ragas I </option>
      
      <option  value="109106087/mod04lec23.mp4"> Lec 23 - Classification of Ragas II </option>
      
      <option  value="109106087/mod04lec24.mp4"> Lec 24 - Mela system of classifying raga-s </option>
      
      <option  value="109106087/mod04lec25.mp4"> Lec 25 - Generating the 72 mela-s </option>
      
      <option  value="109106087/mod04lec26.mp4"> Lec 26 - Application of 72 mela </option>
      
      <option  value="109106087/mod04lec27.mp4"> Lec 27 - Katapayadi Naming the 72 melas  </option>
      
      <option  value="109106087/mod04lec28.mp4"> Lec 28 - Vivadi I </option>
      
      <option  value="109106087/mod04lec29.mp4"> Lec 29 - Vivadi II </option>
      
      <option  value="109106087/mod04lec30.mp4"> Lec 30 - Raga - Circles and Triangles </option>
      
      <option  value="109106087/mod05lec31.mp4"> Lec 31 - Laya: temporal discipline in music. </option>
      
      <option  value="109106087/mod05lec32.mp4"> Lec 32 - Tala an Introduction to the Concept </option>
      
      <option  value="109106087/mod05lec33.mp4"> Lec 33 - More on Tala and laya </option>
      
      <option  value="109106087/mod05lec34.mp4"> Lec 34 - Aspects of Tala - I </option>
      
      <option  value="109106087/mod05lec35.mp4"> Lec 35 - Aspects of Tala – II </option>
      
      <option  value="109106087/mod05lec36.mp4"> Lec 36 - Aspects of Tala – III </option>
      
      <option  value="109106087/mod05lec37.mp4"> Lec 37 - Aspects of  IV </option>
      
      <option  value="109106087/mod06lec38.mp4"> Lec 38 - Composition in Carnatic Music </option>
      
      <option  value="109106087/mod06lec39.mp4"> Lec 39 -  an Introduction </option>
      
      <option  value="109106087/mod06lec40.mp4"> Lec 40 - Varnam and laya intricacies </option>
       
<option  value="109106087/mod06lec41.mp4"> Lec 41 - Kriti the premier compositional form in Carnatic music </option>
      <option  value="109106087/mod06lec42.mp4"> Lec 42 -Kriti some basic features </option>
      <option  value="109106087/mod06lec43.mp4"> Lec 43 - Precursors to the Kriti </option>

 <option  value="109106087/mod06lec44.mp4"> Lec 44 - Bhakti and Carnatic Music: Metaphor, World view and Yearning in Carnatic compositions. </option>

<option  value="109106087/mod07lec45.mp4"> Lec 45 - Tanjavur and the Carnatic Trinity </option>

<option  value="109106087/mod07lec46.mp4"> Lec 46 - Tyagaraja, the Vaggeyakara </option>

<option  value="109106087/mod07lec47.mp4"> Lec 47 - Tyagaraja and His Many Moods –I </option>

<option  value="109106087/mod07lec48.mp4"> Lec 48 - Tyagaraja and His Many Moods II </option>

<option  value="109106087/mod07lec49.mp4"> Lec 49 - Muthuswami Dikshitar an overview </option>

<option  value="109106087/mod07lec50.mp4"> Lec 50 - Muthuswami Dikshitar the Sanskirt Scholar and Advaitin </option>

<option  value="109106087/mod07lec51.mp4"> Lec 51 - Muthuswami Dikshitar Some Other Aspects of his Work.</option>

<option  value="109106087/mod08lec52.mp4"> Lec 52 - Syama Sastri </option>

<option  value="109106087/mod08lec53.mp4"> Lec 53 - Tamil Composers before the trinity </option>

<option  value="109106087/mod08lec54.mp4"> Lec 54 - Post trinity Composers </option>

<option  value="109106087/mod08lec55.mp4"> Lec 55 - Swathi Tirunal - the Versatile Royal Composer </option>

<option  value="109106087/mod08lec56.mp4"> Lec 56 - The Romance of Padam and Javali </option>

<option  value="109106087/mod08lec57.mp4"> Lec 57 – Tillana </option>

<option  value="109106087/mod09lec58.mp4"> Lec 58 - Improvisation in Carnatic Music – Alapana </option>

<option  value="109106087/mod09lec59.mp4"> Lec 59 - ALAPANA : Style and Aesthetics </option>

<option  value="109106087/mod09lec60.mp4"> Lec 60 - Neraval and Swaraprastara </option>

<option  value="109106087/mod09lec61.mp4"> Lec 61 – TANAM </option>

<option  value="109106087/mod09lec62.mp4"> Lec 62 - An expostion of Balagopala,a kriti in the rega Bhairavi with alapana, neraval and swaraprastara followed by tani Avartanam </option>

<option  value="109106087/mod09lec63.mp4"> Lec 63 - Accompaniment in Carnatic Music - The Violin </option>
<option  value="109106087/mod09lec64.mp4"> Lec 64 - Percussive Accompaniment - the Mridangam </option>
<option  value="109106087/mod09lec65.mp4"> Lec 65 -Subsidiary Accompaniment - Interaction Among Accompanists </option>
<option  value="109106087/mod09lec66.mp4"> Lec 66 - The Typical carnatic Concert And Ragam Tanam Pallavi – RTP </option>

                                  
          </select>
</td>
	</tr>
	</form>

    
    
   <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104088</strong></td>
	<td><strong> Humanities and Social Sciences </strong></td>
	<td><strong> NOC:Elements of Visual Representation</strong></td>
	<td><strong> Dr. Shatarupa Thakurta Roy </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Kanpur </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="109104088/mod01lec01.mp4"> Lecture 01 - Visual Literacy </option>
      
      <option  value="109104088/mod01lec02.mp4"> Lecture 02 - What is Art? Visual styles </option>
      
      <option  value="109104088/mod01lec03.mp4"> Lecture 03 - Principle of Visual Communication </option>
      
      <option  value="109104088/mod01lec04.mp4"> Lecture 04 - Elements of Visual Representation </option>
      
      <option  value="109104088/mod01lec05.mp4"> Lecture 05 - Need of Visual Harmony, Aerial Perspective in Visual Representation </option>
      
      <option  value="109104088/mod01lec06.mp4"> Lecture 06 - Visual Mediums Method and Material </option>
      
      <option  value="109104088/mod02lec07.mp4"> Lecture-07 - Visual Arrangement: Figure ground relationship </option>
      
      <option  value="109104088/mod02lec08.mp4"> Lecture-08 - Illusion of Space Overlapping and Vertical Location  </option>
      
      <option  value="109104088/mod02lec09.mp4"> Lecture-09 - Multiple point Perspective, Cubist form </option>
      
      <option  value="109104088/mod02lec10.mp4"> Lecture-10 - Oriental Perspective, Isometric Projection </option>
      
      <option  value="109104088/mod02lec11.mp4"> Lecture-11 Unconventional Space, Visual Riddle </option>
      
      <option  value="109104088/mod02lec12.mp4"> Lecture-12 - Perspective, Foreshortening and Amplification </option>
      
        <option  value="109104088/mod03lec13.mp4"> Lecture 13 - Static Form </option>
      
      <option  value="109104088/mod03lec14.mp4"> Lecture 14 - Impression of Movement </option>
      
      <option  value="109104088/mod03lec15.mp4"> Lecture 15 - Movement by Repetition </option>
      
      <option  value="109104088/mod03lec16.mp4"> Lecture 16 - Use of Multiple Image to Depict Motion </option>
      
      <option  value="109104088/mod03lec17.mp4"> Lecture 17 - Principle of Op Art: Optical Movement </option>
      
      <option  value="109104088/mod03lec18.mp4"> Lecture 18 - Asymmetry in Visual Narration </option>
      
      <option  value="109104088/mod04lec19.mp4"> Lecture 19 - Scale and Space in Composition </option>
      
      <option  value="109104088/mod04lec20.mp4"> Lecture 20 - Choosing the Right Scale </option>
      
      <option  value="109104088/mod04lec21.mp4"> Lecture 21 - Natural Proportion </option>
      
      <option  value="109104088/mod04lec22.mp4"> Lecture 22 - Ideal Proportion </option>
      
      <option  value="109104088/mod04lec23.mp4"> Lecture 23 - Arbitrary and Mandatory Proportion </option>
      
      <option  value="109104088/mod04lec24.mp4"> Lecture 24 - Form of Visual Paradox </option>
      
      <option  value="109104088/mod05lec25.mp4"> Lecture 25 - Line as Line and Line as Shape </option>
      
      <option  value="109104088/mod05lec26.mp4"> Lecture 26 - Character Specific Use of Line in Visual Representation </option>
      
      <option  value="109104088/mod05lec27.mp4"> Lecture 27 - Implied, Psychic, Contour Line and Gesture Line </option>
      
      <option  value="109104088/mod05lec28.mp4"> Lecture 28 -  Line as Building Block </option>
      
      <option  value="109104088/mod05lec29.mp4"> Lecture 29 - Line for Rendering: Value and Volume </option>
      
      <option  value="109104088/mod05lec30.mp4"> Lecture 30 - Quality of Line in Visual Expression </option>
      
      <option  value="109104088/mod06lec31.mp4"> Lecture 31 - Example of Unified Composition: Conceptual Harmony vs. Visual Harmony </option>
      
      <option  value="109104088/mod06lec32.mp4"> Lecture 32 - Visual Continuity: Proximity, Repetition </option>
      
      <option  value="109104088/mod06lec33.mp4"> Lecture 33 - Gestalt law of Universal Whole </option>
      
      <option  value="109104088/mod06lec34.mp4"> Lecture 34 - Unity in Variation. Visual Climax and Harmony: Focal Point and Accents </option>
      
      <option  value="109104088/mod06lec35.mp4"> Lecture 35 - Degree of Emphasis to Maintain Harmony: Visual Balance </option>
      
      <option  value="109104088/mod06lec36.mp4"> Lecture 36 - Rhythm and Motion in Visual Representation Alternating and Progressing Arrangement </option>
      
      <option  value="109104088/mod07lec37.mp4"> Lecture 37 - Visual Balance in Symmetry, Radial and Crystallographic Balance </option>
      
      <option  value="109104088/mod07lec38.mp4"> Lecture 38 - Balance in Asymmetry </option>
      
      <option  value="109104088/mod07lec39.mp4"> Lecture 39 - Visual Balance in Colour Combination, Conflicting Colours </option>
      
      <option  value="109104088/mod07lec40.mp4"> Lecture 40 - Balance through Achromatic Value Distribution </option>
       
<option  value="109104088/mod07lec41.mp4"> Lecture 41 - Local, optical and Arbitrary colour </option>
      <option  value="109104088/mod07lec42.mp4"> Lecture 42 - Colour in Digital Media Pigment and Light, Resolution </option>
      <option  value="109104088/mod08lec43.mp4"> Lecture 43 - Rectilinear and Curvilinear Form </option>

 <option  value="109104088/mod08lec44.mp4"> Lecture 44 - Volume and Surface Texture </option>

<option  value="109104088/mod08lec45.mp4"> Lecture 45 - Visual and Tactile Texture </option>

<option  value="109104088/mod08lec46.mp4"> Lecture 46 - Form, Texture and Pattern </option>

<option  value="109104088/mod08lec47.mp4"> Lecture 47 - Visual Analysis </option>

<option  value="109104088/mod08lec48.mp4"> Lecture 48 - Steps of Problem Solving </option>

          </select>
</td>
	</tr>
	</form>

   
   <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109106089</strong></td>
	<td><strong> Humanities and Social Sciences </strong></td>
	<td><strong> NOC:Infrastructure Economics </strong></td>
	<td><strong>  	Prof.Nalin Bharti </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Patna </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="109106089/mod01lec01.mp4"> Lec-01 </option>
      
      <option  value="109106089/mod01lec02.mp4"> Lec-02 </option>
      
      <option  value="109106089/mod01lec03.mp4"> Lec-03 </option>
      
      <option  value="109106089/mod01lec04.mp4"> Lec-04 </option>
      
      <option  value="109106089/mod01lec05.mp4"> Lec-05 </option>
      
      <option  value="109106089/mod02lec06.mp4"> Lec-06 </option>
      
      <option  value="109106089/mod03lec07.mp4"> Lec-07 </option>
      
      <option  value="109106089/mod03lec08.mp4"> Lec-08  </option>
      
      <option  value="109106089/mod03lec09.mp4"> Lec-09 </option>
      
      <option  value="109106089/mod03lec10.mp4"> Lec-10 </option>
      
      <option  value="109106089/mod03lec11.mp4"> Lec-11 </option>
      
      <option  value="109106089/mod04lec12.mp4"> Lec-12 </option>
      
        <option  value="109106089/mod04lec13.mp4"> Lec-13 </option>
      
      <option  value="109106089/mod04lec14.mp4"> Lec-14 </option>
      
      <option  value="109106089/mod04lec15.mp4"> Lec-15 </option>
      
      <option  value="109106089/mod04lec16.mp4"> Lec-16 </option>
      
      <option  value="109106089/mod05lec17.mp4"> Lec-17 </option>
      
      <option  value="109106089/mod05lec18.mp4"> Lec-18 </option>
      
      <option  value="109106089/mod05lec19.mp4"> Lec-19 </option>
      
      <option  value="109106089/mod05lec20.mp4"> Lec-20 </option>
      
      <option  value="109106089/mod05lec21.mp4"> Lec-21 </option>
      
      <option  value="109106089/mod06lec22.mp4"> Lec-22 </option>
      
      <option  value="109106089/mod06lec23.mp4"> Lec-23 </option>
      
      <option  value="109106089/mod06lec24.mp4"> Lec-24 </option>
      
      <option  value="109106089/mod06lec25.mp4"> Lec-25 </option>
      
      <option  value="109106089/mod06lec26.mp4"> Lec-26 </option>
      
      <option  value="109106089/mod07lec27.mp4"> Lec-27 </option>
      
      <option  value="109106089/mod07lec28.mp4"> Lec-28 </option>
      
      <option  value="109106089/mod07lec29.mp4"> Lec-29 </option>
      
      <option  value="109106089/mod07lec30.mp4"> Lec-30</option>
      
      <option  value="109106089/mod07lec31.mp4"> Lec-31 </option>
      
      <option  value="109106089/mod08lec32.mp4"> Lec-32 </option>
      
      <option  value="109106089/mod08lec33.mp4"> Lec-33 </option>
      
      <option  value="109106089/mod08lec34.mp4"> Lec-34 </option>
      
      <option  value="109106089/mod08lec35.mp4"> Lec-35 </option>
      
      <option  value="109106089/mod08lec36.mp4"> Lec-36 </option>
      
      <option  value="109106089/mod08lec37.mp4"> Lec-37 </option>
      
      <option  value="109106089/mod08lec38.mp4"> Lec-38 </option>

          </select>
</td>
	</tr>
	</form>

   
   
   
   
   <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>109104090</strong></td>
	<td><strong> Humanities and Social Sciences </strong></td>
	<td><strong> NOC:Practical English: Learning and Teaching(Course sponsored by Aricent) </strong></td>
	<td><strong> Dr. Bhaskar Dasgupta </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Kanpur </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="109104090/mod01lec01.mp4"> Lec-01 </option>
      
      <option  value="109104090/mod01lec02.mp4"> Lec-02 </option>
      
      <option  value="109104090/mod01lec03.mp4"> Lec-03 </option>
      
      <option  value="109104090/mod01lec04.mp4"> Lec-04 </option>
      
      <option  value="109104090/mod01lec05.mp4"> Lec-05 </option>
      
      <option  value="109104090/mod02lec06.mp4"> Lec-06 </option>
      
      <option  value="109104090/mod02lec07.mp4"> Lec-07 </option>
      
      <option  value="109104090/mod02lec08.mp4"> Lec-08  </option>
      
      <option  value="109104090/mod02lec09.mp4"> Lec-09 </option>
      
      <option  value="109104090/mod02lec10.mp4"> Lec-10 </option>
      
      <option  value="109104090/mod03lec11.mp4"> Lec-11 </option>
      
      <option  value="109104090/mod03lec12.mp4"> Lec-12 </option>
      
        <option  value="109104090/mod03lec13.mp4"> Lec-13 </option>
      
      <option  value="109104090/mod03lec14.mp4"> Lec-14 </option>
      
      <option  value="109104090/mod03lec15.mp4"> Lec-15 </option>
      
      <option  value="109104090/mod04lec16.mp4"> Lec-16 </option>
      
      <option  value="109104090/mod04lec17.mp4"> Lec-17 </option>
      
      <option  value="109104090/mod04lec18.mp4"> Lec-18 </option>
      
      <option  value="109104090/mod04lec19.mp4"> Lec-19 </option>
      
      <option  value="109104090/mod04lec20.mp4"> Lec-20 </option>
      
      <option  value="109104090/mod05lec21.mp4"> Lec-21 </option>
      
      <option  value="109104090/mod05lec22.mp4"> Lec-22 </option>
      
      <option  value="109104090/mod05lec23.mp4"> Lec-23 </option>
      
      <option  value="109104090/mod05lec24.mp4"> Lec-24 </option>
      
      <option  value="109104090/mod05lec25.mp4"> Lec-25 </option>
      
      <option  value="109104090/mod06lec26.mp4"> Lec-26 </option>
      
      <option  value="109104090/mod06lec27.mp4"> Lec-27 </option>
      
      <option  value="109104090/mod06lec28.mp4"> Lec-28 </option>
      
      <option  value="109104090/mod06lec29.mp4"> Lec-29 </option>
      
      <option  value="109104090/mod06lec30.mp4"> Lec-30</option>
      
      <option  value="109104090/mod07lec31.mp4"> Lec-31 </option>
      
      <option  value="109104090/mod07lec32.mp4"> Lec-32 </option>
      
      <option  value="109104090/mod07lec33.mp4"> Lec-33 </option>
      
      <option  value="109104090/mod07lec34.mp4"> Lec-34 </option>
      
      <option  value="109104090/mod07lec35.mp4"> Lec-35 </option>
      
      <option  value="109104090/mod08lec36.mp4"> Lec-36 </option>
      
      <option  value="109104090/mod08lec37.mp4"> Lec-37 </option>
      
      <option  value="109104090/mod08lec38.mp4"> Lec-38 </option>

<option  value="109104090/mod08lec39.mp4"> Lec-39 </option>
      
    <option  value="109104090/mod08lec40.mp4"> Lec-40 </option>

          </select>
</td>
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>109106092</strong></td>
      <td><strong>Humanities and Social Sciences</strong></td>
      <td><strong>NOC:Issues in Bioethics</strong></td>
      <td><strong>Dr. Sreekumar Nellickappilly</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  109106092/  mod01lec01.mp4  ">  Unit 1 - Overview of Bioethics  </option>
          <option  value="  109106092/  mod01lec02.mp4  ">  Unit 2- Historical Evolution of Bioethics I </option>
          <option  value="  109106092/  mod01lec03.mp4  ">  Unit 3- Historical Evolution of Bioethics II  </option>
          <option  value="  109106092/  mod01lec04.mp4  ">  Unit 4- Historical Evolution of Bioethics III </option>
          <option  value="  109106092/  mod01lec05.mp4  ">  Unit 5- Bioethics Today: Culture, Democracy and Law </option>
          <option  value="  109106092/  mod02lec06.mp4  ">  Unit 1 -Ethical theories and Bioethical Issues  </option>
          <option  value="  109106092/  mod02lec07.mp4  ">  Unit 2 - Other ethical theories </option>
          <option  value="  109106092/  mod02lec08.mp4  ">  Unit 3 - Hedonistic Approaches in Ethical Theories  </option>
          <option  value="  109106092/  mod02lec09.mp4  ">  Unit 4 - Deontological Approach </option>
          <option  value="  109106092/  mod02lec10.mp4  ">  Unit 5 - Priniciple-Based Theories  </option>
          <option  value="  109106092/  mod03lec11.mp4  ">  Unit 1 -Challenges to the Person of the Individual  </option>
          <option  value="  109106092/  mod03lec12.mp4  ">  Unit 2- Challenges to Dignity and the Human Rights Approach in Bioethics  </option>
          <option  value="  109106092/  mod03lec13.mp4  ">  Unit 3- Problems in Resource Allocation </option>
          <option  value="  109106092/  mod03lec14.mp4  ">  Unit 4- End of Life Issues  </option>
          <option  value="  109106092/  mod03lec15.mp4  ">  Unit 5 - Ethics of Care, Gender Concerns and Feminist Perspectives  </option>
          <option  value="  109106092/  mod04lec16.mp4  ">  Unit 1- Technological Advancements and Bioethical concerns  </option>
          <option  value="  109106092/  mod04lec17.mp4  ">  UNIT 2- The challenges posed by Genetic Engineering and Gener Therapy Not Started   </option>
          <option  value="  109106092/  mod04lec18.mp4  ">  Unit 3-The challenges posed by Epidemic Threats </option>
          <option  value="  109106092/  mod04lec19.mp4  ">  Unit 4- Religious Traditions and Contemporary Bioethics </option>
          <option  value="  109106092/  mod04lec20.mp4  ">  Unit 5- Towards a Phronetic Bioethics </option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>109106091</strong></td>
      <td><strong>Humanities and Social Sciences</strong></td>
      <td><strong>NOC:Language and society</strong></td>
      <td><strong>Prof. Rajesh Kumar</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  109106091/  mod01lec01.mp4  ">  Introduction to language and society  </option>
          <option  value="  109106091/  mod01lec02.mp4  ">  Language and India  </option>
          <option  value="  109106091/  mod01lec03.mp4  ">  Language and a language </option>
          <option  value="  109106091/  mod01lec04.mp4  ">  Language, dialect and variety </option>
          <option  value="  109106091/  mod01lec05.mp4  ">  Dialect and standard language </option>
          <option  value="  109106091/  mod02lec06.mp4  ">  How do children learn language? </option>
          <option  value="  109106091/  mod02lec07.mp4  ">  First language acquisition  </option>
          <option  value="  109106091/  mod02lec08.mp4  ">  Critical period and SLA </option>
          <option  value="  109106091/  mod02lec09.mp4  ">  Sounds and words  </option>
          <option  value="  109106091/  mod02lec10.mp4  ">  Sentence  </option>
          <option  value="  109106091/  mod03lec11.mp4  ">  India as a linguistic area  </option>
          <option  value="  109106091/  mod03lec12.mp4  ">  Language variation  </option>
          <option  value="  109106091/  mod03lec13.mp4  ">  Language and culture  </option>
          <option  value="  109106091/  mod03lec14.mp4  ">  Language and power- politics  </option>
          <option  value="  109106091/  mod03lec15.mp4  ">  Indian english  </option>
          <option  value="  109106091/  mod04lec16.mp4  ">  Fluidity and continuum  </option>
          <option  value="  109106091/  mod04lec17.mp4  ">  Language in education </option>
          <option  value="  109106091/  mod04lec18.mp4  ">  Language and scholastic achievement   </option>
          <option  value="  109106091/  mod04lec19.mp4  ">  Language and language teaching  </option>
          <option  value="  109106091/  mod04lec20.mp4  ">  Concluding remarks  </option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>109104093</strong></td>
      <td><strong>Humanities and Social Sciences</strong></td>
      <td><strong>NOC:Brief introduction to Psychology</strong></td>
      <td><strong>Braj Bhushan</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="109104093/mod01lec01.mp4">  Lecture 1 </option>
          <option  value="109104093/mod01lec02.mp4">  Lecture 2 </option>
          <option  value="109104093/mod01lec03.mp4">  Lecture 3 </option>
          <option  value="109104093/mod01lec04.mp4">  Lecture 4 </option>
          <option  value="109104093/mod01lec05.mp4">  Lecture 5 </option>
          <option  value="109104093/mod01lec06.mp4">  Lecture 6 </option>
          <option  value="109104093/mod02lec07.mp4">  Lecture 7 </option>
          <option  value="109104093/mod02lec08.mp4">  Lecture 8 </option>
          <option  value="109104093/mod02lec09.mp4">  Lecture 9 </option>
          <option  value="109104093/mod02lec10.mp4">  Lecture 10  </option>
          <option  value="109104093/mod02lec11.mp4">  Lecture 11  </option>
          <option  value="109104093/mod02lec12.mp4">  Lecture 12  </option>
          <option  value="109104093/mod03lec13.mp4">  Lecture 13  </option>
          <option  value="109104093/mod03lec14.mp4">  Lecture 14  </option>
          <option  value="109104093/mod03lec15.mp4">  Lecture 15  </option>
          <option  value="109104093/mod03lec16.mp4">  Lecture 16  </option>
          <option  value="109104093/mod03lec17.mp4">  Lecture 17  </option>
          <option  value="109104093/mod03lec18.mp4">  Lecture 18  </option>
          <option  value="109104093/mod04lec19.mp4">  Lecture 19  </option>
          <option  value="109104093/mod04lec20.mp4">  Lecture 20  </option>
          <option  value="109104093/mod04lec22.mp4">  Lecture 22  </option>
          <option  value="109104093/mod04lec23.mp4">  Lecture 23  </option>
          <option  value="109104093/mod04lec24.mp4">  Lecture 24  </option>
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
