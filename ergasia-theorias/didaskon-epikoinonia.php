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
        <link href="style.css" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
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

.koumpi {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-decoration:none;
  text-align: center;
  width: 100%;
  font-size: 15px;
}
	</style>
		
</head>


<?php
include "didaskon-elegxos.php";
include "functions.php";
?>


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
	<li class="nav-item active">
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
			<a class="text-dark text-decoration-none small">Επικοινωνία</a>
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
  <a href="didaskon-statistika-arithmosanatethimenwn.php">Στατιστικά</a>
  <a href="didaskon-profile.php">Προφίλ</a>
  </li>
</div>


<main>
<div class="mt-2"></div>
   <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Επικοινωνία</h2>
						<div class="grammikatoapotitlo"></div>
						<div class="mt-5"></div>
						
						
						<div class="card1">
						<div class="pt-5"></div>
  <h3>Apostolos Mamoulellis</h3>
  <p class="title1">Database Design & Documents Creation</p>
  <p>321/2018107</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/profile.php?id=100007764404798"><img src="photos/facebook.png" width="30" height="30"></a>
  </div>
  <a href="#" style="text-decoration:none;" onclick="CopyToClipboard1('sample1');return false;">
	<div class="koumpi" style="display:flex; flex-direction: row; justify-content: center; align-items: center; height:40px">
	<i class="far fa-copy"></i>
	<div id="sample1" class="koumpi" style="text-decoration:none;">icsd17108@aegean.gr</div>
	</div>
  </a>
</div>

<div style="padding-top:20px"></div>

<div class="card1">
						<div class="pt-5"></div>
  <h3>Panagiotis Papadopoulos</h3>
  <p class="title1">App Development</p>
  <p>321/2018161</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/profile.php?id=100011008470929"><img src="photos/facebook.png" width="30" height="30"></a>  
    <a target="_blank" href="https://www.instagram.com/pappanos1/"><img src="photos/instagram.png" width="23" height="23"></a>  
    <a target="_blank" href="https://www.linkedin.com/in/panagiotis-papadopoulos-02b010208/"><img src="photos/linkedin.png" width="30" height="30"></a> 
  </div>
 <a href="#" style="text-decoration:none;" onclick="CopyToClipboard2('sample2');return false;">
	<div class="koumpi" style="display:flex; flex-direction: row; justify-content: center; align-items: center; height:40px">
	<i class="far fa-copy"></i>
	<div id="sample2" class="koumpi" style="text-decoration:none;">icsd18161@aegean.gr</div>
	</div>
  </a>
</div>

<div style="padding-top:20px"></div>

<div class="card1">
						<div class="pt-5"></div>
  <h3>Ioannis Kyriazis</h3>
  <p class="title1">Graphics Design & App Development</p>
  <p>321/2018107</p>
  <div style="margin: 24px 0;">
    <a target="_blank" href="https://www.facebook.com/Ioannis.Kyriazis.gk"><img src="photos/facebook.png" width="30" height="30"></a>  
    <a target="_blank" href="https://www.instagram.com/giannis_kyriazis/"><img src="photos/instagram.png" width="23" height="23"></a>  
    <a target="_blank" href="https://www.linkedin.com/in/ioanniskyriazis/"><img src="photos/linkedin.png" width="30" height="30"></a> 
  </div>
  <a href="#" style="text-decoration:none;" onclick="CopyToClipboard3('sample3');return false;">
	<div class="koumpi" style="display:flex; flex-direction: row; justify-content: center; align-items: center; height:40px">
	<i class="far fa-copy"></i>
	<div id="sample3" class="koumpi" style="text-decoration:none;">icsd18107@aegean.gr</div>
	</div>
  </a>
</div>
						
						
						</div>
                    </div>
                </div>
            </div>        
        </div>
<div class="mt-5"></div>
</main>



<footer class="py-4 bg-dark mt-auto">
    <div class="container-fluid">
        <div class="d-flex small">
            <div class="text-muted p-2">Copyright © 2021 Kyriazis Ioannis | Papadopoulos Panagiotis | Mamoullelis Apostolos - All Rights Reserved.</div>
            <div class="text-muted ml-auto p-2">GR</div>
            <div>
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
function CopyToClipboard1(id)
{
var r = document.createRange();
r.selectNode(document.getElementById(id));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
alert("Το email αντιγράφηκε!");
}
</script>

<script>
function CopyToClipboard2(id)
{
var r = document.createRange();
r.selectNode(document.getElementById(id));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
alert("Το email αντιγράφηκε!");
}
</script>

<script>
function CopyToClipboard3(id)
{
var r = document.createRange();
r.selectNode(document.getElementById(id));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
alert("Το email αντιγράφηκε!");
}
</script>