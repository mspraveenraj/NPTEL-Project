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
<title>Electronics</title>
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
	<td><strong>117101001</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Adv. Digital Signal Processing - Multirate and wavelets</strong></td>
	<td><strong>Prof. V.M. Gadre</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117101001/mod01lec01.mp4">L1- Introduction</option>
      
      <option  value="117101001/mod01lec02.mp4">L2-The Haar Wavelet</option>
      
      <option  value="117101001/mod01lec03.mp4">L3-The Haar Multiresolution Analysis</option>
      
      <option  value="117101001/mod01lec04.mp4">L4-Wavelets And Multirate Digital Signal Processing</option>
      
      <option  value="117101001/mod01lec05.mp4">L5-Equivalence - Functions And Sequences</option>
      
      <option  value="117101001/mod01lec06.mp4">L6-The Haar Filter Bank</option>
      
      <option  value="117101001/mod01lec07.mp4">L7-Haar Filter Bank Analysis And Synthesis</option>
      
      <option  value="117101001/mod01lec08.mp4">L8-Relating psi, phi and the Filters</option>
      
      <option  value="117101001/mod01lec09.mp4">L9-Iterating the filter bank from Psi, Phi</option>
      
      <option  value="117101001/mod01lec10.mp4">L10-Z-Domain Analysis Of Multirate Filter Bank</option>
      
      <option  value="117101001/mod01lec11.mp4">L11-Two Channel Filter Bank</option>
      
      <option  value="117101001/mod01lec12.mp4">L12-Perfect Reconstruction - Conjugate Quadrature</option>
      
      <option  value="117101001/mod01lec13.mp4">L13-Conjugate Quadrature Filters - Daubechies Family of MRA</option>
      
      <option  value="117101001/mod01lec14.mp4">L14-Daubechies' Filter Banks - Conjugate Quadrature Filters</option>
      
      <option  value="117101001/mod01lec15.mp4">L15-Time And Frequency Joint Perspective</option>
      
      <option  value="117101001/mod01lec16.mp4">L16- Ideal Time Frequency Behaviour</option>
      
      <option  value="117101001/mod01lec17.mp4">L17- The Uncertainty Principle</option>
      
      <option  value="117101001/mod01lec18.mp4">L18- Time Bandwidth Product Uncertainty</option>
      
      <option  value="117101001/mod01lec19.mp4">L19- Evaluating and Bounding squareroot t.squareroot omega</option>
      
      <option  value="117101001/mod01lec20.mp4">L20- The Time Frequency Plane & its Tilings</option>
      
      <option  value="117101001/mod01lec21.mp4">L21- Short time Fourier Transform & Wavelet Transform in General</option>
      
      <option  value="117101001/mod01lec22.mp4">L22- Reconstruction & Admissibility</option>
      
      <option  value="117101001/mod01lec23.mp4">L23- Admissibility in Detail Discretization of Scale</option>
      
      <option  value="117101001/mod01lec24.mp4">L24- Logarithmic Scale Discretization, Dyadic Discretization</option>
      
      <option  value="117101001/mod01lec25.mp4">L25- The Theorem of (DYADIC) Multiresolution Analysis</option>
      
      <option  value="117101001/mod01lec26.mp4">L26- Proof of the Theorem of (DYADIC) Multiresolution Analysis</option>
      
      <option  value="117101001/mod01lec27.mp4">L27- Introducing Variants of The Multiresolution Analysis Concept</option>
      
      <option  value="117101001/mod01lec28.mp4">L28- JPEG 2000 5/3 FilterBank & Spline MRA</option>
      
      <option  value="117101001/mod01lec29.mp4">L29- Orthogonal Multiresolution Analysis with Splines</option>
      
      <option  value="117101001/mod01lec30.mp4">L30- Building Piecewise Linear Scaling Function, Wavelet</option>
      
      <option  value="117101001/mod01lec31.mp4">L31- The Wave Packet Transform</option>
      
      <option  value="117101001/mod01lec32.mp4">L32- Nobel Identities & The Haar Wave Packet Transform</option>
      
      <option  value="117101001/mod01lec33.mp4">L33- The Lattice Structure for Orthogonal Filter Banks</option>
      
      <option  value="117101001/mod01lec34.mp4">L34- Constructing the Lattice & its Variants</option>
      
      <option  value="117101001/mod01lec35.mp4">L35- The Lifting Structure & Polyphase Matrices</option>
      
      <option  value="117101001/mod01lec36.mp4">L36-The Polyphase Approach - The Modulation Approach</option>
      
      <option  value="117101001/mod01lec37.mp4">L-37 Modulation Analysis and The 3-Band Filter Bank, Applications</option>
      
      <option  value="117101001/mod01lec38.mp4">L38-The Applications *Data Mining, *Face Recognition</option>
      
      <option  value="117101001/mod01lec39.mp4">L39-Proof that a non-zero function can not be both time and band-limited </option>
      
      <option  value="117101001/mod01lec40.mp4">L40- M-Band Filter Banks and Looking Ahead</option>
      
      <option  value="117101001/mod01lec41.mp4">L41-Tutorial -Session 1</option>
      
      <option  value="117101001/mod01lec42.mp4">L42-Student's Presentation</option>
      
      <option  value="117101001/mod01lec43.mp4">L43-Tutorial on Uncertainty Product</option>
      
      <option  value="117101001/mod01lec44.mp4">L44-Tutorial on Two band Filter Bank</option>
      
      <option  value="117101001/mod01lec45.mp4">L45-Tutorial -Frequency Domain Analysis of Two band Filter Bank</option>
      
      <option  value="117101001/mod01lec46.mp4">L46-Zoom in and Zoom out using Wavelet Transform</option>
      
      <option  value="117101001/mod01lec47.mp4">L47-More Thoughts on Wavelets : Zooming In</option>
      
      <option  value="117101001/mod01lec48.mp4">L48-Towards selecting Wavelets through vanishing moments</option>
      
      <option  value="117101001/mod01lec49.mp4">L49-In Search of Scaling Coefficients</option>
      
      <option  value="117101001/mod01lec50.mp4">L50-Wavelet Applications</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117101002</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Advanced Optical Communication</strong></td>
	<td><strong>Prof. R.K. Shevgaonkar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117101002/mod01lec01.mp4">L1-Introduction</option>
      
      <option  value="117101002/mod01lec02.mp4">L2-Basics of Light</option>
      
      <option  value="117101002/mod01lec03.mp4">L3-Ray Model -I</option>
      
      <option  value="117101002/mod01lec04.mp4">L4-Ray Model -II</option>
      
      <option  value="117101002/mod01lec05.mp4">L5-Wave Model-I</option>
      
      <option  value="117101002/mod01lec06.mp4">L6-Wave Model-II</option>
      
      <option  value="117101002/mod01lec07.mp4">L7-Wave Model-III</option>
      
      <option  value="117101002/mod01lec08.mp4">L8-Signal Distortion - I</option>
      
      <option  value="117101002/mod01lec09.mp4">L9-Signal Distortion - II</option>
      
      <option  value="117101002/mod01lec10.mp4">L10-Signal Distortion - III</option>
      
      <option  value="117101002/mod01lec11.mp4">L11-Practical issues in Implementation of Fiber link</option>
      
      <option  value="117101002/mod01lec12.mp4">L12-Optical Sources</option>
      
      <option  value="117101002/mod01lec13.mp4">L13-Light Emitting Diodes -I</option>
      
      <option  value="117101002/mod01lec14.mp4">L14-Light Emitting Diodes -II</option>
      
      <option  value="117101002/mod01lec15.mp4">L15-Laser - I</option>
      
      <option  value="117101002/mod01lec16.mp4">L16-Laser - II</option>
      
      <option  value="117101002/mod01lec17.mp4">L17-Laser - III</option>
      
      <option  value="117101002/mod01lec18.mp4">L18-Laser - IV</option>
      
      <option  value="117101002/mod01lec19.mp4">L19-Laser - V + Photon Detector</option>
      
      <option  value="117101002/mod01lec20.mp4">L20-Photo Diodes and Detector  Noise</option>
      
      <option  value="117101002/mod01lec21.mp4">L21-Photo Detector</option>
      
      <option  value="117101002/mod01lec22.mp4">L22-Optical Receivers - I</option>
      
      <option  value="117101002/mod01lec23.mp4">L23-Optical Receivers - II</option>
      
      <option  value="117101002/mod01lec24.mp4">L24-Receiver Sensitivity Degradation</option>
      
      <option  value="117101002/mod01lec25.mp4">L25-Fiber Optic Link Design</option>
      
      <option  value="117101002/mod01lec26.mp4">L26-Wavelength Division Multiplexed Systems</option>
      
      <option  value="117101002/mod01lec27.html">L27-EDFA</option>
      
      <option  value="117101002/mod01lec28.mp4">L28-Integrated Optics - I</option>
      
      <option  value="117101002/mod01lec29.mp4">L29-Integrated Optics - II</option>
      
      <option  value="117101002/mod01lec30.mp4">L30-Tutorials -I</option>
      
      <option  value="117101002/mod01lec31.mp4">L31-Tutorials -II</option>
      
      <option  value="117101002/mod01lec32.mp4">L32-Introduction to Non-Linear Fiber Optics</option>
      
      <option  value="117101002/mod01lec33.mp4">L33-Non-linear Schrodinger Equation</option>
      
      <option  value="117101002/mod01lec34.mp4">L34-Group Velocity Dispersion (GVD)</option>
      
      <option  value="117101002/mod01lec35.mp4">L35-Self Phase Modulation (SPM)</option>
      
      <option  value="117101002/mod01lec36.mp4">L36-Solitonic Communication</option>
      
      <option  value="117101002/mod01lec37.mp4">L37-Raman Amplifier</option>
      
      <option  value="117101002/mod01lec38.mp4">L38-Cross Phase Modulation and four wave mixing</option>
      
      <option  value="117101002/mod01lec39.mp4">L39-Laboratory Experiments -I</option>
      
      <option  value="117101002/mod01lec40.mp4">L40-Laboratory Experiments -II</option>
      
      <option  value="117101002/mod01lec41.mp4">L41-Laboratory Experiments -III</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117101050</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Broadband Networks: Concepts and Technology</strong></td>
	<td><strong>Prof. Abhay Karandikar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> 
     <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117101050/lec01.mp4">Introduction to Broadband Networks</option>
      
      <option  value="117101050/lec02.mp4">Qos in Packet Switching and ATM</option>
      
      <option  value="117101050/lec03.mp4">ATM Networks</option>
      
      <option  value="117101050/lec04.mp4">Effective Bandwidth - I</option>
      
      <option  value="117101050/lec05.mp4">Effective Bandwidth - II</option>
      
      <option  value="117101050/lec06.mp4">Traffic Descriptor in ATM</option>
      
      <option  value="117101050/lec07.mp4">Calculus for QOS - I</option>
      
      <option  value="117101050/lec08.mp4">Calculus For Qos - II</option>
      
      <option  value="117101050/lec09.mp4">Packet Scheduling Algorithm Introduction</option>
      
      <option  value="117101050/lec10.mp4">Fluid Fair Queueing and Weighted Fair Queueing</option>
      
      <option  value="117101050/lec11.mp4">Virtual Time In Scheduling</option>
      
      <option  value="117101050/lec12.mp4">Fairness of WFO and SCFO Scheduling Algorithms</option>
      
      <option  value="117101050/lec13.mp4">Rate Proportional Servers</option>
      
      <option  value="117101050/lec14.mp4">Latency Rate Servers - I</option>
      
      <option  value="117101050/lec15.mp4">Latency Rate Servers - II And Delay Bounds</option>
      
      <option  value="117101050/lec16.mp4">QOS In Best Effort Internet</option>
      
      <option  value="117101050/lec17.mp4">TCP Congestion Control</option>
      
      <option  value="117101050/lec18.mp4">Analysis of TCP</option>
      
      <option  value="117101050/lec19.mp4">TCP Throughput</option>
      
      <option  value="117101050/lec20.mp4">Buffer Management</option>
      
      <option  value="117101050/lec21.mp4">IP Addressing Scheme</option>
      
      <option  value="117101050/lec22.mp4">IP Addressing Lookup And Packet Classification</option>
      
      <option  value="117101050/lec23.mp4">IP Over ATM</option>
      
      <option  value="117101050/lec24.mp4">Multiple Label Switching (MPLS)</option>
      
      <option  value="117101050/lec25.mp4">MPLS and Traffic Engineering</option>
      
      <option  value="117101050/lec26.mp4">Optical Network and MPLS</option>
      
      <option  value="117101050/lec27.mp4">Integrated Service Internet (IntServ) and RSVP</option>
      
      <option  value="117101050/lec28.mp4">Differentiated Services Internet</option>
      
      <option  value="117101050/lec29.mp4">Voice over IP</option>
      
      <option  value="117101050/lec30.mp4">RTP</option>
      
      <option  value="117101050/lec31.mp4">Metro Ethernet Access Networks</option>
      
      <option  value="117101050/lec32.mp4">Metro Ethernet Access Networks</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117101051</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Communication</strong></td>
	<td><strong>Prof. Bikash Kumar Dey</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117101051/lec01.mp4">Introduction to Digital Communication</option>
      
      <option  value="117101051/lec02.mp4">Sampling</option>
      
      <option  value="117101051/lec03.mp4">Quantization , PCM and Delta Modulation</option>
      
      <option  value="117101051/lec04.mp4">Probability and Random Process</option>
      
      <option  value="117101051/lec05.mp4">Probability and Random Processes (Part - 2)</option>
      
      <option  value="117101051/lec06.mp4">Channels and their Models</option>
      
      <option  value="117101051/lec07.mp4">Channels and their Models (Part -2)</option>
      
      <option  value="117101051/lec08.mp4">Information Theory (Part - 1)</option>
      
      <option  value="117101051/lec09.mp4">Information Theory (Part - 2)</option>
      
      <option  value="117101051/lec10.mp4">Bandpass Signal Representation (Part 1)</option>
      
      <option  value="117101051/lec11.mp4">Bandpass Signal Representation (Part - 2)</option>
      
      <option  value="117101051/lec12.mp4">Digital Modulation Techniques (Part - 1)</option>
      
      <option  value="117101051/lec13.mp4">Digital Modulation Techniques (Part - 2)</option>
      
      <option  value="117101051/lec14.mp4">Digital Modulation Techniques (Part - 3)</option>
      
      <option  value="117101051/lec15.mp4">Digital Modulation Techniques Part - 4</option>
      
      <option  value="117101051/lec16.mp4">Digital Modulation Techniques Part - 5</option>
      
      <option  value="117101051/lec17.mp4">Digital Modulation Techniques (Part - 6)</option>
      
      <option  value="117101051/lec18.mp4">Digital Modulation Techniques (Part - 7)</option>
      
      <option  value="117101051/lec19.mp4">Digital Modulation Techniques (part - 8)</option>
      
      <option  value="117101051/lec20.mp4">Digital Modulation Techniques (Part - 9)</option>
      
      <option  value="117101051/lec21.mp4">Digital Modulation Techniques (Part - 10)</option>
      
      <option  value="117101051/lec22.mp4">Probability of Error Calculation</option>
      
      <option  value="117101051/lec23.mp4">Calculation of Probability of Error</option>
      
      <option  value="117101051/lec24.mp4">Calculation of Probability of Error</option>
      
      <option  value="117101051/lec25.mp4">Equalizers</option>
      
      <option  value="117101051/lec26.mp4">Source Coding (Part - 1)</option>
      
      <option  value="117101051/lec27.mp4">Source Coding (Part - 2)</option>
      
      <option  value="117101051/lec28.mp4">Source Coding Part - 3</option>
      
      <option  value="117101051/lec29.mp4">Source Coding Part 4</option>
      
      <option  value="117101051/lec30.mp4">Channel Coding</option>
      
      <option  value="117101051/lec31.mp4">Fundamentals of OFDM</option>
      
      <option  value="117101051/lec32.mp4">Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117101053</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Information Theory and Coding</strong></td>
	<td><strong>Prof. S.N. Merchant</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117101053/mod01lec01.mp4">L1- Introduction to Information Theory and Coding</option>
      
      <option  value="117101053/mod01lec02.mp4">L2-Definition of Information Measure and Entropy</option>
      
      <option  value="117101053/mod01lec03.mp4">L3-Extention of An Information Source and Markov Source</option>
      
      <option  value="117101053/mod01lec04.mp4">L4-Adjoint of An Information Source, Joint and Conditional Information Measure</option>
      
      <option  value="117101053/mod01lec05.mp4">L5-Properties of Joint and Conditional Information Measures and A Morkov Source </option>
      
      <option  value="117101053/mod01lec06.mp4">L6-Asymptotic Properties of Entropy and Problem Solving in Entropy</option>
      
      <option  value="117101053/mod01lec07.mp4">L7-Block Code and its Properties</option>
      
      <option  value="117101053/mod01lec08.mp4">L8-Instantaneous Code and Its Properties</option>
      
      <option  value="117101053/mod01lec09.mp4">L9-Kraft-Mcmillan Equality and Compact Codes</option>
      
      <option  value="117101053/mod01lec10.mp4">L10-Shannon's First Theorem</option>
      
      <option  value="117101053/mod01lec11.mp4">L11-Coding Strategies and Introduction to Huffman Coding</option>
      
      <option  value="117101053/mod01lec12.mp4">L12-Huffman Coding and Proof of Its Optamality</option>
      
      <option  value="117101053/mod01lec13.mp4">L13-Competitive Optamality of The Shannon Code</option>
      
      <option  value="117101053/mod01lec14.mp4">L14-Non-Binary Huffman Code and Other Codes</option>
      
      <option  value="117101053/mod01lec15.mp4">L15-Adaptive Huffman Coding Part-I</option>
      
      <option  value="117101053/mod01lec16.mp4">L16-Adaptive Huffman Coding Part-II</option>
      
      <option  value="117101053/mod01lec17.mp4">L17-Shannon-Fano-Elias Coding and Introduction to Arithmetic Coding</option>
      
      <option  value="117101053/mod01lec18.mp4">L18-Arithmetic Coding Part-I</option>
      
      <option  value="117101053/mod01lec19.mp4">L19-Arithmetic Coding Part-II</option>
      
      <option  value="117101053/mod01lec20.mp4">L20-Introdution to Information Channels</option>
      
      <option  value="117101053/mod01lec21.mp4">L21-Equivocation and Mutual Information</option>
      
      <option  value="117101053/mod01lec22.mp4">L22-Properties of Different Information Channels</option>
      
      <option  value="117101053/mod01lec23.mp4">L23-Reduction of Information Channels</option>
      
      <option  value="117101053/mod01lec24.mp4">L24-Properties of Mutual Information and Introdution to Channel Capacity</option>
      
      <option  value="117101053/mod01lec25.mp4">L25-Calculation of Channel Capacity for Different Information Channels</option>
      
      <option  value="117101053/mod01lec26.mp4">L26-Shannon's Second Theorem</option>
      
      <option  value="117101053/mod01lec27.mp4">L27-Discussion On Error Free Communication Over Noisy Channel</option>
      
      <option  value="117101053/mod01lec28.mp4">L28-Error Free Communication Over A Binary Symmetric Channel and Introdution to Continous Sources and Channels</option>
      
      <option  value="117101053/mod01lec29.mp4">L29-Differential Entropy and Evaluation of Mutual Information for Continuous Sources and Channels</option>
      
      <option  value="117101053/mod01lec30.mp4">L30-Channel Capacity of A BandLimited Continuous Channel</option>
      
      <option  value="117101053/mod01lec31.mp4">L31-Introduction to Rate-Distortion Theory</option>
      
      <option  value="117101053/mod01lec32.mp4">L32-Definition and Properties of Rate-Distortion Functions</option>
      
      <option  value="117101053/mod01lec33.mp4">L33-Calculation of Rate-Distortion Functions</option>
      
      <option  value="117101053/mod01lec34.mp4">L34-Computational Approach for Calculation of Rate-Distortion Functions</option>
      
      <option  value="117101053/mod01lec35.mp4">L35-Introdution to Quantization</option>
      
      <option  value="117101053/mod01lec36.mp4">L36-Lloyd-Max Quantizer</option>
      
      <option  value="117101053/mod01lec37.mp4">L37-Companded Quantization</option>
      
      <option  value="117101053/mod01lec38.mp4">L38-Variable Length Coding and Problem Solving in Quantizer Design</option>
      
      <option  value="117101053/mod01lec39.mp4">L39-Vector Quantization</option>
      
      <option  value="117101053/mod01lec40.mp4">L40-Transform Coding Part-I</option>
      
      <option  value="117101053/mod01lec41.mp4">L41-Transform Coding Part-II</option>
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117101054</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Optical Communication</strong></td>
	<td><strong>Prof. R.K. Shevgaonkar,Prof. D.K. Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select1" id="select1" onchange="goToPage('select1');"><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/117101054/Optical%20Communication/Course%20Objective.htm">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>


 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117101057</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Transmission Lines and EM Waves</strong></td>
	<td><strong>Prof. R.K. Shevgaonkar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select2" id="select2" onchange="goToPage('select2');"><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/117101057/Transmission%20Lines%20and%20EM%20Waves/Course%20Objective.htm">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>


 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117101058</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>VLSI Design</strong></td>
	<td><strong>Prof. A.N. Chandorkar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select3" id="select3" onchange="goToPage('select3');"><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/117101058/VLSI%20Design/Course%20Objective.htm">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>

 <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117101055</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Signals and Systems</strong></td>
	<td><strong>Prof. V.M. Gadre</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select4" id="select4" onchange="goToPage('select4');"><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/117101055/Signals%20and%20System/Course%20Objective.htm">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117101056</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Transmission Lines and EM Waves</strong></td>
	<td><strong>Prof. R.K. Shevgaonkar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'>
        <option  value="#">Select </option>
      <option  value="117101056/lec01.mp4">Introduction to EM waves and various techniques of communication</option>
      
      <option  value="117101056/lec02.mp4">Equations of Voltage and Current on TX line</option>
      
      <option  value="117101056/lec03.mp4">Propagation constant, Characteristic impedance and reflection coefficient</option>
      
      <option  value="117101056/lec04.mp4">Impedance Transformation</option>
      
      <option  value="117101056/lec05.mp4">Loss-less and Low loss Transmission line and  VSWR</option>
      
      <option  value="117101056/lec06.mp4">Power transfer on TX line</option>
      
      <option  value="117101056/lec07.mp4">Smith Chart</option>
      
      <option  value="117101056/lec08.mp4">Admittance Smith Chart</option>
      
      <option  value="117101056/lec09.mp4">Experimental setup for transmission line measurements</option>
      
      <option  value="117101056/lec10.mp4">Applications of transmission lines</option>
      
      <option  value="117101056/lec11.mp4">Applications of transmission lines-II</option>
      
      <option  value="117101056/lec12.mp4">Impedance Matching </option>
      
      <option  value="117101056/lec13.mp4">Lossy Transmission Line</option>
      
      <option  value="117101056/lec14.mp4">Problems on Transmission line</option>
      
      <option  value="117101056/lec15.mp4">Types of transmission line</option>
      
      <option  value="117101056/lec16.mp4">Basics of Vectors</option>
      
      <option  value="117101056/lec17.mp4">Vector calculus</option>
      
      <option  value="117101056/lec18.mp4">Basic laws of Electromagnetics</option>
      
      <option  value="117101056/lec19.mp4">Maxwell\\\'s Equations</option>
      
      <option  value="117101056/lec20.mp4">Boundary conditions at Media Interface</option>
      
      <option  value="117101056/lec21.mp4">Uniform plane wave</option>
      
      <option  value="117101056/lec22.mp4">Propagation of wave</option>
      
      <option  value="117101056/lec23.mp4">Wave polarization</option>
      
      <option  value="117101056/lec24.mp4">Pioncere\\\'s Sphere</option>
      
      <option  value="117101056/lec25.mp4">Wave propagation in conducting medium</option>
      
      <option  value="117101056/lec26.mp4">Wave propagation and phase velocity</option>
      
      <option  value="117101056/lec27.mp4">Power flow and Poynting vector</option>
      
      <option  value="117101056/lec28.mp4">Surface current and power loss in a conductor</option>
      
      <option  value="117101056/lec29.mp4">Plane wave in arbitary direction</option>
      
      <option  value="117101056/lec30.mp4">Plane wave at dielectric interface</option>
      
      <option  value="117101056/lec31.mp4">Reflection and refraction at media interface</option>
      
      <option  value="117101056/lec32.mp4">Total internal reflection</option>
      
      <option  value="117101056/lec33.mp4">Polarization at media interface</option>
      
      <option  value="117101056/lec34.mp4">Reflection from a conducting boundary</option>
      
      <option  value="117101056/lec35.mp4">Parallel plane waveguide</option>
      
      <option  value="117101056/lec36.mp4">Wave propagation in parallel plane waveguide</option>
      
      <option  value="117101056/lec37.mp4">Analysis of waveguide general approach</option>
      
      <option  value="117101056/lec38.mp4">Rectangular waveguide</option>
      
      <option  value="117101056/lec39.mp4">Modal propagation in rectangular waveguide</option>
      
      <option  value="117101056/lec40.mp4">Surface currents on the waveguide walls</option>
      
      <option  value="117101056/lec41.mp4">Field visualization and Attenuation in waveguide</option>
      
      <option  value="117101056/lec42.mp4">Attenuation in waveguide continued</option>
      
      <option  value="117101056/lec43.mp4">Radiation (Antenna)</option>
      
      <option  value="117101056/lec44.mp4">Solution for potential function</option>
      
      <option  value="117101056/lec45.mp4">Radiation form the Hertz dipole</option>
      
      <option  value="117101056/lec46.mp4">Power radiated by hertz dipole</option>
      
      <option  value="117101056/lec47.mp4">Thin linear antenna</option>
      
      <option  value="117101056/lec48.mp4">Radiation Parameters of antenna</option>
      
      <option  value="117101056/lec49.mp4">Receiving antenna</option>
      
      <option  value="117101056/lec50.mp4">Monopole and Dipole antenna </option>
      
      <option  value="117101056/lec51.mp4">Fourier transform relation between current and radiation pattern</option>
      
      <option  value="117101056/lec52.mp4">Antenna arrays</option>
      
      <option  value="117101056/lec53.mp4">Uniform Linear array</option>
      
      <option  value="117101056/lec54.mp4">Uniform Linear array continued</option>
      
      <option  value="117101056/lec55.mp4">Synthesis of array</option>
      
      <option  value="117101056/lec56.mp4">Binomial array and general array synthesis</option>
      
      <option  value="117101056/lec57.mp4">Problems on uniform plane wave</option>
      
      <option  value="117101056/lec58.mp4">Problems on uniform plane wave in a meduim</option>
      
      <option  value="117101056/lec59.mp4">Problems on waveguides</option>
      
      <option  value="117101056/lec60.mp4">Problems on Antennas and radiation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117102059</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Communication Engineering</strong></td>
	<td><strong>Prof. Surendra Prasad</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117102059/lec01.mp4">Introduction to Communication Engineering</option>
      
      <option  value="117102059/lec02.mp4">Communication channel</option>
      
      <option  value="117102059/lec03.mp4">Brief Review of Signal and Systems</option>
      
      <option  value="117102059/lec04.mp4">The Hilbert Transform</option>
      
      <option  value="117102059/lec05.mp4">Analytic Representation of band pass Signals</option>
      
      <option  value="117102059/lec06.mp4">Fundamentals of Analog Signal Transmission</option>
      
      <option  value="117102059/lec07.mp4">Analog Modulation of Carriers</option>
      
      <option  value="117102059/lec08.mp4">Amplitude Modulation</option>
      
      <option  value="117102059/lec09.mp4">Amplitude Modulation</option>
      
      <option  value="117102059/lec10.mp4">Single Sideband Modulation</option>
      
      <option  value="117102059/lec11.mp4">Suppressed Sideband Modulation</option>
      
      <option  value="117102059/lec12.mp4">VSB Modulation - Superhet Receiver</option>
      
      <option  value="117102059/lec13.mp4">Superhet Receiver etc</option>
      
      <option  value="117102059/lec14.mp4">Practical Mixers-Effects of Tonal</option>
      
      <option  value="117102059/lec15.mp4">Angle Modulation</option>
      
      <option  value="117102059/lec16.mp4">Angle Modulation</option>
      
      <option  value="117102059/lec17.mp4">Generation of FM Signals</option>
      
      <option  value="117102059/lec18.mp4">FM Generation and Detection</option>
      
      <option  value="117102059/lec19.mp4">Demodulation of Angle Modulated Signals</option>
      
      <option  value="117102059/lec20.mp4">Demodulation of Angle Modulated Signals</option>
      
      <option  value="117102059/lec21.mp4">Demodulation of Angle Modulated Signals</option>
      
      <option  value="117102059/lec22.mp4">Feedback Demodulators - phase locked loop</option>
      
      <option  value="117102059/lec23.mp4">The Phase Locked Loop</option>
      
      <option  value="117102059/lec24.mp4">Frequency Compressive Feedback Demodulator</option>
      
      <option  value="117102059/lec25.mp4">FM Receivers</option>
      
      <option  value="117102059/lec26.mp4">TV Transmission</option>
      
      <option  value="117102059/lec27.mp4">Review of Probability Theory and Random Process</option>
      
      <option  value="117102059/lec28.mp4">Review of Probability Theory and Random Variables</option>
      
      <option  value="117102059/lec29.mp4">Random Processes</option>
      
      <option  value="117102059/lec30.mp4">Random Processes</option>
      
      <option  value="117102059/lec31.mp4">Random Processes</option>
      
      <option  value="117102059/lec32.mp4">Gaussian Random Processes</option>
      
      <option  value="117102059/lec33.mp4">Behaviour of Communication System</option>
      
      <option  value="117102059/lec34.mp4">Performance of AM Systems in Noise</option>
      
      <option  value="117102059/lec35.mp4">Noise in AM and Angle Modulation Systems</option>
      
      <option  value="117102059/lec36.mp4">Noise in Phase and Frequency Modulation systems</option>
      
      <option  value="117102059/lec37.mp4">Noise in Angle Modulation</option>
      
      <option  value="117102059/lec38.mp4">Pre emphasis - De emphasis</option>
      
      <option  value="117102059/lec39.mp4">Pulse Modulation Schemes - PWM and PPM</option>
      
      <option  value="117102059/lec40.mp4">Data Modulation</option>
      
      <option  value="117102059/lec41.mp4">Pulse Code Modulation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117102060</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Signal Processing</strong></td>
	<td><strong>Prof. S.C. Dutta Roy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117102060/lec01.mp4">Digital Signal Processing Introduction</option>
      
      <option  value="117102060/lec02.mp4">Digital Signal Processing Introduction Contd</option>
      
      <option  value="117102060/lec03.mp4">Digital Systems</option>
      
      <option  value="117102060/lec04.mp4">Characterization Description, Testing of Digital Systems</option>
      
      <option  value="117102060/lec05.mp4">LTI Systems Step & Impulse Responses, Convolution</option>
      
      <option  value="117102060/lec06.mp4">Inverse Systems,Stability,FIR & IIR</option>
      
      <option  value="117102060/lec07.mp4">FIR & IIR; Recursive & Non Recursive</option>
      
      <option  value="117102060/lec08.mp4">Discrete Time Fourier Transform</option>
      
      <option  value="117102060/lec09.mp4">Discrete Fourier Transform (DFT)</option>
      
      <option  value="117102060/lec10.mp4">DFT (Contd.)</option>
      
      <option  value="117102060/lec11.mp4">DFT (Contd.) Introduction to Z Transform</option>
      
      <option  value="117102060/lec12.mp4">Z Transform</option>
      
      <option  value="117102060/lec13.mp4">Z Transform (Contd.)</option>
      
      <option  value="117102060/lec14.mp4">Discrete Time Systems in the Frequency Domain</option>
      
      <option  value="117102060/lec15.mp4">Simple Digital Filters</option>
      
      <option  value="117102060/lec16.mp4">All Pass Filters,Com.Filters</option>
      
      <option  value="117102060/lec17.mp4">Linear Phase filters, Complementary Transfer Fn</option>
      
      <option  value="117102060/lec18.mp4">Compensatory Transfer Functions, (Contd.)</option>
      
      <option  value="117102060/lec19.mp4">Test for Stability using All Pass Functions</option>
      
      <option  value="117102060/lec20.mp4">Digital Processing of Continuous Time Signals</option>
      
      <option  value="117102060/lec21.mp4">Problem Solving Session: FT, DFT,& Z Transforms</option>
      
      <option  value="117102060/lec22.mp4">Problem Solving Session: FT,DFT, & Z Transforms</option>
      
      <option  value="117102060/lec23.mp4">Analog Filter Design</option>
      
      <option  value="117102060/lec24.mp4">Analog Chebyshev LPF Design</option>
      
      <option  value="117102060/lec25.mp4">Analog Filter Design (Contd.): Transformations</option>
      
      <option  value="117102060/lec26.mp4">Analog frequency Transformation</option>
      
      <option  value="117102060/lec27.mp4">Problem Solving Session on Discrete Time System</option>
      
      <option  value="117102060/lec28.mp4">Digital Filter Structures</option>
      
      <option  value="117102060/lec29.mp4">IIR Realizations</option>
      
      <option  value="117102060/lec30.mp4">All Pass Realizations</option>
      
      <option  value="117102060/lec31.mp4">Lattice Synthesis (Contd.)</option>
      
      <option  value="117102060/lec32.mp4">FIR Lattice Synthesis</option>
      
      <option  value="117102060/lec33.mp4">FIR Lattice (Contd.) and Digital Filter Design</option>
      
      <option  value="117102060/lec34.mp4">IIR Filter Design</option>
      
      <option  value="117102060/lec35.mp4">IIR Design by Bilinear Transformation</option>
      
      <option  value="117102060/lec36.mp4">IIR Design Examples</option>
      
      <option  value="117102060/lec37.mp4">Digital to Digital Frequency Transformation</option>
      
      <option  value="117102060/lec38.mp4">FIR Design</option>
      
      <option  value="117102060/lec39.mp4">FIR Digital Filter Design by Windowing</option>
      
      <option  value="117102060/lec40.mp4">FIR Design by Windowing & Frequency Sampling</option>
      
      <option  value="117102060/lec41.mp4">Solving Problems on DSP Structures</option>
      
      <option  value="117102060/lec42.mp4">FIR Design by Frequency Sampling</option>
      
      <option  value="117102060/lec43.mp4">FIR Design by Frequency Sampling (Contd.)</option>
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117102061</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Semiconductor Devices</strong></td>
	<td><strong>Dr. G.S. Visweswaran</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web%20courses/117102061/Semiconductor%20Devices/index.htm">contents</option></select></td></tr></form>
      
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117103064</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Circuits</strong></td>
	<td><strong>Prof. Anil Mahanta,Prof. Roy Paily Palanthinkal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117103064/digital_circuit/frame/index.html">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117103065</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Electromagnetic Fields</strong></td>
	<td><strong>Dr. Ratnajit Bhattacharjee</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117103065/em/index.htm">contents</option></select></td></tr></form>
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117103066</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>IC Technology</strong></td>
	<td><strong>Prof. Roy Paily Palanthinkal,Prof. Indrajit Chakraborty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117103066/ic_tech/index.html">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117103067</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Probability and Random Processes</strong></td>
	<td><strong>Prof. Prabin K Bora</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117103067/probability_rp/index.htm">contents</option></select></td></tr></form>
      
      
            <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117104069</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Image Processing</strong></td>
	<td><strong>Prof. Sumana Gupta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117104069/Digi_Img_Pro/ui/About-Faculty.html">contents</option></select></td></tr></form>
      
           <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117104070</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Signal Processing</strong></td>
	<td><strong>Prof. Govind Sharma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117104070/Digi_Sign_Pro/ui/About-Faculty.html">contents</option></select></td></tr></form>
           
           <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117104071</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>High Speed Semiconductor Devices</strong></td>
	<td><strong>Prof. Anjan Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117104071/HighSpeed_SemiconductorDevices/ui/About-Faculty.html">contents</option></select></td></tr></form>
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117104072</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Microcontrollers and Applications</strong></td>
	<td><strong>Dr. S.P. Das</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-KANPUR</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117104072/microcontrollers/micro/ui/About-Faculty.html">contents</option></select></td></tr></form>
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117105076</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Communication Networks and Switching</strong></td>
	<td><strong>Prof. S.L. Maskara</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117105076/Communication%20network/New_index1.html">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117105077</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Communication</strong></td>
	<td><strong>Prof. R.V. Rajakumar,Prof. Saswat Chakrabarti</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117105077/Digi%20Comm/New_index1.html">contents</option></select></td></tr></form>
      
      
       <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117105083</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Multimedia processing</strong></td>
	<td><strong>Prof. Somnath Sengupta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117105083/Multimedia Processing/New_index1.html">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117107094</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Analog Circuits</strong></td>
	<td><strong>Prof. Pramod Agarwal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-ROORKEE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117107094/Analog circuits/index.htm">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117107095</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Basic Electronics</strong></td>
	<td><strong>Prof. Pramod Agarwal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-ROORKEE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117107095/BASIC-ELECTRONICS/home_page.htm">contents</option></select></td></tr></form>
      
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117108097</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Information Theory and Coding</strong></td>
	<td><strong>Prof. Pavan S Nuggehalli</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT-ROORKEE</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117108097/Information Theory and Coding/Learning Material - ITC.pdf">contents</option></select></td></tr></form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117102062</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Wireless Communication</strong></td>
	<td><strong>Prof. Ranjan Bose</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117102062/lec01.mp4">Motivation and Introduction</option>
      
      <option  value="117102062/lec02.mp4">Types of Wireless communication</option>
      
      <option  value="117102062/lec03.mp4">The modern wireless Communication Systems</option>
      
      <option  value="117102062/lec04.mp4">The cellular concept - System Design issues</option>
      
      <option  value="117102062/lec05.mp4">Cell capacity and reuse</option>
      
      <option  value="117102062/lec06.mp4">Interference and System capacity</option>
      
      <option  value="117102062/lec07.mp4">Improving coverage and system capacity</option>
      
      <option  value="117102062/lec08.mp4">Mobile Radio Propagation</option>
      
      <option  value="117102062/lec09.mp4">Mobile Radio Propagation Contd</option>
      
      <option  value="117102062/lec10.mp4">Mobile Radio Propagation Contd</option>
      
      <option  value="117102062/lec11.mp4">Mobile Radio Propagation Contd</option>
      
      <option  value="117102062/lec12.mp4">Mobile Radio Propagation Contd</option>
      
      <option  value="117102062/lec13.mp4">Mobile Radio Propagation Contd</option>
      
      <option  value="117102062/lec14.mp4">Mobile Radio Propagation II</option>
      
      <option  value="117102062/lec15.mp4">Mobile Radio Propagation II Contd</option>
      
      <option  value="117102062/lec16.mp4">Mobile Radio Propagation II Contd</option>
      
      <option  value="117102062/lec17.mp4">Mobile Radio Propagation II Contd</option>
      
      <option  value="117102062/lec18.mp4">Mobile Radio Propagation II Contd</option>
      
      <option  value="117102062/lec19.mp4">Mobile Radio Propagation II Contd</option>
      
      <option  value="117102062/lec20.mp4">Mobile Radio Propagation II Contd</option>
      
      <option  value="117102062/lec22.mp4">Modulation Techniques for Mobile Communication</option>
      
      <option  value="117102062/lec23.mp4">Modulation Techniques (Contd.)</option>
      
      <option  value="117102062/lec24.mp4">Modulation Techniques (Contd.)</option>
      
      <option  value="117102062/lec25.mp4">Modulation Techniques (Contd.)</option>
      
      <option  value="117102062/lec26.mp4">Modulation Techniques (Contd.)</option>
      
      <option  value="117102062/lec27.mp4">Modulation Techniques (Contd.)</option>
      
      <option  value="117102062/lec28.mp4">Modulation Techniques (Contd.)</option>
      
      <option  value="117102062/lec29.mp4">Equalization and Diversity Techniques</option>
      
      <option  value="117102062/lec30.mp4">Equalization and Diversity Techniques (Contd.)</option>
      
      <option  value="117102062/lec31.mp4">Equalization and Diversity Techniques (Contd.)</option>
      
      <option  value="117102062/lec32.mp4">Equalization and Diversity Techniques (Contd.)</option>
      
      <option  value="117102062/lec33.mp4">Coding Techniques for Mobile Communications</option>
      
      <option  value="117102062/lec34.mp4">Coding Techniques for Mobile Communications Contd</option>
      
      <option  value="117102062/lec35.mp4">Coding Techniques for Mobile Communications Contd</option>
      
      <option  value="117102062/lec36.mp4">Coding Techniques for Mobile Communications Contd</option>
      
      <option  value="117102062/lec37.mp4">Wireless Networks</option>
      
      <option  value="117102062/lec38.mp4">GSM and CDMA</option>
      
      <option  value="117102062/lec39.mp4">GSM and CDMA Contd</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117103017</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Queuing Systems</strong></td>
	<td><strong>Prof. S.K. Bose </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117103017/module1/index.html">Introduction to Queueing Systems</option>
      
      <option  value="short/NPTEL/web courses/117103017/module1/lec2/1.html">Analysis of a Simple Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module2/lec1/1.html">Basics of Markov Processes and Markov Chains</option>
      
      <option  value="short/NPTEL/web courses/117103017/module2/lec2/1.html">Markov Chains, Birth-Death Processes, Flow Balance</option>
      
      <option  value="short/NPTEL/web courses/117103017/module3/lec1/1.html">Kendall's Notation, Little's Result, PASTA, M/M/1/&#8734; Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module3/lec2/1.html">M/M/m/&#8734;, M/M/m/m, M/M/1/K Queues, Delay Analysis</option>
      
      <option  value="short/NPTEL/web courses/117103017/module4/lec1/1.html">Departure Process, Burke's Theorem</option>
      
      <option  value="short/NPTEL/web courses/117103017/module4/lec2/1.html">Method of Stages, Batch Arrivals</option>
      
      <option  value="short/NPTEL/web courses/117103017/module5/lec1/1.html">Residual Life Approach</option>
      
      <option  value="short/NPTEL/web courses/117103017/module5/lec2/1.html">Imbedded Markov Chain Approach</option>
      
      <option  value="short/NPTEL/web courses/117103017/module5/lec3/1.html">Delay Analysis</option>

      
      <option  value="short/NPTEL/web courses/117103017/module6/lec1/1.html">Analysis of M/G/1 queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module7/lec1/1.html">M/G/1 Queue with Multiple  Vacations, Residual Life Approach</option>
      
      <option  value="short/NPTEL/web courses/117103017/module7/lec2/1.html">M/G/1 Queue with Multiple Vacations Imbedded Markov Chain Approach</option>
      
      <option  value="short/NPTEL/web courses/117103017/module7/lec3/1.html">M/G/1 Queue with Multiple Vacations, M/G/1 Queue with Exceptional First Service</option>
      
      <option  value="short/NPTEL/web courses/117103017/module8/lec1/1.html">Imbedded Markov Chain at Job Departure Instants</option>
      
      <option  value="short/NPTEL/web courses/117103017/module8/lec2/1.html">Imbedded Markov Chain at Batch Departure Instants</option>
      
      <option  value="short/NPTEL/web courses/117103017/module9/lec1/1.html">Different Types of Priority Operation</option>
      
      <option  value="short/NPTEL/web courses/117103017/module9/lec2/1.html">Analysis using the Residual Life Approach</option>
      
      <option  value="short/NPTEL/web courses/117103017/module9/lec3/1.html">Analysis using the Imbedded Markov Chain Approach</option>
      
      <option  value="short/NPTEL/web courses/117103017/module10/lec1/1.html">M/G/1/K Queue (Single Server Queue with Finite Capacity)</option>
      
      <option  value="short/NPTEL/web courses/117103017/module10/lec2/1.html">Analysis of the M/G/1/K queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module10/lec3/1.html">Proportionality Relationship, Alternate Analysis</option>
      
      <option  value="short/NPTEL/web courses/117103017/module11/lec1/1.html">Analyzing  the G/M/1 Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module11/lec2/1.html">Bounds and approximations for the G/G/1 and G/G/m Queues</option>
      
      <option  value="short/NPTEL/web courses/117103017/module11/lec3/1.html">Analyzing the M/G/m/m Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module12/lec1/1.html">Introduction to Queuing Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module12/lec2/1.html">Classificationof Queueing Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module12/lec3/1.html">Fork-join Queues and Introduction to Blocking in Queueing Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module12/lec4/1.html">Blocking Models in queueing Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module13/lec1/1.html">Splitting and Combining Poisson Processes</option>
      
      <option  value="short/NPTEL/web courses/117103017/module13/lec2/1.html">Jackson's Theorem for Open Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module13/lec3/1.html">Product Form Solution for Open Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module13/lec4/1.html">Jackson's Theorem for Closed Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module13/lec5/1.html">Using Jackson's Theorem for Closed Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module13/lec6/1.html">Examples: Analysis of Open and closed Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module14/lec1/1.html">Analysis of Closed Networks</option>
      
      <option  value="short/NPTEL/web courses/117103017/module14/lec2/1.html">Convolution Algorithm</option>
      
      <option  value="short/NPTEL/web courses/117103017/module14/lec3/1.html">Examples of analysis using Convolution Algorithm</option>
      
      <option  value="short/NPTEL/web courses/117103017/module14/lec4/1.html">Mean Value Analysis Algorithm</option>
      
      <option  value="short/NPTEL/web courses/117103017/module14/lec5/1.html">Examples of Analysis using MVA Algorithm</option>
      
      <option  value="short/NPTEL/web courses/117103017/module15/lec1/1.html">Norton's Theorem</option>
      
      <option  value="short/NPTEL/web courses/117103017/module15/lec2/1.html">Mixed Networks, QNA</option>
      
      <option  value="short/NPTEL/web courses/117103017/module16/lec1/1.html">Introduction to Discrete Time Queues</option>
      
      <option  value="short/NPTEL/web courses/117103017/module16/lec2/1.html">Geo/G/1 Queue-Late Arrival Model</option>
      
      <option  value="short/NPTEL/web courses/117103017/module16/lec3/1.html">Geo/G/1 Queue- early Arrival Model</option>
      
      <option  value="short/NPTEL/web courses/117103017/module17/lec1/1.html">Introduction</option>
      
      <option  value="short/NPTEL/web courses/117103017/module17/lec2/1.html">Simulating a Queueing System</option>
      
      <option  value="short/NPTEL/web courses/117103017/module17/lec3/1.html">Processing Simulation Results</option>
      
      <option  value="short/NPTEL/web courses/117103017/module1/problem/1.html">Problems-Introduction</option>
      
      <option  value="short/NPTEL/web courses/117103017/module2/problem/1.html">Problems-Markov Process and Markov Chains</option>
      
      <option  value="short/NPTEL/web courses/117103017/module3/problem/1.html">Problems-Basics of Queuing</option>
      
      <option  value="short/NPTEL/web courses/117103017/module4/problem/1.html">Problems- M/M/-/- Type Queues</option>
      
      <option  value="short/NPTEL/web courses/117103017/module5/problem/1.html">Problems-M/G/1 Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module7/problem/1.html">Problems - Special Cases of the M/G/1 Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module8/problem/1.html">Problems- M/G/1 Queue with Batch Arrivals</option>
      
      <option  value="short/NPTEL/web courses/117103017/module9/problem/1.html">Problems-Priority Operation of the M/G/1 Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module10/problem/1.html">Problems-M/G/1/K -Finite Capacity M/G/1 Queue</option>
      
      <option  value="short/NPTEL/web courses/117103017/module13/problem/1.html">Problems- Open and Closed Networks of M/M/m Type Queues</option>
      
      <option  value="short/NPTEL/web courses/117103017/module14/problem/1.html">Problems- Analyzing Closed Networks with Convolution and Mean Value Analysis Algorithms</option>
      
      <option  value="short/NPTEL/web courses/117103017/module15/problem/1.html">Problems-Norton's Theorem, Mixed Networks, QNA</option>
      
      <option  value="short/NPTEL/web courses/117103017/module16/problem/1.html">Problems-Discrete Time Queues</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117103063</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Basic Electronics</strong></td>
	<td><strong>Prof. Chitralekha Mahanta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117103063/mod01lec01.mp4">Semiconductor materials</option>
      
      <option  value="117103063/mod01lec02.mp4">PN Junction Diodes</option>
      
      <option  value="117103063/mod01lec03.mp4">Diode Equivalent Circuits</option>
      
      <option  value="117103063/mod01lec04.mp4">Diode Rectifier Circuits</option>
      
      <option  value="117103063/mod01lec05.mp4">Zener Diode and Applications</option>
      
      <option  value="117103063/mod01lec06.mp4">Clipping and Clamping Circuits</option>
      
      <option  value="117103063/mod02lec01.mp4">Transistor Operation - Part - 1</option>
      
      <option  value="117103063/mod02lec02.mp4">Transistor Operation Part - 2</option>
      
      <option  value="117103063/mod02lec03.mp4">Biasing the BJT</option>
      
      <option  value="117103063/mod02lec04.mp4">Biasing the BJT - Part - 2</option>
      
      <option  value="117103063/mod02lec05.mp4">BJT Small Signal Analysis</option>
      
      <option  value="117103063/mod02lec06.mp4">BJT Amplifier - Part - 1</option>
      
      <option  value="117103063/mod02lec07.mp4">BJT Amplifier Part - 2</option>
      
      <option  value="117103063/mod02lec08.mp4">Frequency Response of BJT Analysis - Part - 1</option>
      
      <option  value="117103063/mod02lec09.mp4">Bipolar Junction Transistors</option>
      
      <option  value="117103063/mod02lec10.mp4">Transistor as a Switch</option>
      
      <option  value="117103063/mod03lec01.mp4">MOSFET - Part -1</option>
      
      <option  value="117103063/mod03lec02.mp4">MOSFET - Part - 2</option>
      
      <option  value="117103063/mod03lec03.mp4">MOSFET under dc operation</option>
      
      <option  value="117103063/mod03lec04.mp4">Mosfet as an Amplifier</option>
      
      <option  value="117103063/mod03lec05.mp4">Small signal model of MOSFET - Part 1</option>
      
      <option  value="117103063/mod03lec06.mp4">Small signal model of MOSFET - Part 2</option>
      
      <option  value="117103063/mod03lec07.mp4">High Frequency model of mosfet</option>
      
      <option  value="117103063/mod03lec08.mp4">Junction Field Effect Transistor</option>
      
      <option  value="117103063/mod04lec01.mp4">Operational Amplifier Introduction</option>
      
      <option  value="117103063/mod04lec02.mp4">Ideal Op-Amp</option>
      
      <option  value="117103063/mod04lec03.mp4">Op-Amp applications Part -1</option>
      
      <option  value="117103063/mod04lec04.mp4">Op-Amp Applications Part -2</option>
      
      <option  value="117103063/mod04lec05.mp4">Op-Amp Applications Part - 3</option>
      
      <option  value="117103063/mod04lec06.mp4">The practical Op-Amp</option>
      
      <option  value="117103063/mod04lec07.mp4">Positive feedback and oscillation</option>
      
      <option  value="117103063/mod04lec08.mp4">Comparator</option>
      
      <option  value="117103063/mod05lec01.mp4">Large Signal Amplifiers</option>
      
      <option  value="117103063/mod05lec02.mp4">Transformer Couple Power Amplifier</option>
      
      <option  value="117103063/mod05lec03.mp4">Class AB Operations of PowerAmplifier</option>
      
      <option  value="117103063/mod05lec04.mp4">Power BJTs</option>
      
      <option  value="117103063/mod05lec05.mp4">Regulated Power Supply</option>
      
      <option  value="117103063/mod05lec06.mp4">Four Layered Diode</option>
      
      <option  value="117103063/mod05lec07.mp4">Silicon Control Rectifier</option>
      
      <option  value="117103063/mod05lec08.mp4">SCR Applications</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117104074</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Signals and Systems</strong></td>
	<td><strong>Prof. K.S. Venkatesh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117104074/mod01lec01.mp4">Lecture01</option>
      
      <option  value="117104074/mod01lec02.mp4">Lecture02</option>
      
      <option  value="117104074/mod01lec03.mp4">Lecture03</option>
      
      <option  value="117104074/mod01lec04.mp4">Lecture04</option>
      
      <option  value="117104074/mod01lec05.mp4">Lecture05</option>
      
      <option  value="117104074/mod01lec06.mp4">Lecture06</option>
      
      <option  value="117104074/mod01lec07.mp4">Lecture07</option>
      
      <option  value="117104074/mod01lec08.mp4">Lecture08</option>
      
      <option  value="117104074/mod01lec09.mp4">Lecture09</option>
      
      <option  value="117104074/mod01lec10.mp4">Lecture10</option>
      
      <option  value="117104074/mod01lec11.mp4">Lecture11</option>
      
      <option  value="117104074/mod01lec12.mp4">Lecture12</option>
      
      <option  value="117104074/mod01lec13.mp4">Lecture13</option>
      
      <option  value="117104074/mod01lec14.mp4">Lecture14</option>
      
      <option  value="117104074/mod01lec15.mp4">Lecture15</option>
      
      <option  value="117104074/mod01lec16.mp4">Lecture16</option>
      
      <option  value="117104074/mod01lec17.mp4">Lecture17</option>
      
      <option  value="117104074/mod01lec18.mp4">Lecture18</option>
      
      <option  value="117104074/mod01lec19.mp4">Lecture19</option>
      
      <option  value="117104074/mod01lec20.mp4">Lecture20</option>
      
      <option  value="117104074/mod01lec21.mp4">Lecture21</option>
      
      <option  value="117104074/mod01lec22.mp4">Lecture22</option>
      
      <option  value="117104074/mod01lec23.mp4">Lecture23</option>
      
      <option  value="117104074/mod01lec24.mp4">Lecture24</option>
      
      <option  value="117104074/mod01lec25.mp4">Lecture25</option>
      
      <option  value="117104074/mod01lec26.mp4">Lecture26</option>
      
      <option  value="117104074/mod01lec27.mp4">Lecture27</option>
      
      <option  value="117104074/mod01lec28.mp4">Lecture28</option>
      
      <option  value="117104074/mod01lec29.mp4">Lecture29</option>
      
      <option  value="117104074/mod01lec30.mp4">Lecture30</option>
      
      <option  value="117104074/mod01lec31.mp4">Lecture31</option>
      
      <option  value="117104074/mod01lec32.mp4">Lecture32</option>
      
      <option  value="117104074/mod01lec33.mp4">Lecture33</option>
      
      <option  value="117104074/mod01lec34.mp4">Lecture34</option>
      
      <option  value="117104074/mod01lec35.mp4">Lecture35</option>
      
      <option  value="117104074/mod01lec36.mp4">Lecture36</option>
      
      <option  value="117104074/mod01lec37.mp4">Lecture37</option>
      
      <option  value="117104074/mod01lec38.mp4">Lecture38</option>
      
      <option  value="117104074/mod01lec39.mp4">Lecture39</option>
      
      <option  value="117104074/mod01lec40.mp4">Lecture40</option>
      
      <option  value="117104074/mod01lec41.mp4">Lecture41</option>
      
      <option  value="117104074/mod01lec42.mp4">Lecture42</option>
      
      <option  value="117104074/mod01lec43.mp4">Lecture43</option>
      
      <option  value="117104074/mod01lec44.mp4">Lecture44</option>
      
      <option  value="117104074/mod01lec45.mp4">Lecture45</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117104099</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Advanced 3G and 4G Wireless Mobile Communications</strong></td>
	<td><strong>Prof. Aditya K. Jagannatham</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117104099/mod01lec01.mp4">Lecture-1-Introduction to 3G/4G Standards</option>
      
      <option  value="117104099/mod01lec02.mp4">Lecture-2-Wireless Channel and Fading</option>
      
      <option  value="117104099/mod01lec03.mp4">Lecture-3-Rayleigh Fading  and BER of Wired Communication</option>
      
      <option  value="117104099/mod01lec04.mp4">Lecture-4- BER for Wireless Communication</option>
      
      <option  value="117104099/mod01lec05.mp4">Lecture 5 -Introduction to Diversity</option>
      
      <option  value="117104099/mod01lec06.mp4">Lecture 6 - Multi-antenna Maximal Ratio Combiner</option>
      
      <option  value="117104099/mod01lec07.mp4">Lecture7-BER with Diversity</option>
      
      <option  value="117104099/mod01lec08.mp4">Lecture 8-Spatial Diversity and Diversity Order</option>
      
      <option  value="117104099/mod01lec09.mp4">Lecture 9-Wireless Channel and Delay Spread</option>
      
      <option  value="117104099/mod01lec10.mp4">Lecture 10-Coherence Bandwidth of the Wireless Channel</option>
      
      <option  value="117104099/mod01lec11.mp4">Lecture 11-ISI and Doppler in Wireless Communications</option>
      
      <option  value="117104099/mod01lec12.mp4">Lecture 12-Doppler Spectrum and Jakes Model</option>
      
      <option  value="117104099/mod01lec13.mp4">Lecture 13-Introduction to CDMA, Spread Spectrum and LFSR</option>
      
      <option  value="117104099/mod01lec14.mp4">Lecture 14-Generation and Properties of PN Sequences</option>
      
      <option  value="117104099/mod01lec15.mp4">Lecture 15-Correlation of PN Sequences and Jammer Margin</option>
      
      <option  value="117104099/mod01lec16.mp4">Lecture 16-CDMA Advantages and RAKE Receiver</option>
      
      <option  value="117104099/mod01lec17.mp4">Lecture 17-Multi-User CDMA Downlink  Part I</option>
      
      <option  value="117104099/mod01lec18.mp4">Lecture 18-Multi-User CDMA Downlink  Part II</option>
      
      <option  value="117104099/mod01lec19.mp4">Lecture 19-Multi-User CDMA Uplink and Asynchronous CDMA</option>
      
      <option  value="117104099/mod01lec20.mp4">Lecture 20-CDMA Near-Far Problem and Introduction to MIMO</option>
      
      <option  value="117104099/mod01lec21.mp4">Lecture 21-MIMO System Model and Zero-Forcing Receiver</option>
      
      <option  value="117104099/mod01lec22.mp4">Lecture 22-MIMO MMSE Receiver and Introduction to SVD</option>
      
      <option  value="117104099/mod01lec23.mp4">Lecture 23-SVD Based Optimal MIMO Transmission and Capacity</option>
      
      <option  value="117104099/mod01lec24.mp4">Lecture 24-SVD Based Optimal MIMO Transmission and Capacity</option>
      
      <option  value="117104099/mod01lec25.mp4">Lecture 25-OSTBCs and Introduction to V-BLAST Receiver</option>
      
      <option  value="117104099/mod01lec26.mp4">Lecture 26-V-BLAST (Contd.) and MIMO Beamforming</option>
      
      <option  value="117104099/mod01lec27.mp4">Lecture 27- Introduction to OFDM and Multi-Carrier Modulation</option>
      
      <option  value="117104099/mod01lec28.mp4">Lecture 28-IFFT Sampling for OFDM</option>
      
      <option  value="117104099/mod01lec29.mp4">Lecture 29-OFDM Schematic and Cyclic Prefix</option>
      
      <option  value="117104099/mod01lec30.mp4">Lecture 30-OFDM Based Parallelization and OFDM Example</option>
      
      <option  value="117104099/mod01lec31.mp4">Lecture 31-OFDM Example (Contd.) and Introduction to MIMO-OFDM</option>
      
      <option  value="117104099/mod01lec32.mp4">Lecture 32- MIMO-OFDM (Contd.)</option>
      
      <option  value="117104099/mod01lec33.mp4">Lecture 33-Impact of Carrier Frequency Offset (CFO) in OFDM</option>
      
      <option  value="117104099/mod01lec34.mp4">Lecture 34-PAPR in OFDM Systems and Introduction to SC-FDMA</option>
      
      <option  value="117104099/mod01lec35.mp4">Lecture 35-SC-FDMA (Contd.) and Introduction of Wireless Propagation Models</option>
      
      <option  value="117104099/mod01lec36.mp4">Lecture 36-Ground Reflection and Okumura Models</option>
      
      <option  value="117104099/mod01lec37.mp4">Lecture 37-Hata Model and Log Normal Shadowing</option>
      
      <option  value="117104099/mod01lec38.mp4">Lecture 38-Link Budget Analysis</option>
      
      <option  value="117104099/mod01lec39.mp4">Lecture 39-Introduction to Teletraffic Theory</option>
      
      <option  value="117104099/mod01lec40.mp4">Lecture 40-Cellular Traffic Modeling and Blocking Probability</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105075</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Adaptive Signal Processing</strong></td>
	<td><strong>Prof. Mrityunjoy Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105075/lec01.mp4">Introduction to Adaptive Filters</option>
      
      <option  value="117105075/lec02.mp4">Introduction to Stochastic Processes</option>
      
      <option  value="117105075/lec03.mp4">Stochastic Processes</option>
      
      <option  value="117105075/lec04.mp4">Correlation Structure</option>
      
      <option  value="117105075/lec05.mp4">FIR Wiener Filter (Real)</option>
      
      <option  value="117105075/lec06.mp4">Steepest Descent Technique</option>
      
      <option  value="117105075/lec07.mp4">LMS Algorithm</option>
      
      <option  value="117105075/lec08.mp4">Convergence Analysis</option>
      
      <option  value="117105075/lec09.mp4">Convergence Analysis (Mean Square)</option>
      
      <option  value="117105075/lec10.mp4">Convergence Analysis (Mean Square)</option>
      
      <option  value="117105075/lec11.mp4">Misadjustment and Excess MSE</option>
      
      <option  value="117105075/lec12.mp4">Misadjustment and Excess MSE</option>
      
      <option  value="117105075/lec13.mp4">Sign LMS Algorithm</option>
      
      <option  value="117105075/lec14.mp4">Block LMS Algorithm</option>
      
      <option  value="117105075/lec15.mp4">Fast Implementation of Block LMS Algorithm</option>
      
      <option  value="117105075/lec16.mp4">Fast Implementation of Block LMS Algorithm</option>
      
      <option  value="117105075/lec17.mp4">Vector Space Treatment to Random Variables</option>
      
      <option  value="117105075/lec18.mp4">Vector Space Treatment to Random Variables</option>
      
      <option  value="117105075/lec19.mp4">Orthogonalization and Orthogonal Projection</option>
      
      <option  value="117105075/lec20.mp4">Orthogonal Decomposition of Signal Subspaces</option>
      
      <option  value="117105075/lec21.mp4">Introduction to Linear Prediction</option>
      
      <option  value="117105075/lec22.mp4">Lattice Filter</option>
      
      <option  value="117105075/lec23.mp4">Lattice Recursions</option>
      
      <option  value="117105075/lec24.mp4">Lattice as Optimal Filter</option>
      
      <option  value="117105075/lec25.mp4">Linear Prediction and Autoregressive Modeling</option>
      
      <option  value="117105075/lec26.mp4">Gradient Adaptive Lattice</option>
      
      <option  value="117105075/lec27.mp4">Gradient Adaptive Lattice</option>
      
      <option  value="117105075/lec28.mp4">Introduction to Recursive Least Squares</option>
      
      <option  value="117105075/lec29.mp4">RLS Approach to Adaptive Filters</option>
      
      <option  value="117105075/lec30.mp4">RLS Adaptive Lattice</option>
      
      <option  value="117105075/lec31.mp4">RLS Lattice Recursions</option>
      
      <option  value="117105075/lec32.mp4">RLS Lattice Recursions</option>
      
      <option  value="117105075/lec33.mp4">RLS Lattice Algorithm</option>
      
      <option  value="117105075/lec34.mp4">RLS Using QR Decomposition</option>
      
      <option  value="117105075/lec35.mp4">Givens Rotation</option>
      
      <option  value="117105075/lec36.mp4">Givens Rotation and QR Decomposition</option>
      
      <option  value="117105075/lec37.mp4">Systolic Implementation</option>
      
      <option  value="117105075/lec38.mp4">Systolic Implementation</option>
      
      <option  value="117105075/lec39.mp4">Singular Value Decomposition</option>
      
      <option  value="117105075/lec40.mp4">Singular Value Decomposition</option>
      
      <option  value="117105075/lec41.mp4">Singular Value Decomposition</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105078</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Computer Organization</strong></td>
	<td><strong>Prof. P.K. Biswas</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105078/lec01.mp4">Introduction to Digital Computer Organization</option>
      
      <option  value="117105078/lec02.mp4">CPU Design-I</option>
      
      <option  value="117105078/lec03.mp4">CPU Design-II</option>
      
      <option  value="117105078/lec04.mp4">CPU Design Tirning and Control</option>
      
      <option  value="117105078/lec05.mp4">Micro programmed Control-I</option>
      
      <option  value="117105078/lec06.mp4">Micro programmed Control-II</option>
      
      <option  value="117105078/lec07.mp4">Pipeline Concept-I</option>
      
      <option  value="117105078/lec08.mp4">Pipeline Concept-II</option>
      
      <option  value="117105078/lec09.mp4">Pipeline Concept-III</option>
      
      <option  value="117105078/lec10.mp4">Pipeline CPU-I</option>
      
      <option  value="117105078/lec11.mp4">Pipeline CPU-II</option>
      
      <option  value="117105078/lec12.mp4">Pipeline CPU-III</option>
      
      <option  value="117105078/lec13.mp4">Memory Organization-I</option>
      
      <option  value="117105078/lec14.mp4">Memory Organization-II</option>
      
      <option  value="117105078/lec15.mp4">Memory Organization-III</option>
      
      <option  value="117105078/lec16.mp4">Memory Organization-IV</option>
      
      <option  value="117105078/lec17.mp4">Memory Organization-V</option>
      
      <option  value="117105078/lec18.mp4">Cache Memory Architecture</option>
      
      <option  value="117105078/lec19.mp4">Cache Memory Architecture RAM Architecture</option>
      
      <option  value="117105078/lec20.mp4">RAM Architecture</option>
      
      <option  value="117105078/lec21.mp4">DAM Architecture-1</option>
      
      <option  value="117105078/lec22.mp4">DAM Architecture Buffer Cache</option>
      
      <option  value="117105078/lec23.mp4">Buffer Cache</option>
      
      <option  value="117105078/lec24.mp4">Secondary Storage Organization-I</option>
      
      <option  value="117105078/lec25.mp4">Secondary Storage Organization-II</option>
      
      <option  value="117105078/lec26.mp4">Secondary Storage Organization-III</option>
      
      <option  value="117105078/lec27.mp4">I/O Subsystem Organization</option>
      
      <option  value="117105078/lec28.mp4">Error Detection and Correction</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105079</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Image Processing</strong></td>
	<td><strong>Prof. P.K. Biswas</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105079/lec01.mp4">Introduction</option>
      
      <option  value="117105079/lec02.mp4">Image Digitization I</option>
      
      <option  value="117105079/lec03.mp4">Image Digitization II</option>
      
      <option  value="117105079/lec04.mp4">Pixel Relationships</option>
      
      <option  value="117105079/lec05.mp4">Pixels Relationships II</option>
      
      <option  value="117105079/lec06.mp4">Basic Transformations</option>
      
      <option  value="117105079/lec07.mp4">Camera Model and Imaging Geometry</option>
      
      <option  value="117105079/lec08.mp4">Camera Calibration and Stereo Imaging</option>
      
      <option  value="117105079/lec09.mp4">Interpolation and Resampling</option>
      
      <option  value="117105079/lec10.mp4">Image Interpolation - II</option>
      
      <option  value="117105079/lec11.mp4">Image Interpolation - I</option>
      
      <option  value="117105079/lec12.mp4">Image Transformation - II</option>
      
      <option  value="117105079/lec13.mp4">Fourier Transformation - I</option>
      
      <option  value="117105079/lec14.mp4">Fourier Transformation - II</option>
      
      <option  value="117105079/lec15.mp4">Discrete Cosine Transform</option>
      
      <option  value="117105079/lec16.mp4">K-L Transform</option>
      
      <option  value="117105079/lec17.mp4">Image Enhancement</option>
      
      <option  value="117105079/lec18.mp4">Image Enhancement</option>
      
      <option  value="117105079/lec19.mp4">Image Enhancement</option>
      
      <option  value="117105079/lec20.mp4">Image Enhancement</option>
      
      <option  value="117105079/lec21.mp4">Image Enhancement Frequency</option>
      
      <option  value="117105079/lec22.mp4">Image Restoration - I</option>
      
      <option  value="117105079/lec23.mp4">Image Restoration - II</option>
      
      <option  value="117105079/lec24.mp4">Image Restoration -III</option>
      
      <option  value="117105079/lec25.mp4">Image Registration</option>
      
      <option  value="117105079/lec26.mp4">Colour Image Processing - I</option>
      
      <option  value="117105079/lec27.mp4">Colour Image Processing - II</option>
      
      <option  value="117105079/lec28.mp4">Colour Image Processing - III</option>
      
      <option  value="117105079/lec29.mp4">Image Segmentation - I</option>
      
      <option  value="117105079/lec30.mp4">Image Segmentation - II</option>
      
      <option  value="117105079/lec31.mp4">Image Segmentation - III</option>
      
      <option  value="117105079/lec32.mp4">Image Segmentation - IV</option>
      
      <option  value="117105079/lec33.mp4">Mathematical Morphology - I</option>
      
      <option  value="117105079/lec34.mp4">Mathematical Morphology - II</option>
      
      <option  value="117105079/lec35.mp4">Mathematical Morphology - III</option>
      
      <option  value="117105079/lec36.mp4">Mathematical Morphology - IV</option>
      
      <option  value="117105079/lec37.mp4">Object Representation and Description - I</option>
      
      <option  value="117105079/lec38.mp4">Object Representation and Description - II</option>
      
      <option  value="117105079/lec39.mp4">Object Representation and Description - III</option>
      
      <option  value="117105079/lec40.mp4">Object Recognition</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105080</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Systems Design</strong></td>
	<td><strong>Prof. D. Roychoudhury</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105080/lec01.mp4">Introduction to Digital Systems Design</option>
      
      <option  value="117105080/lec02.mp4">Introduction</option>
      
      <option  value="117105080/lec03.mp4">Digital Logic - I</option>
      
      <option  value="117105080/lec04.mp4">Digital Logic - II</option>
      
      <option  value="117105080/lec05.mp4">Digital Logic - III</option>
      
      <option  value="117105080/lec06.mp4">Boolean Algebra</option>
      
      <option  value="117105080/lec07.mp4">Boolean Algebra</option>
      
      <option  value="117105080/lec08.mp4">Boolean Function Minimization</option>
      
      <option  value="117105080/lec09.mp4">Boolean Function Minimization</option>
      
      <option  value="117105080/lec10.mp4">Boolean Function Minimization</option>
      
      <option  value="117105080/lec11.mp4">Hazzard Covers by K - Map</option>
      
      <option  value="117105080/lec12.mp4">Combinational Circuit Design</option>
      
      <option  value="117105080/lec13.mp4">Design of ADDER Circuits</option>
      
      <option  value="117105080/lec14.mp4">Design of Subtractor Circuits</option>
      
      <option  value="117105080/lec15.mp4">Digital of Common Digital Elements</option>
      
      <option  value="117105080/lec16.mp4">Design of Complex Combinational Circuits</option>
      
      <option  value="117105080/lec17.mp4">Design of Combinational Circuits</option>
      
      <option  value="117105080/lec18.mp4">Combinational Logic Problem Design</option>
      
      <option  value="117105080/lec19.mp4">Combinational Logic Design</option>
      
      <option  value="117105080/lec20.mp4">Logic Design with PLA</option>
      
      <option  value="117105080/lec21.mp4">Synchronous Sequential Circuit Design</option>
      
      <option  value="117105080/lec22.mp4">Design of Sequential Modules</option>
      
      <option  value="117105080/lec23.mp4">Design of Registers and Counter</option>
      
      <option  value="117105080/lec24.mp4">Finite State Machine Design</option>
      
      <option  value="117105080/lec25.mp4">Finite State Machine Design and Optimization</option>
      
      <option  value="117105080/lec26.mp4">Programmable Logic Devices</option>
      
      <option  value="117105080/lec27.mp4">Programmable Logic Devices</option>
      
      <option  value="117105080/lec28.mp4">Programmable Logic Devices</option>
      
      <option  value="117105080/lec29.mp4">Design of Arithmetic Circuits</option>
      
      <option  value="117105080/lec30.mp4">Design of Arithmetic Circuits</option>
      
      <option  value="117105080/lec31.mp4">Design of Memory Circuits</option>
      
      <option  value="117105080/lec32.mp4">Algorithmic State Machines Chart</option>
      
      <option  value="117105080/lec33.mp4">Design of Computer Instruction Set and the CPU</option>
      
      <option  value="117105080/lec34.mp4">Design of Computer Instruction Set and the CPU</option>
      
      <option  value="117105080/lec35.mp4">Design of Computer Instruction Set and the CPU</option>
      
      <option  value="117105080/lec36.mp4">Design of Computer Instruction Set and the CPU</option>
      
      <option  value="117105080/lec37.mp4">Design of Computer Instruction Set and the CPU</option>
      
      <option  value="117105080/lec38.mp4">Design of Computer Instruction Set and the CPU</option>
      
      <option  value="117105080/lec39.mp4">Design of a Micro Programmed CPU</option>
      
      <option  value="117105080/lec40.mp4">Digital System Design Current State of the Art</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105081</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Voice & Picture Communication</strong></td>
	<td><strong>Prof. Somnath Sengupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105081/lec01.mp4">Introduction</option>
      
      <option  value="117105081/lec02.mp4">Speech Production Model</option>
      
      <option  value="117105081/lec03.mp4">Speech Coding : Objectives and Requirements</option>
      
      <option  value="117105081/lec04.mp4">Quantizers for Speech Signal</option>
      
      <option  value="117105081/lec05.mp4">mew - Law and Optimum Quantizer</option>
      
      <option  value="117105081/lec06.mp4">Adaptive Quantizer</option>
      
      <option  value="117105081/lec07.mp4">Differential Quantization</option>
      
      <option  value="117105081/lec08.mp4">LDM and ADM</option>
      
      <option  value="117105081/lec09.mp4">Differential PCM and Adaptive Prediction</option>
      
      <option  value="117105081/lec10.mp4">Linear Prediction of Speech</option>
      
      <option  value="117105081/lec11.mp4">Computational Aspects of LPC parameters</option>
      
      <option  value="117105081/lec12.mp4">Cholesky Decomposition</option>
      
      <option  value="117105081/lec13.mp4">Lattice Formulation of LPC Coefficient</option>
      
      <option  value="117105081/lec14.mp4">Linear Predictive Synthesizer</option>
      
      <option  value="117105081/lec15.mp4">LPC Vocoder</option>
      
      <option  value="117105081/lec16.mp4">Introduction to Image and Video Coding</option>
      
      <option  value="117105081/lec17.mp4">Lossy Image Compression : DCT</option>
      
      <option  value="117105081/lec18.mp4">DCT Quantization and Limitations</option>
      
      <option  value="117105081/lec19.mp4">Theory of Wavelets</option>
      
      <option  value="117105081/lec20.mp4">Discrete Wavelet Transforms</option>
      
      <option  value="117105081/lec21.mp4">DWT on the Images and its Encoding</option>
      
      <option  value="117105081/lec22.mp4">Embedded Zero Tree Wavelet Encoding</option>
      
      <option  value="117105081/lec23.mp4">Video Coding : Basic Building Blocks</option>
      
      <option  value="117105081/lec24.mp4">Motion Estimate Techniques</option>
      
      <option  value="117105081/lec25.mp4">Fast Motion Estimation Techniques</option>
      
      <option  value="117105081/lec26.mp4">Video Coding Standards</option>
      
      <option  value="117105081/lec27.mp4">Advanced Coding Aspects</option>
      
      <option  value="117105081/lec28.mp4">Audio Coding: Basic Concepts</option>
      
      <option  value="117105081/lec29.mp4">Audio Coding AC - 3</option>
      
      <option  value="117105081/lec30.mp4">AC -3 Decoder</option>
      
      <option  value="117105081/lec31.mp4">MPEG - 1 Audio Coding</option>
      
      <option  value="117105081/lec32.mp4">Introduction to VoIP</option>
      
      <option  value="117105081/lec33.mp4">VoIP Signaling : H.323 Protocol</option>
      
      <option  value="117105081/lec34.mp4">H.323 Call Controls and Enhancements</option>
      
      <option  value="117105081/lec35.mp4">Interworking with PSTN Limitations and Solution</option>
      
      <option  value="117105081/lec36.mp4">Multiplexing Schemes</option>
      
      <option  value="117105081/lec37.mp4">H.323:Multiplexing:Header Compression and BW</option>
      
      <option  value="117105081/lec38.mp4">ISDN Video Conferencing</option>
      
      <option  value="117105081/lec39.mp4">Video Conferencing : SIP Protocol</option>
      
      <option  value="117105081/lec40.mp4">4G Multimedia Conferencing</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105082</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>MEMS and Microsystems</strong></td>
	<td><strong>Prof. Santiram Kal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105082/lec01.mp4">Introduction to MEMS & Microsystems</option>
      
      <option  value="117105082/lec02.mp4">Introduction to Microsensors</option>
      
      <option  value="117105082/lec03.mp4">Evaluation of MEMS, Microsensors, Market Survey</option>
      
      <option  value="117105082/lec04.mp4">Application of MEMS</option>
      
      <option  value="117105082/lec05.mp4">MEMS Materials</option>
      
      <option  value="117105082/lec06.mp4">MEMS Materials Properties</option>
      
      <option  value="117105082/lec07.mp4">MEMS Materials Properties (Contd.)</option>
      
      <option  value="117105082/lec08.mp4">Microelectronic Technology for MEMS - II</option>
      
      <option  value="117105082/lec09.mp4">Microelectronic Technology for MEMS - III</option>
      
      <option  value="117105082/lec10.mp4">Micromachining Technology for MEMS</option>
      
      <option  value="117105082/lec11.mp4">Micromachining Process</option>
      
      <option  value="117105082/lec12.mp4">Etch Stop Techniques and Microstructure</option>
      
      <option  value="117105082/lec13.mp4">Surface and Quartz Micromachining</option>
      
      <option  value="117105082/lec14.mp4">Fabrication of Micromachined Microstructure</option>
      
      <option  value="117105082/lec15.mp4">Microstereolithography</option>
      
      <option  value="117105082/lec16.mp4">MEMS Microsensors Thermal</option>
      
      <option  value="117105082/lec17.mp4">Micromachined Microsensors Mechanical</option>
      
      <option  value="117105082/lec18.mp4">MEMS Pressure and Flow Sensor</option>
      
      <option  value="117105082/lec19.mp4">Micromachined Flow Sensors</option>
      
      <option  value="117105082/lec20.mp4">MEMS Inertial Sensors</option>
      
      <option  value="117105082/lec21.mp4">Micromachined Microaccelerometers for MEMS</option>
      
      <option  value="117105082/lec22.mp4">MEMS Accelerometers for Avionics</option>
      
      <option  value="117105082/lec23.mp4">Temperature Drift and Damping Analysis</option>
      
      <option  value="117105082/lec24.mp4">Piezoresistive Accelerometer Technology</option>
      
      <option  value="117105082/lec25.mp4">MEMS Capacitive Accelerometer</option>
      
      <option  value="117105082/lec26.mp4">MEMS Capacitive Accelerometer Process</option>
      
      <option  value="117105082/lec27.mp4">MEMS Gyro Sensor</option>
      
      <option  value="117105082/lec28.mp4">MEMS for Space Application</option>
      
      <option  value="117105082/lec29.mp4">Polymer MEMS & Carbon Nano Tubes CNT</option>
      
      <option  value="117105082/lec30.mp4">Wafer Bonding & Packaging of MEMS</option>
      
      <option  value="117105082/lec31.mp4">Interface Electronics for MEMS</option>
      
      <option  value="117105082/lec32.mp4">MEMS for Biomedical Applications (Bio-MEMS)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105084</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Neural Networks and Applications</strong></td>
	<td><strong>Prof. Somnath Sengupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105084/lec01.mp4">Introduction to Artificial Neural Networks</option>
      
      <option  value="117105084/lec02.mp4">Artificial Neuron Model and Linear Regression</option>
      
      <option  value="117105084/lec03.mp4">Gradient Descent Algorithm</option>
      
      <option  value="117105084/lec04.mp4">Nonlinear Activation Units and Learning Mechanisms</option>
      
      <option  value="117105084/lec05.mp4">Learning Mechanisms-Hebbian,Competitive,Boltzmann</option>
      
      <option  value="117105084/lec06.mp4">Associative memory</option>
      
      <option  value="117105084/lec07.mp4">Associative Memory Model</option>
      
      <option  value="117105084/lec08.mp4">Condition for Perfect Recall in Associative Memory</option>
      
      <option  value="117105084/lec09.mp4">Statistical Aspects of Learning</option>
      
      <option  value="117105084/lec10.mp4">V.C. Dimensions: Typical Examples</option>
      
      <option  value="117105084/lec11.mp4">Importance of V.C. Dimensions Structural Risk Minimization</option>
      
      <option  value="117105084/lec12.mp4">Single-Layer Perceptions</option>
      
      <option  value="117105084/lec13.mp4">Unconstrained Optimization: Gauss-Newton's Method</option>
      
      <option  value="117105084/lec14.mp4">Linear Least Squares Filters</option>
      
      <option  value="117105084/lec15.mp4">Least Mean Squares Algorithm</option>
      
      <option  value="117105084/lec16.mp4">Perceptron Convergence Theorem</option>
      
      <option  value="117105084/lec17.mp4">Bayes Classifier & Perceptron: An Analogy</option>
      
      <option  value="117105084/lec18.mp4">Bayes Classifier for Gaussian Distribution</option>
      
      <option  value="117105084/lec19.mp4">Back Propagation Algorithm</option>
      
      <option  value="117105084/lec20.mp4">Practical Consideration in Back Propagation Algorithm</option>
      
      <option  value="117105084/lec21.mp4">Solution of Non-Linearly Separable Problems Using MLP</option>
      
      <option  value="117105084/lec22.mp4">Heuristics For Back-Propagation</option>
      
      <option  value="117105084/lec23.mp4">Multi-Class Classification Using Multi-layered Perceptrons</option>
      
      <option  value="117105084/lec24.mp4">Radial Basis Function Networks: Cover's Theorem</option>
      
      <option  value="117105084/lec25.mp4">Radial Basis Function Networks: Separability & Interpolation</option>
      
      <option  value="117105084/lec26.mp4">Posed Surface Reconstruction</option>
      
      <option  value="117105084/lec27.mp4">Solution of Regularization Equation: Greens Function</option>
      
      <option  value="117105084/lec28.mp4">Use of Greens Function in Regularization Networks</option>
      
      <option  value="117105084/lec29.mp4">Regularization Networks and Generalized RBF</option>
      
      <option  value="117105084/lec30.mp4">Comparison Between MLP and RBF</option>
      
      <option  value="117105084/lec31.mp4">Learning Mechanisms in RBF</option>
      
      <option  value="117105084/lec32.mp4">Introduction to Principal Components and Analysis</option>
      
      <option  value="117105084/lec33.mp4">Dimensionality reduction Using PCA</option>
      
      <option  value="117105084/lec34.mp4">Hebbian-Based Principal Component Analysis</option>
      
      <option  value="117105084/lec35.mp4">Introduction to Self Organizing Maps</option>
      
      <option  value="117105084/lec36.mp4">Cooperative and Adaptive Processes in SOM</option>
      
      <option  value="117105084/lec37.mp4">Vector-Quantization Using SOM</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105085</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Probability and Random Processes</strong></td>
	<td><strong>Prof. Mrityunjoy Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117105085/lec01.mp4">Introduction to the Theory of Probability</option>
      
      <option  value="117105085/lec02.mp4">Axioms of Probability</option>
      
      <option  value="117105085/lec03.mp4">Axioms of Probability (Contd.)</option>
      
      <option  value="117105085/lec04.mp4">Introduction to Random Variables</option>
      
      <option  value="117105085/lec05.mp4">Probability Distributions and Density Functions</option>
      
      <option  value="117105085/lec06.mp4">Conditional Distribution and Density Functions</option>
      
      <option  value="117105085/lec07.mp4">Function of a Random Variable</option>
      
      <option  value="117105085/lec08.mp4">Function of a Random Variable (Contd.)</option>
      
      <option  value="117105085/lec09.mp4">Mean and Variance of a Random Variable</option>
      
      <option  value="117105085/lec10.mp4">Moments</option>
      
      <option  value="117105085/lec11.mp4">Characteristic Function</option>
      
      <option  value="117105085/lec12.mp4">Two Random Variables</option>
      
      <option  value="117105085/lec13.mp4">Function of Two Random Variables</option>
      
      <option  value="117105085/lec14.mp4">Function of Two Random Variables (Contd.)</option>
      
      <option  value="117105085/lec15.mp4">Correlation Covariance and Related Innver</option>
      
      <option  value="117105085/lec16.mp4">Vector Space of Random Variables</option>
      
      <option  value="117105085/lec17.mp4">Joint Moments</option>
      
      <option  value="117105085/lec18.mp4">Joint Characteristic Functions</option>
      
      <option  value="117105085/lec19.mp4">Joint Conditional Densities</option>
      
      <option  value="117105085/lec20.mp4">Joint Conditional Densities (Contd.)</option>
      
      <option  value="117105085/lec21.mp4">Sequences of Random Variables</option>
      
      <option  value="117105085/lec22.mp4">Sequences of Random Variables (Contd.)</option>
      
      <option  value="117105085/lec23.mp4">Correlation Matrices and their Properties</option>
      
      <option  value="117105085/lec24.mp4">Correlation Matrices and their Properties</option>
      
      <option  value="117105085/lec25.mp4">Conditional Densities of Random Vectors</option>
      
      <option  value="117105085/lec26.mp4">Characteristic Functions and Normality</option>
      
      <option  value="117105085/lec27.mp4">Tchebycheff Inequality and Estimation of an Unknown Parameter</option>
      
      <option  value="117105085/lec28.mp4">Central Limit Theorem</option>
      
      <option  value="117105085/lec29.mp4">Introduction to Stochastic Process</option>
      
      <option  value="117105085/lec30.mp4">Stationary Processes</option>
      
      <option  value="117105085/lec31.mp4">Cyclostationary Processes</option>
      
      <option  value="117105085/lec32.mp4">System with Random Process at Input</option>
      
      <option  value="117105085/lec33.mp4">Ergodic Processes</option>
      
      <option  value="117105085/lec34.mp4">Introduction to Spectral Analysis</option>
      
      <option  value="117105085/lec35.mp4">Spectral Analysis Contd.</option>
      
      <option  value="117105085/lec36.mp4">Spectrum Estimation - Non Parametric Methods</option>
      
      <option  value="117105085/lec37.mp4">Spectrum Estimation - Parametric Methods</option>
      
      <option  value="117105085/lec38.mp4">Autoregressive Modeling and Linear Prediction</option>
      
      <option  value="117105085/lec39.mp4">Linear Mean Square Estimation - Wiener (FIR)</option>
      
      <option  value="117105085/lec40.mp4">Adaptive Filtering - LMS Algorithm</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106086</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Digital Circuits and Systems</strong></td>
	<td><strong>Prof. S. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106086/lec01.mp4">Introduction To Digital Circuits</option>
      
      <option  value="117106086/lec02.mp4">Introduction To Digital Circuits</option>
      
      <option  value="117106086/lec03.mp4">Combinational Logic Basics</option>
      
      <option  value="117106086/lec04.mp4">Combinational Circuits</option>
      
      <option  value="117106086/lec05.mp4">Logic Simplification</option>
      
      <option  value="117106086/lec06.mp4">Karnaugh Maps And Implicants</option>
      
      <option  value="117106086/lec07.mp4">Logic Minimization Using Karnaugh Maps</option>
      
      <option  value="117106086/lec08.mp4">Karnaugh Map Minimization Using Maxterms</option>
      
      <option  value="117106086/lec09.mp4">Code Converters</option>
      
      <option  value="117106086/lec10.mp4">Parity Generators And Display Decoder</option>
      
      <option  value="117106086/lec11.mp4">Arithmetic Circuits</option>
      
      <option  value="117106086/lec12.mp4">Carry Look Ahead Adders</option>
      
      <option  value="117106086/lec13.mp4">Subtractors</option>
      
      <option  value="117106086/lec14.mp4">2?'S Complement Subtractor and BCD Adder</option>
      
      <option  value="117106086/lec15.mp4">Array Multiplier</option>
      
      <option  value="117106086/lec16.mp4">Introduction to Sequential Circuits</option>
      
      <option  value="117106086/lec17.mp4">S-R, J-K and D Flip Flops</option>
      
      <option  value="117106086/lec18.mp4">J-K and T Flip Flops</option>
      
      <option  value="117106086/lec19.mp4">Triggering Mechanisms of Flip Flops and Counters</option>
      
      <option  value="117106086/lec20.mp4">Up/ Down Counters</option>
      
      <option  value="117106086/lec21.mp4">Shift Registers</option>
      
      <option  value="117106086/lec22.mp4">Application of shift Registers</option>
      
      <option  value="117106086/lec23.mp4">State Machines</option>
      
      <option  value="117106086/lec24.mp4">Design of Synchronous Sequential Circuits</option>
      
      <option  value="117106086/lec25.mp4">Design using J-K Flip Flop</option>
      
      <option  value="117106086/lec26.mp4">Mealy and Moore Circuits</option>
      
      <option  value="117106086/lec27.mp4">Pattern Detector</option>
      
      <option  value="117106086/lec28.mp4">MSI and LSI Based Design</option>
      
      <option  value="117106086/lec29.mp4">Multiplexer Based Design</option>
      
      <option  value="117106086/lec30.mp4">Encoders and Decoders</option>
      
      <option  value="117106086/lec31.mp4">Programmable Logic Devices</option>
      
      <option  value="117106086/lec32.mp4">Design using Programmable Logic Devices</option>
      
      <option  value="117106086/lec33.mp4">Design using Programmable Logic Devices (contd)</option>
      
      <option  value="117106086/lec34.mp4">MSI and LSI based Implementation of Sequential Circuits</option>
      
      <option  value="117106086/lec35.mp4">MSI and LSI based Implementation of Sequential Circuits (contd)</option>
      
      <option  value="117106086/lec36.mp4">Design of circuits using MSI sequential blocks</option>
      
      <option  value="117106086/lec37.mp4">System Design Example</option>
      
      <option  value="117106086/lec38.mp4">System Design Example (contd)</option>
      
      <option  value="117106086/lec39.mp4">System Design using the concept of controllers</option>
      
      <option  value="117106086/lec40.mp4">System Design using the concept of controllers (contd)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106087</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Electronics for Analog Signal Processing - I</strong></td>
	<td><strong>Prof. K. Radhakrishna Rao</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106087/lec01.mp4">Introduction</option>
      
      <option  value="117106087/lec02.mp4">Diode</option>
      
      <option  value="117106087/lec03.mp4">Diode characteristics</option>
      
      <option  value="117106087/lec04.mp4">Rectifier</option>
      
      <option  value="117106087/lec05.mp4">Voltage Multiplier</option>
      
      <option  value="117106087/lec06.mp4">Full Wave Rectifier and Peak Detector</option>
      
      <option  value="117106087/lec07.mp4">Diode as a GATE</option>
      
      <option  value="117106087/lec08.mp4">Analog GATE</option>
      
      <option  value="117106087/lec09.mp4">Small Signal Analysis of Diode Circuit</option>
      
      <option  value="117106087/lec10.mp4">Zener Regulator and Voltage Regulator</option>
      
      <option  value="117106087/lec11.mp4">Varactor Diode</option>
      
      <option  value="117106087/lec12.mp4">Amplifiers</option>
      
      <option  value="117106087/lec13.mp4">Cascading of Amplifiers</option>
      
      <option  value="117106087/lec14.mp4">Cascading of Amplifiers</option>
      
      <option  value="117106087/lec15.mp4">h and g Parameters</option>
      
      <option  value="117106087/lec16.mp4">Two Port Analysis</option>
      
      <option  value="117106087/lec17.mp4">Amplifier Applications</option>
      
      <option  value="117106087/lec18.mp4">Frequency Limitations Of An Amplifier</option>
      
      <option  value="117106087/lec19.mp4">Distortion In Amplifiers</option>
      
      <option  value="117106087/lec20.mp4">Bipolar Junction Transistor</option>
      
      <option  value="117106087/lec21.mp4">Transistor (BJT) Inverter</option>
      
      <option  value="117106087/lec22.mp4">Transistor Biasing</option>
      
      <option  value="117106087/lec23.mp4">Stable Way of Biasing</option>
      
      <option  value="117106087/lec24.mp4">Common Emitter Amplifiers</option>
      
      <option  value="117106087/lec25.mp4">Transistor Biasing Using Single Supply</option>
      
      <option  value="117106087/lec26.mp4">Metal Oxide Semiconductor</option>
      
      <option  value="117106087/lec27.mp4">Construction of a MOSFET</option>
      
      <option  value="117106087/lec28.mp4">Varieties of MOSFETS and JFETS</option>
      
      <option  value="117106087/lec29.mp4">Characteristics of MOSFET</option>
      
      <option  value="117106087/lec30.mp4">Cascading Amplifiers</option>
      
      <option  value="117106087/lec31.mp4">Cascading (Direct Coupling)</option>
      
      <option  value="117106087/lec32.mp4">The Differential Amplifiers</option>
      
      <option  value="117106087/lec33.mp4">BJT Differential Amplifiers</option>
      
      <option  value="117106087/lec34.mp4">MOSFET Differential Amplifiers</option>
      
      <option  value="117106087/lec35.mp4">Cascading Differential Amplifiers</option>
      
      <option  value="117106087/lec36.mp4">Current Source and Current Sink</option>
      
      <option  value="117106087/lec37.mp4">NMOS Inverters and CMOS Inverters</option>
      
      <option  value="117106087/lec38.mp4">Active Components used in Electronics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106088</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Electronics for Analog Signal Processing - II</strong></td>
	<td><strong>Prof. K. Radhakrishna Rao</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106088/lec01.mp4">Feedback Theory</option>
      
      <option  value="117106088/lec02.mp4">Negative Feedback</option>
      
      <option  value="117106088/lec03.mp4">Negative Feedback</option>
      
      <option  value="117106088/lec04.mp4">Y-Feedback</option>
      
      <option  value="117106088/lec05.mp4">h and g Negative Feedback</option>
      
      <option  value="117106088/lec06.mp4">g Feedback with Mosfet</option>
      
      <option  value="117106088/lec07.mp4">Operational Amplifier in Negative Feedback</option>
      
      <option  value="117106088/lec08.mp4">Operational Amplifier in Negative Feedback</option>
      
      <option  value="117106088/lec09.mp4">Positive Feedback (Regenerative)</option>
      
      <option  value="117106088/lec10.mp4">Experimental Demonstration</option>
      
      <option  value="117106088/lec11.mp4">Instrumentation Amplifiers</option>
      
      <option  value="117106088/lec12.mp4">Active Filters</option>
      
      <option  value="117106088/lec13.mp4">Simulation of Harmonic Oscillators</option>
      
      <option  value="117106088/lec14.mp4">Oscillators</option>
      
      <option  value="117106088/lec15.mp4">Oscillators</option>
      
      <option  value="117106088/lec16.mp4">Frequency Compensation in Negative Feedback</option>
      
      <option  value="117106088/lec17.mp4">Frequency Compensation</option>
      
      <option  value="117106088/lec18.mp4">Wideband (video) Amplifiers</option>
      
      <option  value="117106088/lec19.mp4">Wideband Amplifiers</option>
      
      <option  value="117106088/lec20.mp4">ICs For Video And Tuned Amplifier Applications</option>
      
      <option  value="117106088/lec21.mp4">Power Amplifier</option>
      
      <option  value="117106088/lec22.mp4">Power Amplifier</option>
      
      <option  value="117106088/lec23.mp4">Class B and C Power Amplifiers</option>
      
      <option  value="117106088/lec24.mp4">Class-B Power Amplifier Load and Drive</option>
      
      <option  value="117106088/lec25.mp4">Control Circuits</option>
      
      <option  value="117106088/lec26.mp4">Voltage Regulators</option>
      
      <option  value="117106088/lec27.mp4">Voltage Regulators</option>
      
      <option  value="117106088/lec28.mp4">Voltage Regulators</option>
      
      <option  value="117106088/lec29.mp4">Convertors</option>
      
      <option  value="117106088/lec30.mp4">Analog Multipliers (Modems & Mixers)</option>
      
      <option  value="117106088/lec31.mp4">Log-Antilog Multipliers</option>
      
      <option  value="117106088/lec32.mp4">Multipliers</option>
      
      <option  value="117106088/lec33.mp4">Multipliers</option>
      
      <option  value="117106088/lec34.mp4">AGC/AVC</option>
      
      <option  value="117106088/lec35.mp4">AGC/AVC</option>
      
      <option  value="117106088/lec36.mp4">Experimental Demonstration</option>
      
      <option  value="117106088/lec37.mp4">PLL (Phase Locked Loop)</option>
      
      <option  value="117106088/lec38.mp4">PLL(Phase Locked Loop)</option>
      
      <option  value="117106088/lec39.mp4">Lock Range Capture Range and FSK and FM</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106089</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>High Speed Devices and Circuits</strong></td>
	<td><strong>Prof. K.N. Bhat</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106089/lec01.mp4">Introduction to Basic concepts</option>
      
      <option  value="117106089/lec02.mp4">Requirements for high speed circuits, devices and materials</option>
      
      <option  value="117106089/lec03.mp4">Classification and properties of semiconductor devices</option>
      
      <option  value="117106089/lec04.mp4">Ternary compound semiconductors and their applications</option>
      
      <option  value="117106089/lec05.mp4">Ternary compound semiconductors and their applications(contd.)</option>
      
      <option  value="117106089/lec06.mp4">Crystal structures in GaAs</option>
      
      <option  value="117106089/lec07.mp4">Dopants and impurities in GaAs and InP</option>
      
      <option  value="117106089/lec08.mp4">Brief Overview of GaAs Technology for High Speed Devices</option>
      
      <option  value="117106089/lec09.mp4">Epitaxial Techniques for GaAs and high speed devices</option>
      
      <option  value="117106089/lec10.mp4">MBE and LPE for GaAs Epitoxy</option>
      
      <option  value="117106089/lec11.mp4">GaAs and InP devices for Microelectronics</option>
      
      <option  value="117106089/lec12.mp4">Metal Semiconductor contacts for MESFET</option>
      
      <option  value="117106089/lec13.mp4">Metal Semiconductor contacts for MESFET(contd)</option>
      
      <option  value="117106089/lec14.mp4">Metal Semiconductor contacts for MESFET(Contd)</option>
      
      <option  value="117106089/lec15.mp4">Ohmic contacts on semiconductors</option>
      
      <option  value="117106089/lec16.mp4">Fermi level pinning, I V characteristics of Schottky Barrier Diodes</option>
      
      <option  value="117106089/lec17.mp4">Schottky Barrier Diodes I V characteristics of Non idealities -1</option>
      
      <option  value="117106089/lec18.mp4">Schottky Barrier Diodes I V characteristics of Non idealities -1</option>
      
      <option  value="117106089/lec19.mp4">Causes of Non idealities in the Schottky Barrier Diodes (I V characteristics)</option>
      
      <option  value="117106089/lec20.mp4">MESFET operations and I V characteristics</option>
      
      <option  value="117106089/lec21.mp4">MESFET I V characteristics Shockley's Model</option>
      
      <option  value="117106089/lec22.mp4">MESFET Shockley's Model and velocity saturation effect</option>
      
      <option  value="117106089/lec23.mp4">MESFET velocity saturation effect on drain current saturation</option>
      
      <option  value="117106089/lec24.mp4">MESFET : Drain current saturation Ids due to velocity saturation</option>
      
      <option  value="117106089/lec25.mp4">MESFET : Effects of channel length and gate length on IDS and gm</option>
      
      <option  value="117106089/lec26.mp4">MESFET : Effects of velocity saturation and velocity field characteristics</option>
      
      <option  value="117106089/lec27.mp4">MESFET : Effects of velocity field characteristics - Overshoot effects</option>
      
      <option  value="117106089/lec28.mp4">MESFET : Velocity overshoot effect and self aligned MESFET SAINT</option>
      
      <option  value="117106089/lec29.mp4">Self Aligned MESFET SAINT Threshold Voltage and Sub Threshold current</option>

      
      <option  value="117106089/lec30.mp4">Hetero junctions</option>
      
      <option  value="117106089/lec31.mp4">Hetero junctions and high electron Mobility Transistor(HEMT)</option>
      
      <option  value="117106089/lec32.mp4">Hetero junctions and high electron Mobility Transistor(HEMT) (Contd.)</option>
      
      <option  value="117106089/lec33.mp4">High Electron Mobility Transistor</option>
      
      <option  value="117106089/lec34.mp4">HEMT off voltage, I-V characteristics and trans conductance</option>
      
      <option  value="117106089/lec35.mp4">I-V characteristics and trans conductance and optimization</option>
      
      <option  value="117106089/lec36.mp4">Indium phosphide based HEMT</option>
      
      <option  value="117106089/lec37.mp4">Pseudomorphic HEMT and Hetrojunction Bipolar Transistors</option>
      
      <option  value="117106089/lec38.mp4">Hetero junction Bipolar Transistors (HBT)</option>
      
      <option  value="117106089/lec39.mp4">Hetero junction Bipolar Transistors (HBT) (Contd.)</option>
      
      <option  value="117106089/lec40.mp4">Hetero junction Bipolar Transistors (HBT) (Contd.)</option>
      
      <option  value="117106089/lec41.mp4">Hetero junction Bipolar Transistors(HBT)-4(Contd)</option>
          </select></td>
	
	</tr>
	</form>
    
        
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106091</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Solid State Devices</strong></td>
	<td><strong>Prof. S. Karmalkar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106091/lec01.mp4">Introduction on Solid State Devices</option>
      
      <option  value="117106091/lec02.mp4">Evolution and Uniqueness of Semiconductor</option>
      
      <option  value="117106091/lec03.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec04.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec05.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec06.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec07.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec08.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec09.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec10.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec11.mp4">Equilibrium Carrier Concentration</option>
      
      <option  value="117106091/lec12.mp4">Carrier Transport</option>
      
      <option  value="117106091/lec13.mp4">Carrier Transport (contd)</option>
      
      <option  value="117106091/lec14.mp4">Carrier Transport (contd)</option>
      
      <option  value="117106091/lec15.mp4">Excess Carriers</option>
      
      <option  value="117106091/lec16.mp4">Excess Carriers (contd)</option>
      
      <option  value="117106091/lec17.mp4">Procedure for Device Analysis</option>
      
      <option  value="117106091/lec18.mp4">Procedure for Device Analysis (contd)</option>
      
      <option  value="117106091/lec19.mp4">PN Junction</option>
      
      <option  value="117106091/lec20.mp4">PN Junction (contd)</option>
      
      <option  value="117106091/lec21.mp4">PN Junction (contd)</option>
      
      <option  value="117106091/lec22.mp4">PN Junction (contd)</option>
      
      <option  value="117106091/lec23.mp4">PN Junction (contd)</option>
      
      <option  value="117106091/lec24.mp4">PN Junction (contd)</option>
      
      <option  value="117106091/lec25.mp4">PN Junction (contd)</option>
      
      <option  value="117106091/lec26.mp4">Bipolar Junction Transistor</option>
      
      <option  value="117106091/lec27.mp4">Bipolar Junction Transistor (contd)</option>
      
      <option  value="117106091/lec28.mp4">Bipolar Junction Transistor (contd)</option>
      
      <option  value="117106091/lec29.mp4">Bipolar Junction Transistor (contd)</option>
      
      <option  value="117106091/lec30.mp4">Bipolar Junction Transistor (contd)</option>
      
      <option  value="117106091/lec31.mp4">Bipolar Junction Transistor (contd)</option>
      
      <option  value="117106091/lec32.mp4">Bipolar Junction Transistor (contd)</option>
      
      <option  value="117106091/lec33.mp4">Metal-Oxide-Semiconductor (MOS) Junction</option>
      
      <option  value="117106091/lec34.mp4">Metal-Oxide-Semiconductor (MOS) Junction (contd)</option>
      
      <option  value="117106091/lec35.mp4">Metal-Oxide-Semiconductor (MOS) Junction (contd)</option>
      
      <option  value="117106091/lec36.mp4">Metal-Oxide-Semiconductor (MOS) Junction (contd)</option>
      
      <option  value="117106091/lec37.mp4">Metal-Oxide-Semiconductor (MOS) Junction (contd)</option>
      
      <option  value="117106091/lec38.mp4">MOS Field Effect Transistor</option>
      
      <option  value="117106091/lec39.mp4">MOS Field Effect Transistor (contd)</option>
      
      <option  value="117106091/lec40.mp4">MOS Field Effect Transistor (contd)</option>
      
      <option  value="117106091/lec41.mp4">MOS Field Effect Transistor (contd)</option>
      
      <option  value="117106091/lec42.mp4">The Final Lecture - Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106092</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>VLSI Circuits</strong></td>
	<td><strong>Prof. S. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106092/lec01.mp4">Introduction to VLSI Design</option>
      
      <option  value="117106092/lec02.mp4">Combinational Circuit Design</option>
      
      <option  value="117106092/lec03.mp4">Programmable Logic Devices</option>
      
      <option  value="117106092/lec04.mp4">Programmable Array Logic</option>
      
      <option  value="117106092/lec05.mp4">Review of Flip-Flops</option>
      
      <option  value="117106092/lec06.mp4">Sequential Circuits</option>
      
      <option  value="117106092/lec07.mp4">Sequential Circuit Design</option>
      
      <option  value="117106092/lec08.mp4">MSI Implementation of Sequential Circuits</option>
      
      <option  value="117106092/lec09.mp4">Design of Sequential Circuits using One Hot Controller</option>
      
      <option  value="117106092/lec10.mp4">Verilog Modeling of Combinational Circuits</option>
      
      <option  value="117106092/lec11.mp4">Modeling of Verilog Sequential Circuits - Core Statements</option>
      
      <option  value="117106092/lec12.mp4">Modeling of Verilog Sequential Circuits - Core Statements(Contd)</option>
      
      <option  value="117106092/lec13.mp4">RTL Coding Guidelines</option>
      
      <option  value="117106092/lec14.mp4">Coding Organization - Complete Realization</option>
      
      <option  value="117106092/lec15.mp4">Coding Organization - Complete Realization (Contd)</option>
      
      <option  value="117106092/lec16.mp4">Writing a Test Bench</option>
      
      <option  value="117106092/lec17.mp4">System Design using ASM Chart</option>
      
      <option  value="117106092/lec18.mp4">Example of System Design using ASM Chart</option>
      
      <option  value="117106092/lec19.mp4">Examples of System Design using Sequential Circuits</option>
      
      <option  value="117106092/lec20.mp4">Examples of System Design using Sequential Circuits (Contd)</option>
      
      <option  value="117106092/lec21.mp4">Microprogrammed Design</option>
      
      <option  value="117106092/lec22.mp4">Microprogrammed Design (Continued)</option>
      
      <option  value="117106092/lec23.mp4">Design Flow of VLSI Circuits</option>
      
      <option  value="117106092/lec24.mp4">Simulation of Combinational Circuits</option>
      
      <option  value="117106092/lec25.mp4">Simulation of Combinational and Sequential Circuits</option>
      
      <option  value="117106092/lec26.mp4">Analysis of Waveforms using Modelsim</option>
      
      <option  value="117106092/lec27.mp4">Analysis of Waveforms using Modelsim (Continued)</option>
      
      <option  value="117106092/lec28.mp4">ModelSim Simulation Tool</option>
      
      <option  value="117106092/lec29.mp4">Synthesis Tool</option>
      
      <option  value="117106092/lec30.mp4">Synthesis Tool (Continued)</option>
      
      <option  value="117106092/lec31.mp4">Synplify Tool - Schematic Circuit Diagram View</option>
      
      <option  value="117106092/lec32.mp4">Technology View using Synplify Tool</option>
      
      <option  value="117106092/lec33.mp4">Synopsys Full and Parallel Cases</option>
      
      <option  value="117106092/lec34.mp4">Xilinx Place & Route Tool</option>
      
      <option  value="117106092/lec35.mp4">Xilinx Place & Route Tool (Continued)</option>
      
      <option  value="117106092/lec36.mp4">PCI Arbiter Design using ASM Chart</option>
      
      <option  value="117106092/lec37.mp4">Design of Memories - ROM</option>
      
      <option  value="117106092/lec38.mp4">Design of Memories- RAM</option>
      
      <option  value="117106092/lec39.mp4">Design of External RAM</option>
      
      <option  value="117106092/lec40.mp4">Design of Arithmetic Circuits</option>
      
      <option  value="117106092/lec41.mp4">Design of Arithmetic Circuits (Continued)</option>
      
      <option  value="117106092/lec42.mp4">Design of Arithmetic Circuits (Continued)</option>
      
      <option  value="117106092/lec43.mp4">System Design Examples</option>
      
      <option  value="117106092/lec44.mp4">System Design Examples (Continued)</option>
      
      <option  value="117106092/lec45.mp4">System Design Examples (Continued)</option>
      
      <option  value="117106092/lec46.mp4">System Design Examples (Continued)</option>
      
      <option  value="117106092/lec47.mp4">System Design Examples (Continued)</option>
      
      <option  value="117106092/lec48.mp4">System Design Examples using FPGA Board</option>
      
      <option  value="117106092/lec49.mp4">System Design Examples using FPGA Board (Continued)</option>
      
      <option  value="117106092/lec50.mp4">Advanced Features of Xilinx Project Navigator</option>
      
      <option  value="117106092/lec51.mp4">System Design Examples using FPGA Board (Continued)</option>
      
      <option  value="117106092/lec52.mp4">System Design Examples using FPGA Board (Continued)</option>
      
      <option  value="117106092/lec53.mp4">System Design Examples using FPGA Board (Continued)</option>
      
      <option  value="117106092/lec54.mp4">System Design Examples using FPGA Board (Continued)</option>
      
      <option  value="117106092/lec55.mp4">Project Design Suggested for FPGA/ASIC Implementations</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106093</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>VLSI Technology</strong></td>
	<td><strong>Dr. Nandita Dasgupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106093/lec01.mp4">Introduction on VLSI Design</option>
      
      <option  value="117106093/lec02.mp4">Bipolar Junction Transistor Fabrication</option>
      
      <option  value="117106093/lec03.mp4">MOSFET Fabrication for IC</option>
      
      <option  value="117106093/lec04.mp4">Crystal Structure of Si</option>
      
      <option  value="117106093/lec05.mp4">Crystal Structure contd</option>
      
      <option  value="117106093/lec06.mp4">Defects in Crystal + Crystal growth</option>
      
      <option  value="117106093/lec07.mp4">Crystal growth Contd + Epitaxy I</option>
      
      <option  value="117106093/lec08.mp4">Epitaxy II - Vapour phase Epitaxy</option>
      
      <option  value="117106093/lec09.mp4">Epitaxy III - Doping during Epitaxy</option>
      
      <option  value="117106093/lec10.mp4">Molecular beam Epitaxy</option>
      
      <option  value="117106093/lec11.mp4">Oxidation I - Kinetics of Oxidation</option>
      
      <option  value="117106093/lec12.mp4">Oxidation II Oxidation rate constants</option>
      
      <option  value="117106093/lec13.mp4">Oxidation III - Dopant Redistribution</option>
      
      <option  value="117106093/lec14.mp4">Oxidation IV - Oxide Charges</option>
      
      <option  value="117106093/lec15.mp4">Diffusion I - Theory of Diffusion</option>
      
      <option  value="117106093/lec16.mp4">Diffusion II - Infinite Source</option>
      
      <option  value="117106093/lec17.mp4">Diffusion III - Actual Doping Profiles</option>
      
      <option  value="117106093/lec18.mp4">Diffusion IV Diffusion Systems</option>
      
      <option  value="117106093/lec19.mp4">Ion - Implantation Process</option>
      
      <option  value="117106093/lec20.mp4">Ion - Implantation Process</option>
      
      <option  value="117106093/lec21.mp4">Annealing of Damages</option>
      
      <option  value="117106093/lec22.mp4">Masking during Implantation</option>
      
      <option  value="117106093/lec23.mp4">Lithography - I</option>
      
      <option  value="117106093/lec24.mp4">Lithography - II</option>
      
      <option  value="117106093/lec25.mp4">Wet Chemical Etching</option>
      
      <option  value="117106093/lec26.mp4">Dry Etching</option>
      
      <option  value="117106093/lec27.mp4">Plasma Etching Systems</option>
      
      <option  value="117106093/lec28.mp4">Etching of Si,Sio2,SiN and other materials</option>
      
      <option  value="117106093/lec29.mp4">Plasma Deposition Process</option>
      
      <option  value="117106093/lec30.mp4">Metallization - I</option>
      
      <option  value="117106093/lec31.mp4">Problems in Aluminium Metal contacts</option>
      
      <option  value="117106093/lec32.mp4">IC BJT - From junction isolation to LOCOS</option>
      
      <option  value="117106093/lec33.mp4">Problems in LOCOS + Trench isolation</option>
      
      <option  value="117106093/lec34.mp4">More about BJT Fabrication and Realization</option>
      
      <option  value="117106093/lec35.mp4">Circuits + Transistors in ECL Circuits</option>
      
      <option  value="117106093/lec36.mp4">MOSFET I - Metal gate vs. Self-aligned Poly-gate</option>
      
      <option  value="117106093/lec37.mp4">MOSFET II Tailoring of Device Parameters</option>
      
      <option  value="117106093/lec38.mp4">CMOS Technology</option>
      
      <option  value="117106093/lec39.mp4">Latch - up in CMOS</option>
      
      <option  value="117106093/lec40.mp4">BICMOS Technology</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117108037</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Biophotonics</strong></td>
	<td><strong>Dr. Manoj Varma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="short/NPTEL/web courses/117108037/module1/lecture1.pdf">Introduction</option>
      
      <option  value="short/NPTEL/web courses/117108037/module1/lecture2.pdf">Geometric Optics</option>
      
      <option  value="short/NPTEL/web courses/117108037/module1/lecture3.pdf">Wave Optics I</option>
      
      <option  value="short/NPTEL/web courses/117108037/module1/lecture4.pdf">Wave Optics II</option>
      
      <option  value="short/NPTEL/web courses/117108037/module1/lecture5.pdf">Magnetic Waves: EM Optics I</option>
      
      <option  value="short/NPTEL/web courses/117108037/module1/lecture6.pdf">Electro-Magnetic Waves: EM Optics II</option>
      
      <option  value="short/NPTEL/web courses/117108037/module2/lecture7.pdf">Photons</option>
      
      <option  value="short/NPTEL/web courses/117108037/module2/lecture8.pdf">Light Matter Interactions & Lasers</option>
      
      <option  value="short/NPTEL/web courses/117108037/module2/lecture9.pdf">Spectroscopies</option>
      
      <option  value="short/NPTEL/web courses/117108037/module2/lecture10.pdf">Optoelectronics</option>
      
      <option  value="short/NPTEL/web courses/117108037/module3/lecture11.pdf">Basic Microscopy</option>
      
      <option  value="short/NPTEL/web courses/117108037/module3/lecture12.pdf">Fluorescence Imaging</option>
      
      <option  value="short/NPTEL/web courses/117108037/module3/lecture13.pdf">Focal Volume Reduction</option>
      
      <option  value="short/NPTEL/web courses/117108037/module3/lecture14.pdf">Fluorescence Techniques</option>
      
      <option  value="short/NPTEL/web courses/117108037/module3/lecture15.pdf">Biomedical Imaging</option>
      
      <option  value="short/NPTEL/web courses/117108037/module3/lecture16.pdf">Optical Manipulation</option>
      
      <option  value="short/NPTEL/web courses/117108037/module4/lecture17.pdf">Biosensors Overview</option>
      
      <option  value="short/NPTEL/web courses/117108037/module4/lecture18.pdf">Labeled DNA Sensors</option>
      
      <option  value="short/NPTEL/web courses/117108037/module4/lecture19.pdf">Bio-Patterning Methods</option>
      
      <option  value="short/NPTEL/web courses/117108037/module4/lecture20.pdf">Microarrays</option>
      
      <option  value="short/NPTEL/web courses/117108037/module4/lecture21.pdf">Label Free Biosensors</option>
      
      <option  value="short/NPTEL/web courses/117108037/module5/Useful-References.pdf">Useful References</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117108038</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Circuits for Analog System Design</strong></td>
	<td><strong>Prof. M.K. Gunasekaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117108038/mod01lec01.mp4">Transistor Amplifier</option>
      
      <option  value="117108038/mod01lec02.mp4">Transistor Op-amp and Transistor Based Voltage Regulator</option>
      
      <option  value="117108038/mod01lec03.mp4">Some applications of transistor -1</option>
      
      <option  value="117108038/mod01lec04.mp4">Some applications of transistor - II</option>
      
      <option  value="117108038/mod02lec05.mp4">Transformer design & Heat sink design</option>
      
      <option  value="117108038/mod03lec06.mp4">Op-amp Based Linear Voltage Regulator</option>
      
      <option  value="117108038/mod03lec07.mp4">Short circuit protection for linear power supply</option>
      
      <option  value="117108038/mod03lec08.mp4">Temperature indicator design using Op-amp</option>
      
      <option  value="117108038/mod03lec09.mp4">On & off Temperature controller design</option>
      
      <option  value="117108038/mod03lec10.mp4">Proportional Temperature Controller Design</option>
      
      <option  value="117108038/mod03lec11.mp4">PID - Temperature Controller Design</option>
      
      <option  value="117108038/mod03lec12.mp4">Heater Drive for Various Temperature Controllers</option>
      
      <option  value="117108038/mod03lec13.mp4">Short Circuit Protection of Power MOSFET</option>
      
      <option  value="117108038/mod04lec14.mp4">Error budgeting for temperature Indicator</option>
      
      <option  value="117108038/mod04lec15.mp4">PID Temperature Controllers with Error Budgeting</option>
      
      <option  value="117108038/mod04lec16.mp4">Error Budgeting for Constant Current Sources</option>
      
      <option  value="117108038/mod04lec17.mp4">Error Budgeting for Thermo Couple Amplifier</option>
      
      <option  value="117108038/mod04lec18.mp4">Error Budgeting for Op amp Circuits</option>
      
      <option  value="117108038/mod04lec19.mp4">Gain Error Calculation in Op amp Circuits</option>
      
      <option  value="117108038/mod04lec20.mp4">Input Resistance Calculations for Op amp</option>
      
      <option  value="117108038/mod04lec21.mp4">Output Resistance Calculations for Op amp</option>
      
      <option  value="117108038/mod04lec22.mp4">Error Budgeting for Different Circuits</option>
      
      <option  value="117108038/mod05lec23.mp4">4-20 mA current Transmitter design</option>
      
      <option  value="117108038/mod05lec24.mp4">Error budgeting for 4-20mA Current Transmitters</option>
      
      <option  value="117108038/mod05lec25.mp4">LVDT Based Current Transmitters</option>
      
      <option  value="117108038/mod05lec26.mp4">Constant Current Source Design</option>
      
      <option  value="117108038/mod05lec27.mp4">4-20 MA Based Temperature Transmitter</option>
      
      <option  value="117108038/mod05lec28.mp4">3-Wire Current Transmitter</option>
      
      <option  value="117108038/mod06lec29.mp4">Various Resistance Measurement Techniques</option>
      
      <option  value="117108038/mod06lec30.mp4">Ratio Transformer Technique to Measure Resistance and capacitance</option>
      
      <option  value="117108038/mod06lec31.mp4">Capacitive Sensor Circuit Design Examples</option>
      
      <option  value="117108038/mod06lec32.mp4">Capacitive Sensor Circuit With High Impedance Amplifier</option>
      
      <option  value="117108038/mod07lec33.mp4">AC- applications of the Op-Amp and Lock in Amplifier Design</option>
      
      <option  value="117108038/mod07lec34.mp4">Design of lock in Amplifier Circuit with example</option>
      
      <option  value="117108038/mod08lec35.mp4">Dual Slopes ADC � Design Examples</option>
      
      <option  value="117108038/mod08lec36.mp4">Dual Slope ADC and Successor approximation ADC</option>
      
      <option  value="117108038/mod08lec37.mp4">MC based ADC</option>
      
      <option  value="117108038/mod08lec38.mp4">Digital to analog Converter design and working, Flash ADC</option>
      
      <option  value="117108038/mod08lec39.mp4">Flash ADC and ADC Converter errors</option>
      
      <option  value="117108038/mod08lec40.mp4">Sigma delta ADC working Principle</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117108044</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Error Correcting Codes</strong></td>
	<td><strong>Prof. P. Vijay Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
       <option  value="#">Select </option>
      <option  value="117108044/mod01lec01.mp4">Course Overview & Basics</option>
      
      <option  value="117108044/mod01lec02.mp4">Example Codes and their Parameters</option>
      
      <option  value="117108044/mod02lec03.mp4">Mathematical Preliminaries: Groups</option>
      
      <option  value="117108044/mod02lec04.mp4">Subgroups and Equivalence Relations</option>
      
      <option  value="117108044/mod02lec05.mp4">Cosets, Rings & Fields</option>
      
      <option  value="117108044/mod03lec06.mp4">Vector Spaces, Linear Independence and Basis</option>
      
      <option  value="117108044/mod03lec07.mp4">Linear Codes,  & Linear independence</option>
      
      <option  value="117108044/mod03lec08.mp4">Spanning  & Basis</option>
      
      <option  value="117108044/mod04lec09.mp4">The Dual Code</option>
      
      <option  value="117108044/mod04lec10.mp4">Systematic  Generator Matrix</option>
      
      <option  value="117108044/mod04lec11.mp4">Minimum  Distance of  a Linear Code</option>
      
      <option  value="117108044/mod05lec12.mp4">Bounds on the size of a  Code</option>
      
      <option  value="117108044/mod05lec13.mp4">Asymptotic Bounds</option>
      
      <option  value="117108044/mod06lec14.mp4">Standard Array Decoding</option>
      
      <option  value="117108044/mod06lec15.mp4">Performance  Analysis of the SAD</option>
      
      <option  value="117108044/mod07lec16.mp4">State and Trellis</option>
      
      <option  value="117108044/mod07lec17.mp4">The Viterbi Decoder</option>
      
      <option  value="117108044/mod07lec18.mp4">Catastrophic  Error  Propagation</option>
      
      <option  value="117108044/mod07lec19.mp4">Path Enumeration</option>
      
      <option  value="117108044/mod07lec20.mp4">Viterbi Decoder over the AWGN Channel</option>
      
      <option  value="117108044/mod08lec21.mp4">Generalized Distributive Law</option>
      
      <option  value="117108044/mod08lec22.mp4">The MPF Problem</option>
      
      <option  value="117108044/mod08lec23.mp4">Further Examples of the MPF Problem</option>
      
      <option  value="117108044/mod08lec24.mp4">Junction Trees</option>
      
      <option  value="117108044/mod08lec25.mp4">Example of Junction Tree Construction</option>
      
      <option  value="117108044/mod08lec26.mp4">Message passing on the Junction tree</option>
      
      <option  value="117108044/mod08lec27.mp4">GDL  Approach to Decoding Convolutional Codes</option>
      
      <option  value="117108044/mod08lec28.mp4">ML Code-Symbol Decoding of the Convolutional Code</option>
      
      <option  value="117108044/mod09lec29.mp4">LDPC  Codes</option>
      
      <option  value="117108044/mod09lec30.mp4">LDPC  Code Terminology</option>
      
      <option  value="117108044/mod09lec31.mp4">Gallager Decoding Algorithm A</option>
      
      <option  value="117108044/mod09lec32.mp4">BP  Decoding of LDPC Codes</option>
      
      <option  value="117108044/mod09lec33.mp4">BP Decoding (Continued)</option>
      
      <option  value="117108044/mod09lec34.mp4">Density Evolution under BP decoding</option>
      
      <option  value="117108044/mod09lec35.mp4">Convergence & Concentration Theorem � LDPC Codes</option>
      
      <option  value="117108044/mod10lec36.mp4">A Construction for Finite Fields</option>
      
      <option  value="117108044/mod10lec37.mp4">Finite Fields:  A  Deductive  Approach</option>
      
      <option  value="117108044/mod10lec38.mp4">Deductive  Approach to Finite Fields</option>
      
      <option  value="117108044/mod10lec39.mp4">Subfields of a Finite field</option>
      
      <option  value="117108044/mod11lec40.mp4">Transform Approach to Cyclic  Codes</option>
      
      <option  value="117108044/mod11lec41.mp4">Estimating the Parameters of a Cyclic Code</option>
      
      <option  value="117108044/mod11lec42.mp4">Decoding Cyclic Codes</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117108048</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Pattern Recognition</strong></td>
	<td><strong>Prof. P.S. Sastry</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117108048/mod01lec01.mp4">Introduction to Statistical Pattern Recognition</option>
      
      <option  value="117108048/mod01lec02.mp4">Overview of Pattern Classifiers</option>
      
      <option  value="117108048/mod02lec03.mp4">The Bayes Classifier for minimizing Risk</option>
      
      <option  value="117108048/mod02lec04.mp4">Estimating Bayes Error;  Minimax and Neymann-Pearson classifiers</option>
      
      <option  value="117108048/mod03lec05.mp4">Implementing Bayes Classifier;  Estimation of Class Conditional Densities</option>
      
      <option  value="117108048/mod03lec06.mp4">Maximum Likelihood estimation of different densities</option>
      
      <option  value="117108048/mod03lec07.mp4">Bayesian estimation of parameters of density functions, MAP estimates</option>
      
      <option  value="117108048/mod03lec08.mp4">Bayesian Estimation examples; the exponential family  of densities and ML estimates</option>
      
      <option  value="117108048/mod03lec09.mp4">Sufficient Statistics; Recursive formulation of ML and Bayesian estimates</option>
      
      <option  value="117108048/mod04lec10.mp4">Mixture Densities, ML estimation and EM algorithm</option>
      
      <option  value="117108048/mod04lec11.mp4">Convergence of EM algorithm; overview of Nonparametric density estimation</option>
      
      <option  value="117108048/mod05lec11.mp4">Convergence of EM algorithm, Overview of Nonparametric density estimation</option>
      
      <option  value="117108048/mod05lec12.mp4">Nonparametric estimation,  Parzen Windows, nearest neighbour methods</option>
      
      <option  value="117108048/mod06lec13.mp4">Linear Discriminant Functions;  Perceptron -- Learning Algorithm and convergence proof</option>
      
      <option  value="117108048/mod06lec14.mp4">Linear Least Squares Regression; LMS algorithm</option>
      
      <option  value="117108048/mod06lec15.mp4">AdaLinE and LMS algorithm;  General nonliner least-squares regression</option>
      
      <option  value="117108048/mod06lec16.mp4">Logistic Regression; Statistics of least squares method;  Regularized Least Squares</option>
      
      <option  value="117108048/mod06lec17.mp4">Fisher Linear Discriminant</option>
      
      <option  value="117108048/mod06lec18.mp4">Linear Discriminant functions for multi-class case; multi-class logistic regression</option>
      
      <option  value="117108048/mod07lec19.mp4">Learning and Generalization; PAC learning framework</option>
      
      <option  value="117108048/mod07lec20.mp4">Overview of Statistical Learning Theory; Empirical Risk Minimization</option>
      
      <option  value="117108048/mod07lec21.mp4">Consistency of Empirical Risk Minimization</option>
      
      <option  value="117108048/mod07lec22.mp4">Consistency of Empirical Risk Minimization; VC-Dimension</option>
      
      <option  value="117108048/mod07lec23.mp4">Complexity of Learning problems and VC-Dimension</option>
      
      <option  value="117108048/mod07lec24.mp4">VC-Dimension Examples; VC-Dimension of hyperplanes</option>
      
      <option  value="117108048/mod08lec25.mp4">Overview of Artificial Neural Networks</option>
      
      <option  value="117108048/mod08lec26.mp4">Multilayer Feedforward Neural networks with Sigmoidal activation functions;</option>
      
      <option  value="117108048/mod08lec27.mp4">Backpropagation Algorithm; Representational abilities of feedforward networks</option>
      
      <option  value="117108048/mod08lec28.mp4">Feedforward networks for Classification and Regression; Backpropagation in Practice</option>
      
      <option  value="117108048/mod08lec29.mp4">Radial Basis Function Networks; Gaussian RBF networks</option>
      
      <option  value="117108048/mod08lec30.mp4">Learning Weights in RBF networks; K-means clustering algorithm</option>
      
      <option  value="117108048/mod09lec31.mp4">Support Vector Machines -- Introduction,  obtaining the optimal hyperplane</option>
      
      <option  value="117108048/mod09lec32.mp4">SVM formulation with slack variables;  nonlinear SVM classifiers</option>
      
      <option  value="117108048/mod09lec33.mp4">Kernel Functions for nonlinear SVMs;  Mercer and positive definite Kernels</option>
      
      <option  value="117108048/mod09lec34.mp4">Support Vector Regression and   ?-insensitive Loss function,  examples of SVM learning</option>
      
      <option  value="117108048/mod09lec35.mp4">Overview of SMO and other algorithms for SVM;  ?-SVM and ?-SVR;  SVM as a risk minimizer</option>
      
      <option  value="117108048/mod09lec36.mp4">Positive Definite Kernels; RKHS;  Representer Theorem</option>
      
      <option  value="117108048/mod10lec37.mp4">Feature Selection and Dimensionality Reduction;   Principal Component Analysis</option>
      
      <option  value="117108048/mod10lec38.mp4">No Free Lunch Theorem;  Model selection and model estimation;   Bias-variance trade-off</option>
      
      <option  value="117108048/mod10lec39.mp4">Assessing Learnt classifiers; Cross Validation;</option>
      
      <option  value="117108048/mod11lec40.mp4">Bootstrap, Bagging and Boosting; Classifier Ensembles; AdaBoost</option>
      
      <option  value="117108048/mod11lec41.mp4">Risk minimization view of AdaBoost</option>
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>117106090</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Principles of Communication</strong></td>
	<td><strong>Prof. V. Venkat Rao</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="short/NPTEL/web courses/117106090/Principles_Of_Communication/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117105101</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Pattern Recognition and Application</strong></td>
	<td><strong>Prof. V. Balakrishnan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option value="117105101/Lecture-01.mp4"> Lecture-01</option>
<option value="117105101/Lecture-02.mp4"> Lecture-02</option>
<option value="117105101/Lecture-03.mp4"> Lecture-03</option>
<option value="117105101/Lecture-04.mp4"> Lecture-04</option>
<option value="117105101/Lecture-05.mp4"> Lecture-05</option>
<option value="117105101/Lecture-06.mp4"> Lecture-06</option>
<option value="117105101/Lecture-07.mp4"> Lecture-07</option>
<option value="117105101/Lecture-08.mp4"> Lecture-08</option>
<option value="117105101/Lecture-09.mp4"> Lecture-09</option>
<option value="117105101/Lecture-10.mp4"> Lecture-10</option>
<option value="117105101/Lecture-11.mp4"> Lecture-11</option>
<option value="117105101/Lecture-12.mp4"> Lecture-12</option>
<option value="117105101/Lecture-13.mp4"> Lecture-13</option>
<option value="117105101/Lecture-14.mp4"> Lecture-14</option>
<option value="117105101/Lecture-15.mp4"> Lecture-15</option>
<option value="117105101/Lecture-16.mp4"> Lecture-16</option>
<option value="117105101/Lecture-17.mp4"> Lecture-17</option>
<option value="117105101/Lecture-18.mp4"> Lecture-18</option>
<option value="117105101/Lecture-19.mp4"> Lecture-19</option>
<option value="117105101/Lecture-20.mp4"> Lecture-20</option>
<option value="117105101/Lecture-21.mp4"> Lecture-21</option>
<option value="117105101/Lecture-22.mp4"> Lecture-22</option>
<option value="117105101/Lecture-23.mp4"> Lecture-23</option>
<option value="117105101/Lecture-24.mp4"> Lecture-24</option>
<option value="117105101/Lecture-25.mp4"> Lecture-25</option>
<option value="117105101/Lecture-26.mp4"> Lecture-26</option>
<option value="117105101/Lecture-27.mp4"> Lecture-27</option>
<option value="117105101/Lecture-28.mp4"> Lecture-28</option>
<option value="117105101/Lecture-29.mp4"> Lecture-29</option>
<option value="117105101/Lecture-30.mp4"> Lecture-30</option>
<option value="117105101/Lecture-31.mp4"> Lecture-31</option>
<option value="117105101/Lecture-32.mp4"> Lecture-32</option>
<option value="117105101/Lecture-33.mp4"> Lecture-33</option>
<option value="117105101/Lecture-34.mp4"> Lecture-34</option>
<option value="117105101/Lecture-35.mp4"> Lecture-35</option>
<option value="117105101/Lecture-36.mp4"> Lecture-36</option>
<option value="117105101/Lecture-37.mp4"> Lecture-37</option>
<option value="117105101/Lecture-38.mp4"> Lecture-38</option>
<option value="117105101/Lecture-39.mp4"> Lecture-39</option>
<option value="117105101/Lecture-40.mp4"> Lecture-40</option>

          </select></td>
	 
	</tr>
	</form>
    
    
        <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106114</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>NOC:Digital Circuits and Systems</strong></td>
	<td><strong>Prof. Shankar Balachandran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106114/mod01lec01.mp4">Introduction</option>
      
      <option  value="117106114/mod01lec02.mp4">Basic Boolean Logic</option>
      
      <option  value="117106114/mod01lec03.mp4">Boolean Theorems</option>
      
      <option  value="117106114/mod01lec04.mp4">Definitions, SoP and Pos</option>
      
      <option  value="117106114/mod01lec05.mp4">Algebraic Minimization Examples</option>
      
      <option  value="117106114/mod01lec06.mp4">Introduction to Verilog</option>
      
      <option  value="117106114/mod02lec07.mp4">Universality, Rearranging Truth Tables</option>
      
      <option  value="117106114/mod02lec08.mp4">Karnaugh Maps</option>
      
      <option  value="117106114/mod02lec09.mp4">K-Map Minimization</option>
      
      <option  value="117106114/mod02lec10.mp4">K-Map with Don't cares</option>
      
      <option  value="117106114/mod02lec11.mp4">Multiple Output Functions</option>
      
      <option  value="117106114/mod02lec12.mp4">Number Systems</option>
      
        
      <option  value="117106114/mod03lec13.mp4">Encoders and Decoders</option>
      
      <option  value="117106114/mod03lec14.mp4">Multiplexers</option>
      
      <option  value="117106114/mod03lec15.mp4">Multiplexer based Circuit Design</option>
      
      <option  value="117106114/mod03lec16.mp4">Verilog</option>
      
      <option  value="117106114/mod03lec17.mp4">Compiling and Running Verilog - A Demonstration</option>
      
      <option  value="117106114/mod04lec18.mp4">Sequential Elements</option>
      
      <option  value="117106114/mod04lec19.mp4">Gated Latches</option>
      
      <option  value="117106114/mod04lec20.mp4">Flipflops</option>
      
      <option  value="117106114/mod04lec21.mp4">Verilog - Assign Statement and Instantiation</option>
      
      <option  value="117106114/mod04lec22.mp4">Sequential Circuits</option>
      
      <option  value="117106114/mod05lec23.mp4">CMOS+Electrical Properties</option>
      
      <option  value="117106114/mod05lec24.mp4">Delays</option>
      
      <option  value="117106114/mod05lec25.mp4">Sequential Element Delays</option>
      
      <option  value="117106114/mod05lec26.mp4">More Sequential Circuits</option>
      
      <option  value="117106114/mod05lec27.mp4">Introduction to State Machines</option>
      
      <option  value="117106114/mod05lec28.mp4">Always Statement in Verilog</option>
      
      <option  value="117106114/mod06lec29.mp4">Sequential Logic Synthesis</option>
      
      <option  value="117106114/mod06lec30.mp4">FSM Design Problems</option>
      
      <option  value="117106114/mod06lec31.mp4">State Minimization</option>
      
      <option  value="117106114/mod06lec32.mp4">State Assignment</option>
      
      <option  value="117106114/mod06lec33.mp4">Timing 
      </option>
      
      <option  value="117106114/mod06lec34.mp4">Verilog Styles</option>
      
      <option  value="117106114/mod07lec35.mp4">GCD Algorithm</option>
      
      <option  value="117106114/mod07lec36.mp4">GCD Machines Datapath</option>
      
      <option  value="117106114/mod07lec37.mp4">GCD State Machine</option>
      
      <option  value="117106114/mod07lec38.mp4"> GCD Top Level Module</option>
      
      <option  value="117106114/mod07lec39.mp4">Datapath in Verilog</option>
      
      <option  value="117106114/mod07lec40.mp4">Datapath Elements in Verilog</option>
      
      <option  value="117106114/mod07lec41.mp4">FSM in Verilog</option>
      
        <option  value="117106114/mod07lec42.mp4">Putting it all together</option>
        
        <option  value="117106114/mod08lec43.mp4">Pipelining</option>
          
            <option  value="117106114/mod08lec44.mp4">K-stage Pipeline</option>
            
              <option  value="117106114/mod08lec45.mp4">Interleaving and Parallelism</option>
              
          <option  value="117106114/mod08lec46.mp4">Blocking and Non-blocking Statements</option>
          
            <option  value="117106114/mod08lec47.mp4">Modeling Circuits with Pipelining</option>
            
         <option  value="117106114/mod09lec48.mp4">Signed Number Representation</option>
         
           <option  value="117106114/mod09lec49.mp4">Signed Number Addition</option>
           
             <option  value="117106114/mod09lec50.mp4">Adder/Subtracter</option>
        
         <option  value="117106114/mod09lec51.mp4">Fast Adders</option>
         
          <option  value="117106114/mod09lec52.mp4">Multiplication</option>
          
           <option  value="117106114/mod09lec53.mp4">Closing Remarks</option>
        
    
          </select></td>
	
	</tr>
	</form>
    
    
    
        
    <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106112</strong></td>
	<td><strong>Electronics & Communication Engineering</strong></td>
	<td><strong>Embedded Software Testing</strong></td>
	<td><strong>MADHUKESHWARA H M</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>HCL</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="117106112/mod01lec01.mp4">Embedded Systems Basics Session 1</option>
      
      <option  value="117106112/mod01lec02.mp4">Embedded Systems Basics Session 1 Contd.. </option>
      
      <option  value="117106112/mod01lec03.mp4">Prerequistics for Embedded Systems Testing</option>
      
      <option  value="117106112/mod01lec04.mp4">Test Case Designa and procedures</option>
      
      <option  value="117106112/mod01lec05.mp4">Test Standards</option>
      
      <option  value="117106112/mod01lec06.mp4">Depicting Levels of Testing</option>
      
      <option  value="117106112/mod01lec07.mp4">Depicting Levels of Testing Contd..</option>
      
      <option  value="117106112/mod01lec08.mp4">Software Life Cycle</option>
      
      <option  value="117106112/mod01lec09.mp4">Embedded V-Model Life Cycle</option>
      
      <option  value="117106112/mod01lec10.mp4">Embedded V-Model Life Cycle contd..</option>
      
      <option  value="117106112/mod01lec11.mp4">Master Test Planning</option>
      
      <option  value="117106112/mod02lec12.mp4">Dynamic Testing</option>
      
        
      <option  value="117106112/mod02lec13.mp4">Black Box Testing</option>
      
      <option  value="117106112/mod02lec14.mp4">Black Box Testing Contd.</option>
      
      <option  value="117106112/mod02lec15.mp4">Black Box Testing Contd..</option>
      
      <option  value="117106112/mod02lec16.mp4">Black Box Testing Contd..</option>
      
      <option  value="117106112/mod02lec17.mp4">Model Based Design Intro.</option>
      
      <option  value="117106112/mod02lec18.mp4">Lec-18</option>
      
      <option  value="117106112/mod02lec19.mp4">Dynamic Testing Contd..</option>
      
      <option  value="117106112/mod02lec20.mp4"> White Box Testing </option>
      
      <option  value="117106112/mod02lec21.mp4"> White Box Testing Cont. </option>
      
      <option  value="117106112/mod02lec22.mp4"> Grey-box testing </option>
      
      <option  value="117106112/mod03lec23.mp4"> Static Testing </option>
      
      <option  value="117106112/mod03lec24.mp4"> Static Analysis </option>
      
      <option  value="117106112/mod03lec25.mp4"> Static Analysis Contd. </option>
      
      <option  value="117106112/mod03lec26.mp4"> Static Analysis Contd.. </option>
      
      <option  value="117106112/mod03lec27.mp4"> Test Metrics </option>
      
      <option  value="117106112/mod03lec28.mp4"> Software Testing Metrics </option>
      
      <option  value="117106112/mod04lec29.mp4"> Depicting Levels of Testing Contd... </option>
      
      <option  value="117106112/mod04lec30.mp4"> Integration Test Strategy </option>
      
      <option  value="117106112/mod04lec31.mp4"> Integration Tests Environment </option>
      
      <option  value="117106112/mod04lec32.mp4"> Use Case Diagram </option>
      
      <option  value="117106112/mod05lec33.mp4"> Configure Management Elements </option>
      
      <option  value="117106112/mod05lec34.mp4"> SCM Activities </option>
      
      <option  value="117106112/mod05lec35.mp4"> Test Management Tool </option>
      
      <option  value="117106112/mod05lec36.mp4"> SCM Activities Contd.. </option>
      
      <option  value="117106112/mod05lec37.mp4"> Overview Lecture 1 </option>
      
      <option  value="117106112/mod05lec38.mp4"> Unit Testing </option>
      
      <option  value="117106112/mod05lec39.mp4"> Unit Testing Contd.. </option>
      
      <option  value="117106112/mod05lec40.mp4"> Understading C++ </option>
      
      <option  value="117106112/mod05lec41.mp4"> Unit Testing Contd... </option>
      
        <option  value="117106112/mod05lec42.mp4"> Level Testing </option>
        
        <option  value="117106112/mod05lec43.mp4"> Identify Test Cases </option>
          
            <option  value="117106112/mod05lec44.mp4"> Test Link Work Flow </option>
                                  
          </select>
</td>
	</tr>
	</form>

     
    <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106111</strong></td>
	<td><strong> Electronics & Communication Engineering </strong></td>
	<td><strong> ARM Based Development </strong></td>
	<td><strong> S.Chandramouleeswaran </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> Embedded Systems Professional </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="117106111/mod01lec01.mp4"> Types of computer Architectures, ISA's and ARM History </option>
      
      <option  value="117106111/mod01lec02.mp4"> Embedded System Software and Hardware, stack implementation in ARM, Endianness, condition codes </option>
      
      <option  value="117106111/mod01lec03.mp4"> Processor core VS CPU core, ARM7TDMI Interface signals, Memory Interface, Bus Cycle types, Register set, Operational Modes </option>
      
      <option  value="117106111/mod01lec04.mp4"> Instruction Format, ARM Core Data Flow Model, ARM 3 stage Pipeline, ARM family attribute comparision </option>
      
      <option  value="117106111/mod01lec05.mp4"> ARM 5 stage Pipeline, Pipeline Hazards, Data forwarding - a hardware solution </option>
      
      <option  value="117106111/mod02lec06.mp4"> ARM ISA and Processor Variants, Different Types of Instructions, ARM Instruction set, data processing instructions </option>
      
      <option  value="117106111/mod02lec07.mp4"> Shift Operations, shift Operations using RS lower byte, Immediate value encoding </option>
      
      <option  value="117106111/mod02lec08.mp4"> Dataprocessing Instructions </option>
      
      <option  value="117106111/mod02lec09.mp4"> AddressingMode-1, Addressing Mode -2 </option>
      
      <option  value="117106111/mod02lec10.mp4"> Addressing Mode -2, LDR/STR, Addressing mode -3 with examples </option>
      
      <option  value="117106111/mod02lec11.mp4"> Instruction Timing, Addressing Mode - 4 with Examples </option>
      
      <option  value="117106111/mod02lec12.mp4"> Swap Instructions, Swap Register related Instructions, Loading Constants </option>
      
        <option  value="117106111/mod02lec13.mp4"> Program Control Flow, Control Flow Instructions, B & BL instructions, BX instruction </option>
      
      <option  value="117106111/mod02lec14.mp4"> Interrupts and Exceptions, Exception Handlers, Reset Handling </option>
      
      <option  value="117106111/mod02lec15.mp4"> Aborts, software Interrupt Instruction, undefined instruction exception </option>
      
      <option  value="117106111/mod02lec16.mp4"> Interrupt Latency, Multiply Instructions, Instruction set examples </option>
      
      <option  value="117106111/mod02lec17.mp4"> Thumb state, Thumb Programmers model, Thumb Implementation, Thumb Applications </option>
      
      <option  value="117106111/mod02lec18.mp4"> Thumb Instructions, Interrupt processing </option>
      
      <option  value="117106111/mod02lec19.mp4"> Interrupt Handelling schemes, Examples of Interrupt Handlers </option>
      
      <option  value="117106111/mod03lec20.mp4"> Coprocessors </option>
      
      <option  value="117106111/mod03lec21.mp4"> Coprocessor Instructions, data Processign Instruction, data transfers, register transfers </option>
      
      <option  value="117106111/mod03lec22.mp4"> Number representations, floating point representation </option>
      
      <option  value="117106111/mod03lec23.mp4"> Flynn's Taxonomy, SIMD and Vector Processors, Vector Floating Point Processor (VFP), VFP and ARM interactions, An example vector operation </option>
      
      <option  value="117106111/mod04lec24.mp4"> Memory Technologies, Need for memory Hierarchy, Hierarchical Memory Organization, Virtual Memory </option>
      
      <option  value="117106111/mod04lec25.mp4"> Cache Memory, Mapping Functions </option>
      
      <option  value="117106111/mod04lec26.mp4"> Cache Design, Unified or split cache, multiple level of caches, ARM cache features, coprocessor 15 for system control </option>
      
      <option  value="117106111/mod04lec27.mp4"> Processes, Memory Map, Protected Systems, ARM systems with MPU, memory Protection Unit (MPU) </option>
      
      <option  value="117106111/mod04lec28.mp4"> Physical Vs Virtual Memory, Paging, Segmentation </option>
      
      <option  value="117106111/mod04lec29.mp4"> MMU Advantage, virtual memory translation, Multitasking with MMU, MMU organization, Tightly coupled Memory (TCM) </option>
      
      <option  value="117106111/mod05lec30.mp4"> ARM Development Environment, Arm Procedure Call Standard (APCS) </option>
      
      <option  value="117106111/mod05lec31.mp4"> Example C program </option>
      
      <option  value="117106111/mod05lec32.mp4"> Embedded software Development, Image structure, linker inputs and outputs, memory map, application startup </option>
      
      <option  value="117106111/mod05lec33.mp4"> AMBA Overview, Typical AMAB Based Microcontroller, AHB bus features, AHB Bus transfers, APB bus transfers, APB bridge </option>
      
      <option  value="117106111/mod05lec34.mp4"> DMA, Peripherals, Programming Peripherals in ARM </option>
      
      <option  value="117106111/mod05lec35.mp4"> DMA:Direct Memory Access </option>
      
      <option  value="117106111/mod05lec36.mp4"> Protocols (I2c, SPI), UART, GPIO </option>
      
      <option  value="117106111/mod05lec37.mp4"> ARM ISAs, ARMv5, ARMv6, ARM v7, big.little technology, ARMv8 </option>
      
          </select>
</td>
	</tr>
	</form>

    
    <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106109</strong></td>
	<td><strong> Electronics & Communication Engineering </strong></td>
	<td><strong> Advanced Logic Synthesis </strong></td>
	<td><strong> Dhiraj Taneja </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> Broadcom, Hyderabad </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="117106109/mod01lec01.mp4"> MOS Transistor </option>
      
      <option  value="117106109/mod01lec02.mp4"> MOS Transistor - Detailed Study  </option>
      
      <option  value="117106109/mod02lec03.mp4"> Combinational Circuits & layout </option>
      
      <option  value="117106109/mod02lec04.mp4"> Delay </option>
      
      <option  value="117106109/mod02lec05.mp4"> Sequential Circuits </option>
      
      <option  value="117106109/mod02lec06.mp4"> Logical Effort </option>
      
      <option  value="117106109/mod02lec07.mp4"> Circuit Families </option>
      
      <option  value="117106109/mod03lab01.mp4"> Lab-01 </option>
      
      <option  value="117106109/mod03lab02.mp4"> Lab-02 </option>
      
      <option  value="117106109/mod03lab03.mp4"> Lab-03 </option>
      
      <option  value="117106109/mod03lab04.mp3"> Lab-04 </option>
      
      <option  value="117106109/mod03lec08.mp4"> Introduction to Synthesis </option>
      
        <option  value="117106109/mod03lec09.mp4"> Libraries </option>
      
      <option  value="117106109/mod03lec10.mp4"> RTL Coding for Synthesis </option>
      
      <option  value="117106109/mod03lec11.mp4"> Reading Design in DC </option>
      
      <option  value="117106109/mod03lec12.mp4"> Design Environment </option>
      
      <option  value="117106109/mod03lec13.mp4"> Design Constraints </option>
      
      <option  value="117106109/mod03lec14.mp4"> Compile Flow and stratergies </option>
      
      <option  value="117106109/mod03lec15.mp4"> Analysis and Reporting </option>
      
      <option  value="117106109/mod04lab05.mp4"> Lab-05 </option>
      
      <option  value="117106109/mod04lec16.mp4"> Advanced Synthesis Techniques </option>
      
      <option  value="117106109/mod04lec17.mp4"> Datapath Extraction Guidelines </option>
      
      <option  value="117106109/mod04lec18.mp4"> Power - Methodology and Analysis </option>
      
      <option  value="117106109/mod05lab06.mp4"> Lab-06 </option>
      
      <option  value="117106109/mod05lab07.mp4"> Lab-07 </option>
      
      <option  value="117106109/mod05lab08.mp4"> Lab-08 </option>
      
      <option  value="117106109/mod05lab09.mp4"> Lab-09 </option>
      
      <option  value="117106109/mod05lec19.mp4"> Static Timing Analysis - Concepts and Flow </option>
      
      <option  value="117106109/mod05lec20.mp4"> Interconnects and Delay calculation </option>
      
      <option  value="117106109/mod05lec21.mp4"> Clock and Exceptions </option>
      
      <option  value="117106109/mod05lec22.mp4"> On Chip Variation </option>
      
      <option  value="117106109/mod05lec23.mp4"> Introduction to Crosstalk </option>
      
      <option  value="117106109/mod05lec24.mp4"> Gaussian / Normal Distribution </option>
      
      <option  value="117106109/mod05lec25.mp4"> Equivalence Checking / Formal Verification </option>
      
          </select>
</td>
	</tr>
	</form>

    
    
   <form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>117106113</strong></td>
	<td><strong> Electronics & Communication Engineering </strong></td>
	<td><strong> Linux Programming & Scripting </strong></td>
	<td><strong> Anand Iyer </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> Calypto Design Systems </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="117106113/mod01lec01.mp4"> Linux Basics-I </option>
      
      <option  value="117106113/mod01lec02.mp4"> Linux Basics-II  </option>
      
      <option  value="117106113/mod01lec03.mp4"> Linux Basics-III </option>
      
      <option  value="117106113/mod01lec04.mp4"> Linux Basics-IV </option>
      
      <option  value="117106113/mod02lec05.mp4"> Linux Networking -I </option>
      
      <option  value="117106113/mod02lec06.mp4"> Linux Networking –II </option>
      
      <option  value="117106113/ mod02lec08.mp4"> File Transfer Protocol </option>
      
      <option  value="117106113/ mod02lec09.mp4"> DNS Continued </option>
      
      <option  value="117106113/ mod02lec10.mp4"> DFS </option>
      
      <option  value="117106113/ mod02lec11.mp4"> AFS and NIS </option>
      
      <option  value="117106113/ mod03lec12.mp4"> PERL 1 </option>
      
      <option  value="117106113/ mod03lec13.mp4"> PERL 2 </option>
      
        <option  value="117106113/ mod03lec14.mp4"> PERL 3 </option>
      
      <option  value="117106113/mod03lec15.mp4"> PERL 4 </option>
      
      <option  value="117106113/mod03lec16.mp4"> PERL 5</option>
      
      <option  value="117106113/mod03lec17.mp4"> PERL 6 </option>
      
      <option  value="117106113/mod03lec18.mp4"> PERL 7 </option>
      
      <option  value="117106113/mod03lec19.mp4"> PERL 8 </option>
      
      <option  value="117106113/mod03lec20.mp4"> PERL 9 </option>
      
      <option  value="117106113/mod03lab21.mp4"> Using sort </option>
      
      <option  value="117106113/mod03lec22.mp4"> PERL 10 </option>
      
      <option  value="117106113/mod04lec23.mp4"> Programming Using Tcl/Tk-I </option>
      
      <option  value="117106113/mod04lec24.mp4"> Programming Using Tcl/Tk-II </option>
      
      <option  value="117106113/mod04lab25.mp4"> Programming Using Tcl/Tk-III </option>
      
      <option  value="117106113/mod04lab26.mp4"> More about Procedures </option>
      
      <option  value="117106113/mod04lab27.mp4"> TCP,Ports and Sockets </option>
      
      <option  value="117106113/mod04lab28.mp4"> I/O and Processes </option>
      
      <option  value="117106113/mod04lec29.mp4"> Bindings </option>
      
      <option  value="117106113/mod04lec30.mp4"> Programming Using Tcl/Tk-IV </option>
      
      <option  value="117106113/mod04lec31.mp4"> Furniture Arranger </option>
      
      <option  value="117106113/mod04lec32.mp4"> Bindtags </option>
      
      <option  value="117106113/mod04lec33.mp4"> Tcl in Synopsys Tools </option>
      
      <option  value="117106113/mod05lec34.mp4"> Python Programming </option>
      
      <option  value="117106113/mod05lec35.mp4"> Scope </option>
      
<option  value="117106113/mod05lec36.mp4"> Iteration </option>
      
      <option  value="117106113/mod05lec37.mp4"> More about Regexps </option>
      
      <option  value="117106113/mod05lec38.mp4"> Advanced Functions </option>
      
      <option  value="117106113/mod05lec39.mp4"> Exception Handling </option>

<option  value="117106113/mod05lec40.mp4"> Examples of file Parsing </option>
      
      <option  value="117106113/mod05lec41.mp4"> Program on If Statement </option>
      
      <option  value="117106113/mod05lec42.mp4"> Program on Lists </option>
      
      <option  value="117106113/mod10lec43.mp4"> Makefiles </option>

          </select>
</td>
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>117104115</strong></td>
      <td><strong>Electronics & Communication Engineering</strong></td>
      <td><strong>NOC:Principles of Modern CDMA/ MIMO/ OFDM Wireless Communications(Course sponsored by Aricent)</strong></td>
      <td><strong>Prof. Aditya K. Jagannatham</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="117104115/mod01lec01.mp4">Evolution of Wireless Communication Technologies</option>
          <option  value="117104115/mod01lec02.mp4">Modeling Wireless Channel</option>
          <option  value="117104115/mod01lec03.mp4">Wireless Fading Channel Model</option>
          <option  value="117104115/mod01lec04.mp4">Fading Channel Distribution</option>
          <option  value="117104115/mod01lec05.mp4">Rayleigh Fading Channel</option>
          <option  value="117104115/mod01lec06.mp4">Bit Error Rate (BER) Performance</option>
          <option  value="117104115/mod01lec07.mp4">Bit Error Rate (BER) of AWGN Channels</option>
          <option  value="117104115/mod02lec08.mp4">Bit Error Rate of Rayleigh Fading Wireless Channel</option>
          <option  value="117104115/mod02lec09.mp4">Exact BER Expression for Rayleigh Fading Wireless Channel</option>
          <option  value="117104115/mod02lec10.mp4">Deep Fade Analysis of Wireless Communication</option>
          <option  value="117104115/mod02lec11.mp4">Principle of Diversity</option>
          <option  value="117104115/mod02lec12.mp4">Multiple Antenna Diversity</option>
          <option  value="117104115/mod02lec13.mp4">Maximal-Ratio Combining</option>
          <option  value="117104115/mod03lec14.mp4">BER of Multiple Antenna Wireless Systems</option>
          <option  value="117104115/mod03lec15.mp4">Approximate BER for Multiple Antenna Wireless System</option>
          <option  value="117104115/mod03lec16.mp4">Examples for BER of Wireless Communication</option>
          <option  value="117104115/mod03lec17.mp4">Deep Fade in Multi Antenna Systems</option>
          <option  value="117104115/mod03lec18.mp4">Intuition for Deep Fade in Multi-Antenna System</option>
          <option  value="117104115/mod03lec19.mp4">Definition of Diversity Order</option>
          <option  value="117104115/mod04lec20.mp4">Max Delay Spread</option>
          <option  value="117104115/mod04lec21.mp4">RMS Delay Spread</option>
          <option  value="117104115/mod04lec22.mp4">Delay Spread and Inter Symbol Interference</option>
          <option  value="117104115/mod04lec23.mp4">Coherence Bandwidth of Wireless Channel</option>
          <option  value="117104115/mod04lec24.mp4">Mobility and Doppler Effect in Wireless Channels</option>
          <option  value="117104115/mod04lec25.mp4">Imapact of Doppler Effect on Wireless Channel</option>
          <option  value="117104115/mod05lec26.mp4">Introduction to Code Division Multiple Access (CDMA)</option>
          <option  value="117104115/mod05lec27.mp4">Chip Time and Bandwidth Expansion in CDMA</option>
          <option  value="117104115/mod05lec28.mp4">Code Generation for CDMA</option>
          <option  value="117104115/mod05lec29.mp4">CDMA Codes: Properties of PN Sequences</option>
          <option  value="117104115/mod05lec30.mp4">BER of CDMA Systems</option>
          <option  value="117104115/mod06lec31.mp4">Analysis of Multi-user CDMA</option>
          <option  value="117104115/mod06lec32.mp4">Multipath Diversity in CDMA Systems</option>
          <option  value="117104115/mod06lec33.mp4">Near-Far Problem in CDMA</option>
          <option  value="117104115/mod06lec34.mp4">Multiple Input Multiple Output (MIMO) Systems</option>
          <option  value="117104115/mod06lec35.mp4">Examples of MIMO Systems</option>
          <option  value="117104115/mod07lec36.mp4">MIMO Receivers</option>
          <option  value="117104115/mod07lec37.mp4">BER Performance of ZF Receiver</option>
          <option  value="117104115/mod07lec38.mp4">Transmit Beamforming in MISO Systems</option>
          <option  value="117104115/mod07lec39.mp4">Alamouti Code and Space-Time Block Codes</option>
          <option  value="117104115/mod07lec40.mp4">BER of Alamouti Coded System</option>
          <option  value="117104115/mod07lec41.mp4">Singular Value Decomposition (SVD)</option>
          <option  value="117104115/mod07lec42.mp4">SVD in MIMO</option>
          <option  value="117104115/mod08lec43.mp4">Capacity of MIMO Wireless Systems</option>
          <option  value="117104115/mod08lec44.mp4">SVD based MIMO Transmission</option>
          <option  value="117104115/mod08lec45.mp4">Orthogonal Frequency Division Multiplexing (OFDM)</option>
          <option  value="117104115/mod08lec46.mp4">Transmission in Multicarrier Systems</option>
          <option  value="117104115/mod08lec47.mp4">FFT/IFFT Processing in OFDM</option>
          <option  value="117104115/mod08lec48.mp4">Cyclic Prefix in OFDM Systems</option>
          <option  value="117104115/mod08lec49.mp4">Schematic Represntation of OFDM Transmitter and Receiver</option>
          <option  value="117104115/mod08lec50.mp4">BER Performance of OFDM Systems</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>117106116</strong></td>
      <td><strong>Electronics & Communication Engineering</strong></td>
      <td><strong>NOC:Networks and Systems(Course sponsored by Aricent) </strong></td>
      <td><strong>Prof. V.G.K. Murti, C. S. Ramalingam, Dr. Andrew Thangaraj</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  117106116/  mod01lec01.mp4  ">  Functions in circuits - constant and sinusoidal functions </option>
          <option  value="  117106116/  mod01lec02.mp4  ">  Functions in circuits - Exponential function  </option>
          <option  value="  117106116/  mod01lec03.mp4  ">  Complex numbers and other topics  </option>
          <option  value="  117106116/  mod02lec04.mp4  ">  Systems, Signals, Networks  </option>
          <option  value="  117106116/  mo02lec05.mp4 ">  Representation and Classification of Systems  </option>
          <option  value="  117106116/  mod02lec06.mp4  ">  Linear systems  </option>
          <option  value="  117106116/  mod03lec07.mp4  ">  Time-invariance and causality </option>
          <option  value="  117106116/  mod03lec08.mp4  ">  Signals, Elementary continuous signals  </option>
          <option  value="  117106116/  mod04lec09.mp4  ">  Complex frequencies of signals  </option>
          <option  value="  117106116/  mod04lec10.mp4  ">  Discontinuous signals - step, ramp  </option>
          <option  value="  117106116/  mod04lec11.mp4  ">  Unit impulse or delta function  </option>
          <option  value="  117106116/  mod04lec12.mp4  ">  Basic discrete-time signals </option>
          <option  value="  117106116/  mod05lec13.mp4  ">  Examples of Signals </option>
          <option  value="  117106116/  mod05lec14.mp4  ">  Introduction to Systems, Complementary Functions, Initial Conditions  </option>
          <option  value="  117106116/  mod06lec15.mp4  ">  Special initial conditions  </option>
          <option  value="  117106116/  mod06lec16.mp4  ">  Characterization of a linear system </option>
          <option  value="  117106116/  mod07lec16.mp4  ">  Impulse Response  </option>
          <option  value="  117106116/  mod07lec18.mp4  ">  Evaluating the Convolution Integral </option>
          <option  value="  117106116/  mod07lec19.mp4  ">  Worked-out Problems </option>
          <option  value="  117106116/  mod08lec20.mp4  ">  Introduction and Motivation </option>
          <option  value="  117106116/  mod09lec21.mp4  ">  Evaluating Fourier series coefficients  </option>
          <option  value="  117106116/  mod09lec22.mp4  ">  Symmetry conditions </option>
          <option  value="  117106116/  mod10lec23.mp4  ">  Symmetry Condition Examples </option>
          <option  value="  117106116/  mod10lec24.mp4  ">  Application to Network Analysis </option>
          <option  value="  117106116/  mod11lec25.mp4  ">  Exponential Fourier Series  </option>
          <option  value="  117106116/  mod12lec26.mp4  ">  Frequency Spectrum  </option>
          <option  value="  117106116/  mod12lec27.mp4  ">  Examples  </option>
          <option  value="  117106116/  mod13lec28.mp4  ">  Signal Power and Related Ideas  </option>
          <option  value="  117106116/  mod13lec29.mp4  ">  Convergence of Fourier Series </option>
          <option  value="  117106116/  mod14lec30.mp4  ">  Week 1 Solutions  </option>
          <option  value="  117106116/  mod14lec31.mp4  ">  Hints for Assignment 2  </option>
          <option  value="  117106116/  mod14lec32.mp4  ">  Hints for Assignment 3  </option>
          <option  value="  117106116/  mod14lec33.mp4  ">  Additional Properties of Fourier Series </option>
          <option  value="  117106116/  mod14lec34.mp4  ">  Exercises on Fourier Series </option>
          <option  value="  117106116/  mod14lec35.mp4  ">  Lab Demo  </option>
          <option  value="  117106116/  mod15lec36.mp4  ">  From Fourier Series to Fourier Transform  </option>
          <option  value="  117106116/  mod16lec37.mp4  ">  Continuous Time Fourier Transform </option>
          <option  value="  117106116/  mod16lec38.mp4  ">  Fourier Transform Examples  </option>
          <option  value="  117106116/  mod17lec39.mp4  ">  Examples and Some Properties of Fourier Transform </option>
          <option  value="  117106116/  mod17lec40.mp4  ">  Properties of Fourier Transform (contd.)  </option>
          <option  value="  117106116/  mod18lec41.mp4  ">  More Fourier Transform Properties </option>
          <option  value="  117106116/  mod18lec42.mp4  ">  Energy Considerations </option>
          <option  value="  117106116/  mod19lec43.mp4  ">  Energy Considerations II  </option>
          <option  value="  117106116/  mod19lec44.mp4  ">  Helpful Relationships for Inverse Fourier Transform </option>
          <option  value="  117106116/  mod19lec45.mp4  ">  Fourier transform of signals that are not absolutely integrable </option>
          <option  value="  117106116/  mod20lec46.mp4  ">  Fourier Transform of Periodic Signals, Unit Step and Signum Function  </option>
          <option  value="  117106116/  mod21lec47.mp4  ">  Truncated Sine wave and Convolution properties  </option>
          <option  value="  117106116/  mod21lec48.mp4  ">  Integration in Time domain  </option>
          <option  value="  117106116/  mod22lec49.mp4  ">  Application of continuous-time Fourier transform to system analysis </option>
          <option  value="  117106116/  mod22lec50.mp4  ">  Comments about transient analysis </option>
          <option  value="  117106116/  mod23lec51.mp4  ">  Sampling Theorem and Exercises on Fourier Transforms  </option>
          <option  value="  117106116/  mod24lec52.mp4  ">  Introduction to Laplace Transform </option>
          <option  value="  117106116/  mod25lec53.mp4  ">  Laplace transforms of important functions </option>
          <option  value="  117106116/  mod25lec54.mp4  ">  Recap, Poles / Zeros and Laplace Transform Notation </option>
          <option  value="  117106116/  mod25lec55.mp4  ">  Properties: Linearity, differentiation in the time domain </option>
          <option  value="  117106116/  mod26lec56.mp4  ">  Application and properties of Laplace transform </option>
          <option  value="  117106116/  mod26lec57.mp4  ">  More properties of Laplace transform: Shift in frequency domain </option>
          <option  value="  117106116/  mod27lec58.mp4  ">  More properties of Laplace transform  </option>
          <option  value="  117106116/  mod28lec59.mp4  ">  Properties: Division by `t, Initial value theorem, Final value theorem  </option>
          <option  value="  117106116/  mod28lec60.mp4  ">  Properties: Convolution in time domain  </option>
          <option  value="  117106116/  mod29lec61.mp4  ">  Complex convolution and periodic functions  </option>
          <option  value="  117106116/  mod29lec62.mp4  ">  Examples of Laplace transform </option>
          <option  value="  117106116/  mod30lec63.mp4  ">  Laplace transform examples  </option>
          <option  value="  117106116/  mod30lec64.mp4  ">  Inverse Laplace transform </option>
          <option  value="  117106116/  mod31lec65.mp4  ">  Partial fractions: general case </option>
          <option  value="  117106116/  mod31lec66.mp4  ">  Inverse Laplace Transform and Contour Integration </option>
          <option  value="  117106116/  mod31lec67.mp4  ">  Relating Fourier and Laplace Transform  </option>
          <option  value="  117106116/  mod31lec68.mp4  ">  Exercises </option>
          <option  value="  117106116/  mod32lec69.mp4  ">  Applications of Laplace transform to network transients </option>
          <option  value="  117106116/  mod33lec70.mp4  ">  Laplace transform for resistor and system analysis  </option>
          <option  value="  117106116/  mod33lec71.mp4  ">  Laplace transform method for mutual inductance  </option>
          <option  value="  117106116/  mod34lec72.mp4  ">  Mutual Inductance Continued </option>
          <option  value="  117106116/  mod34lec73.mp4  ">  Examples and Advantages of L-transform  </option>
          <option  value="  117106116/  mod35lec74.mp4  ">  General LTI systems and more about H(s) </option>
          <option  value="  117106116/  mod36lec75.mp4  ">  Many facets of the system function (contd)  </option>
          <option  value="  117106116/  mod36lec76.mp4  ">  Frequency response and stability  </option>
          <option  value="  117106116/  mod37lec77.mp4  ">  Full circuit example  </option>
          <option  value="  117106116/  mod37lec78.mp4  ">  Exercises.  </option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>117104117</strong></td>
      <td><strong>Electronics & Communication Engineering</strong></td>
      <td><strong>NOC:Probability and Random Variables/ Processes for Wireless Communications</strong></td>
      <td><strong>Prof. Aditya K. Jagannatham</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="  117104117/  mod01lec01.mp4  ">  Basics - Sample Space and Events  </option>
          <option  value="  117104117/  mod01lec02.mp4  ">  Axioms of Probability </option>
          <option  value="  117104117/  mod01lec03.mp4  ">  Conditional Probability - Mary-PAM Example  </option>
          <option  value="  117104117/  mod01lec04.mp4  ">  Independent Events - Mary-PAM Example </option>
          <option  value="  117104117/  mod01lec05.mp4  ">  Independent Events - Block Transmission Example </option>
          <option  value="  117104117/  mod01lec06.mp4  ">  Independent Events - Multiantenna Fading Example  </option>
          <option  value="  117104117/  mod02lec07.mp4  ">  Bayes Theorem and Aposteriori Probabilities </option>
          <option  value="  117104117/  mod02lec08.mp4  ">  Maximum Aposteriori Probability (MAP) Receiver  </option>
          <option  value="  117104117/  mod02lec09.mp4  ">  Random Variables, Probability Density Function (PDF)  </option>
          <option  value="  117104117/  mod02lec10.mp4  ">  Application: Power of Fading Wireless Channel </option>
          <option  value="  117104117/  mod02lec11.mp4  ">  Mean, Variance of Random Variables  </option>
          <option  value="  117104117/  mod02lec12.mp4  ">  Application: Average Delay and RMS Delay Spread of Wireless Channel </option>
          <option  value="  117104117/  mod03lec13.mp4  ">  Transformation of Random Variables and Rayleigh Fading Wireless Channel </option>
          <option  value="  117104117/  mod03lec14.mp4  ">  Gaussian Random Variable and Linear Transformation  </option>
          <option  value="  117104117/  mod03lec15.mp4  ">  Special Case: IID Gaussian Random Variables </option>
          <option  value="  117104117/  mod03lec16.mp4  ">  Application: Array Processing and Array Gain with Uniform Linear Arrays </option>
          <option  value="  117104117/  mod03lec17.mp4  ">  Random Processes and Wide Sense Stationarity (WSS)  </option>
          <option  value="  117104117/  mod03lec18.mp4  ">  WSS Example Narrowband Wireless Signal with Random Phase  </option>
          <option  value="  117104117/  mod04lec19.mp4  ">  Power Spectral Density (PSD) for WSS Random Process </option>
          <option  value="  117104117/  mod04lec20.mp4  ">  PSD Application in Wireless Bandwidth Required for Signal Transmission  </option>
          <option  value="  117104117/  mod04lec21.mp4  ">  Transmission of WSS Random Process Through LTI System </option>
          <option  value="  117104117/  mod04lec22.mp4  ">  Special Random Processes Gaussian Process and White Noise AWGN Communication Channel  </option>
          <option  value="  117104117/  mod04lec23.mp4  ">  Gaussian Process Through LTI System Example: WGN Through RC Low Pass Fillter Not Started    </option>
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
