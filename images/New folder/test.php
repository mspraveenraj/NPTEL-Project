
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
    
	header("location:index.php");
	

} 
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NPTEL - Web and Video Courses</title>
<head>
<style type="text/css">
#linked
{
	color:#000;
	text-decoration:none;
}



table { 
  width: 100%; 
    display: table;
    border-collapse: separate;
    border-spacing: 8px;
    border-color: light-blue;
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
	padding-top:5px;
	padding-bottom:5px;
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
<img src="image12345.png"></div>
  <div id="right" style="float: right">
<a href="logout.php" class="button">Logout</a>

</div>

<br />
<br /><br/>
<hr>

<div align="center"><p style="font-size:21px; font-family:'Times New Roman', Times, serif; font-weight:bold; text-decoration:underline;">Discipline-Wise Listing</p></div>
</br>
	</br>
	</br>
	
<table width="100%" border="2" width="100%" cellpadding="20" cellspacing="20">

  <tr>

    <td><a  href="aer1.html" id="linked" target="_blank" >Aerospace Engineering</a></td>

    <td><a  href="atmospheric.html" id="linked" target="_blank">Atmospheric Science</a></td>

    <td><a href="New folder/NPTEL/NPTEL Index/basic_courses.html" id="linked" target="_blank">Basic courses(Sem 1 and 2)</a></td>

    <td><a href="biotech.html" id="linked" target="_blank">Biotechnology</a></td>

  </tr>

  <tr>

    

    <td><a href="New folder/NPTEL/NPTEL Index/chemical.html" id="linked" target="_blank">Chemical Engineering</a></td>

    <td><a href="chem_bioichem.html" id="linked" target="_blank">Chemistry and Biochemistry</a></td>

    <td><a href="civil.html" id="linked" target="_blank">Civil Engineering</a></td>

    <td><a  href="New folder/NPTEL/NPTEL Index/css.html" id="linked" target="_blank">Computer Science and Engineering</a></td>

  </tr>

  <tr>

    

    <td><a href="electrical.html" id="linked" target="_blank">Electrical Engineering</a></td>

    <td><a href="New folder/NPTEL/NPTEL Index/ece.html" id="linked" target="_blank">Electronics & Communication Engineering</a></td>

    <td><a href="New folder/NPTEL/NPTEL Index/engg_design.html" id="linked" target="_blank">Engineering Design</a></td>

     <td><a href="enviorm.html" id="linked" target="_blank">Environmental Science </a></td>

  </tr>

  <tr>

   

    <td><a href="general.html" id="linked" target="_blank">General</a></td>

    <td><a href="HSS.html" id="linked" target="_blank">Humanities and Social Sciences</a></td>

    <td><a href="New folder/NPTEL/NPTEL Index/management.html" id="linked" target="_blank">Management</a></td>

     <td><a href="maths.html" id="linked" target="_blank">Mathematics</a></td>

  </tr>

  <tr>

   

    <td><a href="mechanical.html" id="linked" target="_blank">Mechanical Engineering</a></td>

    <td><a href="metallurgy.html" id="linked" target="_blank">Metallurgy and Material Science </a></td>

    <td><a href="New folder/NPTEL/NPTEL Index/mining.html" id="linked" target="_blank">Mining Engineering</a></td>

     <td><a href="nano.html" id="linked" target="_blank">Nanotechnology</a></td>

  </tr>

  <tr>

   

    <td><a href="ocean.html" id="linked" target="_blank">Ocean Engineering</a></td>

    <td><a href="physics.html" id="linked" target="_blank">Physics</a></td>

    <td><a href="textile.html" id="linked" target="_blank">Textile Engineering </a></td>

  </tr>




</table>

   <style>ul{
	   
	   
	   a:hover{
			background-color: blue;
		}
       </style>
	   
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
    
    </div>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br></br></br></br>
	
	<hr><center><font size="4" color="red">DEVELOPED BY </font><font size="4" color="green"><b>- Dhanush.N,  Praveenraj.M.S,  Surendran.N,  Prem Kumar.M,  Induja.M,  Keerthana.K - CSE 3rd YEAR - BATCH 2014 - 2018<b></font></center></hr>
	<hr></hr>
	</br>
</body>
</html>