﻿<?php

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
<title>Computer Science</title>
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
	<td><strong>106101007</strong></td>
	<td><strong>Computer Science and Engineering </strong></td>
	<td><strong>Natural Language Processing</strong></td>
	<td><strong>Prof. Pushpak Bhattacharyya</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value=<embed src="G:/NPTEL/PhaseII/106101007/mod01lec01.mp4" type="application/x-shockwave-flash" width="425" height="350" />L1-Introduction                                                                                      </option>
<option  value="106101007/mod01lec02.mp4">L2-Stages of NLP                                                                                     </option>
<option  value="106101007/mod01lec03.mp4">L3-Stages of NLP Continue�                                                                           </option>
<option  value="106101007/mod01lec04.mp4">L4-Two approaches to NLP                                                                             </option>
<option  value="106101007/mod01lec05.mp4">L5-Sequence Labelling and Noisy Channel                                                              </option>
<option  value="106101007/mod01lec06.mp4">L6-Noisy Channel: Argmax Based Computation                                                           </option>
<option  value="106101007/mod01lec07.mp4">L7-Argmax Based Computation                                                                          </option>
<option  value="106101007/mod01lec08.mp4">L8-Noisy Channel Application to NLP                                                                  </option>
<option  value="106101007/mod01lec09.mp4">L9-Brief on Probabilistic Parsing & Start of Part of Speech Tagging                                  </option>
<option  value="106101007/mod01lec10.mp4">L10-Part of Speech Tagging                                                                           </option>
<option  value="106101007/mod01lec11.mp4">L11-Part of Speech Tagging counted�                                                                  </option>
<option  value="106101007/mod01lec12.mp4">L12-Part of Speech Tagging counted� & Indian Language in Focus; Morphology Analysis                  </option>
<option  value="106101007/mod01lec13.mp4">L13-PoS Tagging contd� ,  Indian Language Consideration; Accuracy Measure                            </option>
<option  value="106101007/mod01lec14.mp4">L14-PoS Tagging; Fundamental Principle; Why Challenging; accuracy                                    </option>
<option  value="106101007/mod01lec15.mp4">L15-PoS Tagging; Accuracy Measurement; Word categories                                               </option>
<option  value="106101007/mod01lec16.mp4">L16-AI and Probability; HMM                                                                          </option>
<option  value="106101007/mod01lec17.mp4">L17-HMM                                                                                              </option>
<option  value="106101007/mod01lec18.mp4">L18-HMM, Viterbi, Forward Backward Algorithm                                                         </option>
<option  value="106101007/mod01lec19.mp4">L19-HMM, Viterbi, Forward Backward Algorithm Contd..                                                 </option>
<option  value="106101007/mod01lec20.mp4">L20-HMM, Forward Backward Algorithms, Baum Welch Algorithm                                           </option>
<option  value="106101007/mod01lec21.mp4">L21-HMM, Forward Backward Algorithms, Baum Welch Algorithm Contd...                                  </option>
<option  value="106101007/mod01lec22.mp4">L22-Natural Language Processing and Informational Retrieval                                          </option>
<option  value="106101007/mod01lec23.mp4">L23-CLIA; IR Basics                                                                                  </option>
<option  value="106101007/mod01lec24.mp4">L24-IR Models: Boolean Vector                                                                        </option>
<option  value="106101007/mod01lec25.mp4">L25-IR Models: NLP and IR Relationship                                                               </option>
<option  value="106101007/mod01lec26.mp4">L26-NLP and IR: How NLP has used IR, Toward Latent Semantic                                          </option>
<option  value="106101007/mod01lec27.mp4">L27-Least Square Method; Recap of PCA; Towards Latent Semantic Indexing(LSI)                         </option>
<option  value="106101007/mod01lec28.mp4">L28-PCA; SVD; Towards Latent Semantic Indexing(LSI)                                                  </option>
<option  value="106101007/mod01lec29.mp4">L29-Wordnet and Word Sense Disambiguation                                                            </option>
<option  value="106101007/mod01lec30.mp4">L30-Wordnet and Word Sense Disambiguation(contd�)                                                    </option>
<option  value="106101007/mod01lec31.mp4">L31-Wordnet; Metonymy and Word Sense Disambiguation                                                  </option>
<option  value="106101007/mod01lec32.mp4">L32-Word Sense Disambiguation                                                                        </option>
<option  value="106101007/mod01lec33.mp4">L33-Word Sense Disambiguation; Overlap Based Method; Supervised Method                               </option>
<option  value="106101007/mod01lec34.mp4">L34-Word Sense Disambiguation: Supervised and Unsupervised methods                                   </option>
<option  value="106101007/mod01lec35.mp4">L35-Word Sense Disambiguation: Semi - Supervised and Unsupervised method; resource - constrained WSD </option>
<option  value="106101007/mod01lec36.mp4">L36-Resource Constrained WSD; Parsing                                                                </option>
<option  value="106101007/mod01lec37.mp4">L37-Parsing                                                                                          </option>
<option  value="106101007/mod01lec38.mp4">L38-Parsing Algorithm                                                                                </option>
<option  value="106101007/mod01lec39.mp4">L39-Parsing Ambiguous Sentences; Probabilistic Parsing                                               </option>
<option  value="106101007/mod01lec40.mp4">L40-Probabilistic Parsing Algorithms                                                                 </option>
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106101059</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Design and Analysis of Algorithms</strong></td>
	<td><strong>Prof. Abhiram G Ranade,Prof. Ajit A Diwan,Prof. Sundar Viswanathan
</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="select1" id="select1" onchange="goToPage('select1');"><option  value="#">Select </option>
      
      <option  value="106101059/Design%20and%20Analysis%20of%20Algorithms/Course%20Objectives.html">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106101060</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Design and Analysis of Algorithms</strong></td>
	<td><strong>Prof. Abhiram G Ranade,Prof. Ajit A Diwan,Prof. Sundar Viswanathan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106101060/lec01.mp4">Overview of the course</option>
      
      <option  value="106101060/lec02.mp4">Framework for Algorithms Analysis</option>
      
      <option  value="106101060/lec03.mp4">Algorithms Analysis Framework - II</option>
      
      <option  value="106101060/lec04.mp4">Asymptotic Notations</option>
      
      <option  value="106101060/lec05.mp4">Algorithm Design Techniques : Basics</option>
      
      <option  value="106101060/lec06.mp4">Divide And Conquer-I</option>
      
      <option  value="106101060/lec07.mp4">Divide And Conquer -II Median Finding</option>
      
      <option  value="106101060/lec08.mp4">Divide And Conquer -III Surfing Lower Bounds</option>
      
      <option  value="106101060/lec09.mp4">Divide And Conquer -IV Closest Pair</option>
      
      <option  value="106101060/lec10.mp4">Greedy Algorithms -I</option>
      
      <option  value="106101060/lec11.mp4">Greedy Algorithms - II</option>
      
      <option  value="106101060/lec12.mp4">Greedy Algorithms - III</option>
      
      <option  value="106101060/lec13.mp4">Greedy Algorithms - IV</option>
      
      <option  value="106101060/lec14.mp4">Pattern Matching - I</option>
      
      <option  value="106101060/lec15.mp4">Pattern Matching - II</option>
      
      <option  value="106101060/lec16.mp4">Combinational Search and Optimization I</option>
      
      <option  value="106101060/lec17.mp4">Combinational Search and Optimization II</option>
      
      <option  value="106101060/lec18.mp4">Dynamic Programming</option>
      
      <option  value="106101060/lec19.mp4">Longest Common Subsequences</option>
      
      <option  value="106101060/lec20.mp4">Matrix Chain Multiplication</option>
      
      <option  value="106101060/lec21.mp4">Scheduling with Startup and Holding Costs</option>
      
      <option  value="106101060/lec22.mp4">Average case Analysis of Quicksort</option>
      
      <option  value="106101060/lec23.mp4">Bipartite Maximum Matching</option>
      
      <option  value="106101060/lec24.mp4">Lower Bounds for Sorting</option>
      
      <option  value="106101060/lec25.mp4">Element Distinctness Lower Bounds</option>
      
      <option  value="106101060/lec26.mp4">NP-Completeness-I -Motivation</option>
      
      <option  value="106101060/lec27.mp4">NP - Completeness - II</option>
      
      <option  value="106101060/lec28.mp4">NP-Completeness - III</option>
      
      <option  value="106101060/lec29.mp4">NP-Completeness - IV</option>
      
      <option  value="106101060/lec30.mp4">NP-Completeness - V</option>
      
      <option  value="106101060/lec31.mp4">NP-Completeness - VI</option>
      
      <option  value="106101060/lec32.mp4">Approximation Algorithms</option>
      
      <option  value="106101060/lec33.mp4">Approximation Algorithms</option>
      
      <option  value="106101060/lec34.mp4">Approximation Algorithms for NP</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106101061</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Software Engineering</strong></td>
	<td><strong>Prof. Rushikesh K Joshi,Prof. Umesh Bellur,Prof. N.L. Sarda</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106101061/lec01.mp4">Introduction to Software Engineering-Challenges</option>
      
      <option  value="106101061/lec02.mp4">Introduction to Software Engineering</option>
      
      <option  value="106101061/lec03.mp4">Overview of Phases</option>
      
      <option  value="106101061/lec04.mp4">Overview of Phases</option>
      
      <option  value="106101061/lec05.mp4">Requirements Engineering / Specification</option>
      
      <option  value="106101061/lec06.mp4">Formal Specification</option>
      
      <option  value="106101061/lec07.mp4">Algebraic Specification Methods</option>
      
      <option  value="106101061/lec08.mp4">Systems Modeling Overview</option>
      
      <option  value="106101061/lec09.mp4">Process Modeling - DFD , Function Decomp</option>
      
      <option  value="106101061/lec10.mp4">Process Modeling - DFD, Function Decomp</option>
      
      <option  value="106101061/lec11.mp4">Data Modeling - ER Diagrams, Mapping</option>
      
      <option  value="106101061/lec12.mp4">Data Modeling - ER Diagrams, Mapping</option>
      
      <option  value="106101061/lec13.mp4">Production Quality Software - Introduction</option>
      
      <option  value="106101061/lec14.mp4">Software Design - Primary Consideration</option>
      
      <option  value="106101061/lec15.mp4">Design Patterns</option>
      
      <option  value="106101061/lec16.mp4">Class and Component Level Design</option>
      
      <option  value="106101061/lec17.mp4">Architectural Design</option>
      
      <option  value="106101061/lec18.mp4">Software Testing - I</option>
      
      <option  value="106101061/lec19.mp4">Software Testing - II</option>
      
      <option  value="106101061/lec20.mp4">Structural Programming and Some implementation</option>
      
      <option  value="106101061/lec21.mp4">Software Metrics and Quality</option>
      
      <option  value="106101061/lec22.mp4">Verification and Validation</option>
      
      <option  value="106101061/lec23.mp4">Case Study</option>
      
      <option  value="106101061/lec24.mp4">Case Study</option>
      
      <option  value="106101061/lec25.mp4">Software Evolution</option>
      
      <option  value="106101061/lec26.mp4">Agile Development</option>
      
      <option  value="106101061/lec27.mp4">Software Reuse CBSE</option>
      
      <option  value="106101061/lec28.mp4">Reuse Continued</option>
      
      <option  value="106101061/lec29.mp4">Introduction to Project Management</option>
      
      <option  value="106101061/lec30.mp4">Project Scope Management</option>
      
      <option  value="106101061/lec31.mp4">Project Time Management</option>
      
      <option  value="106101061/lec32.mp4">Estimation - I</option>
      
      <option  value="106101061/lec33.mp4">Estimation - II</option>
      
      <option  value="106101061/lec34.mp4">Project Quality Management</option>
      
      <option  value="106101061/lec35.mp4">Quality Management Systems - I</option>
      
      <option  value="106101061/lec36.mp4">Quality Management Systems</option>
      
      <option  value="106101061/lec37.mp4">Project Configuration Management</option>
      
      <option  value="106101061/lec38.mp4">Project Risk Management</option>
      
      <option  value="106101061/lec39.mp4">Other PM Processes</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106102011</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computational Geometry</strong></td>
	<td><strong>Prof. Sandeep Sen</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106102011/mod01lec01.mp4">Introduction</option>
      
      <option  value="106102011/mod01lec02.mp4">Visibility Problems</option>
      
      <option  value="106102011/mod02lec03.mp4">2D Maxima</option>
      
      <option  value="106102011/mod03lec04.mp4">Line Sweep Method</option>
      
      <option  value="106102011/mod03lec05.mp4">Segment Intersection Problem</option>
      
      <option  value="106102011/mod03lec06.mp4">Line Sweep: Rectangle Union</option>
      
      <option  value="106102011/mod04lec07.mp4">Convex Hull</option>
      
      <option  value="106102011/mod04lec08.mp4">Convex Hull Contd</option>
      
      <option  value="106102011/mod04lec09.mp4">Quick Hull</option>
      
      <option  value="106102011/mod04lec10.mp4">More Convex Hull Algorithms</option>
      
      <option  value="106102011/mod05lec11.mp4">Intersection of Half Planes and Duality</option>
      
      <option  value="106102011/mod05lec12.mp4">Intersection of Half Planes and Duality Contd</option>
      
      <option  value="106102011/mod06lec13.mp4">Lower Bounds</option>
      
      <option  value="106102011/mod07lec14.mp4">Planar Point Location</option>
      
      <option  value="106102011/mod07lec15.mp4">Point Location and Triangulation Contd...</option>
      
      <option  value="106102011/mod07lec16.mp4">Triangulation of Arbitrary Polygon.</option>
      
      <option  value="106102011/mod08lec17.mp4">Voronoi Diagram  : Properties</option>
      
      <option  value="106102011/mod08lec18.mp4">Voronoi Diagram Construction</option>
      
      <option  value="106102011/mod08lec19.mp4">Delaunay Triangulation.</option>
      
      <option  value="106102011/mod09lec20.mp4">Quick sort and Backward Analysis</option>
      
      <option  value="106102011/mod09lec21.mp4">Generalized RIC</option>
      
      <option  value="106102011/mod09lec22.mp4">RIC Continued</option>
      
      <option  value="106102011/mod10lec23.mp4">Arrangements</option>
      
      <option  value="106102011/mod10lec24.mp4">Zone Theorem and Application</option>
      
      <option  value="106102011/mod10lec25.mp4">Levels</option>
      
      <option  value="106102011/mod11lec26.mp4">Range Searching : Introduction</option>
      
      <option  value="106102011/mod11lec27.mp4">Orthogonal Range searching </option>
      
      <option  value="106102011/mod11lec28.mp4">Priority Search Trees</option>
      
      <option  value="106102011/mod11lec29.mp4">Non - Orthogonal Range Searching</option>
      
      <option  value="106102011/mod11lec30.mp4">Half - Plane Range Query</option>
      
      <option  value="106102011/mod12lec31.mp4">Well Separated Partitioning</option>
      
      <option  value="106102011/mod12lec32.mp4">Quadtrees Epsilon -WSPD</option>
      
      <option  value="106102011/mod12lec33.mp4">Construction of  Epsilon - WSPD</option>
      
      <option  value="106102011/mod12lec34.mp4">Epsilon - WSPD to Geometric Spanner</option>
      
      <option  value="106102011/mod13lec35.mp4">Epsilon-Nets & VC Dimension</option>
      
      <option  value="106102011/mod13lec36.mp4">Epsilon-Nets & VC Dimension contd</option>
      
      <option  value="106102011/mod13lec37.mp4">Geometric Set Cover</option>
      
      <option  value="106102011/mod13lec38.mp4">Geometric Set Cover (with Bounded VC Dimension)</option>
      
      <option  value="106102011/mod14lec39.mp4">Shape Representation</option>
      
      <option  value="106102011/mod14lec40.mp4">Shape Comparison</option>
          </select></td>
	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106102013</strong></td>
	<td><strong>Computer Science and Engineering </strong></td>
	<td><strong>Logic for CS </strong></td>
	<td><strong>Prof. S. Arun Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106102013/mod01lec01.mp4">Introduction                            </option>
<option  value="106102013/mod01lec02.mp4">Propositional Logic Syntax              </option>
<option  value="106102013/mod01lec03.mp4">Semantics of Propositional Logic        </option>
<option  value="106102013/mod01lec04.mp4">Logical and Algebraic Concepts          </option>
<option  value="106102013/mod01lec05.mp4">Identities and Normal forms             </option>
<option  value="106102013/mod01lec06.mp4">Tautology Checking                      </option>
<option  value="106102013/mod01lec07.mp4">Propositional Unsatisfiability          </option>
<option  value="106102013/mod01lec08.mp4">Analytic Tableaux                       </option>
<option  value="106102013/mod01lec09.mp4">Consistency and Completeness            </option>
<option  value="106102013/mod01lec10.mp4">The Completeness Theorem                </option>
<option  value="106102013/mod01lec11.mp4">Maximally Consistent Sets               </option>
<option  value="106102013/mod01lec12.mp4">Formal Theories                         </option>
<option  value="106102013/mod01lec13.mp4">Proof Theory : Hilbert-style            </option>
<option  value="106102013/mod01lec14.mp4">Derived Rules                           </option>
<option  value="106102013/mod01lec15.mp4">The Hilbert System : Soundness          </option>
<option  value="106102013/mod01lec16.mp4">The Hilbert System :Completeness        </option>
<option  value="106102013/mod01lec17.mp4">Introduction to Predicate Logic         </option>
<option  value="106102013/mod01lec18.mp4">The Semantic of Predicate Logic         </option>
<option  value="106102013/mod01lec19.mp4">Subsitutions                            </option>
<option  value="106102013/mod01lec20.mp4">Models                                  </option>
<option  value="106102013/mod01lec21.mp4">Structures and Substructures            </option>
<option  value="106102013/mod01lec22.mp4">First - Order Theories                  </option>
<option  value="106102013/mod01lec23.mp4">Predicate Logic: Proof Theory (Contd..) </option>
<option  value="106102013/mod01lec24.mp4">Existential Quantification              </option>
<option  value="106102013/mod01lec25.mp4">Normal Forms                            </option>
<option  value="106102013/mod01lec26.mp4">Skalemization                           </option>
<option  value="106102013/mod01lec27.mp4">Substitutions and Instantiations        </option>
<option  value="106102013/mod01lec28.mp4">Unification                             </option>
<option  value="106102013/mod01lec29.mp4">Resolution in FOL                       </option>
<option  value="106102013/mod01lec30.mp4">More on Resolution in FOL               </option>
<option  value="106102013/mod01lec31.mp4">Resolution : Soundness and Completeness </option>
<option  value="106102013/mod01lec32.mp4">Resolution and Tableaux                 </option>
<option  value="106102013/mod01lec33.mp4">Completeness of Tableaux Method         </option>
<option  value="106102013/mod01lec34.mp4">Completeness of the Hilbert System      </option>
<option  value="106102013/mod01lec35.mp4">First -Order Theories                   </option>
<option  value="106102013/mod01lec36.mp4">Towards Logic Programming               </option>
<option  value="106102013/mod01lec37.mp4">Verification of Imperative Programs     </option>
<option  value="106102013/mod01lec38.mp4">Verification of WHILE Programs          </option>
<option  value="106102013/mod01lec39.mp4">References                              </option>

	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106102062</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Architecture</strong></td>
	<td><strong>Prof. Anshul Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106102062/lec01.mp4">Introduction to Computer Architecture</option>
      
      <option  value="106102062/lec02.mp4">History of Computers</option>
      
      <option  value="106102062/lec03.mp4">Instruction Set Architecture - I</option>
      
      <option  value="106102062/lec04.mp4">Instruction Set Architecture - II</option>
      
      <option  value="106102062/lec05.mp4">Instruction Set Architecture - III</option>
      
      <option  value="106102062/lec06.mp4">Recursive Programs</option>
      
      <option  value="106102062/lec07.mp4">Architecture Space</option>
      
      <option  value="106102062/lec08.mp4">Architecture Examples</option>
      
      <option  value="106102062/lec09.mp4">Performance</option>
      
      <option  value="106102062/lec10.mp4">Performance</option>
      
      <option  value="106102062/lec11.mp4">Binary Arithmetic, ALU Design</option>
      
      <option  value="106102062/lec12.mp4">ALU Design, Overflow</option>
      
      <option  value="106102062/lec13.mp4">Multiplier Design</option>
      
      <option  value="106102062/lec14.mp4">Divider Design</option>
      
      <option  value="106102062/lec15.mp4">Fast Addition , Multiplication</option>
      
      <option  value="106102062/lec16.mp4">Floating Point Arithmetic</option>
      
      <option  value="106102062/lec17.mp4">Processor Design - Introduction</option>
      
      <option  value="106102062/lec18.mp4">Processor Design</option>
      
      <option  value="106102062/lec19.mp4">Processor Design - Simple Design</option>
      
      <option  value="106102062/lec20.mp4">Processor Design - Multi Cycle Approach</option>
      
      <option  value="106102062/lec21.mp4">Processor Design - Control for Multi Cycle</option>
      
      <option  value="106102062/lec22.mp4">Processor Design Micro programmed Control</option>
      
      <option  value="106102062/lec23.mp4">Processor Design Exception Handling</option>
      
      <option  value="106102062/lec24.mp4">Pipelined Processor Design Basic Idea</option>
      
      <option  value="106102062/lec25.mp4">Pipelined Processor Design: Data path</option>
      
      <option  value="106102062/lec26.mp4">Pipelined Processor Design: Handling Data</option>
      
      <option  value="106102062/lec27.mp4">Pipelined Processor Design</option>
      
      <option  value="106102062/lec28.mp4">Memory Hierarchy : Basic Idea</option>
      
      <option  value="106102062/lec29.mp4">Memory Hierarchy : Cache Organization</option>
      
      <option  value="106102062/lec30.mp4">Memory Hierarchy : Cache Organization</option>
      
      <option  value="106102062/lec31.mp4">Memory Hierarchy : Virtual Memory</option>
      
      <option  value="106102062/lec32.mp4">Memory Hierarchy : Virtual Memory</option>
      
      <option  value="106102062/lec33.mp4">Input / Output Subsystem: Introduction</option>
      
      <option  value="106102062/lec34.mp4">Input / Output Subsystem: Interfaces and buses</option>
      
      <option  value="106102062/lec35.mp4">Input / Output Subsystem: Interfaces and buses</option>
      
      <option  value="106102062/lec36.mp4">Input / Output Subsystem: I/O Operations</option>
      
      <option  value="106102062/lec37.mp4">Input / Output Subsystem: Designing I/O Systems</option>
      
      <option  value="106102062/lec38.mp4">Concluding Remarks</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106102064</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Data Structures And Algorithms</strong></td>
	<td><strong>Prof. Naveen Garg</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106102064/lec01.mp4">Introduction to Data Structures and Algorithms</option>
      
      <option  value="106102064/lec02.mp4">Stacks</option>
      
      <option  value="106102064/lec03.mp4">Queues and Linked Lists</option>
      
      <option  value="106102064/lec04.mp4">Dictionaries</option>
      
      <option  value="106102064/lec05.mp4">Hashing</option>
      
      <option  value="106102064/lec06.mp4">Trees</option>
      
      <option  value="106102064/lec07.mp4">Tree Walks / Traversals</option>
      
      <option  value="106102064/lec08.mp4">Ordered Dictionaries</option>
      
      <option  value="106102064/lec09.mp4">Deletion</option>
      
      <option  value="106102064/lec10.mp4">Quick Sort</option>
      
      <option  value="106102064/lec11.mp4">AVL Trees</option>
      
      <option  value="106102064/lec12.mp4">AVL Trees</option>
      
      <option  value="106102064/lec13.mp4">Trees</option>
      
      <option  value="106102064/lec14.mp4">Red Black Trees</option>
      
      <option  value="106102064/lec15.mp4">Insertion in Red Black Trees</option>
      
      <option  value="106102064/lec16.mp4">Disk Based Data Structures</option>
      
      <option  value="106102064/lec17.mp4">Case Study: Searching for Patterns</option>
      
      <option  value="106102064/lec18.mp4">Tries</option>
      
      <option  value="106102064/lec19.mp4">Data Compression</option>
      
      <option  value="106102064/lec20.mp4">Priority Queues</option>
      
      <option  value="106102064/lec21.mp4">Binary Heaps</option>
      
      <option  value="106102064/lec22.mp4">Why Sorting</option>
      
      <option  value="106102064/lec23.mp4">More Sorting</option>
      
      <option  value="106102064/lec24.mp4">Graphs</option>
      
      <option  value="106102064/lec25.mp4">Data Structures for Graphs</option>
      
      <option  value="106102064/lec26.mp4">Two Applications of Breadth First Search</option>
      
      <option  value="106102064/lec27.mp4">Depth First Search</option>
      
      <option  value="106102064/lec28.mp4">Applications of DFS</option>
      
      <option  value="106102064/lec29.mp4">DFS in Directed Graphs</option>
      
      <option  value="106102064/lec30.mp4">Applications of DFS in Directed Graphs</option>
      
      <option  value="106102064/lec31.mp4">Minimum Spanning Trees</option>
      
      <option  value="106102064/lec32.mp4">The Union</option>
      
      <option  value="106102064/lec33.mp4">Prims Algorithm for Minimum Spanning Trees</option>
      
      <option  value="106102064/lec34.mp4">Single Source Shortest Paths</option>
      
      <option  value="106102064/lec35.mp4">Correctness of Dijkstras Algorithm</option>
      
      <option  value="106102064/lec36.mp4">Single Source Shortest Paths</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106102065</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Introduction to Computer Graphics</strong></td>
	<td><strong>Prof. Prem K Kalra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106102065/lec01.mp4">Introduction</option>
      
      <option  value="106102065/lec02.mp4">Raster Graphics</option>
      
      <option  value="106102065/lec03.mp4">Raster Graphics (Contd.)</option>
      
      <option  value="106102065/lec04.mp4">Clipping</option>
      
      <option  value="106102065/lec05.mp4">Polygon Clipping and Polygon Scan Conversion</option>
      
      <option  value="106102065/lec06.mp4">Transformations</option>
      
      <option  value="106102065/lec07.mp4">Transformations (contd.)</option>
      
      <option  value="106102065/lec08.mp4">3D Viewing</option>
      
      <option  value="106102065/lec09.mp4">3D Viewing (Contd.)</option>
      
      <option  value="106102065/lec10.mp4">Curves</option>
      
      <option  value="106102065/lec11.mp4">Assignment - I</option>
      
      <option  value="106102065/lec12.mp4">Curves (Contd.)</option>
      
      <option  value="106102065/lec13.mp4">Curves (Contd.)</option>
      
      <option  value="106102065/lec14.mp4">Curves (Contd.)</option>
      
      <option  value="106102065/lec15.mp4">Curves (Contd.)</option>
      
      <option  value="106102065/lec16.mp4">Surfaces</option>
      
      <option  value="106102065/lec17.mp4">Surfaces(Contd.)</option>
      
      <option  value="106102065/lec18.mp4">Surfaces(Contd.)</option>
      
      <option  value="106102065/lec19.mp4">Surfaces(Contd.)</option>
      
      <option  value="106102065/lec20.mp4">Hierarchical Models</option>
      
      <option  value="106102065/lec21.mp4">Rendering</option>
      
      <option  value="106102065/lec22.mp4">Rendering(Contd.)</option>
      
      <option  value="106102065/lec23.mp4">Rendering(Contd.)</option>
      
      <option  value="106102065/lec24.mp4">Ray Tracing</option>
      
      <option  value="106102065/lec25.mp4">Ray Tracing(Contd.)</option>
      
      <option  value="106102065/lec26.mp4">Ray Tracing(Contd.)</option>
      
      <option  value="106102065/lec27.mp4">Assignment: Ray Tracing</option>
      
      <option  value="106102065/lec28.mp4">Hidden Surface Elimination</option>
      
      <option  value="106102065/lec29.mp4">Hidden Surface Elimination(Contd.)</option>
      
      <option  value="106102065/lec30.mp4">Hidden Surface Elimination(Contd.)</option>
      
      <option  value="106102065/lec31.mp4">Fractals</option>
      
      <option  value="106102065/lec32.mp4">Fractals(Contd.)</option>
      
      <option  value="106102065/lec33.mp4">Computer Animation</option>
      
      <option  value="106102065/lec34.mp4">Animation(Contd.)</option>
      
      <option  value="106102065/lec35.mp4">Animation(Contd.)</option>
          </select></td>
	
	</tr>
	</form>
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106102067</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Principles of Programming Languages</strong></td>
	<td><strong>Prof. S. Arun Kumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106102067/lec01.mp4">Introduction</option>
      
      <option  value="106102067/lec02.mp4">Syntax</option>
      
      <option  value="106102067/lec03.mp4">Grammars</option>
      
      <option  value="106102067/lec04.mp4">Ambiguity</option>
      
      <option  value="106102067/lec05.mp4">PLO:Syntax</option>
      
      <option  value="106102067/lec06.mp4">Semantics</option>
      
      <option  value="106102067/lec07.mp4">Syntactic Classes</option>
      
      <option  value="106102067/lec08.mp4">Transition Systems</option>
      
      <option  value="106102067/lec09.mp4">PL0 : Expressions</option>
      
      <option  value="106102067/lec10.mp4">Binding</option>
      
      <option  value="106102067/lec11.mp4">Environments</option>
      
      <option  value="106102067/lec12.mp4">Declarations</option>
      
      <option  value="106102067/lec13.mp4">Commands</option>
      
      <option  value="106102067/lec14.mp4">Stores</option>
      
      <option  value="106102067/lec15.mp4">Summary</option>
      
      <option  value="106102067/lec16.mp4">Declarations and Commands</option>
      
      <option  value="106102067/lec17.mp4">Blocks</option>
      
      <option  value="106102067/lec18.mp4">Qualification</option>
      
      <option  value="106102067/lec19.mp4">Pragmatics</option>
      
      <option  value="106102067/lec20.mp4">Data</option>
      
      <option  value="106102067/lec21.mp4">Structured Data</option>
      
      <option  value="106102067/lec22.mp4">Sequences</option>
      
      <option  value="106102067/lec23.mp4">Control</option>
      
      <option  value="106102067/lec24.mp4">Non- Determinacy</option>
      
      <option  value="106102067/lec25.mp4">Programming Languages</option>
      
      <option  value="106102067/lec26.mp4">Programming Languages</option>
      
      <option  value="106102067/lec27.mp4">Programming Languages</option>
      
      <option  value="106102067/lec28.mp4">Data as Functions</option>
      
      <option  value="106102067/lec29.mp4">Data and Fixpoints</option>
      
      <option  value="106102067/lec30.mp4">Normal Forms</option>
      
      <option  value="106102067/lec31.mp4">Programming Languages</option>
      
      <option  value="106102067/lec32.mp4">Monomorphism</option>
      
      <option  value="106102067/lec33.mp4">Polymorphism</option>
      
      <option  value="106102067/lec34.mp4">Type Checking</option>
      
      <option  value="106102067/lec35.mp4">Contexts</option>
      
      <option  value="106102067/lec36.mp4">Abstracts</option>
      
      <option  value="106102067/lec37.mp4">Procedures</option>
      
      <option  value="106102067/lec38.mp4">Meanings</option>
      
      <option  value="106102067/lec39.mp4">Parameters</option>
      
      <option  value="106102067/lec40.mp4">The Future</option>
          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106102114</strong></td>
	<td><strong>Computer Science and Engineering </strong></td>
	<td><strong>Parallel Computing  </strong></td>
	<td><strong>Dr. Subodh Kumar </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106102114/mod01lec01.mp4">Introduction                                         </option>
<option  value="106102114/mod01lec02.mp4">Parallel Programming Paradigms                       </option>
<option  value="106102114/mod01lec03.mp4">Parallel Architecture                                </option>
<option  value="106102114/mod01lec04.mp4">Parallel Architecture (case studies)                 </option>
<option  value="106102114/mod01lec05.mp4">Open MP                                              </option>
<option  value="106102114/mod01lec06.mp4">Open MP(Contd.)                                      </option>
<option  value="106102114/mod01lec07.mp4">Open MP(Contd..)                                     </option>
<option  value="106102114/mod01lec08.mp4">Open MP&PRAM Model of Computation                    </option>
<option  value="106102114/mod01lec09.mp4">PRAM                                                 </option>
<option  value="106102114/mod01lec10.mp4">Models of Parallel Computation,Complexity            </option>
<option  value="106102114/mod01lec11.mp4">Memory Consistency                                   </option>
<option  value="106102114/mod01lec12.mp4">Memory Consistency & Performance Issues              </option>
<option  value="106102114/mod01lec13.mp4">Parallel Program Design                              </option>
<option  value="106102114/mod01lec14.mp4">Shared Memory & Message Passing                      </option>
<option  value="106102114/mod01lec15.mp4">MPI                                                  </option>
<option  value="106102114/mod01lec16.mp4">MPI(Contd.)                                          </option>
<option  value="106102114/mod01lec17.mp4">MPI(Contd..)                                         </option>
<option  value="106102114/mod01lec18.mp4">Algorithmic Techniques                               </option>
<option  value="106102114/mod01lec19.mp4">Algorithmic Techniques(Contd.)                       </option>
<option  value="106102114/mod01lec20.mp4">Algorithmic Techniques(Contd..)                      </option>
<option  value="106102114/mod01lec21.mp4">CUDA                                                 </option>
<option  value="106102114/mod01lec22.mp4">CUDA(Contd.)                                         </option>
<option  value="106102114/mod01lec23.mp4">CUDA(Contd..)                                        </option>
<option  value="106102114/mod01lec24.mp4">CUDA(Contd...)                                       </option>
<option  value="106102114/mod01lec25.mp4">CUDA(Contd....)                                      </option>
<option  value="106102114/mod01lec26.mp4">CUDA(Contd.....)                                     </option>
<option  value="106102114/mod01lec27.mp4">CUDA(Contd......)                                    </option>
<option  value="106102114/mod01lec28.mp4">Algorithms,Merging & Sorting                         </option>
<option  value="106102114/mod01lec29.mp4">Algorithms,Merging & Sorting(Contd.)                 </option>
<option  value="106102114/mod01lec30.mp4">Algorithms,Merging & Sorting(Contd..)                </option>
<option  value="106102114/mod01lec31.mp4">Algorithms,Merging & Sorting(Contd...)               </option>
<option  value="106102114/mod01lec32.mp4">Algorithms,Merging & Sorting(Contd....)              </option>
<option  value="106102114/mod01lec33.mp4">Lower Bounds Lock Free Synchronization,Load Stealing </option>
<option  value="106102114/mod01lec34.mp4">Lock Free Synchronization,Graph Algorithms </option>

	</tr>
	</form>
     <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104120</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Parallel Algorithm</strong></td>
	<td><strong>Prof. Phalguni Gupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
     <option  value="106104120/mod01lec01.mp4">Lecture-01.mp4  </option>
     <option  value="106104120/mod01lec02.mp4">Lecture-02.mp4  </option>
     <option  value="106104120/mod01lec03.mp4">Lecture-03.mp4  </option>
     <option  value="106104120/mod01lec04.mp4">Lecture-04.mp4  </option>
     <option  value="106104120/mod01lec05.mp4">Lecture-05.mp4  </option>
     <option  value="106104120/mod01lec06.mp4">Lecture-06.mp4  </option>
     <option  value="106104120/mod01lec07.mp4">Lecture-07.mp4  </option>
     <option  value="106104120/mod01lec08.mp4">Lecture-08.mp4  </option>
     <option  value="106104120/mod01lec09.mp4">Lecture-09.mp4  </option>
     <option  value="106104120/mod01lec10.mp4">Lecture-10.mp4  </option>
     <option  value="106104120/mod01lec11.mp4">Lecture-11.mp4  </option>
     <option  value="106104120/mod01lec12.mp4">Lecture-12.mp4  </option>
     <option  value="106104120/mod01lec13.mp4">Lecture-13.mp4  </option>
     <option  value="106104120/mod01lec14.mp4">Lecture-14.mp4  </option>
     <option  value="106104120/mod01lec15.mp4">Lecture-15.mp4  </option>
     <option  value="106104120/mod01lec16.mp4">Lecture-16.mp4  </option>
     <option  value="106104120/mod01lec17.mp4">Lecture-17.mp4  </option>
     <option  value="106104120/mod01lec18.mp4">Lecture-18.mp4  </option>
     <option  value="106104120/mod01lec19.mp4">Lecture-19.mp4  </option>
     <option  value="106104120/mod01lec20.mp4">Lecture-20.mp4  </option>
     <option  value="106104120/mod01lec21.mp4">Lecture-21.mp4  </option>
     <option  value="106104120/mod01lec22.mp4">Lecture-22.mp4  </option>
     <option  value="106104120/mod01lec23.mp4">Lecture-23.mp4  </option>
     <option  value="106104120/mod01lec24.mp4">Lecture-24.mp4  </option>
     <option  value="106104120/mod01lec25.mp4">Lecture-25.mp4 </option>

          </select></td>
	
	</tr>
	</form>
    
    
    
    
    <!--new code for 15 courses-->
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106102063</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Graphics</strong></td>
	<td><strong>Prof. Prem K Kalra</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106102063/Computer%20Graphics/csmain.htm">contents</option>
            
          </select></td>
		</tr>
	</form>    
     
        <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106102066</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Introduction to Problem Solving and Programming</strong></td>
	<td><strong>Prof. S. Arun Kumar</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106102066/intro%20to%20CS/new-slides.pdf">contents</option>
            
          </select></td>
		</tr>
	</form>  
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106103068</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Organization and Architecture</strong></td>
	<td><strong>Prof. Jatindra Kumar Deka</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106103068/comp_org_arc/web/index.htm">contents</option>
            
          </select></td>
		</tr>
	</form> 
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106103070</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Theory of Automata and Formal Languages</strong></td>
	<td><strong>Dr. Diganta Goswami</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106103070/afl/index.htm">contents</option>
            
          </select></td>
		</tr>
	</form>
    
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104028</strong></td>
	<td><strong>Computer Science and Engineering </strong></td>
	<td><strong>Theory of Computation</strong></td>
	<td><strong>Prof. Somenath Biswas</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106104028/mod01lec01.mp4">Lecture-01-Theory of Computation </option>
<option  value="106104028/mod01lec02.mp4">Lecture-02-Theory of Computation </option>
<option  value="106104028/mod01lec03.mp4">Lecture-03-Theory of Computation </option>
<option  value="106104028/mod01lec04.mp4">Lecture-04-Theory of Computation </option>
<option  value="106104028/mod01lec05.mp4">Lecture-05-Theory of Computation </option>
<option  value="106104028/mod01lec06.mp4">Lecture-06-Theory of Computation </option>
<option  value="106104028/mod01lec07.mp4">Lecture-07-Theory of Computation </option>
<option  value="106104028/mod01lec08.mp4">Lecture-08-Theory of Computation </option>
<option  value="106104028/mod01lec09.mp4">Lecture-09-Theory of Computation </option>
<option  value="106104028/mod01lec10.mp4">Lecture-10-Theory of Computation </option>
<option  value="106104028/mod01lec11.mp4">Lecture-11-Theory of Computation </option>
<option  value="106104028/mod01lec12.mp4">Lecture-12-Theory of Computation </option>
<option  value="106104028/mod01lec13.mp4">Lecture-13-Theory of Computation </option>
<option  value="106104028/mod01lec14.mp4">Lecture-14-Theory of Computation </option>
<option  value="106104028/mod01lec15.mp4">Lecture-15-Theory of Computation </option>
<option  value="106104028/mod01lec16.mp4">Lecture-16-Theory of Computation </option>
<option  value="106104028/mod01lec17.mp4">Lecture-17-Theory of Computation </option>
<option  value="106104028/mod01lec18.mp4">Lecture-18-Theory of Computation </option>
<option  value="106104028/mod01lec19.mp4">Lecture-19-Theory of Computation </option>
<option  value="106104028/mod01lec20.mp4">Lecture-20-Theory of Computation </option>
<option  value="106104028/mod01lec21.mp4">Lecture-21-Theory of Computation </option>
<option  value="106104028/mod01lec22.mp4">Lecture-22-Theory of Computation </option>
<option  value="106104028/mod01lec23.mp4">Lecture-23-Theory of Computation </option>
<option  value="106104028/mod01lec24.mp4">Lecture-24-Theory of Computation </option>
<option  value="106104028/mod01lec25.mp4">Lecture-25-Theory of Computation </option>
<option  value="106104028/mod01lec26.mp4">Lecture-26-Theory of Computation </option>
<option  value="106104028/mod01lec27.mp4">Lecture-27-Theory of Computation </option>
<option  value="106104028/mod01lec28.mp4">Lecture-28-Theory of Computation </option>
<option  value="106104028/mod01lec29.mp4">Lecture-29-Theory of Computation </option>
<option  value="106104028/mod01lec30.mp4">Lecture-30-Theory of Computation </option>
<option  value="106104028/mod01lec31.mp4">Lecture-31-Theory of Computation </option>
<option  value="106104028/mod01lec32.mp4">Lecture-32-Theory of Computation </option>
<option  value="106104028/mod01lec33.mp4">Lecture-33-Theory of Computation </option>

	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104118</strong></td>
	<td><strong>Computer Science and Engineering </strong></td>
	<td><strong>Riemann Hypothesis and its Applications </strong></td>
	<td><strong>Prof. Manindra Agrawal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106104118/mod01lec01.mp4">Lecture-01  </option>
<option  value="106104118/mod01lec02.mp4">Lecture-02  </option>
<option  value="106104118/mod01lec03.mp4">Lecture-03  </option>
<option  value="106104118/mod01lec04.mp4">Lecture-04  </option>
<option  value="106104118/mod01lec05.mp4">Lecture-05  </option>
<option  value="106104118/mod01lec06.mp4">Lecture-06  </option>
<option  value="106104118/mod01lec07.mp4">Lecture-07  </option>
<option  value="106104118/mod01lec08.mp4">Lecture-08  </option>
<option  value="106104118/mod01lec09.mp4">Lecture-09  </option>
<option  value="106104118/mod01lec10.mp4">Lecture-10  </option>
<option  value="106104118/mod01lec11.mp4">Lecture-11  </option>
<option  value="106104118/mod01lec12.mp4">Lecture-12  </option>
<option  value="106104118/mod01lec13.mp4">Lecture-13  </option>
<option  value="106104118/mod01lec14.mp4">Lecture-14  </option>
<option  value="106104118/mod01lec15.mp4">Lecture-15  </option>
<option  value="106104118/mod01lec16.mp4">Lecture-16  </option>
<option  value="106104118/mod01lec17.mp4">Lecture-17  </option>
<option  value="106104118/mod01lec18.mp4">Lecture-18  </option>
<option  value="106104118/mod01lec19.mp4">Lecture-19  </option>
<option  value="106104118/mod01lec20.mp4">Lecture-20  </option>
<option  value="106104118/mod01lec21.mp4">Lecture-21  </option>
<option  value="106104118/mod01lec22.mp4">Lecture-22  </option>
<option  value="106104118/mod01lec23.mp4">Lecture-23  </option>
<option  value="106104118/mod01lec24.mp4">Lecture-24  </option>
<option  value="106104118/mod01lec25.mp4">Lecture-25  </option>
<option  value="106104118/mod01lec26.mp4">Lecture-26  </option>
<option  value="106104118/mod01lec27.mp4">Lecture-27  </option>
<option  value="106104118/mod01lec28.mp4">Lecture-28  </option>
<option  value="106104118/mod01lec29.mp4">Lecture-29  </option>
<option  value="106104118/mod01lec30.mp4">Lecture-30  </option>

	</tr>
	</form>
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104122</strong></td>
	<td><strong>Computer Science and Engineering </strong></td>
	<td><strong>Computer Architecture </strong></td>
	<td><strong>Dr. Mainak Chaudhuri</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106104122/mod01lec01.mp4">Lecture-01-Introduction, Amdahl's law, CPI equation                       </option>
<option  value="106104122/mod01lec02.mp4">Lecture-02-CPI equation, research practices, instruction set architecture </option>
<option  value="106104122/mod01lec03.mp4">Lecture-03-Instruction set architecture                                   </option>
<option  value="106104122/mod01lec04.mp4">Lecture-04-Instruction set architecture                                   </option>
<option  value="106104122/mod01lec05.mp4">Lecture-05-Instruction set architecture, case study with MIPS-I           </option>
<option  value="106104122/mod01lec06.mp4">Lecture-06-Case study with MIPS-I                                         </option>
<option  value="106104122/mod01lec07.mp4">Lecture-07-Case study with MIPS-I                                         </option>
<option  value="106104122/mod01lec08.mp4">Lecture-08-Binary instrumentation for architectural studies: PIN          </option>
<option  value="106104122/mod01lec09.mp4">Lecture-09-Binary instrumentation for architectural studies: PIN          </option>
<option  value="106104122/mod01lec10.mp4">Lecture-10-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec11.mp4">Lecture-11-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec12.mp4">Lecture-12-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec13.mp4">Lecture-13-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec14.mp4">Lecture-14-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec15.mp4">Lecture-15-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec16.mp4">Lecture-16-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec17.mp4">Lecture-17-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec18.mp4">Lecture-18-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec19.mp4">Lecture-19-Basic pipelining, branch prediction                            </option>
<option  value="106104122/mod01lec20.mp4">Lecture-20-Dynamic scheduling, speculative execution                      </option>
<option  value="106104122/mod01lec21.mp4">Lecture-21-Dynamic scheduling, speculative execution                      </option>
<option  value="106104122/mod01lec22.mp4">Lecture-22-Dynamic scheduling, speculative execution                      </option>
<option  value="106104122/mod01lec23.mp4">Lecture-23-Dynamic scheduling, speculative execution                      </option>
<option  value="106104122/mod01lec24.mp4">Lecture-24-Dynamic scheduling, speculative execution                      </option>
<option  value="106104122/mod01lec25.mp4">Lecture-25-Virtual memory and caches                                      </option>
<option  value="106104122/mod01lec26.mp4">Lecture-26-Virtual memory and caches                                      </option>
<option  value="106104122/mod01lec27.mp4">Lecture-27-Virtual memory and caches                                      </option>
<option  value="106104122/mod01lec28.mp4">Lecture-28-Topics in memory system, DRAM and SRAM technology              </option>
<option  value="106104122/mod01lec29.mp4">Lecture-29-Topics in memory system, DRAM and SRAM technology              </option>
<option  value="106104122/mod01lec30.mp4">Lecture-30-Topics in memory system, DRAM and SRAM technology              </option>
<option  value="106104122/mod01lec31.mp4">Lecture-31-Case study: MIPS R10000                                        </option>
<option  value="106104122/mod01lec32.mp4">Lecture-32-Case study: MIPS R10000                                        </option>
<option  value="106104122/mod01lec33.mp4">Lecture-33-Case study: Alpha 21264                                        </option>
<option  value="106104122/mod01lec34.mp4">Lecture-34-Case study: Intel Pentium 4                                    </option>
<option  value="106104122/mod01lec35.mp4">Lecture-35-Input/Output                                                   </option>
<option  value="106104122/mod01lec36.mp4">Lecture-36-Simultaneous multithreading, multi-cores                       </option>


	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104123</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Science and  Compiler DesignComputer Architecture </strong></td>
	<td><strong>Prof. Sanjeev K Aggarwal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106104123/mod01lec01.mp4">Lecture-01                 </option>
<option  value="106104123/mod01lec02.mp4">Lecture-02-Compiler Design </option>
<option  value="106104123/mod01lec03.mp4">Lecture-03-Compiler Design </option>
<option  value="106104123/mod01lec04.mp4">Lecture-04-Compiler Design </option>
<option  value="106104123/mod01lec05.mp4">Lecture-05-Compiler Design </option>
<option  value="106104123/mod01lec06.mp4">Lecture-06-Compiler Design </option>
<option  value="106104123/mod01lec07.mp4">Lecture-07-Compiler Design </option>
<option  value="106104123/mod01lec08.mp4">Lecture-08-Compiler Design </option>
<option  value="106104123/mod01lec09.mp4">Lecture-09-Compiler Design </option>
<option  value="106104123/mod01lec10.mp4">Lecture-10-Compiler Design </option>
<option  value="106104123/mod01lec11.mp4">Lecture-11-Compiler Design </option>
<option  value="106104123/mod01lec12.mp4">Lecture-12-Compiler Design </option>
<option  value="106104123/mod01lec13.mp4">Lecture-13-Compiler Design </option>
<option  value="106104123/mod01lec14.mp4">Lecture-14-Compiler Design </option>
<option  value="106104123/mod01lec15.mp4">Lecture-15-Compiler Design </option>
<option  value="106104123/mod01lec16.mp4">Lecture-16-Compiler Design </option>
<option  value="106104123/mod01lec17.mp4">Lecture-17-Compiler Design </option>
<option  value="106104123/mod01lec18.mp4">Lecture-18-Compiler Design </option>
<option  value="106104123/mod01lec19.mp4">Lecture-19-Compiler Design </option>
<option  value="106104123/mod01lec20.mp4">Lecture-20-Compiler Design </option>
<option  value="106104123/mod01lec21.mp4">Lecture-21-Compiler Design </option>
<option  value="106104123/mod01lec22.mp4">Lecture-22-Compiler Design </option>
<option  value="106104123/mod01lec23.mp4">Lecture-23-Compiler Design </option>
<option  value="106104123/mod01lec24.mp4">Lecture-24-Compiler Design </option>
<option  value="106104123/mod01lec25.mp4">Lecture-25-Compiler Design </option>
<option  value="106104123/mod01lec26.mp4">Lecture-26-Compiler Design </option>
<option  value="106104123/mod01lec27.mp4">Lecture-27-Compiler Design </option>
<option  value="106104123/mod01lec28.mp4">Lecture-28-Compiler Design </option>
<option  value="106104123/mod01lec29.mp4">Lecture-29-Compiler Design </option>
<option  value="106104123/mod01lec30.mp4">Lecture-30-Compiler Design </option>

	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104128</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>NOC:Introduction to programming in C </strong></td>
	<td><strong>Prof.Satyadev Nandakumar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106104128/mod01lec01.mp4">Intro - Process of programming                         </option>
<option  value="106104128/mod01lec02.mp4">Intro - GCD                                            </option>
<option  value="106104128/mod01lec03.mp4">Intro - Programming cycle                              </option>
<option  value="106104128/mod01lec04.mp4">Intro - Tracing a simple program                       </option>
<option  value="106104128/mod01lec05.mp4">Intro - Variables                                      </option>
<option  value="106104128/mod01lec06.mp4">Intro - Operators                                      </option>
<option  value="106104128/mod01lec07.mp4">Loops - While                                          </option>
<option  value="106104128/mod01lec08.mp4">Loops - While example                                  </option>
<option  value="106104128/mod01lec09.mp4">Loops - While GCD example                              </option>
<option  value="106104128/mod01lec10.mp4">Loops - Longest 1                                      </option>
<option  value="106104128/mod01lec11.mp4">Loops - Longest 2                                      </option>
<option  value="106104128/mod01lec12.mp4">Loops - Longest 3                                      </option>
<option  value="106104128/mod01lec13.mp4">Loops - Do-while                                       </option>
<option  value="106104128/mod01lec14.mp4">Loops - Matrix using nested loops                      </option>
<option  value="106104128/mod01lec15.mp4">Loops - For                                            </option>
<option  value="106104128/mod01lec16.mp4">Loops - Matrix using nested for loops                  </option>
<option  value="106104128/mod01lec17.mp4">Loops - Break statement                                </option>
<option  value="106104128/mod01lec18.mp4">Loops - Continue statement                             </option>
<option  value="106104128/mod01lec19.mp4">Loops - Continue statement example                     </option>
<option  value="106104128/mod01lec20.mp4">Data types in C                                        </option>
<option  value="106104128/mod01lec21.mp4">ASCII code                                             </option>
<option  value="106104128/mod01lec22.mp4">Operators Expressions Associativity                    </option>
<option  value="106104128/mod01lec23.mp4">Precedence of operators                                </option>
<option  value="106104128/mod01lec24.mp4">Expression evaluation                                  </option>
<option  value="106104128/mod01lec25.mp4">Functions - Introduction                               </option>
<option  value="106104128/mod01lec26.mp4">Functions - How functions are executed                 </option>
<option  value="106104128/mod01lec27.mp4">Functions - Examples - 1                               </option>
<option  value="106104128/mod01lec28.mp4">Functions - Examples - 2                               </option>
<option  value="106104128/mod01lec29.mp4">Arrays in C                                            </option>
<option  value="106104128/mod01lec30.mp4">Initializing arrays                                    </option>
<option  value="106104128/mod01lec31.mp4">Initializing character arrays                          </option>
<option  value="106104128/mod01lec32.mp4">Pointers in C                                          </option>
<option  value="106104128/mod01lec33.mp4">Pointer arithmetic                                     </option>
<option  value="106104128/mod01lec34.mp4">Function with pointer arguments                        </option>
<option  value="106104128/mod01lec35.mp4">Example - copy a subarray                              </option>
<option  value="106104128/mod01lec36.mp4">Programming using arrays and pointers                  </option>
<option  value="106104128/mod01lec37.mp4">Sizeof operator                                        </option>
<option  value="106104128/mod01lec38.mp4">Returning pointers from functions                      </option>
<option  value="106104128/mod01lec39.mp4">Example - return duplicate of a string                 </option>
<option  value="106104128/mod01lec40.mp4">Recursion - Linear Recursion                           </option>
<option  value="106104128/mod01lec41.mp4">Recursion - Linear </option>
<option  value="106104128/mod01lec42.mp4">Recursion - Two-way Recursion                          </option>
<option  value="106104128/mod01lec43.mp4">Multidimensional </option>
<option  value="106104128/mod01lec44.mp4">Multidimensional Arrays and Pointers                   </option>
<option  value="106104128/mod01lec45.mp4">Multidimensional Arrays and </option>
<option  value="106104128/mod01lec46.mp4">Multidimensional Arrays and Pointers - continued </option>
<option  value="106104128/mod01lec47.mp4">Multidimensional Arrays.                               </option>
<option  value="106104128/mod01lec48.mp4">Multidimensional Arrays and             </option>
<option  value="106104128/mod01lec49.mp4">Multidimensional Arrays and Pointers - 2.              </option>
<option  value="106104128/mod01lec50.mp4">Multidimensional Arrays and Pointers         </option>
<option  value="106104128/mod01lec51.mp4">File Handling                                          </option>
<option  value="106104128/mod01lec52.mp4">Some other file-handling functions                     </option>
<option  value="106104128/mod01lec53.mp4">Structures in C - 1                                    </option>
<option  value="106104128/mod01lec54.mp4">Structures in C -                                </option>
<option  value="106104128/mod01lec55.mp4">Singly Linked Lists                                    </option>
<option  value="106104128/mod01lec56.mp4">Doubly Linked Lists - introduction                     </option>
<option  value="106104128/mod01lec57.mp4">Organizing code into multiple          </option>
<option  value="106104128/mod01lec58.mp4">Organizing code in multiple files - 2                  </option>
<option  value="106104128/mod01lec59.mp4">Pre and post increment </option>


	</tr>
	</form>
         <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106104072</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Compiler Design</strong></td>
	<td><strong>Prof. Sanjeev K Aggarwal</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106104072/compiler-desing/ui/About-Faculty.html">contents</option>
            
          </select></td>
		</tr>
	</form>            
           <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106104073</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Organisation and Architecture</strong></td>
	<td><strong>Prof. Bhaskaran Raman	</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106104073/CompArchitecture/page1.htm">contents</option>
            
          </select></td>
		</tr>
	</form>  
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106105078</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Artificial Intelligence</strong></td>
	<td><strong>Prof. S. Sarkar,Prof. P. Mitra</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106105078/Artificial intelligence/New_index1.html">contents</option>
            
          </select></td>
		</tr>
	</form>                   
        
        
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106103069</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Data Structures and Program Methodology</strong></td>
	<td><strong>Dr. S.V. Rao,Dr. Pradip K Das</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106103069/data_str_algo/frameset.htm">contents</option>
            
          </select></td>
		</tr>
	</form>  
    
         <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106105080</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Networks</strong></td>
	<td><strong>Prof. Ajit Pal</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106105080/Computer networks/New_index1.html">contents</option>
            
          </select></td>
		</tr>
	</form>    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105033</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td> <strong> High Performance Computer Architecture</strong></td>
	<td><strong>Prof. Ajit Pal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106105033/mod01lec01.mp4">Introduction and Course Outline                       </option>
<option  value="106105033/mod01lec02.mp4">Performance                                           </option>
<option  value="106105033/mod01lec03.mp4">Instruction Set Architecture                          </option>
<option  value="106105033/mod01lec04.mp4">MIPS ISA Processor                                    </option>
<option  value="106105033/mod01lec05.mp4">MIPS ISA Processor (Contd.)                           </option>
<option  value="106105033/mod01lec06.mp4">Pipelining Introduction                               </option>
<option  value="106105033/mod01lec07.mp4">Instruction Pipelining                                </option>
<option  value="106105033/mod01lec08.mp4">Pipeline Hazards                                      </option>
<option  value="106105033/mod01lec09.mp4">Data Hazards                                          </option>
<option  value="106105033/mod01lec10.mp4">Software Pipelining                                   </option>
<option  value="106105033/mod01lec11.mp4">In Quest of Higher ILP                                </option>
<option  value="106105033/mod01lec12.mp4">In Quest of Higher ILP (Contd.)                       </option>
<option  value="106105033/mod01lec13.mp4">Dynamic Instruction Scheduling                        </option>
<option  value="106105033/mod01lec14.mp4">Dynamic Instruction Scheduling (Contd.)               </option>
<option  value="106105033/mod01lec15.mp4">Control Hazards                                       </option>
<option  value="106105033/mod01lec16.mp4">Branch Prediction                                     </option>
<option  value="106105033/mod01lec17.mp4">Branch Prediction (Contd.)                            </option>
<option  value="106105033/mod01lec18.mp4">Dynamic Instruction Scheduling with Branch Prediction </option>
<option  value="106105033/mod01lec19.mp4">Hardware Based Speculation                            </option>
<option  value="106105033/mod01lec20.mp4">Tutorial - I                                          </option>
<option  value="106105033/mod01lec21.mp4">Hierarchical Memory Organization                      </option>
<option  value="106105033/mod01lec22.mp4">Hierarchical Memory Organization (Contd.)             </option>
<option  value="106105033/mod01lec23.mp4">Hierarchical Memory Organization  (Contd.)            </option>
<option  value="106105033/mod01lec24.mp4">Hierarchical Memory  Organization (Contd.)            </option>
<option  value="106105033/mod01lec25.mp4">Cache Optimization Techniques (Contd.)                </option>
<option  value="106105033/mod01lec26.mp4">Cache Optimization Techniques  (Contd.)               </option>
<option  value="106105033/mod01lec27.mp4">Main Memory Organization                              </option>
<option  value="106105033/mod01lec28.mp4">Main Memory Optimizations                             </option>
<option  value="106105033/mod01lec29.mp4">Virtual Memory                                        </option>
<option  value="106105033/mod01lec30.mp4">Virtual Memory (Contd.)                               </option>
<option  value="106105033/mod01lec31.mp4">Virtual Machines                                      </option>
<option  value="106105033/mod01lec32.mp4">Storage Technology                                    </option>
<option  value="106105033/mod01lec33.mp4">Storage Technology (Contd.)                           </option>
<option  value="106105033/mod01lec34.mp4">Case Studies                                          </option>
<option  value="106105033/mod01lec35.mp4">Case Studies (Contd.)                                 </option>
<option  value="106105033/mod01lec36.mp4">Case Studies  (Contd.)                                </option>
<option  value="106105033/mod01lec37.mp4">Multithreading and Multiprocessing                    </option>
<option  value="106105033/mod01lec38.mp4">Simultanoues Multithreading                           </option>
<option  value="106105033/mod01lec39.mp4">Symmetric Multiprocessors                             </option>
<option  value="106105033/mod01lec40.mp4">Distributed Memory Multiprocessors                    </option>
<option  value="106105033/mod01lec41.mp4">Cluster, Grid and Cloud Computing                     </option>

	</tr>
	</form>
         <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106105086</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Real Time Systems</strong></td>
	<td><strong>Prof. Rajib Mall</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106105086/Real time system/New_index1.html">contents</option>
            
          </select></td>
		</tr>
	</form>               
      
                     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106105087</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Software Engineering</strong></td>
	<td><strong>Prof. Rajib Mall</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106105087/Soft Engg/New_index1.html">contents</option>
            
          </select></td>
		</tr>
	</form>       
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106046</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong> Pattern Recognition</strong></td>
	<td><strong>Prof. Sukhendu Das,  Prof. C.A. Murthy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106106046/mod01lec01.mp4">Principles of Pattern Recognition I (Introduction and Uses)                         </option>
<option  value="106106046/mod01lec02.mp4">Principles of Pattern Recognition II (Mathematics)                                  </option>
<option  value="106106046/mod01lec03.mp4">Principles of Pattern Recognition III  (Classification and Bayes Decision Rule)     </option>
<option  value="106106046/mod01lec04.mp4">Clustering vs. Classification                                                       </option>
<option  value="106106046/mod01lec05.mp4">Relevant Basics of Linear Algebra, Vector Spaces                                    </option>
<option  value="106106046/mod01lec06.mp4">Eigen Value and Eigen Vectors                                                       </option>
<option  value="106106046/mod01lec07.mp4">Vector Spaces                                                                       </option>
<option  value="106106046/mod01lec08.mp4">Rank of Matrix and SVD                                                              </option>
<option  value="106106046/mod02lec09.mp4">Types of Errors                                                                     </option>
<option  value="106106046/mod02lec10.mp4">Examples of Bayes Decision Rule                                                     </option>
<option  value="106106046/mod02lec11.mp4">Normal Distribution and Parameter Estimation                                        </option>
<option  value="106106046/mod02lec12.mp4">Training Set, Test Set                                                              </option>
<option  value="106106046/mod02lec13.mp4">Standardization, Normalization, Clustering and Metric Space                         </option>
<option  value="106106046/mod02lec14.mp4">Normal Distribution and Decision Boundaries I                                       </option>
<option  value="106106046/mod02lec15.mp4">Normal Distribution and Decision Boundaries II                                      </option>
<option  value="106106046/mod02lec16.mp4">Bayes Theorem                                                                       </option>
<option  value="106106046/mod02lec17.mp4">Linear Discriminant Function and Perceptron                                         </option>
<option  value="106106046/mod02lec18.mp4">Perceptron Learning and Decision Boundaries                                         </option>
<option  value="106106046/mod02lec19.mp4">Linear and Non-Linear Decision Boundaries                                           </option>
<option  value="106106046/mod02lec20.mp4">K-NN Classifier                                                                     </option>
<option  value="106106046/mod02lec21.mp4">Principal Component Analysis (PCA)                                                  </option>
<option  value="106106046/mod02lec22.mp4">Fisher�s LDA                                                                        </option>
<option  value="106106046/mod02lec23.mp4">Gaussian Mixture Model (GMM)                                                        </option>
<option  value="106106046/mod02lec24.mp4">Assignments                                                                         </option>
<option  value="106106046/mod03lec25.mp4">Basics of Clustering, Similarity/Dissimilarity Measures, Clustering Criteria.       </option>
<option  value="106106046/mod03lec26.mp4">K-Means Algorithm and Hierarchical Clustering                                       </option>
<option  value="106106046/mod03lec27.mp4">K-Medoids and DBSCAN                                                                </option>
<option  value="106106046/mod04lec28.mp4">Feature Selection : Problem statement and Uses                                      </option>
<option  value="106106046/mod04lec29.mp4">Feature Selection : Branch and Bound Algorithm                                      </option>
<option  value="106106046/mod04lec30.mp4">Feature Selection : Sequential Forward and Backward Selection                       </option>
<option  value="106106046/mod04lec31.mp4">Cauchy Schwartz Inequality                                                          </option>
<option  value="106106046/mod04lec32.mp4">Feature Selection Criteria Function: Probabilistic Separability Based               </option>
<option  value="106106046/mod04lec33.mp4">Feature Selection Criteria Function: Interclass Distance Based                      </option>
<option  value="106106046/mod05lec34.mp4">Principal Components                                                                </option>
<option  value="106106046/mod06lec35.mp4">Comparison Between Performance of Classifiers                                       </option>
<option  value="106106046/mod06lec36.mp4">Basics of Statistics, Covariance, and their Properties                              </option>
<option  value="106106046/mod06lec37.mp4">Data Condensation, Feature Clustering, Data Visualization                           </option>
<option  value="106106046/mod06lec38.mp4">Probability Density Estimation                                                      </option>
<option  value="106106046/mod06lec39.mp4">Visualization and Aggregation                                                       </option>
<option  value="106106046/mod06lec40.mp4">Support Vector Machine (SVM)                                                        </option>
<option  value="106106046/mod06lec41.mp4">FCM and Soft-Computing Techniques                                                   </option>
<option  value="106106046/mod06lec42.mp4">Examples of Uses or Application of Pattern Recognition;  And  When to do clustering </option>
<option  value="106106046/mod06lec43.mp4">Examples of Real-Life Dataset                                                       </option>

	</tr>
	</form>
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106126</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong> Artificial Intelligence</strong></td>
	<td><strong>Prof. Deepak Khemani</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="106106126/mod01lec01.mp4">1. Artificial Intelligence: Introduction             </option>
<option  value="106106126/mod01lec02.mp4">2. Introduction to AI                                </option>
<option  value="106106126/mod01lec03.mp4">3. AI Introduction: Philosophy                       </option>
<option  value="106106126/mod01lec04.mp4">4. AI Introduction                                   </option>
<option  value="106106126/mod01lec05.mp4">5. Introduction: Philosophy                          </option>
<option  value="106106126/mod01lec06.mp4">6. State Space Search - Introduction                 </option>
<option  value="106106126/mod01lec07.mp4">7. Search - DFS and BFS                              </option>
<option  value="106106126/mod01lec08.mp4">8. Search DFID                                       </option>
<option  value="106106126/mod01lec09.mp4">9. Heuristic Search                                  </option>
<option  value="106106126/mod01lec10.mp4">10. Hill climbing                                    </option>
<option  value="106106126/mod01lec11.mp4">11. Solution Space Search,Beam Search                </option>
<option  value="106106126/mod01lec12.mp4">12. TSP Greedy Methods                               </option>
<option  value="106106126/mod01lec13.mp4">13. Tabu Search                                      </option>
<option  value="106106126/mod01lec14.mp4">14. Optimization - I (Simulated Annealing)           </option>
<option  value="106106126/mod01lec15.mp4">15. Optimization II (Genetic Algorithms)             </option>
<option  value="106106126/mod01lec16.mp4">16. Population based methods for Optimization        </option>
<option  value="106106126/mod01lec17.mp4">17. Population Based Methods II                      </option>
<option  value="106106126/mod01lec18.mp4">18. Branch and Bound, Dijkstra's Algorithm           </option>
<option  value="106106126/mod01lec19.mp4">19. A* Algorithm                                     </option>
<option  value="106106126/mod01lec20.mp4">20. Admissibility of A*                              </option>
<option  value="106106126/mod01lec21.mp4">21. A* Monotone Property, Iterative Deeping A*       </option>
<option  value="106106126/mod01lec22.mp4">22. Recursive Best First Search, Sequence Allignment </option>
<option  value="106106126/mod01lec23.mp4">23. Pruning the Open and Closed lists                </option>
<option  value="106106126/mod01lec24.mp4">24. Problem Decomposition with Goal Trees            </option>
<option  value="106106126/mod01lec25.mp4">25. AO* Algorithm                                    </option>
<option  value="106106126/mod01lec26.mp4">26. Game Playing                                     </option>
<option  value="106106126/mod01lec27.mp4">27. Game Playing- Minimax Search                     </option>
<option  value="106106126/mod01lec28.mp4">28. Game Playing - AlphaBeta                         </option>
<option  value="106106126/mod01lec29.mp4">29. Game Playing-SSS *                               </option>
<option  value="106106126/mod01lec30.mp4">30. Rule Based Systems                               </option>
<option  value="106106126/mod01lec31.mp4">31. Inference Engines                                </option>
<option  value="106106126/mod01lec32.mp4">32. Rete Algorithm                                   </option>
<option  value="106106126/mod01lec33.mp4">33. Planning                                         </option>
<option  value="106106126/mod01lec34.mp4">34. Planning FSSP, BSSP                              </option>
<option  value="106106126/mod01lec35.mp4">35. Goal Stack Planning. Sussman's Anomaly           </option>
<option  value="106106126/mod01lec36.mp4">36. Non-linear planning                              </option>
<option  value="106106126/mod01lec37.mp4">37. Plan Space Planning                              </option>
<option  value="106106126/mod01lec38.mp4">38. GraphPlan                                        </option>
<option  value="106106126/mod01lec39.mp4">39. Constraint Satisfaction Problems                 </option>
<option  value="106106126/mod01lec40.mp4">40. CSP continued                                    </option>
<option  value="106106126/mod01lec41.mp4">41. Knowledge-based systems                          </option>
<option  value="106106126/mod01lec42.mp4">42. Knowledge-based Systems, PL                      </option>e
<option  value="106106126/mod01lec43.mp4">43. Propositional Logic                              </option>
<option  value="106106126/mod01lec44.mp4">44. Resolution Refutation for PL                     </option>
<option  value="106106126/mod01lec45.mp4">45. First-order Logic (FOL)                          </option>
<option  value="106106126/mod01lec46.mp4">46. Reasoning in FOL                                 </option>
<option  value="106106126/mod01lec47.mp4">47. Backward chaining                                </option>
<option  value="106106126/mod01lec48.mp4">48. Resolution for FOL                               </option>

	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106127</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Software Engineering</strong></td>
	<td><strong>Prof. Rushikesh K Joshi,Prof. Umesh Bellur,Prof. N.L. Sarda</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option  value="106106127/mod01lec01.mp4">Introduction to Computers and Programming                                           </option>
<option  value="106106127/mod01lec02.mp4">Writing your first program                                                          </option>
<option  value="106106127/mod01lec03.mp4">Variables, Operators and Expressions                                                </option>
<option  value="106106127/mod01lec04.mp4">Variable declarations, more operators and precedence                                </option>
<option  value="106106127/mod01lec05.mp4">Input and Output Statements                                                         </option>
<option  value="106106127/mod01lec06.mp4">Conditionals                                                                        </option>
<option  value="106106127/mod01lec07.mp4">Loops                                                                               </option>
<option  value="106106127/mod01lec08.mp4">Video Solution to Digital Root Programming Assignment                               </option>
<option  value="106106127/mod01lec09.mp4">Introduction to arrays                                                              </option>
<option  value="106106127/mod01lec10.mp4">Working with 1D arrays                                                              </option>
<option  value="106106127/mod01lec11.mp4">Find prime numbers                                                                  </option>
<option  value="106106127/mod01lec12.mp4">Debugging demo                                                                      </option>
<option  value="106106127/mod01lec13.mp4">Multi-dimensional arrays                                                            </option>
<option  value="106106127/mod01lec14.mp4">Pointers                                                                            </option>
<option  value="106106127/mod01lec15.mp4">More on pointers                                                                    </option>
<option  value="106106127/mod01lec16.mp4">Arrays and pointer arithmetic                                                       </option>
<option  value="106106127/mod01lec17.mp4">Introduction to Strings                                                             </option>
<option  value="106106127/mod01lec18.mp4">More on Strings                                                                     </option>
<option  value="106106127/mod01lec19.mp4">Video Solution to Print Elements of a Matrix in Spiral Order Programming Assignment </option>
<option  value="106106127/mod01lec20.mp4">Introduction to functions                                                           </option>
<option  value="106106127/mod01lec21.mp4">More details on functions                                                           </option>
<option  value="106106127/mod01lec22.mp4">Arguments, variables and parameters                                                 </option>
<option  value="106106127/mod01lec23.mp4">Pass parameters by reference                                                        </option>
<option  value="106106127/mod01lec24.mp4">Recursive functions                                                                 </option>
<option  value="106106127/mod01lec25.mp4">Running time of a program                                                           </option>
<option  value="106106127/mod01lec26.mp4">Computing time complexity                                                           </option>
<option  value="106106127/mod01lec27.mp4">Video Solution to Palindrome Checker Programming Assignment                         </option>
<option  value="106106127/mod01lec28.mp4">Algorithms and Powering                                                             </option>
<option  value="106106127/mod01lec29.mp4">Polynomial evaluation and multiplication                                            </option>
<option  value="106106127/mod01lec30.mp4">Linear and Binary Search Analysis                                                   </option>
<option  value="106106127/mod01lec31.mp4">Analysis of minimum and maximum in an array                                         </option>
<option  value="106106127/mod01lec32.mp4">Sorting I: Insertion, Merge                                                         </option>
<option  value="106106127/mod01lec33.mp4">Sorting II: Counting, Radix                                                         </option>
<option  value="106106127/mod01lec34.mp4">Finding i-th smallest number                                                        </option>
<option  value="106106127/mod01lec35.mp4">Video Solution to Sorting words Programming Assignment                              </option>
<option  value="106106127/mod01lec36.mp4">Structures                                                                          </option>
<option  value="106106127/mod01lec37.mp4">More on structures                                                                  </option>
<option  value="106106127/mod01lec38.mp4">Using structures and pointers to structures                                         </option>
<option  value="106106127/mod01lec39.mp4">Dynamic memory allocation                                                           </option>
<option  value="106106127/mod01lec40.mp4">Linked Lists                                                                        </option>
<option  value="106106127/mod01lec41.mp4">Brief introduction to C++: Classes and objects                                      </option>
<option  value="106106127/mod01lec42.mp4">Data Structures: Abstract Data Type                                                 </option>
<option  value="106106127/mod01lec43.mp4">Lists                                                                               </option>
<option  value="106106127/mod01lec44.mp4">Supplementary Lesson                                                                </option>
<option  value="106106127/mod01lec45.mp4">Video Solution to Implementing a Hash Table ADT Programming Assignment              </option>
<option  value="106106127/mod01lec46.mp4">Stacks: Last In First Out                                                           </option>
<option  value="106106127/mod01lec47.mp4">Queues: First In First Out                                                          </option>
<option  value="106106127/mod01lec48.mp4">Trees                                                                               </option>
<option  value="106106127/mod01lec49.mp4">Tree traversal                                                                      </option>
<option  value="106106127/mod01lec50.mp4">Binary Search Trees                                                                 </option>
<option  value="106106127/mod01lec51.mp4">Heaps                                                                               </option>
<option  value="106106127/mod01lec52.mp4">Graphs and Representation                                                           </option>
<option  value="106106127/mod01lec53.mp4">Supplementary Lesson                                                                </option>
<option  value="106106127/mod01lec54.mp4">Video Solution to the Queue in a Hospital Programming Assignment                    </option>
<option  value="106106127/mod01lec55.mp4">Greedy Algorithms                                                                   </option>
<option  value="106106127/mod01lec56.mp4">Dynamic Programming                                                                 </option>
<option  value="106106127/mod01lec57.mp4">Matrix Chain Multiplication                                                         </option>
<option  value="106106127/mod01lec58.mp4">Dijkstra's Algorithm                                                                </option>
<option  value="106106127/mod01lec59.mp4">Boyer-Moore String Matching Algorithm                                               </option>
<option  value="106106127/mod01lec60.mp4">File I/O                                                                            </option>
<option  value="106106127/mod01lec61.mp4">Modular Programming                                                                 </option>
 </select></td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106129</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>NOC:Introduction to Information Security I </strong></td>
	<td><strong> Prof. V. Kamakoti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option  value="106106129/mod01lec01.mp4">Part0 - Introduction to the Course                                      </option>
<option  value="106106129/mod01lec02.mp4">Part1 - Definition of Information Security                              </option>
<option  value="106106129/mod01lec03.mp4">Part2 - Information Security Terminologies                              </option>
<option  value="106106129/mod01lec04.mp4">Part3 - Goals of Information Security                                   </option>
<option  value="106106129/mod01lec05.mp4">Part4 - Implementation Issues of the Goals of Information Security - I  </option>
<option  value="106106129/mod01lec06.mp4">part5 - Implementation Issues of the Goals of Information Security - II </option>
<option  value="106106129/mod01lec07.mp4">Part6 - Control Mechanisms for Information Security - I                 </option>
<option  value="106106129/mod01lec08.mp4">Part 7 - Access Control - Administrative and Technical                  </option>
<option  value="106106129/mod01lec09.mp4">Part 8 - Passwords - Are they secure? - I                               </option>
<option  value="106106129/mod01lec10.mp4">Part 9 - Access Control - Administrative and Technical                  </option>
<option  value="106106129/mod01lec11.mp4">Part 10 - Passwords - Are they secure? - III                            </option>
<option  value="106106129/mod01lec12.mp4">Part 11 - Multifactor Authentication - Challenges                       </option>
<option  value="106106129/mod01lec13.mp4">Part 12 - Application Level Control and Information Security Planning   </option>
<option  value="106106129/mod01lec14.mp4">Part 13 - Information Security - Policy, Standard and Practice          </option>
<option  value="106106129/mod01lec15.mp4">Part 14 - Policies governing Issues, Roles and Responsibilities         </option>
<option  value="106106129/mod01lec16.mp4">Part 15 - Managing changes in Information Security Policies             </option>
<option  value="106106129/mod01lec17.mp4">Part 16 - Spheres of Information Security                               </option>
<option  value="106106129/mod02lec18.mp4">Part 01 - Protecting your Personal Computer - I                         </option>
<option  value="106106129/mod02lec19.mp4">part 02 - Protecting your Personal Computer - II                        </option>
<option  value="106106129/mod02lec20.mp4">Part 03 - Protecting your Personal Computer - III                       </option>
<option  value="106106129/mod02lec21.mp4">Part 04 - Cloud Computing (Basic Definitions) - I                       </option>
<option  value="106106129/mod02lec22.mp4">Part 05 - Cloud Computing (Deployment) - II                             </option>
<option  value="106106129/mod02lec23.mp4">Part 06 - Cloud Computing (Security Issues) - III                       </option>
<option  value="106106129/mod02lec24.mp4">Part 07 - Cloud Computing (Trust and Risk) - IV                         </option>
<option  value="106106129/mod02lec25.mp4">Part 08 - Cloud Computing (Security and Privacy Issues) - V             </option>
<option  value="106106129/mod02lec26.mp4">Part 09 - Cloud Computing (Security and Privacy Issues) - VI            </option>
<option  value="106106129/mod02lec27.mp4">Part 10 - Cloud Computing (Application and Data level security) - VII   </option>
<option  value="106106129/mod02lec28.mp4">Part 11 - Cloud Computing (Summary) - VIII                              </option>
<option  value="106106129/mod02lec29.mp4">Part 12 - Standard I                                                    </option>
<option  value="106106129/mod02lec30.mp4">Part 13 - Standard II                                                   </option>
<option  value="106106129/mod02lec31.mp4">Part 14 - Standard III                                                  </option>
<option  value="106106129/mod03lec32.mp4">Module 3 - Part 01                                                      </option>
<option  value="106106129/mod03lec33.mp4">Module 3 - Part 02                                                      </option>
<option  value="106106129/mod03lec34.mp4">Module 3 - Part 03                                                      </option>
<option  value="106106129/mod03lec35.mp4">Module 3 - Part 04                                                      </option>
<option  value="106106129/mod03lec36.mp4">Module 3 - Part 05                                                      </option>
<option  value="106106129/mod03lec37.mp4">Module 3 - Part 06                                                      </option>
<option  value="106106129/mod03lec38.mp4">Module 3 - Part 07                                                      </option>
<option  value="106106129/mod03lec39.mp4">Module 3 - Part 08                                                      </option>
<option  value="106106129/mod03lec40.mp4">Module 3 - Part 09                                                      </option>
<option  value="106106129/mod04lec41.mp4">Module 4 - Part 01                                                      </option>
<option  value="106106129/mod04lec42.mp4">module 4 - Part 02                                                      </option>
<option  value="106106129/mod04lec43.mp4">Module 4 - Part 03                                                      </option>
<option  value="106106129/mod04lec44.mp4">Module 4 - Part 04                                                      </option>
<option  value="106106129/mod04lec45.mp4">Module 4 - Part 05                                                      </option>
<option  value="106106129/mod04lec46.mp4">Module 4 - Part 06                                                      </option>
<option  value="106106129/mod04lec47.mp4">Module 4 - Part 07                                                      </option>
<option  value="106106129/mod04lec48.mp4">Module 4 - Part 08                                                      </option>
<option  value="106106129/mod04lec49.mp4">Module 4 - Part 09                                                      </option>
<option  value="106106129/mod04lec50.mp4">Module 4 - Part 10                                                      </option>
<option  value="106106129/mod05lec51.mp4">Module 5 - Part 01                                                      </option>
<option  value="106106129/mod05lec52.mp4">Module 5 - Part 02                                                      </option>
<option  value="106106129/mod05lec53.mp4">Module 5 - Part 03                                                      </option>
<option  value="106106129/mod05lec54.mp4">Module 5 - Part 04                                                      </option>
<option  value="106106129/mod05lec55.mp4">Module 5 - Part 05                                                      </option>
<option  value="106106129/mod05lec56.mp4">Module 5 - Part 06                                                      </option>
<option  value="106106129/mod05lec57.mp4">Module 5 - Part 07                                                      </option>
<option  value="106106129/mod06lec58.mp4">Module 6 - Part 01                                                      </option>
<option  value="106106129/mod06lec59.mp4">Module 6 - Part 02                                                      </option>
<option  value="106106129/mod06lec60.mp4">Module 6 - Part 03                                                      </option>
<option  value="106106129/mod06lec61.mp4">Module 6 - Part 04                                                      </option>
<option  value="106106129/mod06lec62.mp4">Module 6 - Part 05                                                      </option>
<option  value="106106129/mod06lec63.mp4">Module 6 - Part 06                                                      </option>
<option  value="106106129/mod06lec64.mp4">Module 6 - Part 07                                                      </option>
<option  value="106106129/mod06lec65.mp4">Module 6 - Part 08                                                      </option>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106130</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>NOC:Programming and Data structures (PDS) </strong></td>
	<td><strong> Dr. N S. Narayanaswamy</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option  value="106106130/mod01lec01.mp4">Video Lecture - A Simple C Program for Sorting                          </option>
<option  value="106106130/mod01lec02.mp4">Video Lecture- Review of Structures, Pointers, and Functions            </option>
<option  value="106106130/mod01lec03.mp4">Video Lecture - Recursion                                               </option>
<option  value="106106130/mod02lec04.mp4">Video Lecture-Abstract Data Types-Data + Methods.                       </option>
<option  value="106106130/mod02lec05.mp4">Video Lecture-List Data Type                                            </option>
<option  value="106106130/mod02lec06.mp4">Video Lecture - Access and update methods                               </option>
<option  value="106106130/mod03lec07.mp4">Video Lecture:Doubly Linked List Data Type                              </option>
<option  value="106106130/mod03lec08.mp4">Video Lecture-Doubly Linked Lists and Arrays                            </option>
<option  value="106106130/mod04lec09.mp4">Video Lecture - ADT Stacks                                              </option>
<option  value="106106130/mod04lec10.mp4">Video Lecture:Checking of Balanced Parenthesis                          </option>
<option  value="106106130/mod04lec11.mp4">Video Lecture:Infix and Postfix expressions and Expression </option>
<option  value="106106130/mod05lec12.mp4">Queue ADT Definition and Implementation                                 </option>
<option  value="106106130/mod05lec13.mp4">Merging using Queue ADT and Queue </option>
<option  value="106106130/mod06lec14.mp4">Tree ADT and Traversals                                                 </option>
<option  value="106106130/mod06lec15.mp4">Binary Tree ADT and traversals                                          </option>
<option  value="106106130/mod06lec16.mp4">Tree Applications                                                       </option>
<option  value="106106130/mod07lec17.mp4">Binary Search Trees                                                     </option>
<option  value="106106130/mod07lec18.mp4">Heaps                                                                   </option>
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106131</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>NOC:Design and Analysis of Algorithms </strong></td>
	<td><strong> Prof. Madhavan Mukund</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option  value="106106131/mod01lec01.mp4">Course Outline                                           </option>
<option  value="106106131/mod01lec02.mp4">Example: Air Travel                                      </option>
<option  value="106106131/mod01lec03.mp4">Example: Xerox shop                                      </option>
<option  value="106106131/mod01lec04.mp4">Example: Document similarity                             </option>
<option  value="106106131/mod01lec05.mp4">Introduction and motivation                              </option>
<option  value="106106131/mod01lec06.mp4">Input size, worst case, average case                     </option>
<option  value="106106131/mod01lec07.mp4">Quantifying efficiency: O( ), Omega( ), Theta( )         </option>
<option  value="106106131/mod01lec08.mp4">Examples: Analysis of iterative and recursive algorithms </option>
<option  value="106106131/mod02lec09.mp4">Arrays and lists                                         </option>
<option  value="106106131/mod02lec10.mp4">Searching in an array                                    </option>
<option  value="106106131/mod02lec11.mp4">Selection Sort                                           </option>
<option  value="106106131/mod02lec12.mp4">Insertion sort                                           </option>
<option  value="106106131/mod02lec13.mp4">Merge sort                                               </option>
<option  value="106106131/mod02lec14.mp4">Merge sort - analysis                                    </option>
<option  value="106106131/mod02lec15.mp4">Quicksort                                                </option>
<option  value="106106131/mod02lec16.mp4">Quicksort - analysis                                     </option>
<option  value="106106131/mod02lec17.mp4">Sorting - Concluding remarks                             </option>
<option  value="106106131/mod03lec18.mp4">Introduction to graphs                                   </option>
<option  value="106106131/mod03lec19.mp4">Representing graphs                                      </option>
<option  value="106106131/mod03lec20.mp4">Breadth first search (BFS)                               </option>
<option  value="106106131/mod03lec21.mp4">Depth first search (DFS)                                 </option>
<option  value="106106131/mod03lec22.mp4">Applications of BFS and DFS                              </option>
<option  value="106106131/mod03lec23.mp4">Directed acylic graphs: topological sort                 </option>
<option  value="106106131/mod03lec24.mp4">Directed acylic graphs: longest paths                    </option>
<option  value="106106131/mod04lec25.mp4">Single source shortest paths: Dijkstras algorithm        </option>
<option  value="106106131/mod04lec26.mp4">Dijkstras algorithm: analysis                            </option>
<option  value="106106131/mod04lec27.mp4">Negative edge weights: Bellman-Ford algorithm            </option>
<option  value="106106131/mod04lec28.mp4">All pairs shortest paths                                 </option>
<option  value="106106131/mod04lec29.mp4">Minimum Cost Spanning Trees                              </option>
<option  value="106106131/mod04lec30.mp4">Prims Algorithm                                          </option>
<option  value="106106131/mod04lec31.mp4">Kruskals algorithm                                       </option>
<option  value="106106131/mod05lec32.mp4">Union-Find using arrays                                  </option>
<option  value="106106131/mod05lec33.mp4">Union-Find using pointers                                </option>
<option  value="106106131/mod05lec34.mp4">Priority queues                                          </option>
<option  value="106106131/mod05lec36.mp4">Heaps                                                    </option>
<option  value="106106131/mod05lec36.mp4">Heaps: Updating values, sorting                          </option>
<option  value="106106131/mod05lec37.mp4">Counting inversions                                      </option>
<option  value="106106131/mod05lec38.mp4">Closest pair of points                                   </option>
<option  value="106106131/mod07lec39.mp4">Binary Search Trees                                      </option>
<option  value="106106131/mod07lec40.mp4">Balanced search trees                                    </option>
<option  value="106106131/mod08lec41.mp4">Interval scheduling                                      </option>
<option  value="106106131/mod08lec42.mp4">Scheduling with deadlines: minimizing lateness           </option>
<option  value="106106131/mod08lec43.mp4">Huffman codes                                            </option>
<option  value="106106131/mod09lec44.mp4">Introduction to dynamic programming                      </option>
<option  value="106106131/mod09lec45.mp4">Memoization                                              </option>
<option  value="106106131/mod09lec46.mp4">Grid </option>
<option  value="106106131/mod09lec47.mp4">Common subwords and </option>
<option  value="106106131/mod09lec48.mp4">subsequences</option>
<option  value="106106131/mod09lec49.mp4">distance Matrix</option>
<option  value="106106131/mod10lec50.mp4">Linear Programming                                       </option>
<option  value="106106131/mod10lec51.mp4">LP modelling: Production Planning                        </option>
<option  value="106106131/mod10lec52.mp4">LP modelling: Bandwidth allocation                       </option>
<option  value="106106131/mod10lec53.mp4">Network Flows                                            </option>
<option  value="106106131/mod10lec54.mp4">Reductions                                               </option>
<option  value="106106131/mod10lec55.mp4">Checking Algorithms                                      </option>
<option  value="106106131/mod10lec56.mp4">P and NP  </option>
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106133</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong> NOC:Programming, Data Structures and Algorithms(Aricent) </strong></td>
	<td><strong> Prof. Shankar Balachandran, Prof. Hema A Murthy, Dr. N S. Narayanaswamy </strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option  value="106106133/mod01lec01.mp4 ">Introduction to Computers and Programming                  </option>
<option  value="106106133/mod01lec02.mp4 ">Writing your first program                                 </option>
<option  value="106106133/mod01lec03.mp4 ">Variables, Operators and Expressions                       </option>
<option  value="106106133/mod01lec04.mp4 ">Variable declarations, more operators and precedence       </option>
<option  value="106106133/mod01lec05.mp4 ">Input and Output Statements                                </option>
<option  value="106106133/mod01lec06.mp4 ">Conditionals                                               </option>
<option  value="106106133/mod01lec07.mp4 ">Loops                                                      </option>
<option  value="106106133/mod01lec09.mp4 ">Introduction to arrays                                     </option>
<option  value="106106133/mod01lec10.mp4 ">Working with 1D arrays                                     </option>
<option  value="106106133/mod01lec11.mp4 ">Find prime numbers                                         </option>
<option  value="106106133/mod01lec12.mp4 ">Debugging demo                                             </option>
<option  value="106106133/mod01lec13.mp4 ">Multi-dimensional arrays                                   </option>
<option  value="106106133/mod01lec14.mp4 ">Pointers                                                   </option>
<option  value="106106133/mod01lec15.mp4 ">More on pointers                                           </option>
<option  value="106106133/mod01lec16.mp4 ">Arrays and pointer arithmetic                              </option>
<option  value="106106133/mod01lec17.mp4 ">Introduction to Strings                                    </option>
<option  value="106106133/mod01lec18.mp4 ">More on Strings                                            </option>
<option  value="106106133/mod03lec18.mp4 ">Introduction to functions                                  </option>
<option  value="106106133/mod03lec19.mp4 ">More details on functions                                  </option>
<option  value="106106133/mod03lec20.mp4 ">Arguments, variables and parameters                        </option>
<option  value="106106133/mod03lec21.mp4 ">Pass parameters by reference                               </option>
<option  value="106106133/mod03lec22.mp4 ">Recursive Functions                                        </option>
<option  value="106106133/mod03lec23.mp4 ">C control structures, functional specification of programs </option>
<option  value="106106133/mod03lec24.mp4 ">Complexity Analysis using Sum and Product Rule             </option>
<option  value="106106133/mod03lec25.mp4 ">Complexity Analysis of Recursive Functions                 </option>
<option  value="106106133/mod04lec26.mp4 ">Algorithms and Powering                                    </option>
<option  value="106106133/mod04lec27.mp4 "> Polynomial evaluation and multiplication                  </option>
<option  value="106106133/mod04lec28.mp4 ">Linear and Binary Search Analysis                          </option>
<option  value="106106133/mod04lec29.mp4 "> Analysis of minimum and maximum in an array               </option>
<option  value="106106133/mod04lec30.mp4 ">Sorting I: Insertion, Merge                                </option>
<option  value="106106133/mod04lec31.mp4 ">Sorting II: Counting, Radix                                </option>
<option  value="106106133/mod04lec32.mp4 ">Finding i-th smallest number                               </option>
<option  value="106106133/mod05lec33.mp4 ">Structures                                                 </option>
<option  value="106106133/mod05lec34.mp4 ">More on Structures                                         </option>
<option  value="106106133/mod05lec35.mp4 ">Using structures and pointers to structures                </option>
<option  value="106106133/mod05lec36.mp4 ">Dynamic memory allocation                                  </option>
<option  value="106106133/mod05lec37.mp4 ">Linked List                                                </option>
<option  value="106106133/mod05lec38.mp4 ">Brief introduction to C++: Classes and objects             </option>
<option  value="106106133/mod05lec39.mp4 ">Abstract Data Types                                        </option>
<option  value="106106133/mod05lec40.mp4 ">Stacks : Last In First Out                                 </option>
<option  value="106106133/mod06lec41.mp4 ">Queues: First In First                                     </option>
<option  value="106106133/mod06lec42.mp4 ">Tree Traversal                                             </option>
<option  value="106106133/mod06lec43.mp4 ">Binary</option>
<option  value="106106133/mod06lec44.mp4 ">Search                                            </option>
<option  value="106106133/mod06lec45.mp4 ">Heaps                                                      </option>
<option  value="106106133/mod06lec46.mp4 ">Graphs and</option>
<option  value="106106133/mod06lec47.mp4 ">Representations</option>
	</tr>
	</form>

                     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106108098</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Data Communications</strong></td>
	<td><strong>Prof. H.S. Jamadagni</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106108098/Data Communication/Learning Material - DataCommunication.pdf">contents</option>
            
          </select></td>
		</tr>
	</form>    
                         <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106108099</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Digital Systems</strong></td>
	<td><strong>Prof. N.J. Rao</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106108099/Digital Systems/Digital Systems.pdf">contents</option>
            
          </select></td>
		</tr>
	</form>                         
                                        
              <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106108100</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Microprocessors and Microcontrollers</strong></td>
	<td><strong>Prof. Krishna Kumar</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106108100/Microprocessors and Microcontrollers/New_index1.html">contents</option>
            
          </select></td>
		</tr>
	</form>
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108058</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>  Storage Systems </strong></td>
	<td><strong>Dr. K. Gopinath</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="106108058/mod01lec01.mp4">Overview                                      </option>
<option value="106108058/mod01lec02.mp4">Storage, Processing, Networking               </option>
<option value="106108058/mod01lec03.mp4">Naming and Storing                            </option>
<option value="106108058/mod01lec04.mp4">Storage Filesystems                           </option>
<option value="106108058/mod02lec05.mp4">Access Architecture, Hard Disks               </option>
<option value="106108058/mod02lec06.mp4">SCSI                                          </option>
<option value="106108058/mod03lec07.mp4">Fibre Channel Protocol (FCP)                  </option>
<option value="106108058/mod03lec08.mp4">FCP, 10Gb Ethernet, iSCSI, TCP                </option>
<option value="106108058/mod03lec09.mp4">NFS, NFSv2                                    </option>
<option value="106108058/mod03lec10.mp4">NFSv2, NFSv3, NFSv4, CIFS                     </option>
<option value="106108058/mod04lec11.mp4">USB Storage                                   </option>
<option value="106108058/mod04lec12.mp4">Tiering                                       </option>
<option value="106108058/mod04lec13.mp4">Mobile/Personal/Organizational - type Storage </option>
<option value="106108058/mod04lec14.mp4">Parallel/Cloud/Web-scale Storage              </option>
<option value="106108058/mod04lec15.mp4">Long-term Storage                             </option>
<option value="106108058/mod05lec16.mp4">Storage interfaces                            </option>
<option value="106108058/mod05lec17.mp4">User-Memory-CPU interactions                  </option>
<option value="106108058/mod05lec18.mp4">Spinlock, Concurrency                         </option>
<option value="106108058/mod05lec19.mp4">Block Layer design                            </option>
<option value="106108058/mod05lec20.mp4">FAT, TFAT, F2FS, LFS, FTL                     </option>
<option value="106108058/mod06lec21.mp4">Data Structures                               </option>
<option value="106108058/mod06lec22.mp4">Abstractions                                  </option>
<option value="106108058/mod06lec23.mp4">Link & Write Operations                       </option>
<option value="106108058/mod06lec24.mp4">ZFS                                           </option>
<option value="106108058/mod06lec25.mp4">RAID in Filesystems                           </option>
<option value="106108058/mod06lec26.mp4">RAID-Z, NetApp RAID4, Flash Filesystems       </option>
<option value="106108058/mod07lec27.mp4">Reliability                                   </option>
<option value="106108058/mod07lec28.mp4">Performance                                   </option>
<option value="106108058/mod07lec29.mp4">Security                                      </option>
<option value="106108058/mod08lec30.mp4">CAP Theorem                                   </option>
<option value="106108058/mod08lec31.mp4">POSIX/NFS/S3/Zookeeper, ACID Vs. BASE         </option>
<option value="106108058/mod09lec32.mp4">Consistency & Commit problems                 </option>
<option value="106108058/mod09lec33.mp4">Paxos                                         </option>
<option value="106108058/mod09lec34.mp4">Group Communication problem                   </option>
<option value="106108058/mod09lec35.mp4">Message Ordering                              </option>
<option value="106108058/mod09lec36.mp4">Ordering Models                               </option>
<option value="106108058/mod09lec37.mp4">Orderings in Filesystems                      </option>
<option value="106108058/mod09lec38.mp4">Semantics of highly scalable filesystems      </option>
<option value="106108058/mod10lec39.mp4">GFS                                           </option>
<option value="106108058/mod10lec40.mp4">GFS Model                                     </option>
<option value="106108058/mod10lec41.mp4">GFS functions and operations                  </option>
<option value="106108058/mod10lec42.mp4">GFS problems, BigTable                        </option>
<option value="106108058/mod10lec43.mp4">Lessons to learn                              </option>
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108113</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong> Principles of Compiler Design </strong></td>
	<td><strong>Prof. Y.N. Srikanth</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="106108113/mod01lec01.mp4">An Overview of a Compiler                                                                                              </option>
<option value="106108113/mod02lec02.mp4">Lexical Analysis - Part 1                                                                                              </option>
<option value="106108113/mod02lec03.mp4">Lexical Analysis - Part 2                                                                                              </option>
<option value="106108113/mod02lec04.mp4">Lexical Analysis - Part 3                                                                                              </option>
<option value="106108113/mod03lec05.mp4">Syntax Analysis: Context-free Grammars, Pushdown Automata and Parsing Part - 1                                         </option>
<option value="106108113/mod03lec06.mp4">Syntax Analysis: Context-free Grammars, Pushdown Automata and Parsing Part - 2                                         </option>
<option value="106108113/mod03lec07.mp4">Syntax Analysis: Context-free Grammars, Pushdown Automata and Parsing Part - 3                                         </option>
<option value="106108113/mod03lec08.mp4">Syntax Analysis: Context-free Grammars, Pushdown Automata and Parsing Part - 4                                         </option>
<option value="106108113/mod03lec09.mp4">Syntax Analysis: Context-free Grammars, Pushdown Automata and Parsing Part - 5                                         </option>
<option value="106108113/mod03lec10.mp4">Syntax Analysis: Context-free Grammars, Pushdown Automata and Parsing Part - 6                                         </option>
<option value="106108113/mod03lec11.mp4">Syntax Analysis: Context-free Grammars, Pushdown Automata and Parsing Part - 7                                         </option>
<option value="106108113/mod04lec12.mp4">Semantic Analysis with Attribute Grammars Part 1                                                                       </option>
<option value="106108113/mod04lec13.mp4">Semantic Analysis with Attribute Grammars Part 2                                                                       </option>
<option value="106108113/mod04lec14.mp4">Semantic Analysis with Attribute Grammars Part 3                                                                       </option>
<option value="106108113/mod04lec15.mp4">Semantic Analysis with Attribute Grammars Part 4                                                                       </option>
<option value="106108113/mod04lec16.mp4">Semantic Analysis with Attribute Grammars Part 5                                                                       </option>
<option value="106108113/mod05lec17.mp4">Intermediate code generation Part 1                                                                                    </option>
<option value="106108113/mod05lec18.mp4">Intermediate code generation Part 2                                                                                    </option>
<option value="106108113/mod05lec19.mp4">Intermediate code generation Part 3                                                                                    </option>
<option value="106108113/mod05lec20.mp4">Intermediate code generation Part 4 (first half of lecture)                                                            </option>
<option value="106108113/mod05lec20.mp4">Run-time environments - 1 (second half of lecture)                                                                     </option>
<option value="106108113/mod06lec21.mp4">Run-time environments - 2                                                                                              </option>
<option value="106108113/mod06lec22.mp4">Run-time environments - 3                                                                                              </option>
<option value="106108113/mod06lec23.mp4">Run-time environments - 4 (first half of lecture)                                                                      </option>
<option value="106108113/mod06lec23.mp4">Control-Flow Graph and Local Optimizations - Part 1 (second half of lecture)                                           </option>
<option value="106108113/mod07lec24.mp4">Control-Flow Graph and Local Optimizations - Part 2 (first half of lecture)                                            </option>
<option value="106108113/mod07lec24.mp4">Machine code generation - 1 (second half of lecture)                                                                   </option>
<option value="106108113/mod08lec25.mp4">Machine code generation - 2                                                                                            </option>
<option value="106108113/mod08lec26.mp4">Machine code generation - 3                                                                                            </option>
<option value="106108113/mod08lec27.mp4">Machine code generation - 4 (first half of lecture), Implementing object-oriented languages 1 (second half of lecture) </option>
<option value="106108113/mod08lec28.mp4">Implementing object-oriented languages 2 (first half of lecture)                                                       </option>
<option value="106108113/mod08lec28.mp4">Global register allocation - 1 (second half of lecture)                                                                </option>
<option value="106108113/mod09lec29.mp4">Global register allocation - 2                                                                                         </option>
<option value="106108113/mod09lec30.mp4">Global register allocation - 3                                                                                         </option>
<option value="106108113/mod10lec31.mp4">Introduction to Machine-Independent Optimizations - 1                                                                  </option>
<option value="106108113/mod10lec32.mp4">Introduction to Machine-Independent Optimizations - 2                                                                  </option>
<option value="106108113/mod10lec33.mp4">Introduction to Machine-Independent Optimizations - 3                                                                  </option>
<option value="106108113/mod10lec34.mp4">Introduction to Machine-Independent Optimizations - 4                                                                  </option>
<option value="106108113/mod10lec35.mp4">Introduction to Machine-Independent Optimizations - 5                                                                  </option>
<option value="106108113/mod10lec36.mp4">Introduction to Machine-Independent Optimizations - 6                                                                  </option>
<option value="106108113/mod10lec37.mp4">Introduction to Machine-Independent Optimizations - 7 (first half of lecture)                                          </option>
<option value="106108113/mod10lec37.mp4">Instruction Scheduling and Software Pipelining - 1 (second half of lecture)                                            </option>
<option value="106108113/mod11lec38.mp4">Instruction Scheduling and Software Pipelining - 2                                                                     </option>
<option value="106108113/mod11lec39.mp4">Instruction Scheduling and Software Pipelining - 3 (first part of lecture)                                             </option>
<option value="106108113/mod11lec39.mp4">Automatic parallelization - 1 (second half of lecture)                                                                 </option>
<option value="106108113/mod12lec40.mp4">Automatic parallelization - 2                                                                                          </option>
	</tr>
	</form>


            <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106108101</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Operating Systems</strong></td>
	<td><strong>Prof. P.C.P. Bhatt</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106108101/Operating Systems/New_index1.html">contents</option>
            
          </select></td>
		</tr>
	</form>    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106108103</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>System Analysis and Design</strong></td>
	<td><strong>Prof. V. Rajaraman</strong></td>
	<td><strong>web</strong></td>
	<td><strong>IIT- Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106108103/System Analysis and Design/New_index1.html">contents</option>
            
          </select></td>
		</tr>
	</form>                              
    
    <!--ended the courses-->
    
    
    
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106103015</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computational Number Theory & Cryptography</strong></td>
	<td><strong>Dr. Pinaki Mitra</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106103015/module1/index.html">Complexity of Computation & Complexity Classes</option>
      
      <option  value="106103015/module1/lec2/1.html">Encoding Scheme</option>
      
      <option  value="106103015/module2/lec1/1.html">Elementary Number-Theory</option>
      
      <option  value="106103015/module2/lec2/1.html">Euclid's Algorithm</option>
      
      <option  value="106103015/module3/lec1/1.html">Modular Arithmetic Groups</option>
      
      <option  value="106103015/module3/lec2/1.html">Subgroups</option>
      
      <option  value="106103015/module3/lec3/1.html">Primitive Roots</option>
      
      <option  value="106103015/module3/lec4/1.html">Generator Computation</option>
      
      <option  value="106103015/module4/lec1/1.html">Solving modular linear equations</option>
      
      <option  value="106103015/module4/lec2/1.html">Modular exponentiation</option>
      
      <option  value="106103015/module4/lec3/1.html">Chinese Remainder Theorem</option>
      
      <option  value="106103015/module4/lec4/1.html">Discrete Logarithm Problem</option>
      
      <option  value="106103015/module4/lec5/1.html">Quadratic Residues</option>
      
      <option  value="106103015/module5/lec1/1.html">Diffie Hellman key Exchange</option>
      
      <option  value="106103015/module5/lec2/1.html">Cryptosystems Based on Discrete Log</option>
      
      <option  value="106103015/module6/lec1/1.html">Public Key Cryptosystem & RSA</option>
      
      <option  value="106103015/module6/lec2/1.html">Choice of the Public Key</option>
      
      <option  value="106103015/module6/lec3/1.html">Attacks on RSA & Remedies</option>
      
      <option  value="106103015/module6/lec4/1.html">Rabin Cryptosystem</option>
      
      <option  value="106103015/module7/lec5/1.html">Pollard-Rho Method</option>
      
      <option  value="106103015/module7/lec6/1.html">Pollard Rho Analysis</option>
      
      <option  value="106103015/module7/lec1/1.html">Current state of the art</option>
      
      <option  value="106103015/module7/lec2/1.html">Large prime variant</option>
      
      <option  value="106103015/module7/lec3/1.html">Dixon's factorization method</option>
      
      <option  value="106103015/module8/lec1/1.html">Primality Testing</option>
      
      <option  value="106103015/module8/lec2/1.html">Fermat Primality Test</option>
      
      <option  value="106103015/module8/lec3/1.html">AKS PRIMALITY TEST</option>
      
      <option  value="106103015/module9/lec5/1.html">Elliptic Curve Cryptography</option>
      
      <option  value="106103015/module9/lec4/1.html">Zero Knowledge Proof</option>
      
      <option  value="106103015/module9/lec1/1.html">Elliptic Curves</option>
      
      <option  value="106103015/module10/lec2/1.html">Elgamal Digital Signature Scheme</option>
      
      <option  value="106103015/module10/lec3/1.html">Blind & Prony Signature </option>
      
      <option  value="106103015/module10/lec4/1.html">Short signature scheme I</option>
      
      <option  value="106103015/module10/lec5/1.html">Short signature scheme II</option>
      
      <option  value="106103015/module11/lec1/1.html">Video Data Cippers</option>
      
      <option  value="106103015/module10/lec1/1.html">Cryptographic Hash Function</option>
      
      <option  value="106103015/module7/lec4/1.html">Quadratic-Sieve Factoring</option>
      
      <option  value="106103015/module9/lec2/1.html">Elliptic Curves(contd.) and Finite Fields</option>
      
      <option  value="106103015/module9/lec3/1.html">ECDLP</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106103016</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>VLSI Design Verification and Test</strong></td>
	<td><strong>Prof. Jatindra Kumar Deka,Dr. Santosh Biswas</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106103016/module1/index.html">Introduction to Digital VLSI Design Flow </option>
      
      <option  value="106103016/module1/lec2/1.html">High Level Design Representation </option>
      
      <option  value="106103016/module1/lec3/1.html">Transformations for High Level Synthesis </option>
      
      <option  value="106103016/module2/lec1/1.html">Introduction to HLS: Scheduling, Allocation and Binding Problem </option>
      
      <option  value="106103016/module2/lec2/1.html">Scheduling Algorithms </option>
      
      <option  value="106103016/module2/lec4/1.html">Binding and Allocation Algorithms </option>
      
      <option  value="106103016/module3/lec1/1.html">Two level Boolean Logic Synthesis </option>
      
      <option  value="106103016/module3/lec4/1.html">Heuristic Minimization of Two-Level </option>
      
      <option  value="106103016/module3/lec5/1.html">Finite State Machine Synthesis </option>
      
      <option  value="106103016/module3/lec6/1.html">Multilevel Implementation </option>
      
      <option  value="106103016/module4/lec1/1.html">Introduction and construction </option>
      
      <option  value="106103016/module4/lec2/1.html">Ordered Binary Decision Diagram </option>
      
      <option  value="106103016/module4/lec3/1.html">Operations on Ordered Binary Decision Diagram </option>
      
      <option  value="106103016/module4/lec4/1.html">Ordered Binary Decision Diagram for Sequential Circuits </option>
      
      <option  value="106103016/module5/lec1/1.html">Introduction and Basic Operations on Temporal Logic </option>
      
      <option  value="106103016/module5/lec2/1.html">Syntax and Semantics of CLT </option>
      
      <option  value="106103016/module5/lec3/1.html">Equivalence between CTL Formulas </option>
      
      <option  value="106103016/module6/lec1/1.html">Verification Techniques </option>
      
      <option  value="106103016/module6/lec2/1.html">Model Checking Algorithm </option>
      
      <option  value="106103016/module6/lec5/1.html">Symbolic Model Checking </option>
      
      <option  value="106103016/module7/lec1/1.html">Introduction to Digital VLSI Testing </option>
      
      <option  value="106103016/module7/lec2/1.html">Functional and Structural Testing </option>
      
      <option  value="106103016/module7/lec3/1.html">Fault Equivalence </option>
      
      <option  value="106103016/module8/lec1/1.html">Fault Simulation </option>
      
      <option  value="106103016/module8/lec4/1.html">Testability Measures (SCOAP) </option>
      
      <option  value="106103016/module9/lec1/1.html">Introduction to Automatic Test Pattern Generation (ATPG) and ATPG Algebras </option>
      
      <option  value="106103016/module9/lec2/1.html">D-Algorithm </option>
      
      <option  value="106103016/module10/lec1/1.html">ATPG for Synchronous Sequential Circuits </option>
      
      <option  value="106103016/module10/lec2/1.html">Scan Chain based Sequential Circuit Testing </option>
      
      <option  value="106103016/module11/lec1/1.html">Built in Self Test </option>
      
      <option  value="106103016/module11/lec3/1.html">Memory Testing </option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106103115</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Human-Computer Interaction</strong></td>
	<td><strong>Dr.Samit Bhattacharya,Pradeep P Yammiyavar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106103115/index.html">Course objective and overview </option>
      
      <option  value="106103115/module1/2.pdf">Historical evolution of the field</option>
      
      <option  value="106103115/module2/1.pdf">Concept of usability - definition and elaboration</option>
      
      <option  value="106103115/module2/2.pdf">HCI and software engineering </option>
      
      <option  value="106103115/module2/3.pdf">GUI design and aesthetics</option>
      
      <option  value="106103115/module2/4.pdf">Prototyping techniques</option>
      
      <option  value="106103115/module3/1.pdf">Introduction to different types of models</option>
      
      <option  value="106103115/module3/2.pdf">Keystroke Level Model -I</option>
      
      <option  value="106103115/module3/3.pdf">Keystroke Level Model - II</option>
      
      <option  value="106103115/module3/4.pdf">(CMN)GOMS</option>
      
      <option  value="106103115/module3/5.pdf">Individual Models of Human Factors - I</option>
      
      <option  value="106103115/module3/6.pdf">Individual Models of Human Factors - II</option>
      
      <option  value="106103115/module3/7.pdf">A Case Study on Model-Based Design - I</option>
      
      <option  value="106103115/module3/8.pdf">A Case Study on Model-Based Design - II</option>
      
      <option  value="106103115/module4/1.pdf">Shneiderman�s eight golden rules</option>
      
      <option  value="106103115/module4/2.pdf">Norman�s seven principles </option>
      
      <option  value="106103115/module4/3.pdf">Norman�s model of interaction</option>
      
      <option  value="106103115/module4/4.pdf">Nielsen�s ten heuristics with example of its use</option>
      
      <option  value="106103115/module4/5.pdf">Heuristic evaluation</option>
      
      <option  value="106103115/module4/6.pdf">Contextual inquiry </option>
      
      <option  value="106103115/module4/7.pdf">Cognitive walkthrough </option>
      
      <option  value="106103115/module5/1.pdf">Introduction to Empirical Research - I</option>
      
      <option  value="106103115/module5/2.pdf">Introduction to Empirical Research - II</option>
      
      <option  value="106103115/module5/3.pdf">Analysis of Empirical Data</option>
      
      <option  value="106103115/module5/4.pdf">Empirical Research Case Study</option>
      
      <option  value="106103115/module6/1.pdf">Hierarchical task analysis (HTA)</option>
      
      <option  value="106103115/module6/2.pdf">Engineering Task Models and CTT</option>
      
      <option  value="106103115/module6/3.pdf">CTT Example</option>
      
      <option  value="106103115/module7/1.pdf">Introduction to formalism in dialog design, design using FSM</option>
      
      <option  value="106103115/module7/2.pdf">StateCharts</option>
      
      <option  value="106103115/module7/3.pdf">Petri Nets</option>
      
      <option  value="106103115/module7/4.pdf">Use of Formalism</option>
      
      <option  value="106103115/module8/1.pdf">Introduction</option>
      
      <option  value="106103115/module8/2.pdf">Model Human Processor - I</option>
      
      <option  value="106103115/module8/3.pdf">Model Human Processor - II</option>
      
      <option  value="106103115/module9/1.pdf">OOP- Introduction</option>
      
      <option  value="106103115/module9/2.pdf">OOM- Object Oriented Modeling of  User Interface Design</option>
      
      <option  value="106103115/module10/1.pdf">Case Study 1- Multi-Key press Hindi Text Input Method on a Mobile Phone</option>
      
      <option  value="106103115/module10/2.pdf">Case Study 2 - GUI design for a mobile phone based Matrimonial application.during emergency</option>
      
      <option  value="106103115/module10/3.pdf">Case Study 3 - Employment Information System for unorganised construction workers on a Mobile Phone.</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106103116</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Design Verification and Test of Digital VLSI Circuits</strong></td>
	<td><strong>Prof. Jatindra Kumar Deka,Dr. Santosh Biswas</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106103116/mod01lec01.mp4">Introduction to Digital VLSI Design Flow</option>
      
      <option  value="106103116/mod01lec02.mp4">High Level Design Representation</option>
      
      <option  value="106103116/mod01lec03.mp4">Transformations for High Level Synthesis</option>
      
      <option  value="106103116/mod02lec01.mp4">Introduction to HLS: Scheduling, Allocation and Binding Problem</option>
      
      <option  value="106103116/mod02lec02.mp4">Scheduling Algorithms-1            </option>
      
      <option  value="106103116/mod02lec03.mp4">Scheduling Algorithms-2            </option>
      
      <option  value="106103116/mod02lec04.mp4">Binding and Allocation Algorithms</option>
      
      <option  value="106103116/mod03lec01.mp4">Two level Boolean Logic Synthesis-1</option>
      
      <option  value="106103116/mod03lec02.mp4">Two level Boolean Logic Synthesis-2</option>
      
      <option  value="106103116/mod03lec03.mp4">Two level Boolean Logic Synthesis-3</option>
      
      <option  value="106103116/mod03lec04.mp4">Heuristic Minimization of Two-Level Circuits</option>
      
      <option  value="106103116/mod03lec05.mp4">Finite State Machine Synthesis</option>
      
      <option  value="106103116/mod03lec06.mp4">Multilevel Implementation</option>
      
      <option  value="106103116/mod04lec01.mp4">Introduction to formal methods for design verification </option>
      
      <option  value="106103116/mod04lec02.mp4">Temporal Logic:  Introduction and Basic Operators</option>
      
      <option  value="106103116/mod04lec03.mp4">Syntax and Semantics of CTL</option>
      
      <option  value="106103116/mod04lec04.mp4">Syntax and Semantics of CTL � Continued </option>
      
      <option  value="106103116/mod04lec05.mp4">Equivalence between CTL Formulas</option>
      
      <option  value="106103116/mod05lec01.mp4">Introduction to Model Checking </option>
      
      <option  value="106103116/mod05lec02.mp4">Model Checking Algorithms I</option>
      
      <option  value="106103116/mod05lec03.mp4">Model Checking Algorithms II</option>
      
      <option  value="106103116/mod05lec04.mp4">Model Checking with Fairness</option>
      
      <option  value="106103116/mod06lec01.mp4">Binary Decision Diagram:  Introduction and construction</option>
      
      <option  value="106103116/mod06lec02.mp4">Ordered Binary Decision Diagram</option>
      
      <option  value="106103116/mod06lec03.mp4">Operation on Ordered Binary Decision Diagram</option>
      
      <option  value="106103116/mod06lec04.mp4">Ordered Binary Decision Diagram for State Transition Systems</option>
      
      <option  value="106103116/mod06lec05.mp4">Symbolic Model Checking</option>
      
      <option  value="106103116/mod07lec01.mp4">Introduction to Digital VLSI Testing</option>
      
      <option  value="106103116/mod07lec02.mp4">Functional and Structural Testing</option>
      
      <option  value="106103116/mod07lec03.mp4">Fault Equivalence</option>
      
      <option  value="106103116/mod08lec01.mp4">Fault Simulation-1</option>
      
      <option  value="106103116/mod08lec02.mp4">Fault Simulation-2</option>
      
      <option  value="106103116/mod08lec03.mp4">Fault Simulation-3</option>
      
      <option  value="106103116/mod08lec04.mp4">Testability Measures (SCOAP)</option>
      
      <option  value="106103116/mod09lec01.mp4">Introduction to Automatic Test Pattern Generation (ATPG) and ATPG Algebras</option>
      
      <option  value="106103116/mod09lec02.mp4">D-Algorithm-1</option>
      
      <option  value="106103116/mod09lec03.mp4">D-Algorithm-2</option>
      
      <option  value="106103116/mod10lec01.mp4">ATPG for Synchronous Sequential Circuits</option>
      
      <option  value="106103116/mod10lec02.mp4">Scan Chain based Sequential Circuit Testing-1</option>
      
      <option  value="106103116/mod10lec03.mp4">Scan Chain based Sequential Circuit Testing-2</option>
      
      <option  value="106103116/mod11lec01.mp4">Built in Self Test-1      </option>
      
      <option  value="106103116/mod11lec02.mp4">Built in Self Test-2      </option>
      
      <option  value="106103116/mod11lec03.mp4">Memory Testing-1</option>
      
      <option  value="106103116/mod11lec04.mp4">Memory Testing-2</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104019</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Algorithms - 2</strong></td>
	<td><strong>Prof. Shashank K. Mehta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106104019/mod01lec01.mp4">Lecture-01-Graph_Basics</option>
      
      <option  value="106104019/mod01lec02.mp4">Lecture-02-Breadth_First_Search</option>
      
      <option  value="106104019/mod01lec03.mp4">Lecture-03-Dijkstra_Algo</option>
      
      <option  value="106104019/mod01lec04.mp4">Lecture-04-All Pair Shortest Path</option>
      
      <option  value="106104019/mod01lec05.mp4">Lecture-05-Matriods</option>
      
      <option  value="106104019/mod01lec06.mp4">Lecture-06-Minimum Spanning Tree</option>
      
      <option  value="106104019/mod01lec07.mp4">Lecture-07-Edmond's Matching Algo I</option>
      
      <option  value="106104019/mod01lec08.mp4">Lecture-08-Edmond's Matching Algo II</option>
      
      <option  value="106104019/mod01lec09.mp4">Lecture-09-Flow Networks</option>
      
      <option  value="106104019/mod01lec10.mp4">Lecture-10-Ford Fulkerson Method</option>
      
      <option  value="106104019/mod01lec11.mp4">Lecture-11-Edmond Karp Algo</option>
      
      <option  value="106104019/mod01lec12.mp4">Lecture-12-Matrix Inversion</option>
      
      <option  value="106104019/mod01lec13.mp4">Lecture-13-Matrix Decomposition</option>
      
      <option  value="106104019/mod01lec14.mp4">Lecture-14-Knuth Morris Pratt Algo</option>
      
      <option  value="106104019/mod01lec15.mp4">Lecture-15-Rabin Karp Algo</option>
      
      <option  value="106104019/mod01lec16.mp4">Lecture-16-NFA Simulation</option>
      
      <option  value="106104019/mod01lec17.mp4">Lecture-17-Integer-Polynomial OpsI</option>
      
      <option  value="106104019/mod01lec18.mp4">Lecture-18-Integer-Polynomial OpsII</option>
      
      <option  value="106104019/mod01lec19.mp4">Lecture-19-Integer-Polynomial OpsIII</option>
      
      <option  value="106104019/mod01lec20.mp4">Lecture-20-Chinese RemainderI</option>
      
      <option  value="106104019/mod01lec21.mp4">Lecture-21-Chinese RemainderII</option>
      
      <option  value="106104019/mod01lec22.mp4">Lecture-22-Chinese RemainderIII</option>
      
      <option  value="106104019/mod01lec23.mp4">Lecture-23-:Discrete Fourier TransformI</option>
      
      <option  value="106104019/mod01lec24.mp4">Lecture-24-Discrete Fourier TransformII</option>
      
      <option  value="106104019/mod01lec25.mp4">Lecture-25-Discrete Fourier TransformIII</option>
      
      <option  value="106104019/mod01lec26.mp4">Lecture-26-Schonhage Strassen Algo</option>
      
      <option  value="106104019/mod01lec27.mp4">Lecture-27-Linear ProgrammingI</option>
      
      <option  value="106104019/mod01lec28.mp4">Lecture-28-Linear ProgrammingII</option>
      
      <option  value="106104019/mod01lec29.mp4">Lecture-29-GeometryI</option>
      
      <option  value="106104019/mod01lec30.mp4">Lecture-30-GeometryII</option>
      
      <option  value="106104019/mod01lec31.mp4">Lecture-31-GeometryIII</option>
      
      <option  value="106104019/mod01lec32.mp4">Lecture-32-Approximation AlgoI</option>
      
      <option  value="106104019/mod01lec33.mp4">Lecture-33-Approximation AlgoII</option>
      
      <option  value="106104019/mod01lec34.mp4">Lecture-34-Approximation AlgoIII</option>
      
      <option  value="106104019/mod01lec35.mp4">Lecture-35-General: Dynamic Programming</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106104021</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Indexing and Searching Techniques in Databases</strong></td>
	<td><strong>Dr. Arnab Bhattacharya</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106104021/lecture1/main.html">Basic Database Queries</option>
      
      <option  value="106104021/lecture2/2_1.htm">Advanced Database Queries</option>
      
      <option  value="106104021/lecture3/3_1.htm">Error Measures</option>
      
      <option  value="106104021/lecture4/4_1.htm">Memory and Disk Accesses</option>
      
      <option  value="106104021/lecture5/5_1.htm">Vector and Metric Spaces</option>
      
      <option  value="106104021/lecture6/6_1.htm">Distance Functions</option>
      
      <option  value="106104021/lecture7/7_1.htm">Earth Mover's Distance (EMD)</option>
      
      <option  value="106104021/lecture8/8_1.htm">Earth Mover's Distance (EMD)</option>
      
      <option  value="106104021/lecture9/9_1.htm">Static and Dynamic Hashing</option>
      
      <option  value="106104021/lecture10/10_1.htm">Linear hashing</option>
      
      <option  value="106104021/lecture11/11_1.htm">Locality Sensitive Hashing and Grid File</option>
      
      <option  value="106104021/lecture12/12_1.htm">One-dimensional Orderings</option>
      
      <option  value="106104021/lecture13/13_1.htm">Index structure </option>
      
      <option  value="106104021/lecture14/14_1.htm">Quadtrees and k-d-trees</option>
      
      <option  value="106104021/lecture15/15_1.htm">Range Trees and Interval Trees</option>
      
      <option  value="106104021/lecture16/16_1.htm">Voronoi Diagrams and Tries</option>
      
      <option  value="106104021/lecture17/17_1.htm">Disk-based Index Structures</option>
      
      <option  value="106104021/lecture18/18_1.htm">General Framework</option>
      
      <option  value="106104021/lecture19/19_1.htm">R-trees</option>
      
      <option  value="106104021/lecture20/20_1.htm"> R-trees</option>
      
      <option  value="106104021/lecture21/21_1.htm">R-tree Variants</option>
      
      <option  value="106104021/lecture22/22_1.htm">SS-trees,SR-trees,P-trees</option>
      
      <option  value="106104021/lecture23/23_1.htm">X-tree</option>
      
      <option  value="106104021/lecture24/24_1.htm">Analysis of High Dimensional Data</option>
      
      <option  value="106104021/lecture25/25_1.htm">Analysis of Index Structures</option>
      
      <option  value="106104021/lecture26/26_1.htm">Pyramid Technique and VA-files</option>
      
      <option  value="106104021/lecture27/27_1.htm">M-trees</option>
      
      <option  value="106104021/lecture28/28_1.htm">Dimensionality Reduction </option>
      
      <option  value="106104021/lecture29/29_1.htm">Singular Value Decomposition (SVD) </option>
      
      <option  value="106104021/lecture30/30_1.htm">Principal Component Analysis (PCA) </option>
      
      <option  value="106104021/lecture31/31_1.htm">FastMap </option>
      
      <option  value="106104021/lecture32/32_1.htm">Embedding</option>
      
      <option  value="106104021/lecture33/33_1.htm"> Embedding</option>
      
      <option  value="106104021/lecture34/34_1.htm">DFT and DCT </option>
      
      <option  value="106104021/lecture35/35_1.htm">Wavelets</option>
      
      <option  value="106104021/lecture36/36_1.htm">V-optimal Histograms</option>
      
      <option  value="106104021/lecture37/37_1.htm">Aggregation</option>
      
      <option  value="106104021/lecture38/38_1.htm">Incremental Nearest Neighbor </option>
      
      <option  value="106104021/lecture39/39_1.htm">Skyline Queries</option>
      
      <option  value="106104021/lecture40/40_1.htm"> Skyline Queries</option>
      
      <option  value="106104021/lecture41/41_1.htm">Reading Material</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106104024</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Parallel Computer Architecture</strong></td>
	<td><strong>Dr. Mainak Chaudhuri</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106104024/lecture1/main.html">Evolution of Processor Architecture</option>
      
      <option  value="106104024/lecture2/2_1.htm">Moore's Law and Multi-cores</option>
      
      <option  value="106104024/lecture3/3_1.htm">Evaluating Performance</option>
      
      <option  value="106104024/lecture4/4_1.htm">Shared Memory Multiprocessors</option>
      
      <option  value="106104024/lecture5/5_1.htm">Pipelining and Hazards</option>
      
      <option  value="106104024/lecture6/6_1.htm">Instruction Issue Algorithms</option>
      
      <option  value="106104024/lecture7/7_1.htm">Virtual Memory, TLB, and Caches</option>
      
      <option  value="106104024/lecture8/8_1.htm">Cache Hierarchy and Memory-level Parallelism</option>
      
      <option  value="106104024/lecture9/9_1.htm">MIPS R10000: A Case Study</option>
      
      <option  value="106104024/lecture10/10_1.htm">Communication Architecture</option>
      
      <option  value="106104024/lecture11/11_1.htm">Design Issues in Parallel Computers</option>
      
      <option  value="106104024/lecture12/12_1.htm">Steps in Writing a Parallel Program</option>
      
      <option  value="106104024/lecture13/13_1.htm">Parallelizing a Sequential Program</option>
      
      <option  value="106104024/lecture14/14_1.htm">Load Balancing and Domain Decomposition</option>
      
      <option  value="106104024/lecture15/15_1.htm">Locality and Communication Optimizations</option>
      
      <option  value="106104024/lecture16/16_1.htm">Multiprocessor Organizations and Cache Coherence</option>
      
      <option  value="106104024/lecture17/17_1.htm">Introduction to Cache Coherence Protocols</option>
      
      <option  value="106104024/lecture18/18_1.htm">Introduction to Cache Coherence</option>
      
      <option  value="106104024/lecture19/19_1.htm">Sequential Consistency and Cache Coherence Protocols</option>
      
      <option  value="106104024/lecture20/20_1.htm">Performance of Coherence Protocols</option>
      
      <option  value="106104024/lecture21/21_1.htm">Introduction to Synchronization</option>
      
      <option  value="106104024/lecture22/22_1.htm">Scalable Locking Primitives</option>
      
      <option  value="106104024/lecture23/23_1.htm">Barriers and Speculative Synchronization</option>
      
      <option  value="106104024/lecture24/24_1.htm">Write Serialization in a Simple Design</option>
      
      <option  value="106104024/lecture25/25_1.htm">Protocols for Split-transaction Buses</option>
      
      <option  value="106104024/lecture26/26_1.htm">Case Studies</option>
      
      <option  value="106104024/lecture27/27_1.htm">Scalable Snooping and AMD Hammer Protocol</option>
      
      <option  value="106104024/lecture28/28_1.htm">Scalable Multiprocessors</option>
      
      <option  value="106104024/lecture29/29_1.htm">Basics of Directory</option>
      
      <option  value="106104024/lecture30/30_1.htm">SGI Origin 2000</option>
      
      <option  value="106104024/lecture31/31_1.htm">Managing Directory Overhead</option>
      
      <option  value="106104024/lecture32/32_1.htm">Protocol Occupancy and Directory Controllers</option>
      
      <option  value="106104024/lecture33/33_1.htm">SCI Protocol</option>
      
      <option  value="106104024/lecture34/34_1.htm">Sequential Consistency and Relaxed Models</option>
      
      <option  value="106104024/lecture35/35_1.htm">Release Consistency and Delayed Consistency</option>
      
      <option  value="106104024/lecture36/36_1.htm">Software Distributed Shared Memory Multiprocessors</option>
      
      <option  value="106104024/lecture37/37_1.htm">Introduction to Routers</option>
      
      <option  value="106104024/lecture38/38_1.htm">Routing Algorithms</option>
      
      <option  value="106104024/lecture39/39_1.htm">Simultaneous Multithreading and Chip-multiprocessing</option>
      
      <option  value="106104024/lecture40/40_1.htm">Case Studies: IBM Power4 and IBM Power5</option>
      
      <option  value="106104024/lecture41/41_1.htm">Case Studies: Intel Montecito and Sun Niagara</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106104025</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Program Optimization for Multi-core Architectures</strong></td>
	<td><strong>Prof. Sanjeev K Aggarwal,Dr. Mainak Chaudhuri,Prof. Rajat Moona</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106104025/lecture1/main.html">Evolution of Processor Architecture</option>
      
      <option  value="106104025/lecture2/2_1.htm">Introduction to Multi-core Architecture</option>
      
      <option  value="106104025/lecture3/3_1.htm">Virtual Memory and Caches</option>
      
      <option  value="106104025/lecture4/4_1.htm">Cache Hierarchy and Memory-level Parallelism</option>
      
      <option  value="106104025/lecture5/5_1.htm">Communication Architectures and Communication Costs</option>
      
      <option  value="106104025/lecture6/6_1.htm">Preliminaries of Parallel Programming</option>
      
      <option  value="106104025/lecture7/7_1.htm">Examples of Shared Memory and Message Passing Programming</option>
      
      <option  value="106104025/lecture8/8_1.htm">Optimizing Shared Memory Performance</option>
      
      <option  value="106104025/lecture9/9_1.htm">Performance Issues in Shared Memory</option>
      
      <option  value="106104025/lecture10/10_1.htm">Introduction to Coherence</option>
      
      <option  value="106104025/lecture11/11_1htm">Introduction to Snoopy Coherence</option>
      
      <option  value="106104025/lecture12/12_1htm">Cache Coherence Protocols</option>
      
      <option  value="106104025/lecture13/13_1.htm">Introduction to Atomic Primitives</option>
      
      <option  value="106104025/lecture14/14_1.htm">Scalable Locks and Barriers</option>
      
      <option  value="106104025/lecture15/15_1.htm">Memory Consistency Models and Case Studies of Multi-core</option>
      
      <option  value="106104025/lecture16/16_1.htm">Case Studies of Multi-core</option>
      
      <option  value="106104025/lecture17/17_1.htm">Multiprocessor Organizations and Cache Coherence</option>
      
      <option  value="106104025/lecture18/18_1.htm">Sharing Patterns and Cache Coherence Protocols</option>
      
      <option  value="106104025/lecture19/19_1.htm">What is Parallelization?</option>
      
      <option  value="106104025/lecture20/20_1.htm">The �omp sections� Directive</option>
      
      <option  value="106104025/lecture21/21_1.htm">Clause and Routines</option>
      
      <option  value="106104025/lecture22/22_1.htm">Intel Compilers and Threading Tools</option>
      
      <option  value="106104025/lecture23/23_1.htm">Intel Compilers and Threading Tool</option>
      
      <option  value="106104025/lecture24/24_1.htm">Code Optimization</option>
      
      <option  value="106104025/lecture25/25_1.htm">Supercomputing Applications</option>
      
      <option  value="106104025/lecture26/26_1.htm">SIMD Architecture</option>
      
      <option  value="106104025/lecture27/27_1.htm">Algorithm and Interval</option>
      
      <option  value="106104025/lecture28/28_1.htm">Structural Analysis</option>
      
      <option  value="106104025/lecture29/29_1.htm">Reaching Definition</option>
      
      <option  value="106104025/lecture30/30_1.htm"> Analysis</option>
      
      <option  value="106104025/lecture31/31_1.htm">Data Dependence Analysis</option>
      
      <option  value="106104025/lecture32/32_1.htm">Iteration </option>
      
      <option  value="106104025/lecture33/33_1.htm">Data Dependence in Parallel Loops</option>
      
      <option  value="106104025/lecture34/34_1.htm">Symbolic Analysis</option>
      
      <option  value="106104025/lecture35/35_1.htm">Amdahl�s Law</option>
      
      <option  value="106104025/lecture36/36_1.htm">Cycle Shrinking</option>
      
      <option  value="106104025/lecture37/37_1.htm">Multi-core computing CPU Scheduling</option>
      
      <option  value="106104025/lecture38/38_1.htm">Priority and Schedule</option>
      
      <option  value="106104025/lecture39/39_1.htm">Multi-processor Scheduling </option>
      
      <option  value="106104025/lecture40/40_1.htm">Multi-core Computing Synchronization</option>
      
      <option  value="106104025/lecture41/41_1.htm">Solution to Critical Section Problem</option>
      
      <option  value="106104025/lecture42/42_1.htm">Multi-core ComputingInter-process Communication</option>
      
      <option  value="106104025/lecture43/43_1.htm">Multiprocessor Techniques</option>
      
      <option  value="106104025/lecture44/44_1.htm">Cryptography and ECB</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104074</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Introduction to Problem Solving and Programming</strong></td>
	<td><strong>Prof. D. Gupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106104074/lec01.mp4">Lecture 1</option>
      
      <option  value="106104074/lec02.mp4">Lecture 2</option>
      
      <option  value="106104074/lec03.mp4">Lecture 3</option>
      
      <option  value="106104074/lec04.mp4">Lecture 4</option>
      
      <option  value="106104074/lec05.mp4">Lecture 5</option>
      
      <option  value="106104074/lec06.mp4">Lecture 6</option>
      
      <option  value="106104074/lec07.mp4">Lecture 7</option>
      
      <option  value="106104074/lec08.mp4">Lecture 8</option>
      
      <option  value="106104074/lec09.mp4">Lecture 9</option>
      
      <option  value="106104074/lec10.mp4">Lecture 10</option>
      
      <option  value="106104074/lec11.mp4">Lecture 11</option>
      
      <option  value="106104074/lec12.mp4">lecture 12</option>
      
      <option  value="106104074/lec13.mp4">Lecture 13</option>
      
      <option  value="106104074/lec14.mp4">Lecture 14</option>
      
      <option  value="106104074/lec15.mp4">Lecture 15</option>
      
      <option  value="106104074/lec16.mp4">Lecture 16</option>
      
      <option  value="106104074/lec17.mp4">Lecture 17</option>
      
      <option  value="106104074/lec18.mp4">Lecture 18</option>
      
      <option  value="106104074/lec19.mp4">Lecture 19</option>
      
      <option  value="106104074/lec20.mp4">Lecture 20</option>
      
      <option  value="106104074/lec21.mp4">Lecture 21</option>
      
      <option  value="106104074/lec22.mp4">Lecture 21</option>
      
      <option  value="106104074/lec23.mp4">Lecture 23</option>
      
      <option  value="106104074/lec24.mp4">Lecture 24</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104119</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Biometrics</strong></td>
	<td><strong>Prof. Phalguni Gupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106104119/mod01lec01.mp4">Lecture-01 Biometrics</option>
      
      <option  value="106104119/mod01lec02.mp4">Lecture-02 Biometrics</option>
      
      <option  value="106104119/mod01lec03.mp4">Lecture-03 Biometrics</option>
      
      <option  value="106104119/mod01lec04.mp4">Lecture-04 Biometrics</option>
      
      <option  value="106104119/mod01lec05.mp4">Lecture-05 Biometrics</option>
      
      <option  value="106104119/mod01lec06.mp4">Lecture-06 Biometrics</option>
      
      <option  value="106104119/mod01lec07.mp4">Lecture-07 	Biometrics</option>
      
      <option  value="106104119/mod01lec08.mp4">Lecture-08 Biometrics</option>
      
      <option  value="106104119/mod01lec09.mp4">Lecture-09 Biometrics</option>
      
      <option  value="106104119/mod01lec10.mp4">Lecture-10 	Biometrics</option>
      
      <option  value="106104119/mod01lec11.mp4">Lecture-11 Biometrics</option>
      
      <option  value="106104119/mod01lec12.mp4">Lecture-12 Biometrics</option>
      
      <option  value="106104119/mod01lec13.mp4">Lecture-13 Biometrics</option>
      
      <option  value="106104119/mod01lec14.mp4">Lecture-14 Biometrics</option>
      
      <option  value="106104119/mod01lec15.mp4">Lecture-15 Biometrics</option>
      
      <option  value="106104119/mod01lec16.mp4">Lecture-16 Biometrics</option>
      
      <option  value="106104119/mod01lec17.mp4">Lecture-17 Biometrics</option>
      
      <option  value="106104119/mod01lec18.mp4">Lecture-18 Biometrics</option>
      
      <option  value="106104119/mod01lec19.mp4">Lecture-19 Biometrics</option>
      
      <option  value="106104119/mod01lec20.mp4">Lecture-20 Biometrics</option>
      
      <option  value="106104119/mod01lec21.mp4">Lecture-21 Biometrics</option>
      
      <option  value="106104119/mod01lec22.mp4">Lecture-22 Biometrics</option>
      
      <option  value="106104119/mod01lec23.mp4">Lecture-23 Biometrics</option>
      
      <option  value="106104119/mod01lec24.mp4">Lecture-24 Biometrics</option>
      
      <option  value="106104119/mod01lec25.mp4">Lecture-25 Biometrics</option>
      
      <option  value="106104119/mod01lec26.mp4">Lecture-26 Biometrics</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105031</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Cryptography and Network Security</strong></td>
	<td><strong>Dr. Debdeep Mukhopadhyay</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105031/mod01lec01.mp4">Introduction</option>
      
      <option  value="106105031/mod01lec02.mp4">Overview on Modern Cryptography</option>
      
      <option  value="106105031/mod01lec03.mp4">Introduction to Number Theory</option>
      
      <option  value="106105031/mod01lec04.mp4">Probability and Information Theory</option>
      
      <option  value="106105031/mod01lec05.mp4">Classical Cryptosystems</option>
      
      <option  value="106105031/mod01lec06.mp4">Cryptanalysis of Classical Ciphers</option>
      
      <option  value="106105031/mod01lec07.mp4">Shannons Theory</option>
      
      <option  value="106105031/mod01lec08.mp4">Shannons Theory (Contd...1)</option>
      
      <option  value="106105031/mod01lec09.mp4">Shannons Theory (Contd...2)</option>
      
      <option  value="106105031/mod01lec10.mp4">Symmetric Key Ciphers</option>
      
      <option  value="106105031/mod01lec11.mp4">Block Cipher Standards (DES)</option>
      
      <option  value="106105031/mod01lec12.mp4">Block Cipher Standards (AES)</option>
      
      <option  value="106105031/mod01lec13.mp4">Block Cipher Standards (AES) (Contd.)</option>
      
      <option  value="106105031/mod01lec14.mp4">Linear Cryptanalysis</option>
      
      <option  value="106105031/mod01lec15.mp4">Differential Cryptanalysis</option>
      
      <option  value="106105031/mod01lec16.mp4">Few other Cryptanalytic Techniques</option>
      
      <option  value="106105031/mod01lec17.mp4">Overview on S-Box Design Principles</option>
      
      <option  value="106105031/mod01lec18.mp4">Modes of Operation of Block Ciphers</option>
      
      <option  value="106105031/mod01lec19.mp4">Stream Ciphers</option>
      
      <option  value="106105031/mod01lec20.mp4">Stream Ciphers (Contd...1)</option>
      
      <option  value="106105031/mod01lec21.mp4">Stream Ciphers (Contd...2)</option>
      
      <option  value="106105031/mod01lec22.mp4">Pseudorandomness</option>
      
      <option  value="106105031/mod01lec23.mp4">Cryptographic Hash Functions</option>
      
      <option  value="106105031/mod01lec24.mp4">Cryptographic Hash Functions (Contd...1)</option>
      
      <option  value="106105031/mod01lec25.mp4">Cryptographic Hash Functions (Contd...2)</option>
      
      <option  value="106105031/mod01lec26.mp4">Message Authentication Codes</option>
      
      <option  value="106105031/mod01lec27.mp4">More Number Theoretic Results</option>
      
      <option  value="106105031/mod01lec28.mp4">The RSA Cryptosystem</option>
      
      <option  value="106105031/mod01lec29.mp4">Primality Testing</option>
      
      <option  value="106105031/mod01lec30.mp4">Factoring Algorithms</option>
      
      <option  value="106105031/mod01lec31.mp4">Some Comments on the Security of RSA</option>
      
      <option  value="106105031/mod01lec32.mp4">Discrete Logarithm Problem (DLP)</option>
      
      <option  value="106105031/mod01lec33.mp4">The Diffie-Hellman Problem and Security of ElGamal Systems</option>
      
      <option  value="106105031/mod01lec34.mp4">An Introduction to Elliptic Curve Cryptography</option>
      
      <option  value="106105031/mod01lec35.mp4">Application of Elliptic Curves to Cryptography</option>
      
      <option  value="106105031/mod01lec36.mp4">Implementation of Elliptic Curve Cryptography</option>
      
      <option  value="106105031/mod01lec37.mp4">Secret Sharing Schemes</option>
      
      <option  value="106105031/mod01lec38.mp4">A Tutorial on Network Protocols</option>
      
      <option  value="106105031/mod01lec39.mp4">System Security</option>
      
      <option  value="106105031/mod01lec40.mp4">Firewalls and Intrusion Detection Systems</option>
      
      <option  value="106105031/mod01lec41.mp4">Side Channel Analysis of Cryptographic Implementations</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106105032</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Digital Image Processing</strong></td>
	<td><strong>Dr. G. Harit</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105032/m1l1.html">Introduction</option>
      
      <option  value="106105032/m1l2.html">Introduction (Contd.)</option>
      
      <option  value="106105032/m1l3.html">Introduction  (Contd.)</option>
      
      <option  value="106105032/m2l4.html">Spatial Domain Filtering</option>
      
      <option  value="106105032/m2l5.html">Spatial Domain Filtering (Contd)</option>
      
      <option  value="106105032/m2l6.html">Spatial Domain Filtering (Continued)</option>
      
      <option  value="106105032/m2l7.html">Spatial Domain Filtering (Contd.)</option>
      
      <option  value="106105032/m2l8.html">Spatial Domain Filtering    (Contd.)</option>
      
      <option  value="106105032/m3l9.html">Filtering in the Frequency Domain</option>
      
      <option  value="106105032/m3l10.html">Filtering in the Frequency Domain(Contd.)</option>
      
      <option  value="106105032/m3l11.html">Filtering in the Frequency Domain (Contd.)</option>
      
      <option  value="106105032/m3l12.html">Filtering in the Frequency Domain  (Contd.)</option>
      
      <option  value="106105032/m3l13.html">Filtering in the Frequency Domain   (Contd.)</option>
      
      <option  value="106105032/m3l14.html">Filtering in the Frequency Domain     (Contd.)</option>
      
      <option  value="106105032/m4l15.html">Image Restoration</option>
      
      <option  value="106105032/m4l16.html">Image Restoration (Contd.)</option>
      
      <option  value="106105032/m4l17.html">Image Restoration(Contd.)</option>
      
      <option  value="106105032/m4l18.html">Image Restoration  (Contd.)</option>
      
      <option  value="106105032/m4l19.html">Image Restoration    (Contd.)</option>
      
      <option  value="106105032/m5l20.html">Image Compression </option>
      
      <option  value="106105032/m5l21a.html">Image Compression (Contd.)</option>
      
      <option  value="106105032/m5l22.html">Image Compression(Contd.)</option>
      
      <option  value="106105032/m5l23.html">Image Compression  (Contd.)</option>
      
      <option  value="106105032/m5l24.html">Image Compression    (Contd.)</option>
      
      <option  value="106105032/m5l25a.html">Image Compression   (Contd.)</option>
      
      <option  value="106105032/m5l26.html">Image Compression  (Contd. )</option>
      
      <option  value="106105032/m5l27.html">Image Compression ( Contd.)</option>
      
      <option  value="106105032/m6l28.html">Wavelet based Image Compression</option>
      
      <option  value="106105032/m6l29.html">Wavelet based Image Compression (Contd.)</option>
      
      <option  value="106105032/m6l30a.html">Wavelet based Image Compression  (Contd.)</option>
      
      <option  value="106105032/m7l31.html">Morphological Image Processing</option>
      
      <option  value="106105032/m7l32.html"> Morphological Image Processing  (Contd.)</option>
      
      <option  value="106105032/m7l33.html">Morphological Image Processing (Contd. )</option>
      
      <option  value="106105032/m7l34.html">Morphological Image Processing ( Contd. )</option>
      
      <option  value="106105032/m7l35.html">Morphological Image Processing    (Contd.)</option>
      
      <option  value="106105032/m8l36.html">Image Segmentation</option>
      
      <option  value="106105032/m8l37.html">Image Segmentation  (Contd.)</option>
      
      <option  value="106105032/m8l38.html">Image Segmentation   (Contd.)</option>
      
      <option  value="106105032/m8l39.html">Image Segmentation     (Contd.)</option>
      
      <option  value="106105032/m8l40.html">Image Segmentation     (Contd .)</option>
      
      <option  value="106105032/m8l41.html">Image Segmentation(Contd.)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105034</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Low Power VLSI Circuits & Systems</strong></td>
	<td><strong>Prof. Ajit Pal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105034/mod01lec01.mp4">Introduction & Course Outline</option>
      
      <option  value="106105034/mod01lec02.mp4">MOS Transistors - I</option>
      
      <option  value="106105034/mod01lec03.mp4">MOS Transistors - II</option>
      
      <option  value="106105034/mod01lec04.mp4">MOS Transistors - III</option>
      
      <option  value="106105034/mod01lec05.mp4">MOS Transistors - IV</option>
      
      <option  value="106105034/mod01lec06.mp4">MOS Inverters - I</option>
      
      <option  value="106105034/mod01lec07.mp4">MOS Inverters - II</option>
      
      <option  value="106105034/mod01lec08.mp4">MOS Inverters - III</option>
      
      <option  value="106105034/mod01lec09.mp4">MOS Inverters - IV</option>
      
      <option  value="106105034/mod01lec10.mp4">Static CMOS Circuits - I</option>
      
      <option  value="106105034/mod01lec11.mp4">Static CMOS Circuits -II</option>
      
      <option  value="106105034/mod01lec12.mp4">MOS Dynamic Circuits -I</option>
      
      <option  value="106105034/mod01lec13.mp4">MOS Dynamic Circuits -II</option>
      
      <option  value="106105034/mod01lec14.mp4">Pass Transistor Logic Circuits - I</option>
      
      <option  value="106105034/mod01lec15.mp4">Pass Transistor Logic Circuits - II</option>
      
      <option  value="106105034/mod01lec16.mp4">MOS Memories</option>
      
      <option  value="106105034/mod01lec17.mp4">Finite State Machines</option>
      
      <option  value="106105034/mod01lec18.mp4">Switching Power Dissipation</option>
      
      <option  value="106105034/mod01lec19.mp4">Tutorial - I</option>
      
      <option  value="106105034/mod01lec20.mp4">Dynamic Power Dissipation</option>
      
      <option  value="106105034/mod01lec21.mp4">Leakage Power Dissipation</option>
      
      <option  value="106105034/mod01lec22.mp4">Supply Voltage Scaling - I</option>
      
      <option  value="106105034/mod01lec23.mp4">Supply Voltage Scaling - II</option>
      
      <option  value="106105034/mod01lec24.mp4">Supply Voltage Scaling - III</option>
      
      <option  value="106105034/mod01lec25.mp4">Supply Voltage Scaling - IV</option>
      
      <option  value="106105034/mod01lec26.mp4">Tutorial - II</option>
      
      <option  value="106105034/mod01lec27.mp4">Minimizing Switched Capacitance - I</option>
      
      <option  value="106105034/mod01lec28.mp4">Minimizing Switched Capacitance - II</option>
      
      <option  value="106105034/mod01lec29.mp4">Minimizing Switched Capacitance - III</option>
      
      <option  value="106105034/mod01lec30.mp4">Minimizing Switched Capacitance - IV</option>
      
      <option  value="106105034/mod01lec31.mp4">Minimizing Switched Capacitance - V</option>
      
      <option  value="106105034/mod01lec32.mp4">Minimizing Leakage Power - I</option>
      
      <option  value="106105034/mod01lec33.mp4">Minimizing Leakage Power - II</option>
      
      <option  value="106105034/mod01lec34.mp4">Minimizing Leakage Power - III</option>
      
      <option  value="106105034/mod01lec35.mp4">Variation Tolerant Design</option>
      
      <option  value="106105034/mod01lec36.mp4">Adiabatic Logic Circuits</option>
      
      <option  value="106105034/mod01lec37.mp4">Battery-Driven System Design</option>
      
      <option  value="106105034/mod01lec38.mp4">CAD Tools for Low Power</option>
      
      <option  value="106105034/mod01lec39.mp4">Tutorial - III</option>
      
      <option  value="106105034/mod01lec40.mp4">Course Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105036</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Real Time Systems</strong></td>
	<td><strong>Prof. Rajib Mall</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105036/mod01lec01.mp4">Introduction</option>
      
      <option  value="106105036/mod01lec02.mp4">Real - Time System Characteristics</option>
      
      <option  value="106105036/mod01lec03.mp4">Few Basic Issues</option>
      
      <option  value="106105036/mod01lec04.mp4">Modelling Timing Constraints</option>
      
      <option  value="106105036/mod01lec05.mp4">Modelling Timing Constraints (Contd.)</option>
      
      <option  value="106105036/mod01lec06.mp4">Basics of Real - Time Task Scheduling</option>
      
      <option  value="106105036/mod01lec07.mp4">Cyclic Scheduler</option>
      
      <option  value="106105036/mod01lec08.mp4">Event - Driven Scheduling</option>
      
      <option  value="106105036/mod01lec09.mp4">Rate Monotonic Scheduler</option>
      
      <option  value="106105036/mod01lec10.mp4">RMA Scheduling : Further Issues</option>
      
      <option  value="106105036/mod01lec11.mp4">Deadline Monotonic Scheduling and Other Issues </option>
      
      <option  value="106105036/mod01lec12.mp4">Few Issues in Use of RMA</option>
      
      <option  value="106105036/mod01lec13.mp4">Resource Sharing Among Real-Time Tasks</option>
      
      <option  value="106105036/mod01lec14.mp4">Highest Locker and Priority Ceiling Protocols</option>
      
      <option  value="106105036/mod01lec15.mp4">An Analysis of Priority Ceiling Protocol</option>
      
      <option  value="106105036/mod01lec16.mp4">Handling Task Dependencies</option>
      
      <option  value="106105036/mod01lec17.mp4">Real-Time Task Scheduling on Multiprocessors and Distributed Systems</option>
      
      <option  value="106105036/mod01lec18.mp4">Real-Time Task Scheduling on Multiprocessors and Distributed Systems (Contd.)</option>
      
      <option  value="106105036/mod01lec19.mp4">Clock Synchronization in Distributed Real-Time Systems</option>
      
      <option  value="106105036/mod01lec20.mp4">Internal Clock Synchronization in Presence of Byzantine Clocks</option>
      
      <option  value="106105036/mod01lec21.mp4">A Few Basic Issues in Real-Time Operating Systems</option>
      
      <option  value="106105036/mod01lec22.mp4">Tutorial - I</option>
      
      <option  value="106105036/mod01lec23.mp4">A Few Basic Issues in Real-Time Operating Systems (Contd.)</option>
      
      <option  value="106105036/mod01lec24.mp4">Unix and Windows as RTOS</option>
      
      <option  value="106105036/mod01lec25.mp4">Real - Time POSIX</option>
      
      <option  value="106105036/mod01lec26.mp4">Real - Time POSIX (Contd.)</option>
      
      <option  value="106105036/mod01lec27.mp4">Open Source and Commercial RTOS</option>
      
      <option  value="106105036/mod01lec28.mp4">Open Source and Commercial RTOS (Contd.)</option>
      
      <option  value="106105036/mod01lec29.mp4">Benchmarking Real - Time Computer & Operating Systems</option>
      
      <option  value="106105036/mod01lec30.mp4">Benchmarking Real - Time Computer & Operating Systems (Contd.)</option>
      
      <option  value="106105036/mod01lec31.mp4">Real - Time Communications</option>
      
      <option  value="106105036/mod01lec32.mp4">Few Basic Issues in Real - Time Communications</option>
      
      <option  value="106105036/mod01lec33.mp4">Review of Computer Networking</option>
      
      <option  value="106105036/mod01lec34.mp4">Real - Time Communication in a LAN</option>
      
      <option  value="106105036/mod01lec35.mp4">Real - Time Communication in a LAN (Contd.)</option>
      
      <option  value="106105036/mod01lec36.mp4">Performance of Two Real -Time Communication Protocols</option>
      
      <option  value="106105036/mod01lec37.mp4">Real - Time Communication over Packet Switched Networks</option>
      
      <option  value="106105036/mod01lec38.mp4">Real - Time Communication over Packet Switched Networks (Contd.)</option>
      
      <option  value="106105036/mod01lec39.mp4">Real - Time Communication over Packet Switched Networks  (Contd.)</option>
      
      <option  value="106105036/mod01lec40.mp4">Real - Time Databases</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105077</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Artificial Intelligence</strong></td>
	<td><strong>Prof. Anupam Basu,Prof. S. Sarkar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105077/lec01.mp4">Introduction to Artificial Intelligence</option>
      
      <option  value="106105077/lec02.mp4">Intelligent Agents</option>
      
      <option  value="106105077/lec03.mp4">State Space Search</option>
      
      <option  value="106105077/lec04.mp4">Uninformed Search</option>
      
      <option  value="106105077/lec05.mp4">Informed Search</option>
      
      <option  value="106105077/lec06.mp4">Informed Search - 2</option>
      
      <option  value="106105077/lec07.mp4">Two Players Games - I</option>
      
      <option  value="106105077/lec08.mp4">Two Players Games - II</option>
      
      <option  value="106105077/lec09.mp4">Constraint Satisfaction Problems - 1</option>
      
      <option  value="106105077/lec10.mp4">Constraint Satisfaction Problems 2</option>
      
      <option  value="106105077/lec11.mp4">Knowledge Representation and Logic</option>
      
      <option  value="106105077/lec12.mp4">Interface in Propositional Logic</option>
      
      <option  value="106105077/lec13.mp4">First Order Logic</option>
      
      <option  value="106105077/lec14.mp4">Reasoning Using First Order Logic</option>
      
      <option  value="106105077/lec15.mp4">Resolution in FOPL</option>
      
      <option  value="106105077/lec16.mp4">Rule Based System</option>
      
      <option  value="106105077/lec17.mp4">Rule Based Systems II</option>
      
      <option  value="106105077/lec18.mp4">Semantic Net</option>
      
      <option  value="106105077/lec19.mp4">Reasoning in Semantic Net</option>
      
      <option  value="106105077/lec20.mp4">Frames</option>
      
      <option  value="106105077/lec21.mp4">Planning - 1</option>
      
      <option  value="106105077/lec22.mp4">Planning - 2</option>
      
      <option  value="106105077/lec23.mp4">Planning - 3</option>
      
      <option  value="106105077/lec24.mp4">Planning - 4</option>
      
      <option  value="106105077/lec25.mp4">Rule Based Expert System</option>
      
      <option  value="106105077/lec26.mp4">Reasoning with Uncertainty - I</option>
      
      <option  value="106105077/lec27.mp4">Reasoning with Uncertainty - II</option>
      
      <option  value="106105077/lec28.mp4">Reasoning with Uncertainty III</option>
      
      <option  value="106105077/lec29.mp4">Reasoning with Uncertainty - IV</option>
      
      <option  value="106105077/lec30.mp4">Fuzzy Reasoning - I</option>
      
      <option  value="106105077/lec31.mp4">Fuzzy Reasoning - II</option>
      
      <option  value="106105077/lec32.mp4">Introduction to Learning - I</option>
      
      <option  value="106105077/lec33.mp4">Introduction to Learning - II</option>
      
      <option  value="106105077/lec34.mp4">Rule Induction and Decision Trees - I</option>
      
      <option  value="106105077/lec35.mp4">Rule Induction and Decision Trees - II</option>
      
      <option  value="106105077/lec36.mp4">Learning Using neural Networks - I</option>
      
      <option  value="106105077/lec37.mp4">Learning Using Neural Networks - II</option>
      
      <option  value="106105077/lec38.mp4">Probabilistic Learning</option>
      
      <option  value="106105077/lec39.mp4">Natural Language Processing - I</option>
      
      <option  value="106105077/lec40.mp4">Natural Language Processing II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105079</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Artificial Intelligence(Prof.P.Dasgupta)</strong></td>
	<td><strong>Prof. P. Dasgupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105079/lec01.mp4">Introduction to Artificial Intelligence</option>
      
      <option  value="106105079/lec02.mp4">Problem Solving by Search</option>
      
      <option  value="106105079/lec03.mp4">Searching with Costs</option>
      
      <option  value="106105079/lec04.mp4">Informed State Space Search</option>
      
      <option  value="106105079/lec05.mp4">Heuristic Search: A* and Beyond</option>
      
      <option  value="106105079/lec06.mp4">Problem Reduction Search: AND/OR Graphs</option>
      
      <option  value="106105079/lec07.mp4">Searching Game Trees</option>
      
      <option  value="106105079/lec08.mp4">Knowledge Based Systems: Logic and Deduction</option>
      
      <option  value="106105079/lec09.mp4">First Order Logic</option>
      
      <option  value="106105079/lec10.mp4">Inference in First Order Logic</option>
      
      <option  value="106105079/lec11.mp4">Resolution - Refutation Proofs</option>
      
      <option  value="106105079/lec12.mp4">Resolution Refutation Proofs</option>
      
      <option  value="106105079/lec13.mp4">Logic Programming : Prolog</option>
      
      <option  value="106105079/lec14.mp4">Prolog Programming</option>
      
      <option  value="106105079/lec15.mp4">Prolog: Exercising Control</option>
      
      <option  value="106105079/lec16.mp4">Additional Topics</option>
      
      <option  value="106105079/lec17.mp4">Introduction to Planning</option>
      
      <option  value="106105079/lec18.mp4">Partial Order Planning</option>
      
      <option  value="106105079/lec19.mp4">GraphPLAN and SATPlan</option>
      
      <option  value="106105079/lec20.mp4">SATPlan</option>
      
      <option  value="106105079/lec21.mp4">Reasoning under uncertainty</option>
      
      <option  value="106105079/lec22.mp4">Bayesian Networks</option>
      
      <option  value="106105079/lec23.mp4">Reasoning with Bayes Networks</option>
      
      <option  value="106105079/lec24.mp4">Reasoning with Bayes networks (Contd.)</option>
      
      <option  value="106105079/lec25.mp4">Reasoning under uncertainty: Issues</option>
      
      <option  value="106105079/lec26.mp4">Learning : Decision Trees</option>
      
      <option  value="106105079/lec27.mp4">Learning : Neural Networks</option>
      
      <option  value="106105079/lec28.mp4">Back Propagation Learning</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105081</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Networks</strong></td>
	<td><strong>Prof. Sujoy Ghosh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105081/lec01.mp4">Emergence of Networks & Reference Models</option>
      
      <option  value="106105081/lec02.mp4">Network Topology</option>
      
      <option  value="106105081/lec03.mp4">Physical Medium - I</option>
      
      <option  value="106105081/lec04.mp4">Physical Medium - II</option>
      
      <option  value="106105081/lec05.mp4">Multiplexing (Sharing a Medium)</option>
      
      <option  value="106105081/lec06.mp4">Telecom Networks</option>
      
      <option  value="106105081/lec07.mp4">Switches - I</option>
      
      <option  value="106105081/lec08.mp4">Pocket Switches</option>
      
      <option  value="106105081/lec09.mp4">SONET/SDH</option>
      
      <option  value="106105081/lec10.mp4">Fiber Optic Components</option>
      
      <option  value="106105081/lec11.mp4">Routing and Wavelength Assignment</option>
      
      <option  value="106105081/lec12.mp4">Protection and Restoration</option>
      
      <option  value="106105081/lec13.mp4">Multiple Access</option>
      
      <option  value="106105081/lec14.mp4">Token Based Mac</option>
      
      <option  value="106105081/lec15.mp4">Data Link Protocols</option>
      
      <option  value="106105081/lec16.mp4">Error Control</option>
      
      <option  value="106105081/lec17.mp4">Stop & Wait Protocol</option>
      
      <option  value="106105081/lec18.mp4">Satellite Communication</option>
      
      <option  value="106105081/lec19.mp4">Ethernet - CSMA/CD</option>
      
      <option  value="106105081/lec20.mp4">Modern Ethernet</option>
      
      <option  value="106105081/lec21.mp4">Local Internetworking</option>
      
      <option  value="106105081/lec22.mp4">Cellular Networks</option>
      
      <option  value="106105081/lec23.mp4">Wireless Network</option>
      
      <option  value="106105081/lec24.mp4">ATM : Asynchronous Transfer Mode</option>
      
      <option  value="106105081/lec25.mp4">ATM Signaling, Routing and LAN Emulation</option>
      
      <option  value="106105081/lec26.mp4">Introduction to Routing</option>
      
      <option  value="106105081/lec27.mp4">RIP - Distance Vector Routing</option>
      
      <option  value="106105081/lec28.mp4">IP version 4</option>
      
      <option  value="106105081/lec29.mp4">IP Version 6 & Mobile IP</option>
      
      <option  value="106105081/lec30.mp4">UDP & Client Server</option>
      
      <option  value="106105081/lec31.mp4">TCP</option>
      
      <option  value="106105081/lec32.mp4">IP Multicasting</option>
      
      <option  value="106105081/lec33.mp4">DHCP and ICMP</option>
      
      <option  value="106105081/lec34.mp4">DNS & Directory</option>
      
      <option  value="106105081/lec35.mp4">Congestion Control</option>
      
      <option  value="106105081/lec36.mp4">QOS & Multimedia</option>
      
      <option  value="106105081/lec37.mp4">Network Management</option>
      
      <option  value="106105081/lec38.mp4">Security</option>
      
      <option  value="106105081/lec39.mp4">FTP - SMTP</option>
      
      <option  value="106105081/lec40.mp4">HTTP</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105082</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Data Communication</strong></td>
	<td><strong>Prof. Ajit Pal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105082/lec01.mp4">Introduction and Course Outline - Data Communication</option>
      
      <option  value="106105082/lec02.mp4">Layered Architecture</option>
      
      <option  value="106105082/lec03.mp4">Data and Signal</option>
      
      <option  value="106105082/lec04.mp4">Transmission Impairments and Channel Capacity</option>
      
      <option  value="106105082/lec05.mp4">Guided Transmission Media</option>
      
      <option  value="106105082/lec06.mp4">Unguided Media</option>
      
      <option  value="106105082/lec07.mp4">Transmission of Digital Signal - I</option>
      
      <option  value="106105082/lec08.mp4">Transmission of Digital Signal - II</option>
      
      <option  value="106105082/lec09.mp4">Transmission of Analog Signal - I</option>
      
      <option  value="106105082/lec10.mp4">Transmission of Analog Signal - II</option>
      
      <option  value="106105082/lec11a.mp4">Multiplexing</option>
      
      <option  value="106105082/lec11b.mp4">Multiplexing</option>
      
      <option  value="106105082/lec12.mp4">Multiplexing Applications - I</option>
      
      <option  value="106105082/lec13.mp4">Multiplexing Applications - II</option>
      
      <option  value="106105082/lec14.mp4">Interfacing to the Media</option>
      
      <option  value="106105082/lec15.mp4">Error Detection and Correction</option>
      
      <option  value="106105082/lec16.mp4">Flow and Error Control</option>
      
      <option  value="106105082/lec17.mp4">Data Link Control</option>
      
      <option  value="106105082/lec18.mp4">Switching Techniques Circuit Switching</option>
      
      <option  value="106105082/lec19.mp4">Switching Techniques Packet Switching</option>
      
      <option  value="106105082/lec20.mp4">Routing - I</option>
      
      <option  value="106105082/lec21.mp4">Routing - II</option>
      
      <option  value="106105082/lec22.mp4">Congestion Control</option>
      
      <option  value="106105082/lec23.mp4">X.25 and Frame Relay</option>
      
      <option  value="106105082/lec24.mp4">ATM</option>
      
      <option  value="106105082/lec25.mp4">Medium Access Control - I</option>
      
      <option  value="106105082/lec26.mp4">Medium Access Control - II</option>
      
      <option  value="106105082/lec27.mp4">Medium Access Control - III</option>
      
      <option  value="106105082/lec28.mp4">IEEE 802 LANs</option>
      
      <option  value="106105082/lec29.mp4">High Speed LANs</option>
      
      <option  value="106105082/lec30.mp4">Wireless LANs</option>
      
      <option  value="106105082/lec31.mp4">Cellular Telephone Systems</option>
      
      <option  value="106105082/lec32.mp4">Satellite Communications</option>
      
      <option  value="106105082/lec33.mp4">Internet and Internetworking</option>
      
      <option  value="106105082/lec34.mp4">TCP/IP - I</option>
      
      <option  value="106105082/lec35.mp4">TCP/IP - II</option>
      
      <option  value="106105082/lec36.mp4">Multimedia Networks</option>
      
      <option  value="106105082/lec37.mp4">Audio and Video Compression</option>
      
      <option  value="106105082/lec38.mp4">Multimedia Services</option>
      
      <option  value="106105082/lec39.mp4">Secured Communication - I</option>
      
      <option  value="106105082/lec40.mp4">Secured Communication - II</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105083</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Electronic Design Automation</strong></td>
	<td><strong>Prof. Indranil Sengupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105083/lec01.mp4">Introduction</option>
      
      <option  value="106105083/lec02.mp4">Verilog: Part - I</option>
      
      <option  value="106105083/lec03.mp4">Verilog: Part - II</option>
      
      <option  value="106105083/lec04.mp4">Verilog: Part - III</option>
      
      <option  value="106105083/lec05.mp4">Verilog: Part - IV</option>
      
      <option  value="106105083/lec06.mp4">Verilog: Part - V</option>
      
      <option  value="106105083/lec07.mp4">Verilog: Part - VI</option>
      
      <option  value="106105083/lec08.mp4">Synthesis: Part - I</option>
      
      <option  value="106105083/lec09.mp4">Synthesis: Part - II</option>
      
      <option  value="106105083/lec10.mp4">Synthesis: Part - III</option>
      
      <option  value="106105083/lec11.mp4">Synthesis: Part - IV</option>
      
      <option  value="106105083/lec12.mp4">Synthesis: Part - V</option>
      
      <option  value="106105083/lec13.mp4">Synthesis: Part - VI</option>
      
      <option  value="106105083/lec14.mp4">Synthesis: Part - VII</option>
      
      <option  value="106105083/lec15.mp4">Backend Design: Part - I</option>
      
      <option  value="106105083/lec16.mp4">Backend Design: Part - II</option>
      
      <option  value="106105083/lec17.mp4">Backend Design: Part - III</option>
      
      <option  value="106105083/lec18.mp4">Backend Design: Part - IV</option>
      
      <option  value="106105083/lec19.mp4">Backend Design Part - V</option>
      
      <option  value="106105083/lec20.mp4">Backend Design Part - VI</option>
      
      <option  value="106105083/lec21.mp4">Backend Design Part - VII</option>
      
      <option  value="106105083/lec22.mp4">Backend Design Part - VIII</option>
      
      <option  value="106105083/lec23.mp4">Backend Design Part - IX</option>
      
      <option  value="106105083/lec24.mp4">Backend Design Part - X</option>
      
      <option  value="106105083/lec25.mp4">Backend Design Part - XI</option>
      
      <option  value="106105083/lec26.mp4">Backend Design Part - XII</option>
      
      <option  value="106105083/lec27.mp4">Backend Design Part - XIII</option>
      
      <option  value="106105083/lec28.mp4">Backend Design Part - XIV</option>
      
      <option  value="106105083/lec29.mp4">Backend Design Part - XV</option>
      
      <option  value="106105083/lec30.mp4">Testing Part - I</option>
      
      <option  value="106105083/lec31.mp4">Testing Part - II</option>
      
      <option  value="106105083/lec32.mp4">Testing Part - III</option>
      
      <option  value="106105083/lec33.mp4">Testing Part - IV</option>
      
      <option  value="106105083/lec34.mp4">Testing Part - V</option>
      
      <option  value="106105083/lec35.mp4">Testing Part - VI</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106105084</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Internet Technology</strong></td>
	<td><strong>Prof. Indranil Sengupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105084/lec01.mp4">Introduction To Internet</option>
      
      <option  value="106105084/lec02.mp4">Review Of Network Technologies</option>
      
      <option  value="106105084/lec03.mp4">TCP/IP - Part-1</option>
      
      <option  value="106105084/lec04.mp4">TCP/IP-Part-II</option>
      
      <option  value="106105084/lec05.mp4">TCP/IP-Part-III</option>
      
      <option  value="106105084/lec06.mp4">IP Subnetting and Addressing</option>
      
      <option  value="106105084/lec07.mp4">Internet Routing Protocol Part -I</option>
      
      <option  value="106105084/lec08.mp4">Internet Routing Protocol- Part-II</option>
      
      <option  value="106105084/lec09.mp4">Client Server Concepts DNS,Telnet,Ftp</option>
      
      <option  value="106105084/lec10.mp4">Electronic Mail</option>
      
      <option  value="106105084/lec11.mp4">World Wide Web Part-I</option>
      
      <option  value="106105084/lec12.mp4">World Wide Web - Part-II</option>
      
      <option  value="106105084/lec13.mp4">HTML-Part-I</option>
      
      <option  value="106105084/lec14.mp4">HTML-Part-II</option>
      
      <option  value="106105084/lec15.mp4">HTML-Part-III</option>
      
      <option  value="106105084/lec16.mp4">Extensible Markup Language (XML)</option>
      
      <option  value="106105084/lec17.mp4">Html Forms</option>
      
      <option  value="106105084/lec18.mp4">Image Maps</option>
      
      <option  value="106105084/lec19.mp4">CGI Scripts</option>
      
      <option  value="106105084/lec20.mp4">Other Technologies</option>
      
      <option  value="106105084/lec21.mp4">PERL Part-I</option>
      
      <option  value="106105084/lec22.mp4">PERL - Part II</option>
      
      <option  value="106105084/lec23.mp4">PERL-Part III</option>
      
      <option  value="106105084/lec24.mp4">PERL-Part IV</option>
      
      <option  value="106105084/lec25.mp4">Javascript -Part :I</option>
      
      <option  value="106105084/lec26.mp4">Javascript Examples (Continued)</option>
      
      <option  value="106105084/lec27.mp4">Using Cookies</option>
      
      <option  value="106105084/lec28.mp4">Java Applets -Part:I</option>
      
      <option  value="106105084/lec29.mp4">Java Applets - Part:2</option>
      
      <option  value="106105084/lec30.mp4">Client-Server Programming In Java</option>
      
      <option  value="106105084/lec31.mp4">Intranet, Extranet,Firewall</option>
      
      <option  value="106105084/lec32.mp4">Basic Cryptographic Concepts Part - I</option>
      
      <option  value="106105084/lec33.mp4">Basic Cryptographic Concepts Part - II</option>
      
      <option  value="106105084/lec34.mp4">Basic Cryptographic Concepts Part - III</option>
      
      <option  value="106105084/lec35.mp4">Electronic Commerce</option>
      
      <option  value="106105084/lec36.mp4">Streaming Multimedia Applications</option>
      
      <option  value="106105084/lec37.mp4">Internet Telephony</option>
      
      <option  value="106105084/lec38.mp4">Search Engine And Web Crawler - Part-I</option>
      
      <option  value="106105084/lec39.mp4">Search Engine And Web Crawlers: Part-II</option>
      
      <option  value="106105084/lec40.mp4">Course Summary And Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">

	<tr>
	<td><strong>106105085</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Programming and Data Structure</strong></td>
	<td><strong>Dr. P.P.Chakraborty</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106105085/lec01.mp4">Introduction</option>
      
      <option  value="106105085/lec02.mp4">C Programming - I</option>
      
      <option  value="106105085/lec03.mp4">C Programming - II</option>
      
      <option  value="106105085/lec04.mp4">C Programming - III</option>
      
      <option  value="106105085/lec05.mp4">Data Structuring: Case Study - I</option>
      
      <option  value="106105085/lec06.mp4">Data Structuring: Case Study - II</option>
      
      <option  value="106105085/lec07.mp4">Data Structuring: Case Study - III</option>
      
      <option  value="106105085/lec08.mp4">Problem Decomposition By Recursion - I</option>
      
      <option  value="106105085/lec09.mp4">Problem Decomposition By Recursion - II</option>
      
      <option  value="106105085/lec10.mp4">Problem Decomposition By Recursion - III</option>
      
      <option  value="106105085/lec11.mp4">Merge sort And Quick sort</option>
      
      <option  value="106105085/lec12.mp4">Characters And Strings</option>
      
      <option  value="106105085/lec13.mp4">Arrays: Addresses And Contents</option>
      
      <option  value="106105085/lec14.mp4">Structures - I</option>
      
      <option  value="106105085/lec15.mp4">Structures - II</option>
      
      <option  value="106105085/lec16.mp4">Dynamic Allocation Part - I</option>
      
      <option  value="106105085/lec17.mp4">Linked Lists - I</option>
      
      <option  value="106105085/lec18.mp4">Complexity (Efficiency) of Algorithms</option>
      
      <option  value="106105085/lec19.mp4">Asymptotic Growth Functions</option>
      
      <option  value="106105085/lec20.mp4">Asymptotic Analysis of Algorithms</option>
      
      <option  value="106105085/lec21.mp4">Data Structuring</option>
      
      <option  value="106105085/lec22.mp4">Search Trees</option>
      
      <option  value="106105085/lec23.mp4">Search Trees - II</option>
      
      <option  value="106105085/lec24.mp4">Search Trees - III</option>
      
      <option  value="106105085/lec25.mp4">2-3 Trees</option>
      
      <option  value="106105085/lec26.mp4">Algorithm Design - I</option>
      
      <option  value="106105085/lec27.mp4">Algorithm Design - II</option>
      
      <option  value="106105085/lec28.mp4">Algorithm Design - III</option>
      
      <option  value="106105085/lec29.mp4">Graphs - I</option>
      
      <option  value="106105085/lec30.mp4">Graphs - II</option>
      
      <option  value="106105085/lec31.mp4">Graphs - III</option>
      
      <option  value="106105085/lec32.mp4">Conclusions</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106048</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Performance Evaluation of Computer Systems</strong></td>
	<td><strong>Prof. Krishna Moorthy Sivalingam</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106106048/mod01lec01.mp4">Introduction to performance evaluation of computer systems</option>
      
      <option  value="106106048/mod01lec02.mp4">How to avoid common mistakes</option>
      
      <option  value="106106048/mod01lec03.mp4">Selection of techniques and metrics</option>
      
      <option  value="106106048/mod01lec04.mp4">Case study: Selection of techniques and metrics</option>
      
      <option  value="106106048/mod01lec05.mp4">Random Variables and probability distributions</option>
      
      <option  value="106106048/mod01lec06.mp4">Probability distributions-I</option>
      
      <option  value="106106048/mod01lec07.mp4">Probability distributions-II</option>
      
      <option  value="106106048/mod01lec08.mp4">Probability distributions-III</option>
      
      <option  value="106106048/mod01lec09.mp4">Stochastic process</option>
      
      <option  value="106106048/mod01lec10.mp4">Markov Chain</option>
      
      <option  value="106106048/mod01lec11.mp4">Slotted Aloha protocol model and discrete-time birth death process</option>
      
      <option  value="106106048/mod01lec12a.mp4">Continuous time Markov chain and queuing theory-I</option>
      
      <option  value="106106048/mod01lec12b.mp4"> Queuing theory � I (Continued)</option>
      
      <option  value="106106048/mod01lec13.mp4">Queuing theory-II</option>
      
      <option  value="106106048/mod01lec14.mp4">Queuing theory-III</option>
      
      <option  value="106106048/mod01lec15.mp4">Queuing theory-IV</option>
      
      <option  value="106106048/mod01lec16.mp4">Queuing theory-V</option>
      
      <option  value="106106048/mod01lec17.mp4">Queuing theory-VI</option>
      
      <option  value="106106048/mod01lec18.mp4">Queuing networks-I</option>
      
      <option  value="106106048/mod01lec19.mp4">Queuing networks-II</option>
      
      <option  value="106106048/mod01lec20.mp4">Slotted Aloha Markov model</option>
      
      <option  value="106106048/mod01lec21.mp4">Simulations-I</option>
      
      <option  value="106106048/mod01lec22.mp4">Simulations-II</option>
      
      <option  value="106106048/mod01lec23.mp4">Simulations-III</option>
      
      <option  value="106106048/mod01lec24.mp4">Operational laws-I</option>
      
      <option  value="106106048/mod01lec25.mp4">Operational laws-II</option>
      
      <option  value="106106048/mod01lec26.mp4">Open and closed queuing networks</option>
      
      <option  value="106106048/mod01lec27.mp4">Approximate MVA</option>
      
      <option  value="106106048/mod3lec28.mp4">Convolution algorithm-I</option>
      
      <option  value="106106048/mod01lec29.mp4">Convolution algorithm-II</option>
      
      <option  value="106106048/mod01lec30.mp4">Load-dependent service centers</option>
      
      <option  value="106106048/mod01lec31.mp4">Hierarchical decomposition</option>
      
      <option  value="106106048/mod01lec32.mp4">Balanced Job Bounds</option>
      
      <option  value="106106048/mod01lec33.mp4">Confidence interval for propotions and introduction to experimental design</option>
      
      <option  value="106106048/mod01lec34.mp4">2k  factorial design</option>
      
      <option  value="106106048/mod01lec35.mp4">2k r factorial design and 2k-p fractional factorial design</option>
      
      <option  value="106106048/mod01lec36.mp4">Programming aspects of discrete-event simulations-I</option>
      
      <option  value="106106048/mod01lec37.mp4">Programming aspects of discrete-event simulations-II</option>
      
      <option  value="106106048/mod01lec38.mp4">Discrete-event simulations-III</option>
      
      <option  value="106106048/mod01lec39.mp4">PetriNets-I</option>
      
      <option  value="106106048/mod01lec40.mp4">PetriNets-II</option>
      
      <option  value="106106048/mod01lec41.mp4">PetriNets-III</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106049</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Theory of Automata, Formal Languages and Computation</strong></td>
	<td><strong>Prof. Kamala Krithivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106106049/mod01lec01.mp4">GRAMMARS AND NATURAL LANGUAGE PROCESSING</option>
      
      <option  value="106106049/mod01lec02.mp4">GRAMMARS AND LANGUAGES GENERATED</option>
      
      <option  value="106106049/mod01lec03.mp4">GRAMMARS AND LANGUAGES GENERATED (Contd)</option>
      
      <option  value="106106049/mod01lec04.mp4">AMBIGUITY IN CFG</option>
      
      <option  value="106106049/mod01lec05.mp4">SIMPLICATION OF CFG</option>
      
      <option  value="106106049/mod01lec06.mp4">REMOVAL OF UNIT PRODUCTIONS , CHOMSKY NORMAL FORM FOR CFG</option>
      
      <option  value="106106049/mod01lec07.mp4">GREIBACH NORMAL FORM FOR CFG</option>
      
      <option  value="106106049/mod02lec08.mp4">FINAL STATE AUTOMATA </option>
      
      <option  value="106106049/mod02lec09.mp4">NON DETERMINISTIC FSA</option>
      
      <option  value="106106049/mod02lec10.mp4">NON DETERMINISTIC FSA (Contd)</option>
      
      <option  value="106106049/mod02lec11.mp4">NON DETERMINISTIC FSA WITH E(Epsilon)- MOVES</option>
      
      <option  value="106106049/mod02lec12.mp4">EQUIVALENCE BETWEEN FSA AND TYPE 3 GRAMMARS</option>
      
      <option  value="106106049/mod02lec13.mp4">REGULAR EXPRESSIONS , REGULAR EXPRESSIONS TO NFSA </option>
      
      <option  value="106106049/mod02lec14.mp4">DFSA TO REGULAR EXPRESSIONS </option>
      
      <option  value="106106049/mod02lec15.mp4">PROBLEMS AND SOLUTIONS-I</option>
      
      <option  value="106106049/mod02lec16.mp4">PUMPING LEMMAS FOR REGULAR SETS AND CFL</option>
      
      <option  value="106106049/mod02lec17.mp4">MYHILL - NERODE THEOREM </option>
      
      <option  value="106106049/mod02lec18.mp4">MINIMIZATION OF DFSA </option>
      
      <option  value="106106049/mod02lec19.mp4">FSA WITH OUTPUT MOORE AND MEALY MACHINES </option>
      
      <option  value="106106049/mod03lec20.mp4">PUSHDOWN AUTOMATA </option>
      
      <option  value="106106049/mod03lec21.mp4">PUSHDOWN AUTOMATA , EQUIVALENCE BETWEEN ACCEPTANCE BY EMPTY STORE AND ACCEPTANCE BY FINAL STATE </option>
      
      <option  value="106106049/mod03lec22.mp4">PUSHDOWN AUTOMATA  CFG TO PDA </option>
      
      <option  value="106106049/mod03lec23.mp4">PUSHDOWN AUTOMATA  PDA TO CFG</option>
      
      <option  value="106106049/mod04lec24.mp4">PROBLEMS AND SOLUTIONS-II</option>
      
      <option  value="106106049/mod04lec25.mp4">PROBLEMS AND SOLUTIONS - III</option>
      
      <option  value="106106049/mod05lec26.mp4">TURING MACHINES </option>
      
      <option  value="106106049/mod05lec27.mp4">TURING MACHINES (Contd)</option>
      
      <option  value="106106049/mod05lec28.mp4">TURING MACHINE AS ACCEPTOR , TECHNIQUES FOR TM CONSTRUCTION</option>
      
      <option  value="106106049/mod05lec29.mp4">GENERALIZED VERSIONS OF TURING MACHINES </option>
      
      <option  value="106106049/mod05lec30.mp4">TURING MACHINE AS A GENERATING DEVICE </option>
      
      <option  value="106106049/mod06lec31.mp4">RECURSIVE SETS , RECURSIVELY INNUMERABLE SETS , ENCODING OF TM , HALTING PROBLEM</option>
      
      <option  value="106106049/mod06lec32.mp4">PROBLEMS AND INSTANCES , UNIVERSAL TM , DECIDABILITY </option>
      
      <option  value="106106049/mod06lec33.mp4">RICE'S THEOREM , LINEAR BOUNDED AUTOMATA , PROPERTIES OF TM</option>
      
      <option  value="106106049/mod06lec34.mp4">POST'S CORRESPONDENCE PROBLEMS</option>
      
      <option  value="106106049/mod07lec35.mp4">POST'S CORRESPONDENCE PROBLEMS (Contd), TIME AND TAPE COMPLEXITY OT TM </option>
      
      <option  value="106106049/mod07lec36.mp4">NP - COMPLETE PROBLEMS , COOK'S THEOREM</option>
      
      <option  value="106106049/mod07lec37.mp4">NP - COMPLETE PROBLEMS (Contd)</option>
      
      <option  value="106106049/mod08lec38.mp4">REGULATED REWRITING </option>
      
      <option  value="106106049/mod08lec39.mp4">L - SYSTEMS </option>
      
      <option  value="106106049/mod08lec40.mp4">GRAMMAR SYSTEMS </option>
      
      <option  value="106106049/mod09lec41.mp4">DNA COMPUTING </option>
      
      <option  value="106106049/mod09lec42.mp4">MEMBRANE COMPUTING </option>
          </select></td>
	
	</tr>
	</form>
    
      <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106106088</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>CAD for VLSI Design I</strong></td>
	<td><strong>Prof. Shankar Balachandran,Prof. V. Kamakoti</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106106088/CAD_for_VLSI_Design_I/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
      <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106089</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>CAD for VLSI Design II</strong></td>
	<td><strong>Prof. Shankar Balachandran,Prof. V. Kamakoti</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106106089/CAD_for_VLSI_Design_II/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106090</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Graphics</strong></td>
	<td><strong>Prof. Sukhendu Das</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106106090/lec01.mp4">Introduction</option>
      
      <option  value="106106090/lec02.mp4">CRT Display Devices</option>
      
      <option  value="106106090/lec03.mp4">CRT Display Devices (Contd)</option>
      
      <option  value="106106090/lec04.mp4">CRT Display Devices (Contd)</option>
      
      <option  value="106106090/lec05.mp4">CRT Display Devices (Contd)</option>
      
      <option  value="106106090/lec06.mp4">Transformations in 2D</option>
      
      <option  value="106106090/lec07.mp4">Transformations in 2D (Contd)</option>
      
      <option  value="106106090/lec08.mp4">Three Dimensional Graphics</option>
      
      <option  value="106106090/lec09.mp4">Three Dimensional Graphics (Contd)</option>
      
      <option  value="106106090/lec10.mp4">Three Dimensional Graphics (Contd)</option>
      
      <option  value="106106090/lec11.mp4">Projection Transformations And Viewing Pipeline</option>
      
      <option  value="106106090/lec12.mp4">3D Viewing - Projection Transformations And Viewing Pipeline</option>
      
      <option  value="106106090/lec13.mp4">Scan Converting Lines, Circles And Ellipses</option>
      
      <option  value="106106090/lec14.mp4">Scan Converting Lines, Circles And Ellipses (Contd)</option>
      
      <option  value="106106090/lec15.mp4">Scan Converting Lines, Circles And Ellipses (Contd)</option>
      
      <option  value="106106090/lec16.mp4">Scan Converting Lines, Circles And Ellipses (Contd)</option>
      
      <option  value="106106090/lec17.mp4">Scan Converting Lines, Circles And Ellipses (Contd)</option>
      
      <option  value="106106090/lec18.mp4">Polyfill- Scan Conversion Of A Polygon</option>
      
      <option  value="106106090/lec19.mp4">Scan Conversion Of A Polygon (Contd)</option>
      
      <option  value="106106090/lec20.mp4">Clipping - Lines And Polygons</option>
      
      <option  value="106106090/lec21.mp4">Clipping Lines And Polygons</option>
      
      <option  value="106106090/lec22.mp4">Clipping Lines</option>
      
      <option  value="106106090/lec23.mp4">Solid Modelling</option>
      
      <option  value="106106090/lec24.mp4">Solid Modelling</option>
      
      <option  value="106106090/lec25.mp4">Solid Modelling- (Contd)</option>
      
      <option  value="106106090/lec26.mp4">Visible Surface Detection</option>
      

      <option  value="106106090/lec27.mp4">Visible Surface Detection- (Contd)</option>
      
      <option  value="106106090/lec28.mp4">Visible Surface Detection- (Contd)</option>
      
      <option  value="106106090/lec29.mp4">Visible Surface Detection- (Contd)</option>
      
      <option  value="106106090/lec30.mp4">Visible Surface Detection- (Contd)</option>
      
      <option  value="106106090/lec31.mp4">Visible Surface Detection (Contd)</option>
      
      <option  value="106106090/lec32.mp4">Visible Surface Detection (Contd)</option>
      
      <option  value="106106090/lec33.mp4">Illumination And Shading</option>
      
      <option  value="106106090/lec34.mp4">Illumination And Shading (Contd)</option>
      
      <option  value="106106090/lec35.mp4">Illumination And Shading (Contd)</option>
      
      <option  value="106106090/lec36.mp4">Curve Representation</option>
      
      <option  value="106106090/lec37.mp4">Curve Representation (Contd)</option>
      
      <option  value="106106090/lec38.mp4">Curves And Surface Representation</option>
      
      <option  value="106106090/lec39.mp4">Graphics Programming Using Open GL</option>
      
      <option  value="106106090/lec40.mp4">Graphics Programming Using Open GL (Contd)</option>
      
      <option  value="106106090/lec41.mp4">Advanced Topics: Anti Aliasing,Color,Soft Objects,Animation,Visual Effects,System Architectures</option>
      
      <option  value="106106090/lec42.mp4">Digital Image Processing Image Compression-Jpeg-Enhancements</option>
      
      <option  value="106106090/lec43.mp4">Digital Image Processing (Contd)</option>
          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106106091</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Networks</strong></td>
	<td><strong>Prof. Hema A Murthy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106106091/Computer_Networks/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106092</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Computer Organization</strong></td>
	<td><strong>Prof. S. Raman</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106106092/lec01.mp4">Introduction To Computing</option>
      
      <option  value="106106092/lec02.mp4">Introduction To System : Software</option>
      
      <option  value="106106092/lec03.mp4">Introduction To System : Hardware</option>
      
      <option  value="106106092/lec04.mp4">Processor Activities</option>
      
      <option  value="106106092/lec05.mp4">Processor As a State Machine</option>
      
      <option  value="106106092/lec06.mp4">Data Path Architecture</option>
      
      <option  value="106106092/lec07.mp4">Data Path Controller : Micro Programmed</option>
      
      <option  value="106106092/lec08.mp4">State Machine Design</option>
      
      <option  value="106106092/lec09.mp4">Controller Design: Microprogrammed and Hardwired</option>
      
      <option  value="106106092/lec10.mp4">Controller Design (Contd)</option>
      
      <option  value="106106092/lec11.mp4">Typical Micro Instructions</option>
      
      <option  value="106106092/lec12.mp4">Addressing Modes</option>
      
      <option  value="106106092/lec13.mp4">Problem Exercise</option>
      
      <option  value="106106092/lec14.mp4">Problem Exercise</option>
      
      <option  value="106106092/lec15.mp4">Introduction to memory system</option>
      
      <option  value="106106092/lec16.mp4">CPU - Memory Interaction</option>
      
      <option  value="106106092/lec17.mp4">Cache Organization</option>
      
      <option  value="106106092/lec18.mp4">Cache Organization</option>
      
      <option  value="106106092/lec19.mp4">Virtual Memory</option>
      
      <option  value="106106092/lec20.mp4">Virtual Memory</option>
      
      <option  value="106106092/lec21.mp4">Performance Calculation</option>
      
      <option  value="106106092/lec22.mp4">Segmentation</option>
      
      <option  value="106106092/lec23.mp4">Address Translation and Protection</option>
      
      <option  value="106106092/lec24.mp4">Programmed I/O</option>
      
      <option  value="106106092/lec25.mp4">Interrupt Driven I/O</option>
      
      <option  value="106106092/lec26.mp4">DMA : Direct Memory Access</option>
      
      <option  value="106106092/lec27.mp4">Device Service Routines</option>
      
      <option  value="106106092/lec28.mp4">Evolution Of I/O</option>
      
      <option  value="106106092/lec29.mp4">I/O Devices</option>
      
      <option  value="106106092/lec30.mp4">I/O Devices - Contd</option>
      
      <option  value="106106092/lec31.mp4">Buses</option>
      
      <option  value="106106092/lec32.mp4">Buses Contd</option>
      
      <option  value="106106092/lec33.mp4">Conclusion</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106093</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Database Design</strong></td>
	<td><strong>Prof. D. Janaki Ram,Dr. S. Srinath</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106106093/lec00.mp4">Introduction to Database Management System</option>
      
      <option  value="106106093/lec01.mp4">Conceptual Designs</option>
      
      <option  value="106106093/lec02.mp4">Conceptual Designs</option>
      
      <option  value="106106093/lec03.mp4">Relational Model</option>
      
      <option  value="106106093/lec04.mp4">Relational Model</option>
      
      <option  value="106106093/lec05.mp4">Structured Query Language</option>
      
      <option  value="106106093/lec06.mp4">Structured Query Language II</option>
      
      <option  value="106106093/lec07.mp4">ER Model to Relational Mapping</option>
      
      <option  value="106106093/lec08.mp4">Functional Dependencies and Normal Form</option>
      
      <option  value="106106093/lec09.mp4">ER Model to Relational Model Mapping</option>
      
      <option  value="106106093/lec10.mp4">Storage Structures</option>
      
      <option  value="106106093/lec11.mp4">Indexing Techniques Single Level</option>
      
      <option  value="106106093/lec12.mp4">Indexing Techniques Multi-Level</option>
      
      <option  value="106106093/lec13.mp4">Constraints and Triggers</option>
      
      <option  value="106106093/lec14.mp4">Query Processing and Optimization</option>
      
      <option  value="106106093/lec15.mp4">Query Processing and Optimization II</option>
      
      <option  value="106106093/lec16.mp4">Query Processing and Optimization - III</option>
      
      <option  value="106106093/lec17.mp4">Transaction Processing Concepts</option>
      
      <option  value="106106093/lec18.mp4">Transaction Processing and Database Manager</option>
      
      <option  value="106106093/lec19.mp4">Foundation for Concurrency Control</option>
      
      <option  value="106106093/lec20.mp4">Concurrency Control Part - I</option>
      
      <option  value="106106093/lec21.mp4">Concurrency Control Part - 2</option>
      
      <option  value="106106093/lec22.mp4">Concurrency Control Part - 3</option>
      
      <option  value="106106093/lec23.mp4">Concurrency Control Part - 4</option>
      
      <option  value="106106093/lec24.mp4">Distributed Transaction Models</option>
      
      <option  value="106106093/lec25.mp4">Basic 2-Phase and 3-phase commit protocol</option>
      
      <option  value="106106093/lec26.mp4">Concurrency Control for Distributed Transaction</option>
      
      <option  value="106106093/lec27.mp4">Introduction to Transaction Recovery</option>
      
      <option  value="106106093/lec28.mp4">Recovery Mechanisms II</option>
      
      <option  value="106106093/lec29.mp4">Recovery Mechanisms III</option>
      
      <option  value="106106093/lec30.mp4">Introduction to Data Warehousing and OLAP</option>
      
      <option  value="106106093/lec31.mp4">Introduction to Data Warehousing and OLAP</option>
      
      <option  value="106106093/lec32.mp4">Case Study : MYSQL</option>
      
      <option  value="106106093/lec33.mp4">Case Study ORACLE and Microsoft Access</option>
      
      <option  value="106106093/lec34.mp4">Data Mining and Knowledge Discovery</option>
      
      <option  value="106106093/lec35.mp4">Data Mining and Knowledge Discovery Part II</option>
      
      <option  value="106106093/lec36.mp4">Object Oriented Databases</option>
      
      <option  value="106106093/lec37.mp4">Object Oriented Databases II</option>
      
      <option  value="106106093/lec38.mp4">XML - Introductory Concepts</option>
      
      <option  value="106106093/lec39.mp4">XML Advanced Concepts</option>
      
      <option  value="106106093/lec40.mp4">XML Databases</option>
      
      <option  value="106106093/lec41.mp4">Case Study - Part One Database Design</option>
      
      <option  value="106106093/lec42.mp4">Case Study - Part 2 Database Design</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106094</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Discrete Mathematical Structures</strong></td>
	<td><strong>Prof. Kamala Krithivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106106094/lec01.mp4">Propositional Logic</option>
      
      <option  value="106106094/lec02.mp4">Propositional Logic (Contd.)</option>
      
      <option  value="106106094/lec03.mp4">Predicates & Quantifiers</option>
      
      <option  value="106106094/lec04.mp4">Predicates & Quantifiers (Contd.)</option>
      
      <option  value="106106094/lec05.mp4">Logical Inference</option>
      
      <option  value="106106094/lec06.mp4">Resolution Principles & Application to PROLOG</option>
      
      <option  value="106106094/lec07.mp4">Methods of Proof</option>
      
      <option  value="106106094/lec08.mp4">Normal Forms</option>
      
      <option  value="106106094/lec09.mp4">Proving programs correct (Contd.)</option>
      
      <option  value="106106094/lec10.mp4">Sets</option>
      
      <option  value="106106094/lec11.mp4">Induction</option>
      
      <option  value="106106094/lec12.mp4">Set Operations On Strings</option>
      
      <option  value="106106094/lec13.mp4">Relations</option>
      
      <option  value="106106094/lec14.mp4">Graphs</option>
      
      <option  value="106106094/lec15.mp4">Graphs (Continued)</option>
      
      <option  value="106106094/lec16.mp4">Trees</option>
      
      <option  value="106106094/lec17.mp4">Trees And Graphs</option>
      
      <option  value="106106094/lec18.mp4">Special Properties Of Relations</option>
      
      <option  value="106106094/lec19.mp4">Closure Of Relations</option>
      
      <option  value="106106094/lec20.mp4">Closure Properties Of Relations</option>
      
      <option  value="106106094/lec21.mp4">Order Relations</option>
      
      <option  value="106106094/lec22.mp4">Order Relations And Equivalence Relations</option>
      
      <option  value="106106094/lec23.mp4">Equivalence Relations And Partitions</option>
      
      <option  value="106106094/lec24.mp4">Functions</option>
      
      <option  value="106106094/lec25.mp4">Functions (Continued)</option>
      
      <option  value="106106094/lec26.mp4">Functions (Continued)</option>
      
      <option  value="106106094/lec27.mp4">Pigeonhole Principle</option>
      
      <option  value="106106094/lec28.mp4">Permutations And Combinations</option>
      
      <option  value="106106094/lec29.mp4">Permutations And Combinations (Continued)</option>
      
      <option  value="106106094/lec30.mp4">Generating Functions</option>
      
      <option  value="106106094/lec31.mp4">Generating Functions (Continued)</option>
      
      <option  value="106106094/lec32.mp4">Recurrence Relations</option>
      
      <option  value="106106094/lec33.mp4">Recurrence Relations (Continued)</option>
      
      <option  value="106106094/lec34.mp4">Recurrence Relations (Continued)</option>
      
      <option  value="106106094/lec35.mp4">Algebras</option>
      
      <option  value="106106094/lec36.mp4">Algebras (Continued)</option>
      
      <option  value="106106094/lec37.mp4">Algebras (Continued)</option>
      
      <option  value="106106094/lec38.mp4">Finite State Automaton</option>
      
      <option  value="106106094/lec39.mp4">Finite State Automaton (Continued)</option>
      
      <option  value="106106094/lec40.mp4">Lattices</option>
          </select></td>
	
	</tr>
	</form>
    
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106106095</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Introduction to Database Systems and Design</strong></td>
	<td><strong>Prof. P.Sreenivasa Kumar</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106106095/Intro_to_Database_Systems_Design/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>106106097</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Principles of Communication</strong></td>
	<td><strong>Prof. Hema A Murthy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
      
      <option  value="106106097/Principles_of_Communication1/index.php">contents</option>
      
 
          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108051</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Combinatorics</strong></td>
	<td><strong>Dr. L. Sunil Chandran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106108051/mod01lec01.mp4">Pigeon hole principle - (Part 1)</option>
      
      <option  value="106108051/mod01lec02.mp4">Pigeon hole principle - (Part 2)</option>
      
      <option  value="106108051/mod01lec03.mp4">Pigeon hole principle - (Part 3)</option>
      
      <option  value="106108051/mod01lec04.mp4">Pigeon hole principle - (Part 4)</option>
      
      <option  value="106108051/mod02lec05.mp4">Elementary concepts and basic counting principles</option>
      
      <option  value="106108051/mod02lec06.mp4">Elementary concepts; Binomial theorem; Bijective proofs - Part (1)</option>
      
      <option  value="106108051/mod02lec07.mp4">Bijective proofs � Part (2)</option>
      
      <option  value="106108051/mod02lec08.mp4">Bijective proofs - Part (3); Properties of binomial coefficients; Combinatorial identities - Part (1)</option>
      
      <option  value="106108051/mod02lec09.mp4">Combinatorial identities - Part (2); Permutations of multisets � Part (1)</option>
      
      <option  value="106108051/mod02lec10.mp4">Permutations of multisets � Part (2)</option>
      
      <option  value="106108051/mod02lec11.mp4">Multinomial Theorem, Combinations of Multisets � Part (1)</option>
      
      <option  value="106108051/mod02lec12.mp4">Combinations of Multisets - Part (2)</option>
      
      <option  value="106108051/mod02lec13.mp4">Combinations of Multisets � Part (3), Bounds for binomial coefficients</option>
      
      <option  value="106108051/mod02lec14.mp4">Sterling�s Formula, Generalization of Binomial coefficients -  Part (1)</option>
      
      <option  value="106108051/mod02lec15.mp4">Generalization of Binomial coefficients - Part (2)</option>
      
      <option  value="106108051/mod02lec16.mp4">Generalization of Binomial coefficients - Part (3); Double counting - Part (1)</option>
      
      <option  value="106108051/mod03lec17.mp4">Double counting - Part (2)</option>
      
      <option  value="106108051/mod03lec18.mp4">Hall�s Theorem for regular bipartite graphs; Inclusion exclusion principle - Part (1)</option>
      
      <option  value="106108051/mod03lec19.mp4">Inclusion exclusion principle - Part (2)</option>
      
      <option  value="106108051/mod03lec20.mp4">Inclusion exclusion principle - Part (3)</option>
      
      <option  value="106108051/mod03lec21.mp4">Inclusion exclusion principle - Part (4)</option>
      
      <option  value="106108051/mod03lec22.mp4">Inclusion exclusion principle - Part (5)</option>
      
      <option  value="106108051/mod04lec23.mp4">Recurrence Relations - Part (1)</option>
      
      <option  value="106108051/mod04lec24.mp4">Recurrence Relations - Part (2)</option>
      
      <option  value="106108051/mod04lec25.mp4">Recurrence Relations - Part (3)</option>
      
      <option  value="106108051/mod04lec26.mp4">Recurrence Relations - Part (4)</option>
      
      <option  value="106108051/mod04lec27.mp4">Recurrence Relations - Part (5)</option>
      
      <option  value="106108051/mod04lec28.mp4">Generating functions - Part (1)</option>
      
      <option  value="106108051/mod04lec29.mp4">Generating functions - Part (2)</option>
      
      <option  value="106108051/mod04lec30.mp4">Solving recurrence relations using generating functions - Part (1)</option>
      
      <option  value="106108051/mod04lec31.mp4">Solving recurrence relations using generating functions - Part (2)</option>
      
      <option  value="106108051/mod04lec32.mp4">Exponential generating functions - Part (1)</option>
      
      <option  value="106108051/mod04lec33.mp4">Exponential generating functions - Part (2), Partition Number - Part (1)</option>
      
      <option  value="106108051/mod05lec34.mp4">Partition Number - Part (2)</option>
      
      <option  value="106108051/mod05lec35.mp4">Partition Number - Part (3)</option>
      
      <option  value="106108051/mod05lec36.mp4">Partition Number - Part (4); Catalan Numbers - Part (1)</option>
      
      <option  value="106108051/mod05lec37.mp4">Catalans Numbers - Part (2)</option>
      
      <option  value="106108051/mod05lec38.mp4">Catalan Numbers - Part (3), Sterling numbers of the 2nd kind</option>
      
      <option  value="106108051/mod05lec39.mp4">Difference Sequences</option>
      
      <option  value="106108051/mod05lec40.mp4">Sterling Numbers</option>
      
      <option  value="106108051/mod05lec41.mp4">Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108052</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Compiler Design</strong></td>
	<td><strong>Prof. Y.N. Srikanth</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106108052/mod01lec01.mp4">An Overview of a Compiler - Part 1</option>
      
      <option  value="106108052/mod01lec02.mp4">An Overview of a Compiler - Part 2 and Run-Time Environments - Part 1</option>
      
      <option  value="106108052/mod02lec02.mp4">An Overview of a Compiler  Part 2 and Run-Time Environments - Part 1</option>
      
      <option  value="106108052/mod02lec03.mp4">Run-Time Environments - Part 2</option>
      
      <option  value="106108052/mod02lec04.mp4">Run-Time Environments - Part 3 and Local Optimizations - Part 1</option>
      
      <option  value="106108052/mod03lec04.mp4">Run-Time Environments  Part 3 and Local Optimizations - Part 1</option>
      
      <option  value="106108052/mod03lec05.mp4">Local Optimizations - Part 2 and Code Generation Part 1</option>
      
      <option  value="106108052/mod04lec05.mp4">Local Optimizations - Part 2 and Code Generation - Part 1</option>
      
      <option  value="106108052/mod04lec06.mp4">Code Generation - Part 1</option>
      
      <option  value="106108052/mod04lec07.mp4">Code Generation - Part 2</option>
      
      <option  value="106108052/mod04lec08.mp4">Code Generation - Part 3 and Global Register Allocation - Part 1</option>
      
      <option  value="106108052/mod05lec08.mp4">Code Generation - Part 3 and Global Register Allocation  Part 1</option>
      
      <option  value="106108052/mod05lec09.mp4">Global Register Allocation - Part 2</option>
      
      <option  value="106108052/mod05lec10.mp4">Global Register Allocation - Part 3 and Implementing Object-Oriented Languages - Part 1</option>
      
      <option  value="106108052/mod06lec10.mp4">Global Register Allocation - Part 3 and Implementing Object-Oriented Languages Part 1</option>
      
      <option  value="106108052/mod06lec11.mp4">Implementing Object-Oriented Languages - Part 2 and           Introduction to Machine-Independent Optimizations - Part 1</option>
      
      <option  value="106108052/mod07lec11.mp4">Implementing Object-Oriented Languages - Part 2 and           Introduction to Machine-Independent Optimizations Part 1</option>
      
      <option  value="106108052/mod07lec12.mp4">Introduction to Machine-Independent Optimizations - Part 2 and Data-Flow Analysis - Part 1</option>
      
      <option  value="106108052/mod08lec12.mp4">Introduction to Machine-Independent Optimizations - Part 2 and Data-Flow Analysis Part 1</option>
      
      <option  value="106108052/mod08lec13.mp4">Data-Flow Analysis - Part 2</option>
      
      <option  value="106108052/mod08lec14.mp4">Data-Flow Analysis - Part 3 and Control-Flow Analysis - Part 1</option>
      
      <option  value="106108052/mod09lec14.mp4">Data-Flow Analysis - Part 3 and Control-Flow Analysis Part 1</option>
      
      <option  value="106108052/mod09lec15.mp4">Control-Flow Analysis - Part 2</option>
      
      <option  value="106108052/mod10lec16.mp4">Machine-Independent Optimizations - Part 1</option>
      
      <option  value="106108052/mod10lec17.mp4">Machine-Independent Optimizations - Part 2</option>
      
      <option  value="106108052/mod10lec18.mp4">Machine-Independent Optimizations - Part 3 and Data-Flow Analysis: Theoretical Foundation - Part 1</option>
      
      <option  value="106108052/mod11lec18.mp4">Machine-Independent Optimizations - Part 3 and Data-Flow Analysis: Theoretical Foundation  Part 1</option>
      
      <option  value="106108052/mod11lec19.mp4">Data-Flow Analysis: Theoretical Foundation - Part 2 and Partial Redundancy Elimination - Part 1</option>
      
      <option  value="106108052/mod12lec19.mp4">Data-Flow Analysis: Theoretical Foundation - Part 2 and Partial Redundancy Elimination Part 1</option>
      
      <option  value="106108052/mod12lec20.mp4">Partial Redundancy Elimination - Part 2</option>
      
      <option  value="106108052/mod13lec21.mp4">The Static Single Assignment Form: Construction and Application to Program Optimizations - Part 1</option>
      
      <option  value="106108052/mod13lec22.mp4">The Static Single Assignment Form: Construction and Application to Program Optimizations - Part 2</option>
      
      <option  value="106108052/mod13lec23.mp4">The Static Single Assignment Form: Construction and Application to Program Optimizations - Part 3</option>
      
      <option  value="106108052/mod14lec24.mp4">Automatic Parallelization - Part 1</option>
      
      <option  value="106108052/mod14lec25.mp4">Automatic Parallelization - Part 2</option>
      
      <option  value="106108052/mod14lec26.mp4">Automatic Parallelization - Part 3</option>
      
      <option  value="106108052/mod14lec27.mp4">Automatic Parallelization - Part 4</option>
      
      <option  value="106108052/mod15lec28.mp4">Instruction Scheduling - Part 1</option>
      
      <option  value="106108052/mod15lec29.mp4">Instruction Scheduling - Part 2</option>
      
      <option  value="106108052/mod15lec30.mp4">Instruction Scheduling - Part 3</option>
      
      <option  value="106108052/mod16lec31.mp4"> Software Pipelining</option>
      
      <option  value="106108052/mod17lec32.mp4">Energy-Aware Software Systems - Part 1</option>
      
      <option  value="106108052/mod17lec33.mp4">Energy-Aware Software Systems - Part 2</option>
      
      <option  value="106108052/mod17lec34.mp4">Energy-Aware Software Systems - Part 3</option>
      
      <option  value="106108052/mod17lec35.mp4">Energy-Aware Software Systems - Part 4</option>
      
      <option  value="106108052/mod18lec36.mp4">Just-In-Time Compilation and Optimizations for .NET CLR</option>
      
      <option  value="106108052/mod19lec37.mp4">Garbage Collection</option>
      
      <option  value="106108052/mod20lec38.mp4">Interprocedural Data-Flow Analysis</option>
      
      <option  value="106108052/mod21lec39.mp4">Worst Case Execution Time - Part 1</option>
      
      <option  value="106108052/mod21lec40.mp4">Worst Case Execution Time - Part 2</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108054</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Graph Theory</strong></td>
	<td><strong>Dr. L. Sunil Chandran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106108054/mod01lec01.mp4">Introduction: Vertex cover and independent set</option>
      
      <option  value="106108054/mod01lec02.mp4">Matchings: Konig�s theorem and Hall�s theorem</option>
      
      <option  value="106108054/mod01lec03.mp4">More on Hall�s theorem and some applications</option>
      
      <option  value="106108054/mod01lec04.mp4">Tutte�s theorem on existence of a perfect matching</option>
      
      <option  value="106108054/mod01lec05.mp4">More on Tutte�s theorem</option>
      
      <option  value="106108054/mod01lec06.mp4">More on Matchings</option>
      
      <option  value="106108054/mod01lec07.mp4">Dominating set, path cover</option>
      
      <option  value="106108054/mod01lec08.mp4">Gallai � Millgram theorem, Dilworth�s theorem</option>
      
      <option  value="106108054/mod02lec09.mp4">Connectivity: 2-connected and 3- connected graphs</option>
      
      <option  value="106108054/mod02lec10.mp4">Menger�s theorem</option>
      
      <option  value="106108054/mod02lec11.mp4">More on connectivity: k- linkedness</option>
      
      <option  value="106108054/mod02lec12.mp4">Minors, topological minors and more on k- linkedness</option>
      
      <option  value="106108054/mod03lec13.mp4">Vertex coloring: Brooks theorem</option>
      
      <option  value="106108054/mod03lec14.mp4">More on vertex coloring</option>
      
      <option  value="106108054/mod03lec15.mp4">Edge coloring: Vizing�s theorem</option>
      
      <option  value="106108054/mod03lec16.mp4">Proof of Vizing�s theorem, Introduction to planarity</option>
      
      <option  value="106108054/mod03lec17.mp4">5- coloring planar graphs, Kuratowsky�s theorem</option>
      
      <option  value="106108054/mod03lec18.mp4">Proof of Kuratowsky�s theorem, List coloring</option>
      
      <option  value="106108054/mod03lec19.mp4">List chromatic index</option>
      
      <option  value="106108054/mod03lec20.mp4">Adjacency polynomial of a graph and combinatorial Nullstellensatz</option>
      
      <option  value="106108054/mod03lec21.mp4">Chromatic polynomial, k - critical graphs</option>
      
      <option  value="106108054/mod03lec22.mp4">Gallai-Roy theorem, Acyclic coloring, Hadwiger�s conjecture</option>
      
      <option  value="106108054/mod04lec23.mp4">Perfect graphs: Examples</option>
      
      <option  value="106108054/mod04lec24.mp4">Interval graphs, chordal graphs</option>
      
      <option  value="106108054/mod04lec25.mp4">Proof of weak perfect graph theorem (WPGT)</option>
      
      <option  value="106108054/mod04lec26.mp4">Second proof of WPGT, Some non-perfect graph classes</option>
      
      <option  value="106108054/mod04lec27.mp4">More special classes of graphs</option>
      
      <option  value="106108054/mod04lec28.mp4">Boxicity,Sphericity, Hamiltonian circuits</option>
      
      <option  value="106108054/mod04lec29.mp4">More on Hamiltonicity: Chvatal�s theorem</option>
      
      <option  value="106108054/mod04lec30.mp4">Chvatal�s theorem, toughness, Hamiltonicity and 4-color conjecture</option>
      
      <option  value="106108054/mod05lec31.mp4">Network flows: Max flow mincut theorem</option>
      
      <option  value="106108054/mod05lec32.mp4">More on network flows: Circulations</option>
      
      <option  value="106108054/mod05lec33.mp4">Circulations and tensions</option>
      
      <option  value="106108054/mod05lec34.mp4">More on circulations and tensions, flow number and Tutte�s flow conjectures</option>
      
      <option  value="106108054/mod06lec35.mp4">Random graphs and probabilistic method: Preliminaries</option>
      
      <option  value="106108054/mod06lec36.mp4">Probabilistic method: Markov�s inequality, Ramsey number</option>
      
      <option  value="106108054/mod06lec37.mp4">Probabilistic method: Graphs of high girth and high chromatic number</option>
      
      <option  value="106108054/mod06lec38.mp4">Probabilistic method: Second moment method, Lovasz local lemma</option>
      
      <option  value="106108054/mod07lec39.mp4">Graph minors and Hadwiger�s conjecture</option>
      
      <option  value="106108054/mod07lec40.mp4">More on graph minors, tree decompositions</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108055</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>High Performance Computing</strong></td>
	<td><strong>Prof. Mathew Jacob</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106108055/mod01lec01.mp4">Programs and Data</option>
      
      <option  value="106108055/mod01lec02.mp4">Data Representation</option>
      
      <option  value="106108055/mod02lec03.mp4">Registers and Memory</option>
      
      <option  value="106108055/mod02lec04.mp4">Instructions, Addressing Modes</option>
      
      <option  value="106108055/mod02lec05.mp4">A RISC Instruction Set</option>
      
      <option  value="106108055/mod02lec06.mp4">A RISC Instruction Set (contd)</option>
      
      <option  value="106108055/mod02lec07.mp4">Function Call and Return</option>
      
      <option  value="106108055/mod02lec08.mp4">Function Call and Return (contd)</option>
      
      <option  value="106108055/mod02lec09.mp4">Instruction Execution</option>
      
      <option  value="106108055/mod02lec10.mp4">Instruction Execution (contd)</option>
      
      <option  value="106108055/mod03lec11.mp4">Software organization</option>
      
      <option  value="106108055/mod03lec12.mp4">System Calls</option>
      
      <option  value="106108055/mod03lec13.mp4">Virtual memory</option>
      
      <option  value="106108055/mod03lec14.mp4">Virtual memory (contd)</option>
      
      <option  value="106108055/mod03lec15.mp4">Virtual Memory (cont)</option>
      
      <option  value="106108055/mod04lec16.mp4">Process</option>
      
      <option  value="106108055/mod04lec17.mp4">Process scheduling</option>
      
      <option  value="106108055/mod04lec18.mp4">Process lifetime</option>
      
      <option  value="106108055/mod04lec19.mp4">Interprocess communication</option>
      
      <option  value="106108055/mod04lec20.mp4">Concurrent programming</option>
      
      <option  value="106108055/mod05lec21.mp4">Pipelining</option>
      
      <option  value="106108055/mod05lec22.mp4">Pipeline hazards</option>
      
      <option  value="106108055/mod05lec23.mp4">Pipeline hazards (contd)</option>
      
      <option  value="106108055/mod05lec24.mp4">Pipeline hazards (contd.)</option>
      
      <option  value="106108055/mod06lec25.mp4">Cache memory</option>
      
      <option  value="106108055/mod06lec26.mp4">Memory hierarchy</option>
      
      <option  value="106108055/mod06lec27.mp4">Cache operation</option>
      
      <option  value="106108055/mod06lec28.mp4">Cache operation (contd)</option>
      
      <option  value="106108055/mod06lec29.mp4">Cache aware programming</option>
      
      <option  value="106108055/mod06lec30.mp4">Cache aware programming (contd)</option>
      
      <option  value="106108055/mod06lec31.mp4">More on cache</option>
      
      <option  value="106108055/mod07lec32.mp4">Measuring time</option>
      
      <option  value="106108055/mod07lec33.mp4">Program Profiling</option>
      
      <option  value="106108055/mod08lec34.mp4">Secondary storage</option>
      
      <option  value="106108055/mod08lec35.mp4">Files and disks</option>
      
      <option  value="106108055/mod08lec36.mp4">Directories</option>
      
      <option  value="106108055/mod08lec37.mp4">Protection and Performance</option>
      
      <option  value="106108055/mod09lec38.mp4">Parallel architecture</option>
      
      <option  value="106108055/mod09lec39.mp4">Cache coherence</option>
      
      <option  value="106108055/mod09lec40.mp4">MPI programming</option>
      
      <option  value="106108055/mod09lec41.mp4">MPI programming (contd)</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108056</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Numerical Optimization</strong></td>
	<td><strong>Dr. Shirish K. Shevade</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106108056/mod01lec01.mp4">Introduction</option>
      
      <option  value="106108056/mod02lec02.mp4">Mathematical Background</option>
      
      <option  value="106108056/mod02lec03.mp4">Mathematical Background (contd)</option>
      
      <option  value="106108056/mod03lec04.mp4">One Dimensional Optimization - Optimality Conditions</option>
      
      <option  value="106108056/mod03lec05.mp4">One Dimensional Optimization (contd)</option>
      
      <option  value="106108056/mod04lec06.mp4">Convex Sets</option>
      
      <option  value="106108056/mod04lec07.mp4">Convex Sets (contd)</option>
      
      <option  value="106108056/mod05lec08.mp4">Convex Functions</option>
      
      <option  value="106108056/mod05lec09.mp4">Convex Functions (contd)</option>
      
      <option  value="106108056/mod06lec10.mp4">Multi Dimensional Optimization - Optimality Conditions, Conceptual Algorithm</option>
      
      <option  value="106108056/mod06lec11.mp4">Line Search Techniques</option>
      
      <option  value="106108056/mod06lec12.mp4">Global Convergence Theorem</option>
      
      <option  value="106108056/mod06lec13.mp4">Steepest Descent Method</option>
      
      <option  value="106108056/mod06lec14.mp4">Classical Newton Method</option>
      
      <option  value="106108056/mod06lec15.mp4">Trust Region and Quasi-Newton Methods</option>
      
      <option  value="106108056/mod06lec16.mp4">Quasi-Newton Methods - Rank One Correction, DFP Method</option>
      
      <option  value="106108056/mod06lec17.mp4">i) Quasi-Newton Methods - Broyden Family ii) Coordinate Descent Method</option>
      
      <option  value="106108056/mod06lec18.mp4">Conjugate Directions</option>
      
      <option  value="106108056/mod06lec19.mp4">Conjugate Gradient Method</option>
      
      <option  value="106108056/mod07lec20.mp4">Constrained Optimization - Local and Global Solutions, Conceptual Algorithm</option>
      
      <option  value="106108056/mod07lec21.mp4">Feasible and Descent Directions</option>
      
      <option  value="106108056/mod07lec22.mp4">First Order KKT Conditions</option>
      
      <option  value="106108056/mod07lec23.mp4">Constraint Qualifications</option>
      
      <option  value="106108056/mod07lec24.mp4">Convex Programming Problem</option>
      
      <option  value="106108056/mod07lec25.mp4">Second Order KKT Conditions</option>
      
      <option  value="106108056/mod07lec26.mp4">Second Order KKT Conditions (contd)</option>
      
      <option  value="106108056/mod08lec27.mp4">Weak and Strong Duality</option>
      
      <option  value="106108056/mod08lec28.mp4">Geometric Interpretation</option>
      
      <option  value="106108056/mod08lec29.mp4">Lagrangian Saddle Point and Wolfe Dual</option>
      
      <option  value="106108056/mod09lec30.mp4">Linear Programming Problem</option>
      
      <option  value="106108056/mod09lec31.mp4">Geometric Solution</option>
      
      <option  value="106108056/mod09lec32.mp4">Basic Feasible Solution</option>
      
      <option  value="106108056/mod09lec33.mp4">Optimality Conditions and Simplex Tableau</option>
      
      <option  value="106108056/mod09lec34.mp4">Simplex Algorithm and Two-Phase Method</option>
      
      <option  value="106108056/mod09lec35.mp4">Duality in Linear Programming</option>
      
      <option  value="106108056/mod09lec36.mp4">Interior Point Methods - Affine Scaling Method</option>
      
      <option  value="106108056/mod09lec37.mp4">Karmarkar\'s Method</option>
      
      <option  value="106108056/mod10lec38.mp4">Lagrange Methods, Active Set Method</option>
      
      <option  value="106108056/mod10lec39.mp4">Active Set Method (contd)</option>
      
      <option  value="106108056/mod10lec40.mp4">Barrier and Penalty Methods, Augmented Lagrangian Method and Cutting Plane Method</option>
      
      <option  value="106108056/mod10lec41.mp4">Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108057</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>Pattern Recognition</strong></td>
	<td><strong>Prof. M. Narasimha Murty,Prof. V. Susheela Devi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106108057/module01/lecture1.pdf">Background</option>
      
      <option  value="106108057/module01/lecture2.pdf">Introduction</option>
      
      <option  value="106108057/module02/lecture3.pdf">Statistical Pattern Recognition</option>
      
      <option  value="106108057/module03/lecture4.pdf">Different Representation Schemes</option>
      
      <option  value="106108057/module03/lecture5.pdf">Tree-Based Representations</option>
      
      <option  value="106108057/module04/lecture6.pdf">Dissimilarity Measures</option>
      
      <option  value="106108057/module04/lecture7.pdf">Distance Between Pattern Collections</option>
      
      <option  value="106108057/module05/lecture8.pdf">Fisher’s Discriminant</option>
      
      <option  value="106108057/module05/lecture 9.pdf">Principal Components as Features</option>
      
      <option  value="106108057/module06/lecture10.pdf">Branch and Bound Schemes</option>
      
      <option  value="106108057/module06/lecture11.pdf">Sequential Feature Selection</option>
      
      <option  value="106108057/module07/lecture12.pdf">Nearest Neighbour Classifier</option>
      
      <option  value="106108057/module07/lecture13.pdf">Soft Nearest Neighbour Classifiers</option>
      
      <option  value="106108057/module08/lecture14.pdf">Efficient Nearest Neighbour Classifier</option>
      
      <option  value="106108057/module08/lecture15.pdf">Ordered Partitions</option>
      
      <option  value="106108057/module09/lecture16.pdf">Minimal Distance Classifier</option>
      
      <option  value="106108057/module09/lecture17.pdf">Condensed Nearest Neighbour Classifier</option>
      
      <option  value="106108057/module09/lecture18.pdf">Modified Condensed Nearest Neighbour Classifier</option>
      
      <option  value="106108057/module10/lecture19.pdf">Bayes Classifier</option>
      
      <option  value="106108057/module10/lecture20.pdf">Naive Bayes Classifier</option>
      
      <option  value="106108057/module10/lecture21.pdf">Bayesian Belief Networks</option>
      
      <option  value="106108057/module11/lecture22.pdf">Introduction to Decision Trees</option>
      
      <option  value="106108057/module11/lecture23.pdf">Construction of Decision Trees</option>
      
      <option  value="106108057/module11/lecture24.pdf">Axis-Parallel and Oblique Decision Trees</option>
      
      <option  value="106108057/module11/lecture25.pdf">Learning Decision Trees</option>
      
      <option  value="106108057/module12/lecture 26.pdf">Introduction to Discriminant Functions</option>
      
      <option  value="106108057/module12/lecture 27.pdf">Characterization of the Decision Boundary</option>
      
      <option  value="106108057/module12/lecture 28.pdf">Learning the Discriminant Function</option>
      
      <option  value="106108057/module13/lecture29.pdf">Introduction to Support Vector Machines</option>
      
      <option  value="106108057/module13/lecture30.pdf">Training Support Vector Machines</option>
      
      <option  value="106108057/module14/lecture31.pdf">What is Clustering?</option>
      
      <option  value="106108057/module14/lecture32.pdf">Representation of Patterns and Clusters</option>
      
      <option  value="106108057/module14/lecture33.pdf">Clustering Process</option>
      
      <option  value="106108057/module14/lecture34.pdf">Clustering Algorithms</option>
      
      <option  value="106108057/module15/lecture35.pdf">Incremental Clustering</option>
      
      <option  value="106108057/module15/lecture36.pdf">Divide-and-Conquer Clustering</option>
      
      <option  value="106108057/module16/lecture37.pdf">Introduction to Combining Classifiers</option>
      
      <option  value="106108057/module16/lecture38.pdf">AdaBoost for Classification</option>
      
      <option  value="106108057/module16/lecture39.pdf">Schemes for Combining Classifiers</option>
      
      <option  value="106108057/module16/lecture 40.pdf">Combination of Homogeneous Classifiers</option>
      
      <option  value="106108057/module17/lecture41.pdf">Document Processing</option>
      
      <option  value="106108057/module17/lecture42.pdf">Document Classification and Retrieval</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106108102</strong></td>
	<td><strong>Computer Science and  Engineering</strong></td>
	<td><strong>System Analysis and Design</strong></td>
	<td><strong>Prof. V. Rajaraman</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
      <option  value="106108102/lec01.mp4">Lecture 1</option>
      
      <option  value="106108102/lec02.mp4">Lecture 2</option>
      
      <option  value="106108102/lec03.mp4">Lecture 3</option>
      
      <option  value="106108102/lec04.mp4">Lecture 4</option>
      
      <option  value="106108102/lec05.mp4">Lecture 5</option>
      
      <option  value="106108102/lec06.mp4">Lecture 6</option>
      
      <option  value="106108102/lec07.mp4">Lecture 7</option>
      
      <option  value="106108102/lec08.mp4">Lecture 8</option>
      
      <option  value="106108102/lec09.mp4">Lecture 9</option>
      
      <option  value="106108102/lec10.mp4">Lecture 10</option>
      
      <option  value="106108102/lec11.mp4">Lecture 11</option>
      
      <option  value="106108102/lec12.mp4">Lecture 12</option>
      
      <option  value="106108102/lec13.mp4">Lecture 13</option>
      
      <option  value="106108102/lec14.mp4">Lecture 14</option>
      
      <option  value="106108102/lec15.mp4">Lecture 15</option>
      
      <option  value="106108102/lec16.mp4">Lecture 16</option>
      
      <option  value="106108102/lec17.mp4">Lecture 17</option>
      
      <option  value="106108102/lec18.mp4">Lecture 18</option>
      
      <option  value="106108102/lec19.mp4">Lecture 19</option>
      
      <option  value="106108102/lec20.mp4">Lecture 20</option>
      
      <option  value="106108102/lec21.mp4">Lecture 21</option>
      
      <option  value="106108102/lec22.mp4">Lecture 22</option>
      
      <option  value="106108102/lec23.mp4">Lecture 23</option>
      
      <option  value="106108102/lec24.mp4">Lecture 24</option>
      
      <option  value="106108102/lec25.mp4">Lecture 25</option>
      
      <option  value="106108102/lec26.mp4">Lecture 26</option>
      
      <option  value="106108102/lec27.mp4">Lecture 27</option>
      
      <option  value="106108102/lec28.mp4">Lecture 28</option>
      
      <option  value="106108102/lec29.mp4">Lecture 29</option>
      
      <option  value="106108102/lec30.mp4">Lecture 30</option>
      
      <option  value="106108102/lec31.mp4">Lecture 31</option>
      
      <option  value="106108102/lec32.mp4">Lecture 32</option>
      
      <option  value="106108102/lec33.mp4">Lecture 33</option>
      
      <option  value="106108102/lec34.mp4">Lecture 34</option>
      
      <option  value="106108102/lec35.mp4">Lecture 35</option>
      
      <option  value="106108102/lec36.mp4">Lecture 36</option>
      
      <option  value="106108102/lec37.mp4">Lecture 37</option>
      
      <option  value="106108102/lec38.mp4">Lecture 38</option>
      
      <option  value="106108102/lec39.mp4">Lecture 39</option>
      
      <option  value="106108102/lec40.mp4">Lecture 40</option>
          </select></td>
	
	</tr>
	</form>





<form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106106134</strong></td>
	<td><strong> Computer Science and Engineering </strong></td>
	<td><strong> NOC:Computer Architecture(Course sponsored by Aricent) </strong></td>
	<td><strong> Prof.Madhu Mutyam </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Madras </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="106106134/mod01lec01.mp4">Introduction to Computer Architecture</option>
      
      <option  value="106106134/mod02lec02.mp4"> Quantitative Principles of Computer Design (cont'd) </option>
      
      <option  value="106106134/mod02lec03.mp4"> Instruction Set Principles-Part 1</option>
      
      <option  value="106106134/mod02lec04.mp4"> Instruction Set Principles-Part 2 </option>
      
      <option  value="106106134/mod02lec05.mp4"> Instruction Set Principles-Part 3 </option>
      
      <option  value="106106134/mod03lec06.mp4"> Cache Memory Hierarchy - Part 1</option>
      
      <option  value="106106134/mod03lec07.mp4"> Cache Memory Hierarchy - Part 2</option>
      
      <option  value="106106134/mod03lec08.mp4"> Cache Memory Hierarchy - Part 3 </option>
      
      <option  value="106106134/mod03lec09.mp4"> Cache Memory Hierarchy - Part 4 </option>
      
      <option  value="106106134/mod04lec10.mp4"> Main Memory Design - Part 1 </option>
      
      <option  value="106106134/mod04lec11.mp4"> Main Memory Design - Part 2</option>
      
      <option  value="106106134/mod04lec12.mp4"> Main Memory Design - Part 3 </option>
      
        
      <option  value="106106134/mod05lec13.mp4"> Fundamentals of Pipelining - Part 1</option>
      
      <option  value="106106134/mod05lec14.mp4"> Fundamentals of Pipelining - Part 2 </option>
      
      <option  value="106106134/mod05lec15.mp4"> Fundamentals of Pipelining - Part 3 </option>
      
      <option  value="106106134/mod05lec16.mp4"> Fundamentals of Pipelining - Part 4 </option>
      
      <option  value="106106134/mod05lec17.mp4"> Fundamentals of Pipelining - Part 5 </option>
      
      <option  value="106106134/mod06lec18.mp4"> Scalar to Superscalar pipeline </option>
      
      <option  value="106106134/mod06lec19.mp4"> Instruction Dependencies </option>
      
      <option  value="106106134/mod06lec20.mp4"> Compiler optimizations for Exposing ILP </option>
      
      <option  value="106106134/mod06lec21.mp4"> Advanced Branch Prediction Techniques - Part 1 </option>
      
      <option  value="106106134/mod06lec22.mp4"> Advanced Branch Prediction Techniques - Part 2 </option>
      
      <option  value="106106134/mod07lec23.mp4"> Superscalar Organization </option>
      
      <option  value="106106134/mod07lec24.mp4"> Register RenamingClassifier </option>
      
      <option  value="106106134/mod07lec25.mp4"> Tomasulo Algorithm </option>
      
      <option  value="106106134/mod07lec26.mp4"> Dynamic Execution Core </option>
      
      <option  value="106106134/mod08lec27.mp4"> Multi-threading </option>
      
      <option  value="106106134/mod08lec28.mp4"> Multicore Processor Architecture </option>
      
      <option  value="106106134/mod08lec29.mp4"> Cache Coherence </option>
      
      <option  value="106106134/mod08lec30.mp4"> Cache Coherence Protocol Design </option>
      
      <option  value="106106134/mod09lec31.mp4"> Synchronization </option>
      
      <option  value="106106134/mod09lec32.mp4"> Memory Consistency - Part 1 </option>
      
      <option  value="106106134/mod09lec33.mp4"> Memory Consistency - Part 2 </option>
      

                                  
          </select>
</td>
	</tr>
	</form>



<form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>106104135</strong></td>
	<td><strong> Computer Science and Engineering </strong></td>
	<td><strong> NOC:Fundamentals of Database Systems(Course sponsored by Aricent) </strong></td>
	<td><strong> Dr. Arnab Bhattacharya </strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Kanpur </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="106104135/mod01lec01.mp4">Introduction to Databases</option>
      
      <option  value="106104135/mod01lec02.mp4"> Relational Data Model </option>
      
      <option  value="106104135/mod01lec03.mp4"> Relational Algebra Basic Operators </option>
      
      <option  value="106104135/mod01lec04.mp4"> Relational Algebra Composition of Operators </option>
      
      <option  value="106104135/mod01lec05.mp4"> Relational Algebra Additional Operators </option>
      
      <option  value="106104135/mod01lec06.mp4"> Relational Algebra Extended Relational Algebra </option>
      
      <option  value="106104135/mod02lec07.mp4"> Relational Algebra: Database Modifications </option>
      
      <option  value="106104135/mod02lec08.mp4"> SQL: Introduction and Data Definition </option>
      
      <option  value="106104135/mod02lec09.mp4"> SQL: Basic Queries </option>
      
      <option  value="106104135/mod02lec10.mp4"> SQL: Advanced Queries </option>
      
      <option  value="106104135/mod02lec11.mp4"> SQL: Updates, Joins, Views and Triggers </option>
      
      <option  value="106104135/mod02lec12.mp4"> Normalization Theory: Motivation </option>
      
        
      <option  value="106104135/mod03lec13.mp4"> Normalization Theory: 1 NF and 2NF </option>
      
      <option  value="106104135/mod03lec14.mp4"> Normalization Theory: 3NF </option>
      
      <option  value="106104135/mod03lec15.mp4"> Normalization Theory: BCNF </option>
      
      <option  value="106104135/mod03lec16.mp4"> Normalization Theory: MVD </option>
      
      <option  value="106104135/mod03lec17.mp4"> Physical Design </option>
      
      <option  value="106104135/mod03lec18.mp4"> Database Indexing: Hashing </option>
      
      <option  value="106104135/mod04lec19.mp4"> Database Indexing: Tree-based Indexing </option>
      
      <option  value="106104135/mod04lec20.mp4"> Query Processing: Selection </option>
      
      <option  value="106104135/mod04lec21.mp4"> Query Processing: Sorting </option>
      
      <option  value="106104135/mod04lec22.mp4"> Query Processing: Nested-Loop joins and Merge join </option>
      
      <option  value="106104135/mod04lec23.mp4"> Query Processing: Hash join and other Operations </option>
      
      <option  value="106104135/mod04lec24.mp4"> Query Optimization: Equivalent Expressions and Simple Equivalance Rules </option>
      
      <option  value="106104135/mod05lec25.mp4"> Query Optimization: Complex Equivalence Rules </option>
      
      <option  value="106104135/mod05lec26.mp4"> Query Optimization: Join Order </option>
      
      <option  value="106104135/mod05lec27.mp4"> Query Optimization: Heuristics and Sizes </option>
      
      <option  value="106104135/mod05lec28.mp4"> Database Transactions: Properties and Failures </option>
      
      <option  value="106104135/mod05lec29.mp4"> Database Transactions: States and Systems </option>
      
      <option  value="106104135/mod05lec30.mp4"> Recovery Systems: Deferred Database Modification </option>
      
      <option  value="106104135/mod06lec31.mp4"> Recovery Systems: Immediate Database Modification </option>
      
      <option  value="106104135/mod06lec32.mp4"> Recovery Systems: Checkpointing and Shadow Paging </option>
      
      <option  value="106104135/mod06lec33.mp4"> Schedules: Introduction </option>
      
      <option  value="106104135/mod06lec34.mp4"> Schedules: Conflict Serializability </option>
      
      <option  value="106104135/mod06lec35.mp4"> Schedules: View Serializability </option>
      
      <option  value="106104135/mod06lec36.mp4"> Schedules: Result Equivalence and Testing for Serializability </option>
      
      <option  value="106104135/mod07lec37.mp4"> Schedules: Recoverability </option>
      
      <option  value="106104135/mod07lec38.mp4"> Concurrency Control: Locks </option>
      
      <option  value="106104135/mod07lec39.mp4"> Concurrency Control: Two-phase Locking Protocol </option>
      
      <option  value="106104135/mod07lec40.mp4"> Concurrency Control: Timestamp Ordering Protocol </option>
       
<option  value="106104135/mod07lec41.mp4"> Concurrency Control: Validation-based Protocol </option>
      <option  value="106104135/mod07lec42.mp4"> Concurrency Control: Multiple Granularity for Locks </option>
      <option  value="106104135/mod08lec43.mp4"> Concurrency Control: Deadlock Prevention and Deadlock Detection </option>
      <option  value="106104135/mod08lec44.mp4"> Concurrency Control: Deadlock Recovery and Update Operations </option>

<option  value="106104135/mod08lec45.mp4"> NoSQL: Introduction and Properties </option>

<option  value="106104135/mod08lec46.mp4"> NoSQL: Columnar Families </option>

<option  value="106104135/mod08lec47.mp4"> NoSQL: Different NoSQL Systems </option>

<option  value="106104135/mod08lec48.mp4"> Big Data </option>


                                  
          </select>
</td>
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>106106136</strong></td>
      <td><strong>Computer Science and Engineering</strong></td>
      <td><strong>NOC:Model Checking</strong></td>
      <td><strong>Prof. B. Srivathsan</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          	<option  value="#">Select</option>
			<option value="	106106136/	mod01lec01.mp4	">	Course Overview	</option>
			<option value="	106106136/	mod01lec02.mp4	">	Module 1: Modeling code behaviour	</option>
			<option value="	106106136/	mod01lec03.mp4	">	Module 2: Modeling hardware circuits	</option>
			<option value="	106106136/	mod01lec04.mp4	">	Module 3: Modeling data-dependent programs	</option>
			<option value="	106106136/	mod01lec05.mp4	">	Module 4: Modeling concurrent systems	</option>
			<option value="	106106136/	mod01lec06.mp4	">	Summary	</option>
			<option value="	106106136/	mod02lec07.mp4	">	Module 1: Model checking tools	</option>
			<option value="	106106136/	mod02lec08.mp4	">	Module 2: Simple models in NuSMV	</option>
			<option value="	106106136/	mod02lec09.mp4	">	Module 3: Hardware verification using NuSMV	</option>
			<option value="	106106136/	mod02lec10.mp4	">	Module 4: Modeling concurrent systems in NuSMV	</option>
			<option value="	106106136/	mod02lec11.mp4	">	Summary.	</option>
			<option value="	106106136/	mod03lec12.mp4	">	Module 1: A problem in concurrency	</option>
			<option value="	106106136/	mod03lec13.mp4	">	Module 2: What is a property?	</option>
			<option value="	106106136/	mod03lec14.mp4	">	Module 3: Invariants	</option>
			<option value="	106106136/	mod03lec15.mp4	">	Module 4: Safety properties	</option>
			<option value="	106106136/	mod03lec16.mp4	">	Module 5: Liveness properties	</option>
			<option value="	106106136/	mod03lec17.mp4	">	Summary..	</option>
			<option value="	106106136/	mod04lec18.mp4	">	Module 1: Road map	</option>
			<option value="	106106136/	mod04lec19.mp4	">	Module 2: A gentle introduction to automata	</option>
			<option value="	106106136/	mod04lec20.mp4	">	Module 3: Simple properties of finite automata	</option>
			<option value="	106106136/	mod04lec21.mp4	">	Module 4: Safety properties described by automata	</option>
			<option value="	106106136/	mod04lec22.mp4	">	Summary...	</option>
			<option value="	106106136/	mod05lec23.mp4	">	Module 1: Specifying properties	</option>
			<option value="	106106136/	mod05lec24.mp4	">	Module 2: Omega-regular expressions	</option>
			<option value="	106106136/	mod05lec25.mp4	">	Module 3: Bchi automata	</option>
			<option value="	106106136/	mod05lec26.mp4	">	Module 4: Simple properties of Bchi automata	</option>
			<option value="	106106136/	mod05lec27.mp4	">	Summary....	</option>
			<option value="	106106136/	mod06lec28.mp4	">	Module 1: Overview	</option>
			<option value="	106106136/	mod06lec29.mp4	">	Module 2: Omega-regular expressions to NBA	</option>
			<option value="	106106136/	mod06lec30.mp4	">	Module 3: Checking emptiness of NBA	</option>
			<option value="	106106136/	mod06lec31.mp4	">	Module 4: Generalized NBA	</option>
			<option value="	106106136/	mod06lec32.mp4	">	Summary.....	</option>
			<option value="	106106136/	mod07lec33.mp4	">	Module 1: Introduction to LTL	</option>
			<option value="	106106136/	mod07lec34.mp4	">	Module 2: Semantics of LTL	</option>
			<option value="	106106136/	mod07lec35.mp4	">	Module 3: A puzzle	</option>
			<option value="	106106136/	mod07lec36.mp4	">	Summary .	</option>
			<option value="	106106136/	mod08lec37.mp4	">	Module 1: Automata based LTL model-checking	</option>
			<option value="	106106136/	mod08lec38.mp4	">	Module 2: LTL to NBA	</option>
			<option value="	106106136/	mod08lec39.mp4	">	Module 3: Automaton construction	</option>
			<option value="	106106136/	mod08lec40.mp4	">	Summary ..	</option>
			<option value="	106106136/	mod09lec41.mp4	">	Module 1: Tree view of a transition system	</option>
			<option value="	106106136/	mod09lec42.mp4	">	Module 2: CTL*	</option>
			<option value="	106106136/	mod09lec43.mp4	">	Module 3: CTL	</option>
			<option value="	106106136/	mod09lec44.mp4	">	summary ...	</option>
			<option value="	106106136/	mod10lec45.mp4	">	Module 1: Adequate CTL formulae	</option>
			<option value="	106106136/	mod10lec46.mp4	">	Module 2: EX, EU, EG	</option>
			<option value="	106106136/	mod10lec47.mp4	">	Module 3: Final algorithm	</option>
			<option value="	106106136/	mod10lec48.mp4	">	Module 4: State-space explosion	</option>
			<option value="	106106136/	mod10lec49.mp4	">	Summary ....	</option>
			<option value="	106106136/	mod11lec50.mp4	">	Module 1: Introduction to BDDs	</option>
			<option value="	106106136/	mod11lec51.mp4	">	Module 2: Ordered BDDs	</option>
			<option value="	106106136/	mod11lec52.mp4	">	Module 3: Representing transition systems as OBDDs	</option>
			<option value="	106106136/	mod11lec53.mp4	">	Summary .....	</option>
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
