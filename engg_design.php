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
<title>Engineering Design</title>
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
	<td><strong>107101001</strong></td>
	<td><strong>Engineering Design</strong></td>
	<td><strong>Visual Communication</strong></td>
	<td><strong>Dr. Raja Mohanty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="107101001/modules/module1/lec1/objectives_L1.html">Lecture 1 : An Introduction to Communication</option>
      
      <option  value="107101001/modules/module1/lec2/objectives_L2.html">Lecture 2 : On Languages and Grammar</option>
      	
      <option  value="107101001/modules/module1/lec3/objectives_L3.html">Lecture 3 : Visual Communication</option>
      
      <option  value="107101001/modules/module2/lec1/objectives_L1.html">Lecture 1 : Introduction to Drawing</option>
      
      <option  value="107101001/modules/module2/lec2/objectives_L2.html">Lecture 2 : Drawing as a Tool for Observation</option>
      
      <option  value="107101001/modules/module2/lec3/objectives_L3.html">Lecture 3 : Communicating through Drawing</option>
      
      <option  value="107101001/modules/module3/lec1/objectives_L1.html">Lecture 1 : The Increasing Popularity of the Camera</option>
      
      <option  value="107101001/modules/module3/lec2/objectives_L2.html">Lecture 2 : Going Beyond "Pretty Pictures"</option>
      
      <option  value="107101001/modules/module3/lec3/objectives_L3.html">Lecture 3 : Creative Imagery through Photomontage</option>
      
      <option  value="107101001/modules/module3/lec4/objectives_L4.html">Lecture 4 : Rumi Under the Palas</option>
      
      <option  value="107101001/modules/module3/lec5/objectives_L5.html">Lecture 5 : The Camera as an Extension of the Eye</option>
      
      <option  value="107101001/modules/module4/lec1/objectives_L1.html">Lecture 1 : Graphic Imagery </option>
      
      <option  value="107101001/modules/module4/lec2/objectives_L2.html">Lecture 2 : Visual Representation of Information & Data </option>
      
      <option  value="107101001/modules/module4/lec3/objectives_L3.html">Lecture 3 : Logos and Brand Identities</option>
      
      <option  value="107101001/modules/module5/lec1/objectives_L1.html">Lecture 1 : Introduction to Paintings and Illustrations</option>
      
      <option  value="107101001/modules/module5/lec2/objectives_L2.html">Lecture 2 : Paintings</option>
      
      <option  value="107101001/modules/module5/lec3/objectives_L3.html">Lecture 3 : Illustrations</option>
      
      <option  value="107101001/modules/module6/lec1/objectives_L1.html">Lecture 1 : The Magical World of Animation</option>
      
      <option  value="107101001/modules/module6/lec2/objectives_L2.html">Lecture 2 : Basic Principles of Animation</option>
      
      <option  value="107101001/modules/module6/lec3/objectives_L3.html">Lecture 3 : How to Create a Short Animation Film</option>
      
      <option  value="107101001/modules/module7/lec1/objectives_L1.html">Lecture 1: The Moving Image</option>
      
      <option  value="107101001/modules/module7/lec2/objectives_L2.html">Lecture 2 : The Auteur School of Thought</option>
      
      <option  value="107101001/modules/module7/lec3/objectives_L3.html">Lecture 3 : The Rasa Theory</option>
      
      <option  value="107101001/modules/module8/lec1/objectives_L1.html">Lecture 1 : Calligraphy</option>
      
      <option  value="107101001/modules/module8/lec2/objectives_L2.html">Lecture 2 : Basics of Typography</option>
      
      <option  value="107101001/modules/module8/lec3/objectives_L3.html">Lecture 3 : Typographic Applications (Grids and Layouts)</option>
      
      <option  value="107101001/modules/module9/lec1/objectives_L1.html">Lecture 1 : Interactive Media</option>
      
      <option  value="107101001/modules/module9/lec2/objectives_L2.html">Lecture 2 : Principles of Interaction Design</option>
      
      <option  value="107101001/modules/module9/lec3/objectives_L3.html">Lecture 3 : Some New Directions</option>
      
      <option  value="107101001/modules/module10/lec1/objectives_L1.html">Lecture 1 : Tools and Surfaces</option>
      
      <option  value="107101001/modules/module10/lec2/objectives_L2.html">Lecture 2 : Line</option>
      
      <option  value="107101001/modules/module10/lec3/objectives_L3.html">Lecture 3 : Tonalities</option>
      
      <option  value="107101001/modules/module10/lec4/objectives_L4.html">Lecture 4 : Perspective</option>
      
      <option  value="107101001/modules/module10/lec5/objectives_L5.html">Lecture 5 : Freehand Drawing</option>
      
      <option  value="107101001/modules/module11/lec1/objectives_L1.html">Lecture 1 : Cameras</option>
      
      <option  value="107101001/modules/module11/lec2/objectives_L2.html">Lecture 2 : Aperture</option>
      
      <option  value="107101001/modules/module11/lec3/objectives_L3.html">Lecture 3 : Shutter Speed</option>
      
      <option  value="107101001/modules/module11/lec4/objectives_L4.html">Lecture 4 : Light</option>
      
      <option  value="107101001/modules/module11/lec5/objectives_L5.html">Lecture 5 : Composition</option>
      
      <option  value="107101001/modules/module11/lec6/objectives_L6.html">Lecture 6 : Creative Exercises</option>
      
      <option  value="107101001/modules/module7/lec4/objectives_L4.html">Lecture 4 : Film Appreciation</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>107106009</strong></td>
	<td><strong>Engineering Design </strong></td>
	<td><strong>Principles of Engineering System Design </strong></td>
	<td><strong>Dr. T Asokan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="107106009/mod01lec01.mp4">Introduction to system Design                                       </option>
<option value="107106009/mod01lec02.mp4">Engineering systems Classification & examples                       </option>
<option value="107106009/mod01lec03.mp4">Modern System design processes                                      </option>
<option value="107106009/mod01lec04.mp4">Six  functions of design process                                    </option>
<option value="107106009/mod01lec05.mp4">Tools for enabling creative development                             </option>
<option value="107106009/mod01lec06.mp4">Team Development : Group Exercises                                  </option>
<option value="107106009/mod01lec07.mp4">System Requirement Analysis                                         </option>
<option value="107106009/mod01lec08.mp4">Originating Requirements: Example System Engineering software -CORE </option>
<option value="107106009/mod01lec09.mp4">Functional Architecture Development                                 </option>
<option value="107106009/mod01lec10.mp4">Functional Decomposition                                            </option>
<option value="107106009/mod01lec11.mp4">Functional Decomposition : Examples                                 </option>
<option value="107106009/mod01lec12.mp4">Physical Architecture Development                                   </option>
<option value="107106009/mod01lec13.mp4">Implementing Fault Tolerance in Physical Architecture               </option>
<option value="107106009/mod01lec14.mp4">Operational Architecture Development Part I                         </option>
<option value="107106009/mod01lec15.mp4">Operational Architecture Development Part II                        </option>
<option value="107106009/mod01lec16.mp4">Interface architecture Development                                  </option>
<option value="107106009/mod01lec17.mp4">Interface standards and Design process                              </option>
<option value="107106009/mod01lec18.mp4">Integration and qualification                                       </option>
<option value="107106009/mod01lec19.mp4">Qualification planning and methods                                  </option>
<option value="107106009/mod01lec20.mp4">System Design Example: Autolink system                              </option>
<option value="107106009/mod01lec21.mp4">System Design Examples                                              </option>
<option value="107106009/mod01lec22.mp4">System Design Examples (Contd.)                                     </option>
<option value="107106009/mod01lec23.mp4">Graphical Modelling Techniques                                      </option>
<option value="107106009/mod01lec24.mp4">Process modeling                                                    </option>
<option value="107106009/mod01lec25.mp4">Behavior modeling                                                   </option>
<option value="107106009/mod01lec26.mp4">Graphical Modelling Techniques (Contd...)                           </option>
<option value="107106009/mod01lec27.mp4">System modeling and simulation                                      </option>
<option value="107106009/mod01lec28.mp4">Bondgraph modeling of Dyanamic systems                              </option>
<option value="107106009/mod01lec29.mp4">Decision making in System Design                                    </option>
<option value="107106009/mod01lec30.mp4">Decision making in System Design(continued)                         |</option>
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>107103002</strong></td>
	<td><strong>Engineering Design</strong></td>
	<td><strong>Design fundamentals</strong></td>
	<td><strong>Dr. Utpal Barua</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="107103002/module1/index.html">Visual Proportion</option>
      
      <option  value="107103002/module1/lec2_slide1.htm">Form structure</option>
      
      <option  value="107103002/module1/lec3_slide1.htm">Various shapes</option>
      
      <option  value="107103002/module1/lec4_slide1.htm">Figure and ground relation, types of form</option>
      
      <option  value="107103002/module1/lec5_slide1.htm">Inter-relationship of form and shape</option>
      
      <option  value="107103002/module2/lec1_slide1.htm">Visual principles</option>
      
      <option  value="107103002/module2/lec2_slide1.htm">Application of figure and ground</option>
      
      <option  value="107103002/module2/lec3_slide1.htm">Visual perception</option>
      
      <option  value="107103002/module2/lec4_slide1.htm">Perspective</option>
      
      <option  value="107103002/module3/lec1_slide1.htm">Surface textures</option>
      
      <option  value="107103002/module3/lec2_slide1.htm">Use of lead and graphite pencil</option>
      
      <option  value="107103002/module3/lec3_slide1.htm">Use of pencil for creating texture</option>
      
      <option  value="107103002/module4/lec1_slide1.htm">Lines</option>
      
      <option  value="107103002/module4/lec2_slide1.htm">Semantics of lines</option>
      
      <option  value="107103002/module5/lec1_slide1.htm">Structures of shapes and its applications</option>
      
      <option  value="107103002/module5/lec2_slide1.htm">Sketching</option>
      
      <option  value="107103002/module5/lec3_slide1.htm">Creating depth in nature drawing</option>
      
      <option  value="107103002/module5/lec4_slide1.htm">How to draw still life</option>
      
      <option  value="107103002/module5/lec5_slide1.htm">Understanding of basic shapes</option>
      
      <option  value="107103002/module5/lec6_slide1.htm">Observation</option>
      
      <option  value="107103002/module5/lec7_slide1.htm">3-D layout</option>
      
      <option  value="107103002/module6/lec1_slide1.htm">Looking at object</option>
      
      <option  value="107103002/module6/lec2_slide1.htm">Vision(in visual context)</option>
      
      <option  value="107103002/module6/lec3_slide1.htm">Convergence</option>
      
      <option  value="107103002/module7/lec1_slide1.htm">Memory drawing</option>
      
      <option  value="107103002/module7/lec2_slide1.htm">Quick sketching 1</option>
      
      <option  value="107103002/module7/lec3_slide1.htm">Quick sketching 2</option>
      
      <option  value="107103002/module8/lec1_slide1.htm">Visual elements 1</option>
      
      <option  value="107103002/module8/lec2_slide1.htm">Visual elements 2</option>
      
      <option  value="107103002/module8/lec3_slide1.htm">Visual elements 3</option>
      
      <option  value="107103002/module9/lec1_slide1.htm">Principles of composition 1</option>
      
      <option  value="107103002/module9/lec2_slide1.htm">Principles of composition 2</option>
      
      <option  value="107103002/module9/lec3_slide1.htm">Order and Chaos</option>
      
      <option  value="107103002/module10/lec1_slide1.htm">Basic colour theory</option>
      
      <option  value="107103002/module10/lec2_slide1.htm">Understanding colour in design context</option>
      
      <option  value="107103002/module10/lec3_slide1.htm">Colour interection</option>
      
      <option  value="107103002/module10/lec4_slide1.htm">Colour contrast</option>
      
      <option  value="107103002/module10/lec5_slide1.htm">Visual weight of colour</option>
      
      <option  value="107103002/module10/lec6_slide1.htm">Pattern and texture 1</option>
      
      <option  value="107103002/module10/lec7_slide1.htm">Pattern and texture 2</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>107103004</strong></td>
	<td><strong>Engineering Design</strong></td>
	<td><strong>Ergonomics for beginners: Industrial design perspective</strong></td>
	<td><strong>Prof. Debkumar Chakrabarti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="107103004/mod01lec01.mp4">Introduction</option>
      
      <option  value="107103004/mod01lec02.mp4">Design today - human aid to lifestyle</option>
      
      <option  value="107103004/mod02lec03.mp4">Journey, fitting task to man</option>
      
      <option  value="107103004/mod02lec04.mp4">Domain, philosophy and objective</option>
      
      <option  value="107103004/mod02lec05.mp4">Mutual task comfort: two way dialogue, communication model</option>
      
      <option  value="107103004/mod02lec06.mp4">Ergonomics/ human factors fundamentals</option>
      
      <option  value="107103004/mod02lec07.mp4">Physiology, (work physiology) and stress</option>
      
      <option  value="107103004/mod03lec08.mp4">Human body - structure and function, anthropometrics</option>
      
      <option  value="107103004/mod03lec09.mp4">Anthropometry: body growth and somatotypes</option>
      
      <option  value="107103004/mod03lec10.mp4">Static and synamic anthropometry: standing</option>
      
      <option  value="107103004/mod03lec11.mp4">Anthropometry landmark: sitting postures</option>
      
      <option  value="107103004/mod03lec12.mp4">Anthropometry : squatting and cross-legged postures</option>
      
      <option  value="107103004/mod03lec13.mp4">Measuring techniques</option>
      
      <option  value="107103004/mod03lec14.mp4">Statistical treatment of data and </option>
      
      <option  value="107103004/mod04lec15.mp4">Human body-structure and function</option>
      
      <option  value="107103004/mod04lec16.mp4">Posture and job relation</option>
      
      <option  value="107103004/mod04lec17.mp4">Posture and body supportive devices</option>
      
      <option  value="107103004/mod04lec18.mp4">Chair characteristics</option>
      
      <option  value="107103004/mod04lec19.mp4">Vertical work surface</option>
      
      <option  value="107103004/mod04lec20.mp4">Horizontal work surface</option>
      
      <option  value="107103004/mod04lec21.mp4">Movement</option>
      
      <option  value="107103004/mod04lec22.mp4">Work Counter</option>
      
      <option  value="107103004/mod05lec23.mp4">Communication and cognitive issues</option>
      
      <option  value="107103004/mod05lec24.mp4">Psycho-social behaviour aspects, </option>
      
      <option  value="107103004/mod05lec25.mp4">Information processing and perception</option>
      
      <option  value="107103004/mod05lec26.mp4">Cognitive aspects and mental workload</option>
      
      <option  value="107103004/mod05lec27.mp4">Human error and risk perception</option>
      
      <option  value="107103004/mod06lec28.mp4">Visual performance</option>
      
      <option  value="107103004/mod06lec29.mp4">Visual displays</option>
      
      <option  value="107103004/mod07lec30.mp4">Environmental factors influencing</option>
      
      <option  value="107103004/mod08lec31.mp4">Ergonomics design methodology</option>
      
      <option  value="107103004/mod08lec32.mp4">Ergonomics criteria/check </option>
      
      <option  value="107103004/mod08lec33.mp4">Design process involving </option>
      
      <option  value="107103004/mod08lec34.mp4">Some checklist for task easiness</option>
      
      <option  value="107103004/mod09lec35.mp4">Occupational safety and stress at workplace</option>
      
      <option  value="107103004/mod09lec36.mp4">Workstation design</option>
      
      <option  value="107103004/mod09lec37.mp4">Furniture support</option>
      
      <option  value="107103004/mod09lec38.mp4">Vertical arm reach and relevant </option>
      
      <option  value="107103004/mod09lec39.mp4">Humanising design :Design and human compatibility, comfort and adaptability aspects</option>
      
      <option  value="107103004/mod10lec40.mp4">Scope for exploration</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>107104076</strong></td>
	<td><strong>Engineering Design</strong></td>
	<td><strong>Design Paradigm: Source Of Innovation & Invention</strong></td>
	<td><strong>Dr. Amit Ray</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="107104076/lecture1/main.html"> Introduction-Biomimicry</option>
      
      <option  value="107104076/lecture2/2_1.htm">Define Paradigm-Paradigm relate to Design Education</option>
      
      <option  value="107104076/lecture3/3_1.htm">Define Problem- How do we recognize Paradigms, Paradigm & Metaphors</option>
      
      <option  value="107104076/lecture4/4_1.htm">Paradigm in Nature- About Biomimicry</option>
      
      <option  value="107104076/lecture5/5_1.htm">What is Biomimicry & Appliaction in Products</option>
      
      <option  value="107104076/lecture6/6_1.htm">Form Follows Function</option>
      
      <option  value="107104076/lecture7/7_1.htm">Simple Shape Paradigm</option>
      
      <option  value="107104076/lecture8/8_1.htm">Polyhedron and Geodesics</option>
      
      <option  value="107104076/lecture9/9_1.htm">Cuboids Packaging Design_ Non-cuboids Packaging Design</option>
      
      <option  value="107104076/lecture10/10_1.htm">Paradigm in Nature_ Simple Paradigm- Ball, Disc, Tube, Pipe</option>
      
      <option  value="107104076/lecture11/11_1.htm">Torus, Coil, Helicoids, Spiral</option>
      
      <option  value="107104076/lecture12/12_1.htm">Spoon , M�bius Strip, Enclosure, Cup, Jar, Bottle</option>
      
      <option  value="107104076/lecture13/13_1.htm"> Bubble, Blister, Skin, Wrap, Coating</option>
      
      <option  value="107104076/lecture14/14_1.htm">Capsule, Cell, Pip, Net, Pouch, Conclusion</option>
      
      <option  value="107104076/lecture15/15_1.htm">Bending & Flexing-Introduction, Saplings</option>
      
      <option  value="107104076/lecture16/16_1.htm">Hinges, Flexstraw, Bellow</option>
      
      <option  value="107104076/lecture17/17_1.htm">Elbow, Ball and Socket, Nitinol</option>
      
      <option  value="107104076/lecture18/18_1.htm">Nitinol Contd. Conclusion</option>
      
      <option  value="107104076/lecture19/19_1.htm">Smaller & Bigger</option>
      
      <option  value="107104076/lecture20/20_1.htm">Expansion & Contraction, Swelling and Squashing Paradigm</option>
      
      <option  value="107104076/lecture21/21_1.htm">Hydration and dehydration, Spring Paradigm </option>
      
      <option  value="107104076/lecture22/22_1.htm"> Spring Paradigm, Hooke�s Law, Elasticity, Flea Jump</option>
      
      <option  value="107104076/lecture23/23_1.htm">Flea Jump, What is Elasticity/ Plasticity, Stretching & Shrinking</option>
      
      <option  value="107104076/lecture24/24_1.htm">Wing Paradigm, Scissors Paradigm</option>
      
      <option  value="107104076/lecture25/25_1.htm">Scissors- Fulcrum & Lever, Handed Scissors, Mechanism of cutting,the cross blade scissors-three parts </option>
      
      <option  value="107104076/lecture26/26_1.htm">Screw Paradigm, Conclusion</option>
      
      <option  value="107104076/lecture27/27_1.htm">Joining, Ball & Socket Joints, Universal Joints</option>
      
      <option  value="107104076/lecture28/28_1.htm">Pin Joints, Velcro, Knot Joints, Bridge Joints</option>
      
      <option  value="107104076/lecture29/29_1.htm">Introduction, pipe, passage in Nature</option>
      
      <option  value="107104076/lecture30/30_1.htm">Bottleneck, Wire, Bridge</option>
      
      <option  value="107104076/lecture31/31_1.htm">Bridge (contd.), Conclusion</option>
      
      <option  value="107104076/lecture32/32_1.htm">Pregnant Woman, Fruits, Oyster, Egg, Coconut, etc.</option>
      
      <option  value="107104076/lecture33/33_1.htm"> Introduction, Human Body, Taller and Shorter, Bending & Flexing, Various Grips, Spring and Stretching</option>
      
      <option  value="107104076/lecture34/34_1.htm">Arms and legs, Types of Hand Grips, Soft Pressure, Crush Grip, Pinch Grip</option>
      
      <option  value="107104076/lecture35/35_1.htm">Paradigm in Palaeolithic Forms, Simplicity in Form (Indus Valley Terra-cotta)</option>
      

      <option  value="107104076/lecture36/36_1.htm">Design in Traditional Forms (contd.) Baster Metal Crafts, Traditional Utensils (material and form), Tradition & Modernity in Handicraft Design, Smoking Pipe, Conclusion</option>
      
      <option  value="107104076/lecture37/37_1.htm">Introduction, Wealth of Nature�s Design, and Butterfly</option>
      
      <option  value="107104076/lecture38/38_1.htm">Animal, Insects, Lotus, Conclusion</option>
      
      <option  value="107104076/lecture39/39_1.htm">Swiss Army Knife, Sign Language</option>
      
      <option  value="107104076/lecture40/40_1.htm">Wrench, Wallet, Desk-Top Computer</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>107104078</strong></td>
	<td><strong>Engineering Design</strong></td>
	<td><strong>Design Philosophy & History</strong></td>
	<td><strong>Dr. Amit Ray</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="107104078/lecture1/main.html">Design Definition</option>
      
      <option  value="107104078/lecture2/2_1.htm">Design Philosophy</option>
      
      <option  value="107104078/lecture3/3_1.htm">Creative Thinking Processd</option>
      
      <option  value="107104078/lecture4/4_1.htm">Meaning of Creativity, Cause and Principles of Creativity</option>
      
      <option  value="107104078/lecture5/5_1.htm">Creative Process</option>
      
      <option  value="107104078/lecture6/6_1.htm">What is Aesthetics; 'Cognition and Laws of Beauty'</option>
      
      <option  value="107104078/lecture7/7_1.htm">Plato's Theory of Art</option>
      
      <option  value="107104078/lecture8/8_1.htm">Dancing Shiva</option>
      
      <option  value="107104078/lecture9/9_1.htm">Modern Art</option>
      
      <option  value="107104078/lecture10/10_1.htm">Romanticism in Art</option>
      
      <option  value="107104078/lecture11/11_1.htm">'Art for Art's Sake'</option>
      
      <option  value="107104078/lecture12/12_1.htm">Cubist Sculpture, Collage (Synthetic Cubism)</option>
      
      <option  value="107104078/lecture13/13_1.htm">Cubistic Sculpture, Piet Mondrian's 'Neo-plastic Art'</option>
      
      <option  value="107104078/lecture14/14_1.htm">Minimalist Home Appliances</option>
      
      <option  value="107104078/lecture15/15_1.htm">New Perception of Aesthetic Appreciation</option>
      
      <option  value="107104078/lecture16/16_1.htm">'Readymade'; What is DADA Movement</option>
      
      <option  value="107104078/lecture17/17_1.htm">Cave Art, Hand Tools</option>
      
      <option  value="107104078/lecture18/18_1.htm">Basic Tools, Shape and Size of Prehistoric Tools</option>
      
      <option  value="107104078/lecture19/19_1.htm">History of Science in the Renaissance</option>
      
      <option  value="107104078/lecture20/20_1.htm">Linear Perspective in Architecture</option>
      
      <option  value="107104078/lecture21/21_1.htm">Industrial Revolution</option>
      
      <option  value="107104078/lecture22/22_1.htm">The Bauhaus, Weimar, Op-Art</option>
      
      <option  value="107104078/lecture23/23_1.htm">Industrial Design at Bauhaus</option>
      
      <option  value="107104078/lecture24/24_1.htm">Op in Fashion Design</option>
      
      <option  value="107104078/lecture25/25_1.htm">Product Design at Bauhaus</option>
      
      <option  value="107104078/lecture26/26_1.htm">International Style in Architecture</option>
      
      <option  value="107104078/lecture27/27_1.htm">Mid Century Modern Design</option>
      
      <option  value="107104078/lecture28/28_1.htm">Midcentury Modern Architecture, Scandinavian Midcentury Design</option>
      
      <option  value="107104078/lecture29/29_1.htm">Introduction, 'Non-functional Element' in Design</option>
      
      <option  value="107104078/lecture30/30_1.htm">Nature and Emotion, Functional Elements, Dots & Points</option>
      
      <option  value="107104078/lecture31/31_1.htm">Dot, Line, Conclusion</option>
      
      <option  value="107104078/lecture32/32_1.htm">Indian Traditional Kitchen Utensils</option>
      
      <option  value="107104078/lecture33/33_1.htm">Glasswork, Fabric Block Print, Lacquer Work, Toy Handicraft</option>
      
      <option  value="107104078/lecture34/34_1.htm">Modern Design of Household products</option>
      
      <option  value="107104078/lecture35/35_1.htm">Objective of Ethics</option>
      
      <option  value="107104078/lecture36/36_1.htm">Design Ethics (Contd.)</option>
      
      <option  value="107104078/lecture37/37_1.htm">What Is the Spirit of Ethics? Environmental Ethics</option>
      
      <option  value="107104078/lecture38/38_1.htm">Community Concept, The Land Pyramid</option>
      
      <option  value="107104078/lecture39/39_1.htm">Introduction, What is Sustainable Design?</option>
      
      <option  value="107104078/lecture40/40_1.htm">Sustainable Design (Contd.)</option>
      
      <option  value="107104078/Exercises/Exercise_1.htm">Exercise</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>107106080</strong></td>
	<td><strong>Engineering Design </strong></td>
	<td><strong>Vehicle Dynamics </strong></td>
	<td><strong>Dr. R. Krishnakumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="107106080/mod01lec01.mp4">Introduction to Vehicle Dynamics                                        </option>
<option value="107106080/mod01lec02.mp4">Longitudinal Dynamics                                                   </option>
<option value="107106080/mod01lec03.mp4">Vehicle Load Distribution � Acceleration and Braking                    </option>
<option value="107106080/mod01lec04.mp4">Brake Force Distribution, Braking Efficiency and Braking Distance       </option>
<option value="107106080/mod01lec05.mp4">Tractor � Semi Trailer                                                  </option>
<option value="107106080/mod01lec06.mp4">Tire Mechanics � An Introduction                                        </option>
<option value="107106080/mod01lec07.mp4">Mechanical Properties of Rubber                                         </option>
<option value="107106080/mod01lec08.mp4">Slip, Grip and Rolling Resistance                                       </option>
<option value="107106080/mod01lec09.mp4">Tire Construction and Force Development                                 </option>
<option value="107106080/mod01lec10.mp4">Contact Patch and Contact Pressure Distribution                         </option>
<option value="107106080/mod01lec11.mp4">Tire Brush Model                                                        </option>
<option value="107106080/mod01lec12.mp4">Lateral Force Generation                                                </option>
<option value="107106080/mod01lec13.mp4">Ply Steer and Conicity (Part 1)                                         </option>
<option value="107106080/mod01lec14.mp4">Ply Steer and Conicity (Part 2)                                         </option>
<option value="107106080/mod01lec15.mp4">Tire Models � Magic Formula                                             </option>
<option value="107106080/mod01lec16.mp4">Classification of Tyre Models and Combined Slip                         </option>
<option value="107106080/mod01lec17.mp4">Lateral Dynamics - An Introduction                                      </option>
<option value="107106080/mod01lec18.mp4">Lateral Dynamics � Bicycle Model                                        </option>
<option value="107106080/mod01lec19.mp4">Lateral Dynamics � Stability and Steering Conditions                    </option>
<option value="107106080/mod01lec20.mp4">Understeer Gradient and State Space Approach                            </option>
<option value="107106080/mod01lec21.mp4">Handling Response of a Vehicle                                          </option>
<option value="107106080/mod01lec22.mp4">Mimuro Plot for Lateral Transient Response (Part 1)                     </option>
<option value="107106080/mod01lec23.mp4">Mimuro Plot for Lateral Transient Response (Part 2)                     </option>
<option value="107106080/mod01lec24.mp4">Parameters affecting vehicle handling characteristics                   </option>
<option value="107106080/mod01lec25.mp4">Subjective and Objective Evaluation of Vehicle Handling (Part 1)        </option>
<option value="107106080/mod01lec26.mp4">Subjective and Objective Evaluation of Vehicle Handling (Part 2)        </option>
<option value="107106080/mod01lec27.mp4">Subjective and Objective Evaluation of Vehicle Handling and Rollover P  </option>
<option value="107106080/mod01lec28.mp4">Rollover Prevention (contd..) and Vertical Dynamics                     </option>
<option value="107106080/mod01lec29.mp4">Vertical Dynamics-An Introduction                                       </option>
<option value="107106080/mod01lec30.mp4">Vertical Dynamics � Quarter Car Model                                   </option>
<option value="107106080/mod01lec31.mp4">Noise, Vibration and Harshness � Random Processes                       </option>
<option value="107106080/mod01lec32.mp4">Random Process and Conclusion [contd.]                                  </option>

	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>109104075</strong></td>
	<td><strong>Engineering Design</strong></td>
	<td><strong>Color in Design</strong></td>
	<td><strong>Dr. Amit Ray</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="109104075/lecture1/main.html">Introduction</option>
      
      <option  value="109104075/lecture2/2_1.htm">Introduction Cond.</option>
      
      <option  value="109104075/lecture3/3_1.htm">Color Theory</option>
      
      <option  value="109104075/lecture4/4_1.htm">Elements of Color</option>
      
      <option  value="109104075/lecture5/5_1.htm">Color Illusion</option>
      
      <option  value="109104075/lecture6/6_1.htm">Introduction to Color Properties Understanding Value</option>
      
      <option  value="109104075/lecture7/7_1.htm">Color Hue</option>
      
      <option  value="109104075/lecture8/8_1.htm">Color Intensity</option>
      
      <option  value="109104075/lecture9/9_1.htm">Color Pattern</option>
      
      <option  value="109104075/lecture10/10_1.htm">Introduction to the Science of Color</option>
      
      <option  value="109104075/lecture11/11_1.htm">Primary Colors</option>
      
      <option  value="109104075/lecture12/12_1.htm">Primary & Secondary Color applied in Art</option>
      
      <option  value="109104075/lecture13/13_1.htm">Introduction to Design</option>
      
      <option  value="109104075/lecture14/14_1.htm">Color Value in Product Design</option>
      
      <option  value="109104075/lecture15/15_1.htm">Modern Art in Design</option>
      
      <option  value="109104075/lecture16/16_1.htm">Piet Mondrian�s Neo-plastic Art and Composition</option>
      
      <option  value="109104075/lecture17/17_1.htm">Composition and Space</option>
      
      <option  value="109104075/lecture18/18_1.htm">Minimalist Design in Architecture</option>
      
      <option  value="109104075/lecture19/19_1.htm">Color Illusion.</option>
      
      <option  value="109104075/lecture20/20_1.htm">Blind-spot</option>
      
      <option  value="109104075/lecture21/21_1.htm">Introduction- Meaning of Color</option>
      
      <option  value="109104075/lecture22/22_1.htm">Color has Weight</option>
      
      <option  value="109104075/lecture23/23_1.htm">Color make object appear new old</option>
      
      <option  value="109104075/lecture24/24_1.htm">Effect of Color in Food & Beverage</option>
      
      <option  value="109104075/lecture25/25_1.htm">Color & Appetite</option>
      
      <option  value="109104075/lecture26/26_1.htm">Significance of Color</option>
      
      <option  value="109104075/lecture27/27_1.htm">Psychological Effect of Color</option>
      
      <option  value="109104075/lecture28/28_1.htm">What is Color Visibility</option>
      
      <option  value="109104075/lecture29/29_1.htm">Most Projected Color</option>
      
      <option  value="109104075/lecture30/30_1.htm">Application of Visibility Parameters</option>
      
      <option  value="109104075/lecture31/31_1.htm">Color Communication</option>
      
      <option  value="109104075/lecture32/32_1.htm">Color on Birthday</option>
      
      <option  value="109104075/lecture33/33_1.htm">Color and Culture</option>
      
      <option  value="109104075/lecture34/34_1.htm">Traditional Cultural Color Symbolism</option>
      
      <option  value="109104075/lecture35/35_1.htm">India- Holi</option>
      
      <option  value="109104075/lecture36/36_1.htm">Single Color Meaning</option>
      
      <option  value="109104075/lecture37/37_1.htm">Why color in nature</option>
      
      <option  value="109104075/lecture38/38_1.htm">Color in- signalling</option>
      
      <option  value="109104075/lecture39/39_1.htm">Color and Emotion Meaning of Color</option>
      
      <option  value="109104075/lecture40/40_1.htm">Non-functional Elements Understanding Emotions</option>
      
      <option  value="109104075/lecture41/41_1.htm">Behavioural Level</option>
      
      <option  value="109104075/lecture42/42_1.htm">Non-functional Sensor related to Emotion</option>
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