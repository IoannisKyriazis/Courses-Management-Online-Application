<?php  
include "didaskon-elegxos.php";
				include "syndesh-geniki.php";
				include "functions.php";
	
    $select1= "select * from omadaxrhsth, dilosi, didaskalia, omadaxrhsth_me_didaskonta, didaskon where omadaxrhsth.username = '".$_SESSION['username']."' and omadaxrhsth.username=omadaxrhsth_me_didaskonta.username and didaskon.id_didaskonta=omadaxrhsth_me_didaskonta.id_didaskonta and dilosi.id_didaskalias=didaskalia.id_didaskalias and didaskalia.id_didaskonta=didaskon.id_didaskonta";
    $sql1 = mysqli_query($link,$select1);
    $row1 = mysqli_fetch_assoc($sql1);
	
	if (isset($_POST['submit'])) {
		$etos_didaskalias =$_POST['etos_didaskalias'];
	$eksamino_didaskalias =$_POST['eksamino_didaskalias'];
		
 $query = "select dilosi.katastasi as x, count(*) as y from foititis,dilosi,didaskalia where dilosi.id_didaskalias='".$_GET['id_didaskalias']."' and foititis.AM_foititi=dilosi.AM_foititi and dilosi.id_didaskalias=didaskalia.id_didaskalias and didaskalia.etos_didaskalias='$etos_didaskalias' and didaskalia.eksamino_didaskalias='$eksamino_didaskalias' group by dilosi.katastasi";  
 $result = mysqli_query($link, $query); 
	}
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
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
	  
	  
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
			<a class="text-dark text-decoration-none small">Ποσοστά φοιτητών που πέρασαν ή δεν πέρασαν ένα ανατιθέμενο μάθημα για συγκεκριμένο έτος και εξάμηνο</a>
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
    <li class="nav-item active">
      <a class="nav-link" href="didaskon-statistika-perasan-1.php">Ποσοστά φοιτητών που πέρασαν ή δεν πέρασαν ένα ανατιθέμενο μάθημα για συγκεκριμένο έτος και εξάμηνο</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="didaskon-statistika-perasanola.php">Ποσοστά φοιτητών που πέρασαν ή δεν πέρασαν όλα τα ανατιθέμενα μαθήματα του διδάσκοντος (σε όλα τα έτη)</a>
    </li>
  </ul>
</nav>
<div style="padding-top:50px;"></div>
<form name="frmUser" method="post" action="">
<div class="form-group">
            <input type="text" name="etos_didaskalias" class="form-control" placeholder="Έτος Διδασκαλίας" required="required">	
        </div>
		<div class="form-group">
            <input type="text" name="eksamino_didaskalias" class="form-control" placeholder="Εξάμηνο Διδασκαλίας" required="required">	
        </div>
		
        <div class="form-group mt-5">
            <button type="submit" name="submit" value="Submit" class="btn btn-primary">Παραγωγή Διαγράμματος</button>
        </div>
		</form>		
				<div style="padding-top:50px;"></div><?php if(isset($_POST['etos_didaskalias']) && isset($_POST['eksamino_didaskalias'])){?>
				<div class="mx-auto" style="width:600px;">  
				<h3 align="center">Ποσοστά φοιτητών που πέρασαν ή δεν πέρασαν ένα ανατιθέμενο μάθημα για συγκεκριμένο έτος και εξάμηνο</h3>  
                <br /> 
				<h4 align="center">Έτος: <?php echo $_POST['etos_didaskalias']; ?><br /> Εξάμηνο: <?php echo $_POST['eksamino_didaskalias']; ?>ο</h4> 
                <div class="mx-auto" id="piechart" style="width: 900px; height: 500px;"></div>  
				<?php } ?>
           </div>
			
		   
		   
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


<script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Katastasi', 'Perastikan'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["x"]."', ".$row["y"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: '',  
                      //is3D:true,  
                      pieHole: 0  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>