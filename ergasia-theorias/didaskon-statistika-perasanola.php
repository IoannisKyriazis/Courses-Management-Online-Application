<?php  
include "didaskon-elegxos.php";
				include "syndesh-geniki.php";
				include "functions.php";
	
    $select1= "select didaskon.eponimo_didaskonta,didaskon.onoma_didaskonta,count(dilosi.katastasi) as perastikan from dilosi,didaskalia,didaskon,omadaxrhsth_me_didaskonta,omadaxrhsth where dilosi.id_didaskalias=didaskalia.id_didaskalias and didaskalia.id_didaskonta=didaskon.id_didaskonta and omadaxrhsth_me_didaskonta.id_didaskonta=didaskon.id_didaskonta and omadaxrhsth_me_didaskonta.username=omadaxrhsth.username and omadaxrhsth.username='dimitris-didaskon-03' and dilosi.katastasi='ΕΠΙΤΥΧΙΑ'";
	$sql1 = mysqli_query($link,$select1);
    $row1 = mysqli_fetch_assoc($sql1);
	$perastikan1=intval(($row1['perastikan']));
	
	
	$select2= "select didaskon.eponimo_didaskonta,didaskon.onoma_didaskonta,count(dilosi.katastasi) as den_perastikan from dilosi,didaskalia,didaskon,omadaxrhsth_me_didaskonta,omadaxrhsth where dilosi.id_didaskalias=didaskalia.id_didaskalias and didaskalia.id_didaskonta=didaskon.id_didaskonta and omadaxrhsth_me_didaskonta.id_didaskonta=didaskon.id_didaskonta and omadaxrhsth_me_didaskonta.username=omadaxrhsth.username and omadaxrhsth.username='dimitris-didaskon-03' and dilosi.katastasi='ΑΠΟΤΥΧΙΑ'";
	$sql2 = mysqli_query($link,$select2);
    $row2 = mysqli_fetch_assoc($sql2);
	$perastikan2=intval(($row2['den_perastikan']));
	
	?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>I.C.S.D. | Περιβάλλον Διδάσκοντα</title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="style.css"/>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
	  
	  
	<style>
	.symvolo-menu {
  width: 25px;
  height: 3px;
  background-color: white;
  margin: 6px 0;
  margin-left: 20px;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #343a40;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.ena a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.ena a:hover {
  color: #f1f1f1;
  background-color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	</style>
		
		
</head>

<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- logotypo -->
  
  <span class="" style="font-size:25px; cursor:pointer;" onclick="openNav()"><div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div>
																			<div class="symvolo-menu"></div></span>
  
  <a class="navbar-brand ml-5" href="didaskon-arxiki.php">
	<img <img src="photos/foto_panepistimiou.png" width="30" height="30" alt="">
  </a>

<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target" style="border:none;">
		<span><div class="symvolo-menu"></div>
				<div class="symvolo-menu"></div>
				<div class="symvolo-menu"></div></span>
	</button>
	
  <!-- menu -->
  <div class="collapse navbar-collapse" id="collapse_target">
  <ul class="navbar-nav text-center w-100 justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="didaskon-arxiki.php">Αρχική</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="didaskon-mathimata.php">Μαθήματα</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="didaskon-plirofories.php">Πληροφορίες</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="didaskon-epikoinonia.php">Επικοινωνία</a>
    </li>
  </ul>
  
  <ul class="nav navbar-nav ml-auto">
      <a href="logout.php" class="btn btn-danger mx-auto">
          <span class="glyphicon glyphicon-log-out"></span> Αποσύνδεση
		</a>
    </ul>
	</div>
</nav>


<nav class="nav text-dark bg-light py-2" name="navigation-menu">
	<ul class="nav pl-4">
		<li class="nav-item">
			<a href="didaskon-arxiki.php" class="text-muted text-decoration-none small">Αρχική</a>
		</li>
		
		<li class="nav-item">
			<a class="text-muted text-decoration-none small">&nbsp;>&nbsp;</a>
		</li>
		
		<li class="nav-item active">
			<a class="text-dark text-decoration-none small">Ποσοστά φοιτητών που πέρασαν ή δεν πέρασαν όλα τα ανατιθέμενα μαθήματα του διδάσκοντος (σε όλα τα έτη)</a>
		</li>
	</ul>
</nav>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="mt-5"></div>
  <li class="ena">
  <a href="didaskon-eisagogivathologias.php">Εισαγωγή / Τροποποίηση Βαθμολογίας</a>
  <a href="didaskon-eksagogivathmologias.php">Εμφάνιση / Εξαγωγή Βαθμολογίας</a>
  <a href="didaskon-eksagogifoititwn.php">Εξαγωγή Λίστας Φοιτητών</a>
  <a href="didaskon-statistika-arithmosanatethimenwn.php" style="background-color:black;">Στατιστικά</a>
  <a href="didaskon-profile.php">Προφίλ</a>
  </li>
</div>

<body>



<div class="container-fluid">
	<h3 class="mt-4">Στατιστικά Διδάσκοντα, <?php echo $row1['onoma_didaskonta']; ?> <?php echo $row1['eponimo_didaskonta']; ?></h3>
	<div class="grammikatoapotitlo"></div>
	<div style="padding-top:50px;"></div>
	<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 mt-2">
				
				
				<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="didaskon-statistika-arithmosanatethimenwn.php">Αριθμός ανατιθέμενων μαθημάτων ανά έτος</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="didaskon-statistika-perasan-1.php">Ποσοστά φοιτητών που πέρασαν ή δεν πέρασαν ένα ανατιθέμενο μάθημα για συγκεκριμένο έτος και εξάμηνο</a>
    </li>
	<li class="nav-item active">
      <a class="nav-link" href="didaskon-statistika-perasanola.php">Ποσοστά φοιτητών που πέρασαν ή δεν πέρασαν όλα τα ανατιθέμενα μαθήματα του διδάσκοντος (σε όλα τα έτη)</a>
    </li>
  </ul>
</nav>

<div style="padding-top:50px;"></div>
	
				<div class="text-center"><h3>Ο συνολικός αριθμός φοιτητών που ΕΧΟΥΝ περάσει τα μαθήματά σας από όλα τα έτη και εξάμηνα, είναι:<br><br><h1 style="color:red;"><?php echo $row1['perastikan']; ?> (<?php print (($perastikan1/($perastikan1+$perastikan2))*100); ?>%)</h1></h3></div>
				
				<div style="padding-top:50px;"></div>
				
				<div class="text-center"><h3>Ο συνολικός αριθμός φοιτητών που ΔΕΝ ΕΧΟΥΝ περάσει τα μαθήματά σας από όλα τα έτη και εξάμηνα, είναι:<br><br><h1 style="color:red;"><?php echo $row2['den_perastikan']; ?> (<?php print (($perastikan2/($perastikan1+$perastikan2))*100); ?>%)</h1></h3></div>
			
		   
		   
            </div>
        </div>
		<div style="padding-top:248px;"></div>
</div>
</div>


<footer class="py-4 bg-dark mt-auto">
    <div class="container-fluid">
        <div class="d-flex small">
            <div class="text-muted p-2">Copyright © 2021 Kyriazis Ioannis | Papadopoulos Panagiotis | Mamoullelis Apostolos - All Rights Reserved.</div>
            <div class="text-muted ml-auto p-2">GR</div>
            
        </div>
    </div>
</footer>
</body>
</html>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: ""
	},
	axisY: {
		title: "Αριθμός Μαθημάτων",
		prefix: "",
		suffix:  " μάθημα"
	},
	data: [{
		type: "bar",
		yValueFormatString: "",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>