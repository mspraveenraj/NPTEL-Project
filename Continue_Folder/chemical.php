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
<title>Chemical</title>
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
	<td><strong>103101001</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Advanced Chemical Reaction Engineering (PG)</strong></td>
	<td><strong>Prof. H.S. Shankar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
   <option  value="103101001/mod01lec01.mp4">L1-Course Overview � I                                                                                              </option>
<option  value="103101001/mod01lec02.mp4">L2-Course Overview � II                                                                                             </option>
<option  value="103101001/mod01lec03.mp4">L3-Design Equations � I                                                                                             </option>
<option  value="103101001/mod01lec04.mp4">L4-Design Equations � Illustrative Examples                                                                         </option>
<option  value="103101001/mod01lec05.mp4">L5-Design Equations II : Plug Flow Recycle Reactors                                                                 </option>
<option  value="103101001/mod01lec06.mp4">L6-Illustrative Examples :1) Plug Flow Recycle  2) Multiple reactions � I                                           </option>
<option  value="103101001/mod01lec07.mp4">L7-Illustrative Examples :1) Recycle Reactor with Condenser 2) CSTR with Recycle                                    </option>
<option  value="103101001/mod01lec08.mp4">L8-Multiple Reactions � II                                                                                          </option>
<option  value="103101001/mod01lec09.mp4">L9-Modelling Multiple Reactions in Soil Environment � III                                                           </option>
<option  value="103101001/mod01lec10.mp4">L10-Semi Continuous Reactor Operation                                                                               </option>
<option  value="103101001/mod01lec11.mp4">L11-Catalyst Deactivation � I                                                                                       </option>
<option  value="103101001/mod01lec12.mp4">L12-Catalyst Deactivation � II                                                                                      </option>
<option  value="103101001/mod01lec13.mp4">L13-Illustrative Example : 1) Determination of deactivation Parameters 2) Design for Deactivating Catalyst          </option>
<option  value="103101001/mod01lec14.mp4">L14-Energy Balance � I                                                                                              </option>
<option  value="103101001/mod01lec15.mp4">L15-Energy Balance � II                                                                                             </option>
<option  value="103101001/mod01lec16.mp4">L16-Reacting Fluids as Energy Carrier                                                                               </option>
<option  value="103101001/mod01lec17.mp4">L17-Illustrative Example : Energy Balance in Stirred Vessels                                                        </option>
<option  value="103101001/mod01lec18.mp4">L18-Energy Balance � III : Design for Constant T Operation                                                          </option>
<option  value="103101001/mod01lec19.mp4">L19-Energy Balance � IV : Temperature Effects on Rate & Equilibria                                                  </option>
<option  value="103101001/mod01lec20.mp4">L20-Energy Balance � V : Stability Analysis of Exothermic Stirred Tank                                              </option>
<option  value="103101001/mod01lec21.mp4">L21-Illustrative Example : Stability of Exothermic Stirred Tank                                                     </option>
<option  value="103101001/mod01lec22.mp4">L22-Energy Balance � VI : 1) Tubular Reactor Heated/Cooled from Wall 2) Transient Behavior of CSTR                  </option>
<option  value="103101001/mod01lec23.mp4">L23-Illustrative Example : 1) Plug Flow with Heat Effects  2) Multiple Reactions                                    </option>
<option  value="103101001/mod01lec24.mp4">L24-Illustrative Example : 1) Further Considerations in Energy Balance 2) Multiple Reactions                        </option>
<option  value="103101001/mod01lec25.mp4">L25-Illustrative Example : 1) Hot Spot as Design Basis 2) Design for Instantaneous Reactions                        </option>
<option  value="103101001/mod01lec26.mp4">L26-Residence Time Distribution Methods                                                                             </option>
<option  value="103101001/mod01lec27.mp4">L27-Residence Time Distribution Models                                                                              </option>
<option  value="103101001/mod01lec28.mp4">L28-Shrinking core Gas-Solid reactions Model                                                                        </option>
<option  value="103101001/mod01lec29.mp4">L29-Shrinking core Ash Diffusion Model & Combination of Resistances                                                 </option>
<option  value="103101001/mod01lec30.mp4">L30-1) Gas Solid Reactions Temperature Effects on Rate & Equilibria 2) Introduction to Population Balance �I        </option>
<option  value="103101001/mod01lec31.mp4">L31-Illustrative Example : Temperature Effects on Rate & Equilibria                                                 </option>
<option  value="103101001/mod01lec32.mp4">L32-Population Balance Modelling � II                                                                               </option>
<option  value="103101001/mod01lec33.mp4">L33-Population Balance Modelling � III                                                                              </option>
<option  value="103101001/mod01lec34.mp4">L34-Illustrative Examples : Population Balance Models                                                               </option>
<option  value="103101001/mod01lec35.mp4">L35-Introduction to Environmental Reactions                                                                         </option>
<option  value="103101001/mod01lec36.mp4">L36-Reaction Engineering Examples in Biochemical & Environmental Engineering                                        </option>
<option  value="103101001/mod01lec37.mp4">L37-Illustrative Examples : 1) Biomethanation 2) Alcohol via Fermentation 3) Natural Selection                      </option>
<option  value="103101001/mod01lec38.mp4">L38-Illustrative Examples : 1) Enzyme Reaction 2) Microbial Reaction 3) Waste Treatment                             </option>
<option  value="103101001/mod01lec39.mp4">L39-Oxygen Sag Analysis in Rivers                                                                                   </option>
<option  value="103101001/mod01lec40.mp4">L40-Illustrative Examples : 1) Oxygen Sag Analysis 2) Population Balance Modelling of Forest 3) Sponge Iron Process </option>
<option  value="103101001/mod01lec41.mp4">L41-Illustrative Example : Gas- Solid Reaction RTD Models Reaction Network </option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103101003</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Advanced Process Control </strong></td>
	<td><strong>Prof. Sachin C. Patwardhan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
<option  value="103101003/mod01lec01.mp4">Lecture 1-Introduction and Motivation                                                                                </option>
<option  value="103101003/mod01lec02.mp4">Lecture 2-Linearization of Mechanistic Models                                                                        </option>
<option  value="103101003/mod01lec03.mp4">Lecture 3-Linearization of Mechanistic Models (Contd.)                                                               </option>
<option  value="103101003/mod01lec04.mp4">Lecture 4-Introduction to z-transforms and Development of Grey-box models                                            </option>
<option  value="103101003/mod01lec05.mp4">Lecture 5-Introduction to Stability Analysis and Development of Output Error Models                                  </option>
<option  value="103101003/mod01lec06.mp4">Lecture 6-Introduction to Stochastic Processes                                                                       </option>
<option  value="103101003/mod01lec07.mp4">Lecture 7-Introduction to Stochastic Processes (Contd.)                                                              </option>
<option  value="103101003/mod01lec08.mp4">Lecture 8-Development of ARX models                                                                                  </option>
<option  value="103101003/mod01lec09.mp4">Lecture 9-Statistical Properties of ARX models and Development of ARMAX models                                       </option>
<option  value="103101003/mod01lec10.mp4">Lecture 10-Development of ARMAX models (contd.) and Issues in Model Development                                      </option>
<option  value="103101003/mod01lec11.mp4">Lecture 11-Model Structure Selection and Issues in Model Development (contd.)                                        </option>
<option  value="103101003/mod01lec12.mp4">Lecture 12-Issues in Model Development (contd.) and State Realizations of Transfer Function Models                   </option>
<option  value="103101003/mod01lec13.mp4">Lecture 13-Stability Analysis of Discrete Time Systems                                                               </option>
<option  value="103101003/mod01lec14.mp4">Lecture 14-Lyapunov Functions and Interaction Analysis and Multi-loop Control                                        </option>
<option  value="103101003/mod01lec15.mp4">Lecture 15-Interaction Analysis and Multi-loop Control (contd.)                                                      </option>
<option  value="103101003/mod01lec16.mp4">Lecture 16-Multivariable Decoupling Control and Soft Sensing and State Estimation                                    </option>
<option  value="103101003/mod01lec17.mp4">Lecture 17-Development of Luenberger Observer                                                                        </option>
<option  value="103101003/mod01lec18.mp4">Lecture 18-Development of Luenberger Observer (contd.) and Introduction to Kalman Filtering                          </option>
<option  value="103101003/mod01lec19.mp4">Lecture 19-Kalman Filtering                                                                                          </option>
<option  value="103101003/mod01lec20.mp4">Lecture 20-Kalman Filtering (contd.)                                                                                 </option>
<option  value="103101003/mod01lec21.mp4">Lecture 21-Kalman Filtering (contd.)                                                                                 </option>
<option  value="103101003/mod01lec22.mp4">Lecture 22-Pole Placement State Feedback Control Design and Introduction to Linear Quadratic Gaussian (LQG) Control  </option>
<option  value="103101003/mod01lec23.mp4">Lecture 23-Linear Quadratic Gaussian (LQG) Regulator Design                                                          </option>
<option  value="103101003/mod01lec24.mp4">Lecture 24-Linear Quadratic Gaussian (LQG) Controller Design                                                         </option>
<option  value="103101003/mod01lec25.mp4">Lecture 25-Model Predictive Control (MPC)                                                                            </option>
<option  value="103101003/mod01lec26.mp4">Lecture 26-Model Predictive Control (contd.)        </option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103101004</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Chemical Engineering Thermodynamics</strong></td>
	<td><strong>Dr. Sandip Roy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103101004/modules/chapter-1/sec-1/coverpage.html">Section 1 : Introduction</option>
      
      <option  value="103101004/modules/chapter-1/sec-2/1.1.html">Section 2 : Thermodynamic System: Select Definitions</option>
      
      <option  value="103101004/modules/chapter-1/sec-3/1.1.html">Section 3 : Types of Energies associated with Thermodynamic Processes</option>
      
      <option  value="103101004/modules/chapter-1/sec-4/1.1.html">Section 4 : Thermodynamic Equilibrium</option>
      
      <option  value="103101004/modules/chapter-1/sec-5/1.1.html">Section 5 : The Phase Rule</option>
      
      <option  value="103101004/modules/chapter-1/sec-6/1.1.html">	Section 6 : Zeroth Law of Thermodynamics and Absolute Temperature</option>
      
      <option  value="103101004/modules/chapter-1/sec-7/1.1.html">Section 7 : The Ideal Gas</option>
      
      <option  value="103101004/modules/chapter-1/sec-8/1.1.html">	Section 8 : State and Path Dependent Thermodynamic Variables </option>
      
      <option  value="103101004/modules/chapter-1/sec-9/1.1.html">Section 9 : Reversible and Irreversible Thermodynamic Processes</option>
      
      <option  value="103101004/modules/chapter-1/sec-10/1.1.html">Section 10 :Significance of Chemical Engineering Thermodynamics:  Process Plant Schema</option>
      
      <option  value="103101004/modules/chapter-2/sec-1/1.1.html">Section 1 : General P-V-T Behaviour of Real Fluids</option>
      
      <option  value="103101004/modules/chapter-2/sec-2/1.1.html">Section 2 : Origins of Deviation from Ideal Gas Behaviour</option>
      
      <option  value="103101004/modules/chapter-2/sec-3/1.1.html">Section 3 : Equations of State for Real Fluids</option>
      
      <option  value="103101004/modules/chapter-2/sec-4/1.1.html">Section 4 : Volumetric Properties of Mixtures</option>
      
      <option  value="103101004/modules/chapter-2/sec-5/1.1.html">Section 5 : Property Representation of 2-phase systems</option>
      
      <option  value="103101004/modules/chapter-2/sec-6/1.1.html">Section 6 : Heat Effects of Phase Change</option>
      
      <option  value="103101004/modules/chapter-3/sec-1/1.1.html">Section 1 : Concept of Internal Energy</option>
      
      <option  value="103101004/modules/chapter-3/sec-2/1.1.html">Section 2 : The First Law of Thermodynamics</option>
      
      <option  value="103101004/modules/chapter-3/sec-3/1.1.html">Section 3 : Application of the First Law to Open Systems</option>
      
      <option  value="103101004/modules/chapter-3/sec-4/1.1.html">Section 4 : Measurement of Enthalpy and Internal Energy using Flow Calorimeter</option>
      
      <option  value="103101004/modules/chapter-4/sec-1/1.1.html">Section 1 : Heat Engins and Second Law Statements</option>
      
      <option  value="103101004/modules/chapter-4/sec-2/1.1.html">Section 2 : Carnot Heat Engine Cycle and the 2nd Law</option>
      
      <option  value="103101004/modules/chapter-4/sec-3/1.1.html">Section 3 : Entropy Calculations for Ideal Gases</option>
      
      <option  value="103101004/modules/chapter-4/sec-4/1.1.html">Section 4 : Mathematical Statement of the 2nd Law</option>
      
      <option  value="103101004/modules/chapter-4/sec-5/1.1.html">Section 5 : Entropy Balance for Open Systems</option>
      
      <option  value="103101004/modules/chapter-4/sec-6/1.1.html">Section 6 : Ideal and Lost Work for Flow Systems</option>
      
      <option  value="103101004/modules/chapter-4/sec-7/1.1.html">Section 7: Appendix 4.1</option>
      
      <option  value="103101004/modules/chapter-5/sec-1/1.1.html">Section 1 : Thermodynamic Property Relations for Single Phase Systems</option>
      
      <option  value="103101004/modules/chapter-5/sec-2/1.1.html">Section 2 : Maxwell Relations</option>
      
      <option  value="103101004/modules/chapter-5/sec-3/1.1.html">Section 3 : Relations for Enthalpy, Entropy and Internal Energy</option>
      
      <option  value="103101004/modules/chapter-5/sec-4/1.1.html">Section 4 : Residual Property Relations</option>
      
      <option  value="103101004/modules/chapter-5/sec-5/1.1.html">Section 5 : Residual Property Calculation from EOS</option>
      
      <option  value="103101004/modules/chapter-5/sec-6/1.1.html">Section 6 : Generalized Correlations for computing dH and dS for a real gas</option>
      
      <option  value="103101004/modules/chapter-5/sec-7/1.1.html">Section 7 : Computation of ?H and ?S for a Gas using Generalized Departure Functions</option>
      
      <option  value="103101004/modules/chapter-5/sec-8/1.1.html">Section 8 : Extension to Gas Mixtures</option>
      
      <option  value="103101004/modules/chapter-5/sec-9/1.1.html">Section 9 : Relations for ?H and ?S for Liquids</option>
      
      <option  value="103101004/modules/chapter-5/sec-10/1.1.html">Section 10 : Applications to real fluid processes in process plant equipments</option>
      
      <option  value="103101004/modules/chapter-6/sec-1/1.1.html">Section 1 : Partial Molar Property </option>
      
      <option  value="103101004/modules/chapter-6/sec-2/1.1.html">Section 2 : Partial Properties for Binary Solutions</option>
      
      <option  value="103101004/modules/chapter-6/sec-3/1.1.html">Section 3 : Criteria of Thermodynamic Equilibrium</option>
      
      <option  value="103101004/modules/chapter-6/sec-4/1.1.html">Section 4 : The Chemical Potential</option>
      
      <option  value="103101004/modules/chapter-6/sec-5/1.1.html">Section 5 : Ideal Gas Mixtures and Liquid Solutions</option>
      
      <option  value="103101004/modules/chapter-6/sec-6/1.1.html">Section 6 : Excess Properties</option>
      
      <option  value="103101004/modules/chapter-6/sec-7/1.1.html">Section 7 : Fugacity of pure substances </option>
      
      <option  value="103101004/modules/chapter-6/sec-8/1.1.html">Section 8 : Fugacity-based phase equilibrium criterion for pure component system</option>
      
      <option  value="103101004/modules/chapter-6/sec-9/1.1.html">Section 9 : Fugacity expressions for pure gases</option>
      
      <option  value="103101004/modules/chapter-6/sec-10/1.1.html">Section 10 : Generalized Correlations for the Fugacity Coefficient</option>
      
      <option  value="103101004/modules/chapter-6/sec-11/1.1.html">Section 11 : Expression for Fugacity of a Pure Liquid</option>
      
      <option  value="103101004/modules/chapter-6/sec-12/1.1.html">Section 12 : Fugacity and Fugacity Coefficient of Species in Mixture</option>
      
      <option  value="103101004/modules/chapter-6/sec-13/1.1.html">Section 13 :Relation between residual property and species fugacity coefficients in  	mixtures</option>
      
      <option  value="103101004/modules/chapter-6/sec-14/1.1.html">Section 14 : Expressions for gas phase using EOS</option>
      
      <option  value="103101004/modules/chapter-6/sec-15/1.1.html">Section 15 : The Lewis/Randall Rule</option>
      
      <option  value="103101004/modules/chapter-6/sec-16/1.1.html">Section 16 : Dependence of Excess Gibbs free energy on temperature and pressure</option>
      
      <option  value="103101004/modules/chapter-6/sec-17/1.1.html">Section 17 : The Activity Coefficient</option>
      
      <option  value="103101004/modules/chapter-6/sec-18/1.1.html">Section 18 : Use of VLE data for generation of Activity Coefficient Models</option>
      
      <option  value="103101004/modules/chapter-6/sec-19/1.1.html">Section 19 : Activity Coefficient Models</option>
      
      <option  value="103101004/modules/chapter-6/sec-20/1.1.html">Section 20 : Appendix 6.1</option>
      
      <option  value="103101004/modules/chapter-6/sec-21/1.1.html">Section 21 : Appendix 6.2</option>
      
      <option  value="103101004/modules/chapter-7/sec-1/1.1.html">Section 1 :Introduction of Vapour-Liquid equilibria</option>
      
      <option  value="103101004/modules/chapter-7/sec-2/1.1.html">Section 2 : Single Component System Phase Equilibria</option>
      
      <option  value="103101004/modules/chapter-7/sec-3/1.1.html">Section 3 : Derivation of the Phase Rule</option>
      
      <option  value="103101004/modules/chapter-7/sec-4/1.1.html">Section 4 : Description of General VLE Behavior</option>
      
      <option  value="103101004/modules/chapter-7/sec-5/1.1.html">Section 5 : Raoult�s Law for VLE</option>
      
      <option  value="103101004/modules/chapter-7/sec-6/1.1.html">Section 6 : VLE Algorithms for Low to Moderate Pressures</option>
      
      <option  value="103101004/modules/chapter-7/sec-7/1.1.html">Section 7 : High Pressure Vapour Liquid Equilibria</option>
      
      <option  value="103101004/modules/chapter-7/sec-8/1.1.html">Section 8 : Henry�s Law</option>
      
      <option  value="103101004/modules/chapter-8/sec-1/1.1.html">Section 1 : Introduction of Chemical Reaction Equilibria</option>
      
      <option  value="103101004/modules/chapter-8/sec-2/1.1.html">Section 2 : Standard Enthalpy and Gibbs free energy of reaction</option>
      
      <option  value="103101004/modules/chapter-8/sec-3/1.1.html">Section 3 : The Reaction Coordinate</option>
      
      <option  value="103101004/modules/chapter-8/sec-4/1.1.html">Section 4 : Criteria for Chemical Reaction Equilibrium</option>
      
      <option  value="103101004/modules/chapter-8/sec-5/1.1.html">Section 5 : The Equilibrium Constant of Reaction </option>
      
      <option  value="103101004/modules/chapter-8/sec-6/1.1.html">Section 6 : Reactions involving gaseous species</option>
      
      <option  value="103101004/modules/chapter-8/sec-7/1.1.html">Section 7 : Reaction equilibria for simultaneous reactions</option>
      
      <option  value="103101004/modules/chapter-8/sec-8/1.1.html">Section 8 : Reactions involving Liquids and Solids</option>
      
      <option  value="103101004/modules/chapter-9/sec-1/1.1.html">Section 1 : Liquid-liquid Equilibria (LLE)</option>
      
      <option  value="103101004/modules/chapter-9/sec-2/1.1.html">Section 2 : Solid-Liquid Equilibria</option>
      
      <option  value="103101004/modules/chapter-9/sec-3/1.1.html">Section 3 : Solid-Vapour Equilibrium</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103101008</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> Chemical Reaction Engineering II  </strong></td>
	<td><strong>Prof. A.K. Suresh, Prof. Sanjay M. Mahajani, Prof. Ganesh A. Viswanathan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
   <option  value="103101008/mod01lec01.mp4">L1-Introduction to catalysts and catalysis                                                    </option>
<option  value="103101008/mod01lec02.mp4">L2-Steps in catalytic reaction: adsorption, desorption and reaction                           </option>
<option  value="103101008/mod01lec03.mp4">L3-Derivation of the rate equation                                                            </option>
<option  value="103101008/mod01lec04.mp4">L4-Heterogenous data analysis for reactor design - I                                          </option>
<option  value="103101008/mod01lec05.mp4">L5-Heterogenous data analysis for reactor design - II                                         </option>
<option  value="103101008/mod01lec06.mp4">L6-Catalyst deactivation and accounting for it in design � I                                  </option>
<option  value="103101008/mod01lec07.mp4">L7-Catalyst deactivation and accounting for it in design � II                                 </option>
<option  value="103101008/mod01lec08.mp4">L8-Synthesize the rate equation                                                               </option>
<option  value="103101008/mod01lec09.mp4">L9-Introduction to intraparticle diffusion                                                    </option>
<option  value="103101008/mod01lec10.mp4">L10-Intraparticle diffusion: Thiele modulus and effectiveness factor Part I                   </option>
<option  value="103101008/mod01lec11.mp4">L11-Intraparticle diffusion: Thiele modulus and effectiveness factor Part II                  </option>
<option  value="103101008/mod01lec12.mp4">L12-Intraparticle diffusion: Thiele modulus and effectiveness factor Part III                 </option>
<option  value="103101008/mod01lec13.mp4">L13-Effectiveness factor and Introduction to external mass transfer                           </option>
<option  value="103101008/mod01lec14.mp4">L14-External Mass Transfer                                                                    </option>
<option  value="103101008/mod01lec15.mp4">L15-Implications to rate data interpretation and design I                                     </option>
<option  value="103101008/mod01lec16.mp4">L16-Implications to rate data interpretation and design II                                    </option>
<option  value="103101008/mod01lec17.mp4">L17-Packed-bed reactor design                                                                 </option>
<option  value="103101008/mod01lec18.mp4">L18-Fluidized bed reactor design I                                                            </option>
<option  value="103101008/mod01lec19.mp4">L19-Fluidized bed reactor design II                                                           </option>
<option  value="103101008/mod01lec20.mp4">L20-Gas-liquid reactions-1: Theories of mass transfer into agitated liquids                   </option>
<option  value="103101008/mod01lec21.mp4">L21-GLR-2: Effect of chemical reaction on mass transfer: the slow reaction regime             </option>
<option  value="103101008/mod01lec22.mp4">L22-GLR-3: Transition to fast reaction, and the Fast reaction regime                          </option>
<option  value="103101008/mod01lec23.mp4">L23-GLR-4: Fast reaction example; Instantaneous reaction regime                               </option>
<option  value="103101008/mod01lec24.mp4">L24-GLR-5: Transition to Instantaneous reaction; Reaction regimes in surface renewal theories </option>
<option  value="103101008/mod01lec25.mp4">L25-GLR-6: Reaction regimes in surface renewal theories (contd..)                             </option>
<option  value="103101008/mod01lec26.mp4">L26-GLR-7: Surface renewal theories: Instantaneous reaction and Summing up                    </option>
<option  value="103101008/mod01lec27.mp4">L27-Fluid-solid non-catalytic reactions I                                                     </option>
<option  value="103101008/mod01lec28.mp4">L28-Fluid-solid non-catalytic reactions II                                                    </option>
<option  value="103101008/mod01lec29.mp4">L29-Fluid-solid non-catalytic reactions III                                                   </option>
<option  value="103101008/mod01lec30.mp4">L30-Distribution of residence time                                                            </option>
<option  value="103101008/mod01lec31.mp4">L31-Measurement of residence time distribution                                                </option>
<option  value="103101008/mod01lec32.mp4">L32-Residence time distribution function                                                      </option>
<option  value="103101008/mod01lec33.mp4">L33-Reactor diagnostics and troubleshooting                                                   </option>
<option  value="103101008/mod01lec34.mp4">L34-Modeling non-ideal reactors                                                               </option>
<option  value="103101008/mod01lec35.mp4">L35-Residence time distribution: Performance of non-ideal reactors                            </option>
<option  value="103101008/mod01lec36.mp4">L36-Non-ideal Reactors: Tanks-in-series model                                                 </option>
<option  value="103101008/mod01lec37.mp4">L37-Non-ideal Reactors: Dispersion model                                                      </option>
<option  value="103101008/mod01lec38.mp4">L38-Non-ideal Reactors: Dispersion model and introduction to multiparameter models            </option>
<option  value="103101008/mod01lec39.mp4">L39-Non-ideal Reactors: Multiparameter models                                                 </option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103101009</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Advanced Numerical Analysis </strong></td>
	<td><strong>Prof. Sachin C. Patwardhan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103101009/modules/module1/overview/1.1.html">Overview of the Course</option>
      
      <option  value="103101009/modules/module1/sec1/objectives_s1.html">Section 1 : Introductions</option>
      
      <option  value="103101009/modules/module1/sec2/objectives_s2.html">Section 2 : Lumped Parameter Models and Abstract Equation Formss</option>
      
      <option  value="103101009/modules/module1/sec3/objectives_s3.html">Section 3 : Distributed Parameter Models and Abstract Equation Formss</option>
      
      <option  value="103101009/modules/module2/sec1/objectives_s1.html">Section -1 : Introduction</option>
      
      <option  value="103101009/modules/module2/sec2/objectives_s2.html">Section 2 : VectorSpaces</option>
      
      <option  value="103101009/modules/module2/sec3/objectives_s3.html">Section 3 : Normed Linear Spaces and Banach Spaces</option>
      
      <option  value="103101009/modules/module2/sec4/objectives_s4.html">Section 4 : Inner Product Spaces and Hilbert Spaces</option>
      
      <option  value="103101009/modules/module2/sec5/objectives_s5.html">Section 5 : Gram-Schmidt Process and Orthogonal Polynomials</option>
      
      <option  value="103101009/modules/module2/sec6/objectives_s6.html">Section 6 : Induced Matrix Norms</option>
      
      <option  value="103101009/modules/module2/sec7/1.2.html">Section 7 : Summary</option>
      
      <option  value="103101009/modules/module3/sec1/objectives_s1.html">Section 1 : Unified Problem Representation</option>
      
      <option  value="103101009/modules/module3/sec2/objectives_s2.html">Section 2 : Polynomial Approximation[3]</option>
      
      <option  value="103101009/modules/module3/sec3/objectives_s3.html">Section 3 : Discretization using Taylor Series Approximation</option>
      
      <option  value="103101009/modules/module3/sec4/objectives_s4.html">Section 4 : Discretization using Polynomial Interpolation</option>
      
      <option  value="103101009/modules/module3/sec5/objectives_s5.html">Section 5 : Least Square Approximations</option>
      
      <option  value="103101009/modules/module3/sec6/objectives_s6.html">Section 6 : Errors in Discretization and Computations[4]</option>
      
      <option  value="103101009/modules/module3/sec7/1.2.html">Section 7 : Summary and Conclusions</option>
      
      <option  value="103101009/modules/module3/sec8/1.2.html">Section 8 : Appendix: Necessary and Sufficient Conditions for Unconstrained Optimality</option>
      
      <option  value="103101009/modules/module4/sec1/objectives_s1.html">Section 1-Introduction</option>
      
      <option  value="103101009/modules/module4/sec2/objectives_s2.html">Section 2 : Existence of Solutions</option>
      
      <option  value="103101009/modules/module4/sec3/objectives_s3.html">Section 3 : Direct Solution Techniques</option>
      
      <option  value="103101009/modules/module4/sec4/objectives_s4.html">Section 4 : Direct Methods for Solving Sparse Linear Systems</option>
      
      <option  value="103101009/modules/module4/sec5/objectives_s5.html">Section 5 : Iterative Solution Techniques</option>
      
      <option  value="103101009/modules/module4/sec6/objectives_s6.html">Section 6 : Optimization Based Methods</option>
      
      <option  value="103101009/modules/module4/sec7/objectives_s7.html">Section 7 : Matrix Conditioning and Behavior of Solutions</option>
      
      <option  value="103101009/modules/module4/sec8/1.2.html">Section 8 : Summary</option>
      
      <option  value="103101009/modules/module4/sec9/1.2.html">Section 9 : Appendix A: Behavior of Solutions of Linear Difference Equations</option>
      
      <option  value="103101009/modules/module4/sec10/1.2.html">Section 10 : Appendix B: Theorems on Convergence of Iterative Schemes</option>
      
      <option  value="103101009/modules/module4/sec11/1.2.html">Section 11 : Appendix C: Steepest Descent / Gradient Search Method</option>
      
      <option  value="103101009/modules/module5/sec1/objectives_s1.html">Section 1: Introduction</option>
      
      <option  value="103101009/modules/module5/sec2/objectives_s2.html">Section 2 : Method of Successive Substitutions [4]</option>
      
      <option  value="103101009/modules/module5/sec3/objectives_s3.html">Section 3 : Newton�s Method</option>
      
      <option  value="103101009/modules/module5/sec4/objectives_s4.html">Section 4 : Solutions of Nonlinear Algebraic Equations Using Optimization</option>
      
      <option  value="103101009/modules/module5/sec5/objectives_s5.html">Section 5 : Condition Number of Nonlinear Set of Equations [7]</option>
      
      <option  value="103101009/modules/module5/sec6/objectives_s6.html">Section 6 : Existence of Solutions and Convergence of Iterative Methods [12]</option>
      
      <option  value="103101009/modules/module5/sec7/1.2.html">Section 7 :Summary</option>
      
      <option  value="103101009/modules/module6/sec1/objectives_s1.html">Section 1 :Introduction </option>
      
      <option  value="103101009/modules/module6/sec2/objectives_s2.html">Section 2 : Existence, Uniqueness and Continuity of Solutions [1]</option>
      
      <option  value="103101009/modules/module6/sec3/objectives_s3.html">Section 3 : Analytical Solutions of Linear ODE-IVPs</option>
      
      <option  value="103101009/modules/module6/sec4/objectives_s4.html">Section 4 : Numerical Solution Schemes: Basic Concepts</option>
      
      <option  value="103101009/modules/module6/sec5/objectives_s5.html">Section 5 : Numerical Methods Based On Taylor Series Expansion[2]</option>
      
      <option  value="103101009/modules/module6/sec6/objectives_s6.html">Section 6 : Numerical Methods Based on Polynomial Interpolation [2]</option>
      
      <option  value="103101009/modules/module6/sec7/objectives_s7.html">Section 7 : Convergence Analysis and Selection of Integration Interval</option>
      
      <option  value="103101009/modules/module6/sec8/objectives_s8.html">Section 8 : Solutions of Differential Algebraic System of Equations</option>
      
      <option  value="103101009/modules/module6/sec9/objectives_s9.html">Section 9 :Solution of ODE-BVP using Shooting Method [3]</option>
      
      <option  value="103101009/modules/module6/sec10/1.2.html">Section 10 : Summary</option>
      
      <option  value="103101009/modules/module6/sec11/1.2.html">Section 11 : Exercise</option>
      
      <option  value="103101009/modules/module4/sec12/1.2.html">Section 12: Excercise</option>
      
      <option  value="103101009/modules/module2/sec8/1.2.html">Section 8: Excercise</option>
      
      <option  value="103101009/modules/module1/sec4/1.2.html">Section 4 : Summary</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103101111</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> Advanced Numerical Analysis   </strong></td>
	<td><strong>Prof. Sachin C. Patwardhan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
 <option  value="103101111/mod01lec01.mp4">Lecture 1: Introduction and Overview                                                                                                                </option>
<option  value="103101111/mod01lec02.mp4">Lecture -2 Fundamentals of Vector Spaces                                                                                                            </option>
<option  value="103101111/mod01lec03.mp4">Lecture 3 : Basic Dimension and Sub-space of a Vector Space                                                                                         </option>
<option  value="103101111/mod01lec04.mp4">Lecture 4 : Introduction to Normed Vector Spaces                                                                                                    </option>
<option  value="103101111/mod01lec05.mp4">Lecture 5 : Examples of Norms,Cauchy Sequence and Convergence, Introduction to Banach Spaces                                                        </option>
<option  value="103101111/mod01lec06.mp4">Lecture 6 : Introduction to Inner Product  Spaces                                                                                                   </option>
<option  value="103101111/mod01lec07.mp4">Lecture 7 : Cauchy Schwaz Inequality and Orthogonal Sets                                                                                            </option>
<option  value="103101111/mod01lec08.mp4">Lecture 8 : Gram-Schmidt Process and Generation of Orthogonal Sets                                                                                  </option>
<option  value="103101111/mod01lec09.mp4">Lecture 9 : Problem Discretization Using Appropriation Theory                                                                                       </option>
<option  value="103101111/mod01lec10.mp4">Lecture 10 : Weierstrass Theorem and Polynomial Approximation                                                                                       </option>
<option  value="103101111/mod01lec11.mp4">Lecture 11 : Taylor Series Approximation and Newton's Method                                                                                        </option>
<option  value="103101111/mod01lec12.mp4">Lecture 12 : Solving ODE - BVPs Using Firute Difference Method                                                                                      </option>
<option  value="103101111/mod01lec13.mp4">Lecture 13 :Solving ODE - BVPs and PDEs Using Finite Difference Method                                                                              </option>
<option  value="103101111/mod01lec14.mp4">Lecture 14 : Finite Difference Method (contd.) and Polynomial Interpolations                                                                        </option>
<option  value="103101111/mod01lec15.mp4">Lecture 15 : Polynomial and Function Interpolations,Orthogonal Collocations Method for Solving ODE -BVPs                                            </option>
<option  value="103101111/mod01lec16.mp4">Lecture 16 : Orthogonal Collocations Method for Solving ODE - BVPs and PDEs                                                                         </option>
<option  value="103101111/mod01lec17.mp4">Lecture 17 :Least Square Approximations, Necessary and Sufficient Conditions for Unconstrained Optimization                                         </option>
<option  value="103101111/mod01lec18.mp4">Lecture 18 : Least Square Approximations :Necessary and Sufficient Conditions for Unconstrained Optimization Least Square Approximations ( contd..) </option>
<option  value="103101111/mod01lec19.mp4">Lecture 19 :Linear Least Square Estimation and Geometric Interpretation of the Least Square Solution                                                </option>
<option  value="103101111/mod01lec20.mp4">Lecture 20 : Geometric Interpretation of the Least Square Solution (Contd.) and Projection Theorem in a Hilbert Spaces                              </option>
<option  value="103101111/mod01lec21.mp4">Lecture 21 : Projection Theorem in a Hilbert Spaces (Contd.) and Approximation Using Orthogonal Basis                                               </option>
<option  value="103101111/mod01lec22.mp4">Lecture 22 :Discretization of ODE-BVP using Least Square Approximation                                                                              </option>
<option  value="103101111/mod01lec23.mp4">Lecture 23 : Discretization of ODE-BVP using Least Square Approximation and Gelarkin Method                                                         </option>
<option  value="103101111/mod01lec24.mp4">Lecture 24 : Model Parameter Estimation using Gauss-Newton Method                                                                                   </option>
<option  value="103101111/mod01lec25.mp4">Lecture 25 : Solving Linear Algebraic Equations and Methods of Sparse Linear Systems                                                                </option>
<option  value="103101111/mod01lec26.mp4">Lecture 26 : Methods of Sparse Linear Systems (Contd.) and Iterative Methods for Solving Linear Algebraic Equations                                 </option>
<option  value="103101111/mod01lec27.mp4">Lecture 27 : Iterative Methods for Solving Linear Algebraic Equations                                                                               </option>
<option  value="103101111/mod01lec28.mp4">Lecture 28 : Iterative Methods for Solving Linear Algebraic Equations: Convergence Analysis using Eigenvalues                                       </option>
<option  value="103101111/mod01lec29.mp4">Lecture 29 :Iterative Methods for Solving Linear Algebraic Equations: Convergence Analysis using Matrix Norms                                       </option>
<option  value="103101111/mod01lec30.mp4">Lecture 30 : Iterative Methods for Solving Linear Algebraic Equations: Convergence Analysis using Matrix Norms (Contd.)                             </option>
<option  value="103101111/mod01lec31.mp4">Lecture 31 : Iterative Methods for Solving Linear Algebraic Equations: Convergence Analysis (Contd.)                                                </option>
<option  value="103101111/mod01lec32.mp4">Lecture 32 :Optimization Based Methods for Solving Linear Algebraic Equations: Gradient Method                                                      </option>
<option  value="103101111/mod01lec33.mp4">Lecture 33 : Conjugate Gradient Method, Matrix Conditioning and Solutions of Linear Algebraic Equations                                             </option>
<option  value="103101111/mod01lec34.mp4">Lecture 34 : Matrix Conditioning and Solutions and Linear Algebraic Equations (Contd.)                                                              </option>
<option  value="103101111/mod01lec35.mp4">Lecture 35 : Matrix Conditioning (Contd.) and Solving Nonlinear Algebraic Equations                                                                 </option>
<option  value="103101111/mod01lec36.mp4">Lecture 36 : Solving Nonlinear Algebraic Equations: Wegstein Method and Variants of Newton's Method                                                 </option>
<option  value="103101111/mod01lec37.mp4">Lecture 37 : Solving Nonlinear Algebraic Equations: Optimization Based Methods                                                                      </option>
<option  value="103101111/mod01lec38.mp4">Lecture 38 : Solving Nonlinear Algebraic Equations: Introduction to Convergence analysis of Iterative Solution Techniques                           </option>
<option  value="103101111/mod01lec39.mp4">Lecture 39 : Solving Nonlinear Algebraic Equations: Introduction to Convergence analysis (Contd.) and Solving ODE-IVPs                              </option>
<option  value="103101111/mod01lec40.mp4">Lecture 40 :Solving Ordinary Differential Equations - Initial Value Problems (ODE-IVPs) : Basic Concepts                                            </option>
<option  value="103101111/mod01lec41.mp4">Lecture 41 :Solving Ordinary Differential Equations - Initial Value Problems (ODE-IVPs) : Runge Kutta Methods                                       </option>
<option  value="103101111/mod01lec42.mp4">Lecture 42 :Solving ODE-IVPs : Runge Kutta Methods (contd.) and Multi-step Methods                                                                  </option>
<option  value="103101111/mod01lec43.mp4">Lecture 43 :Solving ODE-IVPs : Generalized Formulation of Multi-step Methods                                                                        </option>
<option  value="103101111/mod01lec44.mp4">Lecture 44 : Solving ODE-IVPs : Multi-step Methods (contd.) and Orthogonal Collocations Method                                                      </option>
<option  value="103101111/mod01lec45.mp4">Lecture 45 : Solving ODE-IVPs: Selection of Integration Interval and Convergence Analysis of Solution Schemes                                       </option>
<option  value="103101111/mod01lec46.mp4">Lecture 46 : Solving ODE-IVPs: Convergence Analysis of Solution Schemes (contd.)                                                                    </option>
<option  value="103101111/mod01lec47.mp4">Lecture 47 :Solving ODE-IVPs: Convergence Analysis of Solution Schemes (contd.) and Solving ODE-BVP using Single Shooting Method                    </option>
<option  value="103101111/mod01lec48.mp4">Lecture 48 : Methods for Solving System of Differential Algebraic Equations                                                                         </option>
<option  value="103101111/mod01lec49.mp4">Lecture 49 : Methods for Solving System of Differential Algebraic Equations (contd.) and Concluding Remarks                                        </option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103102012</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> Heterogeneous Catalysis and Catalytic Processes  </strong></td>
	<td><strong>Dr. K.K. Pant </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
 <option  value="103102012/mod01lec01.mp4">mod01lec01.mp4</option>
<option  value="103102012/mod01lec02.mp4">mod01lec02.mp4</option>
<option  value="103102012/mod01lec03.mp4">mod01lec03.mp4</option>
<option  value="103102012/mod02lec04.mp4">mod02lec04.mp4</option>
<option  value="103102012/mod02lec05.mp4">mod02lec05.mp4</option>
<option  value="103102012/mod02lec06.mp4">mod02lec06.mp4</option>
<option  value="103102012/mod03lec07.mp4">mod03lec07.mp4</option>
<option  value="103102012/mod03lec08.mp4">mod03lec08.mp4</option>
<option  value="103102012/mod03lec09.mp4">mod03lec09.mp4</option>
<option  value="103102012/mod03lec10.mp4">mod03lec10.mp4</option>
<option  value="103102012/mod04lec11.mp4">mod04lec11.mp4</option>
<option  value="103102012/mod04lec12.mp4">mod04lec12.mp4</option>
<option  value="103102012/mod04lec13.mp4">mod04lec13.mp4</option>
<option  value="103102012/mod04lec14.mp4">mod04lec14.mp4</option>
<option  value="103102012/mod05lec15.mp4">mod05lec15.mp4</option>
<option  value="103102012/mod05lec16.mp4">mod05lec16.mp4</option>
<option  value="103102012/mod06lec17.mp4">mod06lec17.mp4</option>
<option  value="103102012/mod06lec18.mp4">mod06lec18.mp4</option>
<option  value="103102012/mod07lec19.mp4">mod07lec19.mp4</option>
<option  value="103102012/mod07lec20.mp4">mod07lec20.mp4</option>
<option  value="103102012/mod07lec21.mp4">mod07lec21.mp4</option>
<option  value="103102012/mod08lec22.mp4">mod08lec22.mp4</option>
<option  value="103102012/mod08lec23.mp4">mod08lec23.mp4</option>
<option  value="103102012/mod08lec24.mp4">mod08lec24.mp4</option>
<option  value="103102012/mod09lec25.mp4">mod09lec25.mp4</option>
<option  value="103102012/mod09lec26.mp4">mod09lec26.mp4</option>
<option  value="103102012/mod09lec27.mp4">mod09lec27.mp4</option>
<option  value="103102012/mod09lec28.mp4">mod09lec28.mp4</option>
<option  value="103102012/mod09lec29.mp4">mod09lec29.mp4</option>
<option  value="103102012/mod09lec30.mp4">mod09lec30.mp4</option>
<option  value="103102012/mod09lec31.mp4">mod09lec31.mp4</option>
<option  value="103102012/mod10lec32.mp4">mod10lec32.mp4</option>
<option  value="103102012/mod10lec33.mp4">mod10lec33.mp4</option>
<option  value="103102012/mod11lec34.mp4">mod11lec34.mp4</option>
<option  value="103102012/mod11lec35.mp4">mod11lec35.mp4</option>
<option  value="103102012/mod11lec36.mp4">mod11lec36.mp4</option>
<option  value="103102012/mod11lec37.mp4">mod11lec37.mp4</option>
<option  value="103102012/mod11lec38.mp4">mod11lec38.mp4</option>
<option  value="103102012/mod11lec39.mp4">mod11lec39.mp4</option>
<option  value="103102012/mod12lec40.mp4">mod12lec40.mp4</option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103102015</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Fuel Cell Technology   </strong></td>
	<td><strong>Dr. Anil Verma, Prof. S. Basu </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103102015/introduction and overview of fuel cell/why we need fuel cell.html">Why we need fuel cell?                                                                                                                                 </option>
<option  value="103102015/introduction and overview of fuel cell/principle and overview of fuel cell.html">Overview - History;Principle of fuel cell technology                                                                                                   </option>
<option  value="103102015/introduction and overview of fuel cell/basic electrochemistry for all the fuel cells.html">Basic electrochemistry for all the fuel cell                                                                                                           </option>
<option  value="103102015/thermodynamics of the fuel cell/gibbs free energy.html">Gibb�s free energy; reversible and irreversible losses; Fuel cell efficiency                                                                           </option>
<option  value="103102015/thermodynamics of the fuel cell/nernst equation.html">Nernst equation; Effect of temperature, pressure, concentration on Nernst potential                                                                    </option>
<option  value="103102015/thermodynamics of the fuel cell/concept of electrochemical potential.html">Concept of electrochemical potential                                                                                                                   </option>
<option  value="103102015/irreversible losses in fuel cell/activation polarization.html">Activation polarization                                                                                                                                </option>
<option  value="103102015/irreversible losses in fuel cell/concentration polarization.html">Concentration polarization                                                                                                                             </option>
<option  value="103102015/irreversible losses in fuel cell/ohmic overpotential.html">Ohmic polarization                                                                                                                                     </option>
<option  value="103102015/irreversible losses in fuel cell/modelling of fuel cell.html">Modelling of fuel cell: current-voltage predictions                                                                                                    </option>
<option  value="103102015/components of fuel cell/electrolytes.html">Electrolytes                                                                                                                                           </option>
<option  value="103102015/components of fuel cell/catalysts.html">Catalysts                                                                                                                                              </option>
<option  value="103102015/components of fuel cell/current collector.html">Current collector/ bipolar plate                                                                                                                       </option>
<option  value="103102015/fuel cell characterization/why characterization needed.html">Why characterization needed? Possible ways of characterization                                                                                         </option>
<option  value="103102015/fuel cell characterization/in situ characterization.html">In-situ characterization especially I-V characteristics and electrochemical impedance spectroscopy; Cyclic voltammetry; Current interruption technique </option>
<option  value="103102015/fuel cell characterization/ex situ characterization.html">Ex-situ characterization especially electrolyte and bipolar plate                                                                                      </option>
<option  value="103102015/high temperature fuel cell/sofc high temperature fuel cells.html">SOFC - High Temperature Fuel Cell                                                                                                                      </option>
<option  value="103102015/high temperature fuel cell/comparision of low and high temperature fuel cells.html">Comparison of low and high temperature fuel cells                                                                                                      </option>
<option  value="103102015/balance of plant and commercialization issues/hydrogen production.html">Hydrogen production                                                                                                                                    </option>
<option  value="103102015/balance of plant and commercialization issues/hydrogen storage.html">Hydrogen Storage                                                                                                                                       </option>
<option  value="103102015/balance of plant and commercialization issues/balance of plant and power electronics and system intergation.html“>Balance of Plant and Power electronics and system integration                                                                                          </option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103102022</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Petroleum Refinery Engineering</strong></td>
	<td><strong>Dr. K.K. Pant ,Prof. Deepak Kunzru</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103102022/composition of petroleum/general defination.html">General Definition</option>
      
      <option  value="103102022/composition of petroleum/introduction to petroleum refinery.html">Introduction to petroleum refinery</option>
      
      <option  value="103102022/composition of petroleum/classification of crude oil.html">Classification of Crude oil</option>
      
      <option  value="103102022/composition of petroleum/Characterization of crude oil composition of crude.html">Characterization of crude oil ,Composition of crude</option>
      
      <option  value="103102022/composition of petroleum/Physical properties.html">Physical properties</option>
      
      <option  value="103102022/composition of petroleum/Crude oil analysis and distillation.html">Crude oil; analysis and distillation</option>
      
      <option  value="103102022/composition of petroleum/Introduction to refinery feed stocks and refinery products.html">Introduction to refinery feed stocks and refinery products</option>
      
      <option  value="103102022/evaluation of crude oil/Dehydration and desalting of crude.html">Dehydration and desalting of crude</option>
      
      <option  value="103102022/evaluation of crude oil/Crude Assay ASTM TBP distillations evaluation of crude oil properties.html">Crude Assay, ASTM, TBP distillations, evaluation of crude oil properties</option>
      
      <option  value="103102022/evaluation of crude oil/API gravity various average boiling points and mid percent corves.html">API gravity, Various average boiling points and mid percent corves</option>
      
      <option  value="103102022/evaluation of crude oil/Evaluation of properties of crude oil and its fractions.html">Evaluation of properties of crude oil and its fractions</option>
      
      <option  value="103102022/evaluation of crude oil/Design concept of crude oil distillation column design.html">Design concept of crude oil distillation column design</option>
      
      <option  value="103102022/furnace design/Test1.html">Furnace design-1</option>
      
      <option  value="103102022/furnace design/Test2.html">Furnace design-2</option>
      
      <option  value="103102022/thermal and catalytic cracking/Coking and thermal process delayed coking.html">Coking and Thermal process, Delayed coking</option>
      
      <option  value="103102022/thermal and catalytic cracking/Catalytic cracking cracking reactions zeolite catalysts.html">Catalytic cracking, Cracking reactions, Zeolite catalysts</option>
      
      <option  value="103102022/thermal and catalytic cracking/Cracking feedstocks and reactors effect of process variables.html">Cracking Feedstocks and reactors, Effect of process variables</option>
      
      <option  value="103102022/thermal and catalytic cracking/FCC Cracking catalyst coking and regeneration design concepts.html">FCC Cracking, Catalyst coking and regeneration, Design concepts, New Designs for Fluidized-Bed Catalytic Cracking Units</option>
      
      <option  value="103102022/catalytic reforming/Objective and application of catalytic reforming process reforming catalyst.html">Objective and application of catalytic reforming process, reforming catalyst</option>
      
      <option  value="103102022/catalytic reforming/Reformer feed reforming reactor design continuous and semi regenerative process.html">Reformer feed, Reforming reactor design, Continuous and semi regenerative process</option>
      
      <option  value="103102022/hydrotreating  and hydrocracking/Objectives and hydrocracking reactions.html">Objectives & Hydrocracking Reactions,Hydrocracking feedstocks,Modes of Hydrocracking,Effects of process variables</option>
      
      <option  value="103102022/hydrotreating  and hydrocracking/Hydrotreating process and catalysts resid.html">Hydro treating process and catalysts Resid hydro processing,Effects of process variables,Reactor design concepts</option>
      
      <option  value="103102022/isomerization alkylation  and polymerization/Isomerization process reactions effects of process variables.html">Isomerization process, Reactions, Effects of process variables</option>
      
      <option  value="103102022/isomerization alkylation  and polymerization/Alkylation process feedstocks reactions products catalysts.html">Alkylation process, Feedstocks, reactions, products,  catalysts and effect of process variables</option>
      
      <option  value="103102022/isomerization alkylation  and polymerization/Polymerization objectives process reactions catalysts.html">Polymerization: Objectives, process, Reactions,catalysts and effect of process variables</option>
      
      <option  value="103102022/lube oil manufacturing/Lube oil processing propane deasphalting  solvent extraction.html">Lube oil processing:propane deasphalting  Solvent extraction, dewaxing,Additives production from refinery feedstocks</option>
      
      <option  value="103102022/environmental issues and new trends/Ecological consideration in petroleum refinery.html">Ecological consideration in petroleum refinery,Waste water treatment,control of air pollution,New trends in refinery, Alternative energy sources, Biodiesel,Hydrogen energy from biomass</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103102024</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Transport Phenomena (UG)</strong></td>
	<td><strong>Prof. S.K. Gupta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103102024/vector and tensor analysis/vector and tensor analysis part 1.html">Vector and tensor analysis part 1""""""  </option>
<option  value="103102024/vector and tensor analysis/vector and tensor analysis part 2.html">Vector and tensor analysis part 2""""""  </option>
<option  value="103102024/vector and tensor analysis/vector and tensor analysis part 3.html">Vector and tensor analysis part 3""""""  </option>
<option  value="103102024/vector and tensor analysis/vector and tensor analysis part 4.html">Vector and tensor analysis part 4""""""  </option>
<option  value="103102024/vector and tensor analysis/vector and tensor analysis part 5.html">Vector and tensor analysis part 5""""""  </option>
<option  value="103102024/vector and tensor analysis/coordinate systems and time derivative.html">Coordinate systems and time derivative"""""    </option>
<option  value="103102024/momentum transfer/introduction to momentum transport.html">Introduction to momentum transport"""""" </option>
<option  value="103102024/momentum transfer/introduction to momentum transport axiom 1 mass is conversed.html ">Introduction to momentum transport, Axiom 1 mass is conversed""  </option>
<option  value="103102024/momentum transfer/axiom 2 momentum is conversed.html ">Axiom 2 momentum is conversed""""""      </option>
<option  value="103102024/momentum transfer/solution of momentum transport problems by shell momentum balance part1.html">Solution of momentum transport problems by shell momentum balance part1      </option>
<option  value="103102024/momentum transfer/solution of momentum transport problems by shell momentum balance part2.html">Solution of momentum transport problems by shell momentum balance part2      </option>
<option  value="103102024/momentum transfer/solution of momentum transport problems by shell momentum balance part3.html">Solution of momentum transport problems by shell momentum balance part3      </option>
<option  value="103102024/momentum transfer/solution of momentum transport problems by shell momentum balance part4.html">Solution of momentum transport problems by shell momentum balance part4      </option>
<option  value="103102024/momentum transfer/solution of momentum transport problems by shell momentum balance part5.html">Solution of momentum transport problems by shell momentum balance part5      </option>
<option  value="103102024/momentum transfer/derivation of equation of motion part 1.html">Derivation of equation of motion part 1"""""   </option>
<option  value="103102024/momentum transfer/derivation of equation of motion part 2.html">Derivation of equation of motion part 2"""""   </option>
<option  value="103102024/momentum transfer/solution of momentum transport problem by using navier stokes equation part1.html “>Solution of momentum transport problem by using Navier stokes equation part1 </option>
<option  value="103102024/momentum transfer/solution of momentum transport problem by using navier stokes equation part2.html “>Solution of momentum transport problem by using Navier stokes equation part2 </option>
<option  value="103102024/momentum transfer/solution of momentum transport problem by using navier stokes equation part3.html “>Solution of momentum transport problem by using Navier stokes equation part3 </option>
<option  value="103102024/momentum transfer/introduction to non-newtonian fluids.html   ">Introduction to Non-Newtonian fluids"""""      </option>
<option  value="103102024/momentum transfer/momentum transport problem for power law and bingham fluid.html">Momentum transport problem for power law and Bingham fluid""     </option>
<option  value="103102024/momentum transfer/tube flow problem for bingham fluid.html">Tube Flow Problem For Bingham Fluid""""""</option>
<option  value="103102024/momentum transfer/coutte flow for non-newtonian fluid.html">Coutte flow for Non-Newtonian fluid""""""</option>
<option  value="103102024/momentum transfer/appendix 1.html  ">Appendix 1to3""""""""" </option>
<option  value="103102024/heat transfer/introduction to energy transport axiom 4 energy is conversed.html"Introduction to Energy transport Axiom 4 energy is conversed""   </option>
<option  value="103102024/heat transfer/solution of heat transport problems by shell energy balance part1.html">Solution of heat transport problems by shell energy balance part1"     </option>
<option  value="103102024/heat transfer/solution of heat transport problems by shell energy balance part2.html">Solution of heat transport problems by shell energy balance part2"     </option>
<option  value="103102024/heat transfer/solution of heat transport problems by shell energy balance part3.html">Solution of heat transport problems by shell energy balance part3"     </option>
<option  value="103102024/heat transfer/derivation of equation of energy part1.html">Derivation of equation of energy part1"""""    </option>
<option  value="103102024/heat transfer/derivation of equation of energy part2.html">Derivation of equation of energy part2"""""    </option>
<option  value="103102024/heat transfer/derivation of equation of energy part3.html">Derivation of equation of energy part3"""""    </option>
<option  value="103102024/heat transfer/derivation of equation of energy part4.html">Derivation of equation of energy part4"""""    </option>
<option  value="103102024/heat transfer/solution of heat transport problems  by equation of thermal energy part1.html"  “>solution of heat transport problems  by equation of thermal energy part1     </option>
<option  value="103102024/heat transfer/solution of heat transport problems  by equation of thermal energy part2.html"  “>Solution of heat transport problems  by equation of thermal energy part2     </option>
<option  value="103102024/heat transfer/appendix 2.html">Appendix 4,5&6"""""""""</option>
<option  value="103102024/mass transfer/introduction to mass transport part 1.html">Introduction to mass transport part 1"""""     </option>
<option  value="103102024/mass transfer/introduction to mass transport part 2.html">Introduction to mass transport part 2"""""     </option>
<option  value="103102024/mass transfer/mass transport in binary systems special cases.html">Mass transport in binary systems special cases""""   </option>
<option  value="103102024/mass transfer/solution of mass transport problems for binary systems part1.html"Solution of mass transport problems for binary systems part1""   </option>
<option  value="103102024/mass transfer/solution of mass transport problems for binary systems part2.html"Solution of mass transport problems for binary systems part2""   </option>
<option  value="103102024/mass transfer/solution of mass transport problems for binary systems part3.html"Solution of mass transport problems for binary systems part3""   </option>
<option  value="103102024/mass transfer/solution of mass transport problems for binary systems part4.html"Solution of mass transport problems for binary systems part4""   </option>
<option  value="103102024/mass transfer/solution of mass transport problems for binary systems part5.html"Solution of mass transport problems for binary systems part5""   </option>
<option  value="103102024/mass transfer/appendix 3.html">Appendix 7&8"""""""""  </option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103103026</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Catalyst Science and Technology</strong></td>
	<td><strong>Dr. Mahuya De</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103102026/module1/index.html  “>Introduction to Catalysis                                 </option>
<option  value="103102026/module1/lec2/1.html “>Adsorption in Solid Catalysis                             </option>
<option  value="103102026/module1/lec3/1.html “>Adsorption types & kinetics                               </option>
<option  value="103102026/module1/lec4/1.html “>Multilayer adsorption & Pore condensation                 </option>
<option  value="103102026/module1/questions/1.html “>Questions: Module 1                                       </option>
<option  value="103102026/module2/lec5/1.html “>Catalyst types and preparation                            </option>
<option  value="103102026/module2/lec6/1.html “>Precipitation and Co-Precipitation                        </option>
<option  value="103102026/module2/lec7/1.html “>Solgel Method                                             </option>
<option  value="103102026/module2/lec8/1.html “>Supported Catalysts                                       </option>
<option  value="103102026/module2/lec9/1.html “>Drying, Calcination & Formulation                         </option>
<option  value="103102026/module2/lec10/1.html">Introduction & Surface area analysis                      </option>
<option  value="103102026/module2/lec11/1.html">Pore Analysis                                             </option>
<option  value="103102026/module2/lec12/1.html">XRD Analysis                                              </option>
<option  value="103102026/module2/lec13/1.html">Chemisorption studies                                     </option>
<option  value="103102026/module2/lec14/1.html">Thermal Analysis                                          </option>
<option  value="103102026/module2/lec15/1.html">Spectroscopic analysis;FT-IR                              </option>
<option  value="103102026/module2/lec16/1.html">Spectroscopic analysis; Raman                             </option>
<option  value="103102026/module2/lec17/1.html">Electron Microscopy                                       </option>
<option  value="103102026/module2/lec18/1.html">Catalyst Test and Reactor Types                           </option>
<option  value="103102026/module2/lec19/1.html">Reaction mechanism and rate equations                     </option>
<option  value="103102026/module2/lec20/1.html">Kinetic Analysis :Part 1                                  </option>
<option  value="103102026/module2/lec21/1.html">Kinetic Analysis :Part 2                                  </option>
<option  value="103102026/module2/lec22/1.html">External Transport  : Part 1                              </option>
<option  value="103102026/module2/lec23/1.html">External Transport  Part  2 + Internal Transport  Part  1 </option>
<option  value="103102026/module2/lec24/1.html">Internal Transport :  Part 2                              </option>
<option  value="103102026/module2/lec25/1.html">Catalyst Deactivations                                    </option>
<option  value="103102026/module2/lec26/1.html">Steam Reforming Part 1                                    </option>
<option  value="103102026/module2/lec27/1.html">Steam Reforming Part 2 +Petroleum Refining Part1          </option>
<option  value="103102026/module2/lec28/1.html">Petroleum Refining Part 2                                 </option>
<option  value="103102026/module2/lec29/1.html">Environment Catalysis                                     </option>
<option  value="103102026/module2/lec30/1.html">Hydrogenation & Oxidation Catalysis                       </option>
<option  value="103102026/module3/lec31/1.html">Introduction & different types of reaction                </option>
<option  value="103102026/module3/lec32/1.html">Mechanism and Kinetics :Part 1                            </option>
<option  value="103102026/module3/lec33/1.html">Mechanism and Kinetics :Part 2                            </option>
<option  value="103102026/module3/lec34/1.html">Industrial Homogeneous Process                            </option>
<option  value="103102026/module3/lec35/1.html">Enzyme catalysis                                          </option>
<option  value="103102026/module3/questions/1.html “>Questions : Module 3                                      </option>
<option  value="103102026/module2/questions/1.html “>Questions: Module 2                                       </option>
<option  value="103102026/module4/lec36/1.html">Zeolites Catalysts                                        </option>
<option  value="103102026/module4/lec37/1.html">Polymerization Catalyst �Part 1                           </option>
<option  value="103102026/module4/lec38/1.html">Polymerization Catalyst �Part 2                           </option>
<option  value="103102026/module4/lec39/1.html">Carbon  Nanotubes                                         </option>
<option  value="103102026/module4/lec40/1.html">Nano Metal or Metal Oxide Catalysts                       </option>
<option  value="103102026/module4/lec41/1.html">Phase Transfer Catalysts                                  </option>
<option  value="103102026/module4/lec42/1.html">Molecular Modeling: Introduction                          </option>
<option  value="103102026/module4/questions/1.html “>Questions: Module 4                                       |</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103103027</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Chemical Engineering Design - II</strong></td>
	<td><strong>Prof. Vaibhav V. Goud,Dr. Animes Kr. Golder</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103027/module1/index.html">Heat Exchangers Classifications</option>
      
      <option  value="103103027/module1/lec2/1.html">Thermal Design Considerations</option>
      
      <option  value="103103027/module1/lec3/1.html">Process (Thermal) Design Procedure</option>
      
      <option  value="103103027/module1/lec4/1.html">Design Problem</option>
      
      <option  value="103103027/module1/lec5/1.html">Shell and Tube Exchanger for Two Phase Heat Transfer</option>
      
      <option  value="103103027/module1/lec6/1.html">Condenser and Reboiler Design</option>
      
      <option  value="103103027/module2/lec1/1.html">Mechanical Design Standards</option>
      
      <option  value="103103027/module2/lec2/1.html">Design Components � I</option>
      
      <option  value="103103027/module2/lec3/1.html">Design Components � II</option>
      
      <option  value="103103027/module2/lec4/1.html">Hand on Calculations</option>
      
      <option  value="103103027/module3/lec1/1.html">Introduction and Evaporator Classifications</option>
      
      <option  value="103103027/module3/lec2/1.html">Methods of Feeding of Evaporators</option>
      
      <option  value="103103027/module3/lec3/1.html">Thermal Design Calculation</option>
      
      <option  value="103103027/module3/lec4/1.html">Solved Example</option>
      
      <option  value="103103027/module3/lec5/1.html">Mechanical Design I</option>
      
      <option  value="103103027/module4/lec1/1.html">Introduction and Types of Driers</option>
      
      <option  value="103103027/module4/lec2/1.html">Introduction and types of Driers (Cont.)</option>
      
      <option  value="103103027/module4/lec3/1.html">Design Consideration of Driers</option>
      
      <option  value="103103027/module4/lec4/1.html">Solved Problems</option>
      
      <option  value="103103027/module4/lec5/1.html">Mechanical Design II</option>
      
      <option  value="103103027/module5/lec1/1.html">Separation Equipments I</option>
      
      <option  value="103103027/module5/lec2/1.html">General Design Considerations</option>
      
      <option  value="103103027/module4/problems/1.html">Exercise Problems</option>
      
      <option  value="103103027/module5/lec3/1.html">Centrifuges</option>
      
      <option  value="103103027/module5/lec4/1.html">Centrifuges(Cont.)</option>
      
      <option  value="103103027/module5/lec5/1.html">Separation EquipmentsII</option>
      
      <option  value="103103027/module5/problems/1.html">Exercise Problems II</option>
      
      <option  value="103103027/module6/lec1/1.html">Introduction, Axial Stress Due to Dead Loads</option>
      
      <option  value="103103027/module6/lec2/1.html">Axial Stresses Due to Pressures</option>
      
      <option  value="103103027/module6/lec3/1.html">Longitudinal Bending Stresses Due to Dynamic Loads, Design Considerations</option>
      
      <option  value="103103027/module6/lec4/1.html">Solved Problem1</option>
      
      <option  value="103103027/module6/lec5/1.html">Solved Problem 2</option>
      
      <option  value="103103027/module7/lec1/1.html"> Introduction</option>
      
      <option  value="103103027/module7/lec2/1.html">Effect Vapor Flow Conditions on Tray Design</option>
      
      <option  value="103103027/module7/lec3/1.html">Plate Design</option>
      
      <option  value="103103027/module7/lec4/1.html">Hand on Design</option>
      
      <option  value="103103027/module7/lec5/1.html">Provisional Plate Design1</option>
      
      <option  value="103103027/module7/lec6/1.html">Provisional Plate Design2</option>
      
      <option  value="103103027/module8/lec1/1.html">Column Construction and Internals</option>
      
      <option  value="103103027/module8/lec2/1.html">Stresses Developed in Column</option>
      
      <option  value="103103027/module9/lec1/1.html">Introduction and Process Hazards</option>
      
      <option  value="103103027/module9/lec2/1.html">Safety Measures</option>
      
      <option  value="103103027/module9/lec3/1.html">Safety measures in equipment design and Pressure Relief Devices</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103103029</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Chemical Technology - II</strong></td>
	<td><strong>Dr. U. Ramagopal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103029/module1/index.html">Orientation</option>
      
      <option  value="103103029/module1/lec2/1.html">Orientation (cont�)</option>
      
      <option  value="103103029/module2/lec3/1.html">Overview</option>
      
      <option  value="103103029/module2/lec4/1.html">Overview of Refinery Processes </option>
      
      <option  value="103103029/module2/lec5/1.html">Crude distillation</option>
      
      <option  value="103103029/module2/lec6/1.html">Cracking</option>
      
      <option  value="103103029/module2/lec7/1.html">Reforming and Isomerization</option>
      
      <option  value="103103029/module2/lec8/1.html">Hydroprocessing</option>
      
      <option  value="103103029/module2/lec9/1.html">Alkylation</option>
      
      <option  value="103103029/module2/lec10/1.html">Visbreaking and Coking </option>
      
      <option  value="103103029/module2/lec11/1.html">Gas Processing and Polymerization </option>
      
      <option  value="103103029/module2/lec12/1.html">Refinery Supporting Processes  </option>
      
      <option  value="103103029/module3/lec13/1.html">Petrochemicals: Overview</option>
      
      <option  value="103103029/module3/lec14/1.html">Formaldehyde and Chloromethanes</option>
      
      <option  value="103103029/module3/lec15/1.html">Hydrocarbon Steam Cracking for Petrochemicals</option>
      
      <option  value="103103029/module3/lec16/1.html">Vinyl Chloride from Ethylene</option>
      
      <option  value="103103029/module3/lec17/1.html">Ethylene oxide and Ethanolamines </option>
      
      <option  value="103103029/module3/lec18/1.html">Isopropanol and Acetone from Propylene </option>
      
      <option  value="103103029/module3/lec19/1.html">Cumene and Acrylonitrile from Propylene </option>
      
      <option  value="103103029/module3/lec20/1.html">Isoprene and Oxoprocessing </option>
      
      <option  value="103103029/module3/lec21/1.html">Butadiene and Benzene Manufacture </option>
      
      <option  value="103103029/module3/lec22/1.html">Phenol from Cumene and Toluene </option>
      
      <option  value="103103029/module3/lec23/1.html">Phenol from Benzene </option>
      
      <option  value="103103029/module3/lec24/1.html">Styrene and Pthalic Anhydride Production </option>
      
      <option  value="103103029/module3/lec25/1.html">Manufacture of Maleic Anhydride and DDT </option>
      
      <option  value="103103029/module4/lec26/1.html">Industries</option>
      
      <option  value="103103029/module4/lec27/1.html">Chemical recovery from black liquor</option>
      
      <option  value="103103029/module4/lec28/1.html">Manufacture of sugar from sugarcane</option>
      
      <option  value="103103029/module4/lec29/1.html">Manufacture of Ethanol from Molasses</option>
      
      <option  value="103103029/module4/lec30/1.html">Soaps and Detergents </option>
      
      <option  value="103103029/module4/lec31/1.html">Edible and Essential Oils</option>
      
      <option  value="103103029/module5/lec32/1.html">Coke production </option>
      
      <option  value="103103029/module5/lec33/1.html">Hydrogenation of Coal </option>
      
      <option  value="103103029/module6/lec34/1.html">Introduction to Food Technology</option>
      
      <option  value="103103029/module6/lec35/1.html">Food Processing Equipments</option>
      
      <option  value="103103029/module7/lec36/1.html">Definitions and Nomenclature</option>
      
      <option  value="103103029/module7/lec37/1.html">Classification According To Preparation Methods</option>
      
      <option  value="103103029/module7/lec38/1.html">Processing Technologies</option>
      
      <option  value="103103029/module7/lec39/1.html">Polymer Manufacturing Processes</option>
      
      <option  value="103103029/module7/lec40/1.html">Manufacture of Phenol Formaldehyde, Viscose Rayon and Nylon</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103103031</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Heat Transfer</strong></td>
	<td><strong>Prof. A.K. Ghoshal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103031/mod01lec01.mp4">Introduction to heat transfer</option>
      
      <option  value="103103031/mod01lec02.mp4">General heat conduction equation</option>
      
      <option  value="103103031/mod02lec03.mp4">One dimensional steady state conduction in rectangular coordinate</option>
      
      <option  value="103103031/mod02lec04.mp4">One dimensional steady state conduction in cylindrical and spherical coordinate</option>
      
      <option  value="103103031/mod02lec05.mp4">Critical and optimum insulation</option>
      
      <option  value="103103031/mod02lec06.mp4">Extended surface heat transfer 1</option>
      
      <option  value="103103031/mod02lec07.mp4">Extended surface heat transfer 2</option>
      
      <option  value="103103031/mod03lec08.mp4">Analysis of lumped parameter model</option>
      
      <option  value="103103031/mod03lec09.mp4">Transient heat flow in semi infinite solid</option>
      
      <option  value="103103031/mod03lec10.mp4">Infinite body subjected to sudden convective</option>
      
      <option  value="103103031/mod03lec11.mp4">Graphical solutions of unsteady state heat conduction problem</option>
      
      <option  value="103103031/mod04lec12.mp4">Dimensional analysis for forced convection</option>
      
      <option  value="103103031/mod04lec13.mp4">Dimensional analysis for free convection</option>
      
      <option  value="103103031/mod04lec14.mp4">Heat transfer co-relations for laminar and internal flows</option>
      
      <option  value="103103031/mod04lec15.mp4">Heat transfer co-relations for turbulent and internal flows</option>
      
      <option  value="103103031/mod04lec16.mp4">Co-relation for turbulent and external flows</option>
      
      <option  value="103103031/mod04lec17.mp4">Heat transfer co-relations for flow across tube banks</option>
      
      <option  value="103103031/mod04lec18.mp4">Momentum and heat transfer analogies</option>
      
      <option  value="103103031/mod04lec19.mp4">Boundary layer heat transfer</option>
      
      <option  value="103103031/mod04lec20.mp4">Boundary layer equations</option>
      
      <option  value="103103031/mod04lec21.mp4">Approximate analysis in boundary layer</option>
      
      <option  value="103103031/mod05lec22.mp4">Theoretical concepts of natural / free convention heat transfer</option>
      
      <option  value="103103031/mod05lec23.mp4">Emperical relations for free convention heat transfer  </option>
      
      <option  value="103103031/mod06lec24.mp4">Condensation heat transfer over vertical plate</option>
      
      <option  value="103103031/mod06lec25.mp4">Condensation heat transfer for various conditions & geometries</option>
      
      <option  value="103103031/mod06lec26.mp4">Fundamentals of boiling heat transfer</option>
      
      <option  value="103103031/mod06lec27.mp4">Boiling heat transfer co-relations</option>
      
      <option  value="103103031/mod07lec28.mp4">Classification of heat exchangers</option>
      
      <option  value="103103031/mod07lec29.mp4">Various types of shell and tube heat exchangers</option>
      
      <option  value="103103031/mod07lec30.mp4">Various types of compact heat exchangers</option>
      
      <option  value="103103031/mod07lec31.mp4">Effectiveness-NTU, method of heat exchanger analysis</option>
      
      <option  value="103103031/mod07lec32.mp4">Design of double pipe heat exchanger</option>
      
      <option  value="103103031/mod07lec33.mp4">Design of shell and tube heat exchanger</option>
      
      <option  value="103103031/mod08lec34.mp4">Introduction to evaporation and evaporators</option>
      
      <option  value="103103031/mod08lec35.mp4">Evaporation principles and evaporator performance</option>
      
      <option  value="103103031/mod08lec36.mp4">Evaporator calculations</option>
      
      <option  value="103103031/mod09lec37.mp4">Introduction to radiation heat transfer</option>
      
      <option  value="103103031/mod09lec38.mp4">Radiation intensity and radiation view factor</option>
      
      <option  value="103103031/mod09lec39.mp4">Radiation heat exchange</option>
      
      <option  value="103103031/mod09lec40.mp4">Radiation shield and gas radiation </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103103032</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Heat Transfer</strong></td>
	<td><strong>Dr. Anil Verma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103032/module1/index.html">Lecture 1</option>
      
      <option  value="103103032/module1/lec2/1.html">Lecture 2</option>
      
      <option  value="103103032/module2/lec3/1.html">Lecture 3</option>
      
      <option  value="103103032/module2/lec4/1.html">Lecture 4</option>
      
      <option  value="103103032/module2/lec5/1.html">Lecture 5</option>
      
      <option  value="103103032/module2/lec6/1.html">Lecture 6</option>
      
      <option  value="103103032/module2/lec7/1.html">Lecture 7</option>
      
      <option  value="103103032/module2/lec8/1.html">Lecture 8</option>
      
      <option  value="103103032/module3/lec9/1.html">Lecture 9</option>
      
      <option  value="103103032/module3/lec10/1.html">Lecture 10</option>
      
      <option  value="103103032/module3/lec11/1.html">Lecture 11</option>
      
      <option  value="103103032/module3/lec12/1.html">Lecture 12</option>
      
      <option  value="103103032/module3/lec13/1.html">Lecture 13</option>
      
      <option  value="103103032/module3/lec14/1.html">Lecture 14</option>
      
      <option  value="103103032/module4/lec15/1.html">Lecture 15</option>
      
      <option  value="103103032/module4/lec16/1.html">Lecture 16</option>
      
      <option  value="103103032/module4/lec17/1.html">Lecture 17</option>
      
      <option  value="103103032/module4/lec18/1.html">Lecture 18</option>
      
      <option  value="103103032/module4/lec19/1.html">Lecture 19</option>
      
      <option  value="103103032/module4/lec20/1.html">Lecture 20</option>
      
      <option  value="103103032/module5/lec21/1.html">Lecture 21</option>
      
      <option  value="103103032/module5/lec22/1.html">Lecture 22</option>
      
      <option  value="103103032/module5/lec23/1.html">Lecture 23</option>
      
      <option  value="103103032/module6/lec24/1.html">Lecture 24</option>
      
      <option  value="103103032/module6/lec25/1.html">Lecture 25</option>
      
      <option  value="103103032/module6/lec26/1.html">Lecture 26</option>
      
      <option  value="103103032/module6/lec27/1.html">Lecture 27</option>
      
      <option  value="103103032/module7/lec28/1.html">Lecture 28</option>
      
      <option  value="103103032/module7/lec29/1.html">Lecture 29</option>
      
      <option  value="103103032/module7/lec30/1.html">Lecture 30</option>
      
      <option  value="103103032/module7/lec31/1.html">Lecture 31</option>
      
      <option  value="103103032/module7/lec32/1.html">Lecture 32</option>
      
      <option  value="103103032/module8/lec33/1.html">Lecture 33</option>
      
      <option  value="103103032/module8/lec34/1.html">Lecture 34</option>
      
      <option  value="103103032/module8/lec35/1.html">Lecture 35</option>
      
      <option  value="103103032/module8/lec36/1.html">Lecture 36</option>
      
      <option  value="103103032/module8/lec37/1.html">Lecture 37</option>
      
      <option  value="103103032/module9/lec38/1.html">Lecture 38</option>
      
      <option  value="103103032/module9/lec39/1.html">Lecture 39</option>
      
      <option  value="103103032/module9/lec40/1.html">Lecture 40</option>
      
      <option  value="103103032/module1/problems/1.html">Problems: Module1</option>
      
      <option  value="103103032/module2/problems/1.html">Problems: Module2</option>
      
      <option  value="103103032/module3/problems/1.html">Problems: Module3</option>
      
      <option  value="103103032/module4/problems/1.html">Problems: Module4</option>
      
      <option  value="103103032/module5/problems/1.html">Problems: Module5</option>
      
      <option  value="103103032/module6/problems/1.html">Problems: Module6</option>
      
      <option  value="103103032/module7/problems/1.html">Problems: Module7</option>
      
      <option  value="103103032/module8/problems/1.html">Problems: Module8</option>
      
      <option  value="103103032/module9/problems/1.html">Problems: Module9</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103103033</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Interfacial Engineering</strong></td>
	<td><strong>Dr. Pallab Ghosh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103033/module1/lecture1.pdf">Introduction to interfacial engineering</option>
      
      <option  value="103103033/module1/lecture2.pdf">Colloidal materials: part I</option>
      
      <option  value="103103033/module1/lecture3.pdf">Colloidal materials: part II</option>
      
      <option  value="103103033/module1/lecture4.pdf">Colloidal materials: part III</option>
      
      <option  value="103103033/module1/lecture5.pdf">Colloidal materials: part IV</option>
      
      <option  value="103103033/module1/lecture6.pdf">Colloidal materials: part V</option>
      
      <option  value="103103033/module2/lecture1.pdf">Surface tension</option>
      
      <option  value="103103033/module2/lecture2.pdf">Interfacial tension</option>
      
      <option  value="103103033/module2/lecture3.pdf">Shape of the interfaces</option>
      
      <option  value="103103033/module2/lecture4.pdf">Characterization of solid surfaces</option>
      
      <option  value="103103033/module2/lecture5.pdf">Deposition of thin films on solid surfaces</option>
      
      <option  value="103103033/module3/lecture1.pdf">Van der waals forces: part I</option>
      
      <option  value="103103033/module3/lecture2.pdf">Van der waals forces (part II) & electrostatic double layer force (part I)</option>
      
      <option  value="103103033/module3/lecture3.pdf">Electrostatic double layer force: part II</option>
      
      <option  value="103103033/module3/lecture4.pdf">Electrostatic double layer force: part III</option>
      
      <option  value="103103033/module3/lecture5.pdf">DLVO theory and non-DLVO forces</option>
      
      <option  value="103103033/module4/lecture1.pdf">Adsorption at fluid�fluid interfaces: part I</option>
      
      <option  value="103103033/module4/lecture2.pdf">Adsorption at fluid�fluid interfaces: part II</option>
      
      <option  value="103103033/module4/lecture3.pdf">Adsorption at fluid�fluid interfaces: part III</option>
      
      <option  value="103103033/module4/lecture4.pdf">Adsorption at fluid�solid interfaces</option>
      
      <option  value="103103033/module5/lecture1.pdf">Rheology of fluid�fluid interfaces: part I</option>
      
      <option  value="103103033/module5/lecture2.pdf">Rheology of fluid�fluid interfaces: part II</option>
      
      <option  value="103103033/module5/lecture3.pdf">Motion of drop in liquid, surface diffusion & thin liquid films (part I)</option>
      
      <option  value="103103033/module5/lecture4.pdf">Thin liquid films (part II)</option>
      
      <option  value="103103033/module6/lecture1.pdf">Emulsions, microemulsions and foams (part I)</option>
      
      <option  value="103103033/module6/lecture2.pdf">Emulsions, microemulsions and foams (part II)</option>
      
      <option  value="103103033/module6/lecture3.pdf">Emulsions, microemulsions and foams (part III)</option>
      
      <option  value="103103033/module6/lecture4.pdf">Emulsions, microemulsions and foams (part IV)</option>
      
      <option  value="103103033/module6/lecture5.pdf">Emulsions, microemulsions and foams (part V)</option>
      
      <option  value="103103033/module7/lecture1.pdf">Interfacial reactions (part I)</option>
      
      <option  value="103103033/module7/lecture2.pdf">Interfacial reactions (part II)</option>
      
      <option  value="103103033/module7/lecture3.pdf">Interfacial reactions (part III)</option>
      
      <option  value="103103033/module7/lecture4.pdf">Micellar and phase transfer catalyses</option>
      
      <option  value="103103033/module8/lecture1.pdf">Biointerfaces & adsorption of proteins at soild surfaces</option>
      
      <option  value="103103033/module8/lecture2.pdf">Adsorption of proteins at fluid�fluid interfaces</option>
      
      <option  value="103103033/module8/lecture3.pdf">Biological membranes and adhesion</option>
      
      <option  value="103103033/module8/lecture4.pdf">Interfacial forces & biomineralization</option>
      
      <option  value="103103033/module9/lecture1.pdf">Introduction to nanomaterials & nanotechnology</option>
      
      <option  value="103103033/module9/lecture2.pdf">Preparation of nanomaterials</option>
      
      <option  value="103103033/module9/lecture3.pdf">Nanotubes</option>
      
      <option  value="103103033/module6/lecture6.pdf">Froth flotation</option>
      
      <option  value="103103033/module9/lecture4.pdf">Microporous and mesoporous materials & lithographic  techniques</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103103034</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Mass Transfer Operations I</strong></td>
	<td><strong>Dr. B. Mandal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103034/mod01lec01.mp4">Introduction to Mass Transfer</option>
      
      <option  value="103103034/mod01lec02.mp4">Molecular Diffusion</option>
      
      <option  value="103103034/mod01lec03.mp4">Fick�s Law of Diffusion</option>
      
      <option  value="103103034/mod01lec04.mp4">Steady state molecular diffusion in fluids Part I</option>
      
      <option  value="103103034/mod01lec05.mp4">Steady state molecular diffusion in fluids Part II</option>
      
      <option  value="103103034/mod01lec06.mp4">Diffusion coefficient: Measurement and Prediction Part I</option>
      
      <option  value="103103034/mod01lec07.mp4">Diffusion Coefficient: Measurement and Prediction Part II</option>
      
      <option  value="103103034/mod01lec08.mp4">Multicomponent Diffusion and Diffusivity in Solids</option>
      
      <option  value="103103034/mod02lec01.mp4">Concept of Mass Transfer Coefficient</option>
      
      <option  value="103103034/mod02lec02.mp4">Dimensionless Groups and Co-relations for Convective</option>
      
      <option  value="103103034/mod02lec03.mp4">Mass Transfer co-efficient in Laminar Flow Condition</option>
      
      <option  value="103103034/mod02lec04.mp4">Boundary Layer Theory and Film Theory in Mass Transfer</option>
      
      <option  value="103103034/mod02lec05.mp4">Mass Transfer Coefficients in Terbulant Flow</option>
      
      <option  value="103103034/mod02lec06.mp4">Interphase Mass Transfer and Mass Transfer Theories Part I</option>
      
      <option  value="103103034/mod02lec07.mp4">Interphase Mass Transfer and Mass Transfer Theories Part II</option>
      
      <option  value="103103034/mod02lec08.mp4">Interphase Mass Transfer and Mass Transfer Theories Part 3</option>
      
      <option  value="103103034/mod03lec01.mp4">Agitated and Sparged Vassels</option>
      
      <option  value="103103034/module03lec02.mp4">Tray Column Part I</option>
      
      <option  value="103103034/mod03lec03.mp4">Tray Column Part II</option>
      
      <option  value="103103034/mod03lec04.mp4">Packed Tower</option>
      
      <option  value="103103034/mod04lec01.mp4">Introduction to Absorption and Solvent selection</option>
      
      <option  value="103103034/mod04lec02.mp4">Packed Tower Design Part I</option>
      
      <option  value="103103034/mod04lec03.mp4">Packed Tower Design Part II</option>
      
      <option  value="103103034/mod04lec04.mp4">Packed Tower Design Part III</option>
      
      <option  value="103103034/mod04lec05.mp4">Mass Transfer Coefficients Correlation and HETP Concept</option>
      
      <option  value="103103034/mod04lec06.mp4">Tray Tower Design and Introduction to Multicomponent System</option>
      
      <option  value="103103034/mod05lec01.mp4">Introduction to Distillation and Phas diagrams</option>
      
      <option  value="103103034/mod05lec02.mp4">Azeotropes and Enthalpy Concentration Diagrams</option>
      
      <option  value="103103034/mod05lec03.mp4">Flash Distillation</option>
      
      <option  value="103103034/mod05lec04.mp4">Batch and Steam Distillation</option>
      
      <option  value="103103034/mod05lec05.mp4">Fractional Distillation</option>
      
      <option  value="103103034/mod05lec06.mp4">Fractional Distillation: McCabe Thiele Method</option>
      
      <option  value="103103034/mod05lec07.mp4">Fractional Distillation: Minimum Reflux and Pinch Point</option>
      
      <option  value="103103034/mod05lec08.mp4">Fractional Distillation: Subcooled Reflux ,Tray Efficiency and Use of Open Steam</option>
      
      <option  value="103103034/mod05lec09.mp4">Fractional Distillation: Multiple Feeds and Side Stream</option>
      
      <option  value="103103034/mod05lec10.mp4">Multistage Batch Distillation with Reflux</option>
      
      <option  value="103103034/mod05lec11.mp4">Fractional Distillation: Ponchan and Savarit Method</option>
      
      <option  value="103103034/mod05lec12.mp4">Ponchan and Savarit Method and Packed Tower Distillation</option>
      
      <option  value="103103034/mod05lec13.mp4">Multicomponent Distillation</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103103035</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Mass Transfer Operations I</strong></td>
	<td><strong>Dr. Chandan Das,Dr. S.K. Majumder</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103035/module1/index.html">Introduction to Mass transfer operation</option>
      
      <option  value="103103035/module2/lec1.pdf">Fick�s law of diffusion</option>
      
      <option  value="103103035/module2/lec2.pdf">Steady state molecular diffusion in fluids under stagnant and laminar flow conditions</option>
      
      <option  value="103103035/module2/lec3.pdf">Diffusion through variable cross-sectional area </option>
      
      <option  value="103103035/module2/lec4.pdf">Diffusion coefficient: measurement and prediction</option>
      
      <option  value="103103035/module2/lec5.pdf">Measurement of liquid-phase diffusion coefficient</option>
      
      <option  value="103103035/module2/lec6.pdf">Multicomponent diffusion</option>
      
      <option  value="103103035/module2/lec7.pdf">Diffusivity in solids and its applications</option>
      
      <option  value="103103035/module3/lec1.pdf">Introduction to mass transfer coefficient</option>
      
      <option  value="103103035/module3/lec2.pdf">Equimolar counter-diffusion of A and B (NA = -NB)</option>
      
      <option  value="103103035/module3/lec3.pdf">Correlation for convective mass transfer coefficient</option>
      
      <option  value="103103035/module3/lec4.pdf">Correlation of mass transfer coefficients for single cylinder</option>
      
      <option  value="103103035/module3/lec5.pdf">Theories of mass transfer</option>
      
      <option  value="103103035/module3/lec6.pdf">Penetration theory, Surface Renewal Theory, Boundary Layer Theory</option>
      
      <option  value="103103035/module3/lec7.pdf">Interphase mass transfer theory</option>
      
      <option  value="103103035/module3/lec8.pdf">Overall mass transfer coefficients</option>
      
      <option  value="103103035/module4/lec1.pdf">Introduction</option>
      
      <option  value="103103035/module4/lec2.pdf">Design of packed tower </option>
      
      <option  value="103103035/module4/lec3.pdf">Design of packed tower based on overall mass transfer coefficient</option>
      
      <option  value="103103035/module4/lec4.pdf">Counter-current multi-stage absorption (Tray absorber)</option>
      
      <option  value="103103035/module4/lec5.pdf">Continuous contact equipment</option>
      
      <option  value="103103035/module4/lec6.pdf">Absorption with chemical reaction</option>
      
      <option  value="103103035/module4/lec7.pdf">Absorption accompanied by irreversible reactions</option>
      
      <option  value="103103035/module4/lec8.pdf">Absorption resistance</option>
      
      <option  value="103103035/module5/lec1.pdf">Introduction to Distillation</option>
      
      <option  value="103103035/module5/lec2.pdf">Distillation columns and their process calculations</option>
      
      <option  value="103103035/module5/lec3.pdf">Continuous distillation columns</option>
      
      <option  value="103103035/module5/lec4.pdf">Analysis of binary distillation in trayed towers: McCabe-Thele Method</option>
      
      <option  value="103103035/module5/lec5.pdf">Determination of the stripping section operating line (SOL)</option>
      
      <option  value="103103035/module5/lec6.pdf">Analysis of binary distillation by Ponchon-Savarit Method</option>
      
      <option  value="103103035/module5/lec7.pdf">Stepwise procedure to determine the number of theoretical trays</option>
      
      <option  value="103103035/module5/lec8.pdf">Introduction to multicomponent Distillation</option>
      
      <option  value="103103035/module6/lec1.pdf">Basic concepts</option>
      
      <option  value="103103035/module6/lec2.pdf">Adiabatic saturation temperature</option>
      
      <option  value="103103035/module6/lec3.pdf">Humidification and dehumidification operations and design calculations</option>
      
      <option  value="103103035/module6/lec4.pdf">Mechanical Draft Towers: forced draft towers and induced draft towers</option>
      
      <option  value="103103035/module6/lec5.pdf">Design calculations of cooling tower</option>
      
      <option  value="103103035/module6/lec6.pdf">Key points in the design of cooling tower and Step-by-step design procedure of cooling tower</option>
      
      <option  value="103103035/module6/lec7.pdf">Evaporation loss of water in cooling tower</option>
      
      <option  value="103103035/module6/lec8.pdf">Example problems on humidification </option>
      
      <option  value="103103035/module6/lec9.pdf">Example problems on dehumidification</option>
      
      <option  value="103103035/special module/lec1.pdf">Special Module</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103103036</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Molecular Simulations in Chemical Engineering</strong></td>
	<td><strong>Dr. Ashok Kumar Dasmahapatra,Dr. Tamal Banerjee</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103036/module1/index.html">Shrodinger Wave Equation for one electron system</option>
      
      <option  value="103103036/module1/lec2/1.html">Shrodinger Wave Equation for Polyelectron system</option>
      
      <option  value="103103036/module1/lec3/1.html">Slater Determinant and Basis Set</option>
      
      <option  value="103103036/module1/lec4/1.html">Hatree Fock Theory</option>
      
      <option  value="103103036/module1/lec5/1.html">Semi Empirical and Density Functional Theory</option>
      
      <option  value="103103036/module1/lec6/1.html">Geometry Optimization</option>
      
      <option  value="103103036/module1/lec7/1.html">Gaussian Job and Frequencies</option>
      
      <option  value="103103036/module1/lec8/1.html">Benchmarking of Geometry Optimization</option>
      
      <option  value="103103036/module2/lec9/1.html">Basics of Statistical Mechanics-I</option>
      
      <option  value="103103036/module2/lec10/1.html">Basics of Statistical Mechanics-II</option>
      
      <option  value="103103036/module2/lec11/1.html">Ideal Monoatomic gas and Canonical Ensemble</option>
      
      <option  value="103103036/module2/lec12/1.html">Micro-canonical, Grand-canonical and Isobaric-Isothermal Ensemble</option>
      
      <option  value="103103036/module3/lec13/1.html">Basics of Molecular Dynamics</option>
      
      <option  value="103103036/module3/lec14/1.html">Force Field and Integrating Algorithms</option>
      
      <option  value="103103036/module3/lec15/1.html">Periodic Box and Minimum Image Convention</option>
      
      <option  value="103103036/module3/lec16/1.html">Long Range Forces</option>
      
      <option  value="103103036/module3/lec17/1.html">Non-Bonded Interactions</option>
      
      <option  value="103103036/module3/lec18/1.html">Estimation of Pure component Properties</option>
      
      <option  value="103103036/module4/lec19/1.html">Steps involved in NAMD</option>
      
      <option  value="103103036/module4/lec20/1.html">Input files in NAMD and VMD</option>
      
      <option  value="103103036/module5/lec21/1.html">Introduction to Monte Carlo simulation and Monte Carlo Integration</option>
      
      <option  value="103103036/module5/lec22/1.html">Monte Carlo Integration</option>
      
      <option  value="103103036/module5/lec23/1.html">Random Number Generator</option>
      
      <option  value="103103036/module5/lec24/1.html">Periodic Boundary Conditions (PBC)</option>
      
      <option  value="103103036/module5/lec25/1.html">Equilibrations</option>
      
      <option  value="103103036/module6/lec26/1.html">MC sampling</option>
      
      <option  value="103103036/module6/lec27/1.html">Markov process and its applications - 1</option>
      
      <option  value="103103036/module6/lec28/1.html">Markov process and its applications - 2</option>
      
      <option  value="103103036/module6/lec29/1.html">Metropolis sampling</option>
      
      <option  value="103103036/module6/lec30/1.html">Principles of detailed balance</option>
      
      <option  value="103103036/module7/lec31/1.html">Simulation strategy</option>
      
      <option  value="103103036/module7/lec32/1.html">NVT ensemble</option>
      
      <option  value="103103036/module7/lec33/1.html">NVE and NPT ensemble</option>
      
      <option  value="103103036/module7/lec34/1.html">GCMC - 1</option>
      
      <option  value="103103036/module7/lec35/1.html">GCMC - 2</option>
      
      <option  value="103103036/module7/lec36/1.html">GEMC</option>
      
      <option  value="103103036/module8/lec37/1.html">MC simulation of polymers: fundamental</option>
      
      <option  value="103103036/module8/lec38/1.html">Fundamental of polymer physics</option>
      
      <option  value="103103036/module8/lec39/1.html">MC moves for polymer simulations</option>
      
      <option  value="103103036/module9/lec40/1.html">Introduction to rare events</option>
      
      <option  value="103103036/module9/lec41/1.html">Weighted Histogram Analysis Method (WHAM) and Umbrella sampling</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103103037</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Process Control and Instrumentation</strong></td>
	<td><strong>Dr. P.K. Saha</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103103037/module1/index.html">Introduction</option>
      
      <option  value="103103037/module2/lec1/1.html">Process Modeling </option>
      
      <option  value="103103037/module2/lec2/1.html">Example of Modeling of a Stirred Tank Heater </option>
      
      <option  value="103103037/module2/lec3/1.html">Linearization of nonlinear model </option>
      
      <option  value="103103037/module3/lec1/1.html">Laplace Transform</option>
      
      <option  value="103103037/module3/lec2/1.html">Laplace Transform of derivatives</option>
      
      <option  value="103103037/module3/lec3/1.html">First Order Process</option>
      
      <option  value="103103037/module3/lec4/1.html">Significance of First Order Process</option>
      
      <option  value="103103037/module3/lec5/1.html">Second Order Process</option>
      
      <option  value="103103037/module3/lec6/1.html">Features of the process response</option>
      
      <option  value="103103037/module3/lec7/1.html">Poles and Zeros</option>
      
      <option  value="103103037/module3/lec8/1.html">Higher Order Systems</option>
      
      <option  value="103103037/module3/lec9/1.html">Frequency Response Analysis</option>
      
      <option  value="103103037/module3/lec10/1.html">Bode Diagram</option>
      
      <option  value="103103037/module3/lec11/1.html">Bode Diagram of pure time delay</option>
      
      <option  value="103103037/module3/lec12/1.html">Nyquist Plot</option>
      
      <option  value="103103037/module4/lec1/1.html">Introduction to Feedback Control</option>
      
      <option  value="103103037/module4/lec2/1.html">Process</option>
      
      <option  value="103103037/module4/lec3/1.html">Transmission Lines</option>
      
      <option  value="103103037/module4/lec4/1.html">Closed loop response of liquid level in a storage tank: A case study</option>
      
      <option  value="103103037/module4/lec5/1.html">Offset in the output due to a P Controller</option>
      
      <option  value="103103037/module4/lec6/1.html">Stability of a closed loop process</option>
      
      <option  value="103103037/module4/lec7/1.html">Design of feedback controllers</option>
      
      <option  value="103103037/module4/lec8/1.html">Cohen-Coon technique of Controller Tuning</option>
      
      <option  value="103103037/module4/lec9/1.html">Stability of feedback control system</option>
      
      <option  value="103103037/module4/lec10/1.html">Gain Margin and Phase Margin</option>
      
      <option  value="103103037/module4/lec11/1.html">Problems with large dead time and/or inverse response</option>
      
      <option  value="103103037/module4/lec12/1.html">Processes with inverse response</option>
      
      <option  value="103103037/module5/lec1/1.html">Feed forward control </option>
      
      <option  value="103103037/module5/lec2/1.html">Cascade Control </option>
      
      <option  value="103103037/module5/lec3/1.html">Ratio Control</option>
      
      <option  value="103103037/module5/lec4/1.html">Auctioneering Control </option>
      
      <option  value="103103037/module5/lec5/1.html">Adaptive Control </option>
      
      <option  value="103103037/module6/lec1/1.html">Introduction to Multi loop multivariable control</option>
      
      <option  value="103103037/module6/lec2/1.html">Example of a flash drum for generating control configuration </option>
      
      <option  value="103103037/module6/lec3/1.html">Interaction between control loops</option>
      
      <option  value="103103037/module6/lec4/1.html">Decoupling of control loops</option>
      
      <option  value="103103037/module7/lec1/1.html">Introduction to Instrumentation</option>
      
      <option  value="103103037/module7/lec2/1.html">Process Flow Diagram</option>
      
      <option  value="103103037/module7/lec3/1.html">Actuators</option>
      
      <option  value="103103037/module7/lec4/1.html">Sensors</option>
      
      <option  value="103103037/module7/lec5/1.html">Flow Measuring Devices</option>
      
      <option  value="103103037/questions/1/1.html">Questions List</option>
      
      <option  value="103103037/answers/1/1.html">Answers List</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103104043</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Fluid Mechanics</strong></td>
	<td><strong>Prof. Nishith Verma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103104043/lecture1/main.htm">Definition of a fluid and Newtons' law of viscosity</option>
      
      <option  value="103104043/lecture2/2_1.htm">Rate of strain, Non-Newtonian fluid</option>
      
      <option  value="103104043/lecture3/3_1.htm">Pascal's theorem, Basic equation</option>
      
      <option  value="103104043/lecture4/4_1.htm">Basic equation: derivation, pressure variation in an incompressible fluid</option>
      
      <option  value="103104043/lecture5/5_1.htm">Pressure variation in two immiscible fluids, manometer, barometer</option>
      
      <option  value="103104043/lecture6/6_1.htm">Calculation of vertical component</option>
      
      <option  value="103104043/lecture7/7_1.htm">Calculation of horizontal component, buoyancy</option>
      
      <option  value="103104043/lecture8/8_1.htm">Examples</option>
      
      <option  value="103104043/lecture9/9_1.htm">Lagrangian and Eulerian approaches; Euler's acceleration formula</option>
      
      <option  value="103104043/lecture10/10_1.htm"> Steady and unsteady state</option>
      
      <option  value="103104043/lecture11/11_1.htm">Control mass, control volume, mass-, momentum-, kinetic energy balance</option>
      
      <option  value="103104043/lecture12/12_1.htm">Conservation of mass and examples</option>
      
      <option  value="103104043/lecture13/13_1.htm">Continuity, Momentum theorem</option>
      
      <option  value="103104043/lecture14/14_1.htm">Momentum theorem examples</option>
      
      <option  value="103104043/lecture15/15_1.htm">Equation of motion</option>
      
      <option  value="103104043/lecture16/16_1.htm">Couette and Poiseuille flows</option>
      
      <option  value="103104043/lecture17/17_1.htm">Tubular laminar flow and Hagen-Poiseuille equation</option>
      
      <option  value="103104043/lecture18/18_1.htm">Macroscopic momentum balance for pressure-drop in a tubular flow</option>
      
      <option  value="103104043/lecture19/19_1.htm">Mechanical energy balance</option>
      
      <option  value="103104043/lecture20/20_1.htm">Bernoulli equation and energy applications</option>
      
      <option  value="103104043/lecture21/21_1.htm">Minor loss, kinetic energy correction factor</option>
      
      <option  value="103104043/lecture22/22_1.htm">Flow measuring devices</option>
      
      <option  value="103104043/lecture23/23_1.htm">Major loss in pipe flow</option>
      
      <option  value="103104043/lecture24/24_1.htm">Examples on Bernoulli equation</option>
      
      <option  value="103104043/lecture25/25_1.htm">Centrifugal pump: characterisitcs, efficiency, NPSH</option>
      
      <option  value="103104043/lecture26/26_1.htm">Creeping flow, Stokes-law and terminal velocity</option>
      
      <option  value="103104043/lecture27/27_1.htm">Flow at high Reynolds numbers (Boundary layer theory)</option>
      
      <option  value="103104043/lecture28/28_1.htm">Examples on drag</option>
      
      <option  value="103104043/lecture29/29_1.htm">Drag, particles settling</option>
      
      <option  value="103104043/lecture30/30_1.htm">Pressure-drop: Ergun's equation</option>
      
      <option  value="103104043/lecture31/31_1.htm"> Examples on pressure drop calculations</option>
      
      <option  value="103104043/lecture32/32_1.htm">Fluidization</option>
      
      <option  value="103104043/lecture33/33_1.htm"> Minimum fluidization velocity</option>
      
      <option  value="103104043/lecture34/34_1.htm">Examples on fixed and fluidized beds</option>
      
      <option  value="103104043/lecture35/35_1.htm">Plate and frame press filter, Rotary filter</option>
      
      <option  value="103104043/lecture36/36_1.htm">Principles of filtration, constant pressure and volume filtration</option>
      
      <option  value="103104043/lecture37/37_1.htm">Example</option>
      
      <option  value="103104043/lecture38/38_1.htm">Buckingham Pi-theorem</option>
      
      <option  value="103104043/lecture39/39_1.htm">Geomteric and dynamic similarities, examples </option>
      
      <option  value="103104043/lecture40/40_1.htm">Equipment, flow patterns, power requirement</option>
      
      <option  value="103104043/lecture41/41_1.htm">Equipment, theoretical cut diameter, efficieny</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103104044</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Fluid Mechanics</strong></td>
	<td><strong>Dr. V. Shankar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103104044/mod01lec01.mp4">Lecture-01</option>
      
      <option  value="103104044/mod01lec02.mp4">Lecture-02</option>
      
      <option  value="103104044/mod01lec03.mp4">Lecture-03</option>
      
      <option  value="103104044/mod01lec04.mp4">Lecture-04</option>
      
      <option  value="103104044/mod01lec05.mp4">Lecture-05</option>
      
      <option  value="103104044/mod01lec06.mp4">Lecture-06</option>
      
      <option  value="103104044/mod01lec07.mp4">Lecture-07</option>
      
      <option  value="103104044/mod01lec08.mp4">Lecture-08</option>
      
      <option  value="103104044/mod01lec09.mp4">Lecture-09</option>
      
      <option  value="103104044/mod01lec10.mp4">Lecture-10</option>
      
      <option  value="103104044/mod01lec11.mp4">Lecture-11</option>
      
      <option  value="103104044/mod01lec12.mp4">Lecture-12</option>
      
      <option  value="103104044/mod01lec13.mp4">Lecture-13</option>
      
      <option  value="103104044/mod01lec14.mp4">Lecture-14</option>
      
      <option  value="103104044/mod01lec15.mp4">Lecture-15</option>
      
      <option  value="103104044/mod01lec16.mp4">Lecture-16</option>
      
      <option  value="103104044/mod01lec17.mp4">Lecture-17</option>
      
      <option  value="103104044/mod01lec18.mp4">Lecture-18</option>
      
      <option  value="103104044/mod01lec19.mp4">Lecture-19</option>
      
      <option  value="103104044/mod01lec20.mp4">Lecture-20</option>
      
      <option  value="103104044/mod01lec21.mp4">Lecture-21</option>
      
      <option  value="103104044/mod01lec22.mp4">Lecture-22</option>
      
      <option  value="103104044/mod01lec23.mp4">Lecture-23</option>
      
      <option  value="103104044/mod01lec24.mp4">Lecture-24</option>
      
      <option  value="103104044/mod01lec25.mp4">Lecture-25</option>
      
      <option  value="103104044/mod01lec26.mp4">Lecture-26</option>
      
      <option  value="103104044/mod01lec27.mp4">Lecture-27</option>
      
      <option  value="103104044/mod01lec28.mp4">Lecture-28</option>
      
      <option  value="103104044/mod01lec29.mp4">Lecture-29</option>
      
      <option  value="103104044/mod01lec30.mp4">Lecture-30</option>
      
      <option  value="103104044/mod01lec31.mp4">Lecture-31</option>
      
      <option  value="103104044/mod01lec32.mp4">Lecture-32</option>
      
      <option  value="103104044/mod01lec33.mp4">Lecture-33</option>
      
      <option  value="103104044/mod01lec34.mp4">Lecture-34</option>
      
      <option  value="103104044/mod01lec35.mp4">Lecture-35</option>
      
      <option  value="103104044/mod01lec36.mp4">Lecture-36</option>
      
      <option  value="103104044/mod01lec37.mp4">Lecture-37</option>
      
      <option  value="103104044/mod01lec38.mp4">Lecture-38</option>
      
      <option  value="103104044/mod01lec39.mp4">Lecture-39</option>
      
      <option  value="103104044/mod01lec40.mp4">Lecture-40</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103104045</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Introduction to Colloid and Interface Science and Engineering</strong></td>
	<td><strong>Prof. A. Sharma</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103104045/lecture1/main.htm">Lecture1</option>
      
      <option  value="103104045/lecture2/2_1.htm">Lecture2</option>
      
      <option  value="103104045/lecture3/3_1.htm">Lecture3</option>
      
      <option  value="103104045/lecture4/4_1.htm">Lecture4</option>
      
      <option  value="103104045/lecture5/5_1.htm">Lecture5</option>
      
      <option  value="103104045/lecture6/6_1.htm">Lecture6</option>
      
      <option  value="103104045/lecture7/7_1.htm">Lecture7</option>
      
      <option  value="103104045/lecture8/8_1.htm">Lecture8</option>
      
      <option  value="103104045/lecture9/9_1.htm">Lecture9</option>
      
      <option  value="103104045/lecture10/10_1.htm">Lecture10</option>
      
      <option  value="103104045/lecture11/11_1.htm">Lecture11</option>
      
      <option  value="103104045/lecture12/12_1.htm">Lecture12</option>
      
      <option  value="103104045/lecture13/13_1.htm">Lecture13</option>
      
      <option  value="103104045/lecture14/14_1.htm">Lecture 14</option>
      
      <option  value="103104045/lecture15/15_1.htm">Lecture15</option>
      
      <option  value="103104045/lecture16/16_1.htm">Lecture16</option>
      
      <option  value="103104045/lecture17/17_1.htm">Lecture17</option>
      
      <option  value="103104045/lecture18/18_1.htm">Lecture18</option>
      
      <option  value="103104045/lecture19/19_1.htm">Lecture19</option>
      
      <option  value="103104045/lecture20/20_1.htm">lecture20</option>
      
      <option  value="103104045/lecture21/21_1.htm">Lecture21</option>
      
      <option  value="103104045/lecture22/22_1.htm">Lecture22</option>
      
      <option  value="103104045/lecture23/23_1.htm">Lecture23</option>
      
      <option  value="103104045/lecture24/24_1.htm">Lecture24</option>
      
      <option  value="103104045/lecture25/25_1.htm">Lecture25</option>
      
      <option  value="103104045/lecture26/26_1.htm">Lecture26</option>
      
      <option  value="103104045/lecture27/27_1.htm">Lecture27</option>
      
      <option  value="103104045/lecture28/28_1.htm">Lecture28</option>
      
      <option  value="103104045/lecture29/29_1.htm">Lecture29</option>
      
      <option  value="103104045/lecture30/30_1.htm">Lecture30</option>
      
      <option  value="103104045/lecture31/31_1.htm">Lecture31</option>
      
      <option  value="103104045/lecture32/32_1.htm">Lecture32</option>
      
      <option  value="103104045/lecture33/33_1.htm">Lecture33</option>
      
      <option  value="103104045/lecture34/34_1.htm">Lecture34</option>
      
      <option  value="103104045/lecture35/35_1.htm">Lecture35</option>
      
      <option  value="103104045/lecture36/36_1.htm">Lecture36</option>
      
      <option  value="103104045/lecture37/37_1.htm">Lecture37</option>
      
      <option  value="103104045/lecture38/38_1.htm">Lecture38</option>
      
      <option  value="103104045/lecture39/39_1.htm">Lecture39</option>
      
      <option  value="103104045/lecture40/40_1.htm">Lecture40</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103104046</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Mass Transfer II</strong></td>
	<td><strong>Prof. Nishith Verma</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
  <option value="103104046/mod01lec01.mp4">Lecture-01</option>
<option value="103104046/mod01lec02.mp4">Lecture-02</option>
<option value="103104046/mod01lec03.mp4">Lecture-03</option>
<option value="103104046/mod01lec04.mp4">Lecture-04</option>
<option value="103104046/mod01lec05.mp4">Lecture-05</option>
<option value="103104046/mod01lec06.mp4">Lecture-06</option>
<option value="103104046/mod01lec07.mp4">Lecture-07</option>
<option value="103104046/mod01lec08.mp4">Lecture-08</option>
<option value="103104046/mod01lec09.mp4">Lecture-09</option>
<option value="103104046/mod01lec10.mp4">Lecture-10</option>
<option value="103104046/mod01lec11.mp4">Lecture-11</option>
<option value="103104046/mod01lec12.mp4">Lecture-12</option>
<option value="103104046/mod01lec13.mp4">Lecture-13</option>
<option value="103104046/mod01lec14.mp4">Lecture-14</option>
<option value="103104046/mod01lec15.mp4">Lecture-15</option>
<option value="103104046/mod01lec16.mp4">Lecture-16</option>
<option value="103104046/mod01lec17.mp4">Lecture-17</option>
<option value="103104046/mod01lec18.mp4">Lecture-18</option>
<option value="103104046/mod01lec19.mp4">Lecture-19</option>
<option value="103104046/mod01lec20.mp4">Lecture-20</option>
<option value="103104046/mod01lec21.mp4">Lecture-21</option>
<option value="103104046/mod01lec22.mp4">Lecture-22</option>
<option value="103104046/mod01lec23.mp4">Lecture-23</option>
<option value="103104046/mod01lec24.mp4">Lecture-24</option>
<option value="103104046/mod01lec25.mp4">Lecture-25</option>
<option value="103104046/mod01lec26.mp4">Lecture-26</option>
<option value="103104046/mod01lec27.mp4">Lecture-27</option>
<option value="103104046/mod01lec28.mp4">Lecture-28</option>
<option value="103104046/mod01lec29.mp4">Lecture-29</option>
<option value="103104046/mod01lec30.mp4">Lecture-30</option>
<option value="103104046/mod01lec31.mp4">Lecture-31</option>
<option value="103104046/mod01lec32.mp4">Lecture-32</option>
<option value="103104046/mod01lec33.mp4">Lecture-33</option>
<option value="103104046/mod01lec34.mp4">Lecture-34</option>
<option value="103104046/mod01lec35.mp4">Lecture-35</option>
<option value="103104046/mod01lec36.mp4">Lecture-36</option>
<option value="103104046/mod01lec37.mp4">Lecture-37</option>
<option value="103104046/mod01lec38.mp4">Lecture-38</option>
<option value="103104046/mod01lec39.mp4">Lecture-39</option>
<option value="103104046/mod01lec40.mp4">Lecture-40</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103104047</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Mechanics of Soft Materials</strong></td>
	<td><strong>Dr. A. Ghatak</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103104047/lecture1/main.html">Displacement: </option>
      
      <option  value="103104047/lecture2/2_1.htm">Stress</option>
      
      <option  value="103104047/lecture3/3_1.htm">Work and Energy</option>
      
      <option  value="103104047/lecture4/4_1.htm">Loading on an elastic half space</option>
      
      <option  value="103104047/lecture5/5_1.htm">Rigid Flat Punch </option>
      
      <option  value="103104047/lecture6/6_1.htm">Pressure Applied to a circular region:</option>
      
      <option  value="103104047/lecture7/7_1.htm">Pressure Applied to a circular region(contd..)</option>
      
      <option  value="103104047/lecture8/8_1.htm">Hertzian Mechanics</option>
      
      <option  value="103104047/lecture9/9_1.htm">JKR Contact Mechanics Theory </option>
      
      <option  value="103104047/lecture10/10_1.htm">JKR Contact Mechanics Theory(contd...)</option>
      
      <option  value="103104047/lecture11/11_1.htm">Compression of an elastic film sandwiched between two rigid parallel plates </option>
      
      <option  value="103104047/lecture12/12_1.htm">Bending of a rod by couples applied at its end </option>
      
      <option  value="103104047/lecture13/13_1.htm">equations of equilibrium of rods</option>
      
      <option  value="103104047/lecture14/14_1.htm">Bending of a rod under concentrated load</option>
      
      <option  value="103104047/lecture15/15_1.htm">Torsion of Rods </option>
      
      <option  value="103104047/lecture16/16_1.htm">Bending of thin plates </option>
      
      <option  value="103104047/lecture17/17_1.htm">Longitudinal deformation of plates</option>
      
      <option  value="103104047/lecture18/18_1.htm">Wrinkling of a thin sheet under uni-axial tensile strain </option>
      
      <option  value="103104047/lecture19/19_1.htm">  Peeling a thin flexible plate off an elastic adhesive bonded to a flexible substrate</option>
      
      <option  value="103104047/lecture20/20_1.htm">Peeling a thin flexible plate off an elastic adhesive bonded to a flexible substrate </option>
      
      <option  value="103104047/lecture21/21_1.htm">Elastic effect induced by surface tension of liquid.</option>
      
      <option  value="103104047/lecture22/22_1.htm">Neo-Hookean elasticity</option>
      
      <option  value="103104047/lecture23/23_1.htm">Homogeneous Strain</option>
      
      <option  value="103104047/lecture24/24_1.html">Simultaneous Stretching and torsion of a solid neo-Hookean Cylinder</option>
      
      <option  value="103104047/lecture25/25_1.html">Inflation of a baloon</option>
      
      <option  value="103104047/lecture26/26_1.html">Theory of Incremental Stresses</option>
      
      <option  value="103104047/lecture27/27_1.html">Theory of Incremental Stresses (contd...)</option>
      
      <option  value="103104047/lecture28/28_1.html">Boundary Condition</option>
      
      <option  value="103104047/lecture29/29_1.html">The slide modulus</option>
      
      <option  value="103104047/lecture30/30_1.html">Buckling of a thick slab</option>
      
      <option  value="103104047/lecture31/31_1.html">Stress induced surface instability of soft materials</option>
      
      <option  value="103104047/lecture32/32_1.html">Estimation of flexural rigidity of proteinaceous filaments like microtubules and Actin. </option>
      
      <option  value="103104047/lecture33/33_1.html">Estimation of flexural rigidity of proteinaceous filaments like microtubules and Actin. (continued )</option>
      
      <option  value="103104047/lecture34/34_1.html">The significance of the persistence length</option>
      
      <option  value="103104047/lecture35/35_1.html">Chain configurations and elasticity</option>
      
      <option  value="103104047/lecture36/36_1.html">Entropic Elasticity</option>
      
      <option  value="103104047/lecture37/37_1.html">Six fold Network in 2D</option>
      
      <option  value="103104047/lecture38/38_1.html">Network with six-fold symmetry under stress</option>
      
      <option  value="103104047/lecture39/39_1.html">Network with six-fold symmetry at non-zero temperature (contd...)</option>
      
      <option  value="103104047/lecture40/40_1.html">Three dimensional networks</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103104049</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Plantwide Control of Chemical Processes</strong></td>
	<td><strong>Dr. Nitin Kaistha</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103104049/Module_0.pdf">introduction</option>
      
      <option  value="103104049/Module_1.pdf">Essential Process Control Basics</option>
      
      <option  value="103104049/Module_2.pdf">Control of Common Unit Operations</option>
      
      <option  value="103104049/Module_3.pdf">Issues in Plantwide Control System Design</option>
      
      <option  value="103104049/Module_4.pdf">Economic Plantwide Control Design Procedure and Case Studies</option>
      
      <option  value="103104049/Module_5.pdf">Comprehensive Case Study</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103104050</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Plantwide Control of Chemical Processes</strong></td>
	<td><strong>Dr. Nitin Kaistha</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
     <option value="103104050/mod01lec01.mp4">Lecture-01.Introduction to the course</option>
<option value="103104050/mod01lec02.mp4">Lecture-02.Process Dynamics and Negative Feedback</option>
<option value="103104050/mod01lec03.mp4">Lecture-03.PID control</option>
<option value="103104050/mod01lec04.mp4">Lecture-04.Common Industrial Control Loops and advanced loops</option>
<option value="103104050/mod01lec05.mp4">Lecture-05.Advanced loops (contd) and multivariable systems</option>
<option value="103104050/mod01lec06.mp4">Lecture-06.Systematic Tuning Using Frequency Domain Analysis</option>
<option value="103104050/mod01lec07.mp4">Lecture-07.Frequency Domain Analysis</option>
<option value="103104050/mod01lec08.mp4">Lecture-08.Multivariable Systems</option>
<option value="103104050/mod01lec09.mp4">Lecture-09.RGA and dynamic decoupling</option>
<option value="103104050/mod01lec10.mp4">Lecture-10.Model based control</option>
<option value="103104050/mod01lec11.mp4">Lecture-11.Dynamic Matrix Control</option>
<option value="103104050/mod01lec12.mp4">Lecture-12.Control of Distillation Columns</option>
<option value="103104050/mod01lec13.mp4">Lecture-13.Temperature inferential distillation control</option>
<option value="103104050/mod01lec14.mp4">Lecture-14.Considerations in temperature inferential control</option>
<option value="103104050/mod01lec15.mp4">Lecture-15.Control of Complex Column Configurations</option>
<option value="103104050/mod01lec16.mp4">Lecture-16.Control of Heat Integrated Columns</option>
<option value="103104050/mod01lec17.mp4">Lecture-17.Homogenous extractive distillation</option>
<option value="103104050/mod01lec18.mp4">Lecture-18.More on complex columns and reactive distillation</option>
<option value="103104050/mod01lec19.mp4">Lecture-19.Control of reactors</option>
<option value="103104050/mod01lec20.mp4">Lecture-20.PFR controls (continued) & CSTRs</option>
<option value="103104050/mod01lec21.mp4">Lecture-21.CSTR heat management</option>
<option value="103104050/mod01lec22.mp4">Lecture-22.Heat Exchangers and Miscellaneous Systems</option>
<option value="103104050/mod01lec23.mp4">Lecture-23.Degrees of freedom analysis</option>
<option value="103104050/mod01lec24.mp4">Lecture-24.Degrees of freedom (contd)</option>
<option value="103104050/mod01lec25.mp4">Lecture-25.Illustration of considerations in  control structure synthesis</option>
<option value="103104050/mod01lec26.mp4">Lecture-26.Two column recycle process</option>
<option value="103104050/mod01lec27.mp4">Lecture-27.Throughput manipulator selection</option>
<option value="103104050/mod01lec28.mp4">Lecture-28.Plantwide control structure design</option>
<option value="103104050/mod01lec29.mp4">Lecture-29.Systematizing plantwide control design</option>
<option value="103104050/mod01lec30.mp4">Lecture-30.The Luyben design procedure</option>
<option value="103104050/mod01lec31.mp4">Lecture-31.Role of equipment capacity constraints</option>
<option value="103104050/mod01lec32.mp4">Lecture-32.Recycle process case study</option>
<option value="103104050/mod01lec33.mp4">Lecture-33.Recycle process case study (contd)</option>
<option value="103104050/mod01lec34.mp4">Lecture-34.C4 isomerization process case study</option>
<option value="103104050/mod01lec35.mp4">Lecture-35.C4 isomerization process case study (contd)</option>
<option value="103104050/mod01lec36.mp4">Lecture-36.C4 isomerization process case study</option>
<option value="103104050/mod01lec37.mp4">Lecture-37.Systematic economic plantwide control design procedure</option>
<option value="103104050/mod01lec38.mp4">Lecture-38.Ethyl benzene process case study</option>
<option value="103104050/mod01lec39.mp4">Lecture-39.C4 isomerization process revisited</option>
<option value="103104050/mod01lec40.mp4">Lecture-40.Contrasting conventional and top-down approach</option>
<option value="103104050/mod01lec41.mp4">Lecture 41.Cumene process plantwide control</option>

          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103105052</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Advanced Heat and Mass Transfer</strong></td>
	<td><strong>Dr. Saikat Chakraborty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103105052/Lecture_1_Eqn of Continuity_UPDATED.pdf   ">Equation of Continuity                                                                                           </option>
<option  value="103105052/AdvHeatMass_L_02.pdf">Conservation of Linear Momentum and Conservation of Mechanical energy                                            </option>
<option  value="103105052/AdvHeatMass_L_03.pdf">Conservation of Energy for a Pure Substance                                                                      </option>
<option  value="103105052/AdvHeatMass_L_04.pdf">Fouriers Law of Heat Conduction                                                                                  </option>
<option  value="103105052/AdvHeatMass_L_05.pdf">Conservation of Mass for each species & Ficks Law                                                                </option>
<option  value="103105052/AdvHeatMass_L_06.pdf">The Equation of Continuity for a Binary Mixture                                                                  </option>
<option  value="103105052/AdvHeatMass_L_07.pdf">Heat Transfer in Extended surfaces (Fins)                                                                        </option>
<option  value="103105052/AdvHeatMass_L_08.pdf">Performance of Fins                                                                                              </option>
<option  value="103105052/AdvHeatMass_L_09.pdf">Mass Transfer with Chemical Reaction Case Study: Low Pressure Chemical Vapor Deposition (LPCVD)                  </option>
<option  value="103105052/AdvHeatMass_L_10.pdf">Simultaneous Mass Diffusion and Reaction between wafers in Low Pressure Chemical Vapor Deposition                </option>
<option  value="103105052/AdvHeatMass_L_11.pdf">Heat Conduction in semi-infinite Slab with Constant wall Temperature                                             </option>
<option  value="103105052/AdvHeatMass_L_12.pdf">Heat Conduction in Semi-infinite Slab with Constant Flux density at the wall                                     </option>
<option  value="103105052/AdvHeatMass_L_13.pdf">Semi-infinite Slab with timevarying surface temperature: Theory                                                  </option>
<option  value="103105052/AdvHeatMass_L_14.pdf">Semi-infinite Slab with time-varying surface temperature: Examples                                               </option>
<option  value="103105052/AdvHeatMass_L_15.pdf">Heating of a finite slab                                                                                         </option>
<option  value="103105052/AdvHeatMass_L_16.pdf">Cooling of a Sphere in contact with a Well-Stirred Fluid & Heat Conduction in Solids with Interfacial Resistance </option>
<option  value="103105052/AdvHeatMass_L_17.pdf">Gas Absorption with Chemical Reaction                                                                            </option>
<option  value="103105052/AdvHeatMass_L_18.pdf">Melting and Solidification (An example of Moving Boundary problem)                                               </option>
<option  value="103105052/AdvHeatMass_L_19.pdf">Simultaneous Heat and Mass Transfer Fog formation                                                                </option>
<option  value="103105052/AdvHeatMass_L_20.pdf">Unsteady-state Evaporation                                                                                       </option>
<option  value="103105052/AdvHeatMass_L_21.pdf">Convective Transport: Fluid Flow to a Rotating Disk (in an infinite mass of fluid)                               </option>
<option  value="103105052/AdvHeatMass_L_22.pdf">Mass Transfer to a Rotating Disk                                                                                 </option>
<option  value="103105052/AdvHeatMass_L_23.pdf">Laminar Boundary Layers                                                                                          </option>
<option  value="103105052/AdvHeatMass_L_24.pdf">Heat Transfer to Boundary Layers                                                                                 </option>
<option  value="103105052/AdvHeatMass_L_25.pdf">Heat Transfer to Boundary Layers (Continued)1                                                                    </option>
<option  value="103105052/AdvHeatMass_L_26.pdf">Heat Transfer to Boundary Layers (Continued)2                                                                    </option>
<option  value="103105052/AdvHeatMass_L_27.pdf">Heat Transfer to Boundary Layers (Continued)3                                                                    </option>
<option  value="103105052/AdvHeatMass_L_28.pdf">Application of Mises Transformation to the problem of Mass Transfer from a sphere in Creeping (Stokes) flow      </option>
<option  value="103105052/AdvHeatMass_L_29.pdf">Convective Transport in channels                                                                                 </option>
<option  value="103105052/AdvHeatMass_L_30.pdf">A Graetz-Nusselt Problem: Fully developed V, developing C or T                                                   </option>
<option  value="103105052/Lecture_31_Dispersion.pdf">Dispersion                                                                                                       </option>
<option  value="103105052/Lecture_32_Dispersion_Contd.pdf ">Dispersion (Continued)                                                                                           </option>
<option  value="103105052/Lecture_33_Multicomponent_Mixtures.pdf    ">Multi-component Mixtures                                                                                         </option>
<option  value="103105052/Lecture_34_Binary Systems.pdf ">Binary Systems                                                                                                   </option>
<option  value="103105052/Lecture_35_Thermal Diffusion.pdf">Thermal, Forced and Pressure Diffusion                                                                           </option>
<option  value="103105052/Lecture_36_Multicomponent Flux Equations.pdf">Solving the Multi-component Flux Equations                                                                       </option>
<option  value="103105052/Lecture_37_Dimensional Analysis.pdf">Dimensional Analysis                                                                                             </option>
<option  value="103105052/Lecture_38_Time Averaging & Eddy Viscosity.pdf “>Turbulent Flow: Time Averaging, Reynolds Stress and Eddy Viscosity                                               </option>
<option  value="103105052/Lecture_39_Universal Velcoity.pdf">Transport in Turbulent Flow: Universal Velocity Profile                                                          </option>
<option  value="103105052/Lecture_40_Turbulent Flow in Pipe.pdf">Turbulent Flow in a Pipe                                                                                         </option>
<option  value="103105052/Lecture_41_Mass Transfer in Turbulent Flow.pdf“>Mass Transfer in Turbulent Pipe Flow                                                                             </option>
</select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103105054</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Biochemical Engineering</strong></td>
	<td><strong>Dr. Rintu Banerjee,Dr. Saikat Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
     <option value="103105054/mod01lec01.mp4">Fundamentals of Biology & Biotechnology</option>
<option value="103105054/mod01lec02.mp4">Glimpses of Microbial World - Bacteria</option>
<option value="103105054/mod01lec03.mp4">Virus and Cell Organelles</option>
<option value="103105054/mod01lec04.mp4">Carbohydrate</option>
<option value="103105054/mod01lec05.mp4">Nucleic Acid</option>
<option value="103105054/mod01lec06.mp4">Lipids</option>
<option value="103105054/mod01lec07.mp4">Proteins</option>
<option value="103105054/mod01lec08.mp4">Biochemistry & Thermodynamics of Enzymes</option>
<option value="103105054/mod01lec09.mp4">Enzyme Kinetics : Michealis-Menten Kinetics</option>
<option value="103105054/mod01lec10.mp4">Regulation of Enzyme Activity : Inhibition</option>
<option value="103105054/mod01lec11.mp4">Regulation of Enzyme Activity : Inhibition (Contd.)</option>
<option value="103105054/mod01lec12.mp4">Effects of Substrate and Inhibition, pH and Temperature on Enzyme Activity</option>
<option value="103105054/mod01lec13.mp4">Immobilized Enzymes</option>
<option value="103105054/mod01lec14.mp4">Immobilized Enzymes (Contd.)</option>
<option value="103105054/mod01lec15.mp4">Interphase Mass Transfer and Reaction in Immobilized Enzymes</option>
<option value="103105054/mod01lec16.mp4">Interphase Mass Transfer and Reaction in Immobilized Enzymes (Contd.)</option>
<option value="103105054/mod01lec17.mp4">Effectiveness Factor in Immobilized Enzymes</option>
<option value="103105054/mod01lec18.mp4">Bioenergetics and Glycolysis</option>
<option value="103105054/mod01lec19.mp4">TCA Cycle</option>
<option value="103105054/mod01lec20.mp4">Electron Transport Chain & Oxidative Phosphorylation</option>
<option value="103105054/mod01lec21.mp4">Pentose Phosphate Pathways Glycogenesis & Glycogenolysis</option>
<option value="103105054/mod01lec22.mp4">Urea Cycle, Gluconeogenesis and Glyoxalate Cycle</option>
<option value="103105054/mod01lec23.mp4">Microbial Growth : Phases and Models</option>
<option value="103105054/mod01lec24.mp4">Effect of Mass Transfer on Microbial & Fungal Growth</option>
<option value="103105054/mod01lec25.mp4">Effect of Multiple Substrates and Inhibition on Microbial Growth</option>
<option value="103105054/mod01lec26.mp4">Design of Bioreactors</option>
<option value="103105054/mod01lec27.mp4">Design of Chemostats</option>
<option value="103105054/mod01lec28.mp4">Stability of Bioreactors</option>
<option value="103105054/mod01lec29.mp4">Stability of Bioreactors (Contd.)</option>
<option value="103105054/mod01lec30.mp4">Introduction to Receptor - Ligand Binding</option>
<option value="103105054/mod01lec31.mp4">Effects of Ligand Depletion and Multiple Receptors on Binding Kinetics</option>
<option value="103105054/mod01lec32.mp4">Effects of Ligand Depletion and Multiple Receptors on Binding Kinetics (Contd.)</option>
<option value="103105054/mod01lec33.mp4">Receptors-Mediated Endocytosis</option>
<option value="103105054/mod01lec34.mp4">Kinetics of Receptor-Mediated Endocytosis</option>
<option value="103105054/mod01lec35.mp4">General Model for Receptor-Mediated Endocytosis</option>
<option value="103105054/mod01lec36.mp4">Multiple Interacting Microbial Population: Prey-Predator Models</option>
<option value="103105054/mod01lec37.mp4">Manufacture of Biochemicals</option>
<option value="103105054/mod01lec38.mp4">Manufacture of Biochemicals (Contd.) & Strategies for Biomolecules Separation</option>
<option value="103105054/mod01lec39.mp4">Strategies for Biomolecules Separation (Contd.)</option>
<option value="103105054/mod01lec40.mp4">Strategies for Biomolecules  Separation (Contd.)</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103105057</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Microscale Transport Processes</strong></td>
	<td><strong>Prof. S. Dasgupta,Dr. Somnath Ganguly</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
   <option value="103105057/mod01lec01.mp4">Introduction</option>
<option value="103105057/mod01lec02.mp4">Introduction (Contd.)</option>
<option value="103105057/mod01lec03.mp4">Lab on Chip</option>
<option value="103105057/mod01lec04.mp4">Lab on Chip (Contd.)</option>
<option value="103105057/mod01lec05.mp4">Microscale manufacturing practices</option>
<option value="103105057/mod01lec06.mp4">Photolithography</option>
<option value="103105057/mod01lec07.mp4">Photolithography (contd.)</option>
<option value="103105057/mod01lec08.mp4">Deposition</option>
<option value="103105057/mod01lec09.mp4">Plastic microfluidic devices</option>
<option value="103105057/mod01lec10.mp4">Mixing</option>
<option value="103105057/mod01lec11.mp4">Micro Heat Pipes</option>
<option value="103105057/mod01lec12.mp4">Mixing (contd.)</option>
<option value="103105057/mod01lec13.mp4">Mixing   (contd.)</option>
<option value="103105057/mod01lec14.mp4">Micro Heat Pipes (contd.)</option>
<option value="103105057/mod01lec15.mp4">Mixing    (contd.)</option>
<option value="103105057/mod01lec16.mp4">Dispersion</option>
<option value="103105057/mod01lec17.mp4">Dispersion (contd.)</option>
<option value="103105057/mod01lec18.mp4">Dispersion  (contd.)</option>
<option value="103105057/mod01lec19.mp4">Electrowetting</option>
<option value="103105057/mod01lec20.mp4">Electro osmosis</option>
<option value="103105057/mod01lec21.mp4">Electrowetting (contd.)</option>
<option value="103105057/mod01lec22.mp4">Electro osmosis  (contd.)</option>
<option value="103105057/mod01lec23.mp4">Dielectrophoresis</option>
<option value="103105057/mod01lec24.mp4">Dielectrophoresis  (contd.)</option>
<option value="103105057/mod01lec25.mp4">Dielectrophoresis   (contd.)</option>
<option value="103105057/mod01lec26.mp4">Scaling dimension and issues</option>
<option value="103105057/mod01lec27.mp4">Slip flow</option>
<option value="103105057/mod01lec28.mp4">Microstructured reactor</option>
<option value="103105057/mod01lec29.mp4">Immiscible flow in microchannel</option>
<option value="103105057/mod01lec30.mp4">Immiscible flow in microchannel (contd.)</option>
<option value="103105057/mod01lec31.mp4">Immiscible flow in microchannel   (contd.)</option>
<option value="103105057/mod01lec32.mp4">Scaling dimension and issues   (contd.)</option>
<option value="103105057/mod01lec33.mp4">Immiscible flow in microchannel    (contd.) </option>
<option value="103105057/mod01lec34.mp4">Plastic device making</option>
<option value="103105057/mod01lec35.mp4">Transport processes and their descriptions</option>
<option value="103105057/mod01lec36.mp4">Convective fluid dynamics in microchannels</option>
<option value="103105057/mod01lec37.mp4">Microfluidic networks</option>
<option value="103105057/mod01lec38.mp4">Electrohydrodynamic atomization</option>
<option value="103105057/mod01lec39.mp4">Electrohydrodynamic atomization (contd.)</option>
<option value="103105057/mod01lec40.mp4">Interfacial phenomena in thin liquid films</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103105058</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Multiphase Flow</strong></td>
	<td><strong>Prof. Gargi Das,Prof. P.K. Das</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103105058/mod1lec1.html">Introduction</option>
      
      <option  value="103105058/mod2lec2.html">Estimation of Flow Patterns</option>
      
      <option  value="103105058/mod2lec3.html">Estimation of Flow Patterns (Contd.)</option>
      
      <option  value="103105058/mod2lec4.html">Estimation of Flow Patterns (Contd. )</option>
      
      <option  value="103105058/mod2lec5.html">Estimation of Flow Patterns ( Contd. )</option>
      
      <option  value="103105058/mod3lec6.html">Methods of Analysis</option>
      
      <option  value="103105058/mod4lec7.html">Definitions and Common Terminologies</option>
      
      <option  value="103105058/mod4lec8.html">Definitions and Common Terminologies (Contd.)</option>
      
      <option  value="103105058/mod5lec9.html">Homogeneous Flow Model</option>
      
      <option  value="103105058/mod5lec10.html">Homogeneous Flow Model (Contd.)</option>
      
      <option  value="103105058/mod5lec11.html">Homogeneous Flow Model  (Contd.)</option>
      
      <option  value="103105058/mod6lec12.html">The One Dimensional Drift Flux Model</option>
      
      <option  value="103105058/mod6lec13.html">The One Dimensional Drift Flux Model (Contd.)</option>
      
      <option  value="103105058/mod6lec14.html">The One Dimensional Drift Flux Model  (Contd.)</option>
      
      <option  value="103105058/mod6lec15.html">The One Dimensional Drift Flux  Model (Contd.)</option>
      
      <option  value="103105058/mod6lec16.html">The One Dimensional  Drift Flux Model (Contd.)</option>
      
      <option  value="103105058/mod7lec17.html">The Separated Flow Model</option>
      
      <option  value="103105058/mod7lec18.html">The Separated Flow Model (Contd.)</option>
      
      <option  value="103105058/mod7lec19.html">The Separated Flow Model (Contd. )</option>
      
      <option  value="103105058/mod7lec20.html">The Separated Flow  Model (Contd.)</option>
      
      <option  value="103105058/mod7lec21.html">The  Separated Flow Model (Contd.)</option>
      
      <option  value="103105058/mod7lec22.html">The Separated  Flow Model (Contd.)</option>
      
      <option  value="103105058/mod7lec23.html">The Separated Flow Model  (Contd.)</option>
      
      <option  value="103105058/mod7lec24.html">The Separated Flow Model ( Contd.)</option>
      
      <option  value="103105058/mod7lec25.html">The Separated Flow  Model  (Contd.)</option>
      
      <option  value="103105058/mod7lec26.html">The Separated Flow  Model   (Contd.)</option>
      
      <option  value="103105058/mod8lec27.html">Flow Regime Based Models</option>
      
      <option  value="103105058/mod8lec28.html">Flow Regime Based Models  (Contd.)</option>
      
      <option  value="103105058/mod8lec29.html">Flow Regime Based Models ( Contd.)</option>
      
      <option  value="103105058/mod8lec30.html">Flow Regime  Based  Models (Contd.)</option>
      
      <option  value="103105058/mod8lec31.html"> Flow Regime Based Models  (Contd.)</option>
      
      <option  value="103105058/mod9lec32.html">Two Phase Flow with Phase Change</option>
      
      <option  value="103105058/mod9lec33.html">Two Phase Flow with Phase Change (Contd.)</option>
      
      <option  value="103105058/mod10lec34.html">Parametric Measurement of Two Phase Flow</option>
      
      <option  value="103105058/mod10lec35.html">Parametric Measurement of Two Phase Flow    (Contd.)</option>
      
      <option  value="103105058/mod10lec36.html">Parametric Measurement of Two Phase Flow     (Contd.)</option>
      
      <option  value="103105058/mod10lec37.html">Parametric Measurement of Two Phase Flow        (Contd.)</option>
      
      <option  value="103105058/mod10lec38.html">Parametric Measurement of Two Phase  Flow  (Contd.)</option>
      
      <option  value="103105058/mod10lec39.html">Parametric  Measurement of Two Phase Flow   (Contd.)</option>
      
      <option  value="103105058/mod10lec40.html">Parametric  Measurement of Two Phase Flow (Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103105059</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Multiphase Flow</strong></td>
	<td><strong>Prof. Gargi Das,Prof. P.K. Das</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
     <option value="103105059/mod01lec01.mp4">Introduction</option>
<option value="103105059/mod01lec02.mp4">Estimation of Flow Patterns</option>
<option value="103105059/mod01lec03.mp4">Estimation of Flow Patterns (Contd.)</option>
<option value="103105059/mod01lec04.mp4">Flow Pattern Maps Fascinating Taylor Bubbles</option>
<option value="103105059/mod01lec05.mp4">Definitions and Common Terminologies</option>
<option value="103105059/mod01lec06.mp4">Definitions and Common Terminologies (Contd.)</option>
<option value="103105059/mod01lec07.mp4">Simple Analytical Models</option>
<option value="103105059/mod01lec08.mp4">The Homogeneous Flow Theory</option>
<option value="103105059/mod01lec09.mp4">The Homogeneous Flow Theory (Contd.)</option>
<option value="103105059/mod01lec10.mp4">Compressible Flow A Recapitulation</option>
<option value="103105059/mod01lec11.mp4">Compressible Flow A Recapitulation (Contd.)</option>
<option value="103105059/mod01lec12.mp4">Choked Flow Condition for Homogeneous Flow</option>
<option value="103105059/mod01lec13.mp4">Drift Flux Model</option>
<option value="103105059/mod01lec14.mp4">Drift Flux Model  (Contd.)</option>
<option value="103105059/mod01lec15.mp4">Drift Flux Model  (Contd. )</option>
<option value="103105059/mod01lec16.mp4">Drift Flux Model  ( Contd.)</option>
<option value="103105059/mod01lec17.mp4">Separated Flow Model</option>
<option value="103105059/mod01lec18.mp4">Separated Flow Model (Contd. )</option>
<option value="103105059/mod01lec19.mp4">Separated Flow Model ( Contd. )</option>
<option value="103105059/mod01lec20.mp4">Separated Flow Model - Condition of Choking</option>
<option value="103105059/mod01lec21.mp4">Separated Flow Model - Condition of Choking (Contd.)</option>
<option value="103105059/mod01lec22.mp4">Separated Flow Model - Estimation of Frictional Pressure Drop and Void Fraction </option>
<option value="103105059/mod01lec23.mp4">Separated Flow Model - Estimation of Frictional Pressure Drop and Void Fraction (Contd.)</option>
<option value="103105059/mod01lec24.mp4">Separated Flow Model - Estimation of Frictional Pressure Drop and Void Fraction (Contd. )</option>
<option value="103105059/mod01lec25.mp4">Separated Flow Model - Estimation of Frictional Pressure Drop and Void Fraction ( Contd. )</option>
<option value="103105059/mod01lec26.mp4">Analysis of Specific Flow Regimes</option>
<option value="103105059/mod01lec27.mp4">Analysis of Specific Flow Regimes (Contd.)</option>
<option value="103105059/mod01lec28.mp4">Analysis of Specific Flow Regimes - Slug Flow (Contd.)</option>
<option value="103105059/mod01lec29.mp4">Two Phase Flow with Phase Change - An Introduction to Boiling Heat Transfer</option>
<option value="103105059/mod01lec30.mp4">Bubble Growth</option>
<option value="103105059/mod01lec31.mp4">Different Types of Nucleation</option>
<option value="103105059/mod01lec32.mp4">Ibullition from Hot Surfaces</option>
<option value="103105059/mod01lec33.mp4">Cycle of Bubble Growth and Departure</option>
<option value="103105059/mod01lec34.mp4">Heat Transfer in Different Regimes of Boiling</option>
<option value="103105059/mod01lec35.mp4">Heat Transfer in Different Regimes of Boiling (Contd.)</option>
<option value="103105059/mod01lec36.mp4">Critical Heat Flux , Film Boiling</option>
<option value="103105059/mod01lec37.mp4">Measuerement Techniques for Two Phase flow Parameters</option>
<option value="103105059/mod01lec38.mp4">Measuerement Techniques for Two Phase flow Parameters - Void Fraction Measurement</option>
<option value="103105059/mod01lec39.mp4">Measuerement Techniques for Two Phase flow Parameters - Void Fraction Measurement (Contd.)</option>
<option value="103105059/mod01lec40.mp4">Measurement Techniques for Two - Phase Flow Parameters - Estimation of Flow Patterns</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103105060</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Novel Separation Processes</strong></td>
	<td><strong>Prof. S. De</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103105060/m1l1_fundamentals_of_separation_processes.html">Lecture 1 : Fundamentals of Separation Processes</option>
      
      <option  value="103105060/m2l1_fundamentals_of_separation_processes.html">Lecture 1 :Various Separation Processes and Identification of Novel Separation Processes</option>
      
      <option  value="103105060/m3l1_membrane_based_separation_processes.html">Lecture 1 :Membrane Based Separation Processes</option>
      
      <option  value="103105060/m3l2_membrane_based_separation_processes(contd).html">Lecture 2 :Membrane Based Separation Processes ( Continued) </option>
      
      <option  value="103105060/m3l3_membrane_based_separation_processes(contd).html">Lecture 3 : Membrane Based Separation Processes ( Continued)</option>
      
      <option  value="103105060/m3l4_membrane_based_separation_processes(contd).html">Lecture 4 : Membrane Based Separation Processes ( Continued)</option>
      
      <option  value="103105060/m3l5_membrane_based_separation_processes(contd).html">Lecture 5 : Membrane Based Separation Processes ( Continued)</option>
      
      <option  value="103105060/m3l6_membrane_based_separation_processes(contd).html">Lecture 6 : Membrane Based Separation Processes ( Continued)</option>
      
      <option  value="103105060/m3l7_membrane_based_separation_processes(contd).html">Lecture 7 : Membrane Based Separation Processes ( Continued)</option>
      
      <option  value="103105060/m3l8_membrane_based_separation_processes(contd).html">Lecture 8 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l9_membrane_based_separation_processes(contd).html">Lecture 9 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l10_membrane_based_separation_processes(contd).html">lecture 10 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l12_membrane_based_separation_processes(contd).html">Lecture 12 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l13_membrane_based_separation_processes(contd).html">Lecture 13 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l14_membrane_based_separation_processes(contd).html">Lecture 14 :Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l15_membrane_based_separation_processes(contd).html">Lecture 15 :Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l16_membrane_based_separation_processes(contd).html">Lecture 16 :Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l17_membrane_based_separation_processes(contd).html">Lecture 17 :Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l18_membrane_based_separation_processes(contd).html">Lecture 18 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l19_membrane_based_separation_processes(contd).html">Lecture 19 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l20_membrane_based_separation_processes(contd).html">Lecture 20 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m3l21_slove_problem1.html">Lecture 21 : Membrane Based Separation Processes(Continued)</option>
      
      <option  value="103105060/m4l1_external_field_induced_membrane_separation.html">Lecture 1 - External Field Induced Membrane Separation Processes For Colloidal Particles</option>
      
      <option  value="103105060/m4l2_external_field_induced_membrane_separation_(contd).html">Lecture 2 - External Field Induced Membrane Separation  Processes For Colloidal Particles: (Continued)</option>
      
      <option  value="103105060/m4l3_external_field_induced_membrane_separation_contd.html">Lecture 3 - External Field Induced Membrane Separation  Processes For Colloidal Particles:(Continued)</option>
      
      <option  value="103105060/m4l4_external_field_induced_membrane_separation_(contd).html">Lecture 4 - External Field Induced Membrane Separation  Processes For Colloidal Particles:(Continued)</option>
      
      <option  value="103105060/m4l5_slove_prob.html">Lecture 5 - Solved Problems</option>
      
      <option  value="103105060/m4l6_slove_prob(contd).html">Lecture 5 - Solved Problems: (Continued)</option>
      
      <option  value="103105060/m5l1_gas.html">Lecture 1 : Gas Separation:</option>
      
      <option  value="103105060/m5l2_gas(contd).html">Lecture 2  : Gas Separation:(Continued)</option>
      
      <option  value="103105060/m6l1_surfactant_based_separation_processes.html">Lecture 1 : Surfactant Based  Separation Processes</option>
      
      <option  value="103105060/m6l2_surfactant_based_separation_processes(contd).html">Lecture 2 - Surfactant Based  Separation Processes:   (Continued)</option>
      
      <option  value="103105060/m6l3_surfactant_based_separation_processes(contd).html">Lecture 3 - Surfactant Based  Separation Processes:  (Continued) </option>
      
      <option  value="103105060/m6l4_surfactant_based_separation_processes(contd).html">Lecture 4 - Surfactant Based  Separation Processes:  (Continued)</option>
      
      <option  value="103105060/m7l1_centrifugal_separation_processes.html">Lecture 1 : Centrifugal Separation Processes</option>
      
      <option  value="103105060/m7l2_centrifugal_separation_processes(contd).html">Lecture 2 - Centrifugal Separation Processes:( Continued)</option>
      
      <option  value="103105060/m8l1_chromatographic_separation_and_ion_exchange.html">	Lecture 1 :Chromatographic Separation and Ion Exchange</option>
      
      <option  value="103105060/m8l2_chromatographic_separation_and_ion_exchange(contd).html">	Lecture 2 - Chromatographic Separation and Ion Exchange:  (Continued)</option>
      
      <option  value="103105060/m9l1_electrophoretic_separation_methods.html">Lecture 1 : Electrophoretic Separation Methods</option>
      
      <option  value="103105060/m10l1_supercritical_fluid_extraction.html">Lecture 1 : Supercritical Fluid Extraction</option>
      
      <option  value="103105060/m10l2_supercritical_fluid_extraction(contd).html">Lecture 2 - Electrophoretic Separation Methods:(Continued)</option>
      
      <option  value="103105060/m9l2_electrophoretic_separation_methods(contd).html">Lecture 2 : Electrophoretic Separation Methods:(Continued)</option>
      
      <option  value="103105060/m3l11_1membrane_based_separation_processes(contd).html">Lecture 11 - Membrane Based Separation Processes:  ( Continued)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103105061</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Novel Separation Processes</strong></td>
	<td><strong>Prof. S. De</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
     <option value="103105061/mod01lec01.mp4">Fundamentals of Separation Processes</option>
<option value="103105061/mod01lec02.mp4">Identification of Novel Separation Processes</option>
<option value="103105061/mod01lec03.mp4">Membrane Separation Processes</option>
<option value="103105061/mod01lec04.mp4">Membrane Separation Processes (Contd...1)</option>
<option value="103105061/mod01lec05.mp4">Membrane Separation Processes (Contd...2)</option>
<option value="103105061/mod01lec06.mp4">Membrane Separation Processes (Contd...3)</option>
<option value="103105061/mod01lec07.mp4">Membrane Separation Processes (Contd...4)</option>
<option value="103105061/mod01lec08.mp4">Membrane Separation Processes (Contd...5)</option>
<option value="103105061/mod01lec09.mp4">Membrane Separation Processes (Contd...6)</option>
<option value="103105061/mod01lec10.mp4">Membrane Separation Processes (Contd...7)</option>
<option value="103105061/mod01lec11.mp4">Membrane Separation Processes (Contd...8)</option>
<option value="103105061/mod01lec12.mp4">Membrane Separation Processes (Contd...9)</option>
<option value="103105061/mod01lec13.mp4">Membrane Separation Processes (Contd...10)</option>
<option value="103105061/mod01lec14.mp4">Membrane Separation Processes (Contd...11)</option>
<option value="103105061/mod01lec15.mp4">Membrane Separation Processes (Contd...12)</option>
<option value="103105061/mod01lec16.mp4">Membrane Separation Processes (Contd...13)</option>
<option value="103105061/mod01lec17.mp4">Membrane Separation Processes (Contd...14)</option>
<option value="103105061/mod01lec18.mp4">Membrane Separation Processes (Contd...15)</option>
<option value="103105061/mod01lec19.mp4">Membrane Separation Processes (Contd...16)</option>
<option value="103105061/mod01lec20.mp4">Membrane Separation Processes (Contd...17)</option>
<option value="103105061/mod01lec21.mp4">Membrane Separation Processes (Contd...18)</option>
<option value="103105061/mod01lec22.mp4">External Field Induced Membrane Separation Processes</option>
<option value="103105061/mod01lec23.mp4">External Field Induced Membrane Separation Processes (Contd...1)</option>
<option value="103105061/mod01lec24.mp4">External Field Induced Membrane Separation Processes (Contd...2)</option>
<option value="103105061/mod01lec25.mp4">External Field Induced Membrane Separation Processes (Contd...3)</option>
<option value="103105061/mod01lec26.mp4">External Field Induced Membrane Separation Processes (Contd...4)</option>
<option value="103105061/mod01lec27.mp4">Gas Separation</option>
<option value="103105061/mod01lec28.mp4">Gas Separation (Contd.)</option>
<option value="103105061/mod01lec29.mp4">Surfactant Based Separation Processes</option>
<option value="103105061/mod01lec30.mp4">Surfactant Based Separation Processes (Contd.)</option>
<option value="103105061/mod01lec31.mp4">Micellar Enhanced Ultrafiltration</option>
<option value="103105061/mod01lec32.mp4">Micellar Enhanced Ultrafiltration (Contd.)</option>
<option value="103105061/mod01lec33.mp4">Liquid Membranes</option>
<option value="103105061/mod01lec34.mp4">Liquid Membranes (Contd.)</option>
<option value="103105061/mod01lec35.mp4">Centrifugal Separation Processes</option>
<option value="103105061/mod01lec36.mp4">Chromatographic Separation Processes</option>
<option value="103105061/mod01lec37.mp4">Chromatographic Separation Processes (Contd.)</option>
<option value="103105061/mod01lec38.mp4">Ion Exchange Processes</option>
<option value="103105061/mod01lec39.mp4">Electrophoretic Separation Methods</option>
<option value="103105061/mod01lec40.mp4">Electrophoretic Separation Methods (Contd.)</option>
<option value="103105061/mod01lec41.mp4">Supercritical Fluid Extraction</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103105066</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Instability and Patterning of Thin Polymer Films</strong></td>
	<td><strong>Dr. R. Mukherjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
     <option value="103105066/mod01lec01.mp4">Introduction</option>
<option value="103105066/mod01lec02.mp4">Introduction (Contd.)</option>
<option value="103105066/mod01lec03.mp4">Some Fundamental Surface Related Concepts - I</option>
<option value="103105066/mod01lec04.mp4">Surface Tension (in terms of molecular interactions)</option>
<option value="103105066/mod01lec05.mp4">Effect Surface Tension : Laplace Pressure</option>
<option value="103105066/mod01lec06.mp4">Young Laplace Equation</option>
<option value="103105066/mod01lec07.mp4">Rayleish Instability</option>
<option value="103105066/mod01lec08.mp4">Meso Scale Fabrication Approaches</option>
<option value="103105066/mod01lec09.mp4">Photo Lithography - I</option>
<option value="103105066/mod01lec10.mp4">Photo Lithography - II</option>
<option value="103105066/mod01lec11.mp4">Photo Lithography - III</option>
<option value="103105066/mod01lec12.mp4">Photo Lithography - IV</option>
<option value="103105066/mod01lec13.mp4">Photo Lithography - V</option>
<option value="103105066/mod01lec14.mp4">Nano Imprint Lithography</option>
<option value="103105066/mod01lec15.mp4">Nano Imprint Lithography (Contd.)</option>
<option value="103105066/mod01lec16.mp4">Soft Lithography - I</option>
<option value="103105066/mod01lec17.mp4">Soft Lithography - II</option>
<option value="103105066/mod01lec18.mp4">Soft Lithography - III</option>
<option value="103105066/mod01lec19.mp4">Soft Lithography - IV</option>
<option value="103105066/mod01lec20.mp4">Soft Lithography - V</option>
<option value="103105066/mod01lec21.mp4">Soft Lithography - VI</option>
<option value="103105066/mod01lec22.mp4">Atomic Force Microscope - I</option>
<option value="103105066/mod01lec23.mp4">Atomic Force Microscope - II</option>
<option value="103105066/mod01lec24.mp4">Atomic Force Microscope - III</option>
<option value="103105066/mod01lec25.mp4">Atomic Force Microscope - IV</option>
<option value="103105066/mod01lec26.mp4">Atomic Force Microscope - V</option>
<option value="103105066/mod01lec27.mp4">Intermolecular Forces between Particles and Surfaces - I</option>
<option value="103105066/mod01lec28.mp4">Intermolecular Forces between Particles and Surfaces - II</option>
<option value="103105066/mod01lec29.mp4">Intermolecular Forces between Particles and Surfaces - III</option>
<option value="103105066/mod01lec30.mp4">Intermolecular Forces between Particles and Surfaces - IV</option>
<option value="103105066/mod01lec31.mp4">Spontaneous instability and dwetting of thin polymer film - I</option>
<option value="103105066/mod01lec32.mp4">Spontaneous instability and dwetting of thin polymer film - II</option>
<option value="103105066/mod01lec33.mp4">Spontaneous instability and dwetting of thin polymer film - III</option>
<option value="103105066/mod01lec34.mp4">Spontaneous instability and dwetting of thin polymer film - IV</option>
<option value="103105066/mod01lec35.mp4">Spontaneous instability and dwetting of thin polymer film - V</option>
<option value="103105066/mod01lec36.mp4">Spontaneous instability and dwetting of thin polymer film - VI</option>
<option value="103105066/mod01lec37.mp4">Spontaneous instability and dwetting of thin polymer film - VII</option>
<option value="103105066/mod01lec38.mp4">Template Guided Dewetting</option>
<option value="103105066/mod01lec39.mp4">Elastic Contact Instability and Lithography</option>
<option value="103105066/mod01lec40.mp4">Gradient Surfaces</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103105106</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Advanced Mathematical Techniques in Chemical Engineering</strong></td>
	<td><strong>Prof. S. De</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
    <option value="103105106/mod01lec01.mp4">Introduction to vector space</option>
<option value="103105106/mod01lec02.mp4">Introduction to vector space (Contd.)</option>
<option value="103105106/mod01lec03.mp4">Onto, into, one to one function</option>
<option value="103105106/mod01lec04.mp4">Vectors</option>
<option value="103105106/mod01lec05.mp4">Vectors (Contd.)</option>
<option value="103105106/mod01lec06.mp4">Contraction Mapping</option>
<option value="103105106/mod01lec07.mp4">Contraction Mapping (Contd.)</option>
<option value="103105106/mod01lec08.mp4">Matrix, Determinant</option>
<option value="103105106/mod01lec09.mp4">Eigenvalue Problem in Discrete Domain</option>
<option value="103105106/mod01lec10.mp4">Eigenvalue Problem in Discrete Domain  (Contd.)</option>
<option value="103105106/mod01lec11.mp4">Eigenvalue Problem in Discrete Domain   (Contd.)</option>
<option value="103105106/mod01lec12.mp4">Eigenvalue Problem in Discrete Domain (Contd.)</option>
<option value="103105106/mod01lec13.mp4">Stability Analysis</option>
<option value="103105106/mod01lec14.mp4">Stability Analysis   (Contd.)</option>
<option value="103105106/mod01lec15.mp4">Stability Analysis    (Contd.)</option>
<option value="103105106/mod01lec16.mp4">More Examples</option>
<option value="103105106/mod01lec17.mp4">Partial Differential Equations</option>
<option value="103105106/mod01lec18.mp4">Partial Differential Equations(Contd.)</option>
<option value="103105106/mod01lec19.mp4">Eigenvalue Problem in Continuous Domain</option>
<option value="103105106/mod01lec20.mp4">Special ODEs</option>
<option value="103105106/mod01lec21.mp4">Adjoint Operator</option>
<option value="103105106/mod01lec22.mp4">Theorems of Eigenvalues and Eigenfunction</option>
<option value="103105106/mod01lec23.mp4">Solution PDE : Separation of Variables Method</option>
<option value="103105106/mod01lec24.mp4">Solution of Parabolic PDE : Separation of variables method</option>
<option value="103105106/mod01lec25.mp4">Solution of Parabolic PDE : Separation of Variables Method (Contd.)</option>
<option value="103105106/mod01lec26.mp4">Solution of Higher Dimensional PDEs</option>
<option value="103105106/mod01lec27.mp4">Solution of Higher Dimensional PDEs (Contd.)</option>
<option value="103105106/mod01lec28.mp4">Four Dimensional Parabolic PDE</option>
<option value="103105106/mod01lec29.mp4">Solution of Elliptic and Hyperbolic PDE</option>
<option value="103105106/mod01lec30.mp4">Solution of Elliptic and Hyperbolic PDE (Contd.)</option>
<option value="103105106/mod01lec31.mp4">PDE in Cylindrical and Spherical Coordinate </option>
<option value="103105106/mod01lec32.mp4">Solution of non-homogeneous PDE</option>
<option value="103105106/mod01lec33.mp4">Solution of non-homogeneous PDE (Contd.)</option>
<option value="103105106/mod01lec34.mp4">Solution of non-homogeneous Parabolic PDE</option>
<option value="103105106/mod01lec35.mp4">Solution of non-homogeneous Elliptic PDE</option>
<option value="103105106/mod01lec36.mp4">Solution of non-homogeneous Elliptic PDE (Contd.)</option>
<option value="103105106/mod01lec37.mp4">Similarity Solution</option>
<option value="103105106/mod01lec38.mp4">Similarity Solution (Contd.)</option>
<option value="103105106/mod01lec39.mp4">Integral Method</option>
<option value="103105106/mod01lec40.mp4">Laplace Transform</option>
<option value="103105106/mod01lec41.mp4">Fourier Transform</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103106068</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Advanced Transport Phenomena</strong></td>
	<td><strong>Dr. R. Nagarajan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103106068/Lec-1/index.htm">Overview & �Bulb Blackening� Example</option>
      
      <option  value="103106068/Lec-2/index.htm">Overview & �Hot Corrosion� Example</option>
      
      <option  value="103106068/Lec-3/index.htm">Transport Laws: Assumptions & Control Volumes</option>
      
      <option  value="103106068/Lec-4/index.htm">Conservation Principles: Mass Conservation</option>
      
      <option  value="103106068/Lec-5/index.htm">Conservation Principles: Momentum & Energy Conservation</option>
      
      <option  value="103106068/Lec-6/index.htm">Conservation Principles: Entropy Conservation</option>
      
      <option  value="103106068/Lec-7/index.htm">Conservation Equations: Alternative Formulations</option>
      
      <option  value="103106068/Lec-8/index.htm">Conservation Equations: Across Discontinuities, Turbulent Flows & Multiphase Flows</option>
      
      <option  value="103106068/Lec-9/index.htm">Constitutive Laws: Momentum Transfer</option>
      
      <option  value="103106068/Lec-10/index.htm">Constitutive Laws: Energy & Mass Transfer</option>
      
      <option  value="103106068/Lec-11/index.htm">Constitutive Laws: Illustrative Problems</option>
      
      <option  value="103106068/Lec-12/index.htm">Momentum Transport: Steady Compressible Fluid Flow</option>
      
      <option  value="103106068/Lec-13/index.htm">Momentum Transport: Shock Waves</option>
      
      <option  value="103106068/Lec-14/index.htm">Momentum Transport: Flow over a Solid Wall  </option>
      
      <option  value="103106068/Lec-15/index.htm">Momentum Transport: Steady Laminar Flow</option>
      
      <option  value="103106068/Lec-16/index.htm">Momentum Transport: Flow in Porous Media & Packed Beds</option>
      
      <option  value="103106068/Lec-17/index.htm">Momentum Transport: Illustrative Problems</option>
      
      <option  value="103106068/Lec-18/index.htm">Energy Transport: Flow Past Hot Sphere</option>
      
      <option  value="103106068/Lec-19/index.htm">Energy Transport: Steady-State Heat Conduction</option>
      
      <option  value="103106068/Lec-20/index.htm">Energy Transport: Transient Heat Diffusion</option>
      
      <option  value="103106068/Lec-21/index.htm">Energy Transport: Convective Heat Transfer</option>
      
      <option  value="103106068/Lec-22/index.htm">Energy Transport: Analogy to Momentum Transfer</option>
      
      <option  value="103106068/Lec-23/index.htm">Energy Transport: Radiation & Illustrative Problems </option>
      
      <option  value="103106068/Lec-24/index.htm">Mass Transport: Ideal Reactors & Transport Mechanisms</option>
      
      <option  value="103106068/Lec-25/index.htm">Mass Transport: Composite Planar Slab</option>
      
      <option  value="103106068/Lec-26/index.htm">Mass Transport: Diffusion with Chemical Reaction</option>
      
      <option  value="103106068/Lec-27/index.htm">Mass Transport: Two-Phase Flow</option>
      
      <option  value="103106068/Lec-28/index.htm">Mass Transport: Non-Ideal Flow Reactors </option>
      
      <option  value="103106068/Lec-29/index.htm">Mass Transport: Illustrative Problems</option>
      
      <option  value="103106068/Lec-30/index.htm">Similitude Analysis: Dimensional Analysis</option>
      
      <option  value="103106068/Lec-31/index.htm">Similitude Analysis: Full & Partial</option>
      
      <option  value="103106068/Lec-32/index.htm">Similitude Analysis: Flame Flashback, Blowoff & Height</option>
      
      <option  value="103106068/Lec-33/index.htm">Similitude Analysis: Illustrative Problems</option>
      
      <option  value="103106068/Lec-34/index.htm">Problem Solving Techniques, Aids, Philosophy</option>
      
      <option  value="103106068/Lec-35/index.htm">Illustrative Example: Flame Propagation</option>
      
      <option  value="103106068/Lec-36/index.htm">Outline of Numerical Solution Methods</option>
      
      <option  value="103106068/Lec-37/index.htm">Illustrative Example: Protective Oxide Dissolution on GT Blades</option>
      
      <option  value="103106068/Lec-38/index.htm">Student Exercises: True/ False Questions</option>
      
      <option  value="103106068/Lec-39/index.htm">Students Exercises: Numerical Questions (Modules 1-5)</option>
      
      <option  value="103106068/Lec-40/index.htm">Students Exercises: Numerical Questions (Modules 6-8)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103106073</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Computational Fluid Dynamics</strong></td>
	<td><strong>Prof. Sreenivas Jayanti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103106073/mod01lec01.mp4">Motivation for CFD and Introduction to the CFD approach</option>
      
      <option  value="103106073/mod01lec02.mp4">Illustration of the CFD approach through a worked out example</option>
      
      <option  value="103106073/mod02lec03.mp4">Eulerian approach, Conservation Equation, Derivation of Mass Conservation Equation and Statement of the momentum conservation equation</option>
      
      <option  value="103106073/mod02lec04.mp4">Forces acting on a control volume; Stress tensor; Derivation of the momentum conservation equation ; Closure problem; Deformation  of a fluid element in fluid flow</option>
      
      <option  value="103106073/mod02lec05.mp4">Kinematics of deformation in fluid flow; Stress vs strain rate relation; Derivation of the  Navier-Stokes equations  </option>
      
      <option  value="103106073/mod02lec06.mp4">Equations governing flow of incompressible flow; Initial and boundary conditions;   Wellposedness of a fluid flow problem </option>
      
      <option  value="103106073/mod02lec07.mp4">Equations for some simple cases; Generic scalar transport equation form of the  governing equations; Outline of the approach to the solution of the N -S equations.  </option>
      
      <option  value="103106073/mod03lec08.mp4">cut out the first 30s; Spatial discretization of a simple flow domain; Taylor�s series  expansion and the basis of finite difference approximation of a derivative; Central and one-sided difference approximations; Order of accuracy of finite difference ap</option>
      
      <option  value="103106073/mod03lec09.mp4"> Finite difference approximation of pth order of accuracy for qth order derivative; cross -derivatives; Examples of high order accurate formulae for several derivatives  </option>
      
      <option  value="103106073/mod03lec10.mp4">One -sided high order accurate approximations;  Explicit and implicit formulations for  the time derivatives  </option>
      
      <option  value="103106073/mod03lec11.mp4">Numerical solution of the unsteady advection equation  using different finite difference  approximations  </option>
      
      <option  value="103106073/mod03lec12.mp4">Need for analysis of a discretization scheme; Concepts of consistency, stability and  convergence and the equivalence theorem of Lax ;   Analysis for consistency  </option>
      
      <option  value="103106073/mod03lec13.mp4">Statement of the stability problem; von Neumann stability analysis  of the first order  wave equation</option>
      
      <option  value="103106073/mod03lec14.mp4">Consistency and stability analysis of the unsteady diffusion equation; Analysis for two-  and three -dimensional cases; Stability of implicit schemes </option>
      
      <option  value="103106073/mod03lec15.mp4">Interpretation of the stability condition; Stability analysis of the generic scalar equation   and the concept of upwinding ; Diffusive and dissipative errors in numerical solution;  Introduction to the concept of TVD schemes  </option>
      
      <option  value="103106073/mod04lec16.mp4">Template for the generic scalar transport equation and its extension to the solution of  Navier-Stokes equa tions for a compressible flow.  </option>
      
      <option  value="103106073/mod04lec17.mp4">Illustration of application of the template using the MacCormack scheme  for a three-dimensional compressible flow</option>
      
      <option  value="103106073/mod04lec18.mp4">Stability limits of MacCormack scheme; Limitations in extending compressible flow  schemes to incompre ssible flows ; Difficulty of evaluation of pressure in incompressible  flows and listing of various approaches </option>
      
      <option  value="103106073/mod04lec19.mp4">Artificial compressibility method  and the streamfunction-vorticity method  for the  solution of NS equations  and their limitations </option>
      
      <option  value="103106073/mod04lec20.mp4">Pressur e equation method for the solution of NS equations </option>
      
      <option  value="103106073/mod04lec21.mp4">Pressure-correction approach to the solution of NS equations  on a staggered grid;  SIMPLE and its family of methods </option>
      
      <option  value="103106073/mod05lec22.mp4">Need for effici ent solution of linear algebraic equations; Classification of approaches  for the solution of linear algebraic equations.  </option>
      
      <option  value="103106073/mod05lec23.mp4">Direct methods for linear algebraic equations; Gaussian elimination method</option>
      
      <option  value="103106073/mod05lec24.mp4">Gauss-Jordan method; LU decomposition method; TDMA  and Thomas algorithm </option>
      
      <option  value="103106073/mod05lec25.mp4">Basic iterative methods for linear algebraic equations: Description of  point -Jacobi,  Gauss-Seidel and SOR methods </option>
      
      <option  value="103106073/mod05lec26.mp4">Convergence analysis of basic iterative schemes; Diagonal dominance condition for  convergence; Influence of source terms on the diagonal dominance condition; Rate of  convergence </option>
      
      <option  value="103106073/mod05lec27.mp4">Application to the Laplace equation </option>
      
      <option  value="103106073/mod05lec28.mp4">Advanced iterative methods: Alternating Direction Implicit Method; Operator splitting</option>
      
      <option  value="103106073/mod05lec29.mp4">Advanced iterative methods;  Strongly Implicit Proc edure; Conjugate gradient  method;  Multigrid method  </option>
      
      <option  value="103106073/mod05lec30.mp4">Illustration of the Multigrid method for the Laplace equation</option>
      
      <option  value="103106073/mod06lec31.mp4">Overview of the approach of numerical solution of NS  equations for simple domains;  Introduction to complexity arising from physics and geometry </option>
      
      <option  value="103106073/mod06lec32.mp4"> Derivation of the energy conservation equation </option>
      
      <option  value="103106073/mod06lec33.mp4"> Derivation of the species conservation equation; dealing with chemical reactions</option>
      
      <option  value="103106073/mod06lec34.mp4">Turbulence; Characteri stics of turbulent flow; Dealing with fluctuations and the  concept of time-averaging  </option>
      
      <option  value="103106073/mod06lec35.mp4"> Derivation of the Reynolds -averaged Navier -Stokes equations; identification of the  closure problem of turbulence; Boussinesq hypothesis  and eddy viscosity </option>
      
      <option  value="103106073/mod06lec36.mp4">Reynol ds stresses in turbulent flow; Time and length scales of turbulence; Energy  cascade; Mixing length model for eddy viscosity  </option>
      
      <option  value="103106073/mod06lec37.mp4">One-equation model for turbulent flow  </option>
      
      <option  value="103106073/mod06lec38.mp4"> Two -equation model for turbulent flow; Numerical calculation of turbulent reacting  flows </option>
      
      <option  value="103106073/mod06lec39.mp4">Calculation of near-wall region in turbulent flow; wall function approach; near-wall  turbulence models </option>
      
      <option  value="103106073/mod07lec40.mp4">Need for special methods for dealing with irregular fl ow geometry; Outline of the  Body-fitted grid approach ; Coordinate transformation to a general, 3-D curvilinear system</option>
      
      <option  value="103106073/mod07lec41.mp4">Transformation of the governing equations; Illustration for the Laplace equation;  Appearance and significance of cross -derivative terms; Concepts of structured and  unstructured grids.</option>
      
      <option  value="103106073/mod07lec42.mp4">Finite vol ume method for complicated flow domain; Illustration for the case of flow  through a duct of triangular cross -section. </option>
      
      <option  value="103106073/mod07lec43.mp4">Finite volume method for the general case  </option>
      
      <option  value="103106073/mod07lec44.mp4">Generation of a structured grid for irregular flow domain; Algebraic methods; Elliptic  grid generation method </option>
      
      <option  value="103106073/mod07lec45.mp4"> Unstructured grid generation; Domain nodalization; Advancing front method for  triangulation</option>
      
      <option  value="103106073/mod07lec46.mp4">Delaunay triangulation method for unstructured grid generation </option>
      
      <option  value="103106073/mod07lec47.mp4">Co -located grid approach for irregular geometries; Pressure correction equation for a  co -located structured grid; Pressure correction equation for a co-located unstructured grid.</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103106074</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Computational Techniques</strong></td>
	<td><strong>Dr. Niket S.Kaisare</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103106074/mod01lec01.mp4">Introduction</option>
      
      <option  value="103106074/mod02lec02.mp4">Computational and Error Analysis</option>
      
      <option  value="103106074/mod03lec03.mp4">Linear Equations Part 1</option>
      
      <option  value="103106074/mod03lec04.mp4">Linear Equations Part 2</option>
      
      <option  value="103106074/mod03lec05.mp4">Linear Equations Part 3</option>
      
      <option  value="103106074/mod03lec06.mp4">Linear Equations Part 4</option>
      
      <option  value="103106074/mod03lec07.mp4">Linear Equations Part 5</option>
      
      <option  value="103106074/mod03lec08.mp4">Linear Equations Part 6</option>
      
      <option  value="103106074/mod04lec09.mp4">Non Linear Algebraic Equations Part 1</option>
      
      <option  value="103106074/mod04lec10.mp4">Non Linear Algebraic Equations Part 2</option>
      
      <option  value="103106074/mod04lec11.mp4">Non Linear Algebraic Equations Part 3</option>
      
      <option  value="103106074/mod03lec12.mp4">Non Linear Algebraic Equations Part 4</option>
      
      <option  value="103106074/mod04lec13.mp4">Non Linear Algebraic Equations Part 5</option>
      
      <option  value="103106074/mod04lec14.mp4">Non Linear Algebraic Equations Part 6</option>
      
      <option  value="103106074/mod05lec15.mp4">Regression and Interpolation Part 1</option>
      
      <option  value="103106074/mod05lec16.mp4">Regression and Interpolation Part 2</option>
      
      <option  value="103106074/mod05lec17.mp4">Regression and Interpolation Part 3</option>
      
      <option  value="103106074/mod05lec18.mp4">Regression and Interpolation Part 4</option>
      
      <option  value="103106074/mod05lec19.mp4">Regression and Interpolation Part 5</option>
      
      <option  value="103106074/mod06lec20.mp4">Differentiation and Integration Part 1</option>
      
      <option  value="103106074/mod06lec21.mp4">Differentiation and Integration Part 2</option>
      
      <option  value="103106074/mod06lec22.mp4">Differentiation and Integration Part 3</option>
      
      <option  value="103106074/mod06lec23.mp4">Differentiation and Integration Part 4</option>
      
      <option  value="103106074/mod06lec24.mp4">Differentiation and Integration Part 5</option>
      
      <option  value="103106074/mod07lec25.mp4">Ordinary Differential Equations (initial value problems) Part 1</option>
      
      <option  value="103106074/mod07lec26.mp4">Ordinary Differential Equations (initial value problems) Part 2</option>
      
      <option  value="103106074/mod07lec27.mp4">Ordinary Differential Equations (initial value problems) Part 3</option>
      
      <option  value="103106074/mod07lec28.mp4">Ordinary Differential Equations  (initial value problems) Part 4</option>
      
      <option  value="103106074/mod07lec29.mp4">Ordinary Differential Equations (initial value problems) Part 5</option>
      
      <option  value="103106074/mod07lec30.mp4">Ordinary Differential Equations (initial value problems) Part 6</option>
      
      <option  value="103106074/mod7lec31.mp4">Ordinary Differential Equations  (initial value problems) Part 7</option>
      
      <option  value="103106074/mod07lec32.mp4">Ordinary Differential Equations (initial value problems) Part 8</option>
      
      <option  value="103106074/mod07lec33.mp4">Ordinary Differential Equations (initial value problems) Part 9</option>
      
      <option  value="103106074/mod08lec34.mp4">Ordinary Differential Equations (boundary value problems) Part 1</option>
      
      <option  value="103106074/mod08lec35.mp4">Ordinary Differential Equations (boundary value problems) Part 2</option>
      
      <option  value="103106074/mod08lec36.mp4">Ordinary Differential Equations (boundary value problems) Part 3</option>
      
      <option  value="103106074/mod09lec37.mp4">Partial Differential Equations Part 1</option>
      
      <option  value="103106074/mod09lec38.mp4">Partial Differential Equations Part 2</option>
      
      <option  value="103106074/mod09lec39.mp4">Partial Differential Equations Part 3</option>
      
      <option  value="103106074/mod09lec40.mp4">Partial Differential Equations Part 4</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103106075</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> Introduction to Microelectronic Fabrication Processes</strong></td>
	<td><strong>Dr. S. Ramanathan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103106075/Courses/Lecture1.html">Lecture 1: Introduction                                                             </option>
<option  value="103106075/Courses/Lecture2.html">Lecture 2: Lithography- Layout and Mask                                             </option>
<option  value="103106075/Courses/Lecture3.html">Lecture 3: Lithography- Basic process                                               </option>
<option  value="103106075/Courses/Lecture4.html">Lecture 4: Lithography- Basic process (continued)                                   </option>
<option  value="103106075/Courses/Lecture5.html">Lecture 5: :  Advanced lithography                                                  </option>
<option  value="103106075/Courses/Lecture6.html">Lecture 6: :  Advanced lithography-II                                               </option>
<option  value="103106075/Courses/Lecture7.html">Lecture 7: Lithography-production details, next generation lithography              </option>
<option  value="103106075/Courses/Lecture8.html">Lecture 8: :  Physical Vapor Deposition                                             </option>
<option  value="103106075/Courses/Lecture9.html">Lecture 9: :  Physical Vapor Deposition - continued                                 </option>
<option  value="103106075/Courses/Lecture10.html">Lecture 10: :  Physical Vapor Deposition and Chemical Vapor Deposition              </option>
<option  value="103106075/Courses/Lecture11.html">Lecture 11:  Chemical Vapor Deposition - continued                                  </option>
<option  value="103106075/Courses/Lecture12.html">Lecture 12:  Chemical Vapor Deposition, Electrochemical Deposition, Spin-on coating </option>
<option  value="103106075/Courses/Lecture13.html">Lecture 13:  Wet etching                                                            </option>
<option  value="103106075/Courses/Lecture14.html">Lecture 14:   Dry etching                                                           </option>
<option  value="103106075/Courses/Lecture15.html">Lecture 15: Dry etching Continued                                                   </option>
<option  value="103106075/Courses/Lecture16.html">Lecture 16: Chemical Mechanical Planarization (CMP)                                 </option>
<option  value="103106075/Courses/Lecture17.html">Lecture 17: CMP continued                                                           </option>
<option  value="103106075/Courses/Lecture18.html">Lecture 18: Band Structure                                                          </option>
<option  value="103106075/Courses/Lecture19.html">Lecture 19: Diodes                                                                  </option>
<option  value="103106075/Courses/Lecture20.html">Lecture 20: MOS transistor structure and operation                                  </option>
<option  value="103106075/Courses/Lecture21.html">Lecture 21: MOS transistor (continued)                                              </option>
<option  value="103106075/Courses/Lecture22.html">Lecture 22: MOS transistor Processing                                               </option>
<option  value="103106075/Courses/Lecture23.html">Lecture 23: MOS transistor fabrication and isolation                                </option>
<option  value="103106075/Courses/Lecture24.html">Lecture 24: Diffusion basics & Constant source diffusion                            </option>
<option  value="103106075/Courses/Lecture25.html">Lecture 25: Limited source diffusion                                                </option>
<option  value="103106075/Courses/Lecture26.html">Lecture 26: Diffusion- production issues                                            </option>
<option  value="103106075/Courses/Lecture27.html">Lecture 27: Ion implantation - basics                                               </option>
<option  value="103106075/Courses/Lecture28.html">Lecture 28: Ion implantation � non idealities                                       </option>
<option  value="103106075/Courses/Lecture29.html">Lecture 29: Oxidation - basics                                                      </option>
<option  value="103106075/Courses/Lecture30.html">Lecture 30: Oxidation - Modeling                                                    </option>
<option  value="103106075/Courses/Lecture31.html">Lecture 31: BEOL issues and Aluminum metallization                                  </option>
<option  value="103106075/Courses/Lecture32.html">Lecture 32:  Electromigration and copper metallization                              </option>
<option  value="103106075/Courses/Lecture33.html">Lecture 33: Testing Basics                                                          </option>
<option  value="103106075/Courses/Lecture34.html">Lecture 34: FBM                                                                     </option>
<option  value="103106075/Courses/Lecture35.html">Lecture 35: Yield and defects - basics                                              </option>
<option  value="103106075/Courses/Lecture36.html">Lecture 36: Yield models and data analysis                                          </option>
<option  value="103106075/Courses/Lecture37.html">Lecture 37: Yield analysis                                                          </option>
<option  value="103106075/Courses/Lecture38.html">Lecture 38: Yield analysis - continued                                              </option>
<option  value="103106075/Courses/Lecture39.html">Lecture 39: Scanning electron microscopy                                            </option>
<option  value="103106075/Courses/Lecture40.html">Lecture 40: SEM (continued) and atomic force microscopy                             </option>
<option  value="103106075/Courses/Lecture41.html">Lecture 41: AFM (Continued) and Ellipsometry                                        </option>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103106078</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> System (Process) Identification</strong></td>
	<td><strong>Dr. Arun K.Tangirala</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103106078/downloads/mod01lec01.pdf">Introduction and Scaling                       </option>
<option  value="103106078/downloads/mod01lec02.pdf">Step-wise procedure for identification         </option>
<option  value="103106078/downloads/mod01lec03.pdf">A quick tour of Identification                 </option>
<option  value="103106078/downloads/mod01lec04.pdf">Mathematical descriptions of systems (models)  </option>
<option  value="103106078/downloads/mod02lec01.pdf">Non-Parametric Descriptions                    </option>
<option  value="103106078/downloads/mod02lec02.pdf">Parametric Descriptions                        </option>
<option  value="103106078/downloads/mod02lec03.pdf">State-Space Descriptions                       </option>
<option  value="103106078/downloads/mod02lec04.pdf">Sampled-Data Systems                           </option>
<option  value="103106078/downloads/mod03lec01.pdf">Random Variables                               </option>
<option  value="103106078/downloads/mod03lec02.pdf">Covariance & Correlation                       </option>
<option  value="103106078/downloads/mod03lec03.pdf">Introduction to Random Processes               </option>
<option  value="103106078/downloads/mod03lec04.pdf">Auto-Correlation & Cross-Correlation Functions </option>
<option  value="103106078/downloads/mod03lec05.pdf">Moving Average Models                          </option>
<option  value="103106078/downloads/mod03lec06.pdf">Auto-Regressive Models                         </option>
<option  value="103106078/downloads/mod03lec07.pdf">ARIMA Models                                   </option>
<option  value="103106078/downloads/mod03lec08.pdf">Spectral Representations                       </option>
<option  value="103106078/downloads/mod04lec01.pdf">Introduction to Estimation                     </option>
<option  value="103106078/downloads/mod04lec02.pdf">Properties of estimators - I                   </option>
<option  value="103106078/downloads/mod04lec03.pdf">Properties of estimators - II                  </option>
<option  value="103106078/downloads/mod04lec04.pdf">Estimation methods: MoM, OLS methods           </option>
<option  value="103106078/downloads/mod04lec05.pdf">Estimation methods: Variants of OLS            </option>
<option  value="103106078/downloads/mod04lec06.pdf">Estimation methods: MLE, Bayesian methods      </option>
<option  value="103106078/downloads/mod04lec07.pdf">Estimation of Signal Properties                </option>
<option  value="103106078/downloads/mod05lec01.pdf">Overall Models for Identification              </option>
<option  value="103106078/downloads/mod05lec02.pdf">Predictions                                    </option>
<option  value="103106078/downloads/mod06lec01.pdf">Estimation of Time-Series Models               </option>
<option  value="103106078/downloads/mod06lec02.pdf">Estimation of Impulse / Step (Response) Models </option>
<option  value="103106078/downloads/mod06lec03.pdf">Estimation of Frequency Response Functions     </option>
<option  value="103106078/downloads/mod06lec04.pdf">Estimation of Parametric Input-Output Models   </option>
<option  value="103106078/downloads/mod07lec01.pdf">State-Space Models                             </option>
<option  value="103106078/downloads/mod07lec02.pdf">Sub-space Identification Algorithms            </option>
<option  value="103106078/downloads/mod08lec01.pdf">Model Structure Selection & Assessment         </option>
<option  value="103106078/downloads/mod08lec02.pdf">Case Studies                                   </option>
<option  value="103106078/downloads/mod09lec01.pdf">Identifiability & Informative Experiments      </option>
<option  value="103106078/downloads/mod09lec02.pdf">Inputs for identification of LTI systems       </option>
<option  value="103106078/downloads/mod10lec01.pdf">Recursive Identification                       </option>
<option  value="103106078/downloads/mod10lec02.pdf">Closed-Loop Identification                     </option>
<option  value="103106078/downloads/mod10lec03.pdf“>Non-linear identification                      </option>
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103106101</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> Nuclear Reactor Technology </strong></td>
	<td><strong>Dr. K.S. Rajan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103106101/Module - 1/Lecture - 1.pdf">Introduction to Reactor System                                                                                </option>
<option  value="103106101/Module - 1/Lecture - 2.pdf">Three Stage Indian Nuclear Programme                                                                          </option>
<option  value="103106101/Module - 2/Lecture - 1.pdf">Classification of Reactors                                                                                    </option>
<option  value="103106101/Module - 3/Lecture - 1.pdf">Core Configuration & Cycle diagram of Pressurized Water Reactor                                               </option>
<option  value="103106101/Module - 3/Lecture - 2.pdf">Core Configuration & Cycle diagram of Boiling Water Reactor                                                   </option>
<option  value="103106101/Module - 3/Lecture - 3.pdf">Pressurized Heavy Water Reactor                                                                               </option>
<option  value="103106101/Module - 3/Lecture - 4.pdf">Gas-Cooled Reactor, Advanced Heavy Water Reactor & Fast Reactor                                               </option>
<option  value="103106101/Module - 4/Lecture - 1.pdf">Comparison of different fuel materials                                                                        </option>
<option  value="103106101/Module - 4/Lecture - 2.pdf">Selection of Materials for Reactor Internals                                                                  </option>
<option  value="103106101/Module - 5/Lecture - 1.pdf">Principles of heat generation in thermal reactors                                                             </option>
<option  value="103106101/Module - 5/Lecture - 2.pdf">Heat Removal from Reactor Systems                                                                             </option>
<option  value="103106101/Module - 5/Lecture - 3.pdf">Heat flow and temperature distribution in plate fuel elements                                                 </option>
<option  value="103106101/Module - 5/Lecture - 4.pdf">Neutron flux profile in cylindrical fuel elements                                                             </option>
<option  value="103106101/Module - 5/Lecture - 5.pdf">Heat flow and temperature distribution in cylindrical fuel elements                                           </option>
<option  value="103106101/Module - 5/Lecture - 6.pdf">Heat flow and temperature distribution in cylindrical fuel elements.                                          </option>
<option  value="103106101/Module - 6/Lecture - 1.pdf">Primary heat transport system: Steam generators, Shutdown cooling                                             </option>
<option  value="103106101/Module - 6/Lecture - 2.pdf">Emergency Core Cooling System                                                                                 </option>
<option  value="103106101/Module - 6/Lecture - 3.pdf">Moderator & Moderator System                                                                                  </option>
<option  value="103106101/Module - 7/Lecture - 1.pdf">Auxiliary systems                                                                                             </option>
<option  value="103106101/Module - 8/Lecture - 1.pdf">Secondary Systems: Steam System                                                                               </option>
<option  value="103106101/Module - 8/Lecture - 2.pdf">Secondary Systems: Condensate/Feedwater Cycle                                                                 </option>
<option  value="103106101/Module - 9/Lecture - 1.pdf">Reactivity Balance & Reactor Control System                                                                   </option>
<option  value="103106101/Module - 9/Lecture - 2.pdf">Reactor Control System & Shutdown mechanisms                                                                  </option>
<option  value="103106101/Module - 10/Lecture - 1.pdf">Neutron Spectrum & Cross sections                                                                             </option>
<option  value="103106101/Module - 10/Lecture - 2.pdf">FBR Neutronics: Core and Blanket Characteristics                                                              </option>
<option  value="103106101/Module - 10/Lecture - 3.pdf">FBR Neutronics: Breeding potential, Breeding Ratio, Breeding Gain and Doubling time                           </option>
<option  value="103106101/Module - 11/Lecture - 1.pdf">Breeding                                                                                                      </option>
<option  value="103106101/Module - 11/Lecture - 2.pdf">Breeders an inexhaustible energy source                                                                       </option>
<option  value="103106101/Module - 12/Lecture - 1.pdf">Characteristics and types of fast reactors                                                                    </option>
<option  value="103106101/Module - 12/Lecture - 2.pdf">Comparison of characteristics of fast and thermal reactors, Role of fast reactors in Indian Nuclear Programme </option>
<option  value="103106101/Module - 13/Lecture - 1.pdf">General features of Fast Reactor Core                                                                         </option>
<option  value="103106101/Module - 13/Lecture - 2.pdf">Requirement and Choice of Core Materials                                                                      </option>
<option  value="103106101/Module - 13/Lecture - 3.pdf">Requirement and Choice of core materials.                                                                     </option>
<option  value="103106101/Module - 14/Lecture - 1.pdf">Design constraints - Maximum clad temperature, linear power rating                                            </option>
<option  value="103106101/Module - 14/Lecture - 2.pdf">Design constraints - Maximum allowable coolant velocity                                                       </option>
<option  value="103106101/Module - 14/Lecture - 3.pdf">Design constraints - Outlet temperature of coolant & pressure drop                                            </option>
<option  value="103106101/Module - 15/Lecture - 1.pdf">Introduction to sodium technology - Physical properties of sodium                                             </option>
<option  value="103106101/Module - 15/Lecture - 2.pdf">Introduction to sodium technology - Neutronic characteristics of sodium and complexities                      </option>
<option  value="103106101/Module - 15/Lecture - 3.pdf">Introduction to Sodium Technology - Heat Transport System (Primary Circuit)                                   </option>
<option  value="103106101/Module - 15/Lecture - 4.pdf">Introduction to Sodium Technology - Heat Transport System (Secondary Circuit)                                 |</option>
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103106103</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Particle Characterization (PG)</strong></td>
	<td><strong>Dr. R. Nagarajan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103106103/mod01lec01.mp4">Introduction: Why study particle characterization?</option>
      
      <option  value="103106103/mod01lec02.mp4">Introduction: Classification of particle characteristics</option>
      
      <option  value="103106103/mod02lec03.mp4">Morphological Characterization: Shape analysis methods</option>
      
      <option  value="103106103/mod02lec04.mp4">Morphological Characterization: Techniques of shape assessment </option>
      
      <option  value="103106103/mod02lec05.mp4">Morphological Characterization: Decision rules</option>
      
      <option  value="103106103/mod03lec06.mp4">Morphological Characterization:  Static vs dynamic methods of size analysis</option>
      
      <option  value="103106103/mod03lec07.mp4">Morphological Characterization: Static methods of size analysis</option>
      
      <option  value="103106103/mod03lec08.mp4">Morphological Characterization: Light scattering from spherical particles</option>
      
      <option  value="103106103/mod03lec09.mp4">Morphological Characterization: Particle counters</option>
      
      <option  value="103106103/mod03lec10.mp4">Morphological Characterization: Particle size distributions</option>
      
      <option  value="103106103/mod03lec11.mp4">Morphological Characterization: Acoustic Attenuation Spectroscopy</option>
      
      <option  value="103106103/mod03lec12.mp4">Morphological Characterization: Nano-particle size analysis</option>
      
      <option  value="103106103/mod04lec13.mp4">Structural Characterization</option>
      
      <option  value="103106103/mod05lec14.mp4">Interfacial Characterization</option>
      
      <option  value="103106103/mod06lec15.mp4">Surface Adhesion: Forces</option>
      
      <option  value="103106103/mod06lec16.mp4">Surface Adhesion: Electrostatic & Surface-Tension Forces</option>
      
      <option  value="103106103/mod06lec17.mp4">Surface Adhesion: Adhesion Force Measurement</option>
      
      <option  value="103106103/mod07lec18.mp4">Particle Removal: Methods</option>
      
      <option  value="103106103/mod07lec19.mp4">Particle Removal: Wet Cleaning</option>
      
      <option  value="103106103/mod08lec20.mp4">Particle Cohesion: Forces</option>
      
      <option  value="103106103/mod08lec21.mp4">Particle Cohesion: Flowability Implications</option>
      
      <option  value="103106103/mod09lec22.mp4">Transport Properties: Diffusion & Electrostatic Field Effects</option>
      
      <option  value="103106103/mod09lec23.mp4">Transport Properties: Drag & Inertia</option>
      
      <option  value="103106103/mod09lec24.mp4">Transport Properties: Deposition Fluxes & Rates</option>
      
      <option  value="103106103/mod09lec25.mp4">Transport Properties: Illustrative Application</option>
      
      <option  value="103106103/mod10lec26.mp4">Chemical & Compositional Characterization: Reactivity</option>
      
      <option  value="103106103/mod10lec27.mp4">Chemical & Compositional Characterization: Analytical Methods</option>
      
      <option  value="103106103/mod10lec28.mp4">Chemical & Compositional Characterization: XRD & AFM</option>
      
      <option  value="103106103/mod11lec29.mp4">Nano-particle Characterization: Bottom-Up Synthesis Methods</option>
      
      <option  value="103106103/mod11lec30.mp4">Nano-particle Characterization: Top-Down Synthesis Methods</option>
      
      <option  value="103106103/mod11lec31.mp4">Nano-particle Characterization: Dispersion</option>
      
      <option  value="103106103/mod11lec32.mp4">Nano-particle Characterization: Properties & Techniques</option>
      
      <option  value="103106103/mod12lec33.mp4">Practical Relevance of Particle Characterization: Nano-Fluids</option>
      
      <option  value="103106103/mod12lec34.mp4">Practical Relevance of Particle Characterization: Filtration</option>
      
      <option  value="103106103/mod12lec35.mp4">Practical Relevance of Particle Characterization: Cleanrooms</option>
      
      <option  value="103106103/mod12lec36.mp4">Practical Relevance of Particle Characterization: High-Technology Manufacturing</option>
      
      <option  value="103106103/mod12lec37.mp4">Practical Relevance of Particle Characterization: Explosivity</option>
      
      <option  value="103106103/mod12lec38.mp4">Practical Relevance of Particle Characterization: Environment & Human Health</option>
      
      <option  value="103106103/mod12lec39.mp4">Practical Relevance of Particle Characterization: Other Applications</option>
      
      <option  value="103106103/mod13lec40.mp4">Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103106108</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Heavy and Fine Chemicals (Chemical Process Technology)</strong></td>
	<td><strong>Dr. Nirmal K. Patel</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103106108/Lecture 1.pdf">HEAVY AND FINE CHEMICALS</option>
      
      <option  value="103106108/Lecture 2.pdf">CARBON DIOXIDE</option>
      
      <option  value="103106108/Lecture 3.pdf">OXYGEN AND NITROGEN</option>
      
      <option  value="103106108/Lecture 4.pdf">HYDROGEN</option>
      
      <option  value="103106108/Lecture 5.pdf">HYDROGEN (Continued)</option>
      
      <option  value="103106108/Lecture 6.pdf">AMMONIA</option>
      
      <option  value="103106108/Lecture 7.pdf">ACETYLENE</option>
      
      <option  value="103106108/Lecture 8.pdf">SODIUM CHLORIDE</option>
      
      <option  value="103106108/Lecture 9.pdf">SODIUM CARBONATE</option>
      
      <option  value="103106108/Lecture 10.pdf">SODIUM CARBONATE (continued)</option>
      
      <option  value="103106108/Lecture 11.pdf">SODIUM BICARBONATE</option>
      
      <option  value="103106108/Lecture 12.pdf">SODIUM HYDROXIDE</option>
      
      <option  value="103106108/Lecture 13.pdf">SODIUM HYDROXIDE (Continued)</option>
      
      <option  value="103106108/Lecture 14.pdf">SODIUM HYDROXIDE (Continued.)</option>
      
      <option  value="103106108/Lecture 15.pdf">CHLORINE</option>
      
      <option  value="103106108/Lecture 16.pdf">NITRIC ACID</option>
      
      <option  value="103106108/Lecture 17.pdf">SULFURIC ACID</option>
      
      <option  value="103106108/Lecture 18.pdf">SULFURIC ACID (continued)</option>
      
      <option  value="103106108/Lecture 19.pdf">HYDROCHLORIC ACID</option>
      
      <option  value="103106108/Lecture 20.pdf">PHOSPHOROUS</option>
      
      <option  value="103106108/Lecture 21.pdf">PHOSPHORIC ACID</option>
      
      <option  value="103106108/Lecture 22.pdf">CEMENT INDUSTRIES</option>
      
      <option  value="103106108/Lecture 23.pdf">CEMENT CLASSIFICATION (Continued)</option>
      
      <option  value="103106108/Lecture 24.pdf">CEMENT MANUFACTURE</option>
      
      <option  value="103106108/Lecture 25.pdf">CEMENT (Continued)</option>
      
      <option  value="103106108/Lecture 26.pdf">CERAMIC INDUSTRIES</option>
      
      <option  value="103106108/Lecture 27.pdf">WHITEWARES</option>
      
      <option  value="103106108/Lecture 28.pdf">CLAY PRODUCTS AND REFRACTORIES</option>
      
      <option  value="103106108/Lecture 29.pdf">SPECIALIZED CERAMIC PRODUCTS AND VITREOUS ENAMEL</option>
      
      <option  value="103106108/Lecture 30.pdf">GLASS INDUSTRIES</option>
      
      <option  value="103106108/Lecture 31.pdf">MANUFACTURE OF GLASS</option>
      
      <option  value="103106108/Lecture 32.pdf">GLASS (Continued)</option>
      
      <option  value="103106108/Lecture 33.pdf">FERTILIZER</option>
      
      <option  value="103106108/Lecture 34.pdf">AMMONIUM PHOSPHATE</option>
      
      <option  value="103106108/Lecture 35.pdf">SUPERPHOSPHATE</option>
      
      <option  value="103106108/Lecture 36.pdf">TRIPLE SUPERPHOSPHATE</option>
      
      <option  value="103106108/Lecture 37.pdf">UREA</option>
      
      <option  value="103106108/Lecture 38.pdf">CALCIUM AMMONIUM NITRATE</option>
      
      <option  value="103106108/Lecture 39.pdf">AMMONIUM CHLORIDE</option>
      
      <option  value="103106108/Lecture 40.pdf">AMMONIUM SULFATE</option>
      
      <option  value="103106108/Lecture 41.pdf">POTASSIUM CHLORIDE</option>
      
      <option  value="103106108/Lecture 42.pdf">POTASSIUM SULFATE</option>
      
      <option  value="103106108/Lecture 43.pdf">PAINT INDUSTRIES</option>
      
      <option  value="103106108/Lecture 44.pdf">PAINT INDUSTRIES (continued)</option>
      
      <option  value="103106108/Lecture 45.pdf">PAINT INDUSTRIES (continued.)</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103106109</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> Chemical process industries </strong></td>
	<td><strong>Dr. Nirmal K. Patel</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103106109/1-10/Lecture 1 Overview.pdf">Overview                            </option>
<option  value="103106109/1-10/Lecture 2 Material of construction.pdf ">Material of construction            </option>
<option  value="103106109/1-10/Lecture 3 Safety and waste disposal.pdf">Safety and waste disposal           </option>
<option  value="103106109/1-10/Lecture 4 Safety and waste disposal.pdf">Safety and waste disposal(Contd)    </option>
<option  value="103106109/1-10/Lecture 5 Acetic acid.pdf">Acetic acid                         </option>
<option  value="103106109/1-10/Lecture 6 Acetic acid.pdf">Acetic acid(contd)                  </option>
<option  value="103106109/1-10/Lecture 7 Formic acid.pdf">Formic acid                         </option>
<option  value="103106109/1-10/Lecture 8 Benzoic acid.pdf">Benzoic acid                        </option>
<option  value="103106109/1-10/Lecture 9 Phthalic acid.pdf">Phthalic acid                       </option>
<option  value="103106109/1-10/Lecture 10 Oxalic acid.pdf">Oxalic acid                         </option>
<option  value="103106109/11-20/Lecture 11 Fermenation industries.pdf ">Fermentation industries             </option>
<option  value="103106109/11-20/Lecture 12 Fementation industries.pdf ">Fermentation industries(contd)      </option>
<option  value="103106109/11-20/Lecture 13 Industrial alcohol.pdf">Industrial alcohol                  </option>
<option  value="103106109/11-20/Lecture 14 Absolute alcohol.pdf">Absolute alcohol                    </option>
<option  value="103106109/11-20/Lecture 15 Butyl alcohol.pdf">Butyl alcohol                       </option>
<option  value="103106109/11-20/Lecture 16 Glycerol.pdf">Glycerol                            </option>
<option  value="103106109/11-20/Lecture 17 Glycerol.pdf">Glycerol(contd)                     </option>
<option  value="103106109/11-20/Lecture 18 Ethylene glycol.pdf">Ethylene glycol                     </option>
<option  value="103106109/11-20/Lecture 19 Propylene glycol.pdf  ">Propylene glycol                    </option>
<option  value="103106109/11-20/Lecture 20 Sodium thiosulfate.pdf">Sodium thiosulfate                  </option>
<option  value="103106109/21-30/Lecture 21 Sodium bromide.pdf">Sodium bromide                      </option>
<option  value="103106109/21-30/Lecture 22 Sodium sulfate.pdf">Sodium sulfate                      </option>
<option  value="103106109/21-30/Lecture 23 Sodium sulfite.pdf">Sodium sulfite                      </option>
<option  value="103106109/21-30/Lecture 24 Fluorine.pdf">Fluorine                            </option>
<option  value="103106109/21-30/Lecture 25 Bromine.pdf">Bromine                             </option>
<option  value="103106109/21-30/Lecture 26 Iodine.pdf">Iodine                              </option>
<option  value="103106109/21-30/Lecture 27 Chlorine.pdf">Chlorine                            </option>
<option  value="103106109/21-30/Lecture 28 Chlorine.pdf">Chlorine(contd)                     </option>
<option  value="103106109/21-30/Lecture 29 Methyl chloride and Dichloromethane.pdf “>Methyl chloride and Dichloromethane </option>
<option  value="103106109/21-30/Lecture 30 Chloroform.pdf">Chloroform                          </option>
<option  value="103106109/31-40/Lecture 31 Carbon tetrachloride.pdf">Carbon tetrachloride                </option>
<option  value="103106109/31-40/Lecture 32 Electrothrmal industries.pdf            “>Electro thermal industries          </option>
<option  value="103106109/31-40/Lecture 33 Silicon carbide.pdf">Silicon carbide                     </option>
<option  value="103106109/31-40/Lecture 34 Calcium carbide.pdf">Calcium carbide                     </option>
<option  value="103106109/31-40/Lecture 35 Graphite and carbon electrode.pdf       “>Graphite and carbon electrodes      </option>
<option  value="103106109/31-40/Lecture 36 Dimethyl formamide.pdf">Dimethyl formamide                  </option>
<option  value="103106109/31-40/Lecture 37 Dimethyl sulfoxide.pdf">Dimethyl sulfoxide                  </option>
<option  value="103106109/31-40/Lecture 38 Tertrahydro furan.pdf">Tetrahydro furan                    </option>
<option  value="103106109/31-40/Lecture 39 Dimethyl ether.pdf">Dimethyl ether                      </option>
<option  value="103106109/31-40/Lecture 40 Diethyl ether.pdf">Diethyl ether                       </option>

	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103107082</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Chemical Technology - I</strong></td>
	<td><strong>Dr. I.D.Mall</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103107082/module1/lecture1/lecture1.pdf">Chemical Process Industries</option>
      
      <option  value="103107082/module1/lecture2/lecture2.pdf">Raw Material for Organic Chemical Industries</option>
      
      <option  value="103107082/module1/lecture3/lecture3.pdf">Basic Principles of Unit Processes & Unit Operations in Organic Chemical Industries</option>
      
      <option  value="103107082/module2/lecture1/lecture1.pdf">Coal as Chemical Feed Stock</option>
      
      <option  value="103107082/module2/lecture2/lecture2.pdf">Coal carbonization and Coke Oven Plant</option>
      
      <option  value="103107082/module2/lecture3/lecture3.pdf">Gasification of Coal, Petrocoke and Biomass</option>
      
      <option  value="103107082/module3/lecture1/lecture1.pdf">Introduction to Pulp and Paper Industry, Raw Material for Paper Industry and Technological Development</option>
      
      <option  value="103107082/module3/lecture2/lecture2.pdf">Pulping and Bleaching</option>
      
      <option  value="103107082/module3/lecture3/lecture3.pdf">Recovery of Chemicals from Kraft and Agrobased Mills</option>
      
      <option  value="103107082/module3/lecture4/lecture4.pdf">Stock Preparation and Paper Making</option>
      
      <option  value="103107082/module4/lecture1/lecture1.pdf">Introduction to Soap and Detergent, Soap Making and Recovery of Glycerine</option>
      
      <option  value="103107082/module4/lecture2/lecture2.pdf">Synthetic Detergent and Linear Alkyl Benzene</option>
      
      <option  value="103107082/module5/lecture1/lecture1.pdf">Introduction to Sugar , Fermentation Industry and Manufacture of Alcohol</option>
      
      <option  value="103107082/module5/lecture2/lecture2.pdf">Ethanol as Chemical Feedstock</option>
      
      <option  value="103107082/module6/lecture1/lecture1.pdf">Introduction : Status of Petroleum Refinery, Crude Oil and Natural Gas Origin, Occurrence, Exploration, Drilling and Processing, Fuel Norms</option>
      
      <option  value="103107082/module6/lecture2/lecture2.pdf">Evaluation of Crude Oil, Petroleum Products and Petrochemicals</option>
      
      <option  value="103107082/module6/lecture3/lecture3.pdf">Crude Oil Distillation</option>
      
      <option  value="103107082/module6/lecture4/lecture4.pdf">Thermal Cracking, Visbreaking and Delayed Coking</option>
      
      <option  value="103107082/module6/lecture5/lecture5.pdf">Catalytic Cracking, Fluid Catalytic Cracking and Hydro Cracking</option>
      
      <option  value="103107082/module6/lecture6/lecture6.pdf">Catalytic Reforming</option>
      
      <option  value="103107082/module6/lecture7/lecture7.pdf">Alkylation, Isomerisation and Polymerisation</option>
      
      <option  value="103107082/module6/lecture8/lecture8.pdf">Desulphurisation Processes and Recovery of Sulphur</option>
      
      <option  value="103107082/module7/lecture1/lecture1.pdf">Profile of Petrochemical Industry and its Structure</option>
      
      <option  value="103107082/module7/lecture2/lecture2.pdf">Naphtha and Gas Cracking for Production of Olefins</option>
      
      <option  value="103107082/module7/lecture3/lecture3.pdf">Recovery of Chemicals from FCC and Steam Cracker </option>
      
      <option  value="103107082/module7/lecture4/lecture4.pdf">Synthesis Gas and its Derivatives: Hydrogen, CO, Methanol, Formaldehyde, Metanol to Olefin Technology</option>
      
      <option  value="103107082/module7/lecture5/lecture5.pdf">Ethylene and Derivatives: Ethylene Oxide, Ethylene Glycol, Ethylene Dichloride and Vinyl Chloride, Acetaldehyde</option>
      
      <option  value="103107082/module7/lecture6/lecture6.pdf">Propylene, Propylene Oxide and Isopropanol, Acrylonitrile</option>
      
      <option  value="103107082/module7/lecture7/lecture7.pdf">Aromatic (BTX) Production</option>
      
      <option  value="103107082/module7/lecture8/lecture8.pdf">Aromatics Product Profile, Ethyl benzene &Styrene, Cumene and Phenol, Bisphenol, Aniline</option>
      
      <option  value="103107082/module8/lecture1/lecture1.pdf">Introduction to Polymer, Elastomer and Synthetic Fibre, Classification Polymerisation Reactions and Polymer </option>
      
      <option  value="103107082/module8/lecture2/lecture2.pdf">Polymer: Polyolefins: Polyethylene, Poly Propylene and Polystyrene</option>
      
      <option  value="103107082/module8/lecture3/lecture3.pdf">Polyvinyl chloride, Polycarbonate, Thermoset Resin:Phenol Formaldehyde, Urea Formaldehyde and Melamine Formaldehyde</option>
      
      <option  value="103107082/module8/lecture4/lecture4.pdf">Elastomers: Natural and Synthetic Rubber , Styrene Butadiene Rubber(SBR), Poly Butadiene, Nitrile Rubber</option>
      
      <option  value="103107082/module8/lecture5/lecture5.pdf">Cylohexane, Caprolactam, Nylon 6 Adipic Acid and Hexametrhylenediamine, Nylon66</option>
      
      <option  value="103107082/module8/lecture6/lecture6.pdf">DMT and Terephthalic Acid, Polyester, PET Resin, PBT Resin</option>
      
      <option  value="103107082/module8/lecture7/lecture7.pdf">Acrylonitrile, Acrylic Fibre, Modified Acrylic Fibre, Polyurethane</option>
      
      <option  value="103107082/module8/lecture8/lecture8.pdf">Cellulosic Fibre(Viscose Rayon and Acetate Rayon, Cuprammoium rayon)</option>
      
      <option  value="103107082/module9/lecture1/lecture1.pdf">Agrochemical Market</option>
      
      <option  value="103107082/module9/lecture2/lecture2.pdf">Dyes and Intermediate</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103107084</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Environmental Engineering</strong></td>
	<td><strong>Dr. V. C. Srivastava</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103107084/module1/lecture1/lecture1.pdf">Introduction to Environmental Engineering</option>
      
      <option  value="103107084/module1/lecture2/lecture2.pdf">Environmental Acts and Rules</option>
      
      <option  value="103107084/module1/lecture3/lecture3.pdf">Standards for ambient air, noise emission and effluents</option>
      
      <option  value="103107084/module1/lecture4/lecture4.pdf">Water Quality Monitoring: Collection of water samples & estimation of physical parameters</option>
      
      <option  value="103107084/module1/lecture5/lecture5.pdf">Water Quality Monitoring: Estimation of Chemical parameters</option>
      
      <option  value="103107084/module1/lecture6/lecture6.pdf">Water Quality Monitoring: Estimation of alkalinity, BOD & COD</option>
      
      <option  value="103107084/module1/lecture7/lecture7.pdf">Water Quality Monitoring: Estimation of fecal indicator bacteria</option>
      
      <option  value="103107084/module1/lecture8/lecture8.pdf">Characterization of Air Emissions</option>
      
      <option  value="103107084/module1/lecture9/lecture9.pdf">Fugitive Emission Control and Water Use Minimization</option>
      
      <option  value="103107084/module1/lecture10/lecture10.pdf">Water Recycling and Reuse</option>
      
      <option  value="103107084/module2/lecture1/lecture1.pdf">Introduction to Air Pollution and Control</option>
      
      <option  value="103107084/module2/lecture2/lecture2.pdf">Particulate Emission Control by Mechanical Separation & Wet Gas Scrubbing</option>
      
      <option  value="103107084/module2/lecture3/lecture3.pdf">Design of cyclones</option>
      
      <option  value="103107084/module2/lecture4/lecture4.pdf">Design of fabric filter</option>
      
      <option  value="103107084/module2/lecture5/lecture5.pdf">Particulate emission control by electrostatic precipitation</option>
      
      <option  value="103107084/module2/lecture6/lecture6.pdf">Design of ESP</option>
      
      <option  value="103107084/module2/lecture7/lecture7.pdf">Gaseous emission control by absorption and adsorption-1</option>
      
      <option  value="103107084/module3/lecture1/lecture1.pdf">Introduction to Water Pollution and Control</option>
      
      <option  value="103107084/module3/lecture2/lecture2.pdf">Pre-treatment & Physical treatment: Flow equalization</option>
      
      <option  value="103107084/module3/lecture3/lecture3.pdf">Pre-treatment & Physical treatment: Aeration Part 1</option>
      
      <option  value="103107084/module3/lecture4/lecture4.pdf">Pre-treatment & Physical treatment: Aeration Part 2</option>
      
      <option  value="103107084/module3/lecture5/lecture5.pdf">Pre-treatment & Physical treatment: Coagulation and flocculation � Part 1</option>
      
      <option  value="103107084/module3/lecture6/lecture6.pdf">Pre-treatment & Physical treatment: Coagulation and flocculation � Part 2</option>
      
      <option  value="103107084/module3/lecture7/lecture7.pdf">Setting and Sedimentation:  Part 1</option>
      
      <option  value="103107084/module3/lecture8/lecture8.pdf">Setting and Sedimentation:  Part 2</option>
      
      <option  value="103107084/module3/lecture9/lecture9.pdf">Settling Chamber Design</option>
      
      <option  value="103107084/module3/lecture10/lecture10.pdf">Filtration </option>
      
      <option  value="103107084/module3/lecture11/lecture11.pdf">Water Pollution Control By Membrane Based Technologies</option>
      
      <option  value="103107084/module3/lecture12/lecture12.pdf">Water Pollution Control by Adsorption: Part 1</option>
      
      <option  value="103107084/module3/lecture13/lecture13.pdf">Water Pollution Control by Adsorption: Part 2</option>
      
      <option  value="103107084/module3/lecture14/lecture14.pdf">Electrochemical Treatment</option>
      
      <option  value="103107084/module4/lecture1/lecture1.pdf">Introduction to Biological Treatment</option>
      
      <option  value="103107084/module4/lecture2/lecture2.pdf">Anaerobic and Aerobic Treatment Biochemical Kinetics</option>
      
      <option  value="103107084/module4/lecture3/lecture3.pdf">Activated sludge and lagoons</option>
      
      <option  value="103107084/module4/lecture4/lecture4.pdf">Trickling filter</option>
      
      <option  value="103107084/module4/lecture5/lecture5.pdf">Sequential Batch Reactor</option>
      
      <option  value="103107084/module4/lecture6/lecture6.pdf">UASB Reactor</option>
      
      <option  value="103107084/module5/lecture1/lecture1.pdf">Municipal and Solid Waste Disposal</option>
      
      <option  value="103107084/module5/lecture2/lecture2.pdf">Plastic Waste Management: Part I</option>
      
      <option  value="103107084/module5/lecture3/lecture3.pdf">Plastic Waste Management: Part II</option>
      
      <option  value="103107084/module5/lecture4/lecture4.pdf">Solids Waste Disposal � Composting</option>
      
      <option  value="103107084/module5/lecture5/lecture5.pdf">Landfilling</option>
      
      <option  value="103107084/module5/lecture6/lecture6.pdf">Gasification and incineration</option>
      
      <option  value="103107084/module2/lecture8/lecture8.pdf">Gaseous Emission Control by Absorption-2</option>
      
      <option  value="103107084/module4/lecture7/lecture7.pdf">Sludge Separation and Drying</option>
          </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103107086</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong> Fertilizer Engineering </strong></td>
	<td><strong>Dr. Amit Dhiman</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="103107086/module1/lecture1/lecture1.pdf">Introduction to Plant nutrients, Fertilizer specifications, Terminology and Definitions </option>
<option  value="103107086/module1/lecture2/lecture2.pdf">Classifications of Soil nutrients and  Fundamentals of Soil Nitrogen                    </option>
<option  value="103107086/module1/lecture3/lecture3.pdf">Fundamentals of Soil Phosphorus, Soil Potassium and Soil Sulfur                         </option>
<option  value="103107086/module2/lecture1/lecture1.pdf">Ammonia: Production and Storage - Part 1                                                </option>
<option  value="103107086/module2/lecture2/lecture2.pdf">Ammonia: Production and Storage - Part 2                                                </option>
<option  value="103107086/module2/lecture3/lecture3.pdf">Nitric acid � Part 1                                                                    </option>
<option  value="103107086/module2/lecture4/lecture4.pdf">Nitric acid � Part 2                                                                    </option>
<option  value="103107086/module2/lecture5/lecture5.pdf">Ammonium Nitrate                                                                        </option>
<option  value="103107086/module2/lecture6/lecture6.pdf">Production of Straight Granulated AN and CAN                                            </option>
<option  value="103107086/module2/lecture7/lecture7.pdf">Ammonium Sulphate                                                                       </option>
<option  value="103107086/module2/lecture8/lecture8.pdf">Calcium Nitrate                                                                         </option>
<option  value="103107086/module2/lecture9/lecture9.pdf">Ammonium chloride                                                                       </option>
<option  value="103107086/module2/lecture10/lecture10.pdf “>Sodium Nitrate                                                                          </option>
<option  value="103107086/module2/lecture11/lecture11.pdf “>Urea � Part 1                                                                           </option>
<option  value="103107086/module2/lecture12/lecture12.pdf “>Urea � Part 2                                                                           </option>
<option  value="103107086/module3/lecture1/lecture1.pdf">Sulphuric acid                                                                          </option>
<option  value="103107086/module3/lecture2/lecture2.pdf">Sulphuric Acid � Part 2                                                                 </option>
<option  value="103107086/module3/lecture3/lecture3.pdf">Phosphoric acid � Part 1                                                                </option>
<option  value="103107086/module3/lecture4/lecture4.pdf">Production Processes of Phosphoric acid                                                 </option>
<option  value="103107086/module3/lecture5/lecture5.pdf">Single supephosphate                                                                    </option>
<option  value="103107086/module3/lecture6/lecture6.pdf">Triple Superphosphate                                                                   </option>
<option  value="103107086/module3/lecture7/lecture7.pdf">Ammonium Phosphates                                                                     </option>
<option  value="103107086/module3/lecture8/lecture8.pdf">Nitrophosphate Fertilizers � Part 1                                                     </option>
<option  value="103107086/module3/lecture9/lecture9.pdf">Nitrophosphate Fertilizers � Part 2                                                     </option>
<option  value="103107086/module3/lecture10/lecture10.pdf “>Other Phosphate Fertilizers � Part 1                                                    </option>
<option  value="103107086/module3/lecture11/lecture11.pdf “>Other Phosphate Fertilizers � Part 2                                                    </option>
<option  value="103107086/module4/lecture1/lecture1.pdf">Potash Fertilizers                                                                      </option>
<option  value="103107086/module4/lecture2/lecture2.pdf">Potash Fertilizers - Potassium Sulphate                                                 </option>
<option  value="103107086/module4/lecture3/lecture3.pdf">Potash Fertilizers - Potassium Nitrate                                                  </option>
<option  value="103107086/module5/lecture1/lecture1.pdf">Compound Fertilizers: Part 1                                                            </option>
<option  value="103107086/module5/lecture2/lecture2.pdf">Compound Fertilizers: Part 2                                                            </option>
<option  value="103107086/module5/lecture3/lecture3.pdf">Processes for manufacturing compound fertilizers � Part 1                               </option>
<option  value="103107086/module5/lecture4/lecture4.pdf">Unique requirements for manufacturing urea based granular composed fertilizers          </option>
<option  value="103107086/module5/lecture5/lecture5.pdf">NPK Fertilizers � Mixed Acid route                                                      </option>
<option  value="103107086/module5/lecture6/lecture6.pdf">NPK Fertilizers � Nitrophosphate Route                                                  </option>
<option  value="103107086/module6/lecture1/lecture1.pdf">Environmental Issues Related to the Use of Fertilizers                                  </option>
<option  value="103107086/module6/lecture2/lecture2.pdf">Impact of Fertilizers on the environment                                                </option>
<option  value="103107086/module6/lecture3/lecture3.pdf">Environmental Impact of the Fertilizer Industry � Part 1                                </option>
<option  value="103107086/module6/lecture4/lecture4.pdf">Environmental Impact of the Fertilizer Industry � Part 2                                </option>
<option  value="103107086/module6/lecture5/lecture5.pdf">Environmental impact of Solid Fertilizer Industry                                       </option>

	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103107088</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Food Engineering</strong></td>
	<td><strong>Dr. Shishir Sinha</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103107088/module1/lecture1/lecture1.pdf">Introduction to Food Technology</option>
      
      <option  value="103107088/module2/lecture1/lecture1.pdf">World's Food Demand</option>
      
      <option  value="103107088/module2/lecture2/lecture2.pdf">Food demand scenario in India</option>
      
      <option  value="103107088/module3/lecture1/lecture1.pdf">nutrition</option>
      
      <option  value="103107088/module4/lecture1/lecture1.pdf">Food additives</option>
      
      <option  value="103107088/module4/lecture2/lecture2.pdf">Deteriorative factors and their control</option>
      
      <option  value="103107088/module5/lecture1/lecture1.pdf">preliminary food processing methods</option>
      
      <option  value="103107088/module6/lecture1/lecture1.pdf">Steam</option>
      
      <option  value="103107088/module7/lecture1/lecture1.pdf">Process controls in food processing</option>
      
      <option  value="103107088/module8/lecture1/lecture1.pdf">Heating and cooling systems for foods</option>
      
      <option  value="103107088/module9/lecture1/lecture1.pdf">Thermophysical Properties</option>
      
      <option  value="103107088/module10/lecture1/lecture1.pdf">INDIRECT CONTACT FREEZING SYSTEMS</option>
      
      <option  value="103107088/module10/lecture2/lecture2.pdf">Freezing Fruits and Vegetables</option>
      
      <option  value="103107088/module11/lecture1/lecture1.pdf">Freezing time</option>
      
      <option  value="103107088/module11/lecture2/lecture2.pdf">Refrigeration</option>
      
      <option  value="103107088/module12/lecture1/lecture1.pdf">Thermal Death time</option>
      
      <option  value="103107088/module13/lecture1/lecture1.pdf">Food preservation</option>
      
      <option  value="103107088/module14/lecture1/lecture1.pdf">frying</option>
      
      <option  value="103107088/module15/lecture1/lecture1.pdf">Food preservation by Irradiation</option>
      
      <option  value="103107088/module16/lecture1.pdf">preservation food by concentration</option>
      
      <option  value="103107088/module17/lecture1/lecture1.pdf">Microwave heating</option>
      
      <option  value="103107088/module18/lecture1/lecture1.pdf">fermentationt Food Preservation By Pickling</option>
      
      <option  value="103107088/module19/lecture1/lecture1.pdf">electrodialysis</option>
      
      <option  value="103107088/module20/lecture1/lecture1.pdf">membrane separation</option>
      
      <option  value="103107088/module21/lecture1/lecture1.pdf">Reverssmosis</option>
      
      <option  value="103107088/module22/lecture1/lecture1.pdf">dehydration</option>
      
      <option  value="103107088/module23/lecture1/lecture1.pdf">Production of Food Products</option>
      
      <option  value="103107088/module23/lecture2/lecture2.pdf">Food Production Methods</option>
      
      <option  value="103107088/module24/lecture1/lecture1.pdf">production of alcoholic</option>
      
      <option  value="103107088/module25/lecture1/lecture1.pdf">Dairy Products</option>
      
      <option  value="103107088/module26/lecture1/lecture1.pdf">Meat</option>
      
      <option  value="103107088/module27/lecture1/lecture1.pdf">Poultry</option>
      
      <option  value="103107088/module28/lecture1/lecture1.pdf">Intro Food Processing</option>
      
      <option  value="103107088/module28/lecture2/lecture2.pdf">FOOD PROCESSING 2</option>
      
      <option  value="103107088/module29/lecture1/lecture1.pdf">FOOD PROCESSING WASTES</option>
      
      <option  value="103107088/module30/lecture1/lecture1.pdf">Food_Spoilage</option>
      
      <option  value="103107088/module31/lecture1/lecture1.pdf">packaging</option>
      
      <option  value="103107088/module32/lecture1/lecture1.pdf">canning</option>
      
      <option  value="103107088/module33/lecture1/lecture1.pdf">canning procedure</option>
      
      <option  value="103107088/module34/lecture1/lecture1.pdf">Heat Sterilization</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103107094</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Process Integration</strong></td>
	<td><strong>Dr. B. Mohanty</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103107094/module1/lecture1/lecture1.pdf">Process Integration - the inherent concepts</option>
      
      <option  value="103107094/module1/lecture2/lecture2.pdf">process integration, methods and areas of  Application</option>
      
      <option  value="103107094/module2/lecture1/lecture1.pdf">Fundamental concepts related to heat integration</option>
      
      <option  value="103107094/module3/lecture2/lecture2.pdf">Hot Composite Curves</option>
      
      <option  value="103107094/module3/lecture3/lecture3.pdf">Cold  Composite Curves</option>
      
      <option  value="103107094/module3/lecture4/lecture4.pdf">Hot and Cold Composite Curves and �The Pinch</option>
      
      <option  value="103107094/module3/lecture5/lecture5.pdf">Threshold Problems</option>
      
      <option  value="103107094/module3/lecture6/lecture6.pdf">Graphical representations used in Pinch Analysis</option>
      
      <option  value="103107094/module4/lecture1/lecture1.pdf">Energy Targeting Procedure</option>
      
      <option  value="103107094/module4/lecture2/lecture2.pdf">Problem Table Algorithm-1st Part</option>
      
      <option  value="103107094/module4/lecture3/lecture3.pdf">Grand composite curve</option>
      
      <option  value="103107094/module4/lecture4/lecture4.pdf">Problem Table Algorithm �2nd Part</option>
      
      <option  value="103107094/module4/lecture5/lecture5.pdf">No of units Target</option>
      
      <option  value="103107094/module4/lecture6/lecture6.pdf">Shell Targeting-1st Part</option>
      
      <option  value="103107094/module4/lecture7/lecture7.pdf">Shell Targeting- 2nd Part</option>
      
      <option  value="103107094/module4/lecture8/lecture8.pdf">Area Targeting -1st Part</option>
      
      <option  value="103107094/module4/lecture9/lecture9.pdf">Area Targeting-2nd Part</option>
      
      <option  value="103107094/module4/lecture10/lecture10.pdf">Area Targeting-3rd Part</option>
      
      <option  value="103107094/module4/lecture12/lecture12.pdf">Cost Targeting</option>
      
      <option  value="103107094/module4/lecture13/lecture13.pdf">Supertargeting-optimization of ?Tmin</option>
      
      <option  value="103107094/module4/lecture14/lecture14.pdf">?P targeting and supertargeting</option>
      
      <option  value="103107094/module4/lecture15/lecture15.pdf">Global & Stream specific ?Tmin and its relevance</option>
      
      <option  value="103107094/module5/lecture1/lecture1.pdf">Rules for Pinch Design Method (PDM) -1st part</option>
      
      <option  value="103107094/module5/lecture2/lecture2.pdf">Rules for Pinch Design Method (PDM)  -2nd part</option>
      
      <option  value="103107094/module5/lecture3/lecture3.pdf">Application of PDM for MER HEN synthesis </option>
      
      <option  value="103107094/module5/lecture4/lecture4.pdf">Design for threshold problems </option>
      
      <option  value="103107094/module5/lecture5/lecture5.pdf">Design for single pinch problems</option>
      
      <option  value="103107094/module5/lecture6/lecture6.pdf">Design for multi pinch problems </option>
      
      <option  value="103107094/module5/lecture7/lecture7.pdf">HEN optimization</option>
      
      <option  value="103107094/module5/lecture8/lecture8.pdf">Remaining Problem analysis</option>
      
      <option  value="103107094/module5/lecture9/lecture9.pdf">Driving Force Plot</option>
      
      <option  value="103107094/module5/lecture10/lecture10.pdf">Low Temperature process Design</option>
      
      <option  value="103107094/module5/lecture11/lecture11.pdf">Combined Heat and Power Design (using steam turbine)</option>
      
      <option  value="103107094/module5/lecture12/lecture12.pdf">Integration of Gas turbine with process-1st Part</option>
      
      <option  value="103107094/module5/lecture13/lecture13.pdf">Integration of Gas turbine with process-2nd Part</option>
      
      <option  value="103107094/module6/lecture1/lecture1.pdf">Placement and Integration of Distillation Column </option>
      
      <option  value="103107094/module6/lecture2/lecture2.pdf">Heat Integration of evaporators </option>
      
      <option  value="103107094/module6/lecture3/lecture3.pdf">Integration of heat pump</option>
      
      <option  value="103107094/module3/lecture1/lecture1.pdf">Data Extraction</option>
      
      <option  value="103107094/module6/lecture4/lecture4.pdf">Placement of Heat Engine, Heat pump and Reactors</option>
      
      <option  value="103107094/module6/lecture5/lecture5.pdf">Integration of Furnace</option>
      
      <option  value="103107094/module4/lecture16/lecture16.pdf">Topology Trap</option>
      
      <option  value="103107094/module4/lecture11/lecture11.pdf">Area Targeting-4th Part</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103107096</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Process Modelling and Simulation</strong></td>
	<td><strong>Dr. V. K. Agrawal</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103107096/module1/lecture1/lecture1.pdf">Simulation & IFD</option>
      
      <option  value="103107096/module1/lecture2/lecture2.pdf">IFD to numerical form</option>
      
      <option  value="103107096/module1/lecture3/lecture3.pdf">planning and calculation</option>
      
      <option  value="103107096/module1/lecture4/lecture4.pdf">Theroritical models and parameter estimation</option>
      
      <option  value="103107096/module1/lecture5/lecture5.pdf">Parameter estimation in theoritical models</option>
      
      <option  value="103107096/module1/lecture6/lecture6.pdf">Parameter estimation in differential equation models- numerical methods</option>
      
      <option  value="103107096/module2/lecture1/lecture1.pdf">MODELS AND THEIR CLASSIFICATION</option>
      
      <option  value="103107096/module2/lecture3/lecture3.pdf">Maximum Gradient Description</option>
      
      <option  value="103107096/module2/lecture6/lecture6.pdf">Population Balance Models</option>
      
      <option  value="103107096/module2/lecture7/lecture7.pdf">Experimental Measurement of Age Distribution Function</option>
      
      <option  value="103107096/module2/lecture8/lecture8.pdf">General Population Balance</option>
      
      <option  value="103107096/module2/lecture9/lecture9.pdf">Combined Models</option>
      
      <option  value="103107096/module2/lecture10/lecture10.pdf">PROBABLISTIC MODELS</option>
      
      <option  value="103107096/module2/lecture11/lecture11.pdf">Curve Fitting</option>
      
      <option  value="103107096/module3/lecture1/lecture1.pdf">Basic Models of Flow systems</option>
      
      <option  value="103107096/module2/lecture2/lecture2.pdf">MULTIPLE GRADIENT DESCRIPTION</option>
      
      <option  value="103107096/module2/lecture4/lecture4.pdf">MACROSCOPIC DESCRIPTION</option>
      
      <option  value="103107096/module2/lecture5/lecture5.pdf">ALTERNATE CLASSIFICATION OF TRANSPORT PHENOMENA MODELS</option>
      
      <option  value="103107096/module3/lecture2/lecture2.pdf">Basic Models of Mixing Systems</option>
      
      <option  value="103107096/module3/lecture3/lecture3.pdf">Basic Models of Simultaneous Heat and Mass Transfer</option>
      
      <option  value="103107096/module4/lecture1/lecture1.pdf">MATHEMATICAL MODELLING OF EVAPORATOR</option>
      
      <option  value="103107096/module4/lecture2/lecture2.pdf">MULTIPLE EFFECT EVAPORATOR SYSTEM</option>
      
      <option  value="103107096/module4/lecture3/lecture3.pdf">ANALYSIS AND MODELING OF EVAPORATORS USING NEWTON RAPHSON�S METHOD (Without Boiling Point Rise)</option>
      
      <option  value="103107096/module4/lecture4/lecture4.pdf">MODELLING OF MULTIPLE EFFECT EVAPORATORS WITH BOILING POINT RISE</option>
      
      <option  value="103107096/module5/lecture1/lecture1.pdf">DISTILLATION</option>
      
      <option  value="103107096/module5/lecture2/lecture2.pdf">Mathematical modeling of Continuous distillation Column</option>
      
      <option  value="103107096/module5/lecture3/lecture3.pdf">Approximate Methods For Multicomponent Multistage Separations</option>
      
      <option  value="103107096/module5/lecture4/lecture4.pdf">Minimum Stages calculation for multicomponent distillation column</option>
      
      <option  value="103107096/module5/lecture5/lecture5.pdf">Separation of multicomponent mixtures by use of conventional distillation column with multiple stages</option>
      
      <option  value="103107096/module5/lecture6/lecture6.pdf">Application of the ? method of convergence, the Kb method, and the constant-composition method for multicomponent distillation column</option>
      
      <option  value="103107096/module5/lecture7/lecture7.pdf">Multicomponent Vapor - Liquid Cascades</option>
      
      <option  value="103107096/module5/lecture8/lecture8.pdf">Absorber and stripper</option>
      
      <option  value="103107096/module5/lecture9/lecture9.pdf">CALCULATION PROCEDURES FOR SOLVING FOR ABSOBER AND STRIPPING PROBLEM</option>
      
      <option  value="103107096/module5/lecture10/lecture10.pdf">PROCEDURE I: SINGLE? METHOD OF CONVERGENCE</option>
      
      <option  value="103107096/module5/lecture11/lecture11.pdf">The Sujata method</option>
      
      <option  value="103107096/module5/lecture12/lecture12.pdf">Extraction</option>
      
      <option  value="103107096/module6/lecture1/lecture1.pdf">MATHEMATICAL MODELING OF CHEMICAL REACTORS</option>
      
      <option  value="103107096/module6/lecture2/lecture2.pdf">Fixed bed reactors</option>
      
      <option  value="103107096/module6/lecture3/lecture3.pdf">Two dimensional model with void age and velocity profiles</option>
      
      <option  value="103107096/module6/lecture4/lecture4.pdf">Fluidized Bed Reactors</option>
      
      <option  value="103107096/module6/lecture5/lecture5.pdf">Trickle Bed Reactors</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103108097</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Chemical Reaction Engineering</strong></td>
	<td><strong>Prof. Jayant M Modak</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103108097/mod01lec01.mp4">Introduction & Overview</option>
      
      <option  value="103108097/mod02lec02.mp4">Basic concepts : Representation of Chemical Reactions</option>
      
      <option  value="103108097/mod02lec03.mp4">Thermodynamics of Chemical Reactions: Part I</option>
      
      <option  value="103108097/mod02lec04.mp4">Thermodynamics of Chemical Reactions: Part II</option>
      
      <option  value="103108097/mod02lec05.mp4">Chemical Reaction Kinetics - Overview</option>
      
      <option  value="103108097/mod02lec06.mp4">Chemical Reaction Kinetics  & Reactor Design</option>
      
      <option  value="103108097/mod02lec07.mp4">Chemical Reactor Design</option>
      
      <option  value="103108097/mod02lec08.mp4">Problem Solving: Thermodynamics & Kinetics</option>
      
      <option  value="103108097/mod03lec09.mp4">Complec Reactions - Introduction</option>
      
      <option  value="103108097/mod03lec10.mp4">Complec Reactions - Yield & Selectivity</option>
      
      <option  value="103108097/mod03lec11.mp4">Complex Reactions - Quasi Steady State and Quasi Equilibrium Approximations</option>
      
      <option  value="103108097/mod03lec12.mp4">Complex Reactions - Kinetics of Chain Reactions & polymerization</option>
      
      <option  value="103108097/mod03lec13.mp4">Catalytic reactions - Introduction</option>
      
      <option  value="103108097/mod03lec14.mp4">Catalytic reactions - Adsorption & Desorption</option>
      
      <option  value="103108097/mod03lec15.mp4">Catalytic reactions - Kinetics</option>
      
      <option  value="103108097/mod03lec16.mp4">Monomolecular Reaction Network & Lumping Analysis</option>
      
      <option  value="103108097/mod03lec17.mp4">Problem solving: Complex reactions</option>
      
      <option  value="103108097/mod04lec18.mp4">Gas-solid Catalytic Reactions - External diffusion</option>
      
      <option  value="103108097/mod04lec19.mp4">Gas-solid Catalytic Reactions - Transport in Catalyst Pellet</option>
      
      <option  value="103108097/mod04lec20.mp4">Gas-solid Catalytic Reactions - Diffusion & Reaction I</option>
      
      <option  value="103108097/mod04lec21.mp4">Gas-solid Catalytic Reactions - Diffusion & Reaction II</option>
      
      <option  value="103108097/mod04lec22.mp4">Gas-solid Catalytic Reactions - Diffusion & Reaction III</option>
      
      <option  value="103108097/mod04lec23.mp4">Gas-solid Catalytic Reactions - Nonisothermal effects</option>
      
      <option  value="103108097/mod04lec24.mp4">Gas-solid Noncatalytic Reactions</option>
      
      <option  value="103108097/mod04lec25.mp4">Gas-Liquid Reactions</option>
      
      <option  value="103108097/mod04lec26.mp4">Problem solving: Heterogenous reactions</option>
      
      <option  value="103108097/mod05lec27.mp4">Chemical Reactor Design: Mass & Energy Balances</option>
      
      <option  value="103108097/mod05lec28.mp4">Chemical Reactor Design: Mass & Energy Balances for Heterogenous Reactions</option>
      
      <option  value="103108097/mod05lec29.mp4">Nonisothermal Reactor Operation</option>
      
      <option  value="103108097/mod05lec30.mp4">Case Study - Ethane dehyrogenation</option>
      
      <option  value="103108097/mod05lec31.mp4">Case Study - Hydrogenation of Oil</option>
      
      <option  value="103108097/mod05lec32.mp4">Case Study - Ammonia Synthesis</option>
      
      <option  value="103108097/mod05lec33.mp4">Autothermal reactors</option>
      
      <option  value="103108097/mod05lec34.mp4">Parametric Sensitivity</option>
      
      <option  value="103108097/mod05lec35.mp4">CSTR - multiple steady states</option>
      
      <option  value="103108097/mod05lec36.mp4">Stability Analysis - Basics</option>
      
      <option  value="103108097/mod05lec37.mp4">Stability Analysis - Examples</option>
      
      <option  value="103108097/mod05lec38.mp4">Nonideal flow and reactor performance - I</option>
      
      <option  value="103108097/mod05lec39.mp4">Nonideal flow and reactor performance - II</option>
      
      <option  value="103108097/mod05lec40.mp4">Problem solving: Reactor Design</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103108098</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Fundamentals of Transport Processes</strong></td>
	<td><strong>Prof. V. Kumaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103108098/mod01lec01.mp4">Introduction</option>
      
      <option  value="103108098/mod01lec02.mp4">Dimensional Analysis</option>
      
      <option  value="103108098/mod01lec03.mp4">Dimensional Analysis contd.</option>
      
      <option  value="103108098/mod01lec04.mp4">Dimensionless Groups</option>
      
      <option  value="103108098/mod02lec05.mp4">Continuum description</option>
      
      <option  value="103108098/mod02lec06.mp4">Mechanisms of diffusion - I</option>
      
      <option  value="103108098/mod02lec07.mp4">Mechanisms of diffusion - II</option>
      
      <option  value="103108098/mod03lec08.mp4">Unidirectional Transport Cartesian Coordinates - I</option>
      
      <option  value="103108098/mod03lec09.mp4">Unidirectional Transport Cartesian Coordinates - II Similarity Solutions</option>
      
      <option  value="103108098/mod03lec10.mp4">Unidirectional Transport Cartesian Coordinates - III Similarity Solutions</option>
      
      <option  value="103108098/mod03lec11.mp4">Unidirectional Transport Cartesian Coordinates - IV Seperation of Variables</option>
      
      <option  value="103108098/mod03lec12.mp4">Unidirectional Transport Cartesian Coordinates - V Seperation of Variables</option>
      
      <option  value="103108098/mod03lec13.mp4">Unidirectional Transport Cartesian Coordinates - VI Oscillatory Flows</option>
      
      <option  value="103108098/mod03lec14.mp4">Unidirectional Transport Cartesian Coordinates - VII Momentum Source in the Flow</option>
      
      <option  value="103108098/mod03lec15.mp4">Unidirectional Transport Cartesian Coordinates - VIII Heat & Mass Sources</option>
      
      <option  value="103108098/mod04lec16.mp4">Unidirectional Transport Cylindrical Coordinates - I Conservation Equations</option>
      
      <option  value="103108098/mod04lec17.mp4">Unidirectional Transport Cylindrical Coordinates - II Similarity Solutions</option>
      
      <option  value="103108098/mod04lec18.mp4">Unidirectional Transport Cylindrical Coordinates - III Seperation of Variables</option>
      
      <option  value="103108098/mod04lec19.mp4">Unidirectional Transport Cylindrical Coordinates - IV Steady flow in a pipe</option>
      
      <option  value="103108098/mod04lec20.mp4">Unidirectional Transport Cylindrical Coordinates - V Oscillatory flow in a pipe</option>
      
      <option  value="103108098/module4/lecture21/mod04lec21.mp4">Unidirectional Transport Cylindrical Coordinates - VI Oscillatory flow in a pipe Regular Perturbation Expansion</option>
      
      <option  value="103108098/mod04lec22.mp4">Unidirectional Transport Cylindrical Coordinates - VII Oscillatory flow in a pipe Singular Perturbation Expansion</option>
      
      <option  value="103108098/mod04lec23.mp4">Unidirectional Transport Spherical Coordinates - I Balance Equation</option>
      
      <option  value="103108098/mod04lec24.mp4">Unidirectional Transport Spherical Coordinates - II Seperation of Variables</option>
      
      <option  value="103108098/mod05lec25.mp4">Mass & Energy Conservation Cartesian Coordinates</option>
      
      <option  value="103108098/mod05lec26.mp4">Mass & Energy Conservation Cartesian Coordinates Heat Conduction in a Cube</option>
      
      <option  value="103108098/mod05lec27.mp4">Mass & Energy Conservation Spherical Coordinates Balance Laws</option>
      
      <option  value="103108098/mod05lec28.mp4">Mass & Energy Conservation Cylindrical Coordinates</option>
      
      <option  value="103108098/mod06lec29.mp4">Diffusion Equation Spherical Co-ordinates Seperation of Variables</option>
      
      <option  value="103108098/mod06lec30.mp4">Diffusion Equation Spherical Co-ordinates Seperation of Variables contd.</option>
      
      <option  value="103108098/module6/lecture31/mod06lec31.mp4">Diffusion Equation Spherical Co-ordinates Effective Conductivity of a Composite</option>
      
      <option  value="103108098/mod06lec32.mp4">Diffusion Equation Spherical Harmonics</option>
      
      <option  value="103108098/mod06lec33.mp4">Diffusion Equation Delta Functions</option>
      
      <option  value="103108098/mod06lec34.mp4">Diffusion Equation Multipole Expansions</option>
      
      <option  value="103108098/mod06lec35.mp4">Diffusion Equation Greens Function Formulations</option>
      
      <option  value="103108098/mod07lec36.mp4">High Peclet Number Transport Flow Past a Flat Plate</option>
      
      <option  value="103108098/mod07lec37.mp4">High Peclet Number Transport Heat Transfer from a Spherical Particle - I</option>
      
      <option  value="103108098/mod07lec38.mp4">High Peclet Number Transport Heat Transfer from a Spherical Particle - II</option>
      
      <option  value="103108098/mod07lec39.mp4">High Peclet Number Transport Heat Transfer from a Gas Bubble</option>
      
      <option  value="103108098/mod07lec40.mp4">Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103108099</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Fundamentals of Transport Processes - II</strong></td>
	<td><strong>Prof. V. Kumaran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103108099/mod01lec01.mp4">1.Review of Fundamentals of Transport Processors I</option>
      
      <option  value="103108099/mod01lec02.mp4">2.Introduction</option>
      
      <option  value="103108099/mod01lec03.mp4">3.Vectors and Tensors</option>
      
      <option  value="103108099/mod01lec04.mp4">4.Vector calculus</option>
      
      <option  value="103108099/mod01lec05.mp4">5.Vector calculus</option>
      
      <option  value="103108099/mod01lec06.mp4">6.Curvilinear co-ordinates</option>
      
      <option  value="103108099/mod01lec07.mp4">7.Kinematics</option>
      
      <option  value="103108099/mod01lec08.mp4">8.Rate of deformation tensor</option>
      
      <option  value="103108099/mod01lec09.mp4">9.Mass conservation equation</option>
      
      <option  value="103108099/mod01lec10.mp4">10.Momentum conservation equation</option>
      
      <option  value="103108099/mod01lec11.mp4">11.Angular momentum conservation equation</option>
      
      <option  value="103108099/mod01lec12.mp4">12.Boundary conditions</option>
      
      <option  value="103108099/mod01lec13.mp4">13.Mechanical energy conservation</option>
      
      <option  value="103108099/mod01lec14.mp4">14.Unidirectional flow</option>
      
      <option  value="103108099/mod01lec15.mp4">15.Viscous flows</option>
      
      <option  value="103108099/mod01lec16.mp4">16.Viscous flows</option>
      
      <option  value="103108099/mod01lec17.mp4">17.Flow around a sphere</option>
      
      <option  value="103108099/mod01lec18.mp4">18.Force on moving sphere</option>
      
      <option  value="103108099/mod01lec19.mp4">19.Torque on rotating sphere</option>
      
      <option  value="103108099/mod01lec20.mp4">20.Effective viscosity of a suspension</option>
      
      <option  value="103108099/mod01lec21.mp4">21.Flow in a corner</option>
      
      <option  value="103108099/mod01lec22.mp4">22.Lubrication flow</option>
      
      <option  value="103108099/mod01lec23.mp4">23.Lubrication flow</option>
      
      <option  value="103108099/mod01lec24.mp4">24.Inertia of a low Reynolds number</option>
      
      <option  value="103108099/mod01lec25.mp4">25.Potential flow</option>
      
      <option  value="103108099/mod01lec26.mp4">26.Potential flow around a sphere</option>
      
      <option  value="103108099/mod01lec27.mp4">27.Two-dimensional potential flow</option>
      
      <option  value="103108099/mod01lec28.mp4">28.Two-dimensional potential flow</option>
      
      <option  value="103108099/mod01lec29.mp4">29.Flow around a cylinder</option>
      
      <option  value="103108099/mod01lec30.mp4">30.Conformal transforms in potential flow</option>
      
      <option  value="103108099/mod01lec31.mp4">31.Boundary layer theory</option>
      
      <option  value="103108099/mod01lec32.mp4">32.Boundary layer past a flat plate</option>
      
      <option  value="103108099/mod01lec33.mp4">33.Stagnation point flow</option>
      
      <option  value="103108099/mod01lec34.mp4">34.Falkner-Skan Boundary Layer Solutions</option>
      
      <option  value="103108099/mod01lec35.mp4">35.Falkner-Skan Boundary Layer Solutions</option>
      
      <option  value="103108099/mod01lec36.mp4">36.Vorticity Dynamics</option>
      
      <option  value="103108099/mod01lec37.mp4">37.Vorticity Dynamics</option>
      
      <option  value="103108099/mod01lec38.mp4">38.Turbulence</option>
      
      <option  value="103108099/mod01lec39.mp4">39.Turbulence</option>
      
      <option  value="103108099/mod01lec40.mp4">40.Turbulent flow in a channel</option>
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103103039</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Process Design Decisions and Project Economics</strong></td>
	<td><strong>Dr. Vijay S. Moholkar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
   <option  value="103103039/M1LIntroduction.mp4">General Introduction to the Course and Syllabus</option>
 <option  value="103103039/mod01lec01.mp4">Hierarchical Approach to Process Design – I</option>
 <option  value="103103039/mod01lec02.mp4">Hierarchical Approach to Process Design - Examples</option>
 <option  value="103103039/mod02lec01.mp4">Input Information and Design Aspects of Batch vs. Continuous Process</option>
 <option  value="103103039/mod02lec02.mp4">Input / Output Structure of Flowsheet (Part I)</option>
 <option  value="103103039/mod02lec03.mp4">Input / Output Structure of Flowsheet (Part II)</option>
 <option  value="103103039/mod02lec04.mp4">Input / Output Structure of Flowsheet (Part III) and Recycle Structure of Flowsheet (Part I)</option>
 <option  value="103103039/mod02lec05.mp4">Recycle Structure of Flowsheet (Part II)</option>
 <option  value="103103039/mod02lec06.mp4">Recycle Structure of Flowsheet (Part III)</option>
 <option  value="103103039/mod02lec07.mp4">Recycle Structure of Flowsheet (Part IV) and Tutorial (Part I)</option>
 <option  value="103103039/mod02lec08.mp4">Tutorial (Part II)</option>
 <option  value="103103039/mod02lec09.mp4">Tutorial (Part III)</option>
 <option  value="103103039/mod03lec01.mp4">Algorithm and Basic Principles of Reactor Design</option>
 <option  value="103103039/mod03lec02.mp4">Reactor Non-ideality,  Residence Time Distribution (RTD) and  Types of Chemical Reactions & Catalysts</option>
 <option  value="103103039/mod03lec03.mp4">Types of Reactors and Selection Criteria</option>
 <option  value="103103039/mod03lec04.mp4">Tutorial on Reactor Design and Cost Estimation</option>
 <option  value="103103039/mod04lec01.mp4">General Introduction (Types of Separation Processes and Criteria for Selection of the Processes)</option>
 <option  value="103103039/mod04lec02.mp4">Guidelines for Design of Separation Systems</option>
 <option  value="103103039/mod04lec03.mp4">Design of Distillation Columns – Part I (Sequencing of Columns, Energy Integration / Thermal Coupling of the Columns)</option>
 <option  value="103103039/mod04lec04.mp4">Design of Distillation Columns – Part II (Plate and Packed Towers, Number of Plates, Diameter and Height of the Column)</option>
 <option  value="103103039/mod04lec01.mp4">Tutorial – Part I (Design of Absorption Column)</option>
 <option  value="103103039/mod04lec02.mp4">Tutorial – Part II (Design of Distillation Column)</option>
 <option  value="103103039/mod05lec01.mp4">Concepts and Basic Principles of Energy (or Heat) Integration – Part 1 (Composite Curves and ?Tmin)</option>
 <option  value="103103039/mod05lec02.mp4">Concepts and Basic Principles of Heat Integration – Part 2 (Problem Table Algorithm and Identification of Energy Targets)</option>
 <option  value="103103039/mod05lec03.mp4">Identification of Area and Cost Targets</option>
 <option  value="103103039/mod05lec04.mp4">Pinch Technology for Heat Exchanger Network Design</option>
 <option  value="103103039/mod05lec05.mp4">Tutorial - I (Composite Curves, Problem Table Algorithm and Enthalpy Intervals)</option>
 <option  value="103103039/mod05lec06.mp4">Tutorial - II (Heat Exchanger Network Synthesis Using Pinch Technology)</option>
 <option  value="103103039/mod06lec01.mp4">Selection of Process, Design of Flowsheet and Materials Balance</option>
 <option  value="103103039/mod06lec02.mp4">Energy Balance, Process Alternatives and Design of the Absorber</option>
 <option  value="103103039/mod06lec03.mp4">Rules of Thumb & Their Limitations and Tutorial</option>
 <option  value="103103039/mod07lec01.mp4">General Concepts & Principles and Cost Allocation Procedure</option>
 <option  value="1031030397/mod07lec02.mp4">Lumped Cost Diagram and Cost Allocation Diagram (Case Study of Hydro-dealkylation Process)</option>
 <option  value="103103039/mod07lec03.mp4">Assessment of Process Alternatives with Cost Allocation Diagram (Case Study of Hydrodealkylation Process)</option>
 <option  value="103103039/mod07lec04.mp4">Tutorial on Lumped Cost Diagram and Cost Allocation Diagram</option>
 <option  value="103103039/mod08lec01.mp4">Introduction to Chemical Projects and Their Economic Aspects</option>
 <option  value="103103039/mod08lec02.mp4">Selection of the Process and Project Site (Part I)</option>
 <option  value="103103039/mod08lec03.mp4">Selection of the Process and Project Site (Part II)</option>
 <option  value="103103039/mod08lec04.mp4">Project Cost Estimation (Part I)</option>
 <option  value="103103039/mod08lec05.mp4">Project Cost Estimation (Part II)</option>
 <option  value="103103039/Mmod08lec06.mp4">Simplified Cost Model and Depreciation</option>
 <option  value="103103039/mod08lec07.mp4">Time Value of Money</option>
 <option  value="103103039/mod08lec08.mp4">Measures of Profitability and Project Evaluation (Part I)</option>
 <option  value="103103039/mod08lec09.mp4">Measures of Profitability and Project Evaluation (Part II)</option>
 <option  value="103103039/mod8lec10.mp4">Tutorial on Project Economics (Part I)</option>
 <option  value="103103039/mod08lec11.mp4">Tutorial on Project Economics (Part II)</option>





          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103105065</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Instability & Patterning of Thin Polymer Films</strong></td>
	<td><strong>Dr. R. Mukherjee</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
    <option  value="103105065/M1l1.pdf">Introduction to Patterned Surfaces and Their Applications</option>
 <option  value="103105065/M2l2.pdf">Application of Patterned Surfaces: Structural Superhydrophobicity</option>
 <option  value="103105065/M3l3.pdf">Application of Patterned Surfaces: Structural Color</option>
 <option  value="103105065/M4l4.pdf">Fundamental Concepts Related Surface and Interfacial Tension</option>
 <option  value="103105065/M5l5.pdf">Fundamental Concepts Related Surface and Interfacial Tension –2</option>
 <option  value="103105065/M6l6.pdf">Laplace Pressure and Young Laplace Equation</option>
 <option  value="103105065/M7l7.pdf">Some Case studies with Young Laplace Equation for an Axi-Symmetric Surface</option>
 <option  value="103105065/M8l8.pdf">Some Case studies with Young Laplace Equation for an Axi-Symmetric Surface (Continued)</option>
 <option  value="103105065/M9l9.pdf">Meso Scale Patterning Approaches</option>
 <option  value="103105065/M10l10.pdf">Meso Scale Patterning Approaches (Continued)</option>
 <option  value="103105065/M11l11.pdf">Photolithography</option>
 <option  value="103105065/M11l12.pdf">Photolithography – 2 (Continued)</option>
 <option  value="103105065/M11l13.pdf">Photolithography – 3 (Continued)</option>
 <option  value="103105065/M11l14.pdf">Photolithography – 4 (Continued)</option>
 <option  value="103105065/M11l15.pdf">Photolithography – 5 (Continued)</option>
 <option  value="103105065/M12l16.pdf">Nano Imprint Lithography – 1</option>
 <option  value="103105065/M12l17.pdf">Nano Imprint Lithography – 2</option>
 <option  value="103105065/M13l18.pdf">Soft Lithography – 1</option>
 <option  value="103105065/M13l19.pdf">Soft Lithography – 2</option>
 <option  value="103105065/M14l20.pdf">Soft Lithography – 3:</option>
 <option  value="103105065/M15l21.pdf">Thin Polymer Blends – 1</option>
 <option  value="103105065/M16l22.pdf">Thin Polymer Blend films – 2</option>
 <option  value="103105065/M17l23.pdf">Intermolecular Force between Surfaces and Particles</option>
 <option  value="103105065/M18l24.pdf">Spontaneous Instability and Dewetting of a Thin Polymer Film – 1</option>
 <option  value="103105065/M18l25.pdf">Spontaneous Instability and Dewetting of a Thin Polymer Film – 2</option>
 <option  value="103105065/M18l26.pdf">Spontaneous Instability and Dewetting of a Thin Polymer Film – 3</option>
 <option  value="103105065/M18l27.pdf">Spontaneous Instability and Dewetting of a Thin Polymer Film – 4</option>
 <option  value="103105065/M18l28.pdf">Spontaneous Instability and Dewetting of a Thin Polymer Film – 5</option>
 <option  value="103105065/M18l29.pdf">Spontaneous Instability and Dewetting of a Thin Polymer Film – 6</option>
 <option  value="103105065/M19l30.pdf">Pattern Directed Dewetting – 1</option>
 <option  value="103105065/M19l31.pdf">Pattern Directed Dewetting – 2</option>
 <option  value="103105065/M20l32.pdf">Dewetting of a Thin Polymer Bilayer</option>
 <option  value="103105065/M21l33.pdf">Elastic Contact Instability</option>
 <option  value="103105065/M22l34.pdf">Elastic Contact Lithography</option>
 <option  value="103105065/M23l35.pdf">Elastic Recovery Lithography</option>
 <option  value="103105065/M24l36.pdf">External Field Mediated Instability</option>
 <option  value="103105065/M25l37.pdf">Evaporative Pattern formation (Coffee Stain Effect)</option>
 <option  value="103105065/M26l38.pdf">Atomic Force Microscopy – 1</option>
 <option  value="103105065/M26l39.pdf">Atomic Force Microscopy – 2</option>
 <option  value="103105065/M26l40.pdf">Atomic Force Microscopy – 3: Additional Modes of AFM</option>


          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>103105110</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Fuel and Combustion Technology</strong></td>
	<td><strong>Prof. Jayanta Kumar Basu, Prof. Sonali Sengupta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
    <option  value="103105110/m1l1.pdf">History of Fuels</option>
 <option  value="103105110/m1l2.pdf"> History of liquid fuel and gaseous fuels</option>
 <option  value="103105110/m1l3.pdf"> Production, present scenario and consumption pattern of fuels</option>
 <option  value="103105110/m1l4.pdf">Definitions and properties of solid fuels </option>
 <option  value="103105110/m1l5.pdf">Fundamental definiti ons, properties and various measurements </option>
 <option  value="103105110/m1l6.pdf"> Fundamental definiti ons, properties and various measurements </option>
 <option  value="103105110/m2l7.pdf">Coal classifica tion, composition and basis </option>
 <option  value="103105110/m2l8.pdf"> Coal Mining</option>
 <option  value="103105110/m2l9.pdf">Coal preparation and washing</option>
 <option  value="103105110/m2l10.pdf"> Combustion of coal and coke making </option>
 <option  value="103105110/m2l11.pdf">Different types of coal combustion techniques </option>
 <option  value="103105110/m2l12.pdf">Combustion of coal and coke making </option>
 <option  value="103105110/m2l13.pdf">Coal liquefaction</option>
 <option  value="103105110/m2l14.pdf">Coal Li quefaction (Contd.) </option>
 <option  value="103105110/m2l15.pdf">Coal Gasification</option>
 <option  value="103105110/m3l16.pdf">Exploration of crude petroleum</option>
 <option  value="103105110/m3l17.pdf">Evaluation of crude</option>
 <option  value="103105110/m3l18.pdf"> Distillation</option>
 <option  value="103105110/m3l19.pdf"> Vacuum Distillation</option>
 <option  value="103105110/m3l20.pdf"> Secondary Processing</option>
 <option  value="103105110/m3l21.pdf"> Secondary  Processing  </option>
 <option  value="103105110/m3l22.pdf">Secondary Processing (Contd.)</option>
 <option  value="103105110/m3l23.pdf">Secondary Processing  (Contd.)</option>
 <option  value="103105110/m3l24.pdf"> Hydrotreatment, dewaxing, deasphalting</option>
 <option  value="103105110/m3l25.pdf">Refinery Equipments</option>
 <option  value="103105110/m4l26.pdf"> Gaseous Fuel</option>
 <option  value="103105110/m4l27.pdf">Producer Gas</option>
 <option  value="103105110/m4l28.pdf">Water Gas</option>
 <option  value="103105110/m4l29.pdf"> Hydrogen gas</option>
 <option  value="103105110/m4l30.pdf">Acetylene</option>
 <option  value="103105110/m4l31.pdf"> Other fuel gases</option>
 <option  value="103105110/m5l32.pdf"> Fundamentals of thermochemistry </option>
 <option  value="103105110/m5l33.pdf"> Combustion air calculation</option>
 <option  value="103105110/m5l34.pdf"> Calculation of calorific value of fuels </option>
 <option  value="103105110/m5l35.pdf">Adiabatic flam e temperature calculation </option>
 <option  value="103105110/m5l36.pdf">Mechanism and kinetics of combustion</option>
 <option  value="103105110/m5l37.pdf">Flame Properties </option>
 <option  value="103105110/m5l38.pdf"> Combustion Burners</option>
 <option  value="103105110/m5l39.pdf"> Combustion Furnaces</option>
 <option  value="103105110/m5l40.pdf"> Internal Combustion Engine</option>

          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103107081</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Chemical Technology - I</strong></td>
	<td><strong>Dr. I.D.Mall</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
    <option  value="103107081/mod01lec01.mp4">Introduction to Chemical  process Industries</option>
 <option  value="103107081/mod01lec02.mp4">Raw material for Organic Chemical Industries</option>
 <option  value="103107081/mod01lec03.mp4">Unit processes  and unit operations in organic chemical Industries</option>
 <option  value="103107081/mod02lec01.mp4">Coal and coal as chemicals feed stock</option>
 <option  value="103107081/mod02lec02.mp4">Coal carbonization  and Coke oven plant</option>
 <option  value="103107081/mod02lec03.mp4">Gasification of Coal,Petrocoke and Biomass</option>
 <option  value="103107081/mod03lec01.mp4">Introduction to Pulp and paper Industry, Raw material for paper industry and Technological development</option>
 <option  value="103107081/mod03lec02.mp4">Pulping and Bleaching </option>
 <option  value="103107081/mod03lec03.mp4">Recovery of Chemicals </option>
 <option  value="103107081/mod03lec04.mp4">Stock preparation and paper making</option>
 <option  value="103107081/mod04lec01.mp4">Introduction to Soap and detergent,  Soap making and Recovery of Glycerine</option>
 <option  value="103107081/mod04lec02.mp4">Synthetic detergent and  Linear alkyl benzene </option>
 <option  value="103107081/mod05lec01.mp4">Sugar and Fermentation industry </option>
 <option  value="103107081/mod05lec02.mp4">Ethanol as Biofuel and Chemical feed stock</option>
 <option  value="103107081/mod06lec01.mp4">Introduction : Staus of Petroleum refinery, Crude oil and Natural gas origin, occurrence, exploration, drilling and processing, Fuel norms</option>
 <option  value="103107081/mod06lec02.mp4">Evaluation of Crude oil,Petroleum Products and Apetrochemicals</option>
 <option  value="103107081/mod06lec03.mp4">Crude oil Distillation</option>
 <option  value="103107081/mod06lec04.mp4">Thermal Cracking:  Visbreaking and Delayed Coking</option>
 <option  value="103107081/mod06lec05.mp4">Catalytic cracking: Fluid Catalytic cracking and Hydro cracking</option>
 <option  value="103107081/mod06lec06.mp4">Catalytic reforming </option>
 <option  value="103107081/mod06lec07.mp4">Alkylation,  Isomerisation and Polymerisation</option>
 <option  value="103107081/mod06lec08.mp4">Desulphurisation Processes and Recovery of Sulphur </option>
 <option  value="103107081/mod07lec01.mp4">Profile of petrochemical  Industry and its structure</option>
 <option  value="103107081/mod07lec02.mp4">Naphtha and gas cracking for production of olefins</option>
 <option  value="103107081/mod07lec03.mp4">Recovery of chemicals from FCC and steam cracking </option>
 <option  value="103107081/mod07lec04.mp4">Synthesis gas and its derivatives: Hydrogen, CO, Methanol,  Formaldehyde</option>
 <option  value="103107081/mod07lec05.mp4">Ethylene derivatives: Ethylene Oxide, Ethylene glycol,  Ethylene dichloride and Vinyl chloride</option>
 <option  value="103107081/mod07lec06.mp4">Propylene, Propylene oxide and Isopropanol</option>
 <option  value="103107081/mod07lec07.mp4">Aromatics Production </option>
 <option  value="103107081/mod07lec08.mp4">Aromatics product profile, Ethyl benzene &Styrene,  Cumene and phenol, Bisphenol, Aniline</option>
 <option  value="103107081/mod08lec01.mp4">Introduction to polymer, Elastomer  and Synthetic Fibre,  Polymerisation </option>
 <option  value="103107081/mod08lec02.mp4">Polymers:Polyolefins,Polyethylene,Polypropylene Polystyrene</option>
 <option  value="103107081/mod08lec03.mp4">Polyvinylchloride,polycarbonate,thermoset resin: phenolformaldehyde,uriaformaldehyde and melamineformaldehyde</option>
 <option  value="103107081/mod08lec04.mp4">Elastomers:  Styrene butadiene Rubber(SBR),  Poly butadiene, Nitrile rubber</option>
 <option  value="103107081/mod08lec05.mp4">Polymides or Nylons(PA)</option>
 <option  value="103107081/mod08lec06.mp4">DMT and Terephtalic Acid,Polyester,PET resin,PTB resin</option>
 <option  value="103107081/mod08lec07.mp4">Acrylic Fibre,Modified Acrylic Fibre,Acrylonitrile,Acrolein,Propylene Finber,Polyurethane</option>
 <option  value="103107081/mod08lec08.mp4">Viscose Rayon and Acetate rayon</option>
 <option  value="103107081/mod09lec01.mp4">Pesticide</option>
 <option  value="103107081/mod09lec02.mp4">Dye and Intermediates </option>

          </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>103108100</strong></td>
	<td><strong>Chemical Engineering</strong></td>
	<td><strong>Modern Instrumental Methods of Analysis</strong></td>
	<td><strong>Dr. J.R. Mudakavi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="103108100/mod01lec01.mp4">Introduction to the Modern Instrumental Methods of Analysis</option>
      
      <option  value="103108100/mod01lec02.mp4">Atomic Structure</option>
      
      <option  value="103108100/mod01lec03.mp4">Physical Properties of Electromagnetic Radiation</option>
      
      <option  value="103108100/mod01lec04.mp4">Interaction of Matter with Radiation</option>
      
      <option  value="103108100/mod02lec05.mp4">Ultraviolet and Visible Spectrophotometry -1 i. Theoretical Aspects</option>
      
      <option  value="103108100/mod02lec06.mp4">Ultraviolet and Visible Spectrophotometry -2 ii. Theoretical Aspects</option>
      
      <option  value="103108100/mod02lec07.mp4">Ultraviolet and Visible Spectrophotometry -3 iii. Theoretical Aspects</option>
      
      <option  value="103108100/mod02lec08.mp4">Ultraviolet and Visible Spectrophotometry -4  iv. Instrumentation</option>
      
      <option  value="103108100/mod02lec09.mp4">Ultraviolet  and Visible Spectrophotometry -5  v. Instrumentation</option>
      
      <option  value="103108100/mod02lec10.mp4">Ultraviolet and Visible Spectrophotometry -6  vi. Applications</option>
      
      <option  value="103108100/mod02lec11.mp4">Fluorescence and Phosphorescence Spectrophotometry 1  i. Theoretical Aspects</option>
      
      <option  value="103108100/mod02lec12.mp4">Fluorescence and Phosphorescence Spectrophotometry -2  ii. Instrumentation</option>
      
      <option  value="103108100/mod02lec13.mp4">Fluorescence and Phosphorescence Spectrophotometry -3 iii. Application</option>
      
      <option  value="103108100/mod03lec14.mp4">Atomic Fluorescence  i. Theoretical aspects</option>
      
      <option  value="103108100/mod03lec15.mp4">X- Ray Analytical Techniques -1  ii. Instrumentation</option>
      
      <option  value="103108100/mod03lec16.mp4">X- Ray Analytical Techniques -2  iii. Applications</option>
      
      <option  value="103108100/mod04lec17.mp4">Atomic Absorption Spectrometry -1  i. Theoretical Aspects</option>
      
      <option  value="103108100/mod04lec18.mp4">Atomic Absorption Spectrometry -2  ii.Theoretical Aspects</option>
      
      <option  value="103108100/mod04lec19.mp4">Atomic Absorption Spectrometry -3  iii. Instrumentation</option>
      
      <option  value="103108100/mod04lec20.mp4">Atomic Absorption Spectrometry -4  iv. Instrumentation</option>
      
      <option  value="103108100/mod04lec21.mp4">Atomic Absorption Spectrometry -5  v. Instrumentation</option>
      
      <option  value="103108100/mod04lec22.mp4">Atomic Absorption Spectrometry -6  vi. Signal handling</option>
      
      <option  value="103108100/mod04lec23.mp4">Atomic Absorption Spectrometry -7  vii. Interferences</option>
      
      <option  value="103108100/mod04lec24.mp4">Atomic Absorption Spectrometry -8  viii. Hydride Generation AAS</option>
      
      <option  value="103108100/mod04lec25.mp4">Atomic Absorption Spectrometry -9  ix.Cold Vapour Mercury AAS</option>
      
      <option  value="103108100/mod04lec26.mp4">Electrothermal Atomic Absorption Spectrometry -10  x. Electrothermal Aspects</option>
      
      <option  value="103108100/mod04lec27.mp4">Electrothermal Atomic Absorption Spectrometry -11  xi. Practical Aspects</option>
      
      <option  value="103108100/mod04lec28.mp4">Inductively Coupled Plasma Atomic Emission Spectrometry -1  i. Theoretical Aspects</option>
      
      <option  value="103108100/mod04lec29.mp4">Inductively Coupled Plasma Atomic Emission Spectrometry -2  ii. Instrumentation</option>
      
      <option  value="103108100/mod04lec30.mp4">Inductively Coupled Plasma Atomic Emission Spectrometry -3  iii. Comparison of ICP & AAS</option>
      
      <option  value="103108100/mod05lec31.mp4">Infrared Spectroscopy -1  i. Theoretical Aspects</option>
      
      <option  value="103108100/mod05lec32.mp4">Infrared Spectroscopy -2  ii. Practical Aspects</option>
      
      <option  value="103108100/mod05lec33.mp4">Infrared Spectroscopy -3  iii. Nondispensive IR, Mass spectrometer</option>
      
      <option  value="103108100/mod05lec34.mp4">Introduction to Mass Spectrometry </option>
      
      <option  value="103108100/mod05lec35.mp4">Introduction to Nuclear Magnetic Resonance Spectroscopy</option>
      
      <option  value="103108100/mod06lec36.mp4">Fundamentals of Electrochemical Techniques -1  i. Introduction</option>
      
      <option  value="103108100/mod06lec37.mp4">Fundamentals of Electrochemical Techniques -2  ii. Introduction continued</option>
      
      <option  value="103108100/mod06lec38.mp4">Polarography -1  i. Introduction</option>
      
      <option  value="103108100/mod06lec39.mp4">Polarography -2  ii. Applications</option>
      
      <option  value="103108100/mod07lec40.mp4">Chromatography -1  i. Introduction</option>
      
      <option  value="103108100/mod07lec41.mp4">Gas chromatography -1  i. Instrumentation</option>
      
      <option  value="103108100/mod07lec42.mp4">Gas chromatography -2  ii. Applications</option>
      
      <option  value="103108100/mod07lec43.mp4">Gas chromatography -3  iii. Applications</option>
          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>103106112</strong></td>
      <td><strong>Chemical Engineering</strong></td>
      <td><strong>Statistics for  Experimentalists</strong></td>
      <td><strong>Dr. A. Kannan</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          	<option  value="#">Select</option>
			<option  value="103106112/mod01lec01.mp4">Introduction</option>
			<option  value="103106112/mod01lec02.mp4">Random Variables</option>
			<option  value="103106112/mod01lec03.mp4">Discrete Probability Distributions</option>
			<option  value="103106112/mod01lec04.mp4">Example Set - I</option>
			<option  value="103106112/mod01lec05.mp4">Continuous probability distributions</option>
			<option  value="103106112/mod01lec06.mp4">Normal probability distribution</option>
			<option  value="103106112/mod01lec07.mp4">Exploratory Data Analysis – Part A</option>
			<option  value="103106112/mod01lec08.mp4">Exploratory Data Analysis – Part B</option>
			<option  value="103106112/mod01lec09.mp4">Example Set II</option>
			<option  value="103106112/mod01lec10.mp4">Example Set III</option>
			<option  value="103106112/mod01lec11.mp4">Random samples: Sampling distribution of the mean (Part A)</option>
			<option  value="103106112/mod01lec12.mp4">Random samples: Sampling distribution of the mean (Part B)</option>
			<option  value="103106112/mod01lec13.mp4">Point Estimation</option>
			<option  value="103106112/mod01lec14.mp4">Sampling distributions and the Central Limit Theorem</option>
			<option  value="103106112/mod01lec15.mp4">Example Set – IV Part A</option>
			<option  value="103106112/mod01lec16.mp4">Estimation of Population Parameters Using Moments</option>
			<option  value="103106112/mod01lec17.mp4">Confidence Intervals (Part A)</option>
			<option  value="103106112/mod01lec18.mp4">Confidence Intervals (Part B)</option>
			<option  value="103106112/mod01lec19.mp4">The T-distribution</option>
			<option  value="103106112/mod01lec20.mp4">Chi-square distribution</option>
			<option  value="103106112/mod01lec21.mp4">F-Distribution</option>
			<option  value="103106112/mod01lec22.mp4">Example Set 5</option>
			<option  value="103106112/mod01lec23.mp4">Hypothesis Testing – Part A</option>
			<option  value="103106112/mod01lec24.mp4">Hypothesis Testing – Part B</option>
			<option  value="103106112/mod01lec25.mp4">Hypothesis Testing – Part C</option>
			<option  value="103106112/mod01lec26.mp4">Analysis of Experiments involving Single Factor – Part A</option>
			<option  value="103106112/mod01lec27.mp4">Analysis of Experiments involving Single Factor – Part B</option>
			<option  value="103106112/mod01lec28.mp4">Blocking and Randomization </option>
			<option  value="103106112/mod01lec29.mp4">Example Set -6 – Part A</option>
			<option  value="103106112/mod01lec30.mp4">Example Set -6 – Part B</option>
			<option  value="103106112/mod01lec31.mp4">Factorial Design of Experiments – Part A</option>
			<option  value="103106112/mod01lec32.mp4">Factorial Design of Experiments – Part B: 22 Factorial Design</option>
			<option  value="103106112/mod01lec33.mp4">Fractional Factorial Design – Part A</option>
			<option  value="103106112/mod01lec34.mp4">Fractional Factorial Design – Part B</option>
			<option  value="103106112/mod01lec35.mp4">Factorial Design of Experiments: Example Set (Part A)</option>
			<option  value="103106112/mod01lec36.mp4">Factorial Design of Experiments: Example Set (Part B)</option>
			<option  value="103106112/mod01lec37.mp4">Factorial Design of Experiments: Example Set (Part C)</option>
			<option  value="103106112/mod01lec38.mp4">Regression Analysis: Part A</option>
			<option  value="103106112/mod01lec39.mp4">Regression Analysis: Part B</option>
			<option  value="103106112/mod01lec40.mp4">Hypothesis Testing in Linear Regression</option>
			<option  value="103106112/mod01lec41.mp4">Discussion on Regression Output</option>
			<option  value="103106112/mod01lec42.mp4">Regression Analysis : Example Set 8</option>
			<option  value="103106112/mod01lec43.mp4">Regression Analysis: Example Set 8 Continued</option>
			<option  value="103106112/mod01lec44.mp4">Regression Analysis: Example Set 8 Continued.</option>
			<option  value="103106112/mod01lec45.mp4">Orthogonal Model Fitting Concepts  - Part A</option>
			<option  value="103106112/mod01lec46.mp4">Orthogonal Model Fitting Concepts – Part B</option>
			<option  value="103106112/mod01lec47.mp4">Experimental Design Strategies - A</option>
			<option  value="103106112/mod01lec48.mp4">Experimental Design Strategies - B</option>
			<option  value="103106112/mod01lec49.mp4">Experimental Design Strategies -  C</option>
			<option  value="103106112/mod01lec50.mp4">Response Surface Methodology - A</option>
			<option  value="103106112/mod01lec51.mp4">Response Surface Methodology - B</option>
			<option  value="103106112/mod01lec52.mp4">Optimal Designs – Part A</option>
			<option  value="103106112/mod01lec53.mp4">Optimal Designs – Part B</option>
			<option  value="103106112/mod01lec54.mp4">Statistics for Experimentalists – Summary Part A</option>
			<option  value="103106112/mod01lec55.mp4">Statistics for Experimentalists – Summary Part B</option>
        </select>
      </td>
    </tr>
</form>


   </table>
    </div>
	
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    
$(window).unload(function(){
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
