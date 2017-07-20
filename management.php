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
<title>Management</title>
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
	<td><strong>110101003</strong></td>
	<td><strong>Management</strong></td>
	<td><strong> Managerial Accounting</strong></td>
	<td><strong>Dr. Varadraj Bapat</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="110101003/mod01lec01.mp4">Lecture 1 : Introduction to Management Accounting                                             </option>
<option value="110101003/mod01lec02.mp4">Lecture 2 : Double Entry System, Forms of Organisation                                        </option>
<option value="110101003/mod02lec03.mp4">Lecture 3 : Financial Statements                                                              </option>
<option value="110101003/mod02lec04.mp4">Lecture 4 : Balance Sheet                                                                     </option>
<option value="110101003/mod02lec05.mp4">Lecture 5 : Profit and Loss Account                                                           </option>
<option value="110101003/mod03lec06.mp4">Lecture 6 : Company Account                                                                   </option>
<option value="110101003/mod04lec07.mp4">Lecture 7 : Accounting Concepts, Standards, IFRS                                              </option>
<option value="110101003/mod05lec08.mp4">Lecture 8 : Depreciation, Inventory, Goodwill                                                 </option>
<option value="110101003/mod05lec09.mp4">Lecture 9 : Inventory Valuation, Cash Flow                                                    </option>
<option value="110101003/mod06lec10.mp4">Lecture 10 A : Cash Flow Statement Cases                                                      </option>
<option value="110101003/mod06lec11.mp4">Lecture 10 B : Cash Flow Statement Cases                                                      </option>
<option value="110101003/mod06lec12.mp4">Lecture 11 : Cash Flow Statement Cases-Part II                                                </option>
<option value="110101003/mod06lec13.mp4">Lecture 12 : Fund Flow Statement Cases                                                        </option>
<option value="110101003/mod07lec14.mp4">Lecture 13 : Common-size, Comparative Statement Analysis                                      </option>
<option value="110101003/mod07lec15.mp4">Lecture 14 : Ratio Analysis                                                                   </option>
<option value="110101003/mod07lec16.mp4">Lecture 15 : Financial Statements Analysis                                                    </option>
<option value="110101003/mod07lec17.mp4">Lecture 16 : Comparative, Common-size and Ratio Analysis                                      </option>
<option value="110101003/mod07lec18.mp4">Lecture 17 : Financial Statements Analysis - Colgate Palmolive Case                           </option>
<option value="110101003/mod07lec19.mp4">Lecture 18 : Financial Statements Analysis - Dabur India Case                                 </option>
<option value="110101003/mod08lec20.mp4">Lecture 19 : Types of Costs                                                                   </option>
<option value="110101003/mod09lec21.mp4">Lecture 20 : Accounting for Costs                                                             </option>
<option value="110101003/mod09lec22.mp4">Lecture 21 : Cost Allocation, Absorption                                                      </option>
<option value="110101003/mod10lec23.mp4">Lecture 22 : Job and Process Accounting                                                       </option>
<option value="110101003/mod10lec24.mp4">Lecture 23 : Job and Process Accounting including cost sheet and equivalent production        </option>
<option value="110101003/mod10lec25.mp4">Lecture 24 : Equivalent production and Activity Based Costing                                 </option>
<option value="110101003/mod11lec26.mp4">Lecture 25 : Activity Based Costing and Management                                            </option>
<option value="110101003/mod12lec27.mp4">Lecture 26 : Cost Volume Profit Analysis                                                      </option>
<option value="110101003/mod13lec28.mp4">Lecture 27 : Relevant and Sunk Cost in Decision Making                                        </option>
<option value="110101003/mod13lec29.mp4">Lecture 28 : New Product, Shut Down and Joint Products                                        </option>
<option value="110101003/mod14lec30.mp4">Lecture 29 : Budget and Budgetory control                                                     </option>
<option value="110101003/mod14lec31.mp4">Lecture 30 : Budgeting and Standard Costing                                                   </option>
<option value="110101003/mod15lec32.mp4">Lecture 31 : Standard Costing - Material, Labour and Overhead Variances                       </option>
<option value="110101003/mod15lec33.mp4">Lecture 32 : Standard Costing - Mix, Yeild, Sales and Fixed Overhead Variances                </option>
<option value="110101003/mod15lec34.mp4">Lecture 33 : Standard Costing - Mix, Yeild and Fixed Overhead Variances                       </option>
<option value="110101003/mod16lec35.mp4">Lecture 34 : Cost Volume Profit and Break-Even Point Analysis                                 </option>
<option value="110101003/mod16lec36.mp4">Lecture 35 : Cost Volume Profit Analysis - Cost Indifference Point and Levearge               </option>
<option value="110101003/mod16lec37.mp4">Lecture 36 : Cash Flow Advanced Cases                                                         </option>
<option value="110101003/mod16lec38.mp4">Lecture 37 : Cash Flow Advanced Cases-Part II                                                 </option>
<option value="110101003/mod16lec39.mp4">Lecture 38 : Financial Statements Analysis Advanced                                           </option>
<option value="110101003/mod16lec40.mp4">Lecture 39 : Financial Statement- Forcasting and Valuation - Dabur Case                       </option>
<option value="110101003/mod16lec41.mp4">Lecture 40 : Financial Statement- Forcasting and use of Adjusted data - Pfizer and Merck Case </option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110101005</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Managerial Economics</strong></td>
	<td><strong>Dr. Trupti Mishra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      <option value="110101005/mod01lec01.mp4">L1-Introduction to Managerial Economics </option>
      
      <option value="110101005/mod01lec02.mp4">L2-Introduction to Managerial Economics [Contd�]</option>
      
      <option value="110101005/mod01lec03.mp4">L3-Introduction to Managerial Economics [Contd�]</option>
      
      <option value="110101005/mod01lec04.mp4">L4-Basic Tools of Economic Analysis and Optimization Techniques </option>
      
      <option value="110101005/mod01lec05.mp4">L5-Basic Tools of Economic Analysis and Optimization Techniques [Contd�] </option>
      
      <option value="110101005/mod01lec06.mp4">L6-Basic Tools of Economic Analysis and Optimization Techniques [Contd�]</option>
      
      <option value="110101005/mod01lec07.mp4">L7-Basic Tools of Economic Analysis and Optimization Techniques [Contd�]</option>
      
      <option value="110101005/mod01lec08.mp4">L8-Theory of Demand</option>
      
      <option value="110101005/mod01lec09.mp4">L9-Theory of Demand [Contd�]</option>
      
      <option value="110101005/mod01lec10.mp4">L10-Theory of Demand [Contd�]</option>
      
      <option value="110101005/mod01lec11.mp4">L11-Theory of Demand [Contd�]</option>
      
      <option value="110101005/mod01lec12.mp4">L12-Consumer Behaviour</option>
      
      <option value="110101005/mod01lec13.mp4">L13-Consumer Behaviour [Contd�]</option>
      
      <option value="110101005/mod01lec14.mp4">L14-Elasticity of Supply</option>
      
      <option value="110101005/mod01lec15.mp4">L15-Demand Forecasting</option>
      
      <option value="110101005/mod01lec16.mp4">L16-Demand Forecasting [Contd�]</option>
      
      <option value="110101005/mod01lec17.mp4">L17-Theory of Production</option>
      
      <option value="110101005/mod01lec18.mp4">L18-Theory of Production [Contd�]</option>
      
      <option value="110101005/mod01lec19.mp4">L19-Theory of Production [Contd�]</option>
      
      <option value="110101005/mod01lec20.mp4">L20-Theory of Cost</option>
      
      <option value="110101005/mod01lec21.mp4">L21-Theory of Cost [Contd�]</option>
      
      <option value="110101005/mod01lec22.mp4">L22-Theory of Cost [Contd�]</option>
      
      <option value="110101005/mod01lec23.mp4">L23-Theory of Cost [Contd�]</option>
      
      <option value="110101005/mod01lec24.mp4">L24-Theory of Market</option>
      
      <option value="110101005/mod01lec25.mp4">L25-Perfect Competition</option>
      
      <option value="110101005/mod01lec26.mp4">L26-Perfect Competition [Contd�]</option>
      
      <option value="110101005/mod01lec27.mp4">L27-Monopoly</option>
      
      <option value="110101005/mod01lec28.mp4">L28-Monopoly [Contd�]</option>
      
      <option value="110101005/mod01lec29.mp4">L29-Monopoly [Contd�]</option>
      
      <option value="110101005/mod01lec30.mp4">L30-Monopolistic</option>
      
      <option value="110101005/mod01lec31.mp4">L31-Oligopoly</option>
      
      <option value="110101005/mod01lec32.mp4">L32-Oligopoly [Contd�]</option>
      
      <option value="110101005/mod01lec33.mp4">L33-Oligopoly [Contd�]</option>
      
      <option value="110101005/mod01lec34.mp4">L34-Oligopoly [Contd�]</option>
      
      <option value="110101005/mod01lec35.mp4">L35-Oligopoly and Game Theory</option>
      
      <option value="110101005/mod01lec36.mp4">L36-Oligopoly and Game Theory [Contd�]</option>
      
      <option value="110101005/mod01lec37.mp4">L37-Game Theory / Product Pricing</option>
      
      <option value="110101005/mod01lec38.mp4">L38-Product Pricing</option>
      
      <option value="110101005/mod01lec39.mp4">L39-Product Pricing [Contd�]</option>
      
      <option value="110101005/mod01lec40.mp4">L40-Summary</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110102016</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Organisation Management</strong></td>
	<td><strong>Prof. Vinayshil Gautam</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option value="110102016/mod01lec01.mp4">Introduction to Organization Management,Nature ,Scope and Complexity</option>
      
      <option value="110102016/mod01lec02.mp4">Longitudinal thinking and legacy factor:Organizational Growth</option>
      
      <option value="110102016/mod01lec03.mp4">Longitudinal thinking and legacy factor:Organizational Growth(Contd.)</option>
      
      <option value="110102016/mod01lec04.mp4">Longitudinal thinking and legacy factor:Organizational Growth(Contd..)</option>
      
      <option value="110102016/mod01lec05.mp4">Theory and majors schools of Thought and Framework of Organizational Analysis</option>
      
      <option value="110102016/mod01lec06.mp4">Theory and majors schools of thought and framework of organizational analysis(contd.)</option>
      
      <option value="110102016/mod01lec07.mp4">Theory and majors schools of thought and framework of organizational analysis(contd..)</option>
      
      <option value="110102016/mod01lec08.mp4">Systems contingency approach to organization theory and practice; techniques of organizational diagnosis</option>
      
      <option value="110102016/mod01lec09.mp4">Systems contingency approach to organization theory and practice; techniques of organizational diagnosis(contd)</option>
      
      <option value="110102016/mod01lec10.mp4">Systems contingency approach to organization theory and practice; techniques of organizational diagnosis(contd..)</option>
      
      <option value="110102016/mod01lec11.mp4">Theory of organizational structures � nature and consequence of structure</option>
      
      <option value="110102016/mod01lec12.mp4">Theory of organizational structures � nature and consequence of structure(contd.)</option>
      
      <option value="110102016/mod02lec13.mp4">Socio-culture dimension of work and behavior</option>
      
      <option value="110102016/mod02lec14.mp4">Socio-culture dimension of work and behavior(contd)</option>
      
      <option value="110102016/mod02lec15.mp4">Socio-culture dimension of work and behavior (contd..)</option>
      
      <option value="110102016/mod02lec16.mp4">Impact of environment and cultural variables on organization structure &amp; style</option>
      
      <option value="110102016/mod02lec17.mp4">Impact of environment and cultural variables on organization structure &amp; style(contd1)</option>
      
      <option value="110102016/mod02lec18.mp4">Impact of environment and cultural variables on organization structure &amp; style(contd2)</option>
      
      <option value="110102016/mod02lec19.mp4">Organization Change and Organisation Development</option>
      
      <option value="110102016/mod02lec20.mp4">Organization Change and Organisation Development(contd)</option>
      
      <option value="110102016/mod02lec21.mp4">Intervention strategies for organization development � individual, Group and Interpersonal Interventions</option>
      
      <option value="110102016/mod02lec22.mp4">Intervention strategies for organization development � individual, Group &amp; interpersonal interventions(contd.)</option>
      
      <option value="110102016/mod02lec23.mp4">Intervention strategies for organization development � individual, Group &amp; interpersonal interventions(contd..)</option>
      
      <option value="110102016/mod02lec24.mp4">Total System Intervention &amp; Stabilizing Change Management by Objectives</option>
      
      <option value="110102016/mod02lec25.mp4">Total System Intervention &amp; Stabilizing Change Management by Objectives(contd.)</option>
      
      <option value="110102016/mod02lec26.mp4">Total System Intervention &amp; Stabilizing Change Management by Objectives(contd..)</option>
      
      <option value="110102016/mod03lec27.mp4">Nature of Organisational Processes</option>
      
      <option value="110102016/mod03lec28.mp4">Nature of Organisational Processes(Contd.)</option>
      
      <option value="110102016/mod03lec29.mp4">Nature of Organisational Processes(Contd..)</option>
      
      <option value="110102016/mod03lec30.mp4">Environmental analysis Techniques and impact for organizational growth</option>
      
      <option value="110102016/mod03lec31.mp4">Environmental analysis Techniques and impact for organizational growth(contd.)</option>
      
      <option value="110102016/mod03lec32.mp4">Environmental analysis Techniques and impact for organizational growth(contd..)</option>
      
      <option value="110102016/mod03lec33.mp4">Issues of Mechnisation, Automation and Computerisation</option>
      
      <option value="110102016/mod03lec34.mp4">Issues of Mechnisation, Automation and Computerisation(contd.)</option>
      
      <option value="110102016/mod03lec35.mp4">Organisation Interdependence</option>
      
      <option value="110102016/mod03lec36.mp4">Organisation Interdependence(contd.)</option>
      
      <option value="110102016/mod03lec37.mp4">Organisation Interdependence(contd..)</option>
      
      <option value="110102016/mod03lec38.mp4">Organisation Evaluation </option>
      
      <option value="110102016/mod03lec39.mp4">Organisation Evaluation (contd_1)</option>
      
      <option value="110102016/mod03lec40.mp4">Organisation Evaluation (contd_2)</option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110102058</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Organisation of Engineering Systems and Human Resources Management</strong></td>
	<td><strong>Prof. Vinayshil Gautam</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option value="110102058/mod01lec01.mp4">Introduction to the subject and the course </option>
      
      <option value="110102058/mod01lec02.mp4">Understanding organizations: nature and functions </option>
      
      <option value="110102058/mod01lec03.mp4">Understanding organizations: nature and functions contd</option>
      
      <option value="110102058/mod01lec04.mp4">Concerns of organising engineering business and systems </option>
      
      <option value="110102058/mod01lec05.mp4">Concerns of organising engineering business and systems contd</option>
      
      <option value="110102058/mod01lec06.mp4">Concerns of organising engineering business and systems  contd..</option>
      
      <option value="110102058/mod01lec07.mp4">Structure and process issues in running organisations </option>
      
      <option value="110102058/mod01lec08.mp4">Structure and process issues in running organisations contd.</option>
      
      <option value="110102058/mod01lec09.mp4">Design issues in running organisations </option>
      
      <option value="110102058/mod01lec10.mp4">Design issues in running organisations contd.</option>
      
      <option value="110102058/mod01lec11.mp4">Operating organizations </option>
      
      <option value="110102058/mod01lec12.mp4">Operating organizations Contd.</option>
      
      <option value="110102058/mod01lec13.mp4">Operating organizations Contd..</option>
      
      <option value="110102058/mod02lec14.mp4">Cybernetics and systems framework </option>
      
      <option value="110102058/mod02lec15.mp4">Cybernetics and systems framework  Contd</option>
      
      <option value="110102058/mod02lec16.mp4">Socio-technical systems </option>
      
      <option value="110102058/mod02lec17.mp4">Socio-technical systems  Contd.</option>
      
      <option value="110102058/mod02lec18.mp4">Socio-technical systems Contd..</option>
      
      <option value="110102058/mod02lec19.mp4">Dealing with efficiency and excellence </option>
      
      <option value="110102058/mod02lec20.mp4">Dealing with efficiency and excellence  Contd.</option>
      
      <option value="110102058/mod02lec21.mp4">Dealing with efficiency and excellence Contd..</option>
      
      <option value="110102058/mod02lec22.mp4">Man-machine relationship </option>
      
      <option value="110102058/mod02lec23.mp4">Man-machine relationship Contd.</option>
      
      <option value="110102058/mod02lec24.mp4">Longitudinal Thinking </option>
      
      <option value="110102058/mod02lec25.mp4">Longitudinal Thinking  Contd.</option>
      
      <option value="110102058/mod03lec26.mp4">Concerns of recruitment, selection, skill formation and redeployment</option>
      
      <option value="110102058/mod03lec27.mp4">Concerns of recruitment, selection, skill formation and redeployment  Contd.</option>
      
      <option value="110102058/mod03lec28.mp4">Concerns of recruitment, selection, skill formation and redeployment Contd..</option>
      
      <option value="110102058/mod03lec29.mp4">Developing teams and leadership </option>
      
      <option value="110102058/mod03lec30.mp4">Developing teams and leadership Contd.</option>
      
      <option value="110102058/mod03lec31.mp4">Understanding motivation </option>
      
      <option value="110102058/mod03lec32.mp4">Understanding motivation  Contd.</option>
      
      <option value="110102058/mod03lec33.mp4">Elements of human resources planning </option>
      
      <option value="110102058/mod03lec34.mp4">Elements of human resources planning  Contd.</option>
      
      <option value="110102058/mod03lec35.mp4">Elements of human resources planning Contd..</option>
      
      <option value="110102058/mod03lec36.mp4">Indian Industrial Law and managing industrial </option>
      
      <option value="110102058/mod03lec37.mp4">Indian Industrial Law and managing industrial Contd.</option>
      
      <option value="110102058/mod03lec38.mp4">Indian Industrial Law and managing industrial  Contd..</option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110104024</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Introduction to Stochastic Processes and its Applications</strong></td>
	<td><strong>Dr. Raghu Nandan Sengupta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kanpur</strong></td>

	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option value="110104024/lecture1/main.html">Introduction to Stochastic Process</option>
      
      <option value="110104024/lecture2/2_1.html">Random Walks </option>
      
      <option value="110104024/lecture3/3_1.html">Markov Chains </option>
      
      <option value="110104024/lecture4/4_1.html">Markov Process</option>
      
      <option value="110104024/lecture5/5_1.html">Posson Process</option>
      
      <option value="110104024/lecture6/6_1.html">Derivation of Poisson Process</option>
      
      <option value="110104024/lecture7/7_1.htm">Poisson Process Continued </option>
      
      <option value="110104024/lecture8/8_1.htm">Some other cocenpts related to Poisson Process </option>
      
      <option value="110104024/lecture9/9_1.htm">Branching process </option>
      
      <option value="110104024/lecture10/10_1.htm">Application of Markov Chains</option>
      
      <option value="110104024/lecture11/11_1.htm">Application of Markov Process</option>
      
      <option value="110104024/lecture12/12_1.htm">Weiner Process</option>
      
      <option value="110104024/lecture13/13_1.htm">Differential Equation for Weiner Process</option>
      
      <option value="110104024/lecture14/14_1.htm">Renewal Theory</option>
      
      <option value="110104024/lecture15/15_1.htm">Renewal Theory Continued</option>
      
      <option value="110104024/lecture16/16_1.htm">Proof of Renewal Theory</option>
      
      <option value="110104024/lecture17/17_1.htm">Limit Theorems</option>
      
      <option value="110104024/lecture18/18_1.htm">Renewal Process Continued </option>
      
      <option value="110104024/lecture19/19_1.htm">Application of Renewal Theory</option>
      
      <option value="110104024/lecture20/20_1.htm">New Multi-Stage Sampling Procedure</option>
      
      <option value="110104024/lecture21/21_1.htm">Theoretical Backgground for the Simulation Study to study Sequential Sampling Procedures</option>
      
      <option value="110104024/lecture22/22_1.htm">Practical Application of Sequential Sampling Procedure</option>
      
      <option value="110104024/lecture23/23_1.htm">More Practical Application of Sequential Sampling Procedure</option>
      
      <option value="110104024/lecture24/24_1.htm">Random woalk and other areas</option>
      
      <option value="110104024/lecture25/25_1.htm">Diffusion Process</option>
      
      <option value="110104024/lecture26/26_1.htm">Properties of Brownian Motion</option>
      
      <option value="110104024/lecture27/27_1.htm">Martingles</option>
      
      <option value="110104024/lecture28/28_1.htm">Random Walks in more than one dimension</option>
      
      <option value="110104024/lecture29/29_1.htm">Application of stochastic processes in Queueing Theory </option>
      
      <option value="110104024/lecture30/30_1.htm">Examples of application of stochastic processes in Queueing Theory</option>
      
      <option value="110104024/lecture31/31_1.htm">Application of stochastic processes in Scheduling with examples</option>
      
      <option value="110104024/lecture32/32_1.htm">Scheduling Rules </option>
      
      <option value="110104024/lecture33/33_1.htm">Application of stochastic processes in Manufacturing with examples</option>
      
      <option value="110104024/lecture34/34_1.htm">Profit Maximization in Manufacturing Process </option>
      
      <option value="110104024/lecture35/35_1.htm">Option Pricing </option>
      
      <option value="110104024/lecture36/36_1.htm">Black-Scholes Model</option>
      
      <option value="110104024/lecture37/37_1.htm">Application of renewal theorey in Marketing with examples </option>
      
      <option value="110104024/lecture38/38_1.htm">  Examples of Application of renewal theorey in Marketing</option>
      
      <option value="110104024/lecture39/39_1.html">Application of Markov chain in trying to judge the efficiency of algorithms in OR </option>
      
      <option value="110104024/lecture40/40_1.html">Use of Markov Chain Monte Carlo Method </option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110104055</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Strategic Marketing - Contemporary Issues</strong></td>
	<td><strong>Prof. Jayanta Chatterjee</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110104055/mod01lec01.mp4">Strategic Marketing-Lecture01</option>
      
      <option  value="110104055/mod01lec02.mp4">Strategic Marketing-Lecture02</option>
      
      <option  value="110104055/mod01lec03.mp4">Strategic Marketing-Lecture03</option>
      
      <option  value="110104055/mod01lec04.mp4">Strategic Marketing-Lecture04</option>
      
      <option  value="110104055/mod01lec05.mp4">Strategic Marketing-Lecture05</option>
      
      <option  value="110104055/mod01lec06.mp4">Strategic Marketing-Lecture06</option>
      
      <option  value="110104055/mod01lec07.mp4">Strategic Marketing-Lecture07</option>
      
      <option  value="110104055/mod01lec08.mp4">Strategic Marketing-Lecture08</option>
      
      <option  value="110104055/mod01lec09.mp4">Strategic Marketing-Lecture9</option>
      
      <option  value="110104055/mod01lec10.mp4">Strategic Marketing-Lecture10</option>
      
      <option  value="110104055/mod01lec11.mp4">Strategic Marketing-Lecture11</option>
      
      <option  value="110104055/mod01lec12.mp4">Strategic Marketing-Lecture12</option>
      
      <option  value="110104055/mod01lec13.mp4">Strategic Marketing-Lecture13</option>
      
      <option  value="110104055/mod01lec14.mp4">Strategic Marketing-Lecture14</option>
      
      <option  value="110104055/mod01lec15.mp4">Strategic Marketing-Lecture15</option>
      
      <option  value="110104055/mod01lec16.mp4">Strategic Marketing-Lecture16</option>
      
      <option  value="110104055/mod01lec17.mp4">Strategic Marketing-Lecture17</option>
      
      <option  value="110104055/mod01lec18.mp4">Strategic Marketing-Lecture18</option>
      
      <option  value="110104055/mod01lec19.mp4">Strategic Marketing-Lecture19</option>
      
      <option  value="110104055/mod01lec20.mp4">Strategic Marketing-Lecture20</option>
      
      <option  value="110104055/mod01lec21.mp4">Strategic Marketing-Lecture21</option>
      
      <option  value="110104055/mod01lec22.mp4">Strategic Marketing-Lecture22</option>
      
      <option  value="110104055/mod01lec23.mp4">Strategic Marketing-Lecture23</option>
      
      <option  value="110104055/mod01lec24.mp4">Strategic Marketing-Lecture24</option>
      
      <option  value="110104055/mod01lec25.mp4">Strategic Marketing-Lecture25</option>
      
      <option  value="110104055/mod01lec26.mp4">Strategic Marketing-Lecture26</option>
      
      <option  value="110104055/mod01lec27.mp4">Strategic Marketing-Lecture27</option>
      
      <option  value="110104055/mod01lec28.mp4">Strategic Marketing-Lecture28</option>
      
      <option  value="110104055/mod01lec29.mp4">Strategic Marketing-Lecture29</option>
      
      <option  value="110104055/mod01lec30.mp4">Strategic Marketing-Lecture30</option>
      
      <option  value="110104055/mod01lec31.mp4">Strategic Marketing-Lecture31</option>
      
      <option  value="110104055/mod01lec32.mp4">Strategic Marketing-Lecture32</option>
      
      <option  value="110104055/mod01lec33.mp4">Strategic Marketing-Lecture33</option>
      
      <option  value="110104055/mod01lec34.mp4">Strategic Marketing-Lecture34</option>
      
      <option  value="110104055/mod01lec35.mp4">Strategic Marketing-Lecture35</option>
      
      <option  value="110104055/mod01lec36.mp4">Strategic Marketing-Lecture36</option>
      
      <option  value="110104055/mod01lec37.mp4">Strategic Marketing-Lecture37</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110104063</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>  NOC:Strategy: An Introduction to game Theory</strong></td>
	<td><strong>Dr. Vimal Kumar, Prof. Aditya K. Jagannatham</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="110104063/mod01lec01.mp4">Introduction Examples: Markets/ Politics/ Auctions                                </option>
<option value="110104063/mod01lec02.mp4">Prisoners� Dilemma                                                                </option>
<option value="110104063/mod01lec03.mp4">Best Response and Nash Equilibrium                                                </option>
<option value="110104063/mod01lec04.mp4">Another Example: Markets                                                          </option>
<option value="110104063/mod01lec05.mp4">Dominant Strategies                                                               </option>
<option value="110104063/mod01lec06.mp4">Stag Hunt � Coordination and Bank Runs                                            </option>
<option value="110104063/mod01lec07.mp4">Battle of Sexes and Multiple Nash Equilibria                                      </option>
<option value="110104063/mod02lec08.mp4">Tragedy of Commons                                                                </option>
<option value="110104063/mod02lec09.mp4">Tragedy of Commons.                                                               </option>
<option value="110104063/mod02lec10.mp4">Cournot Duopoly                                                                   </option>
<option value="110104063/mod02lec11.mp4">Cournot Duopoly.                                                                  </option>
<option value="110104063/mod02lec12.mp4">Mixed Strategies                                                                  </option>
<option value="110104063/mod02lec13.mp4">Battle of Sexes                                                                   </option>
<option value="110104063/mod02lec14.mp4">Battle of Sexes: Best Response Dynamic                                            </option>
<option value="110104063/mod02lec15.mp4">Paying Taxes                                                                      </option>
<option value="110104063/mod02lec16.mp4">Portfolio Management Game                                                         </option>
<option value="110104063/mod03lec17.mp4">Rationality, Choice and Common Knowledge                                          </option>
<option value="110104063/mod03lec18.mp4">Lterated Elimination of Domination Strategies                                     </option>
<option value="110104063/mod03lec19.mp4">Auction                                                                           </option>
<option value="110104063/mod03lec20.mp4">Auction : As a Normal Form Game                                                   </option>
<option value="110104063/mod03lec21.mp4">Traffic at Equilibrium and Braesss Paradox                                        </option>
<option value="110104063/mod03lec22.mp4">Linear Markets                                                                    </option>
<option value="110104063/mod03lec23.mp4">Extensive Form Games                                                              </option>
<option value="110104063/mod04lec24.mp4">Game Tree and Information Sets                                                    </option>
<option value="110104063/mod04lec25.mp4">Strategies in Extensive from Games                                                </option>
<option value="110104063/mod04lec26.mp4">Extensive from Games with Simultaneous Moves and Their Normal From Representation </option>
<option value="110104063/mod04lec27.mp4">Sub Game Perfect Equilibrium Part-I                                               </option>
<option value="110104063/mod04lec28.mp4">Sub Game Perfect Equilibrium Part-II                                              </option>
<option value="110104063/mod04lec29.mp4">The Art of War: Lesson 1                                                          </option>
<option value="110104063/mod04lec30.mp4">Ultimatum Game                                                                    </option>
<option value="110104063/mod04lec31.mp4">Stackelberg Model                                                                 </option>
<option value="110104063/mod05lec32.mp4">Bayesian Games                                                                    </option>
<option value="110104063/mod05lec33.mp4">Bayesian Game: BoS                                                                </option>
<option value="110104063/mod05lec34.mp4">Bayesian Nash Equilibrium                                                         </option>
<option value="110104063/mod05lec35.mp4">Yield vs Fight                                                                    </option>
<option value="110104063/mod05lec36.mp4">Yield vs. </option>
<option value="110104063/mod05lec37.mp4">Bayesian</option>
<option value="110104063/mod05lec38.mp4">Bayesian Games with mixed </option>
<option value="110104063/mod06lec39.mp4">Auctions                                                                          </option>
<option value="110104063/mod06lec40.mp4">Sealed Bid First Price Auction                                                    </option>
<option value="110104063/mod06lec41.mp4">Expected Revenue                                                                  </option>
<option value="110104063/mod06lec42.mp4">Bayesian Second Price Auction                                                     </option>
<option value="110104063/mod06lec43.mp4">Expected Revenue: Second Price Auction                                            </option>
<option value="110104063/mod06lec44.mp4">All Pay Auction                                                                   </option>
<option value="110104063/mod07lec45.mp4">A Hawk-Dove Game                                                                  </option>
<option value="110104063/mod07lec46.mp4">Evolutionary Biology                                                              </option>
<option value="110104063/mod07lec47.mp4">Evolutionary stable Strategy (ESS)                                                </option>
<option value="110104063/mod07lec48.mp4">ESS and NE                                                                        </option>
<option value="110104063/mod07lec49.mp4">Repeated </option>
<option value="110104063/mod07lec50.mp4">Finitely Repeated Game having Multiple </option>
<option value="110104063/mod07lec51.mp4">Chain-Store Paradox                                                               </option>
<option value="110104063/mod07lec52.mp4">Infinitely </option>
<option value="110104063/mod08lec53.mp4">Non  Cooperative Bargaining                                                       </option>
<option value="110104063/mod08lec54.mp4">Axiomatic Bargaining                                                              </option>
<option value="110104063/mod08lec55.mp4">Extensive Form Game with Incomplete </option>
<option value="110104063/mod08lec56.mp4">Introduction to perfect Bayesian Equilibrium                                      </option>
<option value="110104063/mod08lec57.mp4">Obtaining PBE                                                                     </option>
<option value="110104063/mod08lec58.mp4">Gift Game </option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110105029</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Consumer Behaviour</strong></td>
	<td><strong>Dr. Sangeeta Sahney</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105029/mod1lec1.html">Lecture 1 - Introduction to Consumer Behavior I</option>
      
      <option  value="110105029/mod1lec2.html">Lecture 2 -Introduction to Consumer Behavior II</option>
      
      <option  value="110105029/mod2lec3.html">	Lecture 3 - Market Research and Consumer Behavior I </option>
      
      <option  value="110105029/mod2lec4.html">Lecture 4 - Market Research and Consumer Behavior II</option>
      
      <option  value="110105029/mod3lec5.html">Lecture 5 - Market Segmentation and Positioning I </option>
      
      <option  value="110105029/mod3lec6.html">Lecture 6 - Market Segmentation and Positioning II</option>
      
      <option  value="110105029/mod4lec7.html">Lecture 7 - The Consumer Decision Making Process I </option>
      
      <option  value="110105029/mod4lec8.html">Lecture 8 - The Consumer Decision Making Process II </option>
      
      <option  value="110105029/mod5lec9.html">Lecture 9 - Models Of Consumer Behavior I</option>
      
      <option  value="110105029/mod5lec10.html">Lecture 10 -Models Of Consumer Behavior II</option>
      
      <option  value="110105029/mod5lec11.html">Lecture 11 - Models Of Consumer Behavior III</option>
      
      <option  value="110105029/mod5lec12.html">Lecture 12 - Models Of Consumer Behavior IV</option>
      
      <option  value="110105029/mod6.html">Introduction Module 6</option>
      
      <option  value="110105029/mod6.1lec13.html">Lecture 13 - Consumer Needs and Motivation I</option>
      
      <option  value="110105029/mod6.1lec14.html">Lecture 14 - Motivational theories, application and their                     implication for marketers </option>
      
      <option  value="110105029/mod6.1lec15.html">	Lecture 15 - Consumer emotions and moods and their implication for marketers</option>
      
      <option  value="110105029/mod6.1lec16.html">Lecture 16 - Consumer Involvement</option>
      
      <option  value="110105029/mod6.1lec17.html">Lecture 17 - Consumer involvement models and implications for marketers</option>
      
      <option  value="110105029/mod6.2lec18.html">Lecture 18 - Consumer Learning</option>
      
      <option  value="110105029/mod6.2lec19.html">Lecture 19 - Consumer learning theories and their implication for marketers, Part I</option>
      
      <option  value="110105029/mod6.2lec20.html">Lecture 20 - Consumer learning theories and their implication for marketers, Part II</option>
      
      <option  value="110105029/mod6.2lec21.html">Lecture 21 - Consumer learning theories and their implication for marketers, Part III</option>
      
      <option  value="110105029/mod6.3lec22.html">Lecture 22 - Consumer personality, traits and types,theories of personality I</option>
      
      <option  value="110105029/mod6.3lec23.html">Lecture 23 - Theories of personality II, self - concept and self- image, implications of consumer personality for marketers</option>
      
      <option  value="110105029/mod6.4lec24.html">Lecture 24 - Consumer Perception</option>
      
      <option  value="110105029/mod6.4lec25.html">Lecture 25 - Consumer perceptual mechanism</option>
      
      <option  value="110105029/mod6.4lec26.html">Lecture 26 - Consumer imagery and risk, consumer perception and                         implications for marketers </option>
      
      <option  value="110105029/mod6.5lec27.html">Lecture 27 - Consumer attitudes, models of attitudes</option>
      
      <option  value="110105029/mod6.5lec28.html">Lecture 28 - Measurement of attitudes, attitude formation and change</option>
      
      <option  value="110105029/mod6.5lec29.html">	Lecture 29 - Attitude change, consumer attitude and implications for                         marketers</option>
      
      <option  value="110105029/mod6.6lec30.html">	Lecture 30 - Consumer communication and marketing communication</option>
      
      <option  value="110105029/mod6.6lec31.html">Lecture 31 - Communication strategy,consumer communication and implications for marketers</option>
      
      <option  value="110105029/mod7.html">Introduction Module 7</option>
      
      <option  value="110105029/mod7.1lec32.html">Lecture 32 - Consumer Groups and Reference Groups</option>
      
      <option  value="110105029/mod7.2lec33.html">Lecture 33 - Consumer Reference Groups</option>
      
      <option  value="110105029/mod7.3lec34.html">Lecture 34 - Family and Family Life Cycle</option>
      
      <option  value="110105029/mod7.4lec35.html">Lecture 35 - Social class and mobility, lifestyle analysis</option>
      
      <option  value="110105029/mod7.5lec36.html">Lecture 36 - Culture and sub-culture</option>
      
      <option  value="110105029/mod7.5lec37.html">Lecture 37 - Cross culture consumer analysis,relevance for marketers</option>
      
      <option  value="110105029/mod7.6lec38.html">Lecture 38 - Interpersonal Communication and Influence</option>
      
      <option  value="110105029/mod7.7lec39.html">Lecture 39 - Opinion Leadership</option>
      
      <option  value="110105029/mod8lec40.html">Lecture 40 - Diffusion Of Innovation I</option>
      
      <option  value="110105029/mod8lec41.html">Lecture 41 - Diffusion Of Innovation II</option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110105030</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Econometric Modelling</strong></td>
	<td><strong>Dr. Rudra P. Pradhan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105030/mod01lec01.mp4">Introduction to Econometric Modelling</option>
      
      <option  value="110105030/mod01lec02.mp4">Structure of Econometric Modelling</option>
      
      <option  value="110105030/mod01lec03.mp4">Univariate Econometric Modelling</option>
      
      <option  value="110105030/mod01lec04.mp4">Bivariate Econometric Modelling</option>
      
      <option  value="110105030/mod01lec05.mp4">Bivariate Econometric Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec06.mp4">Probability</option>
      
      <option  value="110105030/mod01lec07.mp4">Bivariate  Econometric Modelling</option>
      
      <option  value="110105030/mod01lec08.mp4">Bivariate Econometric Modelling (Contd. )</option>
      
      <option  value="110105030/mod01lec09.mp4">Reliability BEM</option>
      
      <option  value="110105030/mod01lec10.mp4">Reliability BEM (Contd...1)</option>
      
      <option  value="110105030/mod01lec11.mp4">Reliability BEM (Contd...2)</option>
      
      <option  value="110105030/mod01lec12.mp4">ANOVA for Bivariate Econometric Modelling</option>
      
      <option  value="110105030/mod01lec13.mp4">Trivariate Econometric Modelling</option>
      
      <option  value="110105030/mod01lec14.mp4">Trivariate Econometric Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec15.mp4">Reliability of Trivariate Econometric Modelling</option>
      
      <option  value="110105030/mod01lec16.mp4">Multivariate Econometric Modelling</option>
      
      <option  value="110105030/mod01lec17.mp4">Multivariate Econometric Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec18.mp4">Matrix Approach to Econometric Modelling</option>
      
      <option  value="110105030/mod01lec19.mp4">Matrix Approach to Econometric Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec20.mp4">Multicolinearity Problem</option>
      
      <option  value="110105030/mod01lec21.mp4">Multicolinearity Problem (Contd.)</option>
      
      <option  value="110105030/mod01lec22.mp4">Autocorrelation Problem</option>
      
      <option  value="110105030/mod01lec23.mp4">Autocorrelation Problem (Contd.)</option>
      
      <option  value="110105030/mod01lec24.mp4">Heteroscedasticity Problem</option>
      
      <option  value="110105030/mod01lec25.mp4">Heteroscedasticity Problem (Contd.)</option>
      
      <option  value="110105030/mod01lec26.mp4">Dummy Modelling</option>
      
      <option  value="110105030/mod01lec27.mp4">Dummy Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec28.mp4">LOGIT and PROBIT Model</option>
      
      <option  value="110105030/mod01lec29.mp4">LOGIT and PROBIT Model (Contd.)</option>
      
      <option  value="110105030/mod01lec30.mp4">Panel Data Modelling</option>
      
      <option  value="110105030/mod01lec31.mp4">Panel Data Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec32.mp4">Simultaneous Equation Modelling</option>
      
      <option  value="110105030/mod01lec33.mp4">Simultaneous Equation Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec34.mp4">Structural Equation Modelling</option>
      
      <option  value="110105030/mod01lec35.mp4">Structural Equation Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec36.mp4">Time Series Modelling</option>
      
      <option  value="110105030/mod01lec37.mp4">Time Series Modelling (Contd.)</option>
      
      <option  value="110105030/mod01lec38.mp4">Unit Root</option>
      
      <option  value="110105030/mod01lec39.mp4">Cointegration</option>
      
      <option  value="110105030/mod01lec40.mp4">Concluding Remarks</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110105031</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>International Finance</strong></td>
	<td><strong>Dr. Arun K. Misra,Dr. Prabina Rajib </strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105031/m1l1a.html">International Financial Environment</option>
      
      <option  value="110105031/m2l2.html">International Financial Transactions</option>
      
      <option  value="110105031/m3l3.html">Foreign Exchange Market: An Introduction </option>
      
      <option  value="110105031/m4l4.html">Foreign Exchange Market: Market Participants</option>
      
      <option  value="110105031/m5l5.html">Introduction to Indian Foreign Exchange Market</option>
      
      <option  value="110105031/m6l6.html">International Monetary System: Gold Standard</option>
      
      <option  value="110105031/m7l7.html">International Monetary System: Paper Currency Standard, Purchasing Power Parity & Bretton Woods System</option>
      
      <option  value="110105031/m9l9.html">Foreign Exchange Contracts: Spot and Forward Contracts</option>
      
      <option  value="110105031/m10l10.html">Foreign Exchange Contracts: Swaps and Options</option>
      
      <option  value="110105031/m11l11.html">Foreign Exchange Quotations: Spot Market</option>
      
      <option  value="110105031/m12l12.html">Foreign Exchange Quotations: Bid-Ask Spread</option>
      
      <option  value="110105031/m13l13.html">Foreign Exchange Quotations: Cross, Rates, TT Buy/Sell Rates, TC Buy/Sell Rates </option>
      
      <option  value="110105031/m14l14.html">Exchange Rate Arithmetic: Forward Rates</option>
      
      <option  value="110105031/m15l15.html">Exchange Rate Arithmetic: Forward Rates (Contd.)</option>
      
      <option  value="110105031/m16l16.html">Exchange Rate Arithmetic:Cross Rates and Triangular Arbitrage</option>
      
      <option  value="110105031/m17l17.html">Exchange Rate Arithmetic: Cross Rates & Triangular Arbitrage (Contd.)</option>
      
      <option  value="110105031/m18l18.html">Exchange Rate Theories: Exchange Rate Pass Troughs</option>
      
      <option  value="110105031/m19l19.html">International Parity Conditions</option>
      
      <option  value="110105031/m20l20.html">International Parity Conditions: (Continued)</option>
      
      <option  value="110105031/m21l21.html">Foreign Exchange Exposures: Transaction Exposure</option>
      
      <option  value="110105031/m22l22.html">Transaction Exposure Management �Part-1</option>
      
      <option  value="110105031/m23l23.html">Transaction Exposure Management �Part-2</option>
      
      <option  value="110105031/m24l24.html">Interest Rate Swaps</option>
      
      <option  value="110105031/m25l25.html">Currency Swaps</option>
      
      <option  value="110105031/m26l26.html">Operating Exposure Measurement</option>
      
      <option  value="110105031/m27l27.html">Operating Exposure Management: Operational Level</option>
      
      <option  value="110105031/m28l28.html">Operating Exposure Management: At Strategic Level</option>
      
      <option  value="110105031/m29l29.html">Translation/Accounting Exposure: Integral vs. Non-Integral Foreign Operation.</option>
      
      <option  value="110105031/m30l30.html">Translation/Accounting Exposure:  Measurement and Management</option>
      
      <option  value="110105031/m31l31.html">International Trade and Risk Associated with International Trade</option>
      
      <option  value="110105031/m32l32.html">Financing of International Trade</option>
      
      <option  value="110105031/m33l33.html">International Equity Market and Cross Listing of Shares</option>
      
      <option  value="110105031/m34l34.html">International Equity Market and Indian ADRs and GDRs </option>
      
      <option  value="110105031/m35l35.html">International Bond Market: An Introduction </option>
      
      <option  value="110105031/m36l36.html">Indian Companies and International Bond Market</option>
      
      <option  value="110105031/m37l37a.html">International Perspective of Cost of Capital</option>
      
      <option  value="110105031/m38l38.html">International Capital Structure</option>
      
      <option  value="110105031/m39l39.html">International Capital Budgeting</option>
      
      <option  value="110105031/m40l40.html">Evaluation of Foreign Direct Investment </option>
      
      <option  value="110105031/m8l8.html">Floating Rate, Currency Boards & Currency  Basket Systems</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110105033</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Organizational Behaviour</strong></td>
	<td><strong>Dr. Susmita Mukhopadhyay</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105033/mod01lec01.mp4">Understanding Organizational Behaviour</option>
      
      <option  value="110105033/mod01lec02.mp4">Effectiveness in Organizations</option>
      
      <option  value="110105033/mod01lec03.mp4">Social System and Organizational Culture</option>
      
      <option  value="110105033/mod01lec04.mp4">Social System and Organizational Culture (Contd.)</option>
      
      <option  value="110105033/mod01lec05.mp4">Individual differences and work behaviour</option>
      
      <option  value="110105033/mod01lec06.mp4">Personality</option>
      
      <option  value="110105033/mod01lec07.mp4">Personality (Contd.)</option>
      
      <option  value="110105033/mod01lec08.mp4">Attitudes</option>
      
      <option  value="110105033/mod01lec09.mp4">Attitudes (Contd.)</option>
      
      <option  value="110105033/mod01lec10.mp4">Attitudes (Contd. )</option>
      
      <option  value="110105033/mod01lec11.mp4">Perceptions and Attributions </option>
      
      <option  value="110105033/mod01lec12.mp4">Perceptions and Attributions (Contd.)</option>
      
      <option  value="110105033/mod01lec13.mp4">Motivation</option>
      
      <option  value="110105033/mod01lec14.mp4">Motivation (Contd.)</option>
      
      <option  value="110105033/mod01lec15.mp4">Job Design, Work and Motivation</option>
      
      <option  value="110105033/mod01lec16.mp4">Job Design, Work and Motivation (Contd.)</option>
      
      <option  value="110105033/mod01lec17.mp4">Evaluation, Feedback and Rewards</option>
      
      <option  value="110105033/mod01lec18.mp4">Evaluation, Feedback and Rewards (Contd.)</option>
      
      <option  value="110105033/mod01lec19.mp4">Managing Misbehaviour</option>
      
      <option  value="110105033/mod01lec20.mp4">Stress</option>
      
      <option  value="110105033/mod01lec21.mp4">Counseling</option>
      
      <option  value="110105033/mod01lec22.mp4">Informal and Formal Groups</option>
      
      <option  value="110105033/mod01lec23.mp4">Teams and Teambuilding</option>
      
      <option  value="110105033/mod01lec24.mp4">Managing Conflict and Negotiation</option>
      
      <option  value="110105033/mod01lec25.mp4">Managing Conflict and Negotiation (Contd.)</option>
      
      <option  value="110105033/mod01lec26.mp4">Power and Politics</option>
      
      <option  value="110105033/mod01lec27.mp4">Empowerment and Participation</option>
      
      <option  value="110105033/mod01lec28.mp4">Assertive Behaviour and Transactional Analysis</option>
      
      <option  value="110105033/mod01lec29.mp4">Communication</option>
      
      <option  value="110105033/mod01lec30.mp4">Communication (Contd.)</option>
      
      <option  value="110105033/mod01lec31.mp4">Decision Making</option>
      
      <option  value="110105033/mod01lec32.mp4">Decision Making (Contd.)</option>
      
      <option  value="110105033/mod01lec33.mp4">Leadership</option>
      
      <option  value="110105033/mod01lec34.mp4">Leadership (Contd.)</option>
      
      <option  value="110105033/mod01lec35.mp4">Leadership  (Contd.)</option>
      
      <option  value="110105033/mod01lec36.mp4">Organizational structure and Design</option>
      
      <option  value="110105033/mod01lec37.mp4">Organizational structure and Design (Contd.)</option>
      
      <option  value="110105033/mod01lec38.mp4">Organizational structure and Design (Contd. )</option>
      
      <option  value="110105033/mod01lec39.mp4">Change and Innovation</option>
      
      <option  value="110105033/mod01lec40.mp4">Change and Innovation (Contd.)</option>
      
      <option  value="110105033/mod01lec41.mp4">Organizational behaviour across cultures</option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110105034</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Organizational Behaviour</strong></td>
	<td><strong>Dr. Susmita Mukhopadhyay</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105034/m1l1.html">Understanding Organizational Behaviour</option>
      
      <option  value="110105034/m1l2.html">Effectiveness in Organizations</option>
      
      <option  value="110105034/m1l3.html">Social systems and organizational culture</option>
      
      <option  value="110105034/m1l4a.html">Social systems and organizational culture  (Contd.) </option>
      
      <option  value="110105034/m2l5.html">Individual differences and work behaviour</option>
      
      <option  value="110105034/m2l6a.html">Personality </option>
      
      <option  value="110105034/m2l7.html">Personality (Contd.) </option>
      
      <option  value="110105034/m2l8.html">Attitudes </option>
      
      <option  value="110105034/m2l9.html">Attitudes (Contd.) </option>
      
      <option  value="110105034/m2l10.html">Attitudes (Continued) </option>
      
      <option  value="110105034/m2l11.html">Perceptions and Attributions</option>
      
      <option  value="110105034/m2l12.html">Perceptions and Attributions (Contd.)</option>
      
      <option  value="110105034/m2l13.html">Motivation</option>
      
      <option  value="110105034/m2l14.html">Motivation (Contd.) </option>
      
      <option  value="110105034/m2l15.html">Job Design, Work and Motivation</option>
      
      <option  value="110105034/m2l16.html">Job Design, Work and Motivation (Contd.)</option>
      
      <option  value="110105034/m2l17.html">Evaluation, Feedback and Rewards </option>
      
      <option  value="110105034/m2l18.html">Evaluation, Feedback and Rewards (Contd.) </option>
      
      <option  value="110105034/m2l19.html">Managing misbehaviour </option>
      
      <option  value="110105034/m2l20.html">Stress and Counseling</option>
      
      <option  value="110105034/m2l21.html">Stress and Counseling (Contd.) </option>
      
      <option  value="110105034/m3l22.html">Informal and Formal Groups</option>
      
      <option  value="110105034/m3l23.html">Teams and Team Building</option>
      
      <option  value="110105034/m3l24.html">Managing Conflict and Negotiation</option>
      
      <option  value="110105034/m3l25.html">Managing Conflict and Negotiation (Contd.) </option>
      
      <option  value="110105034/m3l26.html">Power and Politics </option>
      
      <option  value="110105034/m3l27.html">Empowerment and participation</option>
      
      <option  value="110105034/m3l28.html">Assertive Behaviour and Transactional Analysis</option>
      
      <option  value="110105034/m4l29aa.html">Communication</option>
      
      <option  value="110105034/m4l30a.html">Communication (Contd.) </option>
      
      <option  value="110105034/m4l31.html">Decision making</option>
      
      <option  value="110105034/m4l32a.html">Decision making (Contd.) </option>
      
      <option  value="110105034/m4l33.html">Leadership</option>
      
      <option  value="110105034/m4l35.html">Leadership (Continued) </option>
      
      <option  value="110105034/m5l36a.html">Organizational Structure and Design</option>
      
      <option  value="110105034/m5l37.html">Organizational Structure and Design (Contd.) </option>
      
      <option  value="110105034/m5l38.html">Organizational Structure and Design (Continued)</option>
      
      <option  value="110105034/m5l39.html">Change and Innovation </option>
      
      <option  value="110105034/m6l40.html">Organizational behaviour across cultures </option>
      
      <option  value="110105034/m4l34a.html">Leadership (Contd.) </option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110105035</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Security Analysis and Portfolio Management</strong></td>
	<td><strong>Dr. Chandra Sekhar Mishra,Dr. Jitendra Mahakud</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105035/mod01lec1.mp4">Introduction to Investment Management  </option>
      
      <option  value="110105035/mod01lec2.mp4">Markets for Investment</option>
      
      <option  value="110105035/mod01lec3.mp4">Risk and Return</option>
      
      <option  value="110105035/mod01lec4.mp4">Risk and Return (Contd.)</option>
      
      <option  value="110105035/mod01lec5.mp4">Organization and Function of Equity and Debt Markets</option>
      
      <option  value="110105035/mod01lec6.mp4">Mutual Funds</option>
      
      <option  value="110105035/mod01lec7.mp4">Market Efficiency - Concepts and forms of efficiency</option>
      
      <option  value="110105035/mod01lec8.mp4">Testing Market Efficiency</option>
      
      <option  value="110105035/mod01lec9.mp4">Financial Statement Analysis</option>
      
      <option  value="110105035/mod01lec10.mp4">Financial Statement Analysis (Contd.)</option>
      
      <option  value="110105035/mod01lec11.mp4">Valuation of Equity Shares - I</option>
      
      <option  value="110105035/mod01lec12.mp4">Valuation of Equity Shares - II</option>
      
      <option  value="110105035/mod01lec13.mp4">Economic Analysis - I</option>
      
      <option  value="110105035/mod01lec14.mp4">Economic Analysis - II</option>
      
      <option  value="110105035/mod01lec15.mp4">Industry Analysis - I</option>
      
      <option  value="110105035/mod01lec16.mp4">Industry Analysis - II</option>
      
      <option  value="110105035/mod01lec17.mp4">Company Analysis - I</option>
      
      <option  value="110105035/mod01lec18.mp4">Company Analysis - II</option>
      
      <option  value="110105035/mod01lec19.mp4">Technical Analysis - I</option>
      
      <option  value="110105035/mod01lec20.mp4">Technical Analysis - II</option>
      
      <option  value="110105035/mod01lec21.mp4">Introduction to Portfolio Management</option>
      
      <option  value="110105035/mod01lec22.mp4">Introduction to Portfolio Management (Contd.)</option>
      
      <option  value="110105035/mod01lec23.mp4">Capital Market Theory - I</option>
      
      <option  value="110105035/mod01lec24.mp4">Capital Market Theory - II</option>
      
      <option  value="110105035/mod01lec25.mp4">Arbitrage Pricing Theory</option>
      
      <option  value="110105035/mod01lec26.mp4">Multifactor Pricing Model</option>
      
      <option  value="110105035/mod01lec27.mp4">Markowitz Optimal Portfolio Selection Model</option>
      
      <option  value="110105035/mod01lec28.mp4">Other Optimal Portfolio Selection Models</option>
      
      <option  value="110105035/mod01lec29.mp4">Equity Portfolio Management Strategies - I</option>
      
      <option  value="110105035/mod01lec30.mp4">Equity Portfolio Management Strategies - II</option>
      
      <option  value="110105035/mod01lec31.mp4">Introduction to Bond Analysis</option>
      
      <option  value="110105035/mod01lec32.mp4">Bond Pricing and Yield</option>
      
      <option  value="110105035/mod01lec33.mp4">Interest Rate: Determination & Structure</option>
      
      <option  value="110105035/mod01lec34.mp4">Bond Price Volatility</option>
      
      <option  value="110105035/mod01lec35.mp4">Bond Portfolio Management Strategies - I</option>
      
      <option  value="110105035/mod01lec36.mp4">Bond Portfolio Management Strategies - II</option>
      
      <option  value="110105035/mod01lec37.mp4">Derivatives - I</option>
      
      <option  value="110105035/mod01lec38.mp4">Derivatives - II</option>
      
      <option  value="110105035/mod01lec39.mp4">Portfolio Performance Evaluation - I</option>
      
      <option  value="110105035/mod01lec40.mp4">Portfolio Performance Evaluation - II</option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110105038</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Services Marketing</strong></td>
	<td><strong>Dr. Biplab Datta</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105038/M1L1.pdf">Introduction</option>
      
      <option  value="110105038/M1L2.pdf">What is Marketing Management?</option>
      
      <option  value="110105038/M1L3.pdf">The Service Process</option>
      
      <option  value="110105038/M1L4.pdf">Characteristics of Services</option>
      
      <option  value="110105038/M2L5.pdf">Understanding the Macro Environment �I</option>
      
      <option  value="110105038/M2L6.pdf">Understanding the Macro Environment � II</option>
      
      <option  value="110105038/M2L7.pdf">Understanding the Macro Environment � III</option>
      
      <option  value="110105038/M2L8.pdf">Understanding the Macro Environment � IV</option>
      
      <option  value="110105038/M2L9.pdf">Understanding the Micro Environment</option>
      
      <option  value="110105038/M2L10.pdf">Understanding the Business Environment</option>
      
      <option  value="110105038/M3L11.pdf">Exploring Marketing Opportunities � I </option>
      
      <option  value="110105038/M3L12.pdf">Exploring Marketing Opportunities � II </option>
      
      <option  value="110105038/M4L13.pdf">Segmenting the Market</option>
      
      <option  value="110105038/M4L14.pdf">Targeting and Positioning</option>
      
      <option  value="110105038/M5L15.pdf">Services Marketing Process</option>
      
      <option  value="110105038/M5L16.pdf">Services Marketing Research</option>
      
      <option  value="110105038/M6L17.pdf">Understanding Consumer Behaviour</option>
      
      <option  value="110105038/M7L18.html">New Service Development � I</option>
      
      <option  value="110105038/M7L19.html">New Service Development � II</option>
      
      <option  value="110105038/M7L20.html">The Service Product</option>
      
      <option  value="110105038/M8L21.html">Service Quality - I</option>
      
      <option  value="110105038/M8L22.html">Service Quality - II</option>
      
      <option  value="110105038/M9L23.html">Designing the Service Process � I</option>
      
      <option  value="110105038/M9L24.html">Designing the Service Process � II</option>
      
      <option  value="110105038/M10L25.html">Developing Service Personnel</option>
      
      <option  value="110105038/M11L26.html">Educating the Customers - I </option>
      
      <option  value="110105038/M11L27.html">Educating the Customers - II </option>
      
      <option  value="110105038/M12L28.html">Managing Service Delivery Channels</option>
      
      <option  value="110105038/M12L29.html">Managing Channel Conflict</option>
      
      <option  value="110105038/M12L30.html">Managing Demand and Capacity</option>
      
      <option  value="110105038/M13L31.html">Designing the Physical Evidence � I</option>
      
      <option  value="110105038/M13L32.html">Designing the Physical Evidence � II</option>
      
      <option  value="110105038/M14L33.html">Managing Integrated Marketing Communications � I</option>
      
      <option  value="110105038/M14L34.html">Managing Integrated Marketing Communications � II</option>
      
      <option  value="110105038/M15L35.html">Pricing the Service</option>
      
      <option  value="110105038/M15L36.html">Value Pricing of Services</option>
      
      <option  value="110105038/M16L37.html">Managing Customers</option>
      
      <option  value="110105038/M17L38.html">Managing Service Recovery</option>
      
      <option  value="110105038/M18L39.html">Providing Service Guarantees</option>
      
      <option  value="110105038/M19L40.html">Consumer Protection</option>
          </select>
    
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110105039</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Six Sigma</strong></td>
	<td><strong>Prof. Tapan P. Bagchi</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105039/mod01lec1.mp4">Concepts in Quality Management - I</option>
      
      <option  value="110105039/mod01lec2.mp4">Concepts in Quality Management - II</option>
      
      <option  value="110105039/mod01lec3.mp4">Concepts in Quality Management - III</option>
      
      <option  value="110105039/mod01lec4.mp4">Initiating Six Sigma</option>
      
      <option  value="110105039/mod01lec5.mp4">Review of Probability and Statistics - I</option>
      
      <option  value="110105039/mod01lec6.mp4">Review of Probability and Statistics - II</option>
      
      <option  value="110105039/mod01lec7.mp4">Review of Probability and Statistics - III</option>
      
      <option  value="110105039/mod01lec8.mp4">Review of Probability and Statistics - IV</option>
      
      <option  value="110105039/mod01lec9.mp4">QM Systems Overview</option>
      
      <option  value="110105039/mod01lec10.mp4">Cost of Quality and TQM Tools</option>
      
      <option  value="110105039/mod01lec11.mp4">QFD and ISO 9000</option>
      
      <option  value="110105039/mod01lec12.mp4">QS 9000 and Awards</option>
      
      <option  value="110105039/mod01lec13.mp4">Competing Through Service Quality</option>
      
      <option  value="110105039/mod01lec14.mp4">Introduction to Project Management</option>
      
      <option  value="110105039/mod01lec15.mp4">Project Life Cycle</option>
      
      <option  value="110105039/mod01lec16.mp4">Critical Path Method</option>
      
      <option  value="110105039/mod01lec17.mp4">Measurement System Analysis</option>
      
      <option  value="110105039/mod01lec18.mp4">Acceptance Sampling</option>
      
      <option  value="110105039/mod01lec19.mp4">Design of Sampling Plans</option>
      
      <option  value="110105039/mod01lec20.mp4">MIL-STD-105E Sampling Plan</option>
      
      <option  value="110105039/mod01lec21.mp4">Introduction to SPC</option>
      
      <option  value="110105039/mod01lec22.mp4">Control Chart Examples</option>
      
      <option  value="110105039/mod01lec23.mp4">Control Charts by Excel</option>
      
      <option  value="110105039/mod01lec24.mp4">Process Capability </option>
      
      <option  value="110105039/mod01lec25.mp4">Quality Function Deployment</option>
      
      <option  value="110105039/mod01lec26.mp4">Design of Experiments - Overview</option>
      
      <option  value="110105039/mod01lec27.mp4">Planning for DOE</option>
      
      <option  value="110105039/mod01lec28.mp4">Factor Effect Calculations</option>
      
      <option  value="110105039/mod01lec29.mp4">ANOVA in DOE</option>
      
      <option  value="110105039/mod01lec30.mp4">Benchmarking in Six Sigma</option>
      
      <option  value="110105039/mod01lec31.mp4">How to Benchmark</option>
      
      <option  value="110105039/mod01lec32.mp4">Six Sigma in Supply Chains</option>
      
      <option  value="110105039/mod01lec33.mp4">Taguchi Methods</option>
      
      <option  value="110105039/mod01lec34.mp4">Robust Design</option>
      
      <option  value="110105039/mod01lec35.mp4">The Journey to Six Sigma</option>
      
      <option  value="110105039/mod01lec36.mp4">A Case Study of Defect Reduction</option>
      
      <option  value="110105039/mod01lec37.mp4">DFM & Reliability</option>
      
      <option  value="110105039/mod01lec38.mp4">Failure Modes & Effects Analysis (FMEA)</option>
      
      <option  value="110105039/mod01lec39.mp4">Implementing Six Sigma</option>
      
      <option  value="110105039/mod01lec40.mp4">Getting Results From Six Sigma</option>
          </select>
    
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110105052</strong></td>
	<td><strong>Management</strong></td>
	<td><strong> International Business Communication </strong></td>
	<td><strong>Prof. A. Malic</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="110105052/mod01lec01.mp4">Introduction                                                      </option>
<option value="110105052/mod01lec02.mp4">Definitions & Concepts                                            </option>
<option value="110105052/mod01lec03.mp4">Communicative Competence - I                                      </option>
<option value="110105052/mod01lec04.mp4">Communicative Competence - II                                     </option>
<option value="110105052/mod01lec05.mp4">Communicative Competence - III                                    </option>
<option value="110105052/mod01lec06.mp4">Intercultural Communication - I                                   </option>
<option value="110105052/mod01lec07.mp4">Intercultural Communication - II                                  </option>
<option value="110105052/mod01lec08.mp4">Intercultural Communication - III                                 </option>
<option value="110105052/mod01lec09.mp4">Intercultural Communication - Thought and Speech                  </option>
<option value="110105052/mod01lec10.mp4">Intercultural Communication - Thought and Speech (Contd.)         </option>
<option value="110105052/mod01lec11.mp4">Intercultural Communication: Translation as Problematic Discourse </option>
<option value="110105052/mod01lec12.mp4">Nonverbal Communication                                           </option>
<option value="110105052/mod01lec13.mp4">Barriers to Communication                                         </option>
<option value="110105052/mod01lec14.mp4">Barriers to Communication (Contd.)                                </option>
<option value="110105052/mod01lec15.mp4">Barriers to Communication (Contd.) & Listening                    </option>
<option value="110105052/mod01lec16.mp4">Listening (Contd.)                                                </option>
<option value="110105052/mod01lec17.mp4">Communication Rules                                               </option>
<option value="110105052/mod01lec18.mp4">Communication Style                                               </option>
<option value="110105052/mod01lec19.mp4">Interpersonal Communication                                       </option>
<option value="110105052/mod01lec20.mp4">Interpersonal Communication (Contd.)                              </option>
<option value="110105052/mod01lec21.mp4">Relational Communication                                          </option>
<option value="110105052/mod01lec22.mp4">Relational Communication (Contd.)                                 </option>
<option value="110105052/mod01lec23.mp4">Organizational Communication                                      </option>
<option value="110105052/mod01lec24.mp4">Organizational Communication (Contd.)                             </option>
<option value="110105052/mod01lec25.mp4">Collaboration                                                     </option>
<option value="110105052/mod01lec26.mp4">Communication in Groups and Teams                                 </option>
<option value="110105052/mod01lec27.mp4">Communication in Groups and Teams (Contd...1)                     </option>
<option value="110105052/mod01lec28.mp4">Communication in Groups and Teams (Contd...2)                     </option>
<option value="110105052/mod01lec29.mp4">Persuasive Communication                                          </option>
<option value="110105052/mod01lec30.mp4">Persuasive Communication (Contd.)                                 </option>
<option value="110105052/mod01lec31.mp4">Negotiation and Conflict Management                               </option>
<option value="110105052/mod01lec32.mp4">Negotiation and Conflict Management (Contd.)                      </option>
<option value="110105052/mod01lec33.mp4">Leadership                                                        </option>
<option value="110105052/mod01lec34.mp4">Written Communication in International Business                   </option>
<option value="110105052/mod01lec35.mp4">Role of Technology in international Business Communication        </option>
<option value="110105052/mod01lec36.mp4">Moving to Another Culture                                         </option>
<option value="110105052/mod01lec37.mp4">Re-entry                                                          </option>
<option value="110105052/mod01lec38.mp4">Crisis Communication                                              </option>
<option value="110105052/mod01lec39.mp4">Ethics in Business Communication                                  </option>
<option value="110105052/mod01lec40.mp4">Conclusion                                                        </option>

          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110105053</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Econometric Modelling</strong></td>
	<td><strong>Dr. Rudra P. Pradhan</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
     <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110105053/m1l1.html">Introduction to Econometric Modelling</option>
      
      <option  value="110105053/m2l2.html">Structure of Econometric Modelling</option>
      
      <option  value="110105053/m3l3.html">Univariate Econometric Modelling</option>
      
      <option  value="110105053/m4l4.html">Probability theory</option>
      
      <option  value="110105053/m5l5.html">Hypothesis Testing</option>
      
      <option  value="110105053/m6l6.html">Introduction To Bivariate Econometric Modelling</option>
      
      <option  value="110105053/m7l7.html">Reliability of Bivariate Econometric Modelling</option>
      
      <option  value="110105053/m8l8.html">Introduction to Trivariate Econometric Modelling</option>
      
      <option  value="110105053/m9l9.html">Introduction to Multivariate Econometric Modelling</option>
      
      <option  value="110105053/m10l10.html">Matrix Approach to Econometric Modelling</option>
      
      <option  value="110105053/m11l11.html">Constraints of OLS Estimations</option>
      
      <option  value="110105053/m12l12.html">Multicollinearity Problem</option>
      
      <option  value="110105053/m12l13.html">Multicollinearity Problem (Contd.)</option>
      
      <option  value="110105053/m13l14.html">Autocorrelation Problem</option>
      
      <option  value="110105053/m13l15.html">Autocorrelation Problem (contd.)</option>
      
      <option  value="110105053/m14l16.html">Heteroscedasticity Problem</option>
      
      <option  value="110105053/m14l17.html">Heteroscedasticity Problem(Contd.)</option>
      
      <option  value="110105053/m15l18.html">Dummy Regression Modelling</option>
      
      <option  value="110105053/m15l19.html">Dummy Regression Modelling(Contd.)</option>
      
      <option  value="110105053/m16l20.html">Qualitative Response Regression Modelling</option>
      
      <option  value="110105053/m16l21.html">Qualitative Response Regression Modelling (Contd.)</option>
      

      <option  value="110105053/m17l22.html">Panel Data Modeling</option>
      
      <option  value="110105053/m17l23.html">Panel Data Modeling(Contd.)</option>
      
      <option  value="110105053/m18l24.html">Simultaneous Equation Modeling</option>
      
      <option  value="110105053/m18l25.html">Simultaneous Equation Modeling(Contd.)</option>
      
      <option  value="110105053/m19l26.html">Structural Equation Modeling</option>
      
      <option  value="110105053/m19l27.html">Structural Equation Modeling(Contd.)</option>
      
      <option  value="110105053/m19l28.html">Structural Equation Modeling (Contd.)</option>
      
      <option  value="110105053/m20l29.html">Basics of Time Series Modeling</option>
      
      <option  value="110105053/m20l30.html">Basics of Time Series Modeling (Contd.)</option>
      
      <option  value="110105053/m21l31.html">Unit Roots Test</option>
      
      <option  value="110105053/m21l32.html">Unit Roots Test(Contd.)</option>
      
      <option  value="110105053/m22l33.html">Cointegration Test</option>
      
      <option  value="110105053/m22l34.html">Cointegration Test (Contd.)</option>
      
      <option  value="110105053/m23l35.html">Granger Causality Test</option>
      
      <option  value="110105053/m23l36.html">Granger Causality Test (Contd.)</option>
      
      <option  value="110105053/m24l37.html">Volatility Timeseries Models</option>
      
      <option  value="110105053/m24l38.html">Volatility Timeseries Models (Contd.)</option>
      
      <option  value="110105053/m24l38.html">Volatility Timeseries Models  (Contd.)</option>
      
      <option  value="110105053/m25l39a.html">Vector Autoregressive Model</option>
      
      <option  value="110105053/m25l40.html">Vector Autoregressive  Model</option>
          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110105054</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Consumer Behaviour</strong></td>
	<td><strong>Dr. Sangeeta Sahney</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
     <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
  <option value="110105054/mod01lec01.mp4">Introduction to the Study of Consumer Behaviour</option>
<option value="110105054/mod01lec02.mp4">Introduction to the Study of Consumer Behaviour (Contd.)</option>
<option value="110105054/mod01lec03.mp4">Market Research and Consumer Behaviour</option>
<option value="110105054/mod01lec04.mp4">Market Research and Consumer Behaviour (Contd.)</option>
<option value="110105054/mod01lec05.mp4">Market Segmentation and Positioning</option>
<option value="110105054/mod01lec06.mp4">Market Segmentation and Positioning (Contd.)</option>
<option value="110105054/mod01lec07.mp4">The Consumer Decision Making Process</option>
<option value="110105054/mod01lec08.mp4">The Consumer Decision Making Process (Contd.)</option>
<option value="110105054/mod01lec09.mp4">Models of Consumers and Models of Consumer Behaviour</option>
<option value="110105054/mod01lec10.mp4">Models of Consumers and Models of Consumer Behaviour (Contd.)</option>
<option value="110105054/mod01lec11.mp4">Models of Consumers and Models of Consumer Behaviour (Contd. )</option>
<option value="110105054/mod01lec12.mp4">Models of Consumers and Models of Consumer Behaviour ( Contd.)</option>
<option value="110105054/mod01lec13.mp4">Consumer Needs and Motivation, Emotions and Mood, Consumer Involvement</option>
<option value="110105054/mod01lec14.mp4">Consumer Needs and Motivation, Emotions and Mood, Consumer Involvement (Contd.)</option>
<option value="110105054/mod01lec15.mp4">Consumer Needs and Motivation, Emotions and Mood, Consumer Involvement (Contd. )</option>
<option value="110105054/mod01lec16.mp4">Consumer Needs and Motivation, Emotions and Mood, Consumer Involvement (  Contd.)</option>
<option value="110105054/mod01lec17.mp4">Consumer Needs and Motivation, Emotions and Mood, Consumer Involvement (Contd.  )</option>
<option value="110105054/mod01lec18.mp4">Consumer Learning</option>
<option value="110105054/mod01lec19.mp4">Consumer Learning (Contd.)</option>
<option value="110105054/mod01lec20.mp4">Consumer Learning (Contd. )</option>
<option value="110105054/mod01lec21.mp4">Consumer Learning ( Contd. )</option>
<option value="110105054/mod01lec22.mp4">Personality, Self Concept and Self Image</option>
<option value="110105054/mod01lec23.mp4">Personality, Self Concept and Self Image (Contd.)</option>
<option value="110105054/mod01lec24.mp4">Consumer Perception, Risk and Imagery</option>
<option value="110105054/mod01lec25.mp4">Consumer Perception, Risk and Imagery (Contd.)</option>
<option value="110105054/mod01lec26.mp4">Consumer Perception, Risk and Imagery (Contd. )</option>
<option value="110105054/mod01lec27.mp4">Consumer Attitudes</option>
<option value="110105054/mod01lec28.mp4">Consumer Attitudes (Contd.)</option>
<option value="110105054/mod01lec29.mp4">Consumer Attitudes ( Contd.)</option>
<option value="110105054/mod01lec30.mp4">Consumer Communication</option>
<option value="110105054/mod01lec31.mp4">Consumer Communication (Contd.)</option>
<option value="110105054/mod01lec32.mp4">Consumer Groups and Reference Groups</option>
<option value="110105054/mod01lec33.mp4">Family and Family Life Cycle</option>
<option value="110105054/mod01lec34.mp4">Social Class and Mobility, Lifestyle Analysis</option>
<option value="110105054/mod01lec35.mp4">Culture, Sub-Culture and Cross-Culture</option>
<option value="110105054/mod01lec36.mp4">Culture, Sub-Culture and Cross-Culture (Contd.)</option>
<option value="110105054/mod01lec37.mp4">Interpersonal Communication and Influence</option>
<option value="110105054/mod01lec38.mp4">Opinion Leadership</option>
<option value="110105054/mod01lec39.mp4">Diffusion of Innovation</option>
<option value="110105054/mod01lec40.mp4">Diffusion of Innovation (Contd.)</option>

          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110105057</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>International Finance</strong></td>
	<td><strong>Dr. Arun K. Misra</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
    <option value="110105057/mod01lec01.mp4">International Financial Environment</option>
<option value="110105057/mod01lec02.mp4">International Financial Transactions</option>
<option value="110105057/mod01lec03.mp4">Gold Standard</option>
<option value="110105057/mod01lec04.mp4">Purchasing Power Parity</option>
<option value="110105057/mod01lec05.mp4">Floating and Fixed Exchange Rate Regimes</option>
<option value="110105057/mod01lec06.mp4">Currency Boards and Currency Basket Systems</option>
<option value="110105057/mod01lec07.mp4">Features of Foreign Exchange Market</option>
<option value="110105057/mod01lec08.mp4">Exchange Rate Arithmetic</option>
<option value="110105057/mod01lec09.mp4">Understanding Merchant Rates</option>
<option value="110105057/mod01lec10.mp4">Foreign Exchange Forward Contracts</option>
<option value="110105057/mod01lec11.mp4">Value at Risk for Foreign Exchange Market</option>
<option value="110105057/mod01lec12.mp4">International Parity Conditions and Movement Exchange Rate</option>
<option value="110105057/mod01lec13.mp4">Exchange Rate Determination and Forecasting</option>
<option value="110105057/mod01lec14.mp4">Development of Foreign Exchange Market in India</option>
<option value="110105057/mod01lec15.mp4">Foreign Exchange Exposures : Transaction Exposure</option>
<option value="110105057/mod01lec16.mp4">Transaction Exposure Management</option>
<option value="110105057/mod01lec17.mp4">Foreign Exchange Futures Market for Transaction Exposure Management</option>
<option value="110105057/mod01lec18.mp4">Foreign Currency Options : Transaction Exposure Management</option>
<option value="110105057/mod01lec19.mp4">Interest Rate Swaps</option>
<option value="110105057/mod01lec20.mp4">Currency Swaps</option>
<option value="110105057/mod01lec21.mp4">Operating Exposure Assessment</option>
<option value="110105057/mod01lec22.mp4">Operating Exposure Management</option>
<option value="110105057/mod01lec23.mp4">International Capital Structure and Capital Assets Pricing Model</option>
<option value="110105057/mod01lec24.mp4">International Capital Budgeting</option>
<option value="110105057/mod01lec25.mp4">Evaluation of Foreign Direct Investment</option>
<option value="110105057/mod01lec26.mp4">Cross Listing of Shares : Depository Receipts</option>
<option value="110105057/mod01lec27.mp4">International Financial Integration</option>
<option value="110105057/mod01lec28.mp4">World Trade Organisation</option>
<option value="110105057/mod01lec29.mp4">India's Forex Reserves Composition and Determinants of Optimum Reserves </option>
<option value="110105057/mod01lec30.mp4">Movement of Exchange Rates in India</option>
<option value="110105057/mod01lec31.mp4">International Trade Theory</option>
<option value="110105057/mod01lec32.mp4">International Bond Market</option>
<option value="110105057/mod01lec33.mp4">India's Foreign Trade - Direction and Composition</option>
<option value="110105057/mod01lec34.mp4">Financial Stability</option>
<option value="110105057/mod01lec35.mp4">Test - I</option>
<option value="110105057/mod01lec36.mp4">Money and Forex Market Interaction : Indian Experience</option>
<option value="110105057/mod01lec37.mp4">Test - 2</option>
<option value="110105057/mod01lec38.mp4">Characteristics of Indian Foreign Exchange Market</option>
<option value="110105057/mod01lec39.mp4">Test - 3</option>
<option value="110105057/mod01lec40.mp4">Test - 4</option>

          </select>
    </td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110106040</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Bank Management</strong></td>
	<td><strong>Prof. R. Madhumathi</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110106040/module1/1-Introduction.pdf">Introduction to Structure Of Banking Industry</option>
      
      <option  value="110106040/module1/1_1-Structure of Banking Industry.pdf">Structure Of Banking Industry</option>
      
      <option  value="110106040/module1/1_2-Organization of Banking Industry.pdf">Organization of Banking Industry</option>
      
      <option  value="110106040/module1/1_3-Competition in Banking Industry.pdf">Competition in Banking Industry</option>
      
      <option  value="110106040/module1/1_4-Functions of Banks in an Economy.pdf">Functions of Banks in an Economy</option>
      
      <option  value="110106040/module1/1_5-Failure of Banks.pdf">Failure of Banks</option>
      
      <option  value="110106040/module1/1_6-Trends in Banking.pdf">Trends in Banking</option>
      
      <option  value="110106040/module2/2-Regulatory Framework of Banks.pdf">Regulatory Framework of Banks</option>
      
      <option  value="110106040/module2/2_1-Need for Regulation.pdf">Need for Regulation</option>
      
      <option  value="110106040/module2/2_2 -Banking Risk and Regulations.pdf">Banking Risk and Regulations</option>
      
      <option  value="110106040/module2/2_3- Basel Committee Norms.pdf">Basel Committee Norms</option>
      
      <option  value="110106040/module2/2_4 - Bank Disclosures.pdf">Bank Disclosures</option>
      
      <option  value="110106040/module3/3-Interest Rate Risk Management.pdf">Introduction to Interest Rate Risk Management</option>
      
      <option  value="110106040/module3/3_1-Asset Liability Management.pdf">Asset Liability Management</option>
      
      <option  value="110106040/module3/3_2-Gap Analysis.pdf">Gap Analysis</option>
      
      <option  value="110106040/module3/3_3-Duration Analysis.pdf">Duration Analysis</option>
      
      <option  value="110106040/module3/3_4-Derivatives in ALM.pdf">Derivatives in ALM</option>
      
      <option  value="110106040/module3/3_5-Interest Rate Risk Management.pdf">Interest Rate Risk Management</option>
      
      <option  value="110106040/module4/4-Credit Risk Management.pdf">Introduction to Credit Risk Management</option>
      
      <option  value="110106040/module4/4_1-Credit Risk.pdf">Credit Risk</option>
      
      <option  value="110106040/module4/4_2-Business Loans.pdf">Business Loans</option>
      
      <option  value="110106040/module4/4_3-Micro Credit.pdf">Micro Credit</option>
      
      <option  value="110106040/module4/4_4-Credit Evaluation.pdf">Credit Evaluation</option>
      
      <option  value="110106040/module4/4_5-Credit Risk Measurement.pdf">Credit Risk Measurement</option>
      
      <option  value="110106040/module4/4_6-Credit Risk Management.pdf">Credit Risk Management</option>
      
      <option  value="110106040/module5/5-Treasury Risk Management.pdf">Treasury Risk Management</option>
      
      <option  value="110106040/module5/5_1-Liquidity Functions of Banks.pdf">Liquidity Functions of Banks</option>
      
      <option  value="110106040/module5/5_2-Liquidity Risk.pdf">Liquidity Risk</option>
      
      <option  value="110106040/module5/5_3-Treasury Market.pdf">Treasury Market</option>
      
      <option  value="110106040/module5/5_4-Treasury Market Risk Management.pdf">Treasury Market Risk Management</option>
      
      <option  value="110106040/module5/5_5-Internal Audit for Treasury Market Risk Management.pdf">Internal Audit for Treasury Market Risk Management</option>
      
      <option  value="110106040/module6/6-Operational Risk Management.pdf">Operational Risk Management</option>
      
      <option  value="110106040/module6/6_1-Operational Risk.pdf">Operational Risk</option>
      
      <option  value="110106040/module6/6_2-Operational Risk Policy.pdf">Operational Risk Policy</option>
      
      <option  value="110106040/module6/6_3-Measurement of Operational Risk.pdf">Measurement of Operational Risk</option>
      
      <option  value="110106040/module6/6_4-Management of Operational Risk.pdf">Management of Operational Risk</option>
      
      <option  value="110106040/module7/7-Market Risk Management.pdf">Market Risk Management</option>
      
      <option  value="110106040/module7/7_1-Market Risk.pdf">Market Risk</option>
      
      <option  value="110106040/module7/7_2-Basel Committee Recomendations.pdf">Basel Committee Recomendations</option>
      
      <option  value="110106040/module7/7_3-Measurement of Market Risk.pdf">Measurement of Market Risk</option>
      
      <option  value="110106040/module7/7_4-Managing Market Risk.pdf">Managing Market Risk</option>
      
      <option  value="110106040/module8/8-Management of Bank Capital.pdf">Management of Bank Capital</option>
      
      <option  value="110106040/module8/8_1-Capital adequacy.pdf">Capital adequacy</option>
      
      <option  value="110106040/module8/8_2-Basel Framework.pdf">Basel Framework</option>
      
      <option  value="110106040/module8/8_3-Capital Adequacy of Banks in India.pdf">Capital Adequacy of Banks in India</option>
      
      <option  value="110106040/module8/8_4-Disclosure of Capital Adequacy.pdf">Disclosure of Capital Adequacy</option>
      
      <option  value="110106040/module9/9-Issues in Bank Management.pdf">Issues in Bank Management</option>
      
      <option  value="110106040/module9/9_1-Bank Marketing.pdf">Bank Marketing</option>
      
      <option  value="110106040/module9/9_2-Bank Audit.pdf">Bank Audit</option>
      
      <option  value="110106040/module9/9_3-Bank Merger.pdf">Bank Merger</option>
      
      <option  value="110106040/module9/9_4-International Banking.pdf">International Banking</option>
      
      <option  value="110106040/module10/10-Special Services of Banks.pdf">Special Services of Banks</option>
      
      <option  value="110106040/module10/10_1-Issue Management.pdf">Issue Management</option>
      
      <option  value="110106040/module10/10_2-Corporate Advisory Services.pdf">Corporate Advisory Services</option>
      
      <option  value="110106040/module10/10_3-Investment Management of Banks.pdf">Investment Management of Banks</option>
      
      <option  value="110106040/module10/10_4- Mutual funds.pdf">Mutual funds</option>
      
      <option  value="110106040/module10/10_5-Bancasurance.pdf">Bancasurance</option>
      
      <option  value="110106040/module11/11-Evaluating Bank Performance.pdf">Evaluating Bank Performance</option>
      
      <option  value="110106040/module11/11_1- performance Assessments.pdf">Performance Assessments</option>
      
      <option  value="110106040/module11/11_2- bank performance.pdf">Bank performance</option>
      
      <option  value="110106040/module11/11_3 - Rating of banks.pdf">Rating of banks</option>
      
      <option  value="110106040/module11/11_4- Coorporate governance in bank.pdf">Coorporate governance in bank</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110106043</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Infrastructure Finance</strong></td>
	<td><strong>Dr. A. Thillai Rajan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="110106043/mod01lec01.mp4">Introduction                                                   </option>
<option value="110106043/mod01lec02.mp4">Overview on Infrastructure Financing Sources                   </option>
<option value="110106043/mod02lec03.mp4">Basics of Financial Management - Part 1                        </option>
<option value="110106043/mod02lec04.mp4">Basics of Financial Management - Part 2                        </option>
<option value="110106043/mod02lec05.mp4">Basics of Financial Management - Part 3                        </option>
<option value="110106043/mod02lec06.mp4">Basics of Financial Management - Part 4                        </option>
<option value="110106043/mod03lec07.mp4">Analysis of company Performance - Part 1                       </option>
<option value="110106043/mod03lec08.mp4">Analysis of company Performance - Part 2                       </option>
<option value="110106043/mod04lec09.mp4">Analysis of Project Viability Time value of money              </option>
<option value="110106043/mod04lec10.mp4">Analysis of Project Viability Cost of Capital                  </option>
<option value="110106043/mod04lec11.mp4">Analysis of Project Viability Capital Budgeting Techniques-I   </option>
<option value="110106043/mod04lec12.mp4">Analysis of Project Viability Capital Budgeting Guidelines-II  </option>
<option value="110106043/mod04lec13.mp4">Analysis of Project Viability Capital Budgeting Guidelines-III </option>
<option value="110106043/mod04lec14.mp4">Analysis of Project Viability Capital Budgeting Guidelines-IV  </option>
<option value="110106043/mod05lec15.mp4">Overview and introduction to project finance                   </option>
<option value="110106043/mod05lec16.mp4">Project Financing Attributes and Motivations-I                 </option>
<option value="110106043/mod05lec17.mp4">Project Financing Attributes and Motivations-II                </option>
<option value="110106043/mod06lec18.mp4">Project Finance Markets-I                                      </option>
<option value="110106043/mod06lec19.mp4">Project Finance Markets-II                                     </option>
<option value="110106043/mod06lec20.mp4">Project Finance Markets-III                                    </option>
<option value="110106043/mod06lec21.mp4">Project Finance Markets Mezzanine / Sub-ordinated Debt         </option>
<option value="110106043/mod06lec22.mp4">Project Finance Markets - Type of Dept and Leasing             </option>
<option value="110106043/mod06lec23.mp4">Project Finance Markets - Financial Intermediation             </option>
<option value="110106043/mod06lec24.mp4">Project Finance Markets - Loan Refinancing                     </option>
<option value="110106043/mod06lec25.mp4">Project Finance Markets - Project Bonds-I                      </option>
<option value="110106043/mod06lec26.mp4">Project Finance Markets - Project Bonds-II                     </option>
<option value="110106043/mod07lec27.mp4">Public Private Partnerships                                    </option>
<option value="110106043/mod08lec28.mp4">Risk Management-I                                              </option>
<option value="110106043/mod08lec29.mp4">Risk Management-II                                             </option>
<option value="110106043/mod08lec30.mp4">Risk Management-III                                            </option>
<option value="110106043/mod08lec31.mp4">Risk Management - Market Risks                                 </option>
<option value="110106043/mod08lec32.mp4">Risk Management - Country / Political risks I                  </option>
<option value="110106043/mod08lec33.mp4">Risk Management - Country / Political risks II                 </option>
<option value="110106043/mod08lec34.mp4">Risk Management - Country / Political risks III                </option>
<option value="110106043/mod08lec35.mp4">Risk Management - Country / Political risks IV                 </option>
<option value="110106043/mod09lec36.mp4">Context of infrastructure development-I                        </option>
<option value="110106043/mod09lec37.mp4">Context of infrastructure development-II                       </option>
<option value="110106043/mod09lec38.mp4">Context of infrastructure development-III                      </option>
<option value="110106043/mod09lec39.mp4">Context of infrastructure development-IV                       </option>
<option value="110106043/mod09lec40.mp4">Context of infrastructure development-V                        </option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110106044</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Manufacturing Systems Management</strong></td>
	<td><strong>Prof. G. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="110106044/mod01lec01.mp4">Introduction to Manufacturing Systems Management                                </option>
<option value="110106044/mod01lec02.mp4">Different types of Manufacturing Systems                                        </option>
<option value="110106044/mod01lec03.mp4"> Introduction to Cellular Manufacturing                                         </option>
<option value="110106044/mod01lec04.mp4">Cellular Manufacturing Applications, Production Flow Analysis                   </option>
<option value="110106044/mod01lec05.mp4">Production Flow Analysis                                                        </option>
<option value="110106044/mod01lec06.mp4">Cellular Manufacturing � Unidirectional flow, Capacity Planning, Layout         </option>
<option value="110106044/mod01lec07.mp4">Exercise on Production Flow Analysis                                            </option>
<option value="110106044/mod01lec08.mp4">Rank Order Clustering, Similarity Coefficient based algorithm                   </option>
<option value="110106044/mod01lec09.mp4">Similarity Coefficient based clustering algorithm                               </option>
<option value="110106044/mod01lec10.mp4">Hierarchical and Non hierarchical clustering algorithms                         </option>
<option value="110106044/mod01lec11.mp4">Optimization based algorithms                                                   </option>
<option value="110106044/mod01lec12.mp4">Optimization based algorithms, Assignment based algorithm                       </option>
<option value="110106044/mod01lec13.mp4">Assignment model, Algorithm considering sequence of visit of machines           </option>
<option value="110106044/mod01lec14.mp4">Algorithm considering sequence of visit of machines                             </option>
<option value="110106044/mod01lec15.mp4">Algorithm considering cell load data, alternate process plans                   </option>
<option value="110106044/mod01lec16.mp4">Reducing Intercell moves                                                        </option>
<option value="110106044/mod01lec17.mp4">Part subcontracting, Incremental cell formation                                 </option>
<option value="110106044/mod01lec18.mp4">Product based cells                                                             </option>
<option value="110106044/mod01lec19.mp4">Branching algorithm for product based cells, Operator and task assignment       </option>
<option value="110106044/mod01lec20.mp4">Operator and task assignment                                                    </option>
<option value="110106044/mod01lec21.mp4">Operator and task assignment continued                                          </option>
<option value="110106044/mod01lec22.mp4">Static and dynamic Operator allocation, Multiple products and incremental cells </option>
<option value="110106044/mod01lec23.mp4">Cell scheduling and sequencing                                                  </option>
<option value="110106044/mod01lec24.mp4">Cell scheduling and sequencing continued                                        </option>
<option value="110106044/mod01lec25.mp4">Single piece transportation                                                     </option>
<option value="110106044/mod01lec26.mp4">Cell Layout, Introduction to Just-in-time manufacturing                         </option>
<option value="110106044/mod01lec27.mp4">Cell control and JIT                                                            </option>
<option value="110106044/mod01lec28.mp4">Basic elements of JIT, Kanban systems                                           </option>
<option value="110106044/mod01lec29.mp4">Role of basic elements, Critical success factors                                </option>
<option value="110106044/mod01lec30.mp4">Models in JIT                                                                   </option>
<option value="110106044/mod01lec31.mp4">Models in JIT continued                                                         </option>
<option value="110106044/mod01lec32.mp4">CONWIP, Introduction to synchronous manufacturing                               </option>
<option value="110106044/mod01lec33.mp4">Theory of constraints, Product mix problem                                      </option>
<option value="110106044/mod01lec34.mp4">Statistical Fluctuations, Random events, principles of SM                       </option>
<option value="110106044/mod01lec35.mp4">Scheduling in SM                                                                </option>
<option value="110106044/mod01lec36.mp4">Drum Buffer Rope system                                                         </option>
<option value="110106044/mod01lec37.mp4">Flexible Manufacturing System, Part selection problem                           </option>
<option value="110106044/mod01lec38.mp4">FMS Loading problem                                                             </option>
<option value="110106044/mod01lec39.mp4">FMS Loading, multiple batches and changeover times                              </option>
<option value="110106044/mod01lec40.mp4">FMS Loading and scheduling, Summary of the course contents                      </option>

          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110106045</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Operations and Supply Chain Management </strong></td>
	<td><strong>Prof. G. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="110106045/mod01lec01.mp4">Introduction � (Challenges, Methodologies)                                                            </option>
<option value="110106045/mod02lec02.mp4">Forecasting � Time series models � Simple Exponential smoothing                                       </option>
<option value="110106045/mod02lec03.mp4">Forecasting � Linear Models, Regression, Holt�s , seasonality                                         </option>
<option value="110106045/mod02lec04.mp4">Forecasting � Winter�s model, causal models, Goodness of forecast, Aggregate Planning, Tabular method </option>
<option value="110106045/mod03lec05.mp4">Aggregate Planning, Tabular method, Linear Programming                                                </option>
<option value="110106045/mod03lec06.mp4">Aggregate Planning, Transportation model                                                              </option>
<option value="110106045/mod03lec07.mp4">Aggregate Planning, Dynamic Programming, backordering                                                 </option>
<option value="110106045/mod03lec08.mp4">Aggregate Planning, Quadratic model, Demand and capacity planning                                     </option>
<option value="110106045/mod04lec09.mp4">Inventory Models � Costs, EOQ model                                                                   </option>
<option value="110106045/mod04lec10.mp4">Inventory � EOQ model graphs, with backordering                                                       </option>
<option value="110106045/mod04lec11.mp4">Inventory � Models for all quantity and marginal quantity Discount                                    </option>
<option value="110106045/mod04lec12.mp4">Multiple Quantity Discount, Multiple item inventory- Constraint on  numbers of orders                 </option>
<option value="110106045/mod04lec13.mp4">Multiple item inventory � Constraint on money value, space, equal number of orders                    </option>
<option value="110106045/mod04lec14.mp4">Multiple item inventory �combining orders, production consumption model                               </option>
<option value="110106045/mod04lec15.mp4">Inventory � Production consumption model with backordering, Economic lot scheduling problem           </option>
<option value="110106045/mod04lec16.mp4">Economic lot scheduling problem, Supply Chain inventory                                               </option>
<option value="110106045/mod05lec17.mp4">Lot sizing                                                                                            </option>
<option value="110106045/mod05lec18.mp4">Lot sizing � heuristics                                                                               </option>
<option value="110106045/mod05lec19.mp4">Disaggregation                                                                                        </option>
<option value="110106045/mod05lec20.mp4">Disaggregation � time varying demand, Safety stock � ROL for discrete demand distribution             </option>
<option value="110106045/mod05lec21.mp4">Safety stock � ROL for normal distribution of lead time demand                                        </option>
<option value="110106045/mod06lec22.mp4">Integrated model, ROL for normal distribution of LTD and given mean                                   </option>
<option value="110106045/mod06lec23.mp4">Safety stock reduction � delayed Product differentiation, substitution.  MOM                          </option>
<option value="110106045/mod06lec24.mp4">Sequencing and scheduling � Assumptions, objectives and shop settings                                 </option>
<option value="110106045/mod07lec25.mp4">Single machine sequencing. Two machine flow shop � Johnson�s algorithm                                </option>
<option value="110106045/mod07lec26.mp4">Flow shop scheduling � Three machines, Johnson�s algorithm and Branch and bound algorithm             </option>
<option value="110106045/mod07lec27.mp4">Flow shop scheduling � heuristics � Palmer, Campbell Dudek Smith algorithm                            </option>
<option value="110106045/mod07lec28.mp4">Job shop scheduling � Gantt chart, Different dispatching rules                                        </option>
<option value="110106045/mod07lec29.mp4">Job shop scheduling � Shifting bottleneck heuristic                                                   </option>
<option value="110106045/mod07lec30.mp4">Job shop scheduling � Shifting bottleneck heuristic. Line Balancing                                   </option>
<option value="110106045/mod07lec31.mp4">Line Balancing                                                                                        </option>
<option value="110106045/mod08lec32.mp4">Location problems � p median problem, Fixed charge problem                                            </option>
<option value="110106045/mod08lec33.mp4">Location allocation problems in supply chain. Layout                                                  </option>
<option value="110106045/mod08lec34.mp4">Quantitative models for layout, Summary                                                               </option>
<option value="110106045/mod09lec35.mp4">Introduction to Supply Chain Management                                                               </option>
<option value="110106045/mod09lec36.mp4">Location Problems                                                                                     </option>
<option value="110106045/mod09lec37.mp4">Transportation and Distribution Models                                                                </option>
<option value="110106045/mod09lec38.mp4">Transportation and Distribution Models(continued)                                                     </option>
<option value="110106045/mod09lec39.mp4">Bin Packing and Travelling Salesman Problems                                                          </option>
<option value="110106045/mod09lec40.mp4">Vehicle Routeing Problems                                                                             </option>
<option value="110106045/mod09lec41.mp4">Value of Information                                                                                 </option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110106046</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Services Operations Management</strong></td>
	<td><strong>Dr. Arshinder Kaur</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option  value="110106046/Module 1/Introduction 1.pdf">Introduction to Module 1</option>
      
      <option  value="110106046/Module 1/Lecture 1.pdf"> Introduction and imperatives of services </option>
      
      <option  value="110106046/Module 1/Lecture 2.pdf">Nature and characteristics of services</option>
      
      <option  value="110106046/Module 1/Lecture 3.pdf">Classification of services and analyzing service operations</option>
      
      <option  value="110106046/Module 2/Introduction 2.pdf">Introduction to Module 2</option>
      
      <option  value="110106046/Module 2/Lecture 1.pdf">Introduction to Service Strategy</option>
      
      <option  value="110106046/Module 2/Lecture 2.pdf">Competitive Service Strategies </option>
      
      <option  value="110106046/Module 2/Lecture 3.pdf">Strategic Service Vision</option>
      
      <option  value="110106046/Module 3/Introduction 3.pdf">Introduction to Module 3</option>
      
      <option  value="110106046/Module 3/Lecture 1.pdf">New service design and development</option>
      
      <option  value="110106046/Module 3/Lecture 2.pdf">Service system design and delivery process</option>
      
      <option  value="110106046/Module 3/Lecture 3.pdf">Technology & automation in services</option>
      
      <option  value="110106046/Module 3/Lecture 4.pdf">Service encounter</option>
      
      <option  value="110106046/Module 4/Introduction 4.pdf">Introduction to Module 4</option>
      
      <option  value="110106046/Module 4/Lecture 1.pdf">Human resource planning & employee selection</option>
      
      <option  value="110106046/Module 4/Lecture 2.pdf">Managing people in service organization</option>
      
      <option  value="110106046/Module 4/Lecture 3.pdf">Work measurement in Services</option>
      
      <option  value="110106046/Module 5/Introduction 5.pdf">Introduction to Module 5</option>
      
      <option  value="110106046/Module 5/Lecture 1.pdf">Defining Service Quality</option>
      
      <option  value="110106046/Module 5/Lecture 2.pdf">Quality Service by Design</option>
      
      <option  value="110106046/Module 5/Lecture 3.pdf">Service Process Control</option>
      
      <option  value="110106046/Module 5/Lecture 4.pdf">Total Quality Management Tools</option>
      
      <option  value="110106046/Module 5/Lecture 5.pdf">Quality Philosophy & Performance Excellence</option>
      
      <option  value="110106046/Module 5/Lecture 6.pdf">Service Recovery & Service Guarantee</option>
      
      <option  value="110106046/Module 6/Lecture 2.pdf">Process analysis of facility layouts</option>
      
      <option  value="110106046/Module 6/Lecture 3.pdf">Facility location decision factors</option>
      
      <option  value="110106046/Module 6/Lecture 4.pdf">Quantitative models for facility location: Service facility on a line or on a plane</option>
      
      <option  value="110106046/Module 6/Lecture 5.pdf">Quantitative models for facility location: Based on different objective functions of optimization criteria</option>
      
      <option  value="110106046/Module 6/Lecture 6.pdf">Quantitative models for multiple service facilities</option>
      
      <option  value="110106046/Module 7/Introduction 7.pdf">Introduction to Module 7</option>
      
      <option  value="110106046/Module 7/Lecture 1.pdf">Forecasting Demand In Services</option>
      
      <option  value="110106046/Module 7/Lecture 2.pdf">Smoothing Customer Demand In Services</option>
      
      <option  value="110106046/Module 8/Introduction 8.pdf">Introduction to Module 8</option>
      
      <option  value="110106046/Module 8/Lecture 1.pdf">Service Capacity Management</option>
      
      <option  value="110106046/Module 8/Lecture 2.pdf">Yield management</option>
      
      <option  value="110106046/Module 8/Lecture 3.pdf">Resource and Workforce Scheduling in Services</option>
      
      <option  value="110106046/Module 9/Introduction 9.pdf">Introduction to Module 9</option>
      
      <option  value="110106046/Module 9/Lecture 1.pdf">Introduction to Queuing System</option>
      
      <option  value="110106046/Module 9/Lecture 2.pdf">Characteristics of Queuing System</option>
      
      <option  value="110106046/Module 9/Lecture 3.pdf">M/M/1 Queuing Model</option>
      
      <option  value="110106046/Module 9/Lecture 4.pdf">M/M/c QUEUING MODEL</option>
      
      <option  value="110106046/Module 9/Lecture 5.pdf">M/M/1/N QUEUING MODEL</option>
      
      <option  value="110106046/Module 10/Introduction 1.pdf">Introduction to Module 10</option>
      
      <option  value="110106046/Module 10/Lecture 1.pdf">Service Inventory Management</option>
      
      <option  value="110106046/Module 10/Lecture 2.pdf">Service Supply Chains</option>
      
      <option  value="110106046/Module 10/Lecture 3.pdf">Processes in Service Supply Chain</option>
      
      <option  value="110106046/Module 11/Introduction 11.pdf">Introduction to Module 11</option>
      
      <option  value="110106046/Module 11/Lecture 1.pdf">Data Envelopment Analysis - I</option>
      
      <option  value="110106046/Module 11/Lecture 2.pdf">Data Envelopment Analysis - II</option>
      
      <option  value="110106046/Module 6/Introduction 6.pdf">Introduction to Module 6</option>
      
      <option  value="110106046/Module 6/Lecture 1.pdf">Service facility design</option>
      
      <option  value="110106046/Module 11/Lecture 3.pdf">Application of simulation in service operations management</option>
      
      <option  value="110106046/Module 11/Lecture 4.pdf">Vehicle Routing and Scheduling</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110106050</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Business Analysis for Engineers</strong></td>
	<td><strong>Dr. S. Vaidhyasubramaniam</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
<option value="110106050/mod01lec01.mp4">Introduction to Business Analysis for Engineers            </option>
<option value="110106050/mod01lec02.mp4">Introduction to Accounting                                 </option>
<option value="110106050/mod01lec03.mp4">Accounting Principles - 1                                  </option>
<option value="110106050/mod01lec04.mp4">Balance Sheet Fundamentals                                 </option>
<option value="110106050/mod01lec05.mp4"> Balance Sheet Fundamentals                                </option>
<option value="110106050/mod01lec06.mp4">Accounting Principles - 2                                  </option>
<option value="110106050/mod01lec07.mp4">Introduction to Income Statement & Double Entry            </option>
<option value="110106050/mod01lec08.mp4">Double Entry Examples - 1                                  </option>
<option value="110106050/mod01lec09.mp4">Double Entry Examples - 2                                  </option>
<option value="110106050/mod01lec10.mp4">Preparation of Financial Statement                         </option>
<option value="110106050/mod01lec11.mp4">Cash Flow Statement 1                                      </option>
<option value="110106050/mod01lec12.mp4">Cash Flow Statement 2                                      </option>
<option value="110106050/mod01lec13.mp4">Special Accounts Illustrations                             </option>
<option value="110106050/mod01lec14.mp4">Final Illustrative Example                                 </option>
<option value="110106050/mod01lec15.mp4">Summary of Financial Accounting                            </option>
<option value="110106050/mod01lec16.mp4">Introduction to Management Accounting & Behaviour of Cost  </option>
<option value="110106050/mod01lec17.mp4">Cost-Volume Relationship                                   </option>
<option value="110106050/mod01lec18.mp4">Cost-Objects & Variance                                    </option>
<option value="110106050/mod01lec19.mp4">Labour & Over Heads Variance Analysis                      </option>
<option value="110106050/mod01lec20.mp4">Cash Conversion Cycle                                      </option>
<option value="110106050/mod01lec21.mp4">Inventory Management                                       </option>
<option value="110106050/mod01lec22.mp4">What is Strategy?                                          </option>
<option value="110106050/mod01lec23.mp4">Poter's Diamond Model                                      </option>
<option value="110106050/mod01lec24.mp4">Industry Analysis                                          </option>
<option value="110106050/mod01lec25.mp4">Industry Analysis & Sources of Strategy                    </option>
<option value="110106050/mod01lec26.mp4">The Need for Value                                         </option>
<option value="110106050/mod01lec27.mp4">Value Chain Analysis                                       </option>
<option value="110106050/mod01lec28.mp4">Corporate Portfolio Analysis                               </option>
<option value="110106050/mod01lec29.mp4">External & Internal Environ Analysis                       </option>
<option value="110106050/mod01lec30.mp4">Models for Strategy,Ansoff matrix                          </option>
<option value="110106050/mod01lec31.mp4">Porter's Generic Strategy                                  </option>
<option value="110106050/mod01lec32.mp4">Prahlad's Core Competency                                  </option>
<option value="110106050/mod01lec33.mp4">Case study to understand strategy                          </option>
<option value="110106050/mod01lec34.mp4"> Case study to understand strategy                         </option>
<option value="110106050/mod01lec35.mp4">Blue ocean and conclusion                                  </option>
<option value="110106050/mod01lec36.mp4">Introduction to Economics                                  </option>
<option value="110106050/mod01lec37.mp4">Introduction to GDP                                        </option>
<option value="110106050/mod01lec38.mp4">Supply vs Demand                                           </option>
<option value="110106050/mod01lec39.mp4">Price & Income Elasticity and Utility                      </option>
<option value="110106050/mod01lec40.mp4">Macroeconomic Variables                                    </option>
<option value="110106050/mod01lec41.mp4">Fiscal & Monetary Policy                                   </option>
<option value="110106050/mod01lec42.mp4">Union Budget & Conclusion                                  </option>

          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110106062</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>NOC:Introduction to Operations Research</strong></td>
	<td><strong>Prof. G. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="110106062/mod01lec01.mp4">Product Mix problem and Notations                                                     </option>
<option value="110106062/mod01lec02.mp4">Manpower and Production planning formulations                                         </option>
<option value="110106062/mod01lec03.mp4">Media selection problem and Bicycle problem                                           </option>
<option value="110106062/mod01lec04.mp4">Caterer problem                                                                       </option>
<option value="110106062/mod01lec05.mp4">Maximum flow and bin packing problems                                                 </option>
<option value="110106062/mod02lec06.mp4 ">Graphical method (maximization)                                                       </option>
<option value="110106062/mod02lec07.mp4">Graphical method (minimization)                                                       </option>
<option value="110106062/mod02lec08.pm4 ">Algebraic method (maximization)                                                       </option>
<option value="110106062/mod02lec09.mp4">Algebraic method (minimization)                                                       </option>
<option value="110106062/mod02lec10.mp4">Comparing graphical and algebraic methods                                             </option>
<option value="110106062/mod03lec11.mp4">Algebraic form of simplex algorithm                                                   </option>
<option value="110106062/mod03lec12.mp4">Tabular form of simplex (maximization)                                                </option>
<option value="110106062/mod03lec13.mp4">Tabular form (minimization)                                                           </option>
<option value="110106062/mod03lec14.mp4">Unboundedness                                                                         </option>
<option value="110106062/mod03lec15.mp4">Infeasibility                                                                         </option>
<option value="110106062/mod04lec16.mp4">Motivation to the dual                                                                </option>
<option value="110106062/mod04lec17.mp4">Writing the dual for a general LP                                                     </option>
<option value="110106062/mod04lec18.mp4">Writing dual for a general LP (continued)                                             </option>
<option value="110106062/mod04lec19.mp4">Duality theorems                                                                      </option>
<option value="110106062/mod04lec20.mp4">Complimentary slackness </option>
<option value="110106062/mod05lec21.mp4">Dual solution using complimentary slackness                                           </option>
<option value="110106062/mod05lec22.mp4">Dual solution from simplex table; </option>
<option value="110106062/mod05lec23.mp4">Economic Interpretation of the dual; </option>
<option value="110106062/mod05lec24.mp4">Solving LPs with mixed type of constraints                                            </option>
<option value="110106062/mod05lec25.mp4">Matrix method for LP problems                                                         </option>
<option value="110106062/mod06lec26.mp4">Introducing the transportation problem                                                </option>
<option value="110106062/mod06lec27.mp4">North West corner Rule and minimum cost method                                        </option>
<option value="110106062/mod06lec28.mp4">Penalty cost </option>
<option value="110106062/mod06lec29.mp4">Stepping stone method and Modified </option>
<option value="110106062/mod06lec30.mp4">MODI method; Dual of the transportation problem and the optimality of the MODI method </option>
<option value="110106062/mod07lec31.mp4">Introducing the Assignment problem                                                    </option>
<option value="110106062/mod07lec32.mp4">Solving the Assignment problem                                                        </option>
<option value="110106062/mod07lec33.mp4">Hungarian algorithm; Alternate optimum                                                </option>
<option value="110106062/mod07lec34.mp4">Unequal number of rows and columns; Dual of the </option>
<option value="110106062/mod07lec35.mp4">Optimality of the Hungarian algorithm                                                 </option>
<option value="110106062/mod08lec36.mp4">Setting up the problem and solving simple LP problems                                 </option>
<option value="110106062/mod08lec37.mp4">Unboundedness and </option>
<option value="110106062/mod08lec38.mp4">Solving other </option>
<option value="110106062/mod08lec39.mp4">Solving a </option>
<option value="110106062/mod08lec40.mp4">Solving an assignment problem                                                         </option>


</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110108047</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Strategic Management</strong></td>
	<td><strong>Prof. R. Srinivasan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
      
      <option value="110108047/mod01lec01.mp4">Introduction to Strategic Management</option>
<option value="110108047/mod01lec02.mp4">Concept of Corporate Strategy</option>
<option value="110108047/mod01lec03.mp4">Strategic Management Process - 01</option>
<option value="110108047/mod01lec04.mp4">Strategic Management Process - 02</option>
<option value="110108047/mod01lec05.mp4">The 7-S Framework</option>
<option value="110108047/mod01lec06.mp4">Corporate Policy and Planning in India</option>
<option value="110108047/mod02lec07.mp4">Board of Directors - Role and Functions</option>
<option value="110108047/mod02lec08.mp4">Board of Directors - Role and Functions, Top Management - Role and Skills, Board Functioning - Indian Context</option>
<option value="110108047/mod02lec09.mp4">Board Functioning - Indian Context & Environmental Scanning</option>
<option value="110108047/mod03lec10.mp4">Environmental Scanning & Industry Analysis</option>
<option value="110108047/mod03lec11.mp4">The synthesis of External Factors & External Factors Analysis Summary (EFAS)</option>
<option value="110108047/mod03lec12.mp4">Internal Corporate Analysis & Impact Matrix</option>
<option value="110108047/mod03lec13.mp4">Value Chain Analysis</option>
<option value="110108047/mod03lec14.mp4">Synthesis of Internal Factors - 1</option>
<option value="110108047/mod03lec15.mp4">Synthesis of Internal Factors - 2</option>
<option value="110108047/mod03lec16.mp4">Internal Factors Analysis Summary (IFAS) & Case Study - 1</option>
<option value="110108047/mod04lec17.mp4">Case Analysis</option>
<option value="110108047/mod04lec18.mp4">Key Financial Ratios</option>
<option value="110108047/mod04lec19.mp4">Case Analysis - 2 & SFAS Matrix</option>
<option value="110108047/mod04lec20.mp4">Business Strategy</option>
<option value="110108047/mod04lec21.mp4">Corporate Strategy - 1</option>
<option value="110108047/mod04lec22.mp4">Corporate Strategy - 2</option>
<option value="110108047/mod04lec23.mp4">Corporate Strategy - 3 & Functional Strategy</option>
<option value="110108047/mod04lec24.mp4">Functional Strategy - 1</option>
<option value="110108047/mod04lec25.mp4">Functional Strategy - 2</option>
<option value="110108047/mod04lec26.mp4">Functional Strategy - 3 & Strategic Choice</option>
<option value="110108047/mod05lec27.mp4">Strategy Implementation - 1</option>
<option value="110108047/mod05lec28.mp4">Strategy Implementation - 2</option>
<option value="110108047/mod06lec29.mp4">Evaluation and Control</option>
<option value="110108047/mod06lec30.mp4">Strategic Information Systems - 1</option>
<option value="110108047/mod06lec31.mp4">Strategic Information Systems - 2</option>
<option value="110108047/mod07lec32.mp4">Other Strategic Issues - 1</option>
<option value="110108047/mod07lec33.mp4">Other Strategic Issues - 2</option>
<option value="110108047/mod07lec34.mp4">Small and Medium Enterprises</option>
<option value="110108047/mod07lec35.mp4">Non- Profit Organizations</option>
<option value="110108047/mod08lec36.mp4">Summary - 1</option>
<option value="110108047/mod08lec37.mp4">Summary - 2</option>
          </select>
    </td>
	
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>110108056</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Global Supply Chain Management </strong></td>
	<td><strong>Prof. N.Viswanadham</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>
    <select name="type1" id="type1" onchange="this.form.submit();"><option  value="#">Select </option>
<option value="110108056/mod01lec01.mp4">Introduction to Global Supply Chain Networks Part- 1               </option>
<option value="110108056/mod01lec02.mp4">Introduction to Global Supply Chain Networks Part -2               </option>
<option value="110108056/mod01lec03.mp4">Zara- fast fashion                                                 </option>
<option value="110108056/mod02lec04.mp4">The Supply Chain Eco-System Framework                              </option>
<option value="110108056/mod02lec05.mp4">Supply Chain Eco-System Framework: Supply Chains & Resources       </option>
<option value="110108056/mod02lec06.mp4">Supply Chain Eco-System Framework: Delivery services& Institutions </option>
<option value="110108056/mod02lec07.mp4">Metro Cash and Carry                                               </option>
<option value="110108056/mod03lec08.mp4">Performance Analysis                                               </option>
<option value="110108056/mod03lec09.mp4">Supply Chain Risk-part1                                            </option>
<option value="110108056/mod03lec10.mp4">Supply Chain Risk-part2                                            </option>
<option value="110108056/mod03lec11.mp4">Supply Chain Risk-part3                                            </option>
<option value="110108056/mod03lec12.mp4">Mattel Toy Recalls and Supply Chain Management                     </option>
<option value="110108056/mod03lec13.mp4">Innovation in Emerging markets                                     </option>
<option value="110108056/mod03lec14.mp4">Innovations in Supply Chain Ecosystem                              </option>
<option value="110108056/mod03lec15.mp4">Indian Telecom and Bharti Airtel                                   </option>
<option value="110108056/mod03lec16.mp4">CEMEX-part1                                                        </option>
<option value="110108056/mod03lec17.mp4">CEMEX-part2                                                        </option>
<option value="110108056/mod03lec18.mp4">Governance                                                         </option>
<option value="110108056/mod03lec19.mp4">Governance of networked organizations                              </option>
<option value="110108056/mod03lec20.mp4">The  Orchestration Governance Model                                </option>
<option value="110108056/mod03lec21.mp4">Orchestration-Examples                                             </option>
<option value="110108056/mod03lec22.mp4">Li & Fung-part1                                                    </option>
<option value="110108056/mod03lec23.mp4">Li & Fung-part2                                                    </option>
<option value="110108056/mod04lec24.mp4">Supply Chain Design-part1                                          </option>
<option value="110108056/mod04lec25.mp4">Supply Chain Design-part2                                          </option>
<option value="110108056/mod05lec26.mp4">Green supply chain design-part1                                    </option>
<option value="110108056/mod05lec27.mp4">Green supply chain design-part2                                    </option>
<option value="110108056/mod05lec28.mp4">Green Supply Chain Ecosystem Analysis                              </option>
<option value="110108056/mod05lec29.mp4">GRIP Framework                                                     </option>
<option value="110108056/mod05lec30.mp4">Location Selection                                                 </option>
<option value="110108056/mod05lec31.mp4">Ecosystem Aware Location Analysis                                  </option>
<option value="110108056/mod05lec32.mp4">Food supply chain in India                                         </option>
<option value="110108056/mod05lec33.mp4">Food supply chain ecosystem - Grip frame work                      </option>
<option value="110108056/mod05lec34.mp4">Food Security in India                                             </option>
<option value="110108056/mod05lec35.mp4">Smart Villages and Cities-part1                                    </option>
<option value="110108056/mod05lec36.mp4">Smart Villages and Cities-part2                                    </option>
<option value="110108056/mod06lec37.mp4">Overview of the Course                                             </option>
<option value="110108056/mod06lec38.mp4">How to use the Video lectures                                      </option>
</select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110105060</strong></td>
	<td><strong>Management</strong></td>
	<td><strong>Applied Multivariate Statistical Modeling</strong></td>
	<td><strong>Dr J Maiti</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td> <select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
 <option  value="110105060/mod01lec01.mp4">Introduction to multivariate statistical modeling</option>
 <option  value="110105060/mod01lec02.mp4">Introduction to multivariate statistical modeling (Contd.)</option>
 <option  value="110105060/mod01lec03.mp4">Univariate descriptive statistics</option>
 <option  value="110105060/mod01lec04.mp4">Sampling distribution</option>
 <option  value="110105060/mod01lec05.mp4">Estimation</option>
 <option  value="110105060/mod01lec06.mp4">Estimation (Contd.)</option>
 <option  value="110105060/mod01lec07.mp4">Hypothesis testing</option>
 <option  value="110105060/mod01lec08.mp4">Multivariate descriptive statistics</option>
 <option  value="110105060/mod01lec09.mp4">Multivariate descriptive statistics (Contd.)</option>
 <option  value="110105060/mod01lec10.mp4">Multivariate normal distribution</option>
 <option  value="110105060/mod01lec11.mp4">Multivariate normal distribution (Contd.)</option>
 <option  value="110105060/mod01lec12.mp4">Multivariate Inferential Statistics</option>
 <option  value="110105060/mod01lec13.mp4">Multivariate Inferential Statistics (Contd.)</option>
 <option  value="110105060/mod01lec14.mp4">ANOVA (Analysis of Varianace)</option>
 <option  value="110105060/mod01lec15.mp4">Analysis of Variance (Contd.)</option>
 <option  value="110105060/mod01lec16.mp4">Multivariate Analysis of Variance (MANOVA)</option>
 <option  value="110105060/mod01lec17.mp4">MANOVA (Contd.)</option>
 <option  value="110105060/mod01lec18.mp4">Tutorial – ANOVA</option>
 <option  value="110105060/mod01lec19.mp4">Tutorial ANOVA (Contd.)</option>
 <option  value="110105060/mod01lec20.mp4">MANOVA – Case Study</option>
 <option  value="110105060/mod01lec21.mp4">Multiple Regression – Introduction</option>
 <option  value="110105060/mod01lec22.mp4">MLR – Sampling distribution of regression coefficients</option>
 <option  value="110105060/mod01lec23.mp4">MLR – Model adequacy tests</option>
 <option  value="110105060/mod01lec24.mp4">MLR – Test of assumptions</option>
 <option  value="110105060/mod01lec25.mp4">MLR – Model diagnostics</option>
 <option  value="110105060/mod01lec26.mp4">MLR – Case Study</option>
 <option  value="110105060/mod01lec27.mp4">Multivariate Linear Regression</option>
 <option  value="110105060/mod01lec28.mp4">Multivariate Linear Regression – Estimation</option>
 <option  value="110105060/mod01lec29.mp4">Multivariate Linear Regression – Model Adequacy tests</option>
 <option  value="110105060/mod01lec30.mp4">Principal Component Analysis (PCA)</option>
 <option  value="110105060/mod01lec31.mp4">PCA – Model Adequacy & Interpretation</option>
 <option  value="110105060/mod01lec32.mp4">Regression Modeling using SPSS</option>
 <option  value="110105060/mod01lec33.mp4">Factor Analysis</option>
 <option  value="110105060/mod01lec34.mp4">Factor Analysis – Estimation & Model Adequacy testing</option>
 <option  value="110105060/mod01lec35.mp4">Factor Analysis – Model Adequacy, rotation, factor scores & case study</option>
 <option  value="110105060/mod01lec36.mp4">Cluster Analysis</option>
 <option  value="110105060/mod01lec37.mp4">Cluster Analysis (Contd.)</option>
 <option  value="110105060/mod01lec38.mp4">Introduction to Structural Equation Modeling (SEM)</option>
 <option  value="110105060/mod01lec39.mp4">SEM - Measurement Model</option>
 <option  value="110105060/mod01lec40.mp4">SEM - Structural Model</option>
 <option  value="110105060/mod01lec41.mp4">Correspondence Analysis</option>
 <option  value="110105060/mod01lec42.mp4">Correspondence Analysis (Contd.)</option>

          </select></td>
	
	</tr>
	</form>


<form name="jk123" action="file:///F|/Hard - Disk/To Copy in Institute Hard-Disks/NPTEL Index/displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>110106064</strong></td>
	<td><strong> Management </strong></td>
	<td><strong> NOC:Introduction to Data Analytics(Course sponsored by Aricent) </strong></td>
	<td><strong> Dr. Nandan Sudarsanam, Dr. Balaraman Ravindran</strong></td>
	<td><strong>Video</strong></td>
	<td><strong> IIT Madras </strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'>
      <option  value="#"> Select </option>
      <option  value="110106064/mod01lec01.mp4">Course Overview</option>
      
      <option  value="110106064/mod01lec02.mp4"> Course Overview (cont'd) </option>
      
      <option  value="110106064/mod01lec03.mp4"> Descriptive Statistics - Graphical Approaches </option>
      
      <option  value="110106064/mod01lec04.mp4"> Descriptive Statistics - Measures of Central Tendency </option>
      
      <option  value="110106064/mod01lec05.mp4"> Descriptive Statistics - Measures of Dispersion </option>
      
      <option  value="110106064/mod02lec06.mp4"> Random Variables and Probability Distributions </option>
      
      <option  value="110106064/mod02lec07.mp4"> Probability Distributions(contd) </option>
      
      <option  value="110106064/mod02lec08.mp4"> Probability Distributions(contd) </option>
      
      <option  value="110106064/mod02lec09.mp4"> Inferential Statistics – Motivation </option>
      
      <option  value="110106064/mod02lec10.mp4"> Inferential Statistics - Single sample tests </option>
      
      <option  value="110106064/mod03lec11.mp4"> Two Sample tests </option>
      
      <option  value="110106064/mod03lec12.mp4"> Type 1 and Type 2 Errors </option>
      
        
      <option  value="110106064/mod03lec13.mp4"> Confidence Intervals </option>
      
      <option  value="110106064/mod03lec14.mp4"> ANOVA and Test of Independence </option>
      
      <option  value="110106064/mod03lec15.mp4"> Short Introduction to Regression </option>
      
      <option  value="110106064/mod04lec16.mp4"> Introduction to Machine Learning </option>
      
      <option  value="110106064/mod04lec17.mp4"> Supervised Learning </option>
      
      <option  value="110106064/mod04lec18.mp4"> Unsupervised Learning </option>
      
      <option  value="110106064/mod04lec19.mp4"> Ordinary Least Squares Regression </option>
      
      <option  value="110106064/mod04lec20.mp4"> Simple and Multiple Regression in Excel and Matlab </option>
      
      <option  value="110106064/mod04lec21.mp4"> Regularization/ Coefficients Shrinkage </option>
      
      <option  value="110106064/mod04lec22.mp4"> Data Modelling and Algorithmic Modelling Approaches </option>
      
      <option  value="110106064/mod05lec23.mp4"> Logistic Regression </option>
      
      <option  value="110106064/mod05lec24.mp4"> Training a Logistic Regression Classifier </option>
      
      <option  value="110106064/mod05lec25.mp4"> Classification and Regression Trees </option>
      
      <option  value="110106064/mod05lec26.mp4"> Classification and Regression Trees(contd) </option>
      
      <option  value="110106064/mod05lec27.mp4"> Bias Variance Dichotomy </option>
      
      <option  value="110106064/mod05lec28.mp4"> Model Assessment and Selection</option>
      
      <option  value="110106064/mod05lec29.mp4"> Support Vector Machines </option>
      
      <option  value="110106064/mod05lec30.mp4"> Support Vector Machines(contd) </option>
      
      <option  value="110106064/mod05lec31.mp4"> Support Vector Machines for Non Linearly Separable Data</option>
      
      <option  value="110106064/mod05lec32.mp4"> Support Vector Machines and Kernel Transformations </option>
      
      <option  value="110106064/mod06lec33.mp4"> Ensemble Methods and Random Forests </option>
      
      <option  value="110106064/mod06lec34.mp4"> Artificial Neural Networks</option>
      
      <option  value="110106064/mod06lec35.mp4"> Artificial Neural Networks(cont\'d)</option>
      
      <option  value="110106064/mod06lec36.mp4"> Deep Learning </option>
      
      <option  value="110106064/mod07lec37.mp4"> Associative Rule Mining </option>
      
      <option  value="110106064/mod07lec38.mp4"> Association Rule Mining (contd)</option>
      
      <option  value="110106064/mod07lec39.mp4"> Big Data, A small introduction </option>
      
      <option  value="110106064/mod08lec40.mp4"> Big Data - A small introduction (contd) </option>
       
<option  value="110106064/mod08lec41.mp4"> Clustering Analysis </option>
      <option  value="110106064/mod08lec42.mp4"> Clustering Analysis (contd) </option>
      <option  value="110106064/mod09lec43.mp4"> Introduction to Experimentation and Active Learning </option>
      <option  value="110106064/mod08lec44.mp4"> Introduction to Experimentation and Active Learning(contd)</option>

<option  value="110106064/mod08lec45.mp4"> An Introduction to Online Learning - Reinforcement Learning </option>

<option  value="110106064/mod08lec46.mp4"> An Introduction to Online Learning - Reinforcement Learning (contd) </option>

<option  value="110106064/mod09lec47.mp4"> Summary+ Insights into the Final Exam </option>


                                  
          </select>
</td>
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>110104065</strong></td>
      <td><strong>Management</strong></td>
      <td><strong>NOC:Managing Services(Course sponsored by Aricent)</strong></td>
      <td><strong>Prof. Jayanta Chatterjee</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
			<option  value="110104065/mod01lec01.mp4">What is Service?</option>
			<option  value="110104065/mod01lec02.mp4">Evolving Service Markets</option>
			<option  value="110104065/mod01lec03.mp4">The Service Customers</option>
			<option  value="110104065/mod01lec04.mp4">Product Service Systems</option>
			<option  value="110104065/mod01lec05.mp4">The Service Act</option>
			<option  value="110104065/mod01lec06.mp4">Seamless Service</option>
			<option  value="110104065/mod02lec07.mp4">Service Management Elements</option>
			<option  value="110104065/mod02lec08.mp4">Core Vs. Supplementary Services</option>
			<option  value="110104065/mod02lec09.mp4">Intangibility of Services</option>
			<option  value="110104065/mod02lec10.mp4">Response to IHIP Challenges</option>
			<option  value="110104065/mod02lec11.mp4">Process & Promotion</option>
			<option  value="110104065/mod02lec12.mp4">Process Issues in Service</option>
			<option  value="110104065/mod03lec13.mp4">Challenges of Services-1</option>
			<option  value="110104065/mod03lec14.mp4">Service Uniqueness -2</option>
			<option  value="110104065/mod03lec15.mp4">Consumer in the Services Flow-1</option>
			<option  value="110104065/mod03lec16.mp4">Service Consumer Behavior-2</option>
			<option  value="110104065/mod03lec17.mp4">Customer Co Creation of Services-1</option>
			<option  value="110104065/mod03lec18.mp4">Customer Co Creation of Services-2</option>
			<option  value="110104065/mod04lec19.mp4">Current Service Map to New Service Design</option>
			<option  value="110104065/mod04lec20.mp4">Current Service Map to New Service Design.</option>
			<option  value="110104065/mod04lec21.mp4">Case Study on Service Excellence - 1</option>
			<option  value="110104065/mod04lec22.mp4">Case Study on Service Excellence - 2</option>
			<option  value="110104065/mod04lec23.mp4">Services Excellence - Culture</option>
			<option  value="110104065/mod04lec24.mp4">People in Services</option>
			<option  value="110104065/mod05lec25.mp4">Position - Value Proposition - 1</option>
			<option  value="110104065/mod05lec26.mp4">Position - Value Proposition - 2</option>
			<option  value="110104065/mod05lec27.mp4">Branding Services - 1</option>
			<option  value="110104065/mod05lec28.mp4">Distributing Services</option>
			<option  value="110104065/mod05lec29.mp4">Distributing Services.</option>
			<option  value="110104065/mod05lec30.mp4">Network of Services</option>
			<option  value="110104065/mod06lec31.mp4">Strategy for Service Businesses</option>
			<option  value="110104065/mod06lec32.mp4">Strategy for Service Businesses.</option>
			<option  value="110104065/mod06lec33.mp4">Strategy for Service Businesses..</option>
			<option  value="110104065/mod06lec34.mp4">Pricing - Basic Concepts</option>
			<option  value="110104065/mod06lec35.mp4">Service Pricing</option>
			<option  value="110104065/mod06lec36.mp4">Service Pricing.</option>
			<option  value="110104065/mod07lec37.mp4">Service Quality I</option>
			<option  value="110104065/mod07lec38.mp4">Service Quality II</option>
			<option  value="110104065/mod07lec39.mp4">Service Quality III</option>
			<option  value="110104065/mod07lec40.mp4">Service Complaints and Recovery Strategies</option>
			<option  value="110104065/mod07lec41.mp4">Loyalty - Relationship I</option>
			<option  value="110104065/mod07lec42.mp4">Loyalty - Relationship II</option>
			<option  value="110104065/mod08lec43.mp4">Strategy Canvas - Service Portfolio Analysis</option>
			<option  value="110104065/mod08lec44.mp4">Loyalty - Relationship</option>
			<option  value="110104065/mod08lec45.mp4">Managing Partner Relationships</option>
			<option  value="110104065/mod08lec46.mp4">Global Service Ecosystem - Contemporary Issues</option>
			<option  value="110104065/mod08lec47.mp4">Service Ecosystem - Service Innovation</option>
			<option  value="110104065/mod08lec48.mp4">Services as Systems: A Holistic Approach</option>
        </select>
      </td>
    </tr>
</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>110104066</strong></td>
      <td><strong>Management</strong></td>
      <td><strong>NOC:Quantitative Finance</strong></td>
      <td><strong>Dr. Raghu Nandan Sengupta</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Kanpur</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          	<option  value="#">Select</option>
			<option  value="110104066/mod01lec01.mp4">Lecture 1</option>
			<option  value="110104066/mod01lec02.mp4">Lecture 2</option>
			<option  value="110104066/mod01lec03.mp4">Lecture 2 contd. - Part 1</option>
			<option  value="110104066/mod01lec04.mp4">Lecture 2 contd. - Part 2</option>
			<option  value="110104066/mod01lec05.mp4">Lecture 3</option>
			<option  value="110104066/mod01lec06.mp4">Lecture 4</option>
			<option  value="110104066/mod01lec07.mp4">Lecture 5</option>
			<option  value="110104066/mod01lec08.mp4">Lecture 6</option>
			<option  value="110104066/mod02lec09.mp4">Lecture 7</option>
			<option  value="110104066/mod02lec10.mp4">Lecture 8</option>
			<option  value="110104066/mod02lec11.mp4">Lecture 9</option>
			<option  value="110104066/mod02lec12.mp4">Lecture 10</option>
			<option  value="110104066/mod02lec13.mp4">Lecture 11</option>
			<option  value="110104066/mod02lec14.mp4">Lecture 12</option>
			<option  value="110104066/mod03lec15.mp4">Lecture 13</option>
			<option  value="110104066/mod03lec16.mp4">Lecture 14</option>
			<option  value="110104066/mod03lec17.mp4">Lecture 15</option>
			<option  value="110104066/mod03lec18.mp4">Lecture 16</option>
			<option  value="110104066/mod03lec19.mp4">Lecture 17</option>
			<option  value="110104066/mod03lec20.mp4">Lecture 18</option>
			<option  value="110104066/mod04lec21.mp4">Lecture 19</option>
			<option  value="110104066/mod04lec22.mp4">Lecture 20</option>
			<option  value="110104066/mod04lec23.mp4">Lecture 21</option>
			<option  value="110104066/mod04lec24.mp4">Lecture 22</option>
			<option  value="110104066/mod04lec25.mp4">Lecture 23</option>
			<option  value="110104066/mod04lec26.mp4">Lecture 24</option>
			<option  value="110104066/mod05lec27.mp4">Lecture 25</option>
			<option  value="110104066/mod05lec28.mp4">Lecture 26</option>
			<option  value="110104066/mod05lec29.mp4">Lecture 27</option>
			<option  value="110104066/mod05lec30.mp4">Lecture 28</option>
			<option  value="110104066/mod05lec31.mp4">Lecture 29</option>
			<option  value="110104066/mod05lec32.mp4">Lecture 30</option>
			<option  value="110104066/mod06lec33.mp4">Lecture 31</option>
			<option  value="110104066/mod06lec34.mp4">Lecture 32</option>
			<option  value="110104066/mod06lec35.mp4">Lecture 33</option>
			<option  value="110104066/mod06lec36.mp4">Lecture 34</option>
			<option  value="110104066/mod06lec37.mp4">Lecture 35</option>
			<option  value="110104066/mod06lec38.mp4">Lecture 36</option>
			<option  value="110104066/mod07lec39.mp4">Lecture 37</option>
			<option  value="110104066/mod07lec40.mp4">Lecture 38</option>
			<option  value="110104066/mod07lec41.mp4">Lecture 39</option>
			<option  value="110104066/mod07lec42.mp4">Lecture 40</option>
			<option  value="110104066/mod07lec43.mp4">Lecture 41</option>
			<option  value="110104066/mod07lec44.mp4">Lecture 42</option>
			<option  value="110104066/mnod08lec45.mp4">Lecture 43</option>
			<option  value="110104066/mod08lec46.mp4">Lecture 44</option>
			<option  value="110104066/mod08lec47.mp4">Lecture 45</option>
			<option  value="110104066/mod08lec48.mp4">Lecture 46</option>
			<option  value="110104066/mod08lec49.mp4">Lecture 47</option>
			<option  value="110104066/mod08lec50.mp4">Lecture 48</option>
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
