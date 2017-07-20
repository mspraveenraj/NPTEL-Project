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
<title>Physics</title>
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
	<td><strong>115101004</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Electrodynamics</strong></td>
	<td><strong>Prof. Amol Dighe</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option  value="115101004/modules/module1/lec1/1.1.html">Lecture 1 : Maxwell�s equations: a review</option>
      
      <option  value="115101004/modules/module1/lec2/objectives_L2.html">Lecture 2 : Solving static boundary value problems</option>
      
      <option  value="115101004/modules/module1/lec3/objectives_L3.html">Lecture 3 : Time dependent EM fields: relaxation, propagation</option>
      
      <option  value="115101004/modules/module1/lec4/objectives_L4.html">Lecture 4 : Energy in electric and magnetic fields</option>
      
      <option  value="115101004/modules/module1/lec5/objectives_L5.html">Lecture 5 : EM waves with boundaries</option>
      
      <option  value="115101004/modules/module1/lec6-7/objectives_L6-7.html">Lecture 6 -7 : EM waves in confined spaces</option>
      
      <option  value="115101004/modules/module1/lec8/objectives_L8.html">Lecture 8 : EM wave equation with sources</option>
      
      <option  value="115101004/modules/module1/lec9/objectives_L9.html">Lecture 9 : EM radiation</option>
      
      <option  value="115101004/modules/module1/lec10-11/objectives_L10-11.html">Lecture 10-11 : Multipole radiation</option>
      
      <option  value="115101004/modules/module1/lec12/objectives_L12.html">Lecture 12 : Problems</option>
      
      <option  value="115101004/modules/module2/lec1/objectives_L1.html">Lecture 1 : From electrodynamics to Special Relativity</option>
      
      <option  value="115101004/modules/module2/lec2/objectives_L2.html">Lecture 2 : Lorentz transformations of observables</option>
      
      <option  value="115101004/modules/module2/lec3/objectives_L3.html">Lecture 3 : Relativistic energy and momentum</option>
      
      <option  value="115101004/modules/module2/lec4/objectives_L4.html">Lecture 4 : Covariant and contravariant 4-vectors</option>
      
      <option  value="115101004/modules/module2/lec5/objectives_L5.html">Lecture 5 : Metric and higher-rank 4-tensors</option>
      
      <option  value="115101004/modules/module2/lec6/objectives_L6.html">Lecture 6 : Tensor calculus</option>
      
      <option  value="115101004/modules/module2/lec7/objectives_L7.html">Lecture 7 : Relativistic kinematics: scattering and decay</option>
      
      <option  value="115101004/modules/module2/lec8/objectives_L8.html">Lecture 8 : EM field tensor and Maxwell�s equations</option>
      
      <option  value="115101004/modules/module2/lec9-10/objectives_L9-10.html">Lectures 9 -10: Lagrangian formulation of relativistic mechanics</option>
      
      <option  value="115101004/modules/module2/lec11/objectives_L11.html">Lecture 11 : Lagrangian formulation of relativistic ED</option>
      
      <option  value="115101004/modules/module2/lec12/objectives_L12.html">Lecture 12 : Problem</option>
      
      <option  value="115101004/modules/module3/lec1-2/objectives_L1.html">Lectures 1- 2 : Motion of charges in E and B fields</option>
      
      <option  value="115101004/modules/module3/lec3/objectives_L3.html">Lecture 3 : EM potentials from a moving charge (Lienard-Wiechert)</option>
      
      <option  value="115101004/modules/module3/lec4-5/objectives_L4-5.html">Lectures 4-5 : EM fields from a uniformly moving charge</option>
      
      <option  value="115101004/modules/module3/lec6-7/objectives_L6-7.html">Lectures 6-7 : Cherenkov radiation</option>
      
      <option  value="115101004/modules/module3/lec8/objectives_L8.html">Lecture 8 : Radiation from an accelerating charge</option>
      
      <option  value="115101004/modules/module3/lec9/objectives_L9.html">Lecture 9 : Radiation from linear motion: Bremsstrahlung</option>
      
      <option  value="115101004/modules/module3/lec10-11/objectives_L10-11.html">Lectures 10-11 : Radiation from circular orbits: Synchrotron</option>
      
      <option  value="115101004/modules/module3/lec12-13/objectives_L12-13.html">Lectures 12-13 : Radiation reaction force</option>
      
      <option  value="115101004/modules/module3/lec14-15/objectives_L14-15.html">Lectures 14-15 : EM radiation passing through matter</option>
      
      <option  value="115101004/modules/module3/lec16/objectives_L16.html">Lecture 16 : Problems</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115101005</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Electromagnetic Theory</strong></td>
	<td><strong>Prof. D.K. Ghosh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#">Select </option>
      <option  value="115101005/mod01lec01.mp4">L1-Scalar field and its Gradient</option>
      
      <option  value="115101005/mod01lec02.mp4">L2-Line and Surface Integrals</option>
      
      <option  value="115101005/mod01lec03.mp4">L3-Divergence and Curl of Vector Fields</option>
      
      <option  value="115101005/mod01lec04.mp4">L4-Conservative Field, Stoke's Theorem</option>
      
      <option  value="115101005/mod01lec05.mp4">L5-Laplacian </option>
      
      <option  value="115101005/mod02lec06.mp4">L6-Electric Field Potential</option>
      
      <option  value="115101005/mod02lec07.mp4">L7-Gauss's Law, Potential</option>
      
      <option  value="115101005/mod02lec08.mp4">L8-Electric Field and Potential</option>
      
      <option  value="115101005/mod02lec09.mp4">L9-Potential and Potential Energy</option>
      
      <option  value="115101005/mod02lec10.mp4">L10-Potential and Potential Energy II</option>
      
      <option  value="115101005/mod02lec11.mp4">L11-Potential and Potential Energy III</option>
      
      <option  value="115101005/mod02lec12.mp4">L12-Coefficients of Potential and Capacitance</option>
      
      <option  value="115101005/mod02lec13.mp4">L13-Poission and Laplace Equation</option>
      
      <option  value="115101005/mod02lec14.mp4">L14-Solutions of Laplace Equation</option>
      
      <option  value="115101005/mod02lec15.mp4">L15-Solutions of Laplace Equation II</option>
      
      <option  value="115101005/mod02lec16.mp4">L16-Solutions of Laplace Equation III</option>
      
      <option  value="115101005/mod02lec17.mp4">L17-Special Techniques</option>
      
      <option  value="115101005/mod02lec18.mp4">L18-Special Techniques II</option>
      
      <option  value="115101005/mod02lec19.mp4">L19-Special Techniques III</option>
      
      <option  value="115101005/mod02lec20.mp4">L20-Dielectrics</option>
      
      <option  value="115101005/mod02lec21.mp4">L21-Dielectrics II</option>
      
      <option  value="115101005/mod02lec22.mp4">L22-Dielectrics III</option>
      
      <option  value="115101005/mod03lec23.mp4">L23-Equation of Continuity</option>
      
      <option  value="115101005/mod03lec24.mp4">L24-a) Force between current loops    b) Magnetic Vector Potential</option>
      
      <option  value="115101005/mod03lec25.mp4">L25-Magnetic Vector Potential</option>
      
      <option  value="115101005/mod03lec26.mp4">L26-Boundary Conditions</option>
      
      <option  value="115101005/mod03lec27.mp4">L27-Magnetized Material </option>
      
      <option  value="115101005/mod03lec28.mp4">L28-Magentostatics (contd..),Time Varying Field (Introduction)</option>
      
      <option  value="115101005/mod04lec29.mp4">L29-Faraday's Law and Inductance</option>
      
      <option  value="115101005/mod04lec30.mp4">L30-Maxwell's Equations</option>
      
      <option  value="115101005/mod04lec31.mp4">L31-Maxwell's Equations and Conservation Laws</option>
      
      <option  value="115101005/mod04lec32.mp4">L32-Conservation Laws</option>
      
      <option  value="115101005/mod04lec33.mp4">L33-a) Angular Momentum Conservation    b) Electromagnetic Waves</option>
      
      <option  value="115101005/mod04lec34.mp4">L34-Electromagnetic Waves</option>
      
      <option  value="115101005/mod04lec35.mp4">L35-Propagation of Electromagnetic Waves in a metal</option>
      
      <option  value="115101005/mod05lec36.mp4">L36-Waveguides</option>
      
      <option  value="115101005/mod05lec37.mp4">L37-Waveguides II</option>
      
      <option  value="115101005/mod05lec38.mp4">L38-Resonating Cavity</option>
      
      <option  value="115101005/mod05lec39.mp4">L39-Radiation</option>
      
      <option  value="115101005/mod05lec40.mp4">L40-Radiation II</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115101007</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Introduction to Physics of Nanoparticles and Nanostructures</strong></td>
	<td><strong>Prof. G. Mukhopadhyayl</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115101007/modules/P1M1/lec1/1.1.html">Lecture 1 : Maxwell equations and Time-harmonic fields                </option>
<option value="115101007/modules/P1M1/lec2/1.1.html">Lecture 2 : Helmholtz equation and Plane Waves                        </option>
<option value="115101007/modules/P1M1/lec3/1.1.html">Lecture 3 : Attenuation and Polarization of homogeneous plane wave    </option>
<option value="115101007/modules/P1M1/lec4/1.1.html">Lecture 4 : Kramer-Kronigs relations                                  </option>
<option value="115101007/modules/P1M2/lec1/1.1.html">Lecture 1 : Reflectance and Transmittance of a slab                   </option>
<option value="115101007/modules/P1M2/lec2/1.1.html">Lecture 2 : Reflectance and Transmittance of a slab (Contd...)        </option>
<option value="115101007/modules/P1M3/lec1/1.1.html">Lecture 1 : Oscillator Models                                         </option>
<option value="115101007/modules/P1M3/lec2/1.1.html">Lecture 2 : Oscillator Models (Contd...)                              </option>
<option value="115101007/modules/P1M3/lec3/1.1.html">Lecture 3 : Single oscillator model for lattice vibration             </option>
<option value="115101007/modules/P1M3/lec4/1.1.html">Lecture 4 : Multiple oscillator model for Lattice vibrations          </option>
<option value="115101007/modules/P1M3/lec5/1.1.html">Lecture 5 : Drude model for metallic solids                           </option>
<option value="115101007/modules/P1M3/lec6/1.1.html">Lecture 6 : Relaxation Models                                         </option>
<option value="115101007/modules/P1M3/lec7/1.1.html">Lecture 7 : Non-Debye relaxation models                               </option>
<option value="115101007/modules/P1M4/lec1/1.1.html">Lecture 1 : Stokes parameters                                         </option>
<option value="115101007/modules/P1M4/lec2/1.1.html">Lecture 2 : Stokes parameters (Contd..)                               </option>
<option value="115101007/modules/P1M5/lec1/1.1.html">Lecture 1 : Introduction and Scattering Matrix                        </option>
<option value="115101007/modules/P1M5/lec2/1.1.html">Lecture 2 : Poynting vector and Time averaged Poynting vector         </option>
<option value="115101007/modules/P1M5/lec3/1.1.html">Lecture 3 : Extinction, scattering and absorption                     </option>
<option value="115101007/modules/P1M5/lec4/1.1.html">Lecture 4 : Cross Section                                             </option>
<option value="115101007/modules/P1M6/lec1/1.1.html">Lecture 1 : Helmholtz equation for fields and Vector harmonics        </option>
<option value="115101007/modules/P1M6/lec2/1.1.html">Lecture 2 : The solution for the fields                               </option>
<option value="115101007/modules/P1M6/lec3/1.1.html">Lecture 3 : Cross-section and scattering matrix                       </option>
<option value="115101007/modules/P1M6/lec4/1.1.html">Lecture 4 : Sphere small compared with wavelength                     </option>
<option value="115101007/modules/P1M6/lec5/1.1.html">Lecture 5 : Electrostatic approximation                               </option>
<option value="115101007/modules/P1M7/lec1/1.1.html">Lecture 1 : Surface modes of small particles                          </option>
<option value="115101007/modules/P1M7/lec2/1.1.html">Lecture 2 : Surface modes of small particles (Contd...)               </option>
<option value="115101007/modules/P1M7/lec3/1.1.html">Lecture 3 : Mie modes for metallic ellipsoids                         </option>
<option value="115101007/modules/P2M1/lec1/1.1.html">Lecture 1 : Semi-Conductor Crystals                                   </option>
<option value="115101007/modules/P2M1/lec2/1.1.html">Lecture 2 : Band Structure in Semiconductors                          </option>
<option value="115101007/modules/P2M1/lec3/1.1.html">Lecture 3 : Band Structure in Semiconductors (Contd...)               </option>
<option value="115101007/modules/P2M1/lec4/1.1.html">Lecture 4 : Semiconductor Statistics and Density of states            </option>
<option value="115101007/modules/P2M1/lec5/1.1.html">Lecture 5 : Semiconductor Statistics and Density of states (Contd...) </option>
<option value="115101007/modules/P2M1/lec6/1.1.html">Lecture 6 : Impurity States                                           </option>
<option value="115101007/modules/P2M1/lec7/1.1.html">Lecture 7 : Exciton                                                   </option>
<option value="115101007/modules/P2M1/lec8/1.1.html">Lecture 8 : Compensated Semiconductors                                </option>
<option value="115101007/modules/P2M1/lec9/1.1.html">Lecture 9 : Statistics for donors and acceptors                       </option>
<option value="115101007/modules/P2M2/lec1/1.1.html">Lecture 1 : Quantization in Heterojunction system                     </option>
<option value="115101007/modules/P2M2/lec2/1.1.html">Lecture 2 : Density of states                                         </option>
<option value="115101007/modules/P2M2/lec3/1.1.html">Lecture 3 : Doped Hetero Junctions                                    </option>
<option value="115101007/modules/P2M2/lec4/1.1.html">Lecture 4 : Quantum Wires and Quantum Dots                            </option>
<option value="115101007/modules/P2M2/lec5/1.1.html">Lecture 5 : Density of States for Quasi 1-D System                    </option>
<option value="115101007/modules/P2M2/lec6/1.1.html">Lecture 6 : Quantum Dots                                              </option>
<option value="115101007/modules/P2M3/lec1/1.1.html">Lecture 1 : Boltzmann Transport Equation (BTE)                        </option>
<option value="115101007/modules/P2M3/lec2/1.1.html">Lecture 2 : BTE (Contd...)                                            </option>
<option value="115101007/modules/P2M3/lec3/1.1.html">Lecture 3 : BTE (Contd...)                                            </option>
<option value="115101007/modules/P2M3/lec4/1.1.html">Lecture 4 : BTE in Nano-tructures                                     </option>
<option value="115101007/modules/P2M3/lec5/1.1.html">Lecture 5 : BTE in Nano-tructures (Contd..)                           </option>
<option value="115101007/modules/P2M4/lec1/1.1.html">Lecture 1 : Diffusion current                                         </option>
<option value="115101007/modules/P2M4/lec2/1.1.html">Lecture 2 : Direct Recombination                                      </option>
<option value="115101007/modules/P2M4/lec3/1.1.html">Lecture 3 : Indirect Recombination                                    </option>
<option value="115101007/modules/P2M4/lec4/1.1.html">Lecture 4 : Continuity Equations                                      </option>
<option value="115101007/modules/P2M4/lec5/1.1.html">Lecture 5 : Thermionic emission                                       </option>
<option value="115101007/modules/P2M4/lec6/1.1.html">Lecture 6 : Thermionic emission from semiconductor to vacuum          </option>
<option value="115101007/modules/P2M4/lec7/1.1.html">Lecture 7 : Depletion Model and width of the depletion region         </option>
<option value="115101007/modules/P2M4/lec8/1.1.html">Lecture 8 : Ohmic Contact                                             </option>
<option value="115101007/modules/P2M5/lec1/1.1.html">Lecture 1 : Introduction                                              </option>
<option value="115101007/modules/P2M5/lec2/1.1.html">Lecture 2 : Transmission Coefficient                                  </option>
<option value="115101007/modules/P2M5/lec3/1.1.html">Lecture 3 : Asymmetric rectangular barrier                            </option>
<option value="115101007/modules/P2M5/lec4/1.1.html">Lecture 3 : Indirect Recombination                                    </option>
<option value="115101007/modules/P2M5/lec5/1.1.html">Lecture 4 : Continuity Equations                                      </option>
<option value="115101007/modules/P2M6/lec1/1.1.html">Lecture 5 : Thermionic emission                                       </option>
<option value="115101007/modules/P2M6/lec2/1.1.html">Lecture 6 : Thermionic emission from semiconductor to vacuum          </option>
<option value="115101007/modules/P2M6/lec3/1.1.html">Lecture 7 : Depletion Model and width of the depletion region         </option>
<option value="115101007/modules/P2M7/lec1/1.1.html">Lecture 8 : Ohmic Contact                                             </option>
<option value="115101007/modules/P2M7/lec2/1.1.html">Lecture 1 : Introduction                                              </option>
<option value="115101007/modules/P2M7/lec3/1.1.html">Lecture 3 : Two electron system in a Quantum Dot in magnetic field    </option>
<option value="115101007/modules/P2M8/lec1/1.1.html">Lecture 1 : Coulomb blockade and single electron tunneling            </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115101008</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>NonLinear Optics</strong></td>
	<td><strong>Prof. K.C. Rustagi, Prof. B.P. Singh </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115101008/modules/module1/lec1/1.1.html">Lecture 1 : Introduction                                                        </option>
<option value="115101008/modules/module1/lec2/objectives_L2.html">Lecture 2 : Linear Optics In Homogeneous, Isotropic Media                       </option>
<option value="115101008/modules/module1/lec3/objectives_L3.html">Lecture 3 : Wave Propagation In Linear, Homogenous Isotropic Media              </option>
<option value="115101008/modules/module1/lec4/objectives_L4.html">Lecture 4 : Optical Wave In Anisotropic Media                                   </option>
<option value="115101008/modules/module1/lec5/objectives_L5.html">Lecture 5 : Introduction to Lasers                                              </option>
<option value="115101008/modules/module1/lec6/objectives_L6.html">Lecture 6 : Properties of Lasers                                                </option>
<option value="115101008/modules/module2/lec7/objectives_L7.html">Lecture 7 : Optical Response of an Harmonic Oscillator                          </option>
<option value="115101008/modules/module2/lec8/objectives_L8.html">Lecture 8 : Nonlinear Susceptibility Tensors                                    </option>
<option value="115101008/modules/module2/lec9/objectives_L9.html">Lecture 9 : Nonlinear Wave Propagation                                          </option>
<option value="115101008/modules/module2/lec10/objectives_L10.html">Lecture 10 : Second Harmonic Generation                                         </option>
<option value="115101008/modules/module2/lec11/objectives_L11.html">Lecture 11 : Three Wave Mixing                                                  </option>
<option value="115101008/modules/module2/lec12/objectives_L12.html">Lecture 12 : Three Wave Mixing-2                                                </option>
<option value="115101008/modules/module2/lec13/objectives_L13.html">Lecture 13 : Phase Matching                                                     </option>
<option value="115101008/modules/module2/lec14/objectives_L14.html">Lecture 14 : Frequency Conversion Devices                                       </option>
<option value="115101008/modules/module3/lec15/objectives_L15.html">Lecture 15 : Optical Response Of An Atomic System                               </option>
<option value="115101008/modules/module3/lec16/objectives_L16.html">Lecture 16 : Nonlinear Optical Susceptibilities                                 </option>
<option value="115101008/modules/module3/lec17/objectives_L17.html">Lecture 17 : Nonlinear Optical Materials                                        </option>
<option value="115101008/modules/module3/lec18/objectives_L18.html">Lecture 18 : Organic Nonlinear Optical Materials                                </option>
<option value="115101008/modules/module4/lec19/objectives_L19.html">Lecture 19 : General Theory of four-ware-mixing                                 </option>
<option value="115101008/modules/module4/lec20/objectives_L20.html">Lecture 20 : Nonlinear Refraction and absorption                                </option>
<option value="115101008/modules/module4/lec21/objectives_L21.html">Lecture 21 : Self focusing                                                      </option>
<option value="115101008/modules/module4/lec22/objectives_L22.html">Lecture 22 : Saturation of absorption                                           </option>
<option value="115101008/modules/module4/lec23/objectives_L23.html">Lecture 23 : Two-photon absorption and Doppler free spectroscopy                </option>
<option value="115101008/modules/module4/lec24/objectives_L24.html">Lecture 24 : Kerr lens modelocking: An application of self focusing             </option>
<option value="115101008/modules/module4/lec25/objectives_L25.html">Lecture 25 : Optical phase conjugation and degenerate four-wave-mixing          </option>
<option value="115101008/modules/module4/lec26/objectives_L26.html">Lecture 26 : Third-order nonlinearity measurement techniques: Z-Scan            </option>
<option value="115101008/modules/module4/lec27/objectives_L27.html">Lecture 27 : Third-order nonlinearity measurement techniques: ARINS             </option>
<option value="115101008/modules/module4/lec28/objectives_L28.html">Lecture 28 : Inelastic Scattering Processes                                     </option>
<option value="115101008/modules/module4/lec29/objectives_L29.html">Lecture 29 : Stimulated Raman scattering(SRS)                                   </option>
<option value="115101008/modules/module4/lec30/objectives_L30.html">Lecture 30 : Stokes anti-Stokes coupling                                        </option>
<option value="115101008/modules/module4/lec31/objectives_L31.html">Lecture 31 : Coherent anti-Stokes Raman scattering                              </option>
<option value="115101008/modules/module4/lec31/objectives_L31.html">Lecture 32 : Stimulated Brillouin Scattering                                    </option>
<option value="115101008/modules/module4/lec33/objectives_L33.html">Lecture 33 : Consequences of the Stimulated Scattering in Optical Communication </option>
<option value="115101008/modules/module5/lec34/objectives_L34.html">Lecture 34 : Propagation in fibers                                              </option>
<option value="115101008/modules/module5/lec35/objectives_L35.html">Lecture 35 : Pulse propagation in a linear dispersive medium                    </option>
<option value="115101008/modules/module5/lec36/objectives_L36.html">Lecture 36 : Optical pulse propagation in nonlinear medium                      </option>
<option value="115101008/modules/module5/lec37/objectives_L37.html">Lecture 37 : Solitons in optical fibers                                         </option>
<option value="115101008/modules/module5/lec38/objectives_L38.html">Lecture 38 : Long Distance Soliton Transmission System                          </option>
<option value="115101008/modules/problems/problems_module1.html">Problems-Module 1                                                               </option>
<option value="115101008/modules/problems/problems_module2.html">Problems-Module2                                                                </option>
<option value="115101008/modules/problems/problems_module3.html">Problems-Module 3                                                               </option>
<option value="115101008/modules/problems/problems_module4.html">Problems-Module 4                                                               </option>
<option value="115101008/modules/problems/problems_module5.html">Problems-Module 5                                                               </option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115101009</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Ideas and methods in condensed matter theory</strong></td>
	<td><strong>Dr. Kedar Damle</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
    
    <option  value="#">Select </option>
      
      <option value="115101009/modules/lec1/1.1.html">Lecture 1: Overview of course and index of topics</option>
      
      <option value="115101009/modules/lec2/objectives_L2.html">Lecture 2: Review and preview</option>
      
      <option value="115101009/modules/lec3/objectives_L3.html">Lecture 3: Conceptual overview</option>
      
      <option value="115101009/modules/lec4/objectives_L4.html">Lecture 4: Linear response theory-I (Derivation of response kernel)</option>
      
      <option value="115101009/modules/lec5/objectives_L5.html">Lecture 5: Linear response theory-II (Properties of response kernel)</option>
      
      <option value="115101009/modules/lec6/objectives_L6.html">Lecture 6: Fluctuation-Disspation theorem and introduction to systems of interest</option>
      
      <option value="115101009/modules/lec7/objectives_L7.html">Lecture 7: Path integral representation and spin coherent states</option>
      
      <option value="115101009/modules/lec8/objectives_L8.html">Lecture 8: Path integral for spin systems</option>
      
      <option value="115101009/modules/lec9/objectives_L9.html">Lecture 9: Path integral for spin systems: Berry Phase</option>
      
      <option value="115101009/modules/lec10/objectives_L10.html">Lecture 10: Introduction to quantum antiferro- magnets</option>
      
      <option value="115101009/modules/lec11/objectives_L11.html">Lecture 11: Long-wavelength expansion in the Neel state Energetic terms</option>
      
      <option value="115101009/modules/lec12/objectives_L12.html">Lecture 12 : Expanding the Berry phase term</option>
      
      <option value="115101009/modules/lec13/objectives_L13.html">Lecture 13 : Berry phase in d = 1 and d = 2 antiferromagnets</option>
      
      <option value="115101009/modules/lec14/objectives_L14.html">Lecture 14 : Probes of quantum antiferromagnetism</option>
      
      <option value="115101009/modules/lec15/objectives_L15.html">Lecture 15 : Many-particle quantum mechanics: Algebraic preliminaries and wavefunction description</option>
      
      <option value="115101009/modules/lec16/objectives_L16.html">Lecture 16 : Many-body physics in second-quantized language</option>
      
      <option value="115101009/modules/lec17/objectives_L17.html">Lecture 17 : Path integral description of many-body physics</option>
      
      <option value="115101009/modules/lec18/objectives_L18.html">Lecture 18 : Calculating with the Bosonic path integral</option>
      
      <option value="115101009/modules/lec19/objectives_L19.html">Lecture 19 : Phases and excitations of the Bose-Hubbard model</option>
      
      <option value="115101009/modules/lec20/objectives_L20.html"> 	Lecture 20 : Effective field theory for the Bose-Hubbard model</option>
      
      <option value="115101009/modules/lec21/objectives_L21.html"> Lecture 21 : Spin wave theory for quantum rotor model</option>
      
      <option value="115101009/modules/lec22/objectives_L22.html">Lecture 22 : of Quantum rotor analysis of instability of N�el state to quantum and thermal fluctuations</option>
      
      <option value="115101009/modules/lec23/objectives_L23.html">Lecture 23 : The Mermin-Wagner theorem</option>
      
      <option value="115101009/modules/lec24/objectives_L24.html">Lecture 24 : Renormalization group approach to the breakdown of spinwave theory :  Basic ideas and formalism</option>
      
      <option value="115101009/modules/lec25/objectives_L25.html"> 	Lecture 25 : Renormalization group for the quantum rotor model: Details and the flow equation</option>
      
      <option value="115101009/modules/lec26/objectives_L26.html">Lecture 26 : Renormalization group approach to the quantum rotor model: Phases and phase transitions</option>
      
      <option value="115101009/modules/lec27/objectives_L27.html">Lecture 27 : Renormalization group approach to the quantum rotor model: Finite temperature properties</option>
      
      <option value="115101009/modules/lec28/objectives_L28.html">Lecture 28: Low energy rotor description of the superfluid state and transition to insulating behaviour</option>
      
      <option value="115101009/modules/lec29/objectives_L29.html">Lecture 29 : Vortices and their interactions</option>
      
      <option value="115101009/modules/lec30/objectives_L30.html">Lecture 30 : Statistical mechanics of vortices -- consequences for superfluid density</option>
      
      <option value="115101009/modules/lec31/objectives_L31.html">Lecture 31 : Kosterlitz Thouless theory</option></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115101010</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Quantum Mechanics I</strong></td>
	<td><strong>Prof. S.H. Patil</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="115101010/objectives_L1.html">Chapter 1 : Prelude to Quantum theory</option>
      
      <option value="115101010/objectives_L2.html">Chapter 2 : Introduction to Quantum ideas</option>
      
      <option value="115101010/objectives_L3.html">Chapter 3 : Elements of Quantum Mechanics</option>
      
      <option value="115101010/objectives_L4.html">Chapter 4 : Quantum mechanics in 1-dimension</option>
      
      <option value="115101010/objectives_L5.html">Chapter 5 : Quantum mechanics in 2-dimension</option>
      
      <option value="115101010/modules/lec6/1.html">Chapter 6 : Quantum mechanics in 3-dimension</option>
      
      <option value="115101010/objectives_L7.html">Chapter 7 :Miscellaneous topics</option>
      
      <option value="115101010/objectives_L8.html">Tutorials</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115101011</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Special Theory of Relativity</strong></td>
	<td><strong>Prof. Shiva Prasad</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="115101011/mod01lec01.mp4">L1-Problem with Classical Physics</option>
      
      <option value="115101011/mod01lec02.mp4">L2-Michelson-Morley Experiment</option>
      
      <option value="115101011/mod01lec03.mp4">L3-Postulates of Special Theory of Relativity and Galilean Transformation</option>
      
      <option value="115101011/mod01lec04.mp4">L4-Look out for a New Transformation</option>
      
      <option value="115101011/mod01lec05.mp4">L5-Lorentz Transformation</option>
      
      <option value="115101011/mod01lec06.mp4">L6-Length Contraction and Time Dilation</option>
      
      <option value="115101011/mod01lec07.mp4">L7-Examples of Length Contraction and Time Dilation</option>
      
      <option value="115101011/mod01lec08.mp4">L8-Velocity Transformation and Examples</option>
      
      <option value="115101011/mod01lec09.mp4">L9-A Three Event Problem</option>
      
      <option value="115101011/mod01lec10.mp4">L10-A Problem involving Light and Concept of Casuality</option>
      
      <option value="115101011/mod01lec11.mp4">L11-Problems involving Casuality and Need to Redefine Momentum</option>
      
      <option value="115101011/mod01lec12.mp4">L12-Minikowski Space and Four Vectors</option>
      
      <option value="115101011/mod01lec13.mp4">L13-Proper Time a Four Scalar</option>
      
      <option value="115101011/mod01lec14.mp4">L14-Velocity Four Vector</option>
      
      <option value="115101011/mod01lec15.mp4">L15-Momentum Energy Four Vector</option>
      
      <option value="115101011/mod01lec16.mp4">L16-Relook at Collision Problems</option>
      
      <option value="115101011/mod01lec17.mp4">L17-Zero Rest Mass Particle and Photon</option>
      
      <option value="115101011/mod01lec18.mp4">L18-Doppler Effect in Light</option>
      
      <option value="115101011/mod01lec19.mp4">L19-Example in C-Frame</option>
      
      <option value="115101011/mod01lec20.mp4">L20-Force in Relativity</option>
      
      <option value="115101011/mod01lec21.mp4">L21-Force Four-Vector</option>
      
      <option value="115101011/mod01lec22.mp4">L22-Electric &amp; Magnetic Field Transformation</option>
      
      <option value="115101011/mod01lec23.mp4">L23-Example of EM Field Transformation</option>
      
      <option value="115101011/mod01lec24.mp4">L24-Current Density Four Vector and Maxwell Equation</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115101012</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Superconductivity</strong></td>
	<td><strong>Prof. P.P. Singh,Prof. A.V. Mahajan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>
    
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="115101012/modules/Module-1/lec1/1.1.html">Lecture 1: Historical review and a survey of properties of superconductors.</option>
      
      <option value="115101012/modules/Module-2/lec1/objectives_L1.html">Lecture 1: Electrical conductivity and heat capacity followed by problem solving</option>
      
      <option value="115101012/modules/Module-2/lec2/objectives_L2.html">Lecture 2: Magnetic susceptibility and Hall Effect followed by problem solving</option>
      
      <option value="115101012/modules/Module-3/lec1/objectives_L1.html">Lecture 1: Two fluid model for superconductivity and London equations</option>
      
      <option value="115101012/modules/Module-3/lec2/objectives_L2.html">Lecture 2: Solution of London equations and free energy calculations</option>
      
      <option value="115101012/modules/Module-4/lec1/objectives_L1.html">Lecture 1: Basic thermodynamics and magnetism</option>
      
      <option value="115101012/modules/Module-4/lec2/objectives_L2.html">Lecture 2: Application to the superconducting transition followed by problem solving</option>
      
      <option value="115101012/modules/Module-5/lec1/objectives_L1.html">Lecture 1: Free energy formulation</option>
      
      <option value="115101012/modules/Module-5/lec2/objectives_L2.html">Lecture 2: Determination of coefficients Alpha and Beta in the absence of fields and gradients</option>
      
      <option value="115101012/modules/Module-5/lec3/objectives_L3.html">Lecture 3: GL equations in presence of fields currents and gradients</option>
      
      <option value="115101012/modules/Module-5/lec4/objectives_L4.html">Lecture 4: Coherence length, flux quantum, field penetration in a slab</option>
      
      <option value="115101012/modules/Module-5/lec5/objectives_L5.html">Lecture 5: Type II superconductivity, fluxoid quantisation</option>
      
      <option value="115101012/modules/Module-5/lec6/objectives_L6.html">Lecture 6: Critical field of thin films</option>
      
      <option value="115101012/modules/Module-5/lec7/objectives_L7.html">Lecture 7: Field and order parameter variation inside a vortex</option>
      
      <option value="115101012/modules/Module-6/lec1/objectives_L1.html">Lecture 1: Cooper-Pair Problem: Schroedinger Equation for Two Interacting Electrons</option>
      
      <option value="115101012/modules/Module-6/lec2/objectives_L2.html">Lecture 2: Cooper-Pair Problem: Solution for Zero Center-of-Mass Momentum</option>
      
      <option value="115101012/modules/Module-6/lec3/objectives_L3.html">Lecture 3: Cooper-Pair Problem: Bound States</option>
      
      <option value="115101012/modules/Module-6/lec4/objectives_L4.html">Lecture 4: Spatial Extent of Cooper-Pair Wavefunction</option>
      
      <option value="115101012/modules/Module-6/lec5/objectives_L5.html">Lecture 5: Cooper-Pair Problem Using Second Quantization</option>
      
      <option value="115101012/modules/Module-6/lec6/objectives_L6.html">Lecture 6: Electron-Phonon Interaction in Metals</option>
      
      <option value="115101012/modules/Module-6/lec7/objectives_L7.html">Lecture 7: Macroscopic Coherent States of Harmonic Oscillator</option>
      
      <option value="115101012/modules/Module-6/lec8/objectives_L8.html">Lecture 8: BCS Theory: BCS Wavefunction</option>
      
      <option value="115101012/modules/Module-6/lec9/objectives_L9.html">Lecture 9: BCS Wavefunction in terms of 2m-particle states</option>
      
      <option value="115101012/modules/Module-6/lec10/objectives_L10.html">Lecture 10: Number of Particles and Phase as Canonically Conjugate Variables</option>
      
      <option value="115101012/modules/Module-6/lec11/objectives_L11.html">Lecture 11: BCS Reduced Hamiltonian</option>
      
      <option value="115101012/modules/Module-6/lec12/objectives_L12.html">Lecture 12: Variational Determination of the Energy of the BCS Ground State. </option>
      
      <option value="115101012/modules/Module-6/lec13/objectives_L13.html">Lecture 13: Elementary Excitations and the Bogoliubov-Valatin Transformation </option>
      
      <option value="115101012/modules/Module-6/lec14/objectives_L14.html">Lecture 14: Bogoliubov-Valatin Canonical Transformation and the Model Hamiltonian</option>
      
      <option value="115101012/modules/Module-6/lec15/objectives_L15.html">Lecture 15: Superconducting Energy Gap and Its Temperature Dependence</option>
      
      <option value="115101012/modules/Module-6/lec16/objectives_L16.html">Lecture 16: Superconducting Transition Temperature</option>
      
      <option value="115101012/modules/Module-6/lec17/objectives_L17.html">Lecture 17: Heat Capacity and other Thermodynamic Properties </option>
      
      <option value="115101012/modules/Module-7/lec1/objectives_L1.html">Lecture 1: Quasiparticle Tunneling: Energy-Level Diagrams</option>
      
      <option value="115101012/modules/Module-7/lec2/objectives_L2.html">Lecture 2: Quasiparticle Tunneling: Microscopic Theory</option>
      
      <option value="115101012/modules/Module-7/lec2/objectives_L2.html">Lecture 3: Pair Tunneling and the Time-Dependent Perturbation Theory</option>
      
      <option value="115101012/modules/Module-7/lec4/objectives_L4.html">Lecture 4: Pair Tunneling, Modified Bogoliubov-Valatin Transformation and the Josephson Effects</option>
      
      <option value="115101012/modules/Module-8/lec1/objectives_L1.html">Lecture 1 : Equivalent circuit for Josephson junction and analysis</option>
      
      <option value="115101012/modules/Module-8/lec2/objectives_L2.html">Lecture 2 : Josephson junctions in a field, SQUIDs and other application</option>
      
      <option value="115101012/modules/Module-9/lec1/objectives_L1.html">Lecture 1: Experimental probes of superconductivity-1</option>
      
      <option value="115101012/modules/Module-9/lec2/objectives_L2.html">Lecture 2 : Experimental probes of superconductivity-2</option>
      
      <option value="115101012/modules/Module-10/lec1/objectives_L1.html">Lecture 1 : Unconventional superconductors</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115102014</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Electronics</strong></td>
	<td><strong>Prof. D.C. Dube</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    
    <select name="type1" id="type1" onchange="this.form.submit();">
       <option  value="#">Select </option>
      <option value="115102014/mod01lec01.mp4">p-n diode</option>
      
      <option value="115102014/mod01lec02.mp4">p-n Junction/Diode(Contd.)</option>
      
      <option value="115102014/mod01lec03.mp4">p-n diode (contd.)</option>
      
      <option value="115102014/mod01lec04.mp4">Diode Application</option>
      
      <option value="115102014/mod02lec05.mp4">Transistors</option>
      
      <option value="115102014/mod02lec06.mp4">Reverse - bias (Contd.)</option>
      
      <option value="115102014/mod02lec07.mp4">Transistors (Continue)</option>
      
      <option value="115102014/mod02lec08.mp4">Transistors (Contd.)</option>
      
      <option value="115102014/mod02lec09.mp4">Biasing a transistor unit 2 contd.</option>
      
      <option value="115102014/mod02lec10.mp4">Biasing of  transistor </option>
      
      <option value="115102014/mod03lec11.mp4">H and R Parameters and their use in small amplifiers</option>
      
      <option value="115102014/mod03lec12.mp4">Small signal amplifiers analysis using H - Parameters</option>
      
      <option value="115102014/mod03lec13.mp4">Small signal amplifiers analysis using R - Parameters</option>
      
      <option value="115102014/mod03lec14.mp4">R - analysis (Contd.)</option>
      
      <option value="115102014/mod03lec15.mp4">Common Collector(CC) amplifier (Contd.)</option>
      
      <option value="115102014/mod04lec16.mp4">Feedback in amplifiers, Feedback Configurations and multi stage amplifiers</option>
      
      <option value="115102014/mod04lec17.mp4">Reduction in non-linear distortion</option>
      
      <option value="115102014/mod04lec18.mp4">Input/Output impedances in negative feedback amplifiers (Contd.)</option>
      
      <option value="115102014/mod04lec19.mp4">RC Coupled Amplifiers</option>
      
      <option value="115102014/mod04lec20.mp4">RC Coupled Amplifiers (Contd.)</option>
      
      <option value="115102014/mod04lec21.mp4">RC Coupled Amplifiers (Contd..)</option>
      
      <option value="115102014/mod05lec22.mp4">FETs ans MOSFET</option>
      
      <option value="115102014/mod05lec23.mp4">FETs ans MOSFET (Contd.)</option>
      
      <option value="115102014/mod05lec24.mp4">Depletion - MOSFET</option>
      
      <option value="115102014/mod05lec25.mp4">Drain and transfer characteristic of E - MOSFET</option>
      
      <option value="115102014/mod05lec26.mp4">Self Bias (Contd.) Design Procedure</option>
      
      <option value="115102014/mod05lec27.mp4">FET/MOSFET Amplifiers and their Analysis</option>
      
      <option value="115102014/mod05lec28.mp4">CMOS Inverter</option>
      
      <option value="115102014/mod05lec29.mp4">CMOS Inverter (contd.)</option>
      
      <option value="115102014/mod06lec30.mp4">Power Amplifier</option>
      
      <option value="115102014/mod06lec31.mp4">Power Amplifier (contd.)</option>
      
      <option value="115102014/mod06lec32.mp4">Power Amplifier (contd..)</option>
      
      <option value="115102014/mod06lec33.mp4">Power Amplifier (contd...)</option>
      
      <option value="115102014/mod07lec34.mp4">Differential and Operational Amplifier</option>
      
      <option value="115102014/mod07lec35.mp4">Differential and Operational Amplifier (Contd.) dc and ac analysis</option>
      
      <option value="115102014/mod07lec36.mp4">Differential and Operational Amplifier  dc and ac analysis (Contd.)</option>
      
      <option value="115102014/mod07lec37.mp4">Operational Amplifiers</option>
      
      <option value="115102014/mod07lec38.mp4">Operational amplifiers in open loop (Contd.)</option>
      
      <option value="115102014/mod07lec39.mp4">Summing Amplifiers</option>
      
      <option value="115102014/mod07lec40.mp4">Frequency response of an intigration</option>
      
      <option value="115102014/mod07lec41.mp4">Filters</option>
      
      <option value="115102014/mod07lec42.mp4">Specification of OP Amplifiers </option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115102017</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Nuclear Science & Engineering</strong></td>
	<td><strong>Dr. Santanu Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115102017/module 1/contents and lecture plans.html">Content and Lecture Plan[module 1]</option>
      
      <option value="115102017/module 1/lec1.html">Basic Properties of Nucleus [Lecture 1]</option>
      
      <option value="115102017/module 1/lec2.html">Shape of the Nucleus: Electric Moments and magnetic Moment [Lecture 2]</option>
      
      <option value="115102017/module 1/lec3.html">Binding Energy of a Nucleus [Lecture 3]</option>
      
      <option value="115102017/module 1/lec4.html">Examples with hints for lectures 1 to 3 [Lecture 4]</option>
      
      <option value="115102017/module 1/lec5.html">Liquid Drop Model: Nuclear Stability [Lecture 5]</option>
      
      <option value="115102017/module 1/lec6.html">Liquid Drop Model: Nuclear Stability (Contd.) [Lecture 6]</option>
      
      <option value="115102017/module 1/lec7.html">Magic Nuclei and Nuclear Shell Model [Lecture 7]</option>
      
      <option value="115102017/module 1/lec8.html">Examples with hints for lectures 5 to 7 [Lecture 8]</option>
      
      <option value="115102017/module 1/bibliography.html">Bibliography [module 1]</option>
      
      <option value="115102017/module 2/contents and lecture plans.html">Content and Lecture Plan[module 2]</option>
      
      <option value="115102017/module 2/lec1.html">Generation of energetic particles in accelerators [Lecture 1]</option>
      
      <option value="115102017/module 2/lec3.html">Interaction of photons with matter [Lecture 3]</option>
      
      <option value="115102017/module 2/lec4.html">Gas Detectors [Lecture 4]</option>
      
      <option value="115102017/module 2/lec5.html">Gas Detectors (Contd.)[Lecture 5]</option>
      
      <option value="115102017/module 2/lec6.html">Solid State Detector [Lecture 6]</option>
      
      <option value="115102017/module 2/lec7.html">Scintillation Detectors [Lecture 7]</option>
      
      <option value="115102017/module 2/lec8.html">Nuclear Electronics for Signal processing [Lecture 8]</option>
      
      <option value="115102017/module 2/bibliography.html">Bibliography [module 2]</option>
      
      <option value="115102017/module 3/contents and lecture plans.html">Contents and Lecture plans [module3]</option>
      
      <option value="115102017/module 3/lec1.html">Fundamentals of Nuclear Reactions, Reaction energy and Model [Lecture 1]</option>
      
      <option value="115102017/module 3/lec2.html">Reaction Cross section and Examples of various Nuclear Reactions [Lecture 2]</option>
      
      <option value="115102017/module 3/lec3.html">Fission Reaction Mechanism, Energy in Fission Reaction and Basic Formulation on Fission Reactor [Lecture 3]</option>
      
      <option value="115102017/module 3/lec4.html">Basic Design Aspects of a Fission Reactor [Lecture 4]</option>
      
      <option value="115102017/module 3/lec5.html">Basic Design Aspects of a Fission Reactor (Contd.)[Lecture 5]</option>
      
      <option value="115102017/module 3/lec6.html">Basic Fusion Process, Stellar Evolution and Fusion Reaction Rate [Lecture 6]</option>
      
      <option value="115102017/module 3/lec7.html">Fusion Reactions in the Plasma and Reactor Design Aspects [Lecture 7]</option>
      
      <option value="115102017/module 3/lec8.html">Various issues related to Tokamak and the present status [Lecture 8]</option>
      
      <option value="115102017/module 3/bibliography.html">Bibliography [module 3]</option>
      
      <option value="115102017/module 4/contents and lecture plans.html">Contents and Lecture plans [module4]</option>
      
      <option value="115102017/module 4/lec1.html">Basic Formulation of Radioactivity [Lecture 1]</option>
      
      <option value="115102017/module 4/lec2.html">Theory of Successive Transformation and Radioactive Equilibrium [Lecture 2]</option>
      
      <option value="115102017/module 4/lec3.html">Basic Formulation on Radioactive Dating process [Lecture 3]</option>
      
      <option value="115102017/module 4/lec4.html">Accelerator Mass Spectrometry [Lecture 4]</option>
      
      <option value="115102017/module 4/lec5.html">Radiation Dosimetry and Interaction of Nuclear Radiation with Biological Specimen [Lecture 5]</option>
      
      <option value="115102017/module 4/lec6.html">Radioisotopes and Their Use in Medical Diagnostics [Lecture 6]</option>
      
      <option value="115102017/module 4/lec7.html">Nuclear Radiation Based Therapy [Lecture 7]</option>
      
      <option value="115102017/module 4/lec8.html">Practical Examples Related To Above Topics [Lecture 8]</option>
      
      <option value="115102017/module 4/bibliography.html">Bibliography [module 4]</option>
      
      <option value="115102017/module 2/lec2.html">Interaction of energetic charged particles with matter [Lecture 2]</option>
      
      <option value="115102017/module 5/contents and lecture plans.html">Contents and Lecture plans [module5]</option>
      
      <option value="115102017/module 5/lec1.html">Neutron Activation Analysis (NAA) [Lecture 1]</option>
      
      <option value="115102017/module 5/lec2.html">Neutron Activation Analysis (NAA)(Continued) [Lecture 2]</option>
      
      <option value="115102017/module 5/lec3.html">Rutherford Back Scattering Spectrometry (RBS) [Lecture 3]</option>
      
      <option value="115102017/module 5/lec4.html">Rutherford Back Scattering Spectrometry (RBS) (Continued) [Lecture 4]</option>
      
      <option value="115102017/module 5/lec5.html">Nuclear reaction Analysis (NRA) [Lecture 5]</option>
      
      <option value="115102017/module 5/lec6.html">Nuclear reaction Analysis (NRA) (Continued) [Lecture 6]</option>
      
      <option value="115102017/module 5/lec7.html">Particle induced X-ray emission (PIXE)[Lecture 7]</option>
      
      <option value="115102017/module 5/lec8.html">Particle induced X-ray emission (PIXE) (Continued) [Lecture 8]</option>
      
      <option value="115102017/module 5/bibliography.html">Bibliography [module 5]</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115102020</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Plasma Physics: Fundamentals and Applications</strong></td>
	<td><strong>Prof. V.K. Tripathi,Prof. Vijayshri</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
       <option  value="#"> Select </option>
      <option value="115102020/mod01lec01.mp4">Introduction to Plasmas</option>
      
      <option value="115102020/mod01lec02.mp4">Plasma Response to fields:  Fluid Equations</option>
      
      <option value="115102020/mod01lec03.mp4">DC Conductivity and Negative Differential Conductivity</option>
      
      <option value="115102020/mod01lec04.mp4">RF Conductivity of Plasma</option>
      
      <option value="115102020/mod01lec05.mp4">RF Conductivity of Plasma Contd</option>
      
      <option value="115102020/mod01lec06.mp4">Hall Effect, Cowling Effect and Cyclotron Resonance Heating</option>
      
      <option value="115102020/mod01lec07.mp4">Electromagnetic Wave Propagation in Plasma</option>
      
      <option value="115102020/mod01lec08.mp4">Electromagnetic Wave Propagation in Plasma Contd</option>
      
      <option value="115102020/mod01lec09.mp4">Electromagnetic Wave Propagation Inhomogeneous Plasma  </option>
      
      <option value="115102020/mod01lec10.mp4">Electrostatic Waves in Plasmas</option>
      
      <option value="115102020/mod01lec11.mp4">Energy Flow with an Electrostatic Wave</option>
      
      <option value="115102020/mod01lec12.mp4">Two Stream Instability</option>
      
      <option value="115102020/mod01lec13.mp4">Relativistic electron Beam- Plasma Interaction</option>
      
      <option value="115102020/mod01lec14.mp4">Cerenkov Free Electron Laser</option>
      
      <option value="115102020/mod01lec15.mp4">Free Electron Laser</option>
      
      <option value="115102020/mod01lec16.mp4">Free Electron Laser: Energy gain</option>
      
      <option value="115102020/mod01lec17.mp4">Free Electron Laser: Wiggler Tapering and Compton Regime Operation</option>
      
      <option value="115102020/mod01lec18.mp4">Weibel Instability</option>
      
      <option value="115102020/mod01lec19.mp4">Rayleigh Taylor Instability</option>
      
      <option value="115102020/mod01lec20.mp4">Single Particle Motion in Static Magnetic and Electric Fields</option>
      
      <option value="115102020/mod01lec21.mp4">Plasma Physics Grad B and Curvature Drifts</option>
      
      <option value="115102020/mod01lec22.mp4">Adiabatic Invariance of Magnetic Moment and Mirror confinement</option>
      
      <option value="115102020/mod01lec23.mp4">Mirror machine</option>
      
      <option value="115102020/mod01lec24.mp4">Thermonuclear fusion</option>
      
      <option value="115102020/mod01lec25.mp4">Tokamak </option>
      
      <option value="115102020/mod01lec26.mp4">Tokamak operation</option>
      
      <option value="115102020/mod01lec27.mp4">Auxiliary heating and current drive in tokamak</option>
      
      <option value="115102020/mod01lec28.mp4">Electromagnetic waves propagation in magnetise plasma</option>
      
      <option value="115102020/mod01lec29.mp4">Longitudinal electromagnetic wave propagation cutoffs, resonances and faraday rotation</option>
      
      <option value="115102020/mod01lec30.mp4">Electromagnetic propagation at oblique angles to magnetic field in a plasma</option>
      
      <option value="115102020/mod01lec31.mp4">Low frequency EM waves magnetized plasma</option>
      
      <option value="115102020/mod01lec32.mp4">Electrostatic waves in magnetized plasma</option>
      
      <option value="115102020/mod01lec33.mp4">Ion acoustic, ion cyclotron and magneto sonic waves in magnetized plasma</option>
      
      <option value="115102020/mod01lec34.mp4">VIasov theory of plasma waves</option>
      
      <option value="115102020/mod01lec35.mp4">Landau damping and growth of waves</option>
      
      <option value="115102020/mod01lec36.mp4">Landau damping and growth of waves Contd</option>
      
      <option value="115102020/mod01lec37.mp4">Anomalous resistivity in a plasma</option>
      
      <option value="115102020/mod01lec38.mp4">Diffusion in plasma</option>
      
      <option value="115102020/mod01lec39.mp4">Diffusion in magnetized plasma</option>
      
      <option value="115102020/mod01lec40.mp4">Surface plasma wave</option>
      
      <option value="115102020/mod01lec41.mp4">Laser interaction with plasmas embedded with clusters</option>
      
      <option value="115102020/mod01lec42.mp4">Current trends and epilogue</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115102022</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Quantum Electronics</strong></td>
	<td><strong>Prof. K. Thyagarajan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="115102022/mod01lec01.mp4"> Introduction</option>
      
      <option  value="115102022/mod01lec02.mp4">Anisotropic Media</option>
      
      <option  value="115102022/mod01lec03.mp4">Anisotropic Media (Contd.)</option>
      
      <option  value="115102022/mod01lec04.mp4">Anisotropic Media (Contd..)</option>
      
      <option  value="115102022/mod01lec05.mp4">Nonlinear optical effects and nonlinear polarization</option>
      
      <option  value="115102022/mod01lec06.mp4">Non - Linear Optics (Contd.)</option>
      
      <option  value="115102022/mod01lec07.mp4">Non - Linear Optics (Contd..)</option>
      
      <option  value="115102022/mod01lec08.mp4">Non - Linear Optics (Contd...)</option>
      
      <option  value="115102022/mod01lec09.mp4">Non - Linear Optics (Contd....)</option>
      
      <option  value="115102022/mod01lec10.mp4">Non - Linear Optics - Quasi Phase Matching</option>
      
      <option  value="115102022/mod01lec11.mp4">Non - Linear Optics</option>
      
      <option  value="115102022/mod03lec12.mp4">Non Linear Optics contd</option>
      
      <option  value="115102022/mod03lec13.mp4">Non Linear Optics contd.</option>
      
      <option  value="115102022/mod03lec14.mp4">Non Linear Optics contd..</option>
      
      <option  value="115102022/mod03lec15.mp4">Non Linear Optics contd...</option>
      
      <option  value="115102022/mod03lec16.mp4">Non Linear Optics contd....</option>
      
      <option  value="115102022/mod03lec17.mp4">Non Linear Optics contd.....</option>
      
      <option  value="115102022/mod03lec18.mp4">Non Linear Optics contd......</option>
      
      <option  value="115102022/mod03lec19.mp4">Non Linear Optics contd.......</option>
      
      <option  value="115102022/mod04lec20.mp4">Third Order Non - Linear Effects </option>
      
      <option  value="115102022/mod04lec21.mp4">Third Order Non - Linear Effects(Contd.) </option>
      
      <option  value="115102022/mod04lec22.mp4">Third Order Non - Linear Effects(Contd..)</option>
      
      <option  value="115102022/mod04lec23.mp4">Third Order Non - Linear Effects(Contd...)</option>
      
      <option  value="115102022/mod05lec24.mp4">Review of Quantum Mechanics</option>
      
      <option  value="115102022/mod05lec25.mp4">Review of Quantum Mechanics (Contd.)</option>
      
      <option  value="115102022/mod05lec26.mp4">Review of Quantum Mechanics (Contd..)</option>
      
      <option  value="115102022/mod05lec27.mp4">Quantization of EM Field</option>
      
      <option  value="115102022/mod05lec28.mp4">Quantization of EM Field (Contd.)</option>
      
      <option  value="115102022/mod05lec29.mp4">Quantization of EM Field (Contd..)</option>
      
      <option  value="115102022/mod05lec30.mp4">Quantum States of EM Field </option>
      
      <option  value="115102022/mod05lec31.mp4">Quantum States of EM Field (Contd.) </option>
      
      <option  value="115102022/mod05lec32.mp4">Quantization of EM Field (Contd...)</option>
      
      <option  value="115102022/mod05lec33.mp4">Quantization of EM Field (Contd....)</option>
      
      <option  value="115102022/mod05lec34.mp4">Quantization of EM Field (Contd.....)</option>
      
      <option  value="115102022/mod05lec35.mp4">Quantization of EM Field (Contd......)</option>
      
      <option  value="115102022/mod05lec36.mp4">Quantization of EM Field (Contd.......)</option>
      
      <option  value="115102022/mod05lec37.mp4">Beam Splitter </option>
      
      <option  value="115102022/mod05lec38.mp4">Beam Splitter (Contd..)</option>
      
      <option  value="115102022/mod05lec39.mp4">Beam Splitter and Balanced Homodyning </option>
      
      <option  value="115102022/mod05lec40.mp4">Balanced Homodyning </option>
      
      <option  value="115102022/mod05lec41.mp4">Quantum Picture of Parametric Down Conversion </option>
      
      <option  value="115102022/mod05lec42.mp4"> Questions</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115102023</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Quantum Mechanics and Applications</strong></td>
	<td><strong>Prof. Ajoy Ghatak</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115102023/mod01lec01.mp4">Basic Quantum Mechanics I: Wave Particle Duality</option>
      
      <option value="115102023/mod01lec02.mp4">Basic Quantum Mechanics II: The Schrodinger Equation and The Dirac Delta Function</option>
      
      <option value="115102023/mod01lec03.mp4">Dirac Delta Function &amp; Fourier Transforms</option>
      
      <option value="115102023/mod02lec04.mp4">The Free Particle </option>
      
      <option value="115102023/mod02lec05.mp4">Physical Interpretation of The Wave Function</option>
      
      <option value="115102023/mod02lec06.mp4">Expectation Values &amp; The Uncertainty Principle</option>
      
      <option value="115102023/mod02lec07.mp4">The Free Particle (Contd.)</option>
      
      <option value="115102023/mod02lec08.mp4">Interference Experiment &amp; The Particle in a Box Problem </option>
      
      <option value="115102023/mod02lec09.mp4">On Eigen Values and Eigen Functions of the 1 Dimensional Schrodinger Equation </option>
      
      <option value="115102023/mod03lec10.mp4">Linear Harmonic Oscillator </option>
      
      <option value="115102023/mod03lec11.mp4">Linear Harmonic Oscillator (Contd1.)</option>
      
      <option value="115102023/mod03lec12.mp4">Linear Harmonic Oscillator (Contd2.)</option>
      
      <option value="115102023/mod03lec13.mp4">Linear Harmonic Oscillator (Contd3.)</option>
      
      <option value="115102023/mod04lec14.mp4">Tunneling through a Barrier </option>
      
      <option value="115102023/mod04lec15.mp4">The 1-Dimensional Potential Wall &amp; Particle in a Box </option>
      
      <option value="115102023/mod04lec16.mp4">Particle in a Box and Density of States </option>
      
      <option value="115102023/mod05lec17.mp4">The Angular Momentum Problem</option>
      
      <option value="115102023/mod05lec18.mp4">The Angular Momentum Problem (Contd.)</option>
      
      <option value="115102023/mod06lec19.mp4">The Hydrogen Atom Problem</option>
      
      <option value="115102023/mod06lec20.mp4">The Two Body Problem</option>
      
      <option value="115102023/mod06lec21.mp4">TheTwo Body Problem: The Hydrogen atom, The Deutron and The Diatomic Molecule</option>
      
      <option value="115102023/mod06lec22.mp4">Two Body Problem:  The Diatomic molecule (contd.) and the 3 Dimensional Oscillator</option>
      
      <option value="115102023/mod06lec23.mp4">3d Oscillator &amp; Dirac's Bra and Ket Algebra</option>
      
      <option value="115102023/mod07lec24.mp4">Dirac�s Bra and Ket Algebra </option>
      
      <option value="115102023/mod07lec25.mp4">Dirac�s Bra and Ket Algebra : The Linear Harmonic Oscillator </option>
      
      <option value="115102023/mod07lec26.mp4">The Linear Harmonic Oscillator using Bra and Ket Algebra (contd.)</option>
      
      <option value="115102023/mod07lec27.mp4">The Linear Harmonic Oscillator: Coherent State and Relationship with the Classical Oscillator</option>
      
      <option value="115102023/mod07lec28.mp4">Coherent State and Relationship with the Classical Oscillator</option>
      
      <option value="115102023/mod08lec29.mp4">Angular Momentum Problem using Operator Algebra</option>
      
      <option value="115102023/mod08lec30.mp4">Angular Momentum Problem (contd.)</option>
      
      <option value="115102023/mod08lec31.mp4">Pauli Spin Matrices and The Stern Gerlach Experiment </option>
      
      <option value="115102023/mod08lec32.mp4">The Larmor Precession and NMR Spherical Harmonics using Operator Algebra</option>
      
      <option value="115102023/mod08lec33.mp4">Addition of Angular Momentum: Clebsch Gordon Coefficient </option>
      
      <option value="115102023/mod08lec34.mp4">Clebsch Gordon Coefficients</option>
      
      <option value="115102023/mod09lec35.mp4">The JWKB Approximation</option>
      
      <option value="115102023/mod09lec36.mp4">The JWKB Approximation: Use of Connection Formulae to solve Eigen value Problems.</option>
      
      <option value="115102023/mod09lec37.mp4">The JWKB Approximation: Use of Connection Formulae to calculate Tunneling Probability. </option>
      
      <option value="115102023/mod09lec38.mp4">The JWKB Approximation: Tunneling Probability Calculations and Applications.</option>
      
      <option value="115102023/mod09lec39.mp4">The JWKB Approximation: Justification of the Connection Formulae </option>
      
      <option value="115102023/mod10lec40.mp4">Time Independent Perturbation Theory </option>
      
      <option value="115102023/mod10lec41.mp4">Time Independent Perturbation Theory (Contd.1)</option>
      
      <option value="115102023/mod10lec42.mp4">Time Independent Perturbation Theory (Contd.2)</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115102025</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Fundamental concepts of semiconductors</strong></td>
	<td><strong>Dr. G. Vijaya Prakash</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115102025/module1/1.html">Introduction</option>
      
      <option value="115102025/module1/2.html">Crystal Structure</option>
      
      <option value="115102025/module1/3.html">Dynamics of electrons in periodic potential</option>
      
      <option value="115102025/module1/4.html">Band gaps in semiconductors</option>
      
      <option value="115102025/module1/5.html">Holes and effective mass concept </option>
      
      <option value="115102025/module2/1.html">Density of states</option>
      
      <option value="115102025/module2/2.html">Extrinsic semiconductors </option>
      
      <option value="115102025/module2/3.html">Degenerate and non-degenerate semiconductors</option>
      
      <option value="115102025/module3/1.html">Scattering Phenomena</option>
      
      <option value="115102025/module3/2.html">Macroscopic Transport</option>
      
      <option value="115102025/module3/3.html">Carrier transport</option>
      
      <option value="115102025/module4/1.html">Optical processes in semiconductors(Introduction)</option>
      
      <option value="115102025/module4/2.html">Optical absorption transitions in semiconductors ( e-h pair production):</option>
      
      <option value="115102025/module4/3.html">Radiative and nonradiative recombination process</option>
      
      <option value="115102025/module4/4.html">Overall carrier transport process</option>
      
      <option value="115102025/module5/1.html">Semiconductor as a device (Introduction)</option>
      
      <option value="115102025/module5/2.html">Fabrication of devices</option>
      
      <option value="115102025/module5/3.html">Principles of p-n junctions (homo-junctions):</option>
      
      <option value="115102025/module5/4.html">Diodes</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115102026</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Semiconductor Optoelectronics</strong></td>
	<td><strong>Prof. M. R. Shenoy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    <select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="115102026/mod01lec01.mp4">Context and Scope of the Course</option>
      
      <option  value="115102026/mod01lec02.mp4">Energy Bands in Solids</option>
      
      <option  value="115102026/mod01lec03.mp4">E-K Diagram</option>
      
      <option  value="115102026/mod01lec04.mp4">The Density of States</option>
      
      <option  value="115102026/mod01lec05.mp4">The Density of States (contd..)</option>
      
      <option  value="115102026/mod01lec06.mp4">The Density of states in a Quantum well Structure</option>
      
      <option  value="115102026/mod01lec07.mp4">Occupation Probability and Carrier Concentration</option>
      
      <option  value="115102026/mod01lec08.mp4">Carrier Concentration and Fermi Level</option>
      
      <option  value="115102026/mod01lec09.mp4">Quasi Fermi Levels</option>
      
      <option  value="115102026/mod01lec10.mp4">Semiconductor Materials</option>
      
      <option  value="115102026/mod01lec11.mp4">Semiconductor Hetrostructures-Lattice-Matched Layers</option>
      
      <option  value="115102026/mod01lec12.mp4">Strained -Layer Epitaxy and Quantum Well Structures</option>
      
      <option  value="115102026/mod01lec13.mp4">Bandgap Engineering</option>
      
      <option  value="115102026/mod01lec14.mp4">Hetrostructure p-n junctions</option>
      
      <option  value="115102026/mod01lec15.mp4">Schottky Junction and Ohmic Contacts</option>
      
      <option  value="115102026/mod01lec16.mp4">Fabrication of Heterostructure Devices</option>
      
      <option  value="115102026/mod01lec17.mp4">Interaction od Photons with Electrons and Holes in a Semiconductor</option>
      
      <option  value="115102026/mod01lec18.mp4">Optical Joint Density of States</option>
      
      <option  value="115102026/mod01lec19.mp4">Rates of Emission and Absorption</option>
      
      <option  value="115102026/mod01lec20.mp4">Amplication by Stimulated Emission</option>
      
      <option  value="115102026/mod01lec21.mp4">The Semiconductor (Laser) Amplifier</option>
      
      <option  value="115102026/mod01lec22.mp4">Absorption Spectrum of Semiconductor</option>
      
      <option  value="115102026/mod01lec23.mp4">Gain and Absorption Spectrum of Quantum Well Structures</option>
      
      <option  value="115102026/mod01lec24.mp4">Electro-absorption Modulator</option>
      
      <option  value="115102026/mod01lec25.mp4">Electro-absorption Modulator - II Device Configuration</option>
      
      <option  value="115102026/mod01lec26.mp4">Mid-Term Revision Question and Discussion</option>
      
      <option  value="115102026/mod01lec27.mp4">Part - III Semiconductor Light Sources</option>
      
      <option  value="115102026/mod01lec28.mp4">Light Emitting Diode-I Device Structure and Parameters</option>
      
      <option  value="115102026/mod01lec29.mp4">Light Emitting Diode-II Device Chracteristics</option>
      
      <option  value="115102026/mod01lec30.mp4">Light Emitting Diode-III Output Characteristics</option>
      
      <option  value="115102026/mod01lec31.mp4">Light Emitting Diode-IV Modulation Bandwidth</option>
      
      <option  value="115102026/mod01lec32.mp4">Light Emitting Diode-V materials and Applications </option>
      
      <option  value="115102026/mod01lec33.mp4">Laser Basics</option>
      
      <option  value="115102026/mod01lec34.mp4">Semiconductor Laser - I Device Structure</option>
      
      <option  value="115102026/mod01lec35.mp4">Semiconductor Laser - II Output Characteristics</option>
      
      <option  value="115102026/mod01lec36.mp4">Semiconductor Laser - III Single Frequency Lasers</option>
      
      <option  value="115102026/mod01lec37.mp4">Vertical Cavity Surface Emitting Laser (VCSEL)</option>
      
      <option  value="115102026/mod01lec38.mp4">Quantum Well Laser</option>
      
      <option  value="115102026/mod01lec39.mp4">Practical Laser Diodes and Handling</option>
      
      <option  value="115102026/mod01lec40.mp4">General Characteristics of Photodetectors</option>
      
      <option  value="115102026/mod01lec41.mp4">Responsivity and Impulse Response</option>
      
      <option  value="115102026/mod01lec42.mp4">Photoconductors</option>
      
      <option  value="115102026/mod01lec43.mp4">Semiconductor Photo-Diodes</option>
      
      <option  value="115102026/mod01lec44.mp4">Semiconductor Photo-Diodes -II : APD</option>
      
      <option  value="115102026/mod01lec45.mp4">Other Photodectors</option>
      
      <option  value="115102026/mod01lec46.mp4">Photonic Integrated Circuits</option>
          </select>
    
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115103036</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Mathematical Physics - 1</strong></td>
	<td><strong>Dr. Saurabh Basu </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115103036/module1/index.html">Definition                                                    </option>
<option value="115103036/module1/lec2.pdf">Gradient                                                      </option>
<option value="115103036/module1/lec3.pdf">Physical examples of divergence                               </option>
<option value="115103036/module1/lec4.pdf">Curl in Curvilinear Coordinates                               </option>
<option value="115103036/module1/lec5.pdf">Gauss Divergence Theorem                                      </option>
<option value="115103036/module1/lec6.pdf">Stoke's Theorem                                               </option>
<option value="115103036/module2/lec7.pdf">Linear Vector Spaces                                          </option>
<option value="115103036/module2/lec8.pdf">Bases                                                         </option>
<option value="115103036/module2/lec9.pdf">Linear Independence , Change of Basis                         </option>
<option value="115103036/module2/lec10.pdf">Similarity Transformation                                     </option>
<option value="115103036/module2/lec11.pdf">Orthogonality and Completeness                                </option>
<option value="115103036/module2/lec12.pdf">Gram-Schmidt Orthogonalization (GSO)                          </option>
<option value="115103036/module2/lec13.pdf">Hilbert Space                                                 </option>
<option value="115103036/module2/lec14.pdf">Linear Algebra in Quantum Mechanics                           </option>
<option value="115103036/module3/lec15.pdf">Inverse of a Matrix                                           </option>
<option value="115103036/module3/lec16.pdf">Symmetric, Skew Symmetric and Orthogonal Matrices             </option>
<option value="115103036/module3/lec17.pdf">Basis of Eigenvectors                                         </option>
<option value="115103036/module3/lec18.pdf">Matrix Eigenvalue                                             </option>
<option value="115103036/module3/lec19.pdf">Eigenvalues Equation                                          </option>
<option value="115103036/module3/lec20.pdf">Tutorials                                                     </option>
<option value="115103036/module4/lec21.pdf">Dirac Delta Function                                          </option>
<option value="115103036/module4/lec22.pdf">Different representations of Delta Functions                  </option>
<option value="115103036/module4/lec23.pdf">Definitions and different representations of Delta Functions  </option>
<option value="115103036/module5/lec24.pdf">Introduction                                                  </option>
<option value="115103036/module5/lec25.pdf">Transformation Properties of Vectors                          </option>
<option value="115103036/module5/lec26.pdf">Covariant and Contravariant Vectors                           </option>
<option value="115103036/module5/lec27.pdf">Tensors with multiple indices � cross product                 </option>
<option value="115103036/module5/lec28.pdf">Algelraic Properties of Tensors                               </option>
<option value="115103036/module5/lec29.pdf">Metric Tensor                                                 </option>
<option value="115103036/module5/lec30.pdf">Dynamics of Particle :Usage of Tensors                        </option>
<option value="115103036/module6/lec31.pdf">Complex Numbers                                               </option>
<option value="115103036/module6/lec32.pdf">Algebraic Properties Complex Numbers                          </option>
<option value="115103036/module6/lec33.pdf">Cauchy-Riemann Conditions                                     </option>
<option value="115103036/module6/lec34.pdf">Analyticity                                                   </option>
<option value="115103036/module6/lec35.pdf">Branch points and Branch cuts                                 </option>
<option value="115103036/module6/lec36.pdf">Cauchy's Integral Formula                                     </option>
<option value="115103036/module6/lec37.pdf">Residue Theorem                                               </option>
<option value="115103036/module6/lec38.pdf">Jordan's Lemma                                                </option>
<option value="115103036/module6/lec39.pdf">Taylor and Laurent Series                                     </option>
<option value="115103036/module6/lec40.pdf">Summary                                                       </option>
<option value="115103036/module6/lec41.pdf">Conformal Mapping                                             </option>
<option value="115103036/module6/lec42.pdf">Jacobian of a transformation                                  </option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115103028</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Advanced Statistical Mechanics</strong></td>
	<td><strong>Dr. S.B. Santra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115103028/module1/index.html">Specification of macrostates and microstates</option>
      
      <option value="115103028/module1/lec2/1.html">Statistical ensembles </option>
      
      <option value="115103028/module1/lec3/1.html">Thermodynamics in different ensembles </option>
      
      <option value="115103028/module1/lec4/1.html">Nature of Particles and Statistics </option>
      
      <option value="115103028/module2/lec1/1.html">Thermodynamic Stability, positive response function and convexity of free energy</option>
      
      <option value="115103028/module2/lec2/1.html">Continuous Phase transition or Critical phenomena </option>
      
      <option value="115103028/module2/lec3/1.html">Morphology, fluctuation and correlation</option>
      
      <option value="115103028/module2/lec4/1.html">Correlation in terms of fluctuation and response </option>
      
      <option value="115103028/module3/lec1/1.html">Critical exponents</option>
      
      <option value="115103028/module3/lec2/1.html">Values of Critical exponents and their characteristics </option>
      
      <option value="115103028/module3/lec3/1.html">How to proceed?</option>
      
      <option value="115103028/module4/lec1/1.html">Spin-1/2 Ising Model</option>
      
      <option value="115103028/module4/lec2/1.html">Two dimensional Ising Model </option>
      
      <option value="115103028/module4/lec3/1.html">Spin-1 Ising Model </option>
      
      <option value="115103028/module4/lec4/1.html">Models and universality </option>
      
      <option value="115103028/module5/lec1/1.html">Mean field theory for Fluids</option>
      
      <option value="115103028/module5/lec2/1.html">Determination of critical point and the critical exponents </option>
      
      <option value="115103028/module5/lec3/1.html">Mean field theory for magnetic systems</option>
      
      <option value="115103028/module5/lec4/1.html">Solution of Mean field equation of state </option>
      
      <option value="115103028/module5/lec5/1.html">Determination of Mean field critical exponents </option>
      
      <option value="115103028/module5/lec6/1.html">Critical exponents of correlation length and correlation function </option>
      
      <option value="115103028/module5/lec7/1.html">Bethe approximation</option>
      
      <option value="115103028/module5/lec8/1.html">Bethe approximation for Ising model on 2-dimensional square lattice</option>
      
      <option value="115103028/module5/lec9/1.html">Landau theory of phase transition</option>
      
      <option value="115103028/module5/lec10/1.html">Critical behavior with Landau potential </option>
      
      <option value="115103028/module6/lec1/1.html">The methodology </option>
      
      <option value="115103028/module6/lec2/1.html">Eigenvalues and eigenvectors of T </option>
      
      <option value="115103028/module6/lec3/1.html">Isothermal susceptibility </option>
      
      <option value="115103028/module6/lec4/1.html">Example:1 </option>
      
      <option value="115103028/module6/lec5/1.html">Example:2 </option>
      
      <option value="115103028/module7/lec1/1.html">High Temperature series expansion </option>
      
      <option value="115103028/module7/lec2/1.html">Two-dimensional Ising Model</option>
      
      <option value="115103028/module7/lec3/1.html">Duality transformation and Determination of Tc</option>
      
      <option value="115103028/module7/lec4/1.html">Extrapolation methods of a series</option>
      
      <option value="115103028/module8/lec1/1.html">Monte Carlo Technique for Physical Systems </option>
      
      <option value="115103028/module8/lec2/1.html">Markov chain </option>
      
      <option value="115103028/module8/lec3/1.html">MC simulation of Ising Model </option>
      
      <option value="115103028/module8/lec4/1.html">Measurements</option>
      
      <option value="115103028/module9/lec1/1.html">Homogeneous Function</option>
      
      <option value="115103028/module9/lec2/1.html">Scaling hypothesis and Free energy function  </option>
      
      <option value="115103028/module9/lec3/1.html">Renormalization Group (RG) </option>
      
      <option value="115103028/module9/lec4/1.html">RG Operation </option>
      
      <option value="115103028/module9/lec5/1.html">Free Energy as generalized homogeneous function  </option>
      
      <option value="115103028/module9/lec6/1.html">Determination of critical exponents </option>
      
      <option value="115103028/module9/lec7/1.html">Application of RG to 1-d spin 1/2 Ising Model </option>
      
      <option value="115103028/module9/lec8/1.html">Determination of fixed point </option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115103038</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Physics of Magnetic Recording and Recording Media</strong></td>
	<td><strong>Dr. A. Perumal,Prof. A. Srinivasan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115103038/module1/index.html">History and overview of magnetic recording     </option>
      
      <option value="115103038/module1/lec2/1.html">Magnetic Tapes </option>
      
      <option value="115103038/module1/lec3/1.html">Magnetic Anisotropy 1</option>
      
      <option value="115103038/module1/lec4/1.html">Magnetic Anisotropy 2 </option>
      
      <option value="115103038/module1/lec5/1.html">Soft and Hard magnetic materials and Stoner-Wohlfarth theory </option>
      
      <option value="115103038/module2/lec6/1.html">Electronic structure of normal metals </option>
      
      <option value="115103038/module2/lec7/1.html">Ferromagnetic metals and Half metals : I</option>
      
      <option value="115103038/module2/lec8/1.html">Ferromagnetic metals and Half metals  : II</option>
      
      <option value="115103038/module2/lec9/1.html">Spin dependent scattering </option>
      
      <option value="115103038/module2/lec10/1.html">Spin polarization </option>
      
      <option value="115103038/module3/lec11/1.html">The Writing process  </option>
      
      <option value="115103038/module3/lec12/1.html">Nature of the transitions in the writing process: I  </option>
      
      <option value="115103038/module3/lec13/1.html">Nature of the transitions in the writing process  : II </option>
      
      <option value="115103038/module3/lec14/1.html">Model for the writing process </option>
      
      <option value="115103038/module3/lec15/1.html">Effect of imaging from the head and the relaxation of transition parameter  </option>
      
      <option value="115103038/module3/lec16/1.html">Different types of writing process </option>
      
      <option value="115103038/module3/lec17/1.html">The Read back Voltage </option>
      
      <option value="115103038/module3/lec18/1.html">Readback from a single transition </option>
      
      <option value="115103038/module3/lec19/1.html">Pulse width and Current Optimization  </option>
      
      <option value="115103038/module3/lec20/1.html"> Magnetoresistive readback</option>
      
      <option value="115103038/module4/lec21/1.html">Magnetic Circuits and Eddy Current losses </option>
      
      <option value="115103038/module4/lec22/1.html">Selection of Core Materials</option>

      
      <option value="115103038/module4/lec23/1.html">Magnetoresistance Head</option>
      
      <option value="115103038/module4/lec24/1.html">Anisotropic Magnetoresistance Head</option>
      
      <option value="115103038/module4/lec25/1.html">Giant Magnetoresistance Head </option>
      
      <option value="115103038/module4/lec26/1.html">Spin valve based GMR Head </option>
      
      <option value="115103038/module4/lec27/1.html">Tunnelling Magnetoresistance Head </option>
      
      <option value="115103038/module4/lec28/1.html">DISK Drive Assembly, Writing and Reading process </option>
      
      <option value="115103038/module4/lec29/1.html">Reading and Writing process </option>
      
      <option value="115103038/module4/lec30/1.html">Perpendicular Head Fields </option>
      
      <option value="115103038/module5/lec31/1.html"> Magnetic recording media and its requirements</option>
      
      <option value="115103038/module5/lec32/1.html">Particulate and Thin Film Media </option>
      
      <option value="115103038/module5/lec33/1.html">Media Substrates </option>
      
      <option value="115103038/module5/lec34/1.html">Patterned Media </option>
      
      <option value="115103038/module5/lec35/1.html">Properties of magnetic thin films: Part 1 </option>
      
      <option value="115103038/module5/lec36/1.html">Properties of magnetic thin films: Part 2 </option>
      
      <option value="115103038/module5/lec37/1.html">Properties of magnetic thin films: Part 3 </option>
      
      <option value="115103038/module5/lec38/1.html">Properties of magnetic thin films: Part 4</option>
      
      <option value="115103038/module5/lec39/1.html">Future projection on magnetic recording </option>
      
      <option value="115103038/module5/lec40/1.html">Trilemma in magnetic recording </option>
      
      <option value="115103038/module5/lec41/1.html"> Patterning Media </option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115103039</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Spintronics: Physics and Technology</strong></td>
	<td><strong>Dr. A. Perumal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115103039/module1/lec1/index.html">Introduction</option>
      
      <option value="115103039/module2/lec2/1.html">The Early History of Spin</option>
      
      <option value="115103039/module2/lec3/1.html">: Quantum Mechanics of Spin</option>
      
      <option value="115103039/module3/lec4/1.html">Spin - Orbit interaction </option>
      
      <option value="115103039/module3/lec5/1.html">Spin - Orbit interaction in solids</option>
      
      <option value="115103039/module4/lec6/1.html">Spin Relaxation</option>
      
      <option value="115103039/module4/lec7/1.html">Spin relaxation mechanisms I</option>
      
      <option value="115103039/module4/lec8/1.html">Spin relaxation mechanisms II</option>
      
      <option value="115103039/module5/lec9/1.html">Basic Electron Transport </option>
      
      <option value="115103039/module5/lec10/1.html">Basic Electron Transport in thin films</option>
      
      <option value="115103039/module5/lec11/1.html">Conduction in Discontinuous films</option>
      
      <option value="115103039/module5/lec12/1.html">Magneto Resistance</option>
      
      <option value="115103039/module6/lec13/1.html">Spin dependent scattering, Giant Magneto resistance </option>
      
      <option value="115103039/module6/lec14/1.html">Giant Magneto resistance Theory</option>
      
      <option value="115103039/module7/lec15/1.html">Spin dependent tunneling, Tunnel Magnetoresistance </option>
      
      <option value="115103039/module7/lec16/1.html">Effect of various paramaters on Tunnel Magneto resistance</option>
      
      <option value="115103039/module8/lec17/1.html">Introduction to Andreev Reflection</option>
      
      <option value="115103039/module8/lec18/1.html">Spin polarization, Basic theory of Andreev reflections</option>
      
      <option value="115103039/module8/lec19/1.html">Basic theory of Andreev reflections</option>
      
      <option value="115103039/module8/lec20/1.html">Andreev Reflection at ferromagnet and Superconductor </option>
      
      <option value="115103039/module9/lec21/1.html">Spin transfer torques - I </option>
      
      <option value="115103039/module9/lec22/1.html">Spin transfer torques � II</option>
      
      <option value="115103039/module9/lec23/1.html">Spin transfer torques � III</option>
      
      <option value="115103039/module10/lec24/1.html">Magnetic domain walls</option>
      
      <option value="115103039/module10/lec25/1.html">Ratchet effect in domain wall motion</option>
      
      <option value="115103039/module10/lec26/1.html">Domain wall motion</option>
      
      <option value="115103039/module10/lec27/1.html">Domain wall scattering</option>
      
      <option value="115103039/module11/lec28/1.html">Spin injection, Spin accummulation and Spin current - I </option>
      
      <option value="115103039/module11/lec29/1.html">Spin injection, Spin accummulation and Spin current � II</option>
      
      <option value="115103039/module12/lec30/1.html">Silicon based spin electronic devices - I </option>
      
      <option value="115103039/module12/lec31/1.html">Silicon based spin electronic devices � II</option>
      
      <option value="115103039/module13/lec32/1.html">Spin LED: Fundamental and applications - I </option>
      
      <option value="115103039/module13/lec33/1.html">Spin-injection Contacts</option>
      
      <option value="115103039/module14/lec34/1.html">Spin photoelectronic devices - I </option>
      
      <option value="115103039/module14/lec35/1.html">Spin photoelectronic devices � II</option>
      
      <option value="115103039/module15/lec36/1.html">Electron Spin Filtering - I </option>
      
      <option value="115103039/module15/lec37/1.html">Electron Spin Filtering � II</option>
      
      <option value="115103039/module16/lec38/1.html">Deposition and Fabrication Techniques - I</option>
      
      <option value="115103039/module16/lec39/1.html">Deposition and Fabrication Techniques � II</option>
      
      <option value="115103039/module16/lec40/1.html">Deposition and Fabrication Techniques � III</option>
      
      <option value="115103039/module16/lec41/1.html">Deposition and Fabrication Techniques � IV</option>
      
      <option value="115103039/module17/lec42/1.html">Spin-Valve and Spin-Tunneling and Sensor Devices</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115104043</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Nuclear Physics: Fundamentals and Applications</strong></td>
	<td><strong>Prof. H.C. Verma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
     <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115104043/Lecture-01.mp4">Lecture-01-Brief Overview of the course</option>
      
      <option value="115104043/Lecture-02.mp4">Lecture-02-Nuclear Size</option>
      
      <option value="115104043/Lecture-03.mp4">Lecture-03-Nuclear Size Cont..</option>
      
      <option value="115104043/Lecture-04.mp4">Lecture-04-Nuclear Size Cont..</option>
      
      <option value="115104043/Lecture-05.mp4">Lecture-05-Semi empirical Mass Formula</option>
      
      <option value="115104043/Lecture-06.mp4">Lecture-06-Semi empirical Mass Formula Cont..</option>
      
      <option value="115104043/Lecture-07.mp4">Lecture-07-Semi empirical Mass Formula Cont..</option>
      
      <option value="115104043/Lecture-08.mp4">Lecture-08-Semi empirical Mass Formula Cont..</option>
      
      <option value="115104043/Lecture-09.mp4">Lecture-09-Semi empirical Mass Formula Cont..</option>
      
      <option value="115104043/Lecture-10.mp4">Lecture-10-How are Neutron stars bound</option>
      
      <option value="115104043/Lecture-11.mp4">Lecture-11-Deuteron</option>
      
      <option value="115104043/Lecture-12.mp4">Lecture-12-Deuteron Cont..</option>
      
      <option value="115104043/Lecture-13.mp4">Lecture-13-Deuteron Cont..</option>
      
      <option value="115104043/Lecture-14.mp4">Lecture-14-Scattering of nucleons</option>
      
      <option value="115104043/Lecture-15.mp4">Lecture-15-Low energy n-p scattering</option>
      
      <option value="115104043/Lecture-16.mp4">Lecture-16-Theories of nuclear forces</option>
      
      <option value="115104043/Lecture-17.mp4">Lecture-17-Shell model</option>
      
      <option value="115104043/Lecture-18.mp4">Lecture-18-Shell model Contd..</option>
      
      <option value="115104043/Lecture-19.mp4">Lecture-19-Shell model Contd..</option>
      
      <option value="115104043/Lecture-20.mp4">Lecture-20-Shell model Contd..</option>
      
      <option value="115104043/Lecture-21.mp4">Lecture-21-Shell model Contd..</option>
      
      <option value="115104043/Lecture-22.mp4">Lecture-22-Collective models</option>
      
      <option value="115104043/Lecture-23.mp4">Lecture-23-Vibrational and Rotational levels</option>
      
      <option value="115104043/Lecture-24.mp4">Lecture-24-Radioactivity, Alpha Decay</option>
      
      <option value="115104043/Lecture-25.mp4">Lecture-25-Alpha decay Contd..</option>
      
      <option value="115104043/Lecture-26.mp4">Lecture-26-Beta decay</option>
      
      <option value="115104043/Lecture-27.mp4">Lecture-27-Beta decay Contd..</option>
      
      <option value="115104043/Lecture-28.mp4">Lecture-28-Beta decay Contd..</option>
      
      <option value="115104043/Lecture-29.mp4">Lecture-29-Gamma decay</option>
      
      <option value="115104043/Lecture-30.mp4">Lecture-30-Nuclear Reactions</option>
      
      <option value="115104043/Lecture-31.mp4">Lecture-31-Nuclear reaction Contd..</option>
      
      <option value="115104043/Lecture-32.mp4">Lecture-32-Nuclear reaction Contd..</option>
      
      <option value="115104043/Lecture-33.mp4">Lecture-33-Nuclear Fission basics</option>
      
      <option value="115104043/Lecture-34.mp4">Lecture-34-Nuclear fission of uranium</option>
      
      <option value="115104043/Lecture-35.mp4">Lecture-35-Nuclear Fission Reactor</option>
      
      <option value="115104043/Lecture-36.mp4">Lecture-36-Nuclear Energy Programme of India</option>
      
      <option value="115104043/Lecture-37.mp4">Lecture-37-Nuclear Fusion</option>
      
      <option value="115104043/Lecture-38.mp4">Lecture-38-Nuclear fusion Contd..</option>
      
      <option value="115104043/Lecture-39.mp4">Lecture-39-Thermonuclear fusion reactors</option>
      
      <option value="115104043/Lecture-40.mp4">Lecture-40-Fusion reactions in Stars and stellar neutrinos</option>
      
      <option value="115104043/Lecture-41.mp4">Lecture-41-Nucleosynthesis of elements in Stars</option>
      
      <option value="115104043/Lecture-42.mp4">Lecture-42-Mossbauer Spectroscopy</option>
      
      <option value="115104043/Lecture-43.mp4">Lecture-43-RBS, PIXE, NAA, Summary</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115104088</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong> NOC:Introduction to Electromagnetism  </strong></td>
	<td><strong>Prof. Manoj K Harbola</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115104088/mod01lec01.mp4"> Coloumb's Law                                                                                    </option>
<option value="115104088/mod01lec02.mp4">Coloumb's Force due to several Point charges                                                     </option>
<option value="115104088/mod01lec03.mp4">Force due to distribution of Charges                                                             </option>
<option value="115104088/mod01lec04.mp4">What is an Electric Field?                                                                       </option>
<option value="115104088/mod01lec05.mp4">Electric Field due to a Charged Distribution                                                     </option>
<option value="115104088/mod01lec06.mp4">Helmholtz's Theorem for Electric Field                                                           </option>
<option value="115104088/mod01lec07.mp4">Divergence of a Field                                                                            </option>
<option value="115104088/mod01lec08.mp4">Divergence of Electric Field & Gauss's Law                                                       </option>
<option value="115104088/mod01lec09.mp4">Curl Of a Field-I                                                                                </option>
<option value="115104088/mod01lec10.mp4">Curl of a Field-II & Stokes' Theorem                                                             </option>
<option value="115104088/mod01lec11.mp4">Line surface area & volume elements in Cartesian & Cylindrical Coordinates                       </option>
<option value="115104088/mod01lec12.mp4">Line surface area & volume elements in Spherical Polar Coordinates                               </option>
<option value="115104088/mod01lec13.mp4">Examples of application of the divergence and stokes' theorems                                   </option>
<option value="115104088/mod01lec14.mp4">Electrostatic Potential                                                                          </option>
<option value="115104088/mod01lec15.mp4">Electric field as the gradient of electrostatic potential                                        </option>
<option value="115104088/mod01lec16.mp4">Laplace's and Poisson's equations for electrostatic potential                                    </option>
<option value="115104088/mod01lec17.mp4">Elecrostatic potential due to a charge distribution-I; a line charge of finite length            </option>
<option value="115104088/mod01lec18.mp4">Elecrostatic potential due to a charge distribution-II;a ring and a spherical shell of charge    </option>
<option value="115104088/mod01lec19.mp4">Uniqueness of the solution of Laplace's and Poisson's equations                                  </option>
<option value="115104088/mod01lec20.mp4">Method of images I: point charge in front of a grounded metallic plane -I                        </option>
<option value="115104088/mod03lec21.mp4">Method of imagesII: point charge in front of a grounded metallic plane and grounded metal sphere </option>
<option value="115104088/mod03lec22.mp4">Laplaces equations in some other physical phenomena                                              </option>
<option value="115104088/mod03lec23.mp4">Energy of a charge distribution-I                                                                </option>
<option value="115104088/mod03lec24.mp4">Energy of a charge distribution-II An example                                                    </option>
<option value="115104088/mod03lec25.mp4">Energy of a charge distribution-III Energy density in terms of electric field                    </option>
<option value="115104088/mod03lec26.mp4">Electric field and potential in a conductor                                                      </option>
<option value="115104088/mod03lec27.mp4">Reciprocity theorem for conductors-I                                                             </option>
<option value="115104088/mod03lec28.mp4">Reciprocity theorem for conductors-II </option>
<option value="115104088/mod03lec29.mp4"> Electric polarization and bound charges-I                                                        </option>
<option value="115104088/mod03lec30.mp4">Electric polarization and bound charges-II                                                       </option>
<option value="115104088/mod04lec31.mp4">Electric Displacement                                                                            </option>
<option value="115104088/mod04lec32.mp4">Elecrostatics in presence of Dielectric Materials                                                </option>
<option value="115104088/mod04lec33.mp4">Elecrostatics in presence of Dielectric Materials-II                                             </option>
<option value="115104088/mod04lec34.mp4">Introduction to Magnetostatics; The BiO-Savart law                                               </option>
<option value="115104088/mod04lec35.mp4">Divergence and curl of Magnetic Field                                                            </option>
<option value="115104088/mod04lec36.mp4">Amperes law for Magnetic Fields                                                                  </option>
<option value="115104088/mod04lec37.mp4">Vector Potential for Magnetic Fields                                                             </option>
<option value="115104088/mod04lec38.mp4">Calculation of Vector Potential for a given magnetic </option>
<option value="115104088/mod04lec39.mp4">field                                     </option>
<option value="115104088/mod05lec40.mp4">Equation for the Vector Potentialin terms of current density                                   </option>
<option value="115104088/mod05lec41.mp4">Vector potential from Current Densities-I                                                        </option>
<option value="115104088/mod05lec42.mp4">Vector potential from Current Densities-II                                                       </option>
<option value="115104088/mod05lec43.mp4">Magnetic Materials-I                                                                           </option>
<option value="115104088/mod05lec44.mp4">Magnetic Materials-II Bound Current Densities                                                    </option>
<option value="115104088/mod05lec45.mp4">The Auxiliary Field-H                                                                          </option>
<option value="115104088/mod05lec46.mp4">Solving for Magnetic Field of a magnet-I                                                         </option>
<option value="115104088/mod05lec47.mp4">Solving for Magnetic Field of a magnet in presence of Magnetic Materials                       </option>
<option value="115104088/mod05lec48.mp4">Faradays Law                                                                                   </option>
<option value="115104088/mod06lec49.mp4">Induced Electric field due to changing Magnetic Field                                            </option>
<option value="115104088/mod06lec50.mp4">Demonstrations on faradays law, Lenzs law and Nonconservative nature of Induced electric field </option>
<option value="115104088/mod06lec51.mp4">Energy stord in a magnetic Field-I                                                               </option>
<option value="115104088/mod06lec52.mp4">Energy stord in a magnetic Field-I;solved examples                                               </option>
<option value="115104088/mod06lec53.mp4">Displacement Current                                                                           </option>
<option value="115104088/mod06lec54.mp4">Quasistatic approximation                                                                      </option>
<option value="115104088/mod06lec55.mp4">Energy transport by electromagnetic fields; The Poynting Vector                                </option>
<option value="115104088/mod06lec56.mp4">The Poynting Vector;solved examples                                                              </option>
<option value="115104088/mod07lec57.mp4">Linear Momentum and Angular Momentum carried by Electromagnetic Fields                         </option>
<option value="115104088/mod07lec58.mp4">Lecture-57                                                                                       </option>
<option value="115104088/mod07lec59.mp4">Demonstrations on faradays law, Lenzs law and Nonconservative nature of Induced electric field </option>
<option value="115104088/mod07lec60.mp4">Energy stord in a magnetic Field-I                                                               </option>
<option value="115104088/mod07lec61.mp4">Energy stord in a magnetic Field-I;solved examples                                               </option>
<option value="115104088/mod07lec62.mp4">Displacement Current                                                                           </option>
<option value="115104088/mod07lec63.mp4">Quasistatic approximation                                                                      </option>
<option value="115104088/mod07lec64.mp4">Energy transport by electromagnetic fields; The Poynting Vector                                </option>
<option value="115104088/mod07lec65.mp4">The Poynting Vector;solved examples                                                              </option>
<option value="115104088/mod08lec66.mp4">Lecture-65                                                                                       </option>
<option value="115104088/mod08lec67.mp4">Solution Assignment 1- Problems 1 to 3                                                           </option>
<option value="115104088/mod08lec68.mp4">Solution Assignment 1- Problems 4 to 9                                                           </option>
<option value="115104088/mod08lec69.mp4">Solution Assignment 2- Problems 1 to 4                                                         </option>
<option value="115104088/mod08lec70.mp4">Solution Assignment 2- Problems 5 to 11                                                        </option>
<option value="115104088/mod08lec71.mp4">Solution Assignment 3- Problems 1 to 5                                                           </option>
<option value="115104088/mod08lec72.mp4">Solution Assignment 3- Problems 6 to 10                                                          </option>
<option value="115104088/mod08lec73.mp4">Solution Assignment 4- Problems 1 to 5                                                           </option>
<option value="115104088/mod08lec74.mp4">Solution Assignment 4- Problems 6 to 10                                                          </option>
<option value="115104088/mod08lec75.mp4">Solution Assignment 5- Problems 6 to 11                                                        </option>
<option value="115104088/mod08lec76.mp4">Solution Assignment 5- Problems 1to 5                                                          </option>
<option value="115104088/mod08lec77.mp4">Solution Assignment 6- Problems 1 to 4                                                           </option>
<option value="115104088/mod08lec78.mp4">Solution Assignment 6- Problems 5 to 8                                                           </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115105046</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong> Astrophysics & Cosmology </strong></td>
	<td><strong>Prof. S. Bharadwaj</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115105046/mod01lec01.mp4">Introduction                                             </option>
<option value="115105046/mod01lec02.mp4">Keplers Law                                              </option>
<option value="115105046/mod01lec03.mp4">The Solar System                                         </option>
<option value="115105046/mod01lec04.mp4">The Solar System (Contd.)                                </option>
<option value="115105046/mod01lec05.mp4">Binary Systems                                           </option>
<option value="115105046/mod01lec06.mp4">Binary Systems (Contd.)                                  </option>
<option value="115105046/mod01lec07.mp4">Tidal Forces and the Earth Moon System                   </option>
<option value="115105046/mod01lec08.mp4">Fluid Mechanics                                          </option>
<option value="115105046/mod01lec09.mp4">Hydrostatics and the Solar Wind                          </option>
<option value="115105046/mod01lec10.mp4">Radiative Transfer                                       </option>
<option value="115105046/mod01lec11.mp4">Radiative Transfer (Contd.)                              </option>
<option value="115105046/mod01lec12.mp4">Thermal Radiation                                        </option>
<option value="115105046/mod01lec13.mp4">Thermal Radiation and the Sun                            </option>
<option value="115105046/mod01lec14.mp4">Virial Theorem and Its Application to Stars              </option>
<option value="115105046/mod01lec15.mp4">Stars: Magnitudes and the H-R Diagram                    </option>
<option value="115105046/mod01lec16.mp4">Stellar Physics - I                                      </option>
<option value="115105046/mod01lec17.mp4">Stellar Physics - II                                     </option>
<option value="115105046/mod01lec18.mp4">Stellar Physics - III                                    </option>
<option value="115105046/mod01lec19.mp4">Stellar Physics - IV                                     </option>
<option value="115105046/mod01lec20.mp4">Stellar Physics - V                                      </option>
<option value="115105046/mod01lec21.mp4">White Dwarfs                                             </option>
<option value="115105046/mod01lec22.mp4">White Dwarfs and Neutron Stars                           </option>
<option value="115105046/mod01lec23.mp4">Galaxies                                                 </option>
<option value="115105046/mod01lec24.mp4">Galaxies and the Expanding Universe                      </option>
<option value="115105046/mod01lec25.mp4">The Expanding Universe                                   </option>
<option value="115105046/mod01lec26.mp4">Dynamics of the Expanding Universe                       </option>
<option value="115105046/mod01lec27.mp4">Dynamics of the Expanding Universe (Contd.)              </option>
<option value="115105046/mod01lec28.mp4">The Expanding Universe and the Cosmological Metric       </option>
<option value="115105046/mod01lec29.mp4">The Cosmological Space - Time                            </option>
<option value="115105046/mod01lec30.mp4">Distances                                                </option>
<option value="115105046/mod01lec31.mp4">Distances (Contd.)                                       </option>
<option value="115105046/mod01lec32.mp4">Distances and the Hubble Parameter                       </option>
<option value="115105046/mod01lec33.mp4">Distances, the Hubble Parameter and Dark Energy (Contd.) </option>
<option value="115105046/mod01lec34.mp4">CMBR and Thermal History                                 </option>
<option value="115105046/mod01lec35.mp4">CMBR and Thermal History (Contd...1)                     </option>
<option value="115105046/mod01lec36.mp4">CMBR and Thermal History (Contd...2)                     </option>
<option value="115105046/mod01lec37.mp4">Thermal History, Expansion Rate and Neutrino Mass        </option>
<option value="115105046/mod01lec38.mp4">Thermal History: Neutrino Mass, Nucleosynthesis          </option>
<option value="115105046/mod01lec39.mp4">Big Bang Nucleosynthesis                                 </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115105052</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Random Matrix Theory and Applications</strong></td>
	<td><strong>Dr. Pragya Shukla </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115105052/Lec-1.pdf">Complexity in physical systems: various forms                                                                                  </option>
<option value="115105052/Lec-2.pdf">Statistical behavior of physical properties                                                                                    </option>
<option value="115105052/Lec-3.pdf">Need of random matrix models                                                                                                   </option>
<option value="115105052/Lec-4.pdf">Probability and information entropy                                                                                            </option>
<option value="115105052/Lec-5.pdf">Natural probability measure: the role of symmetries                                                                            </option>
<option value="115105052/Lec-6.pdf">The maximum entropy criterion in the context of statistical inferences                                                         </option>
<option value="115105052/Lec-7.pdf">Nature of ensemble: Role of symmetry, interactions and other system conditions: Part I                                         </option>
<option value="115105052/Lec-8.pdf">Nature of ensemble: Role of symmetry, interactions and other system conditions: Part II                                        </option>
<option value="115105052/Lec-9.pdf">Nature of ensemble: Role of symmetry, interactions and other system conditions: Part III                                       </option>
<option value="115105052/Lec-10.pdf">Basis invariance vs Basis dependence of the ensemble: part I                                                                   </option>
<option value="115105052/Lec-11.pdf">Basis invariance vs Basis dependence of the ensemble: part II                                                                  </option>
<option value="115105052/Lec-12.pdf">Invariant Gaussian ensembles of Hermitian matrices: Wigner-Dyson ensembles (general)                                           </option>
<option value="115105052/Lec-13.pdf">Invariant Gaussian ensembles of Hermitian matrices: eigenvalues-distribution of 2  2 Wigner-Dyson ensembles                   </option>
<option value="115105052/Lec-14.pdf">Invariant Gaussian ensembles of Hermitian matrices: eigenvalues/ eigenfunctions distributions of N X N Wigner-Dyson ensembles </option>
<option value="115105052/Lec-15.pdf">Invariant Gaussian ensembles of Hermitian matrices: Chiral ensembles                                                           </option>
<option value="115105052/Lec-16.pdf">Invariant Gaussian ensembles of Hermitian matrices: particle-hole ensembles                                                    </option>
<option value="115105052/Lec-17.pdf">Time-periodic systems and circular ensembles of unitary matrices                                                               </option>
<option value="115105052/Lec-18.pdf">Non-Hermitian, Laguerre ensembles, Multi-cut ensembles etc.                                                                    </option>
<option value="115105052/Lec-19.pdf">Level Density                                                                                                                  </option>
<option value="115105052/Lec-20.pdf">Fluctuation measures of eigenvalues: basics                                                                                    </option>
<option value="115105052/Lec-21.pdf">2nd order level correlations                                                                                                   </option>
<option value="115105052/Lec-22.pdf">Higher order  fluctuation measures                                                                                             </option>
<option value="115105052/Lec-23.pdf">Fluctuation measures of eigenfunctions                                                                                         </option>
<option value="115105052/Lec-24.pdf">Fluctuation measures of eigenfunctions (Contd.)                                                                                </option>
<option value="115105052/Lec-25.pdf">Multifractality, Universality etc.                                                                                             </option>
<option value="115105052/Lec-26.pdf">Varying system conditions and transition between stationary ensembles                                                          </option>
<option value="115105052/Lec-27.pdf">Common mathematical formulation of eigenvalue statistics                                                                       </option>
<option value="115105052/Lec-28.pdf">Common mathematical formulation of  uctuation measures: Examples                                                               </option>
<option value="115105052/Lec-29.pdf">Connection to one dimensional Calogero-Sutherland Hamiltonian                                                                  </option>
<option value="115105052/Lec-30.pdf">Correlated random matrix ensembles: common mathematical formulation of eigenvalues statistics                                  </option>
<option value="115105052/Lec-31.pdf">Critical ensembles and role of complexity parameter                                                                            </option>
<option value="115105052/Lec-32.pdf">Random matrix theory of quantum transport                                                                                      </option>
<option value="115105052/Lec-33.pdf">Quantum Chaos and Random matrix theory                                                                                         </option>
<option value="115105052/Lec-34.pdf">Disordered Systems and Random matrix theory                                                                                    </option>
<option value="115105052/Lec-35.pdf">Many body physics,eld theories and Random matrix theory                                                                      </option>
<option value="115105052/Lec-36.pdf">Financial and Atmospheric  uctuations                                                                                          </option>
<option value="115105052/Lec-37.pdf">Complex Networks                                                                                                               </option>
<option value="115105052/Lec-38.pdf">Biological Systems                                                                                                             </option>
<option value="115105052/Lec-39.pdf">Application to classical and quantum optics                                                                                    </option>
<option value="115105052/Lec-40.pdf">Waves in solid, liquids and number-theory                                                                                      |</option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115106057</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Special/Select Topics in Atomic Physics</strong></td>
	<td><strong>Prof. P.C. Deshmukh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115106057/mod01lec01.mp4">Introductory lecture about this course                                                                                                             </option>
<option value="115106057/mod01lec02.mp4">Quantum Mechanics and Symmetry of the Hydrogen Atom                                                                                                </option>
<option value="115106057/mod01lec03.mp4">Hydrogen atom: Rotational and Dynamical Symmetry of the 1/r Potential                                                                              </option>
<option value="115106057/mod01lec04.mp4">Hydrogen atom:  Dynamical Symmetry of the 1/r Potential                                                                                            </option>
<option value="115106057/mod01lec05.mp4">Degeneracy of the Hydrogen Atom: SO(4)                                                                                                             </option>
<option value="115106057/mod01lec06.mp4">Wavefunctions of the Hydrogen Atom                                                                                                                 </option>
<option value="115106057/mod01lec07.mp4">Angular Momentum in Quantum Mechanics                                                                                                              </option>
<option value="115106057/mod01lec08.mp4">Angular Momentum in Quantum Mechanics: half-odd-integer and integer quantum numbers: SU(2) & SO(3)                                                 </option>
<option value="115106057/mod01lec09.mp4">Angular Momentum in Quantum Mechanics: Addition Theorem for Spherical Harmonics - Coupling of Angular Momenta                                      </option>
<option value="115106057/mod01lec10.mp4">Angular Momentum in Quantum Mechanics Dimensionality of the Direct-Product (Composite) Vector Space CGC  recursion relations                       </option>
<option value="115106057/mod01lec11.mp4">Angular Momentum in Quantum Mechanics CGC matrix, Wigner D Rotation Matrix, Irreducible Tensor Operators                                           </option>
<option value="115106057/mod01lec12.mp4">Angular Momentum in Quantum Mechanics - more on ITO, and the Wigner-Eckart Theorem                                                                 </option>
<option value="115106057/mod01lec13.mp4">Angular Momentum in Quantum Mechanics Wigner-Eckart Theorem - 2                                                                                    </option>
<option value="115106057/mod01lec14.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - 1                                                                                            </option>
<option value="115106057/mod01lec15.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - 2                                                                                            </option>
<option value="115106057/mod01lec16.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - PAULI Equation - Foldy - Wouthysen Transformations - 1                                       </option>
<option value="115106057/mod01lec17.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - Foldy - Wouthysen Transformations - 2                                                        </option>
<option value="115106057/mod01lec18.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - Foldy - Wouthysen Transformations - 3                                                        </option>
<option value="115106057/mod01lec19.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - Spherical Symmetry of the Coulomb Potential                                                  </option>
<option value="115106057/mod01lec20.mp4">Hartree-Fock Self-Consistent Field formalism - 1                                                                                                   </option>
<option value="115106057/mod01lec21.mp4">Hartree-Fock Self-Consistent Field formalism - 2                                                                                                   </option>
<option value="115106057/mod01lec22.mp4">Hartree-Fock Self-Consistent Field formalism - 3                                                                                                   </option>
<option value="115106057/mod01lec23.mp4">Hartree-Fock Self-Consistent Field formalism - 4                                                                                                   </option>
<option value="115106057/mod01lec24.mp4">Hartree-Fock Self-Consistent Field formalism - 5                                                                                                   </option>
<option value="115106057/mod01lec25.mp4">Perturbative treatment of relativistic effects� Schrodinger's and Dirac QM                                                                         </option>
<option value="115106057/mod01lec26.mp4">Perturbative treatment of relativistic effects� Schrodinger's and Dirac QM                                                                         </option>
<option value="115106057/mod01lec27.mp4">Probing the atom - Collisions and Spectroscopy - boundary conditions - 1                                                                           </option>
<option value="115106057/mod01lec28.mp4">Atomic Probes - Collisions and Spectroscopy - boundary conditions - 2                                                                              </option>
<option value="115106057/mod01lec29.mp4">Atomic Probes - Collisions and Spectroscopy - Scattering phase shifts and boundary conditions                                                      </option>
<option value="115106057/mod01lec30.mp4">Atomic Probes - Time reversal symmetry - applications in atomic collisions and photoionization processes                                           </option>
<option value="115106057/mod01lec31.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 1                                                                 </option>
<option value="115106057/mod01lec32.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 2                                                                 </option>
<option value="115106057/mod01lec33.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 3                                                                 </option>
<option value="115106057/mod01lec34.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 4                                                                 </option>
<option value="115106057/mod01lec35.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons Cooper Zare Formula                                                 </option>
<option value="115106057/mod01lec36.mp4">Stark- Zeeman Spectroscopy - Stark effect                                                                                                          </option>
<option value="115106057/mod01lec37.mp4">Stark- Zeeman Spectroscopy - Stark effect on n=2 excited state of the H atom Zeeman effect                                                         </option>
<option value="115106057/mod01lec38.mp4">Stark- Zeeman Spectroscopy - Normal, Anomalous Zeeman effect; Paschen- Back effect                                                                 </option>
<option value="115106057/mod01lec39.mp4">Stark- Zeeman Spectroscopy - Anomalous Zeeman effect                                                                                               </option>
<option value="115106057/mod01lec40.mp4">Zeeman effect Fine structure, Hyperfine structure - Elemental, rudimentary introduction to Laser Cooling, BEC, Atomic Clock / Attosecond metrology </option>
</select></td>
	
	</tr>
	</form>


<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115106058</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Classical Field Theory</strong></td>
	<td><strong>Prof. Suresh Govindarajan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
     <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115106058/mod01lec01.mp4">Lecture 1</option>
      
      <option value="115106058/mod01lec02.mp4">Lecture 2</option>
      
      <option value="115106058/mod01lec03.mp4">Lecture 3</option>
      
      <option value="115106058/mod01lec04.mp4">Lecture 4</option>
      
      <option value="115106058/mod01lec05.mp4">Lecture 5</option>
      
      <option value="115106058/mod01lec06.mp4">Lecture 6</option>
      
      <option value="115106058/mod01lec07.mp4">Lecture 7</option>
      
      <option value="115106058/mod01lec08.mp4">Lecture 8</option>
      
      <option value="115106058/mod01lec09.mp4">Lecture 9</option>
      
      <option value="115106058/mod01lec10.mp4">Lecture 10</option>
      
      <option value="115106058/mod01lec11.mp4">Lecture 11</option>
      
      <option value="115106058/mod01lec12.mp4">Lecture 12</option>
      
      <option value="115106058/mod01lec13.mp4">Lecture 13</option>
      
      <option value="115106058/mod01lec14.mp4">Lecture 14</option>
      
      <option value="115106058/mod01lec15.mp4">Lecture 15</option>
      
      <option value="115106058/mod01lec16.mp4">Lecture 16</option>
      
      <option value="115106058/mod01lec17.mp4">Lecture 17</option>
      
      <option value="115106058/mod01lec18.mp4">Lecture 18</option>
      
      <option value="115106058/mod01lec19.mp4">Lecture 19</option>
      
      <option value="115106058/mod01lec20.mp4">Lecture 20</option>
      
      <option value="115106058/mod01lec21.mp4">Lecture 21</option>
      
      <option value="115106058/mod01lec22.mp4">Lecture 22</option>
      
      <option value="115106058/mod01lec23.mp4">Lecture 23</option>
      
      <option value="115106058/mod01lec24.mp4">Lecture 24</option>
      
      <option value="115106058/mod01lec25.mp4">Lecture 25</option>
      
      <option value="115106058/mod01lec26.mp4">Lecture 26</option>
      
      <option value="115106058/mod01lec27.mp4">Lecture 27</option>
      
      <option value="115106058/mod01lec28.mp4">Lecture 28</option>
      
      <option value="115106058/mod01lec29.mp4">Lecture 29</option>
      
      <option value="115106058/mod01lec30.mp4">Lecture 30</option>
      
      <option value="115106058/mod01lec31.mp4">Lecture 31</option>
      
      <option value="115106058/mod01lec32.mp4">Lecture 32</option>
      
      <option value="115106058/mod01lec33.mp4">Lecture 33</option>
      
      <option value="115106058/mod01lec34.mp4">Lecture 34</option>
      
      <option value="115106058/mod01lec35.mp4">Lecture 35</option>
      
      <option value="115106058/mod01lec36.mp4">Lecture 36</option>
      
      <option value="115106058/mod01lec37.mp4">Lecture 37</option>
      
      <option value="115106058/mod01lec38.mp4">Lecture 38</option>
      
      <option value="115106058/mod01lec39.mp4">Lecture 39</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115106059</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Topics in Nonlinear Dynamics</strong></td>
	<td><strong>Prof. V. Balakrishnan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115106059/mod01lec01.mp4">Introductory lecture about this course                                                                                                             </option>
<option value="115106059/mod01lec02.mp4">Quantum Mechanics and Symmetry of the Hydrogen Atom                                                                                                </option>
<option value="115106059/mod01lec03.mp4">Hydrogen atom: Rotational and Dynamical Symmetry of the 1/r Potential                                                                              </option>
<option value="115106059/mod01lec04.mp4">Hydrogen atom:  Dynamical Symmetry of the 1/r Potential                                                                                            </option>
<option value="115106059/mod01lec05.mp4">Degeneracy of the Hydrogen Atom: SO(4)                                                                                                             </option>
<option value="115106059/mod01lec06.mp4">Wavefunctions of the Hydrogen Atom                                                                                                                 </option>
<option value="115106059/mod01lec07.mp4">Angular Momentum in Quantum Mechanics                                                                                                              </option>
<option value="115106059/mod01lec08.mp4">Angular Momentum in Quantum Mechanics: half-odd-integer and integer quantum numbers: SU(2) & SO(3)                                                 </option>
<option value="115106059/mod01lec09.mp4">Angular Momentum in Quantum Mechanics: Addition Theorem for Spherical Harmonics - Coupling of Angular Momenta                                      </option>
<option value="115106059/mod01lec10.mp4">Angular Momentum in Quantum Mechanics Dimensionality of the Direct-Product (Composite) Vector Space CGC  recursion relations                       </option>
<option value="115106059/mod01lec11.mp4">Angular Momentum in Quantum Mechanics CGC matrix, Wigner D Rotation Matrix, Irreducible Tensor Operators                                           </option>
<option value="115106059/mod01lec12.mp4">Angular Momentum in Quantum Mechanics - more on ITO, and the Wigner-Eckart Theorem                                                                 </option>
<option value="115106059/mod01lec13.mp4">Angular Momentum in Quantum Mechanics Wigner-Eckart Theorem - 2                                                                                    </option>
<option value="115106059/mod01lec14.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - 1                                                                                            </option>
<option value="115106059/mod01lec15.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - 2                                                                                            </option>
<option value="115106059/mod01lec16.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - PAULI Equation - Foldy - Wouthysen Transformations - 1                                       </option>
<option value="115106059/mod01lec17.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - Foldy - Wouthysen Transformations - 2                                                        </option>
<option value="115106059/mod01lec18.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - Foldy - Wouthysen Transformations - 3                                                        </option>
<option value="115106059/mod01lec19.mp4">Relativistic Quantum Mechanics of the Hydrogen Atom - Spherical Symmetry of the Coulomb Potential                                                  </option>
<option value="115106059/mod01lec20.mp4">Hartree-Fock Self-Consistent Field formalism - 1                                                                                                   </option>
<option value="115106059/mod01lec21.mp4">Hartree-Fock Self-Consistent Field formalism - 2                                                                                                   </option>
<option value="115106059/mod01lec22.mp4">Hartree-Fock Self-Consistent Field formalism - 3                                                                                                   </option>
<option value="115106059/mod01lec23.mp4">Hartree-Fock Self-Consistent Field formalism - 4                                                                                                   </option>
<option value="115106059/mod01lec24.mp4">Hartree-Fock Self-Consistent Field formalism - 5                                                                                                   </option>
<option value="115106059/mod01lec25.mp4">Perturbative treatment of relativistic effects� Schrodinger's and Dirac QM                                                                         </option>
<option value="115106059/mod01lec26.mp4">Perturbative treatment of relativistic effects� Schrodinger's and Dirac QM                                                                         </option>
<option value="115106059/mod01lec27.mp4">Probing the atom - Collisions and Spectroscopy - boundary conditions - 1                                                                           </option>
<option value="115106059/mod01lec28.mp4">Atomic Probes - Collisions and Spectroscopy - boundary conditions - 2                                                                              </option>
<option value="115106059/mod01lec29.mp4">Atomic Probes - Collisions and Spectroscopy - Scattering phase shifts and boundary conditions                                                      </option>
<option value="115106059/mod01lec30.mp4">Atomic Probes - Time reversal symmetry - applications in atomic collisions and photoionization processes                                           </option>
<option value="115106059/mod01lec31.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 1                                                                 </option>
<option value="115106059/mod01lec32.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 2                                                                 </option>
<option value="115106059/mod01lec33.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 3                                                                 </option>
<option value="115106059/mod01lec34.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons - 4                                                                 </option>
<option value="115106059/mod01lec35.mp4">Atomic Photoionization cross sections, angular distributions of photoelectrons Cooper Zare Formula                                                 </option>
<option value="115106059/mod01lec36.mp4">Stark- Zeeman Spectroscopy - Stark effect                                                                                                          </option>
<option value="115106059/mod01lec37.mp4">Stark- Zeeman Spectroscopy - Stark effect on n=2 excited state of the H atom Zeeman effect                                                         </option>
<option value="115106059/mod01lec38.mp4">Stark- Zeeman Spectroscopy - Normal, Anomalous Zeeman effect; Paschen- Back effect                                                                 </option>
<option value="115106059/mod01lec39.mp4">Stark- Zeeman Spectroscopy - Anomalous Zeeman effect                                                                                               </option>
<option value="115106059/mod01lec40.mp4">Zeeman effect Fine structure, Hyperfine structure - Elemental, rudimentary introduction to Laser Cooling, BEC, Atomic Clock / Attosecond metrology </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115106061</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Condensed Matter Physics</strong></td>
	<td><strong>Prof. G. Rangarajan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115106061/mod01lec01.mp4">Principles of Condensed Matter Physics                                                                </option>
<option value="115106061/mod01lec02.mp4">Symmetry in Perfect Solids                                                                            </option>
<option value="115106061/mod01lec03ex.mp4">Symmetry in Perfect Solids (Continued)                                                                </option>
<option value="115106061/mod01lec03.mp4">Symmetry in Perfect Solids - Worked Examples                                                          </option>
<option value="115106061/mod01lec04.mp4">Diffraction Methods For Crystal Structures                                                            </option>
<option value="115106061/mod01lec05ex.mp4">Diffraction Methods For Crystal Structures (Continued)                                                </option>
<option value="115106061/mod01lec05.mp4">Diffraction Methods For Crystal Structures - Worked Examples                                          </option>
<option value="115106061/mod01lec06.mp4">Physical Properties of Crystals                                                                       </option>
<option value="115106061/mod01lec07ex.mp4">Physical Properties of Crystals (Continued)                                                           </option>
<option value="115106061/mod01lec07.mp4">Physical Properties of Crystals - Worked Examples                                                     </option>
<option value="115106061/mod01lec08ex.mp4">Cohesion in Solids                                                                                    </option>
<option value="115106061/mod01lec08.mp4">Cohesion in Solids - Worked Examples                                                                  </option>
<option value="115106061/mod01lec09ex.mp4">The Free Electron Theory of Metals                                                                    </option>
<option value="115106061/mod01lec09.mp4">The Free Electron Theory of Metals - Worked Examples                                                  </option>
<option value="115106061/mod01lec10ex.mp4">The Free Electron Theory of Metals - Electrical Conductivity                                          </option>
<option value="115106061/mod01lec10.mp4">The Free Electron Theory of Metals - Electrical Conductivity - Worked Examples                        </option>
<option value="115106061/mod01lec11ex.mp4">Thermal Conductivity of Metals                                                                        </option>
<option value="115106061/mod01lec11.mp4">Thermal Conductivity of Metals - Worked Examples                                                      </option>
<option value="115106061/mod01lec12.mp4">The Concept of Phonons                                                                                </option>
<option value="115106061/mod01lec13ex.mp4">Debye Theory of Specific Heat, Lattice Vibrations                                                     </option>
<option value="115106061/mod01lec13.mp4">Debye Theory of Specific Heat, Lattice Vibrations - Worked Examples                                   </option>
<option value="115106061/mod01lec14ex.mp4">Lattice Vibrations (Continued) Phonon thermal conductivity                                            </option>
<option value="115106061/mod01lec14.mp4">Lattice Vibrations (Continued) Phonon Thermal Conductivity - Worked Examples                          </option>
<option value="115106061/mod01lec15.mp4">Anharmonicity and Thermal Expansion                                                                   </option>
<option value="115106061/mod01lec16.mp4">Dielectric (Insulating) Solids                                                                        </option>
<option value="115106061/mod01lec17.mp4">Dispersion and Absorption of Electromagnetic Waves in Dielectric Media, Ferro-and Antiferroelectrics  </option>
<option value="115106061/mod01lec18ex.mp4">Optical Properties of Metals; Ionic Polarization in Alkali Halides; Piezoelectricity                  </option>
<option value="115106061/mod01lec18.mp4">Dielectric Solids - Worked Examples                                                                   </option>
<option value="115106061/mod01lec19.mp4">Dia - and Paramagnetism                                                                               </option>
<option value="115106061/mod01lec20.mp4">Paramagnetism of Transition Metal and Rare Earth Ions                                                 </option>
<option value="115106061/mod01lec21.mp4">Quenching of Orbital Angular Momentum; Ferromagnetism                                                 </option>
<option value="115106061/mod01lec22.mp4">Exchange Interactions, Magnetic Order, Neutron Diffraction                                            </option>
<option value="115106061/mod01lec23.mp4">Hysteresis and Magnetic Domains; Spin Waves and Magnons                                               </option>
<option value="115106061/mod01lec24ex(C).mp4 ">Magnetic Resonance                                                                                    </option>
<option value="115106061/mod01lec24ex.mp4">Magnetism and Magnetic Resonance - Worked Examples�                                                   </option>
<option value="115106061/mod01lec24.mp4">Magnetism - Worked Examples (Continued)                                                               </option>
<option value="115106061/mod01lec25.mp4">Pauli Paramagnetism and Landau Diamagnetism                                                           </option>
<option value="115106061/mod01lec26.mp4">Band Magnetism; Itinerant Electrons; Stoner Model                                                     </option>
<option value="115106061/mod01lec27.mp4">Superconductivity - Perfect Electrical Conductivity and Perfect Diamagnetism                          </option>
<option value="115106061/mod01lec28.mp4">Type I and Type II Superconductors                                                                    </option>
<option value="115106061/mod01lec29.mp4">Ginsburg - Landau Theory, Flux Quantization                                                           </option>
<option value="115106061/mod01lec30.mp4">Cooper Pairs�                                                                                         </option>
<option value="115106061/mod01lec31.mp4">Microscopic (BCS) Theory of Superconductivity                                                         </option>
<option value="115106061/mod01lec32.mp4">BCS Theory (Continued): Josephson Tunneling: Quantum Interference                                     </option>
<option value="115106061/mod01lec33ex.mp4">Josephson Effect (Continued); High Temperature Superconductors                                        </option>
<option value="115106061/mod01lec33.mp4">Superconductors - Worked Examples                                                                     </option>
<option value="115106061/mod01lec34.mp4">Energy Bands in Solids                                                                                </option>
<option value="115106061/mod01lec35.mp4">Electron Dynamics in a Periodic Solid                                                                 </option>
<option value="115106061/mod01lec36.mp4">Semiconductors                                                                                        </option>
<option value="115106061/mod01lec37ex.mp4">Semiconductors (Continued)                                                                            </option>
<option value="115106061/mod01lec37.mp4">Semiconductors - Worked Examples                                                                      </option>
<option value="115106061/mod01lec38ex.mp4">Defects in Solids - Point Defects                                                                     </option>
<option value="115106061/mod01lec38.mp4">Point Defects in Solids - Worked Examples                                                             </option>
<option value="115106061/mod01lec39ex.mp4">Defects in Solids - Line and Surface Defects                                                          </option>
<option value="115106061/mod01lec39.mp4">Dislocations in Solids - Worked Examples                                                              </option>
<option value="115106061/mod01lec40ex.mp4">Quantum Fluids and Quantum Solids                                                                     </option>
<option value="115106061/mod01lec40.mp4">Quantum Liquids and Quantum Solids - Worked Examples                                                  </option>
<option value="115106061/mod01lec41.mp4">Epilogue                                                                                              </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115106065</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Quantum Field Theory</strong></td>
	<td><strong>Dr. Prasanta Tripathy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115106065/mod01lec01.mp4">Introduction                             </option>
<option value="115106065/mod01lec02.mp4">Introduction to Classical Field Theory   </option>
<option value="115106065/mod01lec03.mp4">Quantization of Real Scalar Field - I    </option>
<option value="115106065/mod01lec04.mp4">Quantization of Real Scalar Field - II   </option>
<option value="115106065/mod01lec05.mp4">Quantization of Real Scalar Field - III  </option>
<option value="115106065/mod01lec06.mp4">Quantization of Real Scalar Field - IV   </option>
<option value="115106065/mod01lec07.mp4">Quantization of Complex Scalar Field     </option>
<option value="115106065/mod02lec08.mp4">Interacting Field Theory - I             </option>
<option value="115106065/mod02lec09.mp4">Interacting Field Theory - II            </option>
<option value="115106065/mod02lec10.mp4">Interacting Field Theory - III           </option>
<option value="115106065/mod02lec11.mp4">Interacting Field Theory - IV            </option>
<option value="115106065/mod02lec12.mp4">Interacting Field Theory - V             </option>
<option value="115106065/mod02lec13.mp4">Interacting Field Theory - VI            </option>
<option value="115106065/mod02lec14.mp4">Interacting Field Theory - VII           </option>
<option value="115106065/mod03lec15.mp4">Quantuzation of Electromagnetic Field I  </option>
<option value="115106065/mod03lec16.mp4">Quantuzation of Electromagnetic Field II </option>
<option value="115106065/mod03lec17.mp4">Fermion Quantization I                   </option>
<option value="115106065/mod03lec18.mp4">Fermion Quantization II                  </option>
<option value="115106065/mod03lec19.mp4">Fermion Quantization III                 </option>
<option value="115106065/mod03lec20.mp4">Fermion Quantization IV                  </option>
<option value="115106065/mod03lec21.mp4">Fermion Quantization V                   </option>
<option value="115106065/mod03lec22.mp4">Fermion Quantization VI                  </option>
<option value="115106065/mod04lec23.mp4">The S-Matrix Expansion in QED I          </option>
<option value="115106065/mod04lec24.mp4">The S-Matrix Expansion in QED II         </option>
<option value="115106065/mod04lec25.mp4">Feynman Rules in QED I                   </option>
<option value="115106065/mod04lec26.mp4">Feynman Rules in QED II                  </option>
<option value="115106065/mod04lec27.mp4">Compton Scattering I                     </option>
<option value="115106065/mod04lec28.mp4">Compton Scattering II                    </option>
<option value="115106065/mod04lec29.mp4">Compton Scattering III                   </option>
<option value="115106065/mod04lec30.mp4">Moller Scattering I                      </option>
<option value="115106065/mod04lec31.mp4"> Moller Scattering II                    </option>
<option value="115106065/mod05lec32.mp4"> Vertex Correction I                     </option>
<option value="115106065/mod05lec33.mp4">Vertex Correction II                     </option>
<option value="115106065/mod05lec34.mp4">Vertex Correction III                    </option>
<option value="115106065/mod05lec35.mp4">Vertex Correction IV                     </option>
<option value="115106065/mod05lec36.mp4">Electron Selfenergy                      </option>
<option value="115106065/mod05lec37.mp4">Photon Selfenergy I                      </option>
<option value="115106065/mod05lec38.mp4">Photon Selfenergy II                     </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115106066</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Quantum Mechanics I</strong></td>
	<td><strong>Prof. S. Lakshmi Bala</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115106066/mod01lec01.mp4">Quantum Mechanics � An Introduction                            </option>
<option value="115106066/mod01lec02.mp4">Linear Vector Spaces - I                                       </option>
<option value="115106066/mod01lec03.mp4">Linear Vector Spaces - II: The two-level atom                  </option>
<option value="115106066/mod01lec04.mp4">Linear Vector Spaces - III: The three-level atom               </option>
<option value="115106066/mod01lec05.mp4">Postulates of Quantum Mechanics - I                            </option>
<option value="115106066/mod01lec06.mp4">Postulates of Quantum Mechanics - II                           </option>
<option value="115106066/mod01lec07.mp4">The Uncertainty Principle                                      </option>
<option value="115106066/mod01lec08.mp4">The Linear Harmonic Oscillator                                 </option>
<option value="115106066/mod01lec09.mp4">Introducing Quantum Optics                                     </option>
<option value="115106066/mod01lec10.mp4">An Interesting Quantum Superposition: The Coherent  State      </option>
<option value="115106066/mod01lec11.mp4">The Displacement and Squeezing Operators                       </option>
<option value="115106066/mod01lec12.mp4">Exercises in Finite Dimensional Linear Vector Spaces           </option>
<option value="115106066/mod01lec13.mp4">Exercises on Angular Momentum Operators and their algebra      </option>
<option value="115106066/mod01lec14.mp4">Exercises on Quantum Expectation Values                        </option>
<option value="115106066/mod01lec15.mp4">Composite Systems                                              </option>
<option value="115106066/mod01lec16.mp4">The Quantum Beam Splitter                                      </option>
<option value="115106066/mod01lec17.mp4">Addition of Angular Momenta - I                                </option>
<option value="115106066/mod01lec18.mp4">Addition of Angular Momenta - II                               </option>
<option value="115106066/mod01lec19.mp4">Addition of Angular Momenta - III                              </option>
<option value="115106066/mod01lec20.mp4">Infinite Dimensional Linear Vector Spaces                      </option>
<option value="115106066/mod01lec21.mp4">Square-Integrable Functions                                    </option>
<option value="115106066/mod01lec22.mp4">Ingredients of Wave Mechanics                                  </option>
<option value="115106066/mod01lec23.mp4">The Schrodinger equation                                       </option>
<option value="115106066/mod01lec24.mp4">Wave Mechanics of the Simple Harmonic Oscillator               </option>
<option value="115106066/mod01lec25.mp4">One-Dimensional Square Well Potential: The Bound State Problem </option>
<option value="115106066/mod01lec26.mp4">The Square Well and the Square Potential Barrier               </option>
<option value="115106066/mod01lec27.mp4">The Particle in a one-dimensional Box                          </option>
<option value="115106066/mod01lec28.mp4">A Charged Particle in a Uniform Magnetic Field                 </option>
<option value="115106066/mod01lec29.mp4">The Wavefunction: Its Single-valuedness and its Phase          </option>
<option value="115106066/mod01lec30.mp4">The Central Potential                                          </option>
<option value="115106066/mod01lec31.mp4">The Spherical Harmonics                                        </option>
<option value="115106066/mod01lec32.mp4">Central Potential: The Radial Equation                         </option>
<option value="115106066/mod01lec33.mp4">Illustrative Exercises -I                                      </option>
<option value="115106066/mod01lec34.mp4">Illustrative Exercises -II                                     </option>
<option value="115106066/mod01lec35.mp4">Ehrenfest's Theorem                                            </option>
<option value="115106066/mod01lec36.mp4">Perturbation Theory - I                                        </option>
<option value="115106066/mod01lec37.mp4">Perturbation Theory - II                                       </option>
<option value="115106066/mod01lec38.mp4">Perturbation Theory - III                                      </option>
<option value="115106066/mod01lec39.mp4">Perturbation Theory - IV                                       </option>
<option value="115106066/mod01lec40.mp4">Time-dependent Hamiltonians                                    </option>
<option value="115106066/mod01lec41.mp4">The Jaynes-Cummings model                                      </option>
</select></td>
	
	</tr>
	</form>


<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115106068</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Special Topics in Classical Mechanics</strong></td>
	<td><strong>Prof. P.C. Deshmukh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#"> Select </option>
      <option value="115106068/mod01lec01.mp4">Course Overview</option>
      
      <option value="115106068/mod01lec02.mp4">Equations of Motion(i)</option>
      
      <option value="115106068/mod01lec03.mp4">Equations of Motion(ii)</option>
      
      <option value="115106068/mod01lec04.mp4"> Equations of Motion(iii)</option>
      
      <option value="115106068/mod01lec05.mp4">Equations of Motion(iv)</option>
      
      <option value="115106068/mod01lec06.mp4">Equations of Motion(v)</option>
      
      <option value="115106068/mod02lec07.mp4">Oscillators, Resonances, Waves(i)</option>
      
      <option value="115106068/mod02lec08.mp4">Oscillators, Resonances, Waves(ii)</option>
      
      <option value="115106068/mod02lec09.mp4">Oscillators, Resonances, Waves(iii)</option>
      
      <option value="115106068/mod02lec10.mp4">Oscillators, Resonances, Waves(iv)</option>
      
      <option value="115106068/mod03lec11.mp4">Polar Coordinates(i)</option>
      
      <option value="115106068/mod03lec12.mp4">Polar Coordinates(ii)</option>
      
      <option value="115106068/mod04lec13.mp4">Dynamical Symmetry in the Kepler Problem(i)</option>
      
      <option value="115106068/mod04lec14.mp4">Dynamical Symmetry in the Kepler Problem(ii)</option>
      
      <option value="115106068/mod05lec15.mp4">Real Effects of Pseudo-Forces</option>
      
      <option value="115106068/mod05lec16.mp4">Real Effects of Pseudo-Forces(ii)</option>
      
      <option value="115106068/mod05lec17.mp4">Real Effects of Pseudo-Forces(iii)</option>
      
      <option value="115106068/mod05lec18.mp4">Real Effects of Pseudo-Forces(iv)</option>
      
      <option value="115106068/mod06lec19.mp4">Special Theory of Relativity(i)</option>
      
      <option value="115106068/mod06lec20.mp4">Special Theory of Relativity(ii)</option>
      
      <option value="115106068/mod06lec21.mp4">Special Theory of Relativity(iii)</option>
      
      <option value="115106068/mod06lec22.mp4">Special Theory of Relativity(iv)</option>
      
      <option value="115106068/mod07lec23.mp4">Potentials Gradients Fields(i)</option>
      
      <option value="115106068/mod07lec24.mp4">Potentials Gradients Fields(ii)</option>
      
      <option value="115106068/mod07lec25.mp4">Potentials Gradients Fields(iii)</option>
      
      <option value="115106068/mod08lec26.mp4">Gauss Law Eq of continuity(i)</option>
      
      <option value="115106068/mod08lec27.mp4">Gauss Law Eq of continuity(ii)</option>
      
      <option value="115106068/mod08lec28.mp4">Gauss Law Eq of continuity(iii)</option>
      
      <option value="115106068/mod09lec29.mp4">Fluid Flow Bernoulli Principle (i)</option>
      
      <option value="115106068/mod09lec30.mp4">Fluid Flow Bernoulli Principle (ii)</option>
      
      <option value="115106068/mod10lec31.mp4">Classical Electrodynamics (i)</option>
      
      <option value="115106068/mod10lec32.mp4">Classical Electrodynamics (ii)</option>
      
      <option value="115106068/mod10lec33.mp4">Classical Electrodynamics (iii)</option>
      
      <option value="115106068/mod10lec34.mp4">Classical Electrodynamics (iv)</option>
      
      <option value="115106068/mod11lec35.mp4">Chaotic Dynamical Systems (i)</option>
      
      <option value="115106068/mod11lec36.mp4">Chaotic Dynamical Systems (ii)</option>
      
      <option value="115106068/mod11lec37.mp4">Chaotic Dynamical Systems (iii)</option>
      
      <option value="115106068/mod11lec38.mp4">Chaotic Dynamical Systems (iv)</option>
      
      <option value="115106068/mod11lec39.mp4">Chaotic Dynamical Systems (v)</option>
      
      <option value="115106068/mod12lec40.mp4">The Scope and Limitations of Classical Mechanics</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115106076</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Physics & Applications of Semiconductor Nanostructures (Semiconductor Nanodevices)</strong></td>
	<td><strong>Dr. R. John Bosco Balaguru, Dr. B. G. Jayaprakash</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115106076/Module 1/Module 1.pdf">Wave Particle Duality and Heisenberg Principle, Schrodinger Wave Equation, Fermi-Dirac and Bose-Einstein Distributions                           </option>
<option value="115106076/Module 2/Module 2.pdf">Miniaturization of Electronic System and Various Characteristic lengths in low dimensional systems                                               </option>
<option value="115106076/Module 3/Module 3.pdf">Kronig�Penney Model - Free-Electron / Quasifree-Electron Approximation: Density of States Function                                               </option>
<option value="115106076/Module 4/Module 4.pdf">Energy Bands, Basics of Transports and Optical Processes in Semiconductors                                                                       </option>
<option value="115106076/Module 5/Module 5.pdf">Introduction to Materials and Classification of Low Dimensional Materials                                                                        </option>
<option value="115106076/Module 6/Module 6.pdf">Quantum size effect, electrical conductivity and Quantum transport                                                                               </option>
<option value="115106076/Module 7/Module 7.pdf">Quantum Wells, Quantum Wires, Quantum Dots, Quantum Limit of Conductance, Quantum Capacitance & Quantum HALL Effect                              </option>
<option value="115106076/Module 8/Module 8.pdf">Importance of strains in semiconductors and Effect of strain on valence band                                                                     </option>
<option value="115106076/Module 9/Module 9.pdf">Lattice Vibrations, Phonons, Specific Heat Capacity, Thermal Conductivity                                                                        </option>
<option value="115106076/Module 10/Module 10.pdf">Melting points, mechanical properties of nanoparticles and Hall Petch relationship for nanostructured materials                                  </option>
<option value="115106076/Module 11/Module 11.pdf">Quantum Electronic Devices - I                                                                                                                   </option>
<option value="115106076/Module 12/Module 12.pdf">Tunnel Effect and Tunneling Elements                                                                                                             </option>
<option value="115106076/Module 13/Module 13.pdf">PRINCIPLE OF SET � SET CIRCUIT DESIGN � COMPARISON BETWEEN FET AND SET                                                                           </option>
<option value="115106076/Module 14/Module 14.pdf">Mimic of a Gas sensor, Metal Oxide Gas Sensing Mechanism, Factors Influencing the Sensor Performance and Role of nanomaterials based gas sensors </option>
</select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115106085</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong> Special/Select Topics in the Theory of Atomic Collisions and Spectroscopy</strong></td>
	<td><strong>Prof. P.C. Deshmukh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115106085/mod01lec01.mp4">Introduction to the STiTACS course                                                         </option>
<option value="115106085/mod01lec02.mp4">Quantum Theory of collisions                                                               </option>
<option value="115106085/mod01lec03.mp4">Quantum Theory of collisions: optical Theorem                                              </option>
<option value="115106085/mod01lec04.mp4">Quantum Theory of collisions: Optical Theorem.                                             </option>
<option value="115106085/mod01lec05.mp4">Quantum Theory of collisions: Differential scattering cross section                        </option>
<option value="115106085/mod01lec06.mp4">Quantum Theory of collisions: Differential scattering cross section, Partial wave analysis </option>
<option value="115106085/mod01lec07.mp4">Quantum Theory of collisions: Optical Theorem � Unitarity of the Scattering Operator       </option>
<option value="115106085/mod01lec08.mp4">Quantum Theory of collisions: Reciprocity Theorem, Phase shift analysis                    </option>
<option value="115106085/mod01lec09.mp4">Quantum Theory of collisions: More on Phase shift analysis                                 </option>
<option value="115106085/mod01lec10.mp4">Quantum Theory of collisions: resonant condition in the l th partial wave.                 </option>
<option value="115106085/mod01lec11.mp4">Quantum Theory of collisions: Levinson�s theorem                                           </option>
<option value="115106085/mod01lec12.mp4">Quantum Theory of collisions: Levinson�s theorem.                                          </option>
<option value="115106085/mod02lec13.mp4">Many body theory, electron correlations                                                    </option>
<option value="115106085/mod02lec14.mp4">Second Quantization Creation, Destruction and Number operators                             </option>
<option value="115106085/mod02lec15.mp4">Many-particle Hamiltonian & Schrodinger Equation in 2nd Quantization                       </option>
<option value="115106085/mod03lec16.mp4">Many-electron problem in quantum mechanics                                                 </option>
<option value="115106085/mod03lec17.mp4">Hartree-Fock Self-Consistent-Field                                                         </option>
<option value="115106085/mod03lec18.mp4">Exchange, Statistical, Fermi-Dirac correlations                                            </option>
<option value="115106085/mod03lec19.mp4">Limitations of the Hartree-Fock Self-Consistent-Field formalism                            </option>
<option value="115106085/mod03lec20.mp4">Many-Body formalism, II Quantization                                                       </option>
<option value="115106085/mod03lec21.mp4">Density fluctuations in an electron gas                                                    </option>
<option value="115106085/mod03lec22.mp4">Bohm-Pines approach to Random Phase Approximation                                          </option>
<option value="115106085/mod03lec23.mp4">Bohm-Pines approach to Random Phase Approximation.                                         </option>
<option value="115106085/mod03lec24.mp4">Bohm-Pines approach to Random Phase Approximation..                                        </option>
<option value="115106085/mod04lec25.mp4">Schrodinger, Heisenberg and Dirac �pictures� of QM                                         </option>
<option value="115106085/mod04lec26.mp4">Dyson�s chronological operator                                                             </option>
<option value="115106085/mod04lec27.mp4">Gell-Mann-Low Theorem                                                                      </option>
<option value="115106085/mod04lec28.mp4">Reyleigh-Schrodinger perturbation methods and adiabatic switching                          </option>
<option value="115106085/mod04lec29.mp4">Feynman Diagrams                                                                           </option>
<option value="115106085/mod04lec30.mp4">I Order Feynman Diagrams                                                                   </option>
<option value="115106085/mod04lec31.mp4">II and higher order Feynman Diagrams                                                       </option>
<option value="115106085/mod04lec32.mp4">Linear response of electron correlations                                                   </option>
<option value="115106085/mod05lec33.mp4">Lippman Schwinger equation of potential scattering                                         </option>
<option value="115106085/mod05lec34.mp4">Born Approximation                                                                         </option>
<option value="115106085/mod05lec35.mp4">Coulomb scattering                                                                         </option>
<option value="115106085/mod05lec36.mp4">Scattering of partial waves                                                                </option>
<option value="115106085/mod06lec37.mp4">Scattering at high energy                                                                  </option>
<option value="115106085/mod06lec38.mp4">Resonances in Quantum Collisions                                                           </option>
<option value="115106085/mod06lec39.mp4">Breit-Wigner Resonances                                                                    </option>
<option value="115106085/mod07lec40.mp4">Fano parameterization of Breit-Wigner formula                                              </option>
<option value="115106085/mod07lec41.mp4">Discrete state embedded in the continuum                                                   </option>
<option value="115106085/mod07lec42.mp4">Resonance life times                                                                       </option>
<option value="115106085/mod07lec43.mp4">Wigner-Eisenbud formalism of time-delay in scattering                                      </option>
<option value="115106085/mod08lec44.mp4">Photoionization and Photoelectron Angular Distributions                                    </option>
<option value="115106085/mod08lec45.mp4">Ionization and Excitation of Atoms by Fast Charged Particles                               </option>
<option value="115106085/mod08lec46.mp4">Photo-absorption by Free and Confined Atoms and Ions: Recent Developments                  </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115108074</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Relativistic Quantum Mechanics </strong></td>
	<td><strong>Prof. Apoorva D Patel</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="115108074/mod01lec01.mp4">Introduction, The Klein-Gordon equation                                                                                                           </option>
<option value="115108074/mod01lec02.mp4">Particles and antiparticles, Two component framework                                                                                              </option>
<option value="115108074/mod01lec03.mp4">Coupling to electromagnetism, Solution of the Coulomb problem                                                                                     </option>
<option value="115108074/mod01lec04.mp4">Bohr-Sommerfeld semiclassical solution of the Coulomb problem, The Dirac equation and the Clifford algebra                                        </option>
<option value="115108074/mod01lec05.mp4">Dirac matrices, Covariant form of the Dirac equation, Equations of motion, Spin, Free particle solutions                                          </option>
<option value="115108074/mod01lec06.mp4">Electromagnetic interactions, Gyromagnetic ratio                                                                                                  </option>
<option value="115108074/mod01lec07.mp4">The Hydrogen atom problem, Symmetries, Parity, Separation of variables                                                                            </option>
<option value="115108074/mod01lec08.mp4">The Frobenius method solution, Energy levels and wavefunctions                                                                                    </option>
<option value="115108074/mod01lec09.mp4">Non-relativistic reduction, The Foldy-Wouthuysen transformation                                                                                   </option>
<option value="115108074/mod01lec10.mp4">Interpretation of relativistic corrections, Reflection from a potential barrier                                                                   </option>
<option value="115108074/mod01lec11.mp4">The Klein paradox, Pair creation process and examples                                                                                             </option>
<option value="115108074/mod01lec12.mp4">Zitterbewegung, Hole theory and antiparticles                                                                                                     </option>
<option value="115108074/mod01lec13.mp4">Charge conjugation symmetry, Chirality, Projection operators, The Weyl equation                                                                   </option>
<option value="115108074/mod01lec14.mp4">Weyl and Majorana representations of the Dirac equation,  Unitary and antiunitary symmetries                                                      </option>
<option value="115108074/mod01lec15.mp4">Time reversal symmetry, The PCT invariance                                                                                                        </option>
<option value="115108074/mod01lec16.mp4">Arrow of time and particle-antiparticle asymmetry, Band theory for graphene                                                                       </option>
<option value="115108074/mod01lec17.mp4">Dirac equation structure of low energy graphene states, Relativistic signatures in graphene properties                                            </option>
<option value="115108074/mod02lec18.mp4">Groups and symmetries, The Lorentz and Poincare groups                                                                                            </option>
<option value="115108074/mod02lec19.mp4">Group representations, generators and algebra, Translations, rotations and boosts                                                                 </option>
<option value="115108074/mod02lec20.mp4">The spinor representation of SL(2,C), The spin-statistics theorem                                                                                 </option>
<option value="115108074/mod02lec21.mp4">Finite dimensional representations of the Lorentz group, Euclidean and Galilean groups                                                            </option>
<option value="115108074/mod02lec22.mp4">Classification of one particle states, The little group, Mass, spin and helicity                                                                  </option>
<option value="115108074/mod02lec23.mp4">Massive and massless one particle states                                                                                                          </option>
<option value="115108074/mod02lec24.mp4">P and T transformations, Lorentz covariance of spinors                                                                                            </option>
<option value="115108074/mod02lec25.mp4">Lorentz group classification of Dirac operators, Orthogonality and completeness of Dirac spinors, Projection operators                            </option>
<option value="115108074/mod03lec26.mp4">Propagator theory, Non-relativistic case and causality                                                                                            </option>
<option value="115108074/mod03lec27.mp4">Relativistic case, Particle and antiparticle contributions, Feynman prescription and the propagator                                               </option>
<option value="115108074/mod03lec28.mp4">Interactions and formal perturbative theory, The S-matrix and Feynman diagrams                                                                    </option>
<option value="115108074/mod03lec29.mp4">Trace theorems for products of Dirac matrices                                                                                                     </option>
<option value="115108074/mod03lec30.mp4">Photons and the gauge symmetry                                                                                                                    </option>
<option value="115108074/mod03lec31.mp4">Abelian local gauge symmetry, The covariant derivative and invariants                                                                             </option>
<option value="115108074/mod03lec32.mp4">Charge quantisation, Photon propagator, Current conservation and polarisations                                                                    </option>
<option value="115108074/mod03lec33.mp4">Feynman rules for Quantum Electrodynamics, Nature of perturbative expansion                                                                       </option>
<option value="115108074/mod03lec34.mp4">Dyson's analysis of the perturbation series, Singularities of the S-matrix, Elementary QED processes                                              </option>
<option value="115108074/mod03lec35.mp4">The T-matrix, Coulomb scattering                                                                                                                  </option>
<option value="115108074/mod03lec36.mp4">Mott cross-section, Compton scattering                                                                                                            </option>
<option value="115108074/mod03lec37.mp4">Klein-Nishina result for cross-section                                                                                                            </option>
<option value="115108074/mod03lec38.mp4">Photon polarisation sums, Pair production through annihilation                                                                                    </option>
<option value="115108074/mod03lec39.mp4">Unpolarised and polarised cross-sections                                                                                                          </option>
<option value="115108074/mod03lec40.mp4">Helicity properties, Bound state formation                                                                                                        </option>
<option value="115108074/mod03lec41.mp4">Bound state decay, Non-relativistic potentials                                                                                                    </option>
<option value="115108074/mod03lec42.mp4">Lagrangian formulation of QED, Divergences in Green's functions, Superficially divergent 1-loop diagrams and regularisation                       </option>
<option value="115108074/mod03lec43.mp4">Infrared divergences due to massless particles, Renormalisation and finite physical results                                                       </option>
<option value="115108074/mod03lec44.mp4">Symmetry constraints on Green's functions, Furry's theorem, Ward-Takahashi identity, Spontaneous breaking of gauge symmetry and superconductivity </option>
<option value="115108074/mod03lec45.mp4">Status of QED, Organisation of perturbative expansion, Precision tests                                                                            |</option>
</select></td>
	
	</tr>
	</form>

    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>115105083</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Osillation and Wave</strong></td>
	<td><strong>Prof. S.P. Kastagir Prof. S. Bharadwaj</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
   <option  value="115105083/Lec1.pdf">Oscillations</option>
 <option  value="115105083/Lec2.pdf">The Damped Oscillator</option>
 <option  value="115105083/Lec3.pdf"> The Damped Oscillator-II</option>
 <option  value="115105083/Lec4.pdf">Oscillator with external forcing-I</option>
 <option  value="115105083/Lec5.pdf">Oscillator with external forcing-II</option>
 <option  value="115105083/Lec6.pdf">Resonance</option>
 <option  value="115105083/Lec7.pdf">Coupled Oscillators</option>
 <option  value="115105083/Lec8.pdf">Sinusoidal Waves</option>
 <option  value="115105083/Lec9.pdf">Electromagnetic Waves-I</option>
 <option  value="115105083/Lec10.pdf"> Electromagnetic Waves-II</option>
 <option  value="115105083/Lec - 11.pdf">The vector nature of electromagnetic radiation</option>
 <option  value="115105083/Lec -12.pdf">The Spectrum of Electromagnetic Radiation</option>
 <option  value="115105083/lec-13.pdf">Interference-I</option>
 <option  value="115105083/lec-14.pdf">Interference-II</option>
 <option  value="115105083/lec-15.pdf"> Interference-III</option>
 <option  value="115105083/lec-16.pdf">Interference-IV</option>
 <option  value="115105083/lec-17.pdf">Coherence</option>
 <option  value="115105083/lec-18.pdf">Diffraction-I</option>
 <option  value="115105083/lec-19.pdf">Diffraction- II</option>
 <option  value="115105083/lec-20.pdf"> Diffraction-III</option>
 <option  value="115105083/lec-21.pdf">X-ray Diffraction</option>
 <option  value="115105083/lec-22.pdf">Beats</option>
 <option  value="115105083/lec-23.pdf">The wave equation-I</option>
 <option  value="115105083/lec-24.pdf">The wave equation-II</option>
 <option  value="115105083/lec-25.pdf">The wave equation-III</option>
 <option  value="115105083/lec-26.pdf">Polarization-I</option>
 <option  value="115105083/lec-27.pdf">Polarization-II</option>
 <option  value="115105083/lec-28.pdf"> Wave-particle duality-I</option>
 <option  value="115105083/lec-29.pdf">Wave-particle duality-II</option>
 <option  value="115105083/lec-30.pdf">Interpreting the electron wave</option>
 <option  value="115105083/lec-31.pdf">Probability-I</option>
 <option  value="115105083/lec-32.pdf"> Probability-II</option>
 <option  value="115105083/lec-33.pdf">Basic Postulates</option>
 <option  value="115105083/lec-34.pdf">Operators in Quantum Mechanics</option>
 <option  value="115105083/lec-35.pdf">Algebra of Operators</option>
 <option  value="115105083/lec-36.pdf"> Uncertainty relation</option>
 <option  value="115105083/lec-37.pdf">Particle in a potential</option>
 <option  value="115105083/lec-38.pdf">Particle in a box (Contd.)</option>
 <option  value="115105083/lec-39.pdf"> Step potentials</option>
 <option  value="115105083/lec-40.pdf">Step potentials</option>









          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>115106086</strong></td>
	<td><strong>Physics</strong></td>
	<td><strong>Selected Topics in Mathematical Physics</strong></td>
	<td><strong>Prof. V. Balakrishnan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'> <option  value="#">Select </option>
      
      <option value="115106086/Lecture-01.mp4"> Lecture-01</option>
<option value="115106086/Lecture-02.mp4"> Lecture-02</option>
<option value="115106086/Lecture-03.mp4"> Lecture-03</option>
<option value="115106086/Lecture-04.mp4"> Lecture-04</option>
<option value="115106086/Lecture-05.mp4"> Lecture-05</option>
<option value="115106086/Lecture-06.mp4"> Lecture-06</option>
<option value="115106086/Lecture-07.mp4"> Lecture-07</option>
<option value="115106086/Lecture-08.mp4"> Lecture-08</option>
<option value="115106086/Lecture-09.mp4"> Lecture-09</option>
<option value="115106086/Lecture-10.mp4"> Lecture-10</option>
<option value="115106086/Lecture-11.mp4"> Lecture-11</option>
<option value="115106086/Lecture-12.mp4"> Lecture-12</option>
<option value="115106086/Lecture-13.mp4"> Lecture-13</option>
<option value="115106086/Lecture-14.mp4"> Lecture-14</option>
<option value="115106086/Lecture-15.mp4"> Lecture-15</option>
<option value="115106086/Lecture-16.mp4"> Lecture-16</option>
<option value="115106086/Lecture-17.mp4"> Lecture-17</option>
<option value="115106086/Lecture-18.mp4"> Lecture-18</option>
<option value="115106086/Lecture-19.mp4"> Lecture-19</option>
<option value="115106086/Lecture-20.mp4"> Lecture-20</option>
<option value="115106086/Lecture-21.mp4"> Lecture-21</option>
<option value="115106086/Lecture-22.mp4"> Lecture-22</option>
<option value="115106086/Lecture-23.mp4"> Lecture-23</option>
<option value="115106086/Lecture-24.mp4"> Lecture-24</option>
<option value="115106086/Lecture-25.mp4"> Lecture-25</option>
<option value="115106086/Lecture-26.mp4"> Lecture-26</option>
<option value="115106086/Lecture-27.mp4"> Lecture-27</option>
<option value="115106086/Lecture-28.mp4"> Lecture-28</option>
<option value="115106086/Lecture-29.mp4"> Lecture-29</option>
<option value="115106086/Lecture-30.mp4"> Lecture-30</option>
<option value="115106086/Lecture-31.mp4"> Lecture-31</option>
<option value="115106086/Lecture-32.mp4"> Lecture-32</option>
<option value="115106086/Lecture-33.mp4"> Lecture-33</option>
<option value="115106086/Lecture-34.mp4"> Lecture-34</option>
<option value="115106086/Lecture-35.mp4"> Lecture-35</option>


          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>119106008</strong></td>
      <td><strong>Physics</strong></td>
      <td><strong>NUCLEAR REACTORS AND SAFETY- AN INTRODUCTION</strong></td>
      <td><strong>Dr.G.Vaidyanathan</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="115106087/mod01lec01.mp4">Energy Sources</option>
          <option  value="115106087/mod01lec02.mp4">Nuclear Power Production Cycle</option>
          <option  value="115106087/mod02lec03.mp4">Basic Physics of Nuclear Fission</option>
          <option  value="115106087/mod02lec04.mp4">Basic Physics of Nuclear Fission Cont</option>
          <option  value="115106087/mod03lec05.mp4">Nuclear Reactors</option>
          <option  value="115106087/mod03lec06.mp4">Reactors Generation</option>
          <option  value="115106087/mod04lec07.mp4">Radiation Sources and Protection</option>
          <option  value="115106087/mod04lec08.mp4">Biological Effects of Radiation</option>
          <option  value="115106087/mod05lec09.mp4">Safety Principles</option>
          <option  value="115106087/mod05lec10.mp4">Safety Principles Cont..</option>
          <option  value="115106087/mod06lec11.mp4">Safety Approach</option>
          <option  value="115106087/mod06lec12.mp4"> Risk and Probabilistic safety analysis (PSA) </option>
          <option  value="115106087/mod07lec13.mp4">History of Events in Nuclear Power Plants and Radiation facilities </option>
          <option  value="115106087/mod07lec14.mp4">Other Events</option>
          <option  value="115106087/mod08lec15.mp4">Validation and Dynamic Analysis</option>
          <option  value="115106087/mod08lec16.mp4">Validation and Dynamic Analysis Cont..</option>
          <option  value="115106087/mod09lec17.mp4">Quality Assurance</option>
          <option  value="115106087/mod10lec18.mp4">Siting of Nuclear Plants</option>
          <option  value="115106087/mod10lec19.mp4">Siting of Nuclear Plants Cont..</option>
          <option  value="115106087/mod11lec20.mp4">Engineered Safety Systems</option>
          <option  value="115106087/mod11lec21.mp4">Engineered Safety Systems Cont..</option>
          <option  value="115106087/mod12lec22.mp4"> Assessment of Radiological Consequences of Incidents </option>
          <option  value="115106087/mod13lec23.mp4">Safety Regulation in India</option>
          <option  value="115106087/mod13lec24.mp4">Safety Regulation in India Cont..</option>
          <option  value="115106087/mod13lec25.mp4">Safety Regulation in India Cont...</option>
          <option  value="115106087/mod14lec26.mp4">Safety Practices in Indian NPPs </option>
          <option  value="115106087/mod14lec27.mp4">Safety Practices in Indian NPPs Cont</option>
          <option  value="115106087/mod14lec28.mp4">Safety Practices in Indian NPPs Cont...</option>
          <option  value="115106087/mod15lec29.mp4">Passive Safety</option>
          <option  value="115106087/mod15lec30.mp4">Passive Safety Cont...</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>115106090</strong></td>
      <td><strong>Physics</strong></td>
      <td><strong>NOC: Mechanics, heat oscillations and waves</strong></td>
      <td><strong>Prof. V. Balakrishnan</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="115106090/mod01lec01.mp4">The Nature of Physical Laws</option>
          <option  value="115106090/mod01lec02.mp4">Fundamental Constants & Dimensional Analysis</option>
          <option  value="115106090/mod01lec03.mp4">Dimensional analysis and scaling.</option>
          <option  value="115106090/mod01lec04.mp4">sketching Elementary Functions</option>
          <option  value="115106090/mod01lec05.mp4">The fundamental forces of nature.</option>
          <option  value="115106090/mod02lec06.mp4">Scalars,Victors & All That</option>
          <option  value="115106090/mod02lec07.mp4">Plane Polar Coordinates</option>
          <option  value="115106090/mod02lec08.mp4">Vectors In a Plane,Scalars & Pseudoscalars</option>
          <option  value="115106090/mod02lec09.mp4">Kinematics In a Plane</option>
          <option  value="115106090/mod02lec10.mp4">Vectors in 3- Dimensional Space</option>
          <option  value="115106090/mod03lec11.mp4">Vectors in 3-dimensional space (continued)</option>
          <option  value="115106090/mod03lec12.mp4">The Finite Rotation Formula, Polar Coordinates in 3-dimensions</option>
          <option  value="115106090/mod03lec13.mp4">Cylindrical and Spherical polar coordinates</option>
          <option  value="115106090/mod03lec14.mp4">Motion in a circle - Acceleration</option>
          <option  value="115106090/mod03lec15.mp4">Newtons laws of motion</option>
          <option  value="115106090/mod04lec16.mp4">Conservation Laws and Newtons Equations</option>
          <option  value="115106090/mod04lec17.mp4">Conservation of Angular Momentum</option>
          <option  value="115106090/mod04lec18.mp4">Two-Body Scattering</option>
          <option  value="115106090/mod04lec19.mp4">Two-Body Collision Kinematics</option>
          <option  value="115106090/mod04lec20.mp4">Conservative Forces - The Concept of a Potential</option>
          <option  value="115106090/mod05lec21.mp4">Central Potential and Central Force</option>
          <option  value="115106090/mod05lec22.mp4">The 2-Body Central Force Problem</option>
          <option  value="115106090/mod05lec23.mp4">Keplers Laws of Planetary Motion</option>
          <option  value="115106090/mod05lec24.mp4">Non-Inertial Forces ("Pseudo-forces")</option>
          <option  value="115106090/mod05lec25.mp4">More on the Kepler problem; Satellite motion</option>
          <option  value="115106090/mod06lec26.mp4">Linear Elasticity of Solids</option>
          <option  value="115106090/mod06lec27.mp4">Simple Harmonic Motion</option>
          <option  value="115106090/mod06lec28.mp4">Some Physical Examples of Simple Harmonic Motion</option>
          <option  value="115106090/mod06lec29.mp4">More on Simple Harmonic Motion</option>
          <option  value="115106090/mod06lec30.mp4">Damped Simple Harmonic Motion</option>
          <option  value="115106090/mod07lec31.mp4">Wave Motion - Travelling and Standing Waves</option>
          <option  value="115106090/mod07lec32.mp4">Wave Motion - Wave Equation, General Solution</option>
          <option  value="115106090/mod07lec33.mp4">Fluid Dynamics - Hydrostatic Equilibrium</option>
          <option  value="115106090/mod07lec34.mp4">Fluid Dynamics - Equation of Continuity</option>
          <option  value="115106090/mod07lec35.mp4">Fluid Flow - Bernoullis Principle</option>
          <option  value="115106090/mod08lec36.mp4">Circulation and Vorticity</option>
          <option  value="115106090/mod08lec37.mp4">What is Thermodynamics?</option>
          <option  value="115106090/mod08lec38.mp4">The Classical Ideal Gas</option>
          <option  value="115106090/mod08lec39.mp4">The Laws of Thermodynamics</option>
          <option  value="115106090/mod08lec40.mp4">Specific Heat of an Ideal Gas</option>
          <option  value="115106090/mod08lec41.mp4">Van der Waals Equation</option>
          <option  value="115106090/mod08lec42.mp4">Phase Transitions</option>
          <option  value="115106090/mod08lec43.mp4">Summary</option>
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
