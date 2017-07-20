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
<title>Nano</title>
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
	<td><strong>118106019</strong></td>
	<td><strong>Nanotechnology</strong></td>
	<td><strong>Nanobiotechnology</strong></td>
	<td><strong>Dr. K. Uma Maheswari</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="118106019/Module 1/Lecture 1/Lecture 1.pdf">Introduction to Self-assembly</option>
      
      <option  value="118106019/Module 1/Lecture 2/Lecture 2.pdf">Self-assembly of proteins & its Applications</option>
      
      <option  value="118106019/Module 1/Lecture 3/Lecture 3.pdf">Classes of Self-assembling peptides </option>
      
      <option  value="118106019/Module 2/Lecture 1/Lecture 1.pdf"> Introduction to DNA Nanotechnology</option>
      
      <option  value="118106019/Module 2/Lecture 2/Lecture 2.pdf">Various Self-assembled Strcutures of Oligonucleotides </option>
      
      <option  value="118106019/Module 2/Lecture 3/Lecture 3.pdf">Different types of Active Oligonucleotide Structures</option>
      
      <option  value="118106019/Module 2/Lecture 4/Lecture 4.pdf">Applications of Self-assembled DNA Nanostructures</option>
      
      <option  value="118106019/Module 3/Lecture 1/Lecture 1.pdf">Introduction to lipids</option>
      
      <option  value="118106019/Module 3/Lecture 2/Lecture 2.pdf">Various Self-assembled Lipid Structures</option>
      
      <option  value="118106019/Module 4/Lecture 1/Lecture 1.pdf">Introduction to Biomineralization</option>
      
      <option  value="118106019/Module 4/Lecture 2/Lecture 2.pdf">Different types of Biomineralization</option>
      
      <option  value="118106019/Module 5/Lecture 1/Lecture 1.pdf">Introduction to Biogenic Nanoparticles</option>
      
      <option  value="118106019/Module 5/Lecture 2/Lecture 2.pdf">Synthesis of Biogenic Nanoparticles</option>
      
      <option  value="118106019/Module 5/Lecture 3/Lecture 3.pdf">Application of Biogenic Nanoparticles</option>
      
      <option  value="118106019/Module 6/Lecture 1/Lecture 1.pdf">Introduction to Stealth Nanoparticles </option>
      
      <option  value="118106019/Module 6/Lecture 2/Lecture 2.pdf">Immune recognition pathways</option>
      
      <option  value="118106019/Module 6/Lecture 3/Lecture 3.pdf">Strategies to impart stealth Characteristics to nanocarriers</option>
      
      <option  value="118106019/Module 7/Lecture 1/Lecture 1.pdf">Challenges in Gene Delivery</option>
      
      <option  value="118106019/Module 7/Lecture 2/Lecture 2.pdf">Adenoviral mediated Gene delivery</option>
      
      <option  value="118106019/Module 7/Lecture 3/Lecture 3.pdf">Different types of nanoparticles for gene delivery</option>
      
      <option  value="118106019/Module 7/Lecture 4/Lecture 4.pdf">Applications of Viral nanoparticles</option>
      
      <option  value="118106019/Module 8/Lecture 1/Lecture 1.pdf">Introduction to Smart Drug delivery System</option>
      
      <option  value="118106019/Module 8/Lecture 2/Lecture 2.pdf">Various types of Smart delivery system</option>
      
      <option  value="118106019/Module 8/Lecture 3/Lecture 3.pdf">Different types of Chemo-Responsive Systems</option>
      
      <option  value="118106019/Module 8/Lecture 4/Lecture 4.pdf">Other Responsive systems</option>
      
      <option  value="118106019/Module 8/Lecture 5/Lecture 5.pdf">Redox, Field and Ultrasound responsive Systems</option>
      
      <option  value="118106019/Module 8/Lecture 6/Lecture 6.pdf">Various patterning techniques involved in the fabrication of Responsive systems</option>
      
      <option  value="118106019/Module 9/Lecture 1/Lecture 1.pdf">Introduction to Targeting and Targeting strategies</option>
      
      <option  value="118106019/Module 9/Lecture 2/Lecture 2.pdf">Active Targeting and challenges faced in Active Targeting</option>
      
      <option  value="118106019/Module 9/Lecture 3/Lecture 3.pdf">Physical and Chemical Targeting</option>
      
      <option  value="118106019/Module 9/Lecture 4/Lecture 4.pdf">Ultrasound based targeting</option>
      
      <option  value="118106019/Module 10/Lecture 1/Lecture 1.pdf">Introduction to stem cells</option>
      
      <option  value="118106019/Module 10/Lecture 2/Lecture 2.pdf">Tissue Engineering Triad</option>
      
      <option  value="118106019/Module 10/Lecture 3/Lecture 3.pdf">Influence of Nanotopography</option>
      
      <option  value="118106019/Module 10/Lecture 4/Lecture 4.pdf">Influence of Nanochemistry and Nanomechanics</option>
      
      <option  value="118106019/Module 11/Lecture 1/Lecture 1.pdf">Introduction to Biosensors</option>
      
      <option  value="118106019/Module 11/Lecture 2/Lecture 2.pdf">Classification of Biosensors based on Transducers</option>
      
      <option  value="118106019/Module 11/Lecture 3/Lecture 3.pdf">Types of Biosensors</option>
      
      <option  value="118106019/Module 11/Lecture 4/Lecture 4.pdf">Cell and Tissue Based Biosensors</option>
      
      <option  value="118106019/Module 12/Lecture 1/Lecture 1.pdf">Introduction to Nanoparticles for live cell dynamics </option>
      
      <option  value="118106019/Module 12/Lecture 2/Lecture 2.pdf">Applications of Live cell dynamics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>118107015</strong></td>
	<td><strong>Nanotechnology</strong></td>
	<td><strong>Nanobiotechnology</strong></td>
	<td><strong>Dr. R. P. Singh ,Dr. Naveen kr. Navani</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="118107015/module1/lecture1/lecture1.pdf">Introduction</option>
      
      <option  value="118107015/module1/lecture2/lecture2.pdf">History</option>
      
      <option  value="118107015/module1/lecture3/lecture3.pdf">History of Nanotechnology-Continued </option>
      
      <option  value="118107015/module2/lecture1/lecture1.pdf">Nanomaterials for Biotechnolical Applications</option>
      
      <option  value="118107015/module2/lecture2/lecture2.pdf">Carbon Nanotubes</option>
      
      <option  value="118107015/module2/lecture3/lecture3.pdf">Nanowires </option>
      
      <option  value="118107015/module2/lecture4/lecture4.pdf">Synthesizing Nanoparticles </option>
      
      <option  value="118107015/module2/lecture5/lecture5.pdf">Green Synthesis of Nanoparticles</option>
      
      <option  value="118107015/module2/lecture6/lecture6.pdf">Nanoparticle synthesis of Fungi</option>
      
      <option  value="118107015/module2/lecture7/lecture7.pdf">Green Synthesis of Nanoparticles (Plant metabolites)</option>
      
      <option  value="118107015/module2/lecture8/lecture8.pdf">A few examples of production of metal nanoparticles using plant</option>
      
      <option  value="118107015/module2/lecture9/lecture9.pdf">Characterization of Nanomaterials</option>
      
      <option  value="118107015/module3/lecture1/lecture1.pdf">Varioustypes of transducing elements and their applications in Bio-Nanotechnology</option>
      
      <option  value="118107015/module3/lecture2/lecture2.pdf">ELECTROCHEMICAL TRANSDUCER</option>
      
      <option  value="118107015/module3/lecture3/lecture3.pdf">Optical Transducers</option>
      
      <option  value="118107015/module3/lecture4/lecture4.pdf">Biosensors in Nanotechnology</option>
      
      <option  value="118107015/module3/lecture5/lecture5.pdf">Quantum Dots</option>
      
      <option  value="118107015/module3/lecture6/lecture6.pdf">Gold Nanoparticles as Biosensors</option>
      
      <option  value="118107015/module3/lecture7/lecture7.pdf">DNA detection</option>
      
      <option  value="118107015/module3/lecture8/lecture8.pdf">SMALL SCALE SYSTEMS FOR DRUG DELIVERY</option>
      
      <option  value="118107015/module4/lecture1/lecture1.pdf">Application of Nanobiotechnology in the treatment o Infectious Diseases</option>
      
      <option  value="118107015/module4/lecture2/lecture2.pdf">VIRAL INFECTIOUS DISEASES</option>
      
      <option  value="118107015/module4/lecture3/lecture3.pdf">FUNGAL INFECTIOUS DISEASES</option>
      
      <option  value="118107015/module4/lecture4/lecture4.pdf">Applications of Nanotechnology in Chronic Diseases-I</option>
      
      <option  value="118107015/module4/lecture5/lecture5.pdf">Cardiovascular Diseases</option>
      
      <option  value="118107015/module4/lecture6/lecture6.pdf">Chronic Disease</option>
      
      <option  value="118107015/module4/lecture7/lecture7.pdf">Hypertension </option>
      
      <option  value="118107015/module4/lecture8/lecture8.pdf">Nanotechnology Applications in Cancer Diagnosis and Therapy</option>
      
      <option  value="118107015/module4/lecture9/lecture9.pdf">Pancreatic Cancer</option>
      
      <option  value="118107015/module4/lecture10/lecture10.pdf">Targeted delivery of anticancer drugs </option>
      
      <option  value="118107015/module4/lecture11/lecture11.pdf">Gold Nanoparticles in Drug Delivery Applications</option>
      
      <option  value="118107015/module4/lecture12/lecture12.pdf">Functionalized gold nanoparticles for protein delivery</option>
      
      <option  value="118107015/module5/lecture1/lecture1.pdf">Nanobiotechnology in Environment</option>
      
      <option  value="118107015/module5/lecture2/lecture2.pdf">Environmental remediation </option>
      
      <option  value="118107015/module5/lecture3/lecture3.pdf">Carbon nanotube</option>
      
      <option  value="118107015/module5/lecture4/lecture4.pdf">Applications of Nanobiotechnology in Food Contaminant Detection</option>
      
      <option  value="118107015/module5/lecture5/lecture5.pdf">DETECTION OF PATHOGENS IN FOOD</option>
      
      <option  value="118107015/module5/lecture6/lecture6.pdf">Opportunities for Nanobiotechnology in Food Industry</option>
      
      <option  value="118107015/module5/lecture7/lecture7.pdf">NANAOBIOTECHNOLOGY IN FOOD PRESERVATION</option>
      
      <option  value="118107015/module5/lecture8/lecture8.pdf">Risk analysis of the use of nanotechnology in food industry</option>
      
      <option  value="118107015/module5/lecture9/lecture9.pdf">Applications of biotechnology in wastewater treatment</option>
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
