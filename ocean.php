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
<title>Ocean</title>
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
	<td><strong>114105002</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong> Elements of Ocean Engineering</strong></td>
	<td><strong>Dr. Ashoke Bhar </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="114105002/mod01lec01.mp4">Introduction                                        </option>
<option value="114105002/mod01lec02.mp4">Physical Oceanography - I                           </option>
<option value="114105002/mod01lec03.mp4">Physical Oceanography - II                          </option>
<option value="114105002/mod01lec3a.mp4">Physical Oceanography - III                         </option>
<option value="114105002/mod01lec04.mp4">Physical Oceanography - IV                          </option>
<option value="114105002/mod01lec05.mp4">Sediments & Open Ocean                              </option>
<option value="114105002/mod01lec06.mp4">Open Ocean - I                                      </option>
<option value="114105002/mod01lec07.mp4">Open Ocean - II                                     </option>
<option value="114105002/mod01lec08.mp4">Physical Properties of Water                        </option>
<option value="114105002/mod01lec09.mp4">Water and Waves                                     </option>
<option value="114105002/mod01lec10.mp4">Waves - I                                           </option>
<option value="114105002/mod01lec11.mp4">Waves - II                                          </option>
<option value="114105002/mod01lec12.mp4">Waves - III                                         </option>
<option value="114105002/mod01lec13.mp4">Introduction to Offshore Structures - I             </option>
<option value="114105002/mod01lec14.mp4">Introduction to Offshore Structures -II             </option>
<option value="114105002/mod01lec15.mp4">Waves - IV                                          </option>
<option value="114105002/mod01lec16.mp4">The Wave Spectra                                    </option>
<option value="114105002/mod01lec17.mp4">The Wave Spectra (Contd...1)                        </option>
<option value="114105002/mod01lec18.mp4">The Wave Spectra (Contd...2)                        </option>
<option value="114105002/mod01lec19.mp4">Offshore Structures - I                             </option>
<option value="114105002/mod01lec20.mp4">Offshore Structures - II                            </option>
<option value="114105002/mod01lec21.mp4">Offshore Structures - III                           </option>
<option value="114105002/mod01lec22.mp4">Floating Offshore Structures                        </option>
<option value="114105002/mod01lec23.mp4">Drilling from Platforms                             </option>
<option value="114105002/mod01lec24.mp4">Drilling and Topsides                               </option>
<option value="114105002/mod01lec25.mp4">Topsides                                            </option>
<option value="114105002/mod01lec26.mp4">Mooring Systems                                     </option>
<option value="114105002/mod01lec27.mp4">Mooring Systems (Contd...1)                         </option>
<option value="114105002/mod01lec28.mp4">Static Analysis of Mooring Cable                    </option>
<option value="114105002/mod01lec29.mp4">Static Analysis of Mooring Cable (Contd.)           </option>
<option value="114105002/mod01lec30.mp4">Mooring Systems (Contd...2)                         </option>
<option value="114105002/mod01lec31.mp4">Mooring Systems (Contd...3)                         </option>
<option value="114105002/mod01lec32.mp4">Mooring Systems (Contd...4)                         </option>
<option value="114105002/mod01lec33.mp4">Mooring Systems (Contd...5)                         </option>
<option value="114105002/mod01lec34.mp4">Mooring Systems (Contd...6)                         </option>
<option value="114105002/mod01lec35.mp4">Fixed Offshore Structures                           </option>
<option value="114105002/mod01lec36.mp4">Fixed Offshore Structures (Contd.)                  </option>
<option value="114105002/mod01lec37.mp4">Structural Analysis of Jacket Platforms             </option>
<option value="114105002/mod01lec38.mp4">Structural Analysis of Jacket Platforms (Contd...1) </option>
<option value="114105002/mod01lec39.mp4">Structural Analysis of Jacket Platforms (Contd...2) </option>
<option value="114105002/mod01lec40.mp4">Jacket Pile Selection                               </option>
<option value="114105002/mod01lec41.mp4">Jacket Pile Selection (Contd...1)                   </option>
<option value="114105002/mod01lec42.mp4">Jacket Pile Selection (Contd...2)                   </option>
<option value="114105002/mod01lec43.mp4">Floating Platform Design                            </option>
<option value="114105002/mod01lec44.mp4">Semi-Submersibles                                   </option>
<option value="114105002/mod01lec45.mp4">Semi-Submersibles & TLPs                            </option>
<option value="114105002/mod01lec46.mp4">Tension Leg Platform                                </option>
<option value="114105002/mod01lec47.mp4">Tension Leg Platform (Contd.)                       </option>
<option value="114105002/mod01lec48.mp4">SPAR Platform                                       </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114105003</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Hydrostatics and Stability</strong></td>
	<td><strong>Dr. Hari V. Warrior</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114105003/mod01lec01.mp4">Introduction</option>
      
      <option  value="114105003/mod01lec02.mp4">Archimedes Principle</option>
      
      <option  value="114105003/mod01lec03.mp4">Archimedes Principle (Contd.)</option>
      
      <option  value="114105003/mod01lec04.mp4">Numerical Integration</option>
      
      <option  value="114105003/mod01lec05.mp4">Problems in Stability - I</option>
      
      <option  value="114105003/mod01lec06.mp4">Problems in Stability - II</option>
      
      <option  value="114105003/mod01lec07.mp4">Problems in Stability - III</option>
      
      <option  value="114105003/mod01lec08.mp4">Problems in Integration</option>
      
      <option  value="114105003/mod01lec09.mp4">Free Surface Effect</option>
      
      <option  value="114105003/mod01lec10.mp4">Inclining Experiment</option>
      
      <option  value="114105003/mod01lec11.mp4">Hydrostatic Curves - I</option>
      
      <option  value="114105003/mod01lec12.mp4">Hydrostatic Curves - II</option>
      
      <option  value="114105003/mod01lec13.mp4">Stability Curve</option>
      
      <option  value="114105003/mod01lec14.mp4">Dynamical Stability - I</option>
      
      <option  value="114105003/mod01lec15.mp4">Dynamical Stability - II</option>
      
      <option  value="114105003/mod01lec16.mp4">Healing Moment - I</option>
      
      <option  value="114105003/mod01lec17.mp4">Healing Moment - II</option>
      
      <option  value="114105003/mod01lec18.mp4">Healing Moment - III</option>
      
      <option  value="114105003/mod01lec19.mp4">Dynamical Stability - III</option>
      
      <option  value="114105003/mod01lec20.mp4">Discussion</option>
      
      <option  value="114105003/mod01lec21.mp4">Righting Stability - I</option>
      
      <option  value="114105003/mod01lec22.mp4">Righting Stability - II</option>
      
      <option  value="114105003/mod01lec23.mp4">Trim Calculations - I</option>
      
      <option  value="114105003/mod01lec24.mp4">Trim Calculations - II</option>
      
      <option  value="114105003/mod01lec25.mp4">Trim Stability - I</option>
      
      <option  value="114105003/mod01lec26.mp4">Trim Stability - II</option>
      
      <option  value="114105003/mod01lec27.mp4">Dry Docking - I</option>
      
      <option  value="114105003/mod01lec28.mp4">Dry Docking - II</option>
      
      <option  value="114105003/mod01lec29.mp4">Bilging - I</option>
      
      <option  value="114105003/mod01lec30.mp4">Bilging - II</option>
      
      <option  value="114105003/mod01lec31.mp4">Bilging - III</option>
      
      <option  value="114105003/mod01lec32.mp4">Bilging - IV</option>
      
      <option  value="114105003/mod01lec33.mp4">Safety Regulations</option>
      
      <option  value="114105003/mod01lec34.mp4">Safety Regulations (Contd.)</option>
      
      <option  value="114105003/mod01lec35.mp4">Safety Regulations ( Contd.)</option>
      
      <option  value="114105003/mod01lec36.mp4">Ship Stability on Waves</option>
      
      <option  value="114105003/mod01lec37.mp4">Ship Stability on Waves (Contd.)</option>
      
      <option  value="114105003/mod01lec38.mp4">Ship Stability on Waves ( Contd.)</option>
      
      <option  value="114105003/mod01lec39.mp4">Wave Theory</option>
      
      <option  value="114105003/mod01lec40.mp4">Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114105004</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Marine Construction and Welding</strong></td>
	<td><strong>Prof. N.R. Mandal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114105004/mod01lec01.mp4">Introduction to ships & offshore structures</option>
      
      <option  value="114105004/mod01lec02.mp4">Characteristics of shipbuilding industry</option>
      
      <option  value="114105004/mod01lec03.mp4">Structural Requirement</option>
      
      <option  value="114105004/mod01lec04.mp4">Basic Structural Components</option>
      
      <option  value="114105004/mod01lec05.mp4">Structural Subassemblies</option>
      
      <option  value="114105004/mod01lec06.mp4">Bulkheads</option>
      
      <option  value="114105004/mod01lec07.mp4">Decks & Shells</option>
      
      <option  value="114105004/mod01lec08.mp4">Structural Assemblies Double Bottom Construction</option>
      
      <option  value="114105004/mod01lec09.mp4">Wing Tanks & Duct Keels</option>
      
      <option  value="114105004/mod01lec10.mp4">Fore & Altend Construction</option>
      
      <option  value="114105004/mod01lec11.mp4">General Cargo Carrier</option>
      
      <option  value="114105004/mod01lec12.mp4">Bulk Carrier</option>
      
      <option  value="114105004/mod01lec13.mp4">Structural Details</option>
      
      <option  value="114105004/mod01lec14.mp4">Container Ship</option>
      
      <option  value="114105004/mod01lec15.mp4">RO-RO Ship</option>
      
      <option  value="114105004/mod01lec16.mp4">Oil Tanker</option>
      
      <option  value="114105004/mod01lec17.mp4">Structural Alignment & Continuity</option>
      
      <option  value="114105004/mod01lec18.mp4">Steel Material Preparation</option>
      
      <option  value="114105004/mod01lec19.mp4">Shot Blasting</option>
      
      <option  value="114105004/mod01lec20.mp4">Acid Pickling</option>
      
      <option  value="114105004/mod01lec21.mp4">Plate Cutting</option>
      
      <option  value="114105004/mod01lec22.mp4">Plate & Section Forming - I</option>
      
      <option  value="114105004/mod01lec23.mp4">Plate & Section Forming - II</option>
      
      <option  value="114105004/mod01lec24.mp4">Line Heating</option>
      
      <option  value="114105004/mod01lec25.mp4">Fusion Welding & Power Source</option>
      
      <option  value="114105004/mod01lec26.mp4">Welding Parameters & their Effects</option>
      
      <option  value="114105004/mod01lec27.mp4">Welding Methods</option>
      
      <option  value="114105004/mod01lec28.mp4">Shielded Metal Arc Welding</option>
      
      <option  value="114105004/mod01lec29.mp4">Gas Metal Arc Welding - I</option>
      
      <option  value="114105004/mod01lec30.mp4">Gas Metal Arc Welding - II</option>
      
      <option  value="114105004/mod01lec31.mp4">Gas Tungsten Arc Welding</option>
      
      <option  value="114105004/mod01lec32.mp4">Submerged Arc Welding</option>
      
      <option  value="114105004/mod01lec33.mp4">Electroslag Welding</option>
      
      <option  value="114105004/mod01lec34.mp4">Electrogas Welding</option>
      
      <option  value="114105004/mod01lec35.mp4">Friction Stir Welding</option>
      
      <option  value="114105004/mod01lec36.mp4">FSW Metallurgy</option>
      
      <option  value="114105004/mod01lec37.mp4">Welding Defects & NDT</option>
      
      <option  value="114105004/mod01lec38.mp4">Welding Distortions</option>
      
      <option  value="114105004/mod01lec39.mp4">Distortion Mechanism & Types of Distortion</option>
      
      <option  value="114105004/mod01lec40.mp4">Distortion Control & Mitigation </option>
      
      <option  value="114105004/mod01lec41.mp4">Welding Sequence</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114105005</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Marine Hydrodynamics</strong></td>
	<td><strong>Dr. T. Sahoo</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114105005/mod01lec01.mp4">Introduction to Marine Hydrodynamics</option>
      
      <option  value="114105005/mod01lec02.mp4">Law of Conservation of Mass - Continuity of Equation</option>
      
      <option  value="114105005/mod01lec03.mp4">Streamlines and Flow Direction</option>
      
      <option  value="114105005/mod01lec04.mp4">Worked Examples on Various Types of Flow</option>
      
      <option  value="114105005/mod01lec05.mp4">Equation of Motion (Law of Conservation of Momentum)</option>
      
      <option  value="114105005/mod01lec06.mp4">Applications of Equations of Motion</option>
      
      <option  value="114105005/mod01lec07.mp4">Applications of Equations of Motion (Contd.)</option>
      
      <option  value="114105005/mod01lec08.mp4">Two Dimensional Flows</option>
      
      <option  value="114105005/mod01lec09.mp4">Two Dimensional Flows (Contd.)</option>
      
      <option  value="114105005/mod01lec10.mp4">Source, Sink and Doublet</option>
      
      <option  value="114105005/mod01lec11.mp4">Worked Examples on Two Dimensional Flows</option>
      
      <option  value="114105005/mod01lec12.mp4">Conformal Mapping and Joukowsky Transformation</option>
      
      <option  value="114105005/mod01lec13.mp4">Uniform Flow Past an Elliptic Cylinder</option>
      
      <option  value="114105005/mod01lec14.mp4">Aerofoil theory</option>
      
      <option  value="114105005/mod01lec15.mp4">Aerofoil theory (Contd.)</option>
      
      <option  value="114105005/mod01lec16.mp4">Aerofoil theory  (Contd.)</option>
      
      <option  value="114105005/mod01lec17.mp4">Schwarz - Christoffel Transformation</option>
      
      <option  value="114105005/mod01lec18.mp4">Motion of a cylinder</option>
      
      <option  value="114105005/mod01lec19.mp4">Vertex Motion</option>
      
      <option  value="114105005/mod01lec20.mp4">Irrotational Flow - A Bird's eyeview</option>
      
      <option  value="114105005/mod01lec21.mp4">Introduction to Water Waves</option>
      
      <option  value="114105005/mod01lec22.mp4">Basic Equation and Conditions of Water Waves</option>
      
      <option  value="114105005/mod01lec23.mp4">Water particle kinematics in wave motion</option>
      
      <option  value="114105005/mod01lec24.mp4">Capillary Gravity Waves</option>
      
      <option  value="114105005/mod01lec25.mp4">Linearised Long Wave Equation</option>
      
      <option  value="114105005/mod01lec26.mp4">Linearised Long Wave Equation (Contd.)</option>
      
      <option  value="114105005/mod01lec27.mp4">Wave motion in two layer fluids</option>
      
      <option  value="114105005/mod01lec28.mp4">Worked Examples on Wave Motion</option>
      
      <option  value="114105005/mod01lec29.mp4">Worked Examples on Wave Motion (Contd.)</option>
      
      <option  value="114105005/mod01lec30.mp4">Gravity wave transformation and energy rotation</option>
      
      <option  value="114105005/mod01lec31.mp4">Gravity wave transformation and energy rotation (Contd.)</option>
      
      <option  value="114105005/mod01lec32.mp4">Gravity wave transformation and energy rotation  (Contd.)</option>
      
      <option  value="114105005/mod01lec33.mp4">Navier - Stokes equation of motion</option>
      
      <option  value="114105005/mod01lec34.mp4">Analysis of Basic Flow Problems</option>
      
      <option  value="114105005/mod01lec35.mp4">Analysis of Basic Flow Problems (Contd.)</option>
      
      <option  value="114105005/mod01lec36.mp4">Unsteady unidirectional flows</option>
      
      <option  value="114105005/mod01lec37.mp4">Unsteady unidirectional flows (Contd.)</option>
      
      <option  value="114105005/mod01lec38.mp4">An introduction to Boundary Layer Theory</option>
      
      <option  value="114105005/mod01lec39.mp4">Solution methods for Boundary Layer Equations</option>
      
      <option  value="114105005/mod01lec40.mp4">Solutions Methods for Boundary Layer Equations (Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114105006</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Seakeeping & Manoeuvring</strong></td>
	<td><strong>Prof. Debabrata Sen</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114105006/mod01lec01.mp4">Regular Water Waves - I</option>
      
      <option  value="114105006/mod01lec02.mp4">Regular Water Waves - II</option>
      
      <option  value="114105006/mod01lec03.mp4">Definition of Ship Motions & Encounter Frequency</option>
      
      <option  value="114105006/mod01lec04.mp4">Single Degree of Freedom Motions in Regular Waves</option>
      
      <option  value="114105006/mod01lec05.mp4">Uncoupled Heave, Pitch and Roll - I</option>
      
      <option  value="114105006/mod01lec06.mp4">Uncoupled Heave, Pitch and Roll - II</option>
      
      <option  value="114105006/mod01lec07.mp4">Uncoupled Heave, Pitch and Roll - III</option>
      
      <option  value="114105006/mod01lec08.mp4">Uncoupled Heave, Pitch and Roll - IV</option>
      
      <option  value="114105006/mod01lec09.mp4">Uncoupled Heave, Pitch and Roll - V</option>
      
      <option  value="114105006/mod01lec10.mp4">Coupled Motions</option>
      
      <option  value="114105006/mod01lec11.mp4">Irregular Waves</option>
      
      <option  value="114105006/mod01lec12.mp4">Description of Irregular Waves by Spectrum</option>
      
      <option  value="114105006/mod01lec13.mp4">Theoretical Wave Spectrum</option>
      
      <option  value="114105006/mod01lec14.mp4">Ship Motion in Irregular Waves - I</option>
      
      <option  value="114105006/mod01lec15.mp4">Ship Motion in Irregular Waves - II</option>
      
      <option  value="114105006/mod01lec16.mp4">Ship Motion in Irregular Waves - III</option>
      
      <option  value="114105006/mod01lec17.mp4">Description of Short-Crested Sea</option>
      
      <option  value="114105006/mod01lec18.mp4">Motions in Short-Crested Sea</option>
      
      <option  value="114105006/mod01lec19.mp4">Derived Responses & Dynamic Effects - I</option>
      
      <option  value="114105006/mod01lec20.mp4">Derived Responses & Dynamic Effects - II</option>
      
      <option  value="114105006/mod01lec21.mp4">Derived Responses & Dynamic Effects - III</option>
      
      <option  value="114105006/mod01lec22.mp4">Seakeeping Considerations in Design</option>
      
      <option  value="114105006/mod01lec23.mp4">Manoeuvring: Introduction & Basic Equations</option>
      
      <option  value="114105006/mod01lec24.mp4">Dynamic Equations of Motion - I</option>
      
      <option  value="114105006/mod01lec25.mp4">Dynamic Equations of Motion - II</option>
      
      <option  value="114105006/mod01lec26.mp4">Hydrodynamic Derivatives</option>
      
      <option  value="114105006/mod01lec27.mp4">Controls-Fixed Stability</option>
      
      <option  value="114105006/mod01lec28.mp4">Stability & Cotrollability: Definitive Manoeuvres</option>
      
      <option  value="114105006/mod01lec29.mp4">Definitive Manoeuvres - I</option>
      
      <option  value="114105006/mod01lec30.mp4">Definitive Manoeuvres - II</option>
      
      <option  value="114105006/mod01lec31.mp4">Definitive Manoeuvres - III</option>
      
      <option  value="114105006/mod01lec32.mp4">Non-linear Equations of Motion</option>
      
      <option  value="114105006/mod01lec33.mp4">Non-linear Equations & Model Tests</option>
      
      <option  value="114105006/mod01lec34.mp4">Captive Model Tests and Experimental Determination of Hydrodynamic Derivatives</option>
      
      <option  value="114105006/mod01lec35.mp4">PMM Tests - I</option>
      
      <option  value="114105006/mod01lec36.mp4">PMM Tests - II</option>
      
      <option  value="114105006/mod01lec37.mp4">Rudder & Control Surfaces - I</option>
      
      <option  value="114105006/mod01lec38.mp4">Rudder & Control Surfaces - II</option>
      
      <option  value="114105006/mod01lec39.mp4">Theoretical Determination of Hydrodynamic Derivatives - I</option>
      
      <option  value="114105006/mod01lec40.mp4">Theoretical Determination of Hydrodynamic Derivatives - II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114105029</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Applied Thermodynamics for Marine Systems</strong></td>
	<td><strong>Prof. P.K. Das</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114105029/lec01.mp4">Introduction & Some Definitions</option>
      
      <option  value="114105029/lec02.mp4">First Law of Thermodynamics (Closed System)</option>
      
      <option  value="114105029/lec03.mp4">First Law of Thermodynamics (Open System)</option>
      
      <option  value="114105029/lec04.mp4">Second Law of Thermodynamics</option>
      
      <option  value="114105029/lec05.mp4">Second Law and Carnot Principle</option>
      
      <option  value="114105029/lec06.mp4">Property of Pure Substance, Steam Table</option>
      
      <option  value="114105029/lec07.mp4">Ideal Gas Laws, Different Processes</option>
      
      <option  value="114105029/lec08.mp4">Introduction to Vapour Power Cycle</option>
      
      <option  value="114105029/lec09.mp4">Vapour Power Cycle</option>
      
      <option  value="114105029/lec10.mp4">Steam Power Cycle, Steam Nozzle</option>
      
      <option  value="114105029/lec11.mp4">Basic Concept of Turbine, Velocity Diagram</option>
      
      <option  value="114105029/lec12.mp4">Steam Turbine-Impulse</option>
      
      <option  value="114105029/lec13.mp4">Reaction Turbine Compounding</option>
      
      <option  value="114105029/lec14.mp4">Comparison of Different Staging Arrangement</option>
      
      <option  value="114105029/lec15.mp4">Basics Laws of Fluid Mechanics</option>
      
      <option  value="114105029/lec16.mp4">Pipe Friction, Major Loss, Minor Loss</option>
      
      <option  value="114105029/lec17.mp4">Pipeline & Pipe Network</option>
      
      <option  value="114105029/lec18.mp4">Refrigeration Vapour Compression Cycle</option>
      
      <option  value="114105029/lec19.mp4">Psychometrics</option>
      
      <option  value="114105029/lec20.mp4">Psychometrics (Contd...)</option>
      
      <option  value="114105029/lec21.mp4">Psychometric Processes</option>
      
      <option  value="114105029/lec22.mp4">Psychometric Processes (Contd...), Air Conditioning</option>
      
      <option  value="114105029/lec23.mp4">Summer & Winter Air Conditioning</option>
      
      <option  value="114105029/lec24.mp4">Gas Power Cycles, Cycles for IC Engines</option>
      
      <option  value="114105029/lec25.mp4">Gas Turbine Cycles</option>
      
      <option  value="114105029/lec26.mp4">Modification of Brayton Cycle</option>
      
      <option  value="114105029/lec27.mp4">Introduction to Convective Heat Transfer Forced&Free Convection</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114105030</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Performance of Marine Vehicles at Sea</strong></td>
	<td><strong>Prof. S.C. Misra,Prof. Debabrata Sen</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114105030/lec01.mp4">Components of Resistance - I</option>
      
      <option  value="114105030/lec02.mp4">Components of Resistance - II</option>
      
      <option  value="114105030/lec03.mp4">Dimensional Analysis</option>
      
      <option  value="114105030/lec04.mp4">Frictional Resistance</option>
      
      <option  value="114105030/lec05.mp4">Wave Making Resistance</option>
      
      <option  value="114105030/lec06.mp4">Other Components of Resistance</option>
      
      <option  value="114105030/lec07.mp4">Model Experiments</option>
      
      <option  value="114105030/lec08.mp4">Shallow Water Effects</option>
      
      <option  value="114105030/lec09.mp4">Ship hull form and Resistance</option>
      
      <option  value="114105030/lec10.mp4">Propeller Geometry Part - I</option>
      
      <option  value="114105030/lec11.mp4">Propeller Geometry Part - II</option>
      
      <option  value="114105030/lec12.mp4">Introduction to High Speed Crafts Part - I</option>
      
      <option  value="114105030/lec13.mp4">Introduction to High Speed Crafts Part - II</option>
      
      <option  value="114105030/lec14.mp4">Propeller in Open Water Part - I</option>
      
      <option  value="114105030/lec15.mp4">Propeller in Open Water Part - II</option>
      
      <option  value="114105030/lec16.mp4">Propeller 'behind' a ship</option>
      
      <option  value="114105030/lec17.mp4">Propeller experiments</option>
      
      <option  value="114105030/lec18.mp4">Propeller theories Part I</option>
      
      <option  value="114105030/lec19.mp4">Propeller Theories</option>
      
      <option  value="114105030/lec20.mp4">Cavitation</option>
      
      <option  value="114105030/lec21.mp4">Regular Sea Waves - I</option>
      
      <option  value="114105030/lec22.mp4">Regular Sea Waves - II</option>
      
      <option  value="114105030/lec23.mp4">Irregular sea Waves - I</option>
      
      <option  value="114105030/lec24.mp4">Irregular Sea Waves - II</option>
      
      <option  value="114105030/lec25.mp4">Ship Motion in Regular Waves - I</option>
      
      <option  value="114105030/lec26.mp4">Ship Motion in Regular Waves - II</option>
      
      <option  value="114105030/lec27.mp4">Ship Motion in Regular Waves - III</option>
      
      <option  value="114105030/lec28.mp4">Ship Motion in irregular Waves - I</option>
      
      <option  value="114105030/lec29.mp4">Ship Motion in irregular Waves - II</option>
      
      <option  value="114105030/lec30.mp4">Ship Motion in irregular Waves - III</option>
      
      <option  value="114105030/lec31.mp4">Motion in Short Crested Sea,Coupled Motions</option>
      
      <option  value="114105030/lec32.mp4">Derived Responses</option>
      
      <option  value="114105030/lec33.mp4">Ship Controllability : Introductory Notes</option>
      
      <option  value="114105030/lec34.mp4">Equation of Motion in Horizontal Plane</option>
      
      <option  value="114105030/lec35.mp4">Hydrodynamic Derivatives and Stability</option>
      
      <option  value="114105030/lec36.mp4">Hydrodynamic Derivatives and Stability</option>
      
      <option  value="114105030/lec37.mp4">Ship Trials and Maneuvers - I</option>
      
      <option  value="114105030/lec38.mp4">Ship Trials and Maneuvers - II</option>
      
      <option  value="114105030/lec39.mp4">Heel During Turn, IMO Requirements</option>
      
      <option  value="114105030/lec40.mp4">Rudder Hydrodynamics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114105031</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Strength and Vibration of Marine Structures</strong></td>
	<td><strong>Prof. A.H. Sheikh,Prof. S.K. Satsangi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114105031/lec01.mp4">Introduction to Ship Structures-I</option>
      
      <option  value="114105031/lec02.mp4">Introduction to Ship Structures-II</option>
      
      <option  value="114105031/lec03.mp4">Deflection of Structure Beam-I</option>
      
      <option  value="114105031/lec04.mp4">Deflection of Structure Beam-II</option>
      
      <option  value="114105031/lec05.mp4">Deflection of Structure Beam-III</option>
      
      <option  value="114105031/lec06.mp4">Deflection of Structure Beam-IV</option>
      
      <option  value="114105031/lec07.mp4">Statically Indeterminate Structures-I</option>
      
      <option  value="114105031/lec08.mp4">Statically Indeterminate Structures-II</option>
      
      <option  value="114105031/lec09.mp4">Statically Indeterminate Structures-III</option>
      
      <option  value="114105031/lec10.mp4">Statically Indeterminate Structures-IV</option>
      
      <option  value="114105031/lec11.mp4">Statically Indeterminate Structures-V</option>
      
      <option  value="114105031/lec12.mp4">Statically Indeterminate Structures-VI</option>
      
      <option  value="114105031/lec13.mp4">Longitudinal Bending of Hull Girder - I</option>
      
      <option  value="114105031/lec14.mp4">Longitudinal Bending of Hull Girder - II</option>
      
      <option  value="114105031/lec15.mp4">Longitudinal Bending of Hull Grider-III</option>
      
      <option  value="114105031/lec16.mp4">Theory of Column-I</option>
      
      <option  value="114105031/lec17.mp4">Theory of Column-II</option>
      
      <option  value="114105031/lec18.mp4">Theory of Column-III</option>
      
      <option  value="114105031/lec19.mp4">Theory of Column-IV</option>
      
      <option  value="114105031/lec20.mp4">Calculation of Momentum of Inertia of Main Section</option>
      
      <option  value="114105031/lec21.mp4">Bending in Inclined Condition</option>
      
      <option  value="114105031/lec22.mp4">Calculation of Deflection/Shear Stress</option>
      
      <option  value="114105031/lec23.mp4">Ship Vibration-I</option>
      
      <option  value="114105031/lec24.mp4">Ship Vibration-II</option>
      
      <option  value="114105031/lec25.mp4">Ship Vibration-III</option>
      
      <option  value="114105031/lec26.mp4">Ship Vibration-IV</option>
      
      <option  value="114105031/lec27.mp4">Ship Vibration-V</option>
      
      <option  value="114105031/lec28.mp4">Propeller Induced Vibration & Hull Frequency Estimation</option>
      
      <option  value="114105031/lec29.mp4">Hull Frequency Estimation from Basic Group (Contd...)</option>
      
      <option  value="114105031/lec30.mp4">Analysis of Bulkhead-I</option>
      
      <option  value="114105031/lec31.mp4">Analysis of Bulkhead-II</option>
      
      <option  value="114105031/lec32.mp4">Stress Concentration/Structural Discontinuities</option>
      
      <option  value="114105031/lec33.mp4">Composite Construction</option>
      
      <option  value="114105031/lec34.mp4">Method of Plastic Analysis</option>
      
      <option  value="114105031/lec35.mp4">Calculation of Natural Frequency of Hull Girder</option>
      
      <option  value="114105031/lec36.mp4">Hull Resonance Diagram</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>114106011</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong> Design of Offshore Structures </strong></td>
	<td><strong>Dr. S. Nallayarasu</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="114106011/mod01lec01.mp4">Loads On Offshore Structures - 1                          </option>
<option value="114106011/mod01lec02.mp4">Loads On Offshore Structures - 2                          </option>
<option value="114106011/mod01lec03.mp4">Loads On Offshore Structures - 3                          </option>
<option value="114106011/mod01lec04.mp4">Loads On Offshore Structures - 4                          </option>
<option value="114106011/mod01lec05.mp4">Loads On Offshore Structures - 5                          </option>
<option value="114106011/mod01lec06.mp4">Loads On Offshore Structures - 6                          </option>
<option value="114106011/mod01lec07.mp4"> Loads On Offshore Structures - 7                         </option>
<option value="114106011/mod02lec01.mp4">Concepts of Fixed Offshore Platform Deck and Jacket  -  1 </option>
<option value="114106011/mod02lec02.mp4">Concepts of Fixed Offshore Platform Deck and Jacket - 2   </option>
<option value="114106011/mod02lec03.mp4">Concepts of Fixed Offshore Platform Deck and Jacket - 3   </option>
<option value="114106011/mod02lec04.mp4">Concepts of Fixed Offshore Platform Deck and Jacket - 4   </option>
<option value="114106011/mod02lec05.mp4">Concepts of Fixed Offshore Platform Deck and Jacket - 5   </option>
<option value="114106011/mod03lec01.mp4">Steel Tubular Member Design - 1                           </option>
<option value="114106011/mod03lec02.mp4">Steel Tubular Member Design - 2                           </option>
<option value="114106011/mod03lec03.mp4">Steel Tubular Member Design -3                            </option>
<option value="114106011/mod03lec04.mp4">Steel Tubular Member Design - 4                           </option>
<option value="114106011/mod03lec05.mp4">Steel Tubular Member Design - 5                           </option>
<option value="114106011/mod04lec01.mp4">Tubular Joint Design for Static and Cyclic Loads - 1      </option>
<option value="114106011/mod04lec02.mp4">Tubular Joint Design for Static and Cyclic Loads - 2      </option>
<option value="114106011/mod04lec03.mp4">Tubular Joint Design for Static and Cyclic Loads - 3      </option>
<option value="114106011/mod04lec04.mp4">Tubular Joint Design for Static and Cyclic Loads - 4      </option>
<option value="114106011/mod04lec05.mp4">Tubular Joint Design for Static and Cyclic Loads - 5      </option>
<option value="114106011/mod04lec06.mp4">Tubular Joint Design for Static and Cyclic Loads - 6      </option>
<option value="114106011/mod04lec07.mp4">Tubular Joint Design for Static and Cyclic Loads - 7      </option>
<option value="114106011/mod04lec08.mp4">Tubular Joint Design for Static and Cyclic Loads - 8      </option>
<option value="114106011/mod04lec09.mp4">Tubular Joint Design for Static and Cyclic Loads - 9      </option>
<option value="114106011/mod04lec10.mp4">Tubular Joint Design for Static and Cyclic Loads - 10     </option>
<option value="114106011/mod04lec11.mp4">Tubular Joint Design for Static and Cyclic Loads - 11     </option>
<option value="114106011/mod04lec12.mp4">Tubular Joint Design for Static and Cyclic Loads - 12     </option>
<option value="114106011/mod05lec01.mp4">Jackup RIGS-Analysis and Design - 1                       </option>
<option value="114106011/mod05lec02.mp4">Jackup RIGS-Analysis and Design - 2                       </option>
<option value="114106011/mod05lec03.mp4">Jackup RIGS-Analysis and Design - 3                       </option>
<option value="114106011/mod05lec04.mp4">Jackup RIGS-Analysis and Design - 4                       </option>
<option value="114106011/mod05lec05.mp4">Jackup RIGS-Analysis and Design - 5                       </option>
<option value="114106011/mod06lec01.mp4">Design Against Accidental Loads - 1                       </option>
<option value="114106011/mod06lec02.mp4">Design Against Accidental Loads - 2                       </option>
<option value="114106011/mod06lec03.mp4">Design Against Accidental Loads - 3                       </option>
<option value="114106011/mod06lec04.mp4">Design Against Accidental Loads - 4                       </option>
<option value="114106011/mod06lec05.mp4">Design Against Accidental Loads - 5                       </option>
<option value="114106011/mod06lec06.mp4">Design Against Accidental Loads - 6                       </option>
<option value="114106011/mod06lec07.mp4">Design Against Accidental Loads - 7                       </option>
<option value="114106011/mod06lec08.mp4">Design Against Accidental Loads - 8                       </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>114106015</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Foundation for Offshore Structures</strong></td>
	<td><strong>Dr. S. Nallayarasu</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="114106015/mod01lec01.mp4">Basics of Soil Mechanics I           </option>
<option value="114106015/mod01lec02.mp4">Basics of Soil Mechanics II          </option>
<option value="114106015/mod01lec03.mp4">Basics of Soil Mechanics III         </option>
<option value="114106015/mod01lec04.mp4">Basics of Soil Mechanics IV          </option>
<option value="114106015/mod01lec05.mp4">Basics of Soil Mechanics V           </option>
<option value="114106015/mod01lec06.mp4">Basics of Soil Mechanics VI          </option>
<option value="114106015/mod01lec07.mp4">Basics of Soil Mechanics VII         </option>
<option value="114106015/mod01lec08.mp4">Bearing Capacity of Foundations I    </option>
<option value="114106015/mod01lec09.mp4">Bearing Capacity of Foundations II   </option>
<option value="114106015/mod01lec10.mp4">Pile Foundation I                    </option>
<option value="114106015/mod01lec11.mp4">Pile Foundation II                   </option>
<option value="114106015/mod01lec12.mp4">Pile Foundation III                  </option>
<option value="114106015/mod01lec13.mp4">Pile Foundation IV                   </option>
<option value="114106015/mod01lec14.mp4">Pile Foundation V                    </option>
<option value="114106015/mod01lec15.mp4">Pile Foundation VI                   </option>
<option value="114106015/mod01lec16.mp4">Pile Installation I                  </option>
<option value="114106015/mod01lec17.mp4">Pile Installation II                 </option>
<option value="114106015/mod01lec18.mp4">Pile Driveability Analysis I         </option>
<option value="114106015/mod01lec19.mp4">Pile Driveability Analysis II        </option>
<option value="114106015/mod01lec20.mp4"> Pile Driveability Analysis III      </option>
<option value="114106015/mod01lec21.mp4">Pile Driveability Analysis IV        </option>
<option value="114106015/mod01lec22.mp4">Pile Driveability Analysis V         </option>
<option value="114106015/mod01lec23.mp4">Onbottom Stability of Jackets I      </option>
<option value="114106015/mod01lec24.mp4">Onbottom Stability of Jacket II      </option>
<option value="114106015/mod01lec25.mp4">Pile Load Test I                     </option>
<option value="114106015/mod01lec26.mp4">Pile Load Test II                    </option>
<option value="114106015/mod01lec27.mp4">Pile Load Test III                   </option>
<option value="114106015/mod01lec28.mp4">Special Topics                       </option>
<option value="114106015/mod01lec29.mp4">Special Foundations I                </option>
<option value="114106015/mod01lec30.mp4">Special Foundations II               </option>
<option value="114106015/mod01lec31.mp4">Special Foundations III              </option>
<option value="114106015/mod01lec32.mp4">Pile Group Effects                   </option>
<option value="114106015/mod01lec33.mp4">Two Pile Group Effect For Axial Load </option>

</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>114106025</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Port and Harbour Structures</strong></td>
	<td><strong>Prof. R. Sundaravadivelu</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras	</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="114106025/mod01lec01.mp4">Layout of ports                                                   </option>
<option value="114106025/mod01lec02.mp4">Continuation of layout of ports                                   </option>
<option value="114106025/mod01lec03.mp4">Visakhapatnam port                                                </option>
<option value="114106025/mod01lec04.mp4">Ships and  size of ships                                          </option>
<option value="114106025/mod01lec05.mp4">Port planning                                                     </option>
<option value="114106025/mod01lec06.mp4">Harbour layout                                                    </option>
<option value="114106025/mod02lec07.mp4">Site characteristics & navigation channel                         </option>
<option value="114106025/mod02lec08.mp4">Bathymetric survey                                                </option>
<option value="114106025/mod02lec09.mp4">Tide, surge, tsunami and wave                                     </option>
<option value="114106025/mod02lec10.mp4">Wave rose diagram                                                 </option>
<option value="114106025/mod03lec11.mp4">Breakwater                                                        </option>
<option value="114106025/mod03lec12.mp4">Design of breakwater �part-1                                      </option>
<option value="114106025/mod03lec13.mp4">Design of breakwater �part-2                                      </option>
<option value="114106025/mod03lec14.mp4">Berm breakwater                                                   </option>
<option value="114106025/mod03lec15.mp4">Dredging & methods of disposal                                    </option>
<option value="114106025/mod04lec16.mp4">Berthing structures modelling                                     </option>
<option value="114106025/mod04lec17.mp4">Berthing structures �analyses                                     </option>
<option value="114106025/mod04lec18.mp4">Loads                                                             </option>
<option value="114106025/mod04lec19.mp4">Types of  berthing structures                                     </option>
<option value="114106025/mod04lec20.mp4">Design of berthing , structures-1                                 </option>
<option value="114106025/mod04lec21.mp4">Design of offshore berthing , structures-1                        </option>
<option value="114106025/mod04lec22.mp4">Estimation of mooring, berthing and seismic forces                </option>
<option value="114106025/mod04lec23.mp4">Estimation seismic forces                                         </option>
<option value="114106025/mod04lec24.mp4">Active and passive earth pressure and differential water pressure </option>
<option value="114106025/mod04lec25.mp4">Load combinations and design                                      </option>
<option value="114106025/mod04lec26.mp4">Fenders                                                           </option>
<option value="114106025/mod04lec27.mp4">Mechanical handling system                                        </option>
<option value="114106025/mod05lec28.mp4">Single buoy mooring and open sea jetty-part1                      </option>
<option value="114106025/mod05lec29.mp4">Single buoy mooring and open sea jetty-part 2                     </option>
<option value="114106025/mod05lec30.mp4">Slipway, drydock,floating dock,shiplift                           </option>
<option value="114106025/mod06lec31.mp4">Soil structure interaction                                        </option>
<option value="114106025/mod06lec32.mp4">Calulation of fixity depth                                        </option>
<option value="114106025/mod06lec33.mp4">Pile load test                                                    </option>
<option value="114106025/mod06lec34.mp4">Ground improvement techniques                                     </option>
<option value="114106025/mod06lec35.mp4">Analysis of pile with spring support                              </option>
<option value="114106025/mod07lec36.mp4">UPV,Half cell potential, Low high Integrity Test                  </option>
<option value="114106025/mod07lec37.mp4">Mooring Dolphin at KPT                                            </option>
<option value="114106025/mod08lec38.mp4">Coastal structures and environmental management                   </option>
<option value="114106025/mod08lec39.mp4">BOQ and Cost Estimate                                             </option>
<option value="114106025/mod08lec40.mp4">Proposed Mega Terminal Chennai                                    </option>
<option value="114106025/mod08lec41.mp4">Preliminary Project Report on Shipyard                            </option>
<option value="114106025/mod08lec42.mp4">Procedures & clearances before implementation of a project        </option>
<option value="114106025/mod08lec43.mp4">Detailed project report                                           </option>
<option value="114106025/mod08lec44.mp4">Environmental studies of a project  -                             </option>
<option value="114106025/mod09lec45.mp4">Design of pile                                                    </option>
<option value="114106025/mod10lec46.mp4">Design and construction of diaphragm wall                         </option>
<option value="114106025/mod11lec47.mp4">Emprical relationship between spt and several soil properties     </option>
<option value="114106025/mod11lec48.mp4">Model studies for a deep water port_case study                    </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>114106026</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Ship Resistance and Propulsion </strong></td>
	<td><strong>Prof. V. Anantha Subramanian, Dr. P. Krishnankutty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras	</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="114106026/mod01lec01.mp4 ">Syllabus and Introduction                                                        </option>
<option value="114106026/mod01lec02.mp4 ">Seaway Effects on Resistance                                                     </option>
<option value="114106026/mod01lec03.mp4 ">Ship Types and Powering Aspects                                                  </option>
<option value="114106026/mod01lec04.mp4 ">Frictional Resistance and Turbulence Stimulation                                 </option>
<option value="114106026/mod01lec05.mp4 ">Wave Making Resistance                                                           </option>
<option value="114106026/mod01lec06.mp4 ">Bulbous Bow on Ship Resistance                                                   </option>
<option value="114106026/mod01lec07.mp4 ">Air and Wind Resistance Dimensional Analysis I                                   </option>
<option value="114106026/mod01lec08.mp4 ">Dimensional Analysis II, Model Tests and Ship Resistance Prediction Methods I    </option>
<option value="114106026/mod01lec09.mp4 ">Model Tests and Ship Resistance Prediction Methods II                            </option>
<option value="114106026/mod01lec10.mp4 ">Model Tests and Ship Resistance Prediction Methods III                           </option>
<option value="114106026/mod01lec11.mp4 ">Resistance in Shallow Water                                                      </option>
<option value="114106026/mod01lec12.mp4 ">Canal Effects on Resistance Holtrap-Mennen Method for Ship Resistance Prediction </option>
<option value="114106026/mod01lec13.mp4 ">Ship Resistance Prediction Methods I                                             </option>
<option value="114106026/mod01lec14.mp4 ">Ship Resistance Prediction Methods II                                            </option>
<option value="114106026/mod01lec15.mp4 ">Resistance of Advanced Marine Vehicles I                                         </option>
<option value="114106026/mod01lec16.mp4 ">Resistance of Advanced Marine Vehicles II                                        </option>
<option value="114106026/mod01lec17.mp4 ">Resistance of Advanced Marine Vehicles III                                       </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>114106038</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>NOC:Dynamics of Ocean Structures </strong></td>
	<td><strong>Dr. Srinivasan Chandrasekaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras	</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="114106038/mod01lec01.mp4">Introduction to Offshore structures                            </option>
<option value="114106038/mod01lec02.mp4">Introduction to Offshore structures - Cont                     </option>
<option value="114106038/mod01lec03.mp4">Environmental Loads                                            </option>
<option value="114106038/mod01lec04.mp4">Structural action of Ocean structures                          </option>
<option value="114106038/mod01lec05.mp4">Single Degree of Freedom                                       </option>
<option value="114106038/mod01lec06.mp4">Equations of Motion                                            </option>
<option value="114106038/mod01lec07.mp4">Free Vibration of SDOF systems                                 </option>
<option value="114106038/mod01lec08.mp4">Damped and </option>
<option value="114106038/mod01lec09.mp4">Damped Forced Vibration                                        </option>
<option value="114106038/mod01lec10.mp4">Response building                                              </option>
<option value="114106038/mod01lec11.mp4">Numerical Example (SDOF)                                       </option>
<option value="114106038/mod01lec12.mp4">Numerical Example II                                           </option>
<option value="114106038/mod01lec13.mp4">Numerical Example                                              </option>
<option value="114106038/mod01lec14.mp4">Numerical Examples - MDOF                                      </option>
<option value="114106038/mod01lec15.mp4">Numerical Example - Eigen value problems                       </option>
<option value="114106038/mod01lec16.mp4">Orthogonality of modes - MDOF system models                    </option>
<option value="114106038/mod01lec17.mp4">Numerical Methods for MDOF systems                             </option>
<option value="114106038/mod01lec18.mp4">Influence Coefficient Method - MDOF                            </option>
<option value="114106038/mod01lec19.mp4">STODLA Method - MDOF                                           </option>
<option value="114106038/mod01lec20.mp4">Stodla Method - Examples                                       </option>
<option value="114106038/mod01lec21.mp4">Rayleighs Method                                               </option>
<option value="114106038/mod01lec22.mp4">Modal Response Analysis for MDOF                               </option>
<option value="114106038/mod01lec23.mp4">Rayleigh Damping                                               </option>
<option value="114106038/mod01lec24.mp4">Caughey Damping                                                </option>
<option value="114106038/mod01lec25.mp4">Damping Matrix by Super Positioning Method                     </option>
<option value="114106038/mod01lec26.mp4">Duhamels Integral                                              </option>
<option value="114106038/mod01lec27.mp4">Modal superposition and truncation                             </option>
<option value="114106038/mod01lec28.mp4">Modal participation and missing mass </option>
<option value="114106038/mod01lec29.mp4">Fluid Structure Interaction                                    </option>
<option value="114106038/mod02lec30.mp4">Fluid Structure Interaction - II                               </option>
<option value="114106038/mod02lec31.mp4">Retrofitting and Rehabilitation - Application through Dynamics </option>
<option value="114106038/mod02lec32.mp4">Drag and Earthquake Forces                                     </option>
<option value="114106038/mod02lec33.mp4">Articulated Towers                                             </option>
<option value="114106038/mod02lec34.mp4">Fluid Structure Interaction Application in Ocean Structure     </option>
<option value="114106038/mod02lec35.mp4">Response Control of Compliant Structures (MLAT)                </option>
<option value="114106038/mod02lec36.mp4">MLATs with Passive Dampers                                     </option>
<option value="114106038/mod02lec37.mp4">Tension Leg Platforms                                          </option>
<option value="114106038/mod02lec38.mp4">Tension Leg Platforms - II                                     </option>
<option value="114106038/mod02lec39.mp4">Fluid Structure Interaction.                                   </option>
<option value="114106038/mod02lec40.mp4">Dynamic Analysis of TLPs under Springing and Ringing Waves     </option>
<option value="114106038/mod02lec41.mp4">Numerical Integration                                          </option>
<option value="114106038/mod02lec42.mp4">Dynamic Analysis of Offshore Triceratops                       </option>
<option value="114106038/mod03lec43.mp4">Stochastic Process                                             </option>
<option value="114106038/mod03lec44.mp4">Stochastic Process (contd)                                     </option>
<option value="114106038/mod03lec45.mp4">Response Spectrum I                                            </option>
<option value="114106038/mod03lec46.mp4">Response Spectrum II                                           </option>
<option value="114106038/mod03lec47.mp4">Return Period and Fatigue Damage        </option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>114106039</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong> NOC:Health, Safety and Environmental Management in Offshore and Petroleum Engineering </strong></td>
	<td><strong>Dr. Srinivasan Chandrasekaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras	</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="114106039/mod01lec01.mp4">Lecture-01   </option>
<option value="114106039/mod01lec02.mp4">Lecture-02   </option>
<option value="114106039/mod01lec03.mp4">Lecture-03   </option>
<option value="114106039/mod01lec04.mp4">Lecture 04   </option>
<option value="114106039/mod01lec05.mp4">Lecture 05   </option>
<option value="114106039/mod01lec06.mp4">Lecture 06   </option>
<option value="114106039/mod01lec07.mp4">Lecture 07   </option>
<option value="114106039/mod01lec08.mp4">Lecture 08</option>
<option value="114106039/mod01lec09.mp4">Lecture 09   </option>
<option value="114106039/mod01lec10.mp4">Lecture 10   </option>
<option value="114106039/mod01lec11.mp4">Lecture 11   </option>
<option value="114106039/mod01lec12.mp4">Lecture 12   </option>
<option value="114106039/mod01lec13.mp4">Lecture 13 </option>
<option value="114106039/mod01lec14.mp4">Lecture 14   </option>
<option value="114106039/mod01lec15.mp4">Lecture 15   </option>
<option value="114106039/mod01lec16.mp4">Lecture 16   </option>
<option value="114106039/mod01lec17.mp4">Lecture 17   </option>
<option value="114106039/mod01lec18.mp4">Lecture 18 </option>
<option value="114106039/mod01lec19.mp4">Lecture 19   </option>
<option value="114106039/mod01lec20.mp4">Lecture 20   </option>
<option value="114106039/mod01lec21.mp4">Lecture 21   </option>
<option value="114106039/mod01lec22.mp4">Lecture 22   </option>
<option value="114106039/mod01lec23.mp4">Lecture 23   </option>
<option value="114106039/mod01lec24.mp4">Lecture 24   </option>
<option value="114106039/mod03lec25.mp4">Lecture 01   </option>
<option value="114106039/mod03lec26.mp4">Lecture 02   </option>
<option value="114106039/mod03lec27.mp4">Lecture 03   </option>
<option value="114106039/mod03lec28.mp4">Lecture-04   </option>
<option value="114106039/mod03lec29.mp4">Lecture-05   </option>
<option value="114106039/mod03lec30.mp4">Lecture-06   </option>
<option value="114106039/mod03lec31.mp4">Lecture-07   </option>
<option value="114106039/mod04lec32.mp4">Lecture-1    </option>
<option value="114106039/mod04lec33.mp4">Lecture-2    </option>
<option value="114106039/mod04lec34.mp4">Lecture-3    </option>
<option value="114106039/mod04lec35.mp4">Lecture-4    </option>
<option value="114106039/mod04lec36.mp4">Lecture-5    </option>
<option value="114106039/mod04lec37.mp4">Lecture-6  </option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114106017</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Health,Safety and Environmental Management in Petroleum and Offshore Engineering</strong></td>
	<td><strong>Dr. Srinivasan Chandrasekaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114106017/mod01lec01.mp4">Introduction and Terminologies</option>
      
      <option  value="114106017/mod01lec02.mp4">Introduction to HSE</option>
      
      <option  value="114106017/mod01lec03.mp4">Safety assurance and assessment</option>
      
      <option  value="114106017/mod01lec04.mp4">Safety assurance and assessment (contd.)</option>
      
      <option  value="114106017/mod01lec05.mp4">Safety in design and operations</option>
      
      <option  value="114106017/mod01lec06.mp4">Organizing for safety</option>
      
      <option  value="114106017/mod01lec07.mp4">Hazard classification and assessment, Hazard evaluation and hazard control</option>
      
      <option  value="114106017/mod01lec08.mp4">HaZOP</option>
      
      <option  value="114106017/mod01lec09.mp4">HaZOP (contd.)</option>
      
      <option  value="114106017/mod01lec10.mp4">Hazard evaluation and hazard control</option>
      
      <option  value="114106017/mod01lec11.mp4">Hazard Identification and Management in Oil & Gas Industry using HAZOP</option>
      
      <option  value="114106017/mod01lec12.mp4">FMEA</option>
      
      <option  value="114106017/mod01lec13.mp4">FMEA (contd.)</option>
      
      <option  value="114106017/mod02lec01.mp4">Environmental Issues and Management</option>
      
      <option  value="114106017/mod02lec02.mp4">Impact of Oil and Gas Industry on Marine Environment</option>
      
      <option  value="114106017/mod02lec03.mp4">Oil Hydrocarbon in Marine Environment</option>
      
      <option  value="114106017/mod02lec04.mp4">Chemicals and Wastes from Offshore and Oil Industry</option>
      
      <option  value="114106017/mod02lec05.mp4">Dispersion Models � Atmospheric Pollution</option>
      
      <option  value="114106017/mod02lec06.mp4">Atmospheric Pollution (contd.)</option>
      
      <option  value="114106017/mod02lec07.mp4">Hazard Assessment and Accident Scenario</option>
      
      <option  value="114106017/mod03lec01.mp4">Dose Assessment, Safety Regulation</option>
      
      <option  value="114106017/mod03lec02.mp4">Toxic Release and Dispersion Modeling</option>
      
      <option  value="114106017/mod03lec03.mp4">Chemical Exposure Index (CEI)</option>
      
      <option  value="114106017/mod03lec04.mp4">Chemical Exposure Index (contd.)</option>
      
      <option  value="114106017/mod03lec05.mp4">Quantitative Risk Assessment</option>
      
      <option  value="114106017/mod03lec06.mp4">Quantitative Risk Assessment (Liquid Release Models Case Study - Continued)</option>
      
      <option  value="114106017/mod03lec07.mp4">Fire and Explosion Modeling </option>
      
      <option  value="114106017/mod03lec08.mp4">Fire and Explosion Modeling Flammability Diagrams</option>
      
      <option  value="114106017/mod03lec09.mp4">Explosion Modeling</option>
      
      <option  value="114106017/mod03lec10.mp4">Fire and Explosion Preventive Measures</option>
      
      <option  value="114106017/mod03lec11.mp4">Probabilistic Risk Analysis</option>
      
      <option  value="114106017/mod04lec01.mp4">Safety Measures in Design and Process Operations</option>
      
      <option  value="114106017/mod04lec02.mp4">Case Studies</option>
      
      <option  value="114106017/mod04lec03.mp4">Case Studies (contd.)</option>
      
      <option  value="114106017/mod04lec04.mp4">Software Used in HSE � an Over View</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>114106028</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Wave simulation, measurement and analysis</strong></td>
	<td><strong>Prof. S.A. Sannasiraj</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114106028/Module-1.pdf">Statistical And Spectral Analysis Of Random Waves</option>
      
      <option  value="114106028/Module-2.pdf">Laboratory Wave Generation</option>
      
      <option  value="114106028/Module-3.pdf">Uni- And Multi Variate Spectral Analysis</option>
      
      <option  value="114106028/Module-4.pdf">Measurement And Analysis Of Multi-Directional Waves</option>
      
      <option  value="114106028/Module-5.pdf">Physical And Remote Sensing Wave Measurements</option>
      
      <option  value="114106028/Module-6.pdf">Wind-Wave Modelling</option>
      
      <option  value="114106028/Module-7.pdf">Large Body Wave Diffraction</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114106032</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Coastal Engineering</strong></td>
	<td><strong>Prof. V. Sundar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114106032/mod01lec01.mp4">Wave deformation - I</option>
      
      <option  value="114106032/mod01lec02.mp4">Wave deformation - II</option>
      
      <option  value="114106032/mod01lec03.mp4">wave deformation (problems - I)</option>
      
      <option  value="114106032/mod01lec04.mp4">wave deformation (problems - II)</option>
      
      <option  value="114106032/mod01lec05.mp4">wave deformation (problems - III)</option>
      
      <option  value="114106032/mod02lec06.mp4">Sediment charecteristics - I</option>
      
      <option  value="114106032/mod02lec07.mp4">Sediment charecteristics - II</option>
      
      <option  value="114106032/mod02lec08.mp4">Radiation stresses - I</option>
      
      <option  value="114106032/mod02lec09.mp4">Radiation stresses - II</option>
      
      <option  value="114106032/mod02lec10.mp4">Longshore sediment transport - I</option>
      
      <option  value="114106032/mod02lec11.mp4">Longshore sediment transport - II</option>
      
      <option  value="114106032/mod02lec12.mp4">Longshore sediment transport (problems - I)</option>
      
      <option  value="114106032/mod02lec13.mp4">Longshore sediment transport (problems -II)</option>
      
      <option  value="114106032/mod03lec14.mp4">Coastal erosion protection measures - I</option>
      
      <option  value="114106032/mod03lec15.mp4">Coastal erosion protection measures - II</option>
      
      <option  value="114106032/mod03lec16.mp4">Coastal erosion protection measures - III</option>
      
      <option  value="114106032/mod03lec17.mp4">Coastal erosion protection measures - IV</option>
      
      <option  value="114106032/mod03lec18.mp4">Coastal erosion protection measures - V</option>
      
      <option  value="114106032/mod03lec19.mp4">Coastal erosion protection measures - VI</option>
      
      <option  value="114106032/mod03lec20.mp4">Coastal erosion protection measures - VII</option>
      
      <option  value="114106032/mod03lec21.mp4">Coastal erosion protection measures - VIII</option>
      
      <option  value="114106032/mod03lec22.mp4">Coastal erosion protection measures - IX</option>
      
      <option  value="114106032/mod03lec23.mp4">Coastal erosion protection measures - X</option>
      
      <option  value="114106032/mod03lec24.mp4">Cheaper CEP methods - XI</option>
      
      <option  value="114106032/mod04lec25.mp4">Geosynthetics - I</option>
      
      <option  value="114106032/mod04lec26.mp4">Geosynthetics - II</option>
      
      <option  value="114106032/mod05lec27.mp4">Breakwaters - I</option>
      
      <option  value="114106032/mod05lec28.mp4">Breakwaters - II</option>
      
      <option  value="114106032/mod05lec29.mp4">Breakwaters - III</option>
      
      <option  value="114106032/mod05lec30.mp4">Breakwaters - IV</option>
      
      <option  value="114106032/mod06lec31.mp4">Forces on coastal structures - I</option>
      
      <option  value="114106032/mod06lec32.mp4">Forces on coastal structures - II</option>
      
      <option  value="114106032/mod07lec33.mp4">Scour under marine structures</option>
      
      <option  value="114106032/mod08lec34.mp4">Physical modelling of coastal structures - I</option>
      
      <option  value="114106032/mod08lec35.mp4">Physical modelling of coastal structures - II</option>
      
      <option  value="114106032/mod09lec36.mp4">Tsunami - I</option>
      
      <option  value="114106032/mod09lec37.mp4">Tsunami -II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114106033</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Wave Hydrodynamics</strong></td>
	<td><strong>Prof. V. Sundar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114106033/mod01lec01.mp4">Basic Fluid Dynamics I</option>
      
      <option  value="114106033/mod01lec02.mp4">Basic Fluid Dynamics II</option>
      
      <option  value="114106033/mod02lec01.mp4">Introduction</option>
      
      <option  value="114106033/mod02lec02.mp4">Wave Motion I</option>
      
      <option  value="114106033/mod02lec03.mp4">Wave Motion II</option>
      
      <option  value="114106033/mod02lec04.mp4">Wave Motion III</option>
      
      <option  value="114106033/mod02lec05.mp4">Wave Motion Problems</option>
      
      <option  value="114106033/mod02lec06.mp4">Standing Wave Theory</option>
      
      <option  value="114106033/mod03lec01.mp4">Wave Deformation I</option>
      
      <option  value="114106033/mod03lec02.mp4">Wave Deformation II</option>
      
      <option  value="114106033/mod03lec03.mp4">Wave Deformation and Problems</option>
      
      <option  value="114106033/mod04lec01.mp4">Random Waves</option>
      
      <option  value="114106033/mod04lec02.mp4">Random Waves and Problems I</option>
      
      <option  value="114106033/mod04lec03.mp4">Random Waves and Problems II</option>
      
      <option  value="114106033/mod04lec04.mp4">Random Waves and Problems III</option>
      
      <option  value="114106033/mod04lec05.mp4">Simulation of Random Waves</option>
      
      <option  value="114106033/mod04lec06.mp4">Directional waves</option>
      
      <option  value="114106033/mod05lec01.mp4">Wave Loads on Structures I</option>
      
      <option  value="114106033/mod05lec02.mp4">Wave Loads on Structures II</option>
      
      <option  value="114106033/mod05lec03.mp4">Wave Loads on Structures and Problems I</option>
      
      <option  value="114106033/mod05lec04.mp4">Wave Loads on Structures and Problems II</option>
      
      <option  value="114106033/mod05lec05.mp4">Wave loads on Large Boides</option>
      
      <option  value="114106033/mod06lec01.mp4">Finite Amplitude Wave Theories</option>
      
      <option  value="114106033/mod06lec02.mp4">Hydrodynamic Testing Facility</option>
      
      <option  value="114106033/mod06lec03.mp4">Hydrodynamic Testing Facility at IITM</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114106035</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Ocean Structures and Materials</strong></td>
	<td><strong>Dr. Srinivasan Chandrasekaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114106035/mod01lec01.mp4">Introduction and objectives</option>
      
      <option  value="114106035/mod01lec02.mp4">Fixed type offshore structures</option>
      
      <option  value="114106035/mod01lec03.mp4">Compliant type offshore structures-I</option>
      
      <option  value="114106035/mod01lec04.mp4">Compliant type offshore structures-II</option>
      
      <option  value="114106035/mod01lec05.mp4">Drill ships and basics of drilling</option>
      
      <option  value="114106035/mod01lec06.mp4">Subsea production systems</option>
      
      <option  value="114106035/mod01lec07.mp4">Environmental loads I</option>
      
      <option  value="114106035/mod01lec08.mp4">Environmental loads II</option>
      
      <option  value="114106035/mod01lec09.mp4">Types of coastal structures I</option>
      
      <option  value="114106035/mod01lec10.mp4">Types of coastal structures II</option>
      
      <option  value="114106035/mod01lec11.mp4">Summary of coastal structures </option>
      
      <option  value="114106035/mod01lec12.mp4">Tutorials on Module I</option>
      
      <option  value="114106035/mod02lec01.mp4">Outline of planning of ocean structures</option>
      
      <option  value="114106035/mod02lec02.mp4">Introduction to design</option>
      
      <option  value="114106035/mod02lec03.mp4">Construction techniques</option>
      
      <option  value="114106035/mod02lec04.mp4">Dredging I</option>
      
      <option  value="114106035/mod02lec05.mp4">Dredging II</option>
      
      <option  value="114106035/mod02lec06.mp4">Uncertainties in analysis and design</option>
      
      <option  value="114106035/mod02lec07.mp4">Design adequacy- Example I</option>
      
      <option  value="114106035/mod02lec08.mp4">Design adequacy- Example II</option>
      
      <option  value="114106035/mod02lec09.mp4">Dredging equipments' specifications</option>
      
      <option  value="114106035/mod02lec10.mp4">Ocean Pollution</option>
      
      <option  value="114106035/mod02lec11.mp4">Foundation and sea bed anchors</option>
      
      <option  value="114106035/mod03lec01.mp4">Introduction to materials I</option>
      
      <option  value="114106035/mod03lec02.mp4">Introduction to materials II</option>
      
      <option  value="114106035/mod03lec03.mp4">Concrete in marine environment</option>
      
      <option  value="114106035/mod03lec04.mp4">Concrete: problems and solutions</option>
      
      <option  value="114106035/mod03lec05.mp4">Repair materials for marine structures </option>
      
      <option  value="114106035/mod03lec06.mp4">Corrosion in concrete I</option>
      
      <option  value="114106035/mod03lec07.mp4">Corrosion in concrete II</option>
      
      <option  value="114106035/mod03lec08.mp4">Material sin repair and rehabilitation</option>
      
      <option  value="114106035/mod03lec09.mp4">Materials for special repair</option>
      
      <option  value="114106035/mod03lec10.mp4">New materials for coastal embankments I</option>
      
      <option  value="114106035/mod03lec11.mp4">New materials for coastal embankments II</option>
      
      <option  value="114106035/mod04lec01.mp4">Non-destructive testing</option>
      
      <option  value="114106035/mod04lec02.mp4">Structural  health monitoring</option>
      
      <option  value="114106035/mod04lec03.mp4">Wireless sensor networking</option>
      
      <option  value="114106035/mod04lec04.mp4">Repair and rehabilitation- Fenders</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114106036</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Dynamics of Ocean Structures</strong></td>
	<td><strong>Dr. Srinivasan Chandrasekaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114106036/mod01lec01.mp4">Introduction to different types of ocean structures I</option>
      
      <option  value="114106036/mod01lec02.mp4">Introduction to different types of ocean structures II</option>
      
      <option  value="114106036/mod01lec03.mp4">Introduction to different types of ocean structures III</option>
      
      <option  value="114106036/mod01lec04.mp4">Types of Compliant towers</option>
      
      <option  value="114106036/mod01lec05.mp4">New Generation offshore and Coastal structures</option>
      
      <option  value="114106036/mod01lec06.mp4">Environmental forces</option>
      
      <option  value="114106036/mod01lec07.mp4">Wave forces, Current</option>
      
      <option  value="114106036/mod01lec08.mp4">Introduction to Structural dynamics</option>
      
      <option  value="114106036/mod01lec09.mp4">Characteristics of single degree - of- freedom model</option>
      
      <option  value="114106036/mod01lec10.mp4">Methods of writing equation of motion</option>
      
      <option  value="114106036/mod01lec11.mp4">Free and forced vibration of single degree - of - freedom systems</option>
      
      <option  value="114106036/mod01lec12.mp4">Undamped and damped systems I</option>
      
      <option  value="114106036/mod01lec13.mp4">Undamped and damped systems II</option>
      
      <option  value="114106036/mod01lec14.mp4">Undamped and damped systems III</option>
      
      <option  value="114106036/mod01lec15.mp4">Comparison of methods</option>
      
      <option  value="114106036/mod01lec16.mp4">Examples</option>
      
      <option  value="114106036/mod01lec17.mp4">Numerical problems in single degree - of - freedom systems</option>
      
      <option  value="114106036/mod01lec18.mp4">Two degrees - of - freedom systems</option>
      
      <option  value="114106036/mod01lec19.mp4">Eigenvalues and Eigenvectors</option>
      
      <option  value="114106036/mod01lec20.mp4">Orthogonality of modes</option>
      
      <option  value="114106036/mod01lec21.mp4">Study of Multi degrees - of - freedom systems</option>
      
      <option  value="114106036/mod01lec22.mp4">Equations of motion</option>
      
      <option  value="114106036/mod01lec23.mp4">Natural frequencies and mode shapes</option>
      
      <option  value="114106036/mod01lec24.mp4">Stodla, Rayleigh - Ritz and influence coefficient methods, Dunkerley</option>
      
      <option  value="114106036/mod01lec25.mp4">Continuous system</option>
      
      <option  value="114106036/mod02lec01.mp4">Structural action of offshore structures</option>
      
      <option  value="114106036/mod02lec02.mp4">Fluid - Structure interaction I</option>
      
      <option  value="114106036/mod02lec03.mp4">Fluid - Structure interaction II Dynamic analysis of offshore jacket platforms</option>
      
      <option  value="114106036/mod02lec04.mp4">Steps of analysis using software</option>
      
      <option  value="114106036/mod02lec05.mp4">Steps of analysis using software (contd..)</option>
      
      <option  value="114106036/mod02lec06.mp4">Dynamic analysis of articulated towers</option>
      
      <option  value="114106036/mod02lec07.mp4">Iterative frequency domain I</option>
      
      <option  value="114106036/mod02lec08.mp4">Iterative frequency domain II</option>
      
      <option  value="114106036/mod02lec09.mp4">Multi - legged articulated towers</option>
      
      <option  value="114106036/mod02lec10.mp4">Response control of multi-legged articulated towers using tuned mass dampers Experimental and analytical studies on MLAT</option>
      
      <option  value="114106036/mod02lec11.mp4">Development of Tension Leg Platforms and geometric optimization</option>
      
      <option  value="114106036/mod02lec12.mp4">Dynamic analyses of TLPs</option>
      
      <option  value="114106036/mod02lec13.mp4">Development of Mass, stiffness and damping matrices of TLP from first principles</option>
      
      <option  value="114106036/mod02lec14.mp4">Estimate of classical damping</option>
      
      <option  value="114106036/mod02lec15.mp4">TLPs under seismic excitation</option>
      
      <option  value="114106036/mod02lec16.mp4">Direct Integration method</option>
      
      <option  value="114106036/mod02lec17.mp4">Development of new generation offshore structures</option>
      
      <option  value="114106036/mod03lec01.mp4">Introduction to stochastic dynamics of ocean structures</option>
      
      <option  value="114106036/mod03lec02.mp4">Response spectrum</option>
      
      <option  value="114106036/mod03lec03.mp4">Narrow band process</option>
      
      <option  value="114106036/mod03lec04.mp4">Return period, Fatigue prediction</option>
      
      <option  value="114106036/mod03lec05.mp4">Modal response method, Modal mass contribution</option>
      
      <option  value="114106036/mod03lec06.mp4">Missing mass correction, Example problems</option>
      
      <option  value="114106036/mod03lec07.mp4">Duhamel's integrals</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>114106037</strong></td>
	<td><strong>Ocean Engineering</strong></td>
	<td><strong>Advanced Marine Structures</strong></td>
	<td><strong>Dr. Srinivasan Chandrasekaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="114106037/mod01lec01.mp4">Introduction and Scope</option>
      
      <option  value="114106037/mod01lec02.mp4">Fixed type structures</option>
      
      <option  value="114106037/mod01lec03.mp4">Compliant type structures</option>
      
      <option  value="114106037/mod01lec04.mp4">New generation marine structures</option>
      
      <option  value="114106037/mod01lec05.mp4">Environmental loads-I</option>
      
      <option  value="114106037/mod01lec06.mp4">Environmental loads-II</option>
      
      <option  value="114106037/mod01lec07.mp4">Environmental loads-III</option>
      
      <option  value="114106037/mod01lec08.mp4">Environmental loads-IV</option>
      
      <option  value="114106037/mod01lec09.mp4">Other loads-I</option>
      
      <option  value="114106037/mod01lec10.mp4">Other loads-II</option>
      
      <option  value="114106037/mod01lec11.mp4">Ultimate load design principles-I</option>
      
      <option  value="114106037/mod01lec12.mp4">Ultimate Limit State-I</option>
      
      <option  value="114106037/mod01lec13.mp4">Ultimate Limit State-II</option>
      
      <option  value="114106037/mod01lec14.mp4">Ultimate Limit State-III</option>
      
      <option  value="114106037/mod01lec15.mp4">Partial safety factor</option>
      
      <option  value="114106037/mod01lec16.mp4">Plastic design-I</option>
      
      <option  value="114106037/mod01lec17.mp4">Plastic design-II</option>
      
      <option  value="114106037/mod01lec18.mp4">Plastic design-III</option>
      
      <option  value="114106037/mod01lec19.mp4">Plastic design-IV- Example problems-I</option>
      
      <option  value="114106037/mod01lec20.mp4">Plastic analysis- Example problems-II</option>
      
      <option  value="114106037/mod01lec21.mp4">Plastic analysis- Example problems-III</option>
      
      <option  value="114106037/mod01lec22.mp4">Theories of failure-I</option>
      
      <option  value="114106037/mod01lec23.mp4">Theories of failure-II</option>
      
      <option  value="114106037/mod01lec24.mp4">Theories of failure-III</option>
      
      <option  value="114106037/mod01lec25.mp4">Theories of failure-IV</option>
      
      <option  value="114106037/mod01lec26.mp4">Shear centre-I</option>
      
      <option  value="114106037/mod01lec27.mp4">Shear centre-II- Examples</option>
      
      <option  value="114106037/mod01lec28.mp4">Plastic capacity of sections under combined loads-I</option>
      
      <option  value="114106037/mod01lec29.mp4">Plastic capacity of sections under combined loads-II</option>
      
      <option  value="114106037/mod01lec30.mp4">Impact analysis- fundamentals-I</option>
      
      <option  value="114106037/mod01lec31.mp4">Impact analysis- fundamentals-II</option>
      
      <option  value="114106037/mod01lec32.mp4">Ultimate capacity of tubular joints</option>
      
      <option  value="114106037/mod02lec01.mp4">Fluid structure interaction-I</option>
      
      <option  value="114106037/mod02lec02.mp4">Fluid structure interaction-II</option>
      
      <option  value="114106037/mod02lec03.mp4">Fluid induced vibration-I</option>
      
      <option  value="114106037/mod02lec04.mp4">Fluid induced vibration-II</option>
      
      <option  value="114106037/mo02lec05.mp4">Flow through perforated members-I</option>
      
      <option  value="114106037/mod02lec06.mp4">Flow through perforated members- numerical studies-II</option>
      
      <option  value="114106037/mod02lec07.mp4">Flow through perforated members- III- Analytical studies</option>
      
      <option  value="114106037/mod03lec01.mp4">Introduction to Reliability I</option>
      
      <option  value="114106037/mod03lec02.mp4">Introduction to Reliability II</option>
      
      <option  value="114106037/mod03lec03.mp4">Introduction to Reliability III</option>
      
      <option  value="114106037/mod03lec04.mp4">Reliability framework in Marine structures</option>
      
      <option  value="114106037/mod03lec05.mp4">Ultimate Limit state and Reliability approach I</option>
      
      <option  value="114106037/mod03lec06.mp4">Ultimate limit state and Reliability approach II</option>
      
      <option  value="114106037/mod03lec07.mp4">Levels of Reliability</option>
      
      <option  value="114106037/mod03lec08.mp4">FOSM and AFOSM methods of Reliability</option>
      
      <option  value="114106037/mod04lec01.mp4">Fracture and Fatigue</option>
      
      <option  value="114106037/mod04lec02.mp4">Fatigue failure</option>
      
      <option  value="114106037/mod04lec03.mp4">Fatigue loading and fatigue analysis</option>
      
      <option  value="114106037/mod04lec04.mp4">Deterministic fatigue analysis</option>
      
      <option  value="114106037/mod04lec05.mp4">Spectral fatigue analysis</option>
      
      <option  value="114106037/mod04lec06.mp4">Stress concentration and fatigue analysis</option>
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
