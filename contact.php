
<!DOCTYPE html>
<html lang="en">	
<head>
	<title>Home | Techademics</title>
	<meta name="theme-color" content="#42bcf4">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta charset="utf-8"> 
	 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="gen.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		@import 'https://fonts.googleapis.com/css?family=Baloo+Bhai|Roboto+Condensed';
	die();
	</style>
	<script>
	$(document).ready(function(){
	<?PHP
if($_GET['submit']=='true'){
	
	$con = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$usernameo=explode('.', $_POST['userid']);
		if($usernameo[0]=='s'){
			$work=1;
			//student
			$sql = "SELECT * FROM `stud` where (`id`=".$usernameo[1].") AND (`pwd`='".$_POST['pswd']."')";
			//echo 'window.location="student/";});</script></head></html>'
			// exit();
		}elseif($usernameo[0]=='t'){
			$work=1;
			$sql = "SELECT * FROM `teachr` where (`id`=".$usernameo[1].") AND (`pwd`='".$_POST['pswd']."')";
			//redirect to teacher
			// echo 'window.location="student/";});</script></head></html>'
			// exit();
		}elseif($usernameo[0]=='p'){
			$work=1;
			//redirect to parent
			
			$sql = "SELECT * FROM `parent` where (`id`=".$usernameo[1].") AND (`pwd`='".$_POST['pswd']."')";
			// echo 'window.location="student/";});</script></head></html>'
			// exit();
		} else{
			$work=0;
			echo'$("#error_wrap").fadeIn();';
  			echo'$("#error").text("Invalid1");';
		}


	if($work==1){

if ($result=mysqli_query($con,$sql))
  { while ($row=mysqli_fetch_row($result)){$_SESSION['name']=$row[1];}
  $num_rows = mysqli_num_rows($result);
  if($num_rows>0){
  	if($usernameo[0]=='s'){
			echo 'window.location="student/";});</script></head></html>';
			$_SESSION['usr']=$_POST['userid'];

  			exit();
		}elseif($usernameo[0]=='t'){
			echo 'window.location="teacher/";});</script></head></html>';
			$_SESSION['usr']=$_POST['userid'];
  			exit();
		}elseif($usernameo[0]=='p'){
			echo 'window.location="parent/";});</script></head></html>';
			$_SESSION['usr']=$_POST['userid'];
  			exit();
		}  else{echo'alert("unhandled exception!");';
		}
  	
  }else{
  	echo'$("#error_wrap").fadeIn();';
  	echo'$("#error").text("Invalid");';
  	
  }

  mysqli_free_result($result);
}

mysqli_close($con);
	}
}
?>
	
    	$(".goto").click(function(){
    		var string = $(this).attr('data').split(',') ;
        	var type= string[0];
        	var uri= string[1];
        	if(type==0){
				window.location=uri;
        	} else if(type==1){
        		window.open(uri,'_blank');
        	}
        	
    	});
	});
	
</script>
</head>

<body>
<div id="php" >
	<?PHP
// 		include('gen.php');
// 	if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }
// 	//$_SESSION['usr'];
// 	if(!isset($_GET['submit'])){$_GET['submit']='';}
// 	if(isset($_SESSION['usr'])){
// 	if($_SESSION['usr']!='' || $_SESSION['usr']!=null){
// 		$sessionarr=explode('.', $_SESSION['usr']);
// 		if($sessionarr[0]=='s'){
// 			//redirect to student
// 			header("Location: student/");
// 			exit();
// 		}elseif($sessionarr[0]=='t'){
// 			//redirect to teacher
// 			header("Location: teacher/");
// 			exit();
// 		}elseif($sessionarr[0]=='p'){
// 			//redirect to parent
// 			header("Location: parent/");
// 			exit();
// 		}
		
// 	}
// }
?>
</div>
<div class="fixed-top">
  <header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
            <ul class="social-network">
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
              <li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>

        </div>
      </div>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear" >
    <div class="container" >
      <a class="navbar-brand" href="index.php" style="text-transform: uppercase; font-size:35px;  "> Techademics</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav ml-auto" style="float: right;">

          <li class="nav-item active" style="margin-top:10px; margin-right:10px;">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item active" style="margin-top:10px; margin-right:10px;" >
            <a class="nav-link" href="about.php">About</a>
          </li>

         <li class="nav-item active" style="margin-top:10px; margin-right:10px;">
            <a class="nav-link" href="help.php">Contact Us</a>
          </li>

        
        </ul>
      </div>
    </div>
  </nav>
</div>


<br><br>
<div class="container-fluid" style="background:black; opacity:0.60;">
<h1 style="color:white; text-align:center; text-transform:uppercase;">Contact Us at:</h1>

<p style="color:white; text-align:center; font-size:25px;"> </p>
</div>
<br>
<div class="container">
<div class="row">
<div class="col-md-6">
<div class="container-fluid" style="background:white; opacity:0.60;">
<center>
<i class="material-icons" style="font-size:100px; ">email</i>
<h2>Queries</h2>
   <a href="mailto:educationtechademics@gmail.com" target="_blank"> <h2>educationtechademics@gmail.com</h2></a>
</center>
</div>
</div>
<div class="col-md-6">
<div class="container-fluid" style="background:white; opacity:0.60;">
<center>
<i class="material-icons" style="font-size:100px;">call</i>
<h2>Techademics Mon-Sat</h2>
<h2>+91-7988587806</h2>
</center>

</div>

</div>
</div>
<br>
    <div class="container">
     <div class="row">
      <div class="col-md-12">
	  
       <center>
	   <div class="container-fluid" style="background:black; opacity:0.60; width: 50%;">
	   <h2 style="color:white; text-align:center; text-transform:uppercase; ">Admin </h2>
	   <i class="material-icons" style="font-size:100px; color: white;" >email</i>
       
   <a href="mailto:educationtechademics@gmail.com" target="_blank"> <h2 style="color:white">admin@techademics.com</h2></a>
	   </center>
	   </div>
	   </div>
	   </div>
	   </div>
          <br><br>
          <br><br>
	<!-- Footer -->

</body>
</html>