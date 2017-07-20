
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
<title>Chemistry and Biochemistry</title>
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
	<td><strong>104101006</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Introduction to Organometallic Chemistry</strong></td>
	<td><strong>Prof. M. S. Balakrishna,Prof. Prasenjit Ghosh</strong></td>

	<td><strong>Web</strong></td>
	<td><strong>IIT Bombay</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104101006/modules/module1/lec1/objectives_L1.html">Lecture 1 : Bonding concept s in main group chemistry</option>
      
      <option  value="104101006/modules/module1/lec2/objectives_L2-3.html">Lecture 2 - 3 : VSEPR theory and its utility</option>
      
      <option  value="104101006/modules/module2/lec1/objectives_L1.html">Lecture 1 : General Methods of preparation</option>
      
      <option  value="104101006/modules/module2/lec2/objectives_L2.html">Lecture 2 : Organometallic compounds of alkali metals (sodium and lithium)</option>
      
      <option  value="104101006/modules/module2/lec3/objectives_L3.html">Lecture 3 : Organometallic compounds of alkaline earth metals (beryllium and magnesium)</option>

      
      <option  value="104101006/modules/module2/lec4/objectives_L4.html">Lecture 4 : Structure and bonding</option>
      
      <option  value="104101006/modules/module3/lec1/objectives_L1.html">Lecture 1 : Reactions of organomeallic compounds</option>
      
      <option  value="104101006/modules/module3/lec2/objectives_L2.html">Lecture 2 : Organometallic compounds of boron and aluminium</option>
      
      <option  value="104101006/modules/module3/lec3/objectives_L3.html">Lecture 3 : Organometallic compounds of gallium and indium</option>
      
      <option  value="104101006/modules/module3/lec4/objectives_L4.html">Lecture 4 : Zeigler Natta polymerization catalysts</option>
      
      <option  value="104101006/modules/module3/lec5/objectives_L5.html">Lecture 5 : Organosilicon and organogermanium compounds</option>

      
      <option  value="104101006/modules/module3/lec6/objectives_L6.html">Lecture 6 : Organotin and organolead compounds</option>
      
      <option  value="104101006/modules/module4/lec1/objectives_L1.html">Lecture 1 : Organometallic compounds of As(V) and Sb(V)</option>
      
      <option  value="104101006/modules/module4/lec2/objectives_L2.html">Lecture 2 : Orgnometallic compounds of  As(III) and Sb(III)</option>
      
      <option  value="104101006/modules/module4/lec3/objectives_L3-4.html">Lecture 3 - 4 : Phosphines</option>
      
      <option  value="104101006/modules/module5/lec1/objectives_L1.html">Lecture 1 : Organometallic compounds of zinc and cadmium</option>
      
      <option  value="104101006/modules/module5/lec2/objectives_L2.html">Lecture 2 : Organometallic compounds of mercury</option>

      
      <option  value="104101006/modules/module6/lec1/objectives_L1.html">Lecture 1 : 18 Valence Electron Rule</option>
      
      <option  value="104101006/modules/module6/lec2/objectives_L2.html">Lecture 2 : Synthesis and Stability</option>
      
      <option  value="104101006/modules/module7/lec1/objectives_L1.html">Lecture 1 : Transition metal alkyl complexes</option>
      
      <option  value="104101006/modules/module7/lec2/objectives_L2.html">Lecture 2 : Metal Hydrides</option>
      
      <option  value="104101006/modules/module8/lec1/objectives_L1.html">Lecture 1 : Metal carbonyls</option>
      
      <option  value="104101006/modules/module8/lec2/objectives_L2.html">Lecture 2 : Metal Phosphines</option>

      
      <option  value="104101006/modules/module9/lec1/objectives_L1.html">Lecture 1 : Metal alkene complexes</option>
      
      <option  value="104101006/modules/module9/lec2/objectives_L2.html">Lecture 2 : Metal allyl and diene complexes</option>
      
      <option  value="104101006/modules/module9/lec3/objectives_L3.html">Lecture 3 : Metal cyclopentadienyl complexes</option>
      
      <option  value="104101006/modules/module10/lec1/objectives_L1.html">Lecture 1 : Oxidative addition and Reductive elimination</option>
      
      <option  value="104101006/modules/module10/lec2/objectives_L2.html">Lecture 2 : Insertion and Elimination Reactions</option>
      
      <option  value="104101006/modules/module10/lec3/objectives_L3.html">Lecture 3 : Nucleophilic and Electrophilic Addition and Abstraction</option>

      
      <option  value="104101006/modules/module11/lec1/objectives_L1.html">Lecture 1 : Homogeneous Catalysis - I</option>
      
      <option  value="104101006/modules/module11/lec2/objectives_L2.html">Lecture 2 : Homogeneous Catalysis - II</option>
      
      <option  value="104101006/modules/module12/lec1/objectives_L1.html">Lecture 1 : Characterization of Organometallic Complexes</option>
      
      <option  value="104101006/modules/module13/lec1/objectives_L1.html">Lecture 1 : Metal?Carbenes</option>
      
      <option  value="104101006/modules/module13/lec2/objectives_L2.html">Lecture 2 : Metal?Carbynes</option>
      
      <option  value="104101006/modules/module14/lec1/objectives_L1.html">Lecture 1 : Catalytic Applications of Organometallic Compounds: Alkene Metathesis</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104102016</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Structure and Functions of Biomolecules</strong></td>
	<td><strong>Dr. S.K. Khare</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Delhi</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104102016/cell%20basic%20structure%20and%20function/structural%20organization%20of%20prokaryotic%20and%20eukaryotic%20cells.html">Structural organization of prokaryotic and eukaryotic cells</option>
      
      <option  value="104102016/cell%20basic%20structure%20and%20function/structural%20organization%20of%20animal%20and%20plant%20cells.html">Structural organization of animal and plant cells</option>
      
      <option  value="104102016/cell%20basic%20structure%20and%20function/cell%20organelles%20their%20molecular%20composition%20structure%20and%20function.html">Cell organelles their molecular composition structure and function</option>
      
      <option  value="104102016/cellular%20transport/active%20cellular%20transport.html">Active cellular transport</option>
      
      <option  value="104102016/cellular%20transport/passive%20cellular%20transport.html">Passive cellular transport</option>

      
      <option  value="104102016/carbohydartes%20structure%20and%20biological%20functions/definition%20basic%20structure%20and%20stereoisomeric%20forms%20of%20carbohydrates.html">Definition basic structure and stereoisomeric forms of carbohydrates</option>
      
      <option  value="104102016/carbohydartes%20structure%20and%20biological%20functions/classifications%20of%20monosaccharides.html">Classifications of monosaccharides</option>
      
      <option  value="104102016/carbohydartes%20structure%20and%20biological%20functions/chain%20and%20ring%20forms%20structure%20and%20functions%20of%20major%20monosaccharides.html">Chain and ring forms structure and functions of major monosaccharides</option>
      
      <option  value="104102016/carbohydartes%20structure%20and%20biological%20functions/disaccharides.html">Disaccharides</option>
      
      <option  value="104102016/carbohydartes%20structure%20and%20biological%20functions/oligoaccharides%20and%20polysaccharides.html">Oligoaccharides and polysaccharides</option>
      
      <option  value="104102016/carbohydartes%20structure%20and%20biological%20functions/other%20biologically%20important%20polysaccharides.html">Other biologically important polysaccharides</option>

      
      <option  value="104102016/amino%20acids%20%20peptides%20and%20proteins/amino acids building blocks of proteins.html">Amino acids building blocks of proteins</option>
      
      <option  value="104102016/amino%20acids%20%20peptides%20and%20proteins/classification%20and%20structure%20of%20amino%20acids.html">Classification and structure of amino acids</option>
      
      <option  value="104102016/amino%20acids%20%20peptides%20and%20proteins/properties%20of%20amino%20acids.html">Properties of amino acids</option>
      
      <option  value="104102016/amino%20acids%20%20peptides%20and%20proteins/peptides.html">Peptides</option>
      
      <option  value="104102016/amino%20acids%20%20peptides%20and%20proteins/structure%20and%20functions%20of%20proteins.html">Structure and functions of proteins</option>
      
      <option  value="104102016/structure%20and%20functions%20of%20lipids/definition%20nomenclature%20and%20function%20of%20lipids.html">Definition nomenclature and function of lipids</option>

      
      <option  value="104102016/structure%20and%20functions%20of%20lipids/structure%20and%20function%20of%20various%20classes%20of%20lipids.html">Structure and function of various classes of lipids</option>
      
      <option  value="104102016/structure%20and%20functions%20of%20lipids/structure%20and%20function%20of%20various%20classes%20of%20lipids%20continued.html">Structure and function of various classes of lipids (Continued)</option>
      
      <option  value="104102016/structure%20and%20functions%20of%20lipids/lipoproteins.html">Lipoproteins</option>
      
      <option  value="104102016/structure%20and%20functions%20of%20nucleic%20acids/nucleic%20acids%20as%20genetic%20material.html">Nucleic acids as genetic material</option>
      
      <option  value="104102016/structure%20and%20functions%20of%20nucleic%20acids/building%20blocks%20of%20nucleic%20acids.html">Building blocks of nucleic acids</option>
      
      <option  value="104102016/structure%20and%20functions%20of%20nucleic%20acids/dna%20structure%20properties%20and%20function.html">DNA structure properties and function</option>

      
      <option  value="104102016/structure%20and%20functions%20of%20nucleic%20acids/rna%20structure%20and%20functions.html">RNA structure and functions</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/the%20central%20dogma%20of%20molecular%20biology.html">The central dogma of molecular biology</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/dna%20replication.html">DNA replication</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/enzymes%20involved%20in%20dna%20replication.html">Enzymes involved in DNA replication</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/dna%20replication%20process.html">DNA replication process</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/transcription.html">Transcription</option>

      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/transcription%20process%20html">Transcription process</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/post%20transcriptional%20modifications.html">Post transcriptional modifications</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/concept%20of%20gene%20and%20genome.html">Concept of GENE and GENOME</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/translation.html">Translation</option>
      
      <option  value="104102016/concept%20of%20gene%20genome%20and%20gene%20expression/translation%20process.html">Translation process</option>
      
      <option  value="104102016/enzymes/enzymes%20as%20biocatalysts%20of%20cells.html">Enzymes as biocatalysts of cells</option>

      
      <option  value="104102016/enzymes/classification%20of%20enzymes.html">Classification of enzymes</option>
      
      <option  value="104102016/enzymes/enzyme%20mediated%20catalysis.html">Enzyme mediated catalysis</option>
      
      <option  value="104102016/enzymes/enzyme%20kinetics.html">Enzyme kinetics</option>
      
      <option  value="104102016/enzymes/enzyme%20inhibition.html">Enzyme inhibition</option>
      
      <option  value="104102016/enzymes/allosteric%20enzymes%20isoenzymes%20and%20ribozymes.html">Allosteric enzymes isoenzymes and ribozymes</option>
      
      <option  value="104102016/vitamins%20and%20coenzymes/definition%20and%20role%20of%20vitamins.html">Definition and role of vitamins</option>

      
      <option  value="104102016/vitamins%20and%20coenzymes/structure%20and%20function%20of%20important%20vitamins.html">Structure and function of important vitamins</option>
      
      <option  value="104102016/vitamins%20and%20coenzymes/structure%20and%20function%20of%20important%20vitamins%20continued.html">Structure and function of important vitamins (Continued)</option>
          </select></td>

	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103018</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Bio-organic chemistry</strong></td>
	<td><strong>Dr. S.S. Bag</strong></td>

	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104103018/module1/index.html">Defining Bioorganic Chemistry </option>
      
      <option  value="104103018/module1/lec2/1.html">Biomimetic Chemistry-The Enzyme Models </option>
      
      <option  value="104103018/module1/lec3/1.html">Historical Connection and Weak Interactions in Chemistry and Biology </option>
      
      <option  value="104103018/module1/lec4/1.html">Proximity Effect in Organic Chemistry and Molecular Recognition </option>
      
      <option  value="104103018/module1/lec5/1.html">Molecular Recognition </option>

      
      <option  value="104103018/module1/lec6/1.html">Chemistry of the Living Cells</option>
      
      <option  value="104103018/module1/lec7/1.html">Analogy Between Biochemical and Organic Reaction-I </option>
      
      <option  value="104103018/module1/lec8/1.html">Analogy Between Biochemical and Organic Reaction-II </option>
      
      <option  value="104103018/module2/lec1/1.html">Overview of Chemical Biology </option>
      
      <option  value="104103018/module2/lec2/1.html">Amino Acids-Structure, Properties, Classes </option>
      
      <option  value="104103018/module2/lec3/1.html">Stereochemistry of Amino Acids and Synthesis </option>

      
      <option  value="104103018/module2/lec4/1.html">Peptide Bonds and Synthesis </option>
      
      <option  value="104103018/module2/lec5/1.html">Peptide Secondary Structures </option>
      
      <option  value="104103018/module2/lec6/1.html">Natural &beta;-amino Acids and &beta;-peptides</option>
      
      <option  value="104103018/module2/lec7/1.html">Biological Importance of &beta;-peptides</option>
      
      <option  value="104103018/module2/lec8/1.html">&beta;-Turn Peptidomimetics</option>

      
      <option  value="104103018/module2/lec9/1.html">&beta;-Turn Peptidomimetics and &beta;-lactam based Peptidomimetics</option>
      
      <option  value="104103018/module2/lec10/1.html">Expanding the Genetic Code-Background </option>
      
      <option  value="104103018/module2/lec11/1.html">Synthesis and Application of Unnatural Amino Acids </option>
      
      <option  value="104103018/module3/lec1/1.html">Different Facets of Enzyme Catalysis </option>
      
      <option  value="104103018/module3/lec2/1.html">Thermodynamics and Kinetics of Enzyme Catalysis </option>
      
      <option  value="104103018/module3/lec3/1.html">The Catalytic Triad </option>

      
      <option  value="104103018/module3/lec4/1.html">Enzyme Inhibition and Drug Design-I</option>
      
      <option  value="104103018/module3/lec5/1.html">Enzyme Inhibition and Drug Design-II </option>
      
      <option  value="104103018/module3/lec6/1.html">Enzyme in Organic Chemistry-I </option>
      
      <option  value="104103018/module3/lec7/1.html">Enzyme in Organic Chemistry-II </option>
      
      <option  value="104103018/module3/lec8/1.html">Antibody Catalyzed Organic Reaction-I </option>
      
      <option  value="104103018/module3/lec9/1.html">Antibody Catalyzed Organic Reaction-II </option>

      
      <option  value="104103018/module3/lec10/1.html">Enzyme Models and Biosynthesis of Squalene </option>
      
      <option  value="104103018/module3/lec11/1.html">Biomimetic Polyene Cyclizations </option>
      
      <option  value="104103018/module4/lec1/1.html">History of Sugars and Bases and Nucleic Acid </option>
      
      <option  value="104103018/module4/lec2/1.html">Hydrogen Bonded Base Pairs and Double Helix </option>
      
      <option  value="104103018/module4/lec3/1.html">Stability, Properties, and Functions of DNA-I </option>
      
      <option  value="104103018/module4/lec4/1.html">Stability, Properties, and Functions of DNA-II </option>

      
      <option  value="104103018/module4/lec5/1.html">DNA Intercalators </option>
      
      <option  value="104103018/module4/lec6/1.html">Chemical Synthesis of DNA </option>
      
      <option  value="104103018/module4/lec7/1.html">Catalytic RNA, siRNA; micro RNA</option>
      
      <option  value="104103018/module4/lec8/1.html">Expanding the Genetic Alphabets </option>
      
      <option  value="104103018/module4/lec9/1.html">Fluorescently Labeled Nucleosides and Oligonucleotide Probes and SNPs  </option>
      
      <option  value="104103018/module4/lec10/1.html">Hap Map Project and Homogeneous DNA Detection </option>

      
      <option  value="104103018/module4/lec11/1.html">Microarray based DNA Detection </option>
      
      <option  value="104103018/module4/lec12/1.html">Basics of Peptide Nucleic Acids </option>
      
      <option  value="104103018/module4/lec13/1.html">Gene Therapy-I </option>
      
      <option  value="104103018/module4/lec14/1.html">Gene Therapy-II </option>
      
      <option  value="104103018/module4/lec15/1.html">Antigene/Antisense Therapy </option>
      
      <option  value="104103018/module4/lec16/1.html">Goal for Personalised Medicine </option>

      
      <option  value="104103018/module1/problems/1.html">Assignment I</option>
      
      <option  value="104103018/module2/problems/1.html">Assignment II</option>
      
      <option  value="104103018/module4/problems/1.html">Assignment IV</option>
      
      <option  value="104103018/module3/problems/1.html">Assignment III</option>
          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103022</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Principles of Organic Synthesis</strong></td>
	<td><strong>Prof. T. Punniyamurthy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104103022/module1/index.html">Base Catalyzed Reactions � I</option>
      
      <option  value="104103022/module1/lec2/1.html">Base Catalyzed Reactions � II</option>
      
      <option  value="104103022/module2/lec3/1.html">Acid Catalyzed Reactions � I</option>
      
      <option  value="104103022/module2/lec4/1.html">Acid Catalyzed Reactions � II</option>
      
      <option  value="104103022/module3/lec5/1.html">Organometallic Reagents </option>

      
      <option  value="104103022/module3/lec6/1.html">Organolithium Reagents </option>
      
      <option  value="104103022/module3/lec7/1.html">Organozinc Reagents </option>
      
      <option  value="104103022/module3/lec8/1.html">Organocopper Reagents</option>
      
      <option  value="104103022/module3/lec9/1.html">Application in Asymmetric Synthesis </option>
      
      <option  value="104103022/module4/lec10/1.html">Carbon-Nitrogen Bonds Formation � I</option>
      
      <option  value="104103022/module4/lec11/1.html">Carbon-Nitrogen Bonds Formation � II</option>

      
      <option  value="104103022/module4/lec12/1.html">Carbon-Nitrogen Bonds Formation - III</option>
      
      <option  value="104103022/module5/lec13/1.html">Electrophilic Aromatic Substitution � I</option>
      
      <option  value="104103022/module5/lec14/1.html">Electrophilic Aromatic Substitution � II</option>
      
      <option  value="104103022/module6/lec15/1.html">Aromatic Nucleophilic Substitution</option>
      
      <option  value="104103022/module7/lec16/1.html">Aromatic Diazonium Salts</option>
      
      <option  value="104103022/module8/lec17/1.html">Types of Rearrnagements </option>

      
      <option  value="104103022/module8/lec18/1.html"> Rearrangement to Electron Deficient Nitrogen </option>
      
      <option  value="104103022/module8/lec19/1.html"> Rearrangement to Electron Deficient Oxygen </option>
      
      <option  value="104103022/module8/lec20/1.html">Aromatic Rearrangements </option>
      
      <option  value="104103022/module9/lec21/1.html">Free-Radical Reactions � I</option>
      
      <option  value="104103022/module9/lec22/1.html"> Free-Radical Reactions � II</option>

      
      <option  value="104103022/module10/lec23/1.html">Phosphorus-Containing Compounds </option>
      
      <option  value="104103022/module10/lec24/1.html">Sulfur-Containing Compounds</option>
      
      <option  value="104103022/module10/lec25/1.html"> Silicon-Containing Compounds </option>
      
      <option  value="104103022/module10/lec26/1.html"> Boron Containing Compounds </option>
      
      <option  value="104103022/module10/lec27/1.html">Organotin Compounds </option>

      
      <option  value="104103022/module11/lec28/1.html">Titanium Catalysts</option>
      
      <option  value="104103022/module11/lec29/1.html"> Chromium Reagents/Catalysts </option>
      
      <option  value="104103022/module11/lec30/1.html">Iron Catalysts </option>
      
      <option  value="104103022/module11/lec31/1.html">Cobalt Catalysts</option>
      
      <option  value="104103022/module11/lec32/1.html">Copper Catalysts </option>
      
      <option  value="104103022/module11/lec33/1.html">Rhodium Catalysts </option>

      
      <option  value="104103022/module11/lec34/1.html">Palladium Catalysts </option>
      
      <option  value="104103022/module11/lec35/1.html"> Nickel Catalysts </option>
      
      <option  value="104103022/module12/lec36/1.html">Reserpine </option>
      
      <option  value="104103022/module12/lec37/1.html"> Penicillin V </option>
      
      <option  value="104103022/module12/lec38/1.html">Prostaglandins E2 and F2a</option>

      
      <option  value="104103022/module12/lec39/1.html">Ibogamine </option>
      
      <option  value="104103022/module12/lec40/1.html">Adenosine Triphosphate (ATP) </option>
      
      <option  value="104103022/Solutions/1/1.html">Solutions</option>
          </select></td>

	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103023</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Reagents and Organic reactions</strong></td>
	<td><strong>Prof. T. Punniyamurthy</strong></td>

	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104103023/module1/index.html">Osmium Oxidants  </option>
      
      <option  value="104103023/module1/lec2/1.html">Manganese oxidants </option>
      
      <option  value="104103023/module1/lec3/1.html">Chromium oxidants </option>
      
      <option  value="104103023/module1/lec4/1.html">Selenium and aluminium oxidants </option>
      
      <option  value="104103023/module1/lec5/1.html">Peracids</option>

      
      <option  value="104103023/module1/lec6/1.html">Peroxides</option>
      
      <option  value="104103023/module1/lec7/1.html">Ozone, lead tetraacetate and sodium periodate </option>
      
      <option  value="104103023/module1/lec8/1.html">Molecular oxygen </option>
      
      <option  value="104103023/module1/lec9/1.html">Other metal oxidants (Ag, Ru, Pd, etc.) </option>
      
      <option  value="104103023/module1/lec10/1.html">Other nonmetal oxidants (dess-martin, TEMPO and dioxiranes)</option>
      
      <option  value="104103023/module1/lec11/1.html">Other nonmetal oxidants (IBX and DDQ) </option>

      
      <option  value="104103023/module1/lec12/1.html">Other oxidants (NMO, I2/RCO2Ag and NBS) </option>
      
      <option  value="104103023/module1/lec13/1.html">Bio-oxidations (enymatic or microbial oxidations) </option>
      
      <option  value="104103023/module2/lec14/1.html">Lithium aluminum hydride (LAH) </option>
      
      <option  value="104103023/module2/lec15/1.html">Borohydrides</option>
      
      <option  value="104103023/module2/lec16/1.html">Dissolving metal reductions (Na-Liq. NH3, Li-Liq. NH3, etc.) </option>
      
      <option  value="104103023/module2/lec17/1.html">Molecular hydrogen </option>

      
      <option  value="104103023/module2/lec18/1.html">Miscellaneous reducing agents </option>
      
      <option  value="104103023/module2/lec19/1.html">Photoreductions and bio-reductions </option>
      
      <option  value="104103023/module3/lec20/1.html">Organomagnesium reagents </option>
      
      <option  value="104103023/module3/lec21/1.html">Organolithium reagents </option>
      
      <option  value="104103023/module3/lec22/1.html">Organozinc reagents </option>
      
      <option  value="104103023/module3/lec23/1.html">Organocopper reagents </option>

      
      <option  value="104103023/module3/lec24/1.html">Ullman reaction </option>
      
      <option  value="104103023/module3/lec25/1.html">Organoboranes</option>
      
      <option  value="104103023/module3/lec26/1.html">Organosilicon compounds </option>
      
      <option  value="104103023/module3/lec27/1.html">Organotin compounds </option>
      
      <option  value="104103023/module3/lec28/1.html">Organopalladium compounds </option>
      
      <option  value="104103023/module3/lec29/1.html">Organonickel compounds </option>

      
      <option  value="104103023/module3/lec30/1.html">Organorhodium compounds </option>
      
      <option  value="104103023/module3/lec31/1.html">Organoruthenium compounds </option>
      
      <option  value="104103023/module3/lec32/1.html">Organochromium compounds </option>
      
      <option  value="104103023/module3/lec33/1.html">Organotitanium compounds </option>
      
      <option  value="104103023/module4/lec34/1.html">Cerium compounds </option>
      
      <option  value="104103023/module4/lec35/1.html">Samarium and Ytterbium compounds </option>

      
      <option  value="104103023/module5/lec36/1.html">N-Bromosuccinimide (NBS) </option>
      
      <option  value="104103023/module5/lec37/1.html">N, N-Dicyclohexylcarbodiimide (DCC) </option>
      
      <option  value="104103023/module5/lec38/1.html">Diazomethane (CH2 N2) </option>
      
      <option  value="104103023/module5/lec39/1.html">Phosphorus reagents  </option>
      
      <option  value="104103023/module5/lec40/1.html">Sulfur, -Selenium and -Tellurium Compounds </option>
      
      <option  value="104103023/Solutions/1/1.html">solutions</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103067</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Catalytic Asymmetric Synthesis</strong></td>
	<td><strong>Prof. T. Punniyamurthy</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104103067/module1/index.html">Reactions Using Chiral Lewis and Br�nsted Acids I</option>
      
      <option  value="104103067/module1/lec2/1.html">Reactions Using Chiral Lewis and Br�nsted Acids II</option>
      
      <option  value="104103067/module1/lec3/1.html">Reactions Using Chiral Phosphoric Acids I</option>
      
      <option  value="104103067/module1/lec4/1.html">Reactions Using Chiral Phosphoric Acids II</option>
      
      <option  value="104103067/module2/lec5/1.html">Enantioselective Ene and Cycloaddition Reactions</option>

      
      <option  value="104103067/module2/lec6/1.html">Enantioselective Alkene Metathesis</option>
      
      <option  value="104103067/module2/lec7/1.html">Carbometallation and Carbocyclization Reactions</option>
      
      <option  value="104103067/module2/lec8/1.html">Metal-Catalyzed Asymmetric Conjugate Addition Reactions</option>
      
      <option  value="104103067/module2/lec9/1.html">Allylic Substitution with Carbon Nucleophiles</option>
      
      <option  value="104103067/module3/lec10/1.html">Reactions with Metal Carbenoid </option>
      
      <option  value="104103067/module3/lec11/1.html">Reactions with Metal Carbenoid  II</option>

      
      <option  value="104103067/module3/lec12/1.html">Reactions With Metal Nitrenoid and Direct C-H Oxidation</option>
      
      <option  value="104103067/module4/lec13/1.html">Allylic Substitution </option>
      
      <option  value="104103067/module4/lec14/1.html">Aza-Claisen Rearrangement and Related Reactions</option>
      
      <option  value="104103067/module4/lec15/1.html">Aziridination </option>
      
      <option  value="104103067/module5/lec16/1.html">Oxidation of Alcohols</option>
      
      <option  value="104103067/module5/lec17/1.html">Epoxidation I</option>

      
      <option  value="104103067/module5/lec18/1.html">Epoxidation II</option>
      
      <option  value="104103067/module5/lec19/1.html">Enantioselective Sulfoxidation </option>
      
      <option  value="104103067/module5/lec20/1.html">Baeyer-Villiger Oxidation (BVO) </option>
      
      <option  value="104103067/module5/lec21/1.html">Dihydroxylation, Aminohydroxylation and Aziridination Reactions</option>
      
      <option  value="104103067/module6/lec22/1.html">Reaction Carbon-Carbon Double Bonds</option>
      
      <option  value="104103067/module6/lec23/1.html">Reactions of Ketones </option>

      
      <option  value="104103067/module6/lec24/1.html">Reactions of Imines (C=N)</option>
      
      <option  value="104103067/module7/lec25/1.html">Reactions in Nonconventional Conditions I</option>
      
      <option  value="104103067/module7/lec26/1.html">Reactions in Nonconventional Conditions II</option>
      
      <option  value="104103067/module7/lec27/1.html">Reactions in Nonconventional Conditions III</option>
      
      <option  value="104103067/module8/lec28/1.html">Hydrosilylation of Alkenes I</option>
      
      <option  value="104103067/module8/lec29/1.html">Hydrosilylation of Alkenes II</option>

      
      <option  value="104103067/module8/lec30/1.html">Hydroboration, Hydroalumination and Hydrostannation of Alkenes</option>
      
      <option  value="104103067/module9/lec31/1.html">Hydroformylation Reaction</option>
      
      <option  value="104103067/module9/lec32/1.html">Asymmetric Alkoxycarbonylation and Related Reactions</option>
      
      <option  value="104103067/module9/lec33/1.html">Co- and Terpolymerization of Alkenes with Carbon Monoxide</option>
      
      <option  value="104103067/module10/lec34/1.html">Chiral Proline Based Reactions</option>
      
      <option  value="104103067/module10/lec35/1.html">Alkaloid Based Reactions</option>

      
      <option  value="104103067/module10/lec36/1.html">Thiourea Based Catalysis</option>
      
      <option  value="104103067/module11/lec37/1.html">Acylation and Hydrolytic Reactions</option>
      
      <option  value="104103067/module11/lec38/1.html">Carbon-Carbon Bond Forming and Reduction Reactions</option>
      
      <option  value="104103067/module11/lec39/1.html">Enantioselective Reductions</option>
      
      <option  value="104103067/module11/lec40/1.html">Enantioselective Oxidations</option>
      
      <option  value="104103067/solutions/1/1.html">Solutions</option>

          </select></td>

	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103068</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Bio-Organic Chemistry of Natural Enediyne Anticancer Antibiotics</strong></td>
	<td><strong>Dr. S.S. Bag</strong></td>

	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104103068/module1/index.html">History of Discovery of Enediynes and  History of Cancer</option>
      
      <option  value="104103068/module1/lec2/1.html">Microbial Drug Discovery and Isolation of Enediynes</option>
      
      <option  value="104103068/module1/lec3/1.html">Molecular Structures of Enediynes</option>
      
      <option  value="104103068/module1/lec4/1.html">Biological Properties and Mechanisms of Action of Naturally Occurring Enediynes</option>
      
      <option  value="104103068/module1/lec5/1.html">The Bergman Cyclisation Reaction-Part-1</option>

      
      <option  value="104103068/module1/lec6/1.html">The Bergman Cyclisation Reaction-Part-2</option>
      
      <option  value="104103068/module1/lec7/1.html">The Bergman Cyclisation Reaction-Part-3</option>
      
      <option  value="104103068/module1/lec8/1.html">The Bergman Cyclisation Reaction-Part-4</option>
      
      <option  value="104103068/module1/lec9/1.html">The Myers-Saito Cyclisation Reaction-Part-1</option>
      
      <option  value="104103068/module1/lec10/1.html">The Myers-Saito Cyclisation Reaction-Part-2</option>
      
      <option  value="104103068/module2/lec1/1.html">Classifications of Natural Enediynes</option>

      

      <option  value="104103068/module2/lec2/1.html">Mechanism of DNA Cleavage by Each Class</option>
      
      <option  value="104103068/module2/lec3/1.html">Chemical Synthesis of a Few Members of Enediynes Natural Products (Synthesis of  Neocarzinostatin)- Part-1</option>
      
      <option  value="104103068/module2/lec4/1.html">Chemical Synthesis of a Few Members of Enediynes Natural Products (Synthesis of Calicheamicin)-Part-2</option>
      
      <option  value="104103068/module2/lec5/1.html">Chemical Synthesis of a Few Members of Enediynes Natural Products (Synthesis of Calicheamicin)-Part-3</option>
      
      <option  value="104103068/module2/lec6/1.html">Chemical Synthesis of a Few Members of Enediynes Natural Products (Synthesis of  Dynemicin A)-Part-4</option>
      
      <option  value="104103068/module2/lec7/1.html">Chemical Synthesis of a Few Members of Enediynes Natural Products (Synthesis of  N1999A2)-Part-5</option>

      
      <option  value="104103068/module2/lec8/1.html">Chemical Synthesis of a Few Members of Enediynes Natural Products (Synthesis of   Kedarcidin Chromophore-Hirama�s Approach)-Part-6</option>
      
      <option  value="104103068/module2/lec9/1.html">Chemical Synthesis of a Few Members of Enediynes Natural Products (Synthesis of   Kedarcidin Chromophore-Myers� Approach)-Part-7</option>
      
      <option  value="104103068/module2/lec10/1.html">Biosynthesis of a Few Members of Natural Enediynes (Synthesis of   Maduropeptin)-Part-8 </option>
      
      <option  value="104103068/module2/lec11/1.html">Biosynthesis of a Few Members of Natural Enediynes-Part-1</option>
      
      <option  value="104103068/module2/lec12/1.html">Biosynthesis of a Few Members of Natural Enediynes (General Biosynthesis)-Part-2</option>
      
      <option  value="104103068/module2/lec13/1.html">Biosynthesis of a Few Members of Natural Enediynes (Biosynthesis of C-1027)-Part-3</option>

      
      <option  value="104103068/module2/lec14/1.html">Biosynthesis of a Few Members of Natural Enediynes (Biosynthesis of Neocarzinostatin)-Part-4</option>
      
      <option  value="104103068/module2/lec15/1.html">Biosynthesis of a Few Members of Natural Enediynes (Biosynthesis of Maduropeptin)-Part-5</option>
      
      <option  value="104103068/module2/lec16/1.html">Biosynthesis of a Few Members of Natural Enediynes (Biosynthesis of 10-Membered Enediynes , Calicheamicin ?1I)-Part-6</option>
      
      <option  value="104103068/module3/lec1/1.html">Introduction to Structural Features of Enedynes and Factors Affecting the Reactivity of Enediynes</option>
      
      <option  value="104103068/module3/lec2/1.html">Molecular Design of Enediyne Models (Acyclic Enediynes- Structural Representation) Part-1</option>
      
      <option  value="104103068/module3/lec3/1.html">Molecular Design of Enediyne Models (Acyclic Enediynes-Representative Examples)-Part-2</option>

      
      <option  value="104103068/module3/lec4/1.html">Molecular Design of Enediyne Models (Cyclic Enediynes- Structural Representation)-Part-3</option>
      
      <option  value="104103068/module3/lec5/1.html">Molecular Design of Enediyne Models (Cyclic Enediynes-Representative Examples)-Part-4</option>
      
      <option  value="104103068/module3/lec6/1.html">Various Synthetic Approaches  to Acyclic/Cyclic Enediynes</option>
      
      <option  value="104103068/module3/lec7/1.html">Various Synthetic Aprroaches to Cyclic Enediynes-Part-1</option>
      
      <option  value="104103068/module3/lec8/1.html">Various Synthetic Aprroaches to Cyclic Enediynes-Part-2</option>
      
      <option  value="104103068/module3/lec9/1.html">Synthesis of Dienediyne Core of NCS chromophore</option>

      
      <option  value="104103068/module3/lec10/1.html">?-Lactam as a Molecular Lock of Enediyne: Synthesis of ?-Lactam Fused Enediynes </option>
      
      <option  value="104103068/module3/lec11/1.html">Enediynes with pH-Based Triggering Devices (Category 1-3)-Part-1</option>
      
      <option  value="104103068/module3/lec12/1.html">Enediynes with pH-Based Triggering Devices (Category 4-5)-Part-2</option>
      
      <option  value="104103068/module3/lec13/1.html">Photoswitchable Enediynes (Category 1-2)-Part-1</option>
      
      <option  value="104103068/module3/lec14/1.html">Photoswitchable Enediynes (Category 3-6)-Part-2</option>
      
      <option  value="104103068/module3/lec15/1.html">Biological Actions of Some Synthetic Models</option>

      
      <option  value="104103068/module3/lec16/1.html">Enediyne as a Scaffold for Peptidomimetics</option>
      
      <option  value="104103068/module3/lec17/1.html">Enediyne as Peptide Cleaving Agent</option>
      
      <option  value="104103068/module4/lec1/1.html">Defining Cancer and Its Various Type-Part-1</option>
      
      <option  value="104103068/module4/lec2/1.html">Defining Cancer and Its Various Type- Part-2 and Cancer-Combination Therapies </option>
      
      <option  value="104103068/module4/lec3/1.html">Therapeutic Applications of Enediyne Antitumor Antibiotics</option>
      
      <option  value="104103068/module4/lec4/1.html">The Approved Enediynes for Use as Anticancer Drugs</option>

      
      <option  value="104103068/module4/lec5/1.html">Enediynes Under Clinical Investigation and Immunoconjugates</option>
      
      <option  value="104103068/module4/lec6/1.html">Antibody�Drug Conjugates</option>
      
      <option  value="104103068/module4/lec7/1.html">Targeted Chemotherapy</option>
      
      <option  value="104103068/module4/lec8/1.html">Antibody-Enediyne Conjugate under Clinical Investigation and Future Prospect and Recent Advances in Enediyne Research </option>
      
      <option  value="104103068/module1/selected references/1.html">Selected References I</option>
      
      <option  value="104103068/module2/selected references/1.html">Selected References II</option>

      
      <option  value="104103068/module3/selected references/1.html">Selected References III</option>
      
      <option  value="104103068/module4/selected references/1.html">Selected References IV</option>
      
      <option  value="104103068/module1/assignments/1.html">Assignment I</option>
      
      <option  value="104103068/module2/assignments/1.html">Assignment II</option>
      
      <option  value="104103068/module3/assignments/1.html">Assignment III</option>
      
      <option  value="104103068/module4/assignments/1.html">Assignment IV</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103069</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Introductory Inorganic Chemistry</strong></td>
	<td><strong>Dr. Chandan Mukherjee</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>  <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104103069/module1/index.html">Rurherford�s atomic model </option>
      
      <option  value="104103069/module1/lec2/1.html">Bohr�s atomic model and electronic energy</option>
      
      <option  value="104103069/module1/lec3/1.html">Approach to The Schr�dinger Wave Equation</option>
      
      <option  value="104103069/module1/lec4/1.html">The Schr�dinger Wave Equation for hydrogen atom</option>
      
      <option  value="104103069/module1/lec5/1.html">Quantum Numbers and Slater�s rule</option>

      
      <option  value="104103069/module1/lec6/1.html">Periodic Table</option>
      
      <option  value="104103069/module1/lec7/1.html">Some properties of periodic table</option>
      
      <option  value="104103069/module2/lec1/1.html">Bonding and its classification</option>
      
      <option  value="104103069/module2/lec2/1.html">Classification of ionic structure</option>
      
      <option  value="104103069/module2/lec3/1.html">Lattice energy</option>
      
      <option  value="104103069/module2/lec4/1.html">Lattice defect and its claasification</option>

      
      <option  value="104103069/module2/lec5/1.html">Semiconductots, Solvation energy, and Fajan's rule</option>
      
      <option  value="104103069/module2/lec6/1.html">Covalent bonding and hydridization</option>
      
      <option  value="104103069/module2/lec7/1.html">Valence Shell Electron Pair Repulsion (VSEPR) Theory</option>
      
      <option  value="104103069/module2/lec8/1.html">Molecular Orbital Theory (MO-Theory)</option>
      
      <option  value="104103069/module3/lec1/1.html">Werner�s coordination theory & its experimental verification </option>
      
      <option  value="104103069/module3/lec3/1.html">Chelating effect and nomenclature of coordination compounds</option>

      
      <option  value="104103069/module3/lec4/1.html">Geometrical and optical isomerism in coordination compounds</option>
      
      <option  value="104103069/module3/lec5/1.html">Valance Theory of coordination complexes and Crystal-field theory</option>
      
      <option  value="104103069/module3/lec6/1.html">Application of crystal field theory</option>
      
      <option  value="104103069/module3/lec7/1.html">Magnetism</option>
      
      <option  value="104103069/module4/lec1/1.html">Arrhenius, Franklin, and Protonic acid-base theories</option>
      
      <option  value="104103069/module4/lec2/1.html">The Lewis acid-base definition</option>

      
      <option  value="104103069/module4/lec3/1.html">HSAB theory</option>
      
      <option  value="104103069/module5/lec1/1.html">Redox potential</option>
      
      <option  value="104103069/module5/lec2/1.html">Electrochemical cells and electrode potentials</option>
      
      <option  value="104103069/module5/lec3/1.html">Factors influcing redox potential of a rexod couple</option>
      
      <option  value="104103069/module5/lec4/1.html">Latimer and Frost Diagrams</option>
      
      <option  value="104103069/module6/lec1/1.html">Radioactivity and its origin</option>

      
      <option  value="104103069/module6/lec2/1.html">Radioactive decay series</option>
      
      <option  value="104103069/module6/lec3/1.html">Application of Radioactivity</option>
      
      <option  value="104103069/module7/lec1/1.html">Introduction to bioinorganic chemistry </option>
      
      <option  value="104103069/module7/lec2/1.html">Na+/K+ pump and Photosystems</option>
      
      <option  value="104103069/module7/lec3/1.html">Hemoglobin and Myoglobin</option>
      
      <option  value="104103069/module7/lec4/1.html">Cytochrome c oxidase, Cytochrome P450, and Catalase</option>

      
      <option  value="104103069/module7/lec5/1.html">Iron-sulfur proteins and Nitrogenase</option>
      
      <option  value="104103069/module7/lec6/1.html">Some copper-containing proteins: Hemocyanine, Tyrosinase, and Cu-Zn Superoxide dismutase</option>
      
      <option  value="104103069/module7/lec7/1.html">Some zinc-containing proteins: Carbonic anhydrase, Carboxypeptidases</option>
      
      <option  value="104103069/module7/lec8/1.html">Alcohol dehydrogenase and cobalamin (Vitamin B12)   </option>
          </select></td>

	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103071</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Basic Organic Chemistry</strong></td>
	<td><strong>Prof. T. Punniyamurthy</strong></td>

	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104103071/module1/index.html">Structure and Bonding I</option>
      
      <option  value="104103071/module1/lec2/1.html">Structure and Bonding II</option>
      
      <option  value="104103071/module2/lec3/1.html">Acids and Bases </option>
      
      <option  value="104103071/module3/lec4/1.html">Alkanes </option>
      
      <option  value="104103071/module3/lec5/1.html">Alkyl Halides I</option>

      
      <option  value="104103071/module3/lec6/1.html">Alkyl Halides II</option>
      
      <option  value="104103071/module4/lec7/1.html">Alkenes I</option>
      
      <option  value="104103071/module4/lec8/1.html">Alkenes II</option>
      
      <option  value="104103071/module4/lec9/1.html">Alkynes III</option>
      
      <option  value="104103071/module5/lec10/1.html">Alcohols</option>
      
      <option  value="104103071/module5/lec11/1.html">Amines</option>

      
      <option  value="104103071/module5/lec12/1.html">Amine, Ether and Epoxide </option>
      
      <option  value="104103071/module6/lec13/1.html">Carbonyl Compounds I</option>
      
      <option  value="104103071/module6/lec14/1.html">Aldehydes and Ketones I</option>
      
      <option  value="104103071/module6/lec15/1.html">Aldehydes and Ketones II</option>
      
      <option  value="104103071/module6/lec16/1.html">Carboxylic Acid and its Derivatives</option>
      
      <option  value="104103071/module7/lec17/1.html">Benzene and Related Compounds </option>

      
      <option  value="104103071/module7/lec18/1.html">Benzene and Related Compounds II</option>
      
      <option  value="104103071/module7/lec19/1.html">Benzene and Related Compounds III</option>
      
      <option  value="104103071/module8/lec20/1.html">Stereochemistry I</option>
      
      <option  value="104103071/module8/lec21/1.html">Stereochemistry II</option>
      
      <option  value="104103071/module8/lec22/1.html">Stereochemistry III</option>
      
      <option  value="104103071/module8/lec23/1.html">Stereochemistry IV</option>

      
      <option  value="104103071/module9/lec24/1.html">UV-vis and Mass Spectrocopies</option>
      
      <option  value="104103071/module9/lec25/1.html">Mass and Infrared Spectrocopies</option>
      
      <option  value="104103071/module9/lec26/1.html">NMR Spectroscopy</option>
      
      <option  value="104103071/module10/lec27/1.html">Lipids I</option>
      
      <option  value="104103071/module10/lec28/1.html">Lipids II</option>
      
      <option  value="104103071/module11/lec29/1.html">Carbohydrates I</option>

      
      <option  value="104103071/module11/lec30/1.html">Carbohydrates II</option>
      
      <option  value="104103071/module11/lec31/1.html">Carbohydrates III</option>
      
      <option  value="104103071/module12/lec32/1.html">Amino Acids</option>
      
      <option  value="104103071/module12/lec33/1.html">Peptides and Proteins</option>
      
      <option  value="104103071/module13/lec34/1.html">Enzymes </option>
      
      <option  value="104103071/module13/lec35/1.html">Coenzymes and Vitamins</option>

      
      <option  value="104103071/module14/lec36/1.html">Nucleic Acids I</option>
      
      <option  value="104103071/module14/lec37/1.html">Nucleic Acids II</option>
      
      <option  value="104103071/module15/lec38/1.html">Drug Design</option>
      
      <option  value="104103071/module16/lec39/1.html">Polymers I</option>
      
      <option  value="104103071/module16/lec40/1.html">Polymers II</option>
      
      <option  value="104103071/Solutions/1/1.html">Solutions</option>

          </select></td>
	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104104066</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Advance Analytical Course</strong></td>
	<td><strong>Dr. Padma S Vankar</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104104066/mod01lec01.mp4">Lecture-01  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec02.mp4">Lecture-02  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec03.mp4">Lecture-03 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec04.mp4">Lecture-04  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec05.mp4">Lecture-05  	Advance Analytical Course</option>

      
      <option  value="104104066/mod01lec06.mp4">Lecture-06  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec07.mp4">Lecture-07 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec08.mp4">Lecture-08  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec09.mp4">Lecture-09  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec10.mp4">Lecture-10  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec11.mp4">Lecture-11  	Advance Analytical Course</option>

      
      <option  value="104104066/mod01lec12.mp4">Lecture-12  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec13.mp4">Lecture-13  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec14.mp4">Lecture-14 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec15.mp4">Lecture-15  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec16.mp4">Lecture-16  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec17.mp4">Lecture-17  	Advance Analytical Course</option>

      
      <option  value="104104066/mod01lec18.mp4">Lecture-18  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec19.mp4">Lecture-19 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec20.mp4">Lecture-20 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec21.mp4">Lecture-21 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec22.mp4">Lecture-22  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec23.mp4">Lecture-23  	Advance Analytical Course</option>

      
      <option  value="104104066/mod01lec24.mp4">Lecture-24  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec25.mp4">Lecture-25	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec26.mp4">Lecture-26 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec27.mp4">Lecture-27 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec28.mp4">Lecture-28 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec29.mp4">Lecture-29 	Advance Analytical Course</option>

      
      <option  value="104104066/mod01lec30.mp4">Lecture-30 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec31.mp4">Lecture-31  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec32.mp4">Lecture-32 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec33.mp4">Lecture-33  	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec34.mp4">Lecture-34 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec35.mp4">Lecture-35 	Advance Analytical Course</option>

      
      <option  value="104104066/mod01lec36.mp4">Lecture-36 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec37.mp4">Lecture-37 	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec38.mp4">Lecture-38	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec39.mp4">Lecture-39	Advance Analytical Course</option>
      
      <option  value="104104066/mod01lec40.mp4">Lecture-40 	Advance Analytical Course</option>
          </select>
</td>

	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104104011</strong></td>
	<td><strong>Chemistry and Biochemistry </strong></td>
	<td><strong> Chemistry of Materials </strong></td>
	<td><strong>Prof. S. Sundar Manoharan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="104104011/mod01lec01.mp4">Lecture-1- Introduction to Materials Chemistry                                     </option>
<option  value="104104011/mod01lec02.mp4">Lecture-2 Preparative routes: Conventional �Precursor technique I                  </option>
<option  value="104104011/mod01lec03.mp4">Lecture 3  Preparative routes: Conventional �  Precursor technique II              </option>
<option  value="104104011/mod01lec04.mp4">Lecture-4 Preparative routes: Un Conventional Soncochemistry technique II          </option>
<option  value="104104011/mod01lec05.mp4">Lecture 5  Preparative routes: Un Conventional   �  Soncochemistry technique II    </option>
<option  value="104104011/mod01lec06.mp4">Lecture 6: Preparative routes: Un Conventional   --  Combustion technique          </option>
<option  value="104104011/mod01lec07.mp4">Lecture 7: Preparative routes: Un Conventional   �  Microwave technique            </option>
<option  value="104104011/mod01lec08.mp4">Lecture 8: Preparative routes: High Pressure -Hydrothermal   Technique             </option>
<option  value="104104011/mod01lec09.mp4">Lecture 9: Preparative routes: Coventional Solid State Technique                   </option>
<option  value="104104011/mod01lec10.mp4">Lecture 10: Molecular Beam Epitaxy: Monolayers to Multilayers                      </option>
<option  value="104104011/mod01lec11.mp4">Lecture 11: Pulsed Laser Deposition: Oxide thin films                              </option>
<option  value="104104011/mod01lec12.mp4">Lecture 12: Pulsed Electron Deposition: From oxides to polymeric films and devices </option>
<option  value="104104011/mod01lec13.mp4">Lecture 13: Sputtering deposited thin films and applications                       </option>
<option  value="104104011/mod01lec14.mp4">Lecture 14: Crystal growth-Single crystals.                                        </option>
<option  value="104104011/mod01lec15.mp4">Lecture 15: Applications of X-ray diffraction                                      </option>
<option  value="104104011/mod01lec16.mp4">Lecture 16: Applications of X-ray Photoelectron spectroscopy                       </option>
<option  value="104104011/mod01lec17.mp4">Lecture 17: Applications of X-ray Absorption spectroscopy                          </option>
<option  value="104104011/mod01lec18.mp4">Lecture 18: Applications of Thermal analysis techniques                            </option>
<option  value="104104011/mod01lec19.mp4">Lecture 19: Applications of Scanning Tunneling microscopy                          </option>
<option  value="104104011/mod01lec20.mp4">Lecture 20: Applications of Electron Microscopy                                    </option>
<option  value="104104011/mod01lec21.mp4">Lecture 21: Case Study of ZnO                                                      </option>
<option  value="104104011/mod01lec22.mp4">Lecture 22: Magnetic materials II                                                  </option>
<option  value="104104011/mod01lec23.mp4">Lecture 23: Magnetic Materials II                                                  </option>
<option  value="104104011/mod01lec24.mp4">Lecture 24: Magnetic Materials III & Related Phenomena                             </option>
<option  value="104104011/mod01lec25.mp4">Lecture 25: Shape Memory Materials                                                 </option>
<option  value="104104011/mod01lec26.mp4">Lecture 26: Spintronic Materials I Colossal Magentoresistive Oxides                </option>
<option  value="104104011/mod01lec27.mp4">Lecture 27: Spintronic Materials II Giant Magnetoresistive Materials               </option>
<option  value="104104011/mod01lec28.mp4">Lecture 28: Spintronic Materials III Tunelling Magnetoresistive Materials          </option>
<option  value="104104011/mod01lec29.mp4">Lecture 29: Spintronic Materials IV Dilute Magnetic Semicondcutors                 </option>
<option  value="104104011/mod01lec30.mp4">Lecture 30: High Tc Superconductors                                                </option>
<option  value="104104011/mod01lec31.mp4">Lecture 31: he New Carbon family I- Fullerenes and Nanotubes                       </option>
<option  value="104104011/mod01lec32.mp4">Lecture 32: The New Carbon family II- Graphene                                     </option>
<option  value="104104011/mod01lec33.mp4">Lecture 33: Optoelectronic Materials I- OLEDS                                      </option>
<option  value="104104011/mod01lec34.mp4">Lecture 34: Optoelectronic Materials I I- OLEDS                                    </option>
<option  value="104104011/mod01lec35.mp4">Lecture 35: Inorganic Phosphors I                                                  </option>
<option  value="104104011/mod01lec36.mp4">Lecture 36: Inorganic Phosphors II                                                 </option>
<option  value="104104011/mod01lec37.mp4">Lecture 37: Phosphor Materials                                                     </option>
<option  value="104104011/mod01lec38.mp4">Lecture 38: Solar Cells                                                            </option>
<option  value="104104011/mod01lec39.mp4">Lecture 39 : Interview with C N R Rao  and Interview with E C Subba Rao            </option>
<option  value="104104011/mod01lec40.mp4">Lecture 40 : Perceptions & Projections                                             </option>
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104105031</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Bio-inorganic chemistry</strong></td>
	<td><strong>Prof. D. Ray</strong></td>

	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
          <option  value="104105031/mod01lec01.mp4">Introduction</option>
          
          <option  value="104105031/mod01lec02.mp4">Iron Storage and Transport - I</option>
          
          <option  value="104105031/mod01lec03.mp4">Iron Storage and Transport - II</option>
          
          <option  value="104105031/mod01lec04.mp4">Iron Storage and Transport - III</option>
          
          <option  value="104105031/mod01lec05.mp4">Electron Transport Proteins - I</option>
    
          
          <option  value="104105031/mod01lec06.mp4">Electron Transport Proteins - II</option>
          
          <option  value="104105031/mod01lec07.mp4">Electron Transport Proteins - III</option>
          
          <option  value="104105031/mod01lec08.mp4">Electron Transport Proteins - IV</option>
          
          <option  value="104105031/mod01lec09.mp4">Electron Transport Proteins - V</option>
          
          <option  value="104105031/mod01lec10.mp4">Electron Transport Prioteins - VI</option>
          
          <option  value="104105031/mod01lec11.mp4">Electron Transport Proteins - VII</option>
    
          
          <option  value="104105031/mod01lec12.mp4">Electron Transport Proteins - VIII</option>
          
          <option  value="104105031/mod01lec13.mp4">Electron Transport Proteins - IX</option>
          
          <option  value="104105031/mod01lec14.mp4">Electron Transfer in Photosynthesis - I</option>
          
          <option  value="104105031/mod01lec15.mp4">Electron Transfer in Photosynthesis - II</option>
          
          <option  value="104105031/mod01lec16.mp4">Manganese Enzymes </option>
          
          <option  value="104105031/mod01lec17.mp4">Nickel Enzymes</option>
    
          
          <option  value="104105031/mod01lec18.mp4">Nickel Enzymes - II</option>
          
          <option  value="104105031/mod01lec19.mp4">Nickel Enzymes - III</option>
          
          <option  value="104105031/mod01lec20.mp4">Nickel Enzymes - IV</option>
          
          <option  value="104105031/mod01lec21.mp4">Nickel Enzymes - V</option>
          
          <option  value="104105031/mod01lec22.mp4">Molybdenum Enzymes - I</option>
          
          <option  value="104105031/mod01lec23.mp4">Molybdenum Enzymes - II</option>
    
          
          <option  value="104105031/mod01lec24.mp4">Molybdenum Enzymes - III</option>
          
          <option  value="104105031/mod01lec25.mp4">Molybdenum Enzymes - IV</option>
          
          <option  value="104105031/mod01lec26.mp4">Molybdenum Enzymes - V</option>
          
          <option  value="104105031/mod01lec27.mp4">Molybdenum Enzymes - VI</option>
          
          <option  value="104105031/mod01lec28.mp4">Molybdenum and Tungsten in Biology</option>
          
          <option  value="104105031/mod01lec29.mp4">Tungsten Enzymes - I</option>
    
          
          <option  value="104105031/mod01lec30.mp4">Tungsten Enzymes - II</option>
          
          <option  value="104105031/mod01lec31.mp4">Tungsten Enzymes - III</option>
          
          <option  value="104105031/mod01lec32.mp4">Tungsten Enzymes - IV</option>
          
          <option  value="104105031/mod01lec33.mp4">Vanadium Enzymes - I</option>
          
          <option  value="104105031/mod01lec34.mp4">Vanadium Enzymes - II</option>
          
          <option  value="104105031/mod01lec35.mp4">Vanadium Enzymes - III</option>
    
          
          <option  value="104105031/mod01lec36.mp4">Vanadium Enzymes - IV</option>
          
          <option  value="104105031/mod01lec37.mp4">Non - metals in Biology - I</option>
          
          <option  value="104105031/mod01lec38.mp4">Non - metals in Biology - II</option>
          
          <option  value="104105031/mod01lec39.mp4">Non - metals in Biology - III</option>
          
          <option  value="104105031/mod01lec40.mp4">Non - metals in Biology - IV</option>
          </select>
</td>
	
	</tr>
	</form><form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104105032</strong></td>


	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Biocatalysis in organic synthesis</strong></td>
	<td><strong>Prof. Samik Nanda</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104105032/m1l1.html">Introduction</option>
      
      <option  value="104105032/m2l2.html">Biocatalysis and Biotransformation</option>
      
      <option  value="104105032/m3l3.html">Enzyme Assay</option>
      
      <option  value="104105032/m3l4.html">Enzyme Assay(Contd.)</option>
      
      <option  value="104105032/m4l5.html">Enzyme Purification and Characterization</option>

      
      <option  value="104105032/m4l6.html">Enzyme Purification and Characterization(contd.)</option>
      
      <option  value="104105032/m5l7.html">Experimental Methods</option>
      
      <option  value="104105032/m6l8.html">Enzyme Nomenclature</option>
      
      <option  value="104105032/m7l9.html">Immobilization of Enzymes</option>
      
      <option  value="104105032/m8l10.html">Catalytic Role of Enzymes</option>
      
      <option  value="104105032/m8l11.html">Catalytic Role of Enzymes(Contd.)</option>

      
      <option  value="104105032/m8l12.html">Catalytic Role of Enzymes(Contd. )</option>
      
      <option  value="104105032/m8l13.html">Catalytic Role of Enzymes( Contd.)</option>
      
      <option  value="104105032/m9l14.html">Enzymes in Functional Group Transformation </option>
      
      <option  value="104105032/m9l15.html">Enzymes in Functional Group Transformation (Contd.)</option>
      
      <option  value="104105032/m9l16.html">Enzymes in Functional Group Transformation ( Contd.)</option>
      
      <option  value="104105032/m9l17.html">Enzymes in Functional Group Transformation ( Contd. )</option>

      
      <option  value="104105032/m9l18.html">Enzymes in Functional Group Transformation (Contd.):</option>
      
      <option  value="104105032/m9l19.html">Enzymes in Functional Group Transformation (Contd.) :</option>
      
      <option  value="104105032/m9l20.html">Enzymes in  Functional Group Transformation (Contd.):</option>
      
      <option  value="104105032/m9l21.html">Enzymes in Functional  Group Transformation (Contd.):</option>
      
      <option  value="104105032/m9l22.html">Enzymes in Functional Group  Transformation ( Contd.)</option>
      
      <option  value="104105032/m9l23.html">Enzymes  in Functional Group Transformation (Contd.)</option>

      
      <option  value="104105032/m9l24.html">Enzymes in  Functional Group Transformation (Contd.)</option>
      
      <option  value="104105032/m9l25.html">Enzymes in Functional Group  Transformation (Contd. )</option>
      
      <option  value="104105032/m9l26.html">Enzymes in Functional Group  Transformation  ( Contd.)</option>
      
      <option  value="104105032/m9l27.html">Enzymes in Functional Group Transformation  (Contd.):</option>
      
      <option  value="104105032/m9l28.html">Enzymes in  Functional  Group Transformation (Contd.)</option>
      
      <option  value="104105032/m9l29.html">Enzymes in  Functional  Group  Transformation (Contd.)</option>

      
      <option  value="104105032/m9l30.html">Enzymes in  Functional Group  Transformation (Contd. )</option>
      
      <option  value="104105032/m10l31.html">White Biotechnology</option>
      
      <option  value="104105032/m10l32.html">White Biotechnology (Contd..):</option>
      
      <option  value="104105032/m10l33.html">White Biotechnology  (Contd..):</option>
      
      <option  value="104105032/m10l34.html">White Biotechnology   (Contd..):</option>
      
      <option  value="104105032/m10l35.html">White  Biotechnology (Contd..):</option>

      
      <option  value="104105032/m10l36.html">White  Biotechnology (Contd.):</option>
      
      <option  value="104105032/m10l37.html"> White Biotechnology (Contd.):</option>
      
      <option  value="104105032/m10l38.html">White Biotechnology  (Contd.):</option>
      
      <option  value="104105032/m10l39.html">White Biotechnology (Contd.):</option>
      
      <option  value="104105032/m10l40.html">White  Biotechnology  (Contd..):</option>
          </select>
</td>

	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104105033</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Co-ordination chemistry (chemistry of transition elements)</strong></td>
	<td><strong>Prof. D. Ray</strong></td>

	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104105033/mod01lec01.mp4">Introduction</option>
      
      <option  value="104105033/mod01lec02.mp4">Definition</option>
      
      <option  value="104105033/mod01lec03.mp4">Classification of Ligands - I</option>
      
      <option  value="104105033/mod01lec04.mp4">Classification of Ligands - II</option>
      
      <option  value="104105033/mod01lec05.mp4">Ligands - III and Nomenclature - I</option>

      
      <option  value="104105033/mod01lec06.mp4">Nomenclature - II</option>
      
      <option  value="104105033/mod01lec07.mp4">Coordination Number - I</option>
      
      <option  value="104105033/mod01lec08.mp4">Coordination Number - II</option>
      
      <option  value="104105033/mod01lec09.mp4">Coordination Number - III</option>
      
      <option  value="104105033/mod01lec10.mp4">Coordination Number - IV</option>
      
      <option  value="104105033/mod01lec11.mp4">Isomerism - I</option>

      
      <option  value="104105033/mod01lec12.mp4">Isomerism - II</option>
      
      <option  value="104105033/mod01lec13.mp4">Coordination Equilibria - I</option>
      
      <option  value="104105033/mod01lec14.mp4">Coordination Equilibria - II</option>
      
      <option  value="104105033/mod01lec15.mp4">Bonding in Complexes - I</option>
      
      <option  value="104105033/mod01lec16.mp4">Bonding in Complexes - II</option>
      
      <option  value="104105033/mod01lec17.mp4">Bonding in Complexes - III</option>

      
      <option  value="104105033/mod01lec18.mp4">Bonding in Complexes - IV</option>
      
      <option  value="104105033/mod01lec19.mp4">Jahn-Teller Effect</option>
      
      <option  value="104105033/mod01lec20.mp4">Spin Crossover and Colour</option>
      
      <option  value="104105033/mod01lec21.mp4">Optical Spectra</option>
      
      <option  value="104105033/mod01lec22.mp4">d-d Transitions</option>
      
      <option  value="104105033/mod01lec23.mp4">Charge Transfer</option>

      
      <option  value="104105033/mod01lec24.mp4">Orgel Diagram</option>
      
      <option  value="104105033/mod01lec25.mp4">Tanabe Sugano Diagram</option>
      
      <option  value="104105033/mod01lec26.mp4">MLCT Transitions</option>
      
      <option  value="104105033/mod01lec27.mp4">Application of CFT</option>
      
      <option  value="104105033/mod01lec28.mp4">Spinels</option>
      
      <option  value="104105033/mod01lec29.mp4">Magnetochemistry</option>

      
      <option  value="104105033/mod01lec30.mp4">Magnetic Properties</option>
      
      <option  value="104105033/mod01lec31.mp4">Magnetic Measurements</option>
      
      <option  value="104105033/mod01lec32.mp4">Ligand Field Theory</option>
      
      <option  value="104105033/mod01lec33.mp4">Sigma Orbitals</option>
      
      <option  value="104105033/mod01lec34.mp4">Pi Orbitals </option>
      
      <option  value="104105033/mod01lec35.mp4">Reaction Mechanism - I</option>

      
      <option  value="104105033/mod01lec36.mp4">Reaction Mechniasm - II</option>
      
      <option  value="104105033/mod01lec37.mp4">Reaction Mechanism - III</option>
      
      <option  value="104105033/mod01lec38.mp4">Reaction Mechanism - IV</option>
      
      <option  value="104105033/mod01lec39.mp4">Reaction Mechanism - V</option>
      
      <option  value="104105033/mod01lec40.mp4">Biological Inorganic Chemistry</option>
          </select>
</td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104105034</strong></td>
	<td><strong>Chemistry and Biochemistry </strong></td>
	<td><strong>Heterocyclic Chemistry </strong></td>
	<td><strong>Prof. D.R. Mal</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="104105034/mod01lec01.mp4">Definition and Scope                                               </option>
<option  value="104105034/mod01lec02.mp4">Single - Step Methods for IVPs                                     </option>
<option  value="104105034/mod01lec03.mp4">Systematic Nomenclature                                            </option>
<option  value="104105034/mod01lec04.mp4">Nomenclature (Contd.) and Important Names                          </option>
<option  value="104105034/mod01lec05.mp4">Overview of Structure Determination in Heterocyclic Chemistry      </option>
<option  value="104105034/mod01lec06.mp4">15N NMR in Heterocyclic Chemistry                                  </option>
<option  value="104105034/mod01lec07.mp4">Effects of Ring Nitrogen - A                                       </option>
<option  value="104105034/mod01lec08.mp4">Effects of Ring Nitrogen - B                                       </option>
<option  value="104105034/mod01lec09.mp4">Effects of Ring Nitrogen - C                                       </option>
<option  value="104105034/mod01lec10.mp4">Oxidation in Heterocyclic Chemistry                                </option>
<option  value="104105034/mod01lec11.mp4">Oxidation in Heterocyclic Chemistry (Contd.)                       </option>
<option  value="104105034/mod01lec12.mp4">Reduction in Heterocyclic Chemistry                                </option>
<option  value="104105034/mod01lec13.mp4">Radicals in Heterocylic Chemistry - I                              </option>
<option  value="104105034/mod01lec14.mp4">Radicals in Heterocylic Chemistry - II                             </option>
<option  value="104105034/mod01lec15.mp4">Lithiation for 5-membered heterocycles                             </option>
<option  value="104105034/mod01lec16.mp4">Lithiation for 5-membered heterocycles (Contd.)                    </option>
<option  value="104105034/mod01lec17.mp4">Lithiation of 6-membered heterocycle and non-aromatic heterocycles </option>
<option  value="104105034/mod01lec18.mp4">Magnetiation and Zincation in Heterocyclic Chemistry               </option>
<option  value="104105034/mod01lec19.mp4">Transition metal catalyzed cross coupling                          </option>
<option  value="104105034/mod01lec20.mp4">Transition metal catalyzed cross coupling (Contd.)                 </option>
<option  value="104105034/mod01lec21.mp4">Dehydrogenative (Oxidative) cross coupling                         </option>
<option  value="104105034/mod01lec22.mp4">Tert-amino effect in heterocycle synthesis                         </option>
<option  value="104105034/mod01lec23.mp4">[4 plus 2] cycloaddition in heterocyclic chemistry                 </option>
<option  value="104105034/mod01lec24.mp4">[4 plus 2] cycloaddition in heterocyclic chemistry (Contd.)        </option>
<option  value="104105034/mod01lec25.mp4">[3 plus 2] Cycloaddition in heterocyclic chemistry                 </option>
<option  value="104105034/mod01lec26.mp4">Cycloaddition : Revisited                                          </option>
<option  value="104105034/mod01lec27.mp4">[4 plus 3] Cycloaddition                                           </option>
<option  value="104105034/mod01lec28.mp4">[5 plus 2] Cycloaddition                                           </option>
<option  value="104105034/mod01lec29.mp4">[2 plus 2 plus 2] Cycloaddition                                    </option>
<option  value="104105034/mod01lec30.mp4">Pyrrole Synthesis - I                                              </option>
<option  value="104105034/mod01lec31.mp4">Pyrrole Synthesis - II                                             </option>
<option  value="104105034/mod01lec32.mp4">Indole Synthesis - I                                               </option>
<option  value="104105034/mod01lec33.mp4">Indole Synthesis - II                                              </option>
<option  value="104105034/mod01lec34.mp4">Furan Synthesis                                                    </option>
<option  value="104105034/mod01lec35.mp4">Thiophene Synthesis                                                </option>
<option  value="104105034/mod01lec36.mp4">Oxazole, Imidazole and Thiazole Synthesis                          </option>
<option  value="104105034/mod01lec37.mp4">Pyridine Synthesis                                                 </option>
<option  value="104105034/mod01lec38.mp4">Synthesis of Quinolines and Isoquinolines                          </option>
<option  value="104105034/mod01lec39.mp4">Bycyclic Polyheteroatomic Heterocycles                             </option>
<option  value="104105034/mod01lec40.mp4">Heterocyclic Rearrangements                                        </option>

	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104105038</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Organic photochemistry and pericyclic reactions</strong></td>
	<td><strong>Dr. N.D. Pradeep Singh</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>   <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104105038/mod01lec01.mp4">Introduction to Organic Photochemistry</option>
      
      <option  value="104105038/mod01lec02.mp4">Introduction to Organic Photochemistry (Contd.)</option>
      
      <option  value="104105038/mod01lec03.mp4">Reactivity of n-pi*</option>
      
      <option  value="104105038/mod01lec04.mp4">&#945; - cleavage - I</option>
      
      <option  value="104105038/mod01lec05.mp4">&#945; - cleavage - II</option>

      
      <option  value="104105038/mod01lec06.mp4">&#945; - cleavage - III</option>
      
      <option  value="104105038/mod01lec07.mp4">&#946; - cleavage</option>
      
      <option  value="104105038/mod01lec08.mp4">Intramolecular Hydrogen Abstraction - I</option>
      
      <option  value="104105038/mod01lec09.mp4">Intramolecular Hydrogen Abstraction - II</option>
      
      <option  value="104105038/mod01lec10.mp4">Intramolecular Hydrogen Abstraction - III</option>

      
      <option  value="104105038/mod01lec11.mp4">Intramolecular Hydrogen Abstraction</option>
      
      <option  value="104105038/mod01lec12.mp4">Addition to &#928; - System</option>
      
      <option  value="104105038/mod01lec13.mp4">Intramolecular Paterno-Buchi Reaction</option>
      
      <option  value="104105038/mod01lec14.mp4">Energy of Electron Transfer Reaction</option>
      
      <option  value="104105038/mod01lec15.mp4">Reactivity of &#928; - &#928;*</option>

      
      <option  value="104105038/mod01lec16.mp4">Addition Reaction of &#928; - &#928;*</option>
      
      <option  value="104105038/mod01lec17.mp4">Addition Reaction of &#928; - &#928;*(Contd.)</option>
      
      <option  value="104105038/mod01lec18.mp4">Di-Pi Methane Rearrangement</option>
      
      <option  value="104105038/mod01lec19.mp4">Photochemistry of Cyclohexanone</option>

      
      <option  value="104105038/mod01lec20.mp4">Singlet Oxygen Chemistry</option>
      
      <option  value="104105038/mod01lec21.mp4">Carbenes and Nitrenes</option>
      
      <option  value="104105038/mod01lec22.mp4">Remote Functionalisation</option>
      
      <option  value="104105038/mod01lec23.mp4">Introduction to Pericyclic Reaction</option>
      
      <option  value="104105038/mod01lec24.mp4">Sigmatropic Reactions - I</option>
      
      <option  value="104105038/mod01lec25.mp4">Sigmatropic Reactions - II</option>

      
      <option  value="104105038/mod01lec26.mp4">Sigmatropic Reactions - III</option>
      
      <option  value="104105038/mod01lec27.mp4">Cycloaddition Reactions - I</option>
      
      <option  value="104105038/mod01lec28.mp4">Cycloaddition Reactions - II</option>
      
      <option  value="104105038/mod01lec29.mp4">Cycloaddition - Diels-Alder Reactions</option>
      
      <option  value="104105038/mod01lec30.mp4">Cycloaddition - Diels-Alder Reactions (Contd.)</option>
      
      <option  value="104105038/mod01lec31.mp4">Cycloaddition - Ene Reactions</option>

      
      <option  value="104105038/mod01lec32.mp4">1,3 Dipolar Cycloaddition - I</option>
      
      <option  value="104105038/mod01lec33.mp4">1,3 Dipolar Cycloaddition - II</option>
      
      <option  value="104105038/mod01lec34.mp4">Electrocyclic Reaction - I</option>
      
      <option  value="104105038/mod01lec35.mp4">Electrocyclic Reaction - II</option>
      
      <option  value="104105038/mod01lec36.mp4">Practice Problems in Pericyclic Reaction - I</option>
      
      <option  value="104105038/mod01lec37.mp4">Practice Problems in Pericyclic Reaction - II</option>

      
      <option  value="104105038/mod01lec38.mp4">Practice Problems in Pericyclic Reaction - III</option>
      
      <option  value="104105038/mod01lec39.mp4">Chelotropic Reaction</option>
      
      <option  value="104105038/mod01lec40.mp4">Application of Photochemistry</option>
          </select></td>

	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104105041</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Rate processes</strong></td>
	<td><strong>Dr. M. Halder</strong></td>

	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104105041/mod01lec01.mp4">Rate Processes</option>
      
      <option  value="104105041/mod01lec02.mp4">Reaction Rates and Rate Laws</option>
      
      <option  value="104105041/mod01lec03.mp4">Effect of Temperature on Reaction Rate</option>
      
      <option  value="104105041/mod01lec04.mp4">Effect of Temperature on Reaction Rate (Contd.)</option>
      
      <option  value="104105041/mod01lec05.mp4">Complex Reaction</option>

      
      <option  value="104105041/mod01lec06.mp4">Complex Reaction (Contd.)</option>
      
      <option  value="104105041/mod01lec07.mp4">Complex Reaction  (Contd.)</option>
      
      <option  value="104105041/mod01lec08.mp4">Complex Reaction   (Contd.)</option>
      
      <option  value="104105041/mod01lec09.mp4">Theories of Reaction Rate</option>
      
      <option  value="104105041/mod01lec10.mp4">Theories of Reaction Rate (Contd.)</option>
      
      <option  value="104105041/mod01lec11.mp4">Theories of Reaction Rate  (Contd.)</option>

      
      <option  value="104105041/mod01lec12.mp4">Theories of Reaction Rate   (Contd.)</option>
      
      <option  value="104105041/mod01lec13.mp4">Theories of Reaction Rate    (Contd.)</option>
      
      <option  value="104105041/mod01lec14.mp4">Kinetics of Some Specific Reactions</option>
      
      <option  value="104105041/mod01lec15.mp4">Kinetics of Some Specific Reactions (Contd.)</option>
      
      <option  value="104105041/mod01lec16.mp4">Enzyme Inhibition</option>
      
      <option  value="104105041/mod01lec17.mp4">Oscillatory Reactions</option>

      
      <option  value="104105041/mod01lec18.mp4">Acid Base Catalysis</option>
      
      <option  value="104105041/mod01lec19.mp4">Acid Base Catalysis (Contd.)</option>
      
      <option  value="104105041/mod01lec20.mp4">Kinetic Isotope Effects</option>
      
      <option  value="104105041/mod01lec21.mp4">Fast Reactions</option>
      
      <option  value="104105041/mod01lec22.mp4">Fast Reactions (Contd.)</option>
      
      <option  value="104105041/mod01lec23.mp4">Magneto Kinetics</option>

      
      <option  value="104105041/mod01lec24.mp4">Reactions in Solutions</option>
      
      <option  value="104105041/mod01lec25.mp4">Reactions in Solutions (Contd.)</option>
      
      <option  value="104105041/mod01lec26.mp4">Kinetics at Electrodes</option>
      
      <option  value="104105041/mod01lec27.mp4">Kinetics at Electrodes (Contd.)</option>
      
      <option  value="104105041/mod01lec28.mp4">Ultrafast Process </option>
      
      <option  value="104105041/mod01lec29.mp4">Ultrafast Process (Contd.)</option>

      
      <option  value="104105041/mod01lec30.mp4">Ultrafast Process  (Contd.)</option>
      
      <option  value="104105041/mod01lec31.mp4">Reaction Dynamics</option>
      
      <option  value="104105041/mod01lec32.mp4">Reaction Dynamics (Contd.)</option>
      
      <option  value="104105041/mod01lec33.mp4">Reaction Dynamics  (Contd.)</option>
      
      <option  value="104105041/mod01lec34.mp4">Reaction Dynamics : Scattering</option>
      
      <option  value="104105041/mod01lec35.mp4">Reaction Dynamics : Scattering (Contd.)</option>

      
      <option  value="104105041/mod01lec36.mp4">Reaction Dynamics : Controlling Reagents etc</option>
      
      <option  value="104105041/mod01lec37.mp4">Reaction Dynamics : Controlling Reagents etc (Contd.)</option>
      
      <option  value="104105041/mod01lec38.mp4">Reaction Dynamics : Controlling Reagents etc  (Contd.)</option>
      
      <option  value="104105041/mod01lec39.mp4">Reaction Dynamics : Concluding</option>
      
      <option  value="104105041/mod01lec40.mp4">Concluding Remarks </option>
          </select>
</td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104106048</strong></td>
	<td><strong>Chemistry and Biochemistry </strong></td>
	<td><strong>Principles and Applications of Electron Paramagnetic Resonance Spectroscopy </strong></td>
	<td><strong>Prof. Ranjan Das</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="104106048/mod01lec01.mp4">Remembering the Masters: From Zeeman to Zavoisky  </option>
<option  value="104106048/mod01lec02.mp4">Introduction to EPR spectroscopy                  </option>
<option  value="104106048/mod01lec03.mp4">Electron-Nuclear Hyperfine Interaction � I        </option>
<option  value="104106048/mod01lec04.mp4">Electron-Nuclear Hyperfine Interaction � II       </option>
<option  value="104106048/mod01lec05.mp4">Magnetic Moment in Magnetic Field � I             </option>
<option  value="104106048/mod01lec06.mp4">Magnetic Moment in Magnetic Field � II            </option>
<option  value="104106048/mod01lec07.mp4">EPR Instrumentations � I                          </option>
<option  value="104106048/mod01lec08.mp4">EPR Instrumentations � II                         </option>
<option  value="104106048/mod01lec09.mp4">EPR Instrumentations � III                        </option>
<option  value="104106048/mod01lec10.mp4">EPR Instrumentations � IV                         </option>
<option  value="104106048/mod01lec11.mp4">Quantum Mechanical Description of EPR � I         </option>
<option  value="104106048/mod01lec12.mp4">Quantum Mechanical Description of EPR � II        </option>
<option  value="104106048/mod01lec13.mp4">Introduction to Spin Relaxation                   </option>
<option  value="104106048/mod01lec14.mp4">Theory of First-order EPR Spectra � I             </option>
<option  value="104106048/mod01lec15.mp4">Theory of First-order EPR Spectra � II            </option>
<option  value="104106048/mod01lec16.mp4">How to Analyse First-order EPR Spectra            </option>
<option  value="104106048/mod01lec17.mp4">How to Record EPR Spectra                         </option>
<option  value="104106048/mod01lec18.mp4">Second-order Effects on EPR Spectra               </option>
<option  value="104106048/mod01lec19.mp4">Photochemistry and EPR Spectroscopy               </option>
<option  value="104106048/mod01lec20.mp4">Electron Spin Polarisation � I                    </option>
<option  value="104106048/mod01lec21.mp4">Electron Spin Polarisation � II                   </option>
<option  value="104106048/mod01lec22.mp4">Anisotropic Interactions in EPR Spectroscopy      </option>
<option  value="104106048/mod01lec23.mp4">Theoretical Basis of isotropic Hyperfine Coupling </option>
<option  value="104106048/mod01lec24.mp4">Spin Relaxation and Bloch Equations � I           </option>
<option  value="104106048/mod01lec25.mp4">Spin Relaxation and Bloch Equations � II          </option>
	</tr>
	</form>
<form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104106064</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Selected Topics in Co-ordination Chemistry</strong></td>
	<td><strong>Dr. Vasishta D. Bhatt</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Madras</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104106064/lectures.pdf#page=2">Lecture-01</option>
      
      <option  value="104106064/lectures.pdf#page=6">Lecture-02</option>
      
      <option  value="104106064/lectures.pdf#page=11">Lecture-03</option>
      
      <option  value="104106064/lectures.pdf#page=15">Lecture-04</option>
      
      <option  value="104106064/lectures.pdf#page=24">Lecture-05</option>

      
      <option  value="104106064/lectures.pdf#page=33">Lecture-06</option>
      
      <option  value="104106064/lectures.pdf#page=42">Lecture-07</option>
      
      <option  value="104106064/lectures.pdf#page=47">Lecture-08</option>
      
      <option  value="104106064/lectures.pdf#page=53">Lecture-09</option>
      
      <option  value="104106064/lectures.pdf#page=61">Lecture-10</option>
      
      <option  value="104106064/lectures.pdf#page=67">Lecture-11</option>

      
      <option  value="104106064/lectures.pdf#page=74">Lecture-12</option>
      
      <option  value="104106064/lectures.pdf#page=80">Lecture-13</option>
      
      <option  value="104106064/lectures.pdf#page=88">Lecture-14</option>
      
      <option  value="104106064/lectures.pdf#page=94">Lecture-15</option>
      
      <option  value="104106064/lectures.pdf#page=99">Lecture-16</option>
      
      <option  value="104106064/lectures.pdf#page=106">Lecture-17</option>

      
      <option  value="104106064/lectures.pdf#page=112">Lecture-18</option>
      
      <option  value="104106064/lectures.pdf#page=121">Lecture-19</option>
      
      <option  value="104106064/lectures.pdf#page=133">Lecture-20</option>
      
      <option  value="104106064/lectures.pdf#page=136">Lecture-21</option>
      
      <option  value="104106064/lectures.pdf#page=142">Lecture-22</option>
      
      <option  value="104106064/lectures.pdf#page=147">Lecture-23</option>

      
      <option  value="104106064/lectures.pdf#page=158">Lecture-24</option>
      
      <option  value="104106064/lectures.pdf#page=160">Lecture-25</option>
      
      <option  value="104106064/lectures.pdf#page=166">Lecture-26</option>
      
      <option  value="104106064/lectures.pdf#page=172">Lecture-27</option>
      
      <option  value="104106064/lectures.pdf#page=177">Lecture-28</option>
      
      <option  value="104106064/lectures.pdf#page=185">Lecture-29</option>

      
      <option  value="104106064/lectures.pdf#page=189">Lecture-30</option>
      
      <option  value="104106064/lectures.pdf#page=197">Lecture-31</option>
      
      <option  value="104106064/lectures.pdf#page=210">Lecture-32</option>
      
      <option  value="104106064/lectures.pdf#page=217">Lecture-33</option>
      
      <option  value="104106064/lectures.pdf#page=222">Lecture-34</option>
      
      <option  value="104106064/lectures.pdf#page=225">Lecture-35</option>

      
      <option  value="104106064/lectures.pdf#page=231">Lecture-36</option>
      
      <option  value="104106064/lectures.pdf#page=237">Lecture-37</option>
      
      <option  value="104106064/lectures.pdf#page=242">Lecture-38</option>
      
      <option  value="104106064/lectures.pdf#page=249">Lecture-39</option>
      
      <option  value="104106064/lectures.pdf#page=256">Lecture-40</option>
          </select>
</td>

	
	</tr>
	</form><form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104108055</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Essentials in Immunolgy</strong></td>
	<td><strong>Dr. R. Manjunath,Dr. Dipankar Nandi,Prof. Anjali Karande</strong></td>

	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104108055/mod01lec01.mp4">Introduction to the immune system</option>
      
      <option  value="104108055/mod02lec02.mp4">Cells and Organs of the immune system � Part 1</option>
      
      <option  value="104108055/mod02lec03.mp4">Cells and Organs of the immune system � Part 2</option>
      
      <option  value="104108055/mod02lec04.mp4">Cells and Organs of the immune system � Part 3</option>
      
      <option  value="104108055/mod03lec05.mp4">Innate immunity - Part 1</option>

      
      <option  value="104108055/mod03lec06.mp4">Innate immunity - Part 2</option>
      
      <option  value="104108055/mod04lec07.mp4">Development and differentiation of B cells - Part 1</option>
      
      <option  value="104108055/mod04lec08.mp4">Signaling in B cells</option>
      
      <option  value="104108055/mod05lec09.mp4">Organization of immunoglobulin genes and Mechanism of  immunoglobulin gene  rearrangement</option>
      
      <option  value="104108055/mod05lec10.mp4">Generation of antibody diversity</option>
      
      <option  value="104108055/mod05lec11.mp4">Immunoglobulin class switching Regulation of Immunoglobulin gene regulation</option>

      
      <option  value="104108055/mod06lec12.mp4">Structures and functions of Immunoglobulin�s</option>
      
      <option  value="104108055/mod07lec13.mp4">The three complement pathways</option>
      
      <option  value="104108055/mod08lec14.mp4">Hypersensitivity type 1</option>
      
      <option  value="104108055/mod08lec15.mp4">Hypersensitivity types 2, 3 ,4 and Autoimmunity</option>
      
      <option  value="104108055/mod09lec16.mp4">Autoimmunity Autoimmuno-deficiencies f the B cells</option>
      
      <option  value="104108055/mod09lec17.mp4">Autoimmuno-deficiencies f the B cells</option>

      
      <option  value="104108055/mod09lec18.mp4">Cancer</option>
      
      <option  value="104108055/mod10lec19.mp4">The major histocompatibility complex �Part 1</option>
      
      <option  value="104108055/mod10lec20.mp4">The major histocompatibility complex �Part 2</option>
      
      <option  value="104108055/mod10lec21.mp4">The major histocompatibility complex �Part 3</option>
      
      <option  value="104108055/mod11lec22.mp4">The Major Histocompatibility Complex</option>
      
      <option  value="104108055/mod11lec23.mp4">The Major Histocompatibility Complex: MHC class I pathway</option>

      
      <option  value="104108055/mod11lec24.mp4">The Major Histocompatibility Complex: MHC class II pathway</option>
      
      <option  value="104108055/mod12lec25.mp4">T cell receptors</option>
      
      <option  value="104108055/mod13lec26.mp4">T cell Activation</option>
      
      <option  value="104108055/mod13lec27.mp4">T cell Activation / Differentiation</option>
      
      <option  value="104108055/mod14lec28.mp4">T cell synapse, motility and subsets</option>
      
      <option  value="104108055/mod15lec29.mp4">T cell survival</option>

      
      <option  value="104108055/mod16lec30.mp4">Cytokines � Part 1</option>
      
      <option  value="104108055/mod16lec31.mp4">Cytokines � Part 2</option>
      
      <option  value="104108055/mod17lec32.mp4">Autoimmunity</option>
      
      <option  value="104108055/mod17lec33.mp4">Immunodeficiency</option>
      
      <option  value="104108055/mod18lec34.mp4">Host response mechanisms during infectious diseases � part 1</option>
      
      <option  value="104108055/mod18lec35.mp4">Host response mechanisms during infectious diseases � part 2</option>

      
      <option  value="104108055/mod19lec36.mp4">Transplantation immunology</option>
      
      <option  value="104108055/mod20lec37.mp4">Vaccines</option>
      
      <option  value="104108055/mod21lec38.mp4">Antigens and Immunogens</option>
      
      <option  value="104108055/mod21lec39.mp4">Synthetic vaccines</option>
      
      <option  value="104108055/mod22lec40.mp4">Evolution of the immune system</option>
          </select>
</td>
	
	</tr>
	</form>
<form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104108057</strong></td>
	<td><strong>Chemistry and Biochemistry </strong></td>
	<td><strong>Introductory Quantum Chemistry </strong></td>
	<td><strong>Prof. K.L. Sebastian</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="104108057/mod01lec01.mp4">Wave Paticle Duality                                                                  </option>
<option  value="104108057/mod01lec02.mp4">Standing Waves                                                                        </option>
<option  value="104108057/mod01lec03.mp4">Path Integrals and Schrodinger Equation                                               </option>
<option  value="104108057/mod01lec04.mp4">Postulates - Part1                                                                    </option>
<option  value="104108057/mod01lec05.mp4">Postulates - Part2                                                                    </option>
<option  value="104108057/mod01lec06.mp4">Postulates - Part3                                                                    </option>
<option  value="104108057/mod02lec07.mp4">Separting Variables and Particle in a Box                                             </option>
<option  value="104108057/mod02lec08.mp4">Particle in a box -Part2                                                              </option>
<option  value="104108057/mod02lec09.mp4">Particle in a box -Part3                                                              </option>
<option  value="104108057/mod02lec10.mp4">Particle in a box-time dependent states-Expectations values and time dependent states </option>
<option  value="104108057/mod02lec11.mp4">Particle in a 3 dimensional box                                                       </option>
<option  value="104108057/mod02lec12.mp4">Particle in a well of finite depth                                                    </option>
<option  value="104108057/mod02lec13.mp4">Finite well, Delta and Step Functions                                                 </option>
<option  value="104108057/mod02lec14.mp4">Finite well, Continued                                                                </option>
<option  value="104108057/mod03lec15.mp4">Tunneling -part1                                                                      </option>
<option  value="104108057/mod03lec16.mp4">Tunneling -part2                                                                      </option>
<option  value="104108057/mod03lec17.mp4">Schrodinger equation for Harmonic Oscillator                                          </option>
<option  value="104108057/mod03lec18.mp4">Harmonic Oscillator - The Series Solution                                             </option>
<option  value="104108057/mod03lec19.mp4">Harmonic Oscillator -  Generating function                                            </option>
<option  value="104108057/mod03lec20.mp4">Harmonic Oscillator - Orthogonality of Eigenfunctions                                 </option>
<option  value="104108057/mod04lec21.mp4">Hydrogen Atom: Separating centre of mass motion and integral motion                   </option>
<option  value="104108057/mod04lec22.mp4">Hydrogen Atom: Polar Co-ordinates                                                     </option>
<option  value="104108057/mod04lec23.mp4">Hydrogen atom continued : Separation of variables                                     </option>
<option  value="104108057/mod04lec24.mp4">Hydrogen atom : Finding the functions &Theta; (&theta;) and &Phi;(&phi;)              </option>
<option  value="104108057/mod04lec25.mp4">Finding R(r)                                                                          </option>
<option  value="104108057/mod04lec26.mp4">Atomic Orbitals -Part 1                                                               </option>
<option  value="104108057/mod04lec27.mp4">Atomic Orbitals -Part 2                                                               </option>
<option  value="104108057/mod04lec28.mp4">Atomic Orbitals -Part 3                                                               </option>
<option  value="104108057/mod04lec29.mp4">Atomic Orbitals -Part 4 and Hermitian Operators                                       </option>
<option  value="104108057/mod05lec30.mp4">Measurement, Uncertainty Principle                                                    </option>
<option  value="104108057/mod05lec31.mp4">Generalized Uncertainty Principle                                                     </option>
<option  value="104108057/mod05lec32.mp4">Generalized Uncertainty Principle - Continued                                         </option>
<option  value="104108057/mod05lec33.mp4">Angular Momentum                                                                      </option>
<option  value="104108057/mod05lec34.mp4">Angular Momentum - Continued                                                          </option>
<option  value="104108057/mod05lec35.mp4">Angular Momentum - Continued and Spin                                                 </option>
<option  value="104108057/mod06lec36.mp4">Pertubation Theory                                                                    </option>
<option  value="104108057/mod06lec37.mp4">Pertubation Theory - Continued                                                        </option>
<option  value="104108057/mod06lec38.mp4">Variation Method - Introduction                                                       </option>
<option  value="104108057/mod06lec39.mp4">Variation Method -  Proof and Illustration                                            </option>
<option  value="104108057/mod06lec40.mp4">He atom wave function with spin included -Paulis principle                            </option>
<option  value="104108057/mod07lec41.mp4">Hydrogen Molecular ion - Linear variation method                                      </option>
<option  value="104108057/mod07lec42.mp4">Hydrogen Molecular ion - continued                                                    </option>
<option  value="104108057/mod07lec43.mp4">Hydrogen Molecular ion -continued                                                     </option>
<option  value="104108057/mod07lec44.mp4">Molecuar Orbitals The Hydrogen Molecule                                               </option>
<option  value="104108057/mod07lec45.mp4">MO and VB theory                                                                      </option>
<option  value="104108057/mod07lec46.mp4">MO theory of diatoms                                                                  </option>
<option  value="104108057/mod07lec47.mp4">Di -atomics-continued                                                                 </option>
<option  value="104108057/mod07lec48.mp4">Hybridization Huckel theory                                                           </option>
<option  value="104108057/mod07lec49.mp4">Huckel MO Theory continued                                                            </option>
	</tr>
	</form>
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104108062</strong></td>
	<td><strong>Chemistry and Biochemistry </strong></td>
	<td><strong>Introduction to Organometallic Chemistry</strong></td>
	<td><strong>Prof. A.G. Samuelson</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Bangalore</strong></td>
	<td><select name="type1" id="type1" onchange='this.form.submit();'><option  value="#">Select </option>
<option  value="104108062/mod01lec01.mp4">Introduction to Organometallic chemistry                             </option>
<option  value="104108062/mod02lec02.mp4">Metal carbonyl complexes                                             </option>
<option  value="104108062/mod02lec03.mp4">Metal carbonyls �Part II                                             </option>
<option  value="104108062/mod02lec04.mp4">Ligand substitution reactions                                        </option>
<option  value="104108062/mod02lec05.mp4">Substitutes for carbonyl ligands                                     </option>
<option  value="104108062/mod02lec06.mp4">Carbene complexes                                                    </option>
<option  value="104108062/mod02lec07.mp4">Carbene complexes continued                                          </option>
<option  value="104108062/mod02lec08.mp4">Non-Carbon Ancillary ligands                                         </option>
<option  value="104108062/mod02lec09.mp4">Non-Carbon Ancillary ligands continued                               </option>
<option  value="104108062/mod02lec10.mp4">Metal alkyl complexes                                                </option>
<option  value="104108062/mod02lec11.mp4">Ligand Insertion Reactions                                           </option>
<option  value="104108062/mod03lec12.mp4">Metal alkene complexes                                               </option>
<option  value="104108062/mod03lec13.mp4">Alkynes ?2 bonding                                                   </option>
<option  value="104108062/mod03lec14.mp4">Metal dihydrogen and hydrides                                        </option>
<option  value="104108062/mod03lec15.mp4">Migratory Insertion reaction with alkynes                            </option>
<option  value="104108062/mod03lec16.mp4">&eta;<sup>m</sup>� (m=4 dienes and m=2n,polyenes)                    </option>
<option  value="104108062/mod04lec17.mp4">Oxidative addition & Vaskas complex mechanism                        </option>
<option  value="104108062/mod04lec18.mp4">Reductive elimination                                                </option>
<option  value="104108062/mod04lec19.mp4">Reductive Elimination mechanism                                      </option>
<option  value="104108062/mod04lec20.mp4">Oxidative coupling with C-C bond formation                           </option>
<option  value="104108062/mod04lec21.mp4">Metathesis reactions                                                 </option>
<option  value="104108062/mod05lec22.mp4">Metal-allyls - ? <sup>3</sup> complexes-synthesis,  bonding          </option>
<option  value="104108062/mod05lec23.mp4">Metal-allyls - &eta; <sup>3</sup> complexes-fluxionality, reactivity </option>
<option  value="104108062/mod05lec24.mp4">C-C single bond forming reactions                                    </option>
<option  value="104108062/mod06lec25.mp4">? <sup>5</sup>  Cyclopentadienyl  -  complexes                       </option>
<option  value="104108062/mod06lec26.mp4">&eta;<sup>6</sup>� arene� Metal complexes                            </option>
<option  value="104108062/mod06lec27.mp4">Half sandwich complexes                                              </option>
<option  value="104108062/mod06lec28.mp4">Reactivity changes in coordinated ligands                            </option>
<option  value="104108062/mod07lec29.mp4">The isolobal analogy                                                 </option>
<option  value="104108062/mod07lec30.mp4">Fluxional Properties of Organometallics                              </option>
<option  value="104108062/mod07lec31.mp4">Quantifying Steric and electronic factors                            </option>
<option  value="104108062/mod08lec32.mp4">Hydrogenation reactions                                              </option>
<option  value="104108062/mod08lec33.mp4">Addition of HX to olefins                                            </option>
<option  value="104108062/mod08lec34.mp4">Reactions with CO insertion                                          </option>
<option  value="104108062/mod08lec35.mp4">Organometallics promoted C-X coupling                                </option>
<option  value="104108062/mod08lec36.mp4">Organometallic polymerization                                        </option>
<option  value="104108062/mod08lec37.mp4">C-H activation                                                       </option>
<option  value="104108062/mod09lec38.mp4">Asymmetric Catalysis                                                 </option>
<option  value="104108062/mod09lec39.mp4">Medicinal applications of organometallic complexes                   </option>
<option  value="104108062/mod09lec40.mp4">Special Properties and Applications                                  </option>

	</tr>
	</form>
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>102105034</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>BioChemistry I</strong></td>
	<td><strong>Prof. S. Dasgupta</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
     <option  value="102105034/lec01.mp4">Amino Acids I</option>
 <option  value="102105034/lec02.mp4">Amino Acids II</option>
 <option  value="102105034/lec03.mp4">Protein Structure I</option>
 <option  value="102105034/lec04.mp4">Protein structure II</option>
 <option  value="102105034/lec05.mp4">Protein Structure III</option>
 <option  value="102105034/lec06.mp4">Protein Structure IV</option>
 <option  value="102105034/lec07.mp4">Enzymes I</option>
 <option  value="102105034/lec08.mp4">Enzymes II</option>
 <option  value="102105034/lec09.mp4">Enzymes III</option>
 <option  value="102105034/lec10.mp4">Enzymes Mechanisms I</option>
 <option  value="102105034/lec11.mp4">Enzymes Mechanisms II</option>
 <option  value="102105034/lec12.mp4">Myoglobin and Hemoglobin</option>
 <option  value="102105034/lec13.mp4">Lipids and Membranes I</option>
 <option  value="102105034/lec14.mp4">Lipids and Membranes II</option>
 <option  value="102105034/lec15.mp4">Membrane Transport</option>
 <option  value="102105034/lec16.mp4">Carbohydrates I</option>
 <option  value="102105034/lec17.mp4">Carbohydrates II</option>
 <option  value="102105034/lec18.mp4">Vitamins and Coenzymes I</option>
 <option  value="102105034/lec19.mp4">Vitamins and Coenzymes II</option>
 <option  value="102105034/lec20.mp4">Nucleic Acids I</option>
 <option  value="102105034/lec21.mp4">Nucleic Acids II</option>
 <option  value="102105034/lec22.mp4">Nucleic Acids III</option>
 <option  value="102105034/lec23.mp4">Bioenergetics I</option>
 <option  value="102105034/lec24.mp4">Bioenergetics II</option>
 <option  value="102105034/lec25.mp4">Metabolism I</option>
 <option  value="102105034/lec26.mp4">Metabolism II</option>
 <option  value="102105034/lec27.mp4">Metabolism III</option>
 <option  value="102105034/lec28.mp4">Overview of the Course</option>


          </select></td>
	
	</tr>
	</form>
    
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103019</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Chemistry of Materials</strong></td>
	<td><strong>Dr. M. Queresh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
      
     <option  value="104103019/module1/index.html">Periodic Table - Physical and Chemical Properties of Elements</option>
 <option  value="104103019/module1/lec2/1.html">Introduction to Solid State Chemistry -1</option>
 <option  value="104103019/module1/lec3/1.html">Introduction to Solid State Chemistry – 2</option>
 <option  value="104103019/module1/lec4/1.html">Carbon Chemistry – Physical and Chemical Properties</option>
 <option  value="104103019/module1/lec5/1.html">Graphene: Fundamentals and Applications</option>
 <option  value="104103019/module1/lec6/1.html">Introduction to Nanoscience and Nanotechnology - Metals, Semiconductors</option>
 <option  value="104103019/module1/lec7/1.html">Introduction to Nanoscience and Nanotechnology - Carbon nanotubes, Fullerenes</option>
 <option  value="104103019/module1/lec8/1.html">Applications Of Carbon Nano Tubes</option>
 <option  value="104103019/module1/lec9/1.html">Quantum Dots</option>
 <option  value="104103019/module2/lec10/1.html">Naturally Occurring Nano Systems</option>
 <option  value="104103019/module2/lec11/1.html">Chemistry and Their  Applications</option>
 <option  value="104103019/module2/lec12/1.html">Inorganic Semiconductors -Magnetic Materials – 2</option>
 <option  value="104103019/module2/lec13/1.html">Organic Light Emitting Diodes</option>
 <option  value="104103019/module2/lec14/1.html">Emphasis On Water Red-ox/ Splitting - Part 1</option>
 <option  value="104103019/module2/lec15/1.html">Emphasis On Water Red-Ox/ Splitting Using CdS Based Nano Catalyst - Part 2</option>
 <option  value="104103019/module2/lec16/1.html">Superconducting Materials</option>
 <option  value="104103019/module2/lec17/1.html">Complex Metal Oxides - 1 Perovskites</option>
 <option  value="104103019/module2/lec18/1.html">Introduction to Giant Magneto Resistance and Spintronics</option>
 <option  value="104103019/module3/lec19/1.html">Sol- Gel Science</option>
 <option  value="104103019/module3/lec20/1.html">Microemulsions</option>
 <option  value="104103019/module3/lec21/1.html">Microwave mediated synthesis of materials</option>
 <option  value="104103019/module3/lec22/1.html">Solid-State Synthesis</option>
 <option  value="104103019/module4/lec23/1.html">Pulsed Laser Deposition (PLD)</option>
 <option  value="104103019/module4/lec24/1.html">Molecular Beam Epitaxy</option>
 <option  value="104103019/module4/lec25/1.html">Sputtering Processes for Thin Film Deposition</option>
 <option  value="104103019/module4/lec26/1.html">Chemical Vapor Deposition</option>
 <option  value="104103019/module5/lec27/1.html">Characterization of Powders, Porous Solids and Suspensions - I</option>
 <option  value="104103019/module5/lec28/1.html">Characterization of Powders, Porous Solids and Suspensions - II</option>
 <option  value="104103019/module5/lec29/1.html">Routine Characterization of materials - I</option>
 <option  value="104103019/module5/lec30/1.html">Routine Characterization tools Infrared Spectroscopy</option>
 <option  value="104103019/module5/lec31/1.html">Routine Characterization Tools Nuclear Magnetic Resonance</option>
 <option  value="104103019/module5/lec32/1.html">Powder X - ray Diffraction</option>
 <option  value="104103019/module5/lec33/1.html">Introduction to Electron Microscopy</option>
 <option  value="104103019/module5/lec34/1.html">Scanning Electron Microscopy</option>
 <option  value="104103019/module5/lec35/1.html">Transmission Electron Microscopy</option>
 <option  value="104103019/module5/lec36/1.html">X- Ray Photoelectron Spectroscopy (XPS)</option>
 <option  value="104103019/module5/lec37/1.html">Atomic Force Microscopy</option>
 <option  value="104103019/module5/lec38/1.html">e-Beam Lithography</option>
 <option  value="104103019/module5/lec39/1.html">Scanning Tunneling Microscopy</option>
 <option  value="104103019/module5/lec40/1.html">Fuel Cells – Basic types and Design</option>



          </select></td>
	
	</tr>
	</form>
    
     <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104103020</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Environmental chemistry</strong></td>
	<td><strong>Dr. Chivukula Vasudeva Sastri</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Guwahati</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
 <option  value="104103020/module1/index.html">The Atmosphere of Earth</option>
 <option  value="104103020/module1/lec2/1.html">Principles of Contaminant Behavior</option>
 <option  value="104103020/module1/lec3/1.html">The Greenhouse Effect on Earth</option>
 <option  value="104103020/module1/lec4/1.html">Acid Rain</option>
 <option  value="104103020/module1/lec5/1.html">Ozone Layer Depletion</option>
 <option  value="104103020/module2/lec1/1.html">Carbon Cycle</option>
 <option  value="104103020/module2/lec2/1.html">Nitrogen Cycle</option>
 <option  value="104103020/module2/lec3/1.html">Sulfur Cycle</option>
 <option  value="104103020/module2/lec4/1.html">Organic Pollutants</option>
 <option  value="104103020/module2/lec5/1.html">Pollution from Combustion Systems</option>
 <option  value="104103020/module2/lec6/1.html">Carbon Monoxide formation in atmosphere</option>
 <option  value="104103020/module2/lec7/1.html">Coal Combustion</option>
 <option  value="104103020/module2/lec8/1.html">Photochemical Smog</option>
 <option  value="104103020/module2/lec9/1.html">Indoor Air Pollution</option>
 <option  value="104103020/module3/lec1/1.html">Carbon monoxide</option>
 <option  value="104103020/module3/lec2/1.html">Oxide of Nitrogen</option>
 <option  value="104103020/module3/lec3/1.html">Sulfur Dioxide</option>
 <option  value="104103020/module3/lec4/1.html">Volatile Organic Compounds</option>
 <option  value="104103020/module3/lec5/1.html">Instrumentation techniques to monitor SO2 pollution</option>
 <option  value="104103020/module4/lec1/1.html">Possible Reasons of  Ground and Subsurface  Water  Contamination</option>
 <option  value="104103020/module4/lec2/1.html">Water Pollution Sources</option>
 <option  value="104103020/module4/lec3/1.html">Ground Water Pollution</option>
 <option  value="104103020/module4/lec4/1.html">Ocean Pollution</option>
 <option  value="104103020/module5/lec1/1.html">Eutrophication</option>
 <option  value="104103020/module5/lec2/1.html">Acid Mine Drains</option>
 <option  value="104103020/module5/lec3/1.html">Pesticides and Fertilizers</option>
 <option  value="104103020/module5/lec4/1.html">Dying and Tanning</option>
 <option  value="104103020/module6/lec1/1.html">Introduction</option>
 <option  value="104103020/module6/lec2/1.html">Technological Approach</option>
 <option  value="104103020/module6/lec3/1.html">Chemical degradation of wastes and pollutants</option>
 <option  value="104103020/module6/lec4/1.html">Coagulation and Flocculation</option>
 <option  value="104103020/module6/lec5/1.html">Photocatalytic Degradation of Pollutants</option>
 <option  value="104103020/module6/lec6/1.html">Supercritical Water Oxidation</option>
 <option  value="104103020/module7/lec1/1.html">Soil Around us </option>
 <option  value="104103020/module7/lec2/1.html">Soil Water: Characteristics and Behavior</option>
 <option  value="104103020/module7/lec3/1.html">Soil Erosion</option>
 <option  value="104103020/module7/lec4/1.html">Soils and Pollution</option>
 <option  value="104103020/module7/lec5/1.html">Water Resources, Irrigation and Wetlands</option>
 <option  value="104103020/module7/lec6/1.html">Soil Pollution Management</option>
 <option  value="104103020/module7/lec7/1.html">Nuclear Waste Management</option>
 <option  value="104103020/module7/lec8/1.html">Sewage Treatment: Chemical and Biological Process</option>
 <option  value="104103020/module7/lec9/1.html">Solid Waste Management</option>




          </select></td>
	
	</tr>
	</form>
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104104026</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Mathematics for Chemistry</strong></td>
	<td><strong>Dr. Madhav Ranganathan Dr. P.P. Thankachan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kanpur IIT Roorkee</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
  <option  value="104104026/Lecture-01.mp4">Lecture-01-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-02.mp4">Lecture-02-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-03.mp4">Lecture-03-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-04.mp4">Lecture-04-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-05.mp4">Lecture-05-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-06.mp4">Lecture-06-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-07.mp4">Lecture-07-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-08.mp4">Lecture-08-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-09.mp4">Lecture-09-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-10.mp4">Lecture-10-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-11.mp4">Lecture-11-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-12.mp4">Lecture-12-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-13.mp4">Lecture-13-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-14.mp4">Lecture-14-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-15.mp4">Lecture-15-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-16.mp4">Lecture-16-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-17.mp4">Lecture-17-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-18.mp4">Lecture-18-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-19.mp4">Lecture-19-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-20.mp4">Lecture-20-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-21.mp4">Lecture-21-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-22.mp4">Lecture-22-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-23.mp4">Lecture-23-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-24.mp4">Lecture-24-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-25.mp4">Lecture-25-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-26.mp4">Lecture-26-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-27.mp4">Lecture-27-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-28.mp4">Lecture-28-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-29.mp4">Lecture-29-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-30.mp4">Lecture-30-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-31.mp4">Lecture-31-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-32.mp4">Lecture-32-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-33.mp4">Lecture-33-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-34.mp4">Lecture-34-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-35.mp4">Lecture-35-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-36.mp4">Lecture-36-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-37.mp4">Lecture-37-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-38.mp4">Lecture-38-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-39.mp4">Lecture-39-Mathematics for Chemistry</option>
 <option  value="104104026/Lecture-40.mp4">Lecture-40-Mathematics for Chemistry</option>




          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104105039</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Polymer Chemistry</strong></td>
	<td><strong>Dr. D. Dhara</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
 <option  value="104105039/mod01lec01.mp4">Introduction to Polymers</option>
 <option  value="104105039/mod01lec02.mp4">Introduction to Polymers (Contd.)</option>
 <option  value="104105039/mod01lec03.mp4">Introduction to Polymers  (Contd.)</option>
 <option  value="104105039/mod01lec04.mp4">Step - growth Polymerization</option>
 <option  value="104105039/mod01lec05.mp4">Step - growth Polymerization (Contd.)</option>
 <option  value="104105039/mod01lec06.mp4">Step - growth Polymerization (Contd. )</option>
 <option  value="104105039/mod01lec07.mp4">Step - growth Polymerization ( Contd. )</option>
 <option  value="104105039/mod01lec08.mp4">Step - growth  Polymerization (Contd. )</option>
 <option  value="104105039/mod01lec09.mp4">Radical Chain Polymerization</option>
 <option  value="104105039/mod01lec10.mp4">Radical Chain Polymerization (Contd.)</option>
 <option  value="104105039/mod01lec11.mp4">Radical Chain Polymerization (Contd. )</option>
 <option  value="104105039/mod01lec12.mp4">Radical Chain Polymerization  (Contd. )</option>
 <option  value="104105039/mod01lec13.mp4">Radical Chain Polymerization   (Contd.)</option>
 <option  value="104105039/mod01lec14.mp4">Radical Chain Polymerization    (Contd.)</option>
 <option  value="104105039/mod01lec15.mp4">Radical Chain  Polymerization  (Contd.)</option>
 <option  value="104105039/mod01lec16.mp4">Radical  Chain  Polymerization  (Contd.)</option>
 <option  value="104105039/mod01lec17.mp4">Ionic Chain Polymerization</option>
 <option  value="104105039/mod01lec18.mp4">Ionic Chain Polymerization (Contd.)</option>
 <option  value="104105039/mod01lec19.mp4">Ionic Chain Polymerization (Contd.) and Chain Copolymerization</option>
 <option  value="104105039/mod01lec20.mp4">Chain Copolymerization (Contd.)</option>
 <option  value="104105039/mod01lec21.mp4">Chain Copolymerization (Contd. )</option>
 <option  value="104105039/mod01lec22.mp4">Chain Copolymerization (Contd.) and Ring Opening Polymerization</option>
 <option  value="104105039/mod01lec23.mp4">Polymer Stereochemistry and Coordination Polymerization</option>
 <option  value="104105039/mod01lec24.mp4">Polymer Stereochemistry and Coordination Polymerization (Contd.)</option>
 <option  value="104105039/mod01lec25.mp4">Polymer Solutions</option>
 <option  value="104105039/mod01lec26.mp4">Polymer Solutions (Contd.)</option>
 <option  value="104105039/mod01lec27.mp4">Polymer Solutions  (Contd.)</option>
 <option  value="104105039/mod01lec28.mp4">Polymer Solutions (Contd.) and Chain Dimensions </option>
 <option  value="104105039/mod01lec29.mp4">Chain Dimensions (Contd.) and Frictional Properties of Solution</option>
 <option  value="104105039/mod01lec30.mp4">Frictional Properties of Solutions (Contd.) and Determination of Molecular Weight</option>
 <option  value="104105039/mod01lec31.mp4">Determination of Molecular Weight of Polymers (Contd.)</option>
 <option  value="104105039/mod01lec32.mp4">Determination of Molecular Weight of Polymers  (Contd.)</option>
 <option  value="104105039/mod01lec33.mp4">Determination of Molecular Weight of  Polymers (Contd.)</option>
 <option  value="104105039/mod01lec34.mp4">Structural Analysis of Polymers by Spectroscopic Methods</option>
 <option  value="104105039/mod01lec35.mp4">Amorphous and Crystalline State : Tg and Tm</option>
 <option  value="104105039/mod01lec36.mp4">Amorphous and Crystalline State : Tg and Tm (Contd.)</option>
 <option  value="104105039/mod01lec37.mp4">Polymer Properties and Evaluation : Mechanical Properties</option>
 <option  value="104105039/mod01lec38.mp4">Polymer Properties and Evaluation : Mechanical Properties (Contd.) and Other Properties</option>
 <option  value="104105039/mod01lec39.mp4">Other Properties (Contd.) and Polymer Additives</option>
 <option  value="104105039/mod01lec40.mp4">Polymer Additives (Contd.)</option>
 <option  value="104105039/mod01lec41.mp4">Polymer Additives (Contd.), Blends, Concluding Remarks</option>





          </select></td>
	
	</tr>
	</form>
    
    
    <form name="jk123" action="displayweb.html" method="get" target="_blank">
	<tr>
	<td><strong>104105071</strong></td>
	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Organic Chemistry and Pericyclic Reactions</strong></td>
	<td><strong>Dr. N.D. Pradeep Singh</strong></td>
	<td><strong>Web</strong></td>
	<td><strong>IIT Kharagpur</strong></td>
	<td><select name="type1" id="type1" onchange="this.form.submit();">
      <option  value="#">Select </option>
  <option  value="104105071/Mod1l1.pdf">Photochemistry of Carbonyl Compounds </option>
 <option  value="104105071/Mod1l2.pdf">Photochemistry of Carbonyl Compounds (Contd.) </option>
 <option  value="104105071/Mod1l3.pdf">Photochemistry of Carbonyl Compounds  (Contd.)</option>
 <option  value="104105071/Mod1l4.pdf">Photochemistry of Carbonyl  Compounds (Contd.) </option>
 <option  value="104105071/Mod2l5.pdf">? hydrogen abstraction </option>
 <option  value="104105071/Mod2l6.pdf">? hydrogen abstraction (Contd.) </option>
 <option  value="104105071/Mod2l7.pdf">? hydrogen abstraction   (Contd.) </option>
 <option  value="104105071/Mod3l8.pdf">Photochemistry of pi pi star system</option>
 <option  value="104105071/Mod3l9.pdf">Photochemistry of pi pi star system (Contd.)</option>
 <option  value="104105071/Mod3l10.pdf">Photochemistry of pi pi star system (Contd. )</option>
 <option  value="104105071/Mod4l11.pdf">Photochemistry of Enones and dienones </option>
 <option  value="104105071/Mod4l12.pdf">Photochemistry of Enones and dienones (Contd.) </option>
 <option  value="104105071/Mod5l13.pdf">Photochemical oxidation - singlet oxygen</option>
 <option  value="104105071/Mod5l14.pdf"> Photochemical oxidation - singlet oxygen (Contd.) </option>
 <option  value="104105071/Mod6l15.pdf">Pericyclic Reactions </option>
 <option  value="104105071/Mod6l16.pdf">Pericyclic Reactions (Contd.) </option>
 <option  value="104105071/Mod7l17.pdf">Electrocyclic Reactions </option>
 <option  value="104105071/Mod7l18.pdf">Electrocyclic Reactions (Contd.) </option>
 <option  value="104105071/Mod7l19.pdf">Electrocyclic Reactions  (Contd.) </option>
 <option  value="104105071/Mod8l20.pdf">Sigmatropic Reactions</option>
 <option  value="104105071/Mod8l21.pdf">Sigmatropic Reactions (Contd.)</option>
 <option  value="104105071/Mod8l22.pdf">Sigmatropic Reactions  (Contd.)</option>
 <option  value="104105071/Mod8l23.pdf">Sigmatropic Reactions   (Contd.)</option>
 <option  value="104105071/Mod9l24.pdf">Cycloaddition Reaction</option>
 <option  value="104105071/Mod9l25.pdf">Cycloaddition Reaction (Contd.) </option>
 <option  value="104105071/Mod9l26.pdf">Cycloaddition Reaction   (Contd.) </option>
 <option  value="104105071/Mod9l27.pdf">Cycloaddition Reaction ( Contd.) </option>
 <option  value="104105071/Mod9l28.pdf">Cycloaddition Reaction  (Contd.) </option>
 <option  value="104105071/Mod9l29.pdf">Cycloaddition Reaction (Contd. ) </option>
 <option  value="104105071/Mod9l30.pdf">Cycloaddition Reaction ( Contd. ) </option>
 <option  value="104105071/Mod9l31.pdf">Cycloaddition  Reaction  (Contd.) </option>
 <option  value="104105071/Mod9l32.pdf">Cycloaddition  Reaction  ( Contd.) </option>
 <option  value="104105071/Mod10l33.pdf">Group transfer reaction Ene Reaction or Alder-Ene Reaction</option>
 <option  value="104105071/Mod10l34.pdf">Group transfer reaction Ene Reaction or Alder-Ene Reaction (Contd.)</option>
 <option  value="104105071/Mod11l35.pdf">Practice problems</option>
 <option  value="104105071/Mod11l36.pdf">Practice problems (Contd.) </option>
 <option  value="104105071/Mod11l37.pdf">Practice problems   (Contd.) </option>
 <option  value="104105071/Mod11l38.pdf">Practice problems ( Contd. ) </option>

 <option  value="104105071/Mod11l39.pdf">Practice problems  ( Contd.) </option>
 <option  value="104105071/Mod11l40.pdf">Practice  problems (Contd. ) </option>






          </select></td>
	
	</tr>
	</form>
    
    
    
    
    
    
    
    
    
    
    <form name="jk123" action="displayvideo.html" method="get" target="_blank">
	<tr>
	<td><strong>104108056</strong></td>

	<td><strong>Chemistry and Biochemistry</strong></td>
	<td><strong>Eukaryotic Gene Expression - basics and benefits</strong></td>
	<td><strong>Prof. P.N. Rangarajan</strong></td>
	<td><strong>Video</strong></td>
	<td><strong>IISc Bangalore</strong></td>
	<td>    <select name="type1" id="type1" onchange='this.form.submit();'>
    <option  value="#">Select </option>
      
      <option  value="104108056/mod01lec01.mp4">Eukaryotic RNA polymerases and basal transcription factors</option>
      
      <option  value="104108056/mod01lec02.mp4">Diversity in core promoter elements</option>
      
      <option  value="104108056/mod01lec03.mp4">Diversity in general transcription factors</option>
      
      <option  value="104108056/mod01lec04.mp4">Proximal & Distal Promoter Elements, Enhancers and Silencers,  Gene-specific Regulators</option>
      
      <option  value="104108056/mod02lec05.mp4">Transcription factors - DNA binding domains</option>

      
      <option  value="104108056/mod02lec06.mp4">Transcription factors - transcription activation domain</option>
      
      <option  value="104108056/mod03lec07.mp4">Role of chromatin in eukaryotic gene regulation</option>
      
      <option  value="104108056/mod03lec08.mp4">Role of histones in eukaryotic gene regulation </option>
      
      <option  value="104108056/mod03lec09.mp4">Role of DNA methylation in eukaryotic gene regulation</option>
      
      <option  value="104108056/mod03lec10.mp4">Chromatin remodelling & gene regulation</option>
      
      <option  value="104108056/mod04lec11.mp4">mRNA processing - Role of RNA Pol II in mRNA capping  and mRNA splicing</option>

      
      <option  value="104108056/mod04lec12.mp4">mRNA processing - Role of RNA Pol II in polyadenylation & mRNA 

editing</option>
      
      <option  value="104108056/mod04lec13.mp4">Regulation of RNA Pol I transcription</option>
      
      <option  value="104108056/mod04lec14.mp4">Regulation of RNA Pol III transcription </option>
      
      <option  value="104108056/mod05lec15.mp4">Signal Transduction Pathways - Introduction</option>
      
      <option  value="104108056/mod05lec16.mp4">Regulation of gene expression by cyclicAMP</option>
      
      <option  value="104108056/mod05lec17.mp4">Regulation of gene expression by second messengers other than cAMP</option>

      
      <option  value="104108056/mod05lec18.mp4">Regulation of gene expression by Protein Kinase C</option>
      
      <option  value="104108056/mod05lec19.mp4">Regulation of gene expression by Growth factors</option>
      
      <option  value="104108056/mod05lec20.mp4">Regulation of gene expression by cytokines</option>
      
      <option  value="104108056/mod06lec21.mp4">Regulation of gene expression by steroid hormones</option>
      
      <option  value="104108056/mod06lec22.mp4">Regulation of gene expression by type II nuclear receptors</option>
      
      <option  value="104108056/mod06lec23.mp4">Mechanism of transcriptional activation by nuclear receptors</option>

      
      <option  value="104108056/mod07lec24.mp4">Gene Regulation during Drosophila Development</option>
      
      <option  value="104108056/mod07lec25.mp4">Signal transduction pathways involved in embryonic development</option>
      
      <option  value="104108056/mod07lec26.mp4">Homeotic genes</option>
      
      <option  value="104108056/mod07lec27.mp4">Epigenetic regulation of gene expression during development</option>
      
      <option  value="104108056/mod07lec28.mp4">Embryonic stem cells and Transcription factor-mediated epigenetic reprogramming</option>
      
      <option  value="104108056/mod08lec29.mp4">Cloning and Expression vectors</option>

      
      <option  value="104108056/mod08lec30.mp4">Eukaryotic protein expression systems - I</option>
      
      <option  value="104108056/mmod08lec31.mp4">Eukaryotic protein expression systems - II</option>
      
      <option  value="104108056/mod08lec32.mp4">Eukaryotic protein expression systems - III: Gene expression in 

mammalian cells using viral vectors</option>
      
      <option  value="104108056/mod09lec33.mp4">Human Gene Therapy </option>
      
      <option  value="104108056/mod09lec34.mp4">DNA vaccines</option>
      
      <option  value="104108056/mod09lec35.mp4">Transgenic animals </option>

      
      <option  value="104108056/mod09lec36.mp4">Transgenic plants </option>
      
      <option  value="104108056/mod09lec37.mp4">Knockout mice </option>
      
      <option  value="104108056/mod10lec38.mp4">Regulation of Eukaryotic Gene Expression by Small RNAs (RNA Interference, RNAi)</option>
      
      <option  value="104108056/mod10lec39.mp4">Genomics & Proteomics</option>
      
      <option  value="104108056/mod10lec40.mp4">Metabolic Engineering & Synthetic Biology </option>

          </select></td>

	
	</tr>
	</form>

<form name="jk123" action="displayvideo.html" method="get" target="_blank">
    <tr>
      <td><strong>104106072</strong></td>
      <td><strong>Chemistry and Biochemistry</strong></td>
      <td><strong>NOC:Chemistry - I</strong></td>
      <td><strong>Prof. K. Mangala Sunder</strong></td>
      <td><strong>Video</strong></td>
      <td><strong>IIT Madras</strong></td>
      <td> 
        <select name="type1" id="type1" onchange='this.form.submit();'>
          <option  value="#">Select</option>
          <option  value="104106072/mod01lec01.mp4">Lecture-01</option>
          <option  value="104106072/mod01lec02.mp4">Lecture-02</option>
          <option  value="104106072/mod02lec03.mp4">Lecture-03 Part I</option>
          <option  value="104106072/mod02lec04.mp4">Lecture-03 Part II</option>
          <option  value="104106072/mod02lec05.mp4">Lecture-04 Part I</option>
          <option  value="104106072/mod02lec06.mp4">Lecture-04 Part II</option>
          <option  value="104106072/mod02lec07.mp4">Lecture-04 Part III</option>
          <option  value="104106072/mod03lec08.mp4">Lecture-05 Part I</option>
          <option  value="104106072/mod03lec09.mp4">Lecture-05 Part II</option>
          <option  value="104106072/mod03lec10.mp4">Lecture-05 Part III</option>
          <option  value="104106072/mod03lec11.mp4">Lecture-05 Part IV</option>
          <option  value="104106072/mod03lec12.mp4">Lecture-05 Part V</option>
          <option  value="104106072/mod04lec13.mp4">Lecture-06 Part I</option>
          <option  value="104106072/mod04lec14.mp4">Lecture-06 Part II</option>
          <option  value="104106072/mod04lec15.mp4">Lecture-06 Part III</option>
          <option  value="104106072/mod04lec16.mp4">Lecture-06 Part IV</option>
          <option  value="104106072/mod05lec17.mp4">Lecture-07 Part I</option>
          <option  value="104106072/mod05lec18.mp4">Lecture-07 Part II</option>
          <option  value="104106072/mod05lec19.mp4">Lecture-08 Part I</option>
          <option  value="104106072/mod05lec20.mp4">Lecture-08 Part II</option>
          <option  value="104106072/mod05lec21.mp4">Lecture-08 Part III</option>
          <option  value="104106072/mod06lec22.mp4">Lecture-09 Part I</option>
          <option  value="104106072/mod06lec23.mp4">Lecture-09 Part II</option>
          <option  value="104106072/mod06lec24.mp4">Lecture-09 Part III</option>
          <option  value="104106072/mod06lec25.mp4">Lecture - 10</option>
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
