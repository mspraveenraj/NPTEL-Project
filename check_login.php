<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    //echo "Alredy Logged in as " . $_SESSION['myusername'] . "!  Please Logout Session..";
	echo "<script type='text/javascript'>alert('Alredy Logged in as  ". $_SESSION['myusername'] ." !');</script>";
//	session_destroy();
} 
else{
$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="test"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

//session_start();
//if(!IsSet($_SESSION['myusername']) ==$myusername)
  //  {
       
	//   echo "<script type='text/javascript'>alert('Already Logged in...!');</script>";
		//exit;
    
	//} 

	//$_SESSION['myusername'] = $myusername;
//echo '<a href="logout1.php?myusername='.$myusername.'">check</a>';
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and
password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($myusername=="my"){
header("location:my.html");
exit;
} 
elseif($count==1){
	
//session_register("$myusername");
//$_SESSION['login_user'] = $myusername;
//session_destroy("mypassword");
session_start();
$_SESSION['loggedin']=true;
$_SESSION['myusername'] = $myusername;
//header("location:fake.php");
$sql_2 = "UPDATE $tbl_name set login_time=CURTIME() WHERE username='$myusername'";
        mysql_query($sql_2) or die('sql2: '.mysql_error()); 
header("location:index1.php");
exit;
}
else{ 
echo "<script type='text/javascript'>alert('Wrong Username or Password!');</script>";}
//echo "Wrong Username or Password";
//<button onclick="myFunction()">Try it</button>
//<script>
//function myFunction() {
  //  alert("Wrong Username or Password!");
//}
//</script>
}

//function destroy()
//{
//$sql_3 = "UPDATE $tbl_name set logout_time=CURTIME() WHERE username='$myusername'";
  //      mysql_query($sql_3) or die('sql3: '.mysql_error());
//header("location:index.php");
//}
?>
<html>
<body>
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